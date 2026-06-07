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
 * Strings for component 'quizaccess_campla', language 'de', version '4.4'.
 *
 * @package     quizaccess_campla
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['applicationunauthorized'] = 'Die Anwendung ist nicht autorisiert.';
$string['campla'] = 'CAMPLA';
$string['campla:canusecampla'] = 'Darf CAMPLA für die Einrichtung eines Tests verwenden.';
$string['camplaappid'] = 'CAMPLA Applikation ID';
$string['camplaappid_desc'] = 'Das Applikations-Secret, das CAMPLA zur Identifizierung der Moodle-Instanz verwendet.';
$string['camplabasisurl'] = 'CAMPLA REST API URL';
$string['camplabasisurl_desc'] = 'URL für den Zugriff auf die CAMPLA-API (ohne abschließendes / Slash).';
$string['camplalink'] = 'Nach erfolgreichem Senden an CAMPLA und der Erstellung der Prüfung kann die Prüfung über die URL <br/>{$a} aufgerufen werden.';
$string['camplanotconfigured'] = 'Der CAMPLA-Endpunkt ist nicht konfiguriert. Bitte wenden Sie sich an die/den Administrator/in.';
$string['camplasecret'] = 'CAMPLA Applikation secret';
$string['camplasecret_desc'] = 'Das Applikations-Secret, das CAMPLA zur Identifizierung der Moodle-Instanz verwendet.';
$string['camplasecuritylevel'] = 'Standardmäßiges Sicherheitslevel von CAMPLA';
$string['camplasecuritylevel_desc'] = 'Die Sicherheitsstufe, die standardmäßig beim Senden einer Prüfung an CAMPLA eingestellt sein sollte.';
$string['camplaservererror'] = 'CAMPLA Serverfehler.';
$string['coursename'] = 'Kursname';
$string['generatebuttoninfo'] = 'Die Schaltfläche "CAMPLA-Konfiguration generieren" ist nur aktiv, wenn eine Startzeit für den Test
("Testöffnung") und eine Endzeit für den Test ("Testschließung") gespeichert sind. Da dieses Formular nicht vollständig über AJAX gespeichert wird, muss das Speichern zuvor erfolgt sein.</p><p>Bitte nehmen Sie im Abschnitt "Zeit" folgende Einstellungen vor:</p><ul><li>Aktivieren Sie bei "Testöffnung" das Kontrollkästchen
und legen Sie Uhrzeit und Datum fest.</li><li>Aktivieren Sie bei "Testschließung" das Kontrollkästchen
und legen Sie Uhrzeit und Datum fest.</li></ul><p>Speichern Sie die Änderungen, damit sie wirksam werden.</p>';
$string['generatebuttoninfo_past'] = 'Die Schaltfläche "CAMPLA-Konfiguration generieren" ist nur aktiv, wenn eine Startzeit für den Test
("Testöffnung") und eine Endzeit für den Test ("Testschließung") gespeichert sind. Da dieses Formular nicht vollständig über AJAX gespeichert wird, muss das Speichern zuvor erfolgt sein.</p>Beide Daten müssen in der Zukunft liegen.</p><p>Im Abschnitt "Zeit" ist entweder das Datum unter "Testöffnung" oder sowohl das Datum unter "Testöffnung" als auch das unter "Testschließung" in der Vergangenheit festgelegt.</p><p>Bitte ändern Sie diese Angaben und speichern Sie die Änderungen, damit sie wirksam werden, und kehren Sie dann hierher zurück.</p>';
$string['generatecamplaconfiguration'] = 'CAMPLA-Konfiguration generieren';
$string['invalidtokenresponse'] = 'Ungültige Antwort auf die JWT-Token-Anfrage.';
$string['na'] = 'N/A';
$string['newquizinstanceinfo'] = 'Die Einstellungen in diesem Abschnitt werden erst sichtbar, sobald der Test erstellt wurde.';
$string['novalidcamplaurl'] = 'Keine gültige CAMPLA-URL konfiguriert.';
$string['pluginname'] = 'CAMPLA Prüfungskonfiguration';
$string['privacy:metadata:quizaccess_campla:email'] = 'Die E-Mail-Adresse der Person, die CAMPLA für diesen Test nutzt.';
$string['privacy:metadata:quizaccess_campla:externalpurpose'] = 'Diese Informationen werden an den CAMPLA-Server gesendet, um eine Prüfung für eine/n Nutzer/in einzurichten. Dieses Plugin übermittelt keine Benutzerdaten explizit an den CAMPLA-Server und speichert auch keine im Moodle-LMS.';
$string['privacy:metadata:quizaccess_campla:firstname'] = 'Der Vorname der Person, die CAMPLA für diesen Test nutzt.';
$string['privacy:metadata:quizaccess_campla:lastname'] = 'Der Nachname der Person, die CAMPLA für diesen Test nutzt.';
$string['quitpassword'] = 'Beenden/Entsperren-Kennwort';
$string['quizname'] = 'Testname';
$string['quizowner'] = 'Testowner/in';
$string['quizurl'] = 'Test-URL';
$string['securitylevel'] = 'Sicherheitslevel';
$string['securitylevellernstick'] = 'Lernstick';
$string['securitylevelseb'] = 'Safe Exam Browser';
$string['sendtocampla'] = 'An CAMPLA senden';
$string['sendtocamplafail'] = 'Senden an CAMPLA fehlgeschlagen';
$string['sendtocamplasuccess'] = 'Erfolgreich an CAMPLA gesendet';
$string['settingnotification'] = 'Bitte beachten Sie, dass die folgenden Einstellungen eine erfolgreich eingerichtete CAMPLA (Cloud Assessment Management Platform) voraussetzen. Weitere Informationen finden Sie unter <a href="https://campla.ch">https://campla.ch</a>.';
$string['submitlabel'] = 'An CAMPLA senden';
$string['tokenstored'] = 'CAMPLA-JWT-Token erfolgreich gespeichert.';
$string['unknownerror'] = 'Unbekannter Fehler';
$string['wrongcredentialvalidation'] = 'Die Anmeldedaten entsprechen nicht den Validierungsanforderungen.';
