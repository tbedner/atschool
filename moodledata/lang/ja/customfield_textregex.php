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
 * Strings for component 'customfield_textregex', language 'ja', version '4.4'.
 *
 * @package     customfield_textregex
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['displaysize'] = 'フォーム入力サイズ';
$string['errorconfigdisplaysize'] = 'フォーム入力サイズは半角1文字から200文字の間にしてください。';
$string['errorconfigregex'] = '提供された正規表現は有効な正規表現ではありません。';
$string['errorregex'] = '入力された値は正規表現にマッチしません: {$a}';
$string['pluginname'] = 'ショートテキスト妥当性確認';
$string['privacy:metadata'] = 'ショートテキスト妥当性確認フィールドタイププラグインはいかなる個人データも保存しません。コアで定義されたテーブルを使用します。';
$string['regex'] = '正規表現';
$string['regex_help'] = 'フィールドの値をテストするPerl形式の正規表現です。正規表現は「必須」設定と合わせてください。もし必須でない場合、正規表現で空のフィールドも許可する必要があります。また、<a href="/admin/search.php?query=strictformsrequired">必須フィールドの厳密な妥当性確認</a>もご覧ください。次の例のように区切り文字も含めてください。例) \\"/^TEST[0-9A-F]{3}\\/\\$_postfix/\\"';
$string['specificsettings'] = 'ショートテキスト妥当性確認フィールド設定';
