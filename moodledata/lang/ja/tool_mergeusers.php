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
 * Strings for component 'tool_mergeusers', language 'ja', version '4.4'.
 *
 * @package     tool_mergeusers
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['choose_users'] = 'マージするユーザを選択する';
$string['clear_selection'] = '現在のユーザ選択をクリアする';
$string['cligathering:description'] = '最初のユーザIDを2番目のユーザIDにマージするためにユーザIDのペアを引き合わせてください。最初のユーザID (fromid) は2番目のユーザID (toid) に「移行」されるため、すべてのデータを「失う」ことになります。ユーザ「toid」は両者のユーザデータを含みます。';
$string['cligathering:fromid'] = 'ソースユーザID (fromid):';
$string['cligathering:stopping'] = 'マージを停止するにはCtrl+Cを押すか、fromidまたはtoidフィールドに「-1」と入力してください。';
$string['cligathering:toid'] = 'ターゲットユーザID  (toid):';
$string['dbko_no_transactions'] = '<strong>マージ失敗!</strong>
<br />
あなたのデータベースエンジンはトランザクションをサポートしていません。そのため、データベースが<strong>更新されました</strong>。あなたのデータベースステータスが一貫していない可能性があります。
<br />
しかし、マージログ確認後、プラグイン開発者にエラー内容を知らせてください。あなたにはすぐに解決策が見つかることでしょう。プラグインを問題解決策を含む最終バージョンにアップデートした後、再度マージ処理を実行して成功裏に完了させてください。';
$string['dbko_transactions'] = '<strong>マージ失敗!</strong>
<br />
あなたのデータベースエンジンはトランザクションをサポートしています。そのため、現在のトランザクションはすべてロールバックされました。<strong>あなたのデータベースには何の変更も加えられていません</strong>。';
$string['dbok'] = '正常にマージされました。';
$string['deleted'] = 'ID {$a} のユーザが削除されました。';
$string['error_return'] = '検索フォームに戻る';
$string['errorsameuser'] = '同じユーザをマージしようとしています。';
$string['errortransactionsonly'] = 'エラー: トランザクションが必要ですが、あなたのデータベースタイプ {$a} はサポートしていません。あなたは必要であればトランザクションなしでユーザをマージできます。
プラグイン設定をレビューして適切に対応してください。';
$string['eventusermergedfailure'] = 'マージに失敗しました。';
$string['eventusermergedsuccess'] = '正常にマージしました。';
$string['excluded_exceptions'] = '例外を除外する';
$string['excluded_exceptions_desc'] = 'この件に関する経験からこれらのデータベーステーブルはすべてマージ対象から除外すべきであると考えられます。詳細はREADMEをご覧ください。
<br />
そのため、デフォルトのプラグイン動作を適用するには「 {$a} 」を選択してそれらのテーブルをマージ処理からすべて除外する必要があります (推奨)。
<br />
あなたは必要であればこれらのテーブルを除外た上でマージ処理に含めることもできます (非推奨)。';
$string['exportlogs'] = 'ログをCSVでエクスポートする';
$string['finishtime'] = 'マージ完了: {$a}';
$string['form_description'] = '<p>ユーザ名/ID番号が分からない場合、あなたはここでユーザを検索できます。そうでない場合、あなたはフォームを展開してその情報を直接入力できます。 詳細はフィールドのヘルプをご覧ください。</p>';
$string['form_header'] = 'マージするユーザを探す';
$string['header'] = '2名のユーザを単一アカウントにマージする';
$string['header_help'] = '<p>削除されるユーザおよび保持されるユーザが与えられた場合、これは前者のユーザに関連するユーザデータを後者のユーザにマージします。どちらのユーザもすでに存在している必要があります。また実際にアカウントは削除されないことに留意してください。アカウント削除は管理者が手動で実行するために残してあります。</p>
 <p><strong>元に戻せないため、あなたが自分で何をしているか理解している場合のみ実施してください!</strong></p>';
$string['into'] = '->';
$string['invalid_option'] = '無効なフォームオプションです。';
$string['invaliduser'] = '無効なユーザです。';
$string['logid'] = 'ご参考までにこれらの結果はログID {$a}に記録されます。';
$string['logko'] = 'エラーが発生しました:';
$string['loglist'] = 'これらの記録はすべて実行されたマージ処理であり、実行成否が示されています:';
$string['logok'] = 'DBに送信されたクエリは以下のとおりです:';
$string['mergedbyuseridonlog'] = 'マージ担当';
$string['mergeusers'] = 'ユーザアカウントをマージする';
$string['mergeusers:mergeusers'] = 'ユーザアカウントをマージする';
$string['mergeusers:view'] = 'ユーザアカウントをマージする';
$string['mergeusers_confirm'] = '確認後、マージ処理が開始されます。
<br />
<strong>これは元に戻せません!</strong>
本当に続けてもよろしいですか?';
$string['mergeusersadvanced'] = '<strong>直接ユーザ入力</strong>';
$string['mergeusersadvanced_help'] = 'あなたがどのユーザをマージしたいか明確な場合、以下のフィールドに入力できます。
<br /><br />
入力された内容が実際にユーザであるかどうか確認するには「検索」ボタンをクリックしてください。';
$string['merging'] = 'マージ完了';
$string['newuser'] = '保持するユーザ';
$string['newuserid'] = '保持するユーザID';
$string['newuseridonlog'] = '保持ユーザ';
$string['no_saveselection'] = 'あなたは新旧どちらのユーザも選択していません。';
$string['nologs'] = 'まだマージログはありません。よかったですね!';
$string['nomergedby'] = '記録なし';
$string['olduser'] = '削除するユーザ';
$string['olduserid'] = '削除するユーザID';
$string['olduseridonlog'] = '削除済みユーザ';
$string['pluginname'] = 'ユーザアカウントマージ';
$string['privacy:metadata'] = 'ユーザアカウントマージプラグインはいかなる個人データも保存しません。';
$string['qa_action_delete_fromid'] = '新ユーザの受験を保持する';
$string['qa_action_delete_toid'] = '旧ユーザの受験を保持する';
$string['qa_action_remain'] = '何もしない: マージも削除もしない';
$string['qa_action_remain_log'] = '次のテーブルのユーザデータは更新されません: <strong>{$a}</strong>';
$string['qa_action_renumber'] = '両方のユーザの受験をマージおよび番号変更する';
$string['qa_chosen_action'] = '小テスト受験のためのアクティブオプション: {$a}';
$string['qa_grades'] = '小テスト評定再計算: {$a}';
$string['quizattemptsaction'] = '小テスト受験解決方法';
$string['quizattemptsaction_desc'] = '小テスト受験をマージする場合、3つのケースが考えられます:
<ol>
  <li>旧ユーザのみ小テストを受験しました。すべての受験は新ユーザによって実施されたように表示されます。</li>
  <li>新ユーザのみ小テストを受験しました。すべて正解の場合、何も処理させません。</li>
  <li>両方のユーザが同じ小テストを受験しました。<strong>あなたはこの対立をどうするかを選択する必要があります</strong>。あなたは以下のいずれかのアクションを選択する必要があります:
      <ul>
      <li><strong>{$a->renumber}</strong> - 旧ユーザの受験は新ユーザの受験にマージされた上で開始された時間順に番号が付け直されます。</li>
          <li><strong>{$a->delete_fromid}</strong> - 旧ユーザの受験は削除されます。新ユーザの受験が保持されます。</li>
          <li><strong>{$a->delete_toid}</strong> - 新ユーザの受験は削除されます。旧ユーザの受験は保持されます。</li>
          <li><strong>{$a->remain}</strong> (デフォルト) - 受験はマージも削除もされません。受験結果は受験したユーザに関連したままとなります。これは最も安全なアクションですが、ユーザAからユーザBまたはBからAへのユーザマージは異なる小テスト評点を生成する可能性があります。</li>
      </ul>
  </li>
</ol>';
$string['results'] = 'マージ結果およびログ';
$string['review_users'] = 'マージするユーザを確認する';
$string['saveselection_submit'] = '選択を保存する';
$string['searchuser'] = 'ユーザを検索する';
$string['searchuser_help'] = 'ユーザ名、姓名、メールアドレスまたはユーザIDを入力して潜在的なユーザを検索します。特定フィールドのみ検索したい場合、あなたは指定もできます。';
$string['starttime'] = 'マージ開始: {$a}';
$string['suspenduser_setting'] = '旧ユーザを一時停止する';
$string['suspenduser_setting_desc'] = 'この設定を有効にした場合、マージが成功した場合は旧ユーザを自動的に一時停止してMoodleにログインできないようにします (推奨)。この設定を無効にした場合、旧ユーザはアクティブのままにされます。どちらの場合でも旧ユーザが関連データを保持することはありません。';
$string['tableko'] = 'テーブル {$a} : 更新NG!';
$string['tableok'] = 'テーブル {$a} : 更新OK';
$string['tableskipped'] = 'ロギングまたはセキュリティ上の理由から、私たちは <strong>{$a}</strong> をスキップしています。
<br />
これらのエントリを削除するにはこのスクリプトの正常実行の後、旧ユーザを削除してください。';
$string['timetaken'] = 'マージに {$a} 秒を要しました。';
$string['transactions_not_supported'] = 'ご参考までにあなたのデータベースは<strong>トランザクションをサポートしません</strong>。';
$string['transactions_setting'] = 'トランザクションのみ許可する';
$string['transactions_setting_desc'] = 'この設定を有効にした場合、トランザクションをサポートしていないデータベース上ではユーザマージは一切動作しません (推奨)。マージエラー発生時、あなたのデータベースの一貫性を保つためにこの設定の有効化は必要です。
<br />
この設定を無効にした場合、常にマージ処理が実行されます。エラーが発生した場合、マージログに何が問題であったか表示されます。プラグインサポータへの報告ですぐに解決策が見つかるはずです。
<br />
まず何よりも、コアMoodleテーブルおよび一部のサードパーティプラグインはすでにこのプラグインで考慮されています。あなたのMoodleインストレーションにサードパーティプラグインがない場合、このオプションを有効または無効にすることでこのプラグインを静かに実行できます。';
$string['transactions_supported'] = 'ご参考までにあなたのデータベースは<strong>トランザクションをサポートします</strong>。';
$string['uniquekeynewidtomaintain'] = '新ユーザのデータを保持する';
$string['uniquekeynewidtomaintain_desc'] = '競合発生時、user.id関連カラムがユニークキーである場合等、このプラグインは (デフォルトでは) 新ユーザのデータを保持します。これは整合性を保つために旧ユーザのデータが削除されることを意味します。そうでない場合、あなたがこのオプションを無効にした場合は旧ユーザのデータは保持されます。';
$string['usermergingheader'] = '&laquo;{$a->username}&raquo; (ユーザID = {$a->id})';
$string['userreviewtable_legend'] = '<b>マージするユーザをレビューする</b>';
$string['userselecttable_legend'] = '<b>マージするユーザを選択する</b>';
$string['viewlog'] = 'マージログを確認する';
$string['wronglogid'] = 'あなたが希望するログは存在しません。';
