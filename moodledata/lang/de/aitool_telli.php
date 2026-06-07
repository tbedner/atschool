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
 * Strings for component 'aitool_telli', language 'de', version '4.4'.
 *
 * @package     aitool_telli
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adddescription'] = 'Die Telli-API stellt viele unterschiedliche Large Language Models für deutsche Schulen zur Verfügung.';
$string['apikey'] = 'API-Schlüssel';
$string['availablemodels'] = 'Verfügbare Modelle';
$string['availablemodelssetting'] = 'Verfügbare Modelle';
$string['availablemodelssettingdesc'] = 'Geben Sie die Namen der Modelle ein, die für den Tenant-Verwalter auswählbar sein sollen. Jeweils ein Modell pro Zeile eingeben. Die Namen müssen identisch sein zu dem "name"-Attribut der Modell-Beschreibung, die vom /v1/models-Endpunkt der API zurückgegeben wird. Fügen Sie "#VISION" am Ende des Namens hinzu, um das Modell als Vision-Model zu deklarieren, also dass es auch das Verarbeiten von Bildern unterstützt. Beachten Sie, dass das Verändern dieser Einstellung nur das Auswahlfeld im Bearbeiten-Formular des KI-Tools beeinflusst. Bereits konfigurierte und erstellte KI-Tools werden weiterhin das aktuell konfigurierte Modell nutzen können.';
$string['baseurl'] = 'Basis-URL';
$string['baseurlsetting'] = 'Basis-URL für die API';
$string['baseurlsettingdesc'] = 'Geben Sie die Basis-URL der Telli-API ein, nur den ersten Teil vor "/v1..."';
$string['err_apiresult'] = 'Ein Fehler trat auf beim Versuch, eine Verbindung mit der API herzustellen.';
$string['err_contentfilter'] = 'Ihre Anfrage wurde aufgrund vom Inhaltsfilter des externen KI-Systems zurückgewiesen. Ihr Prompt enthält vermutlich etwas, das nicht zulässig ist.';
$string['err_retrievingmodels'] = 'Es gab einen Fehler beim Versuch, die Liste der verfügbaren Modelle von der Telli-API abzurufen. Fehlercode: {$a->code}.';
$string['globalapikeysetting'] = 'Globaler API-Schlüssel';
$string['globalapikeysettingdesc'] = 'Wenn diese Einstellung ausgefüllt ist, wird dieser API-Key für alle Anfragen benutzt. Falls nicht, kann der Tenant-Verwalter einen eigenen API-Key hinterlegen.';
$string['managementpage'] = 'Verwaltungs-Seite';
$string['managementpagelink'] = 'Verwaltungs-Seite aufrufen';
$string['managementpagelinkdesc'] = 'Auf der Verwaltungsseite haben Sie Zugriff auf den aktuellen Verbrauch sowie auf die Liste der verfügbaren Modelle.';
$string['pluginname'] = 'Telli';
$string['privacy:metadata'] = 'Das Subplugin "Telli API" des lokalen Plugins local_ai_manager speichert keine personenbezogenen Daten.';
$string['retrieveinformation'] = 'Informationen abrufen';
$string['statuscode'] = 'Status-Code';
$string['usage'] = 'Verbrauch';
