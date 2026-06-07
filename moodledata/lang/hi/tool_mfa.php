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
 * Strings for component 'tool_mfa', language 'hi', version '4.4'.
 *
 * @package     tool_mfa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedweight'] = 'प्राप्त वजन';
$string['added'] = 'जोड़ा गया';
$string['alltime'] = 'हर समय';
$string['areyousure'] = 'क्या आप सुनिश्चित हैं कि आप इस कारक को हटाना चाहते हैं?';
$string['cancellogin'] = 'लॉगिन रद्द करना';
$string['combination'] = 'संयोजन';
$string['confirmationreplace'] = 'आपको तुरंत एक और \'{$a}\' स्थापित करने की अपेक्षितता होगी। कृपया सुनिश्चित करें कि आप व्यवस्था, ढांचा प्रक्रम को पूरा करने के लिए तैयार हैं।';
$string['confirmationrevoke'] = 'आप अब इस साइट पर लॉग इन करने के लिए \'{$a}\' का उपयोग नहीं कर पाएंगे।';
$string['connector'] = 'और';
$string['created'] = 'बनाया गया';
$string['createdfromip'] = 'IP से बनाया गया';
$string['debugmode:heading'] = 'डीबग प्रकार, विधा';
$string['devicename'] = 'उपकरण';
$string['email:subject'] = '{$a} में लॉग इन करने में असमर्थ';
$string['enablefactor'] = 'सक्षम कारक';
$string['entercode'] = 'कोड दर्ज करें';
$string['error:actionnotfound'] = 'कार्रवाई \'{$a}\' समर्थित नहीं है';
$string['error:couldnotreplace'] = 'इस कारक को प्रतिस्थापित नहीं कर सके।';
$string['error:directaccess'] = 'इस पृष्ठ को सीधे एक्सेस नहीं किया जाना चाहिए';
$string['error:factornotenabled'] = 'बहु-कारक प्रमाणीकरण कारक \'{$a}\' सक्षम नहीं है';
$string['error:factornotfound'] = 'बहु-कारक प्रमाणीकरण कारक \'{$a}\' नहीं मिला';
$string['error:isguestuser'] = 'यहाँ मेहमानों को जाने की अनुमत नहीं है।';
$string['error:notenoughfactors'] = 'प्रमाणित करने में असमर्थ';
$string['error:reauth'] = 'हम साइट प्रमाणीकरण जमानत नीति को पूरा करने के लिए आपकी पहचान की पर्अथवाप्त मात्रा में पुष्टि नहीं कर सके। <b> यह इस वजह से हो सकता है: <b> 1) चरण बंद हो रहे हैं-कृपअथवा कुछ कार्यवृत्त प्रतीक्षा करें और फिर से प्रअथवास करें। <b> 2) चरण विफल हो रहे हैं-कृपअथवा प्रत्येक चरण के लिए ब्योरा की दो बार जांच करें। <b> 3) चरण छोड़े गए थे-कृपअथवा इस पृष्ठ को फिर से लोड करें अथवा फिर से लॉग इन करने का प्रअथवास करें।';
$string['error:revoke'] = 'कारक को हटा नहीं सकते';
$string['error:setupfactor'] = 'कारक स्थापित नहीं कर सकते';
$string['error:support'] = 'यदि आप अभी भी लॉग इन करने में असमर्थ हैं, अथवा मानते हैं कि आप इसे गलती से देख रहे हैं, तो कृपअथवा ईमेल करें:';
$string['error:wrongfactorid'] = 'कारक आईडी \'{$a}\' गलत है';
$string['event:failfactor'] = 'एक विफल कारक के कारण बहु-कारक प्रमाणीकरण विफल हो गया।';
$string['event:faillockout'] = 'बहुत अधिक प्रयासों के कारण बहु-कारक प्रमाणीकरण विफल हो गया।';
$string['event:failnotenoughfactors'] = 'पर्याप्त संतुष्ट कारकों की कमी के कारण बहु-कारक प्रमाणीकरण विफल हो गया।';
$string['event:userdeletedfactor'] = 'कारक हटा दिया गया';
$string['event:userfailedmfa'] = 'उपयोगकर्ता बहु-कारक प्रमाणीकरण में विफल रहा';
$string['event:userpassedmfa'] = 'सत्यापन पारित किया गया';
$string['event:userrevokedfactor'] = 'कारक निरसन';
$string['event:usersetupfactor'] = 'कारक व्यवस्था, ढांचा';
$string['factor'] = 'कारक';
$string['factorreplace'] = 'कारक \'{$a}\' को सफलतापूर्वक बदल दिया गया।';
$string['factorreport'] = 'सभी कारक प्रतिवेदन';
$string['factorreset'] = 'आपका बहु-कारक प्रमाणीकरण \'{$a-> factor}\' एक साइट प्रशासक द्वारा रीसेट किया गया है। आपको इस कारक को फिर से स्थापित करने की आवश्यकता हो सकती है। {$a-> url}';
$string['factorresetall'] = 'आपके सभी बहु-कारक प्रमाणीकरण कारकों को एक साइट प्रशासक द्वारा रीसेट किया गया है। आपको इन कारकों को फिर से स्थापित करने की आवश्यकता हो सकती है। {$a}';
$string['factorrevoked'] = '\'{$a}\' को सफलतापूर्वक हटा दिया गया।';
$string['factorsetup'] = '\'{$a}\' सफलतापूर्वक स्थापित किया गया।';
$string['fallback'] = 'गिरने का कारक';
$string['fallback_info'] = 'यदि कोई अन्य कारक संरचित नहीं हैं तो यह कारक एक गिरावट है। यह कारक हमेशा विफल रहेगा।';
$string['guidance'] = 'बहु-कारक प्रमाणीकरण उपयोगकर्ता गाइड';
$string['inputrequired'] = 'उपयोगकर्ता इनपुट';
$string['ipatcreation'] = 'IP  सम्बोधन जब कारक बनाया जाता है';
$string['lastused'] = 'अंतिम बार उपयोग किया गया';
$string['lastverified'] = 'अंतिम सत्यापित';
$string['locked'] = '{$a} (अनुपलब्ध)';
$string['lockedusersforallfactors'] = 'बंद उपयोगकर्ताः सभी कारक';
$string['lockedusersforfactor'] = 'बंद उपयोगकर्ताः {$a}';
$string['lockoutnotification'] = 'आपके पास {$a} प्रयास बचे हैं।';
$string['managefactor'] = 'कारक का प्रबंधन करें';
$string['mfa'] = 'बहु-कारक प्रमाणीकरण';
$string['mfa:intro'] = 'लॉग इन करते समय एक अतिरिक्त सत्यापन प्रणाली की आवश्यकता के साथ अपने खाते को सुरक्षित बनाएँ।';
$string['mfa:mfaaccess'] = 'Interact with MFA';
$string['mfareports'] = 'MFA  रिपोर्ट';
$string['mfasettings'] = 'बहु-कारक प्रमाणीकरण का प्रबंधन करें';
$string['na'] = 'एन/ए';
$string['needhelp'] = 'मदद चाहिए?';
$string['nologinusers'] = 'लॉग इन नहीं किया गया है';
$string['nonauthusers'] = 'विचाराधीन MFA';
$string['overall'] = 'कुल मिलाकर';
$string['pending'] = 'विचाराधीन';
$string['performbulk'] = 'थोक कार्रवाई';
$string['pluginname'] = 'बहु-कारक प्रमाणीकरण';
$string['preferences:activefactors'] = 'सक्रिय कारक';
$string['preferences:availablefactors'] = 'उपलब्ध कारक';
$string['preferences:header'] = 'उपलब्ध कारक';
$string['preferenceslink'] = 'उपयोगकर्ता वरीयताओं पर जाने के लिए यहाँ क्लिक करें।';
$string['privacy:metadata:tool_mfa'] = 'संरचित एम. एफ. ए. कारकों के साथ डेटा';
$string['privacy:metadata:tool_mfa:createdfromip'] = 'IP  जिससे कारक स्थापित किया गया था।';
$string['privacy:metadata:tool_mfa:factor'] = 'कारक प्रकार';
$string['privacy:metadata:tool_mfa:id'] = 'रिकॉर्ड ID';
$string['privacy:metadata:tool_mfa:label'] = 'उदाहरण के लिए लेबल कारक, e.g। उपकरण अथवा ईमेल।';
$string['privacy:metadata:tool_mfa:lastverified'] = 'समय उपयोगकर्ता को आखिरी बार इस कारक के साथ सत्यापित किया गया था';
$string['privacy:metadata:tool_mfa:secret'] = 'कारक के लिए कोई गुप्त डेटा';
$string['privacy:metadata:tool_mfa:timecreated'] = 'समय कारक उदाहरण स्थापित किया गया था।';
$string['privacy:metadata:tool_mfa:timemodified'] = 'समय कारक को आखिरी बार संशोधित किया गया था';
$string['privacy:metadata:tool_mfa:userid'] = 'उपयोगकर्ता की ID जो उस कारक से संबंधित है';
$string['privacy:metadata:tool_mfa_auth'] = 'पिछली बार एक उपयोगकर्ता ID के लिए एक सफल बहु-कारक प्रमाणीकरण पंजीकृत किया गया था।';
$string['privacy:metadata:tool_mfa_auth:lastverified'] = 'समय उपयोगकर्ता को आखिरी बार प्रमाणित किया गया था';
$string['privacy:metadata:tool_mfa_auth:userid'] = 'यह टाइमस्टैम्प उपयोगकर्ता से जुड़ा हुआ है।';
$string['privacy:metadata:tool_mfa_secrets'] = 'उपयोगकर्ता प्रमाणीकरण के लिए अस्थायी रहस्य।';
$string['privacy:metadata:tool_mfa_secrets:factor'] = 'यह भेद किस कारक से जुड़ा हुआ है।';
$string['privacy:metadata:tool_mfa_secrets:secret'] = 'गुप्त जमानत कोड।';
$string['privacy:metadata:tool_mfa_secrets:sessionid'] = 'इस भेद से जुड़ा अधिवेशन ID है।';
$string['privacy:metadata:tool_mfa_secrets:userid'] = 'यह भेद उपयोगकर्ता से जुड़ा हुआ है।';
$string['redirecterrordetected'] = 'असमर्थित पुनर्निर्देशित पाया गया, पटकथा निष्पादन समाप्त कर दिया गया। MFA  और {$ए} के बीच पुनर्निर्देशन त्रुटि हुई।';
$string['remove'] = 'हटाएँ';
$string['replace'] = 'प्रतिस्थापन';
$string['replacefactor'] = 'कारक को बदलें';
$string['resetconfirm'] = 'उपयोगकर्ता कारक को पुनः स्थापित करें';
$string['resetfactor'] = 'उपयोगकर्ता प्रमाणीकरण कारकों को रीसेट करें';
$string['resetfactorconfirm'] = 'क्या आप सुनिश्चित हैं कि आप इस कारक को {$a} के लिए रीसेट करना चाहते हैं?';
$string['resetfactorplaceholder'] = 'उपयोगकर्ता नाम अथवा ईमेल';
$string['resetsuccess'] = 'उपयोगकर्ता \'{$a-> factor}\' को \'{$a-> username}\' के लिए सफलतापूर्वक रीसेट करें।';
$string['resetsuccessbulk'] = 'प्रदत्त उपयोगकर्ताओं के लिए कारक \'{$a}\' को सफलतापूर्वक रीसेट करें।';
$string['resetuser'] = 'उपयोगकर्ताः';
$string['revoke'] = 'प्रति-संहरण करना, वापस लेना';
$string['revokefactor'] = 'कारक को हटा दें';
$string['selectfactor'] = 'रीसेट करने के लिए कारक चयन करना:';
$string['selectperiod'] = 'प्रतिवेदन के लिए एक अवलोकन अवधि चयन करना:';
$string['settings:combinations'] = 'लॉगिन के लिए अच्छी शर्तों का सारांश';
$string['settings:debugmode'] = 'डीबग प्रकार, विधा सक्षम करें';
$string['settings:debugmode_help'] = 'डीबग प्रकार, विधा एम. एफ. ए. प्रशासक पृष्ठों पर एक छोटा अधिसूचना झंडा प्रदर्शित करेगा, साथ ही वर्तमान में सक्षम कारकों की जानकारी के साथ उपयोगकर्ता वरीयता पृष्ठ प्रदर्शित करेगा।';
$string['settings:duration'] = 'गुप्त वैधता अवधि';
$string['settings:duration_help'] = 'रहस्य उत्पन्न करने की अवधि वैध है।';
$string['settings:enabled'] = 'MFA प्लगइन सक्षम';
$string['settings:enablefactor'] = 'सक्षम कारक';
$string['settings:enablefactor_help'] = 'एम. एफ. ए. प्रमाणीकरण के लिए कारक का उपयोग करने की अनुमति देना के लिए इस नियंत्रण की जाँच करें।';
$string['settings:general'] = 'सार्वजनिक MFA  सेटिंग्स';
$string['settings:guidancecheck'] = 'मार्गदर्शन, निर्देशन पृष्ठ का उपयोग करें';
$string['settings:guidancecheck_help'] = 'MFA  प्रमाणीकरण पृष्ठों और MFA  वरीयता पृष्ठ पर मार्गदर्शन, निर्देशन पृष्ठ का एक लिंक जोड़ें।';
$string['settings:guidancefiles'] = 'मार्गदर्शन, निर्देशन पृष्ठ फाइलें';
$string['settings:guidancefiles_help'] = 'मार्गदर्शन, निर्देशन पृष्ठ में उपयोग करने के लिए यहाँ कोई भी फ़ाइल जोड़ें, और संपादक में {{फ़ाइलनाम}} (हल किअथवा गअथवा मार्ग) अथवा {{फ़ाइलनाम}} (html  लिंक) का उपयोग करके उन्हें पृष्ठ में एम्बेड करें।';
$string['settings:guidancepage'] = 'मार्गदर्शन, निर्देशन पृष्ठ सामग्री';
$string['settings:guidancepage_help'] = 'HTML  यहाँ मार्गदर्शन, निर्देशन पृष्ठ पर प्रदर्शित किअथवा जाएगा। हल किए गए मार्ग {{फाइलनाम}} के साथ दाखिल करना को एम्बेड करने के लिए दाखिल करनाएरिअथवा से दाखिल करनानाम दर्ज करें अथवा {{दाखिल करनानाम}} का उपयोग करके HTML  लिंक के रूप में दर्ज करें।';
$string['settings:lockout'] = 'तालाबंदी की सीमा';
$string['settings:lockout_help'] = 'लॉग इन करने से रोकने से पहले उपयोगकर्ता इनपुट कारकों का जवाब देने के कई प्रयास कर सकता है।';
$string['settings:redir_exclusions'] = 'URLS जिन्हें MFA  चेक को पुनर्निर्देशित नहीं करना चाहिए।';
$string['settings:redir_exclusions_help'] = 'प्रत्येक नई पंक्ति सिटरूट से एक सापेक्ष URL है जिसके लिए MFA  चेक से पुनर्निर्देशित नहीं होगा।';
$string['settings:weight'] = 'कारक वजन';
$string['settings:weight_help'] = 'यदि इस कारक का वजन बीत जाता है। लॉग इन करने के लिए उपयोगकर्ता को कम से कम 100 अंकों की आवश्यकता होती है।';
$string['setup'] = 'व्यवस्था, ढांचा';
$string['setupfactor'] = 'कारक निर्धारित करें';
$string['setuprequired'] = 'उपयोगकर्ता व्यवस्था, ढांचा';
$string['state:fail'] = 'असफल';
$string['state:locked'] = 'बंद';
$string['state:neutral'] = 'तटस्थ';
$string['state:pass'] = 'पास करें';
$string['state:unknown'] = 'अज्ञात';
$string['subplugintype_factor'] = 'कारक प्रकार';
$string['subplugintype_factor_plural'] = 'कारक प्रकार';
$string['totalusers'] = 'कुल उपयोगकर्ता';
$string['totalweight'] = 'कुल वजन';
$string['userempty'] = 'उपयोगकर्ता खाली नहीं हो सकता है।';
$string['userlogs'] = 'उपयोगकर्ता लॉग';
$string['usernotfound'] = 'उपयोगकर्ता का पता लगाने में असमर्थ।';
$string['usersauthedinperiod'] = 'लॉग इन किया';
$string['verification'] = '2-चरणीय सत्यापन';
$string['verification_desc'] = 'अपने खाते को सुरक्षित रखने के लिए, हमें यह जांचने की आवश्यकता है कि यह वास्तव में आप हैं।';
$string['verificationcode'] = 'सत्यापन कोड';
$string['verificationcode_help'] = 'प्रचलित प्रमाणीकरण कारक द्वारा बशर्ते, यह कि सत्यापन कोड।';
$string['verifyalt'] = 'सत्यापित करना के लिए दूसरा तरीका आज़माएँः';
$string['weight'] = 'वजन';
$string['yesremove'] = 'हाँ, हटाएँ';
$string['yesreplace'] = 'हाँ, प्रतिस्थापित करें';
