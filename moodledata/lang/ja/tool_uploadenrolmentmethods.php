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
 * Strings for component 'tool_uploadenrolmentmethods', language 'ja', version '4.4'.
 *
 * @package     tool_uploadenrolmentmethods
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cohortnotfound'] = '{$a->line} {$a->linenum} [{$a->oplabel} {$a->method}]: コーホート「 {$a->parentname} 」が見つかりませんでした。{$a->skipped} します。';
$string['csvfile'] = 'CSVファイル';
$string['csvfile_help'] = 'CSVファイルのフォーマットは以下のとおりです:

* 「#」または「;」で始まる行はコメントです。スキップされます。
* ファイルのそれぞれの行には1レコードを含んでください。
* それぞれのレコードは固定した順のカンマ区切りの一連のデータです。
* フィールドは次のとおりです: 処理, 登録方法, ターゲットコースの省略名, 親コースの省略名またはコーホートID, 無効ステータス, グループ名[, ロール]
<br />
add,meta,CS101-2345,Computing-Year3,1,CS101,student
<br />
add,meta,CS102-6789,Computing-Year3,1,,student
<br />
upd,meta,CS101-2344,Computing-Year1,0,CS101,editingteacher
* 下位互換のため、「ロール」フィールド以外はすべて必須です。
*「処理」は「add」「del」(または delete)「upd」(または update) です。
* サポートされる「登録方法」は「meta」および「cohort」です。
*「無効ステータス」は「1」(無効) または「0」(有効) です。
* この方法による学生受講登録は「グループ名」フィールドで指定されたグループに登録されます。グループが存在しない場合、作成されます。
* 「ロール」フィールドには「editingteacher」「student」のような有効なロール名を使用してください。';
$string['heading'] = 'CSVファイルでコース登録方法をアップロードする';
$string['invalidmethod'] = '{$a->line} {$a->linenum} [{$a->oplabel} {$a->method}]: 無効な方法です。';
$string['invalidop'] = '{$a->line} {$a->linenum} [{$a->op} {$a->method}]: 無効な操作です。';
$string['methoddisabledwarning'] = '登録方法「 {$a->methodname} 」: {$a->disabled}';
$string['parentnotfound'] = '{$a->line} {$a->linenum} [{$a->oplabel} {$a->methodname}]: メタコース「 {$a->parentname} 」が見つかりませんでした。{$a->skipped} します。';
$string['pluginname'] = '登録方法アップロード';
$string['pluginname_help'] = '登録方法をCSVファイルでアップロードして同時に複数コースの登録方法を設定します。';
$string['privacy:metadata'] = '登録方法アップロード管理ツールはいかなる個人データも保存しません。';
$string['reladderror'] = '{$a->line} {$a->linenum} [{$a->oplabel} {$a->methodname}]: 「 {$a->targetname} 」({$a->targetid}) の「 {$a->parentname} 」({$a->parentid}) へのリンクにエラーが発生しました。{$a->skipped} します。';
$string['relalreadyexists'] = '{$a->line} {$a->linenum} [{$a->oplabel} {$a->methodname}]: 「 {$a->targetname} 」({$a->targetid}) はすでに「 {$a->parentname} 」({$a->parentid}) にリンクされています。{$a->skipped} します。';
$string['reldoesntexist'] = '{$a->line} {$a->linenum} [{$a->oplabel} {$a->methodname}]: 「 {$a->targetname} 」({$a->targetid}) は「 {$a->parentname} 」({$a->parentid}) にリンクされていないため削除できません。{$a->skipped} します。';
$string['targetisparent'] = '{$a->line} {$a->linenum} [{$a->oplabel} {$a->methodname}]: 「{$a->targetname} 」({$a->targetid}) は「 {$a->parentname} 」({$a->parentid}) の親であるためターゲットに追加できません。{$a->skipped} します。';
$string['targetnotfound'] = '{$a->line} {$a->linenum} [{$a->oplabel} {$a->methodname}]: 不明なコース「 {$a->targetname} 」です。{$a->skipped} します。';
