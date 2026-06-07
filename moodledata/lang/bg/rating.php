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
 * Strings for component 'rating', language 'bg', version '4.4'.
 *
 * @package     rating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'Среден рейтинг';
$string['aggregatecount'] = 'Брой рейтинги';
$string['aggregatemax'] = 'Максимален';
$string['aggregatemin'] = 'Минимален';
$string['aggregatenone'] = 'Без рейтинги';
$string['aggregatesum'] = 'Сума от рейтинги';
$string['aggregatetype'] = 'Тип обобщаване';
$string['aggregatetype_help'] = 'Типът обобщаване определя как се комбинират рейтингите за да формират крайна оценка в книгата с оценки.

* Среден рейтинг - Средната стойност на всички рейтинги
* Брой на рейтингите - Общият брой рейтинги става финалната оценка.
* Максимален - Най-високият рейтинг става крайна оценка по дейността
* Минимален - Най-малкият рейтинг става крайна оценка по дейността
* Сума от рейтинги - Всички рейтинги се добавят заедно. Забележете, че сумата на всички рейтинги не трябва да превишава максималната оценка за дейността.

Ако е избрано "Без рейтинги", дейността няма да се отрази в книгата за оценки.';
$string['capabilitychecknotavailable'] = 'Проверка за правата не е възможна преди дейността да бъде записана.';
$string['noratings'] = 'Не са определени рейтинги';
$string['rate'] = 'Оценка';
$string['ratings'] = 'Рейтинги';
$string['ratingtime'] = 'Ограничаване на рейтингите само за записите между дати:';
$string['rolewarning'] = 'Роли с права да определят рейтинг';
$string['rolewarning_help'] = 'Ролите с позволение да оценяват са ролите с възможността moodle/rating:rate и всякакви специфични за дейността възможности. Можете да дадете повече позволения за оценяване през страница Позволения.';
