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
 * Strings for component 'local_userenrols', language 'ja', version '4.4'.
 *
 * @package     local_userenrols
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ERR_CREATE_GROUP'] = '行 %u: グループ「 %s 」を作成できません。';
$string['ERR_ENROLL_FAILED'] = '行 %u: ユーザID「 %s 」のロール割り当てを作成できません。';
$string['ERR_ENROLL_META'] = '行 %u: メタコースにユーザID「 %s 」の既存の登録がありません。';
$string['ERR_GROUP_MEMBER'] = '行 %u: ユーザ「 %s 」をグループ「 %s 」 に追加できません。';
$string['ERR_INVALID_GROUP_ID'] = 'グループID %u はこのコースでは無効です。';
$string['ERR_NO_MANUAL_ENROL'] = 'コースで手動登録プラグインが有効にされている必要があります。';
$string['ERR_NO_META_ENROL'] = 'コースで「コースメタリンク」登録プラグインが有効にされている必要があります。';
$string['ERR_PATTERN_MATCH'] = '行 %u: ラインコンテンツ「 %s 」をパースできません。';
$string['ERR_USERID_INVALID'] = '行 %u: 無効なユーザID値「 %s 」です。';
$string['ERR_USER_MULTIPLE_RECS'] = '行 %u: ユーザID値「 %s 」はユニークではありません。重複レコードが見つかりました。';
$string['HELP_PAGE_IMPORT'] = '登録&グループ割り当てインポート';
$string['HELP_PAGE_IMPORT_help'] = '<p>
このコースインポートプラグインを使用して区切りテキストファイルからコースにユーザ登録情報をインポートできます。新しいユーザアカウントは作成されないため、入力ファイルに記述されたユーザはすでにサイトにアカウントが設定されている必要があります。

<br /><br />

ユーザレコード (行) にグループ名が含まれている場合、そのグループが存在する場合はユーザはグループに追加されます。必要に応じて新しいグループを作成できます。
</p>

<ul>
<li>インポートファイルの各行が1つのレコードを表します。</li>
<li>各レコードにはユーザ名、メールアドレス、内部IDナンバ等、ユーザID値を持つフィールドが少なくとも1つは含まれている必要があります。</li>
<li>各レコードにはカンマ、セミコロンまたはタブ文字で区切られた追加のグループ名フィールドを含めることができます。</li>
<li>これらのユーザに割り当てられるロールは選択できますが、コースのデフォルトロールがデフォルトであるべきです。</li>
<li>グループ名フィールドにセミコロンまたはカンマを含む場合、引用符で囲む必要があります。</li>
<li>インポートファイルの空白行はスキップされます。</li>
<li>注意: すでにユーザがコースに登録されている場合、そのユーザの登録内容は変更されません (例 ロール変更なし)。</li>
</ul>

<p>
メタコースに関する注意: 登録は子コースの1つで実施されるため、このプラグインはユーザの登録情報をメタコースにはインポートしません。しかし、指定されたユーザIDがすでに子コース登録を通してメタコースに関連付けられている場合、グループの割り当ておよび必要に応じてグループを作成します。
</p>

<h3>例</h3>

ID値およびグループ
<pre>
2144323548;Tuesday Laborary 2144323623 2144323647;Wednesday Laborary 2144323638;Wednesday Laborary
</pre>

メールアドレス
<pre>
smith-john@university.edu
janedoe@university.edu, "Honors"
alan.jones@university.edu, "HonorsPlus"
</pre>
ユーザ名 (グループフィールドからタブ文字区切り)
<pre>
johnsonf    "Presentation, Group One"
samsel      Ten O\'Clock Testing
</pre>';
$string['IMPORT_MENU_LONG'] = '登録をインポートする';
$string['IMPORT_MENU_SHORT'] = 'インポート';
$string['INF_IMPORT_SUCCESS'] = 'ユーザ登録が正常にインポートされました。';
$string['INF_METACOURSE_WARN'] = '<b>警告</b>: あなたはメタコースに直接登録をインポートできません。代わりにメタコースの子コースの1つに登録してください。<br /><br />';
$string['LBL_ENROLL_OPTIONS'] = '登録オプション';
$string['LBL_FILE_OPTIONS'] = 'インポートファイル';
$string['LBL_FILE_OPTIONS_help'] = 'ユーザおよび任意のグループ情報を含む区切りデータファイルをアップロードするか、リポジトリから選択してください。ファイル拡張子は.txtまたは.csvのいずれかである必要があります。';
$string['LBL_GROUP'] = 'グループに割り当てる:';
$string['LBL_GROUP_CREATE'] = 'グループを作成する:';
$string['LBL_GROUP_CREATE_help'] = 'インポートファイル内にグループが存在しない場合、必要に応じて新しく作成します。そうでない場合、指定したグループ名がすでに存在する場合のみユーザをグループに割り当てます。';
$string['LBL_GROUP_ID'] = 'グループを使用する:';
$string['LBL_GROUP_ID_help'] = '入力ファイルでグループ名が提供されている場合、それを使用するか、入力データを無視して既存のグループを選択するか選択してください。';
$string['LBL_GROUP_OPTIONS'] = 'グループオプション';
$string['LBL_GROUP_help'] = 'ファイル入力または選択グループに基づきグループの割り当てを実施します。';
$string['LBL_IDENTITY_OPTIONS'] = 'ユーザID';
$string['LBL_IMPORT'] = 'インポート';
$string['LBL_IMPORT_TITLE'] = 'CSV登録ファイルをインポートする';
$string['LBL_NO_GROUP_ID'] = 'ユーザファイルデータ';
$string['LBL_NO_ROLE_ID'] = '登録なし';
$string['LBL_ROLE_ID'] = 'ロール:';
$string['LBL_ROLE_ID_help'] = 'インポートしたユーザにコース内でどのようなロールを割り当てますか。「登録なし」の場合、グループ割り当てのみ実施されます。';
$string['LBL_USER_ID_FIELD'] = 'ユーザフィールド:';
$string['LBL_USER_ID_FIELD_help'] = 'ユーザレコードのどのフィールドをインポートファイルの最初のカラムに割り当てるか指定してください。';
$string['VAL_INVALID_FORM_DATA'] = '無効なフォームデータ送信です。';
$string['VAL_INVALID_SELECTION'] = '無効な選択です。';
$string['VAL_NO_FILES'] = 'インポートするファイルが選択されていません。';
$string['pluginname'] = '登録&グループインポート';
$string['privacy:no_data_reason'] = '登録&グループインポートプラグインはいかなる個人データも保存しません。';
