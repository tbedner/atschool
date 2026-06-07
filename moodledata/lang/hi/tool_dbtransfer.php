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
 * Strings for component 'tool_dbtransfer', language 'hi', version '4.4'.
 *
 * @package     tool_dbtransfer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clidriverlist'] = 'प्रवास के लिए उपलब्ध डेटाबेस चालक';
$string['cliheading'] = 'डेटाबेस प्रवास-सुनिश्चित करें कि प्रवास के दौरान कोई भी सर्वर तक नहीं पहुँच रहा है!';
$string['climigrationnotice'] = 'डेटाबेस माइग्रेशन प्रगति पर है, कृपया माइग्रेशन पूरा होने तक प्रतीक्षा करें और सर्वर प्रशासक कॉन्फ़िगरेशन को अपडेट करता है और $cfg-> dataroot/climaintenance.html दाखिल करना को हटा देता है।';
$string['convertinglogdisplay'] = 'लॉग सजावट क्रियाओं को परिवर्तित करना';
$string['dbexport'] = 'डेटाबेस निर्यात';
$string['dbtransfer'] = 'डेटाबेस प्रवास';
$string['enablemaintenance'] = 'अनुरक्षण करना प्रकार, विधा सक्षम करें';
$string['enablemaintenance_help'] = 'यह विकल्प डेटाबेस प्रवास के दौरान और बाद में रखरखाव प्रकार, विधा को सक्षम करता है, यह प्रवास पूरा होने तक सभी उपयोगकर्ताओं की पहुँच को रोकता है। कृपया ध्यान दें कि सामान्य संचालन को पुन: ग्रहण करना करने के लिए प्रशासक को config.php सेटिंग्स को अद्यतन करने के बाद $cfg-> dataroot/climaintenance.html दाखिल करना को मैन्युअल रूप से हटाना होगा।';
$string['exportdata'] = 'निर्यात डेटा';
$string['notargetconectexception'] = 'लक्षित डेटाबेस को नहीं जोड़ सकते, क्षमा करें।';
$string['options'] = 'विकल्प';
$string['pluginname'] = 'डेटाबेस हस्तांतरण';
$string['privacy:metadata'] = 'डेटाबेस हस्तांतरण प्लगइन किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करता है।';
$string['targetdatabase'] = 'लक्ष्य डेटाबेस';
$string['targetdatabasenotempty'] = 'लक्ष्य डेटाबेस में दिए गए उपसर्ग के साथ कोई तालिका नहीं होनी चाहिए!';
$string['transferdata'] = 'डेटा हस्तांतरण करें';
$string['transferdbintro'] = 'यह आलेख इस डेटाबेस की पूरी सामग्री को दूसरे डेटाबेस सर्वर में हस्तांतरण कर देगी। इसका उपयोग अक्सर विभिन्न डेटाबेस प्रकारों में डेटा के प्रवास के लिए किया जाता है।';
$string['transferdbtoserver'] = 'इस मॉड्यूल डेटाबेस को दूसरे सर्वर पर हस्तांतरण करें';
$string['transferringdbto'] = 'इस {$a-> dbtypefrom} डेटाबेस को {$a-> dbtype} डेटाबेस "{$a-> dbname}" पर "{$a-> dbhost}" पर स्थानांतरित करना।';
