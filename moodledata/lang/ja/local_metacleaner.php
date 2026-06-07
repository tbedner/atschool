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
 * Strings for component 'local_metacleaner', language 'ja', version '4.4'.
 *
 * @package     local_metacleaner
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'アクション';
$string['affectedusers'] = '影響を受けるユーザ';
$string['allcategories'] = 'すべてのカテゴリ';
$string['courseid'] = 'コースID';
$string['coursename'] = 'コース名';
$string['deactivate'] = '無効化';
$string['delete'] = '削除';
$string['enable'] = 'メタクリーナを有効にする';
$string['enable_help'] = '期限切れメタ登録をクリーンアップするメタクリーナ機能を有効にします。';
$string['enrolaction'] = '期限切れメタ登録に対するアクション';
$string['enrolaction_help'] = '期限切れメタ登録に対して実行するアクションを選択してください。あなたは無効化する (非アクティブのままにする) か、完全に削除できます。';
$string['error_processing_course'] = 'コース {$a->id} 処理エラー: {$a->message}';
$string['exportcsv'] = 'CSVとしてエクスポートする';
$string['filterbycategory'] = 'カテゴリでフィルタする';
$string['filterbycategory_help'] = '選択したカテゴリのコースのみをクリーンアップします。';
$string['invalid_action'] = '無効なアクション設定です。クリーンアップをスキップします。';
$string['invalid_config'] = '無効な「最大ユーザ数」(maxusers) または「コース終了からの最短日数」(mindays) 設定です。クリーンアップをスキップします。';
$string['invalid_user_count'] = 'ユーザ数が無効であるため、コース {$a} をスキップします。';
$string['maxusers'] = '最大ユーザ数';
$string['maxusers_help'] = 'ユーザ数がこの数より少ないコースのみをクリーンアップします。';
$string['meta_enrolment_note'] = '<span style="color: red;">コース終了日が延長または削除された場合、無効化されたメタ登録はこのプラグインにより自動的に再有効化されます。</span>';
$string['metacleaner:manage'] = 'メタクリーナプラグインを管理する';
$string['metaenrolcleanup'] = 'メタ登録クリーンアップ';
$string['metaenrolments'] = 'メタ登録';
$string['mindays'] = 'コース終了からの最短日数';
$string['mindays_help'] = '少なくともこの日数以前に終了したコースのみをクリーンアップします。';
$string['missing_course_data'] = '終了日またはカテゴリが見つからないため、コース {$a} をスキップします。';
$string['missing_customint1'] = '「customint1」の値が見つからないため、登録 {$a} をスキップします。';
$string['no_expired_courses'] = '期限切れコースは見つかりませんでした。終了します。';
$string['no_meta_enrolments'] = 'コース {$a} のメタ登録は見つかりませんでした。スキップします。';
$string['nocourses'] = '選択されたクライテリアに合致するコースはありません。';
$string['plugin_disabled'] = 'メタクリーナは無効にされています。終了します。';
$string['pluginname'] = 'メタクリーナ';
$string['pluginnotenabled'] = 'メタクリーナは有効にされていません。';
$string['previewheading'] = 'メタクリーナ: 影響を受けるコースをプレビューする';
$string['previewlimit'] = 'ページあたりのプレビュー数';
$string['previewlimit_help'] = 'プレビューページで表示されるページごとのコース数です。';
$string['privacy:metadata'] = 'メタクリーナプラグインはいかなる個人データも保存しません。';
$string['processing_course'] = '{$a->users} ユーザのコース {$a->id} ({$a->fullname}) を処理中です。';
$string['reactivated_meta_enrolment'] = 'ID {$a} のメタ登録を再有効化しました。';
