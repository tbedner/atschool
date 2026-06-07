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
 * Strings for component 'local_lockgrades', language 'ja', version '4.4'.
 *
 * @package     local_lockgrades
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backtoform'] = 'フォームに戻る';
$string['error_invalididnumber'] = '指定されたカテゴリIDナンバが見つかりませんでした。';
$string['error_noidnumber'] = '有効なIDを入力してください。';
$string['idnumber'] = 'カテゴリID';
$string['lock_success'] = '評定が正常にロックされました。';
$string['lockgrades'] = '評定ロック';
$string['lockgrades:manage'] = '評定ロックプラグインを管理する';
$string['lockgrades_info'] = '<strong>重要注意事項:</strong><br>
あなたが評定をロックした場合、Moodleは評定表に警告メッセージおよび「再計算する」ボタンを表示する場合があります。<br>
<ul>
<li>このメッセージは評定ロックされている限り活動経由で変更された評定が反映されないことを意味します。</li>
<li>あなたが「再計算する」ボタンを使用した場合、ロックされた項目を含むすべての項目の評定を更新できます。</li>
<li>このボタンは慎重に使用してください: 強制的な変更はロック済み評定を上書きするため、不一致を引き起こす可能性があります。</li>
</ul>
この動作は正常であり、Moodleでの評定管理を保護するためのものです。';
$string['pluginname'] = '評定ロック';
$string['privacy:metadata'] = '評定ロックローカルプラグインは評定のみをロックします (ユーザデータは使用しません)。';
$string['unlock_success'] = '評定が正常にロック解除されました。';
$string['unlockgrades'] = '評定をロック解除する';
