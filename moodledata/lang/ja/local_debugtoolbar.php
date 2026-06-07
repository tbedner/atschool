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
 * Strings for component 'local_debugtoolbar', language 'ja', version '4.4'.
 *
 * @package     local_debugtoolbar
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['X_queries_in_Y_secs'] = '{$a->time} 秒中 {$a->queries} クエリ';
$string['X_secs'] = '{$a} 秒';
$string['cache'] = 'キャッシュ';
$string['cache_hits_X'] = 'キャッシュヒット: {$a}';
$string['cache_misses_X'] = 'キャッシュミス: {$a}';
$string['cache_ratio_X'] = 'キャッシュ ({$a})';
$string['cache_sets_X'] = 'キャッシュセット: {$a}';
$string['context_X'] = 'コンテクスト: {$a}';
$string['contextid_X'] = 'コンテクストID: {$a}';
$string['contexts_for_which_filters_were_loaded_X'] = 'フィルタが読み込まれたコンテクスト: {$a}';
$string['db_queries_time_X'] = 'DBクエリ時間: {$a} 秒';
$string['db_reads_X'] = 'DB読み込み: {$a}';
$string['db_writes_X'] = 'DB書き込み: {$a}';
$string['dbqueries_critical_threshold'] = 'データベースクエリ限界閾値';
$string['dbqueries_critical_threshold_description'] = 'データベースクエリの限界閾値を整数で定義します。';
$string['dbqueries_warning_threshold'] = 'データベースクエリ警告閾値';
$string['dbqueries_warning_threshold_description'] = 'データベースクエリの警告閾値を整数で定義します。';
$string['deprecated_X'] = '廃止予定: {$a}';
$string['enable_debugtoolbar'] = 'デバッグツールバーを有効にする';
$string['enable_error_handler'] = 'PHPエラーハンドラを有効にする';
$string['enable_error_handler_description'] = 'デフォルトのPHPエラーハンドラをオーバーライドして、すべてのPHPエラーをデバッグツールバーに表示します。';
$string['errors_X'] = 'エラー: {$a}';
$string['extra_memory_limit_X'] = 'メモリ追加制限: {$a}';
$string['filters_and_strings'] = 'フィルタおよび設定';
$string['filters_created_X'] = 'フィルタ作成: {$a}';
$string['general_type_X'] = '一般タイプ: {$a}';
$string['get_string_calls_X'] = 'get_string() コール: {$a}';
$string['http_response_code_X'] = 'HTTPレスポンスコード: {$a}';
$string['included_X_files'] = '{$a} ファイルを含む';
$string['load_average_X'] = '平均負荷: {$a}';
$string['maturity_X'] = '成熟度: {$a}';
$string['more...'] = 'さらに ...';
$string['no_alerts'] = '警告なし';
$string['notices_X'] = '通知: {$a}';
$string['page_type_X'] = 'ページタイプ: {$a}';
$string['php_X'] = 'PHP: {$a}';
$string['pieces_of_content_filtered_X'] = 'フィルタリングされたコンテンツ断片: {$a}';
$string['pluginname'] = 'デバッグツールバー';
$string['privacy:metadata'] = 'デバッグツールバープラグインはいかなる個人データも保存しません。';
$string['ram_X'] = 'RAM: {$a}';
$string['ram_growth_X'] = 'RAM増加: {$a}';
$string['ram_peak_X'] = 'RAMピーク: {$a}';
$string['realtime_critical_threshold'] = '実行時間限界閾値';
$string['realtime_critical_threshold_description'] = '実行時間の限界閾値を定義するための秒単位の浮動小数点数です。';
$string['realtime_warning_threshold'] = '実行時間警告閾値';
$string['realtime_warning_threshold_description'] = '実行時間の警告閾値を定義するための秒単位の浮動小数点数です。';
$string['session_wait_X'] = 'セッション待機: {$a} 秒';
$string['sessions'] = 'セッション';
$string['site_admin_X'] = 'サイト管理: {$a}';
$string['strings_filtered_X'] = 'フィルタリングされたストリング: {$a}';
$string['subpage_X'] = 'サブページ: {$a}';
$string['total_time_X'] = '合計時間: {$a} 秒';
$string['usage_warning'] = '<strong>このプラグインを実運用環境で有効にしないでください。</strong><br />
このプラグインは次の変数をオーバーライドします: <code>$CFG->debug</code>, <code>$CFG->debugdisplay</code>, <code>$CFG->perfdebug</code>';
$string['version_X'] = 'バージョン: {$a}';
$string['warnings_X'] = '警告: {$a}';
