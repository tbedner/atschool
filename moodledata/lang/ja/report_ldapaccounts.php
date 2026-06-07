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
 * Strings for component 'report_ldapaccounts', language 'ja', version '4.4'.
 *
 * @package     report_ldapaccounts
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['callreport'] = 'レポートをコールする';
$string['col_auth'] = '認証';
$string['col_calendartype'] = 'カレンダー';
$string['col_currentlogin'] = '現在のログイン';
$string['col_descriptionformat'] = '記述フォーマット';
$string['col_lang'] = '言語';
$string['col_maildigest'] = 'メールダイジェスト';
$string['col_maildisplay'] = 'メール表示';
$string['col_mailformat'] = 'メールフォーマット';
$string['col_mnethostid'] = 'MNetホストID';
$string['col_moodlenetprofile'] = 'MoodleNetプロファイル';
$string['col_policyagreed'] = 'ポリシー承認済み';
$string['col_timemodified'] = '修正日時';
$string['col_trustbitmask'] = '信頼ビットマスク';
$string['enable_emailstop'] = '通知を有効にする';
$string['form_col_ldap_status'] = 'LDAPステータス';
$string['form_csv_delimiter'] = 'CSVデリミタ';
$string['form_download_csv'] = 'レポートをCSVでダウンロードする';
$string['form_error_column'] = 'フィールド {0} はユーザテーブルに存在しません。';
$string['form_error_input'] = 'このフィールドは無効です。';
$string['form_filter_auth'] = '認証';
$string['form_filter_deleted'] = '削除済み';
$string['form_filter_email'] = 'メール';
$string['form_filter_emailstop'] = 'メール停止';
$string['form_filter_firstname'] = '名';
$string['form_filter_lastname'] = '姓';
$string['form_filter_ldapstatus'] = 'LDAPステータス';
$string['form_filter_suspended'] = '利用停止';
$string['form_filter_userdata'] = 'ユーザデータをフィルタする';
$string['form_show_cols'] = 'カラム';
$string['form_show_userdata'] = 'ユーザデータを表示する';
$string['ldapaccounts:view'] = 'LDAPでアカウントを表示する';
$string['ldapbasedn'] = 'LDAPベースDN';
$string['ldapbasedn_desc'] = 'ベースDNはLDAPサーバに問い合わせるためのルートノードです。';
$string['ldapcacert'] = 'CA証明書ファイル';
$string['ldapcacert_desc'] = 'サーバを検証するためのCA証明書の証明書ファイルです。接続エラーの場合、あなたは以下の手順でCA証明書ファイルを提供できます:

1. openssl s_client -connect example.com:636でLDAPサーバに接続してください。
2. 「BEGIN CERTIFICATE-----」および「-----END CERTIFICATE-----」の間のすべてをコピーしてください。
3. コピーしたコンテンツをファイルに保存して、そのファイルをサーバに保存してください。
4. この設定にファイルの場所を追加してください。';
$string['ldapcert'] = '証明書ファイル';
$string['ldapcert_desc'] = '必要な場合のMoodleサーバ自身の証明書ファイルです。';
$string['ldapmailfield'] = 'LDAPのメールフィールド';
$string['ldapmailfield_desc'] = 'LDAPでユーザのメールアドレスが保存されるフィールドの名称です。';
$string['ldapnotconfigured'] = 'LDAP接続がまだ定義されていません。 [link]設定ページ[/link]に移動してください。';
$string['ldappass'] = 'LDAPパスワード';
$string['ldappass_desc'] = '接続に使用するLDAPユーザのパスワードです。';
$string['ldapport'] = 'LDAPサーバポート';
$string['ldapport_desc'] = 'LDAPサーバがアクセスされるポートです。';
$string['ldapquery'] = 'LDAPクエリ';
$string['ldapquery_desc'] = 'レポートページのためにLDAPでユーザを選択するためのクエリ部分を修正しました (例 「(&(objectClass=person)(objectClass=top))」)。これはMoodleのユーザレコードからメールで展開されます。';
$string['ldapserver'] = 'LDAPサーバ';
$string['ldapserver_desc'] = '接続先のサーバドメインまたはIPアドレスです。';
$string['ldapuser'] = 'LDAPユーザ名';
$string['ldapuser_desc'] = '接続に使用するユーザ名です。';
$string['logging'] = 'ロギングを有効にする';
$string['logging_desc'] = 'LDAPサーバとのすべての通信をデバッグログファイルに書き込みます。';
$string['permalink'] = 'このレポートのパーマリンク';
$string['pluginname'] = 'Moodle LDAPアカウント';
$string['privacy:metadata'] = 'LDAP内のMoodleアカウントはデフォルト設定ではいかなる個人データも保存しません。しかし、これらのオプションが有効または選択された場合、個人データはログファイルおよびCSVエクスポートファイルに書き込まれます。';
$string['reportldapaccountsdesc'] = 'Moodleのアカウントを選択して、それらがLDAPに存在するか確認してください。';
$string['resultcount'] = '{0} エントリが見つかりました。';
