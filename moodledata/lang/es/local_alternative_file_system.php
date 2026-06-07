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
 * Strings for component 'local_alternative_file_system', language 'es', version '4.4'.
 *
 * @package     local_alternative_file_system
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bytescalcfailed'] = 'No se pudieron calcular los bytes (modo fast=0). Motivo: {$a}';
$string['bytesline'] = 'Bytes: <strong>{$a->migrated}</strong> / <strong>{$a->total}</strong> &nbsp;|&nbsp; Velocidad (10m): <strong>{$a->rate}/min</strong> &nbsp;|&nbsp; ETA (bytes): <strong>{$a->eta}</strong>';
$string['cachedef_missing_count'] = 'Recuento de elementos faltantes en la caché';
$string['eta'] = 'ETA: <strong>{$a}</strong>';
$string['instruction_install'] = '<p><strong>Agregue la línea de abajo al archivo <code>config.php</code> de Moodle:</strong></p><pre><code>$CFG->alternative_file_system_class = "\\local_alternative_file_system\\external_file_system";</code></pre><p><strong>Importante:</strong> inserte esta línea <strong>antes</strong> de la línea de abajo (si existe en su archivo):</p><pre><code>require_once(__DIR__ . "/lib/setup.php");</code></pre>';
$string['instruction_title'] = 'Instrucciones de instalación';
$string['lasttransfer'] = 'Última transferencia: <strong>{$a}</strong>';
$string['migrate_link'] = '<p><a class="btn btn-success" href="?execute=1">Ejecutar ahora (puede tardar mucho tiempo)</a></p>';
$string['migrate_title'] = 'Migrar el almacenamiento local al almacenamiento remoto';
$string['migrate_title_tolocal'] = 'Migrar el almacenamiento remoto al almacenamiento local';
$string['migrate_total'] = '<p>Tiene <strong>{$a->missing}</strong> archivos locales pendientes de migración, mientras que <strong>{$a->sending}</strong> archivos ya han sido migrados al entorno remoto.</p>';
$string['migrate_total_local'] = 'Mueve archivos del almacenamiento remoto de vuelta al almacenamiento local. Esto puede tardar algún tiempo, dependiendo de la cantidad de datos.';
$string['migratedfiles'] = 'Migrados: <strong>{$a}</strong>';
$string['nostoragefound'] = 'No se encontró ningún almacenamiento para informar. Verifique si la tabla local_alternativefilesystemf tiene registros.';
$string['pluginname'] = 'Sistema de archivos alternativo';
$string['privacy:no_data_reason'] = 'El plugin Sistema de archivos alternativo no almacena ningún dato personal.';
$string['rate'] = 'Velocidad: <strong>{$a->r1}</strong> archivo/min (1m) &nbsp;|&nbsp; <strong>{$a->r10}</strong> archivo/min (10m) &nbsp;|&nbsp; <strong>{$a->r60}</strong> archivo/min (60m)';
$string['remainingfiles'] = 'Restantes: <strong>{$a}</strong>';
$string['reporttitle_status'] = 'Estado';
$string['settings_bucketname'] = 'Nombre del bucket {$a->local}';
$string['settings_bucketnamedesc'] = 'El nombre único asignado al bucket en {$a->local}.';
$string['settings_gcs_keyfile'] = 'Contenido de Google-storage.json';
$string['settings_gcs_keyfiledesc'] = 'Pegue aquí el contenido del archivo "google-storage.json".';
$string['settings_local'] = 'Archivos locales en Moodle';
$string['settings_migrate_local'] = 'Use el servicio <a target="_blank" href="{$a->url}/move-to-local.php">move-to-local.php</a> para migrar datos desde {$a->local} al almacenamiento local.';
$string['settings_migrate_remote'] = 'Use el servicio <a target="_blank" href="{$a->url}/move-to-external.php">move-to-external.php</a> para migrar datos del almacenamiento local a {$a->local}.';
$string['settings_objectfs_notice'] = '<p>Actualmente, <code>$CFG->alternative_file_system_class</code> está configurado como <code>"{$a->currentclass}";</code> y esto significa que este sitio está usando actualmente <strong>tool_objectfs</strong> como el sistema de archivos alternativo de Moodle.</p>

<p>Para usar la misma configuración y no perder ningún archivo, use la siguiente configuración en este plugin:</p>
<ul>
  <li><strong>{$a->settings_local_lang}</strong>: <code>{$a->settings_local}</code></li>
  <li><strong>{$a->settings_s3_region_lang}</strong>: <code>{$a->settings_s3_region}</code></li>
  <li><strong>{$a->settings_s3_credentials_key_lang}</strong>: <code>{$a->settings_s3_credentials_key}</code></li>
  <li><strong>{$a->settings_s3_credentials_secret_lang}</strong>: <code>{$a->settings_s3_credentials_secret}</code></li>
  <li><strong>{$a->settings_bucketname_lang}</strong>: <code>{$a->settings_bucketname}</code></li>
  <li><strong>{$a->settings_path_lang}</strong>: <code>{$a->settings_path}</code></li>
</ul>

<p>Luego, primero necesita cambiar el valor en <code>config.php</code> a <code>$CFG->alternative_file_system_class = "\\local_alternative_file_system\\external_file_system";</code> para usar este plugin como el sistema de archivos alternativo.</p>';
$string['settings_path'] = 'Ruta de objetos de {$a->local}';
$string['settings_pathdesc'] = 'La ruta dentro del bucket donde se almacenarán los objetos. Solo se aceptan letras y números.';
$string['settings_s3_credentials_key'] = 'Clave de acceso de {$a->local}';
$string['settings_s3_credentials_keydesc'] = 'La clave de acceso utilizada para autenticarse con el servicio {$a->local}.';
$string['settings_s3_credentials_secret'] = 'Clave secreta de {$a->local}';
$string['settings_s3_credentials_secretdesc'] = 'La clave secreta utilizada para autenticarse con el servicio {$a->local}.';
$string['settings_s3_region'] = 'Región de {$a->local}';
$string['settings_s3_regiondesc'] = 'La región donde se encuentra el bucket de {$a->local}, por ejemplo, "{$a->ex_region}".';
$string['settings_s3generic_destino'] = 'S3 genérico (endpoint personalizado)';
$string['settings_s3generic_endpoint'] = 'URL del endpoint S3';
$string['settings_s3generic_endpoint_desc'] = 'El endpoint es la dirección base de su servicio S3 (un proveedor compatible con S3). Puede introducirlo sin <code>https://</code> y con o sin el puerto. No incluya nombres de buckets ni solo el host del servicio (y el puerto, si es necesario).<blockquote>Ejemplos: <code>https://s3.eu-central-1.amazonaws.com</code>, <code>o000.idrivee.com</code> o <code>minio:9000</code>.<br>NO use: <code><strong style="color:#673AB7;text-decoration:underline;">mybucket.</strong>s3.amazonaws.com</code> o <code>server:9000<strong style="color:#673AB7;text-decoration:underline;">/mybucket</strong></code>.</blockquote>';
$string['settings_success'] = '<strong>Los datos son correctos.</strong><br>Por favor, tenga cuidado al modificar la configuración, ya que cualquier cambio incorrecto puede hacer que los archivos almacenados queden inaccesibles.';
$string['storage_destination'] = 'Destino de almacenamiento';
$string['storage_destinationdesc'] = 'Elija el destino de almacenamiento y guarde para cargar los datos relacionados con el almacenamiento.';
$string['totalfiles'] = 'Total de archivos en MDL_FILES: <strong>{$a}</strong>';
