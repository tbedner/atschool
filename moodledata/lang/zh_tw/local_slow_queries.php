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
 * Strings for component 'local_slow_queries', language 'zh_tw', version '4.4'.
 *
 * @package     local_slow_queries
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkperformance_slowqueries_action'] = '查看慢速查詢';
$string['checkperformance_slowqueries_details_found'] = '找到了 <strong>{$a->count}</strong> 條查詢，其耗時超過 <strong>{$a->seconds}s</strong> - 請參閱 <a href="{$a->url}">慢速查詢報告</a>';
$string['checkperformance_slowqueries_details_morethan'] = '有 <strong>{$a->count}</strong> 條查詢在 <strong>{$a->seconds}s</strong> 以上 - 請參閱 <a href="{$a->url}">慢速查詢報告</a>';
$string['checkperformance_slowqueries_name'] = '慢速查詢影響您的 Moodle 表現';
$string['checkperformance_slowqueries_none'] = '沒有查詢耗時超過 5 秒。';
$string['checkperformance_slowqueries_notconfigured'] = '未配置';
$string['checkperformance_slowqueries_summary_found'] = '找到了 <strong>{$a->count}</strong> 條查詢，其耗時超過 <strong>{$a->seconds}s</strong> 秒';
$string['col_avgtime'] = '平均時間（秒）';
$string['col_count'] = '計數';
$string['col_cron'] = 'CRON';
$string['col_origin'] = '回溯';
$string['col_parameters'] = '參數';
$string['col_sqlpreview'] = 'SQL';
$string['comments_title'] = '註解';
$string['detail_indexes'] = '可能遺失的索引';
$string['detail_indexes_none'] = '此查詢未偵測到索引建議。';
$string['detail_indexes_notice'] = '建議是啟發式的。請在測試環境中務必小心測試，並以 EXPLAIN/ANALYZE 驗證。';
$string['detail_sql'] = 'SQL 和參數';
$string['detail_sql_expanded'] = '含參數的 SQL';
$string['detail_sql_expanded_desc'] = '供分析使用的盡力展開（僅顯示）';
$string['detail_title'] = '查詢詳情';
$string['duration_days'] = '{$a} 天';
$string['duration_hours'] = '{$a} 小時';
$string['duration_minutes'] = '{$a} 分鐘';
$string['duration_seconds'] = '{$a} 秒';
$string['filter_apply'] = '套用';
$string['filter_minexec'] = '最小執行時間（秒）';
$string['filter_search'] = '搜尋 SQL';
$string['filter_search_ph'] = '請輸入要搜尋的 SQL 的部分內容...';
$string['filter_title'] = '篩選';
$string['index_title'] = '慢速查詢';
$string['logslow_warning_body'] = '本頁讀取自 <code>mdl_log_queries</code>，但您的網站尚未配置以記錄慢速 SQL 查詢。請在 <code>config.php</code> 中啟用 <code>logslow</code>（設定為 <code>true</code> 或以秒為單位的數字）。範例：';
$string['logslow_warning_current'] = '當前值';
$string['logslow_warning_hint'] = '儲存 <code>config.php</code> 後，重新產生慢速頁面/排程任務，然後刷新本頁以查看新條目。';
$string['logslow_warning_title'] = '慢速查詢記錄已停用';
$string['nav_index'] = '慢速查詢';
$string['pluginname'] = '慢速查詢';
$string['privacy:metadata'] = '慢速查詢插件不會存儲任何個人資料。它僅向管理員顯示現有的資料庫查詢日誌紀錄。';
$string['timeline_calendar'] = '日曆時間軸';
$string['timeline_last_7'] = '<strong>{$a}</strong> 次在過去 7 天內的執行';
$string['timeline_scale'] = '比例表示每 {$a} 像素等於 1 秒';
$string['timeline_title'] = '查詢時間軸';
$string['timeline_totaltime'] = '資料庫共花費 <strong>{$a}</strong> 執行這些 SQL 語句的時間';
