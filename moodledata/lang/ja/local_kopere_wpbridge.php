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
 * Strings for component 'local_kopere_wpbridge', language 'ja', version '4.4'.
 *
 * @package     local_kopere_wpbridge
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'アクション';
$string['adminnotification_body'] = 'WooCommerceブリッジで問題が検出されました。

{$a}';
$string['adminnotification_subject'] = 'WPブリッジの問題';
$string['back'] = '戻る';
$string['dashboard_laststatus'] = '接続状況';
$string['dashboard_mappingcount'] = 'マッピング';
$string['dashboard_openui'] = 'マッピングを開く';
$string['dashboard_pendingcount'] = '保留中の項目';
$string['dashboard_processedcount'] = '処理済みの項目';
$string['dashboard_settings'] = '設定';
$string['dashboard_subtitle'] = '完了した販売を Moodle のコースとコホートに同期します。';
$string['dashboard_title'] = 'WooCommerce から Moodle へのブリッジ';
$string['error_configmissing'] = 'WooCommerce の設定が不完全です。';
$string['error_invalidsignature'] = 'WooCommerce のウェブフック署名が無効です。';
$string['error_invalidwebhooktoken'] = 'ウェブフック トークンが無効です。';
$string['error_missingemail'] = '注文には顧客のメールアドレスが含まれていません。';
$string['error_missingorderid'] = 'WooCommerce の注文IDがありません。';
$string['error_nomanualenrol'] = 'コースにアクティブな手動登録インスタンスが見つかりませんでした。';
$string['error_nomapping'] = 'この製品にはアクティブなマッピングがありません。';
$string['manage'] = 'WooCommerce ブリッジを管理';
$string['mapping_add'] = 'マッピングを追加';
$string['mapping_cohort'] = 'コホート';
$string['mapping_course'] = 'コース';
$string['mapping_delete'] = 'マッピングを削除';
$string['mapping_delete_confirm'] = 'このマッピングを本当に削除しますか？';
$string['mapping_deleted'] = 'マッピングを正常に削除しました。';
$string['mapping_edit'] = 'マッピングを編集';
$string['mapping_enabled'] = '有効';
$string['mapping_itemtype'] = '宛先タイプ';
$string['mapping_itemtype_cohort'] = 'コホート';
$string['mapping_itemtype_course'] = 'コース';
$string['mapping_missingcohort'] = 'コホートマッピングのためのコホートを選択してください。';
$string['mapping_missingcourse'] = 'コースマッピングのためのコースを選択してください。';
$string['mapping_productid'] = 'WooCommerce 商品ID';
$string['mapping_role'] = 'papel コース登録のための';
$string['mapping_saved'] = 'マッピングが正常に保存されました。';
$string['mappings'] = 'マッピング';
$string['messageprovider_syncnotification'] = 'WP Bridge の通知';
$string['ordernotification_body'] = 'こんにちは {$a->firstname} さん,\\n\\nご注文 {$a->orderid} は正常に処理されました。\\n\\n適用されたアクセス:\\n{$a->items}\\n\\nMoodle には以下でアクセスできます:\\n{$a->siteurl}\\n\\nよろしくお願いいたします,\\n{$a->sitename}';
$string['ordernotification_subject'] = 'Moodle へのアクセスが準備できました。';
$string['pluginname'] = 'Kopere WP Bridge';
$string['privacy:metadata'] = 'このプラグインは Moodle 登録処理のための WooCommerce 注文データを保存します。';
$string['savechanges'] = '変更を保存';
$string['settings_consumerkey'] = 'コンシューマキー';
$string['settings_consumersecret'] = 'コンシューマシークレット';
$string['settings_debug'] = 'デバッグモード';
$string['settings_notconfigured'] = '接続はまだ設定されていません。';
$string['settings_section'] = 'WooCommerce 接続';
$string['settings_statusheading'] = '直近の接続テスト';
$string['settings_storeurl'] = 'WooCommerce の URL';
$string['settings_storeurl_desc'] = '例: https://example.com';
$string['settings_testfailed'] = '接続テストが失敗しました: {$a}';
$string['settings_testok'] = '接続のテストは正常に完了しました。Webhook チェックが完了しました。';
$string['settings_webhookheading'] = 'Webhook エンドポイント';
$string['settings_webhookheading_desc'] = 'このURLを WooCommerce で使用してください。トークンはクエリ文字列に常に含める必要があります。';
$string['settings_webhookurl'] = 'Webhook URL';
$string['status_error'] = 'エラー';
$string['status_failed'] = '失敗';
$string['status_ignored'] = '無視されました';
$string['status_ok'] = 'OK';
$string['status_pending'] = '保留中';
$string['status_processed'] = '処理済み';
$string['task_syncorders'] = 'WooCommerce の完了済み注文を同期します';
$string['wpbridge'] = 'WP Bridge';
