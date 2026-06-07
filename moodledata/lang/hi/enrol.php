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
 * Strings for component 'enrol', language 'hi', version '4.4'.
 *
 * @package     enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'उपलब्ध कोर्स भर्ती प्लगिन';
$string['addinstance'] = 'पद्धति जोड़ें';
$string['addinstanceanother'] = 'पद्धति जोड़ें एवं दूसरा बनाएं';
$string['ajaxnext25'] = 'अगले 25...';
$string['ajaxoneuserfound'] = '1 उपयोगकर्ता मिला';
$string['ajaxxmoreusersfound'] = 'पाए गए {$a} उपयोगकर्ताओं से अधिक';
$string['ajaxxusersfound'] = '{$a} उपयोगकर्ता मिले';
$string['assignnotpermitted'] = 'आपके पास इस पाठ्यक्रम में अनुमति नहीं है या भूमिकाएं नहीं दे सकते हैं';
$string['bulkuseroperation'] = 'थोक उपयोगकर्ता संचालन';
$string['configenrolplugins'] = 'सभी जरूरी प्लगिन को चुनें और उन्हें सही क्रम व्यवस्थित करें।';
$string['custominstancename'] = 'कस्टम उदाहरण नाम';
$string['customwelcomemessage'] = 'अनुकूलित स्वागत सन्देश, सूचना';
$string['customwelcomemessage_help'] = 'स्वीकृत प्रारूप: सादा पाठ या मूडल-ऑटो प्रारूप। HTML टैग और बहुभाषी टैग भी स्वीकार्य हैं, साथ ही निम्नलिखित प्लेसहोल्डर भी:
<ul>
<li>पाठ्यक्रम का नाम {$a->coursename}</li>
<li>उपयोगकर्ता के प्रोफ़ाइल पृष्ठ का लिंक {$a->profileurl}</li>
<li>उपयोगकर्ता का ईमेल {$a->email}</li>
<li>उपयोगकर्ता का पूरा नाम {$a->fullname}</li>
<li>उपयोगकर्ता का पहला नाम {$a->firstname}</li>
<li>उपयोगकर्ता का अंतिम नाम {$a->lastname}</li>
<li>उपयोगकर्ता की पाठ्यक्रम भूमिका {$a->courserole}</li>
</ul>';
$string['defaultenrol'] = 'नए कोर्सों में उदाहरण जोड़ें';
$string['defaultenrol_desc'] = 'इस प्लगिन को सभी नए कोर्सों में स्वयंतः जोड़ना संभव है।';
$string['deleteinstanceconfirm'] = 'आप नामांकन प्रणाली "{$a-> name}" को निकाल देना जा रहे हैं। इस प्रणाली का उपयोग करके वर्तमान में नामांकित सभी {$a-> users} का नामांकन समाप्त कर दिअथवा जाएगा और उपयोगकर्ताओं के ग्रेड, समूह, दल, वर्ग, टोली सदस्यता अथवा फोरम सदस्यता जैसे पाठ्यक्रम से संबंधित किसी भी डेटा को हटा दिअथवा जाएगा। क्अथवा आप सुनिश्चित हैं कि आप जारी रखना चाहते हैं?';
$string['deleteinstanceconfirmself'] = 'क्या आप वास्तव में निश्चित हैं कि आप "{$a-> name}" उदाहरण को हटाना चाहते हैं जो आपको इस क्रम तक पहुँच देता है? यह संभव है कि यदि आप जारी रखते हैं तो आप इस क्रम तक नहीं पहुँच पाएंगे।';
$string['deleteinstancenousersconfirm'] = 'आप नामांकन प्रणाली "{$a-> name}" को निकाल देना जा रहे हैं। क्या आप सुनिश्चित हैं कि आप जारी रखना चाहते हैं?';
$string['disableinstanceconfirmself'] = 'क्या आप वास्तव में निश्चित हैं कि आप "{$a-> name}" उदाहरण को अक्षम करना चाहते हैं जो आपको इस क्रम तक पहुँच देता है? यह संभव है कि यदि आप जारी रखते हैं तो आप इस क्रम तक नहीं पहुँच पाएंगे।';
$string['durationdays'] = '{$a} दिन';
$string['editenrolment'] = 'नामांकन सम्पादित करें';
$string['edituserenrolment'] = '{$a} का नामांकन सम्पादित करें';
$string['enrol'] = 'नामांकन';
$string['enrolcandidates'] = 'उपयोगकर्ता नामांकित नहीं हैं';
$string['enrolcandidatesmatching'] = 'पंजीकृत उपयोगकर्ताओं से मेल नहीं खाता है';
$string['enrolcohort'] = 'नामांकन कोहॉर्ट';
$string['enrolcohortusers'] = 'उपयोगकर्ताओं को भर्ती करें';
$string['enroldetails'] = 'भर्ती विवरण';
$string['enrollednewusers'] = '{$a} नए उपयोगकर्ता सफलतापूर्वक भर्ती किये';
$string['enrolledusers'] = 'नामांकित उपयोगकर्ता';
$string['enrolledusersmatching'] = 'पंजीकृत उपयोगकर्ताओं से मेल खाता है';
$string['enrolme'] = 'मुझे इस कोर्स में शामिल करें';
$string['enrolment'] = 'नामांकन';
$string['enrolmentinstances'] = 'नामांकन पद्द्तियाँ';
$string['enrolmentmethod'] = 'नामांकन प्रणाली';
$string['enrolmentnew'] = '{$a} में नया प्रवेश किया गया हैं';
$string['enrolmentnewuser'] = '{$a->user} ने "{$a->course}" कोर्स में प्रवेश पाया हैं';
$string['enrolmentoptions'] = 'नामांकन के विकल्प';
$string['enrolments'] = 'एन्रल्मेंट्स';
$string['enrolmentupdatedforuser'] = 'उपयोगकर्ता "{$a-> पूर्णनाम}" के लिए नामांकन को अद्यतन कर दिया गया है';
$string['enrolnotpermitted'] = 'आपके पास इस पाठ्यक्रम में किसी को नामांकित करने की अनुमति नहीं है';
$string['enrolperiod'] = 'प्रवेश अवधि';
$string['enroltimecreated'] = 'नामांकन बनाया गया';
$string['enroltimeend'] = 'नामांकन समाप्त हुआ';
$string['enroltimeendinvalid'] = 'नामांकन समाप्ति तिथि नामांकन आरम्भ तिथि के बाद ही होनी चाहिए';
$string['enroltimestart'] = 'नामांकन आरम्भ हुआ';
$string['enrolusage'] = 'उदाहरण या नामांकन';
$string['enrolusers'] = 'उपयोगकर्ताओं को भर्ती करें';
$string['enrolxusers'] = '{$a} उपयोगकर्ताओं को भर्ती करें';
$string['errajaxfailedenrol'] = 'उपयोगकर्ता नामांकन करने में विफल';
$string['errajaxsearch'] = 'उपयोगकर्ता खोजते समय त्रुटि हुई';
$string['erroreditenrolment'] = 'उपयोगकर्ता नामांकन संपादित करने का प्रयास करते समय एक त्रुटि हुई';
$string['errorenrolcohort'] = 'इस कोर्स में कोहॉर्ट सिंक नामांकन उदाहरण बनाने में त्रुटि।';
$string['errorenrolcohortusers'] = 'कोहॉर्ट मेम्बरों को इस कोर्स में भर्ती करने में त्रुटि हुई';
$string['errorthresholdlow'] = 'अधिसूचना सीमा को कम से कम 1 दिन होना चाहिए।';
$string['errorwithbulkoperation'] = 'आपके थोक नामांकन परिवर्तन को संसाधित करते समय एक त्रुटि हुई थी';
$string['eventenrolinstancecreated'] = 'नामांकन उदाहरण बनाया';
$string['eventenrolinstancedeleted'] = 'नामांकन उदाहरण नष्ट कर दिया';
$string['eventenrolinstanceupdated'] = 'नामांकन उदाहरण अपडेट किया गया';
$string['eventuserenrolmentcreated'] = 'उपयोगकर्ता ने कोर्स में दाखिला लिया';
$string['eventuserenrolmentdeleted'] = 'उपयोगकर्ता का नामांकन कोर्स से हटाया गया';
$string['eventuserenrolmentupdated'] = 'उपयोगकर्ता नामांकन अद्यतन किया गया';
$string['expirynotify'] = 'नामांकन की समय सीमा समाप्त होने से पहले सूचित करें';
$string['expirynotify_help'] = 'यह सेटिंग यह निर्धारित करती है कि नामांकन की समाप्ति की सूचना संदेश भेजे गए हैं या नहीं।';
$string['expirynotifyall'] = 'नामांकन करने वाला और नामांकित उपयोगकर्ता';
$string['expirynotifyenroller'] = 'केवल नामांकन करने वाला';
$string['expirynotifyhour'] = 'नामांकन समाप्ति की सूचनाएं भेजने के लिए घंटा';
$string['expirythreshold'] = 'अधिसूचना सीमा';
$string['expirythreshold_help'] = 'नामांकन समाप्ति से पहले कब उपयोगकर्ताओं को सूचित किया जाना चाहिए?';
$string['extremovedaction'] = 'बाहरी अनएनरोल कार्रवाई';
$string['extremovedaction_help'] = 'जब उपयोगकर्ता नामांकन बाहरी नामांकन उद्गम से गायब हो जाता है तो करने के लिए कार्रवाई का चयन करें। कृपया ध्यान दें कि कुछ उपयोगकर्ता डेटा और सेटिंग्स को क्रम में नामांकन समाप्त करने के दौरान क्रम से साफ कर दिया जाता है।';
$string['extremovedkeep'] = 'उपयोगकर्ता नामांकित रखें';
$string['extremovedsuspend'] = 'कोर्स नामांकन बंद करें';
$string['extremovedsuspendnoroles'] = 'कोर्स नामांकन बंद करें और भूमिकाएं हटाएं';
$string['extremovedunenrol'] = 'उपयोगकर्ता को कोर्स से हटाएं';
$string['finishenrollingusers'] = 'उपयोगकर्ता नामांकन समाप्त करें';
$string['foundxcohorts'] = '{$a} कोहॉर्ट मिले';
$string['instanceadded'] = 'पद्दति जोड़ी';
$string['instanceeditselfwarning'] = 'चेतावनी:';
$string['instanceeditselfwarningtext'] = 'इस दाखिले पद्धति के माध्यम से आप इस पाठ्यक्रम में नामांकित हैं, परिवर्तन इस पाठ्यक्रम से आपकी पहुंच को प्रभावित कर सकते हैं।';
$string['invalidenrolduration'] = 'अमान्य नामांकन अवधि';
$string['invalidenrolinstance'] = 'अमान्य नामांकन उदाहरण';
$string['invalidrequest'] = 'अमान्य अनुरोध';
$string['invalidrole'] = 'अमान्य भूमिका';
$string['manageenrols'] = 'नामांकन प्लग इन प्रबंधित करें';
$string['manageinstance'] = 'प्रबंधित';
$string['method'] = 'विधि';
$string['migratetomanual'] = 'मैन्युअल नामांकन में माइग्रेट करें';
$string['nochange'] = 'कोई परिवर्तन नहीं';
$string['noexistingparticipants'] = 'कोई मौजूदा प्रतिभागी नहीं';
$string['nogroup'] = 'कोई समूह नहीं';
$string['noguestaccess'] = 'मेहमान इस कोर्स तक नहीं पहुंच सकते। कृपया लॉगिन करें।';
$string['none'] = 'कोई नहीं';
$string['notenrollable'] = 'आप इस कोर्स में स्वयं को नामांकित नहीं कर सकते';
$string['notenrolledusers'] = 'अन्य उपयोगकर्ता';
$string['otheruserdesc'] = 'निम्नलिखित उपयोगकर्ता इस क्रम में नामांकित नहीं हैं, लेकिन उन्हें इसके भीतर विरासत में मिली अथवा सौंपी गई भूमिकाएँ हैं।';
$string['participationactive'] = 'सक्रिय';
$string['participationnotcurrent'] = 'मौजूदा नहीं है';
$string['participationstatus'] = 'स्थिति';
$string['participationsuspended'] = 'बर्खास्त कर दिया';
$string['periodend'] = '{$a} तक';
$string['periodnone'] = '{$a} को भर्ती किया';
$string['periodstart'] = '{$a} से';
$string['periodstartend'] = '{$a->start} से लेकर {$a->end} तक';
$string['plugindisabled'] = '{$a} नामांकन प्लगइन अक्षम है';
$string['privacy:metadata:user_enrolments'] = 'नामांकन';
$string['privacy:metadata:user_enrolments:enrolid'] = 'नामांकन प्लगइन का उदाहरण';
$string['privacy:metadata:user_enrolments:modifierid'] = 'उपयोगकर्ता के नामांकन को अंतिम बार संशोधित करने वाले उपयोगकर्ता की ID';
$string['privacy:metadata:user_enrolments:status'] = 'क्रम में उपयोगकर्ता नामांकन की हैसियत';
$string['privacy:metadata:user_enrolments:tableexplanation'] = 'कोर नामांकन प्लगइन स्टोर नामांकित उपयोगकर्ताओं को स्टोर करते हैं।';
$string['privacy:metadata:user_enrolments:timecreated'] = 'वह समय जब उपयोगकर्ता नामांकन बनाया गया था';
$string['privacy:metadata:user_enrolments:timeend'] = 'वह समय जब उपयोगकर्ता नामांकन समाप्त हो जाता है';
$string['privacy:metadata:user_enrolments:timemodified'] = 'वह समय जब उपयोगकर्ता नामांकन संशोधित किया गया था';
$string['privacy:metadata:user_enrolments:timestart'] = 'वह समय जब उपयोगकर्ता नामांकन शुरू होता है';
$string['privacy:metadata:user_enrolments:userid'] = 'उपयोगकर्ता की पहचान';
$string['recovergrades'] = 'अगर संभव हो तो उपयोगकर्ता के पुराने ग्रेड पुनर्प्राप्त करें';
$string['rolefromcategory'] = '{$a-> role} ( क्रम श्रेणी से विरासत में मिली)';
$string['rolefrommetacourse'] = '{$a-> role} (मूल पाठ्यक्रम से विरासत में मिली)';
$string['rolefromsystem'] = '{$a->role} (साइट स्तर पर असाइन किया गया)';
$string['rolefromthiscourse'] = '{$a->role} (इस पाठ्यक्रम में निर्धारित भूमिका)';
$string['sendcoursewelcomemessage'] = 'क्रम स्वागत सन्देश, सूचना भेजें';
$string['sendcoursewelcomemessage_help'] = 'क्रम में किसी उपयोगकर्ता अथवा समूह का नामांकन करते समय, उन्हें एक स्वागत सन्देश, सूचना ईमेल भेजा जा सकता है। यदि क्रम संपर्क (चूकना रूप से शिक्षक) से भेजा जाता है, और एक से अधिक उपयोगकर्ताओं की यह भूमिका होती है, तो भूमिका सौंपे जाने वाले पहले उपयोगकर्ता से ईमेल भेजा जाता है।';
$string['sendfromcoursecontact'] = 'क्रम संपर्क से';
$string['sendfromkeyholder'] = 'कुंजी धारक से';
$string['sendfromnoreply'] = 'बिना जवाब वाले पते से';
$string['startdatetoday'] = 'आज';
$string['synced'] = 'सिंक्ड';
$string['testsettings'] = 'परीक्षण सेटिंग्स';
$string['testsettingsheading'] = 'परीक्षण नामांकन सेटिंग्स-{$a}';
$string['timeended'] = 'समय समाप्त हो गया है';
$string['timeenrolled'] = 'नामांकित समय';
$string['timereaggregated'] = 'समय फिर से जुड़ा हुआ है';
$string['timestarted'] = 'समय शुरू हुआ';
$string['totalenrolledusers'] = '{$a} नामांकित उपयोगकर्ता';
$string['totalotherusers'] = '{$a} अन्य उपयोगकर्ता';
$string['totalunenrolledusers'] = '{$a} अपंजीकृत उपयोगकर्ता';
$string['unassignnotpermitted'] = 'आपके पास इस क्रम में भूमिकाओं को सौंपने की अनुमति नहीं है';
$string['unenrol'] = 'बिना नामांकन के';
$string['unenrolconfirm'] = 'क्या आप वाकई "{$a->user}" (जो पहले "{$a->enrolinstancename}" के माध्यम से नामांकित था) को "{$a->course}" से अनरजिस्टर करना चाहते हैं?';
$string['unenrolleduser'] = 'उपयोगकर्ता "{$a-> fullname}" को क्रम से पंजीकृत नहीं किया गया था';
$string['unenrolme'] = 'मुझे इस क्रम से नामांकित न करें';
$string['unenrolnotpermitted'] = 'आपके पास क्रम से इस उपयोगकर्ता को अनरोल करने की अनुमति नहीं है।';
$string['unenrolroleusers'] = 'उपयोगकर्ताओं का नामांकन रद्द करें';
$string['uninstallmigrating'] = 'प्रवासित "{$a}" नामांकन';
$string['unknowajaxaction'] = 'अज्ञात कार्रवाई का अनुरोध किया गया';
$string['unlimitedduration'] = 'मुझे इस क्रम से नामांकित न करें';
$string['userremovedfromselectiona'] = 'उपयोगकर्ता "{$a}" को चयन, प्रवरण से हटा दिया गया था।';
$string['usersearch'] = 'खोजें';
$string['withselectedusers'] = 'चयनित उपयोगकर्ताओं के साथ';
$string['youenrolledincourse'] = 'आप क्रम में नामांकित हैं।';
$string['youunenrolledfromcourse'] = 'आप क्रम "{$a}" से गैर-नामांकित हैं।';
