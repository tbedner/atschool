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
 * Strings for component 'qtype_aitext', language 'de', version '4.4'.
 *
 * @package     qtype_aitext
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptedfiletypes'] = 'Akzeptierte Dateitypen';
$string['addsample'] = 'Beispielantwort hinzufügen';
$string['aiprompt'] = 'KI-Prompt';
$string['aiprompt_help'] = 'Eine Eingabeaufforderung für die KI, auf deren Basis das Feedback generiert werden soll.';
$string['aipromptmissing'] = 'Die Feedbackanweisungen an die KI fehlen. Bitte geben Sie einen Prompt ein, auf dessen Grundlage das Feedback generiert werden soll.';
$string['answerfiles'] = 'Antwortdateien';
$string['answertext'] = 'Antworttext';
$string['attachmentsoptional'] = 'Anhänge sind optional';
$string['automatic_spellcheck'] = 'Automatische Rechtschreibprüfung';
$string['backends'] = 'KI-Backend-Systeme';
$string['backends_text'] = 'Das Core-KI-Subsystem wurde mit Moodle 4.5 eingeführt, der KI-Manager ist von https://github.com/bycs-lp/moodle-local_ai_manager und das Tool-KI-System von https://github.com/marcusgreen/moodle-tool_aiconnect';
$string['cachedef_stringdata'] = 'Cachedef stringdata';
$string['coreaisubsystem'] = 'Core-KI-Subsystem';
$string['defaultmarksscheme'] = 'Bepunktungsschema';
$string['defaultmarksscheme_setting'] = 'Dies wird das Standard-Bepunktungsschema für neue Fragen sein. Fragenautor/innen sollten dieses Schema an die jeweilige Frage anpassen.';
$string['defaultprompt'] = 'KI-Prompt';
$string['defaultprompt_setting'] = 'Dies ist die Standard-KI-Eingabeaufforderung für neue Fragen. Sie sagt der KI, wie die Teilnehmerantwort analysiert werden soll. Es ist der Leitfaden, den die KI verwendet, um eine Rückmeldung über die Antwort zu geben. Fragenautoren/innen sollten dies an die jeweilige Frage anpassen.';
$string['deletesample'] = 'Beispiel löschen';
$string['disclaimer'] = 'Haftungsausschluss';
$string['disclaimer_setting'] = 'Text, der an jede Antwort angehängt wird und angibt, dass das Feedback von einem großen Sprachmodell und nicht von einem Menschen stammt';
$string['err_invalidbackend'] = 'Ungültiges Backend';
$string['err_maxminmismatch'] = 'Das maximale Wortlimit muss größer sein als das minimale Wortlimit.';
$string['err_maxwordlimit'] = 'Maximales Wortlimit ist aktiviert, aber nicht gesetzt';
$string['err_maxwordlimitnegative'] = 'Maximales Wortlimit kann keine negative Zahl sein';
$string['err_minwordlimit'] = 'Minimales Wortlimit ist aktiviert aber nicht gesetzt';
$string['err_minwordlimitnegative'] = 'Minimales Wortlimit kann keine negative Zahl sein';
$string['err_parammissing'] = 'Ungültige Parameter. Stellen Sie sicher, dass Sie eine Beispielantwort und einen Prompt eingegeben haben.';
$string['err_retrievingfeedback'] = 'Fehler beim Abrufen des Feedbacks vom KI-Tool: {$a}';
$string['err_retrievingtranslation'] = 'Fehler beim Abrufen der Übersetzung: {$a}';
$string['expertmode'] = 'Expertenmodus';
$string['expertmode_setting'] = 'Expertenmodus. Die Eingabeaufforderung muss [[expert]] und [[response]] enthalten.';
$string['formateditor'] = 'HTML-Editor';
$string['formateditorfilepicker'] = 'HTML-Editor mit Dateiauswahl';
$string['formatmonospaced'] = 'Einfacher Text, Schriftart monospaced';
$string['formatnoinline'] = 'Kein Online-Text';
$string['formatplain'] = 'Einfacher Text';
$string['get_llmmfeedback'] = 'LLM-Feedback abrufen';
$string['graderinfo'] = 'Informationen für Beurteiler/in';
$string['graderinfoheader'] = 'Informationen für Beurteiler/in';
$string['jsonprompt'] = 'JSON-Prompt';
$string['jsonprompt_setting'] = 'Anweisungen, die gesendet werden, um den zurückgegebenen Wert in JSON zu konvertieren';
$string['localaimanager'] = 'KI-Manager';
$string['markprompt_required'] = 'Bepunktungsanweisung erforderlich';
$string['markprompt_required_setting'] = 'Falls aktiviert, ist beim Erstellen einer Frage eine Bepunktungsanweisung ein Pflichtfeld und zeigt einen Fehler an, wenn es leer gelassen wird';
$string['markscheme'] = 'Bepunktungsschema';
$string['markscheme_help'] = 'Damit wird der KI mitgeteilt, wie sie die Antwort mit einer numerischen Punkteanzahl bewerten soll. Die mögliche Gesamtpunktzahl ist die \'Standardnote\' dieser Frage';
$string['markschememissing'] = 'Das Bepunktungsschema fehlt. Bitte beschreiben Sie genau, wofür es Punkte geben soll und ggf. wofür nicht.';
$string['maxwordlimit'] = 'Maximales Wortlimit';
$string['maxwordlimit_help'] = 'Wenn die Antwort die Eingabe von Text erfordert, ist dies die maximale Anzahl von Wörtern, die jede/r Teilnehmer/in eingeben darf.';
$string['maxwordlimitboundary'] = 'Das Wortlimit für diese Frage beträgt {$a->limit} Wörter und Sie versuchen, {$a->count} Wörter abzugeben. Bitte kürzen Sie Ihre Antwort und versuchen Sie es erneut.';
$string['minwordlimit'] = 'Minimales Wortlimit';
$string['minwordlimit_help'] = 'Wenn die Antwort die Eingabe von Text erfordert, ist dies die minimale Anzahl von Wörtern, die jede/r Teilnehmer/in eingeben muss.';
$string['minwordlimitboundary'] = 'Diese Frage erfordert eine Antwort von mindestens {$a->limit} Wörtern, und Sie versuchen, {$a->count} Wörter zu übermitteln. Bitte erweitern Sie Ihre Antwort und versuchen Sie es erneut.';
$string['model'] = 'Sprachmodell';
$string['nlines'] = '{$a} Zeilen';
$string['pluginname'] = 'Freitext (KI-Feedback)';
$string['pluginname_help'] = 'Als Antwort auf eine Frage wird ein Text eingegeben. Es kann eine Antwortvorlage bereitgestellt werden. Die Antworten werden von einem KI-System (z.B. ChatGPT) vorbewertet und können dann manuell bewertet werden.';
$string['pluginname_link'] = 'Frage/Typ/Freitext (KI-Feedback)';
$string['pluginname_userfaced'] = 'Fragetyp "Freitext (KI-Feedback)" mit KI-unterstützter Feedback-Generierung';
$string['pluginnameadding'] = 'Hinzufügen einer Freitext (KI-Feedback) - Frage';
$string['pluginnameediting'] = 'Bearbeiten einer Freitext (KI-Feedback) - Frage';
$string['pluginnamesummary'] = 'Dies ermöglicht eine Antwort per Datei-Upload und/oder Online-Text. Die Antwort wird durch eine KI verarbeitet, die ein Feedback und optional die Bepunktung zurückgibt.';
$string['privacy::responsefieldlines'] = 'Anzahl der Zeilen, die die Größe des Eingabefeldes (Textarea) angibt.';
$string['privacy:metadata'] = 'Das Freitext (KI-Feedback)-Fragetyp-Plugin ermöglicht es Fragenautoren, Standardoptionen als Benutzerpräferenzen festzulegen.';
$string['privacy:preference:attachments'] = 'Anzahl der erlaubten Anhänge.';
$string['privacy:preference:attachmentsrequired'] = 'Anzahl der erforderlichen Anhänge.';
$string['privacy:preference:defaultmark'] = 'Die Standardmarkierung, die für eine bestimmte Frage gesetzt wurde.';
$string['privacy:preference:disclaimer'] = 'Text, der angibt, dass das Feedback und/oder die Bewertung von einem LLM stammt';
$string['privacy:preference:maxbytes'] = 'Maximale Dateigröße.';
$string['privacy:preference:responseformat'] = 'Was ist das Antwortformat (HTML-Editor, einfacher Text, etc.)?';
$string['prompt'] = 'Prompt';
$string['prompt_setting'] = 'Der Text für die Eingabeaufforderung, die für das KI-System festgelegt wurde, [responsetext] ist das, was der/die Teilnehmer/in als Antwort eingegeben hat. Der KI-Prompt aus der Frage wird an diesen Text angehängt.';
$string['purposeplacedescription_feedback'] = 'Generierung von Feedback-Vorschlägen beim Absenden eines Quiz-Versuchs oder beim erneuten Bepunkten';
$string['purposeplacedescription_translate'] = 'Übersetzung des Haftungsausschlusses und KI-generierten Feedbacks in die Zielsprache der Person.';
$string['response'] = 'Antwort';
$string['responsefieldlines'] = 'Größe des Eingabefeldes';
$string['responseformat'] = 'Antwortformat';
$string['responseformat_setting'] = 'Der Editor, den der/die Teilnehmer/in bei der Beantwortung verwendet';
$string['responseisrequired'] = 'Teilnehmer/in zur Texteingabe auffordern';
$string['responsenotrequired'] = 'Die Texteingabe ist optional';
$string['responseoptions'] = 'Antwortmöglichkeiten';
$string['responsetemplate'] = 'Antwortvorlage';
$string['responsetemplate_help'] = 'Jeder Text, der hier eingegeben wird, wird im Antwort-Eingabefeld angezeigt, wenn ein neuer Versuch für die Frage gestartet wird.';
$string['responsetemplateheader'] = 'Antwortvorlage';
$string['responsetester'] = 'Antwort-Tester';
$string['responsetesthelp'] = 'Hilfe für Antworttest';
$string['responsetesthelp_help'] = 'Beim Speichern des Formulars wird nur die Testantwort gespeichert, nicht der vom LLM zurückgegebene Wert';
$string['responsetests'] = 'Ausgabe von mehreren Antworten testen';
$string['sampleresponse'] = 'Beispielantwort';
$string['sampleresponse_help'] = 'Die Beispielantwort kann verwendet werden, um zu testen, wie die KI auf eine bestimmte Antwort reagieren wird.';
$string['sampleresponseempty'] = 'Vergewissern Sie sich, dass Sie eine KI-Feedbackanweisung und eine Beispielantwort haben, bevor Sie den Test durchführen.';
$string['sampleresponseeval'] = 'Bewertung der Beispielantwort';
$string['sampleresponseevaluate'] = 'Beispielantwort auswerten';
$string['showprompt'] = 'Feedbackanweisung anzeigen';
$string['spellcheck_editor_desc'] = 'Dies ist der Text, in dem die Rechtschreibfehler von der KI korrigiert wurden. Sie können diesen Korrekturvorschlag bearbeiten.';
$string['spellcheck_prompt'] = 'Gib den Text ohne strukturelle Änderung 1:1 wieder. Verzichte auf ein Feedback. Aber korrigiere alle Rechtschreibfehler im nachfolgenden Text:';
$string['spellcheck_student_anser_desc'] = 'Dies ist die ursprüngliche Antwort der Person';
$string['spellcheckedit'] = 'Rechtschreibprüfung bearbeiten';
$string['spellcheckeditor'] = 'Rechtschreibprüfung der KI bearbeiten';
$string['testresponses'] = 'Testantworten';
$string['thedefaultmarksscheme'] = 'Ziehe für jeden Grammatik- oder Rechtschreibfehler einen Punkt von der Gesamtpunktzahl ab.';
$string['thedefaultprompt'] = 'Erkläre, ob etwas mit der Grammatik und der Rechtschreibung im Text nicht stimmt.';
$string['toolaimanager'] = 'Tool KI-Manager';
$string['translatepostfix'] = 'Postfix übersetzen';
$string['translatepostfix_text'] = 'Am Ende der Feedbackanweisung wird &quot;übersetze das Feedback in die Sprache .current_language()&quot; angehängt';
$string['use_local_ai_manager'] = 'KI-Backend verwenden, das vom Plugin "Lokaler KI-Manager bereitgestellt wird';
$string['use_local_ai_manager_setting'] = 'Das Plugin "Lokaler KI-Manager" verwenden, um KI-bezogene Anfragen zu verarbeiten (muss installiert sein)';
$string['wordcount'] = 'Wortanzahl: {$a}';
$string['wordcounttoofew'] = 'Wortanzahl: {$a->count}, weniger als die erforderlichen {$a->limit} Wörter.';
$string['wordcounttoomuch'] = 'Wortanzahl: {$a->count}, mehr als das Limit von {$a->limit} Wörtern.';
