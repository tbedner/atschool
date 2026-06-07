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
 * Strings for component 'qtype_shortanswer', language 'bg', version '4.4'.
 *
 * @package     qtype_shortanswer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreanswerblanks'] = 'Празни места за още {no} отговора';
$string['answer'] = 'Отговор: {$a}';
$string['answermustbegiven'] = 'Трябва да въведете и отговор, където има оценка или забележка.';
$string['answerno'] = 'Отговор {$a}';
$string['caseno'] = 'Не, няма значение малки или големи букви';
$string['casesensitive'] = 'Разлика между малки и големи букви';
$string['caseyes'] = 'Да, малките и големи букви трябва да съвпадат';
$string['correctansweris'] = 'Правилният отговор е: {$a}';
$string['correctanswers'] = 'Правилни отговори';
$string['filloutoneanswer'] = 'Трябва да зададете най-малко един възможен отговор. Отговори, останали празни няма да бъдат използвани. Символът \'*\' може да бъде използван като символ за заместване с поредица от всички възможни символи. Първият съвпадащ отговор ще бъде използван за определяне на точките и обратната връзка.';
$string['notenoughanswers'] = 'Този тип въпрос изисква поне {$a} отговора';
$string['pleaseenterananswer'] = 'Моля, въведете отговор.';
$string['pluginname'] = 'Кратък отговор';
$string['pluginname_help'] = 'В отговор на въпрос (който може да съдържа изображение) отговарящият пише една дума или кратка фраза. Може да има няколко възможни правилни отговора, всеки с различна оценка. Ако е зададено да се прави разлика между малки и големи букви, може да зададете различни резултати, например за "Дума" и "дума".';
$string['pluginname_link'] = 'question/type/shortanswer';
$string['pluginnameadding'] = 'Добавяне на въпрос - кратък отговор';
$string['pluginnameediting'] = 'Редактиране на въпрос от тип "Кратък отговор"';
$string['pluginnamesummary'] = 'Разрешава отговор от една или няколко думи, които се оценяват чрез сравнение с различни отговори-шаблони, които могат да съдържат заместващи символи.';
