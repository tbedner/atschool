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
 * Strings for component 'message_kopereemail', language 'bg', version '4.4'.
 *
 * @package     message_kopereemail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action_create'] = 'Създаване на персонализирано съобщение';
$string['action_delete'] = 'Изтриване на персонализирано съобщение';
$string['action_edit'] = 'Редактиране на персонализирано съобщение';
$string['action_export'] = 'Експортиране на JSON';
$string['action_import'] = 'Импортиране на JSON';
$string['action_preview'] = 'Шаблони';
$string['action_preview_click'] = 'Натиснете тук, за да получите имейл с този шаблон за теста';
$string['action_preview_success'] = 'Имейлът е изпратен успешно. Моля, проверете входящата си поща или папката за спам.';
$string['export_filename_prefix'] = 'kopereemail-templates';
$string['export_title'] = 'Експортиране на шаблони';
$string['import_file'] = 'JSON файл';
$string['import_file_help'] = 'Изберете JSON, експортиран от другата среда.';
$string['import_invalid_json'] = 'Невалиден файл: неправилно форматиран JSON.';
$string['import_invalid_payload'] = 'Невалиден файл: структурата на експорта не съвпада.';
$string['import_overwrite'] = 'Презаписване на съществуващите шаблони';
$string['import_overwrite_help'] = 'Ако е отметнато, съществуващите шаблони ще бъдат обновени. Ако не е отметнато, съществуващите шаблони ще бъдат игнорирани.';
$string['import_success'] = 'Импортирането завърши.<br>&nbsp;&gt;<strong>Импортирани:</strong> {$a->imported}<br>&nbsp;&gt<strong>Пропуснати:</strong> {$a->skipped}<br>&nbsp;&gt;<strong>Обвивката е обновена:</strong> {$a->wrapper}.';
$string['import_title'] = 'Импортиране на шаблони';
$string['import_wrapper'] = 'Импортиране на HTML обвивка (базов шаблон)';
$string['import_wrapper_help'] = 'Ако е отметнато, JSON HTML обвивката ще замени обвивката, конфигурирана в тази среда.';
$string['messages'] = 'съобщения';
$string['placeholders_course_data_desc'] = 'Данни за курса (когато са откриваеми).';
$string['placeholders_course_url_desc'] = 'URL на курса (когато е откриваем).';
$string['placeholders_dates_now_desc'] = 'Текуща дата/час (userdate).';
$string['placeholders_desc'] = 'Можете да използвате заместители на Mustache в съобщението.';
$string['placeholders_fullmessage_desc'] = 'Съобщение в обикновен текст.';
$string['placeholders_fullmessagehtml_desc'] = 'HTML съобщение (използвайте тройни фигурни скоби).';
$string['placeholders_site_fullname_desc'] = 'Пълно име на сайта (<code>{$SITE->fullname}</code>).';
$string['placeholders_site_logourl_desc'] = 'Лого на сайта (<img src="{$a->logo_url}" style="max-width:70px;max-height:70px;">).';
$string['placeholders_site_shortname_desc'] = 'Кратко име на сайта (<code>{$SITE->shortname}</code>).';
$string['placeholders_site_url_desc'] = 'URL на сайта (<code>{$CFG->wwwroot}</code>).';
$string['placeholders_subject_desc'] = 'Текуща тема на известието.';
$string['placeholders_title'] = 'Налични заместители';
$string['placeholders_userfrom_data_desc'] = 'Данни за подателя.';
$string['placeholders_userto_data_desc'] = 'Данни за получателя.';
$string['pluginname'] = 'Kopere Email';
$string['privacy:metadata:attachment'] = 'Файл, прикачен във файловата система.';
$string['privacy:metadata:attachname'] = 'Име на прикачения файл.';
$string['privacy:metadata:externalpurpose'] = 'Външна цел';
$string['privacy:metadata:fullmessage'] = 'Съобщение в обикновен текст.';
$string['privacy:metadata:fullmessagehtml'] = 'HTML съобщение.';
$string['privacy:metadata:recipient'] = 'Получател на имейла.';
$string['privacy:metadata:replyto'] = 'Имейл за отговор (Reply-to).';
$string['privacy:metadata:replytoname'] = 'Име за отговор (Reply-to).';
$string['privacy:metadata:subject'] = 'Тема на имейла.';
$string['privacy:metadata:userfrom'] = 'Подател на имейла.';
$string['settings_customtemplates'] = 'Персонализирани съобщения по доставчик';
$string['settings_customtemplates_desc'] = 'Създавайте/редактирайте персонализирано съобщение за всеки доставчик на известия.';
$string['settings_wrapper'] = 'Базов шаблон на имейла (обвивка)';
$string['settings_wrapper_desc'] = 'Този HTML е форматиран с Mustache и ще бъде приложен като шаблон на съобщението, което ще се изпрати до студента. HTML съдържанието трябва да бъде вмъкнато там, където е {{{fullmessagehtml}}}.';
$string['table_actions'] = 'Действия';
$string['table_component'] = 'Компонент';
$string['table_name'] = 'Име';
$string['table_provider'] = 'Доставчик';
$string['template'] = 'Шаблон';
$string['template_changue'] = 'Искам да използвам този шаблон като подразбиращ се за Kopere Mail';
$string['template_changued'] = 'Шаблонът беше актуализиран успешно';
$string['template_delete_confirm'] = 'Сигурни ли сте, че искате да изтриете персонализираното съобщение за този доставчик?';
$string['template_delete_title'] = 'Изтриване на персонализирано съобщение';
$string['template_deleted'] = 'Персонализираното съобщение беше изтрито.';
$string['template_edit_bodyhtml'] = 'HTML на съобщението';
$string['template_edit_provider'] = 'Доставчик';
$string['template_edit_save'] = 'Запази';
$string['template_edit_subject'] = 'Тема (по избор)';
$string['template_edit_title'] = 'Персонализирано съобщение';
$string['template_preview'] = 'Преглед на шаблона';
$string['template_saved'] = 'Персонализираното съобщение беше запазено.';
$string['templates_other'] = 'Други шаблони';
$string['templates_transfer_desc'] = 'Използвайте тази услуга, за да мигрирате настройки между среди (напр. staging -> production).';
$string['templates_transfer_title'] = 'Експортиране / Импортиране на настройки';
