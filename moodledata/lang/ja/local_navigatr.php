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
 * Strings for component 'local_navigatr', language 'ja', version '4.4'.
 *
 * @package     local_navigatr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced_settings'] = '高度な設定';
$string['api_unavailable'] = 'API利用不可';
$string['auth_failed'] = '認証失敗';
$string['badge'] = 'バッジ';
$string['badge_help'] = '学習者がこのコースを完了した際に発行するバッジを選択してください。バッジはコース完了時に学生に自動発行されます。';
$string['badge_issuance_queued'] = 'バッジ再発行がキューに追加されました。';
$string['badge_issued_successfully'] = 'バッジが正常に発行されました。';
$string['badge_mapping_saved'] = 'バッジマッピングが正常に保存されました。';
$string['badge_preview'] = 'バッジプレビュー';
$string['badgedesc'] = 'バッジ説明';
$string['cachedef_badges'] = 'Navigatrバッジキャッシュ';
$string['cachedef_badges_desc'] = 'パフォーマンス向上のためにNavigatr APIからバッジ情報をキャッシュします。';
$string['cachedef_locks'] = 'Navigatrロックキャッシュ';
$string['cachedef_locks_desc'] = '競合を防ぐためにNavigatr操作のロック情報をキャッシュします。';
$string['cachedef_providers'] = 'Navigatrプロバイダキャッシュ';
$string['cachedef_providers_desc'] = 'パフォーマンス向上のためにNavigatr APIからプロバイダ情報をキャッシュします。';
$string['cachedef_user_detail'] = 'Navigatrユーザ詳細キャッシュ';
$string['cachedef_user_detail_desc'] = 'パフォーマンス向上のためにNavigatr APIからユーザ詳細情報をキャッシュします。';
$string['change_mapping'] = 'バッジを変更する';
$string['connection_failed'] = '接続失敗';
$string['connection_failed_generic'] = '接続失敗';
$string['connection_removed'] = 'Navigatr接続が正常に削除されました。';
$string['connection_success_simple'] = '接続成功!';
$string['connection_successful'] = '接続成功';
$string['course_not_found'] = 'コースが見つかりませんでした。';
$string['create_deletion_request'] = '新しいデータ削除リクエストを作成する';
$string['create_export_request'] = '新しいデータエクスポートリクエストを作成する';
$string['current_mapping'] = '現在のバッジマッピング';
$string['decryption_failed'] = 'パスワード復号化に失敗しました。あなたの認証情報を再設定してください。';
$string['duplicate_badge_prevented'] = 'バッジ重複発行を防ぎました。';
$string['encryption_failed'] = 'パスワード暗号化に失敗しました。再度お試しください。';
$string['environment'] = '環境';
$string['environment_help'] = 'APIコールに使用するNavigatr環境を選択してください。本番: 実際にバッジ発行するライブ環境です。ステージング: 開発およびテスト用のテスト環境です。';
$string['environment_production'] = '本番';
$string['environment_staging'] = 'ステージング';
$string['error_auth_failed'] = '認証に失敗しました。あなたのユーザ名およびパスワードを確認してください。';
$string['error_invalid_credentials'] = '無効な認証情報です (HTTP 401)。あなたのユーザ名およびパスワードを確認してください。';
$string['error_network'] = 'ネットワークエラー: Navigatr APIに到達できません。あなたのサーバのインターネット接続を確認してください。';
$string['error_no_providers'] = 'プロバイダが見つかりません。あなたのアカウントにプロバイダ管理者アクセス権があることを確認してください。';
$string['error_not_found'] = 'リソースが見つかりませんでした (HTTP 404)。バッジまたはプロバイダが削除された可能性があります。';
$string['event_badge_issuance_failed'] = 'バッジ発行失敗';
$string['event_badge_issuance_retry'] = 'バッジ再発行がキューに追加されました。';
$string['event_badge_issuance_success'] = 'バッジが正常に発行されました。';
$string['eventapiconnectiontested'] = 'API接続をテストしました。';
$string['eventapirequestfailed'] = 'APIリクエストに失敗しました。';
$string['eventbadgeissuancequeued'] = 'バッジ発行がキューに追加されました。';
$string['eventcoursemappingrestored'] = 'コースマッピングがリストアされました。';
$string['eventcoursemappingskipped'] = 'コースマッピングがスキップされました。';
$string['eventtokenrefreshfailed'] = 'トークン更新に失敗しました。';
$string['help_badge_config'] = 'バッジ設定に関してさらに学びます。';
$string['help_center_link'] = 'Navigatrヘルプセンターにアクセスします。';
$string['help_center_url'] = 'https://help.navigatr.app/';
$string['help_setup_guide'] = '設定のサポートが必要ですか? 私たちの {$a} にアクセスしてください。';
$string['invalid_method'] = '無効なメソッド: {$a}';
$string['mapping_removed'] = 'バッジマッピングが正常に削除されました。';
$string['mapping_saved'] = 'バッジマッピングが正常に保存されました。';
$string['menu_description'] = 'コース完了の自動バッジ発行を設定します。';
$string['menu_name'] = 'Navigatrバッジ';
$string['missing_mapping'] = 'このコースのバッジマッピングが見つかりませんでした。';
$string['missing_user_field'] = 'ユーザフィールド不足: {$a}';
$string['missing_user_fields'] = 'ユーザが必須項目 (email, firstname, lastname) を入力していません。';
$string['navigatr:configurecourse'] = 'Navigatrバッジマッピングを設定する';
$string['navigatr:configurecourse_desc'] = 'ユーザがコースをNavigatrバッジにマッピングして自動発行できるようにします。';
$string['navigatr:managecredentials'] = 'Navigatr認証情報を管理する';
$string['navigatr:managecredentials_desc'] = 'ユーザがNavigatr APIの認証情報および設定を設定できるようにします。';
$string['navigatr_badge_records'] = 'Navigatrバッジ発行レコード';
$string['navigatr_settings'] = 'Navigatr設定';
$string['network_error_or_timeout'] = 'ネットワークエラーまたはタイムアウトが発生しました。';
$string['no_mapping_found'] = 'コースのマッピングが見つかりませんでした。';
$string['password'] = 'Navigatrパスワード';
$string['password_help'] = 'あなたのNavigatrパスワードを入力してください。これは保存前に暗号化されます。';
$string['password_unmask_warning'] = 'パスワードは編集時に表示されます。これは保存前に暗号化されます。';
$string['pluginname'] = 'Navigatr';
$string['privacy:metadata:local_navigatr_audit'] = 'バッジ発行監査レコードです。';
$string['privacy:metadata:local_navigatr_audit:badge_id'] = 'バッジIDです。';
$string['privacy:metadata:local_navigatr_audit:courseid'] = 'コースIDです。';
$string['privacy:metadata:local_navigatr_audit:provider_id'] = 'プロバイダIDです。';
$string['privacy:metadata:local_navigatr_audit:status'] = '発行ステータスです。';
$string['privacy:metadata:local_navigatr_audit:timecreated'] = '作成時間';
$string['privacy:metadata:local_navigatr_audit:userid'] = 'ユーザIDです。';
$string['privacy:metadata:local_navigatr_map'] = 'コースバッジマッピング設定です。';
$string['privacy:metadata:local_navigatr_map:badge_id'] = 'バッジIDです。';
$string['privacy:metadata:local_navigatr_map:courseid'] = 'コースIDです。';
$string['privacy:metadata:local_navigatr_map:provider_id'] = 'プロバイダIDです。';
$string['privacy:metadata:local_navigatr_map:timemodified'] = '最終更新日時です。';
$string['privacy:metadata:navigatr'] = 'です。Navigatr API';
$string['privacy:metadata:navigatr:purpose'] = 'コース完了にデジタルバッジを発行します。';
$string['privacy:metadata:navigatr:recipient_email'] = '受信者メールアドレスです。';
$string['privacy:metadata:navigatr:recipient_firstname'] = '受信者名です。';
$string['privacy:metadata:navigatr:recipient_lastname'] = '受信者姓です。';
$string['provider'] = 'プロバイダです。';
$string['provider_admin_notice'] = '設定済みNavigatrユーザがバッジマッピングへアクセスおよび管理可能なNavigatrプロバイダ管理者であることを確認してください。';
$string['provider_config_notice'] = 'サイト管理者が「<a href="{$a}">サイト管理 → プラグイン → Navigatr</a>」であなたの Navigatrユーザ名およびパスワードを追加していることを確認してください。';
$string['provider_help'] = 'あなたが発行したいバッジを所有するNavigatrプロバイダを選択してください。あなたがバッジにアクセスおよび管理するにはプロバイダ管理者である必要があります。';
$string['remove_connection'] = '接続を削除する';
$string['remove_connection_confirm'] = '本当に現在のNavigatr接続を削除してもよろしいですか？ これにより保存されたユーザ名およびパスワードが消去されます。すべての既存のバッジマッピングは無効にされます。';
$string['remove_mapping'] = 'バッジを削除する';
$string['remove_mapping_confirm'] = '本当にこのコースのバッジマッピングを削除してもよろしいですか？ バッジを削除した場合、今後の発行は停止されますが、既存のバッジは保持されます。';
$string['save_changes'] = '変更を保存する';
$string['save_mapping'] = 'マッピングを保存する';
$string['security_note'] = 'すべての認証情報はサイト固有の鍵を使用したAES-256-CBC暗号化で暗号化されます。';
$string['select_badge'] = 'バッジを選択する';
$string['select_badge_continue'] = 'マッピングを保存する';
$string['select_provider'] = 'プロバイダを選択する';
$string['select_provider_continue'] = '続けてバッジを選択する';
$string['selected_provider'] = '選択済みプロバイダ';
$string['settings_description'] = '学習者のコース完了時に自動発行されるよう、このコースをNavigatrバッジにマッピングします。';
$string['settingssaved'] = '設定が正常に保存されました。';
$string['test_connection'] = 'テスト接続';
$string['timeout'] = 'HTTPタイムアウト (秒)';
$string['timeout_help'] = 'HTTPリクエストのタイムアウト (秒) です。Navigatr APIとの通信時にタイムアウトエラーが発生する場合、この値を増やしてください。';
$string['timeout_invalid'] = 'タイムアウトは1～300秒の間にしてください。';
$string['unknown_course'] = '不明なコース';
$string['unknown_provider'] = '不明なプロバイダ';
$string['user_agent'] = 'Moodle-Navigatr-Plugin/1.0';
$string['user_data_deleted'] = 'ユーザデータが正常に削除されました。';
$string['user_not_found'] = 'ユーザが見つかりませんでした。';
$string['username'] = 'Navigatrユーザ名';
$string['username_help'] = 'あなたのNavigatrユーザ名を入力してください。これはバッジ管理にアクセスできる権限を持つプロバイダ管理者アカウントである必要があります。';
$string['view_badge'] = 'バッジを表示する';
