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
 * Strings for component 'tool_driprelease', language 'ja', version '4.4'.
 *
 * @package     tool_driprelease
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiespersession'] = 'セッションあたりの活動';
$string['activitiespersession_help'] = '例えば「セッションあたりの活動」を「5」に設定して、「セッションの長さ」を「7 (日)」に設定した場合、学生には1週間に5つの活動が表示されます。';
$string['activitiespersession_text'] = 'それぞれのセッションで利用可能な活動数を設定してください。例えばセッションが1週間の場合、「5」で1日1回となります。';
$string['activitiespersessionerror'] = 'セッションあたりの活動は {$a->activitiespersession}ですが、コースには {$a->modulecount} の活動しかありません。';
$string['activity'] = '活動';
$string['activitytype'] = '活動タイプ';
$string['assignment'] = '課題';
$string['coursegroups'] = 'コースグループ';
$string['coursesettingnogroups'] = 'このコースはグループなしに設定されています。';
$string['courshasnogroups'] = 'このコースにグループはありません。';
$string['displaydisabled'] = '無効を表示する';
$string['displaydisabled_help'] = '利用できないアイテムが表示されますが、ユーザはそのアイテムをクリックできません。';
$string['driprelease:view'] = 'コースのドリップリリースを表示する';
$string['dripreleaseforcourse'] = 'コースのドリップリリース';
$string['from'] = '開始';
$string['hideunselected'] = '未選択を秘匿する';
$string['hideunselected_help'] = '未選択のアイテムは評定表も含めて学生から秘匿されます。';
$string['hideunselected_text'] = '未選択のコースモジュールは秘匿されます。';
$string['nomodulesincourse'] = 'コース内にモジュールはありません。';
$string['noselections'] = 'アイテム未選択, 利用可能な更新なし';
$string['pluginname'] = 'ドリップリリース';
$string['privacy:null_reason'] = 'ドリップリリース管理ツールはデータそのものに影響を与えることも、保存することもありません。';
$string['questioncount'] = '問題数';
$string['refresh'] = 'リフレッシュ';
$string['resetunselected'] = '未選択にリセットする';
$string['resetunselected_help'] = '未選択アイテムの可用性設定をクリアします。';
$string['schedulefinish'] = '終了';
$string['schedulestart'] = '開始';
$string['schedulestart_help'] = '活動可能な期間/間隔をここで設定してください。まず最初に「開始:」セクションで活動サイクルが開始される年月日を設定します。青いカレンダーをクリックした場合、ポップアップカレンダーが開いて、オプションとして日付を選択できます。';
$string['session'] = 'セッション';
$string['session_help'] = '間隔の長さを決定してください。例えば7日ごとに新しい活動が利用可能とした場合、現在利用可能な活動は利用できないように設定できます。開始日および終了日により、これらのセッションの長さは自動的に均等に配分されます。
例えば開始日から終了日までの週数が16週であるとします。セッション数を8とした場合、1セッションの期間は2週間となり、16週間/8セッションとなります。 しかし、セッション数を4とした場合、期間は4週間となり、16週間/4セッションとなります。最後にセッション数を16とした場合、毎週1サイクルとなります。';
$string['sessionlength'] = 'セッションの長さ (日)';
$string['sessionlength_text'] = 'それぞれのセッションの日数です。';
$string['sessionlengtherror'] = 'セッションの長さはゼロ以上にする必要があります。';
$string['sessionlengthislonger'] = 'セッションの長さが「開始 → 終了」より長い場合、セッションを短くするか、終了時間を遅く設定してください。';
$string['starttofinishmustbe'] = '「開始 → 終了」は最低でも1日必要です。';
$string['stayavailable'] = 'セッション終了後もご利用可能にする';
$string['stayavailable_help'] = 'セッションが終了してもアイテムは利用可能です。これは制限設定で「終了」フィールドを設定しないのと同じです。';
$string['stayavailable_text'] = 'セッション終了後も利用可能にします。終了日を設定しません。';
$string['to'] = '終了';
$string['toggleselection'] = 'すべてのアイテムのXトグル選択';
$string['updatedforcourse'] = '次のコースのドロップリリースを更新しました:';
