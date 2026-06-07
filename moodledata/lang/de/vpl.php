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
 * Strings for component 'vpl', language 'de', version '4.4'.
 *
 * @package     vpl
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['VPL_COMPILATIONFAILED'] = 'Die Vorbereitung zur Ausführung ist fehlgeschlagen.';
$string['about'] = 'Über';
$string['acceptcertificates'] = 'Selbstsignierte Zertifikate akzeptieren';
$string['acceptcertificates_description'] = 'Wenn die ausführenden Server keine selbstsignierten Zertifikate verwenden, deaktivieren Sie diese Option.';
$string['addfile'] = 'Datei hinzufügen';
$string['addoverride'] = 'Eine Überschreibung hinzufügen';
$string['advanced'] = 'Erweitert';
$string['allfiles'] = 'Alle Dateien';
$string['allsubmissions'] = 'Alle Abgaben';
$string['always_use_ws'] = 'Immer unverschlüsseltes Websocket (ws) Protokoll verwenden';
$string['always_use_wss'] = 'Immer verschlüsseltes Websocket Protokoll (wss) verwenden';
$string['anyfile'] = 'Beliebige Datei';
$string['archive'] = 'ZIP-Archiv';
$string['archivereplace'] = 'Nur Dateien im Archiv ersetzen';
$string['archivereplacedelete'] = 'Alle Dateien ersetzen und Dateien löschen, die sich nicht im Archiv befinden';
$string['attemptnumber'] = 'Versuch Nr. {$a}';
$string['autodetect'] = 'Automatische Erkennung';
$string['automaticevaluation'] = 'Automatische Evaluierung';
$string['automaticgrading'] = 'Automatische Bewertung';
$string['automaticgrading_help'] = 'Ja: die vorgeschlagene automatische Bewertung wird als Bewertung für diese Aktivität herangezogen<br>
Nein: Von dieser Aktivität wird keine automatische Bewertung vergeben; Trainer/innen müssen die vorgeschlagene Bewertung überprüfen und diese manuell eintragen.';
$string['averageperiods'] = 'Durchschnittliche Überarbeitungen {$a}';
$string['averagetime'] = 'Durchschnittszeit {$a}';
$string['basedon'] = 'Basiert auf';
$string['basedon_chain_broken'] = 'Fehler: die Verknüpfung von Aktivitäten, auf die diese Aktivität basiert ist fehlerhaft. Bitte überprüfen Sie die die Aktivitäten, auf denen diese Aktivität basiert.';
$string['basedon_deleted'] = 'Fehler: die Aktivität, auf der diese Aktivität basiert fehlt (wurde gelöscht?). Bitte setzen sie die Basis-Aktivität.';
$string['basedon_help'] = 'Diese Einstellung beschreibt die Vererbung von Ausführungs-Scripts<br>
Ausführungs-Scripts werden zusammengefügt, zuerst das übergeordnete Script (die Basis), dann das untergeordnete Script (dieses VPL). Es können mehrere übergeordnete Scripts zusammengefügt werden.';
$string['basedon_missed'] = 'Die Basis-Aktivität wurde beim Wiederherstellen / Import verloren. Bitte schließen Sie "{$a}" ein.';
$string['basic'] = 'Einfach';
$string['binaryfile'] = 'Binärdatei';
$string['breakpoint'] = 'Breakpoint';
$string['browserupdate'] = 'Bitte aktualisieren Sie Ihren Browser auf die letzte Version<br /> oder verwenden Sie einen anderen Browser, der Websockets unterstützt.';
$string['calculate'] = 'Berechnen';
$string['calculate_help'] = 'Bewertung aus Abzügen in Kommentaren ermitteln.<br>
Syntax für Abzüge: <pre>-&nbsp;Text&nbsp;(-Punkte)</pre> (eine Zeile pro Abzug).';
$string['calendardue'] = 'VPL Abgabe ist fällig';
$string['calendarexpectedon'] = 'VPL Abgabe erwartet';
$string['changesNotSaved'] = 'Änderungen wurden nicht gespeichert';
$string['check_jail_servers'] = 'Jail-Server überprüfen';
$string['check_jail_servers_help'] = '<p>Diese Seite überprüft und zeigt den Status der ausführenden Server,
        die für diese Aktivität verwendet werden.</p>';
$string['checkforcourse'] = 'Überprüfung für Kurs {$a}';
$string['checkgroups'] = 'Konsistenz der Gruppen überprüfen';
$string['checksitewide'] = 'Überprüfung über die gesamte Seite';
$string['clicktoshow'] = 'Zum Anzeigen klicken';
$string['clipboard'] = 'Zwischenspeicher';
$string['closed'] = 'Beendet';
$string['comments'] = 'Kommentare';
$string['compilation'] = 'Kompilierung';
$string['concatenatedscripts'] = 'Ausführungs-Scripts zusammenfügen';
$string['concatenatedscripts_help'] = 'Diese Seite zeigt den Inhalt von Ausführungs-Scripts. Wenn dieses VPL auf einem anderen basiert, werden die Scripts zusammengefügt. Wenn ein Script leer ist, wird das Default-Script verwendet.';
$string['confirmoverridedeletion'] = 'Möchten sie dieses Überschreiben-Set wirklich löschen?';
$string['connected'] = 'Verbunden';
$string['connecting'] = 'Verbinde';
$string['connection_closed'] = 'Verbindung geschlossen';
$string['connection_fail'] = 'Verbindungsfehler';
$string['console'] = 'Konsole';
$string['control'] = 'Steuerung';
$string['copy'] = 'Kopieren';
$string['copy_help'] = 'Diese Abgabe in einen eigenen Editor kopieren (öffnet ein neues Fenster)';
$string['copytoclipboard'] = 'In die Zwischenablage kopieren';
$string['copytoclipboarderror'] = 'In die Zwischenablage kopieren ist fehlgeschlagen';
$string['copytoclipboardsuccess'] = 'Kopiert';
$string['create_new_file'] = 'Neue Datei erstellen';
$string['crontask'] = 'VPL Hintergrundprozesse';
$string['crontask_check_vpljs'] = 'VPL Jail Server melden';
$string['currentstatus'] = 'Aktueller Status';
$string['customizedscript'] = 'Nutzerdefiniertes Skript';
$string['cut'] = 'Ausschneiden';
$string['datesubmitted'] = 'Abgabedatum';
$string['debug'] = 'Debuggen';
$string['debug_help'] = 'Erlaubt Teilnehmer/innen, den jeweiligen Code im Editor zu debuggen. Trainer/innen können immer jede Einreichung debuggen.';
$string['debugging'] = 'Debuggt';
$string['debugscript'] = 'Debug Script';
$string['debugscript_help'] = 'Wählen Sie das Debug Skript, das in dieser Aktivität verwendet werden soll.<br>
Nutzerdefiniert bedeutet, dass ein nutzerdefiniertes Skript als Debug Skript verwendet wird.';
$string['defaultevaluatescript'] = 'Default Auswertungs-Script';
$string['defaultexefilesize'] = 'Standard maximale Größe der Ausführungsdatei';
$string['defaultexememory'] = 'Standard maximaler Speicherbedarf';
$string['defaultexeprocesses'] = 'Standard maximale Anzahl an Prozessen';
$string['defaultexetime'] = 'Standard maximale Ausführungszeit';
$string['defaultfilesize'] = 'Standard maximale Upload Dateigröße';
$string['defaultresourcelimits'] = 'Standard maximaler Ressourcenverbrauch bei Ausführung';
$string['defaultscriptforlang'] = 'Default Script für Sprache {$a->pln} ({$a->origin})';
$string['defaultvalue'] = 'Default ({$a})';
$string['delete'] = 'Löschen';
$string['delete_file_fq'] = 'Datei \'{\\$a}\' löschen?';
$string['delete_file_q'] = 'Datei wirklich löschen?';
$string['deleteallsubmissions'] = 'Alle Abgaben löschen';
$string['deletefile'] = 'Datei löschen';
$string['depends_on_https'] = 'Verwenden Sie ws oder wss abhängig ob Sie http oder https verwenden';
$string['description'] = 'Beschreibung';
$string['determinedfromrequiredfiles'] = 'von benötigten Dateien bestimmt';
$string['diff'] = 'diff';
$string['directory_not_renamed'] = 'Ordner \'{$a}\' wurde nicht umbenannt';
$string['disabled'] = 'Deaktiviert';
$string['discard_submission_period'] = 'Abgabenspeicherungsperiode';
$string['discard_submission_period_description'] = 'Pro Person und Aufgabe behält das System die letzte Abgabe sowie zumindest eine für jede Periode.';
$string['dograde'] = 'Bewertung speichern';
$string['donotshowagain'] = 'Diese Nachrichten für die aktuelle Seite deaktivieren';
$string['download'] = 'Herunterladen';
$string['downloadallsubmissions'] = 'Alle Abgaben herunterladen';
$string['downloadsubmissions'] = 'Abgaben herunterladen';
$string['duedate'] = 'Abgabetermin';
$string['dueevent'] = '{$a} Abgabe ist fällig';
$string['dueeventaction'] = 'Entwickeln/abgeben';
$string['edit'] = 'Bearbeiten';
$string['editing'] = 'Bearbeiten';
$string['editortheme'] = 'Editor Theme';
$string['error:inconsistency'] = 'Inkonsistenz gefunden: \'{\\$a}\'';
$string['error:invalidevaluator'] = 'Ungültiges VPL-Auswertungs-Plugin ({$a}): deaktiviert oder fehlt';
$string['error:recordnotdeleted'] = 'Eintrag \'{\\$a}\' nicht gespeichert';
$string['error:recordnotinserted'] = 'Eintrag \'{\\$a}\' nicht eingefügt';
$string['error:recordnotupdated'] = 'Eintrag \'{\\$a}\' nicht aktualisiert';
$string['error:recursivedefinition'] = 'Rekursiv basierend auf der VPL Definition';
$string['error:uninstalling'] = 'Fehler bei der Deinstallation von VPL. Es wurden möglicherweise nicht alle Daten gelöscht.';
$string['error:zipnotfound'] = 'ZIP Datei nicht gefunden';
$string['evaluate'] = 'Evaluieren';
$string['evaluate_help'] = 'Erlaubt Teilnehmer/innen, die eigene Einreichung automatisch auszuwerten. Trainer/innen können immer jede Einreichung auswerten.';
$string['evaluateonsubmission'] = 'Bei Abgabe auswerten';
$string['evaluateonsubmission_help'] = 'Wenn auf "Ja" gesetzt, wird durch die Einreichung von Dateien über den Tab "Einreichungen" eine Auswertung gestartet. Dies betrifft keine Einreichungen über den Tab "Bearbeiten".';
$string['evaluating'] = 'Evaluiert';
$string['evaluation'] = 'Evaluierung';
$string['evaluation_mode'] = 'Auswertungsmodus';
$string['evaluation_mode:default'] = 'Im Terminal auswerten (Default)';
$string['evaluation_mode:textingui'] = 'In GUI auswerten';
$string['evaluation_mode_help'] = 'Auswertungsmodus für diese Aktivität.<br>
<b>Default</b>: Im Terminal auswerten (standardverhalten)<br>
<b>Text in GUI</b>In GUI auswerten<br>
<b>Hinweis<b>: Benutzerdefinierte Scripts können diese Einstellung ignorieren<br>';
$string['evaluator'] = 'Auswertungs-Framework';
$string['evaluator_help'] = 'Wählen Sie das Auswertungs-Framework für diese Aktivität.<br>Verwenden Sie Standard für BIOTES Auswertung.<br>Verwenden Sie GIOTES für das neue Auswertungs-Framework, das mit dem Standard-Framework kompatibel ist.<br>Nutzerdefiniertes Skript bedeutet, dass das Standard-Skript angepasst wurde.<br>';
$string['examples'] = 'Beispiele';
$string['execution'] = 'Ausführung';
$string['executionfiles'] = 'Ausführungsdateien';
$string['executionfiles_help'] = '<p>Hier definieren Sie die Dateien, die für die Ausführung, das Debugging oder die Bewertung einer Abgabe erforderlich sind. Dies beinhaltet Skripts, Test-Dateien und Dateien mit Daten.</p>
<p>Wenn kein Skript zum Ausführen oder Debuggen von Abgaben angegeben wird, verwendet das System automatisch ein Standardskript für die verwendete Sprache (abhängig von der angegebenen Dateiendung).';
$string['executionoptions'] = 'Ausführungsoptionen';
$string['executionoptions_help'] = '<p>Auf dieser Seite können verschiedene Ausführungsoptionen konfiguriert werden.</p>
<ul>
<li><b>Basiert auf</b>: wählt eine andere VPL Instanz, von der einige Eigenschaften importiert werden:
<ul><li>Ausführungsdateien (Vordefinierte Skript-Dateien werden zusammengefügt)</li>
<li>Grenzen für die Ausführungsressourcen.</li>
<li>Variationen, die zusammengefügt werden, um Multivariationen zu erzeugen.</li>
<li>Maximale Größe jeder Datei, die mit der Einreichung hochgeladen wurde.</li>
</ul>
</li>
<li><b>Ausführen</b>, <b>Debuggen</b> and <b>Auswerten</b>: Muss auf &quot;Ja&quot; gesetzt werden, wenn die jeweilige Aktion beim Bearbeiten der Einreichung auswählbar sein soll. Diese Einstellung betrifft nur Teilnehmer/innen, da Nutzer/innen mit der Bewertungs-Berechtigung diese Aktionen immer ausführen können.</li>
<li><b>Nur bei Einreichung auswerten</b>: Die Einreichung wird automatisch ausgewertet, sobald sie hochgeladen wird.</li>
<li><b>Automatische Bewertung</b>: Wenn das Auswertungsergebnis Bewertungen enthält, werden diese automatisch als Bewertung für die Abgabe verwendet.</li>
</ul>';
$string['file'] = 'Datei';
$string['fileNotChanged'] = 'Datei ist unverändert';
$string['file_name'] = 'Dateiname';
$string['fileadded'] = 'Die Datei \'{\\$a}\' wurde hinzugefügt';
$string['filedeleted'] = 'Die Datei \'{\\$a}\' wurde gelöscht';
$string['filelist'] = 'Dateiliste';
$string['filenotadded'] = 'Datei wurde nicht hinzugefügt';
$string['filenotdeleted'] = 'Die Datei \'{$a}\' wurde NICHT gelöscht';
$string['filenotrenamed'] = 'Die Datei \'{$a}\' wurde NICHT umbenannt';
$string['filerenamed'] = 'Die Datei \'{\\$a->from}\' wurde auf \'{\\$a->to}\' umbenannt';
$string['filesChangedNotSaved'] = 'Dateien sind verändert, aber sie wurden nicht gespeichert';
$string['filesNotChanged'] = 'Dateien sind unverändert';
$string['filestoscan'] = 'Zu prüfende Dateien';
$string['fileupdated'] = 'Die Datei \'{\\$a}\' wurde aktualisiert';
$string['finalreduction'] = 'Finale Abzüge';
$string['finalreduction_help'] = '<b>FA [NE/AE A]</b><br>
<b>FA</b> Finale Bewertungsabzüge<br>
<b>AE</b> Automatische Evaluierung beantragt durch Teilnehmer/in<br>
<b>EE</b> Erlaubte Evaluierungen ohne Abzüge<br>
<b>A</b> Bewertungsabzüge pro Evaluierung. Wenn ein Prozentsatz angegeben ist, wird dieser über vorhergegangene Ergebnisse angewendet.<br>';
$string['find'] = 'Finden';
$string['find_replace'] = 'Suchen/Ersetzen';
$string['freeevaluations'] = 'Freie Evaluierungen';
$string['freeevaluations_help'] = 'Anzahl der automatischen Evaluierungen, die nicht zu einer Reduzierung der Abschlussnote beitragen';
$string['fromthisvpl'] = 'Von diesem VPL ({$a})';
$string['fromvpl'] = 'Von VPL {$a}';
$string['fulldescription'] = 'Beschreibung';
$string['fulldescription_help'] = '<p>Hier wird die komplette Beschreibung für diese Aktivität eingetragen.</p>
<p>Wenn hier nichts angegeben wird, wird stattdessen die Kurzbeschreibung angezeigt.</p>
<p>Wenn automatisch evaluiert werden soll, müssen die Interfacebeschreibungen für die Aufgabenstellungen detailliert und eindeutig sein.</p>';
$string['fullscreen'] = 'Vollbildmodus';
$string['functions'] = 'Funktionen';
$string['generatedshebang'] = 'Generiert, da keine Shell spezifiziert wurde';
$string['getjails'] = 'Ausführende Server anzeigen';
$string['gradeandnext'] = 'Speichern und weiter';
$string['graded'] = 'Bewertet';
$string['gradedbyuser'] = 'Bewertet durch Benutzer';
$string['gradedon'] = 'Bewertet am';
$string['gradedonby'] = 'Bewertet am {$a->date} von {$a->gradername}';
$string['gradeitem:submissions'] = 'Abgaben';
$string['gradenotremoved'] = 'Die Bewertung wurde NICHT gelöscht. Überprüfen Sie die Aktivitätskonfiguration in der Bewertungsverwaltung.';
$string['gradenotsaved'] = 'Die Bewertung wurde NICHT gespeichert. Überprüfen Sie die Aktivitätskonfiguration in der Bewertungsverwaltung.';
$string['gradeoptions'] = 'Benotungseinstellungen';
$string['grader'] = 'Bewerter';
$string['gradercomments'] = 'Kommentare zur Bewertung';
$string['graderemoved'] = 'Die Bewertung wurde gelöscht';
$string['gradesaved'] = 'Bewertung gespeichert';
$string['gradesaved_redirect'] = 'Bewertung gespeichert. Diese Seite sollte automatisch weiterleiten.';
$string['groupwork'] = 'Gruppenarbeit';
$string['importfromlastgradedsub'] = 'Von der zuletzt bewerteten Abgabe importieren';
$string['importfromlastmgradedsub'] = 'Von der zuletzt manuell bewerteten Abgabe importieren';
$string['importgrade'] = 'Bewertungen und Kommentare importieren';
$string['importgrade_help'] = 'Bewertungen, Kommentare und (wenn anwendbar) erweiterte Bewertungseinstellungen von einer früheren bewerteten Einreichung importieren.<br>
Diese Aktion füllt das Formular nur aus, es werden keine Daten übertragen.';
$string['inconsistentgroup'] = 'Sie sind nicht Mitglied nur einer Gruppe (0 oder >1)';
$string['incorrect_directory_name'] = 'Ungültiger Ordner-Name';
$string['incorrect_file_name'] = 'Falscher Dateiname';
$string['indicator:cognitivedepth'] = 'VPL Kognition';
$string['indicator:cognitivedepth_help'] = 'Dieser Indikator basiert auf der kognitiven Tiefe, die von Teilnehmer/innen einer VPL Aktivität erreicht wird.';
$string['indicator:socialbreadth'] = 'VPL Sozial';
$string['indicator:socialbreadth_help'] = 'Dieser Indikator basiert auf der sozialen Breite, die von Teilnehmer/innen einer VPL Aktivität erreicht wird.';
$string['individualwork'] = 'Einzelarbeit';
$string['inheritancechain'] = 'Vererbungskette:';
$string['inheritvalue'] = '({$a}) erben';
$string['inputoutput'] = 'Input/Output';
$string['instanceselection'] = 'VPL Auswahl';
$string['intermediate'] = 'Mittelstufe';
$string['isexample'] = 'Dies ist eine Beispielaktivität';
$string['jail_servers'] = 'Jail-Server Liste';
$string['jail_servers_config'] = 'Jail-Server Konfiguration';
$string['jail_servers_description'] = 'Jeder Server in eine eigene Zeile';
$string['joinedfiles'] = 'Zusammengefügte ausgewählte Dateien';
$string['keepcurrentfile'] = 'Aktuelle Datei behalten';
$string['keepfiles'] = 'Dateien, die beim Ausführen behalten werden';
$string['keepfiles_help'] = '<p>Aufgrund von Sicherheitsrisiken werden Dateien, die als &quot;Ausführungsdateien&quot; hinzugefügt wurden,
gelöscht bevor das Skript vpl_execution ausgeführt wird.</p>
Falls einige dieser Dateien während der Ausführung benötigt werden (zum Beispiel als Testdaten) müssen sie hier markiert werden.';
$string['keyboard'] = 'Tastatur';
$string['lasterror'] = 'Letzte Fehlerbeschreibung';
$string['lasterrordate'] = 'Letzter Fehlerzeitpunkt';
$string['listofcomments'] = 'Kommentarliste';
$string['lists'] = 'Listen';
$string['listsimilarity'] = 'Liste der gefundenen Ähnlichkeiten';
$string['listwatermarks'] = 'Wasserzeichen-Liste';
$string['load'] = 'Laden';
$string['loading'] = 'Lädt...';
$string['local_jail_servers'] = 'Lokale Jail-Server';
$string['local_jail_servers_help'] = '<p>Hier können die lokalen ausführenden Server für diese Aktivität und jene die auf dierser Aktivität basieren, definiert werden.</p>
<p>Jede Zeile beinhaltet die komplette URL eines Servers. Leere Zeilen und Kommentare die mit &quot;#&quot; starten können verwendet werden.</p>
<p>Diese Aktivität wird als Ausführende Server Liste verwenden: die Server, die hier gesetzt werden plus die Server der Aktivität auf der diese Aktivität
basiert plus die allgemeinen ausführenden Server. Wenn diese Aktivität und jene, die auf dieser Aktivität basieren, keine anderen ausführenden Server benutzen sollen, kann man am Ende die Zeile &quot;end_of_jails&quot; anfügen.</p>';
$string['manualgrading'] = 'Manuelle Bewertung';
$string['math'] = 'Mathematik';
$string['maxexefilesize'] = 'Maximale Größe der Ausführungsdatei';
$string['maxexememory'] = 'Maximaler Speicherbedarf';
$string['maxexeprocesses'] = 'Maximale Anzahl an Prozessen';
$string['maxexetime'] = 'Maximale Ausführungszeit';
$string['maxfiles'] = 'Maximale Anzahl an Dateien';
$string['maxfilesexceeded'] = 'Maximale Anzahl an Dateien überschritten';
$string['maxfilesize'] = 'Maximale Upload Dateigröße';
$string['maxfilesizeexceeded'] = 'Maximale Dateigröße überschritten';
$string['maximumperiod'] = 'Max. Überarbeitungen {$a}';
$string['maxpostsizeexceeded'] = 'Maximale Größe für POST an den Server überschritten. Bitte entfernen Sie Dateien oder verringern Sie die Dateigröße.';
$string['maxresourcelimits'] = 'Maximaler Ressourcenverbrauch bei Ausführung';
$string['maxsimilarityoutput'] = 'Maximale Ausgabe durch Ähnlichkeit';
$string['menucheck_jail_servers'] = 'Jail-Server überprüfen';
$string['menuexecutionfiles'] = 'Ausführungsdateien';
$string['menuexecutionoptions'] = 'Optionen';
$string['menukeepfiles'] = 'Zu behaltene Dateien';
$string['menulocal_jail_servers'] = 'Lokale Jail-Server';
$string['menuresourcelimits'] = 'Ressourcenbeschränkungen';
$string['merge'] = 'Bewertung zusammenführen';
$string['merge_help'] = 'Aktuelle vorgeschlagene Bewertung (von Ausführung) und erweiterter Bewertung zusammenführen.
<p>Dies setzt die Bewertung auf &lt;vorgeschlagene&nbsp;Bewertung&gt; - &lt;max&nbsp;Raster&nbsp;Punkte&gt; * (&lt;vorgeschlagene&nbsp;Bewertung&gt;/&lt;max&nbsp;vpl&nbsp;grade&gt;) + &lt;Raster&nbsp;Punkte&gt;.<br>
Einfacher ausgedrückt: Es gewichtet die Bewertungsraster-Punkte basierend auf der aktuell vorgeschlagenen Note:
Ein/e Teilnehmer/in mit 100 % Punkten benötigt alle Bewertungsraster-Punkte, um die 100 % zu behalten; Ein/e Teilnehmer/in mit 0 Punkten erhält alle erreichten Bewertungsraster-Punkte als Bewertung.</p>
<p>
Erweiterte Bewertungsraster-Punkte bewertet die Summe der Bewertungsraster-Punkte abzüglich der Kommentare. Syntax für den Punkteabzug bei der Bewertung: <pre>-&nbsp;Text&nbsp;(-Punkte)</pre> (eine Zeile pro Abzug).';
$string['message::bad_jailserver'] = 'Server Software Update muss durchgeführt werden. Kontaktieren Sie Ihre/n Systemadminstrator/in';
$string['message::body_footer_bad_jailservers'] = 'Um die aktuellste Version des VPL-Jail-Systems herunterzuladen, öffnen sie VPL von der Moodle Homepage und navigieren Sie zum Abschnitt "Downloads". Denken Sie daran, die Parameter URLPATH und/oder TASK_ONLY_FROM wie empfohlen zu verwenden, um die Sicherheitseinstellungen zu verbessern.

Um Aktivitäten, die lokale VPL-Jail-Server verwenden zu identifizieren, suchen Sie im Feld Jail-Server der Tabelle {prefix}vpl.';
$string['message::body_header_bad_jailservers'] = 'Die VPL Jail Server der folgenden Liste benötigen ein **dringendes** Update der VPL-Jail-System-Software.';
$string['message::subject_bad_jailservers'] = 'Wichtige Meldung des VPL Plugins in Moodle auf dem \'{$a}\' Server';
$string['messageprovider:bad_jailservers'] = 'VPL Jail Server melden';
$string['minsimlevel'] = 'Minimale angezeigte Ähnlichkeit';
$string['moduleconfigtitle'] = 'VPL Module Konfiguration';
$string['modulename'] = 'Virtual programming lab';
$string['modulename_help'] = '<p>VPL ist ein Aktivitätsmodul für Moodle, das Programmieraufgaben verwaltet und folgende Eigenschaften aufweist:
</p>
<ul>
<li>Möglichkeit, den Programmcode im Browser zu verändern</li>
<li>Teilnehmer/innen können Programme interaktiv im Browser ausführen</li>
<li>Automatische Tests zur Bewertung von Programmen können ausgeführt werden</li>
<li>Möglichkeit, Ähnlichkeiten zwischen Dateien zu suchen</li>
<li>Möglichkeit, Änderungseinschränkungen und externe Einfügeoptionen zu konfigurieren</li>
</ul>
<p><a href="http://vpl.dis.ulpgc.es">Virtual Programming lab Home Page</a></p>';
$string['modulename_link'] = 'mod/vpl/view';
$string['modulenameplural'] = 'Virtual programming labs';
$string['multidelete'] = 'Mehrfach-Löschung';
$string['nevaluations'] = '{$a} automatische Bewertungen durchgeführt';
$string['new'] = 'Neu';
$string['new_file_name'] = 'Neuer Dateiname';
$string['next'] = 'Weiter';
$string['nojailavailable'] = 'Kein Jail-Server verfügbar';
$string['noright'] = 'Keine ausreichenden Zugriffsberechtigungen';
$string['nosubmission'] = 'Keine Abgabe';
$string['nosuchsubmission'] = 'Keine entsprechende Abgabe';
$string['notexecuted'] = 'Nicht ausgeführt';
$string['notgraded'] = 'Nicht bewertet';
$string['notsaved'] = 'Nicht gespeichert';
$string['novpls'] = 'Kein virtual programming lab definiert';
$string['nowatermark'] = 'Eigene Wasserzeichen {$a}';
$string['nsubmissions'] = '{$a} abgaben';
$string['numcluster'] = 'Gruppe {$a}';
$string['open'] = 'Offen';
$string['operatorsvalues'] = 'Operatoren/Werte';
$string['opnotallowfromclient'] = 'Aktion ist von diesem Rechner nicht erlaubt';
$string['options'] = 'Optionen';
$string['optionsnotsaved'] = 'Einstellungen wurden nicht gespeichert';
$string['optionssaved'] = 'Einstellungen wurden gespeichert';
$string['origin'] = 'Ursprung';
$string['othersources'] = 'Andere zu prüfende Quellen';
$string['outofmemory'] = 'Out of memory';
$string['override'] = 'Überschreiben';
$string['override_help'] = 'Wenn "Überschreiben" aktiviert ist, wird diese Einstellung mit den gewählten Werten für betroffene Nutzer/innen überschrieben.';
$string['override_options'] = 'Überschreiben-Optionen';
$string['override_users'] = 'Betroffene Teilnehmer/innen';
$string['override_users_help'] = 'Ein/e Nutzer/in bzw. Gruppe kann nur von einer Überschreibuns-Einstellung betroffen sein.<br> Wenn ein/e Nutzer/in gleichzeitig eine Mitgliedschaft in einer Gruppe, die von einer Überschreibungs-Einstellung betroffen ist, hat, bleibt die Überschreibung der Gruppe für diese/n Nuterz/in unberücksichtigt. Wenn ein/e Nutzer/in gleichzeitig mehrere Mitgliedschaften in Gruppen, die von einer Überschreibungs-Einstellung betroffen sind, hat, werden die Überschreibungs-Einstellungen der ersten Gruppe in der Tabelle übernommen.';
$string['overridefor'] = '{$a->base} ist fällig am {$a->for}';
$string['overrideforgroup'] = '{$a->base} ist fällig für Mitglieder/innen von {$a->for}';
$string['overriden'] = 'Überschrieben';
$string['overrides'] = 'Überschreiben';
$string['overrides_help'] = 'Einstellungen können für eine Aktivität überschrieben werden. Diese Einstellungen überschreiben Aktivitätseinstellungen für betroffene Nutzer/innen und Gruppen.';
$string['paste'] = 'Einfügen';
$string['pause'] = 'Pause';
$string['pluginadministration'] = 'VPL Administration';
$string['pluginname'] = 'Virtual programming lab';
$string['pluginnotfound'] = 'VPL Subplugin nicht gefunden oder falsch definiert: {a}';
$string['previoussubmissionslist'] = 'Vorige Abgabeliste';
$string['print'] = 'Drucken';
$string['privacy:metadata:vpl'] = 'Information der Aktivität';
$string['privacy:metadata:vpl:course'] = 'Kurs-ID';
$string['privacy:metadata:vpl:duedate'] = 'Fälligkeitsdatum der Aktivität';
$string['privacy:metadata:vpl:freeevaluations'] = 'Anzahl der freien automatischen Evaluierungen (ohne Abzüge)';
$string['privacy:metadata:vpl:grade'] = 'Bewertung der Aktivität';
$string['privacy:metadata:vpl:id'] = 'Aktivitäts-ID';
$string['privacy:metadata:vpl:name'] = 'Aktivitätsname';
$string['privacy:metadata:vpl:reductionbyevaluation'] = 'Abzüge der Bewertung pro Ausführung der automatischen Evaluierung';
$string['privacy:metadata:vpl:shortdescription'] = 'Kurzbeschreibung der Aktivität';
$string['privacy:metadata:vpl:startdate'] = 'Abgabebeginn';
$string['privacy:metadata:vpl_assigned_overrides'] = 'Die Informationen der Aktivitätseinstellungen überschreiben gegebenenfalls die zugeordneten Werte.';
$string['privacy:metadata:vpl_assigned_overrides:overrideid'] = 'Zugeordnete Überschreibungs-ID';
$string['privacy:metadata:vpl_assigned_overrides:userid'] = 'Benutzer DB ID';
$string['privacy:metadata:vpl_assigned_overrides:vplid'] = 'VPL DB ID';
$string['privacy:metadata:vpl_assigned_variations'] = 'Informationen zur zugeordneten Aktivitätsvariante, falls vorhanden';
$string['privacy:metadata:vpl_assigned_variations:description'] = 'Beschreibung der zugeordneten Variante';
$string['privacy:metadata:vpl_assigned_variations:userid'] = 'DB ID der Nutzerin / des Nutzers.';
$string['privacy:metadata:vpl_assigned_variations:vplid'] = 'VPL DB ID';
$string['privacy:metadata:vpl_running_processes'] = 'Informationen zu den laufenden Prozessen dieser Aktivität der Benutzerin/des Benutzers';
$string['privacy:metadata:vpl_running_processes:server'] = 'Server, der den Task ausführt';
$string['privacy:metadata:vpl_running_processes:starttime'] = 'Datum, an dem der Task ausgeführt wird';
$string['privacy:metadata:vpl_running_processes:userid'] = 'Benutzer DB ID';
$string['privacy:metadata:vpl_running_processes:vplid'] = 'VPL DB ID';
$string['privacy:metadata:vpl_submissions'] = 'Information zu den Versuchen / Abgaben und deren Evaluierung';
$string['privacy:metadata:vpl_submissions:dategraded'] = 'Datum und Uhrzeit der Evaluierung der Abgabe';
$string['privacy:metadata:vpl_submissions:datesubmitted'] = 'Datum und Uhrzeit der Abgabe';
$string['privacy:metadata:vpl_submissions:debug_count'] = 'Anzahl der Debugging-Durchführungen der Abgabe';
$string['privacy:metadata:vpl_submissions:grade'] = 'Die Bewertung der Einreichung. Dieser Wert muss nicht mit der Bewertung in der Bewertungsübersicht übereinstimmen.';
$string['privacy:metadata:vpl_submissions:gradercomments'] = 'Kommentare der Trainerin / des Trainers zu dieser Abgabe';
$string['privacy:metadata:vpl_submissions:graderid'] = 'DB ID der bewertenden Nutzerin / des bewertenden Nutzers';
$string['privacy:metadata:vpl_submissions:groupid'] = 'Gruppe DB ID';
$string['privacy:metadata:vpl_submissions:nevaluations'] = 'Anzahl der angeforderten automatischen Evaluierungen bis zu dieser Abgabe';
$string['privacy:metadata:vpl_submissions:run_count'] = 'Anzahl der Ausführungen der Abgabe';
$string['privacy:metadata:vpl_submissions:save_count'] = 'Anzahl der Speicherung der Abgabe';
$string['privacy:metadata:vpl_submissions:studentcomments'] = 'Kommentare der Teilnehmer/innen zu dieser Abgabe';
$string['privacy:metadata:vpl_submissions:userid'] = 'DB ID der Nutzerin / des Nutzers';
$string['privacy:overridepath'] = 'zugeordnete Überschreibung';
$string['privacy:runningprocesspath'] = 'laufender_prozess_{$a}';
$string['privacy:submissionpath'] = 'abgabe_{$a}';
$string['privacy:variationpath'] = 'zugeordnete_variante';
$string['proposedgrade'] = 'Bewertungsvorschlag: {$a}';
$string['proxy'] = 'Proxy';
$string['proxy_description'] = 'Proxy von Moodle zu ausführenden Servern';
$string['redo'] = 'Wiederholen';
$string['reductionbyevaluation'] = 'Reduktion durch automatische Evaluierung';
$string['reductionbyevaluation_help'] = 'Reduzierung der Abschlussnote um einen Wert oder einen Prozentsatz für jede automatische Evaluierung, die von dem/der Studierenden beantragt wird';
$string['regularscreen'] = 'Fenstermodus';
$string['removeallsubmissions'] = 'Alle Abgaben und Bewertungen entfernen';
$string['removeallsubmissions_help'] = 'Alle Abgaben und Bewertungen in allen VPL Aktivitäten des ausgewählten Kurses entfernen';
$string['removebreakpoint'] = 'Breakpoint entfernen';
$string['removegrade'] = 'Bewertung löschen';
$string['removegroupoverrides'] = 'Zugeordnete Überschreibunge für Gruppen entfernen';
$string['removegroupoverrides_help'] = 'Alle zugeordneten Überschreibungen für Gruppen entfernen, Überschreibungsdefinitionen werden nicht gelöscht.';
$string['removeoverrides'] = 'Alle Überschreibungen entfernen';
$string['removeoverrides_help'] = 'Alle Überschreibungen in allen VPL Aktivitäten des ausgewählten Kurses entfernen';
$string['removeuseroverrides'] = 'Zugeordnete Überschreibunge für Nutzer/innen entfernen';
$string['removeuseroverrides_help'] = 'Alle zugeordneten Überschreibungen für Nutzer/innen entfernen, Überschreibungsdefinitionen werden nicht gelöscht.';
$string['rename'] = 'Umbenennen';
$string['rename_directory'] = 'Ordner umbemennen';
$string['rename_file'] = 'Datei umbenennen';
$string['renameuploadedfile'] = 'Hochgeladene Datei umbenennen';
$string['replace_find'] = 'Ersetzen/Finden';
$string['replacefile'] = 'Inhalte ersetzen';
$string['replacenewer'] = 'Eine neuere Version wurde bereits gespeichert.\\nMöchten Sie die neuere Version durch diese ersetzen?';
$string['requestedfiles'] = 'Erforderliche Dateien';
$string['requestedfiles_help'] = '<p>Hier können Namen für die erforderlichen Dateien gesetzt werden.</p>
<p>Wenn nicht für alle erforderlichen Dateien Namen gesetzt werden sind die unbenannten Dateien optionen und können beliebige Namen erhalten.</p>
<p>Man kann zusätzlich bereits Inhalte für die erforderlichen Dateien erzeugen, die beim ersten Öffnen mit dem Editor sichtbar werden, wenn noch keine andere Abgabe vorhanden ist.</p>';
$string['requirednet'] = 'Netzwerkadresse erforderlich';
$string['requirednet_help'] = 'VPL Zugriff kann durch spezifische Subnets im Lan oder im Internet durch eine Komma-Separierte Liste von teilweisen oder vollständigen IP Adressen eingeschränkt werden. Dies kann nützlich sein, um sicherzustellen, dass VPL nur von Nutzer/innen an einem bestimmten Ort aufgerufen werden kann.';
$string['requiredpassword'] = 'Ein Passwort wird benötigt';
$string['reset'] = 'VPL Aktivitäten zurücksetzen';
$string['resetfiles'] = 'Dateien zurücksetzen';
$string['resetvpl'] = 'VPL Abgaben in {$a} zurücksetzen';
$string['resourcelimits'] = 'Ressourcenbeschränkungen';
$string['resourcelimits_help'] = '<p>Grenzen für das Maximum können für die Ausführungszeit, den benutzten Arbeitsspeicher, die Ausführungsdateigrößen und die Anzahl der gleichzeitigen Prozesse gesetzt werden.</p>
<p>Diese Grenzen werden verwendet, wenn die Skripts vpl_run.sh, vpl_debug.sh, vpl_evaluate.sh und vpl_execution ausgeführt werden.</p>
<p>Wenn diese Aktivität auf einer anderen Aktivität basiert können diese Grenzen von denen der Basisaktivität und der globalen Konfiguration beeinflusst werden.</p>';
$string['restrictededitor'] = 'Hochladen und Einfügen von externen Dateien oder Inhalten deaktivieren';
$string['resume'] = 'Fortfahren';
$string['retrieve'] = 'Ergebnisse abrufen';
$string['returntoownactivity'] = 'Zur eigenen Aktivität zurückkehren';
$string['run'] = 'Ausführen';
$string['run_help'] = 'Teilnehmer/innen können ihren Code im Editor ausführen. Trainer/innen können immer alle Einreichungen ausführen.';
$string['run_mode'] = 'Ausführungsmodus';
$string['run_mode:default'] = 'Automatische Erkennung des Ausführungsmodus (Standard)';
$string['run_mode:gui'] = 'In einem grafischen Terminal ausführen';
$string['run_mode:text'] = 'In einem Text-Terminal ausführen';
$string['run_mode:textingui'] = 'Text App in einem grafischen Terminal ausführen';
$string['run_mode:webapp'] = 'Als Webapplikation ausführen';
$string['run_mode_help'] = 'Ausführungsmodus für diese Aktivität wählen.<br>
<b>Standard</b>: automatische Erkennung des Ausführungsmodus (ursprüngliches Verhalten). Verwenden Sie @vpl_run_[text|gui|webapp|textingui]_mode im Kommentar am Beginn der Code-Datei um den Ausführungsmodus zu wählen.<br>
<b>Text</b>: In einem Text Terminal ausführen (kein GUI).<br>
<b>GUI</b>: In einem grafischen Terminal ausführen (GUI).<br>
<b>Webapp</b>: Als Webapplikation ausführen (kein Terminal).<br>
<b>Text in GUI</b>: Text App in grfischem Terminal ausführen (GUI).<br>
<b>Hinweis</b>: Alle Modi sind nicht für alle Sprachen verfügbar.<br>
Benutzerdefinierte Skript können diese Einstellungen ignorieren.<br>';
$string['running'] = 'Läuft';
$string['runscript'] = 'Skript ausführen';
$string['runscript_help'] = 'Wählen Sie das Ausführungsskript, das in dieser Aktivität verwendet werden soll.<br>Benutzerdefiniert bedeutet, dass ein benutzerdefiniertes Skript gewählt wurde.';
$string['save'] = 'Speichern';
$string['savecontinue'] = 'Speichern und fortfahren';
$string['saved'] = 'Gespeichert';
$string['savedfile'] = 'Die Datei \'{\\$a}\' wurde gespeichert';
$string['saveforotheruser'] = 'Sie speichern eine Abgabe für eine/n andere/n Teilnehmer/in';
$string['saveoptions'] = 'Einstellungen speichern';
$string['saving'] = 'Speichert';
$string['scanactivity'] = 'Aktivität';
$string['scandirectory'] = 'Ordner';
$string['scanningdir'] = 'Prüfe Ordner ...';
$string['scanoptions'] = 'Prüfeinstellungen';
$string['scanother'] = 'Prüfe Ähnlichkeit in hinzugefügten Quellen';
$string['scanzipfile'] = 'Zip-Datei';
$string['search:activity'] = 'Virtual Programming Lab - Aktivitätsinformationen (Name und Beschreibung)';
$string['sebkeys'] = 'SEB Prüfung Schlüssel';
$string['sebkeys_help'] = 'SEB Prüfungsschlüssel (max 3) von der .seb Datei erhalten<br>Dies ist zuverlässiger als eine Überprüfung durch den Browser.<br>https://safeexambrowser.org';
$string['sebrequired'] = 'SEB Browser erforderlich';
$string['sebrequired_help'] = 'Richtige Konfiguration von SEB Browser ist erforderlich';
$string['select_all'] = 'Alles markieren';
$string['selectbreakpoint'] = 'Breakpoint auswählen';
$string['server'] = 'Server';
$string['serverexecutionerror'] = 'Server Ausführungsfehler';
$string['setbyexecutionoptions'] = 'durch Ausführungsoptionen festgelegt';
$string['shortcuts'] = 'Tastenkürzel';
$string['shortdescription'] = 'Kurzbeschreibung';
$string['showparentfiles'] = 'Übergeordnete Dateien anzeigen';
$string['shrightpanel'] = 'Rechte Seitenleiste anzeigen / verbergen';
$string['similarity'] = 'Ähnlichkeit';
$string['similarto'] = 'Ähnlich wie';
$string['start'] = 'Start';
$string['startanimate'] = 'Animation starten';
$string['startdate'] = 'Verfügbar ab';
$string['starting'] = 'Beginn';
$string['step'] = 'Schritt';
$string['stop'] = 'Stop';
$string['submission'] = 'Abgabe';
$string['submissionperiod'] = 'Abgabezeitraum';
$string['submissionrestrictions'] = 'Abgabeeinschränkungen';
$string['submissions'] = 'Einreichungen';
$string['submissions_graded_overview'] = '<b>{$a->name}</b>: {$a->ugcount} / {$a->subcount} ({$a->subpercent}%) / {$a->gradedcount} ({$a->gradedpercent}%) - {$a->notgradedcount} ({$a->notgradedpercent}%';
$string['submissions_graded_overview_help'] = '[students or groups count]<br>
 / [submissions count] (% von Teilnehmer/innen oder Gruppen mit Einreichungen)<br>
 / [graded count] (% der bewerteten Einreichungen)<br>
 - [not graded count] (% der nicht bewerteten Einreichungen)';
$string['submissions_graded_overview_short'] = '{$a->gradedcount} von {$a->subcount}';
$string['submissions_overview'] = '<b>{$a->name}</b>: {$a->ugcount} / {$a->subcount} ({$a->subpercent}%)';
$string['submissions_overview_help'] = 'Anzahl der Teilnehmer/innen oder Gruppen / Anzahl der Einreichungen (% der Teilnehmer/innen oder Gruppen mit Einreichungen)';
$string['submissions_overview_short'] = '{$a->subcount} von {$a->ugcount}';
$string['submissionselection'] = 'Abgabeauswahl';
$string['submissionslist'] = 'Abgabeliste';
$string['submissionview'] = 'Abgabesicht';
$string['submitarchive'] = 'ZIP Archiv einreichen';
$string['submitfiles'] = 'Dateien abgeben';
$string['submitmethod'] = 'Abgabemethode';
$string['submittedby'] = 'Abgegeben von {$a}';
$string['submittedon'] = 'Abgegeben am';
$string['submittedonp'] = 'Abgegeben am {$a}';
$string['subplugintype_vplevaluator'] = 'Auswertung für VPL Einreichungen';
$string['subplugintype_vplevaluator_plural'] = 'Auswertungen für VPL Einreichungen';
$string['sureresetfiles'] = 'Wollen Sie Ihre Änderungen wirklich verwerfen und die Dateien in den Ursprungszustand zurückversetzen?';
$string['test'] = 'Testaktivität';
$string['testcases'] = 'Test-Einstellungen';
$string['testcases_help'] = '<p>Hier können Sie die verwendete Auswertung für diese Aktivität konfigurieren.</p>';
$string['text'] = 'Text';
$string['timeleft'] = 'Verbleibende Zeit';
$string['timelimited'] = 'Zeitlich begrenzt';
$string['timeout'] = 'Timeout';
$string['timeshift'] = 'Datumseinstellungen in VPL um {$a} verschoben';
$string['timespent'] = 'Benötigte Zeit';
$string['timespent_help'] = 'Zeit, die mit dieser Aktivität verbracht wurde, basierend auf den gespeicherten Versionen<br>Das Balkendiagramm zeigt die Anzahl der Teilnehmer/innen pro Zeitspanne.';
$string['timeunlimited'] = 'Zeitlich unbegrenzt';
$string['totalnumberoferrors'] = 'Fehler';
$string['undo'] = 'Rückgängung';
$string['unexpected_file_name'] = 'Ungültiger Dateiname: \'{\\$a->expected}\' erwartet aber \'{\\$a->found}\' erhalten';
$string['unzipping'] = 'Entpacke ...';
$string['update'] = 'Aktualisieren';
$string['updating'] = 'Aktualisieren...';
$string['uploadfile'] = 'Datei hochladen';
$string['use_xmlrpc'] = 'XML-RPC verwenden';
$string['use_xmlrpc_description'] = 'Wenn aktiviert, verwendet das System das alte XML-RPC Protokoll statt des JSON-RPC Protokolls, um mit den VPL Servern zu kommunizieren. Wählen Sie diese Option, wenn Sie einen VPL-Jail-Server mit einer Version älter als V3.0.0 verwenden.';
$string['usevariations'] = 'Verwende Variationen';
$string['usewatermarks'] = 'Wasserzeichen verwenden';
$string['usewatermarks_description'] = 'Wasserzeichen zu den Dateien der Teilnehmer/innen hinzufügen (nur unterstützte Sprachen)';
$string['variables'] = 'Variablen';
$string['variation_n'] = 'Variante {$a}';
$string['variation_n_i'] = 'Variante {$a->number}: {$a->identification}';
$string['variation_options'] = 'Variationsoptionen';
$string['variations'] = 'Variationen';
$string['variations_help'] = '<p>Eine Menge von Variationen können für eine Aktivität definiert werden. Diese Variationen werden den Teilnehmer/innen zufällig zugwiesen.</p>
<p>Hier kann festgelegt werden, ob diese Aktivität Variationen hat und welche Bezeichnung die Menge an Variationen trägt und es können die Variationen selbst hinzugefügt werden.</p>
<p>Jede Variation hat eine Identifizierungsnummer und eine Beschreibung. Die Identifizierungsnummer wird von der Datei <b>vpl_enviroment.sh</b> benutzt, um die Variation aller Teilnehmer/innen an die Skriptdatei weiterzugeben. Die Beschreibung, in HTML formatiert, wird den jeweiligen Teilnehmer/innen, denen die Variation zugewiesen wurde, angezeigt.</p>';
$string['variations_unused'] = 'Diese Aktivität hat Variationen, die deaktiviert sind';
$string['variationtitle'] = 'Variationsname';
$string['varidentification'] = 'Identifikation';
$string['visiblegrade'] = 'Sichtbar';
$string['vpl'] = 'Virtual Programming Lab';
$string['vpl:addinstance'] = 'Neue VPL Instanzen hinzufügen';
$string['vpl:editothersgrades'] = 'Bewertungen bearbeiten, die von anderen Nutzer/innen vergeben wurden';
$string['vpl:grade'] = 'VPL Aufgabe bewerten';
$string['vpl:manage'] = 'VPL Aufgabe verwalten';
$string['vpl:setjails'] = 'Jail-Server speziellen VPL Instanzen zuweisen';
$string['vpl:similarity'] = 'VPL Aufgaben Ähnlichkeit prüfen';
$string['vpl:submit'] = 'VPL Aufgabe abgeben';
$string['vpl:view'] = 'Komplette VPL Aufgabenbeschreibung anzeigen';
$string['vpl_debug.sh'] = 'Dieses Skript bereitet das abgegebene Programm zum Debuggen vor';
$string['vpl_evaluate.cases'] = 'Hier werden die Testfälle zur Evaluierung des abgegebenen Programms angegeben';
$string['vpl_evaluate.sh'] = 'Dieses Skript evaluiert das abgegebene Programm';
$string['vpl_run.sh'] = 'Dieses Skript bereitet das abgegebene Programm zur Ausführung vor';
$string['webservice'] = 'Webservice';
$string['webservice_help'] = 'Das Webservice kann dazu verwendet werden Dateien für VPL Aktivitäten abzurufen oder einzureichen.';
$string['webserviceglobal'] = 'Globales VPL Webservice';
$string['webserviceglobal_help'] = 'Der folgende persönliche Token ist dauerhaft und kann für jedes VPL auf der Plattform unter Verwendung der angegebenen Webservice-URL verwendet werden.';
$string['webservicelocal'] = 'Lokales VPL Webservice';
$string['webservicelocal_help'] = 'Der folgende persönliche Token kann nur für dieses VPL verwendet werden. Der Token ist temporär und wird wahrscheinlich innerhalb der nächsten 24 Stunden oder beim Schließen der Session zurückgesetzt.';
$string['webserviceloginasnotice'] = 'Sie sind als ein/e andere/r Nutzer/in angemeldet. Deren persönlicher Token mit globalem Zugriff wird nicht angezeigt.';
$string['webservicetoken'] = 'Persönlicher Token:';
$string['webserviceurl'] = 'Webservice URL:';
$string['webserviceurlfull'] = 'Vollständige URL:';
$string['webserviceurlpwdnotice'] = 'Dieses VPL wird durch ein Passwort geschützt, das aus Sicherheitsgründen nicht angezeigt wird. Es  sollte der angegebenen URL als Parameter mit dem Namen "password" hinzugefügt werden.';
$string['webservicevplid'] = 'VPL ID:';
$string['websocket_protocol'] = 'WebSocket Protokoll';
$string['websocket_protocol_description'] = 'Art des WebSocket Protokolls (ws:// oder wss://), das vom Browser verwendet wird, um eine Verbindung zum ausführenden Server herzustellen.';
$string['workingperiods'] = 'Arbeitszeiten';
$string['worktype'] = 'Arbeitstyp';
