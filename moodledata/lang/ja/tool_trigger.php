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
 * Strings for component 'tool_trigger', language 'ja', version '4.4'.
 *
 * @package     tool_trigger
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = '操作';
$string['active'] = 'アクティブ';
$string['addworkflow'] = '新しいトリガワークフローを追加する';
$string['areatomonitor'] = '監視エリア';
$string['areatomonitor_help'] = 'ワークフローを始動するためのイベントを含むMoodleのエリアです。';
$string['availablefields'] = '利用可能フィールド';
$string['badstepclass'] = '正しくないステップクラス名です。';
$string['badsteptype'] = '正しくないステップタイプです。';
$string['cachedef_eventsubscriptions'] = 'ツールトリガイベントサブスクリプションキャッシュ';
$string['cleanupsettings'] = 'クリーンアップ設定';
$string['cleanupsettingsdesc'] = '次の設定はこのプラグインのクリーンアップタスクをコントロールします。';
$string['cli_extractfields'] = 'データベースから学習済みイベントのフィールドを抽出しています ...';
$string['cli_filefail'] = 'ファイルの書き込みに失敗しました: {$a}';
$string['cli_filesummary'] = 'ファイル書き出し: {$a}';
$string['cli_writingfile'] = '{$a} 件のイベントフィールド定義をファイルに書き込んでいます ...';
$string['core'] = 'コア';
$string['deleterule'] = 'ルールを削除する';
$string['deletestep'] = 'ステップを削除する';
$string['description'] = '説明';
$string['downloadrule'] = 'ルールをダウンロードする';
$string['draft'] = '下書き';
$string['draftmode'] = '下書きモード';
$string['draftmode_help'] = 'トリガを起動するワークフローをテストするため下書きモードを使用します。';
$string['duplicatedworkflowname'] = '{$a} (コピー)';
$string['duplicaterule'] = 'ルールを複製する';
$string['editrule'] = 'ルールを編集する';
$string['editsettings'] = 'ワークフロー設定';
$string['editstep'] = 'ステップを編集する';
$string['editworkflow'] = 'トリガワークフローを編集する';
$string['emailactionstepdesc'] = 'メール送信を許可するためのステップです。';
$string['emailactionstepname'] = 'メール';
$string['emailcontent'] = 'コンテンツ';
$string['emailcontent_help'] = 'メールで使用するコンテンツです。';
$string['emailsubject'] = '件名';
$string['emailsubject_help'] = 'メールの件名に使用するテキストです。';
$string['emailto'] = 'To';
$string['emailto_help'] = 'メール送信先です。';
$string['erroreditstep'] = 'ワークフローステップの保存中に問題が発生しました。再度お試しください。';
$string['errorimportworkflow'] = 'ワークフローのインポート中に問題が発生しました。再度お試しください。';
$string['errorsavingworkflow'] = 'ワークフローの保存中に問題が発生しました。再度お試しください。';
$string['event'] = 'イベント';
$string['eventfields'] = 'イベントフィールド';
$string['eventtomonitor'] = '監視するイベント';
$string['eventtomonitor_help'] = 'ワークフローを動作させるMoodleのイベントです。';
$string['filter'] = 'フィルタ';
$string['httpostactionheaders'] = 'ヘッダ';
$string['httpostactionheaders_help'] = '送信するリクエストヘッダです。';
$string['httpostactionparams'] = 'パラメータ';
$string['httpostactionparams_help'] = 'リクエストと共に送信するパラメータです。';
$string['httpostactionurl'] = 'URL';
$string['httpostactionurl_help'] = 'データを投稿するURLです。';
$string['httppostactionstepdesc'] = 'MoodleワークフローによるデータのHTTP/S エンドポイントへの送信を許可するためのステップです。';
$string['httppostactionstepname'] = 'HTTP Post';
$string['importmodaltitle'] = 'ワークフローをファイルからインポートする';
$string['importworkflow'] = 'ワークフローをインポートする';
$string['invalidjson'] = 'ワークフローインポートファイルに無効なJSONが含まれているため、インポートできませんでした。';
$string['invalidversion'] = 'このプラグインのバージョンではワークフローインポートファイルが有効ではありません。';
$string['jsonencode'] = 'JSONエンコードパラメータ';
$string['jsonencode_help'] = 'この設定を有効にした場合、パラメータフィールドの値がJSONエンコードされます。';
$string['lasttriggered'] = '最終トリガ';
$string['learning'] = '学習モードを有効にする';
$string['learning_help'] = '学習モードは起動済みイベントのための利用可能なフィールドに関してデータを収集します。';
$string['learningsettings'] = '学習モード設定';
$string['learningsettingsdesc'] = 'すべてのMoodleイベントはイベントを起動するためのワークフロー内でプレースホルダとして使用できる一連のフィールドを提供します。<br/>
このプラグインには事前定義された一連のMoodleコアイベントのプレースホルダが同梱されます。学習モードを有効にすることにより、Moodleイベントに利用可能なプレースホルダを動的に更新します。<br/><br/>
この設定はMoodleのパフォーマンスに問題を生じさせる可能性があるため、定義済みプレースホルダが存在しないプラグインのイベントのみに使用すべきです。<br/>
詳細はプラグインドキュメンテーションをご覧ください。';
$string['lookup'] = 'ルックアップ';
$string['manage'] = '管理';
$string['manageworkflow'] = 'ワークフローを管理する';
$string['messageprovider:tool_trigger'] = 'イベントトリガ通知';
$string['modaltitle'] = 'ワークフローステップを追加する';
$string['movestepdown'] = 'ステップを末尾に移動する';
$string['movestepup'] = 'ステップを先頭に移動する';
$string['name'] = '名称';
$string['noavailablefields'] = '利用可能なフィールドはありません。学習モードの有効化をお考えください。';
$string['noworkflowfile'] = 'ワークフローファイルは見つかりませんでした。';
$string['numsteps'] = 'ステップ';
$string['outputprefix'] = 'フィールドに追加する接頭辞';
$string['pluginname'] = 'イベントトリガ';
$string['pluginname_help'] = 'Moodleのイベントトリガです。';
$string['pluginsettings'] = 'プラグイン設定';
$string['privacy:metadata:events'] = '監視中のMoodleイベントからのデータです。';
$string['privacy:metadata:events:anonymous'] = 'イベントが匿名フラグ付けされているかどうか示します。';
$string['privacy:metadata:events:eventname'] = 'イベント名です。';
$string['privacy:metadata:events:ip'] = 'イベント発生時に使用されるIPアドレスです。';
$string['privacy:metadata:events:origin'] = 'イベント発生元です。';
$string['privacy:metadata:events:other'] = 'イベントに関する追加情報です。';
$string['privacy:metadata:events:realuserid'] = '代理ログインしている場合のイベントの背後にいる実ユーザのIDです。';
$string['privacy:metadata:events:relateduserid'] = 'このイベントに関連するユーザのIDです。';
$string['privacy:metadata:events:timecreated'] = 'イベントが発生する時間です。';
$string['privacy:metadata:events:userid'] = 'このイベントを発生させるユーザのIDです。';
$string['privacy:path:events'] = '&nbsp;';
$string['step_action_email:privacy:desc'] = 'このプラグインはMoodleからのデータを含むメールを送信するよう設定できます。';
$string['step_action_httppost:privacy:desc'] = 'このプラグインはMoodleからのデータを含むHTTPリクエストを外部アドレスに送信するよう設定できます。';
$string['step_action_logdump_desc'] = 'このステップはイベントおよびワークフローステップデータをcronログに書き出します (主にテストに有用です)。';
$string['step_action_logdump_name'] = 'Cronログ';
$string['step_filter_fail_desc'] = '常に失敗するステップです (主にテストに有用です)。';
$string['step_filter_fail_name'] = '失敗';
$string['step_lookup_course:privacy:coursedata_desc'] = 'ID、コース名、開始および終了日等を含むコースに関するデータです。';
$string['step_lookup_course_courseidfield'] = 'コースIDデータフィールド';
$string['step_lookup_course_desc'] = 'このステップではコースに関するデータを検索します。';
$string['step_lookup_course_name'] = 'コースルックアップ';
$string['step_lookup_user:privacy:userdata_desc'] = 'ユーザ名、氏名、メールアドレス等のユーザに関する個人データです。';
$string['step_lookup_user_desc'] = 'このステップではユーザに関するデータを検索します。';
$string['step_lookup_user_name'] = 'ユーザルックアップ';
$string['step_lookup_user_nodeleted'] = 'ユーザが削除されている場合、終了しますか?';
$string['step_lookup_user_useridfield'] = 'ユーザIDデータフィールド';
$string['stepclass'] = 'ステップ';
$string['stepclass_help'] = '適用するステップを選択してください。';
$string['stepdescription'] = 'ステップ説明';
$string['stepdescription_help'] = 'このステップの意味のある説明です。';
$string['stepmodalbutton'] = 'ワークフローステップを追加する';
$string['stepname'] = 'ステップ名';
$string['stepname_help'] = 'このステップの名称です。';
$string['steprequired'] = 'ワークフローには少なくとも1ステップ含まれる必要があります。';
$string['steptype'] = 'ステップタイプ';
$string['steptype_help'] = '適用するステップのタイプです。';
$string['taskcleanup'] = '古い処理済みイベントを削除する';
$string['tasklearn'] = '保存イベントのフィールドに関して学習する';
$string['tasklearnstart'] = 'イベントフィールド抽出処理を開始します ...';
$string['taskprocessworkflows'] = 'ワークフロー処理スケジュールタスク';
$string['timetocleanup'] = '古いイベントをクリーンアップする時間';
$string['timetocleanup_help'] = 'この設定は削除に先立ってMoodleデータベース内に残るワークフローが正常に実行される時間を設定します。';
$string['trigger:manageworkflows'] = '自動イベントトリガワークフローを作成および設定します。';
$string['workflowactive'] = 'ワークフローアクティブ';
$string['workflowactive_help'] = 'イベント発生時、有効なワークフローのみ処理されます。';
$string['workflowcopysuccess'] = 'ワークフローが正常に複製されました。';
$string['workflowdeleteareyousure'] = '本当にワークフロー「 {$a} 」を削除してもよろしいですか?';
$string['workflowdeletesuccess'] = 'ワークフローが正常に削除されました。';
$string['workflowdescription'] = '説明';
$string['workflowdescription_help'] = 'このワークフローの目的に関する短い説明です。';
$string['workflowfile'] = 'ワークフローファイル';
$string['workflowimported'] = 'ワークフローが正常にインポートされました。';
$string['workflowname'] = '名称';
$string['workflowname_help'] = 'このワークフローの人間が解読可能な名称です。';
$string['workflowoverview'] = 'ワークフロー概要';
