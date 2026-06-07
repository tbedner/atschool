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
 * Strings for component 'local_kopere_wpbridge', language 'zh_cn', version '4.4'.
 *
 * @package     local_kopere_wpbridge
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = '操作';
$string['adminnotification_body'] = '在 WooCommerce 桥接中检测到问题。

{$a}';
$string['adminnotification_subject'] = 'WP 桥接问题';
$string['back'] = '返回';
$string['dashboard_laststatus'] = '连接状态';
$string['dashboard_mappingcount'] = '映射';
$string['dashboard_openui'] = '打开映射';
$string['dashboard_pendingcount'] = '待处理项';
$string['dashboard_processedcount'] = '已处理项';
$string['dashboard_settings'] = '设置';
$string['dashboard_subtitle'] = '将已完成的销售同步到 Moodle 课程和学习群组。';
$string['dashboard_title'] = 'WooCommerce 与 Moodle 桥接';
$string['error_configmissing'] = 'WooCommerce 设置不完整。';
$string['error_invalidsignature'] = '无效的 WooCommerce webhook 签名。';
$string['error_invalidwebhooktoken'] = '无效的 webhook 令牌。';
$string['error_missingemail'] = '订单不包含客户邮箱。';
$string['error_missingorderid'] = '缺少 WooCommerce 订单 ID。';
$string['error_nomanualenrol'] = '课程中未找到活动的手动注册实例。';
$string['error_nomapping'] = '未找到此产品的活动映射。';
$string['manage'] = '管理 WooCommerce 桥接';
$string['mapping_add'] = '添加映射';
$string['mapping_cohort'] = '学习群组';
$string['mapping_course'] = '课程';
$string['mapping_delete'] = '删除映射';
$string['mapping_delete_confirm'] = '是否确定要删除此映射？';
$string['mapping_deleted'] = '映射已成功删除。';
$string['mapping_edit'] = '编辑映射';
$string['mapping_enabled'] = '已启用';
$string['mapping_itemtype'] = '目标类型';
$string['mapping_itemtype_cohort'] = '学习群组';
$string['mapping_itemtype_course'] = '课程';
$string['mapping_missingcohort'] = '为学习群组映射选择一个学习群组。';
$string['mapping_missingcourse'] = '请选择用于课程映射的课程。';
$string['mapping_productid'] = 'WooCommerce 产品 ID';
$string['mapping_role'] = 'papel 用于课程注册';
$string['mapping_saved'] = '映射已成功保存。';
$string['mappings'] = '映射';
$string['messageprovider_syncnotification'] = 'WP Bridge 通知';
$string['ordernotification_body'] = '您好，{$a->firstname}，

您的订单 {$a->orderid} 已成功处理。

已应用的访问：
{$a->items}

现在可以访问 Moodle：
{$a->siteurl}

此致敬礼，
{$a->sitename}';
$string['ordernotification_subject'] = '您的 Moodle 访问权限现已就绪。';
$string['pluginname'] = 'Kopere WP Bridge';
$string['privacy:metadata'] = '该插件存储 WooCommerce 订单数据以处理 Moodle 报名。';
$string['savechanges'] = '保存更改';
$string['settings_consumerkey'] = '消费者密钥';
$string['settings_consumersecret'] = '消费者秘密';
$string['settings_debug'] = '调试模式';
$string['settings_notconfigured'] = '连接尚未配置。';
$string['settings_section'] = 'WooCommerce 连接';
$string['settings_statusheading'] = '最近一次连接测试';
$string['settings_storeurl'] = 'WooCommerce 网址';
$string['settings_storeurl_desc'] = '示例：https://example.com';
$string['settings_testfailed'] = '连接测试失败：{$a}';
$string['settings_testok'] = '连接测试成功并完成 Webhook 检查。';
$string['settings_webhookheading'] = 'Webhook 端点';
$string['settings_webhookheading_desc'] = '请在 WooCommerce 中使用此 URL。查询字符串中始终需要包含令牌。';
$string['settings_webhookurl'] = 'Webhook URL';
$string['status_error'] = '错误';
$string['status_failed'] = '失败';
$string['status_ignored'] = '已忽略';
$string['status_ok'] = '确定';
$string['status_pending'] = '待处理';
$string['status_processed'] = '已处理';
$string['task_syncorders'] = '同步 WooCommerce 已完成的订单';
$string['wpbridge'] = 'WP Bridge';
