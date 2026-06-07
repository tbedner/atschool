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
 * Strings for component 'logstore_xapi', language 'ja', version '4.4'.
 *
 * @package     logstore_xapi
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['account_homepage'] = 'アクタアカウントホームページ';
$string['account_homepage_desc'] = 'アクタアカウントのホームページフィールドを設定します。デフォルトはapp_urlです。';
$string['autherror'] = 'サーバが401エラーを返しています。xAPIのエンドポイント、ユーザ名および認証シークレット/パスワードがログストアxAPI設定で正しいことを確認してください。';
$string['backgroundmode'] = 'スケジュールタスクでステートメントを送信しますか?';
$string['backgroundmode_desc'] = 'これによりMoodleはページレスポンスがブロックされないようcronタスクを経由してバックグラウンドでLRSにステートメントを送信します。これによりリアルタイムに近い処理は実行されなくなりますが、パフォーマンスがLRSのパフォーマンスと連動する予測不能なMoodleのパフォーマンスを防ぐのに役立ちます。';
$string['cohorts'] = 'コーホート';
$string['cohorts_help'] = 'コーホートを通知に追加する';
$string['confirmresendevents'] = 'あなたは {$a->count} レコードを再処理キューに送信しようとしています。<br>続けてもよろしいですか?';
$string['confirmresendeventsheader'] = 'イベントを再送信する';
$string['confirmsendevents'] = 'あなたは {$a->count} レコードを再処理キューに送信しようとしています。<br>続けてもよろしいですか?';
$string['confirmsendeventsheader'] = 'イベントを送信する';
$string['context_platform'] = 'コンテキストプラットフォーム';
$string['context_platform_desc'] = 'xAPIステートメントのコンテキストプラットフォームフィールドを設定します。デフォルトは「Moodle」です。';
$string['contextidnolongerexists'] = 'コンテキストID {$a} は存在しません。';
$string['count'] = 'カウント';
$string['datetimegmt'] = '日付/時間 (GMT)';
$string['datetovalidation'] = '終了日は開始日の前にできません。';
$string['enablesendingnotifications'] = '通知を送信しいますか?';
$string['enablesendingnotifications_desc'] = '設定済み受信者に通知を送信するかどうかコントロールします。';
$string['endpoint'] = 'あなたのxAPI用LRSエンドポイント';
$string['errorlogpage'] = 'エラーログページ';
$string['errornotificationtrigger'] = 'エラー通知トリガ';
$string['errornotificationtrigger_desc'] = '通知がトリガされる閾値です。この値以上のエラーが発生した場合、通知が送信されます。';
$string['errortype'] = 'エラータイプ';
$string['eventcontext'] = 'イベントコンテキスト';
$string['eventname'] = 'イベント名';
$string['failed'] = '失敗';
$string['failed_events'] = 'イベントがLRSへの送信に失敗しました。';
$string['failedsubject'] = 'XAPIログストア: メッセージレポートの送信に失敗しました。';
$string['failedtosend'] = '以下のステートメントがLDHに送信されていません。';
$string['failedtransformresponse'] = 'イベント:「 {$a} 」が正常に変換されませんでした。';
$string['failurelog'] = '失敗ログ';
$string['filters'] = 'フィルタログ';
$string['filters_help'] = 'ログに記録されるアクションを含むフィルタを有効にします。';
$string['includecohorts'] = 'これらのコホートを通知に含める';
$string['info'] = '情報';
$string['insendfailednotificationstask'] = '送信失敗通知タスク実行中';
$string['lmsinstance'] = 'エラーが発生したLMSインスタンス';
$string['logguests'] = 'ゲストの行動を記録する';
$string['logstorexapierrorlog'] = 'ログストアxAPIエラーログ';
$string['logstorexapihistoriclog'] = 'ログストアxAPI履歴ログ';
$string['lrserror'] = 'LDHに問題があります。LDHは500エラーで応答しました。';
$string['maxbatchsize'] = '最大バッチサイズ';
$string['maxbatchsize_desc'] = 'ステートメントはバッチでLRSに送信されます。この設定は1回の操作で送信されるステートメント最大数をコントロールします。この設定をゼロにした場合、利用可能なすべてのステートメントが一度に送信されますが、これは推奨されません。';
$string['maxbatchsizeforfailed'] = '失敗リクエストの最大バッチサイズ';
$string['maxbatchsizeforfailed_desc'] = 'ステートメントはバッチでLRSに送信されます。この設定は失敗したリクエストに対して1回の操作で送信されるステートメント最大数をコントロールします。この設定をゼロにした場合、利用可能なすべてのステートメントが一度に送信されますが、これは推奨されません。';
$string['maxbatchsizeforhistorical'] = '履歴リクエストの最大バッチサイズ';
$string['maxbatchsizeforhistorical_desc'] = 'ステートメントはバッチでLRSに送信されます。この設定は履歴リクエストに対して1回の操作で送信されるステートメント最大数をコントロールします。この設定をゼロにした場合、利用可能なすべてのステートメントが一度に送信されますが、これは推奨されません。';
$string['mbox'] = 'メールでユーザを識別する';
$string['mbox_desc'] = 'この設定が有効にされた場合、ステートメントはメール (mbox) でユーザを識別します。';
$string['networkerror'] = 'レスポンスの送信中にネットワークエラーが発生しました。';
$string['noerrorsfound'] = 'エラーは見つかりませんでした。';
$string['norows'] = '報告する行はありません。';
$string['notificationsnotenabled'] = '通知が有効にされていません。';
$string['notificationtriggerlimitnotreached'] = '通知トリガの上限に達していません。';
$string['password'] = 'あなたのxAPI用LRS基本認証シークレット/パスワード';
$string['pluginadministration'] = 'ログストアxAPI管理';
$string['pluginname'] = 'ログストアxAPI';
$string['privacy:metadata:logstore_xapi_failed_log'] = '失敗したイベントのためのxAPI保持テーブルです。';
$string['privacy:metadata:logstore_xapi_failed_log:userid'] = '失敗したイベントのためのxAPI保持テーブルのユーザIDです。';
$string['privacy:metadata:logstore_xapi_log'] = 'cron処理のためのxAPI保持テーブルです。';
$string['privacy:metadata:logstore_xapi_log:userid'] = 'cron処理のためのxAPI保持テーブルのユーザIDです。';
$string['recipeerror'] = 'LDHは400エラーで応答しました。これはレシピに問題がある可能性があります。';
$string['replayevent'] = '再生イベント';
$string['resendevents'] = '再送信 ({$a->count})';
$string['resendevents:failed'] = 'イベントは再処理のために送信されませんでした。';
$string['resendevents:success'] = 'イベントが再処理のために送信されました。';
$string['resendfailedbatches'] = '失敗したバッチを再送信する';
$string['resendfailedbatches_desc'] = 'バッチでイベントを処理する際にバッチが失敗した場合、より小さなバッチでイベントの再送信を試みます。未選択の場合、イベント失敗時にバッチ全体が送信されることはありません。';
$string['response'] = 'レスポンス';
$string['routes'] = 'これらのルートでのアクションを含む';
$string['send_additional_email_addresses'] = '追加メールアドレス';
$string['send_additional_email_addresses_desc'] = 'メールアドレスのリストに通知を送信します。カンマ区切りで入力してください。';
$string['send_jisc_data'] = 'ステートメントにJISCデータを追加する';
$string['send_jisc_data_desc'] = 'ステートメントにはJISCが要求するデータが含まれます。';
$string['send_name'] = 'アクタ名フィールドを設定する';
$string['send_name_desc'] = 'この設定を有効にした場合、アクタフィールドにユーザのフルネームを追加します。';
$string['send_response_choices'] = '解答の選択肢を送信する';
$string['send_response_choices_desc'] = '多肢選択問題および配列問題の解答は正解および選択肢の候補とともにLRSに送信されます。';
$string['send_username'] = 'ユーザ名でユーザを識別する';
$string['send_username_desc'] = 'この設定を有効にした場合、ステートメントはユーザ名でユーザを識別します。';
$string['sendevents'] = '送信 ({$a->count})';
$string['sendidnumber'] = 'コースおよび活動IDナンバーを送信する';
$string['sendidnumber_desc'] = 'ステートメントにはオブジェクト拡張子内のコースおよび活動のIDナンバー (管理者が定義) が含まれます。';
$string['settings'] = '一般設定';
$string['shortcourseid'] = 'コース省略名を送信する';
$string['shortcourseid_desc'] = 'ステートメントに短いコースID拡張子としてコース省略名が含まれます。';
$string['submit'] = '送信';
$string['successful_events'] = 'イベントが正常に処理されました。';
$string['taskemit'] = 'LRSにレコードを送信する';
$string['taskfailed'] = '失敗したレコードをLRSに送信する';
$string['taskhistorical'] = 'LRSに履歴レコードを送信する';
$string['tasksendfailednotifications'] = '失敗通知を送信する';
$string['type'] = 'タイプ';
$string['unknownerror'] = 'エラーコード: {$a}';
$string['unknownverb'] = '不明な動詞が要求されました。これは開発者に設定される必要があります。';
$string['user'] = 'ユーザ';
$string['user_help'] = 'ユーザのフルネームを検索する';
$string['username'] = 'ユーザ名';
$string['xapi'] = 'xAPI';
$string['xapi:manageerrors'] = '失敗したステートメントを再生する';
$string['xapi:managehistoric'] = '履歴ログを管理する';
$string['xapi:viewerrorlog'] = 'xAPIエラーログを表示する';
$string['xapifieldset'] = 'カスタムフィールドセット例';
$string['xapisettingstitle'] = 'ログストアxAPI設定';
