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
 * Strings for component 'antivirus', language 'hi', version '4.4'.
 *
 * @package     antivirus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actantivirushdr'] = 'उपलब्ध एंटीवायरस प्लगइन्स';
$string['antiviruscommonsettings'] = 'सामान्य एंटीवायरस सेटिंग्स';
$string['antiviruses'] = 'एंटीवायरस प्लगइन्स';
$string['antivirussettings'] = 'एंटीवायरस प्लग इन प्रबंधित करें';
$string['configantivirusplugins'] = 'कृपया उन एंटीवायरस प्लगिन का चयन करें जिन्हें आप उपयोग में रखना चाहते हैं और उन्हें लागू करने के क्रम में व्यवस्थित करें।';
$string['dataerrordesc'] = 'डेटा स्कैनर त्रुटि हुई।';
$string['dataerrorname'] = 'डेटा स्कैनर त्रुटि';
$string['datainfecteddesc'] = 'संक्रमित डेटा का पता चला।';
$string['datainfectedname'] = 'संक्रमित डेटा';
$string['datastream'] = 'डेटा';
$string['emailadditionalinfo'] = 'वायरस इंजन से अतिरिक्त विवरण वापस किए गएः';
$string['emailauthor'] = 'द्वारा अपलोड किया गयाः';
$string['emailcontenthash'] = 'सामग्री हैशः';
$string['emailcontenttype'] = 'सामग्री का प्रकारः';
$string['emaildate'] = 'अपलोड की गई तिथिः';
$string['emailfilename'] = 'फाइल का नाम';
$string['emailfilesize'] = 'फ़ाइल का आकारः';
$string['emailgeoinfo'] = 'भू-स्थानः';
$string['emailinfectedfiledetected'] = 'संक्रमित फ़ाइल का पता चला';
$string['emailipaddress'] = 'IP पताः';
$string['emailreferer'] = 'संदर्भकः';
$string['emailreport'] = 'रिपोर्टः';
$string['emailscanner'] = 'स्कैनरः';
$string['emailscannererrordetected'] = 'एक स्कैनर त्रुटि हुई';
$string['emailsubject'] = '{$a} :: एंटीवायरस सूचना';
$string['enablequarantine'] = 'संगरोध को सक्षम करें';
$string['enablequarantine_help'] = 'यदि सक्षम किया जाता है, तो वायरस के रूप में पाई जाने वाली किसी भी फ़ाइल को बाद में निरीक्षण के लिए एक संगरोध फ़ोल्डर ([dataroot]/{$a}) में रखा जाएगा। मूडल में अपलोड विफल हो जाएगा। यदि आपके पास कोई फ़ाइल सिस्टम स्तर वायरस स्कैनिंग है, तो संगरोधित फ़ाइलों का पता लगाने से बचने के लिए संगरोध फ़ोल्डर को एंटीवायरस जाँच से बाहर रखा जाना चाहिए।';
$string['fileerrordesc'] = 'फ़ाइल स्कैनर त्रुटि हुई।';
$string['fileerrorname'] = 'फ़ाइल स्कैनर त्रुटि';
$string['fileinfecteddesc'] = 'एक संक्रमित फ़ाइल का पता चला।';
$string['fileinfectedname'] = 'फ़ाइल संक्रमित';
$string['notifyemail'] = 'एंटीवायरस चेतावनी अधिसूचना ईमेल';
$string['notifyemail_help'] = 'वायरस का पता लगने पर अधिसूचनाओं के लिए ईमेल पता। यदि खाली छोड़ दिया जाता है, तो सभी साइट प्रशासकों को अधिसूचना भेजी जाएगी।';
$string['notifylevel'] = 'अधिसूचना स्तर';
$string['notifylevel_help'] = 'जिन विभिन्न स्तरों की जानकारी के बारे में आप सूचित होना चाहते हैं';
$string['notifylevelerror'] = 'धमकी और स्कैनर त्रुटियों का पता चला';
$string['notifylevelfound'] = 'केवल खतरों का पता लगाया गया';
$string['privacy:metadata'] = 'एंटीवायरस सिस्टम किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करता है।';
$string['quarantinedfiles'] = 'एंटीवायरस संगरोधित फाइलें';
$string['quarantinedisabled'] = 'संगरोध अक्षम है। फ़ाइल संग्रहीत नहीं है।';
$string['quarantinetime'] = 'अधिकतम संगरोध समय';
$string['quarantinetime_desc'] = 'निर्दिष्ट अवधि से पुरानी संगरोध फाइलों को हटा दिया जाएगा।';
$string['taskcleanup'] = 'संगरोधित फाइलों को साफ करें।';
$string['threshold'] = 'स्थिति जांच के लिए सीमा';
$string['threshold_desc'] = 'त्रुटियों आदि के लिए पिछले परिणामों की जांच करने के लिए कितना पीछे जाना है। जैसा कि {$a} में बताया गया है।';
$string['unknown'] = 'अज्ञात';
$string['virusfound'] = '{$a-> item} को एक वायरस चेकर द्वारा स्कैन किया गया है और संक्रमित पाया गया है!';
