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
 * Strings for component 'factor_capability', language 'zh_cn', version '4.4'.
 *
 * @package     factor_capability
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['capability:cannotpassfactor'] = '阻止角色通过 MFA 用户能力因子';
$string['pluginname'] = '用户权限';
$string['privacy:metadata'] = '用户权限因素插件不会存储任何个人数据';
$string['settings:adminpasses'] = '网站管理员可以通过此因素';
$string['settings:adminpasses_help'] = '默认情况下，管理员会通过所有功能检查，包括使用“factor/capability：cannotpassfactor”的检查，这意味着他们将无法通过此因素。
    如果选中，则如果所有站点管理员没有其他角色的此功能，则他们将通过此因素。
    如果未选中，站点管理员将无法通过此因素。';
$string['summarycondition'] = '在任何角色（包括站点管理员）中都没有 factor/capability：cannotpassfactor 功能。';
