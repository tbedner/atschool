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
 * Strings for component 'tool_langimport', language 'hi', version '4.4'.
 *
 * @package     tool_langimport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['downloadnotavailable'] = 'डाउनलोड सर्वर से कनेक्ट करने में असमर्थ। भाषा पैक को स्वचालित रूप से इंस्टॉल या अपडेट करना संभव नहीं है। कृपया <a href="{$a->src}">{$a->src}</a> से उपयुक्त ज़िप फ़ाइलें डाउनलोड करें और उन्हें मैन्युअल रूप से अपनी डेटा डायरेक्टरी <code>{$a->dest}</code> में अनज़िप करें।';
$string['install'] = 'चयनित भाषा पैक स्थापित करें';
$string['installedlangs'] = 'स्थापित भाषा पैक';
$string['installfailed'] = 'भाषा पैक की अधिष्ठापन विफल हो गई!';
$string['installfinished'] = 'भाषा पैक की अधिष्ठापन पूरी हो गई है।';
$string['installpending'] = 'निम्नलिखित भाषा पैक जल्द ही स्थापित किए जाएंगे: {$a}।';
$string['installscheduled'] = 'अधिष्ठापन के लिए छत्तीसगढ़ में आदिवासी क्षेत्र भाषा पैक।';
$string['langimport'] = 'भाषा अभिप्राय उपयोगिता';
$string['langimportdisabled'] = 'भाषा अभिप्राय सुविधा को अक्षम कर दिया गया है। आपको फ़ाइल-सिस्टम स्तर पर अपने भाषा पैक को मैन्युअल रूप से अपडेट करना होगा। ऐसा करने के बाद स्ट्रिंग कैश को साफ करना न भूलें।';
$string['langpackinstalled'] = 'भाषा पैक \'{$a}\' सफलतापूर्वक स्थापित किया गया था';
$string['langpackinstalledevent'] = 'भाषा पैक स्थापित किया गया';
$string['langpacknotremoved'] = 'एक त्रुटि हुई है; भाषा पैक \'{$a}\' पूरी तरह से अनइंस्टॉल नहीं है। कृपया दाखिल करना अनुमति की जाँच करें।';
$string['langpackremoved'] = 'भाषा पैक \'{$a}\' को अनइंस्टॉल कर दिया गया था';
$string['langpackremovedevent'] = 'भाषा पैक अनइंस्टॉल किया गया';
$string['langpackupdated'] = 'भाषा पैक \'{$a}\' को सफलतापूर्वक अद्यतन किया गया था';
$string['langpackupdatedevent'] = 'भाषा पैक अद्यतन किया गया';
$string['langpackupdateskipped'] = '\'{$a}\' भाषा पैक का अद्यतन छोड़ दिया गया';
$string['langpackuptodate'] = 'भाषा पैक \'{$a}\' अद्यतित है';
$string['langunsupported'] = '<p>ऐसा प्रतीत होता है कि आपका सर्वर निम्नलिखित भाषाओं को पूरी तरह से सपोर्ट नहीं करता है:</p><ul>{$a->missinglocales}</ul><p>इसके बजाय, कुछ स्ट्रिंग्स, जैसे कि दिनांक या संख्याएँ, को फ़ॉर्मेट करने के लिए ग्लोबल लोकेल ({$a->globallocale}) का उपयोग किया जाएगा।</p>';
$string['langupdatecomplete'] = 'भाषा पैक अद्यतन पूरा किया गया';
$string['missingcfglangotherroot'] = '$CFG->langotherroot का कॉन्फ़िगरेशन मान गायब है';
$string['missinglangparent'] = '{$a->lang} की मूल भाषा <em>{$a->parent}</em> गायब है।';
$string['noenglishuninstall'] = 'अंग्रेजी भाषा के पैक को अनइंस्टॉल नहीं किया जा सकता है।';
$string['noenglishuninstalltitle'] = 'अनइंस्टॉल करने में असमर्थ';
$string['nolangupdateneeded'] = 'आपके सभी भाषा पैक अद्यतित हैं, किसी अद्यतन की आवश्यकता नहीं है';
$string['pluginname'] = 'लैंग्वेज पैक';
$string['privacy:metadata'] = 'लैंग्वेज पैक प्लगइन किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करता है।';
$string['purgestringcaches'] = 'स्ट्रिंग कैश को साफ करें';
$string['search'] = 'उपलब्ध भाषा पैक खोजें';
$string['selectlangs'] = 'अनइंस्टॉल करने के लिए भाषाएँ चयन करना';
$string['uninstall'] = 'चयनित भाषा पैक को अनइंस्टॉल करें';
$string['uninstallconfirm'] = 'आप इन भाषा पैक को पूरी तरह से अनइंस्टॉल करने जा रहे हैं: <strong> {$a} </strong>। क्या आप निश्चित हैं?';
$string['updatelangs'] = 'सभी स्थापित भाषा पैक को अद्यतन';
$string['updatelangsnote'] = 'बटन पर क्लिक करके सभी स्थापित भाषा पैक को अद्यतन करने में लंबा समय लग सकता है और टाइमआउट हो सकते हैं। इसके बजाय छत्तीसगढ़ में आदिवासी क्षेत्र कार्य \'{$a-> taskname}\' (जो हर दिन चूकना रूप से चलता है) का उपयोग करने की सिफारिश की जाती है।';
