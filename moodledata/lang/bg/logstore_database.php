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
 * Strings for component 'logstore_database', language 'bg', version '4.4'.
 *
 * @package     logstore_database
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = 'Размер на буфера';
$string['buffersize_help'] = 'Брой на записите в журнал, които се вмъкват с една заявка към базата данни, с цел бързодействие.';
$string['conectexception'] = 'Няма връзка с базата данни.';
$string['create'] = 'Саздаване';
$string['databaseschema'] = 'Схема на базата данни';
$string['databasesettings'] = 'Настройки на базата данни';
$string['databasesettings_help'] = 'Подробности за връзката с външна база данни за журнали: {$a}';
$string['databasetable'] = 'Таблица на базата данни';
$string['databasetable_help'] = 'Име на таблицата, в която ще се запазват журналите. Тази таблица трябва да има структура идентична с тази за Стандартни журнали (mdl_logstore_standard_log).';
$string['filters'] = 'Филтриране на журналите';
$string['filters_help'] = 'Позволяване на филтри, които да изключват някои действия да се регистрират в журнал.';
$string['includeactions'] = 'Включване на действия от тези типове';
$string['includelevels'] = 'Включване на действия от това образователно ниво';
$string['logguests'] = 'Регистриране в журнал действията на гостите';
$string['other'] = 'Други';
$string['participating'] = 'Участие';
$string['pluginname'] = 'Външна база данни за журнали';
$string['pluginname_desc'] = 'Добавка, която съхранява записите за журнали в таблица на външна база данни.';
$string['read'] = 'Четене';
$string['tablenotfound'] = 'Зададената таблица не е намерена';
$string['teaching'] = 'Преподаване';
$string['testingsettings'] = 'Проверка на настройките на базата данни...';
$string['testsettings'] = 'Проверка на връзката';
$string['update'] = 'Обновяване';
