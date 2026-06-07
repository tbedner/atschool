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
 * Strings for component 'allocationform', language 'bg', version '4.4'.
 *
 * @package     allocationform
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Форма за разпределяне на достъпа отказан';
$string['add_option'] = 'Добавяне на нова възможност';
$string['al_notwant'] = 'Не искам';
$string['al_notwant_help'] = 'Изберете възможност, към която не желаете да бъдете разпределени';
$string['allocationform:addinstance'] = 'Добавяне на нов формуляр за разпределение';
$string['allocationform:edit'] = 'Редактиране на формуляри за разпределение';
$string['allocationform:exportallocations'] = 'Екпорт на формите за разпределяне';
$string['allocationform:exportchoices'] = 'Екпорт на възможностите на формата';
$string['allocationform:reallocate'] = 'Принудително преразпределение';
$string['allocationform:viewallocations'] = 'Вижте всички направени разпределения';
$string['allocationform:viewform'] = 'Преглед на формулярите за разпределение';
$string['allocationformname'] = 'Име на формуляра за разпределение';
$string['allocationformname_help'] = 'Името на този формуляр за разпределение, ще се използва за връзка към формуляра.';
$string['allocations'] = 'Разпределения';
$string['allocations_not_visible'] = 'Разпределенията могат да се видят само от редакторите.';
$string['allocationsexported'] = 'Експортирани разпределения';
$string['allocationviewed'] = 'Формулярът за разпределение е разгледан';
$string['aria:delete'] = 'Изтриване на {a}';
$string['aria:edit'] = 'Редактиране на {$a}';
$string['aria:restrict'] = 'Ограничаване на {$a}';
$string['availabilityheading'] = 'Наличност на формуляра';
$string['back_to_edit'] = 'Превключване в режим на редактиране';
$string['back_to_edit_warning'] = 'Това ще изтрие цялата информация, във формуляра.';
$string['before_start'] = 'Началната дата на този формуляр за разпределение все още не е изтекла.';
$string['calendar:avaliable'] = 'Разпределения, освободени за {$a}';
$string['calendar:deadline'] = 'Краен срок за {$a}';
$string['cannoteditinapp'] = 'Формулярът за разпределение не може да бъде редактиран в приложението Moodle';
$string['changestateto'] = 'Наистина ли искате да промените формуляра в състояние {$a}?';
$string['choice'] = 'Избор {$a->choice}';
$string['choice_help'] = 'Изберете възможност, към която искате да бъдете разпределени.';
$string['choicealreadyselected'] = 'Една възможност може да бъде избрана само веднъж';
$string['choiceheading'] = 'Избор на настройка';
$string['choiceincorrectstate'] = 'Формулярът не е отворен. Презаредете страницата.';
$string['choiceinvalid'] = 'Избрали сте възможност, която не е част от формуляра';
$string['choicerequired'] = 'Избиране';
$string['choicesexported'] = 'Изборите са експортирани';
$string['cron'] = 'Фонова обработка на формуляри за разпределение';
$string['csvgenerated'] = 'CSV генериран';
$string['deadline'] = 'Deadline';
$string['deadline_help'] = 'Последният път, когато потребителите ще могат да избират своите разпределения, това също е и най-ранният път, когато формулярът за разпределение ще бъде поставен на опашката, за да се разпредели.';
$string['deadline_message'] = 'Крайният срок за попълване на този формуляр е: {$a->deadline}';
$string['deadline_passed'] = 'Крайният срок за този формуляр е изтекъл, ако го направите активен сега, обработването му ще започне незабавно.';
$string['defaultrole'] = 'Роля по подразбиране';
$string['defaultrole_help'] = 'Задайте роля по подразбиране, която ще се използва за избор на потребители, които ще бъдат разпределени с помощта на дейността';
$string['deleteuserdata'] = 'Изтриване на потребителски данни';
$string['disallow_list'] = 'Забранителен списък';
$string['disallow_list_help'] = 'Всички маркирани потребители няма да могат да изберат {$a->option_name}';
$string['duplicate_choice'] = 'Можете да изберете само веднъж';
$string['duplicateoption'] = 'Вашите промени не можаха да бъдат запазени в базата данни. Това най-вероятно се дължи на въвеждането на дублирано име на опция';
$string['editingmode'] = 'Редактиране';
$string['editingoption'] = 'Възможност за редактиране';
$string['event:optiondcreated'] = 'Възможност за създаване';
$string['event:optiondeleted'] = 'Възможност за триене';
$string['form_allocation_error'] = 'ГРЕШКА във formid {$a->formid}:';
$string['form_allocation_error2'] = 'ГРЕШКА: Не може да се разпредели потребител с идентификатор {$a->userid}';
$string['generate_allocation_csv'] = 'Генериране на csv на потребителски разпределения';
$string['generate_csv'] = 'Генериране на csv с потребителски избор';
$string['in_editingmode'] = 'Формулярът се редактира, етап 1 от 5.';
$string['in_processedmode'] = 'Разпределенията са освободени, етап 5 от 5.';
$string['in_processmode'] = 'Потребителите се разпределят, етап 3 от 5.';
$string['in_readymode'] = 'Формулярът е активен, етап 2 от 5.';
$string['in_reviewmode'] = 'Разпределенията се преразглеждат, етап 4 от 5.';
$string['incorrectnumberofchoices'] = 'Формулярът няма подходящия брой възможности за избор';
$string['instructions'] = 'Трябва да класирате {$a->choices} възможности, ще бъдете разпределени в {$a->allocation} от възможностите.';
$string['instructionsnotwant'] = 'Трябва да класирате {$a->choices} възможности, ще бъдете разпределени в {$a->allocation} от възможностите. Можете да изберете 1 възможност, към която не желаете да бъдете разпределени.';
$string['invalidstate'] = 'Във формуляра за разпределение е предадена невалидна промяна на състоянието';
$string['invalidstatechange'] = 'Опит за невалидна промяна на състоянието';
$string['make_active'] = 'Направете формуляра активен';
$string['makechoice'] = 'Направете своя избор';
$string['modulename'] = 'Формуляр за разпределение';
$string['modulename_help'] = 'Формулярът за разпределение може да се използва за възлагане на обучаваните на до десет възможности (например модули, задачи, разположения...)

Преподавателят определя:

* Списъкът с възможности, достъпни за обучаваните.
* Броят на обучаваните, които могат да бъдат причислени към дадена възможност.
* По колко възможности са дадени на обучаваните (между една и десет)
* Колко възможности може да подреди обучаван (между една и десет)
* Дали обучаваните могат да изберат възможност, към която не желаят да бъдат разпределени.
* Последната точка, в която обучаваните могат да направят избор.

Предупреждение: Когато превключите дейността от активен режим обратно в режим на редактиране, всички избори, направени от обучаваните, ще бъдат изтрити.

След датата на затваряне формулярът ще се опита да направи разпределение на обучаваните „най-добро съвпадение“, така че:

* Колкото повече обучавани получават избор толкова по-високо е класирането им.
* Обучаване никога няма да бъдат разпределени за избор, за който са задали като „Не искам“.
* Обучаваните няма да бъдат разпределени към възможности, които са били ограничени за избиране.
* Обучаваните, които не направят избор, ще бъдат разпределени последни.

След като бъдат обработени разпределенията, преподавателите могат:

* Да прегледат резултата и да променят броя на обучаваните, разпределени по възможности, преди да предадат резултатите на обучаваните.
* Изтеглят като csv избора на обучаваните.
* Изтеглят като csv разпределенията.';
$string['modulenameplural'] = 'Формуляри за разпределение';
$string['no_allocations'] = 'Няма намерени разпределения';
$string['noallocationforms'] = 'Няма намерени формуляри за разпределение на този курс';
$string['noformdatapassed'] = 'Не бяха предадени данни от формуляра. Не е извършена актуализация.';
$string['nopermission'] = 'Не можете да бъдете разпределени във формуляра, вашите избори не са запазени';
$string['not_active'] = 'Формулярът за разпределение не е наличен, опитайте отново по-късно.';
$string['not_enough_slots'] = 'Няма достатъчно слотове за всички хора, отговарящи на условията за разпределяне';
$string['not_set'] = 'Трябва да направите избор';
$string['notrequired'] = 'Не е задължително';
$string['notwant'] = 'Включване на "не искам"';
$string['notwant_help'] = 'Ако бъде избран, на потребителя ще бъде дадена възможност да посочи, къде не желае да бъде разпределен';
$string['nousersallocated'] = 'Няма разпределени потребители';
$string['numberofallocations'] = 'Разпределения на потребител';
$string['numberofallocations_help'] = 'Броят на възможностите, към които ще бъде разпределен потребителят';
$string['numberofchoices'] = 'Брой възможности за избор';
$string['numberofchoices_help'] = 'Брой възможности, от които потребителят ще трябва да избере';
$string['ok_to_continue'] = 'Сигурни ли сте, че искате да продължите?';
$string['option_form_header'] = 'Нова възможност';
$string['option_heading'] = 'Заглавие';
$string['option_heading_help'] = 'Заглавие, което да се показва над тази възможност.';
$string['option_list'] = 'Списък с възможности';
$string['option_maxallocation'] = 'Максимум разпределения';
$string['option_maxallocation_help'] = 'Максималният брой хора, които могат да бъдат разпределени за тази възможност.';
$string['option_maxallocation_invalid'] = 'Максимум на разпределенията не е зададен';
$string['option_name'] = 'Име на възможността';
$string['option_name_help'] = 'Името на възможността, което ще бъде показано на потребителя.';
$string['option_restricted'] = 'Ограничени потребители';
$string['optioncreated'] = 'Създаване на възможност:  {$a}';
$string['optiondeleted'] = 'Възможност за изтриване: {$a}';
$string['optionedited'] = 'Възможността е редактирана';
$string['optionmodified'] = 'Променена опция: {$a}';
$string['optionnamenumber'] = '{$a->name} ({$a->allocation})';
$string['overviewclose'] = 'Дата на затваряне: {$a->closedate}';
$string['overviewname'] = 'Разпределение: {$a->link}';
$string['overviewready'] = 'Вашето разпределение е налично.';
$string['overviewreview'] = 'Готови за преглед. Разпределените хора не могат да видят резултатите.';
$string['people'] = 'Брой хора, които трябва да бъдат разпределени';
$string['permissionedited'] = 'Разрешението е редактирано';
$string['permissionviewed'] = 'Разрешението е разгледано';
$string['pluginadministration'] = 'Администриране на формуляр за разпределение';
$string['pluginname'] = 'Формуляри за разпределение (електронни формуляри)';
$string['privacy:export:allocations'] = 'Разпределения';
$string['privacy:export:choices'] = 'Избори';
$string['privacy:export:restrictions'] = 'Ограничения';
$string['privacy:metadata:allocationform_allocations'] = 'Съхранява разпределенията, направени за потребителя';
$string['privacy:metadata:allocationform_allocations:allocation'] = 'Възможността, към която е разпределен потребителят';
$string['privacy:metadata:allocationform_allocations:userid'] = 'Потребителят, който се разпределя';
$string['privacy:metadata:allocationform_choices'] = 'Съхранява изборите, които потребителят е направил във формуляра за разпределение';
$string['privacy:metadata:allocationform_choices:choice1'] = 'Първото предпочитание на потребителя';
$string['privacy:metadata:allocationform_choices:choice10'] = 'Десетото предпочитание на потребителя';
$string['privacy:metadata:allocationform_choices:choice2'] = 'Второто предпочитание на потребителя';
$string['privacy:metadata:allocationform_choices:choice3'] = 'Третото предпочитание на потребителя';
$string['privacy:metadata:allocationform_choices:choice4'] = 'Четвъртото предпочитание на потребителя';
$string['privacy:metadata:allocationform_choices:choice5'] = 'Петото предпочитание на потребителя';
$string['privacy:metadata:allocationform_choices:choice6'] = 'Шестото предпочитание на потребителя';
$string['privacy:metadata:allocationform_choices:choice7'] = 'Седмото предпочитание на потребителя';
$string['privacy:metadata:allocationform_choices:choice8'] = 'Осмото предпочитание на потребителя';
$string['privacy:metadata:allocationform_choices:choice9'] = 'Деветото предпочитание на потребителя';
$string['privacy:metadata:allocationform_choices:notwant'] = 'Възможност, към която потребителят не желае да бъде разпределен';
$string['privacy:metadata:allocationform_choices:userid'] = 'Потребителят, който прави избора';
$string['privacy:metadata:allocationform_disallow'] = 'Съхранява възможностите, които потребителят е бил спрян да избира';
$string['privacy:metadata:allocationform_disallow:disallow_allocation'] = 'Потребителят е ограничен да избере тази възможност';
$string['privacy:metadata:allocationform_disallow:userid'] = 'Потребителят е ограничен';
$string['processedmode'] = 'обработени';
$string['processmode'] = 'Обработване';
$string['queued_for_processing'] = 'Формулярът за разпределение чака да бъде обработен... , върнете се по-късно.';
$string['readymode'] = 'Активен';
$string['reprocess'] = 'Принудително преразпределение';
$string['reprocess_warning'] = 'Това ще изтрие всички текущи разпределения';
$string['requirechoice'] = 'Задължителен избор';
$string['resetstate'] = 'Нулиране на състоянието на редактиране';
$string['restrict'] = 'Ограничаване';
$string['restrictionsexceeded'] = 'Превишихте броя на приложимите ограничения за {$a->users} потребители. Необходими са най-малко {$a->numberofchoices} налични възможности на потребител.';
$string['restrictionsmodified'] = 'Ограниченията са актуализирани.';
$string['reviewmode'] = 'Преглед';
$string['roleselect'] = 'Роля, която трябва да бъде разпределена';
$string['roleselect_help'] = 'Изберете ролята на потребителите в този курс, която ще бъде достъпна чрез този формуляр.';
$string['saved'] = 'Вашите избори са запазени.';
$string['savefail'] = 'Вашият избор не може да бъде запазен в Moodle';
$string['search:activity'] = 'Формуляр за разпределение - информация за дейността';
$string['show_allocations'] = 'Направете разпределенията достъпни';
$string['slots'] = 'Брой места за разпределяне';
$string['startdate'] = 'Начална дата';
$string['startdate_help'] = 'Най-ранното време, когато потребителите ще могат да избират своите разпределения.';
$string['statechanged'] = 'Променено състояние';
$string['statechangefailed'] = 'Не може да се промени състоянието';
$string['trackcompletion'] = 'Да се изисква ли избор на дейност за да бъде завършена?';
$string['unallocated'] = 'Неразпределен';
$string['youralloactions'] = 'Вие сте разпределени към:';
