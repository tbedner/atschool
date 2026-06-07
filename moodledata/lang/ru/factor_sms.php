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
 * Strings for component 'factor_sms', language 'ru', version '4.4'.
 *
 * @package     factor_sms
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = 'Управлять номером мобильного телефона';
$string['action:revoke'] = 'Удалять номер мобильного телефона';
$string['addnumber'] = 'Мобильный телефон';
$string['clientnotfound'] = 'Клиент службы AWS не найден. Клиент должен иметь полное действительное имя класса, например \\Aws\\S3\\S3Client.';
$string['editphonenumber'] = 'Редактировать номер телефона';
$string['editphonenumberinfo'] = 'Если вы не получили код или ввели неверный код, введите код и попробуйте еще раз';
$string['error:emptyverification'] = 'Пустой код. Попробуйте снова';
$string['error:wrongphonenumber'] = 'Указанный номер телефона имеет неверный формат';
$string['error:wrongverification'] = 'Неверный код. Попробуйте снова';
$string['errorawsconection'] = 'Ошибка подключения к AWS серверу: {$a}';
$string['errorsmssent'] = 'Ошибка отправки СМС-сообщения, содержащего ваш проверочный код';
$string['event:smssent'] = 'СМС-сообщение отправлено';
$string['event:smssentdescription'] = 'Пользователю с ID {$a->userid} было отправлено сообщение с проверочным кодом. Информация: {$a->debuginfo}';
$string['info'] = 'Получите проверочный код, отправленный на указанный вами номер мобильного телефона.';
$string['logindesc'] = 'Сообщение, содержащее 6-значный код, отправлено на номер {$a}';
$string['loginoption'] = 'Получите код, отправленный на ваш мобильный телефон.';
$string['loginskip'] = 'Я не получил код';
$string['loginsubmit'] = 'Продолжить';
$string['logintitle'] = 'Введите проверочный код, отправленный на ваш номер';
$string['managefactor'] = 'Управление СМС';
$string['managefactorbutton'] = 'Управление';
$string['manageinfo'] = 'Для аутентификации вы используете «{$a}».';
$string['phonehelp'] = 'Введите номер мобильного телефона (включая код страны) для получения проверочного кода';
$string['pluginname'] = 'СМС-сообщение на мобильный телефон';
$string['privacy:metadata'] = 'Плагин «Фактор СМС на мобильный телефон» не хранит никаких персональных данных.';
$string['revokefactorconfirmation'] = 'Удалить СМС «{$a}»?';
$string['settings:aws'] = 'AWS SNS';
$string['settings:aws:key'] = 'Ключ';
$string['settings:aws:key_help'] = 'Ключ учетных данных  API Amazon.';
$string['settings:aws:region'] = 'Регион';
$string['settings:aws:region_help'] = 'Область шлюза API Amazon.';
$string['settings:aws:secret'] = 'Секрет';
$string['settings:aws:secret_help'] = 'Секрет учетных данных API Amazon.';
$string['settings:aws:usecredchain'] = 'Найдите учетные данные AWS, используя цепочку поставщиков учетных данных по умолчанию';
$string['settings:countrycode'] = 'Код страны';
$string['settings:countrycode_help'] = 'Код вызова (по умолчанию без начального +, если пользователи не вводят международный номер с префиксом +).

См. эту ссылку для списка кодов вызова: {$a}';
$string['settings:duration'] = 'Срок действия';
$string['settings:duration_help'] = 'Период времени, в течение которого код действителен.';
$string['settings:gateway'] = 'SMS-шлюз';
$string['settings:gateway_help'] = 'Провайдер СМС, через которого вы хотите отправлять сообщения.';
$string['setupfactor'] = 'Настройка СМС';
$string['setupfactorbutton'] = 'Настроить';
$string['setupsubmitcode'] = 'Сохранить';
$string['setupsubmitphone'] = 'Отправить код';
$string['smsstring'] = '{$a->fullname}, ваш одноразовый код безопасности — {$a->code}.

@{$a->url} #{$a->code}';
$string['summarycondition'] = 'Использование СМС для одноразового кода безопасности';
