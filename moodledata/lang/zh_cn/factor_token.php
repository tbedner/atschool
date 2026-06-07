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
 * Strings for component 'factor_token', language 'zh_cn', version '4.4'.
 *
 * @package     factor_token
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['event:token_created'] = '已创建 MFA 令牌';
$string['form:trust'] = '信任此设备以获取 {$a}。';
$string['pluginname'] = '信任此设备';
$string['privacy:metadata'] = '信任此设备因素插件不存储任何个人数据。';
$string['settings:expireovernight'] = 'tokens在一夜之间过期';
$string['settings:expireovernight_help'] = '这使tokens在一夜之间过期，从而防止用户在中午中断。反而，他们将被要求在到期后的第二天开始时进行多因素身份验证。';
$string['settings:expiry'] = '信任期限';
$string['settings:expiry_help'] = '在需要进行新的多因素身份验证之前，设备被信任的持续时间。';
$string['summarycondition'] = '用户先前已信任此设备';
$string['tokenstoredindevice'] = 'ID为{$a->userid}的用户在其设备上存储了一个多因素身份验证令牌。<br>信息：{$a->string}。';
