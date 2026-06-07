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
 * Strings for component 'local_kopere_wpbridge', language 'de', version '4.4'.
 *
 * @package     local_kopere_wpbridge
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Aktionen';
$string['adminnotification_body'] = 'Ein Problem in der WooCommerce-Brücke wurde erkannt.

{$a}';
$string['adminnotification_subject'] = 'WP-Brückenproblem';
$string['back'] = 'Zurück';
$string['dashboard_laststatus'] = 'Verbindungsstatus';
$string['dashboard_mappingcount'] = 'Zuordnungen';
$string['dashboard_openui'] = 'Offene Zuordnungen';
$string['dashboard_pendingcount'] = 'Ausstehende Elemente';
$string['dashboard_processedcount'] = 'Verarbeitete Elemente';
$string['dashboard_settings'] = 'Einstellungen';
$string['dashboard_subtitle'] = 'Abgeschlossene Verkäufe in Moodle-Kurse und Kohorten synchronisieren.';
$string['dashboard_title'] = 'WooCommerce-Moodle-Brücke';
$string['error_configmissing'] = 'WooCommerce-Einstellungen sind unvollständig.';
$string['error_invalidsignature'] = 'Ungültige WooCommerce-Webhook-Signatur.';
$string['error_invalidwebhooktoken'] = 'Ungültiger Webhook-Token.';
$string['error_missingemail'] = 'Die Bestellung enthält keine Kunden-E-Mail.';
$string['error_missingorderid'] = 'Fehlende WooCommerce-Bestell-ID.';
$string['error_nomanualenrol'] = 'Es wurde keine aktive manuelle Einschreibungsinstanz im Kurs gefunden.';
$string['error_nomapping'] = 'Keine aktive Zuordnung für dieses Produkt gefunden.';
$string['manage'] = 'WooCommerce-Brücke verwalten';
$string['mapping_add'] = 'Zuordnung hinzufügen';
$string['mapping_cohort'] = 'Kohorte';
$string['mapping_course'] = 'Kurs';
$string['mapping_delete'] = 'Zuordnung löschen';
$string['mapping_delete_confirm'] = 'Möchten Sie diese Zuordnung wirklich löschen?';
$string['mapping_deleted'] = 'Zuordnung erfolgreich gelöscht.';
$string['mapping_edit'] = 'Zuordnung bearbeiten';
$string['mapping_enabled'] = 'Aktiviert';
$string['mapping_itemtype'] = 'Zieltyp';
$string['mapping_itemtype_cohort'] = 'Kohorte';
$string['mapping_itemtype_course'] = 'Kurs';
$string['mapping_missingcohort'] = 'Wählen Sie eine Kohorte für die Kohorten-Zuordnung aus.';
$string['mapping_missingcourse'] = 'Wählen Sie einen Kurs zur Kurszuordnung.';
$string['mapping_productid'] = 'WooCommerce Produkt-ID';
$string['mapping_role'] = 'Rolle für Kurseinschreibung';
$string['mapping_saved'] = 'Zuordnung erfolgreich gespeichert.';
$string['mappings'] = 'Zuordnungen';
$string['messageprovider_syncnotification'] = 'WP Bridge-Benachrichtigungen';
$string['ordernotification_body'] = 'Hallo {$a->firstname},

Ihre Bestellung {$a->orderid} wurde erfolgreich verarbeitet.

Zugriff angewendet:
{$a->items}

Sie können jetzt Moodle unter:
{$a->siteurl} aufrufen.

Mit freundlichen Grüßen,
{$a->sitename}';
$string['ordernotification_subject'] = 'Ihr Moodle-Zugang ist bereit.';
$string['pluginname'] = 'Kopere WP Bridge';
$string['privacy:metadata'] = 'Das Plugin speichert WooCommerce-Bestelldaten für die Moodle-Einschreibung.';
$string['savechanges'] = 'Änderungen speichern';
$string['settings_consumerkey'] = 'Consumer-Schlüssel';
$string['settings_consumersecret'] = 'Consumer-Geheimnis';
$string['settings_debug'] = 'Debug-Modus';
$string['settings_notconfigured'] = 'Die Verbindung ist noch nicht konfiguriert.';
$string['settings_section'] = 'WooCommerce-Verbindung';
$string['settings_statusheading'] = 'Letzter Verbindungstest';
$string['settings_storeurl'] = 'WooCommerce-URL';
$string['settings_storeurl_desc'] = 'Beispiel: https://example.com';
$string['settings_testfailed'] = 'Verbindungstest fehlgeschlagen: {$a}';
$string['settings_testok'] = 'Verbindung erfolgreich getestet und Webhook-Überprüfung abgeschlossen.';
$string['settings_webhookheading'] = 'Webhook-Endpunkt';
$string['settings_webhookheading_desc'] = 'Verwenden Sie diese URL in WooCommerce. Der Token ist in der Abfragezeichenfolge immer erforderlich.';
$string['settings_webhookurl'] = 'Webhook-URL';
$string['status_error'] = 'Fehler';
$string['status_failed'] = 'Fehlgeschlagen';
$string['status_ignored'] = 'Ignoriert';
$string['status_ok'] = 'OK';
$string['status_pending'] = 'Ausstehend';
$string['status_processed'] = 'Verarbeitet';
$string['task_syncorders'] = 'WooCommerce-Abgeschlossene Bestellungen synchronisieren';
$string['wpbridge'] = 'WP Bridge';
