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
 * Strings for component 'qtype_varnumunit', language 'de', version '4.4'.
 *
 * @package     qtype_varnumunit
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreunits'] = 'Leerzeichen für {no} weitere Einheiten';
$string['anyotherunit'] = 'Jede andere Einheit';
$string['correctansweris'] = 'Der richtige numerische Teil der Frage ist: {$a}';
$string['notenoughunits'] = 'Sie haben keine Ausdrücke für die Zuordnung von Einheiten eingegeben. Sie müssen mindestens einen Ausdruck für die Zuordnung von Einheiten angeben.';
$string['notvalidnumberprepostfound'] = 'Ihre Antwort sollte mit einer Zahl beginnen.';
$string['percentgradefornumandunit'] = 'Wert : {$a->num}, Einheit : {$a->unit}';
$string['pluginname'] = 'Variabler Numeriksatz mit Einheiten';
$string['pluginname_help'] = 'Als Antwort auf eine Frage geben die Teilnehmer/innen eine Zahl und die entsprechende Einheit ein.

Diese Frage ähnelt dem Fragetyp "Variabler Numeriksatz“, aber er akzeptiert, bewertet und gibt auch Feedback für Einheiten.

Die in der Frage verwendeten Zahlen und die zur Berechnung der Antwort verwendeten Zahlen stammen aus vordefinierten Sätzen, die aus mathematischen Ausdrücken vorberechnet werden können.

Alle Ausdrücke werden bei der Frageerstellung berechnet, und die Werte der Zufallsfunktionen sind für alle Teilnehmer/innen gleich.';
$string['pluginname_link'] = 'question/type/varnumunit';
$string['pluginnameadding'] = 'Frage mit variablem Numeriksatz und Einheiten hinzufügen';
$string['pluginnameediting'] = 'Frage mit variablem Numeriksatz und Einheiten bearbeiten';
$string['pluginnamesummary'] = 'Fragetyp ermöglicht eine numerische Antwort mit Einheiten. Die Frage kann mehrere Varianten haben.
Ausdrücke werden für jede Fragevariante vorab ausgewertet.';
$string['preservespacenotrequire'] = 'Leerzeichen beibehalten, aber nicht zwingend erforderlich';
$string['preservespacerequire'] = 'Leerzeichen beibehalten und ein Leerzeichen zwischen der Zahl und der Einheit verlangen';
$string['privacy:metadata'] = 'Mit dem Plugin für den Fragetyp "Variabler Numeriksatz mit Einheiten" können Trainer/innen Standardoptionen für Nutzereinstellungen festlegen.';
$string['privacy:preference:defaultmark'] = 'Die für eine bestimmte Frage festgelegte Standardmarkierung.';
$string['privacy:preference:penalty'] = 'Der Abzug bei jedem Versuch mit variablem Numeriksatz mit Einheiten, wenn Fragen mit dem Verhalten "Interaktiv mit mehreren Versuchen" oder "Adaptiver Modus" ausgeführt werden.';
$string['privacy:preference:unitfraction'] = 'Wie soll die Verteilung der "relativen Gewichtung der Antwortteile“ (Wert und Einheit in Prozent) festgelegt werden?';
$string['removeallspace'] = 'Alle Leerzeichen vor der Bewertung entfernen';
$string['replacedash'] = 'Bindestriche ersetzen';
$string['spaceinunit'] = 'Leerzeichen in Einheiten';
$string['spacesfeedbackmustbegiven'] = 'Sie haben die Option "Leerzeichen beibehalten und Leerzeichen zwischen Zahl und Einheit erforderlich" ausgewählt, aber kein Feedback zu dieser Option angegeben. Bitte geben Sie ein Feedback ein.';
$string['spacingfeedback'] = 'Feedback zu Leerzeichen';
$string['spacingfeedback_default'] = 'Zwischen der Zahl und der Einheit muss ein Leerzeichen eingefügt werden.';
$string['spacingfeedback_help'] = 'Anzuzeigende Nachrichten, wenn "Leerzeichen und Einheiten" als "Leerzeichen beibehalten und ein Leerzeichen zwischen Zahl und Einheit erforderlich" eingestellt ist.';
$string['summarise_response'] = 'Zahl : "{$a->numeric}", Einheit : "{$a->unit}"';
$string['superscriptallowed'] = 'Superscript ist erlaubt, aber nicht notwendig';
$string['superscriptnone'] = 'Kein SuperScript';
$string['superscripts'] = 'In der Teilnehmerantwort';
$string['superscriptscinotationrequired'] = 'Wissenschaftliche Schreibweise notwendig';
$string['unitduplicate'] = 'Derselbe pmatch-Ausdruck wurde mehrmals verwendet.';
$string['unitmustbegiven'] = 'Sie haben hier eine Bewertung und/oder ein Feedback angegeben, jedoch keinen Ausdruck für die Zuordnung der Einheiten.
Geben Sie einen Ausdruck ein oder setzen Sie die Note auf Null zurück und entfernen Sie das Feedback.';
$string['unitno'] = 'Einheit {$a}';
$string['units'] = 'Einheiten';
$string['units_help'] = 'Verwenden Sie die pmatch-Syntax, um übereinstimmende Einheiten zu beschreiben.';
$string['unitsfractionsnomax'] = 'Eine der Einheiten sollte eine Punktzahl von 100% erreichen, damit für den Einheitenteil der Frage die volle Punktzahl erreicht werden kann.';
$string['unitweighting'] = 'Relative Gewichtung von Antwortteilen';
$string['value'] = 'Wert';
$string['value_help'] = 'Geben Sie hier Werte für "vordefinierte Variablen" ein. Alternativ werden hier berechnete Werte für eine "berechnete Variable" angezeigt.';
