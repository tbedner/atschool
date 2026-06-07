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
 * Strings for component 'local_nolej', language 'ja', version '4.4'.
 *
 * @package     local_nolej
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abstract'] = '要旨';
$string['action_activities_ko'] = '活動生成失敗';
$string['action_activities_ko_body'] = '残念ですが、ドキュメント「 {$a->title} 」の活動生成は {$a->tstamp} に失敗しました。エラーメッセージは次のとおりです: {$a->errormessage}';
$string['action_activities_ok'] = '活動が正常に生成されました。';
$string['action_activities_ok_body'] = 'ドキュメント「 {$a->title} 」の活動生成が {$a->tstamp} に完了しました。';
$string['action_analysis_ko'] = '分析失敗';
$string['action_analysis_ko_body'] = '残念ですが、ドキュメント「 {$a->title} 」の分析は {$a->tstamp} に失敗しました。エラーメッセージは次のとおりです: {$a->errormessage}';
$string['action_analysis_ok'] = '分析準備完了';
$string['action_analysis_ok_body'] = 'ドキュメント「 {$a->title} 」の分析が {$a->tstamp} に完了しました。あなたは内容をレビューできます。';
$string['action_transcription_ko'] = 'トランスクリプション失敗';
$string['action_transcription_ko_body'] = '残念ですが、ドキュメント「 {$a->title} 」のトランスクリプションは {$a->tstamp} に失敗しました。エラーメッセージは次のとおりです: {$a->errormessage}';
$string['action_transcription_ok'] = 'トランスクリプション準備完了';
$string['action_transcription_ok_body'] = 'ドキュメント「 {$a->title} 」のトランスクリプションが {$a->tstamp} に完了しました。あなたは内容を確認して分析を開始できます。';
$string['activities'] = 'プレビュー';
$string['activitiescrossword'] = 'クロスワード';
$string['activitiescrosswordshort'] = 'クロスワード';
$string['activitiescwwords'] = 'クロスワード活動で使用する単語数を定義します。';
$string['activitiesdragtheword'] = 'ドラッグワード';
$string['activitiesdragthewordshort'] = 'ドラッグワード';
$string['activitiesdtwwords'] = 'ドラッグワード活動で使用するワード数を定義します。';
$string['activitiesenable'] = '{$a} を生成する';
$string['activitiesfindtheword'] = 'ファインドワード';
$string['activitiesfindthewordshort'] = 'ファインドワード';
$string['activitiesflashcardsflashcards'] = 'コンセプチュアル評価活動に表示されるフラッシュカード数を定義します。';
$string['activitiesftwwords'] = 'ファインドワード活動で使用するワード数を定義します。';
$string['activitiesglossary'] = '用語集';
$string['activitiesglossaryshort'] = '用語集';
$string['activitiesgrade'] = 'コンセプチュアル評価';
$string['activitiesgradeq'] = 'コンテクスチュアル評価';
$string['activitiesgradeqquestions'] = 'コンテクスチュアル評価活動に表示する問題数を定義します。';
$string['activitiesgradeqshort'] = 'コンテクスチュアル評価';
$string['activitiesgradequestions'] = 'コンセプチュアル評価活動に表示する問題数を定義します。';
$string['activitiesgradeshort'] = '小テスト';
$string['activitieshoquestions'] = '推奨活動';
$string['activitieshoquestionsshort'] = '活動';
$string['activitiesibook'] = 'インタラクティブブック';
$string['activitiesibookshort'] = 'iブック';
$string['activitiesivideo'] = 'インタラクティブビデオ';
$string['activitiesivideoquestions'] = 'インタラクティブビデオ活動において、1セットあたりいくつの問題を提示するか定義します。2つのセットがあります: 1つはビデオの途中、もう1つはビデオの最後です。';
$string['activitiesivideoshort'] = 'iビデオ';
$string['activitiesivideosummary'] = '概要をインタラクティブビデオ活動の最後に追加するかどうか定義します。';
$string['activitiespractice'] = 'コンセプチュアルフラッシュカード';
$string['activitiespracticeflashcards'] = 'コンセプチュアルフラッシュカード活動に表示される問題数を定義します。';
$string['activitiespracticeq'] = 'コンテクスチュアルフラッシュカード';
$string['activitiespracticeqflashcards'] = 'コンテクスチュアルフラッシュカード活動に表示される問題数を定義します。';
$string['activitiespracticeqshort'] = 'コンテクストカード';
$string['activitiespracticeshort'] = 'コンセプトカード';
$string['activitiesselect'] = '活動を選択する';
$string['activitiesselected'] = 'Nolej活動: %s (モジュール: %s)';
$string['activitiessummary'] = '概要';
$string['activitiessummaryshort'] = '概要';
$string['activitiesuseinibook'] = 'この活動をインタラクティブブックで使用する';
$string['analysisconfirm'] = '警告: 分析を進める前にトランスクリプションを十分に確認しましたか? 分析が開始された場合、修正できません。続ける前に正確さを確認してください。';
$string['analysisstart'] = '分析が開始されました。分析完了後、あなたに通知が届きます。';
$string['analyze'] = '分析を開始する';
$string['apikey'] = 'APIキー';
$string['apikeyhowto'] = 'APIキーを取得するにはまずlive.nolej.ioでアカウントを作成してください。そしてNolejのmoodle@nolej.ioに連絡して、あなたの登録済みメールアドレスのAPIキーをリクエストする必要があります。';
$string['apikeyinfo'] = 'あなたのNolej APIキーです。';
$string['apikeymissing'] = 'Nolej APIキーがありません。あなたはプラグイン設定で設定する必要があります。';
$string['backtolibrary'] = 'Nolejライブラリに戻る';
$string['cannotwriteconcepts'] = 'コンセプトをディスクに保存できません。エラーが続く場合、管理者にご連絡ください。';
$string['cannotwritequestions'] = '問題をディスクに保存できません。エラーが続く場合、管理者にご連絡ください。';
$string['cannotwritesettings'] = '設定をディスクに保存できません。このエラーが続く場合、管理者にご連絡ください。';
$string['cannotwritesummary'] = '概要をディスクに保存できません。このエラーが続く場合、管理者にご連絡ください。';
$string['cannotwritetranscription'] = 'トランクスクリプションをディスクに保存できません。このエラーが続く場合、管理者にご連絡ください。';
$string['conceptdefinition'] = '定義';
$string['conceptenable'] = '有効';
$string['conceptlabel'] = 'ラベル';
$string['concepts'] = 'コンセプト';
$string['conceptsnotsaved'] = 'コンセプトをディスクに保存できません。このエラーが続く場合、管理者にご連絡ください。';
$string['conceptssaved'] = 'コンセプトが保存されました。';
$string['conceptuseforcw'] = 'クロスワード';
$string['conceptusefordtw'] = 'ドラッグワード';
$string['conceptuseforftw'] = 'ファインドワード';
$string['conceptuseforgaming'] = 'ゲームに使用する';
$string['conceptuseforpractice'] = '練習に使用する';
$string['conceptuseingames'] = '利用可能なゲーム';
$string['create'] = 'モジュールを作成する';
$string['created'] = '作成';
$string['createmodule'] = 'モジュールを作成する';
$string['deletemodule'] = '削除';
$string['deletemoduledescription'] = '本当にこのNolejモジュールを削除してもよろしいですか?';
$string['documentinfo'] = 'モジュール情報';
$string['editmodule'] = '編集';
$string['erractivitiesdecode'] = '活動データのデコードに失敗しました。';
$string['erractivitydownload'] = 'ディスクへの活動保存に失敗しました。';
$string['errdatamissing'] = '一部のデータがありません。';
$string['errdocument'] = 'Nolejモジュールの作成中にエラーが発生しました:<br><pre>{$a}</pre><br>このエラーが続く場合、管理者にご連絡ください。';
$string['errh5psave'] = 'H5Pパッケージの保存に失敗しました。';
$string['errh5pvalidation'] = 'H5Pパッケージが有効ではありません。';
$string['eventwebhookcalled'] = 'Nolej webhookがコールされました。';
$string['generate'] = '活動を生成する';
$string['generationstarted'] = '生成が開始されました。活動準備完了後、あなたに通知が届きます。';
$string['genericerror'] = 'エラーが発生しました: <pre>{$a->error}</pre>';
$string['keypoints'] = 'キーポイント';
$string['language'] = 'コンテンツ言語';
$string['languagedesc'] = '正しいメディア言語の選択はNolejのより良い分析に役立ちます。';
$string['lastupdate'] = '最終更新';
$string['library'] = 'Nolejライブラリ';
$string['limitaudio'] = 'オーディオ制限';
$string['limitcontent'] = 'コンテンツ制限';
$string['limitdoc'] = 'ドキュメント制限';
$string['limitmaxcharacters'] = '最大文字数: {$a}';
$string['limitmaxduration'] = '最大継続時間: {$a} 分';
$string['limitmaxpages'] = '最大ページ数: {$a}';
$string['limitmaxsize'] = 'ファイル最大サイズ: {$a}';
$string['limitmincharacters'] = '最小文字数: {$a}';
$string['limittype'] = '許可されるタイプ: {$a}';
$string['limitvideo'] = 'ビデオ制限';
$string['maxvalue'] = '最大値';
$string['messageprovider:activities_ko'] = '活動生成失敗';
$string['messageprovider:activities_ok'] = '活動生成完了';
$string['messageprovider:analysis_ko'] = '分析失敗';
$string['messageprovider:analysis_ok'] = '分析完了';
$string['messageprovider:transcription_ko'] = 'トランスクリプション失敗';
$string['messageprovider:transcription_ok'] = 'トランスクリプション完了';
$string['minvalue'] = '最小値';
$string['missingtranscription'] = 'トランスクリプション不足';
$string['modulecreated'] = 'モジュールが作成されました。トランスクリプション作業中です。トランスクリプション完了後、あなたに通知が届きます。';
$string['moduledeleted'] = 'Nolejモジュールが削除されました。';
$string['modulenotcreated'] = 'モジュールが作成されませんでした。';
$string['modulenotfound'] = 'モジュールが見つかりませんでした。';
$string['modules'] = 'あなたのNolejモジュール';
$string['moduleview'] = 'モジュールを表示する';
$string['nolej:usenolej'] = 'Nolejで活動を作成する';
$string['pluginname'] = 'Nolej';
$string['pollinginterval'] = 'ポーリング間隔';
$string['pollingintervalinfo'] = 'モジュールにアップデートがあるかどうかをチェックする間隔 (秒) です。最低1秒です。';
$string['privacy:metadata:core_files'] = 'Nolejプラグインはユーザがアップロードしたファイルを保存してモジュールを作成します。そして、作成されたモジュールをAIが分析します。';
$string['privacy:metadata:endpoint'] = 'Nolejと統合するためにはユーザデータをそのサービスと交換する必要があります。';
$string['privacy:metadata:endpoint:user_id'] = 'あなたがリモートシステム上のあなたのデータにアクセスできるようにMoodleからユーザIDが送信されます。';
$string['privacy:metadata:nolej_activity'] = 'Nolej APIをコールしたユーザに関する情報です。';
$string['privacy:metadata:nolej_activity:action'] = 'ユーザがコールしたAPIです。';
$string['privacy:metadata:nolej_activity:tstamp'] = 'ユーザによるAPIコール時のタイムスタンプです。';
$string['privacy:metadata:nolej_activity:user_id'] = 'APIをコールしたユーザのIDです。';
$string['privacy:metadata:nolej_module'] = 'Nolejモジュールの作成者に関する情報です。';
$string['privacy:metadata:nolej_module:tstamp'] = 'ユーザによるモジュール作成時のタイムスタンプです。';
$string['privacy:metadata:nolej_module:user_id'] = 'モジュールを作成したユーザのIDです。';
$string['question'] = '問題';
$string['questionanswer'] = '解答';
$string['questionanswerfalse'] = '不正解';
$string['questionanswertrue'] = '正解';
$string['questiondistractor'] = '不正解の選択肢';
$string['questionenable'] = '問題を有効にする';
$string['questionn'] = '問題 #{$a}';
$string['questions'] = '問題';
$string['questionsnotsaved'] = '問題を更新できませんでした。このエラーが続く場合、管理者にご連絡ください。';
$string['questionssaved'] = '問題が保存されました。';
$string['questiontype'] = '問題タイプ';
$string['questiontypeftb'] = 'フィルブランク';
$string['questiontypeftbmissingblank'] = '「フィルブランク」活動では欠けている単語のプレースホルダが必要です。4つのアンダースコア「____」で欠けている単語を示してください。';
$string['questiontypehoq'] = '高次問題';
$string['questiontypemcq'] = '多肢選択問題';
$string['questiontypeopen'] = '自由回答';
$string['questiontypetf'] = '○/×問題';
$string['questionusedistractor'] = '表示するステートメント';
$string['questionuseforgrading'] = '評定に使用する';
$string['settings'] = '生成';
$string['settingsnotsaved'] = '設定を更新できませんでした。このエラーが続く場合、管理者にご連絡ください。';
$string['source'] = 'ソース';
$string['sourceaudio'] = 'オーディオ';
$string['sourcedocument'] = 'ドキュメント';
$string['sourcefile'] = 'ファイル';
$string['sourcefreetext'] = 'テキスト';
$string['sourcetype'] = 'ソースタイプ';
$string['sourcetypefile'] = 'ファイル';
$string['sourcetypetext'] = '直接テキストを書く';
$string['sourcetypeweb'] = 'ウェブリソース';
$string['sourceurl'] = 'ウェブURL';
$string['sourceurldesc'] = 'URLを書く';
$string['sourceurltype'] = 'コンテンツタイプ';
$string['sourcevideo'] = 'ビデオ';
$string['sourceweb'] = 'ウェブコンテンツ';
$string['status'] = 'ステータス';
$string['statusactivities'] = '改訂完了';
$string['statusactivitiespending'] = '活動生成作業中';
$string['statusanalysis'] = 'トランスクリプション完了';
$string['statusanalysispending'] = '分析作業中';
$string['statuscompleted'] = '活動生成完了';
$string['statuscreation'] = '新しいモジュール';
$string['statuscreationpending'] = 'トランスクリプション作業中';
$string['statusfailed'] = '失敗';
$string['statusrevision'] = '分析完了';
$string['statusrevisionpending'] = '改訂作業中';
$string['summary'] = '概要';
$string['summarynotsaved'] = '概要を更新できませんでした。このエラーが続く場合、管理者にご連絡ください。';
$string['summarysaved'] = '概要が保存されました。';
$string['title'] = 'タイトル';
$string['titledesc'] = 'タイトルを選択してください。空欄のままにした場合、あなたのためにNolejがタイトルを選択します。';
$string['transcription'] = 'トランスクリプション';
