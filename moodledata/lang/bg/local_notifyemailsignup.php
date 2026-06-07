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
 * Strings for component 'local_notifyemailsignup', language 'bg', version '4.4'.
 *
 * @package     local_notifyemailsignup
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['monitoredauths'] = 'Добавки за удостоверяване, които да се наблюдават';
$string['monitoredauths_desc'] = 'Изберете добавките за удостоверяване, които искате да бъдат наблюдавани за създаване на нови профили. В списъка се показват само инсталирани добавки, конфигурирани да приемат създаване на профили. Показват се дори и ако не са активирани.';
$string['notifyemailsignupbody'] = 'Здравейте {$a->supportname},

Заявен е нов потребителски профил в "{$a->sitename}"
със следните данни:

- имейл адрес: {$a->signup_user_email}
- потребителско име: {$a->signup_user_username}
- лично име: {$a->signup_user_firstname}
- фамилно име: {$a->signup_user_lastname}

Привет от администратора на "\'{$a->sitename}"
{$a->signoff}';
$string['notifyemailsignupsubject'] = '{$a}: Съобщение за създаване на нов профил';
$string['pluginname'] = 'Уведомяване администраторите на сайта за създаване на нови профили';
$string['privacy:metadata:externalpurpose'] = 'Тази информация са изпраща на външен SMTP сървър за да бъде доставена на получателя като имейл съобщение.';
$string['privacy:metadata:fullmessage'] = 'Съобщението, съдържащо детайлите на новия самосъздаден профил (може да съдържа данни от потребителски полета).';
$string['privacy:metadata:fullmessagehtml'] = 'Съобщението, съдържащо детайлите на новия самосъздаден профил (може да съдържа данни от потребителски полета).';
$string['privacy:metadata:recipient'] = 'Конфигурираният поддържащ сайта потребител.';
$string['privacy:metadata:replyto'] = 'Имейл адресът на поддържащия сайта потребител.';
$string['privacy:metadata:replytoname'] = 'Името на поддържащия сайта потребител.';
$string['privacy:metadata:userfrom'] = 'Конфигурираният поддържащ сайта потребител.';
