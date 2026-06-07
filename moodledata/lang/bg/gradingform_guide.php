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
 * Strings for component 'gradingform_guide', language 'bg', version '4.4'.
 *
 * @package     gradingform_guide
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Добавяне на често използван коментар';
$string['addcriterion'] = 'Добавяне на критерий';
$string['alwaysshowdefinition'] = 'Показване дефиницията за оценяване на студентите';
$string['backtoediting'] = 'Обратно към редактиране';
$string['clicktocopy'] = 'Щракнете за да копирате този текст в обратната връзка за критерия';
$string['clicktoedit'] = 'Щракнете за да редактирате';
$string['clicktoeditname'] = 'Щракнете за да редактирате името на критерия';
$string['comments'] = 'Често използвани коментари';
$string['commentsdelete'] = 'Изтриване на коментар';
$string['commentsempty'] = 'Щракнете за да редактирате коментар';
$string['commentsmovedown'] = 'Местене надолу';
$string['commentsmoveup'] = 'Местене нагоре';
$string['confirmdeletecriterion'] = 'Сигурни ли сте, че искате да изтриете това?';
$string['confirmdeletelevel'] = 'Сигурни ли сте, че искате да изтриете това ниво?';
$string['criterion'] = 'Критерий';
$string['criteriondelete'] = 'Изтриване на критерий';
$string['criterionempty'] = 'Щракнете за редактиране на критерия';
$string['criterionmovedown'] = 'Местене надолу';
$string['criterionmoveup'] = 'Местене нагоре';
$string['definemarkingguide'] = 'Дефиниране на критерии с оценки';
$string['description'] = 'Описание';
$string['descriptionmarkers'] = 'Описание за оценяващите';
$string['descriptionstudents'] = 'Описание за студентите';
$string['err_maxscorenotnumeric'] = 'Максималният резултат за критерий трябва да е число';
$string['err_nocomment'] = 'Коментарът не може да е празен';
$string['err_nodescription'] = 'Описанието за студентите не може да е празно';
$string['err_nodescriptionmarkers'] = 'Описанието за оценяващите не може да е празно';
$string['err_nomaxscore'] = 'Максималният резултат за критерий не може да е празен';
$string['err_noshortname'] = 'Името на критерий не може да е празно';
$string['err_scoreinvalid'] = 'Резултатът по {$a->criterianame} не е валиден, максималният резултат е: {$a->maxscore}';
$string['guidemappingexplained'] = 'ВНИМАНИЕ: Вашите критерии с оценки имат максимален резултат <b>{$a->maxscore} точки</b> но максималната оценка, зададена в заданието е {$a->modulegrade}. Максималният резултат в точки ще се преизчисли към максимална оценка на модула.<br />
   Междинните резултати съответно ще се преизчислят и ще се закръглят към най-близка възможна оценка.';
$string['guidenotcompleted'] = 'Моля задайте валидна оценка за всеки критерия';
$string['guideoptions'] = 'Настройки на критерии с оценки';
$string['guidestatus'] = 'Текущо състояние на критериите с оценки';
$string['hidemarkerdesc'] = 'Скриване описанието на критерия от оценяващите';
$string['hidestudentdesc'] = 'Скриване на описанието на критерия от студентите';
$string['maxscore'] = 'Максимална оценка';
$string['name'] = 'Име';
$string['needregrademessage'] = 'Дефиницията на критерии с оценки беше променена след като на този студент е поставена оценка. Студентът няма да може да вижда критериите с оценки докато Вие не го проверите и му поставите отново оценка.';
$string['pluginname'] = 'Критерии с оценки';
$string['previewmarkingguide'] = 'Преглед на критериите с оценки';
$string['regrademessage1'] = 'Вие се готвите да запишете промените в критерии с оценки, които вече са използвани при оценяване. Моля посочете ако поставените оценки изискват преразглеждане. Ако включите, тези критерии с оценки ще бъдат скрити от студентите докато техните работи не бъдат оценени отново.';
$string['regrademessage5'] = 'Вие се готвите да запишете съществени промени в критерии с оценки, които вече са използвани при оценяване. Оценката в дневника за оценки ще остане непроменена, но критериите с оценки ще бъдат скрити от студентите докато техните работи не бъдат оценени отново.';
$string['regradeoption0'] = 'Неотбелязване за ново оценяване';
$string['regradeoption1'] = 'Отбелязване за ново оценяване';
$string['restoredfromdraft'] = 'БЕЛЕЖКА: Последният опит за оценяване на този студент не е записан правилно, така че са възстановени оценките чернови. Ако искате да отмените тези промени, използвайте бутона "Отказване" отдолу.';
$string['save'] = 'Запис';
$string['saveguide'] = 'Запазване на критерии с оценки в готовност за използване';
$string['saveguidedraft'] = 'Запис като чернова';
$string['score'] = 'резултат';
$string['showmarkerdesc'] = 'Показване на описанието на критерия за оценяващия';
$string['showmarkspercriterionstudents'] = 'Показване на оценките по критерии на студентите';
$string['showstudentdesc'] = 'Показване на описанието на критерия за студенти';
