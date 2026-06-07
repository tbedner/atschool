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
 * Strings for component 'message_kopereemail', language 'ja', version '4.4'.
 *
 * @package     message_kopereemail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action_create'] = 'カスタムメッセージを作成';
$string['action_delete'] = 'カスタムメッセージを削除';
$string['action_edit'] = 'カスタムメッセージを編集';
$string['action_export'] = 'JSON をエクスポート';
$string['action_import'] = 'JSON をインポート';
$string['action_preview'] = 'テンプレート';
$string['action_preview_click'] = 'ここをクリックして、このテンプレートのテストメールを受信する';
$string['action_preview_success'] = 'メールを正常に送信しました。受信トレイまたは迷惑メールフォルダーを確認してください。';
$string['export_filename_prefix'] = 'kopereemail-templates';
$string['export_title'] = 'テンプレートをエクスポート';
$string['import_file'] = 'JSON ファイル';
$string['import_file_help'] = '別の環境からエクスポートした JSON を選択してください。';
$string['import_invalid_json'] = '無効なファイル: JSON の形式が正しくありません。';
$string['import_invalid_payload'] = '無効なファイル: エクスポート構造が一致しません。';
$string['import_overwrite'] = '既存のテンプレートを上書き';
$string['import_overwrite_help'] = 'チェックすると既存のテンプレートが更新されます。チェックしない場合、既存のテンプレートは無視されます。';
$string['import_success'] = 'インポートが完了しました。<br>&amp;nbsp;&amp;gt; <strong>インポート済み:</strong> {$a->imported}<br>&amp;nbsp;&amp;gt; <strong>スキップ:</strong> {$a->skipped}<br>&amp;nbsp;&amp;gt; <strong>ラッパーを更新:</strong> {$a->wrapper}.';
$string['import_title'] = 'テンプレートをインポート';
$string['import_wrapper'] = 'HTML ラッパー（ベーステンプレート）をインポート';
$string['import_wrapper_help'] = 'チェックすると、JSON の HTML ラッパーがこの環境で設定されたラッパーを置き換えます。';
$string['messages'] = 'メッセージ';
$string['placeholders_course_data_desc'] = 'コースデータ（検出できる場合）。';
$string['placeholders_course_url_desc'] = 'コース URL（検出できる場合）。';
$string['placeholders_dates_now_desc'] = '現在の日付/時刻（userdate）。';
$string['placeholders_desc'] = 'メッセージ内で Mustache のプレースホルダーを使用できます。';
$string['placeholders_fullmessage_desc'] = 'プレーンテキストメッセージ。';
$string['placeholders_fullmessagehtml_desc'] = 'HTML メッセージ（トリプルブレースを使用）。';
$string['placeholders_site_fullname_desc'] = 'サイトの完全名（<code>{$SITE->fullname}</code>）。';
$string['placeholders_site_logourl_desc'] = 'サイトロゴ（<img src="{$a->logo_url}" style="max-width:70px;max-height:70px;">）。';
$string['placeholders_site_shortname_desc'] = 'サイトの短い名前（<code>{$SITE->shortname}</code>）。';
$string['placeholders_site_url_desc'] = 'サイト URL（<code>{$CFG->wwwroot}</code>）。';
$string['placeholders_subject_desc'] = '現在の通知件名。';
$string['placeholders_title'] = '利用可能なプレースホルダー';
$string['placeholders_userfrom_data_desc'] = '送信者データ。';
$string['placeholders_userto_data_desc'] = '受信者データ。';
$string['pluginname'] = 'Kopere Email';
$string['privacy:metadata:attachment'] = 'ファイルシステムに添付されたファイル。';
$string['privacy:metadata:attachname'] = '添付ファイル名。';
$string['privacy:metadata:externalpurpose'] = '外部目的';
$string['privacy:metadata:fullmessage'] = 'プレーンテキストメッセージ。';
$string['privacy:metadata:fullmessagehtml'] = 'HTML メッセージ。';
$string['privacy:metadata:recipient'] = 'メール受信者。';
$string['privacy:metadata:replyto'] = '返信先メールアドレス。';
$string['privacy:metadata:replytoname'] = '返信先名。';
$string['privacy:metadata:subject'] = 'メール件名。';
$string['privacy:metadata:userfrom'] = 'メール送信者。';
$string['settings_customtemplates'] = 'プロバイダーごとのカスタムメッセージ';
$string['settings_customtemplates_desc'] = '各通知プロバイダー用にカスタムメッセージを作成/編集します。';
$string['settings_wrapper'] = 'メールのベーステンプレート（ラッパー）';
$string['settings_wrapper_desc'] = 'この HTML は Mustache 形式で、受講者に送信されるメッセージテンプレートとして適用されます。HTML コンテンツは {{{fullmessagehtml}}} の位置に挿入してください。';
$string['table_actions'] = '操作';
$string['table_component'] = 'コンポーネント';
$string['table_name'] = '名前';
$string['table_provider'] = 'プロバイダー';
$string['template'] = 'テンプレート';
$string['template_changue'] = 'このテンプレートを Kopere Mail のデフォルトとして使用したい';
$string['template_changued'] = 'テンプレートが正常に更新されました';
$string['template_delete_confirm'] = 'このプロバイダーのカスタムメッセージを削除してもよろしいですか？';
$string['template_delete_title'] = 'カスタムメッセージを削除';
$string['template_deleted'] = 'カスタムメッセージを削除しました。';
$string['template_edit_bodyhtml'] = 'メッセージ HTML';
$string['template_edit_provider'] = 'プロバイダー';
$string['template_edit_save'] = '保存';
$string['template_edit_subject'] = '件名（任意）';
$string['template_edit_title'] = 'カスタムメッセージ';
$string['template_preview'] = 'テンプレートをプレビュー';
$string['template_saved'] = 'カスタムメッセージを保存しました。';
$string['templates_other'] = '他のテンプレート';
$string['templates_transfer_desc'] = 'このサービスを使用して、環境間で設定を移行します（例: staging -> production）。';
$string['templates_transfer_title'] = '設定をエクスポート / インポート';
