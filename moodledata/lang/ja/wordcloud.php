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
 * Strings for component 'wordcloud', language 'ja', version '4.4'.
 *
 * @package     wordcloud
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityclose'] = '期限';
$string['activityclose_help'] = '有効にした場合、学生はこの日付以降に単語を投稿することができなくなります。無効の場合、いつでも提出が可能です。';
$string['activityopen'] = '投稿可能者';
$string['activityopen_help'] = '有効になっている場合、学生はこの日付より前に単語を提出することはできません。無効の場合、すぐに提出することができます。';
$string['appearance'] = 'アピアランス';
$string['close'] = 'クローズ';
$string['closebeforeopen'] = 'ワードクラウドを更新できませんでした。開始日時より前に終了日時を指定しています。';
$string['cloud'] = 'ワードクラウド';
$string['color_custom'] = 'カスタム';
$string['count'] = 'カウント';
$string['editentry'] = 'ワードを編集';
$string['errormonocolorhex'] = '色の値は16進数表現ではありません！';
$string['errortoomanywords'] = '最大ワード数に達しました！';
$string['errorupdateentries'] = '以下の単語は更新できませんでした：';
$string['errorwordoverflow'] = '新しい入力は長すぎます！';
$string['export'] = 'エクスポートする...';
$string['exportcsv'] = 'CSVエクスポート';
$string['exportdefault'] = 'エクスポート';
$string['exportpng'] = 'PNGエクスポート';
$string['fontcolor'] = 'テキストカラー';
$string['fontcolordesc'] = 'テキストカラー{$a}を設定する。色の値を16進数表現で定義します。全てのテキストカラーが設定されているときだけ、ワードに色が付きます。';
$string['fullscreen'] = 'フルスクリーン';
$string['list'] = 'リスト';
$string['modulename'] = 'ワードクラウド';
$string['modulename_help'] = 'このモジュールにより、教師はタグのリストをワードクラウドとして視覚化することができます。タグの重要度は、言及の数に応じてフォントサイズで表示されます。';
$string['modulenameplural'] = 'ワードクラウド';
$string['monocolor'] = '基本カラー';
$string['monocolor_help'] = 'モノトーンの配色は、管理者設定で定義された色のいずれかを選択します。';
$string['monocolor_hex'] = 'カスタムカラー';
$string['monocolor_hex_help'] = '希望のモノカラーを6桁の16進数で "aabb11"（"#"抜き）と入力してください。';
$string['monocolordesc'] = 'ワードクラウドのワードに、１色を設定することで、システムは明度の異なる6色を計算します。色の値は#のない16進数として定義されます。';
$string['notification'] = 'ワードを入力するグループを選択してください。';
$string['open'] = '開始：';
$string['pagetitle'] = 'Moodleワードクラウド';
$string['pluginadministration'] = 'ワードクラウド管理';
$string['pluginname'] = 'ワードクラウド';
$string['privacy:metadata'] = 'ワードクラウドプラグインは個人データを保持しません。';
$string['refreshtext'] = '最新のワードクラウドコンテンツを取得するには、ページを更新してください。';
$string['refreshtime'] = '更新中';
$string['refreshtimedesc'] = '自動更新間隔時間を秒単位で設定';
$string['removewordcheck'] = 'このワードクラウドから「{$a}」という単語を削除してもよろしいですか？';
$string['saved'] = '保存済み';
$string['submitbtn'] = '提出済み';
$string['submittedwords'] = 'ワードが保存されました：';
$string['textbox'] = 'ワードをここに追加する…';
$string['timing'] = '利用期間';
$string['usemonocolor'] = 'カラースキーム';
$string['usemonocolor_help'] = 'ここでは、ランダムな色付けか、連続的に影付けされたパレットのどちらかを選択できます。 <br /><em>ランダムな色</em>: 単語にランダムな色が付けられます。 同じまたは類似の頻度で投稿された単語は同じ色で表示されます。 <br /><em>連続影付けパレット</em>: ここでは、提供されている色の 1 つを選択するか、モノクロ カラースキーム用に独自の 6 桁の 16 進値でカスタムカラーを入力できます。すべての単語は同じ色になり、単語数が異なる単語は明るくまたは暗くなります。';
$string['usemonocolor_random'] = 'ランダムな色付け';
$string['usemonocolor_sequential'] = '連続影付けパレット';
$string['warning'] = '警告';
$string['warningdoubleentries'] = 'リスト内に同じエントリが見つかりました。 続行すると、これらはマージされ、カウントが合計されます。<br /><br />次の投稿はユニークではありません:';
$string['word'] = 'ワード';
$string['wordcloud:addinstance'] = '新しいワードクラウドを設定する';
$string['wordcloud:editentry'] = 'ワードを編集する';
$string['wordcloud:submit'] = '新しいワードを提出';
$string['wordcloud:view'] = 'ワードクラウドを表示する';
$string['wordcloudname'] = 'ワードクラウド名';
$string['wordlist'] = 'ワードリスト';
