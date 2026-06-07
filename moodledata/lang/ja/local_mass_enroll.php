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
 * Strings for component 'local_mass_enroll', language 'ja', version '4.4'.
 *
 * @package     local_mass_enroll
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedunenrolmentmethods'] = '許可された追加の登録解除';
$string['coursepage'] = 'コースページ';
$string['creategroupings'] = '必要であればグルーピングを作成する';
$string['creategroups'] = '必要であればグループを作成する';
$string['defaultrole'] = 'デフォルトで割り当てるロール';
$string['email_sent'] = '{$a} にメールが送信されました。';
$string['enableextraunenrolmentplugins'] = '追加の登録解除プラグインを許可する？';
$string['enablemassenrol'] = '参加者メニューでの大量登録を許可する？';
$string['enablemassenrol_help'] = 'コース管理ツリーでの大量登録の拡張を許可する場合、このオプションをチェックしてください。';
$string['enablemassunenrol'] = '参加者メニューでの大量登録解除を許可する？';
$string['enablemassunenrol_help'] = 'コース管理ツリーでの大量登録解除の拡張を許可する場合、このオプションをチェックしてください。';
$string['enroll'] = '私のコースに登録する';
$string['error'] = 'エラー';
$string['firstcolumn'] = '最初のカラムに含むもの';
$string['identifier'] = 'ユーザ識別子';
$string['idnumber'] = 'IDナンバー';
$string['im:already_in'] = '{$a} すでに登録されています。';
$string['im:already_in_g'] = 'すでにグループ {$a->group} に登録されています。';
$string['im:and_added_g'] = '同時にMoodleのグループ {$a->group} に登録しました。';
$string['im:enrolled_ok'] = '{$a} を登録しました。';
$string['im:err_opening_file'] = 'ファイル {$a} のオープン中にエラーが発生しました。';
$string['im:error_add_g_grp'] = 'グルーピング {$a->grouping} へのグループ {$a->groupe} 追加中にエラーが発生しました。';
$string['im:error_add_grp'] = 'コース {$a->courseid} へのグルーピング {$a->grouping} 追加中にエラーが発生しました。';
$string['im:error_addg'] = 'コース {$a->courseid} へのグループ {$a->group} 追加中にエラーが発生しました。';
$string['im:error_adding_u_g'] = 'グループ {$a} への追加中にエラーが発生しました。';
$string['im:error_g_unknown'] = '存在しないグループ {$a} が指定されたエラー';
$string['im:error_in'] = '{$a} の登録中にエラーが発生しました。';
$string['im:error_out'] = '{$a} の登録解除中にエラーが発生しました。';
$string['im:nonassignablerole'] = 'このコンテクストではロール {$a} は割り当てられません';
$string['im:not_in'] = '{$a} 未登録';
$string['im:opening_file'] = 'ファイルを開く: {$a}';
$string['im:roleassigned'] = 'ロール {$a} が割り当てられました';
$string['im:roleunassigned'] = 'ロール {$a} が解除されました';
$string['im:stats_g'] = '{$a->nb} グループが作成されました : {$a->what}';
$string['im:stats_grp'] = '{$a->nb} グルーピングが作成されました : {$a->what}';
$string['im:stats_i'] = '{$a} 登録';
$string['im:stats_ui'] = '{$a} 登録解除';
$string['im:unenrolled_ok'] = '{$a} 登録解除';
$string['im:user_unknown'] = '{$a} 不明 - 行をスキップします。';
$string['im:using_role'] = '次のロールとしてユーザを登録する:  {$a}';
$string['info'] = '情報';
$string['localmassenrolldefaults'] = '大量登録デフォルト設定';
$string['localmassenrollextensions'] = 'メニュー拡張設定';
$string['mail_enrolment'] = 'こんにちは。
あなたはコース「 {$a->course} 」に次のユーザ一覧を登録しました。
以下、処理の報告です :
{$a->report}';
$string['mail_enrolment_subject'] = 'コース{$a->course} ( {@a->wwwroot} )へのバルク登録';
$string['mail_unenrolment'] = 'こんにちは。
あなたはコース「 {$a->course} 」から次のユーザ一覧を登録解除しました。
以下、処理の報告です :
{$a->report}';
$string['mail_unenrolment_subject'] = 'コース{$a->course} ( {@a->wwwroot} )からのバルク登録解除';
$string['mailreport'] = '私にレポートをメールする';
$string['mailreportdefault'] = 'レポートメール送信のデフォルト';
$string['mailreportdefault_help'] = 'バルク登録 (登録解除) フォームに関してレポート送信のデフォルトを設定します。';
$string['mapping:column'] = 'カラム {$a}';
$string['mass_enroll'] = 'バルク登録';
$string['mass_enroll:enrol'] = 'CSVファイルでユーザをコースに登録する';
$string['mass_enroll:unenrol'] = 'CSVファイルによりコースからユーザを登録解除する';
$string['mass_enroll_help'] = '<h1>バルク登録</h1>

<p>
あなたはこのオプションで一連の既知のユーザを1行あたり1名のユーザが記述されたファイルで登録します。
</p>
<p>
<b>重要</b> 空白行または不明なアカウントはスキップされます。</p>

<p>
ファイルには1つまたはカンマ、セミコロンまたはタブで区切られた2つのカラムを含めます。

例えばあなたが日頃使っているスプレッドシートプログラムで学生の公式一覧から作成します。必要であれば、あなたがユーザを追加したいグループのカラムを追加できます。最後にCSVファイルとしてエクスポートしてください。 (*)</p>

<p>
<b> 最初のカラムにはユニークなアカウント識別子を含んでください </b>: ターゲットユーザのIDナンバー (デフォルト)、ログイン名またはメールアドレス</b>。 (**) </p>

<p>
2番目のカラム (存在する場合) にはあなたがユーザを追加したいグループ名を含んでください。</p>

<p>
グループ名が存在しない場合、あなたのコースで同じ名称のグルーピングと共に作成されます。グルーピングにはグループが追加されます。
<br />
これはMoodleの活動がグループではなくグルーピング (グループのグループ) で制限可能である事実に基づいています。これにより、あなたの人生はさらに楽になります (これにはあなたのサイト管理者がグルーピングを有効にしている必要があります)。</p>

<p>
あなたは同じファイルに異なるターゲットグループまたはグループなしのアカウントを含めることができます。
</p>

<p>
すでにコース内にグループおよびグルーピングが存在する場合、あなたはグループやグルーピングを作成するオプションを選択解除できます。
</p>

<p>
デフォルトではユーザは学生として登録されます。しかし、あなたが管理を許可されている他のロール (教師、編集権限のない教師またはカスタムロール) を選択できます。
</p>

<p>
例えばターゲットグループを忘れた場合、またはターゲットグループをスペルミスした場合等、あなたはこの処理を損害なしに繰り返せます。
</p>


<h2>サンプルファイル</h2>

IDナンバーおよび必要に応じて作成されるグループ名 (*)
<pre>
"idnumber";"group"
" 2513110";" 4GEN"
" 2512334";" 4GEN"
" 2314149";" 4GEN"
" 2514854";" 4GEN"
" 2734431";" 4GEN"
" 2514934";" 4GEN"
" 2631955";" 4GEN"
" 2512459";" 4GEN"
" 2510841";" 4GEN"
</pre>

IDナンバーのみ (**)
<pre>
idnumber
2513110
2512334
2314149
2514854
2734431
2514934
2631955
</pre>

メールアドレスのみ (**)
<pre>
email
toto@insa-lyon.fr
titi@]insa-lyon.fr
tutu@insa-lyon.fr
</pre>

タブで区切られたユーザ名およびグループ:
<pre>
username group
ppollet groupe_de_test will be in that group
codet groupe_de_test also him
astorck autre_groupe will be in another group
yjayet no group for this one
empty line skipped
unknown unknown account skipped
</pre>

<p>
<span <font color=\'red\'>(*) </font></span>: スプレッドシートプログラムで追加された二重引用符およびスペースは取り除かれます。
</p>

<p>
<span <font color=\'red\'>(**) </font></span>: ターゲットアカウントはMoodle内に存在する必要があります。Moodleが外部ディレクトリ (LDAP...) と同期する場合、これは一般的です。
</p>';
$string['mass_enroll_info'] = '<p>
あなたはこのオプションで一連の既知のユーザを1行あたり1名のユーザが記述されたファイルで登録します。
</p>
<p>
<b>重要</b> 空白行または不明なアカウントはスキップされます。</p>
<p>
ファイルには1つまたはカンマ、セミコロンまたはタブで区切られた2つのカラムを含めます。
<br />
<b>最初のカラムにはユニークなアカウントIDを含んでください </b>: IDナンバー (デフォルト)、ログイン名またはターゲットユーザのメールアドレス</b>。<br />

2番目のカラム (存在する場合) にはあなたがユーザを追加したいグループ名を含んでください。<br />

例えばグループにユーザを忘れた場合等、あなたはこの処理を損害なしに繰り返せます。
</p>';
$string['mass_unenroll'] = 'バルク登録解除';
$string['mass_unenroll_help'] = '<h1>バルク登録解除</h1>

<p>
あなたはこのオプションで一連の既知のユーザを1行あたり1名のユーザが記述されたファイルで登録解除します。
</p>
<p>
<b>重要</b> 空白行または不明なアカウントはスキップされます。</p>

<p>
ファイルには1つまたはカンマ、セミコロンまたはタブで区切られた数個のカラムを含めます。

例えばコースからCSVファイルにエクスポートされたコース評定表、またはユーザの大量登録時に使用したファイルと同じようなファイルを使用して登録解除を準備してください。 (*)</p>

<p>
<b> 最初のカラムにはユニークなアカウントIDを含んでください </b>: IDナンバー (デフォルト)、ログイン名またはターゲットユーザのメールアドレス。 (**) </p>

<p>
他のすべてのカラムは無視されます。 </p>

<p>
デフォルトではユーザは学生として登録されます。しかし、あなたが管理を許可されている他のロール (教師、編集権限のない教師またはカスタムロール) を選択できます。
</p>

<p>
例えば登録解除するユーザを忘れた場合等、あなたはこの処理を損害なしに繰り返せます。
</p>

<p>
<span <font color=\'red\'>(*) </font></span>: スプレッドシートプログラムで追加された二重引用符およびスペースは取り除かれます。
</p>

<p>
<span <font color=\'red\'>(**) </font></span>: ターゲットアカウントはMoodleに存在する必要があります。また、このコースに登録されている必要があります。
</p>';
$string['mass_unenroll_info'] = '<p>
あなたはこのオプションで一連の既知のユーザを1行あたり1名のユーザが記述されたファイルで登録解除します。
</p>
<p>
<b>重要</b> 空白行または不明なアカウントはスキップされます。
</p>
<p>
ファイルには1つまたはカンマ、セミコロンまたはタブで区切られた数個のカラムを含めます。
<br　/>
<b> 最初のカラムにはユニークなアカウントIDを含んでください </b>: IDナンバー (デフォルト)、ログイン名またはターゲットユーザのメールアドレス。<br　/>

存在する場合、他のカラムは無視されます。そのため、ファイルはコースへのユーザ大量登録時に使用したものと同じものを使用できます。<br　/>

例えば登録解除するユーザを忘れた場合等、あなたはこの処理を損害なしに繰り返せます。
</p>';
$string['massenrollsettings'] = '大量登録設定';
$string['massenrolunenrolredirect'] = 'リダイレクト先';
$string['massenrolunenrolredirect_help'] = '大量登録（解除）フォームでキャンセルした時のリダイレクト先のページを設定する';
$string['other'] = 'その他の設定';
$string['participantpage'] = 'コース参加者ページ';
$string['pluginname'] = '大量登録';
$string['privacy:metadata'] = '大量登録ローカルプラグインは個人情報を保持しません';
$string['process:massenrol:success'] = '大量登録成功';
$string['process:massunenrol:success'] = '大量登録解除成功';
$string['roleassign'] = '割り当てるロール';
$string['unenroll'] = '私のコースから登録解除する';
$string['updateroles'] = 'ロールを更新する？';
$string['userfullname'] = 'ユーザのフルネーム';
$string['username'] = 'ログイン名';
