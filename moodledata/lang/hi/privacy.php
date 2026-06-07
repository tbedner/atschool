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
 * Strings for component 'privacy', language 'hi', version '4.4'.
 *
 * @package     privacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['broughtbymoodle'] = 'यह डेटा निर्यात मूडल द्वारा बशर्ते, यह कि जाता है।';
$string['exportfrom'] = '{$a} से निर्यात किया गया';
$string['exporttime'] = '{$a} पर निर्यात किया गया';
$string['exportuser'] = '{$a} के लिए डेटा';
$string['navigation'] = 'नेविगेशन के लिए डेटा {$a}';
$string['privacy:metadata'] = 'The privacy subsystem does not store any data of its own and is designed to act as a channel between components and the interface used to describe, export, and remove their data.';
$string['privacy:subsystem:empty'] = 'यह उप-प्रणाली किसी भी डेटा को संग्रहीत नहीं करती है।';
$string['trace:deletingapproved'] = '{$a-> total} अनुमोदित संदर्भों को हटाना ({$a-> datetime})';
$string['trace:deletingapprovedusers'] = 'संदर्भ {$a-> contextid} ({$a-> datetime}) के लिए {$a-> total} अनुमोदित घटकों में उपयोगकर्ताओं को हटाना।';
$string['trace:deletingcontext'] = '{$a->total} घटकों ({$a->datetime}) से संदर्भ को हटाना';
$string['trace:deletinguser'] = '{$a->total} घटकों ({$a->datetime}) से उपयोगकर्ता को हटाना';
$string['trace:done'] = 'समाप्त';
$string['trace:exportcomplete'] = 'निर्यात पूरा';
$string['trace:exportingapproved'] = '{$a->total} घटकों ({$a->datetime}) के लिए प्राथमिक निर्यात निष्पादित करना';
$string['trace:exportingrelated'] = '{$a->total} घटकों ({$a->datetime}) के लिए संबंधित निर्यात निष्पादित करना';
$string['trace:fetchcomponents'] = '{$a->total} घटकों ({$a->datetime}) से डेटा प्राप्त करना';
$string['trace:finalisingexport'] = 'निर्यात को अंतिम रूप देना';
$string['trace:preprocessingcomponent'] = 'प्री-प्रोसेसिंग {$a->component} ({$a->progress}/{$a->total}) ({$a->datetime})';
$string['trace:processingcomponent'] = '{$a->component} ({$a->progress}/{$a->total}) ({$a->datetime}) को संसाधित किया जा रहा है';
$string['viewdata'] = 'डेटा देखने के लिए नेविगेशन में एक लिंक पर क्लिक करें।';
