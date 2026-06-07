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
 * Strings for component 'qtype_ordering', language 'hi', version '4.4'.
 *
 * @package     qtype_ordering
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absoluteposition'] = 'निरपेक्ष स्थिति';
$string['addmultipleanswers'] = '{$a} और आइटम जोड़ें';
$string['addsingleanswer'] = 'एक और वस्तु जोड़ें';
$string['allornothing'] = 'सब कुछ अथवा कुछ नहीं';
$string['answer'] = 'आइटम पाठ';
$string['correctitemsnumber'] = 'सही आइटमः {$a}';
$string['correctorder'] = 'इन वस्तुओं के लिए सही क्रम इस प्रकार हैः';
$string['defaultanswerformat'] = 'चूक उत्तर प्रारूप';
$string['defaultquestionname'] = 'निम्नलिखित वस्तुओं को सही क्रम में खींचें।';
$string['draggableitemno'] = 'खींचने योग्य वस्तु {नहीं}';
$string['draggableitems'] = 'खींचने योग्य वस्तु';
$string['duplicatesnotallowed'] = 'खींचने योग्य वस्तुओं की नकल करने की अनुमत नहीं है। स्ट्रिंग "{$a-> text}" का उपयोग पहले से ही {$a-> item} में किया जाता है।';
$string['editingordering'] = 'संपादन आदेश प्रश्न';
$string['gradedetails'] = 'ग्रेड ब्योरा';
$string['gradingtype'] = 'श्रेणीकरण का प्रकार';
$string['gradingtype_help'] = '* * सभी अथवा कुछ भी नहीं * *  &nbsp यदि सभी मदें/मदों सही स्थिति में हैं, तो पूर्ण अंक दिए जाते हैं। अन्यथा, अंक शून्य है।

 * * निरपेक्ष स्थिति * * &nbsp एक वस्तु को सही माना जाता है यदि वह सही उत्तर के समान स्थिति में है। प्रश्न के लिए उच्चतम संभावित अंक * * छात्र को प्रदर्शित वस्तुओं की संख्अथवा के समान है।

* * स्थिति को सही करने के सापेक्ष * * &nbsp किसी मदें/मदों को सही माना जाता है यदि वह सही उत्तर के समान स्थिति में है। सही मदें/मदोंओं को माइनस एक प्रदर्शित मदें/मदोंओं की संख्या के बराबर अंक प्राप्त करना होते हैं। गलत मदें/मदोंओं को माइनस एक प्रदर्शित मदें/मदोंओं की संख्या के बराबर अंक प्राप्त करना होते हैं और मदें/मदों की सही स्थिति से दूरी को घटा देते हैं। इस प्रकार, यदि * * n * * * आइटम छात्र को प्रदर्शित किए जाते हैं, तो प्रत्येक आइटम के लिए उपलब्ध अंकों की संख्या * * * (n-1) * * * है, और प्रश्न के लिए उपलब्ध उच्चतम अंक * * * n x (n-1) * * * है, जो * * * (n2-n) * * * के समान है।

* * अगली मदें/मदों सापेक्ष (अंतिम को छोड़कर) * * &nbsp किसी वस्तु को सही माना जाता है यदि उसके बाद वही वस्तु आती है जैसा कि वह सही उत्तर में है। अंतिम स्थिति में वस्तु की जाँच नहीं की जाती है। इस प्रकार, प्रश्न के लिए उच्चतम संभावित अंक छात्र को प्रदर्शित वस्तुओं की संख्या से एक कम है।

* * अगली मदें/मदों सापेक्ष (अंतिम सहित) * * &nbsp किसी वस्तु को सही माना जाता है यदि उसके बाद वही वस्तु आती है जैसा कि वह सही उत्तर में है। इसमें अंतिम वस्तु शामिल है जिसके बाद कोई वस्तु नहीं होनी चाहिए। इस प्रकार, प्रश्न के लिए उच्चतम संभावित अंक * * छात्र को प्रदर्शित वस्तुओं की संख्या के समान है।

* * पिछले और अगले दोनों आइटमों के सापेक्ष * * &nbsp  एक आइटम को सही माना जाता है यदि पिछले और अगले दोनों आइटम समान हैं क्योंकि वे सही उत्तर में हैं। पहली वस्तु में कोई पिछली वस्तु नहीं होनी चाहिए, और अंतिम वस्तु में कोई अगली वस्तु नहीं होनी चाहिए। इस प्रकार, प्रत्येक मदें/मदों लिए दो संभावित अंक हैं, और प्रश्न के लिए उच्चतम संभावित अंक छात्र को प्रदर्शित वस्तुओं की संख्या से दोगुना है।

**सभी पिछले और अगले प्रश्नों के सापेक्ष**
 &nbsp किसी प्रश्न को सही तब माना जाता है जब उससे पहले और बाद में वही प्रश्न हों जो सही उत्तर में हैं। पिछले प्रश्नों का क्रम मायने नहीं रखता, न ही अगले प्रश्नों का। इसलिए, यदि छात्र को ***n*** प्रश्न दिखाए जाते हैं, तो प्रत्येक प्रश्न के लिए उपलब्ध अंक ***(n - 1)*** होते हैं, और प्रश्न के लिए अधिकतम अंक ***n x (n - 1)*** होते हैं, जो कि ***(n² - n)*** के बराबर है।

* * सबसे लंबा ऑर्डर किया गया उपसमुच्चय * *  &nbsp ग्रेड वस्तुओं के सबसे लंबे ऑर्डर किए गए उपसमुच्चय में वस्तुओं की संख्या है। उच्चतम संभावित ग्रेड प्रदर्शित वस्तुओं की संख्या के समान है। एक उपसमुच्चय में कम से कम दो मदें/मदों होनी चाहिए। उपसमुच्चय को पहली वस्तु से शुरू करने की आवश्यकता नहीं है (लेकिन वे कर सकते हैं) और उन्हें अव्यवहित होने की आवश्यकता नहीं है (लेकिन वे हो सकते हैं)। जहाँ समान लंबाई के कई उपसमुच्चय हैं, उपसमुच्चय में जो मदें/मदों पहले पाई जाती हैं, जब बाएँ से दाएँ खोजती हैं, तो उन्हें सही के रूप में प्रदर्शित किया जाएगा। अन्य वस्तुओं को गलत के रूप में चिह्नित किया जाएगा।

* * सबसे लंबा सन्निहित उपसमुच्चय * *   &nbsp ग्रेड वस्तुओं के सबसे लंबे सन्निहित उपसमुच्चय में वस्तुओं की संख्या है। उच्चतम संभावित ग्रेड प्रदर्शित वस्तुओं की संख्या के समान है। एक उपसमुच्चय में कम से कम दो मदें/मदों होनी चाहिए। उपसमुच्चय को पहली वस्तु से शुरू करने की आवश्यकता नहीं है (लेकिन वे कर सकते हैं) और वे अव्यवहित होने चाहिए। जहाँ समान लंबाई के कई उपसमुच्चय हैं, उपसमुच्चय में जो मदें/मदों पहले पाई जाती हैं, जब बाएँ से दाएँ खोजती हैं, तो उन्हें सही के रूप में प्रदर्शित किया जाएगा। अन्य वस्तुओं को गलत के रूप में चिह्नित किया जाएगा।';
$string['highlightresponse'] = 'प्रतिक्रिअथवा को सही अथवा गलत के रूप में उजागर करें';
$string['horizontal'] = 'क्षैतिज';
$string['incorrectitemsnumber'] = 'गलत आइटमः {$a}';
$string['layouttype'] = 'वस्तुओं का अभिन्यास, नक्शा';
$string['layouttype_help'] = 'चुनें कि वस्तुओं को ऊर्ध्वाधर अथवा क्षैतिज रूप से प्रदर्शित करना है अथवा नहीं।';
$string['longestcontiguoussubset'] = 'सबसे लंबा अव्यवहित उपसमुच्चय';
$string['longestorderedsubset'] = 'सबसे लंबा ऑर्डर किया गया उपसमुच्चय';
$string['moved'] = '{$a->item} स्थानांतरित हो गया। नई स्थिति: {$a->total} में से {$a->position}।';
$string['moveleft'] = 'बाईं ओर जाएँ';
$string['moveright'] = 'दाएँ जाएँ';
$string['noresponsedetails'] = 'क्षमा करें, इस प्रश्न के उत्तर का कोई ब्योरा उपलब्ध नहीं है।';
$string['noscore'] = 'कोई अंक नहीं';
$string['notenoughanswers'] = 'ऑर्डर करने वाले प्रश्नों के उत्तर {$a} से अधिक होने चाहिए।';
$string['notenoughsubsetitems'] = 'एक उपसमुच्चय में कम से कम {$a} मदें/मदों होनी चाहिए।';
$string['numberingstyle'] = 'विकल्पों की संख्या?';
$string['numberingstyle_desc'] = 'चूकना संख्या शैली।';
$string['numberingstyle_help'] = 'इस प्रश्न में खींचने योग्य वस्तुओं के लिए संख्या शैली चुनें।';
$string['numberingstylenone'] = 'कोई संख्या नहीं';
$string['partialitemsnumber'] = 'आंशिक रूप से सही आइटमः {$a}';
$string['pluginname'] = 'ऑर्डर करना';
$string['pluginname_help'] = 'कई वस्तुओं को अव्यवस्थित क्रम में प्रदर्शित किया जाता है। वस्तुओं को सार्थक क्रम में खींचा जा सकता है।';
$string['pluginname_link'] = 'question/type/ordering';
$string['pluginnameadding'] = 'एक ऑर्डर प्रश्न जोड़ें';
$string['pluginnameediting'] = 'एक ऑर्डर प्रश्न को संपादित करना';
$string['pluginnamesummary'] = 'अव्यवस्थित वस्तुओं को सार्थक क्रम में रखें।';
$string['positionx'] = 'स्थिति {$a}';
$string['privacy:preference:gradingtype'] = 'ग्रेडिंग का प्रकार।';
$string['privacy:preference:layouttype'] = 'वस्तुओं का अभिन्यास, नक्शा।';
$string['privacy:preference:numberingstyle'] = 'विकल्पों की संख्या शैली।';
$string['privacy:preference:selectcount'] = 'चयनित गणना।';
$string['privacy:preference:selecttype'] = 'वस्तु चयन, प्रवरण का प्रकार।';
$string['privacy:preference:showgrading'] = 'क्या ग्रेडिंग ब्योरा दिखाना है।';
$string['regradeissuenumitemschanged'] = 'खींचने योग्य वस्तुओं की संख्या बदल गई है।';
$string['relativeallpreviousandnext'] = 'पिछली और अगली सभी वस्तुओं के सापेक्ष';
$string['relativenextexcludelast'] = 'अगली वस्तु के सापेक्ष (अंतिम को छोड़कर)';
$string['relativenextincludelast'] = 'अगली वस्तु के सापेक्ष (अंतिम सहित)';
$string['relativeonepreviousandnext'] = 'पिछली और अगली दोनों वस्तुओं के सापेक्ष';
$string['relativetocorrect'] = 'सही स्थिति के सापेक्ष';
$string['removeeditor'] = 'HTML  संपादक को हटा दें';
$string['removeitem'] = 'खींचने योग्य वस्तु को हटा दें';
$string['scoredetails'] = 'इस प्रतिक्रिया में प्रत्येक वस्तु के लिए अंक यहाँ दिए गए हैंः';
$string['selectall'] = 'सभी वस्तुओं का चयन करें';
$string['selectcontiguous'] = 'वस्तुओं का एक निकटवर्ती उपसमुच्चय चयन करना';
$string['selectcount'] = 'उपसमुच्चय का आकार';
$string['selectcount_help'] = 'प्रश्नोत्तरी में प्रश्न आने पर प्रदर्शित की जाने वाली वस्तुओं की संख्या।';
$string['selectrandom'] = 'वस्तुओं का एक सांयोगिक, अनियमित एका एक किया हुआ उपसमुच्चय चयन करना';
$string['selecttype'] = 'वस्तु चयन, प्रवरण का प्रकार';
$string['selecttype_help'] = 'चुनें कि सभी वस्तुओं को प्रदर्शित करना है अथवा वस्तुओं का एक उपसमुच्चय।';
$string['showgrading'] = 'श्रेणीकरण ब्योरा';
$string['showgrading_help'] = 'जब कोई छात्र इस क्रमबद्ध प्रश्न के उत्तर की समीक्षा करता है तो चुनें कि अंक गणना का ब्योरा दिखाना है अथवा छिपाना है।';
$string['vertical'] = 'ऊर्ध्वाधर';
