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
 * Strings for component 'condition', language 'bg', version '4.4'.
 *
 * @package     condition
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['availabilityconditions'] = 'Ограничаване на достъпа';
$string['availablefrom'] = 'Разрешаване на достъпа от';
$string['availableuntil'] = 'Разрешаване на достъпа до';
$string['badavailabledates'] = 'Невалидни дати. Ако въведете и двете дати, то "Разрешаване на достъпа от" трябва да съдържа дата, предхождаща датата в "Разрешаване на достъпа до"';
$string['completion_complete'] = 'трябва да е маркиран като приключен';
$string['completion_fail'] = 'трябва да е завършен със слаба оценка';
$string['completion_incomplete'] = 'Трябва да не е маркиран като приключен';
$string['completioncondition'] = 'Условие за завършване на дейността';
$string['configenableavailability'] = 'Поставянето на отметката Ви позволява да зададете условия (основани на дата, оценка, или завършване), които да определят дали дейност или ресурс да са достъпни.';
$string['contains'] = 'съдържа';
$string['doesnotcontain'] = 'не съдържа';
$string['enableavailability'] = 'Разрешаване на условен достъп';
$string['endswith'] = 'приключва с';
$string['grade_atleast'] = 'трябва да е поне';
$string['grade_upto'] = 'и по-малко от';
$string['gradecondition'] = 'Условие за оценка';
$string['isempty'] = 'е празно';
$string['isequalto'] = 'е равно на';
$string['none'] = '(няма)';
$string['notavailableyet'] = 'Не е достъпно все още';
$string['requires_completion_1'] = 'Не е достъпно, докато дейност <strong>{$a}</strong> не е маркирана като завършена.';
$string['requires_date'] = 'Достъпно от {$a}.';
$string['requires_date_before'] = 'Достъпно до {$a}.';
$string['requires_date_both'] = 'Достъпно от {$a->from} до {$a->until}.';
$string['requires_grade_any'] = 'Не е достъпно докато нямате оценка по <strong>{$a}</strong>.';
$string['requires_grade_min'] = 'Недостъпен докато не постигнете изисквания резултат в <strong>{$a}</strong>.';
$string['showavailability'] = 'Докато достъпът до дейността е забранен';
$string['showavailability_hide'] = 'Пълно скриване на дейността от курса и от дневника за оценки';
$string['showavailability_show'] = 'Показване на дейността засивена,  информация за ограниченията';
$string['startswith'] = 'започва с';
$string['userrestriction_hidden'] = 'Ограничен (напълно скрит, без съобщение): {$a}';
$string['userrestriction_visible'] = 'Ограничен: {$a}';
