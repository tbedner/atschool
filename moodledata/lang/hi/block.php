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
 * Strings for component 'block', language 'hi', version '4.4'.
 *
 * @package     block
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addblock'] = '{$a} ब्लॉक जोड़ें';
$string['anypagematchingtheabove'] = 'ऊपर से मेल खाता कोई भी पेज';
$string['appearsinsubcontexts'] = 'उप-संदर्भों में दिखाई देता है';
$string['assignrolesinblock'] = '{$a} ब्लॉक में भूमिकाएँ असाइन करें';
$string['blocksdrawertoggle'] = 'ब्लॉक ड्रॉवर छुपाएं / दिखाएं';
$string['blocksettings'] = 'ब्लॉक सेटिंग्स';
$string['bracketfirst'] = '{$a} (प्रथम)';
$string['bracketlast'] = '{$a} (अंतिम)';
$string['configureblock'] = '{$a} ब्लॉक विन्यास करें';
$string['contexts'] = 'पृष्ठ संदर्भों';
$string['contexts_help'] = 'संदर्भ अधिक विशिष्ट प्रकार के पृष्ठ होते हैं जहां यह ब्लॉक मूल ब्लॉक स्थान के भीतर प्रदर्शित किया जा सकता है। मूल ब्लॉक स्थान और आपके वर्तमान स्थान के आधार पर आपके पास अलग-अलग विकल्प होंगे। उदाहरण के लिए, आप ब्लॉक को पाठ्यक्रम में ब्लॉक जोड़कर पाठ्यक्रम में केवल फोरम पृष्ठों पर दिखने के लिए प्रतिबंधित कर सकते हैं (इसे सभी उप-पृष्ठों पर प्रदर्शित कर सकते हैं), फिर एक फोरम में जाकर और ब्लॉक सेटिंग को फिर से डिस्प्ले प्रतिबंधित करने के लिए संपादित करना सिर्फ फोरम पेज।';
$string['createdat'] = 'मूल ब्लॉक स्थान';
$string['createdat_help'] = 'मूल स्थान जहां ब्लॉक बनाया गया था। ब्लॉक सेटिंग्स मूल स्थान के भीतर अन्य स्थानों (संदर्भ) में दिखाई दे सकती है। उदाहरण के लिए, पाठ्यक्रम पाठ्यक्रम पर बनाए गए ब्लॉक को उस पाठ्यक्रम के भीतर गतिविधियों में प्रदर्शित किया जा सकता है। सामने वाले पृष्ठ पर बनाए गए ब्लॉक को पूरे साइट पर प्रदर्शित किया जा सकता है।';
$string['defaultregion'] = 'डिफ़ॉल्ट क्षेत्र';
$string['defaultregion_help'] = 'थीम्स एक या अधिक नामित ब्लॉक क्षेत्रों को परिभाषित कर सकती हैं जहां ब्लॉक प्रदर्शित होते हैं। यह सेटिंग परिभाषित करती है कि आप इनमें से कौन सा ब्लॉक डिफ़ॉल्ट रूप से दिखाना चाहते हैं। यदि आवश्यक हो तो क्षेत्र विशिष्ट पृष्ठों पर ओवरराइड किया जा सकता है।';
$string['defaultweight'] = 'डिफ़ॉल्ट वजन';
$string['defaultweight_help'] = 'डिफ़ॉल्ट वजन आपको मोटे तौर पर चुनने की अनुमति देता है जहां आप चाहते हैं कि ब्लॉक को चयनित क्षेत्र में या तो ऊपर या नीचे पर दिखाई दे। अंतिम स्थान की गणना उस क्षेत्र के सभी ब्लॉक से की जाती है (उदाहरण के लिए, केवल एक ब्लॉक शीर्ष पर हो सकता है)। यदि आवश्यक हो तो विशिष्ट मानों पर यह मान ओवरराइड किया जा सकता है।';
$string['deleteblock'] = '{$a} ब्लॉक हटाएँ';
$string['deleteblockcheck'] = 'क्या आप वाकई इस ब्लॉक को {$a} हटाना चाहते हैं?';
$string['deleteblockinprogress'] = 'प्रगति में {$a} हटाने को अवरुद्ध करें...';
$string['deleteblockwarning'] = '<p>आप कहीं और दिखाई देने वाले ब्लॉक को हटाने वाले हैं।</p><p>मूल ब्लॉक स्थान: {$a->location}<br /> पेज प्रकारों पर प्रदर्शित करें: {$a->pagetype}</p><p> क्या आप वाकई जारी रखना चाहते हैं?</p>';
$string['deletecheck'] = '{$a} ब्लॉक हटाएँ';
$string['deletecheck_modal'] = 'ब्लॉक निकाल देना?';
$string['hideblock'] = 'ब्लॉक {$a} छिपाए';
$string['hidepanel'] = 'पैनल छुपाएं';
$string['moveblock'] = 'ब्लॉक {$a} हिलाए';
$string['moveblockafter'] = '{$a} ब्लॉक के बाद ब्लॉक को ले जाएं';
$string['moveblockbefore'] = 'ब्लॉक को {$a} ब्लॉक से पहले ले जाएं';
$string['moveblockinregion'] = 'ब्लॉक को {$a} क्षेत्र में ले जाएं';
$string['movingthisblockcancel'] = '({$a}) इस ब्लॉक को स्थानांतरित कर रहे हैं';
$string['myblocks'] = 'मेरे ब्लॉक';
$string['onthispage'] = 'इस पृष्ठ पर';
$string['pagetypes'] = 'पृष्ठ प्रकार';
$string['pagetypewarning'] = 'पहले निर्दिष्टित पेज प्रकार अब चयन योग्य नहीं है। कृपया नीचे सबसे उपयुक्त पेज प्रकार चुनें।';
$string['privacy:metadata:userpref:dockedinstance'] = 'रिकॉर्ड करता है जब उपयोगकर्ता ब्लॉक को डॉक करता है';
$string['privacy:metadata:userpref:hiddenblock'] = 'रिकॉर्ड करता है जब उपयोगकर्ता ब्लॉक को छिपाता है';
$string['privacy:request:blockisdocked'] = 'इंगित करता है कि ब्लॉक संक्षिप्त कर दिया गया था';
$string['privacy:request:blockishidden'] = 'संकेत देता है कि ब्लॉक छिपा हुआ था';
$string['region'] = 'क्षेत्र';
$string['restrictpagetypes'] = 'पृष्ठ प्रकारों पर प्रदर्शित करें';
$string['showblock'] = 'ब्लॉक {$a} दिखाए';
$string['showoncontextandsubs'] = '\'{$a}\' और इसके भीतर के किसी भी पेज पर प्रदर्शित करें';
$string['showoncontextonly'] = '\'{$a}\' पर केवल प्रदर्शन';
$string['showonentiresite'] = 'पूरी साइट पर प्रदर्शित करें';
$string['showonfrontpageandsubs'] = 'मुख्य पेज एवं उसमे जोड़े जाने वाले किसी भी पेज पर प्रदर्शित करें';
$string['showonfrontpageonly'] = 'केवल मुख्य पेज पर प्रदर्शित करें';
$string['subpages'] = 'पृष्ठों का चयन';
$string['thisspecificpage'] = 'यह विशेष पृष्ठ';
$string['visible'] = 'दर्शनीय';
$string['weight'] = 'वज़न';
$string['wherethisblockappears'] = 'यह ब्लॉक कहां दिखाई देता है';
