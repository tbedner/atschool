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
 * Strings for component 'cachestore_file', language 'hi', version '4.4'.
 *
 * @package     cachestore_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncpurge'] = 'असंगत रूप से शुद्धिकरण निर्देशिका';
$string['asyncpurge_help'] = 'यदि सक्षम किया जाता है, तो नई निर्देशिका को कैश संशोधन के साथ बनाया जाता है और पुरानी निर्देशिका को एक छत्तीसगढ़ में आदिवासी क्षेत्र कार्य के माध्यम से असंगत रूप से हटा दिया जाएगा।';
$string['autocreate'] = 'स्वचालित रूप से निर्देशिका बनाएँ';
$string['autocreate_help'] = 'यदि सक्षम किया जाता है तो मार्ग में निर्दिष्ट निर्देशिका स्वचालित रूप से बनाई जाएगी यदि यह पहले से मौजूद नहीं है।';
$string['lockwait'] = 'उच्‍चतम लॉक प्रतीक्षा समय';
$string['lockwait_help'] = 'कैश कुंजी पढ़ने अथवा लिखने से पहले एक विशेष ताला का इंतजार करने के लिए सेकंड में उच्‍चतम समय। इसका उपयोग केवल कैश परिभाषाओं के लिए किअथवा जाता है जिनमें पढ़ने अथवा लिखने के लिए ताला की अपेक्षितता होती है।';
$string['path'] = 'कैश पथ';
$string['path_help'] = 'इस कैश स्टोर के लिए दाखिल करनाों को संग्रहीत करने के लिए जिस निर्देशिका का उपयोग किया जाना चाहिए। यदि खाली छोड़ दिया जाता है (डिफ़ॉल्ट) तो मूडलेडाटा निर्देशिका में एक निर्देशिका स्वचालित रूप से बनाई जाएगी। इसका उपयोग एक बेहतर प्रदर्शन ड्राइव (जैसे स्मृति में) पर एक निर्देशिका की ओर एक दाखिल करना स्टोर को इंगित करने के लिए किया जा सकता है।';
$string['pluginname'] = 'दाखिल करना कैश';
$string['prescan'] = 'प्रेस्कैन निर्देशिका';
$string['prescan_help'] = 'यदि सक्षम किया जाता है तो निर्देशिका को स्कैन किया जाता है जब कैश का पहली बार उपयोग किया जाता है और दाखिल करनाों के लिए अनुरोधों को पहले स्कैन किए गए डेटा विरुद्ध जांचा जाता है। यह मदद कर सकता है यदि आपके पास एक धीमी दाखिल करना तंत्र है और आप पा रहे हैं कि दाखिल करना प्रचालन आपके लिए गर्दन की बोतल का कारण बन रहे हैं।';
$string['privacy:metadata'] = 'दाखिल करना कैश कैशस्टोर प्लगइन अपनी कैशिंग कार्यक्षमता के हिस्से के रूप में डेटा को संक्षेप में संग्रहीत करता है लेकिन इस डेटा को नियमित रूप से साफ किया जाता है।';
$string['singledirectory'] = 'एकल निर्देशिका स्टोर';
$string['singledirectory_help'] = 'यदि सक्षम फाइलों (कैश आइटम) को कई निर्देशिकाओं में विभाजित करने के बजाय एक ही निर्देशिका में संग्रहीत किया जाएगा। इसे सक्षम करने से दाखिल करना बातचीत में तेजी आएगी लेकिन दाखिल करना सिस्टम सीमाओं को छूने के बढ़ते जोखिम की कीमत पर आएगी। इसे केवल तभी चालू करने की सलाह दी जाती है जब निम्नलिखित सत्य हो: * यदि आप जानते हैं कि कैश में वस्तुओं की संख्या इतनी कम होने वाली है कि इससे आपके द्वारा चलाए जा रहे दाखिल करना सिस्टम में समस्याएं नहीं होंगी। * कैश किया जा रहा डेटा उत्पन्न करने के लिए महंगा नहीं है। यदि यह तब चूकना के साथ बना रहता है तो यह अभी भी बेहतर विकल्प हो सकता है क्योंकि यह समस्याओं की संभावना को कम करता है।';
$string['task_asyncpurge'] = 'असंगत रूप से दाखिल करना स्टोर पुरानी कैश संशोधन निर्देशिकाओं को साफ़ करें';
