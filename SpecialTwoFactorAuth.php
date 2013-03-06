<?php

/**
 * Special page to display Two Factor authentication information to users
 *
 * @file
 * @ingroup Extensions
 */

class SpecialTwoFactorAuth extends FormSpecialPage {

	/**
	 * A TwoFactorUser instance representing two-factor auth info for the user
	 */
	private $twoFactorUser;

	/**
	 * The WebRequest object from the original login
	 */
	private $loginRequest;

	/**
	 * Make a new TwoFactorAuth user for the current context. First try to load information
	 * from the database, then from the session. If no TwoFactorAuth information is available
	 * for the current user, make new info and store it in the session.
	 */
	function __construct() {
		parent::__construct( 'TwoFactorAuth' );
		$this->twoFactorUser = new TwoFactorAuthUser( $this->getUser() );
		if ( !$this->twoFactorUser->loadFromDatabase() && !$this->twoFactorUser->loadFromSession() ) {
			$this->twoFactorUser->loadFromRandom();
			$this->twoFactorUser->saveToSession();
		}

		$this->action = $this->twoFactorUser->enabled() ? 'disable' : 'enable';
		$this->reset = $this->getRequest()->getCheck( 'reset' );
		$this->loginRequest = false;
	}

	/**
	 * This extension deals with authentication, and thus should not be affected by blocks.
	 * @return bool
	 */
	function requiresUnblock() {
		return false;
	}

	/**
	 * Check if the user is logged in. Only logged in users can change TwoFactorAuth options.
	 *
	 * @throws UserNotLoggedIn
	 */
	function checkExecutePermissions( User $user ) {
		parent::checkExecutePermissions( $user );
		if ( !$user->isLoggedIn() && !$this->loginRequest ) {
			throw new UserNotLoggedIn();
		}
	}

	/**
	 * If the parameter is /auth, we're authenticating.
	 */
	function setParameter( $par ) {
		global $wgTwoFactorSeparatePages;
		if ( $wgTwoFactorSeparatePages && $par === 'auth' ) {
			$loginRequest = $this->getRequest()->getSessionData( 'wsLoginRequest' );
			if ( $loginRequest ) {
				$this->action = 'auth';
				$this->loginRequest = $loginRequest;

				$user = User::newFromName( $this->loginRequest->getText( 'wpName' ) );
				$this->twoFactorUser = new TwoFactorAuthUser( $user );
				$this->twoFactorUser->loadFromDatabase();
			}
		}
	}

	/**
	 * Get the description for this page. Depends on the action.
	 *
	 * @return Message
	 */
	function getDescription() {
		return $this->msg( "twofactorauth-title-{$this->action}" );
	}

	/**
	 * Get the actual form for the special page. If the user has yet to enable
	 * TwoFactorAuth, secret key information and scratch tokens will be appended
	 * at the bottom.
	 *
	 * @return Array of fields
	 */
	function getFormFields() {
		$fields = array();
		$fields['token'] = array(
			'type' => 'text',
			'default' => '',
			'label-message' => 'twofactorauth-token',
			'name' => 'token',
		);

		// If user is planning to enable two-factor auth, show secrets.
		// These secrets won't actually be stored in the database until
		// the user verifies.
		if ( $this->action == 'enable' ) {
			$secret = $this->twoFactorUser->getSecret();
			$this->getOutput()->addModules( 'ext.twofactorauth' );
			$this->getOutput()->addInlineScript( 'jQuery("#qrcode").qrcode("otpauth://totp/' . $this->twoFactorUser->getAccount() . '?secret=' . $secret . '")' );

			$fields['account'] = array(
				'type' => 'info',
				'label-message' => 'twofactorauth-account',
				'default' => $this->twoFactorUser->getAccount()
			);

			$fields['secret'] = array(
				'type' => 'info',
				'label-message' => 'twofactorauth-secret',
				'default' => $this->twoFactorUser->getSecret()
			);

			$fields['secretqr'] = array(
				'type' => 'info',
				'label-message' => 'twofactorauth-qrcode',
				'raw' => true,
				'default' => Html::element( 'div', array( 'id' => 'qrcode' ) )
			);

			$fields['scratchcodes'] = array(
				'type' => 'info',
				'label-message' => 'twofactorauth-scratch',
				'raw' => true,
				'default' => '<ul><li>' .
					implode( '</li><li>', $this->twoFactorUser->getScratchTokens() ) .
					'</li></ul>'
			);
		}

		return $fields;
	}

	/**
	 * Set the submit text on the form.
	 *
	 * @param HTMLForm $form Form to alter
	 * @see FormSpecialPage::alterForm
	 */
	function alterForm( HTMLForm $form ) {
		$form->setSubmitTextMsg( "twofactorauth-{$this->action}" );

		// If action is to disable, add a reset button as well.
		if ( $this->action == 'disable' ) {
			$resetLabel = wfMessage( 'twofactorauth-resetscratchtokens' );
			$form->addButton( 'reset', $resetLabel );
		}
	}

	/**
	 * Process the form. If the token is valid, toggle the user's TwoFactorAuth status.
	 *
	 * @param $formData array
	 * @return bool
	 */
	public function onSubmit( array $formData ) {
		// If the action is 'auth', let LoginForm do the processing.
		if ( $this->action !== 'auth' ) {
			$verify = $this->TwoFactorUser->verifyToken( $formData['token'] );
			if ( !$verify ) {
				$this->getOutput()->addWikiMsg( 'twofactorauth-authfailed' );
				return false;
			}
		}

		if ( $this->action == 'auth' ) {
			$this->loginRequest->setVal( 'wpTwoFactorToken', $formData['token'] );
			RequestContext::getMain()->setRequest( $this->loginRequest );
			$login = new LoginForm( $this->loginRequest );
			$login->execute( null );
			$result = true;
		} elseif ( $this->action == 'enable' ) {
			$result = $this->twoFactorUser->enable();
		} elseif ( $this->reset ) {
			$this->twoFactorUser->regenerateScratchTokens();
			$this->twoFactorUser->saveToSession();
			$result = $this->twoFactorUser->updateScratchTokens();
		} else {
			$this->twoFactorUser->clearFromSession();
			$result = $this->twoFactorUser->disable();
		}

		if ( !$result ) {
			throw new ErrorPageError( 'oathauth', 'twofactorauth-dberror' );
		}

		return true;
	}

	/**
	 * Display a success message.
	 */
	function onSuccess() {
		if ( $this->action == 'auth' ) {
			return;
		}

		if ( $this->reset ) {
			$backupTokens = Html::rawElement( 'table', array(),
				Html::rawElement( 'tr', array(),
					Html::rawElement( 'td', array(), wfMessage( 'twofactorauth-scratch' ) ) .
					Html::rawElement( 'td', array(),
						'<ul><li>' .
						implode( '</li><li>', $this->twoFactorUser->getScratchTokens() ) .
						'</li></ul>'
					)
				)
			);
			$this->getOutput()->setPageTitle( wfMessage( 'twofactorauth-title-reset' ) );
			$this->getOutput()->addHTML( $backupTokens );
		} else {
			$this->getOutput()->addWikiMsg( "twofactorauth-success-{$this->action}" );
		}
	}
}
