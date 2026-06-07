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
 * Strings for component 'local_alternative_file_system', language 'pt', version '4.4'.
 *
 * @package     local_alternative_file_system
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bytescalcfailed'] = 'Falha ao calcular bytes (modo fast=0). Motivo: {$a}';
$string['bytesline'] = 'Bytes: <strong>{$a->migrated}</strong> / <strong>{$a->total}</strong> &amp;nbsp;|&amp;nbsp; Taxa (10m): <strong>{$a->rate}/min</strong> &amp;nbsp;|&amp;nbsp; ETA (bytes): <strong>{$a->eta}</strong>';
$string['cachedef_missing_count'] = 'Contagem de itens em falta na cache';
$string['eta'] = 'ETA: <strong>{$a}</strong>';
$string['instruction_install'] = '<p><strong>Adicione a linha abaixo ao ficheiro <code>config.php</code> do Moodle:</strong></p><pre><code>$CFG->alternative_file_system_class = "\\local_alternative_file_system\\external_file_system";</code></pre><p><strong>Importante:</strong> insira esta linha <strong>antes</strong> da linha abaixo (se existir no seu ficheiro):</p><pre><code>require_once(__DIR__ . "/lib/setup.php");</code></pre>';
$string['instruction_title'] = 'Instruções de Instalação';
$string['lasttransfer'] = 'Última transferência: <strong>{$a}</strong>';
$string['migrate_link'] = '<p><a class="btn btn-success" href="?execute=1">Executar Agora (pode demorar muito tempo)</a></p>';
$string['migrate_title'] = 'Migrar armazenamento local para armazenamento remoto';
$string['migrate_title_tolocal'] = 'Migrar armazenamento remoto para armazenamento local';
$string['migrate_total'] = '<p>Tem <strong>{$a->missing}</strong> ficheiros locais a aguardar migração, enquanto <strong>{$a->sending}</strong> ficheiros já foram migrados para o ambiente remoto.</p>';
$string['migrate_total_local'] = 'Move ficheiros do armazenamento remoto de volta para o armazenamento local. Isto pode demorar algum tempo, dependendo da quantidade de dados.';
$string['migratedfiles'] = 'Migrados: <strong>{$a}</strong>';
$string['nostoragefound'] = 'Não foi encontrado armazenamento para apresentar. Verifique se a tabela local_alternativefilesystemf tem registos.';
$string['pluginname'] = 'Sistema de Ficheiros Alternativo';
$string['privacy:no_data_reason'] = 'O plugin Sistema de Ficheiros Alternativo não armazena quaisquer dados pessoais.';
$string['rate'] = 'Taxa: <strong>{$a->r1}</strong> ficheiro/min (1m) &amp;nbsp;|&amp;nbsp; <strong>{$a->r10}</strong> ficheiro/min (10m) &amp;nbsp;|&amp;nbsp; <strong>{$a->r60}</strong> ficheiro/min (60m)';
$string['remainingfiles'] = 'Restantes: <strong>{$a}</strong>';
$string['reporttitle_status'] = 'Estado';
$string['settings_bucketname'] = 'Nome do Bucket de {$a->local}';
$string['settings_bucketnamedesc'] = 'O nome único atribuído ao bucket em {$a->local}.';
$string['settings_gcs_keyfile'] = 'Conteúdo de Google-storage.json';
$string['settings_gcs_keyfiledesc'] = 'Cole aqui o conteúdo do ficheiro "google-storage.json".';
$string['settings_local'] = 'Ficheiros locais no Moodle';
$string['settings_migrate_local'] = 'Utilize o serviço <a target="_blank" href="{$a->url}/move-to-local.php">move-to-local.php</a> para migrar dados de {$a->local} para o armazenamento local.';
$string['settings_migrate_remote'] = 'Utilize o serviço <a target="_blank" href="{$a->url}/move-to-external.php">move-to-external.php</a> para migrar dados do armazenamento local para {$a->local}.';
$string['settings_objectfs_notice'] = '<p>Atualmente, <code>$CFG->alternative_file_system_class</code> está definido como <code>"{$a->currentclass}";</code> e isto significa que este site está atualmente a utilizar <strong>tool_objectfs</strong> como o sistema de ficheiros alternativo do Moodle.</p>

<p>Para utilizar as mesmas definições e não perder quaisquer ficheiros, use as seguintes definições neste plugin:</p>
<ul>
  <li><strong>{$a->settings_local_lang}</strong>: <code>{$a->settings_local}</code></li>
  <li><strong>{$a->settings_s3_region_lang}</strong>: <code>{$a->settings_s3_region}</code></li>
  <li><strong>{$a->settings_s3_credentials_key_lang}</strong>: <code>{$a->settings_s3_credentials_key}</code></li>
  <li><strong>{$a->settings_s3_credentials_secret_lang}</strong>: <code>{$a->settings_s3_credentials_secret}</code></li>
  <li><strong>{$a->settings_bucketname_lang}</strong>: <code>{$a->settings_bucketname}</code></li>
  <li><strong>{$a->settings_path_lang}</strong>: <code>{$a->settings_path}</code></li>
</ul>

<p>Depois, primeiro precisa de alterar o valor em <code>config.php</code> para <code>$CFG->alternative_file_system_class = "\\local_alternative_file_system\\external_file_system";</code> para utilizar este plugin como o sistema de ficheiros alternativo.</p>';
$string['settings_path'] = 'Caminho do Objeto de {$a->local}';
$string['settings_pathdesc'] = 'O caminho dentro do bucket onde os objetos serão armazenados. Apenas são aceites letras e números.';
$string['settings_s3_credentials_key'] = 'Chave de Acesso de {$a->local}';
$string['settings_s3_credentials_keydesc'] = 'A chave de acesso utilizada para autenticar com o serviço {$a->local}.';
$string['settings_s3_credentials_secret'] = 'Chave Secreta de {$a->local}';
$string['settings_s3_credentials_secretdesc'] = 'A chave secreta utilizada para autenticar com o serviço {$a->local}.';
$string['settings_s3_region'] = 'Região de {$a->local}';
$string['settings_s3_regiondesc'] = 'A região onde o bucket de {$a->local} está localizado, por exemplo, "{$a->ex_region}".';
$string['settings_s3generic_destino'] = 'S3 genérico (endpoint personalizado)';
$string['settings_s3generic_endpoint'] = 'URL do endpoint S3';
$string['settings_s3generic_endpoint_desc'] = 'O endpoint é o endereço base do seu serviço S3 (um fornecedor compatível com S3). Pode introduzi-lo sem <code>https://</code> e com ou sem a porta. Não inclua nomes de buckets, nem apenas o anfitrião do serviço (e a porta, se necessário).<blockquote>Exemplos: <code>https://s3.eu-central-1.amazonaws.com</code>, <code>o000.idrivee.com</code> ou <code>minio:9000</code>.<br>NÃO use: <code><strong style="color:#673AB7;text-decoration:underline;">mybucket.</strong>s3.amazonaws.com</code> ou <code>server:9000<strong style="color:#673AB7;text-decoration:underline;">/mybucket</strong></code>.</blockquote>';
$string['settings_success'] = '<strong>Os dados estão corretos.</strong><br>Tenha cuidado ao modificar as definições, pois quaisquer alterações incorretas podem resultar na inacessibilidade dos ficheiros armazenados.';
$string['storage_destination'] = 'Destino de armazenamento';
$string['storage_destinationdesc'] = 'Escolha o destino de armazenamento e guarde para carregar os dados relacionados com o armazenamento.';
$string['totalfiles'] = 'Total de ficheiros em MDL_FILES: <strong>{$a}</strong>';
