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
 * Strings for component 'local_bulkenrol', language 'ja', version '4.4'.
 *
 * @package     local_bulkenrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bulkenrol:enrolusers'] = 'ユーザバルク登録を使用する';
$string['bulkenrol_form_intro'] = 'あなたのコースにユーザを一括登録できます。登録されるユーザはMoodleアカウントに保持されているメールアドレスで識別されます。';
$string['enrol_users'] = 'ユーザを登録する';
$string['enrol_users_successful'] = 'ユーザが正常に一括登録されました。';
$string['enrolinfo_headline'] = '登録詳細';
$string['enrolplugin'] = '登録プラグイン';
$string['enrolplugin_desc'] = 'ユーザの一括登録に使用される登録方法です。ユーザの一括登録時に登録方法が有効化/追加されていない場合、自動的に有効化/追加されます。';
$string['error_check_is_already_member'] = 'ユーザ (<em>{$a->email}</em>) がすでにグループ (<em>{$a->groupname}</em>) のメンバであるかどうかのエラー確認です。 {$a->error}';
$string['error_empty_line'] = '行 {$a->line} は空白のため、無視されます。';
$string['error_enrol_user'] = 'メールアドレス <em>{$a->email}</em> のユーザのコース登録時に問題が発生しました。';
$string['error_enrol_users'] = 'ユーザのコース登録時に問題が発生しました。';
$string['error_exception_info'] = '例外情報';
$string['error_getting_user_for_email'] = 'データベースからのメールアドレス <em>{$a}</em> のユーザレコード取得時に問題が発生しました。';
$string['error_group_add_member'] = 'コースグループ <em>{$a->group}</em> へのメールアドレス <em>{$a->email}</em> のユーザ追加時に問題が発生しました。';
$string['error_group_add_members'] = 'コースグループへのユーザ追加時にエラーが発生しました。';
$string['error_invalid_email'] = '{$a->row} 行目に無効なメールアドレスが見つかりました (<em>{$a->email}</em>)。この行は無視されます。';
$string['error_more_than_one_record_for_email'] = 'メールアドレス <em>{$a}</em>em> に2名以上のMoodleユーザが存在します。<br />この行は無視されます。既存のMoodleユーザは登録されません。';
$string['error_no_email'] = '{$a->line} (<em>{$a->content}</em>) 行目にメールアドレスが見つかりませんでした。この行は無視されます。';
$string['error_no_record_found_for_email'] = 'メールアドレス <em>{$a}</em> のユーザは存在しません。<br />この行は無視されます。Moodleユーザアカウントは直接作成されないため、この行は無視されます。';
$string['error_no_valid_email_in_list'] = '提供されたリストに有効なメールアドレスは存在しません。<br />Please <a href=\'{$a->url}\'>戻ってあなたの入力を確認してください</a>。';
$string['error_usermails_empty'] = 'メールアドレスのリストが空白です。少なくとも1つのメールアドレスを追加してください。';
$string['group_name_headline'] = 'グループ名';
$string['group_status_create'] = '作成予定グループ';
$string['group_status_exists'] = '作成済みグループ';
$string['group_status_headline'] = 'グループステータス';
$string['groupinfos_headline'] = 'リストに含まれるグループ';
$string['hints'] = 'ヒント';
$string['parameter_empty'] = 'パラメータが空白です。';
$string['pluginname'] = 'ユーザバルク登録';
$string['privacy:metadata'] = 'ユーザバルク登録プラグインはユーザをコースに登録するのためのツールとして動作しますが、いかなる個人データも保存しません。';
$string['role'] = 'ロール';
$string['role_assigned'] = '割り当て済みロール';
$string['role_description'] = 'ユーザの一括登録時に使用されるロールです。';
$string['row'] = '行';
$string['type_enrol'] = '登録方法';
$string['user_enroled'] = 'ユーザ登録';
$string['user_enroled_already'] = 'ユーザはすでに登録されています。';
$string['user_enroled_yes'] = 'ユーザは登録されます。';
$string['user_groups'] = 'グループメンバシップ';
$string['user_groups_already'] = 'グループメンバ登録済みユーザ';
$string['user_groups_yes'] = 'グループ登録予定ユーザ';
$string['usermails'] = 'メールアドレス一覧';
$string['usermails_help'] = 'このコースに既存のMoodleユーザを登録するには次の形でメールアドレスを追加してください: 1行あたり1メールアドレス<br /><br />例:<br />alice@example.com<br />bob@example.com<br /><br />あなたは任意でグループを作成して登録済みユーザをグループに追加できます。ユーザ一覧とは分けてヘッディング行にハッシュサインおよびグループ名を追加してください。<br /><br />例:<br /># Group 1<br />alice@example.com<br />bob@example.com<br /># Group 2<br />carol@example.com<br />dave@example.com';
$string['users_to_enrol_in_course'] = 'コースに登録されるユーザ';
