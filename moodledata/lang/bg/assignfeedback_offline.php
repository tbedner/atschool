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
 * Strings for component 'assignfeedback_offline', language 'bg', version '4.4'.
 *
 * @package     assignfeedback_offline
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmimport'] = 'Потвърждаване импортирането на оценки';
$string['default'] = 'Разрешено по подразбиране';
$string['default_help'] = 'Ако е зададено, за всички нови задания ще бъде разрешено оценяване офлайн чрез електронни таблици.';
$string['downloadgrades'] = 'Изтегляне на таблица за оценяване';
$string['enabled'] = 'Таблица за оценяване офлайн';
$string['enabled_help'] = 'Ако е зададено, преподавателят ще може да изтегли и качи електронна таблица с оценки на студентите, когато слага оценки.';
$string['feedbackupdate'] = 'Задаване на поле  "{$a->field}" за "{$a->student}" да бъде "{$a->text}"';
$string['gradelockedingradebook'] = 'Оценката в дневника за оценки е блокирана за {$a}';
$string['graderecentlymodified'] = 'Оценката  за {$a} е променена в Moodle, по-скоро, отколкото в таблицата за оценяване';
$string['gradesfile'] = 'Таблица за оценяване (csv формат)';
$string['gradesfile_help'] = 'Електронна таблица с променени оценки. Файлът трябва да е csv файл, който е изтеглен от това задание и трябва да съдържа колони за оценка и за идентификатор на студентите. Кодовата таблица на файла трябва да е "UTF-8".';
$string['gradeupdate'] = 'Задаване оценката на {$a->student} да бъде {$a->grade}';
$string['ignoremodified'] = 'Позволено актуализиране на записите, които са променени в Moodle по-скоро отколкото в таблицата.';
$string['ignoremodified_help'] = 'Когато бъде изтеглена електронна таблица от Moodle, тя съдържа дати на последните промени на оценките. Ако някоя оценка бъде променена в Moodle след изтеглянето, по подразбиране Moodle отказва да промени такава оценка при качване на оценки от файл. Чрез задаване на тази настройка, Moodle няма да прави проверка и ще стане възможно различни оценяващи да си променят един на друг оценките.';
$string['importgrades'] = 'Потвърждаване промените в таблицата за оценяване';
$string['invalidgradeimport'] = 'Moodle не може да чете от качената таблица. Проверете дали тя е с валиден (csv) формат, с полета отделени със запетаи и опитайте отново.';
$string['nochanges'] = 'Не са намерени променени оценки в качената таблица.';
$string['offlinegradingworksheet'] = 'Оценки';
$string['pluginname'] = 'Таблица за оценяване офлайн';
$string['processgrades'] = 'Импортиране на оценки';
$string['skiprecord'] = 'Прескачане на записа';
$string['updatedgrades'] = 'Актуализирани {$a} оценки и забележки';
$string['updaterecord'] = 'Актуализиране на запис';
$string['uploadgrades'] = 'Качване на таблица за оценяване';
