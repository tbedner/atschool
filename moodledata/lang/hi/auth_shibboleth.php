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
 * Strings for component 'auth_shibboleth', language 'hi', version '4.4'.
 *
 * @package     auth_shibboleth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_logo'] = 'प्रमाणीकरण प्रणाली लोगो';
$string['auth_shib_auth_logo_description'] = 'शिब्बोलेथ प्रमाणीकरण प्रणाली के लिए एक लोगो प्रदान करें जो आपके उपयोगकर्ताओं के लिए परिचित है। यह आपके शिब्बोलेथ महासंघ का लोगो हो सकता है, e.g। <tt>SWITCHaai Login</tt> or <tt>InCommon Login</tt> अथवा इसी तरह।';
$string['auth_shib_auth_method'] = 'प्रमाणीकरण प्रणाली नाम';
$string['auth_shib_auth_method_description'] = 'शिब्बोलेथ प्रमाणीकरण प्रणाली के लिए एक नाम प्रदान करें जो आपके उपयोगकर्ताओं के लिए परिचित है। यह आपके शिब्बोलेथ महासंघ का नाम हो सकता है, e.g। <tt>SWITCHaai Login</tt> or <tt>InCommon Login</tt> अथवा इसी तरह';
$string['auth_shib_changepasswordurl'] = 'पासवर्ड बदलने का URL';
$string['auth_shib_contact_administrator'] = 'यदि आप दिए गए संगठनों से संबद्ध नहीं हैं और आपको इस सर्वर पर एक क्रम तक पहुँच की आवश्यकता है, तो कृपया  <a href="mailto:{$a}">Moodle Administrator</a> से संपर्क करें।';
$string['auth_shib_convert_data'] = 'डेटा परिवर्तन, परिशोधन API';
$string['auth_shib_convert_data_description'] = 'आप इस एपीआई का उपयोग शिब्बोलेथ द्वारा बशर्ते, यह कि गए डेटा को और आशोधन करना, तरमीम करना, अंशांतरित करना के लिए कर सकते हैं। आगे के निर्देशों के लिए <a href="{$a}">README</a>';
$string['auth_shib_convert_data_filepath_warning'] = 'आप उस दाखिल करना का उपयोग नहीं कर सकते हैं जो चालू, प्रचलित साइट डेटा निर्देशिका ($cfg-> dataroot) के भीतर डेटा परिवर्तन, परिशोधन API के रूप में स्थित है।';
$string['auth_shib_convert_data_warning'] = 'दाखिल करना मौजूद नहीं है अथवा वेबसर्वर प्रक्रम द्वारा पढ़ने योग्य नहीं है!';
$string['auth_shib_idp_list'] = 'पहचान प्रदाता';
$string['auth_shib_idp_list_description'] = 'उपयोगकर्ता को लॉगिन पृष्ठ पर चुनने देने के लिए पहचान प्रदाता इकाइयों की एक सूची प्रदान करें। प्रत्येक पंक्ति पर आई. डी. पी. (शिब्बोलेथ मेटाडेटा फ़ाइल देखें) और IdP  के नाम के लिए एक अल्पविराम-अलग टुपल होना चाहिए क्योंकि यह ड्रॉप-डाउन सूची में प्रदर्शित किया जाएगा। एक वैकल्पिक तीसरे मानदंड के रूप में आप एक शिब्बोलेथ अधिवेशन आरंभकर्ता का स्थान जोड़ सकते हैं जिसका उपयोग उस स्थिति में किया जाएगा जब आपका मूडल अधिष्ठापन एक बहु संघ व्यवस्था, ढांचा का हिस्सा है।';
$string['auth_shib_instructions'] = 'यदि आपका संस्था इसका समर्थन करता है, तो शिब्बोलेथ के माध्यम से पहुँच प्राप्त करने के लिए <a href="{$a}">Shibboleth login</a> का उपयोग करें। अन्यथा, यहाँ दिखाए गए सामान्य लॉगिन प्रपत्र का उपयोग करें।';
$string['auth_shib_instructions_help'] = 'यहाँ आपको अपने उपयोगकर्ताओं को शिब्बोलेथ की व्याख्या करने के लिए कस्टम निर्देश प्रदान करने चाहिए। यह निर्देश धारा में लॉगिन पृष्ठ पर दिखाया जाएगा। निर्देशों में "<b> {$a} </b>" का एक लिंक सम्मिलित करना होना चाहिए जिस पर उपयोगकर्ता लॉग इन करना चाहते हैं।';
$string['auth_shib_instructions_key'] = 'लॉगिन निर्देश';
$string['auth_shib_integrated_wayf'] = 'मूडल WAYF सेवा';
$string['auth_shib_integrated_wayf_description'] = 'यदि आप इसे सक्षम करते हैं, तो मूडल शिबबोलेथ के लिए कॉन्फ़िगर किए गए के बजाय अपनी खुद की WAYF सेवा का उपयोग करेगा। मूडल इस वैकल्पिक लॉगिन पृष्ठ पर एक ड्रॉप-डाउन सूची प्रदर्शित करेगा जहाँ उपयोगकर्ता को अपने पहचान प्रदाता का चयन करना होगा।';
$string['auth_shib_logout_return_url'] = 'वैकल्पिक लॉगआउट वापसी URL';
$string['auth_shib_logout_return_url_description'] = 'URL प्रदान करें कि लॉग आउट करने के बाद शिबबोलेथ उपयोगकर्ताओं को पुनर्निर्देशित किया जाएगा। <br /> यदि खाली छोड़ दिया जाता है, तो उपयोगकर्ताओं को उस स्थान पर पुनर्निर्देशित किया जाएगा जहाँ मूडल उपयोगकर्ताओं को पुनर्निर्देशित करेगा';
$string['auth_shib_logout_url'] = 'शिबबोलेथ सेवा प्रदाता लॉगआउट हैंडलर URL';
$string['auth_shib_logout_url_description'] = 'शिबबोलेथ सेवा प्रदाता लॉगआउट हैंडलर को यूआरएल प्रदान करें। यह आमतौर पर <tt>/Shibboleth.sso/Logout</tt> होता है।';
$string['auth_shib_no_organizations_warning'] = 'यदि आप एकीकृत WAYF  सेवा का उपयोग करना चाहते हैं, तो आपको पहचान प्रदाता संस्थाओं, उनके नामों और वैकल्पिक रूप से एक अधिवेशन आरंभकर्ता की एक अल्पविराम-अलग सूची प्रदान करनी चाहिए।';
$string['auth_shib_only'] = 'केवल शिब्बोलेथ';
$string['auth_shib_only_description'] = 'इस विकल्प की जाँच करें कि क्या शिबोलेथ प्रमाणीकरण प्रवर्तित, लागू जाएगा';
$string['auth_shib_username_description'] = 'वेबसर्वर शिबबोलेथ पर्यावरण चर का नाम जिसका उपयोग मॉड्यूल उपयोगकर्ता नाम के रूप में किया जाएगा';
$string['auth_shibboleth_errormsg'] = 'कृपया उस संस्था का चयन करें जिसका आप भाग हैं!';
$string['auth_shibboleth_login'] = 'शिब्बोलेथ लॉगइन';
$string['auth_shibboleth_manual_login'] = 'नियमावली लॉगइन';
$string['auth_shibboleth_select_member'] = 'मैं इसका भाग हूँ।....';
$string['auth_shibboleth_select_organization'] = 'शिब्बोलेथ के माध्यम से प्रमाणीकरण के लिए, कृपया ड्रॉप-डाउन मेनू से अपने संगठन का चयन करें:';
$string['auth_shibbolethdescription'] = 'इस प्रणाली का उपयोग करके उपयोगकर्ताओं को शिबबोलेथ का उपयोग करके बनाया और प्रमाणित किया जाता है। सेट-अप ब्योरा के लिए,<a href="{$a}">Shibboleth README</a> देखें';
$string['pluginname'] = 'शिब्बोलेथ';
$string['privacy:metadata'] = 'शिबोलेथ प्रमाणीकरण प्लगइन किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करता है।';
$string['shib_invalid_account_error'] = 'आप शिब्बोलेथ प्रमाणित प्रतीत होते हैं लेकिन आपके उपयोगकर्ता नाम के लिए मूडल का कोई वैध लेखा जोखा देना नहीं है। हो सकता है कि आपका लेखा जोखा देना मौजूद न हो अथवा इसे निलंबित कर दिअथवा गअथवा हो।';
$string['shib_no_attributes_error'] = 'आप शिब्बोलेथ प्रमाणित प्रतीत होते हैं लेकिन मूडल को कोई उपयोगकर्ता विशेषताएँ प्राप्त करना नहीं हुईं। कृपअथवा जाँच करें कि आपका पहचान प्रदाता आवश्यक, जरूरी विशेषताओं ({$a}) को उस सेवा प्रदाता को जारी करता है जिसका मूडल चल रहा है अथवा इस सर्वर के वेबमास्टर को सूचित करता है।';
$string['shib_not_all_attributes_error'] = 'मूडल को कुछ शिब्बोलेथ विशेषताओं की आवश्यकता होती है जो आपके मामले में मौजूद नहीं हैं। विशेषताएँ हैं: {$a} <b/> कृपअथवा इस सर्वर के वेबमास्टर अथवा अपने पहचान प्रदाता से संपर्क करें।';
$string['shib_not_set_up_error'] = 'शिबबोलेथ प्रमाणीकरण सही ढंग से स्थापित नहीं किअथवा गअथवा प्रतीत होता है क्योंकि इस पृष्ठ के लिए कोई शिबबोलेथ पर्अथवावरण चर मौजूद नहीं हैं। कृपअथवा शिबबोलेथ प्रमाणीकरण स्थापित करने के बारे में आगे के निर्देशों के लिए <a href="{$a}">README</a> से परामर्श करें अथवा इस मूडल अधिष्ठापन के वेबमास्टर से संपर्क करें।';
