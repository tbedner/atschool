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
 * Strings for component 'factor_totp', language 'hi', version '4.4'.
 *
 * @package     factor_totp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = 'समय-आधारित एक बार का पासवर्ड (TOTP) प्रमाणीकरण प्रबंधित करें';
$string['action:revoke'] = 'समय-आधारित एक बार का पासवर्ड (TOTP) प्रमाणीकरण को हटा दें';
$string['devicename'] = 'उपकरण लेबल';
$string['devicename_help'] = 'यह वह उपकरण है जिस पर आपके पास एक प्रमाणीकरण ऐप स्थापित है। आप कई उपकरण स्थापित कर सकते हैं ताकि यह लेबल यह ट्रैक करने में मदद करे कि किनका उपयोग किया जा रहा है। आपको प्रत्येक उपकरण को उनके अपने विशिष्ट कोड के साथ स्थापित करना चाहिए ताकि उन्हें अलग से निरस्त किया जा सके।';
$string['devicenameexample'] = 'उदाहरण के लिए "आईफोन 11 पर काम करें"';
$string['error:alreadyregistered'] = 'यह समय-आधारित एक बार का पासवर्ड (TOTP) भेद पहले ही पंजीकृत किया जा चुका है।';
$string['error:codealreadyused'] = 'इस कोड का उपयोग पहले ही प्रमाणीकरण के लिए किया जा चुका है। कृपया एक नया कोड उत्पन्न होने की प्रतीक्षा करें, और फिर से प्रयास करें।';
$string['error:futurecode'] = 'यह कोड अमान्य है। कृपया सत्यापित करना कि आपके प्रमाणीकरण उपकरण पर समय सही है और फिर से प्रयास करें। चालू, प्रचलित तंत्र समय {$a} है।';
$string['error:oldcode'] = 'यह कोड बहुत पुराना है। कृपया सत्यापित करना कि आपके प्रमाणीकरण उपकरण पर समय सही है और फिर से प्रयास करें। चालू, प्रचलित तंत्र समय {$a} है।';
$string['error:wrongverification'] = 'गलत सत्यापन कोड।';
$string['factorsetup'] = 'ऐप व्यवस्था, ढांचा';
$string['info'] = 'प्रमाणीकरण ऐप का उपयोग करके एक सत्यापन कोड उत्पन्न करें।';
$string['logindesc'] = 'कोड बनाने के लिए अपने मोबाइल उपकरण में प्रमाणीकरण ऐप का उपयोग करें।';
$string['loginoption'] = 'प्रमाणीकरण अनुप्रयोग का उपयोग करें';
$string['loginskip'] = 'मेरे पास अपना उपकरण नहीं है';
$string['loginsubmit'] = 'जारी रखें';
$string['logintitle'] = 'मोबाइल ऐप द्वारा सत्यापित करना कि आप हैं';
$string['managefactor'] = 'प्रमाणीकरण ऐप का प्रबंधन करें';
$string['managefactorbutton'] = 'प्रबंधित करें';
$string['manageinfo'] = 'आप प्रमाणीकृत करने के लिए \'{$a}\' का उपयोग कर रहे हैं।';
$string['pluginname'] = 'प्रमाणीकरण ऐप';
$string['privacy:metadata'] = 'प्रमाणीकरण ऐप कारक प्लगइन किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करता है।';
$string['replacefactor'] = 'प्रमाणीकरण ऐप बदलें';
$string['replacefactorconfirmation'] = '\'{$a}\' प्रमाणीकरण ऐप को बदलें?';
$string['revokefactorconfirmation'] = '\'{$a}\' प्रमाणीकरण ऐप को हटाएँ?';
$string['settings:totplink'] = 'मोबाइल ऐप सेटअप लिंक दिखाएँ';
$string['settings:totplink_help'] = 'यदि इसे सक्षम किया जाता है, तो उपयोगकर्ता को एक तीसरा सेटअप विकल्प दिखाई देगा जिसमें एक सीधा otpauth:// लिंक होगा।';
$string['settings:window'] = 'TOTP सत्यापन विंडो';
$string['setupfactor'] = 'प्रमाणीकरण ऐप स्थापित करें';
$string['setupfactor:account'] = 'खाताः';
$string['setupfactor:devicename'] = 'उपकरण का नाम';
$string['setupfactor:devicenameinfo'] = 'यह आपको यह पहचानने में मदद करता है कि किस उपकरण को सत्यापन कोड प्राप्त होता है।';
$string['setupfactor:enter'] = 'मैनुअल रूप से ब्योरा दर्ज करें';
$string['setupfactor:instructionsdevicename'] = '1. अपने उपकरण को एक नाम दें।';
$string['setupfactor:instructionsscan'] = '2. अपने प्रमाणीकरण ऐप से QR  कोड को स्कैन करें।';
$string['setupfactor:instructionsverification'] = '3. सत्यापन कोड दर्ज करें।';
$string['setupfactor:intro'] = 'इस विधि को सेट अप करने के लिए, आपके पास एक ऐसा डिवाइस होना चाहिए जिसमें ऑथेंटिकेटर ऐप हो। यदि आपके पास ऐप नहीं है, तो आप इसे डाउनलोड कर सकते हैं। उदाहरण के लिए, <a href="https://2fas.com/" target="_blank">2FAS Auth</a>, <a href="https://freeotp.github.io/" target="_blank">FreeOTP</a>, Google Authenticator, Microsoft Authenticator या Twilio Authy।';
$string['setupfactor:key'] = 'गुप्त कुंजीः';
$string['setupfactor:link'] = 'अथवा हाथ से ब्योरा दर्ज करें।';
$string['setupfactor:linklabel'] = 'इस उपकरण पर पहले से ही स्थापित ऐप खोलें';
$string['setupfactor:mode'] = 'प्रकार, विधा:';
$string['setupfactor:mode:timebased'] = 'समय-आधारित';
$string['setupfactor:scan'] = 'QR  कोड स्कैन करें';
$string['setupfactor:scanfail'] = 'स्कैन नहीं कर सकते?';
$string['setupfactor:scanwithapp'] = 'अपने चुने हुए प्रमाणीकरण आवेदन के साथ QR कोड स्कैन करें।';
$string['setupfactor:verificationcode'] = 'सत्यापन कोड';
$string['setupfactorbutton'] = 'स्थापित करें';
$string['summarycondition'] = 'TOTP ऐप का उपयोग करना';
$string['verificationcode'] = 'अपना 6 अंकों का सत्यापन कोड दर्ज करें';
$string['verificationcode_help'] = 'अपना प्रमाणीकरण ऐप खोलें जैसे कि गूगल प्रमाणीकरण और 6 अंकों का कोड खोजें जो इस साइट और उपयोगकर्ता नाम से मेल खाता हो।';
