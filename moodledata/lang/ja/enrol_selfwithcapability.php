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
 * Strings for component 'enrol_selfwithcapability', language 'ja', version '4.4'.
 *
 * @package     enrol_selfwithcapability
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = '登録は無効にされているか停止しています。';
$string['canntenrolcapabilitymissing'] = '以下のパーミッションが不足しているため、あなたは登録できません: {$a}';
$string['defaultrole'] = 'デフォルトのロール割り当て';
$string['defaultrole_desc'] = '自己登録時にユーザにデフォルトで割り当てられるロールを選択してください。';
$string['expirymessageenrolledbody'] = '{$a->user} さん

これはあなたのコース「 {$a->course} 」への登録が {$a->timeend} で期限切れになることを通知するためのものです。

サポートが必要な場合、{$a->enroller} にご連絡ください。';
$string['expirymessageenrolledsubject'] = '登録期限通知';
$string['expirymessageenrollerbody'] = '以下のユーザのコース「 {$a->course} 」への登録は次の {$a->threshold} で期限切れとなります:

{$a->users}

登録期間を延長するには {$a->extendurl} にアクセスしてください。';
$string['expirymessageenrollersubject'] = '登録期限通知';
$string['invalidcapability'] = '無効なケイパビリティID: {$a}';
$string['messageprovider:expiry_notification'] = 'selfwithcapability登録期限通知';
$string['pluginname'] = '自己登録 (ケイパビリティ制限)';
$string['pluginname_desc'] = '自己登録のように動作する登録方法です。登録時にケイパビリティを要求するための追加設定があります。';
$string['privacy:metadata'] = '自己登録 (ケイパビリティ制限) はいかなる個人データも保存しません。';
$string['requiredcapabilities'] = '必須ケイパビリティ';
$string['requiredcapabilities_help'] = '選択されたすべてのケイパビリティを持つユーザのみこの方法で登録できます。
<br />
これらのケイパビリティはシステムレベルまたはコースカテゴリレベルのいずれかで保持されている必要があります。';
$string['selfwithcapability:config'] = 'selfwithcapability登録インスタンスを設定する';
$string['selfwithcapability:manage'] = '登録済みユーザを管理する';
$string['selfwithcapability:unenrol'] = 'コースからユーザを登録解除する';
$string['selfwithcapability:unenrolself'] = 'コースから自分自身を登録解除する';
$string['sendexpirynotificationstask'] = 'selfwithcapability登録期限切れ通知タスク';
$string['showhint'] = 'ヒントを表示する';
$string['showhint_desc'] = 'アクセスキーの最初の文字を表示します。';
$string['showunavailableenrolform'] = '利用できない登録インスタンスフォームを表示する';
$string['showunavailableenrolform_desc'] = 'この設定を有効に場合、利用できない登録インスタンスフォームが利用できない理由を説明するメッセージとともに折りたたまれて表示されます。
<br />
そうでない場合、利用できない登録インスタンスフォームは一切表示されません。';
$string['status'] = '既存の登録を許可する';
$string['status_desc'] = '新しいコースで自己登録 (ケイパビリティ制限) を有効にします。';
$string['syncenrolmentstask'] = 'selfwithcapability登録タスクを同期する';
