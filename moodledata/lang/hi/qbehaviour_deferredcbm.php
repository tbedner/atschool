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
 * Strings for component 'qbehaviour_deferredcbm', language 'hi', version '4.4'.
 *
 * @package     qbehaviour_deferredcbm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accuracy'] = 'सटीकता';
$string['accuracyandbonus'] = 'सटीकता + बोनस';
$string['assumingcertainty'] = 'आपने निश्चितता का चयन नहीं किया। मान लीजिएः {$a}।';
$string['averagecbmmark'] = 'औसत CBM निशान';
$string['basemark'] = 'मूल चिह्न {$a}';
$string['breakdownbycertainty'] = 'निश्चितता से टूटना';
$string['cbmbonus'] = 'CBM बोनस';
$string['cbmgradeexplanation'] = 'CBM के लिए, ऊपर का ग्रेड C= 1 पर सभी के लिए उच्‍चतम के सापेक्ष दिखाया गया है।';
$string['cbmgrades'] = 'CBM  ग्रेड';
$string['cbmgrades_help'] = 'निश्चितता आधारित अंकन (CBM ) के साथ सी = 1 (कम निश्चितता) के साथ प्रत्येक प्रश्न को सही करने से <आई. डी. 1> का ग्रेड मिलता है। ग्रेड 300% तक उच्च हो सकते हैं यदि प्रत्येक प्रश्न सी = 3 (उच्च निश्चितता) के साथ सही है। गलत धारणाएँ (आत्मविश्वासपूर्ण गलत प्रतिक्रियाएँ) गलत प्रतिक्रियाओं की तुलना में बहुत अधिक निम्न ग्रेड देती हैं जिन्हें अनिश्चित माना जाता है। यह नकारात्मक समग्र ग्रेड की ओर भी ले जा सकता है। * * सटीकता * * निश्चितता की अनदेखी करने वाला% सही है लेकिन प्रत्येक प्रश्न के उच्‍चतम अंक के लिए तौला जाता है। अधिक से अधिक विश्वसनीय प्रतिक्रियाओं में सफलतापूर्वक अंतर करने से प्रत्येक प्रश्न के लिए समान निश्चितता का चयन करने की तुलना में एक बेहतर ग्रेड मिलता है। यह * * CBM  बोनस * * में परिलक्षित होता है। * * सटीकता * * + *CBM  बोनस * * जानकारी का एक बेहतर माप है * * सटीकता * * से। गलत धारणाएँ एक नकारात्मक बोनस का कारण बन सकती हैं, जो इस बात पता नहीं। हिंदी [हाय]। इतिहास';
$string['cbmgrades_link'] = 'qbehaviour/deferredcbm/certaintygrade';
$string['cbmmark'] = 'CBM  चिह्न {$a}';
$string['certainty'] = 'निश्चितता';
$string['certainty-1'] = 'कोई विचार नहीं';
$string['certainty1'] = 'C = 1 (अनिश्चितः <67%)';
$string['certainty2'] = 'C = 2 (मध्यः> 67%)';
$string['certainty3'] = 'C = 3 (बिल्कुल निश्चितः >80%)';
$string['certainty_help'] = 'निश्चितता-आधारित अंकन में आपको यह बताना होगा कि आपको अपना उत्तर कितना विश्वसनीय लगता है। उपलब्ध स्तर इस प्रकार हैं:

निश्चितता स्तर | C=1 (अनिश्चित) | C=2 (मध्यम) | C=3 (काफी हद तक निश्चित)
------------------- | ------------ | --------- | ----------------
सही होने पर अंक दें | 1 | 2 | 3
गलत होने पर अंक दें | 0 | -2 | -6
सही होने की संभावना | <67% | 67-80% | >80%

अनिश्चितता को स्वीकार करने पर सर्वोत्तम अंक प्राप्त होते हैं। उदाहरण के लिए, यदि आपको लगता है कि गलत होने की संभावना 3 में से 1 से अधिक है, तो आपको C=1 दर्ज करना चाहिए और नकारात्मक अंक प्राप्त करने से बचना चाहिए।';
$string['certainty_link'] = 'qbehaviour/deferredcbm/certainty';
$string['certaintyshort-1'] = 'कोई विचार नहीं';
$string['certaintyshort1'] = 'C=1';
$string['certaintyshort2'] = 'C=2';
$string['certaintyshort3'] = 'C=3';
$string['dontknow'] = 'कोई विचार नहीं';
$string['foransweredquestions'] = 'केवल {$a} उत्तरित प्रश्नों के लिए परिणाम';
$string['forentirequiz'] = 'पूरी प्रश्नोत्तरी के लिए परिणाम ({$a} प्रश्न)';
$string['howcertainareyou'] = 'निश्चितता {$a-> help}: {$a-> choices}';
$string['judgementok'] = 'ठीक है';
$string['judgementsummary'] = 'प्रतिक्रियाएँ: {$a->responses}. सटीकता: {$a->fraction}. (इष्टतम सीमा {$a->idealrangelow} से {$a->idealrangehigh} तक)। इस निश्चितता स्तर का उपयोग करके आप {$a->judgement} थे।';
$string['noquestions'] = 'कोई प्रतिक्रिया नहीं';
$string['overconfident'] = 'अति आत्मविश्वास';
$string['pluginname'] = 'CBM के साथ स्थगित प्रतिक्रिया';
$string['privacy:metadata'] = 'CBM  प्रश्न व्यवहार प्लगइन के साथ स्थगित प्रतिक्रिया किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करती है।';
$string['slightlyoverconfident'] = 'थोड़ा अधिक आत्मविश्वास';
$string['slightlyunderconfident'] = 'थोड़ा कम आत्मविश्वास';
$string['underconfident'] = 'कम आत्मविश्वास';
$string['weightx'] = 'वजन {$a}';
