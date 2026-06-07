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
 * Strings for component 'tool_dynamic_cohorts', language 'de', version '4.4'.
 *
 * @package     tool_dynamic_cohorts
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_rule'] = 'Neue Regel hinzufügen';
$string['addcondition'] = 'Eine Bedingung hinzufügen';
$string['addrule'] = 'Neue Regel hinzufügen';
$string['after'] = 'Nach';
$string['any'] = 'Jeder';
$string['before'] = 'Vor';
$string['broken'] = 'Fehlerhaft';
$string['brokenruleswarning'] = 'Es gibt einige fehlerhafte Regeln, die Ihre Aufmerksamkeit erfordern. <br /> Um eine fehlerhafte Regel zu beheben, sollten Sie alle fehlerhaften Bedingungen entfernen. <br />Manchmal wird eine Regel als fehlerhaft markiert, wenn das Abgleichen von Nutzern per SQL fehlgeschlagen ist. In diesem Fall sind zwar alle Bedingungen in Ordnung, aber die Regel wird dennoch als fehlerhaft markiert. Sie sollten in den Moodle-Logs nach dem Ereignis „Matching users failed“ und den dazugehörigen SQL-Fehlern suchen. <br />Bitte beachten Sie, dass Sie in jedem Fall die Regel erneut speichern müssen, damit sie als nicht mehr fehlerhaft gekennzeichnet wird.';
$string['bulkprocessing'] = 'Massenverarbeitung';
$string['bulkprocessing_help'] = 'Wenn diese Option aktiviert ist, werden Nutzer/innen in großen Mengen zur Globalen Gruppe hinzugefügt und/oder aus ihr entfernt. Dies verbessert die Verarbeitungsleistung erheblich. Die Verwendung dieser Option unterdrückt jedoch auslösende Ereignisse, wenn Nutzer/innen zur Globalen Gruppe hinzugefügt oder aus ihr entfernt werden.';
$string['cachedef_conditionrecords'] = 'Bedingungen für eine Regel';
$string['cachedef_rulesconditions'] = 'Regeln mit einer bestimmten Bedingung';
$string['cannotenablebrokenrule'] = 'Eine fehlerhafte Regel kann nicht aktiviert werden.';
$string['cf_include_missing_data'] = 'Globale Gruppen mit fehlenden Daten einbeziehen.';
$string['cf_include_missing_data_help'] = 'Globale Gruppen verfügen möglicherweise noch nicht über einen benutzerdefinierten Datensatz. Diese Option berücksichtigt diese Globalen Gruppen im Endergebnis.';
$string['cf_includingmissingdatadesc'] = '(einschließlich Globale Gruppen mit fehlenden Daten)';
$string['cohort'] = 'Globale Gruppe';
$string['cohortid'] = 'Globale Gruppe';
$string['cohortid_help'] = 'Eine Globale Gruppe, die im Rahmen dieser Regel verwaltet werden soll. In dieser Liste werden nur Globale Gruppen angezeigt, die nicht von anderen Plugins verwaltet werden.';
$string['cohortswith'] = 'Globale Gruppe(n) mit Feld';
$string['completed:add'] = 'Regel wurde hinzugefügt';
$string['completed:delete'] = 'Die Regel wurde gelöscht';
$string['completed:disable'] = 'Die Regel wurde deaktiviert';
$string['completed:enable'] = 'Die Regel wurde aktiviert';
$string['completed:update'] = 'Die Regel wurde aktualisiert';
$string['completiondate'] = 'Kursabschlussdatum';
$string['completionisdisabled'] = 'Der Kursabschluss ist für den konfigurierten Kurs deaktiviert.';
$string['condition'] = 'Bedingung';
$string['condition:auth_method'] = 'Authentifizierungsmethode';
$string['condition:cohort_field'] = 'Feld für Globale Gruppe';
$string['condition:cohort_field_description'] = 'Nutzer, die {$a->operator} Globale Gruppen mit dem Feld ‚{$a->field}‘ {$a->fieldoperator} {$a->fieldvalue}';
$string['condition:cohort_membership'] = 'Mitgliedschaft Globale Gruppe';
$string['condition:cohort_membership_broken_description'] = 'Die Bedingung ist nicht erfüllt. Es wird dieselbe Globale Gruppe verwendet, für deren Verwaltung die angegebene Regel konfiguriert ist.';
$string['condition:cohort_membership_description'] = 'Nutzer, die {$a->operator} {$a->cohorts}';
$string['condition:course_completed'] = 'Kurs abgeschlossen';
$string['condition:course_completed_description'] = 'Nutzer/innen die den Kurs abgeschlossen haben "{$a->course}" {$a->operator} {$a->timecompleted}';
$string['condition:course_not_completed'] = 'Kurs nicht abgeschlossen';
$string['condition:course_not_completed_description'] = 'Nutzer/innen, die den Kurs „{$a->course}“ nicht abgeschlossen haben';
$string['condition:profile_field_description'] = 'Nutzer/innen mit {$a->field} {$a->fieldoperator} {$a->fieldvalue}';
$string['condition:user_created'] = 'Nutzer/in erstellt am';
$string['condition:user_custom_profile'] = 'Profilfeld';
$string['condition:user_enrolment'] = 'Nutzereinschreibung';
$string['condition:user_enrolment_description'] = 'Nutzer/innen, die {$a->operator} in den Kurs „{$a->coursename}” (ID {$a->courseid}) mit der Rolle „{$a->role}” unter Verwendung der Anmeldemethode „{$a->enrolmethod}”';
$string['condition:user_last_login'] = 'Letztes Login Nutzer/in';
$string['condition:user_profile'] = 'Standardprofilfeld Nutzer/in';
$string['condition:user_profile_interests'] = 'Nutzerinterressen';
$string['condition:user_profile_interests_description'] = 'Nutzerinteressen mit folgenden Tags {$a}';
$string['condition:user_profile_interests_description_not'] = 'Nutzerinteressen, die nicht den folgenden Tags entsprechen {$a}';
$string['condition:user_role'] = 'Nutzerrolle';
$string['condition:user_role_description_category'] = 'Nutzer/innen, die {$a->operator} „{$a->role}“ in der Kategorie {$a->categoryname} (ID {$a->categoryid})';
$string['condition:user_role_description_course'] = 'Nutzer/innen, die {$a->operator} „{$a->role}” im Kurs {$a->coursename} (ID {$a->courseid})';
$string['condition:user_role_description_system'] = 'Nutzer/innen, die {$a->operator} „{$a->role}“ im Systemkontext haben';
$string['conditionchnagesnotapplied'] = 'Änderungen an Bedingungen werden erst nach dem Speichern des Formulars übernommen.';
$string['conditionformtitle'] = 'Regelbedingung';
$string['conditions'] = 'Bedingungen';
$string['conditionsformtitle'] = 'Regelbedingungen';
$string['conditionstext'] = '{$a->conditions} ( logisch {$a->operator} )';
$string['delete_confirm'] = 'Sind Sie sicher, dass Sie die Regel löschen möchten?';
$string['delete_confirm_condition'] = 'Sind Sie sicher, dass Sie diese Bedingung löschen möchten?';
$string['delete_rule'] = 'Regel löschen';
$string['description'] = 'Beschreibung';
$string['description_help'] = 'Eine kurze Beschreibung der Regel';
$string['disable_confirm'] = 'Sind Sie sicher, dass Sie die Regel deaktivieren möchten?';
$string['disabled'] = 'Deaktiviert';
$string['donothaverole'] = 'keine Rolle haben';
$string['dynamic_cohorts:manage'] = 'Regeln verwalten';
$string['edit_rule'] = 'Regel bearbeiten';
$string['enable_confirm'] = 'Möchten Sie die Regel wirklich aktivieren?';
$string['enabled'] = 'Aktiviert';
$string['enrolled'] = 'Eingeschrieben';
$string['enrolmethod'] = 'Einschreibemethode';
$string['event:conditioncreated'] = 'Bedingung erstellt';
$string['event:conditiondeleted'] = 'Bedingung gelöscht';
$string['event:conditionupdated'] = 'Bedingung aktualisiert';
$string['event:matchingfailed'] = 'Nutzerabgleich fehlgeschlagen';
$string['event:rulecreated'] = 'Regel erstellt';
$string['event:ruledeleted'] = 'Regel gelöscht';
$string['event:ruleupdated'] = 'Regel aktualisiert';
$string['ever'] = 'Je';
$string['everloggedin'] = 'Nutzer/innen, die sich mindestens einmal angemeldet haben';
$string['haverole'] = 'eine Rolle haben';
$string['include_missing_data'] = 'Nutzer/innen mit fehlenden Daten einbeziehen.';
$string['include_missing_data_help'] = 'Einige Nutzer/innen haben möglicherweise noch keinen benutzerdefinierten Datensatz. Diese Option berücksichtigt diese Nutzer im Endergebnis.';
$string['includechildren'] = 'einschließlich Kinder (Kategorien und Kurse)';
$string['includeusersmissingdata'] = 'Nutzer/innen mit fehlenden Daten einbeziehen';
$string['includingmissingdatadesc'] = '(einschließlich Nutzer/innen mit fehlenden Daten)';
$string['inlast'] = 'In letzter Zeit';
$string['inlastloggedin'] = 'Nutzer, die sich zuletzt in den letzten {$a} angemeldet haben';
$string['inthefuture'] = 'liegt in der Zukunft';
$string['inthepast'] = 'liegt in der Vergangenheit';
$string['invalidfieldvalue'] = 'Ungültiger Feldwert';
$string['isafter'] = 'ist nach';
$string['isbefore'] = 'ist vor';
$string['ismemberof'] = 'sind Mitglied von';
$string['isnotempty'] = 'ist nicht leer';
$string['isnotmemberof'] = 'sind nicht Mitglied von';
$string['loggedintime'] = 'Nutzer/innen, die sich angemeldet haben {$a->operator} {$a->time}';
$string['logical_operator'] = 'Logischer Operator';
$string['logical_operator_help'] = 'Ein logischer Operator, der auf die Bedingungen für diese Regel angewendet wird. Der Operator „AND“ bedeutet, dass ein/e Nutzer/in alle Bedingungen erfüllen muss, um zu einer Globalen Gruppe hinzugefügt zu werden. „OR“ bedeutet, dass ein/e Nutzer/in eine der Bedingungen erfüllen muss, um zu einer Globalen Gruppe hinzugefügt zu werden.';
$string['managecohorts'] = 'Globale Gruppen verwalten';
$string['managerules'] = 'Regeln verwalten';
$string['matchingusers'] = 'Passende Nutzer/innen';
$string['missingcourse'] = 'Fehlender Kurs';
$string['missingcoursecat'] = 'Fehlende Kurskategorie';
$string['missingenrolmentmethod'] = 'Fehlende Einschreibemethode {$a}';
$string['missingrole'] = 'Fehlende Rolle';
$string['name'] = 'Regelname';
$string['name_help'] = 'Ein für Menschen lesbarer Name dieser Regel.';
$string['never'] = 'Niemals';
$string['neverloggedin'] = 'Nutzer/innen, die sich noch nie angemeldet haben';
$string['notenrolled'] = 'Nicht eingeschrieben';
$string['operator'] = 'Operator';
$string['or'] = 'ODER';
$string['pleaseselectcohort'] = 'Bitte wählen Sie eine Globale Gruppe aus';
$string['pleaseselectfield'] = 'Bitte wählen Sie ein Feld aus';
$string['pluginname'] = 'Dynamische Globale Gruppen';
$string['privacy:metadata:tool_dynamic_cohorts'] = 'Informationen zu Regeln, die von einem/einer Nutzer/in erstellt oder aktualisiert wurden';
$string['privacy:metadata:tool_dynamic_cohorts:name'] = 'Regelname';
$string['privacy:metadata:tool_dynamic_cohorts:usermodified'] = 'Die ID des/r Nutzers/in, der/die eine Regel erstellt oder aktualisiert hat';
$string['privacy:metadata:tool_dynamic_cohorts_c'] = 'Informationen zu Bedingungen, die von einem/einer Nutzer/in erstellt oder aktualisiert wurden';
$string['privacy:metadata:tool_dynamic_cohorts_c:ruleid'] = 'ID der Regel';
$string['privacy:metadata:tool_dynamic_cohorts_c:usermodified'] = 'Die ID des/der Nutzers/in, der/die eine Bedingung erstellt oder aktualisiert hat';
$string['processrulestask'] = 'Prozessdynamische Regeln für Globale Gruppen';
$string['profilefield'] = 'Profilfeld';
$string['realtime'] = 'Echtzeitverarbeitung';
$string['realtime_help'] = 'Wenn diese Option aktiviert ist, wird die Regel synchron als Teil des Ereignisses verarbeitet (sofern die Bedingungen das Auslösen des Ereignisses unterstützen). Seien Sie vorsichtig bei der Aktivierung, da eine lang andauernde Regelverarbeitung die Benutzeroberfläche blockiert.';
$string['realtimedisabledglobally'] = 'Echtzeitverarbeitung global deaktiviert';
$string['rule_entity'] = 'Dynamische Regel für Gloable Gruppen';
$string['rule_entity.bulkprocessing'] = 'Massenverarbeitung';
$string['rule_entity.description'] = 'Beschreibung';
$string['rule_entity.id'] = 'ID';
$string['rule_entity.name'] = 'Name';
$string['rule_entity.realtime'] = 'Echtzeitverarbeitung';
$string['rule_entity.status'] = 'Status';
$string['ruledeleted'] = 'Die Regel wurde gelöscht';
$string['ruledisabled'] = 'Die Regel wurde deaktiviert';
$string['ruledisabledpleasereview'] = 'Neu erstellte oder aktualisierte Regeln sind standardmäßig deaktiviert. Bitte überprüfen Sie die unten stehende Regel und aktivieren Sie sie, wenn Sie bereit sind.';
$string['ruleenabled'] = 'Die Regel wurde aktiviert';
$string['settings:realtime'] = 'Echtzeitverarbeitung';
$string['settings:realtime_desc'] = 'Wenn diese Option aktiviert ist, werden Regeln mit Bedingungen, die das Auslösen des Ereignisses unterstützen, synchron als Teil des Ereignisses verarbeitet. Seien Sie vorsichtig bei der Aktivierung, da eine lang andauernde Regelverarbeitung die Benutzeroberfläche blockiert.';
$string['settings:releasemembers'] = 'Mitglieder freigeben';
$string['settings:releasemembers_desc'] = 'Wenn diese Option aktiviert ist, werden alle Mitglieder aus einer Gruppe entfernt, sobald diese nicht mehr vom Plugin verwaltet wird (z. B. wenn eine Regel gelöscht oder die Gruppe für eine Regel geändert wird). <br/> Bitte beachten Sie: Es werden keine cohort_member_removed-Ereignisse ausgelöst, wenn Mitglieder aus einer Gruppe entfernt werden. Andernfalls wird die Regel über cron verarbeitet.';
$string['usercreated'] = 'Nutzer/in wurde erstellt';
$string['usercreatedin'] = 'Nutzer/innen, die in den letzten {$a} erstellt wurden';
$string['usercreatedtime'] = 'Nutzer/innen, die erstellt wurden {$a->operator} {$a->time}';
$string['userlastlogin'] = 'Letztes Nutzer-Login';
$string['usersforrule'] = 'Nutzer/innen, auf die die Regel "{$a->rule}" für die globale Gruppe "{$a->cohort}" zutrifft';
