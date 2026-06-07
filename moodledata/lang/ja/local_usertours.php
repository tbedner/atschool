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
 * Strings for component 'local_usertours', language 'ja', version '4.4'.
 *
 * @package     local_usertours
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = '動作設定';
$string['appliesto'] = '適用パス';
$string['backdrop'] = '「バックドロップ」表示する';
$string['backdrop_help'] = '「バックドロップ」表示を使うと、強調したい範囲外が黒く塗りつぶされた形で、より説明を際立たせる事が出来ます。

注：バックドロップは、ナビゲーションバーなどのページの一部と互換性がありません。';
$string['block'] = 'ブロック';
$string['block_named'] = 'ブロック名： \'{$a}';
$string['bottom'] = '下部';
$string['confirmstepremovalquestion'] = '本当にこのステップを削除してもいいですか？';
$string['confirmstepremovaltitle'] = 'ステップ削除確認';
$string['confirmtourremovalquestion'] = '本当にこのツアーを削除してもいいですか？';
$string['confirmtourremovaltitle'] = 'ツアー削除確認';
$string['content'] = 'コンテンツ(説明文)';
$string['cssselector'] = 'CSS セレクター';
$string['defaultvalue'] = '規定値 ({$a})';
$string['delay'] = 'ステップを見せる前に少し遅延させる';
$string['delay_help'] = 'オプションで「ステップを見せる前に少し遅延させる」を選択できます

この遅延はほんの数ミリ秒です';
$string['description'] = '説明';
$string['done'] = '実行';
$string['editstep'] = '編集中 "{$a}"';
$string['enabled'] = '有効にする';
$string['endtour'] = 'ツアー終了';
$string['exporttour'] = 'ツアーをエクスポートする';
$string['importtour'] = 'ツアーをインポートする';
$string['left'] = '左側';
$string['movestepdown'] = 'ステップを後ろへ動かす';
$string['movestepup'] = 'ステップを前へ動かす';
$string['movetourdown'] = 'ツアーを下へ動かす';
$string['movetourup'] = 'ツアーを上へ動かす';
$string['name'] = '名前';
$string['newstep'] = '新しいステップを追加';
$string['newtour'] = '新しいツアーを追加';
$string['next'] = '次へ';
$string['orphan'] = 'ターゲットが見つからなくても表示する';
$string['orphan_help'] = 'ターゲットがページ内に見つからなくてもステップを表示する';
$string['pathmatch'] = '次のURLにマッチした場合に実行する';
$string['pathmatch_help'] = 'ツアーは指定されたURLにマッチした場合に実行されます

" ％ " はワイルドカードとしてどんな値も許可します

例としては下記の様に記載します
* /my/% - ダッシュボードでツアーが動作します
* /course/view.php?id=2 - 該当するコースIDで動作します
* /mod/forum/view.php% - フォーラムディスカッションで動作します
* /user/profile.php% - ユーザープロファイルページで動作します';
$string['pausetour'] = '一時停止';
$string['placement'] = '表示位置';
$string['placement_help'] = 'ステップの表示位置を「上部・下部・左側・右側」から選択します

おススメは上部か下部で、モバイルに最適に表示します';
$string['pluginname'] = 'ユーザーツアー';
$string['reflex'] = 'クリックで次へ';
$string['reflex_help'] = '次へボタンを押さなくても、ターゲットをクリックする事で次のステップを実行します';
$string['resettouronpage'] = '【このページの操作説明をもう一回見る】';
$string['resumetour'] = '続ける';
$string['right'] = '右側';
$string['select_block'] = 'ブロックを選択する';
$string['select_targettype'] = 'すべてのステップは、下記３タイプの中から選択する必要があります

<dl>
    <dt>ブロック</dt>
    <dd>選択したブロックで一番最初にマッチしたものに表示します</dd>
    <dt>CSS セレクター</dt>
    <dd>CSS セレクターを使用すると、ページに組み込まれたメタデータに基づき、ページの異なる部分を選択することを可能にする柔軟な設定が出来ます。</dd>
    <dt>ページ中央に表示</dt>
    <dd>ページ中央に説明を表示します</dd>
</dl>';
$string['selector_defaulttitle'] = '分かりやすいタイトルを入力してください';
$string['selectordisplayname'] = 'CSS セレクター \'{$a}';
$string['selecttype'] = 'ステップの種類';
$string['sharedtourslink'] = 'ツアーリポジトリ';
$string['skip'] = 'スキップ';
$string['target'] = 'ターゲット';
$string['target_block'] = 'ブロック';
$string['target_selector'] = 'セレクター';
$string['target_selector_targetvalue'] = 'CSS セレクター';
$string['target_unattached'] = 'ページ中央に表示';
$string['targettype'] = 'ターゲットタイプ';
$string['title'] = 'タイトル';
$string['top'] = '上部';
$string['tourconfig'] = 'ツアー設定ファイルのインポート';
$string['tours'] = 'ツアー';
$string['usertours'] = 'ユーザーツアー';
