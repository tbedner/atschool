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
 * Strings for component 'plagiarism_turnitinsim', language 'ja', version '4.4'.
 *
 * @package     plagiarism_turnitinsim
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessoptions'] = '受講生のアクセス';
$string['accessoptions_help'] = '受講生は、提出物の類似性レポートが生成された後、類似性レポートにアクセスすることができます。';
$string['accessstudents'] = '受講生による類似性レポートの閲覧を許可する';
$string['addtoindex'] = 'すべての提出物をインデックス';
$string['code'] = 'コード';
$string['connecttest'] = 'Turnitin 接続をテスト';
$string['connecttestfailed'] = '接続テストが失敗しました。';
$string['connecttestsuccess'] = '接続テスト成功';
$string['dbexport'] = 'データベースのエクスポート';
$string['dbexporttable'] = '{$a} データをエクスポート';
$string['defaultsettings'] = 'デフォルト設定';
$string['errorenabledfeatures'] = '有効な機能のリストを取得できませんでした。';
$string['errorgettingsubmissioninfo'] = '提出物情報の取得を試行中にエラーが発生しました。';
$string['errorprocessingdeletedsubmission'] = 'この提出物は削除された課題のもので、処理することはできません。';
$string['errortoolarge'] = 'このファイルは許容最大サイズ{$a}を超えているため、Turnitin には送信されません';
$string['eulaaccept'] = 'Turnitin EULA に同意します';
$string['eulaaccepted'] = '新しい Turnitin EULA に同意いただきありがとうございます。今後提出物はすべて Turnitin に送信されて処理されます。';
$string['eulaalreadyaccepted'] = 'すでに最新の Turnitin EULA に同意済みです。';
$string['euladecline'] = 'Turnitin EULA に同意しません';
$string['euladeclined'] = 'Turnitin エンドユーザー ライセンス合意書に同意していないため、提出物を Turnitin に送信できません';
$string['eulaheader'] = 'Turnitin エンド ユーザー ライセンス合意書';
$string['eulalink'] = 'この提出物を Turnitin に送信するには、<a href="{$a}" target="_blank">Turnitin エンドユーザー ライセンス合意書</a>に同意する必要があります。';
$string['eulalinkgeneric'] = '今後提出物を Turnitin に送信したい場合、 <a href="{$a}" target="_blank">Turnitin エンドユーザー ライセンス合意書</a>に同意する必要があります。';
$string['eulalinkmodal'] = 'この提出物を Turnitin に送信するには、 <a href="#" class="eula_link">Turnitin エンドユーザー ライセンス合意書</a>に同意する必要があります。';
$string['eulanotrequired'] = 'Turnitin EULA に同意する必要はありません。';
$string['excludebiblio'] = 'ビブリオグラフィー';
$string['excludeoptions'] = '類似性レポートから除外';
$string['excludeoptions_help'] = '選択したオプションは、類似性レポートでは一致としては表示されません。';
$string['excludequotes'] = '引用文';
$string['faultcode'] = 'エラーコード';
$string['getwebhookfailure:message'] = 'Turnitin で剽窃プラグインに登録した webhook に問題が発生した可能性があります。チェックを行うスケジュール済みタスクが Turnitin に接続できませんでした。ログをご確認ください。';
$string['getwebhookfailure:subject'] = 'Turnitin webhook チェック失敗';
$string['indexoptions'] = '提出物のインデックス';
$string['indexoptions_help'] = 'インデックス済みの提出物は、類似性レポートでの比較に使用することができます。';
$string['invalidtablename'] = '表 {$a} をエクスポートできませんでした';
$string['line'] = '行';
$string['message'] = 'メッセージ';
$string['messageprovider:digital_receipt_instructor'] = 'Turnitin インストラクタ デジタル受領書';
$string['messageprovider:digital_receipt_student'] = 'Turnitin 受講生デジタル受領書';
$string['messageprovider:get_webhook_failure'] = 'Turnitin webhook チェック失敗';
$string['messageprovider:new_eula'] = 'Turnitin の新 EULA リリース';
$string['neweula:message'] = 'Turnitin は新しい EULA をリリースしました。詳細は、 <a href="{$a}">here</a>をクリックしてご覧ください。';
$string['neweula:subject'] = 'Turnitin の新 EULA がリリースされました';
$string['pluginname'] = 'Turnitin インテグリティ プラグイン';
$string['pluginsetup'] = '設定';
$string['privacy:metadata:plagiarism_turnitinsim_client'] = 'Turnitin への提出を正常に行うためには、Moodle と Turnitin の間で特定のユーザー データをやり取りする必要があります。Moodle プラグインおよび GDPR に関する詳細は、以下でご確認ください：https://help.turnitin.com/feedback-studio/moodle/moodle-plugins-and-gdpr.htm';
$string['privacy:metadata:plagiarism_turnitinsim_client:firstname'] = 'Turnitin Viewer（Turnitinビューワ）を起動すると、ユーザーを特定するためにユーザーの名前が Turnitin に送信されます。';
$string['privacy:metadata:plagiarism_turnitinsim_client:lastname'] = 'Turnitin Viewer（Turnitin ビューワ）を起動すると、ユーザーを特定するためにユーザーの名字が Turnitin に送信されます。';
$string['privacy:metadata:plagiarism_turnitinsim_client:submission_content'] = 'ファイル/提出物のコンテンツは、Turnitin に送信されて処理されることにご注意ください。';
$string['privacy:metadata:plagiarism_turnitinsim_client:submission_filename'] = '提出したファイルの名前は Turntin に送信されるため、特定可能です。';
$string['privacy:metadata:plagiarism_turnitinsim_client:submission_title'] = '提出物のタイトルが Turntin に送信されるため、特定可能です。';
$string['privacy:metadata:plagiarism_turnitinsim_sub'] = 'Moodle 提出を Turnitin 提出にリンクする情報。';
$string['privacy:metadata:plagiarism_turnitinsim_sub:identifier'] = 'Moodle が提出されたファイルの特定に使用するハッシュ。';
$string['privacy:metadata:plagiarism_turnitinsim_sub:itemid'] = '関連するモジュールの種類の提出を特定するID。';
$string['privacy:metadata:plagiarism_turnitinsim_sub:overallscore'] = '提出物の合計類似性スコア。';
$string['privacy:metadata:plagiarism_turnitinsim_sub:submittedtime'] = 'ユーザーの提出物が Turnitin に送信された時間を示すタイムスタンプ。';
$string['privacy:metadata:plagiarism_turnitinsim_sub:turnitinid'] = '提出物を参照するために Turnitin が使用する ID。';
$string['privacy:metadata:plagiarism_turnitinsim_sub:userid'] = '提出したユーザーの ID。';
$string['privacy:metadata:plagiarism_turnitinsim_users'] = 'Moodle ユーザーを Turnitin ユーザーにリンクする情報。';
$string['privacy:metadata:plagiarism_turnitinsim_users:lasteulaaccepted'] = 'ユーザーが同意した Turnitin EULA の最後のバージョン。';
$string['privacy:metadata:plagiarism_turnitinsim_users:lasteulaacceptedlang'] = 'ユーザーが Turnitin EULA に最後に同意した際の言語。';
$string['privacy:metadata:plagiarism_turnitinsim_users:lasteulaacceptedtime'] = 'ユーザーの Turnitin EULA への最終同意日時を示すタイムスタンプ。';
$string['privacy:metadata:plagiarism_turnitinsim_users:turnitinid'] = 'ユーザーを参照するために Turnitin が使用する ID。';
$string['privacy:metadata:plagiarism_turnitinsim_users:userid'] = '提出したユーザーの ID。';
$string['queuedrafts'] = '原稿提出を処理';
$string['queuedrafts_help'] = '原稿の提出は、Turnitin ではチェックのためのインデックス付けは行われません';
$string['receiptsinstructor:message'] = '<strong>{$a->submission_title}</strong>というタイトルの提出物（モジュール<strong>{$a->module_name}</strong>、クラス <strong>{$a->course_fullname}</strong> ）が、Turnitin に送信されました。<br /><br />提出 ID： <strong>{$a->submission_id}</strong><br />提出日： <strong>{$a->submission_date}</strong>';
$string['receiptsinstructor:subject'] = 'Turnitin に送信済みの提出物';
$string['receiptstudent:message'] = '{$a->firstname} {$a->lastname}様、<br /><br />ファイル<strong>{$a->submission_title}</strong>（モジュール<strong>{$a->module_name}</strong>、クラス <strong>{$a->course_fullname}</strong>）は、 <strong>{$a->submission_date}</strong>に Turnitin に提出されました。提出 ID は <strong>{$a->submission_id}</strong>です。<br /><br />Turnitin をご利用いただき、誠にありがとうございました。<br /><br />Turnitin チーム';
$string['receiptstudent:subject'] = 'これは、Turnitin デジタル受領書です';
$string['reportgen0'] = '即時';
$string['reportgen1'] = '即時および提出期限日に再生成';
$string['reportgen2'] = '提出期限日';
$string['reportgenoptions'] = '類似性レポートの作成';
$string['reportgenoptions_help'] = '<strong>即時：</strong>ファイルの提出後すぐに類似性レポートが生成されます。<br/><br/><strong>提出期限日：</strong> 課題の提出期限日に類似性レポートが生成されます。<br/><br/><strong>即時および提出期限日：</strong> ファイルの提出後すぐに類似性レポートが生成されます。課題の提出期限日に類似性レポートが再び生成されます。このオプションは、クラス内での共謀の確認に使用することができます。';
$string['resubmittoturnitin'] = 'Turnitin に再提出';
$string['savesuccess'] = '変更が保存されました';
$string['settingslearnmore'] = 'Turnitin 設定に関する詳細';
$string['submissiondisplayerror:cannotextracttext'] = 'レポートは利用できません';
$string['submissiondisplayerror:cannotextracttext_help'] = 'この提出物のレポートを生成できませんでした。このファイルの種類のレポートを生成できないか、またはテキストが少なすぎるためである可能性があります。';
$string['submissiondisplayerror:corruptfile'] = '破損したファイル';
$string['submissiondisplayerror:corruptfile_help'] = 'アップロードしたファイルは破損しているようです。';
$string['submissiondisplayerror:eulanotaccepted'] = 'EULA に同意していない';
$string['submissiondisplayerror:eulanotaccepted_help'] = '提出物の類似性チェックを行う前に、提出者は Turnitin EULA に同意する必要があります。';
$string['submissiondisplayerror:filelocked'] = 'ファイルがロックされています';
$string['submissiondisplayerror:filelocked_help'] = 'アップロードされたファイルを開くには、パスワードが必要です。';
$string['submissiondisplayerror:generic'] = 'ファイルは Turnitin に送信されませんでした';
$string['submissiondisplayerror:generic_help'] = 'このファイルは Turnitin に送信されませんでした。システム管理者にお問い合わせください';
$string['submissiondisplayerror:notsent'] = 'ファイルは Turnitin に送信されませんでした';
$string['submissiondisplayerror:notsent_help'] = '提出時に Turnitin が有効でなかったため、このファイルは Turnitin に送信されませんでした。Turnitin に送信したい場合、提出物を変更するか、または再びアップロードしてください。';
$string['submissiondisplayerror:processingerror'] = 'エラー処理中';
$string['submissiondisplayerror:processingerror_help'] = '提出物の処理中に、詳細不明のエラーが発生しました。';
$string['submissiondisplayerror:toolarge'] = 'ファイルが大きすぎます';
$string['submissiondisplayerror:toolarge_help'] = 'このファイルは大きすぎるため、Turnitin に送信できません。オリジナリティチェックを行うには、サイズが100MB以下のファイルを提出してください。';
$string['submissiondisplayerror:toolittletext'] = 'テキストが少なすぎます';
$string['submissiondisplayerror:toolittletext_help'] = '類似性レポートを生成するには、提出物のテキストが十分ではありません（提出物には20ワード以上が含まれている必要があります）';
$string['submissiondisplayerror:toomanypages'] = 'ページが多すぎます';
$string['submissiondisplayerror:toomanypages_help'] = '類似性レポートを生成するには、提出物のページが多すぎます（提出物は400ページ以上にすることはできません）';
$string['submissiondisplayerror:toomuchtext'] = 'テキストが多すぎます';
$string['submissiondisplayerror:toomuchtext_help'] = '類似性レポートを生成するには、提出物のテキストが多すぎます（展開されたテキストがUTF-8に変換された後、提出物のテキストは{$a}以内である必要があります）';
$string['submissiondisplayerror:unknown'] = '提出物のエラー';
$string['submissiondisplayerror:unknown_help'] = '提出に不明なエラーが発生し、このファイルは Turnitin に送信されませんでした。システム管理者にお問い合わせください';
$string['submissiondisplayerror:unsupportedfiletype'] = 'サポートされないファイルの種類';
$string['submissiondisplayerror:unsupportedfiletype_help'] = 'アップロードされたファイルの種類はサポートされていません。';
$string['submissiondisplaystatus:awaitingeula'] = 'EULA 待機中';
$string['submissiondisplaystatus:cannotextracttext'] = 'レポートは利用できません';
$string['submissiondisplaystatus:error'] = 'エラー';
$string['submissiondisplaystatus:notsent'] = '未送信';
$string['submissiondisplaystatus:pending'] = '保留中';
$string['submissiondisplaystatus:queued'] = 'キュー';
$string['submissiondisplaystatus:unknown'] = '不明なエラー';
$string['taskadminupdate'] = 'Turnitin インテグリティ プラグインのローカル設定を更新';
$string['taskgetreportscores'] = 'Turnitin インテグリティ プラグインのレポート スコアを取得';
$string['taskoutputenabledfeaturesnotretrieved'] = 'Turnitin の有効な機能を取得できませんでした';
$string['taskoutputenabledfeaturesretrievalfailure'] = 'Turnitin の有効な機能の呼び出しに失敗しました';
$string['taskoutputenabledfeaturesretrieved'] = 'Turnitin の有効な機能を取得しました';
$string['taskoutputfailedconnection'] = 'Turnitin API への接続中に問題が発生しました';
$string['taskoutputfailedcvlaunchurl'] = 'TurnitinからのAPI 提出物ID： {$a}のTurnitin Viewer（Turnitinビューワ）URL のリクエスト中に問題が発生しました';
$string['taskoutputfailedreportrequest'] = 'Turnitin API からの提出 ID： {$a}のオリジナリティレポート生成のリクエスト中に問題が発生しました。';
$string['taskoutputfailedscorerequest'] = 'Turnitin API からの提出 ID：{$a} のオリジナリティ レポート スコアのリクエスト中に問題が発生しました';
$string['taskoutputfailedupload'] = '提出 ID：{$a}の Turnitin API へのファイルのアップロード中に問題が発生しました。';
$string['taskoutputfileuploaded'] = 'Turnitin 提出にアップロードされたファイル： {$a}';
$string['taskoutputlatesteulanotretrieved'] = '最新の EULA バージョンを取得できませんでした';
$string['taskoutputlatesteularetrievalfailure'] = '最新の EULA バージョンの呼び出しに失敗しました。';
$string['taskoutputlatesteularetrieved'] = 'EULA バージョン {$a} を取得しました。';
$string['taskoutputpluginnotconfigured'] = 'Turnitin インテグリティ プラグインが設定されていないため、{$a}へのタスクを実行できませんでした。<br/>サイト管理のプラグイン設定ページを開き、 Turnitin API 認証情報を追加してください。';
$string['taskoutputsubmissioncreated'] = 'Turnitin で提出物が作成されました： {$a}';
$string['taskoutputsubmissionnotcreatedeula'] = '提出者が EULA に同意していないため、提出物を Turnitin で作成できませんでした。';
$string['taskoutputsubmissionnotcreatedgeneral'] = 'Turnitin で提出物を作成することができませんでした。ログを参照してください。';
$string['taskoutputwebhookcreated'] = 'Webhook が作成されました。 Turnitin は {$a} にコールバックを送信します';
$string['taskoutputwebhookcreationfailure'] = 'Webhook 作成リクエストに失敗しました。ログをご確認ください。';
$string['taskoutputwebhookdeleted'] = 'Webhook {$a} は削除されました。';
$string['taskoutputwebhookdeletefailure'] = 'Webhook を削除できませんでした。ログを参照してください。';
$string['taskoutputwebhooknotcreated'] = 'Webhook を作成することができませんでした。ログを参照してください。';
$string['taskoutputwebhooknotdeleted'] = 'Webhook {$a} を削除できませんでした。';
$string['taskoutputwebhooknotretrieved'] = 'Webhook {$a}を取得できませんでした。新しい webhook が作成されます';
$string['taskoutputwebhookretrievalfailure'] = 'Webhook {$a} 取得呼び出しに失敗しました。';
$string['taskoutputwebhookretrieved'] = 'Webhook {$a}を取得しました。 Webhook はアクティブです。';
$string['tasksendqueuedsubmissions'] = 'Turnitin インテグリティ プラグインからキュー ファイルを送信';
$string['turnitinapikey'] = 'Turnitin API キー';
$string['turnitinapiurl'] = 'Turnitin API URL';
$string['turnitinconfig'] = 'プラグイン設定';
$string['turnitinenablelogging'] = '診断モードを有効にする';
$string['turnitinenableremotelogging'] = 'Turnitin にログを送信';
$string['turnitinenableremotelogging_help'] = '診断目的で、ログが Turnitin に自動で送信されます。プライベート データは送信されません。必要に応じて当社が迅速にサポートを提供できるようこの設定を有効のままにしておくことをお勧めします。Moodle 環境では、Turnitin に手動で送信するログが見つかる場合があります。';
$string['turnitinfeatures'] = 'Turnitin インテグリティ機能';
$string['turnitinfeatures::eulanotrequired'] = 'ユーザーによる Turnitin EULA への同意は要求されていません';
$string['turnitinfeatures::eularequired'] = 'すべてのユーザーが Turnitin EULA に同意する必要があります';
$string['turnitinfeatures::header'] = 'Turnitin インテグリティ機能';
$string['turnitinfeatures::moreinfo'] = 'Turnitin の有効な機能およびパッケージに関する詳細な情報は、 <a href="http://www.turnitin.com" target="_blank">http://www.turnitin.com</a>からご確認ください。';
$string['turnitinfeatures::repositories'] = 'チェック参照先リポジトリ：';
$string['turnitinfeatures::viewoptions'] = 'Turnitin Viewer（Turnitinビューワ）オプション：';
$string['turnitinhideidentity'] = 'Turnitin で受講生IDを非表示';
$string['turnitinmodenabled'] = '{$a} の Turnitin インテグリティを有効にする';
$string['turnitinpluginenabled'] = 'Turnitin を有効にする';
$string['turnitinpluginsettings'] = 'Turnitin インテグリティ プラグイン設定';
$string['turnitinsim'] = 'Turnitin インテグリティ プラグイン';
$string['turnitinsim:enable'] = 'Turnitin インテグリティを有効にする';
$string['turnitinsim:viewfullreport'] = 'オリジナリティーレポートを表示';
$string['turnitinsiminternet'] = 'インターネット コンテンツと比較して確認';
$string['turnitinsimprivate'] = 'プライベート コンテンツと比較して確認';
$string['turnitinviewermatchsubinfo'] = '機関のインストラクタが内部一致の提出物情報を閲覧するのを許可する';
$string['turnitinviewersavechanges'] = 'ビューワ変更を保存';
$string['turnitinviewerviewfullsource'] = '機関内のインストラクタが提出物のフルテキストを表示して内部一致を確認するのを許可する';
$string['viewapilog'] = '{$a} から API ログを表示';
$string['viewerpermissionferpa'] = '以下の許可は、お客様の機関内でデータを共有する方法に影響します。このデータはお客様の機関が独占的に責任を有しており、これらの許可を設定する場合、受講生の記録に関する機関のポリシーに完全に準拠しているかどうかをご検討ください。';
$string['viewerpermissionoptions'] = 'ビューワ許可';
$string['viewlogs'] = 'ログ';
$string['webhook_description'] = '{$a}の Webhook';
$string['webhookincorrectsignature'] = '署名が正しくないため、Webhook コールバックに失敗しました';
