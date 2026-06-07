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
 * Strings for component 'cohort', language 'bg', version '4.4'.
 *
 * @package     cohort
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcohort'] = 'Добавяне на нова група';
$string['allcohorts'] = 'Всички потоци';
$string['anycohort'] = 'Всички';
$string['assign'] = 'Определяне';
$string['assigncohorts'] = 'Регистриране на членове в група';
$string['assignto'] = 'Членове на група  \'{$a}\'';
$string['backtocohorts'] = 'Обратно към потоци';
$string['bulkadd'] = 'Добавяне в група';
$string['bulknocohort'] = 'Не са намерени налични потоци';
$string['categorynotfound'] = 'Не е намерена категория <b>{$a}</b> или нямате позволение да създавате група тук. Ще бъде използван контекста по подразбиране.';
$string['cohort'] = 'Група';
$string['cohortmember'] = 'Член на група';
$string['cohorts'] = 'Потоци';
$string['cohortsin'] = '{$a}: налични потоци';
$string['component'] = 'Източник';
$string['contextcohortnotallowed'] = 'Групата <b>{$a}</b> не е разрешена в този контекст.';
$string['contextnotfound'] = 'Контекст <b>{$a}</b> не е намерен или нямате позволение да създавате група тук. Ще бъде използван контекста по подразбиране.';
$string['csvcontainserrors'] = 'Намерена е грешка в CSV данните. Вижте подробностите по-долу.';
$string['csvcontainswarnings'] = 'Намерена е забележка в CSV данните. Вижте подробностите по-долу.';
$string['csvextracolumns'] = 'Колона <b>{$a}</b> ще бъде игнорираана.';
$string['currentusers'] = 'Текущи потребители';
$string['currentusersmatching'] = 'Съвпадане на текущи потребители';
$string['defaultcontext'] = 'Контекст по подразбиране';
$string['delcohort'] = 'Изтриване на група';
$string['delconfirm'] = 'Това ще изтрие групата \'{$a}\' и всички свързани с нея данни.';
$string['description'] = 'Описание';
$string['displayedrows'] = 'Показани {$a->displayed} реда от общо {$a->total}.';
$string['duplicateidnumber'] = 'Група със същия ид. номер (ID mumber) вече съществува';
$string['editcohort'] = 'Редактиране на група';
$string['editcohortidnumber'] = 'Редактиране Ид. на група';
$string['editcohortname'] = 'Редактиране име на група';
$string['eventcohortcreated'] = 'Създадена е  група';
$string['eventcohortdeleted'] = 'Изтрита е  група';
$string['eventcohortmemberadded'] = 'Добавен е потребител в  групата';
$string['eventcohortmemberremoved'] = 'Отстранен е потребител от  групата';
$string['eventcohortupdated'] = 'Актуализирана е  групата';
$string['external'] = 'Външна  група';
$string['idnumber'] = 'ID на група';
$string['invalidtheme'] = 'Темата на групата не съществува';
$string['memberofcohort'] = 'Член на група';
$string['memberscount'] = 'Големина на групата';
$string['name'] = 'Име';
$string['namecolumnmissing'] = 'Има нещо нередно с формата на CSV файла. Проверете той да съдържа правилните имена на колоните. За да добавите потребител в групата, отворете "Качване на потребители" в Администриране на сайта.';
$string['namefieldempty'] = 'Името на полето не може да бъде празно';
$string['newidnumberfor'] = 'Нов идентификационен номер за групата {$a}';
$string['newnamefor'] = 'Ново име за група {$a}';
$string['nocomponent'] = 'Създадена ръчно';
$string['potusers'] = 'Потенциални потребители';
$string['potusersmatching'] = 'Потенциално съвпадащи потребители';
$string['preview'] = 'Преглед';
$string['privacy:metadata:cohort_members'] = 'Информация за групата на потребителя.';
$string['privacy:metadata:cohort_members:cohortid'] = 'ID на групата';
$string['privacy:metadata:cohort_members:timeadded'] = 'Запис на времето, показващо кога потребителят е добавен към групата';
$string['privacy:metadata:cohort_members:userid'] = 'Идентификаторът на потребителя, който е свързан с групата';
$string['removeuserwarning'] = 'Премахването на потребители от групата предизвиква отписване на потребителите от много курсове, което включва изтриване на настройките на потребителите, техните оценки, участието им в групи и друга информация от съответните курсове.';
$string['search'] = 'Търсене';
$string['searchcohort'] = 'Търсене на група';
$string['selectcohort'] = 'Изберете група';
$string['selectfromcohort'] = 'Избиране на членове от групата';
$string['systemcohorts'] = 'Системни потоци';
$string['unknowncohort'] = 'Непозната група ({$a})!';
$string['uploadcohorts'] = 'Качване на група';
$string['uploadcohorts_help'] = 'Потоците могат да бъдат качени чрез текстов файл. Форматът на файла трябва да бъде както следва:

* Всеки ред от файла съдържа един запис
* Всеки запис е поредица от данни, разделени от избрания разделител
* Първият запис съдържа списък с имена на полета, определящи формата на останалата част от файла
* Задължителното име на полето е име
* Незадължителните имена на полета са idnumber, description, descriptionformat, visible, context, category, category_id, category_idnumber, category_path';
$string['uploadedcohorts'] = 'Качени {$a} потоци';
$string['useradded'] = 'Потребителят е добавен към група "{$a}"';
$string['visible'] = 'Видимост';
$string['visible_help'] = 'Всяка група може да бъде видяна от потребители, които имат възможност за \'moodle/cohort:view\' в контекста на групата.<br/>
Видимите потоци също могат да се разглеждат от потребителите в основните курсове.';
