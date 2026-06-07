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
 * Strings for component 'url', language 'bg', version '4.4'.
 *
 * @package     url
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseavariable'] = 'Изберете променлива ...
';
$string['clicktoopen'] = 'Щракнете върху {$a}, за да отворите ресурса.';
$string['configdisplayoptions'] = 'Изберете всички възможности, които трябва да са достъпни. Докато избирате съществуващите настройки не се променят. За да изберете повече редове, задръжте натиснат клавиш CTRL.';
$string['configframesize'] = 'Когато интернет страница или качен файл се показват в рамка (фрейм), тази стойност е височината (в пиксели) на горната рамка (която съдържа навигацията).';
$string['configrolesinparams'] = 'Включете, ако искате да използвате локално променените имена на ролите в списъка на достъпните за предаване като параметри променливи.';
$string['configsecretphrase'] = 'Тази тайна фраза се използва за шифриране на код, който се изпраща като параметър към някои сървъри. Шифрираният код се образува с функция md5, от текущия IP адрес на потребителя и слепената до него тайна фраза. Обърнете внимание, че това не е сигурно, защото IP адресът може да се промени, а често се споделя от много компютри.';
$string['contentheader'] = 'Съдържание';
$string['createurl'] = 'Създаване на URL';
$string['displayoptions'] = 'Достъпни настройки на показването';
$string['displayselect'] = 'Начин на показване';
$string['displayselect_help'] = 'Тази настройка, заедно с типа на URL файла и това дали браузърът позволява вградено показване, определя как ще бъде отворена хипервръзката. Възможностите са:

* Автоматично - Най-добрият начин за показване се избира автоматично

* Вградено показване - Съдържанието на ресурса се показва вградено в показваната от браузъра страница под лентата за навигация заедно с описанието си и евентуални блокове

* Отваряне - Само съдържанието на ресурса се показва в прозореца на браузъра

* В изскачащ прозорец - Съдържанието на ресурса се показва в изскачащ прозорец без меню и адресно поле

* В рамка - Ресурсът се показва в рамка под лентата за навигация и описанието на URLа

* Нов прозорец - Ресурсът се показва в нов прозорец на браузъра с меню и адресно поле';
$string['displayselectexplain'] = 'Изберете начин на показване, но за съжаление не всички начини са подходящи за всички URL-и.';
$string['externalurl'] = 'Външен URL';
$string['framesize'] = 'Височина на рамката';
$string['indicator:cognitivedepthdef_help'] = 'Участникът е достигнал този процент на познавателна ангажираност, предложен от ресурсите URL през този интервал за анализ (Levels = No view, View)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadthdef_help'] = 'Участникът е достигнал този процент на социалната ангажираност, предлагана от ресурсите URL през този интервал за анализ (Levels = No participation, Participant alone)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidstoredurl'] = 'Не може да се покаже този ресурс, URL-ът е невалиден.';
$string['invalidurl'] = 'Въведеният URL не е валиден.';
$string['modulename'] = 'URL';
$string['modulename_help'] = 'Модулът URL позволява на преподавателя да предостави в курса хипервръзка към ресурс от друг сайт. Към всяко нещо, което е свободно достъпно в мрежата, като документ или изображение, може да се направи връзка; URL-ът не е задължително да е главната страница на някой сайт. URL-ът на дадена страница може да се копира и постави или може да се избере с "Избиране на файл" от някое хранилище като Flecker, YouYube или Wikipedia (зависи какви хранилища са достъпни на сайта).

Има много настройки за показване на URL, като вградено показване, или в изскачащ прозорец, и настройки за изпращане на информация до сървър, като име на студента, ако е необходимо.

Забележете, че URL-и може да се вмъкнат като хипервръзки и в текста към всеки друг ресурс, посредством текстовия редактор.';
$string['modulename_link'] = 'mod/url/view';
$string['modulenameplural'] = 'URL-и';
$string['page-mod-url-x'] = 'Всяка страница на модул URL';
$string['parameterinfo'] = 'Име на параметър';
$string['parametersheader'] = 'Параметри';
$string['parametersheader_help'] = 'Стойностите на някои от вътрешните променливи на Moodle могат да бъдат добавени към URL. Въведете имена на параметри в полетата за писане и изберете необходимите променлива от падащите списъци срещу тях.';
$string['pluginadministration'] = 'Администриране на модул URL';
$string['pluginname'] = 'URL (хипервръзка)';
$string['popupheight'] = 'Височина на изскачащия прозорец (в пиксели)';
$string['popupheightexplain'] = 'Определя височината по подразбиране на изскачащите прозорци.';
$string['popupwidth'] = 'Широчина на изскачащия прозорец (в пиксели)';
$string['popupwidthexplain'] = 'Определя широчината по подразбиране на изскачащите прозорци.';
$string['printintro'] = 'Показване описанието на URL адреса';
$string['printintroexplain'] = 'Показване описанието на URL-а под съдържанието му?  При някои начини за показване може де не се показва, дори и да е зададено.';
$string['rolesinparams'] = 'Включване имената на ролите в параметрите';
$string['search:activity'] = 'URL';
$string['serverurl'] = 'URL на сървъра';
$string['url:addinstance'] = 'Добавяне на нов ресурс URL';
$string['url:view'] = 'Преглед на URL';
