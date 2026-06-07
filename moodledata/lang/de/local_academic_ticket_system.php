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
 * Strings for component 'local_academic_ticket_system', language 'de', version '4.4'.
 *
 * @package     local_academic_ticket_system
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['academic_ticket_system:addcategory'] = 'Berechtigung zum Hinzufügen neuer Kategorien';
$string['academic_ticket_system:addticket'] = 'Berechtigung zum Erstellen neuer Tickets (Teilnehmer/in)';
$string['academic_ticket_system:download'] = 'Berechtigung zum Herunterladen von Ticketanhängen';
$string['academic_ticket_system:manageticket'] = 'Berechtigung zur Verwaltung/Zuweisung aller Tickets (Administrator/in bzw. Mitarbeiter/in)';
$string['academic_ticket_system:viewownoverviews'] = 'Eigenes Aktivitäts-Dashboard anzeigen';
$string['academic_ticket_system:viewticket'] = 'Berechtigung zum Einsehen der Ticketdetails';
$string['action_needed_hint'] = 'Die Mitarbeiter/innen haben geantwortet. Bitte reagieren Sie.';
$string['actions'] = 'Aktionen';
$string['add_department'] = 'Abteilungen';
$string['add_new_department'] = 'Neue Abteilung hinzufügen';
$string['add_reply_heading'] = 'Schreiben Sie Ihre Antwort';
$string['add_ticket'] = 'Neues Ticket hinzufügen';
$string['add_to_navbar'] = 'Zur Navigationsleiste hinzufügen';
$string['add_to_navbar_desc'] = 'Falls diese Option aktiviert ist, wird dem Hauptnavigationsmenü ein Link zum Ticketsystem hinzugefügt.';
$string['admin_alert_body'] = '<div style="padding: 15px; border-left: 5px solid #ef4444; background-color: #fef2f2;">
    <h3 style="margin-top:0; color: #b91c1c;">🚨 Dringendes Ticket erhalten</h3>
    <p><strong>Teilnehmer/in:</strong> {$a->firstname}</p>
    <p><strong>Titel:</strong> {$a->title}</p>
    <p><strong>Kategorie:</strong> {$a->category}</p>
    <hr style="border:0; border-top:1px solid #fee2e2; margin: 10px 0;">
    <a href="{$a->url}" style="background-color: #dc2626; color: white; padding: 8px 15px; text-decoration: none; border-radius: 5px; display: inline-block;">
        Ticket jetzt ansehen
    </a>
</div>';
$string['admin_alert_subject'] = '🚨 DRINGEND: Neues Ticket #{$a->id} - {$a->title}';
$string['admin_only_label'] = 'administrative Bedienelemente';
$string['all_rights_reserved'] = 'Alle Rechte vorbehalten';
$string['all_tickets'] = 'Alle Academic Tickets';
$string['all_tickets_stats'] = 'Übersicht der gesamten Tickets';
$string['assign_user'] = 'Spezialist/in zuweisen';
$string['assign_user_label'] = 'An Spezialist/in zugewiesen';
$string['assigned_to'] = 'Zugewiesene/r Spezialist/in';
$string['assigned_to_label'] = 'Zugewiesen an';
$string['assigned_user'] = 'Zugewiesen an';
$string['attach_files_optional'] = 'Anlagen (optional)';
$string['attachments'] = 'Anlagen';
$string['attachments_heading'] = 'Originalanhänge';
$string['attention_required'] = 'Aufmerksamkeit erforderlich';
$string['awaiting_me_label'] = 'Warten auf meine Handlung';
$string['back_to_home'] = 'zurück zur Startseite';
$string['cancel'] = 'stornieren';
$string['category'] = 'Kategorie';
$string['category_title'] = 'Abteilung';
$string['change_category_label'] = 'Abteilung wechseln';
$string['change_status_label'] = 'Aktualisierungsstatus';
$string['click_to_record'] = 'Klicken Sie auf das Mikrofon, um die Aufnahme zu starten';
$string['click_to_upload'] = 'Klicken Sie hier, um Dateien von Ihrem Gerät auszuwählen';
$string['closed_label'] = 'Geschlossen';
$string['copyright_label'] = 'Alle Rechte vorbehalten';
$string['create_ticket'] = 'Ticket erstellen';
$string['created_at'] = 'Erstellungsdatum';
$string['created_by'] = 'Erstellt von';
$string['creation_failed'] = 'Die Kategorie konnte nicht erstellt werden. Bitte versuchen Sie es erneut.';
$string['current_year_label'] = 'Aktuelles Jahr';
$string['default_email_placeholder'] = 'noreply@deinemoodleseite.com';
$string['department'] = 'Abteilung';
$string['department_created'] = 'Abteilung erfolgreich erstellt';
$string['department_deleted'] = 'Abteilung erfolgreich gelöscht';
$string['department_updated'] = 'Abteilung erfolgreich aktualisiert';
$string['description'] = 'Beschreibung';
$string['description_placeholder'] = 'Erläutern Sie bitt das Problem detailliert ...';
$string['drag_drop_hint'] = 'Dateien per Drag & Drop hierher ziehen oder zum Hochladen klicken';
$string['email_confirm_body'] = '<div style="background-color: #f3f4f6; padding: 40px 0; font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif; color: #374151;">
    <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.05); border: 1px solid #e5e7eb;">
        <div style="background: linear-gradient(135deg, #4f46e5 0%, #3b82f6 100%); padding: 32px; text-align: center;">
            <h1 style="color: #ffffff; margin: 0; font-size: 24px; font-weight: 800; letter-spacing: -0.5px;">Ticket erhalten!</h1>
            <p style="color: #e0e7ff; margin: 8px 0 0 0; font-size: 15px; font-weight: 500;">Wir prüfen Ihre Anfrage.</p>
        </div>
        <div style="padding: 40px 30px;">
            <p style="font-size: 16px; margin-bottom: 24px; color: #111827;">Hi <strong>{$a->firstname}</strong>,</p>
            <p style="line-height: 1.6; color: #4b5563; margin-bottom: 30px;">
                Vielen Dank für Ihre Anfrage. Ein neues Support-Ticket wurde erfolgreich erstellt. Unser Support-Team wird die Details prüfen und sich in Kürze bei Ihnen melden.
            </p>
            <div style="background-color: #f9fafb; border: 1px solid #e5e7eb; border-radius: 12px; padding: 24px; margin-bottom: 32px;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="padding: 8px 0; color: #6b7280; font-size: 12px; text-transform: uppercase; font-weight: 700; letter-spacing: 0.5px;">Ticket ID</td>
                        <td style="padding: 8px 0; color: #111827; font-weight: 700; text-align: right; font-family: monospace; font-size: 14px;">#{$a->id}</td>
                    </tr>
                    <tr style="border-top: 1px dashed #e5e7eb;">
                        <td style="padding: 12px 0 8px; color: #6b7280; font-size: 12px; text-transform: uppercase; font-weight: 700; letter-spacing: 0.5px;">Titel</td>
                        <td style="padding: 12px 0 8px; color: #111827; text-align: right; font-weight: 600;">{$a->title}</td>
                    </tr>
                    <tr style="border-top: 1px dashed #e5e7eb;">
                        <td style="padding: 12px 0 8px; color: #6b7280; font-size: 12px; text-transform: uppercase; font-weight: 700; letter-spacing: 0.5px;">Kategorie</td>
                        <td style="padding: 12px 0 8px; color: #111827; text-align: right;">{$a->category}</td>
                    </tr>
                    <tr style="border-top: 1px dashed #e5e7eb;">
                        <td style="padding: 12px 0 8px; color: #6b7280; font-size: 12px; text-transform: uppercase; font-weight: 700; letter-spacing: 0.5px;">Datum</td>
                        <td style="padding: 12px 0 8px; color: #111827; text-align: right;">{$a->date}</td>
                    </tr>
                    <tr style="border-top: 1px dashed #e5e7eb;">
                        <td style="padding: 12px 0 0; color: #6b7280; font-size: 12px; text-transform: uppercase; font-weight: 700; letter-spacing: 0.5px;">Status</td>
                        <td style="padding: 12px 0 0; text-align: right;">
                            <span style="background-color: #dbeafe; color: #1e40af; padding: 4px 12px; border-radius: 9999px; font-size: 11px; font-weight: 800; text-transform: uppercase;">{$a->status}</span>
                        </td>
                    </tr>
                </table>
            </div>
            <div style="text-align: center;">
                <a href="{$a->url}" style="display: inline-block; background: linear-gradient(to right, #4f46e5, #3b82f6); color: #ffffff; text-decoration: none; padding: 14px 36px; border-radius: 10px; font-weight: 700; font-size: 16px; box-shadow: 0 4px 15px rgba(59, 130, 246, 0.4); transition: all 0.3s ease;">
                    Ticketdetails anzeigen
                </a>
            </div>
            <p style="text-align: center; font-size: 12px; color: #9ca3af; margin-top: 24px;">
                Alternativ können Sie diesen Link kopieren: <br>
                <a href="{$a->url}" style="color: #6b7280; text-decoration: none;">{$a->url}</a>
            </p>
        </div>
        <div style="background-color: #f9fafb; padding: 24px; text-align: center; border-top: 1px solid #e5e7eb;">
            <p style="color: #9ca3af; font-size: 12px; margin: 0 0 8px;">
                Dies ist eine automatische Nachricht. Bitte antworten Sie nicht direkt auf diese E-Mail.
            </p>
            <p style="color: #d1d5db; font-size: 11px; margin: 0; font-weight: 600; text-transform: uppercase;">
                Powered by {$a->site} Support System
            </p>
        </div>
    </div>
</div>';
$string['email_confirm_body_plain'] = 'Hallo {$a->firstname},
wir haben Ihr Ticket mit der ID {$a->id} bezüglich "{$a->title}" erhalten.
Aktueller Status: {$a->status}
Sie können den Status Ihres Tickets hier verfolgen:
{$a->url}
Viele Grüße,
{$a->site} Support-Team';
$string['email_confirm_subject'] = '✔ [Ticket #{$a->id}] Wir haben Ihre Anfrage erhalten: {$a->title}';
$string['enable'] = 'System aktivieren';
$string['enable_desc'] = 'Wenn diese Option aktiviert ist, können Nutzer/innen Tickets erstellen und anzeigen.';
$string['error'] = 'Fehler!';
$string['filesselected'] = '{$a} Dateien ausgewählt';
$string['form_instruction'] = 'Wir helfen Ihnen gerne weiter. Füllen Sie bitte das untenstehende Formular aus.';
$string['happy_to_help_hint'] = 'Ihr Problem wurde erfolgreich gelöst.';
$string['header_subtitle'] = 'Wir sind heute für Sie da 🌟';
$string['id'] = 'ID';
$string['internal_note_placeholder'] = 'Hinterlassen Sie eine Nachricht für Ihre Kolleg/innen...';
$string['internal_notes_heading'] = 'Interne Teamnotizen';
$string['ip_address'] = 'IP-Adresse';
$string['live_stats_heading'] = 'Live Statistik Dashboard';
$string['log_assigned'] = 'Ticket zugewiesen an: {$a}';
$string['log_category_changed'] = 'Kategorie geändert in: {$a}';
$string['log_feedback_submitted'] = 'Eingereichtes Feedback mit Bewertung: {$a} Sterne';
$string['log_internal_note_added'] = 'Interne Notiz hinzugefügt';
$string['log_replied'] = 'Neue Antwort hinzugefügt';
$string['log_status_changed'] = 'Nutzer/in {$a->user} hat den Status von {$a->old} auf {$a->new} geändert.';
$string['log_status_changed_from_to'] = 'Nutzer/in {$a->user} hat den Status von "{$a->old}" auf "{$a->new}" geändert.';
$string['messageprovider:admin_urgent_alert'] = 'Administratorwarnung: Dringende Ticketbenachrichtigung';
$string['messageprovider:ticket_confirmation'] = 'Bestätigung der Ticketeinreichung';
$string['my_summary_heading'] = 'Übersicht über meine Aktivitäten';
$string['my_tickets_desc'] = 'Verfolgen und verwalten Sie alle Ihre Supportanfragen.';
$string['my_tickets_label'] = 'Meine eingereichten Tickets';
$string['next'] = 'Weiter';
$string['no_internal_notes'] = 'Noch keine internen Notizen.';
$string['no_replies_hint'] = 'Seien Sie die Person, die eine Antwort oder Anfrage hinzufügt.';
$string['no_replies_message'] = 'Für dieses Ticket wurden noch keine Antworten gefunden.';
$string['no_tickets_desc'] = 'Sie haben noch keine Tickets erstellt.';
$string['no_tickets_message'] = 'Sie haben noch keine Supportanfrage gestellt. Benötigen Sie Hilfe? Erstellen Sie eine neue Anfrage, und unser Team kümmert sich darum.';
$string['no_tickets_title'] = 'Keine Tickets gefunden';
$string['nopermission'] = 'Zugriff verweigert';
$string['nopermission_desc'] = 'Entschuldigen Sie bitte, aber Sie haben kein Recht, dieses Ticket einzusehen.';
$string['of'] = 'von';
$string['open_label'] = 'Offen';
$string['pluginname'] = 'Academic Ticket System';
$string['previous'] = 'Zurück';
$string['primary_color'] = 'Primärfarbe';
$string['primary_color_desc'] = 'Die Hauptfarbe wird für Schaltflächen, Überschriften und das primäre Branding verwendet.';
$string['priority'] = 'Wichtigkeit';
$string['priority_high'] = 'Hoch';
$string['priority_low'] = 'Niedrig';
$string['priority_medium'] = 'Mittel';
$string['priority_urgent'] = 'Dringend';
$string['privacy:metadata:presence'] = 'Temporärer Speicher für die Echtzeitanzeige.';
$string['privacy:metadata:presence:ticketid'] = 'Die ID des angezeigten Tickets.';
$string['privacy:metadata:presence:timemodified'] = 'Die Nutzeranwesenheit wurde das letzte Mal aktualisiert.';
$string['privacy:metadata:presence:userid'] = 'Die ID der Person, die sich gerade ein Ticket ansieht.';
$string['privacy:metadata:tickets'] = 'Speicher für von Nutzer/innen erstellte Support-Tickets.';
$string['privacy:metadata:tickets:content'] = 'Der vollständige Inhalt und die Beschreibung des Tickets.';
$string['privacy:metadata:tickets:created_at'] = 'Der Zeitstempel, wann das Ticket geöffnet wurde.';
$string['privacy:metadata:tickets:title'] = 'Tickettitel';
$string['privacy:metadata:tickets:userid'] = 'Die ID der Person, die das Ticket erstellt hat.';
$string['quick_tip_label'] = 'Kurzer Tipp';
$string['recent_tickets_heading'] = 'Aktuelle Tickets von Teilnehmer/innen';
$string['record_voice_note'] = 'Sprachnotiz (Barrierefreiheit)';
$string['recording_finished'] = 'Sprachnotiz erfolgreich aufgezeichnet';
$string['recording_now'] = 'Aufnahme... Klicken Sie auf Stopp, wenn die Aufnahme beendet ist.';
$string['reopen_ticket_button'] = 'Ticket erneut öffnen';
$string['replies_heading'] = 'Diskussionsverlauf';
$string['resolved_label'] = 'Gelöst';
$string['return_home'] = 'Zurück zur Liste';
$string['search_placeholder'] = 'Suche mittels ID oder Titel...';
$string['secondary_color'] = 'Sekundärfarbe';
$string['secondary_color_desc'] = 'Wird für Farbverläufe, Akzente und sekundäre UI-Elemente verwendet.';
$string['select_department_hint'] = '-- Abteilung auswählen --';
$string['select_priority_hint'] = 'Wählen Sie die Wichtigkeit';
$string['send_reply_button'] = 'Antwort und Dateien verschicken';
$string['send_ticket'] = 'Ticket versenden';
$string['sending'] = 'Senden...';
$string['showing'] = 'Anzeigen';
$string['sorry_no_ticket'] = 'Keine Tickets gefunden';
$string['start_new_ticket_btn'] = 'Erstellen Sie Ihr erstes Ticket';
$string['start_recording'] = 'Starten Sie die Sprachaufnahme';
$string['start_reply'] = 'Starten Sie das Gespräch unten!';
$string['status'] = 'Ticketstatus';
$string['status_admin_reply'] = 'Administrator/in hat geantwortet';
$string['status_adminreply'] = 'Antwort von Administrator/in';
$string['status_assigned'] = 'Dem/der Spezialist/in zugewiesen';
$string['status_closed'] = 'geschlossen';
$string['status_in_progress'] = 'in Bearbeitung';
$string['status_open'] = 'geöffnet';
$string['status_pending'] = 'anhängig';
$string['status_resolved'] = 'gelöst';
$string['status_student_reply'] = 'Teilnehmer/in hat geantwortet';
$string['status_studentreply'] = 'Antwort von Teilnehmer/in';
$string['status_urgent'] = 'Dringend';
$string['stop_recording'] = 'Sprachaufzeichnung stoppen';
$string['student_dashboard_tip'] = 'Um Ihnen schnellstmöglich helfen zu können, antworten Sie bitte innerhalb von 12 Stunden. Tickets, auf denen12 Stunden lang keine Aktivität stattfand, werden automatisch geschlossen.';
$string['submit'] = 'Einreichen';
$string['success'] = 'Erfolgreich!';
$string['support_email'] = 'Support-E-Mail';
$string['support_email_desc'] = 'Die E-Mail-Adresse, die Teilnehmer/innen für die direkte Kontaktaufnahme oder Benachrichtigungen angezeigt wird.';
$string['system_name'] = 'Name der ersten Abteilung';
$string['system_name_desc'] = 'Dies ist der Standardname für die erste Abteilung. Sie können ihn später umbenennen oder weitere Abteilungen verwalten, indem Sie auf den Bereich „Abteilungen“ klicken.';
$string['ticket_department_label'] = 'Abteilung';
$string['ticket_description_label'] = 'Problembeschreibung';
$string['ticket_details_heading'] = 'Ticket Details';
$string['ticket_id_label'] = 'Ticket-Referenz-ID';
$string['ticket_log'] = 'Aktivitätszeitleiste';
$string['ticket_priority_label'] = 'Ticketpriorität';
$string['ticket_status_label'] = 'aktueller Status';
$string['ticket_title'] = 'Titel des Tickets';
$string['ticket_title_help'] = 'Geben Sie einen kurzen und aussagekräftigen Titel für Ihre Supportanfrage ein.';
$string['ticket_title_label'] = 'Titel des Tickets';
$string['tickets_count'] = 'Tickets';
$string['ticketsystem'] = 'Ticketsystem';
$string['title'] = 'Betreff';
$string['title_placeholder'] = 'z.B. ich kann nicht auf den Kurs zugreifen...';
$string['to'] = 'an';
$string['tooltip_category_hint'] = 'Wählen Sie die Abteilung aus, die für dieses Problem zuständig ist.';
$string['tooltip_desc_hint'] = 'Bitte geben Sie alle Details an (Schritte zur Reproduktion, Fehler, usw.).';
$string['tooltip_priority_hint'] = 'Wählen Sie aus, wie dringend Ihre Anfrage ist';
$string['tooltip_title_hint'] = 'Geben Sie Ihrem Ticket einen klaren, kurzen Namen';
$string['tooltip_upload_hint'] = 'Laden Sie Screenshots oder Log-Daten hoch (maximal 5 MB)';
$string['tooltip_voice_hint'] = 'Ideal für komplexe Sachverhalte – maximal 2 Minuten';
$string['total'] = 'Gesamtzahl';
$string['total_tickets_label'] = 'Gesamtzahl der Tickets';
$string['unassigned'] = 'Nicht zugewiesen';
$string['under_review_label'] = 'Wird überprüft';
$string['update_category_button'] = 'Abteilung aktualisieren';
$string['update_status_button'] = 'Änderungen speichern';
$string['user_name_label'] = 'Eingereicht von';
$string['view'] = 'Details anzeigen';
$string['view_ticket'] = 'Ticket ansehen';
$string['viewticket'] = 'Ticket ansehen';
$string['we_are_working_hint'] = 'Wir prüfen derzeit Ihre Anfrage.';
$string['welcome_message'] = 'Willkommen beim Academic Support System';
$string['write_your_reply'] = 'Schreiben Sie Ihre Antwort ...';
