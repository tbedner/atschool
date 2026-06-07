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
 * Strings for component 'workshop', language 'bg', version '4.4'.
 *
 * @package     workshop
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregategrades'] = 'Преизчисляване на оценките';
$string['allowedfiletypesforoverallfeedback'] = 'Позволени типове файлове, прикачени към общата забележка';
$string['allowedfiletypesforoverallfeedback_help'] = 'Типовете файлове прикачени към общата забележка може да се ограничат чрез задаване на списък от позволени типове. Ако полето се остави празно всички типове ще са разрешени.';
$string['allowedfiletypesforoverallfeedback_link'] = 'admin/tool/filetypes/index';
$string['allowedfiletypesforsubmission'] = 'Позволени типове файлове за предаване';
$string['allowedfiletypesforsubmission_help'] = 'Може да се ограничат възможните типове файлове чрез задаване на списък от разрешени типове. Ако полето се остави празно, ще са позволени всички типове файлове.';
$string['allowedfiletypesforsubmission_link'] = 'admin/tool/filetypes/index';
$string['allsubmissions'] = 'Всички предадени работи ({$a})';
$string['areaconclusion'] = 'Заключителен текст';
$string['areainstructauthors'] = 'Инструкции за предаване';
$string['areainstructreviewers'] = 'Инструкции за оценяване';
$string['areaoverallfeedbackattachment'] = 'Прикачени файлове към обща забележка';
$string['areaoverallfeedbackcontent'] = 'Текст на обща забележка';
$string['areasubmissionattachment'] = 'Предадени прикачени файлове';
$string['areasubmissioncontent'] = 'Предадени текстове';
$string['assessedsubmission'] = 'Оценени работи';
$string['assessingsubmission'] = 'Оценяване на работа';
$string['assessment'] = 'Оценяване';
$string['assessmentby'] = 'според <a href="{$a->url}">{$a->name}</a>';
$string['assessmentbyfullname'] = 'Оценка от {$a}';
$string['assessmentbyyourself'] = 'Вашата оценка';
$string['assessmentend'] = 'Краен срок за оценяване';
$string['assessmentendbeforestart'] = 'Крайният срок за оценяване не може да се зададе преди датата на началото на оценяване';
$string['assessmentenddatetime'] = 'Краен срок за оценяване: {$a->daydatetime} ({$a->distanceday})';
$string['assessmentendevent'] = '{$a} (краен срок за оценяване)';
$string['assessmentform'] = 'Формуляр за оценяване';
$string['assessmentofsubmission'] = '<a href="{$a->assessmenturl}">Оценка</a> на <a href="{$a->submissionurl}">{$a->submissiontitle}</a>';
$string['assessmentsettings'] = 'Настройки на оценяването';
$string['assessmentstart'] = 'Отворено за оценяване от';
$string['assessmentstartdatetime'] = 'Отворена за оценяване от {$a->daydatetime} ({$a->distanceday})';
$string['assessmentstartevent'] = '{$a} (отворена за оценяване)';
$string['assessmentweight'] = 'Тегло на иценката';
$string['backtoeditform'] = 'Обратно към редактиране на формуляра';
$string['calculatesubmissiongrades'] = 'Пресмятане на оценки за работите';
$string['calculatesubmissiongradesdetails'] = 'очаквано: {$a->expected}<br>изчислено: {$a->calculated}';
$string['clearaggregatedgrades_help'] = 'Агрегираните оценки на работите и оценките за оценяване ще бъдат нулирани. Вие можете да изчислите отново тези оценки във Фаза поставяне на оценки';
$string['clearaggregatedgradesconfirm'] = 'Сигурни ли сте, че искате да изтриете пресметнатите оценки върху предадените работи и оценките върху дейността?';
$string['clearassessmentsconfirm'] = 'Сигурни ли сте, че искате да изтриете всички оценки от оценяването? Вие няма да можете сами да ги възстановите, ще трябва оценяващите пак да оценяват предадените работи.';
$string['conclusion'] = 'Заключение';
$string['conclusion_help'] = 'Заключителният текст са показва на участниците в края на дейността.';
$string['configexamplesmode'] = 'Режим по подразбиране на примерите за оценяване в работилници';
$string['configgradedecimals'] = 'Брой на цифрите по подразбиране, които трябва да се показват след десетичната запетая, когато се показват оценки.';
$string['createsubmission'] = 'Започване приготвянето на работа';
$string['daysago'] = 'преди {$a} дена';
$string['daysleft'] = '{$a} оставащи дни';
$string['daystoday'] = 'днес';
$string['daystomorrow'] = 'утре';
$string['daysyesterday'] = 'вчера';
$string['deadlinesignored'] = 'Времевите ограничения не се отнасят за Вас';
$string['deletesubmission'] = 'Изтриване на работа';
$string['editassessmentform'] = 'Редактиране на формуляра за оценяване';
$string['editassessmentformstrategy'] = 'Редактиране на формуляра за оценяване ({$a})';
$string['editingassessmentform'] = 'Редактиране на формуляр за оценяване';
$string['editingsubmission'] = 'Редактиране на работа';
$string['editsubmission'] = 'Редактиране на работа';
$string['err_multiplesubmissions'] = 'Докато се редактираше тази форма, беше запазена друга версия на работата. Многократно изпълняване от един и същи потребител не е позволено.';
$string['eventsubmissionassessed'] = 'Работата е оценена';
$string['eventsubmissionassessmentsreset'] = 'Оценката на работата е изчистена';
$string['eventsubmissioncreated'] = 'Работата е създадена';
$string['eventsubmissiondeleted'] = 'Работата е изтрита';
$string['eventsubmissionreassessed'] = 'Работата е преоценена';
$string['eventsubmissionupdated'] = 'Работата е актуализирана';
$string['eventsubmissionviewed'] = 'Работата е прегледана';
$string['exampleadd'] = 'Добавяне на примерна работа';
$string['exampledeleteconfirm'] = 'Сигурни ли сте, че искате да изтриете примерната предадена работа? Щракнете бутон "Продължаване" за да я изтриете.';
$string['exampleneedsubmission'] = 'Вие трябва да предадете своята работа и първо да оцените всички примерни работи';
$string['examplesbeforeassessment'] = 'Примерите са достъпни след собствено предаване и трябва да бъдат оценени преди рецензирането';
$string['examplesbeforesubmission'] = 'Примерите трябва да се възложат преди собственото предаване';
$string['examplesmode'] = 'Метод за оценяване на примерните оценки';
$string['examplesubmissions'] = 'Примерни работи';
$string['examplesvoluntary'] = 'Оценяването на примерните работи е доброволно';
$string['exportsubmission'] = 'Експортиране на тази страница';
$string['feedbackauthor'] = 'Забележка към автора';
$string['feedbackauthorattachment'] = 'Прикачен файл';
$string['feedbacksettings'] = 'Обратно съобщение';
$string['gradedecimals'] = 'Брой цифри след десетичната запетая в оценките';
$string['gradeitemsubmission'] = '{$a->workshopname} (работа)';
$string['gradetopassgrading'] = 'Оценка за преминаване на оценяването';
$string['gradetopasssubmission'] = 'Оценка за преминаване на предаването';
$string['gradinggrade'] = 'Оценка за оценяването';
$string['gradinggrade_help'] = 'Тази настройка определя, максималната оценка, която може да се получи за оценяването на работите на другите.';
$string['gradingsettings'] = 'Настройки на оценяването';
$string['iamsure'] = 'Да, сигурен съм';
$string['indicator:cognitivedepthdef_help'] = 'Участникът е достигнал този процент на познавателна ангажираност, предложен от дейностите Работилница през този интервал за анализ (Levels = No view, View, Submit, View feedback, Comment on feedback, Resubmit after viewing feedback)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadthdef_help'] = 'Участникът е достигнал този процент на социалната ангажираност, предлагана от дейностите Работилница през този интервал за анализ (Levels = No participation, Participant alone, Participant with others)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['info'] = 'Информация';
$string['instructauthors'] = 'Инструкции за заданието';
$string['instructreviewers'] = 'Инструкции за оценяване';
$string['introduction'] = 'Въведение';
$string['latesubmissions'] = 'Закъснели предавания';
$string['latesubmissions_desc'] = 'Позволява се предаване след срока';
$string['latesubmissions_help'] = 'Ако е позволено, автор може да изпрати работата си след срока за предаване или през фазата на оценяване. Обаче закъснелите работи не могат да се редактират.';
$string['latesubmissionsallowed'] = 'Позволени са закъснели предавания';
$string['maxbytes'] = 'Максимален размер на файл';
$string['modulename'] = 'Работилница';
$string['modulename_help'] = 'Модулът за дейност Работилница позволява събиране, разглеждане и взаимно оценяване на студентски  работи.

Студентите могат да качат всякакво цифрово съдържание (файлове), като редактирани с Word документи или електронни таблици, или да напишат текст в поле редактор направо на сайта.

Предадените работи се оценяват със форма за оценяване с много критерии, съставена от преподавател. Взаимното поставяне на оценки и разбирането на формата може да се упражни предварително върху примери с поставени оценки, дадени от преподавателя.

Студентите получават две оценки - една за качената си работа и втора за оценките, които са поставили на състудентите си. И двете оценки се записват в дневника за оценки.';
$string['modulename_link'] = 'mod/workshop/view';
$string['modulenameplural'] = 'Работилници';
$string['mysubmission'] = 'Моята работа';
$string['nattachments'] = 'Максимален брой на опитите за предаване';
$string['noexamples'] = 'В тази работилница все още няма примери';
$string['noexamplesformready'] = 'Вие трябва да настроите формуляр за оценяване преди да качите примерни работи';
$string['nosubmissionfound'] = 'За този потребител не е намерена работа';
$string['nosubmissions'] = 'Още няма работи в тази работилница';
$string['nosubmissiontype'] = 'Поне един тип работа трябва да е наличин';
$string['noyoursubmission'] = 'Още не сте предали работата си';
$string['overallfeedback'] = 'Обща забележка';
$string['overallfeedbackfiles'] = 'Максимален брой файлове, прикачени към общата забележка';
$string['overallfeedbackmaxbytes'] = 'Максимален размер на файл, прикачен към обща забележка';
$string['overallfeedbackmode'] = 'Режим за обща забележка';
$string['overallfeedbackmode_0'] = 'Не е позволена';
$string['overallfeedbackmode_1'] = 'Позволена по избор';
$string['overallfeedbackmode_2'] = 'Позволена и изисквана';
$string['overallfeedbackmode_help'] = 'Ако е позволен, в долната част на формуляра за оценяване се показва текстово поле, в което рецензентите могат да напишат обща оценка или допълнително обяснение на своята оценка.';
$string['participant'] = 'Участник';
$string['phaseassessment'] = 'Фаза на оценяване';
$string['phaseclosed'] = 'Затворена';
$string['phaseevaluation'] = 'Фаза поставяне на оценки';
$string['phasesetup'] = 'Фаза на установяване';
$string['phasesoverlap'] = 'Фазите "Подаване" и "Оценяване" не могат да се покриват във времето';
$string['phasesubmission'] = 'Фаза "Подаване"';
$string['pluginadministration'] = 'Администриране на Работилница';
$string['pluginname'] = 'Работилница';
$string['prepareexamples'] = 'Подготвяне на примерни работи';
$string['previewassessmentform'] = 'Преглед';
$string['privacy:metadata:feedbackauthor'] = 'Забележка към автора';
$string['privacy:metadata:feedbackauthorformat'] = 'Текстов формат на забележката към автора';
$string['privacy:metadata:published'] = 'Дали работите да бъдат публикувани за всички участници след като работилницата бъде затворена';
$string['privacy:metadata:submissioncontent'] = 'Съдържание на работата';
$string['privacy:metadata:submissioncontentformat'] = 'Текстов формат на съдържанието на работата';
$string['privacy:metadata:submissiongrade'] = 'Агрегирана оценка за работата, във вид на число в интервал 0..100';
$string['privacy:metadata:submissiongradeover'] = 'Ръчно коригирана стойност на агрегираната оценка';
$string['privacy:metadata:submissionid'] = 'Идентификационен номер на работата';
$string['privacy:metadata:submissiontitle'] = 'Заглавие на работата';
$string['publishedsubmissions'] = 'Публикувани работи';
$string['publishsubmission'] = 'Публикуване на работа';
$string['publishsubmission_help'] = 'Публикуваните работи са достъпни за другите и когато работилницата е затворена.';
$string['receivedgrades'] = 'Получени оценки';
$string['recentsubmissions'] = 'Предадени работи в работилница:';
$string['resetsubmissions'] = 'Изтриване на всички работи';
$string['resetsubmissions_help'] = 'Когато работилницата свърши техните оценки ще бъдат изтрити. Това не засяга примерните работи.';
$string['saveandclose'] = 'Запазване и затваряне';
$string['saveandcontinue'] = 'Запазване и продължаване на редактирането';
$string['saveandpreview'] = 'Запазване и преглед';
$string['saveandshownext'] = 'Запазване и показване на следващата';
$string['search:activity'] = 'Работилница - информация за дейността';
$string['showingperpage'] = 'Показване на {$a} обекта на страница';
$string['someuserswosubmission'] = 'Има поне един автор, който още не е предал своята работа';
$string['strategy'] = 'Стратегия за оценяване';
$string['strategy_help'] = 'Стратегията за оценяване определя какъв формуляр и метод за оценяване се използва. Има 4 възможности:

* Съвкупно оценяване - Пишат се коментари и оценки по посочени аспекти
* Коментари - Пишат се коментари в посочени аспекти, но без оценки
* Брой грешки - Пишат се коментари и оценки Да/Не за посочени твърдения
* Критерии с нива - Определят се нива на оценки по определени критерии';
$string['submission'] = 'Работа';
$string['submissionattachment'] = 'Прикачен файл';
$string['submissionby'] = 'Работа на {$a}';
$string['submissioncontent'] = 'Съдържание на работата';
$string['submissiondeleteconfirm'] = 'Сигурни ли сте, че искате да изтриете следната работа?';
$string['submissiondeleteconfirmassess'] = 'Сигурни ли сте, че искате да изтриете следната работа? Забележете, че това ще изтрие също и {$a->count} работи, свързани с тази, което може да се отрази на оценките на рецензентите.';
$string['submissionend'] = 'Краен срок за предаване';
$string['submissionendbeforestart'] = 'Срокът за предаване не може да е преди момента на отваряне на работилницата';
$string['submissionenddatetime'] = 'Срок за предаване: {$a->daydatetime} ({$a->distanceday})';
$string['submissionendevent'] = '{$a} срок за предаване на работи';
$string['submissionendswitch'] = 'Преминаване към следващата фаза след крайния срок за предаване';
$string['submissionendswitch_help'] = 'Ако е зададен краен срок и е поставена тази отметка, работилницата автоматично ще премине във фаза оценяване след крайния срок.

Ако поставите тази отметка, е препоръчително да се зададе също scheduled allocation method. Ако не са предадени работи, не може да се правят оценки ако работилницата е във фаза оценяване.';
$string['submissiongrade'] = 'Оценка за заданието';
$string['submissiongrade_help'] = 'Тази настройка определя максималната оценка, която може да бъде получена за предадено задание.';
$string['submissiongradeof'] = 'Оценка за работата (от {$a})';
$string['submissionlastmodified'] = 'Последно модифициране';
$string['submissionrequiredcontent'] = 'Вие трябва да напишете някакъв текст или да качите файл.';
$string['submissionrequiredfile'] = 'Вие трябва да качите файл или да напишете някакъв текст.';
$string['submissionsettings'] = 'Настройки за предаване';
$string['submissionsreport'] = 'Отчет за предадени в работилница работи';
$string['submissionstart'] = 'Приемане на работи от';
$string['submissionstartdatetime'] = 'Приемане на работи от {$a->daydatetime} ({$a->distanceday})';
$string['submissionstartevent'] = '{$a} отваря за предаване';
$string['submissiontitle'] = 'Заглавие';
$string['submissiontypedisabled'] = 'Този тип работа е изключен в тази работилница.';
$string['submissiontypefileavailable'] = 'Прикачване на файл <span class="accesshide">достъпно</span>';
$string['submissiontypefilerequired'] = '<span class="accesshide">Прикачване на файл</span> се изисква';
$string['submissiontypes'] = 'Тип работа';
$string['submissiontypetextavailable'] = 'Въвеждане на текст <span class="accesshide">достъпно</span>';
$string['submissiontypetextrequired'] = '<span class="accesshide">Въвеждане на текст</span> се изисква';
$string['subplugintype_workshopform'] = 'Стратегия за оценяване';
$string['subplugintype_workshopform_plural'] = 'Стратегии за оценяване';
$string['switchphase'] = 'Преминаване към фаза';
$string['switchphase10'] = 'Преминаване към фазата на установяване';
$string['switchphase10info'] = 'Вие ще превключите работилницата във  <strong>Фаза на установяване</strong>. В тази фаза участниците не могат да променят своите работи или оценки. Преподавателите могат да използват тази фаза за да променят настройките на работилницата, стратегията за оценяване или формулярите за оценяване.';
$string['switchphase20'] = 'Преминаване към фаза за предаване';
$string['switchphase20info'] = 'Вие ще превключите работилницата във <strong>Фаза за предаване</strong>. Студентите могат да предават своите работи през тази фаза (в рамките на зададените срокове за достъп, ако са зададени). Преподавателите могат да разпределят работите за рецензиране.';
$string['switchphase30'] = 'Преминаване към фаза оценяване';
$string['switchphase30auto'] = 'Работилницата ще се превключи автоматично във фаза на оценяване след {$a->daydatetime} ({$a->distanceday})';
$string['switchphase30info'] = 'Вие ще превключите работилницата във <strong>Фаза оценяване</strong>. В тази фаза, рецензентите могат да оценят работите, които са им разпределени (в рамките на зададените срокове за достъп, ако са зададени).';
$string['switchphase40'] = 'Преминаване към фаза поставяне на оценки';
$string['switchphase40info'] = 'Вие ще превключите работилницата във <strong>Фаза поставяне на оценки</strong>. В тази фаза участниците на  могат да променят своите работи или оценки. Преподавателите могат да използват инструментите за изчисляване на окончателните оценки и да изпратят забележки на рецензентите.';
$string['switchphase50'] = 'Затваряне на работилницата';
$string['switchphase50info'] = 'Вие ще затворите работилницата. Това ще предизвика нанасяне на окончателните оценки в дневника на оценките. Студентите ще видят своите работи и техните оценки.';
$string['switchphaseauto'] = 'Превключването е насрочено';
$string['switchphasenext'] = 'Преминаване към следваща фаза';
$string['taskconclusion'] = 'Задаване на заключение на дейността';
$string['taskinfo'] = 'Информация за задача';
$string['taskinstructauthors'] = 'Въвеждане на информация за предаване';
$string['taskinstructreviewers'] = 'Въвеждане на информация за оценяване';
$string['taskintro'] = 'Въвеждане на описание на работилницата';
$string['undersetup'] = 'Работилницата е в процес на настройване в момента. Моля, изчакайте докато бъде превключена в следваща фаза.';
$string['useexamples'] = 'Използване на примери';
$string['useexamples_desc'] = 'Предоставят се примери за практикуване в поставянето на оценки';
$string['useexamples_help'] = 'Ако е поставена отметка, потребителят може да опита оценяването на един или повече примери и да сравни своята оценка с оценката на примера. Поставената оценка не се регистрира в системата.';
$string['usepeerassessment'] = 'Използване на взаимно оценяване';
$string['usepeerassessment_help'] = 'Ако е сложена отметка, потребителят може да оценява предадените задания на други съкурсници и да получи оценка за начина по който оценява в допълнение към оценката за работата си.';
$string['userplan'] = 'Планиране на работилница';
$string['userplan_help'] = 'Страницата за планиране на работилница показва всички фази и задачите от всяка фаза. Текущата фаза е оцветена, а завършеността на задачите е показана с отметки.';
$string['userplancurrentphase'] = 'Текуща фаза';
$string['useselfassessment'] = 'Самооценяване';
$string['useselfassessment_desc'] = 'Студентите могат да оценяват и собствената си работа';
$string['useselfassessment_help'] = 'Ако отметката е сложена, потребителят може да оцени собственото си задание и да получи оценка за самооценката си наред с оценката за работата си.';
$string['withoutsubmission'] = 'Рецензент без собствената работа';
$string['workshop:deletesubmissions'] = 'Изтриване на работа';
$string['workshop:exportsubmissions'] = 'Експортиране на работа';
$string['workshop:manageexamples'] = 'Управляване на примерните работи';
$string['workshop:publishsubmissions'] = 'Публикуване на работа';
$string['workshop:switchphase'] = 'Преминаване към фаза';
$string['workshop:viewallsubmissions'] = 'Преглед на всички работи';
$string['workshop:viewpublishedsubmissions'] = 'Преглед на публикуваните работи';
$string['workshopname'] = 'Име на работилницата';
$string['yoursubmission'] = 'Вашата работа';
