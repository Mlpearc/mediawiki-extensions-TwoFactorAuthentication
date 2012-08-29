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

/** Message documentation (Message documentation)
 * @author Nemo bis
 * @author Ryan Lane <rlane@wikimedia.org>
 * @author Tyler Romeo <tylerromeo@gmail.com>
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
	'twofactorauth-disable' => 'Label for submit button to disable two-factor auth',
	'twofactorauth-resetscratchtokens' => 'Label for submit button to reset scratch tokens',
	'twofactorauth-scratchwarning-link' => 'Text for the link to Special:TwoFactorAuth when warning the user about backup tokens',
	'twofactorauth-scratchwarning-text' => 'This message is a warning and the first parameter is the link to the special page.
* <code>$1</code>: defined as {{msg-mw|twofactorauth-scratchwarning-link}}',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Metalhead64
 */
$messages['de'] = array(
	'twofactorauth-desc' => 'Ermöglicht die Authentifizierung mit HMAC-gestützten Einmalpasswörtern',
	'twofactorauth' => 'Zwei-Faktor-Authentifizierung',
	'twofactorauth-text' => 'Dies ermöglicht dir die Aktivierung oder Deaktivierung der Zwei-Faktor-Authentifizierung. Falls du die Zwei-Faktor-Authentifizierung aktivierst, scanne den unten angegebenen QR-Code mit deinem Gerät oder gib das Geheimnis manuell ein. Gib danach ein Token zur Verifizierung in das Feld ein. Falls du die Zwei-Faktor-Authentifizierung deaktivierst, gib ein Token zur Verifizierung und Deaktivierung in das Feld ein.',
	'twofactorauth-legend' => 'Zwei-Faktor-Authentifizierung',
	'twofactorauth-account' => 'Zwei-Faktor-Kontoname:',
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

/** German (formal address) (‪Deutsch (Sie-Form)‬)
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'twofactorauth-text' => 'Dies ermöglicht Ihnen die Aktivierung oder Deaktivierung der Zwei-Faktor-Authentifizierung. Falls Sie die Zwei-Faktor-Authentifizierung aktivieren, scannen Sie den unten angegebenen QR-Code mit Ihrem Gerät oder geben Sie das Geheimnis manuell ein. Geben Sie danach ein Token zur Verifizierung in das Feld ein. Falls Sie die Zwei-Faktor-Authentifizierung deaktivieren, geben Sie ein Token zur Verifizierung und Deaktivierung in das Feld ein.',
	'twofactorauth-scratchwarning-link' => 'Setzen Sie Ihre Sicherungstoken zurück',
	'twofactorauth-scratchwarning-text' => '<b>Achtung!</b> Ihre Sicherungstoken für die Zwei-Faktor-Authentifizierung gehen zu Neige. Es wird $1 empfohlen.',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'twofactorauth-desc' => 'Zmóžnja awtentifkaciju z pomocu jónkróć wužiwanych hesłow na zakładźe HMAC',
	'twofactorauth' => 'Dwufaktorowa awtentifikacija',
	'twofactorauth-text' => 'To zmóžnja ći, dwufaktorowu awtentifikaciju zmóžnić abo znjemóžnić. Jeli zmóžniš dwufaktorowu awtentifikaciju, skanuj slědowacy QR-kod (abo zapodaj potajnstwo z ruku) do swojeho grata. Zapodaj potom token do pola za přepruwowanje. Jeli znjemóžniš dwufaktorowu awtentifikaciju, zapodaj token do pola za přepruwowanje a znjemóžnjenje.',
	'twofactorauth-legend' => 'Dwufaktorowa awtentifikacija',
	'twofactorauth-account' => 'Kontowe mjeno dwufaktoroweje awtentifikacije:',
	'twofactorauth-secret' => 'Tajny kluč dwufaktoroweje awtentfikacije:',
	'twofactorauth-title-enable' => 'Dwufaktorowu awtentifikaciju zmóžnić',
	'twofactorauth-title-disable' => 'Dwufaktorowu awtentifikaciju znjemóžnić',
	'twofactorauth-title-reset' => 'Dwufaktorowu awtentifikaciju wróćo stajić',
	'twofactorauth-enabledisable' => 'Dwufaktorowu awtentifikaciju zmóžnić/znjemóžnić',
	'twofactorauth-token' => 'Token',
	'twofactorauth-qrcode' => 'QR-kodowe potajnstwo',
	'twofactorauth-scratch' => 'Zawěsćenski token',
	'twofactorauth-authfailed' => 'Dwufaktorowe přizjewjenske informacije njedachu so přepruwować',
	'twofactorauth-success-enable' => 'Dwukročelowe přepruwowanje wuspěšnje zmóžnjene.',
	'twofactorauth-success-disable' => 'Dwukročelowe přepruwowanje wuspěšnje znjemóžnjene.',
	'twofactoruath-enable' => 'Zmóžnić',
	'twofactorauth-disable' => 'Znjemóžnić',
	'twofactorauth-resetscratchtokens' => 'Zawěsćenske tokeny wróćo stajić',
	'twofactorauth-scratchwarning-link' => 'swoje zawěsćenske tokeny wróćo stajiš',
	'twofactorauth-scratchwarning-text' => '<b>Warnowanje!</b> Ličba zawěsćenskich tokenow, kotrež maš za dwufaktorowe awtentifikaciju dźe na kónc. Poruča so, zo bórze $1.',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'twofactorauth-desc' => 'ワンタイムパスワードに基づいた HMAC を使用する認証機能を提供する',
	'twofactorauth' => '二要素認証',
	'twofactorauth-legend' => '二要素認証',
	'twofactorauth-account' => '二要素アカウント名:',
	'twofactorauth-secret' => '二要素秘密鍵:',
	'twofactorauth-title-enable' => '二要素認証の有効化',
	'twofactorauth-title-disable' => '二要素認証の無効化',
	'twofactorauth-title-reset' => '二要素認証のリセット',
	'twofactorauth-enabledisable' => '二要素認証を有効化/無効化',
	'twofactorauth-token' => 'トークン',
	'twofactorauth-scratch' => 'バックアップ トークン',
	'twofactorauth-authfailed' => '二要素信用情報の検証に失敗しました。',
	'twofactorauth-success-enable' => '二段階検証を有効にしました。',
	'twofactorauth-success-disable' => '二段階検証を無効にしました。',
	'twofactoruath-enable' => '有効',
	'twofactorauth-disable' => '無効',
	'twofactorauth-resetscratchtokens' => 'バックアップ トークンをリセット',
	'twofactorauth-scratchwarning-link' => '自分のバックアップ トークンをリセット',
	'twofactorauth-scratchwarning-text' => '<b>警告!</b> 二要素認証のバックアップ トークン数が不足しています。すぐにこちらを使用することをお勧めします: $1',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'twofactoruath-enable' => 'Aschalten',
	'twofactorauth-disable' => 'Ausschalten',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'twofactorauth-desc' => 'Овозможува заверка на корисничката веродостојност со HMAC врз основа на еднократни лозинки',
	'twofactorauth' => 'Двофакторска заверка',
	'twofactorauth-text' => 'Со ова можете да овозможувате и оневозможувате двофакторска заверка. Ако ја овозможувате, вчитајте го QR-кодот подолу (или внесете ја тајната рачно) во вашиот уред. Потоа внесете жетон во полето за да ја напрвите заверката. Ако ја оневозможувате, внесте го жетонот во полето за да заверите, а потоа оневозможете ја.',
	'twofactorauth-legend' => 'Двофакторска заверка',
	'twofactorauth-account' => 'Двофакторско корисничко име:',
	'twofactorauth-secret' => 'Двофакторски таен клуч:',
	'twofactorauth-title-enable' => 'Овозможи двофакторска заверка',
	'twofactorauth-title-disable' => 'Оневозможи двофакторска заверка',
	'twofactorauth-title-reset' => 'Презадај ја двофакторската заверка',
	'twofactorauth-enabledisable' => 'Овозможи/оневозможи двофакторска заверка',
	'twofactorauth-token' => 'Жетон',
	'twofactorauth-qrcode' => 'Тајна на QR-код',
	'twofactorauth-scratch' => 'Резервни жетони',
	'twofactorauth-authfailed' => 'Не успеав да го заверам двофакторското полномоштво',
	'twofactorauth-success-enable' => 'Двофакторската заверка е успешно овозможена.',
	'twofactorauth-success-disable' => 'Двофакторската заверка е успешно оневозможена.',
	'twofactoruath-enable' => 'Овозможи',
	'twofactorauth-disable' => 'Оневозможи',
	'twofactorauth-resetscratchtokens' => 'Презадавање на резервни жетони',
	'twofactorauth-scratchwarning-link' => 'презададете резервни жетони',
	'twofactorauth-scratchwarning-text' => '<b>Предупредување!</b> Резервните жетони за Двофакторската заверка ви се при прај. Се препорачува наскоро да $1.',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'twofactorauth-desc' => 'Biedt ondersteuning voor authenticatie via op HMAC-gebaseerde eenmalige wachtwoorden',
	'twofactorauth' => 'Twee-factor authenticatie',
	'twofactorauth-legend' => 'Twee-factor authenticatie',
	'twofactorauth-account' => 'Gebruikersnaam voor twee-factor:',
	'twofactorauth-secret' => 'Geheime sleutel voor twee-factor:',
	'twofactorauth-title-enable' => 'Twee-factor authenticatie inschakelen',
	'twofactorauth-title-disable' => 'Twee-factor authenticatie uitschakelen',
	'twofactorauth-title-reset' => 'Twee-factor authenticatie opnieuw instellen',
	'twofactorauth-enabledisable' => 'Twee-factor authenticatie in- of uitschakelen',
	'twofactorauth-token' => 'Token',
	'twofactorauth-qrcode' => 'QR Codegeheim',
	'twofactorauth-scratch' => 'Back-uptokens',
	'twofactorauth-authfailed' => 'Het valideren van de gebruikersgegevens voor twee-factor is mislukt.',
	'twofactorauth-success-enable' => 'Twee-factorverificatie is ingeschakeld.',
	'twofactorauth-success-disable' => 'Twee-factorverificatie is uitgeschakeld.',
	'twofactoruath-enable' => 'Inschakelen',
	'twofactorauth-disable' => 'Uitschakelen',
	'twofactorauth-resetscratchtokens' => 'Back-uptokens opnieuw instellen',
	'twofactorauth-scratchwarning-link' => 'back-uptokens opnieuw instellen',
	'twofactorauth-scratchwarning-text' => '<b>Waarschuwing:</b> het aantal back-uptokens dat u voor twee-factorverificatie hebt is bijna op. U moet snel uw $1.',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'twofactorauth-desc' => 'Nagbibigay ng suporta ng pagpapatunay sa pamamagitan ng pang-isang ulit na mga hudyat na nakabatay sa HMAC',
	'twofactorauth' => 'Dalawang Salik na Pagpapatunay',
	'twofactorauth-text' => 'Nagpapahintulot ito sa iyo upang paganahin o huwag paganahin ang pagpapatunay na dalawa ang salik. Kapag pagaganahin mo ang pagpapatunay na dalawa ang salik, iskanin ang kodigo ng QR na nasa ibaba (o kinakamay na ipasok ang lihim) papaloob sa iyong aparato. Pagkaraan ay magpasok ng isang kahalip sa loob ng hanay upang patototohanan. Kapag hindi na pagaganahin ang pagpapatunay na dalawa ang salik, magpasok ng isang kahalip sa loob ng hanay upang patototohanan at huwag paganahin.',
	'twofactorauth-legend' => 'Pagpapatunay Na Dalawa Ang Salik',
	'twofactorauth-account' => 'Pangalan Ng Akawnt Na Dalawa Ang Salik:',
	'twofactorauth-secret' => 'Dalawang Salik Na Susi ng Lihim:',
	'twofactorauth-title-enable' => 'Paganahin Ang Dalawang Salik Na Pagpapatunay',
	'twofactorauth-title-disable' => 'Huwag Paganahin Ang Dalawang Salik Na Pagpapatunay',
	'twofactorauth-title-reset' => 'Muling Itakda Ang Dalawang Salik Na Pagpapatunay',
	'twofactorauth-enabledisable' => 'Paganahin/Huwag Paganahin Ang Dalawang Salik Na Pagpapatunay',
	'twofactorauth-token' => 'Kahalip',
	'twofactorauth-qrcode' => 'Lihim ng Kodigong QR',
	'twofactorauth-scratch' => 'Mga Kahalip Na Pansalo',
	'twofactorauth-authfailed' => 'Nabigo sa pagpapatunay ng dalawang salik na mga kredensiyal',
	'twofactorauth-success-enable' => 'Matagumpay na napagana ang pagpapatunay na may dalawang hakbang.',
	'twofactorauth-success-disable' => 'Hindi na pinagagana ang pagpapatunay na may dalawang hakbang.',
	'twofactoruath-enable' => 'Paganahin',
	'twofactorauth-disable' => 'Huwag paganahin',
	'twofactorauth-resetscratchtokens' => 'Itakdang Muli Ang Mga Kahalip Na Pansalo',
	'twofactorauth-scratchwarning-link' => 'itakdang muli ang iyong mga kahalip na pansalo',
	'twofactorauth-scratchwarning-text' => '<b>Babala!</b> Kumakaunti na ang bilang ng pansalong mga kahalip na mayroon ka para sa pagpapatunay na Dalawa ang Salik. Iminumungkahi sa iyo na $1 kaagad.',
);

