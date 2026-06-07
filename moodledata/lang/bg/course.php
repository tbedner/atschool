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
 * Strings for component 'course', language 'bg', version '4.4'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitychooseractivefooter'] = 'Долен колонтитул на инструмента за избор на дейност';
$string['activitychooseractivefooter_desc'] = 'Инструментът за избор на активност може да поддържа разширения, които добавят елементи към долния колонтитул.';
$string['activitychoosercategory'] = 'Избор на дейност';
$string['activitychooserhidefooter'] = 'Без долен колонтитул';
$string['activitychooserrecommendations'] = 'Препоръчителни дейности';
$string['activitychoosersettings'] = 'Настройки за избор на активност';
$string['activitychoosertabmode'] = 'Раздели за избор на активност';
$string['activitychoosertabmode_desc'] = 'Изборът на дейности изброява дейности и ресурси, които учителят да добави към своя курс. За да добавите елементи към раздела Препоръчани, отидете на <a href=\'../course/recommendations.php\'>Препоръчани дейности</a>.';
$string['activitychoosertabmodefive'] = 'Със звезда, Препоръчани, Всички';
$string['activitychoosertabmodefour'] = 'Със звезда, Препоръчано, Всички, Дейности, Ресурси';
$string['activitychoosertabmodeone'] = 'Със звезда, Всички, Дейности, Ресурси, Препоръчано';
$string['activitychoosertabmodesix'] = 'Със звезда, Препоръчано, Дейности, Ресурси';
$string['activitychoosertabmodethree'] = 'Със звезда, Дейности, Ресурси, Препоръчано';
$string['activitychoosertabmodetwo'] = 'Със звезда, всички, препоръчани';
$string['activitydate:closed'] = 'Затворено:';
$string['activitydate:closes'] = 'Затворено:';
$string['activitydate:opened'] = 'Отворено:';
$string['activitydate:opens'] = 'Отворени:';
$string['aria:coursecategory'] = 'Категория на курса';
$string['aria:courseimage'] = 'Изображение на курса';
$string['aria:coursename'] = 'Име на курс';
$string['aria:courseshortname'] = 'Кратко име на курса';
$string['aria:defaulttab'] = 'Дейности по подразбиране';
$string['aria:favourite'] = 'Курсът е означен със звезда';
$string['aria:favouritestab'] = 'Дейности със звезда';
$string['aria:modulefavourite'] = 'Означаване на активност на {$a} със звезда';
$string['aria:recommendedtab'] = 'Препоръчителни дейности';
$string['browsecourseadminindex'] = 'Разгледайте управлението на курса с този списък';
$string['browsesettingindex'] = 'Прегледайте настройките с този списък.';
$string['communicationroomlink'] = 'Чат с участниците в курса';
$string['completion_automatic:done'] = 'Извършено:';
$string['completion_automatic:failed'] = 'Неуспеx:';
$string['completion_automatic:todo'] = 'Да се направи:';
$string['completion_manual:aria:done'] = '{$a} е маркирано като завършено. Натиснете за отмяна.';
$string['completion_manual:aria:markdone'] = 'Маркирайте {$a} като завършено';
$string['completion_manual:done'] = 'Завършено';
$string['completion_manual:markdone'] = 'Отбелязване като завършено';
$string['completion_setby:auto:done'] = 'Завършено: {$a->condition} (set by {$a->setby})';
$string['completion_setby:auto:todo'] = 'Да завърша: {$a->condition} (set by {$a->setby})';
$string['completion_setby:manual:done'] = '{$a->activityname} е маркиран от {$a->setby} като завършено. Натиснете за отмяна.';
$string['completion_setby:manual:markdone'] = '{$a->activityname} е отбелязано от {$a->setby} като незавършено. Натиснете, за да го отбележите като завършено.';
$string['completionrequirements'] = 'Изисквания за завършване на {$a}';
$string['courseaccess'] = 'Достъп до курса';
$string['coursealreadyfinished'] = 'Курсът вече е завършен';
$string['coursecommunication_desc'] = 'Услугата за комуникация по подразбиране за нови курсове. Съществуващите курсове няма да имат избран доставчик по подразбиране.';
$string['coursecontentnotification'] = 'Изпращане на съобщение за промяна';
$string['coursecontentnotification_help'] = 'Поставете отметката за да бъдат уведомени участниците в курса за тази нова или променена дейност. Само потребителите, които имат достъп до дейността или ресурса ще получат уведомление.';
$string['coursecontentnotifnew'] = '{$a->coursename} ново съдържание';
$string['coursecontentnotifnewbody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a>е ново в курса <a href="{$a->courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}">Променете предпочитанията си за уведомяване</a></p>';
$string['coursecontentnotifupdate'] = '{$a->coursename} промяна на съдържанието';
$string['coursecontentnotifupdatebody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> е променен в хода на курса <a href="{$a->courselink}">{$a->coursename}</a>.</p><p><a href="{$a->notificationpreferenceslink}">Променете предпочитанията си за уведомяване</a></p>';
$string['coursecount'] = 'Брой курсове';
$string['coursenotyetfinished'] = 'Курсът все още не е приключил';
$string['coursenotyetstarted'] = 'Курсът още не е започнат';
$string['courseparticipants'] = 'Участници в курса';
$string['coursetoolong'] = 'Курсът е твърде дълъг';
$string['customfield_islocked'] = 'Заключено';
$string['customfield_islocked_help'] = 'Ако полето е заключено, само потребители с възможност да променят заключени персонализирани полета (по подразбиране потребители с подразбираща се роля само на мениджър) ще могат да го променят в настройките на курса.';
$string['customfield_notvisible'] = 'Никой';
$string['customfield_visibility'] = 'Видим за';
$string['customfield_visibility_help'] = 'Тази настройка определя кой може да вижда името и стойността на потребителското поле в списъка с курсове или в наличния филтър за потребителско поле на таблото за управление.';
$string['customfield_visibletoall'] = 'Всеки';
$string['customfield_visibletoteachers'] = 'Учители';
$string['customfieldsettings'] = 'Общи настройки за потребителски полета на курса';
$string['daystakingcourse'] = 'Дни на курса';
$string['defaultsettingscategory'] = 'Настройки по подразбиране';
$string['downloadcontent'] = 'Включване на съдържанието на курса в изтеглянето';
$string['downloadcontent_help'] = 'Трябва ли тази дейност или ресурс да бъдат включени в zip файла със съдържанието на курса, достъпно за изтегляне? Файл, папка, страница и етикет могат да бъдат изтеглени цялостно. За всички други дейности и ресурси се изтеглят само името и описанието. Тази опция изисква съдържанието на курса за изтегляне да бъде активирано в настройките на курса.

Настройката няма ефект върху изтеглянето на съдържание от мобилно приложение в офлайн режим.';
$string['downloadcourseconfirmation'] = 'На път сте да изтеглите zip файл със съдържанието на курса (с изключение на елементи, които не могат да бъдат изтеглени, и всякакви файлове, по-големи от {$a}).';
$string['downloadcoursecontent'] = 'Изтегляне съдържанието на курса';
$string['downloadcoursecontent_help'] = 'Тази настройка определя дали съдържанието на курса може да се изтегля от потребители с възможност за изтегляне на съдържание на курса (по подразбиране потребители с ролята на ученик или учител).';
$string['enabledownloadcoursecontent'] = 'Позволяване на изтегляне на съдържанието на курса';
$string['errorendbeforestart'] = 'Крайната дата ({$a}) е преди началната дата на курса.';
$string['favourite'] = 'Курс със звезда';
$string['gotosection'] = 'Към раздел {$a}';
$string['gradetopassnotset'] = 'Този курс няма набор от оценки за преминаване. Може да се зададе в елемента за оценка на курса (настройка на дневника с оценки).';
$string['hideendedcoursestask'] = 'Скриване на крайната дата на курсовете';
$string['informationformodule'] = 'Информация за дейността на {$a}';
$string['module'] = 'Дейност';
$string['namewithlink'] = 'Име на категория с връзка';
$string['noaccesssincestartinfomessage'] = 'Здравейте {$a->userfirstname},
<p>Студенти от {$a->coursename} никога не са влизали в курса.</p>';
$string['nocourseactivity'] = 'Няма достатъчно активност в курса между началото и края на курса';
$string['nocourseendtime'] = 'Курсът няма краен час';
$string['nocoursesections'] = 'Няма раздели на курса';
$string['nocoursestudents'] = 'Няма студенти';
$string['norecentaccessesinfomessage'] = 'Здравейте {$a->userfirstname},
<p>Студенти от {$a->coursename} не са посещавали курса напоследък.</p>';
$string['noteachinginfomessage'] = 'Здравейте {$a->userfirstname},
<p>Курсовете с начални дати през следващата седмица са курсове, в които няма записани преподаватели или студенти.</p>';
$string['participants:perpage'] = 'Брой участници на страница';
$string['participants:perpage_help'] = 'Броят потребители, на страница в страницата на участниците във всеки курс.';
$string['participantsnavigation'] = 'Участници трето ниво навигация.';
$string['pdfexportfont'] = 'PDF шрифт';
$string['pdfexportfont_help'] = 'Шрифтът, който ще се използва за генерирани PDF файлове, като изпращане на задачи.';
$string['privacy:completionpath'] = 'Завършване на курса';
$string['privacy:favouritespath'] = 'Информация за курса със звезда';
$string['privacy:metadata:activityfavouritessummary'] = 'Системата на курсовете съдържа информация за това кои елементи от инструмента за избор на дейности са отбелязани със звезда от потребителя.';
$string['privacy:metadata:completionsummary'] = 'Курсът съдържа информация за завършване на потребителя.';
$string['privacy:metadata:favouritessummary'] = 'Курсът съдържа информация, свързана с курса, маркиран със звезда от потребителя.';
$string['privacy:perpage'] = 'Броят на курсовете, показвани на страница.';
$string['recommend'] = 'Препоръчан';
$string['recommendcheckbox'] = 'Препоръчайте дейност: {$a}';
$string['relativedatessubmissionduedateafter'] = '{$a->datediffstr} след началото на курса';
$string['relativedatessubmissionduedatebefore'] = '{$a->datediffstr} преди началото на курса';
$string['searchactivitiesbyname'] = 'Търсене на дейности по име';
$string['searchresults'] = 'Резултати от търсенето: {$a}';
$string['sectionlink'] = 'Постоянна връзка';
$string['showstartedcoursestask'] = 'Показване на началната дата  на курсовете';
$string['studentsatriskincourse'] = 'Обучаеми в риск в курс {$a}';
$string['studentsatriskinfomessage'] = 'Здравейте {$a->userfirstname},
<p>Обучаемите в курс {$a->coursename} са идентифицирани като изложени на риск.</p>';
$string['submitsearch'] = 'Изпратете търсенето';
$string['target:coursecompetencies'] = 'Обучаеми в риск да не постигнат компетенциите, заложени в някой курс';
$string['target:coursecompetencies_help'] = 'Тази цел описва дали обучаваният е в риск да не постигне компетенциите, заложени в курс. Целта предполага, че всички компетенции, заложени в курс трябва да бъдат постигнати в края на курса.';
$string['target:coursecompletion'] = 'Обучаеми в риск да не покрият условията за завършване на курс';
$string['target:coursecompletion_help'] = 'Тази цел описва дали обучаваният е изложен на риск да не изпълни условията за завършване на курса.';
$string['target:coursedropout'] = 'Обучаеми в риск от отпадане';
$string['target:coursedropout_help'] = 'Тази цел описва дали обучаваният се разглежда в риск от отпадане.';
$string['target:coursegradetopass'] = 'Обучаеми в риск да не постигнат минималната оценка за преминаване на курса';
$string['target:coursegradetopass_help'] = 'Тази цел описва дали обучаваният е изложен на риск да не постигне минималната оценка за преминаване на курса.';
$string['target:noaccesssincecoursestart'] = 'Обучаеми, които все още не са посещавали курса';
$string['target:noaccesssincecoursestart_help'] = 'Тази цел описва студенти, които никога не са отваряли страници на курс, в който са записани.';
$string['target:noaccesssincecoursestartinfo'] = 'Следните обучаеми са записани в курс, който е започнал, но никога не са влизали в курса.';
$string['target:norecentaccesses'] = 'Обучаеми, които скоро не са посещавали курса';
$string['target:norecentaccesses_help'] = 'Тази цел идентифицира обучаеми, които не са отваряли курс, в който са записани в рамките на зададения интервал за анализ (по подразбиране миналия месец).';
$string['target:norecentaccessesinfo'] = 'Следните обучаеми не са посещавали курс, в който са записани, в рамките на зададения интервал за анализ (по подразбиране през последния месец)';
$string['target:noteachingactivity'] = 'Курсове с риск да не могат да започнат';
$string['target:noteachingactivity_help'] = 'Тази цел описва дали курсовете, които трябва да започнат през следващата седмица, ще имат преподавателска активност.';
$string['target:noteachingactivityinfo'] = 'Следващите курсове, които трябва да започнат в следващите дни, са изложени на риск да не започнат, тъй като нямат записани преподаватели или обучаеми.';
$string['targetlabelstudentcompetenciesno'] = 'Обучаем, който има вероятност да постигне компетенциите, определени за даден курс';
$string['targetlabelstudentcompetenciesyes'] = 'Обучаем в риск да не постигне компетенциите, определени за даден курс';
$string['targetlabelstudentcompletionno'] = 'Обучаем, който има вероятност да изпълни условията за завършване на курса';
$string['targetlabelstudentcompletionyes'] = 'Обучаем в риск да не изпълни условията за завършване на курса';
$string['targetlabelstudentdropoutno'] = 'Не е в риск';
$string['targetlabelstudentdropoutyes'] = 'Обучаем в риск от отпадане';
$string['targetlabelstudentgradetopassno'] = 'Обучаем, който има вероятност да достигне минималната оценка, за да премине курса.';
$string['targetlabelstudentgradetopassyes'] = 'Обучаем в риск да не достигне минималната оценка, за да премине курса.';
$string['targetlabelteachingno'] = 'Има риск курсовете да не започнат';
$string['targetlabelteachingyes'] = 'Потребители с преподавателски способности, които имат достъп до курса';
$string['totalactivities'] = 'Дейности: {$a}';
