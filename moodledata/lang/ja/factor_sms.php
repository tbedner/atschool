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
 * Strings for component 'factor_sms', language 'ja', version '4.4'.
 *
 * @package     factor_sms
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = '携帯電話番号を管理する';
$string['action:revoke'] = '携帯電話番号を削除する';
$string['addnumber'] = '携帯電話番号';
$string['clientnotfound'] = 'AWSサービスが見つかりません。クライアントは完全修飾クラス名にする必要があります。例) \\Aws\\S3\\S3Client';
$string['editphonenumber'] = '電話番号を編集する';
$string['editphonenumberinfo'] = 'あなたがコードを取得できなかった場合、または間違った番号を入力した場合、番号を編集して再度お試しください。';
$string['error:emptyverification'] = 'コードが空白です。再度お試しください。';
$string['error:wrongphonenumber'] = 'あなたが提供した電話番号は有効なフォーマットではありません。';
$string['error:wrongverification'] = 'コードが正しくありません。再度お試しください。';
$string['errorawsconection'] = 'AWSサーバへの接続中にエラーが発生しました: {$a}';
$string['errorsmssent'] = 'あなたの認証コードを含むSMSメッセージの送信中にエラーが発生しました。';
$string['event:smssent'] = 'SMSメッセージ送信完了';
$string['event:smssentdescription'] = 'ID {$a->userid} のユーザにSMSで認証コードが送信されました。情報: {$a->debuginfo}';
$string['info'] = 'あなたが選択した携帯電話番号に認証コードが送信されます。';
$string['logindesc'] = '携帯電話番号に6桁のコードを含むSMSを送信しました {$a}';
$string['loginoption'] = 'あなたの携帯電話にコードを送信する';
$string['loginskip'] = 'コードを受け取っていません。';
$string['loginsubmit'] = '続ける';
$string['logintitle'] = 'あなたの携帯電話に送信された認証コードを入力する';
$string['managefactor'] = 'SMSを管理する';
$string['managefactorbutton'] = '管理';
$string['manageinfo'] = 'あなたは「 {$a} 」を認証に使用しています。';
$string['phonehelp'] = '認証コードを受け取るため、あなたの携帯電話番号 (国番号を含む) を入力してください。';
$string['pluginname'] = 'SMS携帯電話';
$string['privacy:metadata'] = 'SMS携帯電話ファクタプラグインはいかなる個人情報も保存しません。';
$string['revokefactorconfirmation'] = '「 {$a} 」SMSを削除しますか?';
$string['settings:aws'] = 'AWS SNS';
$string['settings:aws:key'] = 'キー';
$string['settings:aws:key_help'] = 'Amazon APIキークレデンシャルです。';
$string['settings:aws:region'] = 'リージョン';
$string['settings:aws:region_help'] = 'Amazon API Gatewayリージョンです。';
$string['settings:aws:secret'] = 'シークレット';
$string['settings:aws:secret_help'] = 'Amazon APIシークレットクレデンシャルです。';
$string['settings:aws:usecredchain'] = 'デフォルトのクレデンシャルプロバイダチェーンを使用してAWSクレデンシャルを検索する';
$string['settings:countrycode'] = '国番号コード';
$string['settings:countrycode_help'] = 'ユーザが「+」プレフィックス付きの国際番号を入力しなかった場合のデフォルトとしての先頭「+」を除いた通話コードです。

通話コードの一覧はこのリンクを参照してください: {$a}';
$string['settings:duration'] = '有効期間';
$string['settings:duration_help'] = 'コードの有効期間です。';
$string['settings:gateway'] = 'SMSゲートウェイ';
$string['settings:gateway_help'] = 'あなたがメッセージを送信したいSMSプロバイダです。';
$string['setupfactor'] = 'SMSをセットアップする';
$string['setupfactorbutton'] = 'セットアップ';
$string['setupsubmitcode'] = '保存';
$string['setupsubmitphone'] = 'コードを送信する';
$string['smsstring'] = '{$a->code} はあなたの {$a->fullname} ワンタイムセキュリティコードです。

@{$a->url} #{$a->code}';
$string['summarycondition'] = 'SMSワンタイムセキュリティコードを使用する';
