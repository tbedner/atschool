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
 * Strings for component 'logstore_caliper', language 'ja', version '4.4'.
 *
 * @package     logstore_caliper
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'APIキー';
$string['batchsize'] = 'バッチサイズ';
$string['batchsize_desc'] = 'バッチモードで一度に送信するイベントの最大数です。';
$string['endpoint'] = 'イベントストアURL';
$string['immediatemode'] = 'ステートメントを即座にイベントストアに送信しますか?';
$string['immediatemode_desc'] = 'これはMoodleはcronタスクによるバックグラウンドバッチモードではなく、発生したステートメントをイベントストアに送信します。これにより処理はリアルタイムに近づきますが、イベントストアのレスポンスタイムに連動して予測不可能なMoodleパフォーマンスを引き起こす可能性があります。';
$string['pluginname'] = 'Caliperログストア';
$string['settings'] = '一般設定';
$string['submit'] = '送信';
$string['taskemit'] = 'イベントストアにレコードを送信する';
