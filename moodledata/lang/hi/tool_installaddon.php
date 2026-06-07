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
 * Strings for component 'tool_installaddon', language 'hi', version '4.4'.
 *
 * @package     tool_installaddon
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acknowledgement'] = 'पावती';
$string['acknowledgementtext'] = 'मैं समझता हूं कि अतिरिक्त प्लगइन स्थापित करने से पहले इस साइट का पूरा बैकअप लेना मेरी जिम्मेदारी है। मैं स्वीकार करता हूं और समझता हूं कि प्लगइन (विशेष रूप से लेकिन न केवल अनौपचारिक स्रोतों में उत्पन्न होने वाले) में जमानत छेद हो सकते हैं, साइट को अनुपलब्ध कर सकते हैं, अथवा निजी डेटा लीक अथवा हानि का कारण बन सकते हैं।';
$string['featuredisabled'] = 'इस साइट पर प्लगइन इंस्टॉलर अक्षम है।';
$string['installaddon'] = 'प्लगइन स्थापित करें!';
$string['installaddons'] = 'प्लगइन स्थापित करें!';
$string['installfromrepo'] = 'मूडल प्लगइन निर्देशिका से प्लगइन स्थापित करें';
$string['installfromrepo_help'] = 'आपको एक प्लगइन खोजने और स्थापित करने के लिए मूडल प्लगइन निर्देशिका पर पुनर्निर्देशित किया जाएगा। ध्यान दें कि आपकी साइट का पूरा नाम, यूआरएल और मूडल संस्करण भी भेजा जाएगा, ताकि आपके लिए अधिष्ठापन प्रक्रम को आसान बनाया जा सके।';
$string['installfromzip'] = 'ज़िप दाखिल करना से प्लगइन स्थापित करें';
$string['installfromzip_help'] = 'मूडल प्लगइन निर्देशिका से सीधे एक प्लगइन स्थापित करने का एक विकल्प प्लगइन का एक ज़िप पैकेज अपलोड करना है। ज़िप पैकेज की संरचना मूडल प्लगइन निर्देशिका से डाउनलोड किए गए पैकेज के समान होनी चाहिए।';
$string['installfromzipfile'] = 'ज़िप पैकेज';
$string['installfromzipfile_help'] = 'प्लगइन ज़िप पैकेज में केवल एक निर्देशिका होनी चाहिए, जिसका नाम प्लगइन नाम से मेल खाने के लिए रखा गया है। ज़िप को प्लगइन प्रकार के लिए एक विनियोजन करना स्थान पर निकाला जाएगा। यदि पैकेज को मूडल प्लगइन निर्देशिका से डाउनलोड किया गया है तो इसकी यह संरचना होगी।';
$string['installfromzipinvalid'] = 'प्लगइन ज़िप पैकेज में केवल एक निर्देशिका होनी चाहिए, जिसका नाम प्लगइन नाम से मेल खाने के लिए रखा गया है। बशर्ते, यह कि गई दाखिल करना एक वैध प्लगइन ज़िप पैकेज नहीं है।';
$string['installfromziprootdir'] = 'रूट निर्देशिका का नाम बदलें';
$string['installfromziprootdir_help'] = 'कुछ ज़िप पैकेज, जैसे कि गिथब द्वारा उत्पन्न पैकेज में एक गलत मूल निर्देशिका नाम हो सकता है। यदि ऐसा है, तो सही नाम यहाँ दर्ज किया जा सकता है।';
$string['installfromzipsubmit'] = 'ज़िप दाखिल करना से प्लगइन स्थापित करें';
$string['installfromziptype'] = 'प्लगइन प्रकार';
$string['installfromziptype_help'] = 'उन प्लगइन्स के लिए जो अपने अवयव नाम की सही घोषणा करते हैं, इंस्टॉलर स्वचालित रूप से प्लगइन प्रकार का पता लगाने में सक्षम होता है। यदि स्वत:-पता लगाने में विफल रहता है, तो मैन्युअल रूप से सही प्रकार का प्लगइन चुनें। चेतावनी: यदि कोई गलत प्लगइन प्रकार निर्दिष्ट किया गया है तो अधिष्ठापन कार्यविधि बुरी तरह विफल हो सकती है।';
$string['installfromziptype_link'] = 'Development:Plugins';
$string['permcheck'] = 'सुनिश्चित करें कि प्लगइन प्रकार का मूल स्थान वेब सर्वर प्रक्रम द्वारा लिखित है।';
$string['permcheckerror'] = 'लिखने की अनुमति की जांच करते समय त्रुटि';
$string['permcheckprogress'] = 'लिखने की अनुमति के लिए जाँच करें।....';
$string['permcheckrepeat'] = 'फिर से जाँच करें';
$string['permcheckresultno'] = 'प्लगइन प्रकार स्थान <em> {$a-> path} </em> लिखने योग्य नहीं है';
$string['permcheckresultyes'] = 'प्लगइन प्रकार स्थान <em> {$a-> path} </em> लिखने योग्य है';
$string['pluginname'] = 'प्लगइन इंस्टॉलर';
$string['privacy:metadata'] = 'प्लगइन इंस्टॉलर प्लगइन किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करता है।';
$string['remoterequestalreadyinstalled'] = 'इस साइट पर मूडल प्लगइन निर्देशिका से प्लगइन {$a-> name} ({$a-> component}) संस्करण {$a-> version} स्थापित करने का अनुरोध है। तथापि, यह प्लगइन <strong> साइट पर पहले से ही स्थापित </strong> है।';
$string['remoterequestconfirm'] = 'इस साइट पर मौजूद मूडल प्लगइन डायरेक्टरी से प्लगइन <strong>{$a->name}</strong> ({$a->component}) संस्करण {$a->version} को इंस्टॉल करने का अनुरोध है। यदि आप जारी रखते हैं, तो सत्यापन के लिए प्लगइन ज़िप पैकेज डाउनलोड किया जाएगा। अभी कुछ भी इंस्टॉल नहीं किया जाएगा।';
$string['remoterequestinvalid'] = 'इस साइट पर मूडल प्लगइन निर्देशिका से एक प्लगइन स्थापित करने का अनुरोध है। दुर्भाग्य से अनुरोध वैध नहीं है और इसलिए प्लगइन स्थापित नहीं किया जा सकता है।';
$string['remoterequestnoninstallable'] = 'इस साइट पर मूडल प्लगइन्स डायरेक्टरी से प्लगइन {$a->name} ({$a->component}) संस्करण {$a->version} को इंस्टॉल करने का अनुरोध है। हालाँकि, प्लगइन इंस्टॉलेशन की पूर्व-जाँच विफल रही (कारण कोड: {$a->reason})।';
$string['remoterequestpermcheck'] = 'इस साइट पर मौजूद मूडल प्लगइन्स डायरेक्टरी से प्लगइन {$a->name} ({$a->component}) संस्करण {$a->version} को इंस्टॉल करने का अनुरोध है। हालांकि, स्थान <strong>{$a->typepath}</strong> लिखने योग्य नहीं है। आपको वेब सर्वर उपयोगकर्ता को इस स्थान पर लिखने की अनुमति देनी होगी, फिर जांच दोहराने के लिए जारी रखें बटन दबाएं।';
$string['remoterequestpluginfoexception'] = 'उफ़... प्लगइन {$a-> name} ({$a-> component}) संस्करण {$a-> version} के बारे में जानकारी प्राप्त करना की कोशिश करते समय एक त्रुटि हुई। प्लगइन स्थापित नहीं किया जा सकता है। त्रुटि का ब्योरा देखने के लिए डीबगिंग प्रकार, विधा चालू करें।';
$string['typedetectionfailed'] = 'प्लगइन प्रकार का पता लगाने में असमर्थ। कृपया प्लगइन प्रकार को हाथ से चुनें।';
$string['typedetectionmismatch'] = 'चयनित प्लगइन प्रकार प्लगइन द्वारा घोषित प्लगइन से मेल नहीं खाता हैः {$a}';
