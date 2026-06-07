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
 * Strings for component 'timetableevents', language 'ja', version '4.4'.
 *
 * @package     timetableevents
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acadyears:inuse'] = '使用中';
$string['cachedef_course_instance_dateranges'] = 'キャッシュ済みインスタンス設定';
$string['cachedef_course_instance_events'] = 'キャッシュ済みイベント';
$string['coursesetting:academicyear'] = '年度';
$string['coursesetting:academicyear:notconfigured'] = '年度が設定されていません。あなたのサイト管理者にご連絡ください。';
$string['coursesetting:academicyear:notset'] = '現在の年度が未設定です。';
$string['coursesetting:academicyear_help'] = 'イベントが表示される年度です。ここで変更しない場合、現在のサイトデフォルトが表示されます。サイト管理者がサイトレベルで定義します。';
$string['coursesetting:addacademicyear'] = '新しい年度を追加する';
$string['coursesetting:excludedsections'] = '除外セクション';
$string['coursesetting:excludedsections_help'] = '授業間隔の計算で「スキップ」されたセクション - これらのセクションはカウントされません。また、イベントも表示されません。除外されたセクションの前後のセクションの授業間隔は除外されたセクションが存在しないかのように連続します。';
$string['coursesetting:firstsection'] = '第1授業セクション';
$string['coursesetting:firstsection_help'] = 'コースレベルで定義された設定に基づいたイベントが表示される最初のセクションです。デフォルトではサイトのデフォルトが定義されますが、このコース内の任意のセクションにオーバーライドできます。';
$string['coursesetting:footertext'] = '追加フッタテキスト';
$string['coursesetting:footertext_help'] = 'この設定はセクション内のすべてのタイムテーブルインスタンスにユーザへのメッセージを表示するために使用できます。表示されるメッセージはフッタに表示されるサイト全体のメッセージに追加されます。';
$string['coursesetting:groupoverride'] = 'x {$a->name} - 開始学期: {$a->term} / 授業開始日: {$a->teachingstartdate}';
$string['coursesetting:groupoverride:add'] = 'グループオーバーライドを追加する';
$string['coursesetting:groupoverride:notconfigured'] = 'グループが設定されていないか、すでにオーバーライドされています。';
$string['coursesetting:groupoverride:term'] = '学期 {$a->termno}';
$string['coursesetting:groupoverrides'] = 'グループオーバーライド';
$string['coursesetting:groupoverrides_help'] = '現在のオーバーライドが定義されているグループです。';
$string['coursesetting:groupoverridesoracadyears'] = 'グループまたは年度が設定されていません。';
$string['coursesetting:groupoverridesoracadyears_help'] = '異なるグループに対して異なる授業スケジュールを定義するために使用されます - この設定は異なる時間に授業が開催されるグループがある場合、それらのグループの学生および教師がセクション内で正しいタイムテーブル情報を確認するために使用されます。オーバーライドのないグループは上で定義されたコース設定を使用します。';
$string['coursesetting:readingweeks'] = '自習週間';
$string['coursesetting:readingweeks_help'] = '授業間隔の計算において、1週間実施されるセクション - 2週間の授業間隔を使用するコースのみ利用可能です。';
$string['coursesetting:settings'] = 'タイムテーブルイベント設定';
$string['coursesetting:teachinginverval'] = '授業間隔';
$string['coursesetting:teachinginverval:daily'] = '毎日';
$string['coursesetting:teachinginverval:fortnightly'] = '隔週';
$string['coursesetting:teachinginverval:weekly'] = '毎週';
$string['coursesetting:teachinginverval_help'] = 'セクション内で表示されるイベントの頻度です。どのセクションがどの時間間隔を表示するか上の設定に基づきます。
<ul>
    <li>毎週: 特定のセクションのタイムテーブルイベントインスタンスは該当する週に予定されているすべてのイベントを表示します。</li>
    <li>隔週: 特定のセクションのタイムテーブルイベントインスタンスには該当する2週間のすべてのイベント/ライブセッションが表示されます。</li>
    <li>毎日: 特定のセクションのタイムテーブルイベントインスタンスは該当日に予定されているすべてのイベントを表示します。</li>
</ul>';
$string['coursesetting:teachingstartdate'] = '授業開始日';
$string['coursesetting:teachingstartdate:group'] = '授業開始日';
$string['coursesetting:teachingstartdate:group_help'] = 'オーバーライドを定義するグループの最初のイベントの日付です。この設定は開始日が上の「開始学期」設定で定義された学期の最初の週の前または後のいずれかである場合にのみ使用する必要があります。';
$string['coursesetting:teachingstartdate_help'] = '最初のイベントの日付です。この設定は開始日が上の「開始学期」設定で定義されたデフォルトより前または後の場合にのみ使用する必要があります。該当学期の第1週目に授業が開始される場合、この設定は変更しないままにしてください。';
$string['coursesetting:term'] = '開始学期';
$string['coursesetting:term:group'] = '開始学期';
$string['coursesetting:term:group_help'] = 'グループのイベントが開始される学期です。開始学期前にスケジュールされたこのグループのイベントはコースのセクション内には表示されません。';
$string['coursesetting:term:options'] = '学期 {$a->termno} {$a->startdate} - {$a->enddate}';
$string['coursesetting:term_help'] = 'コースイベントが開始される学期です。この日付以前のイベントは活動インスタンスでコースデフォルトを使用するセクションには表示されません。';
$string['footertext'] = 'フッタテキスト';
$string['footertext_desc'] = 'このテキストはコースページでタイムテーブルイベントモジュールのそれぞれのインスタンスの後に表示されます。追加テキストはコース設定で追加できます。';
$string['footertextadmin'] = '次のイベントを表示する: {$a->coursename} - {$a->group}{$a->daterange}';
$string['invalidcourseshortname'] = '提供されたコース省略名がどのコースにも合致しませんでした。';
$string['invalidgroupidnumber'] = '提供されたグループIDナンバーがどのグループにも合致しませんでした。';
$string['invalidtime'] = '無効な日時が提供されました。あなたはISO 8601フォーマットの日付および時間を指定する必要があります。';
$string['invalidtimeend'] = 'イベントの終了日時は開始日時の後にする必要があります。';
$string['modsetting:coursedefaults'] = 'コースデフォルトに基づきイベントを表示する';
$string['modsetting:coursedefaults_help'] = 'この設定が有効にされた場合、コース管理者設定で定義された授業間隔計算がユーザに表示する情報を決定するために使用されます。あなたがこのインスタンスのコース設定をオーバーライドする必要がある場合、この設定を無効にしてください。';
$string['modsetting:coursesearch'] = 'イベントを表示するコース';
$string['modsetting:coursesearch_help'] = 'デフォルトでは現在のコースのイベントのみ表示されます。この設定は異なるコースのイベントを表示するために使用できます。この設定で現在のコース以外のコースを定義する場合、下の定義されたコースからグループを選択する必要があることに留意してください。';
$string['modsetting:daterange'] = '日付範囲';
$string['modsetting:daterange_help'] = 'この設定はタイムテーブルイベント表示のこのインスタンス内でイベントを表示する日付計算をオーバーライドするために使用されます。この設定が有効にされない場合、コースレベル設定はどの日付範囲が使用されるか決定するために使用されます。この設定が有効にされた場合、定義された範囲内すべてのイベントがこのインスタンス内に表示されます。';
$string['modsetting:groupsearch'] = '選択されたコースのイベントを表示するグループ';
$string['modsetting:groupsearch_help'] = 'この設定はイベントを表示するコース (上の「イベントを表示するコース」設定をご覧ください) が異なるコースのイベントを表示するよう設定されている場合のみ使用されます。この設定は定義されたコースでイベントを表示するグループを選択するために使用されます。関連するタイムテーブルイベントを持つグループのみ選択できます。';
$string['modsetting:nogroups'] = 'このコースにはグループは設定されていません。';
$string['modsetting:placeholder'] = '検索するために入力を開始する';
$string['modulename'] = 'タイムテーブルイベント';
$string['modulenameplural'] = 'タイムテーブルイベント';
$string['nodaterange'] = 'このセクションで利用可能な日付範囲はありません。';
$string['nogroupselected'] = 'グループ未選択';
$string['notconfigured'] = 'サイトの設定がなされていません。あなたの管理者にご連絡ください。';
$string['pluginadministration'] = 'タイムテーブルイベント';
$string['pluginname'] = 'タイムテーブルイベント';
$string['pluginsettings'] = 'プラグイン設定';
$string['pluginsettings:acadyears'] = '年度';
$string['pluginsettings:acadyears:edit'] = 'タイムテーブルイベント - 年度を編集する';
$string['pluginsettings:acadyears:name'] = '名称';
$string['pluginsettings:acadyears:termend'] = '学期 {no} 終了';
$string['pluginsettings:acadyears:termstart'] = '学期 {no} 開始';
$string['pluginsettings:createacadyear'] = 'あなたがこのプラグイン設定を続けるには少なくとも1年度を作成する必要があります。';
$string['pluginsettings:currentacadyear'] = '現在の年度';
$string['pluginsettings:currentacadyear_desc'] = 'これはコース設定でオーバーライドされない限り、すべての新しいコースで適用されます。';
$string['pluginsettings:firstteachingsection'] = '第1授業セクション';
$string['pluginsettings:firstteachingsection_desc'] = 'これはコース設定でオーバーライドされない限り、すべての新しいコースで適用されます。';
$string['pluginsettings:teachinginterval'] = '授業間隔';
$string['pluginsettings:teachinginterval_desc'] = 'これはコース設定でオーバーライドされない限り、すべての新しいコースで適用されます。';
$string['pluginsettings:teachingstartdate'] = '授業開始日';
$string['pluginsettings:teachingstartdate_desc'] = 'これはコース設定でオーバーライドされない限り、すべての新しいコースで適用されます。デフォルトは最初の学期の開始日です。';
$string['pluginsettings:term'] = '学期';
$string['pluginsettings:year'] = '年';
$string['privacy:metadata'] = 'プラグインは個人データを保存しません。すべてのイベントはコアのカレンダAPIを使用して保存されます。その他のデータはすべて匿名設定です。';
$string['section'] = 'セクション';
$string['timetableevents:addinstance'] = 'タイムテーブルイベントインスタンスを追加する';
$string['timetableevents:import'] = 'ウェブサービス経由でタイムテーブルイベントをインポートする';
$string['timetableevents:view'] = 'タイムテーブルイベントインスタンスを表示する';
$string['timetableevents:viewall'] = 'すべてのタイムテーブルイベントインスタンスを表示する';
$string['vieweventsforgroup'] = 'グループのイベントを表示する';
