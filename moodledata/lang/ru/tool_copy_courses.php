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
 * Strings for component 'tool_copy_courses', language 'ru', version '4.4'.
 *
 * @package     tool_copy_courses
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cat_no_validate'] = '<span class="text-danger">Неверный ID категории</span>';
$string['category'] = 'ID категории для нового курса.';
$string['copy_courses:writeinstance'] = 'Массовое копирование курсов';
$string['copyshortname'] = 'Краткое название курса-источника, из которого вы хотите скопировать данные. Кириллица НЕ поддерживается!?';
$string['courseid_no_validate'] = '<span class="text-danger">Недопустимое краткое название курса-источника</span>';
$string['create_task'] = 'Создать задачи';
$string['dates_not_validates'] = '<span class="text-danger">Дата начала должна быть раньше даты окончания</span>';
$string['enddate'] = 'Дата окончания курса, например: 2024-12-15 15:00:00.';
$string['enddate_no_validate'] = '<span class="text-danger">Недопустимая дата окончания</span>';
$string['enrols'] = 'Способы зачисления на скопированный курс. Это поле необязательно для заполнения.';
$string['error_in_columns'] = 'Проверьте столбцы файла';
$string['error_num_columns'] = 'Недостаточно столбцов';
$string['finaly_notification'] = 'Задачи были созданы';
$string['fullname'] = 'Полное название нового курса.';
$string['fullname_no_validate'] = '<span class="text-danger">Недопустимое полное название</span>';
$string['indications'] = 'Загружаемый CSV-файл должен содержать следующие столбцы:';
$string['linkfile'] = 'Пример файла';
$string['nocapability'] = 'У вас нет разрешения на доступ к этой странице';
$string['not_exists_enrol'] = 'Способ не существует: <span style="color:#920020;">{$a->method}</span>';
$string['notification_validate'] = 'Обратите внимание, что при продолжении задания будут создаваться только для тех курсов, которые прошли проверку';
$string['pluginname'] = 'Массовое копирование курсов';
$string['return_site'] = 'Вернуться';
$string['shortname'] = 'Краткое название нового курса.';
$string['shortname_no_duplicate'] = '<span class="text-danger">Повторяющееся краткое название</span>';
$string['shortname_no_validate'] = '<span class="text-danger">Курс с введенным кратким названием уже существует</span>';
$string['startdate'] = 'Дата начала курса, например: 2024-09-15 15:00:00.';
$string['startdate_no_validate'] = '<span class="text-danger">Недопустимая дата начала</span>';
$string['titlepage'] = 'Массовое копирование курсов';
$string['type_csv'] = 'Разделитель в CSV-файле';
$string['uploadcsv'] = 'Загрузить CSV-файл';
$string['validate'] = '<span class="text-success">Проверка прошла успешно</span>';
$string['visible'] = 'Указывает, должен ли новый курс быть видимым. Значение 1 означает видимый курс, 0 — скрытый курс.';
$string['visible_no_validate'] = '<span class="text-danger">Значение видимости может быть только 0 или 1</span>';
