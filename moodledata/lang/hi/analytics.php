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
 * Strings for component 'analytics', language 'hi', version '4.4'.
 *
 * @package     analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'विश्लेषण योग्य {$a-> analysableid} का उपयोग नहीं किया गया हैः {$a-> errors}';
$string['analysablenotvalidfortarget'] = 'विश्लेषण योग्य {$a-> analysableid} इस लक्ष्य के लिए मान्य नहीं हैः {$a-> result}';
$string['analysisinprogress'] = 'अभी भी पिछले निष्पादन द्वारा विश्लेषण किया जा रहा है';
$string['analytics'] = 'विश्लेषण';
$string['analyticsdisabled'] = 'विश्लेषण अक्षम है। आप इसे "साइट प्रशासन> उन्नत सुविधाओं" में सक्षम कर सकते हैं।';
$string['analyticslogstore'] = 'विश्लेषण के लिए उपयोग किया जाने वाला लॉग स्टोर';
$string['analyticslogstore_help'] = 'लॉग स्टोर जिसका उपयोग विश्लेषिकी API द्वारा उपयोगकर्ताओं की गतिविधि को पढ़ने के लिए किया जाएगा।';
$string['analyticssettings'] = 'विश्लेषण सेटिंग्स';
$string['analyticssiteinfo'] = 'साइट की जानकारी';
$string['calclifetime'] = 'विश्लेषण गणना के लिए रखें';
$string['configlcalclifetime'] = 'यह उस समय की अवधि को निर्दिष्ट करता है जिसे आप गणना डेटा रखना चाहते हैं-यह भविष्यवाणियों को नहीं हटाएगा, लेकिन भविष्यवाणियों को उत्पन्न करने के लिए उपयोग किए जाने वाले डेटा को हटा देगा। यहाँ डिफ़ॉल्ट विकल्प का उपयोग करना सबसे अच्छा है क्योंकि यह आपके डिस्क उपयोग को नियंत्रण में रखता है, हालाँकि यदि आप अन्य उद्देश्यों के लिए गणना तालिकाओं का उपयोग कर रहे हैं तो आप इस मूल्य को बढ़ाना चाह सकते हैं।';
$string['defaultpredictionsprocessor'] = 'डिफ़ॉल्ट भविष्यवाणी प्रोसेसर';
$string['defaultpredictoroption'] = 'डिफ़ॉल्ट प्रोसेसर ({$a})';
$string['defaulttimesplittingmethods'] = 'डिफ़ॉल्ट प्रोसेसर ({$a})';
$string['defaulttimesplittingmethods_help'] = 'विश्लेषण अंतराल परिभाषित करता है कि प्रणाली भविष्यवाणियों की गणना कब करेगी और उन भविष्यवाणियों के लिए गतिविधि लॉग के हिस्से पर विचार किया जाएगा। मॉडल मूल्यांकन प्रक्रिया इन विश्लेषण अंतरालों के माध्यम से तब तक दोहराई जाएगी जब तक कि एक विशिष्ट विश्लेषण अंतराल निर्दिष्ट नहीं किया जाता है।';
$string['disabledmodel'] = 'विकलांग मॉडल';
$string['erroralreadypredict'] = 'File {$a} का उपयोग पहले ही भविष्यवाणियां करने के लिए किया जा चुका है।';
$string['errorcannotreaddataset'] = 'डेटासेट फ़ाइल {$a} को पढ़ा नहीं जा सकता है।';
$string['errorcannotusetimesplitting'] = 'इस मॉडल पर प्रदान किए गए विश्लेषण अंतराल का उपयोग नहीं किया जा सकता है।';
$string['errorcannotwritedataset'] = 'Dataset file {$a} नहीं लिखी जा सकती है।';
$string['errorexportmodelresult'] = 'मशीन लर्निंग मॉडल का निर्यात नहीं किया जा सकता है।';
$string['errorimport'] = 'प्रदान की गई JSON फ़ाइल को आयात करने में त्रुटि।';
$string['errorimportmissingclasses'] = 'निम्नलिखित विश्लेषण घटक इस साइट पर उपलब्ध नहीं हैंः {$a-> missingclasses}।';
$string['errorimportmissingcomponents'] = 'प्रदान किए गए मॉडल में निम्नलिखित प्लगइन्स स्थापित करने की आवश्यकता हैः {$a}। ध्यान दें कि संस्करणों को आवश्यक रूप से आपकी साइट पर स्थापित संस्करणों से मेल नहीं खाना चाहिए। प्लगइन का वही या नया संस्करण स्थापित करना ज्यादातर मामलों में ठीक होना चाहिए।';
$string['errorimportversionmismatches'] = 'निम्नलिखित घटकों का संस्करण इस साइट पर स्थापित संस्करण से अलग हैः {$a}। आप इन मतभेदों को नजरअंदाज करने के लिए \'संस्करण बेमेल को नजरअंदाज करें\' विकल्प का उपयोग कर सकते हैं।';
$string['errorinvalidcontexts'] = 'इस लक्ष्य में कुछ चयनित संदर्भों का उपयोग नहीं किया जा सकता है।';
$string['errorinvalidindicator'] = 'अमान्य {$a} संकेतक';
$string['errorinvalidtarget'] = 'अमान्य {$a} लक्ष्य';
$string['errorinvalidtimesplitting'] = 'अमान्य विश्लेषण अंतराल; कृपया सुनिश्चित करें कि आप पूरी तरह से योग्य वर्ग का नाम जोड़ते हैं।';
$string['errornocontextrestrictions'] = 'चयनित लक्ष्य संदर्भ प्रतिबंधों का समर्थन नहीं करता है';
$string['errornoexportconfig'] = 'मॉडल विन्यास के निर्यात में समस्या थी।';
$string['errornoexportconfigrequirements'] = 'केवल विश्लेषण अंतराल वाले गैर-स्थिर मॉडलों का निर्यात किया जा सकता है।';
$string['errornoindicators'] = 'इस मॉडल में कोई संकेतक नहीं हैं।';
$string['errornopredictresults'] = 'भविष्यवाणी प्रोसेसर से कोई परिणाम नहीं आया। अधिक जानकारी के लिए आउटपुट निर्देशिका की सामग्री की जांच करें।';
$string['errornoroles'] = 'छात्र या शिक्षक की भूमिकाओं को परिभाषित नहीं किया गया है। उन्हें विश्लेषण सेटिंग पृष्ठ में परिभाषित करें।';
$string['errornotarget'] = 'इस मॉडल का कोई लक्ष्य नहीं है।';
$string['errornotimesplittings'] = 'इस मॉडल में विश्लेषण अंतराल नहीं है।';
$string['errorpredictioncontextnotavailable'] = 'यह भविष्यवाणी संदर्भ अब उपलब्ध नहीं है।';
$string['errorpredictionformat'] = 'गलत भविष्यवाणी गणना प्रारूप';
$string['errorpredictionnotfound'] = 'भविष्यवाणी नहीं मिली';
$string['errorpredictionsprocessor'] = 'भविष्यवाणी प्रोसेसर त्रुटिः {$a}';
$string['errorpredictwrongformat'] = 'पूर्वानुमान प्रोसेसर वापसी को डिकोड नहीं किया जा सकता हैः "{$a}"';
$string['errorprocessornotready'] = 'चयनित भविष्यवाणी प्रोसेसर तैयार नहीं हैः {$a}';
$string['errorsamplenotavailable'] = 'अनुमानित नमूना अब उपलब्ध नहीं है।';
$string['errorunexistingmodel'] = 'गैर-मौजूदा मॉडल {$a}';
$string['errorunexistingtimesplitting'] = 'चयनित विश्लेषण अंतराल उपलब्ध नहीं है।';
$string['errorunknownaction'] = 'अज्ञात कार्रवाई';
$string['eventinsightsviewed'] = 'अंतर्दृष्टि देखी गई';
$string['eventpredictionactionstarted'] = 'भविष्यवाणी प्रक्रिया शुरू हुई';
$string['fixedack'] = 'स्वीकार';
$string['incorrectlyflagged'] = 'ग़लत ढंग से चिह्नित किया गया';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['insightinfomessagehtml'] = 'प्रणाली ने आपके लिए एक अंतर्दृष्टि उत्पन्न की।';
$string['insightinfomessageplain'] = 'सिस्टम ने आपके लिए एक अंतर्दृष्टि उत्पन्न कीः {$a}';
$string['insightmessagesubject'] = '"{$a}" के लिए नई अंतर्दृष्टि';
$string['invalidanalysablefortimesplitting'] = 'इसका विश्लेषण {$a} विश्लेषण अंतराल का उपयोग करके नहीं किया जा सकता है।';
$string['invalidtimesplitting'] = 'आईडी {$a} वाले मॉडल को प्रशिक्षण के लिए उपयोग करने से पहले एक विश्लेषण अंतराल की आवश्यकता होती है।';
$string['levelinstitution'] = 'शिक्षा का स्तर';
$string['levelinstitutionisced0'] = 'प्रारंभिक बचपन की शिक्षा (शैक्षिक प्राप्ति के लिए \'प्राथमिक से कम\')';
$string['levelinstitutionisced1'] = 'प्राथमिक शिक्षा';
$string['levelinstitutionisced2'] = 'निम्न माध्यमिक शिक्षा';
$string['levelinstitutionisced3'] = 'उच्च माध्यमिक शिक्षा';
$string['levelinstitutionisced4'] = 'माध्यमिक के बाद की गैर-तृतीयक शिक्षा (इसमें कॉर्पोरेट या सामुदायिक/एनजीओ प्रशिक्षण शामिल हो सकता है)';
$string['levelinstitutionisced5'] = 'लघु-चक्र तृतीयक शिक्षा (इसमें कॉर्पोरेट या सामुदायिक/एनजीओ प्रशिक्षण शामिल हो सकता है)';
$string['levelinstitutionisced6'] = 'स्नातक या समकक्ष स्तर';
$string['levelinstitutionisced7'] = 'मास्टर या समकक्ष स्तर';
$string['levelinstitutionisced8'] = 'डॉक्टरेट या समकक्ष स्तर';
$string['modeinstruction'] = 'निर्देश के तरीके';
$string['modeinstructionblendedhybrid'] = 'मिश्रित या संकर';
$string['modeinstructionfacetoface'] = 'आमने-सामने';
$string['modeinstructionfullyonline'] = 'पूरी तरह से ऑनलाइन';
$string['modeloutputdir'] = 'मॉडल आउटपुट निर्देशिका';
$string['modeloutputdirwithdefaultinfo'] = 'निर्देशिका जहाँ भविष्यवाणी प्रोसेसर सभी मूल्यांकन जानकारी को संग्रहीत करते हैं। डीबगिंग और अनुसंधान के लिए उपयोगी। यदि खाली है, तो {$a} का उपयोग डिफ़ॉल्ट रूप से किया जाएगा।';
$string['modeltimelimit'] = 'प्रति मॉडल विश्लेषण समय सीमा';
$string['modeltimelimitinfo'] = 'यह सेटिंग प्रत्येक मॉडल द्वारा साइट की सामग्री का विश्लेषण करने में बिताए गए समय को सीमित करती है।';
$string['neutral'] = 'तटस्थ';
$string['neverdelete'] = 'गणनाओं को कभी न हटाएँ';
$string['nocourses'] = 'विश्लेषण के लिए कोई पाठ्यक्रम नहीं';
$string['nodata'] = 'विश्लेषण करने के लिए कोई डेटा नहीं';
$string['noevaluationbasedassumptions'] = 'धारणाओं के आधार पर मॉडलों का मूल्यांकन नहीं किया जा सकता है।';
$string['noinsights'] = 'कोई अंतर्दृष्टि नहीं दी गई';
$string['noinsightsmodel'] = 'यह मॉडल अंतर्दृष्टि उत्पन्न नहीं करता है';
$string['nonewdata'] = 'कोई नया डेटा उपलब्ध नहीं है। अगले विश्लेषण अंतराल के बाद मॉडल का विश्लेषण किया जाएगा।';
$string['nonewranges'] = 'अभी तक कोई नई भविष्यवाणियां नहीं हैं। अगले विश्लेषण अंतराल के बाद मॉडल का विश्लेषण किया जाएगा।';
$string['nopredictionsyet'] = 'अभी तक कोई भविष्यवाणी उपलब्ध नहीं है';
$string['noranges'] = 'अभी तक कोई भविष्यवाणी नहीं';
$string['notapplicable'] = 'लागू नहीं';
$string['notrainingbasedassumptions'] = 'धारणाओं पर आधारित मॉडलों को प्रशिक्षण की आवश्यकता नहीं होती है';
$string['notuseful'] = 'उपयोगी नहीं';
$string['novaliddata'] = 'कोई वैध डेटा उपलब्ध नहीं है';
$string['novalidsamples'] = 'कोई वैध नमूने उपलब्ध नहीं हैं';
$string['onlycli'] = 'विश्लेषण प्रक्रियाएँ केवल कमांड लाइन के माध्यम से निष्पादन करती हैं';
$string['onlycliinfo'] = 'मॉडल का मूल्यांकन करने, मशीन लर्निंग एल्गोरिदम को प्रशिक्षित करने या भविष्यवाणियां प्राप्त करने जैसी विश्लेषण प्रक्रियाओं में कुछ समय लग सकता है। वे क्रोन कार्यों के रूप में चलते हैं या कमांड लाइन के माध्यम से मजबूर किए जा सकते हैं। यदि अक्षम है, तो विश्लेषण प्रक्रियाओं को वेब इंटरफेस के माध्यम से मैन्युअल रूप से चलाया जा सकता है।';
$string['percentonline'] = 'प्रतिशत ऑनलाइन';
$string['percentonline_help'] = 'यदि आपका संगठन मिश्रित या संकर पाठ्यक्रम प्रदान करता है, तो छात्र के काम का कितना प्रतिशत ऑनलाइन आयोजित किया जाता है? 0 और 100 के बीच एक संख्या दर्ज करें।';
$string['predictionsprocessor'] = 'पूर्वानुमान प्रोसेसर';
$string['predictionsprocessor_help'] = 'एक भविष्यवाणी प्रोसेसर मशीन-लर्निंग बैकएंड है जो मॉडल के संकेतकों और लक्ष्यों की गणना करके उत्पन्न डेटासेट को संसाधित करता है। प्रत्येक मॉडल एक अलग प्रोसेसर का उपयोग कर सकता है। यहाँ निर्दिष्ट डिफ़ॉल्ट होगा।';
$string['privacy:metadata:analytics:analyticsmodels'] = 'विश्लेषणात्मक मॉडल';
$string['privacy:metadata:analytics:analyticsmodels:usermodified'] = 'मॉडल को संशोधित करने वाला उपयोगकर्ता';
$string['privacy:metadata:analytics:analyticsmodelslog'] = 'विश्लेषण मॉडल के लिए उपयोग किया जाने वाला लॉग';
$string['privacy:metadata:analytics:analyticsmodelslog:usermodified'] = 'उपयोगकर्ता जिसने लॉग को संशोधित किया';
$string['privacy:metadata:analytics:indicatorcalc'] = 'संकेतक गणना';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'संदर्भ';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'गणना का अंतिम समय';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'संकेतक गणक वर्ग';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'नमूना ID';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'नमूने की उत्पत्ति तालिका';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'गणना शुरू होने का समय';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'जब भविष्यवाणी की गई थी';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'गणना किया गया मूल्य';
$string['privacy:metadata:analytics:predictionactions'] = 'भविष्यवाणी क्रियाएँ';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'कार्रवाई का नाम';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'भविष्यवाणी ID';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'जब भविष्यवाणी की कार्रवाई की गई थी';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'जिस उपयोगकर्ता ने कार्रवाई की';
$string['privacy:metadata:analytics:predictions'] = 'भविष्यवाणियाँ';
$string['privacy:metadata:analytics:predictions:calculations'] = 'संकेतक गणना';
$string['privacy:metadata:analytics:predictions:contextid'] = 'संदर्भ';
$string['privacy:metadata:analytics:predictions:modelid'] = 'मॉडल ID';
$string['privacy:metadata:analytics:predictions:prediction'] = 'भविष्यवाणी';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'भविष्यवाणी स्कोर';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'विश्लेषण अंतराल का सूचकांक';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'नमूना ID';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'जब भविष्यवाणी की गई थी';
$string['privacy:metadata:analytics:predictions:timeend'] = 'गणना समय अंत';
$string['privacy:metadata:analytics:predictions:timestart'] = 'गणना का समय शुरू';
$string['processingsitecontents'] = 'प्रसंस्करण स्थल सामग्री';
$string['successfullyanalysed'] = 'सफलतापूर्वक विश्लेषण किया गया';
$string['timesplittingmethod'] = 'विश्लेषण अंतराल';
$string['timesplittingmethod_help'] = 'विश्लेषण अंतराल परिभाषित करता है कि प्रणाली भविष्यवाणियों की गणना कब करेगी और उन भविष्यवाणियों के लिए गतिविधि लॉग के हिस्से पर विचार किया जाएगा। उदाहरण के लिए, पाठ्यक्रम की अवधि को भागों में विभाजित किया जा सकता है, जिसमें प्रत्येक भाग के अंत में एक भविष्यवाणी उत्पन्न होती है।';
$string['timesplittingmethod_link'] = 'Time_splitting_methods';
$string['typeinstitution'] = 'संस्थान का प्रकार';
$string['typeinstitutionacademic'] = 'अकादमिक';
$string['typeinstitutionngo'] = 'गैर-सरकारी संगठन (NGO)';
$string['typeinstitutiontraining'] = 'निगमित प्रशिक्षण';
$string['useful'] = 'उपयोगी';
$string['viewdetails'] = 'विवरण देखें';
$string['viewinsight'] = 'अंतर्दृष्टि देखें';
$string['viewinsightdetails'] = 'अंतर्दृष्टि विवरण देखें';
$string['viewprediction'] = 'भविष्यवाणी का विवरण देखें';
$string['washelpful'] = 'क्या यह मददगार था?';
