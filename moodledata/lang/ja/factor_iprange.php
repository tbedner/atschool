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
 * Strings for component 'factor_iprange', language 'ja', version '4.4'.
 *
 * @package     factor_iprange
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedipsempty'] = '現在、誰もこの要素に合格できません! あなた自身のIPアドレス (<i>{$a->ip}</i>) を追加できます。';
$string['allowedipshasmyip'] = 'あなたのIP (<i>{$a->ip}</i>) はリストにあるため、あなたはこの要素に合格します。';
$string['allowedipshasntmyip'] = 'あなたのIP (<i>{$a->ip}</i>) がリストにないため、あなたはこの要素に合格しません。';
$string['pluginname'] = 'IPレンジ';
$string['privacy:metadata'] = 'IPレンジ要素プラグインはいかなる個人データも保存しません。';
$string['settings:safeips'] = 'セーフIPレンジ';
$string['settings:safeips_help'] = '要素の合格としてカウントするIPアドレスまたはサブネットの一覧を入力してください。空白の場合、誰もこの要素に合格しません。{$a->info} {$a->syntax}';
$string['summarycondition'] = 'は保護されたネットワーク上にあります。';
