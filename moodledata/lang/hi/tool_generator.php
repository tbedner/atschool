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
 * Strings for component 'tool_generator', language 'hi', version '4.4'.
 *
 * @package     tool_generator
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionalmodules'] = 'अतिरिक्त गतिविधियाँ';
$string['additionalmodules_help'] = 'अधिक गतिविधियों का चयन करें जो परीक्षण क्रम में सम्मिलित करना के लिए course_backend_generator_create_activity फ़ंक्शन को औजार लागू करना हैं।';
$string['bigfile'] = 'बड़ी दाखिल करना {$a}';
$string['courseexplanation'] = 'यह उपकरण स्तर परीक्षण क्रम बनाता है जिसमें कई अनुभाग, गतिविधियाँ और फाइलें सम्मिलित करना होती हैं। इसका उद्देश्य विविध, विभिन्न तंत्र घटकों (जैसे बैकअप और पुनर्स्थापना) की विश्वसनीयता और पालन की जांच के लिए एक स्तरीकृत उपाय प्रदान करना है। यह परीक्षण महत्त्वपूर्ण है क्योंकि पहले भी ऐसे कई मामले सामने आए हैं जहां वास्तविक जीवन के उपयोग के मामलों का सामना करना पड़ा है (e.g। 1,000 गतिविधियों वाला एक क्रम ), तंत्र काम नहीं करती है। इस सुविधा का उपयोग करके बनाए गए क्रम बड़ी मात्रा में डेटाबेस और फाइलसिस्टम स्थान (दसियों गीगाबाइट) पर कब्जा कर सकते हैं। इस स्थान को फिर से जारी करने के लिए आपको क्रम ों को निकाल देना (और विविध, विभिन्न सफाई रन की प्रतीक्षा करने) की आवश्यकता होगी। * * लाइव सिस्टम * * पर इस सुविधा का उपयोग न करें। केवल डेवलपर सर्वर पर उपयोग करें। (आकस्मिक उपयोग से बचने के लिए, यह सुविधा तब तक अक्षम है जब तक कि आपने डेवलपर डीबगिंग स्तर का भी चयन नहीं किया है।)';
$string['coursewithoutusers'] = 'चयनित क्रम का कोई उपयोगकर्ता नहीं है';
$string['createcourse'] = 'क्रम बनाएँ';
$string['createtestplan'] = 'एक परीक्षण योजना बनाएँ';
$string['creating'] = 'क्रम बनाना';
$string['done'] = 'किया गया ({$a}s)';
$string['downloadtestplan'] = 'परीक्षण योजना डाउनलोड करें';
$string['downloadusersfile'] = 'उपयोगकर्ता दाखिल करना डाउनलोड करें';
$string['error_nocourses'] = 'परीक्षण योजना तैयार करने के लिए कोई पाठ्यक्रम नहीं हैं';
$string['error_noforumdiscussions'] = 'चयनित क्रम में मंच चर्चाएं शामिल नहीं हैं।';
$string['error_noforuminstances'] = 'चयनित क्रम में फोरम मॉड्यूल उदाहरण शामिल नहीं हैं';
$string['error_noforumreplies'] = 'चयनित क्रम में मंच के उत्तर नहीं होते हैं';
$string['error_nonexistingcourse'] = 'निर्दिष्ट क्रम मौजूद नहीं है';
$string['error_nopageinstances'] = 'चयनित क्रम में पृष्ठ मॉड्यूल उदाहरण नहीं होते हैं';
$string['error_notdebugging'] = 'इस सर्वर पर उपलब्ध नहीं है क्योंकि डीबगिंग डेवलपर के लिए सेट नहीं है';
$string['error_nouserspassword'] = 'परीक्षण योजना बनाने के लिए आपको $cfg-> tool_generator_users_password को config.php में सेट करना होगा।';
$string['fullname'] = 'परीक्षण क्रम : {$a-> size}';
$string['maketestcourse'] = 'परीक्षण क्रम बनाएँ';
$string['maketestplan'] = 'JMeter  परीक्षण योजना बनाएँ';
$string['notenoughusers'] = 'चयनित क्रम में पर्याप्त उपयोगकर्ता नहीं हैं';
$string['pluginname'] = 'विकास, वृद्धि डेटा जनरेटर';
$string['privacy:metadata'] = 'विकास, वृद्धि डेटा जनरेटर प्लगइन किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करता है।';
$string['progress_checkaccounts'] = 'उपयोगकर्ता खातों की जाँच करना ({$a})';
$string['progress_coursecompleted'] = 'पूरा किया गया पाठ्यक्रम ({$a} s)';
$string['progress_createaccounts'] = 'उपयोगकर्ता खाते बनाना ({$a->from} - {$a->to})';
$string['progress_createassignments'] = 'असाइनमेंट बनाना ({$a})';
$string['progress_createbigfiles'] = 'बड़ी फाइलें बनाना ({$a})';
$string['progress_createcourse'] = 'क्रम {$a} बनाना';
$string['progress_createforum'] = 'मंच बनाना ({$a} पोस्ट)';
$string['progress_createpages'] = 'पृष्ठ बनाना ({$a})';
$string['progress_createsmallfiles'] = 'छोटी फ़ाइलें बनाना ({$a})';
$string['progress_createusers'] = 'उपयोगकर्ता खाते बनाना ({$a})';
$string['progress_enrol'] = 'क्रम में उपयोगकर्ताओं का नामांकन ({$a})';
$string['progress_sitecompleted'] = 'साइट पूर्ण ({$a} s)';
$string['sitesize_0'] = 'xs (~10mb; 3 पाठ्यक्रम, ~30 सेकंड में बनाए गए)';
$string['sitesize_1'] = 'S (~50MB; 8 पाठ्यक्रम, ~2 मिनट में बनाए गए)';
$string['sitesize_2'] = 'M (~ 200 एमबी; 73 पाठ्यक्रम, ~ 10 मिनट में बनाए गए)';
$string['sitesize_3'] = 'L (~ 1 \'5 जीबी; 277 पाठ्यक्रम, ~ 1\' 5 घंटे में बनाए गए)';
$string['sitesize_4'] = 'XL (~10 जीबी; 1065 पाठ्यक्रम, ~5 घंटे में बनाए गए)';
$string['sitesize_5'] = 'XXL (~ 20 जीबी; 4177 पाठ्यक्रम, ~ 10 घंटे में बनाए गए)';
$string['size'] = 'आकार निश्चित रूप से';
$string['smallfiles'] = 'छोटी फाइलें';
$string['targetcourse'] = 'परीक्षण लक्ष्य क्रम';
$string['testplanexplanation'] = 'यह टूल JMeter टेस्ट प्लान फ़ाइल और उपयोगकर्ता क्रेडेंशियल फ़ाइल बनाता है।

यह टेस्ट प्लान {$a} के साथ काम करने के लिए डिज़ाइन किया गया है, जो किसी विशिष्ट Moodle वातावरण में टेस्ट प्लान चलाना आसान बनाता है, रन के बारे में जानकारी एकत्र करता है और परिणामों की तुलना करता है। इसलिए, आपको इसे डाउनलोड करना होगा और इसके test_runner.sh स्क्रिप्ट का उपयोग करना होगा या इंस्टॉलेशन और उपयोग संबंधी निर्देशों का पालन करना होगा।

आपको config.php में कोर्स उपयोगकर्ताओं के लिए पासवर्ड सेट करना होगा (उदाहरण के लिए, $CFG->tool_generator_users_password = \'moodle\';)। टूल के अनपेक्षित उपयोगों को रोकने के लिए इस पासवर्ड का कोई डिफ़ॉल्ट मान नहीं है। यदि आपके कोर्स उपयोगकर्ताओं के पास अन्य पासवर्ड हैं या वे tool_generator द्वारा जनरेट किए गए थे लेकिन $CFG->tool_generator_users_password मान सेट किए बिना, तो आपको पासवर्ड अपडेट विकल्प का उपयोग करना होगा।

यह टूल_जेनरेटर का हिस्सा है, इसलिए यह कोर्स और साइट जेनरेटर द्वारा जेनरेट किए गए कोर्स के साथ अच्छी तरह से काम करता है।
इसका उपयोग किसी भी कोर्स के साथ किया जा सकता है जिसमें कम से कम निम्नलिखित शामिल हों:

* पर्याप्त संख्या में नामांकित उपयोगकर्ता (आपके द्वारा चुने गए टेस्ट प्लान के आकार पर निर्भर करता है) जिनका पासवर्ड \'moodle\' पर रीसेट किया गया हो।
* एक पेज मॉड्यूल इंस्टेंस।
* कम से कम एक चर्चा और एक उत्तर के साथ एक फोरम मॉड्यूल इंस्टेंस।

बड़े टेस्ट प्लान चलाते समय आपको अपने सर्वर की क्षमता पर विचार करना चाहिए, क्योंकि JMeter द्वारा जेनरेट किया गया लोड काफी अधिक हो सकता है।
इस तरह की समस्याओं को कम करने के लिए रैंप अप अवधि को थ्रेड्स (उपयोगकर्ताओं) की संख्या के अनुसार समायोजित किया गया है, लेकिन लोड अभी भी बहुत अधिक है।

**लाइव सिस्टम पर टेस्ट प्लान न चलाएं।** यह सुविधा केवल JMeter को फीड करने के लिए फाइलें बनाती है, इसलिए यह अपने आप में खतरनाक नहीं है,
लेकिन आपको इस टेस्ट प्लान को प्रोडक्शन साइट पर **कभी नहीं** चलाना चाहिए।';
$string['testscenario'] = 'परीक्षण परिदृश्य बनाएँ';
$string['testscenario_description'] = 'परीक्षण परिदृश्यों को बनाने में एक सीमित सुविधा फ़ाइलों के वाक्यविन्यास का उपयोग किया जाता है ताकि एक शारीरिक परीक्षण चलाने के लिए सभी आवश्यक, जरूरी तत्व बनाए जा सकें।';
$string['testscenario_errorparsing'] = 'त्रुटि पार्सिंग सुविधा दाखिल करना: {$a}';
$string['testscenario_file'] = 'दाखिल करना';
$string['testscenario_invalidfile'] = 'दाखिल करना प्रारूप वैध नहीं है अथवा इसमें अमान्य चरण हैं।';
$string['testscenario_invalidstep'] = 'अज्ञात कदम। परीक्षण परिदृश्य बनाएँ केवल जनरेटर चरणों को स्वीकार करता है।';
$string['testscenario_nosteps'] = 'दाखिल करना में निष्पादन करना करने के लिए कोई कदम नहीं हैं।';
$string['testscenario_notready'] = 'Composer और Behat लाइब्रेरी अभी तक स्थापित नहीं हैं।<br><br>इस टूल को सक्रिय करने के लिए यह कमांड चलाएँ: <strong>php admin/tool/generator/cli/runtestscenario.php</strong>';
$string['testscenario_outline'] = 'परिदृश्य रूपरेखा समर्थित नहीं हैं।';
$string['testscenario_scenarionosteps'] = 'इस परिदृश्य में कोई कदम नहीं हैं।';
$string['testscenario_steps'] = 'परीक्षण परिदृश्य चरण:';
$string['updateuserspassword'] = 'क्रम उपयोगकर्ताओं के पासवर्ड को अद्यतन';
$string['updateuserspassword_help'] = 'JMeter को कोर्स उपयोगकर्ता के रूप में लॉग इन करने की आवश्यकता होती है। आप config.php में $CFG->tool_generator_users_password का उपयोग करके उपयोगकर्ता का पासवर्ड सेट कर सकते हैं। यह सेटिंग $CFG->tool_generator_users_password के अनुसार कोर्स उपयोगकर्ता के पासवर्ड को अपडेट करती है। यह तब उपयोगी हो सकता है जब आप tool_generator द्वारा जनरेट नहीं किए गए कोर्स का उपयोग कर रहे हों या परीक्षण कोर्स बनाते समय $CFG->tool_generator_users_password सेट नहीं किया गया हो।';
