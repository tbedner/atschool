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
 * Strings for component 'qtype_ddmarker', language 'hi', version '4.4'.
 *
 * @package     qtype_ddmarker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = '{नहीं} अधिक मार्करों के लिए रिक्त स्थान';
$string['alttext'] = 'ऑल्ट टेक्स्ट';
$string['answer'] = 'जवाब दें';
$string['bgimage'] = 'पृष्ठभूमि छवि';
$string['clearwrongparts'] = 'गलत तरीके से रखे गए मार्करों को छवि के नीचे चूकना प्रारंभ स्थिति में वापस ले जाएँ';
$string['coords'] = 'निर्देशांक';
$string['correctansweris'] = 'सही उत्तर हैः {$a}';
$string['draggableimage'] = 'खींचने योग्य छवि';
$string['draggableitem'] = 'खींचने योग्य वस्तु';
$string['draggableitemheader'] = 'खींचने योग्य वस्तु {$a}';
$string['draggableitemtype'] = 'प्रकार';
$string['draggableword'] = 'खींचने योग्य पाठ';
$string['dropbackground'] = 'निशानियों को ऊपर खींचने के लिए पृष्ठभूमि छवि';
$string['dropzone'] = 'ड्रॉप ज़ोन {$a}';
$string['dropzoneheader'] = 'ड्रॉप ज़ोन';
$string['dropzones'] = 'ड्रॉप ज़ोन';
$string['dropzones_help'] = 'ड्रॉप ज़ोन को निर्देशांकों द्वारा परिभाषित किया जा सकता है, या ऊपर दिए गए पूर्वावलोकन में उन्हें खींचकर उनकी स्थिति निर्धारित की जा सकती है।

सबसे पहले किसी आकृति (वृत्त, आयत या बहुभुज) का चयन करने पर पूर्वावलोकन के ऊपरी बाएँ कोने में एक नई ड्रॉप ज़ोन आकृति जुड़ जाएगी। ड्रॉप ज़ोन को संपादित करते समय पूर्वावलोकन देखने के लिए मार्कर अनुभाग को छोटा करना उपयोगी हो सकता है।

किसी आकृति को संपादित करने के लिए, पूर्वावलोकन में आकृति पर क्लिक करें जिससे संपादन हैंडल दिखाई देंगे। आप केंद्र हैंडल का उपयोग करके आकृति को स्थानांतरित कर सकते हैं, या शीर्ष हैंडल का उपयोग करके आकृति के आयामों को समायोजित कर सकते हैं।

केवल बहुभुजों के लिए, किसी शीर्ष हैंडल पर क्लिक करते समय कंट्रोल बटन (मैक पर कमांड बटन) को दबाए रखने से बहुभुज में एक नया शीर्ष जुड़ जाएगा। कृपया बहुभुज आकृति को यथासंभव सरल रखें, रेखाओं को आपस में न जोड़ें।

जानकारी के लिए, तीनों आकृतियाँ निर्देशांकों का उपयोग इस प्रकार करती हैं:

* वृत्त: केंद्र_x, केंद्र_y; त्रिज्या<br />उदाहरण: <code>80,100;50</code>
* आयत: शीर्ष_बाएँ_x, शीर्ष_बाएँ_y; चौड़ाई, ऊँचाई<br />उदाहरण: <code>20,60;80,40</code>
* बहुभुज: x1, y1; x2, y2; ...; xn, yn<br />उदाहरण: <code>20,60;100,60;20,100</code>

मार्कर टेक्स्ट का चयन करने पर वह टेक्स्ट पूर्वावलोकन में आकृति में जुड़ जाएगा।';
$string['followingarewrong'] = 'गलत क्षेत्र में रखे गए मार्कर: {$a}';
$string['followingarewrongandhighlighted'] = 'गलत तरीके से रखे गए मार्कर: {$a}। हाइलाइट किए गए मार्कर अब सही प्लेसमेंट के साथ दिखाए गए हैं। अनुमत क्षेत्र को हाइलाइट करने के लिए मार्कर पर क्लिक करें।';
$string['formerror_dragrequired'] = 'आपको इस प्रश्न में कम से कम एक मार्कर जोड़ना होगा।';
$string['formerror_droprequired'] = 'आपको इस प्रश्न के लिए कम से कम एक ड्रॉप ज़ोन परिभाषित करना होगा।';
$string['formerror_nobgimage'] = 'आपको ड्रैग एंड ड्रॉप क्षेत्र के लिए पृष्ठभूमि के रूप में उपयोग करने के लिए एक छवि का चयन करने की आवश्यकता है।';
$string['formerror_noitemselected'] = 'आपने एक ड्रॉप ज़ोन निर्दिष्ट किया है लेकिन एक मार्कर नहीं चुना है जिसे ज़ोन में खींचा जाना चाहिए।';
$string['formerror_nosemicolons'] = 'आपके निर्देशांक स्ट्रिंग में कोई अर्धकोलन नहीं हैं। {$a-> shape} के लिए आपके निर्देशांक को-{$a-> coordsstring} के रूप में व्यक्त किया जाना चाहिए।';
$string['formerror_onlysometagsallowed'] = 'मार्कर के लिए लेबल में केवल "{$a}" टैग की अनुमत है।';
$string['formerror_onlyusewholepositivenumbers'] = 'x, y निर्देशांक और/या आकृतियों की चौड़ाई और ऊंचाई विनिर्देश करना के लिए कृपया केवल पूरी सकारात्मक संख्याओं का उपयोग करें। {$a-> shape} के लिए आपके निर्देशांक को-{$a-> coordsstring} के रूप में व्यक्त किया जाना चाहिए।';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'बहुभुज आकार के लिए आपको कम से कम 3 बिंदु विनिर्देश करना होंगे। {$a-> shape} के लिए आपके निर्देशांक को-{$a-> coordsstring} के रूप में व्यक्त किया जाना चाहिए।';
$string['formerror_repeatedpoint'] = 'आपने एक ही निर्देशांक को दो बार दर्ज किया है। प्रत्येक बिंदु अद्वितीय होना चाहिए। {$a-> shape} के लिए आपके निर्देशांक को-{$a-> coordsstring} के रूप में व्यक्त किया जाना चाहिए।';
$string['formerror_shapeoutsideboundsofbgimage'] = 'आपके द्वारा परिभाषित आकार पृष्ठभूमि छवि की सीमाओं से बाहर जाता है।';
$string['formerror_toomanysemicolons'] = 'आपके द्वारा निर्दिष्ट निर्देशांक के बहुत सारे अर्धकोलन-पृथक भाग हैं। {$a-> shape} के लिए आपके निर्देशांक को-{$a-> coordsstring} के रूप में व्यक्त किया जाना चाहिए।';
$string['formerror_unrecognisedwidthheightpart'] = 'आपने जो चौड़ाई और ऊंचाई निर्दिष्ट की है, वह पहचानने योग्य नहीं है। {$a-> shape} के लिए आपके निर्देशांक को-{$a-> coordsstring} के रूप में व्यक्त किया जाना चाहिए।';
$string['formerror_unrecognisedxypart'] = 'आपके द्वारा निर्दिष्ट x, y निर्देशांक अपरिचित हैं। {$a-> shape} के लिए आपके निर्देशांक को-{$a-> coordsstring} के रूप में व्यक्त किया जाना चाहिए।';
$string['infinite'] = 'अनंत';
$string['marker'] = 'मार्कर';
$string['marker_n'] = 'मार्कर {नहीं}';
$string['markers'] = 'मार्कर';
$string['nolabel'] = 'कोई लेबल पाठ नहीं';
$string['noofdrags'] = 'संख्या';
$string['pleasedragatleastonemarker'] = 'आपका जवाब पूरा नहीं है; आपको छवि पर कम से कम एक मार्कर लगाना चाहिए।';
$string['pluginname'] = 'ड्रैग एंड ड्रॉप मार्कर';
$string['pluginname_help'] = 'ड्रैग और ड्रॉप मार्करों के लिए प्रतिवादी को पाठ लेबल खींचने और उन्हें पृष्ठभूमि छवि पर परिभाषित ड्रॉप क्षेत्रों में छोड़ने की आवश्यकता होती है।';
$string['pluginname_link'] = 'question/type/ddmarker';
$string['pluginnameadding'] = 'ड्रैग और ड्रॉप मार्कर जोड़ें';
$string['pluginnameediting'] = 'ड्रैग और ड्रॉप मार्करों का संपादन';
$string['pluginnamesummary'] = 'मार्करों को खींचा जाता है और पृष्ठभूमि छवि पर गिराया जाता है। दृष्टव्‍य: यह प्रश्न प्रकार दृष्टिबाधित उपयोगकर्ताओं के लिए सुलभ नहीं है।';
$string['previewareaheader'] = 'पूर्वावलोकन';
$string['previewareamessage'] = 'एक पृष्ठभूमि छवि दाखिल करना का चयन करें, मार्करों के लिए पाठ लेबल दर्ज करें और पृष्ठभूमि छवि पर ड्रॉप ज़ोन को परिभाषित करें जिस पर उन्हें खींचा जाना चाहिए।';
$string['privacy:metadata'] = 'ड्रैग एंड ड्रॉप मार्कर प्रश्न प्रकार प्लगइन प्रश्न लेखकों को उपयोगकर्ता वरीयताओं के रूप में चूकना विकल्प निर्धारित करने की अनुमति देता है।';
$string['privacy:preference:defaultmark'] = 'दिए गए प्रश्न के लिए चूकना चिह्न निर्धारित किया गया है।';
$string['privacy:preference:penalty'] = 'प्रत्येक गलत प्रअथवास के लिए दंड जब \'कई प्रअथवासों के साथ संवादात्मक\' अथवा \'अनुकूली मोड\' व्यवहार का उपयोग करके प्रश्न चलाए जाते हैं।';
$string['privacy:preference:shuffleanswers'] = 'क्या उत्तरों को स्वचालित रूप से बदल दिया जाना चाहिए।';
$string['refresh'] = 'पूर्वावलोकन को ताज़ा करें';
$string['shape'] = 'आकार';
$string['shape_circle'] = 'वृत्त';
$string['shape_circle_coords'] = 'x, y; r (जहाँ x, y वृत्त के केंद्र के निर्देशांक हैं और r त्रिज्या है)';
$string['shape_circle_lowercase'] = 'वृत्त';
$string['shape_polygon'] = 'बहुभुज';
$string['shape_polygon_coords'] = 'x1, y1; x2, y2; x3, y3; x4, y4... (जहाँ x1, y1 पहले श्लोक के निर्देशांक हैं, x2, y2 दूसरे के निर्देशांक हैं आदि। बहुभुज को बंद करने के लिए पहले श्लोक के निर्देशांक को दोहराने की कोई आवश्यकता नहीं है।)';
$string['shape_polygon_lowercase'] = 'बहुभुज';
$string['shape_rectangle'] = 'आयत';
$string['shape_rectangle_coords'] = 'x, y; w, h (जहाँ x, y आयत के शीर्ष बाएँ कोने के निर्देशांक हैं और w और h आयत की चौड़ाई और ऊंचाई हैं)';
$string['shape_rectangle_lowercase'] = 'आयत';
$string['showmisplaced'] = 'ड्रॉप ज़ोन को हाइलाइट करें जिन पर सही मार्कर नहीं गिरा है';
$string['shuffleimages'] = 'हर बार जब प्रश्न का प्रयास किया जाता है तो शफल ड्रैग आइटम';
$string['stateincorrectlyplaced'] = 'सूबा करें कि कौन से चिह्न गलत तरीके से रखे गए हैं';
$string['summariseplaceno'] = 'ड्रॉप ज़ोन {$a}';
$string['ytop'] = 'ऊपर';
