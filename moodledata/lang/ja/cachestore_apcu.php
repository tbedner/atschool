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
 * Strings for component 'cachestore_apcu', language 'ja', version '4.4'.
 *
 * @package     cachestore_apcu
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clusternotice'] = 'APCuはシングルノードのサイトまたはローカルに保存できるキャッシュにのみ適した選択であることに留意してください。さらなる情報は<a href="{$a}">APCユーザキャッシュドキュメンテーション</a>をご覧ください。';
$string['notice'] = '通知';
$string['pluginname'] = 'APCユーザキャッシュ (APCu)';
$string['prefix'] = '接頭辞';
$string['prefix_help'] = '上記の接頭辞はAPCストアインスタンスに保存されるすべてのキーに使用されます。デフォルトではデータベース接頭辞が使用されます。';
$string['prefixinvalid'] = 'あなたが選択した接頭辞は有効ではありません。あなたは「a-z A-Z 0-9-_」のみ使用することができます。';
$string['prefixnotunique'] = 'あなたが選択した接頭辞はユニークではありません。ユニークな接頭辞を選択してください。';
$string['privacy:metadata'] = 'APCユーザキャッシュ (APCu) プラグインはキャッシング機能の一部として短時間だけデータを保存します。しかし、データは定期的に削除されて決して外部に送信されることはありません。';
$string['testperformance'] = 'テストパフォーマンス';
$string['testperformance_desc'] = 'APCuを有効にした場合、テストパフォーマンスページ閲覧時にパフォーマンスが含まれます。この設定を実稼働サイトで有効にすることはお勧めできません。';
