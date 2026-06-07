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
 * Strings for component 'quiz_outline', language 'ja', version '4.4'.
 *
 * @package     quiz_outline
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allattempts'] = 'すべての受験を表示する';
$string['allattemptscontributetograde'] = 'すべての受験がユーザの最終評点に貢献します。';
$string['allstudents'] = 'すべての {$a} を表示する';
$string['approved'] = '承認済み';
$string['attemptsmade'] = '受験回数';
$string['attemptsonly'] = '受験のみで {$a} を表示する';
$string['attemptsprepage'] = 'ページあたりの受験数';
$string['attemptsremaining'] = '残り受験回数';
$string['attemptstotal'] = '許可される受験回数';
$string['deleteselected'] = '選択された受験を削除する';
$string['done'] = '完了';
$string['err_failedtodeleteregrades'] = '計算済み受験評点の削除に失敗しました。';
$string['err_failedtorecalculateattemptgrades'] = '受験評点の再計算に失敗しました。';
$string['gradepass'] = '合格点';
$string['highlightinggraded'] = '最終評点に貢献するユーザの受験が強調表示されます。';
$string['inprogress'] = '進行中';
$string['needed'] = '必要';
$string['noattemptsonly'] = '未受験の {$a}  のみ表示/ダウンロードする';
$string['noattemptstoregrade'] = '要再評定の受験はありません。';
$string['nogradepermission'] = 'あなたにはこの小テストを評定するパーミッションがありません。';
$string['notapproved'] = '不合格';
$string['notstarted'] = '未受験';
$string['onlyoneattemptallowed'] = 'この小テストを受験できるのは1ユーザにつき1回のみです。';
$string['optallattempts'] = 'すべての受験';
$string['optallstudents'] = '小テストを受験した {$a} 名および受験していない人すべて';
$string['optattemptsonly'] = '小テストを受験した {$a} 名';
$string['optnoattemptsonly'] = '小テストを受験していない {$a} 名';
$string['optonlyregradedattempts'] = '再評定済み / 要再評定マーク済み';
$string['outline'] = 'アウトライン';
$string['outlinedownload'] = 'アウロラインダウンロード';
$string['outlinefilename'] = '評点';
$string['outlinereport'] = '評定レポート';
$string['outlinereportgraph'] = '評点範囲を達成した学生数';
$string['outlinereportgraphgroup'] = '評点範囲を達成したグループ「 {$a} 」の学生数';
$string['pagesize'] = 'ページサイズ';
$string['passed'] = '合格';
$string['pluginname'] = 'アウトライン';
$string['preferencespage'] = 'このページのみのプレファレンス';
$string['preferencessave'] = 'レポートを表示する';
$string['preferencesuser'] = 'このレポートに関するあなたのプレファレンス';
$string['privacy:metadata:preference:quiz_outline_slotmarks'] = '各問題スロットに評点を表示するかどうか指定します。';
$string['privacy:preference:slotmarks:no'] = '評点は問題スロットの横には表示されません。';
$string['privacy:preference:slotmarks:yes'] = '評点は問題スロットの横に表示されます。';
$string['regrade'] = '再評定';
$string['regradeall'] = 'すべてを再評定する';
$string['regradealldry'] = 'フル再評定をドライランする';
$string['regradealldrydo'] = '要再評定とマークされた受験を再評定する ({$a})';
$string['regradealldrydogroup'] = 'グループ「 {$a->groupname} 」で要再評定とマークされた受験 ({$a->countregradeneeded}) を再評定する';
$string['regradealldrygroup'] = 'グループ「 {$a->groupname} 」のフル再評定をドライランする';
$string['regradeallgroup'] = 'グループ「 {$a->groupname} 」をフル再評定する';
$string['regradecomplete'] = '再評定完了';
$string['regradedsuccessfullyxofy'] = '再評定完了 ({$a->done}/{$a->count})';
$string['regradeheader'] = '再評定中';
$string['regradeselected'] = '選択された受験を再評定する';
$string['regradingattemptissue'] = 'スロット {$a->slot}: {$a->reason}';
$string['regradingattemptxofy'] = '受験再評定中 ({$a->done}/{$a->count})';
$string['regradingattemptxofyproblem'] = '受験 {$a->attemptnum} by {$a->name} (id {$a->attemptid}) の次の問題は再評定できませんでした。';
$string['regradingattemptxofywithdetails'] = '受験 ({$a->done}/{$a->count}) を再評定する - 受験 {$a->attemptnum} by {$a->name} (id {$a->attemptid})';
$string['show'] = '表示/ダウンロード';
$string['showattempts'] = '受験表示のみ / 受験をダウンロードする';
$string['showdetailedmarks'] = '各問題の評点';
$string['showinggraded'] = '各ユーザの評定済み受験のみ表示します。この小テストの評定方法は次のとおりです:{$a}';
$string['showinggradedandungraded'] = '各ユーザの評定済みおよび未評定の受験が表示されます。各ユーザの評定された1回の受験が強調表示されます。この小テストの評定方法は次のとおりです:{$a}';
$string['status'] = 'ステータス';
$string['studentingroup'] = 'グループ「 {$a->coursestudent} 」の「 {$a->coursestudent} 」';
$string['studentingrouplong'] = 'このグループの「 {$a->coursestudent} 」';
