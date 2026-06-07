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
 * Strings for component 'eportfolio', language 'ja', version '4.4'.
 *
 * @package     eportfolio
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions:header'] = 'アクションを実行する';
$string['delete:checkconfirm'] = '<b>本当にこのファイルの新しい提出を許可しますか?</b>
<br><br>
<b>提出済みファイルおよび既存の評定も削除されます!</b>';
$string['delete:confirm'] = '確認';
$string['delete:error'] = 'ファイルの削除中にエラーが発生しました! 再度お試しください!';
$string['delete:header'] = '新しい提出を許可しますか?';
$string['delete:success'] = '選択したファイルが正常に削除されました!';
$string['eportfolio:addinstance'] = '新しいeポートフォリオ評定を追加する';
$string['eportfolio:grade_eport'] = 'eポートフォリオを評定する';
$string['eportfolio:view'] = 'eポートフォリオを表示する';
$string['eportfolioname'] = 'タイトル';
$string['error:missingcapability:actions'] = 'あなたには選択したアクションを実行するために必要なケイパビリティがありません!';
$string['error:noeportfolio:file:found'] = 'リクエストされたファイルが見つかりませんでした!';
$string['error:noeportfoliocourse'] = 'このコースはeポートフォリオコースとしてマークされていません!';
$string['error:noeportfolios:found'] = '現在、評定可能なeポートフォリオはありません!';
$string['event:eportfolio:deleted'] = 'ID「 {$a->userid} 」のユーザがeポートフォリオ {$a->filename} (ファイルコンテクスト: {$a->fileidcontext}) を削除しました。';
$string['event:eportfolio:deleted:name'] = 'eポートフォリオが削除されました。';
$string['event:eportfolio:newgrading'] = 'ID「 {$a->userid} 」のユーザがeポートフォリオ {$a->filename} (ファイルコンテクスト: {$a->fileidcontext}) の新しい評定を追加しました。';
$string['event:eportfolio:newgrading:name'] = 'eポートフォリオの新しい評定です。';
$string['event:eportfolio:updatedgrade'] = 'ID「 {$a->userid} 」のユーザがeポートフォリオ {$a->filename} (ファイルコンテクスト: {$a->fileidcontext}) の評定を更新しました。';
$string['event:eportfolio:updatedgrade:name'] = 'eポートフォリオ評定が更新されました。';
$string['event:eportfolio:viewgrading'] = 'ID「 {$a->userid} 」のユーザがeポートフォリオ {$a->filename} (ファイルコンテクスト: {$a->fileidcontext}) の評定を閲覧しました。';
$string['event:eportfolio:viewgrading:name'] = 'eポートフォリオ評定が閲覧されました。';
$string['grade:cancelled'] = '評定がキャンセルされました!';
$string['grade:insert:error'] = '評定の保存中にエラーが発生しました! 再度お試しください!';
$string['grade:insert:success'] = 'あなたの評定が正常に保存されました!';
$string['grade:update:error'] = '評定の更新中にエラーが発生しました! 再度お試しください!';
$string['grade:update:success'] = 'あなたの評定が正常に更新されました!';
$string['gradeform:backbtn'] = '概要に戻る';
$string['gradeform:feedbacktext'] = 'コメントとしてのフィードバック';
$string['gradeform:grade'] = '評点 (%)';
$string['gradeform:grade_help'] = '評点をパーセンテージで指定してください。';
$string['gradeform:grader'] = '評定者:';
$string['gradeform:gradeview'] = '評定';
$string['gradeform:header'] = '評定&フィードバック';
$string['gradeform:timegraded'] = '評定日時:';
$string['message:contexturlname'] = 'eポートフォリオ評定を表示する';
$string['message:emailmessage'] = '<p>あなたに新しい評定が追加されました。
<br>eポートフォリオ: {$a->filename}
<br>コース: {$a->coursename}<br>
<br>評定者: {$a->userfrom}
<br>URL:  <a href="{$a->viewurl}">{$a->viewurl}</a></p>';
$string['message:smallmessage'] = '<p>あなたに新しい評定が追加されました。
<br>eポートフォリオ: {$a->filename}
<br>コース: {$a->coursename}<br>
<br>評定者: {$a->userfrom}
<br>URL:  <a href="{$a->viewurl}">{$a->viewurl}</a></p>';
$string['message:subject'] = 'eポートフォリオの新しい評価に関する通知';
$string['messageprovider:grading'] = 'eポートフォリオの新しい評価に関する通知';
$string['modulename'] = 'eポートフォリオ評定';
$string['modulenameplural'] = 'eポートフォリオ評定';
$string['noeportfolioinstances'] = 'このコースではまだeポートフォリオ活動が作成されていません!';
$string['overview:table:actions'] = 'アクション';
$string['overview:table:btn:delete'] = '新しい提出を許可する';
$string['overview:table:btn:delete:help'] = '「新しい提出を許可する」をクリックした場合、現在の提出課題および既存の評定が削除されます。コース参加者には修正版の提出等、再提出オプションが与えられます。';
$string['overview:table:btn:grade'] = '評定を追加する';
$string['overview:table:btn:view'] = '評定を表示する';
$string['overview:table:grade'] = '評定';
$string['overview:table:sharestart'] = '共有日時:';
$string['overview:table:title'] = 'ファイル名/タイトル';
$string['overview:table:userfullname'] = '共有者:';
$string['pluginadministration'] = 'eポートフォリオ評定管理';
$string['pluginname'] = 'eポートフォリオ評定';
$string['privacy:metadata:mod_eportfolio'] = 'eポートフォリオプラグインが共有するデータです。';
$string['privacy:metadata:mod_eportfolio:grade:graderid'] = 'eポートフォリオ評定を作成/更新したユーザのIDです。';
$string['privacy:metadata:mod_eportfolio:grade:userid'] = 'eポートフォリオ評定を受けたユーザのIDです。';
$string['privacy:metadata:mod_eportfolio:grade:usermodified'] = 'eポートフォリオ評定を作成/更新したユーザのIDです。';
$string['privacy:metadata:mod_eportfolio:usermodified'] = 'eポートフォリオ活動を作成/更新したユーザのIDです。';
