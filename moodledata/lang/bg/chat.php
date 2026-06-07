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
 * Strings for component 'chat', language 'bg', version '4.4'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Имате предстояща чат сесия';
$string['ajax'] = 'Версия използваща Ajax';
$string['autoscroll'] = 'Автоматично превъртане';
$string['beep'] = 'Биип';
$string['cantlogin'] = 'Неуспех при влизането в чат-стая!!';
$string['chat:addinstance'] = 'Добавяне на нов чат';
$string['chat:chat'] = 'Достъп до чат-стая';
$string['chat:deletelog'] = 'Изтриване на запазените сесии';
$string['chat:exportparticipatedsession'] = 'Експортиране на чат сесиите, в които Вие участвахте';
$string['chat:exportsession'] = 'Експортиране на всяка чат сесия';
$string['chat:readlog'] = 'Четене на запазените чат сесии';
$string['chat:talk'] = 'Говорене в чат';
$string['chatintro'] = 'Описание';
$string['chatname'] = 'Име на тази чат стая';
$string['chatreport'] = 'Чат сесии';
$string['chattime'] = 'Време за следващия чат';
$string['compact'] = 'Компактно';
$string['composemessage'] = 'Съчиняване на съобщение';
$string['configmethod'] = 'Ajax методът за чат, предоставя базиран на ajax интерфейс, който периодично прави връзка със сървъра за опресняване.<br /> Нормалният метод за чат включва клиентите периодично да се свързват със сървъра за опресняване. Той не изисква настройване и работи навсякъде, но създава голямо натоварване на сървъра при много участници.<br /> Използването на сървърен демон (deamon) изисква достъп до Unix shell, но в резултат се прави по разширяемо и бързо обкръжение за чат.';
$string['confignormalupdatemode'] = 'Опресняването на стаята за разговор нормално се обслужва чрез функционалността <em>Keep-Alive</em> на HTTP 1.1, но това е все още много тежко за сървъра. По-напреднал метод е използването на <em>Stream</em> стратегията за захранване опресняването на потребителите. Използването на <em>Stream</em> е много по-добро, (подобно на метода със сървърен демон) но може да не се поддържа от всеки сървър.';
$string['configoldping'] = 'Колко да е максималното време, което може да мине преди да се  провери дали един потребител е излязъл от чата (в секунди)? Това е само горна граница, защото излизанията се проверяват много често. Ако използвате нормален метод, никога не задавайте това по-малко от 2 * "Опресняване на стаята".';
$string['configrefreshroom'] = 'Колко често самата стая за разговор трябва да се опреснява? (в секунди). Задаването на малка стойност ще направи стаята за разговор да изглежда по-бърза, но създава по-голямо натоварване на сървъра, когато разговарят много хора. Ако Вие използвате <em>Stream</em> опресняване, можете да изберете по-висока честота на опресняване - опитайте с 2.';
$string['configrefreshuserlist'] = 'Колко често трябва да се опреснява списъка на потребителите? (в секунди)';
$string['configserverhost'] = 'Hfstname на компютъра, на който се намира сървърния демон';
$string['configserverip'] = 'Числов IP адрес, който съответства на горния адрес';
$string['configservermax'] = 'Максимален брой на позволените клиенти';
$string['configserverport'] = 'Номер на порт на сървърния демон';
$string['coursetheme'] = 'Тема на курса';
$string['currentchats'] = 'Активни чат сесии';
$string['currentusers'] = 'Текущи потребители';
$string['deletesession'] = 'Изтриване на сесия';
$string['deletesessionsure'] = 'Сигурни ли сте, че искате да изтриете тази сесия?';
$string['donotusechattime'] = 'Да не се публикуват времена';
$string['enterchat'] = 'Влизане в чата';
$string['entermessage'] = 'Въведете Вашето съобщение';
$string['errornousers'] = 'Не могат да се намерят никакви потребители!';
$string['eventmessagesent'] = 'Съобщението е изпратено';
$string['eventsessionsviewed'] = 'Показани сесии';
$string['explaingeneralconfig'] = 'Тези настройки се използват <strong>винаги</strong>';
$string['explainmethoddaemon'] = 'Тези настройки имат значение <strong>само ако</strong> сте избрали "Метод за чат" да е "Сървърен демон (deamon)"';
$string['explainmethodnormal'] = 'Тези настройки имат значение <strong>само ако</strong> сте избрали "Метод за чат" да е "Нормален метод"';
$string['generalconfig'] = 'Общо конфигуриране';
$string['idle'] = 'Престой';
$string['indicator:cognitivedepthdef_help'] = 'Участникът е достигнал този процент на познавателна ангажираност, предлагана от дейностите Чат по време на този интервал за анализ (Levels = No view, View, Submit, View feedback, Comment on feedback, Resubmit after viewing feedback)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadthdef_help'] = 'Участникът е достигнал този процент на социалната ангажираност, предлагана от дейностите Чат през този интервал за анализ (Levels = No participation, Participant alone, Participant with others)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['inputarea'] = 'Област за въвеждане';
$string['invalidid'] = 'Не може да се намери тази стая за разговор!';
$string['list_all_sessions'] = 'Изреждане на всички сесии.';
$string['list_complete_sessions'] = 'Изреждане само на завършилите сесии.';
$string['listing_all_sessions'] = 'Изреждане на всички сесии.';
$string['messagebeepseveryone'] = '{$a} бибитка на всички!';
$string['messagebeepsyou'] = '{$a} току що Ви бибитна!';
$string['messageenter'] = '{$a} току що влезе в този чат';
$string['messageexit'] = '{$a} напусна този чат';
$string['messages'] = 'Съобщения';
$string['messageyoubeep'] = 'Вие бибитнахте на {$a}';
$string['method'] = 'Метод за чат';
$string['methodajax'] = 'Ajax метод';
$string['methoddaemon'] = 'Сървърен демон (deamon)';
$string['methodnormal'] = 'Нормален метод';
$string['modulename'] = 'Чат';
$string['modulename_help'] = 'Модулът за дейност Чат позволява на участниците да провеждат писмено разговор в реално време.

Чатът може да бъде еднократен или да се повтаря в определено време ежедневно или ежеседмично. Проведеният разговор се запазва и може да бъде показан на всички или само на потребители с права да четат запазените чат сесии.

Чатът е особено полезен, когато участниците не могат да се срещнат на живо за:

* Редовни срещи на участници в онлайн курс, за да си обменят опит, ако се намират на различни места.
* Студент, който временно не може да посещава занятия, да разговаря с преподавател за да не изостане.
* Студенти на трудов стаж, да се съберат заедно и обсъдят своя опит помежду си или с техния преподавател.
* Малки деца, използват чат вечер, вкъщи като контролирано (наблюдавано) навлизане в света на социалните мрежи.
* Интервю с поканен събеседник от друго място с въпроси към него и отговори.
* Разговор с цел помагане на студентите да се подготвят за тест, в който преподавател или друг участник поставя примерни въпроси.';
$string['modulename_link'] = 'mod/chat/view';
$string['modulenameplural'] = 'Чатове';
$string['neverdeletemessages'] = 'Да не се изтриват никога';
$string['no_complete_sessions_found'] = 'Не са намерени завършени сесии.';
$string['nochat'] = 'Не е намерен чат';
$string['noguests'] = 'Този чат не е отворен за гости';
$string['nomessages'] = 'Още няма съобщения';
$string['nopermissiontoseethechatlog'] = 'Нямате право да четете запазените сесии.';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'Stream';
$string['noscheduledsession'] = 'Няма сесии по график';
$string['notallowenter'] = 'На Вас не е позволено да влезете в тази стая за разговор.';
$string['notlogged'] = 'Вие не сте влезли на сайта!';
$string['oldping'] = 'Установяване на излизането';
$string['page-mod-chat-x'] = 'Всяка страница на модул Чат';
$string['pastchats'] = 'Минали чат сесии';
$string['pluginadministration'] = 'Администриране на Чат';
$string['pluginname'] = 'Чат';
$string['refreshroom'] = 'Опресняване на стаята';
$string['refreshuserlist'] = 'Опресняване на списъка на потребителите';
$string['removemessages'] = 'Премахване на всички съобщения';
$string['repeatdaily'] = 'По същото време всеки ден';
$string['repeatnone'] = 'Без повтаряния - да се публикува само зададеното време';
$string['repeattimes'] = 'Повтаряне/публикуване на сесиите';
$string['repeatweekly'] = 'По едно и също време всяка седмица';
$string['saidto'] = 'каза на';
$string['savemessages'] = 'Съхраняване на минали сесии';
$string['search:activity'] = 'Чат - информация за дейността';
$string['seesession'] = 'Преглед на тази сесия';
$string['send'] = 'Изпращане';
$string['sending'] = 'Изпраща се';
$string['serverhost'] = 'Име на сървъра';
$string['serverip'] = 'IP на сървъра';
$string['servermax'] = 'Максимум потребители';
$string['serverport'] = 'Порт на сървъра';
$string['sessions'] = 'Чат сесии';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'Всеки може да вижда миналите сесии';
$string['studentseereports_help'] = 'Ако е "Не", само потребители, с право "Четене на запазените чат сесии" могат да видят запазените сесии от чата';
$string['talk'] = 'Разговор';
$string['updatemethod'] = 'Метод за опресняване';
$string['updaterate'] = 'Честота на опресняване:';
$string['userlist'] = 'Списък на потребителите';
$string['usingchat'] = 'Използване на чат';
$string['usingchat_help'] = 'В модула Чат има някои възможности да се направят писаните мнения по-впечатляващи.

* Усмивки - Всички символи за усмихнато лице, които можете да напишете на други места в Moodle, можете да пишете и тук, например :-)
* Хипервръзки - Всеки адрес от Интернет, автоматично се превръща в хипервръзка
* Емоции - Можете да започнете ред с "/me" или ":", за да изразите емоцията си. Например ако се казвате Иван и напишете ":laughs" или "/me laughs!" всички ще видят "Иван смях!"
* Бибиткане - Можете да изпратите звук до другите участници, като щраквате линка "биип" срещу техните имена, а за да изпратите звук до всички, напишете "биип към всички".
* HTML - ако знаете някои HTML тагове, можете да ги вмъквате за да форматирате своя текст, например в различни цветове, или за да вмъквате картинки, звук и др.';
$string['viewreport'] = 'Минали сесии';
