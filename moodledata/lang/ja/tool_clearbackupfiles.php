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
 * Strings for component 'tool_clearbackupfiles', language 'ja', version '4.4'.
 *
 * @package     tool_clearbackupfiles
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backupcompletedlog'] = 'この処理の間に合計サイズ {$a->filesize} の {$a->filecount} コースのバックアップファイルが削除されました。';
$string['backupremovedlog'] = 'サイズ {$a->filesize} のコースバックアップファイル {$a->filename} が削除されました。';
$string['clearbackupcompleted'] = 'バックアップ削除完了';
$string['continuetoclearbackup'] = '続けてバックアップを削除する';
$string['coursebackupremoved'] = 'コースバックアップが削除されました。';
$string['days'] = '日数';
$string['daysdesc'] = '削除するバックアップの日数です。';
$string['filedeletedempty'] = '削除対象のバックアップファイルはありません。';
$string['filedeletedfooter'] = '合計 {$a->filecount} 個のバックアップファイルが削除されました。同時に {$a->filesize} のサーバ領域が開放されました。';
$string['filedeletedheader'] = 'この処理で削除されたコースのバックアップファイルは以下のとおりです:';
$string['filename'] = 'ファイル名';
$string['filesize'] = 'ファイルサイズ';
$string['pluginname'] = 'バックアップファイル削除';
$string['warningalert'] = '本当に続けてもよろしいですか?';
$string['warningmsg'] = 'バックアップファイル削除は不可逆的な処理であり、削除されたバックアップファイルをリストアできないことに留意してください。';
