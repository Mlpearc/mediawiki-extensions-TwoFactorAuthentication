<?php

/**
 * Internationalisation file for extension TwoFactorAuth
 *
 * @file
 * @ingroup Extensions
 * @author Ryan Lane <rlane@wikimedia.org>
 * @copyright © 2011 Ryan Lane
 * @license GNU General Public Licence 3.0 or later
 */

$messages = array();

/**
 * English
 * @author Tyler Romeo <tylerromeo@gmail.com>
 * @author Ryan Lane <rlane@wikimedia.org>
 */
$messages['en'] = array(
	'twofactorauth-desc' => 'Provides authentication support using HMAC based one time passwords',
	'twofactorauth' => 'Two Factor Authentication',
	'twofactorauth-text' => 'This allows you to enable or disable two-factor authentication. If you are enabling two-factor authentication, scan the QR code below (or enter the secret manually) into your device. Then enter a token in the field to verify. If disabling two-factor authentication, enter a token in the field to verify and disable.',
	'twofactorauth-legend' => 'Two Factor Authentication',
	'twofactorauth-account' => 'Two Factor Account Name:',
	'twofactorauth-secret' => 'Two Factor Secret Key:',
	'twofactorauth-title-enable' => 'Enable Two Factor Authentication',
	'twofactorauth-title-disable' => 'Disable Two Factor Authentication',
	'twofactorauth-title-reset' => 'Reset Two Factor Authentication',
	'twofactorauth-enabledisable' => 'Enable/Disable Two Factor Authentication',
	'twofactorauth-token' => 'Token',
	'twofactorauth-qrcode' => 'QR Code Secret',
	'twofactorauth-scratch' => 'Backup Tokens',
	'twofactorauth-authfailed' => 'Failed to validate two factor credentials',
	'twofactorauth-success-enable' => 'Two step verification successfully enabled.',
	'twofactorauth-success-disable' => 'Two step verification successfully disabled.',
	'twofactoruath-enable' => 'Enable',
	'twofactorauth-disable' => 'Disable',
	'twofactorauth-resetscratchtokens' => 'Reset Backup Tokens',
	'twofactorauth-scratchwarning-link' => 'reset your backup tokens',
	'twofactorauth-scratchwarning-text' => '<b>Warning!</b> The number of backup tokens you have for Two Factor authentication is running low. It is recommended you $1 soon.',

);

/**
 * Message documentation (Message documentation)
 * @author Tyler Romeo <tylerromeo@gmail.com>
 * @author Ryan Lane <rlane@wikimedia.org>
 */
$messages['qqq'] = array(
	'twofactorauth-desc' => '{{desc}}',
	'twofactorauth' => 'Extension name, found on Special:Version',
	'twofactorauth-text' => 'Introduction and usage text on Special:TwoFactorAuthAuth.',
	'twofactorauth-legend' => 'HTMLForm label for the fieldset on Special:TwoFactorAuth.',
	'twofactorauth-account' => 'Account name associated with two factor authentication on this wiki (username@<wiki name>) found on Special:TwoFactorAuth.',
	'twofactorauth-secret' => 'Plain text authentication secret found on Special:TwoFactorAuth while enabling twofactor',
	'twofactorauth-title-enable' => 'Page title on Special:TwoFactorAuth, when enabling twofactor.',
	'twofactorauth-title-disable' => 'Page title on Special:TwoFactorAuth while disabling twofactor.',
	'twofactorauth-title-reset' => 'Page title when resetting scratch tokens',
	'twofactorauth-enabledisable' => 'Label for the link to Special:TwoFactorAuth from Special:Preferences.',
	'twofactorauth-token' => 'HTMLForm label, found on Special:TwoFactorAuth, when verifying twofactor.',
	'twofactorauth-qrcode' => 'HTMLForm label, found on Special:TwoFactorAuth, for the QR code secret.',
	'twofactorauth-scratch' => 'HTMLForm label, found on Special:TwoFactorAuth, for the backup codes.',
	'twofactorauth-authfailed' => 'Plain text, found on Special:TwoFactorAuth when failing to enable twofactor.',
	'twofactorauth-success-enable' => 'Success message after enabling two-factor authentication.',
	'twofactorauth-success-disable' => 'Success message after disabling two-factor authentication.',
	'twofactorauth-enable' => 'Label for submit button to enable two-factor auth.',
	'twofactorauth-disable' => 'Label for submit button to disable two-factor auth',
	'twofactorauth-resetscratchtokens' => 'Label for submit button to reset scratch tokens',
	'twofactorauth-scratchwarning-link' => 'Text for the link to Special:TwoFactorAuth when warning the user about backup tokens',
	'twofactorauth-scratchwarning-text' => 'Text for a warning when a user is running out of backup tokens to use.'
);

/** German (Deutsch)
 * @author Kghbln
 * @author Metalhead64
 */
$messages['de'] = array(
	'twofactorauth-desc' => 'Ermöglicht die Authentifizierung mit HMAC-gestützten Einmalpasswörtern',
	'twofactorauth' => 'Zwei-Faktor-Authentifizierung',
	'twofactorauth-text' => 'Dies ermöglicht dir die Aktivierung oder Deaktivierung der Zwei-Faktor-Authentifizierung. Falls du die Zwei-Faktor-Authentifizierung aktivierst, scanne den unten angegebenen QR-Code in dein Gerät oder gib das Geheimnis manuell ein. Dann gib das Token zur Verifizierung in das Feld ein. Falls du die Zwei-Faktor-Authentifizierung deaktivierst, gib den Token zur Verifizierung und Deaktivierung in das Feld ein.',
	'twofactorauth-legend' => 'Zwei-Faktor-Authentifizierung',
	'twofactorauth-account' => 'Zwei-Faktor-Kontenname:',
	'twofactorauth-secret' => 'Zwei-Faktor-Geheimschlüssel:',
	'twofactorauth-title-enable' => 'Die Zwei-Faktor-Authentifizierung aktivieren',
	'twofactorauth-title-disable' => 'Die Zwei-Faktor-Authentifizierung deaktivieren',
	'twofactorauth-title-reset' => 'Die Zwei-Faktor-Authentifizierung zurücksetzen',
	'twofactorauth-enabledisable' => 'Die Zwei-Faktor-Authentifizierung aktivieren/deaktivieren',
	'twofactorauth-token' => 'Token',
	'twofactorauth-qrcode' => 'QR-Code-Geheimnis',
	'twofactorauth-scratch' => 'Sicherungstoken',
	'twofactorauth-authfailed' => 'Die Zwei-Faktor-Anmeldeinformationen konnten nicht bestätigt werden.',
	'twofactorauth-success-enable' => 'Zwei-Schritte-Überprüfung wurde erfolgreich aktiviert.',
	'twofactorauth-success-disable' => 'Zwei-Schritte-Überprüfung wurde erfolgreich deaktiviert.',
	'twofactoruath-enable' => 'Aktivieren',
	'twofactorauth-disable' => 'Deaktivieren',
	'twofactorauth-resetscratchtokens' => 'Sicherungstoken zurücksetzen',
	'twofactorauth-scratchwarning-link' => 'Setze deine Sicherungstoken zurück',
	'twofactorauth-scratchwarning-text' => '<b>Achtung!</b> Deine Sicherungstoken für die Zwei-Faktor-Authentifizierung gehen zu Neige. Es wird $1 empfohlen.',
);

