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
 * Strings for component 'debug', language 'bg', version '4.4'.
 *
 * @package     debug
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authpluginnotfound'] = 'Добавката за удостоверяване {$a} не е намерена.';
$string['blocknotexist'] = 'Блок {$a} не съществува';
$string['cannotbenull'] = '{$a} не може да е null!';
$string['cannotdowngrade'] = 'Не може да върнете назад {$a->plugin} от {$a->oldversion} до {$a->newversion}.';
$string['cannotfindadmin'] = 'Не е намерен потребител администратор!';
$string['cannotinitpage'] = 'Не може напълно да се инициализира страница: невалидно име {$a->name} идентификатор {$a->id}';
$string['cannotsetuptable'] = '{$a} таблици НЕ можаха да се  установят успешно!';
$string['codingerror'] = 'Програмна грешка, трябва да се отстрани от програмист: {$a}';
$string['configmoodle'] = 'Moodle още не е конфигуриран. Трябва първо да редактирате файл config.php.';
$string['debuginfo'] = 'Информация за дебъгване';
$string['erroroccur'] = 'По време на процеса възникна грешка';
$string['invalidarraysize'] = 'Неправилна дължина на масиви в параметрите на {$a}';
$string['invalideventdata'] = 'Подадени са невалидни данни на: {$a}';
$string['invalidparameter'] = 'Открита е невалидна стойност на параметър';
$string['invalidresponse'] = 'Открита е невалидна стойност на отговора';
$string['line'] = 'Линия';
$string['missingconfigversion'] = 'Конфигурационната таблица не съдържа версията. Не можете да продължите.';
$string['modulenotexist'] = 'Модулът {$a} не съществува';
$string['morethanonerecordinfetch'] = 'Намерен е повече от един запис във fetch()!';
$string['mustbeoveride'] = 'Абстрактният метод {$a} трябва да бъде заменен.';
$string['noadminrole'] = 'Не може да бъде намерена администраторската роля';
$string['noblocks'] = 'Няма инсталирани блокове!';
$string['nocate'] = 'Без категории!';
$string['nomodules'] = 'Няма намерени модули!!';
$string['nopageclass'] = 'Импортирани {$a}, но не са открити класовете на страниците';
$string['noreports'] = 'Няма достъпни отчети';
$string['notables'] = 'Без таблици!';
$string['outputbuffer'] = 'Изходен буфер';
$string['phpvaroff'] = 'Променливата на PHP сървъра \'{$a->name}\' не е изключена - {$a->link}';
$string['phpvaron'] = 'Променливата на PHP сървъра \'{$a->name}\' не е включена - {$a->link}';
$string['reactive_highlightoff'] = 'Изпъкване на ИЗКЛ.';
$string['reactive_highlighton'] = 'Изпъкване на ВКЛ.';
$string['reactive_instances'] = 'Реактивни екземпляри:';
$string['reactive_noinstances'] = 'На тази страница няма реактивни екземпляри.';
$string['reactive_pin'] = 'Закачане';
$string['reactive_readmodeoff'] = 'Режимът на четене е ИЗКЛЮЧЕН';
$string['reactive_readmodeon'] = 'Режимът на четене е ВКЛЮЧЕН';
$string['reactive_resetpanel'] = 'Панел за нулиране';
$string['reactive_saveingwarning'] = 'Внимание: Редактирането на състоянието може да доведе до неочаквани резултати.';
$string['reactive_statedata'] = 'Данни за състоянието';
$string['reactive_unpin'] = 'Освобождаване';
$string['sessionmissing'] = 'Обект {$a} липсва в сесията';
$string['sqlrelyonobsoletetable'] = 'SQL разчита на остаряла(ели) таблица(и): {$a}! Програмният код дрябва да бъде поправен от програмист.';
$string['stacktrace'] = 'Трасиране на стека';
$string['withoutversion'] = 'Главният файл version.php липсва, не е достъпен за четене или е повреден.';
$string['xmlizeunavailable'] = 'Функция xmlize не е достъпна';
