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
 * Strings for component 'factor_admin', language 'zh_cn', version '4.4'.
 *
 * @package     factor_admin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['info'] = '此因素允许不是管理员计为一个因素。它的预期用途是确保管理员需要更严格的安全性，因此普通用户可以自由获得权重，而管理员必须使用其他因素。';
$string['pluginname'] = '非管理员';
$string['privacy:metadata'] = '非管理员因素插件不存储任何个人数据';
$string['settings:weight_help'] = '普通用户在这一因素中的权重较大，因此管理员必须比普通用户拥有更多的因素才能通过。';
$string['summarycondition'] = '非管理员';
