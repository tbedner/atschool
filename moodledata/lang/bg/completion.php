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
 * Strings for component 'completion', language 'bg', version '4.4'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Постигане на оценка';
$string['achievingpassinggrade'] = 'Постигане на оценка за преминаване';
$string['activities'] = 'Дейности';
$string['activitiescompleted'] = 'Завършване на дейност';
$string['activitiescompletednote'] = 'Бележка: Завършване на задание трябва да е зададено за всяко задание за де се появи в горния списък';
$string['activitieslabel'] = 'Дейности / ресурси';
$string['activityaggregation'] = 'Изисква условия';
$string['activityaggregation_all'] = 'ВСИЧКИ избрани дейности да бъдат завършени';
$string['activityaggregation_any'] = 'ВСЯКА от избраните дейности да бъде завършена';
$string['activitycompletion'] = 'Условия за завършване';
$string['activitycompletionupdated'] = 'Промените са запазени';
$string['activitygradenotrequired'] = 'Не се изисква оценка';
$string['activitygradetopassnotset'] = 'Тази дейност няма валиден набор оценки за преминаване. Такъв може да бъде зададен в секцията за оценки в настройките на дейността.';
$string['addconditions'] = 'Добавете условия';
$string['affectedactivities'] = 'Промените ще засегнат следните  <b>{$a}</b> дейности или ресурси:';
$string['aggregationmethod'] = 'Метод за обобщаване';
$string['all'] = 'Всички';
$string['allconditions'] = 'Дейността е завършена, когато учениците направят всичко по-долу:';
$string['any'] = 'Всяко';
$string['approval'] = 'Одобряване';
$string['areyousureoverridecompletion'] = 'Сигурни ли сте, че искате да промените текущото състояние на завършване на тази дейност и потребител на "{$a}"?';
$string['badautocompletion'] = 'Трябва да изберете поне едно условие.';
$string['badcompletiongradeitemnumber'] = 'Изискване за оценка не може да се активира поради <b>{$a}</b>, защото оценяване от {$a} не е позволено.';
$string['bulkactivitycompletion'] = 'Масово редактиране завършване на дейности';
$string['bulkactivitydetail'] = 'Изберете дейността, която искате да редактирате.';
$string['bulkcompletiontracking'] = 'Проследяване на завършването';
$string['bulkcompletiontracking_help'] = '<strong>Нищо:</strong> Не се показва завършване на дейността

<strong>Ръчно:</strong> Студентите сами отбелязват дейността за завършена

<strong>При условия:</strong> Дейността се показва, че е завършена, когато са удовлетворени условия';
$string['checkactivity'] = 'Отметка за дейност / ресурс: {$a}';
$string['checkall'] = 'Отбелязване или отмятане на всички дейности и ресурси';
$string['checkallsection'] = 'Отбелязване или отмятане на всички дейности и ресурси в секция: {$a}';
$string['completeactivity'] = 'Завършване на дейността';
$string['completed'] = 'Завършено';
$string['completedunlocked'] = 'Отключване на завършването';
$string['completedunlockedtext'] = 'Когато запазите този формуляр, данните за завършване ще бъдат изтрити и след това преизчислени, където е възможно. За да избегнете това, можете да се движите без запазване.';
$string['completedwarning'] = 'Настройките за завършване са заключени';
$string['completedwarningtext'] = 'Тази дейност е маркирана като извършена за един или повече обучаеми. Ако отключите настройките, за да направите промяна, след което запишете формуляра, данните за попълване ще бъдат изтрити и след това преизчислени, където е възможно. Ръчното изпълнение не може да бъде преизчислено, така че в този случай ученикът ще трябва да го маркира отново като изпълнено.';
$string['completion'] = 'Проследяване на завършването';
$string['completion-alt-auto-enabled'] = 'Системата отбелязва това за завършено, съгласно условията: {$a}';
$string['completion-alt-auto-fail'] = 'Завършили: {$a} (не са постигнали оценка за завършване)';
$string['completion-alt-auto-n'] = 'Не са завършили: {$a}';
$string['completion-alt-auto-n-override'] = 'Не са завършили: {$a->modname} (отбелязал {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'Завършили: {$a} (постигнали оценка за завършване)';
$string['completion-alt-auto-y'] = 'Завършен: {$a}';
$string['completion-alt-auto-y-override'] = 'Завършили: {$a->modname} (отбелязал {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'Студентът може сам да отбележи като завършена дейността: {$a}';
$string['completion-alt-manual-n'] = 'Не е завършена дейността: {$a}. Изберете я за да я отбележите за завършена.';
$string['completion-alt-manual-n-override'] = 'Не са завършили: {$a->modname} (отбелязал {$a->overrideuser}).
Изберете за да отбележите като завършени.';
$string['completion-alt-manual-y'] = 'Завършена е дейността: {$a}. Изберете я за да я отбележите за незавършена.';
$string['completion-alt-manual-y-override'] = 'Завършили: {$a->modname} (отбелязал {$a->overrideuser}).
Изберете за да отбележите като незавършени.';
$string['completion-fail'] = 'Изпълнено (не постигната оценка за завършване)';
$string['completion-n'] = 'Незавършена';
$string['completion-n-override'] = 'Не е завършено (отбелязано от{$a})';
$string['completion-pass'] = 'Изпълнено (с постигната оценка за завършване)';
$string['completion-y'] = 'Завършен';
$string['completion-y-override'] = 'Изпълнено (отбелязано от {$a})';
$string['completion_automatic'] = 'Добавете изисквания';
$string['completion_help'] = 'Ако е зададено, завършването на дейността се отбелязва както ръчно, така и автоматично, въз основа на условия. При желание могат да се зададат няколко условия. Ако е така дейността се отбелязва като завършена само ако ВСИЧКИ условия бъдат изпълнени.';
$string['completion_link'] = 'activity/completion';
$string['completion_manual'] = 'Обучаваните трябва ръчно да маркират дейността като извършена';
$string['completion_none'] = 'Незавършена';
$string['completionactivitydefault'] = 'Като по подразбиране за дейността';
$string['completionanygrade_desc'] = 'Всякаква оценка';
$string['completiondefault'] = 'Проследяване на напредването по подразбиране';
$string['completiondisabled'] = 'Изключено, не се показва в найстройките на дейността';
$string['completionduration'] = 'Записване';
$string['completionenabled'] = 'Включено, управление чрез настройките на дейността';
$string['completionexpected'] = 'Задайте напомняне във времевата линия';
$string['completionexpected_help'] = 'Това ви позволява да зададете напомняне за учениците да работят върху тази дейност. То ще се появи в блока Timeline на тяхното табло за управление като "{$a} изисква действие ".';
$string['completionexpecteddesc'] = 'Очаква се изпълнение до {$a}';
$string['completionexpectedfor'] = '{$a->instancename} Трябва да се изпълни';
$string['completionicons'] = 'Отметки за проследяване на напредъка';
$string['completionicons_help'] = 'Отметката срещу името на дейност може да се използва да покаже кога дейността е изпълнена.

Ако виждате пунктирана рамка около отметката, то тя ще бъде сложена автоматично след като изпълните условията, зададени от преподавателя.

Ако виждате плътна рамка около отметката, можете Вие да я сложите, ако смятате, че сте приключили с тази дейност. (Повторното щракване премахва отметката.)';
$string['completionmenuitem'] = 'Завършеност';
$string['completionnotenabled'] = 'Завършването на е включено';
$string['completionnotenabledforcourse'] = 'Завършването на е включено за този курс';
$string['completionnotenabledforsite'] = 'Завършването на е включено за този сайт';
$string['completionondate'] = 'Дата';
$string['completionondatevalue'] = 'Дата, след която курсът ще се отбележи като завършен';
$string['completionpassgrade'] = 'Задължителна минимална оценка';
$string['completionpassgrade_desc'] = 'Минимална оценка';
$string['completionpassgrade_help'] = 'Ако е разрешено, дейността се счита за завършена, когато студентът получи определена оценка.';
$string['completionsettingslocked'] = 'Настройване на завършването е заключено';
$string['completionupdated'] = 'Актуализиране на завършването за дейност <b>{$a}</b>';
$string['completionusegrade'] = 'Изисква оценка';
$string['completionusegrade_desc'] = 'Получена оценка';
$string['completionusegrade_help'] = 'Ако е включено, дейността се счита завършена, когато обучаваният получи оценка. Ако е зададена оценка за завършване на дейността, в отчета за завършване на дейностите се показват икони дали е премината или не е премината дейността.';
$string['completionview'] = 'Изисква преглеждане';
$string['completionview_desc'] = 'Преглеждане на дейността';
$string['configcompletiondefault'] = 'Настройка по подразбиране за проследяване на напредването, когато се създава нова дейност.';
$string['configenablecompletion'] = 'Когато е включено, трябва да са зададени условия за завършване на курсове и дейности. Задаването на условия за завършване на дейности е препоръчително, за да се показва полезна информация на потребителите при показване на курсовете в техните табла.';
$string['confirmselfcompletion'] = 'Потвърждаване самозавършване';
$string['courseaggregation'] = 'Изискват се условия';
$string['courseaggregation_all'] = 'ВСИЧКИ избрани курсова да са завършени';
$string['courseaggregation_any'] = 'НЯКОЙ от избраните курсове да е завършен';
$string['coursealreadycompleted'] = 'Вие вече сте завършили този курс';
$string['coursecomplete'] = 'Напредване в курса';
$string['coursecompleted'] = 'Курсът е завършен';
$string['coursecompletedmessage'] = '<p>Поздравления!</p><p>Вие завършихте курса <a href="{$a->courselink}">{$a->coursename}</a>.</p>';
$string['coursecompletion'] = 'Напредване в курса';
$string['coursecompletioncondition'] = 'Завършване: {$a}';
$string['coursecompletionnavigation'] = 'Завършване на курса третична навигация';
$string['coursecompletionsettings'] = 'Настройки за завършване на курса';
$string['coursegrade'] = 'Оценка от курс';
$string['coursesavailable'] = 'Налични курсове';
$string['coursesavailableexplaination'] = 'Бележка: Трябва да са зададени условия за завършване на курсовете за да се покажат в горния списък.';
$string['criteria'] = 'Критерии';
$string['criteriagroup'] = 'Група критерии';
$string['criteriarequiredall'] = 'Всички критерии по-долу са задължителни';
$string['criteriarequiredany'] = 'Някои критерии по-долу са задължителни';
$string['criteriasummary'] = '{$a->type}: {$a->summary}';
$string['csvdownload'] = 'Изтегляне във формат за електронна таблица (UTF-8 .csv)';
$string['datepassed'] = 'Дата на преминаване';
$string['days'] = 'Дена';
$string['daysoftotal'] = '{$a->days} от {$a->total}';
$string['daysuntilcompletion'] = 'Дни до завършване';
$string['defaultactivitycompletioncourse'] = 'Това са условията за завършване по подразбиране за дейности в този курс.';
$string['defaultactivitycompletionsite'] = 'Това са условията за завършване по подразбиране за дейности във всички курсове.';
$string['defaultcompletion'] = 'Завършване на дейности по подразбиране';
$string['defaultcompletionupdated'] = 'Промените са запазени';
$string['deletecompletiondata'] = 'Изтриване данните за завършване';
$string['dependencies'] = 'Зависимости';
$string['dependenciescompleted'] = 'Завършване на други курсове';
$string['detail_desc:receivegrade'] = 'Получаване на оценка';
$string['detail_desc:receivepassgrade'] = 'Получаване на оценка за преминаване';
$string['detail_desc:view'] = 'Преглеждане';
$string['done'] = 'Завършено';
$string['editconditions'] = 'Редактиране на условията';
$string['editcoursecompletionsettings'] = 'Редактиране на настройките за завършване на курса';
$string['emptyconditionsinfo'] = 'За тази дейност няма поставени условия за завършване.';
$string['emptyconditionswarning'] = 'Трябва да добавите поне едно условие за завършване.';
$string['enablecompletion'] = 'Позволяване проследяването на завършването';
$string['enablecompletion_help'] = 'Ако е активирано, можете да зададете условия за завършване на дейност или завършване на курс.';
$string['enrolmentduration'] = 'Продължителност на записването';
$string['enrolmentdurationlength'] = 'Потребителят трябва да остане записан за';
$string['err_noactivities'] = 'Настройката за завършване не е активирана за никоя от дейностите и няма какво да се показва. Можете да зададете настройката за завършване редактирайки настройките на някоя дейност.';
$string['err_nocourses'] = 'Настройката за завършване на курс не е зададена за никой друг курс и няма какво да се показва. Можете да зададете настройка за завършване на курс от настройките на курса.';
$string['err_nograde'] = 'За този курс не е зададена оценка за завършване. За да удовлетворите този критерия Вие трябва да зададете оценка за завършване за този курс.';
$string['err_noroles'] = 'Няма роли с право moodle/course:markcomplete в този курс.';
$string['err_nousers'] = 'В този курс няма студенти или групи, за които да се показва информация за завършване. (Информация за завършване на дейности се показва само за ролите с възможност "Да се показва в отчетите за завършване", която е включена по подразбиране само за роля Студент. Така че, ако няма участници с роля Студент, ще виждате това съобщение.)';
$string['err_settingslocked'] = 'Един или повече студенти вече са изпълнили критерия, така че настройките са заключени. Отключването на настройките ще изтрие данните за завършване на потребителя и може да причини объркване.';
$string['err_system'] = 'Възникна вътрешна грешка в системата за завършване. (Системните администратори могат да разрешат информация за дебъгване и да видят повече подробности.)';
$string['eventcoursecompleted'] = 'Курсът е завършен';
$string['eventcoursecompletionupdated'] = 'Завършването на курса е обновено';
$string['eventcoursemodulecompletionupdated'] = 'Завършеността на дейност в курс е обновена';
$string['eventdefaultcompletionupdated'] = 'Настройките по подразбиране на дейностите в курса са актуализирани';
$string['excelcsvdownload'] = 'Изтегляне във формат, съвместим с  Excel (.csv)';
$string['failed'] = 'Провалена';
$string['fraction'] = 'Фракция';
$string['graderequired'] = 'Задължителна оценка от курс';
$string['gradexrequired'] = '{$a} задължителна';
$string['hiddenrules'] = 'Някои настройки специфични за <b>{$a}</b> са скрити. За да ги видите махнете от селекцията другите дейности.';
$string['incompatibleplugin'] = 'Тази дейност не поддържа настройки за завършване по подразбиране. Условията за завършване трябва да бъдат зададени ръчно за всяка употреба';
$string['inprogress'] = 'В ход';
$string['manual'] = 'Ръчно';
$string['manualcompletionby'] = 'Ръчно завършване от други';
$string['manualcompletionbynote'] = 'Бележка: Правото moodle/course:markcomplete трябва да е дадено на някоя роля за да се появи в списъка.';
$string['manualselfcompletion'] = 'Ръчно самоотбелязване на завършването';
$string['manualselfcompletionnote'] = 'Бележка: Блокът за самоотбелязване на завършването трябва да бъде добавен към курса ако бъде разрешено ръчно самоотбелязване на завършването.';
$string['markcomplete'] = 'Отбелязване на завършване';
$string['markedcompleteby'] = 'Отбелязано като завършено от {$a}';
$string['markingyourselfcomplete'] = 'Отбелязване себе си завършил';
$string['modifybulkactions'] = 'Отбележете дейности, които искате да редактирате';
$string['moredetails'] = 'Още данни';
$string['nocriteriaset'] = 'Не са зададени критерии за завършване на този курс';
$string['nogradeitem'] = 'Изискване за оценка не може да се активира за <b>{$a}</b>, защото дейността е без оценка.';
$string['notcompleted'] = 'Не е завършен';
$string['notenroled'] = 'Вие не сте записани в този курс';
$string['nottracked'] = 'В момента вашият напредък в този курс не се проследява';
$string['notyetstarted'] = 'Още не е започнат';
$string['overallaggregation'] = 'Изисквания за завършване';
$string['overallaggregation_all'] = 'Курсът се завършва, когато ВСИЧКИ условия бъдат изпълнени';
$string['overallaggregation_any'] = 'Курсът се завършва, когато КОЕ ДА Е от условията е изпълнено';
$string['pending'] = 'В изчакване';
$string['periodpostenrolment'] = 'Период след записване';
$string['privacy:metadata:completionstate'] = 'Ако дейността е завършена';
$string['privacy:metadata:course'] = 'Идентификатор на курс';
$string['privacy:metadata:coursecompletedsummary'] = 'Съхранява информация за потребители, които са удовлетворили критерия за курса.';
$string['privacy:metadata:coursemoduleid'] = 'Ид. номерът на дейност';
$string['privacy:metadata:coursemodulesummary'] = 'Съхранява данни за завършване на дейностите на потребител';
$string['privacy:metadata:coursesummary'] = 'Съхранява данни за завършване на курсове на потребител.';
$string['privacy:metadata:gradefinal'] = 'Окончателна оценка, получена за завършване на курса';
$string['privacy:metadata:overrideby'] = 'Ид. номер на човека, отменил завършването на дейността';
$string['privacy:metadata:reaggregate'] = 'Дали завършването в курса е реагрегирано.';
$string['privacy:metadata:timecompleted'] = 'Времето, когато е завършен курса';
$string['privacy:metadata:timecreated'] = 'Времето, когато е завършена дейността';
$string['privacy:metadata:timeenrolled'] = 'Времето, когато потребителят е записан в курса';
$string['privacy:metadata:timemodified'] = 'Времето, когато завършването на дейността е променено';
$string['privacy:metadata:timestarted'] = 'Времето, когато курса е започнат.';
$string['privacy:metadata:unenroled'] = 'Дали потребителят е отписан от курса';
$string['privacy:metadata:userid'] = 'Ид. номерът на човека с данни за завършване на дейности';
$string['privacy:metadata:viewed'] = 'Дали дейността е прегледана';
$string['progress'] = 'Напредък на студент';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Напредък: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Разпознаване на предишно обучение';
$string['remainingenroledfortime'] = 'Остава записан за зададения период от време';
$string['remainingenroleduntildate'] = 'Оставащи записани до определената дата';
$string['reportpage'] = 'Показване на потребители {$a->from} на {$a->to} от {$a->total} общо.';
$string['requiredcriteria'] = 'Изисквани критерии';
$string['resetactivities'] = 'Почистване на всички отбелязани дейности и ресурси';
$string['restoringcompletiondata'] = 'Записване на данни за завършване';
$string['roleaggregation'] = 'Изисквано условие';
$string['roleaggregation_all'] = 'Всички избрани роли да отбелязват кога е удовлетворено условието';
$string['roleaggregation_any'] = 'Всяка от избраните роли да отбелязва кога е удовлетворено условието';
$string['roleidnotfound'] = 'Ид. номер на роля {$a} не е намерен';
$string['saved'] = 'Записан';
$string['seedetails'] = 'Вижте подробности';
$string['select'] = 'Избиране';
$string['self'] = 'Сам';
$string['selfcompletion'] = 'Самозавършване';
$string['showcompletionconditions'] = 'Показване на условията за завършване на дейността';
$string['showcompletionconditions_help'] = 'Показване на условията за завършване на дейността на страницата на курса.';
$string['showinguser'] = 'Показване на потребител';
$string['studentsmust'] = 'Обучаваните трябва';
$string['timecompleted'] = 'Времето приключи';
$string['todo'] = 'Да направя';
$string['unenrolingfromcourse'] = 'Отписване от курс';
$string['unenrolment'] = 'Отписване';
$string['unit'] = 'Единица';
$string['unlockcompletion'] = 'Отключване на настройките за завършване';
$string['unlockcompletiondelete'] = 'Отключване на настройките за завършване и изтриване на данните за завършването на потребителя';
$string['updateactivities'] = 'Актуализиране състоянието на завършване на отбелязаните дейности';
$string['usealternateselector'] = 'Използване на алтернативно избиране на курсове';
$string['usernotenroled'] = 'Потребителят не е записан в този курс';
$string['viewcoursereport'] = 'Вижте отчет за курса';
$string['viewingactivity'] = 'Показване на {$a}';
$string['withconditions'] = 'При условия';
$string['writingcompletiondata'] = 'Записване на данни за завършване';
$string['xdays'] = '{$a} дена';
$string['youmust'] = 'Ти трябва';
