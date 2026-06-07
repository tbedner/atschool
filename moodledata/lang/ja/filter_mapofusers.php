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
 * Strings for component 'filter_mapofusers', language 'ja', version '4.4'.
 *
 * @package     filter_mapofusers
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_locationdata'] = 'mapofusersフィルタ用ロケーションデータキャッシュ';
$string['errormsg'] = 'filter_mapofusersのパラメータが不正です。あなたの構文をご確認ください。';
$string['filtername'] = 'ユーザ地図';
$string['labeltext'] = 'ピンラベル用HTML';
$string['labeltext_desc'] = 'このHTMLは地図上のピン用ラベルとして使用されます。
<ul>
<li>あなたは「 {firstname} 」および「 {lastname} 」のようなプレースホルダを使用してユーザの任意の値を含めます。</li>
<li>カスタムプロフィールフィールドには次を使用してください:  {profile_[customfieldname]}</li>
<li>ユーザロケーションには次を使用してください: {location}</li>
<li>ユーザフルネームにはプロファイルにリンクする次を使用してください: {userlink}</li>
</ul>';
$string['mapconfig'] = 'Leafletマップ設定';
$string['mapconfig_desc'] = 'この設定はleaflet.jsマップ設定に使用されます。有効なJSONである必要があります。詳細はleaflet.js、AIまたはお好みの情報源をご覧ください。不明な場合、デフォルトのままにしてください。';
$string['pinimage'] = 'ピンイメージ';
$string['pinimage_desc'] = '地図上のピンとして使用する代替イメージを任意でアップロードしてください。イメージは小さく、理想的には25×41ピクセルである必要があります。';
$string['privacy:metadata'] = 'ユーザ地図プラグインはいかなる個人データも保存しません。';
