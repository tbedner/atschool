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
 * Strings for component 'factor_grace', language 'zh_cn', version '4.4'.
 *
 * @package     factor_grace
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['info'] = '允许在指定时间段内无其他因素登录';
$string['pluginname'] = '宽限期';
$string['preferences'] = '用户首选项';
$string['privacy:metadata'] = '宽限期因素插件不存储任何个人数据';
$string['redirectsetup'] = '必须先完成多重身份验证的设置，然后才能继续';
$string['revokeexpiredfactors'] = '撤销过期宽限期因素';
$string['settings:customwarning'] = '警告横幅内容';
$string['settings:customwarning_help'] = '在此处添加内容，以将宽限警告通知替换为自定义 HTML 内容。在文本中添加 {timeremaining} 会将其替换为用户的当前宽限期，而 {setuplink} 将替换为用户的设置页面的 URL。';
$string['settings:forcesetup'] = '强制因子设置';
$string['settings:forcesetup_help'] = '在宽限期到期时，强制用户进入首选项页面以设置多重身份验证。如果未选中，则在宽限期到期时，用户将无法进行身份验证。';
$string['settings:graceperiod'] = '宽限期';
$string['settings:graceperiod_help'] = '用户可以在未配置和启用因素的情况下访问站点的时间段';
$string['settings:ignorelist'] = '忽略的因素';
$string['settings:ignorelist_help'] = '如果用户可以使用其他因素通过多因素身份验证进行身份验证，则宽限期将不会给予积分。在决定是否给予积分时，此处的任何因素将不计入宽限期。这可以允许宽限期允许在其他因素（如电子邮件）存在配置或系统问题时进行身份验证。';
$string['setupfactors'] = '您目前处于宽限期内，一旦到期，可能没有足够的因素来登录。转到 {$a->url} 以检查您的身份验证状态并设置更多身份验证因素。您的宽限期将在 {$a->time} 到期。';
$string['summarycondition'] = '在宽限期内';
