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
 * Strings for component 'auth_db', language 'bg', version '4.4'.
 *
 * @package     auth_db
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcantconnect'] = 'Не може да се установи връзка с определената база данни за удостоверяване...';
$string['auth_dbchangepasswordurl_key'] = 'URL за смяна на паролата';
$string['auth_dbdebugauthdbhelp'] = 'Debug ADOdb връзка към външна база данни - използва се в случай на празна страница при влизане. Не е подходящо за действащи сайтове.';
$string['auth_dbdeleteuser'] = 'Изтрит потребител {$a->name} номер {$a->id}';
$string['auth_dbdeleteusererror'] = 'Грешка при изтриване на потребител {$a}';
$string['auth_dbdescription'] = 'При този метод се използва външна база данни за проверка на потребителските имена и пароли. Ако потребителската регистрация е нова, информацията от другите полета също може да бъде копирана в Moodle.';
$string['auth_dbextencoding'] = 'Кодова таблица на външната БД';
$string['auth_dbextencodinghelp'] = 'Кодова таблица, която се използва във външната база данни';
$string['auth_dbextrafields'] = 'Тези полета не са задължителни. Чрез тях можете да зададете някои от полетата на профила на потребителя да се попълнят с информация от  <b>външната база данни</b>, която сте посочили по-горе. <p>Ако не попълните нищо, ще бъдат използвани стойности по подразбиране.</p><p>И в двата случая, потребителите биха могли да редактират тези полета, след като влязат в системата, освен ако не ги заключите.</p>';
$string['auth_dbfieldpass'] = 'Име на полето, съдържащо паролите';
$string['auth_dbfieldpass_key'] = 'Поле за парола';
$string['auth_dbfielduser'] = 'Име на полето, съдържащо потребителските имена';
$string['auth_dbfielduser_key'] = 'Поле за потребителско име';
$string['auth_dbhost'] = 'Име на компютъра със сървъра за база данни. Използвайте системно DSN, ако използвате ODBC.';
$string['auth_dbinsertuser'] = 'Добавен потребител {$a->name} номер {$a->id}';
$string['auth_dbname'] = 'Име на самата база данни. Оставете празно, ако използвате ODBC DSN.';
$string['auth_dbname_key'] = 'Име на БД';
$string['auth_dbpass'] = 'Парола, съответстваща на горното име';
$string['auth_dbpass_key'] = 'Парола';
$string['auth_dbpasstype'] = '<p>Определете форматът на полето, съдържащо паролата.</p><p>Използвате "Вътрешно" ако искате външната база данни да управлява потребителските имена и имейл адреси, но Moodle да управлява паролите. Ако изберете "Вътрешно", трябва да осигурите поле за имейл адрес във външната БД и трябва да изпълнявате периодичната  задача \\auth_db\\task\\sync_users scheduled. Moodle  ще изпраща имейл съобщения на новите потребители с временни пароли.</p>';
$string['auth_dbpasstype_key'] = 'Формат за парола';
$string['auth_dbreviveduser'] = 'Възобновяване на потребител {$a->name} номер {$a->id}';
$string['auth_dbsetupsql'] = 'SQL заявка за настройване на сървъра';
$string['auth_dbsetupsqlhelp'] = 'SQL заявка, която служи за специално задаване на кодовата таблица за комуникация със сървъра - например за MySQL и PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Блокиран потребител {$a->name} номер {$a->id}';
$string['auth_dbtable'] = 'Име на таблицата в базата данни';
$string['auth_dbtable_key'] = 'Таблица';
$string['auth_dbtype'] = 'Тип на базата данни. (За повече информация, вижте <a href="http://phplens.com/adodb/supported.databases.html" target="_blank">документацията на ADOdb</a>.)';
$string['auth_dbtype_key'] = 'База данни';
$string['auth_dbupdatinguser'] = 'Актуализиране на потребител {$a->name} номер {$a->id}';
$string['auth_dbuser'] = 'Потребителско име за достъп за четене до базата данни';
$string['auth_dbuser_key'] = 'Потребите за БД';
$string['auth_dbuserstoadd'] = 'Записи на потребители за добавяне: {$a}';
$string['auth_dbuserstoremove'] = 'Записи на потребители за изтриване: {$a}';
$string['pluginname'] = 'Използване на външна база данни';
$string['privacy:metadata'] = 'Добавката External database authentication не съхранява лични данни.';
