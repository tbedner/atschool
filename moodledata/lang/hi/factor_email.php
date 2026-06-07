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
 * Strings for component 'factor_email', language 'hi', version '4.4'.
 *
 * @package     factor_email
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['email:accident'] = 'यदि आपने ईमेल का अनुरोध नहीं किया है, तो लॉगिन प्रयास को अमान्य करने के लिए जारी रखें पर क्लिक करें। यदि आपने गलती से लिंक पर क्लिक किया है, तो रद्द करना पर क्लिक करें और कोई कार्रवाई नहीं की जाएगी।';
$string['email:browseragent'] = 'इस अनुरोध के लिए ब्राउज़र ब्योरा हैं: \'{$a}\'';
$string['email:geoinfo'] = 'ऐसा प्रतीत होता है कि यह अनुरोध लगभग इस प्रकार उत्पन्न हुआ है:';
$string['email:greeting'] = 'नमस्ते {$a}';
$string['email:ipinfo'] = 'लॉगिन अनुरोध ब्योरा :';
$string['email:link'] = 'सत्यापन लिंक';
$string['email:loginlink'] = 'अथवा, यदि आप एक ही उपकरण पर हैं, तो इस {$a} का उपयोग करें।';
$string['email:message'] = 'यह रहा आपका {$a->sitename} ({$a->siteurl}) के लिए सत्यापन कोड।';
$string['email:originatingip'] = 'यह लॉगिन अनुरोध \'{$a}\' से किया गया था';
$string['email:revokelink'] = 'यदि यह आप नहीं थे, तो आप {$a} कर सकते हैं।';
$string['email:revokesuccess'] = 'इस कोड को सफलतापूर्वक निरस्त कर दिया गया है। इस उपयोगकर्ता के लिए सभी सत्र समाप्त हो गए हैं। ईमेल का उपयोग तब तक नहीं किया जा सकेगा जब तक कि खाते की जमानत सत्यापित नहीं हो जाती।';
$string['email:stoploginlink'] = 'इस लॉगिन प्रयास को रोकें';
$string['email:subject'] = 'यहाँ आपका सत्यापन कोड है';
$string['email:uadescription'] = 'इस अनुरोध के लिए ब्राउज़र पहचानः';
$string['email:validity'] = 'कोड का उपयोग केवल एक बार किया जा सकता है और यह {$a} के लिए मान्य है।';
$string['error:badcode'] = 'कोड नहीं मिला। यह एक पुराना लिंक हो सकता है, एक नअथवा कोड ईमेल किअथवा गअथवा हो सकता है, अथवा इस कोड के साथ लॉगिन करने का प्रअथवास सफल रहा हो।';
$string['error:parameters'] = 'पृष्ठ मापदंड गलत हैं।';
$string['error:wrongverification'] = 'गलत कोड। फिर से कोशिश करें।';
$string['event:unauthemail'] = 'अनधिकृत ईमेल प्राप्त हुए';
$string['info'] = 'आप प्रमाणीकृत करने के लिए ईमेल {$a} का उपयोग कर रहे हैं। यह आपके साइट प्रशासक द्वारा स्थापित किया गया है।';
$string['logindesc'] = 'हमने अभी आपके ईमेल पर 6 अंकों का कोड भेजा हैः {$a}';
$string['loginoption'] = 'आपको एक ईमेल कोड भेजें';
$string['loginskip'] = 'मुझे कोई कोड नहीं मिला';
$string['loginsubmit'] = 'जारी रखें';
$string['logintitle'] = 'ईमेल द्वारा सत्यापित करना कि आप हैं';
$string['managefactor'] = 'ईमेल का प्रबंधन करें';
$string['manageinfo'] = '\'{$a}\' का उपयोग प्रमाणीकृत करने के लिए किया जा रहा है। यह आपके प्रशासक द्वारा स्थापित किया गया है।';
$string['pluginname'] = 'ईमेल';
$string['privacy:metadata'] = 'ईमेल कारक प्लगइन किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करता है';
$string['settings:duration'] = 'वैधता अवधि';
$string['settings:duration_help'] = 'समय की अवधि कि कोड वैध है।';
$string['settings:suspend'] = 'अनधिकृत खातों को निलंबित करें';
$string['settings:suspend_help'] = 'यदि कोई अनधिकृत ईमेल सत्यापन प्राप्त होता है तो उपयोगकर्ता खातों को निलंबित करने के लिए इसकी जांच करें।';
$string['setupfactor'] = 'ईमेल सेट करें';
$string['summarycondition'] = 'ईमेल सेट करें';
$string['unauthemail'] = 'अनधिकृत ईमेल';
$string['unauthloginattempt'] = 'आईडी {$a->userid} वाले उपयोगकर्ता ने आईपी {$a->ip} से ब्राउज़र एजेंट {$a->useragent} का उपयोग करके ईमेल सत्यापन के माध्यम से अनधिकृत लॉगिन का प्रयास किया।';
$string['verificationcode'] = 'पुष्टि करना के लिए सत्यापन कोड दर्ज करें';
$string['verificationcode_help'] = 'आपके ईमेल पर एक सत्यापन कोड भेजा गया है।';
