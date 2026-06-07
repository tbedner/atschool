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
 * Strings for component 'local_invitation', language 'ja', version '4.4'.
 *
 * @package     local_invitation
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['available_from'] = '利用可能開始:';
$string['available_to'] = '利用可能終了:';
$string['back_to_course'] = 'あなたのコースに戻る';
$string['clipboard'] = 'クリップボード';
$string['consent'] = '同意 (任意)';
$string['consent_help'] = 'あなたが同意テキストを定義した場合、招待されたユーザにチェックボックスが表示されます。ユーザはそのチェックボックスをチェックする必要があります。';
$string['consent_title'] = '確認';
$string['current_invitation'] = '現在のインビテーション';
$string['current_invitation_note'] = 'あなたが新しいインビテーションを作成した場合、古いインビテーションは自動的に無効となります。';
$string['delete_after_logout'] = 'ログアウト後に削除する';
$string['delete_after_logout_help'] = 'ログアウト後、直ちにユーザを削除します。この設定が有効にされた場合、あなたのコースログでこのユーザは確認できません。';
$string['delete_confirmation'] = 'このインビテーションを削除してもよろしいですか? インビテーション削除後、インビテーションリンクは使用できなくなります。';
$string['delete_invitation'] = 'インビテーションを削除する';
$string['edit_invitation'] = '一時的なコースアクセスのためのインビテーションを編集する';
$string['error_could_not_create_and_enrol'] = 'エラー: 新しいユーザを作成および登録できませんでした!';
$string['error_invalid_invitation'] = 'エラー: このインビテーションは有効ではありません!';
$string['error_invitation_not_active'] = 'エラー: このシステムではインビテーション機能がアクティブにされていません。';
$string['error_invitation_usegroup_no_group'] = '「グループを使用する」は定義されていますが、グループが選択されていません!';
$string['error_invitation_usegroup_no_groupname'] = '「グループを使用する」は定義されていますが、グループ名がありません!';
$string['error_timeend_can_not_be_before_timestart'] = 'インビテーションは開始日時の前には終了できません。';
$string['error_timeend_can_not_be_in_past'] = 'インビテーションは過去の日時では終了できません!';
$string['error_userrole_not_defined'] = '設定でユーザロールが定義されていません。管理者にご連絡ください!';
$string['expiration_time'] = '有効期限 (日)';
$string['expiration_time_help'] = 'このプラグインで作成されたユーザアカウントは定義された日数の後に失効します。有効期限切れアカウントは匿名化された後に削除されます。';
$string['free_slots'] = '空きスロット:';
$string['group_created_by_invitation'] = 'グループはインビテーションにより作成されました。';
$string['group_not_found'] = 'グループが見つかりませんでした。';
$string['guestuser_suffix'] = '(ゲストユーザ)';
$string['info_already_loggedin'] = 'あなたはすでにログインしています。このまま続けた場合、あなたはログアウトされます。';
$string['invitation'] = 'インビテーション';
$string['invitation:manage'] = 'インビテーションを管理する';
$string['invitation_created'] = 'インビテーションが正常に作成されました。';
$string['invitation_delete_note_timeandlogout'] = '一時アカウントおよび関連データはユーザのログアウトと同時に自動的に削除されますが、遅くとも {$a} の後には削除されます。';
$string['invitation_delete_note_timeonly'] = '一時アクセスおよび関連データは自動的に {$a} の後に削除されます。';
$string['invitation_deleted'] = 'インビテーションが正常に削除されました。';
$string['invitation_is_not_allowed'] = 'あなたはユーザを招待できません。';
$string['invitation_note'] = 'あなたはインビテーション機能でこのコースへの一時的なアクセスを許可できます。作成されたインビテーションリンクで正規アカウントのないユーザもこのコースにアクセスできます。';
$string['invitation_updated'] = 'インビテーションが正常に更新されました。';
$string['invite_participants'] = '一時的なコースアクセスのための新しいインビテーション';
$string['join'] = '参加する';
$string['link_copied'] = 'リンクがコピーされました。';
$string['max_users'] = '最大ユーザ数';
$string['max_users_per_invitation'] = 'インビテーションあたりの最大ユーザ数です。';
$string['nameinfo'] = '氏名情報';
$string['nameinfo_help'] = 'あなたはこのテキストで参加フォームの氏名フィールドの使用方法を簡単に説明できます。';
$string['no_group_defined'] = 'グループ定義なし';
$string['none_existing_group_info'] = 'このグループは存在しないため作成されます。';
$string['note'] = 'メモ:';
$string['pluginname'] = 'インビテーション';
$string['preventactions'] = 'アクション防止';
$string['preventactions_help'] = '<strong>メモ:</strong> あなたは招待ユーザが呼び出せないようにURLまたはURLの一部を定義できます。
<br>
招待されたユーザがこのようなURLを呼び出した場合、そのコースまたはMoodleフロントページにリダイレクトされます。
<br>
あなたはダッシュボードまたはフロントページをこのリストに含むべきではありません!';
$string['qrcode'] = 'QRコード';
$string['remove_old_invitations'] = '古いユーザを削除する';
$string['search_or_create_group'] = 'グループを検索または作成する';
$string['show_icon_in_usernavigation'] = 'ユーザナビゲーションにアイコンを表示する';
$string['showqrcode'] = 'QRコードを表示する';
$string['single_name_field'] = '単一ネームフィールド';
$string['single_name_field_help'] = '「単一ネームフィールド」が有効にされた場合、ユーザは姓および名を指定する必要はなく、氏名を1つだけ指定する必要があります。加えて氏名に接尾辞が付加されます。';
$string['systemrole'] = 'システムロール';
$string['systemrole_help'] = 'システムロールが定義された場合、招待されたユーザはこのロールに割り当てられます。これはシステムレベルで招待ユーザを制限するために使用できます。';
$string['timeend'] = '終了時間';
$string['timestart'] = '開始時間';
$string['usedslots'] = '利用中:';
$string['usegroup'] = 'グループを使用する';
$string['userrole'] = 'ユーザロール';
$string['welcome_note'] = 'ようこそ {$a->lastname} {$a->firstname} さん!';
