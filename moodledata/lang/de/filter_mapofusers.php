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
 * Strings for component 'filter_mapofusers', language 'de', version '4.4'.
 *
 * @package     filter_mapofusers
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_locationdata'] = 'Cache für Standortdaten für filter_mapofusers';
$string['errormsg'] = 'Fehlerhafte Parameter für filter_mapofusers. Überprüfen Sie bitte Ihre Syntax.';
$string['filtername'] = 'Map of Users';
$string['labeltext'] = 'HTML zur Beschriftung';
$string['labeltext_desc'] = 'Dieses HTML wird als Beschriftung für die Stecknadeln auf der Karte verwendet. <ul>
<li>Sie können Platzhalter wie {Vorname} und {Nachname} verwenden, um beliebige Werte der Person einzufügen.</li>
<li>Verwenden Sie {Profil_[Name des nutzerdefinierten Felds]} für nutzerdefinierte Profilfelder.</li>
<li>Verwenden Sie {Standort} für den Standort der Person.</li>
<li>Verwenden Sie {Nutzerlink} für den vollständigen Namen der Person, der auf das Nutzerprofil verweist.</li></ul>';
$string['mapconfig'] = 'Leaflet-Kartenkonfiguration';
$string['mapconfig_desc'] = 'Diese Konfiguration wird zum Einrichten der leaflet.js-Karte verwendet. Es muss ein gültiges JSON-Format sein. Weitere Informationen finden Sie in leaflet.js oder der KI Ihrer Wahl. Belassen Sie die Standardeinstellung, wenn Sie unsicher sind.';
$string['pinimage'] = 'Bild für Stecknadel';
$string['pinimage_desc'] = 'Laden Sie optional ein Bild hoch, das Sie alternativ als Stecknadel auf der Karte verwenden. Das Bild sollte klein sein, idealerweise 25 x 41 Pixel.';
$string['privacy:metadata'] = 'Das Filter-Plugin "Map of Users" speichert keine personenbezogenen Daten.';
