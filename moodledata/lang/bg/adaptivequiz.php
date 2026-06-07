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
 * Strings for component 'adaptivequiz', language 'bg', version '4.4'.
 *
 * @package     adaptivequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityreports'] = 'Отчет за опитите';
$string['adaptivequiz:addinstance'] = 'Добавяне на нов адаптивен тест';
$string['adaptivequiz:attempt'] = 'Опит на адаптивен тест';
$string['adaptivequiz:reviewattempts'] = 'Преглеждане на изпратените адаптивни тестове';
$string['adaptivequiz:viewreport'] = 'Преглеждане на отчетите за адаптивните тестове';
$string['adaptivequizname'] = 'Име';
$string['adaptivequizname_help'] = 'Въведете името на екземпляра на адаптивния тест';
$string['all_attempts_deleted'] = 'Всички опити на адаптивни тестове бяха изтрити';
$string['all_grades_removed'] = 'Всички оценки от адаптивните тестове бяха изтрити';
$string['answer'] = 'Отговор';
$string['answers_display_name'] = 'Отговори';
$string['attempt_questiondetails'] = 'Детайли за въпроса';
$string['attempt_state'] = 'Състояние на опита';
$string['attempt_summary'] = 'Обобщение на опита';
$string['attempt_user'] = 'Потребител';
$string['attemptclosed'] = 'Опитът е затворен ръчно.';
$string['attemptclosedstatus'] = 'Затворен ръчно от {$a->current_user_name} (ид. номер: {$a->current_user_id}) на {$a->now}.';
$string['attemptdeleted'] = 'Изтрит опит за {$a->name}, изпратен на {$a->timecompleted}';
$string['attemptfeedback'] = 'Обратна връзка за опита';
$string['attemptfeedback_help'] = 'Обратната връзка за опита се показва на потребителя, след като опитът приключи';
$string['attemptfinishedtimestamp'] = 'Край на опита';
$string['attemptfirst'] = 'Първи опит';
$string['attemptlast'] = 'Последен опит';
$string['attemptquestion_ability'] = 'Измерване на способностите';
$string['attemptquestion_abilitylogits'] = 'Измерени способности (logits)';
$string['attemptquestion_difficulty'] = 'Трудност на въпроса (logits)';
$string['attemptquestion_diffsum'] = 'Сбор на трудността на въпросите';
$string['attemptquestion_level'] = 'Ниво на въпроса';
$string['attemptquestion_rightwrong'] = 'Вярно/Грешно';
$string['attemptquestion_stderr'] = 'Стандартна грешка (&plusmn;&nbsp;logits)';
$string['attemptsallowed'] = 'Позволени опити';
$string['attemptsallowed_help'] = 'Брой пъти, които обучаваният може да опита тази дейност.';
$string['attemptstarttime'] = 'Време на началото на опита';
$string['attemptstate'] = 'Състояние на опита';
$string['attemptstopcriteria'] = 'Причина за спиране на опита';
$string['attempttotaltime'] = 'Общо време (hh:mm:ss)';
$string['back_to_all_questions'] = '&laquo; Обратно към всички въпроси';
$string['bestscore'] = 'Най-добър резултат';
$string['bestscorestderror'] = 'Стандартна грешка';
$string['browsersecurity'] = 'Сигурност на браузъра';
$string['browsersecurity_help'] = 'Ако е избрано „Изскачащ прозорец на цял екран с  JavaScript“, тестът ще започне само ако обучаваният има уеб браузър с активиран JavaScript. Тестът се появява в изскачащ прозорец на цял екран, който покрива всички останали прозорци и няма навигация. Това е с цел обучаваните , доколкото е възможно, да не използват копиране и поставяне';
$string['calcerrorwithinlimits'] = 'Изчислената стандартна грешка на {$a->calerror} е в границите, на дейността {$a->definederror}';
$string['closeattempt'] = 'Затваряне на опита';
$string['confirmcloseattempt'] = 'Сигурни ли сте, че искате да затворите и да завършите този опит за {$a->name}?';
$string['confirmcloseattemptscore'] = 'Отговорени са {$a->num_questions} въпроса и резултатът досега е {$a->measure} {$a->standarderror}.';
$string['confirmcloseattemptstats'] = 'Този опит е започнат на {$a->started} и последно актуализиран на {$a->modified}.';
$string['confirmdeleteattempt'] = 'Потвърждаване изтриването на опит от {$a->name}, изпратен на {$a->timecompleted}';
$string['deleteattemp'] = 'Изтриване на опит';
$string['discrimination_display_name'] = 'Разграничаване';
$string['downloadcsv'] = 'Изтегляне на CSV';
$string['enterrequiredpassword'] = 'Въведете необходимата парола';
$string['errorattemptstate'] = 'Имаше грешка при определяне на състоянието на опита';
$string['errorclosingattempt_alreadycomplete'] = 'Този опит вече е завършен, не може да бъде затворен ръчно.';
$string['errorfetchingquest'] = 'Не може да се извадят въпроси за ниво {$a->level}';
$string['errorlastattpquest'] = 'Грешка при проверката на стойността на отговора при последния опит на въпроса';
$string['errornumattpzero'] = 'Грешката с броя на опитите на въпросите е нула, но потребителят е изпратил отговор на предишен въпрос';
$string['errorsumrightwrong'] = 'Сборът от верните и грешните отговори не е равен на броя на въпросите, на които е опитано да се отговори.';
$string['formelementdecimal'] = 'Въведете десетично число. Максимум 10 цифри и максимум 5 цифри след десетичната запетая';
$string['formelementempty'] = 'Въведете цяло положително число от 1 до 999';
$string['formelementnegative'] = 'Въведете положително число от 1 до 999';
$string['formelementnumeric'] = 'Въведете стойност от 1 до 999';
$string['formlowlevelgreaterthan'] = 'Най-ниското ниво трябва да е по-малко от най-високото ниво';
$string['formminquestgreaterthan'] = 'Минималният брой въпроси трябва да бъде по-малък от максималния брой въпроси';
$string['formquestionpool'] = 'Изберете поне една категория въпроси';
$string['formstartleveloutofbounds'] = 'Началното ниво трябва да бъде число, което е между най-ниското и най-високото ниво';
$string['formstderror'] = 'Трябва да въведете процент, по-малък от 50 и по-голям или равен на 0';
$string['functiondisabledbysecuremode'] = 'Тази функционалност в момента е деактивирана';
$string['gradehighest'] = 'Най-висока оценка';
$string['grademethod'] = 'Метод за оценяване';
$string['grademethod_help'] = 'Когато са разрешени множество опити, са налични следните методи за изчисляване на крайната оценка на теста:

* Най-висока оценка от всички опити
* Първи опит (всички други опити се игнорират)
* Последен опит (всички други опити се игнорират)';
$string['graphlegend_error'] = 'Стандартна грешка';
$string['highestlevel'] = 'Най-високо ниво на трудност';
$string['highestlevel_help'] = 'Най-високото или най-трудното ниво, от което оценяването може да избира въпроси. По време на опитите няма да се надхвърли това ниво на трудност';
$string['highlevelusers'] = 'Потребители над нивото на въпроса';
$string['id'] = 'ид. номер';
$string['indvuserreport'] = 'Отчет за опитите на отделни потребители за {$a}';
$string['leveloutofbounds'] = 'Заявеното ниво {$a->level} е извън границите за опита';
$string['lowestlevel'] = 'Най-ниско ниво на трудност';
$string['lowestlevel_help'] = 'Най-ниското или най-малкото трудно ниво, от което оценяването може да избира въпроси. По време на опита няма да се излезе от това ниво на трудност';
$string['lowlevelusers'] = 'Потребители под нивото на въпроса';
$string['maximumquestions'] = 'Максимален брой въпроси';
$string['maximumquestions_help'] = 'Максимален брой въпроси, които обучаваният може да опита да отговори';
$string['maxquestattempted'] = 'Максимален брой отговорени въпроси';
$string['midlevelusers'] = 'Потребители близо до нивото на въпроса';
$string['minimumquestions'] = 'Минимален брой въпроси';
$string['minimumquestions_help'] = 'Минималният брой въпроси, на които обучаваният трябва да отговори';
$string['missingtagprefix'] = 'Липсващ префикс на маркера';
$string['modulename'] = 'Адаптивен тест';
$string['modulename_help'] = 'Дейността Адаптивен тест позволява на преподавателя да създава викторини, които ефективно измерват способностите на обучаваните. Адаптивните тестове се състоят от въпроси, избрани от банката с въпроси, които имат оценка за трудност. Въпросите се избират така, че да съответстват на очакваното ниво на способностите на текущия кандидат. Ако тествания успее да отговори даден въпрос, следващият въпрос е по-труден. Ако тествания отговори неправилно на въпрос, следващият въпрос е по-лесен. Тази техника ще се развива в поредица от въпроси, доближаващи се до нивото на способностите на тествания. Тестът спира, когато способностите на тествания се определят с необходимата точност.

Тази дейност е най-подходяща за определяне на мярка на способности в едноизмерна скала. Въпреки че скалата може да бъде много широка, всички въпроси трябва да предоставят измерване на способности или способностите да са в една и съща скала. При тест с попълване, например, въпросите с ниска степен в скалата, на които начинаещите могат да отговорят правилно, също трябва да бъдат отговорени и от експерти, докато на въпросите по-високо в скалата трябва да могат да отговарят само експерти или случайно да бъдат налучкани. Въпроси, които не правят разлика между кандидати с различни способности, ще направят теста неефективен и могат да дадат неубедителни резултати.

Въпросите, използвани в адаптивния тест, трябва

  * автоматично да се оценяват като верен/грешен
  * да бъдат маркирани с тяхната трудност с помощта на „adpq_“, последвано от цяло положително число, което е в рамките на обхвата за теста

Адаптивният тест може да бъде конфигуриран за

  * дефиниране на обхвата на трудностите/потребителските способности, които трябва да бъдат измерени. 1-10, 1-16 и 1-100 са примери за валидни диапазони.
  * дефиниране на необходимата прецизност, преди тестът да бъде спрян. Често грешка от 5% в измерването на способностите е подходящо за правило за спиране
  * изискват минимален брой въпроси за отговор
  * изискват максимален брой въпроси, на които може да се отговори

Това описание и процесът на тестване в тази дейност се основават на <a href="http://www.rasch.org/memo69.pdf">Компютърно адаптивно тестване: Методология, чието време е дошло</a> от Джон Майкъл Линакър, д-р. Психометрична лаборатория на MESA – Университет на Чикаго. Меморандум на MESA No 69.';
$string['modulenameplural'] = 'Адаптивен тест';
$string['na'] = 'n/a';
$string['name'] = 'Име';
$string['noattemptsallowed'] = 'Не се допускат повече опити за тази дейност';
$string['nonewmodules'] = 'Няма намерени примери за адаптивния тест';
$string['nopermission'] = 'Нямате разрешение да преглеждате този ресурс';
$string['notinprogress'] = 'Този опит не е в ход.';
$string['notyourattempt'] = 'Това не е вашият опит за дейността';
$string['numofattemptshdr'] = 'Брой опити';
$string['percent_correct_display_name'] = '% Верни';
$string['pluginadministration'] = 'Адаптивен тест';
$string['pluginname'] = 'Адаптивен тест';
$string['question_report'] = 'Анализ на въпроса';
$string['questionanalysisbtn'] = 'Анализ на въпроса';
$string['questionnumber'] = 'Въпрос #';
$string['questionpool'] = 'Колекция от въпроси';
$string['questionpool_help'] = 'Изберете категорията на въпросите, от които дейността ще изтегли въпроси по време на опит.';
$string['questions_report'] = 'Доклад за въпросите';
$string['questionsattempted'] = 'Сума от опитаните въпроси';
$string['recentactquestionsattempted'] = 'Опитани въпроси: {$a}';
$string['recentattemptstate'] = 'Състояние на опита:';
$string['recentcomplete'] = 'Завършени';
$string['recentinprogress'] = 'В ход';
$string['reportattemptsfilterformheader'] = 'Филтриране';
$string['reportattemptsfilterformsubmit'] = 'Филтър';
$string['requirepassword'] = 'Паролата е задължителна';
$string['requirepassword_help'] = 'От обучаваните се изисква да въведат парола, преди да започнат опита си';
$string['requirepasswordmessage'] = 'За да опитате този тест, трябва да знаете паролата на теста';
$string['resetadaptivequizsall'] = 'Изтриване на всички опити за адаптивния тест';
$string['result'] = 'Резултат';
$string['reviewattempt'] = 'Преглед на опита';
$string['reviewattemptreport'] = 'Преглеждане на опит от {$a->fullname}, изпратен на {$a->finished}';
$string['score'] = 'Точки';
$string['standarderror'] = 'Стандартна грешка за спиране';
$string['standarderror_help'] = 'Когато размерът на грешката в измерването на способността на потребителя падне под това количество, тестът ще спре. Настройване на тази стойност от 5% по подразбиране, за да изисквате повече или по-малко прецизност при измерването на способностите';
$string['standarderrorhdr'] = 'Стандартна грешка';
$string['startattemptbtn'] = 'Започване на опита';
$string['startinglevel'] = 'Начално ниво на трудност';
$string['startinglevel_help'] = 'Когато обучаваният започне опит, дейността ще избере на случаен принцип въпрос, съответстващ на нивото на трудност';
$string['statistic'] = 'Статистика';
$string['stopingconditionshdr'] = 'Условия за спиране';
$string['submitanswer'] = 'Изпращане на отговор';
$string['times_used_display_name'] = 'Използван брой пъти';
$string['updateattempterror'] = 'Грешка при актуализиране на записа на опита';
$string['user'] = 'Потребител';
$string['value'] = 'Стойност';
$string['wrongpassword'] = 'Паролата е невярна';
