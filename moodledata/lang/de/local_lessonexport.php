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
 * Strings for component 'local_lessonexport', language 'de', version '4.4'.
 *
 * @package     local_lessonexport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['annotatepermission'] = 'Formulare annotieren';
$string['annotatepermission_desc'] = 'Formulare im Dokument annotieren';
$string['assemblepermission'] = 'zusammenfügen';
$string['assemblepermission_desc'] = 'Dokument zusammenfügen';
$string['copypermission'] = 'Kopieren';
$string['copypermission_desc'] = 'Dokument kopieren';
$string['covercolour'] = 'Deckblatt Banner-Farbe';
$string['covercolour_desc'] = 'Die Farbe des Banners am Deckblatt für den Titel der Lektion';
$string['created'] = 'Erstellt am {$a}';
$string['customfont'] = 'Standard PDF Schriftart';
$string['customfont_desc'] = 'Standard Schriftart, die für das PDF Dokument verwendet wird. Verfügbare Schriftarten: (Times-Roman), timesb (Times-Bold), timesi (Times-Italic), timesbi (Times-BoldItalic), helvetica (Helvetica), helveticab (Helvetica-Bold), helveticai, helveticabi, courier (Courier), courierb (Courier-Bold), courieri (Courier-Oblique), courierbi (Courier-BoldOblique), symbol (Symbol), zapfdingbats (ZapfDingbats)';
$string['essay'] = 'Freitextantwort';
$string['exportpdf'] = 'Als PDF exportieren';
$string['exportstrict'] = 'Strenger Export';
$string['exportstrict_desc'] = 'Ob Dokumente Fehler ausgeben oder unterdrücken sollen.';
$string['extractpermission'] = 'Extrahieren';
$string['extractpermission_desc'] = 'Einzelne Seiten aus dem Dokument extrahieren';
$string['failedinsertimage'] = 'Bild konnte nicht eingefügt werden: {$a}';
$string['filename'] = '{$a->lessonname} {$a->timestamp} exportieren';
$string['fonts'] = 'Schriftarten';
$string['fontspage'] = 'PDF Schriftarten';
$string['formfillpermission'] = 'Formulare ausfüllen';
$string['formfillpermission_desc'] = 'Formulare im Dokument ausfüllen';
$string['highdefpermission'] = 'hohe Auflösung';
$string['highdefpermission_desc'] = 'Dokument in hoher Auflösung drucken';
$string['landscape'] = 'Querformat';
$string['landscape_desc'] = 'Ausrichtung im Querformat';
$string['language'] = 'Sprache';
$string['language_desc'] = 'Wenn Ihre Sprache Besonderheiten aufweist (Text von rechts nach links, Sonderzeichen), wählen Sie Ihre Sprache hier.';
$string['lessonexport:exportpdf'] = 'Lektion als PDF exportieren';
$string['lessonexportfailed'] = 'Exportieren der Lektion \'{$a}\' fehlgeschlagen';
$string['lessonexportfailed_body'] = 'Die Lektion \'{$a->name}\' wurde aktualisiert, aber der Versuch, diese zu exportieren und per E-Mail zu versenden, ist nach {$a->exportattempts} Versuchen fehlgeschlagen. Wenn die Lektion erneut aktualisiert wird, werden weitere Export-Versuche gestartet. Die Lektion ist unter {$a->url} verfügbar.';
$string['lessonpage'] = 'Seiten der Lektion';
$string['lessonupdated'] = 'Lektion \'{$a}\' aktualisiert';
$string['lessonupdated_body'] = 'Aktualisierter Export als Anhang';
$string['matching'] = 'Matching';
$string['modified'] = 'Zuletzt von {$a->modifiedby} am {$a->timemodified} bearbeitet';
$string['modifypermission'] = 'Bearbeiten';
$string['modifypermission_desc'] = 'Dokument bearbeiten';
$string['multichoice'] = 'Multiple Choice';
$string['numerical'] = 'Nummerisch';
$string['pdfcoverdownloaded'] = 'Download-Infos am Deckblatt';
$string['pdfcoverdownloaded_desc'] = 'Ob das Download-Datum des Dokuments am Deckblatt angezeigt werden soll.';
$string['pdfcoverupdated'] = 'Aktualisierungsinfos am Deckblatt';
$string['pdfcoverupdated_desc'] = 'Ob das Datum der letzten Aktualisierung am Deckblatt angezeigt werden soll.';
$string['pdfexcludepages'] = 'Ausgenommene Seitenarten';
$string['pdfexcludepages_desc'] = 'Seitenarten vom Export ausnehmen';
$string['pdfexportanswers'] = 'Antworten auf Fragen exportieren';
$string['pdfexportanswers_desc'] = 'Ob Antworten auf Fragen exportiert werden sollen.';
$string['pdffooterbottomleft'] = 'Bereich im Footer links unten.';
$string['pdffooterbottomleft_desc'] = 'Der linke untere Bereich des Footers wird mit Text befüllt. Dieser kann HTML-Tags zur Formatierung, Verlinkung, etc. enthalten.';
$string['pdffooterbottommiddle'] = 'Bereich im Footer mitte unten.';
$string['pdffooterbottommiddle_desc'] = 'Der mittlere untere Bereich des Footers wird mit Text befüllt. Dieser kann HTML-Tags zur Formatierung, Verlinkung, etc. enthalten.';
$string['pdffooterbottomright'] = 'Bereich im Footer rechts unten.';
$string['pdffooterbottomright_desc'] = 'Der rechte untere Bereich des Footers wird mit Text befüllt. Dieser kann HTML-Tags zur Formatierung, Verlinkung, etc. enthalten.';
$string['pdffootertopleft'] = 'Bereich im Footer links oben.';
$string['pdffootertopleft_desc'] = 'Der linke obere Bereich des Footers wird mit Text befüllt. Dieser kann HTML-Tags zur Formatierung, Verlinkung, etc. enthalten.';
$string['pdffootertopmiddle'] = 'Bereich im Footer mitte oben.';
$string['pdffootertopmiddle_desc'] = 'Der mittlere obere Bereich des Footers wird mit Text befüllt. Dieser kann HTML-Tags zur Formatierung, Verlinkung, etc. enthalten.';
$string['pdffootertopright'] = 'Bereich im Footer rechts oben.';
$string['pdffootertopright_desc'] = 'Der rechte obere Bereich des Footers wird mit Text befüllt. Dieser kann HTML-Tags zur Formatierung, Verlinkung, etc. enthalten.';
$string['pdffrontcoverpagenumbers'] = 'Deckblatt Seitenzahl';
$string['pdffrontcoverpagenumbers_desc'] = 'Steuert, ob die Seitenzahl am Deckblatt eines Dokuments angezeigt werden soll.';
$string['pdfownerpassword'] = 'PDF Dokument Eigentümerkennwort';
$string['pdfownerpassword_desc'] = 'Ein Eigentümerkennwort, mit dem das PDF Dokument versehen wird. Leer lassen, wenn kein Kennwort gesetzt werden soll.';
$string['pdfpageorientation'] = 'Ausrichtung des Dokuments';
$string['pdfpageorientation_desc'] = 'Die Ausrichtung der Seiten im Dokument (Hochformat oder Querformat)';
$string['pdfprotection'] = 'PDF Berechtigungen';
$string['pdfprotection_desc'] = 'Berechtigungen, die auf generierte PDF-Dokumente angewendet werden.';
$string['pdfuserpassword'] = 'PDF Nutzerkennwort';
$string['pdfuserpassword_desc'] = 'Ein Nutzerkennwort, mit dem das PDF Dokument versehen wird. Leer lassen, wenn kein Kennwort gesetzt werden soll.';
$string['plugingroup'] = 'Lektion exportieren';
$string['pluginname'] = 'Lektion als PDF exportieren';
$string['portrait'] = 'Hochformat';
$string['portrait_desc'] = 'Ausrichtung Hochformat';
$string['printed'] = 'Dieses Dokument wurde am {$a} heruntergeladen';
$string['printpermission'] = 'Drucken';
$string['printpermission_desc'] = 'Dokument drucken';
$string['publishemail'] = 'Automatisch per E-Mail versenden';
$string['publishemail_desc'] = 'Die E-Mail-Adresse, an die ein PDF automatisch gesendet wird, immer wenn eine Lektion aktiviert wird.';
$string['publishername'] = 'Unbekannt';
$string['righttoleft'] = 'Von rechts nach links';
$string['righttoleft_desc'] = 'Ob Text von rechts nach links gedruckt werden soll.';
$string['shortanswer'] = 'Kurzantwort';
$string['truefalse'] = 'Richtig/Falsch';
