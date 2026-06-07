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
 * Strings for component 'tool_lpmigrate', language 'hi', version '4.4'.
 *
 * @package     tool_lpmigrate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses'] = 'अनुमत प्राप्त पाठ्यक्रम';
$string['allowedcourses_help'] = 'नए ढांचे में स्थानांतरित किए जाने वाले क्रम ों का चयन करें। यदि कोई क्रम निर्दिष्ट नहीं किया गया है, तो सभी क्रम ों को स्थानांतरित कर दिया जाएगा।';
$string['continuetoframeworks'] = 'फ्रेमवर्क के लिए जारी रखें';
$string['coursecompetencymigrations'] = 'पाठ्यक्रम योग्यता प्रवास';
$string['coursemodulecompetencymigrations'] = 'पाठ्यक्रम क्रियाकलाप और संसाधन योग्यता प्रवास';
$string['coursemodulesfound'] = 'पाठ्यक्रम गतिविधिअथवाँ अथवा पाए गए संसाधन';
$string['coursesfound'] = 'पाए गए पाठ्यक्रम';
$string['coursestartdate'] = 'पाठ्यक्रमों की शुरुआत की तारीख';
$string['coursestartdate_help'] = 'यदि सक्षम किया जाता है, तो निर्दिष्ट तिथि से पहले शुरुआत की तारीख वाले पाठ्यक्रमों को स्थानांतरित नहीं किया जाएगा।';
$string['disallowedcourses'] = 'अस्वीकृत पाठ्यक्रम';
$string['disallowedcourses_help'] = 'ऐसे किसी भी पाठ्यक्रम का चयन करें जिसे नए ढांचे में स्थानांतरित नहीं किया जाना चाहिए।';
$string['errorcannotmigratetosameframework'] = 'एक ही ढांचे से और वहाँ से स्थानांतरित नहीं हो सकता है।';
$string['errorcouldnotmapcompetenciesinframework'] = 'इस ढांचे में किसी भी योग्यता का मानचित्रण नहीं किया जा सका।';
$string['errors'] = 'त्रुटियाँ';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'क्रम योग्यता को स्थानांतरित करते समय त्रुटि: {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = 'क्रिअथवाकलाप अथवा संसाधन योग्यता को स्थानांतरित करते समय त्रुटि: {$a}';
$string['excludethese'] = 'इन्हें बाहर करें';
$string['explanation'] = 'इस उपकरण का उपयोग एक नए संस्करण में योग्यता ढांचे को अद्यतन करने के लिए किया जा सकता है। यह पुराने ढांचे का उपयोग करके पाठ्यक्रमों और गतिविधियों में क्षमताओं की खोज करता है, और नए ढांचे की ओर इशारा करने के लिए लिंक को अद्यतन है। क्षमताओं के पुराने समूह को सीधे संपादित करने की अनुशंसा नहीं की जाती है, क्योंकि यह उन सभी क्षमताओं को बदल देगा जो उपयोगकर्ताओं की सीखने की योजनाओं में पहले ही प्रदान की जा चुकी हैं। आम तौर पर आप एक ढांचे के नए संस्करण को अभिप्राय करेंगे, पुराने ढांचे को छुपाएंगे, फिर नए पाठ्यक्रमों को नए ढांचे में स्थानांतरित करने के लिए इस उपकरण का उपयोग करेंगे।';
$string['findingcoursecompetencies'] = 'क्रम क्षमताओं का पता लगाना';
$string['findingmodulecompetencies'] = 'क्रियाकलाप और संसाधन क्षमताओं का पता लगाना';
$string['frameworks'] = 'फ्रेमवर्क';
$string['limittothese'] = 'इन तक सीमित';
$string['lpmigrate:frameworksmigrate'] = 'प्रवास फ्रेमवर्क';
$string['migrateframeworks'] = 'प्रवास फ्रेमवर्क';
$string['migratefrom'] = 'से पलायन करें';
$string['migratefrom_help'] = 'वर्तमान में उपयोग में पुराने ढांचे का चयन करें।';
$string['migratemore'] = 'अधिक प्रवास करें';
$string['migrateto'] = 'पलायन करें';
$string['migrateto_help'] = 'फ्रेमवर्क के नए संस्करण का चयन करें। केवल एक ऐसे फ्रेमवर्क का चयन करना संभव है जो छिपा न हो।';
$string['migratingcourses'] = 'प्रवासन पाठ्यक्रम';
$string['missingmappings'] = 'लापता मानचित्रण';
$string['performmigration'] = 'प्रवास करें';
$string['pluginname'] = 'क्षमता प्रवास उपकरण';
$string['privacy:metadata'] = 'क्षमता प्रवास उपकरण प्लगइन किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करता है।';
$string['results'] = 'परिणाम';
$string['startdatefrom'] = 'शुरू करने की तारीख';
$string['unmappedin'] = '{$a} में मैप नहीं किया गया';
$string['warningcouldnotremovecoursecompetency'] = 'क्रम योग्यता को हटाया नहीं जा सका।';
$string['warningdestinationcoursecompetencyalreadyexists'] = 'लक्ष्य क्रम योग्यता पहले से मौजूद है।';
$string['warningdestinationmodulecompetencyalreadyexists'] = 'लक्ष्य क्रिअथवाकलाप अथवा संसाधन क्षमता पहले से मौजूद है।';
$string['warnings'] = 'चेतावनियाँ';
