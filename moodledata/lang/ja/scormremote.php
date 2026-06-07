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
 * Strings for component 'scormremote', language 'ja', version '4.4'.
 *
 * @package     scormremote
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseclient'] = 'クライアントIDを埋め込む';
$string['chooseclientdesc'] = 'ラッパーを特定のクライアントと関連付けます。';
$string['client'] = 'クライアント';
$string['domain'] = 'ドメイン';
$string['domain_help'] = 'ドメイン名とはユーザが特定のウェブサイトに到達するためにブラウザウィンドウに入力するテキストです。例えばグーグルのドメイン名は「google.com」です。';
$string['embedclientid'] = 'クライアントIDを埋め込む';
$string['error_clientdomainnotunique'] = 'ドメイン「 {$a} 」のクライアントがすでに存在します。ドメインはユニークでなければなりません。';
$string['error_clientdomainnotvalid'] = '指定された値「 {$a} 」は有効なドメインではありません (例: google.com)。';
$string['error_clientnamelength'] = 'クライアント名は半角2文字以上100文字以下にする必要がありますが、指定された名称には {$a} 文字が含まれています。';
$string['error_clientnamenotvalid'] = 'クライアント名に指定された値が有効ではありません (クライアント名: {$a->name})。';
$string['error_clientnotfound'] = '指定されたクライアントIDが見つかりませんでした (id: {$a->id})。';
$string['error_coursenotfound'] = '指定されたコースIDが見つかりませんでした (id: {$a->id})。';
$string['error_coursesnotunique'] = '複数のティアを選択できるのはそれぞれに固有のコースがある場合のみです。';
$string['error_imsmanifestmissing'] = 'imsmanifest.xmlがファイルシステムにありません。パッケージを再度アップロードしてください。';
$string['error_tiernamelength'] = 'ティア名は半角英数字1文字以上100文字以下にする必要がありますが、指定された名称には {$a} 文字が含まれています。';
$string['error_tiernotfound'] = '指定されたティアIDが見つかりませんでした (ID: {$a->id})。';
$string['error_tierseatnumber'] = 'ティアシートは0以上にする必要があります。';
$string['errorpage_badrequestmessage'] = 'サーバはこのリクエストを処理できません。処理を継続したい場合、あなたはこのリクエストに修正を加える必要があります。';
$string['errorpage_badrequesttitle'] = 'Bad Request';
$string['errorpage_sublimitmessage'] = 'サブスクリプション上限に達しました。この問題を解決するにはあなたの先生にご連絡ください。ドメイン: {$a->domain}';
$string['errorpage_sublimittitle'] = 'サブスクリプションの上限に達しました。';
$string['errorpage_subrequiredmessage'] = 'このコンテンツは購読ユーザのみ利用できます。この問題を解決するにはあなたの先生にご連絡ください。ドメイン: {$a->domain}';
$string['errorpage_subrequiredtitle'] = '要サブスクリプション';
$string['errorpage_unauthorizedmessage'] = 'このリクエストの継続は許可されません。この問題を解決するにはあなたの先生にご連絡ください。ドメイン: {$a->domain}';
$string['errorpage_unauthorizedtitle'] = '未承認';
$string['event_error_name'] = 'SCORMリモートエラー';
$string['event_nosubscription'] = 'このパッケージを含むサブスクリプションがクライアント「 {$a->clientname} 」にないため、ユーザ「 {$a->fullname} 」はコース (ID: {$a->courseid}) のSCORMパッケージへのアクセスを拒否されました。';
$string['event_remoteviewed_name'] = 'SCORMリモートが閲覧されました。';
$string['event_scormviewed'] = 'ユーザ「 {$a->fullname} 」がクライアント「 {$a->clientname} 」からコース (ID: {$a->courseid}) のSCORMパッケージを閲覧しました。';
$string['event_seatallocated'] = '新しいシート ({$a->seatcount}/{$a->seatlimit}) がユーザ「 {$a->fullname} 」のクライアント「 {$a->clientname} 」に割り当てられました。';
$string['event_seatallocated_name'] = 'SCORMリモートシートが割り当てられました。';
$string['event_seatlimitreached'] = 'クライアント「 {$a->clientname}」 ({$a->origin}) がシート制限 ({$a->seatlimit}) に達したため、ユーザ「 {$a->fullname} 」はコース (ID: {$a->courseid}) のSCORMパッケージへのアクセスを拒否されました。';
$string['event_unknownorigin'] = 'リクエスト発信元が不明なクライアント「 {$a->origin} 」であるため、ユーザ「 {$a->fullname} 」はコース (ID: {$a->courseid}) のSCORMパッケージへのアクセスを拒否されました。';
$string['filename'] = 'ファイル名';
$string['filenameother'] = '他のファイル名';
$string['filenameother_error'] = '指定されたファイル名は許可されません。次の文字のみ使用してください: 0-9, a-z, A-Z, spaces, ., _ ,  -';
$string['filenameother_help'] = '上で「その他」を選択した場合のみ使用されます。有効なファイル名である必要があります。ファイル名の末尾が「.zip 」ではない場合、システムが追加します。';
$string['manage_adddomain'] = 'ドメインを追加する';
$string['manage_additionalclientdomain'] = '許可クライアントドメイン';
$string['manage_alloweddomains'] = '追加許可ドメイン';
$string['manage_clientadd'] = '新しいクライアントを追加する';
$string['manage_clientcreateheader'] = '新しいクライアントを追加する';
$string['manage_clientdeletemessage'] = '本当にこのクライアントおよびその中に含まれるすべてのデータを完全に削除してもよろしいですか?';
$string['manage_clientdeletesuccess'] = 'クライアントが正常に削除されました。';
$string['manage_clientdetails'] = 'クライアント詳細';
$string['manage_clientdomain'] = 'クライアントドメイン';
$string['manage_clientname'] = 'クライアント名';
$string['manage_clients'] = 'クライアントを管理する';
$string['manage_clientupdateheader'] = 'クライアントを更新する: {$a}';
$string['manage_domains_desc'] = 'これらのドメインからのユーザは許可されますが、主クライアントドメインからのユーザとして表示されます。';
$string['manage_primaryclientdomain'] = '主クライアントドメイン';
$string['manage_subscriptions'] = 'コースサブスクリプション';
$string['manage_tieradd'] = '新しいティアを追加する';
$string['manage_tiercreateheader'] = '新しいティアを追加する';
$string['manage_tierdeletemessage'] = '本当にこのティアおよびその中に含まれるすべてのデータを完全に削除してもよろしいですか?';
$string['manage_tierdeletesuccess'] = 'ティアが正常に削除されました。';
$string['manage_tierdescription'] = '説明';
$string['manage_tiername'] = '名称';
$string['manage_tiers'] = 'ティアを管理する';
$string['manage_tierscmexplaination'] = '* S / C / Mは購読者、コースおよびモジュールを表します。';
$string['manage_tiersdescription'] = 'ティアとはクライアントごとの参加者を制限する手段です。この制限はシートと呼ばれます。クライアントは設定されたコースのすべてのモジュールにアクセスできるティアを購読できます。下の表は設定されたすべてのティアをシート順に表示しています。';
$string['manage_tierseats'] = 'シート';
$string['modulename'] = 'SCORMリモート';
$string['modulenameplural'] = 'SCORMリモート';
$string['optionalsettings'] = 'オプション設定';
$string['pluginadministration'] = 'SCORMリモートモジュール管理';
$string['pluginname'] = 'SCORMリモート';
$string['privacy:metadata:mod_scormremote:clientid'] = 'このドメインがリンクされているクライアントIDです。';
$string['privacy:metadata:mod_scormremote:course'] = 'この活動が含まれるコースのIDです。';
$string['privacy:metadata:mod_scormremote:domain'] = 'ドメインです。';
$string['privacy:metadata:mod_scormremote:intro'] = '活動説明です。';
$string['privacy:metadata:mod_scormremote:introformat'] = 'イントロフィールドのフォーマットです。';
$string['privacy:metadata:mod_scormremote:name'] = 'ティア名です。';
$string['privacy:metadata:mod_scormremote:primarydomain'] = 'クライアントの主ドメインです。';
$string['privacy:metadata:mod_scormremote:reference'] = 'アップロードされた.zip/.xmlのファイル名です。';
$string['privacy:metadata:mod_scormremote:scormremote'] = 'scormremote活動モジュールのインスタンスを格納します。';
$string['privacy:metadata:mod_scormremote:scormremote_client_domains'] = 'ここにクライアントのドメインが保存されます。';
$string['privacy:metadata:mod_scormremote:scormremote_clients'] = '設定されたクライアント、システムレベルのクライアントのためのストレージです。';
$string['privacy:metadata:mod_scormremote:scormremote_tiers'] = 'シートに関する情報を保持してサブスクリプションおよびコースにリンクされます。';
$string['privacy:metadata:mod_scormremote:seats'] = '最大許容シート数です。';
$string['privacy:metadata:mod_scormremote:sha1hash'] = 'パッケージコンテンツまたは拡張パスのハッシュです。';
$string['scormremote:addinstance'] = 'SCORMリモートインスタンスを追加する';
$string['scormremote:deleteclient'] = 'SCORMリモートクライアントを削除する';
$string['scormremote:deletetier'] = 'SCORMリモートティアを削除する';
$string['scormremote:downloadwrapper'] = 'ラッパーパッケージをダウンロードする';
$string['scormremote:manageclient'] = 'SCORMリモートクライアントを管理する';
$string['scormremote:managetier'] = 'SCORMリモートティアを管理する';
$string['scormremote:viewclient'] = 'SCORMクライアントを表示する';
$string['scormremote:viewtier'] = 'SCORMリモートティアを表示する';
$string['searchclient'] = 'クライアントを検索する';
$string['seats'] = 'シート';
$string['seatsinuse'] = '使用中のシート';
$string['subs'] = 'サブスクリプション';
$string['subscribers'] = '購読者';
$string['wrappedpackagefile'] = 'ラップされたパッケージファイル';
$string['wrapper'] = 'ラッパー';
