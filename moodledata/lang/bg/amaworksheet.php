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
 * Strings for component 'amaworksheet', language 'bg', version '4.4'.
 *
 * @package     amaworksheet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['amaworksheet:addinstance'] = 'Добавяне на нов работен лист';
$string['amaworksheet:view'] = 'Отваряне на работен лист';
$string['amaworksheetcontent'] = 'Файлове и подпапки';
$string['amaworksheetdetails_sizedate'] = '{$a->size} {$a->date}';
$string['amaworksheetdetails_sizetype'] = '{$a->size} {$a->type}';
$string['amaworksheetdetails_sizetypedate'] = '{$a->size} {$a->type} {$a->date}';
$string['amaworksheetdetails_typedate'] = '{$a->type} {$a->date}';
$string['cannotcreatetoken'] = 'Отваряне на работен лист';
$string['cannotcreatetoken_help'] = 'Нямате позволения да отворите документа в Amanote.';
$string['clicktoamaworksheet'] = 'Отваряне на работен лист';
$string['clicktodownloadfile'] = 'Изтегляне като PDF';
$string['dnduploadamaworksheet'] = 'Създаване на работен лист';
$string['downloadfile'] = 'Изтегляне';
$string['guestsarenotallowed'] = 'Отваряне на работен лист';
$string['guestsarenotallowed_help'] = 'Гостите нямат право да отварят ресурс в Amanote. Моля, влезте за достъп до тази функция.';
$string['importantinformationdescription'] = 'За да може модулът да работи правилно, проверете дали са изпълнени следните изисквания на вашия сайт Moodle:

1. Уеб услугите са активирани (Администриране на сайта > Разширена функция)

2. *Мобилна уеб услуга на Moodle* е активирана (Администриране на сайта > Плъгини > Уеб услуги > Външни услуги)

3. Протоколът REST е активиран (Администриране на сайта > Плъгини > Уеб услуги > Управление на протоколи)

4. Възможността *webservice/rest:use* е разрешена за *удостоверени потребители* (Администриране на сайта > Потребители > Разрешения > Дефиниране на роли > Удостоверени потребители > Управление на роли)';
$string['importantinformationheading'] = 'Важна информация за инсталирането';
$string['key'] = 'Ключ за активиране';
$string['key_help'] = 'Този ключ е необходим за разширените функции като Podcast Creator.';
$string['modifieddate'] = 'Променено {$a}';
$string['modulename'] = 'PDF работен лист';
$string['modulename_help'] = 'Файлът на работния лист е PDF файл с въпроси или упражнения за обучаваните. Приставката Worksheet на Amanote позволява на обучаваните да отговарят на въпросите директно върху PDF-а, а преподавателите да извличат отговорите на обучаваните.';
$string['modulenameplural'] = 'PDF работен лист';
$string['openinamaworksheet'] = 'Отваряне работния лист';
$string['openinamaworksheet_help'] = 'Отварянето на работния лист ще ви позволи да отговорите на въпросите с Amanote..';
$string['openpodcastcreator'] = 'Добавяне на устни обяснения';
$string['openpodcastcreator_help'] = 'Добавяне на устни обяснения към работния лист.';
$string['openstudentsnotes'] = 'Отваряне работата на обучаван';
$string['openstudentsnotes_help'] = 'Това Ви дава достъп до отговорите, които обучаваните са  изпратили.';
$string['pluginadministration'] = 'Администриране на модул Amanote';
$string['pluginname'] = 'Работен лист на Amanote';
$string['podcastcreatorbutton'] = 'Добавяне на устни обяснения';
$string['printintro'] = 'Показване на описанието на ресурса';
$string['printintroexplain'] = 'Показване на описанието на ресурса под съдържанието?';
$string['privacy:metadata'] = 'За да се интегрират с Amanote, някои потребителски данни трябва да бъдат изпратени до клиентското приложение на Amanote (отдалечена система).';
$string['privacy:metadata:access_token'] = 'Токенът за достъп на потребителя е необходим за запазване на бележките в пространството за лични файлове на Moodle.';
$string['privacy:metadata:access_token_expiration'] = 'Изтичането на токена за достъп се случва, за да попречи на потребителя да използва приложението с изтекъл токен.';
$string['privacy:metadata:email'] = 'Имейлът на потребителя се изпраща до отдалечената система, за да позволи по-добро потребителско изживяване (споделяне на бележки, известия и т.н.).';
$string['privacy:metadata:fullname'] = 'Пълното име на потребителя се изпраща до отдалечената система, за да позволи по-добро потребителско изживяване.';
$string['privacy:metadata:subsystem:corefiles'] = 'PDF файловете се съхраняват с помощта на файловата система на Moodle.';
$string['privacy:metadata:userid'] = 'Ид. номерът на потребителя се изпраща от Moodle към Amanote, за да се ускори процеса на удостоверяване.';
$string['servicenotavailable'] = 'Отваряне на работен лист';
$string['servicenotavailable_help'] = 'Услугата не е налична. Свържете се с администратора на сайта.';
$string['showdate'] = 'Показване на датата на качване/промяна';
$string['showdate_desc'] = 'Показване на датата на качване/промяната на страницата на курса?';
$string['showdate_help'] = 'Показва датата на качване/на промяна до връзки към ресурса.';
$string['showsize'] = 'Показване на размера';
$string['showsize_desc'] = 'Показване на размера на файла на страницата на курса?';
$string['showsize_help'] = 'Показва размера на файла, като например "3,1 MB", до връзките към ресурса.';
$string['unexpectederror'] = 'Отваряне на работен лист';
$string['unexpectederror_help'] = 'Възникна неочаквана грешка, ресурсът не може да бъде отворен в Amanote. Свържете се с администратора на сайта.';
$string['unsecureconnection'] = 'Внимание! Вашата връзка не е защитена.';
$string['uploadeddate'] = 'Качен {$a}';
