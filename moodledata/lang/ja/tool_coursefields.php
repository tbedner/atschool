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
 * Strings for component 'tool_coursefields', language 'ja', version '4.4'.
 *
 * @package     tool_coursefields
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['coursefields:setfields'] = 'カテゴリ内すべてのコースのコースフィールドを設定します。';
$string['fieldisrequired'] = '<strong>このカスタムフィールドは必須に設定されています。</strong>あなたはこのツールでこのルールを上書きして、このフィールドを空の値で上書きできます。自分が何をしているのか理解している場合のみ、この操作を実施してください。';
$string['fieldisunique'] = '<strong>このカスタムフィールドは一意に設定されています。</strong>あなたはこのツールでこのルールを上書きして、このフィールドをすべて同じ値で上書きできます。自分が何をしているのか理解している場合のみ、この操作を実施してください。';
$string['overwritefield'] = '既存のフィールド値を上書きする';
$string['pluginname'] = 'コースフィールド設定';
$string['privacy:metadata'] = 'コースフィールド設定プラグインはいかなる個人データも保存しません。';
$string['setfields'] = 'コースフィールド設定';
$string['setfieldsinstruction'] = 'サブカテゴリを含むカテゴリ内すべてのコースフィールドを設定します。あなたのオプションを選択して「確認」をクリックしてください。確認後、Moodleはバックグラウンドですべてのコースフィールドを設定する「アドホックタスク」を作成します。このためにはcronが有効にされている必要があります。';
$string['updatequeued'] = 'カテゴリ「 {$a} 」のすべてのコースを更新するアドホックタスクがキューに入れられました。このタスクは次回cron実行時に実行されます。';
