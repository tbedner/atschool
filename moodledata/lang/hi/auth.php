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
 * Strings for component 'auth', language 'hi', version '4.4'.
 *
 * @package     auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'उपलब्ध प्रमाणीकरण प्लगइन्स';
$string['allowaccountssameemail'] = 'एक जैसे ईमेल वाले खातों को अनुमति दें';
$string['allowaccountssameemail_desc'] = 'यदि सक्षम है, तो एक से अधिक उपयोगकर्ता खाते एक ही ईमेल पते को साझा कर सकते हैं। इसके परिणामस्वरूप जमानत अथवा गोपनीयता के मुद्दे हो सकते हैं, उदाहरण के लिए पासवर्ड परिवर्तन पुष्टि करना ईमेल के साथ।';
$string['alternatelogin'] = 'यदि आप यहाँ एक URL दर्ज करते हैं, तो इसका उपयोग इस साइट के लिए लॉगिन पेज के रूप में किया जाएगा। पृष्ठ में एक प्रपत्र होना चाहिए जिसमें क्रिया गुण <strong> \'{$a}\' </strong> पर सेट किया गया है और <strong> उपयोगकर्ता नाम </strong> और <strong> पासवर्ड </strong> को वापस करता है। सावधान रहें कि गलत URL दर्ज न करें क्योंकि आप खुद को इस साइट से बाहर कर सकते हैं। चूकना लॉगिन पृष्ठ का उपयोग करने के लिए इस सेटिंग को खाली छोड़ दें।';
$string['alternateloginurl'] = 'वैकल्पिक लॉगिन यूआरएल';
$string['auth_changepasswordhelp'] = 'पासवर्ड बदलने में सहायता';
$string['auth_changepasswordhelp_expl'] = 'उन उपयोगकर्ताओं के लिए खोए हुए पासवर्ड सहायता प्रदर्शित करें जिन्होंने अपना {$a} पासवर्ड खो दिअथवा है। यह <strong> पासवर्ड URL बदलें </strong> अथवा आंतरिक मूडल पासवर्ड परिवर्तन के साथ अथवा उसके बजाय प्रदर्शित किअथवा जाएगा।';
$string['auth_changepasswordurl'] = 'पासवर्ड बदलने का यूआरएल';
$string['auth_changepasswordurl_expl'] = 'जिन उपयोगकर्ताओं ने अपना {$a} पासवर्ड खो दिया है, उन्हें भेजने के लिए यूआरएल विनिर्देश करना। <मजबूत> उपयोग स्तर पासवर्ड पृष्ठ </मजबूत> को <strong> नहीं </strong> पर सेट करें।';
$string['auth_changingemailaddress'] = 'आपने ईमेल पते को {$a-> oldemail} से {$a-> newemail} में बदलने का अनुरोध किया। जमानत कारणों से, हम आपको आपके नए पते पर एक सन्देश, सूचना भेज रहे हैं ताकि यह पुष्टि करना की जा सके कि यह आपका है। जैसे ही आप सन्देश, सूचना में भेजे गए यूआरएल को खोलेंगे, आपका ईमेल सम्बोधन अपडेट हो जाएगा। पुष्टि करना लिंक 10 कार्यवृत्त में समाप्त हो जाएगा।';
$string['auth_common_settings'] = 'सामान्य सेटिंग';
$string['auth_data_mapping'] = 'डेटा मानचित्रण';
$string['auth_fieldlock'] = 'वैल्यू को लॉक करें';
$string['auth_fieldlock_expl'] = '<p> लॉक मान: यदि सक्षम है, तो उपयोगकर्ता क्षेत्र को संपादित करने में सक्षम नहीं होंगे। यदि आप इस डेटा को बाहरी ऑथ सिस्टम में बनाए रख रहे हैं तो इस विकल्प का उपयोग करें।</p>';
$string['auth_fieldlockfield'] = '({$a}) वैल्यू को लॉक करें';
$string['auth_fieldlocks'] = 'उपयोगकर्ता फ़ील्ड लॉक करें';
$string['auth_fieldlocks_help'] = '<p>आप उपयोगकर्ता डेटा क्षेत्रों को लॉक कर सकते हैं। यह उन साइटों के लिए उपयोगी है जहां उपयोगकर्ता डेटा प्रशासकों द्वारा उपयोगकर्ता रिकॉर्ड को संपादित करके अथवा \'अपलोड उपयोगकर्ता\' सुविधा का उपयोग करके अपलोड करके मैन्युअल रूप से बनाए रखा जाता है। यदि आप उन क्षेत्रों को लॉक कर रहे हैं जिनकी मॉड्यूल द्वारा अपेक्षितता है, तो सुनिश्चित करें कि आप उपयोगकर्ता खाते बनाते समय वह डेटा प्रदान करते हैं अथवा खाते अनुपयोगी होंगे। </p><p> इस समस्अथवा से बचने के लिए लॉक प्रकार, विधा को \'अनलॉक यदि खाली है\' पर सेट करने पर विचार करें। </p>';
$string['auth_fieldmapping'] = 'डेटा मानचित्रण ({$a})';
$string['auth_invalidnewemailkey'] = 'त्रुटि: यदि आप ईमेल पते में परिवर्तन की पुष्टि की कोशिश कर रहे हैं, तो आपने ईमेल द्वारा भेजे गए URL की कॉपी बनाने में गलती की होगी। कृपया पते को कॉपी करें और फिर से कोशिश करें।';
$string['auth_loginpasswordtoggle'] = 'पासवर्ड दृश्यता टॉगल';
$string['auth_loginpasswordtoggle_desc'] = 'लॉगिन स्क्रीन पर पासवर्ड फ़ील्ड में एक आइकन जोड़ें जो उपयोगकर्ताओं को अपना दर्ज पासवर्ड दिखाने अथवा छिपाने की अनुमति देता है।';
$string['auth_loginrecaptcha'] = 'लॉगिन के लिए पुनःप्राप्ति सक्षम करें';
$string['auth_multiplehosts'] = 'एकाधिक होस्ट या पते निर्दिष्ट किए जा सकते हैं (जैसे host1.com; host2.com; host3.com) या (जैसे xxx.xxx.xxx.xxx; xxx.xxx.xxx.xxx)';
$string['auth_notconfigured'] = 'प्रमाणीकरण विधि {$a} व्यवस्थित नहीं है।';
$string['auth_outofnewemailupdateattempts'] = 'आप अपना ईमेल पता अपडेट करने के अधिकतम प्रयासों की सीमा पार कर चुके हैं। आपका अपडेट अनुरोध रद्द कर दिया गया है।';
$string['auth_passwordisexpired'] = 'आपके पासवर्ड की अवधि समाप्त हो चुकी है। कृपया अभी इसे बदलें।';
$string['auth_passwordwillexpire'] = 'आपका पासवर्ड {$a} दिनों में समाप्त हो जायेगा। क्या आप इसे अभी बदलना चाहते हैं?';
$string['auth_remove_delete'] = 'अभ्यंतर को पूर्णतः हटाएं';
$string['auth_remove_keep'] = 'अभ्यंतर को रखें';
$string['auth_remove_suspend'] = 'अभ्यंतर को निष्काषित करें';
$string['auth_remove_user'] = 'विनिर्देश करना कि बड़े पैमाने पर समन्वय के दौरान आंतरिक उपयोगकर्ता खाते के साथ क्या करना है जब उपयोगकर्ता को बाहरी उद्गम से हटा दिया गया था। केवल निलंबित उपयोगकर्ताओं को स्वचालित रूप से बहाल किया जाता है यदि वे बाहरी उद्गम में फिर से दिखाई देते हैं।';
$string['auth_remove_user_key'] = 'बाहरी उपयोगकर्ता हटाया गया';
$string['auth_sync_script'] = 'उपयोगकर्ता खाता सिंक्रनाइज़ेशन';
$string['auth_sync_suspended'] = 'सक्षम होने पर, निलंबित विशेषता का उपयोग स्थानीय उपयोगकर्ता खाते के निलंबन स्थिति को अपडेट करने के लिए किया जाएगा।';
$string['auth_sync_suspended_key'] = 'स्थानीय उपयोगकर्ता निलंबन स्थिति को सिंक्रनाइज़ करें';
$string['auth_updatelocal'] = 'स्थानीय अपडेट करें';
$string['auth_updatelocal_expl'] = '<p> <b> अद्यतन स्थानीय: </b> यदि सक्षम किअथवा जाता है, तो हर बार जब उपयोगकर्ता लॉग इन करता है अथवा कोई उपयोगकर्ता सिंक्रोनाइजेशन होता है तो क्षेत्र को अद्यतन (बाहरी लेखक से) किअथवा जाएगा। स्थानीय रूप से अद्यतन के लिए निर्धारित क्षेत्रों को बंद किअथवा जाना चाहिए।';
$string['auth_updatelocalfield'] = '({$a}) स्थानीय अपडेट करें';
$string['auth_updateremote'] = 'बाहरी अपडेट करें';
$string['auth_updateremote_expl'] = '<p> <b> अद्यतन बाहरीः </b> यदि सक्षम है, तो उपयोगकर्ता अभिलेख अद्यतन होने पर बाहरी लेखक अद्यतन हो जाएगा। संपादन की अनुमति देना के लिए क्षेत्रों को खोला जाना चाहिए।';
$string['auth_updateremote_ldap'] = '<p> <b> नोट: </b> बाहरी LDAP डेटा को अद्यतन के लिए आवश्यक है कि आप सभी उपयोगकर्ता रिकॉर्ड में संपादन विशेषाधिकारों के साथ एक बाइंड-उपयोगकर्ता को बाइंडएन और बाइंडपीडब्ल्यू सेट करें। यह वर्तमान में बहु-मूल्यवान विशेषताओं को संरक्षित नहीं करता है, और अद्यतन पर अतिरिक्त मूल्यों को हटा देगा।';
$string['auth_updateremotefield'] = '({$a}) बाहरी अपडेट करें';
$string['auth_user_create'] = 'उपयोगकर्ता निर्माण सक्रिय करें';
$string['auth_user_creation'] = 'नए (अज्ञात) उपयोगकर्ता बाहरी प्रमाणीकरण उद्गम पर उपयोगकर्ता खाते बना सकते हैं और ईमेल के माध्यम से पुष्टि कर सकते हैं। यदि आप इसे सक्षम करते हैं, तो उपयोगकर्ता निर्माण के लिए मॉड्यूल-विशिष्ट विकल्पों को भी कॉन्फ़िगर करना याद रखें।';
$string['auth_usernameexists'] = 'चयनित उपयोगकर्ता नाम पहले से मौजूद है। कृपया नए नाम का चयन करें';
$string['auth_usernotexist'] = 'गैर-मौजूद उपयोगकर्ता को अद्यतन नहीं कर सकतेः {$a}';
$string['authenticationoptions'] = 'प्रमाणीकरण के विकल्प';
$string['authinstructions'] = 'लॉगिन पृष्ठ पर प्रदर्शित होने वाले चूकना लॉगिन निर्देशों के लिए इसे खाली छुट्टी की दरखास्त यदि आप कस्टम लॉगिन निर्देश प्रदान करना चाहते हैं, तो उन्हें यहाँ दर्ज करें।';
$string['authloginviaemail'] = 'ईमेल के द्वारा लोग इन की अनुमति दें';
$string['authloginviaemail_desc'] = 'साइट लॉगिन के लिए उपयोगकर्ताओं को उपयोगकर्ता नाम और ईमेल (यदि अद्वितीय है) दोनों का उपयोग करने की अनुमति दें';
$string['auto_add_remote_users'] = 'दूरस्थ उपयोगकर्ताओं को स्वचालित रूप से जोड़ें';
$string['cannotmapfield'] = 'क्षेत्र "{$a-> fieldname}" का मानचित्रण नहीं किया जा सकता है क्योंकि इसका संक्षिप्त नाम "{$a-> shortname}" बहुत लंबा है। इसे मानचित्रित करने की अनुमति देना के लिए, आपको संक्षिप्त नाम को {$a-> charlimit} वर्णों में कम करना की आवश्यकता है। <a href = "{$a-> link}"> उपयोगकर्ता प्रोफ़ाइल क्षेत्रों </a> को संपादित करें';
$string['changepassword'] = 'पासवर्ड बदलने के यूआरएल';
$string['changepasswordhelp'] = 'खोए हुए पासवर्ड पुन:प्राप्ति पृष्ठ का URL , जो उपयोगकर्ताओं को एक ईमेल में भेजा जाएगा। ध्यान दें कि यदि प्रमाणीकरण सामान्य सेटिंग्स में एक भुला दिया गया पासवर्ड URL सेट किया जाता है तो इस सेटिंग का कोई प्रभाव नहीं पड़ेगा।';
$string['chooseauthmethod'] = 'प्रमाणीकरण विधि चुनें';
$string['chooseauthmethod_help'] = '<p align="center"><strong>ऑथेन्टिकेशन का तरीका बदलना</strong></p>

<p>इस मेन्यू का प्रयोग् करके आप इस यूज़र के लिये ऑथेन्टिकेशन का तरीका बदल सकते हैं।</p>

<p>क्रिपया इस बात से अवगत रहें कि यह इस पर निर्भर है कि आपने साइट के लिये कौन से ऑथेन्टिकेशन के तरीका सेट किये हैं और आप किन सेटिंग्स का प्रयोग कर रहे हैं।</p>

<p>यहां पर गलत बदलाव करने पर हो सकत है कि यह यूज़र लॉग-इन ना कर पाये या अपना एकाउन्ट पूरी तरह से डिलीट् ना कर पाये।  इसलिये इसका प्रयोग तभी करें अगर आपको पता है कि आप क्या कर रहें हैं।</p>';
$string['createpassword'] = 'पासवर्ड बनाएं और उपयोगकर्ता को सूचित करें';
$string['createpasswordifneeded'] = 'यदि आवश्यक हो तो पासवर्ड बनाएं और ईमेल के माध्यम से भेजें';
$string['emailchangecancel'] = 'ईमेल परिवर्तन रद्द करें';
$string['emailchangepending'] = 'परिवर्तन लंबित है। {$a->preference_newemail} पर आपको भेजे गए लिंक को खोलें।';
$string['emailnowexists'] = 'आपने अपने प्रोफ़ाइल को जो ईमेल सम्बोधन देने की कोशिश की थी, वह आपके मूल अनुरोध के बाद से किसी और को सौंपा गया है। ईमेल सम्बोधन बदलने के लिए आपका अनुरोध एतद्द्वारा रद्द कर दिया गया है, लेकिन आप एक अलग पते के साथ फिर से कोशिश कर सकते हैं।';
$string['emailupdate'] = 'ईमेल पता अपडेट करें';
$string['emailupdatesuccess'] = 'उपयोगकर्ता का ईमेल सम्बोधन <em> {$a-> fullname} </em> को <em> {$a-> email} </em> में सफलतापूर्वक अद्यतन किया गया था।';
$string['emailupdatetitle'] = '{$a->site} पर ईमेल अपडेट की पुष्टि';
$string['errormaxconsecutiveidentchars'] = 'पासवर्डों में लगभग {$a} लगातार समान वर्ण होने चाहिए।';
$string['errorminpassworddigits'] = 'पासवर्ड में कम से कम {$a} अंक होने चाहिए।';
$string['errorminpasswordlength'] = 'पासवर्ड कम से कम {$a} वर्ण लम्बा होने चाहिए।';
$string['errorminpasswordlower'] = 'पासवर्ड कम से कम {$a} छोटे अक्षर होने चाहिए।';
$string['errorminpasswordnonalphanum'] = 'पासवर्ड में कम से कम {$a} गैर-अक्षरांकीय वर्ण होने चाहिए जैसे कि *, -, or #';
$string['errorminpasswordupper'] = 'पासवर्ड कम से कम {$a} बड़े अक्षर होने चाहिए।';
$string['errorpasswordreused'] = 'यह पासवर्ड पहले इस्तेमाल किया गया है, और इसे फिर से उपयोग करने की अनुमति नहीं है';
$string['errorpasswordupdate'] = 'पासवर्ड अपडेट करने में त्रुटि हुई, पासवर्ड नहीं बदल गया';
$string['eventuserloggedin'] = 'उपयोगकर्ता ने लॉग इन किया है';
$string['eventuserloggedinas'] = 'उपयोगकर्ता ने दूसरे उपयोगकर्ता के रूप में लॉग इन किया है';
$string['eventuserloginfailed'] = 'उपयोगकर्ता लॉगिन विफल हुआ';
$string['forcechangepassword'] = 'बलपूर्वक पासवर्ड बदलें';
$string['forcechangepassword_help'] = 'Moodle पर अपने अगले लॉगिन पर उपयोगकर्ताओं का अपने पासवर्ड बदलने के लिए मजबूर करें।';
$string['forcechangepasswordfirst_help'] = 'उपयोगकर्ताओं को अपने पहले लॉगिन पर पासवर्ड बदलने के लिए मजबूर करें।';
$string['forgottenpassword'] = 'यदि आप यहाँ एक URL दर्ज करते हैं, तो इसका उपयोग इस साइट के लिए खोए हुए पासवर्ड पुन:प्राप्ति पृष्ठ के रूप में किया जाएगा। यह उन साइटों के लिए है जहाँ पासवर्ड को पूरी तरह से मूडल के बाहर संभाला अभिप्रेत है। चूकना पासवर्ड पुन:प्राप्ति का उपयोग करने के लिए इसे खाली छुट्टी की दरखास्त';
$string['forgottenpasswordurl'] = 'भूले हुए पासवर्ड के लिए यूआरएल';
$string['getrecaptchaapi'] = 'reCAPTCHA का उपयोग करने के लिए आपको एक API कुंजी प्राप्त करनी होगी <a href=\'https://www.google.com/recaptcha/admin\'>https://www.google.com/recaptcha/admin</a>';
$string['guestloginbutton'] = 'अतिथि लॉगिन बटन';
$string['incorrectpleasetryagain'] = 'गलत। कृपया पुन: प्रयास करें।';
$string['infilefield'] = 'फ़ाइल में आवश्यक फ़ील्ड';
$string['informminpassworddigits'] = 'कम से कम {$a} अंक';
$string['informminpasswordlength'] = 'कम से कम {$a} वर्ण';
$string['informminpasswordlower'] = 'कम से कम {$a} छोटे अक्षर';
$string['informminpasswordnonalphanum'] = 'कम से कम {$a} गैर-अक्षरांकीय वर्ण जैसे कि *, -, या #';
$string['informminpasswordreuselimit'] = '{$a} परिवर्तनों के बाद पासवर्ड का पुन: उपयोग किया जा सकता है';
$string['informminpasswordupper'] = 'कम से कम {$a} बड़े अक्षर';
$string['informpasswordpolicy'] = 'पासवर्ड में {$a} होना चाहिए';
$string['instructions'] = 'निर्देश';
$string['internal'] = 'अभ्यंतर';
$string['limitconcurrentlogins'] = 'एक साथ होने वाला लॉगिन को सीमित करें';
$string['limitconcurrentlogins_desc'] = 'यदि सक्षम है तो प्रत्येक उपयोगकर्ता के लिए एक साथ होने वाला ब्राउज़र लॉगिन की संख्या प्रतिबंधित, सीमित है। सबसे पुराना अधिवेशन सीमा तक पहुँचने के बाद समाप्त हो जाता है, कृपया ध्यान दें कि उपयोगकर्ता सभी असुरक्षित काम खो सकते हैं। यह सेटिंग एकल साइन-ऑन (SSO) प्रमाणीकरण प्लगइन्स के साथ संगत नहीं है।';
$string['locked'] = 'लॉक्ड';
$string['md5'] = 'MD5 एन्क्रिप्शन्';
$string['nopasswordchange'] = 'पासवर्ड बदला नहीं जा सकता है।';
$string['nopasswordchangeforced'] = 'आप अपना पासवर्ड बदले बिना आगे नहीं बढ़ सकते हैं, तथापि इसे बदलने के लिए कोई पृष्ठ उपलब्ध नहीं है। कृपया अपने मॉड्यूल प्रशासक से संपर्क करें।';
$string['noprofileedit'] = 'प्रोफ़ाइल को संपादित नहीं किया जा सकता है';
$string['ntlmsso_attempting'] = 'NTLM के माध्यम से एकल चिन्ह लगाने का प्रयास करना...';
$string['ntlmsso_failed'] = 'ऑटो-लॉगिन विफल हो गया, सामान्य लॉगिन पृष्ठ का प्रयास करें...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO अक्षम है।';
$string['passwordhandling'] = 'पासवर्ड क्षेत्र हैंडलिंग';
$string['plaintext'] = 'सादा टेक्स्ट';
$string['pluginnotenabled'] = 'प्रमाणीकरण प्लगइन \'{$a}\' सक्षम नहीं है।';
$string['pluginnotinstalled'] = 'प्रमाणीकरण प्लगइन \'{$a}\' स्थापित नहीं है।';
$string['potentialidps'] = 'अपने खाते का उपयोग करके लॉग इन करें:';
$string['privacy:metadata:userpref:createpassword'] = 'संकेत देता है कि उपयोगकर्ता के लिए एक पासवर्ड उत्पन्न किया जाना चाहिए';
$string['privacy:metadata:userpref:forcepasswordchange'] = 'संकेत देता है कि लॉग इन करने पर उपयोगकर्ता को अपना पासवर्ड बदलना चाहिए या नहीं';
$string['privacy:metadata:userpref:loginfailedcount'] = 'कितनी बार उपयोगकर्ता लॉग इन करने में विफल रहा';
$string['privacy:metadata:userpref:loginfailedlast'] = 'जिस तारीख को लॉगिन करने का अंतिम असफल प्रयास दर्ज किया गया था';
$string['privacy:metadata:userpref:loginlockout'] = 'क्या लॉगिन करने के असफल प्रयासों के कारण उपयोगकर्ता का खाता बंद है, और जिस तारीख को खाता बंद किया गया था';
$string['privacy:metadata:userpref:loginlockoutignored'] = 'संकेत देता है कि किसी उपयोगकर्ता के खाते में कभी भी तालाबंदी नहीं होनी चाहिए';
$string['privacy:metadata:userpref:loginlockoutsecret'] = 'जब ताला लगाया जाता है, तो उपयोगकर्ता को अपने खाते को खोलने के लिए किस भेद का उपयोग करना चाहिए';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = 'CAPTCHA स्वचालित कार्यक्रमों से दुरुपयोग को रोकने के लिए है। यह सत्अथवापित करना के लिए निर्देशों का पालन करें कि आप एक व्यक्ति हैं। यह जाँचने के लिए एक बॉक्स, एक छवि में प्रस्तुत वर्ण हो सकते हैं जिन्हें आपको दर्ज करना चाहिए अथवा चयन करना के लिए छवियों का एक सेट हो सकता है। यदि आप सुनिश्चित नहीं हैं कि चित्र क्अथवा हैं, तो आप एक और CAPTCHA अथवा ऑडियो CAPTCHA प्राप्त करने की कोशिश कर सकते हैं।';
$string['recaptcha_link'] = 'auth/email';
$string['security_question'] = 'सुरक्षा प्रश्न';
$string['selfregistration'] = 'स्व-पंजीकरण';
$string['selfregistration_help'] = 'यदि ईमेल-आधारित स्व-पंजीकरण जैसे प्रमाणीकरण प्लगइन का चयन किअथवा जाता है, तो यह संभावित उपयोगकर्ताओं को खुद को रजिस्टर और खाते बनाने में सक्षम बनाता है। इसके परिणामस्वरूप स्पैमर्स द्वारा फोरम पोस्ट, ब्लॉग प्रविष्टियों आदि का उपयोग करने के लिए खाते बनाने की संभावना होती है। स्पैम के लिए। इस जोखिम से बचने के लिए, स्व-पंजीकरण को <em> अनुमत ईमेल डोमेन </em> सेटिंग द्वारा अक्षम अथवा सीमित किअथवा जाना चाहिए।';
$string['settingmigrationmismatch'] = 'प्लगइन सेटिंग नामों को सही करते समय मानों में बेमेल पाया गया! प्रमाणीकरण प्लगइन \'{$a-> plugin}\' में सेटिंग \'{$a-> setting}\' को विरासत के नाम अधीन \'{$a-> legacy}\' और चालू, प्रचलित नाम अधीन \'{$a-> current}\' में कॉन्फ़िगर किया गया था। बाद वाला मान वैध के रूप में निर्धारित किया गया है लेकिन आपको जांच करनी चाहिए और पुष्टि चाहिए कि यह अपेक्षित है।';
$string['sha1'] = 'SHA-1 हैश';
$string['showguestlogin'] = 'आप लॉगिन पृष्ठ पर अतिथि लॉगिन बटन को छुपा अथवा दिखा सकते हैं।';
$string['stdchangepassword'] = 'पासवर्ड बदलने के लिए स्तर पृष्ठ का उपयोग करें';
$string['stdchangepassword_expl'] = 'यदि बाहरी प्रमाणीकरण तंत्र मूडल की वजह से, के बाहर, में से, से होकर, के द्वारा पासवर्ड बदलने की अनुमति देती है, तो इसे "हाँ" में बदल दें। यह सेटिंग \'पासवर्ड URL बदलें\' को ओवरराइड करती है।';
$string['stdchangepassword_explldap'] = 'दृष्टव्‍य: यह अनुशंसा की जाती है कि आप एक SSL  एन्क्रिप्टेड सुरंग (ldaps://) के ऊपर LDAP  का उपयोग करें यदि LDAP सर्वर दूरस्थ है।';
$string['suspended'] = 'निलंबित खाता';
$string['suspended_help'] = 'निलंबित उपयोगकर्ता खाते वेब सेवाओं में लॉग इन अथवा उपयोग नहीं कर सकते हैं, और किसी भी आउटगोइंग संदेश को अस्वीकार कर दिअथवा जाता है।';
$string['testsettings'] = 'परीक्षण सेटिंग्स';
$string['testsettingsheading'] = 'परीक्षण प्रमाणीकरण सेटिंग्स-{$a}';
$string['unlocked'] = 'खोला गया';
$string['unlockedifempty'] = 'खाली होने पर खोलें';
$string['update_never'] = 'कभी नहीं';
$string['update_oncreate'] = 'सृष्टि पर';
$string['update_onlogin'] = 'प्रत्येक लॉगिन पर';
$string['update_onupdate'] = 'अद्यतन पर';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate()  चयनित उपयोगकर्ता प्रकार का समर्थन नहीं करता हैः {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() चयनित उपयोगकर्ता प्रकार (.. अभी तक) का समर्थन नहीं करता है';
$string['username'] = 'उपयोगकर्ता नाम';
$string['username_help'] = 'कृपया ध्यान रखें कि कुछ प्रमाणीकरण प्लगइन आपको उपयोगकर्ता नाम बदलने की अनुमति देना नहीं देंगे।';
