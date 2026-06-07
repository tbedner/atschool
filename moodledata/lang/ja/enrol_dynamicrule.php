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
 * Strings for component 'enrol_dynamicrule', language 'ja', version '4.4'.
 *
 * @package     enrol_dynamicrule
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'アクション';
$string['actiondisableenrolment'] = 'エンロールの一時停止';
$string['actiondisableenrolmentremoveroles'] = 'エンロールの一時停止とロールの削除';
$string['actionunenrol'] = 'ユーザをコースからアンエンロールする';
$string['duration'] = '期間';
$string['dynamicrule:config'] = 'ダイナミックルール登録インスタンスの設定';
$string['dynamicrule:enrol'] = 'コースエンロールアクションを使用してユーザを登録する';
$string['dynamicrule:unenrol'] = 'コースのアンエンロールアクションを使用するか、手動でユーザをアンエンロールします。';
$string['enddate'] = '終了日';
$string['errorinvalidaction'] = '無効なアクション';
$string['errorinvalidcoursetoenrol'] = 'エンロールするコースが無効です';
$string['errorinvalidcoursetounenrol'] = 'アンエンロールするコースが無効です';
$string['errorinvaliddurationandenddate'] = '登録終了日または登録期間のどちらかを選択する必要があり、両方を選択することはできません。';
$string['errorinvalidrole'] = '無効なロール';
$string['group'] = 'グループ名';
$string['group_help'] = 'ユーザがメンバーとして追加されるグループ名';
$string['noavailablecoursesenrol'] = 'ダイナミックルール登録メソッドを使用してユーザをエンロールできるコースはありません。';
$string['noavailablecoursesunenrol'] = 'ダイナミックルール登録メソッドを使用してユーザをアンエンロールできるコースはありません。';
$string['outcomecourseenrol'] = 'ユーザをコースへエンロールする';
$string['outcomecourseenroldescription'] = 'コースに登録する \'{$a->coursename}\'<br />
ロール: {$a->role}<br />
グループ: {$a->groupname}';
$string['outcomecourseenroldescriptionwithduration'] = 'コースに登録する \'{$a->coursename}\'<br />
ロール: {$a->role}<br />
グループ: {$a->groupname}<br />
期間: {$a->duration} {$a->durationtype}';
$string['outcomecourseenroldescriptionwithenddate'] = 'コースに登録する \'{$a->coursename}\'<br />
ロール: {$a->role}<br />
グループ: {$a->groupname}<br />
終了日: {$a->enddate}';
$string['outcomecourseunenrol'] = 'ユーザをコースからアンエンロールする';
$string['outcomecourseunenroldescriptionwithmethod'] = 'コース \'{$a->coursename}\' からのアンエンロール<br />
エンロールメソッド: {$a->enrol}<br />
アクション: {$a->action}';
$string['pluginname'] = 'ダイナミックルール';
$string['privacy:metadata'] = 'ダイナミックルールプラグインは、いかなるユーザの個人データも保存しません。';
$string['userwithoutcapability'] = '選択したコースのメソッド \'{$a}\' の登録を解除するケイパビリティが必要です。';
