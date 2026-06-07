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
 * Strings for component 'block', language 'bg', version '4.4'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addblock'] = 'Добавете {$a} блок';
$string['anypagematchingtheabove'] = 'Всяка страница, отговаряща на горното';
$string['appearsinsubcontexts'] = 'Показва се в подконтекстите';
$string['assignrolesinblock'] = 'Задаване на роли в блок {$a}';
$string['blocksdrawertoggle'] = 'Скриване/показване на модула за блокове';
$string['blocksettings'] = 'Настройки на блок';
$string['bracketfirst'] = 'Първи {$a}';
$string['bracketlast'] = 'Последен {$a}';
$string['configureblock'] = 'Конфигуриране на блок {$a}';
$string['contexts'] = 'Контекст страница';
$string['contexts_help'] = 'Контекстите са по-специфични типове страници, в рамките на страницата с първоначалното място на блока, в които този блок също може да се показва. Имате възможност за избор в зависимост от първоначалното място на блока и текущото му местоположение. Например, можете да направите блокът да се показва само в страниците на форума на даден курс като добавите блока към курса (избирайки да се показва само в подстраниците), после влизайки във форума и променяйки настройките за да ограничите показването само на страниците на форума.
';
$string['createdat'] = 'Първоначално място на блока';
$string['createdat_help'] = 'Първоначалното място на блок е страницата, в която блокът е създаден. Настройките на блок позволяват той да се появява и на други страници (контексти) в рамките на първоначалното му място. Например, блок, създаден на страницата на курс, може да се показва и на страниците за дейности на този курс. Блок, създаден на началната страница може да се показва и на всички страници на сайта.';
$string['defaultregion'] = 'Част по подразбиране';
$string['defaultregion_help'] = 'Темите могат да дефинират една или повече части на страниците, в които да се показват блокове. Тази настройка определя в коя от тези части искате да се показва блока по подразбиране.  Ако е необходимо тази част може да се смени с друга на определени страници.';
$string['defaultweight'] = 'Тегло по подразбиране';
$string['defaultweight_help'] = 'Теглото по подразбиране позволява приблизително да зададете мястото сред частта от страницата, където да се покаже блока, най-отгоре или най-отдолу. Окончателното място на блока се определя по теглата на всички блокове в дадената част (например само един блок фактически може да е най-отгоре). Тази стойност може да се зададе да е друга на определени страници.';
$string['deleteblock'] = 'Изтриване на блок {$a}';
$string['deleteblockcheck'] = 'Това ще изтрие блока {$a}.';
$string['deleteblockinprogress'] = 'В процес на премахване на блокирането на {$a}';
$string['deleteblockwarning'] = '<p>Вие сте на път да изтриете блок, който се показва другаде.</p><p>Първоначално място на блока: {$a->location}<br />Показва се на страници от тип: {$a->pagetype}</p><p>Сигурни ли сте, че искате да продължите?</p>';
$string['deletecheck'] = 'Да се изтрие ли блок {$a}?';
$string['deletecheck_modal'] = 'Изтриване на блок?';
$string['hideblock'] = 'Скриване на блок {$a}';
$string['hidepanel'] = 'Скриване на панела';
$string['moveblock'] = 'Преместване на блок {$a}';
$string['moveblockafter'] = 'Преместване след блок {$a}';
$string['moveblockbefore'] = 'Преместване пред блок {$a}';
$string['moveblockinregion'] = 'Преместване на блокa в регионa {$a}';
$string['movingthisblockcancel'] = 'Преместване на блока ({$a})';
$string['myblocks'] = 'Моите блокове';
$string['onthispage'] = 'На тази страница';
$string['pagetypes'] = 'Типове страници';
$string['pagetypewarning'] = 'Предишно избраният тип страница не може вече да се избере. Моля, изберете най-подходящият тип страница от тези по-долу.';
$string['privacy:metadata:userpref:dockedinstance'] = 'Записва, когато потребителят е закачил блок';
$string['privacy:metadata:userpref:hiddenblock'] = 'Записва, когато потребителят е свил/скрил блок';
$string['privacy:request:blockisdocked'] = 'Показва дали блокът е бил закачен';
$string['privacy:request:blockishidden'] = 'Показва дали блокът е бил скрит/свит';
$string['region'] = 'Част от страница';
$string['restrictpagetypes'] = 'Показване на страници от тип';
$string['showblock'] = 'Показване на блок {$a}';
$string['showoncontextandsubs'] = 'Показване на страници "{$a}" и на всички страници в техните рамки';
$string['showoncontextonly'] = 'Показване само на "{$a}"';
$string['showonentiresite'] = 'Показване из целия сайт';
$string['showonfrontpageandsubs'] = 'Показване в началната страница на сайта и всички страници, добавени към началната страница на сайта.';
$string['showonfrontpageonly'] = 'Показване само на началната страница на сайта';
$string['subpages'] = 'Избиране на страници';
$string['thisspecificpage'] = 'Тази определена страница';
$string['visible'] = 'Видимост';
$string['weight'] = 'Тегло';
$string['wherethisblockappears'] = 'Къде се показва този блок';
