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
 * Strings for component 'tool_registrationrules', language 'de', version '4.4'.
 *
 * @package     tool_registrationrules
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewruleinstance'] = 'Neue Regel hinzufügen';
$string['addrule'] = 'Regel hinzufügen';
$string['confirmdelete'] = 'Möchten Sie die Regel „{$a}“ wirklich löschen?';
$string['description'] = 'Beschreibung';
$string['editruleinstance'] = 'Regel bearbeiten';
$string['editruleinstancename'] = 'Regel bearbeiten: {$a}';
$string['event:registrationdenied'] = 'Nutzerregistrierung abgelehnt';
$string['event:registrationdeniedloggingonly'] = 'Nutzerregistrierung abgelehnt (nur Protokollierung)';
$string['generalaftermessage'] = 'Allgemeine Meldung für Nutzer/innen, die nach der Eingabe abgelehnt werden';
$string['hideshow'] = 'Ausblenden/Anzeigen';
$string['manageregistrationruleplugins'] = 'Plugins';
$string['onlyoneinstanceallowed'] = 'Für diese Regel ist nur eine Instanz zulässig.';
$string['pluginname'] = 'Registrierungsregeln';
$string['privacy:null_provider:reason'] = 'Das Plugin „Registrierungsregeln“ speichert keine personenbezogenen Daten. Personenbezogene Daten, die von einzelnen Registrierungsregel-Plugins gespeichert werden, werden jeweils gesondert deklariert.';
$string['registrationrule:instance:description'] = 'Beschreibung';
$string['registrationrule:instance:enabled'] = 'Aktiviert';
$string['registrationrule:instance:fallbackpoints'] = 'Fallback-Punkte';
$string['registrationrule:instance:forgotpassword'] = 'Diese Regel im Formular „Kennwort vergessen“ auswerten';
$string['registrationrule:instance:name'] = 'Name';
$string['registrationrule:instance:points'] = 'Punkte';
$string['registrationrule:instance:points_help'] = 'Punktzahl, die diese Regel zurückgibt, wenn eine Registrierung abgelehnt wird.';
$string['registrationrulepluginname'] = 'Registrierungsregel';
$string['ruleinstancestable:actions'] = 'Aktionen';
$string['ruleinstancestable:addcaptcha'] = 'CAPTCHA hinzufügen';
$string['ruleinstancestable:addrule'] = 'Regel hinzufügen';
$string['ruleinstancestable:areasused'] = 'Verwendungsbereiche';
$string['ruleinstancestable:captcha'] = 'CAPTCHA';
$string['ruleinstancestable:description'] = 'Beschreibung';
$string['ruleinstancestable:disabledarealabel'] = 'Regel für diesen Bereich nicht aktiviert';
$string['ruleinstancestable:disabledmessage'] = 'Das Plugin „Registrierungsregeln“ ist deaktiviert. Regeln werden erst wirksam, wenn es auf der Seite <a href="/admin/settings.php?section=generalregistrationrulessettings">Einstellungen für Registrierungsregeln</a> aktiviert wurde.';
$string['ruleinstancestable:disabledpluginsmessage'] = 'Es gibt <a href="/admin/settings.php?section=manageregistrationrules">{$a} deaktivierte Regel-Plugins</a>. Neue Regeln, die diese Plugins verwenden, können erst erstellt werden, wenn die entsprechenden Plugins aktiviert wurden.';
$string['ruleinstancestable:enabled'] = 'Aktiviert';
$string['ruleinstancestable:enabledarealabel'] = 'Regel für diesen Bereich aktiviert';
$string['ruleinstancestable:fallbackpoints'] = 'Fallback-Punkte';
$string['ruleinstancestable:forcednotification'] = 'Die Bearbeitung ist deaktiviert, da die Regeln derzeit über <b>config.php</b> verwaltet werden.';
$string['ruleinstancestable:forgotpasswordlabel'] = 'Formular „Kennwort vergessen“';
$string['ruleinstancestable:instancesjson:getinstancesjson'] = 'Instanzen-JSON anzeigen';
$string['ruleinstancestable:instancesjson:modalbodytext'] = '<p>Die folgende Konfiguration kann der Datei <b>config.php</b> hinzugefügt werden, um die Verwendung der aktuell aktiven Regelkonfiguration zu erzwingen.</p><p>Nach dem Hinzufügen zu <b>config.php</b> ist die Regelverwaltung nicht mehr über die Benutzeroberfläche verfügbar.</p>';
$string['ruleinstancestable:instancesjson:ruleinstancesjson'] = 'JSON der Regelinstanzen';
$string['ruleinstancestable:move'] = 'Verschieben';
$string['ruleinstancestable:name'] = 'Name';
$string['ruleinstancestable:nomorecaptchasmessage'] = 'Es kann jeweils nur eine Regel des Typs CAPTCHA hinzugefügt werden. Neue Regeln, die diese Plugin-Typen verwenden, können erst erstellt werden, wenn die aktuelle CAPTCHA-Instanz entfernt wurde.';
$string['ruleinstancestable:norulesaddedyet'] = 'Es wurden noch keine Regeln hinzugefügt. Fügen Sie unten über die Dropdown-Menüs eine Regel und/oder ein CAPTCHA hinzu.';
$string['ruleinstancestable:notconfigured'] = 'Nicht konfiguriert';
$string['ruleinstancestable:plugindisabled'] = 'Plugin deaktiviert';
$string['ruleinstancestable:points'] = 'Punkte';
$string['ruleinstancestable:points:decription'] = 'Anzahl der Punkte, die vergeben werden, wenn eine Registrierung abgelehnt wird.';
$string['ruleinstancestable:rulenotenabled'] = 'Regel nicht aktiviert';
$string['ruleinstancestable:signuplabel'] = 'Registrierungsformular';
$string['ruleinstancestable:siterecaptchaenabled'] = 'reCAPTCHA ist in den Website-Einstellungen aktiviert. Neue Regeln des Typs CAPTCHA können daher nicht hinzugefügt werden.';
$string['ruleinstancestable:type'] = 'Typ';
$string['rulewillnotbeused'] = 'Diese Regel wird noch nicht verwendet, da die <a href="{$a}">Konfigurationsoptionen</a> des Plugins noch nicht gesetzt wurden.';
$string['settings:enable:description'] = 'Regelprüfung aktivieren.';
$string['settings:forgotpassword'] = 'Passende Regeln im Formular „Kennwort vergessen“ auswerten';
$string['settings:forgotpassword:description'] = 'Prüfung einiger Regeln im Formular „Kennwort vergessen“ einbeziehen. Die verwendeten Regeln sind in der Spalte „Verwendungsbereiche“ der Regeltabelle angegeben.';
$string['settings:generalbeforemessage'] = 'Allgemeine Meldung für Regeln vor der Registrierung';
$string['settings:generalbeforemessage:description'] = 'Einige Regeln (z. B. <b>limitdatetime</b> oder <b>nope</b>) verhindern, dass die Registrierungsseite angezeigt wird. Dies ist eine statische Nachricht, die über allen Rückmeldungen dieser Regeln angezeigt wird.';
$string['settings:guidancemessage'] = '<p>Sie müssen „Regelprüfung aktivieren“ auswählen, bevor Registrierungsregeln funktionieren können.</p><p>Es wird jedoch empfohlen, zunächst die verfügbaren Regeln und CAPTCHA-Optionen zu prüfen und einzurichten und anschließend einige <a href="/admin/tool/registrationrules/manageruleinstances.php">Regeln</a> zu erstellen, bevor Sie die Regelprüfung aktivieren.</p> Außerdem können Sie in Betracht ziehen, „Nur protokollieren“ kurzzeitig zu aktivieren, um die Auswirkungen der gewählten Regeln einzuschätzen.';
$string['settings:loggingonly'] = 'Nur protokollieren';
$string['settings:loggingonly:description'] = 'Regeln normal auswerten, aber die Ergebnisse nur protokollieren, statt die Nutzerregistrierung abzulehnen.';
$string['settings:maxpoints'] = 'Maximale Ablehnungspunkte';
$string['settings:maxpoints:description'] = 'Die Registrierung wird abgelehnt, wenn dieser Schwellenwert nach der Auswertung der Regeln erreicht wird.';
$string['settings:registrationpagemessage'] = 'Meldung oben auf der Registrierungsseite';
$string['settings:registrationpagemessage:description'] = 'Allgemeine Meldung, die oben auf der Registrierungsseite angezeigt wird';
$string['settings:registrationruleinstances'] = 'Regeln';
$string['settings:registrationrulessettings'] = 'Einstellungen';
$string['subplugintype_registrationrule'] = 'Registrierungsregel';
$string['subplugintype_registrationrule_plural'] = 'Registrierungsregeln';
