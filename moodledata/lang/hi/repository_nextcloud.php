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
 * Strings for component 'repository_nextcloud', language 'hi', version '4.4'.
 *
 * @package     repository_nextcloud
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['both'] = 'आंतरिक व बाह्य';
$string['cannotconnect'] = 'उपयोगकर्ता को प्रमाणित नहीं किया जा सका। कृपया लॉग इन करें और फिर फ़ाइल अपलोड करें।';
$string['chooseissuer'] = 'जारीकर्ता';
$string['chooseissuer_help'] = 'नया जारीकर्ता जोड़ने के लिए, साइट प्रशासन / सर्वर / OAuth 2 सेवाओं पर जाएं।';
$string['configplugin'] = 'Nextcloud रिपॉजिटरी कॉन्फ़िगरेशन';
$string['configuration_exception'] = 'OAuth 2 क्लाइंट के कॉन्फ़िगरेशन में एक त्रुटि हुई: {$a}';
$string['contactadminwith'] = 'अनुरोधित कार्रवाई को निष्पादित नहीं किया जा सका। यदि ऐसा बार-बार होता है, तो कृपया निम्नलिखित अतिरिक्त जानकारी के साथ साइट प्रशासक से संपर्क करें: <b> "<i> {$a} </i>"।';
$string['couldnotmove'] = 'अनुरोधित फ़ाइल को {$a} फ़ोल्डर में स्थानांतरित नहीं किया जा सका।';
$string['defaultreturntype'] = 'डिफ़ॉल्ट वापसी प्रकार';
$string['endpointnotdefined'] = 'समापन बिंदु {$a} परिभाषित नहीं है।';
$string['external'] = 'बाहरी (केवल कड़ी में संग्रहीत)';
$string['externalpubliclinkwarning'] = 'चेतावनी: यह दाखिल करना सार्वजनिक हो जाएगी।';
$string['filenotaccessed'] = 'अनुरोधित फ़ाइल तक पहुँचा नहीं जा सका। कृपया जांचें कि क्या आपने एक मान्य फ़ाइल चुनी है और आप सही खाते से प्रमाणित हैं।';
$string['fileoptions'] = 'लौटाई गई फ़ाइलों के प्रकार और चूक यहाँ कॉन्फ़िगर करने योग्य हैं। ध्यान दें कि बाहरी रूप से जुड़ी सभी फाइलें अपडेट हो जाएंगी, ताकि मालिक मूडल सिस्टम खाता हो।';
$string['foldername'] = 'नेक्सट्क्लॉउड उपयोगकर्ताओं के निजी स्थान में बनाए गए फ़ोल्डर का नाम जो सभी एक्सेस-नियंत्रित लिंक रखता है।';
$string['foldername_help'] = 'यह सुनिश्चित करना करने के लिए कि उपयोगकर्ताओं को उनके साथ साझा की गई फ़ाइलें मिलें, शेयरों को एक विशिष्ट फोल्डर, चौपन्ना में सहेजा जाता है। यह सेटिंग फोल्डर, चौपन्ना का नाम निर्धारित करती है। अपने मूडल उदाहरण से जुड़ा नाम चुनने की सिफारिश की जाती है।';
$string['internal'] = 'आंतरिक (मूडल में संग्रहीत फ़ाइलें)';
$string['invalidresponse'] = 'अमान्य सर्वर प्रतिक्रिया।';
$string['issuervalidation_invalid'] = 'वर्तमान में {$a} जारीकर्ता सक्रिय है, हालांकि यह सभी आवश्यक समापन बिंदुओं को लागू नहीं करता है। रिपॉजिटरी काम नहीं करेगी।';
$string['issuervalidation_valid'] = 'वर्तमान में {$a} जारीकर्ता सक्रिय है।';
$string['issuervalidation_without'] = 'आपने अभी तक OAuth 2 जारीकर्ता के रूप में एक नेक्सट्क्लॉउड सर्वर का चयन नहीं किया है।';
$string['nextcloud'] = 'नेक्सट्क्लॉउड';
$string['nextcloud:view'] = 'नेक्सट्क्लॉउड देखें';
$string['no_right_issuers'] = 'मौजूदा जारीकर्ताओं में से कोई भी सभी आवश्यक समापन बिंदुओं को लागू नहीं करता है। कृपया एक उपयुक्त जारीकर्ता को पंजीकृत करें।';
$string['noclientconnection'] = 'OAuth क्लाइंट कनेक्ट नहीं किए जा सके।';
$string['notauthorized'] = 'आप इस अनुरोध को निष्पादित करने के लिए अधिकृत नहीं हैं। कृपया सुनिश्चित करें कि आप सही खाते से प्रमाणित हैं।';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Link to OAuth 2 सेवाएँ कॉन्फ़िगरेशन"> OAuth 2 सेवाएँ कॉन्फ़िगरेशन </a>';
$string['pathnotcreated'] = 'फ़ोल्डर पथ {$a} सिस्टम खाते में नहीं बनाया जा सका।';
$string['pluginname'] = 'नेक्सट्क्लॉउड';
$string['pluginname_help'] = 'नेक्सट्क्लॉउड रिपॉजिटरी';
$string['privacy:metadata'] = 'नेक्स्टक्लाड रिपॉजिटरी प्लगइन न तो किसी व्यक्तिगत डेटा को स्टोर करता है और न ही उपयोगकर्ता डेटा को रिमोट सिस्टम तक पहुंचाता है।';
$string['request_exception'] = '{$a-> instance} का अनुरोध विफल हो गया है। {$a-> errormessage}';
$string['requestnotexecuted'] = 'अनुरोध निष्पादित नहीं किया जा सका। यदि यह बार-बार होता है, तो कृपया साइट व्यवस्थापक से संपर्क करें।';
$string['right_issuers'] = 'निम्नलिखित जारीकर्ता आवश्यक समापन बिंदुओं को लागू करते हैं: <br> {$a}';
$string['supportedreturntypes'] = 'समर्थित फ़ाइलें';
