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
 * Strings for component 'tool_forcedcache', language 'ja', version '4.4'.
 *
 * @package     tool_forcedcache
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkforcedcache'] = '強制キャッシングが有効にされているか確認します。';
$string['config_array_parse_fail'] = '設定配列解析エラーです。配列の構文が不正な可能性があります。';
$string['config_json_missing'] = 'JSONファイルの読み込みエラーです。ファイルが存在しないか、パスが正しくないか、パスが設定されていません。';
$string['config_json_parse_fail'] = 'JSONを配列に構文解析する際にエラーが発生しました。JSON構文が不正な可能性があります。';
$string['config_json_path_invalid'] = '無効な設定パスです。パス {$a->path} が {$a->dirroot} ディレクトリの外側にあることを確認してください。
詳細は次をご覧ください: https://github.com/catalyst/moodle-tool_forcedcache#set-a-path-to-the-json-configuration';
$string['config_path_and_array'] = 'ファイルへのパスおよび設定配列の両方を検出しました。指定できるのは1つだけです。';
$string['definition_name'] = '定義';
$string['definition_not_found'] = '設定オーバーライド定義が定義されていません: {$a}';
$string['definition_overrides'] = 'オーバーライド';
$string['definition_overrides_title'] = '定義オーバーライド';
$string['page_active'] = '強制キャッシング設定は有効です。';
$string['page_config_broken'] = '強制キャッシング設定は壊れています。';
$string['page_config_broken_details'] = '報告されたエラーメッセージは次のとおりです: {$a}';
$string['page_config_ok'] = '強制キャッシング設定 OK';
$string['page_mode'] = 'モード: {$a}';
$string['page_not_active'] = '強制キャッシング設定は有効ではありません。';
$string['page_rulesets'] = 'キャッシングルール';
$string['page_status'] = '強制キャッシングステータス';
$string['page_store'] = 'ストア: {$a->name} ({$a->type})';
$string['pluginname'] = '強制キャッシング';
$string['privacy:metadata'] = '強制キャッシングプラグインはいかなる理由でもデータを保存しません。';
$string['rule_default_rule'] = 'デフォルトルール';
$string['rule_no_rulesets'] = 'このモードではルールセットは定義されていません。このモードのデフォルトストアは次のとおりです: {$a}';
$string['rule_priority'] = '優先度';
$string['rule_ruleset'] = 'ルールセット';
$string['store_bad_type'] = 'ストア {$a} の読み込み中にエラーが発生しました。ストアが存在しないか、型が不正です。';
$string['store_config'] = '名称';
$string['store_missing_fields'] = 'ストア {$a} の読み込み中にエラーが発生しました。フィールドが存在しないか、型が不正です。';
$string['store_not_ready'] = 'ストア {$a} の読み込み中にエラーが発生しました。設定が正しくないか、必須フィールドが不足している可能性があります。';
$string['store_value'] = '値';
