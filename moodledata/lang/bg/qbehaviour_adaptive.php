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
 * Strings for component 'qbehaviour_adaptive', language 'bg', version '4.4'.
 *
 * @package     qbehaviour_adaptive
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['disregardedwithoutpenalty'] = 'Предаденото задание не е валидно и е пренебрегнато без наказание.';
$string['gradingdetails'] = 'Точки за този отговор: {$a->raw}/{$a->max}.';
$string['gradingdetailsadjustment'] = 'Съгласно предишните опити, това носи <strong>{$a->cur}/{$a->max}</strong>.';
$string['gradingdetailspenalty'] = 'Това задание получи наказание от {$a}.';
$string['gradingdetailspenaltytotal'] = 'Общо наказание до сега: {$a}.';
$string['gradingdetailswithadjustment'] = 'Точки за този отговор: {$a->raw}/{$a->max}. Отчитайки предишните опити за даване на отговор, крайният резулат е <strong>{$a->cur}/{$a->max}</strong>.';
$string['gradingdetailswithadjustmentpenalty'] = 'Точки за този отговор: {$a->raw}/{$a->max}. Отчитайки предишните опити за даване на отговор, крайният резулат е <strong>{$a->cur}/{$a->max}</strong>. Този опит  генерира наказание от  {$a->penalty}.';
$string['gradingdetailswithadjustmenttotalpenalty'] = 'Точки за този въпрос: {$a->raw}/{$a->max}. Отчитайки предишните опити за даване на отговор, крайният резулат е <strong>{$a->cur}/{$a->max}</strong>. Този опит  генерира наказание от  {$a->penalty}. Сума а наказанията за отговорите до момента: {$a->totalpenalty}.';
$string['gradingdetailswithpenalty'] = 'Оценки за този отговор:  {$a->raw}/{$a->max}.
Този отговор генерира наказание от {$a->penalty}.';
$string['gradingdetailswithtotalpenalty'] = 'Оценки за този отговор:  {$a->raw}/{$a->max}.
Този отговор генерира наказание от {$a->penalty}. Общо наказания до момента: {$a->totalpenalty}.';
$string['notcomplete'] = 'Незавършен';
$string['pluginname'] = 'Адаптивен режим';
