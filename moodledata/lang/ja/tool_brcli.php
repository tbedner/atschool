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
 * Strings for component 'tool_brcli', language 'ja', version '4.4'.
 *
 * @package     tool_brcli
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['directoryerror'] = 'エラー: 宛先のディレクトリが存在しないか、書き込めません!';
$string['helpoptionbck'] = '特定のカテゴリのコースのバックアップを実行します。

オプション:
--categoryid=INTEGER バックアップするカテゴリIDです。
--destination=STRING バックアップファイルを保存する場所のパスです。
-h, --help このヘルプを表示します。

実行例:
sudo -u www-data /usr/bin/php admin/tool/brcli/backup.php --categoryid=1 --destination=/moodle/backup/';
$string['helpoptionres'] = '特定のフォルダに属する特定のバックアップファイルすべてをリストアします。

オプション:
--categoryid=INTEGER バックアップがリストアされるべきカテゴリIDです。
--source=STRING バックアップファイル (.mbz) が保存されている場所のパスです。
-h, --help このヘルプを表示します。

実行例:
sudo -u www-data /usr/bin/php admin/tool/brcli/restore.php --categoryid=1 --source=/moodle/backup/';
$string['invalidbackupfile'] = '無効なバックアップファイル: {$a}';
$string['noadminaccount'] = 'エラー: 管理者アカウントが見つかりませんでした!';
$string['nocategory'] = 'エラー: カテゴリが見つかりませんでした!';
$string['operationdone'] = '完了!';
$string['performingbck'] = '{$a} 件のコースのバックアップ処理中 ...';
$string['performingres'] = '{$a} 件のコースのバックアップリストア中 ...';
$string['pluginname'] = 'バックアップ&リストア コマンドラインインターフェース';
$string['unknowoption'] = '不明なオプション: {$a}';
