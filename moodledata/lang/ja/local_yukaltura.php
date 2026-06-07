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
 * Strings for component 'local_yukaltura', language 'ja', version '4.4'.
 *
 * @package     local_yukaltura
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['application_name'] = 'アプリケーション名';
$string['application_name_desc'] = 'アプリケーション名は、Kalturaサーバーに報告され、ユーザーレベルのレポートでアプリケーションごとの集計に使用される名前です。';
$string['atto_player_height'] = 'Attoプレーヤーの高さ';
$string['atto_player_height_desc'] = '埋め込まれるプレーヤーの高さです。';
$string['atto_player_width'] = 'Attoプレーヤーの幅';
$string['atto_player_width_desc'] = '埋め込まれるプレーヤーの幅です。';
$string['atto_upload'] = 'アップロードの許可';
$string['atto_upload_desc'] = '教師・学生はAttoテキストエディタにおいて新しいメディアをアップロードすることが可能です。';
$string['cancel_label'] = 'キャンセル';
$string['category_reset_complete'] = '<b>ルートカテゴリはリセットされました。</b>';
$string['ceconn'] = 'Kaltura CE';
$string['clear'] = 'クリア';
$string['click_test_button'] = 'ボタンをクリックして接続テストを行ってください。';
$string['confirm_category_reset'] = '<p></p>ルートカテゴリをリセットしますか？<p>この操作を実行するとMoodle内のすべてのメディア共有情報やメディアの利用情報が削除されます。</p><p>誤って「続行」をクリックしてしまった場合は、ルートカテゴリのパスを元の値に設定すると、情報を復旧することができます。</p><p>慎重に選択してください。</p>';
$string['conn_failed'] = 'ログインできません。認証情報と接続設定を確認した後、再度接続を試みてください。';
$string['conn_failed_alt'] = 'Kalturaサーバは現在利用できません。管理者にお問い合わせください。';
$string['conn_heading_desc'] = 'システムの種別 (Kaltura CEもしくはKaltura SaaS)を選択し、システムに接続するための認証情報を入力します。';
$string['conn_heading_title'] = 'ホスト接続設定';
$string['conn_server'] = '接続サーバ';
$string['conn_server_desc'] = '自前のサーバ（Kaltura CE）かホスティング（Kaltura SaaS）かを選択します。';
$string['conn_status_title'] = '接続ステータス';
$string['conn_success'] = '認証情報を使用してログインに成功しました。';
$string['connected'] = 'Kalturaとの接続に成功';
$string['connection_status'] = '接続ステータス';
$string['course_name'] = 'コース名:';
$string['create_default_access_failed'] = 'Kalturaサーバにデフォルトのアクセス制御オブジェクト ({$a}) を作成できません。';
$string['create_internal_access_failed'] = 'Kalturaサーバに内部限定のためのアクセス制御オブジェクト ({$a}) を作成できません。';
$string['custom_player'] = 'カスタムプレーヤー';
$string['eighteen'] = '18';
$string['empty_size'] = 'カスタムプレーヤーのサイズ(幅,高さ)を入力してください。';
$string['enable_html5'] = 'HTML5フレーバーを許可';
$string['enable_html5_desc'] = 'Kalturaメディアを再生するときにHTML5フレーバーを有効にする場合はこの設定を有効にします。';
$string['enable_player_resource_audio'] = 'オーディオ・プレーヤーを選択';
$string['enable_player_resource_audio_desc'] = '音楽メディアを再生するときに動画とは別のプレーヤーを使用する場合はこの設定を有効にします。';
$string['enable_reports'] = 'レポートの許可';
$string['enable_reports_desc'] = 'Kalturaレポートは、Falcon以降のKalturaサーバに対応しています。';
$string['enable_webcam'] = 'Webカメラ録画を許可';
$string['enable_webcam_desc'] = 'Webカメラによる録画とアップロードを有効にするには、この設定をオンにします。';
$string['flashminimum'] = 'バージョン9以降のFlashプレーヤーが必要です。 <a href=\\"http://get.adobe.com/flashplayer/\\">フラッシュプレーヤーを更新してください。</a>';
$string['found_course'] = '{$a} 件のコースが見つかりました:';
$string['get_default_access_failed'] = 'Kalturaサーバからデフォルトのアクセス制御オブジェクト ({$a}) を取得できません。';
$string['get_internal_access_failed'] = 'Kalturaサーバから内部限定のためのアクセス制御オブジェクト ({$a}) を取得できません。';
$string['header_kaltura_reports'] = 'Kalturaレポート';
$string['hosted_login'] = 'ログイン名';
$string['hosted_login_desc'] = 'あたながKalturaサイトにログインするために使用するユーザ名です。';
$string['hosted_password'] = 'パスワード';
$string['hosted_password_desc'] = 'あたながKalturaサイトにログインするために使用するパスワードです。';
$string['hostedconn'] = 'Kaltura Hosted Solution (SaaS)';
$string['internal_ipaddress'] = '内部IPアドレス';
$string['internal_ipaddress_desc'] = '学校／組織の内部限定IPアドレスもしくはサブネットの共通設定です。例えば、IPアドレスは「192.168.1.1」のように、サブネットは「192.168.1.0/24」のように書きます。複数のIPアドレスやサブネットを指定する場合、要素の間を半角スペースで区切ります。';
$string['invalid_custom_size'] = 'カスタムプレーヤーのサイズが不適切です。';
$string['invalid_media_type'] = '不正なメディアタイプ';
$string['invalid_name'] = '名前には不適切な文字が使用されています。';
$string['invalid_size'] = 'プレーヤーのサイズが不適切です。';
$string['kalmediaassign_player_height'] = 'プレーヤーの高さ';
$string['kalmediaassign_player_height_desc'] = 'プレーヤーの中でメディアがカットされてしまう場合、この設定は自動的に調整されます。';
$string['kalmediaassign_player_width'] = 'プレーヤーの幅';
$string['kalmediaassign_player_width_desc'] = 'プレーヤーの中でメディアがカットされてしまう場合、この設定は自動的に調整されます。';
$string['kalmediaassign_popup_player_height'] = 'ポップアップ・プレーヤーの高さ';
$string['kalmediaassign_popup_player_height_desc'] = 'プレーヤーの中でメディアがカットされてしまう場合、この設定は自動的に調整されます。';
$string['kalmediaassign_popup_player_width'] = 'ポップアップ・プレーヤーの幅';
$string['kalmediaassign_popup_player_width_desc'] = 'プレーヤーの中でメディアがカットされてしまう場合は、の設定は自動的に調整されます。';
$string['kalmediaassign_upload'] = 'アップロードの許可';
$string['kalmediaassign_upload_desc'] = '学生は課題提出フォームにおいて新しいメディアをアップロードすることが可能です。';
$string['kalmediares_upload'] = 'アップロードの許可';
$string['kalmediares_upload_desc'] = '教師はリソースの設定フォームにおいて新しいメディアをアップロードすることが可能です。';
$string['kaltura_atto_title'] = 'Kaltura Attoプラグインの設定';
$string['kaltura_course_reports'] = 'Kalturaコース・メディア・レポート';
$string['kaltura_general'] = '共通設定';
$string['kaltura_kalmediaassign_title'] = 'Kalturaメディア課題の設定';
$string['kaltura_kalmediapres_title'] = 'Kalturaメディア・プレゼンテーションの設定';
$string['kaltura_kalmediares_title'] = 'Kalturaメディア・リソースの設定';
$string['kaltura_kalreports_heading'] = 'Kalturaレポートの設定';
$string['kaltura_kcw_title'] = 'Kaltura Content Wizard (KCW) の設定';
$string['kaltura_mymedia_title'] = 'マイメディアの設定';
$string['kaltura_player'] = 'Kaltura課題プレーヤー';
$string['kaltura_player_atto'] = 'Kaltura Attoプレーヤー';
$string['kaltura_player_atto_custom'] = 'カスタムUIConf';
$string['kaltura_player_atto_custom_desc'] = 'Attoプラグイン・プレイヤーに独自のUIConfを使用するときにだけUIConfIDを指定します。';
$string['kaltura_player_atto_desc'] = 'Attoプラグインを使用してリソース等にフィルタを埋め込むときに使用されます。';
$string['kaltura_player_custom'] = 'カスタムUIConf';
$string['kaltura_player_custom_desc'] = '課題プレーヤーに独自のUIConfを使用するときにだけUIConfIDを指定します。';
$string['kaltura_player_desc'] = '課題に提出されたメディアを再生するために使用されるプレーヤーです。';
$string['kaltura_player_mymedia'] = 'Kalturaマイメディア・プレーヤー';
$string['kaltura_player_mymedia_custom'] = 'カスタムUIConf';
$string['kaltura_player_mymedia_custom_desc'] = 'マイメディア・プレーヤーに独自のUIConfを使用するときにだけUIConfIDを指定します。';
$string['kaltura_player_mymedia_desc'] = 'マイメディアの中でメディアを再生するために使用されるプレーヤーです。このプレーヤーはメディアのプレビューのほか、再生ページのURLや埋め込みコードにも使用されます。';
$string['kaltura_player_resource'] = 'Kalturaリソース・プレーヤー';
$string['kaltura_player_resource_audio'] = 'Kalturaオーディオ・リソース・プレーヤー';
$string['kaltura_player_resource_audio_desc'] = '音楽メディア・リソースを再生するために使用されるプレーヤーです。選択されたプレーヤーは新しいメディア・リソースのプレーヤーとして使用されます。「<b>メディア・リソース・プレーヤーの設定を上書き</b>」のチェックがオフのときは利用者の設定が優先されます。';
$string['kaltura_player_resource_custom'] = 'カスタムUIConf';
$string['kaltura_player_resource_custom_desc'] = 'リソース・プレーヤーに独自のUIConfを使用するときにだけUIConfIDを指定します。';
$string['kaltura_player_resource_desc'] = 'メディア・リソースを再生するために使用されるプレーヤーです。選択されたプレーヤーは新しいメディア・リソースのプレーヤーとして使用されます。「<b>メディア・リソース・プレーヤーの設定を上書き</b>」のチェックがオフのときは利用者の設定が優先されます。';
$string['kaltura_report_navbar'] = 'Kalturaコース・メディア・レポート';
$string['kaltura_reports'] = 'Kalturaレポート';
$string['loadingwait'] = '読み込み中です。しばらくお待ちください。';
$string['maximum_data_size'] = '最大データサイズ';
$string['maximum_data_size_desc'] = 'ユーザがKalturaサーバにアップロード可能なメディアエントリの最大データサイズ (バイト)。';
$string['media_bad'] = 'このメディアは使用しないでください。';
$string['media_converting'] = 'メディアは変換中です。また後で状態を確認してください。';
$string['media_error'] = 'メディアの処理途中でエラーが発生しました。他のメディアをお試しください。';
$string['media_prop_dimensions'] = 'プレーヤーの寸法:';
$string['media_prop_header'] = 'メディア・プロパティ';
$string['media_prop_name'] = '名前:';
$string['media_prop_player'] = 'プレーヤーのデザイン:';
$string['media_prop_size'] = 'プレーヤーのサイズ:';
$string['media_prop_size_custom'] = 'カスタムサイズ';
$string['media_prop_size_large'] = 'Large (400x365)';
$string['media_prop_size_small'] = 'Small (260x260)';
$string['media_properties'] = 'メディア・プロパティ';
$string['medianameasc'] = '名前順 (辞書順)';
$string['medianamedesc'] = '名前順 (逆順)';
$string['migration_error'] = 'データ移行エラー ({$a})';
$string['mobile_flavor_failed'] = 'モバイル用フレーバー ({$a}) を取得できません。';
$string['mostrecent'] = '新しい順';
$string['mymedia_access_keyword'] = 'キーワード';
$string['mymedia_access_keyword_desc'] = 'このキーワードを含む（または含まない）ユーザーは、マイメディアを使用できます。';
$string['mymedia_access_rule'] = 'アクセスチェックルール';
$string['mymedia_access_rule_desc'] = '選択されたルールはマイメディアへのアクセス権限の確認に使用されます。';
$string['mymedia_contain_email'] = 'メールアドレスにキーワードを含む';
$string['mymedia_contain_firstname'] = '名にキーワードを含む';
$string['mymedia_contain_lastname'] = '姓にキーワードを含む';
$string['mymedia_items_per_page'] = 'ページごとのメディア数';
$string['mymedia_items_per_page_desc'] = '1ページに表示するメディアの数';
$string['mymedia_limited_access'] = 'アクセス制限';
$string['mymedia_limited_access_desc'] = 'マイメディアへのアクセスに制限を設けます。';
$string['mymedia_not_contain_email'] = 'メールアドレスにキーワードを含まない';
$string['mymedia_not_contain_firstname'] = '名にキーワードを含まない';
$string['mymedia_not_contain_lastname'] = '姓にキーワードを含まない';
$string['nine'] = '9';
$string['no_capability'] = 'あたなにはこのレポートを閲覧する権限がありません。';
$string['no_course_result'] = '{$a} というコースは見つかりません。';
$string['no_media'] = 'メディアがありません。';
$string['no_recent_course'] = '最近閲覧されたコースはありません。';
$string['not_connected'] = 'Kalturaとの接続に失敗';
$string['ok_label'] = 'OK';
$string['oldest'] = '古い順';
$string['permission_disable'] = 'あなたにはKalturaメディアを使用する権限がありません。';
$string['play_failed'] = 'メディア ({$a}) を再生できません。サイト管理者に連絡してください。';
$string['player_mymedia_screen_recorder'] = 'Default screen recorder widget (9780761)';
$string['player_regular_dark'] = 'Player dark (6709411)';
$string['player_regular_light'] = 'Player light (6709421)';
$string['player_resource_override'] = 'メディア・リソース・プレーヤーの設定を上書き';
$string['player_resource_override_desc'] = '個々のメディアリソースプレーヤーの選択を上書きするには、このオプションをオンにします。これにより。すべてのメディア・リソースのプレーヤーが「Kalturaリソース・プレーヤー」の設定で上書きされます。';
$string['pluginname'] = 'YU Kaltura メディア・ローカル・ライブラリ';
$string['privacy:metadata'] = 'YU Kalturaメディア・ローカル・ライブラリはいかなる個人情報も保存しません。';
$string['problem_viewing'] = 'ページの表示中に問題が発生しました。再度お試し頂くか管理者に連絡してください。';
$string['recent_course_view'] = '最近閲覧されたコース:';
$string['recent_courses_display_limit'] = '最近閲覧されたコースの最大表示数';
$string['recent_courses_display_limit_desc'] = '最近閲覧されたコースの表示数の制限';
$string['record_media'] = 'Webカメラからのアップロード';
$string['repo_not_installed'] = 'このファイルを表示するためにはKalturaリポジトリをインストールする必要があります。';
$string['report_disabled'] = 'Kalturaレポートは無効になっています。Kalturaメディアパッケージのローカルプラグインで有効にしてください。';
$string['report_server_uri'] = 'レポートサーバのURI';
$string['report_server_uri_desc'] = 'KalturaレポートサーバのURIを入力してください。';
$string['resetroot'] = 'ルートカテゴリのリセット';
$string['rootcategory'] = 'ルートカテゴリのパス';
$string['rootcategory_create'] = 'ルートカテゴリを指定してください。';
$string['rootcategory_created'] = 'ルートカテゴリは「<b>{$a}</b>」のように作成されました。';
$string['rootcategory_desc'] = '<p>KMCにおいてMoodleユーザのカテゴリをまとめて管理するためのルートカテゴリを設定します。例えば、「Sites>My Moodle Site」と設定した場合、KMCでは「Sites」というカテゴリが作成され、その配下に「My Moodle Site」というカテゴリが作成されます。すべてのMoodleユーザのカテゴリは、「My Moodle Site」のサブカテゴリとして作成されます。</p>';
$string['rootcategory_warning'] = 'ルートカテゴリはすでに設定されています。名前を変更すると、KMC上のすべてのMoodleコースカテゴリに関連するデータが失われます。';
$string['screenrecorder'] = 'スクリーンレコーダー';
$string['search'] = '検索';
$string['search_clear'] = 'クリア';
$string['search_courses_display_limit'] = 'コース検索の最大表示数';
$string['search_courses_display_limit_desc'] = 'コース検索結果の表示数の制限';
$string['search_text_tooltip'] = 'メディアの名称もしくはタグを入力してください。';
$string['selected_media'] = '選択されたメディア';
$string['server_uri'] = 'サーバURI';
$string['server_uri_desc'] = '接続したいサーバのURIを入力します。もしくはSaaS版のデフォルトのURIを入力します。';
$string['sortby'] = '並べ替え';
$string['start'] = '開始';
$string['test_conn_failed'] = 'テストコネクション失敗 ({$a})';
$string['test_connection'] = 'Kalturaサーバへのテスト接続';
$string['thirty'] = '30';
$string['twentyfour'] = '24';
$string['twentyone'] = '21';
$string['twentyseven'] = '27';
$string['unable_to_create'] = '「 <b>{$a}</b>」というルートカテゴリを作成できません。別のカテゴリ名を使用してください。';
$string['update_default_access_failed'] = 'デフォルトのアクセス制御オブジェクト ({$a}) を更新できません。';
$string['update_internal_access_failed'] = '内部限定のためのアクセス制御オブジェクト ({$a}) を更新できません。';
$string['upload_login'] = 'アップロード用ユーザ名';
$string['upload_login_desc'] = 'アップロードURIで使用されるユーザ名です。空欄のときはサーバURIのユーザ名が使用されます。';
$string['upload_media'] = 'メディアのアップロード';
$string['upload_password'] = 'アップロード用パスワード';
$string['upload_password_desc'] = 'アップロードURIで使用されるパスワードです。空欄のときはサーバURIのパスワードが使用されます。';
$string['upload_successful'] = 'メディアは正常にアップロードされました。保存／送信を忘れないでください。';
$string['upload_uri'] = 'アップロードURI';
$string['upload_uri_desc'] = 'アップロード用サーバのURIを入力してください。空欄のときはアップロードにおいてもサーバURIが使用されます。';
$string['yukaltura:search_selector'] = 'Kalturaメディアを検索する。';
$string['yukaltura:view_report'] = 'Kalturaレポートを表示する。';
$string['yukaltura:view_selector'] = 'Kalturaメディアを表示する。';
