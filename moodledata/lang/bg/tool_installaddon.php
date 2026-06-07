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
 * Strings for component 'tool_installaddon', language 'bg', version '4.4'.
 *
 * @package     tool_installaddon
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'Потвърждение';
$string['acknowledgementtext'] = 'Аз разбирам, че е моя отговорност да направя пълен архив на този сайт преди да инсталирам добавки. Приемам и разбирам, че добавките (особено, но не само, тези с неофициален произход) могат да имат дупки в сигурността, могат да направят сайта недостъпен, или да предизвикат изтичане или загуба на лична информация.';
$string['featuredisabled'] = 'Инсталаторът на добавки е забранен на този сайт.';
$string['installaddon'] = 'Инсталиране на добавка!';
$string['installaddons'] = 'Инсталиране на добавки';
$string['installfromrepo'] = 'Инсталиране на добавки от сайта на Moodle';
$string['installfromrepo_help'] = 'Ще бъдете препратени в раздела за добавки на сайта на Moodle, за да потърсите и инсталирате добавка от там. Ще бъдат изпратени URL-а и версията на Вашия Moodle, за да бъде процеса на инсталиране по-лесен.';
$string['installfromzip'] = 'Инсталиране на добавка от ZIP файл';
$string['installfromzip_help'] = 'Алтернатива на инсталирането от раздела за добавки на сайта на Moodle е да качите ZIP пакет на добавката. ZIP архивът трябва да има същата структура както пакетите изтеглени от раздела за добавки на сайта на Moodle.';
$string['installfromzipfile'] = 'ZIP пакет';
$string['installfromzipfile_help'] = 'ZIP архивът с добавката, трябва да съдържа само една директория с име съответстващо на добавката. ZIP файлът ще бъде разархивиран на нужното място според типа на добавката. Ако пакетът е изтеглен от раздела за добавки на Moodle, то той ще има тази структура.';
$string['installfromziprootdir'] = 'Преименуване на кореновата директория';
$string['installfromziprootdir_help'] = 'Някои ZIP пакети, като тези генерирани от Github, може да съдържат неправилно име на кореновата директория. Ако е така, тук трябва да бъде зададено правилното име.';
$string['installfromzipsubmit'] = 'Инсталиране на добавка от ZIP файл';
$string['installfromziptype'] = 'Тип на добавката';
$string['installfromziptype_help'] = 'Изберете правилния тип на добавката, която ще инсталирате. <strong>Внимание:</strong> инсталирането може да пропадне ако се зададе неправилен тип.';
$string['installfromziptype_link'] = 'Development:Plugins';
$string['permcheck'] = 'Проверете дали сървърът има право да прави запис в директорията, в която ще се инсталира добавката.';
$string['permcheckerror'] = 'Грешка по време на проверката дали е разрешен запис';
$string['permcheckprogress'] = 'Проверка на правото за запис...';
$string['permcheckresultno'] = 'В директорията за добавки от тип <em>{$a->path}</em> не е позволен запис.';
$string['permcheckresultyes'] = 'В директорията за добавки от тип <em>{$a->path}</em> е позволен запис.';
$string['pluginname'] = 'Инсталатор на добавки';
$string['remoterequestalreadyinstalled'] = 'Има заявка за инсталиране на този сайт на добавка {$a->name} ({$a->component}) версия {$a->version}, пристигнала от раздела за добавки на сайта на Moodle. Обаче <strong>тази добавка е вече инсталирана</strong>.';
$string['remoterequestconfirm'] = 'Има заявка за инсталиране на този сайт на добавка {$a->name} ({$a->component}) версия {$a->version}, пристигнала от раздела за добавки на сайта на Moodle. Ако продължите, ZIP пакетът с добавката ще бъде изтеглен за да бъде проверен. Все още нищо няма да се инсталира.';
$string['remoterequestinvalid'] = 'Има заявка за инсталиране на този сайт на добавка, пристигнала от раздела за добавки на сайта на Moodle. За съжаление заявката не е валидна и добавката не може да бъде инсталирана.';
$string['remoterequestpermcheck'] = 'Има заявка за инсталиране на този сайт на добавка {$a->name} ({$a->component}) версия {$a->version}, пристигнала от раздела за добавки на сайта на Moodle. Обаче <strong>директорията за добавки от тип {$a->typepath} не е разрешена за запис</strong>. Трябва да дадете право на сървъра да прави запис в директорията за добавки от този тип и после да натиснете бутона "Продължаване", за да се повтори проверката.';
$string['remoterequestpluginfoexception'] = 'Оооп... Възникна грешка при опита за получаване на информация за добавката {$a->name} ({$a->component}) версия {$a->version}. Добавката не може да бъде инсталирана. Включете режим на дебъгване, за да видите повече информация за грешката.';
