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
 * Strings for component 'qformat_xml', language 'bg', version '4.4'.
 *
 * @package     qformat_xml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['invalidxml'] = 'Невалиден XML файл - очаква се низ (използвайте CDATA?)';
$string['pluginname'] = 'Moodle XML формат';
$string['pluginname_help'] = 'Това е специфичен за Moodle формат за импортиране и експортиране на въпроси.';
$string['pluginname_link'] = 'qformat/xml';
$string['truefalseimporterror'] = '<b>Внимание</b>: Въпросът от тип Истина/Неистина "{$a->questiontext}" не може правилно да се импортира. Не е ясно дали правилният отговор е "Истина" или "Неистина. Въпросът е импортиран все едно че отговорът е "{$a->answer}". Ако това не е вярно, ще трябва да редактирате въпроса.';
$string['unsupportedexport'] = 'Въпроси от тип {$a} не се поддържат от XML експортирането';
$string['xmlimportnoname'] = 'Липсващо име на въпрос в XML файл';
$string['xmlimportnoquestion'] = 'Липсващ текст на въпрос в XML файл';
$string['xmltypeunsupported'] = 'Въпроси от тип {$a} не се поддържат от XML импортирането';
