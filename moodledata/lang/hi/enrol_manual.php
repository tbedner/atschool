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
 * Strings for component 'enrol_manual', language 'hi', version '4.4'.
 *
 * @package     enrol_manual
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced'] = 'उन्नत';
$string['alterstatus'] = 'स्थिति बदलें';
$string['altertimeend'] = 'अंतिम समय बदलें';
$string['altertimestart'] = 'शुरुआत के समय को बदलें';
$string['assignrole'] = 'भूमिका निर्धारित करें';
$string['assignroles'] = 'भूमिका निर्धारित करें';
$string['browsecohorts'] = 'समूहों को ब्राउज़ करें';
$string['browseusers'] = 'ब्राउज़ करें उपयोगकर्ता';
$string['confirmbulkdeleteenrolment'] = 'क्या आप सुनिश्चित हैं कि आप इन उपयोगकर्ता नामांकनों को हटाना चाहते हैं?';
$string['defaultperiod'] = 'चूक नामांकन अवधि';
$string['defaultperiod_desc'] = 'समय की चूक अवधि कि नामांकन वैध है। यदि शून्य पर सेट किया जाता है, तो नामांकन की अवधि चूक रूप से असीमित होगी।';
$string['defaultperiod_help'] = 'समय की चूक अवधि कि नामांकन वैध है, उपयोगकर्ता के नामांकन के क्षण से शुरू होती है। यदि अक्षम है, तो नामांकन की अवधि चूक रूप से असीमित होगी।';
$string['defaultstart'] = 'चूक नामांकन की शुरुआत';
$string['deleteselectedusers'] = 'चयनित उपयोगकर्ता नामांकनों को निकाल देना दें';
$string['editselectedusers'] = 'चयनित उपयोगकर्ता नामांकनों को संपादित करें';
$string['enrolledincourserole'] = '"{$a->role}" के रूप में "{$a->course}" में नामांकित';
$string['enrolusers'] = 'उपयोगकर्ता को संपादित करें';
$string['enroluserscohorts'] = 'चयनित उपयोगकर्ताओं और समूहों को नामांकित करें';
$string['expiredaction'] = 'नामांकन समाप्ति कार्रवाई';
$string['expiredaction_help'] = 'उपयोगकर्ता नामांकन की अवधि समाप्त होने पर करने के लिए कार्रवाई का चयन करें। कृपया ध्यान दें कि क्रम का नामांकन न करने के दौरान कुछ उपयोगकर्ता डेटा और सेटिंग्स को क्रम से साफ कर दिया जाता है।';
$string['expirymessageenrolledbody'] = 'प्रिय {$a->user},

यह सूचना है कि पाठ्यक्रम \'{$a->course}\' में आपका नामांकन {$a->timeend} को समाप्त हो रहा है।

यदि आपको सहायता की आवश्यकता है, तो कृपया {$a->enroller} से संपर्क करें।';
$string['expirymessageenrolledsubject'] = 'नामांकन समाप्ति अधिसूचना';
$string['expirymessageenrollerbody'] = 'निम्नलिखित उपयोगकर्ताओं के लिए \'{$a->course}\' कोर्स में नामांकन अगले {$a->threshold} दिनों के भीतर समाप्त हो जाएगा:

{$a->users}

नामांकन की अवधि बढ़ाने के लिए, {$a->extendurl} पर जाएं';
$string['expirymessageenrollersubject'] = 'नामांकन समाप्ति अधिसूचना';
$string['managemanualenrolements'] = 'शारीरिक नामांकन का प्रबंधन करें';
$string['manual:config'] = 'शारीरिक नामांकन उदाहरणों को कॉन्फ़िगर करें';
$string['manual:enrol'] = 'उपयोगकर्ताओं को नामांकित करें';
$string['manual:manage'] = 'उपयोगकर्ता नामांकन का प्रबंधन करें';
$string['manual:unenrol'] = 'क्रम से उपयोगकर्ताओं का नामांकन रद्द करें';
$string['manual:unenrolself'] = 'क्रम से स्वयं का नामांकन रद्द करें';
$string['manualpluginnotinstalled'] = '"मैनुअल" प्लगइन अभी तक स्थापित नहीं किया गया है';
$string['messageprovider:expiry_notification'] = 'शारीरिक नामांकन समाप्ति अधिसूचनाएँ';
$string['now'] = 'अब';
$string['pluginname'] = 'शारीरिक नामांकन';
$string['pluginname_desc'] = 'शारीरिक नामांकन प्लगइन उपयोगकर्ताओं को एक अध्यापक जैसी विनियोजन करना अनुमति के साथ एक उपयोगकर्ता द्वारा क्रम प्रशासन सेटिंग्स में एक लिंक के माध्यम से मैन्युअल रूप से नामांकन करने की अनुमति देता है। प्लगइन को सामान्यत:, आम तौर पर सक्षम किया जाना चाहिए, क्योंकि कुछ अन्य नामांकन प्लगइन्स, जैसे कि स्व-नामांकन, के लिए इसकी आवश्यकता होती है।';
$string['privacy:metadata'] = 'शारीरिक नामांकन प्लगइन किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करता है।';
$string['selectcohorts'] = 'समूहों का चयन करें';
$string['selection'] = 'चयन, प्रवरण';
$string['selectusers'] = 'उपयोगकर्ताओं का चयन करें';
$string['sendexpirynotificationstask'] = 'शारीरिक नामांकन समाप्ति अधिसूचना कार्य भेजता है';
$string['status'] = 'शारीरिक नामांकन सक्षम करें';
$string['status_desc'] = 'आंतरिक रूप से नामांकित उपयोगकर्ताओं को क्रम तक पहुँच की अनुमति देना। इसे ज्यादातर मामलों में सक्षम रखा जाना चाहिए।';
$string['status_help'] = 'यह सेटिंग यह निर्धारित करती है कि क्या उपयोगकर्ताओं को क्रम प्रशासन सेटिंग्स में एक लिंक के माध्यम से, एक अध्यापक जैसी विनियोजन करना अनुमति के साथ उपयोगकर्ता द्वारा मैन्युअल रूप से नामांकित किया जा सकता है।';
$string['statusdisabled'] = 'निःशक्त';
$string['statusenabled'] = 'सक्रिय';
$string['syncenrolmentstask'] = 'मैन्युअल नामांकन कार्य को सिंक्रनाइज़ करें';
$string['unenrol'] = 'उपयोगकर्ता का नामांकन रद्द करें';
$string['unenrolselectedusers'] = 'चयनित उपयोगकर्ताओं को नामांकन से हटा दें';
$string['unenrolselfconfirm'] = 'क्या आप वाकई कोर्स "{$a}" से अपना नाम हटवाना चाहते हैं?';
$string['unenroluser'] = 'क्या आप वाकई "{$a->user}" को "{$a->course}" कोर्स से अनरजिस्टर करना चाहते हैं?';
$string['unenrolusers'] = 'उपयोगकर्ताओं का नामांकन रद्द करें';
$string['wscannotenrol'] = 'प्लगइन इंस्टेंस किसी उपयोगकर्ता को कोर्स आईडी = {$a->courseid} में मैन्युअल रूप से नामांकित नहीं कर सकता है।';
$string['wsnoinstance'] = 'इस कोर्स (आईडी = {$a->courseid}) के लिए मैनुअल एनरोलमेंट प्लगइन इंस्टेंस मौजूद नहीं है या अक्षम है।';
$string['wsusercannotassign'] = 'आपको इस कोर्स ({$a->courseid}) में इस उपयोगकर्ता ({$a->userid}) को यह भूमिका ({$a->roleid}) सौंपने की अनुमति नहीं है।';
