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
 * Strings for component 'amvonetroom', language 'bg', version '4.4'.
 *
 * @package     amvonetroom
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['amvonetroom:moderator'] = 'Модератор';
$string['error'] = '{$a}';
$string['error_backup_fail'] = 'Възникна грешка по време на архивиране на сесията {$a->session}. Моля, свържете се с {$a->support_begin}поддръжката{$a->support_end}.';
$string['error_backup_fail_with_msg'] = 'Възникна грешка по време на архивиране на сесията {$a->session}: {$a->message}';
$string['error_backup_space_limit_reached'] = 'Достигнато е ограничението на пространството за архиви. Свържете се с администратора на Moodle и съобщете за този проблем.';
$string['error_key_not_defined'] = 'Модулът Стая AMVONET не е регистриран.';
$string['error_limit_reached'] = 'Лимитите са достигнати. Свържете се с администратора на Moodle и докладвайте за този проблем.';
$string['error_school_bad_request'] = 'master.amvonet.com съобщи за лоша заявка. Моля, обадете се на техническата поддръжка на AMVONET.';
$string['error_school_forbidden'] = 'master.amvonet.com отхвърли заявката. Обадете се на техническата поддръжка на AMVONET.';
$string['error_school_not_registered'] = 'Училището не е регистрирано в master.amvonet.com';
$string['error_session_restoring'] = 'Не може да се архивира, сесията се възстановява в момента. Моля опитайте по-късно.';
$string['error_storage_space_limit_reached'] = 'Лимитът на дисковото пространство е достигнат. Свържете се с администратора на Moodle и докладвайте за този проблем.';
$string['error_unavailable'] = 'master.amvonet.com е временно недостъпен.';
$string['error_version_incompatible'] = 'master.amvonet.com не поддържа текущата версия на модула Стая AMVONET. Обадете се на техническата поддръжка на AMVONET.';
$string['error_version_too_old'] = 'Модулът Стая AMVONET има твърде стара версия. Актуализирайте модула.';
$string['formatdate'] = 'd.m.Y h:i';
$string['introduction_text'] = 'Уводен текст';
$string['key_caption'] = 'Регистрационен ключ';
$string['key_hint'] = 'Регистрирайте своя модул Стая AMVONET в master.amvonet.com и вземете своя ключ.';
$string['label_domain'] = 'Домейн';
$string['label_status'] = 'Състояние';
$string['label_version'] = 'Версия';
$string['label_version_enterprise'] = 'Корпоративна версия';
$string['label_version_lite'] = 'Олекотената версия';
$string['label_version_pro'] = 'Професионална версия';
$string['label_version_type_com'] = 'Платена';
$string['label_version_type_direct_sale'] = 'Платена';
$string['label_version_type_free'] = 'Безплатна';
$string['label_version_type_testing'] = 'Тестова';
$string['label_version_type_trial'] = 'Пробна';
$string['label_warning'] = 'Предупреждение';
$string['link_account'] = 'Моят профил';
$string['link_buy'] = 'Купуване';
$string['link_register'] = 'Регистриране на добавка';
$string['link_support'] = 'Поддръжка';
$string['message_firewall_not_configured'] = 'За съжаление заявената операция е неуспешна поради неправилна конфигурация. Можете да намерите възможните причини и решения, като посетите {$a->kb_begin}СЛЕДНИЯ адрес{$a->kb_end}. Междувременно, не се колебайте да се свържете с нашата {$a->support_begin}поддръжка{$a->support_end}, ако имате нужда от помощ.';
$string['moderator'] = 'Модератор';
$string['modulename'] = 'Стая AMVONET';
$string['modulename_help'] = 'Стаята AMVONET се използва за създаване на уебинари и създаване на интерактивни презентации.  С помощта на този инструмент можете също да редактирате записите.';
$string['modulenameplural'] = 'Стая AMVONET';
$string['name_live_this_session'] = 'Име на тази стая';
$string['pluginadministration'] = 'Администрация на стая AMVONET';
$string['pluginname'] = 'Стая AMVONET';
$string['status_active'] = 'Активен';
$string['status_active_till'] = 'към';
$string['status_blocked'] = 'Блокиран';
$string['status_blocked_since'] = 'от';
$string['status_no_key'] = 'Не е регистриран';
$string['warn_missed_plugin'] = 'Модулът Стая AMVONET изисква PHP разширение {$a}. Инсталирайте го.';
$string['warn_missed_plugins'] = 'Модулът Стая AMVONET изисква следните PHP разширения: {$a}. Инсталирайте ги.';
$string['warn_no_crossdomain'] = 'Правилата за кръстосани домейни не са настроени правилно. Вижте Ръководството за инсталиране за подробности.';
