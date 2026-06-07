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
 * Strings for component 'childcourse', language 'zh_tw', version '4.4'.
 *
 * @package     childcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoenrol'] = '在存取時自動註冊';
$string['autoenrol_help'] = '若啟用，當使用者透過此活動開啟子課程時，插件會自動將該使用者註冊至子課程。註冊是使用專用的手動註冊實例建立，以便追蹤並在稍後根據移除政策安全地還原。若未啟用，插件不會自動為使用者註冊。';
$string['childcourse'] = '子課程';
$string['childcourse:addinstance'] = '新增子課程活動';
$string['childcourse:manage'] = '管理子課程設定';
$string['childcourse:sync'] = '同步子課程成績與完成狀態';
$string['childcourse:view'] = '查看子課程活動';
$string['childcourse_help'] = '選擇將與此活動連結的課程。此選擇會控制所有規則特定設定（群組、完成規則、活動選擇器、成績同步）。儲存該活動後，子課程將變為不可變，以維持映射與同步歷史的一致性。';
$string['childcoursenotset'] = '尚未設定子課程。';
$string['completionmissing'] = '子課程完成未啟用。';
$string['completionrule'] = '基於子課程的完成規則';
$string['completionrule_allactivities'] = '只有當所有受追蹤的活動都完成時才完成。';
$string['completionrule_coursecompleted'] = '當子課程完成時完成';
$string['completionrule_help'] = '定義如何根據子課程中使用者的進度自動將此活動標記為完成。

- **什麼也不做：** 此活動的完成與子課程完成無關。
- **當子課程完成時：** 子課程完成時，該活動也會完成。
- **當追蹤的活動全部完成時：** 子課程中所有啟用完成追蹤的活動都必須完成，此活動才能完成。';
$string['completionrule_none'] = '什麼也不做';
$string['enrolinstancename'] = '子課程連結 #{$a}';
$string['error_manualenrolnotavailable'] = '手動註冊插件不可用。';
$string['grade_approval'] = '成績來源自';
$string['grade_approval_no'] = '不傳送成績';
$string['grade_approval_yes'] = '使用子課程的成績';
$string['gradebookmissing'] = '子課程成績簿未設定（課程總分缺失）。';
$string['hideinmycourses'] = '在我的課程中隱藏子課程';
$string['hideinmycourses_help'] = '如果啟用，透過此活動註冊的使用者在「我的課程」選單中將隱藏子課程。這有助於強化對本課程的導覽。此設定僅影響由此插件註冊的使用者（由插件追蹤）。';
$string['inheritgroups'] = '從父課程繼承群組';
$string['inheritgroups_help'] = '如果啟用，插件將嘗試從父課程複製使用者在父課程中的群組成員資格到子課程，依群組名稱匹配。如果子課程中不存在該群組名稱，可能會被建立。這在自動註冊期間適用。除非你後來實作專用的重新同步流程，否則不會持續同步。';
$string['keeprole'] = '保留 papel (estudante/教師)';
$string['keeprole_help'] = '如果啟用，插件將嘗試維持簡化的角色對等：在父課程中具有教師級別能力的使用者將以教師身分註冊（如可用，為 editingteacher/教師）；否則，作為 estudante。這不會複製自訂角色或複雜的角色指派。';
$string['label_childcourse'] = '子課程';
$string['label_lastsynccompletion'] = '上次完成同步';
$string['label_lastsyncgrade'] = '上次成績同步';
$string['lastsync'] = '上次同步';
$string['lockedcoursewarning'] = '儲存後無法更改子課程。';
$string['manage_header_actions'] = '動作';
$string['manage_header_name'] = '名稱';
$string['missingcourse'] = '找不到課程';
$string['modulename'] = '子課程';
$string['modulenameplural'] = '子課程';
$string['never'] = '從不';
$string['nogroup'] = '沒有群組';
$string['openchildcourse'] = '開啟子課程';
$string['opennewtab'] = '在新分頁開啟';
$string['opennewtab_help'] = '若啟用，該按鈕將在新分頁中開啟子課程。這不會改變註冊或同步行為，只會改變使用者開啟課程的方式。';
$string['pluginadministration'] = '子課程管理';
$string['pluginname'] = '子課程';
$string['privacy:metadata:childcourse_map'] = '儲存由連結課程活動建立的對應資料，以便安全退選與審核。';
$string['privacy:metadata:childcourse_map:childcourseid'] = '被連結的子課程的 ID。';
$string['privacy:metadata:childcourse_map:childcourseinstanceid'] = '已連結課程活動實例的 ID。';
$string['privacy:metadata:childcourse_map:groupidsjson'] = '外掛分配的子課程群組 ID 清單（JSON）。';
$string['privacy:metadata:childcourse_map:hiddenprefset'] = '指示該外掛是否將偏好設定為在「我的課程」中隱藏子課程。';
$string['privacy:metadata:childcourse_map:manualenrolid'] = '外掛用於為使用者註冊的註冊實例 ID。';
$string['privacy:metadata:childcourse_map:parentcourseid'] = '該活動所在的父課程 ID。';
$string['privacy:metadata:childcourse_map:roleid'] = '由外掛在子課程中分配的 papel 的 ID。';
$string['privacy:metadata:childcourse_map:timeenrolled'] = '透過連結註冊的時間。';
$string['privacy:metadata:childcourse_map:timemodified'] = '映射記錄的最後修改時間。';
$string['privacy:metadata:childcourse_map:userid'] = '透過連結註冊的使用者 ID。';
$string['privacy:metadata:childcourse_state'] = '儲存每位使用者的快取狀態，以支援增量成績與完成同步。';
$string['privacy:metadata:childcourse_state:childcourseinstanceid'] = '已連結課程活動實例的 ID。';
$string['privacy:metadata:childcourse_state:coursecompleted'] = '快取的指示器，顯示該使用者是否已滿足完成規則。';
$string['privacy:metadata:childcourse_state:coursecompletiontimemodified'] = '用於增量同步的來源完成資料的最近修改時間戳。';
$string['privacy:metadata:childcourse_state:finalgrade'] = '從子課程總分快取同步的成績（百分比）。';
$string['privacy:metadata:childcourse_state:grade_source'] = '成績來源的識別符（例如 course_total）。';
$string['privacy:metadata:childcourse_state:gradeitemtimemodified'] = '用於增量同步的來源成績項最近修改時間戳。';
$string['privacy:metadata:childcourse_state:timemodified'] = '快取狀態列的最後修改時間。';
$string['privacy:metadata:childcourse_state:userid'] = '使用者 ID。';
$string['privacy:metadata:userpreference:block_myoverview_hidden_course'] = '用於在我的課程中隱藏子課程的使用者偏好設定（預設偏好名稱：block_myoverview_hidden_course_{courseid}）。';
$string['settings_heading'] = '子課程設定';
$string['syncdone'] = '同步完成。';
$string['syncnow'] = '現在同步';
$string['targetgroup'] = '註冊到群組';
$string['targetgroup_help'] = '若選取，使用者在自動註冊時將被加入到子課程中的這個特定群組。該群組必須存在於子課程中。如果同時啟用「從父課程繼承群組」，則兩種行為都會生效（所選群組與繼承自父課程的群組）。';
$string['unenrolaction'] = '當連結被移除時';
$string['unenrolaction_help'] = '控制當連結的活動被刪除時，與此活動建立的註冊將如何處理。『取消註冊』僅會移除由此活動建立的註冊（在映射表中追蹤）。『保留註冊』會讓使用者繼續在子課程中註冊。';
$string['unenrolaction_keep'] = '保留註冊';
$string['unenrolaction_unenrol'] = '取消透過此連結註冊的使用者。';
