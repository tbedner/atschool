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
 * Strings for component 'tool_filetypes', language 'hi', version '4.4'.
 *
 * @package     tool_filetypes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfiletypes'] = 'एक नया दाखिल करना प्रकार जोड़ें';
$string['corestring'] = 'वैकल्पिक भाषा स्ट्रिंग';
$string['corestring_help'] = 'इस सेटिंग का उपयोग कोर mimetypes.php भाषा दाखिल करना से एक अलग भाषा स्ट्रिंग का चयन करने के लिए किया जा सकता है। आम तौर पर इसे खाली छोड़ देना चाहिए। कस्टम प्रकारों के लिए, विवरण क्षेत्र का उपयोग करें।';
$string['defaulticon'] = 'MIME प्रकार के लिए चूक आइकन';
$string['defaulticon_help'] = 'यदि एक ही MIME प्रकार के साथ कई दाखिल करना विस्तार हैं, तो किसी एक विस्तार के लिए इस विकल्प का चयन करें ताकि माइम प्रकार से एक आइकन निर्धारित करते समय इसके आइकन का उपयोग किया जा सके।';
$string['delete_confirmation'] = 'क्या आप पूरी तरह से निश्चित हैं कि आप <strong>. {$a} </strong> को हटाना चाहते हैं?';
$string['deletea'] = '{$a} निकाल देना';
$string['deletefiletypes'] = 'एक दाखिल करना प्रकार निकाल देना';
$string['description'] = 'प्रथा विवरण';
$string['description_help'] = 'सरल दाखिल करना प्रकार विवरण, e.g। \'किंडल ईबुक\'। यदि आपकी साइट कई भाषाओं का समर्थन करती है और बहु-भाषा फिल्टर का उपयोग करती है, तो आप विभिन्न भाषाओं में विवरण प्रदान करने के लिए इस क्षेत्र में बहु-भाषा टैग दर्ज कर सकते हैं।';
$string['descriptiontype'] = 'विवरण का प्रकार';
$string['descriptiontype_custom'] = 'इस रूप में निर्दिष्ट कस्टम विवरण';
$string['descriptiontype_default'] = 'चूक (MIME प्रकार अथवा संबंधित भाषा स्ट्रिंग यदि उपलब्ध हो)';
$string['descriptiontype_help'] = 'विवरण विनिर्देश करनाने के तीन संभावित तौर-तरीके हैं। * चूक व्यवहार माइम प्रकार का उपयोग करता है। यदि उस MIME प्रकार के अनुरूप mimetypes.php में कोई भाषा स्ट्रिंग है, तो इसका उपयोग किया जाएगा; अन्यथा MIME प्रकार स्वयं उपयोगकर्ताओं को प्रदर्शित किया जाएगा। * आप इस फॉर्म पर एक कस्टम विवरण विनिर्देश करना सकते हैं। * आप MIME प्रकार के बजाय उपयोग करने के लिए mimetypes.php में भाषा स्ट्रिंग का नाम विनिर्देश करना सकते हैं।';
$string['descriptiontype_lang'] = 'वैकल्पिक भाषा स्ट्रिंग (mimetypes.php से)';
$string['displaydescription'] = 'विवरण';
$string['editfiletypes'] = 'एक मौजूदा दाखिल करना प्रकार को संपादित करें';
$string['emptylist'] = 'कोई दाखिल करना प्रकार परिभाषित नहीं हैं।';
$string['error_addentry'] = 'दाखिल करना प्रकार विस्तार, विवरण, MIME प्रकार और आइकन में लाइन फ़ीड और अर्धकोलन वर्ण नहीं होने चाहिए।';
$string['error_defaulticon'] = 'एक ही MIME प्रकार के साथ एक अन्य दाखिल करना विस्तार को पहले से ही चूकना आइकन के रूप में चिह्नित किया गया है।';
$string['error_extension'] = 'दाखिल करना करना प्रकार विस्तार <strong> {$a} </strong> पहले से मौजूद है अथवा अमान्य है। दाखिल करना करना विस्तार अद्वितीय होने चाहिए और समाविष्ट करना विशेष वर्ण नहीं होने चाहिए।';
$string['error_notfound'] = 'विस्तार {$a} के साथ दाखिल करना प्रकार नहीं मिल सकता है।';
$string['extension'] = 'विस्तार';
$string['extension_help'] = 'बिंदु के बिना दाखिल करना नाम विस्तार, e.g। \'मोबी\'';
$string['groups'] = 'समूहों का प्रकार';
$string['groups_help'] = 'इस प्रकार से संबंधित दाखिल करना प्रकार समूहों की वैकल्पिक सूची। ये \'दस्तावेज़\' और \'छवि\' जैसी सामान्य श्रेणियां हैं।';
$string['icon'] = 'दाखिल करना आइकन';
$string['icon_help'] = 'आइकन फाइलनाम। आइकन की सूची आपके मूडल अधिष्ठापन के भीतर, अंदर/पिक्स/एफ निर्देशिका से ली गई है। यदि अपेक्षित हो तो आप इस फोल्डर, चौपन्ना में कस्टम आइकन जोड़ सकते हैं।';
$string['mimetype'] = 'MIME प्रकार';
$string['mimetype_help'] = 'इस दाखिल करना प्रकार से जुड़ा MIME प्रकार, e.g। \'एप्लीकेशन/एक्स-मोबीपॉकेट-ईबुक\'';
$string['pluginname'] = 'दाखिल करना के प्रकार';
$string['privacy:metadata'] = 'दाखिल करना प्रकार प्लगइन किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करता है।';
$string['revert'] = 'मूडल डिफ़ॉल्ट पर {$a} बहाल';
$string['revert_confirmation'] = 'क्या आप सुनिश्चित हैं कि आप अपने परिवर्तनों को त्यागते हुए <strong>. {$a} </strong> को मूडल डिफ़ॉल्ट में बहाल करना चाहते हैं?';
$string['revertfiletype'] = 'एक दाखिल करना प्रकार को बहाल';
$string['source'] = 'प्रकार';
$string['source_custom'] = 'प्रथा';
$string['source_deleted'] = 'हटा दिया गया';
$string['source_modified'] = 'संशोधित';
$string['source_standard'] = 'स्तर';
