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
 * Strings for component 'repository_onedrive', language 'hi', version '4.4'.
 *
 * @package     repository_onedrive
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access'] = 'पहुंच';
$string['both'] = 'आंतरिक व बाह्य';
$string['cachedef_folder'] = 'OneDrive फ़ाइल ID को सिस्टम खाते के फ़ोल्डरों के लिए';
$string['configplugin'] = 'OneDrive प्लगइन कॉन्फ़िगर करें';
$string['confirmimportskydrive'] = 'क्या आप सुनिश्चित हैं कि आप माइक्रोसॉफ्ट SkyDrive रिपॉजिटरी से माइक्रोसॉफ्ट OneDrive रिपॉजिटरी की सभी फाइलों को आयात करना चाहते हैं? माइक्रोसॉफ्ट OneDrive रिपॉजिटरी को पहले की तरह काम करने के लिए कॉन्फ़िगर किया जाना चाहिए और आयातित फ़ाइलों के लिए काम करना चाहिए। चेतावनी: यह क्रिया पूर्ववत नहीं की जा सकती है!';
$string['defaultreturntype'] = 'डिफ़ॉल्ट वापसी प्रकार';
$string['external'] = 'बाहरी (केवल कड़ी में संग्रहीत)';
$string['fileoptions'] = 'लौटाई गई फ़ाइलों के प्रकार और चूक यहाँ कॉन्फ़िगर करने योग्य हैं। ध्यान दें कि बाहरी रूप से जुड़ी सभी फाइलें अपडेट हो जाएंगी, ताकि मालिक मूडल सिस्टम खाता हो।';
$string['importskydrivefiles'] = 'Microsoft SkyDrive रिपॉजिटरी से फ़ाइलें आयात करें';
$string['internal'] = 'आंतरिक (मूडल में संग्रहीत फ़ाइलें)';
$string['issuer'] = 'OAuth 2 सेवा';
$string['issuer_help'] = 'OneDrive API से बात करने के लिए कॉन्फ़िगर की गई OAuth 2 सेवा का चयन करें। यदि सेवा अभी तक मौजूद नहीं है, तो आपको इसे बनाने की आवश्यकता होगी।';
$string['mysitenotfound'] = 'आपने पहले कभी OneDrive में लॉग इन नहीं किया है। Moodle के साथ उपयोग किए जाने से पहले आपको कम से कम एक बार OneDrive में लॉग इन करना होगा।';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Link to OAuth 2 सेवाएँ कॉन्फ़िगरेशन"> OAuth 2 सेवाएँ कॉन्फ़िगरेशन </a>';
$string['onedrive:view'] = 'OneDrive रिपॉजिटरी देखें';
$string['owner'] = 'इसके स्वामित्व में: {$a}';
$string['pluginname'] = 'माइक्रोसॉफ्ट OneDrive';
$string['privacy:metadata:repository_onedrive'] = 'Microsoft OneDrive रिपॉजिटरी अस्थायी पहुंच अनुदानों को संग्रहीत करता है, और उपयोगकर्ता डेटा को मूडल से रिमोट सिस्टम तक पहुंचाता है।';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:itemid'] = 'माइक्रोसॉफ्ट OneDrive अस्थायी पहुँच अनुदान आइटम ID के साथ।';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:permissionid'] = 'माइक्रोसॉफ्ट OneDrive अस्थायी पहुँच अनुदान अनुमति ID।';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timecreated'] = 'माइक्रोसॉफ्ट OneDrive अस्थायी पहुँच अनुदान निर्माण तिथि / समय।';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timemodified'] = 'माइक्रोसॉफ्ट OneDrive अस्थायी पहुँच अनुदान संशोधन दिनांक / समय।';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:usermodified'] = 'माइक्रोसॉफ्ट OneDrive अस्थायी पहुँच अनुदान को संशोधित करने वाले उपयोगकर्ता की आईडी।';
$string['privacy:metadata:repository_onedrive:searchtext'] = 'माइक्रोसॉफ्ट OneDrive रिपॉजिटरी उपयोगकर्ता खोज पाठ क्वेरी।';
$string['removetempaccesstask'] = 'नियंत्रित लिंक से अस्थायी लेखन पहुँच को हटा दें';
$string['searchfor'] = '{$a} खोजें';
$string['servicenotenabled'] = 'पहुंच कॉन्फ़िगर नहीं है।';
$string['skydrivefilesexist'] = 'माइक्रोसॉफ्ट स्काईड्राइव भंडार सक्षम है लेकिन इसे बंद कर दिया गया है। कृपया सुनिश्चित करना कि आप फाइलों को स्काईड्राइव से वनड्राइव भंडार में जल्द से जल्द स्थानांतरित कर दें। मूडल 4.4 में यह अब संभव नहीं होगा।';
$string['skydrivefilesimported'] = 'सभी फ़ाइलें माइक्रोसॉफ्ट स्काईड्राइव  रिपॉजिटरी से आयात की गई थीं।';
$string['skydrivefilesnotimported'] = 'कुछ फ़ाइलें माइक्रोसॉफ्ट  स्काईड्राइव  रिपॉजिटरी से आयात नहीं की जा सकती हैं।';
$string['supportedreturntypes'] = 'समर्थित फ़ाइलें';
