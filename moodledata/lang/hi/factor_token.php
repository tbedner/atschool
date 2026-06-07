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
 * Strings for component 'factor_token', language 'hi', version '4.4'.
 *
 * @package     factor_token
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['event:token_created'] = 'MFA  सांकेतिक बनाया गया।';
$string['form:trust'] = 'इस उपकरण पर {$a} के लिए भरोसा करें।';
$string['pluginname'] = 'इस उपकरण पर भरोसा करें';
$string['privacy:metadata'] = 'The Trust this device factor plugin does not store any personal data.';
$string['settings:expireovernight'] = 'रातोंरात न्यास समाप्त हो जाता है';
$string['settings:expireovernight_help'] = 'इससे टोकन रात भर में समाप्त हो जाते हैं, जिससे उपयोगकर्ताओं को दोपहर में व्यवधान का सामना नहीं करना पड़ता। इसके बजाय, टोकन समाप्त होने के बाद अगले दिन की शुरुआत में उनसे मल्टी-फैक्टर ऑथेंटिकेशन करने के लिए कहा जाएगा।';
$string['settings:expiry'] = 'विश्वास अवधि';
$string['settings:expiry_help'] = 'किसी डिवाइस को नए मल्टी-फैक्टर ऑथेंटिकेशन की आवश्यकता होने से पहले कितने समय तक विश्वसनीय माना जाता है।';
$string['summarycondition'] = 'उपयोगकर्ता ने पहले भी इस डिवाइस पर भरोसा किया है।';
$string['tokenstoredindevice'] = 'आईडी {$a->userid} वाले उपयोगकर्ता के डिवाइस पर मल्टी-फैक्टर ऑथेंटिकेशन टोकन संग्रहीत है। <br> जानकारी: {$a->string}.';
