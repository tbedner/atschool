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
 * Strings for component 'tool_policy', language 'ja', version '4.4'.
 *
 * @package     tool_policy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptanceacknowledgement'] = '私は同意するためのリクエストを上のユーザの代わりに受信したことを認めます。';
$string['acceptancenote'] = '所見';
$string['acceptancepolicies'] = 'ポリシー';
$string['acceptancessavedsucessfully'] = '同意が正常に保存されました。';
$string['acceptancestatusaccepted'] = '承認済み';
$string['acceptancestatusacceptedbehalf'] = 'ユーザの代理として承認済み';
$string['acceptancestatusdeclined'] = '拒否済み';
$string['acceptancestatusdeclinedbehalf'] = 'ユーザの代理として拒否済み';
$string['acceptancestatusoverall'] = '全体';
$string['acceptancestatuspartial'] = '一部承認済み';
$string['acceptancestatuspending'] = '保留';
$string['acceptanceusers'] = 'ユーザ';
$string['actions'] = '操作';
$string['activate'] = 'ステータスを「アクティブに」設定する';
$string['activateconfirm'] = '<p>あなたはポリシー「 {$a->name} 」を有効にしてバージョン「 {$a->revision} 」を現在のバージョンにしようとしています。</p><p>このサイトを利用する場合、すべてのユーザは新しいポリシーのバージョンに同意する必要があります。</p>';
$string['activateconfirmyes'] = 'アクティブ';
$string['activating'] = 'ポリシーを有効化する';
$string['agreepolicies'] = '次のポリシーに同意してください。';
$string['backtoprevious'] = '前のページに戻る';
$string['backtotop'] = 'トップに戻る';
$string['cachedef_policy_optional'] = 'ポリシーバージョンの任意/強制フラグのキャッシュ';
$string['consentbulk'] = '同意';
$string['consentpagetitle'] = '同意';
$string['contactdpo'] = 'ポリシーに関する質問はプライバシー責任者にご連絡ください。';
$string['dataproc'] = '個人データ処理';
$string['declineacknowledgement'] = '私は同意拒否のリクエストを上のユーザの代理として受信したことを認めます。';
$string['declinethepolicy'] = 'ユーザ同意を拒否する';
$string['deleteconfirm'] = '<p>本当にポリシー「 {$a->name} 」を削除してもよろしいですか?</p><p>この操作は元に戻すことはできません。</p>';
$string['deleting'] = 'バージョンを削除する';
$string['editingpolicydocument'] = 'ポリシーを編集する';
$string['errorpolicyversioncompulsory'] = '強制ポリシーは拒否できません!';
$string['errorpolicyversionnotfound'] = 'このIDのポリシーのバージョンはありません。';
$string['errorsaveasdraft'] = 'マイナチェンジは下書きとして保存できません。';
$string['errorusercantviewpolicyversion'] = 'ユーザにはこのバージョンのポリシーへのアクセス権がありません。';
$string['event_acceptance_created'] = 'ユーザポリシー同意が作成されました。';
$string['event_acceptance_updated'] = 'ユーザポリシー同意が更新されました。';
$string['filtercapabilityno'] = 'パーミッション: 同意できない';
$string['filtercapabilityyes'] = 'パーミッション: 同意できる';
$string['filterplaceholder'] = 'キーワードで検索またはフィルタを選択する';
$string['filterpolicy'] = 'ポリシー: {$a}';
$string['filterrevision'] = 'バージョン: {$a}';
$string['filterrevisionstatus'] = 'バージョン: {$a->name} ({$a->status})';
$string['filterrole'] = 'ロール: {$a}';
$string['filters'] = 'フィルタ';
$string['filterstatusdeclined'] = 'ステータス: 拒否';
$string['filterstatuspending'] = 'ステータス: 保留';
$string['filterstatusyes'] = 'ステータス: 同意';
$string['guestconsent:continue'] = '続ける';
$string['guestconsentmessage'] = 'このウェブサイトを続けて閲覧したい場合、あなたは私たちのポリシーに同意する必要があります:';
$string['iagree'] = '私は {$a} に同意します。';
$string['iagreetothepolicy'] = '同意する';
$string['idontagree'] = 'いいえ、私は {$a} に同意しません。';
$string['inactivate'] = 'ステータスを「非アクティブ」に設定する';
$string['inactivating'] = 'ポリシーを非アクティブにする';
$string['inactivatingconfirm'] = '<p>あなたはポリシー「 {$a->name}」 バージョン「 {$a->revision} 」を非アクティブにしようとしています。</p>';
$string['inactivatingconfirmyes'] = '非アクティブ';
$string['invalidversionid'] = 'このIDのポリシーはありません!';
$string['irevokethepolicy'] = 'ユーザ同意を取り下げる';
$string['listactivepolicies'] = 'アクティブポリシ一覧';
$string['managepolicies'] = 'ポリシーを管理する';
$string['minorchange'] = 'マイナチェンジ';
$string['minorchangeinfo'] = 'マイナーチェンジはポリシーの意味を変更しません。編集がマイナーチェンジであるとマークされた場合、ユーザは再度ポリシーに同意する必要はありません。';
$string['movedown'] = '下に移動する';
$string['moveup'] = '上に移動する';
$string['mustagreetocontinue'] = '続けるにはあなたはこれらすべてのポリシーに同意する必要があります。';
$string['newpolicy'] = '新しいポリシー';
$string['newversion'] = '新しいバージョン';
$string['noactivepolicies'] = '有効なバージョンのポリシーはありません。';
$string['nofiltersapplied'] = 'フィルタ適用なし';
$string['nopermissiontoagreedocs'] = 'ポリシーに同意するためのパーミッションがありません。';
$string['nopermissiontoagreedocs_desc'] = '申し訳ございません、あなたにはポリシーに同意するための必要なパーミッションがありません。<br />次のポリシーに同意するまであなたはこのサイトを利用できません:';
$string['nopermissiontoagreedocsbehalf'] = 'このユーザの代理でポリシーに同意するためのパーミッションがありません。';
$string['nopermissiontoagreedocsbehalf_desc'] = '申し訳ございません、あなたには {$a} の代理で次のポリシーに同意する必要なパーミッションがありません:';
$string['nopermissiontoagreedocscontact'] = 'さらに支援が必要な場合:';
$string['nopermissiontoviewpolicyversion'] = 'あなたにはこのポリシーのバージョンを閲覧するためのパーミッションがありません。';
$string['nopolicies'] = '登録済みユーザのための有効なバージョンのポリシーはありません。';
$string['pluginname'] = 'ポリシー';
$string['policiesagreements'] = 'ポリシーおよび同意';
$string['policy:accept'] = 'ポリシーに同意する';
$string['policy:acceptbehalf'] = '他の人の代理としてポリシーに同意する';
$string['policy:managedocs'] = 'ポリシーを管理する';
$string['policy:viewacceptances'] = 'ユーザ同意レポートを表示する';
$string['policydocaudience'] = 'ユーザ同意';
$string['policydocaudience0'] = 'すべてのユーザ';
$string['policydocaudience1'] = '認証済みユーザ';
$string['policydocaudience2'] = 'ゲスト';
$string['policydoccontent'] = '完全なポリシー';
$string['policydochdrpolicy'] = 'ポリシー';
$string['policydochdrversion'] = 'ドキュメントバージョン';
$string['policydocname'] = '名称';
$string['policydocoptional'] = '同意任意';
$string['policydocoptionalno'] = '強制';
$string['policydocoptionalyes'] = '任意';
$string['policydocrevision'] = 'バージョン';
$string['policydocsummary'] = '概要';
$string['policydocsummary_help'] = 'このテキストでは潜在的にシンプルおよび簡単にアクセス可能な形で分かりやすい言葉を使用したポリシーの概要を提供してください。';
$string['policydoctype'] = 'タイプ';
$string['policydoctype0'] = 'サイトポリシー';
$string['policydoctype1'] = 'プライバシーポリシー';
$string['policydoctype2'] = 'サードパーティポリシー';
$string['policydoctype99'] = 'その他のポリシー';
$string['policydocuments'] = 'ポリシードキュメント';
$string['policynamedversion'] = 'ポリシー {$a->name} (バージョン {$a->revision} - {$a->id})';
$string['policypriorityagreement'] = '他のポリシーを表示する前にポリシーを表示する';
$string['policyversionacceptedinbehalf'] = 'このポリシーへの同意はあなたの代理として与えられました。';
$string['policyversionacceptedinotherlang'] = 'このポリシーバージョンへの同意は異なる言語で与えられました。';
$string['previousversions'] = '{$a} 前のバージョン';
$string['privacy:metadata:acceptances'] = 'ユーザによるポリシー同意の情報です。';
$string['privacy:metadata:acceptances:lang'] = '同意時にポリシーの表示に使用された言語です。';
$string['privacy:metadata:acceptances:note'] = '別のユーザの代理でポリシーに同意したユーザが追加したすべてのコメントです。';
$string['privacy:metadata:acceptances:policyversionid'] = '同意されたポリシーのバージョンです。';
$string['privacy:metadata:acceptances:status'] = '同意のステータスです。';
$string['privacy:metadata:acceptances:timecreated'] = 'ユーザがポリシーに同意した日時です。';
$string['privacy:metadata:acceptances:timemodified'] = 'ユーザが同意を更新した日時です。';
$string['privacy:metadata:acceptances:userid'] = 'このポリシー同意に関連するユーザです。';
$string['privacy:metadata:acceptances:usermodified'] = '別のユーザの代理でポリシーに同意したユーザです。';
$string['privacy:metadata:subsystem:corefiles'] = 'ポリシーツールは概要および完全なポリシーを含むファイルを保存します。';
$string['privacy:metadata:versions'] = 'ポリシーバージョン情報です。';
$string['privacy:metadata:versions:archived'] = 'ポリシーステータスです (アクティブまたは非アクティブ)。';
$string['privacy:metadata:versions:audience'] = '同意を求められるユーザのタイプです。';
$string['privacy:metadata:versions:content'] = 'このポリシーのバージョンのコンテンツです。';
$string['privacy:metadata:versions:contentformat'] = 'コンテンツフィールドのフォーマットです。';
$string['privacy:metadata:versions:name'] = 'ポリシー名です。';
$string['privacy:metadata:versions:policyid'] = 'このバージョンが関連するポリシーです。';
$string['privacy:metadata:versions:revision'] = 'このバージョンのポリシーの改訂版名です。';
$string['privacy:metadata:versions:summary'] = 'このバージョンのポリシーの概要です。';
$string['privacy:metadata:versions:summaryformat'] = '概要フィールドのフォーマットです。';
$string['privacy:metadata:versions:timecreated'] = 'このバージョンのポリシーが作成された日時です。';
$string['privacy:metadata:versions:timemodified'] = 'このバージョンのポリシーが更新された日時です。';
$string['privacy:metadata:versions:type'] = 'ポリシータイプです。';
$string['privacy:metadata:versions:usermodified'] = 'ポリシーを修正したユーザです。';
$string['privacysettings'] = 'プライバシー設定';
$string['readpolicy'] = '私たちの {$a} をお読みください。';
$string['refertofullpolicytext'] = 'あなたがテキストをレビューしたい場合、完全な {$a} をご覧ください。';
$string['response'] = '回答';
$string['responseby'] = '回答者';
$string['responseon'] = '日付';
$string['revokeacknowledgement'] = '私が上のユーザの代理として同意取り下げのリクエストを受信したことを認めます。';
$string['save'] = '保存';
$string['saveasdraft'] = '下書きとして保存する';
$string['selectpolicyandversion'] = 'ポリシーまたはバージョンを選択するには上のフィルタを使用してください。';
$string['selectuser'] = 'ユーザ {$a} を選択する';
$string['selectusersforconsent'] = '代理として同意を与えるユーザを選択する';
$string['settodraft'] = '新しい下書きを作成する';
$string['status'] = 'ポリシーステータス';
$string['status0'] = '下書き';
$string['status1'] = 'アクティブ';
$string['status2'] = '非アクティブ';
$string['statusformtitleaccept'] = 'ポリシー承認';
$string['statusformtitledecline'] = 'ポリシー拒否';
$string['statusformtitlerevoke'] = 'ポリシー取り消し';
$string['statusinfo'] = '初回ログインまたは既存ユーザによる次回ログインであるとしても、「有効」ステータスのポリシーはユーザに同意を求めます。';
$string['steppolicies'] = 'ポリシー {$a->numpolicy} / {$a->totalpolicies}';
$string['useracceptanceactionaccept'] = '承認';
$string['useracceptanceactionacceptone'] = '{$a} を承認する';
$string['useracceptanceactionacceptpending'] = '保留中のポリシーを承認する';
$string['useracceptanceactiondecline'] = '拒否';
$string['useracceptanceactiondeclineone'] = '{$a} を拒否する';
$string['useracceptanceactiondeclinepending'] = '保留中のポリシーを拒否する';
$string['useracceptanceactiondetails'] = '詳細';
$string['useracceptanceactionrevoke'] = '取り消し';
$string['useracceptanceactionrevokeall'] = 'ポリシーの承認を取り消す';
$string['useracceptanceactionrevokeone'] = '{$a} の承認を取り消す';
$string['useracceptancecount'] = '{$a->agreedcount} / {$a->userscount} ({$a->percent}%)';
$string['useracceptancecountna'] = 'N/A';
$string['useracceptances'] = 'ユーザ同意';
$string['userpolicysettings'] = 'ポリシー';
$string['usersaccepted'] = '同意';
$string['viewarchived'] = '前のバージョンを閲覧する';
$string['viewconsentpageforuser'] = '{$a} の代わりにこのページを閲覧する';
