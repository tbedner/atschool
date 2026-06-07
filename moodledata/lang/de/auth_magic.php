<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'auth_magic', language 'de', version '4.4'.
 *
 * @package     auth_magic
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['and'] = 'Und';
$string['anymethod'] = 'Beliebige Methode';
$string['belowpassword'] = 'Kennwort eingeben';
$string['belowusername'] = 'Anmeldename eingeben';
$string['configtitle'] = 'Magic-Authentifizierung';
$string['copyboard'] = 'Link in die Zwischenablage kopieren';
$string['copyinvitationlink'] = 'Magic Einladungslink für Nutzer/in kopieren';
$string['copyloginlink'] = 'Magic Anmeldelink für Nutzer/in kopieren';
$string['courseenrolment'] = 'Kurseinschreibung';
$string['createuserenrolcourse'] = 'wurde erstellt und eingeschrieben in "{$a}"';
$string['currentlylinkexpiry'] = 'Da der Anmeldelink abgelaufen ist, wird ein neuer Link an die E-Mail-Adresse gesendet, sobald auf den abgelaufenen Anmeldelink geklickt wird.';
$string['defaultenrolmentduration'] = 'Standard Einschreibedauer';
$string['defaultenrolmentrole'] = 'Standard Einschreiberolle';
$string['doesnotaccesskey'] = 'Hat keinen Zugriff auf den Schlüssel in Ihrer Authentifizierungsmethode';
$string['emailnotexists'] = 'Diese E-Mail existiert nicht';
$string['enrolmentduration'] = 'Einschreibedauer';
$string['error'] = 'Die Ablaufzeit des Magic Anmeldelinks wurde nicht aktualisiert';
$string['existuserenrolcourse'] = 'wurde eingeschrieben in "{$a}"';
$string['expiredloginlinkmsg'] = 'Hallo {$a->fullname},

Sie haben versucht auf \'{$a->sitename}\'  mit einem abgelaufenen Magic Anmeldelink zuzugreifen.

Es wurde automatisch ein neuer Magic Link erstellt:

<a href=\'{$a->link}\'> {$a->link} </a> <br>

Der Link läuft ab am: <b> {$a->expiry} </b> <br>

Wenn Sie Hilfe brauchen, kontaktieren Sie bitte die Administrator/innen der Website,
{$a->admin}';
$string['expiredregistrationmessage'] = 'Hallo {$a->fullname},

Sie haben versucht auf \'{$a->sitename}\'  mit einem abgelaufenen Magic Registrierungslink zuzugreifen.

Es wurde automatisch ein neuer Magic Link erstellt:

<a href=\'{$a->link}\'> {$a->link} </a> <br>

Wenn Sie Hilfe brauchen, kontaktieren Sie bitte die Administrator/innen der Website,
{$a->admin}';
$string['firstname'] = 'Vorname';
$string['getmagiclinkviagmail'] = 'Holen Sie einen Magic Link per E-Mail';
$string['hasbeencreated'] = 'wurde erstellt';
$string['instructionsforlinktype'] = 'Geben Sie bitte einen „Magic Link“-Typ an. Zur Auswahl stehen folgende Typen: (Einladung oder Anmeldung)';
$string['invailduser'] = 'Ungültige/r Nutzer/in';
$string['invitationexpiry'] = 'Ablauf des Magic Einladungslinks';
$string['invitationexpiryloginlink'] = 'Der Einladungslink ist abgelaufen. Der Magic Anmeldelink kann nicht verwendet werden, um auf die Website zuzugreifen.';
$string['invitationexpiryloginlinkwithupdate'] = 'Der Einladungslink ist abgelaufen. Falls die E-Mail-Adresse zu einem Account gehört, das die Anmeldung per Link unterstützt, wurde ein Link per E-Mail versendet.';
$string['invitationmessage'] = 'Hallo {$a->fullname},

Es wurde ein neuer Account angefordert bei \'{$a->sitename}\' mit Ihrer E-Mail Adresse.

Um sich mit dem neuen Account anzumelden, rufen Sie bitte diese Website auf und melden sich direkt mit Ihrem Anmeldenamen und Kennwort an:

<a href=\'{$a->link}\'> {$a->link} </a> <br>

Der Link äuft ab am: <b> {$a->expiry} </b> <br>

Wenn Sie Hilfe brauchen, kontaktieren Sie bitte die Administrator/innen der Website,
{$a->admin}';
$string['keyusemultiple'] = 'bis zum Ablauf';
$string['keyuseonce'] = 'Nur einmalig';
$string['lastname'] = 'Nachname';
$string['linkexpirytime'] = 'Setzen Sie ein Ablaufdatum für den Magic Anmeldelink';
$string['listofmagiclink'] = 'Magic Nutzerkonten';
$string['loginexpiry'] = 'Ablauf des Magic Anmeldelinks';
$string['loginexpiryloginlink'] = 'Der Magic Anmeldelink ist abgelaufen. Sie können den Magic Anmeldelink nicht verwenden, um auf die Webseite zuzugreifen.';
$string['loginexpiryloginlinkwithupdate'] = 'Der Magic Anmeldelink ist abgelaufen. Ein neuer Magic Anmeldelink wurde an Ihre E-Mail-Adresse gesendet.';
$string['loginkeytype'] = 'Link zum Anmeldeschlüssel konfigurieren';
$string['loginkeytype_desc'] = 'Mit dieser Einstellung können Administrator/innen das Verhalten von Anmeldeschlüsseln konfigurieren. Die Anmeldeschlüssel können nur einmal oder nur bis zum Ablauf der Gültigkeitsdauer verwendet werden.';
$string['loginlinkbtnpostion'] = 'Position der Magic Anmeldetaste';
$string['loginlinkmessage'] = 'Hallo {$a->fullname},

um auf Ihr Nutzerkonto bei \'{$a->sitename}\' zuzugreifen, nutzen Sie bitte den folgenden Magic Link:

<a href=\'{$a->link}\'> {$a->link} </a> <br>

Der Link läuft ab am: <b> {$a->expiry} </b> <br>

Wenn Sie Hilfe brauchen, kontaktieren Sie bitte die Administrator/innen der Website,
{$a->admin}';
$string['loginlinksubject'] = 'Loginlink zur Magic Authentifizierung';
$string['loginoption'] = 'Nutzername für den Magic Link zulassen';
$string['loginoptiondesc'] = 'Aktivieren Sie diese Einstellung, um sich mit dem im Anmeldeformular angegebenen Nutzernamen anzumelden.';
$string['loginsubject'] = '{$a}: Magic Authentifizierung per Login';
$string['magiclink'] = 'Magic Link';
$string['magicloginlink'] = '{$a}: Magic Anmeldelink';
$string['magiconly'] = 'Nur Magic';
$string['manualinfo'] = 'Manuelle Einschreibungen sind in diesem Kurs nicht verfügbar.';
$string['messageprovider:auth_magic'] = 'Anmeldelinks zur Magic Authentifizierung';
$string['more'] = '{$a} mehr';
$string['normal'] = 'Normal';
$string['notexists_loginlinkmsg'] = 'Hallo {$a->fullname},

Sie haben keinen Magic Anmeldelink und haben daher keinen Zugriff auf die Seite der Magic Authentifizierung.

Wenn Sie Hilfe brauchen, kontaktieren Sie bitte die Administrator/innen der Website,
{$a->admin}';
$string['notsentinvitationlink'] = 'Keinen Einladungslink an die E-Mail senden';
$string['passinfo'] = '- oder tippen Sie das Kennwort ein -';
$string['pluginisdisabled'] = 'Das Plugin "Magic Authentifizierung" ist deaktiviert.';
$string['pluginname'] = 'Magic Authentifizierung';
$string['preventmagicauthmessage'] = 'Hallo {$a->fullname},

es wurde ein neuer Account bei \'{$a->sitename}\' mit Ihrer E-Mail Adresse angefragt. <br>

<strong> Note: </strong> Die Authentifizierung mit einem Magic Link wird von Ihrem Nutzerkonto nicht unterstützt, bitte verwenden Sie stattdessen ihr Kennwort.

<br>

{$a->forgothtml} <br>

Wenn Sie Hilfe brauchen, kontaktieren Sie bitte die Administrator/innen der Website,
{$a->admin}';
$string['preventmagicauthsubject'] = 'Supportinfo zur Magic Authentifizierung';
$string['privacy:metadata:auth_magic'] = 'Magic Authentifizierung';
$string['privacy:metadata:auth_magic:invitationexpiry'] = 'Das Datum, bis zu dem der Einladungsschlüssel gültig ist';
$string['privacy:metadata:auth_magic:invitationuserkey'] = 'Der Wert des Nutzereinladungsschlüssels';
$string['privacy:metadata:auth_magic:loginexpiry'] = 'Das Datum, bis zu dem der Anmeldeschlüssel gültig ist';
$string['privacy:metadata:auth_magic:loginuserkey'] = 'Der Wert des Nutzeranmeldeschlüssels';
$string['privacy:metadata:auth_magic:magicauth'] = 'Der Wert, ob das übergeordnete Element eine Zuweisung vornimmt oder nicht.';
$string['privacy:metadata:auth_magic:magicinvitation'] = 'Der Wert des Nutzereinladungslinks';
$string['privacy:metadata:auth_magic:magiclogin'] = 'Der Wert des Nutzeranmeldelinks';
$string['privacy:metadata:auth_magic:manualexpiry'] = 'Das Datum, das das Ablaufdatum des Nutzeranmeldeschlüssels festgelegt hat, ist gültig bis';
$string['privacy:metadata:auth_magic:parent'] = 'Der Wert der Nutzer-ID, die der Person als ihre übergeordnete Person zugewiesen werden soll.';
$string['privacy:metadata:auth_magic:parentrole'] = 'Die Instanz der übergeordneten Rollen-ID.';
$string['privacy:metadata:auth_magic:timecreated'] = 'Datum und Zeit, an dem der Anmeldelink erstellt wurde';
$string['privacy:metadata:auth_magic:timemodified'] = 'Datum und Zeit, an dem der Anmeldelink geändert wurde';
$string['privacy:metadata:auth_magic:userid'] = 'Nutzer-ID mit diesem Anmeldelink';
$string['privacy:metadata:auth_magic_loginlinks'] = 'Magic Links für Nutzer/in.';
$string['quickregisterfornonauth'] = 'Der Magic-Link über die Anmeldung wird nur für die Magic Authentifizierung unterstützt. Wenn Sie andere Einstellungen vornehmen möchten, ändern Sie die Einstellungen für die unterstützten Authentifizierungsmethoden.';
$string['quickregistration'] = 'Schnellregistrierung';
$string['registrationexpirylink'] = 'Der Registrierungslink ist abgelaufen. Ein neuer Registrierungslink wurde an Ihre E-Mail-Adresse geschickt.';
$string['registrationmessage'] = 'Hallo {$a->emailplaceholder},

vielen Dank für Ihr Interesse an einer Mitgliedschaft bei {$a->sitename}! Um ein Nutzerkonto zu erstellen, verwenden Sie bitte den folgenden Registrierungslink:

<a href={$a->link}> {$a->link} </a> <br>

Sollten Sie Fragen haben oder Hilfe benötigen, wenden Sie sich bitte jederzeit an die Administrator/innen der Website, {$a->admin}.

Wir freuen uns darauf, Sie als Mitglied unserer Community begrüßen zu dürfen!

Mit freundlichen Grüßen,
Das {$a->sitename} Team';
$string['registrationsubject'] = 'Registrierungslink zur Magic Authentifizierung';
$string['sendlink'] = 'Sende den Magic Link an den Nutzer';
$string['sentinvitationlink'] = 'Sende den Einladungslink an die E-Mail';
$string['sentlinktouser'] = 'Wenn eine korrekte E-Mail-Adresse angegeben wurde, sollte eine E-Mail mit einem einmaligen Anmeldelink zugeschickt worden sein.';
$string['sentlinktousername'] = 'Wenn ein korrekter Anmeldename angegeben wurde, sollte eine E-Mail mit dem Magic Anmeldelink an Ihre E-Mail Adresse geschickt worden sein.';
$string['sentregisterlinktouser'] = 'Wenn eine korrekte E-Mail Adresse angegeben wurde, sollte eine E-Mail mit dem Registrierungslink an Ihre E-Mail Adresse geschickt worden sein.';
$string['statuscreateuser'] = 'wurde erstellt';
$string['strconfirm'] = 'Bestätigung';
$string['strenrolinto'] = 'eingeschrieben in';
$string['strkeyaccount'] = 'Key Account';
$string['strowneraccountrole'] = 'Rolle des Eigentümeraccounts';
$string['strsupportauth'] = 'Unterstütze Authenifizierungsmethode';
$string['strsupportpassword'] = 'Kennwort wird unterstützt';
$string['success'] = 'Änderungen aktualisiert';
$string['userhavenotlinks'] = 'Der Nutzer/ die Nutzerin hat keinen  {$a} Link';
$string['userkeyslist'] = 'Meine Nutzerkonten';
