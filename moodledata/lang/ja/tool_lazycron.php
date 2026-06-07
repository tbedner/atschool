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
 * Strings for component 'tool_lazycron', language 'ja', version '4.4'.
 *
 * @package     tool_lazycron
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configoverride'] = 'スケジュールタスクの高度な設定';
$string['configoverride_desc'] = 'Lazy cronが有効にされている場合でも、この設定でユーザが特定のスケジュールタスクを実行できるようにします。
Moodle 3.11+のみに適用されます。あなたがすでに<code>config.php</code>に<code>$CFG->scheduled_tasks</code>を設定している場合、この設定は無視されます。';
$string['enabled'] = '有効';
$string['enabled_desc'] = 'この設定を有効にした場合、プラグイン機能が有効にされます。';
$string['introduction'] = 'イントロダクション';
$string['introduction_desc'] = 'このプラグインではMoodle cronに新しい機能を提供します。

この設定を有効および適切に設定した場合、サイト利用コストを節約できます。
このアイデアは利用者の少ないサイトでの実行を防ぐことです。もし、少数のユーザがログインしてプラットフォーム内でタスクを実行している場合、通常、cronを実行する理由はありません。';
$string['lastcronrun'] = '最終cron実行';
$string['lastcronrun_desc'] = '最後cron実行からの時間がこの設定で定義された時間より短い場合、クーロンを実行しません。';
$string['lastuserlogin'] = '最終ユーザログイン';
$string['lastuserlogin_desc'] = '最終ユーザログインからの時間がこの設定で定義された時間より長い場合、cronを実行しません。';
$string['override'] = 'タスクオーバーライド';
$string['override_desc'] = 'Lazy cronが有効にされている場合、デフォルトではスキップ条件が満たされた場合 (例 スケジュールタスクが存在しない) にcronは実行されません。Lazy cronが有効にされている場合でも、実行するスケジュールタスクを選択してください。';
$string['pluginname'] = 'Lazy cron';
$string['privacy:metadata'] = 'Lazy cronプラグインはいかなる個人データも保存しません。';
