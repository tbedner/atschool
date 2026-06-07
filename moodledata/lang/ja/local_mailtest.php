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
 * Strings for component 'local_mailtest', language 'ja', version '4.4'.
 *
 * @package     local_mailtest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysshowlog'] = 'エラーがない場合でも、メールサーバとの通信ログを常に表示します。';
$string['credit'] = 'Michael Milette - <a href="https://www.tngconsulting.ca/">TNG Consulting Inc.</a>';
$string['divertallemails'] = 'すべてのメールを転送する';
$string['divertedto'] = '{$a} に転送する';
$string['errorcommunications'] = '<p>Moodleはあなたのメールサーバと通信できませんでした。</p>
<p><strong>推奨:</strong></p>
<p>あなたのMoodleの<a href="{$a}" target="_blank">SMTPメール設定</a>の確認から始めてください。</p>
<p>設定が正しく見える場合、あなたのSMTPサーバおよびファイアウォール設定を確認して、それらがあなたのMoodleウェブサーバおよび返信不要メールアドレスからのSMTP接続を受け入れるよう構成されていることをご確認ください。詳細はドキュメンテーションのFAQセクションをご覧ください。</p>';
$string['errorsend'] = '<p>テストメールがメールサーバに送信されませんでした。</p>
<p><strong>推奨:</strong></p>
<p>あなたのMoodleの<a href="{$a}" target="blank">メール設定</a>をご確認ください。詳細はドキュメンテーションのFAQセクションをご覧ください。</p>';
$string['from'] = '{$a->type}: <strong>{$a->email}</strong> (<a href="{$a->url}">{$a->label}</a>)';
$string['fromemail'] = '送信元メールアドレス';
$string['heading'] = 'メール設定テスト';
$string['message'] = '<p>これはテストメッセージです。無視してください。</p>
<p>あなたがこのメールを受信した場合、あなたのMoodleサイトのメール設定が成功したことを意味します。</p>
<hr><p><strong>追加ユーザ情報</strong></p>
<ul>
<li><strong>登録ステータス:</strong> {$a->regstatus}</li>
<li><strong>推奨言語:</strong> {$a->lang}</li>
<li><strong>ユーザのウェブブラウザ:</strong> {$a->browser}</li>
<li><strong>メッセージ送信元:</strong> {$a->referer}</li>
<li><strong>Moodleバージョン:</strong> {$a->release}</li>
<li><strong>ユーザのIPアドレス:</strong> {$a->ip}</li>
</ul>';
$string['noemailever'] = '<p>このサイトのメールは<strong>$CFG-&gt;noemailever = true;</strong>で無効にされています。</p>';
$string['nologavailable'] = '<p>PHPのmail()関数を使用した場合、ログは取得できません。しかし、サーバにログが残っている可能性があります。Linuxでよく使用される場所に次のようなものがあります:</p>
<ul>
<li>/var/log/maillog</li>
<li>/var/log/mail.log</li>
<li>/var/adm/maillog</li>
<li>/var/adm/syslog/mail.log</li>
</ul>
<p>代わりにphp.iniのmail.log設定を使用してカスタムロケーションを指定できます。</p>';
$string['notregistered'] = '未登録またはログインしていません。';
$string['phpmethod'] = 'PHPデフォルトメール送信方法';
$string['pluginname'] = 'メールテスト';
$string['pluginname_help'] = 'メールテストはあなたが指定したアドレス宛にテストメールメッセージを送信することにより、このMoodleサイトのメール設定を検証します。サイト管理者のみ使用できます。';
$string['primaryadminemail'] = '主管理者メール';
$string['privacy:metadata'] = 'メールテストプラグインはいかなる個人データも保存しません。';
$string['recipientisrequired'] = 'あなたは受信者のメールアドレスを指定する必要があります。';
$string['registered'] = '登録済みユーザ ({$a}).';
$string['sendmethod'] = 'メール送信方法';
$string['sendtest'] = 'テストメッセージを送信する';
$string['sentmail'] = 'MoodleはSMTPメールサーバにテストメッセージを正常に送信しました。';
$string['sentmailphp'] = 'MoodleテストメッセージはPHP Mailに正常に受け入れられました。';
$string['smtpmethod'] = 'SMTPホスト: {$a}';
$string['toemail'] = '宛先メールアドレス';
$string['winsyslog'] = 'Windowsのイベントログ';
$string['youremail'] = 'あなたのメールアドレス';
