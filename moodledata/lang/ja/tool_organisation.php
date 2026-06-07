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
 * Strings for component 'tool_organisation', language 'ja', version '4.4'.
 *
 * @package     tool_organisation
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'アクション';
$string['addajob'] = 'ジョブを追加';
$string['addchilddepartment'] = '部門 \'{$a}\' の新しい下位の部門';
$string['addchildposition'] = '役職 \'{$a}\' の新しい下位の役職';
$string['adddepartment'] = 'フレームワーク \'{$a}\' の新しい部門';
$string['adddepartmentframework'] = '新しい部門のフレームワーク';
$string['addjob'] = '新しいジョブ';
$string['addjobforuser'] = '\'{$a}\' の新しいジョブ';
$string['addjobselectedusers'] = '選択されたユーザのための新規ジョブ';
$string['addmanagedusers'] = 'この人物に報告するユーザを追加してください。';
$string['addmanagerusers'] = 'この人物を管理するユーザを追加してください。';
$string['addmanuallyassignedmanager'] = '新しく手動で割り当てられたマネージャー';
$string['addnewdepartment'] = '新しい部門';
$string['addnewposition'] = '新しい役職';
$string['addposition'] = 'フレームワーク \'{$a}\' の新しい役職';
$string['addpositionframework'] = '新しい役職のフレームワーク';
$string['allframeworks'] = '部門と役職のフレームワーク';
$string['alljobsreport'] = 'すべてのジョブレポート';
$string['anydepartment'] = 'すべて';
$string['anymanager'] = 'マネージャーまたは部門リーダー';
$string['anyposition'] = 'すべて';
$string['assfirstchildof'] = '\'{$a}\' の最初の子(下位)として';
$string['assignjob'] = 'ジョブの割り当て';
$string['assignmanager'] = 'マネージャーの割り当て';
$string['assignmanagermanually'] = 'マネージャーの手動割り当て';
$string['assignnewjob'] = 'ユーザに別のジョブを割り当てる';
$string['assignstaff'] = 'スタッフの割り当て';
$string['audienceand'] = 'かつ';
$string['audiencecustomise'] = 'カスタマイズ…';
$string['audiencejobdescription'] = '部門: {$a->department} かつ<br />
役職: {$a->position} のユーザ';
$string['audiencemanager'] = 'マネージャー';
$string['audiencemanagerdescription'] = 'パーミッション: {$a->permissions}';
$string['audiencemanagertypedescription'] = 'マネージャーの種類: {$a->type}';
$string['audienceor'] = 'または';
$string['audienceselect'] = 'レポート閲覧者との関係';
$string['audienceselectinitial'] = 'オーディエンスを選択';
$string['audienceself'] = '自分自身';
$string['audienceusersall'] = '全てのユーザ';
$string['audienceusersdept'] = 'レポート閲覧者と同じ部門';
$string['audienceusersreporting'] = 'レポート閲覧者へレポート';
$string['audienceusersreporting_help'] = 'レポート閲覧者に報告するユーザを含めます（レポート閲覧者自身がマネージャーである必要があります）。
直属の部下とは、マネージャーの職位の直下にある職位に属する管理対象ユーザのことを指します。';
$string['audienceusersreportingdirect'] = 'ダイレクトレポートのみ';
$string['cachedef_myjob'] = '現在のユーザとチームのジョブ';
$string['conditioncanallocateprograms'] = 'プログラムに割り当てることができます';
$string['conditioncanreceivenotifications'] = '通知を受け取ることができます';
$string['conditionuserdepartment'] = '部門にユーザがいます';
$string['conditionuserdepartmentdescription'] = 'ユーザは部門 \'{$a->deptname}\' に割り当てられています<br />
サブ部門: {$a->subdeptsinclude}';
$string['conditionuserdepartmentdescriptionnegated'] = 'ユーザは部門 \'{$a->deptname}\' に割り当てられていません<br />
サブ部門: {$a->subdeptsinclude}';
$string['conditionuserdepartmentdescriptionwithdate'] = 'ユーザは部門 \'{$a->deptname}\' に割り当てられています<br />
サブ部門: {$a->subdeptsinclude}<br />
以降: {$a->conditiondate}';
$string['conditionuserdepartmentsallcriteria'] = '選択したすべての部門にジョブがあるユーザ';
$string['conditionuserdepartmentsalldescription'] = '下記すべての部門にジョブがあるユーザ: \'{$a->deptname}  {$a->subdeptsinclude}';
$string['conditionuserdepartmentsalldescriptionnegated'] = '下記すべての部門にジョブを持たないユーザ: \'{$a->deptname}  {$a->subdeptsinclude}';
$string['conditionuserdepartmentsalldescriptionwithdate'] = '{$a->conditiondate} からまたはそれ以降、下記すべての部門にジョブがあるユーザ: \'{$a->deptname}  {$a->subdeptsinclude}';
$string['conditionuserdepartmentsanycriteria'] = '選択した部門の中にひとつでもジョブがあるユーザ';
$string['conditionuserdepartmentsanycriteria_help'] = 'ユーザが選択された1つの部門ですでに仕事を持っている場合、2つ目の部門で新しい仕事を得ても、再びアクションがトリガーされることはありません。';
$string['conditionuserdepartmentsanydescription'] = '下記の部門の中でひとつでもジョブを持つユーザ: \'{$a->deptname}\'<br /> {$a->subdeptsinclude}';
$string['conditionuserdepartmentsanydescriptionnegated'] = '下記の部門の中でひとつもジョブを持っていないユーザ: \'{$a->deptname}\'<br /> {$a->subdeptsinclude}';
$string['conditionuserdepartmentsanydescriptionwithdate'] = '下記の部門の中で {$a->conditiondate} 以降にひとつでもジョブを持つユーザ: \'{$a->deptname}\'<br /> {$a->subdeptsinclude}';
$string['conditionuserdepartmentseachcriteria'] = '選択された部門のいずれかにユーザが就くたび';
$string['conditionuserdepartmentseachcriteria_help'] = '選択された各部門に1つずつ、複数のルールを作成することに等しい';
$string['conditionusernotindepartment'] = '部門にユーザがいません';
$string['conditionuserposition'] = 'ユーザは役職を持っています';
$string['conditionuserpositiondescription'] = 'ユーザは役職 \'{$a->posname}\' を持っています<br />
サブ役職: {$a->subposinclude}';
$string['conditionuserpositiondescriptionnegated'] = 'ユーザは役職 \'{$a->posname}\' を持っていません<br />
サブ役職: {$a->subposinclude}';
$string['conditionuserpositiondescriptionwithdate'] = 'ユーザは役職 \'{$a->posname}\' を持っています<br />
サブ役職: {$a->subposinclude}<br />
以降: {$a->conditiondate}';
$string['conditionuserpositionsallcriteria'] = '選択したすべての役職にジョブがあるユーザ';
$string['conditionuserpositionsalldescription'] = '下記すべての役職にジョブがあるユーザ: \'{$a->posname}\'  {$a->subposinclude}';
$string['conditionuserpositionsalldescriptionnegated'] = '下記すべての役職にジョブを持たないユーザ: \'{$a->posname}\' {$a->subposinclude}';
$string['conditionuserpositionsalldescriptionwithdate'] = '{$a->conditiondate} 以降、下記すべての役職に同時にジョブを持つユーザ: \'{$a->posname}\'  {$a->subposinclude}  {$a->subposinclude}';
$string['conditionuserpositionsanycriteria'] = '選択した役職の中にひとつでもジョブがあるユーザ';
$string['conditionuserpositionsanycriteria_help'] = 'ユーザがすでに選択した役職に就いている場合、2つ目の役職で新しいジョブを得ても、再びアクションが発生することはありません。';
$string['conditionuserpositionsanydescription'] = '下記の役職の中でひとつでもジョブを持つユーザ:  \'{$a->posname}\'<br />  {$a->subposinclude}';
$string['conditionuserpositionsanydescriptionnegated'] = '下記の役職の中でひとつもジョブを持たないユーザ:  \'{$a->posname}\'<br />  {$a->subposinclude}';
$string['conditionuserpositionsanydescriptionwithdate'] = '{$a->conditiondate} 以降、下記の役職の中でひとつでもジョブを持つユーザ:  \'{$a->posname}\'<br />  {$a->subposinclude}';
$string['conditionuserpositionseachcriteria'] = '選択された役職のいずれかにユーザが就くたび';
$string['conditionuserpositionseachcriteria_help'] = '選択された各役職に1つずつ、複数のルールを作成することに等しい';
$string['conditionuserwithoutposition'] = 'ユーザは役職を持っていません';
$string['confirmunassignmanagers'] = '選択したユーザの手動割り当てマネージャーをすべて解除してもよろしいですか？この操作は元に戻せません。';
$string['creategenericframework'] = '汎用フレームワークを作成する';
$string['current'] = '現在: {$a}';
$string['delete'] = '削除';
$string['deletedepartment'] = '部門 \'{$a}\' を削除';
$string['deletedepartmentconfirm'] = '本当に部門 \'{$a}\' を削除しますか？';
$string['deletedepartmentframework'] = '部門のフレームワーク \'{$a}\' を削除する';
$string['deletedepartmentframeworkconfirm'] = '本当に部門のフレームワーク \'{$a}\' を削除しますか？';
$string['deletejob'] = 'ジョブを完全に削除';
$string['deleteposition'] = '役職 \'{$a}\' を削除';
$string['deletepositionconfirm'] = '本当に役職 \'{$a}\' を削除しますか？';
$string['deletepositionframework'] = '役職のフレームワーク \'{$a}\' を削除';
$string['deletepositionframeworkconfirm'] = '本当に役職のフレームワーク \'{$a}\' を削除しますか？';
$string['department'] = '部門';
$string['department_help'] = '部門を選択';
$string['departmentandpositionrequiredforjobcreate'] = 'ジョブの作業を続けるためには、部署と役職を作成する必要があります';
$string['departmentdeleted'] = '部門は正常に削除されました';
$string['departmentdescription'] = '説明';
$string['departmentframework'] = '部門のフレームワーク';
$string['departmentframeworkidnumber'] = '部門フレームワーク idnumber';
$string['departmentframeworkpostfix'] = '{$a} (部門フレームワーク)';
$string['departmentframeworks'] = '部門のフレームワーク';
$string['departmentfrmidnumberconflict'] = '部門フレームワークID番号はすでに存在します';
$string['departmenthasjobs'] = '関連したジョブがあるため、部門が削除できません。';
$string['departmentidentifier'] = '部門識別子';
$string['departmentidentifier_help'] = 'これはCSVの行を識別する列であり、親を見つけるために使用されます';
$string['departmentidnumber'] = 'IDナンバー';
$string['departmentidnumberconflict'] = '部門ID番号はすでに存在します';
$string['departmentleadpermissions'] = '部門責任者のパーミッション';
$string['departmentmanagementicons'] = '部門管理アイコン';
$string['departmentmanager'] = '部門責任者';
$string['departmentmanager_help'] = '部門管理職に就いている人は、役職に関わらず、同じ部門か下位の部門に所属している人のマネージャとみなされます。';
$string['departmentname'] = '部門名';
$string['departmentnotfound'] = '部門が見つかりません';
$string['departmentparent'] = '親';
$string['departmentrequiredforjobcreate'] = 'ジョブの作業を続けるためには、部門を作成する必要があります';
$string['departments'] = '部門';
$string['departmentwithicons'] = '権限のある部門';
$string['directreports'] = '<a href="{$a->url}">{$a->count} ダイレクトレポート</a>';
$string['directreports_plural'] = '<a href="{$a->url}">{$a->count} ダイレクトレポート</a>';
$string['editdates'] = '編集日';
$string['editdepartment'] = '部門 \'{$a}\' を編集';
$string['editdepartmentframework'] = '部門のフレームワーク \'{$a}\' を編集';
$string['editdepartmentname'] = '部門名を編集';
$string['editjobdatesforuser'] = '\'{$a}\' ジョブの日付を編集';
$string['editmanuallyassignedmanager'] = '割り当てを編集';
$string['editposition'] = '役職 \'{$a}\' を編集';
$string['editpositionframework'] = '役職のフレームワーク \'{$a}\' を編集';
$string['editpositionname'] = '役職名を編集';
$string['enddate'] = '遮断日';
$string['enddate_help'] = 'ジョブの遮断日';
$string['enddaterelativetostart'] = '開始日を基準';
$string['entitydepartment'] = '部門';
$string['entityjob'] = 'ジョブ';
$string['entityposition'] = '役職';
$string['errorcreatingdepartment'] = '部門の作成中にエラーが発生しました。もう一度やり直してください。';
$string['errorcreatingjob'] = 'ジョブの作成中にエラーが発生しました。もう一度やり直してください。';
$string['errorcreatingposition'] = '役職の作成中にエラーが発生しました。もう一度やり直してください。';
$string['errorcsvcantuseframeworkidnumber'] = 'フレームワークIDとID番号は同時に使用できません';
$string['errorcsvinvalidframeworkidnumber'] = 'このID番号のフレームワークは存在しないか利用できません';
$string['errorcsvinvalidparentmapping'] = 'フィールド \'Parent\' のマッピングを識別子と同じにすることはできません';
$string['errorcsvnohierarchy'] = '階層が選択されていない場合、 \'Parent\' 列はマッピングできません';
$string['errorcsvnoparent'] = '階層を選択する場合、\'Parent\' 列にはマッピングが必要です';
$string['erroridnumberdepartment'] = 'ID番号 \'{$a}\' の部門はすでに存在します';
$string['erroridnumberposition'] = 'D番号 \'{$a}\' の役職はすでに存在します';
$string['errorinvaliddepartment'] = '無効な部門';
$string['errorinvalidenddate'] = '無効な日付です。終了日は開始日より大きくする必要があります';
$string['errorinvalidjobenddate'] = '無効な終了日の形式';
$string['errorinvalidjobstartdate'] = '無効な開始日の形式';
$string['errorinvalidposition'] = '無効な役職';
$string['errorjobscannotbeimported'] = 'ジョブを共有スペースにインポートすることはできません';
$string['errormovehierarchy'] = '役職または部門を別の階層の場所に移動中にエラーが発生しました。';
$string['errorparentnotfound'] = '親(上位)が見つかりません';
$string['errorparentnotfounddepartment'] = 'ID番号 \'{$a}\' の部門の親が見つかりません';
$string['errorparentnotfoundposition'] = 'ID番号 \'{$a}\' の役職に親が見つかりません';
$string['errorparentsameascurrent'] = '親は現在の階層エンティティ自身と同じにはできません。';
$string['errorsameidnumberdepartment'] = '同じID番号の部門がすでに存在します';
$string['errorsameidnumberposition'] = '同じID番号の役職はすでに存在します';
$string['eventdepartmentcreated'] = '部門が作成されました';
$string['eventdepartmentdeleted'] = '部門が削除されました';
$string['eventdepartmentupdated'] = '部門が更新されました';
$string['eventjobcreated'] = 'ジョブが作成されました';
$string['eventjobdeleted'] = 'ジョブが削除されました';
$string['eventjobupdated'] = 'ジョブが更新されました';
$string['eventpositioncreated'] = '役職が作成されました';
$string['eventpositiondeleted'] = '役職が削除されました';
$string['eventpositionupdated'] = '役職が更新されました';
$string['eventusermgrcreated'] = '手動割り当てマネージャーが作成されました';
$string['eventusermgrdeleted'] = '手動割り当てマネージャーが削除されました';
$string['eventusermgrupdated'] = '手動割り当てマネージャーが更新されました';
$string['existingmanagers'] = '存在するマネージャー';
$string['existingmanagers_help'] = '<b>既存のマネージャーを保持する</b><br />
このオプションを選択すると、ユーザの既存のマネージャーは維持され、指定した新しいマネージャーが追加されます。現在のマネージャーの割り当てを維持し、さらにマネージャーを追加したい場合は、このオプションを使用します。<br />
<br />
<b>既存のマネージャーを置き換える</b><br />
このオプションを選択すると、ユーザに割り当てられた既存のマネージャーは、指定した新しいマネージャーに完全に置き換えられます。既存のマネージャー割り当てを完全に新しいものに置き換えたい場合に、このオプションを使用します。';
$string['expanddepartmentframework'] = '部門のフレームワーク \'{$a}\' を展開';
$string['expandpositionframework'] = '役職のフレームワーク \'{$a}\' を展開';
$string['exporterdepartments'] = '組織構造の部門';
$string['exporterdepartmentscsv'] = '組織構造の部門 (CSV)';
$string['exporterdepartmentsdesc'] = '部門別フレームワークと階層全体';
$string['exporterjobs'] = '組織構造のジョブ';
$string['exporterjobscsv'] = '組織構造のジョブ (CSV)';
$string['exporterjobsdesc'] = '関連する部門と役職のフレームワークを備えたジョブ';
$string['exporterorgstructure'] = '組織構造フレームワーク';
$string['exporterorgstructuredesc'] = '部門および/または役職の階層全体を備えたフレームワーク';
$string['exporterpositions'] = '組織構造の役職';
$string['exporterpositionscsv'] = '組織構造の役職 (CSV)';
$string['exporterpositionsdesc'] = '役職別フレームワークと階層全体';
$string['exportframeworkssettings'] = '説明、階層および権限';
$string['exportframeworkssettingsdescriptionshierarchy'] = '説明と階層';
$string['frameworks'] = 'フレームワーク';
$string['globalmanagementicons'] = 'マネージャーアイコン';
$string['globalmanager'] = 'マネージャー';
$string['globalmanager_help'] = 'マネージャー職の人は、部門に関係なく、役職が下のすべての人のマネージャーとみなされます。';
$string['gotouserprofile'] = 'ユーザプロファイルページへ';
$string['hascurrentjobs'] = '現在のジョブ';
$string['hasjobdepartment'] = '部門にジョブがある';
$string['hasjobposition'] = '役職にジョブがある';
$string['hierarchy'] = '階層';
$string['hierarchydepartments'] = '部門の階層...';
$string['hierarchypositions'] = '役職の階層...';
$string['importerdepartmentscsv'] = '部門インポーター (CSV)';
$string['importerdepartmentscsvdesc'] = '部門: フレームワークにインポートされる階層の有無に依らない';
$string['importerpositionscsv'] = '役職インポーター(CSV)';
$string['importerpositionscsvdesc'] = '役職: フレームワークにインポートされる階層の有無に依らない';
$string['importlogdeptfailed'] = '部門 \'{$a->name}\' をインポートできませんでした。';
$string['importlogdeptfrmfailed'] = '部門のフレームワーク \'{$a->name}\' をインポートできませんでした。';
$string['importlogdeptfrmsuccess'] = '新しい部門フレームワーク \'<a href="{$a->url}">{$a->name}</a>\' を作成しました。';
$string['importlogdeptsuccess'] = '新しい部門フレームワーク \'{$a->name}\' を作成しました';
$string['importlogidnumberexistsdepartment'] = 'ID番号 \'{$a->originalidnumber}\' の部門はすでに存在します';
$string['importlogidnumberexistsposition'] = 'ID番号 \'{$a->originalidnumber}\' の役職はすでに存在します';
$string['importlogjobfailed'] = '\'{$a->userfullname}\' - {$a->position} ({$a->department}) のジョブをインポートできませんでした';
$string['importlogjobsuccess'] = '\'<a href="{$a->url}">{$a->userfullname}</a>\' - {$a->position} ({$a->department}) の新しいジョブを作成しました';
$string['importlogposfailed'] = '役職 \'{$a->name}\' をインポートできませんでした';
$string['importlogposfrmfailed'] = '役職フレームワーク \'{$a->name}\' をインポートできませんでした';
$string['importlogposfrmsuccess'] = '新しい役職フレームワークを作成しました \'<a href="{$a->url}">{$a->name}</a>\'';
$string['importlogpossuccess'] = '新しい役職を作成しました \'{$a->name}\'';
$string['include_shared_entities'] = '共有エンティティを含める';
$string['include_shared_entities_help'] = 'このオプションを有効にすると、エクスポートされたファイルには、現在のテナントで使用可能なすべての共有フレームワークも含まれます。';
$string['ismanager'] = 'マネージャーである';
$string['jobcreated'] = 'ジョブが作成されました';
$string['jobdeleteconfirm'] = 'このジョブと関連するすべてのデータを削除してもよろしいですか？<br />
将来的にこのジョブのデータを参照したい場合は、代わりにこのジョブを「終了」に設定することを検討してください。<br /><br />
この操作は元に戻せません。';
$string['jobdeleted'] = 'ジョブは削除されました';
$string['jobfrom'] = '{$a} から';
$string['jobfromto'] = '{$a->from}から{$a->to}へ';
$string['jobnotfound'] = 'ジョブが見つかりませんでした';
$string['jobpositiondepartment'] = '役職(部門)';
$string['jobs'] = 'ジョブ';
$string['jobsassigned'] = 'ジョブが割り当てられました';
$string['jobscreated'] = 'ジョブが作成されました';
$string['jobsnumber'] = 'ジョブ数';
$string['jobsnumber_help'] = 'アクティブなジョブと過去のジョブを表示しています。<br />例えば\'10 (2)\'はアクティブなジョブが10、過去のジョブが2であることを示しています。';
$string['jobstartdateafter'] = 'ジョブ開始日以降';
$string['jobstransfered'] = 'ユーザは新しいジョブに移行しました';
$string['jobsupdated'] = 'ジョブが更新されました';
$string['jobtenantdoesnotmatch'] = 'ジョブテナントとユーザテナントが一致しない';
$string['jobtransfered'] = 'ユーザは新しいジョブに移行しました';
$string['jobupdated'] = 'ジョブが更新されました';
$string['keepexistingmanagers'] = '既存のマネージャーを維持したまま新しくマネージャーを追加する';
$string['listdeptsnohierarchy'] = '階層なしの部門リスト';
$string['listposnohierarchy'] = '階層なしの役職リスト';
$string['locked'] = 'ロック済み';
$string['locked_help'] = 'ロックされた部門/役職で仕事を割り当てる能力を持つユーザだけがそれを行うことができます。';
$string['managerpermissions'] = 'マネージャー権限';
$string['managersdropdown'] = 'ユーザを選択';
$string['managersdropdown_help'] = '直属のマネージャーを選択すると、現在のユーザが組織内で誰に報告するかが決まります。現在のユーザは、選択されたマネージャーの管理ポートフォリオに追加されます。<br>
<br>
現在のユーザは、組織構造内での役職に応じて異なるマネージャーを持つことができます。ただし、手動で割り当てられるマネージャーは1人のみです。';
$string['managersunassigned'] = '手動で割り当てられたマネージャーが解除されました。';
$string['managertype'] = 'マネージャーの種類';
$string['manuallyassigned'] = 'マネージャー（手動割当）';
$string['manuallyassignedbadge'] = '手動割り当て済';
$string['manuallyassignedcreated'] = '割り当ての完了';
$string['manuallyassigneddeleted'] = '割り当て解除の完了';
$string['manuallyassigneddeletedconfirm'] = '本当にこの割り当てを削除しますか？
<br />この操作は取り消せません。';
$string['manuallyassignedupdated'] = '更新の完了';
$string['mappingerrordeptnotfound'] = '部門 {$a} が見つかりません';
$string['mappingerrorposnotfound'] = '役職 {$a} が見つかりません';
$string['mappingnoticenodeptidnumber'] = 'ID番号が空だったため、部門は名前で特定されました。部門にID番号を割り当てることをお勧めします';
$string['mappingnoticenoposidnumber'] = 'ID番号が空だったため、役職は名前で特定されました。役職にID番号を割り当てることをお勧めします';
$string['missingdepartment'] = '部門が見当たりません';
$string['missingposition'] = '役職が見当たりません';
$string['missingusers'] = '見つからないユーザ';
$string['movedepartmentframework'] = '部門のフレームワークを移動';
$string['movepositionframework'] = '役職のフレームワーク \'{$a}\' を移動';
$string['newframework'] = '新しいフレームワーク';
$string['newnamefor'] = '\'{$a}\'の新しい名前';
$string['newuseradded'] = '新しいユーザが追加されました。<a href="{$a}">このユーザの職務および報告ラインを表示する</a>';
$string['noavailabledepartments'] = '利用可能な部門がありません';
$string['noavailablepositions'] = '利用可能な役職がありません';
$string['notactivejob'] = '非アクティブ';
$string['notification'] = '通知';
$string['notificationcannotcreatejobs'] = 'ジョブをユーザに割り当てる前に、いくつかの部門と役職を作成してください。';
$string['notinsametenant'] = 'ユーザとマネージャーが同じテナントにいません';
$string['onlycurrent'] = '現在のみ';
$string['onlyfuture'] = '未来のみ';
$string['onlypast'] = '過去のみ';
$string['organisation:allocateuserstoprogramcertificationsdept'] = 'プログラム/認定にユーザを割り当て';
$string['organisation:allocateuserstoprogramcertificationsdept_help'] = '部門リーダー: プログラム/認定にユーザを割り当て';
$string['organisation:allocateuserstoprogramcertificationsglob'] = 'プログラム/認定にユーザを割り当て';
$string['organisation:allocateuserstoprogramcertificationsglob_help'] = 'マネージャ：プログラム/認定にユーザを割り当て';
$string['organisation:allocateuserstoprogramcertificationsmam'] = 'プログラム/認定にユーザを割り当て';
$string['organisation:allocateuserstoprogramcertificationsmam_help'] = '手動割り当てマネージャー：プログラム/認定にユーザを割り当て';
$string['organisation:assigninlocked'] = 'ロック済の部門と役職にジョブを割り当てる';
$string['organisation:assignjobs'] = 'ジョブを割り当て';
$string['organisation:assignmanuallymgr'] = '手動割り当てマネージャーを追加';
$string['organisation:managedepartments'] = '部門を管理';
$string['organisation:managepositions'] = '役職を管理';
$string['organisation:receivenotificationsdept'] = '通知を受け取る';
$string['organisation:receivenotificationsdept_help'] = '部門リーダー：通知を受領';
$string['organisation:receivenotificationsglob'] = '通知を受け取る';
$string['organisation:receivenotificationsglob_help'] = 'マネージャ：通知を受領';
$string['organisation:receivenotificationsmam'] = '通知を受け取る';
$string['organisation:receivenotificationsmam_help'] = '手動割り当てマネージャー：通知を受け取る';
$string['organisation:viewusersreportdept'] = 'ユーザレポートを表示';
$string['organisation:viewusersreportdept_help'] = '部署リーダー: ユーザレポートを表示';
$string['organisation:viewusersreportglob'] = 'ユーザレポートを表示';
$string['organisation:viewusersreportglob_help'] = 'マネージャー: ユーザレポートを表示';
$string['organisation:viewusersreportmam'] = 'ユーザレポートの閲覧';
$string['organisation:viewusersreportmam_help'] = '手動割り当てマネージャー：ユーザレポートの閲覧';
$string['organisationadmintab'] = '組織';
$string['orgfiltercustomise'] = 'カスタマイズ';
$string['orgfilterdirectreports'] = '自分の直属の部下にのみ表示する';
$string['orgfiltereverybody'] = '私に報告するすべての人を表示する';
$string['orgstructure'] = '組織構造';
$string['parent'] = '親';
$string['parentidchanged'] = '指定された親部門 \'{$a}\' が見つかりません。部門はフレームワーク直下に作成されました。';
$string['parentidchangedposition'] = '指定された親役職 \'{$a}\' が見つかりません。役職はフレームワーク直下に作成されました。';
$string['parentsameiderror'] = '親要素はそれ自身であることはできない';
$string['people'] = '人々';
$string['peoplereportingto'] = '{$a} に報告する人々';
$string['pluginname'] = '組織構造';
$string['position'] = 'ポジション';
$string['position_help'] = '役職を選択';
$string['positionanddepartmentdisplay'] = '{$a->position} ({$a->department})';
$string['positiondeleted'] = '役職が正常に削除されました。';
$string['positiondescription'] = '説明';
$string['positionframework'] = '役職のフレームワーク';
$string['positionframeworkidnumber'] = '役職のフレームワーク idnumber';
$string['positionframeworkpostfix'] = '{$a} (役職フレームワーク)';
$string['positionframeworks'] = '役職のフレームワーク';
$string['positionfrmidnumberconflict'] = '役職フレームワークのID番号はすでに存在します';
$string['positionhasjobs'] = '関連したジョブがあるので、役職を削除することができません。';
$string['positionidentifier'] = '役職の識別子';
$string['positionidentifier_help'] = 'これはCSVの行を識別する列であり、親を見つけるために使用されます';
$string['positionidnumber'] = 'IDナンバー';
$string['positionidnumberconflict'] = '役職のID番号はすでに存在します';
$string['positionname'] = '役職名';
$string['positionnotfound'] = '役職が見つかりません';
$string['positionparent'] = '親役職';
$string['positionpermissions'] = 'パーミッション';
$string['positionrequiredforjobcreate'] = 'ジョブを割り当てるために役職を作成する必要があります。';
$string['positions'] = '役職';
$string['positionwithicons'] = '権限のある役職';
$string['present'] = '現在';
$string['previousjobdatenote'] = '前のジョブは、新しいジョブが始まる1日前に終了したものとして設定される。';
$string['previousjobsdatenote'] = 'すべてのジョブは、新しいジョブが始まる1日前に終了したものとして設定される。';
$string['privacy:metadata:department'] = 'ジョブの部門';
$string['privacy:metadata:depth'] = 'インデックス再作成のための報告フィールド';
$string['privacy:metadata:enddate'] = 'このジョブが終了するとき';
$string['privacy:metadata:isdirect'] = 'ユーザが直属の部下であるかどうかを示す';
$string['privacy:metadata:jobssummary'] = 'ジョブの概要';
$string['privacy:metadata:managerid'] = '組織構造マネージャーのID';
$string['privacy:metadata:path'] = 'レポートラインの関係パス';
$string['privacy:metadata:permissions'] = 'このマネージャーがこの従業員に対して持つパーミッション';
$string['privacy:metadata:position'] = 'ジョブの役職';
$string['privacy:metadata:reportingsummary'] = 'レポートラインの関係';
$string['privacy:metadata:startdate'] = 'このジョブが開始するとき';
$string['privacy:metadata:timecreated'] = 'このジョブが作成されたとき';
$string['privacy:metadata:timemodified'] = 'このジョブが最後に更新されたとき';
$string['privacy:metadata:ummanagerid'] = 'ユーザマネージャーID';
$string['privacy:metadata:umpath'] = 'ユーザマネージャーのパス';
$string['privacy:metadata:umpathlevel'] = 'ユーザマネージャーのパスレベル';
$string['privacy:metadata:umpermissions'] = 'ユーザマネージャーのパーミッション';
$string['privacy:metadata:umsummary'] = 'ユーザマネージャーの概要';
$string['privacy:metadata:umtimecreated'] = 'ユーザマネージャーが作成された日';
$string['privacy:metadata:umtimemodified'] = 'ユーザマネージャーが最後に変更された日';
$string['privacy:metadata:umuserid'] = 'ユーザID';
$string['privacy:metadata:userid'] = 'ユーザID';
$string['reg_wpdepartmentframeworks'] = '部門のフレームワーク ({$a}) の数';
$string['reg_wpdepartments'] = '部門 ({$a}) の数';
$string['reg_wpjobs'] = 'ジョブ ({$a})の数';
$string['reg_wpmanualmanagerassignments'] = '手動で割り当てられたマネージャーの数（{$a}）';
$string['reg_wppositionframeworks'] = '役職のフレームワーク ({$a}) の数';
$string['reg_wppositions'] = '役職 ({$a}) の数';
$string['relevantjobs'] = '関連するジョブ';
$string['replaceexistingmanagers'] = '既存マネージャーの交代';
$string['reportingline'] = 'レポートライン';
$string['reportsto'] = 'へのレポート';
$string['rolemanager'] = '組織構造マネージャ';
$string['rolemanagerdescription'] = '現在のテナント内でジョブ、役職と部門を作成、管理を許可';
$string['ruleoutcomeactive'] = 'アクティブなジョブのみ';
$string['ruleoutcomeall'] = 'すべてのジョブ';
$string['ruleoutcomeassignjob'] = 'ジョブを割り当てる';
$string['ruleoutcomeassignjobdescwithdates'] = '部門 \'{$a->department}\'・役職 \'{$a->position}\' への割り当て<br />
開始日: {$a->startdate}<br />
終了日: {$a->enddate}';
$string['ruleoutcomeassignjobstartruledate'] = 'ルールの実行日';
$string['ruleoutcomeassignjobstartuserdate'] = 'ユーザの作成日';
$string['ruleoutcomedaybeforeruledate'] = 'ルール実行前の日';
$string['ruleoutcomeendjobs'] = 'すべてのジョブを終了する';
$string['ruleoutcomeendjobsdesc'] = '部門 \'{$a->department}\' および役職 \'{$a->position}\'<br /> に含まれるすべてのジョブを終了します。
サブ部門を含める: \'{$a->includesubdepartments}\'<br />
サブ役職を含む: \'{$a->includesubpositions}\'<br />
終了日: \'{$a->enddate}\'<br />
対象: \'{$a->target}\'';
$string['ruleoutcomeruledate'] = 'ルール実行の日';
$string['ruleoutcometarget'] = '対象';
$string['ruleoutcometarget_help'] = 'すべてのジョブを終了させるか、アクティブなジョブのみを終了させるか';
$string['selectallactivejobs'] = 'アクティブなジョブをすべて選択する';
$string['selectalldepartmentframeworks'] = 'すべての部門フレームワークを選択する';
$string['selectallframeworks'] = 'すべての部門と役職のフレームワークを選択する';
$string['selectalljobs'] = 'アクティブな過去のジョブをすべて選択する';
$string['selectalljobsinfile'] = 'ファイル内のすべてのジョブを選択する';
$string['selectalljobsinframeworks'] = '選択したフレームワークですべてのジョブを選択する...';
$string['selectallpositionframeworks'] = 'すべての役職フレームワークを選択';
$string['selectdate'] = '日付を選択...';
$string['selectdepartmentframework'] = '部門のフレームワークを選択';
$string['selectexistingframework'] = '既存のフレームワークを選択する';
$string['selectjobsinframeworks'] = '特定のフレームワークからすべてのジョブを選択する...';
$string['selectpositionframework'] = '役職のフレームワークを選択';
$string['setjobfinished'] = 'ジョブを終了として設定する';
$string['setjobsfinished'] = 'ジョブを終了として設定する';
$string['showjobs'] = 'ジョブを表示';
$string['showpastjobs'] = '過去のジョブを表示';
$string['showpeoplewithjobs'] = 'ジョブを持つユーザを表示';
$string['showpeoplewithmanagers'] = 'マネージャーを持つユーザを表示';
$string['somedepartmentsdonotexist'] = '一部の部門が存在しません';
$string['somepositionsdonotexist'] = '一部の役職が存在しません';
$string['startdate'] = '開始日';
$string['startdate_help'] = 'ジョブの開始日';
$string['taskbuildreportingline'] = '組織構造レポートラインの構築';
$string['timecreated'] = '作成時間';
$string['toomanydepartmentstoshow'] = '表示するには部門が多すぎます。';
$string['toomanyparentstoshow'] = '表示するには親が多すぎます。';
$string['toomanypositionstoshow'] = '表示するには職位が多すぎます。';
$string['transferjob'] = 'このジョブを新しいジョブに移す';
$string['transfertoanewjob'] = '新しいジョブに移す';
$string['transfertojob'] = '\'{$a}\' を新しいジョブに移す';
$string['transfertonewjob'] = 'このユーザを新しいジョブに移す';
$string['unassignmanager'] = 'マネージャーの割り当てを解除する';
$string['unassignmanagers'] = 'マネージャーの割り当てを解除する';
$string['unassignperson'] = '人の割り当てを解除する';
$string['usermanagednotallowed'] = '相互の管理割り当てを作成することは許可されていません。ユーザ同士が同時に管理し合わないようにしてください。';
$string['usermanagednotallowedrelation'] = 'ユーザはマネージャーとこの関係を持つことはできません。';
$string['usermanagednotexist'] = 'ユーザマネージャーレコードが存在しません';
$string['usernotfound'] = 'ユーザが見つかりません';
$string['users'] = 'ユーザを選択';
$string['users_help'] = 'ジョブのユーザを検索して選択';
$string['validationmsgdeptposchangejob'] = '部署か役職のどちらかが現在とは異なっていなければなりません';
$string['validationmsgedateonenddatechange'] = '{$a} は、指定された終了日の後に開始日を持つジョブを持っています。';
$string['validationmsgedateonsdate'] = '終了日は開始日より後でなければいけません。';
$string['validationmsgedateonsdatechangejob'] = '新しいジョブの開始日は、古いジョブの開始日より後でなければならない。';
$string['viewjobsandreporting'] = 'ジョブとレポートラインの閲覧';
$string['withoutpermission'] = 'パーミッション \'{$a}\' なしで';
$string['withpermission'] = 'パーミッション \'{$a}\' を得て';
$string['withsubdepartments'] = 'サブ部門を含む';
$string['withsubpositions'] = 'サブポジションを含む';
