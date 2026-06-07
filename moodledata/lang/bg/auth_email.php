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
 * Strings for component 'auth_email', language 'bg', version '4.4'.
 *
 * @package     auth_email
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emaildescription'] = '<p>Саморегистрирането по имейл позволява даден потребител да създаде собствен профил чрез щракване върху бутона "Създаване на нова регистрация" в страницата за влизане. След това потребителят получава имейл, съдържащ сигурна хипервръзка към страница, с която той потвърждава регистрацията си. При следващите му влизания само се проверява съвпадането на потребителското име и паролата със записаните в базата данни на Moodle стойности.</p><p>Бележка: В добавка към разрешаването на съответната добавка, саморегистрация по имейл трябва да се избере и от падащото меню "Саморегистриране" на страница от блок "настройки": "Администриране на сайта" - "Добавки (Plugins)" - "Удостоверяване" - "Управляване на удостоверяването"</p>';
$string['auth_emailnoemail'] = 'Неуспех при изпращането на имейл до Вас!';
$string['auth_emailrecaptcha'] = 'Добавя видим или звуков елемент за потвърждаване, че формата за саморегистриране се попълва от човек, а не автоматично от компютър. Предпазва сайта от спам. Вижте http://www.google.com/recaptcha/learnmore за повече подробности.</br>
<em>Изисква PHP разширението cURL</em>';
$string['auth_emailrecaptcha_key'] = 'Включване на reCAPTCHA елемент';
$string['auth_emailsettings'] = 'Настройки';
$string['pluginname'] = 'Саморегистриране по имейл';
$string['privacy:metadata'] = 'Добавката Email-based self-registration authentication не съхранява лични данни.';
