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
 * @author Darth Kule
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
	'twofactorauth-scratchwarning-link' => 'Text for the link to Special:TwoFactorAuth when warning the user about backup tokens. It is used as parameter $1 in {{msg-mw|Twofactorauth-scratchwarning-text}}.',
	'twofactorauth-scratchwarning-text' => 'This message is a warning and the first parameter is the link to the special page.
* <code>$1</code>: defined as {{msg-mw|twofactorauth-scratchwarning-link}}',
);

/** Arabic (العربية)
 * @author Mutarjem horr
 */
$messages['ar'] = array(
	'twofactorauth-disable' => 'عطّل',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'twofactorauth-desc' => 'Прапануе падтрымку аўтэнтыфікацыі з выкарыстаньнем аднаразовых пароляў на аснове HMAC',
	'twofactorauth' => 'Двухфактарная аўтэнтыфікацыя',
	'twofactorauth-token' => 'Токен',
	'twofactoruath-enable' => 'Уключыць',
	'twofactorauth-disable' => 'Выключыць',
);

/** Breton (brezhoneg)
 * @author Y-M D
 */
$messages['br'] = array(
	'twofactoruath-enable' => 'Gweredekaat',
);

/** Czech (česky)
 * @author Vks
 */
$messages['cs'] = array(
	'twofactoruath-enable' => 'Povolit',
	'twofactorauth-disable' => 'Zakázat',
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

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'twofactorauth-text' => 'Dies ermöglicht Ihnen die Aktivierung oder Deaktivierung der Zwei-Faktor-Authentifizierung. Falls Sie die Zwei-Faktor-Authentifizierung aktivieren, scannen Sie den unten angegebenen QR-Code mit Ihrem Gerät oder geben Sie das Geheimnis manuell ein. Geben Sie danach ein Token zur Verifizierung in das Feld ein. Falls Sie die Zwei-Faktor-Authentifizierung deaktivieren, geben Sie ein Token zur Verifizierung und Deaktivierung in das Feld ein.',
	'twofactorauth-scratchwarning-link' => 'Setzen Sie Ihre Sicherungstoken zurück',
	'twofactorauth-scratchwarning-text' => '<b>Achtung!</b> Ihre Sicherungstoken für die Zwei-Faktor-Authentifizierung gehen zu Neige. Es wird $1 empfohlen.',
);

/** Spanish (español)
 * @author Armando-Martin
 */
$messages['es'] = array(
	'twofactorauth-desc' => 'Proporciona soporte de autenticación utilizando contraseñas de una sola vez basadas en HMAC',
	'twofactorauth' => 'Autenticación de dos factores',
	'twofactorauth-text' => 'Esto te permite activar o desactivar la autenticación de dos factores. Si vas a activar la autenticación de dos factores, escanea el código QR de más abajo (o introduce manualmente el número secreto) en tu dispositivo. Luego introduce una clave en el campo para verificación. Si vas a desactivar la autenticación de dos factores, introduce una clave en el campo para verificación y desactivación.',
	'twofactorauth-legend' => 'Autenticación de dos factores',
	'twofactorauth-account' => 'Nombre de la cuenta de dos factores:',
	'twofactorauth-secret' => 'Clave secreta de dos factores:',
	'twofactorauth-title-enable' => 'Activar la autenticación de dos factores',
	'twofactorauth-title-disable' => 'Desactivar la autenticación de dos factores',
	'twofactorauth-title-reset' => 'Restablecer la autenticación de dos factores',
	'twofactorauth-enabledisable' => 'Activar/Desactivar la autenticación de dos factores',
	'twofactorauth-token' => 'Clave',
	'twofactorauth-qrcode' => 'Código QR secreto',
	'twofactorauth-scratch' => 'Claves de respaldo',
	'twofactorauth-authfailed' => 'Error al validar las credenciales de dos factores',
	'twofactorauth-success-enable' => 'La verificación de dos pasos se ha activado correctamente.',
	'twofactorauth-success-disable' => 'La verificación de dos pasos se ha desactivado correctamente.',
	'twofactoruath-enable' => 'Activar',
	'twofactorauth-disable' => 'Desactivar',
	'twofactorauth-resetscratchtokens' => 'Restablecer las claves de respaldo',
	'twofactorauth-scratchwarning-link' => 'restablecer tus claves de respaldo',
	'twofactorauth-scratchwarning-text' => '<b>¡Atención!</b> El número de claves de respaldo que tienes para autenticación de dos factores se está agotando. Es recomendable que $1 pronto.',
);

/** Persian (فارسی)
 * @author Mjbmr
 */
$messages['fa'] = array(
	'twofactoruath-enable' => 'فعال سازی',
	'twofactorauth-disable' => 'غیرفعال سازی',
);

/** French (français)
 * @author Crochet.david
 * @author Gomoko
 */
$messages['fr'] = array(
	'twofactorauth-desc' => "Fournit le support d'authentification utilisant HMAC basé sur des mots de passe à utilisation unique",
	'twofactorauth' => 'Authentification à deux facteurs',
	'twofactorauth-text' => "Ceci vous permet d'activer ou de désactiver l'authentification à deux facteurs. Si vous activez l'authentification à deux facteurs, balayez le code QR ci-dessous (ou entrez manuellement la phrase secrète) dans votre appareil. Puis entrez une chaîne dans le champ pour le vérifier. Si vous désactivez l'authentification à deux facteurs, saisissez une chaîne dans le champ pour vérifier et désactiver.",
	'twofactorauth-legend' => 'Authentification à deux facteurs',
	'twofactorauth-account' => 'Nom de compte à deux facteurs:',
	'twofactorauth-secret' => 'Clé secrète à deux facteurs:',
	'twofactorauth-title-enable' => "Activer l'authentification à deux facteurs",
	'twofactorauth-title-disable' => "Désactiver l'authentification à deux facteurs",
	'twofactorauth-title-reset' => "Réinitialiser l'authentification à deux facteurs",
	'twofactorauth-enabledisable' => "Activer/Désactiver l'authentification à deux facteurs",
	'twofactorauth-token' => 'Jeton',
	'twofactorauth-qrcode' => 'Code secret QR',
	'twofactorauth-scratch' => 'Sauvegarder les jetons',
	'twofactorauth-authfailed' => 'Échec de validation des identités à deux facteurs',
	'twofactorauth-success-enable' => 'Vérification à deux étapes bien activée.',
	'twofactorauth-success-disable' => 'Vérification à deux étapes bien désactivée.',
	'twofactoruath-enable' => 'Activé',
	'twofactorauth-disable' => 'Désactivé',
	'twofactorauth-resetscratchtokens' => 'Réinitialiser les jetons enregistrés',
	'twofactorauth-scratchwarning-link' => 'réinitialiser vos jetons enregistrés',
	'twofactorauth-scratchwarning-text' => "<b>Attention!</b> Le nombre de jetons enregistrés que vous avez pour l'authentification à deux facteurs diminue. Vous devriez $1 rapidement.",
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'twofactorauth-desc' => 'Proporciona un soporte de autenticación mediante HMAC baseado en contrasinais dunha soa vez',
	'twofactorauth' => 'Autenticación de dous factores',
	'twofactorauth-text' => 'Isto permítelle activar ou desactivar a autenticación de dous factores. Se está activando a autenticación de dous factores, dixitalice o código QR inferior (ou insira manualmente o número secreto) no seu dispositivo. Logo introduza un pase no campo para a verificación. Se está desactivando a autenticación de dous factores, insira un pase no campo para verificalo e finalizar a desactivación.',
	'twofactorauth-legend' => 'Autenticación de dous factores',
	'twofactorauth-account' => 'Nome da conta de dous factores:',
	'twofactorauth-secret' => 'Clave secreta de dous factores:',
	'twofactorauth-title-enable' => 'Activar a autenticación de dous factores',
	'twofactorauth-title-disable' => 'Desactivar a autenticación de dous factores',
	'twofactorauth-title-reset' => 'Restablecer a autenticación de dous factores',
	'twofactorauth-enabledisable' => 'Activar/Desactivar a autenticación de dous factores',
	'twofactorauth-token' => 'Pase',
	'twofactorauth-qrcode' => 'Código QR secreto',
	'twofactorauth-scratch' => 'Pases de respaldo',
	'twofactorauth-authfailed' => 'Erro ao validar as credenciais de dous factores',
	'twofactorauth-success-enable' => 'A verificación en dous pasos activouse correctamente.',
	'twofactorauth-success-disable' => 'A verificación en dous pasos desactivouse correctamente.',
	'twofactoruath-enable' => 'Activar',
	'twofactorauth-disable' => 'Desactivar',
	'twofactorauth-resetscratchtokens' => 'Restablecer os pases de respaldo',
	'twofactorauth-scratchwarning-link' => 'restableza os seus pases de respaldo',
	'twofactorauth-scratchwarning-text' => '<b>Atención!</b> O número de pases de respaldo que ten para a autenticación de dous factores está a piques de se esgotar. Recoméndase que $1 axiña.',
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

/** Italian (italiano)
 * @author Darth Kule
 */
$messages['it'] = array(
	'twofactorauth-desc' => "Fornisce supporto per l'autenticazione utilizzando password a uso singolo basate su HMAC",
	'twofactorauth' => 'Autenticazione a due fattori',
	'twofactorauth-text' => "Questo consente di abilitare o disabilitare l'autenticazione a due fattori. Se si desidera abilitare l'autenticazione a due fattori, effettuare la scansione del codice QR seguente con il proprio dispositivo o inserire il codice segreto manualmente. Quindi immettere un token nel campo per la verifica. Se si desidera disabilitare l'autenticazione a due fattori, immettere un token nel campo per la verifica e disabilitare.",
	'twofactorauth-legend' => 'Autenticazione a due fattori',
	'twofactorauth-account' => "Nome dell'account per l'autenticazione a due fattori:",
	'twofactorauth-secret' => "Chiave segreta per l'autenticazione a due fattori:",
	'twofactorauth-title-enable' => 'Abilita autenticazione a due fattori',
	'twofactorauth-title-disable' => 'Disabilita autenticazione a due fattori',
	'twofactorauth-title-reset' => "Reimpostare l'autenticazione a due fattori",
	'twofactorauth-enabledisable' => "Abilita/disabilita l'autenticazione a due fattori",
	'twofactorauth-token' => 'Token',
	'twofactorauth-qrcode' => 'Codice QR segreto',
	'twofactorauth-scratch' => 'Token di backup',
	'twofactorauth-authfailed' => 'Impossibile convalidare le credenziali a due fattori',
	'twofactorauth-success-enable' => 'Verifica in due passaggi correttamente abilitata.',
	'twofactorauth-success-disable' => 'Verifica in due passaggi correttamente disabilitata.',
	'twofactoruath-enable' => 'Abilita',
	'twofactorauth-disable' => 'Disabilita',
	'twofactorauth-resetscratchtokens' => 'Ripristino token di backup',
	'twofactorauth-scratchwarning-link' => 'ripristinare i propri token di backup',
	'twofactorauth-scratchwarning-text' => "<b>Attenzione:</b> il numero di token di backup per l'autenticazione a due fattori è in esaurimento. Si consiglia di $1 al più presto.",
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
	'twofactorauth-qrcode' => 'QR コード シークレット',
	'twofactorauth-scratch' => 'バックアップ トークン',
	'twofactorauth-authfailed' => '二要素信用情報の検証に失敗しました。',
	'twofactorauth-success-enable' => '二段階検証を有効にしました。',
	'twofactorauth-success-disable' => '二段階検証を無効にしました。',
	'twofactoruath-enable' => '有効',
	'twofactorauth-disable' => '無効',
	'twofactorauth-resetscratchtokens' => 'バックアップ トークンをリセット',
	'twofactorauth-scratchwarning-link' => '自分のバックアップ トークンをリセット',
	'twofactorauth-scratchwarning-text' => '<b>警告!</b> 二要素認証のバックアップ トークン数が不足しています。すぐに$1することをお勧めします。',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'twofactoruath-enable' => 'Enschallde',
	'twofactorauth-disable' => 'Ußschallde',
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
	'twofactorauth-text' => 'Dit maakt het mogelijk om twee-factorauthenticatie in of uit te schakelen. Als u twee-factorauthenticatie inschakelt, scan dan de onderstaande QR-code (of voer deze handmatig in) op uw apparaat. Voer daarna ter controle het token in in het veld. Om twee-factorauthenticatie uit te schakelen voert u ter controle het token in in het veld.',
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

/** Piedmontese (Piemontèis)
 * @author Dragonòt
 */
$messages['pms'] = array(
	'twofactorauth-desc' => "A dà l'apògg d'autenticassion dovrand dle ciav basà HMAC a un sol usagi",
	'twofactorauth' => 'Autenticassion a Doi Fator',
	'twofactorauth-text' => "Sòn-sì a përmëtt d'abilité o disabilité l'autenticassion a doi fator. S'it të stas abilitand l'autenticassion a doi fator, scandiss ël còdes QR sì-sota (o anseriss ël segret manualment) an tò dispositiv. Peui anseriss un geton ant ël camp për verifiché. S'it të stas disabilitand l'autenticassion a doi fator, anseriss un geton ant ël camp për verifiché e disabilité.",
	'twofactorauth-legend' => 'Autenticassion a Doi Fator',
	'twofactorauth-account' => 'Nòm dël Cont dij Doi Fator:',
	'twofactorauth-secret' => 'Ciav Segreta dij Doi Fator:',
	'twofactorauth-title-enable' => "Abìlita l'Autenticassion dij Doi Fator",
	'twofactorauth-title-disable' => "Disabìlita l'Autenticassion dij Doi Fator",
	'twofactorauth-title-reset' => "Rimpòsta l'Autenticassion dij Doi Fator",
	'twofactorauth-enabledisable' => "Abìlita/Disabìlita l'Autenticassion dij Doi Fator",
	'twofactorauth-token' => 'Marca-pòst',
	'twofactorauth-qrcode' => 'Còdes Segret QR',
	'twofactorauth-scratch' => "Geton d'arzerva",
	'twofactorauth-authfailed' => 'Falì a validé le credensiaj a doi fator',
	'twofactorauth-success-enable' => 'Abilità da bin la verìfica a doi pass.',
	'twofactorauth-success-disable' => 'Disabilità da bin la verìfica a doi pass.',
	'twofactoruath-enable' => 'Abìlita',
	'twofactorauth-disable' => 'Disabìlita',
	'twofactorauth-resetscratchtokens' => "Rimpòsta ij Geton d'Arzerva",
	'twofactorauth-scratchwarning-link' => "rimpòsta ij tò geton d'arzerva",
	'twofactorauth-scratchwarning-text' => "<b>Avis!</b> Ël nùmer ëd geton d'arzerva ch'it l'has për l'autenticassion a Goi fator a sta caland. A s'arcomanda ëd $1 prest.",
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'twofactoruath-enable' => 'چارنول',
	'twofactorauth-disable' => 'ناچارنول',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'twofactorauth' => 'ද්විසාධක සහතික කිරීම',
	'twofactorauth-legend' => 'ද්විසාධක සහතික කිරීම',
	'twofactorauth-account' => 'ද්විසාධක ගිණුමේ නාමය:',
	'twofactorauth-secret' => 'ද්විසාධක රහස් යතුර:',
	'twofactorauth-title-enable' => 'ද්විසාධක සහතික කිරීම සක්‍රිය කරන්න',
	'twofactorauth-title-disable' => 'ද්විසාධක සහතික කිරීම අක්‍රිය කරන්න',
	'twofactorauth-title-reset' => 'ද්විසාධක සහතික කිරීම යළි සකසන්න',
	'twofactorauth-enabledisable' => 'ද්විසාධක සහතික කිරීම සක්‍රිය/අක්‍රිය කරන්න',
	'twofactorauth-token' => 'ටෝකනය',
	'twofactorauth-qrcode' => 'QR කේත රහස',
	'twofactorauth-scratch' => 'උපස්ථ ටෝකන',
	'twofactorauth-success-enable' => 'දෙ පිය සත්‍යාපනය සාර්ථකව සක්‍රිය කරන ලදී.',
	'twofactorauth-success-disable' => 'දෙ පිය සත්‍යාපනය සාර්ථකව අක්‍රිය කරන ලදී.',
	'twofactoruath-enable' => 'සක්‍රීය කරන්න',
	'twofactorauth-disable' => 'අක්‍රීය කරන්න',
	'twofactorauth-resetscratchtokens' => 'උපස්ථ ටෝකන යළි සකසන්න',
	'twofactorauth-scratchwarning-link' => 'ඔබේ උපස්ථ ටෝකන යළි සකසන්න',
);

/** Swedish (svenska)
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'twofactoruath-enable' => 'Aktivera',
	'twofactorauth-disable' => 'Inaktivera',
);

/** Tamil (தமிழ்)
 * @author மதனாஹரன்
 */
$messages['ta'] = array(
	'twofactoruath-enable' => 'செயலாக்கு',
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

/** Ukrainian (українська)
 * @author Steve.rusyn
 * @author Ата
 */
$messages['uk'] = array(
	'twofactorauth-desc' => 'Забезпечує підтримку автентифікації за допомогою HMAC на основі одноразових паролів',
	'twofactorauth' => 'Two Factor Authentication',
	'twofactorauth-text' => 'Це дає змогу ввімкнути або вимкнути двофакторну автентифікацію. Якщо ви вмикаєте двофакторну автентифікацію, відскануйте QR-код унизу (або введіть секрет вручну) у Ваш пристрій. Далі введіть маркер у полі для перевірки. Якщо вимикаєте двофакторну автентифікацію, введіть маркер у полі верифікації і вимкніть.',
	'twofactorauth-legend' => 'Two Factor Authentication',
	'twofactorauth-account' => "Двофакторне ім'я облікового запису:",
	'twofactorauth-secret' => 'Двофакторний секретний ключ:',
	'twofactorauth-title-enable' => 'Увімкнути Two Factor Authentication',
	'twofactorauth-title-disable' => 'Вимкнути Two Factor Authentication',
	'twofactorauth-title-reset' => 'Скинути Two Factor Authentication',
	'twofactorauth-enabledisable' => 'Увімкнути/Вимкнути Two Factor Authentication',
	'twofactorauth-token' => 'Маркер',
	'twofactorauth-qrcode' => 'QR-код секрет',
	'twofactorauth-scratch' => 'Резервне копіювання маркерів',
	'twofactorauth-authfailed' => 'Не вдалося перевірити двофакторні повноваження',
	'twofactorauth-success-enable' => 'Двокрокова верифікація успішно активована.',
	'twofactorauth-success-disable' => 'Двокрокова верифікація успішно вимкнена.',
	'twofactoruath-enable' => 'Увімкнути',
	'twofactorauth-disable' => 'Вимкнути',
	'twofactorauth-resetscratchtokens' => 'Скиданути резервне копіювання маркерів',
	'twofactorauth-scratchwarning-link' => 'скидання резервного копіювання маркерів',
	'twofactorauth-scratchwarning-text' => '<b>Увага!</b> Кількість резервних маркерів, які у Вас є для двофакторної автентифікації, недостатня. Вас рекомендується $1 найближчим часом.',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Shirayuki
 */
$messages['zh-hans'] = array(
	'twofactorauth' => '双因素身份验证',
	'twofactorauth-legend' => '双因素身份验证',
	'twofactorauth-account' => '双因素帐户名：',
	'twofactorauth-secret' => '双因素机密密钥：',
	'twofactorauth-title-enable' => '启用双因素身份验证',
	'twofactorauth-title-disable' => '禁用双因素身份验证',
	'twofactoruath-enable' => '启用',
	'twofactorauth-disable' => '禁用',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Shirayuki
 */
$messages['zh-hant'] = array(
	'twofactorauth' => '雙因素身份驗證',
	'twofactorauth-legend' => '雙因素身份驗證',
	'twofactorauth-account' => '雙因素帳戶名：',
	'twofactoruath-enable' => '啟用',
	'twofactorauth-disable' => '禁用',
);
