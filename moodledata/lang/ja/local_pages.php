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
 * Strings for component 'local_pages', language 'ja', version '4.4'.
 *
 * @package     local_pages
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesslevel_description'] = 'アクセスレベル';
$string['accesslevel_description_help'] = 'ケイパビリティストリングを入力してください。あなたはカンマ区切りで複数ケイパビリティを追加できます。
<br />
あなたが指定したケイパビリティ以外の人に表示したい場合、ケイパビリティの前に「!」マークを付けてください。
<br />
例えば次のようになります: mod/folder:managefiles,!mod/quiz:grade';
$string['addpage'] = 'ページを追加する';
$string['addpages'] = 'ページを追加する';
$string['backtolist'] = 'ページリストに戻る';
$string['cannnot_send'] = '申し訳ございません、あなたはすでにメールを送信しているようです。処理のため、しばらくお待ちください。';
$string['cleanurl_enabled'] = 'スマートURLを有効にする';
$string['cleanurl_enabled_description'] = 'クリーンURLを使用するためのリンクを有効にします。';
$string['custompage_title'] = 'ページを管理する';
$string['delete'] = '削除';
$string['edit'] = '編集';
$string['email_headers'] = 'PHPメールのカスタムヘッダ';
$string['email_headers_description'] = '送信するメールヘッダを入力してください。HTMLメッセージを送信するには {html} を使用してください。ヘッダに送信元アドレスを追加するには {From}、返信先アドレスを追加するには {Reply-to} を使用してください。';
$string['emailto_name'] = 'フォームメールアドレス';
$string['enable_limit'] = '1セッションあたりのメールを制限する';
$string['enable_limit_description'] = 'ユーザによる複数メールの送信を防ぎます。';
$string['form'] = 'フォーム';
$string['form_field_content'] = 'フォーム詳細';
$string['form_field_date'] = '日付';
$string['form_field_id'] = 'ID';
$string['formbuilder'] = 'フォームビルダ';
$string['hide'] = '非表示';
$string['label_add'] = '追加';
$string['label_name'] = '名称';
$string['label_placeholder'] = 'プレースホルダ';
$string['label_relatesto'] = '関連';
$string['label_remove'] = '削除';
$string['label_required'] = '必須';
$string['menu_icon'] = 'メニューアイコン';
$string['menu_icon_description'] = 'メニューアイコン';
$string['menu_icon_description_help'] = 'あなたはここでアイコンをプレビューできます: <a target="_blank" href="https://fontawesome.com/v4.7.0/icons/">https://fontawesome.com/v4.7.0/icons/</a>';
$string['menu_name'] = 'ページURL';
$string['message_copy'] = 'ユーザに送信されるメッセージ';
$string['message_copy_description'] = 'メッセージに表示されるフォームの {フィールド名} を入力してください。すべてのフォームフィールドを配置したい場合、{table} を使用してください。';
$string['no'] = 'No';
$string['noaccess'] = 'あなたにはこのページを閲覧するための権限がありません。';
$string['none'] = 'なし';
$string['page'] = 'ページ';
$string['page_accesslevel'] = '必須ケイパビリティ';
$string['page_content'] = 'ページコンテンツ';
$string['page_content_description'] = 'ページのコンテンツを追加してください。';
$string['page_date'] = 'ページ日付';
$string['page_loggedin'] = 'ユーザにログインを強制する';
$string['page_name'] = 'ページ名';
$string['page_onmenu'] = 'メニューに表示する';
$string['page_order'] = 'ページ並び順';
$string['page_pagetype'] = 'ページタイプ';
$string['page_parent'] = 'ページ親';
$string['pagecontent_description'] = 'ページコンテンツ';
$string['pagecontent_description_help'] = 'メインページにフォームを追加するには #form# を使用してください (ページタイプに「ページ」を選択する必要があります)。
<br />
ページタイプがフォームの場合、このエリアは御礼メッセージを表示するための場所になります。あなたが御礼メッセージにフォーム値を含みたい場合、{フォームフィールド名} を使用できます。';
$string['pagedate_description'] = 'ページ公開日';
$string['pagedate_description_help'] = 'このページを公開する日付を選択してください。将来日付の選択により、このページへのアクセスを指定日付到来まで停止できます。';
$string['pagelayout_name'] = 'ページテンプレート';
$string['pages:addpages'] = 'ページを追加する';
$string['pages_settings'] = 'ページ設定';
$string['pagesetup_heading'] = 'ページヘッディング';
$string['pagesetup_title'] = 'ページセットアップ';
$string['pagesplugin'] = 'ページプラグイン';
$string['pdfmanual'] = 'PDFマニュアル';
$string['placeholder_fieldname'] = 'フィールド名';
$string['placeholder_text'] = 'プレースホルダテキスト';
$string['pleaseselect'] = 'オプションを選択してください。';
$string['pluginname'] = 'ページ';
$string['pluginsettings'] = '設定';
$string['pluginsettings_managepages'] = 'ページを管理する';
$string['privacy:metadata'] = 'ページローカルプラグインはいかなる個人データも保存しません。';
$string['select_checkbox'] = 'チェックボックス';
$string['select_email'] = 'メール';
$string['select_fullname'] = 'フルネーム';
$string['select_html'] = 'HTML';
$string['select_no'] = 'No';
$string['select_nothing'] = 'なし';
$string['select_number'] = '数字';
$string['select_select'] = '選択';
$string['select_text'] = 'テキスト';
$string['select_text_area'] = 'テキストエリア';
$string['select_yes'] = 'Yes';
$string['show'] = '表示';
$string['submit'] = '送信';
$string['type'] = 'タイプ';
$string['user_copy'] = '人にメッセージのコピーを送信する';
$string['user_copy_description'] = 'フォームに入力した人にもメッセージを送信するには選択してください。';
$string['view'] = '表示';
$string['yes'] = 'Yes';
