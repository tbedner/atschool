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
 * Strings for component 'local_helpdesk', language 'de', version '4.4'.
 *
 * @package     local_helpdesk
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategory'] = 'Neue Kategorie hinzufügen';
$string['addticket'] = 'Ticket hinzufügen';
$string['attachment'] = 'Anlagen';
$string['avg_closing_time'] = 'Durchschnittliche Bearbeitungszeit';
$string['avg_first_response_time'] = 'Durchschnittliche erste Reaktionszeit';
$string['cancel'] = 'Abbrechen';
$string['categories'] = 'Ticketkategorien';
$string['categorieslist'] = 'Kategorieliste';
$string['category'] = 'Kategorie';
$string['category_role_description'] = 'Spezifische Rolle zur Steuerung des Nutzerzugriffs auf die Ticketverwaltung.';
$string['category_users_all'] = 'Alle Moodle-Nutzer/innen';
$string['category_users_info'] = 'Speichern Sie zunächst die Kategorie, bevor Sie Nutzer/innen bearbeiten.';
$string['category_users_responses'] = 'Nutzer/innen, die auf diese Kategorie geantwortet haben';
$string['category_users_title'] = 'Definiert die Nutzer/innen mit Antwortberechtigung und wer eine E-Mail über neue Tickets erhält';
$string['categoryadded'] = 'Kategorie erfolgreich hinzugefügt';
$string['categorycreated'] = 'Kategorie erfolgreich erstellt';
$string['categorydeleted'] = 'Kategorie erfolgreich gelöscht';
$string['categorydescription'] = 'Kategoriebeschreibung';
$string['categoryname'] = 'Kategoriename';
$string['categorynotfound'] = 'Kategorie nicht gefunden';
$string['categoryupdated'] = 'Kategorie erfolgreich aktualisiert';
$string['comments'] = 'Kommentare';
$string['confirmdelete'] = 'Möchten Sie diese Kategorie wirklich löschen?';
$string['confirmdeletecategory'] = 'Möchten Sie diese Kategorie wirklich löschen?';
$string['createcategory'] = 'Kategorie erstellen';
$string['createcategoryfirst'] = 'Erstellen Sie zunächst eine Kategorie';
$string['createticket'] = 'Ticket erstellen';
$string['deletecategory'] = 'Kategorie löschen';
$string['deletecategoryusedata'] = 'Diese Kategorie enthält Daten';
$string['deletesuccesscategory'] = 'Kategorie erfolgreich gelöscht';
$string['description'] = 'Beschreibung';
$string['editcategory'] = 'Kategorie bearbeiten';
$string['editticket'] = 'Ticket bearbeiten';
$string['error:emptyname'] = 'Der Kategoriename darf nicht leer sein';
$string['erroraddcategory'] = 'Fehler beim Hinzufügen der Kategorie';
$string['errordeletecategory'] = 'Fehler beim Löschen der Kategorie';
$string['errorinsertingcategory'] = 'Fehler beim Hinzufügen der Kategorie';
$string['errorinsertingticket'] = 'Fehler beim Einfügen des Tickets';
$string['errorupdatecategory'] = 'Fehler beim Aktualisieren der Kategorie';
$string['errorupdatingcategory'] = 'Fehler beim Aktualisieren der Kategorie';
$string['errorupdatingticket'] = 'Fehler beim Aktualisieren des Tickets';
$string['findcourse'] = 'Wählen Sie einen Kurs';
$string['findticket'] = 'Suche im Betreff und Text';
$string['finduser'] = 'Wählen Sie eine Person aus';
$string['geniai_btn_knowledgebase_create'] = 'Erstellen einer Wissensdatenbank mit KI';
$string['geniai_btn_response_create'] = 'Erstellen einer Antwort mit KI';
$string['geniai_create_knowledgebase_desc'] = 'Beschreiben Sie detailliert den Inhalt, den Sie generieren möchten. GeniAI verwendet diese Informationen, um einen präzisen und relevanten Text für Ihre Wissensdatenbank zu erstellen.';
$string['geniai_create_knowledgebase_message'] = 'Erstellen einer Nachricht basierend auf dem obigen Text.';
$string['geniai_create_response_desc'] = 'Beschreiben Sie, was Sie generieren möchten. GeniAI verwendet alle Konversationen als Grundlage für die Erstellung einer Antwort. Sie müssen jedoch definieren, welche Daten Sie schreiben möchten.';
$string['geniai_create_response_message'] = 'Erstellen einer Nachricht basierend auf dem obigen Text.';
$string['geniai_knowledgebase_prompt'] = 'Sie sind ein Chatbot, der sich auf die Erstellung von Wissensdatenbanken für Moodle spezialisiert hat. Ihr Ziel ist es, klare, gut strukturierte und ansprechende Inhalte in einem professionellen und überzeugenden Ich-Ton zu erstellen. Jede Antwort sollte detailliert und umfassend sein, damit alle Nutzer/innen die bereitgestellten Informationen leicht verstehen kann.

Erstellen Sie nun einen Wissensdatenbank-Artikel unter:
Moodle-Name: "{$a->site_fullname}"
Moodle-URL: "{$a->site_url}"
"{$a->message}"

Rückgabe nur in der Sprache "{$a->userlang}", ohne Titel und nur im MARKDOWN-Format.';
$string['geniai_like_message'] = 'Die Nachricht gefällt? Klicken Sie hier, um sie zu schließen und diese im Editor zu öffnen.';
$string['geniai_missing'] = 'Installieren und konfigurieren Sie das <a href="{$a}" target="_blank">GenIA</a>-Plugin, um KI-gestützte Antworten zu ermöglichen.';
$string['geniai_ticket_prompt_1'] = 'Du bist ein Chatbot, der Antworten auf Moodle-Tickets vorschlägt, um Kurs- oder Moodle-Probleme auf freundliche, lebendige und direkte Weise zu lösen.
Du antwortest gerne mit inspirierenden Nachrichten, vermeidest Listen und gibst detaillierte Erklärungen, wobei du großen Wert auf Details legst.

Nutzerfrage von {$a->userfullname}: "{$a->userticket}"

Erstelle nun eine Antwort, in der du erklärst, wie du das folgende Problem mithilfe der Support-Anleitung lösen kannst:
"{$a->message}"

Rückgabe nur in der Sprache "{$a->userlang}" und nur im MARKDOWN-Format.';
$string['geniai_ticket_prompt_2'] = 'Du bist ein Chatbot, der Antworten auf Moodle-Tickets vorschlägt, um Kurs- oder Moodle-Probleme auf freundliche, lebendige und direkte Weise zu lösen.
Du antwortest gerne mit inspirierenden Nachrichten, vermeidest Listen und gibst detaillierte Erklärungen, wobei du großen Wert auf Details legst.

Erstelle nun eine Antwort, die die Lösung des folgenden Problems erklärt:

Nutzerfrage von {$a->userfullname}: "{$a->userticket}"';
$string['geniai_ticket_prompt_3'] = 'Du bist ein Chatbot, der Antworten auf Moodle-Tickets vorschlägt, um Kurs- oder Moodle-Probleme auf fröhliche, lebendige und direkte Weise zu lösen.

Du antwortest gerne mit inspirierenden Nachrichten, vermeidest Listen und gibst detaillierte Erklärungen, wobei du großen Wert auf Details legst.

Erstelle nun basierend auf diesem Verlauf eine Antwort gemäß den Anweisungen des Supports:
"{$a->message}"

Rückgabe nur in der Sprache "{$a->userlang}" und nur im MARKDOWN-Format.';
$string['geniai_ticket_prompt_4'] = 'Du bist ein Chatbot, der Antworten auf Moodle-Tickets vorschlägt, um Kurs- oder Moodle-Probleme auf fröhliche, lebendige und persönliche Art zu lösen.

Du antwortest gerne mit inspirierenden Nachrichten, vermeidest Listen und gibst detaillierte Erklärungen, wobei du großen Wert auf Details legst.

Erstelle nun basierend auf diesem Verlauf eine Antwort und gib sie nur in der Sprache "{$a->userlang}" und nur im MARKDOWN-Format zurück.';
$string['geniai_title'] = 'Künstliche Intelligenz';
$string['helpdesk:categorydelete'] = 'Ermöglicht das Löschen von Kategorien.';
$string['helpdesk:categorymanage'] = 'Ermöglicht die Verwaltung der Helpdesk-Kategorien';
$string['helpdesk:knowledgebase_delete'] = 'Artikel in der Wissensdatenbank löschen';
$string['helpdesk:knowledgebase_manage'] = 'Artikel der Wissensdatenbank verwalten';
$string['helpdesk:knowledgebase_view'] = 'Artikel der Wissensdatenbank anzeigen';
$string['helpdesk:ticketmanage'] = 'Ermöglicht die Verwaltung des Helpdesks, einschließlich der Beantwortung und Schließung von Tickets.';
$string['helpdesk:view'] = 'Ermöglicht das Anzeigen und Erstellen von eigenen Helpdesk-Tickets.';
$string['helpdesk_manage_users'] = 'Nutzer/in mit der Berechtigung zum Verwalten dieser Rollenkategorie anzeigen';
$string['index_top_all_open_tickets'] = 'Alle offenen Tickets';
$string['index_top_completed_tickets'] = 'Abgeschlossene Tickets';
$string['index_top_unanswered_tickets'] = 'Unbeantwortete Tickets';
$string['index_top_urgent_tickets'] = 'Dringende Tickets';
$string['integracaoroot'] = 'Integration';
$string['invalidpriority'] = 'Ungültige Priorität ausgewählt.';
$string['knowledgebase_addnew'] = 'Neue Wissensdatenbank hinzufügen';
$string['knowledgebase_articlenotfound'] = 'Wissensdatenbank nicht gefunden';
$string['knowledgebase_category'] = 'Kategorie';
$string['knowledgebase_create'] = 'Wissensdatenbank erstellen';
$string['knowledgebase_delete'] = 'Wissensdatenbank löschen';
$string['knowledgebase_delete_confirm'] = 'Möchten Sie die Wissensdatenbank <strong>{$a}</strong> wirklich löschen?';
$string['knowledgebase_delete_success'] = 'Wissensdatenbank erfolgreich gelöscht';
$string['knowledgebase_description'] = 'Wissensinhalte';
$string['knowledgebase_edit'] = 'Wissensdatenbank bearbeiten';
$string['knowledgebase_name'] = 'Wissensdatenbank';
$string['knowledgebase_prompt_short'] = 'Eingabe zu kurz';
$string['knowledgebase_title'] = 'Wissenstitel';
$string['knowledgebase_update'] = 'Aktualisieren';
$string['lognewcategory'] = 'Kategorie geändert in <strong>{$a}</strong>!';
$string['lognewpriority'] = 'Priorität geändert auf <strong>{$a}</strong>!';
$string['lognewstatus'] = 'Status zu <strong>{$a}</strong> geändert!';
$string['lognowupdate'] = 'Keine Änderungen vorgenommen!';
$string['mailticket_create_message'] = '<p><strong>{[moodle.fullname]}</strong> >> <strong>{[event.helpdesk]}</strong> >> <strong>{[event.categorylink]}</strong> >> <strong>{[event.subjectlink]}</strong> - Ticket <strong>#{[event.tiketidlink]}</strong></p>
<p>Hallo {[to.fullname]},</p>
<p>{[from.fullname]} hat folgendes Ticket #{[event.tiketidlink]} erstellt:</p>
<blockquote style="border-left: 4px solid #9E9E9E;padding-left: 7px;">
{[event.text]}
{[event.attachment]}
</blockquote>
<p>Mit freundlichen Grüßen<br>
Support-Team</p>';
$string['mailticket_subject'] = '{[event.subjectname]} - Ticket: #{[event.tiketidname]}';
$string['mailticket_update_message'] = '<p><strong>{[moodle.fullname]}</strong> >> <strong>{[event.helpdesk]}</strong> >> <strong>{[event.categorylink]}</strong> >> <strong>{[event.subjectlink]}</strong> - Ticket <strong>#{[event.tiketidlink]}</strong></p>
<p>Hallo {[to.fullname]},</p>
<p>Unser Team hat Ihren Fall geprüft und neue Informationen hinzugefügt:</p>
<blockquote style="border-left: 4px solid #9E9E9E;padding-left: 7px;">
{[event.text]}
{[event.attachment]}
</blockquote>
<p>Bitte rufen Sie das Ticket #{[event.tiketidlink]} auf, um die Aktualisierung anzuzeigen und gegebenenfalls weitere Details anzugeben. Wir stehen Ihnen weiterhin zur Verfügung und beantworten Ihre Anfrage schnellstmöglich.</p>
<p>Mit freundlichen Grüßen<br>
Support-Team</p>';
$string['mailticket_user_message'] = '<p><strong>{[moodle.fullname]}</strong> >> <strong>{[event.tiketidlink]}</strong> >> <strong>{[event.categorylink]}</strong> >> <strong>{[event.subjectlink]}</strong> - Ticket <strong>#{[event.tiketidlink]}</strong></p>
<p>Hallo {[to.fullname]},</p>
<p>Wir haben Ihre Anfrage erhalten:</p>
<blockquote style="border-left: 4px solid #9E9E9E;padding-left: 7px;">
{[event.text]}
{[event.attachment]}
</blockquote>
<p>Falls noch nicht geschehen, können Sie Ihrem Ticket #{[event.tiketidlink]} weitere Details hinzufügen, z.B. Protokolle, Fehlermeldungen, Screenshots, Schritt-für-Schritt-Beschreibungen oder Replikationsschritte, die den Support-Mitarbeiter/innen effektiver helfen können.</p>
<p>Unser Team wird Ihr Problem baldmöglichst analysieren und wird sich bei Bedarf melden. Wir danken Ihnen für Ihre Geduld und Ihr Verständnis.</p>
<p>Mit freundlichen Grüßen,<br>
Support-Team</p>';
$string['markticketasclosed'] = 'Ticket als geschlossen markieren';
$string['markticketasresolved'] = 'Ticket als gelöst markieren';
$string['pluginname'] = 'Helpdesk';
$string['priority'] = 'Priorität';
$string['priority_high'] = 'Hoch';
$string['priority_low'] = 'Niedrg';
$string['priority_medium'] = 'Normal';
$string['priority_urgent'] = 'Dringend';
$string['privacy:metadata:category_user_userid'] = 'Eindeutige Kennung der Person, die einer bestimmten Kategorie im Support-Ticket-System zugewiesen ist.';
$string['privacy:metadata:local_helpdesk_category_user'] = 'Informationen zu Nutzer/innen, die zu Organisations- und Verwaltungszwecken Ticketkategorien zugewiesen sind.';
$string['privacy:metadata:local_helpdesk_response'] = 'Informationen zu den Antworten auf Tickets, einschließlich des Inhalts der Antwort und der dafür verantwortlichen Person.';
$string['privacy:metadata:local_helpdesk_ticket'] = 'Informationen zu den im System erstellten Tickets, einschließlich Benutzerdaten, Kategorie, Status und Antwortverlauf.';
$string['privacy:metadata:response_userid'] = 'Eindeutige Kennung der Person, die im Helpdesk-System auf ein Ticket geantwortet hat.';
$string['privacy:metadata:ticket_userid'] = 'Eindeutige Kennung der Person, die ein Ticket im Helpdesk-System erstellt oder verwaltet hat.';
$string['replytoticket'] = 'Auf Ticket antworten';
$string['report_assignment_reports_page_description'] = 'Bericht über die Ticketverteilung und Leistung der zugewiesenen Agenten.';
$string['report_assignment_reports_page_title'] = 'Zuordnungsberichte';
$string['report_assignment_reports_tickets_by_agent_cat_title'] = 'Tickets per Agent';
$string['report_category_reports_most_demanded_categories_cat_title'] = 'Die gefragtesten Kategorien';
$string['report_category_reports_page_description'] = 'Berichten Sie über Ticketkategorien und helfen Sie so, die am häufigsten auftretenden Supportbereiche und Probleme zu identifizieren.';
$string['report_category_reports_page_title'] = 'Kategorieberichte';
$string['report_general_reports_avg_resolution_time_avg_resolution_time_hours'] = 'Durchschnittliche Antwortzeit';
$string['report_general_reports_avg_resolution_time_total_tickets'] = 'Tickets gesamt';
$string['report_general_reports_page_title'] = 'Allgemeine Berichte';
$string['report_general_reports_tickets_created_by_period_cat_title'] = 'Tickets erstellt nach Zeitraum';
$string['report_general_reports_tickets_created_by_period_data_criacao'] = 'Erstellungsdatum';
$string['report_general_reports_tickets_created_by_period_total_tickets'] = 'Tickets gesamt';
$string['report_general_reports_tickets_resolved_by_period_cat_title'] = 'Gelöste Tickets nach Zeitraum';
$string['report_general_reports_tickets_resolved_by_period_period'] = 'Zeitraum';
$string['report_general_reports_tickets_resolved_by_period_total_resolved'] = 'Gesamtzahl der gelösten Tickets';
$string['report_response_reports_avg_responses_per_ticket_media_respostas_por_ticket'] = 'Durchschnittliche Antworten';
$string['report_response_reports_page_description'] = 'Bericht über die Antworten auf Tickets, einschließlich Antwortzeit und Agenteninteraktionen.';
$string['report_response_reports_page_title'] = 'Antwortberichte';
$string['report_status_priority_reports_page_description'] = 'Bericht über Ticketstatus und -priorität, einschließlich Daten zu offenen, laufenden, gelösten und geschlossenen Tickets.';
$string['report_status_priority_reports_page_title'] = 'Status- und Prioritätsberichte';
$string['report_status_priority_reports_priority_distribution_cat_title'] = 'Prioritätsverteilung';
$string['report_status_priority_reports_tickets_by_status_cat_title'] = 'Tickets nach Status';
$string['report_tickets_reports_page_description'] = 'Tickets berichten über offene und geschlossene Tickets und bieten einen Überblick über die Leistung des Kundenservicesystems.';
$string['report_tickets_reports_page_title'] = 'Tickets';
$string['report_user_reports_avg_response_time_by_user_userid'] = 'Benutzer-ID';
$string['report_user_reports_page_description'] = 'Bericht über die Nutzer/innen, die die meisten Tickets erstellt haben, einschließlich Daten zur Anzahl der Tickets und der zugehörigen Antwortzeit.';
$string['report_user_reports_page_title'] = 'Nutzerberichte';
$string['report_user_reports_users_with_most_tickets_open_cat_title'] = 'Nutzer/innen mit den meisten geöffneten Tickets';
$string['savecategory'] = 'Kategorie speichern';
$string['savechanges'] = 'Änderungen speichern';
$string['setting_course'] = 'Nur innerhalb des Kurses anzeigen';
$string['setting_knowledgebase_menu_description'] = 'Aktivieren Sie diese Option, um den Link zur Wissensdatenbank im Navigationsmenü anzuzeigen.';
$string['setting_knowledgebase_menu_title'] = 'Wissensdatenbank im Menü anzeigen';
$string['setting_menu_description'] = 'Wählen Sie aus, ob das HelpDesk-Menü im Systemmenü oben in Moodle angezeigt werden soll.';
$string['setting_menu_title'] = 'Im Menü anzeigen';
$string['setting_none'] = 'Nicht anzeigen';
$string['setting_system'] = 'Im gesamten System anzeigen';
$string['status'] = 'Status';
$string['status_all'] = 'Alle Tickets';
$string['status_closed'] = 'Geschlossen';
$string['status_open'] = 'Offen';
$string['status_progress'] = 'In Arbeit';
$string['status_resolved'] = 'Gelöst';
$string['subject'] = 'Thema';
$string['ticketcategory'] = 'Ticketkategorie';
$string['ticketcategoryshort'] = 'Kategorie';
$string['ticketclosed'] = 'Das Ticket ist geschlossen.';
$string['ticketcreated'] = 'Ticket erfolgreich erstellt';
$string['ticketcreatedat'] = 'Erstellt am';
$string['ticketdescription'] = 'Detaillierte Ticketbeschreibung';
$string['ticketid'] = 'Ticket';
$string['ticketmessage'] = 'Nachricht';
$string['ticketnotfound'] = 'Ticket nicht gefunden';
$string['ticketpriority'] = 'Ticketpriorität';
$string['ticketpriorityhigh'] = 'Hoch';
$string['ticketprioritylow'] = 'Niedrig';
$string['ticketprioritymedium'] = 'Normal';
$string['ticketpriorityshort'] = 'Priorität';
$string['ticketpriorityurgent'] = 'Dringend';
$string['ticketresponse'] = 'Ticket beantworten';
$string['ticketresponseandclose'] = 'Ticket beantworten und abschließen';
$string['ticketresponseandresolved'] = 'Ticket beantworten und als Gelöst markieren';
$string['tickets'] = 'Alle Tickets';
$string['ticketslist'] = 'Ticketliste';
$string['ticketstatus'] = 'Ticketstatus';
$string['ticketstatusclosed'] = 'Geschlossen';
$string['ticketstatusinprogress'] = 'In Arbeit';
$string['ticketstatusnotclosed'] = 'Alle außer Geschlossene';
$string['ticketstatusopen'] = 'Offen';
$string['ticketstatusresolved'] = 'Gelöst';
$string['ticketstatusshort'] = 'Status';
$string['ticketsubject'] = 'Ticketbetreff';
$string['ticketupdated'] = 'Ticket erfolgreich aktualisiert';
$string['updatecategory'] = 'Kategorie aktualisieren';
$string['userid'] = 'Nutzer-ID';
$string['viewticket'] = 'Ticket anzeigen';
