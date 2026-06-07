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
 * Strings for component 'tool_coursearchiver', language 'ja', version '4.4'.
 *
 * @package     tool_coursearchiver
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessafter'] = '最終アクセス後';
$string['accessbefore'] = '最終アクセス前';
$string['accessbeforeafter'] = 'アクセス前/後';
$string['anycategory'] = 'すべてのカテゴリ';
$string['archive'] = 'コースをアーカイブする';
$string['archivedeletesetting'] = 'アーカイブ削除遅延';
$string['archivedeletesetting_help'] = 'アーカイブを削除するまでの遅延日数です。';
$string['archiveemail'] = '「コースアーカイブ予定」メールを送信する';
$string['archivelimit'] = 'アーカイブ検索制限';
$string['archivelimit_help'] = '画面に表示される最大結果数です。';
$string['archivelimitstring'] = '最大表示数';
$string['archivelist'] = 'コースアーカイブ';
$string['archivelocation'] = 'コースアーカイブサブディレクトリ';
$string['archiverecoverform'] = '削除保留';
$string['archivewarningemailsetting'] = 'コースアーカイブのデフォルトメール警告';
$string['archivewarningemailsetting_help'] = 'アーカイブ対象として選択されたコースのすべての教師に送信されるメールコンテンツです。';
$string['archivewarningemailsettingdefault'] = '%to さん

あなたが担当した以下のMoodleコースがまもなくアーカイブされることをお知らせします。
これはコースが現在の状態でバックアップさた上でMoodleから削除されることを意味します。 以下のコースでこの処理を除外したい場合、コースの横にあるリンクをクリックしてください。

%courses

ありがとうございます。';
$string['archivewarningsubject'] = '通知: まもなくコースはアーカイブされます。';
$string['back'] = 'やり直す';
$string['cannotdeletecoursenotexist'] = '存在しないコースは削除できません。';
$string['category'] = 'カテゴリ';
$string['cli_cannot_continue'] = 'STOPPED: 継続するためのデータが不足してます。';
$string['cli_question_archive'] = 'これらの {$a} コースをアーカイブおよび削除してもよろしいですか?';
$string['cli_question_archiveemail'] = 'これら {$a} ユーザに「コースアーカイブ予定」メールを送信してもよろしいですか?';
$string['cli_question_delete'] = 'これらの {$a} コースを削除してもよろしいですか?';
$string['cli_question_hide'] = 'これらの {$a} コースを秘匿してもよろしいですか?';
$string['cli_question_hideemail'] = 'これら {$a} ユーザに「コース秘匿予定」メールを送信してもよろしいですか?';
$string['confirm'] = '続ける';
$string['confirmdelete'] = '本当に削除してもよろしいですか?';
$string['confirmmessage'] = '本当に {$a} してもよろしいですか?';
$string['confirmmessagearchive'] = 'これらの {$a} コースをアーカイブおよび削除してもよろしいですか?';
$string['confirmmessagearchiveemail'] = 'これらの {$a} コースオーナにメール送信してもよろしいですか?';
$string['confirmmessagedelete'] = 'これらの {$a} コースを完全に削除してもよろしいですか?';
$string['confirmmessagehide'] = 'これらの {$a} コースを秘匿してもよろしいですか?';
$string['confirmmessagehideemail'] = 'これらの {$a} コースオーナにメール送信してもよろしいですか?';
$string['confirmmessageoptout'] = 'これらの {$a} コースをオプトアウトしてもよろしいですか?';
$string['confirmrestore'] = 'アーカイブの削除保留を元に戻してもよろしいですか?';
$string['course_readded'] = '{$a->fullname} がオプトアウトリストから削除されました。
ありがとうございます。';
$string['course_skipped'] = '{$a->fullname} は次の {$a->optoutmonths} ヵ月間スキップされます。
ありがとうございます。';
$string['coursearchiver'] = 'コースアーカイバ';
$string['coursearchiver_help'] = '次のクライテリアでコースを検索してください: 「shortname, fullname, idnumber, courseid, コース最終アクセス日時または*空のコース」に合致する

すでに秘匿されている場合、コースはグレイアウト表示されます。コースが*空のコースの場合、コースフルネームに線が引かれます。

注意: 最終アクセス検索は指定された日付以前に作成されたコースのみ返します。

注意: 発見されたメールアドレス数と送信済みメール件数が異なる場合があります。これには次の2つの原因があります。
1. すでに秘匿されているコースはコース秘匿が選択されてもオーナに通知するためのメールは送信されません。
2. 複数のコースで同じメールアドレスが存在する場合、1つのメールアドレスに結合されます。

*「空のコース」とは課題=0、リソース=0、評定表のカテゴリ=0、評定表項目=0を意味します。';
$string['coursearchiver_settings'] = 'コースアーカイバ設定';
$string['coursearchiverpath'] = 'アーカイブコースを保存するためのフォルダパス';
$string['coursearchiverpath_help'] = 'このパスはMoodleの$CFG->datarootからの相対パスです。';
$string['coursearchiverpreview'] = 'アップロードコースプレビュ';
$string['coursearchiverresult'] = 'アップロードコース結果';
$string['coursedeleted'] = 'コース削除完了';
$string['coursedeletionnotallowed'] = 'コース削除は許可されていません。';
$string['coursefullname'] = 'コースフルネーム';
$string['courseid'] = 'コースID';
$string['courseidnum'] = 'コースIDナンバ';
$string['courseselector'] = 'コース検索結果';
$string['courseshortname'] = 'コース省略名';
$string['courseteacher'] = '教師ユーザ名/メールアドレス';
$string['createdafter'] = '作成前';
$string['createdbefore'] = '作成後';
$string['createdbeforeafter'] = '作成前/後';
$string['crontask'] = 'コースアーカイブ削除ジョブ';
$string['delete'] = 'コースを削除する';
$string['deletedarchiveemails'] = '教師メールアドレス';
$string['deselectall'] = 'すべてを選択解除する';
$string['email'] = 'メールを送信する';
$string['emailselector'] = 'メール受信を選択されたユーザです。';
$string['empty'] = '空';
$string['emptycourse'] = '空のコース';
$string['emptyonly'] = '空のコースのみ返す';
$string['endafter'] = '終了後';
$string['endbefore'] = '終了前';
$string['error_key'] = 'セキュリティキーが正しくありません。';
$string['error_nocourseid'] = 'コースレコードにIDが含まれていません。';
$string['error_savepointid'] = 'セーブポイントが見つかりませんでした。';
$string['errorarchivefile'] = 'コースアーカイブファイルが存在しません。';
$string['errorarchivepath'] = 'アーカイブパスを作成できませんでした。';
$string['errorarchivingcourse'] = 'コース: ({$a->id}) {$a->fullname} をアーカイブできませんでした。';
$string['errorbackup'] = 'バックアップに失敗しました。';
$string['errordeletingcourse'] = 'コース: ({$a->id}) {$a->fullname} を削除できませんでした。';
$string['erroremptysearch'] = '検索クライテリアが指定されていません。';
$string['errorhidingcourse'] = 'コース: ({$a->id}) {$a->fullname} を秘匿できませんでした。';
$string['errorinsufficientdata'] = 'このアクションを実行するための十分な情報がありません。';
$string['errormissingcourses'] = 'メールテンプレートに「%courses」変数がありません。これはコースリストです。';
$string['errormissingto'] = 'メールテンプレートに「%to」変数がありません。これはメール受信者名です。';
$string['errornoform'] = 'フォームが提供されていません。';
$string['errornonnumericid'] = 'コースIDは数字にする必要があります。';
$string['errornonnumerictimestamp'] = 'タイムスタンプは数値 (UNIXタイムスタンプ) である必要があります。';
$string['erroroptoutcourse'] = 'コース: ({$a->id}) {$a->fullname} をオプトアウトできませんでした。';
$string['errors'] = 'エラー';
$string['errors_count'] = 'エラー: {$a}';
$string['errorsendingemail'] = '{$a->firstname} {$a->lastname} ({$a->email}) へのメール送信に失敗しました。';
$string['errorvalidarchive'] = '有効なバックアップファイルではありません。';
$string['hidden'] = '秘匿';
$string['hide'] = 'コースを秘匿する';
$string['hideemail'] = '「コース秘匿予定」メールを送信する';
$string['hidewarningemailsetting'] = 'コース秘匿のデフォルトメール警告';
$string['hidewarningemailsetting_help'] = 'これは秘匿予定のすべてのコースの教師に送信されるメールコンテンツです。';
$string['hidewarningemailsettingdefault'] = '%to さん

あなたが担当した以下のMoodleコースがまもなく秘匿されますことお知らせします。
これはコースにまだ登録されている学生がコースにアクセスできなくなることを意味します。以下のコースでこの処理を除外したい場合、コースの横にあるリンクをクリックしてください。

%courses

ありがとうございます。';
$string['hidewarningsubject'] = '通知: まもなくコースが秘匿されます。';
$string['ignoreadmins'] = '管理アクセスを無視する';
$string['ignoresiteroles'] = 'サイトロールアクセスを無視する';
$string['includesubcat'] = 'サブカテゴリのコースを含む';
$string['invalidmode'] = 'ツールの有効なモードが与えられていません。';
$string['messageprovider:courseowner'] = 'コースアーカイブ/秘匿ツールからの通知です。';
$string['never'] = 'なし';
$string['nocoursesfound'] = '検索の結果、0件のコースが見つかりました。';
$string['nocoursesselected'] = 'この操作を実行するには少なくとも1つのコースが選択されている必要があります。';
$string['noticecoursehidden'] = 'コース: ({$a->id}) {$a->fullname} はすでに秘匿されています。';
$string['notices'] = '通知';
$string['notices_count'] = '通知: {$a}';
$string['nousersfound'] = '通知するコースオーナはいません。';
$string['nousersselected'] = 'この操作を実行するには少なくとも1名のユーザが選択されている必要があります。';
$string['optout'] = 'コースをオプトアウトする';
$string['optoutarchive'] = 'このコースをアーカイブしない';
$string['optoutby'] = 'リクエスト by';
$string['optouthide'] = 'このコースを秘匿しない';
$string['optoutleft'] = '残り {$a} 日';
$string['optoutlist'] = 'オプトアウトリストを管理する';
$string['optoutmonthssetting'] = 'コースオプトアウト持続性';
$string['optoutmonthssetting_help'] = 'それぞれのコースにオプトアウトを適用する期間 (月) です。';
$string['optouttime'] = '残り時間';
$string['outaccess'] = '最終アクセス';
$string['outemail'] = 'メール';
$string['outfirstname'] = '名';
$string['outfullname'] = '氏名';
$string['outid'] = 'ID';
$string['outidnumber'] = 'IDナンバ';
$string['outlastname'] = '姓';
$string['outowners'] = 'コースオーナ';
$string['outselected'] = '選択済み';
$string['outshortname'] = '省略名';
$string['outuse'] = '最終使用';
$string['pluginname'] = 'コースアーカイバ';
$string['privacy:metadata'] = 'プラグインにはユーザデータを含みません。';
$string['processarchiving'] = '選択されたコースをアーカイブする';
$string['processcomplete'] = '処理完了';
$string['processdeleting'] = '選択されたコースを削除する';
$string['processemailing'] = 'メールを送信する';
$string['processhiding'] = '選択されたコースを秘匿する';
$string['processoptout'] = '選択されたコースをオプトアウトする';
$string['processstarted'] = 'すでに処理は開始しています。';
$string['recover'] = 'コースを回復する';
$string['results'] = '結果';
$string['results_archive'] = 'アーカイブ済みコース:
{$a}';
$string['results_archiveemail'] = 'コースアーカイブ警告メール送信:
{$a}';
$string['results_courselist'] = 'リスト表示コース:
{$a}';
$string['results_delete'] = '削除済みコース:
{$a}';
$string['results_getemails'] = '収集済みメールアドレス:
{$a}';
$string['results_hide'] = '秘匿コース:
{$a}';
$string['results_hideemail'] = '秘匿コース警告メール送信:
{$a}';
$string['results_optout'] = 'オプトアウトコース:
{$a}';
$string['resume'] = '再開';
$string['resumenone'] = '保存はありません';
$string['resumeselect'] = 'セーブポイントを選択する';
$string['save'] = 'セーブポイントを作成する';
$string['saved'] = 'セーブポイントが作成されました。';
$string['saveddate'] = '作成日時';
$string['savepoint_removed'] = 'セーブポイントが削除されました。';
$string['savestatelist'] = 'セーブポイントリストを管理する';
$string['search'] = 'コースを検索する';
$string['selectall'] = 'すべてを選択する';
$string['startafter'] = '開始後';
$string['startbefore'] = '開始前';
$string['startend'] = '開始/終了日';
$string['status'] = 'ステータス';
$string['step2savetitle'] = '{$a} コースリスト保存';
$string['step3savetitle'] = '{$a} メールリスト保存';
$string['unknownerror'] = '処理の結果、再起動が必要なエラーが発生しました。';
$string['visible'] = '表示';
