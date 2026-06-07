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
 * Strings for component 'tool_mobile', language 'hi', version '4.4'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'ADOdb डीबगिंग सक्षम है। इसे बाहरी डेटाबेस प्रमाणीकरण अथवा बाहरी डेटाबेस नामांकन प्लगइन सेटिंग्स में अक्षम किअथवा जाना चाहिए।';
$string['androidappid'] = 'एंड्रॉइड ऐप का अद्वितीय पहचानकर्ता';
$string['androidappid_desc'] = 'इस सेटिंग को चूकना रूप से छोड़ दिया जा सकता है जब तक कि आपके पास एक कस्टम एंड्रॉइड ऐप न हो।';
$string['apppolicy'] = 'ऐप नीति URL';
$string['apppolicy_help'] = 'ऐप उपयोगकर्ताओं के लिए एक नीति का URL जो ऐप में जानकारी पृष्ठ पर सूचीबद्ध है। यदि क्षेत्र खाली छोड़ दिया जाता है, तो इसके बजाय साइट नीति URL का उपयोग किया जाएगा।';
$string['apprequired'] = 'यह कार्यक्षमता केवल तभी उपलब्ध होती है जब इसे मूडल मोबाइल अथवा डेस्कटॉप ऐप के माध्यम से एक्सेस किअथवा जाता है।';
$string['autologinkeygenerationlockout'] = 'ऑटो-लॉगिन कुंजी पीढ़ी अवरुद्ध है। आपको अनुरोधों के बीच {$a} कार्यवृत्त इंतजार करने की आवश्यकता है।';
$string['autologinmintimebetweenreq'] = 'ऑटो-लॉगिन अनुरोधों के बीच न्यूनतम, कम से कम समय';
$string['autologinmintimebetweenreq_desc'] = 'मोबाइल ऐप से ऑटो-लॉगिन अनुरोधों के बीच न्यूनतम, कम से कम समय। यदि ऐप उपयोगकर्ताओं को अक्सर साइट से एम्बेडेड सामग्री देखते समय अपनी परिचयपत्र दर्ज करने के लिए कहा जाता है, तो कम मूल्य निर्धारित करें।';
$string['autologinnotallowedtoadmins'] = 'साइट प्रशासकों के लिए ऑटो-लॉगिन की अनुमत नहीं है।';
$string['autologout'] = 'अपने उपयोगकर्ताओं के लिए स्वत: लॉगआउट प्रवर्तित करना, लागू करना';
$string['autologout_desc'] = 'जमानत कारणों से, आप अपने उपयोगकर्ताओं के लिए स्वचालित लॉगआउट प्रवर्तित करना, लागू करना सकते हैं जब वे ऐप छुट्टी की दरखास्त हैं अथवा बंद करते हैं, अथवा यह पृष्ठभूमि में जाता है। ऐप पर वापस आने पर उपयोगकर्ताओं को फिर से लॉग इन करना होगा।';
$string['autologoutcustom'] = 'उपयोगकर्ताओं के ऐप छोड़ने अथवा बंद करने के बाद कस्टम समय';
$string['autologoutinmediate'] = 'उपयोगकर्ताओं के ऐप छोड़ने अथवा बंद करने के तुरंत बाद';
$string['autologouttime'] = 'ऑटो लॉगआउट टाइमर';
$string['cachedef_plugininfo'] = 'यह मोबाइल योजकों के साथ प्लगइन्स की सूची को संग्रहीत करता है';
$string['cachedef_subscriptiondata'] = 'यह मॉडल ऐप सदस्यता जानकारी को संग्रहीत करता है।';
$string['clickheretolaunchtheapp'] = 'यदि ऐप स्वचालित रूप से नहीं खुलता है तो यहाँ क्लिक करें।';
$string['configmobilecssurl'] = 'अपने मोबाइल ऐप इंटरफेस को अनुकूलित करने के लिए एक CSS  दाखिल करना।';
$string['customlangstrings'] = 'कस्टम भाषा के तार';
$string['customlangstrings_desc'] = 'ऐप में प्रदर्शित होने वाले शब्दों और वाक्यांशों को यहाँ अनुकूलित किया जा सकता है। प्रत्येक अनुकूलित भाषा स्ट्रिंग को एक नई पंक्ति में इस प्रारूप में दर्ज करें: स्ट्रिंग पहचानकर्ता, अनुकूलित भाषा स्ट्रिंग और भाषा कोड, पाइप वर्णों द्वारा अलग किए गए। उदाहरण के लिए:
<pre>
mm.user.student|Learner|en
mm.user.student|Aprendiz|es
</pre>
स्ट्रिंग पहचानकर्ताओं की पूरी सूची के लिए, दस्तावेज़ देखें।';
$string['custommenuitems'] = 'कस्टम मेनू आइटम';
$string['custommenuitems_desc'] = 'ऐप के मुख्य मेनू में अतिरिक्त आइटम जोड़ने के लिए, उन्हें यहाँ निर्दिष्ट करें। प्रत्येक कस्टम मेनू आइटम को एक नई पंक्ति में इस प्रारूप में दर्ज करें: आइटम टेक्स्ट, लिंक URL, लिंक खोलने का तरीका और भाषा कोड (वैकल्पिक, केवल निर्दिष्ट भाषा के उपयोगकर्ताओं को आइटम प्रदर्शित करने के लिए), पाइप वर्णों द्वारा अलग किए गए।

लिंक खोलने के तरीके हैं: ऐप (ऐप द्वारा समर्थित गतिविधि से लिंक करने के लिए), इनऐपब्राउज़र (ऐप छोड़े बिना ब्राउज़र में लिंक खोलने के लिए), ब्राउज़र (ऐप के बाहर डिवाइस के डिफ़ॉल्ट ब्राउज़र में लिंक खोलने के लिए) और एम्बेडेड (ऐप में एक नए पृष्ठ में iframe में लिंक प्रदर्शित करने के लिए)।

यदि किसी आइटम का किसी भाषा में अनुवाद उपलब्ध नहीं है, तो भाषा कोड में "_only" न जोड़ने पर अन्य भाषाओं का उपयोग किया जाएगा।


उदाहरण के लिए:
<pre>
ऐप सहायता|https://someurl.xyz/help|inappbrowser
मेरे ग्रेड|https://someurl.xyz/local/mygrades/index.php|embedded|en
मेरी रेटिंग|https://someurl.xyz/local/mygrades/index.php|embedded|es
यह आपको केवल अंग्रेज़ी में दिखाई देगा|https://someurl.xyz/english|browser|en_only
</pre>';
$string['darkmode'] = 'डार्क प्रकार, विधा';
$string['disabledfeatures'] = 'अक्षम विशेषताएँ';
$string['disabledfeatures_desc'] = 'यहाँ उन सुविधाओं का चयन करें जिन्हें आप अपनी साइट के लिए मोबाइल ऐप में अक्षम करना चाहते हैं। कृपया ध्यान दें कि यहाँ सूचीबद्ध कुछ सुविधाओं को अन्य साइट सेटिंग्स के माध्यम से पहले से ही अक्षम किया जा सकता है। परिवर्तनों को देखने के लिए आपको ऐप में लॉग आउट करना होगा और फिर से लॉग इन करना होगा।';
$string['displayerrorswarning'] = 'डिस्प्ले डिबग संदेश (डिबगडिस्प्ले) सक्षम है। इसे अक्षम किया जाना चाहिए।';
$string['downloadcourse'] = 'पाठ्यक्रम डाउनलोड करें';
$string['downloadcourses'] = 'पाठ्यक्रम डाउनलोड करें';
$string['enablesmartappbanners'] = 'ऐप बैनर सक्षम करें';
$string['enablesmartappbanners_desc'] = 'यदि सक्षम किया जाता है, तो मोबाइल ब्राउज़र का उपयोग करके साइट तक पहुँचते समय मोबाइल ऐप का प्रचार करने वाला एक झंडा प्रदर्शित किया जाएगा।';
$string['filetypeexclusionlist'] = 'दाखिल करना प्रकार बहिष्करण सूची';
$string['filetypeexclusionlist_desc'] = 'उन सभी दाखिल करना प्रकारों का चयन करें जो मोबाइल उपकरण पर उपयोग के लिए नहीं हैं। ऐसी दाखिल करनाों को क्रम में सूचीबद्ध किअथवा जाएगा, फिर यदि कोई उपयोगकर्ता उन्हें खोलने का प्रअथवास करता है, तो एक चेतावनी प्रदर्शित की जाएगी जिसमें सलाह दी जाएगी कि दाखिल करना प्रकार मोबाइल उपकरण पर उपयोग के लिए नहीं है। उपयोगकर्ता तब चेतावनी को रद्द अथवा अनदेखा कर सकता है और दाखिल करना को वैसे भी खोल सकता है।';
$string['filetypeexclusionlistplaceholder'] = 'मोबाइल दाखिल करना प्रकार बहिष्करण सूची';
$string['forcedurlscheme'] = 'यदि आप ब्राउज़र विंडो के माध्यम से केवल अपने कस्टम ब्रांडेड ऐप को खोलने की अनुमति देना चाहते हैं, तो इसकी URL योजना यहाँ विनिर्देश करना। यदि आप केवल आधिकारिक ऐप को अनुमति देना चाहते हैं, तो चूकना मूल्य निर्धारित करें। यदि आप किसी ऐप को अनुमति देना चाहते हैं तो क्षेत्र को खाली छुट्टी की दरखास्त';
$string['forcedurlscheme_key'] = 'URL योजना';
$string['forcelogout'] = 'लॉग आउट करने के लिए मजबूर करें';
$string['forcelogout_desc'] = 'यदि सक्षम किया जाता है, तो खाते बदलते समय भी उपयोगकर्ता हमेशा पूरी तरह से लॉग आउट रहेंगे। इसके बाद उन्हें अगली बार जब वे साइट तक पहुंचना चाहते हैं तो अपना पासवर्ड फिर से दर्ज करना होगा।';
$string['getmoodleonyourmobile'] = 'मोबाइल ऐप प्राप्त करें';
$string['h5poffline'] = 'H5P सामग्री ऑफ़लाइन देखें';
$string['httpsrequired'] = 'HTTPS  अपेक्षित';
$string['insecurealgorithmwarning'] = 'ऐसा लगता है कि HTTPS  प्रमाणपत्र हस्ताक्षर (SHA.-1) के लिए एक असुरक्षित एल्गोरिथ्म का उपयोग करता है। कृपया प्रमाणपत्र को अद्यतन करने का प्रयास करें।';
$string['invalidcertificatechainwarning'] = 'ऐसा लगता है कि प्रमाणपत्र श्रृंखला अमान्य है। यह प्रमाणपत्र ब्राउज़र के लिए काम कर सकता है लेकिन मोबाइल ऐप के लिए नहीं।';
$string['invalidcertificateexpiredatewarning'] = 'ऐसा लगता है कि साइट के लिए HTTPS प्रमाणपत्र की अवधि समाप्त हो गई है।';
$string['invalidcertificatestartdatewarning'] = 'ऐसा लगता है कि साइट के लिए HTTPS प्रमाणपत्र अभी तक वैध नहीं है (भविष्य में शुरू होने की तारीख के साथ)।';
$string['invalidprivatetoken'] = 'अमान्य निजी सांकेतिक। सांकेतिक को खाली नहीं किअथवा जाना चाहिए अथवा GET मानदंड के माध्यम से पारित नहीं किअथवा जाना चाहिए।';
$string['invaliduserquotawarning'] = 'उपयोगकर्ता कोटा (उपयोगकर्ता कोटा) एक अमान्य संख्या पर सेट किया जाता है। इसे साइट जमानत सेटिंग्स में एक वैध संख्या (एक पूर्णांक मान) पर सेट किया जाना चाहिए।';
$string['iosappid'] = 'iOS ऐप का अद्वितीय पहचानकर्ता';
$string['iosappid_desc'] = 'इस सेटिंग को चूकना रूप से छोड़ दिया जा सकता है जब तक कि आपके पास एक कस्टम iOS  ऐप न हो।';
$string['launchviasiteinbrowser'] = 'सिस्टम ब्राउज़र में साइट के माध्यम से शुरू करें';
$string['loginintheapp'] = 'ऐप के माध्यम से';
$string['logininthebrowser'] = 'ब्राउज़र विंडो के माध्यम से (SSO प्लगइन्स के लिए)';
$string['loginintheembeddedbrowser'] = 'एक एम्बेडेड ब्राउज़र के माध्यम से (SSO प्लगइन के लिए)';
$string['logoutconfirmation'] = 'क्या आप सुनिश्चित हैं कि आप अपने मोबाइल उपकरणों पर मोबाइल ऐप से लॉग आउट करना चाहते हैं? लॉग आउट करके, आपको उन सभी उपकरणों पर मोबाइल ऐप में अपना उपयोगकर्ता नाम और पासवर्ड फिर से दर्ज करना होगा जहां आपके पास ऐप इंस्टॉल है।';
$string['mainmenu'] = 'मुख्य मेनू';
$string['managefiletypes'] = 'दाखिल करना प्रकारों का प्रबंधन करें';
$string['minimumversion'] = 'यदि कोई ऐप संस्करण निर्दिष्ट है (3.8.0 अथवा उससे अधिक), तो पुराने ऐप संस्करण का उपयोग करने वाले किसी भी उपयोगकर्ता को साइट तक पहुँच की अनुमत देने से पहले अपने ऐप को अपग्रेड करने के लिए कहा जाएगा।';
$string['minimumversion_key'] = 'न्यूनतम, कम से कम ऐप संस्करण अपेक्षित';
$string['mobileapp'] = 'मोबाइल ऐप';
$string['mobileappearance'] = 'मोबाइल उपस्थिति';
$string['mobileappenabled'] = 'इस साइट में मोबाइल ऐप एक्सेस सक्षम है। <b/> <a href = "{$a}"> मोबाइल ऐप </a> डाउनलोड करें।';
$string['mobileappsubscription'] = 'मूडल ऐप सदस्यता';
$string['mobileauthentication'] = 'मोबाइल प्रमाणीकरण';
$string['mobilefeatures'] = 'मोबाइल सुविधाएँ';
$string['mobilenotificationsdisabledwarning'] = 'मोबाइल अधिसूचनाएँ सक्षम नहीं हैं। उन्हें अधिसूचना सेटिंग्स में सक्षम किया जाना चाहिए।';
$string['mobilesettings'] = 'मोबाइल सेटिंग्स';
$string['moodleappsportalfeatureswarning'] = 'कृपया ध्यान दें कि आपकी मूडल ऐप सदस्यता के आधार पर कुछ सुविधाएँ प्रतिबंधित, सीमित हो सकती हैं। अधिक जानकारी के लिए, <a href = "{$a}" target= "_ blank"> मूडल ऐप पोर्टल पर जाएँ।';
$string['notifications'] = 'अधिसूचनाएँ';
$string['notificationsactivedevices'] = 'सक्रिय उपकरण';
$string['notificationscurrentactivedevices'] = 'इस महीने सूचना प्राप्त करने वाले उपकरण';
$string['notificationsignorednotifications'] = 'अधिसूचना नहीं भेजी गई';
$string['notificationslimitreached'] = 'मासिक सक्रिय उपयोगकर्ता उपकरण सीमा को पार कर लिया गया है। कुछ उपयोगकर्ताओं के लिए सूचनाएँ नहीं भेजी जाएंगी। यह अनुशंसा की जाती है कि आप <a href = "{$a}" target= "_ blank"> मूडल ऐप पोर्टल </a> में अपनी ऐप योजना को अपग्रेड करें।';
$string['notificationsmissingwarning'] = 'मूडल ऐप अधिसूचना आंकड़े प्राप्त नहीं किए जा सके। यह सबसे अधिक संभावना है क्योंकि मोबाइल अधिसूचनाएँ अभी तक साइट पर सक्षम नहीं हैं। आप उन्हें साइट प्रशासन/संदेश/ मोबाइल में सक्षम कर सकते हैं।';
$string['notificationsnewdevices'] = 'नए उपकरण';
$string['notificationsseemore'] = 'दृष्टव्‍य: मूडल ऐप उपयोग के आंकड़ों की गणना वास्तविक समय में नहीं की जाती है। पिछले महीनों के आंकड़ों सहित अधिक विस्तृत आंकड़ों तक पहुँचने के लिए, कृपया <a href = "{$a}" target= "_ blank"> मूडल ऐप पोर्टल </a> पर लॉग इन करें।';
$string['notificationssentnotifications'] = 'भेजी गई अधिसूचनाएँ';
$string['oauth2identityproviders'] = 'OAuth 2 पहचान प्रदाता';
$string['offlineuse'] = 'ऑफ़लाइन उपयोग';
$string['pluginname'] = 'मूडल ऐप उपकरण';
$string['pluginnotenabledorconfigured'] = 'प्लगइन सक्षम अथवा कॉन्फ़िगर नहीं है।';
$string['privacy:metadata:core_userkey'] = 'चालू, प्रचलित उपयोगकर्ता के लिए ऑटो-लॉगिन कुंजी बनाने के लिए उपयोगकर्ता की कुंजी का उपयोग किया जाता है।';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'अंतिम ऑटो-लॉगिन कुंजी अनुरोध की तारीख । प्रत्येक अनुरोध के बीच 6 कार्यवृत्त की अपेक्षितता होती है।';
$string['qrcodedisabled'] = 'क्यू आर कोड के माध्यम से पहुँच अक्षम है';
$string['qrcodeformobileappaccess'] = 'मोबाइल ऐप एक्सेस के लिए क्यू आर कोड';
$string['qrcodeformobileapploginabout'] = 'अपने मोबाइल ऐप से क्यू. आर. कोड स्कैन करें और आप स्वचालित रूप से लॉग इन हो जाएंगे। क्यू. आर. कोड {$a} में समाप्त हो जाएगा।';
$string['qrcodeformobileappurlabout'] = 'अपने ऐप में साइट URL भरने के लिए अपने मोबाइल ऐप से क्यूआर कोड स्कैन करें।';
$string['qrcodetype'] = 'क्यू आर कोड अभिगम';
$string['qrcodetype_desc'] = 'मोबाइल ऐप उपयोगकर्ताओं को स्कैन करने के लिए एक क्यू. आर. कोड बशर्ते, यह कि जा सकता है। इसका उपयोग साइट URL को भरने के लिए किअथवा जा सकता है, अथवा जहां साइट को HTTPS का उपयोग करके सुरक्षित किअथवा गअथवा है, उपयोगकर्ता को उनका उपयोगकर्ता नाम और पासवर्ड दर्ज किए बिना स्वचालित रूप से लॉग इन करने के लिए किअथवा जा सकता है।';
$string['qrcodetypelogin'] = 'स्वचालित लॉगिन के साथ क्यू आर कोड';
$string['qrcodetypeurl'] = 'साइट URL के साथ क्यूआर कोड';
$string['qrkeyttl'] = 'क्यू. आर. प्रमाणीकरण कुंजी अवधि';
$string['qrkeyttl_desc'] = 'उस समय की अवधि जिसके लिए स्वचालित लॉगिन के लिए एक क्यू. आर. कोड मान्य है।';
$string['qrsameipcheck'] = 'क्यू. आर. प्रमाणीकरण वही IP जाँच';
$string['qrsameipcheck_desc'] = 'Whether users must use the same network for both generating and scanning a QR code for login. Only disable it if users report issues with the QR login.';
$string['qrsiteadminsnotallowed'] = 'जमानत कारणों से साइट प्रशासकों के लिए अथवा यदि आप किसी अन्य उपयोगकर्ता के रूप में लॉग इन हैं तो क्यू. आर. कोड के माध्यम से लॉग इन करने की अनुमत नहीं है।';
$string['readingthisemailgettheapp'] = 'क्या आप इसे ईमेल में पढ़ रहे हैं? <a href = "{$a}"> मोबाइल ऐप डाउनलोड करें और अपने मोबाइल उपकरण पर सूचनाएँ प्राप्त करना </a>।';
$string['remoteaddons'] = 'रिमोट ऐड-ऑन';
$string['responsivemainmenuitems'] = 'उत्तरदायी मेनू आइटम';
$string['scanqrcode'] = 'क्यू. आर. कोड स्कैन करें';
$string['selfsignedoruntrustedcertificatewarning'] = 'ऐसा लगता है कि HTTPS  प्रमाणपत्र स्व-हस्ताक्षरित है अथवा विश्वसनीय नहीं है। मोबाइल ऐप केवल विश्वसनीय साइटों के साथ काम करेगा। समस्अथवा का निदान करने के लिए कृपअथवा किसी भी ऑनलाइन SSL  चेकर का उपयोग करें। यदि यह इंगित करता है कि आपका प्रमाणपत्र ठीक है, तो आप इस चेतावनी को नजरअंदाज कर सकते हैं।';
$string['setuplink'] = 'ऐप डाउनलोड पृष्ठ';
$string['setuplink_desc'] = 'ऐप स्टोर और गूगल प्ले से मोबाइल ऐप डाउनलोड करने के विकल्पों के साथ पृष्ठ का URL  ऐप डाउनलोड पेज लिंक पेज फुटर और उपयोगकर्ता की प्रोफ़ाइल में प्रदर्शित होता है। लिंक सजावट करने के लिए खाली छुट्टी की दरखास्त';
$string['smartappbanners'] = 'ऐप बैनर';
$string['subscription'] = 'सदस्यता';
$string['subscriptioncreated'] = 'प्रारंभ तिथि';
$string['subscriptionerrorrequest'] = 'अपने मूडल ऐप सदस्यता की जानकारी प्राप्त करने की कोशिश करते समय एक अप्रत्याशित त्रुटि हुई थी।';
$string['subscriptionexpiration'] = 'समाप्ति तिथि';
$string['subscriptionfeaturenotapplied'] = 'यह सुविधा आपकी साइट पर कॉन्फ़िगर की गई है लेकिन यह आपकी मूडल ऐप योजना में शामिल नहीं है। इस प्रकार, सेटिंग का कोई प्रभाव नहीं पड़ेगा।';
$string['subscriptionfeatures'] = 'सदस्यता सुविधाएँ';
$string['subscriptionlimitsurpassed'] = 'सदस्यता सीमा पार';
$string['subscriptionregister'] = 'विविध, विभिन्न ऐप योजनाओं के ब्योरा के लिए, और मूडल ऐप उपयोग आंकड़ों तक पहुँचने के लिए, कृपया <a href = "{$a}" target= "_ खाली"> मूडल ऐप पोर्टल </a> पर जाएँ।';
$string['subscriptionsseemore'] = 'दृष्टव्‍य: प्रदर्शित जानकारी को वास्तविक समय में अद्यतन नहीं किया जाता है। अद्यतन देखने के लिए आपको लॉग आउट करने और फिर से लॉग इन करने की आवश्यकता हो सकती है। अपनी ऐप योजना को उन्नत करने की जानकारी के लिए, कृपया <a href = "{$a}" target= "_ blank"> मूडल ऐप पोर्टल </a> पर लॉग इन करें।';
$string['switchaccount'] = 'खाता बदलें';
$string['typeoflogin'] = 'लॉगिन का प्रकार';
$string['typeoflogin_desc'] = 'यदि साइट SSO  प्रमाणीकरण प्रणाली का उपयोग करती है, तो ब्राउज़र विंडो के माध्यम से अथवा एम्बेडेड ब्राउज़र के माध्यम से चयन करना। एक एम्बेडेड ब्राउज़र एक बेहतर उपयोगकर्ता अनुभव प्रदान करता है, हालांकि यह सभी SSO  प्लगइन्स के साथ काम नहीं करता है।';
$string['viewqrcode'] = 'क्यू आर कोड देखें';
