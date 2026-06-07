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
 * Strings for component 'enrol_paypal', language 'hi', version '4.4'.
 *
 * @package     enrol_paypal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'भूमिका निर्धारित करें';
$string['businessemail'] = 'पेपैल व्यावसायिक ईमेल';
$string['businessemail_desc'] = 'आपके व्यावसायिक पेपैल खाते का ईमेल सम्बोधन';
$string['cost'] = 'नामांकन लागत';
$string['costerror'] = 'नामांकन लागत संख्यात्मक नहीं है';
$string['costorkey'] = 'कृपया नामांकन के निम्नलिखित तरीकों में से एक चुनें।';
$string['currency'] = 'मुद्रा';
$string['defaultrole'] = 'चूक भूमिका नियत कार्य';
$string['defaultrole_desc'] = 'पेपैल नामांकन के दौरान उपयोगकर्ताओं को सौंपी जाने वाली भूमिका का चयन करें';
$string['enrolenddate'] = 'अंतिम तिथि';
$string['enrolenddate_help'] = 'यदि सक्षम है, तो उपयोगकर्ता केवल इस तिथि तक नामांकन कर सकते हैं।';
$string['enrolenddaterror'] = 'नामांकन की अंतिम तिथि प्रारंभ तिथि से पहले नहीं हो सकती है।';
$string['enrolperiod'] = 'नामांकन की अवधि';
$string['enrolperiod_desc'] = 'समय की चूक अवधि कि नामांकन वैध है। यदि शून्य पर सेट किया जाता है, तो नामांकन की अवधि चूक रूप से असीमित होगी।';
$string['enrolperiod_help'] = 'समय की अवधि कि नामांकन वैध है, उपयोगकर्ता के नामांकन के क्षण से शुरू होती है। यदि अक्षम है, तो नामांकन की अवधि असीमित होगी।';
$string['enrolstartdate'] = 'प्रारंभ तिथि';
$string['enrolstartdate_help'] = 'यदि सक्षम है, तो उपयोगकर्ता केवल इस तारीख से नामांकन कर सकते हैं।';
$string['errdisabled'] = 'पेपैल नामांकन प्लगइन अक्षम है और भुगतान अधिसूचनाओं को संभालता नहीं है।';
$string['erripninvalid'] = 'तत्काल भुगतान अधिसूचना को पेपैल द्वारा सत्यापित नहीं किया गया है।';
$string['errpaypalconnect'] = 'तत्काल भुगतान अधिसूचना को सत्यापित करना के लिए {$a-> url} से जुड़ नहीं सका: {$a-> result}';
$string['expiredaction'] = 'नामांकन समाप्ति कार्रवाई';
$string['expiredaction_help'] = 'उपयोगकर्ता नामांकन की अवधि समाप्त होने पर करने के लिए कार्रवाई का चयन करें। कृपया ध्यान दें कि क्रम का नामांकन न करने के दौरान कुछ उपयोगकर्ता डेटा और सेटिंग्स को क्रम से साफ कर दिया जाता है।';
$string['mailadmins'] = 'प्रशासक को सूचित करें';
$string['mailstudents'] = 'छात्रों को सूचित करें';
$string['mailteachers'] = 'शिक्षकों को सूचित करें';
$string['messageprovider:paypal_enrolment'] = 'पेपैल नामांकन संदेश';
$string['nocost'] = 'इस क्रम में नामांकन से जुड़ी कोई लागत नहीं है!';
$string['paypal:config'] = 'पेपैल नामांकन उदाहरणों को कॉन्फ़िगर करें';
$string['paypal:manage'] = 'नामांकित उपयोगकर्ताओं का प्रबंधन करें';
$string['paypal:unenrol'] = 'क्रम से उपयोगकर्ताओं का नामांकन रद्द करें';
$string['paypal:unenrolself'] = 'क्रम से स्वयं का नामांकन रद्द करें';
$string['paypalaccepted'] = 'पेपैल भुगतान स्वीकार किए गए';
$string['pluginname'] = 'पेपैल';
$string['pluginname_desc'] = 'पेपैल मॉड्यूल आपको भुगतान किए गए क्रम स्थापित करने की अनुमति देता है। यदि किसी भी क्रम की लागत शून्य है, तो छात्रों को इंदराज के लिए भुगतान करने के लिए नहीं कहा जाता है। एक साइट-व्यापी लागत है जिसे आप यहाँ पूरी साइट के लिए चूकना के रूप में निर्धारित करते हैं और फिर एक क्रम सेटिंग जिसे आप प्रत्येक क्रम के लिए व्यक्तिगत रूप से निर्धारित कर सकते हैं। क्रम की लागत साइट की लागत से अधिक है।';
$string['privacy:metadata:enrol_paypal:enrol_paypal'] = 'पेपैल नामांकन के लिए पेपैल लेनदेन के बारे में जानकारी।';
$string['privacy:metadata:enrol_paypal:enrol_paypal:business'] = 'भुगतान प्राप्तकर्ता (अथवानी व्अथवापारी) का ईमेल सम्बोधन अथवा पेपैल खाता आईडी।';
$string['privacy:metadata:enrol_paypal:enrol_paypal:courseid'] = 'बेचे गए क्रम की पहचान।';
$string['privacy:metadata:enrol_paypal:enrol_paypal:instanceid'] = 'क्रम में नामांकन उदाहरण की पहचान।';
$string['privacy:metadata:enrol_paypal:enrol_paypal:item_name'] = 'क्रम का पूरा नाम कि इसका नामांकन बेच दिया गया है।';
$string['privacy:metadata:enrol_paypal:enrol_paypal:memo'] = 'एक दृष्टव्‍य जो खरीदार द्वारा पेपैल वेबसाइट भुगतान दृष्टव्‍य क्षेत्र में दर्ज किया गया था।';
$string['privacy:metadata:enrol_paypal:enrol_paypal:option_selection1_x'] = 'खरीदार का पूरा नाम।';
$string['privacy:metadata:enrol_paypal:enrol_paypal:parent_txn_id'] = 'धनवापसी, प्रतिवर्ती अथवा रद्द प्रतिवर्ती के मामले में, यह मूल लेनदेन की लेनदेन आईडी होगी।';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_status'] = 'भुगतान की स्थिति।';
$string['privacy:metadata:enrol_paypal:enrol_paypal:payment_type'] = 'यह मानता है कि भुगतान को ईचेक (ईचेक) के साथ वित्त पोषित किअथवा गअथवा था, अथवा पेपैल शेष राशि, जमा कार्ड, अथवा तत्काल हस्तांतरण (तत्काल) के साथ वित्त पोषित किअथवा गअथवा था।';
$string['privacy:metadata:enrol_paypal:enrol_paypal:pending_reason'] = 'भुगतान की स्थिति लंबित होने का कारण (यदि ऐसा है तो)।';
$string['privacy:metadata:enrol_paypal:enrol_paypal:reason_code'] = 'भुगतान की स्थिति को उलटने, वापस करने, रद्द करने अथवा अस्वीकार करने का कारण (यदि हैसियत उनमें से एक है)।';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_email'] = 'भुगतान प्राप्तकर्ता (अर्थात व्यापारी) का प्राथमिक ईमेल पता।';
$string['privacy:metadata:enrol_paypal:enrol_paypal:receiver_id'] = 'भुगतान प्राप्तकर्ता (अर्थात व्यापारी) की अद्वितीय पेपैल  खाता ID';
$string['privacy:metadata:enrol_paypal:enrol_paypal:tax'] = 'भुगतान पर लगाए गए कर की राशि।';
$string['privacy:metadata:enrol_paypal:enrol_paypal:timeupdated'] = 'भुगतान के बारे में पेपैल द्वारा मूडल को अधिसूचित जाने का समय।';
$string['privacy:metadata:enrol_paypal:enrol_paypal:txn_id'] = 'खरीदार से भुगतान के लिए व्यापारी का मूल लेनदेन पहचान संख्या, जिसविरुद्ध मामला दर्ज किया गया था';
$string['privacy:metadata:enrol_paypal:enrol_paypal:userid'] = 'क्रम नामांकन खरीदने वाले उपयोगकर्ता की ID';
$string['privacy:metadata:enrol_paypal:paypal_com'] = 'पेपैल नामांकन प्लगइन उपयोगकर्ता डेटा को मूडल से पेपैल वेबसाइट पर प्रेषित करता है।';
$string['privacy:metadata:enrol_paypal:paypal_com:address'] = 'क्रम खरीदने वाले उपयोगकर्ता का सम्बोधन।';
$string['privacy:metadata:enrol_paypal:paypal_com:city'] = 'उपयोगकर्ता का शहर जो क्रम खरीद रहा है।';
$string['privacy:metadata:enrol_paypal:paypal_com:country'] = 'क्रम खरीदने वाले उपयोगकर्ता का देश।';
$string['privacy:metadata:enrol_paypal:paypal_com:custom'] = 'एक हाइफन-अलग स्ट्रिंग जिसमें उपयोगकर्ता (खरीदार) की आईडी, क्रम की ID, नामांकन उदाहरण की आईडी होती है।';
$string['privacy:metadata:enrol_paypal:paypal_com:email'] = 'क्रम खरीदने वाले उपयोगकर्ता का ईमेल सम्बोधन।';
$string['privacy:metadata:enrol_paypal:paypal_com:first_name'] = 'क्रम खरीदने वाले उपयोगकर्ता का पहला नाम।';
$string['privacy:metadata:enrol_paypal:paypal_com:last_name'] = 'क्रम खरीदने वाले उपयोगकर्ता का अंतिम नाम।';
$string['privacy:metadata:enrol_paypal:paypal_com:os0'] = 'खरीदार का पूरा नाम।';
$string['processexpirationstask'] = 'पेपैल नामांकन समाप्ति अधिसूचना कार्य भेजता है';
$string['sendpaymentbutton'] = 'पेपैल के माध्यम से भुगतान भेजें';
$string['status'] = 'पेपैल नामांकन की अनुमति देना';
$string['status_desc'] = 'उपयोगकर्ताओं को चूकना रूप से क्रम में नामांकन करने के लिए पेपैल का उपयोग करने की अनुमति देना।';
$string['transactions'] = 'पेपैल लेनदेन';
$string['unenrolselfconfirm'] = 'क्या आप वास्तव में क्रम "{$a}" से खुद को अनरोल करना चाहते हैं?';
