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
 * Strings for component 'local_notificationsagent', language 'ja', version '4.4'.
 *
 * @package     local_notificationsagent
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actiondetail'] = 'アクション詳細';
$string['actionerror'] = 'アクション実行中にエラーが発生しました。';
$string['actionid'] = 'アクションID';
$string['actionplugins'] = 'アクションプラグイン';
$string['actions'] = 'アクション';
$string['admin_breadcrumb'] = '通知エージェント管理';
$string['assign'] = '選択';
$string['assignassign'] = '割り当て:';
$string['assigncancel'] = 'キャンセル';
$string['assignforced'] = '強制的にルールを割り当てる';
$string['assignsave'] = '変更を保存する';
$string['assignselectcourses'] = 'コースを選択する';
$string['assignselectedinfo'] = 'コース「 {$a->courses} 」およびカテゴリ「 {$a->categories} 」が選択されました。';
$string['assignunselectcourses'] = 'コースを選択解除する';
$string['brokenrulebody'] = 'ルール:  コースの「 {$a->rule}」 :「{$a->course} 」が一時停止されました。';
$string['cachedef_action'] = 'アクション一覧です。';
$string['cachedef_condition'] = 'コンディション一覧です。';
$string['cachedef_course'] = 'コースデータです。';
$string['cachedef_launched'] = '周期性を開始したユーザ一覧です。';
$string['card_day'] = '日';
$string['card_day_plural'] = '日';
$string['card_hour'] = '時間';
$string['card_hour_plural'] = '時間';
$string['card_minute'] = '分';
$string['card_minute_plural'] = '分';
$string['card_second'] = '秒';
$string['card_second_plural'] = '秒';
$string['cardif'] = 'もしすべてが:';
$string['cardsharedby'] = 'コース「 {$a->coursename} 」で「 {$a->username} 」が共有している';
$string['cardthen'] = 'そして:';
$string['cardunless'] = 'いずれかに該当しない限り:';
$string['condition_days'] = '日';
$string['condition_grade'] = '評定';
$string['condition_hours'] = '時間';
$string['condition_minutes'] = '分';
$string['condition_seconds'] = '秒';
$string['conditionplugins'] = 'コンディションプラグイン';
$string['conditions'] = 'コンディション';
$string['course_breadcrumb'] = '通知エージェント';
$string['courseid'] = 'コースID';
$string['deleteaccept'] = 'ルールが削除されました。';
$string['deletecontent_hascontext'] = 'あなたが削除しようとしている「 {$a->type} {$a->title} 」は他のコンテクストに関連付けられています。続けてもよろしいですか?';
$string['deletecontent_nocontext'] = 'あなたは「 {$a->type} {$a->title} 」を削除しようとしています。続けてもよろしいですか?';
$string['deletetitle'] = '「 {$a->type} {$a->title} 」を削除する';
$string['disable_user_use'] = 'ユーザ利用を無効にする';
$string['disable_user_use_desc'] = 'ユーザによる通知エージェントの利用を無効にします。';
$string['editrule_action_error'] = 'あなたは少なくともtつのアクションを追加する必要があります。';
$string['editrule_activaterule'] = '有効化';
$string['editrule_clonerule'] = 'ルールを追加する';
$string['editrule_condition_error'] = 'あなたは少なくとも1つのコンディションを追加する必要があります。';
$string['editrule_deleterule'] = '削除';
$string['editrule_editrule'] = '編集';
$string['editrule_execution_error'] = '{$a->minimum} から {$a->maximum} の間に {$a->timesfired} 回';
$string['editrule_generalconditions'] = '一般コンディション';
$string['editrule_newaction'] = '新しいアクション:';
$string['editrule_newcondition'] = '新しいコンディション:';
$string['editrule_newrule'] = '新しいルール';
$string['editrule_newtemplate'] = '新しいテンプレート';
$string['editrule_orderby'] = '並べ替え順';
$string['editrule_pauserule'] = '一時停止';
$string['editrule_reportrule'] = 'レポート';
$string['editrule_reports'] = 'レポート';
$string['editrule_required_error'] = '必須フィールド';
$string['editrule_runtime'] = 'インターバル';
$string['editrule_runtime_error'] = '「 {$a->timesfired} 」がゼロより大きい場合、インターバルを指定する必要があります。';
$string['editrule_shareallrule'] = '共有';
$string['editrule_sharedallrule'] = '共有';
$string['editrule_sharerule'] = '共有';
$string['editrule_timesfired'] = '実行回数';
$string['editrule_title'] = 'タイトル';
$string['editrule_type'] = 'ルールタイプ';
$string['editrule_unshareallrule'] = '共有解除';
$string['editrule_unsharerule'] = '共有解除';
$string['editrule_usetemplate'] = 'このテンプレートから作成する';
$string['evaluaterule'] = 'ルール評価';
$string['evaluaterule_help'] = 'ルールは次のように評価されます: ([コンディション1] **AND** [コンディション2]  **AND** ... ) **AND NOT** ([例外1] **OR** [例外2] ...) -> [アクション1]->[アクション2]';
$string['exceptions'] = '例外';
$string['export'] = 'エクスポート';
$string['fullaction'] = 'アクション';
$string['fullcourse'] = 'コース';
$string['fullrule'] = 'ルール';
$string['fulltemplate'] = 'テンプレート';
$string['fulluser'] = 'ユーザ';
$string['heading'] = '通知エージェント';
$string['hideshow'] = '秘匿/表示';
$string['id'] = 'ID';
$string['import'] = 'インポート';
$string['import_apply'] = 'インポートして適用する';
$string['import_choose'] = 'JSONファイル';
$string['import_desc'] = 'ルールをインポートするJSONファイルを選択してください。';
$string['import_error'] = 'ルールをインポートできません。あなたのJSONファイルを確認してください。';
$string['import_success'] = 'ルールが正常にインポートされました。';
$string['import_title'] = 'ルールをインポートする';
$string['importrulemissingcapability'] = 'ルールをインポートするためのケイパビリティ';
$string['isnotrule'] = '指定されたルールIDはルールではありません。';
$string['manageactionplugins'] = 'アクションプラグインを管理する';
$string['manageconditionplugins'] = 'コンディションプラグインを管理する';
$string['managenotificationsactionplugins'] = 'アクションプラグインを管理する';
$string['managenotificationsconditionplugins'] = 'コンディションプラグインを管理する';
$string['max_rules_cron'] = 'cronサイクルあたりの最大ルール数';
$string['max_rules_cron_desc'] = 'cronサイクルあたりの最大ルール数です。';
$string['menu'] = 'マイアシスタント';
$string['messageprovider:notificationsagent_message'] = '破損ルール通知';
$string['needcourseid'] = 'コースIDは必須です。';
$string['no_file_selected'] = '選択されたファイルはありません。';
$string['no_json_file'] = 'ファイルはJSONではありません。';
$string['nosuchinstance'] = 'そのようなインスタンスは見つかりませんでした。';
$string['notificationaction_action'] = 'アクションサブプラグイン';
$string['notificationsactionpluginname'] = 'アクションプラグイン';
$string['notificationsagent:assignrule'] = 'ルールを割り当てる';
$string['notificationsagent:checkrulecontext'] = 'ルールのコンテクストをチェックする';
$string['notificationsagent:createrule'] = 'ルールを作成する';
$string['notificationsagent:deleterule'] = 'ルールを削除する';
$string['notificationsagent:editrule'] = 'ルールを編集する';
$string['notificationsagent:exportrule'] = 'ルールをエクスポートする';
$string['notificationsagent:forcerule'] = 'ルールを強制する';
$string['notificationsagent:importrule'] = 'ルールをインポートする';
$string['notificationsagent:manageallrule'] = 'すべてのルールを管理するためのケイパビリティ';
$string['notificationsagent:managecourserule'] = 'コースレベルでルールを管理する';
$string['notificationsagent:manageownrule'] = 'あなた自身のコースルールを管理する';
$string['notificationsagent:managesessions'] = 'ルール順を保存するためのケイパビリティ';
$string['notificationsagent:managesiterule'] = 'サイトレベルでルールを管理する';
$string['notificationsagent:shareruleall'] = 'ルールの共有を承認する';
$string['notificationsagent:unshareruleall'] = 'ルールの共有を拒否する';
$string['notificationsagent:updateruleshare'] = 'ルールの共有ステータスを更新する';
$string['notificationsagent:updaterulestatus'] = 'ルールステータスを更新する';
$string['notificationsagent:viewassistantreport'] = 'ルールレポートを表示する';
$string['notificationsagent:viewcourserule'] = 'コースルールを閲覧するためのケイパビリティ';
$string['notificationsconditionpluginname'] = 'コンディションプラグイン';
$string['pause_after_restore'] = 'リストア後にルールを一時停止する';
$string['pause_after_restore_desc'] = 'コースリストア後にルールを一時停止します。';
$string['placeholder_Course_Category_Name'] = 'コースカテゴリ名';
$string['placeholder_Course_FullName'] = 'コースフルネーム';
$string['placeholder_Course_Url'] = 'コースURL';
$string['placeholder_Current_time'] = '現在時刻';
$string['placeholder_Follow_Link'] = 'フォローリンク';
$string['placeholder_Separator'] = 'メッセージセパレータ';
$string['placeholder_Teacher_Address'] = '教師の住所';
$string['placeholder_Teacher_Email'] = '教師のメールアドレス';
$string['placeholder_Teacher_FirstName'] = '教師の名';
$string['placeholder_Teacher_LastName'] = '教師の姓';
$string['placeholder_Teacher_Username'] = '教師のユーザ名';
$string['placeholder_User_Address'] = 'ユーザの住所';
$string['placeholder_User_Email'] = 'ユーザのメールアドレス';
$string['placeholder_User_FirstName'] = 'ユーザの名';
$string['placeholder_User_LastName'] = 'ユーザの姓';
$string['placeholder_User_Username'] = 'ユーザのユーザ名';
$string['pluginname'] = '通知エージェント';
$string['privacy:metadata:actiondetail'] = 'ユーザに送信されたアクションの詳細です。';
$string['privacy:metadata:actionid'] = 'アクションのIDです。';
$string['privacy:metadata:courseid'] = 'コースのIDです。';
$string['privacy:metadata:createdat'] = 'ルールが作成された日時です。';
$string['privacy:metadata:createdby'] = 'ルールにリンクされているユーザIDです。';
$string['privacy:metadata:localnotificationsagentreport'] = '通知エージェントレポートです。';
$string['privacy:metadata:notificationsagent_cache'] = 'ユーザのキャッシュデータを保存します。';
$string['privacy:metadata:notificationsagent_cache:cache'] = 'キャッシュデータです。';
$string['privacy:metadata:notificationsagent_cache:startdate'] = 'キャッシュの開始日です。';
$string['privacy:metadata:notificationsagent_cache:userid'] = 'キャッシュに関連付けられたユーザのIDです。';
$string['privacy:metadata:notificationsagent_launched'] = 'ユーザに対して開始された通知に関する情報を保存します。';
$string['privacy:metadata:notificationsagent_launched:timecreated'] = 'レコード作成時のタイムスタンプです。';
$string['privacy:metadata:notificationsagent_launched:timemodified'] = 'レコードの最後の更新時のタイムスタンプです。';
$string['privacy:metadata:notificationsagent_launched:timesfired'] = 'ルールがトリガされた回数です。';
$string['privacy:metadata:notificationsagent_launched:userid'] = '起動ルールに関連するユーザのIDです。';
$string['privacy:metadata:notificationsagent_rule'] = 'ユーザが作成したルールを保存します。';
$string['privacy:metadata:notificationsagent_rule:createdat'] = 'ルールが作成されたタイムスタンプです。';
$string['privacy:metadata:notificationsagent_rule:createdby'] = 'ルールを作成したユーザのIDです。';
$string['privacy:metadata:notificationsagent_triggers'] = 'ユーザに関連付けられているトリガを保存します。';
$string['privacy:metadata:notificationsagent_triggers:ruleoff'] = 'トリガに関連付けられたルールです。';
$string['privacy:metadata:notificationsagent_triggers:startdate'] = 'トリガの開始日です。';
$string['privacy:metadata:notificationsagent_triggers:userid'] = 'トリガに関連付けられたユーザのIDです。';
$string['privacy:metadata:notificationsagentreport'] = '一部のユーザデータを含むユーザに送信されたメッセージを記録します。';
$string['privacy:metadata:notificationsagentrule'] = '一部のユーザデータを含むルールを保存します。';
$string['privacy:metadata:ruleid'] = 'ルールのIDです。';
$string['privacy:metadata:timestamp'] = '送信されたアクションのタイムスタンプです。';
$string['privacy:metadata:userid'] = 'このテーブルにリンクされているユーザIDです。';
$string['report'] = '通知エージェントレポート';
$string['rulecancelled'] = 'ルールがキャンセルされました。';
$string['ruledownload'] = 'ルールをエクスポートする';
$string['ruleid'] = 'ルールID';
$string['rulename'] = 'ルール名';
$string['rulesaved'] = 'ルールが保存されました。';
$string['settings'] = '設定';
$string['shareaccept'] = 'ルールが共有されました。';
$string['shareallcontent'] = 'あなたは共有ルール「 {$a->title} 」を承認しようとしています。続けてもよろしいですか?';
$string['sharealltitle'] = '共有ルール「 {$a->title} 」を承認する';
$string['sharecontent'] = 'あなたはルール「 {$a->title} 」を管理者と共有しようとしています。続けてもよろしいですか?';
$string['sharereject'] = 'ルールが拒否されました。';
$string['sharetitle'] = 'ルール「 {$a->title} 」を共有する';
$string['startdate'] = '活動日設定';
$string['startdate_desc'] = '次のパターンで活動ごとに1行使用してください: pluginname|tablename|startdate|startend';
$string['status_acceptactivated'] = 'ルールが有効化されました。';
$string['status_acceptpaused'] = 'ルールが一時停止されました。';
$string['status_activatecontent'] = 'あなたはルール「 {$a->title} 」を有効化しようとしています。続けてもよろしいですか?';
$string['status_activatetitle'] = 'ルール「 {$a->title} 」を有効化する';
$string['status_active'] = 'アクティブ';
$string['status_broken'] = '破損';
$string['status_pausecontent'] = 'あなたはルール「 {$a->title} 」を一時停止しようとしています。続けてもよろしいですか?';
$string['status_paused'] = '一時停止';
$string['status_pausetitle'] = 'ルール「 {$a->title} 」を一時停止する';
$string['status_required'] = '必須';
$string['statusactivate'] = '有効化';
$string['statuspause'] = '一時停止';
$string['subplugintype_notificationsaction'] = 'アクションプラグイン';
$string['subplugintype_notificationsaction_plural'] = 'アクションプラグイン';
$string['subplugintype_notificationsagentaction'] = 'アクションサブプラグイン';
$string['subplugintype_notificationscondition'] = 'コンディションプラグイン';
$string['subplugintype_notificationscondition_plural'] = 'コンディションプラグイン';
$string['tasktriggers'] = '通知トリガタスク';
$string['timestamp'] = '日付';
$string['tracelog'] = '追跡ログ';
$string['tracelog_desc'] = 'ログを追跡します。実運用サイトでは無効にしてください。';
$string['type_rule'] = 'ルール';
$string['type_sharedrule'] = '共有ルール';
$string['type_template'] = 'テンプレート';
$string['unshareaccept'] = 'ルールが共有解除されました。';
$string['unshareallcontent'] = 'あなたは共有ルール「 {$a->title} 」を拒否しようとしています。続けてもよろしいですか?';
$string['unsharealltitle'] = '共有ルール「 {$a->title} 」を拒否する';
$string['unsharecontent'] = 'あなたはルール「 {$a->title} 」を管理者と共有するのを止めようとしています。続けてもよろしいですか?';
$string['unsharetitle'] = 'ルール「 {$a->title} 」を共有解除する';
$string['userid'] = 'ユーザID';
