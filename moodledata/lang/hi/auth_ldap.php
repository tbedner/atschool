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
 * Strings for component 'auth_ldap', language 'hi', version '4.4'.
 *
 * @package     auth_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_ad_create_req'] = 'सक्रिय निर्देशिका में नया खाता नहीं बना सकता है। सुनिश्चित करें कि आप इसके काम करने के लिए सभी आवश्यकताओं को पूरा करते हैं (LDAPS  संयोजन, उपयोगकर्ता को पर्याप्त अधिकारों के साथ बांधें, आदि)';
$string['auth_ldap_attrcreators'] = 'समूहों अथवा संदर्भों की सूची जिनके सदस्यों को विशेषताएँ बनाने की अनुमत है। \';\' के साथ कई समूहों को अलग करें। आमतौर पर \'cn = शिक्षक, ou = कर्मचारी, o = myorg\' जैसा कुछ होता है।';
$string['auth_ldap_attrcreators_key'] = 'विशेषता निर्माता';
$string['auth_ldap_auth_user_create_key'] = 'बाहरी रूप से उपयोगकर्ता बनाएँ';
$string['auth_ldap_bind_dn'] = 'यदि आप उपयोगकर्ताओं को खोजने के लिए बाइंड-उपयोगकर्ता का उपयोग करना चाहते हैं, तो इसे यहाँ विनिर्देश करना। \'cn = ldapuser, ou = सार्वजनिक, o = org\' जैसा कुछ';
$string['auth_ldap_bind_dn_key'] = 'विशिष्ट नाम';
$string['auth_ldap_bind_pw'] = 'बाइंड-उपयोगकर्ता के लिए पासवर्ड।';
$string['auth_ldap_bind_pw_key'] = 'पासवर्ड';
$string['auth_ldap_bind_settings'] = 'बंधन सेटिंग्स';
$string['auth_ldap_changepasswordurl_key'] = 'पासवर्ड बदलने का URL';
$string['auth_ldap_contexts'] = 'उन संदर्भों की सूची जहाँ उपयोगकर्ता स्थित हैं। विभिन्न संदर्भों को \';\' से अलग करें। उदाहरण के लिएः \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'संदर्भ';
$string['auth_ldap_create_context'] = 'यदि आप ईमेल पुष्टि करना के साथ उपयोगकर्ता निर्माण को सक्षम करते हैं, तो उस संदर्भ को विनिर्देश करना जहां उपयोगकर्ता बनाए गए हैं। जमानत मुद्दों को रोकने के लिए यह संदर्भ अन्य उपयोगकर्ताओं से अलग होना चाहिए। आपको इस संदर्भ को ldap _ context-चर में जोड़ने की आवश्यकता नहीं है, मूडल स्वचालित रूप से इस संदर्भ से उपयोगकर्ताओं की खोज करेगा। <br /><b>Note!</b> आपको उपयोगकर्ता निर्माण को काम करने के लिए दाखिल करना auth/ldap/auth.php में उपयोगकर्ता बनाने की प्रणाली () को आशोधन करना, तरमीम करना, अंशांतरित करना होगा।';
$string['auth_ldap_create_context_key'] = 'नए उपयोगकर्ताओं के लिए संदर्भ';
$string['auth_ldap_create_error'] = 'LDAP में उपयोगकर्ता बनाने में त्रुटि।';
$string['auth_ldap_expiration_desc'] = 'LDAP  सर्वर से सीधे पासवर्ड समाप्ति समय को पढ़ने के लिए समाप्त हो चुके पासवर्ड जांच को अक्षम करने के लिए \'{$a-> no}\' अथवा \'{$a-> ldapserver}\' का चयन करें।';
$string['auth_ldap_expiration_key'] = 'समाप्ति';
$string['auth_ldap_expiration_warning_desc'] = 'पासवर्ड समाप्ति चेतावनी जारी होने से कुछ दिन पहले।';
$string['auth_ldap_expiration_warning_key'] = 'समाप्ति चेतावनी';
$string['auth_ldap_expireattr_desc'] = 'वैकल्पिक: LDAP  विशेषता को ओवरराइड करता है जो पासवर्ड समाप्ति समय को संग्रहीत करता है।';
$string['auth_ldap_expireattr_key'] = 'समाप्ति विशेषता';
$string['auth_ldap_graceattr_desc'] = 'वैकल्पिकः ग्रेस लॉगिन विशेषता को ओवरराइड करता है';
$string['auth_ldap_gracelogin_key'] = 'ग्रेस लॉगिन विशेषता';
$string['auth_ldap_gracelogins_desc'] = 'LDAP  ग्रेस लॉगिन समर्थन सक्षम करें। पासवर्ड समाप्त होने के बाद, उपयोगकर्ता ग्रेस लॉगिन गिनती 0 होने तक लॉग इन कर सकता है। यदि पासवर्ड समाप्त हो गया है तो इस सेटिंग को सक्षम करने से ग्रेस लॉगिन सन्देश, सूचना प्रदर्शित होता है।';
$string['auth_ldap_gracelogins_key'] = 'ग्रेस लॉगिन';
$string['auth_ldap_groupecreators'] = 'समूहों अथवा संदर्भों की सूची जिनके सदस्यों को समूह बनाने की अनुमत है। \';\' के साथ कई समूहों को अलग करें। आमतौर पर \'cn=teachers,ou=staff,o=myorg\'\' जैसा कुछ होता है।';
$string['auth_ldap_groupecreators_key'] = 'समूह निर्माता';
$string['auth_ldap_host_url'] = '\'ldap://ldap.myorg.com/\' अथवा \'ldaps://ldap.myorg.com/\' जैसे यूआरएल-फॉर्म में एलडीएपी होस्ट विनिर्देश करना। फेलओवर समर्थन प्राप्त करने के लिए \';\' के साथ कई सर्वरों को अलग करें।';
$string['auth_ldap_host_url_key'] = 'मेजबान URL';
$string['auth_ldap_ldap_encoding'] = 'LDAP  सर्वर द्वारा उपयोग की जाने वाली एन्कोडिंग, सबसे अधिक संभावना यू. टी. एफ.-8 है। यदि LDAP v2 का चयन किअथवा जाता है, तो सक्रिय निर्देशिका अपनी संरचित एन्कोडिंग का उपयोग करती है, जैसे कि cp1252  अथवा cp1250।';
$string['auth_ldap_ldap_encoding_key'] = 'LDAP एन्कोडिंग';
$string['auth_ldap_login_settings'] = 'लॉगिन सेटिंग्स';
$string['auth_ldap_memberattribute'] = 'वैकल्पिक: उपयोगकर्ता भाग विशेषता को ओवरराइड करता है, जब उपयोगकर्ता किसी समूह से संबंधित होते हैं। आमतौर पर \'भाग\'';
$string['auth_ldap_memberattribute_isdn'] = 'भाग विशेषता मूल्यों के हैंडलिंग को ओवरराइड करता है';
$string['auth_ldap_memberattribute_isdn_key'] = 'भाग विशेषता डीएन का उपयोग करती है';
$string['auth_ldap_memberattribute_key'] = 'भाग विशेषताएँ';
$string['auth_ldap_no_mbstring'] = 'सक्रिय निर्देशिका में उपयोगकर्ता बनाने के लिए आपको एमबीस्ट्रिंग विस्तार की आवश्यकता है।';
$string['auth_ldap_noconnect'] = 'LDAP-मॉड्यूल सर्वर से जुड़ नहीं सकता हैः {$a}';
$string['auth_ldap_noconnect_all'] = 'एल. डी. ए. पी.-मॉड्यूल किसी भी सर्वर से जुड़ नहीं सकता हैः {$a}';
$string['auth_ldap_noextension'] = 'PHP LDAP मॉड्यूल मौजूद नहीं लगता है। यदि आप इस प्रमाणीकरण प्लगइन का उपयोग करना चाहते हैं तो कृपया सुनिश्चित करना कि यह स्थापित और सक्षम है।';
$string['auth_ldap_objectclass'] = 'वैकल्पिकः ldap_user_type पर उपयोगकर्ताओं का नाम/खोज करने के लिए उपयोग किए जाने वाले ऑब्जेक्टक्लास को ओवरराइड करता है। आमतौर पर आपको इसे बदलने की आवश्यकता नहीं है।';
$string['auth_ldap_objectclass_key'] = 'ऑब्जेक्ट क्लास';
$string['auth_ldap_opt_deref'] = 'यह निर्धारित करता है कि खोज के दौरान उपनामों को कैसे संभाला जाता है। निम्नलिखित मानों में से किसी एक का चयन करें:"No" (LDAP_DEREF_NEVER) or "Yes" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'अंतर उपनाम';
$string['auth_ldap_passtype'] = 'LDAP  सर्वर में नए अथवा बदले गए पासवर्ड का प्रारूप विनिर्देश करना।';
$string['auth_ldap_passtype_key'] = 'पासवर्ड प्रारूप';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP  पासवर्ड समाप्ति सेटिंग्स';
$string['auth_ldap_preventpassindb'] = 'पासवर्ड को मूडल के DB में संग्रहीत होने से रोकने के लिए हाँ चयन करना।';
$string['auth_ldap_preventpassindb_key'] = 'पासवर्ड कैशिंग को रोकें';
$string['auth_ldap_rolecontext'] = '{$a-> localname} संदर्भ';
$string['auth_ldap_rolecontext_help'] = '<i> {$a-> localname} </i> मानचित्रण के लिए चयन करने के लिए उपयोग किया जाने वाला LDAP संदर्भ। \';\' के साथ कई समूहों को अलग करें। आमतौर पर कुछ ऐसा होता है जैसे "cn={$a->shortname},ou=first-ou-with-role-groups,o=myorg; cn={$a->shortname},ou=second-ou-with-role-groups,o=myorg"।';
$string['auth_ldap_search_sub'] = 'उप-संदर्भों से उपयोगकर्ताओं को खोजें।';
$string['auth_ldap_search_sub_key'] = 'उप-संदर्भों की खोज करें';
$string['auth_ldap_server_settings'] = 'LDAP  सर्वर सेटिंग्स';
$string['auth_ldap_suspended_attribute'] = 'वैकल्पिकः जब इस विशेषता का उपयोग बशर्ते, यह कि रूप से बनाए गए उपयोगकर्ता खाते को सक्षम/निलंबित करने के लिए किया जाएगा।';
$string['auth_ldap_suspended_attribute_key'] = 'निलंबित विशेषता';
$string['auth_ldap_unsupportedusertype'] = 'लेखकः ldap user_create () चयनित उपयोगकर्ता प्रकार का समर्थन नहीं करता हैः {$a}';
$string['auth_ldap_update_userinfo'] = 'उपयोगकर्ता की जानकारी (पहला नाम, अंतिम नाम, पता..) को LDAP  से मूडल में अद्यतन। अपनी आवश्यकता के अनुसार "डेटा मैपिंग" सेटिंग्स विनिर्देश करना।';
$string['auth_ldap_user_attribute'] = 'वैकल्पिकः उपयोगकर्ताओं का नाम/खोज करने के लिए उपयोग किए जाने वाले गुण को ओवरराइड करता है। आमतौर पर \'cn\'।';
$string['auth_ldap_user_attribute_key'] = 'उपयोगकर्ता विशेषताएँ';
$string['auth_ldap_user_exists'] = 'LDAP  उपयोगकर्ता नाम पहले से मौजूद है।';
$string['auth_ldap_user_settings'] = 'उपयोगकर्ता लुकअप सेटिंग्स';
$string['auth_ldap_user_type'] = 'चयन करें कि उपयोगकर्ताओं को LDAP में कैसे संग्रहीत किया जाता है। यह सेटिंग यह भी निर्दिष्ट करती है कि लॉगिन समाप्ति, ग्रेस लॉगिन और उपयोगकर्ता निर्माण कैसे काम करेंगे।';
$string['auth_ldap_user_type_key'] = 'उपयोगकर्ता प्रकार';
$string['auth_ldap_usertypeundefined'] = 'config.user_type परिभाषित नहीं है अथवा कार्यक्रम ldap _ expirationtime2unix चयनित प्रकार का समर्थन नहीं करता है!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type परिभाषित नहीं है अथवा कार्यक्रम ldap _ unixi2 समाप्ति समय चयनित प्रकार का समर्थन नहीं करता है!';
$string['auth_ldap_version'] = 'आपका सर्वर जिस LDAP  उपसंधि का उपयोग कर रहा है, उसका संस्करण।';
$string['auth_ldap_version_key'] = 'संस्करण';
$string['auth_ldapdescription'] = 'यह प्रणाली बाहरी LDAP  सर्वर विरुद्ध प्रमाणीकरण प्रदान करती है। यदि दिया गया उपयोगकर्ता नाम और पासवर्ड मान्य है, तो मॉड्यूल अपने डेटाबेस में एक नई उपयोगकर्ता प्रविष्टि बनाता है। यह प्लगइन LDAP  से उपयोगकर्ता विशेषताओं को पढ़ सकता है और मॉड्यूल में वांछित क्षेत्रों को प्रीफिल कर सकता है। लॉगिन का पालन करने के लिए केवल उपयोगकर्ता नाम और पासवर्ड की जांच की जाती है।';
$string['auth_ldapextrafields'] = 'ये क्षेत्र वैकल्पिक हैं। आप यहाँ विनिर्देश करना  <b>LDAP fields</b>  से जानकारी के साथ कुछ मूडल उपयोगकर्ता क्षेत्रों को पहले से भरने का विकल्प चुन सकते हैं। <p> यदि आप इन क्षेत्रों को खाली छोड़ देते हैं, तो एल. डी. ए. पी. से कुछ भी स्थानांतरित नहीं किया जाएगा और इसके बजाय मूडल डिफ़ॉल्ट का उपयोग किया जाएगा। </p> <p> दोनों ही मामलों में, उपयोगकर्ता लॉग इन करने के बाद इन सभी क्षेत्रों को संपादित करने में सक्षम होगा।';
$string['auth_ldapnotinstalled'] = 'LDAP  प्रमाणीकरण का उपयोग नहीं कर सकते।PHP LDAP मॉड्यूल स्थापित नहीं है।';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = 'NTLM  डोमेन के साथ एकल साइन ऑन करने का प्रयास करने के लिए हाँ सेट करें। ध्यान दें कि इसके लिए काम करने के लिए सर्वर पर अतिरिक्त व्यवस्था, ढांचा की आवश्यकता होती है। अधिक जानकारी के लिए, प्रलेखन  <a href="https://docs.moodle.org/en/NTLM_authentication">NTLM authentication</a>  देखें।';
$string['auth_ntlmsso_enabled_key'] = 'सक्षम करें';
$string['auth_ntlmsso_ie_fastpath'] = 'NTLM SSO फास्ट पाथ को सक्षम करने के लिए सेट करें (यदि सेवार्थ ग्राहक का ब्राउज़र एमएस इंटरनेट एक्सप्लोरर है तो कुछ चरणों को दरकिनार कर देता है)।';
$string['auth_ntlmsso_ie_fastpath_attempt'] = 'सभी ब्राउज़रों के साथ NTLM  का प्रयास करें';
$string['auth_ntlmsso_ie_fastpath_key'] = 'MS IE तेज रास्ता?';
$string['auth_ntlmsso_ie_fastpath_yesattempt'] = 'हां, NTLM  अन्य ब्राउज़रों का प्रयास करें';
$string['auth_ntlmsso_ie_fastpath_yesform'] = 'हां, अन्य सभी ब्राउज़र स्तर लॉगिन प्रपत्र का उपयोग करते हैं।';
$string['auth_ntlmsso_maybeinvalidformat'] = 'REMOTE_USER हेडर से उपयोगकर्ता नाम सार असमर्थ। क्या कॉन्फ़िगर किया गया प्रारूप सही है?';
$string['auth_ntlmsso_missing_username'] = 'आपको दूरस्थ उपयोगकर्ता नाम प्रारूप में कम से कम% उपयोगकर्ता नाम% विनिर्देश करना की आवश्यकता है';
$string['auth_ntlmsso_remoteuserformat'] = 'यदि आपने \'प्रमाणीकरण प्रकार\' में \'NTLM\' चुना है, तो आप यहां दूरस्थ उपयोगकर्ता नाम प्रारूप निर्दिष्ट कर सकते हैं। यदि आप इसे खाली छोड़ देते हैं, तो चूकना डोमेन\\उपयोगकर्ता नाम प्रारूप का उपयोग किया जाएगा। आप वैकल्पिक <b>% डोमेन% </b> प्लेसहोल्डर का उपयोग यह विनिर्देश करना के लिए कर सकते हैं कि डोमेन नाम कहाँ दिखाई देता है, और अनिवार्य <b>% उपयोगकर्ता नाम% </b> प्लेसहोल्डर यह विनिर्देश करना के लिए कि उपयोगकर्ता नाम कहाँ दिखाई देता है। <b/> <b/> कुछ व्यापक रूप से उपयोग किए जाने वाले प्रारूप हैं <tt>%domain%\\%username%</tt> (MS Windows default), <tt>%domain%/%username%</tt>, <tt>%domain%+%username%</tt> and just <tt>%username%</tt>  (यदि कोई डोमेन भाग नहीं है)।';
$string['auth_ntlmsso_remoteuserformat_key'] = 'दूरस्थ उपयोगकर्ता नाम प्रारूप';
$string['auth_ntlmsso_subnet'] = 'यदि सेट किया गया है, तो यह केवल इस सबनेट में ग्राहकों के साथ SSO का प्रयास करेगा। प्रारूपः xxx.xxx.xxx.xx/bitmask। \',\' (अल्पविराम) के साथ कई सबनेट को अलग करें।';
$string['auth_ntlmsso_subnet_key'] = 'सबनेट';
$string['auth_ntlmsso_type'] = 'उपयोगकर्ताओं को प्रमाणित करने के लिए वेब सर्वर में कॉन्फ़िगर की गई प्रमाणीकरण प्रणाली (यदि संदेह हो, तो NTLM चुनें)';
$string['auth_ntlmsso_type_key'] = 'प्रमाणीकरण का प्रकार';
$string['cannotmaprole'] = 'भूमिका "{$a-> rolename}" का मानचित्रण नहीं किया जा सकता है क्योंकि इसका संक्षिप्त नाम "{$a-> shortname}" बहुत लंबा है और/या इसमें हाइफन हैं। इसे मानचित्रित करने की अनुमति देना के लिए, संक्षिप्त नाम को उच्‍चतम {$a-> charlimit} वर्णों और हटाए गए किसी भी हाइफन तक कम करने की आवश्यकता है। <a href = "{$a-> link}"> भूमिका </a> को संपादित करें';
$string['connectingldap'] = 'LDAP सर्वर से जुड़ना...';
$string['connectingldapsuccess'] = 'अपने LDAP सर्वर से जुड़ना सफल रहा।';
$string['creatingtemptable'] = 'अस्थायी तालिका {$a} बनाना';
$string['diag_contextnotfound'] = 'संदर्भ {$a} मौजूद नहीं है अथवा बाइंड DN द्वारा पढ़ा नहीं जा सकता है।';
$string['diag_emptycontext'] = 'खाली संदर्भ पाया गया।';
$string['diag_genericerror'] = 'LDAP error {$a->code} reading {$a->subject}: {$a->message}.';
$string['diag_rolegroupnotfound'] = 'भूमिका के लिए समूह {$a-> group} {$a-> localname} मौजूद नहीं है अथवा बाध्य डीएन द्वारा पढ़ा नहीं जा सकता है।';
$string['diag_toooldversion'] = 'यह बहुत असंभव है कि एक आधुनिक LDAP सर्वर एल. LDAPv2  उपसंधि का उपयोग करता है। गलत सेटिंग्स उपयोगकर्ता क्षेत्रों में मूल्यों को भ्रष्ट कर सकती हैं। अपने LDAP प्रशासक से संपर्क करें।';
$string['didntfindexpiretime'] = 'password_expire() को नि:श्वसन का समय नहीं मिला।';
$string['didntgetusersfromldap'] = 'क्या LDAP -त्रुटि से कोई उपयोगकर्ता नहीं मिला?';
$string['gotcountrecordsfromldap'] = 'LDAP से {$a} रिकॉर्ड प्राप्त करें';
$string['invalidusererrors'] = 'चेतावनी: {$a} उपयोगकर्ता खातों के निर्माण को छोड़ दिया।';
$string['invaliduserexception'] = 'त्रुटि: नया उपयोगकर्ता खाता नहीं बना सकता है। ब्योरा और कारण: {$a} इस उपयोगकर्ता को छोड़ना।';
$string['ldapnotconfigured'] = 'LDAP  मेजबान url  वर्तमान में संरचित नहीं है';
$string['morethanoneuser'] = 'LDAP में एक से अधिक उपयोगकर्ता अभिलेख पाए जाते हैं। केवल पहले का उपयोग करना।';
$string['needbcmath'] = 'सक्रिय निर्देशिका के साथ समाप्त हो चुके पासवर्ड जांच का उपयोग करने के लिए आपको BCMath  विस्तार की आवश्यकता है।';
$string['needmbstring'] = 'सक्रिय निर्देशिका में पासवर्ड बदलने के लिए आपको एमबीस्ट्रिंग एक्सटेंशन की आवश्यकता होगी।';
$string['nodnforusername'] = 'Error in user_update_password(). No DN for: {$a->username}';
$string['noemail'] = 'आपको एक ईमेल भेजने की कोशिश की लेकिन असफल रहा!';
$string['notcalledfromserver'] = 'वेब सर्वर से कॉल नहीं किया जाना चाहिए!';
$string['noupdatestobedone'] = 'करने के लिए कोई अद्यतन नहीं';
$string['nouserentriestoremove'] = 'कोई उपयोगकर्ता प्रविष्टियाँ नहीं हटाई जाएंगी';
$string['nouserentriestorevive'] = 'पुनर्जीवित की जाने वाली कोई उपयोगकर्ता प्रविष्टियाँ नहीं';
$string['nouserstobeadded'] = 'जोड़ने के लिए कोई उपयोगकर्ता प्रविष्टियाँ नहीं';
$string['ntlmsso_attempting'] = 'NTLM के माध्यम से एकल चिन्ह लगाने का प्रयास करना...';
$string['ntlmsso_failed'] = 'ऑटो-लॉगिन विफल हो गया, सामान्य लॉगिन पृष्ठ का प्रयास करें...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO अक्षम है।';
$string['ntlmsso_unknowntype'] = 'अज्ञात ntlmsso ओ प्रकार!';
$string['pagedresultsnotsupp'] = 'LDAP पृष्ठ परिणाम समर्थित नहीं हैं (अथवा तो आपके PHP  संस्करण में समर्थन का अभाव है, आपने LDAP  उपसंधि संस्करण 2 का उपयोग करने के लिए मूडल को कॉन्फ़िगर किअथवा है अथवा मूडल आपके LDAP  सर्वर से संपर्क नहीं कर सकता है कि क्अथवा पृष्ठ समर्थन उपलब्ध है।)';
$string['pagesize'] = 'सुनिश्चित करें कि यह मान आपके LDAP  सर्वर परिणाम निर्धारित आकार सीमा (एक क्वेरी में वापस की जा सकने वाली प्रविष्टियों की उच्‍चतम संख्या) से छोटा है।';
$string['pagesize_key'] = 'पृष्ठ का आकार';
$string['pluginname'] = 'LDAP सर्वर का प्रयोग करें';
$string['pluginnotenabled'] = 'प्लगइन सक्षम नहीं है!';
$string['privacy:metadata'] = 'LDAP सर्वर प्रमाणीकरण प्लगइन किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करता है।';
$string['renamingnotallowed'] = 'LDAP में उपयोगकर्ता नाम बदलने की अनुमत नहीं है';
$string['rootdseerror'] = 'सक्रिय निर्देशिका के लिए त्रुटि पूछताछ rootdse';
$string['start_tls'] = 'TLS एन्क्रिप्शन के साथ नियमित LDAP सेवा (पोर्ट 389) का उपयोग करें';
$string['start_tls_key'] = 'TLS का उपयोग करें';
$string['sync_updateuserchunk'] = 'इस मान को उन उपयोगकर्ताओं की संख्या पर निर्धारित करें जिन्हें आप प्रति लेनदेन अद्यतन चाहते हैं। इसे 0 पर सेट करने से सभी उपयोगकर्ता एक लेनदेन में अद्यतन हो जाएंगे।';
$string['sync_updateuserchunk_key'] = 'अद्यतन उपयोगकर्ताओं के चंक आकार को समन्वयित करें';
$string['syncroles'] = 'LDAP से तंत्र भूमिकाओं को समन्वित करें';
$string['synctask'] = 'LDAP  उपयोगकर्ता नौकरी को समन्वयित करते हैं';
$string['systemrolemapping'] = 'सिस्टम भूमिका मानचित्रण';
$string['updatepasserror'] = 'user_update_password() में त्रुटि। त्रुटि कोड: {$a->errno}; त्रुटि स्ट्रिंग: {$a->errstring}';
$string['updatepasserrorexpire'] = 'पासवर्ड की समाप्ति तिथि पढ़ते समय user_update_password() फ़ंक्शन में त्रुटि हुई। त्रुटि कोड: {$a->errno}; त्रुटि स्ट्रिंग: {$a->errstring}';
$string['updatepasserrorexpiregrace'] = 'समाप्ति समय और/या ग्रेस लॉगिन को संशोधित करते समय उपयोगकर्ता _ अद्यतन _ पासवर्ड () में त्रुटि। त्रुटि कोड: {$a-> errno}; त्रुटि स्ट्रिंग: {$a-> errstring}';
$string['updateremfail'] = 'LDAP रिकॉर्ड अपडेट करने में त्रुटि। त्रुटि कोड: {$a->errno}; त्रुटि स्ट्रिंग: {$a->errstring}<br/>कुंजी ({$a->key}) - पुराना मूडल मान: \'{$a->ouvalue}\' नया मान: \'{$a->nuvalue}\'';
$string['updateremfailamb'] = 'अस्पष्ट फ़ील्ड {$a->key} के साथ LDAP को अपडेट करने में विफल; पुराना मूडल मान: \'{$a->ouvalue}\', नया मान: \'{$a->nuvalue}\'';
$string['updateusernotfound'] = 'बाहरी रूप से अद्यतन करते समय उपयोगकर्ता नहीं मिल सका। ब्योरा इस प्रकार है: खोज मूल: \'{$a->userdn}\'; search filter: \'(objectClass=*)\'; search attributes: {$a->attribs}';
$string['user_activatenotsupportusertype'] = 'लेखकः ldap user_activate() चयनित usertype: {$a} प्रकार का समर्थन नहीं करता हैः';
$string['user_disablenotsupportusertype'] = 'लेखकः  ldap user_disable()  चयनित usertype: {$a} प्रकार का समर्थन नहीं करता है';
$string['useracctctrlerror'] = '{$a} के लिए userAccountControl  प्राप्त करने में त्रुटि';
$string['userentriestoadd'] = 'जोड़ने के लिए उपयोगकर्ता प्रविष्टियाँः {$a}';
$string['userentriestoremove'] = 'हटाई जाने वाली उपयोगकर्ता प्रविष्टियाँः {$a}';
$string['userentriestorevive'] = 'पुनर्जीवित की जाने वाली उपयोगकर्ता प्रविष्टियाँः {$a}';
$string['userentriestoupdate'] = 'अद्यतन की जाने वाली उपयोगकर्ता प्रविष्टियाँः {$a}';
$string['usernotfound'] = 'LDAP में उपयोगकर्ता नहीं मिला';
