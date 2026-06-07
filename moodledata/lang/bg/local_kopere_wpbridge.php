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
 * Strings for component 'local_kopere_wpbridge', language 'bg', version '4.4'.
 *
 * @package     local_kopere_wpbridge
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Действия';
$string['adminnotification_body'] = 'Беше открита грешка в моста WooCommerce.

{$a}';
$string['adminnotification_subject'] = 'Проблем с WP Bridge';
$string['back'] = 'Назад';
$string['dashboard_laststatus'] = 'Статус на връзката';
$string['dashboard_mappingcount'] = 'Съответствия';
$string['dashboard_openui'] = 'Отворени съответствия';
$string['dashboard_pendingcount'] = 'Изчакващи елементи';
$string['dashboard_processedcount'] = 'Обработени елементи';
$string['dashboard_settings'] = 'Настройки';
$string['dashboard_subtitle'] = 'Синхронизиране на завършените продажби с курсове и потребителски групи в Moodle.';
$string['dashboard_title'] = 'WooCommerce към Moodle мост';
$string['error_configmissing'] = 'Настройките на WooCommerce са непълни.';
$string['error_invalidsignature'] = 'Невалиден подпис на автоматичното известие от WooCommerce.';
$string['error_invalidwebhooktoken'] = 'Автоматичното известие не е потвърдено (невалиден токен).';
$string['error_missingemail'] = 'Поръчката не съдържа имейл на клиента.';
$string['error_missingorderid'] = 'Липсва WooCommerce идентификатор на поръчка.';
$string['error_nomanualenrol'] = 'Не е намерен активен ръчен запис за записване в курса.';
$string['error_nomapping'] = 'Няма активно съответствие за този продукт.';
$string['manage'] = 'Управление на моста WooCommerce.';
$string['mapping_add'] = 'Добави съответствие.';
$string['mapping_cohort'] = 'Потребителска група';
$string['mapping_course'] = 'Курс';
$string['mapping_delete'] = 'Изтрий съответствие';
$string['mapping_delete_confirm'] = 'Наистина ли искате да изтриете това съответствие?';
$string['mapping_deleted'] = 'Съответствието е успешно изтрито.';
$string['mapping_edit'] = 'Редактирай съответствие';
$string['mapping_enabled'] = 'Активирано';
$string['mapping_itemtype'] = 'Тип дестинация';
$string['mapping_itemtype_cohort'] = 'Потребителска група';
$string['mapping_itemtype_course'] = 'Курс';
$string['mapping_missingcohort'] = 'Изберете потребителска група за картографиране.';
$string['mapping_missingcourse'] = 'Изберете курс за картографиране.';
$string['mapping_productid'] = 'ID на продукт в WooCommerce';
$string['mapping_role'] = 'Роля за записване в курс';
$string['mapping_saved'] = 'Картографирането е запазено успешно.';
$string['mappings'] = 'Съответствия';
$string['messageprovider_syncnotification'] = 'Известия WP Bridge';
$string['ordernotification_body'] = 'Здравейте {$a->firstname},

Вашата поръчка {$a->orderid} беше успешно обработена.

Прилаган достъп:
{$a->items}

Сега можете да получите достъп до Moodle на:
{$a->siteurl}

Поздрави,
{$a->sitename}';
$string['ordernotification_subject'] = 'Вашият Moodle достъп е готов';
$string['pluginname'] = 'Копирай WP Bridge';
$string['privacy:metadata'] = 'Плъгинът съхранява данни за поръчки на WooCommerce за обработка на записвания в Moodle.';
$string['savechanges'] = 'Запазване на промените';
$string['settings_consumerkey'] = 'Потребителски ключ';
$string['settings_consumersecret'] = 'Потребителски таен ключ';
$string['settings_debug'] = 'Режим за отстраняване на грешки';
$string['settings_notconfigured'] = 'Свързването все още не е конфигурирано.';
$string['settings_section'] = 'Свързване с WooCommerce';
$string['settings_statusheading'] = 'Последен тест на връзката';
$string['settings_storeurl'] = 'URL адрес на WooCommerce';
$string['settings_storeurl_desc'] = 'Пример: https://example.com';
$string['settings_testfailed'] = 'Тестът за връзка неуспя: {$a}';
$string['settings_testok'] = 'Връзката е успешно тествана и проверката на webhook завърши.';
$string['settings_webhookheading'] = 'Крайна точка на Webhook';
$string['settings_webhookheading_desc'] = 'Използвайте този URL в WooCommerce. Токенът винаги е необходим в стринга за заявка.';
$string['settings_webhookurl'] = 'URL адрес на Webhook';
$string['status_error'] = 'Грешка';
$string['status_failed'] = 'Неуспешно';
$string['status_ignored'] = 'Игнориран';
$string['status_ok'] = 'ОК';
$string['status_pending'] = 'В очакване';
$string['status_processed'] = 'Обработено';
$string['task_syncorders'] = 'Синхронизирани поръчки WooCommerce';
$string['wpbridge'] = 'WP Bridge';
