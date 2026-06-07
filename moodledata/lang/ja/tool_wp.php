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
 * Strings for component 'tool_wp', language 'ja', version '4.4'.
 *
 * @package     tool_wp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutexportfile'] = 'このファイルについて';
$string['activitycompletion'] = 'アクティビティ完了';
$string['allcohorts'] = 'すべてのコーホート';
$string['allcohorts_help'] = 'このユーザが管理できるすべてのコーホート';
$string['alldata'] = 'すべてのデータ';
$string['allsystemcohorts'] = 'すべてのシステムコーホート';
$string['cantlocatefileindraftarea'] = 'ユーザドラフト領域でファイルが見つかりません。';
$string['certificates'] = '認定証';
$string['certificatetemplates'] = '認定証テンプレート';
$string['certificatetemplates_help'] = '認定証のテンプレート、ページ、要素を含めます。発行された認定証は含まれないことに注意してください';
$string['certificatetemplatesdetails'] = '認定証テンプレートの詳細';
$string['change'] = '変更';
$string['cleanupexpiredimportsexports'] = '期限切れのエクスポートとインポートをクリーンアップします';
$string['codechanged'] = '発行コードが \'{$a->from}\' から \'{$a->to}\' に変更されました。';
$string['cohortdetails'] = 'コーホート詳細';
$string['cohortdetails_help'] = '選択した各インスタンスのコーホートの詳細';
$string['cohortdetailswithmembers'] = 'メンバーを含むコーホートの詳細';
$string['cohortdetailswithmembers_help'] = 'メンバーシップ情報を含むコーホートの詳細。ユーザは含まれないことに注意してください';
$string['cohortmembers'] = 'コーホートメンバー';
$string['cohortmembers_help'] = 'コーホートメンバーシップ情報のみが含まれますが、実際のユーザは含まれません';
$string['confighideparentlang'] = 'Workplaceの親(上位)一式を非表示にする';
$string['confighideparentlangdesc'] = '有効にすると、インストールされたすべてのWorkplace言語パックの親(上位)は言語メニューには表示されません。例えば、\'English for Workplace (en_wp)\'がインストールされたら\'English (en)\'は表示されません。';
$string['confirmdeleteexport'] = 'このエクスポートを削除しても良いですか？';
$string['confirmdeleteimport'] = 'このインポートを削除しても良いですか？';
$string['confirmprevbutton'] = 'サイトを離れますか？ 行った変更は保存されない場合があります。';
$string['confirmprocess'] = '「続行」をクリックすると、まもなくプロセスが開始されます。終了すると通知が届きます。';
$string['conflictidnumber'] = 'コーホートID番号に数値のサフィックスを追加します';
$string['conflicts'] = '競合';
$string['conflictshortname'] = 'コースのショートネームに数字の接尾辞を追加します';
$string['content'] = 'コンテンツ';
$string['copiedtoclipboard'] = 'クリップボードにコピーされたテキスト';
$string['copytoclipboard'] = 'クリップボードにコピー';
$string['coursecontentbackup'] = 'コースコンテンツのバックアップを許可する';
$string['coursecontentbackupdesc'] = 'この設定は、コースをバックアップできるユーザが、エクスポートの一部としてコースコンテンツを含めることを許可するかどうかを制御します。設定されていない場合、サイト構成を編集できるユーザのみが、移行の一部としてコースコンテンツをエクスポートできます。この設定を無効にしておくと、エクスポートされるファイルサイズを減らすのに役立ちます。';
$string['coursereset'] = '個人ユーザのコースリセット';
$string['coursesadmintab'] = '学習';
$string['createdby'] = '作成者';
$string['csvcolumn'] = 'CSV カラム';
$string['csvdefaultvalue'] = 'デフォルト値';
$string['csvfieldsmapping'] = 'フィールドマッピング';
$string['csvmappingnotspecified'] = '指定なし';
$string['deletegradeshistory'] = 'コースリセット時に成績履歴を削除';
$string['deletegradeshistory_desc'] = 'コースリセット時に成績履歴を削除することをお勧めします。特に「デフォルトの成績回復」設定がオンの場合です。成績履歴をリセット時に削除しない場合、再登録時にコースの成績は回復されますが、すべての活動完了情報は表示されなくなります。';
$string['descriptionformat'] = '説明フォーマット';
$string['descriptionformatdefault'] = '説明フォーマットデフォルト';
$string['doexport'] = 'エクスポート';
$string['doimport'] = 'インポート';
$string['doyouagreelicense'] = 'これらの利用規約を読み、Moodle Workplace™のライセンスに署名しましたか？';
$string['entitiescountpostfix'] = '({$a})';
$string['entitycertificateissues'] = '認定証の発行';
$string['entitycertificateissueuser'] = '認定証の発行: {$a}';
$string['entitycoursereset'] = 'コースリセットデータ';
$string['entityidentifier'] = '{$a->name} ({$a->idnumber})';
$string['errorcantdeleteexport'] = 'エクスポートを削除できません';
$string['errorcantdeleteimport'] = 'インポートを削除できません';
$string['errorcohortsameidnumber'] = '同じID番号のコーホートはすでに存在します';
$string['errorcouldnotallocatecohort'] = 'ユーザ \'{$a->originaluserfullname}\' をコーホート \'{$a->name}\' に割り当てることができませんでした。';
$string['errorcouldnotimportissue'] = '発行済み認定書 \'{$a}\' をインポートできませんでした';
$string['errorcoursesdonotexist'] = '一部のコースは存在しません';
$string['errorcoursessameshortname'] = '同じショートネームのコースはすでに存在します';
$string['errorcustomfielddoesnotexist'] = 'カスタムフィールドが存在しないため、データ \'{$a}\' をインポートできませんでした';
$string['errorcustomfieldnotfound'] = 'カスタムフィールドが見つかりません';
$string['errorcustomfieldnotfounddetail'] = 'カスタムフィールド \'{$a}\' が見つかりません';
$string['errornegativenumber'] = 'ここには負でない数字を入力してください。';
$string['eventcoursemodulereset'] = '個人ユーザのコースモジュールリセット';
$string['eventcoursereset'] = '個人ユーザのコースリセット';
$string['eventexportcreated'] = 'エクスポート作成済み';
$string['eventexportdeleted'] = 'エクスポート削除済み';
$string['eventexportupdated'] = 'エクスポート更新済み';
$string['eventimportcreated'] = 'インポート作成済み';
$string['eventimportdeleted'] = 'インポート削除済み';
$string['eventimportupdated'] = 'インポート更新済み';
$string['export_content'] = '認定証テンプレートの詳細';
$string['export_content_help'] = '認定証のテンプレート、ページ、要素';
$string['export_issued'] = '発行済の認定証';
$string['export_issued_help'] = 'ユーザに発行された認定証。ユーザ自身のコピーは含まれません。';
$string['exportcoursecategoriescontent'] = 'コースカテゴリの詳細';
$string['exportcoursecategoriescontent_help'] = 'コースカテゴリの詳細を含めます。カテゴリのロール割り当てとフィルタは含まれません。';
$string['exportcoursecontent'] = 'コース構成';
$string['exportcoursecontent_help'] = 'これには、内容を除くコース内のすべてが含まれます。

エクスポートされたファイルには、標準コースのバックアップ作成時のサイトデフォルト設定と同じ設定が含まれます。ユーザデータは含まれません。';
$string['exported'] = 'エクスポート完了';
$string['exporter'] = 'エクスポートする要素';
$string['exportercreatefrom'] = 'エクスポート元を作成';
$string['exportercreatefrom_help'] = 'このオプションを使用すると、サイト全体からエンティティをエクスポートするか、現在のテナントに関連付けられているエンティティのみをエクスポートするかを定義できます。';
$string['exportercreatefromcurrenttenant'] = '現在のテナント';
$string['exporterdesc'] = '発行された認定証とテンプレート';
$string['exporterdescription'] = 'デフォルトのコースバックアップ構成を使用した、ユーザデータの無いコース';
$string['exporterdescriptioncategories'] = 'コースカテゴリとサブカテゴリ';
$string['exporterdescriptioncohorts'] = 'ユーザデータのないコーホートメンバーを含むコーホート';
$string['exporterdescriptionreports'] = 'カスタムレポート（オーディエンスおよびスケジュールデータを含む）';
$string['exporternotavailable'] = 'エクスポータ \'{$a}\' はここでは利用できません';
$string['exporternotfound'] = 'エクスポータ \'{$a}\' が見つかりません';
$string['exporterrequirestenant'] = 'エクスポータ \'{$a}\' はテナントが必要です';
$string['exportersettingsinvalid'] = 'エクスポーターの設定が有効なJSON形式ではありません';
$string['exportersettingsvalidationfailed'] = 'エクスポータ設定の検証に失敗しました: {$a}';
$string['exportersunavailable'] = '使用できるエクスポーターはありません';
$string['exportformatcsv'] = 'CSV';
$string['exportgeneralsettings'] = '一般設定';
$string['exportgeneralsettingsdesc'] = '使用するエクスポート対象を選択します。次のステップでは、選択範囲を絞り込んで、エクスポートする要素を指定できます。';
$string['exportimport'] = 'マイグレーション';
$string['exportimportconflictsuffix'] = '\'{$a}\' フィールドに数値のサフィックスを追加します';
$string['exportimportentityunavailable'] = '{$a} (利用不可)';
$string['exportimporterrorentityexists'] = '同じ \'{$a}\' を持つインスタンスはすでに存在します';
$string['exportimportfieldchanged'] = 'フィールド \'{$a->field}\' を \'{$a->from}\' から \'{$a->to}\' に変更しました';
$string['exportimportsettings'] = 'マイグレーション設定';
$string['exportimportsitecontent'] = '内容：コース、カテゴリ、プログラム、認定';
$string['exportimportsitedescription'] = 'すべてのテナントとそれに含まれるすべてのエンティティを含む完全なサイトコンテンツ。コースのバックアップには、ログを除くすべてのコンテンツとユーザデータが含まれます';
$string['exportimportsiteerror'] = 'サイトをインポートできません';
$string['exportimportsitesame'] = 'エクスポート元のサイトと同じサイトにインポートできません';
$string['exportimportsitesuccess'] = 'インポートされたサイト';
$string['exportimportstatuscompleted'] = '成功';
$string['exportimportstatuscreated'] = '準備中';
$string['exportimportstatuserror'] = 'エラー';
$string['exportimportstatusinprogress'] = '進行中';
$string['exportimportstatusscheduled'] = '予定済';
$string['exportimportuserfieldserror'] = 'ユーザプロファイルフィールド \'{$a}\' をインポートできませんでした';
$string['exportimportusersall'] = 'すべてのユーザを選択';
$string['exportimportusersdescription'] = 'サイトおよびテナントユーザ';
$string['exportimportuserserror'] = 'ユーザ \'{$a}\' を作成できませんでした';
$string['exportimportuserslanguseselected'] = '選択した言語を使用';
$string['exportimportusersmanual'] = 'ユーザを手動で選択する...';
$string['exportimportusersmissinglangerror'] = 'ユーザの言語がシステムにありません';
$string['exportimportusersmissinglangerrorlog'] = 'ユーザの言語「{$a->lang}」がシステムにありません';
$string['exportimportusersmnetconflict'] = 'MNetホストの値が異なります';
$string['exportimportusersmnetmatchlocal'] = 'サイトに一致するように値を更新します';
$string['exportimportusersmnetuseexisting'] = '既存の値でインポート';
$string['exportimportuserspicture'] = 'ユーザ画像';
$string['exportimportusersprofile'] = 'ユーザプロファイル';
$string['exportimportuserssuccess'] = 'ユーザ{$a}が作成されました';
$string['exportimportuserssuspended'] = '一時停止ユーザを含める';
$string['exportimportuserstenant'] = '\'{$a}\' からすべてのユーザを選択します';
$string['exportnotfound'] = 'エクスポートが見つかりません';
$string['exportnotfoundornotready'] = 'エクスポートが見つからないか、インポートの準備ができていません';
$string['exportnotready'] = 'エクスポートはインポートの準備ができていません';
$string['exportoptions'] = 'オプション';
$string['exportoptionsdesc'] = 'エクスポートする要素を選択して指定します。';
$string['exportreview'] = 'レビュー';
$string['exportreviewdesc'] = 'ファイルをエクスポートする前に、すべてが正しいかどうかを確認してください。';
$string['exports'] = 'エクスポート';
$string['exportselectallreports'] = 'すべてのカスタムレポートをエクスポート';
$string['exportselectlimitreports'] = '特定のカスタムレポートをエクスポート...';
$string['exportstatus'] = 'ステータス';
$string['filecontent'] = 'ファイルコンテンツ';
$string['grade'] = '評定';
$string['idnumberchanged'] = 'ID番号が \'{$a->from}\' から \'{$a->to}\' に変更されました';
$string['import_content'] = '認定証テンプレートの詳細';
$string['import_content_help'] = '認定証テンプレート、ページ、要素';
$string['import_issued'] = '発行された認定証';
$string['import_issued_help'] = 'ユーザへ認定証の発行';
$string['importallselectedcategory'] = '選択したカテゴリのすべてをインポートします';
$string['importallsystemcontext'] = 'システムコンテキストですべてをインポートする';
$string['importaudiencelogerror'] = 'オーディエンスのレコードをインポートできませんでした。';
$string['importaudiencelogsuccess'] = 'オーディエンスのレコードがインポートされました。';
$string['importchoosetenant'] = 'テナントの選択';
$string['importconflictcreatecourse'] = '空のコースを作成する';
$string['importconflictcreatecourseincategory'] = 'カテゴリ \'{$a}\' に空のコースを作成する';
$string['importconflictincategory'] = 'カテゴリ内';
$string['importconflictinstances'] = 'インスタンス ({$a}):';
$string['importconflicts'] = '競合';
$string['importconflictsdesc'] = '必要に応じて、競合を解決します。';
$string['importconflictskip'] = 'インポートしないでください';
$string['importcoursecontent'] = 'ユーザデータを除くコースバックアップ';
$string['importcoursecontent_help'] = '選択した各インスタンスのコースバックアップをインポートします';
$string['importdestination'] = 'インポート先';
$string['imported'] = 'インポート完了';
$string['importeitherexportidorfile'] = 'exportidまたはfileのいずれかを指定する必要がありますが、両方を指定する必要はありません。';
$string['importer'] = 'インポートする要素';
$string['importernotfound'] = 'インポーター {$a} が見つからないか、利用できません';
$string['importerrequired'] = '複数のインポーターが利用可能であるため、インポーターを指定する必要があります';
$string['importerrequirestenant'] = 'インポーター \'{$a}\' にはテナントが必要です';
$string['importersettingsinvalid'] = 'インポーター設定が有効なJSON形式ではありません';
$string['importersettingsvalidationfailed'] = 'インポーター設定の検証に失敗しました: {$a}';
$string['importformat'] = 'ファイルフォーマット';
$string['importformatauto'] = '自動検出';
$string['importformatcsv'] = 'CSV';
$string['importformatworkplace'] = 'Workplace フォーマット';
$string['importfromfile'] = 'このファイルからの新しいインポート';
$string['importgeneralsettings'] = '一般設定';
$string['importgeneralsettingsalt'] = 'インポートするデータの宛先を選択します。次のステップで、インポートする要素を指定できます。';
$string['importhasconflits'] = 'インポートに競合があります: {$a}';
$string['importincrementidnumber'] = 'ID番号に数値のサフィックスを追加します';
$string['importintothecurrenttenant'] = '現在のテナントにインポートする';
$string['importlogerror'] = '認定証テンプレート \'{$a->name}\' をインポートできませんでした';
$string['importlogerrorinvalidaudience'] = 'オーディエンスが見つからないか無効です。';
$string['importlogerrorinvalidreportsource'] = 'レポートのデータソースが見つからないか無効です。';
$string['importlogerrorinvalidreporttype'] = '無効なレポートタイプ';
$string['importlogerrorinvalidscheduleformat'] = 'スケジュールの形式が見つからないか無効です。';
$string['importlogexception'] = '例外: {$a}';
$string['importlogfailed'] = 'コース \'{$a->fullname}\' をインポートできませんでした';
$string['importlogfailedcohort'] = 'コーホート \'{$a->name}\' をインポートできませんでした';
$string['importlogfailedcoursecategory'] = 'コースカテゴリ \'{$a->name}\' をインポートできませんでした';
$string['importlogsuccess'] = '新しいコース \'<a href="{$a->url}">{$a->fullname}</a>\' を作成しました';
$string['importlogsuccesscertificates'] = '{$a->pagescount}ページ、{$a->elementscount}要素の新しい認定証テンプレート \'<a href="{$a->url}">{$a->name}</a>\' を作成しました';
$string['importlogsuccesscohort'] = '新しいコーホート \'<a href="{$a->url}">{$a->name}</a>\' を作成しました';
$string['importlogsuccesscohortallocations'] = 'ユーザ \'{$a->userfullname}\' をコーホート \'{$a->name}\' に割り当てました';
$string['importlogsuccesscoursecategory'] = '新しいコースカテゴリ \'<a href="{$a->url}">{$a->name}</a>\' を作成しました';
$string['importlogsuccessissue'] = '新しい認定証 \'{$a->template}\' をユーザに作成します: \'{$a->originaluserfullname}\'';
$string['importnotenant'] = 'すべてのテナントが利用可能';
$string['importnotfound'] = 'インポートが見つかりません';
$string['importoptions'] = 'オプション';
$string['importoptionsdesc'] = 'インポートする要素を選択して指定します。';
$string['importproblem'] = '問題: {$a}';
$string['importproblemaffects'] = '影響あり:';
$string['importreportlogerror'] = 'レポート \'{$a}\' をインポートできませんでした。';
$string['importreportlogsuccess'] = '新しいレポート \'<a href="{$a->url}">{$a->name}</a>\' を作成しました。列数: {$a->columncount}、条件数: {$a->conditioncount}、フィルター数: {$a->filtercount}。';
$string['importreview'] = 'レビュー';
$string['importreviewdesc'] = 'ファイルをインポートする前に、すべてが正しいかどうかを確認してください。';
$string['imports'] = 'インポート';
$string['importschedulelogerror'] = 'スケジュールのレコードをインポートできませんでした。';
$string['importschedulelogsuccess'] = 'スケジュールのレコードがインポートされました。';
$string['importselectallreports'] = 'すべてのカスタムレポートをインポートする';
$string['importselectlimitreports'] = '特定のカスタムレポートをインポートする...';
$string['importselectsource'] = 'ソースの選択';
$string['importselectsourcedesc'] = '有効なCSVまたはMoodleWorkplaceファイルをアップロードします。次のステップでは、ファイルからインポートする要素を定義できます。';
$string['importselecttenant'] = 'テナントを選択...';
$string['importsetidnumbertoempty'] = 'ID番号を空に設定します';
$string['importsolution'] = 'ソリューション:';
$string['importstatus'] = 'ステータス';
$string['importunknownerror'] = '不明なエラーです。 {$a}';
$string['importunknownformat'] = '拡張子からファイル形式を検出できません。形式を選択してください';
$string['includecoursecontent'] = 'コースコンテンツを含む';
$string['includecoursecontent_help'] = 'アクティビティ、フィルター、カレンダーイベントなどのすべてのコースコンテンツを含めます。

エクスポートされたファイルには、標準コースのバックアップを作成するときにこのサイトでデフォルトとして設定されているものと同じ設定が含まれます。ユーザデータは含まれません。';
$string['instances'] = 'インスタンス';
$string['instancescount'] = 'インスタンス ({$a}):';
$string['invaliddevice'] = 'あなたはMoodleアプリを使用してMoodleWorkplaceサイトにアクセスしようとしています。続けるにはMoodleWorkplaceアプリをダウンロードしてください。';
$string['loading'] = '読み込み中...';
$string['log'] = 'ログ';
$string['managecoursecategories'] = 'コースカテゴリの編集';
$string['mappingerrorbadgeheader'] = 'バッジが存在しません';
$string['mappingerrorbadgelog'] = 'バッジ {$a} は見つかりませんでした';
$string['mappingerrorcertificateheader'] = '認定証テンプレートがありません';
$string['mappingerrorcertificatelog'] = '認定証 {$a} が見つかりません';
$string['mappingerrorcohortheader'] = 'コーホートがありません';
$string['mappingerrorcohortlog'] = 'コーホート {$a} は見つかりませんでした';
$string['mappingerrorcompetencyheader'] = 'コンピテンシーがありません';
$string['mappingerrorcompetencylog'] = 'コンピテンシー {$a} が見つかりませんでした';
$string['mappingerrorcontextnotfound'] = 'コンテキストが見つかりませんでした';
$string['mappingerrorcoursenotfound'] = 'コース {$a} は見つかりませんでした';
$string['mappingerrorlpheader'] = '学習プランテンプレートが存在しません';
$string['mappingerrorlplog'] = '学習プランテンプレート {$a} が見つかりませんでした';
$string['mappingerroruserfieldheader'] = 'ユーザプロファイルフィールドがありません';
$string['mappingerroruserfieldlog'] = 'ユーザプロファイルフィールド {$a} が見つかりませんでした';
$string['mappingerrorusernotfound'] = '現在のテナントでユーザ {$a} が見つかりませんでした';
$string['mappingnoticecoursecreated'] = '空のコース <a href="{$a->courseurl}">{$a->fullname}</a> が作成されました';
$string['mappingnoticecourseidnumber'] = 'ショートネーム \'{$a->shortname}\' のコースが見つかりませんでした。 ID番号 \'{$a->idnumber}\' の <a href="{$a->courseurl}">別のコース</a> が見つかりましたが、このコースのショートネームは異なります';
$string['mappingnoticeuseremail'] = 'ユーザ \'{$a->username}\' が見つかりませんでした。 メール {$a->email} の <a href="{$a->profileurl}">別のユーザ</a> が見つかりましたが、このユーザのユーザ名は異なります';
$string['messagefullexportcomplete'] = '{$a->date} にエクスポート完了

ステータス: {$a->status}

詳細を表示するには、 <a href="{$a->url}">ここ</a> をクリックしてください';
$string['messagefullimportcomplete'] = '{$a->date} にインポート完了

ステータス: {$a->status}

詳細を表示するには、 <a href="{$a->url}">ここ</a> をクリックしてください';
$string['messageprovider:exportcomplete'] = 'エクスポート完了';
$string['messageprovider:importcomplete'] = 'インポート完了';
$string['migrationcannotswitchtenant'] = 'idまたはidnumber {$a} のテナントが見つからないか、それに切り替えることができません';
$string['migrationnotenanterror'] = 'オプション tenantとnotenantは併用できません';
$string['migrationreportaudiences'] = 'オーディエンス';
$string['migrationreportdefinition'] = 'レポート定義';
$string['migrationreportdefinition_help'] = 'レポートカラム、条件、フィルタを含む';
$string['migrationreportschedules'] = 'スケジュール';
$string['migrationschoosefrom'] = 'から選択';
$string['noavailableimporter'] = 'このファイルに使用できるインポータが見つかりませんでした。';
$string['noavailableimporters'] = '利用可能なインポータはありません';
$string['nocategoriesavailable'] = '利用可能なカテゴリはありません';
$string['noconflictsfound'] = '競合は見つかりません';
$string['nodetails'] = '詳細が見つかりません';
$string['nonproductionsite'] = '非本番サイト';
$string['nonproductionsitemessage'] = 'これは非本番サイトです';
$string['nopermissioncategoryimport'] = 'このカテゴリにインポートする権限がありません。';
$string['nopermissioncategoryrestore'] = 'このカテゴリでリストアする権限がありません。';
$string['nopermissionform'] = 'あなたはこのフォームにアクセスするパーミッションを持っていません。';
$string['nopermissiontab'] = 'あなたはこのページにアクセスするパーミッションを持っていません。';
$string['nothing'] = 'なし';
$string['nothingtoexport'] = 'エクスポートするものはありません';
$string['nothingtoimport'] = 'インポートするものはありません';
$string['notpossible'] = '不可';
$string['numhour'] = '{$a} 時間';
$string['outcomes'] = 'アウトカム';
$string['performanceinfo'] = 'タブパフォーマンス情報(DB読み取り/書き込み：{$a->reads}/{$a->writes})';
$string['pluginname'] = 'Workplace';
$string['privacy:metadata:certificationid'] = 'このコースの取得元の認定ID';
$string['privacy:metadata:courseid'] = 'リセットされたコース';
$string['privacy:metadata:exportcreatedby'] = 'エクスポートを実行したユーザのID';
$string['privacy:metadata:exportstatus'] = 'エクスポートのステータス';
$string['privacy:metadata:grade'] = 'ユーザがコースをリセットする前に持っていた評定';
$string['privacy:metadata:importcreatedby'] = 'インポートを実行したユーザのID';
$string['privacy:metadata:importstatus'] = 'インポートのステータス';
$string['privacy:metadata:programid'] = 'このコースの取得元プログラム ID';
$string['privacy:metadata:reason'] = 'このコースがリセットされた理由';
$string['privacy:metadata:resetinfo'] = 'このコースでリセットされたものに関する情報';
$string['privacy:metadata:resetstatus'] = 'リセットのステータス';
$string['privacy:metadata:tenantid'] = '関連テナントの ID';
$string['privacy:metadata:timecreated'] = '作成時間';
$string['privacy:metadata:timemodified'] = '更新時間';
$string['privacy:metadata:timerequested'] = 'リセットが要求された時間';
$string['privacy:metadata:tool_wp_course_reset'] = 'コースのリセット';
$string['privacy:metadata:tool_wp_export'] = 'サイトで実行されたエクスポートに関する情報';
$string['privacy:metadata:tool_wp_import'] = 'サイトで実行されたインポートに関する情報';
$string['privacy:metadata:userid'] = 'コースをリセットしたユーザ';
$string['privacy:metadata:usermodified'] = '更新されたユーザ';
$string['privacy:metadata:userrequested'] = 'コースのリセットをリクエストしたユーザ';
$string['privacy:metadata:wascompleted'] = 'リセット前にユーザがコースを完了した場合';
$string['problem'] = '問題点';
$string['proceed'] = '進行する';
$string['processing'] = '処理';
$string['productionsite'] = '本番サイト';
$string['productionstate'] = '本番状態';
$string['productionstatedesc'] = '非本番サイトでは、画面の右下隅に免責事項が表示されます。';
$string['quotedentity'] = '\'{$a}\'';
$string['reason'] = 'リセットの理由';
$string['recovercoursegrades'] = 'この設定を有効にする場合、「コースリセット時に成績履歴を削除する」設定も有効にしてください。';
$string['refresh'] = 'リフレッシュ';
$string['reg_moodleproduct'] = 'Moodle プロダクト ({$a})';
$string['reg_wpactiveusersyear'] = '過去 12 か月間にログインしたユニークユーザ数 ({$a})';
$string['reg_wpcertificates'] = '認定証の数 ({$a})';
$string['reg_wpcertificatesissues'] = '発行された認定証の数 ({$a})';
$string['reg_wpplugins'] = 'インストールされ有効化されたプラグインの一覧、インスタンスの数 ({$a})';
$string['reg_wpproductionstate'] = '本番状態 ({$a})';
$string['reg_wprelease'] = 'Moodle Workplace リリース番号 ({$a})';
$string['resetinfo'] = 'インフォメーションのリセット';
$string['resetstatus'] = 'ステータスのリセット';
$string['safenavigation'] = 'このままサイト内を移動しても問題ありません。';
$string['selectallcategoriesinthisfile'] = 'ファイル内のすべてのコースカテゴリを選択';
$string['selectallcohortsinthisfile'] = 'ファイル内のすべてのコーホートを選択';
$string['selectallcoursesinthisfile'] = 'ファイル内のすべてのコースを選択';
$string['selectalltemplates'] = 'すべての認定証テンプレートを選択';
$string['selectalltemplatesinfile'] = 'ファイル内のすべての認定証テンプレートを選択';
$string['selectatleastonecategory'] = '最低でも1つのカテゴリを選択';
$string['selectatleastonecohort'] = '最低でも1つのコーホートを選択';
$string['selectatleastonecourse'] = '最低でも1つのコースを選択';
$string['selectatleastonetemplate'] = '最低でも1つのテンプレートを選択';
$string['selectcoursecategory'] = 'コースカテゴリを選択';
$string['selectcoursesmanually'] = '手動でコースを選択...';
$string['selectedcoursecategory'] = '選択されたコースカテゴリ: {$a}';
$string['selectexporter'] = 'エクスポート対象の選択';
$string['selectimporter'] = 'インポート対象の選択';
$string['selectmanually'] = '手動で選択...';
$string['selectmanuallycategories'] = '手動でカテゴリ・サブカテゴリを選択';
$string['selectmanuallycertificates'] = '手動で認定証テンプレートを選択';
$string['shortnamechanged'] = '省略名が \'{$a->from}\' から \'{$a->to}\' に変更されました。';
$string['showless'] = '表示を減らす';
$string['showxmore'] = '{$a} をもっと見る...';
$string['solution'] = '解決策';
$string['stepx'] = 'ステップ {$a}.';
$string['tenant'] = 'テナント';
$string['thissite'] = '（このサイト）';
$string['timerequested'] = '要求された時間';
$string['timereseted'] = 'リセットされた時間';
$string['uploadimportfile'] = 'ファイルのアップロード';
$string['userrequested'] = 'リクエストしたユーザ';
$string['viewexport'] = 'エクスポートを見る';
$string['viewimport'] = 'インポートを見る';
$string['viewlicense'] = 'ライセンスを表示';
$string['wascompleted'] = '完了しました';
$string['willbeimported'] = 'インポートされます';
$string['workplace'] = 'Moodle Workplace';
$string['workplacelicensegeneric'] = 'Moodle Workplace - Copyright © Moodle Pty Ltd
Moodle - Copyright © 1999 onwards, Martin Dougiamas

Moodle Workplace™ のコードは、自己完結型のソフトウェアスクリプト（プラグイン、改変、およびそれらの派生物）で構成されており、Moodle Pty Ltd（Moodle）が独占的に所有し、その専有ライセンスである「Moodle Workplace License（MWL）」の条件の下でライセンスされています。MWL は、Moodle のオープンソフトウェアパッケージ「Moodle LMS」に含まれており、これは "download.moodle.org" から自由にダウンロード可能であり、2007 年 6 月 29 日付の GNU General Public License バージョン 3.0（「GPL」）のもとで提供されています。MWL は、Moodle Pty Ltd およびその Moodle 認定プレミアムパートナーによって厳密に管理されています。条件が競合する場合、MWL の条件が優先されます。

GPL によって管理される Moodle LMS ソフトウェアパッケージは、1999 年以降、Martin Dougiamas によって著作権が保護されており、一部は他の貢献者によって寄稿・著作権保護されています。この Moodle LMS オープンソフトウェアおよび関連ドキュメントは、有用であることを期待して配布されますが、いかなる保証もなく、商品性や特定の目的への適合性に関する暗示的な保証もありません。

Moodle Workplace™ を書面による許可なしでアクセスしている場合、それは認可されていません。直ちに Moodle Workplace™ とすべての関連ドキュメントを削除してください。削除しない場合、法的責任が発生する可能性があります。
Moodle Workplace™ へのアクセスは、Moodle Workplace 契約または顧客契約条件に基づくものであり、Moodle Pty Ltd、Moodle 認定プレミアムパートナー、または Moodle グループ会社（以下「Moodle 認定プレミアムパートナー」）との間で契約を締結していることを意味します。これにより、以下の事項を遵守することに同意したものとみなされます。

•Moodle Workplace™ を Moodle Workplace 契約または顧客契約条件の範囲内でのみアクセス・共有すること。
•すべての Moodle Workplace™ の本番環境インスタンスを、サイト登録(https://docs.moodle.org/en/Site_registration) に記載されている登録ハブで正確に登録すること。
•Moodle 認定プレミアムパートナーの資格を失った場合、または Moodle 認定プレミアムパートナーの顧客でなくなった場合、Moodle Workplace™ の使用を中止し、サーバーおよび管理下にあるすべてのコンピュータから Moodle Workplace™ のコードのすべてのコピーを直ちに削除すること。これを Moodle に 7 日以内に書面で報告すること。
•Moodle Pty Ltd および Moodle 認定プレミアムパートナーに対し、ユーザやエンドユーザによる Moodle Workplace の複製や使用に起因する損害、罰金、制裁、その他の責任から免責し、損害を与えないようにすること。
•（Moodle 認定プレミアムパートナーである場合）Moodle Workplace コードの不正または違法な使用に起因する直接的・間接的損害（付随的損害を含む）に対し、Moodle に無制限の責任を負うこと。

Moodle Workplace™ のウェブサイトには、統計目的およびコンプライアンス監視のためにトラッキングピクセルが含まれる場合がありますが、収集・処理されるのはサイトの URL のみであり、個人データは収集されません。
ご自身の権利と義務の詳細については、締結した Moodle Workplace 契約または顧客契約条件を参照してください。';
$string['workplacelicenseheader'] = 'Moodle Workplace ライセンス';
$string['workplacelicensenotagreed'] = 'サイト管理者がMoodle Workplaceライセンスに同意するまで、このコンテンツを表示することはできません。';
$string['wp:manageexportimport'] = 'Workplaceのエクスポート/インポートを管理する';
$string['wp:useexportimport'] = 'Workplaceのエクスポート/インポートを使用する';
