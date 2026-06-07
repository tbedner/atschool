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
 * Strings for component 'local_bulkenrol', language 'ru', version '4.4'.
 *
 * @package     local_bulkenrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bulkenrol:enrolusers'] = 'Массовое зачисление пользователей';
$string['bulkenrol_form_intro'] = 'Здесь вы можете осуществить массовое зачисление пользователей на курс. Зачисляемый пользователь идентифицируется по адресу электронной почты из его учётной записи.';
$string['enrol_users'] = 'Зачислить пользователей';
$string['enrol_users_btn'] = 'Выполнить зачисление пользователей';
$string['enrol_users_successful'] = 'Пользователи зачислены успешно';
$string['enrolinfo_headline'] = 'Подробности зачисления';
$string['enrolplugin'] = 'Плагин зачисления';
$string['enrolplugin_desc'] = 'Способ, который будет применён для массового зачисления участников. Если настраиваемый способ зачисления неактивен для данного курса (не подключён) на момент массового зачисления, он будет автоматически активирован (подключён).';
$string['error_check_is_already_member'] = 'Ошибка зачисления: пользователь с адресом (<em>{$a->email}</em>) уже является участником группы (<em>{$a->groupname}</em>). {$a->error}';
$string['error_empty_line'] = 'Строка {$a->line} является пустой и будет проигнорирована.';
$string['error_enrol_user'] = 'Возникла проблема при зачислении на курс пользователя с адресом <em>{$a->email}</em>.';
$string['error_enrol_users'] = 'Возникла проблема с зачислением пользователей на курс.';
$string['error_exception_info'] = 'Информация об исключениях';
$string['error_getting_user_for_email'] = 'Возникла проблема с извлечением адреса пользователя <em>{$a}</em> из базы данных.';
$string['error_group_add_member'] = 'Возникла проблема с добавлением пользователя с адресом e-mail <em>{$a->email}</em> в группу <em>{$a->group}</em> на курсе.';
$string['error_group_add_members'] = 'Возникла проблема с добавлением пользователей в группу(ы) на курсе.';
$string['error_group_remove_member'] = 'Возникла проблема при удалении пользователя с адресом <em>{$a->email}</em> из группы <em>{$a->group}</em> курса.';
$string['error_invalid_email'] = 'В строке {$a->row} обнаружен некорректный адрес <em>{$a->email}</em>. Строка будет проигнорирована.';
$string['error_more_than_one_record_for_email'] = 'Обнаружено более одной учётной записи Moodle с адресом <em>{$a}</em>. Строки будут проигнорированы, ни один из пользователей с данным адресом не будет зачислен.';
$string['error_no_courseid'] = 'ID курса не установлен.';
$string['error_no_email'] = 'В строке {$a->line} не найден адрес (<em>{$a->content}</em>). Строка будет проигнорирована.';
$string['error_no_record_found_for_email'] = 'Не существует учётной записи Moodle с адресом <em>{$a}</em>.<br />Строка будет проигнорирована, учётная запись Moodle для пользователя не будет создана автоматически.';
$string['error_no_valid_email_in_list'] = 'В представленном списке не найдены корректные адреса.<br />Пожалуйста, <a href=\'{$a->url}\'>вернитесь назад и проверьте введённые данные</a>.';
$string['error_unenrol_user'] = 'Пользователь с адресом {$a->email} не может быть отчислен с курса.';
$string['error_usermails_empty'] = 'Список адресов пуст. Добавьте хотя бы один адрес.';
$string['group_name_headline'] = 'Название группы';
$string['group_status_create'] = 'Группа будет создана';
$string['group_status_exists'] = 'Группа уже существует';
$string['group_status_headline'] = 'Статус группы';
$string['groupinfos_headline'] = 'Группы, включённые в список';
$string['hints'] = 'Подсказки';
$string['nav_both'] = 'Доступ - и со страницы управления участниками курса, и через навигацию курса (меню «Дополнительно»)';
$string['nav_course'] = 'Доступ - через навигацию курса (меню «Дополнительно»)';
$string['nav_participants'] = 'Доступ - со страницы управления участниками курса';
$string['navigation'] = 'Расположение доступа к настройкам';
$string['navigation_desc'] = 'Расположение пункта меню для доступа к массовому зачислению пользователей в навигации курса.';
$string['parameter_empty'] = 'Значение параметра не указано';
$string['pluginname'] = 'Массовое зачисление пользователей';
$string['privacy:metadata'] = 'Плагин массового зачисления пользователей работает как инструмент зачисления на курсы, но не хранит никаких персональных данных.';
$string['role'] = 'Роль';
$string['role_assigned'] = 'Назначаемая роль';
$string['role_description'] = 'Роль, назначаемая пользователям при массовом зачислении';
$string['row'] = 'Строка';
$string['type_enrol'] = 'Способ зачисления';
$string['user_enroled'] = 'Зачисление пользователя';
$string['user_enroled_already'] = 'Пользователь уже зачислен';
$string['user_enroled_yes'] = 'Пользователь будет зачислен';
$string['user_groups'] = 'Членство в группе';
$string['user_groups_already'] = 'Пользователь уже является членом группы';
$string['user_groups_notin'] = 'Пользователь не является членом группы';
$string['user_groups_remove'] = 'Пользователь будет удалён из группы';
$string['user_groups_yes'] = 'Пользователь будет добавлен в группу';
$string['user_unenroled_already'] = 'Пользователь не зачислен';
$string['user_unenroled_yes'] = 'Пользователь будет отчислен';
$string['usermails'] = 'Список адресов электронной почты';
$string['usermails_help'] = 'Чтобы записать существующего пользователя Moodle на этот курс, добавьте его e-mail в эту форму, один пользователь - один адрес в строке.<br /><br />Например:<br />alice@example.com<br />bob@example.com<br /><br />Можно также по желанию создать группы и добавить зачисленных пользователей в группы. Всё, что нужно для этого сделать - добавить заголовок со знаком «#» и названием группы, отделяющим список пользователей.<br /><br />Например:<br /># Группа 1<br />alice@example.com<br />bob@example.com<br /># Группа 2<br />carol@example.com<br />dave@example.com<hr />Вы можете также отчислить пользователей.<br />Чтобы сделать это, поставьте перед адресом восклицательный знак («!»).<br /><br />Например:<br />! alice@example.com<br />! bob@example.com';
$string['users_to_enrol_in_course'] = 'Пользователи, которые должны быть зачислены на курс';
$string['users_to_unenrol_from_course'] = 'Пользователи, которые должны быть отчислены с курса';
