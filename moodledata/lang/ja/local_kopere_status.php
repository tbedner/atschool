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
 * Strings for component 'local_kopere_status', language 'ja', version '4.4'.
 *
 * @package     local_kopere_status
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['day'] = '1 日';
$string['days'] = '{$a} 日';
$string['down'] = '停止中';
$string['intervalminutes'] = 'チェック間隔 (分)';
$string['intervalminutes_desc'] = 'チェックサイクル間の最小間隔時間です。スケジュールタスクはこの値で自身をコントロールします。';
$string['lastcheck'] = '最終確認日時';
$string['minute'] = '1 分';
$string['minutes'] = '{$a} 分';
$string['modules'] = 'モジュール';
$string['modules_desc'] = '1行に1つのモジュールを入力してください。それぞれの行は異なるステータス用に複製されます。例) あなたが「Enrollment」および「Support」(1行1つずつ) を入力した場合、ステータスは「Enrollment」および「Support」に対してのみ表示されます。';
$string['nodata'] = 'まだデータはありません。';
$string['overall_down'] = 'システム利用不可';
$string['overall_operational'] = 'すべてのシステム稼働中';
$string['pluginname'] = 'システムステータス';
$string['privacy:metadata'] = 'システムステータスプラグインはいかなる個人データも保存しません。';
$string['publiclink'] = '公開テータスページ';
$string['publictitle'] = '公開タイトル';
$string['publictitle_desc'] = '公開テータスページで表示されるタイトルです。';
$string['retentiondays'] = '保持期間 (日数)';
$string['retentiondays_desc'] = '指定した日数より古い時間単位のロールアップ集計行を削除します。それぞれのロールアップ後に生ログも削除されます (次回集計のため現在の時間分のみ保持します)。';
$string['statuspagedays'] = 'ステータスページ日数';
$string['statuspagedays_desc'] = 'ステータスページに表示する日数です (1 ～ 7日から選択してください)。';
$string['task_hourly_rollup'] = 'ステータスボード毎時ロールアップおよびクリーンアップ';
$string['up'] = '稼働中';
