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
 * Strings for component 'alternative', language 'bg', version '4.4'.
 *
 * @package     alternative
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alternative'] = 'алтернатива';
$string['alternativename'] = 'Име на дейност';
$string['alternativeoptions'] = 'Възможности за тази алтернатива';
$string['alternativeoptions_help'] = 'Всяка алтернатива показва на потребителя няколко възможности.
Тези възможности са описани в този формуляр.
Ако заглавието не е зададено, възможността няма да бъде създадена (но ще бъде изтрита, ако е съществувала).
Можете да добавите нова възможност с бутона след тази група от полета.';
$string['changeallowed'] = 'Разрешена е промяна';
$string['changeallowed_help'] = 'Ако не е отметнато, потребителят няма да може да промени избора си.
Учителите и всички други роли, които имат възможността „алтернативи: принудителна регистрация“, ще могат да променят избора на всеки.';
$string['chooseteammembers'] = 'Изберете членовете на вашия екип';
$string['chooseuser'] = 'Изберете потребителя за регистрация';
$string['csv'] = 'Импортиране на CSV';
$string['csv2ndfield'] = 'Второто поле (знаци) трябва да е числово, с 0 = без ограничение.';
$string['csv_help'] = 'Всеки ред се състои от заглавие; Места ; Дата ; Описание';
$string['csvbadfieldnb'] = 'Неправилен брой полета: {$a} вместо 4.';
$string['csvunableopen'] = 'Не може да се отвори CSV файл.';
$string['datecomment'] = 'Дата';
$string['datecomment_help'] = 'Това поле може да съдържа произволен текст, но е предназначено за дата или за промеждутък време.';
$string['displaycompact'] = 'Компактно показване';
$string['displaycompact_help'] = 'Ако не е отметнато, всяка опция ще се показва на няколко реда с подробно описание.
Ако е отметнато, всяка опция ще се показва на един ред със кратко описание.';
$string['fieldsetcsv'] = 'Опции за импортиране от CSV файл';
$string['fieldsetmultiple'] = 'Настройки за множество регистрации';
$string['fieldsetteam'] = 'Настройки за екипи';
$string['forceregister'] = 'Принудителни регистрации';
$string['groupdependent'] = 'Групово зависими';
$string['groupdependent_help'] = 'Ако това квадратче е отметнато, текстът, който се показва на всеки потребител, ще зависи от неговата група.';
$string['individual'] = 'Индивидуален';
$string['instructionsforcereg'] = 'Не можете да се регистрирате сами, но вашата роля ви позволява да регистрирате студентите за всеки избор.';
$string['instructionsmultiple'] = 'Трябва да изберете между възможностите {$a->multiplemin} и {$a->multiplemax}.';
$string['instructionsmultiplenomax'] = 'Трябва да изберете поне {$a->multiplemin} възможности.';
$string['instructionsnochange'] = 'След като изборът бъде запазен, промяната му няма да бъде разрешена.';
$string['instructionsteam'] = 'Можете да се регистрирате като отбор. Екипът трябва да има между {$a->teammin} и {$a->teammax} членове.
Тъй като сте регистрирали другите членове на вашия екип, вие ще бъдете лидера на екипа.';
$string['messageprovider:reminder'] = 'мод/алтернативно напомняне за студенти';
$string['modulename'] = 'Алтернативен';
$string['modulename_help'] = 'Алтернативният модул позволява на студентите да регистрират един или няколко избора в даден списък.';
$string['modulenameplural'] = 'алтернативи';
$string['multiple'] = 'Множество';
$string['multipleenable'] = 'Активиране на настройките';
$string['multipleenable_help'] = 'Всеки потребител трябва да регистрира няколко възможности, между минималните и максималните стойности.';
$string['multiplemax'] = 'Максимални потребителски регистрации';
$string['multiplemin'] = 'Минимални потребителски регистрации';
$string['noselectedoption'] = 'Трябва да изберете възможност';
$string['noselectedusers'] = 'Няма избрани потребители';
$string['option'] = 'Възможност';
$string['optionintro'] = 'Описание';
$string['optionname'] = 'Заглавие';
$string['options'] = 'Настройки';
$string['places'] = 'Места';
$string['placesavail'] = 'Налични места';
$string['pluginadministration'] = 'Алтернативна администрация';
$string['pluginname'] = 'алтернатива';
$string['potentialteammembers'] = 'възможни членове на екипа';
$string['private'] = 'Частен';
$string['public'] = 'Обществени';
$string['publicreg'] = 'Публични регистрации';
$string['publicreg_help'] = 'Регистрациите могат да бъдат:<dl>
<dt>обществен</dt> <dd>показва се на всички,</dd>
<dt>публично в същата група</dt> <dd>потребителите виждат регистрации на потребители, които споделят поне една група</dd>
<dt>частен</dt> <dd>показва се само на потребители с допълнителни права(учители и т.н.).</dd>
</dl>';
$string['register'] = 'Регистриране';
$string['registrationforbidden'] = 'Не можете да се регистрирате тук.';
$string['registrations'] = 'Регистрации';
$string['registrationsaved'] = 'Вашатa регистрация беше запазенa.';
$string['regteams'] = 'Регистрирани отбори';
$string['remains'] = 'Остава';
$string['reminderBefore'] = 'преди [[AlterUntil]]';
$string['reminderFull'] = 'Трябва да направите избор в дейността „[[AlterName]]“';
$string['reminderFullHtml'] = 'Трябва да направите избор в дейността “<i>[[AlterName]]</i>”';
$string['reminderSmall'] = 'Трябва да направите избор в дейността „[[AlterName]]“';
$string['reminderSubject'] = 'Напомняне: трябва да избирате между други възможности';
$string['sendReminder'] = 'Изпращане на напомняне';
$string['separator'] = 'Сепаратор';
$string['students'] = 'Обучаеми';
$string['synthesis'] = 'Синтез';
$string['synthfree'] = 'Свободно';
$string['synthlimitplaces'] = 'Ограничени възможности за места (индивидуално)';
$string['synthlimitteamplaces'] = 'Ограничени възможности за места (екип)';
$string['synthplaces'] = 'Места (индивидуално)';
$string['synthpotential'] = 'Потенциални обучаеми';
$string['synthregistered'] = 'Регистрирани обучаеми';
$string['synthreserved'] = 'Резервиран (измежду ограничени)';
$string['synthteamplaces'] = 'Места (екип)';
$string['synthunlimitplaces'] = 'Неограничени възможности за места (индивидуално)';
$string['synthunlimitteamplaces'] = 'Възможности за неограничен брой места (екип)';
$string['synthunregistered'] = 'Нерегистрирани обучаеми';
$string['team'] = 'Екип';
$string['teamenable'] = 'Активиране на настройките на екипа';
$string['teamenable_help'] = 'Задаване на минималния и максималния размер на отборите.';
$string['teamleader'] = 'Ръководител на екип';
$string['teamleadernotamember'] = 'Лидерът на екипа не трябва да е член на неговия екип.';
$string['teammax'] = 'Максимален размер на екипа';
$string['teammin'] = 'Минимален размер на екипа';
$string['teamplaces'] = 'Отборни места';
$string['teamplacesavail'] = 'Свободни места за отбори';
$string['teams'] = 'Екипи';
$string['unique'] = 'Уникален';
$string['unregister'] = 'Отмяна на регистрацията';
$string['unregisterLeader'] = 'Внимание: отмяната на регистрацията на лидер ще доведе до отмяна на регистрацията на целия екип.';
$string['uploadoverwrites'] = 'Внимавайте: качването на нов файл изтрива всички предишни регистрации и възможности.';
$string['userinfo'] = 'Регистрира се за {$a} възможности.';
$string['usersnotreg'] = 'Нерегистрирани потребители';
$string['usersreg'] = 'Регистрирани потребители';
$string['viewallregistrations'] = 'Преглед на регистрациите';
$string['viewallusersnotreg'] = 'Преглед на нерегистрираните потребители';
$string['viewallusersreg'] = 'Преглед на регистрираните потребители';
$string['viewsynthesis'] = 'Преглед на синтеза';
$string['viewteams'] = 'Преглед на екипите';
$string['wrongteamsize'] = 'Размерът на вашия екип не е между разрешените граници.';
