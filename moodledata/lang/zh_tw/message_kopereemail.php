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
 * Strings for component 'message_kopereemail', language 'zh_tw', version '4.4'.
 *
 * @package     message_kopereemail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action_create'] = '建立自訂訊息';
$string['action_delete'] = '刪除自訂訊息';
$string['action_edit'] = '編輯自訂訊息';
$string['action_export'] = '匯出 JSON';
$string['action_import'] = '匯入 JSON';
$string['action_preview'] = '範本';
$string['action_preview_click'] = '點擊此處以接收包含此範本測試的電子郵件';
$string['action_preview_success'] = '郵件已成功寄出。請檢查您的收件匣或垃圾信件夾。';
$string['export_filename_prefix'] = 'kopereemail-templates';
$string['export_title'] = '匯出範本';
$string['import_file'] = 'JSON 檔案';
$string['import_file_help'] = '選取來自其他環境的匯出 JSON。';
$string['import_invalid_json'] = '檔案無效：JSON 格式錯誤。';
$string['import_invalid_payload'] = '檔案無效：匯出結構不符合。';
$string['import_overwrite'] = '覆寫現有範本';
$string['import_overwrite_help'] = '若勾選，現有範本將被更新。若未勾選，現有範本將被忽略。';
$string['import_success'] = '匯入完成.<br>&amp;nbsp;&amp;gt; <strong>已匯入：</strong> {$a->imported}<br>&amp;nbsp;&amp;gt; <strong>已略過：</strong> {$a->skipped}<br>&amp;nbsp;&amp;gt; <strong>包裝器已更新：</strong> {$a->wrapper}.';
$string['import_title'] = '匯入範本';
$string['import_wrapper'] = '匯入 HTML 包裝器（基礎模板）';
$string['import_wrapper_help'] = '若勾選，JSON HTML 包裝器將取代此環境中所設定的包裝器。';
$string['messages'] = '訊息';
$string['placeholders_course_data_desc'] = '課程資料（在可偵測時）';
$string['placeholders_course_url_desc'] = '課程網址（在可偵測時）';
$string['placeholders_dates_now_desc'] = '目前日期/時間（userdate）。';
$string['placeholders_desc'] = '您可以在訊息中使用 Mustache 佔位符。';
$string['placeholders_fullmessage_desc'] = '純文字訊息。';
$string['placeholders_fullmessagehtml_desc'] = 'HTML 訊息（使用三重大括號）。';
$string['placeholders_site_fullname_desc'] = '完整站名 (<code>{$SITE->fullname}</code>).';
$string['placeholders_site_logourl_desc'] = '網站標誌  (<img src="{$a->logo_url}" style="max-width:70px;max-height:70px;">).';
$string['placeholders_site_shortname_desc'] = '短站名 (<code>{$SITE->shortname}</code>).';
$string['placeholders_site_url_desc'] = '網站位址 (<code>{$CFG->wwwroot}</code>).';
$string['placeholders_subject_desc'] = '目前通知主旨。';
$string['placeholders_title'] = '可用的佔位符';
$string['placeholders_userfrom_data_desc'] = '寄件人資料。';
$string['placeholders_userto_data_desc'] = '收件人資料。';
$string['pluginname'] = '複製電子郵件';
$string['privacy:metadata:attachment'] = '檔案已在檔案系統中附加。';
$string['privacy:metadata:attachname'] = '附件名稱。';
$string['privacy:metadata:externalpurpose'] = '外部用途';
$string['privacy:metadata:fullmessage'] = '純文字訊息。';
$string['privacy:metadata:fullmessagehtml'] = 'HTML 訊息。';
$string['privacy:metadata:recipient'] = '電子郵件收件人。';
$string['privacy:metadata:replyto'] = '回覆用電子郵件。';
$string['privacy:metadata:replytoname'] = '回覆名稱。';
$string['privacy:metadata:subject'] = '電子郵件主旨。';
$string['privacy:metadata:userfrom'] = '電子郵件寄件人。';
$string['settings_customtemplates'] = '每個提供者的自訂訊息';
$string['settings_customtemplates_desc'] = '為每個通知提供者建立/編輯自訂訊息。';
$string['settings_wrapper'] = '電子郵件基礎模板（包裝器）';
$string['settings_wrapper_desc'] = '此 HTML 已以 Mustache 進行格式化，將作為要傳送給 estudante 的訊息模板。HTML 內容應插入至 {{{fullmessagehtml}}} 位置。';
$string['table_actions'] = '動作';
$string['table_component'] = '元件';
$string['table_name'] = '名稱';
$string['table_provider'] = '提供者';
$string['template'] = '模板';
$string['template_changue'] = '我想把此模板設為 Kopere Mail 的預設模板。';
$string['template_changued'] = '模板更新成功';
$string['template_delete_confirm'] = '您確定要刪除此提供者的自訂訊息嗎？';
$string['template_delete_title'] = '刪除自訂訊息';
$string['template_deleted'] = '自訂訊息已刪除。';
$string['template_edit_bodyhtml'] = '訊息 HTML';
$string['template_edit_provider'] = '提供者';
$string['template_edit_save'] = '儲存';
$string['template_edit_subject'] = '主旨（選填）';
$string['template_edit_title'] = '自訂訊息';
$string['template_preview'] = '預覽模板';
$string['template_saved'] = '自訂訊息已儲存。';
$string['templates_other'] = '其他模板';
$string['templates_transfer_desc'] = '使用此服務在不同環境之間遷移設定（例如，staging -> 生產）。';
$string['templates_transfer_title'] = '匯出／匯入設定';
