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
 * Strings for component 'enrol', language 'bg', version '4.4'.
 *
 * @package     enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Налични добавки (plugins) за запис в курс';
$string['addinstance'] = 'Добавяне на метод';
$string['addinstanceanother'] = 'Добавяне на метода и създаване на друг';
$string['ajaxnext25'] = 'Следващите 25...';
$string['ajaxoneuserfound'] = 'намерен е 1 потребител';
$string['ajaxxmoreusersfound'] = 'Намерени са повече от {$a} потребители';
$string['ajaxxusersfound'] = 'намерени са {$a} потребители';
$string['assignnotpermitted'] = 'Нямате права или не можете да присвоявате роли в този курс.';
$string['bulkuseroperation'] = 'Масова операция с потребители';
$string['configenrolplugins'] = 'Моля изберете всички желани добавки (plugins) и ги подредете в подходящ ред.';
$string['custominstancename'] = 'Персонализирано име на инстанцията';
$string['customwelcomemessage'] = 'Уведомление "Добре дошли"';
$string['customwelcomemessage_help'] = 'Уведомлението "Добре дошли" може да се въведе като неформатиран текст или в Moodle авто-формат, включвайки HTML тагове и тагове за многоезичния филтър.

Следните запазени места могат да се включат в уведомлението:

* Името на курса {$a->coursename}
* Хипервръзка към профила на потребителя {$a->profileurl}
* Имейл адрес на потребителя {$a->email}
* Пълното име на потребителя {$a->fullname}';
$string['customwelcomemessageplaceholder'] = 'Уважаеми {$a->fullname}, Вие успешно се записахте в курс {$a->coursename}';
$string['defaultenrol'] = 'Добавяне на инстанция към новите курсове';
$string['defaultenrol_desc'] = 'Възможно е да добавите тази добавка за всички нови курсове по подразбиране.';
$string['deleteinstanceconfirm'] = 'Вие сте на път да изтриете метода за записване в курс "{$a->name}". Всичките {$a->users} потребители, записани по този метод, ще бъдат отписани и всякакви техни данни, отнасящи се за курсовете, такива като: оценки, членство в групи, или абонирания за форуми, ще бъдат изтрити.

Сигурни ли сте, че искате да продължите?';
$string['deleteinstanceconfirmself'] = 'Наистина ли сте сигурни, че искате да изтриете екземплярът "{$a->name}", който Ви дава достъп до този курс? Възможно е да нямате повече достъп до този курс ако продължите.';
$string['deleteinstancenousersconfirm'] = 'Вие сте на път да изтриете метода за записване в курс "{$a->name}". Сигурни ли сте, че искате да продължите?';
$string['disableinstanceconfirmself'] = 'Наистина ли сте сигурни, че искате да блокирате екземплярът "{$a->name}", който Ви дава достъп до този курс? Възможно е да нямате повече достъп до този курс ако продължите.';
$string['durationdays'] = '{$a} дена';
$string['editenrolment'] = 'Редактиране на записването';
$string['edituserenrolment'] = 'Редактиране записването на {$a}';
$string['enrol'] = 'Записване';
$string['enrolcandidates'] = 'Незаписани потребители';
$string['enrolcandidatesmatching'] = 'Съвпадащи не записани потребители';
$string['enrolcohort'] = 'Записване на кохорта';
$string['enrolcohortusers'] = 'Запиши потребители';
$string['enroldetails'] = 'Информация за записването';
$string['enrollednewusers'] = 'Успешно са записани {$a} нови потребителя';
$string['enrolledusers'] = 'Записани участници';
$string['enrolledusersmatching'] = 'Съвпадащи записани потребители';
$string['enrolme'] = 'Запишете ме в този курс';
$string['enrolment'] = 'Записване';
$string['enrolmentinstances'] = 'Методи за записване';
$string['enrolmentmethod'] = 'Метод за записване';
$string['enrolmentnew'] = 'Ново записване в {$a}';
$string['enrolmentnewuser'] = '{$a->user} се записа в курс "{$a->course}"';
$string['enrolmentoptions'] = 'Настройки на записването';
$string['enrolments'] = 'Записване в курсове';
$string['enrolmentupdatedforuser'] = 'Записването за потребител "{$a->fullname}" е актуализирано';
$string['enrolnotpermitted'] = 'Нямате права или не ви е позволено да запишете някого в този курс.';
$string['enrolperiod'] = 'Времетраене на записването';
$string['enroltimecreated'] = 'Записването е създадено';
$string['enroltimeend'] = 'Край на записването';
$string['enroltimeendinvalid'] = 'Датата за край на записването трябва да е след датата за начало на записването';
$string['enroltimestart'] = 'Начало на записването';
$string['enrolusage'] = 'Инстанции / записвания';
$string['enrolusers'] = 'Записване на потребители';
$string['enrolxusers'] = 'Записани {$a} потребители';
$string['errajaxfailedenrol'] = 'Неуспешно записване на потребител';
$string['errajaxsearch'] = 'Грешка при търсене на потребители';
$string['erroreditenrolment'] = 'Възникна грешка при опита за редактиране на записването на потребителя в курс';
$string['errorenrolcohort'] = 'Грешка при създаване на екземпляр от метод за записване в курс чрез синхронизиране с кохорта.';
$string['errorenrolcohortusers'] = 'Грешка при записването на членовете на кохортата в този курс.';
$string['errorthresholdlow'] = 'Прагът за уведомяване трябва да е поне 1 ден.';
$string['errorwithbulkoperation'] = 'Имаше грешка докато се обработваше Вашата промяна с масово записване.';
$string['eventenrolinstancecreated'] = 'Създаден е екземпляр за записване';
$string['eventenrolinstancedeleted'] = 'Изтрит е екземпляр за записване';
$string['eventenrolinstanceupdated'] = 'Обновен е екземпляр за записване';
$string['eventuserenrolmentcreated'] = 'Записани в курса потребители';
$string['eventuserenrolmentdeleted'] = 'Отписани от курса потребители';
$string['eventuserenrolmentupdated'] = 'Регистрацията на потребителя е актуализирана';
$string['expirynotify'] = 'Уведомяване преди записването да изтече';
$string['expirynotify_help'] = 'Тази настройка определя дали се изпраща уведомление за изтичане на записването.';
$string['expirynotifyall'] = 'Записващ и записани потребители';
$string['expirynotifyenroller'] = 'Само записващия';
$string['expirynotifyhour'] = 'Час за изпращане на уведомлението за изтичане на записването';
$string['expirythreshold'] = 'Праг за уведомяване';
$string['expirythreshold_help'] = 'Колко време преди изтичане на срока потребителят трябва да бъде уведомен?';
$string['extremovedaction'] = 'Външно действие за записване';
$string['extremovedaction_help'] = 'Изберете действие, което да се извърши, когато записването изчезне от външния източник. Забележете, че някои данни и настройки се изчистват от курса при отписването от него.';
$string['extremovedkeep'] = 'Задръж потребителя записан';
$string['extremovedsuspend'] = 'Забраняване записването в курс';
$string['extremovedsuspendnoroles'] = 'Забраняване записването в курс и премахване на ролите';
$string['extremovedunenrol'] = 'Отписване на потребител от курс';
$string['finishenrollingusers'] = 'Край на записването на участници';
$string['foundxcohorts'] = 'Намерени {$a} потоци';
$string['instanceadded'] = 'Методът е добавен';
$string['instanceeditselfwarning'] = 'Внимание:';
$string['instanceeditselfwarningtext'] = 'Вие сте записани в този курс чрез този метод за записване. Промяната ще повлияе на достъпа Ви до този курс.';
$string['invalidenrolduration'] = 'Невалидна продължителност на записване';
$string['invalidenrolinstance'] = 'Невалидна инстанция за записване';
$string['invalidrequest'] = 'Невалидна заявка';
$string['invalidrole'] = 'Невалидан роля';
$string['manageenrols'] = 'Управляване на добавките (plugins) за записване';
$string['manageinstance'] = 'Управляване';
$string['method'] = 'Метод';
$string['migratetomanual'] = 'Преминаване към ръчно записване';
$string['nochange'] = 'Без промяна';
$string['noexistingparticipants'] = 'Няма участници';
$string['nogroup'] = 'Няма група';
$string['noguestaccess'] = 'Гости нямат достъп до този курс. Моля, влезете с потребителско име и парола.';
$string['none'] = 'Няма';
$string['notenrollable'] = 'Не можете сами да се запишете в този курс.';
$string['notenrolledusers'] = 'Други потребители';
$string['otheruserdesc'] = 'Изброените потребители не са записани в този курс, но имат наследени или зададени  роли в него.';
$string['participationactive'] = 'Активен';
$string['participationnotcurrent'] = 'Не е коректно';
$string['participationstatus'] = 'Статус';
$string['participationsuspended'] = 'Временно преустановен';
$string['periodend'] = 'до {$a}';
$string['periodnone'] = 'записани {$a}';
$string['periodstart'] = 'от {$a}';
$string['periodstartend'] = 'от {$a->start} до {$a->end}';
$string['plugindisabled'] = 'Приставката за записване {$a} е деактивирана';
$string['privacy:metadata:user_enrolments'] = 'Записвания';
$string['privacy:metadata:user_enrolments:enrolid'] = 'Екземпляр на добавка за записване';
$string['privacy:metadata:user_enrolments:modifierid'] = 'Ид. номер на потребител, който последно е променил записването';
$string['privacy:metadata:user_enrolments:status'] = 'Състояние на записване на потребителя в курс';
$string['privacy:metadata:user_enrolments:tableexplanation'] = 'Добавката за записване в курс съхранява записаните потребители.';
$string['privacy:metadata:user_enrolments:timecreated'] = 'Време, когато е създадено записването на потребителя';
$string['privacy:metadata:user_enrolments:timeend'] = 'Време, когато записването на потребителя свършва';
$string['privacy:metadata:user_enrolments:timemodified'] = 'Време, когато записването на потребителя е променено';
$string['privacy:metadata:user_enrolments:timestart'] = 'Време, от което започва записването на потребителя';
$string['privacy:metadata:user_enrolments:userid'] = 'Ид. номер на потребителя';
$string['recovergrades'] = 'Възстановяване на старите оценки на потребителя, ако е възможно';
$string['rolefromcategory'] = '{$a->role} (наследена от категорията курсове)';
$string['rolefrommetacourse'] = '{$a->role} (Наследена от родителния курс)';
$string['rolefromsystem'] = '{$a->role} (Зададена на ниво сайт)';
$string['rolefromthiscourse'] = '{$a->role} (Зададена в този курс)';
$string['sendcoursewelcomemessage'] = 'Изпращане на приветствено съобщение за курса';
$string['sendcoursewelcomemessage_help'] = 'При записване на потребител или група в курса може да им бъде изпратен имейл с приветствено съобщение. Ако е изпратено от контакта за курса (по подразбиране учителят) и повече от един потребител има тази роля, имейлът се изпраща от първия потребител, на когото е присвоена ролята.';
$string['sendfromcoursecontact'] = 'От лицето за контакт';
$string['sendfromkeyholder'] = 'От отговорника за ключа';
$string['sendfromnoreply'] = 'От адрес "без отговор"';
$string['startdatetoday'] = 'Днес';
$string['synced'] = 'Включена';
$string['testsettings'] = 'Проверка на настройките';
$string['testsettingsheading'] = 'Проверка на настройките за записване - {$a}';
$string['timeended'] = 'Времето приключи';
$string['timeenrolled'] = 'Време за записване';
$string['timereaggregated'] = 'Времето е променено';
$string['timestarted'] = 'Времето започна';
$string['totalenrolledusers'] = '{$a} записани потребители';
$string['totalotherusers'] = '{$a} други потребители';
$string['totalunenrolledusers'] = '{$a} отписани потребители';
$string['unassignnotpermitted'] = 'Нямате право да отнемате роли в този курс';
$string['unenrol'] = 'Отписване';
$string['unenrolconfirm'] = 'Наистина ли желаете да отпишете потребител "{$a->user}" (записал се преди чрез метод  "{$a->enrolinstancename}") от курс "{$a->course}"?';
$string['unenrolleduser'] = 'Потребителят "{$a->fullname}" беше отписан от курса';
$string['unenrolme'] = 'Отпишете ме от този курс';
$string['unenrolnotpermitted'] = 'Нямате разрешение да отпишете този потребител от курса.';
$string['unenrolroleusers'] = 'Отписване на потребители';
$string['uninstallmigrating'] = 'Мигриране на "{$a}" записвания';
$string['unknowajaxaction'] = 'Поискано е неизвестно действие';
$string['unlimitedduration'] = 'Неограничено';
$string['userremovedfromselectiona'] = 'Потребителят "{$a}" беше премахнат от избраните.';
$string['usersearch'] = 'Търсене';
$string['withselectedusers'] = 'С избраните потребители';
$string['youenrolledincourse'] = 'Вие бяхте записани в курса.';
$string['youunenrolledfromcourse'] = 'Вие бяхте отписани от курса "{$a}".';
