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
 * Strings for component 'local_wikicreator', language 'de', version '4.4'.
 *
 * @package     local_wikicreator
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['create_pages'] = 'Wiki-Seiten erstellen';
$string['group_not_found'] = 'Die Guppen-ID {$a} existiert nicht.';
$string['invalid_page_title'] = 'Ungültiger Seitenname für Gruppe {$a}';
$string['invalid_settings'] = 'Ungültige Einstellungen. Prüfen Sie bitte die Konfiguration.';
$string['invalid_wikiid'] = 'Ungültige Wiki-ID';
$string['json_error'] = 'JSON Decoder-Fehler: {$a}';
$string['no_pages_defined'] = 'Keine Seiten in der Konfiguration definiert';
$string['no_valid_group'] = 'Keine gültige Gruppe gefunden';
$string['page_creation_error'] = 'Fehler beim Erstellen der Seite "{$a}" für Gruppe {$b}: {$c}';
$string['pluginname'] = 'Wiki Creator';
$string['settings_groups'] = 'Gruppen-IDs (komma getrennt)';
$string['settings_pages'] = 'Seiten (JSON-Format: {"Seitentitel": "<p>HTML-Inhalt</p>", ...})';
$string['settings_wikiid'] = 'Wiki-ID';
$string['subwiki_creation_error'] = 'Fehler beim Erstellen eines Subwiki für Gruppe {$a}: {$b}';
$string['success_message'] = 'Operation erfolgreich: Wiki-Seiten wurden erstellt.';
$string['summary'] = '{$a->created} Seite(n) erstellt, {$a->skipped} Seite(n) übersprungen (existieren bereits).';
$string['usegroupprefix'] = 'Gruppen-Prefix verwenden';
$string['usegroupprefix_desc'] = 'Wenn diese Option aktiviert ist, wird der Gruppenname automatisch als Präfix (mittels eines vordefinierten HTML-Codes) zu jeder erstellten Seite hinzugefügt.';
$string['version_creation_error'] = 'Fehler beim Erstellen der Version für "{$a}" (Gruppe {$b}): {$c}';
$string['wikicreator'] = 'Wiki Creator';
