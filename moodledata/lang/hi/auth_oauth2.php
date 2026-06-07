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
 * Strings for component 'auth_oauth2', language 'hi', version '4.4'.
 *
 * @package     auth_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountexists'] = 'इस उपयोगकर्ता नाम के साथ इस साइट पर पहले से ही एक उपयोगकर्ता मौजूद है। यदि यह आपका खाता है, तो अपना उपयोगकर्ता नाम और पासवर्ड दर्ज करके लॉग इन करें और इसे अपने वरीयता पृष्ठ के माध्यम से एक जुड़े हुए लॉगिन के रूप में जोड़ें।';
$string['alreadylinked'] = 'यह बाहरी खाता पहले से ही इस साइट पर एक खाते से जुड़ा हुआ है';
$string['auth_oauth2description'] = 'outh  2 मानक आधारित प्रमाणीकरण';
$string['auth_oauth2settings'] = 'outh 2 प्रमाणीकरण सेटिंग्स।';
$string['confirmaccountemailsubject'] = '{$a}: खाते की पुष्टि करना';
$string['confirmationinvalid'] = 'पुष्टि करना करण लिंक अथवा तो अमान्य है, अथवा समाप्त हो गअथवा है। कृपअथवा एक नअथवा पुष्टि करना करण ईमेल बनाने के लिए फिर से लॉगिन प्रक्रम शुरू करें।';
$string['confirmationpending'] = 'यह खाता ईमेल पुष्टि करना के लिए विचाराधीन है।';
$string['confirmlinkedloginemailsubject'] = '{$a}: जुड़ा हुआ लॉगिन पुष्टि करना';
$string['createaccountswarning'] = 'यह प्रमाणीकरण प्लगइन उपयोगकर्ताओं को आपकी साइट पर खाते बनाने की अनुमति देता है। यदि आप इस प्लगइन का उपयोग करते हैं तो आप "authpreventaccountcreation" सेटिंग को सक्षम करना चाह सकते हैं।';
$string['createnewlinkedlogin'] = 'एक नए खाते को जोड़ें ({$a})';
$string['emailconfirmlink'] = 'अपने खातों को लिंक करें';
$string['emailconfirmlinksent'] = 'इस ईमेल पते के साथ एक मौजूदा खाता पाया गया था लेकिन यह अभी तक जुड़ा नहीं है। </p> <p> लॉग इन करने से पहले खातों को जुड़ा होना चाहिए। </p> <p> आपके पते पर <b> {$a} </b> पर एक ईमेल भेजा जाना चाहिए था। </p> <p> इसमें आपके खातों को जोड़ने के लिए आसान निर्देश हैं। </p> <p> यदि आपको कोई कठिनाई हो रही है, तो साइट प्रशासक से संपर्क करें।';
$string['emailpasswordchangeinfo'] = 'नमस्ते {$a-> firstname}, किसी ने (शायद आपने) \'{$a-> sitename}\' पर आपके खाते के लिए एक नया पासवर्ड माँगा है। तथापि आपका पासवर्ड रीसेट नहीं किया जा सकता है क्योंकि आप लॉग इन करने के लिए दूसरी साइट पर अपने खाते का उपयोग कर रहे हैं। लॉगिन पेज पर दिए गए लिंक का उपयोग करके कृपया पहले की तरह लॉग इन करें। {$a-> admin}';
$string['emailpasswordchangeinfosubject'] = '{$a}: पासवर्ड की जानकारी बदलें';
$string['info'] = 'बाहरी खाता';
$string['issuer'] = 'OAuth 2 सेवा';
$string['key'] = 'कुंजी';
$string['linkedlogins'] = 'जुड़े हुए लॉगिन';
$string['linkedloginshelp'] = 'जुड़े हुए लॉगिन में मदद करें';
$string['loggedin'] = 'उपयोगकर्ता ने प्रदाता के साथ सफलतापूर्वक प्रमाणीकरण किया।';
$string['loginerror_authenticationfailed'] = 'प्रमाणीकरण प्रक्रम विफल रही।';
$string['loginerror_cannotcreateaccounts'] = 'आपके ईमेल पते वाला खाता नहीं मिल सका।';
$string['loginerror_invaliddomain'] = 'इस साइट पर ईमेल पते की अनुमत नहीं है।';
$string['loginerror_nouserinfo'] = 'कोई उपयोगकर्ता जानकारी वापस नहीं की गई। OAuth 2 सेवा को गलत तरीके से कॉन्फ़िगर किया जा सकता है।';
$string['loginerror_userincomplete'] = 'लौटाई गई उपयोगकर्ता जानकारी में उपयोगकर्ता नाम और ईमेल सम्बोधन नहीं था। OAuth 2 सेवा को गलत तरीके से कॉन्फ़िगर किया जा सकता है।';
$string['noconfiguredidps'] = 'कोई कॉन्फ़िगर किए गए oauth2 प्रदाता नहीं हैं।';
$string['noissuersavailable'] = 'कॉन्फ़िगर की गई OAuth  2 सेवाओं में से कोई भी आपको लॉगिन खातों को जोड़ने की अनुमति देना नहीं देता है।';
$string['notenabled'] = 'क्षमा करें, outh 2 प्रमाणीकरण प्लगइन सक्षम नहीं है';
$string['notloggedindebug'] = 'लॉगिन करने का प्रयास विफल रहा। कारणः {$a}';
$string['notwhileloggedinas'] = 'किसी अन्य उपयोगकर्ता के रूप में लॉग इन करते समय जुड़े हुए लॉगिन का प्रबंधन नहीं किया जा सकता है।';
$string['oauth2:managelinkedlogins'] = 'अपने खुद के जुड़े हुए लॉगिन खातों का प्रबंधन करें';
$string['plugindescription'] = 'यह प्रमाणीकरण प्लगइन लॉगिन पृष्ठ पर कॉन्फ़िगर किए गए पहचान प्रदाताओं की एक सूची प्रदर्शित करता है। एक पहचान प्रदाता का चयन करने से उपयोगकर्ता OAuth  2 प्रदाता से अपनी परिचयपत्र के साथ लॉग इन कर सकते हैं।';
$string['privacy:metadata:auth_oauth2'] = 'outh 2 प्रमाणीकरण';
$string['privacy:metadata:auth_oauth2:authsubsystem'] = 'यह प्लगइन प्रमाणीकरण उपप्रणाली से संबद्ध है।';
$string['privacy:metadata:auth_oauth2:confirmtoken'] = 'पुष्टि करना करण सांकेतिक।';
$string['privacy:metadata:auth_oauth2:confirmtokenexpires'] = 'समय टिकट जब पुष्टि करना करण सांकेतिक समाप्त हो जाता है।';
$string['privacy:metadata:auth_oauth2:email'] = 'बाहरी ईमेल जो इस खाते को मैप करता है।';
$string['privacy:metadata:auth_oauth2:issuerid'] = 'इस outh 2 लॉगिन के लिए outh 2 जारीकर्ता की ID';
$string['privacy:metadata:auth_oauth2:tableexplanation'] = 'उपयोगकर्ता के मॉड्यूल खाते से जुड़े OAuth 2 खाते।';
$string['privacy:metadata:auth_oauth2:timecreated'] = 'टाइमस्टैम्प जब उपयोगकर्ता खाता OAuth  2 लॉगिन से जुड़ा हुआ था।';
$string['privacy:metadata:auth_oauth2:timemodified'] = 'टाइमस्टैम्प जब इस अभिलेख को संशोधित किया गया था।';
$string['privacy:metadata:auth_oauth2:userid'] = 'उपयोगकर्ता खाते की ID जिससे OAuth 2 लॉगिन जुड़ा हुआ है।';
$string['privacy:metadata:auth_oauth2:usermodified'] = 'इस खाते को संशोधित करने वाले उपयोगकर्ता की ID';
$string['privacy:metadata:auth_oauth2:username'] = 'बाहरी उपयोगकर्ता नाम जो इस खाते का नक्शा बनाता है।';
$string['testidplogin'] = 'के साथ लॉग इन करेंः';
$string['userinfo'] = 'प्रदाता से उपयोगकर्ता डेटाः';
$string['value'] = 'मूल्य';
