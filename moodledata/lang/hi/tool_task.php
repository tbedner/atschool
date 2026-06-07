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
 * Strings for component 'tool_task', language 'hi', version '4.4'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adhoc'] = 'तदर्थ';
$string['adhocempty'] = 'तदर्थ कार्य कतार खाली है';
$string['adhocqueueold'] = 'सबसे पुराना अप्रसंस्कृत कार्य {$a-> age} है, जो {$a-> max} से अधिक है।';
$string['adhocqueuesize'] = 'तदर्थ कार्य कतार में {$a} कार्य होते हैं';
$string['adhoctaskid'] = 'तदर्थ कार्य ID: {$a}';
$string['adhoctaskrun'] = 'तदर्थ कार्य शुरू किया गया';
$string['adhoctasks'] = 'तदर्थ कार्य';
$string['adhoctasksdue'] = 'तदर्थ कार्यों का भुगतान';
$string['adhoctasksfailed'] = 'तदर्थ कार्य विफल रहे';
$string['adhoctasksfuture'] = 'भविष्य के अनऔपचारिक रूप से (बिना किसी योजना के) कार्य';
$string['adhoctasksrunning'] = 'चल रहे तदर्थ कार्य';
$string['asap'] = '<abbr title="जितनी जल्दी हो सके">ASAP</abbr>';
$string['backtoadhoctasks'] = 'अनऔपचारिक रूप से (बिना किसी योजना के) कार्यों पर वापस जाएँ';
$string['backtoscheduledtasks'] = 'निर्धारित कार्यों पर वापस जाएँ';
$string['blocking'] = 'अवरोधक';
$string['cannotfindthepathtothecli'] = 'PHP CLI एक्जीक्यूटेबल का पथ नहीं मिल सका, इसलिए कार्य निष्पादन रोक दिया गया। साइट एडमिनिस्ट्रेशन / सर्वर / सिस्टम पथ में \'PHP CLI का पथ\' सेटिंग सेट करें।';
$string['checkadhocqueue'] = 'डी हॉक टास्क कतार';
$string['checkcronrunning'] = 'क्रोन दौड़ना';
$string['checklongrunningtaskcount'] = 'लंबे समय तक चलने वाले कार्यः {$a}';
$string['checklongrunningtasks'] = 'लंबे समय तक चलने वाले कार्य';
$string['checkmaxfaildelay'] = 'कार्य अधिकतम विलंब विफल';
$string['classname'] = 'वर्ग का नाम';
$string['clearfaildelay_confirm'] = 'क्या आप सुनिश्चित हैं कि आप कार्य \'{$a}\' के लिए विफल विलंब को दूर करना चाहते हैं? विलंब को दूर करने के बाद, कार्य अपने सामान्य कार्यक्रम के अनुसार चलेगा।';
$string['component'] = 'अवयव';
$string['corecomponent'] = 'कोर';
$string['crondisabled'] = 'क्रोन अक्षम है। कोई नया काम शुरू नहीं होगा। सिस्टम तब तक ठीक से काम नहीं करेगा जब तक कि इसे फिर से सक्षम नहीं किया जाता है।';
$string['cronok'] = 'क्रोन अक्सर चल रहा है';
$string['default'] = 'चूक';
$string['defaultx'] = 'चूक: {$a}';
$string['disabled'] = 'विकलांग';
$string['disabled_help'] = 'अक्षम अनुसूचित कार्यों को क्रोन से निष्पादित नहीं किया जाता है, तथापि उन्हें अभी भी CLI उपकरण के माध्यम से हाथ से निष्पादित किया जा सकता है।';
$string['edittaskschedule'] = 'कार्य सारिणी संपादित करें: {$a}';
$string['enablerunnow'] = 'निर्धारित कार्यों के लिए \'अभी चलाएँ\' विकल्प की अनुमति दें';
$string['enablerunnow_desc'] = 'प्रशासकों को एक छत्तीसगढ़ में आदिवासी क्षेत्र कार्य को तुरंत चलाने की अनुमति देता है, न कि इसके छत्तीसगढ़ में आदिवासी क्षेत्र समय पर चलने की प्रतीक्षा करने की। इस सुविधा के लिए सिस्टम पथों में \'पाथ टू PHP CLI (पाथटॉप) सेट करने की आवश्यकता होती है। कार्य वेब सर्वर पर चलता है, इसलिए आप संभावित पालन मुद्दों से बचने के लिए इस सुविधा को अक्षम करना चाह सकते हैं।';
$string['faildelay'] = 'विलंब में विफलता';
$string['failed'] = 'असफल';
$string['fromcomponent'] = 'अवयव से: {$a}';
$string['hostname'] = 'मेजबान नाम';
$string['lastcronstart'] = 'अंतिम क्रोन के चलने के बाद का समयः {$a}';
$string['lastruntime'] = 'अंतिम रन';
$string['lastupdated'] = 'आखिरी बार {$a} को अपडेट किया गया।';
$string['nextruntime'] = 'अगली दौड़';
$string['noclassname'] = 'वर्ग का नाम निर्दिष्ट नहीं है';
$string['notasks'] = 'चलाने के लिए कोई काम नहीं';
$string['payload'] = 'पेलोड';
$string['pid'] = '';
$string['plugindisabled'] = 'प्लगइन अक्षम';
$string['pluginname'] = 'अनुसूचित कार्य विन्यास';
$string['privacy:metadata'] = 'शेड्यूल्ड टास्क कॉन्फ़िगरेशन प्लगइन किसी भी प्रकार का व्यक्तिगत डेटा संग्रहीत नहीं करता है।';
$string['resettasktodefaults'] = 'डिफ़ॉल्ट के लिए कार्य सारिणी को रीसेट करें';
$string['resettasktodefaults_help'] = 'यह किसी भी स्थानीय परिवर्तन को छोड़ देगा और इस कार्य के लिए सारिणी को इसकी मूल सेटिंग्स में वापस कर देगा।';
$string['run_adhoctasks'] = 'अनऔपचारिक रूप से (बिना किसी योजना के) कार्य चलाएँ';
$string['runadhoc'] = 'अब अनऔपचारिक रूप से (बिना किसी योजना के) कार्य चलाएँ?';
$string['runadhoc_confirm'] = 'कार्य वेब सर्वर पर चलेंगे और उन्हें पूरा होने में कुछ समय लग सकता है।';
$string['runadhoctask'] = '\'{$a->task}\' टास्क ID {$a->taskid} चलाएँ';
$string['runadhoctasks'] = 'सभी \'{$a}\' कार्यों को चलाएँ';
$string['runadhoctasksfailed'] = 'असफल \'{$a}\' कार्य चलाएँ';
$string['runagain'] = 'फिर से दौड़ो';
$string['runclassname'] = 'सभी को चलाओ';
$string['runclassnamefailedonly'] = 'रन ऑल फेल';
$string['runningalltasks'] = 'सभी कार्यों को चलाना';
$string['runningfailedtasks'] = 'असफल कार्यों को चलाना';
$string['runningtasks'] = 'अब चल रहे कार्य';
$string['runnow'] = 'अब भागो';
$string['runnow_confirm'] = 'क्या आपको यकीन है कि आप अब इस कार्य \'{$a}\' को चलाना चाहते हैं? यह कार्य वेब सर्वर पर चलेगा और इसे पूरा होने में कुछ समय लग सकता है।';
$string['runpattern'] = 'चलाने का स्वरूप';
$string['scheduled'] = 'अनुसूचित';
$string['scheduledtaskchangesdisabled'] = 'मूडल विन्यास में अनुसूचित कार्यों की सूची में संशोधन को रोक दिया गया है';
$string['scheduledtasks'] = 'नियत कार्य';
$string['showall'] = 'सब कुछ दिखाएँ';
$string['showfailedonly'] = 'शो केवल विफल रहा';
$string['showsummary'] = 'अनऔपचारिक रूप से (बिना किसी योजना के) कार्यों का सारांश दिखाएँ';
$string['slowtask'] = 'कार्य {$a} से अधिक समय तक चला है';
$string['started'] = 'शुरू किया';
$string['taskage'] = 'रन टाइम';
$string['taskdetails'] = '{$a->time} से अधिक समय तक चलने वाले कार्य (अधिकतम {$a->maxtime}): {$a->count}';
$string['taskdisabled'] = 'कार्य अक्षम';
$string['taskfailures'] = '{$a} कार्य (ओं) विफल';
$string['taskid'] = 'टास्क ID';
$string['tasklogs'] = 'कार्य लॉग';
$string['tasknofailures'] = 'कोई कार्य विफल नहीं होते हैं';
$string['taskrunningtime'] = 'कार्य {$a} के लिए चला है';
$string['taskscheduleday'] = 'दिन';
$string['taskscheduleday_help'] = 'कार्य अनुसूची के लिए माह के दिन का फ़ील्ड। यह फ़ील्ड यूनिक्स क्रॉन के समान प्रारूप का उपयोग करता है। कुछ उदाहरण इस प्रकार हैं:

* <strong>*</strong> हर दिन
* <strong>*/2</strong> हर दूसरे दिन
* <strong>1</strong> हर महीने की पहली तारीख
* <strong>1,15</strong> हर महीने की पहली और पंद्रहवीं तारीख';
$string['taskscheduledayofweek'] = 'सप्ताह का दिन';
$string['taskscheduledayofweek_help'] = 'कार्य कार्यक्रम के लिए सप्ताह का दिन क्षेत्र। क्षेत्र यूनिक्स क्रोन के समान प्रारूप का उपयोग करता है। कुछ उदाहरण हैंः * <strong> */strong> हर दिन * <strong> 0 </strong> हर रविवार * <strong> 6 </strong> हर शनिवार * <strong> 1, 5 </strong> हर सोमवार और शुक्रवार';
$string['taskschedulehour'] = 'घंटे';
$string['taskschedulehour_help'] = 'कार्य सारिणी के लिए घंटे का क्षेत्र। क्षेत्र यूनिक्स क्रोन के समान प्रारूप का उपयोग करता है। कुछ उदाहरण हैं: * <strong> * </strong> हर घंटे * <strong> */2 </strong> हर 2 घंटे * <strong> 2-10 </strong> हर घंटे 2 बजे से 10 बजे तक (समावेशी) * <strong> 2,6,9 </strong> 2 बजे, 6 बजे और 9 बजे';
$string['taskscheduleminute'] = 'मिनट';
$string['taskscheduleminute_help'] = 'कार्य अनुसूची के लिए मिनट फ़ील्ड। यह फ़ील्ड यूनिक्स क्रॉन के समान प्रारूप का उपयोग करता है। कुछ उदाहरण इस प्रकार हैं:

* <strong>*</strong> हर मिनट
* <strong>*/5</strong> हर 5 मिनट
* <strong>2-10</strong> घंटे के 2 से 10 मिनट के बीच हर मिनट (दोनों शामिल)
* <strong>2,6,9</strong> घंटे के 2, 6 और 9 मिनट';
$string['taskschedulemonth'] = 'महीना';
$string['taskschedulemonth_help'] = 'कार्य अनुसूची के लिए माह फ़ील्ड। यह फ़ील्ड यूनिक्स क्रॉन के समान प्रारूप का उपयोग करता है। कुछ उदाहरण इस प्रकार हैं:

* <strong>*</strong> हर महीने
* <strong>*/2</strong> हर दूसरे महीने
* <strong>1</strong> हर जनवरी
* <strong>1,5</strong> हर जनवरी और मई';
$string['viewlogs'] = '{$a} के लिए लॉग देखें';
