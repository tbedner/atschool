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
 * Strings for component 'videotime', language 'ja', version '4.4'.
 *
 * @package     videotime
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity_name'] = '活動名';
$string['activity_name_help'] = 'コースに表示するVideo Time活動モジュールの名前';
$string['albums'] = 'アルバム';
$string['api_not_authenticated'] = 'Vimeo APIが未認証です。';
$string['api_not_configured'] = 'Vimeo APIは未設定です。';
$string['apply'] = '適用';
$string['authenticate_vimeo'] = 'Vimeoで承認';
$string['authenticate_vimeo_success'] = 'Vimeo認証成功。あなたはVimeo APIに基づく機能をいま使うことができます。';
$string['authenticated'] = '承認済み';
$string['choose_video'] = 'ビデオを選択';
$string['choose_video_confirm'] = 'あなたは本当にビデオを選択したいのですか';
$string['client_id'] = 'VimeoクライアントID';
$string['client_id_help'] = 'クライアントIDはあなたが自身のVimeoアカウントで"app"を生成した時に作られます。このプロセスを開始するために https://developer.vimeo.com/apps/new へ移動する。';
$string['client_secret'] = 'Vimeo Client秘密鍵';
$string['client_secret_help'] = 'クライアントシークレットはあなたが自身のVimeoアカウントで"App"を生成した時に作られます。このプロセスを開始するために https://developer.vimeo.com/apps/new へ移動する。';
$string['columns'] = '列';
$string['columns_help'] = 'プレビューモードで表示する';
$string['completion_on_finish'] = 'ビデオ最終仕上げの完了';
$string['completion_on_percent'] = '視聴パーセンテージの完了';
$string['completion_on_view'] = '視聴時間の完了';
$string['configure_vimeo_first'] = '認証前にVimeo Appの設定が必要です。';
$string['configure_vimeo_help'] = '<ol><li><a href="https://developer.vimeo.com/apps/new">https://developer.vimeo.com/apps/new</a>に移動し、あなたのVimeoアカウントでログイン</li>
<li>あなたのAppの名前と説明を入力。例: Video Time Repository API</li>
<li>チェックボックスを確認 "No. The only Vimeo accounts that will have access to the app are my own" がチェック済みか</li>
<li>Vimeoの利用規約に同意し、"Create App"をクリック</li>
<li>あなたの新しいappを得られるでしょう</li>
<li>"Edit settings"をクリック</li>
<li>Appの説明を入力、これはVimeoで認証する際に管理者に表示されるでしょう</li>
<li>App URL,を入力、これは <b>{$a->redirect_url}</b>と設定</li>
<li>"Update"をクリック</li>
<li>コールバックURLを追加、これは<b>{$a->redirect_url}</b>と設定</li>
<li>（画面上部の）Client IdentifierとClient Secret (Manage App Secrets)をコピー</li>
<li>Client ID と Client Secretを入力 <a href="{$a->configure_url}">here</a></li></ol>';
$string['confirmation'] = '確認';
$string['create_vimeo_app'] = 'Vimeo Appの生成';
$string['default'] = 'デフォルト';
$string['discover_videos'] = 'Vimeoビデオの発見';
$string['discovering_videos'] = '{$a->count} ビデオを発見中';
$string['display_options'] = 'オプションの表示';
$string['done'] = '完了';
$string['duration'] = '長さ';
$string['embed_options'] = '埋め込みオプション';
$string['embed_options_defaults'] = 'デフォルト埋め込みオプション';
$string['embeds'] = '埋め込み';
$string['estimated_request_time'] = '推定残り時間';
$string['force'] = '強制設定';
$string['force_help'] = '選択すると、このデフォルトはインスタンス設定をオーバーライドします。';
$string['goback'] = '戻る';
$string['gradeitemnotcreatedyet'] = 'この活動の評定アイテムは存在しません。上の<b>パーセンテージを見るための評定式をセット</b>をクリック，保存，そして評定カテゴリーをセットするために本活動を再び編集，法廷をパスして下さい。';
$string['insert_video_metadata'] = 'ビデオからメタデータを挿入（活動の設定をオーバーライドします）';
$string['invalid_session_state'] = '不正なセッション状態。';
$string['label_mode'] = 'ラベルモード';
$string['mode'] = 'モード';
$string['mode_help'] = '<b>ノーマルモード</b>: ごく普通に、コースページ上にスタンダードな活動リンクを表示。<br>
<b>ラベルモード</b>: ラベル活動と同様に、コースレイアウト上にビデオを埋め込む。<br>
<b>プレビューイメージモード</b>: コースページ上に活動にリンクするビデオサムネイルを表示（Video Timeリポジトリ―のみ）。';
$string['modulename'] = 'ビデオタイム';
$string['modulename_help'] = 'Video Time Pro活動は教師に対して以下を可能とします
<ul>
    <li>URLを追加するだけでVimeoからの動画を容易に埋め込み</li>
    <li>ビデオプレイヤーの上下にコンテンツを追加</li>
    <li>活動完了を用いることでユーザーの視聴時間を捕捉</li>
    <li>各ユーザーの視聴時間に関して洞察(insight）を得る</li>
    <li>プラグインのデフォルトの埋め込みオプションを設定</li>
    <li>そして全体でインスタンスの埋め込みオプションをオーバーライド。</li>
</ul>

我々は継続的にプラグインを改良し続けますので、今後のバージョンにも期待して下さい。我々がいま何を作業中か、仕様要求を加えたかを以下の公開ロードマップで確認できます。 <a href="https://bdecent.de/products/videotimepro/roadmap">https://bdecent.de/products/videotimepro/roadmap</a>

あなたのフィードバックを我々に知らせてください。';
$string['modulenameplural'] = 'ビデオタイムインスタンス';
$string['more'] = 'さらに';
$string['needs_authentication'] = '再認証が必要';
$string['next_activity'] = '次の活動';
$string['next_activity_auto'] = '自動的に次の活動へ移動';
$string['next_activity_auto_help'] = '学生がビデオを見終えたときに自動的に次の活動を読み込む。';
$string['next_activity_button'] = '次の活動ボタンを有効化';
$string['next_activity_button_help'] = 'ユーザーが完了後に次の活動へリンクするボタンをおビデオの上に表示する。';
$string['next_activity_in_course'] = 'デフォルト: 本コースの次の活動';
$string['normal_mode'] = 'ノーマルモード';
$string['not_authenticated'] = '未認証';
$string['of'] = 'of';
$string['option_autoplay'] = '自動再生';
$string['option_autoplay_help'] = '自動的にビデオのプレイバックを開始する。いくつかのデバイスやブラウザーはブロックしてこの機能が働かないことに注意。';
$string['option_byline'] = '作成者名';
$string['option_byline_help'] = '作成者名をビデオに表示。';
$string['option_color'] = 'カラー';
$string['option_color_help'] = 'ビデオコントロールのカラーを決定。カラーはビデオの埋め込み設定によって上書きされます。';
$string['option_forced'] = '{$a->option} は全体で強制的に以下のようになる: {$a->value}';
$string['option_height'] = '高さ';
$string['option_height_help'] = 'ビデオの高さ変更。ビデオの最大化可能なバージョンの高さがデフォルト。';
$string['option_maxheight'] = '最大高さ';
$string['option_maxheight_help'] = '高さと同じ、ただしビデオは元のビデオのネイティブなサイズを越えません。';
$string['option_maxwidth'] = '最大幅';
$string['option_maxwidth_help'] = '幅と同じ、ただしビデオは元のビデオのネイティブなサイズを越えません。';
$string['option_muted'] = '消音';
$string['option_muted_help'] = 'ロード時にこのビデオを昇温。特定のブラウザーで自動再生するのに必要。';
$string['option_playsinline'] = 'インライン再生';
$string['option_playsinline_help'] = 'モバイルデバイスでビデオをインライン再生し、プレイバック時に自動的にフルスクリーンに切り替えるにはこのパラメーターをfalseに設定。';
$string['option_portrait'] = 'ポートレート';
$string['option_portrait_help'] = 'ビデオをポートレートで表示';
$string['option_responsive'] = 'レスポンシブ';
$string['option_responsive_help'] = 'チェックすると、ビデオプレイヤーはレスポンシブになり、ページまたはスクリーンサイズに適応する。';
$string['option_speed'] = '速度';
$string['option_speed_help'] = 'パフォーマンスメニューに速度コントロールを表示し、Playback rate API（PROとBussinessアカウントのみ可能）を有効とする。';
$string['option_title'] = 'タイトル';
$string['option_title_help'] = 'ビデオ上にタイトルを表示';
$string['option_transparent'] = '透過';
$string['option_transparent_help'] = 'レスポンシブプレイヤーと透過背景はデフォルトで有効、無効に設定するにはこのパラメーターをfalseへ。';
$string['option_width'] = '幅';
$string['option_width_help'] = 'ビデオの幅変更。ビデオの最大化可能バージョンの幅がデフォルト。';
$string['pluginadministration'] = 'Video Time管理';
$string['pluginname'] = 'ビデオタイム';
$string['preview_mode'] = 'プレビューイメージモード';
$string['preview_picture'] = 'プレビューイメージ';
$string['preview_picture_help'] = 'ユーザーにイメージを表示';
$string['process_videos'] = 'ビデオの処理';
$string['process_videos_help'] = 'ビデオはスケジュールタスクによって処理されます。大規模なVimeoアカウントの場合、すべてのビデオを完全に処理するには時間を要します。';
$string['pull_from_vimeo'] = 'Vimeoからメタデータを取り込む';
$string['pull_from_vimeo_invalid_videoid'] = 'Video IDを決定できない。Vimeo URLを入力したことを確認（例：https://vimeo.com/635473456）';
$string['pull_from_vimeo_loading'] = 'Vimeoからメタデータを取り込み中';
$string['pull_from_vimeo_success'] = 'メタデータは正常にVimeoから取り込まれました。いくつかの活動設定はオーバーライドされます。';
$string['rate_limit'] = 'Vimeo API要求制限';
$string['results'] = '結果';
$string['resume_playback'] = '再生の再開';
$string['resume_playback_help'] = 'ユーザーが活動に戻って来た時に、自動的にビデオを再開。再生はユーザーが戻って来た個所から始まります。';
$string['run_discovery_task'] = 'あなたのビデオデータを取り込み開始するためにこの「Vimeoビデオの発見」を実行する。それ以外の場合は自動的にそれが実行されるまであなたは待ちます。';
$string['search_help'] = '名前、説明、アルバム、タグ…を検索';
$string['seconds'] = '秒';
$string['session_not_found'] = 'User session not found.';
$string['set_client_id_and_secret'] = 'クライアントIDと秘密鍵の設定';
$string['settings'] = 'ビデオタイム設定';
$string['setup_repository'] = 'リポジトリ―の設定';
$string['show_description'] = '説明の閲覧';
$string['show_duration'] = '長さの閲覧';
$string['show_tags'] = 'タグの閲覧';
$string['show_title'] = 'タイトルの閲覧';
$string['show_viewed_duration'] = '視聴時間の閲覧';
$string['showdescription'] = '説明の表示';
$string['showdescription_help'] = '説明はビデオの上に表示され、コースページで閲覧できる。';
$string['showing'] = '閲覧中';
$string['state'] = 'ステート';
$string['state_finished'] = '終了';
$string['state_help'] = 'ユーザーはビデオを終了？';
$string['state_incomplete'] = '不完全';
$string['status'] = 'ステータス';
$string['store_pictures'] = 'サムネールのストア';
$string['store_pictures_help'] = '有効にすると、Vimeoサムネールはローカルにストアされる。それ以外の場合、イメージは外部から、Vimeoより送られる。';
$string['subplugintype_videotimeplugin'] = 'ビデオタイム・プラグイン';
$string['subplugintype_videotimeplugin_plural'] = 'ビデオタイム・プラグイン';
$string['todo'] = 'TODO';
$string['totara_video_discovery_help'] = '<p>あなたは手動でCLIコマンドによってこのタスクを実行できます:</p>
<p><b>/usr/bin/php admin/tool/task/cli/schedule_task.php --execute=\\\\videotimeplugin_repository\\\\task\\\\discover_videos</b></p>
<p>それ以外の場合、あなたはスケジュールタスク実行まで待つ必要があります。</p>
<p>あなたはアルバム情報を手動で取り込むためにコマンドを実行することもできます (待機する代わりに):</p>
<p><b>/usr/bin/php admin/tool/task/cli/schedule_task.php --execute=\\\\videotimeplugin_repository\\\\task\\\\update_albums</b></p>';
$string['update_albums'] = 'ビデオアルバムの更新';
$string['upgrade_vimeo_account'] = '注意：あなたのVimeoアカウントのアップグレードを検討。あなたのAPIリクエストリミットは少なすぎる。';
$string['use'] = '利用';
$string['video_description'] = 'ノート';
$string['video_description_help'] = 'ノートはビデオの下に表示される。';
$string['videos_discovered'] = '発見されたビデオ';
$string['videos_processed'] = '処理されたビデオ';
$string['videotime:addinstance'] = 'ビデオタイム・モジュールの新規追加';
$string['videotime:view'] = 'ビデオタイム・ビデオの表示';
$string['videotime:view_report'] = 'レポート表示（Proのみ）';
$string['view_report'] = 'レポート表示';
$string['viewpercentgrade'] = '評価を視聴パーセンテージと等しく設定';
$string['viewpercentgrade_help'] = 'このビデオの評価アイテムを生成。学生はビデオの彼らの視聴パーセンテージと等しい評価を受け取る。';
$string['views'] = '表示';
$string['views_help'] = '活動の表示回数';
$string['vimeo_overview'] = '概要と設定';
$string['vimeo_url'] = 'Vimeo URL';
$string['vimeo_url_help'] = 'VimeoビデオのフルURL';
$string['vimeo_url_invalid'] = 'Vimeo URLが正しくありません。ウェブブラウザ―から直接、コピーして下さい。';
$string['vimeo_url_missing'] = 'Vimeo URLが未入力';
$string['vimeo_video_not_found'] = 'Video does not exist in database.';
$string['watch_percent'] = 'パーセントを監視';
$string['watch_percent_help'] = '学生が視聴したビデオの中で最も関心が薄い瞬間';
$string['watch_time'] = '視聴時間';
$string['watch_time_help'] = '学生がトータルでどれくらい長くビデオを観ていたか（$s 5秒刻みで）';
$string['with_play_button'] = '再生ボタンと';
