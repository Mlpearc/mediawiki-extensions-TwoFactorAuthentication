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

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'TwoFactorAuth',
	'author' => 'Tyler Romeo',
	'version' => '0.2',
	'url' => 'https://mediawiki.org/wiki/Extension:TwoFactorAuthentication',
	'descriptionmsg' => 'twofactorauth-desc',
);

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

/**
 * Whether to show the two factor authentication on another page.
 */
$wgTwoFactorSeparatePages = true;

$wgAutoloadClasses['TwoFactorAuthHooks'] = __DIR__ . '/TwoFactorAuth.hooks.php';
$wgAutoloadClasses['HOTP'] = __DIR__ . '/lib/hotp.php';
$wgAutoloadClasses['Base32'] = __DIR__ . '/lib/base32.php';
$wgAutoloadClasses['TwoFactorAuthUser'] = __DIR__ . '/TwoFactorUser.php';
$wgAutoloadClasses['SpecialTwoFactorAuth'] = __DIR__ . '/SpecialTwoFactorAuth.php';

$wgExtensionMessagesFiles['TwoFactorAuth'] = __DIR__ . '/TwoFactorAuth.i18n.php';
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

Hooks::register( 'AbortLogin', 'TwoFactorAuthHooks::onAbortLogin' );
Hooks::register( 'UserLoginForm', 'TwoFactorAuthHooks::onUserLoginForm' );
Hooks::register( 'UserLoginComplete', 'TwoFactorAuthHooks::onUserLoginComplete' );
Hooks::register( 'GetPreferences', 'TwoFactorAuthHooks::onGetPreferences' );
Hooks::register( 'LoadExtensionSchemaUpdates', 'TwoFactorAuthHooks::onLoadExtensionSchemaUpdates' );
Hooks::register( 'UnitTestsList', 'TwoFactorAuthHooks::onUnitTestsList' );
