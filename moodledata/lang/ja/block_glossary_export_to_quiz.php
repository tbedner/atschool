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
 * Strings for component 'block_glossary_export_to_quiz', language 'ja', version '4.4'.
 *
 * @package     block_glossary_export_to_quiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allentries'] = 'すべてのエントリ';
$string['clicktoexport'] = 'この用語集のエントリを小テストにエクスポートするにはクリックしてください (XML)。';
$string['concept'] = 'アルファベット順';
$string['ddwtosinstructions'] = 'それぞれの用語ラベルを定義に合うようにドラッグする';
$string['emptyglossaries'] = 'このコース用語集は空 (エントリなし) です。';
$string['emptyglossary'] = 'このコース用語集は空 (エントリなし) です。';
$string['exportentriestoxml'] = 'エントリを小テストにエクスポートする (XML)';
$string['exportmediafiles'] = '画像およびオーディオ/ビデオファイルをエクスポートしますか?';
$string['exportmediafiles_help'] = 'この用語集の定義に挿入された画像/音声/ビデオをエクスポートしますか?
いくつかの質問タイプはいくつかのメディア要素とは互換性がありません。';
$string['extrawronganswer'] = '誤答を1つ追加しますか?';
$string['extrawronganswer_help'] = 'あなたのそれぞれの問題に誤答/不正解の選択肢を追加しますか?';
$string['firstmodified'] = '古いエントリを最初に';
$string['gapfillddinstructions'] = 'それぞれのドロップダウンリストから定義に合致する用語を選択してください。';
$string['generalhelp'] = 'ブロックヘルプ';
$string['glossary_export_to_quiz:addinstance'] = '新しいglossary_export_to_quizブロックを追加する';
$string['glossary_export_to_quiz:myaddinstance'] = 'マイMoodleページに新しいglossary_export_to_quizブロックを追加する';
$string['lastmodified'] = '最新エントリを最初に';
$string['limitnum'] = 'エクスポートするエントリの最大数';
$string['limitnum_help'] = '選択した用語集またはカテゴリからすべてのエントリをエクスポートするにはこのフィールドをデフォルトの「0」のままにしてください。
このオプションは非常に大きな用語集から限られた数のエントリをエクスポートする際に有用です。';
$string['maskconceptindefinitions'] = '定義テキスト内の用語をマスクしますか?';
$string['maskconceptindefinitions_help'] = '定義テキスト内に用語が出現する場合、(3つのアスタリスクで) マスキングしますか?';
$string['matchinstructions'] = '定義と用語を合致させる';
$string['nbchoices'] = '選択肢数';
$string['nbchoices_help'] = 'いくつの選択肢/解答を利用できるようにするかを選択ください。';
$string['noglossaries'] = 'このコースに用語集はありません。';
$string['notenoughentriesavailable'] = 'この問題タイプで使用できるエントリ ({$a->numentries}) が不足しています (最低 {$a->nbchoices} エントリが必要です)。';
$string['notenoughentriesselected'] = 'この問題タイプで選択されたエントリ ({$a->numentries}) が十分ではありません (最低 {$a->nbchoices} エントリが必要です)。';
$string['notyetconfigured'] = 'このブロックを設定するには「編集モードの開始」をクリックしてください。';
$string['notyetconfiguredediting'] = 'このブロックを設定するには操作アイコンをクリックしてください。';
$string['numentries'] = '{$a} エントリをエクスポートする';
$string['numquestions'] = '&nbsp; -> {$a} 問題を作成する';
$string['pluginname'] = '用語集を小テストにエクスポートする';
$string['pluginname_help'] = 'MoodleドキュメンテーションWikiを閲覧するには「詳細情報」を右クリックしてください。';
$string['pluginname_link'] = 'block/glossary_export_to_quiz/edit';
$string['privacy:metadata'] = '「用語集を小テストにエクスポートする」ブロックはいかなる個人データも保存しません。';
$string['questiontype_help'] = 'あなたが用語集のエントリをエクスポートしたい問題タイプを選択してください。';
$string['random'] = 'ランダム';
$string['selectglossary'] = 'エクスポート元の用語集を選択する';
$string['selectglossary_help'] = 'あなたがエントリを小テスト問題バンクにエクスポートしたい用語集を選択するにはドロップダウンリストを使用してください。
その用語集にカテゴリが含まれている場合、あなたはエントリをエクスポートするカテゴリを1つのみ選択できます。
あなたの選択をキャンセルまたはブロックをリセットするにはドロップダウンリストを「選択 ...」ポジションに戻してください。';
$string['shuffleanswers'] = '答えをシャッフルする';
$string['shuffleanswers_help'] = 'この設定を有効にした場合、受験ごとに選択肢/答えの順番がランダムにシャッフルさ れます。';
$string['sortingorder'] = '並べ替え順';
$string['sortingorder_help'] = 'この設定はエクスポートされた用語集エントリをあなたの問題データバンクへのインポート時にどのように並べ替えるか決定するために使用します。
これはエントリの最大数と組み合わせて、あなたの用語集の最新エントリ (特にかなり大きなエントリ) をテストするための小テスト作成に使用できます。';
