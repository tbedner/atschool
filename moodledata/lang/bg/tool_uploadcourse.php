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
 * Strings for component 'tool_uploadcourse', language 'bg', version '4.4'.
 *
 * @package     tool_uploadcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['coursefile'] = 'Файл';
$string['coursefile_help'] = 'Този файл трябва да бъде CSV файл.';
$string['createall'] = 'Създаване на всички с промяна на кратки имена, ако трябва';
$string['createnew'] = 'Създаване само на нови курсове, прескачане на съществуващите';
$string['createorupdate'] = 'Създаване на нови курсове и промяна на съществуващите';
$string['csvdelimiter'] = 'CSV разделител';
$string['csvdelimiter_help'] = 'Разделител между полетата на записите в CSV файла.';
$string['encoding'] = 'Кодировка';
$string['encoding_help'] = 'Кодировка на CSV файла.';
$string['mode'] = 'Режим на качването';
$string['mode_help'] = 'Тази настройка позволява да определите дали курсовете да бъдат създадени и/или обновени.';
$string['nochanges'] = 'Без промяна';
$string['preview'] = 'Преглед';
$string['rowpreviewnum'] = 'Преглед на редовете';
$string['rowpreviewnum_help'] = 'Брой на редовете от CSV файла, чието съдържание ще бъде показано на следващата страница. Задава се с цел намаляване големината на следващата страница.';
$string['updatemissing'] = 'Попълване на липсващи данни от CSV  и със стойности по подразбиране';
$string['updatemode'] = 'Режим на промените';
$string['updatemode_help'] = 'Ако изберете курсовете да бъдат променени, трябва също да определите с кои данни да се извършат промените.';
$string['updatemodedoessettonothing'] = 'Режимът на промените не позволява нещо да бъде променено';
$string['updateonly'] = 'Само промяна на съществуващите курсове';
$string['updatewithdataonly'] = 'Промени само по CSV данните';
$string['updatewithdataordefaults'] = 'Промени по CSV данните и със стойности по подразбиране';
$string['uploadcourses'] = 'Качване на курсове';
$string['uploadcourses_help'] = 'Курсове могат да бъдат качени с текстов файл. Форматът на този файл трябва да е следния:

* Всеки ред от файла съдържа един запис
* Всеки запис съдържа данни, разделени със запетая (или с друг разделител)
* Първият ред се състои от имена на полета, които определят съдържанието на останалите записи
* Задължителни полета са: shortname (кратко име), fullname (пълно име) и category (категория)';
