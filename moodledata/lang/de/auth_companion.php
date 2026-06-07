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
 * Strings for component 'auth_companion', language 'de', version '4.4'.
 *
 * @package     auth_companion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_companiondescription'] = 'Diese Authentifizierungsmethode erlaubt es Nutzer/innen, sich mit einem persönlichen Begleitkonto anzumelden.';
$string['clean_old_companion_accounts'] = 'Alte Begleitkonten bereinigen';
$string['companion:allowcompanion'] = 'Begleitkonto erlauben';
$string['companion:useascompanion'] = 'Diese Rolle für Begleitkonten nutzen';
$string['companionrole'] = 'Rolle des Begleitkontos';
$string['companionrole_definition'] = 'Um die verfügbaren Rollen zu definieren, setzen Sie die Berechtigung "auth/companion:useascompanion" auf "Erlauben".';
$string['delete_data'] = 'Daten löschen';
$string['error_empty_emaildomain'] = 'Fehler: Mit einer leeren Domain.';
$string['error_invalid_group'] = 'Fehler: Ungültige Gruppe!';
$string['error_wrong_emaildomain'] = 'Fehler: Falsche E-Mail-Domain!';
$string['info_plugin_remains_deactivated'] = 'Das Plugin bleibt deaktiviert.';
$string['info_using_companion'] = 'Sie verwenden nun das Begleitkonto "<strong>{$a}</strong>".';
$string['info_using_origin'] = 'Sie verwenden nun wieder Ihr Hauptkonto "<strong>{$a}</strong>".';
$string['override_email'] = 'E-Mail-Adresse überschreiben';
$string['pluginname'] = 'Begleitkonto';
$string['privacy:metadata'] = 'Das Begleitkonto speichert keine personenbezogenen Daten.';
$string['privacy:metadata:auth_companion'] = 'Begleitkonto';
$string['privacy:metadata:auth_companion:authsubsystem'] = 'Dieses Plugin ist verbunden mit dem Authentifizierungs-Subsystem.';
$string['privacy:metadata:auth_companion:companionid'] = 'Die ID des Begleitkontos.';
$string['privacy:metadata:auth_companion:mainuserid'] = 'Die ID des Hauptkontos';
$string['privacy:metadata:auth_companion:tableexplanation'] = 'Begleitkonten verbunden mit einem Moodlekonto';
$string['privacy:metadata:auth_companion:timecreated'] = 'Der Zeitpunkt der Erstellung des Begleitkontos';
$string['setting_email_option_force_override'] = 'E-Mail-Überschreibung erzwingen';
$string['setting_email_option_help'] = 'Die Begleit-E-Mail-Adresse kann durch die E-Mail-Adresse der aktuellen Person überschrieben werden.';
$string['setting_email_option_no_override'] = 'Keine E-Mail-Überschreibung';
$string['setting_email_option_optional'] = 'Die Person entscheiden lassen, ob die E-Mail-Adresse überschrieben werden soll..';
$string['setting_email_options'] = 'E-Mail-Optionen';
$string['setting_email_options_help'] = 'Wenn die Einstellung <strong>$CFG->authloginviaemail</strong> gesetzt ist, können Sie keine E-Mail-Überschreibung zulassen!';
$string['setting_emaildomain'] = 'Domäne, die keine E-Mails versendet';
$string['setting_emaildomain_help'] = 'Diese Domain wird für die temporäre E-Mail-Adresse des Begleitkontos verwendet. Es sollte sich um eine Domain handeln, an die keine E-Mails gesendet werden können.';
$string['setting_forcedeletedata'] = 'Löschen von Daten erzwingen';
$string['setting_forcedeletedata_help'] = 'Wenn diese Einstellung aktiv ist, werden die Daten des Begleitkontos beim Zurückschalten gelöscht. Andernfalls kann die Person selbst entscheiden.';
$string['setting_forcelogin'] = 'Neuanmeldung erzwingen';
$string['setting_forcelogin_help'] = 'Diese Einstellung bewirkt, dass beim Wechsel zum Hauptkonto eine erneute Anmeldung erforderlich ist.';
$string['setting_group_default'] = 'Standard-Gruppeneinstellung';
$string['setting_namesuffix'] = 'Namenszusatz';
$string['setting_namesuffix_help'] = 'Dieser Wert wird an den Originalnamen des Hauptkontos angehängt.';
$string['switch_back'] = 'Zurückwechseln';
$string['switch_back_text'] = 'Zum Hauptkonto zurückwechseln';
$string['switch_to_companion'] = 'Zum Begleitkonto wechseln';
$string['switch_to_companion_note_email_override_force'] = 'Die E-Mail-Adresse Ihres aktuellen Logins wird für Ihr Begleitkonto verwendet.';
$string['switch_to_companion_note_email_override_no'] = 'Für Ihr Begleitkonto wird eine zufällige Pseudo-E-Mail-Adresse verwendet.';
$string['switch_to_companion_note_email_override_optional'] = 'Sie können wählen, ob Ihre E-Mail-Adresse für Ihr Begleitkonto verwendet werden soll oder nicht.';
$string['switch_to_companion_text'] = 'Ihre aktuelle Anmeldung wird zum Begleitkonto gewechselt.';
$string['wrong_or_missing_role'] = 'Falsche oder fehlende Begleitkonto-Rolle';
