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
 * Strings for component 'filter_opencast', language 'de', version '4.4'.
 *
 * @package     filter_opencast
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['filtername'] = 'Opencast';
$string['pluginname'] = 'Opencast Filter';
$string['privacy:metadata'] = 'Das Opencast-Filter-Plugin speichert keine personenbezogenen Daten.';
$string['setting_configurl'] = 'URL zur Paella config.json';
$string['setting_configurl_desc'] = 'URL der vom Paella Player verwendeten config.json. Dies kann entweder eine absolute URL oder eine URL relativ zum wwwroot sein.';
$string['setting_episodeurl'] = 'URL-Vorlagen für die Filterung';
$string['setting_episodeurl_desc'] = 'URLs, die dieser Vorlage entsprechen, werden durch den Opencast-Player ersetzt. Sie müssen den Platzhalter [EPISODEID] verwenden, um anzugeben, wo die Episoden-ID in der URL enthalten ist, z.B. http://stable.opencast.de/play/[EPISODEID]. Wenn Sie nach mehreren URLs filtern möchten, geben Sie jede URL in einer neuen Zeile ein.';
