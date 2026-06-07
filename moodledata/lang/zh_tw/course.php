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
 * Strings for component 'course', language 'zh_tw', version '4.4'.
 *
 * @package     course
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitychooseractivefooter'] = '活動選擇器頁尾';
$string['activitychooseractivefooter_desc'] = '活動選擇器可支援在頁尾新增項目的外掛程式。';
$string['activitychoosercategory'] = '活動選擇器';
$string['activitychooserhidefooter'] = '無頁尾';
$string['activitychooserrecommendations'] = '推薦的活動';
$string['activitychoosersettings'] = '活動選擇器設定';
$string['activitychoosertabmode'] = '活動選擇器頁籤';
$string['activitydate:closed'] = '結束：';
$string['activitydate:closes'] = '關閉：';
$string['activitydate:opened'] = '開始：';
$string['activitydate:opens'] = '開啟：';
$string['aria:coursecategory'] = '課程類別';
$string['aria:courseimage'] = '課程圖片';
$string['aria:coursename'] = '課程名稱';
$string['aria:courseshortname'] = '課程簡稱';
$string['aria:defaulttab'] = '預設活動';
$string['aria:favourite'] = '課程已做星號標記';
$string['aria:favouritestab'] = '標星的活動';
$string['aria:recommendedtab'] = '推薦的活動';
$string['browsecourseadminindex'] = '透過此索引瀏覽課程管理功能。';
$string['browsesettingindex'] = '透過此索引瀏覽設定。';
$string['communicationroomlink'] = '與課程成員聊天';
$string['completion_automatic:done'] = '完成：';
$string['completion_automatic:failed'] = '失敗：';
$string['completion_automatic:todo'] = '要做：';
$string['completion_manual:aria:done'] = '{$a} 標記為完成，點按還原。';
$string['completion_manual:aria:markdone'] = '標記 {$a} 為完成';
$string['completion_manual:done'] = '完成';
$string['completion_manual:markdone'] = '標記為完成';
$string['completion_setby:auto:done'] = '完成：{$a->condition} (set by {$a->setby})';
$string['completion_setby:auto:todo'] = '要做：{$a->condition} (set by {$a->setby})';
$string['completion_setby:manual:done'] = '{$a->activityname} 被 {$a->setby} 標記為完成。按一下還原。';
$string['completion_setby:manual:markdone'] = '{$a->activityname} 被 {$a->setby}標記為未完成。按一下以標記為完成。';
$string['completionrequirements'] = '{$a} 的完成要求';
$string['courseaccess'] = '課程存取';
$string['coursealreadyfinished'] = '課程已結束';
$string['coursecommunication_desc'] = '新課程將預設使用此溝通服務，既有課程則需自行選擇服務提供者。';
$string['coursecontentnotification'] = '發送內容更改的通知';
$string['coursecontentnotification_help'] = '勾選此方格以通知課程參與者新增或更改的活動或資源。只有可以存取活動或資源的使用者才會收到通知。';
$string['coursecontentnotifnew'] = '{$a->coursename} 新內容';
$string['coursecontentnotifnewbody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> 已新增至課程 <a href="{$a->courselink}">{$a->coursename}</a>。</p><p><a href="{$a->notificationpreferenceslink}">調整您的通知偏好設定</a></p>';
$string['coursecontentnotifupdate'] = '{$a->coursename} 內容變更';
$string['coursecontentnotifupdatebody'] = '<p>{$a->moduletypename} <a href="{$a->link}">{$a->modulename}</a> 已於課程 <a href="{$a->courselink}">{$a->coursename}</a> 中變更。</p><p><a href="{$a->notificationpreferenceslink}">調整您的通知偏好設定</a></p>';
$string['coursecount'] = '課程數';
$string['coursenotyetfinished'] = '課程尚未結束';
$string['coursenotyetstarted'] = '此課程尚未開始';
$string['courseparticipants'] = '課程成員';
$string['coursetoolong'] = '課程太長了';
$string['customfield_islocked'] = '已鎖定';
$string['customfield_notvisible'] = '沒有人';
$string['customfield_visibility'] = '可見於';
$string['customfield_visibility_help'] = '此設定決定誰能在課程清單中，或在儀表板的可用自訂欄位篩選器中，檢視自訂欄位名稱與值。';
$string['customfield_visibletoall'] = '任何人';
$string['customfield_visibletoteachers'] = '教師';
$string['customfieldsettings'] = '一般的課程自訂欄位設定';
$string['daystakingcourse'] = '課程進行中的日子';
$string['defaultsettingscategory'] = '預設設定';
$string['downloadcontent'] = '包含在下載的課程內容';
$string['downloadcontent_help'] = '此活動或資源應否包含在可供下載的課程內容（zip檔案）中？文件、資料夾、頁面和標籤可以完整下載。 對於其他活動和資源，僅有名稱和描述可以下載。這個選項需要在課程設置中啟用下載課程內容。

該設置對離線使用的行動應用程式內容下載沒有影響。';
$string['downloadcourseconfirmation'] = '您即將下載的課程內容壓縮檔（不含無法下載的項目及任何大於 {$a} 的檔案）。';
$string['downloadcoursecontent'] = '下載課程內容';
$string['downloadcoursecontent_help'] = '此設定決定是否允許具備「下載課程內容」權限的使用者(預設為學生或教師角色)下載課程內容。';
$string['enabledownloadcoursecontent'] = '啟用課程內容下載';
$string['errorendbeforestart'] = '結束日期 ({$a}) 早於課程開始日期。';
$string['favourite'] = '星號標記的課程';
$string['gotosection'] = '前往單元 {$a}';
$string['gradetopassnotset'] = '本課程未設定及格分數。該分數可於課程的評分項目中設定(成績簿設定)。';
$string['hideendedcoursestask'] = '在結束日期隱藏課程';
$string['informationformodule'] = '關於 {$a} 活動的資訊';
$string['module'] = '活動';
$string['namewithlink'] = '類別名稱(含連結)';
$string['noaccesssincestartinfomessage'] = '嗨，{$a->userfirstname}，
<p>有部分學生從未登入過 \'{$a->coursename}\' 課程。</p>';
$string['nocourseactivity'] = '課程開始與結束之間缺乏足夠的課程活動';
$string['nocourseendtime'] = '本課程沒有結束時間';
$string['nocoursesections'] = '沒有課程單元';
$string['nocoursestudents'] = '沒有學生';
$string['norecentaccessesinfomessage'] = '{$a->userfirstname} 您好，

<br/><br/>{$a->coursename} 課程中有許多位學生最近沒有參與該課程。';
$string['noteachinginfomessage'] = '{$a->userfirstname} 您好，
<p>系統已識別出下週開課的課程中，存在未安排教師或學生註冊的情況。</p>';
$string['participants:perpage'] = '每頁成員人數';
$string['participants:perpage_help'] = '每門課程成員頁面上每頁顯示的用戶數量。';
$string['participantsnavigation'] = '參與者三級導航。';
$string['pdfexportfont'] = 'PDF字型';
$string['pdfexportfont_help'] = '用於生成PDF檔案(例如作業提交)的字型。';
$string['privacy:completionpath'] = '課程完成度';
$string['privacy:favouritespath'] = '課程標星資訊';
$string['privacy:metadata:activityfavouritessummary'] = '課程系統包含使用者在活動選擇器中標記為星號的項目資訊。';
$string['privacy:metadata:completionsummary'] = '該課程包含關於使用者的完成資訊。';
$string['privacy:metadata:favouritessummary'] = '本課程包含與使用者標記為星號之課程相關的資訊。';
$string['privacy:perpage'] = '每頁顯示的課程數量。';
$string['recommend'] = '推薦';
$string['recommendcheckbox'] = '推薦活動: {$a}';
$string['relativedatessubmissionduedateafter'] = '課程開始後的{$a->datediffstr}';
$string['relativedatessubmissionduedatebefore'] = '課程開始前的{$a->datediffstr}';
$string['searchactivitiesbyname'] = '依名稱搜尋活動';
$string['searchresults'] = '搜尋結果: {$a}';
$string['sectionlink'] = '永久連結';
$string['showstartedcoursestask'] = '在開始日期顯示課程';
$string['studentsatriskincourse'] = '{$a} 課程中有風險的學生';
$string['studentsatriskinfomessage'] = '{$a->userfirstname} 您好，
<p>修讀 {$a->coursename} 課程的學生已被識別為處於風險狀態。</p>';
$string['submitsearch'] = '提交搜尋';
$string['target:coursecompetencies'] = '面臨無法達到課程指定能力標準的學生';
$string['target:coursecompetencies_help'] = '此目標描述學生是否面臨無法達成課程所賦予之能力指標的風險。該目標要求所有課程能力指標必須在課程結束前完全達成。';
$string['target:coursecompletion'] = '有風險無法滿足課程完成條件的學生';
$string['target:coursecompletion_help'] = '此目標描述學生是否被視為存在無法滿足課程完成條件的風險。';
$string['target:coursedropout'] = '有輟學風險的學生';
$string['target:coursedropout_help'] = '此指標描述學生是否被視為有輟學風險。';
$string['target:coursegradetopass'] = '有風險無法達到課程最低及格分數的學生';
$string['target:coursegradetopass_help'] = '此目標描述學生是否面臨無法達到課程最低及格分數的風險。';
$string['target:noaccesssincecoursestart'] = '尚未瀏覽課程的學生';
$string['target:noaccesssincecoursestart_help'] = '此目標描述從未進入其註冊課程的學生。';
$string['target:noaccesssincecoursestartinfo'] = '下列學生已註冊一門已開課的課程，但從未進入過該課程。';
$string['target:norecentaccesses'] = '最近未參加課程的學生';
$string['target:norecentaccesses_help'] = '此目標用於識別在設定的分析間隔內(預設為過去一個月)未曾進入所註冊課程的學生。';
$string['target:norecentaccessesinfo'] = '下列學生在設定的分析間隔內(預設為過去一個月)未曾進入其已註冊的課程。';
$string['target:noteachingactivity'] = '課程有無法開始的風險';
$string['target:noteachingactivity_help'] = '此目標說明即將於下週開始的課程是否會進行教學活動。';
$string['target:noteachingactivityinfo'] = '以下課程即將在未來幾天內開始，因為它們沒有任何師生參與，因此有無法開始的風險';
$string['targetlabelstudentcompetenciesno'] = '可能達到課程指定能力標準的學生';
$string['targetlabelstudentcompetenciesyes'] = '有風險無法達到課程指定能力標準的學生';
$string['targetlabelstudentcompletionno'] = '可能滿足課程完成條件的學生';
$string['targetlabelstudentcompletionyes'] = '有風險無法滿足課程完成條件的學生';
$string['targetlabelstudentdropoutno'] = '無風險';
$string['targetlabelstudentdropoutyes'] = '有輟學風險的學生';
$string['targetlabelstudentgradetopassno'] = '很可能達到課程及格最低分數的學生。';
$string['targetlabelstudentgradetopassyes'] = '可能無法達到課程及格最低分數的學生。';
$string['targetlabelteachingno'] = '課程有無法開始的風險';
$string['targetlabelteachingyes'] = '具備教學能力且可存取該課程的使用者';
$string['totalactivities'] = '活動：{$a}';
