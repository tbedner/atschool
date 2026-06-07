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
 * Strings for component 'registrationrule_mintime', language 'de', version '4.4'.
 *
 * @package     registrationrule_mintime
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['displaydescription'] = 'Die Kontoregistrierung muss länger als {$a->time} Sekunden dauern.';
$string['failuremessage'] = 'Das Registrierungsformular wurde zu schnell ausgefüllt. Sind Sie ein Bot?';
$string['fallbackfailuremessage'] = 'Die Registrierungszeit konnte nicht dekodiert werden.';
$string['logmessage'] = 'Die Kontoregistrierung dauerte weniger als {$a->time} Sekunden.';
$string['minimumcompletiontime'] = 'Mindestzeit zum Ausfüllen';
$string['minimumcompletiontime_help'] = 'Das Ausfüllen des Registrierungsformulars muss länger als diese Zeit dauern, andernfalls wird die Registrierung abgelehnt.';
$string['plugindescription'] = 'Die Kontoregistrierung muss länger dauern als die konfigurierte Zeitdauer in Sekunden.';
$string['pluginname'] = 'Mindestzeit zum Ausfüllen';
$string['privacy:null_provider:reason'] = 'Dieses Plugin speichert keine personenbezogenen Daten.';
$string['registrationrule:instance:name'] = 'Mindestzeit zum Ausfüllen';
