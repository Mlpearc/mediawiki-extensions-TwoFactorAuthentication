<?php

/**
 * Class representing a user from TwoFactor's perspective
 *
 * @file
 * @ingroup Extensions
 */

class TwoFactorAuthUser extends ContextSource {
	private $user, $secret, $scratchTokens, $enabled;

	/**
	 * Make a new two-factor user using the given User object.
	 *
	 * @param $user User object
	 */
	public function __construct( $user ) {
		$this->user = $user;
		$this->enabled = false;
	}

	/**
	 * Load authentication secrets from the database if they exist.
	 *
	 * @return True if loaded from the DB, false if they do not exist
	 */
	public function loadFromDatabase() {
		$dbr = wfGetDB( DB_SLAVE );
		$row = $dbr->selectRow(
			'twofactorauth',
			array(
				'secret',
				'scratch_tokens' ),
			array(  'id' => $this->user->getId() ),
			__METHOD__
		);

		if( $row ) {
			$this->secret = $row->secret;
			$this->scratchTokens = unserialize( $row->scratch_tokens );
			$this->enabled = true;
		}
		return (bool) $row;
	}

	/**
	 * Load authentication secrets from the session if they exist.
	 *
	 * @return True if loaded from session, false if they do not exist
	 */
	public function loadFromSession() {
		$request = $this->getRequest();
		$secret = $request->getSessionData( 'wsTwoFactorSecret' );
		$scratchTokens = $request->getSessionData( 'wsTwoFactorScratchTokens' );

		if( $secret && $scratchTokens ) {
			$this->secret = $secret;
			$this->scratchTokens = $scratchTokens;
			return true;
		} else {
			return false;
		}
	}

	/**
	 * Clear authentication secrets from the session.
	 */
	public function clearFromSession() {
		$request = $this->getRequest();
		$request->setSessionData( 'wsTwoFactorSecret', false );
		$request->setSessionData( 'wsTwoFactorScratchTokens', false );
	}

	/**
	 * Load authentication secrets randomly, i.e., initialize new secrets.
	 */
	public function loadFromRandom() {
		$this->secret = Base32::encode( MWCryptRand::generate( 10, true ) );
		$this->regenerateScratchTokens();
		$this->enabled = false;
	}

	/**
	 * Save authentication secrets to session variables.
	 */
	public function saveToSession() {
		$request = $this->getRequest();
		$request->setSessionData( 'wsTwoFactorSecret', $this->getSecret() );
		$request->setSessionData( 'wsTwoFactorScratchTokens', $this->getScratchTokens() );
	}

	/**
	 * Get the name of the account, i.e., <username>@<sitename>.
	 *
	 * @return string
	 */
	public function getAccount() {
		global $wgSitename;
		return urlencode( $this->user->getName() ) . '@' . $wgSitename;
	}

	/**
	 * Get the authentication secret for this user.
	 *
	 * @return string
	 */
	public function getSecret() {
		return $this->secret;
	}

	/**
	 * Get an array of scratch tokens for this user.
	 *
	 * @return array
	 */
	public function getScratchTokens() {
		return $this->scratchTokens;
	}

	/**
	 * Determine if this user has two-factor auth enabled or not, i.e., if the authentication
	 * secrets are stored in the database.
	 *
	 * @return bool True if enabled
	 */
	public function enabled() {
		return $this->enabled;
	}

	/**
	 * Verify the given TOTP token using the current time.
	 *
	 * Check the token against the current, previous, and next time windows (to allow for
	 * leniency in time differences). If none match, check against the backup tokens.
	 *
	 * @param $token Token to check
	 * @return bool True if verified, false if invalid
	 */
	public function verifyToken( $token ) {
		global $wgTwoFactorWindowSize, $wgTwoFactorWindowLeniency;
		$results = HOTP::generateByTimeWindow(
			Base32::decode( $this->secret ),
			$wgTwoFactorWindowSize,
			-$wgTwoFactorWindowLeniency,
			$wgTwoFactorWindowLeniency
		);

		// Check to see if the user's given token is in the list of tokens generated
		// for the time window.
		foreach( $results as $result ) {
			if( $result->toHOTP( 6 ) === $token ) {
				return true;
			}
		}

		// See if the user is using a scratch token
		for ( $i = 0; $i < count( $this->scratchTokens ); $i++ ) {
			if ( $token === $this->scratchTokens[$i] ) {
				// If there is a scratch token, remove it from the scratch token list
				unset( $this->scratchTokens[$i] );
				// Only return true if we removed it from the database
				return $this->updateScratchTokens();
			}
		}

		return false;
	}

	/**
	 * Enable this user's two factor auth and insert info into the database.
	 *
	 * @return bool
	 */
	public function enable() {
		$dbw = wfGetDB( DB_MASTER );
		$success = $dbw->insert(
			'twofactorauth',
			array(
				'id' => $this->user->getId(),
				'secret' => $this->secret,
				'scratch_tokens' => serialize( $this->scratchTokens ),
			),
			__METHOD__
		);

		if( $success ) {
			$this->enabled = true;
		}
		return $success;
	}

	/**
	 * Disable this user's two factor auth and remove info from the database.
	 *
	 * @return bool
	 */
	public function disable() {
		$dbw = wfGetDB( DB_MASTER );
		$success = $dbw->delete(
			'twofactorauth',
			array( 'id' => $this->user->getId() ),
			__METHOD__
		);

		if( $success ) {
			$this->enabled = false;
		}
		return $success;
	}

	/**
	 * Update the list of scratch token to the database. This function is
	 * used when a scratch token is spent and needs to be invalidated.
	 *
	 * @return bool
	 */
	public function updateScratchTokens() {
		$dbw = wfGetDB( DB_MASTER );
		return $dbw->update(
			'twofactorauth',
			array( 'scratch_tokens' => serialize( $this->scratchTokens ) ),
			array( 'id' => $this->user->getId() ),
			__METHOD__
		);
	}

	/**
	 * Reset and regenerate all scratch tokens for this user. This will not
	 * update to the database; that must be done separately.
	 */
	public function regenerateScratchTokens() {
		$scratchTokens = array();
		for ( $i = 0; $i < 5; $i++ ) {
			array_push( $scratchTokens, Base32::encode( MWCryptRand::generate( 10, true ) ) );
		}
		$this->scratchTokens = $scratchTokens;
	}
}
