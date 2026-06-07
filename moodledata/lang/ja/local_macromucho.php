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
 * Strings for component 'local_macromucho', language 'ja', version '4.4'.
 *
 * @package     local_macromucho
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['gradeadjusted'] = '評点 {$a}% は最も近いオプションに調整されました。';
$string['help_multichoice'] = '<ul>
<li>すべての解答の選択肢に2つのカラムを追加してください。1つは解答テキスト、もう1つは評点です。</li>
<li>あなたは解答の評点を100から-100まで手動で入力するか、正解に「x」、不正解に「f」を使用してそれぞれ100または-100に自動的に追加できます</li>
<li>単一選択の場合、少なくとも1つの解答に100の評点が必要であり、多肢選択の場合、すべての正解の評点合計が100になる必要があります。</li>
</ul>';
$string['help_multichoiceset'] = '<ul>
<li>想定されるすべての解答に2つのカラムを追加してください。1つは解答テキスト、もう1つは評点です。</li>
<li>正解には「x」マークを使用してください。</li>
<li>あなたは最大50個まで解答の選択肢を追加できます。</li>
</ul>';
$string['help_oumultiresponse'] = '<ul>
<li>想定されるすべての解答に2つのカラムを追加してください。1つは解答テキスト、もう1つは評点です。</li>
<li>正解には「x」マークを使用してください。</li>
<li>あなたは最大50個まで解答の選択肢を追加できます。</li>
</ul>';
$string['help_truefalse'] = '<ul>
<li>4番目のカラムでは真の文には「t」、偽の文には「f」を入力してください。</li>
</ul>';
$string['howtouse'] = '<ol>
<li>ドロップダウンから問題タイプを選択してください (異なる問題タイプの比較は<a href="https://moodle.technikum-wien.at/course/view.php?id=5682#multichoice">こちら</a>をご覧ください)。</li>
<li>インポートフィールドのコンテンツをあなたの好きなスプレッドシートプログラム (Microsoft Excel等) にコピー/ペーストしてください。</li>
<li>問題例を削除してあなたが希望する数の問題行を入力してください。</li>
<li>すべてのデータをあなたのスプレッドシートからインポートフィールドにコピー/ペーストして「送信」をクリックしてください。</li>
</ol>
最初の3つのカラムはすべての問題タイプで同じです - 問題名、問題テキストおよびデフォルト評点。<br /><br  />
解答のシャッフルはサポートするすべての問題で自動的に有効にされます。';
$string['howtouselabel'] = '使用方法';
$string['importdata_copypastebutton'] = 'クリップボードにコピーする';
$string['importdata_description'] = 'インポートフィールド';
$string['importdata_multichoice'] = '問題名	問題テキスト	デフォルト評点	解答1	評点	解答2	評点	解答3	評点	解答4	評点	解答5	評点	解答6	評点	解答7	評点
多肢選択例1	自動評定計算例	1	正しい解答テキスト	x	正しい解答テキスト	X	正しい解答テキスト	x	正しい解答テキスト	x	間違った解答テキスト	f	間違った解答テキスト	f	間違った解答テキスト	f
多肢選択例2	手動評定設定例	1	正しい解答テキスト	50	正しい解答テキスト	50	中立解答テキスト	0	Very 間違った解答テキスト	-100	間違った解答テキスト	-50	間違った解答テキスト	-50
多肢選択例3	両方の混在例	1	正しい解答テキスト	x	正しい解答テキスト	x	中立解答テキスト	0	間違った解答テキスト	-100
単一選択例1	自動評定計算例	1	正しい解答テキスト	X	間違った解答テキスト	f	間違った解答テキスト	f	間違った解答テキスト	f	間違った解答テキスト	f	間違った解答テキスト	f	間違った解答テキスト	f
単一選択例2	手動評定設定例	1	正しい解答テキスト	100	正しい解答テキスト	100	正しい解答テキスト	100	間違った解答テキスト	f	間違った解答テキスト	f	間違った解答テキスト	f	間違った解答テキスト	f
単一選択例3	マイナス評定手動設定可	1	正しい解答テキスト	X	間違った解答テキスト	-50	間違った解答テキスト	-25	間違った解答テキスト	-10	間違った解答テキスト	-100';
$string['importdata_multichoiceset'] = '問題名	問題テキスト	デフォルトで正解?	解答1	正解?	解答2	正解?	解答3	正解?	解答4	正解?	解答5	正解?	解答6	正解?	解答7	正解?	解答8	正解?	解答9	正解?
All-or-nothing 1	この問題には2つの正解があります。	1	正しい解答テキスト	x	間違った解答テキスト		間違った解答テキスト		間違った解答テキスト		正しい解答テキスト	x
All-or-nothing 2	この問題には4つの正解があります。	1	間違った解答テキスト		正しい解答テキスト	x	間違った解答テキスト		正しい解答テキスト	x	間違った解答テキスト		間違った解答テキスト		正しい解答テキスト	x	正しい解答テキスト	x	間違った解答テキスト
All-or-nothing 3	この問題には7つの正解があります。	1	正しい解答テキスト	x	正しい解答テキスト	x	正しい解答テキスト	x	正しい解答テキスト	x	正しい解答テキスト	x	正しい解答テキスト	x	正しい解答テキスト	x';
$string['importdata_oumultiresponse'] = '問題名	問題テキスト	デフォルトで正解?	解答1	正解?	解答2	正解?	解答3	正解?	解答4	正解?	解答5	正解?	解答6	正解?	解答7	正解?	解答8	正解?	解答9	正解?
OU MR例1	この問題には2つの正解があります。	1	正しい解答テキスト	x	間違った解答テキスト		間違った解答テキスト		間違った解答テキスト		正しい解答テキスト	x
OU MR例2	この問題には4つの正解があります。	1	間違った解答テキスト		正しい解答テキスト	x	間違った解答テキスト		正しい解答テキスト	x	間違った解答テキスト		間違った解答テキスト		正しい解答テキスト	x	正しい解答テキスト	x	間違った解答テキスト
OU MR例3	この問題には7つの正解があります。	1	正しい解答テキスト	x	正しい解答テキスト	x	正しい解答テキスト	x	正しい解答テキスト	x	正しい解答テキスト	x	正しい解答テキスト	x	正しい解答テキスト	x';
$string['importdata_truefalse'] = '問題名	問題テキスト	デフォルト評点	○/×
○/×問題例1	この文は「正」です。	1	t
○/×問題例2	この文は「偽」です。	1	f';
$string['importerror'] = 'パラメータが不足しています - 問題をスキップします。';
$string['importresult'] = 'インポート結果';
$string['importsuccess'] = '正常にインポートされました。';
$string['importtotalerror'] = 'エラー:';
$string['importtotalsuccess'] = '正常インポート済み問題:';
$string['infolabel'] = '説明';
$string['infotext'] = 'このユーティリティにより、あなたは好きなスプレッドシートプログラムで大量の多肢選択問題を簡単に作成してMoodle問題バンクに直接インポートできます。';
$string['pluginname'] = '多肢選択問題一括作成';
$string['pluginname_help'] = '異なる問題タイプの多肢選択問題を簡単かつ迅速に一括作成できます。';
$string['pluginnameadding'] = '<b>多肢選択問題一括作成</b>';
$string['pluginnamesummary'] = '異なる問題タイプの多肢選択問題を簡単かつ迅速に一括作成できます。';
$string['privacy:metadata'] = '多肢選択問題一括作成プラグインはいかなる個人データも保存しません。';
$string['toomanycorrect'] = 'この問題タイプでは自動計算される評点の最大正解数が10個に設定されています。合計100の評点を手動で入力するか、問題タイプ「OU多肢解答」を使用してください。';
$string['toomanyincorrect'] = 'Moodleではこの問題タイプに制限された評定オプションを提供しているため、10個以上の不正解がある場合、評点計算が不正確になる場合があります。';
