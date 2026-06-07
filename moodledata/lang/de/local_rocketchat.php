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
 * Strings for component 'local_rocketchat', language 'de', version '4.4'.
 *
 * @package     local_rocketchat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowexternalconnection'] = 'Externe Anbindung';
$string['allowexternalconnection_desc'] = 'Wenn diese Option aktiviert ist, können Nutzer/innen sich mit der Rocket.Chat-Instanz <a href="/local/rocketchat/linkaccount.php" target="_blank">verbinden</a> und das abgerufene Token in Moodle speichern. Mit dieser Einstellung müssen Ihre Nutzer/innen das Rocket.Chat Konto  nur einmal verknüpfen.';
$string['auth_failure'] = 'Rocket.Chat Integration - Authentifizierungsfehler';
$string['button_sync'] = 'Manuelle Synchronisierung';
$string['channel_creation'] = 'Rocket.Chat Integration - Raumerstellung';
$string['connection_failure'] = 'Die Herstellung der Client-Verbindung mit dem Rocket.Chat-Server ist fehlgeschlagen.';
$string['course_desc'] = 'Verwalten Sie die Integration zwischen Moodle und Rocket.Chat. Legen Sie fest, welche Nutzer/innen und Kurse die Rocket.Chat Integration benötigen, und lösen Sie die Synchronisierung manuell aus.';
$string['courseeventbasedsyncresult'] = 'Die Kurs-ID lautet - {$a->courseid}  / Die ereignisbasierte Synchronisierung lautet {$a->eventbasedsync}';
$string['courseinfo_1'] = 'Kurse mit aktivierter ereignisbasierter Synchronisierung werden von bestimmten Ereignissen beeinflusst – group_member_added, group_member_removed und user_enrolment_updated. Stellen Sie sicher, dass Sie eine erste Synchronisierung durchgeführt haben, bevor Sie diese Funktion aktivieren.';
$string['courseinfo_2'] = 'Kurse, deren Synchronisierung aussteht, werden bei der nächsten Cron-Ausführung im Hintergrund mit RocketChat synchronisiert. Die ausstehende Synchronisierung wird nach der Synchronisierung entfernt.';
$string['courseinfo_3'] = 'Wenn Sie mit der Maus über die drei Punkte fahren, werden etwaige Fehler angezeigt.';
$string['courseinfo_4'] = 'Die manuelle Synchronisierung wird sofort ausgeführt.';
$string['coursesyncparam_courseid'] = 'Die Kurs-ID';
$string['coursesyncparam_enentbasedsync'] = 'Hervorheben, wenn für einen Kurs die ereignisbasierte Synchronisierung aktiv ist';
$string['coursesyncparam_pendingsync'] = 'Hervorheben, wenn ein Kurs noch synchronisiert werden muss';
$string['coursesyncparam_requiresync'] = 'Hervorheben, wenn ein Kurs eine Synchronisierung erfordert';
$string['coursesyncparam_roleid'] = 'Die Rollen-ID';
$string['coursesyncresult'] = 'Die Kurs-ID lautet - {$a->courseid}  / Die ausstehende Synchronisierung lautet {$a->pendingsync}';
$string['coursetable_column_1'] = 'Kurs';
$string['coursetable_column_2'] = 'Ereignisbasierte Synchronisierung';
$string['coursetable_column_3'] = 'Synchronisierung läuft';
$string['coursetable_column_4'] = 'Letztes Synchronisierungsdatum';
$string['coursetriggeryncresult'] = 'Erfolg: Die Kurs-ID lautet - {$a->courseid}';
$string['groupregex'] = 'Regex-Filter der Gruppe';
$string['groupregex_desc'] = 'Dies wird verwendet, um festzulegen, welche Gruppen mit Rocket.Chat synchronisiert werden sollen:<ul><li>/all/</li><li>/coach group [a-z][0-9]/</li><li>/example project group [0-9][0-9]/</li></ul>';
$string['heading_api'] = 'API-Verbindung';
$string['heading_course'] = 'Kursintegration';
$string['heading_role'] = 'Rollenintegration';
$string['heading_sync'] = 'Synchronisierungskonfiguration';
$string['hostname'] = 'Hostname';
$string['hostname_desc'] = 'Bitte geben Sie den vollständigen Domänennamen für die Rocket.Chat-Instanz an.';
$string['linkaccount'] = 'Rocket.Chat Einstellungen';
$string['linkaccount_connected'] = 'Das Rocket.Chat Konto ist verbunden';
$string['linkaccount_disconnected'] = 'Das Rocket.Chat Konto ist getrennt';
$string['linkaccount_unexpectedmessage'] = '<br/><br/>Rocket.Chat hat folgenden Fehler zurückgegeben: "{$a}"';
$string['linkaccount_unexpectedresult'] = 'Es gab ein Problem bei der Verbindung zu Ihrem Rocket.Chat Konto. Bitte überprüfen Sie die Anmeldedaten und versuchen Sie es erneut.';
$string['password'] = 'Passwort';
$string['password_desc'] = 'Für den angegebenen Nutzer festgelegtes Passwort.';
$string['pluginname'] = 'Rocket.Chat';
$string['port'] = 'Port';
$string['port_desc'] = 'Bitte geben Sie den Port an, wenn es sich nicht um den Standardport (3000) handelt.';
$string['privacy:metadata:local_rocketchat'] = 'Nutzer- und API-Anmeldedaten, die an einen externen Rocket.Chat Host gesendet werden.';
$string['privacy:metadata:local_rocketchat_api:password'] = 'Das Passwort, das mit dem Rocket.Chat API Konto verknüpft ist.';
$string['privacy:metadata:local_rocketchat_api:username'] = 'Der Nutzername, der mit dem Rocket.Chat API Konto verknüpft ist.';
$string['privacy:metadata:local_rocketchat_user:password'] = 'Das Passwort, das mit dem Rocket.Chat-Nutzerkonto verknüpft ist.';
$string['privacy:metadata:local_rocketchat_user:username'] = 'Die mit dem Rocket.Chat-Nutzerkonto verknüpfte E-Mail-Adresse.';
$string['privacy:metadata:preference:local_rocketchat_external_token'] = 'Das externe Token, das bei der Verknüpfung des Rocket.Chat-Nutzerkontos zurückgegeben wurde.';
$string['privacy:metadata:preference:local_rocketchat_external_user'] = 'Die mit dem Rocket.Chat-Nutzerkonto verknüpfte E-Mail-Adresse.';
$string['protocol'] = 'Protokoll';
$string['protocol_desc'] = 'Bitte geben Sie das HTTP-Protokoll an, wenn es nicht das Standardprotokoll (https) ist.';
$string['rocketchat:linkaccount'] = 'Eigenes verknüpftes Rocket.Chat Konto verwalten';
$string['rocketchat:manage'] = 'Globale Einstellungen von Rocket.Chat verwalten';
$string['rocketchat:view'] = 'Globale Einstellungen für die Kurs- und Rollenintegration von Rocket.Chat verwalten';
$string['role_desc'] = 'Verwalten Sie die Integration zwischen Moodle und Rocket.Chat. Legen Sie fest, welche Rollen in die Rocket.Chat Integration einbezogen werden.';
$string['roleinfo_1'] = 'Markierte Rollen werden in die Synchronisierung einbezogen. Durch das Entfernen einer Rolle werden bereits in Rocket.Chat synchronisierte Nutzer/innen nicht entfernt.';
$string['roletable_column_1'] = 'Kurs';
$string['roletable_column_2'] = 'Synchronisierung erforderlich';
$string['scheduledtaskname'] = 'Teilnehmer/innen mit Rocket.Chat synchronisieren';
$string['subscription_creation'] = 'Rocket.Chat Integration - Erstellung eines Abonnements';
$string['sync_returns'] = 'Unabhängig davon, ob das Update erfolgreich war oder nicht';
$string['user_creation'] = 'Rocket.Chat Integration - Nutzererstellung';
$string['username'] = 'Nutzername';
$string['username_desc'] = 'Nutzername für den Zugriff auf die API. Bitte erstellen Sie zu diesem Zweck einen Rocket.Chat Moodle-Nutzer.';
