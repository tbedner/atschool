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
 * Strings for component 'qtype_multichoiceset', language 'ja', version '4.4'.
 *
 * @package     qtype_multichoiceset
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['correctanswer'] = '正解';
$string['deletedchoice'] = 'この選択肢は受験開始後に削除されました。';
$string['errnocorrect'] = 'この問題で満点を取得できるよう少なくとも1つの選択肢は正解にする必要があります。';
$string['pluginname'] = 'オールオアナッシング多肢選択問題';
$string['pluginname_help'] = '任意の導入説明の後、解答者は1つ以上の答えを選択できます。 選択された答えが問題で定義されている「正しい」選択肢と完全に一致する場合、解答者は100%の評点を取得します。「不正解」の選択肢を選択した場合、または「正解」の選択肢すべてを選択しなかった場合、評点は0%となります。それぞれの問題で少なくとも1つの選択肢に「正解」のマークがついている必要があります。 他の選択肢がどれも正しくない場合、「上のどれにも当てはまらない」オプションを追加してください。 小数の評点のある多肢選択問題とは異なり、オールオアナッシング問題で可能な評点は100%または0%のみです。';
$string['pluginname_link'] = 'question/type/multichoiceset';
$string['pluginnameadding'] = 'オールオアナッシング多肢選択問題を追加する';
$string['pluginnameediting'] = 'オールオアナッシング多肢選択問題を編集する';
$string['pluginnamesummary'] = '事前定義リストから複数の解答を選択できるようにしてオールオアナッシングの評定 (100%または0%) を使用します。';
$string['privacy:metadata'] = 'オールオアナッシング多肢選択問題はいかなる個人データも保存しません。';
$string['showeachanswerfeedback'] = '選択された解答のフィードバックを表示します。';
$string['showstandardinstruction'] = '標準インストラクションを表示する';
$string['showstandardinstruction_help'] = 'オールオアナッシング多肢選択問題の解答の前に「1つまたはそれ以上選択してください」というインストラクションを表示するかどうか設定します。';
