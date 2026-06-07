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
 * Strings for component 'webexactivity', language 'ja', version '4.4'.
 *
 * @package     webexactivity
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionalsettings'] = '追加の会議設定';
$string['allchat'] = '参加者は他の参加者とチャットできる';
$string['apipassword'] = 'WebEx 管理者パスワード';
$string['apipassword_help'] = 'サイトの管理者アカウントのパスワード。';
$string['apisettings'] = 'API 設定';
$string['apiusername'] = 'WebEx 管理者ユーザ名';
$string['apiusername_help'] = 'サイトの管理者アカウントのユーザー名。セキュリティ上の理由から、これはMoodle専用のアカウントである必要があります。';
$string['availabilityendtime'] = '可用性の拡張終了時間';
$string['badpassword'] = 'WebExのユーザー名とパスワードが一致しません。';
$string['badpasswordexception'] = 'WebExパスワードが正しくないため、更新できませんでした。';
$string['confirmrecordingdelete'] = '長さ:{$ a-> time}の録画<b> {$ a-> name} </ b>を削除してもよろしいですか？これは、元に戻すことはできません。';
$string['confirmrecordingsdelete'] = '選択した録画を削除してもよろしいですか？これは、元に戻すことはできません。';
$string['connectionexception'] = '接続中にエラーが発生しました：{$ a-> error}';
$string['curlsetupexception'] = 'curl の設定中にエラーが発生しました';
$string['defaultmeetingtype'] = 'デフォルトミーティングタイプ';
$string['defaultmeetingtype_help'] = '新しいミーティングの作成時に事前選択される会議の種類。';
$string['deletelink'] = '<a href="{$a->url}">削除</a>';
$string['deletetime'] = '削除時間';
$string['deletionin'] = '<div>{$a->time} 削除まで。</div>';
$string['deletionsoon'] = '<div>間もなく削除されます。</div>';
$string['description'] = '説明';
$string['directlinks'] = 'ダイレクトリンク';
$string['directlinkstext'] = '<p>Tこれらのリンクは、Moodleサーバー上の録画への直接アクセスを提供します。それらへのアクセスは、ログインを必要とせず、ログにも記録されません。</p><br />
Streaming: <a target="_blank" href="{$a->streamurl}" alt="Streaming link">{$a->streamurl}</a><br />
Download: <a target="_blank" href="{$a->fileurl}" alt="Streaming link">{$a->fileurl}</a><br />';
$string['duration'] = '予定時間';
$string['duration_help'] = '会議の予想される期間。これは情報提供のみを目的としており、会議の実行時間には影響しません。';
$string['enablecallin'] = '電話からの参加を有効にする';
$string['enablecallin_help'] = '新しく作成された会議のテレフォニーコールインサポートを有効にします。 CALLINテレフォニーコールがない場合は有効にしないでください。';
$string['error_'] = '';
$string['error_HM_AccessDenied'] = 'この会議をホストするためのアクセスが拒否されました。';
$string['error_JM_InvalidMeetingKey'] = 'WebExでミーティングキーエラーが発生したため、このミーティングに参加できません。';
$string['error_JM_InvalidMeetingKeyOrPassword'] = 'WebExでミーティングキーまたはパスワードエラーが発生したため、このミーティングに参加できません。';
$string['error_JM_MeetingLocked'] = 'このミーティングはロックされているため、参加できません。';
$string['error_JM_MeetingNotInProgress'] = '会議は現在進行中ではありません。まだ開始していないか、すでに終了している可能性があります。';
$string['error_LI_AccessDenied'] = 'ユーザーはWebExにログインできませんでした。';
$string['error_LI_AccountLocked'] = 'WebExユーザーアカウントがロックされています。';
$string['error_LI_AutoLoginDisabled'] = 'このユーザーの自動ログインは無効になっています';
$string['error_LI_InvalidSessionTicket'] = 'セッションチケットが無効です。もう一度やり直してください。';
$string['error_LI_InvalidTicket'] = 'ログインチケットが無効です。もう一度やり直してください。';
$string['error_unknown'] = '不明なエラーが発生しました。';
$string['errordeletingrecording'] = '録画の削除中にエラーが発生しました';
$string['event_meeting_ended'] = 'ミーティング終了';
$string['event_meeting_hosted'] = 'ミーティング開催';
$string['event_meeting_joined'] = 'ミーティングジョイン';
$string['event_meeting_started'] = 'ミーティング開始';
$string['event_recording_created'] = '録画済み';
$string['event_recording_deleted'] = '録画削除済み';
$string['event_recording_downloaded'] = '録画ダウンロード済み';
$string['event_recording_undeleted'] = '録画見削除';
$string['event_recording_viewed'] = '録画閲覧';
$string['externallinktext'] = '<p>このリンクは、このコースに登録していない参加者向けです。コースの生徒は、前のページの[ミーティングに参加]リンクをクリックするだけでよいため、このリンクをメールで送信する必要はありません。このリンクは慎重に配布する必要があります。このリンクを知っている人はだれでもこの会議にアクセスできます。他の人を会議に招待するには、以下のURLをコピーして送信してください。これが公開会議の場合、このリンクはWebサイトにも配置できます。</p>';
$string['externalpassword'] = '参加者は会議のパスワードも知っている必要があります: <b>{$a}</b>';
$string['getexternallink'] = '<a href="{$a->url}">外部参加者リンクを取得</a>';
$string['host'] = 'ミーティングの開催';
$string['hostmeetinglink'] = '<a href="{$a->url}">ミーティングを開催する</a>';
$string['hostschedulingexception'] = 'ユーザーはこの主催者のミーティングをスケジュールできません。';
$string['inprogress'] = '進行中';
$string['invalidtype'] = '無効なタイプ';
$string['joinmeetinglink'] = '<a href="{$a->url}">ミーティングに参加</a>';
$string['longavailability'] = '可用性の拡張';
$string['longavailability_help'] = 'このオプションを設定すると、可用性の拡張の終了時間まで、会議を主催できるようになります。営業時間などの再利用可能な会議を許可します。';
$string['manageallrecordings'] = 'すべてのWebEx録画を管理する';
$string['manageallrecordings_help'] = 'Moodleアクティビティの記録だけでなく、WebExサーバーからのすべての記録を管理します。';
$string['meetingclosegrace'] = 'ミーティングの猶予期間';
$string['meetingclosegrace_help'] = '開始時刻からの分数と、ミーティングが完了したと見なされるまでの期間。';
$string['meetingpassword'] = 'ミーティングパスワード';
$string['meetingpast'] = 'このミーティングは終了しました。';
$string['meetingsettings'] = 'ミーティング設定';
$string['meetingtemplate'] = 'WebEx テンプレート';
$string['meetingtemplate_help'] = 'この会議の種類のWebExアカウントで設定したテンプレートの名前。デフォルト設定を使用するには、空白のままにします。注：存在しないテンプレート名を指定すると、この会議の種類のセッションを作成できなくなります。';
$string['meetingtype'] = 'ミーティングタイプ';
$string['meetingtypes'] = 'ミーティングタイプ';
$string['meetingtypes_desc'] = 'これらは、このモジュールでサポートされているWebExミーティングタイプです。タイプごとに、それが「利用可能」であるか（WebExでそのライセンスがあり、Moodleから使用できるようにするか）、「すべてのユーザーが利用可能」にするかを選択できます。「すべてのユーザーが利用可能」ではなく「利用可能」であるタイプは、mod/webexactivity：allavailabletypes権限を持つユーザーのみが選択できます。 「必要なミーティングパスワード」は、WebExがパスワードを必要とするかどうかをプラグインに伝えることです。以下の「必要なパスワードを生成する」を使用して、ユーザーがパスワードを入力できないようにします。';
$string['meetingupcoming'] = 'この会議はまだ参加できません。';
$string['modulename'] = 'WebEx Meeting';
$string['modulename_help'] = 'WebEx Meetingにより、講師はWebEx Web会議システム*にミーティングをスケジュールできます。

WebExミーティングアクティビティを追加するときは、ミーティングの日付と時刻、およびその他の多くのオプションパラメータ（予想される期間、説明など）を定義します。参加者（登録済みの学生）は、Moodleのアクティビティの下にある[ミーティングに参加]リンクをクリックすると、WebExミーティングに参加できます（教師には、「ホストミーティング」というリンクが表示されます）。ミーティングが記録されている場合、学生は会議の終了後に記録を表示できます。
* WebExは、生徒と教師が同期して共同作業できるWeb会議システムです。リアルタイムのオーディオとビデオを送信し、ホワイトボード、チャット、デスクトップ共有などのツールが含まれています。';
$string['modulenameplural'] = 'WebEx Meetings';
$string['page_managerecordings'] = '録画管理';
$string['page_manageusers'] = 'ユーザ管理';
$string['pluginadministration'] = 'WebEx Meeting 管理者';
$string['pluginname'] = 'WebEx Meeting';
$string['pluginnamepural'] = 'WebEx Meetings';
$string['prefix'] = 'ユーザ名プレフィックス';
$string['prefix_help'] = 'この文字列は、このモジュールによって作成されたすべてのユーザー名の前に付けられます。';
$string['privacy:metadata:email'] = 'Webexにアクセスするユーザーのメールアドレス';
$string['privacy:metadata:firstname'] = 'Webexにアクセスするユーザーの名';
$string['privacy:metadata:lastname'] = 'Webexにアクセスするユーザーの姓';
$string['privacy:metadata:timecreated'] = 'レコードが作成された時刻';
$string['privacy:metadata:timemodified'] = 'データベースでレコードが変更された時刻';
$string['privacy:metadata:username'] = '会議を主催しているユーザー名。';
$string['privacy:metadata:webexactivity'] = 'Webex activity instance';
$string['privacy:metadata:webexactivity:hostwebexid'] = 'Webexアクティビティインスタンス';
$string['privacy:metadata:webexactivity:password'] = 'ミーティングパスワード';
$string['privacy:metadata:webexactivity_recording'] = 'Webex 録画';
$string['privacy:metadata:webexactivity_recording:hostid'] = '録画ホストユーザ名';
$string['privacy:metadata:webexactivity_user'] = 'Webex ホストユーザ';
$string['privacy:metadata:webexactivity_user:webexid'] = 'Webex ユーザ名';
$string['privacy:metadata:webexactivity_user:webexuserid'] = 'WebexユーザーID';
$string['privacy:metadata:webexhost'] = 'WebExホスト情報';
$string['privacy:metadata:webexparticipant'] = 'Webex参加者情報';
$string['privacy:metadata:webexpassword'] = 'ユーザーに代わってネゴシエーションするために使用されるWebexパスワード。このプラグインのインストールが非常に古いサイトでのみ使用されます。';
$string['recordingfileurl'] = 'ダウンロード';
$string['recordinglength'] = '({$a->time}, {$a->size})';
$string['recordingname'] = '録画名';
$string['recordings'] = '録画';
$string['recordingsettings'] = '録画設定';
$string['recordingstreamurl'] = 'Play';
$string['recordingtrashtime'] = '完全削除時間';
$string['recordingtrashtime_help'] = '完全に削除される前に記録が保持される時間数。';
$string['requiremeetingpassword'] = '会議のパスワードを要求する';
$string['requiremeetingpassword_help'] = 'ユーザーに会議パスワードの入力を要求します。オフの場合、会議の種類が上記のパスワードを要求するものとしてマークされていると、パスワードがランダムに生成されます。';
$string['search:activity'] = 'WebEx ミーティング - 活動情報';
$string['selectnone'] = 'すべての選択を解除';
$string['settings'] = 'WebEx ミーティング設定';
$string['sitename'] = 'サイト名';
$string['sitename_help'] = '.webex.comの前のURL部分。サイトのURLが https://example.webex.com の場合は、上に example と入力します。';
$string['startssoon'] = 'すぐに開始';
$string['starttime'] = '開始時間';
$string['stream'] = 'ストリーム';
$string['studentdownload'] = '生徒が録音をダウンロードできるようにする';
$string['studentdownload_help'] = '生徒が録音のダウンロードリンクにアクセスできるようにします。';
$string['studentvisible'] = '学生に公開';
$string['task_deleterecordings'] = '削除された録音を永久削除する';
$string['task_updateallrecordings'] = 'すべての録音を更新';
$string['task_updatemediumrecordings'] = 'メディアの過去の録音を更新する';
$string['task_updateopensessions'] = '開いているセッションを更新する';
$string['task_updaterecentrecordings'] = '最近の録画を更新する';
$string['typeforall'] = 'Available to all users';
$string['typeinstalled'] = 'Available';
$string['typemeetingcenter'] = 'Meeting Center';
$string['typemeetingcenter_desc'] = '';
$string['typepwreq'] = 'ミーティングパスワードが必要です';
$string['typetrainingcenter'] = 'Training Center';
$string['typetrainingcenter_desc'] = '';
$string['undeletelink'] = '<a href="{$a->url}">元に戻す</a>';
$string['unknownhostwebexidexception'] = 'WebEx ホストIDが存在しません';
$string['usereditauto'] = 'WebExユーザーは内部で管理されており、編集できません。';
$string['usereditbad'] = 'このページに到達すべきではありません。';
$string['usereditunabletoload'] = 'WebExからユーザーをロードできません。';
$string['userexistsexplanation'] = 'あなたのメールアドレス ({$a->email})はすでに WebExのユーザです <b>{$a->username}</b>. WebExパスワードを入力してください。';
$string['webexactivity:addinstance'] = '新しい WebEx ミーティングを追加する';
$string['webexactivity:allavailabletypes'] = 'インストールされているすべてのタイプのミーティングを作成する';
$string['webexactivity:hostmeeting'] = 'WebEx ミーティングを開催し管理する';
$string['webexactivity:reports'] = 'WebEx reports を使う';
$string['webexactivity:view'] = 'WebEx ミーティング';
$string['webexactivityname'] = 'ミーティング名';
$string['webexid'] = 'WebEx ID';
$string['webexrecordings'] = 'WebEx 録画';
$string['webexusercollision'] = '既存のWebExユーザーとの衝突。';
$string['webexxmlexception'] = 'XMLの処理中にWebExでエラーが発生しました: {$a->errorcode} {$a->error}';
