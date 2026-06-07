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
 * Strings for component 'quizaccess_quiztimer', language 'ru', version '4.4'.
 *
 * @package     quizaccess_quiztimer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canteditquiztimes'] = 'Нельзя изменять таймер ответов на вопросы, если уже были попытки прохождения теста. ({$a})';
$string['canteditquiztype'] = 'Нельзя изменять тип таймера, если уже были попытки прохождения теста.';
$string['configsavedpage'] = 'Настройки успешно сохранены.<br> <b>Не забудьте изменить таймеры на отдельных страницах</b>';
$string['configsavedquestion'] = 'Настройки успешно сохранены.<br> <b>Не забудьте изменить таймеры отдельных вопросов.</b>';
$string['configsavedsection'] = 'Настройки успешно сохранены.<br> <b>Не забудьте изменить таймеры отдельных разделов.</b>';
$string['disabledbycustomtimer'] = 'Исправлено из-за пользовательского таймера, выбранного в разделе «Сроки».';
$string['distributesectiontime'] = 'Распределить время раздела по страницам';
$string['eventsectiontimerupdated'] = 'Таймер раздела обновлен';
$string['eventsectiontimerupdateddescription'] = 'Пользователь с ID {$a->userid} обновил таймер раздела {$a->section}, установив новое значение времени {$a->timevalue} {$a->timeunit}';
$string['eventslottimerupdated'] = 'Таймер слота обновлен';
$string['eventslottimerupdateddescription'] = 'Пользователь с ID {$a->userid} обновил таймер слота {$a->slot}, установив новое значение времени {$a->timevalue} {$a->timeunit}';
$string['hours'] = 'час.';
$string['invalidsettedtime'] = 'Введенное время некорректно, оно было сброшено к предыдущему значению';
$string['minutes'] = 'мин.';
$string['pagetime'] = 'Время на страницу';
$string['pagingchangesnotapply'] = 'В этом тесте есть пользовательский таймер, связанный с использованием позиций вопросов или разделов, поэтому изменения, внесенные в разбивку вопросов по страницам, не будут применены и будут перезаписаны';
$string['pluginname'] = 'Правила доступа к таймеру теста';
$string['privacy:metadata:attempt'] = 'Номер попытки, связанный с данными таймера.';
$string['privacy:metadata:quiz'] = 'Тест, к которому относятся данные настройки таймера.';
$string['privacy:metadata:quiz_mode'] = 'Режим таймера, используемый в тесте.';
$string['privacy:metadata:quizaccess_quiztimer'] = 'Настройки таймера теста.';
$string['privacy:metadata:quizaccess_usertimedsections'] = 'Данные пользовательского таймера для раздела.';
$string['privacy:metadata:quizaccess_usertimedslots'] = 'Данные пользовательского таймера для вопроса.';
$string['privacy:metadata:quizid'] = 'Тест, связанный с данными пользовательского таймера.';
$string['privacy:metadata:section'] = 'Раздел теста, к которому относятся данные таймера.';
$string['privacy:metadata:slot'] = 'Слот (позиция вопроса), к которому относятся данные таймера.';
$string['privacy:metadata:timecreated'] = 'Время, когда были созданы настройки таймера.';
$string['privacy:metadata:timefinish'] = 'Время окончания, записанное для данного слота или раздела.';
$string['privacy:metadata:timemodified'] = 'Время последнего изменения настроек таймера.';
$string['privacy:metadata:timestart'] = 'Время начала, записанное для данного слота или раздела.';
$string['privacy:metadata:userid'] = 'ID пользователя, данные о времени которого регистрируются.';
$string['privacy:metadata:usermodified'] = 'ID пользователя, изменившего настройки таймера.';
$string['questiontime'] = 'Время на вопрос';
$string['quizquiztimer'] = 'Таймер теста';
$string['quiztime'] = 'Изменить таймер теста';
$string['quiztimer'] = 'Зона сообщений о времени проведения теста:';
$string['quiztimer:manage'] = 'Управлять настройками времени таймера теста';
$string['quiztimererrors'] = 'Для прохождения теста необходимо исправить следующие ограничения по времени:';
$string['repaginatewarning'] = 'Выбор типа редактирования (вопросы или разделы) может привести к переформатированию теста  следующим образом:
- Время на раздел: все вопросы раздела будут отображаться на одной странице.
- Время на вопрос: на странице будет отображаться 1 вопрос.
Хотите продолжить?';
$string['requirequiztimermessage'] = 'В этом тесте используется индивидуальное ограничение по времени для вопросов и разделов.';
$string['seconds'] = 'сек.';
$string['sectiontime'] = 'Время на раздел';
$string['selecttypetimes'] = 'Выберите тип таймера, используемого в тесте';
$string['setting:timedsections'] = 'Время по умолчанию на раздел';
$string['setting:timedsections_desc'] = 'Время по умолчанию, назначенное для созданных разделов';
$string['setting:timedslots'] = 'Время по умолчанию для слота';
$string['setting:timedslots_desc'] = 'Время по умолчанию, назначенное для созданных слотов (позиций вопросов)';
$string['submit'] = 'Отправить';
$string['subtimes'] = 'Тип ограничения по времени:';
$string['subtimes_help'] = 'В раскрывающемся списке представлены три варианта настройки таймера теста (Раздел, Вопрос, Общий).';
$string['timelimit'] = 'Ограничение по времени';
$string['timelimitedit'] = 'Ограничение по времени (пользовательское время не используется)';
$string['timeunit'] = '...';
$string['totalsectiontime'] = 'Общее время на раздел:';
$string['totaltime'] = 'Общее время';
$string['unitsections'] = 'Используется таймер по разделам';
$string['unitslots'] = 'Используется таймер по слотам';
$string['warningtime'] = 'Установлено неверное время';
