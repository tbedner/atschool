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
 * Strings for component 'enrol_self', language 'hi', version '4.4'.
 *
 * @package     enrol_self
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'नामांकन अक्षम अथवा निष्क्रिय है';
$string['canntenrolearly'] = 'आप अभी तक नामांकन नहीं कर सकते हैं; नामांकन {$a} से शुरू होता है।';
$string['canntenrollate'] = 'आप आगे नामांकन नहीं कर सकते हैं, क्योंकि नामांकन {$a} पर समाप्त हो गया है।';
$string['cohortnonmemberinfo'] = 'समूह \'{$a}\' के केवल सदस्य ही स्व-नामांकन कर सकते हैं।';
$string['cohortonly'] = 'केवल समूह के सदस्य';
$string['cohortonly_help'] = 'स्व-नामांकन केवल एक निर्दिष्ट समूह के सदस्यों तक ही सीमित हो सकता है। ध्यान दें कि इस सेटिंग को बदलने का मौजूदा नामांकनों पर कोई प्रभाव नहीं पड़ता है।';
$string['confirmbulkdeleteenrolment'] = 'क्या आप सुनिश्चित हैं कि आप इन उपयोगकर्ता नामांकनों को हटाना चाहते हैं?';
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
$string['defaultrole'] = 'चूक भूमिका नियत कार्य';
$string['defaultrole_desc'] = 'स्व-नामांकन के दौरान उपयोगकर्ताओं को सौंपी जाने वाली भूमिका का चयन करें';
$string['deleteselectedusers'] = 'चयनित उपयोगकर्ता नामांकनों को निकाल देना दें';
$string['editselectedusers'] = 'चयनित उपयोगकर्ता नामांकनों को संपादित करें';
$string['enrolenddate'] = 'आखरी दिन';
$string['enrolenddate_help'] = 'यदि सक्षम है, तो उपयोगकर्ता केवल इस तारीख तक खुद को पंजीकृत कर सकते हैं।';
$string['enrolenddaterror'] = 'नामांकन की अंतिम तिथि प्रारंभ तिथि से पहले नहीं हो सकती है।';
$string['enrolme'] = 'मुझे नामांकित करें';
$string['enrolperiod'] = 'नामांकन की अवधि';
$string['enrolperiod_desc'] = 'समय की चूक अवधि कि नामांकन वैध है। यदि शून्य पर सेट किया जाता है, तो नामांकन की अवधि चूक रूप से असीमित होगी।';
$string['enrolperiod_help'] = 'नामांकन के वैध होने की अवधि, उपयोगकर्ता द्वारा खुद को नामांकित करने के क्षण से शुरू होती है। यदि अक्षम है, तो नामांकन की अवधि असीमित होगी।';
$string['enrolstartdate'] = 'प्रारंभ तिथि';
$string['enrolstartdate_help'] = 'यदि सक्षम है, तो उपयोगकर्ता केवल इस तारीख से खुद को पंजीकृत कर सकते हैं।';
$string['expiredaction'] = 'नामांकन समाप्ति कार्रवाई';
$string['expiredaction_help'] = 'उपयोगकर्ता का नामांकन समाप्त होने पर की जाने वाली कार्रवाई का चयन करें। कृपया ध्यान दें कि कोर्स से नामांकन रद्द करने के दौरान कुछ उपयोगकर्ता डेटा और सेटिंग्स कोर्स से हटा दी जाती हैं।';
$string['expiryinactivemessageenrolledbody'] = 'नमस्कार {$a->user},

आपका {$a->course} कोर्स में नामांकन {$a->timeend} को समाप्त हो रहा है क्योंकि आपने पिछले {$a->inactivetime} दिनों में इसे एक्सेस नहीं किया है।

अपना नामांकन सक्रिय रखने के लिए, {$a->timeend} से पहले लॉग इन करें और <a href="{$a->url}">{$a->course}</a> को एक्सेस करें।';
$string['expiryinactivemessageenrolledsubject'] = 'आपका नामांकन समाप्त हो रहा है: {$a->course}';
$string['expirymessageenrolledbody'] = 'प्रिय {$a->user},

यह सूचना है कि पाठ्यक्रम \'{$a->course}\' में आपका नामांकन {$a->timeend} को समाप्त हो रहा है।

यदि आपको सहायता की आवश्यकता है, तो कृपया {$a->enroller} से संपर्क करें।';
$string['expirymessageenrolledsubject'] = 'स्व-नामांकन समाप्ति अधिसूचना';
$string['expirymessageenrollerbody'] = 'निम्नलिखित उपयोगकर्ताओं के लिए \'{$a->course}\' कोर्स में स्व-नामांकन अगले {$a->threshold} दिनों के भीतर समाप्त हो जाएगा:

{$a->users}

नामांकन की अवधि बढ़ाने के लिए, {$a->extendurl} पर जाएं';
$string['expirymessageenrollersubject'] = 'स्व-नामांकन समाप्ति अधिसूचना';
$string['expirynotifyall'] = 'नामांकन करने वाला और नामांकित उपयोगकर्ता';
$string['expirynotifyenroller'] = 'केवल नामांकन करने वाला';
$string['groupkey'] = 'समूह नामांकन कुंजी का उपयोग करें।';
$string['groupkey_desc'] = 'चूकना रूप से समूह नामांकन कुंजी का उपयोग करें।';
$string['groupkey_help'] = 'क्रम तक पहुँच को केवल उन लोगों तक सीमित करने के अलावा जो कुंजी जानते हैं, समूह, दल, वर्ग, टोली नामांकन कुंजी के उपयोग का मतलब है कि उपयोगकर्ताओं को क्रम में नामांकन करते समय स्वचालित रूप से समूह, दल, वर्ग, टोलीों में जोड़ा जाता है। दृष्टव्‍य: क्रम के लिए एक नामांकन कुंजी को स्व-नामांकन सेटिंग्स के साथ-साथ समूह, दल, वर्ग, टोली सेटिंग्स में समूह नामांकन कुंजी में निर्दिष्ट किया जाना चाहिए।';
$string['keyholder'] = 'आपको यह नामांकन कुंजी निम्नलिखित से मिलनी चाहिए थी:';
$string['longtimenosee'] = 'उसके बाद निष्क्रिय को हटा दें';
$string['longtimenosee_help'] = 'यदि उपयोगकर्ताओं ने लंबे समय तक किसी क्रम तक पहुंच नहीं की है, तो वे स्वचालित रूप से अपंजीकृत हो जाते हैं। यह मानदंड उस समय सीमा को निर्दिष्ट करता है।';
$string['maxenrolled'] = 'अधिकतम नामांकित उपयोगकर्ता';
$string['maxenrolled_help'] = 'स्व-नामांकन करने वाले उपयोगकर्ताओं की उच्‍चतम संख्या निर्दिष्ट करता है। 0 का अर्थ है कोई सीमा नहीं।';
$string['maxenrolledreached'] = 'स्व-नामांकन करने की अनुमत देने वाले उपयोगकर्ताओं की उच्‍चतम संख्या पहले ही पहुंच चुकी थी।';
$string['messageprovider:expiry_notification'] = 'स्व-नामांकन समाप्ति अधिसूचनाएँ';
$string['newenrols'] = 'नए स्व-नामांकन की अनुमति देना';
$string['newenrols_desc'] = 'उपयोगकर्ताओं को चूकना रूप से नए पाठ्यक्रमों में स्व-नामांकन करने की अनुमति देना।';
$string['newenrols_help'] = 'यह सेटिंग यह निर्धारित करती है कि कोई उपयोगकर्ता इस क्रम में नामांकन कर सकता है या नहीं।';
$string['nopassword'] = 'किसी नामांकन कुंजी की अपेक्षितता नहीं है।';
$string['password'] = 'नामांकन कुंजी';
$string['password_help'] = 'एक नामांकन कुंजी क्रम तक पहुँच को केवल उन लोगों तक सीमित करने में सक्षम बनाती है जो कुंजी जानते हैं। यदि क्षेत्र खाली दृष्टव्‍य दिया जाता है, तो कोई भी उपयोगकर्ता क्रम में नामांकन कर सकता है। यदि एक नामांकन कुंजी निर्दिष्ट की गई है, तो क्रम में नामांकन करने का प्रयास करने वाले किसी भी उपयोगकर्ता को कुंजी की आपूर्ति करने की अपेक्षितता होगी। ध्यान दें कि एक उपयोगकर्ता को क्रम में नामांकन करते समय केवल एक बार नामांकन कुंजी की आपूर्ति करने की अपेक्षितता होती है।';
$string['passwordinvalid'] = 'गलत नामांकन कुंजी, कृपया फिर से प्रयास करें';
$string['passwordinvalidhint'] = 'वह नामांकन कुंजी गलत थी, कृपया फिर से कोशिश करें (यहाँ एक संकेत है-यह \'{$a}\' से शुरू होता है)';
$string['passwordmatchesgroupkey'] = 'इस नामांकन कुंजी का उपयोग पहले से ही एक समूह नामांकन कुंजी के रूप में किया जाता है।';
$string['pluginname'] = 'स्व-नामांकन';
$string['pluginname_desc'] = 'स्व-नामांकन प्लगइन उपयोगकर्ताओं को यह चुनने की अनुमति देता है कि वे किन क्रम ों में भाग लेना चाहते हैं। क्रम ों को नामांकन कुंजी द्वारा संरक्षित किया जा सकता है। आंतरिक रूप से नामांकन शारीरिक नामांकन प्लगइन के माध्यम से किया जाता है जिसे उसी क्रम में सक्षम किया जाना है।';
$string['privacy:metadata'] = 'स्व-नामांकन प्लगइन किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करता है।';
$string['requirepassword'] = 'नामांकन कुंजी की आवश्यकता है';
$string['requirepassword_desc'] = 'नए पाठ्यक्रमों में नामांकन कुंजी की आवश्यकता होती है और मौजूदा पाठ्यक्रमों से नामांकन कुंजी को हटाने से रोकें।';
$string['role'] = 'चूक सौंपी गई भूमिका';
$string['self:config'] = 'स्व-नामांकन उदाहरणों को कॉन्फ़िगर करें';
$string['self:enrolself'] = 'क्रम में स्व-नामांकन करें';
$string['self:holdkey'] = 'स्व-नामांकन कुंजी धारक के रूप में दिखाई देता है';
$string['self:manage'] = 'नामांकित उपयोगकर्ताओं का प्रबंधन करें';
$string['self:unenrol'] = 'क्रम से उपयोगकर्ताओं का नामांकन रद्द करें';
$string['self:unenrolself'] = 'क्रम से स्वयं का नामांकन रद्द करें';
$string['sendcoursewelcomemessage'] = 'क्रम स्वागत सन्देश, सूचना भेजें';
$string['sendcoursewelcomemessage_help'] = 'जब कोई उपयोगकर्ता स्वयं क्रम में नामांकन करता है, तो उन्हें एक स्वागत सन्देश, सूचना ईमेल भेजा जा सकता है। यदि क्रम संपर्क (चूकना रूप से शिक्षक) से भेजा जाता है, और एक से अधिक उपयोगकर्ताओं की यह भूमिका है, तो ईमेल पहले उपयोगकर्ता से भेजा जाता है जिसे भूमिका सौंपी जाती है।';
$string['sendexpirynotificationstask'] = 'स्व-नामांकन समाप्ति अधिसूचना कार्य भेजता है';
$string['showhint'] = 'संकेत दिखाएँ';
$string['showhint_desc'] = 'अतिथि अभिगम कुंजी का पहला अक्षर दिखाएँ।';
$string['status'] = 'प्रचलित स्व-नामांकन को सक्रिय रखें';
$string['status_desc'] = 'नए पाठ्यक्रमों में स्व-नामांकन प्रणाली को सक्षम करें।';
$string['status_help'] = 'यदि नहीं निर्धारित किया जाता है, तो क्रम में खुद को नामांकित करने वाले किसी भी मौजूदा प्रतिभागी को अब प्रवेश नहीं मिलेगा।';
$string['syncenrolmentstask'] = 'स्व-नामांकन कार्य को समन्वित करें';
$string['unenrol'] = 'उपयोगकर्ता को अनइनरोल करें';
$string['unenrolselfconfirm'] = 'क्या आप वास्तव में क्रम "{$a}" से खुद को अनरोल करना चाहते हैं?';
$string['unenroluser'] = 'क्या आप वाकई "{$a->user}" को "{$a->course}" कोर्स से अनरजिस्टर करना चाहते हैं?';
$string['unenrolusers'] = 'उपयोगकर्ताओं का नामांकन रद्द करें';
$string['usepasswordpolicy'] = 'पासवर्ड नीति का उपयोग करें';
$string['usepasswordpolicy_desc'] = 'नामांकन कुंजी के लिए स्तर कूटशब्द नीति का उपयोग करें।';
$string['welcometocourse'] = '{$a} में आपका स्वागत है!';
$string['welcometocoursetext'] = '{$a->coursename} में आपका स्वागत है!

अगर आपने अभी तक अपना प्रोफ़ाइल पेज सम्पादित नहीं किया है, तो उसे सम्पादित कीजिए ताकि हम आपके बारे में अधिक जान सकें:

{$a->profileurl}';
