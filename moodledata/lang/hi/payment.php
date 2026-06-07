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
 * Strings for component 'payment', language 'hi', version '4.4'.
 *
 * @package     payment
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountarchived'] = 'अभिलेखित';
$string['accountconfignote'] = 'इस खाते के लिए भुगतान गेटवे को अलग से कॉन्फ़िगर किया जाएगा';
$string['accountdeleteconfirm'] = 'यदि इस खाते में पिछले भुगतान हैं, तो इसे संग्रहीत किया जाएगा, अन्यथा इसका विन्यास डेटा स्थायी रूप से हटा दिया जाएगा। क्या आप सुनिश्चित हैं कि आप जारी रखना चाहते हैं?';
$string['accountidnumber'] = 'पहचान संख्या';
$string['accountidnumber_help'] = 'ID  संख्या का उपयोग केवल तब किया जाता है जब खाते का बाहरी प्रणालियों से मिलान किया जाता है और साइट पर कहीं भी प्रदर्शित नहीं किया जाता है। यदि खाते में कोई आधिकारिक कोड नाम है तो इसे दर्ज किया जा सकता है, अन्यथा क्षेत्र को खाली छोड़ दिया जा सकता है।';
$string['accountname'] = 'खाते का नाम';
$string['accountname_help'] = 'इस खाते की पहचान शिक्षकों अथवा प्रबंधकों के लिए कैसे की जाएगी जो भुगतान स्थापित करते हैं (उदाहरण के लिए क्रम नामांकन प्लगइन में)।';
$string['accountnotavailable'] = 'उपलब्ध नहीं है';
$string['createaccount'] = 'भुगतान खाता बनाएँ';
$string['deleteorarchive'] = 'निकाल देना अथवा संग्रहीत करें';
$string['editpaymentaccount'] = 'भुगतान खाते को संपादित करें';
$string['eventaccountcreated'] = 'भुगतान खाता बनाया गया';
$string['eventaccountdeleted'] = 'भुगतान खाता हटा दिया गया';
$string['eventaccountupdated'] = 'भुगतान खाता अद्यतन किया गया';
$string['feeincludesurcharge'] = '{$a->fee} (इस भुगतान प्रकार का उपयोग करने के लिए {$a->surcharge}% अधिभार शामिल है)';
$string['gatewaycannotbeenabled'] = 'भुगतान गेटवे को सक्षम नहीं किया जा सकता है क्योंकि विन्यास अधूरा है।';
$string['gatewaydisabled'] = 'विकलांग';
$string['gatewayenabled'] = 'सक्षम किया गया';
$string['gatewaynotfound'] = 'प्रवेश द्वार नहीं मिला';
$string['gotomanageplugins'] = '{$a} के माध्यम से भुगतान गेटवे को सक्षम और अक्षम करें और अधिभार निर्धारित करें।';
$string['hidearchived'] = 'संग्रहीत छुपाएँ';
$string['noaccountsavilable'] = 'कोई भुगतान खाता उपलब्ध नहीं है।';
$string['nocurrencysupported'] = 'किसी भी मुद्रा में कोई भुगतान समर्थित नहीं है। कृपया सुनिश्चित करें कि कम से कम एक भुगतान गेटवे सक्षम है।';
$string['nogateway'] = 'ऐसा कोई भुगतान गेटवे नहीं है जिसका उपयोग किया जा सके।';
$string['nogatewayselected'] = 'आपको पहले भुगतान गेटवे का चयन करना होगा।';
$string['paymentaccount'] = 'भुगतान खाता';
$string['paymentaccounts'] = 'भुगतान खाता';
$string['paymentaccountsexplained'] = 'इस साइट के लिए एक अथवा कई भुगतान खाते बनाएँ। प्रत्येक खाते में उपलब्ध भुगतान गेटवे के लिए विन्अथवास शामिल है। जो व्यक्ति साइट पर भुगतान को कॉन्फ़िगर करता है (उदाहरण के लिए, क्रम नामांकन के लिए भुगतान) वह उपलब्ध खातों में से चुन सकेगा।';
$string['payments'] = 'भुगतान';
$string['privacy:metadata:database:payments'] = 'भुगतान के बारे में जानकारी।';
$string['privacy:metadata:database:payments:amount'] = 'भुगतान की राशि।';
$string['privacy:metadata:database:payments:currency'] = 'भुगतान की मुद्रा।';
$string['privacy:metadata:database:payments:gateway'] = 'भुगतान गेटवे जिसका उपयोग भुगतान के लिए किया जाता है।';
$string['privacy:metadata:database:payments:timecreated'] = 'वह समय जब भुगतान किया गया था।';
$string['privacy:metadata:database:payments:timemodified'] = 'वह समय जब भुगतान अभिलेख को आखिरी बार अद्यतन किया गया था।';
$string['privacy:metadata:database:payments:userid'] = 'भुगतान करने वाला उपयोगकर्ता।';
$string['restoreaccount'] = 'बहाल';
$string['selectpaymenttype'] = 'भुगतान का प्रकार चयन करना';
$string['showarchived'] = 'संग्रहीत दिखाएँ';
$string['supportedcurrencies'] = 'समर्थित मुद्राएँ';
$string['surcharge'] = 'अधिभार (प्रतिशत)';
$string['surcharge_desc'] = 'अधिभार उन उपयोगकर्ताओं से लिया जाने वाला एक अतिरिक्त प्रतिशत दर है जो इस भुगतान गेटवे का उपयोग करके भुगतान करना चुनते हैं।';
