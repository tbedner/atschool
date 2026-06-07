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
 * Strings for component 'qtype_numerical', language 'hi', version '4.4'.
 *
 * @package     qtype_numerical
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptederror'] = 'स्वीकार की गई त्रुटि';
$string['addmoreanswerblanks'] = '{नहीं} अधिक उत्तरों के लिए रिक्त स्थान';
$string['addmoreunitblanks'] = '{नहीं} अधिक इकाइयों के लिए रिक्त स्थान';
$string['answercolon'] = 'जवाबः';
$string['answererror'] = 'त्रुटि';
$string['answermustbenumberorstar'] = 'उत्तर एक संख्अथवा होनी चाहिए, उदाहरण के लिए-1.234 अथवा 3e8, अथवा \'*\'';
$string['answerno'] = '{$a} का उत्तर दें';
$string['decfractionofquestiongrade'] = 'प्रश्न श्रेणी के एक खंड (0-1) के रूप में';
$string['decfractionofresponsegrade'] = 'प्रतिक्रिया ग्रेड के एक खंड (0-1) के रूप में';
$string['decimalformat'] = 'दशमलव';
$string['editableunittext'] = 'पाठ इनपुट तत्व';
$string['errornomultiplier'] = 'आपको इस इकाई के लिए एक गुणक विनिर्देश करना होगा।';
$string['errorrepeatedunit'] = 'आपके पास एक ही नाम की दो इकाइयाँ नहीं हो सकती हैं।';
$string['geometric'] = 'ज्यामितीय';
$string['invalidnumber'] = 'आपको एक वैध संख्या दर्ज करनी होगी।';
$string['invalidnumbernounit'] = 'आपको एक वैध संख्या दर्ज करनी होगी। अपनी प्रतिक्रिया में एक इकाई सम्मिलित करना';
$string['invalidnumericanswer'] = 'आपके द्वारा दर्ज किए गए उत्तरों में से एक वैध संख्या नहीं थी।';
$string['invalidnumerictolerance'] = 'आपके द्वारा दर्ज की गई सहिष्णुता में से एक वैध संख्या नहीं थी।';
$string['leftexample'] = 'बाईं ओर, उदाहरण के लिए $1.00 अथवा £1.00';
$string['manynumerical'] = 'इकाइयाँ वैकल्पिक हैं। यदि एक इकाई दर्ज की जाती है, तो इसका उपयोग ग्रेडिंग से पहले प्रतिक्रिया को इकाई 1 में बदलने के लिए किया जाता है।';
$string['multiplier'] = 'गुणक';
$string['nominal'] = 'सांकेतिक';
$string['noneditableunittext'] = 'इकाई संख्या 1 का गैर-संपादन योग्य पाठ';
$string['nonvalidcharactersinnumber'] = 'संख्या में गैर-वैध वर्ण';
$string['notenoughanswers'] = 'आपको कम से कम एक उत्तर दर्ज करना होगा।';
$string['nounitdisplay'] = 'कोई इकाई श्रेणीकरण नहीं';
$string['numericalmultiplier'] = 'गुणक';
$string['numericalmultiplier_help'] = 'गुणक वह कारक है जिससे सही संख्यात्मक उत्तर को गुणा किया जाएगा।

पहली इकाई (इकाई 1) का डिफ़ॉल्ट गुणक 1 है। इसलिए, यदि सही संख्यात्मक उत्तर 5500 है और आप इकाई 1 में W को इकाई के रूप में सेट करते हैं, जिसका डिफ़ॉल्ट गुणक 1 है, तो सही उत्तर 5500 W होगा।

यदि आप 0.001 के गुणक के साथ kW इकाई जोड़ते हैं, तो सही उत्तर 5.5 kW होगा। इसका अर्थ है कि 5500W या 5.5kW उत्तर सही माने जाएंगे।

ध्यान दें कि स्वीकार्य त्रुटि को भी गुणा किया जाता है, इसलिए 100W की अनुमत त्रुटि 0.1kW की त्रुटि बन जाएगी।';
$string['oneunitshown'] = 'इकाई 1 स्वचालित रूप से उत्तर पेटी के बगल में प्रदर्शित हो जाती है।';
$string['onlynumerical'] = 'इकाइयों का उपयोग बिल्कुल नहीं किया जाता है। केवल संख्यात्मक मान को श्रेणीबद्ध किया जाता है।';
$string['pleaseenterananswer'] = 'कृपया एक उत्तर दर्ज करें।';
$string['pleaseenteranswerwithoutthousandssep'] = 'कृपया हजार पृथक्करणकर्ता ({$a}) का उपयोग किए बिना अपना उत्तर दर्ज करें।';
$string['pluginname'] = 'संख्यात्मक';
$string['pluginname_help'] = 'छात्र के दृष्टिकोण से, एक संख्यात्मक प्रश्न एक छोटे उत्तर वाले प्रश्न की तरह दिखता है। अंतर यह है कि संख्यात्मक उत्तरों में एक स्वीकृत त्रुटि की अनुमत है। यह उत्तरों की एक निश्चित श्रृंखला को एक उत्तर के रूप में मूल्यांकन करने की अनुमत देता है। उदाहरण के लिए, यदि उत्तर 2 की स्वीकृत त्रुटि के साथ 10 है, तो 8 और 12 के बीच की किसी भी संख्या को सही माना जाएगा।';
$string['pluginname_link'] = 'question/type/numerical';
$string['pluginnameadding'] = 'एक संख्यात्मक प्रश्न जोड़ें';
$string['pluginnameediting'] = 'संख्यात्मक प्रश्न का संपादन';
$string['pluginnamesummary'] = 'एक संख्यात्मक प्रतिक्रिया की अनुमति देता है, संभवत: इकाइयों के साथ, जिसे विविध, विभिन्न मॉडल उत्तरों विरुद्ध तुलना करके श्रेणीबद्ध किया जाता है, संभवत: सहिष्णुता के साथ।';
$string['privacy:metadata'] = 'संख्यात्मक प्रश्न प्रकार प्लगइन प्रश्न लेखकों को उपयोगकर्ता वरीयताओं के रूप में चूकना विकल्प निर्धारित करने की अनुमति देता है।';
$string['privacy:preference:defaultmark'] = 'दिए गए प्रश्न के लिए चूकना चिह्न निर्धारित किया गया है।';
$string['privacy:preference:multichoicedisplay'] = 'चाहे इकाइअथवाँ पाठ इनपुट तत्व, बहुविकल्पीय चयन, प्रवरण अथवा ड्रॉप-डाउन मेनू के रूप में प्रदर्शित की जाती हैं।';
$string['privacy:preference:penalty'] = 'प्रत्येक गलत प्रअथवास के लिए दंड जब \'कई प्रअथवासों के साथ संवादात्मक\' अथवा \'अनुकूली मोड\' व्यवहार का उपयोग करके प्रश्न चलाए जाते हैं।';
$string['privacy:preference:unitgradingtypes'] = 'चाहे इकाई जुर्माना प्रतिक्रिअथवा ग्रेड (0-1) के एक खंड के रूप में लागू होता है अथवा प्रश्न ग्रेड।';
$string['privacy:preference:unitpenalty'] = 'प्रतिक्रिअथवा ग्रेड अथवा प्रश्न ग्रेड का कौन सा खंड (0-1) लागू होना चाहिए?';
$string['privacy:preference:unitrole'] = 'इकाई आवश्यक है, वैकल्पिक है अथवा अपेक्षित नहीं है।';
$string['privacy:preference:unitsleft'] = 'चाहे इकाई बाईं ओर प्रदर्शित होती है (e.g। $, £) अथवा दाईं ओर (e.g। kg, km, cm)';
$string['relative'] = 'सापेक्ष';
$string['rightexample'] = 'दाईं ओर, उदाहरण के लिए 1.00cm अथवा 1.00km';
$string['selectunit'] = 'एक इकाई चयन करना';
$string['selectunits'] = 'इकाइयों का चयन करें';
$string['studentunitanswer'] = 'इकाइयाँ इनपुट का उपयोग कर रही हैं';
$string['tolerancetype'] = 'सहिष्णुता का प्रकार';
$string['unit'] = 'इकाई';
$string['unitappliedpenalty'] = 'इन अंकों में खराब इकाई के लिए {$a} का जुर्माना सम्मिलित करना है।';
$string['unitchoice'] = 'एक बहुविकल्पीय चयन, प्रवरण';
$string['unitedit'] = 'इकाई संपादित करें';
$string['unitgraded'] = 'इकाई को दिया जाना चाहिए, और श्रेणीबद्ध किया जाएगा।';
$string['unithandling'] = 'इकाई प्रबंधन';
$string['unitincorrect'] = 'आपने सही इकाई नहीं दी।';
$string['unitmandatory'] = 'अनिवार्य';
$string['unitmandatory_help'] = '* प्रतिक्रिया को लिखित इकाई का उपयोग करके श्रेणीबद्ध किया जाएगा। * यदि इकाई क्षेत्र खाली है तो इकाई जुर्माना लगाया जाएगा';
$string['unitnotselected'] = 'आपको एक इकाई का चयन करना होगा।';
$string['unitonerequired'] = 'आपको कम से कम एक इकाई दर्ज करनी होगी';
$string['unitoptional'] = 'वैकल्पिक इकाई';
$string['unitoptional_help'] = '* यदि इकाई क्षेत्र खाली नहीं है, तो इस इकाई का उपयोग करके प्रतिक्रिअथवा को श्रेणीबद्ध किअथवा जाएगा। * यदि इकाई खराब तरीके से लिखी गई है अथवा अज्ञात है, तो प्रतिक्रिअथवा को अमान्य माना जाएगा।';
$string['unitpenalty'] = 'इकाई जुर्माना';
$string['unitpenalty_help'] = 'दंड तब लागू होता है जब इकाई इनपुट में गलत इकाई नाम दर्ज किअथवा जाता है, अथवा * मूल्य इनपुट बॉक्स में एक इकाई दर्ज की जाती है।';
$string['unitposition'] = 'इकाइयाँ जाती हैं';
$string['units'] = 'इकाइयाँ';
$string['unitselect'] = 'एक ड्रॉप-डाउन मेनू';
$string['unitx'] = 'इकाई {नहीं}';
$string['xmustbenumeric'] = '{$a} एक संख्या होनी चाहिए।';
$string['xmustnotbenumeric'] = '{$a} एक संख्या नहीं हो सकती है।';
$string['youmustenteramultiplierhere'] = 'आपको यहाँ एक गुणक दर्ज करना होगा।';
