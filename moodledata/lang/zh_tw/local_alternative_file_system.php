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
 * Strings for component 'local_alternative_file_system', language 'zh_tw', version '4.4'.
 *
 * @package     local_alternative_file_system
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bytescalcfailed'] = '無法計算位元組（fast=0 模式）。原因：{$a}';
$string['bytesline'] = '位元組：<strong>{$a->migrated}</strong> / <strong>{$a->total}</strong> &amp;nbsp;|&amp;nbsp; 速率（10 分鐘）：<strong>{$a->rate}/分鐘</strong> &amp;nbsp;|&amp;nbsp; 預估完成時間（位元組）：<strong>{$a->eta}</strong>';
$string['cachedef_missing_count'] = '快取缺失數量';
$string['eta'] = '預估完成時間（ETA）：<strong>{$a}</strong>';
$string['instruction_install'] = '<p><strong>請將下列一行加入 Moodle 的 <code>config.php</code> 檔案：</strong></p><pre><code>$CFG->alternative_file_system_class = "\\local_alternative_file_system\\external_file_system";</code></pre><p><strong>重要：</strong>請將此行插入在下列這行之前（若檔案中存在）：</p><pre><code>require_once(__DIR__ . "/lib/setup.php");</code></pre>';
$string['instruction_title'] = '安裝說明';
$string['lasttransfer'] = '最後一次傳輸：<strong>{$a}</strong>';
$string['migrate_link'] = '<p><a class="btn btn-success" href="?execute=1">立即執行（可能需要很長時間）</a></p>';
$string['migrate_title'] = '將本機儲存遷移到遠端儲存';
$string['migrate_title_tolocal'] = '將遠端儲存遷移到本機儲存';
$string['migrate_total'] = '<p>目前有 <strong>{$a->missing}</strong> 個本機檔案正在等待遷移，而 <strong>{$a->sending}</strong> 個檔案已遷移至遠端環境。</p>';
$string['migrate_total_local'] = '將檔案從遠端儲存移回本機儲存。依資料量多寡可能需要一些時間。';
$string['migratedfiles'] = '已遷移：<strong>{$a}</strong>';
$string['nostoragefound'] = '找不到可回報的儲存資料。請檢查資料表 local_alternativefilesystemf 是否有紀錄。';
$string['pluginname'] = '替代檔案系統';
$string['privacy:no_data_reason'] = 'Alternative File System 外掛不會儲存任何個人資料。';
$string['rate'] = '速率：<strong>{$a->r1}</strong> 檔/分鐘（1 分鐘）&amp;nbsp;|&amp;nbsp; <strong>{$a->r10}</strong> 檔/分鐘（10 分鐘）&amp;nbsp;|&amp;nbsp; <strong>{$a->r60}</strong> 檔/分鐘（60 分鐘）';
$string['remainingfiles'] = '剩餘：<strong>{$a}</strong>';
$string['reporttitle_status'] = '狀態';
$string['settings_bucketname'] = '{$a->local} 儲存桶名稱';
$string['settings_bucketnamedesc'] = '在 {$a->local} 中指派給儲存桶的唯一名稱。';
$string['settings_gcs_keyfile'] = 'Google-storage.json 內容';
$string['settings_gcs_keyfiledesc'] = '請在此貼上「google-storage.json」檔案的內容。';
$string['settings_local'] = 'Moodle 中的本機檔案';
$string['settings_migrate_local'] = '使用 <a target="_blank" href="{$a->url}/move-to-local.php">move-to-local.php</a> 服務，將資料從 {$a->local} 遷移到本機儲存。';
$string['settings_migrate_remote'] = '使用 <a target="_blank" href="{$a->url}/move-to-external.php">move-to-external.php</a> 服務，將資料從本機儲存遷移到 {$a->local}。';
$string['settings_objectfs_notice'] = '<p>目前 <code>$CFG->alternative_file_system_class</code> 設定為 <code>"{$a->currentclass}";</code>，這表示此站點目前使用 <strong>tool_objectfs</strong> 作為 Moodle 的替代檔案系統。</p>

<p>若要使用相同設定且不遺失任何檔案，請在此外掛中使用以下設定：</p>
<ul>
  <li><strong>{$a->settings_local_lang}</strong>：<code>{$a->settings_local}</code></li>
  <li><strong>{$a->settings_s3_region_lang}</strong>：<code>{$a->settings_s3_region}</code></li>
  <li><strong>{$a->settings_s3_credentials_key_lang}</strong>：<code>{$a->settings_s3_credentials_key}</code></li>
  <li><strong>{$a->settings_s3_credentials_secret_lang}</strong>：<code>{$a->settings_s3_credentials_secret}</code></li>
  <li><strong>{$a->settings_bucketname_lang}</strong>：<code>{$a->settings_bucketname}</code></li>
  <li><strong>{$a->settings_path_lang}</strong>：<code>{$a->settings_path}</code></li>
</ul>

<p>接著，為了使用此外掛作為替代檔案系統，您需要先在 <code>config.php</code> 中將值改為 <code>$CFG->alternative_file_system_class = "\\local_alternative_file_system\\external_file_system";</code>。</p>';
$string['settings_path'] = '{$a->local} 物件路徑';
$string['settings_pathdesc'] = '儲存桶內用於存放物件的路徑。僅接受英文字母與數字。';
$string['settings_s3_credentials_key'] = '{$a->local} 存取金鑰';
$string['settings_s3_credentials_keydesc'] = '用於與 {$a->local} 服務進行驗證的存取金鑰。';
$string['settings_s3_credentials_secret'] = '{$a->local} 密鑰';
$string['settings_s3_credentials_secretdesc'] = '用於與 {$a->local} 服務進行驗證的密鑰。';
$string['settings_s3_region'] = '{$a->local} 區域';
$string['settings_s3_regiondesc'] = '{$a->local} 儲存桶所在的區域，例如「{$a->ex_region}」。';
$string['settings_s3generic_destino'] = '通用 S3（自訂端點）';
$string['settings_s3generic_endpoint'] = 'S3 端點 URL';
$string['settings_s3generic_endpoint_desc'] = '端點是您 S3 服務（相容 S3 的供應商）的基礎位址。您可以不輸入 <code>https://</code>，並可選擇是否包含連接埠。請勿包含儲存桶名稱，也不要只填服務主機名稱（以及必要時的連接埠）。<blockquote>範例：<code>https://s3.eu-central-1.amazonaws.com</code>、<code>o000.idrivee.com</code> 或 <code>minio:9000</code>。<br>請勿使用：<code><strong style="color:#673AB7;text-decoration:underline;">mybucket.</strong>s3.amazonaws.com</code> 或 <code>server:9000<strong style="color:#673AB7;text-decoration:underline;">/mybucket</strong></code>。</blockquote>';
$string['settings_success'] = '<strong>資料正確。</strong><br>請在修改設定時務必謹慎，任何不正確的變更都可能導致已儲存的檔案無法存取。';
$string['storage_destination'] = '儲存目的地';
$string['storage_destinationdesc'] = '選擇儲存目的地並儲存，以載入與儲存相關的資料。';
$string['totalfiles'] = 'MDL_FILES 中的檔案總數：<strong>{$a}</strong>';
