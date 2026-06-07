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
 * Strings for component 'auth_relogin', language 'ja', version '4.4'.
 *
 * @package     auth_relogin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anypage'] = '任意のページからユーザをログインさせる';
$string['anypage_help'] = 'この設定が有効ではない場合、ユーザはログインが必要なページからのみ自動的にログインされます。そうでない場合、ユーザはログインページを含むすべてのページからログインされます。';
$string['cookies'] = '永続クッキー?';
$string['cookies_help'] = 'この設定が有効な場合、プラグインはユーザのセッションがまだタイムアウトしていない場合にウェブサイトに再ログインするため、ユーザのデバイスにクッキーを保存します。この設定が有効ではない場合、プラグインは許可されていないIPアドレスで再ログインを試みます。<br>
警告: 同意なしに永続クッキーが使用された場合、プライバシーの問題とみなされる可能性があります。<br>
注意: この方法 (永続クッキー) および (IPアドレスを使用する) の両方が有効ではない場合、このプラグインは機能的に動作しません。';
$string['loginpage'] = 'ログインページに適用しますか?';
$string['loginpage_help'] = 'この設定を有効にした場合、セッションの有効期限がまだ切れていない場合にプラグインがユーザのログインを自動的に試みます。そうでない場合、プラグインはログインを必要とする他のすべてのページに対しても動作します。';
$string['pluginname'] = '再ログイン';
