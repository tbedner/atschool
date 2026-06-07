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
 * Strings for component 'local_kopere_status', language 'de', version '4.4'.
 *
 * @package     local_kopere_status
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['day'] = '1 Tag';
$string['days'] = '{$a} Tage';
$string['down'] = 'Ausgefallen';
$string['intervalminutes'] = 'Prüfintervall (Minuten)';
$string['intervalminutes_desc'] = 'Mindestzeit zwischen Prüfzyklen. Die geplante Aufgabe begrenzt sich selbst anhand dieses Werts.';
$string['lastcheck'] = 'Letzte Prüfung';
$string['minute'] = '1 Minute';
$string['minutes'] = '{$a} Minuten';
$string['modules'] = 'Module';
$string['modules_desc'] = 'Geben Sie ein Modul pro Zeile ein. Jede Zeile wird für die verschiedenen Status repliziert. Wenn Sie z. B. „Einschreibung“ und „Support“ (jeweils eine pro Zeile) eingeben, werden die Status nur für „Einschreibung“ und „Support“ angezeigt.';
$string['nodata'] = 'Noch keine Daten';
$string['overall_down'] = 'System nicht verfügbar';
$string['overall_operational'] = 'Alle Systeme betriebsbereit';
$string['pluginname'] = 'Systemstatus';
$string['privacy:metadata'] = 'Das Kopere-Status-Plugin speichert keine personenbezogenen Daten.';
$string['publiclink'] = 'Öffentliche Statusseite';
$string['publictitle'] = 'Öffentlicher Titel';
$string['publictitle_desc'] = 'Titel, der auf der öffentlichen Statusseite angezeigt wird.';
$string['retentiondays'] = 'Aufbewahrung (Tage)';
$string['retentiondays_desc'] = 'Löscht stündlich aggregierte Einträge, die älter als diese Anzahl von Tagen sind. Rohprotokolle werden ebenfalls nach jeder Aggregation bereinigt (es bleibt nur die aktuelle Stunde für die nächste Aggregation erhalten).';
$string['statuspagedays'] = 'Statusseiten-Tage';
$string['statuspagedays_desc'] = 'Anzahl der Tage, die auf der Statusseite angezeigt werden sollen (wählen Sie zwischen 1 und 7).';
$string['task_hourly_rollup'] = 'StatusBoard stündliche Aggregation &amp; Bereinigung';
$string['up'] = 'Betriebsbereit';
