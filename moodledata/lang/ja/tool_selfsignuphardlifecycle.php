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
 * Strings for component 'tool_selfsignuphardlifecycle', language 'ja', version '4.4'.
 *
 * @package     tool_selfsignuphardlifecycle
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['col_accountoverridden'] = 'アカウント期間オーバーライド';
$string['col_accountstatus'] = 'アカウントステータス';
$string['col_auth'] = '認証';
$string['col_nextstep'] = '次のステップ';
$string['col_profile'] = 'ユーザプロファイル';
$string['col_timecreated'] = 'ユーザ作成日';
$string['emptytable'] = '現在、ツール設定に基づく厳格ユーザライフサイクルの対象となるユーザはいません。';
$string['eventuserdeleted'] = 'ユーザが削除されました。';
$string['eventuserdeleted_desc'] = 'ID「 {$a->userid} 」のユーザはアカウント作成日から {$a->period} 日後に削除されました。';
$string['eventuserdeletedoverridden_desc'] = 'ID「 {$a->userid} 」のユーザはオーバーライドされた削除期間に基づき削除されました。';
$string['eventusersuspended'] = 'ユーザが一時停止されました。';
$string['eventusersuspended_desc'] = 'ID「 {$a->userid} 」のユーザはアカウント作成日から {$a->period} 日後に一時停止されました。';
$string['eventusersuspendedoverridden_desc'] = 'ID「 {$a->userid} 」のユーザはオーバーライドされた一時停止期間に基づき一時停止されました。';
$string['nextstep_deletioncomingup'] = '削除予定: {$a->date}';
$string['nextstep_suspensioncomingup'] = '一時停止予定: {$a->date}';
$string['nextstep_unknown'] = '不明';
$string['pluginname'] = '自己登録ユーザ厳格ライフサイクル';
$string['privacy:metadata'] = '自己登録ユーザ厳格ライフサイクルプラグインはいかなる個人データも保存しません。';
$string['profileedit'] = '編集';
$string['profileview'] = '閲覧';
$string['setting_authmethodsheading'] = '認証方法';
$string['setting_coveredauth'] = '対象認証方法';
$string['setting_coveredauth_desc'] = 'あなたはこの設定でこのツールの対象となるユーザを設定できます。あなたが特定の認証方法を選択した場合、その認証方法のすべてのユーザが (一時停止および) 削除対象となります。あなたが特定の認証方法を選択しない場合、その認証方法のすべてのユーザはこのツールから触れられることはありません。';
$string['setting_enableuseroverrides'] = 'ユーザオーバーライドを有効にする';
$string['setting_enableuseroverrides_desc'] = 'あなたはこの設定でユーザ削除前に一時停止するよう設定できます。';
$string['setting_enableusersuspension'] = '削除前のユーザ一時停止を有効にする';
$string['setting_enableusersuspension_desc'] = 'あなたはこの設定でツールによるユーザ削除前に一時停止するよう設定できます。';
$string['setting_userdeletionheading'] = 'ユーザ削除';
$string['setting_userdeletionoverridefield'] = 'ユーザ削除オーバーライドプロファイルフィールド';
$string['setting_userdeletionoverridefield_desc'] = 'あなたはこの設定でユーザ削除日をオーバーライドするために使用されるカスタムユーザプロファイルフィールドを設定できます。この日付プロファイルフィールドが有効化および設定されているユーザは設定されたユーザ削除期間ではなく設定された日付に削除されます。';
$string['setting_userdeletionperiod'] = 'ユーザ削除期間';
$string['setting_userdeletionperiod_desc'] = 'あなたはこの設定でツールによりユーザが削除される日数を設定できます。';
$string['setting_userlifecyclestatic_desc'] = 'このツールでアカウント作成日に基づいてユーザを削除 (およびオプションで一時停止) できます。特に固定スケジュールに基づいたMoodle登録ユーザの削除を意図しています。このツールは非常にシンプルでユーザアカウント作成日のみに基づいて動作します。ユーザがまだアカウントをアクティブに使用しているかどうかは考慮されません。さらにアカウントが一時停止または削除される前にユーザ宛通知メールは送信されません。';
$string['setting_useroverridesheading'] = 'ユーザオーバーライド';
$string['setting_useroverridesnofieldyet_desc'] = 'あなたはこの設定でユーザのオーバーライドに使用するカスタムユーザプロファイルフィールドを設定できます。まだ使用可能なカスタムユーザープロフィールフィールドはありません。まず「 <a href="{$a->url}">{$a->linktitle}</a> 」に移動して「 {$a->fieldname} 」プロファイルフィールドを作成してください。';
$string['setting_useroverridesrelation_desc'] = '注意:「ユーザ一時停止オーバーライドプロファイルフィールド」設定を「ユーザ削除オーバーライドプロファイルフィールド」設定と同じフィールドに設定することはこの管理者設定インタフェースでは禁止されていません。しかし、このような設定はツールの動作が予期しないものになる可能性があるため、あまりお勧めできません:
 ユーザはプロファイルフィールドで設定された日付の後に一時停止されてスケジュールタスクの次の実行まで削除されません。管理者が削除日を一時停止日の前に設定した場合、同じ順序が適用されます: ユーザは常に最初に一時停止された後、削除されます。';
$string['setting_userperiodscalc_desc'] = 'この期間はユーザアカウント作成日に基づいて計算されます。設定された期間は1日として解釈されます。これはユーザがMoodleに登録した最初の不完全な日はカウントされないことを意味します。';
$string['setting_userperiodsrelation_desc'] = '注意:「ユーザ一時停止期間」設定を「ユーザ削除期間」設定と同じまたはそれ以上の値に設定することはこの管理者設定インターフェースでは禁止されていません。しかし、このような設定はツールの動作が予期しないものになる可能性があるため、あまりお勧めできません:
設定済み一時停止期間の後、ユーザは一時停止されてスケジュールタスク実行時に直接削除されます。';
$string['setting_usersuspensionheading'] = 'ユーザ一時停止';
$string['setting_usersuspensionoverridefield'] = 'ユーザ一時停止オーバーライドプロファイルフィールド';
$string['setting_usersuspensionoverridefield_desc'] = 'あなたはこの設定でユーザ一時停止日をオーバーライドするために使用されるカスタムユーザプロファイルフィールドを設定できます。この日付プロファイルフィールドが有効化および設定されているユーザは設定されたユーザ一時停止期間ではなく設定された日付に一時停止されます。';
$string['setting_usersuspensionperiod'] = 'ユーザ一時停止期間';
$string['setting_usersuspensionperiod_desc'] = 'あなたはこの設定でユーザがツールにより一時停止される日数を設定できます。';
$string['settingsuserlist'] = 'ユーザ一覧';
$string['status_active'] = 'アクティブ';
$string['status_suspended'] = '一時停止';
$string['status_unknown'] = '不明';
$string['taskprocesslifecycle'] = '自己登録ユーザライフサイクルのためのプロセス';
