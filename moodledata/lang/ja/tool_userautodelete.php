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
 * Strings for component 'tool_userautodelete', language 'ja', version '4.4'.
 *
 * @package     tool_userautodelete
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['a_users_would_be_deleted'] = '次の {$a} ユーザは削除されます。';
$string['a_users_would_be_warned'] = '次の {$a} ユーザは警告メールを受信することになります。';
$string['affected_users'] = '対象ユーザ';
$string['back_to_settings'] = '設定に戻る';
$string['current_configuration'] = '現在の設定';
$string['current_configuration_table_desc'] = 'このテーブルでは非アクティブユーザのチェックがバックグラウンドで実行される次回の時刻および警告メールおよびユーザ削除のために構成された閾値が一覧表示されます。さらに削除処理から除外されるユーザロールもここに一覧表示されます。';
$string['delete_email_sent_to_user'] = 'ID {$a} のユーザに削除通知メールが送信されました。';
$string['deleted'] = '削除済み';
$string['dry_run'] = 'ドライラン';
$string['dry_run_affected_users_desc'] = 'ここに一覧表示されたユーザは警告メールを受信するか、すぐに削除されます。ユーザが表示されていない場合、設定された閾値より長い間非アクティブなユーザが存在しないか、ユーザがプラグイン設定で除外されています。';
$string['dry_run_explanation'] = 'このページでは次のチェック間隔に実行される処理を示しています。どの処理もまだ実際には実行されていません!';
$string['error_anonymizing_user'] = 'ID {$a} のユーザの匿名化に失敗しました。';
$string['error_delete_email_body_empty'] = '削除メール本文が空白です。';
$string['error_delete_email_subject_empty'] = '削除メール件名は空白にできません。';
$string['error_delete_threshold_days_negative'] = '削除閾値日数はゼロより大きくする必要があります。';
$string['error_deleting_user'] = 'ID {$a} のユーザの削除に失敗しました。';
$string['error_invalid_config_aborting'] = '無効なプラグイン設定が見つかりました。中止します ...';
$string['error_invalid_role_id'] = '除外ロールリストに無効なロールID {$a} が見つかりました。これはプラグインのバグである可能性があります。プラグイン開発者にご連絡ください。';
$string['error_sending_delete_mail_to_user'] = 'ID {$a} のユーザへの削除通知メール送信に失敗しました。';
$string['error_sending_warning_mail_to_user'] = 'ID {$a} のユーザへの警告メール送信に失敗しました。';
$string['error_warning_email_body_empty'] = '警告メール本文が空白です。';
$string['error_warning_email_subject_empty'] = '警告メール件名は空白にできません。';
$string['error_warning_threshold_days_geq_delete'] = '警告閾値日数は削除閾値日数より小さくする必要があります。';
$string['error_warning_threshold_days_negative'] = '警告閾値日数はゼロより大きくする必要があります。';
$string['inactivity_warning'] = '非アクティブ警告';
$string['last_check'] = '最終チェック';
$string['next_check'] = '次回チェック';
$string['next_check_never'] = 'なし（プラグインが無効）';
$string['next_check_would'] = '次回チェック予定';
$string['no_users_to_delete'] = '削除対象ユーザは見つかりませんでした。';
$string['no_users_to_warn'] = '警告メール対象ユーザは見つかりませんでした。';
$string['page_title_dryrun'] = '自動ユーザ削除 (ドライラン)';
$string['plugin_disabled_skipping_execution'] = 'プラグインが全体で無効化されているため、処理をスキップします。';
$string['pluginname'] = '自動ユーザ削除';
$string['recovered'] = '復元済み';
$string['reltime_prefix_in'] = 'あと';
$string['reltime_suffix_ago'] = '前';
$string['setting_anonymize_user_data'] = '削除ユーザを匿名化する';
$string['setting_anonymize_user_data_desc'] = 'ユーザを削除する場合、Moodleは設計上、ユーザレコードの一部をデータベース内に保持します。これには姓、名、メールアドレス、最終IPアドレスおよびその他機密情報が含まれます。これはあなたの組織の特定のデータプライバシーポリシーまたは地域の法的解釈によっては懸念事項となる場合があります。この設定を有効にした場合、残りのユーザデータはすべて匿名化されるため、削除ユーザアカウントから前の所有者を追跡する可能性が完全になくなります。';
$string['setting_delete_email_body'] = 'メール本文';
$string['setting_delete_email_body_default'] = '<p>こんにちは</p>
<p>あなたのアカウントは利用がないため、私たちのサイトから削除されました。あなたが私たちのサービスを継続利用したい場合、新しいアカウントを作成してください。</p>';
$string['setting_delete_email_body_desc'] = '削除通知メールの本文です。';
$string['setting_delete_email_enable'] = '削除通知';
$string['setting_delete_email_enable_desc'] = 'この設定を有効にした場合、ユーザは最終メールを受信します。その後、直ちに削除されます。これはユーザ削除確認を送信するために使用できます。';
$string['setting_delete_email_subject'] = 'メール件名';
$string['setting_delete_email_subject_default'] = 'あなたのアカウントが削除されました。';
$string['setting_delete_email_subject_desc'] = '削除通知メールの件名です。';
$string['setting_delete_threshold_days'] = '削除閾値';
$string['setting_delete_threshold_days_desc'] = 'ユーザが削除される非アクティブ日数です。ユーザがこの日数ログインしない場合のみ、削除は実行されます。';
$string['setting_dryrun'] = 'ドライラン';
$string['setting_dryrun_button'] = 'ドライランを実行する';
$string['setting_dryrun_desc'] = 'あなたはドライランで警告メッセージを受信するか、次のチェック間隔で削除されるすべてのユーザを一覧表示できます。これはプラグインが正しく設定されていることを確認およびどのユーザが影響を受けるか確認するのに有用です。ドライランは処理を実行しないため、完全に非破壊的です!';
$string['setting_enable'] = 'プラグインを有効化';
$string['setting_enable_desc'] = 'プラグインをグローバルに有効または無効にします。この設定が無効にされた場合、何も実行されません。';
$string['setting_header_deletion_warning'] = '削除警告';
$string['setting_header_deletion_warning_desc'] = '削除警告メールの設定です。警告メールはユーザが削除される数日前に送信されます。これはユーザにアカウントがまもなく削除されることを知らせた上でアカウントを有効に保つためにログインするための時間を与えます。';
$string['setting_header_user_deletion'] = 'ユーザ削除';
$string['setting_header_user_deletion_desc'] = 'ユーザ自動削除設定です。設定された日数以上ログインぜずに上の設定で除外されないユーザは自動的に削除されます。';
$string['setting_ignore_roles'] = '除外ロール';
$string['setting_ignore_roles_desc'] = '選択されたロールの少なくとも1つが割り当てられているすべてのユーザは決して削除されることはありません。';
$string['setting_ignore_siteadmins'] = 'サイト管理者を除外する';
$string['setting_ignore_siteadmins_desc'] = 'グローバルサイト管理者は削除できません。自動削除処理に含めるには管理者ロールを取り消してください。';
$string['setting_plugin_desc'] = 'このプラグインでは設定可能な日数ログインしていないユーザを自動的に削除します。これはあなたのデータベースをクリーンに保ちながら不要な古いアカウントを削除するのに有用です。このプラグインはユーザが削除される数日前に警告メールを送信するよう設定できます。これによりユーザはログインし直してアカウントを有効に保持できます。さらにGDPRに準拠した方法でユーザを削除するため、ユーザレコード内に個人を特定できる情報 (PII: personally identifiable information) の痕跡を残しません。';
$string['setting_task_execution_interval'] = 'チェック間隔';
$string['setting_task_execution_interval_button'] = 'チェック間隔を設定';
$string['setting_task_execution_interval_desc'] = '非アクティブユーザのチェックは Moodle cron によるスケジュールタスクで実行されます。以下のボタンから実行間隔を設定できます。';
$string['setting_task_logs'] = 'ログ';
$string['setting_task_logs_button'] = 'ログを表示する';
$string['setting_task_logs_desc'] = 'このプラグインは実行したすべての処理をそれぞれのスケジュールタスクログに記録します。あなたが以下のボタンをクリックした場合、過去に実行されたすべてのログにアクセスできます。';
$string['setting_warning_email_body'] = 'メール本文';
$string['setting_warning_email_body_default'] = '<p>こんにちは</p>
<p>私たちのサイトのあなたのアカウントは長期間利用がありません。データ保護方針に従って数日以内にアカウントが削除されるのを防ぐため、あなたのアカウントを保持したい場合は今すぐログインし直してください。</p>
<p>あなたがアカウントの削除を希望する場合、このメッセージは無視してください。</p>';
$string['setting_warning_email_body_desc'] = '警告メールの本文です。';
$string['setting_warning_email_enable'] = '削除警告';
$string['setting_warning_email_enable_desc'] = 'この設定を有効にした場合、削除される数日前にユーザに警告メールが送信されます。';
$string['setting_warning_email_subject'] = 'メール件名';
$string['setting_warning_email_subject_default'] = 'あなたのアカウントは間もなく削除されます - 対応が必要です!';
$string['setting_warning_email_subject_desc'] = '警告メールの件名です。';
$string['setting_warning_threshold_days'] = '警告閾値';
$string['setting_warning_threshold_days_desc'] = 'ユーザが削除される前に警告メールが送信される日数です。これは削除閾値に関連しています。';
$string['task_check_and_delete_users'] = 'ユーザを確認および削除する';
$string['user_anonymized'] = 'ID {$a} のユーザが匿名化されました。';
$string['user_deleted'] = 'ID {$a} のユーザが削除されました。';
$string['user_recovered'] = 'ID {$a} のユーザは過去に非アクティブとしてフラグが立てられていましたが復帰しました。ユーザは削除されません。';
$string['users_to_delete'] = '削除対象ユーザ';
$string['users_to_delete_a'] = '削除対象となる {$a} ユーザが見つかりました。';
$string['users_to_warn'] = '警告対象ユーザ';
$string['users_to_warn_a'] = '警告メール対象となる {$a} ユーザが見つかりました。';
$string['warned'] = '警告済み';
$string['warning_email_disabled'] = '警告メールは無効にされています。';
$string['warning_email_disabled_skipping'] = '警告メール送信は無効にされています。ステップをスキップします ...';
$string['warning_email_sent_to_user'] = 'ID {$a} のユーザに警告メールが送信されました。';
