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
 * Strings for component 'quizaccess_ipaddresslist', language 'ja', version '4.4'.
 *
 * @package     quizaccess_ipaddresslist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsubnet'] = '場所を追加する';
$string['allowedsubnets'] = '許可される場所';
$string['allowedsubnets_help'] = 'ユーザのIPアドレスにより小テストへのアクセスを特定の場所に制限できます。場所および対応するIPサブネットのリストはサイト管理者により定義されます。この場所チェックを無効にするには選択を解除してください。';
$string['editsubnet'] = '場所を編集する';
$string['managesubnets'] = '場所管理';
$string['pluginname'] = 'IPアドレスリスト小テストアクセスルール';
$string['privacy:metadata'] = 'このプラグインはいかなる個人データも保存しません。';
$string['subnet'] = 'IPサブネット';
$string['subnet_help'] = 'IPアドレスの一部または全部をカンマ区切りで指定してください。

例:

* 192.168.10.1
* 192.168.
* 231.54.211.0/20
* 231.3.56.10-20
* 192.168.10.1,192.168.,231.54.211.0/20,231.3.56.10-20';
$string['subnetwrong'] = 'この小テストは特定の場所からのみアクセス可能です。このコンピュータは許可リストに含まれていません。';
