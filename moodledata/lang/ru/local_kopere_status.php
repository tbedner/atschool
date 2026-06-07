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
 * Strings for component 'local_kopere_status', language 'ru', version '4.4'.
 *
 * @package     local_kopere_status
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['day'] = '1 день';
$string['days'] = '{$a} дн.';
$string['down'] = 'Недоступно';
$string['intervalminutes'] = 'Интервал проверки (минуты)';
$string['intervalminutes_desc'] = 'Минимальное время между циклами проверки. Запланированная задача будет ограничивать себя этим значением.';
$string['lastcheck'] = 'Последняя проверка';
$string['minute'] = '1 минута';
$string['minutes'] = '{$a} мин.';
$string['modules'] = 'Модули';
$string['modules_desc'] = 'Введите по одному модулю в строке. Каждая строка будет воспроизведена для разных статусов. Например, если вы введёте «Enrollment» и «Support» (по одному в строке), статусы будут отображаться только для «Enrollment» и «Support».';
$string['nodata'] = 'Данных пока нет';
$string['overall_down'] = 'Система недоступна';
$string['overall_operational'] = 'Все системы работают';
$string['pluginname'] = 'Статус системы';
$string['privacy:metadata'] = 'Плагин Kopere Status не хранит персональные данные.';
$string['publiclink'] = 'Публичная страница статуса';
$string['publictitle'] = 'Публичный заголовок';
$string['publictitle_desc'] = 'Заголовок, отображаемый на публичной странице статуса.';
$string['retentiondays'] = 'Срок хранения (дни)';
$string['retentiondays_desc'] = 'Удалять строки почасовой сводки старше указанного количества дней. Исходные журналы также очищаются после каждой сводки (сохраняется только текущий час для последующего обобщения).';
$string['statuspagedays'] = 'Дней на странице статуса';
$string['statuspagedays_desc'] = 'Количество дней для отображения на странице статуса (выберите от 1 до 7).';
$string['task_hourly_rollup'] = 'Почасовое обобщение и очистка StatusBoard';
$string['up'] = 'Работает';
