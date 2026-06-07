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
 * Strings for component 'local_wikiexport', language 'de', version '4.4'.
 *
 * @package     local_wikiexport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['created'] = 'Erstellt am {$a}';
$string['exportepub'] = 'Export als EPUB';
$string['exportpdf'] = 'Export als PDF';
$string['failedinsertimage'] = 'Bild einfügen fehlgeschlagen: {$a}';
$string['filename'] = 'Export {$a->wikiname} {$a->timestamp}';
$string['modified'] = 'Zuletzt geändert von {$a->modifiedby} am {$a->timemodified}';
$string['pluginname'] = 'Wiki-Export';
$string['printed'] = 'Dieses Dokument wurde heruntergeladen am {$a}.';
$string['publishemail'] = 'E-Mail-Adresse veröffentlichen';
$string['publishemail_desc'] = 'Die E-Mail-Adresse, an die automatisch PDF-Dateien gesendet werden, sobald an einem Wiki Änderungen vorgenommen werden';
$string['publishername'] = 'Unbekannt';
$string['sortpages'] = 'Export sortieren';
$string['sortpagesintro'] = 'In dieser Reihenfolge werden die Seiten derzeit exportiert. Wenn Sie möchten, können Sie die Reihenfolge für den Export anpassen.';
$string['task:emailwikis'] = 'Wiki-Aktualisierung per E-Mail versenden';
$string['wikiexport:exportepub'] = 'Wiki als EPUB exportieren';
$string['wikiexport:exportpdf'] = 'Wiki als PDF exportieren';
$string['wikiexportfailed'] = 'Export des Wikis \'{$a}\' fehlgeschlagen';
$string['wikiexportfailed_body'] = 'Das Wiki \'{$a->name}\' wurde aktualisiert, aber der Versuch, es zu exportieren und per E-Mail zu versenden, ist nach {$a->exportattempts} Versuchen fehlgeschlagen. Wenn das Wiki erneut aktualisiert wird, werden weitere Versuche unternommen, es zu exportieren.

Das Wiki ist unter folgender Adresse zu finden: {$a->url}.';
$string['wikiupdated'] = 'Wiki \'{$a}\' aktualisiert';
$string['wikiupdated_body'] = 'Export von Wiki-Aktualisierung angehängt';
