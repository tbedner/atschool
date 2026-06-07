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
 * Strings for component 'local_slow_queries', language 'ru', version '4.4'.
 *
 * @package     local_slow_queries
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkperformance_slowqueries_action'] = 'Просмотреть медленные запросы';
$string['checkperformance_slowqueries_details_found'] = 'Найдено <strong>{$a->count}</strong> запросов, которые заняли более <strong>{$a->seconds}</strong> сек - см. <a href="{$a->url}">Отчет о медленных запросах</a>';
$string['checkperformance_slowqueries_details_morethan'] = 'Есть <strong>{$a->count}</strong> запросов, занявших более <strong>{$a->seconds}</strong> сек - см. <a href="{$a->url}">Отчет по медленным запросам</a>';
$string['checkperformance_slowqueries_name'] = 'Медленные запросы влияют на производительность Moodle';
$string['checkperformance_slowqueries_none'] = 'Ни один запрос не занял больше 5 секунд.';
$string['checkperformance_slowqueries_notconfigured'] = 'Не настроено';
$string['checkperformance_slowqueries_summary_found'] = 'Найдены запросы (<strong>{$a->count}</strong>) , занявшие более <strong>{$a->seconds}</strong> сек.';
$string['col_avgtime'] = 'Средн. время (с)';
$string['col_count'] = 'Количество';
$string['col_cron'] = 'CRON';
$string['col_origin'] = 'Трассировка стека';
$string['col_parameters'] = 'Параметры';
$string['col_sqlpreview'] = 'SQL';
$string['comments_title'] = 'Комментарии';
$string['detail_indexes'] = 'Возможные отсутствующие индексы';
$string['detail_indexes_none'] = 'Для этого запроса не обнаружено предложений по индексам.';
$string['detail_indexes_notice'] = 'Предложения носят эвристический характер. Тщательно протестируйте в среде, аналогичной реально используемой и проверьте с помощью EXPLAIN/ANALYZE.';
$string['detail_sql'] = 'SQL и параметры';
$string['detail_sql_expanded'] = 'SQL с параметрами';
$string['detail_sql_expanded_desc'] = 'Расширение по принципу best-effort (по максимуму) для анализа (только отображение)';
$string['detail_title'] = 'Детали запроса';
$string['duration_days'] = '{$a} дн.';
$string['duration_hours'] = '{$a} ч.';
$string['duration_minutes'] = '{$a} мин.';
$string['duration_seconds'] = '{$a} сек.';
$string['filter_apply'] = 'Применить';
$string['filter_minexec'] = 'Мин. время выполнения (с)';
$string['filter_search'] = 'Поиск SQL';
$string['filter_search_ph'] = 'Введите часть SQL для поиска...';
$string['filter_title'] = 'Фильтры';
$string['index_title'] = 'Медленные запросы';
$string['logslow_warning_body'] = 'Эта страница считывает данные из <code>mdl_log_queries</code>, но ваш сайт не настроен на регистрацию медленных SQL-запросов. Включите <code>logslow</code> в <code>config.php</code> (установите <code>true</code> или число в секундах). Пример:';
$string['logslow_warning_current'] = 'Текущее значение';
$string['logslow_warning_hint'] = 'После сохранения <code>config.php</code> воспроизведите задачу  slow page/cron, а затем обновите эту страницу, чтобы увидеть новые записи.';
$string['logslow_warning_title'] = 'Регистрация медленных запросов отключена';
$string['nav_index'] = 'Медленные запросы';
$string['pluginname'] = 'Медленные запросы';
$string['privacy:metadata'] = 'Плагин «Медленные запросы» не хранит никаких персональных данных. Он только отображает администраторам существующие записи журнала запросов базы данных.';
$string['timeline_calendar'] = 'Шкала времени календаря';
$string['timeline_last_7'] = 'Выполнений за последние 7 дней - <strong>{$a}</strong>';
$string['timeline_scale'] = 'Масштаб соответствует 1 секунде на {$a} пикселей';
$string['timeline_title'] = 'Шкала времени запросов';
$string['timeline_totaltime'] = 'В общей сложности база данных потратила <strong>{$a}</strong> на выполнение этих SQL-операторов';
