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
 * Strings for component 'tiny_fileimport', language 'ja', version '4.4'.
 *
 * @package     tiny_fileimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowalltypes'] = 'すべてのファイルタイプを許可する';
$string['allowalltypes_desc'] = 'この設定を有効にした場合、アップロードできるファイルフォーマットは「サイト管理 > サーバ > ファイルタイプ」に一覧表示されているものに制限されなくなります。この設定を無効にした場合、現在一覧表示されているすべてのファイルタイプがデフォルトで許可されます。';
$string['allowedextensionsoverride'] = 'ファイル拡張子オーバーライドを許可する';
$string['allowedextensionsoverride_desc'] = '任意設定です。カンマ区切り、スペース区切りまたは改行区切りの許可拡張子リストです (例: pdf, docx, xlsx, zip)。空にした場合、プラグインは「サイト管理 > サーバ > ファイルタイプ」にあるすべてのリストを使用します。「すべてのファイルタイプを許可する」が有効にされた場合、この設定は無視されます。';
$string['buttontitle'] = 'ファイルインポート';
$string['dropzonehint'] = 'ここにファイルをドラッグ&ドロップするか、クリックしてファイルを選択してください。';
$string['fileimport:use'] = 'Tinyファイルインポートを使用する';
$string['filetypenotsupported'] = 'ファイルタイプがサポートされていません。';
$string['filetypenotsupported_desc'] = 'ファイル「 {$a} 」は現在の設定でサポートされていないファイルタイプのため、アップロードできませんでした。';
$string['modaltitle'] = 'ファイルを追加する';
$string['overridedefaultfileattachmentfeature'] = 'デフォルトファイル添付機能をオーバーライドする';
$string['overridedefaultfileattachmentfeature_desc'] = 'この設定を有効にした場合、このプラグインはTinyのデフォルト添付ファイル処理の代わりにエディタ内でのドラッグ&ドロップによるアップロードを処理します。この設定を無効にした場合、エディタはイメージ等のサポート対象ファイルに関してネイティブなアップロード処理を保持します。このプラグインはデフォルトのエディタアップロードフローで処理されないファイルに対してのみ使用されます。';
$string['pluginname'] = 'ファイルインポート';
$string['privacy:metadata'] = 'Tinyファイルインポートプラグインはいかなる個人データも保存しません。';
