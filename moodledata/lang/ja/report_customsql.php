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
 * Strings for component 'report_customsql', language 'ja', version '4.4'.
 *
 * @package     report_customsql
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategory'] = '新しいカテゴリを追加する';
$string['addcategorydesc'] = 'レポートカテゴリを変更する場合、あなたはそのレポートを編集する必要があります。ここであなたはカテゴリテキストを編集、カテゴリを削除または新しいカテゴリを追加できます。';
$string['addingareport'] = 'アドホックデータベースクエリを追加する';
$string['addreport'] = '新しいクエリを追加する';
$string['addreportcategory'] = 'レポートの新しいカテゴリを追加する';
$string['anyonewhocanveiwthisreport'] = 'このレポートを閲覧できる誰でも (report/customsql:view)';
$string['archivedversions'] = 'このクエリのアーカイブバージョン';
$string['at'] = '-';
$string['automaticallydaily'] = 'スケジュール - 毎日';
$string['automaticallymonthly'] = 'スケジュール - 毎月の初日';
$string['automaticallyweekly'] = 'スケジュール - 毎週の初日';
$string['availablereports'] = 'オンデマンドクエリ';
$string['availableto'] = '利用可能: {$a}';
$string['backtocategory'] = 'カテゴリ「 {$a} 」に戻る';
$string['backtoreportlist'] = 'クエリ一覧に戻る';
$string['category'] = 'カテゴリ';
$string['categorycontent'] = '(オンデマンド={$a->manual} 毎日={$a->daily} 毎週={$a->weekly} 毎月={$a->monthly})';
$string['categoryexists'] = 'カテゴリ名はユニークである必要があります。このカテゴリ名はすでに存在します。';
$string['categorynamex'] = 'カテゴリ名: {$a}';
$string['changetheparameters'] = 'パラメータを変更する';
$string['crontask'] = 'アドホックデータベースクエリ: スケジュールレポートタスクを実行する';
$string['customdir'] = 'CSVレポートのエクスポートパス/ディレクトリ';
$string['customdir_help'] = 'ファイルは指定されたファイルパスにCSVフォーマットでエクスポートされます。ディレクトリが指定された場合、ファイル名のフォーマットは「reportid-timecreated.csv」になります。';
$string['customdirmustexist'] = 'ディレクトリ「 {$a} 」は存在しません。';
$string['customdirnotadirectory'] = 'パス「 {$a} 」はディレクトリではありません。';
$string['customdirnotwritable'] = 'ディレクトリ「 {$a} 」に書き込めません。';
$string['customsql:definequeries'] = 'カスタムクエリを定義する';
$string['customsql:managecategories'] = 'カスタムカテゴリを定義する';
$string['customsql:view'] = 'カスタムクエリリポートを表示する';
$string['dailyheader'] = '毎日';
$string['dailyheader_help'] = 'これらのクエリは毎日指定された時間に自動的に実行されます。あなたはすでに累積された結果をこれらのリンクで閲覧できます。';
$string['defaultcategory'] = 'その他';
$string['delete'] = '削除';
$string['deleteareyousure'] = '本当にこのクエリを削除してもよろしいですか?';
$string['deletecategoryareyousure'] = '<p>本当にこのカテゴリを削除してもよろしいですか? </p><p>どのようなクエリも含めません。</p>';
$string['deletecategoryx'] = 'カテゴリ「 {$a} 」を削除する';
$string['deletecategoryyesno'] = '<p>本当にこのカテゴリを削除してもよろしいですか? </p>';
$string['deletereportx'] = 'クエリ「 {$a} 」を削除する';
$string['description'] = '説明';
$string['displayname'] = 'クエリ名';
$string['displaynamerequired'] = 'あなたはクエリ名を入力する必要があります。';
$string['displaynamex'] = 'クエリ名: {$a}';
$string['downloadthisreportas'] = 'これらの結果をダウンロードする';
$string['downloadthisreportascsv'] = 'これらの結果をCSVとしてダウンロードする';
$string['edit'] = '追加/編集';
$string['editcategory'] = 'カテゴリを更新する';
$string['editcategoryx'] = 'カテゴリ「 {$a} 」を編集する';
$string['editingareport'] = 'アドホックデータベースクエリを編集する';
$string['editreportx'] = 'クエリ「 {$a} 」を編集する';
$string['emailbody'] = '{$a} さん';
$string['emailink'] = 'レポートにアクセスするにはこのリンクをクリックしてください: {$a}';
$string['emailnumberofrows'] = '行数およびリンクのみ';
$string['emailresults'] = 'メール本文に結果を記載する';
$string['emailrow'] = 'レポートは {$a} 行を返しました。';
$string['emailrows'] = 'レポートは {$a} 行を返しました。';
$string['emailsent'] = 'メール通知が {$a} に送信されました。';
$string['emailsentfailed'] = 'メールを {$a} に送信できません。';
$string['emailsubject'] = 'クエリ {$a}';
$string['emailsubject1row'] = 'クエリ {$a} [1 行]';
$string['emailsubjectnodata'] = 'クエリ {$a} [結果なし]';
$string['emailsubjectxrows'] = 'クエリ {$a->name} [{$a->rows} 行]';
$string['emailto'] = '自動メール送信先';
$string['emailwhat'] = 'メール内容';
$string['enterparameters'] = 'アドホックデータベースクエリのパラメータを入力する';
$string['errordeletingcategory'] = '<p>クエリカテゴリの削除中にエラーが発生しました。</p><p>クエリカテゴリを削除するには空である必要があります。</p>';
$string['errordeletingreport'] = 'クエリの削除中にエラーが発生しました。';
$string['errorinsertingreport'] = 'クエリの挿入中にエラーが発生しました。';
$string['errorupdatingreport'] = 'クエリの更新中にエラーが発生しました。';
$string['invalidreportid'] = '無効なクエリID {$a} です。';
$string['lastexecuted'] = 'このクエリの最終実行日時は {$a->lastrun} です。所要時間は {$a->lastexecutiontime} でした。';
$string['managecategories'] = 'レポートカテゴリを管理する';
$string['manual'] = 'オンデマンド';
$string['manualheader'] = 'オンデマンド';
$string['manualheader_help'] = 'あなたが結果を表示するためにリンクをクリックした場合、これらのクエリがオンデマンドで実行されます。';
$string['messageprovider:notification'] = 'アドホックデータベースクエリ通知';
$string['monthlyheader'] = '毎月';
$string['monthlyheader_help'] = 'これらのクエリは前月に関してレポートするため毎月初日に自動的に実行されます。あなたはすでに累積された結果をこれらのリンクで閲覧できます。';
$string['monthlynote_help'] = 'これらのクエリは前月に関してレポートするため毎月初日に自動的に実行されます。あなたはすでに累積された結果をこれらのリンクで閲覧できます。';
$string['morethanonerowreturned'] = '2行以上が返されました。このクエリは1行を返す必要があります。';
$string['nodatareturned'] = 'このクエリが返したデータはありません。';
$string['noexplicitprefix'] = 'SQLにテーブル名接頭辞 <code>{$a}</code> を含まないでください。代わりに <code>{}</code> 文字内に接頭辞のないテーブル名を置いてください。';
$string['noreportsavailable'] = '利用可能なクエリはありません。';
$string['norowsreturned'] = '返された行はありません。このクエリは1行を返す必要があります。';
$string['noscheduleifplaceholders'] = 'プレースホルダを含むクエリはオンデマンドでのみ実行できます。';
$string['nosemicolon'] = 'あなたはSQLで「;」の使用を許可されていません。';
$string['notallowedwords'] = 'あなたはこの語句 <code>{$a}</code> をSQLで使用できません。';
$string['note'] = 'ノート';
$string['notrunyet'] = 'このクエリはまだ実行されていません。';
$string['onerow'] = 'クエリで1行を返して同時に結果を1行に集約する';
$string['parametervalue'] = '{$a->name}: {$a->value}';
$string['pluginname'] = 'アドホックデータベースクエリ';
$string['privacy:metadata'] = 'アドホックデータベースクエリはいかなる個人データも保存しません。';
$string['privacy:metadata:reportcustomsqlqueries'] = 'アドホックデータベースクエリ';
$string['privacy:metadata:reportcustomsqlqueries:at'] = '日次レポート時間';
$string['privacy:metadata:reportcustomsqlqueries:capability'] = 'このレポートの実行にユーザが必要なケイパビリティ';
$string['privacy:metadata:reportcustomsqlqueries:categoryid'] = 'report_customsql_categoriesテーブルのカテゴリID';
$string['privacy:metadata:reportcustomsqlqueries:customdir'] = 'CSVレポートエクスポートパス/ディレクトリ';
$string['privacy:metadata:reportcustomsqlqueries:description'] = 'クエリに関する人間が読める説明です。';
$string['privacy:metadata:reportcustomsqlqueries:descriptionformat'] = 'クエリ説明テキストフォーマット';
$string['privacy:metadata:reportcustomsqlqueries:displayname'] = 'UIに表示されるレポート名';
$string['privacy:metadata:reportcustomsqlqueries:emailto'] = 'カンマで区切られたユーザID一覧';
$string['privacy:metadata:reportcustomsqlqueries:emailwhat'] = 'セレクトメニュにあるメールオプション一覧';
$string['privacy:metadata:reportcustomsqlqueries:lastexecutiontime'] = 'このレポートの最終実行時の所要時間 (ミリ秒)';
$string['privacy:metadata:reportcustomsqlqueries:lastrun'] = 'このレポートの最終実行日時';
$string['privacy:metadata:reportcustomsqlqueries:querylimit'] = '検索結果表示件数の制限';
$string['privacy:metadata:reportcustomsqlqueries:queryparams'] = 'このレポートを生成するためのSQLパラメータ';
$string['privacy:metadata:reportcustomsqlqueries:querysql'] = 'このレポートを生成するために実行するSQL';
$string['privacy:metadata:reportcustomsqlqueries:runable'] = '「手動」「毎週」「毎月」実行可能';
$string['privacy:metadata:reportcustomsqlqueries:singlerow'] = 'この設定はスケジュールレポートでのみ意味があります。レポートは1行のデータしか返せないため、一度に1行ずつ蓄積されることを意味します。';
$string['privacy:metadata:reportcustomsqlqueries:timecreated'] = '作成日時';
$string['privacy:metadata:reportcustomsqlqueries:timemodified'] = '修正日時';
$string['privacy:metadata:reportcustomsqlqueries:usermodified'] = '修正ユーザ';
$string['privacy_somebodyelse'] = '他の誰か';
$string['privacy_you'] = 'あなた';
$string['query_deleted'] = 'クエリが削除されました。';
$string['query_edited'] = 'クエリが編集されました。';
$string['query_viewed'] = 'クエリが表示されました。';
$string['queryfailed'] = 'クエリの実行中にエラーが発生しました: {$a}';
$string['querylimit'] = '返す行の制限';
$string['querylimitdefault'] = '返す行の制限のデフォルト';
$string['querylimitdefault_desc'] = 'クエリが膨大な量の行を返してサーバに過負荷をかけてしまうトラブルを防ぐため、それぞれの行で返す行数を制限できます。これは新しいクエリの制限のデフォルト値です。';
$string['querylimitmaximum'] = '返す行の制限の最大値';
$string['querylimitmaximum_desc'] = 'これはクエリの作成者が設定を許可される返す行の絶対最大制限値です。';
$string['querylimitrange'] = '数字は 1 から {$a} の間にする必要があります。';
$string['querynote'] = '<ul>
<li>結果のトークン <code>%%WWWROOT%%</code> は <code>{$a}</code> と置換されます。</li>
<li>すべてのURLのような出力の値は自動的にリンクが作成されます。</li>
<li>あなたのクエリ結果に <code><i>column_name</i></code> および <code><i>column_name</i>_link_url</code> の2つのカラムがある場合、レポート出力は結果として最初のカラムをリンクテキスト、2番目のカラムをURLとしたリンクを含む単一カラムとなります。</li>
<li>結果のカラム名に文字「<code>date</code>」、カラムに数字を含む場合、Unixタイムスタンプとして自動的に人間が可読可能な日付に変換されます。</li>
<li>レポートの実行前にクエリ内のトークン <code>%%USERID%%</code> はレポートを表示するユーザのユーザIDと置換されます。</li>
<li>スケジュールレポートの場合、レポートの実行前にクエリ内のトークン <code>%%STARTTIME%%</code> および <code>%%ENDTIME%%</code> は週間/月間レポートの開始および終了のUnixタイムスタンプと置換されます。</li>
<li>あなたは名前付けしたプレースホルダを使用して例えば <code>:parameter_name</code> のようにSQL内にパラメータを置けます。</li>
<li><code>:parameter_name</code> が <code>date</code> 文字で開始または終了する場合、その値の入力に日時セレクタが使用されます。そうでない場合、プレインテキストボックスが使用されます。</li>
<li>あなたのクエリに次の文字は使用できません: <code>:</code>, <code>;</code>, <code>?</code><ul>
<li>トークンを出力データ (URL出力等) に置きたい場合、あなたは次のトークンを使用できます: <code>%%C%%</code>, <code>%%S%%</code>, <code>%%Q%%</code></li>
<li>トークンを入力データ (正規表現または文字の問い合わせ等) に置きたい場合、あなたは文字の取得にデータベース関数を使用するか、あなた自身で連結する必要があります。PostgreSQLでは次のようになります: CHR(58), CHR(59) and CHR(63) また、MySQLの場合、次のようになります: CHAR(58), CHAR(59), CHAR(63)</li>
</ul></li>
</ul>';
$string['queryparameters'] = 'クエリパラメータ';
$string['queryparams'] = 'クエリパラメータのデフォルト値を入力してください。';
$string['queryparamschanged'] = 'クエリ内のプレースホルダが変更されました。';
$string['queryrundate'] = 'クエリ実行日';
$string['querysql'] = 'クエリSQL';
$string['querysqlrequried'] = 'あなたはSQLを入力する必要があります。';
$string['recordcount'] = 'このレポートには {$a} 行あります。';
$string['recordlimitreached'] = 'このクエリは制限の {$a} 行に達しました。いくつかの行は最終行から除外されました。';
$string['reportfor'] = 'クエリ実行 {$a}';
$string['requireint'] = '整数必須';
$string['runable'] = '実行';
$string['runablex'] = '実行: {$a}';
$string['runquery'] = 'クエリを実行する';
$string['schedulednote'] = 'これらのクエリは前週または前月に関してレポートするため毎週または毎月初日に自動的に実行されます。あなたはすでに累積された結果をこれらのリンクで閲覧できます。';
$string['scheduledqueries'] = 'スケジュールクエリ';
$string['showonlythiscategory'] = '{$a} のみ表示する';
$string['startofweek'] = '週間レポートを実行する曜日';
$string['startofweek_default'] = '週の初めにサイトカレンダーを使用する ({$a})';
$string['startofweek_desc'] = 'これは毎週のスケジュールレポートで週の初日と考える曜日です。';
$string['timecreated'] = '<span class="font-weight-bold">作成日時:</span> {$a}';
$string['timemodified'] = '<span class="font-weight-bold">修正日時:</span> {$a}';
$string['typeofresult'] = '結果タイプ';
$string['unknowndownloadfile'] = '不明なダウンロードファイルです。';
$string['userhasnothiscapability'] = 'ユーザ「 {$a->username} 」 ({$a->userid}) にケイパビリティ「 {$a->capability} 」がありません。リストからこのユーザを削除するか、「 {$a->whocanaccess} 」内の選択肢を変更してください。';
$string['userinvalidinput'] = '無効な入力です。ユーザ名のリストはカンマで区切る必要があります。';
$string['usermodified'] = '<span class="font-weight-bold">修正:</span> {$a}';
$string['usernotfound'] = 'ID「 {$a} 」のユーザは存在しません。';
$string['userswhocanconfig'] = '管理者のみ (moodle/site:config)';
$string['userswhocanviewsitereports'] = 'システムレポートを閲覧できるユーザ (moodle/site:viewreports)';
$string['verifyqueryandupdate'] = 'クエリSQLテキストを検証してフォームを更新する';
$string['weeklyheader'] = '毎週';
$string['weeklyheader_help'] = 'これらのクエリは前週のレポートを作成するため毎週初日に自動的に実行されます。あなたはすでに蓄積された結果をこれらのリンクで閲覧できます。';
$string['whocanaccess'] = 'このクエリにアクセスできる人';
