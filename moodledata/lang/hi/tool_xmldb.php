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
 * Strings for component 'tool_xmldb', language 'hi', version '4.4'.
 *
 * @package     tool_xmldb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = 'Actual';
$string['addpersistent'] = 'अनिवार्य निरंतर क्षेत्र जोड़ें';
$string['aftertable'] = 'मेज के बादः';
$string['back'] = 'वापस';
$string['backtomainview'] = 'मुख्य पर वापस जाएँ';
$string['cannotuseidfield'] = '"id" क्षेत्र को सम्मिलित नहीं कर सकते। यह एक स्वायत्त स्तंभ है';
$string['change'] = 'बदलाव';
$string['charincorrectlength'] = 'चार क्षेत्र के लिए गलत लंबाई';
$string['check_bigints'] = 'गलत DB  पूर्णांक खोजें';
$string['check_defaults'] = 'असंगत चूकना मानों की तलाश करें';
$string['check_foreign_keys'] = 'बाह्य प्रमुख उल्लंघनों की तलाश करें';
$string['check_indexes'] = 'लापता DB सूचकांकों की तलाश करें';
$string['check_oracle_semantics'] = 'गलत लंबाई के शब्दार्थ की तलाश करें';
$string['checkbigints'] = 'पूर्णांकों की जाँच करें';
$string['checkdefaults'] = 'डिफ़ॉल्ट की जाँच करें';
$string['checkforeignkeys'] = 'बाह्य कुंजी की जाँच करें';
$string['checkindexes'] = 'सूचकांकों की जाँच करें';
$string['checkoraclesemantics'] = 'शब्दार्थ की जाँच करें';
$string['completelogbelow'] = '(नीचे खोज का पूरा लॉग देखें)';
$string['confirmcheckbigints'] = 'यह कार्यक्षमता आपके मूडल सर्वर में <a href="https://tracker.moodle.org/browse/MDL-11038">संभावित गलत पूर्णांक फ़ील्ड</a> की खोज करेगी, और आपके डेटाबेस में सभी पूर्णांकों को ठीक से परिभाषित करने के लिए आवश्यक SQL कथनों को स्वचालित रूप से उत्पन्न करेगी (लेकिन निष्पादित नहीं करेगी!)।

एक बार जनरेट हो जाने पर, आप इन स्टेटमेंट्स को कॉपी कर सकते हैं और अपने पसंदीदा SQL इंटरफ़ेस का उपयोग करके इन्हें सुरक्षित रूप से निष्पादित कर सकते हैं (ऐसा करने से पहले अपने डेटा का बैकअप लेना न भूलें)।

गलत पूर्णांकों की खोज करने से पहले, Moodle के नवीनतम संस्करण का उपयोग करना अत्यधिक अनुशंसित है।

यह फ़ंक्शन डेटाबेस पर कोई कार्रवाई नहीं करता है (केवल उससे पढ़ता है), इसलिए इसे किसी भी समय सुरक्षित रूप से निष्पादित किया जा सकता है।';
$string['confirmcheckdefaults'] = 'यह फ़ंक्शन आपके मूडल सर्वर में असंगत डिफ़ॉल्ट मानों की खोज करेगा और सभी डिफ़ॉल्ट मानों को सही ढंग से परिभाषित करने के लिए आवश्यक SQL स्टेटमेंट उत्पन्न करेगा (लेकिन उन्हें निष्पादित नहीं करेगा!)।

एक बार स्टेटमेंट उत्पन्न हो जाने पर, आप उन्हें कॉपी कर सकते हैं और अपने पसंदीदा SQL इंटरफ़ेस का उपयोग करके उन्हें सुरक्षित रूप से निष्पादित कर सकते हैं (ऐसा करने से पहले अपने डेटा का बैकअप लेना न भूलें)।

असंगत डिफ़ॉल्ट मानों की खोज करने से पहले, मूडल के नवीनतम संस्करण का उपयोग करना अत्यधिक अनुशंसित है।

यह फ़ंक्शन डेटाबेस पर कोई कार्रवाई नहीं करता है (केवल उससे डेटा पढ़ता है), इसलिए इसे किसी भी समय सुरक्षित रूप से निष्पादित किया जा सकता है।';
$string['confirmcheckforeignkeys'] = 'यह फ़ंक्शन install.xml फ़ाइल में परिभाषित फ़ॉरेन कीज़ के संभावित उल्लंघनों की खोज करेगा। (Moodle वर्तमान में डेटाबेस में वास्तविक फ़ॉरेन की कंस्ट्रेंट उत्पन्न नहीं करता है, इसलिए अमान्य डेटा मौजूद हो सकता है।)

फ़ॉरेन कीज़ के संभावित उल्लंघनों की खोज करने से पहले Moodle के नवीनतम संस्करण का उपयोग करना अत्यधिक अनुशंसित है।

यह फ़ंक्शन डेटाबेस पर कोई कार्रवाई नहीं करता है (केवल उससे डेटा पढ़ता है), इसलिए इसे किसी भी समय सुरक्षित रूप से चलाया जा सकता है।';
$string['confirmcheckindexes'] = 'यह फ़ंक्शन आपके मूडल सर्वर में संभावित गुम इंडेक्स की खोज करेगा और आवश्यक SQL स्टेटमेंट स्वचालित रूप से उत्पन्न करेगा (लेकिन उन्हें निष्पादित नहीं करेगा!) ताकि सब कुछ अपडेट रहे।

एक बार स्टेटमेंट उत्पन्न हो जाने पर, आप उन्हें कॉपी कर सकते हैं और अपने पसंदीदा SQL इंटरफ़ेस का उपयोग करके उन्हें सुरक्षित रूप से निष्पादित कर सकते हैं (ऐसा करने से पहले अपने डेटा का बैकअप लेना न भूलें)।

गुम इंडेक्स की खोज करने से पहले, मूडल के नवीनतम संस्करण का उपयोग करना अत्यधिक अनुशंसित है।

यह फ़ंक्शन डेटाबेस पर कोई कार्रवाई नहीं करता है (केवल उससे डेटा पढ़ता है), इसलिए इसे किसी भी समय सुरक्षित रूप से निष्पादित किया जा सकता है।';
$string['confirmcheckoraclesemantics'] = 'यह कार्यक्षमता आपके मूडल सर्वर में <a href="https://tracker.moodle.org/browse/MDL-29322">BYTE सिमेंटिक्स का उपयोग करके Oracle varchar2 कॉलम</a> की खोज करेगी, और सभी कॉलम को CHAR सिमेंटिक्स का उपयोग करने के लिए परिवर्तित करने हेतु आवश्यक SQL स्टेटमेंट स्वचालित रूप से उत्पन्न करेगी (लेकिन निष्पादित नहीं करेगी!) (यह क्रॉस-डेटाबेस संगतता और सामग्री की अधिकतम लंबाई बढ़ाने के लिए बेहतर है)।

एक बार जनरेट हो जाने पर, आप इन स्टेटमेंट्स को कॉपी कर सकते हैं और अपने पसंदीदा SQL इंटरफ़ेस के साथ सुरक्षित रूप से निष्पादित कर सकते हैं (ऐसा करने से पहले अपने डेटा का बैकअप लेना न भूलें)।

बाइट सिमेंटिक्स की खोज करने से पहले, Moodle के नवीनतम संस्करण का उपयोग करना अत्यधिक अनुशंसित है।

यह फ़ंक्शन डेटाबेस पर कोई कार्रवाई नहीं करता है (केवल उससे पढ़ता है), इसलिए इसे किसी भी समय सुरक्षित रूप से निष्पादित किया जा सकता है।';
$string['confirmdeletefield'] = 'क्या आप पूरी तरह से निश्चित हैं कि आप क्षेत्र को हटाना चाहते हैंः';
$string['confirmdeleteindex'] = 'क्या आप पूरी तरह से निश्चित हैं कि आप अनुक्रमणिका को हटाना चाहते हैं:';
$string['confirmdeletekey'] = 'क्या आप पूरी तरह से निश्चित हैं कि आप कुंजी को हटाना चाहते हैंः';
$string['confirmdeletetable'] = 'क्या आप पूरी तरह से निश्चित हैं कि आप तालिका को हटाना चाहते हैंः';
$string['confirmdeletexmlfile'] = 'क्या आप पूरी तरह से निश्चित हैं कि आप दाखिल करना को हटाना चाहते हैं:';
$string['confirmrevertchanges'] = 'क्या आप पूरी तरह से निश्चित हैं कि आप किए गए परिवर्तनों को वापस करना चाहते हैंः';
$string['create'] = 'बनाएँ';
$string['createtable'] = 'एक मेज बनाएँः';
$string['defaultincorrect'] = 'गलत चूकना';
$string['delete'] = 'निकाल देना';
$string['delete_field'] = 'क्षेत्र को निकाल देना दें';
$string['delete_index'] = 'अनुक्रमणिका निकाल देना';
$string['delete_key'] = 'कुंजी निकाल देना';
$string['delete_table'] = 'तालिका निकाल देना';
$string['delete_xml_file'] = 'XML  दाखिल करना निकाल देना';
$string['doc'] = 'डॉक्';
$string['docindex'] = 'प्रलेखन अनुक्रमणिका:';
$string['documentationintro'] = 'यह प्रलेखन स्वचालित रूप से XMLDB  डेटाबेस परिभाषा से उत्पन्न होता है। यह केवल अंग्रेजी में उपलब्ध है।';
$string['down'] = 'नीचे';
$string['duplicate'] = 'डुप्लिकेट';
$string['duplicatefieldname'] = 'उस नाम का एक और क्षेत्र मौजूद है';
$string['duplicatefieldsused'] = 'उपयोग किए जाने वाले डुप्लिकेट क्षेत्र';
$string['duplicateindexname'] = 'डुप्लिकेट अनुक्रमणिका नाम';
$string['duplicatekeyname'] = 'उस नाम के साथ एक और कुंजी मौजूद है';
$string['duplicatetablename'] = 'उस नाम की एक और तालिका मौजूद है';
$string['edit'] = 'संपादित करें';
$string['edit_field'] = 'क्षेत्र संपादित करें';
$string['edit_field_save'] = 'खेत बचाएँ';
$string['edit_index'] = 'अनुक्रमणिका संपादित करें';
$string['edit_index_save'] = 'अनुक्रमणिका बचाएँ';
$string['edit_key'] = 'संपादन कुंजी';
$string['edit_key_save'] = 'कुंजी सहेजें';
$string['edit_table'] = 'टेबल संपादित करें';
$string['edit_table_save'] = 'सेव टेबल';
$string['edit_xml_file'] = 'XML दाखिल करना संपादित करें';
$string['enumvaluesincorrect'] = 'एनम क्षेत्र के लिए गलत मान';
$string['expected'] = 'अपेक्षित';
$string['extensionrequired'] = 'क्षमा करें-इस क्रिया के लिए PHP विस्तार \'{$a}\' की अपेक्षितता होती है। यदि आप इस सुविधा का उपयोग करना चाहते हैं तो कृपया विस्तार स्थापित करें।';
$string['extraindexesfound'] = 'अतिरिक्त सूचकांक पाए गए';
$string['field'] = 'क्षेत्र';
$string['fieldnameempty'] = 'क्षेत्र का नाम खाली है';
$string['fields'] = 'क्षेत्र';
$string['fieldsnotintable'] = 'क्षेत्र मेज पर मौजूद नहीं है';
$string['fieldsusedinindex'] = 'इस क्षेत्र का उपयोग अनुक्रमणिका के रूप में किया जाता है';
$string['fieldsusedinkey'] = 'इस क्षेत्र का उपयोग कुंजी के रूप में किया जाता है।';
$string['filemodifiedoutfromeditor'] = 'चेतावनी: XMLDB  संपादक का उपयोग करते समय स्थानीय रूप से संशोधित दाखिल करना। बचत स्थानीय परिवर्तनों को अधिलेखित करेगी।';
$string['filenotwriteable'] = 'दाखिल करना लिखने योग्य नहीं है';
$string['fkunknownfield'] = 'टेबल {$a->tablename} पर विदेशी कुंजी {$a->keyname} संदर्भित टेबल {$a->reftable} में मौजूद न होने वाले फ़ील्ड {$a->reffield} की ओर इंगित करती है।';
$string['fkunknowntable'] = 'टेबल {$a->tablename} पर विदेशी कुंजी {$a->keyname} एक गैर-मौजूद टेबल {$a->reftable} की ओर इंगित करती है।';
$string['fkviolationdetails'] = 'टेबल {$a->tablename} पर विदेशी कुंजी {$a->keyname} का उल्लंघन {$a->numrows} पंक्तियों में से {$a->numviolations} पंक्तियों द्वारा किया गया है।';
$string['float2numbernote'] = 'नोटः हालाँकि "फ्लोट" क्षेत्र xmldb द्वारा 100% समर्थित हैं, इसके बजाय "संख्या" क्षेत्रों में स्थानांतरित करने की सिफारिश की जाती है।';
$string['floatincorrectdecimals'] = 'फ्लोट फील्ड के लिए दशमलव की गलत संख्या';
$string['floatincorrectlength'] = 'फ्लोट फील्ड के लिए गलत लंबाई';
$string['generate_all_documentation'] = 'सभी दस्तावेज';
$string['generate_documentation'] = 'प्रलेखन';
$string['gotolastused'] = 'अंतिम प्रयुक्त दाखिल करना पर जाएँ';
$string['incorrectfieldname'] = 'गलत नाम';
$string['incorrectindexname'] = 'गलत अनुक्रमणिका नाम';
$string['incorrectkeyname'] = 'गलत मुख्य नाम';
$string['incorrecttablename'] = 'गलत तालिका नाम';
$string['index'] = 'अनुक्रमणिका';
$string['indexes'] = 'सूचकांक';
$string['indexnameempty'] = 'अनुक्रमणिका नाम खाली है';
$string['integerincorrectlength'] = 'पूर्णांक क्षेत्र के लिए गलत लंबाई';
$string['key'] = 'कुंजी';
$string['keynameempty'] = 'मुख्य नाम खाली नहीं हो सकता है';
$string['keys'] = 'कुंजियाँ';
$string['listreservedwords'] = 'आरक्षित शब्दों की सूची<br />(रखने के लिए प्रयुक्त<a href="https://docs.moodle.org/en/XMLDB_reserved_words"target="_blank">XMLDBआरक्षित शब्द</a> अपडेट किया गया)';
$string['load'] = 'लोड करें';
$string['main_view'] = 'मुख्य दृश्य';
$string['masterprimaryuniqueordernomatch'] = 'आपकी बाह्य कुंजी में क्षेत्रों को उसी क्रम में सूचीबद्ध किया जाना चाहिए जैसे वे संदर्भ तालिका पर अद्वितीय कुंजी में सूचीबद्ध हैं।';
$string['missing'] = 'लापता';
$string['missingindexes'] = 'लापता सूचकांक पाए गए';
$string['mustselectonefield'] = 'क्षेत्र से संबंधित कार्यों को देखने के लिए आपको एक क्षेत्र का चयन करना होगा!';
$string['mustselectoneindex'] = 'अनुक्रमणिका से संबंधित कार्यों को देखने के लिए आपको एक अनुक्रमणिका का चयन करना होगा!';
$string['mustselectonekey'] = 'कुंजी से संबंधित कार्यों को देखने के लिए आपको एक कुंजी का चयन करना होगा!';
$string['new_table_from_mysql'] = 'MySQL से नई तालिका';
$string['newfield'] = 'नया क्षेत्र';
$string['newindex'] = 'नया अनुक्रमणिका';
$string['newkey'] = 'नई कुंजी';
$string['newtable'] = 'नई मेज';
$string['newtablefrommysql'] = 'MySQL से नई तालिका';
$string['nofieldsspecified'] = 'कोई क्षेत्र निर्दिष्ट नहीं हैं';
$string['nomasterprimaryuniquefound'] = 'कॉलम (ओं) कि आपके बाह्य प्रमुख उल्लेखों को उल्लेख तालिका में एक प्राथमिक अथवा अद्वितीय कुंजी में शामिल किअथवा जाना चाहिए। ध्अथवान दें कि कॉलम एक अद्वितीय अनुक्रमणिका में होना पर्अथवाप्त अच्छा नहीं है।';
$string['nomissingorextraindexesfound'] = 'कोई लापता अथवा अतिरिक्त सूचकांक नहीं पाअथवा गअथवा है, इसलिए आगे कोई कार्रवाई की अपेक्षितता नहीं है।';
$string['noreffieldsspecified'] = 'कोई निर्देश क्षेत्र निर्दिष्ट नहीं हैं';
$string['noreftablespecified'] = 'निर्दिष्ट निर्देश तालिका नहीं मिली';
$string['noviolatedforeignkeysfound'] = 'कोई उल्लंघन की गई बाह्य कुंजी नहीं मिली';
$string['nowrongdefaultsfound'] = 'कोई असंगत चूकना मान नहीं पाए गए हैं, आपके DB  को आगे की कार्रवाई की आवश्यकता नहीं है।';
$string['nowrongintsfound'] = 'कोई गलत पूर्णांक नहीं पाया गया है, आपके DB  को आगे के कार्यों की आवश्यकता नहीं है।';
$string['nowrongoraclesemanticsfound'] = 'बाइट शब्दार्थ का उपयोग करने वाले कोई ओरेकल कॉलम नहीं पाए गए हैं, आपके DB को आगे के कार्यों की आवश्यकता नहीं है।';
$string['numberincorrectdecimals'] = 'संख्या क्षेत्र के लिए दशमलव की गलत संख्या';
$string['numberincorrectlength'] = 'संख्या क्षेत्र के लिए गलत लंबाई';
$string['numberincorrectwholepart'] = 'संख्या क्षेत्र के लिए बहुत बड़ा पूर्ण संख्या भाग';
$string['pendingchanges'] = 'दृष्टव्‍य: आपने इस दाखिल करना में बदलाव किए हैं। इन्हें किसी भी समय सहेजा जा सकता है।';
$string['pendingchangescannotbesaved'] = 'इस दाखिल करना में बदलाव हैं लेकिन उन्हें सहेजा नहीं जा सकता है! कृपया सत्यापित करना कि इसके भीतर निर्देशिका और "install.xml" दोनों में वेब सर्वर के लिए लिखने की अनुमति है।';
$string['pendingchangescannotbesavedreload'] = 'इस दाखिल करना में बदलाव हैं लेकिन उन्हें सहेजा नहीं जा सकता है! कृपया सत्यापित करना कि इसके भीतर निर्देशिका और "install.xml" दोनों में वेब सर्वर के लिए लिखने की अनुमति है। फिर इस पृष्ठ को फिर से लोड करें और आपको उन परिवर्तनों को सहेजने में सक्षम होना चाहिए।';
$string['persistentfieldscomplete'] = 'निम्नलिखित क्षेत्रों को जोड़ा गया हैः';
$string['persistentfieldsconfirm'] = 'क्या आप निम्नलिखित क्षेत्रों को जोड़ना चाहते हैंः';
$string['persistentfieldsexist'] = 'निम्नलिखित क्षेत्र पहले से मौजूद हैंः';
$string['pluginname'] = 'XMLDB संपादक';
$string['primarykeyonlyallownotnullfields'] = 'प्राथमिक कुंजी शून्य नहीं हो सकती है';
$string['privacy:metadata'] = 'XMLDB  संपादक प्लगइन कोई व्यक्तिगत डेटा संग्रहीत नहीं करता है।';
$string['reconcile_files'] = 'सुलह की आवश्यकता वाली XMLDB  फ़ाइलों की खोज करें';
$string['reconcile_files_intro'] = 'यह कार्यक्षमता सभी XMLDB  फ़ाइलों की सामग्री को यह सत्यापित करना के लिए प्रतीत होती है कि वे XMLDB  संपादक से उन्हें उत्पन्न करने के परिणामों से मेल खाते हैं। सुलह (पुन: उत्पन्न) करने के लिए आवश्यक फ़ाइलों की एक सूची प्रदर्शित की जाएगी और उन्हें निश्चित करना के लिए XMLDB  संपादक का उपयोग किया जा सकता है।';
$string['reconcile_files_no'] = 'सभी फाइलें ठीक हैं। सुलह की आवश्यकता नहीं है।';
$string['reconcile_files_yes'] = 'सुलह करने के लिए फाइलें मिलींः';
$string['reconcilefiles'] = 'XMLDB  फ़ाइलों का पुनर्मिलन करें';
$string['reserved'] = 'आरक्षित';
$string['reservedwords'] = 'आरक्षित शब्द';
$string['revert'] = 'प्रतिवर्तित होना';
$string['revert_changes'] = 'परिवर्तनों को उलट दें';
$string['save'] = 'बचाएँ';
$string['searchresults'] = 'खोज परिणाम';
$string['selectaction'] = 'कार्रवाई चयन करना:';
$string['selectdb'] = 'डेटाबेस चयन करना:';
$string['selectfieldkeyindex'] = 'क्षेत्र/कुंजी/सूचकांक चयन करना:';
$string['selectonecommand'] = 'PHP कोड देखने के लिए कृपया सूची से एक क्रिया का चयन करें';
$string['selectonefieldkeyindex'] = 'PHP  कोड देखने के लिए कृपया सूची से एक क्षेत्र/कुंजी/सूचकांक का चयन करें';
$string['selecttable'] = 'तालिका चयन करना:';
$string['table'] = 'तालिका';
$string['tablenameempty'] = 'तालिका का नाम खाली नहीं हो सकता है';
$string['tables'] = 'तालिकाएँ';
$string['unknownfield'] = 'एक अज्ञात क्षेत्र को संदर्भित करता है';
$string['unknowntable'] = 'एक अज्ञात तालिका को संदर्भित करता है';
$string['unload'] = 'उतारें';
$string['up'] = 'ऊपर';
$string['view'] = 'दृश्य';
$string['view_reserved_words'] = 'आरक्षित शब्दों को देखें';
$string['view_structure_php'] = 'संरचना PHP देखें';
$string['view_structure_sql'] = 'संरचना SQL देखें';
$string['view_table_php'] = 'टेबल PHP देखें';
$string['view_table_sql'] = 'टेबल SQL देखें';
$string['viewedited'] = 'संपादित दृश्य';
$string['vieworiginal'] = 'मूल देखें';
$string['viewphpcode'] = 'PHP कोड देखें';
$string['viewsqlcode'] = 'SQL कोड देखें';
$string['violatedforeignkeys'] = 'उल्लंघन की गई बाह्य कुंजी';
$string['violatedforeignkeysfound'] = 'उल्लंघन की गई बाह्य चाबियाँ पाई गईं';
$string['violations'] = 'उल्लंघन';
$string['wrong'] = 'गलत';
$string['wrongdefaults'] = 'गलत चूक पाए गए';
$string['wrongints'] = 'गलत पूर्णांक पाए गए';
$string['wronglengthforenum'] = 'एनम क्षेत्र के लिए गलत लंबाई';
$string['wrongnumberofreffields'] = 'निर्देश क्षेत्रों की गलत संख्या';
$string['wrongoraclesemantics'] = 'गलत ओरेकल बाइट शब्दार्थ पाया गया';
$string['wrongreservedwords'] = 'वर्तमान में उपयोग किए जाने वाले आरक्षित शब्द (ध्यान दें कि यदि $cfg-> उपसर्ग का उपयोग किया जाता है तो तालिका के नाम महत्त्वपूर्ण नहीं हैं)';
$string['yesextraindexesfound'] = 'निम्नलिखित अतिरिक्त सूचकांक पाए गए।';
$string['yesmissingindexesfound'] = '<p> आपके DB में कुछ लापता सूचकांक पाए गए हैं। यहाँ उनके ब्योरा और उन सभी को बनाने के लिए आपके पसंदीदा SQL इंटरफेस के साथ निष्पादन करना किए जाने वाले आवश्यक SQL ब्योरा दिए गए हैं। पहले अपने डेटा का बैकअप लेना याद रखें! </p> <p> ऐसा करने के बाद, यह जांचने के लिए कि कोई और लापता सूचकांक नहीं पाए गए हैं, इस उपयोगिता को फिर से निष्पादन करना करने की अत्यधिक अनुशंसा की जाती है। </p>';
$string['yeswrongdefaultsfound'] = '<p> आपके DB में कुछ असंगत चूक पाए गए हैं। यहाँ उनके ब्योरा और उन सभी को निश्चित करना के लिए आपके पसंदीदा SQL  इंटरफेस के साथ निष्पादन करना किए जाने वाले आवश्यक SQL  ब्योरा दिए गए हैं। पहले अपने डेटा का बैकअप लेना याद रखें! </p> <p> ऐसा करने के बाद, यह जांचने के लिए कि कोई और असंगत चूक नहीं पाई गई है, इस उपयोगिता को फिर से निष्पादन करना करने की अत्यधिक अनुशंसा की जाती है। </p>';
$string['yeswrongintsfound'] = '<p> आपके DB में कुछ गलत पूर्णांक पाए गए हैं। यहाँ उनके ब्योरा और उन्हें निश्चित करना के लिए आपके पसंदीदा SQL  इंटरफेस के साथ निष्पादन करना किए जाने वाले आवश्यकSQL  ब्योरा दिए गए हैं। पहले अपने डेटा का बैकअप लेना याद रखें! </p> <p> उन्हें निश्चित करना के बाद, यह जांचने के लिए कि कोई और गलत पूर्णांक नहीं पाए गए हैं, इस उपयोगिता को फिर से निष्पादन करना करने की अत्यधिक अनुशंसा की जाती है। </p>';
$string['yeswrongoraclesemanticsfound'] = 'आपके डेटाबेस में कुछ ओरेकल कॉलम बाइट सिमेंटिक्स का उपयोग कर रहे हैं। यहाँ उनके विवरण और उन्हें परिवर्तित करने के लिए आवश्यक SQL स्टेटमेंट दिए गए हैं, जिन्हें आपको अपने पसंदीदा SQL इंटरफ़ेस के साथ चलाना होगा। कृपया पहले अपने डेटा का बैकअप अवश्य लें!
<p>इसके बाद, यह सुनिश्चित करने के लिए कि कोई और गलत सिमेंटिक्स न पाए जाएं, इस यूटिलिटी को दोबारा चलाने की पुरजोर सलाह दी जाती है।</p>';
