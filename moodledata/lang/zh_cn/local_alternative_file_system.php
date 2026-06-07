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
 * Strings for component 'local_alternative_file_system', language 'zh_cn', version '4.4'.
 *
 * @package     local_alternative_file_system
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bytescalcfailed'] = '无法计算字节（fast=0 模式）。原因：{$a}';
$string['bytesline'] = '字节：<strong>{$a->migrated}</strong> / <strong>{$a->total}</strong> &nbsp;|&nbsp; 速率（10 分钟）：<strong>{$a->rate}/分钟</strong> &nbsp;|&nbsp; 预计完成时间（字节）：<strong>{$a->eta}</strong>';
$string['cachedef_missing_count'] = '缓存缺失计数';
$string['eta'] = '预计完成时间：<strong>{$a}</strong>';
$string['instruction_install'] = '<p><strong>将下面这一行添加到 Moodle 的 <code>config.php</code> 文件中：</strong></p><pre><code>$CFG->alternative_file_system_class = "\\local_alternative_file_system\\external_file_system";</code></pre><p><strong>重要：</strong>请将此行插入到下面这一行<strong>之前</strong>（如果你的文件中存在该行）：</p><pre><code>require_once(__DIR__ . "/lib/setup.php");</code></pre>';
$string['instruction_title'] = '安装说明';
$string['lasttransfer'] = '上次传输：<strong>{$a}</strong>';
$string['migrate_link'] = '<p><a class="btn btn-success" href="?execute=1">立即执行（可能需要很长时间）</a></p>';
$string['migrate_title'] = '将本地存储迁移到远程存储';
$string['migrate_title_tolocal'] = '将远程存储迁移到本地存储';
$string['migrate_total'] = '<p>你有 <strong>{$a->missing}</strong> 个本地文件等待迁移，同时已有 <strong>{$a->sending}</strong> 个文件迁移到远程环境。</p>';
$string['migrate_total_local'] = '将文件从远程存储移回本地存储。根据数据量不同，这可能需要一些时间。';
$string['migratedfiles'] = '已迁移：<strong>{$a}</strong>';
$string['nostoragefound'] = '未找到可报告的存储。请检查表 local_alternativefilesystemf 是否有记录。';
$string['pluginname'] = '替代文件系统';
$string['privacy:no_data_reason'] = 'Alternative File System 插件不存储任何个人数据。';
$string['rate'] = '速率：<strong>{$a->r1}</strong> 文件/分钟（1 分钟） &nbsp;|&nbsp; <strong>{$a->r10}</strong> 文件/分钟（10 分钟） &nbsp;|&nbsp; <strong>{$a->r60}</strong> 文件/分钟（60 分钟）';
$string['remainingfiles'] = '剩余：<strong>{$a}</strong>';
$string['reporttitle_status'] = '状态';
$string['settings_bucketname'] = '{$a->local} 存储桶名称';
$string['settings_bucketnamedesc'] = '在 {$a->local} 中分配给存储桶的唯一名称。';
$string['settings_gcs_keyfile'] = 'Google-storage.json 内容';
$string['settings_gcs_keyfiledesc'] = '在此处粘贴“google-storage.json”文件的内容。';
$string['settings_local'] = 'Moodle 中的本地文件';
$string['settings_migrate_local'] = '使用 <a target="_blank" href="{$a->url}/move-to-local.php">move-to-local.php</a> 服务将数据从 {$a->local} 迁移到本地存储。';
$string['settings_migrate_remote'] = '使用 <a target="_blank" href="{$a->url}/move-to-external.php">move-to-external.php</a> 服务将数据从本地存储迁移到 {$a->local}。';
$string['settings_objectfs_notice'] = '<p>当前，<code>$CFG->alternative_file_system_class</code> 被设置为 <code>"{$a->currentclass}";</code>，这意味着此站点目前使用 <strong>tool_objectfs</strong> 作为 Moodle 的替代文件系统。</p>

<p>要使用相同的设置并且不丢失任何文件，请在此插件中使用以下设置：</p>
<ul>
  <li><strong>{$a->settings_local_lang}</strong>：<code>{$a->settings_local}</code></li>
  <li><strong>{$a->settings_s3_region_lang}</strong>：<code>{$a->settings_s3_region}</code></li>
  <li><strong>{$a->settings_s3_credentials_key_lang}</strong>：<code>{$a->settings_s3_credentials_key}</code></li>
  <li><strong>{$a->settings_s3_credentials_secret_lang}</strong>：<code>{$a->settings_s3_credentials_secret}</code></li>
  <li><strong>{$a->settings_bucketname_lang}</strong>：<code>{$a->settings_bucketname}</code></li>
  <li><strong>{$a->settings_path_lang}</strong>：<code>{$a->settings_path}</code></li>
</ul>

<p>然后，首先需要在 <code>config.php</code> 中将该值更改为 <code>$CFG->alternative_file_system_class = "\\local_alternative_file_system\\external_file_system";</code>，以便使用此插件作为替代文件系统。</p>';
$string['settings_path'] = '{$a->local} 对象路径';
$string['settings_pathdesc'] = '对象在存储桶内的存储路径。仅接受字母和数字。';
$string['settings_s3_credentials_key'] = '{$a->local} 访问密钥';
$string['settings_s3_credentials_keydesc'] = '用于与 {$a->local} 服务进行身份验证的访问密钥。';
$string['settings_s3_credentials_secret'] = '{$a->local} 密钥';
$string['settings_s3_credentials_secretdesc'] = '用于与 {$a->local} 服务进行身份验证的密钥。';
$string['settings_s3_region'] = '{$a->local} 区域';
$string['settings_s3_regiondesc'] = '{$a->local} 存储桶所在的区域，例如“{$a->ex_region}”。';
$string['settings_s3generic_destino'] = '通用 S3（自定义端点）';
$string['settings_s3generic_endpoint'] = 'S3 端点 URL';
$string['settings_s3generic_endpoint_desc'] = '端点是你的 S3 服务（兼容 S3 的提供商）的基础地址。你可以输入不带 <code>https://</code> 的地址，并可带或不带端口。不要包含存储桶名称，也不要只填写服务主机（以及需要时的端口）。<blockquote>示例：<code>https://s3.eu-central-1.amazonaws.com</code>、<code>o000.idrivee.com</code> 或 <code>minio:9000</code>。<br>请勿使用：<code><strong style="color:#673AB7;text-decoration:underline;">mybucket.</strong>s3.amazonaws.com</code> 或 <code>server:9000<strong style="color:#673AB7;text-decoration:underline;">/mybucket</strong></code>。</blockquote>';
$string['settings_success'] = '<strong>数据正确。</strong><br>修改设置时请务必谨慎，因为任何不正确的更改都可能导致已存储文件无法访问。';
$string['storage_destination'] = '存储目标';
$string['storage_destinationdesc'] = '选择存储目标并保存，以加载与存储相关的数据。';
$string['totalfiles'] = 'MDL_FILES 中的文件总数：<strong>{$a}</strong>';
