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
 * Strings for component 'local_reminders', language 'ja', version '4.4'.
 *
 * @package     local_reminders
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityconfduein'] = '期限';
$string['activityconfexplicitenable'] = '明示的なリマインダ有効化';
$string['activityconfexplicitenabledesc'] = 'この設定を有効に場合、教師または関係当局がコースリマインダ設定ページで各活動のリマインダを<strong>明示的</strong>に有効にする必要があります。このためすべての活動リマインダは以下で定義されたスケジュールに関係なく、デフォルトで無効となります。この設定は期限切れリマインダに影響を与えません。';
$string['activityconfexplicitenablehint'] = 'サイト管理者がデフォルトで活動リマインダの送信を無効にしています。これは教師がこのコースで送信したい活動に対して<em>明示的に</em>リマインダを有効にする必要があることを意味します。';
$string['activityconfnoupcomingactivities'] = 'このコースに直近の活動はありません。';
$string['activityconfupcomingactivities'] = '直近活動';
$string['activityconfupcomingactivitiesdesc'] = '未チェックの活動にはリマインダは送信されません。';
$string['activitydueopenahead'] = '活動開始前送信タイミング:';
$string['activitydueopenaheaddesc'] = '活動開始リマインダを送信する日数を設定します。この設定は上の設定でリマインダを送信するために活動開始が有効にされている場合のみ有効です。';
$string['activityignoreincompletes'] = '完了後のリマインダなし:';
$string['activityignoreincompletesdetails'] = 'この設定を有効にした場合、活動終了<strong>前</strong>にユーザが活動を完了した場合はリマインダは送信されません。';
$string['activityopeningseparation'] = '活動開始を分離する:';
$string['activityopeningseparationdesc'] = 'コースリマインダ設定ページで活動開始を別のエントリとして表示します。';
$string['activityremindersboth'] = '開始および終了ともに';
$string['activityremindersonlyclosings'] = '活動終了のみ';
$string['activityremindersonlyopenings'] = '活動開始のみ';
$string['admintreelabel'] = 'リマインダ';
$string['calendareventcreatedprefix'] = '追加';
$string['calendareventoverdueprefix'] = '期限切れ';
$string['calendareventremovedprefix'] = '削除';
$string['calendareventupdatedprefix'] = '更新';
$string['caleventchangedheading'] = 'カレンダーイベント変更リマインダ';
$string['caleventchangedheadingdetails'] = 'これらの設定は個々のイベントの種類を考慮する<strong>前</strong>にチェックされます。';
$string['categoryheading'] = 'コースカテゴリイベントリマインダ';
$string['categorynosendforended'] = '完了済みコースのリマインダなし:';
$string['categorynosendforendeddescription'] = 'この設定を有効にした場合、完了済みコースのリマインダは送信されません。';
$string['contentdescription'] = '説明';
$string['contenttypeactivity'] = '活動';
$string['contenttypecategory'] = 'カテゴリ';
$string['contenttypecourse'] = 'コース';
$string['contenttypegroup'] = 'グループ';
$string['contenttypelocation'] = '場所';
$string['contenttypeuser'] = 'ユーザ';
$string['contentwhen'] = 'いつ';
$string['courseheading'] = 'コースイベントリマインダ';
$string['days1'] = '1日前';
$string['days3'] = '3日前';
$string['days7'] = '7日前';
$string['dueheading'] = '活動イベントリマインダ';
$string['emailconfigsheading'] = 'リマインダメールカスタマイゼーション';
$string['emailfootercustomname'] = 'カスタムメールフッタ';
$string['emailfootercustomnamedesc'] = 'すべてのリマインダメールに埋め込まれるフッタの内容を指定してください。このコンテンツが空でデフォルトのフッタが無効の場合、フッタはリマインダから完全に取り除かれます。';
$string['emailfooterdefaultname'] = 'デフォルトメールフッタを使用する';
$string['emailfooterdefaultnamedesc'] = 'この設定を有効にした場合、デフォルトのリマインダメールのフッタにMoodleカレンダーへのリンクが含まれます。そうでない場合、カスタマイズされたフッタが使用されます。';
$string['emailheadercustomname'] = 'カスタムメールヘッダ';
$string['emailheadercustomnamedesc'] = 'すべてのリマインダメールに埋め込むヘッダコンテンツを指定してください。これはあなたのサイトをこれらのメールメッセージでブランディングするために使用できます。';
$string['enabled'] = '有効';
$string['enabledaddedevents'] = 'イベント作成時に送信する:';
$string['enabledaddedeventsdescription'] = 'カレンダーイベント作成時にリマインダを送信するかどうか指定します。';
$string['enabledchangedevents'] = 'イベント更新時に送信する:';
$string['enabledchangedeventsdescription'] = 'カレンダーイベント更新時にリマインダを送信するかどうか指定します。';
$string['enableddescription'] = 'リマインダプラグインを有効/無効にします。';
$string['enabledforcalevents'] = 'カレンダー変更イベントを有効にする:';
$string['enabledforcaleventsdescription'] = 'カレンダーイベントの作成、削除および更新時にこのタイプのリマインダを送信できるようにします。';
$string['enabledoverdue'] = '期限切れ有効';
$string['enabledremovedevents'] = 'イベント削除時に送信する:';
$string['enabledremovedeventsdescription'] = 'カレンダーイベント削除時にリマインダを送信するかどうか指定します。';
$string['eventtypeclose'] = '活動終了';
$string['eventtypeexpectcompletionon'] = '完了予定';
$string['eventtypegradingdue'] = '評定期限';
$string['eventtypeopen'] = '活動開始';
$string['excludedmodules'] = '除外モジュール:';
$string['excludedmodulesdesc'] = '上で選択したモジュールからイベントが発生した場合はリマインダを送信しません。この設定はグローバルであり、すべての種類のイベントにも適用できます。';
$string['explaincategoryheading'] = 'コースカテゴリイベントのリマインダ設定です。';
$string['explaincourseheading'] = 'コースイベントのリマインダ設定です。これらのイベントはコースで発生します。';
$string['explaindueheading'] = '活動イベントのリマインダ設定です。これらのイベントはコース内の活動/モジュールで発生します。';
$string['explaingroupheading'] = 'グループイベントのリマインダ設定です。これらのイベントは特定のグループのみに発生します。';
$string['explaingroupshowname'] = '送信されるメッセージにグループ名を含むかどうか指定します。';
$string['explainrolesallowedfor'] = '上のどのロールのユーザがリマインダを受信できるか選択します。';
$string['explainsendactivityreminders'] = 'どの活動の状態の場合にリマインダを送信するか指定します。';
$string['explainsiteheading'] = 'サイトイベントのリマインダ設定です。これらのイベントはサイトのすべてのユーザに関係します。';
$string['explainuserheading'] = 'ユーザイベントのリマインダ設定です。これらのそれぞれのユーザの個別イベントです。';
$string['filterevents'] = 'カレンダーイベントをフィルタする:';
$string['filtereventsdescription'] = 'どのカレンダーイベントをフィルタしてリマインダを送信するか指定します。';
$string['filtereventsonlyhidden'] = 'カレンダー内の非表示イベントのみ';
$string['filtereventsonlyvisible'] = 'カレンダー内の表示イベントのみ';
$string['filtereventssendall'] = 'すべてのイベント';
$string['groupheading'] = 'グループイベントリマインダ';
$string['groupshowname'] = 'メッセージにグループ名を表示する:';
$string['messageprovider:reminders_course'] = 'コースイベントのリマインダ通知';
$string['messageprovider:reminders_coursecategory'] = 'コースカテゴリイベントのリマインダ通知';
$string['messageprovider:reminders_due'] = '活動イベントのリマインダ通知';
$string['messageprovider:reminders_group'] = 'グループイベントのリマインダ通知';
$string['messageprovider:reminders_site'] = 'サイトイベントのリマインダ通知';
$string['messageprovider:reminders_user'] = 'ユーザイベントのリマインダ通知';
$string['messagetitleprefix'] = 'メッセージタイトル接頭辞:';
$string['messagetitleprefixdescription'] = '送信されるリマインダメッセージすべてのタイトルの接頭辞としてこのテキストが角括弧付きで追加されます。';
$string['moodlecalendarname'] = 'Moodleカレンダー';
$string['overdueactivityreminders'] = '活動期限切れリマインダ:';
$string['overdueactivityremindersdescription'] = 'この設定を有効にした場合、活動期限切れのユーザにリマインダが送信されます。';
$string['overduemessage'] = 'この活動は期限が切れています!';
$string['overduewarnmessage'] = '期限切れ警告接頭辞:';
$string['overduewarnmessagedescription'] = '期限切れメールの中に埋め込む<strong>シンプルなテキスト</strong>を赤色で入力してください。空の場合、メッセージは表示されません。また、これは期限切れメールが有効にされている場合のみ有効です。';
$string['overduewarnprefix'] = '期限切れタイトル接頭辞:';
$string['overduewarnprefixdescription'] = '期限切れメールのタイトルに埋め込む<strong>シンプルな接頭辞</strong>を入力してください。空の場合、何も付加されません。また、これは期限切れメールが有効にされている場合のみ有効です。';
$string['pluginname'] = 'イベントリマインダ';
$string['privacy:metadata'] = 'イベントリマインダプラグインはいかなる個人データも保存しません。';
$string['reminderdaysahead'] = '送信タイミング:';
$string['reminderdaysaheadcustom'] = 'カスタムスケジュール:';
$string['reminderdaysaheadcustomdetails'] = '希望する場合、イベント前のリマインダ送信のスケジュールを指定してください。';
$string['reminderdaysaheadschedule'] = 'スケジュール';
$string['reminderfrom'] = 'リマインダ送信元';
$string['reminderstask'] = 'ローカルリマインダ';
$string['reminderstaskclean'] = 'ローカルリマインダログを削除する';
$string['rolesallowedfor'] = '許可されるロール:';
$string['sendactivityreminders'] = '活動リマインダ:';
$string['sendas'] = '送信者:';
$string['sendasadmin'] = 'サイト管理者として';
$string['sendasdescription'] = '誰がこれらのリマインダメールを送信するか指定してください。';
$string['sendasnamedescription'] = 'no-replyユーザとして送信される場合のリマインダメールの表示ユーザ名を指定してください。';
$string['sendasnametitle'] = 'no-reply名:';
$string['sendasnoreply'] = 'no-replyアドレス';
$string['showmodnameintitle'] = 'メール件名にモジュール名を表示する';
$string['showmodnameintitledesc'] = 'この設定を有効にした場合、対応するモジュール名がリマインダ件名に付加されます。';
$string['siteheading'] = 'サイトイベントリマインダ';
$string['taskreminder'] = 'リマインダタスク';
$string['titlesubjectprefix'] = 'リマインダ';
$string['userheading'] = 'ユーザイベントリマインダ';
$string['useservertimezone'] = 'サーバタイムゾーンを使用する';
