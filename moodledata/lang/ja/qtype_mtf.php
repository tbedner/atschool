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
 * Strings for component 'qtype_mtf', language 'ja', version '4.4'.
 *
 * @package     qtype_mtf
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeduction'] = 'ペナルティ減点を許可する';
$string['allowdeduction_help'] = 'この設定を有効にした場合、教師は誤答に対して減点するよう問題を設定できます。この設定を無効にした場合、このオプションは利用できません。例) 教育機関がこの問題タイプでのペナルティを希望しない場合。「部分点 (減点あり)」がデフォルトの評定方法として設定されている場合、このオプションは無効にできません。';
$string['answernumbering'] = '選択肢に番号を付けますか?';
$string['answernumbering123'] = '1., 2., 3., ...';
$string['answernumberingABCD'] = 'A., B., C., ...';
$string['answernumberingIIII'] = 'I., II., III., ...';
$string['answernumberingabc'] = 'a., b., c., ...';
$string['answernumberingiii'] = 'i., ii., iii., ...';
$string['answernumberingnone'] = 'ナンバリングなし';
$string['answersingleno'] = '複数解答';
$string['cannotusedeductions'] = '有効な評定方法を設定してください。';
$string['clearrow'] = '行 {$a} の解答をクリアする';
$string['configintro'] = '複数〇×問題のデフォルト値です。';
$string['configscoringmethod'] = '複数〇×問題のデフォルト評定方法';
$string['configshuffleanswers'] = '複数〇×問題における選択肢シャッフルのデフォルト設定です。';
$string['correctresponse'] = '正しい解答';
$string['deduction'] = '不正解の場合の減点';
$string['deduction_help'] = '誤答に対して減点されるペナルティをそのアイテムの評点の何分の1かで示してください。部分点方式を使用する場合のみ有効です。';
$string['deletedchoice'] = 'この選択肢は受験開始後に削除されました。';
$string['deleterawswarning'] = '選択肢数を下げた場合、余分な選択肢は削除されます。本当に続けてもよろしいですか?';
$string['enterfeedbackhere'] = 'ここにフィードバックを入力してください。';
$string['entergeneralfeedbackhere'] = 'ここに全般的なフィードバックを入力してください。';
$string['enteroptionhere'] = '&nbsp;';
$string['enterstemhere'] = 'ここにステムまたは問題文を入力してください。';
$string['false'] = '×';
$string['feedbackforoption'] = 'フィードバック:';
$string['generalfeedback'] = '全般的なフィードバック';
$string['generalfeedback_help'] = '選択された解答に関係なく、同じ全般的なフィードバックが表示されます。
<br>
正解の説明または追加情報リンクを学生に提供する等、全般的なフィードバックを使用します。';
$string['incorrect'] = '不正解';
$string['invaliddeduction'] = '減点は0から1までの浮動小数点にする必要があります。';
$string['maxpoints'] = '最大評点';
$string['mustdeleteextrarows'] = 'MTFの最大許容オプションは5つです。{$a} オプションは削除されます。あなたが保存せずに編集をキャンセルした場合、余分なオプションは保持されます。';
$string['mustsupplyresponses'] = 'あなたはすべての解答に対して値を指定する必要があります。';
$string['mustsupplyvalue'] = 'あなたはここで値を指定する必要があります。';
$string['notenoughanswers'] = 'このタイプの問題には少なくとも {$a} の選択肢が必要です。';
$string['numberchoicehaschanged'] = '選択肢数が変更されました。問題受験は再評定できません。';
$string['numberofrows'] = '選択肢数';
$string['numberofrows_help'] = '選択肢数を指定してください。少ない選択肢に変更した場合、アイテム保存時に余分な選択肢は削除されます。';
$string['oneanswerperrow'] = '問題のすべての部分に解答してください。';
$string['optionno'] = 'オプション {$a}';
$string['optionsandfeedback'] = 'オプションおよびフィードバック';
$string['pluginname'] = '複数〇× (ETH)';
$string['pluginname_help'] = '受験者は問題文に対して選択肢を「〇」「×」等の提示された基準に従って評価する必要があります。';
$string['pluginname_link'] = 'question/type/mtf';
$string['pluginnameadding'] = '複数〇×問題を追加する';
$string['pluginnameediting'] = '複数〇×問題を編集する';
$string['pluginnamesummary'] = '複数〇×問題 (「タイプX」) ではいくつかの選択肢を「〇」または「×」として正しく評価する必要があります。';
$string['privacy:metadata'] = 'MTF問題タイププラグインはいかなる個人データも保存しません。';
$string['responsedesc'] = '解答 {$a} のデフォルトとして使用されるテキストです。';
$string['responseno'] = '解答 {$a}';
$string['responsetext'] = '解答テキスト {$a}';
$string['responsetext1'] = '〇';
$string['responsetext2'] = '×';
$string['responsetexts'] = '判定オプション';
$string['save'] = '保存';
$string['scoringmethod'] = '評定方法';
$string['scoringmethod_help'] = '以下、3つの評定方法があります。
<br>
<strong>部分点</strong> (推奨): 学生にはそれぞれの正解に対して部分点が付与されます。
<br>
<strong>部分点 (減点あり)</strong>: 学生にはそれぞれの正解に対して部分点が付与されますが、不正解に対しては減点されます。この方法は管理者による事前の有効化が必要です。
<br<
strong>MTF1/0</strong>: 学生にはすべての解答が正しければ満点、そうでない場合は0点が付与されます。';
$string['scoringmtfonezero'] = 'MTF1/0';
$string['scoringmtfonezero_help'] = '学生にはすべての解答が正しければ満点、そうでない場合は0点が付与されます。';
$string['scoringsubpointdeduction'] = '部分点 (減点あり)';
$string['scoringsubpointdeduction_help'] = '学生には正解するごとに部分点が付与されますが、不正解の場合は減点されます。';
$string['scoringsubpoints'] = '部分点';
$string['scoringsubpoints_help'] = '学生には正解するごとに部分点が付与されます。';
$string['showscoringmethod'] = '評定方法を表示する';
$string['showscoringmethod_help'] = 'この設定を有効にした場合、学生にテストの評定方法が提示されます。';
$string['shuffleanswers'] = 'シャッフルオプション';
$string['shuffleanswers_help'] = 'この設定を有効にした場合、受験ごとに選択肢の順番がランダムにシャッフルされます。活動設定の「問題内部をシャッフルする」も有効にしてください。';
$string['stem'] = 'ステム';
$string['tasktitle'] = 'タスクタイトル';
$string['true'] = '正解';
