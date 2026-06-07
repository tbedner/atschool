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
 * Strings for component 'antivirus_clamav', language 'hi', version '4.4'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['antivirusfailed'] = 'इस समय एंटीवायरस स्कैनिंग में समस्या है। आपकी फ़ाइल {$a-> item} अपलोड नहीं की गई है। कृपया बाद में फिर से प्रयास करें।';
$string['clamfailed'] = 'Clam AV काम करने में असफल रहा। ऍरर सन्देश \'{$a}\' था।  Clam का आउट्पुट यह रहा:';
$string['clamfailureonupload'] = 'ClamAV विफलता पर';
$string['configclamactlikevirus'] = 'वायरस जैसी फ़ाइलों का इलाज करें';
$string['configclamdonothing'] = 'फाइलों को ठीक मानें';
$string['configclamfailureonupload'] = 'यदि \'फाइलों को ठीक से व्यवहार करें\' का चयन किया जाता है, तो फाइलों को गंतव्य निर्देशिका में स्थानांतरित कर दिया जाएगा। यदि \'अपलोड करने से इनकार करें, फिर से प्रयास करें\' का चयन किया जाता है, तो उपयोगकर्ता को बाद में फिर से प्रयास करने के लिए प्रेरित किया जाएगा। यदि \'वायरस जैसी फ़ाइलों का इलाज करें\' का चयन किया जाता है, तो फ़ाइलों को संगरोध क्षेत्र में स्थानांतरित कर दिया जाएगा, या हटा दिया जाएगा। चेतावनीः इस विकल्प के साथ, यदि किसी कारण से क्लैम चलने में विफल रहता है (आमतौर पर एक अमान्य पैथोकैम के कारण), तो सभी अपलोड की गई फ़ाइलों को दिए गए संगरोध क्षेत्र में स्थानांतरित कर दिया जाएगा, या हटा दिया जाएगा।';
$string['configclamtryagain'] = 'अपलोड करने से इनकार करें, फिर से कोशिश करें';
$string['errorcantopensocket'] = 'यूनिक्स डोमेन साकेट से जुड़ने के परिणामस्वरूप {$a} त्रुटि हुई';
$string['errorclamavnoresponse'] = 'ClamAV जवाब नहीं देता है; राक्षस चलने की स्थिति की जाँच करें';
$string['errornounixsocketssupported'] = 'इस प्रणाली पर यूनिक्स डोमेन साकेट परिवहन समर्थित नहीं है। कृपया इसके बजाय कमांड लाइन विकल्प का उपयोग करें।';
$string['invalidpathtoclam'] = 'मूडल को फ़ाइल अप्लोड पर Clam AV चलाने के लिए कन्फ़िगर किया
गया है, परन्तु Clam AV को दिया गया पाथ {$a} गलत है।';
$string['pathtoclam'] = 'कमांड लाइन';
$string['pathtoclamdesc'] = 'यदि चलने की विधि "कमांड लाइन" पर सेट की गई है, तो यहाँ ClamAV के मार्ग में प्रवेश करें। लिनक्स पर यहusr/bin/clamscan या /usr/bin/clamdscan होगा।';
$string['pathtounixsocket'] = 'यूनिक्स डोमेन साकेट';
$string['pathtounixsocketdesc'] = 'यदि चलने की विधि "यूनिक्स डोमेन साकेट" पर सेट की गई है, तो यहाँ ClamAV यूनिक्स साकेट के मार्ग में प्रवेश करें। डेबियन लिनक्स पर यह/वार/रन/क्लैमाव/clamd.ctl होगा। कृपया सुनिश्चित करें कि क्लैमाव डेमन के पास अपलोड की गई फ़ाइलों तक पहुंच है, यह सुनिश्चित करने का सबसे आसान तरीका है कि आप अपने वेबसर्वर समूह (Debian Linux पर \'www-data\') में \'क्लैमाव\' उपयोगकर्ता को जोड़ें।';
$string['pluginname'] = 'ClamAV एंटीवायरस';
$string['privacy:metadata'] = 'ClamAV एंटीवायरस प्लगइन किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करता है।';
$string['quarantinedir'] = 'संगरोध निर्देशिका';
$string['runningmethod'] = 'दौड़ने की विधि';
$string['runningmethodcommandline'] = 'कमांड लाइन';
$string['runningmethoddesc'] = 'ClamAVचलाने की विधि। कमांड लाइन का उपयोग डिफ़ॉल्ट रूप से किया जाता है, हालांकि यूनिक्स सिस्टम पर सिस्टम साकेट का उपयोग करके बेहतर प्रदर्शन प्राप्त किया जा सकता है।';
$string['runningmethodtcpsocket'] = 'TCP साकेट';
$string['runningmethodunixsocket'] = 'यूनिक्स डोमेन साकेट';
$string['tcpsockethost'] = 'TCP साकेट होस्टनाम';
$string['tcpsockethostdesc'] = 'ClamAV सर्वर का डोमेन नाम';
$string['tcpsocketport'] = 'TCP साकेट पोर्ट';
$string['tcpsocketportdesc'] = 'ClamAV से जुड़ते समय उपयोग किया जाने वाला बंदरगाह';
$string['tries'] = 'स्कैनिंग के प्रयास';
$string['tries_desc'] = 'यदि स्कैनिंग प्रक्रिया के दौरान कोई त्रुटि होती है तो ClamAV द्वारा किए गए प्रयासों की संख्या।';
$string['tries_notice'] = 'क्लैमैव स्कैनिंग ने {$a->tries} time(s) {$a->notice} की कोशिश की है।';
$string['unknownerror'] = 'Clam AV के साथ अनजान ऍरर हुई।';
