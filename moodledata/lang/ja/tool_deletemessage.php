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
 * Strings for component 'tool_deletemessage', language 'ja', version '4.4'.
 *
 * @package     tool_deletemessage
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cleanmessage'] = '会話をクリアする';
$string['cleanmessage_desc'] = '両ユーザが両者間のすべてのメッセージを削除した時点でデータベースからメッセージが削除されます。';
$string['deleteall'] = 'すべてのメッセージを削除する';
$string['deleteall_desc'] = '容量を節約するために既読および未読メッセージを削除できます。通知作成後、どのくらいの期間で削除できますか?';
$string['deletegroupmessages'] = 'グループメッセージを削除する';
$string['deletegroupmessages_desc'] = '古いメッセージおよび既読メッセージを削除するフィルタにグループメッセージを含めます。';
$string['deletepersonalmessage'] = 'プライベートメッセージを削除する';
$string['deletepersonalmessage_desc'] = 'フィルタに合致した場合、個人的な会話に含まれるメッセージおよびユーザが自分宛に送信したメッセージを削除します。';
$string['deleteread'] = '既読メッセージを削除する';
$string['deleteread_desc'] = '容量を節約するために既読メッセージを削除できます。通知確認後、どのくらいの期間で削除できますか?';
$string['harddelete'] = 'メッセージをハード削除する';
$string['harddelete_desc'] = 'このプラグインで削除されたメッセージすべてがデータベースから削除されます。';
$string['pluginname'] = 'メッセージを削除する';
$string['privacy:metadata'] = 'ローカルのAWSプラグインは個人情報を保存しません。しかし、エラーが発生したユーザのIPアドレスをそのプラグインで設定されているSentryサーバに送信します。';
$string['settingspage'] = 'メッセージ自動削除';
$string['taskname'] = '削除済みメッセージを自動削除する';
