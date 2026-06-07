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
 * Strings for component 'message_airnotifier', language 'hi', version '4.4'.
 *
 * @package     message_airnotifier
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['airnotifier:managedevice'] = 'उपकरणों का प्रबंधन करें';
$string['airnotifieraccesskey'] = 'एयरनोटिफायर एक्सेस कुंजी';
$string['airnotifierappname'] = 'एयरनोटिफायर ऐप का नाम';
$string['airnotifierfielderror'] = 'कृपअथवा निम्नलिखित क्षेत्र से किसी भी खाली स्थान अथवा अनावश्यक वर्णों को हटा दें: {$a}';
$string['airnotifiermobileappname'] = 'मोबाइल ऐप का नाम';
$string['airnotifierport'] = 'एयरनोटिफायर पोर्ट';
$string['airnotifierurl'] = 'एयरनोटिफायर URL';
$string['checkconfiguration'] = 'पुश अधिसूचना विन्यास की जाँच करें और परीक्षण करें';
$string['configairnotifieraccesskey'] = 'एयरनोटिफायर सर्वर से कनेक्ट करने के लिए एक्सेस कुंजी। आप नीचे दिए गए "एक्सेस कुंजी का अनुरोध करें" लिंक पर क्लिक करके (केवल पंजीकृत साइटों के लिए) या <a href="https://apps.moodle.com">मूडल ऐप्स पोर्टल</a> पर खाता बनाकर एक्सेस कुंजी प्राप्त कर सकते हैं।';
$string['configairnotifierappname'] = 'एयरनोटिफायर में ऐप नाम पहचानकर्ता।';
$string['configairnotifiermobileappname'] = 'मोबाइल ऐप अद्वितीय पहचानकर्ता (आमतौर पर com.moodle.moodlemobile जैसा कुछ)।';
$string['configairnotifierport'] = 'एयरनोटिफायर सर्वर से जुड़ते समय उपयोग करने के लिए पोर्ट।';
$string['configairnotifierurl'] = 'धक्का अधिसूचना भेजने के लिए कनेक्ट करने के लिए सर्वर यूआरएल।';
$string['configured'] = 'संरचित';
$string['deletecheckdevicename'] = 'अपने उपकरण को निकाल देना दें: {$a-> name}';
$string['deletedevice'] = 'उपकरण को निकाल देना दें। ध्यान दें कि एक ऐप उपकरण को फिर से रजिस्टर सकता है। यदि उपकरण फिर से दिखाई देता है, तो इसे अक्षम कर दें।';
$string['devicetoken'] = 'उपकरण सांकेतिक';
$string['donotsendnotification'] = 'बिल्कुल भी सूचना न भेजें';
$string['enableprocessor'] = 'मोबाइल सूचनाओं को सक्षम करें';
$string['encryptnotifications'] = 'अधिसूचनाओं को कूटबद्ध करें';
$string['encryptnotifications_help'] = 'ऐप अधिसूचनाओं के एंड-टू-एंड एन्क्रिप्शन को सक्षम करें। यदि कुछ डेटा को एन्क्रिप्ट नहीं किया जा सकता है तो उसे अधिसूचनाओं से हटाया जा सकता है।';
$string['encryptprocessing'] = 'उन उपकरणों के लिए जो एन्क्रिप्शन का समर्थन नहीं करते हैं';
$string['encryptprocessing_desc'] = 'एन्क्रिप्टेड नोटिफिकेशन के लिए कम से कम एंड्रॉइड 8 या iOS 13 और मूडल ऐप 4.2 या बाद के संस्करण की आवश्यकता होती है।';
$string['errorretrievingkey'] = 'एक्सेस कुंजी प्राप्त करने में त्रुटि हुई। इस सेवा का उपयोग करने के लिए आपकी साइट पंजीकृत होनी चाहिए। यदि आपकी साइट पहले से पंजीकृत है, तो कृपया अपना पंजीकरण अपडेट करने का प्रयास करें। वैकल्पिक रूप से, आप <a href="https://apps.moodle.com">Moodle Apps Portal</a> पर खाता बनाकर एक्सेस कुंजी प्राप्त कर सकते हैं।';
$string['keyretrievedsuccessfully'] = 'एक्सेस कुंजी सफलतापूर्वक प्राप्त कर ली गई है। मूडल ऐप के उपयोग संबंधी आंकड़े देखने के लिए, कृपया <a href="https://apps.moodle.com">मूडल ऐप्स पोर्टल</a> पर एक खाता बनाएं।';
$string['messageprovidersempty'] = 'चूकना सूचना वरीयताओं में कोई मोबाइल सूचनाएँ सक्षम नहीं हैं।';
$string['messageproviderslow'] = 'चूकना अधिसूचना वरीयताओं में केवल कुछ मोबाइल अधिसूचनाएँ सक्षम हैं।';
$string['moodleappsportallimitswarning'] = 'कृपया ध्यान दें कि सूचनाएं प्राप्त करने की अनुमति प्राप्त उपयोगकर्ता उपकरणों की संख्या आपके मूडल ऐप सदस्यता पर निर्भर करती है। विवरण के लिए, <a href="{$a}" target="_blank">मूडल ऐप्स पोर्टल</a> पर जाएं।';
$string['nodevices'] = 'कोई पंजीकृत उपकरण नहीं। आपके द्वारा मूडल ऐप इंस्टॉल करने और इस साइट को जोड़ने के बाद उपकरण स्वचालित रूप से दिखाई देंगे।';
$string['noemailevernotset'] = '$cfg-> नोमेलवर अक्षम';
$string['noemaileverset'] = '$cfg-> noemailever config.php में सक्षम है। आपको इस सेटिंग को गलत करने अथवा इसे हटाने की आवश्यकता है।';
$string['nopermissiontomanagedevices'] = 'आपके पास उपकरणों को प्रबंधित करने की अनुमति नहीं है।';
$string['notconfigured'] = 'एयरनोटिफायर सर्वर को कॉन्फ़िगर नहीं किया गया है इसलिए धक्का अधिसूचना नहीं भेजी जा सकती है।';
$string['notificationsserverconfiguration'] = 'अधिसूचना सर्वर (एयरनोटिफायर) विन्यास';
$string['pluginname'] = 'मोबाइल';
$string['privacy:appiddescription'] = 'यह उपयोग किए जा रहे अनुप्रयोग के लिए एक पहचानकर्ता है।';
$string['privacy:enableddescription'] = 'यदि यह उपकरण एयरनोटिफायर के लिए सक्षम है।';
$string['privacy:metadata:date'] = 'जिस तारीख को सन्देश, सूचना भेजा गया था।';
$string['privacy:metadata:enabled'] = 'क्या एयरनोटिफायर उपकरण सक्षम है।';
$string['privacy:metadata:externalpurpose'] = 'यह जानकारी एक बाहरी साइट पर भेजी जाती है जिसे अंत में, अंततोगत्वा, आखिरकार उपयोगकर्ता के मोबाइल उपकरण पर वितरित किया जाता है।';
$string['privacy:metadata:fullmessage'] = 'पूरा सन्देश';
$string['privacy:metadata:notification'] = 'यदि यह सन्देश, सूचना एक अधिसूचना है।';
$string['privacy:metadata:smallmessage'] = 'सन्देश, सूचना का एक खंड।';
$string['privacy:metadata:subject'] = 'सन्देश, सूचना की विषय रेखा।';
$string['privacy:metadata:tableexplanation'] = 'एयरनोटिफायर उपकरण की जानकारी यहाँ संग्रहीत की जाती है।';
$string['privacy:metadata:userdeviceid'] = 'उपयोगकर्ता के मोबाइल उपकरण से जुड़ने वाली आईडी';
$string['privacy:metadata:userfromfullname'] = 'सन्देश, सूचना भेजने वाले उपयोगकर्ता का पूरा नाम।';
$string['privacy:metadata:userfromid'] = 'सन्देश, सूचना के लेखक की उपयोगकर्ता ID';
$string['privacy:metadata:userid'] = 'सन्देश, सूचना भेजने वाले उपयोगकर्ता की ID';
$string['privacy:metadata:username'] = 'उपयोगकर्ता का उपयोगकर्ता नाम।';
$string['privacy:metadata:usersubsystem'] = 'यह प्लगइन उपयोगकर्ता उपप्रणाली से संबद्ध है।';
$string['privacy:subcontext'] = 'सूचना एयरनोटिफायर';
$string['requestaccesskey'] = 'अभिगम कुंजी का अनुरोध करें';
$string['sendnotificationnotenc'] = 'बिना एन्क्रिप्शन के सूचनाएँ भेजें';
$string['sendtest'] = 'मेरे उपकरणों पर परीक्षण धक्का अधिसूचना भेजें';
$string['sendtestconfirmation'] = 'इस साइट से जुड़ने के लिए आपके द्वारा उपयोग किए जाने वाले उपकरणों को एक परीक्षण धक्का सूचना भेजी जाएगी। कृपया सुनिश्चित करना कि आपके उपकरण इंटरनेट से जुड़े हुए हैं और मोबाइल ऐप खुला नहीं है (क्योंकि धक्का अधिसूचनाएँ केवल तभी प्रदर्शित होती हैं जब पृष्ठभूमि में प्राप्त होती हैं)।';
$string['serverconnectivityerror'] = 'यह साइट अधिसूचना सर्वर {$a} से जुड़ने में सक्षम नहीं है';
$string['showhide'] = 'उपकरण को सक्षम/अक्षम करें।';
$string['sitemustberegistered'] = 'सार्वजनिक Airnotifier इंस्टेंस का उपयोग करने के लिए, आपकी साइट पंजीकृत होनी चाहिए। वैकल्पिक रूप से, आप <a href="https://apps.moodle.com">Moodle Apps Portal</a> पर एक खाता बनाकर एक्सेस कुंजी प्राप्त कर सकते हैं।';
$string['unknowndevice'] = 'अज्ञात उपकरण';
$string['userdevices'] = 'उपयोगकर्ता उपकरण';
$string['view_notification'] = 'देखने के लिए टैप करें';
