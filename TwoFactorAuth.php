<?php
/**
 * TwoFactorAuth extension - Support for TOTP two-factor authentication
 *
 * For more info see http://mediawiki.org/wiki/Extension:TwoFactorAuth
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

/**
 * Window size for TOTP, in seconds.
 *
 * Changing this is usually not necessary
 * unless you are running into problems where malicious users are stealing
 * other users' tokens in less than this amount of time..
 */
$wgTwoFactorWindowSize = 30;

/**
 * Leniency in accepting tokens. This number of windows before and after
 * will be accepted. For example, if set to 4, the previous 4 tokens and
 * next 4 tokens will be accepted. This is useful for when there is a lack
 * of time synchronization. Default is good for most.
 */
$wgTwoFactorWindowLeniency = 1;

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'TwoFactorAuth',
	'author' => 'Tyler Romeo',
	'version' => '0.2',
	'url' => 'http://mediawiki.org/wiki/Extension:TwoFactorAuth',
	'descriptionmsg' => 'twofactorauth-desc',
);

$dir = dirname( __FILE__ ) . '/';

$wgExtensionMessagesFiles['TwoFactorAuth'] = $dir . 'TwoFactorAuth.i18n.php';
$wgAutoloadClasses['HOTP'] = $dir . 'lib/hotp.php';
$wgAutoloadClasses['Base32'] = $dir . 'lib/base32.php';
$wgAutoloadClasses['TwoFactorAuthUser'] = $dir . 'lib/TwoFactorUser.php';
$wgAutoloadClasses['SpecialTwoFactorAuth'] = $dir . 'SpecialTwoFactorAuth.php';
$wgSpecialPages['TwoFactorAuth'] = 'SpecialTwoFactorAuth';

$wgResourceModules['ext.twofactorauth'] = array(
	'scripts' => array(
		'modules/jquery.qrcode.js',
		'modules/qrcode.js',
	),
	'position' => 'top',
	'localBasePath' => dirname( __FILE__ ),
	'remoteExtPath' => 'TwoFactorAuthentication',
);

$wgHooks['AbortLogin'][] = 'TwoFactorAuth_onAbortLogin';
$wgHooks['UserLoginForm'][] = 'TwoFactorAuth_LoginForm';
//$wgHooks['ChangePasswordForm'][] = 'TwoFactorAuth_ChangePasswordForm';
$wgHooks['UserLoginComplete'][] = 'TwoFactorAuth_onSuccessfulLogin';
$wgHooks['GetPreferences'][] = 'TwoFactorAuth_PreferencesForm';
$wgHooks['LoadExtensionSchemaUpdates'][] = 'efTwoFactorAuthSchemaUpdates';
$wgHooks['UnitTestsList'][] = 'efTwoFactorAuthRegisterUnitTests';

/**
 * Modify the login form template to add a field for the TOTP.
 *
 * @param $template UserloginTemplate
 * @return bool
 */
function TwoFactorAuth_LoginForm( &$template ) {
	$input = '<td class="mw-label"><label for="wpTwoFactorToken">'
		. wfMsgHtml( 'twofactorauth-token' )
		. '</label></td><td class="mw-input">'
		. Html::input( 'wpTwoFactorToken', null, 'password', array(
			'class' => 'loginPassword', 'id' => 'wpTwoFactorToken', 'tabindex' => '3', 'size' => '20'
		) ) . '</td>';
	$template->set( 'extrafields', $input );

	return true;
}

/**
 * Modify the change password form to add a field for the TOTP.
 *
 * @param $extraFields array
 * @return bool
 */
function TwoFactorAuth_ChangePasswordForm( &$extraFields ) {
	$tokenField = array( 'wpTwoFactorToken', 'twofactorauth-token', 'password', '' );
	array_push( $extraFields, $tokenField );
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
function TwoFactorAuth_PreferencesForm( $user, &$preferences ) {
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
function TwoFactorAuth_onAbortLogin( $user, $password, &$result ) {
	global $wgRequest;

	$authuser = new TwoFactorAuthUser( $user );
	$token = $wgRequest->getText( 'wpTwoFactorToken' );
	if( $authuser->loadFromDatabase() && !$authuser->verifyToken( $token ) ) {
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
function TwoFactorAuth_onSuccessfulLogin( User &$currentUser, &$injected_html ) {
	$authuser = new TwoFactorAuthUser( $currentUser );
	if( $authuser->loadFromDatabase() && count( $authuser->getScratchTokens() ) <= 1 ) {
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
function efTwoFactorAuthSchemaUpdates( $updater ) {
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
function efTwoFactorAuthRegisterUnitTests( &$files ) {
	$testDir = dirname( __FILE__ ) . '/tests/';
	$files[] = $testDir . 'TwoFactorUserTest.php';
	return true;
}
