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
 * Strings for component 'auth_userkey', language 'ja', version '4.4'.
 *
 * @package     auth_userkey
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_userkeydescription'] = 'ワンタイムユーザキーでMoodleにログインします。';
$string['createuser'] = 'ユーザを作成しますか?';
$string['createuser_desc'] = 'この設定を有効にした場合、LMSでユーザが見つからない場合に新しいユーザが作成されます。';
$string['incorrectkeylifetime'] = 'ユーザキー有効時間は数字にしてください。';
$string['incorrectlogout'] = '不正なログアウト要求です。';
$string['incorrectredirecturl'] = 'あなたは有効なURLを提供する必要があります。';
$string['incorrectssourl'] = 'あなたは有効なURLを提供する必要があります。';
$string['iprestriction'] = 'IP制限';
$string['iprestriction_desc'] = 'この設定を有効にした場合、ログインURLを要求する場合のウェブコールには 「ip 」パラメータを含む必要があります。ユーザはLMSログインにキーを使用できるよう提供されたIPを持っている必要があります。';
$string['ipwhitelist'] = 'ホワイトリストIP範囲';
$string['ipwhitelist_desc'] = 'トークンが発行されたIPアドレスまたはログイン試行元がこれらの範囲内にある場合、IP制限を無視します。
<br>
これは一部のユーザがプライベートネットワークまたはDMZ経由でMoodleまたはログイントークンを発行するシステムにアクセスした場合に発生する可能性があります。
<br>
トークンを発行するシステムまたはこのMoodleへのルートがプライベートアドレス範囲経由である場合、この値を「10.0.0.0/8;172.16.0.0/12;192.168.0.0/16」に設定してください。';
$string['keylifetime'] = 'ユーザキー有効時間';
$string['keylifetime_desc'] = 'それぞれのユーザログインキーの有効時間 (秒) です。';
$string['mappingfield'] = 'マッピングフィールド';
$string['mappingfield_desc'] = 'このユーザフィールドはLMSで関連ユーザ検索に使用されます。';
$string['noip'] = 'クライアントIPアドレスを取得できません。';
$string['pluginisdisabled'] = 'ユーザキー認証プラグインが無効にされています。';
$string['pluginname'] = 'ユーザキー認証';
$string['privacy:metadata'] = 'ユーザキー認証プラグインはいかなる個人データも保存しません。';
$string['redirecterrordetected'] = 'サポートされていない {$a} へのリダイレクトが検出されたため、実行を終了しました。';
$string['redirecturl'] = 'ログアウトリダイレクトURL';
$string['redirecturl_desc'] = 'あなたは任意でLMSからログアウトしたユーザをこのURLにリダイレクトできます。';
$string['ssourl'] = 'SSOホストURL';
$string['ssourl_desc'] = 'ユーザをリダイレクトするSSOホストのURLです。定義された場合、ユーザはログイン時にMoodleログインページの代わりにここにリダイレクトされます。';
$string['updateuser'] = 'ユーザを更新しますか?';
$string['updateuser_desc'] = 'この設定を有効にした場合、ウェブサービスが呼び出された際に提供されたプロパティでユーザが更新されます。';
$string['userkey:generatekey'] = 'ログインユーザキーを生成する';
