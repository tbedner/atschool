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
 * Strings for component 'local_recompletion', language 'ja', version '4.4'.
 *
 * @package     local_recompletion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abandoned'] = '放棄';
$string['advancedrecompletiontitle'] = '高度';
$string['archive'] = '古い受験をアーカイブする';
$string['archivecertificate'] = '発行済み証明書をアーカイブする (mod_certificate)';
$string['archivecertificate_help'] = '発行済み証明書をアーカイブしますか?';
$string['archivechoice'] = '古い投票回答をアーカイブする';
$string['archivecompletiondata'] = '完了データをアーカイブする';
$string['archivecompletiondata_help'] = '完了データをlocal_recompletion_cc、local_recompletion_cc_ccおよびlocal_recompletion_cmcテーブルに書き込みます。これを選択しない場合、完了データは完全に削除されます。';
$string['archivecoursecertificate'] = '発行済み証明書をアーカイブする (mod_coursecertificate)';
$string['archivecoursecertificate_help'] = '発行済み証明書をアーカイブしますか? アーカイブされた証明書はtool_certificate_issuesテーブルに残りますが、アーカイブステータスになります。';
$string['archivecustomcertcertificates'] = '発行済みカスタム証明書をアーカイブする (mod_customcert)';
$string['archivecustomcertcertificates_help'] = '発行済みカスタム証明書をアーカイブしますか?';
$string['archiveh5p'] = '古いH5P受験をアーカイブする (mod_h5pactivity)';
$string['archivehotpot'] = '古いHotpot受験をアーカイブする';
$string['archivehvp'] = '古いH5P受験をアーカイブする (mod_hvp)';
$string['archivelesson'] = '古いレッスン受験をアーカイブする';
$string['archivequestionnaire'] = '古いアンケート回答をアーカイブする';
$string['archivequiz'] = '古い小テスト受験をアーカイブする';
$string['archivescorm'] = '古いSCORM受験をアーカイブする';
$string['assignattempts'] = '課題受験';
$string['assignattempts_help'] = 'コース内での課題受験の処理方法です。「評点変更時にコース完了を更新する」設定が使用された場合、教師が課題活動内の評点を更新してユーザがすでにコースを完了している時点でコース完了日が課題評点変更日に更新されます。';
$string['assignevent'] = '評点変更時にコース完了を更新する';
$string['bulkchangedate'] = '選択したユーザの完了日を変更する';
$string['bulkresetallcompletion'] = '選択したユーザのすべての完了をリセットする';
$string['certificate'] = '証明書 (mod_certificate)';
$string['certificate_help'] = '発行済み証明書を削除しますか?';
$string['certificateverifywarn'] = '注意: 発行済み証明書をアーカイブせずに削除した場合、Moodleで発行済み証明書を検証できなくなります。あなたが許容できる場合にのみ証明書を削除してください。';
$string['choiceattempts'] = '投票回答';
$string['choiceattempts_help'] = '既存の投票回答が削除された場合 - アーカイブが選択されている場合、古い投票回答はlocal_recompletion_chaテーブルにアーカイブされます。';
$string['completed'] = '完了';
$string['completionnotenabled'] = 'このコースでは完了は有効にされていません。';
$string['completionreset'] = 'このコースの選択された学生の完了はリセットされました。';
$string['completionresetuser'] = 'このコースの {$a} の完了がリセットされました。';
$string['completionupdated'] = 'コース完了日が更新されました。';
$string['coursecertificate'] = '証明書 (mod_coursecertificate)';
$string['coursecertificate_help'] = '発行済み証明書を削除しますか?';
$string['coursecertificateverifywarn'] = '注意: 発行済み証明書をアーカイブせずに削除した場合、Moodleで発行済み証明書を検証できなくなります。あなたが許容できる場合にのみ証明書を削除してください。';
$string['coursecompletiondate'] = '新しいコース完了日';
$string['customcertcertificates'] = 'カスタム証明書 (mod_customcert)';
$string['customcertcertificates_help'] = '発行されたカスタム証明書を削除しますか?';
$string['customcertresetcertificates'] = '発行済み証明書を削除する';
$string['customcertresetcertificatesverifywarn'] = '注意:発行済み証明書を削除した場合、削除前にアーカイブした場合でもMoodleで発行済み証明書を検証できなくなります。あなたが許容できる場合にのみ証明書を削除してください。';
$string['datasource:local_recompletion_cc'] = 'コース完了のアーカイブ';
$string['datasource:local_recompletion_ccert_is'] = '発行済み証明書 (mod_customcert) のアーカイブ';
$string['datasource:local_recompletion_cert'] = '発行済み証明書 (mod_certificate) のアーカイブ';
$string['datasource:local_recompletion_cmc'] = '活動完了のアーカイブ';
$string['datasource:local_recompletion_h5p'] = 'H5P受験 (mod_h5pactivity) のアーカイブ';
$string['datasource:local_recompletion_hpa'] = 'Hotpot受験のアーカイブ';
$string['datasource:local_recompletion_lg'] = 'レッスン受験のアーカイブ';
$string['datasource:local_recompletion_qa'] = '小テスト受験のアーカイブ';
$string['datasource:local_recompletion_qg'] = '小テスト評定のアーカイブ';
$string['defaultsettings'] = '再完了デフォルト設定';
$string['delete'] = '既存の受験を削除する';
$string['deletecertificate'] = '発行済み証明書を削除する';
$string['deletecoursecertificate'] = '発行済み証明書を削除する';
$string['deletegradedata'] = 'ユーザのすべての評点を削除する';
$string['deletegradedata_help'] = 'grade_gradesテーブルから現在の評定完了データを削除します。評定再完了データは完全に削除されますが、データは評定履歴データテーブルに保持されます。';
$string['donothing'] = '何もしない';
$string['editcompletion'] = 'コース完了日を編集する';
$string['editcompletion_desc'] = '以下のユーザのコース完了日を変更する:';
$string['editrecompletion'] = 'コース再完了設定を編集する';
$string['emailrecompletiontitle'] = 'カスタム再完了メッセージ設定';
$string['endtime'] = '終了時間';
$string['entity:local_recompletion_cc'] = 'コース完了のアーカイブ';
$string['entity:local_recompletion_ccert_is'] = '発行済み証明書のアーカイブ (mod_customcert)';
$string['entity:local_recompletion_cert'] = '発行済み証明書のアーカイブ (mod_certificate)';
$string['entity:local_recompletion_cmc'] = '活動完了のアーカイブ';
$string['entity:local_recompletion_h5p'] = 'H5P受験のアーカイブ (mod_h5pactivity)';
$string['entity:local_recompletion_hpa'] = 'Hotpot受験のアーカイブ';
$string['entity:local_recompletion_lg'] = 'レッスン評定のアーカイブ';
$string['entity:local_recompletion_qa'] = '小テスト受験のアーカイブ';
$string['entity:local_recompletion_qg'] = '小テスト評定のアーカイブ';
$string['eventrecompletion'] = 'コース再完了';
$string['extraattempt'] = '学生に追加受験させる';
$string['forcearchivecompletiondata'] = '完了データのアーカイブを強制する';
$string['forcearchivecompletiondata_help'] = 'この設定を有効にした場合、すべてのコースの再完了時に完了データのアーカイブが強制されます。これにより偶発的なデータ損失を防げます。';
$string['h5pattempts'] = 'H5P受験 (mod_h5pactivity)';
$string['h5pattempts_help'] = 'コース内でのH5P受験の処理方法です。アーカイブが選択された場合、古いH5P受験はlocal_recompletion_h5pおよびlocal_recompletion_h5prテーブルにアーカイブされます。';
$string['hotpotattempts'] = 'Hotpot受験';
$string['hotpotattempts_help'] = 'コース内でのHotpot受験の処理方法です。アーカイブが選択された場合、受験はアーカイブされます。';
$string['hvpattempts'] = 'H5P受験 (mod_hvp)';
$string['hvpattempts_help'] = 'コース内でのH5P受験の処理方法です。アーカイブが選択された場合、古いH5P受験はlocal_recompletion_hvpテーブルにアーカイブされます。';
$string['inprogress'] = '進行中';
$string['invalidscheduledate'] = '無効なスケジュール日が入力されました。';
$string['lessonattempts'] = 'レッスン受験';
$string['lessonattempts_help'] = 'コース内でのレッスン受験の処理方法です。アーカイブが選択された場合、受験はアーカイブされます。';
$string['modifycompletiondates'] = 'コース完了日を修正する';
$string['noassigngradepermission'] = 'あなたの完了はリセットされましたが、このコースにはリセットできない課題が含まれています。必要であれば先生にご依頼ください。';
$string['nousersselected'] = '選択されたユーザはいません。';
$string['penalties'] = 'ペナルティ';
$string['pluginname'] = 'コース再完了';
$string['pluginssettings'] = 'プラグイン設定';
$string['privacy:metadata:attempt'] = '受験番号です。';
$string['privacy:metadata:completionstate'] = '活動が完了した場合です。';
$string['privacy:metadata:correct'] = '正解?';
$string['privacy:metadata:course'] = 'このテーブルにリンクされているコースIDです。';
$string['privacy:metadata:coursemoduleid'] = '活動IDです。';
$string['privacy:metadata:coursesummary'] = 'ユーザのコース完了データを保存します。';
$string['privacy:metadata:deadline'] = '期限です。';
$string['privacy:metadata:endtime'] = '終了日です。';
$string['privacy:metadata:flag'] = 'フラグです。';
$string['privacy:metadata:grade'] = '評定です。';
$string['privacy:metadata:gradefinal'] = 'コース完了のための最終評定です。';
$string['privacy:metadata:lessontime'] = 'レッスン期間です。';
$string['privacy:metadata:local_recompletion_cc'] = '過去のコース完了のアーカイブです。';
$string['privacy:metadata:local_recompletion_cc_cc'] = '過去のcourse_completion_crit_complのアーカイブです。';
$string['privacy:metadata:local_recompletion_ccert_is'] = '過去のコースカスタム証明書発行のアーカイブです。';
$string['privacy:metadata:local_recompletion_ccert_is:emailed'] = 'カスタム証明書発行がメールされた場合です。';
$string['privacy:metadata:local_recompletion_ccert_is:timecreated'] = 'カスタム証明書発行が作成された日時です。';
$string['privacy:metadata:local_recompletion_cert'] = '過去の証明書発行のアーカイブです。';
$string['privacy:metadata:local_recompletion_cert:timecreated'] = '証明書発行が作成された日時です。';
$string['privacy:metadata:local_recompletion_cha'] = '投票回答のアーカイブです。';
$string['privacy:metadata:local_recompletion_cha:choiceid'] = '投票回答の投票IDのアーカイブです。';
$string['privacy:metadata:local_recompletion_cha:optionid'] = '投票回答のオプションIDのアーカイブです。';
$string['privacy:metadata:local_recompletion_cmc'] = '過去のコースモジュール完了のアーカイブです。';
$string['privacy:metadata:local_recompletion_cmv'] = '過去のコースモジュール閲覧のアーカイブです。';
$string['privacy:metadata:local_recompletion_h5p'] = 'H5P (mod_h5pactivity) 受験追跡情報のアーカイブです。';
$string['privacy:metadata:local_recompletion_h5pr'] = 'H5P (mod_h5pactivity) 受験結果追跡情報のアーカイブです。';
$string['privacy:metadata:local_recompletion_hpa'] = 'Hotpot受験のアーカイブです。';
$string['privacy:metadata:local_recompletion_hvp'] = 'H5P (mod_hvp) ユーザデータのアーカイブです。';
$string['privacy:metadata:local_recompletion_hvp:data'] = '実際に保存されたユーザデータです。';
$string['privacy:metadata:local_recompletion_hvp:hvp_id'] = 'hvpコンテンツのIDです。';
$string['privacy:metadata:local_recompletion_la'] = 'lesson_attemptsのアーカイブです。';
$string['privacy:metadata:local_recompletion_lb'] = 'lesson_branchのアーカイブです。';
$string['privacy:metadata:local_recompletion_lg'] = 'lesson_gradesのアーカイブです。';
$string['privacy:metadata:local_recompletion_lo'] = 'lesson_overridesのアーカイブです。';
$string['privacy:metadata:local_recompletion_lt'] = 'lesson_timerのアーカイブです。';
$string['privacy:metadata:local_recompletion_ltia'] = 'ユーザアクセスログおよび評定バックアップデータです。';
$string['privacy:metadata:local_recompletion_ltia:lastaccess'] = 'ユーザが最後にコースにアクセスした日時です。';
$string['privacy:metadata:local_recompletion_ltia:lastgrade'] = 'ユーザが最後に取得したと記録された評点です。';
$string['privacy:metadata:local_recompletion_ltia:timecreated'] = 'ユーザが登録された日時です。';
$string['privacy:metadata:local_recompletion_ltia:toolid'] = 'LTI登録方法のツールのIDです。';
$string['privacy:metadata:local_recompletion_ltia:userid'] = 'ユーザのIDです。';
$string['privacy:metadata:local_recompletion_qr'] = '再完了アンケート回答テーブルです。';
$string['privacy:metadata:local_recompletion_qr:complete'] = '完了';
$string['privacy:metadata:local_recompletion_qr:grade'] = '評定です。';
$string['privacy:metadata:local_recompletion_qr:questionnaireid'] = 'アンケートIDです。';
$string['privacy:metadata:local_recompletion_qr:submitted'] = '送信済みです。';
$string['privacy:metadata:maxattempts'] = '最大受験回数です。';
$string['privacy:metadata:overrideby'] = '活動完了をオーバーライドした人のユーザIDです。';
$string['privacy:metadata:quiz_attempts'] = 'それぞれの小テスト受験に関する詳細がアーカイブされています。';
$string['privacy:metadata:quiz_attempts:attempt'] = '受験番号です。';
$string['privacy:metadata:quiz_attempts:currentpage'] = '現在ユーザがアクセスしているページです。';
$string['privacy:metadata:quiz_attempts:preview'] = 'これが小テストのプレビューであるかどうか示します。';
$string['privacy:metadata:quiz_attempts:state'] = '現在の受験状況です。';
$string['privacy:metadata:quiz_attempts:sumgrades'] = '受験の評点合計です。';
$string['privacy:metadata:quiz_attempts:timecheckstate'] = '状態が確認された日時です。';
$string['privacy:metadata:quiz_attempts:timefinish'] = '受験が完了した日時です。';
$string['privacy:metadata:quiz_attempts:timemodified'] = '受験が更新された日時です。';
$string['privacy:metadata:quiz_attempts:timemodifiedoffline'] = 'オフライン更新経由で受験が更新された日時です。';
$string['privacy:metadata:quiz_attempts:timestart'] = '受験が開始された日時です。';
$string['privacy:metadata:quiz_grades'] = '過去に受験した小テストの総合評点に関する詳細が保存されています。';
$string['privacy:metadata:quiz_grades:grade'] = 'この小テストの総合評点です。';
$string['privacy:metadata:quiz_grades:quiz'] = '評定された小テストです。';
$string['privacy:metadata:quiz_grades:timemodified'] = '評定が更新された日時です。';
$string['privacy:metadata:quiz_grades:userid'] = '評定されたユーザです。';
$string['privacy:metadata:rawscore'] = '取得した評点です。';
$string['privacy:metadata:reaggregate'] = 'コース完了が再集計された場合です。';
$string['privacy:metadata:retake'] = '再受験です。';
$string['privacy:metadata:scoes_value:element'] = '追跡するエレメントのIDです。';
$string['privacy:metadata:scoes_value:value'] = '指定されたエレメントの値です。';
$string['privacy:metadata:score'] = '評点です。';
$string['privacy:metadata:scorm_attempt'] = '過去のSCORM受験のアーカイブです。';
$string['privacy:metadata:scorm_scoes_value'] = '活動に属するSCOの追跡データのアーカイブです。';
$string['privacy:metadata:scormid'] = 'SCORM IDです。';
$string['privacy:metadata:starttime'] = '開始日時です。';
$string['privacy:metadata:timecompleted'] = 'コースが完了した日時です。';
$string['privacy:metadata:timecreated'] = '追跡対象エレメントが作成された日時です。';
$string['privacy:metadata:timeenrolled'] = 'ユーザがコースに登録された日時です。';
$string['privacy:metadata:timemodified'] = 'エレメントが最後に追跡された日時です。';
$string['privacy:metadata:timestarted'] = 'コースが開始された日時です。';
$string['privacy:metadata:unenroled'] = 'ユーザがコースから登録解除された場合です。';
$string['privacy:metadata:useranswer'] = '解答です。';
$string['privacy:metadata:userid'] = 'このテーブルにリンクされたユーザIDです。';
$string['privacy:metadata:viewed'] = '活動が閲覧された場合です。';
$string['pulsenotifications'] = 'パルス通知';
$string['pulsenotifications_help'] = 'すでに送信されたパルス通知をリセットしますか?';
$string['pulseresetnotifications'] = '通知をリセットする';
$string['questionnaireattempts'] = 'アンケート回答';
$string['questionnaireattempts_help'] = '既存のアンケート回答をどのようにしますか。削除およびアーカイブが選択された場合、古いアンケート回答はlocal_recompletionテーブルにアーカイブされます。';
$string['quizattempts'] = '小テスト受験';
$string['quizattempts_help'] = '既存の小テストの受験をどのようにしますか。削除およびアーカイブが選択された場合、古い小テスト受験はlocal_recompletionテーブルにアーカイブされます。もし受験回数を増やすよう設定された場合、小テストオーバーライドが追加されてユーザは最大受験回数を設定できるようになります。';
$string['recompletion'] = '再完了';
$string['recompletion:bulkoperations'] = 'バルク処理';
$string['recompletion:manage'] = 'コース再完了設定を変更できるようにします。';
$string['recompletion:resetmycompletion'] = '私の完了をリセットする';
$string['recompletioncalculateddate'] = '計算日: {$a}';
$string['recompletionemailbody'] = '再完了メッセージ本文';
$string['recompletionemailbody_help'] = 'HTMLタグおよび多言語タグを含むプレインテキストまたはMoodleオートフォーマットでカスタム再完了メール件名を追加できます。

以下のプレースホルダをメッセージに含めます:

*コース名 {$a->coursename}
* コースへのリンク {$a->link}
* ユーザプロファイルページへのリンク {$a->profileurl}
* ユーザメール {$a->email}
* ユーザフルネーム {$a->fullname}';
$string['recompletionemaildefaultbody'] = '次のコースを再完了してください: {$a->coursename} {$a->link}';
$string['recompletionemaildefaultsubject'] = '要コース {$a->coursename} 再完了';
$string['recompletionemailsubject'] = '再完了メッセージ件名';
$string['recompletionemailsubject_help'] = 'カスタム再完了メール件名をプレインテキストとして追加できます。

以下のプレースホルダをメッセージに含めます:

*コース名 {$a->coursename}
* ユーザフルネーム {$a->fullname}';
$string['recompletionnotenabledincourse'] = '次のコースIDで再完了が有効にされていません: {$a}';
$string['recompletionnotify'] = '再完了メッセージ';
$string['recompletionnotify:activeenrolled'] = '有効な登録が完了したユーザに送信する';
$string['recompletionnotify:completed'] = '完了したユーザに送信する';
$string['recompletionnotify:enrolled'] = '登録が完了したユーザに送信する';
$string['recompletionnotify_help'] = '再完了を通知するユーザを決定してください。
* 完了したユーザに送信する - コース完了レコードがユーザに存在する場合、そのユーザに通知されます。
* 有効な登録が完了したユーザに送信する - ユーザが有効な登録を完了している場合、そのユーザに通知されます。
* 登録が完了したユーザに送信する - 登録が有効または一時停止されている場合、そのユーザに通知されます。';
$string['recompletionrange'] = '再完了期間';
$string['recompletionrange_help'] = 'ユーザの完了結果がリセットされるまでの期間を設定します。';
$string['recompletionschedule'] = '再完了スケジュール';
$string['recompletionschedule_help'] = '完了結果がリセットされる日付 (例 1月1日) を設定してください。この日付は再完了が最後に実行された日から遡って計算されます。このリセットは一定間隔毎に実行されます。「1月1日」は毎年、「金曜日」は毎週金曜日に再完了が実行されます。';
$string['recompletionsettingssaved'] = '再完了設定が保存されました。';
$string['recompletiontask'] = '再完了が必要なユーザをチェックする';
$string['recompletiontype'] = '再完了タイプ';
$string['recompletiontype:disabled'] = '無効';
$string['recompletiontype:ondemand'] = 'オンデマンド';
$string['recompletiontype:period'] = '期間';
$string['recompletiontype:schedule'] = 'スケジュール';
$string['recompletiontype_help'] = '新しいコースでユーザの完了結果がどのようにリセットされるか決定します。

* 無効 - この機能を無効にします。
* 期間 - ユーザの最終コース完了日に基づいた再完了期間 (例 60日ごと) を許可します。
* オンデマンド - 必要に応じて教師が個々のユーザを手動リセットできます。
* スケジュール - 毎年1月1日等、指定した日付に再完了を許可します。';
$string['recompletionunenrolenable'] = '登録解除時に完了をリセットする';
$string['recompletionunenrolenable_help'] = 'ユーザ登録解除時に完了リセットをトリガできるようにします。';
$string['resetallcompletion'] = 'すべての完了をリセットする';
$string['resetcompletionconfirm'] = '本当に {$a} のこのコースのすべての完了データをリセットしてもよろしいですか?  警告 - これはいくつかの提出済みコンテンツを完全に削除する可能性があります。';
$string['resetcompletionfor'] = '{$a} の完了をリセットする';
$string['resetlti'] = 'LTI評定をリセットする';
$string['resetltis'] = 'LTI評定';
$string['resetltis_help'] = 'コース内でのLTI評定の処理方法です。「LTI評定をリセットする」設定が使用された場合、すべてのLTI評定結果はゼロにリセットされます。ユーザがコースで新しい完了を達成した場合、更新されたコース評定がLTIプロバイダに再送信されます。';
$string['resetmycompletion'] = '私の活動完了をリセットする';
$string['resetquizoverride'] = '小テストユーザオーバーライドをリセットする';
$string['restricted'] = '指定されたユーザの完了リセットは制限されています。';
$string['restrictedbyenrol'] = '指定されたユーザの完了リセットは登録方法により制限されます。';
$string['restrictenrol'] = '登録方法';
$string['restrictenrol_help'] = '選択された登録方法で登録されたユーザのみ完了データのリセットに含まれます。何も選択されていない場合、ユーザの登録方法に制限がないことを意味します。';
$string['restrictionsettings'] = '制限設定';
$string['restrictionsheader'] = '制限';
$string['score'] = '評点';
$string['scormattempts'] = 'SCORM受験';
$string['scormattempts_help'] = '既存のSCORM受験が削除された場合 - アーカイブが選択された場合、古いSCORM受験はlocal_recompletion_sstテーブルにアーカイブされます。';
$string['starttime'] = '開始時間';
$string['status'] = '完了ステータス';
$string['timecreated'] = '作成日時';
$string['timedout'] = 'タイムアウト';
$string['timemodified'] = '修正日時';
$string['yearly'] = '毎年';
