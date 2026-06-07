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
 * Strings for component 'tool_program', language 'ja', version '4.4'.
 *
 * @package     tool_program
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutthefile'] = 'ファイルについて';
$string['action'] = '操作';
$string['actions'] = '操作';
$string['active'] = 'アクティブ';
$string['activeprograms'] = 'アクティブなプログラム';
$string['activeprogramslink'] = '<a href="{$a->href}">{$a->count} アクティブなプログラム</a>';
$string['addcourses'] = 'コース追加';
$string['addcourseslist'] = 'コース選択';
$string['addcourseslist_help'] = 'ひとつまたはそれ以上のコースを選択できます。';
$string['addnewemptycourse'] = '新しい空のコースを追加';
$string['addset'] = 'セット追加';
$string['addsetorcourse'] = 'コースまたはセットを追加';
$string['afterallocationwindowstarts'] = '割り当て開始後';
$string['afterallocationwindowstartswithrelativedate'] = '{$a} 割り当て開始後';
$string['afterduedate'] = '終了日後';
$string['afterduedatewithrelativedate'] = '終了日から {$a} 経過';
$string['afterstartdate'] = '開始日以降';
$string['afterstartdatewithrelativedate'] = '開始日以降';
$string['afteruserallocationdate'] = 'ユーザの割り当て日以降';
$string['afteruserallocationdatewithrelativedate'] = '{$a} ユーザの割り当て日以降';
$string['allinanyorder'] = '自由な順番ですべて';
$string['allinorder'] = '順番にすべて';
$string['allocatetoprogram'] = 'プログラムに割り当てる';
$string['allocatetoprograms'] = 'プログラムに割り当てる...';
$string['allocateusers'] = 'ユーザを割り当てる';
$string['allocateuserstoprograms'] = 'ユーザをプログラムに割り当てる...';
$string['allocationdate'] = '割り当て日';
$string['allocationdateonorafter'] = '割り当て日以降';
$string['allocationdefaultvalue'] = 'プログラムで定義されたものと同じ（デフォルト）';
$string['allocationenddate'] = '割り当ての終了日';
$string['allocationenddate_help'] = 'このプログラムへのユーザ割り当て終了日';
$string['allocationfor'] = '\'{$a}\' の割り当て';
$string['allocationsource'] = '割り当てソース';
$string['allocationstartdate'] = '割り当て開始日';
$string['allocationstartdate_help'] = 'このプログラムにユーザを割り当てる開始日';
$string['allocationwindow'] = '割り当てウィンドウ';
$string['allocationwindowendedon'] = 'このプログラムの割り当てウィンドウは {$a} で終了しました。';
$string['allocationwindowstartson'] = 'このプログラムの割り当てウィンドウは {$a} から始まります。';
$string['allowdirectallocation'] = '直接割り当てを許可';
$string['allowdirectallocation_help'] = 'このプログラムへのユーザの直接割り当てを許可';
$string['archive'] = 'アーカイブ';
$string['archived'] = 'アーカイブ済み';
$string['archivedconfirmation'] = '本当にプログラム \'{$a}\' をアーカイブしますか？アーカイブされたプログラムは、学習者とマネージャーが利用できなくなり、過去のレポートのみ閲覧できるようになります。';
$string['archivedon'] = 'アーカイブ済み';
$string['archivedprograms'] = 'アーカイブされたプログラム';
$string['assfirstchildof'] = '"{$a}" の最初の子(下位)として';
$string['associatedcertification'] = '関連した認定';
$string['associatedcertifications'] = '関連した認定';
$string['associatedcertificationswitheditlinks'] = '編集リンク付きの関連認定資格';
$string['atleast'] = '少なくとも';
$string['autocreategroups'] = 'コースグループに追加';
$string['autocreategroups_help'] = 'ユーザがプログラムコースに登録されると、自動的に同じグループに追加されます。プログラムと同じ名前のグループがそれぞれのコースに自動的に作成されます。テナント間で共有されたコースについて、テナント名もグループ名に追加されます。';
$string['autocreategroupsnone'] = 'このプログラムにグループを作成しない';
$string['autocreategroupsprogram'] = 'このプログラムにグループを作成する';
$string['availability'] = '空き状況';
$string['available'] = '利用可能';
$string['baseset'] = 'ベースセット';
$string['beforeenddate'] = '遮断日前';
$string['beforeenddatewithrelativedate'] = '{$a} 終了日の前';
$string['calendar'] = 'スケジュール';
$string['calendarduedate'] = 'プログラム {$a} の期日';
$string['calendarenddate'] = 'プログラム {$a} の終了日';
$string['certification'] = '認定';
$string['certificationduedate'] = '認定終了日';
$string['certificationmsgactive'] = '認証<strong>「{$a->fullname}」</strong>は<strong>{$a->date}</strong>までに完了する必要があります。';
$string['certificationmsgcompleted'] = '認証<strong>「{$a->fullname}」を完了しました。';
$string['certificationmsgcompletedexpired'] = '認証<strong>「{$a->fullname}」を完了しました。これは<strong>{$a->date}</strong>に有効期限が切れます。';
$string['certificationmsgduedatenotset'] = '認定<strong>「{$a->fullname}」に有効期限が設定されています。';
$string['certificationmsgexpired'] = '認証<strong>「{$a->fullname}」は<strong>{$a->date}</strong>に有効期限が切れます。';
$string['certificationmsgoverdue'] = '認証<strong>「{$a->fullname}」は<strong>{$a->date}</strong>に有効期限が切れました。';
$string['certifications'] = '資格';
$string['close'] = '閉じる';
$string['completeallinanyorder'] = '順番を問わない';
$string['completeallinorder'] = 'すべて順番に完了する';
$string['completeatleast'] = '少なくとも以下を完了する';
$string['completed'] = '完了';
$string['completedprogramslink'] = '<a href="{$a->href}">{$a->count}件の完了したプログラム</a>';
$string['completion'] = '完了';
$string['completion_help'] = 'セットに準じる完了の種類:

* <strong>すべて順番に:</strong> ユーザは、指定された順序ですべてのコースを完了する必要があります
* <strong>すべて任意の順序で:</strong> ユーザはすべてのコースを任意の順序で完了する必要があります
* <strong>少なくとも X:</strong> ユーザは、少なくとも指定された数のコースを任意の順序で完了する必要があります';
$string['completionatleast'] = '最低でも完了';
$string['completioncriteria'] = '完了基準';
$string['completioncriteriagroup'] = '完了';
$string['completioncriteriagroup_help'] = 'この特定のセットに対する完了基準を選択してください';
$string['completiondate'] = '完了日';
$string['completiondateonorafter'] = '完了日以降';
$string['conditionprogramcompleted'] = '完了したプログラム';
$string['conditionprogramcompletedalldescription'] = '次のすべてのプログラムでステータスが「完了」になっているユーザ: \'{$a->programname}\'';
$string['conditionprogramcompletedalldescriptionwithdate'] = '次のすべてのプログラムでステータスが「完了」になっているユーザ: \'{$a->programname}\'<br />
完了日が \'{$a->conditiondate}\' 以降';
$string['conditionprogramcompletedanydescription'] = '次のいずれかのプログラムでステータスが「完了」になっているユーザ: \'{$a->programname}\'';
$string['conditionprogramcompletedanydescriptionwithdate'] = '次のいずれかのプログラムでステータスが「完了」になっているユーザ: \'{$a->programname}\'<br />
完了日が \'{$a->conditiondate}\' 以降';
$string['conditionprogramcompleteddescription'] = 'プログラム \'{$a}\' でステータスが「完了」になっているユーザ';
$string['conditionprogramcompleteddescriptionwithdate'] = 'プログラム \'{$a->programname}\' でステータスが「完了」のユーザ<br />
完了日は \'{$a->conditiondate}\' 以降です';
$string['conditionprogramnotcompleted'] = '完了していないプログラム';
$string['conditionprogramnotcompleteddescription'] = 'プログラム \'{$a}\' でステータスが「完了」になっていないユーザ';
$string['conditionprogramoverdue'] = '期限切れのプログラム';
$string['conditionprogramoverduedescription'] = 'プログラム \'{$a}\' でステータスが「期限超過」になっているユーザ';
$string['conditionprogramoverduedescriptionwithdate'] = 'プログラム \'{$a->programname}\' でステータスが「期限超過」のユーザ<br />
期日は \'{$a->conditiondate}\' 以降です';
$string['conditionprogramsuspended'] = '一時停止のプログラム';
$string['conditionprogramsuspendeddescription'] = 'プログラム \'{$a}\' でステータスが「一時停止」になっているユーザ';
$string['conditionprogramsuspendeddescriptionwithdate'] = 'プログラム \'{$a->programname}\' でステータスが 「一時停止」 のユーザ<br />
一時停止日は \'{$a->conditiondate}\' 以降です';
$string['conditionuserallocated'] = 'プログラムに割り当てられたユーザ';
$string['conditionuserallocateddescription'] = 'プログラム \'{$a}\' に割り当てられたユーザ';
$string['conditionuserallocateddescriptionwithdate'] = 'プログラム \'{$a->programname}\' に割り当てられたユーザ<br />
割り当て日は \'{$a->conditiondate}\' 以降です';
$string['conditionusernotallocated'] = 'プログラムに割り当てられていないユーザ';
$string['conditionusernotallocateddescription'] = 'プログラム \'{$a}\' に割り当てられていないユーザ';
$string['confirmdeallocateusers'] = 'この操作により、選択したすべてのユーザの割り当てと関連データが完全に削除されます。この操作は元に戻せません。';
$string['confirmdeallocateusersheader'] = 'ユーザの割り当て解除';
$string['confirmdeletecourse'] = '本当にこのコース \'{$a}\' をプログラムから削除してよろしいですか？';
$string['confirmdeleteprogram'] = '本当にこのプログラム \'{$a}\' とそれに関連つけられたデータを削除してよろしいですか？この操作は元に戻せません。';
$string['confirmdeleteset'] = '本当にこのセット \'{$a}\' とその中にあるすべてのコースを削除してよろしいでしょうか？';
$string['confirmdeleteuserallocation'] = '本当にユーザ \'{$a}\' と関連する割り当てのデータを完全に削除してよろしいでしょうか？この操作は元に戻せません。';
$string['confirmduplicate'] = 'プログラム内容とスケジュールが含まれ、ユーザは含まれないコピーが作成されます。プログラムIDナンバーフィールドは削除されます。';
$string['confirmrecalculateprogress'] = '通常、一部の学生がプログラムを完了した後にプログラムの設定が変更されても、完了要件を満たさなくなった場合でも、そのプログラムは「完了」ステータスのまま残ります。このアクションを実行すると、プログラムの完了をリセットし、再計算できます。なお、この操作はプログラム内のコースや関連する認定には影響を与えません。
<br />このアクションは元に戻せません。本当に続行しますか？';
$string['confirmresetprogress'] = '\'{$a}\' の進捗をリセットしてもよろしいですか？ このアクションは以下を実行します。<br /><br />
<ul>
<li>プログラムをリセットする</li>
<li>このプログラム内のすべてのコースをリセットする</li>
<li>すべての完了データを削除する</li>
</ul>
このアクションの完了には数分かかる場合があり、元に戻すことはできません。';
$string['confirmresetusersprogramusers'] = '選択されたすべてのユーザに対して、このアクションは以下を実行します。<br /><br />
<ul>
<li>プログラムをリセットする</li>
<li>このプログラム内のすべてのコースをリセットする</li>
<li>すべての完了データを削除する</li>
</ul>
このアクションの完了には数分かかる場合があり、元に戻すことはできません。';
$string['containscourse'] = 'コースを含む';
$string['content'] = 'コンテンツ';
$string['copy'] = 'コピー';
$string['course'] = 'コース';
$string['coursealreadyinset'] = 'コースはすでにこのセットに存在しています';
$string['coursecompletiondisabled'] = 'このコースの完了トラッキングは有効になっていません。学習者のダッシュボードでは未完了と表示され、プログラムを完了できない可能性があります。';
$string['coursecriteriadisabled'] = 'このコースの完了トラッキングは有効になっていますが、基準が設定されていません。';
$string['courseinformation'] = 'コース情報';
$string['coursenotavailable'] = 'コース利用不可';
$string['coursesinset'] = 'セット内のコース(カンマ区切り)';
$string['coursesinsetlines'] = 'セット内のコース(1行に1つずつ)';
$string['coursesinsetlineslinks'] = 'セット内のリンク付きコース(1行に1つずつ)';
$string['coursesinsetlinks'] = 'セット内のリンク付きコース(カンマ区切り)';
$string['criteriaall'] = '選択されたプログラムがすべて完了した場合';
$string['criteriaany'] = '選択されたプログラムのうち少なくとも 1 つが完了した場合';
$string['criteriaany_help'] = 'ユーザがすでに 1 つのプログラムを完了している場合、2 つ目のプログラムを完了してもアクションは再度トリガーされません。';
$string['criteriaeach'] = 'ユーザが選択されたプログラムのいずれかを完了するたびに';
$string['criteriaeach_help'] = '選択された各プログラムごとに、個別のルールを作成するのと同じです。';
$string['dateoverriden'] = 'オーバーライドした日';
$string['datetypeabsolute'] = '日付を選択';
$string['datetypenone'] = '設定なし';
$string['dayssinceallocation'] = '割り当て以降の日数';
$string['daystakingprogram'] = 'プログラム受講日数';
$string['deallocateusers'] = 'ユーザの割り当てを解除する';
$string['default'] = 'デフォルト';
$string['deleteallocation'] = '割り当てを削除';
$string['deleteuserallocation'] = 'ユーザ割り当てを削除';
$string['description'] = '説明';
$string['directallocationdisabled'] = 'このプログラムへの直接割り当ては無効になっています';
$string['displaycompletedcourses'] = 'プログラムで完了したコース';
$string['displaycompletiondate'] = 'プログラム完了日';
$string['displayprogramduedate'] = 'プログラムの期日';
$string['displayprogramid'] = 'URLに使用されている内部プログラムID';
$string['displayprogramname'] = 'プログラム名';
$string['dontchange'] = '変更しないでください';
$string['duedate'] = '期限';
$string['duedate_help'] = 'このプログラムの終了日';
$string['duedateonorafter'] = '終了日以降';
$string['duplicate'] = '複製';
$string['dynamic'] = 'ダイナミック';
$string['dynamicrules'] = 'ダイナミックルール';
$string['dynamicrulesplugincheck'] = 'tool_dynamicruleプラグインがないと、ダイナミックルールの一覧を表示することはできません';
$string['dynamicrulewarningdeallocation'] = 'ユーザは、別のダイナミックルールによって割り当てられた場合にのみ割り当てを解除できます。手動での割り当てには影響しません。';
$string['editallocation'] = '割り当てを編集';
$string['editprogramname'] = 'プログラムの名前を編集';
$string['editsetname'] = 'セットの名前を編集';
$string['editstatusanddates'] = 'ステータスと日付を編集する';
$string['editstatusanddatesbulk'] = '複数のユーザのステータスと日付を編集する';
$string['enddate'] = '終了日';
$string['enddate_help'] = 'このプログラムの遮断日';
$string['enrol'] = '登録';
$string['enrolled'] = '登録された';
$string['entityprogram'] = 'プログラム';
$string['entityprogramcompletion'] = 'ユーザ完了';
$string['entityprogramcontent'] = 'プログラムコンテンツ';
$string['entityprogramitem'] = 'プログラムアイテム';
$string['entityprogramusers'] = 'ユーザ割り当て';
$string['errorallocationenddatenostartdate'] = '割り当て開始日が設定されていない場合、割り当て終了日を相対日にすることはできません。';
$string['errorallocationenddatepreviousstartdate'] = '割り当て遮断日は割り当て開始日より前にはできません';
$string['errorbasesetnotfound'] = 'ベースセットが見つかりません';
$string['errorcannotallocate'] = 'ユーザをプログラムに割り当てることができません（割り当てはすでに存在するか、許可されていません）';
$string['errorcannotresetprogram'] = 'プログラムをリセットできません';
$string['errorcantallocateusers'] = 'ユーザを割り当てられません';
$string['errorcantcreateset'] = 'セットを作成できません';
$string['errorcantdeletenotarchivedprogram'] = 'アーカイブされていないプログラムを削除することはできません';
$string['errorcantselfenrol'] = '自己登録できません';
$string['errorcertificationnotfound'] = '認定が見つかりません';
$string['errorcouldnotallocate'] = 'ユーザ \'{$a->originaluserfullname}\' ユーザ \'{$a->program}\' に割り当てることができませんでした';
$string['errorduedatepreviousstartdate'] = '終了日は開始日より前にはできません';
$string['errorenddatepreviousduedate'] = '遮断日は終了日より前にはできません';
$string['errorenddatepreviousstartdate'] = '遮断日は開始日より前にはできません';
$string['errorhelperactionnotallowed'] = 'ヘルパー操作が許可されていません';
$string['erroridnumberuniquetenant'] = 'このIDナンバーは既に他のプログラムで使用されています。';
$string['errorinvaliddate'] = '無効な日付';
$string['errorinvalidpastenddate'] = '終了日は開始日または期日より前に設定できません。';
$string['errorinvalidprogram'] = '無効なプログラム';
$string['errorinvalidprogramitemmove'] = '無効なプログラムアイテム移動';
$string['errorloadingprogram_mobile'] = 'プログラムの読み込み中にエラーが発生しました。';
$string['errormissingenrolprogramplugin'] = 'エンロールプログラムプラグインが見つかりません';
$string['errornopermissionallocateusers'] = 'ユーザをプログラムに割り当てる権限がありません';
$string['errornopermissionmanageprograms'] = 'プログラムの管理権限がありません';
$string['errornopermissionmanageusers'] = 'ユーザの管理権限がありません';
$string['errornopermissionviewallocatedusers'] = 'プログラムに割り当てられたユーザの閲覧権限がありません';
$string['errornopermissionviewprograms'] = 'プログラムの閲覧権限がありません';
$string['errornopermissionviewreports'] = 'レポートの閲覧権限がありません';
$string['errornostudentsrolefound'] = '学生ロールが見つかりませんでした。';
$string['errornothingtoexportforprograms'] = '共有プログラム用にエクスポートするものはありません: {$a}';
$string['errorprogramnotfound'] = 'プログラムが見つかりませんでした';
$string['errorreporttypedoesnotexist'] = 'レポートタイプが存在しません';
$string['errorsameidnumber'] = '同じIDナンバーのプログラムが既に存在します';
$string['errorsomeprogramsdontexist'] = '一部のプログラムは存在しません';
$string['errorusercantbeallocated'] = 'ユーザを割り当てることができません';
$string['eventcourseadded'] = 'コースが追加されました';
$string['eventcourseremoved'] = 'コースが削除されました';
$string['eventcourseupdated'] = 'コースが更新されました';
$string['eventprogramcompleted'] = 'プログラムが完了しました';
$string['eventprogramcreated'] = 'プログラムが作成されました';
$string['eventprogramdeleted'] = 'プログラムが削除されました';
$string['eventprogramupdated'] = 'プログラムが更新されました';
$string['eventsetcompleted'] = 'セットが完了しました';
$string['eventsetcreated'] = 'セットが作成されました';
$string['eventsetdeleted'] = 'セットが削除されました';
$string['eventsetupdated'] = 'セットが更新されました';
$string['eventuserallocated'] = 'ユーザ割り当てが完了しました';
$string['eventuserdeallocated'] = 'ユーザの割り当て解除されました';
$string['eventuserupdated'] = 'ユーザの割り当てが更新されました。';
$string['existingcourses'] = '既存のコース';
$string['export_content'] = '設定';
$string['export_content_help'] = 'プログラム、名前、概要、日付、タグなど';
$string['export_dynamic_rules'] = 'ダイナミックルール';
$string['export_dynamic_rules_help'] = 'プログラムのすべてのダイナミックルール構成';
$string['export_user_allocations'] = 'プログラムへのユーザ割り当て';
$string['export_user_allocations_help'] = 'これらのプログラムへのユーザ割り当てが含まれます。ユーザ自身のコピーは含まれません。';
$string['exportonlyallocationspostfix'] = '(ユーザ割り当てのみ)';
$string['exportprogramsdescription'] = 'コース、ユーザ割り当て、ダイナミックルール要素を含むプログラム';
$string['fullprogramreport'] = 'プログラム全体のレポート';
$string['futureallocation'] = '将来的な割り当て';
$string['gotoprogram'] = 'プログラムに移動';
$string['hidden'] = '非表示';
$string['hiddenfromlearners'] = '学習者から秘匿する';
$string['idnumber'] = 'IDナンバー';
$string['import_content'] = '設定';
$string['import_content_help'] = 'プログラム、名前、概要、日付、タグなど';
$string['import_dynamic_rules'] = 'ダイナミックルール';
$string['import_dynamic_rules_help'] = 'プログラムのすべてのダイナミックルール構成';
$string['import_user_allocations'] = 'プログラムへのユーザ割り当て';
$string['import_user_allocations_help'] = 'これらのプログラムへのユーザ割り当てが含まれます。';
$string['importcannotallocate'] = 'プログラム \'{$a->program}\' にユーザ \'{$a->originaluserfullname}\' を割り当てることができません。割り当てはすでに存在するかまたは許可されていません。';
$string['importlogfailed'] = 'プログラム \'{$a->fullname}\' をインポートできませんでした。';
$string['importlogidnumberexists'] = 'ID番号 \'{$a->originalidnumber}\' のプログラムは既に存在します';
$string['importlogsuccess'] = '新しいプログラムを作成しました。 \'<a href="{$a->url}">{$a->fullname}</a>\' {$a->setscount} セット、{$a->coursescount} コース';
$string['importlogsuccessuserallocations'] = 'ユーザ \'{$a->userfullname}\' をプログラム \'{$a->program}\' に割り当てました';
$string['include_shared_entities'] = '共有エンティティを含める';
$string['include_shared_entities_help'] = 'このオプションを有効にすると、エクスポートされたファイルにも含まれます:

* 現在のテナントで利用可能なすべての共有プログラム
* 現在のテナントコースカテゴリ以外のすべてのプログラムコース';
$string['inprogress'] = '進行中';
$string['keepprogramdefaults'] = 'プログラムをデフォルトのままにする';
$string['lessthanaday'] = '1日以内';
$string['locked'] = 'ロック済み';
$string['lockedreasonparent'] = '次の場合を除き、利用できません：セット {$a} が利用可能';
$string['lockedreasonpreviouscourse'] = '次の場合を除き、利用できません：以前のコース {$a} が完了としてマークされている';
$string['lockedreasonpreviousset'] = '次の場合を除き、利用できません：以前のセット {$a} が完了としてマークされている';
$string['maincompletion'] = 'メイン完了';
$string['managedusersoverdue'] = '一部のチームメンバーに期限超過プログラムがあります';
$string['manual'] = '手動';
$string['mappingerrorprogramnotfound'] = 'プログラム {$a} が見つかりません';
$string['mappingnoticenoidnumber'] = 'ID番号が空だったため、プログラムは名前で検索されました。プログラムにID番号を割り当てることをお勧めします';
$string['messageprovider:programcompleted'] = 'プログラム完了';
$string['messageprovider:programuserallocated'] = 'プログラムに割り当てられたユーザ';
$string['messageprovider:programuserdeallocated'] = 'プログラムから割り当て解除されたユーザ';
$string['missingcompletion'] = '完了基準が見つかりません';
$string['missingcourse'] = 'コースが見つかりません';
$string['missingfullname'] = 'プログラムの名前が見つかりません。';
$string['missingprogram'] = '存在しないプログラム';
$string['missingsetname'] = 'セットの名前が見つかりません。';
$string['name'] = '名前';
$string['never'] = 'なし';
$string['newemptycourse'] = '新しい空のコース';
$string['newnameforset'] = '\'{$a}\' の新しい名前';
$string['newprogram'] = '新しいプログラム';
$string['notarchived'] = 'アーカイブされていない';
$string['notavailable'] = '利用不可';
$string['notcompleted'] = '完了していない';
$string['notenrolledprograms_mobile'] = 'あなたはどのプログラムにも登録されていません';
$string['notificationduedate'] = 'このプログラムの期限は {$a} です。<br /><br />';
$string['notificationprogramcompleted'] = 'こんにちは {$a->userfullname} さん、<br /><br />
プログラム \'{$a->programname}\' の完了おめでとうございます！<br /><br />
プログラム内のコースはいつでも再訪できます。プログラム全体は「マイコース」ページから確認できます。<br /><br />
{$a->sitename}<br />
{$a->siteurl}';
$string['notificationprogramuserallocated'] = 'こんにちは {$a->userfullname} さん、<br /><br />
プログラム \'{$a->programname}\' へようこそ！「マイコース」ページで確認できます。<br /><br />
{$a->duedatemsg}
{$a->sitename}<br />
{$a->siteurl}';
$string['notificationprogramuserdeallocated'] = 'こんにちは {$a->userfullname} さん、<br /><br />
プログラム \'{$a->programname}\' は終了し、アクセスできなくなりました。<br /><br />
{$a->sitename}<br />
{$a->siteurl}';
$string['notificationsubjectprogramcompleted'] = 'おめでとうございます - \'{$a}\' を完了しました！';
$string['notificationsubjectprogramuserallocated'] = 'ようこそ \'{$a}\' へ';
$string['notificationsubjectprogramuserdeallocated'] = '\'{$a}\' は終了しました';
$string['notset'] = '未設定';
$string['notsuspended'] = '一時停止なし';
$string['notvisible'] = '非表示';
$string['nousersselected'] = '少なくとも1人のユーザを選択する必要があります';
$string['numbercoursesinprogramunique'] = 'コース数(ユニーク)';
$string['numbercoursesinset'] = 'セット内のコース数';
$string['numbercurrentallocatedusers'] = '現在割り当てられているユーザ数';
$string['open'] = 'オープン';
$string['outcomeallocation'] = 'ユーザをプログラムに割り当てる';
$string['outcomeallocationdescdate'] = 'ユーザをプログラム \'{$a->programname}\' に割り当てる<br />
{$a->startdatestr}<br />
一時停止中のユーザを含む: {$a->suspendedusers}';
$string['outcomeallocationdesckeepdate'] = '一時停止を解除し、既存のプログラムの開始日/終了日は変更しない';
$string['outcomeallocationdesckeepstartdate'] = 'プログラムのデフォルトの開始日を維持する';
$string['outcomeallocationdescstartdate'] = 'プログラムの開始日: \'{$a->startdate}\'';
$string['outcomeallocationdescsuspendchangedate'] = '一時停止を解除し、プログラムの開始日/終了日を変更する';
$string['outcomeallocationdontmodify'] = '割り当てを変更しない';
$string['outcomeallocationsuspendedusers'] = '一時停止中のユーザを含む';
$string['outcomeallocationsuspendedusers_help'] = 'ユーザが既に割り当てられているが、その割り当てが一時停止または終了している場合に実行するアクション';
$string['outcomeallocationunsuspend'] = '一時停止を解除し、既存のプログラムの開始日/終了日は変更しない';
$string['outcomeallocationunsuspendchangedate'] = '一時停止を解除し、プログラムの開始日/終了日を変更する';
$string['outcomedeallocate'] = 'ユーザのプログラム割り当てを解除する';
$string['outcomedeallocatesuspend'] = '既存の割り当てを一時停止する';
$string['outcomedeallocation'] = 'ユーザをプログラムから割り当て解除';
$string['outcomedeallocationdescription'] = 'ユーザをプログラム \'{$a}\' から割り当て解除';
$string['outcomedeallocationdescriptionsuspend'] = 'プログラム \'{$a}\' の既存のユーザ割り当てを一時停止する';
$string['overdue'] = '期限切れ';
$string['overdueprograms'] = '期限経過したプログラム';
$string['overdueprogramslink'] = '<a href="{$a->href}">{$a->count}件の期限経過したプログラム</a>';
$string['parentname'] = '親(上位)の名前';
$string['pending'] = '保留';
$string['pendingreasonhiddencourse'] = 'このコースのロックを解除に必要な一部のコースは利用できません。サイト管理者に連絡してください。';
$string['pendingreasonparent'] = '以下の時に自動的に完了マークされます：セット {$a} が利用可能';
$string['pendingreasonpreviouscourse'] = '次の時に自動的に完了マークされます：以前のコース {$a} が完了マークされている';
$string['pendingreasonpreviousset'] = '次の時に自動的に完了マークされます：以前のセット {$a} が完了マークされている';
$string['pluginname'] = 'プログラム';
$string['previewprogramname'] = 'プログラム名のプレビュー';
$string['privacy:metadata:core_tag'] = 'プログラムに追加されたタグ';
$string['privacy:metadata:program_set_completion'] = 'プログラムセット完了の情報。';
$string['privacy:metadata:program_set_completion:completeddate'] = 'ユーザがセットを完了した日。';
$string['privacy:metadata:program_set_completion:setid'] = '完了したセット。';
$string['privacy:metadata:program_set_completion:timemodified'] = 'セット完了の更新日時。';
$string['privacy:metadata:program_set_completion:userid'] = 'セットを完了したユーザ。';
$string['privacy:metadata:program_users'] = 'ユーザプログラム割り当てに関する情報。';
$string['privacy:metadata:program_users:allocationtype'] = 'ユーザの割り当て元のソース。';
$string['privacy:metadata:program_users:certificationid'] = '認定が割り当てられているユーザ(申請可能な場合)。';
$string['privacy:metadata:program_users:duedate'] = 'プログラム終了日。';
$string['privacy:metadata:program_users:duedatelocked'] = 'デフォルトのプログラム終了日がオーバーライドされているかどうか。';
$string['privacy:metadata:program_users:enddate'] = 'このユーザのプログラム遮断日。';
$string['privacy:metadata:program_users:enddatelocked'] = 'プログラムの遮断日がオーバーライドされているかどうか。';
$string['privacy:metadata:program_users:programid'] = 'プログラムの割り当て先';
$string['privacy:metadata:program_users:startdate'] = 'このユーザのプログラム開始日。';
$string['privacy:metadata:program_users:startdatelocked'] = 'デフォルトプログラム開始日がオーバーライドされているかどうか。';
$string['privacy:metadata:program_users:status'] = 'ユーザがプログラムから一時停止されているかどうか。';
$string['privacy:metadata:program_users:timemodified'] = 'ユーザ割り当ての更新時刻。';
$string['privacy:metadata:program_users:userid'] = 'プログラムに割り当てられたユーザのID。';
$string['program:allocateuser'] = 'ユーザをプログラムに割り当てる';
$string['program:configurecustomfields'] = 'プログラムカスタムフィールドの設定';
$string['program:coursereset'] = 'プログラムコースをリセット';
$string['program:edit'] = 'プログラムを編集';
$string['programcompleted'] = 'プログラム完了';
$string['programcompletiondate'] = 'プログラム完了日';
$string['programdates'] = '日付';
$string['programdates_help'] = 'このプログラムの割り当てに適用する日付を選択してください：

プログラムで定義された日付と同じ: プログラム内で定義された日付を使用します。
日付を選択: このプログラムの割り当てに対して、開始日、期限、終了日を個別に設定できます。';
$string['programdescription'] = 'プログラムの説明';
$string['programdescription_help'] = 'プログラムの説明は、プログラムの情報ページおよびカバーページに表示されます。';
$string['programduedate'] = 'プログラムの終了日';
$string['programfullname'] = 'プログラム名';
$string['programfullname_help'] = 'プログラム名は、コース一覧ページに表示されます。';
$string['programidnumber'] = 'プログラムIDナンバー';
$string['programidnumber_help'] = 'プログラムのIDナンバーは、プログラムを外部システムと一致させるときにのみ使われ、サイトの他の場所には表示されません。プログラムが正式なコード名を持っていた場合、それは入力されたものであり、そうでない限りそのフィールドは空白のままになります。';
$string['programimage'] = 'プログラムイメージ';
$string['programimage_help'] = 'プログラムのイメージは、コース一覧ページに表示されます。';
$string['programinformation'] = 'プログラム情報';
$string['programname'] = 'プログラム名';
$string['programnamewitheditlink'] = '編集リンク付きのプログラム名';
$string['programnamewithimage'] = 'イメージ付きプログラム名';
$string['programnamewithimageandeditlink'] = 'イメージと編集リンク付きのプログラム名';
$string['programnamewithimageandviewlink'] = 'イメージと閲覧リンク付きのプログラム名';
$string['programnamewithviewlink'] = '閲覧リンク付きのプログラム名';
$string['programparentsetname'] = '親セット名';
$string['programprogress'] = 'プログラムの進捗';
$string['programprogressexport'] = '{$a} のプログラム進捗';
$string['programprogresswithreportlinks'] = 'レポートリンク付きプログラムの進捗状況';
$string['programreset'] = 'プログラムをリセット';
$string['programrules'] = 'プログラムのルール';
$string['programs'] = 'プログラム';
$string['programscustomfield'] = 'プログラムのカスタムフィールド';
$string['programsetname'] = 'セット名';
$string['programsoverview_mobile'] = 'プログラム概要';
$string['programstatus'] = 'プログラムのステータス';
$string['programtags'] = 'プログラムのタグ';
$string['programtags_help'] = 'このプログラムのタグ';
$string['programtenant'] = 'プログラム テナント';
$string['programuserallocations'] = 'プログラムユーザの割り当て';
$string['programvisibility'] = 'プログラムの表示';
$string['programvisibility_help'] = 'この設定は、プログラムがユーザのコース一覧に表示されるかどうかを決定します。';
$string['progress'] = '{$a} 件完了';
$string['progressoverview'] = '進捗概要';
$string['progressoverviewfor'] = '{$a} の進捗概要';
$string['progresspercent'] = '進捗';
$string['progressreport'] = '進捗レポート';
$string['recalculateprogramcompletion'] = 'プログラムの完了状況を再計算';
$string['recalculateprogramcompletion_help'] = 'プログラムの完了状況は、すべてのプログラムユーザに対して再計算されます。プログラムを完了したユーザであっても、新しいコンテンツが追加された場合、再度プログラムを完了する必要が生じる可能性があることに注意してください。
この処理には数分かかる場合があり、元に戻すことはできません。';
$string['reg_wpprograms'] = 'プログラム数 ({$a})';
$string['reportprogramsallocationcompletion'] = 'プログラムユーザの割り当てと完了';
$string['reset'] = 'リセット';
$string['resetprogress'] = 'プログラムをリセットする';
$string['resetusersprogram'] = 'ユーザプログラムのリセット';
$string['restore'] = 'リストア';
$string['review'] = 'レビュー';
$string['rolemanager'] = 'プログラムのマネージャ';
$string['rolemanagerdescription'] = '現在のテナント内でプログラムを作成、管理し、ユーザを割り当てることを許可';
$string['scheduleupdatesuccess'] = 'スケジュールは正常に更新されました';
$string['seecontent_mobile'] = 'コンテンツを表示する';
$string['selectactiveandarchivedprograms'] = 'アクティブでアーカイブされたプログラムをすべて選択します';
$string['selectallactiveprograms'] = 'アクティブなプログラムをすべて選択します';
$string['selectallprogramsinthisfile'] = 'このファイル内のすべてのプログラムを選択します';
$string['selectatleastoneprogram'] = '最低でも1つのプログラムを選択';
$string['selectcourses'] = 'コースを選択';
$string['selectmanually'] = '手動で選択...';
$string['selectprogramcondition'] = 'プログラム';
$string['selectprogramcondition_help'] = 'このコンディションに関連付けるプログラムを選択する';
$string['selectprogramoutcome'] = 'プログラム';
$string['selectprogramoutcome_help'] = 'このアクションに関連付けるプログラムを選択する';
$string['selectprogramstoallocate'] = 'プログラム';
$string['selectprogramstoallocate_help'] = 'ユーザを割り当てるプログラムを選択する';
$string['separatetenantsingroupswarning'] = 'テナント間で共有されるコースでは、各テナントのユーザは別々のグループに追加されます。';
$string['set'] = 'セット';
$string['setcompletiondate'] = '完了日を設定';
$string['setname'] = '名';
$string['setname_help'] = 'セット名を選択してください';
$string['setofcourses'] = 'コースのセット';
$string['setsandcoursesnotfound_mobile'] = 'コースまたはセットが見つかりません';
$string['startdate'] = '開始日';
$string['startdate_help'] = 'プログラムの開始日';
$string['status'] = 'ステータス';
$string['status_help'] = '一時停止のステータスはユーザからプログラムを非表示にします。';
$string['suspended'] = '一時停止';
$string['suspendeddateonorafter'] = '一時停止日以降';
$string['tagarea_tool_program'] = 'プログラム';
$string['tags'] = 'タグ';
$string['timecreated'] = '作成日時';
$string['timemodified'] = '最終更新日';
$string['timesuspended'] = '一時停止にされた日時';
$string['toomanyprogramstoshow'] = 'プログラムが多すぎます';
$string['type'] = 'タイプ';
$string['userduedate'] = '締切日';
$string['userduedate_help'] = 'このユーザに対するプログラムの締切日を選択してください。';
$string['userenddate'] = '終了日';
$string['userenddate_help'] = 'このプログラムがユーザから非表示になる日を選択する。';
$string['userlist'] = 'ユーザを選択';
$string['userlist_help'] = 'このプログラムに割り当てるユーザを選択';
$string['users'] = 'ユーザ';
$string['usersallocatedsuccess'] = 'ユーザ {$a} の割り当てが正常に作成されました';
$string['usersallocationnotavailable'] = 'ユーザ割り当ては利用できません';
$string['usersdeallocatedsuccess'] = 'ユーザ {$a} の割り当てが正常に解除されました';
$string['userseditedsuccess'] = 'ユーザ {$a} は正常に変更されました';
$string['usersrecalculationcompletion'] = 'プログラムの完了状況が {$a} 人のユーザに対して再計算されました。';
$string['usersresetprogramsuccess'] = 'ユーザ {$a} のプログラムがリセットされました';
$string['usersskipped'] = 'このオプションを使用できないため、ユーザ {$a} はスキップされました';
$string['userstartdate'] = '開始日';
$string['userstartdate_help'] = 'このユーザがプログラムを開始できる日を選択してください。設定はこのユーザにのみ適応されます。';
$string['visible'] = '表示';
$string['warningcourseinvisible'] = '警告：このコースは生徒には見えません。';
