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
 * Strings for component 'coursechecker_userdata', language 'de', version '4.4'.
 *
 * @package     coursechecker_userdata
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Nutzerdaten Überprüfung';
$string['pluginname_help'] = 'Kursaktivitäten auf verbleibende Nutzerdaten überprüfen, wie Aufgabenabgaben, Forenbeiträge oder Protokolle.';
$string['privacy:metadata'] = 'Das Plugin „Nutzerdaten Überprüfung“ speichert keine personenbezogenen Daten. Die Prüfergebnisse werden im Haupt-Plugin „Course Checker“ gespeichert.';
$string['userdata_error'] = 'Es sollten keine Nutzerdaten in der Aktivität {$a} vorhanden sein.';
$string['userdata_help'] = 'Wenn Sie möchten, dass diese Daten in andere Kurse kopiert werden, müssen Sie diese manuell importieren. Hier sind einige nützliche Anleitungen: <a href="https://docs.moodle.org/38/en/Backup_of_user_data" target="_blank">Backup von Nutzerdaten</a> und <a href="https://docs.moodle.org/38/en/Reusing_activities" target="_blank">Wiederverwendung von Aktivitäten</a>.';
$string['userdata_setting_modules'] = 'Aktivierte Module';
$string['userdata_setting_modules_help'] = 'Definieren Sie die erlaubten Module, die auf Nutzerdaten überprüft werden sollen. Die Module müssen unter <a href="{$a}" target="_blank">Aktivitäten verwalten</a> aktiviert sein, die Methode reset_userdata in <code>mod/{modname}/lib.php</code> enthalten und von diesem Plugin unterstützt werden.';
$string['userdata_success'] = 'Die Aktivität {$a} enthält keine Nutzerdaten.';
