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
 * Strings for component 'coursechecker_blocks', language 'de', version '4.4'.
 *
 * @package     coursechecker_blocks
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['blocks_activity'] = 'Block "{$a->name}"';
$string['blocks_comparison'] = '(Referenzkurs: "{$a->valuereference}" | Aktueller Kurs: "{$a->valuecurrent}")';
$string['blocks_error'] = 'Der Block ist entweder fälschlicherweise vorhanden oder fehlt im aktuellen Kurs.';
$string['blocks_setting'] = 'Aktivierte Blöcke';
$string['blocks_setting_help'] = 'Definieren Sie die erlaubten Blöcke (müssen in <a href="{$a}" target="_blank">Blöcke verwalten</a> aktiviert sein), die geprüft werden sollen.';
$string['blocks_success'] = 'Der Block ist im aktuellen Kurs korrekt eingefügt.';
$string['pluginname'] = 'Block Überprüfung';
$string['pluginname_help'] = 'Dieses Plugin vergleicht die aktivierten Blöcke eines Kurses mit einem Referenzkurs, um ein einheitliches Blocklayout sicherzustellen. Es prüft auf fehlende oder nicht übereinstimmende Blöcke und trägt dazu bei, eine standardisierte Kursstruktur auf der gesamten Plattform aufrechtzuerhalten.';
$string['privacy:metadata'] = 'Das Plugin „Block Überprüfung“ speichert keine personenbezogenen Daten. Die Prüfergebnisse werden im Haupt-Plugin „Course Checker“ gespeichert.';
