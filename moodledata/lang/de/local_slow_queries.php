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
 * Strings for component 'local_slow_queries', language 'de', version '4.4'.
 *
 * @package     local_slow_queries
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkperformance_slowqueries_action'] = 'Langsame Abfragen anzeigen';
$string['checkperformance_slowqueries_details_found'] = 'Es wurden <strong>{$a->count}</strong> Abfragen gefunden, die mehr als <strong>{$a->seconds}s</strong> gedauert haben – siehe <a href="{$a->url}">Bericht über langsame Abfragen</a>';
$string['checkperformance_slowqueries_details_morethan'] = 'Es gibt <strong>{$a->count}</strong> Abfragen, die länger als <strong>{$a->seconds}s</strong> gedauert haben – siehe <a href="{$a->url}">Bericht über langsame Abfragen</a>';
$string['checkperformance_slowqueries_name'] = 'Langsame Abfragen beeinträchtigen die Moodle-Performance';
$string['checkperformance_slowqueries_none'] = 'Keine Abfrage hat länger als 5s gedauert.';
$string['checkperformance_slowqueries_notconfigured'] = 'Nicht konfiguriert';
$string['checkperformance_slowqueries_summary_found'] = 'Es wurden <strong>{$a->count}</strong> Abfragen gefunden, die länger als {$a->seconds}s gedauert haben';
$string['col_avgtime'] = 'Durchschnittliche Zeit (s)';
$string['col_count'] = 'Anzahl';
$string['col_cron'] = 'CRON';
$string['col_origin'] = 'Stacktrace';
$string['col_parameters'] = 'Parameter';
$string['col_sqlpreview'] = 'SQL';
$string['comments_title'] = 'Kommentare';
$string['detail_indexes'] = 'Möglicherweise fehlende Indizes';
$string['detail_indexes_none'] = 'Keine Indexvorschläge für diese Abfrage erkannt.';
$string['detail_indexes_notice'] = 'Die Vorschläge sind heuristisch. Testen Sie sorgfältig in einer Staging-Umgebung und validieren Sie mit EXPLAIN/ANALYZE.';
$string['detail_sql'] = 'SQL und Parameter';
$string['detail_sql_expanded'] = 'SQL mit Parametern';
$string['detail_sql_expanded_desc'] = 'Bestmögliche Erweiterung für die Analyse (nur Anzeige)';
$string['detail_title'] = 'Abfragedetails';
$string['duration_days'] = '{$a} Tag(e)';
$string['duration_hours'] = '{$a} Stunde(n)';
$string['duration_minutes'] = '{$a} Minute(n)';
$string['duration_seconds'] = '{$a} Sekunde(n)';
$string['filter_apply'] = 'Anwenden';
$string['filter_minexec'] = 'Min. Ausführungszeit (s)';
$string['filter_search'] = 'SQL suchen';
$string['filter_search_ph'] = 'Geben Sie einen Teil des SQL ein, um zu suchen...';
$string['filter_title'] = 'Filter';
$string['index_title'] = 'Langsame Abfragen';
$string['logslow_warning_body'] = 'Diese Seite liest aus <code>mdl_log_queries</code>, aber Ihre Website ist nicht so konfiguriert, dass langsame SQL-Abfragen protokolliert werden. Aktivieren Sie <code>logslow</code> in <code>config.php</code> (setzen Sie es auf <code>true</code> oder auf eine Zahl in Sekunden). Beispiel:';
$string['logslow_warning_current'] = 'Aktueller Wert';
$string['logslow_warning_hint'] = 'Nachdem Sie <code>config.php</code> gespeichert haben, reproduzieren Sie die langsame Seite/Cron-Aufgabe und aktualisieren Sie dann diese Seite, um neue Einträge zu sehen.';
$string['logslow_warning_title'] = 'Protokollierung langsamer Abfragen ist deaktiviert';
$string['nav_index'] = 'Langsame Abfragen';
$string['pluginname'] = 'Langsame Abfragen';
$string['privacy:metadata'] = 'Das Plugin „Langsame Abfragen“ speichert keine personenbezogenen Daten. Es zeigt Administratoren lediglich vorhandene Protokolleinträge zu Datenbankabfragen an.';
$string['timeline_calendar'] = 'Kalender-Zeitleiste';
$string['timeline_last_7'] = '<strong>{$a}</strong> Ausführungen in den letzten 7 Tagen';
$string['timeline_scale'] = 'Die Skala entspricht 1 Sekunde pro {$a} Pixel';
$string['timeline_title'] = 'Zeitleiste der Abfragen';
$string['timeline_totaltime'] = 'Insgesamt hat die Datenbank <strong>{$a}</strong> für die Ausführung dieser SQL-Anweisungen benötigt';
