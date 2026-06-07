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
 * Strings for component 'local_slow_queries', language 'bg', version '4.4'.
 *
 * @package     local_slow_queries
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkperformance_slowqueries_action'] = 'Преглед на бавните заявки';
$string['checkperformance_slowqueries_details_found'] = 'Намерени <strong>{$a->count}</strong> заявки, които отнеха повече от <strong>{$a->seconds}s</strong> - вижте <a href="{$a->url}">Доклад за бавни заявки</a>';
$string['checkperformance_slowqueries_details_morethan'] = 'Има <strong>{$a->count}</strong> заявки над <strong>{$a->seconds}s</strong> - вижте <a href="{$a->url}">Доклад за бавни заявки</a>';
$string['checkperformance_slowqueries_name'] = 'Бавни заявки, които влияят на производителността на Moodle';
$string['checkperformance_slowqueries_none'] = 'Няма заявка, която да е отнела повече от 5 секунди.';
$string['checkperformance_slowqueries_notconfigured'] = 'Не е конфигурирано';
$string['checkperformance_slowqueries_summary_found'] = 'Намерени <strong>{$a->count}</strong> заявки, които са отнели повече от {$a->seconds}s';
$string['col_avgtime'] = 'Средно време (в секунди)';
$string['col_count'] = 'Брой';
$string['col_cron'] = 'CRON';
$string['col_origin'] = 'Обратна следа';
$string['col_parameters'] = 'Параметри';
$string['col_sqlpreview'] = 'SQL';
$string['comments_title'] = 'Коментари';
$string['detail_indexes'] = 'Възможни липсващи индекси';
$string['detail_indexes_none'] = 'Не са открити предложения за индекси за тази заявка.';
$string['detail_indexes_notice'] = 'Предложенията са евристични. Тествайте внимателно в staging среда и валидирайте с EXPLAIN/ANALYZE.';
$string['detail_sql'] = 'SQL и параметри';
$string['detail_sql_expanded'] = 'SQL с параметри';
$string['detail_sql_expanded_desc'] = 'Най-доброто възможно разширение за анализ (само показване)';
$string['detail_title'] = 'Детайли за заявката';
$string['duration_days'] = '{$a} ден(дни)';
$string['duration_hours'] = '{$a} час(а)';
$string['duration_minutes'] = '{$a} минута(и)';
$string['duration_seconds'] = '{$a} секунда(и)';
$string['filter_apply'] = 'Приложи';
$string['filter_minexec'] = 'Мин. време за изпълнение (секунди)';
$string['filter_search'] = 'Търсене в SQL';
$string['filter_search_ph'] = 'Въведете част от SQL, за да търсите...';
$string['filter_title'] = 'Филтри';
$string['index_title'] = 'Бавни заявки';
$string['logslow_warning_body'] = 'Тази страница чете от <code>mdl_log_queries</code>, но сайтът ви не е конфигуриран да записва бавни SQL заявки. Активирайте <code>logslow</code> в <code>config.php</code> (задайте <code>true</code> или число в секунди). Пример:';
$string['logslow_warning_current'] = 'Текуща стойност';
$string['logslow_warning_hint'] = 'След като запазите <code>config.php</code>, възпроизведете бавната страница/cron задача и след това опреснете тази страница, за да видите нови записи.';
$string['logslow_warning_title'] = 'Записването на бавни заявки е изключено';
$string['nav_index'] = 'Бавни заявки';
$string['pluginname'] = 'Бавни заявки';
$string['privacy:metadata'] = 'Плъгинът Бавни заявки не съхранява никакви лични данни. Той само показва съществуващите записи от дневника на заявките към базата данни на администраторите.';
$string['timeline_calendar'] = 'Хронология на календара';
$string['timeline_last_7'] = '<strong>{$a}</strong> изпълнения през последните 7 дни';
$string['timeline_scale'] = 'Мащабът съответства на 1 секунда за {$a} пиксела';
$string['timeline_title'] = 'Хронология на заявките';
$string['timeline_totaltime'] = 'Общо базата данни е изразходвала <strong>{$a}</strong> за изпълнение на тези SQL изрази';
