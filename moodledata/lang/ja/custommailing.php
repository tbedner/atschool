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
 * Strings for component 'custommailing', language 'ja', version '4.4'.
 *
 * @package     custommailing
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['andtargetactivitynotcompleted'] = 'およびターゲットモジュールがユーザにより完了されていない場合';
$string['atactivitycompleted'] = 'ターゲットモジュール完了時';
$string['atcourseenrol'] = 'コース登録時';
$string['atfirstlaunch'] = '最初の起動時 (ターゲットモジュール)';
$string['certificate'] = '証明書';
$string['confirmdelete'] = '本当にこのメーリングを削除してもよろしいですか: {$a}';
$string['course'] = 'コース';
$string['coursecompletionenabled'] = '警告 : コース完了が有効にされました。';
$string['coursecompletionnotenabled'] = 'エラー: 活動は追加されましたが、コース完了を有効にできませんでした。';
$string['courseenroldate'] = 'コース登録日からの日数';
$string['courselastaccess'] = '最終コースアクセス日からの日数';
$string['createmailing'] = 'メーリングを作成する';
$string['createnewmailing'] = '新しいメーリングを作成する';
$string['crontask'] = 'Cronタスク';
$string['customcert'] = '証明書';
$string['customcert_help'] = '証明書のすべての要件を満たしたそれぞれのユーザに証明書添付のメールが送信されます。';
$string['custommailingname'] = '名称';
$string['daysafter'] = '日後:';
$string['debugmode'] = 'デバッグモード';
$string['debugmode_help'] = '日単位ではなく分単位でメール送信します。';
$string['disabled'] = '無効';
$string['enabled'] = '有効';
$string['firstlaunch'] = '最初の起動からの日数 (ターゲットモジュール)';
$string['groupcohortscombination'] = 'グループ/コーホートの組み合わせ';
$string['groupcohortscombination_help'] = 'あなたがグループおよびコホートの両方を選択した場合、メールは選択したグループおよびコホートまたはその両方に属するユーザに送信されます。これらの選択を組み合わせる方法を指定するには適切なオプションを選択 してください。';
$string['lastlaunch'] = '最後の起動からの日数 (ターゲットモジュール)';
$string['log_mailing_failed'] = '失敗';
$string['log_mailing_idle'] = '待機中';
$string['log_mailing_processing'] = '処理中';
$string['log_mailing_sent'] = '送信済み';
$string['log_mailing_unknown'] = '不明';
$string['logtable'] = 'ログテーブル';
$string['mailingadded'] = 'メーリングが追加されました。';
$string['mailingcohorts'] = 'コーホート';
$string['mailingcohorts_help'] = 'あなたが希望するコホートを選択ください。なにも選択されていない場合、すべてのコホートにメールが送信されます。';
$string['mailingcontent'] = '本文';
$string['mailingcontent_help'] = 'あなたは次の変数をメールで使用できます:
<ul>
<li>%lastname%</li>
<li>%firstname%</li>
</ul>';
$string['mailingdeleted'] = 'メーリングが削除されました。';
$string['mailinggroups'] = 'グループ';
$string['mailinggroups_help'] = 'あなたが希望するグループを選択してください。なにも選択されていない場合、すべてのグループにメールが送信されます。';
$string['mailinglang'] = '言語';
$string['mailingmailingcohorts'] = 'コーホート';
$string['mailingname'] = '名称';
$string['mailingsubject'] = '件名';
$string['mailingtargetactivitystatuscomplete'] = 'ターゲットモジュール完了';
$string['mailingtargetactivitystatusincomplete'] = 'ターゲットモジュール未完了';
$string['mailingupdated'] = 'メーリングが更新されました。';
$string['module'] = 'Scorm';
$string['modulename'] = 'カスタムメーリング';
$string['modulenameplural'] = 'カスタムメーリング';
$string['pluginadministration'] = 'カスタムメーリング管理';
$string['pluginname'] = 'カスタムメーリング';
$string['privacy:metadata'] = 'カスタムメーリングプラグインはそれぞれのメーリングで送信されたそれぞれのメールの個人ログを保存します。';
$string['privacy:metadata:custommailing_logs'] = 'カスタムメーリングログ';
$string['privacy:metadata:custommailingmailingid'] = 'メーリングID';
$string['privacy:metadata:emailstatus'] = 'メールステータス';
$string['privacy:metadata:emailtouserid'] = 'ユーザID';
$string['privacy:metadata:timecreated'] = '作成日時です。';
$string['privacy:metadata:timemodified'] = '修正日時です。';
$string['retroactive'] = '遡及';
$string['retroactive_help'] = '遡って送信条件を適用します。';
$string['select'] = '選択';
$string['selectsource'] = 'ソース';
$string['sendmailing'] = 'メーリングを送信する';
$string['settings'] = '設定';
$string['starttime'] = '送信時間';
$string['targetactivitynotfound'] = 'ターゲットモジュールが見つかりませんでした。';
$string['targetmoduleid'] = 'ターゲットモジュール';
$string['timecreated'] = '作成日時';
$string['timemodified'] = '修正日時';
$string['updatemailing'] = 'メーリングを更新する';
$string['usermemberofselectedgroupsandselectedcohorts'] = '選択されたグループおよびコーホートのユーザメンバ';
$string['usermemberofselectedgroupsorselectedcohorts'] = '選択されたグループまたはコーホートのユーザメンバ';
