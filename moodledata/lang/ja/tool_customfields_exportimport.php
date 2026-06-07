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
 * Strings for component 'tool_customfields_exportimport', language 'ja', version '4.4'.
 *
 * @package     tool_customfields_exportimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = '操作';
$string['category'] = 'カテゴリ';
$string['categoryalreadyexists'] = '名称「 {$a} 」のカテゴリはすでに存在しています。';
$string['categorynameexists'] = '名称「 {$a} 」のカテゴリはすでに存在しています。';
$string['cli_export_failed'] = 'ファイルへの書き込みに失敗しました: {$a}';
$string['cli_export_success'] = 'エクスポートに成功しました: {$a}';
$string['cli_import_failed'] = 'インポートに失敗しました: {$a}';
$string['cli_import_invalidfile'] = 'エラー: {$a} にあるファイルを読み込めません。';
$string['cli_import_invalidjson'] = 'JSONデータの「type」が不正または欠落しています。';
$string['cli_import_success'] = '次のタイプのインポートを成功しました: {$a}';
$string['clihelp'] = 'カスタムフィールドまたはユーザプロファイルフィールドをエクスポートします (JSONフォーマット) 。

オプション:
-h, --help          {$a->help}
-t, --type          {$a->type}
-c, --categoryid    {$a->categoryid}
-f, --fieldid       {$a->fieldid}
-d, --destination   {$a->destination}

例:
\\$php export.php --type=profile --categoryid=1
\\$php export.php --type=course --categoryid=2 --fieldid=5';
$string['clihelp_categoryid'] = 'エクスポートするカテゴリのIDです。';
$string['clihelp_destination'] = '(任意) JSONファイルの保存先ディレクトリです (デフォルト: 現在のディレクトリ)。';
$string['clihelp_fieldid'] = '(任意) エクスポートする単一フィールドのIDです。';
$string['clihelp_help'] = 'このヘルプを表示します。';
$string['clihelp_import'] = 'JSONファイルからカスタムフィールドまたはプロファイルフィールドをインポートします。

オプション:
-h, --help      {$a->help}
-f, --file      {$a->file}

例:
$php import.php --file=/path/to/fields.json';
$string['clihelp_import_file'] = 'インポートするJSONファイルのパスです。';
$string['clihelp_import_help'] = 'このヘルプを表示します。';
$string['clihelp_type'] = 'フィールドタイプ: プロファイル, コース, コーホート';
$string['cohortfields'] = 'コーホートフィールド';
$string['coursefields'] = 'コースフィールド';
$string['description'] = '説明';
$string['export'] = 'エクスポート';
$string['export_title'] = 'カスタムフィールドをエクスポートする';
$string['exportcategory'] = 'カテゴリをエクスポートする';
$string['exportpage'] = 'カスタムフィールドをエクスポートする';
$string['field'] = 'フィールド名';
$string['fieldname'] = '名称';
$string['fieldshortnameexists'] = 'このカテゴリには省略名「 {$a} 」のフィールドはすでに存在しています。';
$string['import'] = 'インポート';
$string['importpage'] = 'カスタムフィールドをインポートする';
$string['importsuccess'] = 'インポートに成功しました。';
$string['insertcategoryfailed'] = '新しいカスタムフィールドカテゴリの作成に失敗しました。';
$string['invaliddatatype'] = 'インポートされたデータに無効なデータタイプが検出されました。';
$string['invalidfiletype'] = 'アップロードファイルは有効なJSONファイルにする必要があります。';
$string['invalidjson'] = 'アップロードされたJSONファイルが無効または不完全です。';
$string['invalidjsonstructure'] = 'アップロードされたJSONファイルには期待される構造がありません。';
$string['invalidtab'] = '無効なタブが選択されました。';
$string['invalidtype'] = 'インポート中に無効なカスタムフィールドタイプが検出されました。';
$string['pluginname'] = '「カスタムフィールド」インポート/エクスポート';
$string['plugintitle'] = '「カスタムフィールド」インポート/エクスポート';
$string['privacy:metadata'] = '「カスタムフィールド」インポート/エクスポートツールはいかなる個人データも保存しません。';
$string['profilefields'] = 'プロファイルフィールド';
$string['required'] = '必須';
$string['settingsinfo'] = '現在利用可能な設定はありません。';
$string['settingspage'] = '設定ページ';
$string['shortnamealreadyexists'] = '省略名「 {$a} 」のカスタムフィールドはすでに存在しています。';
$string['type'] = 'データタイプ';
$string['typefortable'] = 'タイプ';
