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
 * Strings for component 'local_groupimport', language 'ja', version '4.4'.
 *
 * @package     local_groupimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alloweduserfields'] = '識別用に許可されるユーザフィールド';
$string['alloweduserfields_desc'] = 'CSVインポートファイルで学習者を識別するために使用できるユーザフィールドを選択してください (「username」「email」「idnumber」またはカスタムプロファイルフィールド)。';
$string['backtocourse'] = 'コースに戻る';
$string['csvloaderror'] = 'CSVファイル読み込み中にエラーが発生しました: {$a}';
$string['csvmissingcolumns'] = 'CSVに1つまたはそれ以上の必須カラムが欠けています: 「useridentifier」「groupname」 (および任意の「groupingname」)。';
$string['defaultuserfield'] = 'デフォルトユーザ識別フィールド';
$string['defaultuserfield_desc'] = 'このフィールドはインポートフォームで事前選択されます。上で定義された許可済みフィールドのいずれかにする必要があります。';
$string['downloadtemplate'] = 'CSVテンプレートをダウンロードする';
$string['errorheader'] = 'エラー行';
$string['groupimport'] = 'グループインポート (CSV)';
$string['importfile'] = 'ファイルをインポートする (CSV)';
$string['importfile_help'] = '次のカラムを含むCSVファイルをアップロードしてください: useridentifier;groupname;groupingname (groupingnameは任意)。区切り文字には「;」または「,」を使用できます。「useridentifier」カラムはインポートフォームで選択されたユーザ識別フィールド (「username」「email」「idnumber」またはカスタムプロファイルフィールド) に基づいて解釈されます。';
$string['importresults'] = 'インポート結果';
$string['importsummary'] = 'インポート概要';
$string['noresults'] = 'まだ表示する結果はありません。インポートを開始するにはCSVファイルをアップロードしてください。';
$string['pluginname'] = 'グループインポート (CSV)';
$string['privacy:metadata'] = 'ローカルグループインポートプラグインはいかなる個人データも保存しません。既存のコース登録情報のみ処理します。';
$string['submitimport'] = 'インポートを実行する';
$string['successheader'] = '処理成功行';
$string['templatename'] = 'groupimport_template.csv';
$string['tour_groupimport_coursehome_desc'] = 'コースホームページではグループインポートエントリの場所が表示されます。';
$string['tour_groupimport_coursehome_name'] = 'ヒント: 「さらに」メニューでグループインポートを探してください。';
$string['tour_groupimport_coursehome_step1_content'] = 'コース上部のナビゲーションで「さらに」メニューを開いてください。そこに「グループインポート」ツールがあります。';
$string['tour_groupimport_coursehome_step1_title'] = 'グループインポートはどこですか?';
$string['tour_groupimport_step1_content'] = 'あなたはこのページでCSVファイルからグループを作成および学生を登録できます。存在しないユーザまたはコース未登録のユーザは追加されません。エラーが発生してもインポートは続行されます。';
$string['tour_groupimport_step1_title'] = 'CSVからグループをインポートする';
$string['tour_groupimport_step2_content'] = '最初にテンプレートをダウンロードして必要なカラム  (「username」「email」「idnumber」またはカスタムプロファイルフィールド)  が正しく設定されていることを確認してください。';
$string['tour_groupimport_step2_title'] = 'CSVテンプレートをダウンロードする';
$string['tour_groupimport_step3_content'] = '次にあなたのCSVファイルを選択してください。区切り文字として「;」および「,」の両方がサポートされます。';
$string['tour_groupimport_step3_title'] = 'あなたのCSVファイルをアップロードする';
$string['tour_groupimport_step4_content'] = 'ユーザを識別する方法を選択してください  (「username」「email」「idnumber」またはカスタムプロファイルフィールド) 。';
$string['tour_groupimport_step4_title'] = '識別フィールドを選択する';
$string['tour_groupimport_step5_content'] = 'インポートを開始するにはボタンをクリックしてください。登録成功およびエラーはレポートに一覧表示されます。';
$string['tour_groupimport_step5_title'] = 'インポートを開始する';
$string['tour_groupimport_step6_content'] = 'レポートには完了した登録およびエラー (ユーザが見つからない、コースに登録されていない、既にグループのメンバである等) が詳細に記載されます。';
$string['tour_groupimport_step6_title'] = 'レポートをレビューする';
$string['tour_groupimport_teacher_desc'] = 'CSVファイルからの（ユーザ存在確認およびコース登録チェック付き) グループおよび登録インポートのガイド付きツアーです。';
$string['tour_groupimport_teacher_name'] = 'ガイド: グループインポート (教師)';
$string['userfield'] = 'ユーザ識別フィールド';
$string['userfield_help'] = 'このオプションではCSVファイルの「useridentifier」カラムをどのように解釈するか指定します。例えばユーザ名、メールアドレス、IDナンバまたはカスタムプロファイルフィールドの値として解釈します。';
