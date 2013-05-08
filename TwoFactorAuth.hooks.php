<?php

/**
 * TwoFactorAuth extension - Support for TOTP two-factor authentication
 *
 * For more info see https://mediawiki.org/wiki/Extension:TwoFactorAuthentication
 *
 * @file
 * @ingroup Extensions
 * @author Tyler Romeo <tylerromeo@gmail.com>
 * @author Ryan Lane <rlane@wikimedia.org>
 * @copyright © 2012 Ryan Lane, Tyler Romeo
 * @license GNU General Public Licence 3.0 or later
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	echo( "This file is an extension to the MediaWiki software and cannot be used standalone.\n" );
	die( 1 );
}

class TwoFactorAuthHooks {
	/**
	 * Modify the login form template to add a field for the TOTP.
	 *
	 * @param $template UserloginTemplate
	 * @return bool
	 */
	public static function onUserLoginForm( &$template ) {
		global $wgTwoFactorSeparatePages;

		if ( $wgTwoFactorSeparatePages ) {
			return true;
		}

		if ( isset( $template->data['extrafields'] ) ) {
			$extrafields = $template->data['extrafields'];
		} else {
			$extrafields = '';
		}

		// Since it's a textbox, put it at the beginning of the extra fields.
		$extrafields = Html::rawElement( 'tr', array(),
			Html::rawElement( 'td', array( 'class' => 'mw-label' ),
				Html::element( 'label', array( 'for' => 'wpTwoFactorToken' ), wfMessage( 'twofactorauth-token' ) )
			) .
			Html::rawElement( 'td', array( 'class' => 'mw-input' ),
				Html::input( 'wpTwoFactorToken', null, 'password',
					array( 'class' => 'loginPassword', 'id' => 'wpTwoFactorToken', 'tabindex' => '3', 'size' => '20' ) )
			)
		) . $extrafields;

		$template->set( 'extrafields', $extrafields );
		return true;
	}

	/**
	 * Add a complimentary link to the Preferences form that brings the
	 * user to the Two Factor auth page.
	 *
	 * @param $user Current user
	 * @param &$preferences Array of preferences
	 * @return bool
	 */
	public static function onGetPreferences( $user, &$preferences ) {
		$link = Linker::link(
			SpecialPage::getTitleFor( 'TwoFactorAuth' ),
			wfMessage( 'twofactorauth-enabledisable' )->escaped()
		);

		$preferences['twofactorauth'] = array(
			'type' => 'info',
			'raw' => true,
			'default' => $link,
			'label-message' => 'twofactorauth',
			'section' => 'personal/info'
		);

		return true;
	}

	/**
	 * Check if the token in this request is valid for the given user. If not, treat
	 * it as an incorrect password and return false to LoginForm.
	 *
	 * @param $username User object
	 * @param $password string
	 * @param $result bool
	 * @return bool
	 */
	public static function onAbortLogin( User $user, $password, &$result ) {
		global $wgTwoFactorSeparatePages;

		$context = RequestContext::getMain();
		$authuser = new TwoFactorAuthUser( $user );
		if ( !$authuser->loadFromDatabase() ) {
			return true;
		}

		if ( $wgTwoFactorSeparatePages && $context->getTitle()->equals( SpecialPage::getTitleFor( 'Userlogin' ) ) ) {
			$authuser->saveToSession();
			$context->getRequest()->setSessionData( 'wsLoginRequest', $context->getRequest() );
			$context->getOutput()->redirect(
				SpecialPage::getTitleFor( 'TwoFactorAuth', 'auth' )
				->getFullURL( '', false, PROTO_CURRENT )
			);
			return false;
		} elseif ( !$authuser->verifyToken( $context->getRequest()->getText( 'wpTwoFactorToken' ) ) ) {
			$result = LoginForm::WRONG_PLUGIN_PASS;
			return false;
		}

		return true;
	}

	/**
	 * If the user doesn't have that many backup tokens left, leave a warning with
	 * a link.
	 *
	 * @param User &$currentUser
	 * @param &$injected_html
	 * @return bool
	 */
	public static function onUserLoginComplete( User &$currentUser, &$injected_html ) {
		$authuser = new TwoFactorAuthUser( $currentUser );
		if ( $authuser->loadFromDatabase() && count( $authuser->getScratchTokens() ) <= 1 ) {
			$title = SpecialPage::getTitleFor( 'TwoFactorAuth' );
			$link = Linker::link( $title, wfMessage( 'twofactorauth-scratchwarning-link' ) );
			$injected_html = wfMessage( 'twofactorauth-scratchwarning-text', $link )->plain();
		}
		return true;
	}
	/**
	 * @param $updater DatabaseUpdater
	 * @return bool
	 */
	public static function onLoadExtensionSchemaUpdates( $updater ) {
		$base = dirname( __FILE__ );
		switch ( $updater->getDB()->getType() ) {
		case 'mysql':
			$updater->addExtensionTable( 'twofactorauth', "$base/twofactorauth.sql" );
			break;
		}
		return true;
	}

	/**
	 * Add unit tests.
	 * @param &$files List of unit test files
	 * @return bool
	 */
	public static function onUnitTestsList( &$files ) {
		$testDir = dirname( __FILE__ ) . '/tests/';
		$files[] = $testDir . 'TwoFactorUserTest.php';
		return true;
	}
}
