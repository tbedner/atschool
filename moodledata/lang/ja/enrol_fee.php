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
 * Strings for component 'enrol_fee', language 'ja', version '4.4'.
 *
 * @package     enrol_fee
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'ロールを割り当てる';
$string['cost'] = '登録料';
$string['costerror'] = '登録料は数字である必要があります。';
$string['currency'] = '通貨';
$string['defaultrole'] = 'デフォルトのロール割り当て';
$string['defaultrole_desc'] = '支払い後にユーザに割り当てるロールを選択してください。';
$string['enrolenddate'] = '終了日';
$string['enrolenddate_help'] = 'この設定を有効にした場合、ユーザはこの日以降のみ登録できます。';
$string['enrolenddaterror'] = '登録終了日は開始日の前に設定できません。';
$string['enrolperiod'] = '登録期間';
$string['enrolperiod_desc'] = '登録が有効なデフォルトの期間です。ゼロに設定した場合、登録期間はデフォルトで無制限となります。';
$string['enrolperiod_help'] = 'ユーザの登録時から開始する登録が有効な期間です。この設定を無効にした場合、登録期間は無制限となります。';
$string['enrolstartdate'] = '開始日';
$string['enrolstartdate_help'] = 'この設定を有効にした場合、ユーザはこの日以降のみ登録できます。';
$string['expiredaction'] = '登録有効期限切れアクション';
$string['expiredaction_help'] = 'ユーザの登録期限切れ時に実行するアクションを選択してください。ユーザの登録解除時、一部のユーザデータおよび設定が削除されることに留意してください。';
$string['fee:config'] = '支払い登録インスタンスの登録を設定する';
$string['fee:manage'] = '登録済みユーザを管理する';
$string['fee:unenrol'] = 'ユーザをコースから登録解除する';
$string['fee:unenrolself'] = 'コースから自分自身を登録解除する';
$string['nocost'] = 'このコースの登録費は不要です!';
$string['paymentaccount'] = '支払いアカウント';
$string['paymentaccount_help'] = '登録料はこのアカウントに支払われます。';
$string['pluginname'] = '支払い時登録';
$string['pluginname_desc'] = 'あなたは支払い登録方法による登録で支払いを必要とするコースをセットアップできます。コース料金がゼロに設定された場合、学生は登録時に支払いを要求されません。あなたがここで設定できるサイト全体の料金のデフォルト、そして、個別のコースで独自に料金を設定できるコース設定があります。コース料金はサイト料金をオーバーライドします。';
$string['privacy:metadata'] = '支払い登録プラグインでの登録ではいかなる個人データも保持しません。';
$string['purchasedescription'] = 'コース {$a} の登録';
$string['sendpaymentbutton'] = '支払いタイプを選択する';
$string['status'] = '支払い登録での登録を許可する';
$string['status_desc'] = 'デフォルトでユーザがコース登録時に支払えるようにします。';
