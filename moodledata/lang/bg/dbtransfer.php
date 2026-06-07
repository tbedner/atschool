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
 * Strings for component 'dbtransfer', language 'bg', version '4.4'.
 *
 * @package     dbtransfer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkingsourcetables'] = 'Проверка на структурата на източника на таблицата';
$string['copyingtable'] = 'Копиране на таблица {$a}';
$string['copyingtables'] = 'Копиране на съдържанието на таблицата';
$string['creatingtargettables'] = 'Създаване на таблиците в целевата база данни';
$string['dbexport'] = 'Експорт на база данни';
$string['dbtransfer'] = 'Трансфер на база данни';
$string['differenttableexception'] = 'Структурата на таблицата {$a} не съвпада.';
$string['done'] = 'Готово';
$string['exportschemaexception'] = 'Текущата структура на базата данни не съответства на всички install.xml файлове. <br /> {$a}';
$string['importschemaexception'] = 'Текущата структура на базата данни не съответства на всички install.xml файлове. <br /> {$a}';
$string['importversionmismatchexception'] = 'Текущата версия {$a->currentver} не съответства на експортираната версия {$a->schemaver}.';
$string['malformedxmlexception'] = 'Открит е неправилен XML, не може да продължи.';
$string['tablex'] = 'Таблица {$a}:';
$string['unknowntableexception'] = 'В експортирания файл е намерена непозната таблица {$a}.';
