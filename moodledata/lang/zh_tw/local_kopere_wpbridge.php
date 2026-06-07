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
 * Strings for component 'local_kopere_wpbridge', language 'zh_tw', version '4.4'.
 *
 * @package     local_kopere_wpbridge
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = '操作';
$string['adminnotification_body'] = '在 WooCommerce 橋接中偵測到一個問題。

{$a}';
$string['adminnotification_subject'] = 'WP橋接問題';
$string['back'] = '返回';
$string['dashboard_laststatus'] = '連線狀態';
$string['dashboard_mappingcount'] = '映射';
$string['dashboard_openui'] = '開啟映射';
$string['dashboard_pendingcount'] = '待處理項目';
$string['dashboard_processedcount'] = '已處理項目';
$string['dashboard_settings'] = '設定';
$string['dashboard_subtitle'] = '將已完成的銷售同步到 Moodle 課程與分組。';
$string['dashboard_title'] = 'WooCommerce 到 Moodle 的橋接';
$string['error_configmissing'] = 'WooCommerce 設定不完整。';
$string['error_invalidsignature'] = '無效的 WooCommerce 網路鉤子簽名。';
$string['error_invalidwebhooktoken'] = '無效的 WooCommerce 網路鉤子令牌。';
$string['error_missingemail'] = '訂單中不包含客戶電子郵件。';
$string['error_missingorderid'] = '缺少 WooCommerce 訂單 ID。';
$string['error_nomanualenrol'] = '在課程中未找到任何啟用的手動註冊實例。';
$string['error_nomapping'] = '此產品沒有啟用的映射。';
$string['manage'] = '管理 WooCommerce 橋接';
$string['mapping_add'] = '新增映射';
$string['mapping_cohort'] = '分組';
$string['mapping_course'] = '課程';
$string['mapping_delete'] = '刪除映射';
$string['mapping_delete_confirm'] = '您真的要刪除此映射嗎？';
$string['mapping_deleted'] = '映射已成功刪除。';
$string['mapping_edit'] = '編輯映射';
$string['mapping_enabled'] = '已啟用';
$string['mapping_itemtype'] = '目的地類型';
$string['mapping_itemtype_cohort'] = '分組';
$string['mapping_itemtype_course'] = '課程';
$string['mapping_missingcohort'] = '為分組對映選擇一個分組。';
$string['mapping_missingcourse'] = '選擇一門課程以進行課程對映。';
$string['mapping_productid'] = 'WooCommerce 產品 ID';
$string['mapping_role'] = 'papel 用於課程註冊';
$string['mapping_saved'] = '映射已成功儲存。';
$string['mappings'] = '映射';
$string['messageprovider_syncnotification'] = 'WP Bridge 通知';
$string['ordernotification_body'] = '您好 {$a->firstname}，

您的訂單 {$a->orderid} 已成功處理。

已套用的存取權限：
{$a->items}

您現在可以在以下網址存取 Moodle：
{$a->siteurl}

此致，
{$a->sitename}';
$string['ordernotification_subject'] = '您的 Moodle 存取權限已就緒';
$string['pluginname'] = 'Kopere WP Bridge';
$string['privacy:metadata'] = '此外掛會儲存 WooCommerce 訂單資料，以進行 Moodle 註冊處理。';
$string['savechanges'] = '儲存變更';
$string['settings_consumerkey'] = '消費者金鑰';
$string['settings_consumersecret'] = '消費者密鑰';
$string['settings_debug'] = '除錯模式';
$string['settings_notconfigured'] = '連線尚未設定。';
$string['settings_section'] = 'WooCommerce 連線';
$string['settings_statusheading'] = '上次連線測試';
$string['settings_storeurl'] = 'WooCommerce 網址';
$string['settings_storeurl_desc'] = '範例：https://example.com';
$string['settings_testfailed'] = '連線測試失敗：{$a}';
$string['settings_testok'] = '連線測試成功，且 webhook 檢查已完成。';
$string['settings_webhookheading'] = 'Webhook 端點';
$string['settings_webhookheading_desc'] = '在 WooCommerce 中使用此網址。查詢字串中始終需要提供 token。';
$string['settings_webhookurl'] = 'Webhook 網址';
$string['status_error'] = '錯誤';
$string['status_failed'] = '失敗';
$string['status_ignored'] = '已忽略';
$string['status_ok'] = '確定';
$string['status_pending'] = '待處理';
$string['status_processed'] = '已處理';
$string['task_syncorders'] = '同步 WooCommerce 已完成的訂單';
$string['wpbridge'] = 'WP Bridge';
