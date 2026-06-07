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
 * Strings for component 'filter_resumebutton', language 'ja', version '4.4'.
 *
 * @package     filter_resumebutton
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['filtername'] = '再開ボタンショートコード';
$string['pluginname'] = '再開ボタンショートコードフィルタ';
$string['privacy:metadata'] = '再開ボタンフィルタプラグインはコア機能で処理されるコースコンテクストおよびユーザ進捗状況を使用してショートコードベースのナビゲーションボタンをレンダリングするのみであるため、いかなる個人データも保存しません。';
$string['usageinstructions_desc'] = 'あなたは以下のショートコードをMoodleコンテンツ (ページ、ラベル、HTMLブロック等) の任意の場所に追加して再開/開始ボタンを表示できます:
<br><br>
<b>[resumebutton courseid=COURSEID]</b> – コースレベルの再開ボタンを表示します。
<br>
<b>[resumebutton courseid=COURSEID sectionid=SECTIONID]</b> – セクションレベルの再開ボタンを表示します。
<br>
<b>[resumebuttons courseid=COURSEID]</b> – 指定したコースのすべてのセクションボタンを表示します。
<br><br>
「<code>courseid</code>」が指定されていない場合、現在のコースコンテクストを自動検出します。';
$string['usageinstructions_title'] = '使用方法';
