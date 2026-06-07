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
 * Strings for component 'newsletter', language 'ja', version '4.4'.
 *
 * @package     newsletter
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['AND'] = 'AND';
$string['OR'] = 'OR';
$string['aboprofilefield'] = 'ニュースレター購読のユーザプロファイルフィールド';
$string['aboprofilefield_help'] = 'ここであなたはニュースレター購読に使用するカスタムユーザプロファイルフィールドを選択できます。
チェックボックスタイプのユーザプロファイルフィールドのみ使用できます。これは「管理 -> ユーザ -> ユーザプロファイルフィールド」で作成できます。
設定完了後、登録時にニュースレターを購読するためにユーザはこのプロファイルフィールドを選択する必要があります。';
$string['account_already_confirmed'] = 'あなたのアカウントはすでに有効にされています。
ニュースレターに進むには次にアクセスしてください:  {$a->newsletterlink}';
$string['account_confirmed'] = '{$a->fullname} さん、{$a->sitename} にようこそ!

あなたのアカウント {$a->username} が有効にされました。
あなたのアカウント詳細を編集するには次にアクセスしてください: {$a->editlink}
ニュースレターに進むには次にアクセスしてください: {$a->newsletterlink}';
$string['allowguestusersubscriptions'] = 'ゲストユーザ購読を許可する';
$string['allowguestusersubscriptions_help'] = 'ゲストユーザがこのサイトでニュースレターを購読できるようにします。この場合、ユーザアカウントを作成する必要があります。';
$string['allusers'] = 'ユーザ数 (購読解除を含む):';
$string['already_published'] = 'この記事は配信されています。';
$string['attachments'] = '添付';
$string['attachments_help'] = 'あなたがこの記事に添付したいファイルをアップロードします。';
$string['attachments_no'] = 'アップロードされた添付はありません。';
$string['biggerthan'] = 'より大きい (数字)';
$string['calculateusers'] = 'フィルタ済み受信者数を計算する';
$string['cohortmanagement'] = 'コーホートを購読/購読解除する';
$string['cohortsavailable'] = '利用可能なコホート';
$string['config_activation_timeout_desc'] = 'メールで送信されるアクティベーションリンクの有効期間 (日数) を選択してください。';
$string['config_activation_timeout_label'] = 'アクティベーションリンクの有効期間';
$string['config_bounce_email'] = 'バウンスメールを受信するメールアドレスです。このアドレスがバウンスメールを処理するためだけに使用されることを確認してください。';
$string['config_bounce_enable'] = 'ニュースレターモジュールのバウンス処理を有効にする';
$string['config_bounceinfo'] = '次のページで説明されているようにMoodle VERPバウンスを設定できない場合のみニュースレターのバウンス処理を使用してください: https://docs.moodle.org/dev/Email_processing
<br /><br />
VERP Moodleメソッドはすべてのシステムで使用できるわけではありません。これはより簡単な代替方法ですが、ニュースレターモジュールでのみ動作します。設定を保存した後、{$a} でテストしてください。';
$string['config_bounceprocessing'] = 'バウンス処理設定: バウンスメールアドレスのためのメールボックスログインデータ提供してください。';
$string['config_debug_desc'] = 'ニュースレターcronジョブのデバッグ出力を有効にしたい場合、この設定を有効にしてください。';
$string['config_debug_label'] = 'Cronデバッグモード';
$string['config_host'] = 'メールホストサーバ (例: mail.yourserver.com)';
$string['config_password'] = 'メールボックスパスワード';
$string['config_port'] = 'あなたのメールボックスにアクセスするためのポートです。デフォルトは143ですが、一般的な選択として110 (pop3)、995(gmail) もあります。';
$string['config_send_notifications_desc'] = '購読者への購読関連通知送信を有効にしたい場合、この設定を有効にしてください。';
$string['config_send_notifications_label'] = '通知を送信する';
$string['config_sendinglimit'] = '実行ごとのメール制限';
$string['config_sendinglimit_desc'] = 'スパムを避けるため、cronが実行される度に送信するメール数を制限します。';
$string['config_service'] = '使用するサービス (imapまたはpop3)';
$string['config_service_option'] = 'サービスオプション (none, tls, notls, ssl)';
$string['config_username'] = 'メールボックスユーザ名';
$string['contains'] = '含む (テキスト)';
$string['containsnot'] = '含まない (テキスト)';
$string['create_new_issue'] = '新しい記事を作成する';
$string['default_stylesheet'] = 'デフォルトスタイルシート';
$string['delete_all_subscriptions'] = 'すべての購読を削除する';
$string['delete_issue'] = 'この記事を削除する';
$string['delete_issue_question'] = '本当にこの記事を削除してもよろしいですか?';
$string['delete_subscription_question'] = '本当にこの購読を削除してもよろしいですか?';
$string['duplicate_issue'] = 'この記事を複製する';
$string['duplicate_issue_title'] = 'ニュースレター記事を複製する';
$string['edit_issue'] = 'この記事を編集する';
$string['edit_issue_title'] = 'ニュースレター記事を編集する';
$string['edit_subscription_title'] = '購読を編集する';
$string['emailexists'] = 'このメールアドレスのユーザアカウントは既に存在します。ニュースレターを購読するにはログインしてください。あなたのログインを忘れた場合、ログインページの {$a} リンクを使用してログインを回復してください。';
$string['entries_per_page'] = '1ページあたりのエントリ数';
$string['equals'] = '正確にこの値 (テキストまたは数字)';
$string['equalsnot'] = '正確にこの値ではない (テキストまたは数字)';
$string['eventissuecreated'] = 'ニュースレター記事が作成されました。';
$string['eventissueviewed'] = 'ニュースレター記事が閲覧されました。';
$string['eventsubscriptioncreated'] = '新しいニュースレター購読';
$string['eventsubscriptiondeleted'] = 'ニュースレター購読が削除されました。';
$string['eventsubscriptionresubscribed'] = 'ニュースレターを再講読する';
$string['eventsubscriptionsviewed'] = 'ニュースレター購読が閲覧されました。';
$string['eventsubscriptionunsubscribed'] = 'ニュースレターが購読解除されました。';
$string['filteredusercount'] = '{$a} 名のユーザにニュースレターが送信されます。あなたが変更したい場合、下の「フィルタ済み受信者数を計算する」ボタンをクリックしてください。';
$string['filteredusers'] = 'フィルタ済みユーザ:';
$string['groupby'] = '記事をグループ分けする:';
$string['guestsubscribe'] = '今すぐ購読する';
$string['guestsubscriptionsuccess'] = 'あなたのメールが正常に登録されました。<br />購読を有効にするにはあなたのメールアカウント ({$a}) の受信箱を確認して確認リンクをクリックしてください。';
$string['header_actions'] = '操作';
$string['header_bounceratio'] = 'バウンス率';
$string['header_content'] = '記事コンテンツ';
$string['header_email'] = 'メールアドレス';
$string['header_filteruser'] = 'ユーザをフィルタする';
$string['header_filteruserinfo'] = '特定の値を持つユーザプロファイルフィールドの定義により、あなたはこのニュースレターの受信ユーザを制限できます。この値を持つユーザのみニュースレターを受信します。';
$string['header_health'] = 'ステータス (配信済み/バウンス)';
$string['header_name'] = '氏名';
$string['header_profilefield'] = 'サインアップ用プロファイルフィールド';
$string['header_publish'] = '配信オプション';
$string['header_publishinfo'] = 'ニュースレター記事の配信開始後、発行日は変更できなくなります。';
$string['header_subscriberid'] = '購読担当';
$string['header_timestatuschanged'] = '最終ステータス変更';
$string['header_timesubscribed'] = '購読日';
$string['header_unsubscriberid'] = '購読解除担当';
$string['health_0'] = 'アクティブ';
$string['health_1'] = '問題あり';
$string['health_2'] = 'ブラックリスト登録済み';
$string['health_4'] = '購読解除済み';
$string['inarray'] = 'ユーザはカンマで区切られた値のいずれかを持つ';
$string['isempty'] = 'フィールドが空である';
$string['isnotempty'] = 'フィールドが空ではない';
$string['issue_htmlcontent'] = 'HTMLコンテンツ';
$string['issue_stylesheet'] = 'HTMLコンテンツのスタイルシートファイル';
$string['issue_title'] = '記事タイトル';
$string['issue_title_help'] = 'この記事のタイトルを入力してください。このフィールドは必須です。';
$string['lowerthan'] = 'より小さい (数字)';
$string['manage_subscriptions'] = '購読を管理する';
$string['mode_group_by_month'] = '月でグループ分けする';
$string['mode_group_by_week'] = '週でグループ分けする';
$string['mode_group_by_year'] = '年でグループ分けする';
$string['modulename'] = 'ニュースレター';
$string['modulename_help'] = 'ニュースレターモジュールはメールでのニュースレター配信を可能にします。';
$string['modulenameplural'] = 'ニュースレター';
$string['newsletter'] = 'ニュースレター';
$string['newsletter:addinstance'] = 'ニュースレターを追加する';
$string['newsletter:createissue'] = 'ニュースレター記事を作成する';
$string['newsletter:deleteissue'] = 'ニュースレター記事を削除する';
$string['newsletter:deletesubscription'] = 'ニュースレター購読を削除する';
$string['newsletter:duplicateissue'] = 'ニュースレター記事を複製する';
$string['newsletter:editissue'] = 'ニュースレター記事を編集する';
$string['newsletter:editsubscription'] = 'ニュースレター購読を編集する';
$string['newsletter:manageownsubscription'] = '私のニュースレター購読を管理する';
$string['newsletter:managesubscriptions'] = 'ニュースレター購読を管理する';
$string['newsletter:publishissue'] = 'ニュースレター記事を配信する';
$string['newsletter:readissue'] = 'ニュースレター記事を読む';
$string['newsletter:subscribecohort'] = 'コホートをニュースレターに購読登録する';
$string['newsletter:subscribeuser'] = 'ユーザをニュースレターに購読登録する';
$string['newsletter:unsubscribecohort'] = 'コホートをニュースレターから購読解除する';
$string['newsletter:viewnewsletter'] = 'ニュースレターインスタンスを表示する';
$string['newsletterintro'] = '説明';
$string['newslettername'] = '名称';
$string['newslettername_help'] = 'これはニュースレターフィールドに関連するヘルプツールチップのコンテンツです。Markdown構文がサポートされます。';
$string['no_issues'] = 'このニュースレターはまだ発行されていません。';
$string['nofieldselected'] = 'ユーザプロファイルフィールドが選択されていません。';
$string['nofilter'] = 'フィルタを使用しない';
$string['notinarray'] = 'ユーザはカンマで区切られた値のいずれも持たない';
$string['page_first'] = '最初へ';
$string['page_last'] = '最後へ';
$string['page_next'] = '次へ';
$string['page_previous'] = '前へ';
$string['pluginadministration'] = 'ニュースレター管理';
$string['pluginname'] = 'ニュースレター';
$string['privacy:metadata:newsletter_bounces'] = '私たちがサーバからバウンスを受信したニュースレターです。';
$string['privacy:metadata:newsletter_bounces:issueid'] = 'バウンスされたニュースレターです。';
$string['privacy:metadata:newsletter_bounces:statuscode'] = '私たちが受信したステータスコードです。';
$string['privacy:metadata:newsletter_bounces:timecreated'] = '私たちのエントリ作成時のタイムスタンプです。';
$string['privacy:metadata:newsletter_bounces:timereceived'] = '私たちのバウンス受信時のタイムスタンプです。';
$string['privacy:metadata:newsletter_bounces:type'] = '私たちが受信したタイプです。';
$string['privacy:metadata:newsletter_bounces:userid'] = 'レコードを作成したユーザです。';
$string['privacy:metadata:newsletter_deliveries'] = '私たちがユーザに送信したニュースレターです。';
$string['privacy:metadata:newsletter_deliveries:delivered'] = 'ニュースレター配信時のタイムスタンプです。';
$string['privacy:metadata:newsletter_deliveries:issueid'] = '私たちが送信した記事のIDです。';
$string['privacy:metadata:newsletter_deliveries:newsletterid'] = '私たちが送信したニュースレターのIDです。';
$string['privacy:metadata:newsletter_deliveries:userid'] = 'ニュースレターを受信した人です。';
$string['privacy:metadata:newsletter_subscriptions'] = 'ニュースレーターの購読です。';
$string['privacy:metadata:newsletter_subscriptions:health'] = 'エラー発生時に保存する購読の状態です。';
$string['privacy:metadata:newsletter_subscriptions:newsletterid'] = '購読済みニュースレターのIDです。';
$string['privacy:metadata:newsletter_subscriptions:sentnewsletters'] = 'すでに送信されたニュースレター数です。';
$string['privacy:metadata:newsletter_subscriptions:subscriberid'] = '購読したユーザのIDです。';
$string['privacy:metadata:newsletter_subscriptions:timestatuschanged'] = '最終変更のタイムスタンプです。';
$string['privacy:metadata:newsletter_subscriptions:timesubscribed'] = '購読時のタイムスタンプです。';
$string['privacy:metadata:newsletter_subscriptions:unsubscriberid'] = '購読解除したユーザのIDです。';
$string['privacy:metadata:newsletter_subscriptions:userid'] = 'レコードを作成したユーザのIDです。';
$string['process_bounces'] = 'バウンスメール処理';
$string['publish_in'] = '{$a->days} 日 {$a->hours} 時間 {$a->minutes} 分 {$a->seconds} 秒後に配信予定です。';
$string['publishon'] = '配信予定日時';
$string['readonline'] = 'ウェブバージョンを表示する';
$string['redirect_Message'] = 'あなたのテキストエディタをTinyMCEエディタに変更してください。';
$string['resubscribe'] = '再講読を確定する';
$string['resubscribe_btn'] = '確定';
$string['resubscribe_text'] = 'あなたはこのニュースレターを購読解除しました。本当に再度講読しますか?';
$string['resubscriptionsuccess'] = 'あなたは正常に再講読しました。';
$string['search:newsletterissue'] = 'ニュースレター記事';
$string['send_newsletter'] = 'ニュースレターを送信する';
$string['stylesheets'] = 'ニュースレタースタイルシートをアップロードする';
$string['stylesheets_help'] = 'このニュースレター記事のスタイルシートとなるCSSファイルをアップロードしてください。あなたは複数スタイルシートをアップロードできます。スタイルシートは新しい記事の作成時に選択できます。モジュールには少なくとも1つのすぐに使用できるスタイルシートファイルが付属しているため、このフィールドは任意です。';
$string['sub_mode_forced'] = '強制';
$string['sub_mode_opt_in'] = 'オプトイン';
$string['sub_mode_opt_out'] = 'オプトアウト';
$string['subscribe'] = '購読';
$string['subscribe_question'] = 'ニュースレター「 {$a->name} 」をメールアドレス「 {$a->email} 」で購読しますか?';
$string['subscribedusers'] = '購読済みユーザ';
$string['subscribedusersmatching'] = '合致する購読ユーザ ({$a})';
$string['subscribercandidates'] = '潜在的な購読者';
$string['subscribercandidatesmatching'] = '合致するユーザ ({$a})';
$string['subscription_message'] = 'こんにちは {$a->fullname} さん

あなたはこのメールアドレスで「 {$a->sitename} 」の「 {$a->newslettername} 」ニュースレター購読をリクエストしました。

以下のリンクをクリックしてあなたの購読を確定してください:

{$a->link}

あなたは以下の認証情報でいつでも設定を変更できます:

ユーザ名: {$a->username}
パスワード: {$a->password}

サポートが必要な場合、サイト管理者にご連絡ください: {$a->admin}';
$string['subscription_mode'] = '購読モード';
$string['subscription_mode_help'] = '登録されたユーザがこのニュースレターを自動的に購読 (オプトアウト) するか、手動で購読 (オプトイン) するか選択してください。警告! オプトアウトを選択した場合、登録されているすべてのユーザが自動的に購読登録されます!';
$string['toc'] = '目次の自動生成方法を選択する';
$string['toc_header'] = '目次';
$string['toc_help'] = 'これは含める見出しレベルの数です。例: 3つの異なる見出しレベル (h1、h2、h3) のニュースレターがあるとします。その場合、あなたは最も重要な見出しのみを目次に使用できます。次に見出しレベルを1つだけ選択します。あなたがh2も目次に含めたい場合、2つのレベルを選択してください。';
$string['toc_no'] = '目次を自動生成しない';
$string['toc_yes'] = '{$a} ヘッドラインレベルを使用する';
$string['unsubscribe'] = '購読解除';
$string['unsubscribe_link_text'] = '購読解除するにはここをクリックする';
$string['unsubscribe_mail_subj'] = 'あなたは正常にニュースレターから購読解除しました。';
$string['unsubscribe_mail_text'] = '<p>
 {$a->lastname} {$a->firstname} さん
<br />
あなたは正常にニュースレター {$a->newslettertitle} を購読解除しました。あなたが故意に購読解除した場合、これ以上何もすることはありません。あなたが間違って購読解除してしまった場合、次のリンクで再度講読できます:
<br />
{$a->newsletterurl}</p>';
$string['unsubscribe_nounsub'] = 'ディストリビュータ';
$string['unsubscribe_nounsub_text'] = '購読解除リンクを送信しません。';
$string['unsubscribe_question'] = 'あなたのメールアドレス「 {$a->email} 」をニュースレター「 {$a->name} 」から購読解除しますか?';
$string['unsubscribedinfo'] = '(!) がマークされたユーザは配信停止中です。';
$string['unsubscription_succesful'] = 'あなたのメールアドレス「 {$a->email} 」は次のニュースレターから正常に削除されました: {$a->name}';
$string['userprofilefield_addcondition'] = '別の条件を追加する';
$string['userprofilefield_field'] = 'ユーザプロファイルフィールド';
$string['userprofilefield_operator'] = '演算子';
$string['userprofilefield_value'] = '値';
$string['welcomemessage'] = 'ウェルカムメッセージ';
$string['welcomemessage_help'] = 'このテキストはニュースレターに正常に登録できたユーザに表示されます。';
$string['welcomemessageguestuser'] = 'ゲストユーザへのウェルカムメッセージ';
$string['welcomemessageguestuser_help'] = 'このテキストはニュースレターのゲストユーザとして登録成功した新しいユーザに表示されます。';
$string['welcomeredirect'] = 'ようこそ! あなたはまもなくログインページに移動します。';
$string['welcometonewsletter'] = 'ニュースレターにようこそ';
$string['welcometonewsletter_guestsubscription'] = 'ニュースレターにようこそ!<br />あなたはログイン後に購読解除ボタンをクリックするか、毎号のニュースレターに記載されている購読解除リンクをクリックしていつでも購読解除できます。';
