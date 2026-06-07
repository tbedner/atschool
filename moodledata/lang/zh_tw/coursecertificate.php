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
 * Strings for component 'coursecertificate', language 'zh_tw', version '4.4'.
 *
 * @package     coursecertificate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityhiddenwarning'] = '此活動目前為隱藏狀態。當設定為可見後，符合活動存取限制的學生將會自動收到一份證書 PDF 副本。';
$string['archivecertificates'] = '封存已發行的證書';
$string['archivecertificates_help'] = '已封存的證書仍可驗證，且仍會顯示於使用者的個人資料頁面。不過，當既有的課程證書被封存後，使用者在再次符合活動存取限制時，仍可重新獲發新的證書。';
$string['automaticsend_helptitle'] = '自動寄送說明';
$string['automaticsenddisabled'] = '此證書的自動寄送功能目前已停用。';
$string['automaticsenddisabled_help'] = '若保持停用狀態，學生在符合此活動的存取限制後，必須點擊課程頁面上顯示的活動連結，才能取得證書。<br/><br/>
若啟用此功能，學生在符合此活動的存取限制後，將會自動收到一份證書的 PDF 副本。請注意，所有已符合此活動存取限制的學生，將會在啟用此功能時立即收到證書。';
$string['automaticsenddisabledalert'] = '符合此活動存取限制的學生，將在存取此活動後獲發證書。';
$string['automaticsendenabled'] = '此證書的自動寄送功能已啟用。';
$string['automaticsendenabled_help'] = '若保持啟用狀態，學生在符合此活動的存取限制後，將會自動收到一份證書的 PDF 副本。<br/><br/>
若停用此功能，學生在符合此活動的存取限制後，將需要點擊課程頁面上顯示的活動連結，才能取得證書。';
$string['certificateissues'] = '證書發行記錄';
$string['certificatesarchived'] = '已封存的證書';
$string['certifiedusers'] = '已取得證書的使用者';
$string['chooseatemplate'] = '選擇範本…';
$string['code'] = '代碼';
$string['coursecertificate:addinstance'] = '新增一個新的課程證書活動';
$string['coursecertificate:receive'] = '接收已發行的證書';
$string['coursecertificate:view'] = '檢視課程證書';
$string['coursecertificate:viewreport'] = '檢視課程證書發行報表';
$string['coursecompletiondate'] = '完成日期';
$string['courseinternalid'] = '用於網址中的課程內部 ID';
$string['courseurl'] = '課程網址';
$string['disableautomaticsend'] = '學生在符合此活動的存取限制後，將不再自動收到證書的 PDF 副本。
相反地，學生必須在符合此活動的存取限制後，點擊課程頁面上顯示的活動連結，才能取得證書。';
$string['enableautomaticsendpopup'] = '所有學生在符合此活動的存取限制後，將會自動收到一份證書的 PDF 副本。<br/><br/>
已符合這些存取限制但尚未存取此活動的學生，也會立即收到其證書副本。<br/><br/>
已經存取過此活動的學生，將不會再次收到證書。';
$string['expirydate'] = '到期日';
$string['filterswarning'] = '在活動情境中所定義的篩選器僅用於活動名稱與說明。';
$string['filterswarninglist'] = '僅當 "{$a->list}" 篩選器在<a href="{$a->link}">課程層級</a>啟用時，才會在生成證書PDF檔案時使用該篩選器。';
$string['filterswarningnone'] = '在產生證書 PDF 檔案時，不會套用任何篩選器。';
$string['issueddate'] = '發行日期';
$string['managetemplates'] = '管理證書範本';
$string['modulename'] = '課程證書';
$string['modulename_help'] = '課程證書模組讓學習者能夠透過取得證書來慶祝學習成果。<br/><br/>
此模組可讓您選擇不同的證書範本，並自動顯示使用者資料，例如全名、課程等。<br/><br/>
使用者可透過存取此活動，自行下載證書的 PDF 副本，此外也提供自動以電子郵件寄送 PDF 副本的選項。<br/><br/>
若此活動所使用的範本包含 QR Code，使用者即可透過掃描該 QR Code 來驗證其證書。';
$string['modulename_link'] = 'mod/coursecertificate/view';
$string['modulenameplural'] = '課程證書';
$string['notemplateselected'] = '找不到所選的範本。請前往活動設定並選擇新的範本。';
$string['notemplateselecteduser'] = '此證書目前無法使用。請聯絡課程管理員。';
$string['notemplateswarning'] = '目前沒有可用的範本。請聯絡網站管理員';
$string['notemplateswarningwithlink'] = '目前沒有可用的範本。請前往 <a href="{$a}">證書範本管理頁面</a> 並建立新的範本。';
$string['nouserscertified'] = '目前沒有任何使用者取得證書。';
$string['open'] = '開啟';
$string['page-mod-coursecertificate-x'] = '任何課程證書模組頁面';
$string['pluginadministration'] = '課程證書管理';
$string['pluginname'] = '課程證書';
$string['previewcoursefullname'] = '課程全名';
$string['previewcourseshortname'] = '課程簡稱';
$string['privacy:metadata'] = '課程證書活動不會儲存任何個人資料。';
$string['revoke'] = '撤銷';
$string['revokeissue'] = '您確定要撤銷此使用者的證書發行紀錄嗎？';
$string['selectdate'] = '選擇日期';
$string['selecttemplatewarning'] = '一旦此活動發行至少一張證書後，此欄位將會鎖定，且無法再進行編輯。';
$string['status'] = '狀態';
$string['taskissuecertificates'] = '發行課程證書';
$string['template'] = '範本';
