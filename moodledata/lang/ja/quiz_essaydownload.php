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
 * Strings for component 'quiz_essaydownload', language 'ja', version '4.4'.
 *
 * @package     quiz_essaydownload
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['byattempt'] = '受験';
$string['byquestion'] = '問題';
$string['errorfilename'] = 'エラー-{$a}.txt';
$string['errormessage'] = '内部エラーが発生しました。アーカイブが不完全な可能性があります。作文問題解答ダウンローダ (quiz_essaydownload) の開発者に連絡して、詳細を以下までお送りください:';
$string['essaydownload'] = '作文問題解答をダウンロードする';
$string['groupby'] = 'グループ化';
$string['groupby_help'] = 'アーカイブは問題ごと、または受験ごとに構成できます:
<ul>
<li>あなたが問題ごとにグループ化する場合、アーカイブにはすべての問題のフォルダが作成されあます。それぞれのフォルダの中にはすべての受験のフォルダが作成されます。</li>
<li>あなたがが受験ごとにグループ化する場合、アーカイブには受験ごとのフォルダが作成され余す。それぞれのフォルダの中にはすべての問題のフォルダが作成されます。</li>
</ul>';
$string['includeattachments'] = '添付ファイルがある場合、添付ファイルを含める';
$string['includequestiontext'] = '問題テキストを含める';
$string['noessayquestion'] = 'この小テストには作文問題が含まれていません。';
$string['nothingtodownload'] = 'ダウンロードするものはありません。';
$string['plugindescription'] = '小テストの作文問題に対して提出された解答テキストおよび添付ファイルをダウンロードします。';
$string['pluginname'] = '作文問題解答ダウンローダ (quiz_essaydownload)';
$string['privacy:metadata'] = '小テスト作文問題解答ダウンローダはいかなる個人データも保存しません。';
