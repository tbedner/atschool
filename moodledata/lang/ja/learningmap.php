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
 * Strings for component 'learningmap', language 'ja', version '4.4'.
 *
 * @package     learningmap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsettings'] = '高度な設定';
$string['allowedfilters'] = 'mod_learningmapで使用可能なフィルタ';
$string['allowedfilters_desc'] = '接頭辞「filter_」を除いたカンマ区切りのリストです。';
$string['backgroundfile'] = '背景イメージ';
$string['backgroundfile_help'] = 'このファイルはマップの背景として使用されます。';
$string['backlink'] = '「 {$a->name} 」へ';
$string['backlinkallowed'] = '自動バックリンクを許可する';
$string['backlinkallowed_desc'] = 'この設定が有効にされた場合、ユーザは学習マップで使用されている活動モジュールページから学習マップへのバックリンクを自動的に設定するよう選択できます。';
$string['cachedef_backlinks'] = 'このキャッシュはコースモジュールページに表示する学習マップへのバックリンクがあるかどうかに関する情報を保存します。';
$string['completion_with_all_places'] = '完了するにはすべての地点に到達する必要がある';
$string['completion_with_all_targets'] = '完了するにはすべてのターゲット地点に到達する必要がある';
$string['completion_with_one_target'] = '完了するには1箇所のターゲット地点に到達する必要がある';
$string['completiondetail:all_places'] = 'すべての地点に到達する';
$string['completiondetail:all_targets'] = 'すべてのターゲット地点に到達する';
$string['completiondetail:one_target'] = '1箇所のターゲット地点に到達する';
$string['completiondisabled'] = 'コース設定で完了トラッキングが無効にされています。完了トラッキングが無効の場合、このプラグインは動作しません。';
$string['completiontype'] = '完了タイプ';
$string['editorhelp'] = 'エディタの使い方';
$string['editplace'] = '地点を編集する';
$string['fill_backlink_cache_task'] = '学習マップのバックリンクキャッシュを埋める';
$string['freetype_required'] = 'mod_learningmapを実行するにはGDのFreeType拡張モジュールが必要です。';
$string['groupmode'] = 'グループモード';
$string['groupmode_help'] = 'グループモードが有効にされた場合、グループメンバの1人が活動を完了することで接続された地点を利用できるようになります。';
$string['hiddenactivitywarning'] = 'この活動は秘匿されているため、学生はアクセスできません。';
$string['hidepaths'] = '経路を秘匿する';
$string['hidepaths_help'] = 'このオプションでは活動間の依存関係を構築する機能は維持したままで学生ビューの経路を秘匿します。';
$string['hidestroke'] = '地点の経路線を秘匿する';
$string['hidestroke_help'] = 'このオプションでは地点の経路線を秘匿します。';
$string['hover'] = '地点のホバーアニメーション';
$string['hover_help'] = 'このオプションではカーソルが置かれた地点にアニメーションを追加します。';
$string['intro'] = '学習マップ';
$string['intro_help'] = '<ul><li><b>新しい地点を追加する:</b> 背景をダブルクリックしてください。</li>
<li><b>経路を追加する:</b> 2つの地点をシングルクリックしてください。</li>
<li><b>地点/経路を削除する:</b> 地点/経路をダブルクリックしてください。</li>
<li><b>地点のプロパティを変更する:</b> 地点で右クリックしてください。</li></ul>';
$string['learningmap'] = '学習マップ';
$string['learningmap:addinstance'] = '新しい学習マップを追加する';
$string['learningmap:view'] = '学習マップを表示する';
$string['loading'] = '学習マップ読み込み中 ...';
$string['modulename'] = '学習マップ';
$string['modulename_help'] = '学習マップモジュールではコースの活動をマップ上の地点として経路で接続できます。一部の地点はスタート地点であり最初から表示されます。他の地点および経路は接続された地点の活動が完了した時点で表示されます。';
$string['modulenameplural'] = '学習マップ';
$string['name'] = '学習マップ名';
$string['name_help'] = '「コースページにマップを表示する」が有効にされていない場合のみ、学習マップ名前が表示されます。';
$string['nocompletion'] = 'マップアイテムで完了しない';
$string['nocompletionenabled'] = '完了が有効にされていないため、利用できません。';
$string['ownprogress'] = '私自身の進捗';
$string['paths'] = '経路';
$string['places'] = '地点';
$string['pluginadministration'] = '学習マップ管理';
$string['pluginname'] = '学習マップ';
$string['privacy:metadata'] = '&nbsp;';
$string['pulse'] = '未訪問地点のパルスアニメーション';
$string['pulse_help'] = 'このオプションでは未訪問地点を強調するアニメーションを追加します。';
$string['showall'] = 'すべての経路および地点を表示する';
$string['showall_help'] = 'このオプションではマップのすべての経路および地点を最初から表示します。まだ到達可能でない地点および経路は薄暗く表示されます。';
$string['showbacklink'] = 'コースモジュールページにバックリンクを表示する';
$string['showbacklink_help'] = 'このオプションではマップに属するすべてのコースモジュールページに「学習マップに戻る」リンクを表示します。';
$string['showmaponcoursepage'] = 'コースページにマップを表示する';
$string['showmaponcoursepage_help'] = 'この設定を有効にした場合、学習マップがコースページに表示されます (ラベルのように)。そうでない場合、リンクが表示され、マップは別ページに表示されます。';
$string['showtext'] = '活動名を表示する';
$string['showtext_help'] = 'このオプションは活動名を地点以外にテキストで表示します。テキストはドラッグできます。活動名が変更された場合、テキストは自動的に更新されます。';
$string['showwaygone'] = '経路を強調表示する';
$string['showwaygone_help'] = 'このオプションでは参加者がマップで通過した経路 (完了時間順) を強調表示します。';
$string['slicemode'] = 'マップ上に地点を公開する';
$string['slicemode_help'] = 'このオプションでは新しい地点に到達できるようになった場合、マップを公開します。マップの隠された部分は霧で覆われます。すべての場所に到達できるようになった場合、霧は完全に晴れます。';
$string['startingplace'] = '開始地点';
$string['svgcode'] = 'SVGコード';
$string['targetplace'] = 'ターゲット地点';
$string['usecasehelp'] = '学習マップの使い方';
$string['usecaselink'] = '学習マップの使い方を説明するページへのリンク';
$string['usecheckmark'] = '訪問済み地点のチェックマーク';
$string['usecheckmark_help'] = 'このオプションでは訪問した地点にさらにチェックマークを表示します。';
$string['visited'] = '訪問済み';
