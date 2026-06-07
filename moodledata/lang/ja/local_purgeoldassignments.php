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
 * Strings for component 'local_purgeoldassignments', language 'ja', version '4.4'.
 *
 * @package     local_purgeoldassignments
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['areyousure'] = 'この操作はこの課題におけるコンポーネント {$a} から履歴データを削除します。この操作は元に戻せません。データを失うことになります。本当に実行してもよろしいですか？';
$string['component'] = 'コンポーネント';
$string['componentcurrentsize'] = '合計サイズ: {$a}';
$string['componentolderthan1'] = '1年より古い: {$a}';
$string['componentolderthan2'] = '2年より古い: {$a}';
$string['componentolderthan3'] = '3年より古い: {$a}';
$string['enablesheduledpurge'] = 'スケジュール削除を有効にする';
$string['incompleteconfig'] = '一部の変更はスケジュールが設定されていないため保存できませんでした。スケジュールによる削除を有効にしたいそれぞれのコンポーネントに関してチェックボックスをチェックした後、ドロップダウンメニューの「指定期間より古いファイルのスケジュール」の値を設定してください。';
$string['manualpurge'] = '手動削除';
$string['pluginname'] = '古い課題を削除する';
$string['privacy:metadata'] = '古い課題を削除するプラグインはいかなる個人データも保存しません。';
$string['purgefilesolderthan'] = '次より古いファイルを削除する:';
$string['purgeoldassignments:purgeassignments'] = '古い課題を削除する';
$string['purgetriggered'] = '削除処理がスケジュールされました。';
$string['schedulefor'] = '指定期間より古いファイルのスケジュール';
$string['sizeinfo'] = 'サイズ情報';
$string['task:purgeoldassignments'] = '古い課題を削除する';
$string['taskpending'] = '{$a}で削除処理が開始されました。現在完了待ち状態です。';
