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
 * Strings for component 'grading', language 'bg', version '4.4'.
 *
 * @package     grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = 'Методът "{$a->method}" е избран за метод за оценяване в "{$a->area}"';
$string['activemethodinfonone'] = 'Няма избран разширен метод за оценяване в "{$a->area}". Ще се използва Просто директно оценяване.';
$string['changeactivemethod'] = 'Промяна на текущия метод за оценяване';
$string['clicktoclose'] = 'щракнете за затваряне';
$string['error:gradingunavailable'] = 'Методът за разширено оценяване не е зададен правилно. Моля, проверете опциите за оценяване на целия форум в настройките на форума.';
$string['error:notinrange'] = 'Предоставена е невалидна оценка \'{$a->grade}\'. Оценките трябва да са между 0 и {$a->maxgrade}.';
$string['exc_gradingformelement'] = 'Не може да се създаде елемент от формата за оценяване';
$string['formnotavailable'] = 'Избран е разширен метод за оценяване, но формата все още трябва да се определи.';
$string['gradingformunavailable'] = 'Моля, обърнете внимание: формата за разширено оценяване не е готова в този момент. Ще бъде прилаган метода Просто директно оценяване, докато формата придобие валиден статус.';
$string['gradingmanagement'] = 'Разширено оценяване';
$string['gradingmanagementtitle'] = 'Разширено оценяване: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'Метод за оценяване';
$string['gradingmethod_help'] = 'Изберете разширен метод за оценяване, който да се използва за пресмятане на оценката в настоящия контекст.

За да отмените резширения метод за оценяване и се върнете на метода по подразбиране, изберете "Просто директно оценяване".';
$string['gradingmethodnone'] = 'Просто директно оценяване';
$string['gradingmethods'] = 'Методи за оценяване';
$string['manageactionclone'] = 'Създаване на нова форма за оценяване от шаблон';
$string['manageactiondelete'] = 'Изтриване на дефинираната форма';
$string['manageactiondeleteconfirm'] = 'Вие се готвите да изтриете формата за оценяване "{$a->formname}" и цялата свързана с това информация от "{$a->component} ({$a->area})". Моля, уверете се, че разбирате следните последствия:

* Няма начин тази операция да бъде отменена.
* Можете де превключите към друг метод за оценяване включително "Просто директно оценяване" без да изтривате тази форма.
* Цялата информация от попълнените форми ще бъде изгубена.
* Оценките, които са изчислени и записани в дневника на оценките няма да се повлияят. Обаче няма да остане информация как са били изчислени.
* Тази операция не влияе на копията от тази форма в други дейности.';
$string['manageactiondeletedone'] = 'Формата беше успешно изтрита';
$string['manageactionedit'] = 'Редактиране дефиницията на форма';
$string['manageactionnew'] = 'Дефиниране на нова форма за оценяване от нула';
$string['manageactionshare'] = 'Публикуване на формата като шаблон';
$string['manageactionshareconfirm'] = 'Вие се готвите да запишете копие от формата за оценяване "{$a}" като нова публична форма и други потребители на Вашия сайт ще могат да създават нови форми за техните дейности от шаблона.';
$string['manageactionsharedone'] = 'Формата беше записана успешно като шаблон';
$string['noitemid'] = 'Оценяване не е възможно. Елементът за оценяване не съществува.';
$string['nosharedformfound'] = 'Няма намерен шаблон';
$string['privacy:metadata:grading_definitions'] = 'Основната информация за разширената форма за оценяване, определена в измерима област.';
$string['searchownforms'] = 'включително и в моите форми';
$string['searchtemplate'] = 'Търсене на форма за оценяване';
$string['searchtemplate_help'] = 'Тук можете да търсите форма за оценяване и да я използвате като шаблон за новата форма. Напишете думи, които трябва да ги има някъде във името на формата, в нейното описание или някъде в самия текст. За да търсите фраза, оградете я в двойни кавички.


По подразбиране само форми за оценяване, които са запазени като споделени шаблони, са включени в резултатите от търсенето. Вие можете да включите в търсенето и всички Ваши форми за оценяване. По този начин, Вие просто можете да използвате отново своите форми за оценяване, без да ги споделяте. Само формите маркирани като \'Готови за използване\' може да се използват повторно по този начин.';
$string['statusdraft'] = 'Чернова';
$string['statusready'] = 'Готова за използване';
$string['templatedelete'] = 'Изтриване';
$string['templatedeleteconfirm'] = 'Вие се каните да изтриете споделеният шаблон "{$a}". Изтривайки шаблона не засяга формите, създадени от него.';
$string['templateedit'] = 'Редактиране';
$string['templatepick'] = 'Използване на шаблон';
$string['templatepickconfirm'] = 'Искате ли да използвате формата за оценяване "{$a->formname}" като шаблон за формата за оценяване в "{$a->component} ({$a->area})"?';
$string['templatepickownform'] = 'Използване на тази форма като шаблон';
$string['templatesource'] = 'Местоположение: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'Собствена форма';
$string['templatetypeshared'] = 'Споделени шаблони';
