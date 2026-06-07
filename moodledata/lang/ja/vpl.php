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
 * Strings for component 'vpl', language 'ja', version '4.4'.
 *
 * @package     vpl
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['VPL_COMPILATIONFAILED'] = 'コンパイルか実行の準備に失敗しました';
$string['about'] = 'VPLについて';
$string['acceptcertificates'] = '自己署名証明書を受諾';
$string['acceptcertificates_description'] = '実行サーバが自己署名証明書を使用していない場合はこのオプションのチェックをはずしてください。';
$string['addfile'] = 'ファイルの追加';
$string['allfiles'] = 'すべてのファイル';
$string['allsubmissions'] = 'すべての提出物';
$string['always_use_ws'] = 'つねに非暗号化Websocketプロトコル(ws)を使用';
$string['always_use_wss'] = 'つねに暗号化Websocketプロトコル(wss)を使用';
$string['anyfile'] = '任意のファイル';
$string['attemptnumber'] = '試行番号{$a}';
$string['autodetect'] = '自動検出';
$string['automaticevaluation'] = '自動実行';
$string['automaticgrading'] = '自動評価';
$string['averagetime'] = '平均時間 {$a}';
$string['basedon'] = 'オプションのコピー';
$string['basic'] = '基本';
$string['binaryfile'] = 'バイナリ・ファイル';
$string['browserupdate'] = 'Webブラウザを最新版に更新してください。<br />もしくはWebcoketに対応済みのブラウザを使用してください。';
$string['calculate'] = '計算';
$string['calendardue'] = 'VPL提出期限';
$string['calendarexpectedon'] = 'VPL提出予定';
$string['changesNotSaved'] = '変更は保存されません';
$string['check_jail_servers'] = 'jailサーバのチェック';
$string['check_jail_servers_help'] = '<h1>jailサーバのチェック</h1>
<p>このページでは、この活動で利用するjailサーバの状態を検査して表示する。</p>';
$string['clipboard'] = 'クリップボード';
$string['closed'] = '終了';
$string['comments'] = 'コメント';
$string['compilation'] = 'コンパイル';
$string['confirmoverridedeletion'] = '本当にこの設定を削除しますか？';
$string['connected'] = '接続した';
$string['connecting'] = '接続中';
$string['connection_closed'] = '接続が閉じられました';
$string['connection_fail'] = '接続に失敗しました';
$string['console'] = 'コンソール';
$string['copy'] = 'コピー';
$string['create_new_file'] = '新規ファイルの作成';
$string['currentstatus'] = '現在の状態';
$string['cut'] = 'カット';
$string['datesubmitted'] = '提出されたデータ';
$string['debug'] = 'デバッグ';
$string['debugging'] = 'デバッグ中';
$string['debugscript'] = 'デバッグ・スクリプト';
$string['debugscript_help'] = 'この活動で使用するデバッグ・スクリプトの選択';
$string['defaultexefilesize'] = 'デフォルトの実行ファイルの最大サイズ';
$string['defaultexememory'] = 'デフォルトのメモリ使用量の最大値';
$string['defaultexeprocesses'] = 'デフォルトのプロセス数の最大値';
$string['defaultexetime'] = 'デフォルトの実行時間の最大値';
$string['defaultfilesize'] = 'デフォルトのアップロードファイルの最大値';
$string['defaultresourcelimits'] = 'デフォルトの実行時資源の制限';
$string['delete'] = '削除';
$string['delete_file_fq'] = 'ファイル\'{$a}\'を削除しますか?';
$string['delete_file_q'] = 'ファイルを削除しますか?';
$string['deleteallsubmissions'] = 'すべての提出物を削除する';
$string['depends_on_https'] = 'httpかhttpsかに応じてwsもしくはwssを使用';
$string['description'] = '説明';
$string['diff'] = '差分';
$string['directory_not_renamed'] = 'ディレクトリ \'{$a}\' の名前が変更されていない';
$string['disabled'] = '無効';
$string['discard_submission_period'] = '提出物を破棄する期間';
$string['discard_submission_period_description'] = 'すべての学生と課題に関して、システムは提出物の破棄を試みます。システムは、最後に提出された物と、すべての期間について少なくとも1つの提出物を保持します';
$string['download'] = 'ダウンロード';
$string['downloadallsubmissions'] = 'すべての提出物をダウンロード';
$string['downloadsubmissions'] = '提出物をダウンロード';
$string['duedate'] = '締め切り日時';
$string['dueevent'] = '{$a}の提出期限';
$string['dueeventaction'] = '開発／提出';
$string['edit'] = '編集';
$string['editing'] = '編集中';
$string['editortheme'] = 'エディタ・テーマ';
$string['evaluate'] = '評価';
$string['evaluateonsubmission'] = '提出時に評価';
$string['evaluating'] = '評価中';
$string['evaluation'] = '評価結果';
$string['examples'] = '例';
$string['execution'] = '実行';
$string['executionfiles'] = '実行ファイル';
$string['executionfiles_help'] = '<p>ここでは、提出物の実行、デバッグ、評価の準備に必要なファイルを設定します。これにはスクリプトファイル、プログラムテストファイル、データファイルが含まれます。</p>
<p>実行またはデバッグの送信にスクリプトファイルを設定しない場合、システムは（ファイル名の拡張子に基づいて）使用言語を解決し、定義済みのスクリプトを使用します。';
$string['executionoptions'] = '実行オプション';
$string['executionoptions_help'] = '<h1>実行オプション</h1>
<p>このページでは、各種実行時オプションを設定する。</p>
<ul>
<li><b>オプションのコピー</b>: 他のVPL活動から設定などを取り込む
<ul><li>実行ファイル（あらかじめ決められたスクリプトファイルを連結する）</li>
<li>実行時リソースに関する制限</li>
<li>バリエーションは連結される</li>
<li>提出時にアップロードされるそれぞれのファイルの最大長</li>
</ul>
</li>
<li><b>実行</b>、<b>デバッグ</b>、<b>評価</b>: 提出物の編集中にそれぞれのアクションを可能にするのであれば"Yes"に設定する。これは学生にのみ影響する。評価が可能なユーザに対しては、これらの機能は常に利用可能である。</li>
<li><b>提出時に評価</b>: 提出物は、アップロードされたときに自動的に評価される。</li>
<li><b>自動評価</b>: 評価結果に評価コードが含まれる場合、自動的に評価の値として設定される。</li>
</ul>';
$string['file'] = 'ファイル';
$string['fileNotChanged'] = 'ファイルは変更されていません';
$string['file_name'] = 'ファイル名';
$string['fileadded'] = 'ファイル \'{\\$a}\' が追加されました';
$string['filedeleted'] = 'ファイル \'{\\$a}\' が削除されました';
$string['filelist'] = 'ファイルリスト';
$string['filenotadded'] = 'ファイルは追加されていません';
$string['filenotdeleted'] = 'ファイル {$a} は削除されません';
$string['filenotrenamed'] = 'ファイル {$a} は名前変更されません';
$string['filerenamed'] = 'ファイル \'{\\$a->from}\' は \'{\\$a->to}\' に名前変更されました';
$string['filesChangedNotSaved'] = 'ファイルが変更されていますが保存されていません';
$string['filesNotChanged'] = 'ファイルは変更されていません';
$string['filestoscan'] = '調べるファイル';
$string['fileupdated'] = 'ファイル \'{\\$a}\' は更新されています';
$string['find'] = '検索';
$string['find_replace'] = '検索/置換';
$string['freeevaluations'] = '自動評価';
$string['freeevaluations_help'] = '最終評点が減点されない自動評価の回数';
$string['fulldescription'] = '詳細説明';
$string['fulldescription_help'] = '<h1>詳細説明</h1>
<p>ここには、活動の詳細な説明を書かなければならない。</p>
<p>ここに何も書かなければ、簡単な説明が代わりに表示される。</p>
<p>自動的に評価するつもりならば、課題のインタフェースは詳細に曖昧でない形で示さなければならない。</p>';
$string['fullscreen'] = '全画面';
$string['getjails'] = '実行サーバの取得';
$string['gradeandnext'] = '採点して次へ';
$string['graded'] = '採点済み';
$string['gradedbyuser'] = '採点者';
$string['gradedon'] = '採点日時';
$string['gradedonby'] = '{$a->gradername} により {$a->date} にレビュー';
$string['gradenotremoved'] = '採点は取り除けません。採点帳の活動設定を確認してください。';
$string['gradenotsaved'] = '採点は保存されていません。採点帳の活動設定を確認してください。';
$string['gradeoptions'] = '採点オプション';
$string['grader'] = '採点者';
$string['gradercomments'] = '採点者のコメント';
$string['graderemoved'] = '採点は削除されました';
$string['groupwork'] = 'グループワーク';
$string['inconsistentgroup'] = 'あなたが所属しているグループ数は1ではありません';
$string['incorrect_directory_name'] = '間違ったディレクトリ名';
$string['incorrect_file_name'] = '不正なファイル名';
$string['indicator:cognitivedepth_help'] = 'この指標は、VPL活動において生徒が到達した認知の深さに基づいています。';
$string['indicator:socialbreadth_help'] = 'この指標は、VPL活動において生徒が到達した幅広い知識を評価するものです。';
$string['individualwork'] = '個別の作業';
$string['inputoutput'] = 'インプット/アウトプット';
$string['instanceselection'] = 'VPLセレクション';
$string['isexample'] = 'この活動は例としてふるまう';
$string['jail_servers'] = 'jailサーバリスト';
$string['jail_servers_config'] = 'jailサーバ設定';
$string['jail_servers_description'] = 'サーバごとに1行記述';
$string['joinedfiles'] = '選択したファイルを結合';
$string['keepfiles'] = '実行時に保持するファイル';
$string['keepfiles_help'] = '<h1>実行時に保持するファイル</h1>
<p>セキュリティ上の問題により、&quot;実行ファイル&quot;により追加されたファイルはvpl_executionファイルの実行前に削除される。</p>
<p>これらのファイルを（例えば、テストデータとして用いるなど）実行時に残しておく必要がある場合、ここで指定する。</p>';
$string['keyboard'] = 'キーボード';
$string['lasterror'] = '最新のエラー情報';
$string['lasterrordate'] = '最新のエラー日時';
$string['listofcomments'] = 'コメントのリスト';
$string['listsimilarity'] = '類似を検出したリスト';
$string['listwatermarks'] = '透かしのリスト';
$string['local_jail_servers'] = 'ローカルのjailサーバ';
$string['local_jail_servers_help'] = '<h1>ローカルjailサーバ</h1>
<p>ここでは、この活動で利用するローカルjailサーバを追加し設定できる。</p>
<p>サーバのURLを1台につき1行で入力する。このとき、空行や"#"で始まるコメント行も利用できる。</p>
<p>この活動は、jailサーバリストを利用します。
このサーバリストは、ここで設定されたサーバに加え、コピー元の活動のリスト、
さらには共通のリストから構成される。
もしこの活動やここからコピーされる活動が他のサーバを利用しないようにするには、
サーバリストの最後に"end_of_jails"を含む行を記述する。</p>';
$string['manualgrading'] = '手作業の採点';
$string['maxexefilesize'] = '実行ファイルの最大サイズ';
$string['maxexememory'] = '使用メモリの最大サイズ';
$string['maxexeprocesses'] = 'プロセス数の最大数';
$string['maxexetime'] = '実行時間の最長限度';
$string['maxfiles'] = '提出可能なファイル数';
$string['maxfilesexceeded'] = 'ファイルの最大数を超えました';
$string['maxfilesize'] = 'ファイルの最大サイズ';
$string['maxfilesizeexceeded'] = 'ファイルの最大サイズを超えました';
$string['maxpostsizeexceeded'] = 'サーバーの最大投稿サイズを超えました。ファイルを削除するか、ファイルサイズを小さくしてください。';
$string['maxresourcelimits'] = '実行時資源の最大値';
$string['maxsimilarityoutput'] = '類似度による最大の出力';
$string['menucheck_jail_servers'] = 'jailサーバのチェック';
$string['menuexecutionfiles'] = 'ファイル';
$string['menuexecutionoptions'] = 'オプション';
$string['menukeepfiles'] = '保持するファイル';
$string['menulocal_jail_servers'] = 'ローカルjailサーバ';
$string['menuresourcelimits'] = 'リソース制限';
$string['minsimlevel'] = '表示する最小の類似度のレベル';
$string['moduleconfigtitle'] = 'VPLモジュール設定';
$string['modulename'] = 'Virtual programming lab';
$string['modulename_help'] = '<p>VPLはプログラミング課題を管理するMoodleの活動モジュールで、その主な特徴は以下の通りです：
</p>
<ul>
<li>ブラウザ上でプログラムのソースコードを編集することができます。
<li>学生はブラウザ上でインタラクティブにプログラムを実行することができます。
<li>プログラムをレビューするためにテストを実行することができます。
<li>ファイル間の類似性を検索することができます。
<li>編集の制限を設定し、外部テキストの貼り付けを避けることができます。
</ul
<p><a href="http://vpl.dis.ulpgc.es">Virtual Programming lab Home Page</a></p>';
$string['modulename_link'] = 'mod/vpl/view';
$string['modulenameplural'] = 'Virtual programming labs';
$string['new'] = '新規';
$string['new_file_name'] = '新規ファイル名';
$string['next'] = '次';
$string['nojailavailable'] = '利用可能なjailサーバがありません';
$string['noright'] = 'アクセス権限がありません';
$string['nosubmission'] = '提出物がありません';
$string['notexecuted'] = '実行されていません';
$string['notgraded'] = '採点待ち';
$string['notsaved'] = '未保存';
$string['novpls'] = 'Virtual programming labが定義されていません';
$string['nowatermark'] = '透かし {$a} を所有する';
$string['nsubmissions'] = '{$a} 提出物';
$string['numcluster'] = 'クラスタ {$a}';
$string['open'] = '開催中';
$string['opnotallowfromclient'] = 'このマシンではその動作は許されていません';
$string['options'] = 'オプション';
$string['optionsnotsaved'] = 'オプションは保存されていません';
$string['optionssaved'] = 'オプションが保存されました';
$string['origin'] = '元';
$string['othersources'] = '調査に加えるその他のソース';
$string['outofmemory'] = 'メモリー不足';
$string['override_help'] = '"Override" がチェックされている場合、該当するユーザーに対して、この設定は選択された値で上書きされます。';
$string['override_options'] = '上書きオプション';
$string['override_users'] = '該当ユーザー';
$string['override_users_help'] = '1つのユーザー/グループは、1つのオーバーライドセットにのみ影響されます。<br>
あるユーザが1つのセットに影響され、そのユーザがメンバーである1つのグループが別のセットに影響される場合、ユーザによる影響が優先されます。<br>
ユーザが複数のグループのメンバで、複数のセットに影響される場合は、表の最初のものが優先されます。';
$string['overrides_help'] = 'アクティビティに対して、一連の設定を上書きすることができます。これらの設定は、影響を受けるユーザーやグループのアクティビティ設定を上書きします。';
$string['paste'] = '貼り付け';
$string['pluginadministration'] = 'VPLの管理';
$string['pluginname'] = 'Virtual programming lab';
$string['previoussubmissionslist'] = 'これまでの提出物のリスト';
$string['privacy:metadata:vpl:freeevaluations'] = '自由な自動評価回数（ペナルティなし）';
$string['privacy:metadata:vpl:reductionbyevaluation'] = '自動採点を希望した生徒の採点にペナルティを課す';
$string['privacy:metadata:vpl:shortdescription'] = 'アクティビティ概要';
$string['privacy:metadata:vpl:startdate'] = '活動開始日';
$string['privacy:metadata:vpl_assigned_overrides'] = 'アクティビティ設定のオーバーライドが割り当てられている場合の情報';
$string['privacy:metadata:vpl_assigned_variations'] = 'アクティビティ・バリエーションがある場合の情報';
$string['privacy:metadata:vpl_assigned_variations:description'] = '割り当てられたバリエーションの説明';
$string['privacy:metadata:vpl_running_processes'] = 'このアクティビティで実行中のユーザープロセス情報';
$string['privacy:metadata:vpl_running_processes:server'] = 'タスクを実行するサーバ';
$string['privacy:metadata:vpl_running_processes:starttime'] = 'タスクの実行開始日';
$string['privacy:metadata:vpl_submissions:dategraded'] = '提出物の評価日時';
$string['privacy:metadata:vpl_submissions:datesubmitted'] = '提出日時';
$string['privacy:metadata:vpl_submissions:grade'] = 'この提出物に対する採点。この値は成績表の値と一致しない場合があります。';
$string['privacy:metadata:vpl_submissions:gradercomments'] = 'この提出物に関する採点者のコメント';
$string['proposedgrade'] = '提案された評価: {$a}';
$string['proxy'] = 'プロキシ';
$string['proxy_description'] = 'Moodleから実行サーバに接続するためのプロキシ';
$string['redo'] = '再実行';
$string['reductionbyevaluation'] = '自動評価ごとの減点';
$string['reductionbyevaluation_help'] = '学生が要求した自動評価ごとに最終評点から一定の評点または一定の割合を減点します';
$string['regularscreen'] = '通常画面';
$string['removebreakpoint'] = 'ブレークポイントの削除';
$string['removegrade'] = '採点の削除';
$string['rename'] = '名前変更';
$string['rename_directory'] = 'ディレクトリ名の変更';
$string['rename_file'] = 'ファイル名の変更';
$string['replace_find'] = '置換/検索';
$string['replacenewer'] = '新しいバージョンはすでに保存されています。\\n新しいバージョンに置き換えますか？';
$string['requestedfiles'] = '要求されたファイル';
$string['requestedfiles_help'] = '<h1>要求されたファイル</h1>
<p>ここでは、活動の基本部で指定されたファイル数まで、要求されたファイルの名前を指定する。</p>
<p>もしファイル名が指定されていない物があれば、それらは提出しないことも可能であり、どんな名前を付けても良い。</p>
<p>要求されたファイルの内容を登録することも可能で、その場合、まだファイルが提出されていない間は、最初にエディタでファイルを開いたときにその内容が用いられる。</p>';
$string['requirednet'] = '提出が許可されたネットワーク';
$string['requiredpassword'] = 'パスワードが必要です';
$string['resetfiles'] = 'ファイルのリセット';
$string['resetvpl'] = '{$a} のリセット';
$string['resourcelimits'] = '実行リソース制限';
$string['resourcelimits_help'] = '<h1>実行時リソース制限</h1>
<p>実行時間、使用メモリ、実行ファイルの大きさ、同時に実行するプロセス数の制限を指定できる。</p>
<p>これらの制限は、スクリプトファイルvpl_run.sh、vpl_debug.sh、vpl_evaluate.shを実行する際や、
その実行により作られるvpl_executionファイルに適用される。</p>
<p>この活動がオプションを別の活動からコピーするようにしている場合、コピー元やその祖先の活動で設定されている制限、さらにはモジュール全体に対する制限に影響される。</p>';
$string['restrictededitor'] = '外部ファイルのアップロード、外部コンテンツの貼り付けとドロップを無効にする';
$string['resume'] = 'レジュメ';
$string['retrieve'] = '検索結果';
$string['run'] = '実行';
$string['running'] = '実行中';
$string['runscript'] = '実行スクリプト';
$string['runscript_help'] = 'この活動で使用する実行スクリプトを選択';
$string['save'] = '保存';
$string['savecontinue'] = '保存して継続';
$string['saved'] = '保存済み';
$string['savedfile'] = 'ファイル \'{\\$a}\' は保存されました';
$string['saveforotheruser'] = '他のユーザーのために投稿を保存していますが、よろしいですか？';
$string['saveoptions'] = 'オプションの保存';
$string['saving'] = '保存中';
$string['scanactivity'] = 'アクティビティ';
$string['scandirectory'] = 'ディレクトリ';
$string['scanningdir'] = 'ディレクトリの調査中';
$string['scanoptions'] = '調査オプション';
$string['scanother'] = '追加されたソースについて類似度を調査';
$string['scanzipfile'] = 'Zipファイル';
$string['search:activity'] = 'Virtual Programming Lab - 活動情報（名前と説明）';
$string['select_all'] = 'すべて選択';
$string['server'] = 'サーバ';
$string['serverexecutionerror'] = 'サーバ実行エラー';
$string['shortcuts'] = 'キーボード・ショートカット';
$string['shortdescription'] = '短い説明';
$string['shrightpanel'] = '右パネルの表示／非表示';
$string['similarity'] = '類似度';
$string['similarto'] = '似ている';
$string['startdate'] = '使用可能日時';
$string['starting'] = '';
$string['submission'] = '提出';
$string['submissionperiod'] = '提出期間';
$string['submissionrestrictions'] = '提出の制限';
$string['submissions'] = '提出物';
$string['submissionselection'] = '提出物のセレクション';
$string['submissionslist'] = '提出物リスト';
$string['submissionview'] = '提出物ビュー';
$string['submittedby'] = '提出者: {$a}';
$string['submittedon'] = '提出日時';
$string['submittedonp'] = '{$a} に提出された';
$string['sureresetfiles'] = '変更を破棄してファイルを元の状態に戻しますか?';
$string['test'] = 'テスト';
$string['testcases'] = 'テストケース';
$string['timelimited'] = '時間制限あり';
$string['timeout'] = 'タイムアウト';
$string['timespent'] = '使用時間';
$string['timespent_help'] = '保存されたバージョンに基づくこのアクティビティに費やされた時間<br>棒グラフは、時間範囲ごとの生徒数を示しています。';
$string['timeunlimited'] = '時間制限なし';
$string['totalnumberoferrors'] = 'エラー';
$string['undo'] = '取り消し';
$string['unzipping'] = '展開中...';
$string['uploadfile'] = 'ファイルのアップロード';
$string['use_xmlrpc_description'] = '設定された場合、システムはvpl-jail-serversと通信するために、JSON-RPCの代わりに古いXML-RPCプロトコルを使用します。V3.0.0より前のバージョンのvpl-jail-serversを使用している場合、このオプションを設定してください。';
$string['usevariations'] = 'バリエーションの利用';
$string['usewatermarks'] = '透かしの使用';
$string['usewatermarks_description'] = '学生のファイルに透かしを追加 (サポート済みの言語に限定)';
$string['variation_options'] = 'バリエーションオプション';
$string['variations'] = 'バリエーション';
$string['variations_help'] = '<h1>バリエーション</h1>
<p>活動には、いくつかのバリエーションを定義できる。このバリエーションは、ランダムに学生に割り当てられる。</p>
<p>活動にバリエーションがあるなら、それを示して、バリエーションに名前を指定する。</p>
<p>バリエーションには識別コードと説明がある。識別コードは、<b>vpl_environment.sh</b>ファイルによって、
それぞれの学生に割り当てられたバリエーションをスクリプトファイルに受け渡すために用いられる。
HTMLで書かれた説明は、対応するバリエーションが割り当てられた学生に提示される。</p>';
$string['variations_unused'] = 'アクティビティにはバリエーションがあるが無効化されている';
$string['variationtitle'] = 'バリエーションタイトル';
$string['varidentification'] = '識別コード';
$string['visiblegrade'] = '可視性';
$string['vpl'] = 'Virtual Programming Lab';
$string['vpl:addinstance'] = '新しいVPLインスタンスを追加';
$string['vpl:grade'] = 'VPL課題の採点';
$string['vpl:manage'] = 'VPL課題の管理';
$string['vpl:setjails'] = '特定のVPLインスタンスにjailサーバを割り当てる';
$string['vpl:similarity'] = 'VPL課題の類似度の検索';
$string['vpl:submit'] = 'VPL課題の提出';
$string['vpl:view'] = 'VPL課題の完全な説明の閲覧';
$string['vpl_debug.sh'] = 'このスクリプトは提出されたプログラムをデバッグのために準備します';
$string['vpl_evaluate.cases'] = '提出されたプログラムを評価するための実行時ケースをここに記述します';
$string['vpl_evaluate.sh'] = 'このスクリプトは提出されたプログラムを評価します';
$string['vpl_run.sh'] = 'このスクリプトは提出されたプログラムを実行のために準備します';
$string['websocket_protocol'] = 'Websocketプロトコル';
$string['websocket_protocol_description'] = 'ブラウザが実行サーバに接続するために使用するWebsocketプロトコル(ws:// もしくは wss://)の種類。';
$string['workingperiods'] = '作業時間';
$string['worktype'] = '作業の種類';
