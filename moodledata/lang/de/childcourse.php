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
 * Strings for component 'childcourse', language 'de', version '4.4'.
 *
 * @package     childcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoenrol'] = 'Automatische Einschreibung beim Zugriff';
$string['autoenrol_help'] = 'Wenn aktiviert, schreibt das Plugin den Nutzer automatisch in den Kindkurs ein, wenn er ihn über diese Aktivität öffnet. Einschreibungen werden über eine dedizierte Instanz der manuellen Einschreibung erstellt, damit sie nachverfolgt und später sicher rückgängig gemacht werden können (abhängig von der Entfernungsrichtlinie). Wenn deaktiviert, versucht das Plugin nicht, Nutzer automatisch einzuschreiben.';
$string['childcourse'] = 'Kindkurs';
$string['childcourse:addinstance'] = 'Eine neue Kindkurs-Aktivität hinzufügen';
$string['childcourse:manage'] = 'Einstellungen des Kindkurses verwalten';
$string['childcourse:sync'] = 'Bewertung und Abschluss des Kindkurses synchronisieren';
$string['childcourse:view'] = 'Kindkurs-Aktivität anzeigen';
$string['childcourse_help'] = 'Wählen Sie den Kurs aus, der mit dieser Aktivität verknüpft wird. Diese Auswahl steuert alle regelspezifischen Einstellungen (Gruppen, Abschlussregeln, Aktivitätsauswahl, Notensynchronisierung). Nachdem die Aktivität gespeichert wurde, wird der Kindkurs unveränderlich, um Zuordnungen und den Synchronisierungsverlauf konsistent zu halten.';
$string['childcoursenotset'] = 'Der Kindkurs wurde nicht festgelegt.';
$string['completionmissing'] = 'Der Abschluss im Kindkurs ist nicht aktiviert.';
$string['completionrule'] = 'Abschlussregel basierend auf dem Kindkurs';
$string['completionrule_allactivities'] = 'Abschließen, wenn 100 % der nachverfolgten Aktivitäten abgeschlossen sind';
$string['completionrule_coursecompleted'] = 'Abschließen, wenn der Kindkurs abgeschlossen ist';
$string['completionrule_help'] = 'Legt fest, wie diese Aktivität automatisch als abgeschlossen markiert wird, basierend auf dem Fortschritt des Nutzers im Kindkurs.

- **Nichts tun:** Der Abschluss dieser Aktivität steht in keiner Beziehung zum Abschluss des Kindkurses.
- **Wenn der Kindkurs abgeschlossen ist:** Sobald der Kindkurs abgeschlossen ist, wird auch diese Aktivität als abgeschlossen markiert.
- **Wenn 100 % der nachverfolgten Aktivitäten abgeschlossen sind:** Alle Aktivitäten im Kindkurs mit aktivierter Abschlussverfolgung müssen abgeschlossen sein, damit diese Aktivität abgeschlossen wird.';
$string['completionrule_none'] = 'Nichts tun';
$string['enrolinstancename'] = 'Kindkurs-Link #{$a}';
$string['error_manualenrolnotavailable'] = 'Das Plugin für manuelle Einschreibung ist nicht verfügbar.';
$string['grade_approval'] = 'Note senden von';
$string['grade_approval_no'] = 'Keine Note senden';
$string['grade_approval_yes'] = 'Note aus dem Kindkurs verwenden';
$string['gradebookmissing'] = 'Das Notenbuch des Kindkurses ist nicht konfiguriert (die Kurssumme fehlt).';
$string['hideinmycourses'] = 'Kindkurs in "Meine Kurse" ausblenden';
$string['hideinmycourses_help'] = 'Wenn aktiviert, wird der Kindkurs für Nutzer, die durch diese Aktivität eingeschrieben wurden, im Menü "Meine Kurse" ausgeblendet. Dies hilft, die Navigation über diesen Kurs zu erzwingen. Diese Einstellung betrifft nur Nutzer, die durch dieses Plugin eingeschrieben wurden (vom Plugin nachverfolgt).';
$string['inheritgroups'] = 'Gruppen aus dem Elternkurs übernehmen';
$string['inheritgroups_help'] = 'Wenn aktiviert, versucht das Plugin, die Gruppenzugehörigkeiten des Nutzers vom Elternkurs in den Kindkurs zu übernehmen, indem es nach Gruppennamen abgleicht. Wenn ein Gruppenname im Kindkurs nicht existiert, kann er erstellt werden. Dies wird während der automatischen Einschreibung angewendet. Es ist keine fortlaufende Synchronisierung, es sei denn, Sie implementieren später eine dedizierte Resynchronisierungsroutine.';
$string['keeprole'] = 'Rolle beibehalten (Student/Lehrer)';
$string['keeprole_help'] = 'Wenn aktiviert, versucht das Plugin, eine vereinfachte Rollenparität beizubehalten: Nutzer mit lehrerähnlichen Berechtigungen im Elternkurs werden als Lehrer eingeschrieben (editingteacher/teacher, sofern verfügbar); andernfalls als Student. Dies kopiert keine benutzerdefinierten Rollen oder komplexe Rollenzuweisungen.';
$string['label_childcourse'] = 'Kindkurs';
$string['label_lastsynccompletion'] = 'Letzte Abschluss-Synchronisierung';
$string['label_lastsyncgrade'] = 'Letzte Noten-Synchronisierung';
$string['lastsync'] = 'Letzte Synchronisierung';
$string['lockedcoursewarning'] = 'Der Kindkurs kann nach dem Speichern nicht mehr geändert werden.';
$string['manage_header_actions'] = 'Aktionen';
$string['manage_header_name'] = 'Name';
$string['missingcourse'] = 'Fehlender Kurs';
$string['modulename'] = 'Kindkurs';
$string['modulenameplural'] = 'Kindkurse';
$string['never'] = 'Nie';
$string['nogroup'] = 'Keine Gruppe';
$string['openchildcourse'] = 'Kindkurs öffnen';
$string['opennewtab'] = 'In neuem Tab öffnen';
$string['opennewtab_help'] = 'Wenn aktiviert, öffnet die Schaltfläche den Kindkurs in einem neuen Tab. Dies ändert weder das Einschreibungs- noch das Synchronisierungsverhalten, sondern nur, wie der Kurs für den Nutzer geöffnet wird.';
$string['pluginadministration'] = 'Kindkurs-Administration';
$string['pluginname'] = 'Kindkurs';
$string['privacy:metadata:childcourse_map'] = 'Speichert Zuordnungsdaten, die durch die verknüpfte Kursaktivität erstellt wurden, um eine sichere Austragung und Auditierung zu ermöglichen.';
$string['privacy:metadata:childcourse_map:childcourseid'] = 'Die ID des verknüpften Kindkurses.';
$string['privacy:metadata:childcourse_map:childcourseinstanceid'] = 'Die ID der Instanz der verknüpften Kursaktivität.';
$string['privacy:metadata:childcourse_map:groupidsjson'] = 'Die Liste der Kindkurs-Gruppen-IDs, die vom Plugin zugewiesen wurden (JSON).';
$string['privacy:metadata:childcourse_map:hiddenprefset'] = 'Gibt an, ob das Plugin die Einstellung gesetzt hat, den Kindkurs in "Meine Kurse" auszublenden.';
$string['privacy:metadata:childcourse_map:manualenrolid'] = 'Die ID der Einschreibungsinstanz, die vom Plugin verwendet wurde, um den Nutzer einzuschreiben.';
$string['privacy:metadata:childcourse_map:parentcourseid'] = 'Die ID des Elternkurses, in dem die Aktivität existiert.';
$string['privacy:metadata:childcourse_map:roleid'] = 'Die ID der Rolle, die vom Plugin im Kindkurs zugewiesen wurde.';
$string['privacy:metadata:childcourse_map:timeenrolled'] = 'Der Zeitpunkt, zu dem der Nutzer über den Link eingeschrieben wurde.';
$string['privacy:metadata:childcourse_map:timemodified'] = 'Der Zeitpunkt der letzten Änderung am Zuordnungsdatensatz.';
$string['privacy:metadata:childcourse_map:userid'] = 'Die ID des Nutzers, der über den Link eingeschrieben wurde.';
$string['privacy:metadata:childcourse_state'] = 'Speichert pro Nutzer einen zwischengespeicherten Status, um eine inkrementelle Noten- und Abschluss-Synchronisierung zu unterstützen.';
$string['privacy:metadata:childcourse_state:childcourseinstanceid'] = 'Die ID der Instanz der verknüpften Kursaktivität.';
$string['privacy:metadata:childcourse_state:coursecompleted'] = 'Zwischengespeicherter Indikator, ob die Abschlussregel für den Nutzer erfüllt wurde.';
$string['privacy:metadata:childcourse_state:coursecompletiontimemodified'] = 'Zeitstempel der letzten Änderung der Quell-Abschlussdaten für die inkrementelle Synchronisierung.';
$string['privacy:metadata:childcourse_state:finalgrade'] = 'Zwischengespeicherte Note (Prozentsatz), synchronisiert aus der Kurssumme des Kindkurses.';
$string['privacy:metadata:childcourse_state:grade_source'] = 'Kennung der Notenquelle (z. B. course_total).';
$string['privacy:metadata:childcourse_state:gradeitemtimemodified'] = 'Zeitstempel der letzten Änderung des Quell-Notenelements für die inkrementelle Synchronisierung.';
$string['privacy:metadata:childcourse_state:timemodified'] = 'Der Zeitpunkt der letzten Änderung der Zeile mit dem zwischengespeicherten Status.';
$string['privacy:metadata:childcourse_state:userid'] = 'Die Nutzer-ID.';
$string['privacy:metadata:userpreference:block_myoverview_hidden_course'] = 'Eine Nutzerpräferenz zum Ausblenden eines Kindkurses in "Meine Kurse" (Standardname der Präferenz: block_myoverview_hidden_course_{courseid}).';
$string['settings_heading'] = 'Kindkurs-Einstellungen';
$string['syncdone'] = 'Synchronisierung abgeschlossen.';
$string['syncnow'] = 'Jetzt synchronisieren';
$string['targetgroup'] = 'In Gruppe einschreiben';
$string['targetgroup_help'] = 'Wenn ausgewählt, wird der Nutzer zum Zeitpunkt der automatischen Einschreibung dieser bestimmten Gruppe im Kindkurs hinzugefügt. Die Gruppe muss im Kindkurs existieren. Wenn "Gruppen aus dem Elternkurs übernehmen" ebenfalls aktiviert ist, werden beide Verhaltensweisen angewendet (die ausgewählte Gruppe und die übernommenen Gruppen).';
$string['unenrolaction'] = 'Wenn der Link entfernt wird';
$string['unenrolaction_help'] = 'Steuert, was mit Einschreibungen passiert, die durch diese Aktivität erstellt wurden, wenn die verknüpfte Aktivität gelöscht wird. "Austragen" entfernt nur die Einschreibungen, die durch diese Aktivität erstellt wurden (in der Zuordnungstabelle nachverfolgt). "Einschreibungen beibehalten" lässt Nutzer im Kindkurs eingeschrieben.';
$string['unenrolaction_keep'] = 'Einschreibungen beibehalten';
$string['unenrolaction_unenrol'] = 'Nutzer austragen, die über diesen Link eingeschrieben wurden';
