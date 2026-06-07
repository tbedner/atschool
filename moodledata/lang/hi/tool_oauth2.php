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
 * Strings for component 'tool_oauth2', language 'hi', version '4.4'.
 *
 * @package     tool_oauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptrisk'] = 'मैं समझता हूं कि ईमेल सत्यापन को अक्षम करना एक जमानत संतान हो सकता है।';
$string['acceptrisk_help'] = 'ईमेल सत्यापन को अक्षम करने से संभावित रूप से उपयोगकर्ता को दूसरे उपयोगकर्ता के रूप में प्रमाणीकृत करने की अनुमति देना मिल सकती है।';
$string['authconfirm'] = 'यह कार्रवाई प्रमाणित खाते के लिए मॉड्यूल तक स्थायी एपीआई पहुँच प्रदान करेगी। इसका उपयोग मॉड्यूल के स्वामित्व वाली फ़ाइलों के प्रबंधन के लिए एक सिस्टम खाते के रूप में किया जाना है।';
$string['authconnected'] = 'सिस्टम खाता अब ऑफ़लाइन पहुँच के लिए संबद्ध है';
$string['authnotconnected'] = 'सिस्टम खाता ऑफ़लाइन पहुँच के लिए जुड़ा नहीं था';
$string['clever_service'] = 'चतुर';
$string['configured'] = 'संरचित';
$string['configuredstatus'] = 'संरचित';
$string['connectsystemaccount'] = 'सिस्टम खाते से जुड़ें';
$string['createfromtemplate'] = 'एक अस्थायी से एक oauth 2 सेवा बनाएँ';
$string['createfromtemplatedesc'] = 'नीचे दिए गए OAuth 2 सेवा टेम्पलेट्स में से किसी एक को चुनकर, ज्ञात सेवा प्रकारों में से किसी एक के लिए मान्य कॉन्फ़िगरेशन के साथ एक OAuth सेवा बनाएं। इससे OAuth 2 सेवा बन जाएगी, जिसमें प्रमाणीकरण के लिए आवश्यक सभी सही एंड पॉइंट्स और पैरामीटर होंगे, हालांकि इसका उपयोग करने से पहले आपको नई सेवा के लिए क्लाइंट आईडी और सीक्रेट दर्ज करना होगा।';
$string['createnewendpoint'] = 'जारीकर्ता "{$a}" के लिए नया अंतिम बिंदु बनाएँ';
$string['createnewservice'] = 'नई सेवाएँ बनाएँः';
$string['createnewuserfieldmapping'] = 'जारीकर्ता "{$a}" के लिए नया उपयोगकर्ता क्षेत्र मानचित्रण बनाएँ';
$string['custom_service'] = 'प्रथा';
$string['deleteconfirm'] = 'क्या आप सुनिश्चित हैं कि आप पहचान जारीकर्ता "{$a}" को हटाना चाहते हैं? इस जारीकर्ता पर निर्भर कोई भी प्लगइन काम करना बंद कर देगा।';
$string['deleteendpointconfirm'] = 'क्या आप सुनिश्चित हैं कि आप जारीकर्ता "{$a-> issuer}" के लिए अंतिम बिंदु "{$a-> endpoint}" को हटाना चाहते हैं? इस अंतिम बिंदु पर निर्भर कोई भी प्लगइन काम करना बंद कर देगा।';
$string['deleteuserfieldmappingconfirm'] = 'क्या आप सुनिश्चित हैं कि आप जारीकर्ता "{$a}" के लिए उपयोगकर्ता क्षेत्र मानचित्रण को हटाना चाहते हैं?';
$string['discovered'] = 'सेवा की खोज सफल रही';
$string['discovered_help'] = 'खोज का मतलब है कि OAuth  2 अंतिम बिंदुओं को स्वचालित रूप से OAuth सेवा के लिए मूल URL  से निर्धारित किया जा सकता है। सभी सेवाओं को "खोजने" की अपेक्षितता नहीं है, लेकिन यदि वे नहीं हैं, तो अंतिम बिंदुओं और उपयोगकर्ता मानचित्रण जानकारी को मैन्युअल रूप से दर्ज करने की अपेक्षितता होगी।';
$string['discoverystatus'] = 'खोज';
$string['editendpoint'] = 'अंतिम बिंदु संपादित करेंः जारीकर्ता {$a-> issuer} के लिए {$a-> endpoint}';
$string['editendpoints'] = 'अंतिम बिंदुओं को कॉन्फ़िगर करें';
$string['editissuer'] = 'पहचान जारीकर्ता को संपादित करेंः {$a}';
$string['edituserfieldmapping'] = 'जारीकर्ता {$a} के लिए उपयोगकर्ता क्षेत्र मानचित्रण को संपादित करें';
$string['edituserfieldmappings'] = 'उपयोगकर्ता क्षेत्र मानचित्रण को कॉन्फ़िगर करें';
$string['endpointdeleted'] = 'अंतिम बिंदु हटा दिया गया';
$string['endpointname'] = 'नाम';
$string['endpointname_help'] = 'इस अंतिम बिंदु को खोजने के लिए उपयोग की जाने वाली कुंजी। "अंतिम बिंदु" के साथ समाप्त होना चाहिए।';
$string['endpointsforissuer'] = 'जारीकर्ता के लिए अंतिम बिंदुः {$a}';
$string['endpointurl_help'] = 'इस अंतिम बिंदु के लिए URL  आपको https:// उपसंधि का उपयोग करना होगा।';
$string['facebook_service'] = 'फेसबुक';
$string['google_service'] = 'गूगल';
$string['imsobv2p1_service'] = 'खुले बैज';
$string['issueralloweddomains'] = 'लॉगिन डोमेन';
$string['issueralloweddomains_help'] = 'यदि सेट किया गया है, तो यह सेटिंग डोमेन की एक अल्पविराम अलग सूची है जिसमें लॉगिन इस प्रदाता का उपयोग करते समय सीमित होंगे।';
$string['issueralloweddomains_link'] = 'OAuth_2_login_domains';
$string['issuerbaseurl'] = 'सेवा मूल URL';
$string['issuerbaseurl_help'] = 'सेवा तक पहुँचने के लिए उपयोग किया जाने वाला मूल URL';
$string['issuerclientid'] = 'सेवार्थ ग्राहक ID';
$string['issuerclientid_help'] = 'इस जारीकर्ता के लिए outh क्लाइंट ID';
$string['issuerclientsecret'] = 'सेवार्थ ग्राहक का भेद';
$string['issuerclientsecret_help'] = 'इस जारीकर्ता के लिए ओथ क्लाइंट भेद।';
$string['issuerdeleted'] = 'पहचान जारीकर्ता हटा दिया गया';
$string['issuerdisabled'] = 'पहचान जारीकर्ता अक्षम';
$string['issuerenabled'] = 'पहचान जारीकर्ता सक्षम';
$string['issuerimage'] = 'लोगो URL';
$string['issuerimage_help'] = 'इस जारीकर्ता के लिए एक लोगो दिखाने के लिए उपयोग किया जाने वाला एक छवि URL लॉगिन पृष्ठ पर प्रदर्शित किया जा सकता है।';
$string['issuerloginpagename'] = 'लॉगिन पृष्ठ पर प्रदर्शित नाम';
$string['issuerloginpagename_help'] = 'यदि निर्दिष्ट किया जाता है, तो इस नाम का उपयोग सेवा नाम के बजाय लॉगिन पृष्ठ पर किया जाएगा।';
$string['issuerloginparams'] = 'लॉगिन अनुरोध में अतिरिक्त मापदंड शामिल हैं।';
$string['issuerloginparams_help'] = 'कुछ प्रणालियों को उपयोगकर्ता के मूल प्रोफ़ाइल को पढ़ने के लिए लॉगिन अनुरोध के लिए अतिरिक्त मापदंडों की आवश्यकता होती है।';
$string['issuerloginparamsoffline'] = 'ऑफ़लाइन पहुँच के लिए लॉगिन अनुरोध में अतिरिक्त मापदंड शामिल हैं।';
$string['issuerloginparamsoffline_help'] = 'प्रत्येक ओ. ओ. यू. टी. तंत्र ऑफ़लाइन पहुँच का अनुरोध करने के लिए एक अलग तरीके को परिभाषित करती है। e.g। गूगल को अतिरिक्त मापदंडों की आवश्यकता होती है: "access_type=offline&prompt=consent"। ये मापदंड URL क्वेरी मानदंड प्रारूप में होने चाहिए।';
$string['issuerloginscopes'] = 'लॉगिन अनुरोध में शामिल दायरे।';
$string['issuerloginscopes_help'] = 'कुछ प्रणालियों को उपयोगकर्ता की मूल प्रोफ़ाइल को पढ़ने के लिए लॉगिन अनुरोध के लिए अतिरिक्त गुंजाइशों की आवश्यकता होती है। ओपनआईडी कनेक्ट अनुपालन तंत्र के लिए स्तर गुंजाइश "ओपनआईडी प्रोफ़ाइल ईमेल" हैं।';
$string['issuerloginscopesoffline'] = 'ऑफ़लाइन पहुँच के लिए लॉगिन अनुरोध में शामिल दायरे।';
$string['issuerloginscopesoffline_help'] = 'प्रत्येक ओ. ओ. यू. टी. तंत्र ऑफ़लाइन पहुँच का अनुरोध करने के लिए एक अलग तरीके को परिभाषित करती है। e.g। माइक्रोसॉफ्ट को एक अतिरिक्त दायरे "offline_access" की आवश्यकता होती है।';
$string['issuername'] = 'नाम';
$string['issuername_help'] = 'पहचान जारीकर्ता का नाम। लॉगिन पृष्ठ पर प्रदर्शित किया जा सकता है।';
$string['issuerrequireconfirmation'] = 'ईमेल सत्यापन की आवश्यकता है';
$string['issuerrequireconfirmation_help'] = 'सभी उपयोगकर्ताओं को ओ. ए. यू. टी. के साथ लॉग इन करने से पहले अपने ईमेल पते को सत्अथवापित करना की आवश्यकता होती है। यह लॉगिन प्रक्रम के हिस्से के रूप में नए बनाए गए खातों पर लागू होता है, अथवा जब कोई मौजूदा मूडल खाता मेल खाने वाले ईमेल पते के माध्यम से OAuth  लॉगिन से संबद्ध है।';
$string['issuers'] = 'जारीकर्ता';
$string['issuersetup'] = 'सामान्य OAuth  2 सेवाओं को कॉन्फ़िगर करने पर विस्तृत निर्देश';
$string['issuersetuptype'] = '{$a} outh 2 प्रदाता स्थापित करने पर विस्तृत निर्देश';
$string['issuershowonloginpage'] = 'लॉगिन पेज पर दिखाएँ';
$string['issuershowonloginpage_help'] = 'यदि oauth 2 प्रमाणीकरण प्लगइन सक्षम है, तो इस लॉगिन जारीकर्ता को लॉगिन पृष्ठ पर सूचीबद्ध किया जाएगा ताकि उपयोगकर्ता इस जारीकर्ता से खातों के साथ लॉग इन कर सकें।';
$string['issuersservicesallow'] = 'सेवाओं की अनुमति देना';
$string['issuersservicesnotallow'] = 'सेवाओं की अनुमति देना न दें';
$string['issuerusedforinternal'] = 'आंतरिक सेवाएँ';
$string['issuerusedforlogin'] = 'लॉग इन करें';
$string['issuerusein'] = 'इस सेवा का उपयोग किया जाएगा';
$string['issueruseineverywhere'] = 'लॉगिन पृष्ठ और आंतरिक सेवाएँ';
$string['issueruseininternalonly'] = 'केवल आंतरिक सेवाएँ';
$string['issueruseinloginonly'] = 'केवल लॉगिन पृष्ठ';
$string['linkedin_service'] = 'लिंकडिन';
$string['logindisplay'] = 'लॉगिन पृष्ठ पर प्रदर्शित करें';
$string['loginissuer'] = 'लॉगिन की अनुमति देना';
$string['microsoft_service'] = 'माइक्रोसॉफ्ट';
$string['moodlenet_service'] = 'मूडलनेट';
$string['nextcloud_service'] = 'अगला बादल';
$string['notconfigured'] = 'संरचित नहीं है';
$string['notdiscovered'] = 'सेवा की खोज सफल नहीं हुई';
$string['notloginissuer'] = 'लॉगिन की अनुमति देना न दें';
$string['pluginname'] = 'OAuth  2 सेवाएँ';
$string['privacy:metadata'] = 'OAuth 2 सेवा प्लगइन किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करता है।';
$string['savechanges'] = 'परिवर्तनों को सहेजें';
$string['serviceshelp'] = 'सेवा प्रदाता व्यवस्था, ढांचा निर्देश।';
$string['systemaccountconnected'] = 'सिस्टम खाता संबद्ध';
$string['systemaccountconnected_help'] = 'सिस्टम खातों का उपयोग प्लगइनों के लिए उन्नत कार्यक्षमता प्रदान करने के लिए किया जाता है। वे केवल लॉगिन कार्यक्षमता के लिए अपेक्षित नहीं हैं, लेकिन यदि सिस्टम खाता जुड़ा नहीं है तो OAuth  सेवा का उपयोग करने वाले अन्य प्लगइन सुविधाओं का एक छोटा सेट प्रदान कर सकते हैं। उदाहरण के लिए भंडार दाखिल करना प्रचालन करने के लिए सिस्टम खाते के बिना "नियंत्रित लिंक" का समर्थन नहीं कर सकते हैं।';
$string['systemaccountnotconnected'] = 'सिस्टम खाता जुड़ा नहीं है';
$string['systemauthstatus'] = 'सिस्टम खाता संबद्ध';
$string['usebasicauth'] = 'HTTP शीर्षकों के माध्यम से सांकेतिक अनुरोधों को प्रमाणित करें';
$string['usebasicauth_help'] = 'रिफ्रेश टोकन अनुरोध के साथ क्लाइंट आईडी और पासवर्ड भेजते समय HTTP बेसिक प्रमाणीकरण योजना का उपयोग करें। OAuth 2 मानक द्वारा इसकी अनुशंसा की जाती है, लेकिन कुछ जारीकर्ताओं के साथ यह उपलब्ध नहीं हो सकता है।';
$string['userfieldexternalfield'] = 'बाहरी क्षेत्र का नाम';
$string['userfieldexternalfield_error'] = 'इस क्षेत्र में HTML नहीं हो सकता है।';
$string['userfieldexternalfield_help'] = 'बाहरी ओउथ तंत्र द्वारा बशर्ते, यह कि गए क्षेत्र का नाम।';
$string['userfieldinternalfield'] = 'आंतरिक क्षेत्र का नाम';
$string['userfieldinternalfield_help'] = 'मॉड्यूल उपयोगकर्ता क्षेत्र का नाम जिसे बाहरी क्षेत्र से मैप किया जाना चाहिए।';
$string['userfieldmappingdeleted'] = 'उपयोगकर्ता क्षेत्र मानचित्रण हटा दिया गया';
$string['userfieldmappingsforissuer'] = 'जारीकर्ता के लिए उपयोगकर्ता क्षेत्र मानचित्रणः {$a}';
