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
 * Strings for component 'enrol_ldap', language 'hi', version '4.4'.
 *
 * @package     enrol_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'उपयोगकर्ता \'{$a->user_username}\' को पाठ्यक्रम \'{$a->course_shortname}\' (आईडी {$a->course_id}) में भूमिका \'{$a->role_shortname}\' सौंपी जा रही है।';
$string['assignrolefailed'] = '\'{$a->course_shortname}\' (आईडी {$a->course_id}) कोर्स में उपयोगकर्ता \'{$a->user_username}\' को भूमिका \'{$a->role_shortname}\' असाइन करने में विफल रहा।';
$string['autocreate'] = '<p>यदि किसी ऐसे कोर्स में नामांकन हो जाता है जो अभी तक मूडल में मौजूद नहीं है, तो कोर्स स्वचालित रूप से बनाया जा सकता है।</p><p>यदि आप स्वचालित कोर्स निर्माण का उपयोग कर रहे हैं, तो यह अनुशंसा की जाती है कि आप ऊपर निर्दिष्ट चार कोर्स फ़ील्ड (आईडी नंबर, संक्षिप्त नाम, पूरा नाम और सारांश) में संशोधन को रोकने के लिए संबंधित भूमिकाओं से निम्नलिखित क्षमताओं को हटा दें: moodle/course:changeidnumber, moodle/course:changeshortname, moodle/course:changefullname और moodle/course:changesummary।</p>';
$string['autocreate_key'] = 'Auto create';
$string['autocreation_settings'] = 'स्वचालित क्रम निर्माण सेटिंग्स';
$string['autoupdate_settings'] = 'स्वचालित क्रम अद्यतन सेटिंग्स';
$string['autoupdate_settings_desc'] = '<p>\'LDAP नामांकन सिंक्रनाइज़ करें\' निर्धारित कार्य के चलने पर अपडेट करने के लिए फ़ील्ड चुनें।</p><p>कम से कम एक फ़ील्ड चुने जाने पर अपडेट हो जाएगा।</p>';
$string['bind_dn'] = 'यदि आप उपयोगकर्ताओं को खोजने के लिए किसी बाइंड उपयोगकर्ता का उपयोग करना चाहते हैं, तो उसे यहाँ निर्दिष्ट करें। जैसे \'cn=ldapuser,ou=public,o=org\'';
$string['bind_dn_key'] = 'उपयोगकर्ता विशिष्ट नाम को बांधें';
$string['bind_pw'] = 'बिंद उपयोगकर्ता के लिए पासवर्ड';
$string['bind_pw_key'] = 'पासवर्ड';
$string['bind_settings'] = 'बंधन सेटिंग्स';
$string['cannotcreatecourse'] = 'क्रम नहीं बना सका: LDAP अभिलेख से अपेक्षित डेटा गायब है!';
$string['cannotupdatecourse'] = 'कोर्स अपडेट नहीं किया जा सकता: LDAP रिकॉर्ड से आवश्यक डेटा गायब है! कोर्स आईडी नंबर: \'{$a->idnumber}\'';
$string['cannotupdatecourse_duplicateshortname'] = 'कोर्स अपडेट नहीं किया जा सकता: संक्षिप्त नाम दोहराया गया है। आईडी नंबर \'{$a->idnumber}\' वाले कोर्स को छोड़ा जा रहा है...';
$string['category'] = 'स्व-निर्मित पाठ्यक्रमों के लिए श्रेणी';
$string['category_key'] = 'श्रेणी';
$string['contexts'] = 'LDAP संदर्भ';
$string['couldnotfinduser'] = 'उपयोगकर्ता \'{$a}\' नहीं मिल सका, छोड़ रहा है';
$string['course_fullname'] = 'वैकल्पिकः LDAP  विशेषता से पूरा नाम प्राप्त करने के लिए';
$string['course_fullname_key'] = 'पूरा नाम';
$string['course_fullname_updateonsync'] = 'सिंक्रनाइजेशन आलेख के दौरान पूरा नाम अपडेट करें';
$string['course_fullname_updateonsync_key'] = 'पूरा नाम अपडेट करें';
$string['course_idnumber'] = 'से क्रम पहचान संख्अथवा प्राप्त करने के लिए LDAP  विशेषता। आमतौर पर \'cn\' अथवा \'uid\'।';
$string['course_idnumber_key'] = 'पहचान संख्या';
$string['course_search_sub'] = 'उप-संदर्भों से समूह, दल, वर्ग, टोली सदस्यता खोजें';
$string['course_search_sub_key'] = 'उप-संदर्भों की खोज करें';
$string['course_settings'] = 'पाठ्यक्रम नामांकन सेटिंग्स';
$string['course_shortname'] = 'वैकल्पिकः LDAP  विशेषता से संक्षिप्त नाम प्राप्त करने के लिए';
$string['course_shortname_key'] = 'संक्षिप्त नाम';
$string['course_shortname_updateonsync'] = 'सिंक्रनाइजेशन आलेख के दौरान संक्षिप्त नाम को अपडेट करें';
$string['course_shortname_updateonsync_key'] = 'संक्षिप्त नाम अद्यतन';
$string['course_summary'] = 'वैकल्पिकः से सारांश प्राप्त करने के लिए LDAP  विशेषता';
$string['course_summary_key'] = 'सारांश';
$string['course_summary_updateonsync'] = 'सिंक्रनाइजेशन आलेख के दौरान सारांश को अपडेट करें';
$string['course_summary_updateonsync_key'] = 'सारांश अद्यतन';
$string['coursenotexistskip'] = 'पाठ्यक्रम \'{$a}\' मौजूद नहीं है और स्वचालन अक्षम है, छोड़ रहा है';
$string['courseupdated'] = 'id संख्या \'{$a-> idnumber}\' के साथ पाठ्यक्रम को सफलतापूर्वक अद्यतन किया गया।';
$string['courseupdateskipped'] = 'id संख्या \'{$a-> idnumber}\' वाले पाठ्यक्रम को अद्यतन करने की आवश्यकता नहीं है। छोड़ना...';
$string['createcourseextid'] = 'CREATE User enrolled to a non-existing course \'{$a->courseextid}\'';
$string['createnotcourseextid'] = 'उपयोगकर्ता ने एक गैर-मौजूद पाठ्यक्रम \'{$a->courseextid}\' में नामांकन किया है।';
$string['creatingcourse'] = 'कोर्स \'{$a}\' बनाया जा रहा है...';
$string['duplicateshortname'] = 'कोर्स बनाने में विफलता। संक्षिप्त नाम पहले से मौजूद है। आईडी नंबर \'{$a->idnumber}\' वाले कोर्स को छोड़ रहे हैं...';
$string['editlock'] = 'लॉक वैल्यू';
$string['emptyenrolment'] = '\'{$a->course_shortname}\' पाठ्यक्रम में \'{$a->role_shortname}\' भूमिका के लिए कोई नामांकन नहीं है।';
$string['enroluser'] = 'उपयोगकर्ता \'{$a->user_username}\' को पाठ्यक्रम \'{$a->course_shortname}\' (आईडी {$a->course_id}) में नामांकित करें।';
$string['enroluserenable'] = 'कोर्स \'{$a->course_shortname}\' (आईडी {$a->course_id}) में उपयोगकर्ता \'{$a->user_username}\' के लिए नामांकन सक्षम किया गया।';
$string['explodegroupusertypenotsupported'] = 'ldap_explode_group() चयनित उपयोगकर्ता प्रकार {$a} का समर्थन नहीं करता है।';
$string['extcourseidinvalid'] = 'कोर्स की बाहरी आईडी अमान्य है!';
$string['extremovedsuspend'] = 'कोर्स \'{$a->course_shortname}\' (आईडी {$a->course_id}) में उपयोगकर्ता \'{$a->user_username}\' का नामांकन अक्षम कर दिया गया है।';
$string['extremovedsuspendnoroles'] = 'कोर्स \'{$a->course_shortname}\' (आईडी {$a->course_id}) में उपयोगकर्ता \'{$a->user_username}\' के लिए नामांकन अक्षम कर दिया गया है और भूमिकाएँ हटा दी गई हैं।';
$string['extremovedunenrol'] = 'उपयोगकर्ता \'{$a->user_username}\' को पाठ्यक्रम \'{$a->course_shortname}\' (आईडी {$a->course_id}) से अनरजिस्टर करें';
$string['failed'] = 'असफल!';
$string['general_options'] = 'General options';
$string['group_memberofattribute'] = 'उस विशेषता का नाम जो निर्दिष्ट करता है कि कोई उपयोगकर्ता अथवा समूह, दल, वर्ग, टोली किस समूह, दल, वर्ग, टोली से संबंधित है (e.g, सदस्य, समूह, दल, वर्ग, टोली सदस्यता, आदि)';
$string['group_memberofattribute_key'] = '\'सदस्य\' विशेषता';
$string['host_url'] = 'LDAP होस्ट को URL प्रारूप में निर्दिष्ट करें, जैसे \'ldap://ldap.myorg.com/\' या \'ldaps://ldap.myorg.com/\'';
$string['host_url_key'] = 'होस्ट URL';
$string['idnumber_attribute'] = 'यदि समूह सदस्यता में विशिष्ट नाम शामिल हैं, तो वही विशेषता निर्दिष्ट करें जिसका उपयोग आपने LDAP प्रमाणीकरण सेटिंग्स में उपयोगकर्ता \'आईडी नंबर\' मैपिंग के लिए किया है।';
$string['idnumber_attribute_key'] = 'ID संख्या विशेषता';
$string['ldap:manage'] = 'LDAP एनरोल इंस्टेंस का प्रबंधन करें';
$string['ldap_encoding'] = 'LDAP सर्वर द्वारा उपयोग की जाने वाली एन्कोडिंग निर्दिष्ट करें। संभवतः utf-8, MS AD v2 डिफ़ॉल्ट प्लेटफ़ॉर्म एन्कोडिंग जैसे cp1252, cp1250 आदि का उपयोग करता है।';
$string['ldap_encoding_key'] = 'LDAP एन्कोडिंग';
$string['memberattribute'] = 'LDAP सदस्य विशेषता';
$string['memberattribute_isdn'] = 'यदि समूह की सदस्यता में विशिष्ट नाम हैं, तो आपको उन्हें यहाँ विनिर्देश करना की आवश्यकता है। यदि ऐसा है, तो आपको इस खंड में शेष सेटिंग्स को भी कॉन्फ़िगर करने की आवश्यकता है।';
$string['memberattribute_isdn_key'] = 'भाग विशेषता डीएन का उपयोग करती है';
$string['nested_groups'] = 'क्या आप नामांकन के लिए घोंसले वाले समूहों (समूहों के समूहों) का उपयोग करना चाहते हैं?';
$string['nested_groups_key'] = 'Nested groups';
$string['nested_groups_settings'] = 'नेस्टेड समूह सेटिंग्स';
$string['nosuchrole'] = 'ऐसी कोई भूमिका नहीं: \'{$a}\'';
$string['objectclass'] = 'कोर्स खोजने के लिए उपयोग की जाने वाली ऑब्जेक्ट क्लास। आमतौर पर \'ग्रुप\' या \'पॉज़िक्सग्रुप\'।';
$string['objectclass_key'] = 'Object class';
$string['ok'] = 'ठीक है!';
$string['opt_deref'] = 'यदि समूह सदस्यता में विशिष्ट नाम शामिल हैं, तो खोज के दौरान उपनामों को कैसे संभाला जाए, यह निर्दिष्ट करें। निम्नलिखित में से कोई एक मान चुनें: \'नहीं\' (LDAP_DEREF_NEVER) या \'हाँ\' (LDAP_DEREF_ALWAYS)।';
$string['opt_deref_key'] = 'डीरेफरेंस उपनाम';
$string['phpldap_noextension'] = 'ऐसा प्रतीत होता है कि PHP LDAP मॉड्यूल मौजूद नहीं है। यदि आप इस नामांकन प्लगइन का उपयोग करना चाहते हैं, तो कृपया सुनिश्चित करें कि यह स्थापित और सक्षम है।';
$string['pluginname'] = 'LDAP नामांकन';
$string['pluginname_desc'] = '<p>आप अपने नामांकनों को नियंत्रित करने के लिए LDAP सर्वर का उपयोग कर सकते हैं। यह माना जाता है कि आपके LDAP ट्री में ऐसे समूह हैं जो पाठ्यक्रमों से मैप होते हैं, और प्रत्येक समूह/पाठ्यक्रम में छात्रों से मैप करने के लिए सदस्यता प्रविष्टियाँ होंगी।</p><p>यह माना जाता है कि पाठ्यक्रमों को LDAP में समूहों के रूप में परिभाषित किया गया है, जिसमें प्रत्येक समूह में कई सदस्यता फ़ील्ड (<em>सदस्य</em> या <em>सदस्यUid</em>) हैं जिनमें उपयोगकर्ता की एक अद्वितीय पहचान होती है।</p><p>LDAP नामांकन का उपयोग करने के लिए, आपके उपयोगकर्ताओं के पास एक वैध आईडी नंबर फ़ील्ड होना आवश्यक है। किसी उपयोगकर्ता को पाठ्यक्रम में नामांकित करने के लिए LDAP समूहों के सदस्य फ़ील्ड में वह आईडी नंबर होना चाहिए। यदि आप पहले से ही LDAP प्रमाणीकरण का उपयोग कर रहे हैं तो यह आमतौर पर अच्छी तरह से काम करेगा।</p><p>उपयोगकर्ता के लॉग इन करने पर नामांकन अपडेट हो जाएंगे। आप नामांकनों को सिंक्रनाइज़ रखने के लिए एक स्क्रिप्ट भी चला सकते हैं।</p> <em>enrol/ldap/cli/sync.php</em> फ़ाइल देखें।</p><p>इस प्लगइन को LDAP में नए समूह दिखाई देने पर स्वचालित रूप से नए पाठ्यक्रम बनाने के लिए भी सेट किया जा सकता है।</p>';
$string['pluginnotenabled'] = '<p>आप अपने नामांकनों को नियंत्रित करने के लिए LDAP सर्वर का उपयोग कर सकते हैं। यह माना जाता है कि आपके LDAP ट्री में ऐसे समूह हैं जो पाठ्यक्रमों से मैप होते हैं, और प्रत्येक समूह/पाठ्यक्रम में छात्रों से मैप करने के लिए सदस्यता प्रविष्टियाँ होंगी।</p><p>यह माना जाता है कि पाठ्यक्रमों को LDAP में समूहों के रूप में परिभाषित किया गया है, जिसमें प्रत्येक समूह में कई सदस्यता फ़ील्ड (<em>सदस्य</em> या <em>सदस्यUid</em>) हैं जिनमें उपयोगकर्ता की एक अद्वितीय पहचान होती है।</p><p>LDAP नामांकन का उपयोग करने के लिए, आपके उपयोगकर्ताओं के पास एक वैध आईडी नंबर फ़ील्ड होना आवश्यक है। किसी उपयोगकर्ता को पाठ्यक्रम में नामांकित करने के लिए LDAP समूहों के सदस्य फ़ील्ड में वह आईडी नंबर होना चाहिए। यदि आप पहले से ही LDAP प्रमाणीकरण का उपयोग कर रहे हैं तो यह आमतौर पर अच्छी तरह से काम करेगा।</p><p>उपयोगकर्ता के लॉग इन करने पर नामांकन अपडेट हो जाएंगे। आप नामांकनों को सिंक्रनाइज़ रखने के लिए एक स्क्रिप्ट भी चला सकते हैं।</p> <em>enrol/ldap/cli/sync.php</em> फ़ाइल देखें।</p><p>इस प्लगइन को LDAP में नए समूह दिखाई देने पर स्वचालित रूप से नए पाठ्यक्रम बनाने के लिए भी सेट किया जा सकता है।</p>';
$string['privacy:metadata'] = 'LDAP नामांकन प्लगइन किसी भी प्रकार का व्यक्तिगत डेटा संग्रहीत नहीं करता है।';
$string['role_mapping'] = '<p>प्रत्येक भूमिका के लिए, आपको उन सभी LDAP संदर्भों को निर्दिष्ट करना होगा जहाँ पाठ्यक्रमों का प्रतिनिधित्व करने वाले समूह स्थित हैं। विभिन्न संदर्भों को अर्धविराम (;) से अलग करें।</p><p>आपको उस विशेषता को भी निर्दिष्ट करना होगा जिसका उपयोग आपका LDAP सर्वर किसी समूह के सदस्यों को रखने के लिए करता है। यह आमतौर पर \'member\' या \'memberUid\' होता है।</p>';
$string['role_mapping_attribute'] = '{$a} के लिए LDAP भाग विशेषता';
$string['role_mapping_context'] = '{$a} के लिए LDAP संदर्भ';
$string['role_mapping_key'] = 'LDAP से भूमिकाओं का मानचित्रण';
$string['roles'] = 'भूमिका मानचित्रण';
$string['server_settings'] = 'LDAP सर्वर सेटिंग्स';
$string['synccourserole'] = '== भूमिका \'{$a->role_shortname}\' के लिए पाठ्यक्रम \'{$a->idnumber}\' को सिंक्रनाइज़ किया जा रहा है';
$string['syncenrolmentstask'] = 'LDAP  नामांकन कार्य को समन्वित करें';
$string['template'] = 'वैकल्पिक: स्व-निर्मित क्रम एक अस्थायी क्रम से अपनी सेटिंग्स को कॉपी कर सकते हैं';
$string['template_key'] = 'टेम्पलेट';
$string['unassignrole'] = 'कोर्स \'{$a->course_shortname}\' (आईडी {$a->course_id}) से उपयोगकर्ता \'{$a->user_username}\' को भूमिका \'{$a->role_shortname}\' असाइन करना बंद किया जा रहा है।';
$string['unassignrolefailed'] = 'कोर्स \'{$a->course_shortname}\' (आईडी {$a->course_id}) से उपयोगकर्ता \'{$a->user_username}\' को भूमिका \'{$a->role_shortname}\' असाइन करने से रोकने में विफल रहा।';
$string['unassignroleid'] = 'उपयोगकर्ता id \'{$a->user_id}\' को भूमिका आईडी \'{$a->role_id}\' असाइन करना बंद किया जा रहा है।';
$string['updatelocal'] = 'स्थानीय डेटा को अद्यतन';
$string['user_attribute'] = 'यदि समूह सदस्यता में विशिष्ट नाम शामिल हैं, तो उपयोगकर्ताओं को नाम देने/खोजने के लिए उपयोग किए जाने वाले एट्रिब्यूट को निर्दिष्ट करें। यदि आप LDAP प्रमाणीकरण का उपयोग कर रहे हैं, तो यह मान LDAP प्रमाणीकरण प्लगइन में \'ID नंबर\' मैपिंग में निर्दिष्ट एट्रिब्यूट से मेल खाना चाहिए।';
$string['user_attribute_key'] = 'ID संख्या विशेषता';
$string['user_contexts'] = 'यदि समूह, दल, वर्ग, टोली की सदस्यता में विशिष्ट नाम हैं, तो उन संदर्भों की सूची विनिर्देश करना जहां उपयोगकर्ता स्थित हैं। एक अर्ध-बृहदान्त्र (;) के साथ विभिन्न संदर्भों को अलग करें। उदाहरण के लिए: \'ou = उपयोगकर्ता, o = org; ou = अन्य, o = org\'।';
$string['user_contexts_key'] = 'संदर्भ';
$string['user_search_sub'] = 'यदि समूह की सदस्यता में विशिष्ट नाम हैं, तो विनिर्देश करना कि क्या उपयोगकर्ताओं की खोज उप-संदर्भों में भी की जाती है।';
$string['user_search_sub_key'] = 'उप-संदर्भों की खोज करें';
$string['user_settings'] = 'उपयोगकर्ता लुकअप सेटिंग्स';
$string['user_type'] = 'यदि समूह की सदस्यता में विशिष्ट नाम हैं, तो विनिर्देश करना कि उपयोगकर्ताओं को LDAP में कैसे संग्रहीत किया जाता है';
$string['user_type_key'] = 'उपयोगकर्ता प्रकार';
$string['version'] = 'आपके सर्वर द्वारा उपयोग किए जा रहे LDAP उपसंधि का संस्करण';
$string['version_key'] = 'संस्करण';
