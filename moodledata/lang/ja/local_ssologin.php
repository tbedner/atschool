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
 * Strings for component 'local_ssologin', language 'ja', version '4.4'.
 *
 * @package     local_ssologin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eventssologinattempted'] = 'SSOログインが試行されました。';
$string['invalidtoken'] = '無効または期限切れのトークンです。';
$string['loginfailure'] = '次のユーザのSSOログインに失敗しました: {$a}';
$string['loginsuccess'] = '次のユーザが正常にSSOログインしました: {$a}';
$string['pluginname'] = 'SSOログイン';
$string['privacy:metadata'] = 'このプラグインはいかなる個人データも保持しません。';
$string['secretkey'] = '共有シークレットキー';
$string['secretkey_desc'] = 'SSOリクエストの署名/検証に使用される共有HMACキーです。';
$string['tokenexpire'] = 'トークン有効期限 (秒)';
$string['tokenexpire_desc'] = 'トークンが期限切れとみなされるまでの最大期間です。';
