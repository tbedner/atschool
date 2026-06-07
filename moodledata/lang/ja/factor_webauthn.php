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
 * Strings for component 'factor_webauthn', language 'ja', version '4.4'.
 *
 * @package     factor_webauthn
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = 'セキュリティキーを管理する';
$string['action:revoke'] = 'セキュリティキーを削除する';
$string['authenticator:ble'] = 'BLE';
$string['authenticator:hybrid'] = 'ハイブリッド';
$string['authenticator:internal'] = '内部';
$string['authenticator:nfc'] = 'NFC';
$string['authenticator:usb'] = 'USB';
$string['authenticatorname'] = 'セキュリティキー名';
$string['error'] = '認証に失敗しました。';
$string['error:alreadyregistered'] = 'このセキュリティキーはすでに登録されています。';
$string['info'] = '物理的なセキュリティキーまたは指紋スキャナを使用する';
$string['logindesc'] = 'セキュリティキーを使用するには「続ける」をクリックしてください。';
$string['loginoption'] = 'セキュリティキーを使用する';
$string['loginskip'] = '私にはセキュリティキーがありません。';
$string['loginsubmit'] = '続ける';
$string['logintitle'] = 'セキュリティキーで本人確認する';
$string['managefactor'] = 'セキュリティキーを管理する';
$string['managefactorbutton'] = '管理';
$string['manageinfo'] = 'あなたは「 {$a} 」を認証に使用しています。';
$string['pluginname'] = 'セキュリティキー';
$string['privacy:metadata'] = 'セキュリティキー要素プラグインはいかなる個人データも保存しません。';
$string['register'] = 'セキュリティキー登録';
$string['replacefactor'] = 'セキュリティキーを置き換える';
$string['replacefactorconfirmation'] = '「 {$a} 」セキュリティキーを置き換えますか?';
$string['revokefactorconfirmation'] = '「 {$a} 」セキュリティキーを削除しますか?';
$string['settings:authenticatortypes'] = 'オーセンティケータのタイプ';
$string['settings:authenticatortypes_help'] = '特定のタイプのオーセンティケータを切り替える';
$string['settings:userverification'] = 'ユーザ検証';
$string['settings:userverification_help'] = '認証する人が実際に本人であることを確認する役割を果たします。ユーザ検証にはパスワード、PIN、指紋等、さまざまな形式があります。';
$string['setupfactor'] = 'セキュリティキーをセットアップする';
$string['setupfactor:instructionsregistersecuritykey'] = '2. セキュリティキーを登録する。';
$string['setupfactor:instructionssecuritykeyname'] = '1. あなたのキーに名称を付ける。';
$string['setupfactor:intro'] = 'セキュリティキーはあなた自身を認証するために使用できる物理デバイスです。セキュリティキーにはUSBトークン、Bluetoothデバイス、または携帯電話またはコンピュータに内蔵された指紋スキャナ等があります。';
$string['setupfactor:securitykeyinfo'] = 'これはどのセキュリティキーを使用しているか識別するのに役立ちます。';
$string['setupfactorbutton'] = 'セットアップ';
$string['summarycondition'] = 'はWebAuthnがサポートするオーセンティケータを使用しています。';
$string['userverification:discouraged'] = '例えばユーザインタラクションを最小限にするためにユーザ検証を採用すべきではありません。';
$string['userverification:preferred'] = 'ユーザ検証は望ましいのですが、仮にユーザ認証が欠けていたとしても認証は失敗しません。';
$string['userverification:required'] = 'ユーザ検証を必要とします (PIN等)。キーにユーザ認証がない場合、認証は失敗します。';
