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
 * Strings for component 'grading', language 'hi', version '4.4'.
 *
 * @package     grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = '\'{$a-> method}\' को \'{$a-> area}\' क्षेत्र के लिए सक्रिय श्रेणीकरण प्रणाली के रूप में चुना जाता है।';
$string['activemethodinfonone'] = '\'{$a-> area}\' क्षेत्र के लिए कोई उन्नत श्रेणीकरण प्रणाली नहीं चुनी गई है। सरल प्रत्यक्ष श्रेणीकरण का उपयोग किया जाएगा।';
$string['changeactivemethod'] = 'सक्रिय श्रेणीकरण प्रणाली को बदलें';
$string['clicktoclose'] = 'बंद करने के लिए क्लिक करें';
$string['error:gradingunavailable'] = 'उन्नत श्रेणीकरण प्रणाली सही ढंग से निर्धारित नहीं की गई है। कृपया फोरम सेटिंग्स में पूरे फोरम ग्रेडिंग विकल्पों की जांच करें।';
$string['error:notinrange'] = 'अमान्य ग्रेड \'{$a->grade}\' प्रदान किया गया है। ग्रेड 0 और {$a->maxgrade} के बीच होना चाहिए।';
$string['exc_gradingformelement'] = 'तत्काल श्रेणीकरण तत्व बनाने में असमर्थ';
$string['formnotavailable'] = 'एक उन्नत श्रेणीकरण प्रणाली का चयन किया गया था लेकिन श्रेणीकरण प्रपत्र को अभी भी परिभाषित करने की आवश्यकता है।';
$string['gradingformunavailable'] = 'कृपया ध्यान दें: उन्नत ग्रेडिंग फॉर्म इस समय तैयार नहीं है। सरल ग्रेडिंग प्रणाली का उपयोग तब तक किया जाएगा जब तक कि फॉर्म की वैध हैसियत न हो।';
$string['gradingmanagement'] = 'उन्नत श्रेणीकरण';
$string['gradingmanagementtitle'] = 'उन्नत ग्रेडिंग: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'ग्रेडिंग विधि';
$string['gradingmethod_help'] = 'उन्नत ग्रेडिंग प्रणाली चुनें जिसका उपयोग दिए गए संदर्भ में ग्रेड की गणना के लिए किया जाना चाहिए। उन्नत ग्रेडिंग को अक्षम करने और चूकना ग्रेडिंग तंत्र पर वापस जाने के लिए, \'सरल प्रत्यक्ष ग्रेडिंग\' चुनें।';
$string['gradingmethodnone'] = 'सरल प्रत्यक्ष श्रेणीकरण';
$string['gradingmethods'] = 'श्रेणीकरण विधियाँ';
$string['manageactionclone'] = 'एक टेम्प से नया ग्रेडिंग फॉर्म बनाएँ';
$string['manageactiondelete'] = 'वर्तमान में परिभाषित प्रपत्र को निकाल देना दें';
$string['manageactiondeleteconfirm'] = 'आप \'{$a->formname}\' ग्रेडिंग फॉर्म और \'{$a->component} ({$a->area})\' से संबंधित सभी जानकारी को हटाने जा रहे हैं। कृपया निम्नलिखित परिणामों को समझें:

* इस प्रक्रिया को पूर्ववत नहीं किया जा सकता है।

* आप इस फॉर्म को हटाए बिना \'सरल प्रत्यक्ष ग्रेडिंग\' सहित किसी अन्य ग्रेडिंग विधि पर स्विच कर सकते हैं।

* ग्रेडिंग फॉर्म भरने की प्रक्रिया से संबंधित सभी जानकारी नष्ट हो जाएगी।

* ग्रेडबुक में संग्रहीत परिकलित परिणाम ग्रेड अप्रभावित रहेंगे। हालांकि, उनकी गणना कैसे की गई, इसका स्पष्टीकरण उपलब्ध नहीं होगा।

* यह प्रक्रिया अन्य गतिविधियों में इस फॉर्म की संभावित प्रतियों को प्रभावित नहीं करती है।';
$string['manageactiondeletedone'] = 'फॉर्म को सफलतापूर्वक हटा दिया गया था';
$string['manageactionedit'] = 'प्रचलित प्रपत्र परिभाषा को संपादित करें';
$string['manageactionnew'] = 'नए ग्रेडिंग रूप को शुरू से परिभाषित करें';
$string['manageactionshare'] = 'प्रपत्र को एक नए समय के रूप में प्रकाशित करें';
$string['manageactionshareconfirm'] = 'आप ग्रेडिंग फॉर्म \'{$a}\' की एक प्रति को एक नए सार्वजनिक टेम्प के रूप में सहेजने जा रहे हैं। आपकी साइट पर अन्य उपयोगकर्ता उस टेम्प से अपनी गतिविधियों में नए ग्रेडिंग फॉर्म बना सकेंगे।';
$string['manageactionsharedone'] = 'फॉर्म को सफलतापूर्वक एक टेम्पो के रूप में सहेजा गया था';
$string['noitemid'] = 'श्रेणीकरण संभव नहीं है। श्रेणीबद्ध वस्तु मौजूद नहीं है।';
$string['nosharedformfound'] = 'कोई समयसीमा नहीं मिली';
$string['privacy:metadata:grading_definitions'] = 'एक उन्नत श्रेणीकरण रूप के बारे में बुनियादी जानकारी एक श्रेणीकरण योग्य क्षेत्र में परिभाषित की गई है।';
$string['privacy:metadata:grading_definitions:areaid'] = 'क्षेत्र ID जहाँ उन्नत श्रेणीकरण प्रपत्र को परिभाषित किया गया है।';
$string['privacy:metadata:grading_definitions:copiedfromid'] = 'ग्रेडिंग परिभाषा ID जहाँ से इसकी प्रतिलिपि बनाई गई थी।';
$string['privacy:metadata:grading_definitions:description'] = 'उन्नत श्रेणीकरण प्रणाली का विवरण।';
$string['privacy:metadata:grading_definitions:method'] = 'श्रेणीकरण प्रणाली जो परिभाषा के लिए जिम्मेदार, उत्तरदायी है।';
$string['privacy:metadata:grading_definitions:name'] = 'उन्नत श्रेणीकरण परिभाषा का नाम।';
$string['privacy:metadata:grading_definitions:options'] = 'इस श्रेणीकरण परिभाषा की कुछ सेटिंग्स।';
$string['privacy:metadata:grading_definitions:status'] = 'इस उन्नत श्रेणीकरण परिभाषा की हैसियत।';
$string['privacy:metadata:grading_definitions:timecopied'] = 'वह समय जब श्रेणीकरण परिभाषा की नकल की गई थी।';
$string['privacy:metadata:grading_definitions:timecreated'] = 'वह समय जब श्रेणीकरण परिभाषा बनाई गई थी।';
$string['privacy:metadata:grading_definitions:timemodified'] = 'वह समय जब ग्रेडिंग परिभाषा को आखिरी बार संशोधित किया गया था।';
$string['privacy:metadata:grading_definitions:usercreated'] = 'ग्रेडिंग परिभाषा बनाने वाले उपयोगकर्ता की ID\\';
$string['privacy:metadata:grading_definitions:usermodified'] = 'उस उपयोगकर्ता की ID जिसने आखिरी बार ग्रेडिंग परिभाषा को संशोधित किया था।';
$string['privacy:metadata:grading_instances'] = 'एक रेटर द्वारा (कर मूल्य) निर्धारण की गई एक ग्रेडेबल वस्तु के लिए (कर मूल्य) निर्धारण अभिलेख';
$string['privacy:metadata:grading_instances:feedback'] = 'उपयोगकर्ता द्वारा दी गई प्रतिक्रिया।';
$string['privacy:metadata:grading_instances:feedbackformat'] = 'उपयोगकर्ता द्वारा दी गई प्रतिक्रिया का पाठ प्रारूप।';
$string['privacy:metadata:grading_instances:raterid'] = 'ग्रेडिंग उदाहरण को रेट करने वाले उपयोगकर्ता की ID';
$string['privacy:metadata:grading_instances:rawgrade'] = 'ग्रेडिंग उदाहरण के लिए ग्रेड।';
$string['privacy:metadata:grading_instances:status'] = 'ग्रेडिंग उदाहरण के लिए ग्रेड।';
$string['privacy:metadata:grading_instances:timemodified'] = 'वह समय जब ग्रेडिंग उदाहरण को आखिरी बार संशोधित किया गया था।';
$string['privacy:metadata:gradingformpluginsummary'] = 'ग्रेडिंग प्रणाली के लिए डेटा।';
$string['searchownforms'] = 'मेरे अपने फॉर्म सम्मिलित करना';
$string['searchtemplate'] = 'ग्रेडिंग रूप खोज';
$string['searchtemplate_help'] = 'आप एक ग्रेडिंग फॉर्म की खोज कर सकते हैं और इसे यहाँ नए ग्रेडिंग फॉर्म के लिए एक अस्थायी के रूप में उपयोग कर सकते हैं। बस ऐसे शब्द टाइप करें जो प्रपत्र के नाम, उसके विवरण अथवा प्रपत्र निकाय में ही कहीं दिखाई देने चाहिए। एक वाक्अथवांश खोजने के लिए, पूरे प्रश्न को दोहरे उद्धरणों में लपेटें। चूकना रूप से, केवल वे ग्रेडिंग फॉर्म जिन्हें साझा टेम्पलेट के रूप में सहेजा गअथवा है, खोज परिणामों में शामिल किए जाते हैं। आप खोज परिणामों में अपने सभी ग्रेडिंग फॉर्म भी सम्मिलित करना सकते हैं। इस तरह, आप उन्हें साझा किए बिना अपने ग्रेडिंग फॉर्म का पुन: उपयोग कर सकते हैं। केवल \'उपयोग के लिए तैअथवार\' के रूप में चिह्नित प्रपत्रों का इस तरह से पुन: उपयोग किअथवा जा सकता है।';
$string['statusdraft'] = 'ड्राफ्ट';
$string['statusready'] = 'उपयोग के लिए तैयार';
$string['templatedelete'] = 'निकाल देना';
$string['templatedeleteconfirm'] = 'आप साझा टेम्प \'{$a}\' को निकाल देना जा रहे हैं। एक टेम्प को निकाल देना से मौजूदा रूप प्रभावित नहीं होते हैं जो इससे बनाए गए थे।';
$string['templateedit'] = 'संपादित करें';
$string['templatepick'] = 'इस लय का उपयोग करें';
$string['templatepickconfirm'] = 'क्या आप \'{$a->formname}\' ग्रेडिंग फॉर्म को \'{$a->component} ({$a->area})\' में नए ग्रेडिंग फॉर्म के लिए टेम्पलेट के रूप में उपयोग करना चाहते हैं?';
$string['templatepickownform'] = 'इस रूप का उपयोग अस्थायी रूप से करें';
$string['templatesource'] = 'स्थान: {$a->घटक} ({$a->क्षेत्र})';
$string['templatetypeown'] = 'अपना रूप';
$string['templatetypeshared'] = 'साझा तापमान';
