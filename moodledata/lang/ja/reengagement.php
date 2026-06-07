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
 * Strings for component 'reengagement', language 'ja', version '4.4'.
 *
 * @package     reengagement
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitycompleted'] = 'この活動は完了マークされました。';
$string['afterdelay'] = '遅延後';
$string['areyousure'] = '本当にこの修正を適用してもよろしいですか?';
$string['completeattimex'] = 'この活動は {$a} に完了します。';
$string['completion'] = '完了';
$string['completiondatesupdated'] = '完了日が更新されました。';
$string['completiontime'] = '完了時間';
$string['completionwillturnon'] = 'この活動をコースに追加した場合、活動完了が有効にされることに留意してください。';
$string['crontask'] = 'リエンゲージメントcronタスク';
$string['cronwarning'] = 'リエンゲージメントスケジュールタスクが過去8時間実行されていません - リエンゲージメントが正常に動作するようにcronを設定する必要があります。';
$string['days'] = '日';
$string['duration'] = '期間';
$string['duration_help'] = '<p>リエンゲージメント期間はユーザがリエンゲージメントを開始してから終了とマークされるまでの期間です。
リエンゲージメント期間は期間の長さ (例: 週) および期間の数 (例: 7) で指定されます。</p>

<p>この例では現在リエンゲージメント期間を開始しているユーザは7週間後には完了とマークされます。</p>';
$string['emailcontent'] = '通知コンテンツ (ユーザ)';
$string['emailcontent_help'] = 'モジュールがユーザに通知する場合、このフィールドから通知コンテンツを取得します。';
$string['emailcontentdefaultvalue'] = 'これはコース %courseshortname% からのリマインダ通知です。';
$string['emailcontentmanager'] = '通知コンテンツ (マネージャ)';
$string['emailcontentmanager_help'] = 'モジュールがユーザのマネージャに通知する場合、このフィールドから通知コンテンツを取得します。';
$string['emailcontentmanagerdefaultvalue'] = 'これはユーザ %userlastname% %userfirstname% に関するコース %courseshortname% からのリマインダ通知です。';
$string['emailcontentthirdparty'] = '通知コンテンツ (第三者)';
$string['emailcontentthirdparty_help'] = 'モジュールが第三者に通知する場合、このフィールドから通知コンテンツを取得します。';
$string['emailcontentthirdpartydefaultvalue'] = 'これはユーザ %userlastname% %userfirstname% に関するコース %courseshortname% からのリマインダ通知です。';
$string['emaildelay'] = '通知遅延';
$string['emaildelay_help'] = '「遅延後 」にユーザに通知するようモジュールが設定された場合、この設定は遅延の長さをコントロールします。';
$string['emailrecipient'] = '受信者に通知する';
$string['emailrecipient_help'] = 'コースへの再参加をユーザに促すために通知を送信する必要がある場合、この設定では通知をユーザ、そのマネージャまたは両者に送信するかどうかコントロールします。';
$string['emailsubject'] = '通知件名 (ユーザ)';
$string['emailsubject_help'] = 'モジュールがユーザに通知する場合、このフィールドから通知件名を取得します。';
$string['emailsubjectmanager'] = '通知件名 (マネージャ)';
$string['emailsubjectmanager_help'] = 'モジュールがユーザのマネージャに通知する場合、このフィールドから通知件名を取得します。';
$string['emailsubjectthirdparty'] = '通知件名 (第三者)';
$string['emailsubjectthirdparty_help'] = 'モジュールが第三者に通知する場合、このフィールドから通知件名を取得します。';
$string['emailtime'] = '通知時間';
$string['emailuser'] = 'ユーザに通知する';
$string['emailuser_help'] = '活動がユーザに通知するタイミング:
<ul>
<li>なし: ユーザに通知しない。</li>
<li>リエンゲージメント完了時: リエンゲージメント活動が完了した時点でユーザに通知します。</li>
<li>遅延後: モジュール開始後、設定時間経過後にユーザに通知します。</li>
</ul>';
$string['errornoid'] = 'あなたはcourse_module IDまたはインスタンスIDを指定する必要があります。';
$string['errorreengagementnotvalid'] = 'あなたのアカウントではこのリエンゲージメントモジュールが有効にされていません。あなたがこれをエラーであると思う場合、管理者にご連絡ください。';
$string['frequencytoohigh'] = 'あなたが設定した遅延時間での最大リマインダ数は {$a} です。';
$string['hours'] = '時';
$string['introdefaultvalue'] = 'これはリエンゲージメント活動です。この目的はその前に実施された活動およびその後に実施される活動との間に時間的なずれを生じさせることです。';
$string['messageprovider:mod_reengagement'] = 'リエンゲージメント通知';
$string['minutes'] = '分';
$string['modulename'] = 'リエンゲージメント';
$string['modulename_help'] = 'リエンゲージメント活動では学生および第三者にタイムリーな通知を送信できます。この通知にはコースに戻り、活動を完了するためのリマインダを含めます。

通知トリガは開始イベント (コースへの登録、活動完了またはその他のコース変数) 後に指定された期間です。
通知は制限された期間または対象活動が完了するまで繰り返すよう設定できます。繰り返しの間には遅延時間を設定できます。
ユーザがすでに対象活動を完了している場合、メールは送信されません。

あなたは以下のためにこのプラグインを使用できます: <ul>
<li>コース内の時間指定されたコンテンツを選択的にリリースする。</li>
<li>課題が期限切れであることを繰り返し学生に思い出させる。</li>
<li>コース終了をトレーニングマネージャに知らせる。</li>
</ul>

リエンゲージメント活動はとてもフレキシブルであるため、何ができるか探ってみてください。

<a href=https://docs.moodle.org/39/en/Reengagement_activity>詳細情報</a>';
$string['modulenameplural'] = 'リエンゲージメント';
$string['mustenablecompletionavailability'] = 'リエンゲージメント活動を使用するには完了トラッキングおよびアクセス制限設定を有効にする必要があります。';
$string['never'] = 'なし';
$string['newcompletiontime'] = '新しい完了時間';
$string['nochange'] = '変更なし';
$string['nochangenoaccess'] = '変更なし (ユーザはコースにアクセスしていません)';
$string['noemailattimex'] = '対象の活動が完了したため、{$a} にスケジュールされていたメッセージは送信されません。';
$string['nosuppresstarget'] = '対象活動が選択されていません。';
$string['oncompletion'] = 'リエンゲージメント完了時';
$string['periodtoolow'] = '遅延が少なすぎます - 最低でも5分は必要です。';
$string['pluginadministration'] = '&nbsp;';
$string['pluginname'] = 'リエンゲージメント';
$string['privacy:metadata:completiontime'] = 'このモジュールの完了時です。';
$string['privacy:metadata:emailsent'] = 'メールが送信されました。';
$string['privacy:metadata:emailtime'] = 'このユーザにメールを送信するタイミングです。';
$string['privacy:metadata:reengagement'] = 'リエンゲージメントID';
$string['privacy:metadata:reengagement_inprogress'] = '進行中のリエンゲージメント活動です。';
$string['privacy:metadata:userid'] = 'このレコードが関連するユーザのIDです。';
$string['receiveemailattimex'] = 'メッセージは {$a} に送信されます。';
$string['receiveemailattimexunless'] = 'あなたが対象活動を完了しない限り、メッセージは {$a} に送信されます。';
$string['reengagement'] = 'リエンゲージメント';
$string['reengagement:addinstance'] = 'reengagement:addinstance';
$string['reengagement:bulkactions'] = 'リエンゲージメントでバルク操作を実行する';
$string['reengagement:editreengagementduration'] = 'リエンゲージメント遅延を編集する';
$string['reengagement:startreengagement'] = 'リエンゲージメント開始';
$string['reengagementduration'] = 'リエンゲージメント遅延';
$string['reengagementfieldset'] = 'リエンゲージメント詳細';
$string['reengagementintro'] = 'リエンゲージメント序文';
$string['reengagementname'] = 'リエンゲージメント名';
$string['reengagementsinprogress'] = '進行中のリエンゲージメント';
$string['remindercount'] = 'リマインダカウント';
$string['remindercount_help'] = 'これはそれぞれの遅延期間後にメールが送信される回数です。あなたが使用できる値には制限があります。
<ul>
<li>24時間未満 - リマインダは2回まで。</li>
<li>5日未満 - リマインダは10回まで。</li>
<li>15日未満 - リマインダは26回まで。</li>
<li>15日以上 - リマインダは最大40回まで。</li>
</ul>';
$string['resetbyenrolment'] = '登録作成日および次の期間で: {$a}';
$string['resetbyfirstaccess'] = '初回コースアクセスおよび次の期間で: {$a}';
$string['resetbyspecificdate'] = '指定した日付で';
$string['resetcompletion'] = '完了日をリセットする';
$string['search:activity'] = 'リエンゲージメント - 活動情報';
$string['seconds'] = '秒';
$string['specifydate'] = '完了日を設定する:';
$string['suppressemail'] = '対象活動が完了した場合、通知を抑制する';
$string['suppressemail_help'] = 'このオプションでは指定された活動が完了した場合、ユーザへの通知を抑制するよう指示します。';
$string['suppresstarget'] = '対象活動';
$string['suppresstarget_help'] = 'このドロップダウンを使用してリマインダ通知送信前に完了をチェックする活動を選択してください。';
$string['thirdpartyemails'] = '第三者受信者';
$string['thirdpartyemails_help'] = 'ユーザからの通知を受信すべき第三者メールアドレスのカンマ区切りリストです。';
$string['userandmanager'] = 'ユーザおよびマネージャ';
$string['weeks'] = '週';
$string['withselectedusers'] = '選択したユーザに対して ...';
$string['withselectedusers_help'] = '* メッセージを送信する - 1人または複数の参加者にメッセージを送信します。
* コースアクセスにより完了日をリセットする - このコースへの初回アクセスに基づいてリエンゲージメント完了日を調整します。';
