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
 * Strings for component 'local_slow_queries', language 'zh_cn', version '4.4'.
 *
 * @package     local_slow_queries
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkperformance_slowqueries_action'] = '查看慢查询';
$string['checkperformance_slowqueries_details_found'] = '发现 <strong>{$a->count}</strong> 条查询超过 <strong>{$a->seconds}</strong>秒 - 请参阅 <a href="{$a->url}">慢查询报告</a>';
$string['checkperformance_slowqueries_details_morethan'] = '共有 <strong>{$a->count}</strong> 条查询超过 <strong>{$a->seconds}</strong>秒 - 请参阅 <a href="{$a->url}">慢查询报告</a>';
$string['checkperformance_slowqueries_name'] = '影响您的 Moodle 性能的慢查询';
$string['checkperformance_slowqueries_none'] = '没有查询耗时超过5秒。';
$string['checkperformance_slowqueries_notconfigured'] = '未配置';
$string['checkperformance_slowqueries_summary_found'] = '发现 <strong>{$a->count}</strong> 条查询超过 <strong>{$a->seconds}</strong>秒';
$string['col_avgtime'] = '平均时间（秒）';
$string['col_count'] = '计数';
$string['col_cron'] = 'CRON';
$string['col_origin'] = '回溯跟踪';
$string['col_parameters'] = '参数';
$string['col_sqlpreview'] = 'SQL';
$string['comments_title'] = '备注';
$string['detail_indexes'] = '可能缺失的索引';
$string['detail_indexes_none'] = '未检测到针对该查询的索引建议。';
$string['detail_indexes_notice'] = '建议为启发式结果。请在预发布环境中谨慎测试，并使用 EXPLAIN/ANALYZE 进行验证。';
$string['detail_sql'] = 'SQL 和参数';
$string['detail_sql_expanded'] = '带参数的 SQL';
$string['detail_sql_expanded_desc'] = '尽力扩展以供分析（仅显示）';
$string['detail_title'] = '查询详情';
$string['duration_days'] = '{$a} 天';
$string['duration_hours'] = '{$a} 小时';
$string['duration_minutes'] = '{$a} 分钟';
$string['duration_seconds'] = '{$a} 秒';
$string['filter_apply'] = '应用';
$string['filter_minexec'] = '最小执行时间（秒）';
$string['filter_search'] = '搜索 SQL';
$string['filter_search_ph'] = '输入部分 SQL 以搜索...';
$string['filter_title'] = '筛选器';
$string['index_title'] = '慢查询';
$string['logslow_warning_body'] = '此页面从 <code>mdl_log_queries</code> 读取，但你的站点未配置为记录慢 SQL 查询。请在 <code>config.php</code> 中启用 <code>logslow</code>（设置为 <code>true</code> 或以秒为单位的数值）。示例：';
$string['logslow_warning_current'] = '当前值';
$string['logslow_warning_hint'] = '保存 <code>config.php</code> 后，重现慢页面/cron 任务，然后刷新此页面以查看新条目。';
$string['logslow_warning_title'] = '慢查询日志记录已禁用';
$string['nav_index'] = '慢查询';
$string['pluginname'] = '慢查询';
$string['privacy:metadata'] = '慢查询插件不存储任何个人数据。它仅向管理员显示现有的数据库查询日志记录。';
$string['timeline_calendar'] = '日历时间轴';
$string['timeline_last_7'] = '过去 7 天内执行了 <strong>{$a}</strong> 次';
$string['timeline_scale'] = '比例对应为：{$a} 像素代表 1 秒';
$string['timeline_title'] = '查询时间轴';
$string['timeline_totaltime'] = '总计，数据库花费 <strong>{$a}</strong> 来执行这些 SQL 语句';
