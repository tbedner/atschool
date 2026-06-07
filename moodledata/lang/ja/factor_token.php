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
 * Strings for component 'factor_token', language 'ja', version '4.4'.
 *
 * @package     factor_token
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['event:token_created'] = 'MFAトークンが作成されました。';
$string['form:trust'] = 'この {$a} 用デバイスを信頼します。';
$string['pluginname'] = 'このデバイスを信頼する';
$string['privacy:metadata'] = 'このデバイスを信用する要素プラグインはいかなる個人データも保存しません。';
$string['settings:expireovernight'] = '一晩で信頼を破棄する';
$string['settings:expireovernight_help'] = 'これによりトークンは一晩で強制的に失効して、ユーザは日中の中断を防げます。その代わり有効期限が切れた後、ユーザには1日の始まりに多要素認証が要求されます。';
$string['settings:expiry'] = '信頼期間';
$string['settings:expiry_help'] = '新しい多要素認証を要求する前にデバイスが信頼される期間です。';
$string['summarycondition'] = 'ユーザが以前にこのデバイスを信頼したことがあります。';
$string['tokenstoredindevice'] = 'ID {$a->userid} のユーザのデバイスに多要素認証トークンが保存されていました。
<br />
情報: {$a->string}';
