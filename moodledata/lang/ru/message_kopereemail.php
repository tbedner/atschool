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
 * Strings for component 'message_kopereemail', language 'ru', version '4.4'.
 *
 * @package     message_kopereemail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action_create'] = 'Создать пользовательское сообщение';
$string['action_delete'] = 'Удалить пользовательское сообщение';
$string['action_edit'] = 'Редактировать пользовательское сообщение';
$string['action_export'] = 'Экспортировать JSON';
$string['action_import'] = 'Импортировать JSON';
$string['action_preview'] = 'Шаблоны';
$string['action_preview_click'] = 'Нажмите здесь, чтобы получить письмо с проверкой этого шаблона';
$string['action_preview_success'] = 'Письмо успешно отправлено. Пожалуйста, проверьте папку «Входящие» или «Спам».';
$string['export_filename_prefix'] = 'kopereemail-templates';
$string['export_title'] = 'Экспортировать шаблоны';
$string['import_file'] = 'JSON-файл';
$string['import_file_help'] = 'Выберите JSON, экспортированный из другой среды.';
$string['import_invalid_json'] = 'Недействительный файл: некорректный JSON.';
$string['import_invalid_payload'] = 'Недействительный файл: структура экспорта не совпадает.';
$string['import_overwrite'] = 'Перезаписать существующие шаблоны';
$string['import_overwrite_help'] = 'Если этот флажок установлен, существующие шаблоны будут обновлены. Если флажок снят, существующие шаблоны будут проигнорированы.';
$string['import_success'] = 'Импорт завершен.<br>&amp;nbsp;&amp;gt; <strong>Импортировано:</strong> {$a->imported}<br>&amp;nbsp;&amp;gt; <strong>Пропущено:</strong> {$a->skipped}<br>&amp;nbsp;&amp;gt; <strong>Обновлено оболочек:</strong> {$a->wrapper}.';
$string['import_title'] = 'Импортировать шаблоны';
$string['import_wrapper'] = 'Импортировать HTML-оболочку (базовый шаблон)';
$string['import_wrapper_help'] = 'При установленном флажке HTML-оболочка из JSON заменит оболочку, настроенную в этой среде.';
$string['messages'] = 'сообщения';
$string['placeholders_course_data_desc'] = 'Данные курса (если удаётся определить).';
$string['placeholders_course_url_desc'] = 'URL курса (если удаётся определить).';
$string['placeholders_dates_now_desc'] = 'Текущие дата/время (userdate).';
$string['placeholders_desc'] = 'Вы можете использовать в сообщении заполнители Mustache.';
$string['placeholders_fullmessage_desc'] = 'Сообщение в виде обычного текста.';
$string['placeholders_fullmessagehtml_desc'] = 'HTML-сообщение (используйте тройные фигурные скобки).';
$string['placeholders_site_fullname_desc'] = 'Полное название сайта (<code>{$SITE->fullname}</code>).';
$string['placeholders_site_logourl_desc'] = 'Логотип сайта (<img src="{$a->logo_url}" style="max-width:70px;max-height:70px;">).';
$string['placeholders_site_shortname_desc'] = 'Краткое название сайта (<code>{$SITE->shortname}</code>).';
$string['placeholders_site_url_desc'] = 'URL сайта (<code>{$CFG->wwwroot}</code>).';
$string['placeholders_subject_desc'] = 'Текущая тема уведомления.';
$string['placeholders_title'] = 'Доступные заполнители';
$string['placeholders_userfrom_data_desc'] = 'Данные отправителя.';
$string['placeholders_userto_data_desc'] = 'Данные получателя.';
$string['pluginname'] = 'Kopere Email';
$string['privacy:metadata:attachment'] = 'Файл, прикреплённый в файловой системе.';
$string['privacy:metadata:attachname'] = 'Название вложения.';
$string['privacy:metadata:externalpurpose'] = 'Внешнее назначение';
$string['privacy:metadata:fullmessage'] = 'Сообщение в виде обычного текста.';
$string['privacy:metadata:fullmessagehtml'] = 'HTML-сообщение.';
$string['privacy:metadata:recipient'] = 'Получатель письма.';
$string['privacy:metadata:replyto'] = 'Адрес для ответа (Reply-to).';
$string['privacy:metadata:replytoname'] = 'Имя для ответа (Reply-to).';
$string['privacy:metadata:subject'] = 'Тема письма.';
$string['privacy:metadata:userfrom'] = 'Отправитель письма.';
$string['settings_customtemplates'] = 'Пользовательские сообщения для каждого провайдера';
$string['settings_customtemplates_desc'] = 'Создайте/редактируйте пользовательское сообщение для каждого провайдера уведомлений.';
$string['settings_wrapper'] = 'Базовый шаблон письма (оболочка)';
$string['settings_wrapper_desc'] = 'Этот HTML отформатирован в Mustache и будет применён как шаблон сообщения, отправляемого студенту. HTML-содержимое должно быть вставлено там, где находится {{{fullmessagehtml}}}.';
$string['table_actions'] = 'Действия';
$string['table_component'] = 'Компонент';
$string['table_name'] = 'Название';
$string['table_provider'] = 'Провайдер';
$string['template'] = 'Шаблон';
$string['template_changue'] = 'Я хочу по умолчанию использовать этот шаблон для Kopere Mail';
$string['template_changued'] = 'Шаблон успешно обновлён';
$string['template_delete_confirm'] = 'Вы уверены, что хотите удалить пользовательское сообщение для этого провайдера?';
$string['template_delete_title'] = 'Удалить пользовательское сообщение';
$string['template_deleted'] = 'Пользовательское сообщение удалено.';
$string['template_edit_bodyhtml'] = 'HTML сообщения';
$string['template_edit_provider'] = 'Провайдер';
$string['template_edit_save'] = 'Сохранить';
$string['template_edit_subject'] = 'Тема (необязательно)';
$string['template_edit_title'] = 'Пользовательское сообщение';
$string['template_preview'] = 'Предпросмотр шаблона';
$string['template_saved'] = 'Пользовательское сообщение сохранено.';
$string['templates_other'] = 'Другие шаблоны';
$string['templates_transfer_desc'] = 'Используйте этот сервис для переноса настроек между средами (например, отладка -> производство).';
$string['templates_transfer_title'] = 'Экспорт / импорт настроек';
