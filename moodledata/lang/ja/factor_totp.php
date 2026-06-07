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
 * Strings for component 'factor_totp', language 'ja', version '4.4'.
 *
 * @package     factor_totp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = '時間ベースのワンタイムパスワード (TOTP) オーセンティケータを管理する';
$string['action:revoke'] = '時間ベースのワンタイムパスワード (TOTP) オーセンティケータを削除する';
$string['devicename'] = 'デバイスラベル';
$string['devicename_help'] = 'これはあなたがオーセンティケータアプリをインストールしているデバイスです。複数のデバイスをセットアップできるため、このラベルはどのデバイスが使用されているか追跡するのに役立ちます。それぞれのデバイスに固有のコードを設定して別々に失効できるようにしてください。';
$string['devicenameexample'] = '例「Work iPhone 11」';
$string['error:alreadyregistered'] = 'この時間ベースのワンタイムパスワード (TOTP) シークレットはすでに登録されています。';
$string['error:codealreadyused'] = 'このコードはすでに認証に使用されています。新しいコードが生成されるまでお待ちの上、再度お試しください。';
$string['error:futurecode'] = 'このコードは無効です。あなたのオーセンティケータデバイスの時刻が正しいことを確認して再度お試しください。
現在のシステム時刻は {$a} です。';
$string['error:oldcode'] = 'このコードは古すぎます。あなたのオーセンティケータデバイスの時刻が正しいことを確認して再度お試しください。
現在のシステム時刻は {$a} です。';
$string['error:wrongverification'] = '不正な認証コードです。';
$string['factorsetup'] = 'アプリセットアップ';
$string['info'] = 'オーセンティケータアプリを使用して認証コードを生成します。';
$string['logindesc'] = 'あなたのモバイルデバイスの認証アプリを使用してコードを生成します。';
$string['loginoption'] = '認証アプリを使用する';
$string['loginskip'] = '私にはデバイスがありません。';
$string['loginsubmit'] = '続ける';
$string['logintitle'] = 'モバイルアプリで本人確認する';
$string['managefactor'] = 'オーセンティケータアプリを管理する';
$string['managefactorbutton'] = '管理';
$string['manageinfo'] = 'あなたは「 {$a} 」を認証に使用しています。';
$string['pluginname'] = 'オーセンティケータアプリ';
$string['privacy:metadata'] = 'オーセンティケータアプリ要素プラグインはいかなる個人データも保存しません。';
$string['replacefactor'] = 'オーセンティケータアプリを置き換える';
$string['replacefactorconfirmation'] = '「 {$a} 」オーセンティケータアプリを置き換えますか?';
$string['revokefactorconfirmation'] = '「 {$a} 」オーセンティケータアプリを削除しますか?';
$string['settings:totplink'] = 'モバイルアプリのセットアップリンクを表示する';
$string['settings:totplink_help'] = 'この設定を有効にした場合、otpauth://への直接リンクによる第3のセットアップオプションがユーザに表示されます。';
$string['settings:window'] = 'TOTP認証ウィンドウ';
$string['settings:window_help'] = 'それぞれのコードの有効期限です。ユーザのデバイスの時計が微妙に間違っていることが多い場合、あなたは回避策としてこの値を高く設定できます。新しいコードが生成されるまでの時間を30秒単位で切り捨てます。';
$string['setupfactor'] = 'オーセンティケータアプリをセットアップする';
$string['setupfactor:account'] = 'アカウント:';
$string['setupfactor:devicename'] = 'デバイス名';
$string['setupfactor:devicenameinfo'] = 'これはどのデバイスが認証コードを受信するか識別するのに役立ちます。';
$string['setupfactor:enter'] = '詳細を手動で入力する';
$string['setupfactor:instructionsdevicename'] = '1. デバイスにデバイス名を付けます。';
$string['setupfactor:instructionsscan'] = '2. 認証アプリでQRコードをスキャンします。';
$string['setupfactor:instructionsverification'] = '3. 認証コードを入力します。';
$string['setupfactor:intro'] = 'この方法を設定するにはあなたは認証アプリを搭載したデバイスが必要です。あなたにアプリがない場合、ダウンロードできます。例えば<a href="https://2fas.com/" target="_blank">2FAS Auth</a>、<a href="https://freeotp.github.io/" target="_blank">FreeOTP</a>、Googleオーセンティケータ, MicrosoftオーセンティケータまたはTwilio Authyがあります。';
$string['setupfactor:key'] = '秘密鍵:';
$string['setupfactor:link'] = 'または手動で詳細を入力する';
$string['setupfactor:link_help'] = 'あなたがモバイルデバイスを使用してすでにオーセンティケータアプリがインストールされている場合、このリンクが機能する可能性があります。あなたがログインに使用するデバイスと同じデバイスでTOTPを使用した場合、MFAの利点が弱まる可能性があることに留意してください。';
$string['setupfactor:linklabel'] = 'このデバイスにインストール済みのアプリを開く';
$string['setupfactor:mode'] = 'モード:';
$string['setupfactor:mode:timebased'] = '時間ベース';
$string['setupfactor:scan'] = 'QRコードをスキャンする';
$string['setupfactor:scanfail'] = 'スキャンできませんか?';
$string['setupfactor:scanwithapp'] = 'あなたが選択したオーセンティケータアプリケーションでQRコードをスキャンします。';
$string['setupfactor:verificationcode'] = '認証コード';
$string['setupfactorbutton'] = 'セットアップ';
$string['summarycondition'] = 'はTOTPアプリを使用しています。';
$string['systimeformat'] = '%l:%M:%S %P %Z';
$string['verificationcode'] = '6桁の認証コードを入力する';
$string['verificationcode_help'] = 'Google認証システム等のオーセンティケータアプリを開いて、このサイトおよびユーザ名に合致する6桁のコードを探します。';
