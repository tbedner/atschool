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
 * Strings for component 'search_solr', language 'hi', version '4.4'.
 *
 * @package     search_solr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = 'निर्दिष्ट सोलर सर्वर उपलब्ध नहीं है या निर्दिष्ट सूचकांक मौजूद नहीं है';
$string['connectionsettings'] = 'संपर्क व्यवस्था';
$string['errorcreatingschema'] = 'सोल स्कीमा बनाने में त्रुटि: {$a}';
$string['errorsolr'] = 'सौर खोज इंजन ने एक त्रुटि की सूचना दीः {$a}';
$string['errorvalidatingschema'] = 'सौर योजना को मान्य करने में त्रुटि: क्षेत्र {$a-> fieldname} मौजूद नहीं है। अपेक्षित क्षेत्र स्थापित करने के लिए कृपया <a href="{$a->setupurl}">इस लिंक का पालन करें</a>';
$string['extensionerror'] = 'Apache Solr PHP एक्सटेंशन स्थापित नहीं है। कृपया दस्तावेज़ देखें।';
$string['fileindexing'] = 'फ़ाइल अनुक्रमण इनेबल करें';
$string['fileindexing_help'] = 'यदि आपका सोलर इंस्टॉल इसका समर्थन करता है, तो यह सुविधा मूडल को अनुक्रमित होने के लिए फाइल भेजने की अनुमति देती है। <br/>
सभी फ़ाइलों को जोड़ने के लिए इस विकल्प को इनेबल करने के बाद आपको सभी साइट सामग्री को फिर से लिखना होगा।';
$string['fileindexsettings'] = 'फ़ाइल अनुक्रमण सेटिंग्स';
$string['maxindexfilekb'] = 'अनुक्रमणिका के लिए अधिकतम फ़ाइल आकार (kB)';
$string['maxindexfilekb_help'] = 'इस संख्या में किलोबाइट से बड़ी फ़ाइलों को खोज अनुक्रमण में शामिल नहीं किया जाएगा। यदि शून्य पर सेट किया जाता है, तो किसी भी आकार की फ़ाइलों को अनुक्रमित किया जाएगा।';
$string['minimumsolr4'] = 'सोलर 4.0 मूडल के लिए आवश्यक न्यूनतम संस्करण है';
$string['missingconfig'] = 'आपका Apache Solr सर्वर अभी तक मूडल में कॉन्फ़िगर नहीं किया गया है।';
$string['multivaluedfield'] = 'फ़ील्ड "{$a}" स्केलर के बजाय एक सरणी लौटाता है। कृपया मौजूदा इंडेक्स हटाएं, एक नया बनाएं और सोलर में डेटा इंडेक्स करने से पहले setup_schema.php चलाएं।';
$string['nodatafromserver'] = 'सर्वर से कोई डेटा नहीं';
$string['pluginname'] = 'सोलर';
$string['privacy:metadata'] = 'यह प्लगइन एक लिंक किए गए सोलर सर्च इंजन के लिए बाहरी रूप से डेटा भेजता है। यह स्थानीय रूप से डेटा को स्टोर नहीं करता है।';
$string['privacy:metadata:data'] = 'व्यक्तिगत डेटा खोज सबसिस्टम से होकर गुजरा।';
$string['schemafieldautocreated'] = 'फ़ील्ड "{$a}" पहले से ही सोलर स्कीमा में मौजूद है। डेटा और फ़ील्ड्स को अनुक्रमणित करने से पहले आप शायद इस स्क्रिप्ट को चलाना भूल गए थे। कृपया मौजूदा इंडेक्स को हटा दें, एक नया बनाएं और सोलर में डेटा इंडेक्स करने से पहले setup_schema.php को फिर से चलाएं।';
$string['schemasetupfromsolr5'] = 'आपका सोलर सर्वर संस्करण 5.0 से कम है। यह स्क्रिप्ट केवल आपका स्कीमा सेट कर सकती है यदि आपका सोलर संस्करण 5.0 या उच्चतर है। आपको अपने स्कीमा में फ़ील्ड्स को मैन्युअल रूप से \\search_solr \\document के अनुसार सेट करना होगा :: get_default_fields_definition ()';
$string['searchinfo'] = 'प्रश्न खोजें';
$string['searchinfo_help'] = 'वह खोजा जाने वाला क्षेत्र खोज क्वेरी को \'शीर्षक:\', \'सामग्री:\', \'नाम:\', या \'परिचय:\' के साथ जोड़कर निर्दिष्ट किया जा सकता है। उदाहरण के लिए, \'शीर्षक: समाचार\' के लिए खोज करने से शीर्षक में \'समाचार\' शब्द के परिणाम आएंगे।

बूलियन ऑपरेटर (\'AND\', \'OR\', \'NOT\') का प्रयोग खोजशब्दों को मिलाने या बाहर करने के लिए किया जा सकता है।

वाइल्डकार्ड वर्ण (\'*\' या \'?\') का उपयोग खोज क्वेरी में वर्णों का प्रतिनिधित्व करने के लिए किया जा सकता है।';
$string['setupok'] = 'स्कीमा उपयोग करने के लिए तैयार है।';
$string['solrauthpassword'] = 'HTTP प्रमाणीकरण पासवर्ड';
$string['solrauthuser'] = 'HTTP प्रमाणीकरण उपयोगकर्ता नाम';
$string['solrhttpconnectionport'] = 'पोर्ट';
$string['solrhttpconnectiontimeout'] = 'समय समाप्त';
$string['solrhttpconnectiontimeout_desc'] = 'HTTP कनेक्शन टाइमआउट HTTP डेटा ट्रांसफर ऑपरेशन के लिए अनुमत सेकंड में अधिकतम समय है।';
$string['solrindexname'] = 'सूचकांक नाम';
$string['solrinfo'] = 'सोलर';
$string['solrnotselected'] = 'सोलर इंजन कॉन्फ़िगर किया गया खोज इंजन नहीं है';
$string['solrsecuremode'] = 'सुरक्षित मोड';
$string['solrserverhostname'] = 'होस्ट का नाम';
$string['solrserverhostname_desc'] = 'सौर सर्वर का डोमेन नाम।';
$string['solrsetting'] = 'सौर सेटिंग्स';
$string['solrsslcainfo'] = 'SSL CA प्रमाणपत्र नाम';
$string['solrsslcainfo_desc'] = 'साथियों को सत्अथवापित करने के लिए एक अथवा अधिक CA प्रमाणपत्र रखने वाला दाखिल करना नाम';
$string['solrsslcapath'] = 'SSL CA  प्रमाणन मार्ग';
$string['solrsslcapath_desc'] = 'साथियों को सत्यापित करना के लिए कई CA प्रमाणपत्र रखने वाला निर्देशिका मार्ग';
$string['solrsslcert'] = 'SSL प्रमाणपत्र';
$string['solrsslcert_desc'] = 'PEM-प्रारूपित निजी प्रमाणपत्र के लिए दाखिल करना नाम';
$string['solrsslkey'] = 'SSL कुंजी';
$string['solrsslkey_desc'] = 'PEM-प्रारूपित निजी कुंजी पर दाखिल करना नाम';
$string['solrsslkeypassword'] = 'SSL प्रमुख कूटशब्द';
$string['solrsslkeypassword_desc'] = 'PEM-प्रारूपित निजी कुंजी दाखिल करना के लिए पासवर्ड';
