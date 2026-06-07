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
 * Strings for component 'factor_iprange', language 'hi', version '4.4'.
 *
 * @package     factor_iprange
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedipsempty'] = 'वर्तमान में कोई भी इस कारक को पारित नहीं करेगा! आप अपना IP सम्बोधन जोड़ सकते हैं (<i>{$a->ip}</i>)';
$string['allowedipshasmyip'] = 'आपका IP (<i>{$a->ip}</i>) सूची में है और आप इस कारक को पास कर लेंगे।';
$string['allowedipshasntmyip'] = 'आपका IP (<i>{$a->ip}</i>) सूची में नहीं है और आप इस कारक को पास नहीं कर पाएंगे।';
$string['pluginname'] = 'IP रेंज';
$string['privacy:metadata'] = 'IP रेंज फैक्टर प्लगइन किसी भी प्रकार का व्यक्तिगत डेटा संग्रहीत नहीं करता है।';
$string['settings:safeips'] = 'सुरक्षित IP रेंज';
$string['settings:safeips_help'] = 'पास होने के लिए आवश्यक आईपी पतों या सबनेट की सूची दर्ज करें। यदि यह सूची खाली है, तो कोई भी इस कारक के अंतर्गत पास नहीं होगा। {$a->info} {$a->syntax}';
$string['summarycondition'] = 'एक सुरक्षित नेटवर्क पर है';
