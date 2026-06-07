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
 * Strings for component 'enrol_temporaryaccess', language 'ja', version '4.4'.
 *
 * @package     enrol_temporaryaccess
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cantenrol'] = '登録は無効、非アクティブまたは利用できません。';
$string['cantenrolcapabilitymissing'] = '次の権限がないため、あなたはコースにアクセスできません: {$a}';
$string['defaultcaps'] = 'デフォルト必須ケイパビリティ';
$string['defaultcaps_desc'] = 'カンマで区切られたケイパビリティ名リストです。例) "moodle/category:viewhiddencategories"';
$string['defaultrole'] = 'デフォルトロール割り当て';
$string['defaultrole_desc'] = 'この登録方法を使用するユーザに割り当てるデフォルトロールを選択してください。';
$string['enrolicon'] = 'コース登録アイコン';
$string['enrolicon_desc'] = 'この登録方法が設定されたコースのサイトページに表示されるアイコンです。<br>
有効なFontAwesomeアイコン名を指定してください。あなたはこのフィールドを空白にして画像を使用することもできます:
ファイル名を「<samp>enrolicon</samp> 」にして<samp>enrol/temporaryaccess/pix/</samp>フォルダ内に入れてください。<br>
注意: この変更を実際に有効にするにはサイトのキャッシュを削除する必要があるかもしれません。';
$string['enrolme'] = 'アクセス';
$string['gotoenrolmentpage'] = '登録ページに戻る';
$string['invalidcapability'] = '無効なケイパビリティ識別子です: {$a}';
$string['password'] = 'アクセスキー';
$string['password_help'] = '値が指定された場合、この方法でのコースアクセス時にユーザはパスワードを入力する必要があります。<br>
値が指定されない場合、パスワードは要求されません。';
$string['passwordinvalid'] = '無効なアクセスキーです。';
$string['pluginname'] = '一時アクセス';
$string['privacy:metadata'] = '一時アクセス登録プラグインはいかなる個人データも保存しません。';
$string['requiredcapabilities'] = '必須ケイパビリティ';
$string['requiredcapabilities_help'] = 'この方法でコースにアクセスできるのは選択されたすべてのケイパビリティを持つユーザのみです。<br>
ケイパビリティはコースにアクセスする前に保持している必要があるため、通常、システムまたはコースカテゴリレベルで保持する必要があります。';
$string['requirepassword'] = 'アクセスキーを要求する';
$string['requirepassword_desc'] = 'この設定を有効にした場合、この登録方法の新しいインスタンス作成時にアクセスキーの設定が必要となります。';
$string['role'] = 'ロール割り当て';
$string['role_help'] = 'この登録方法でコースにアクセスするユーザにはどのようなロールを割り当てる必要がありますか?';
$string['showunavailableenrolform'] = '表示されない登録インスタンスフォーム';
$string['showunavailableenrolform_desc'] = 'この設定を有効にした場合、利用できないインスタンス登録フォームが利用できない理由を説明するメッセージとともに折りたたまれて表示されます。<br>
そうでない場合、利用できない登録インスタンスフォームは一切表示されません。';
$string['status'] = '有効';
$string['status_help'] = '有効にされていない場合、どのユーザもこの登録方法でコースにアクセスできません。';
$string['temporaryaccess:config'] = '一時アクセス登録インスタンスを設定する';
$string['temporaryaccess:manage'] = '登録済みユーザを一時アクセスで管理する';
$string['tempswitchback'] = '私の通常ロールに戻る';
$string['tempswitchtorole'] = '一時的に {$a} ロールに切り替える';
$string['usepasswordpolicy'] = 'パスワードポリシーを使用する';
$string['usepasswordpolicy_desc'] = 'アクセスキーに標準的なパスワードポリシーを使用します。';
