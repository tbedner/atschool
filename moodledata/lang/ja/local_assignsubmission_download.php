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
 * Strings for component 'local_assignsubmission_download', language 'ja', version '4.4'.
 *
 * @package     local_assignsubmission_download
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['all'] = 'すべて';
$string['assignsubmission_download:view'] = 'ファイル名変更および提出エクスポートへのアクセスを許可する';
$string['clean_filerenaming'] = 'ファイル名をクリーニングする';
$string['clean_filerenaming_help'] = 'ファイル名から特殊文字を除去します。空白文字およびウムラウトは常に置き換えられます。例) 「Übung 1-Gruppe$4」は「Uebung_1-Gruppe4」になります。';
$string['data_preview'] = 'データプレビュー';
$string['data_preview_help'] = '印刷プレビューでカラムの表示/非表示を切り替えるには [+] または [-] をクリックしてください。';
$string['datapreviewtitle'] = 'データプレビュー';
$string['datasettingstitle'] = 'データ設定';
$string['dateinthefutureerror'] = '将来的にあり得ないほど新しい提出';
$string['defaultfilerenamingpattern'] = '[filename]';
$string['defaultziprenamingpattern'] = '[courseshortname]-[assignmentname]-[assignmentid]';
$string['downloadprintpreviewtable'] = '提出エクスポートテーブルをダウンロードします。';
$string['downloadtype'] = 'ダウンロード';
$string['downloadtype:error'] = '少なくとも1つのオプションを選択してください。';
$string['downloadtype:feedbacks'] = '教師のすべてのフィードバックファイル';
$string['downloadtype:submissions'] = '学生のすべての提出ファイル';
$string['downloadtype_feedbacks'] = 'フィードバックをダウンロードする';
$string['downloadtype_help'] = 'ここであなたはダウンロードしたいファイルを選択できます - 学生が提出したファイルおよび教師からのフィードバック (コメント、注釈付きPDF、フィードバックファイル)';
$string['downloadtype_submissions'] = '提出をダウンロードする';
$string['exportformat'] = 'フォーマット';
$string['filenumberinfo'] = 'アップロードされたファイルの最大数が1より大きな状態です。並べ替えを改善するために [filenumber] を使用して学生のすべてのアップロードへの番号付けを検討してください。';
$string['filerenamesettingstitle'] = '提出をリネームしてダウンロードする';
$string['filerenamingpattern'] = '命名規則';
$string['filerenamingpattern_help'] = 'パラメータ「命名規則」ではファイル名の命名方法を決定します。以下の括弧語 (タグ) を使用できます:<br>
    <br>
    [idnumber] 学籍番号<br>
    [lastname] 姓<br>
    [firstname] 名<br>
    [fullname] フルネーム<br>
    [group] グループ - 参加者がグループに登録されている場合<br>
    [groupid]グループID - 参加者がグループに登録されていて、そのグループにIDがある場合<br>
    [filename] オリジナルファイル名<br>
    [filenumber]  1名の学生がアップロードしたファイルの連番<br>
    [assignmentname] 課題名<br>
    [courseshortname] コース省略名<br>
    [currentdate] 現在の日付フォーマット YYYYMMDD (YearMonthDay)<br>
    [currenttime] 現在時刻 HHMM (HoursMinutes)<br>
    <br>
    あなたが英数字 (括弧なし) を追加した場合、これらの文字はアップロード/ダウンロードされたすべての課題に追加されます。<br>
    <br>
    例:<br>
    エントリ「[idnumber]-[lastname]_[assignmentname]」は次のようなファイル名になります:「01234567-Muster_assignmentname」';
$string['hiddenuser'] = '参加者';
$string['labelgroup'] = 'ダウンロードをグループに絞る';
$string['labelgroup_help'] = '特定のグループの学生の課題のみをダウンロードします。';
$string['labelgrouping'] = 'ダウンロードをグルーピングに絞る';
$string['labelgrouping_help'] = '特定のグルーピングの学生の課題のみをダウンロードします。';
$string['lastdownloaded_title'] = 'ユーザの最後の提出ダウンロード';
$string['lastdownloaded_title_help'] = '日付は学生からの提出のユーザによる最後のダウンロードを示しています。';
$string['lastdownloadedfeedbacks_title'] = 'ユーザの最後のフィードバックファイルダウンロード';
$string['lastdownloadedfeedbacks_title_help'] = '日付は教師からのフィードバックファイルのユーザによる最後のダウンロードを示しています。';
$string['nameofziparchive'] = 'ZIPアーカイブ名';
$string['nameofziparchive_help'] = 'ダウンロードしたファイルを含むZIPアーカイブ名です。以下の括弧語 (タグ) を使用できます:<br>
    <br>
    [assignmentname] 課題名<br>
    [assignmentid] 課題ID<br>
    [courseshortname] コース省略名<br>
    [currentdate] 現在の日付フォーマット YYYYMMDD (YearMonthDay)<br>
    [currenttime] 現在時刻 HHMM (HoursMinutes)<br>
    <br>
    あなたが英数字 (括弧なし) を追加した場合、これらの文字はZIPアーカイブ名に追加されます。<br>
    <br>
    例:<br>
    エントリ「[courseshortname]-[assignmentname]_[currentdate]」は次のようなZIPアーカイブ名になります:「EC-exampleassignment_20240401」';
$string['nodownloadsyet'] = 'まだダウンロードされていません。';
$string['nosubmissionneweras'] = '{$a} 以降に提出されたものはありません。';
$string['notreuploadable_hint'] = 'フィードバックタイプ「フィードバックファイル」または「オフライン評定ワークシート」のいずれかがチェックされた場合、このページのリネームされたダウンロードファイルはアップロードできなくなる点に留意してください。';
$string['onlinetext_defaultfilename'] = 'オンラインテキスト';
$string['onlypdf'] = 'PDF設定';
$string['optimum'] = '最適';
$string['pdf_assignment'] = '課題';
$string['pdf_availablefrom'] = '次より利用可能';
$string['pdf_course'] = 'コース';
$string['pdf_duedate'] = '期限';
$string['pdf_group'] = 'グループ';
$string['pdf_nogroup'] = 'グループなし';
$string['pdf_notactive'] = '非アクティブ';
$string['pdf_view'] = '印刷プレビュー';
$string['perpage'] = '1ページあたりの表示提出数';
$string['perpage_help'] = 'ここではPDF1ページに表示される提出数を設定します。
あなたのコースに多くの参加者が登録されている場合、選択したテキストサイズおよびページの向きに応じてリストエントリの配布を最適化するには「最適」を選択してください。';
$string['perpage_propertydefault'] = '100';
$string['perpage_propertydescription'] = 'ここでは教師の提出課題閲覧時、1ページに表示される提出数を設定します。
    <br>この設定は教師個人のプレファレンスで上書きされます。入力は絶対値になります。';
$string['perpage_propertyname'] = 'デフォルト - 提出表示数';
$string['pluginname'] = '提出エクスポートおよびファイル名変更';
$string['pluginname_print'] = 'エクスポート';
$string['pluginname_submissions'] = '提出リネームダウンロード';
$string['prevent_nameextension'] = 'ファイル名の自動拡張を防ぐ';
$string['prevent_nameextension_help'] = 'この機能はファイル名の自動拡張 (「_Submission_File_submissions」等の追加) を防ぎます。';
$string['printpreview'] = 'エクスポート';
$string['printpreviewtabledownloaded'] = 'エクスポートテーブルがダウンロードされました。';
$string['printpreviewtabledownloaded_description'] = 'ユーザID {$a->userid} のユーザがコースモジュールID {$a->contextinstanceid} の課題エクスポートテーブルをダウンロードしました。';
$string['printpreviewtableviewed'] = 'エクスポートテーブルが閲覧されました。';
$string['printpreviewtableviewed_description'] = 'ユーザID {$a->userid} のユーザがコースモジュールID {$a->contextinstanceid} の課題エクスポートテーブルを閲覧しました。';
$string['printsettingstitle'] = 'エクスポート設定';
$string['privacy:metadata:local_assignsubm_download'] = '提出の最後のダウンロードに関する情報を格納するテーブルです。';
$string['privacy:metadata:local_assignsubm_download:choosegroup'] = 'フィルタするグループのグループIDです。';
$string['privacy:metadata:local_assignsubm_download:choosegrouping'] = 'フィルタするグルーピングのグルーピングIDです。';
$string['privacy:metadata:local_assignsubm_download:cleanfilenames'] = 'ファイル名から特殊文字を除去するかどうかです。';
$string['privacy:metadata:local_assignsubm_download:cmid'] = '課題のコースモジュールIDです。';
$string['privacy:metadata:local_assignsubm_download:filenamingscheme'] = 'ダウンロード用ファイルに使用される命名規則です。';
$string['privacy:metadata:local_assignsubm_download:id'] = 'レコードのユニークIDです。';
$string['privacy:metadata:local_assignsubm_download:lastdownloaded'] = '提出の最終ダウンロードのタイムスタンプです。';
$string['privacy:metadata:local_assignsubm_download:preventnameextension'] = 'ファイル名の自動拡張を防ぐかどうかです。';
$string['privacy:metadata:local_assignsubm_download:userid'] = '提出をダウンロードしたユーザのユーザIDです。';
$string['privacy:metadata:local_assignsubm_download:zipnamingscheme'] = 'ZIPアーカイブに使用される命名規則です。';
$string['privacy:metadata:local_assignsubm_feedback'] = 'フィードバックの最後のダウンロードに関する情報を格納するテーブルです。';
$string['privacy:metadata:local_assignsubm_feedback:choosegroup'] = 'フィルタするグループのグループIDです。';
$string['privacy:metadata:local_assignsubm_feedback:choosegrouping'] = 'フィルタするグルーピングのグルーピングIDです。';
$string['privacy:metadata:local_assignsubm_feedback:cleanfilenames'] = 'ファイル名から特殊文字を除去するかどうかです。';
$string['privacy:metadata:local_assignsubm_feedback:cmid'] = '課題のコースモジュールIDです。';
$string['privacy:metadata:local_assignsubm_feedback:filenamingscheme'] = 'ダウンロード用ファイルに使用される命名規則です。';
$string['privacy:metadata:local_assignsubm_feedback:id'] = 'レコードのユニークIDです。';
$string['privacy:metadata:local_assignsubm_feedback:lastdownloaded'] = '提出の最終ダウンロードのタイムスタンプです。';
$string['privacy:metadata:local_assignsubm_feedback:preventnameextension'] = 'ファイル名の自動拡張を防ぐかどうかです。';
$string['privacy:metadata:local_assignsubm_feedback:userid'] = '提出をダウンロードしたユーザのユーザIDです。';
$string['privacy:metadata:local_assignsubm_feedback:zipnamingscheme'] = 'ZIPアーカイブに使用される命名規則です。';
$string['privacy:metadata:preference:clean_filerenaming'] = 'ダウンロードする提出のファイル名から特殊文字を除去するかどうかのプレファレンスです。';
$string['privacy:metadata:preference:downloadtype_feedbacks'] = 'フィードバックをダウンロードするかどうかのプレファレンスです。';
$string['privacy:metadata:preference:downloadtype_submissions'] = '提出をダウンロードするかどうかのプレファレンスです。';
$string['privacy:metadata:preference:exportformat'] = 'ファイルへのエクスポート時に使用するフォーマットのプレファレンスです。';
$string['privacy:metadata:preference:filerenamingpattern'] = 'ダウンロードされる提出のファイル名変更に使用される命名規則のプレファレンスです。';
$string['privacy:metadata:preference:nameofziparchive'] = '投稿またはフィードバックのダウンロード時のZIPアーカイブ名のプレファレンスです。';
$string['privacy:metadata:preference:optimum'] = 'PDFファイルへのエクスポート時に1ページあたりの合計表示数を自動的に決定するかどうかのプレファレンスです。';
$string['privacy:metadata:preference:pageorientation'] = 'PDFファイルへのエクスポート時に使用するページの向きのプレファレンスです。';
$string['privacy:metadata:preference:perpage'] = 'PDFファイルへのエクスポート時に1ページに表示する提出数のプレファレンスです。';
$string['privacy:metadata:preference:prevent_nameextension'] = '提出またはフィードバックのダウンロード時にファイル名の自動拡張を防ぐかどうかのプレファレンスです。';
$string['privacy:metadata:preference:printheader'] = 'PFDファイルへのエクスポート時にヘッダおよびフッタを印刷するかどうかのプレファレンスです。';
$string['privacy:metadata:preference:textsize'] = 'PDFファイルへのエクスポート時に使用するテキストサイズのプレファレンスです。';
$string['privacy:metadata:preference:userfilter'] = 'ファイルへのエクスポート時にどのユーザをフィルタリングするかのプレファレンスです。';
$string['rename_propertydescription'] = '利用可能タグ: {$a}';
$string['show'] = '表示';
$string['show_propertydescription'] = 'メニューエントリ「 {$a->entrytoshow} 」の表示または非表示に使用されます。';
$string['show_propertyname'] = '「 {$a->entrytoshow} 」を表示する';
$string['strallononepage'] = '1ページにすべてを印刷する';
$string['strfilerenaming'] = '提出をダウンロードする';
$string['strlandscape'] = 'ランドスケープ';
$string['strlarge'] = '大';
$string['strmedium'] = '中';
$string['stror'] = 'または';
$string['strpageorientation'] = 'ページの向き';
$string['strpapersizes'] = '用紙サイズ';
$string['strportrait'] = 'ポートレイト';
$string['strprint'] = 'ファイルをダウンロードする';
$string['strprintheader'] = 'ヘッダ/フッタを印刷する';
$string['strprintheader_help'] = 'この設定が有効にされた場合、ヘッダおよびフッタを印刷します。';
$string['strprintheaderlong'] = 'この設定が有効にされた場合、ヘッダおよびフッタを印刷します。';
$string['strrefreshdata'] = 'データプレビューを更新する';
$string['strsmall'] = '小';
$string['strtextsize'] = 'テキストサイズ';
$string['submissionneweras'] = '次より新しい提出';
$string['submissionneweras_help'] = '指定された日時以降に変更されたファイルのみダウンロードします。submissiontype に (onlinetextのような) タイムスタンプがない場合、提出のタイムスタンプが使用されます。';
$string['submissions'] = '提出';
$string['userfilter'] = 'ユーザフィルタ';
$string['viewprintpreviewtable'] = '提出エクスポートテーブルを表示します。';
