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
 * Strings for component 'accredible', language 'bg', version '4.4'.
 *
 * @package     accredible
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accredible:addinstance'] = 'Добавяне на сертификат/значка';
$string['accredible:manage'] = 'Администриране на сертификат/значка';
$string['accredible:student'] = 'Изтегляне на сертификат или значка';
$string['accredible:view'] = 'Преглед на сертификат или значка';
$string['accrediblecustomattributename'] = 'Избиране на атрибут на Accredible дизайн:';
$string['accrediblecustomattributeselectprompt'] = 'Избиране персонализиран атрибут Accredible';
$string['accrediblegroup'] = 'Група Accredible';
$string['achievementid'] = 'Ид. номер на постижение / име на поток (трябва да е уникално)';
$string['activitygroupdescription'] = 'Групите с идентификационни данни трябва да са създадени в <a href="{$a}" target="_blank">Accredible Dashboard</a>, преди да могат да бъдат създадени идентификационните данни. Ако не се появат, проверете своя API ключ, за да се уверите, че интеграцията е настроена правилно.';
$string['activityname'] = 'Име на дейност';
$string['additionalactivitiesone'] = 'Предупреждение: Добавяте повече от една дейност в курс. <br/> И двете дейности могат да се виждат от учениците, така че не забравяйте да им дадете различни имена.';
$string['additionalactivitiesthree'] = 'Това е името, което ще се вижда на сертификата';
$string['additionalactivitiestwo'] = 'Сертификатите / значките ще бъдат изброени на страницата за активност само ако са издадени с този идентификатор на постижението.';
$string['apikeyhelp'] = 'Въведете вашия API ключ от accredible.com';
$string['apikeylabel'] = 'API ключ';
$string['attributemappingcoursecustomfields'] = 'Съпоставяне на атрибути: потребителски полета на курса';
$string['attributemappingcoursefields'] = 'Съпоставяне на атрибути: курсови полета';
$string['attributemappinguserprofilefields'] = 'Съпоставяне на атрибути: полета на потребителския профил';
$string['autoissueheader'] = 'Автоматичен критерий за издаване';
$string['certificatename'] = 'Име на сертификат/значка';
$string['certificateurl'] = 'URL на сертификат/значка';
$string['chooseexam'] = 'Избор на финален тест';
$string['completionissuecheckbox'] = 'Да, издайте след завършване на курса';
$string['completionissueheader'] = 'Критерии за автоматично издаване: по завършване на курса';
$string['coursetotal'] = 'Общо за курса';
$string['dashboardlink'] = 'Връзка към таблото за управление Accredible';
$string['dashboardlinktext'] = 'За да изтриете или оформите идентификационни данни, влезте в <a href="https://dashboard.accredible.com" target="_blank"> таблото за управление </a>';
$string['datecreated'] = 'Дата на създаване';
$string['description'] = 'Описание';
$string['emptygradeattributekeyname'] = 'Крайната оценка на курса ще бъде съпоставена с избрания персонализиран атрибут Accredible. Ако все още не сте създали персонализиран атрибут, можете да го направите на <a href="{$a}" target="_blank">Accredible Platform</a>.';
$string['euhelp'] = 'Изберете дали искате да съхранявате данни в ЕС (Франкфурт) вместо в САЩ';
$string['eulabel'] = 'Сървър на ЕС (Франкфурт)';
$string['eventcertificatecreated'] = 'Идентификационните данни бяха публикувани в Accredible';
$string['gotodashboard'] = 'За да актуализирате вида на вашите значки и сертификати, посетете: <a href="https://dashboard.accredible.com" target="_blank">https://dashboard.accredible.com</a>';
$string['gradeattributegradeitemselect'] = 'Изберете оценка, за да включите:';
$string['gradeattributekeynameselect'] = 'Изберете атрибут за Accredible дизайн:';
$string['gradeissueheader'] = 'Критерии за автоматично издаване: по оценката от финалния тест';
$string['groupselect'] = 'Група';
$string['id'] = 'ид. номер';
$string['includegradeattributecheckbox'] = 'Да, включете оценката в Удостоверението.';
$string['includegradeattributedescription'] = 'Включете оценката на ученика в удостоверението';
$string['indexheader'] = 'Всички сертификати / значки за {$a}';
$string['issued'] = 'Издаден';
$string['manualheader'] = 'Ръчно здаване  на сертификати/значки';
$string['modulename'] = 'Сертификати и значки Accredible';
$string['modulename_help'] = 'Модулът сертификат и значка Accredible Ви позволява да издавате сертификати или значки за курсове на студентите в сайта accredible.com.

Добавете активността навсякъде, където искате вашите курсисти да видят сертификата или значката си.';
$string['modulename_link'] = 'mod/accredible/view';
$string['modulenameplural'] = 'Сертификати/значки Accredible';
$string['moodlecoursecustomfield'] = 'Избиране на персонализирано поле за курс на Moodle, което да включите';
$string['moodlecoursefield'] = 'Избиране на поле за курс на Moodle, което да включите';
$string['moodleuserprofilefield'] = 'Избиране на полето за потребителски профил на Moodle, което да включите';
$string['nocertificates'] = 'Няма сертификати/значки';
$string['nouserswarning'] = 'Трябва да изберете група Accredible, за да видите списъка с потребителите.';
$string['overview'] = 'Преглед';
$string['passinggrade'] = 'Оценка в проценти, необходима за преминаване на курса (%)';
$string['pluginadministration'] = 'Администрирне на сертификати/значки';
$string['pluginname'] = 'Сертификати и значки Accredible';
$string['privacy:metadata:accredible'] = 'За да се интегрира с Accredible, потребителските данни трябва да се обменят с тази услуга.';
$string['privacy:metadata:accredible:email'] = 'Вашият имейл адрес се изпраща до Accredible за издаване на идентификационни данни.';
$string['privacy:metadata:accredible:fullname'] = 'Вашето пълно име се изпраща на Accredible за издаване на идентификационен номер.';
$string['privacy:metadata:accredible:quizgrade'] = 'Оценката ви от теста може да бъде изпратена до Accredible за издаване на удостоверение.';
$string['recipient'] = 'Получател';
$string['templatename'] = 'Име на потока (от таблото за управление)';
$string['unissueddescription'] = 'Тези потребители са изпълнили изискванията за този сертификат, но все още не са получили сертификат. Изберете тези, за които искате да издадете сертификати.';
$string['unissuedheader'] = 'Неиздадени сертификати / значки';
$string['usestemplatesdescription'] = 'Уверете се, че на таблото за управление има поток със същото име като идентификационния номер на вашето постижение.';
$string['viewheader'] = 'Сертификати и значки за {$a}';
$string['viewimgcomplete'] = 'Щракнете, за да видите сертификата или значката си';
$string['viewimgincomplete'] = 'Курсът още не е завършил';
$string['viewsubheader'] = 'Ид. номер на Група: {$a}';
$string['viewsubheaderold'] = 'Ид. номер на постижение: {$a}';
