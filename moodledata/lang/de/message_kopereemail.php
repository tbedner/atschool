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
 * Strings for component 'message_kopereemail', language 'de', version '4.4'.
 *
 * @package     message_kopereemail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action_create'] = 'Nutzerdefinierte Nachricht erstellen';
$string['action_delete'] = 'Nutzerdefinierte Nachricht löschen';
$string['action_edit'] = 'Nutzerdefinierte Nachricht bearbeiten';
$string['action_export'] = 'JSON exportieren';
$string['action_import'] = 'JSON importieren';
$string['action_preview'] = 'Vorlagen';
$string['action_preview_click'] = 'Klicken Sie hier, um eine E-Mail mit diesem Vorlagentest zu erhalten';
$string['action_preview_success'] = 'E-Mail erfolgreich gesendet. Bitte prüfen Sie Ihren Posteingang oder den Spam-Ordner.';
$string['export_filename_prefix'] = 'kopereemail-templates';
$string['export_title'] = 'Vorlagen exportieren';
$string['import_file'] = 'JSON-Datei';
$string['import_file_help'] = 'Wählen Sie das aus der anderen Umgebung exportierte JSON aus.';
$string['import_invalid_json'] = 'Ungültige Datei: fehlerhaftes JSON.';
$string['import_invalid_payload'] = 'Ungültige Datei: Exportstruktur stimmt nicht überein.';
$string['import_overwrite'] = 'Vorhandene Vorlagen überschreiben';
$string['import_overwrite_help'] = 'Wenn aktiviert, werden vorhandene Vorlagen aktualisiert. Wenn deaktiviert, werden vorhandene Vorlagen ignoriert.';
$string['import_success'] = 'Import abgeschlossen.<br>&amp;nbsp;&amp;gt; <strong>Importiert:</strong> {$a->imported}<br>&amp;nbsp;&amp;gt; <strong>Übersprungen:</strong> {$a->skipped}<br>&amp;nbsp;&amp;gt; <strong>Wrapper aktualisiert:</strong> {$a->wrapper}.';
$string['import_title'] = 'Vorlagen importieren';
$string['import_wrapper'] = 'HTML-Wrapper importieren (Basistemplate)';
$string['import_wrapper_help'] = 'Wenn aktiviert, ersetzt der JSON-HTML-Wrapper den in dieser Umgebung konfigurierten Wrapper.';
$string['messages'] = 'Nachrichten';
$string['placeholders_course_data_desc'] = 'Kursdaten (sofern erkennbar).';
$string['placeholders_course_url_desc'] = 'Kurs-URL (sofern erkennbar).';
$string['placeholders_dates_now_desc'] = 'Aktuelles Datum/Uhrzeit (userdate).';
$string['placeholders_desc'] = 'Sie können Mustache-Platzhalter in der Nachricht verwenden.';
$string['placeholders_fullmessage_desc'] = 'Textnachricht.';
$string['placeholders_fullmessagehtml_desc'] = 'HTML-Nachricht (verwenden Sie dreifache Klammern).';
$string['placeholders_site_fullname_desc'] = 'Vollständiger Website-Name (<code>{$SITE->fullname}</code>).';
$string['placeholders_site_logourl_desc'] = 'Website-Logo (<img src="{$a->logo_url}" style="max-width:70px;max-height:70px;">).';
$string['placeholders_site_shortname_desc'] = 'Kurzer Website-Name (<code>{$SITE->shortname}</code>).';
$string['placeholders_site_url_desc'] = 'Website-URL (<code>{$CFG->wwwroot}</code>).';
$string['placeholders_subject_desc'] = 'Aktueller Benachrichtigungsbetreff.';
$string['placeholders_title'] = 'Verfügbare Platzhalter';
$string['placeholders_userfrom_data_desc'] = 'Absenderdaten.';
$string['placeholders_userto_data_desc'] = 'Empfängerdaten.';
$string['pluginname'] = 'Kopere Email';
$string['privacy:metadata:attachment'] = 'Im Dateisystem angehängte Datei.';
$string['privacy:metadata:attachname'] = 'Name des Anhangs.';
$string['privacy:metadata:externalpurpose'] = 'Externer Zweck';
$string['privacy:metadata:fullmessage'] = 'Textnachricht.';
$string['privacy:metadata:fullmessagehtml'] = 'HTML-Nachricht.';
$string['privacy:metadata:recipient'] = 'E-Mail-Empfänger.';
$string['privacy:metadata:replyto'] = 'Antwort-an-E-Mail.';
$string['privacy:metadata:replytoname'] = 'Antwort-an-Name.';
$string['privacy:metadata:subject'] = 'E-Mail-Betreff.';
$string['privacy:metadata:userfrom'] = 'E-Mail-Absender.';
$string['settings_customtemplates'] = 'Nutzerdefinierte Nachrichten pro Anbieter';
$string['settings_customtemplates_desc'] = 'Für jeden Benachrichtigungsanbieter eine nutzerdefinierte Nachricht erstellen/bearbeiten.';
$string['settings_wrapper'] = 'E-Mail-Basistemplate (Wrapper)';
$string['settings_wrapper_desc'] = 'Dieses HTML ist in Mustache formatiert und wird als Nachrichtenvorlage verwendet, die an den Teilnehmer/innen gesendet wird. Der HTML-Inhalt sollte dort eingefügt werden, wo {{{fullmessagehtml}}} steht.';
$string['table_actions'] = 'Aktionen';
$string['table_component'] = 'Komponente';
$string['table_name'] = 'Name';
$string['table_provider'] = 'Anbieter';
$string['template'] = 'Vorlage';
$string['template_changue'] = 'Ich möchte diese Vorlage als Standard für Kopere Mail verwenden';
$string['template_changued'] = 'Vorlage erfolgreich aktualisiert';
$string['template_delete_confirm'] = 'Möchten Sie die nutzerdefinierte Nachricht für diesen Anbieter wirklich löschen?';
$string['template_delete_title'] = 'Nutzerdefinierte Nachricht löschen';
$string['template_deleted'] = 'Nutzerdefinierte Nachricht gelöscht.';
$string['template_edit_bodyhtml'] = 'Nachricht-HTML';
$string['template_edit_provider'] = 'Anbieter';
$string['template_edit_save'] = 'Speichern';
$string['template_edit_subject'] = 'Betreff (optional)';
$string['template_edit_title'] = 'Benutzerdefinierte Nachricht';
$string['template_preview'] = 'Vorlagevorschau';
$string['template_saved'] = 'Nutzerdefinierte Nachricht gespeichert.';
$string['templates_other'] = 'Andere Vorlagen';
$string['templates_transfer_desc'] = 'Nutzen Sie diesen Dienst, um Einstellungen zwischen Umgebungen zu migrieren (z.B. Staging -> Produktion).';
$string['templates_transfer_title'] = 'Einstellungen exportieren / importieren';
