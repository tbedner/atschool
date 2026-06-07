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
 * Strings for component 'qtype_randomsamatch', language 'bg', version '4.4'.
 *
 * @package     qtype_randomsamatch
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['insufficientoptions'] = 'Няма достатъчно възможности за избиране в този въпрос, затова той не е достъпен в теста. Моля, информирайте преподавателя.';
$string['nosaincategory'] = 'Няма въпроси от тип Кратък отговор в категория "{$a->catname}", която сте избрали. Изберете друга категория, добавете въпроси в тази категория.';
$string['notenoughsaincategory'] = 'Има само {$a->nosaquestions} въпроси от тип Кратък отговор в категория "{$a->catname}", която сте избрали. Изберете друга категория, добавете въпроси в тази категория или намалете броя на въпросите.';
$string['pluginname'] = 'Случайно съпоставяне на кратък отговор';
$string['pluginname_help'] = 'От гледна точка на студента, това изглежда като въпрос за съпоставяне. Разликата е, че списъкът от имена или изречения за съпоставяне (въпросите) се избират случайно от въпроси с кратки отговори от текущата категория. Трябва да има отделни, неизползвани въпроси с кратки отговори в категорията, иначе се показва съобщение за грешка.';
$string['pluginname_link'] = 'question/type/randomsamatch';
$string['pluginnameadding'] = 'Добавяне на въпрос Случайно съпоставяне на кратък отговор';
$string['pluginnameediting'] = 'Редактиране на Случайно съпоставяне на кратък отговор';
$string['pluginnamesummary'] = 'Като въпрос от тип Съпоставяне, но създаван чрез случайно избиране на въпроси от тип Кратък отговор от посочена категория.';
$string['privacy:metadata'] = 'Добавката за тип въпроси Случайно съпоставяне на кратък отговор не запазва лични данни.';
$string['randomsamatch'] = 'Случайно съпоставяне на кратък отговор';
$string['randomsamatchintro'] = 'За всеки от следващите въпроси изберете правилен отговор от менюто.';
$string['randomsamatchnumber'] = 'Брой на въпросите, които да бъдат избрани';
$string['subcats'] = 'Включи подкатегориите';
$string['subcats_help'] = 'Ако е избрано, въпроси ще се избират и от подкатегориите.';
