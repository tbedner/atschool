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
 * Strings for component 'local_resend_password_profile', language 'ja', version '4.4'.
 *
 * @package     local_resend_password_profile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['button'] = '再送信する';
$string['category'] = 'アクティベーションメール再送信';
$string['credits'] = 'Developped by François Garnier';
$string['emailnotresent'] = 'アクティベーションメール再送信中にエラーが発生しました。';
$string['emailresent'] = 'アクティベーションメールが正常に送信されました。';
$string['existingusernewpasswordtext'] = 'こんにちは {lastname} {firstname} さん

サイト「 {sitename} 」のあなたのアカウントが更新されました。そのため、あなたに一時的なパスワードが発行されました。

あなたのログインに必要な情報は以下の通りです:
ユーザ名: {username}
パスワード: {newpassword}

あなたは初回ログイン時にパスワードを変更する必要があります。

{sitename} での作業を開始するには次のリンクをクリックしてください:
{wwwroot}/login/?lang=en

ほとんどのメールクライアントではこのアドレスは青色のクリック可能リンクとして表示されているはずです。機能しない場合、このリンクをコピーしてあなたのウェブブラウザのアドレスバーに貼り付けてください。

サポートが必要な場合、次のリンクをクリックしてサイト「 {sitename} 」の管理者にご連絡ください:
<a href=\'{wwwroot}/user/contactsitesupport.php\'>サイトサポートに連絡する</a>

{sitename}';
$string['pluginname'] = 'パスワードプロファイル再送信';
$string['privacy:metadata'] = 'パスワードプロファイル再送信プラグインはいかなる個人データも保存しません。';
$string['subject'] = 'あなたのアカウント:';
