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
 * Strings for component 'tool_advancedreplace', language 'ja', version '4.4'.
 *
 * @package     tool_advancedreplace
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirm_delete'] = '本当に検索を削除してもよろしいですか? これは出力も削除します。';
$string['copyoptions'] = '検索オプションをコピーする';
$string['errorcolumntypenotsupported'] = 'カラムタイプがサポートされていません。';
$string['errorfilenotfound'] = 'ファイルが見つかりませんでした。';
$string['errorinvalidfile'] = 'ファイルが有効ではありません。';
$string['errorinvalidparam'] = '無効なパラメータです。';
$string['errormissingfields'] = '次のフィールドがありません: {$a}';
$string['errorregexnotsupported'] = 'このデータベースでは正規表現検索はサポートされていません。';
$string['errorreplacingcontentzip'] = 'ZIPからファイルコンテンツを読み込めませんでした。';
$string['errorreplacingfile'] = '新しいファイルは作成されませんでした。';
$string['errorreplacingfilenotfound'] = 'ファイルが見つかりませんでした。';
$string['errorreplacingfilenotfoundzip'] = 'ZIP内にファイルが見つかりませんでした。';
$string['errorreplacingopenzip'] = 'ZIPファイルを開けませんでした。';
$string['errorreplacingstring'] = '検索文字列がレコードに見つかりませんでした。';
$string['errorreplacingstringnorecord'] = 'レコードがデータベースに存在しません。';
$string['errorsearchmethod'] = '次の検索方法のいずれかを選択してください: プレインテキストまたは正規表現';
$string['eta'] = 'ETA: {$a}';
$string['excludedtables'] = '置換をサポートしていない一部のテーブルは検索されません。これには次のテーブルが含まれます: configuration, log, events, session';
$string['field_actions'] = '操作';
$string['field_column'] = 'カラム';
$string['field_component'] = 'コンポーネント';
$string['field_components'] = 'コンポーネント';
$string['field_components_help'] = '検索対象をこれらのコンポーネントに制限します。カンマで区切ってください。例) core_h5p,mod_hvp,mod_assign';
$string['field_duration'] = '所要時間';
$string['field_error'] = 'エラー';
$string['field_filearea'] = 'ファイルエリア';
$string['field_filename'] = 'ファイル名';
$string['field_filenames'] = 'ファイル名';
$string['field_filenames_help'] = '検索対象をこれらのファイル名に制限します。ファイル名はカンマで区切ってください。例) chapter1.html,chapter2.html';
$string['field_id'] = 'ID';
$string['field_matches'] = '該当件数';
$string['field_mimetypes'] = 'MIMEタイプ';
$string['field_mimetypes_help'] = '検索対象をこれらのMIMEタイプに制限します。MIMEタイプはカンマで区切ってください。例) application/zip.h5p,application/json';
$string['field_name'] = '名称';
$string['field_name_help'] = '検索を識別するための任意の名称です。ファイル名としても使用されます。';
$string['field_openzips'] = 'ZIPを開く';
$string['field_openzips_help'] = 'ZIPファイルを開いて、その中のサブファイルを検索します。';
$string['field_options'] = 'オプション';
$string['field_output'] = '出力';
$string['field_pattern'] = '正規表現';
$string['field_pattern_help'] = 'ファイル内でマッチさせる正規表現です。';
$string['field_prematch'] = 'プレマッチフィルタ';
$string['field_prematch_help'] = '正規表現の前にプレマッチ検索するための任意のフィルタです。これは検索を高速化するのに役立ちますが、パフォーマンスはDBエンジン、正規表現の複雑さおよびテーブルインデックスに依存します。';
$string['field_progress'] = '進捗状況';
$string['field_regex'] = '正規表現を使用する';
$string['field_row'] = '行番号';
$string['field_search'] = '検索';
$string['field_shards'] = 'シャード';
$string['field_shards_help'] = 'ファイル検索をいくつかのシャードに分割することで処理を高速化できる可能性があります。それぞれのシャードは別々のアドホックタスクとして実行されます。あなたがメモリを増設しない限り、一般的にこの値は「1」のままをお勧めします。';
$string['field_skipareas'] = 'エリアをスキップする';
$string['field_skipareas_help'] = 'これらのファイルエリアを検索から除外します。エリアはカンマで区切ってください。例) legacy,submission_files';
$string['field_skipcolumns'] = 'カラムをスキップする';
$string['field_skipcolumns_help'] = 'スキップするカラムです。複数カラムはカンマで区切ってください。';
$string['field_skipcomponents'] = 'コンポーネントをスキップする';
$string['field_skipcomponents_help'] = 'これらのコンポーネントを検索から除外します。コンポーネントをカンマで区切ってください。例) backup,calendar,mod_zoom';
$string['field_skipfilenames'] = 'ファイル名をスキップする';
$string['field_skipfilenames_help'] = 'これらのファイル名を検索から除外します。ファイル名をカンマで区切ってください。例) quotes.html,welcome.html';
$string['field_skipmimetypes'] = 'MIMEタイプをスキップする';
$string['field_skipmimetypes_help'] = 'これらのMIMEタイプを検索から除外します。MIMEタイプをカンマで区切ってください。例) image/jpeg,image/png';
$string['field_skiptables'] = 'テーブルをスキップする';
$string['field_skiptables_help'] = 'スキップするテーブルです。複数カラムはカンマで区切ってください。';
$string['field_skipzipfilenames'] = 'ZIPファイル名をスキップする';
$string['field_skipzipfilenames_help'] = 'ZIP内のサブファイルを拒否するための正規表現です。';
$string['field_summary'] = '概要モード';
$string['field_summary_help'] = '概要モードではテキストが見つかったカラム/テーブルのみ出力します。';
$string['field_table'] = 'テーブル';
$string['field_tables'] = 'テーブル';
$string['field_tables_help'] = '検索するテーブルおよびカラムです。複数テーブル/カラムはカンマで区切ってください。指定されない場合、すべてのテーブルおよびカラムが検索されます。フォーマット例: <code>user,assign_submission:submission</code>';
$string['field_timeend'] = '終了';
$string['field_timestart'] = '開始';
$string['field_userid'] = 'ユーザ';
$string['field_zipfilenames'] = 'ZIPファイル名';
$string['field_zipfilenames_help'] = 'ZIP内のサブファイルをマッチさせるための正規表現です。';
$string['filespageheader'] = 'Moodleファイル内のテキストを検索する';
$string['filespagename'] = 'ファイル内を検索する';
$string['lastupdated'] = '最終更新 {$a} 前';
$string['newreplace'] = '新しい置換';
$string['newsearch'] = '新しい検索';
$string['pluginname'] = '高度な検索および置換';
$string['privacy:metadata:tool_advancedreplace_files'] = '高度なファイル検索';
$string['privacy:metadata:tool_advancedreplace_files:userid'] = 'ファイル検索を作成したユーザです。';
$string['privacy:metadata:tool_advancedreplace_files:usermodified'] = 'ファイル検索を修正したユーザです。';
$string['privacy:metadata:tool_advancedreplace_search'] = '高度なDB検索です。';
$string['privacy:metadata:tool_advancedreplace_search:userid'] = 'DB検索を作成したユーザです。';
$string['privacy:metadata:tool_advancedreplace_search:usermodified'] = 'DB検索を修正したユーザです。';
$string['replace'] = '置換';
$string['replace_warning'] = 'UI経由の置換は有効にされていません。有効にするにはconfig.phpで次を設定してください: <code>{$a}</code>';
$string['replacecheckdb'] = '本当にアップロードされたCSVファイルでデータベース内の文字列を置換してもよろしいですか?';
$string['replacecheckfiles'] = '本当にアップロードされたCSVファイルでファイル内の文字列を置換してもよろしいですか?';
$string['replacefilespageheader'] = 'ファイルに保存されたテキストを置換する';
$string['replacefilespagename'] = 'ファイル内の文字列を置換する';
$string['replacepageheader'] = 'DBに保存されたテキストを置換する';
$string['replacepagename'] = 'データベース内の文字列を置換する';
$string['searchcopy'] = '検索オプションが以前の検索からコピーされています。これは新しい検索として扱われます。';
$string['searchdeleted'] = '選択された検索は削除されました。';
$string['searchpageheader'] = 'DBに保存されたテキストを検索する';
$string['searchpagename'] = 'データベース内を検索する';
$string['searchqueued'] = 'あなたの検索はアドホックタスクとしてキューに入れられました。';
$string['selectfile'] = 'ファイルを選択する';
$string['settings:excludetables'] = '除外するテーブル';
$string['settings:excludetables_help'] = '常に検索から除外されるテーブルのカスタムリストです。それぞれのテーブルは新しい行に記述してください。';
$string['settings:includetables'] = '含めるテーブル';
$string['settings:includetables_help'] = 'これを設定した場合、すべての検索は指定されたテーブルおよび検索オプションで定義されたテーブルのみに制限されます。そそれぞれのテーブルは新しい行に記述してください。次のようなフォーマットでカラムを含めることもできます: <code>tablename:columnname</code>';
$string['settings:logduration'] = '検索ロギング';
$string['settings:logduration_help'] = '指定された時間より時間を要するマッチしないカラムのログ情報を表示します。';
$string['strftimedatetimemonthshort'] = '%Y/%m/%d %H:%M';
