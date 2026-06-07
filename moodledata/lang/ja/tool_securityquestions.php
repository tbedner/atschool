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
 * Strings for component 'tool_securityquestions', language 'ja', version '4.4'.
 *
 * @package     tool_securityquestions
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answerquestionspagestring'] = '要セキュリティ質問検証';
$string['badconfigload'] = 'テンプレート設定ファイルを読み込めません。変数が正しく、テンプレートがtemplatesフォルダ内にあることを確認してください。';
$string['configloc'] = '場所:';
$string['configpath'] = '/config_policies/{$a}.php';
$string['forcedconfig'] = '設定は読み取り専用です。テンプレートファイルで強制的に設定されます:';
$string['formaddquestion'] = '質問を追加する';
$string['formalreadyanswered'] = '質問および回答';
$string['formanswerfailed'] = 'この回答は正しくない可能性があります。';
$string['formanswerfailedbanner'] = 'あなたのセキュリティ質問に対する回答の1つまたはそれ以上が正しくありません。';
$string['formanswerquestion'] = '質問 {$a} に対する回答を入力してください:';
$string['formclearresponses'] = 'ユーザ回答をクリアする:';
$string['formclearresponsesdesc'] = 'ユーザの回答をクリアするにはユーザ名またはメールアドレスを入力してください。';
$string['formclearresponsestable'] = '回答をクリアする';
$string['formcurrentquestions'] = '現在の質問: {$a}';
$string['formdeleteresponse'] = '回答を削除する';
$string['formdeprecate'] = '質問を非推奨にする';
$string['formdeprecateentry'] = '非推奨にする質問IDを入力してください:';
$string['formdeprecatenotfound'] = '質問が存在しません。';
$string['formduplicateresponse'] = 'あなたは同じ質問に2度回答できません。';
$string['formgraceperiodtimerem'] = '現在、あなたはセキュリティ質問猶予期間中です。この期間中はセキュリティ質問に答えないこともできます。次回ログイン時、その旨通知されます。猶予期間が終了した場合、あなたはシステムのその他の部分にアクセスする前にセキュリティ質問に回答する必要があります。残り猶予期間: {$a}';
$string['formlockedout'] = 'アカウントはパスワードリセットからロックされています。詳細はシステム管理者にお問い合わせください。';
$string['formlockedouttimer'] = 'アカウントがパスワードリセットからロックされました。 {$a} 後に再度お試しください。';
$string['formlockedoutusers'] = 'ロックアウトされたユーザ';
$string['formlockouttier'] = 'ロックアウト段階';
$string['formnewquestion'] = '新しい質問:';
$string['formnolockedusers'] = 'ロックされたユーザは見つかりませんでした。';
$string['formnoquestions'] = '質問なし';
$string['formquestionadded'] = '質問が正常に追加されました: {$a}';
$string['formquestiondeleted'] = '質問ID {$a} が正常に削除されました。';
$string['formquestiondeprecated'] = '質問ID {$a} が正常に非推奨にされました。';
$string['formquestionentry'] = '質問プールに追加する質問を入力してください:';
$string['formquestioninfo'] = 'セキュリティ強化のため、あなたは保存された回答を確認できません。あなたは質問に対する新しい回答の保存または回答の削除しかできません。';
$string['formquestionnotdeleted'] = '質問「 {$a} 」を削除できません。';
$string['formquestionnotdeprecated'] = '質問「 {$a} 」を非推奨にできません。';
$string['formquestionnumtext'] = '質問: {$a}';
$string['formquestionresponsesreq'] = 'あなたは最低でも {$a } 個のセキュリティ質問に答える必要があります。';
$string['formrecordnewresponse'] = '質問に対する新しい回答を記録する:';
$string['formremindme'] = '次回ログイン時、私に知らせる';
$string['formresetbutton'] = '回答をクリアする';
$string['formresetid'] = 'ロック解除するアカウントIDを入力してください:';
$string['formresetlockout'] = 'ロックアウトをリセットする';
$string['formresetnotfound'] = 'ユーザが存在しません。';
$string['formresetnotnumber'] = 'IDは数字である必要があります。';
$string['formresponsedeleted'] = '回答が正常に削除されました。';
$string['formresponseempty'] = '回答は空白にできません。';
$string['formresponseentrybox'] = '選択された質問に対する回答を入力してください:';
$string['formresponsenotdeleted'] = '回答を削除できません。最初に回答を追加するか、質問に対して新しい回答を記録してください。';
$string['formresponsenotrecorded'] = '回答設定時にエラーが発生しました。再度お試しください。';
$string['formresponserecorded'] = '回答が正常に記録されました。';
$string['formresponseselectbox'] = '回答する質問を選択してください:';
$string['formresponsesremaining'] = '{$a} 件の追加回答が必要です。';
$string['formsaveresponse'] = '回答を保存する';
$string['formselectquestion'] = '質問を選択する';
$string['formstatusactive'] = 'アクティブ - {$a} 件の追加質問が必要です。';
$string['formstatusnotactive'] = '非アクティブ - {$a} 件の追加質問が必要です。';
$string['formtablecount'] = '使用回数';
$string['formtabledeprecate'] = '非推奨';
$string['formtablequestion'] = '質問';
$string['formusernameplaceholder'] = 'ユーザ名またはメールアドレス';
$string['formuserresponsescleared'] = 'ユーザ回答が正常にクリアされました。';
$string['formuserunlocked'] = 'ユーザが正常にロック解除されました。';
$string['injectedquestiontitle'] = 'セキュリティ質問 {$a->num}: {$a->content}';
$string['lockoutexpiredeventname'] = 'ユーザロックアウトの有効期限が切れました。';
$string['minimumquestions'] = '少なくとも2つの質問に回答する必要があります。';
$string['pluginname'] = 'セキュリティ質問';
$string['privacy:metadata:preference:tool_securityquestions_logintime'] = 'ユーザの初回ログイン時にセキュリティ質問の回答猶予期間を開始した日時です。';
$string['privacy:metadata:tool_securityquestions'] = 'セキュリティ質問データ';
$string['privacy:metadata:tool_securityquestions_ans'] = 'このテーブルにはユーザに提示するためにどのランダム質問が選択されたのか、そして最後にランダム質問が選択されたのはいつなのかという情報が保存されます。';
$string['privacy:metadata:tool_securityquestions_ans:qid'] = 'ユーザに選択された質問の質問IDです。';
$string['privacy:metadata:tool_securityquestions_ans:timecreated'] = 'この質問がユーザに選択された日時です。';
$string['privacy:metadata:tool_securityquestions_ans:userid'] = '回答すべき質問を追跡するユーザのIDです。';
$string['privacy:metadata:tool_securityquestions_loc'] = 'このテーブルにはユーザがパスワードのリセットをロックされているかどうか、およびセキュリティ質問の入力に失敗した回数に関する情報が保存されます。';
$string['privacy:metadata:tool_securityquestions_loc:counter'] = '最後にパスワードをリセットしてからユーザがセキュリティ質問の検証に失敗した回数です。';
$string['privacy:metadata:tool_securityquestions_loc:tier'] = 'ユーザのロックアウト段階です。';
$string['privacy:metadata:tool_securityquestions_loc:timefailed'] = '最後にロックアウト段階が上昇したタイムスタンプです。';
$string['privacy:metadata:tool_securityquestions_loc:userid'] = 'ロック状態を追跡するユーザのIDです。';
$string['privacy:metadata:tool_securityquestions_res'] = 'このテーブルはハッシュ化された回答を含むセキュリティ質問に対するユーザ回答に関する情報およびどの質問に回答されたかを保存します。';
$string['privacy:metadata:tool_securityquestions_res:qid'] = '回答に該当する質問IDです。';
$string['privacy:metadata:tool_securityquestions_res:response'] = 'ユーザが質問に対する回答として入力した内容を安全にハッシュ化した回答です。';
$string['privacy:metadata:tool_securityquestions_res:userid'] = 'これを回答したユーザのIDです。';
$string['questionaddedeventname'] = '管理者がセキュリティ質問を追加しました。';
$string['questiondeletedeventname'] = '管理者がセキュリティ質問を削除しました。';
$string['questiondeprecatedeventname'] = '管理者がセキュリティ質問を非推奨にしました。';
$string['resetuserpagename'] = 'セキュリティ質問ロックアウトをリセットする';
$string['securityquestions:questionsaccess'] = 'セキュリティ質問インタラクション';
$string['securityquestionssettings'] = 'セキュリティ質問設定';
$string['setquestionspagename'] = 'セキュリティ質問を編集する';
$string['setresponsespagestring'] = 'セキュリティ質問に答えを設定する';
$string['setresponsessettingsmenu'] = 'セキュリティ質問回答';
$string['setsecurityquestionspagestring'] = 'セキュリティ質問を編集する';
$string['settingsanswerquestions'] = '検証に必要な質問数';
$string['settingsanswerquestionsdesc'] = 'アカウントのセキュリティアクションを実行するためにユーザが自分自身を確認するために必要な質問の数です。';
$string['settingsenabledesc'] = 'セキュリティ質問の検証を有効にします。';
$string['settingsenablename'] = 'プラグインを有効にする';
$string['settingsgraceperiod'] = '回答猶予期間';
$string['settingsgraceperioddesc'] = '必須質問が有効にされている場合でも、ユーザが質問の回答を設定しないことを選択できる期間です。この期間が経過した場合、回答を設定していないユーザは回答を強制されます。猶予期間を無効にするにはこのコントロールを「0」に設定してください。';
$string['settingsinjectchangepw'] = 'パスワード変更フォーム';
$string['settingsinjectpoints'] = 'セキュリティ質問のインジェクションポイント';
$string['settingsinjectpointsdesc'] = 'セキュリティ質問を挿入するすべてのフォームを選択してください。';
$string['settingsinjectsetpw'] = 'パスワード設定フォーム';
$string['settingslockoutexpiryduration'] = 'ロックアウトリセット時間';
$string['settingslockoutexpirydurationdesc'] = 'ロックアウトが自動的にクリアされるまでの失敗なし試行時間の長さです。「0」に設定した場合、管理者がリセットするまでアカウントがロックされたままになります。';
$string['settingslockoutnum'] = 'ロックアウトまでの回答試行回数';
$string['settingslockoutnumdesc'] = 'パスワードのリセットからロックアウトされるまでにユーザに許可される質問に対する回答試行回数です。ロックを無効にするにはこのコントロールを「0」に設定してください。';
$string['settingsmandatoryquestions'] = '必須セキュリティ質問';
$string['settingsmandatoryquestionsdesc'] = 'このコントロールを有効にした場合、セキュリティ質問が必須になります。無効にした場合、ユーザはログイン時に質問に答えるよう促されますが、そのまま移動できます。次回ログイン時、再度プロンプトが表示されます。';
$string['settingsminquestions'] = 'アクティブなセキュリティ質問の最小数';
$string['settingsminquestionsdesc'] = '一度にアクティブにできるセキュリティ質問の最小数を入力してください。他の質問が非推奨になる前にさらに質問を追加する必要があります。';
$string['settingsminuserquestions'] = 'ユーザの最低回答質問数';
$string['settingsminuserquestionsdesc'] = 'プロンプトが表示されなくなるまでにユーザが回答する必要のあるアクティブなセキュリ ティ質問の最小数を入力してください。';
$string['settingsquestionduration'] = '質問期間';
$string['settingsquestiondurationdesc'] = '高セキュリティページで質問を選択した場合、その質問が有効である期間です。この期間を過ぎた時点で新しい質問が選択されます。';
$string['settingstierheader'] = 'ロックアウト段階設定';
$string['settingstierheaderdesc'] = 'これらの設定でセキュリティ質問にロックアウト段階を追加できます。ロックアウト段階を無効にするにはこれらの設定を「0」のままにしてください。
これらが設定されている場合、ユーザがロックアウトされた場合、段階に指定された期間経過後に再度セキュリティ質問への回答が許可されます。
ユーザがロックアウトされた場合、ロックアウト段階が上がります。ロックアウトはlockoutexpirydurationコントロールで指定された期間が経過した時点で自動的に解除されます。';
$string['settingstieroneduration'] = 'ロックアウト第1段階';
$string['settingstieronedurationdesc'] = 'ユーザがセキュリティ質問を再試行できないロックアウト第1段階の期間です。';
$string['settingstiertwoduration'] = 'ロックアウト第2段階';
$string['settingstiertwodurationdesc'] = 'ユーザがセキュリティ質問を再試行できないロックアウト第2段階の期間です。';
$string['taskcleantables'] = '削除済みユーザのプラグインデータベースを削除する';
$string['templateforced-on'] = 'このテンプレートはセキュリティコントロールのデフォルト設定を強制します。ユーザが常に十分な数の質問に回答および十分な数の回答を検証に使用できるようにします。';
$string['userlockedeventname'] = '質問への回答失敗によりユーザがパスワードリセットからロックされました。';
$string['userunlockedeventname'] = '管理者によりユーザのパスワードリセットがロック解除されました。';
