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
 * Strings for component 'antivirus', language 'bg', version '4.4'.
 *
 * @package     antivirus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = 'Налични антивирусни добавки';
$string['antiviruscommonsettings'] = 'Общи антивирусни настройки';
$string['antiviruses'] = 'Антивирусни добавки';
$string['antivirussettings'] = 'Управление на антивирусни добавки';
$string['configantivirusplugins'] = 'Изберете антивирусните добавки, които искате да използвате, и ги подредете по реда на прилагане.';
$string['dataerrordesc'] = 'Възникна грешка в скенера за данни.';
$string['dataerrorname'] = 'Грешка в скенера за данни';
$string['datainfecteddesc'] = 'Открити са заразени данни.';
$string['datainfectedname'] = 'Данните са заразени';
$string['datastream'] = 'Данни';
$string['emailadditionalinfo'] = 'Допълнителни подробности, върнати от антивирусната програма:';
$string['emailauthor'] = 'Качен от:';
$string['emailcontenthash'] = 'Хеш на съдържанието:';
$string['emailcontenttype'] = 'Тип съдържание:';
$string['emaildate'] = 'Дата на качване:';
$string['emailfilename'] = 'Име на файла:';
$string['emailfilesize'] = 'Размер на файла:';
$string['emailgeoinfo'] = 'Геолокация:';
$string['emailinfectedfiledetected'] = 'Открит е заразен файл';
$string['emailipaddress'] = 'IP адрес:';
$string['emailreferer'] = 'Референт:';
$string['emailreport'] = 'Доклад:';
$string['emailscanner'] = 'Скенер:';
$string['emailscannererrordetected'] = 'Възникна грешка в скенера';
$string['emailsubject'] = '{$a} :: Антивирусно известие';
$string['enablequarantine'] = 'Активиране на карантината';
$string['enablequarantine_help'] = 'Ако е активирано, всички файлове, които са открити като вируси, ще бъдат поставени в карантина ([dataroot]/{$a}) за по-късна проверка. Качването в Moodle няма да бъде успешно. Ако имате сканиране за вируси на ниво файлова система, папката на карантината трябва да бъде изключена от антивирусната проверка, за да се избегне откриването на файловете под карантина.';
$string['fileerrordesc'] = 'Възникна грешка в скенера на файловете.';
$string['fileerrorname'] = 'Грешка в скенера на файлове';
$string['fileinfecteddesc'] = 'Открит е заразен файл.';
$string['fileinfectedname'] = 'Файлът е заразен';
$string['notifyemail'] = 'Имейл за антивирусно предупреждение';
$string['notifyemail_help'] = 'Имейл адресът за известия при откриване на вирус. Ако се остави празно, всички администратори на сайта ще получават известията.';
$string['notifylevel'] = 'Ниво на уведомяване';
$string['notifylevel_help'] = 'Различните нива на информация, за които искате да бъдете уведомени';
$string['notifylevelerror'] = 'Открити заплахи и грешки в скенера';
$string['notifylevelfound'] = 'Само открити заплахи';
$string['privacy:metadata'] = 'Добавката  Антивирус не съхранява лични данни.';
$string['quarantinedfiles'] = 'Файлове под антивирусна карантина';
$string['quarantinedisabled'] = 'Карантината е деактивирана. Файлът не се съхранява.';
$string['quarantinetime'] = 'Максимално време за карантина';
$string['quarantinetime_desc'] = 'Файлове, поставени в карантина, по-стари от посочения период, ще бъдат премахнати.';
$string['taskcleanup'] = 'Почистване на файловете, поставени под карантина.';
$string['threshold'] = 'Праг за проверка на състоянието';
$string['threshold_desc'] = 'Колко назад да се проверяват резултатите за грешки както е съобщено в {a}.';
$string['unknown'] = 'Неизвестен';
$string['virusfound'] = '{$a->item} е сканиран от антивирусна програма и е установено, че е заразен!';
