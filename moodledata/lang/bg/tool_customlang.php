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
 * Strings for component 'tool_customlang', language 'bg', version '4.4'.
 *
 * @package     tool_customlang
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkin'] = 'Запазване на низовете в езиковия пакет';
$string['checkout'] = 'Отваряне на езиковия пакет за редактиране';
$string['checkoutdone'] = 'Езиковият пакет зареден';
$string['checkoutinprogress'] = 'Зареждане на езиковия пакет';
$string['cliexportfileexists'] = 'Файл {$a->lang} вече съществува. Ако искате да го презапишете добавете опция --override=true';
$string['cliexportfilenotfoundforcomponent'] = 'Файл {$a->filepath} не е намерен в езиков пакет {$a->lang}. Прескачане на този файл.';
$string['cliexportheading'] = 'Започване експортирането на езикови пакети.';
$string['cliexportnofilefoundforlang'] = 'Не са намерени файлове за експортиране. Прескачане експортирането на този език.';
$string['cliexportstartexport'] = 'Експортиране на език {$a}';
$string['cliexportzipdone'] = 'Създаден е zip файл:  {$a}';
$string['cliexportzipfail'] = 'Не може да се създаде zip файл {$a}';
$string['clifiles'] = 'Файлове за импортиране в {$a}';
$string['cliimporting'] = 'Импортиране на файлове (режим {$a})';
$string['climissingfiles'] = 'Липсващи валидни файлове';
$string['climissinglang'] = 'Липсващ език';
$string['climissingmode'] = 'Липсващ или невалиден режим (може да бъде all, new или update)';
$string['climissingsource'] = 'Липсващ файл или папка';
$string['clinolog'] = 'Няма нищо за импортиране в {$a}';
$string['confirmcheckin'] = 'Вие сте на път да запазите промени във Ваше локално копие на езиковия пакет. Това ще експортира променените низове в директорията за данни и Вашият сайт ще започне да използва тези променени низове. Щракнете "Продължаване" за да продължите със запазването.<br /> <br />

Горещо Ви препоръчваме, ако сте превели низове, които не са били преведени в официалния езиков пакет, или сте поправили неточности на официалния превод, да се свържете с <a href="http://docs.moodle.org/23/en/Translation_credits#Bulgarian_.28bg.29" target="_blank">language maintainer</a> и да му изпратите преведените низове, за да бъдат добавени в официалния превод.';
$string['customlang:edit'] = 'Редактиране на локалния превод';
$string['customlang:export'] = 'Експортиране на локалния превод';
$string['customlang:view'] = 'Преглеждане на локалния превод';
$string['editlangpack'] = 'Редактиране на езиков пакет';
$string['export'] = 'Експортиране на персонализираните низове';
$string['exportfilter'] = 'Изберете компонент(и) за експортиране';
$string['exportzipfilename'] = 'customlang-export-{$a->lang}.zip';
$string['filter'] = 'Филтриране на низове';
$string['filtercomponent'] = 'Показване на низовете от следните компоненти:';
$string['filtercustomized'] = 'Само персонализираните';
$string['filtermodified'] = 'Само модифицираните в тази сесия';
$string['filteronlyhelps'] = 'Само от помощната система';
$string['filtershowstrings'] = 'Показване на низовете';
$string['filterstringid'] = 'Идентификатор на низа';
$string['filtersubstring'] = 'Само низове, съдържащи';
$string['headingcomponent'] = 'Компонента';
$string['headinglocal'] = 'Локално персонализиране';
$string['headingstandard'] = 'Стандартен текст';
$string['headingstringid'] = 'Низ';
$string['import'] = 'Импортиране на персонализирани низове';
$string['import_all'] = 'Създаване или обновяване на всички низове от компонент(и)';
$string['import_mode'] = 'Режим на импортиране';
$string['import_new'] = 'Създаване само на низове без локална персонализация';
$string['import_update'] = 'Обновяване само на низове с локална персонализация';
$string['importfile'] = 'Импортиране на файл';
$string['langpack'] = 'Компорант(и) на езика';
$string['markinguptodate'] = 'Отбелязване на персонализирането за актуално';
$string['markinguptodate_help'] = 'Персонализираният превод може да стане неактуален, или ако оригиналът на английски или ако официалният превод са променени, след като низът е бил променен на Вашия сайт. Прегледайте персоналния превод. Ако го намирате за актуален, отбележете това с отметката, иначе го редактирайте.';
$string['markuptodate'] = 'отбележете, че е актуален';
$string['modifiedno'] = 'Няма';
$string['modifiednum'] = 'Има {$a} променени низове. Искате ли да запазите тези промени във Вашия локален езиков пакет?';
$string['nolocallang'] = 'Не са намерени локални низове';
$string['nostringsfound'] = 'Не са намерени низове. Моля модифицирайте настройките на филтъра';
$string['notice_ignorenew'] = 'Игнориране на низ {$a->component}/{$a->stringid} защото не е персонализиран.';
$string['notice_ignoreupdate'] = 'Игнориране на низ {$a->component}/{$a->stringid} защото вече е определен.';
$string['notice_inexitentstring'] = 'Не е намерен низ {$a->component}/{$a->stringid}';
$string['notice_missingcomponent'] = 'Липсващ компонент {$a->component}.';
$string['notice_success'] = 'Низ {$a->component}/{$a->stringid} е обновен успешно.';
$string['placeholder'] = 'Запазени места';
$string['placeholder_help'] = 'Запазените места са специални означения в низовете, като `{$a}` или `{$a->something}`. Те се заменят със стойности, когато низът се покаже.

Важно е да ги копирате точно, както са в оригиналния низ. Не ги превеждайте и не променяйте тяхната посока (за езици, които се четат в посока от дясно наляво).';
$string['placeholderwarning'] = 'низът съдържа запазено място';
$string['pluginname'] = 'Персонализиране на езика';
$string['privacy:metadata'] = 'Добавката Персонализиране на езика не запазва лични данни.';
$string['savecheckin'] = 'Запазване на промените в езиковия пакет';
$string['savecontinue'] = 'Прилагане на промените и продължаване на редактирането';
