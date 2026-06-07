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
 * Strings for component 'quiz_export', language 'ja', version '4.4'.
 *
 * @package     quiz_export
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncbulk'] = '非同期一括エクスポートを有効にする';
$string['asyncbulkdesc'] = 'この設定を有効にした場合、一括PDFエクスポート (ZIP) はスケジュールされたタスクによりバックグラウンドで処理されます。ファイルのダウンロードが可能となった時点でユーザに通知が届きます。';
$string['asyncsingle'] = '非同期単一エクスポートを有効にする';
$string['asyncsingledesc'] = 'この設定を有効にした場合、個々のPDFエクスポートはスケジュールされたタスクによりバックグラウンドで処理されます。ファイルのダウンロードが可能となった時点でユーザに通知が届きます。';
$string['documenttitle'] = '{$a->coursename} <br> {$a->quizname} <br> - <br> {$a->lastname} {$a->firstname} の受験結果概要';
$string['downloadexport'] = 'エクスポートをダウンロードする';
$string['export'] = '小テストエクスポート';
$string['exportattempt'] = '受験をエクスポートする';
$string['exportattemptcheck'] = '選択した受験をエクスポートしますか?';
$string['exportcomplete'] = 'あなたの小テストエクスポートがダウンロード可能となりました。';
$string['exportcompletesubject'] = '小テストエクスポート準備完了';
$string['exportdate'] = '日付';
$string['exportdownload'] = 'ダウンロード';
$string['exportfilename'] = 'ファイル名';
$string['exportfilesize'] = 'サイズ';
$string['exportmodequestionperpage'] = '1ページあたり1問題';
$string['exportmodesinglepage'] = '1ページにすべての問題';
$string['exportmodetruepage'] = '実際の問題ページ割り当て';
$string['exportpending'] = 'エクスポート準備中 ...';
$string['exportqueued'] = 'あなたのエクスポート準備中です。準備完了次第、あなたに通知が届きます。';
$string['exportreport'] = '小テストエクスポート設定';
$string['exportselected'] = '選択した受験をエクスポートする';
$string['exportsettings'] = 'エクスポート設定';
$string['exportstatus'] = 'ステータス';
$string['exportstatuscomplete'] = '完了';
$string['exportstatusinprogress'] = '処理中';
$string['exportstatuspending'] = '保留';
$string['messageprovider:exportcomplete'] = '小テストエクスポート完了通知';
$string['noexportsyet'] = 'まだエクスポートは生成されていません。';
$string['pagemode'] = 'ページモード (PDF変換前に小テストレビューを表示する際の改ページモード)';
$string['pluginname'] = '小テストエクスポート';
$string['previousexports'] = '前回のエクスポート';
$string['retentiondays'] = 'エクスポート保持期間 (日数)';
$string['retentiondaysdesc'] = '自動削除されるまでのエクスポートファイル保存日数です。「0」に設定した場合、ファイルは無期限に保存されます。デフォルトは「30」日です。';
$string['taskcleanupexports'] = '期限切れの小テストエクスポートファイルを削除する';
$string['taskexportattempts'] = '小テスト受験をPDFとして一括エクスポートする';
$string['taskexportsingle'] = '小テスト受験を単一PDFとしてエクスポートする';
$string['timelimit'] = 'PDF生成時のPHP時間制限';
$string['timelimitdesc'] = 'PDF生成に許容される最大実行時間 (秒) です。大規模な小テストでPDFエクスポートがタイムアウトする場合、この値を増やしてください。制限なしにしたい場合、「0」に設定してください (非推奨)。デフォルト: 600秒 (10分)。';
$string['unplacedlabels'] = '未配置ラベル:';
