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
 * Strings for component 'gradingform_rubric', language 'hi', version '4.4'.
 *
 * @package     gradingform_rubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'मानदंड जोड़ें';
$string['additionalfeedback'] = 'अतिरिक्त प्रतिक्रिया';
$string['alwaysshowdefinition'] = 'उपयोगकर्ताओं को रूब्रिक का पूर्वावलोकन करने की अनुमति देना (अन्यथा यह केवल ग्रेडिंग के बाद प्रदर्शित किया जाएगा)';
$string['backtoediting'] = 'संपादन पर वापस जाएँ';
$string['confirmdeletecriterion'] = 'क्या आप सुनिश्चित हैं कि आप इस मानदंड को हटाना चाहते हैं?';
$string['confirmdeletelevel'] = 'क्या आप सुनिश्चित हैं कि आप इस मानदंड को हटाना चाहते हैं?';
$string['criterion'] = 'मानदंड {$a}';
$string['criterionaddlevel'] = 'स्तर जोड़ें';
$string['criteriondelete'] = 'मानदंड निकाल देना';
$string['criterionduplicate'] = 'डुप्लिकेट मानदंड';
$string['criterionempty'] = 'मानदंड संपादित करने के लिए क्लिक करें';
$string['criterionmovedown'] = 'नीचे जाएँ';
$string['criterionmoveup'] = 'ऊपर जाएँ';
$string['criterionremark'] = 'मानदंड {$a->description} के लिए टिप्पणी: {$a->remark}';
$string['definerubric'] = 'रूब्रिक को परिभाषित करें';
$string['description'] = 'विवरण';
$string['enableremarks'] = 'ग्रेडर को प्रत्येक मानदंड के लिए पाठ टिप्पणी जोड़ने की अनुमति देना';
$string['err_mintwolevels'] = 'प्रत्येक मानदंड में कम से कम दो स्तर होने चाहिए।';
$string['err_nocriteria'] = 'रूब्रिक में कम से कम एक मानदंड होना चाहिए';
$string['err_nodefinition'] = 'स्तर की परिभाषा खाली नहीं हो सकती है';
$string['err_nodescription'] = 'मानदंड विवरण खाली नहीं हो सकता है';
$string['err_novariations'] = 'मानदंड स्तर सभी समान संख्या में अंकों के लायक नहीं हो सकते हैं';
$string['err_scoreformat'] = 'प्रत्येक स्तर के लिए अंकों की संख्या एक वैध संख्या होनी चाहिए';
$string['err_totalscore'] = 'रूब्रिक द्वारा श्रेणीबद्ध किए जाने पर उच्‍चतम संभव अंकों की संख्या शून्य से अधिक होनी चाहिए।';
$string['gradingof'] = '{$a} ग्रेडिंग';
$string['level'] = 'स्तर {$a->परिभाषा}, {$a->स्कोर} अंक.';
$string['leveldefinition'] = 'स्तर {$a} परिभाषा';
$string['leveldelete'] = 'स्तर {$a} निकाल देना';
$string['levelempty'] = 'स्तर संपादित करने के लिए क्लिक करें';
$string['levelsgroup'] = 'स्तर समूह';
$string['lockzeropoints'] = 'रूब्रिक के लिए न्यूनतम, कम से कम प्राप्त करने योग्य ग्रेड के न्यूनतम, कम से कम अंक वाले ग्रेड की परिकलन करना';
$string['lockzeropoints_help'] = 'यह सेटिंग केवल तभी लागू होती है जब प्रत्येक मानदंड के लिए अंकों की न्यूनतम, कम से कम संख्या का योग 0 से अधिक हो। यदि टिक किया जाता है, तो क्रियाकलाप का न्यूनतम, कम से कम अंक रूब्रिक के लिए न्यूनतम, कम से कम प्राप्त करने योग्य ग्रेड होगा। यदि टिक नहीं किया जाता है, तो रूब्रिक के लिए न्यूनतम, कम से कम संभावित अंक को क्रियाकलाप के लिए उपलब्ध न्यूनतम, कम से कम ग्रेड में मैप किया जाएगा (जो कि 0 है जब तक कि एक पैमाने का उपयोग नहीं किया जाता है)।';
$string['name'] = 'नाम';
$string['needregrademessage'] = 'इस छात्र के ग्रेड लेने के बाद रूब्रिक की परिभाषा बदल दी गई थी। छात्र इस रूब्रिक को तब तक नहीं देख सकता जब तक कि आप रूब्रिक की जाँच नहीं करते और ग्रेड को अद्यतन नहीं करते।';
$string['notset'] = 'निर्धारित नहीं है';
$string['pluginname'] = 'रूब्रिक';
$string['pointsvalue'] = '{$a} अंक';
$string['previewrubric'] = 'रूब्रिक का पूर्वावलोकन करें';
$string['privacy:metadata:criterionid'] = 'एक विशिष्ट मानदंड के लिए एक पहचानकर्ता को श्रेणीबद्ध किया जा रहा है।';
$string['privacy:metadata:fillingssummary'] = 'रूब्रिक द्वारा बनाए गए उपयोगकर्ता के ग्रेड के बारे में जानकारी संग्रहीत करता है।';
$string['privacy:metadata:instanceid'] = 'किसी क्रियाकलाप में एक ग्रेड से संबंधित एक पहचानकर्ता।';
$string['privacy:metadata:levelid'] = 'रूब्रिक में प्राप्त स्तर।';
$string['privacy:metadata:remark'] = 'निर्धारित किए जा रहे रूब्रिक मानदंड से संबंधित टिप्पणी';
$string['regrademessage1'] = 'आप एक रूब्रिक में परिवर्तनों को बचाने जा रहे हैं जिसका उपयोग पहले से ही ग्रेडिंग के लिए किया जा रहा है। कृपया इंगित करें कि क्या मौजूदा ग्रेड की समीक्षा करने की आवश्यकता है। यदि आप इसे सेट करते हैं तो छात्रों से तब तक रूब्रिक छिपा दिया जाएगा जब तक कि उनकी वस्तु को फिर से ग्रेड नहीं किया जाता है।';
$string['regrademessage5'] = 'आप एक रूब्रिक में महत्वपूर्ण, सार्थक परिवर्तनों को बचाने जा रहे हैं जिसका उपयोग पहले से ही ग्रेडिंग के लिए किया जा रहा है। ग्रेडबुक का मूल्य अपरिवर्तित रहेगा, लेकिन रूब्रिक को छात्रों से तब तक छिपाया जाएगा जब तक कि उनकी वस्तु को फिर से ग्रेड नहीं किया जाता है।';
$string['regradeoption0'] = 'पश्चाताप के लिए चिह्नित न करें';
$string['regradeoption1'] = 'रीग्रेड के लिए चिह्न';
$string['restoredfromdraft'] = 'दृष्टव्‍य: इस व्यक्ति को ग्रेड देने का अंतिम प्रयास ठीक से सहेजा नहीं गया था इसलिए मसौदा ग्रेड को बहाल कर दिया गया है। यदि आप इन परिवर्तनों को रद्द करना चाहते हैं तो नीचे दिए गए \'रद्द करना\' बटन का उपयोग करें।';
$string['rubric'] = 'रूब्रिक';
$string['rubricmapping'] = 'ग्रेड मैपिंग नियमों के लिए अंक';
$string['rubricmappingexplained'] = 'इस मूल्यांकन मानदंड के लिए न्यूनतम संभावित अंक <b>{$a->minscore} अंक</b> हैं। इसे गतिविधि के लिए उपलब्ध न्यूनतम ग्रेड में परिवर्तित किया जाएगा (जो स्केल का उपयोग न करने पर 0 होता है)। अधिकतम अंक <b>{$a->maxscore} अंक</b> को अधिकतम ग्रेड में परिवर्तित किया जाएगा। मध्यवर्ती अंकों को तदनुसार परिवर्तित किया जाएगा।

यदि मूल्यांकन के लिए स्केल का उपयोग किया जाता है, तो अंक को पूर्णांकित किया जाएगा और स्केल के तत्वों में इस प्रकार परिवर्तित किया जाएगा जैसे वे क्रमिक पूर्णांक हों।

इस ग्रेड गणना को फॉर्म को संपादित करके और \'मूल्यांकन मानदंड के लिए न्यूनतम प्राप्य ग्रेड के न्यूनतम स्कोर वाले ग्रेड की गणना करें\' बॉक्स पर टिक करके बदला जा सकता है।';
$string['rubricnotcompleted'] = 'कृपया प्रत्येक मानदंड के लिए कुछ चुनें';
$string['rubricoptions'] = 'रूब्रिक विकल्प';
$string['rubricstatus'] = 'प्रचलित रूब्रिक हैसियत';
$string['save'] = 'सहेजें';
$string['saverubric'] = 'रूब्रिक को सेव करें और इसे तैयार करें';
$string['saverubricdraft'] = 'ड्राफ्ट के रूप में सहेजें';
$string['scoreinputforlevel'] = 'स्तर {$a} के लिए स्कोर इनपुट';
$string['scorepostfix'] = '{$a} अंक';
$string['showdescriptionstudent'] = 'श्रेणीबद्ध किए जा रहे लोगों के लिए रूब्रिक विवरण प्रदर्शित करें';
$string['showdescriptionteacher'] = 'मूल्यांकन के दौरान रूब्रिक विवरण प्रदर्शित करें';
$string['showremarksstudent'] = 'श्रेणीबद्ध किए जा रहे लोगों को टिप्पणी दिखाएँ';
$string['showscorestudent'] = 'श्रेणीबद्ध किए जा रहे लोगों के लिए प्रत्येक स्तर के लिए सजावट बिंदु';
$string['showscoreteacher'] = 'मूल्यांकन के दौरान प्रत्येक स्तर के लिए सजावट अंक';
$string['sortlevelsasc'] = 'स्तरों के लिए क्रमबद्ध क्रमः';
$string['sortlevelsasc0'] = 'अंकों की संख्या में गिरावट';
$string['sortlevelsasc1'] = 'अंकों की संख्या से चढ़ना';
$string['zerolevelsabsent'] = 'चेतावनी: इस रूब्रिक के लिए न्यूनतम, कम से कम संभावित अंक 0 नहीं है; इसके परिणामस्वरूप क्रियाकलाप के लिए अप्रत्याशित ग्रेड हो सकते हैं। इससे बचने के लिए, प्रत्येक मानदंड में 0 अंकों के साथ एक स्तर होना चाहिए। इस चेतावनी को नजरअंदाज किया जा सकता है यदि ग्रेडिंग के लिए एक पैमाने का उपयोग किया जाता है, और रूब्रिक में न्यूनतम, कम से कम स्तर पैमाने के न्यूनतम, कम से कम मूल्य के अनुरूप है।';
