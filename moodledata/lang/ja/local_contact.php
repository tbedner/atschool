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
 * Strings for component 'local_contact', language 'ja', version '4.4'.
 *
 * @package     local_contact
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configure'] = 'このプラグインを設定する';
$string['confirmationemail'] = '<p>[fromname] 様</p>
<p>ご連絡頂きまして、ありがとうございます。必要に応じて、早急にご連絡致します。</p>  <p>[supportname]<br />[sitefullname]<br /><a href="[siteurl]">[siteurl]</a></p>';
$string['confirmationmessage'] = 'ご連絡頂きまして、ありがとうございます。必要に応じて、早急にご連絡致します。';
$string['confirmationpage'] = 'ステータス';
$string['confirmationsent'] = 'あなたの {$a} のアドレスにメールが送信されました。';
$string['defaultsubject'] = '新しいメッセージ';
$string['duplicateemailaddresses'] = '同一メールアドレスの複数のユーザが存在します。';
$string['errorsending'] = 'メッセージ送信中にエラーが発生しました。後ほど再度お試しください。';
$string['errorsendingtitle'] = 'メール送信失敗';
$string['extrainfo'] = '<hr>
<p><strong>追加ユーザ情報</strong></p>
<ul>
<li><strong>サイトユーザ:</strong> [userstatus]</li>
<li><strong>優先言語:</strong> [lang]</li>
<li><strong>送信元IPアドレス:</strong> [userip]</li>
<li><strong>ウェブブラウザ:</strong> [http_user_agent]</li>
<li><strong>ウェブフォーム:</strong> <a href="[http_referer]">[http_referer]</a></li>
</ul>';
$string['field-email'] = 'メール';
$string['field-message'] = 'メッセージ';
$string['field-name'] = '氏名';
$string['field-subject'] = '件名';
$string['forbidden'] = '禁止';
$string['globalhelp'] = 'コンタクトフォームはHTMLウェブフォーム経由であなたのサイトのサポートメールアドレス宛に送信された情報を処理するためのMoodleプラグインです。';
$string['lockedout'] = 'LOCKED OUT';
$string['loginrequired'] = 'ログイン必須';
$string['loginrequired_description'] = 'コンタクトフォームの送信をログイン済みユーザのみに限定します。ゲストはログインしているとみなされません。';
$string['norecaptcha'] = 'ReCAPTCHAなし';
$string['norecaptcha_description'] = 'コンタクトフォームでのフォーム処理にReCAPTCHAを使用しません。';
$string['noreplyto'] = 'reply-toなし';
$string['noreplyto_description'] = '一部のSMTPサーバではヘッダのfromおよびnoreply-toフィールドが異なるメールの送信を拒否する場合があります。このオプションを有効にすることにより、no-replyフィールドが送信者のメールアドレスではなく、fromアドレスに合致することを確実にします。';
$string['nosubjectsitename'] = 'メール件名フィールドにサイト名を含まない';
$string['nosubjectsitename_description'] = 'メール件名に [site name] を接頭辞として付加しないようにします。Moodle自信のstrong>メール件名接頭辞テキスト</strong>設定には影響しません。';
$string['notconfirmed'] = 'NOT CONFIRMED';
$string['pluginname'] = 'コンタクトフォーム';
$string['privacy:metadata'] = 'コンタクトフォームプラグインはいかなる個人データも保存しません。';
$string['recapchainfo'] = 'ReCAPTCHAなし';
$string['recapchainfo_description'] = '現在、ModoleでReCAPTCHAが有効にされています。
あなたは以下を確実にする必要があります:<br />
<ul>
<li>Moodleのコンタクトフォームによって処理されるすべてのフォームに {recaptcha} タグが含まれている。</li>
<li><a href="https://moodle.org/plugins/filter_filtercodes">FilterCodesプラグイン</a>がインストールおよび有効化されている。</li>
</ul>';
$string['recipient_list'] = '利用可能な受信者一覧';
$string['recipient_list_description'] = 'あなたはここで潜在的な受信者リストを設定できます。受信者リストはコンタクトフォームで隠しテキストフィールドを使ってメール受信者を指定するために使用できます。受信者の実際のメールアドレスを晒さずにドロップダウンリストでユーザが受信者を選択できるようにも使用できます。受信者リストが空の場合、メールはMoodleのサポートメールまたはMoodle管理者の主メールアドレスから送信されます。それぞれの行はユニークなテキストエイリアス/ラベル、1つのメールアドレス、名前で構成する必要があります。また、それぞれの項目はパイプ文字で区切られている必要があります。例えば次のようになります:
<pre> tech support|support@example.com|Joe Fixit webmaster|admin@example.com|Mr. Moodle electrical|nikola.tesla@example.com|Nikola history|charles.darwin@example.com|Mr. Darwin law|issac.newton@example.com|Isaac Newton math|galileo.galilei@example.com|Galileo english|mark.twain@example.com|Mark Twain physics|albert.einstein@example.com|Albert science|thomas.edison@example.com|Mr. Edison philosophy|aristotle@example.com|Aristotle </pre>';
$string['senderaddress'] = 'カスタム送信者';
$string['senderaddress_description'] = 'メールはこのメールアドレスから送信されます。このフィールドが空白の場合、メールはno-replyメールアドレスから送信されます。';
