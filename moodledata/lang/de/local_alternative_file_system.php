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
 * Strings for component 'local_alternative_file_system', language 'de', version '4.4'.
 *
 * @package     local_alternative_file_system
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bytescalcfailed'] = 'Berechnung der Bytes fehlgeschlagen (fast=0-Modus). Grund: {$a}';
$string['bytesline'] = 'Bytes: <strong>{$a->migrated}</strong> / <strong>{$a->total}</strong> &amp;nbsp;|&amp;nbsp; Rate (10m): <strong>{$a->rate}/Min</strong> &amp;nbsp;|&amp;nbsp; ETA (Bytes): <strong>{$a->eta}</strong>';
$string['cachedef_missing_count'] = 'Anzahl fehlender Cache-Einträge';
$string['eta'] = 'ETA: <strong>{$a}</strong>';
$string['instruction_install'] = '<p><strong>Fügen Sie die folgende Zeile zur Moodle-Datei <code>config.php</code> hinzu:</strong></p><pre><code>$CFG->alternative_file_system_class = "\\local_alternative_file_system\\external_file_system";</code></pre><p><strong>Wichtig:</strong> Fügen Sie diese Zeile <strong>vor</strong> der folgenden Zeile ein (falls sie in Ihrer Datei vorhanden ist):</p><pre><code>require_once(__DIR__ . "/lib/setup.php");</code></pre>';
$string['instruction_title'] = 'Installationsanweisungen';
$string['lasttransfer'] = 'Letzte Übertragung: <strong>{$a}</strong>';
$string['migrate_link'] = '<p><a class="btn btn-success" href="?execute=1">Jetzt ausführen (kann lange dauern)</a></p>';
$string['migrate_title'] = 'Lokalen Speicher zu Remote-Speicher migrieren';
$string['migrate_title_tolocal'] = 'Remote-Speicher zu lokalem Speicher migrieren';
$string['migrate_total'] = '<p>Sie haben <strong>{$a->missing}</strong> lokale Dateien, die auf die Migration warten, während <strong>{$a->sending}</strong> Dateien bereits in die Remote-Umgebung migriert wurden.</p>';
$string['migrate_total_local'] = 'Verschiebt Dateien vom Remote-Speicher zurück in den lokalen Speicher. Dies kann je nach Datenmenge einige Zeit dauern.';
$string['migratedfiles'] = 'Migriert: <strong>{$a}</strong>';
$string['nostoragefound'] = 'Kein Speicher zum Berichten gefunden. Prüfen Sie, ob die Tabelle local_alternativefilesystemf Einträge enthält.';
$string['pluginname'] = 'Alternatives Dateisystem';
$string['privacy:no_data_reason'] = 'Das Plugin „Alternatives Dateisystem“ speichert keine personenbezogenen Daten.';
$string['rate'] = 'Rate: <strong>{$a->r1}</strong> Datei/Min (1m) &amp;nbsp;|&amp;nbsp; <strong>{$a->r10}</strong> Datei/Min (10m) &amp;nbsp;|&amp;nbsp; <strong>{$a->r60}</strong> Datei/Min (60m)';
$string['remainingfiles'] = 'Verbleibend: <strong>{$a}</strong>';
$string['reporttitle_status'] = 'Status';
$string['settings_bucketname'] = '{$a->local} Bucket-Name';
$string['settings_bucketnamedesc'] = 'Der eindeutige Name, der dem Bucket in {$a->local} zugewiesen ist.';
$string['settings_gcs_keyfile'] = 'Inhalt der Google-storage.json';
$string['settings_gcs_keyfiledesc'] = 'Fügen Sie hier den Inhalt der Datei "google-storage.json" ein.';
$string['settings_local'] = 'Lokale Dateien in Moodle';
$string['settings_migrate_local'] = 'Verwenden Sie den Dienst <a target="_blank" href="{$a->url}/move-to-local.php">move-to-local.php</a>, um Daten von {$a->local} in den lokalen Speicher zu migrieren.';
$string['settings_migrate_remote'] = 'Verwenden Sie den Dienst <a target="_blank" href="{$a->url}/move-to-external.php">move-to-external.php</a>, um Daten vom lokalen Speicher nach {$a->local} zu migrieren.';
$string['settings_objectfs_notice'] = '<p>Derzeit ist <code>$CFG->alternative_file_system_class</code> auf <code>"{$a->currentclass}";</code> gesetzt, was bedeutet, dass diese Website derzeit <strong>tool_objectfs</strong> als alternatives Dateisystem von Moodle verwendet.</p>

<p>Um dieselben Einstellungen zu verwenden und keine Dateien zu verlieren, verwenden Sie in diesem Plugin die folgenden Einstellungen:</p>
<ul>
  <li><strong>{$a->settings_local_lang}</strong>: <code>{$a->settings_local}</code></li>
  <li><strong>{$a->settings_s3_region_lang}</strong>: <code>{$a->settings_s3_region}</code></li>
  <li><strong>{$a->settings_s3_credentials_key_lang}</strong>: <code>{$a->settings_s3_credentials_key}</code></li>
  <li><strong>{$a->settings_s3_credentials_secret_lang}</strong>: <code>{$a->settings_s3_credentials_secret}</code></li>
  <li><strong>{$a->settings_bucketname_lang}</strong>: <code>{$a->settings_bucketname}</code></li>
  <li><strong>{$a->settings_path_lang}</strong>: <code>{$a->settings_path}</code></li>
</ul>

<p>Anschließend müssen Sie zuerst den Wert in <code>config.php</code> auf <code>$CFG->alternative_file_system_class = "\\local_alternative_file_system\\external_file_system";</code> ändern, um dieses Plugin als alternatives Dateisystem zu verwenden.</p>';
$string['settings_path'] = 'Objektpfad von {$a->local}';
$string['settings_pathdesc'] = 'Der Pfad innerhalb des Buckets, in dem die Objekte gespeichert werden. Es sind nur Buchstaben und Zahlen zulässig.';
$string['settings_s3_credentials_key'] = 'Zugriffsschlüssel von {$a->local}';
$string['settings_s3_credentials_keydesc'] = 'Der Zugriffsschlüssel, der zur Authentifizierung beim Dienst {$a->local} verwendet wird.';
$string['settings_s3_credentials_secret'] = 'Geheimer Schlüssel von {$a->local}';
$string['settings_s3_credentials_secretdesc'] = 'Der geheime Schlüssel, der zur Authentifizierung beim Dienst {$a->local} verwendet wird.';
$string['settings_s3_region'] = 'Region von {$a->local}';
$string['settings_s3_regiondesc'] = 'Die Region, in der sich der Bucket von {$a->local} befindet, zum Beispiel „{$a->ex_region}“.';
$string['settings_s3generic_destino'] = 'Generisches S3 (benutzerdefinierter Endpoint)';
$string['settings_s3generic_endpoint'] = 'S3-Endpoint-URL';
$string['settings_s3generic_endpoint_desc'] = 'Der Endpoint ist die Basisadresse Ihres S3-Dienstes (eines S3-kompatiblen Anbieters). Sie können ihn ohne <code>https://</code> und mit oder ohne Port eingeben. Geben Sie keine Bucket-Namen an und nicht nur den Service-Host (und den Port, falls erforderlich).<blockquote>Beispiele: <code>https://s3.eu-central-1.amazonaws.com</code>, <code>o000.idrivee.com</code> oder <code>minio:9000</code>.<br>Verwenden Sie NICHT: <code><strong style="color:#673AB7;text-decoration:underline;">mybucket.</strong>s3.amazonaws.com</code> oder <code>server:9000<strong style="color:#673AB7;text-decoration:underline;">/mybucket</strong></code>.</blockquote>';
$string['settings_success'] = '<strong>Die Daten sind korrekt.</strong><br>Bitte seien Sie vorsichtig beim Ändern der Einstellungen, da falsche Änderungen dazu führen können, dass gespeicherte Dateien nicht mehr zugänglich sind.';
$string['storage_destination'] = 'Speicherziel';
$string['storage_destinationdesc'] = 'Wählen Sie das Speicherziel aus und speichern Sie, um speicherbezogene Daten zu laden.';
$string['totalfiles'] = 'Gesamtzahl der Dateien in MDL_FILES: <strong>{$a}</strong>';
