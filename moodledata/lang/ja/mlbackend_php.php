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
 * Strings for component 'mlbackend_php', language 'ja', version '4.4'.
 *
 * @package     mlbackend_php
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['datasetsizelimited'] = 'サイズにより一部の評価データセットのみ評価されました。あなたのシステムが {$a} データセットを処理できるという自信がある場合のみ「$CFG->mlbackend_php_no_memory_limit」を設定してください。';
$string['errorcantloadmodel'] = 'モデルファイル {$a} が存在しません。予測に使用する前にモデルが訓練されている必要があります。';
$string['errorlowscore'] = '評価モデルの予測精度があまり高くありません。そのため、いくつかの予測が正確ではありません。モデルスコア = {$a->score}、最小スコア = {$a->minscore}';
$string['errornotenoughdata'] = 'この分析間隔を使用してこのモデルを評価するための十分なデータがありません。';
$string['errornotenoughdatadev'] = '評価結果が多様すぎます。モデルが有効であるか確認するためさらにデータを収集することをお勧めします。評価結果標準偏差 = {$a->deviation}、最大推奨標準偏差 = {$a->accepteddeviation}';
$string['errorphp7required'] = 'PHP機械学習バックエンドにはPHP 7が必要です。';
$string['pluginname'] = 'PHP機械学習バックエンド';
$string['privacy:metadata'] = 'PHP機械学習バックエンドプラグインはいかなる個人データも保存しません。';
