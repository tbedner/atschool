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
 * Strings for component 'local_deepler', language 'de', version '4.4'.
 *
 * @package     local_deepler
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikeytitle'] = 'API Key für DeepL Translate';
$string['apikeytitle_desc'] = 'Kopieren Sie Ihren API-Schlüssel von DeepL, um die maschinelle Übersetzung zu nutzen.';
$string['badsettings'] = 'Die Einstellung DeepL scheint unvollständig zu sein, wahrscheinlich fehlt der API-Schlüssel.
Fragen Sie Ihre/n Moodle-Administrator/in';
$string['canttranslate'] = 'Kann \'{$a}\' nicht in \'{$a}\' übersetzen, bitte wählen Sie eine andere Zielsprache';
$string['canttranslatesame'] = 'Beide Sprachen sind gleich:';
$string['contextdeepl'] = 'Kurskontext';
$string['contextdeepl_placeholder'] = 'Informieren Sie den Übersetzer (DeepL) über den Kontext, damit er kontextbezogener übersetzen kann... (experimentell)';
$string['deeplapidoc'] = 'siehe Einzelheiten in der Dokumentation von DeepL';
$string['deeplapidoctitle'] = 'API Einstellungen von DeepL';
$string['deeplapiexception'] = 'Die API von DeepL hat einen Fehler zurückgegeben';
$string['deepler:edittranslations'] = 'Kursübersetzungen in Deepl Übersetzer bearbeiten';
$string['deeplprotitle'] = 'DeepL Pro benützen?';
$string['deeplprotitle_desc'] = 'Wenn diese Option aktiviert ist, verwendet Deepl Übersetzer DeepL Pro anstelle der kostenlosen Version von DeepL.';
$string['doselecttarget'] = 'Wählen Sie bitte eine Zielsprache.';
$string['editbutton'] = 'Quelle direkt bearbeiten';
$string['errordbpartial'] = '{$a} der Felder wurden NICHT in der Datenbank gespeichert. Überprüfen Sie manuell vor Ort';
$string['errordbtitle'] = 'Datenbankfehler';
$string['errortoolong'] = '(Es könnte sein, dass der Text zu lang für das Feld ist... Prüfen Sie manuell vor Ort)';
$string['fieldmaxlengtha'] = '{$a} characters';
$string['fieldmaxlengthb'] = '(max {$a})';
$string['filters'] = 'Filter';
$string['formality'] = 'Anredeform';
$string['formalitydefault'] = 'standard';
$string['formalityless'] = 'informell';
$string['formalitymore'] = 'formell';
$string['formalitypreferless'] = 'informell bevorzugen';
$string['formalityprefermore'] = 'formell bevorzugen';
$string['glossary:actions'] = 'Aktionen';
$string['glossary:deepl:link'] = 'DeepL API-Dokumentation';
$string['glossary:deeplid'] = 'UUID';
$string['glossary:delete:deeplissue:body'] = 'Das Glossar konnte nicht gelöscht werden: {$a}';
$string['glossary:delete:deeplissue:title'] = 'DeepL-Problem';
$string['glossary:delete:failed:body'] = 'Das Löschen des Glossars ist fehlgeschlagen: {$a}';
$string['glossary:delete:failed:title'] = 'Löschen fehlgeschlagen';
$string['glossary:delete:idmissing:body'] = 'Das Löschen des Glossars ist fehlgeschlagen: {$a}';
$string['glossary:delete:idmissing:title'] = 'Fehlende ID';
$string['glossary:delete:invalidsesskey:body'] = 'Das Löschen des Glossars ist fehlgeschlagen: {$a}';
$string['glossary:delete:invalidsesskey:title'] = 'Invalid session key';
$string['glossary:delete:success:body'] = 'Ungültiger Sitzungsschlüssel';
$string['glossary:delete:success:title'] = 'Löschen erfolgreich';
$string['glossary:id'] = 'Glossar-ID';
$string['glossary:id_placeholder'] = 'Glossar-ID, falls vorhanden...';
$string['glossary:lastused'] = 'Letzte Verwendung';
$string['glossary:listempty'] = 'Für diese Sprachkombination sind keine Glossare verfügbar. Gehen Sie zu "DeepLer-Glossare" in Ihren Benutzereinstellungen, um einige hochzuladen.';
$string['glossary:manage:title'] = 'DeepLer-Glossare';
$string['glossary:name'] = 'Name';
$string['glossary:nbentries'] = 'Eingänge';
$string['glossary:neverused'] = 'Niemals';
$string['glossary:notselected'] = 'Kein Glossar ausgewählt';
$string['glossary:pool'] = 'Team';
$string['glossary:pool:admin'] = 'Im Besitz der Verwaltung';
$string['glossary:pool:title'] = 'Glossare von Team';
$string['glossary:private:title'] = 'Private Glossare';
$string['glossary:public:title'] = 'Öffentliche Glossare';
$string['glossary:select'] = 'Wählen Sie ein Glossar aus.';
$string['glossary:selectplaceholder'] = 'Geben Sie einen Glossarnamen ein.';
$string['glossary:sourcelang'] = 'Quelle';
$string['glossary:targetlang'] = 'Ziel';
$string['glossary:upload'] = 'Hochladen';
$string['glossary:upload:btn'] = 'Glossar erstellen';
$string['glossary:upload:deeplissue:body'] = 'Das Glossar konnte nicht hochgeladen werden, weil: {$a}';
$string['glossary:upload:deeplissue:title'] = 'DeepL-Problem';
$string['glossary:upload:failed:body'] = 'Das Hochladen des Glossars ist fehlgeschlagen, weil: {$a}';
$string['glossary:upload:failed:title'] = 'Fehler beim Hochladen';
$string['glossary:upload:file:supported'] = 'Unterstützte Dateiformate: CSV, TSV, XLSX, XLS, ODS';
$string['glossary:upload:fileerror:body'] = 'Das Hochladen des Glossars ist fehlgeschlagen, weil: keine Datei gefunden wurde.';
$string['glossary:upload:fileerror:title'] = 'Dateifehler';
$string['glossary:upload:filetypeunsupported:body'] = 'Nicht unterstützter Dateityp';
$string['glossary:upload:filetypeunsupported:title'] = '${a} ist ungültig. Bitte laden Sie eine CSV-, TSV-, XLSX-, XLS- oder ODS-Datei hoch.';
$string['glossary:upload:helpmodal:col1'] = '##### FR > ES (Dateinamenskonventionen)

**Datei: \'litérature\\_fr-es.csv**\'

belle      , hermosa

delicieux  , exquisito

mouse      , mouse

##### ES > FR (mit Überschriften)
**Datei: \'litérature-es-fr.csv**\'

ES   , FR

hermosa   , belle

exquisito , delicieux

mouse     , mouse';
$string['glossary:upload:helpmodal:col2'] = '##### Beispiele für Dateinamenskonventionen:

**OK**

*   私の用語集**_en-ja.xls**
*   Tech\\_jargon**\\_FR-ES.CSV**
*   myGlossary**-**en-fr.csv (nur OK, wenn die Kopfzeile EN FR enthält)

**Expl NOT OK (wenn die Überschriften nicht verwendet werden)**

*   myGlossary**-**en-fr.csv (hier wird in der Kopfzeile nach Sprachen gesucht)
*   Tech\\_jargon\\_**FRA-SPA**.ods (3-Buchstaben-Codes, sucht jedoch nicht nach der Kopfzeile)
*   myHistoricalGlo_fr-es.**txt** (nicht unterstützte Erweiterung)';
$string['glossary:upload:helpmodal:intro'] = '#### Regeln

Bidirektionale (v3) Glossare sind noch nicht zulässig.

Die Tabelle muss ein einzelnes Blatt mit zwei Spalten und entweder (1) enthalten:

- Gültige 2-Buchstaben-Code-Spaltenüberschriften (z. B. EN und JA) in Groß- oder Kleinbuchstaben.
- Gültiger Dateiname gemäß den folgenden Konventionen.

##### Konventionen für die Dateibenennung:

1.  Benennen Sie die Datei in GLOSSARYNAME\\_SOURCE-TARGET.EXTENSION um.
2.  Geben Sie ihr einen aussagekräftigen, aber nicht zu langen Namen (damit sie in Tabellen gut angezeigt wird).
3.  Die CSV-Datei darf keine Kopfzeile enthalten.
4.  SOURCE und TARGET im Dateinamen müssen aus einem 2-stelligen Sprachcode bestehen.

(1)_Die Dateibenennung hat Vorrang vor Kopfzeilen.
Wenn Sie also die Kopfzeilen verwenden, aber die Sprachpaare im Dateinamen hinzufügen möchten,
 achten Sie darauf, dass der Name keine Suffixe wie \\_SOURCE-TARGET enthält, und vermeiden Sie die Verwendung von "\\_” gefolgt von "-”.
 Verwenden Sie beispielsweise GLOSSARYNAME-SOURCE-TARGET.EXTENSION.';
$string['glossary:upload:helpmodal:title'] = 'Laden Sie eine einfache Tabelle mit zwei Spalten "Quelle" und "Ziel" hoch.';
$string['glossary:upload:invalidsesskey:body'] = 'Das Hochladen des Glossars ist fehlgeschlagen, weil: {$a}';
$string['glossary:upload:invalidsesskey:title'] = 'Ungültiger Sitzungsschlüssel';
$string['glossary:upload:langpair:notresolved:body'] = 'Weder im Dateinamen noch in den Überschriften.';
$string['glossary:upload:langpair:notresolved:title'] = 'Das Sprachpaar Quelle-Ziel konnte nicht aufgelöst werden.';
$string['glossary:upload:sourcenotsupported:body'] = '{$a} ist keine unterstützte Ausgangssprache.';
$string['glossary:upload:sourcenotsupported:title'] = 'DeepL: Quellsprache wird nicht unterstützt';
$string['glossary:upload:success:body'] = '{$a} wurde hochgeladen!';
$string['glossary:upload:success:title'] = 'Hochladen erfolgreich';
$string['glossary:upload:suffixerror:body'] = 'Das Hochladen des Glossars ist fehlgeschlagen, weil: {$a}, bitte überprüfen Sie die Anweisungen.';
$string['glossary:upload:suffixerror:title'] = 'Falsches Suffix';
$string['glossary:upload:targetnotsupported:body'] = '{$a} ist keine unterstützte Zielsprache.';
$string['glossary:upload:targetnotsupported:title'] = 'DeepL: Zielsprache wird nicht unterstützt';
$string['glossary:upload:unknownerror:body'] = 'Das Hochladen des Glossars ist fehlgeschlagen, weil: {$a}, bitte überprüfen Sie die Anweisungen.';
$string['glossary:upload:unknownerror:title'] = 'Falsches Suffix';
$string['glossary:visibility'] = 'Sichtbarkeit';
$string['glossary:visibility:pool'] = 'Team';
$string['glossary:visibility:private'] = 'Privat';
$string['glossary:visibility:public'] = 'Öffentlich';
$string['hideiframes'] = 'Iframes im Quelltext rendern.';
$string['hideiframesadmin'] = 'Wählen Sie diese Option, wenn Sie möchten, dass eingebettete Iframes standardmäßig gerendert werden.';
$string['hideiframesadmin_desc'] = 'Manchmal können Iframes die Benutzeroberfläche überlappen oder die Leistung des Browsers beeinträchtigen.';
$string['ignoretags'] = 'Zu ignorierende Tags';
$string['keepselected'] = 'Ausgewählt lassen';
$string['latexeascape'] = 'LaTeX escapen ($$LaTeXFormulas$$ nicht zum Übersetzen senden)';
$string['latexescapeadmin'] = 'Standardwert für LaTeX escapen
(in the courses translation page "Advanced Settings")';
$string['latexescapeadmin_desc'] = 'Wenn diese Option aktiviert ist, wird im Kursübersetzungsformular die Option "LaTeX-Formeln escapen" aktiviert.
Dadurch wird standardmässig die Nichtübersetzung von LaTeX-Formeln im Kurs aktiviert.
Deaktivieren Sie diese Option hier, wenn Ihre Organisation in den Kursen selten LaTeX-Formeln verwendet, um die Leistung von Deepler Übersetzer leicht zu verbessern.';
$string['missingmainapikey'] = 'Fügen Sie zunächst einen Standard-API-Schlüssel hinzu, um diese Funktion nutzen zu können.';
$string['modeltpreferqualityoptimized'] = 'Qualität bevorzugt';
$string['modeltype'] = 'Modell';
$string['modeltypelatencyoptimized'] = 'Latenzoptimiert';
$string['modeltypequalityoptimized'] = 'qualitätsoptimiert';
$string['module:select:label'] = 'Aktivitäten auswählen';
$string['moduleall'] = 'ALLE AKTIVITÄTEN';
$string['needsupdate'] = 'Aktualisierung erforderlich';
$string['neverrephrased'] = 'Dieser Text wurde nie verbessert.';
$string['nevertranslated'] = 'Noch keine \'{$a}\' Übersetzung';
$string['nodeeplpapi'] = ':-( Es kann keine Verbindung zur DeepL-API hergestellt werden. <br/>Wenden Sie sich an Ihren Administrator. Offenbar liegt ein Netzwerkproblem vor.';
$string['nonsplittingtags'] = 'Nicht trennende Tags';
$string['notsupportedsource'] = 'Die Ausgangssprache, in der Sie sich befinden, wird von DeepL nicht unterstützt.';
$string['onomatopoeia'] = 'Autsch!!!';
$string['othersettingstitle'] = 'Andere Einstellungen';
$string['outlinedetection'] = 'XML-Outline-Erkennung';
$string['pluginname'] = 'Deepl Übersetzer';
$string['pluginversion'] = 'Aktuelle Version';
$string['preescape'] = 'PRE html-Tag escapen';
$string['preescapeadmin'] = 'PRE html-Tag escapen';
$string['preescapeadmin_desc'] = 'Wenn diese Option aktiviertist, werden &lt;pre&gt;...&lt;/pre&gt; Inhalte nicht zur Übersetzung gesendet';
$string['preserveformatting'] = 'Formatierung beibehalten';
$string['privacy:metadata'] = 'Das Deepl Übersetzer Plugin speichert keine personenbezogenen Daten.';
$string['rephraseinfos'] = 'Die Textverbesserung befindet sich in der Beta-Phase und wird derzeit für die folgenden Zielsprachen unterstützt: <strong>{$a}</strong>.';
$string['rephraseoptionsinfos'] = 'Die Optionen für Ton oder Schreibstil werden nur für <strong>de</strong>, <strong>en-GB</strong> und <strong>en-US</strong> unterstützt. Die Verwendung von „default” als Wert verhält sich genauso wie das Nicht-Senden eines Tons oder Schreibstils.';
$string['rephrasetitle'] = '{$a}Einstellungen umformulieren';
$string['saveall'] = 'Alle&nbsp;speichern';
$string['saveallexplain'] = 'Speicherung aller ausgewählten Übersetzungen in der Datenbank.';
$string['saveallmodalbody'] = '<div class="spinner-border text-primary" role="status"><span class="sr-only">Speichert...</span>\\n</div>
<p>Bitte warten ...<br/>Wenn alle Felder in der Datenbank gespeichert sind,<br/>schliesse ich mich automatisch.</p>
<p>Wenn Sie ungeduldig sind und dieses Fenster schließen möchten,
<br/>stellen Sie sicher, dass alle ausgewählten Übersetzungen diesen Status haben <i class="fa fa-database" aria-hidden="true"></i></p>';
$string['saveallmodaltitle'] = 'Saving translations to the database';
$string['scannedfieldsize'] = 'Minimale Textfeldgröße';
$string['scannedfieldsize_desc'] = 'Kleine Textfelder sind in der Datenbank oft in der Grösse begrenzt. Der Textinhalt wächst recht schnell
 (plus die mlang-Tags) bei jedem Übersetzungsschritt.
 Nach der Übersetzung, wenn der Text zu groß ist, wird die Datenbank einen Fehler werfen. Legen Sie die Größe hier auf der Grundlage Ihrer wichtigsten Spracheigenschaften und
 der Anzahl der Sprachen, die Ihr Moodle unterstützt fest.';
$string['section:coursesettings'] = 'Kurseinstellungen';
$string['section:select:label'] = 'Abschnitte auswählen';
$string['sectionall'] = 'ALLE ABSCHNITTE';
$string['seesetting'] = 'Erweiterte Einstellungen';
$string['selectall'] = 'Alle';
$string['selecttargetlanguage'] = 'Zielsprache <em>{mlang {$a}}</em>';
$string['showhiddenforstudents'] = '"{$a}" anzeigen';
$string['sourcelang'] = 'Ausgangssprache <em>{mlang other}</em>';
$string['specialsourcetext'] = 'Eine andere Quelle als "{$a}" benützen';
$string['splitsentences'] = 'Sätze trennen?';
$string['splitsentences0'] = 'überhaupt kein Trennen';
$string['splitsentences1'] = 'Trennung bei Satzzeichen und Zeilenumbrüchen';
$string['splitsentencesnonewlines'] = 'Trennung nur bei Satzzeichen, Zeilenumbrüche ignorieren';
$string['splittingtags'] = 'Trennende Tags';
$string['statusfailed'] = 'Fehlgeschlagen';
$string['statussaved'] = 'Gespeichert';
$string['statussuccess'] = 'Erfolgreich';
$string['statustosave'] = 'Dies speichern';
$string['statustotranslate'] = 'Bereit zur Übersetzung';
$string['statuswait'] = 'Nicht ausgewählt';
$string['taghandling'] = 'Tags behandeln als :';
$string['tagsplaceholder'] = 'Alle Tags auflisten (Tags mit Komma trennen &quot;,&quot;)';
$string['targetcompatibleexplain'] = 'Wählen Sie eine Zielsprache aus, die unter {mlang xx} gespeichert werden soll.';
$string['tokenmanager_desc'] = 'Hier können Sie Ihre DeepL-API-Schlüssel den Benutzerattributen zuordnen, um Übersetzerpools zu erstellen. Dies kann nützlich sein, wenn Sie den Verbrauch für jeden API-Schlüssel messen und kontrollieren möchten.';
$string['toneconfident'] = 'Selbstbewusster Tonfall';
$string['tonediplomatic'] = 'Diplomatischer Ton';
$string['toneenthusiastic'] = 'Begeisterter Tonfall';
$string['tonefriendly'] = 'Freundlicher Ton';
$string['toneorstyle'] = 'Ändert den Ton oder den Schreibstil Ihrer Verbesserungen:';
$string['tour_advancedsettings00'] = 'Klicken Sie hier, um zu sehen, wie Sie das Verhalten von DeepL optimieren können.<br/><br/>Klicken Sie jetzt, um eine Führung durch die Funktionen zu erhalten.';
$string['tour_advancedsettings00title'] = 'Erweiterte Einstellungen von DeepL';
$string['tour_advancedsettings01formality'] = '<p>Legt fest, ob der übersetzte Text eher formell oder informell sein soll.
Diese Funktion ist derzeit nur für die Zielsprachen <em>DE</em> (<strong>Deutsch</strong>), <em>FR</em> (<strong>Französisch</strong>), <em>IT</em>
(<strong>Italienisch</strong>), <em>ES</em> (Spanisch), <em>NL</em> (Niederländisch), <em>PL</em> (Polnisch), <em>PT-BR</em> und <em>PT-PT</em> (Portugiesisch),
<em>JA</em> (Japanisch) und <em>RU</em> (Russisch).
Weitere Informationen zur Funktion "plain\\/polite” für Japanisch finden Sie <a
href="https://support.deepl.com/hc/en-us/articles/6306700061852-About-the-plain-polite-feature-in-Japanese">hier</a>.
Die Einstellung dieses Parameters mit einer Zielsprache, die keine Höflichkeitsform unterstützt, schlägt fehl, es sei denn, eine der&nbsp;
<em>prefer_...</em> Optionen wird verwendet. Mögliche Optionen sind:</p>
<ul><li><em>default</em> (Standard)</li>
<li><em>more</em> – für eine formellere Sprache</li>
<li><em>less</em> – für eine informellere Sprache</li>
<li><em>prefer more</em> – für eine formellere Sprache, falls verfügbar, andernfalls wird die Standardform verwendet</li>
<li><em>prefer less</em> – für eine informellere Sprache, falls verfügbar, andernfalls wird die Standardform verwendet</li></ul>';
$string['tour_advancedsettings01formalitytitle'] = 'Formalisierungsmanagement';
$string['tour_advancedsettings02split'] = '';
$string['tour_advancedsettings02splittitle'] = 'Verwalten Sie, wie Sätze in Zeilen aufgeteilt werden';
$string['tour_advancedsettings03formating'] = '<p>Legt fest, ob die Übersetzungsmaschine die ursprüngliche Formatierung beibehalten soll,
auch wenn sie normalerweise einige Aspekte korrigieren würde. </p>
<p>Diese Einstellung betrifft folgende Formatierungsaspekte:</p>
<ul><li>Zeichensetzung am Anfang und Ende des Satzes</li><li>Groß-/Kleinschreibung am Anfang des Satzes</li></ul>';
$string['tour_advancedsettings03formatingtitle'] = 'Formatierung verwalten';
$string['tour_advancedsettings04glossary'] = '';
$string['tour_advancedsettings04glossarytitle'] = 'Glossary';
$string['tour_advancedsettings05context'] = '<p>Dieser zusätzliche Kontext kann die Übersetzungsqualität bei der Übersetzung kurzer,
kontextarmer Ausgangstexte verbessern. </p><p>Der Parameter <em>context</em> ist eine <strong>Alpha-Funktion</strong>.</p>
<p>Versuchen Sie also, etwas Kontext hinzuzufügen, wenn Sie der Meinung sind, dass die Übersetzungsergebnisse verbessert werden könnten, aber verlassen Sie sich nicht darauf. </p>';
$string['tour_advancedsettings05contexttitle'] = 'Kontextinformationen, die eine Übersetzung beeinflussen können, aber selbst nicht übersetzt werden.';
$string['tour_advancedsettings06tag'] = '<p>Legt fest, welche Art von Tags verarbeitet werden sollen.</p>
<p>Standardmäßig berücksichtigt die Übersetzungs-Engine keine Tags.</p>
<p>Durch Setzen des Parameters <em>Tag-Behandlung</em> auf <em>xml</em> oder <em>html</em>
verarbeitet die API die Markup-Eingabe, indem sie den Text aus der Struktur extrahiert, ihn in einzelne Sätze aufteilt,
diese übersetzt und wieder in die entsprechende Markup-Struktur einfügt.';
$string['tour_advancedsettings06tagtitle'] = 'Handeln Sie jetzt';
$string['tour_advancedsettings07outline'] = '<p>Die automatische Erkennung der XML-Struktur liefert nicht in allen XML-Dateien optimale Ergebnisse.
Sie können diesen automatischen Mechanismus vollständig deaktivieren, indem Sie den Parameter <em>Outline-Erkennung</em> auf <em>deaktiviert</em> setzen
und die Tags auswählen, die als Struktur-Tags berücksichtigt werden sollen. Dadurch werden Sätze anhand des Parameters <em>Trenn-Tags</em> geteilt.';
$string['tour_advancedsettings07outlinetitle'] = 'Wie werden Gliederungen in XML erkannt?';
$string['tour_advancedsettings08skiptag'] = '<p>Durch Kommas getrennte Liste von XML- oder HTML-Tags, die Text kennzeichnen, der nicht übersetzt werden soll. </p>
<p>Um sicherzustellen, dass Elemente im Originaltext bei der Übersetzung nicht verändert werden (z. B. Markenzeichen oder Produktnamen). </p>
<p>Beispiel: Hinzufügen von "x” in der Liste:</p><p>Anfrage:<em> Bitte öffnen Sie die Seite &lt;x&gt;Einstellungen&lt;/x&gt;, um Ihr System zu konfigurieren.</em></p>
<p>Antwort:<em>Bitte öffnen Sie die Seite &lt;x&gt;Einstellungen&lt;/x&gt;, um Ihr System zu konfigurieren.</em></p>
<p>In HTML können Sie auch das Attribut <code><strong>translate="no"</strong></code> verwenden:</p>
<p><code>  &lt;body&gt;</code><br /><code>    &lt;h1&gt;Meine erste Überschrift&lt;/h1&gt;</code><br /><code>    &lt;p
<strong>translate="no"</strong>&gt;Dies wird nicht übersetzt.&lt;/p&gt;</code><br /><code>  &lt;/body&gt;</code></p>
<p></p>';
$string['tour_advancedsettings08skiptagtitle'] = 'Übersetzen Sie den Inhalt bestimmter Tags nicht.';
$string['tour_advancedsettings09splittag'] = '<p>Durch Kommas getrennte Liste von XML- oder HTML-Tags, die niemals Sätze trennen.</p>';
$string['tour_advancedsettings09splittagtitle'] = 'Tags, die nicht zur Trennung von Sätzen berücksichtigt werden sollten.';
$string['tour_advancedsettings101other'] = '<p>Hier teilen Sie dem Plugin mit, dass es die Übersetzung von LaTeX-Zeichenfolgen ($$...$$) und oder PRE HTML-Tags vermeiden soll.</p>';
$string['tour_advancedsettings101othertitle'] = 'LaTeX und/oder PRE-Tag-Escaping aktivieren';
$string['tour_advancedsettings10splittag'] = '<p>Kommagetrennte Liste von XML- oder HTML-Tags, die immer ein Aufteilen verursachen.</p>';
$string['tour_advancedsettings10splittagtitle'] = 'Tags, welche den Text in Sätze aufteilt.';
$string['tour_advancedsettings11sourcelang'] = '<p>Die Ausgangssprache ist die Sprache, in der der Kurs geschrieben wurde.
Am besten ist es, die gleiche Sprache für den gesamten Kurs zu verwenden.</p>';
$string['tour_advancedsettings11sourcelangtitle'] = 'Ausgangssprache';
$string['tour_advancedsettings12targetlang'] = '<p>Die Zielsprache ist die, welche Sie möchten, dass DeepL zurückgibt.</p>
<p>Wenn Sie dieselbe Sprache wie die Quelle auswählen, ist die Übersetzungsschaltfläche natürlich deaktiviert.</p>';
$string['tour_advancedsettings12targetlangtitle'] = 'Zielsprache';
$string['tour_advancedsettings13filters'] = '<p>Diese Filter blenden den Textinhalt des Kurses ein oder aus. </p>
<p><strong>Aktuell:<br /></strong></p>
<p>Dies sind die Inhalte, die bereits übersetzt wurden und an denen keine Änderungen in der Quelle vorgenommen wurden. </p>
<p>Sie werden mit dem Indikator <span class="badge badge-pill badge-success"> </span> angezeigt. </p>
<p><strong>Muss aktualisiert werden:<br /></strong></p>
<p>Dies sind die Textinhalte, die nie übersetzt wurden oder nach der Übersetzung geändert wurden.
<p>Sie werden mit dem Indikator <span class="badge badge-pill badge-danger"> </span> angezeigt, wenn sie nie übersetzt wurden. </p>
<p>Sie werden mit dem Indikator <span class="badge badge-pill badge-warning"> </span>
angezeigt, wenn sie bereits übersetzt wurden, der Quelltext seitdem jedoch geändert wurde.';
$string['tour_advancedsettings13filterstitle'] = 'Übersetzungsstatus-Filter';
$string['tour_advancedsettings14filters'] = '<p>Durch Klicken hier werden alle sichtbaren Inhalte zur Übersetzung ausgewählt.';
$string['tour_advancedsettings14filterstitle'] = 'Alle auswählen';
$string['tour_advancedsettings15filters'] = '';
$string['tour_advancedsettings15filterstitle'] = '';
$string['tour_advancedsettings16sendtodeepl'] = '<p>Clinkg this button will send all selected texts to DeepL and feed it in the editors.</p>
<p>At least one selection is needed to ctivate it.</p>';
$string['tour_advancedsettings16sendtodeepltitle'] = 'Zu DeepL senden';
$string['tour_advancedsettings17statusbullet'] = '';
$string['tour_advancedsettings17statusbullettitle'] = '';
$string['tour_advancedsettings18selection'] = '';
$string['tour_advancedsettings18selectiontitle'] = '';
$string['tour_advancedsettings19editsource'] = '<p><span class="p-1 btn btn-sm btn-outline-info"><i class="fa fa-pencil"> </i>
</span>Mit einem Klick auf den Stift gelangen Sie zum Kurseditor im Moodle-Kurs.</p>
<p>Sollten Sie Überarbeitungen der Quelle haben oder Änderungen vornehmen wollen, so können Sie die Quelle nicht von hier aus ändern.</p>';
$string['tour_advancedsettings19editsourcetitle'] = 'Quelle direkt bearbeiten.';
$string['tour_advancedsettings20togglemultilang'] = '';
$string['tour_advancedsettings20togglemultilangtitle'] = '';
$string['tour_advancedsettings21secondsource'] = 'Sie können eine sekundäre Quelle für bestimmte Inhalte auswählen. <br/>Wenn noch kein "Andere"-Sprachtag vorhanden ist, wird die Quelle in ihrer Sprache und "Andere" gespeichert.';
$string['tour_advancedsettings21secondsourcetitle'] = 'Sekundäre Ausganssprache';
$string['tour_advancedsettings22process'] = '';
$string['tour_advancedsettings22processtitle'] = '';
$string['tour_advancedsettings23saveall'] = '';
$string['tour_advancedsettings23savealltitle'] = 'Alle Übersetzungen in der Datenbank speichern.';
$string['translate:modal:body'] = 'Es kann etwas dauern, wenn Sie viele Inhalte haben.';
$string['translate:modal:title'] = 'DeepL angerufen';
$string['translatebutton'] = 'Übersetzen &rarr; {$a}';
$string['translateexplain'] = 'Alle markierten Zeilen in {$a} übersetzen';
$string['translationdisabled'] = 'Die Übersetzung ist deaktiviert, da dies als Link in der Datenbank verwendet wird.';
$string['uptodate'] = 'Aktuell';
$string['viewsource'] = 'Mehrsprachigen Inhalt überprüfen';
$string['viewsourcedisabled'] = 'Noch kein mehrsprachiger Inhalt.';
$string['warningsource'] = 'Achtung! Die aktuelle Quellsprache &quot;{$a}&quot; ist neben dem Fallback-Tag „Andere“ bereits ein mehrsprachiges Tag. Beachten Sie, dass beide als „Andere“ Multilang-Tag zusammengeführt werden.';
$string['wordcountsentence'] = 'Total <span id="local_deepler__wc">0</span> Worte, <span id="local_deepler__wosc">0</span> Zeichen (<span id="local_deepler__wsc">0</span> Zeichen inklusive Leerzeichen) Verwendung von DeepL = <span id="local_deepler__used">0</span>/<span id="local_deepler__max">0</span>';
$string['writingstyleacademic'] = 'Akademischer Schreibstil';
$string['writingstylebusiness'] = 'Geschäftlicher Schreibstil';
$string['writingstylecasual'] = 'Lässiger Schreibstil';
$string['writingstylesimple'] = 'Einfacher Schreibstil';
