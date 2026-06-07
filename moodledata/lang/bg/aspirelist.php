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
 * Strings for component 'aspirelist', language 'bg', version '4.4'.
 *
 * @package     aspirelist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aspirecodesettings'] = 'Настройки на кода на Talis Aspire';
$string['aspirelist'] = 'Списък с ресурси: {$a}';
$string['aspirelist:addinstance'] = 'Добавяне на нов списък с ресурси';
$string['aspirelist:view'] = 'Вижте съдържанието на списъка с ресурси';
$string['aspirelistname'] = 'Име на списък с ресурси';
$string['aspiresitesettings'] = 'Настройки на сайта на Talis Aspire';
$string['aspireurl'] = 'URL на Aspire';
$string['aspireurl_desc'] = 'Въведете основния URL адрес на вашия сайт Talis Aspire (не HTTPS псевдоним).';
$string['aspireurlhttpsalias'] = 'Aspire URL HTTPS псевдоним';
$string['aspireurlhttpsalias_desc'] = 'Въведете URL адреса на HTTPS псевдонима на вашия сайт Talis Aspire (ако имате такъв).';
$string['authorsinconfig'] = 'Включете авторите във формата за конфигурация';
$string['authorsinconfig_desc'] = 'Трябва ли описанията на ресурсните елементи във формулярите за конфигурацията на модула да включват имената на авторите? По подразбиране са включени само заглавието на елемента и форматът на ресурса, за да се спести място във формуляра.';
$string['cachedef_listdata'] = 'Кеширани данни от списък с ресурси, извлечени от Talis Aspire';
$string['center'] = 'Център';
$string['codecolumn'] = 'Колона с код на Aspire';
$string['codecolumn_desc'] = 'Не е задължително. Името на колоната в персонализираната таблица, съдържаща кодовете на вашия списък Talis Aspire';
$string['coderegex'] = 'Регулярен израз на код на Aspire';
$string['coderegex_desc'] = 'Не е задължително. Ако използвате идентификационния номер на курса или краткото име като източник на код, това е регулярен израз (включително разделители), съответстващ на частта от кода на Talis Aspire. Ако тук не е предоставен регулярен израз, ще се приеме, че полето съдържа само кода на Aspire.';
$string['codesource'] = 'Източник на код на Aspire';
$string['codesource_desc'] = 'Изберете източника на кодовете на вашия списък Talis Aspire. Ако решите да използвате персонализирана таблица на база данни, трябва също да посочите таблицата, колоните и подробностите за атрибутите на курса в полетата по-долу. Ако не бъде намерен код в персонализираната таблица за определен курс, идентификационният номер на курса ще бъде проверен като резервен вариант.';
$string['codetable'] = 'Персонализирана таблица за базата данни';
$string['codetable_desc'] = 'Не е задължително. Името на персонализирана таблица в базата данни на Moodle, съдържаща кодовете на вашия списък Talis Aspire, съпоставени с атрибута на курса на Moodle.';
$string['college'] = 'Колеж';
$string['contentheader'] = 'Избор на списък с ресурси';
$string['course'] = 'Курс';
$string['courseattribute'] = 'Атрибут на курса';
$string['courseattribute_desc'] = 'Не е задължително. Уникалният атрибут на курса, който е съпоставен с вашите кодове на Talis Aspire в персонализираната таблица (ноnormally id, idnumber or shortname).';
$string['coursecolumn'] = 'Колона за курса';
$string['coursecolumn_desc'] = 'Не е задължително. Името на колоната в персонализираната таблица, съдържаща атрибута на курса, който е съпоставен с кодовете на вашия списък Talis Aspire.';
$string['defaultdisplay'] = 'Режим на показване по подразбиране';
$string['defaultdisplay_desc'] = 'По подразбиране трябва ли новите списъци с ресурси да се показват на отделна страница чрез връзка или вградени на страницата на курса?';
$string['department'] = 'Отдел';
$string['display'] = 'Показване на съдържанието на списъка с ресурси';
$string['display_help'] = 'Ако изберете да покажете съдържанието на списъка с ресурсите на страницата на курса, няма да имате връзка към отделната страница. Описанието ще се показва само ако е отметнато „Показване на описанието на страницата на курса“.';
$string['displayinline'] = 'Вграден на страницата на курса';
$string['displaypage'] = 'На отделна страница';
$string['division'] = 'Подразделение';
$string['errorcodecolumn'] = 'Трябва да посочите колоната с код, ако искате да използвате персонализираната таблица на базата данни като източник на код на Aspire.';
$string['errorcodesource'] = 'Трябва да предоставите всички подробности за таблицата и колоната по-долу, ако искате да използвате персонализираната таблица от базата данни като източник на кода на Aspire.';
$string['errorcodetable'] = 'Трябва да уточните името на таблицата, ако искате да използвате персонализираната таблица от базата данни като източник на кода на Aspire.';
$string['errorcourseattribute'] = 'Трябва да уточните атрибута на курса, ако искате да използвате персонализираната таблица от базата данни като източник на кода на Aspire.';
$string['errorcoursecolumn'] = 'Трябва да уточните колоната на курса, ако искате да използвате персонализираната таблица от базата данни като източник на кода на Aspire.';
$string['faculty'] = 'Факултет';
$string['field'] = 'Поле';
$string['generalsettings'] = 'Основни настройки';
$string['includechildcodes'] = 'Включете мета дъщерни кодове';
$string['includechildcodes_desc'] = 'Проверете за мета връзки към курсовете и включете кодовете в списъка на Aspire, свързани с всички намерени дъщерни курсове.';
$string['institute'] = 'Институт';
$string['institution'] = 'Институция';
$string['itemcount'] = '{$a} точка';
$string['itemcountplural'] = '{$a} точки';
$string['kgcolumn'] = 'Колона на групирани знания';
$string['kgcolumn_desc'] = 'Не е задължително. Името на колоната в персонализираната таблица, съдържаща групата знания (ако остане празна групата знания по подразбиране, конфигурирана в настройките на сайта на Talis Aspire, ще се използва за всички списъци).';
$string['knowledgegroup'] = 'Група знания по подразбиране';
$string['knowledgegroup_desc'] = 'Изберете целева група знания по подразбиране за вашите списъци Talis Aspire. Това може да бъде заменено за списъка, ако използвате персонализираната таблица на базата данни за вашия източник на кода на Aspire (конфигуриран по-долу).';
$string['level'] = 'Ниво';
$string['module'] = 'Модул';
$string['modulename'] = 'Списък с ресурси на Aspire';
$string['modulename_help'] = '<p>Модулът за списъка с ресурси на Aspire позволява на учителя да включи селекцията от ресурси от свързаните списъци с ресурсите на Talis Aspire директно в съдържанието на своя курс.</p><p>Списъкът с ресурси може да бъде показан или в отделна, свързана страница или вградена в самата страница на курса (първоначално скрита, с връзка за превключване на видимостта).</p>';
$string['modulename_link'] = 'mod/aspirelist/view';
$string['modulenameplural'] = 'Списъци с ресурси на Aspire';
$string['noaspirelists'] = 'За съжаление няма списъци с ресурси, свързани с този {$a}.';
$string['noconnection'] = 'За съжаление уебсайтът на Talis Aspire в момента не е достъпен. Опитайте отново по-късно.';
$string['onlineresource'] = 'Онлайн ресурс';
$string['page-mod-aspirelist-view'] = 'Главна страница на модула на списъка с ресурсите';
$string['page-mod-aspirelist-x'] = 'Страница на модула със списъка с различни ресурси';
$string['pathway'] = 'Пътека';
$string['pluginadministration'] = 'Администриране на списъка с ресурси на Aspire';
$string['pluginname'] = 'Списъка с ресурси на Aspire';
$string['previewitem'] = 'Предварителен преглед на точка';
$string['programme'] = 'Програма';
$string['requiremodintro'] = 'Изискване за описание на списъка с ресурсите';
$string['requiremodintro_desc'] = 'Активирайте тази опция, ако искате да принудите потребителите да въвеждат описание за всеки списък с ресурси.';
$string['school'] = 'Училище';
$string['selectresources'] = 'Изберете ресурси от „{$a}“';
$string['showhide'] = 'Показване/скриване на списъка с ресурси';
$string['subject'] = 'Предмет';
$string['unit'] = 'Модул';
$string['yearregex'] = 'Регулярен израз за годината';
$string['yearregex_desc'] = 'Не е задължително. Това е регулярен израз (включително с разделители), съответстващ на частта от кода за годината на вашите идентификационни номера на курсовете или кратките имена (и двете ще бъдат проверени) и може да се използва независимо от източника на кодовете на списъка на Aspire. Ако тук не е предоставен регулярен израз, ще се приеме, че няма такъв израз за годината и ще се използва най-новата версия на всеки списък';
