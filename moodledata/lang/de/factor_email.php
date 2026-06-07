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
 * Strings for component 'factor_email', language 'de', version '4.4'.
 *
 * @package     factor_email
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['email:accident'] = 'Wenn Sie diese E-Mail nicht angefordert haben, klicken Sie auf "Weiter", um den Anmeldeversuch ungültig zu machen.
     Wenn Sie versehentlich auf diesen Link geklickt haben, klicken Sie auf "Abbrechen". Es werden dann keine Maßnahmen ausgeführt.';
$string['email:browseragent'] = 'Browserdetails für diese Anfrage: \'{$a}\'';
$string['email:geoinfo'] = 'Diese Anfrage scheint ungefähr von folgender Stelle zu stammen:';
$string['email:greeting'] = 'Hallo {$a} 👋,';
$string['email:ipinfo'] = 'Details der Anmeldeanfrage:';
$string['email:link'] = 'Bestätigungslink';
$string['email:loginlink'] = 'Oder verwenden Sie auf dem gleichen Gerät den Link {$a}';
$string['email:message'] = 'Dies ist Ihr Bestätigungscode zur Anmeldung bei {$a->sitename} ({$a->siteurl}).';
$string['email:originatingip'] = 'Diese Anmeldeanfrage wurde erstellt von \'{$a}\'.';
$string['email:revokelink'] = 'Falls Sie das nicht selber waren, können Sie {$a}.';
$string['email:revokesuccess'] = 'Dieser Code wurde erfolgreich widerrufen. Alle Sitzungen für diese Person wurden beendet.
     E-Mail ist erst wieder als Faktor verwendbar, wenn die Kontosicherheit bestätigt wurde.';
$string['email:stoploginlink'] = 'Diesen Anmeldeversuch beenden';
$string['email:subject'] = 'Bestätigungscode zur Anmeldung';
$string['email:uadescription'] = 'Browseridentität für diese Anfrage:';
$string['email:validity'] = 'Der Code kann nur einmal verwendet werden und ist für {$a} gültig.';
$string['error:badcode'] = 'Der Code wurde nicht gefunden. Möglicherweise handelt es sich um einen alten Link oder ein neuer Code wurde per E-Mail verschickt oder der Anmeldeversuch mit diesem Code war erfolgreich.';
$string['error:parameters'] = 'Falsche Seitenparameter';
$string['error:wrongverification'] = 'Falscher Code. Versuchen Sie es nochmal.';
$string['event:unauthemail'] = 'Unautorisierte E-Mail erhalten';
$string['info'] = 'Sie verwenden zur Authentifizierung die E-Mail-Adresse {$a}. Dies wurde von Ihren Administrator/innen eingerichtet.';
$string['logindesc'] = 'Sie erhalten einen 6-stelligen Code per E-Mail: {$a}';
$string['loginoption'] = 'Code per E-Mail senden';
$string['loginskip'] = 'Ich habe keinen Bestätigungscode erhalten';
$string['loginsubmit'] = 'Weiter';
$string['logintitle'] = 'Bestätigen Sie Ihre Identität per E-Mail';
$string['managefactor'] = 'E-Mail verwalten';
$string['manageinfo'] = 'Zur Authentifizierung wird \'{$a}\' verwendet. Dies haben Ihre Administrator/innen so eingerichtet.';
$string['pluginname'] = 'E-Mail';
$string['privacy:metadata'] = 'Das Faktor-Plugin \'E-Mail\' speichert keine personenbezogenen Daten.';
$string['settings:duration'] = 'Gültigkeitsdauer';
$string['settings:duration_help'] = 'Zeitdauer, in der der Code gültig ist';
$string['settings:suspend'] = 'Unautorisierte Nutzerkonten sperren';
$string['settings:suspend_help'] = 'Aktivieren Sie diese Option, um Nutzerkonten zu sperren, wenn eine nicht autorisierte E-Mail-Bestätigung eingeht.';
$string['setupfactor'] = 'E-Mail einrichten';
$string['summarycondition'] = 'hat gültige E-Mail-Einstellungen';
$string['unauthemail'] = 'Unautorisierte E-Mail';
$string['unauthloginattempt'] = 'Nutzer/in mit der ID {$a->userid} hat einen nicht autorisierten Anmeldeversuch mithilfe der E-Mail-Bestätigung von unternommen, u.z. mit der IP-Adresse {$a->ip} und dem Browser {$a->useragent}.';
$string['verificationcode'] = 'Geben Sie den Bestätigungscode ein';
$string['verificationcode_help'] = 'Der Bestätigungscode wurde an Ihre E-Mail-Adresse gesendet.';
