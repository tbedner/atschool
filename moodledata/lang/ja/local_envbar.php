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
 * Strings for component 'local_envbar', language 'ja', version '4.4'.
 *
 * @package     local_envbar
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfields'] = '別の環境を追加する';
$string['bgcolour'] = '背景色';
$string['cachedef_records'] = '環境バーデータベースレコード';
$string['checkenvage'] = '環境リフレッシュエイジを確認する';
$string['colourerror'] = '無効なHTMLカラーコードが指定されました。';
$string['colourplaceholder'] = 'HTMLカラーコード 例) #fffまたは#000000';
$string['configurehere'] = '環境バーを編集する';
$string['configureinprod'] = '設定を編集する';
$string['debuggingdefinedinconfig'] = '(config.phpで設定済み)';
$string['debuggingoff'] = 'デバッグOFF';
$string['debuggingon'] = 'デバッグON';
$string['debugtogglelinkoff'] = 'OFFに切り替える';
$string['debugtogglelinkon'] = 'ONに切り替える';
$string['emailheading'] = 'メール接頭辞';
$string['enableemailprefix'] = 'メール件名接頭辞を有効にする';
$string['enableemailprefix_desc'] = 'この設定ではメール件名フィールドの先頭に環境名の最初の4文字を付加するかどうかコントロールします。';
$string['enablefaviconcolorize'] = 'ファビコンをカラー化する';
$string['enablefaviconcolorize_desc'] = 'この設定ではページのファビコンが環境の色に応じてカラー化されるかどうかコントロールします。';
$string['enablemenu'] = '環境切替メニューを有効にする';
$string['enablemenu_desc'] = 'この設定では環境切替メニューをユーザメニューに追加するかどうかコントロールします。';
$string['enabletitleprefix'] = 'ページタイトル接頭辞を有効にする';
$string['enabletitleprefix_desc'] = 'この設定ではページタイトルの前に環境名の最初の4文字を付加するかどうかコントロールします。';
$string['envbarheading'] = '環境バー';
$string['extracss'] = '追加CSS';
$string['extracss_desc'] = 'このcssはバーがページ上部に固定表示されている場合にのみ追加されます。あなたのテーマではヘッダが固定されている場合があり、それが衝突する可能性があります。この追加cssは衝突を解決して、あなたのメインテーマのヘッダを下に移動させます。ヘッダが特定のブレイクポイントでのみ固定されている場合、この追加cssのメディアクエリはあなたのテーマのものと同じにする必要があります。';
$string['faviconheading'] = 'ページファビコン';
$string['header_envbar'] = '環境バー';
$string['help'] = '<p><b>注意:</b> これらの設定は通常、実稼働システムで一度だけ設定すべきです。</p><p>あなたが実稼働システムにいない場合、そしてこれらの値が空である場合、理想的には実稼働システムでこれらの値を入力して、あなたのデータベースをリフレッシュしてここに戻してください。</p>';
$string['highlightlinks'] = 'ハイライトリンク';
$string['highlightlinks_desc'] = 'この設定では他の環境 (特に実稼働環境) への送信リンクを色の付いた輪郭で強調表示するかどうかコントロールします。';
$string['highlightlinksenvbar'] = 'ハイライトリンク (環境バー)';
$string['highlightlinksenvbar_desc'] = 'この設定では環境バー内のリンクも強調表示するかどうかコントロールします。';
$string['lastrefresh'] = '最終リフレッシュ';
$string['lastrefresh_success'] = '最終リフレッシュ時間が更新されました。';
$string['linksheading'] = '環境リンク';
$string['menuenvsettings'] = '環境';
$string['menuheading'] = '環境切替メニュー';
$string['menulastrefresh'] = '最終リフレッシュ';
$string['menupresentation'] = 'プレゼンテーション';
$string['missing_required_parameter'] = '必須パラメータが不足しています。必須パラメータは「wwwroot」および「lastrefresh」です。';
$string['notconfigured'] = 'UNKNOWN';
$string['pingprod'] = '実稼働環境更新';
$string['pingprod_help'] = 'このオプションを選択した場合、この環境の最終更新日時を更新するために実稼働サーバにpingが送信されます。';
$string['pingprodverbose'] = '冗長モード';
$string['pingprodverbose_help'] = 'このオプションおよび実稼働環境更新オプションが選択された場合、curlレスポンスの完全なデバッグが画面に表示されます。';
$string['pluginname'] = '環境バー';
$string['privacy:metadata'] = 'ローカル環境バープラグインはいかなる個人データも保存しません。';
$string['prod'] = 'PROD';
$string['prodbgcolour'] = '実稼働環境背景色';
$string['prodbgcolour_help'] = '実稼働環境の表示に使用される背景色です。特に非実稼働インスタンスから実稼働インスタンスへのリンクを強調表示する場合に使用されます。';
$string['prodlasttimestamp'] = '<p>実稼働環境タイムスタンプ最終リフレッシュ: {$a} 前</p>';
$string['prodtextcolour'] = '実稼働環境前景色';
$string['prodtextcolour_help'] = '実稼働環境の表示に使用される前景色です。特に非実稼働インスタンスから実稼働インスタンスへのリンクを強調表示する場合に使用されます。';
$string['prodwwwrootautobutton'] = 'オートフィル';
$string['prodwwwrootplaceholder'] = '実稼働環境の$CFG->wwwroot';
$string['prodwwwroottext'] = '実稼働環境wwwroot';
$string['refreshedago'] = '{$a} 経過';
$string['refreshedagoformat'] = '%Y/%m/%d %H:%M:%S %z';
$string['refreshedagotitle'] = 'このサイトデータベースは {$a} にコピーされました。';
$string['refreshednever'] = 'リフレッシュなし';
$string['secretkey'] = '秘密鍵';
$string['secretkey_help'] = '秘密鍵は環境同士が会話するために必要です。あなたの任意の英数字を設定するか、「生成」ボタンを押してください。秘密鍵が設定されていない場合、非実稼働環境は最終リセット時間を検出できません。';
$string['secretkey_invalid'] = '提供された秘密鍵が見つからないか、無効です。';
$string['secretkeygenbutton'] = '生成';
$string['secretkeyplaceholder'] = 'SomeRandomAlphanumericalString';
$string['setdeleted'] = '削除';
$string['setenabled'] = '有効';
$string['showconfiglink'] = '設定リンクを表示する';
$string['showconfiglink_desc'] = 'この設定では環境バー設定の編集が許可されているユーザに対して「設定を編集する」リンクが環境バーに追加されるかどうかコントロールします。';
$string['showdebugging'] = 'デバッギングを表示する';
$string['showdebugging_desc'] = 'この設定では環境バー設定の編集が許可されているユーザに対してデバッグ状態およびトグルリンクを環境バーに追加するかどうかコントロールします。';
$string['showrefresh'] = 'リフレッシュ時間を表示する';
$string['showrefresh_desc'] = 'この設定では最終リフレッシュ時間を表示するかどうかコントロールします。';
$string['showtext'] = '表示テキスト';
$string['showtextplaceholder'] = '例) あなたはステージング環境にいます。';
$string['stringseparator'] = '文字列セパレータ';
$string['stringseparator_desc'] = 'この設定では環境バー内の文字列の区切り方をコントロールします。デフォルトはハイフンです。';
$string['textcolour'] = '前景色';
$string['titleheading'] = 'ページタイトル';
$string['urlmatch'] = '非実稼働URL';
$string['urlmatch_help'] = 'あなたの非実稼働サイトのアドレスを追加してください。
<br>
メモ: あなたは正規表現でURLをマッチさせることができます。
<br>
例) 「https://stage[1,2,3].example.com」は「https://stage2.example.com」にマッチします。
<br>
以下の特殊文字はエスケープされることに留意してください。
<br>
 / \\ - . ? * ^ $';
$string['urlmatchplaceholder'] = '例) ステージング';
