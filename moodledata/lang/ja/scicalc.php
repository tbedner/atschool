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
 * Strings for component 'scicalc', language 'ja', version '4.4'.
 *
 * @package     scicalc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['calculator_help'] = '式を入力した後、Enter キーまたは「=」を押してください。<br>対応内容:';
$string['calculator_title'] = '計算機';
$string['clear_history'] = '履歴を消去する';
$string['error_arity_mismatch'] = '引数の数が不正です。';
$string['error_factorial_overflow'] = '階乗が数値制限を超えました。';
$string['error_generic'] = '式の評価中にエラーが発生しました。';
$string['error_invalid_expression'] = '計算機が認識できない形式で式が記述されているため、私は計算できませんでした (括弧、記号および<code>sin</code>/<code>sqrt</code>のような関数名を確認してください)。';
$string['error_invalid_factorial'] = '不正な階乗です。';
$string['error_invalid_number'] = '無効な数字です。';
$string['error_invalid_token_flow'] = '無効なトークンフローです。';
$string['error_mismatched_parentheses'] = '閉じ括弧が一致していません。';
$string['error_misplaced_comma'] = 'カンマの位置が不正です。';
$string['error_negative_factorial'] = '負の数の階乗は計算できません。';
$string['error_non_finite_result'] = 'この計算の結果は無限大または非数値 (NaN) でした。あなたがゼロ除算していないか、負の数の平方根のような操作をしていないか確認してください。';
$string['error_non_integer_factorial'] = '階乗は整数の場合にのみ定義されます。';
$string['error_stack_underflow'] = '引数または数値が不足しています。例) <code>+2</code>、<code>2*</code>、<code>2 + ( )</code>、<code>2 +</code>、引数なしの<code>sin()</code>、第2引数が不足している<code>pow(2)</code>。';
$string['error_unclosed_function_call'] = '関数呼び出しが閉じられていません。';
$string['error_unexpected_token'] = '予期しないトークンです。';
$string['error_unknown_identifier'] = '不明な識別子です。';
$string['error_unknown_token'] = '不明なトークンです。';
$string['error_unsupported_function'] = 'サポートされていない関数です。';
$string['error_unsupported_operator'] = 'サポートされていない演算子です。';
$string['error_zero_argument_function_call'] = '関数呼び出しに引数がありません。';
$string['history_title'] = '履歴';
$string['intro'] = '説明';
$string['invalid_expression'] = '無効な式です。';
$string['modulename'] = '科学計算機';
$string['modulenameplural'] = '科学計算機';
$string['pluginadministration'] = '科学計算機管理';
$string['pluginname'] = '科学計算機';
$string['privacy:metadata'] = '科学計算機活動はいかなる個人データも保存しません。';
$string['scicalc:addinstance'] = '新しい科学計算機を追加する';
$string['scicalc:view'] = '科学計算機を表示する';
