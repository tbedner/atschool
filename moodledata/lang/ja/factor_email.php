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
 * Strings for component 'factor_email', language 'ja', version '4.4'.
 *
 * @package     factor_email
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['email:accident'] = 'あなたがこのメールを要求していない場合、続けるをクリックしてログイン試行を無効にしてください。あなたが誤ってリンクをクリックしてしまった場合、キャンセルをクリックしてください。この場合、何も実行されません。';
$string['email:browseragent'] = 'このリクエストのブラウザ詳細: 「 {$a} 」';
$string['email:geoinfo'] = 'このリクエストの概要は次のとおりです:';
$string['email:greeting'] = 'こんにちは {$a} さん 👋';
$string['email:ipinfo'] = 'ログインリクエスト詳細:';
$string['email:link'] = '確認リンク';
$string['email:loginlink'] = 'またはあなたが同じデバイス上の場合、この {$a} を使用します。';
$string['email:message'] = 'あなたの {$a->sitename} ({$a->siteurl}) の認証コードです。';
$string['email:originatingip'] = 'このログインリクエストは「 {$a} 」から実行されました。';
$string['email:revokelink'] = 'これがあなたではない場合、あなたは {$a}。';
$string['email:revokesuccess'] = 'このコードは正常に取り消されました。このユーザのセッションはすべて終了しました。アカウントのセキュリティが確認されるまでメールを要素として使用できません。';
$string['email:stoploginlink'] = 'このログイン試行を停止できます';
$string['email:subject'] = 'あなたの認証コードです。';
$string['email:uadescription'] = 'このリクエストのブラウザID:';
$string['email:validity'] = 'コードは1回のみ使用可能であり、{$a} に対して有効です。';
$string['error:badcode'] = 'コードが見つかりませんでした。これは古いリンクであるか、新しいコードがメール送信されたか、またはこのコードでログインに成功した可能性があります。';
$string['error:parameters'] = '不正なページパラメータです。';
$string['error:wrongverification'] = '不正な認証コードです。再度お試しください。';
$string['event:unauthemail'] = '未承認のメールを受信しました。';
$string['info'] = 'あなたは認証にメール {$a} を使用しています。これはサイト管理者によって設定されました。';
$string['logindesc'] = 'あなたのメールアドレス宛に6桁のコードを送信しました: {$a}';
$string['loginoption'] = 'コードをメールで受け取る';
$string['loginskip'] = '私はコードを受け取っていません。';
$string['loginsubmit'] = '続ける';
$string['logintitle'] = 'メールで本人確認する';
$string['managefactor'] = 'メールを管理する';
$string['manageinfo'] = '「 {$a} 」が認証に使用されています。これはあなたの管理者によって設定されました。';
$string['pluginname'] = 'メール';
$string['privacy:metadata'] = 'メール要素プラグインはいかなる個人データも保存しません。';
$string['settings:duration'] = '有効期間';
$string['settings:duration_help'] = 'コードの有効期間です。';
$string['settings:suspend'] = '未承認アカウントを停止する';
$string['settings:suspend_help'] = '未承認のメール認証を受信した場合、ユーザアカウントを一時停止するにはこの設定を有効にしてください。';
$string['setupfactor'] = 'メールをセットアップする';
$string['summarycondition'] = 'は有効なメールセットアップではありません。';
$string['unauthemail'] = '未承認メール';
$string['unauthloginattempt'] = 'ID {$a->userid} のユーザがブラウザエージェント {$a->useragent} を使用したIPアドレス {$a->ip} からのメール認証で不正ログインを試みました。';
$string['verificationcode'] = '確認のため認証コードを入力する';
$string['verificationcode_help'] = 'あなたのメールアドレス宛に認証コードが送信されました。';
