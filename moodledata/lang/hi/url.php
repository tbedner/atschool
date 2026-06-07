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
 * Strings for component 'url', language 'hi', version '4.4'.
 *
 * @package     url
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowvariables'] = 'URL चर की अनुमति देना';
$string['allowvariables_desc'] = 'URL में चर जोड़ने की अनुमति देना। चर आपको URL के हिस्से के रूप में आंतरिक जानकारी, जैसे कि उपयोगकर्ता नाम, देने में सक्षम बनाते हैं। इस सुविधा का उपयोग करते समय संभावित गोपनीयता जोखिमों के बारे में जागरूक रहें।';
$string['chooseavariable'] = 'एक चर चुनें।....';
$string['clicktoopen'] = 'संसाधन को खोलने के लिए {$a} पर क्लिक करें।';
$string['configdisplayoptions'] = 'उन सभी विकल्पों का चयन करें जो उपलब्ध होने चाहिए, मौजूदा सेटिंग्स को संशोधित नहीं किया गया है। कई क्षेत्रों का चयन करने के लिए CTRL  कुंजी को ग्रहण करना।';
$string['configframesize'] = 'जब कोई वेब पेज अथवा अपलोड की गई दाखिल करना किसी फ्रेम के भीतर प्रदर्शित होती है, तो यह मान शीर्ष फ्रेम (जिसमें नेविगेशन होता है) की ऊंचाई (पिक्सेल में) होती है।';
$string['configrolesinparams'] = 'क्या अनुकूलित भूमिका नाम ( क्रम सेटिंग्स से) URL मापदंडों के लिए चर के रूप में उपलब्ध होने चाहिए?';
$string['configsecretphrase'] = 'इस गुप्त वाक्यांश का उपयोग कूटबद्ध दृष्टव्‍य मूल्य उत्पन्न करने के लिए किया जाता है जिसे एक मानदंड के रूप में कुछ सर्वरों को भेजा जा सकता है। कूटबद्ध दृष्टव्‍य आपके गुप्त वाक्यांश से जुड़े चालू, प्रचलित उपयोगकर्ता IP पते के md5  मूल्य द्वारा उत्पन्न होता है। ie दृष्टव्‍य = md5 (ip.secretphrase)। कृपया ध्यान दें कि यह विश्वसनीय नहीं है क्योंकि IP  सम्बोधन बदल सकता है और अक्सर विभिन्न कंप्यूटरों द्वारा साझा किया जाता है।';
$string['contentheader'] = 'सामग्री';
$string['createurl'] = 'एक URL बनाएँ';
$string['displayoptions'] = 'उपलब्ध सजावट विकल्प';
$string['displayselect'] = 'सजावट';
$string['displayselect_help'] = 'यह सेटिंग, URL दाखिल करना प्रकार के साथ और क्अथवा ब्राउज़र एम्बेडिंग की अनुमति देता है, यह निर्धारित करता है कि URL कैसे प्रदर्शित किअथवा जाता है। विकल्पों में सम्मिलित करना हो सकते हैं: * स्वचालित-URL के लिए सबसे अच्छा सजावट विकल्प स्वचालित रूप से चुना जाता है * एम्बेड-URL URL विवरण और किसी भी ब्लॉक के साथ नेविगेशन बार के नीचे पृष्ठ के भीतर प्रदर्शित होता है * खुला-केवल URL ब्राउज़र विंडो में प्रदर्शित होता है * पॉप-अप में-URL मेनू अथवा पते की पट्टी के बिना एक नई ब्राउज़र विंडो में प्रदर्शित होता है * फ्रेम में-URL नेविगेशन बार के नीचे एक फ्रेम के भीतर प्रदर्शित होता है और URL विवरण * नई विंडो-URL मेनू और पते की पट्टी के साथ एक नई ब्राउज़र विंडो में प्रदर्शित होता है';
$string['displayselectexplain'] = 'सजावट प्रकार चुनें, दुर्भाग्य से सभी प्रकार सभी URLs के लिए उपयुक्त नहीं हैं।';
$string['externalurl'] = 'बाहरी URL';
$string['framesize'] = 'फ्रेम की ऊँचाई';
$string['indicator:cognitivedepth'] = 'URL संज्ञानात्मक';
$string['indicator:cognitivedepth_help'] = 'यह संकेतक छात्र द्वारा URL संसाधन में प्राप्त संज्ञानात्मक गहराई पर आधारित है।';
$string['indicator:cognitivedepthdef'] = 'URL संज्ञानात्मक';
$string['indicator:cognitivedepthdef_help'] = 'प्रतिभागी इस विश्लेषण अंतराल के दौरान URL संसाधनों द्वारा प्रस्तावित संज्ञानात्मक संलग्नता के इस प्रतिशत दर तक पहुंच गया है (स्तर = कोई दृश्य नहीं, दृश्य)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'URL सामाजिक';
$string['indicator:socialbreadth_help'] = 'यह संकेतक एक URL संसाधन में छात्र द्वारा प्राप्त सामाजिक चौड़ाई पर आधारित है।';
$string['indicator:socialbreadthdef'] = 'URL सामाजिक';
$string['indicator:socialbreadthdef_help'] = 'प्रतिभागी इस विश्लेषण अंतराल के दौरान URL संसाधनों द्वारा प्रस्तावित सामाजिक जुड़ाव के इस प्रतिशत दर तक पहुंच गया है (स्तर = कोई सहभागिता नहीं, अकेले प्रतिभागी)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidstoredurl'] = 'इस संसाधन को सजावट कर सकते हैं, URL अमान्य है।';
$string['invalidurl'] = 'दर्ज किया गया URL अमान्य है';
$string['modulename'] = 'URL';
$string['modulename_help'] = 'URL  मॉड्यूल एक अध्अथवापक को क्रम संसाधन के रूप में एक वेब लिंक प्रदान करने में सक्षम बनाता है। जो कुछ भी ऑनलाइन स्वतंत्र रूप से उपलब्ध है, जैसे कि दस्तावेज़ अथवा चित्र, उसे इससे दृष्टव्‍य जा सकता है; URL को वेबसाइट का होम पेज होने की अपेक्षितता नहीं है। किसी विशेष वेब पेज के URL को कॉपी और पेस्ट किअथवा जा सकता है अथवा कोई अध्अथवापक दाखिल करना पिकर का उपयोग कर सकता है और फ्लिकर, यूट्यूब अथवा विकिमीडिअथवा जैसे रिपॉजिटरी से एक लिंक चुन सकता है (इस बात पर निर्भर करता है कि साइट के लिए कौन से रिपॉजिटरी सक्षम हैं)। URL के लिए कई सजावट विकल्प हैं, जैसे कि एक नई विंडो में एम्बेडेड अथवा खोलना और यदि अपेक्षित हो तो URL में जानकारी पास करने के लिए उन्नत विकल्प, जैसे कि छात्र का नाम। ध्अथवान दें कि URL को पाठ संपादक की वजह से, के बाहर, में से, से होकर, के द्वारा किसी अन्य संसाधन अथवा क्रियाकलाप प्रकार में भी दृष्टव्‍य जा सकता है।';
$string['modulename_link'] = 'mod/url/view';
$string['modulenameplural'] = 'URLs';
$string['name'] = 'नाम';
$string['name_help'] = 'यह URL के लिए लिंक पाठ के रूप में कार्य करेगा। एक सार्थक पाठ दर्ज करें जो यूआरएल के प्रयोजन,URL उद्देश्य का संक्षिप्त वर्णन करता है। "लिंक" शब्द का उपयोग करने से बचें। यह स्क्रीन पाठक उपयोगकर्ताओं को मदद करेगा क्योंकि स्क्रीन पाठक लिंक की घोषणा करते हैं (e.g। "moodle.org, लिंक") इसलिए नाम क्षेत्र में "लिंक" शब्द को सम्मिलित करना की कोई आवश्यकता नहीं है।';
$string['page-mod-url-x'] = 'कोई भी URL मॉड्यूल पृष्ठ';
$string['parametersheader'] = 'URL चर';
$string['parametersheader_help'] = 'यह खंड आपको URL के हिस्से के रूप में आंतरिक जानकारी देने की अनुमति देता है। यह उपयोगी है यदि URL एक इंटरैक्टिव वेब पेज है जो मापदंड लेता है, और आप कुछ ऐसा पास करना चाहते हैं जैसे कि चालू, प्रचलित उपयोगकर्ता का नाम, उदाहरण के लिए। पाठ बॉक्स में URL के मापदंड का नाम दर्ज करें और फिर संबंधित साइट चर का चयन करें।';
$string['pluginadministration'] = 'URL मॉड्यूल प्रशासन';
$string['popupheight'] = 'पॉप-अप ऊँचाई (पिक्सेल में)';
$string['popupheightexplain'] = 'पॉपअप विंडो की चूकना ऊँचाई निर्दिष्ट करता है।';
$string['popupwidth'] = 'पॉप-अप चौड़ाई (पिक्सेल में)';
$string['popupwidthexplain'] = 'पॉपअप विंडो की चूकना चौड़ाई निर्दिष्ट करता है।';
$string['printintro'] = 'URL विवरण प्रदर्शित करें';
$string['printintroexplain'] = 'सामग्री के नीचे URL विवरण प्रदर्शित करें? कुछ सजावट प्रकार सक्षम होने पर भी विवरण सजावट कर सकते हैं।';
$string['privacy:metadata'] = 'URL संसाधन प्लगइन किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करता है।';
$string['rolesinparams'] = 'URL चर के रूप में भूमिका के नाम';
$string['serverurl'] = 'सर्वर URL';
$string['url:addinstance'] = 'एक नया URL संसाधन जोड़ें';
$string['url:view'] = 'URL देखें';
