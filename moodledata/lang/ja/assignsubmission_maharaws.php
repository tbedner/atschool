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
 * Strings for component 'assignsubmission_maharaws', language 'ja', version '4.4'.
 *
 * @package     assignsubmission_maharaws
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['archiveonrelease'] = '評定後にアーカイブする';
$string['archiveonrelease_help'] = '評定後、ポートフォリオのスナップショットが作成されます。';
$string['assign_submission_maharaws_description'] = 'Mahara課題提出プラグインで使用されるMahara関数です。<br />このサービスをMoodleサイトで公開しても影響はありません。あなたが{$a} の課題で使用できるようにしたい場合、このサービスに登録してください。<br />';
$string['assign_submission_maharaws_name'] = 'Mahara課題提出 (ウェブサービス)';
$string['collectionsby'] = 'コレクション by {$a}';
$string['debug'] = 'OAuthデバッグ';
$string['debug_help'] = 'OAuth SSOログインジャンプを中断してパラメータを検査できるようにするデバッグオプションです。';
$string['defaultlockpages'] = '「 {$a} 」をデフォルトにする';
$string['defaultlockpages_help'] = '新しいMahara課題で「 {$a} 」設定に使用するデフォルト設定です。';
$string['defaulton'] = 'デフォルトで有効にする';
$string['defaulton_help'] = 'この設定を有効にした場合、すべての新しい課題でこの提出方法がデフォルトで有効にされます。';
$string['defaultsite'] = '「 {$a} 」をデフォルトにする';
$string['defaultsite_help'] = '新しいMahara課題で「 {$a} 」設定に使用するデフォルト設定です。';
$string['emptysubmission'] = 'あなたは提出するポートフォリオを選択していません。';
$string['enabled'] = 'Mahara';
$string['enabled_help'] = 'この設定を有効にした場合、学生はこのコースでMaharaページおよびコレクションをこのサイトでの評価のため提出できます。';
$string['errorinvalidapistring'] = 'Maharaインスタンスが予期しない形式のAPI文字列を返しました。';
$string['errorinvalidhost'] = '無効なホストIDが選択されました。';
$string['errorinvalidstatus'] = '開発者エラー: assign_submission_mahara::set_mahara_submission_status()に送信された提出ステータスが無効です。';
$string['errorinvalidurl'] = 'Maharaウェブサービスへの接続中にエラーが発生しました。{$a}';
$string['errorrequest'] = 'OAuthリクエストの送信中にエラーが発生しました。{$a}';
$string['errorvieworcollectionalreadysubmitted'] = '選択されたページまたはコレクションを提出できませんでした。別のものを選択してください。';
$string['errorwsrequest'] = 'Maharaリクエストの送信中にエラーが発生しました。{$a}';
$string['eventassessableuploaded'] = 'ページまたはコレクションが提出されました。';
$string['forceglobalcredentials'] = 'グローバルクレデンシャルを強制する';
$string['forceglobalcredentials_help'] = '常にこれらのクレデンシャルをMaharaへの接続に使用します。';
$string['forceglobalcredentialserror'] = 'MaharaのURLおよび認証情報は強制されていますが、サイトレベルでは設定されていません - あなたの管理者にMaharaサブミッションプラグインを正しく設定するようご依頼ください。';
$string['forceglobalcredentialswarning'] = 'Mahara URLおよび認証情報がグローバルに設定されました。';
$string['gclabel'] = 'グローバルクレデンシャル';
$string['invalidurlhelp'] = 'URLおよびOAuthクレデンシャルが正しいか、HTTPSを使用している場合は有効なSSL証明書であるか確認します。また、OAuthアクセスに正しい関数が割り当てられているか確認します。';
$string['key'] = 'MaharaウェブサービスOAuthキー';
$string['key_help'] = 'パートナーMaharaサイトからのウェブサービスOAuthキーを入力してください。';
$string['legacy_ext_username'] = 'レガシーext_user_usernameフォーマットを使用する';
$string['legacy_ext_username_help'] = 'このオプションを有効にした場合、ext_usr_usernameフィールドのフォーマットは次の設定に従います: 「Fieldname:value」 あなたに特別な理由がない限り、この設定の有効化はお勧めできません。';
$string['lockpages'] = '提出済みポートフォリオをロックする';
$string['lockpages_help'] = '「はい、ロックを継続してください」が選択された場合、提出済みMaharaページおよびコレクションはMahara内で編集ロックされて評定後もロックしたままにされます。「はい、評定後にはロック解除してください」が選択された場合、ページまたはコレクションは提出の評定後にロック解除されます。採点ワークフローが使用されている場合、学生に評点がリリースされた時点でロック解除されます。';
$string['mahara'] = 'Mahara';
$string['maharaws:configure'] = 'Mahara提出を設定する';
$string['nomaharahostsfound'] = 'Maharaホストが見つかりませんでした。';
$string['noneselected'] = '未選択';
$string['noviewscreated'] = 'あなたには利用可能なページまたはコレクションがありません。「 {$a->name} 」にアクセスして<a href="{$a->jumpurl}" target="_blank" rel="noopener noreferrer">新しいポートフォリオページまたはコレクションを作成してください</a>。';
$string['option_collections'] = 'コレクション';
$string['option_views'] = 'ページ';
$string['outputforlog'] = '{$a->remotehostname}: {$a->viewtitle} (ページID: {$a->viewid})';
$string['outputforlognew'] = '新しい {$a} 提出';
$string['pluginname'] = 'Mahara提出';
$string['previousattemptsnotvisible'] = 'Mahara提出プラグインを使用した過去の提出は表示されません。';
$string['privacy:metadata:assignment'] = '課題ID';
$string['privacy:metadata:assignmentsubmission_maharaws:coursefullname'] = 'より良いユーザエクスペリエンスを可能にするため、コースフルネームがリモートシステムに送信されます。';
$string['privacy:metadata:assignmentsubmission_maharaws:courseid'] = 'あなたのポートフォリオを正しいコースに送信するため、MoodleからコースIDがリモートシステムに送信されます。';
$string['privacy:metadata:assignmentsubmission_maharaws:courseshortname'] = 'より良いユーザエクスペリエンスを可能にするため、コース省略名がリモートシステムに送信されます。';
$string['privacy:metadata:assignmentsubmission_maharaws:email'] = 'より良いユーザエクスペリエンスおよびアカウント管理を可能にするため、あなたのメールがリモートシステムに送信されます。';
$string['privacy:metadata:assignmentsubmission_maharaws:firstname'] = 'より良いユーザエクスペリエンスを可能にするため、あなたの名がリモートシステムに送信されます。';
$string['privacy:metadata:assignmentsubmission_maharaws:fullname'] = 'より良いユーザエクスペリエンスを可能にするため、あなたのフルネームがリモートシステムに送信されます。';
$string['privacy:metadata:assignmentsubmission_maharaws:idnumber'] = 'あなたのデータにリモートシステムでアクセスできるようMoodleからIDナンバーが送信されます';
$string['privacy:metadata:assignmentsubmission_maharaws:lastname'] = 'より良いユーザエクスペリエンスを可能にするため、あなたの姓がリモートシステムに送信されます。';
$string['privacy:metadata:assignmentsubmission_maharaws:userid'] = 'あなたのデータにリモートシステムでアクセスできるようMoodleからユーザIDが送信されます';
$string['privacy:metadata:assignmentsubmission_maharaws:username'] = 'あなたのデータにリモートシステムでアクセスできるようMoodleからあなたのユーザ名が送信されます';
$string['privacy:metadata:assignsubmission_maharaws'] = '課題に提出されたMaharaページおよびコレクションに関する情報を保存します。';
$string['privacy:metadata:iscollection'] = 'この提出はページですか、それともコレクションですか?';
$string['privacy:metadata:submission'] = '提出ID';
$string['privacy:metadata:viewid'] = 'MaharaページまたはコレクションのID';
$string['privacy:metadata:viewstatus'] = 'Maharaページまたはコレクションのステータス';
$string['privacy:metadata:viewtitle'] = 'Maharaページまたはコレクションのタイトル';
$string['privacy:metadata:viewurl'] = 'MaharaページまたはコレクションのURL';
$string['privacy:path'] = 'Maharaページおよびコレクション';
$string['remoteuser'] = 'remoteuserを使用する';
$string['secret'] = 'MaharaウェブサービスOAuthシークレット';
$string['secret_help'] = 'パートナーMaharaサイトからのウェブサービスOAuthシークレットを入力してください。';
$string['selectmaharaview'] = 'あなたの利用可能なポートフォリオページまたはコレクションを下のリストから1つ選択するか、「 {$a->name} 」にアクセスして<a href="{$a->jumpurl}" target="_blank" rel="noopener noreferrer">新しいポートフォリオページまたはコレクションを作成してください</a>。';
$string['token'] = 'Maharaウェブサービストークン';
$string['token_help'] = 'パートナーMaharaサイトからのウェブサービス認証トークンを入力してください。';
$string['url'] = 'MaharaサイトURL';
$string['url_help'] = 'この設定によりあなたの学生がどのMaharaサイトからポートフォリオを提出するか定義できます。MaharaサイトのURLを入力してください。例) https://mahara.some.edu/';
$string['viewsby'] = 'ページ by {$a}';
$string['yeskeeplocked'] = 'はい、ロックを継続してください';
$string['yesunlock'] = 'はい、評定後にはロック解除してください';
