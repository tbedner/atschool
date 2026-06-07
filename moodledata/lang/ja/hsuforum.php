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
 * Strings for component 'hsuforum', language 'ja', version '4.4'.
 *
 * @package     hsuforum
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessible'] = 'アクセス可能';
$string['activityoverview'] = '新しいフォーラム投稿があります。';
$string['addanewdiscussion'] = '新しいディスカッショントピックを追加する';
$string['addanewtopic'] = '新しいディスカッションを追加する';
$string['addareply'] = '返信する';
$string['addyourdiscussion'] = 'ディスカッションを追加する';
$string['advancedsearch'] = '高度な検索';
$string['ajaxrequesterror'] = 'リクエストを完了できませんでした。もう一度やり直してください。';
$string['all'] = 'すべて';
$string['allforums'] = 'すべてのフォーラム';
$string['allowanonymous'] = '匿名投稿を許可する';
$string['allowanonymous_help'] = 'チェックすると、フォーラムを閲覧するときに各投稿の投稿者の名前は表示されません。';
$string['allowdiscussions'] = '{$a} はこのフォーラムに投稿できますか?';
$string['allowsallsubscribe'] = 'このフォーラムではすべてのユーザが購読するかどうか選択できます。';
$string['allowsdiscussions'] = 'このフォーラムでは1人1件のディスカッショントピックを開始することができます。';
$string['allsubscribe'] = 'すべてのフォーラムを購読する';
$string['allunsubscribe'] = 'すべてのフォーラムの購読を解除する';
$string['alreadyfirstpost'] = 'このディスカッションにはすでに最初の投稿があります。';
$string['anonymousalternatename'] = '匿名';
$string['anonymousfirstname'] = '匿名';
$string['anonymousfirstnamephonetic'] = '匿名';
$string['anonymouslastname'] = 'ユーザ';
$string['anonymouslastnamephonetic'] = 'ユーザ';
$string['anonymousrecentactivity'] = 'このフォーラムでは活動が行われている可能性がありますが、フォーラムは匿名のため詳細を表示できません。';
$string['anonymouswarning'] = 'このディスカッショントピックを移動すると、匿名の情報が明らかになる可能性があります。 本当によろしいですか。';
$string['anyfile'] = 'すべてのファイル';
$string['areapost'] = 'メッセージ';
$string['articledateformat'] = '%l:%M%P %b %e, %Y';
$string['attachment'] = '添付ファイル';
$string['attachment_help'] = 'あなたは1つ以上のファイルをフォーラム投稿に任意で添付することができます。あなたがイメージを添付した場合、メッセージの下に表示されます。';
$string['attachmentnopost'] = 'あなたは投稿IDなしで添付ファイルをエクスポートできません。';
$string['attachments'] = '添付ファイル';
$string['attachments:x'] = '添付ファイル: {$a}';
$string['author'] = '投稿者';
$string['blockafter'] = 'ブロッキングまでの投稿閾値';
$string['blockafter_help'] = 'この設定では指定された時間内にユーザが投稿できる投稿数を指定します。ケイパビリティ「mod/forum:postwithoutthrottling」が割り当てられたユーザは投稿制限から除外されます。';
$string['blockperiod'] = 'ブロッキング期間';
$string['blockperiod_help'] = '指定された時間内に指定された投稿数以上を投稿した場合、学生の投稿を拒否することができます。ケイパビリティ「mod/forum:postwithoutthrottling」が割り当てられたユーザは投稿制限から除外されます。';
$string['blockperioddisabled'] = 'ブロックしない';
$string['blogforum'] = 'ブログフォーマットで表示される標準フォーラム';
$string['bynameondate'] = '{$a->date} - {$a->name} の投稿';
$string['cannnotdeletesinglediscussion'] = '申し訳ありませんが、そのディスカッションを削除することはできません。';
$string['cannotadd'] = 'このフォーラムにディスカッションを追加できませんでした。';
$string['cannotadddiscussion'] = 'このフォーラムにディスカッションを追加するにはグループのメンバーである必要があります。';
$string['cannotadddiscussionall'] = 'あなたにはすべての参加者のための新しいディスカッショントピックを追加するパーミッションがありません。';
$string['cannotadddiscussiongroup'] = 'どのグループにも属していないので、ディスカッションを投稿できません。';
$string['cannotaddsubscriber'] = 'このフォーラムにID {$a} の購読者を追加できませんでした!';
$string['cannotaddteacherforumto'] = 'コースのセクションゼロに対してコンバートされた教師フォーラムインスタンスを追加できませんでした。';
$string['cannotcreatediscussion'] = '新しいディスカッションを作成できませんでした。';
$string['cannotcreateinstanceforteacher'] = '教師フォーラムに対して新しいコースモジュールインスタンスを作成できませんでした。';
$string['cannotdeletepost'] = 'あなたはこの投稿を削除できません!';
$string['cannoteditposts'] = 'あなたは他のユーザの投稿を編集できません!';
$string['cannotfinddiscussion'] = 'このフォーラムのディスカッションが見つかりませんでした。';
$string['cannotfindfirstpost'] = 'このフォーラムの最初の投稿が見つかりませんでした。';
$string['cannotfindorcreateforum'] = 'サイトの主アナウンスメントフォーラムが見つからないか作成できません。';
$string['cannotfindparentpost'] = '投稿 {$a} の先頭親投稿が見つかりませんでした。';
$string['cannotmakeprivatereplies'] = '申し訳ありませんが、このフォーラムへの非公開返信は禁止されています';
$string['cannotmovefromsingleforum'] = '「トピック1件のシンプルなディスカッション」フォーラムからはディスカッションを移動できません。';
$string['cannotmovenotvisible'] = 'フォーラムは非表示です。';
$string['cannotmovetonotexist'] = 'あなたはこのフォーラムを移動できません - フォーラムが存在しません!';
$string['cannotmovetonotfound'] = 'このコースには対象のフォーラムが見つかりませんでした。';
$string['cannotmovetosingleforum'] = '「トピック1件のシンプルなディスカッション」フォーラムにはディスカッションを移動できません。';
$string['cannotpurgecachedrss'] = 'ソースまたは対象フォーラムに関してキャッシュされたRSSフィードを削除できませんでした - あなたのファイルパーミッションを確認してください。';
$string['cannotremovesubscriber'] = 'このフォーラムからID {$a} の購読者を削除できませんでした!';
$string['cannotreply'] = 'あなたはこの投稿に返信できません。';
$string['cannotsplit'] = 'このフォーラムのディスカッションは分割できません。';
$string['cannotsubscribe'] = '申し訳ございません、あなたが購読するにはグループメンバーである必要があります。';
$string['cannottrack'] = 'フォーラムの未読管理を停止できませんでした。';
$string['cannotunsubscribe'] = 'あなたをフォーラムから購読解除できませんでした。';
$string['cannotupdatepost'] = 'あなたはこの投稿を更新できません。';
$string['cannotviewpostyet'] = 'まだ投稿していないため、あなたはこのディスカッションで他の学生の質問を読むことはできません。';
$string['cannotviewusersposts'] = 'このユーザの投稿に関して、あなたが閲覧できるものはありません。';
$string['cansubscribediscerror'] = 'あなたはこのディスカッションを購読することを許可されていません。';
$string['cleanreadtime'] = '古い投稿を既読とする時刻';
$string['clicktocollapse'] = '投稿メッセージと返信を非表示にするにはクリックしてください';
$string['clicktoexpand'] = '投稿メッセージと返信を表示するにはクリックしてください';
$string['collapseall'] = 'すべて折りたたむ';
$string['completiondiscussions'] = '学生はディスカッションを作成する必要があります:';
$string['completiondiscussionsdesc'] = '学生は少なくとも {$a} 件のディスカッションを作成する必要があります。';
$string['completiondiscussionsgroup'] = '必須ディスカッション数';
$string['completiondiscussionshelp'] = '完了に必要なディスカッション数';
$string['completionposts'] = '学生は次の件数のディスカッションまたは返信を投稿する必要があります:';
$string['completionpostsdesc'] = '学生は少なくとも {$a} 件のディスカッションまたは返信を投稿する必要があります。';
$string['completionpostsgroup'] = '必須投稿数';
$string['completionpostshelp'] = '完了に必要なディスカッションまたは返信数';
$string['completionreplies'] = '学生は次の件数の返信を投稿する必要があります:';
$string['completionrepliesdesc'] = '学生は少なくとも {$a} 件の返信を投稿する必要があります。';
$string['completionrepliesgroup'] = '必須返信数';
$string['completionreplieshelp'] = '完了に必要な返信数';
$string['completionusegradeerror'] = 'このフォーラムは採点されていないため、採点を要求できません。 この修了要件を削除するか、このフォーラムを採点してください。';
$string['configcleanreadtime'] = '古い投稿を「既読」テーブルからクリアする時刻 (時) です。';
$string['configdigestmailtime'] = 'メール送信を選択したユーザに投稿内容を要約したメールが毎日送信されます。ここでは1日の内で何時に毎日のメールを送信するか設定します (この設定後に実行される次のcronがメールを送信します)。';
$string['configenablerssfeeds'] = 'すべてのフォーラムのRSS使用を有効にします。ここで設定しても各フォーラムでRSSフィードを手動で設定する必要があります。';
$string['configenabletimedposts'] = '新しいフォーラムディスカッションの表示期間の設定を許可したい場合、「Yes」を選択してください。';
$string['confighiderecentposts'] = 'コースページへの最近のフォーラム投稿の表示を停止するには、yesに設定します。';
$string['configlongpost'] = 'この文字長以上の長さ (HTMLは含まない) は長いとみなされます。サイトのフロントページ、ソーシャルフォーマット、ユーザプロファイルに表示される投稿内容の長さはforum_shortpostとforum_longpostの値の間に短くされます。';
$string['configmanydiscussions'] = 'フォーラム1ページあたりに表示されるディスカッションの最大数です。';
$string['configmaxattachments'] = '投稿ごとに許可されるデフォルトの最大添付ファイル数です。';
$string['configmaxbytes'] = 'すべてのフォーラムの添付ファイルに関するデフォルト最大サイズ (コース制限および他のローカル設定に従います)';
$string['configoldpostdays'] = '古い投稿を既読とする日数です。';
$string['configreplytouser'] = 'フォーラムの投稿がメール送信される場合、受信者がフォーラムを介さず個人的に返信できるようメールにユーザのメールアドレスを表示しますか? 「Yes」に設定した場合でもユーザはプロファイルページでメールアドレスを隠すよう設定することができます。';
$string['configrssarticlesdefault'] = 'RSSフィードが有効にされた場合、デフォルト投稿数 (ディスカッションまたは投稿) を設定してください。';
$string['configrsstypedefault'] = 'RSSフィードが有効にされた場合、デフォルト活動タイプを設定してください。';
$string['configshortpost'] = 'この文字長以下の長さ (HTMLは含まない) は短いとみなされます (下記参照)。';
$string['configsubscriptiontype'] = '購読モードのデフォルト設定です。';
$string['configusermarksread'] = '「Yes」に設定した場合、ユーザは投稿を手動で既読にする必要があります。「No」に設定した場合、投稿が閲覧された時点で既読にされます。';
$string['confirmsubscribe'] = '本当にフォーラム「 {$a} 」を購読してもよろしいですか?';
$string['confirmunsubscribe'] = '本当にフォーラム「 {$a} 」から購読解除してもよろしいですか?';
$string['couldnotadd'] = '不明なエラーのためあなたの投稿を追加できませんでした。';
$string['couldnotdeletereplies'] = '申し訳ございません、返信済みのため削除できませんでした。';
$string['couldnotupdate'] = '不明なエラーのため投稿を更新できませんでした。';
$string['createdbynameondate'] = '作成日: {$ a-> date}   作成者:  {$ a-> name}';
$string['crontask'] = 'オープンフォーラムメーリングおよびメンテナンスジョブ';
$string['csv'] = 'CSVファイル';
$string['date'] = '日付';
$string['default'] = 'デフォルト';
$string['delete'] = '削除';
$string['deleteattachments'] = '添付ファイルを削除';
$string['deleteattachmentx'] = '{$a}を削除';
$string['deleteddiscussion'] = 'ディスカッショントピックが削除されました。';
$string['deletedpost'] = '投稿が削除されました。';
$string['deletedposts'] = '投稿が削除されました。';
$string['deletesure'] = 'この投稿を削除してもよろしいですか?';
$string['deletesureplural'] = 'この投稿およびすべての返信を削除してもよろしいですか? (投稿数 {$a})';
$string['digestmailheader'] = 'これは {$a->sitename} フォーラムの新しい投稿に関するあなたのデイリーダイジェストです。あなたのデフォルトのフォーラムメールプリファレンスを変更するには {$a->userprefs} に移動してください。';
$string['digestmailpost'] = 'あなたのフォーラムダイジェストプリファレンスを変更する';
$string['digestmailpostlink'] = 'あなたのフォーラムダイジェストプリファレンスを変更する: {$a}';
$string['digestmailprefs'] = 'あなたのユーザプロファイル';
$string['digestmailsubject'] = '{$a}: フォーラムダイジェスト';
$string['digestmailtime'] = 'ダイジェストメールを送信する時刻';
$string['digestsentusers'] = 'メールダイジェストが {$a} 名のユーザに正常に送信されました。';
$string['disallowsubscribe'] = '購読不可';
$string['disallowsubscribeteacher'] = '購読不可 (教師を除く)';
$string['discussion'] = 'ディスカッション';
$string['discussion:x'] = 'ディスカッション: {$a}';
$string['discussionlocked'] = 'このディスカッションはロックされているため、あなたは返信することはできません。';
$string['discussionlockingdisabled'] = 'ディスカッションをロックしない';
$string['discussionlockingheader'] = 'ディスカッションロッキング';
$string['discussionmoved'] = 'このディスカッションは 「 {$a} 」に移動されました。';
$string['discussionmovedpost'] = 'このディスカッションはフォーラム「 <a href="{$a->forumhref}">{$a->forumname}</a> 」の<a href="{$a->discusshref}">ここ</a>に移動されました。';
$string['discussionname'] = 'ディスカッション名';
$string['discussionpin'] = 'ピン留め';
$string['discussionpinned'] = 'ピン留め';
$string['discussionpinned_help'] = 'ピン留めディスカッションはフォーラムの最上部に表示されます。';
$string['discussions'] = 'ディスカッション';
$string['discussionsortkey:created'] = '作成日';
$string['discussionsortkey:lastreply'] = '最新';
$string['discussionsortkey:replies'] = '活動的';
$string['discussionsortkey:subscribe'] = '購読済';
$string['discussionsplit'] = 'ディスカッションは分割されました';
$string['discussionsstartedby'] = '{$a} によって開始されたディスカッション';
$string['discussionsstartedbyrecent'] = '{$a} によって最近開始されたディスカッション';
$string['discussionsstartedbyuserincourse'] = '{$a->fullname} によって {$a->coursename} で開始されたディスカッション';
$string['discussionunpin'] = 'ピン留め解除';
$string['discussthistopic'] = 'このトピックを読む';
$string['displaydiscussionreplies'] = 'ディスカッションの返信を表示する';
$string['displayend'] = '表示終了';
$string['displayend_help'] = 'この設定では特定の日付の後にフォーラム投稿を非表示にするかどうか指定します。管理者は常にフォーラム投稿を閲覧できることに留意してください。';
$string['displayperiod'] = '表示期間';
$string['displaystart'] = '表示開始';
$string['displaystart_help'] = 'この設定では特定の日付からフォーラム投稿を表示するかどうか指定します。管理者は常にフォーラム投稿を閲覧できることに留意してください。';
$string['displaywordcount'] = '総単語数を表示する';
$string['displaywordcount_help'] = 'この設定ではそれぞれの投稿の総単語数を表示するかどうか指定します。';
$string['eachuserforum'] = '各人が1件のディスカッションを投稿する';
$string['edit'] = '編集';
$string['editedby'] = '{$a->name} により編集 - 最初の投稿日時 {$a->date}';
$string['editedpostupdated'] = '{$a} の投稿が更新されました。';
$string['editing'] = '編集';
$string['emaildigestcompleteshort'] = '完全な投稿';
$string['emaildigestdefault'] = 'デフォルト ({$a})';
$string['emaildigestoffshort'] = 'ダイジェストなし';
$string['emaildigestsubjectsshort'] = '件名のみ';
$string['emaildigesttype'] = 'メールダイジェストオプション';
$string['emaildigesttype_help'] = 'あなたがそれぞれの投稿に関して受信する通知タイプです。

* デフォルト - あなたのプロファイルのダイジェスト設定に従います。あなたがプロファイルを更新した場合、ここで変更内容が反映されます。
* ダイジェストなし - あなたはフォーラム投稿ごとに1通のメールを受信します。
* ダイジェスト - 完全な投稿 - あなたはそれぞれのフォーラム投稿に関する完全なコンテンツを含むメールダイジェストを1日1通受信します。
* ダイジェスト - 件名のみ - あなたはそれぞれのフォーラム投稿に関する件名を含むメールダイジェストを1日1通受信します。';
$string['emptymessage'] = 'あなたの投稿に問題があります。おそらく投稿が空白のままか、添付ファイルのサイズが大きすぎます。あなたの変更は保存されませんでした。';
$string['erroremptymessage'] = '投稿メッセージを空にすることはできません。';
$string['erroremptysubject'] = '投稿件名を空にすることはできません。';
$string['errorenrolmentrequired'] = 'このコンテンツにアクセスするにはあなたはこのコースに登録する必要があります。';
$string['errorwhiledelete'] = 'レコードの削除中にエラーが発生しました。';
$string['eventassessableuploaded'] = 'コンテンツが投稿されました。';
$string['eventcoursesearched'] = 'コースが検索されました。';
$string['eventdiscussioncreated'] = 'ディスカッションが作成されました。';
$string['eventdiscussiondeleted'] = 'ディスカッションが削除されました。';
$string['eventdiscussionmoved'] = 'ディスカッションが移動されました。';
$string['eventdiscussionpinned'] = 'ディスカッションがピン留めされました。';
$string['eventdiscussionunpinned'] = 'ディスカッションがピン留め解除されました。';
$string['eventdiscussionupdated'] = 'ディスカッションが更新されました。';
$string['eventdiscussionviewed'] = 'ディスカッションが閲覧されました。';
$string['eventpostcreated'] = '投稿が作成されました。';
$string['eventpostdeleted'] = '投稿が削除されました。';
$string['eventpostupdated'] = '投稿が更新されました。';
$string['eventreadtrackingdisabled'] = '未読管理が無効にされました。';
$string['eventreadtrackingenabled'] = '未読管理が有効にされました。';
$string['eventsubscribersviewed'] = '購読者が閲覧されました。';
$string['eventsubscriptioncreated'] = '購読が作成されました。';
$string['eventsubscriptiondeleted'] = '購読が削除されました。';
$string['eventuserreportviewed'] = 'ユーザレポートが閲覧されました。';
$string['everyonecanchoose'] = 'すべてのユーザは購読を選択できます。';
$string['everyonecannowchoose'] = 'すべてのユーザは購読を選択できるようになりました。';
$string['everyoneisnowsubscribed'] = 'すべてのユーザがこのフォーラムを購読するようになりました。';
$string['everyoneissubscribed'] = 'すべてのユーザがこのフォーラムを購読します。';
$string['existingsubscribers'] = '既存の購読者';
$string['exportdiscussion'] = 'すべてのディスカッションをポートフォリオにエクスポートする';
$string['forum'] = 'フォーラム';
$string['forumauthorhidden'] = '投稿者 (非表示)';
$string['forumblockingalmosttoomanyposts'] = 'あなたは投稿数の上限に近づきつつあります。あなたは直近の {$a->blockperiod} に {$a->numposts} 回投稿しています。投稿数の上限は {$a->blockafter} 回です。';
$string['forumbodydeleted'] = 'このフォーラム投稿のコンテンツは削除されたため現在アクセスすることはできません。';
$string['forumbodyhidden'] = 'あなたはこの投稿を閲覧できません。恐らく、あなたがまだディスカッションに投稿していない、最大編集時間を経過していない、ディスカッションが開始されていない、またはディスカッションの有効期限が切れています。';
$string['forumintro'] = '説明';
$string['forumname'] = 'フォーラム名';
$string['forumposts'] = 'フォーラム投稿';
$string['forums'] = 'フォーラム';
$string['forumsubjectdeleted'] = 'このフォーラム投稿は削除されました。';
$string['forumsubjecthidden'] = '件名 (非表示)';
$string['forumtracked'] = '投稿は未読管理されています。';
$string['forumtrackednot'] = '投稿は未読管理されていません。';
$string['forumtype'] = 'フォーラムタイプ';
$string['forumtype_help'] = 'フォーラムには5つのタイプあります:

* トピック1件のシンプルなディスカッション - 誰でも返信できる単一のディスカッションです (分離グループには使用できません)。
* 各人が1件のディスカッションを投稿する - それぞれの学生が誰でも返信できる厳密に1つのディスカッショントピックを投稿できます。
* Q&Aフォーラム - 学生は他の学生の投稿を読む前に自分の考え方を投稿する必要があります。
* ブログフォーマットで表示される標準フォーラム - 誰でも常に新しいトピックを開始できる開かれたフォーラムです。ディスカッショントピックは1つのページに「このトピックを読む」リンクとして表示されます。
* 一般利用のための標準フォーラム - 誰でも常に新しいトピックを開始できる開かれたフォーラムです。';
$string['generalforum'] = '一般利用のための標準フォーラム';
$string['generalforums'] = '一般フォーラム';
$string['hiddenforumpost'] = '非表示フォーラム投稿';
$string['hsuforum:canoverridediscussionlock'] = 'ロックされたディスカッションに返信する';
$string['hsuforum:exportdiscussion'] = 'ディスカッションをエクスポートする';
$string['hsuforum:movediscussions'] = 'ディスカッションを移動する';
$string['hsuforum:pindiscussions'] = 'ディスカッションをピン留めする';
$string['hsuforum:revealpost'] = '匿名フォーラム内のこの投稿で自分の名前を他のユーザに表示する';
$string['hsuforum:splitdiscussions'] = 'ディスカッションを分割する';
$string['hsuforum:startdiscussion'] = '新しいディスカッションを開始する';
$string['hsuforum:viewdiscussion'] = 'ディスカッションを閲覧する';
$string['indicator:cognitivedepth'] = 'フォーラム認知的';
$string['indicator:cognitivedepth_help'] = 'この指標はフォーラム活動で学生が到達した認識深度に基づきます。';
$string['indicator:socialbreadth'] = 'フォーラム社会的';
$string['indicator:socialbreadth_help'] = 'この指標はフォーラム活動で学生が到達した社会的広がりに基づきます。';
$string['inforum'] = '{$a}';
$string['introblog'] = '今後ブログエントリが利用できないため、このフォーラムの投稿はコース内のユーザブログから自動的にコピーされました。';
$string['intronews'] = '一般ニュースおよびアナウンスメント';
$string['introsocial'] = '投稿制限なしオープンフォーラム';
$string['introteacher'] = '教師専用フォーラム';
$string['invalidaccess'] = 'このページは正しくアクセスされていません。';
$string['invaliddigestsetting'] = '無効なメールダイジェストが設定されました。';
$string['invaliddiscussionid'] = 'ディスカッションIDが正しくないか存在しません。';
$string['invalidforcesubscribe'] = '無効な強制購読モードです。';
$string['invalidforumid'] = 'フォーラムIDが正しくありません。';
$string['invalidparentpostid'] = '親投稿IDが正しくありません。';
$string['invalidpostid'] = '投稿ID ({$a}) が有効ではありません。';
$string['learningforums'] = '学習フォーラム';
$string['loadmorediscussions'] = 'さらにディスカッションを読み込む';
$string['lockdiscussionafter'] = '次の休眠期間後、ディスカッションをロックする';
$string['lockdiscussionafter_help'] = '最後の返信以後 、指定された期間の経過後にディスカッションを自動でロックすることができます。

ロックされたディスカッションに返信するケイパビリティのあるユーザはディスカッションに返信することによりロックを解除することができます。';
$string['longpost'] = '長い投稿';
$string['mailnow'] = '編集遅延時間なしにフォーラム投稿通知を送信する';
$string['manageforumsubscriptions'] = 'フォーラムの購読を管理する';
$string['managesubscriptionsoff'] = '購読管理を終了する';
$string['managesubscriptionson'] = '購読者を管理する';
$string['manydiscussions'] = '1ページあたりのディスカッション数';
$string['markalldread'] = 'このディスカッションの投稿すべてを既読にします。';
$string['markallread'] = 'このフォーラムの投稿すべてを既読にします。';
$string['markasreadonnotification'] = 'フォーラム投稿通知を送信する場合';
$string['markasreadonnotification_help'] = 'フォーラム投稿が通知される場合、あなたはフォーラム未読管理の目的として投稿を既読にするかどうか選択することができます。';
$string['markasreadonnotificationno'] = '投稿を既読にしない';
$string['markasreadonnotificationyes'] = '投稿を既読にする';
$string['markread'] = '既読にする';
$string['markreadbutton'] = '既読<br />にする';
$string['markunread'] = '未読にする';
$string['markunreadbutton'] = '未読<br />にする';
$string['maxattachments'] = '最大添付ファイル数';
$string['maxattachments_help'] = 'この設定ではフォーラム投稿に添付できる最大ファイル数を指定します。';
$string['maxattachmentsize'] = '最大添付ファイルサイズ';
$string['maxattachmentsize_help'] = 'この設定ではフォーラム投稿に添付できる最大ファイルサイズを指定します。';
$string['maxtimehaspassed'] = '申し訳ございません、この投稿 ({$a}) の最大編集回数を超えました!';
$string['message'] = 'メッセージ';
$string['messageinboundattachmentdisallowed'] = 'あなたの返信には添付を含みますがフォーラムが添付を許可していないため、投稿することはできません。';
$string['messageinboundfilecountexceeded'] = 'フォーラム ({$a->forum->maxattachments}) で許可された最大添付数を超えているため、あなたの返信を投稿することはできません。';
$string['messageinboundfilesizeexceeded'] = '合計添付サイズ ({$a->filesize}) がフォーラムで許可された最大サイズ ({$a->maxbytes}) を超えているため、あなたの返信を投稿することはできません。';
$string['messageinboundforumhidden'] = '現在、フォーラムを利用できないため、あなたの返信を投稿することはできません。';
$string['messageinboundnopostforum'] = 'あなたには {$a->forum->name} に投稿するパーミッションがないため、あなたの返信を投稿することはできません。';
$string['messageinboundthresholdhit'] = 'あなたの返信を投稿できません。あなたはこのフォーラムに設定された投稿閾値を超過しています。';
$string['messageplaceholder'] = '投稿内容を記述...';
$string['messageprovider:digests'] = '購読済みオープンフォーラムダイジェスト';
$string['messageprovider:posts'] = '購読オープンフォーラム投稿';
$string['missingsearchterms'] = '次の検索語はこのメッセージのHTMLマークアップにのみ表示されます。';
$string['modeflatnewestfirst'] = '返信を新しいものからフラット表示する';
$string['modeflatoldestfirst'] = '返信を古いものからフラット表示する';
$string['modenested'] = '返信をネスト表示する';
$string['modethreaded'] = '返信をスレッド表示する';
$string['modulename'] = 'オープンフォーラム';
$string['modulename_help'] = 'オープンフォーラム活動モジュールにおいて参加者は非同期にディスカッションすることができます。例) 長期間に及ぶディスカッション

誰でもいつでも新しいディスカッションを開始することのできる標準フォーラム、それぞれの学生が厳密に1つのディスカッションのみ開始することのできるフォーラムまたは他の学生の投稿を閲覧するためには学生が最初に投稿する必要のあるQ＆Ａフォーラム等、選択することのできるいくつかのフォーラムタイプがあります。教師はフォーラム投稿へのファイル添付を許可することができます。添付された画像はフォーラム投稿内に表示されます。

新しい投稿に関する通知を受信するできるよう参加者はフォーラムを購読することができます。教師は購読モードを任意、強制、自動、または停止に設定することができます。必要であれば設定された時間内に設定された投稿数以上を投稿できないよう学生をブロックすることができます。これは個人によるディスカッションの支配を防ぐことができます。

フォーラム投稿は教師または学生 (ピア評価) によって評価することができます。評価は合計した後に最終評価として評定表に記録させることができます。

フォーラムは下記のように使用することができます:

* 学生がお互いを知り合うためのソーシャルスペースとして
* コースのお知らせ用として (強制購読のニュースフォーラムを使用)
* コースコンテンツまたは読書素材のディスカッション用として
* 以前に対面セッションで触れた問題に関する継続的なオンラインディスカッション用として
* 教師専用フォーラムとして (非表示フォーラムを使用)
* チューターおよび学生がアドバイスを与えることのできるヘルプセンターとして
* 学生教師間の1対1のプライベートサポートエリアとして (1グループあたり1人のグループを使った分離グループを使用)
* 学外活動用として (例えば学生が熟考するための「頭の体操」および解決方法の提案)';
$string['modulename_link'] = 'mod/hsuforum/view';
$string['modulenameplural'] = 'オープンフォーラム';
$string['more'] = '詳細';
$string['movedmarker'] = '(移動済み)';
$string['movethisdiscussionto'] = 'このディスカッションを移動する ...';
$string['mustprovidediscussionorpost'] = 'あなたはディスカッションIDまたは投稿IDをエクスポートに提供する必要があります。';
$string['myprofileotherdis'] = 'オープンフォーラムディスカッション';
$string['myprofileotherpost'] = 'オープンフォーラム投稿';
$string['myprofileowndis'] = 'マイオープンフォーラムディスカッション';
$string['myprofileownpost'] = 'マイオープンフォーラム投稿';
$string['namenews'] = 'アナウンスメント';
$string['namenews_help'] = 'コースアナウンスメントフォーラムはお知らせのための特別フォーラムです。コース作成時に自動手的に作成されます。コースには1つのアナウンスメントフォーラムのみ設置することができます。教師および管理者のみアナウンスメントを投稿することができます。「最新アナウンスメント」ブロックでは最新のアナウンスメントを表示します。';
$string['namesocial'] = 'ソーシャルフォーラム';
$string['newforumposts'] = '新しいフォーラム投稿';
$string['nextdiscussion'] = 'より新しいディスカッション';
$string['noattachments'] = 'このフォーラムには添付ファイルがありません。';
$string['nodiscussionsstartedby'] = '{$a} から開始されたディスカッションはありません。';
$string['nodiscussionsstartedbyyou'] = 'あなたが開始したディスカッションはありません。';
$string['noguestpost'] = '申し訳ございません、ゲストは投稿できません。';
$string['noguesttracking'] = '申し訳ございません、ゲストは未読管理オプションを設定できません。';
$string['nomorepostscontaining'] = 'これ以上「 {$a} 」 を含んだ投稿はありません。';
$string['nonanonymous'] = '非匿名';
$string['nonews'] = 'まだ新しいアナウンスメントは投稿されていません。';
$string['noonecansubscribenow'] = '現在、購読は無効にされています。';
$string['nopermissiontosubscribe'] = 'あなたには購読者を閲覧するパーミッションがありません。';
$string['nopermissiontoview'] = 'あなたにはこの投稿を閲覧するパーミッションがありません。';
$string['nopostforum'] = '申し訳ございません、あなたはこのフォーラムに投稿できません。';
$string['noposts'] = '投稿はありません。';
$string['nopostsmadebyuser'] = '{$a} の投稿はありません。';
$string['nopostsmadebyyou'] = 'あなたの投稿はありません。';
$string['nosubscribers'] = 'このフォーラムにはまだ購読者はいません。';
$string['notexists'] = 'ディスカッションはすでに存在しません。';
$string['nothingnew'] = '{$a} に新しい投稿はありません。';
$string['notingroup'] = '申し訳ございません、あなたがこのフォーラムを閲覧するにはグループに属している必要があります。';
$string['notinstalled'] = 'フォーラムモジュールがインストールされていません。';
$string['notpartofdiscussion'] = 'この投稿はディスカッションの一部ではありません。';
$string['notrackforum'] = '投稿を未読管理しない';
$string['noviewdiscussionspermission'] = 'あなたにはこのフォーラムを閲覧するパーミッションがありません。';
$string['nowallsubscribed'] = '{$a} のすべてのフォーラムの購読を登録しました。';
$string['nowallunsubscribed'] = '{$a} のすべてのフォーラムの購読を解除しました。';
$string['nownotsubscribed'] = '{$a->name} には「 {$a->forum} 」の新しい投稿は通知されません。';
$string['nownottracking'] = '{$a->name} は 「 {$a->forum} 」を未読管理していません。';
$string['nowsubscribed'] = '{$a->name} には「 {$a->forum} 」の新しい投稿が通知されます。';
$string['nowtracking'] = '{$a->name} は現在「 {$a->forum} 」を未読管理しています。';
$string['numposts'] = '{$a} 投稿';
$string['olderdiscussions'] = '以前のディスカッション';
$string['oldertopics'] = '過去のトピック';
$string['oldpostdays'] = '投稿を既読とする日数';
$string['onereply'] = '返信: 1件';
$string['overviewnumpostssince'] = '最終ログイン以降の投稿数: {$a}';
$string['overviewnumunread'] = '合計未読数: {$a}';
$string['parent'] = '親投稿を表示する';
$string['parentofthispost'] = 'この投稿の親';
$string['pluginadministration'] = 'オープンフォーラム管理';
$string['pluginname'] = 'オープンフォーラム';
$string['postadded'] = '<p>あなたの投稿が正常に追加されました。</p>
<p>あなたが内容を変更したい場合、 {$a} 編集できます。</p>';
$string['postaddedsuccess'] = 'あなたの投稿が正常に追加されました。';
$string['postaddedtimeleft'] = 'あなたが内容を変更したい場合、 {$a} 編集できます。';
$string['postbymailsuccess'] = 'おめでとうございます、あなたの件名「 {$a->subject} 」のフォーラム投稿が正常に追加されました。あなたは {$a->discussionurl} で投稿を閲覧することができます。';
$string['postbymailsuccess_html'] = 'おめでとうございます、あなたの件名「 $a->subject 」の<a href="{$a->discussionurl}">フォーラム投稿</a>が正常に投稿されました。';
$string['postbyuser'] = '{$a->post} by {$a->user}';
$string['postbyxinprivatereplytox'] = '{$a->parent}への{$a->author}からの非公開返信';
$string['postincontext'] = 'この投稿をコンテクスト内に表示する';
$string['postmailinfolink'] = 'これは {$a->coursename} に投稿されたメッセージのコピーです。

返信するにはこのリンクをクリックしてください: {$a->replylink}';
$string['postmailnow'] = '<p>この投稿はすべてのフォーラム購読者にすぐに送信されます。</p>';
$string['postmailsubject'] = '{$a->courseshortname}: {$a->subject}';
$string['postoptions'] = '投稿';
$string['postrating1'] = '主に分離認識の傾向がある';
$string['postrating2'] = '分離認識と関連認識を同等に持っている';
$string['postrating3'] = '主に関連認識の傾向がある';
$string['posts'] = '投稿';
$string['postsmadebyuser'] = '{$a} による投稿';
$string['postsmadebyuserincourse'] = '{$a->coursename} における {$a->fullname} による投稿';
$string['posttoforum'] = 'フォーラムに投稿する';
$string['posttomygroups'] = 'すべてのグループにコピーを投稿する';
$string['posttomygroups_help'] = 'あなたがアクセスすることのできるすべてのグループにこのメッセージのコピーを投稿します。あなたがアクセスすることのできないグループの参加者はこの投稿を閲覧することはできません。';
$string['postupdated'] = 'あなたの投稿が更新されました。';
$string['potentialsubscribers'] = '潜在的購読者';
$string['previousdiscussion'] = '以前のディスカッション';
$string['privacy:digesttypepreference'] = 'あなたは次のフォーラムダイジェストタイプの受信を選択しました: 「 {$a->type} 」';
$string['privacy:discussionsubscriptionpreference'] = 'あなたはこのフォーラムに関して次のディスカッション購読プリファレンスを選択しました: 「 {$a->preference} 」';
$string['privacy:metadata:core_rating'] = 'オープンフォーラムは投稿の評価のサポートにレーティングサブシステムを使用します。';
$string['privacy:metadata:core_tag'] = 'オープンフォーラムは投稿のタグのサポートにタグサブシステムを使用します。';
$string['privacy:metadata:preference:autosubscribe'] = '投稿に返信する場合にディスかションを購読するか示します。';
$string['privacy:metadata:preference:maildigest'] = 'サイト全体のメールダイジェストプリファレンスです。';
$string['privacy:metadata:preference:markasreadonnotification'] = 'メッセージとして受信する場合にフォーラム投稿を既読マークするか示します。';
$string['privacy:metadata:preference:trackforums'] = '未読管理が有効にされているかどうか示します。';
$string['privacy:postwasread'] = 'この投稿は最初に {$a->firstread} に読まれました。また、直近では {$a->lastread} に読まれました。';
$string['privacy:readtrackingdisabled'] = 'あなたはこのフォーラム内で読んだ投稿を追跡しないよう選択しました。';
$string['privacy:request:delete:discussion:name'] = '投稿者の依頼により削除します。';
$string['privacy:request:delete:post:message'] = 'この投稿のコンテンツは投稿者の依頼により削除されました。';
$string['privacy:request:delete:post:subject'] = '投稿者の依頼により削除します。';
$string['privacy:subscribedtoforum'] = 'あなたはこのフォーラムを購読しています。';
$string['privatereplies'] = '非公開返信を許可する';
$string['privaterepliesdisabledglobally'] = '非公開返信はフォーラム全体で無効に設定されています。';
$string['privatereply'] = '非公開返信';
$string['privatereply_help'] = 'チェックすると，この投稿は，返信相手のみに表示されます。さらに，この投稿にはだれも返信できなくなります。';
$string['privatereplybyx'] = '{$a}への非公開返信';
$string['processingdigest'] = 'ユーザ {$a} のメールダイジェストを処理中';
$string['processingpost'] = '投稿 {$a} を処理中';
$string['prune'] = '分割';
$string['prunedpost'] = '新しいディスカッションが投稿より作成されました。';
$string['pruneheading'] = '投稿を分割して新しいディスカッションに移動する';
$string['qandaforum'] = 'Q&Aフォーラム';
$string['qandanotify'] = 'これはQ&Aフォーラムです。これらの質問に対する他の人の回答を読むには最初にあなたの回答を投稿する必要があります。';
$string['re'] = 'Re:';
$string['readtherest'] = '残りのトピックを読む';
$string['removeallforumtags'] = 'すべてのフォーラムタグを削除する';
$string['replies'] = '返信';
$string['repliesmany'] = '現在の返信数: {$a}';
$string['repliesone'] = '現在の返信数: {$a}';
$string['repliesx'] = '返信: {$a}';
$string['reply'] = '返信';
$string['reply_handler'] = 'オープンフォーラム投稿にメールで返信します。';
$string['reply_handler_name'] = 'オープンフォーラム投稿に返信する';
$string['replybuttontitle'] = '{$a}に返信する';
$string['replybyx'] = '{$a}からの返信';
$string['replyforum'] = 'フォーラムに返信する';
$string['replytopostbyemail'] = 'あなたはこのフォーラム投稿にメールで返信することができます。';
$string['replytouser'] = '返信にメールアドレスを使用する';
$string['replytox'] = '{$a}への返信';
$string['resetdigests'] = 'すべてのユーザのフォーラムダイジェストプリファレンスを削除する';
$string['resetforums'] = '次のフォーラムから投稿を削除する';
$string['resetforumsall'] = 'すべての投稿を削除する';
$string['resetsubscriptions'] = 'すべてのフォーラムの購読を解除する';
$string['resettrackprefs'] = 'すべてのフォーラム未読管理プリファレンスを削除する';
$string['reveal'] = '投稿内で自分の名前を表示する';
$string['reveal_help'] = 'チェックすると，あなたの名前が投稿内に表示され，匿名ではなくなります';
$string['rssarticles'] = '最近の記事のRSS数';
$string['rssarticles_help'] = 'この設定ではRSSフィードに含まれる記事 (ディスカッションおよび投稿) 数を設定します。一般的に5から20の間が適切です。';
$string['rsssubscriberssdiscussions'] = 'ディスカッションのRSSフィード';
$string['rsssubscriberssposts'] = '投稿のRSSフィード';
$string['rsstype'] = 'この活動のRSSフィード';
$string['rsstype_help'] = 'この活動のRSSフィードを有効にするにはフィードに含まれるディスカッションまたは投稿を選択してください。';
$string['rsstypedefault'] = 'RSSフィードタイプ';
$string['search'] = '検索';
$string['search:activity'] = 'オープンフォーラム - 活動情報';
$string['search:post'] = 'オープンフォーラム - 投稿';
$string['searchdatefrom'] = '投稿がこの日付よりも新しい';
$string['searchdateto'] = '投稿がこの日付よりも古い';
$string['searchforumintro'] = '下記のフィールドの少なくとも1つに検索語句を入力してください:';
$string['searchforums'] = 'フォーラムを検索する';
$string['searchfullwords'] = 'これらの語を完全に含む';
$string['searchnotwords'] = 'これらの語を含まない';
$string['searcholderposts'] = '過去の投稿を検索する ...';
$string['searchphrase'] = 'このフレーズが正確に投稿に含まれる';
$string['searchresults'] = '検索結果';
$string['searchsubject'] = 'これらの語が件名に含まれる';
$string['searchtags'] = 'タグ付け';
$string['searchuser'] = 'この名前が投稿者名に合致する';
$string['searchuserid'] = '投稿者のMoodle ID';
$string['searchwhichforums'] = '検索するフォーラムを選択してください';
$string['searchwords'] = 'これらの語が投稿のどこかに含まれる';
$string['seeallposts'] = 'このユーザによるすべての投稿を表示する';
$string['shortpost'] = '短い投稿';
$string['showbookmark'] = 'ブックマークを許可';
$string['showrecent'] = '最新の投稿をコースに表示する';
$string['showsubscribers'] = '現在の購読者を表示/編集する';
$string['showsubstantive'] = '実質的な投稿のマーキングを許可する';
$string['singleforum'] = 'トピック1件のシンプルなディスカッション';
$string['smallmessage'] = '{$a->user} による {$a->forumname} の投稿';
$string['smallmessagedigest'] = 'フォーラムダイジェストには {$a} 件のメッセージが含まれます。';
$string['sortdiscussions'] = 'ディスカッションをソートする';
$string['sortdiscussionsby'] = '並べ替え';
$string['startedby'] = 'ディスカッション開始';
$string['subject'] = '件名';
$string['subjectplaceholder'] = 'タイトル';
$string['submit'] = '送信';
$string['subscribe'] = 'このフォーラムを購読する';
$string['subscribeall'] = 'このフォーラムをすべての人に購読させる';
$string['subscribed'] = '購読';
$string['subscribedisc'] = 'このディスカッションを購読する';
$string['subscribeenrolledonly'] = '申し訳ございません、登録しているユーザのみフォーラム投稿通知を購読することができます。';
$string['subscribenone'] = 'このフォーラムのすべての人の購読を解除する';
$string['subscribers'] = '購読者';
$string['subscriberstowithcount'] = '「 {$a->name} 」 ({$a->count}) の購読者';
$string['subscribeshort'] = '購読';
$string['subscribestart'] = 'このフォーラムの新しい投稿を私にメール通知してください';
$string['subscribestop'] = 'このフォーラムの新しい投稿を私にメール通知しないでください';
$string['subscription'] = '購読';
$string['subscription_help'] = 'フォーラムを購読した場合、あなたが新しいフォーラム投稿の通知を受信することを意味します。通常、あなたは購読するかどうか選択することができますが、すべての人が通知を受信するよう購読が強制される場合もあります。';
$string['subscriptionauto'] = '自動購読';
$string['subscriptiondisabled'] = '購読停止';
$string['subscriptionforced'] = '強制購読';
$string['subscriptionmode'] = '購読モード';
$string['subscriptionmode_help'] = '参加者がフォーラムを購読する場合、フォーラムの投稿内容のコピーをメール受信することを意味します。

購読モードには以下4つのオプションがあります:

* 任意購読 - 参加者は購読するかどうか選択することができます。
* 強制購読 - すべての人が購読登録され、購読解除することはできません。
* 自動購読 - 最初にすべての人が購読登録されますが、いつでも購読解除することができます。
* 購読停止 - 購読は許可されません。';
$string['subscriptionoptional'] = '任意購読';
$string['subscriptions'] = '購読';
$string['substantive'] = '実質的な投稿';
$string['switchtoaccessible'] = 'アクセス可能なビューに切り替える';
$string['tagarea_hsuforum_posts'] = 'フォーラム投稿';
$string['tagsdeleted'] = 'フォーラムタグが削除されました。';
$string['thisforumisthrottled'] = 'このフォーラムでは期限内にあなたが投稿できる投稿数を制限しています - 現在 {$a->blockperiod} で {$a->blockafter} 回に設定されています。';
$string['thisisanonymous'] = 'このフォーラムは匿名です。';
$string['timedhidden'] = '時間制限ステータス: 学生から隠す';
$string['timedposts'] = '時間制限投稿';
$string['timedvisible'] = '時間制限ステータス: すべてのユーザに表示する';
$string['timestartenderror'] = '表示終了日を表示開始日より前にすることはできません。';
$string['toggle:bookmark'] = 'ブックマーク';
$string['toggle:subscribe'] = '購読';
$string['toggle:substantive'] = '実質的な投稿';
$string['toggled:bookmark'] = 'ブックマーク';
$string['toggled:subscribe'] = '購読';
$string['toggled:substantive'] = 'マーク付き実体';
$string['totaldiscussions'] = '投稿: {$a}';
$string['totalposts'] = '投稿数';
$string['totalpostsanddiscussions'] = '投稿数: {$a}';
$string['totalrating'] = '評価: {$a}';
$string['totalreplies'] = '返信: {$a}';
$string['totalsubstantive'] = '実質的な投稿数: {$a}';
$string['trackforum'] = '投稿を未読管理する';
$string['trackingoptions'] = 'トラッキングオプション';
$string['trackreadposts_header'] = '未読管理';
$string['tree'] = 'ツリー';
$string['unread'] = '未読';
$string['unreadposts'] = '未読の投稿';
$string['unreadpostsnumber'] = '未読件数 {$a}';
$string['unreadpostsone'] = '未読件数 1';
$string['unreadx'] = '未読: {$a}';
$string['unsubscribe'] = 'このフォーラムの購読を解除する';
$string['unsubscribeall'] = 'すべてのフォーラムの購読を解除する';
$string['unsubscribeallconfirm'] = '現在、あなたは {$a->forums} 件のフォーラムおよび {$a->discussions} 件のディスカッションを購読しています。本当にすべてのフォーラムおよびディスカッションの購読を解除してフォーラム自動購読を無効にしてもよろしいですか?';
$string['unsubscribealldone'] = 'すべてのフォーラムの購読が解除されました。まだ、あなたには購読が強制されているフォーラムから通知が送信されます。フォーラム通知を管理するにはマイプロファイル設定のメッセージングにアクセスしてください。';
$string['unsubscribeallempty'] = '申し訳ございません、あなたが購読しているフォーラムはありません。このサーバからのすべての通知を無効するにはマイプロファイル設定のメッセージングにアクセスしてください。';
$string['unsubscribed'] = '購読を解除しました。';
$string['unsubscribedisc'] = 'このディスカッションを購読しない';
$string['unsubscribediscussion'] = 'このディスカッションの購読を解除する';
$string['unsubscribediscussionlink'] = 'このディスカッションの購読を解除する: {$a}';
$string['unsubscribelink'] = 'このフォーラムから購読解除する: {$a}';
$string['unsubscribeshort'] = '購読解除';
$string['useadvancededitor'] = '高度なエディタと追加オプションを使用する';
$string['usermarksread'] = '投稿を手動で既読にする';
$string['viewalldiscussions'] = 'すべてのディスカッションを表示する';
$string['viewposters'] = 'ポスターを見る';
$string['viewthediscussion'] = 'このディスカッションを表示する';
$string['warnafter'] = '警告までの投稿閾値';
$string['warnafter_help'] = '指定された時間内に指定された投稿数以上を投稿した場合、学生に警告が表示されます。この設定では何件の投稿後に警告が表示されるか指定します。ケイパビリティ「mod/forum:postwithoutthrottling」が割り当てられたユーザは投稿制限から除外されます。';
$string['warnformorepost'] = '警告! このフォーラムには2件以上のディスカッションがあります - 直近のディスカッションを使用します。';
$string['xdiscussions'] = 'ディスカッション: {$a}件';
$string['xreplies'] = '返信: {$a}件';
$string['xunread'] = '新規: {$a}件';
$string['yournewquestion'] = 'あなたの新しい質問';
$string['yournewtopic'] = 'あなたの新しいディスカッショントピック';
$string['yourreply'] = 'あなたの返信';
