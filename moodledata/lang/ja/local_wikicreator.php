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
 * Strings for component 'local_wikicreator', language 'ja', version '4.4'.
 *
 * @package     local_wikicreator
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['create_pages'] = 'Wikiページを作成する';
$string['group_not_found'] = 'グループID「 {$a} 」は存在しません。';
$string['invalid_page_title'] = 'グループ「 {$a} 」のページタイトルが無効です。';
$string['invalid_settings'] = '無効な設定です。設定を確認してください。';
$string['invalid_wikiid'] = '無効なWiki IDです。';
$string['json_error'] = 'JSONデコーディングエラー: {$a}';
$string['no_pages_defined'] = '設定に定義されたページがありません。';
$string['no_valid_group'] = '有効なグループが見つかりませんでした。';
$string['page_creation_error'] = 'グループ「 {$b} 」のページ「 {$a} 」作成時にエラーが発生しました: {$c}';
$string['pluginname'] = 'Wikiクリエータ';
$string['settings_groups'] = 'グループID (カンマ区切り)';
$string['settings_pages'] = 'ページ (JSONフォーマット: {"ページタイトル": "<p>HTMLコンテンツ</p>", ...})';
$string['settings_wikiid'] = 'Wiki ID';
$string['subwiki_creation_error'] = 'グループ「 {$a} 」のサブWiki作成時にエラーが発生しました: {$b}';
$string['success_message'] = '処理成功: Wikiページが作成されました。';
$string['summary'] = '{$a->created} ページが作成されました。{$a->skipped} ページはスキップされました (すでに存在するため)。';
$string['usegroupprefix'] = 'グループ接頭辞を使用する';
$string['usegroupprefix_desc'] = 'この設定を有効にした場合、グループ名はそれぞれ作成されたページに事前定義HTMLコードを使用して接頭辞として自動追加されます。';
$string['version_creation_error'] = '「 {$a} 」のバージョン作成時にエラーが発生しました (グループ {$b}): {$c}';
$string['wikicreator'] = 'Wikiクリエータ';
