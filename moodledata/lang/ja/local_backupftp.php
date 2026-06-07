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
 * Strings for component 'local_backupftp', language 'ja', version '4.4'.
 *
 * @package     local_backupftp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access_course'] = '<a style="color:#a41d1d" target="_blank" href="{$a->course_url}">コースにアクセスする</a>';
$string['add_backup'] = 'バックアップを追加するには次にアクセスしてください:';
$string['add_restore'] = 'リストアを追加するには次にアクセスしてください:';
$string['adding_to_category'] = '次のカテゴリに追加されます: {$a->categoria}';
$string['already_added_status'] = 'すでに追加されています。ステータスは次のとおりです: {$a->status}';
$string['backup_courses_and_categories'] = 'バックアップ: コースおよびカテゴリ';
$string['backup_creation_parameters'] = 'バックアップは以下のパラメータで作成されます:';
$string['backup_end'] = 'バックアップ終了日時';
$string['backup_end_time'] = 'バックアップ終了日時';
$string['backup_report'] = 'バックアップレポート';
$string['backup_start'] = 'バックアップ開始日時';
$string['backup_start_time'] = 'バックアップ開始日時';
$string['backupftp:manage'] = 'バックアップを管理する';
$string['categories'] = 'カテゴリ';
$string['category_created_successfully'] = '==> カテゴリ {$a->categoria_nome} が正常に作成されました。';
$string['category_link'] = 'カテゴリ <a href="{$a}" target="blank">ルートカテゴリ</a>';
$string['click_here'] = 'ここをクリック';
$string['course'] = 'コース';
$string['course_added_to_backup_queue'] = 'コース {$a->course_id} がバックアップキューに追加されました。';
$string['course_already_exists'] = 'コースはすでに存在します。';
$string['courses'] = 'コース';
$string['courses_and_categories'] = 'コースおよびカテゴリ';
$string['created_at'] = '作成日時';
$string['created_on'] = '作成日時';
$string['created_on_time'] = '作成日時 {$a->modify}';
$string['cron'] = 'CRON';
$string['cron_task'] = 'CRONタスク';
$string['error_creating_folder'] = 'FTPでの<span style="color:#d10707">次のフォルダ作成中にエラーが発生しました</span>:「<b>{$a->ftppasta}</b>」(エラーメッセージ:<b>{$->errormsg}</b>)!';
$string['error_downloading_file'] = 'MBZファイルのダウンロード中に次のエラーが発生しました: <b>{$a->error}</b>';
$string['error_extracting_mbz'] = 'MBZファイルの展開中にエラーが発生しました。';
$string['file_added_to_restore_queue'] = 'ファイル {$a->file} がリストアキューに追加されました。';
$string['file_found_and_downloaded'] = 'ファイル確認およびダウンロード完了';
$string['file_size'] = 'サイズ {$a->size}';
$string['file_uploaded'] = 'ファイル「 <b>{$a->file}</b> 」が「 <b>{$a->remote_file}</b> 」にアップロードされました!';
$string['ftp_error_connecting'] = 'FTPへの接続中にエラーが発生しました。';
$string['ftp_error_login'] = '{$a->username}@{$a->url} に接続できません。';
$string['ftp_files'] = 'FTPのファイル';
$string['ftp_remote_file_size'] = 'FTPはリモートファイルが「<b>{$a->size} バイト</b>」であると返しました。';
$string['logs'] = 'ログ';
$string['mbz_extracted_successfully'] = 'MBZが正常に展開されました。';
$string['modulename'] = 'バックアップFTP';
$string['nothing_to_execute'] = '実行するものがありません。';
$string['pluginname'] = 'バックアップFTP';
$string['pre_check_failure'] = '事前チェックに失敗しました。';
$string['privacy:metadata'] = 'local_backupftpプラグインは個人データまたはその他機密データを収集または保存しません。提供されたFTP設定を使用してバックアップを実行するだけであり、ユーザまたは転送されるデータに関連する情報を記録または保持することはありません。';
$string['processing_file'] = '処理中: <b>{$a->remote_file}</b> ({$a->size})';
$string['remote_file'] = 'リモートファイル';
$string['report'] = 'レポート';
$string['reports'] = 'レポート';
$string['restore_course_already_exists'] = '<a style="color:#a41d1d" target="_blank" href="{$a->course_url}">コースはすでに存在します。</a>';
$string['restore_courses_and_categories'] = 'リストア: コースおよびカテゴリ';
$string['restore_report'] = 'リストアレポート';
$string['run_cron'] = '実行する:';
$string['runtask_backup'] = 'バックアップを実行するには:';
$string['runtask_click_here'] = 'ここをクリック';
$string['runtask_execute_five_courses'] = '一度に5コースのみ実行する';
$string['runtask_execute_one_course'] = '一度に1コースのみ実行する';
$string['runtask_execute_ten_courses'] = '一度に10コースのみ実行する';
$string['runtask_restore'] = 'リストアを実行するには:';
$string['select_deselect_all'] = '選択/すべてを選択解除する';
$string['send'] = '送信';
$string['settings_categorystart'] = 'ルートカテゴリID';
$string['settings_categorystart_desc'] = 'コースのリストアを開始するルートカテゴリのIDです。';
$string['settings_error'] = 'エラー:';
$string['settings_error_sending_backup'] = '次へのバックアップ送信中にエラーが発生しました:';
$string['settings_file_size'] = 'ファイルサイズ';
$string['settings_ftp'] = 'FTPストレージ';
$string['settings_ftpenable'] = 'FTPに送信する';
$string['settings_ftpnames'] = 'コース名をバックアップファイル名として使用する';
$string['settings_ftpnames_desc'] = 'この設定を有効にした場合、送信されるファイル名はコース名となります。そうでない場合、「backup-moodle2-course-21-name-20240208.mbz」のようにMoodleが割り当てたファイル名となります。';
$string['settings_ftporganize'] = 'FTP上のバックアップをカテゴリ別に整理する';
$string['settings_ftporganize_desc'] = 'ファイルは次のように保存されます: Category/Category/course.mbz';
$string['settings_ftppassword'] = 'FTPパスワード';
$string['settings_ftppasta'] = 'リモートFTPフォルダ';
$string['settings_ftppasta_desc'] = '保存先フォルダは「/」で始めて「/」では終わらないでください (例 /backup, /save/backup)。';
$string['settings_ftppasv'] = 'パッシブモードでファイルを送信しますか?';
$string['settings_ftppasv_desc'] = 'PHPのデフォルトのFTPモードはアクティブモードです。アクティブモードはファイアウォール/NAT/プロクスが影響してほとんど機能しません。そのため、あなたはほとんどの場合パッシブモードを使用する必要があります。';
$string['settings_ftpurl'] = 'FTP URL';
$string['settings_ftpurl_desc'] = 'FTPサーバのIPアドレスまたはホスト名を入力してください。FTPサーバのポートが「21」とは異なる場合、コロン(:) の後にポート番号を付けて指定してください (例: 127.0.0.1:29)。あなたのFTPがSSLを使用する場合、ドメインの前に「ftps://」を追加してください。';
$string['settings_ftpusername'] = 'FTPログイン';
$string['settings_integrations'] = 'インテグレーション';
$string['settings_local'] = 'ローカルストレージ';
$string['settings_localfile'] = 'バックアップをローカルフォルダに保存する';
$string['settings_localfile_desc'] = 'この設定を有効にした場合、バックアップのコピーが以下に指定したローカルフォルダに保存されます。';
$string['settings_localfilepath'] = 'ローカルバックアップフォルダへのパス';
$string['settings_localfilepath_desc'] = 'バックアップをローカルに保存するフォルダのフルパスを入力してください。サーバにこのフォルダへの書き込み権限があることを確認してください。空白の場合、バックアップは次に保存されます: [MOODLEDATA]/backup/';
$string['settings_mbz_settings'] = 'MBZ生成設定';
$string['settings_restore_settings'] = 'リストア設定';
$string['settings_rootsettinganonymize'] = 'ルートユーザを匿名化する';
$string['settings_rootsettingusers'] = 'ルートユーザ設定';
$string['status'] = 'ステータス';
$string['submit'] = '送信';
$string['temporary_files_deleted'] = '一時ファイルが削除されました。';
$string['total_files'] = '合計ファイル数:';
$string['total_in_category'] = 'このカテゴリ内の合計: {$a->total}';
$string['view_backup_report'] = 'バックアップを追跡するには次にアクセスしてください:';
$string['view_restore_report'] = 'リストアを追跡するには次にアクセスしてください:';
