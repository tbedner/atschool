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
 * Strings for component 'factor_iprange', language 'zh_cn', version '4.4'.
 *
 * @package     factor_iprange
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedipsempty'] = '目前没有人会通过这个因素！您可以添加自己的 IP 地址 （<i>{$a->ip}</i>）';
$string['allowedipshasmyip'] = '您的 IP （<i>{$a->ip}</i>） 在列表中，您将通过此因素。';
$string['allowedipshasntmyip'] = '您的 IP （<i>{$a->ip}</i>） 不在列表中，您将不会通过此因素';
$string['pluginname'] = 'IP范围';
$string['privacy:metadata'] = 'IP范围因子插件不存储任何个人数据。';
$string['settings:safeips'] = '安全IP范围';
$string['settings:safeips_help'] = '输入IP地址或子网的列表，将其计算为通过因子。如果是空的，没有人会通过这个因子。 {$a->info} {$a->syntax}';
$string['summarycondition'] = '是否在一个安全的网络上';
