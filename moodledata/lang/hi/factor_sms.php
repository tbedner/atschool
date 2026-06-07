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
 * Strings for component 'factor_sms', language 'hi', version '4.4'.
 *
 * @package     factor_sms
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = 'मोबाइल फोन नंबर का प्रबंधन करें';
$string['action:revoke'] = 'मोबाइल फोन नंबर हटा दें';
$string['addnumber'] = 'मोबाइल नंबर';
$string['clientnotfound'] = 'AWS सेवा क्लाइंट नहीं मिला। क्लाइंट का क्लासनेम पूरी तरह से योग्य होना चाहिए, उदाहरण के लिए \\Aws\\S3\\S3Client।';
$string['editphonenumber'] = 'फ़ोन नंबर संपादित करें';
$string['editphonenumberinfo'] = 'यदि आपको कोड प्राप्त करना नहीं हुआ है अथवा गलत संख्अथवा दर्ज की है, तो कृपअथवा संख्अथवा को संपादित करें और फिर से प्रअथवास करें।';
$string['error:emptyverification'] = 'खाली कोड। फिर से कोशिश करें।';
$string['error:wrongphonenumber'] = 'आपके द्वारा बशर्ते, यह कि फोन नंबर वैध प्रारूप में नहीं है।';
$string['error:wrongverification'] = 'गलत कोड। फिर से कोशिश करें।';
$string['errorawsconection'] = 'AWS सर्वर से जुड़ने में त्रुटिः {$a}';
$string['errorsmssent'] = 'अपने सत्यापन कोड वाला एक SMS  सन्देश, सूचना भेजने में त्रुटि।';
$string['event:smssent'] = 'SMS सन्देश, सूचना भेजा।';
$string['event:smssentdescription'] = 'उपयोगकर्ता आईडी {$a->userid} वाले उपयोगकर्ता को एसएमएस के माध्यम से एक सत्यापन कोड भेजा गया। जानकारी: {$a->debuginfo}';
$string['info'] = 'आपके द्वारा चुने गए मोबाइल नंबर पर एक सत्यापन कोड भेजा गया है।';
$string['logindesc'] = 'मोबाइल नंबर {$a} पर 6 अंकों का कोड युक्त SMS संदेश भेजा गया।';
$string['loginoption'] = 'आपके मोबाइल फोन पर एक कोड भेजा जाएगा';
$string['loginskip'] = 'मुझे कोई कोड प्राप्त नहीं हुआ।';
$string['loginsubmit'] = 'जारी रखें';
$string['logintitle'] = 'अपने मोबाइल पर भेजा गया सत्यापन कोड दर्ज करें';
$string['managefactor'] = 'SMS का प्रबंधन करें';
$string['managefactorbutton'] = 'प्रबंधन करें';
$string['manageinfo'] = 'आप प्रमाणीकृत करने के लिए \'{$a}\' का उपयोग कर रहे हैं।';
$string['phonehelp'] = 'सत्यापन कोड प्राप्त करना के लिए अपना मोबाइल नंबर (देश कोड सहित) दर्ज करें।';
$string['pluginname'] = 'SMS मोबाइल फोन';
$string['privacy:metadata'] = 'SMS  मोबाइल फोन फैक्टर प्लगइन किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करता है।';
$string['revokefactorconfirmation'] = '\'{$a}\' SMS हटाएँ?';
$string['settings:aws'] = 'AWS SNS';
$string['settings:aws:key'] = 'कुंजी';
$string['settings:aws:key_help'] = 'अमेज़न API प्रमुख प्रमाण पत्र।';
$string['settings:aws:region'] = 'क्षेत्र';
$string['settings:aws:region_help'] = 'अमेज़न API गेटवे क्षेत्र।';
$string['settings:aws:secret'] = 'Secret';
$string['settings:aws:secret_help'] = 'अमेज़न API गुप्त क्रेडेंशियल।';
$string['settings:aws:usecredchain'] = 'डिफ़ॉल्ट क्रेडेंशियल प्रदाता श्रृंखला का उपयोग करके AWS क्रेडेंशियल खोजें';
$string['settings:countrycode'] = 'देश संख्या कोड';
$string['settings:countrycode_help'] = 'यदि उपयोगकर्ता + उपसर्ग वाला अंतर्राष्ट्रीय नंबर दर्ज नहीं करते हैं, तो डिफ़ॉल्ट रूप से कॉलिंग कोड में से प्रारंभिक + हटा दिया जाता है।

कॉलिंग कोड की सूची के लिए यह लिंक देखें: {$a}';
$string['settings:duration'] = 'वैधता अवधि';
$string['settings:duration_help'] = 'समय की अवधि कि कोड वैध है।';
$string['settings:gateway_help'] = 'जिस SMS  प्रदाता के माध्यम से आप संदेश भेजना चाहते हैं';
$string['setupfactor'] = 'SMS सेट करें';
$string['setupfactorbutton'] = 'सेट करें';
$string['setupsubmitcode'] = 'बचाएँ';
$string['setupsubmitphone'] = 'कोड भेजें';
$string['smsstring'] = '{$a->code} आपका {$a->fullname} एक बार इस्तेमाल होने वाला सुरक्षा कोड है।

@{$a->url} #{$a->code}';
$string['summarycondition'] = 'SMS वन-टाइम सिक्योरिटी कोड का उपयोग करना';
