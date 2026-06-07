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
 * Strings for component 'qtype_calculatedmulti', language 'bg', version '4.4'.
 *
 * @package     qtype_calculatedmulti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answeroptions'] = 'Настройки на възможен отговор';
$string['answeroptions_help'] = 'Предлаганата формела за възможен отговор е ...<strong>{={x}+..}</strong>...';
$string['pluginname'] = 'Изчислителен затворен';
$string['pluginname_help'] = 'Затворените изчислителни въпроси са като въпроси с множество възможни отговори, в които възможните отговори, включват формула за пресмятане на резултата, с променливи във фигурни скоби, които се заместват със стойности, когато се покаже теста. Например, на въпрос: "Колко е лицето на правоъгълник със страни {a} и {b}?", един от възможните отговори е {={a}*{b}} (където * е знак за умножение).';
$string['pluginname_link'] = 'question/type/calculatedmulti';
$string['pluginnameadding'] = 'Добавяне на затворен изчислителен въпрос';
$string['pluginnameediting'] = 'Редактиране на въпрос от тип "Изчислителен затворен"';
$string['pluginnamesummary'] = 'Затворените изчислителни въпроси са като затворените въпроси, но възможните отговори могат да включват различни резултати, получени когато случайно избрани стойности са изчислени по зададена формула. ';
