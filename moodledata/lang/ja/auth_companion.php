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
 * Strings for component 'auth_companion', language 'ja', version '4.4'.
 *
 * @package     auth_companion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_companiondescription'] = 'ログインしたユーザがコンパニオンアカウントを利用できるようにする認証プラグインです。';
$string['clean_old_companion_accounts'] = '古いコンパニオンアカウントを削除する';
$string['companion:allowcompanion'] = 'コンパニオンアカウントを許可する';
$string['companion:useascompanion'] = 'コンパニオンアカウントにこのロールを使用する';
$string['companionrole'] = 'コンパニオンロール';
$string['companionrole_definition'] = '利用可能なロールを定義するにはケイパビリティ「auth/companion:useascompanion」を「Allow」に設定してください。';
$string['delete_data'] = 'データを削除する';
$string['error_empty_emaildomain'] = 'エラー: ドメインが空です。';
$string['error_wrong_emaildomain'] = 'エラー: メールドメインが正しくありません!';
$string['info_plugin_remains_deactivated'] = 'プラグインは無効のままにされます。';
$string['info_using_companion'] = '現在、あなたはコンパニオンアカウント「 <strong>{$a}</strong> 」を使用しています。';
$string['info_using_origin'] = '現在、あなたは自分のアカウント「 <strong>{$a}</strong> 」を使用しています。';
$string['override_email'] = 'メールアドレスをオーバーライドする';
$string['pluginname'] = 'コンパニオンアカウント';
$string['privacy:metadata'] = 'コンパニオン認証プラグインはいかなる個人データも保存しません。';
$string['privacy:metadata:auth_companion'] = 'コンパニオンアカウント';
$string['privacy:metadata:auth_companion:authsubsystem'] = 'このプラグインは認証サブシステムに接続されています。';
$string['privacy:metadata:auth_companion:companionid'] = 'コンパニオンユーザのIDです。';
$string['privacy:metadata:auth_companion:mainuserid'] = 'メインユーザのIDです。';
$string['privacy:metadata:auth_companion:tableexplanation'] = 'ユーザのMoodleアカウントにリンクされたコンパニオンアカウントです。';
$string['privacy:metadata:auth_companion:timecreated'] = 'コンパニオンユーザアカウントが作成されたタイムスタンプです。';
$string['setting_email_option_force_override'] = 'メールオーバーライドを強制する';
$string['setting_email_option_help'] = 'コンパニオンメールアドレスは現在のユーザのメールアドレスで上書きできます。';
$string['setting_email_option_no_override'] = 'メールオーバーライドなし';
$string['setting_email_option_optional'] = 'メールアドレスの上書きをユーザに決定させます。';
$string['setting_email_options'] = 'メールオプション';
$string['setting_email_options_help'] = '設定「 $CFG->authloginviaemail 」が設定されている場合、あなたはメールのオーバーライドを許可できません!';
$string['setting_emaildomain'] = 'メールを送信しないドメイン';
$string['setting_emaildomain_help'] = 'このドメインはコンパニオンユーザの一時的なメールアドレスに使用されます。これはメールを送信できないドメインにする必要があります。';
$string['setting_forcedeletedata'] = 'データ削除を強制する';
$string['setting_forcedeletedata_help'] = 'この設定が有効にされた場合、スイッチバック時にコンパニオンユーザのデータは削除されます。そうでない場合、ユーザが自分で決定できます。';
$string['setting_forcelogin'] = '再ログインを強制する';
$string['setting_forcelogin_help'] = 'この設定でユーザは元のアカウントへの切り替え時に再ログインの必要がなくなります。';
$string['setting_namesuffix'] = '氏名の接尾辞';
$string['setting_namesuffix_help'] = 'この値はあなたの氏名の接尾辞として使用されます。';
$string['switch_back'] = 'スイッチバック';
$string['switch_back_text'] = 'あなたの元のアカウントに戻ります。';
$string['switch_to_companion'] = 'コンパニオンにスイッチする';
$string['switch_to_companion_note_email_override_force'] = '現在あなたがログインしているメールアドレスがあなたのコンパニオンアカウントに使用されます。';
$string['switch_to_companion_note_email_override_no'] = 'あなたのコンパニオンアカウントにはランダムな仮のメールアドレスが使用されます。';
$string['switch_to_companion_note_email_override_optional'] = 'あなたのコンパニオンアカウントにあなたのメールアドレスを使用するかどうかを選択できます。';
$string['switch_to_companion_text'] = 'あなたの現在のログインはあなたのコンパニオンアカウントに変更されます。';
$string['wrong_or_missing_role'] = 'コンパニオンロールが正しくないか、ありません。';
