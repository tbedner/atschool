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
 * Strings for component 'repository_upload', language 'bg', version '4.4'.
 *
 * @package     repository_upload
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configplugin'] = 'Конфигурация за добавката за качване';
$string['pluginname'] = 'Качване на файл';
$string['pluginname_help'] = 'Качване на файл в Moodle';
$string['upload:view'] = 'Използвайте качване чрез Избиране на файл';
$string['upload_error_cant_write'] = 'Неуспех при запис на диск.';
$string['upload_error_extension'] = 'PHP разширение спря качването на файла.';
$string['upload_error_form_size'] = 'Качваният файл превишава  MAX_FILE_SIZE от HTML директивата на формата.';
$string['upload_error_ini_size'] = 'Качваният файл превишава стойността upload_max_filesize, зададена в php.ini.';
$string['upload_error_invalid_file'] = '"{$a}" е празен файл или директория. За да качите директория, първо я архивирайте в zip файл.';
$string['upload_error_no_file'] = 'Не са качени файлове.';
$string['upload_error_no_tmp_dir'] = 'PHP няма временна директория.';
$string['upload_error_partial'] = 'Файлове не се качени целите.';
