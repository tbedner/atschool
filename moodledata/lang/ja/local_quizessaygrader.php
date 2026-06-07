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
 * Strings for component 'local_quizessaygrader', language 'ja', version '4.4'.
 *
 * @package     local_quizessaygrader
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['defaultcomment'] = '自動';
$string['donate'] = '<div>プラグインバージョン: {$a->release} ({$a->versiondisk})<br>
あなたはプラグインの新しいバージョンを<a href=https://github.com/Snickser/moodle-local_quizessaygrader>GitHub.com</a>で確認可能です。
<img src="https://img.shields.io/github/v/release/Snickser/moodle-local_quizessaygrader.svg"><br>
よろしければ私に<a href="https://yoomoney.ru/fundraise/143H2JO3LLE.240720">寄付</a>をお願い致します。😊</div>
BTC 1GFTTPCgRTC8yYL1gU7wBZRfhRNRBdLZsq<br>
TRX TRGMc3b63Lus6ehLasbbHxsb2rHky5LbPe<br>
ETH 0x1bce7aadef39d328d262569e6194febe597cb2c9<br>
<iframe src="https://yoomoney.ru/quickpay/fundraise/button?billNumber=143H2JO3LLE.240720"
width="330" height="50" frameborder="0" allowtransparency="true" scrolling="no"></iframe>';
$string['dryrun'] = 'テストモード';
$string['dryrun_desc'] = 'スケジュールタスクに影響します。有効である場合、このモードではレポートのみ表示さます。評定転送は実行されません。';
$string['eventmode'] = 'イベントモードを有効にする';
$string['eventmode_desc'] = 'このモードでは学生が課題を提出した直後に評定が処理されます。推奨モードです。';
$string['gradetype'] = '評定タイプ';
$string['gradetype_desc'] = 'コピーする評定、最大評点のみまたはゼロより大きな評点を指定してください。';
$string['log_01'] = '合計処理済みユーザ: {$a}';
$string['log_02'] = '処理完了 ( {$a} 秒)';
$string['log_03'] = 'トランザクションロールバック [テストモード]';
$string['log_04'] = '変更がデータベースに保存されました。';
$string['log_05'] = 'エラー: {$a}';
$string['log_06'] = '評定を正常に転送しました: {$a}';
$string['log_07'] = '受験 {$a->prev} から受験 {$a->last} に評定を転送する';
$string['log_08'] = 'ユーザ: {$a->lastname} {$a->firstname} (ID: {$a->id})';
$string['log_09'] = '小テスト: {$a->name} (ID: {$a->id})';
$string['log_10'] = 'コース: {$a->name} (ID: {$a->id})';
$string['log_11'] = '処理開始: {$a->time}{$a->test}';
$string['log_12'] = '<font color=blue><b>[ テストモード ]</b></font>';
$string['log_13'] = '概要: 作文問題: {$a->total}, 転送: {$a->count}, スキップ (評定存在): {$a->skip}{$a->test}';
$string['log_14'] = '[テストモード]';
$string['log_15'] = 'スロット {$a->slot} エラー: {$a->error}';
$string['log_16'] = '<b>作文 (スロット {$a->slot}): 転送 {$a->grade}/{$a->max}</b>{$a->test}';
$string['log_17'] = '作文 (スロット {$a}): スキップ (すでに評点あり)';
$string['log_18'] = '作文 (スロット {$a->slot}): 評定 {$a->grade} (未転送)';
$string['menumode'] = 'メニューモードを有効にする';
$string['menumode_desc'] = 'コースおよび小テストメニューに評定手動処理へのリンクを追加します。';
$string['pluginmenutitle'] = '小テスト作文評定コピーツール';
$string['pluginname'] = '小テスト作文評定コピーツール';
$string['pluginname_help'] = '教師の仕事を楽にするプラグインでは学生の作文の評定を前回の受験から課題に自動的に引き継げます。スケジュールされたタスクを手動で実行可能にしたり、自動「イベント」モードまたは手動「メニュー」モードを使用できます。';
$string['privacy:metadata'] = 'quizessaygraderローカルプラグインはいかなる個人データも保存しません。';
$string['transferessaygrades'] = '作文評定を転送する';
$string['transferfailed'] = '実行中にエラーが発生しました。';
$string['verbose'] = '冗長出力';
$string['verbose_desc'] = '作業結果に関する拡張情報はスケジュールモードおよびメニューモードで表示されます。';
