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
 * Strings for component 'gradingform_rubric', language 'bg', version '4.4'.
 *
 * @package     gradingform_rubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Добавяне на критерий';
$string['alwaysshowdefinition'] = 'Позволяване потребителите да виждат критериите и нивата (иначе те се виждат само след оценяване)';
$string['backtoediting'] = 'Обратно към редактиране';
$string['confirmdeletecriterion'] = 'Сигурни ли сте, че искате да изтриете този критерий?';
$string['confirmdeletelevel'] = 'Сигурни ли сте, че искате да изтриете това ниво?';
$string['criterionaddlevel'] = 'Добавяне на ниво';
$string['criteriondelete'] = 'Изтриване на критерия';
$string['criterionempty'] = 'Щракнете за редактиране на критерия';
$string['criterionmovedown'] = 'Местене надолу';
$string['criterionmoveup'] = 'Местене нагоре';
$string['definerubric'] = 'Определяне на критерии с нива';
$string['description'] = 'Описание';
$string['enableremarks'] = 'Позволяване на оценяващия да въведе текстова забележка за всеки критерий';
$string['err_mintwolevels'] = 'Всеки критерия трябва да има поне две нива';
$string['err_nocriteria'] = 'Трябва да има поне един критерий';
$string['err_nodefinition'] = 'Дефиницията на ниво не може да е празна';
$string['err_nodescription'] = 'Описанието на критерий не може да е празно';
$string['err_scoreformat'] = 'Броят на точките за всяко ниво трябва да е валидно неотрицателно число';
$string['err_totalscore'] = 'Максималният възможен брой точки при оценяване чрез критерии с нива трябва да е по-голям от нула';
$string['gradingof'] = '{$a} оценяване';
$string['leveldelete'] = 'Изтриване на нивото';
$string['levelempty'] = 'Щракнете за редактиране на нивото';
$string['name'] = 'Име';
$string['needregrademessage'] = 'Тази дефиниция на критерии с нива е променена след като този студент е оценен. Студентът не може да види тези критериите с нива докато Вие не го проверите и оцените отново.';
$string['pluginname'] = 'Критерии с нива';
$string['previewrubric'] = 'Преглед на критерии с нива';
$string['regrademessage1'] = 'Вие се готвите да запишете промените в критерии с нива, които вече са използвани при оценяване. Моля посочете дали поставените оценки изискват преразглеждане. Ако включите това, критериите с нива ще бъдат скрити от студентите докато работите им не бъдат оценени отново.';
$string['regrademessage5'] = 'Вие се готвите да запишете съществени промени в критерии с нива, които вече са използвани при оценяване. Оценката в дневника за оценки няма да се промени, но критериите с нива ще бъдат скрити от студентите докато работите им не бъдат оценени отново.';
$string['regradeoption0'] = 'Неотбелязване за ново оценяване';
$string['regradeoption1'] = 'Отбелязване за ново оценяване';
$string['restoredfromdraft'] = 'Бележка: Последният опит да бъде оценен този студент не е записан правилно и е възстановена черновата на оценките му. Ако искате да отмените такава промяна използвайте бутон "Отказване" отдолу.';
$string['rubric'] = 'Критерии с нива';
$string['rubricmapping'] = 'Резултат за съответствие на скалите за оценка';
$string['rubricmappingexplained'] = 'Минималният възможен резултат по тези критерии с нива е <b>{$a->minscore} точки</b> и той ще се обърне в минималната оценка, възможна в този модул (която е нула, освен ако не е използвана скала).
   Максималният резултат <b>{$a->maxscore} точки</b> ще се обърне в максималната оценка.<br />
  Междинните резултати ще се обърнат до съответни оценки, закръглени до най-близката стойност.<br />
   Ако се използва скала резултатът ще се обърне в съответни стойности от скалата, както ако те бяха последователни цели числа.';
$string['rubricnotcompleted'] = 'Моля, изберете нещо за всеки критерий';
$string['rubricoptions'] = 'Настройки на критериите с нива';
$string['rubricstatus'] = 'Текущо състояние на критериите с нива';
$string['save'] = 'Запис';
$string['saverubric'] = 'Запазване на критерии с нива в готовност за използване';
$string['saverubricdraft'] = 'Запазване като чернова';
$string['scorepostfix'] = '{$a} точки';
$string['showdescriptionstudent'] = 'Показване на описанието на оценяваните';
$string['showdescriptionteacher'] = 'Показване на описанието при оценяване';
$string['showremarksstudent'] = 'Показване на забележките на оценяваните';
$string['showscorestudent'] = 'Показване на точките на всяко ниво на оценяваните';
$string['showscoreteacher'] = 'Показване на точките на всяко ниво при оценяване';
$string['sortlevelsasc'] = 'Подреждане на нивата:';
$string['sortlevelsasc0'] = 'По намаляващ брой точки';
$string['sortlevelsasc1'] = 'По нарастващ брой точки';
