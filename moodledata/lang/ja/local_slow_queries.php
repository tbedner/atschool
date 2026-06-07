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
 * Strings for component 'local_slow_queries', language 'ja', version '4.4'.
 *
 * @package     local_slow_queries
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkperformance_slowqueries_action'] = '遅いクエリを表示';
$string['checkperformance_slowqueries_details_found'] = '検出された <strong>{$a->count}</strong> 件のクエリが <strong>{$a->seconds}</strong> 秒を超えました - <a href=\\"{$a->url}\\">遅いクエリ レポート</a> をご覧ください';
$string['checkperformance_slowqueries_details_morethan'] = '以下の <strong>{$a->count}</strong> 件のクエリは <strong>{$a->seconds}</strong> 秒を超えています - <a href=\\"{$a->url}\\">遅いクエリ レポート</a> をご覧ください';
$string['checkperformance_slowqueries_name'] = 'Moodle のパフォーマンスに影響を与える遅いクエリ';
$string['checkperformance_slowqueries_none'] = '5秒を超えるクエリはありませんでした。';
$string['checkperformance_slowqueries_notconfigured'] = '設定されていません';
$string['checkperformance_slowqueries_summary_found'] = '検出された <strong>{$a->count}</strong> 件のクエリが <strong>{$a->seconds}</strong> 秒を超えました';
$string['col_avgtime'] = '平均時間（秒）';
$string['col_count'] = '件数';
$string['col_cron'] = 'CRON';
$string['col_origin'] = 'バックトレース';
$string['col_parameters'] = 'パラメータ';
$string['col_sqlpreview'] = 'SQL';
$string['comments_title'] = 'コメント';
$string['detail_indexes'] = '不足している可能性のあるインデックス';
$string['detail_indexes_none'] = 'このクエリに対するインデックス候補は検出されませんでした。';
$string['detail_indexes_notice'] = '提案はヒューリスティックです。ステージング環境で慎重にテストし、EXPLAIN/ANALYZE で検証してください。';
$string['detail_sql'] = 'SQL とパラメータ';
$string['detail_sql_expanded'] = 'パラメータ付き SQL';
$string['detail_sql_expanded_desc'] = '解析のための最善努力による展開（表示のみ）';
$string['detail_title'] = 'クエリの詳細';
$string['duration_days'] = '{$a} 日';
$string['duration_hours'] = '{$a} 時間';
$string['duration_minutes'] = '{$a} 分';
$string['duration_seconds'] = '{$a} 秒';
$string['filter_apply'] = '適用';
$string['filter_minexec'] = '最小実行時間（秒）';
$string['filter_search'] = 'SQL を検索';
$string['filter_search_ph'] = '検索する SQL の一部を入力...';
$string['filter_title'] = 'フィルター';
$string['index_title'] = '低速クエリ';
$string['logslow_warning_body'] = 'このページは <code>mdl_log_queries</code> から読み取りますが、サイトが低速 SQL クエリをログに記録するよう設定されていません。<code>config.php</code> で <code>logslow</code> を有効にしてください（<code>true</code> または秒数を指定）。例:';
$string['logslow_warning_current'] = '現在の値';
$string['logslow_warning_hint'] = '<code>config.php</code> を保存した後、低速ページ/cron タスクを再現し、その後このページを更新して新しいエントリを確認してください。';
$string['logslow_warning_title'] = '低速クエリのログ記録は無効です';
$string['nav_index'] = '低速クエリ';
$string['pluginname'] = '低速クエリ';
$string['privacy:metadata'] = '低速クエリプラグインは個人データを保存しません。既存のデータベースのクエリログ記録を管理者に表示するだけです。';
$string['timeline_calendar'] = 'カレンダータイムライン';
$string['timeline_last_7'] = '過去 7 日間の実行回数: <strong>{$a}</strong>';
$string['timeline_scale'] = 'スケールは {$a} ピクセルあたり 1 秒に相当します';
$string['timeline_title'] = 'クエリタイムライン';
$string['timeline_totaltime'] = '合計で、データベースはこれらの SQL ステートメントの実行に <strong>{$a}</strong> を費やしました';
