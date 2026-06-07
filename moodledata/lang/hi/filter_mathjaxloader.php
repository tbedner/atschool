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
 * Strings for component 'filter_mathjaxloader', language 'hi', version '4.4'.
 *
 * @package     filter_mathjaxloader
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaldelimiters'] = 'अतिरिक्त समीकरण परिसीमक';
$string['additionaldelimiters_help'] = 'MathJax फ़िल्टर विभाजक वर्णों के भीतर निहित समीकरणों के लिए पाठ को पार्स करता है।

मान्यता प्राप्त विभाजक वर्णों की सूची यहाँ जोड़ी जा सकती है (उदाहरण के लिए, AsciiMath ` का उपयोग करता है)। विभाजकों में कई वर्ण हो सकते हैं और एकाधिक विभाजकों को अल्पविराम से अलग किया जा सकता है।';
$string['httpsurl_help'] = 'MathJax लाइब्रेरी का पूरा URL';
$string['localinstall'] = 'स्थानीय MathJax स्थापना';
$string['localinstall_help'] = 'MathJax का डिफ़ॉल्ट कॉन्फ़िगरेशन CDN संस्करण का उपयोग करता है, लेकिन आवश्यकता पड़ने पर MathJax को स्थानीय रूप से भी स्थापित किया जा सकता है।

बैंडविड्थ बचाने या स्थानीय प्रॉक्सी प्रतिबंधों के कारण यह उपयोगी हो सकता है।

MathJax के स्थानीय इंस्टॉलेशन का उपयोग करने के लिए, सबसे पहले https://www.mathjax.org/ से पूरी MathJax लाइब्रेरी डाउनलोड करें। फिर इसे एक वेब सर्वर पर स्थापित करें। अंत में, MathJax फ़िल्टर सेटिंग्स httpurl और/या httpsurl को स्थानीय MathJax.js URL पर इंगित करने के लिए अपडेट करें।';
$string['mathjaxsettings'] = 'MathJax कॉन्फ़िगरेशन';
$string['mathjaxsettings_desc'] = 'अधिकांश उपयोगकर्ताओं के लिए डिफ़ॉल्ट MathJax कॉन्फ़िगरेशन उपयुक्त होना चाहिए, लेकिन MathJax अत्यधिक कॉन्फ़िगर करने योग्य है और किसी भी मानक MathJax कॉन्फ़िगरेशन विकल्प को यहाँ जोड़ा जा सकता है।';
$string['privacy:metadata'] = 'MathJax  प्लगइन किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करता है।';
$string['texfiltercompatibility'] = 'TeX फ़िल्टर संगतता';
$string['texfiltercompatibility_help'] = 'MathJax फिल्टर का उपयोग पाठ संकेतन फिल्टर के प्रतिस्थापन के रूप में किया जा सकता है। पाठ संकेतन फिल्टर द्वारा समर्थित सभी परिसीमनों का समर्थन करने के लिए, मैथजैक्स को पाठ के साथ सभी समीकरणों "इनलाइन" को प्रदर्शित करने के लिए कॉन्फ़िगर किया जाएगा।';
