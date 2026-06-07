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
 * Strings for component 'mnet', language 'hi', version '4.4'.
 *
 * @package     mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTP (स्व-हस्ताक्षरित)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTP (हस्ताक्षरित)';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP अनएन्क्रिप्टेड';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (स्व-हस्ताक्षरित)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (हस्ताक्षरित)';
$string['aboutyourhost'] = 'आपके सर्वर के बारे में';
$string['accesslevel'] = 'अभिगम स्तर';
$string['addhost'] = 'मेजबान जोड़ें';
$string['addnewhost'] = 'एक नया मेजबान जोड़ें';
$string['addtoacl'] = 'अभिगम नियंत्रण जोड़ें';
$string['allhosts'] = 'सभी मेजबान';
$string['allhosts_no_options'] = 'कई मेजबानों को देखते समय कोई विकल्प उपलब्ध नहीं हैं।';
$string['allow'] = 'अनुमति देना';
$string['allowaccess'] = 'पहुँच की अनुमति देना';
$string['applicationtype'] = 'आवेदन का प्रकार';
$string['authfail_nosessionexists'] = 'प्राधिकरण विफल: एमनेट अधिवेशन मौजूद नहीं है।';
$string['authfail_sessiontimedout'] = 'प्राधिकरण विफल: एमनेट अधिवेशन का समय समाप्त हो गया है।';
$string['authfail_usermismatch'] = 'प्राधिकरण विफल हो गयाः उपयोगकर्ता मेल नहीं खाता है।';
$string['authmnetdisabled'] = 'एमनेट प्रमाणीकरण प्लगइन <strong>disabled</strong> है।';
$string['badcert'] = 'यह वैध प्रमाणपत्र नहीं है।';
$string['certdetails'] = 'सर्ट ब्योरा';
$string['configmnet'] = 'एमनेट इस सर्वर को अन्य सर्वर अथवा सेवाओं के साथ संचार करने की अनुमति देता है।';
$string['couldnotgetcert'] = '<b/> {$a} पर कोई प्रमाणपत्र नहीं मिला। <b/> मेजबान नीचे हो सकता है अथवा गलत तरीके से कॉन्फ़िगर किअथवा जा सकता है।';
$string['couldnotmatchcert'] = 'यह वेबसर्वर द्वारा वर्तमान में प्रकाशित प्रमाणपत्र से मेल नहीं खाता है।';
$string['courses'] = 'पाठ्यक्रम';
$string['courseson'] = 'पाठ्यक्रमों पर';
$string['current_transport'] = 'प्रचलित परिवहन';
$string['currentkey'] = 'प्रचलित सार्वजनिक कुंजी';
$string['databaseerror'] = 'डेटाबेस में ब्योरा नहीं लिख सकते थे।';
$string['deleteaserver'] = 'सर्वर को हटाना';
$string['deletedhostinfo'] = 'इस मेजबान को हटा दिया गया है। यदि आप इसे हटाना चाहते हैं, तो हटाई गई हैसियत को वापस \'नहीं\' में बदल दें।';
$string['deletedhosts'] = 'हटाए गए मेजबानः {$a}';
$string['deletehost'] = 'हटाए गए मेजबान';
$string['deletekeycheck'] = 'क्या आप पूरी तरह से निश्चित हैं कि आप इस कुंजी को हटाना चाहते हैं?';
$string['deleteoutoftime'] = 'इस कुंजी को हटाने के लिए आपकी 60-सेकंड की विंडो की अवधि समाप्त हो गई है। कृपया फिर से शुरू करें।';
$string['deleteuserrecord'] = 'SSO ACL: {$a->होस्ट} से उपयोगकर्ता \'{$a->user}\' के लिए रिकॉर्ड हटाएं।';
$string['deletewrongkeyvalue'] = 'एक त्रुटि हुई है। यदि आप अपने सर्वर की SSL  कुंजी को निकाल देना की कोशिश नहीं कर रहे थे, तो यह संभव है कि आप दुर्भावनापूर्ण हमले के अधीन थे। कोई कार्रवाई नहीं की गई है।';
$string['deny'] = 'इनकार करें';
$string['denyaccess'] = 'पहुँच से इनकार करना';
$string['description'] = 'विवरण';
$string['duplicate_usernames'] = 'हम आपकी उपयोगकर्ता तालिका में "mnethostid" और "username" कॉलम पर इंडेक्स बनाने में विफल रहे।<br />ऐसा तब हो सकता है जब आपकी उपयोगकर्ता तालिका में <a href="{$a}" target="_blank">दोहरा उपयोगकर्ता नाम</a> हों।<br />आपका अपग्रेड फिर भी सफलतापूर्वक पूरा हो जाना चाहिए। ऊपर दिए गए लिंक पर क्लिक करें, और इस समस्या को ठीक करने के निर्देश एक नई विंडो में दिखाई देंगे। आप अपग्रेड के अंत में इसे ठीक कर सकते हैं।<br />';
$string['enabled_for_all'] = '(यह सेवा सभी मेजबानों के लिए सक्षम की गई है)।';
$string['enterausername'] = 'कृपअथवा एक उपयोगकर्ता नाम, अथवा अल्पविराम द्वारा अलग किए गए उपयोगकर्ता नामों की सूची दर्ज करें।';
$string['error7020'] = 'यह त्रुटि आमतौर पर तब होती है जब रिमोट साइट ने आपके लिए गलत wwwroot के साथ रिकॉर्ड बनाया हो, उदाहरण के लिए https://yoursite.com की जगह https://www.yoursite.com। कृपया रिमोट साइट के एडमिनिस्ट्रेटर से अपने wwwroot (जैसा कि config.php में बताया गया है) के साथ संपर्क करें और उनसे अपने होस्ट के लिए रिकॉर्ड अपडेट करने का अनुरोध करें।';
$string['error7022'] = 'आपके द्वारा दूरस्थ साइट पर भेजा गया सन्देश, सूचना ठीक से कूटबद्ध था, लेकिन हस्ताक्षरित नहीं था। यह बहुत अप्रत्याशित है; यदि ऐसा होता है तो आपको शायद एक बग दाखिल करना करना चाहिए (विचाराधीन आवेदन संस्करणों आदि के बारे में अधिक से अधिक जानकारी देना)।';
$string['error7023'] = 'दूरस्थ साइट ने आपके संदेश को आपके साइट के लिए रिकॉर्ड में मौजूद सभी कुंजियों से डिक्रिप्ट करने का प्रयास किया है। सभी प्रयास विफल रहे। आप दूरस्थ साइट से मैन्युअल रूप से कुंजी बदलकर इस समस्या को हल कर सकते हैं। हालांकि, ऐसा होने की संभावना तभी कम है जब आप कुछ महीनों से दूरस्थ साइट से संपर्क में न हों।';
$string['error7024'] = 'आप दूरस्थ साइट पर एक अनएन्क्रिप्टेड सन्देश, सूचना भेजते हैं, लेकिन दूरस्थ साइट आपकी साइट से अनएन्क्रिप्टेड संचार को स्वीकार नहीं करती है। यह बहुत अप्रत्याशित है; यदि ऐसा होता है तो आपको शायद एक बग दाखिल करना करना चाहिए (विचाराधीन अनुप्रयोग संस्करणों, आदि के बारे में अधिक से अधिक जानकारी देना)। )।';
$string['error7026'] = 'आपके सन्देश, सूचना के साथ जिस कुंजी पर हस्ताक्षर किए गए थे, वह उस कुंजी से अलग है जो आपके सर्वर के लिए दाखिल करना पर रिमोट होस्ट के पास है। इसके अलावा, रिमोट होस्ट ने आपकी चालू, प्रचलित कुंजी प्राप्त करने का प्रयास किया और ऐसा करने में विफल रहा। कृपया रिमोट होस्ट के साथ हाथ से री-की करें और फिर से कोशिश करें।';
$string['error709'] = 'दूरस्थ साइट आपसे एक SSL  कुंजी प्राप्त करना में विफल रही।';
$string['eventaccesscontrolcreated'] = 'बनाया गया अभिगम नियंत्रण';
$string['eventaccesscontrolupdated'] = 'अभिगम नियंत्रण अद्यतन किया गया';
$string['expired'] = 'इस कुंजी की अवधि समाप्त हो गई है';
$string['expires'] = 'तब तक वैध';
$string['expireyourkey'] = 'इस कुंजी को निकाल देना दें';
$string['expireyourkeyexplain'] = '';
$string['exportfields'] = 'निर्यात करने के लिए फ़ील्ड';
$string['failedaclwrite'] = 'उपयोगकर्ता \'{$a}\' के लिए एमनेट अभिगम नियंत्रण सूची में लिखने में विफल रहा।';
$string['findlogin'] = 'लॉगिन ढूंढें';
$string['forbidden-function'] = 'RPC के लिए उस कार्यक्रम को सक्षम नहीं किया गया है।';
$string['forbidden-transport'] = 'आप जिस परिवहन प्रणाली का उपयोग करने की कोशिश कर रहे हैं, उसकी अनुमति नहीं है।';
$string['forcesavechanges'] = 'जबरन परिवर्तनों को बचाएँ';
$string['helpnetworksettings'] = 'एमनेट संचार को कॉन्फ़िगर करें';
$string['hidelocal'] = 'स्थानीय उपयोगकर्ताओं को छुपाएँ';
$string['hideremote'] = 'दूरस्थ उपयोगकर्ताओं को छुपाएँ';
$string['host'] = 'मेजबान';
$string['hostcoursenotfound'] = 'मेजबान अथवा क्रम नहीं मिला';
$string['hostdeleted'] = 'मेजबान हटा दिया गया';
$string['hostexists'] = 'उस मेजबान नाम वाले मेजबान के लिए एक अभिलेख पहले से मौजूद है। (हो सकता है कि इसे हटा दिया गया हो।) <a href = "{$a}"> अभिलेख </a> को संपादित करें';
$string['hostlist'] = 'नेटवर्क मेजबानों की सूची';
$string['hostname'] = 'मेजबान नाम';
$string['hostnamehelp'] = 'दूरस्थ मेजबान का पूरी तरह से योग्य डोमेन नाम, e.g। www.example.com';
$string['hostnotconfiguredforsso'] = 'यह सर्वर रिमोट लॉगिन के लिए कॉन्फ़िगर नहीं है।';
$string['hostsettings'] = 'मेजबान सेटिंग्स';
$string['http_self_signed_help'] = 'रिमोट होस्ट पर स्व-हस्ताक्षरित DIY SSL प्रमाणपत्र का उपयोग करके कनेक्शनों को अनुमति दें।';
$string['http_verified_help'] = 'रिमोट होस्ट पर PHP  में सत्यापित SSL प्रमाणपत्र का उपयोग करके कनेक्शनों को अनुमति दें, लेकिन  http (https नहीं)।';
$string['https_self_signed_help'] = 'दूरस्थ मेजबान पर PHP  में स्व-हस्ताक्षरित DIY SSL का उपयोग करके कनेक्शनों को अनुमति दें।';
$string['https_verified_help'] = 'रिमोट होस्ट पर सत्यापित SSL  प्रमाणपत्र का उपयोग करके कनेक्शनों को अनुमति दें।';
$string['idhelp'] = 'यह मान स्वचालित रूप से निर्धारित किया जाता है और इसे बदला नहीं जा सकता है।';
$string['importfields'] = 'अभिप्राय किए जाने वाले क्षेत्र';
$string['inspect'] = 'निरीक्षण करें';
$string['installnosuchfunction'] = 'कोडिंग त्रुटि! कोई चीज़ किसी फ़ाइल ({$a->file}) से mnet xmlrpc फ़ंक्शन ({$a->method}) को इंस्टॉल करने की कोशिश कर रही है और वह फ़ाइल नहीं मिल पा रही है!';
$string['installnosuchmethod'] = 'कोडिंग त्रुटि! कोई चीज़ किसी क्लास ({$a->class}) पर mnet xmlrpc विधि ({$a->method}) स्थापित करने का प्रयास कर रही है और वह मिल नहीं पा रही है!';
$string['installreflectionclasserror'] = 'कोडिंग त्रुटि! क्लास \'{$a->class}\' में मेथड \'{$a->method}\' के लिए MNet इंट्रोस्पेक्शन विफल रहा। मूल त्रुटि संदेश, यदि इससे मदद मिलती है, तो यह है: \'{$a->error}\'';
$string['installreflectionfunctionerror'] = 'कोडिंग त्रुटि! फ़ाइल \'{$a->file}\' में फ़ंक्शन \'{$a->method}\' के लिए MNet इंट्रोस्पेक्शन विफल रहा। मूल त्रुटि संदेश, यदि इससे सहायता मिलती है, तो यह है: \'{$a->error}\'';
$string['invalidaccessparam'] = 'अमान्य अभिगम मानदंड।';
$string['invalidactionparam'] = 'अमान्य अभिगम मानदंड।';
$string['invalidhost'] = 'आपको एक वैध मेजबान पहचानकर्ता प्रदान करना होगा';
$string['invalidpubkey'] = 'कुंजी एक वैध SSL कुंजी नहीं है। ({$a})';
$string['invalidurl'] = 'अमान्य URL मानदंड।';
$string['ipaddress'] = 'IP सम्बोधन';
$string['is_in_range'] = 'आईपी सम्बोधन <code>{$a}</code> एक वैध विश्वसनीय मेजबान का प्रतिनिधित्व करता है।';
$string['ispublished'] = '{$a} ने आपके लिए इस सेवा को सक्षम किया है।';
$string['issubscribed'] = '{$a} आपके मेजबान पर इस सेवा की सदस्यता ले रहा है।';
$string['keydeleted'] = 'आपकी कुंजी को सफलतापूर्वक हटा दिया गया है और बदल दिया गया है।';
$string['keydeletedcancelled'] = 'कुंजी में कोई बदलाव नहीं किया गया है।';
$string['keymismatch'] = 'इस मेजबान के लिए आपके पास जो सार्वजनिक कुंजी है, वह वर्तमान में प्रकाशित होने वाली सार्वजनिक कुंजी से अलग है। वर्तमान में प्रकाशित कुंजी हैः';
$string['last_connect_time'] = 'अंतिम कनेक्शन समय';
$string['last_connect_time_help'] = 'वह समय जब आप आखिरी बार इस मेजबान से जुड़े थे।';
$string['last_transport_help'] = 'वह परिवहन जिसका उपयोग आपने इस मेजबान के अंतिम संयोजन के लिए किया था।';
$string['leavedefault'] = 'इसके बजाय चूकना सेटिंग्स का उपयोग करें';
$string['listservices'] = 'सेवाओं की सूची बनाएँ';
$string['loginlinkmnetuser'] = '<br />यदि आप एमनेट के रिमोट उपयोगकर्ता हैं और <a href="{$a}">यहां अपना ईमेल पता सत्यापित कर सकते हैं</a>, तो आपको अपने लॉगिन पृष्ठ पर रीडायरेक्ट कर दिया जाएगा।<br />';
$string['logs'] = 'लॉग';
$string['managemnetpeers'] = 'साथियों का प्रबंधन करें';
$string['method'] = 'विधि';
$string['methodhelp'] = '{$a} के लिए विधि सहायता';
$string['methodsavailableonhost'] = '{$a} पर उपलब्ध विधियाँ';
$string['methodsavailableonhostinservice'] = '{$a->host} पर {$a->service} के लिए उपलब्ध विधियाँ';
$string['methodsignature'] = '{$a} के लिए विधि हस्ताक्षर';
$string['mnet_concatenate_strings'] = '{$a} के लिए विधि हस्ताक्षर';
$string['mnet_session_prohibited'] = 'आपके होम सर्वर के उपयोगकर्ताओं को वर्तमान में {$a} पर घूमने की अनुमति नहीं है।';
$string['mnetdisabled'] = 'एमनेट <strong>disabled</strong> है।';
$string['mnetidprovider'] = 'MNet ID प्रदाता';
$string['mnetidproviderdesc'] = 'यदि आप उस उपयोगकर्ता नाम से मेल खाने के लिए सही ईमेल सम्बोधन प्रदान कर सकते हैं जिसके साथ आपने पहले लॉग इन करने की कोशिश की थी, तो आप इस सुविधा का उपयोग उस लिंक को पुनर्प्राप्त करने के लिए कर सकते हैं जिस पर आप लॉग इन कर सकते हैं।';
$string['mnetidprovidermsg'] = 'आपको अपने {$a} प्रदाता पर लॉग इन करने में सक्षम होना चाहिए।';
$string['mnetidprovidernotfound'] = 'क्षमा करें, लेकिन आगे कोई जानकारी नहीं मिल सकी।';
$string['mnetpeers'] = 'साथियों';
$string['mnetservices'] = 'सेवाएँ';
$string['mnetsettings'] = 'MNet सेवाएँ';
$string['moodle_home_help'] = 'दूरस्थ मेजबान पर एमनेट अनुप्रयोग के होमपेज का मार्ग, e.g। /moodle/';
$string['name'] = 'नाम';
$string['net'] = 'नेटवर्किंग';
$string['networksettings'] = 'नेटवर्क सेटिंग्स';
$string['never'] = 'कभी नहीं';
$string['noaclentries'] = 'SSO अभिगम नियंत्रण सूची में कोई प्रविष्टियाँ नहीं';
$string['noaddressforhost'] = 'क्षमा करें, लेकिन वह मेजबान नाम ({$a}) हल नहीं किया जा सका!';
$string['nocurl'] = 'PHP cURL पुस्तकालय स्थापित नहीं है';
$string['nolocaluser'] = 'दूरस्थ उपयोगकर्ता के लिए कोई स्थानीय अभिलेख मौजूद नहीं है, और इसे बनाया नहीं जा सका, क्योंकि यह मेजबान उपयोगकर्ताओं को स्वतः नहीं बनाएगा। कृपया अपने प्रशासक से संपर्क करें!';
$string['nomodifyacl'] = 'आपको एमनेट अभिगम नियंत्रण सूची को आशोधन करना, तरमीम करना, अंशांतरित करना की अनुमति नहीं है।';
$string['nonmatchingcert'] = 'प्रमाणपत्र का विषय: <br /><em>{$a->subject}</em><br />उस होस्ट से मेल नहीं खाता जिससे यह आया है:<br /><em>{$a->host}</em>.';
$string['nopubkey'] = 'सार्वजनिक कुंजी को पुनर्प्राप्त करने में एक समस्अथवा थी। <br /> हो सकता है कि मेजबान एमनेट की अनुमति देना न दे अथवा कुंजी अमान्य हो।';
$string['nosite'] = 'साइट-स्तरीय क्रम नहीं मिल सका';
$string['nosuchfile'] = 'फ़ाइल/फ़ंक्शन {$a} मौजूद नहीं है।';
$string['nosuchfunction'] = 'कार्यक्रम का पता लगाने में असमर्थ, अथवा RPC के लिए निषिद्ध कार्यक्रम।';
$string['nosuchmodule'] = 'फ़ंक्शन का पता गलत तरीके से दिया गया था और इसे खोजा नहीं जा सका। कृपया
mod/modulename/lib/functionname प्रारूप का उपयोग करें।';
$string['nosuchpublickey'] = 'हस्ताक्षर सत्यापन के लिए सार्वजनिक कुंजी प्राप्त करना में असमर्थ।';
$string['nosuchservice'] = 'इस मेजबान पर RPC सेवा नहीं चल रही है।';
$string['nosuchtransport'] = 'उस ID के साथ कोई परिवहन मौजूद नहीं है।';
$string['notBASE64'] = 'यह स्ट्रिंग base64 एन्कोडेड प्रारूप में नहीं है। यह एक वैध कुंजी नहीं हो सकती है।';
$string['notPEM'] = 'यह कुंजी PEM  प्रारूप में नहीं है। यह काम नहीं करेगा।';
$string['not_in_range'] = 'आईपी पता <code>{$a}</code> एक वैध विश्वसनीय होस्ट का प्रतिनिधित्व नहीं करता है।';
$string['notenoughidpinfo'] = 'आपका पहचान प्रदाता हमें स्थानीय रूप से आपका खाता बनाने अथवा अद्यतन के लिए पर्अथवाप्त जानकारी नहीं दे रहा है। क्षमा करें!';
$string['notinxmlrpcserver'] = 'एमनेट रिमोट क्लाइंट तक पहुँचने का प्रयास करें, XMLRPC  सर्वर निष्पादन के दौरान नहीं';
$string['notmoodleapplication'] = 'चेतावनी: यह एक मूडल अनुप्रयोग नहीं है, इसलिए कुछ निरीक्षण विधियाँ ठीक से काम नहीं कर सकती हैं।';
$string['notpermittedtojump'] = 'आपके पास इस मूडल सर्वर से दूरस्थ अधिवेशन शुरू करने की अनुमति नहीं है।';
$string['notpermittedtojumpas'] = 'जब आप किसी अन्य उपयोगकर्ता के रूप में लॉग इन हैं तो आप एक दूरस्थ अधिवेशन शुरू नहीं कर सकते हैं।';
$string['notpermittedtoland'] = 'आपके पास दूरस्थ अधिवेशन शुरू करने की अनुमति नहीं है।';
$string['off'] = 'बंद करें';
$string['on'] = 'पर';
$string['options'] = 'विकल्प';
$string['peerprofilefielddesc'] = 'यहाँ आप उन वैश्विक सेटिंग्स को ओवरराइड कर सकते हैं जिनके लिए नए उपयोगकर्ता बनाए जाने पर प्रोफ़ाइल फ़ील्ड्स को भेजना और अभिप्राय करना है';
$string['permittedtransports'] = 'परिवहन की अनुमति';
$string['phperror'] = 'एक आंतरिक PHP  त्रुटि ने आपके अनुरोध को पूरा होने से रोक दिया।';
$string['position'] = 'स्थिति';
$string['postrequired'] = 'निकाल देना के कार्यक्रम के लिए एक POST अनुरोध की आवश्यकता होती है।';
$string['privacy:metadata'] = 'MNet प्लगइन किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करता है।';
$string['profileexportfields'] = 'भेजने के लिए क्षेत्र';
$string['profilefielddesc'] = 'यहाँ आप प्रोफ़ाइल क्षेत्रों की सूची को कॉन्फ़िगर कर सकते हैं जो उपयोगकर्ता खाते बनाए जाने अथवा अद्यतन किए जाने पर एमनेट पर भेजे और प्राप्त किए जाते हैं। आप प्रत्येक MNet सहकर्मी के लिए अलग-अलग इसे ओवरराइड भी कर सकते हैं। ध्अथवान दें कि निम्नलिखित क्षेत्र हमेशा भेजे जाते हैं और वैकल्पिक नहीं होते हैं: {$a}';
$string['profilefields'] = 'प्रोफ़ाइल क्षेत्र';
$string['profileimportfields'] = 'अभिप्राय किए जाने वाले क्षेत्र';
$string['promiscuous'] = 'बेपरवाह';
$string['publickey'] = 'सार्वजनिक कुंजी';
$string['publickey_help'] = 'सार्वजनिक कुंजी स्वचालित रूप से रिमोट सर्वर से प्राप्त होती है।';
$string['publickeyrequired'] = 'आपको एक सार्वजनिक कुंजी प्रदान करनी होगी।';
$string['publish'] = 'प्रकाशित करें';
$string['reallydeleteserver'] = 'क्या आप सुनिश्चित हैं कि आप सर्वर को हटाना चाहते हैं?';
$string['receivedwarnings'] = 'निम्नलिखित चेतावनियाँ प्राप्त हुईं';
$string['recordnoexists'] = 'रिकॉर्ड मौजूद नहीं है।';
$string['reenableserver'] = 'नहीं-इस सर्वर को फिर से सक्षम करने के लिए इस विकल्प का चयन करें।';
$string['registerallhosts'] = 'सभी मेजबानों को रजिस्टर (स्वचालित मोड)';
$string['registerallhostsexplain'] = 'आप उन सभी मेजबानों को रजिस्टर का विकल्प चुन सकते हैं जो स्वचालित रूप से आपसे जुड़ने का प्रयास करते हैं। इसका मतलब है कि किसी भी एमनेट साइट के लिए आपकी मेजबान सूची में एक अभिलेख दिखाई देगा जो आपसे जुड़ती है और आपकी सार्वजनिक कुंजी का अनुरोध करती है। <br /> आपके पास \'सभी मेजबानों\' के लिए सेवाओं को कॉन्फ़िगर करने के लिए नीचे विकल्प है और वहाँ कुछ सेवाओं को सक्षम करके, आप किसी भी दूरस्थ सर्वर को अंधाधुंध रूप से सेवाएं प्रदान करने में सक्षम हैं।';
$string['registerhostsoff'] = 'सभी मेजबानों को रजिस्टर वर्तमान में <b> ऑफ </b> है';
$string['registerhostson'] = 'सभी मेजबानों को दर्ज करें वर्तमान में <b> पर </b>';
$string['remotecourses'] = 'दूरस्थ पाठ्यक्रम';
$string['remotehost'] = 'दूरस्थ मेजबान';
$string['remotehosts'] = 'दूरस्थ मेजबान';
$string['remoteuser'] = 'रिमोट {$a->remotetype} उपयोगकर्ता';
$string['remoteuserinfo'] = 'प्रोफ़ाइल <a href="{$a->remoteurl}">{$a->remotename}</a> से प्राप्त की गई';
$string['requiresopenssl'] = 'नेटवर्किंग के लिए OpenSSL विस्तार की आवश्यकता होती है';
$string['restore'] = 'बहाल';
$string['returnvalue'] = 'वापसी मूल्य';
$string['reviewhostdetails'] = 'मेजबान ब्योरा की पुनर्विलोकन करें';
$string['reviewhostservices'] = 'मेजबान सेवाओं की पुनर्विलोकन करें';
$string['selectaccesslevel'] = 'कृपया सूची से एक अभिगम स्तर का चयन करें।';
$string['selectahost'] = 'कृपया एक दूरस्थ मेजबान चयन करना।';
$string['service'] = 'सेवा का नाम';
$string['serviceid'] = 'सेवा ID';
$string['servicesavailableonhost'] = '{$a} पर उपलब्ध सेवाएँ';
$string['serviceswepublish'] = 'सेवाएँ हम {$a} पर प्रकाशित करते हैं।';
$string['serviceswesubscribeto'] = '{$a} पर सेवाएँ जिनकी हम सदस्यता लेते हैं।';
$string['settings'] = 'सेटिंग्स';
$string['showlocal'] = 'स्थानीय उपयोगकर्ताओं को दिखाएँ';
$string['showremote'] = 'दूरस्थ उपयोगकर्ताओं को दिखाएँ';
$string['ssl_acl_allow'] = 'एसएसओ एसीएल: उपयोगकर्ता \'{$a->user}\' को \'{$a->host}\' से अनुमति दें';
$string['ssl_acl_deny'] = 'SSO ACL: उपयोगकर्ता \'{$a->user}\' को \'{$a->host}\' से प्रतिबंधित करें';
$string['sslverification'] = 'SSL सत्यापन';
$string['sslverification_help'] = 'यह विकल्प आपको HTTPS का उपयोग करके किसी पीयर से कनेक्ट करते समय सुरक्षा स्तर को कॉन्फ़िगर करने की अनुमति देता है।

* कोई नहीं: कोई सुरक्षा स्तर नहीं
* केवल होस्ट सत्यापित करें: SSL प्रमाणपत्र के डोमेन को मान्य करता है
* होस्ट और पीयर सत्यापित करें (अनुशंसित): SSL प्रमाणपत्र के डोमेन और जारीकर्ता को मान्य करता है';
$string['ssoaccesscontrol'] = 'SSO  अभिगम नियंत्रण';
$string['ssoacldescr'] = 'इस पृष्ठ का उपयोग दूरस्थ एमनेट मेजबानों से विशिष्ट उपयोगकर्ताओं को प्रवेश देने/अस्वीकार करने के लिए करें। यह तब कार्यात्मक होता है जब आप दूरस्थ उपयोगकर्ताओं को एस. एस. ओ. सेवाएं प्रदान कर रहे होते हैं। अपने <एम> स्थानीय </एम> उपयोगकर्ताओं की अन्य एमनेट मेजबानों में घूमने की योग्यता को नियंत्रित करने के लिए, उन्हें <em>mnetlogintoremote</em> योग्यता प्रदान करने के लिए भूमिका तंत्र का उपयोग करें।';
$string['ssoaclneeds'] = 'इस कार्यक्षमता को काम करने के लिए, आपके पास नेटवर्किंग ऑन होना चाहिए, साथ ही एमनेट प्रमाणीकरण प्लगइन सक्षम होना चाहिए।';
$string['strict'] = 'सख्त';
$string['subscribe'] = 'सदस्यता लें';
$string['system'] = 'तंत्र';
$string['testclient'] = 'MNet परीक्षण सेवार्थ ग्राहक';
$string['testtrustedhosts'] = 'पते का परीक्षण करें';
$string['testtrustedhostsexplain'] = 'यह देखने के लिए एक IP सम्बोधन दर्ज करें कि क्या यह एक विश्वसनीय मेजबान है।';
$string['theypublish'] = 'वे प्रकाशित करते हैं';
$string['theysubscribe'] = 'वे सदस्यता लेते हैं';
$string['transport_help'] = 'ये विकल्प पारस्परिक हैं, इसलिए आप किसी रिमोट होस्ट को केवल तभी हस्ताक्षरित SSL प्रमाणपत्र का उपयोग करने के लिए मजबूर कर सकते हैं जब आपके सर्वर में भी हस्ताक्षरित SSL  प्रमाणपत्र हो।';
$string['trustedhostsexplain'] = '<p>ट्रस्टेड होस्ट्स मैकेनिज़्म विशिष्ट मशीनों को XML-RPC के माध्यम से Moodle API के किसी भी भाग पर कॉल निष्पादित करने की अनुमति देता है। यह स्क्रिप्ट द्वारा Moodle के व्यवहार को नियंत्रित करने के लिए उपलब्ध है और इसे सक्षम करना एक बहुत ही खतरनाक विकल्प हो सकता है। यदि संदेह हो, तो इसे बंद रखें।</p>
<p><strong>यह किसी भी मानक MNet सुविधा के लिए आवश्यक नहीं है!</strong> इसे तभी चालू करें जब आपको पता हो कि आप क्या कर रहे हैं।</p>
<p>इसे सक्षम करने के लिए, IP पतों या नेटवर्क की एक सूची दर्ज करें,

प्रत्येक पंक्ति में एक।</p> कुछ उदाहरण:</p>
आपका स्थानीय होस्ट:<br />127.0.0.1<br />आपका स्थानीय होस्ट (नेटवर्क ब्लॉक के साथ):<br />127.0.0.1/32<br />केवल IP पता 192.168.0.7 वाला होस्ट:<br />192.168.0.7/32<br />192.168.0.1 और 192.168.0.255 के बीच IP पता वाला कोई भी होस्ट:<br />192.168.0.0/24<br />कोई भी होस्ट:<br />192.168.0.0/0<br />स्पष्ट रूप से, अंतिम उदाहरण एक अनुशंसित कॉन्फ़िगरेशन नहीं है।';
$string['turnitoff'] = 'इसे बंद कर दें';
$string['turniton'] = 'इसे चालू करें';
$string['type'] = 'प्रकार';
$string['unknown'] = 'अज्ञात';
$string['unknownerror'] = 'वार्ता, समझौते की बातचीत, संधिवार्ता के दौरान अज्ञात त्रुटि हुई।';
$string['usercannotchangepassword'] = 'आप यहाँ अपना पासवर्ड नहीं बदल सकते क्योंकि आप एक दूरस्थ उपयोगकर्ता हैं।';
$string['userchangepasswordlink'] = 'आप अपने <a href = "{$a-> wwwroot}/login/change_password.php"> {$a-> description} </a> प्रदाता पर अपना पासवर्ड बदलने में सक्षम हो सकते हैं।';
$string['usernotfullysetup'] = 'आपका उपयोगकर्ता खाता अधूरा है। आपको <a href = "{$a}"> अपने प्रदाता </a> पर वापस जाना होगा और सुनिश्चित करना करना होगा कि आपका प्रोफ़ाइल वहाँ पूरा हो गया है। इसे लागू करने के लिए आपको बार-बार लॉग आउट करने की आवश्यकता हो सकती है।';
$string['usersareonline'] = 'चेतावनी: उस सर्वर के {$a} उपयोगकर्ता वर्तमान में आपकी साइट पर लॉग ऑन हैं।';
$string['validated_by'] = 'इसे नेटवर्क द्वारा मान्य किया जाता हैः <code>{$a}</code>';
$string['verifyhostandpeer'] = 'मेजबान और साथियों को सत्यापित करना';
$string['verifyhostonly'] = 'केवल मेजबान को सत्यापित करना';
$string['verifysignature-error'] = 'हस्ताक्षर सत्यापन विफल रहा। एक त्रुटि हुई है।';
$string['verifysignature-invalid'] = 'हस्ताक्षर सत्यापन विफल रहा। ऐसा प्रतीत होता है कि इस पेलोड पर आपके हस्ताक्षर नहीं थे।';
$string['version'] = 'संस्करण';
$string['warning'] = 'चेतावनी';
$string['wrong-ip'] = 'आपका IP सम्बोधन हमारे अभिलेख पर पते से मेल नहीं खाता है।';
$string['xmlrpc-missing'] = 'इस सुविधा का उपयोग करने में सक्षम होने के लिए आपके पास अपने पीएचपी बिल्ड में  XML-RPC स्थापित होना चाहिए।';
$string['yourhost'] = 'आपके मेजबान';
$string['yourpeers'] = 'आपके साथी';
