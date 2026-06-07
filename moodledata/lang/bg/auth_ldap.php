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
 * Strings for component 'auth_ldap', language 'bg', version '4.4'.
 *
 * @package     auth_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_bind_dn'] = 'Ако искате да използвате bind-user, за да търсите потребители, укажете го тук. Нещо от рода на \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Парола за bind-user.';
$string['auth_ldap_bind_pw_key'] = 'Парола';
$string['auth_ldap_bind_settings'] = 'Bind settings';
$string['auth_ldap_contexts'] = 'Списък на местата (contexts), където се намират потребителските списъци. Разделителят е \';\'. Пример: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Ако разрешите създаването на потребители чрез потвърждаване по имейл, определете контекста, в който може да става това. От съображения за сигурност този контекст трябва да е различен от контекста на останалите потребители. Не е необходимо да добавите този контекст в променливата ldap_context. Moodle ще търси потребители в този контекст автоматично.<br /><b>Забележка!</b> Трябва да промените метода user_create() във файл auth/ldap/auth.php за да направите създаването на потребители да работи.';
$string['auth_ldap_expiration_desc'] = 'Select No to disable expired password checking or LDAP to read passwordexpiration time directly from LDAP';
$string['auth_ldap_expiration_warning_desc'] = 'Number of days before password expiration warning is issued.';
$string['auth_ldap_expireattr_desc'] = 'По желание: Предефинира атрибута на LDAP, който съхранява времето за изтичане на паролата.';
$string['auth_ldap_graceattr_desc'] = 'По желание: Предефинира атрибута gracе login';
$string['auth_ldap_gracelogins_desc'] = 'Enable LDAP gracelogin support. After password has expired user can login until gracelogin count is 0. Enabling this setting displays grace login message if password is exprired.';
$string['auth_ldap_host_url'] = 'Укажете URL адреса на LDAP сървъра. Например: \'ldap://ldap.myorg.com/\' или \'ldaps://ldap.myorg.com/\'';
$string['auth_ldap_login_settings'] = 'Login settings';
$string['auth_ldap_memberattribute'] = 'По желание: Предефинира атрибута user member, когато потребителите принадлежат на група. Обикновено \'member\'';
$string['auth_ldap_objectclass'] = 'Optional: Overrides objectClass used to name/search users on ldap_user_type. Usually you dont need to chage this.';
$string['auth_ldap_opt_deref'] = 'Determines how aliases are handled during search. Select one of the following values: "No" (LDAP_DEREF_NEVER) or "Yes" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_passtype_key'] = 'Формат за парола';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP password expiration settings.';
$string['auth_ldap_search_sub'] = 'Put value <> 0 if  you like to search users from subcontexts.';
$string['auth_ldap_server_settings'] = 'LDAP server settings';
$string['auth_ldap_suspended_attribute_key'] = 'Атрибут блокиран';
$string['auth_ldap_update_userinfo'] = 'Update user information (firstname, lastname, address..) from LDAP to Moodle.  Specify "Data mapping" settings as you need.';
$string['auth_ldap_user_attribute'] = 'Optional: Overrides the attribute used to name/search users. Usually \'cn\'.';
$string['auth_ldap_user_settings'] = 'User lookup settings';
$string['auth_ldap_user_type'] = 'Select how users are stored in LDAP. This setting also specifies how login expiration, grace logins and user creation will work.';
$string['auth_ldap_version'] = 'Версията на протокола LDAP, използвана от сървъра.';
$string['auth_ldap_version_key'] = 'Версия';
$string['auth_ldapdescription'] = 'Този метод осигурява идентификация на базата на външен LDAP сървър. Ако указаното име и парола се потвърдят от LDAP сървъра, Moodle създава нов потребител в своята база данни. Този модул може да изчете определени атрибути от LDAP сървъра и автоматично да попълни съответните полета от базата данни на Moodle. Процедурата за идентификация от LDAP се изпълнява само веднъж, като след това се използва базата данни на Moodle.';
$string['auth_ldapextrafields'] = 'Тези полета не са задължителни. Можете да укажете прехвърлянето на информация за някои от полетата в базата данни на Moodle от <B>LDAP източника</B>. Ако не укажете нищо, ще бъдат използвани подразбиращите се стойности на Moodle.<P>И в двата случая, потребителите имат възможност да редактират полетата, след като влезнат в системата.';
$string['auth_ntlmsso_enabled_key'] = 'Разрешаване';
$string['noemail'] = 'Неуспех при изпращането на e-mail до Вас!';
$string['pluginname'] = 'Използване на LDAP сървър';
$string['privacy:metadata'] = 'Добавката LDAP server authentication не съхранява лични данни.';
