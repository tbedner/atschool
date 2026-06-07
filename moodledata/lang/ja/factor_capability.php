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
 * Strings for component 'factor_capability', language 'ja', version '4.4'.
 *
 * @package     factor_capability
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['capability:cannotpassfactor'] = '認証にはMFAの他の要素を使用する必要があります。';
$string['pluginname'] = 'ユーザケイパビリティ';
$string['privacy:metadata'] = 'ユーザケイパビリティ要素プラグインはいかなる個人データも保存しません。';
$string['settings:adminpasses'] = 'サイト管理者はこの要素に合格できる';
$string['settings:adminpasses_help'] = 'デフォルトでは「factor/capability:cannotpassfactor」を使用するケイパビリティを含めてすべてのケイパビリティチェックに合格します。しかし、これはこの要素に不合格であることを意味します。
この設定を有効にした場合、別のロールからのこのケイパビリティを持たない場合にすべてのサイト管理者はこの要素に合格します。この設定を無効にした場合、サイト管理者はこの要素に不合格となります。';
$string['summarycondition'] = 'はサイト管理者を含むどのロールにおいてもfactor/capability:cannotpassfactorケイパビリティがありません。';
