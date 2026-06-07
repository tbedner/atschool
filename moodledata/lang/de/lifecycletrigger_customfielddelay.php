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
 * Strings for component 'lifecycletrigger_customfielddelay', language 'de', version '4.4'.
 *
 * @package     lifecycletrigger_customfielddelay
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['customfield'] = 'Ein Kurs-Customfield vom Typ Datum';
$string['customfield_help'] = 'Der Trigger prüft den Wert dieses Kurs-Customfields vom Typ Datum.';
$string['delay'] = 'Zeit seit dem Datum des Customfield, bis ein Prozess gestartet wird';
$string['delay_help'] = 'Der Trigger wird ausgeführt, falls die Zeit, die seit dem Customfield-Datum des Kurses vergangen ist, größer ist, als der angegebene Zeitraum.';
$string['missingfield'] = 'Nutzerdefiniertes Kursfeld "{$a}" vom Typ Datum ist in diesem Moodle nicht vorhanden und muss zuerst angelegt werden.';
$string['nocustomfields_link'] = 'Link zum Anlegen von nutzerdefinierten Kursfeldern';
$string['nocustomfields_warning'] = 'Keine passenden Felder gefunden!';
$string['plugindescription'] = 'Löst aus wenn das Datum eines zu spezifizierenden Customfield vom Typ Datum nach einem Zeitpunkt in der Zukunft ist.';
$string['pluginname'] = 'Customfield Datum - Trigger';
$string['privacy:metadata'] = 'Dieses Subplugin speichert keine persönlichen Daten.';
