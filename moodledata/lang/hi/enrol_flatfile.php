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
 * Strings for component 'enrol_flatfile', language 'hi', version '4.4'.
 *
 * @package     enrol_flatfile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['encoding'] = 'दाखिल करना एन्कोडिंग';
$string['expiredaction'] = 'नामांकन समाप्ति कार्रवाई';
$string['expiredaction_help'] = 'उपयोगकर्ता नामांकन की अवधि समाप्त होने पर करने के लिए कार्रवाई का चयन करें। कृपया ध्यान दें कि क्रम का नामांकन न करने के दौरान कुछ उपयोगकर्ता डेटा और सेटिंग्स को क्रम से साफ कर दिया जाता है।';
$string['filelockedmail'] = 'दाखिल करना-आधारित नामांकन ({$a}) के लिए आप जिस पाठ दाखिल करना का उपयोग कर रहे हैं, उसे क्रॉन प्रक्रम द्वारा निकाल देनाया नहीं जा सकता है। इसका आमतौर पर मतलब है कि इस पर अनुमतियाँ गलत हैं। कृपया अनुमतियों को निश्चित करना ताकि मूडल दाखिल करना को निकाल देना सके, अन्यथा इसे बार-बार संसाधित किया जा सकता है।';
$string['filelockedmailsubject'] = 'महत्त्वपूर्ण त्रुटि: नामांकन दाखिल करना';
$string['flatfile:manage'] = 'उपयोगकर्ता नामांकन का प्रबंधन मैन्युअल रूप से करें';
$string['flatfile:unenrol'] = 'क्रम से उपयोगकर्ताओं को मैन्युअल रूप से नामांकित न करें';
$string['flatfileenrolments'] = 'फ्लैट फ़ाइल (CSV) नामांकन';
$string['flatfilesync'] = 'फ्लैट दाखिल करना नामांकन सिंक';
$string['location'] = 'फ़ाइल लोकेशन';
$string['location_desc'] = 'नामांकन दाखिल करना का पूरा मार्ग विनिर्देश करना। प्रसंस्करण के बाद दाखिल करना स्वचालित रूप से हटा दी जाती है।';
$string['mapping'] = 'फ्लैट दाखिल करना भूमिका मानचित्रण';
$string['messageprovider:flatfile_enrolment'] = 'फ्लैट दाखिल करना नामांकन संदेश';
$string['notifyadmin'] = 'प्रशासक को सूचित करें';
$string['notifyenrolled'] = 'पंजीकृत उपयोगकर्ताओं को सूचित करें';
$string['notifyenroller'] = 'नामांकन के लिए जिम्मेदार, उत्तरदायी उपयोगकर्ता को सूचित करें';
$string['pluginname'] = 'फ्लैट फाइल (CSV)';
$string['pluginname_desc'] = 'यह विधि आपके द्वारा निर्दिष्ट स्थान पर मौजूद एक विशेष स्वरूपित टेक्स्ट फ़ाइल की बार-बार जाँच करेगी और उसे संसाधित करेगी।
यह फ़ाइल अल्पविराम से अलग की गई है और इसमें प्रति पंक्ति चार या छह फ़ील्ड होने की संभावना है:

[ऑपरेशन, भूमिका, उपयोगकर्ता आईडी संख्या, पाठ्यक्रम आईडी संख्या [, प्रारंभ समय [, समाप्ति समय]]

जहाँ:

* ऑपरेशन - जोड़ें | हटाएं
* भूमिका - छात्र | शिक्षक | शिक्षक संपादन
* उपयोगकर्ता आईडी संख्या - उपयोगकर्ता तालिका में आईडी संख्या (ध्यान दें: आईडी नहीं)
* पाठ्यक्रम आईडी संख्या - पाठ्यक्रम तालिका में आईडी संख्या (ध्यान दें: आईडी नहीं)
* प्रारंभ समय - प्रारंभ समय (युग के बाद से सेकंड में) - वैकल्पिक
* समाप्ति समय - समाप्ति समय (युग के बाद से सेकंड में) - वैकल्पिक

यह कुछ इस तरह दिख सकता है:
<pre class="informationbox">
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['privacy:metadata:enrol_flatfile'] = 'फ्लैट फाइल (CSV) नामांकन प्लगइन भविष्य के नामांकनों से संबंधित व्यक्तिगत डेटा को enrol_flatfile टेबल में संग्रहीत कर सकता है।';
$string['privacy:metadata:enrol_flatfile:action'] = 'दी गई तारीख पर नामांकन कार्रवाई की उम्मीद है';
$string['privacy:metadata:enrol_flatfile:courseid'] = 'क्रम ID जिसके लिए नामांकन संबंधित है';
$string['privacy:metadata:enrol_flatfile:roleid'] = 'सौंपी जाने वाली अथवा बिना सौंपी गई भूमिका की पहचान';
$string['privacy:metadata:enrol_flatfile:timeend'] = 'नामांकन समाप्त होने का समय';
$string['privacy:metadata:enrol_flatfile:timemodified'] = 'वह समय जब नामांकन संशोधित किया जाता है';
$string['privacy:metadata:enrol_flatfile:timestart'] = 'नामांकन शुरू होने का समय';
$string['privacy:metadata:enrol_flatfile:userid'] = 'उपयोगकर्ता की ID जिसके लिए भूमिका नियत कार्य संबंधित है';
