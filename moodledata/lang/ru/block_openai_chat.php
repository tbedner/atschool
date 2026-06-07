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
 * Strings for component 'block_openai_chat', language 'ru', version '4.4'.
 *
 * @package     block_openai_chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowinstancesettings'] = 'Настройки на уровне экземпляра';
$string['allowinstancesettingsdesc'] = 'Этот параметр позволит учителям или любому, у кого есть возможность добавлять блок в тот или иной контекст, изменять настройки на уровне каждого блока. Включение этого параметра может повлечь за собой дополнительные расходы, поскольку позволяет лицам, не являющимся администраторами, выбирать модели с более высокой стоимостью или другие настройки.';
$string['askaquestion'] = 'Задайте вопрос...';
$string['assistantname'] = 'Имя ассистента';
$string['assistantnamedesc'] = 'Имя, которое ИИ будет использовать для себя внутри сайта. Оно также используется для заголовков пользовательского интерфейса в окне чата.';
$string['blocktitle'] = 'Заголовок блока';
$string['config_assistantname'] = 'Имя ассистента';
$string['restrictusage'] = 'Ограничить использование только зарегистрированными пользователями';
$string['restrictusagedesc'] = 'Если этот флажок установлен, только зарегистрированные пользователи смогут использовать окно чата.';
$string['showlabels'] = 'Показывать ярлыки';
$string['sourceoftruth'] = 'Источник правды';
$string['sourceoftruthdesc'] = 'Несмотря на то, что ИИ обладает большими возможностями "из коробки", если он не знает ответа на вопрос, он скорее уверенно предоставит неверную информацию, чем откажется отвечать. В этом текстовом поле вы можете добавить общие вопросы и ответы на них, из которых ИИ сможет извлечь информацию. Пожалуйста, задавайте вопросы и ответы в следующем формате: <pre>В: Вопрос 1<br />О: Ответ 1<br /><br />В: Вопрос 2<br />О: Ответ 2</pre>';
$string['sourceoftruthpreamble'] = 'Ниже приведен список вопросов и ответов на них. Эту информацию следует использовать в качестве справочной для любых запросов:\\n\\n';
$string['username'] = 'Имя пользователя';
$string['usernamedesc'] = 'Имя, которое ИИ будет использовать для пользователя внутри сайта. Оно также используется для заголовков пользовательского интерфейса в окне чата.';
