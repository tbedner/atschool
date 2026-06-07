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
 * Strings for component 'workshopallocation_scheduled', language 'hi', version '4.4'.
 *
 * @package     workshopallocation_scheduled
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['crontask'] = 'निर्धारित आवंटन के लिए पृष्ठभूमि प्रसंस्करण';
$string['currentstatus'] = 'वर्तमान स्थिति';
$string['currentstatusexecution'] = 'स्थिति';
$string['currentstatusexecution1'] = '{$a->datetime} को निष्पादित किया गया';
$string['currentstatusexecution2'] = 'इसे {$a->datetime} को पुनः निष्पादित किया जाएगा';
$string['currentstatusexecution3'] = '{$a->datetime} को निष्पादित किया जाएगा';
$string['currentstatusexecution4'] = 'निष्पादन की प्रतीक्षा में';
$string['currentstatusnext'] = 'अगला निष्पादन';
$string['currentstatusnext_help'] = 'कुछ मामलों में, आवंटन को स्वचालित रूप से फिर से निष्पादित करने के लिए छत्तीसगढ़ में आदिवासी क्षेत्र किया जाता है, भले ही इसे पहले ही निष्पादित किया जा चुका हो। उदाहरण के लिए, यदि जमा करने की समय सीमा बढ़ा दी गई है तो ऐसा हो सकता है।';
$string['currentstatusreset'] = 'रीसेट करें';
$string['currentstatusreset_help'] = 'इस चेकबॉक्स के साथ फॉर्म को सेव करने से चालू, प्रचलित हैसियत को रीसेट करने में मदद मिलेगी। पिछले निष्पादन के बारे में सभी जानकारी को हटा दिया जाएगा ताकि आवंटन को फिर से निष्पादित किया जा सके (यदि ऊपर सक्षम किया गया है)।';
$string['currentstatusresetinfo'] = 'बॉक्स की जाँच करें और निष्पादन परिणाम को रीसेट करने के लिए फॉर्म को सहेजें';
$string['currentstatusresult'] = 'हालिया निष्पादन परिणाम';
$string['enablescheduled'] = 'निर्धारित आवंटन सक्षम करें';
$string['enablescheduledinfo'] = 'सबमिशन चरण के अंत में सबमिशन को स्वचालित रूप से आवंटित करें';
$string['pluginname'] = 'अनुसूचित आवंटन';
$string['privacy:metadata'] = 'शेड्यूल्ड एलोकेशन प्लगइन किसी भी प्रकार का व्यक्तिगत डेटा संग्रहीत नहीं करता है। कौन किसका मूल्यांकन करेगा, इससे संबंधित वास्तविक व्यक्तिगत डेटा कार्यशाला मॉड्यूल द्वारा ही संग्रहीत किया जाता है और यही मूल्यांकन विवरण निर्यात करने का आधार बनता है।';
$string['randomallocationsettings'] = 'आवंटन सेटिंग्स';
$string['randomallocationsettings_help'] = 'सांयोगिक, अनियमित एका एक किया हुआ आवंटन प्रणाली के लिए मापदंड यहाँ परिभाषित किए गए हैं। उनका उपयोग प्रस्तुतियों के वास्तविक आवंटन के लिए सांयोगिक, अनियमित एका एक किया हुआ आवंटन प्लगइन द्वारा किया जाएगा।';
$string['resultdisabled'] = 'अनुसूचित आवंटन अक्षम किया गया';
$string['resultenabled'] = 'अनुसूचित आवंटन सक्षम';
$string['resultexecuted'] = 'सफलता';
$string['resultfailed'] = 'प्रस्तुतियों को स्वचालित रूप से आवंटित करने में असमर्थ';
$string['resultfailedconfig'] = 'निर्धारित आवंटन गलत तरीके से कॉन्फ़िगर किया गया है';
$string['resultfaileddeadline'] = 'कार्यशाला में प्रस्तुत करने की समय सीमा परिभाषित नहीं है';
$string['resultfailedphase'] = 'निवेदन चरण में कार्यशाला नहीं';
$string['resultvoid'] = 'कोई प्रस्तुति आवंटित नहीं की गई';
$string['resultvoiddeadline'] = 'जमा करने की समय सीमा के बाद अभी तक नहीं';
$string['resultvoidexecuted'] = 'आवंटन पहले ही किया जा चुका है';
$string['scheduledallocationsettings'] = 'अनुसूचित आवंटन सेटिंग्स';
$string['scheduledallocationsettings_help'] = 'यदि यह सुविधा सक्षम है, तो निर्धारित आवंटन विधि सबमिशन चरण के अंत में मूल्यांकन के लिए सबमिशन स्वचालित रूप से आवंटित कर देगी। चरण की समाप्ति कार्यशाला सेटिंग \'सबमिशन की अंतिम तिथि\' में निर्धारित की जा सकती है।

आंतरिक रूप से, यादृच्छिक आवंटन विधि इस फॉर्म में पूर्वनिर्धारित मापदंडों के साथ निष्पादित होती है। इसका अर्थ है कि निर्धारित आवंटन इस प्रकार कार्य करता है जैसे शिक्षक ने सबमिशन चरण के अंत में नीचे दी गई आवंटन सेटिंग्स का उपयोग करके स्वयं यादृच्छिक आवंटन किया हो।

ध्यान दें कि यदि आप सबमिशन की अंतिम तिथि से पहले कार्यशाला को मैन्युअल रूप से मूल्यांकन चरण में बदलते हैं, तो निर्धारित आवंटन निष्पादित *नहीं* होगा। उस स्थिति में आपको स्वयं सबमिशन आवंटित करने होंगे। स्वचालित चरण परिवर्तन सुविधा के साथ उपयोग किए जाने पर निर्धारित आवंटन विधि विशेष रूप से उपयोगी होती है।';
$string['setup'] = 'निर्धारित आवंटन सेट करें';
