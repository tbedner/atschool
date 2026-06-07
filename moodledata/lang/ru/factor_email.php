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
 * Strings for component 'factor_email', language 'ru', version '4.4'.
 *
 * @package     factor_email
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['email:accident'] = 'Если вы не отправляли запрос, нажмите «Продолжить», чтобы аннулировать попытку входа в систему. Если вы случайно нажали ссылку, нажмите «Отмена», и никаких действий предпринято не будет.';
$string['email:browseragent'] = 'Сведения о браузере для этого запроса: «{$a}».';
$string['email:geoinfo'] = 'Вероятно, этот запрос поступил от:';
$string['email:greeting'] = 'Здравствуйте, {$a} 👋';
$string['email:ipinfo'] = 'Подробности запроса на вход:';
$string['email:link'] = 'ссылка для проверки';
$string['email:loginlink'] = 'Или, если вы используете одно и то же устройство, используйте {$a}.';
$string['email:message'] = 'Ваш код подтверждения для сайта {$a->sitename} ({$a->siteurl}).';
$string['email:originatingip'] = 'Этот запрос на вход был сделан с «{$a}»';
$string['email:revokelink'] = 'Если это были не вы, то можете {$a}.';
$string['email:revokesuccess'] = 'Этот код был отозван. Все сеансы для этого пользователя завершены.
Электронная почта не будет использоваться в качестве фактора до подтверждения безопасности учетной записи.';
$string['email:stoploginlink'] = 'остановить эту попытку входа в систему';
$string['email:subject'] = 'Ваш код подтверждения';
$string['email:uadescription'] = 'Свойства браузера для этого запроса:';
$string['email:validity'] = 'Код можно использовать только один раз и он действителен для {$a}.';
$string['error:badcode'] = 'Код не найден. Причиной может быть старая ссылка (новый код был отправлен по электронной почте) или попытка входа с этим кодом была успешной.';
$string['error:parameters'] = 'Неправильные параметры страницы.';
$string['error:wrongverification'] = 'Неверный код. Попробуйте еще раз.';
$string['event:unauthemail'] = 'Получено письмо с неразрешенного адреса';
$string['info'] = 'Для аутентификации Вы используете адрес электронной почты {$a}. Это настроил администратор вашего сайта.';
$string['logindesc'] = 'Только что шестизначный код отправлен на ваш адрес электронной почты: {$a}.';
$string['loginoption'] = 'Получить код на электронную почту';
$string['loginskip'] = 'Я не получил код';
$string['loginsubmit'] = 'Продолжить';
$string['logintitle'] = 'Подтвердить свою личность по электронной почте';
$string['managefactor'] = 'Управление электронной почтой';
$string['manageinfo'] = 'Для аутентификации  используется «{$a}». Это настроил ваш администратор.';
$string['pluginname'] = 'Электронная почта';
$string['privacy:metadata'] = 'Плагин Фактор «Электронная почта» не хранит никаких личных данных.';
$string['settings:duration'] = 'Срок действия';
$string['settings:duration_help'] = 'Период времени, в течение которого код действителен.';
$string['settings:suspend'] = 'Блокировать несанкционированные учетные записи';
$string['settings:suspend_help'] = 'Установите этот флажок, чтобы приостановить учетные записи пользователей в случае получения подтверждения с неразрешенных адресов электронной почты.';
$string['setupfactor'] = 'Настройка электронной почты';
$string['summarycondition'] = 'имеет верную настройку электронной почты';
$string['unauthemail'] = 'Неразрешенные адреса электронной почты';
$string['unauthloginattempt'] = 'Пользователь с  ID {$a->userid} предпринял несанкционированную попытку входа в систему, используя подтверждение по электронной почте с
IP {$a->ip} с агентом браузера {$a->useragent}.';
$string['verificationcode'] = 'Введите код подтверждения';
$string['verificationcode_help'] = 'Код подтверждения был отправлен на вашу электронную почту.';
