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
 * Strings for component 'verbalfeedback', language 'ja', version '4.4'.
 *
 * @package     verbalfeedback
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity'] = '活動';
$string['addanewquestion'] = '新しい質問を追加する';
$string['additem'] = 'アイテムを追加する';
$string['allowundodecline'] = '参加者が辞退済みフィードバック提出を元に戻せるようにする';
$string['allparticipants'] = 'すべてのコース参加者';
$string['anonymous'] = '匿名';
$string['averagerating'] = '平均レーティング:';
$string['backtoverbalfeedbackdashboard'] = '口頭フィードバックダッシュボードに戻る';
$string['calendarend'] = '{$a} 非公開';
$string['calendarstart'] = '{$a} 公開';
$string['categoryheader'] = 'カテゴリヘッダ';
$string['categoryplural'] = 'カテゴリ';
$string['categoryweight'] = 'カテゴリ加重';
$string['closebeforeopen'] = 'あなたは開始日の前に終了日を指定しました。';
$string['commentfromuser'] = '{$a->comment} ({$a->fromuser})';
$string['comments'] = 'コメント';
$string['confirmfinaliseanonymousfeedback'] = 'あなたの {$a->name} に対するフィードバック回答を匿名化します。回答匿名化処理後、あなたの回答は変更できなくなります。続けてもよろしいですか?';
$string['confirmquestiondeletion'] = '本当にこの質問を削除してもよろしいですか?';
$string['course'] = 'コース';
$string['criteria'] = 'クライテリア';
$string['criterion'] = 'クライテリア';
$string['dataformatinvalid'] = 'このレポートのダウンロードに指定されたファイルフォーマットが無効であるか、有効にされていません。有効なファイルフォーマットを選択してください。';
$string['decline'] = '辞退';
$string['declinefeedback'] = 'フィードバックを辞退する';
$string['declineheading'] = '{$a} の口頭フィードバックを辞退する';
$string['declinereason'] = 'このフィードバックを辞退する理由を提供してください。';
$string['declinereasonplaceholdertext'] = 'ここにあなたの理由を入力してください ... (任意)';
$string['deletecategory'] = 'カテゴリを削除する';
$string['deletecriterion'] = 'クライテリアを削除する';
$string['deleteitem'] = 'アイテムを削除する';
$string['deletelanguage'] = '言語を削除する';
$string['deletequestion'] = '質問を削除する';
$string['deletetemplate'] = 'テンプレートを削除する';
$string['detailrating'] = '詳細レーティング';
$string['done'] = '完了';
$string['download'] = 'ダウンロード';
$string['downloadreportas'] = 'フィードバックレポートをダウンロードする ...';
$string['downloadtemplate'] = 'テンプレートをダウンロードする';
$string['editcategory'] = 'カテゴリを編集する';
$string['editcriterion'] = 'クライテリアを編集する';
$string['edititems'] = '口頭フィードバックアイテムを編集する';
$string['editlanguage'] = '言語を編集する';
$string['editquestion'] = '質問を編集する';
$string['edittemplate'] = 'テンプレートを編集する';
$string['enableselfreview'] = 'セルフレビューを有効にする';
$string['entercomment'] = 'ここにあなたのコメントを入力してください。';
$string['enterquestion'] = '質問テキストを入力する ...';
$string['errorblankdeclinereason'] = '必須';
$string['errorblankquestion'] = '必須';
$string['errorcannotadditem'] = '口頭フィードバックアイテムを追加できません。';
$string['errorcannotparticipate'] = 'あなたはこの口頭フィードバック活動に参加できません。';
$string['errorcannotrespond'] = 'あなたはこの口頭フィードバック活動内でフィードバックを提供できません。';
$string['errorcannotupdateitem'] = '口頭フィードバックアイテム更新できません。';
$string['errorcannotviewallreports'] = 'あなたは他の参加者の結果を閲覧できません。';
$string['errorinvalidstatus'] = '無効なステータス';
$string['erroritemnotfound'] = '口頭フィードバックアイテムが見つかりませんでした。';
$string['errornocaptoedititems'] = '申し訳ございません。あなたには口頭フィードバックアイテムを編集するケイパビリティがありません。';
$string['errornotenrolled'] = 'この口頭フィードバック活動に参加する場合、あなたはこのコースに登録する必要があります。';
$string['errornothingtodecline'] = '辞退するフィードバックがありません。';
$string['errornotingroup'] = 'この口頭フィードバック活動に参加する場合、あなたはグループに属する必要があります。あなたのコース管理者にご連絡ください。';
$string['errorquestionstillinuse'] = '少なくとも1つの口頭フィードバックインスタンスでまだ使用されているため、この質問は削除できません。';
$string['errorreportnotavailable'] = 'あなたのフィードバックレポートはまだ利用できません。';
$string['errorresponsesavefailed'] = '回答保存中にエラーが発生しました。後でもう一度お試しください。';
$string['errorroleconflict'] = 'このインスタンスでは現在のユーザは学生であり同時に教師でもあります。これは許可されません。';
$string['errorverbalfeedbacknotfound'] = '口頭フィードバックが見つかりませんでした。';
$string['factor'] = '要素';
$string['feedbackgiven'] = '送信済みフィードバック';
$string['feedbackreceived'] = '受信済みフィードバック';
$string['feedbacksurvey'] = '{$a} に対するフィードバック調査';
$string['finaliseanonymousfeedback'] = '匿名フィードバックを確定する';
$string['finalize'] = '評価を確定する';
$string['finalresult'] = '最終結果';
$string['gotoquestionbank'] = '口頭質問バンクへ移動する';
$string['id'] = 'ID';
$string['instancealreadyclosed'] = '口頭フィードバック活動はすでに終了しています。';
$string['instancenotready'] = '「利用可能にする」ボタンをクリックして口頭フィードバックアイテムを編集した後、質問を教師に公開します。';
$string['instancenotreadystudents'] = '口頭フィードバック活動はまだ準備できていません。後でもう一度お試しください。';
$string['instancenotyetopen'] = '口頭フィードバック活動はまだ公開されていません。';
$string['instancenowready'] = '参加者による口頭フィードバック活動の準備ができました!';
$string['languageplural'] = '言語';
$string['listcategories'] = 'カテゴリを一覧表示する';
$string['listcriteria'] = 'クライテリアを一覧表示する';
$string['managetemplates'] = 'テンプレートを管理する';
$string['messageafterdecline'] = 'フィードバックが辞退されました。';
$string['modulename'] = '口頭フィードバック';
$string['modulename_help'] = '口頭フィードバック活動モジュールでは参加者が他のすべての参加者にフィードバックを提供できます。';
$string['modulenameplural'] = '口頭フィードバック';
$string['moveitemdown'] = 'アイテムを下に移動する';
$string['moveitemup'] = 'アイテムを上に移動する';
$string['multiplier'] = '乗数';
$string['negative'] = 'ネガティブ';
$string['newcategory'] = '新しいカテゴリ';
$string['newcriterion'] = '新しいクライテリア';
$string['newlanguage'] = '新しい言語';
$string['newtemplate'] = '新しいテンプレート';
$string['nocriterion'] = 'クライテリアなし';
$string['noitemsyet'] = '口頭フィードバック活動にはまだアイテムがありません。口頭フィードバックアイテムを編集する」をクリックしてアイテムを追加してください。';
$string['notapplicableabbr'] = 'N/A';
$string['notemplate'] = 'テンプレートなし';
$string['numrespondents'] = '回答者数';
$string['openafterclose'] = 'あなたは終了日の後に開始日を指定しました。';
$string['percentage'] = 'パーセンテージ';
$string['pick'] = '選択する';
$string['pickfromquestionbank'] = '質問バンクから質問を選択する';
$string['placeholderquestion'] = '質問テキストを入力する';
$string['pluginadministration'] = '口頭フィードバック管理';
$string['pluginname'] = '口頭フィードバック';
$string['position'] = 'ポジション';
$string['positive'] = 'ポジティブ';
$string['preserveids'] = 'IDを保持しますか?';
$string['previewinfo'] = '質問プレビューです。<a href="{$a}">ここ</a>をクリックして前の表示に戻ります。';
$string['privacy:metadata:instanceid'] = '口頭フィードバックインスタンスのIDです。';
$string['privacy:metadata:verbalfeedback_item'] = '口頭フィードバックアイテムのIDです。';
$string['privacy:metadata:verbalfeedback_response'] = 'このテーブルにはフィードバック質問に対するフィードバック回答者のフィードバック受信者への回答が保存されます。';
$string['privacy:metadata:verbalfeedback_response:value'] = 'フィードバック質問に対する回答者の回答の値です。';
$string['privacy:metadata:verbalfeedback_submission'] = 'このテーブルには参加者間の口頭フィードバック提出状況に関する情報が格納されます。';
$string['privacy:metadata:verbalfeedback_submission:fromuserid'] = 'フィードバックを提供した人のユーザIDです。';
$string['privacy:metadata:verbalfeedback_submission:remarks'] = 'フィードバック受信者へのフィードバックを回答者が辞退した理由です。';
$string['privacy:metadata:verbalfeedback_submission:status'] = 'フィードバック送信のステータスです。';
$string['privacy:metadata:verbalfeedback_submission:touserid'] = 'フィードバック受信者のユーザIDです。';
$string['privatecomment'] = 'プライベートコメント';
$string['providefeedback'] = 'フィードバックを提供する';
$string['qtypecomment'] = 'コメント';
$string['qtypeinvalid'] = '無効な質問タイプです。';
$string['qtyperated'] = 'レーティング済み';
$string['question'] = '質問';
$string['questioncategory'] = 'カテゴリ';
$string['questiontext'] = '質問テキスト';
$string['questiontype'] = '質問タイプ';
$string['ratingaverage'] = '平均レーティング';
$string['ratings'] = 'レーティング';
$string['rel_after'] = '活動終了後に公開する';
$string['rel_closed'] = '参加者に非公開にする';
$string['rel_manual'] = '手動で公開する';
$string['rel_open'] = '参加者に公開する';
$string['release'] = '参加者にレポートを公開する';
$string['release_close'] = '参加者にレポートを非公開にする';
$string['releasetype'] = '公開';
$string['releasetype_help'] = '参加者にフィードバックされたレポートを公開するかどうか指定します。
<ul>
<li>参加者に非公開にする: 参加者は自分のフィードバックレポートを閲覧できません。口頭フィードバック活動を管理できる人 (例: 教師、マネージャ、管理者) のみ参加者のフィードバックレポートを閲覧できます。</li>
<li>参加者に公開する: 参加者は自分のフィードバックレポートをいつでも閲覧できます。</li>
<li>手動で公開する: 口頭フィードバック活動を管理するケイパビリティのあるユーザが公開した場合、参加者は自分のフィードバックレポートを閲覧できます。</li>
<li>活動終了後に公開する: 活動終了後、参加者は自分のフィードバックレポートを閲覧できます。</li>
</ul>';
$string['removecategories'] = 'カテゴリを削除する';
$string['removecriteria'] = 'クライテリアを削除する';
$string['removeresponses'] = '回答を削除する';
$string['removesubmissions'] = '提出を削除する';
$string['removesubratings'] = 'サブレーティングを削除する';
$string['reportimage'] = 'レポートPDFヘッダロゴ';
$string['reportimage_desc'] = '口頭フィードバックでダウンロードしたPDFのヘッダロゴとして表示するイメージです。';
$string['responses'] = '回答';
$string['responsessaved'] = 'あなたの回答が保存されました。';
$string['saveandreturn'] = '保存して戻る';
$string['scale'] = '尺度';
$string['scaleagree'] = '同意する';
$string['scaledisagree'] = '同意しない';
$string['scalenotapplicable'] = '該当なし';
$string['scalesomewhatagree'] = 'やや同意';
$string['scalesomewhatdisagree'] = 'やや同意しない';
$string['scalestronglyagree'] = '強く同意する';
$string['scalestronglydisagree'] = '強く同意しない';
$string['selectparticipants'] = '参加者を選択する';
$string['startend'] = '開始 - 終了';
$string['status'] = 'ステータス';
$string['statuscompleted'] = '完了';
$string['statusdeclined'] = '辞退';
$string['statusinprogress'] = '進行中';
$string['statuspending'] = '保留中';
$string['statusviewonly'] = '表示のみ';
$string['student'] = '学生';
$string['studentcomment'] = '学生コメント';
$string['submissions'] = '提出';
$string['subrating'] = 'サブレーティング';
$string['subratingplural'] = 'サブレーティング';
$string['switchtouser'] = 'ユーザに切り替える ...';
$string['teachers'] = '教師';
$string['template'] = 'テンプレート';
$string['templatecategoryplural'] = 'テンプレートカテゴリ';
$string['templatecriteriaplural'] = 'テンプレートクライテリア';
$string['templateplural'] = 'テンプレート';
$string['text'] = 'テキスト';
$string['title'] = '口頭フィードバック';
$string['titlelabel'] = 'タイトル';
$string['titlemanageitems'] = '口頭フィードバックアイテムを管理する';
$string['todo'] = 'やるべきこと';
$string['totalpercentage'] = '合計';
$string['undodecline'] = '辞退を元に戻す';
$string['valuation'] = '評価';
$string['value'] = '値';
$string['verbalfeedback:addinstance'] = '新しい口頭フィードバックインスタンスを追加する';
$string['verbalfeedback:can_participate'] = '口頭フィードバックの参加者';
$string['verbalfeedback:can_respond'] = '口頭フィードバックの回答';
$string['verbalfeedback:complete'] = '口頭フィードバックを完了する';
$string['verbalfeedback:edititems'] = '口頭フィードバックアイテムを編集する';
$string['verbalfeedback:editquestions'] = '口頭フィードバック質問を編集する';
$string['verbalfeedback:managetemplates'] = '口頭フィードバックテンプレートを編集する';
$string['verbalfeedback:mapcourse'] = '口頭フィードバックをコースにマップする';
$string['verbalfeedback:receive_rating'] = 'ユーザを評価できる';
$string['verbalfeedback:receivemail'] = '口頭フィードバックをメールで受信する';
$string['verbalfeedback:view'] = '口頭フィードバックを表示する';
$string['verbalfeedback:view_all_reports'] = 'すべての学生の口頭フィードバックレポートを表示する';
$string['verbalfeedback:viewanalysepage'] = '口頭フィードバック分析';
$string['verbalfeedbackcategories'] = '口頭フィードバックカテゴリ';
$string['verbalfeedbackcriteria'] = '口頭フィードバッククライテリア';
$string['verbalfeedbacklanguages'] = '口頭フィードバック言語';
$string['verbalfeedbacksettings'] = '口頭フィードバック設定';
$string['verbalfeedbacktemplates'] = '口頭フィードバックテンプレート';
$string['verynegative'] = '非常にネガティブ';
$string['verypositive'] = '非常にポジティブ';
$string['viewfeedbackforuser'] = 'ユーザのフィードバックを表示する';
$string['viewfeedbackreport'] = 'フィードバックレポートを表示する';
$string['weight'] = '加重';
$string['weightedaverage'] = '加重 Ø';
