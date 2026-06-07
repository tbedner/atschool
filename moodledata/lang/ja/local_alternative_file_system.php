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
 * Strings for component 'local_alternative_file_system', language 'ja', version '4.4'.
 *
 * @package     local_alternative_file_system
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bytescalcfailed'] = 'バイト数の計算に失敗しました（fast=0 モード）。理由: {$a}';
$string['bytesline'] = 'バイト数: <strong>{$a->migrated}</strong> / <strong>{$a->total}</strong> &amp;nbsp;|&amp;nbsp; 速度（10分）: <strong>{$a->rate}/分</strong> &amp;nbsp;|&amp;nbsp; 推定完了時間（バイト）: <strong>{$a->eta}</strong>';
$string['cachedef_missing_count'] = 'キャッシュの不足数';
$string['eta'] = '推定完了時間（ETA）: <strong>{$a}</strong>';
$string['instruction_install'] = '<p><strong>以下の行を Moodle の <code>config.php</code> ファイルに追加してください:</strong></p><pre><code>$CFG->alternative_file_system_class = "\\\\local_alternative_file_system\\\\external_file_system";</code></pre><p><strong>重要:</strong>（ファイル内に存在する場合）次の行の <strong>前</strong> にこの行を挿入してください:</p><pre><code>require_once(__DIR__ . "/lib/setup.php");</code></pre>';
$string['instruction_title'] = 'インストール手順';
$string['lasttransfer'] = '最終転送: <strong>{$a}</strong>';
$string['migrate_link'] = '<p><a class="btn btn-success" href="?execute=1">今すぐ実行（長時間かかる場合があります）</a></p>';
$string['migrate_title'] = 'ローカルストレージをリモートストレージへ移行';
$string['migrate_title_tolocal'] = 'リモートストレージをローカルストレージへ移行';
$string['migrate_total'] = '<p>移行待ちのローカルファイルが <strong>{$a->missing}</strong> 件あり、<strong>{$a->sending}</strong> 件のファイルはすでにリモート環境へ移行済みです。</p>';
$string['migrate_total_local'] = 'ファイルをリモートストレージからローカルストレージへ戻します。データ量によっては時間がかかる場合があります。';
$string['migratedfiles'] = '移行済み: <strong>{$a}</strong>';
$string['nostoragefound'] = '報告するストレージが見つかりません。テーブル local_alternativefilesystemf にレコードがあるか確認してください。';
$string['pluginname'] = '代替ファイルシステム';
$string['privacy:no_data_reason'] = 'Alternative File System プラグインは個人データを保存しません。';
$string['rate'] = '速度: <strong>{$a->r1}</strong> ファイル/分（1分） &amp;nbsp;|&amp;nbsp; <strong>{$a->r10}</strong> ファイル/分（10分） &amp;nbsp;|&amp;nbsp; <strong>{$a->r60}</strong> ファイル/分（60分）';
$string['remainingfiles'] = '残り: <strong>{$a}</strong>';
$string['reporttitle_status'] = 'ステータス';
$string['settings_bucketname'] = '{$a->local} バケット名';
$string['settings_bucketnamedesc'] = '{$a->local} 内でバケットに割り当てられた一意の名前。';
$string['settings_gcs_keyfile'] = 'Google-storage.json の内容';
$string['settings_gcs_keyfiledesc'] = '"google-storage.json" ファイルの内容をここに貼り付けてください。';
$string['settings_local'] = 'Moodle 内のローカルファイル';
$string['settings_migrate_local'] = '{$a->local} からローカルストレージへデータを移行するには、<a target="_blank" href="{$a->url}/move-to-local.php">move-to-local.php</a> サービスを使用してください。';
$string['settings_migrate_remote'] = 'ローカルストレージから {$a->local} へデータを移行するには、<a target="_blank" href="{$a->url}/move-to-external.php">move-to-external.php</a> サービスを使用してください。';
$string['settings_objectfs_notice'] = '<p>現在、<code>$CFG->alternative_file_system_class</code> は <code>"{$a->currentclass}";</code> に設定されており、これはこのサイトが現在 Moodle の代替ファイルシステムとして <strong>tool_objectfs</strong> を使用していることを意味します。</p>

<p>同じ設定を使用してファイルを失わないようにするには、このプラグインで次の設定を使用してください:</p>
<ul>
  <li><strong>{$a->settings_local_lang}</strong>: <code>{$a->settings_local}</code></li>
  <li><strong>{$a->settings_s3_region_lang}</strong>: <code>{$a->settings_s3_region}</code></li>
  <li><strong>{$a->settings_s3_credentials_key_lang}</strong>: <code>{$a->settings_s3_credentials_key}</code></li>
  <li><strong>{$a->settings_s3_credentials_secret_lang}</strong>: <code>{$a->settings_s3_credentials_secret}</code></li>
  <li><strong>{$a->settings_bucketname_lang}</strong>: <code>{$a->settings_bucketname}</code></li>
  <li><strong>{$a->settings_path_lang}</strong>: <code>{$a->settings_path}</code></li>
</ul>

<p>その後、このプラグインを代替ファイルシステムとして使用するために、まず <code>config.php</code> 内の値を <code>$CFG->alternative_file_system_class = "\\\\local_alternative_file_system\\\\external_file_system";</code> に変更する必要があります。</p>';
$string['settings_path'] = '{$a->local} オブジェクトパス';
$string['settings_pathdesc'] = 'オブジェクトを保存するバケット内のパス。英数字のみ使用できます。';
$string['settings_s3_credentials_key'] = '{$a->local} アクセスキー';
$string['settings_s3_credentials_keydesc'] = '{$a->local} サービスで認証するために使用するアクセスキー。';
$string['settings_s3_credentials_secret'] = '{$a->local} シークレットキー';
$string['settings_s3_credentials_secretdesc'] = '{$a->local} サービスで認証するために使用するシークレットキー。';
$string['settings_s3_region'] = '{$a->local} リージョン';
$string['settings_s3_regiondesc'] = '{$a->local} バケットが配置されているリージョン（例: "{$a->ex_region}"）。';
$string['settings_s3generic_destino'] = '汎用 S3（カスタムエンドポイント）';
$string['settings_s3generic_endpoint'] = 'S3 エンドポイント URL';
$string['settings_s3generic_endpoint_desc'] = 'エンドポイントは S3 サービス（S3 互換プロバイダー）のベースアドレスです。<code>https://</code> を付けても付けなくても、またポート番号あり／なしのどちらでも入力できます。バケット名は含めず、サービスのホスト（必要に応じてポート）だけを指定してください。<blockquote>例: <code>https://s3.eu-central-1.amazonaws.com</code>、<code>o000.idrivee.com</code>、または <code>minio:9000</code>。<br>使用しないでください: <code><strong style="color:#673AB7;text-decoration:underline;">mybucket.</strong>s3.amazonaws.com</code> または <code>server:9000<strong style="color:#673AB7;text-decoration:underline;">/mybucket</strong></code>。</blockquote>';
$string['settings_success'] = '<strong>データは正しいです。</strong><br>設定を変更する際は注意してください。誤った変更を行うと、保存されたファイルにアクセスできなくなる可能性があります。';
$string['storage_destination'] = '保存先ストレージ';
$string['storage_destinationdesc'] = '保存先ストレージを選択して保存すると、ストレージ関連データが読み込まれます。';
$string['totalfiles'] = 'MDL_FILES 内の総ファイル数: <strong>{$a}</strong>';
