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
 * Strings for component 'qtype_answersselect', language 'ja', version '4.4'.
 *
 * @package     qtype_answersselect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answersselectmode'] = '正解数および不正解数';
$string['answersselectmode_help'] = '学生に表示される正解および不正解の数を選択してください。重要 - あなたが新しい問題を作成する場合、これらのメニューアイテムを有効にするには「変更を保存して編集を続ける」ボタンをクリックする必要があります。';
$string['automaticselection'] = '自動ランダム選択';
$string['blankspace'] = '空白';
$string['comma'] = 'カンマ';
$string['correctanswer'] = '正解';
$string['correctchoicesseparator'] = '正解表示に使用するセパレータ';
$string['correctchoicesseparator_help'] = '<p>小テストでレビューオプションが選択された場合、このセパレータは学生に表示される正解を分けるために使用されます。</p>
<ul>
<li>カンマは短い正解に使用されるデフォルトのオプションです。</li>
<li>順番に並んだ正解が1つの単語で文を構成している場合、空白を使用してください。</li>
<li>長い正解を見やすく表示するには改行使用してください。</li>
</ul>';
$string['hardsetamountisgreaterthanansweramount'] = '解答数が実際の解答数より多く選択されています。';
$string['hardsetamountofanswers'] = '問題解答数';
$string['hardsetamountofanswers_help'] = '学生に表示される解答の総数です。この数値は解答の変更を保存した後にのみ変更されます。';
$string['hastobeoneincorrectanswer'] = '少なくとも1つの不正解を追加してください。';
$string['hastobeoneincorrectanswer_help'] = 'このオプションではランダムに選択された解答「プール」に少なくとも1つの不正解があることを保証します。';
$string['linebreak'] = '改行';
$string['manualselection'] = '手動選択';
$string['notenoughcorrectanswers'] = 'あなたは少なくとも1つの正しい選択肢を選択する必要があります。';
$string['nrandomanswersselection'] = 'ランダム解答選択数';
$string['pluginname'] = 'ランダム解答選択';
$string['pluginname_help'] = '複数選択肢問題および複数解答問題の正解・不正解の「プール」からランダムに選択できます。';
$string['pluginname_link'] = 'question/type/answersselect';
$string['pluginnameadding'] = 'ランダム解答選択問題を追加する';
$string['pluginnameediting'] = 'ランダム解答選択問題を編集する';
$string['pluginnamesummary'] = '<p>特定の評定ルールがある多肢選択および複数解答の問題タイプです。</p>
<p>あなたの問題に正解および不正解の「プール」があり、そこから実行時に設定された数を選択できる場合にお勧めします。</p>';
$string['privacy:metadata'] = 'ランダム選択解答プラグインはいかなる個人データも保存しません。';
$string['randomselectcorrect'] = '正解数';
$string['randomselectcorrect_help'] = '学生に表示される正解の数です。';
$string['randomselectincorrect'] = '不正解数';
$string['randomselectincorrect_help'] = '学生に表示される不正解の数です。';
$string['showeachanswerfeedback'] = '選択した解答に対するフィードバックを表示します。';
$string['showstandardinstruction'] = '標準インストラクションを表示する';
$string['showstandardinstruction_help'] = 'この設定を有効にした場合、標準的なインストラクションが選択領域の一部として提供されます (例:「1つまたはそれ以上を選択してください」)。この設定を無効にした場合、問題作成者は必要に応じて問題コンテンツにインストラクションを含めます。';
$string['toomanyoptions'] = 'あなたは選択肢を選択しすぎています。';
$string['useallanswers'] = 'すべての答えを使用する (デフォルトモード)';
$string['yougot1right'] = 'あなたは正しく次の選択肢数を選択しました: 1';
$string['yougotnright'] = 'あなたは正しく次の選択肢数を選択しました: {$a->num}';
