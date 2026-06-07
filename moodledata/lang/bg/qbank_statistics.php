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
 * Strings for component 'qbank_statistics', language 'bg', version '4.4'.
 *
 * @package     qbank_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['discrimination_index'] = 'Изисква проверка?';
$string['discrimination_index_help'] = 'Даден въпрос е означен с "Изисква проверка?" въз основа на статистиката. Например, ако обучаваните получават нисък резултат на въпроса, но висок резултат на целия тест, или висок резултат на въпроса, но нисък резултат на целия тест, тогава може да има проблем с въпроса, като например грешен отговор, зададен като правилен. Статистиката обаче не е безпогрешна; това е само намек, че въпросът трябва да бъде проверен.';
$string['discriminative_efficiency'] = 'Дискриминираща ефективност';
$string['discriminative_efficiency_help'] = 'Дискриминиращата ефективност е статистическа оценка за това колко добре въпросът оценява обучаваните, като по-високата стойност е по-добра. Особено ниска стойност може да показва проблем с въпроса. Много труден или лесен въпрос (с индекс на лекота близо до 0% или 100%) също може да доведе до ниска стойност.';
$string['discriminative_efficiency_link'] = 'mod/quiz/statistics';
$string['facility_index'] = 'Индекс на лекота';
$string['facility_index_help'] = 'Индексът на лекотата показва средната оценка (като процент), получена за всички версии на въпроса във всички тестове, в които му е отговорено. По-високата стойност обикновено показва по-лесен въпрос.';
$string['likely'] = 'Вероятно';
$string['unlikely'] = 'Малко вероятно';
$string['verylikely'] = 'Много вероятно';
