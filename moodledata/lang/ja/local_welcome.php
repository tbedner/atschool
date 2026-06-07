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
 * Strings for component 'local_welcome', language 'ja', version '4.4'.
 *
 * @package     local_welcome
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_plugins'] = '認証プラグイン';
$string['auth_plugins_desc'] = 'ウェルカムメッセージを送信する認証プラグインを選択してください。';
$string['configure'] = 'このプラグインを設定する';
$string['customprofilefields'] = 'カスタムプロファイルフィールド';
$string['default_moderator_email'] = '<html>
<body>
<table cellspacing="0" cellpadding="8">
<tr><td colspan="2"><h3>新しいサイトユーザ [[fullname]]</h3>
    新しいアカウントが以下の詳細により作成されました:</td></tr>
<tr><td>氏名:</td><td>[[fullname]]</td></tr>
<tr><td>ユーザ名: </td><td>[[username]]</td></tr>
<tr><td>メールアドレス: </td><td>[[email]]</td></tr>
</table>
</body>';
$string['default_moderator_email_subject'] = '新しいユーザが [[sitename]] にサインアップしました: [[fullname]]';
$string['default_user_email'] = '<html>
<body>
<table cellspacing="0" cellpadding="8">
<tr><td colspan="2"><h3>ようこそ [[fullname]] へ</h3>
     あなたのMoodleアカウントが作成されました。あなたのアカウントは
    は以下の詳細で [[sitelink]] に作成されました:</td></tr>
<tr><td>氏名:</td><td>[[fullname]]</td></tr>
<tr><td>ユーザ名: </td><td>[[username]]</td></tr>
<tr><td>メールアドレス: </td><td>[[email]]</td></tr>
<tr><td colspan="2">あなたのパスワードが分からなくなった場合、簡単にリセットできます:<br />[[resetpasswordlink]]</tr>
</table>
</body>
</html>';
$string['default_user_email_subject'] = '[[fullname]] さん [[sitename]] にようこそ';
$string['defaultprofilefields'] = 'デフォルトプロファイルフィールド';
$string['fieldname'] = 'フィールド名';
$string['globalhelp'] = 'このMoodle用プラグインは設定可能なウェルカムメッセージを新しいユーザに送信します。
<br /><br />
このプラグインはMoodleのイベントシステムを使用して新しいユーザ作成時に実行されます。手動作成アカウントまたは自己登録作成アカウントに関係なく実行されます。<br /><br />
このページのテーブルはこのプラグインの設定ページでメッセージテンプレートに使用できるプロファイルフィールドを表示しています。
このテーブルに表示されている値はあなたのプロファイルフィールドの値です。ウェルカムメール送信時に受信者の値に置き換えられます。';
$string['message_moderator'] = 'モデレータメッセージ';
$string['message_moderator_desc'] = 'モデレータに送信されるメッセージです。';
$string['message_moderator_enabled'] = 'モデレータメッセージを有効にする';
$string['message_moderator_enabled_desc'] = 'このチェックボックスによりモデレータへのメッセージ送信を有効にします';
$string['message_moderator_subject'] = 'モデレータ件名';
$string['message_moderator_subject_desc'] = 'これはモデレータに送信するメールの件名です。タグとして [[fullname]] を使用した場合、ユーザの氏名に置き換えられます。';
$string['message_user'] = 'ユーザメッセージ';
$string['message_user_desc'] = '新しいユーザに送信されるメッセージです。';
$string['message_user_enabled'] = 'ユーザメッセージを有効にする';
$string['message_user_enabled_desc'] = 'このチェックボックスにより新しいユーザへのウェルカムメッセージ送信を有効にします。<br /><br />利用可能なフィールド一覧を確認するには<a href="{$a}">このページにアクセスしてください</a>。';
$string['message_user_subject'] = 'ユーザ件名';
$string['message_user_subject_desc'] = 'これはユーザに送信するメールの件名です。タグとして [[fullname]] を使用した場合、ユーザの氏名に置き換えられます。';
$string['moderator_email'] = 'モデレータメールアドレス';
$string['moderator_email_desc'] = '新しいユーザの通知はこのメールアドレス宛に送信されます。';
$string['pluginname'] = 'Moodleウェルカム';
$string['privacy:metadata'] = 'このプラグインはウェルカムメールのみ送信します。このプラグインはいかなる個人データも保存しません。';
$string['resetpass'] = 'あなたのパスワードをここでリセットする';
$string['sender_email'] = '送信者メールアドレス';
$string['sender_email_desc'] = '新しいユーザのログイン時、このメールアドレスが通知メッセージに使用されます。ユーザはこのメールアドレスを確認できます。';
$string['sender_firstname'] = 'ウェルカムメッセージ送信者名';
$string['sender_firstname_desc'] = 'ユーザへのメール送信時に使用される名です。';
$string['sender_lastname'] = 'モデレータ姓';
$string['sender_lastname_desc'] = 'ユーザへのメール送信時に使用される姓です。';
$string['type'] = 'タイプ';
$string['welcomefields'] = '追加テンプレートフィールド';
$string['yourvalue'] = 'あなたの値';
