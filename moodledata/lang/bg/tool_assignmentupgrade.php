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
 * Strings for component 'tool_assignmentupgrade', language 'bg', version '4.4'.
 *
 * @package     tool_assignmentupgrade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['areyousure'] = 'Сигурни ли сте?';
$string['areyousuremessage'] = 'Сигурни ли сте, че искате да надградите задание  "{$a->name}"?';
$string['assignmentid'] = 'Номер задание';
$string['assignmentnotfound'] = 'Заданието на може да бъде намерено (id={$a})';
$string['assignmentsperpage'] = 'Задания на страница';
$string['assignmenttype'] = 'Тип задание';
$string['backtoindex'] = 'Връщане към помощника за надграждане';
$string['batchoperations'] = 'Операции с много задания';
$string['batchupgrade'] = 'Надграждане на няколко задания';
$string['confirmbatchupgrade'] = 'Потвърждаване надграждането на избраните задания';
$string['conversioncomplete'] = 'Заданието е променено';
$string['conversionfailed'] = 'Променянето на заданието не беше успешно. Съобщението е: <br />{$a}';
$string['listnotupgraded'] = 'Списък на задания, които не са надградени';
$string['listnotupgraded_desc'] = 'От посочената страница можете да надградите избрани задания';
$string['noassignmentsselected'] = 'Не са избрани задания';
$string['noassignmentstoupgrade'] = 'Няма задания, които да изискват надграждане';
$string['notupgradedintro'] = 'Тази страница показва заданията, направени със по-стара версия на Moodle и не са надградени към новия модул за Задание от версия 2.3 на Moodle. Не всички задания могат да бъдат надградени - ако са създадени с потребителки подтип задание, тогава добавката на този подтип ще трябва да се надгради до новия формат за подтипови добавки, за да се завърши надграждането.';
$string['notupgradedtitle'] = 'Ненадградени задания';
$string['pluginname'] = 'Помощник за надграждане на задания';
$string['select'] = 'Избиране';
$string['submissions'] = 'Предадени задания';
$string['supported'] = 'Надграждане';
$string['unknown'] = 'Неизвестно';
$string['updatetable'] = 'Опресняване на таблицата';
$string['upgradable'] = 'Надградими';
$string['upgradeall'] = 'Надграждане на всички';
$string['upgradeallconfirm'] = 'Да се надградят ли всички задания?';
$string['upgradeassignmentfailed'] = 'Резултат: Неуспешно надграждане. Съобщено беше:<br/><div class="tool_assignmentupgrade_upgradelog">{$a->log}</div>';
$string['upgradeassignmentsuccess'] = 'Резултат: Успешно надграждане';
$string['upgradeassignmentsummary'] = 'Надграждане на задание:  {$a->name} (Курс: {$a->shortname})';
$string['upgradeprogress'] = 'Надграждане на {$a->current} от общо {$a->total} задания';
$string['upgradeselected'] = 'Надграждане на избраните задания';
$string['upgradeselectedcount'] = 'Надграждане на  {$a} избрани задания?';
$string['upgradesingle'] = 'Надграждане на отделно задание';
$string['viewcourse'] = 'Показване на курса с промененото задание';
