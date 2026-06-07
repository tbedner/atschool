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
 * Strings for component 'quizaccess_announcements', language 'ja', version '4.4'.
 *
 * @package     quizaccess_announcements
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_announcement_blank'] = 'アナウンステキストは空白にできません。';
$string['add_announcement_button'] = '新しいアナウンスメントを追加する';
$string['add_announcement_content'] = 'アナウンスメントコンテンツ';
$string['add_announcement_content_help'] = '学生に表示されるアナウンスメントのコンテンツです。HTMLがサポートされます。';
$string['add_announcement_header'] = 'アナウンスメントを追加する';
$string['add_block_header'] = 'アナウンスメント';
$string['admin_checkinterval_desc'] = 'アナウンスメントを取得する間のデフォルトのポーリング間隔です。間隔を長くした場合、サーバのパフォーマンスは向上しますが、学生がアナウンスメントを取得するのに必要な時間が長くなります。';
$string['admin_defaultheader'] = 'デフォルトアナウンスメントヘッダ';
$string['admin_defaultheader_desc'] = '小テストでヘッダが指定されていない場合、アナウンスの上に表示されます。';
$string['admin_defaultheader_val'] = '<h3>アナウンスメント</h3>';
$string['admin_maxcheckinterval'] = '最大ポーリング間隔';
$string['admin_maxcheckinterval_desc'] = 'スタッフが個々の小テストに対してアナウンスポーリング間隔を設定できる最大時間です。制限をなくしたい場合、「0」を設定してください。';
$string['admin_mincheckinterval'] = '最小ポーリング間隔';
$string['admin_mincheckinterval_desc'] = 'スタッフが個々の小テストに対してアナウンスポーリング間隔を設定できる最小時間です。制限をなくしたい場合、「0」を設定してください。';
$string['admin_reannounce'] = '再アナウンスバッファ時間';
$string['admin_reannounce_desc'] = 'アナウンスメントを見逃す可能性のある競合状態から学生を保護します。AJAXがアナウンスメントを取得した後、学生が閲覧前に次のページに移動した場合、このバッファ時間で学生はまだアナウンスメントを閲覧することになります。';
$string['admin_refreshinterval'] = 'ステータス更新時間';
$string['admin_refreshinterval_desc'] = 'ステータス監視ページでこの時間が経過した場合、学生のステータスが自動的に更新されます。';
$string['announcement_not_found'] = 'アナウンスメントが見つかりません。';
$string['announcements:delete_announcement'] = 'アナウンスメントを削除する';
$string['announcements:make_announcement'] = 'アナウンスメントを投稿する';
$string['announcements:view_status'] = '前回学生が取得したアナウンスメントを表示します。';
$string['cantadd'] = 'あなたにはアナウンスメントを追加するパーミッションがありません。';
$string['cantaddordel'] = 'あなたにはアナウンスメントを管理するパーミッションがありません。';
$string['cantdel'] = 'あなたにはアナウンスメントを削除するパーミッションがありません。';
$string['cantmonitor'] = 'あなたには学生ステータスを監視するパーミッションがありません。';
$string['delete'] = '削除';
$string['delete_all'] = 'すべてのアナウンスメントを削除する';
$string['delete_announcement_button'] = 'はい、確かにアナウンスメントの削除を希望します';
$string['delete_announcement_cancel_button'] = 'キャンセル';
$string['delete_announcement_conf'] = 'アナウンスメントを削除する';
$string['delete_announcement_confirmation'] = '本当に次のアナウンスメントを削除してもよろしいですか?';
$string['delete_announcement_header'] = '<h3>本当に次のアナウンスメントを削除してもよろしいですか?</h3>';
$string['error_checkinterval_tobig'] = '間隔が大きすぎます。{$a} 秒以下にしてください。';
$string['error_checkinterval_tosmall'] = '間隔が小さすぎます。少なくとも {$a} 秒にしてください。';
$string['event:announcement_created'] = 'アナウンスメントが作成されました。';
$string['event:announcement_deleted'] = 'アナウンスメントが削除されました。';
$string['event:announcements_deleted'] = 'すべてのアナウンスメントが削除されました。';
$string['event:announcements_viewed'] = 'アナウンスメントが照会されました。';
$string['event:student_status_viewed'] = '学生ステータスが表示されました。';
$string['invalidcmid'] = '指定された「cmid」に合致する小テストが見つかりません。';
$string['invalidquizid'] = '提供された「quizid」に合致する小テストが見つかりません。';
$string['manage_announcements'] = 'アナウンスメントを管理する: {$a}';
$string['manage_button_text'] = 'アナウンスメントを追加または管理する';
$string['monitor_ajax_error'] = '学生ステータス取得中にエラーが発生しました。';
$string['monitor_button_text'] = '学生ステータスを監視する';
$string['monitor_header'] = '現在の学生ステータス';
$string['monitor_pre_text'] = '現在この小テストは {$a} 秒ごとに更新されるよう設定されています。';
$string['monitor_title'] = '{$a} を監視する';
$string['no_announcements'] = '作成されたアナウンスメントはありません。';
$string['no_attempts_in_progress'] = '現在、進行中の受験はありません。';
$string['noquizspecified'] = 'あなたは小テストを「quizid」または「cmid」で指定する必要があります。';
$string['pluginname'] = 'ライブ小テストアナウンスメント';
$string['popupheader'] = '新しいアナウンスメントが作成されました。';
$string['privacy:metadata'] = 'このプラグインは小テスト受験が有効な間のみ、学生のデータを保存します。受験が送信された後、データは削除されます。';
$string['quizcmidmismatch'] = '提供された「quizid」が提供された「cmid」と合致しません。';
$string['quizmismatch'] = '指定された小テストがアナウンスメントと合致しません。';
$string['setting_checkinterval'] = 'アナウンスメントポーリング間隔';
$string['setting_checkinterval_help'] = 'アナウンスメント取得に成功した後、再度アナウンスメント取得を試みる前にこの時間だけ休止します。間隔を長くした場合、サーバのパフォーマンスは向上しますが、学生がアナウンスメントを取得するのに必要な時間が長くなります。';
$string['setting_header'] = 'アナウンスメントヘッダ';
$string['setting_header_help'] = 'アナウンスメントの前に小テスト受験ページのトップに表示されるHTMLです。';
$string['setting_heading'] = 'ライブアナウンスメント';
$string['setting_use'] = 'ライブアナウンスメントを有効にする';
$string['setting_use_help'] = '小テスト受験中の学生に対してスタッフがライブアナウンスメントを送信できるようにします。';
$string['status_last_announcement'] = '最後のアナウンスメントが投稿されたのは {$a->time} ({$a->ago}秒前) です。';
$string['status_lastchecked'] = '最終アクセス時間';
$string['status_lastcheckedago'] = '最終アクセスからの時間';
$string['status_no_announcements'] = '投稿されたアナウンスメントはありません。';
