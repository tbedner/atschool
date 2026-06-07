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
 * Strings for component 'childcourse', language 'bg', version '4.4'.
 *
 * @package     childcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoenrol'] = 'Автоматично записване при достъп';
$string['autoenrol_help'] = 'Ако е активиран, плъгинът автоматично ще запише потребителя в подкурс, когато го отвори чрез тази дейност. Записванията се създават с помощта на специален екземпляр за ръчно записване, така че да могат да бъдат проследявани и безопасно отменени по-късно (в зависимост от политиката за премахване). Ако е деактивиран, плъгинът няма да се опитва да записва потребители автоматично.';
$string['childcourse'] = 'Подкурс';
$string['childcourse:addinstance'] = 'Добави нова активност към подкурса';
$string['childcourse:manage'] = 'Управление на настройките на подкурса';
$string['childcourse:sync'] = 'Синхронизиране на оценката и завършването на подкурса';
$string['childcourse:view'] = 'Преглед на активността на подкурса';
$string['childcourse_help'] = 'Изберете курса, който ще бъде свързан с тази дейност. Този избор управлява всички настройки, свързани с правилата (групи, правила за завършване, селектори за активност, синхронизиране на оценки). След като дейността бъде запазена, избраният курс не може да бъде променян, за да се запазят съответствията и историята на синхронизацията.';
$string['childcoursenotset'] = 'Подкурсът не е зададен.';
$string['completionmissing'] = 'Завършването на подкурса не е включено.';
$string['completionrule'] = 'Правило за завършване, основано на подкурса';
$string['completionrule_allactivities'] = 'Завършено, когато 100% от проследяваните дейности са завършени.';
$string['completionrule_coursecompleted'] = 'Завършено, когато подкурсът е завършен.';
$string['completionrule_help'] = 'Определя как тази дейност ще бъде автоматично маркирана като завършена въз основа на прогреса на потребителя в подкурса.

- **Нищо не прави:** завършването на тази дейност няма връзка с завършването на подкурса.
- **Когато подкурсът е завършен:** веднага щом подкурсът е завършен, тази дейност също се счита за завършена.
- **Когато 100% от проследяваните дейности са завършени:** всички дейности в подкурса с активирано проследяване на завършване трябва да бъдат завършени, за бъде завършена и тази дейност.';
$string['completionrule_none'] = 'Нищо не прави';
$string['enrolinstancename'] = 'Връзка към подкурса #{$a}';
$string['error_manualenrolnotavailable'] = 'Плъгинът за ръчно записване не е наличен.';
$string['grade_approval'] = 'Изпрати оценка от';
$string['grade_approval_no'] = 'Не изпращай оценка';
$string['grade_approval_yes'] = 'Използвай оценката от подкурса';
$string['gradebookmissing'] = 'Оценъчната книга за подкурса не е конфигурирана (липсва общият резултат за курса).';
$string['hideinmycourses'] = 'Скриване на подкурса в Моите курсове';
$string['hideinmycourses_help'] = 'Ако е активирано, потребителите, записани чрез тази дейност, няма да виждат подкурса в менюто "Моите курсове". Това помага да се гарантира преминаването през този курс. Тази настройка засяга само потребители, записани чрез този плъгин (проследявани от плъгина)';
$string['inheritgroups'] = 'Наследяване на групи от основния курс';
$string['inheritgroups_help'] = 'Ако е активирано, плъгинът ще се опита да копира членството на потребителя в групи от основния курс към подкурса, като съпоставя по имена на групите. Ако дадено име на група не съществува в  подкурса, тя може да бъде създадена. Това се прилага по време на автоматичното записване. Не представлява непрекъсната синхронизация, освен ако по-късно не бъде реализирана специална процедура за повторна синхронизация.';
$string['keeprole'] = 'Запази ролята (студент/преподавател)';
$string['keeprole_help'] = 'Ако е активирано, плъгинът ще се опита да поддържа опростено съответствие на ролите: потребители с права на преподавател в основния курс ще бъдат записвани като преподавател (editingteacher/teacher, когато е налично), а останалите — като студент. Това не копира персонализирани роли или сложни назначения на роли.';
$string['label_childcourse'] = 'Подкурс';
$string['label_lastsynccompletion'] = 'Последна синхронизация на завършването';
$string['label_lastsyncgrade'] = 'Последна синхронизация на оценките';
$string['lastsync'] = 'Последна синхронизация';
$string['lockedcoursewarning'] = 'Подкурсът не може да се промени след запазване.';
$string['manage_header_actions'] = 'Действия';
$string['manage_header_name'] = 'Име';
$string['missingcourse'] = 'Липсващ курс';
$string['modulename'] = 'Подкурс';
$string['modulenameplural'] = 'Подкурсове';
$string['never'] = 'Никога';
$string['nogroup'] = 'Няма група';
$string['openchildcourse'] = 'Отваряне на подкурс';
$string['opennewtab'] = 'Отваряне в нов раздел';
$string['opennewtab_help'] = 'Ако е включено, бутонът ще отвори подкурс в нов раздел. Това не променя поведението на записване или синхронизацията, а само начина, по който курсът се отваря за потребителя.';
$string['pluginadministration'] = 'Управление на подкурс';
$string['pluginname'] = 'Подкурс';
$string['privacy:metadata:childcourse_map'] = 'Съхранява данни за съответствието, създадени от свързаната активност на курса, за да се осигури безопасно отписване и одит.';
$string['privacy:metadata:childcourse_map:childcourseid'] = 'ID на свързания подкурс.';
$string['privacy:metadata:childcourse_map:childcourseinstanceid'] = 'ID на свързаната инстанция на активността на курса.';
$string['privacy:metadata:childcourse_map:groupidsjson'] = 'Списъкът с идентификатори на групи за подкурс, зададени от плъгина (JSON).';
$string['privacy:metadata:childcourse_map:hiddenprefset'] = 'Показва дали плъгинът е задал настройката за скриване на подкурса в Моите курсове.';
$string['privacy:metadata:childcourse_map:manualenrolid'] = 'ID на инстанцията за записване, използвана от плъгина за записване на потребителя.';
$string['privacy:metadata:childcourse_map:parentcourseid'] = 'ID на родителския курс, в който съществува активността.';
$string['privacy:metadata:childcourse_map:roleid'] = 'ID на ролята, зададена от плъгина в подкурса.';
$string['privacy:metadata:childcourse_map:timeenrolled'] = 'Времето, когато потребителят е записан чрез връзката.';
$string['privacy:metadata:childcourse_map:timemodified'] = 'Времето на последната промяна в записа за съответствието.';
$string['privacy:metadata:childcourse_map:userid'] = 'ID на потребителя, записан чрез връзката.';
$string['privacy:metadata:childcourse_state'] = 'Съхранява кеширани данни за състоянието на всеки потребител, за да поддържа синхронизация само на променените оценки и завършвания.';
$string['privacy:metadata:childcourse_state:childcourseinstanceid'] = 'ID на свързаната инстанция на активността на курса.';
$string['privacy:metadata:childcourse_state:coursecompleted'] = 'Кеширан индикатор за това дали правилото за завършване е изпълнено за потребителя.';
$string['privacy:metadata:childcourse_state:coursecompletiontimemodified'] = 'Дата и час на последната промяна в изходните данни за завършване, използвани за синхронизация само на променените оценки и завършвания.';
$string['privacy:metadata:childcourse_state:finalgrade'] = 'Кеширана оценка (процент) синхронизирана от общата оценка на подкурса.';
$string['privacy:metadata:childcourse_state:grade_source'] = 'Идентификатор на източника на оценката (напр. course_total).';
$string['privacy:metadata:childcourse_state:gradeitemtimemodified'] = 'Дата и час на последната промяна в източника за оценяване, използван за синхронизация само на променените оценки и завършвания.';
$string['privacy:metadata:childcourse_state:timemodified'] = 'Дата и час на последната промяна в кешираното състояние.';
$string['privacy:metadata:childcourse_state:userid'] = 'ID на потребителя.';
$string['privacy:metadata:userpreference:block_myoverview_hidden_course'] = 'Потребителско предпочитание, използвано за скриване на подкурс в Моите курсове (името по подразбиране на предпочитанието: block_myoverview_hidden_course_{courseid}).';
$string['settings_heading'] = 'Настройки на подкурса';
$string['syncdone'] = 'Синхронизацията завърши.';
$string['syncnow'] = 'Синхронизирай сега';
$string['targetgroup'] = 'Записване в група';
$string['targetgroup_help'] = 'Ако е избрано, потребителят ще бъде добавен към тази конкретна група в подкурса при автоматично записване. Групата трябва да съществува в подкурса. Ако е включена и опцията "Наследяване на групи от основния курс", се прилагат и двете поведения (избраната група и наследените групи).';
$string['unenrolaction'] = 'Когато връзката бъде премахната';
$string['unenrolaction_help'] = 'Определя какво се случва със записванията, създадени от тази дейност, когато свързаната дейност бъде изтрита. "Отписване" ще премахне само записванията, които са създадени от тази активност (отчетени в таблицата за съответствието). "Запазване на записванията" ще остави потребителите записани в подкурса.';
$string['unenrolaction_keep'] = 'Запазване на записванията';
$string['unenrolaction_unenrol'] = 'Отписване на потребителите, записани чрез тази връзка.';
