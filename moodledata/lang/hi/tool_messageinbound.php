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
 * Strings for component 'tool_messageinbound', language 'hi', version '4.4'.
 *
 * @package     tool_messageinbound
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = 'वर्ग का नाम';
$string['component'] = 'अवयव';
$string['configmessageinboundhost'] = 'सर्वर का सम्बोधन जिसविरुद्ध मूडल को मेल की जांच करनी चाहिए। गैर-चूकना पोर्ट विनिर्देश करना के लिए, [सर्वर]: [पोर्ट] का उपयोग करें, उदाहरण के लिए mail.example.com:993। यदि कोई पोर्ट निर्दिष्ट नहीं है, तो मेल सर्वर के प्रकार के लिए चूकना पोर्ट का उपयोग किया जाएगा।';
$string['defaultexpiration'] = 'चूक सम्बोधन समाप्ति अवधि';
$string['defaultexpiration_help'] = 'जब हैंडलर द्वारा एक ईमेल सम्बोधन उत्पन्न किया जाता है, तो इसे एक अवधि के बाद स्वचालित रूप से समाप्त होने के लिए सेट किया जा सकता है, ताकि इसका उपयोग अब नहीं किया जा सके। समाप्ति अवधि निर्धारित करने की सलाह दी जाती है।';
$string['description'] = 'विवरण';
$string['domain'] = 'ईमेल डोमेन';
$string['edit'] = 'संपादित करें';
$string['edithandler'] = '{$a} हैंडलर के लिए सेटिंग्स संपादित करें';
$string['editinghandler'] = '{$a} को संपादित करना';
$string['enabled'] = 'सक्षम किया गया';
$string['fixedenabled_help'] = 'आप इस हैंडलर की स्थिति को नहीं बदल सकते हैं। ऐसा इसलिए हो सकता है क्योंकि अन्य हैंडलर को हैंडलर की अपेक्षितता होती है।';
$string['fixedvalidateaddress'] = 'प्रेषक के पते को मान्य करें';
$string['fixedvalidateaddress_help'] = 'आप इस हैंडलर के लिए पते के सत्यापन को नहीं बदल सकते हैं। ऐसा इसलिए हो सकता है क्योंकि हैंडलर को एक विशिष्ट सेटिंग की आवश्यकता होती है।';
$string['handlerdisabled'] = 'आपने जिस ईमेल हैंडलर से संपर्क करने की कोशिश की थी, वह अक्षम हो गया है। इस समय सन्देश, सूचना को संसाधित करने में असमर्थ।';
$string['incomingmailconfiguration'] = 'आने वाला डाक विन्यास';
$string['incomingmailserversettings'] = 'आने वाले मेल सर्वर सेटिंग्स';
$string['incomingmailserversettings_desc'] = 'मूडल उचित रूप से कॉन्फ़िगर किए गए IMAP सर्वर से जुड़ने में सक्षम है। आप यहाँ अपने IMAP सर्वर से जुड़ने के लिए उपयोग की जाने वाली सेटिंग्स विनिर्देश करना सकते हैं।';
$string['invalid_recipient_handler'] = 'यदि कोई वैध सन्देश, सूचना प्राप्त होता है लेकिन प्रेषक को प्रमाणित नहीं किया जा सकता है, तो सन्देश, सूचना ईमेल सर्वर पर संग्रहीत किया जाता है और उपयोगकर्ता से उनके उपयोगकर्ता प्रोफ़ाइल में ईमेल पते का उपयोग करके संपर्क किया जाता है। उपयोगकर्ता को मूल सन्देश, सूचना की प्रामाणिकता की पुष्टि के लिए जवाब देने का मौका दिया जाता है। यह हैंडलर उन उत्तरों को संसाधित करता है। इस हैंडलर के प्रेषक सत्यापन को अक्षम करना संभव नहीं है क्योंकि यदि उनका ईमेल क्लाइंट विन्यास गलत है तो उपयोगकर्ता गलत ईमेल पते से जवाब दे सकता है।';
$string['invalid_recipient_handler_name'] = 'अमान्य प्रेषक प्रबंधक';
$string['invalidrecipientdescription'] = 'सन्देश, सूचना "{$a-> subject}" को प्रमाणित नहीं किया जा सका, क्योंकि यह आपके उपयोगकर्ता प्रोफ़ाइल की तुलना में एक अलग ईमेल पते से भेजा गया था। सन्देश, सूचना को प्रमाणित करने के लिए, आपको इस सन्देश, सूचना का जवाब देना होगा।';
$string['invalidrecipientdescriptionhtml'] = 'सन्देश, सूचना "{$a-> subject}" को प्रमाणित नहीं किया जा सका, क्योंकि यह आपके उपयोगकर्ता प्रोफ़ाइल की तुलना में एक अलग ईमेल पते से भेजा गया था। सन्देश, सूचना को प्रमाणित करने के लिए, आपको इस सन्देश, सूचना का जवाब देना होगा।';
$string['invalidrecipientfinal'] = '"{$a-> subject}" सन्देश, सूचना को प्रमाणित नहीं किया जा सका। कृपया जाँच करें कि आप अपने प्रोफ़ाइल के समान ईमेल पते से अपना सन्देश, सूचना भेज रहे हैं।';
$string['mailbox'] = 'डाकपेटी का नाम';
$string['mailboxconfiguration'] = 'डाकपेटी विन्यास';
$string['mailboxdescription'] = '[मेलबॉक्स]+subaddress@[डोमेन]';
$string['mailsettings'] = 'डाक सेटिंग्स';
$string['message_handlers'] = 'सन्देश, सूचना प्रबंधक';
$string['messageinbound'] = 'सन्देश, सूचना इनबाउंड';
$string['messageinboundenabled'] = 'आने वाले मेल प्रसंस्करण को सक्षम करें';
$string['messageinboundenabled_desc'] = 'विनियोजन करना जानकारी के साथ संदेश भेजने के लिए आने वाले मेल प्रसंस्करण को सक्षम किया जाना चाहिए।';
$string['messageinboundgeneralconfiguration'] = 'सार्वजनिक विन्यास';
$string['messageinboundgeneralconfiguration_desc'] = 'इनबाउंड सन्देश, सूचना प्रसंस्करण आपको मूडल के भीतर ईमेल प्राप्त करना और संसाधित करने की अनुमति देता है। इसमें फोरम पोस्ट पर ईमेल उत्तर भेजने अथवा उपयोगकर्ता की निजी फ़ाइलों में फ़ाइलों को जोड़ने जैसे अनुप्रयोग हैं।';
$string['messageinboundhost'] = 'आने वाला मेल सर्वर';
$string['messageinboundhostoauth_help'] = 'IMAP सर्वर तक पहुँचने के लिए XOAUTH2 प्रमाणीकरण का उपयोग करते हुए OAuth 2 सेवा का उपयोग करें। यदि यह सेवा अभी मौजूद नहीं है, तो आपको इसे बनाना होगा।';
$string['messageinboundhostpass'] = 'कूटशब्द';
$string['messageinboundhostpass_desc'] = 'यह वह पासवर्ड है जो आपके सेवा प्रदाता ने आपके ईमेल खाते में लॉग इन करने के लिए बशर्ते, यह कि होगा।';
$string['messageinboundhostssl'] = 'SSL का उपयोग करें';
$string['messageinboundhostssl_desc'] = 'कुछ मेल सर्वर मूडल और आपके सर्वर के बीच संचार को कूटबद्ध करके जमानत के एक अतिरिक्त स्तर का समर्थन करते हैं। यदि आपका सर्वर इसका समर्थन करता है तो हम इस एस. एस. एल. कूटलेखन का उपयोग करने की सलाह देते हैं।';
$string['messageinboundhosttype'] = 'सर्वर का प्रकार';
$string['messageinboundhostuser'] = 'उपयोगकर्ता नाम';
$string['messageinboundhostuser_desc'] = 'यह वह उपयोगकर्ता नाम है जिसके साथ आपके सेवा प्रदाता ने आपके ईमेल खाते में लॉग इन करने के लिए बशर्ते, यह कि होगा।';
$string['messageinboundmailboxconfiguration_desc'] = 'जब संदेश भेजे जाते हैं, तो वे प्रारूप पते data@example.com में दौरा पड़ना होते हैं। मूडल से विश्वसनीय रूप से पते बनाने के लिए, कृपया उस पते को विनिर्देश करना जिसका उपयोग आप आमतौर पर @साइन से पहले करेंगे, और @साइन के लेखा जोखा देना डोमेन को अलग से विनिर्देश करना। उदाहरण के लिए, उदाहरण में मेलबॉक्स का नाम "सम्बोधन" होगा, और ई-मेल डोमेन "example.com" होगा। आपको इस प्रयोजन, उद्देश्य के लिए एक समर्पित ई-मेल खाते का उपयोग करना चाहिए।';
$string['messageprocessingerror'] = 'आपने हाल ही में एक ईमेल "{$a-> subject}" भेजा है लेकिन दुर्भाग्य से इसे संसाधित नहीं किया जा सका। त्रुटि का ब्योरा नीचे दिखाया गया है। {$a-> error}';
$string['messageprocessingerrorhtml'] = 'आपने हाल ही में एक ईमेल "{$a->subject}" भेजा था, लेकिन दुर्भाग्यवश इसे प्रोसेस नहीं किया जा सका।
<p>त्रुटि का विवरण नीचे दिया गया है।</p>
<p>{$a->error}</p>';
$string['messageprocessingfailed'] = 'ईमेल "{$a-> subject}" को संसाधित नहीं किया जा सका। त्रुटि इस प्रकार हैः "{$a-> message}"।';
$string['messageprocessingfailedunknown'] = 'ईमेल "{$a-> subject}" को संसाधित नहीं किया जा सका। अधिक जानकारी के लिए अपने प्रशासक से संपर्क करें।';
$string['messageprocessingsuccess'] = '{$a-> plain} यदि आप भविष्य में इन अधिसूचनाओं को प्राप्त करना नहीं करना चाहते हैं, तो आप अपने ब्राउज़र में {$a-> messagepreferencesurl}  खोलकर अपनी व्यक्तिगत संदेश वरीयताओं को संपादित कर सकते हैं।';
$string['messageprocessingsuccesshtml'] = '{$a->html}
<p>यदि आप भविष्य में इन सूचनाओं को प्राप्त करना नहीं करना चाहते हैं, तो आप कर सकते हैं <a href="{$a->messagepreferencesurl}">अपनी व्यक्तिगत संदेश वरीयताओं को संपादित करें</a>.</p>';
$string['messageprovider:invalidrecipienthandler'] = 'यह पुष्टि के लिए सन्देश, सूचना कि एक अंतर्निहित सन्देश, सूचना आपकी ओर से आया है';
$string['messageprovider:messageprocessingerror'] = 'चेतावनी जब एक इनबाउंड सन्देश, सूचना को संसाधित नहीं किया जा सकता है';
$string['messageprovider:messageprocessingsuccess'] = 'पुष्टि करना करें कि एक सन्देश, सूचना को सफलतापूर्वक संसाधित किया गया था';
$string['name'] = 'नाम';
$string['noencryption'] = 'बंद-कोई एन्क्रिप्शन नहीं';
$string['noexpiry'] = 'कोई अवधि समाप्ति नहीं हुई';
$string['oldmessagenotfound'] = 'आपने एक सन्देश, सूचना को मैन्युअल रूप से प्रमाणित करने की कोशिश की, लेकिन सन्देश, सूचना नहीं मिला। ऐसा इसलिए हो सकता है क्योंकि इसे पहले ही संसाधित किअथवा जा चुका है, अथवा क्योंकि सन्देश, सूचना की अवधि समाप्त हो गई है।';
$string['oneday'] = 'एक दिन';
$string['onehour'] = 'एक घंटा';
$string['oneweek'] = 'एक सप्ताह';
$string['oneyear'] = 'एक साल';
$string['pluginname'] = 'इनबाउंड सन्देश, सूचना विन्यास';
$string['privacy:metadata:coreuserkey'] = 'प्राप्त ईमेल को मान्य करने के लिए उपयोगकर्ता की कुंजी';
$string['privacy:metadata:messagelist'] = 'सन्देश, सूचना पहचानकर्ताओं की एक सूची जो सत्यापन में विफल रहे और उन्हें आगे प्राधिकरण की आवश्यकता है';
$string['privacy:metadata:messagelist:address'] = 'वह सम्बोधन जहाँ ईमेल भेजा गया था';
$string['privacy:metadata:messagelist:messageid'] = 'सन्देश, सूचना ID';
$string['privacy:metadata:messagelist:timecreated'] = 'वह समय जब अभिलेख बनाया गया था';
$string['privacy:metadata:messagelist:userid'] = 'उपयोगकर्ता की ID जिसे सन्देश, सूचना को मंजूरी देने की आवश्यकता है';
$string['replysubjectprefix'] = 'रीः';
$string['requirevalidation'] = 'प्रेषक के पते को मान्य करें';
$string['taskcleanup'] = 'असत्यापित आने वाले ईमेल की सफाई';
$string['taskpickup'] = 'आने वाला ईमेल पिकअप';
$string['tls'] = 'TLS (TLS ; अनएन्क्रिप्टेड चैनल पर प्रोटोकॉल-स्तरीय वार्ता, समझौते की बातचीत, संधिवार्ता के माध्यम से शुरू किया गया; सुरक्षित कनेक्शन शुरू करने का अनुशंसित तरीका)';
$string['tlsv1'] = 'TLSv1 (TLS सर्वर संस्करण 1.x से सीधा संयोजन)';
$string['validateaddress'] = 'प्रेषक के ईमेल पते को मान्य करें';
$string['validateaddress_help'] = 'जब किसी उपयोगकर्ता से कोई सन्देश, सूचना प्राप्त होता है, तो मूडल अपने उपयोगकर्ता प्रोफ़ाइल में ईमेल पते के साथ प्रेषक के ईमेल पते की तुलना करके सन्देश, सूचना को मान्य करने का प्रयास करता है। यदि प्रेषक मेल नहीं खाता है, तो उपयोगकर्ता को यह पुष्टि के लिए एक सूचना भेजी जाती है कि उन्होंने वास्तव में ईमेल भेजा है। यदि यह सेटिंग अक्षम है, तो प्रेषक के ईमेल पते की बिल्कुल भी जांच नहीं की जाती है।';
