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
 * Strings for component 'auth_ldap_syncplus', language 'ja', version '4.4'.
 *
 * @package     auth_ldap_syncplus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_syncplusdescription'] = 'この方法は外部LDAPサーバに対する認証を提供します。所与のユーザ名およびパスワードが有効な場合、Moodleはデータベース内に新しいユーザエントリを作成します。このモジュールはLDAPからユーザ属性を読み込んでMoodle内の希望するフィールドに初期値として設定できます。以下のログインではユーザ名およびパスワードのみチェックされます。';
$string['auth_remove_deletewithgraceperiod'] = '内部的に一時停止して猶予期間後に完全に削除する';
$string['nouserentriestosuspend'] = '一時停止するユーザエントリはありません。';
$string['pluginname'] = 'LDAPサーバ (Sync Plus)';
$string['privacy:metadata'] = 'LDAPサーバ (Sync Plus) 認証プラグインはどのような個人データも保存しません。';
$string['removeuser_graceperiod'] = '完全削除猶予期間';
$string['removeuser_graceperiod_desc'] = 'ユーザを内部的に一時停止した後、同期スクリプトはこの日数ユーザの内部的な完全削除を待ちます。猶予期間中、ユーザが再度LDAP内に出現した場合、ユーザは再有効化されます。 注意: この設定は「削除された外部ユーザ」が 「内部的に一時停止して猶予期間後に完全に削除する」に設定された場合のみ使用されることに留意してください。';
$string['sync_script_createuser_enabled'] = 'この設定を有効 (デフォルト) にした場合、同期スクリプトは過去にMoodleにログインしたことのないユーザのMoodleアカウントを作成します。この設定を無効にした場合、同期スクリプトはすべてのLDAＰユーザのMoodleアカウントを作成しません。';
$string['sync_script_createuser_enabled_key'] = '新しいユーザを追加する';
$string['syncroles'] = 'LDAPロール同期ジョブ (Sync Plus)';
$string['synctask'] = 'LDAPユーザ同期ジョブ (Sync Plus)';
$string['userentriestosuspend'] = '一時停止するユーザエントリ: {$a}';
$string['waitinginremovalqueue'] = '削除キュー内での {$a->days} 日の猶予期間待ち: {$a->name} ID {$a->id}';
