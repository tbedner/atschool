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
 * Strings for component 'local_page', language 'ja', version '4.4'.
 *
 * @package     local_page
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addpage'] = '新しいページを追加する';
$string['addpages'] = '複数ページを追加する';
$string['backtolist'] = 'ページリストに戻る';
$string['cleanurl_enabled'] = 'クリーンURLを有効にする';
$string['cleanurl_enabled_description'] = 'リンクでのクリーンURLの使用を有効にします。 <br />
<strong>注意:</strong> これはデフォルトのリンク構造を置換します。例えば次のようになります:「about-us」は「https://URL/local/page/about-us」にリダイレクトされます。<br />
あなたのサーバでクリーンURLを使用にするには「Mod_rewrite」を有効にする必要があります。';
$string['confirmdeletepage'] = '本当にページ「 {$a} 」を削除してもよろしいですか?';
$string['custompage_title'] = 'ページ管理';
$string['delete'] = '削除';
$string['edit'] = '修正';
$string['edit_details'] = '詳細を編集する';
$string['edit_head'] = '&lt;head&gt; のコンテンツ';
$string['edit_htmlhead'] = 'HTML &lt;head&gt;';
$string['edit_navigation'] = 'ナビゲーション設定';
$string['edit_ogimage'] = 'Open Graphイメージファイル';
$string['edit_pagedisplay'] = 'ページ表示設定';
$string['form'] = 'フォーム';
$string['form_field_content'] = 'フォーム詳細';
$string['form_field_date'] = '公開開始日時';
$string['form_field_enddate'] = '公開終了日時';
$string['form_field_enddate_description'] = '公開終了日時';
$string['form_field_enddate_description_help'] = 'このページが非公開となる日時を選択してください。過去の日付を選択した場合、その日付以降のアクセスが制限されます。';
$string['form_field_enddate_help'] = 'このページが公開される日時を選択してください。指定した日時までアクセスが制限されます。';
$string['form_field_id'] = 'ID';
$string['formbuilder'] = 'フォーム作成ツール';
$string['hide'] = '秘匿';
$string['hidetitle'] = 'タイトルを秘匿する';
$string['hidetitle_description'] = 'ページのタイトルを秘匿します。';
$string['hidetitle_description_help'] = 'この設定を「Yes」にした場合、ページのタイトルは表示されません。';
$string['label_add'] = 'アイテムを追加する';
$string['label_name'] = 'ページ名';
$string['label_placeholder'] = 'プレースホルダテキスト';
$string['label_relatesto'] = '関連';
$string['label_remove'] = 'アイテムを削除する';
$string['label_required'] = '必須フィールド';
$string['managepages'] = 'ページを管理する';
$string['menu_name'] = 'フレンドリURL';
$string['menu_name_description'] = '「フレンドリURL」説明';
$string['menu_name_description_help'] = 'ページのユーザフレンドリなURLを提供してください。URLには文字、数字、ハイフンのみ使用してください。これによりデフォルトのリンク構造が置換されます。例)「about-us」は「https://URL/local/page/about-us」となります。';
$string['metaauthor'] = 'メタ著者';
$string['metaauthor_description'] = '「メタ著者」説明';
$string['metaauthor_description_help'] = 'ページのメタ著者を提供してくださいこれはページの著者を特定するために使用されます。';
$string['metadescription'] = 'メタ説明';
$string['metadescription_description'] = '「メタ説明」説明';
$string['metadescription_description_help'] = 'ページのメタ説明を提供してください。これは検索エンジン対するページ説明に使用されます。';
$string['metakeywords'] = 'メタキーワード';
$string['metakeywords_description'] = '「メタキーワード」説明';
$string['metakeywords_description_help'] = 'ページのメタキーワードを提供してください。これは検索エンジン対するページ説明に使用されます。';
$string['metarobots'] = 'メタロボット';
$string['metarobots_description'] = '「メタロボット」説明';
$string['metarobots_description_help'] = 'ページにメタロボットタグを提供してください。これにより検索エンジンがページをインデックス化する方法をコントロールできます。利用可能なオプションは以下のとおりです:<br />
<ul>
    <li>"index": ページのインデックス化を許可します。</li>
    <li>"noindex": ページのインデックス化を拒否します。</li>
    <li>"follow": ページ内のリンクの追跡を許可します。</li>
    <li>"nofollow": ページ内のリンクの追跡を拒否します。</li>
    <li>"noarchive": 検索エンジンのページキャッシングを拒否します。</li>
    <li>"nosnippet": 検索エンジンによる検索結果へのページ抜粋表示を拒否します。</li>
    <li>"noodp": このページでのOpen Directory Project (DMOZ) のデータ使用を拒否します。</li>
    <li>"notranslate": 検索エンジンによるページ翻訳の提供を拒否します。</li>
    <li>"noimageindex": 検索エンジンによるページ内イメージのインデックス化を拒否します。</li>
</ul>';
$string['metatitle'] = 'メタタイトル';
$string['metatitle_description'] = '「メタタイトル」説明';
$string['metatitle_description_help'] = 'ページのメタタイトルを提供してください。これは検索結果にページタイトルを表示するために使用されます。';
$string['no'] = 'No';
$string['noaccess'] = 'あなたにはこのページを表示するパーミッションがありません。';
$string['none'] = 'なし';
$string['numeric'] = '数値';
$string['onlyloggedin'] = 'ログインのみ';
$string['onlyloggedin_description'] = 'ログインユーザにのみページを表示します。';
$string['onlyloggedin_description_help'] = '<ul>
    <li>あなたが「Yes」を選択した場合、このページはログイン済みユーザのみ閲覧可能です。</li>
    <li>あなたが「No」を選択した場合、ページはすべてのユーザに表示されます。</li>
    <li>非ログインユーザにはログインしたユーザのみページが閲覧可能であるというメッセージが表示されます。</li>
    <li>ゲストユーザにはログインしたユーザのみページが閲覧可能であるというメッセージが表示されます。</li>
</ul>';
$string['page'] = 'ページ';
$string['page:addpages'] = 'ページを追加する';
$string['page_accesslevel'] = '必須ケイパビリティ';
$string['page_content'] = 'ページコンテンツ';
$string['page_content_description'] = 'ページのコンテンツをここに入力してください。';
$string['page_date'] = '公開日';
$string['page_loggedin'] = '要ユーザログイン';
$string['page_name'] = 'ページタイトル';
$string['page_order'] = 'ページ並べ替え順';
$string['page_parent'] = '親ページ';
$string['pagecontent'] = 'ページコンテンツ';
$string['pagecontent_description'] = 'ページコンテンツ';
$string['pagecontent_description_help'] = 'ページコンテンツを提供してください。';
$string['pagedate'] = 'ページ公開日';
$string['pagedate_description'] = 'このページが公開される日時を選択してください。未来日付を指定した場合、その日までアクセスが制限されます。';
$string['pagedate_description_help'] = 'このページが公開される日時を選択してください。指定した日時までアクセスが制限されます。';
$string['pagesetup_heading'] = 'ページ設定ヘッディング';
$string['pagesetup_title'] = 'ページ設定タイトル';
$string['pdfmanual'] = 'PDFユーザマニュアル';
$string['placeholder_fieldname'] = 'フィールド名プレースホルダ';
$string['placeholder_text'] = 'プレースホルダテキスト例';
$string['pleasefillin'] = 'フィールドを完了してください: {$a}';
$string['pleasefillinnumber'] = '数字を入力してください: {$a}';
$string['pleaseselect'] = 'リストからオプションを選択してください。';
$string['pluginname'] = 'カスタムページ by RoseaThemes (1.0.2)';
$string['pluginsettings'] = 'プラグイン設定';
$string['pluginsettings_managepages'] = 'ページ設定を管理する';
$string['privacy:metadata'] = 'ローカルページプラグインはいかなる個人データも保存しません。';
$string['restricted'] = '日付で制限する';
$string['select_checkbox'] = 'チェックボックスオプション';
$string['select_fullname'] = 'フルネームオプション';
$string['select_html'] = 'HTMLオプション';
$string['select_no'] = 'オプションなし';
$string['select_nothing'] = '選択なし';
$string['select_number'] = 'ナンバーオプション';
$string['select_select'] = 'オプションを選択する';
$string['select_text'] = 'テキストオプション';
$string['select_text_area'] = 'テキストエリアオプション';
$string['select_yes'] = 'Yesオプション';
$string['setting_additionalhead'] = 'ヘッドへの追加HTMLを有効にする';
$string['setting_additionalhead_description'] = 'HTMLの&lt;head&gt;セクションにカスタムコンテンツを追加できるようにします。';
$string['show'] = '表示';
$string['status'] = 'ステータス';
$string['status_archived'] = 'アーカイブ';
$string['status_description'] = 'ページのステータスを選択してください。';
$string['status_draft'] = '下書き';
$string['status_live'] = 'ライブ';
$string['submit'] = '送信フォーム';
$string['textarea'] = 'テキストエリアフィールド';
$string['to'] = 'to';
$string['type'] = 'フィールドタイプ';
$string['view'] = 'ページを表示する';
$string['yes'] = 'Yes';
