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
 * Strings for component 'childcourse', language 'hi', version '4.4'.
 *
 * @package     childcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoenrol'] = 'पहुंच पर स्वतः नामांकन करें';
$string['autoenrol_help'] = 'यदि सक्षम है, प्लगइन इस गतिविधि के माध्यम से खोलने पर उपयोगकर्ता को स्वचालित रूप से चाइल्ड कोर्स में नामांकित कर देगा। नामांकन एक समर्पित मैनुअल नामांकन उदाहरण का उपयोग करके बनाए जाते हैं ताकि ट्रैक किया जा सके और बाद में हटाने की नीति के अनुसार सुरक्षित रूप से बदला जा सके। यदि अक्षम है, प्लगइन स्वचालित रूप से उपयोगकर्ताओं का नामांकन करने का प्रयास नहीं करेगा।';
$string['childcourse'] = 'चाइल्ड कोर्स';
$string['childcourse:addinstance'] = 'नई चाइल्ड कोर्स गतिविधि जोड़ें';
$string['childcourse:manage'] = 'चाइल्ड कोर्स सेटिंग्स का प्रबंधन करें';
$string['childcourse:sync'] = 'चाइल्ड कोर्स ग्रेड और पूर्णता सिंक करें';
$string['childcourse:view'] = 'चाइल्ड कोर्स गतिविधि देखें';
$string['childcourse_help'] = 'उस पाठ्यक्रम का चयन करें जो इस गतिविधि से लिंक किया जाएगा। यह चयन सभी नियम-विशिष्ट सेटिंग्स (समूह, पूर्णता नियम, गतिविधि चयनकर्ता, ग्रेड सिंक) को नियंत्रित करता है। गतिविधि सहेजने के बाद, चाइल्ड कोर्स अपरिवर्तनीय हो जाता है ताकि मैपिंग और सिंक इतिहास संगत रहे।';
$string['childcoursenotset'] = 'चाइल्ड कोर्स सेट नहीं किया गया है।';
$string['completionmissing'] = 'चाइल्ड कोर्स पूर्णता सक्षम नहीं है।';
$string['completionrule'] = 'चाइल्ड कोर्स पर आधारित पूर्णता नियम';
$string['completionrule_allactivities'] = 'ट्रैक की गई सभी गतिविधियाँ 100% पूर्ण होने पर पूर्ण करें';
$string['completionrule_coursecompleted'] = 'जब चाइल्ड कोर्स पूर्ण हो जाए तब पूर्ण करें';
$string['completionrule_help'] = 'यह निर्धारित करता है कि यह गतिविधि चाइल्ड कोर्स में उपयोगकर्ता की प्रगति के आधार पर स्वचालित रूप से पूर्ण के रूप में कैसे चिह्नित की जाएगी.

- **कुछ न करें:** इस गतिविधि की पूर्णता चाइल्ड कोर्स की पूर्णता से कोई संबंध नहीं है।
- **जब चाइल्ड कोर्स पूरा हो जाए:** चाइल्ड कोर्स के पूरा होने पर यह गतिविधि भी पूर्ण हो जाएगी।
- **जब ट्रैक की गई गतिविधियों की 100% पूर्णता हो:** चाइल्ड कोर्स में सभी ऐसी गतिविधियाँ जिनमें पूर्णता ट्रैकिंग सक्षम है, उन्हें पूरा किया जाना चाहिए ताकि इस गतिविधि को भी पूर्ण माना जाए।';
$string['completionrule_none'] = 'कुछ न करें';
$string['enrolinstancename'] = 'चाइल्ड कोर्स लिंक #{$a}';
$string['error_manualenrolnotavailable'] = 'The Manual enrolment plugin is not available.';
$string['grade_approval'] = 'ग्रेड भेजें स्रोत से';
$string['grade_approval_no'] = 'ग्रेड न भेजें';
$string['grade_approval_yes'] = 'चाइल्ड कोर्स से ग्रेड का उपयोग करें';
$string['gradebookmissing'] = 'चाइल्ड कोर्स ग्रेडबुक कॉन्फ़िगر नहीं है (कोर्स टोटल गायब है)।';
$string['hideinmycourses'] = 'मेरे पाठ्यक्रमों में चाइल्ड कोर्स छिपाएं';
$string['hideinmycourses_help'] = 'यदि सक्षम है, तो इस गतिविधि द्वारा नामांकित उपयोगकर्ताओं के लिए My courses मेन्यू में चाइल्ड कोर्स छुपा रहेगा। इससे इस पाठ्यक्रम के माध्यम से नेविगेशन को मजबूत बनाने में मदद मिलती है। यह सेटिंग केवल उन उपयोगकर्ताओं को प्रभावित करती है जो इस प्लगइन के द्वारा नामांकित हैं (प्लगइन द्वारा ट्रैक किया गया)।';
$string['inheritgroups'] = 'पैरेंट कोर्स से समूह विरासत में लें';
$string['inheritgroups_help'] = 'यदि सक्षम है, प्लगइन पैरेंट कोर्स से चाइल्ड कोर्स तक उपयोगकर्ता के समूह सदस्यताएँ दोहराने की कोशिश करेगा, समूह नामों के अनुसार मिलान करके। यदि चाइल्ड कोर्स में किसी समूह नाम का अस्तित्व नहीं है, तो उसे बनाया जा सकता है। यह ऑटो-नामांकन के दौरान लागू होता है। यह लगातार सिंक नहीं है जब तक कि आप बाद में एक समर्पित री-सिंक रूटीन लागू नहीं करते।';
$string['keeprole'] = 'Keep papel (estudante/teacher)';
$string['keeprole_help'] = 'यदि सक्षम है, प्लगइन एक सरल papel समानता बनाए रहने की कोशिश करेगा: पैरेंट कोर्स में शिक्षक-स्तर की क्षमताओं वाले उपयोगकर्ता को शिक्षक (editingteacher/teacher जब उपलब्ध हों) के रूप में नामांकित किया जाएगा; अन्यथा, estudante के रूप में। यह कस्टम भूमिकाओं या जटिल भूमिका असाइनमेंट की कॉपी नहीं करता।';
$string['label_childcourse'] = 'Child course';
$string['label_lastsynccompletion'] = 'Last completion sync';
$string['label_lastsyncgrade'] = 'Last grade sync';
$string['lastsync'] = 'Last sync';
$string['lockedcoursewarning'] = 'The child course cannot be changed after saving.';
$string['manage_header_actions'] = 'Actions';
$string['manage_header_name'] = 'Name';
$string['missingcourse'] = 'Missing course';
$string['modulename'] = 'Child course';
$string['modulenameplural'] = 'Child courses';
$string['never'] = 'कभी नहीं';
$string['nogroup'] = 'कोई समूह नहीं';
$string['openchildcourse'] = 'उप पाठ्यक्रम खोलें';
$string['opennewtab'] = 'नए टैब में खोलें';
$string['opennewtab_help'] = 'यदि सक्षम किया गया है, बटन उप पाठ्यक्रम को नए टैब में खोलेगा। यह नामांकन या समन्वय व्यवहार नहीं बदलेगा, केवल उपयोगकर्ता के लिए पाठ्यक्रम खोला जाने का तरीका बदलेगा।';
$string['pluginadministration'] = 'उप पाठ्यक्रम प्रशासन';
$string['pluginname'] = 'उप पाठ्यक्रम';
$string['privacy:metadata:childcourse_map'] = 'जोड़े गए पाठ्यक्रम गतिविधि द्वारा बनाए गए मैपिंग डेटा सुरक्षित नामांकन-निकासी और ऑडिटिंग के लिए संग्रहीत करता है।';
$string['privacy:metadata:childcourse_map:childcourseid'] = 'जो उप पाठ्यक्रम लिंक किया गया है उसकी ID।';
$string['privacy:metadata:childcourse_map:childcourseinstanceid'] = 'लिंक किए गए पाठ्यक्रम गतिविधि उदाहरण की ID।';
$string['privacy:metadata:childcourse_map:groupidsjson'] = 'प्लगइन द्वारा असाइन किए गए उप पाठ्यक्रम समूह ID की सूची (JSON)।';
$string['privacy:metadata:childcourse_map:hiddenprefset'] = 'यह सूचित करता है कि प्लगइन ने My courses में उप पाठ्यक्रम को छिपाने के लिए पसंद (प्रेफ़रेंस) सेट किया है या नहीं।';
$string['privacy:metadata:childcourse_map:manualenrolid'] = 'प्लगइन द्वारा उपयोग किए गए नामांकन उदाहरण की ID।';
$string['privacy:metadata:childcourse_map:parentcourseid'] = 'जहाँ गतिविधि मौजूद है, उस मूल पाठ्यक्रम की ID।';
$string['privacy:metadata:childcourse_map:roleid'] = 'उप पाठ्यक्रम में प्लगइन द्वारा असाइन किए गए papel की ID।';
$string['privacy:metadata:childcourse_map:timeenrolled'] = 'लिंक के जरिए उपयोगकर्ता के नामांकन का समय।';
$string['privacy:metadata:childcourse_map:timemodified'] = 'मैपिंग रिकॉर्ड में अंतिम संशोधन का समय।';
$string['privacy:metadata:childcourse_map:userid'] = 'लिंक के माध्यम से नामांकित उपयोगकर्ता की ID।';
$string['privacy:metadata:childcourse_state'] = 'क्रमिक ग्रेड और पूर्णता सिंक के लिए प्रति-उपयोगकर्ता कैश्ड स्थिति संग्रहीत करता है।';
$string['privacy:metadata:childcourse_state:childcourseinstanceid'] = 'लिंक किए गए पाठ्यक्रम गतिविधि उदाहरण की ID।';
$string['privacy:metadata:childcourse_state:coursecompleted'] = 'उपयोगकर्ता के लिए पूर्णता नियम के संतुष्ट होने की कैश्ड स्थिति संकेतक।';
$string['privacy:metadata:childcourse_state:coursecompletiontimemodified'] = 'क्रमिक सिंक के लिए स्रोत पूर्णता डेटा में अंतिम संशोधन का टाइमस्टैम्प।';
$string['privacy:metadata:childcourse_state:finalgrade'] = 'उप पाठ्यक्रम कुल से सिंक किया गया कैश्ड ग्रेड (प्रतिशत)।';
$string['privacy:metadata:childcourse_state:grade_source'] = 'ग्रेड स्रोत की पहचान (e.g. course_total).';
$string['privacy:metadata:childcourse_state:gradeitemtimemodified'] = 'क्रमिक सिंक के लिए स्रोत ग्रेड आइटम में अंतिम संशोधन का टाइमस्टैम्प।';
$string['privacy:metadata:childcourse_state:timemodified'] = 'कैश्ड स्टेट पंक्ति में अंतिम संशोधन का समय।';
$string['privacy:metadata:childcourse_state:userid'] = 'उपयोगकर्ता की ID।';
$string['privacy:metadata:userpreference:block_myoverview_hidden_course'] = 'My courses में उप पाठ्यक्रम को छिपाने के लिए उपयोगकर्ता वरीयता (डिफ़ॉल्ट प्रेफरेंस नाम: block_myoverview_hidden_course_{courseid}).';
$string['settings_heading'] = 'उप पाठ्यक्रम सेटिंग्स';
$string['syncdone'] = 'सिंक पूरा हुआ।';
$string['syncnow'] = 'अब सिंक करें';
$string['targetgroup'] = 'ग्रुप में नामांकन करें';
$string['targetgroup_help'] = 'अगर चयनित है, ऑटो-नामांकन के समय उपयोगकर्ता को उप पाठ्यक्रम में इस विशिष्ट समूह में जोड़ा जाएगा। समूह को उप पाठ्यक्रम में मौजूद होना चाहिए। अगर \\"माता-पिता पाठ्यक्रम से समूह विरासत में लें\\" भी सक्षम है, तो दोनों व्यवहार लागू होंगे (चयनित समूह और विरासत समूह)।';
$string['unenrolaction'] = 'जब लिंक हटाया जाता है';
$string['unenrolaction_help'] = 'इस गतिविधि द्वारा बनाए गए नामांकन पर नियंत्रण करता है कि लिंक्ड गतिविधि हट जाने पर क्या होगा। \\"Unenrol\\" केवल उन नामांकन को हटाएगा जो इस गतिविधि द्वारा बनाए गए थे (मैपिंग तालिका में ट्रैक किया गया)। \\"Keep enrolments\\" उपयोगकर्ताओं को उप पाठ्यक्रम में नामांकित रहने देगा।';
$string['unenrolaction_keep'] = 'नामांकन बनाए रखें';
$string['unenrolaction_unenrol'] = 'इस लिंक द्वारा नामांकित उपयोगकर्ताओं का नामांकन हटाएं';
