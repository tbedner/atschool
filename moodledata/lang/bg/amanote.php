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
 * Strings for component 'amanote', language 'bg', version '4.4'.
 *
 * @package     amanote
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['amanote:addinstance'] = 'Добавете нов файл с възможност за анотация';
$string['amanote:view'] = 'Отворете файл с възможност за анотация';
$string['amanotecontent'] = 'Файлове и подпапки';
$string['amanotedetails_sizedate'] = '{$a->size} {$a->date}';
$string['amanotedetails_sizetype'] = '{$a->size} {$a->type}';
$string['amanotedetails_sizetypedate'] = '{$a->size} {$a->type} {$a->date}';
$string['amanotedetails_typedate'] = '{$a->type} {$a->date}';
$string['autosaveperiod'] = 'Период на автоматично запазване';
$string['autosaveperiod_help'] = 'Конфигурирайте периода от време в минути между автоматичните записвания (мин.: 1, макс.: 30). Задаването на периода на 0 означава, че няма автоматично запазване.';
$string['cannotcreatetoken'] = 'Отворете в Amanote';
$string['cannotcreatetoken_help'] = 'Нямате позволение за да отворите документа в Amanote.';
$string['clicktoamanote'] = 'Отворете в Amanote';
$string['clicktodownloadfile'] = 'Изтегляне на PDF файл';
$string['clicktodownloadnotes'] = 'Изтегляне на файл с коментари';
$string['clicktoopen'] = 'Отваряне в нов раздел';
$string['dnduploadamanote'] = 'Създаване на файл с възможност за анотация';
$string['downloadfile'] = 'Изтегляне';
$string['guestsarenotallowed'] = 'Отваряне в Amanote';
$string['guestsarenotallowed_help'] = 'Гостите нямат право да отварят ресурс в Amanote. Влезте за да имате достъп до тази функция.';
$string['importantinformationdescription'] = 'За да може модулът да работи правилно, моля, проверете дали са изпълнени следните изисквания на вашия, ползващ Moodle сайт:

1. Уеб услугите са активирани (Администриране на сайта > Разширени възможности)

2. *Мобилна уеб услуга на Moodle* е активирана (Администриране на сайта > Сървър > Уеб услуги > Външни услуги)

3. Протоколът REST е активиран (Администриране на сайта > Сървър > Уеб услуги > Управление на протоколи)

4. Правото *webservice/rest:use* е разрешено за ролята *Удостоверен потребител* (Администриране на сайта > Потребители > Права и роли > Дефиниране на роли > Удостоверен потребител)';
$string['importantinformationheading'] = 'Важна информация за инсталирането';
$string['key'] = 'Ключ за активиране';
$string['key_help'] = 'Този ключ е необходим за разширени функции като Podcast Creator.';
$string['modifieddate'] = 'Променено {$a}';
$string['modulename'] = 'Файл с възможност за анотация';
$string['modulename_help'] = 'Файлът с възможност за анотация е ресурс за курс (PDF), който обучаваните могат да отворят в Amanote©, за да водят ясни и структурирани бележки върху него.

Обучаваните имат възможност да:

* Отворят ресурса на курса в нов раздел на браузъра
* Изтеглят ресурса на курса на компютърa си
* Отворят ресурса на курса в Amanote© и започна да си водят бележки

Когато обучаваните отворят ресурса на курса в Amanote©, те имат възможността да започнат интелигентно водене на бележки. Техните бележки са свързани с различните страници на документа. Освен това те могат да обогатят своите бележки с анотации, чертежи, формули, изображения, подчертаване в слайдове и др.

Когато обучаваните запазят своите бележки, те се запазват в  личното им пространство. Следващия път, когато отворят ресурса, те ще получат обратно своите бележки.';
$string['modulenameplural'] = 'Файлове с възможност за анотация';
$string['nonotestodownload'] = 'Изтегляне на файл с анотации';
$string['nonotestodownload_help'] = 'Все още нямате запазени бележки за този документ.';
$string['openinamanote'] = 'Отваряне в Amanote';
$string['openinamanote_help'] = 'Отварянето на документа в Amanote ви позволява да започнете или да продължите да водите бележки.';
$string['openpodcastcreator'] = 'Отваряне на Podcast Creator';
$string['openpodcastcreator_help'] = 'Podcast Creator ви позволява да запишете нов подкаст или да редактирате съществуващ.';
$string['openstatistics'] = 'Отваряне на статистиката';
$string['openstatistics_help'] = 'Това Ви дава достъп до статистическите данни за използването на ресурса от обучаваните и техните отзиви за него.';
$string['pluginadministration'] = 'Администриране на модула Amanote';
$string['pluginname'] = 'Amanote';
$string['podcastcreatorbutton'] = 'Отваряне на Podcast Creator';
$string['preventdownload'] = 'Предотвратяване на изтеглянето на PDF';
$string['preventdownload_desc'] = 'Не позволявайте на потребителите да изтеглят файла.';
$string['printintro'] = 'Показване на описанието на ресурса';
$string['printintroexplain'] = 'Показване на описанието на ресурса под съдържанието?';
$string['privacy:metadata'] = 'За да се интегрират с Amanote, някои потребителски данни трябва да бъдат изпратени до клиентското приложение на Amanote (отдалечена система).';
$string['privacy:metadata:email'] = 'Имейлът на потребителя се изпраща до отдалечената система, за да позволи по-добро потребителско изживяване (споделяне на бележки, известия и т.н.).';
$string['privacy:metadata:fullname'] = 'Пълното име на потребителя се изпраща до отдалечената система, за да позволи по-добро потребителско изживяване.';
$string['privacy:metadata:subsystem:corefiles'] = 'Файловете (PDF, AMA) се съхраняват с помощта на файловата система на Moodle.';
$string['privacy:metadata:userid'] = 'Потребителският идентификатор се изпраща от Moodle към Amanote, за да се ускори процеса на удостоверяване.';
$string['saveinprivate'] = 'Запазване на бележки в личните файлове';
$string['saveinprivate_help'] = 'Запазете анотирания файл във файловете на потребителя. Това ще позволи на потребителя да си върне бележките следващия път, когато отвори файла с възможност за анотация в Amanote.';
$string['servicenotavailable'] = 'Отваряне в Amanote';
$string['servicenotavailable_help'] = 'Услугата не е налична. Моля, свържете се с администратора на сайта.';
$string['showdate'] = 'Показване на датата на качване/промяна';
$string['showdate_desc'] = 'Показване на датата на качване/промяна на страницата на курса?';
$string['showdate_help'] = 'Показва датата на качване/промяна до връзките към ресурса.';
$string['showsize'] = 'Показване на размера';
$string['showsize_desc'] = 'Показване на размера на файла на страницата на курса?';
$string['showsize_help'] = 'Показва размера на файла, като например \'3,1 MB\', до връзките към ресурса.';
$string['statisticsbutton'] = 'Отваряне на Анализа на обучението';
$string['unexpectederror'] = 'Отваряне в Amanote';
$string['unexpectederror_help'] = 'Възникна неочаквана грешка, ресурсът не може да бъде отворен в Amanote. Свържете се с администратора на сайта.';
$string['unsecureconnection'] = 'Внимание! Вашата връзка не е защитена.';
$string['uploadeddate'] = 'Качен {$a}';
