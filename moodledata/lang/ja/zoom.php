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
 * Strings for component 'zoom', language 'ja', version '4.4'.
 *
 * @package     zoom
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtocalendar'] = 'カレンダーに追加';
$string['allmeetings'] = '全ミーティング';
$string['alternative_hosts'] = '代替ホスト';
$string['alternative_hosts_help'] = '代替ホストオプションは、ミーティングのスケジュール後に、あなたに代わってミーティングやウェビナーを開始する同一アカウント内の別のProユーザーの指名を可能とします。このユーザーは代替ホストに追加された通知とミーティング開始のリンクが記載された電子メールを受け取ります。複数の電子メールアドレスはカンマ（空白なし）で区切ってください。';
$string['apiurl'] = 'Zoom API url';
$string['audio_both'] = 'VoIPと電話';
$string['audio_telephony'] = '電話のみ';
$string['audio_voip'] = 'VoIPのみ';
$string['cachedef_zoomid'] = 'ユーザーのZoomユーザーID';
$string['calendardescriptionintro'] = '\\n記述:\\n{$a}';
$string['calendariconalt'] = 'カレンダーアイコン';
$string['clickjoin'] = 'ミーティング参加ボタンがクリックされた';
$string['connectionfailed'] = 'Connection failed:';
$string['connectionok'] = 'コネクション成功。';
$string['connectionstatus'] = 'connectionステータス';
$string['defaultsettings'] = 'デフォルトZoom設定';
$string['defaultsettings_help'] = 'これらの設定は全ての新規Zoomミーティングとウェビナーの初期設定を定義する。';
$string['downloadical'] = 'iCalダウンロード';
$string['duration'] = '期間(分)';
$string['endtime'] = '終了時刻';
$string['err_duration_nonpositive'] = '期間は正の値でなくてはならない。';
$string['err_duration_too_long'] = '期間は150時間を越えられない。';
$string['err_password'] = 'パスワードは以下の文字のみを含む:[a-z A-Z 0-9 @ - _ *]。最大10文字。';
$string['err_start_time_past'] = '過去を開始日時にすることはできません。';
$string['errorwebservice'] = 'Zoom webservice error:{$a}';
$string['export'] = 'エクスポート';
$string['firstjoin'] = '最初に参加可能';
$string['firstjoin_desc'] = 'スケジュールされたミーティングにユーザーが最初に参加できる時間（開始前の分数）。';
$string['getmeetingreports'] = 'Zoomからのミーティングレポートを取得';
$string['invalid_status'] = 'Status invalid, check the database.';
$string['join'] = '参加';
$string['join_meeting'] = 'ミーティングに参加';
$string['joinbeforehost'] = 'ホストよりも先にミーティングに参加';
$string['jointime'] = '参加時刻';
$string['leavetime'] = '退出時刻';
$string['licensesnumber'] = 'ライセンス数';
$string['lowlicenses'] = 'もしあなたのライセンス数がこれらの要求を越える場合、あなたが新しい活動をユーザーとして生成する際に別のユーザーのステータスを下げてPROライセンスを割り当てます。このオプションはアクティブなPROライセンスが5以上の場合に有効です。';
$string['meeting_finished'] = '完了';
$string['meeting_nonexistent_on_zoom'] = 'Zoomに存在しません';
$string['meeting_not_started'] = '開始しなかった';
$string['meeting_started'] = '進行中';
$string['meeting_time'] = '開始時刻';
$string['modulename'] = 'Zoomミーティング';
$string['modulename_help'] = 'Zoomは承認されたユーザーにオンラインミーティングのホストとなる機能を付与するビデオとWebカンファレンスプラットフォームです。';
$string['modulenameplural'] = 'Zoomミーティング';
$string['newmeetings'] = '新規ミーティング';
$string['nomeetinginstances'] = 'このミーティングのセッションが見当たらない';
$string['noparticipants'] = '今回、このセッションの参加者が見当たらない';
$string['nosessions'] = '既定の時間帯にセッションが見当たらない';
$string['nozooms'] = 'ミーティングなし';
$string['off'] = 'Off';
$string['oldmeetings'] = '終了したミーティング';
$string['on'] = 'On';
$string['option_audio'] = 'オーディオオプション';
$string['option_host_video'] = 'ホストのビデオ';
$string['option_jbh'] = 'ホストよりも先に参加を認める';
$string['option_participants_video'] = '参加者のビデオ';
$string['participants'] = '参加者';
$string['password'] = 'パスワード';
$string['passwordprotected'] = 'パスワードは保護されています';
$string['pluginadministration'] = 'Zoomミーティングの管理';
$string['pluginname'] = 'Zoomミーティング';
$string['privacy:metadata:zoom_meeting_details'] = '各ミーティングインスタンスの情報を格納するデータベーステーブル';
$string['privacy:metadata:zoom_meeting_details:topic'] = 'ユーザーが出席したミーティングの名前';
$string['privacy:metadata:zoom_meeting_participants'] = 'ミーティング参加者の情報を格納するデータベーステーブル';
$string['privacy:metadata:zoom_meeting_participants:duration'] = '参加者がミーティングにどれくらい長く在室したか';
$string['privacy:metadata:zoom_meeting_participants:join_time'] = '参加者がミーティングに参加した時刻';
$string['privacy:metadata:zoom_meeting_participants:leave_time'] = '参加者がミーティングを提出した時刻';
$string['privacy:metadata:zoom_meeting_participants:name'] = '参加者の名前';
$string['privacy:metadata:zoom_meeting_participants:user_email'] = '参加者の電子メールアドレス';
$string['recurringmeeting'] = '繰り返し';
$string['recurringmeeting_help'] = '終了日なし';
$string['recurringmeetinglong'] = '繰り返しミーティング（終了日時なしのミーティング）';
$string['redefinelicenses'] = 'ライセンスの再定義';
$string['report'] = 'レポート';
$string['reportapicalls'] = 'レポートAPIコールを使い果たした';
$string['resetapicalls'] = 'APIコールの許可数をリセット';
$string['search:activity'] = 'Zoom - 活動情報';
$string['sessions'] = 'セッション';
$string['showmedia'] = 'メディアセクションを表示する';
$string['start'] = '開始';
$string['start_time'] = 'いつ';
$string['starthostjoins'] = 'ホストの参加時にビデオを開始';
$string['startpartjoins'] = '参加者の参加時にビデオを開始';
$string['starttime'] = '開始時刻';
$string['status'] = 'ステータス';
$string['title'] = 'タイトル';
$string['topic'] = 'トピック';
$string['unavailable'] = '今回は参加不可';
$string['updatemeetings'] = 'ミーティング設定のZoomからの更新';
$string['usepersonalmeeting'] = 'パーソナルミーティングID {$a} の使用';
$string['webinar'] = 'ウェビナー';
$string['webinar_already_false'] = '<p><b>このモジュールは既にウェビナーではなくミーティングとしてセットされている。あなたはミーティング生成後にこの設定を切り替えることはできません。</b></p>';
$string['webinar_already_true'] = '<p><b>このモジュールは既にミーティングではなくウェビナーとしてセットされている。あなたはウェビナー生成後にこの設定を切り替えることはできません。</b></p>';
$string['webinar_help'] = 'このオプションは未認証のZoomアカウントに対してのみ有効です。';
$string['zoom:addinstance'] = '新規Zoomミーティングの追加';
$string['zoom:view'] = 'Zoomミーティングを見る';
$string['zoomerr'] = 'An error occured with Zoom.';
$string['zoomerr_id_missing'] = 'あなたはコースモジュールIDかインスタンスIDを指定しなければいけません。';
$string['zoomerr_meetingnotfound'] = 'このミーティングはZoom上に存在しません。 <a href="{$a->recreate}">あなたはここから再作成</a>  または  <a href="{$a->delete}"> 完全に削除 </a>してください。';
$string['zoomerr_meetingnotfound_info'] = 'このミーティングはZoom上に存在しません。何か質問があるならばミーティングのホストに連絡してください。';
$string['zoomerr_usernotfound'] = 'Zoom上にあなたのアカウントが見つかりません。もしあなたが初めてZoomを使うならばZoomにログインしてください。 <a href="{$a}" target="_blank">{$a}</a>。Zoomアカウントをアクティブにし、このページをリロードしてミーティングのセットアップを続けて下さい。あるいは、このシステムのあなたの電子メールアドレスがZoom登録のメールアドレスと一致していることをご確認ください。';
$string['zoomurl'] = 'ZoomホームページURL';
