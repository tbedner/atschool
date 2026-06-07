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
 * Strings for component 'search', language 'bg', version '4.4'.
 *
 * @package     search
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsearch'] = 'Разширено търсене';
$string['all'] = 'Всички';
$string['allareas'] = 'Всички области';
$string['allcourses'] = 'Всички курсове';
$string['allusers'] = 'Всички потребители';
$string['author'] = 'Автор';
$string['authorname'] = 'Име на автор';
$string['back'] = 'Обратно';
$string['beadmin'] = 'Трябва да сте администратор на сайта за да използвате тази страница.';
$string['checkdb'] = 'Проверка на база данни';
$string['checkdbadvice'] = 'Проверява се Вашата база данни за проблеми.';
$string['checkdir'] = 'Проверка на директория';
$string['checkdiradvice'] = 'Установява се дали директорията съществува и е достъпна за запхиапис.';
$string['confirm_delete'] = 'Сигурни ли сте, че искате да изтриете индекса за {$a}? Докато областта бъде индексиране, потребителите няма да получават резултати от тази област.';
$string['confirm_deleteall'] = 'Сигурни ли сте, че искате да изтриете индексирането на съдържанието? Докато сайтът не бъде индексиран отново, потребителите няма да получават резултати при търсене.';
$string['confirm_indexall'] = 'Сигурни ли сте, че искате да актуализирате индексирането на съдържанието сега? Ако от индексиране се нуждае голямо количество съдържание, това ще отнеме много време. За "живи" сървъри, Вие трябва да оставите индексирането на изпълняваната по график задача "Индексиране на Търсене в сайта".';
$string['confirm_reindexall'] = 'Сигурни ли сте, че искате да индексирате наново съдържанието целия сайт сега? Ако сайтът има голямо количество съдържание, това ще отнеме много време и потребителите няма да получават пълни резултати от търсене докато индексирането не завърши.';
$string['core-all'] = 'Всичко';
$string['core-course-content'] = 'Съдържание на курс';
$string['core-courses'] = 'Курсове';
$string['core-other'] = 'Друго';
$string['core-users'] = 'Потребители';
$string['createanindex'] = 'създаване индекс';
$string['createdon'] = 'Създаден на';
$string['database'] = 'База данни';
$string['databasestate'] = 'Състояние на индексирането на базата данни';
$string['deleteindex'] = 'Изтриване индекс {$a}';
$string['docmodifiedon'] = 'Последно модифициран на {$a}';
$string['doctype'] = 'Тип документ';
$string['doctypenotsupported'] = 'Посоченият тип документ все още не се поддържа';
$string['documents'] = 'документи';
$string['documentsfor'] = 'Документи за';
$string['documentsindatabase'] = 'Документи в базата данни';
$string['documentsinindex'] = 'Документи в индекса';
$string['duration'] = 'Продължителност';
$string['emptydatabaseerror'] = 'Таблицата от базата данни не съществува, или не съдържа индексни записи.';
$string['enginenotfound'] = 'Машина {$a} не е намерена';
$string['enginenotinstalled'] = 'Машина {$a} не е инсталиране.';
$string['enginenotselected'] = 'Не сте избрали машина за търсене.';
$string['engineserverstatus'] = 'Машината за търсене не е налична. Моля, обадете се на администратора си.';
$string['enteryoursearchquery'] = 'Въведете думи за търсене';
$string['error_indexing'] = 'Възникна грешка при индексиране';
$string['errorareanotavailable'] = 'Областта {$a} не е достъпна за търсене.';
$string['errors'] = 'Грешки';
$string['everywhere'] = 'Навсякъде, където имате достъп';
$string['filesinindexdirectory'] = 'Файлове в директория за индекси';
$string['filterheader'] = 'Филтър';
$string['fromtime'] = 'Променено след';
$string['globalsearch'] = 'Търсене в сайта';
$string['globalsearchdisabled'] = 'Търсене в сайта не е активирано.';
$string['gradualreindex'] = 'Ново индексиране на сайта {$a}';
$string['gradualreindex_confirm'] = 'Сигурни ли сте, че искате ново индексиране на {$a}? Това ще отнеме известно време, макар, че данните за индексирането ще са налице по време на индексирането.';
$string['gradualreindex_queued'] = 'Изисква се ново индексиране за {$a->name} ({$a->count} контексти). Това индексиране ще се извърши от задачата по график "Индексиране на Търсене в сайта"';
$string['incourse'] = 'в курс {$a}';
$string['index'] = 'Индекс';
$string['indexwhendisabledfullnotice'] = 'Индексирането в момента не е позволено, когато търсенето не е разрешено. За да го активирате, моля вижте настройката: <a href="{$a->url}">searchindexwhendisabled</a>.';
$string['indexwhendisabledshortnotice'] = 'Индексирането';
$string['next'] = 'Следващ';
$string['noresults'] = 'Няма резултати';
$string['search'] = 'Търсене';
$string['search:course'] = 'Курсове';
$string['search:customfield'] = 'Потребителски полета на курсове';
$string['search:message_received'] = 'Съобщения - получени';
$string['search:message_sent'] = 'Съобщения - изпратени';
$string['search:mycourse'] = 'Моите курсове';
$string['search:section'] = 'Секции на курсове';
$string['search:user'] = 'Потребители';
$string['searcharea'] = 'Област за търсене';
$string['searchareacategories'] = 'Категории области за търсене';
$string['searching'] = 'Търсене в ...';
$string['searchwithin'] = 'Търсене в';
$string['seconds'] = 'секунди';
$string['solutions'] = 'Решения';
$string['statistics'] = 'Статистики';
$string['title'] = 'Заглавие';
$string['totalsize'] = 'Пълен размер';
$string['totime'] = 'Променено преди';
$string['viewresultincontext'] = 'Преглеждане на този резултат в контекст';
