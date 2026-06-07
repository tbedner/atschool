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
 * Strings for component 'tool_httpsreplace', language 'ja', version '4.4'.
 *
 * @package     tool_httpsreplace
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['complete'] = '完了';
$string['count'] = '埋め込みコンテンツアイテム数';
$string['disclaimer'] = '私はこの操作のリスクを理解しています。';
$string['doclink'] = 'HTTPS変換ツール';
$string['doit'] = '置換を実行する';
$string['domain'] = '問題のあるドメイン';
$string['domainexplain'] = 'インスタンスがHTTPからHTTPSに移転した場合、すべての埋め込みHTTPコンテンツは動作しなくなります。あなたはこのツールでHTTPコンテンツをHTTPSに自動的に変換することができます。

変換を実行する前、変換後に動作しないURLを探すためコンテンツがスキャンされます。あなたはそれぞれHTTPSを利用できるか確認または代替リソースを探せます。';
$string['domainexplainhelp'] = 'あなたのコンテンツの中でこれらのドメインが見つかりましたがHTTPSコンテンツをサポートしていないようです。HTTPSにスイッチした場合、これらのサイトからのMoodle内コンテンツは安全な最新のブラウザではユーザに表示されなくなります。これらのサイトは一時的または永続的に利用できなくなりセキュリティ設定でも動作しなくなる可能性があります。これらの結果を確認した後、この外部コンテンツは重要ではないと判断した場合のみ続行してください。注意: HTTPSにスイッチした場合、このコンテンツは動作しなくなります。';
$string['httpwarning'] = 'このインスタンスはHTTPで動作しています。あなたはこのツールを実行して外部コンテンツをHTTPSに変更することができますが内部コンテンツはHTTPのままとなります。あなたはHTTPSにスイッチした後に内部コンテンツを変換するため再度このスクリプトを実行する必要があります。';
$string['notimplemented'] = '申し訳ございません、この機能はあなたのデータベースドライバには実装されていません。';
$string['oktoprocede'] = 'スキャンした結果、あなたのコンテンツに問題は見つかりませんでした。あなたはすべてのHTTPコンテンツがHTTPSを使用するようアップグレードを進めることができます。';
$string['pageheader'] = '外部コンテンツURLをHTTPSにアップグレードする';
$string['pluginname'] = 'HTTPS変換ツール';
$string['privacy:metadata'] = 'HTTPS変換ツールプラグインはいかなる個人データも保存しません。';
$string['replacing'] = 'HTTPコンテンツのHTTPSへの置換中 ...';
$string['searching'] = '検索 {$a}';
$string['takeabackupwarning'] = 'このツールを実行した場合、変更を元に戻すことはできません。正しくないコンテンツが置換されてしまうという小さなリスクがあるため、このスクリプトを実行する前に完全なバックアップを取ってください。';
$string['toolintro'] = 'あなたのサイトのHTTPSへの変換を計画している場合、埋め込みコンテンツをHTTPSに変換するため<a href="{$a}">HTTPS変換ツール</a>を使用することができます。';
