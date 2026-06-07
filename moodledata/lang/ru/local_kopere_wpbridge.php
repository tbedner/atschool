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
 * Strings for component 'local_kopere_wpbridge', language 'ru', version '4.4'.
 *
 * @package     local_kopere_wpbridge
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Действия';
$string['adminnotification_body'] = 'Обнаружена проблема с мостом WooCommerce.

{$a}';
$string['adminnotification_subject'] = 'Проблема с мостом WP';
$string['back'] = 'Назад';
$string['dashboard_laststatus'] = 'Состояние соединения';
$string['dashboard_mappingcount'] = 'Сопоставления';
$string['dashboard_openui'] = 'Открытые сопоставления';
$string['dashboard_pendingcount'] = 'Элементы в ожидании';
$string['dashboard_processedcount'] = 'Обработанные элементы';
$string['dashboard_settings'] = 'Настройки';
$string['dashboard_subtitle'] = 'Синхронизация завершённых продаж с курсами и группами в Moodle.';
$string['dashboard_title'] = 'Мост WooCommerce с Moodle';
$string['error_configmissing'] = 'Настройки WooCommerce не завершены.';
$string['error_invalidsignature'] = 'Недействительная подпись вебхука WooCommerce.';
$string['error_invalidwebhooktoken'] = 'Недействительный токен вебхука.';
$string['error_missingemail'] = 'В заказе отсутствует адрес электронной почты клиента.';
$string['error_missingorderid'] = 'Отсутствует ID заказа WooCommerce.';
$string['error_nomanualenrol'] = 'В курсе не найдено активного экземпляра зачисления вручную.';
$string['error_nomapping'] = 'Для этого продукта не найдено активного сопоставления.';
$string['manage'] = 'Управление мостом WooCommerce';
$string['mapping_add'] = 'Добавить сопоставление';
$string['mapping_cohort'] = 'Глобальная группа';
$string['mapping_course'] = 'Курс';
$string['mapping_delete'] = 'Удалить сопоставление';
$string['mapping_delete_confirm'] = 'Вы действительно хотите удалить это сопоставление?';
$string['mapping_deleted'] = 'Сопоставление удалено.';
$string['mapping_edit'] = 'Редактировать сопоставление';
$string['mapping_enabled'] = 'Включено';
$string['mapping_itemtype'] = 'Тип назначения';
$string['mapping_itemtype_cohort'] = 'Глобальная группа';
$string['mapping_itemtype_course'] = 'Курс';
$string['mapping_missingcohort'] = 'Выберите глобальную группу для сопоставления.';
$string['mapping_missingcourse'] = 'Выберите курс для сопоставления.';
$string['mapping_productid'] = 'ID продукта WooCommerce';
$string['mapping_role'] = 'Роль при зачислении на курс';
$string['mapping_saved'] = 'Сопоставление успешно сохранено.';
$string['mappings'] = 'Сопоставления';
$string['messageprovider_syncnotification'] = 'Уведомления WP Bridge';
$string['ordernotification_body'] = 'Здравствуйте {$a->firstname}!
Ваш заказ {$a->orderid} успешно обработан.

Предоставленный доступ:{$a->items}

Теперь вы можете получить доступ к Moodle по адресу:{$a->siteurl}

С уважением, {$a->sitename}';
$string['ordernotification_subject'] = 'Ваш доступ к Moodle готов.';
$string['pluginname'] = 'Kopere WP Bridge';
$string['privacy:metadata'] = 'Плагин сохраняет данные заказов WooCommerce для обработки зачисления в Moodle.';
$string['savechanges'] = 'Сохранить изменения';
$string['settings_consumerkey'] = 'Ключ клиента';
$string['settings_consumersecret'] = 'Пароль клиента';
$string['settings_debug'] = 'Режим отладки';
$string['settings_notconfigured'] = 'Соединение ещё не настроено.';
$string['settings_section'] = 'Соединение WooCommerce';
$string['settings_statusheading'] = 'Последний тест подключения';
$string['settings_storeurl'] = 'URL WooCommerce';
$string['settings_storeurl_desc'] = 'Пример: https://example.com';
$string['settings_testfailed'] = 'Тест соединения не выполнен: {$a}';
$string['settings_testok'] = 'Соединение успешно протестировано и проверка вебхука завершена.';
$string['settings_webhookheading'] = 'Конечная точка вебхука';
$string['settings_webhookheading_desc'] = 'Используйте этот URL-адрес в WooCommerce. Токен всегда должен присутствовать в строке запроса.';
$string['settings_webhookurl'] = 'URL вебхука';
$string['status_error'] = 'Ошибка';
$string['status_failed'] = 'Неудача';
$string['status_ignored'] = 'Проигнорировано';
$string['status_ok'] = 'OK';
$string['status_pending'] = 'В ожидании';
$string['status_processed'] = 'Обработано';
$string['task_syncorders'] = 'Синхронизация завершённых заказов WooCommerce';
$string['wpbridge'] = 'Мост WP';
