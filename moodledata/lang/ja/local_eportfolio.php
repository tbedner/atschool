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
 * Strings for component 'local_eportfolio', language 'ja', version '4.4'.
 *
 * @package     local_eportfolio
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions:header'] = 'アクションを実行する';
$string['contenteditor'] = 'コンテンツエディタ';
$string['create:error'] = '新しいH5Pコンテンツの作成中に問題が発生しました。';
$string['create:header'] = 'eポートフォリオ - 新しいH5Pファイルを作成する';
$string['create:library'] = 'ライブラリを選択する';
$string['create:success'] = 'H5Pコンテンツが正常に作成されました。';
$string['customfield:description'] = 'eポートフォリオのためにこのコースを共有します。';
$string['customfield:name'] = 'eポートフォリオ';
$string['delete:checkconfirm'] = '本当に選択したeポートフォリオを削除してもよろしいですか?';
$string['delete:confirm'] = '決定';
$string['delete:error'] = 'ファイルの削除中にエラーが発生しました! 再度お試しください!';
$string['delete:header'] = 'ファイルを削除する';
$string['delete:nocourses'] = 'どのコースでも共有されていません。';
$string['delete:success'] = '選択されたファイルが正常に削除されました!';
$string['download:error'] = 'ファイルが見つかりませんでした!';
$string['edit:error'] = '変更の保存中にエラーが発生しました!';
$string['edit:header'] = 'eポートフォリオ - 編集';
$string['edit:success'] = 'H5Pコンテンツが正常に更新されました。';
$string['eportfolio:view_eport'] = 'eポートフォリオを閲覧する';
$string['error:missingcapability'] = 'あなたには「eポートフォリオ」プラグインにアクセスするために必要なケイパビリティがありません!';
$string['error:missingconfig'] = 'あなたのMoodle管理者にご連絡ください。';
$string['error:missingconfig:description'] = 'eポートフォリオはまだ完全には設定されていません。
<br>
プラグインのインストールインストラクションに従ってください。';
$string['error:missingconfig:gradingteacher'] = '評定ロールが設定されていません。';
$string['error:missingconfig:studentroles'] = '学生ロールが設定されていません。';
$string['error:noguestaccess'] = 'あなたはゲストとしてログインしています。このプラグインではゲストアクセスは許可されていません!';
$string['event:eportfolio:created'] = 'ID「 {$a->userid} 」のユーザが新しいeポートフォリオ {$a->filename} を作成しました (ファイルID: {$a->fileid})。';
$string['event:eportfolio:created:name'] = 'eポートフォリオが作成されました。';
$string['event:eportfolio:deleted'] = 'ID「 {$a->userid} 」のユーザがeポートフォリオ {$a->filename} を削除しました (ファイルID: {$a->fileid})。';
$string['event:eportfolio:deleted:name'] = 'eポートフォリオが削除されました。';
$string['event:eportfolio:edited'] = 'ID「 {$a->userid} 」のユーザがeポートフォリオ {$a->filename} を編集しました (ファイルID: {$a->fileid})。';
$string['event:eportfolio:edited:name'] = 'eポートフォリオが編集されました。';
$string['event:eportfolio:shared:grade'] = 'ID「 {$a->userid} 」のユーザがeポートフォリオ {$a->filename} を評定のために共有しました (ファイルID: {$a->fileid})。';
$string['event:eportfolio:shared:name'] = 'eポートフォリオが共有されました。';
$string['event:eportfolio:shared:share'] = 'ID「 {$a->userid} 」のユーザがeポートフォリオ {$a->filename} を共有しました (ファイルID: {$a->fileid})。';
$string['event:eportfolio:shared:template'] = 'ID「 {$a->userid} 」のユーザがeポートフォリオ {$a->filename} をテンプレートとして共有しました (ファイルID: {$a->fileid})。';
$string['event:eportfolio:undo'] = 'ID「 {$a->userid} 」のユーザがeポートフォリオ {$a->filename} の共有を取り消しました (ファイルID: {$a->fileid})。';
$string['event:eportfolio:viewed'] = 'ID「 {$a->userid} 」のユーザがeポートフォリオ {$a->filename} を閲覧しました (ファイルID: {$a->fileid})。';
$string['event:eportfolio:viewed:name'] = 'eポートフォリオが閲覧されました。';
$string['form:cancelled'] = '処理がキャンセルされました!';
$string['form:field:required'] = 'このフィールドに入力してください!';
$string['h5plibraries'] = 'H5Pライブラリ';
$string['message:contexturlname'] = '共有ポートフォリオを閲覧する';
$string['message:emailmessage'] = '<p>新しいeポートフォリオがあなたと共有されました。
<br>
タイプ: {$a->shareoption}
<br>
共有者: {$a->userfrom}
<br>
eポートフォリオ: {$a->filename}
<br>
URL: <a href="{$a->viewurl}">{$a->viewurl}</a></p>';
$string['message:smallmessage'] = '<p>新しいeポートフォリオがあなたと共有されました。
<br>
タイプ: {$a->shareoption}
<br>
共有者: {$a->userfrom}
<br>
eポートフォリオ: {$a->filename}
<br>
URL: <a href="{$a->viewurl}">{$a->viewurl}</a></p>';
$string['message:subject'] = '共有eポートフォリオに関するメッセージ';
$string['messageprovider:sharing'] = '共有eポートフォリオに関するメッセージ';
$string['navbar'] = 'eポートフォリオ';
$string['navbar:tab:myeportfolios'] = 'マイeポートフォリオ';
$string['navbar:tab:mysharedeportfolios'] = 'マイ共有eポートフォリオ';
$string['navbar:tab:mysharedeportfoliosgrade'] = '評定のための私の共有eポートフォリオ';
$string['navbar:tab:sharedeportfolios'] = '私と共有されているeポートフォリオ';
$string['navbar:tab:sharedeportfoliosgrade'] = '評定のために共有されているeポートフォリオ';
$string['navbar:tab:sharedtemplates'] = 'eポートフォリオテンプレート';
$string['overview:eportfolio:createnewfile'] = 'H5Pファイルを作成する';
$string['overview:eportfolio:downloadfiles'] = '選択されたeポートフォリオをダウンロードする';
$string['overview:eportfolio:fileselect'] = 'ファイルを選択する';
$string['overview:eportfolio:nofiles:grade'] = '評定のためにあなたと共有されているeポートフォリオはまだありません。';
$string['overview:eportfolio:nofiles:my'] = 'あなたはeポートフォリオにファイルをまだ作成またはアップロードしていません。';
$string['overview:eportfolio:nofiles:mygrade'] = 'あなたはeポートフォリオのファイルを評定のためにまだ共有していません。';
$string['overview:eportfolio:nofiles:myshared'] = 'あなたはeポートフォリオのファイルを閲覧のためにまだ共有していません。';
$string['overview:eportfolio:nofiles:shared'] = '閲覧のためにあなたと共有されているeポートフォリオはまだありません。';
$string['overview:eportfolio:nofiles:template'] = 'あなたと共有されているテンプレートはまだありません。';
$string['overview:eportfolio:uploadnewfile'] = 'H5Pファイルをアップロードする';
$string['overview:header'] = 'eポートフォリオ - 概要';
$string['overview:helpfaq:title'] = 'ヘルプ & FAQ';
$string['overview:shareoption:grade'] = '評定';
$string['overview:shareoption:share'] = '共有';
$string['overview:shareoption:template'] = 'テンプレート';
$string['overview:table:actions'] = 'アクション';
$string['overview:table:actions:delete'] = 'ファイルを削除する';
$string['overview:table:actions:edit'] = 'ファイルを編集する';
$string['overview:table:actions:share'] = 'eポートフォリオを共有する';
$string['overview:table:actions:template'] = 'テンプレートを使用する';
$string['overview:table:actions:undo'] = '共有を取り消す';
$string['overview:table:actions:undo:template'] = 'テンプレートとしてのファイル共有を取り消す';
$string['overview:table:actions:view'] = 'ファイルを閲覧する';
$string['overview:table:actions:viewgradeform'] = '評定フォームを閲覧する';
$string['overview:table:coursefullname'] = '共有コース';
$string['overview:table:filedeleted'] = 'あなたは個人概要からeポートフォリオを削除しました。評定のために共有されたファイルをコース内で完全に削除する必要があります。';
$string['overview:table:filename'] = 'ファイル名';
$string['overview:table:filesize'] = 'ファイルサイズ';
$string['overview:table:filetimecreated'] = '作成/アップロード';
$string['overview:table:filetimemodified'] = '最終修正日';
$string['overview:table:graded'] = '評定済み?';
$string['overview:table:graded:done'] = '評定対象:';
$string['overview:table:graded:pending'] = '保留';
$string['overview:table:grading'] = '評定';
$string['overview:table:istemplate'] = 'このファイルは他のユーザのためにテンプレートとしてアップロードまたは共有されました。';
$string['overview:table:participants'] = '共有対象';
$string['overview:table:selection'] = '選択';
$string['overview:table:sharedby'] = '共有者';
$string['overview:table:shareend'] = '共有終了';
$string['overview:table:sharestart'] = '共有開始';
$string['overview:table:viewcourse'] = 'コースを閲覧する';
$string['overview:table:viewfile'] = 'ファイルを閲覧する';
$string['overview:table:viewgradeform'] = '評定フォームを閲覧する';
$string['pluginname'] = 'eポートフォリオ';
$string['privacy:metadata:local_eportfolio'] = 'eポートフォリオプラグインが共有するデータです。';
$string['privacy:metadata:local_eportfolio:timecreated'] = 'eポートフォリオの作成日です。';
$string['privacy:metadata:local_eportfolio:timemodified'] = 'eポートフォリオが最後に編集された日付です。';
$string['privacy:metadata:local_eportfolio:title'] = 'eポートフォリオのファイル名/タイトルです。';
$string['privacy:metadata:local_eportfolio:usermodified'] = 'eポートフォリオデータを作成/共有したユーザのIDです。';
$string['privacy:metadata:local_eportfolio_share'] = '共有eポートフォリオに関する情報です。';
$string['privacy:metadata:local_eportfolio_share:courseid'] = 'eポートフォリオが共有されたコースです。';
$string['privacy:metadata:local_eportfolio_share:enddate'] = 'オプション - 共有の終了日付です。';
$string['privacy:metadata:local_eportfolio_share:shareoption'] = '共有タイプ';
$string['privacy:metadata:local_eportfolio_share:timecreated'] = 'eポートフォリオが共有された日付です。';
$string['privacy:metadata:local_eportfolio_share:timemodified'] = '共有eポートフォリオが最後に編集された日付です。';
$string['privacy:metadata:local_eportfolio_share:title'] = 'eポートフォリオのファイル名/タイトル';
$string['privacy:metadata:local_eportfolio_share:usermodified'] = 'eポートフォリオデータを作成/共有したユーザIDです。';
$string['privacy:metadata:myeportfolios'] = 'マイeポートフォリオ';
$string['privacy:metadata:mysharedeportfolios'] = 'マイ共有eポートフォリオ';
$string['settings:general'] = '設定';
$string['settings:globalnavbar:enable'] = 'メインナビゲーションエントリ';
$string['settings:globalnavbar:enable:desc'] = 'メインナビゲーションにeポートフォリオのエントリが表示されます。';
$string['settings:gradingteacher'] = '評定ロール';
$string['settings:gradingteacher:desc'] = '「eポートフォリオ」活動で共有eポートフォリオの評定が許可されるロールを選択してください。';
$string['settings:studentroles'] = '学生ロール';
$string['settings:studentroles:desc'] = 'コースに登録されているあなたの学生のロールを選択してください。';
$string['sharing:alreadyshared:course'] = 'コース';
$string['sharing:alreadyshared:info'] = 'eポートフォリオはすでに以下のコースで共有されています:';
$string['sharing:alreadyshared:shareoption'] = '共有タイプ';
$string['sharing:form:courseselection'] = '共有するコースを選択する';
$string['sharing:form:courseselection:desc'] = 'あなたがeポートフォリオを共有したいコースを選択してください。
<br>
あなたが登録されているeポートフォリオ設定済みコースのみ選択できます。';
$string['sharing:form:enddate:enable'] = '終了日設定';
$string['sharing:form:enddate:label'] = '日付選択を有効にする';
$string['sharing:form:enddate:select'] = '次の日時まで利用可能';
$string['sharing:form:enrolledusers'] = '共有する参加者';
$string['sharing:form:enrolledusers_help'] = '選択された参加者のみeポートフォリオを閲覧/評定できる';
$string['sharing:form:fullcourse'] = 'eポートフォリオ選択対象';
$string['sharing:form:groups'] = '共有するコースグループ';
$string['sharing:form:groups_help'] = 'グループメンバのみeポートフォリオを閲覧/評定できる';
$string['sharing:form:roles'] = '共有するロール';
$string['sharing:form:roles_help'] = 'このロールを割り当てれらた参加者のみeポートフォリオを閲覧/評定できます。';
$string['sharing:form:select:allcourses'] = 'すべてのコース';
$string['sharing:form:select:fullcourse'] = 'すべてのコースで共有する';
$string['sharing:form:select:grade'] = '評定';
$string['sharing:form:select:hint'] = 'コースを選択してください。';
$string['sharing:form:select:pleaseselect'] = '選択してください。';
$string['sharing:form:select:share'] = '共有';
$string['sharing:form:select:singlecourse'] = 'コースを選択する';
$string['sharing:form:select:targetgroup'] = '選択された参加者と共有する';
$string['sharing:form:select:template'] = 'テンプレート';
$string['sharing:form:sharedcourses'] = '現在の選択済みコース';
$string['sharing:form:sharedcourses_help'] = 'あなたが登録されているコースのみ選択できます。';
$string['sharing:form:sharedusers'] = 'eポートフォリオをコース全体または選択された参加者のみと共有する';
$string['sharing:form:sharedusers:desc'] = 'あなたのeポートフォリオをコース全体と共有するか、一部の参加者と共有するか選択してください。
<br>
あなたのeポートフォリオをコースに登録されているすべての登録者と共有することも、特定のロール、参加者またはコースグループとのみ共有することもできます。';
$string['sharing:form:shareoption'] = '共有タイプ';
$string['sharing:form:shareoptionselection'] = '共有タイプを選択する';
$string['sharing:form:shareoptionselection:desc'] = 'あなたのeポートフォリオの共有方法を選択してください。
<br><br>
<b>共有:</b>
コース参加者はこのeポートフォリオを閲覧のみできます。
<br>
<b>評定:</b>
教師はあなたのeポートフォリオを評定できます。
<br>
<b>テンプレート:</b>
参加者はあなたのeポートフォリオをテンプレートとして再利用できます。<br><br>
オプションとして、あなたはeポートフォリオを利用できる期間を選択できます。';
$string['sharing:form:step:confirm'] = 'eポートフォリオを共有する';
$string['sharing:form:step:courseselection'] = 'コースを選択する';
$string['sharing:form:step:nocourseselection'] = '現在、あなたのeポートフォリオを共有できるコースはありません。';
$string['sharing:form:step:shareoptionselection'] = '共有オプションを選択する';
$string['sharing:form:step:userselection'] = '参加者を選択する';
$string['sharing:header'] = '共有eポートフォリオ';
$string['sharing:share:alreadyexists'] = 'eポートフォリオはすでに同じ条件で共有されています!';
$string['sharing:share:inserterror'] = 'eポートフォリオの共有中にエラーが発生しました! 再度お試しください!';
$string['sharing:share:successful'] = 'あなたのeポートフォリオを正常に共有しました!';
$string['undo:checkconfirm'] = '本当に共有ポートフォリオを取り消してもよろしいですか?';
$string['undo:confirm'] = '決定';
$string['undo:error'] = 'このファイルの共有取り消し中にエラーが発生しました! 再度お試しください!';
$string['undo:header'] = '共有eポートフォリオを取り消す';
$string['undo:success'] = '正常に取り消しました!';
$string['uploadform:cancelled'] = '処理がキャンセルされました!';
$string['uploadform:description'] = '説明';
$string['uploadform:error'] = 'ファイルのアップロード中にエラーが発生しました! 再度お試しください!';
$string['uploadform:file'] = 'ファイルを選択する';
$string['uploadform:header'] = 'H5Pファイルをアップロードする';
$string['uploadform:save'] = 'ファイルをアップロードする';
$string['uploadform:successful'] = 'ファイルが正常にアップロードされました。';
$string['uploadform:template:check'] = 'これはテンプレートファイルです。';
$string['uploadform:template:check_help'] = 'あなたがポートフォリオをテンプレートとして共有した場合、他のユーザはコピーおよび使用できます。';
$string['uploadform:template:checklabel'] = 'テンプレートをアップロードする';
$string['uploadform:template:header'] = 'このファイルをテンプレートとして共有する';
$string['uploadform:title'] = 'タイトル/名称';
$string['use:template:checkconfirm'] = '選択されたeポートフォリオテンプレートを使用しますか?';
$string['use:template:confirm'] = '決定';
$string['use:template:error'] = 'テンプレートファイルのコピー中にエラーが発生しました! 再度お試しください!';
$string['use:template:header'] = 'eポートフォリオテンプレートを使用する';
$string['use:template:success'] = 'さらに使用するためにテンプレートがあなたのeポートフォリオにコピーされました!';
$string['view:eportfolio:button:backtocourse'] = 'コースに戻る';
$string['view:eportfolio:button:backtoeportfolio'] = '概要に戻る';
$string['view:eportfolio:button:edit'] = 'H5Pファイルを編集する';
$string['view:eportfolio:sharedby'] = '共有者';
$string['view:eportfolio:timecreated'] = '作成日';
$string['view:eportfolio:timemodified'] = '最終修正日';
$string['view:header'] = 'eポートフォリオを閲覧する';
