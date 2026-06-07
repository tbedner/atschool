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
 * Strings for component 'assignfeedback_offline', language 'hi', version '4.4'.
 *
 * @package     assignfeedback_offline
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmimport'] = 'ग्रेड आयात की पुष्टि';
$string['default'] = 'डिफ़ॉल्ट रूप से सक्षम';
$string['default_help'] = 'यदि निर्धारित किया गया है, तो सभी नए असाइनमेंट के लिए वर्कशीट के साथ ऑफ़लाइन ग्रेडिंग चूकना रूप से सक्षम होगी।';
$string['downloadgrades'] = 'ग्रेडिंग वर्कशीट डाउनलोड';
$string['enabled'] = 'ऑफलाइन ग्रेडिंग वर्कशीट';
$string['enabled_help'] = 'यदि सक्षम किया जाता है, तो अध्यापक असाइनमेंट को चिह्नित करते समय छात्र ग्रेड के साथ एक कार्यपत्रक डाउनलोड और अपलोड करने में सक्षम होंगे।';
$string['feedbackupdate'] = '"{$a-> student}" के लिए क्षेत्र "{$a-> field}" को "{$a-> text}" पर सेट करें';
$string['gradelockedingradebook'] = 'ग्रेड को ग्रेडबुक में {$a} के लिए बंद कर दिया गया है';
$string['graderecentlymodified'] = 'ग्रेड को हाल ही में {$a} के लिए ग्रेडिंग कार्यपत्रक की तुलना में मॉड्यूल में संशोधित किया गया है।';
$string['gradesfile'] = 'ग्रेडिंग वर्कशीट (csv प्रारूप)';
$string['gradesfile_help'] = 'संशोधित ग्रेड के साथ ग्रेडिंग कार्यपत्रक। यह दाखिल करनाUTF-8 एन्कोडिंग के साथ एक CSV  दाखिल करना होनी चाहिए जिसे छात्र ग्रेड और पहचानकर्ता के लिए कॉलम के साथ नियत कार्य से डाउनलोड किया गया हो।';
$string['gradeupdate'] = '{$a->grade} को {$a->student} के लिए ग्रेड निर्धारित करें';
$string['ignoremodified'] = 'उन अभिलेखों को अद्यतन करने की अनुमति देना जिन्हें हाल ही में स्प्रेडशीट की तुलना में मूडल में संशोधित किया गया है।';
$string['ignoremodified_help'] = 'जब ग्रेडिंग वर्कशीट को मूडल से डाउनलोड किया जाता है, तो इसमें प्रत्येक ग्रेड के लिए अंतिम संशोधित तिथि होती है। यदि इस कार्यपत्रक को डाउनलोड करने के बाद किसी भी ग्रेड को मूडल में अद्यतन किया जाता है, तो चूकना रूप से मूडल ग्रेड आयात करते समय इस अद्यतन जानकारी को अधिलेखित करने से इनकार कर देगा। इस विकल्प का चयन करके मूडल इस सुरक्षा जांच को अक्षम कर देगा और कई मार्करों के लिए एक दूसरे के ग्रेड को अधिलेखित करना संभव हो सकता है।';
$string['importgrades'] = 'ग्रेडिंग कार्यपत्रक में परिवर्तनों की पुष्टि';
$string['invalidgradeimport'] = 'मूडल अपलोड की गई कार्यपत्रक को नहीं पढ़ सका। सुनिश्चित करें कि यह अल्पविराम अलग मूल्य प्रारूप (.csv) में सहेजा गया है और फिर से प्रयास करें।';
$string['nochanges'] = 'अपलोड की गई कार्यपत्रक में कोई संशोधित ग्रेड नहीं पाया गया';
$string['offlinegradingworksheet'] = 'ग्रेड';
$string['pluginname'] = 'ऑफलाइन ग्रेडिंग वर्कशीट';
$string['privacy:nullproviderreason'] = 'इस प्लगइन में उपयोगकर्ता की जानकारी संग्रहीत करने के लिए कोई डेटाबेस नहीं है। यह ग्रेडिंग इंटरफेस को प्रदर्शित करने में मदद करने के लिए केवल mod_assign में APIs का उपयोग करता है।';
$string['processgrades'] = 'आयात ग्रेड';
$string['skiprecord'] = 'रिकॉर्ड छोड़ें';
$string['updatedgrades'] = '<strong>{$a->gradeupdatescount}</strong> ग्रेड और <strong>{$a->feedbackupdatescount}</strong> फीडबैक इंस्टेंस अपडेट किए गए।';
$string['updaterecord'] = 'रिकॉर्ड अपडेट';
$string['uploadgrades'] = 'ग्रेडिंग वर्कशीट अपलोड';
