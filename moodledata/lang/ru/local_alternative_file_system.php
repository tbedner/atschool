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
 * Strings for component 'local_alternative_file_system', language 'ru', version '4.4'.
 *
 * @package     local_alternative_file_system
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bytescalcfailed'] = 'Не удалось вычислить байты (режим fast=0). Причина: {$a}';
$string['bytesline'] = 'Байты: <strong>{$a->migrated}</strong> / <strong>{$a->total}</strong> &amp;nbsp;|&amp;nbsp; Скорость (10 м): <strong>{$a->rate}/мин</strong> &amp;nbsp;|&amp;nbsp; Оставшееся время (байты): <strong>{$a->eta}</strong>';
$string['cachedef_missing_count'] = 'Количество отсутствующих (кэш)';
$string['eta'] = 'Оставшееся время: <strong>{$a}</strong>';
$string['instruction_install'] = '<p><strong>Ниже добавьте строку в файл Moodle <code>config.php</code>:</strong></p><pre><code>$CFG->alternative_file_system_class = "\\local_alternative_file_system\\external_file_system";</code></pre><p><strong>Важно:</strong> ниже вставьте эту строку <strong>перед</strong> строкой (если она существует в вашем файле):</p><pre><code>require_once(__DIR__ . "/lib/setup.php");</code></pre>';
$string['instruction_title'] = 'Инструкции по установке';
$string['lasttransfer'] = 'Последняя передача: <strong>{$a}</strong>';
$string['migrate_link'] = '<p><a class="btn btn-success" href="?execute=1">Выполнить сейчас (может занять много времени)</a></p>';
$string['migrate_title'] = 'Перенос локального хранилища в отдалённое хранилище';
$string['migrate_title_tolocal'] = 'Перенос отдалённого хранилища в локальное хранилище';
$string['migrate_total'] = '<p>У вас <strong>{$a->missing}</strong> локальных файлов, ожидающих переноса, при этом <strong>{$a->sending}</strong> файлов уже перенесены в отдалённую среду.</p>';
$string['migrate_total_local'] = 'Перемещает файлы из отдалённого хранилища обратно в локальное. Это может занять некоторое время в зависимости от объёма данных.';
$string['migratedfiles'] = 'Перенесено: <strong>{$a}</strong>';
$string['nostoragefound'] = 'Хранилище для отчёта не найдено. Проверьте, есть ли записи в таблице local_alternativefilesystemf.';
$string['pluginname'] = 'Альтернативная файловая система';
$string['privacy:no_data_reason'] = 'Плагин «Альтернативная файловая система» не хранит никаких персональных данных.';
$string['rate'] = 'Скорость: <strong>{$a->r1}</strong> файл/мин (1 м) &amp;nbsp;|&amp;nbsp; <strong>{$a->r10}</strong> файл/мин (10 м) &amp;nbsp;|&amp;nbsp; <strong>{$a->r60}</strong> файл/мин (60 м)';
$string['remainingfiles'] = 'Осталось: <strong>{$a}</strong>';
$string['reporttitle_status'] = 'Статус';
$string['settings_bucketname'] = 'Имя бакета {$a->local}';
$string['settings_bucketnamedesc'] = 'Уникальное имя, назначенное корзине в {$a->local}.';
$string['settings_gcs_keyfile'] = 'Содержимое Google-storage.json';
$string['settings_gcs_keyfiledesc'] = 'Вставьте сюда содержимое файла "google-storage.json".';
$string['settings_local'] = 'Локальные файлы в Moodle';
$string['settings_migrate_local'] = 'Использовать сервис <a target="_blank" href="{$a->url}/move-to-local.php">move-to-local.php</a> для переноса данных из {$a->local} в локальное хранилище.';
$string['settings_migrate_remote'] = 'Использовать сервис <a target="_blank" href="{$a->url}/move-to-external.php">move-to-external.php</a> для переноса данных из локального хранилища в {$a->local}.';
$string['settings_objectfs_notice'] = '<p>В настоящее время <code>$CFG->alternative_file_system_class</code> установлен в <code>"{$a->currentclass}";</code>, и это означает, что этот сайт сейчас использует <strong>tool_objectfs</strong> в качестве альтернативной файловой системы Moodle.</p>

<p>Чтобы использовать те же настройки и не потерять файлы, укажите в этом плагине следующие параметры:</p>
<ul>
  <li><strong>{$a->settings_local_lang}</strong>: <code>{$a->settings_local}</code></li>
  <li><strong>{$a->settings_s3_region_lang}</strong>: <code>{$a->settings_s3_region}</code></li>
  <li><strong>{$a->settings_s3_credentials_key_lang}</strong>: <code>{$a->settings_s3_credentials_key}</code></li>
  <li><strong>{$a->settings_s3_credentials_secret_lang}</strong>: <code>{$a->settings_s3_credentials_secret}</code></li>
  <li><strong>{$a->settings_bucketname_lang}</strong>: <code>{$a->settings_bucketname}</code></li>
  <li><strong>{$a->settings_path_lang}</strong>: <code>{$a->settings_path}</code></li>
</ul>

<p>Затем,  сначала нужно изменить значение в <code>config.php</code> на <code>$CFG->alternative_file_system_class = "\\local_alternative_file_system\\external_file_system";</code>, чтобы использовать этот плагин в качестве альтернативной файловой системы.</p>';
$string['settings_path'] = 'Путь объекта {$a->local}';
$string['settings_pathdesc'] = 'Путь внутри корзины, где будут храниться объекты. Допускаются только буквы и цифры.';
$string['settings_s3_credentials_key'] = 'Ключ доступа {$a->local}';
$string['settings_s3_credentials_keydesc'] = 'Ключ доступа, используемый для аутентификации в сервисе {$a->local}.';
$string['settings_s3_credentials_secret'] = 'Секретный ключ {$a->local}';
$string['settings_s3_credentials_secretdesc'] = 'Секретный ключ, используемый для аутентификации в сервисе {$a->local}.';
$string['settings_s3_region'] = 'Регион {$a->local}';
$string['settings_s3_regiondesc'] = 'Регион, в котором расположена корзина {$a->local}, например "{$a->ex_region}".';
$string['settings_s3generic_destino'] = 'Универсальный S3 (пользовательская конечная точка)';
$string['settings_s3generic_endpoint'] = 'URL конечной точки S3';
$string['settings_s3generic_endpoint_desc'] = 'Конечная точка — это базовый адрес вашего S3-сервиса (провайдера, совместимого с S3). Вы можете указать его без <code>https://</code> (с портом или без него). Не включайте имена корзин и указывайте только хост сервиса (и порт, если нужно).<blockquote>Примеры: <code>https://s3.eu-central-1.amazonaws.com</code>, <code>o000.idrivee.com</code> или <code>minio:9000</code>.<br>НЕ используйте: <code><strong style="color:#673AB7;text-decoration:underline;">mybucket.</strong>s3.amazonaws.com</code> или <code>server:9000<strong style="color:#673AB7;text-decoration:underline;">/mybucket</strong></code>.</blockquote>';
$string['settings_success'] = '<strong>Данные корректны.</strong><br>Пожалуйста, будьте осторожны при изменении настроек, так как любые неверные изменения могут привести к недоступности сохранённых файлов.';
$string['storage_destination'] = 'Назначение хранилища';
$string['storage_destinationdesc'] = 'Выберите назначение хранилища и сохраните, чтобы загрузить данные, связанные с хранилищем.';
$string['totalfiles'] = 'Всего файлов в MDL_FILES: <strong>{$a}</strong>';
