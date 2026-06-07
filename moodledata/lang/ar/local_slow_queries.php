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
 * Strings for component 'local_slow_queries', language 'ar', version '4.4'.
 *
 * @package     local_slow_queries
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkperformance_slowqueries_action'] = 'عرض الاستعلامات البطيئة';
$string['checkperformance_slowqueries_details_found'] = 'تم العثور على <strong>{$a->count}</strong> استعلامات استغرقت أكثر من <strong>{$a->seconds}</strong> ثوانٍ - راجع <a href="{$a->url}">تقرير الاستعلامات البطيئة</a>';
$string['checkperformance_slowqueries_details_morethan'] = 'هناك <strong>{$a->count}</strong> استعلامات خلال <strong>{$a->seconds}</strong> ثوانٍ - راجع <a href="{$a->url}">تقرير الاستعلامات البطيئة</a>';
$string['checkperformance_slowqueries_name'] = 'الاستعلامات البطيئة تؤثر على أداء Moodle لديك';
$string['checkperformance_slowqueries_none'] = 'لم يستغرق أي استعلام أكثر من 5 ثوانٍ.';
$string['checkperformance_slowqueries_notconfigured'] = 'غير مُكوَّن';
$string['checkperformance_slowqueries_summary_found'] = 'تم العثور على <strong>{$a->count}</strong> استعلامات استغرقت أكثر من {$a->seconds} ثوانٍ';
$string['col_avgtime'] = 'متوسط الوقت (ث)';
$string['col_count'] = 'العدد';
$string['col_cron'] = 'CRON';
$string['col_origin'] = 'تتبّع الاستدعاءات';
$string['col_parameters'] = 'المعلمات';
$string['col_sqlpreview'] = 'SQL';
$string['comments_title'] = 'تعليقات';
$string['detail_indexes'] = 'فهارس مفقودة محتملة';
$string['detail_indexes_none'] = 'لا توجد اقتراحات فهرسة لهذا الاستعلام.';
$string['detail_indexes_notice'] = 'الاقتراحات تقديرية. اختبرها بعناية في بيئة اختبارية وتحقق باستخدام EXPLAIN/ANALYZE.';
$string['detail_sql'] = 'SQL والمعلمات';
$string['detail_sql_expanded'] = 'SQL مع المعلمات';
$string['detail_sql_expanded_desc'] = 'توسيع بأفضل جهد للتحليل (عرض فقط)';
$string['detail_title'] = 'تفاصيل الاستعلام';
$string['duration_days'] = '{$a} يوم';
$string['duration_hours'] = '{$a} ساعة';
$string['duration_minutes'] = '{$a} دقيقة';
$string['duration_seconds'] = '{$a} ثانية';
$string['filter_apply'] = 'تطبيق';
$string['filter_minexec'] = 'أدنى زمن تنفيذ (ث)';
$string['filter_search'] = 'بحث في SQL';
$string['filter_search_ph'] = 'اكتب جزءاً من SQL للبحث...';
$string['filter_title'] = 'المرشحات';
$string['index_title'] = 'الاستعلامات البطيئة';
$string['logslow_warning_body'] = 'هذه الصفحة تقرأ من <code>mdl_log_queries</code>، لكن موقعك غير مُكوَّن لتسجيل استعلامات SQL بطيئة. فعّل <code>logslow</code> في <code>config.php</code> (ضبطها على <code>true</code> أو رقم بالثواني). مثال:';
$string['logslow_warning_current'] = 'القيمة الحالية';
$string['logslow_warning_hint'] = 'بعد حفظ <code>config.php</code>، اعِد تنفيذ صفحة/مهمة cron البطيئة ثم قم بتحديث هذه الصفحة لرؤية الإدخالات الجديدة.';
$string['logslow_warning_title'] = 'تم تعطيل تسجيل الاستعلامات البطيئة';
$string['nav_index'] = 'الاستعلامات البطيئة';
$string['pluginname'] = 'الاستعلامات البطيئة';
$string['privacy:metadata'] = 'برنامج إضافة الاستعلامات البطيئة لا يخزن أي بيانات شخصية. يعرض فقط سجلات استعلامات قاعدة البيانات الموجودة للمسؤولين.';
$string['timeline_calendar'] = 'خط زمني تقويمي';
$string['timeline_last_7'] = '<strong>{$a}</strong> تنفيذات في آخر 7 أيام';
$string['timeline_scale'] = 'المقياس يساوي 1 ثانية لكل {$a} بكسل';
$string['timeline_title'] = 'خط زمني للاستعلامات';
$string['timeline_totaltime'] = 'إجمالاً، أمضت قاعدة البيانات <strong>{$a}</strong> في تنفيذ هذه عبارات SQL';
