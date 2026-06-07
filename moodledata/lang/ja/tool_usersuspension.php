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
 * Strings for component 'tool_usersuspension', language 'ja', version '4.4'.
 *
 * @package     tool_usersuspension
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:confirm-delete-exclusion'] = '本当にこのアイテムを除外リストから削除してもよろしいですか?';
$string['action:delete-exclusion'] = '除外リストからアイテムを削除する';
$string['action:exclude:add:cohort'] = 'コーホート除外を追加する';
$string['action:exclude:add:user'] = 'ユーザ除外を追加する';
$string['button:backtocourse'] = 'コースに戻る';
$string['button:backtoexclusions'] = '除外概要に戻る';
$string['button:backtouploadform'] = 'アップロードフォームに戻る';
$string['button:continue'] = '続ける';
$string['config:cleanlogs:disabled'] = '自動ログクリーニングはグローバルツール設定で無効にされています。';
$string['config:cleanup:disabled'] = 'ユーザ利用停止オプション「クリーンアップ」はグローバルツール設定で無効にされています。';
$string['config:fromfolder:disabled'] = 'ユーザ利用停止オプション「アップロードから利用停止する」はグローバルツール設定で無効にされています。';
$string['config:fromfolder:enabled'] = 'ユーザ利用停止オプション「アップロードから利用停止する」はグローバルツール設定で有効にされています。';
$string['config:smartdetect:disabled'] = 'ユーザ利用停止オプション「スマート検出」はグローバルツール設定で無効にされています。';
$string['config:tool:disabled'] = 'ユーザ利用停止ユーティリティはグローバルツール設定で無効にされています。';
$string['config:tool:enabled'] = 'ユーザ利用停止ユーティリティはグローバルツール設定で有効にされています。';
$string['config:unsuspendfromfolder:disabled'] = 'ユーザ利用停止オプション「アップロードから利用停止解除する」はグローバルツール設定で無効にされています。';
$string['config:unsuspendfromfolder:enabled'] = 'ユーザ利用停止オプション「アップロードから利用停止解除する」はグローバルツール設定で有効にされています。';
$string['config:uploadfile:exists'] = 'アップロードファイル「 {$a} 」が存在します。';
$string['config:uploadfile:not-exists'] = 'アップロードファイル「 {$a} 」が存在しません。';
$string['config:uploadfolder:exists'] = 'アップロードフォルダ「 {$a} 」が存在します。';
$string['config:uploadfolder:not-exists'] = 'アップロードフォルダ「 {$a} 」が存在しません。';
$string['configoption:notactive'] = '以下の概要にもかかわらず、設定では実際の処理は実行されません。';
$string['csv:delimiter'] = 'デリミタ';
$string['csv:enclosure'] = '囲み文字';
$string['csv:upload:continue'] = '続ける';
$string['csvdelimiter'] = 'CSVデリミタ';
$string['csvencoding'] = 'CSVエンコーディング';
$string['deleteon'] = '削除予定';
$string['download-sample-csv'] = 'サンプルCSVファイルをダウンロードする';
$string['email:user:delete:body'] = '<p>{$a->name} さん</p>
<p>あなたのアカウントは {$a->timesuspended} 間の利用停止後に削除されました。</p>
<p>{$a->signature}</p>';
$string['email:user:delete:subject'] = 'あなたのアカウントが削除されました。';
$string['email:user:suspend:auto:body'] = '<p>{$a->name} さん</p>
<p>{$a->timeinactive} 間アクティブではなかったため、あなたのアカウントは利用停止されました。</p>
<p>これが意図的ではないと思われる場合、またはあなたのアカウントの有効化を再度ご希望の場合、 {$a->contact} にご連絡ください。</p>
<p>{$a->signature}</p>';
$string['email:user:suspend:manual:body'] = '<p>{$a->name} さん</p>
<p>あなたのアカウントは利用停止されました。</p>
<p>これが意図的ではないと思われる場合、またはあなたのアカウントの有効化を再度ご希望の場合、 {$a->contact} にご連絡ください。</p>
<p>{$a->signature}</p>';
$string['email:user:suspend:subject'] = 'あなたのアカウントが利用停止されました。';
$string['email:user:unsuspend:body'] = '<p>{$a->name} さん</p>
<p>あなたのアカウントが再有効化されました。</p>
<p>これが意図的ではないと思われる場合、またはあなたのアカウントの利用停止を再度ご希望の場合、 {$a->contact} にご連絡ください。</p>
<p>{$a->signature}</p>';
$string['email:user:unsuspend:subject'] = 'あなたのアカウントが再有効化されました。';
$string['email:user:warning:body'] = '<p>{$a->name} さん</p>
<p>あなたのアカウントはプラットフォーム上で非アクティブであるため {$a->warningperiod} で利用停止されます。</p>
<p>あなたのアカウントをアクティブのままにするには次の {$a->warningperiod} 間にログインする必要があります。これを防ぐためには少なくとも {$a->suspendinterval} ごとにシステムに確実にログインするようにしてください。</p>
<p>{$a->signature}</p>';
$string['email:user:warning:subject'] = 'まもなくあなたのアカウントが利用停止されます。';
$string['err:statustable:set_sql'] = 'set_sql() は無効にされています。このテーブルはそれ自体を定義しているためカスタマイズできません。';
$string['event:user:suspended'] = 'ユーザが利用停止されました。';
$string['excludeuser'] = 'ユーザを処理から除外する';
$string['form:static:uploadfile:desc'] = 'あなたのユーザ利用停止ファイルをここにアップロードしてください。
<br />
アップロードするCSVファイルは以下のように記述できます:<br />
<ol>
<li>「シンプル」ファイルにはメールアドレスのみ、1行に1件記述してください。</li>
<li>「スマート」ファイルにはタイプおよび値を示す2つのカラムを含めます。
<br />
利用可能なタイプカラムの値は次のとおりです:
<ul>
<li>email: ユーザアカウントのメールアドレスを示します。</li>
<li>idnumber: ユーザアカウントのIDナンバを示します。</li>
<li>username: ユーザアカウントのユーザ名を示します。</li>
</ul>
</ol>';
$string['info:no-exclusion-cohorts'] = 'これ以上、コーホートを除外するよう設定できません。すべて除外リストに追加済みです。';
$string['label:users:excluded'] = '除外ユーザ';
$string['label:users:potential'] = '潜在的ユーザ';
$string['link:currentstatus:overview'] = '現在のステータス変更を表示する';
$string['link:exclude:overview'] = '除外概要';
$string['link:log:overview'] = 'ステータス変更ログを表示する';
$string['link:upload'] = '利用停止ファイルをアップロードする';
$string['link:viewstatus'] = 'ステータスリストを表示する';
$string['msg:exclusion:cohort:none-selected'] = '除外するコーホートが選択されていません。';
$string['msg:exclusion:record:cohort:inserted'] = 'コーホート「 {$a->name} 」の除外エントリが正常に追加されました。';
$string['msg:exclusion:record:exists'] = '除外エントリはすでに存在します (レコードは追加されませんでした)。';
$string['msg:exclusion:record:inserted'] = '除外エントリが正常に追加されました。';
$string['msg:exclusion:record:user:deleted'] = 'ユーザ「 {$a->fullname} 」の除外エントリが正常に削除されました。';
$string['msg:exclusion:record:user:inserted'] = 'ユーザ「 {$a->fullname} 」の除外エントリが正常に追加されました。';
$string['msg:exclusion:records:cohort:deleted'] = 'コーホートの除外エントリが正常に削除されました。';
$string['msg:exclusion:records:deleted'] = '除外エントリが正常に削除されました。';
$string['msg:exclusion:records:user:deleted'] = 'ユーザの除外エントリが正常に削除されました。';
$string['msg:file-not-readable'] = 'アップロードされたファイル「 {$a} 」を読めません。';
$string['msg:file-not-writeable'] = 'アップロードされたファイル「 {$a} 」に書き込めないか、削除できません。';
$string['msg:file-would-delete'] = 'アップロードされたファイルが削除されます (これが設定検証でない場合)。';
$string['msg:file:upload:fail'] = 'アップロードされたファイルを正常に保存できませんでした。処理は中止されました。';
$string['msg:user:not-found'] = 'ユーザが見つかりませんでした。';
$string['msg:user:suspend:failed'] = 'ユーザ「 {$a->username} 」を利用停止できませんでした。';
$string['msg:user:suspend:nosuspendmode'] = 'ユーザ「 {$a->username} 」は利用停止されませんでした (テストモードで実行中)。';
$string['msg:user:suspend:success'] = 'ユーザ「 {$a->username} 」が正常に利用停止されました。';
$string['msg:user:unsuspend:failed'] = 'ユーザ「 {$a->username} 」を利用停止解除できませんでした。';
$string['msg:user:unsuspend:nounsuspendmode'] = 'ユーザ「 {$a->username} 」は利用停止解除されませんでした (テストモードで実行中)。';
$string['msg:user:unsuspend:success'] = 'ユーザ「 {$a->username} 」が正常に利用停止解除されました。';
$string['notifications:allok'] = 'あなたの設定は正しいようです。グローバル設定の問題も検出されていないようです。';
$string['notify:load-exclude-list'] = 'ユーザ除外リスト読み込み中';
$string['notify:load-file'] = 'ファイル「 {$a} 」をオープンする';
$string['notify:load-file-fail'] = 'ファイル「 {$a} 」を読むためにオープンできません。';
$string['notify:suspend-excluded-user'] = 'ユーザ: {$a->username} (id={$a->id}) は除外リストに登録されているため利用停止されません。';
$string['notify:suspend-user'] = '利用停止ユーザ: {$a->username} (id={$a->id})';
$string['notify:unknown-suspend-type'] = '不明な利用停止タイプID「 {$a} 」です。';
$string['page:view:exclude.php:introduction'] = '<p>このページには設定された除外が表示されます。<br />除外とは自動処理から完全に除外されるユーザまたはコーホートです。コーホートが除外された場合、コーホートのメンバであるユーザすべてが処理されないことを意味します。このページのオプションを使用してコーホートまたはユーザを除外リストに追加してください。</p>';
$string['page:view:log.php:introduction'] = '以下のテーブルではユーザに与えられたステータスログ、またはこのツールの自動処理結果または使用結果のステータスログを表示します。これはあなたの構成に応じて、Moodleユーザの利用停止または削除ステータスおよび特定のアクションが実行された瞬間を表示します。';
$string['page:view:notifications.php:introduction'] = 'このタブではユーザ利用停止設定で検出された潜在的な問題点を表示します。';
$string['page:view:statuslist.php:introduction:delete'] = '<p>この概要ではこのツール設定で設定された時間枠内に削除されるユーザアカウントを表示します。</p>';
$string['page:view:statuslist.php:introduction:status'] = '<p>この概要ではアクティブに監視されているユーザを表示します。<br />アクティブに監視されているユーザとは実際に監視されている (監視から除外されるよう設定されていない) ユーザです。<br />この概要は主管理者の概要とは異なり、このツールのユーザおよびコーホート除外機能を使用して利用停止監視除外されたユーザは表示されません。</p>';
$string['page:view:statuslist.php:introduction:suspended'] = '<p>この概要では利用停止されたユーザアカウントが表示されます。</p>';
$string['page:view:statuslist.php:introduction:tosuspend'] = '<p>この概要ではこのツール設定で設定された時間枠内に停止されるユーザアカウントが表示されます</p>';
$string['pluginname'] = 'ユーザ利用停止';
$string['privacy:metadata:tool_usersuspension:mailedto'] = 'リストアされたユーザのメールアドレス';
$string['privacy:metadata:tool_usersuspension:mailsent'] = 'メールが送信されたか否か';
$string['privacy:metadata:tool_usersuspension:status'] = '利用停止ステータス';
$string['privacy:metadata:tool_usersuspension:timecreated'] = 'レコードの作成日時です。';
$string['privacy:metadata:tool_usersuspension:type'] = '利用停止除外タイプです (常に「ユーザ」)。';
$string['privacy:metadata:tool_usersuspension:userid'] = 'アカウントが復元されたMoodleユーザの主キーです。';
$string['privacy:metadata:tool_usersuspension_excl'] = 'ユーザ利用停止除外は自動停止から除外されたユーザを保存します。';
$string['privacy:metadata:tool_usersuspension_log'] = 'ユーザ利用停止ステータスは利用停止されたユーザに関する履歴/ログ情報を保存します。';
$string['privacy:metadata:tool_usersuspension_status'] = 'ユーザ利用停止ステータスは利用停止されたユーザに関する情報を保存します。';
$string['promo'] = 'Moodleユーザ利用停止プラグイン';
$string['promodesc'] = 'This plugin is written by Sebsoft Managed Hosting & Software Development (<a href=\'https://sebsoft.nl\' target=\'_new\'>https://sebsoft.nl</a>).<br /><br /> {$a}<br /><br />';
$string['setting:cleanlogsafter'] = 'ログクリーニング頻度';
$string['setting:cleanup_deleteafter'] = '削除間隔';
$string['setting:cleanup_interval'] = 'クリーンアップ間隔';
$string['setting:dep:desc:uploaddetect_interval'] = 'アップロードフォルダをチェックおよび処理する間隔を変更したい場合、この設定を容易にするため<a href="{$a}/admin/tool/task/scheduledtasks.php">ここ</a>で専用スケジュールタスクの実行間隔を調整してください (次のタスクを探してください: 「\\tool_usersuspension\\task\\suspend\\fromfolder」および「\\tool_usersuspension\\task\\unsuspend\\fromfolder」)。';
$string['setting:dep:uploaddetect_interval'] = 'アップロードフォルダ処理間隔';
$string['setting:desc:cleanlogsafter'] = 'ログがクリーニングされる頻度を設定します。この設定より古いログは物理的に削除されます。';
$string['setting:desc:cleanup_deleteafter'] = '利用停止後のユーザ削除間隔を設定します。';
$string['setting:desc:cleanup_interval'] = 'クリーンアップ実行間隔を設定します。';
$string['setting:desc:enablecleanlogs'] = '履歴ログの自動クリーニングを有効または無効にします。';
$string['setting:desc:enablecleanup'] = 'ユーザクリーンアップを有効または無効にします。';
$string['setting:desc:enabled'] = 'ユーザ利用停止ユーティリティを有効または無効にします。';
$string['setting:desc:enablefromfolder'] = 'アップロードされたCSVファイルから自動的にユーザを停止させるユーザ利用停止ユーティリティを有効または無効にします。';
$string['setting:desc:enablefromupload'] = 'ファイルアップロードからのユーザ利用停止ユーティリティを有効または無効にします。';
$string['setting:desc:enablesmartdetect'] = 'ユーザ利用停止ユーティリティのスマート検出を有効または無効にします。';
$string['setting:desc:enablesmartdetectwarning'] = 'この設定を有効にした場合、ユーザに利用停止間近である旨のメールを送信できます。';
$string['setting:desc:enableunsuspendfromfolder'] = 'アップロードされたCSVファイルからユーザを自動的に利用停止解除するユーザ利用停止解除ユーティリティを有効または無効にします。';
$string['setting:desc:senddeleteemail'] = '削除後、ユーザに削除情報メールを送信しますか?';
$string['setting:desc:sendsuspendemail'] = '利用停止後、ユーザに利用停止情報メールを送信しますか?';
$string['setting:desc:smartdetect_interval'] = 'スマート検出の実行間隔を設定します。';
$string['setting:desc:smartdetect_suspendafter'] = '非アクティブのユーザが利用停止されるまでの間隔を設定します。';
$string['setting:desc:smartdetect_warninginterval'] = 'ユーザが利用停止間近の警告メッセージを受信する利用停止前の時間を設定します。';
$string['setting:desc:unsuspenduploadfilename'] = 'アップロードされる利用停止解除ファイルのファイル名を設定します。';
$string['setting:desc:uploaddetect_interval'] = 'アップロードフォルダのファイルチェックの間隔を設定します。';
$string['setting:desc:uploadfilename'] = 'アップロードされる利用停止ファイルのファイル名を設定します。';
$string['setting:desc:uploadfolder'] = 'FTP等でファイルがアップロードされるフォルダを設定します。';
$string['setting:enablecleanlogs'] = 'ログクリーニングを有効にする';
$string['setting:enablecleanup'] = 'クリーンアップを有効にする';
$string['setting:enabled'] = '有効';
$string['setting:enablefromfolder'] = '保存されたCSVファイルによる自動利用停止';
$string['setting:enablefromupload'] = 'アップロードから有効にする';
$string['setting:enablesmartdetect'] = 'スマート検出を有効にする';
$string['setting:enablesmartdetectwarning'] = '利用停止間近の警告メールを送信しますか?';
$string['setting:enableunsuspendfromfolder'] = '保存されたCSVファイルによる自動利用停止解除';
$string['setting:senddeleteemail'] = '削除メールを送信しますか?';
$string['setting:sendsuspendemail'] = '利用停止メールを送信しますか?';
$string['setting:smartdetect_interval'] = 'スマート検出間隔';
$string['setting:smartdetect_suspendafter'] = '非アクティブ利用停止間隔';
$string['setting:smartdetect_warninginterval'] = '警告期間';
$string['setting:unsuspenduploadfilename'] = '利用停止解除アップロードファイル名';
$string['setting:uploaddetect_interval'] = 'アップロードフォルダ処理間隔';
$string['setting:uploadfilename'] = '利用停止アップロードファイル名';
$string['setting:uploadfolder'] = 'アップロードフォルダ';
$string['status:deleted'] = '削除済み';
$string['status:suspended'] = '利用停止済み';
$string['status:unsuspended'] = '利用停止解除済み';
$string['suspend'] = '利用停止';
$string['suspendmode'] = '処理モード';
$string['suspendon'] = '利用停止';
$string['suspensionsettings'] = 'ユーザ利用停止設定';
$string['suspensionsettingscleanup'] = 'クリーンアップ';
$string['suspensionsettingscleanupdesc'] = '以下でクリーンアップを設定します。<br />クリーンアップ処理はユーザのクリーンアップをさらに自動化するためのものです。このオプションを使用した場合、利用停止中のユーザアカウントが削除されます。一定期間経過後にユーザアカウントを自動的に削除したい場合、あなたはこれらを設定する必要があります。ユーザアカウントの自動削除を希望しない場合、あなたはこのオプションを無効にする必要があります。';
$string['suspensionsettingsdesc'] = '&nbsp;';
$string['suspensionsettingsfolder'] = 'フォルダから利用停止する';
$string['suspensionsettingsfolderdesc'] = '以下で「フォルダから利用停止する」フォルダを設定します。<br />この設定によりサーバ上の任意の場所 (例えば専用のFTPフォルダ) にCSVファイルをアップロードしてユーザの利用停止を自動化できます。CSVファイルは以下の設定に従って処理されます。注) アップロードされたCSVファイルは処理終了後に削除されます!';
$string['suspensionsettingssmartdetect'] = 'スマート検出';
$string['suspensionsettingssmartdetectdesc'] = '以下でスマート検出を設定します。<br />スマート検出とは以下の設定により「非アクティブ」と判断されたユーザアカウントが自動的に利用停止されることを意味します。設定された間隔でのみ実行される「スマート検出」は設定された「非アクティブ利用停止間隔」設定に従ってユーザアカウントがアクティブか否かを判断します。そして、非アクティブとみなされたすべてのユーザアカウントを利用停止します。';
$string['suspensionsettingsupload'] = 'アップロードから利用停止する';
$string['suspensionsettingsuploaddesc'] = '以下で「アップロードから利用停止する」を設定します。';
$string['tab:notifications'] = '設定チェック';
$string['table:exclusions'] = '除外';
$string['table:log:all'] = '利用停止履歴ログ';
$string['table:log:latest'] = '最新利用停止ログ';
$string['table:logs'] = 'ログ';
$string['table:status:delete'] = '削除対象ユーザ';
$string['table:status:status'] = 'アクティブ監視対象ユーザ';
$string['table:status:suspended'] = '利用停止済みユーザ';
$string['table:status:tosuspend'] = '利用停止対象ユーザ';
$string['task:delete'] = 'ユーザ利用停止タスク: 利用停止ユーザを自動的に削除する';
$string['task:fromfolder'] = 'ユーザ利用停止タスク: アップロードファイルから自動的にユーザを利用停止する';
$string['task:logclean'] = 'ユーザ利用停止タスク: ユーザ利用停止のログを削除する';
$string['task:mark'] = 'ユーザ利用停止タスク: ユーザを自動的に利用停止する';
$string['task:unsuspendfromfolder'] = 'ユーザ利用停止タスク: アップロードファイルから自動的にユーザを有効化 (利用停止解除) する';
$string['testfromfolder'] = '無人処理テスト';
$string['testfromfolder:suspend'] = '無人ユーザ利用停止テスト (フォルダから)';
$string['testfromfolder:unsuspend'] = '無人ユーザ利用停止解除テスト (フォルダから)';
$string['testing:suspendfromfolder'] = '「フォルダから利用停止する」テスト設定';
$string['testing:unsuspendfromfolder'] = '「フォルダから利用停止解除する」テスト設定';
$string['thead:action'] = '操作';
$string['thead:deletein'] = '削除予定';
$string['thead:lastlogin'] = '最終ログイン';
$string['thead:mailedto'] = 'メール送信先';
$string['thead:mailsent'] = 'メール送信';
$string['thead:name'] = '氏名';
$string['thead:status'] = 'ステータス';
$string['thead:suspendin'] = '利用停止予定';
$string['thead:timecreated'] = '作成日時';
$string['thead:timedetect'] = '検出根拠';
$string['thead:timemodified'] = '修正日時';
$string['thead:type'] = 'タイプ';
$string['thead:userid'] = 'ユーザID';
$string['thead:username'] = 'ユーザ名';
$string['unsuspend'] = '利用停止解除';
$string['usersuspension:administration'] = 'ユーザ利用停止管理';
$string['usersuspension:viewstatus'] = 'ユーザ利用停止ステータスを表示する';
