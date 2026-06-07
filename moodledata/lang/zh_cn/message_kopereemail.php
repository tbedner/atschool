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
 * Strings for component 'message_kopereemail', language 'zh_cn', version '4.4'.
 *
 * @package     message_kopereemail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action_create'] = '创建自定义消息';
$string['action_delete'] = '删除自定义消息';
$string['action_edit'] = '编辑自定义消息';
$string['action_export'] = '导出 JSON';
$string['action_import'] = '导入 JSON';
$string['action_preview'] = '模板';
$string['action_preview_click'] = '单击此处接收包含此模板测试的电子邮件';
$string['action_preview_success'] = '电子邮件发送成功。请检查您的收件箱或垃圾邮件夹。';
$string['export_filename_prefix'] = 'kopereemail-templates';
$string['export_title'] = '导出模板';
$string['import_file'] = 'JSON 文件';
$string['import_file_help'] = '选择来自另一环境导出的 JSON。';
$string['import_invalid_json'] = '文件无效：JSON 格式错误。';
$string['import_invalid_payload'] = '文件无效：导出结构不匹配。';
$string['import_overwrite'] = '覆盖现有模板';
$string['import_overwrite_help'] = '如勾选，将更新现有模板。若未勾选，将忽略现有模板。';
$string['import_success'] = '导入完成.<br>&amp;nbsp;&amp;gt; <strong>已导入:</strong> {$a->imported}<br>&amp;nbsp;&amp;gt; <strong>已跳过:</strong> {$a->skipped}<br>&amp;nbsp;&amp;gt; <strong>包装器已更新:</strong> {$a->wrapper}.';
$string['import_title'] = '导入模板';
$string['import_wrapper'] = '导入 HTML 包装器（基模板）';
$string['import_wrapper_help'] = '如勾选，JSON HTML 包装器将替换此环境中配置的包装器。';
$string['messages'] = '消息';
$string['placeholders_course_data_desc'] = '课程数据（在可检测时）。';
$string['placeholders_course_url_desc'] = '课程 URL（在可检测时）。';
$string['placeholders_dates_now_desc'] = '当前日期/时间（userdate）。';
$string['placeholders_desc'] = '您可以在消息中使用 Mustache 占位符。';
$string['placeholders_fullmessage_desc'] = '纯文本消息。';
$string['placeholders_fullmessagehtml_desc'] = 'HTML 消息（使用三重花括号）。';
$string['placeholders_site_fullname_desc'] = '站点全名 (<code>{$SITE->fullname}</code>)。';
$string['placeholders_site_logourl_desc'] = '站点徽标  (<img src="{$a->logo_url}" style="max-width:70px;max-height:70px;">).';
$string['placeholders_site_shortname_desc'] = '站点短名 (<code>{$SITE->shortname}</code>).';
$string['placeholders_site_url_desc'] = '站点 URL (<code>{$CFG->wwwroot}</code>).';
$string['placeholders_subject_desc'] = '当前通知主题。';
$string['placeholders_title'] = '可用的占位符';
$string['placeholders_userfrom_data_desc'] = '发件人数据。';
$string['placeholders_userto_data_desc'] = '收件人数据。';
$string['pluginname'] = '复制电子邮件';
$string['privacy:metadata:attachment'] = '已在文件系统中附加的文件。';
$string['privacy:metadata:attachname'] = '附件名称。';
$string['privacy:metadata:externalpurpose'] = '外部用途';
$string['privacy:metadata:fullmessage'] = '纯文本消息。';
$string['privacy:metadata:fullmessagehtml'] = 'HTML 消息。';
$string['privacy:metadata:recipient'] = '电子邮件收件人。';
$string['privacy:metadata:replyto'] = '回复邮箱。';
$string['privacy:metadata:replytoname'] = '回复名称。';
$string['privacy:metadata:subject'] = '邮件主题。';
$string['privacy:metadata:userfrom'] = '邮件发送者。';
$string['settings_customtemplates'] = '每个提供者的自定义消息';
$string['settings_customtemplates_desc'] = '为每个通知提供者创建/编辑自定义消息。';
$string['settings_wrapper'] = '邮件基础模板（包装模板）';
$string['settings_wrapper_desc'] = '此 HTML 采用 Mustache 格式，将被用作要发送给 estudante 的消息模板。应将 HTML 内容插入 {{{fullmessagehtml}}} 处。';
$string['table_actions'] = '操作';
$string['table_component'] = '组件';
$string['table_name'] = '名称';
$string['table_provider'] = '提供者';
$string['template'] = '模板';
$string['template_changue'] = '我想将此模板用作 Kopere Mail 的默认模板';
$string['template_changued'] = '模板更新成功';
$string['template_delete_confirm'] = '您确定要删除此提供者的自定义消息吗？';
$string['template_delete_title'] = '删除自定义消息';
$string['template_deleted'] = '自定义消息已删除。';
$string['template_edit_bodyhtml'] = '消息 HTML';
$string['template_edit_provider'] = '提供者';
$string['template_edit_save'] = '保存';
$string['template_edit_subject'] = '主题（可选）';
$string['template_edit_title'] = '自定义消息';
$string['template_preview'] = '预览模板';
$string['template_saved'] = '自定义消息已保存。';
$string['templates_other'] = '其他模板';
$string['templates_transfer_desc'] = '使用此服务在环境之间迁移设置（例如，从 staging -> production）。';
$string['templates_transfer_title'] = '导出 / 导入设置';
