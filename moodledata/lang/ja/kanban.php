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
 * Strings for component 'kanban', language 'ja', version '4.4'.
 *
 * @package     kanban
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcard'] = 'このカラムにカードを追加する';
$string['addcolumn'] = 'このボードにカラムを追加する';
$string['aftercompletion'] = 'カードがクローズされた後';
$string['afterdue'] = 'カード期限の後';
$string['assignee'] = '割り当て対象者';
$string['assignees'] = '割り当て対象者';
$string['assignme'] = '私に割り当てる';
$string['attachments'] = '添付';
$string['autoclose'] = 'カードを自動的にクローズする';
$string['autohide'] = 'クローズ済みカードを自動的に非表示にする';
$string['cachedef_board'] = 'ボードインスタンスのキャッシュ';
$string['cachedef_timestamp'] = 'カード、カラムまたはボードインスタンスの最終変更タイムスタンプです。';
$string['cardcount'] = 'このカラムのカード数';
$string['cardnotfound'] = 'カードが見つかりませんでした。';
$string['cardtitle'] = 'カードタイトル';
$string['changegroup'] = 'グループボードを変更する';
$string['changeuser'] = 'ユーザボードを変更する';
$string['closecard'] = 'カードをクローズする';
$string['color'] = '色';
$string['column'] = 'カラム';
$string['columntitle'] = 'カラムタイトル';
$string['completioncomplete'] = 'この数のカードを完了する';
$string['completioncreate'] = 'この数のカードを作成する';
$string['completiondetail:complete'] = 'カードを完了する: {$a}';
$string['completiondetail:create'] = 'カードを作成する: {$a}';
$string['connectionlost'] = '接続が切断されました。';
$string['connectionlostmessage'] = 'サーバへの接続が切断されました。再接続を試みます ...';
$string['courseboard'] = '共有ボード';
$string['createtemplate'] = 'テンプレートを作成する';
$string['deleteboard'] = 'ボードを削除する';
$string['deleteboardconfirm'] = '本当にこのボードを削除してもよろしいですか? テンプレートをベースに新しいボードが作成されます。';
$string['deletecard'] = 'カードを削除する';
$string['deletecardconfirm'] = '本当にこのカードを削除してもよろしいですか?';
$string['deletecolumn'] = 'カラムを削除する';
$string['deletecolumnconfirm'] = '本当にこのカラムを削除してもよろしいですか?';
$string['deletemessage'] = 'メッセージを削除する';
$string['deletemessageconfirm'] = '本当にこのメッセージを削除してもよろしいですか?';
$string['deletetemplate'] = 'テンプレートを削除する';
$string['deletetemplateconfirm'] = '本当にこのテンプレートを削除してもよろしいですか?';
$string['doing'] = '作業中';
$string['done'] = '完了';
$string['due'] = '期限';
$string['duedate'] = '期限日';
$string['editboard'] = 'ボードを編集する';
$string['editcard'] = 'カードを編集する';
$string['editcolumn'] = 'カラムを編集する';
$string['editdetails'] = '詳細を編集する';
$string['editing_this_card_is_not_allowed'] = 'このカードの編集は許可されていません。';
$string['enablehistory'] = '履歴を有効にする';
$string['enablehistory_help'] = 'このボードのカード履歴を記録できるようにします (例: カード移動時/カード名変更時/カード完了時)。';
$string['enablehistorydescription'] = 'このオプションを有効にした場合、変更履歴がボードで利用できるようになります。';
$string['groupboard'] = 'グループ「 {$a} 」のグループボード';
$string['hidehidden'] = '秘匿カードを非表示にする';
$string['history'] = '履歴';
$string['history_card_added'] = '{$a->username} がカード「 {$a->title} 」をカラム「 {$a->columnname} 」に追加しました。';
$string['history_card_assigned'] = '{$a->username} がカードをユーザ {$a->affectedusername} に割り当てました。';
$string['history_card_completed'] = '{$a->username} がカードを完了しました。';
$string['history_card_deleted'] = '{$a->username} がカードをカラム「 {$a->columnname} 」から削除しました。';
$string['history_card_moved'] = '{$a->username} がカードをカラム「 {$a->columnname} 」に移動しました。';
$string['history_card_reopened'] = '{$a->username} がカードを再オープンしました。';
$string['history_card_unassigned'] = '{$a->username} がカードをユーザ {$a->affectedusername} から割り当て解除しました。';
$string['history_card_updated'] = '{$a->username} がカードタイトルを「 {$a->title} 」に変更しました。';
$string['history_discussion_added'] = '{$a->username} がディスカッションメッセージを追加しました。';
$string['history_discussion_deleted'] = '{$a->username} がディスカッションメッセージを削除しました。';
$string['kanban:addcard'] = 'カードをカンバンボードに追加する';
$string['kanban:addinstance'] = 'カンバンボードを追加する';
$string['kanban:assignothers'] = '他の人をカードに割り当てる';
$string['kanban:assignself'] = '自分をカードに割り当てる';
$string['kanban:editallboards'] = 'すべてのボードを編集する';
$string['kanban:manageallcards'] = 'すべてのカードを編集/移動する';
$string['kanban:manageassignedcards'] = '自分に割り当てられたカードを編集/移動する';
$string['kanban:manageboard'] = 'ボードを管理する (テンプレート, ボード削除)';
$string['kanban:managecolumns'] = 'ボードのカラムを編集する';
$string['kanban:view'] = 'カンバンボードを表示する';
$string['kanban:viewallboards'] = 'すべてのボードを表示する';
$string['kanban:viewhistory'] = 'ボード履歴を表示する';
$string['linknumbers'] = 'カード番号にリンクする';
$string['linknumbers_help'] = 'カード説明内およびディスカッションのコメント内カード番号がリンクされます。';
$string['liveupdatetime'] = 'ライブアップデート間隔 (秒)';
$string['liveupdatetimedescription'] = 'ボードはこの間隔の後にアップデートを探します。ライブアップデートを無効にするには「0」を設定してください。';
$string['loading'] = 'カンバンボード読み込み中';
$string['loadingdiscussion'] = 'ディスカッション読み込み中';
$string['lock'] = 'ロック';
$string['lockboardcolumns'] = 'ボードカラムをロックする';
$string['message_assigned_fullmessage'] = 'ボード「 {$a->boardname} 」のカード「 {$a->title} 」が {$a->username} によりあなたに割り当てられました。';
$string['message_assigned_smallmessage'] = 'カード「 {$a->title} 」があなたに割り当てられました。';
$string['message_closed_fullmessage'] = 'カード「 {$a->title} 」が {$a->username} によりクローズされました。';
$string['message_closed_smallmessage'] = 'カード「 {$a->title} 」がクローズされました。';
$string['message_discussion_fullmessage'] = 'ボード「 {$a->boardname} 」のカード「 {$a->title} 」のディスカッションに新しいメッセージがあります。
{$a->username}
{$a->content}';
$string['message_discussion_smallmessage'] = 'カード「 {$a->title} 」が議論されました。';
$string['message_due_fullmessage'] = 'ボード「 {$a->boardname} 」のカード「 {$a->title} 」は {$a->duedate} が期限です。';
$string['message_due_smallmessage'] = 'カード「 {$a->title} 」の期限が切れています。';
$string['message_moved_fullmessage'] = 'カード「 {$a->title} 」が {$a->username} によりカラム「 {$a->columnname} 」に移動されました。';
$string['message_moved_smallmessage'] = 'カード「 {$a->title} 」が移動されました。';
$string['message_reopened_fullmessage'] = 'ボード「 {$a->boardname} 」のカード「 {$a->title} 」が {$a->username} により再オープンされました。';
$string['message_reopened_smallmessage'] = 'カード「 {$a->title} 」が再オープンされました。';
$string['message_unassigned_fullmessage'] = 'ボード「 {$a->boardname} 」のカード「 {$a->title} 」が {$a->username} によりあなたから割り当て解除されました。';
$string['message_unassigned_smallmessage'] = 'カード「 {$a->title} 」があなたから割り当て解除されました。';
$string['messageprovider:assigned'] = 'カード割り当て/割り当て解除';
$string['messageprovider:closed'] = 'カードクローズ/再オープン';
$string['messageprovider:discussion'] = 'カードディスカッション';
$string['messageprovider:due'] = 'カード期限';
$string['messageprovider:moved'] = 'カードが移動されました。';
$string['modulename'] = 'カンバンボード';
$string['modulename_help'] = 'この活動はプロジェクトまたは学習プロセスの管理におけるカンバン方式の利用を支援します。
カンバンとはビジュアルボードを通じてタスクを整理およびワークフローを最適化するアジャイルプロジェクト管理手法です。タスクは「作業予定」「作業中」「完了 」等のカラムに分類されるため、進捗状況が一目瞭然となります。目標はワークフローのボトルネックの特定および継続的な効率改善です。
<br>設定によりカンバン活動にはいくつかのタイプのボードがあります:
<ul>
    <li>コースボード: 活動にアクセスできるすべての人が閲覧できます。</li>
    <li>パーソナルボード: それぞれのユーザ用です。</li>
    <li>グループボード</li>
    <li>テンプレートボード: ボードを管理できる人なら誰でも、既存のボードをテンプレートとしてコピーできます。</li>
</ul>';
$string['modulenameplural'] = 'カンバンボード';
$string['moveaftercard'] = '次の後に移動する';
$string['movecard'] = 'カードを移動する';
$string['movecolumn'] = 'カラムを移動する';
$string['myuserboard'] = 'マイパーソナルボード';
$string['name'] = 'ボード名';
$string['name_help'] = 'この名称はコース概要およびボードのタイトルとして表示されます。';
$string['newcard'] = '新しいカード';
$string['newcolumn'] = '新しいカラム';
$string['nogroupavailable'] = '利用可能なグループはありません。';
$string['nokanbaninstances'] = 'このコースにカンバンボードがないか、あなたにアクセスが許可されていません。';
$string['nonewduedate'] = '新しい期限日なし';
$string['nouser'] = 'ユーザなし';
$string['nouserboards'] = 'パーソナルボードなし';
$string['pluginadministration'] = 'カンバン管理';
$string['pluginname'] = 'カンバンボード';
$string['privacy:metadata:action'] = '操作';
$string['privacy:metadata:affected_userid'] = '影響を受けるユーザ';
$string['privacy:metadata:content'] = 'コンテンツ';
$string['privacy:metadata:createdby'] = 'カードを作成したユーザです。';
$string['privacy:metadata:groupid'] = 'グループID';
$string['privacy:metadata:kanban_assignee'] = '割り当て対象者';
$string['privacy:metadata:kanban_board'] = 'ボード';
$string['privacy:metadata:kanban_card'] = 'カード';
$string['privacy:metadata:kanban_column'] = 'カラム';
$string['privacy:metadata:kanban_discussion_comment'] = 'コメント';
$string['privacy:metadata:kanban_history'] = '履歴';
$string['privacy:metadata:parameters'] = '操作に関する情報です。';
$string['privacy:metadata:timecreated'] = '作成日時です。';
$string['privacy:metadata:timemodified'] = '最終更新日時です。';
$string['privacy:metadata:timestamp'] = '操作日時です。';
$string['privacy:metadata:userid'] = 'ユーザIDです。';
$string['pushcard'] = 'すべてのボードにカードをプッシュする';
$string['pushcardconfirm'] = 'これはこのカンバン活動内のすべてのボードにテンプレートを含むこのカードのコピーを送信します。既存のコピーは置換されます。';
$string['reminderdate'] = 'リマインダ日';
$string['remindertask'] = 'リマインダ通知を送信する';
$string['repeat'] = 'カードを繰り返す';
$string['repeat_help'] = 'この設定を有効にした場合、このインスタンスの完了直後にこのカードの新しいコピーが一番左のカラムに作成されます。ディスカッション、履歴および割り当て対象者はコピーされません。あなたは必要に応じて新しい期限日の計算方法を選択できます。これは新しいリマインダ日にも適用されます。';
$string['repeat_interval'] = '間隔';
$string['repeat_interval_type'] = '頻度';
$string['repeat_newduedate'] = '新しい期限日';
$string['reset_group'] = 'グループボードをリセットする';
$string['reset_kanban'] = '共有ボードをリセットする';
$string['reset_personal'] = 'パーソナルボードをリセットする';
$string['saveastemplate'] = 'テンプレートとして保存する';
$string['saveastemplateconfirm'] = '本当にこのボードをテンプレートとして保存してもよろしいですか? 現在テンプレートが存在する場合、そのテンプレートと置換されます。';
$string['senddiscussion'] = 'ディスカッションメッセージを送信する';
$string['showattachment'] = '添付を表示する';
$string['showboard'] = '共有ボードを表示する';
$string['showdescription'] = '説明を表示する';
$string['showdiscussion'] = 'ディスカッションを表示する';
$string['showhidden'] = '秘匿カードを表示する';
$string['showtemplate'] = 'テンプレートを表示する';
$string['startdiscussion'] = 'ディスカッションを開始する';
$string['template'] = 'テンプレート';
$string['toboard'] = 'ボード「 {$a->boardname} 」';
$string['todo'] = '作業予定';
$string['topofcolumn'] = 'カラムトップ';
$string['unassign'] = 'このユーザを割り当て解除する';
$string['unassignme'] = '私を割り当て解除する';
$string['uncomplete'] = '再オープン';
$string['unlock'] = 'ロック解除';
$string['unlockboardcolumns'] = 'ボードカラムをロック解除する';
$string['usenumbers'] = 'カード番号を使用する';
$string['usenumbers_help'] = 'この設定を有効にした場合、このカンバン活動のカード番号が有効になります。番号はボードごとにユニークです (つまり、ユーザ/グループボードおよび共有ボードのカードは同じ番号を持てます)。';
$string['userboard'] = '{$a} のパーソナルボード';
$string['userboards'] = 'パーソナルボード';
$string['userboards_help'] = '参加者のパーソナルボードを有効にします (参加者およびトレイナのみ閲覧可)。';
$string['userboardsenabled'] = 'パーソナルボード有効';
$string['userboardsonly'] = 'パーソナルボードのみ';
$string['wiplimit'] = '1人あたりのWIP制限';
$string['wiplimitenable'] = 'WIP制限を有効にする';
$string['wiplimitgreaterzero'] = 'WIP制限はゼロより大きくする必要があります。';
$string['wiplimitreached'] = '{$a->users} のWIP制限に達しました。';
