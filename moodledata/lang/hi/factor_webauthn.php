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
 * Strings for component 'factor_webauthn', language 'hi', version '4.4'.
 *
 * @package     factor_webauthn
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = 'जमानत कुंजी का प्रबंधन करें';
$string['action:revoke'] = 'जमानत कुंजी हटा दें';
$string['authenticator:hybrid'] = 'संकर';
$string['authenticator:internal'] = 'आंतरिक';
$string['authenticatorname'] = 'जमानत प्रमुख नाम';
$string['error'] = 'प्रमाणीकृत करने में विफल';
$string['error:alreadyregistered'] = 'इस जमानत कुंजी भेद को पहले ही पंजीकृत किया जा चुका है।';
$string['info'] = 'भौतिक जमानत कुंजी अथवा फिंगरप्रिंट स्कैनर का उपयोग करें।';
$string['logindesc'] = 'अपनी जमानत कुंजी का उपयोग जारी रखने के लिए क्लिक करें।';
$string['loginoption'] = 'जमानत कुंजी का उपयोग करें';
$string['loginskip'] = 'मेरे पास अपनी जमानत कुंजी नहीं है';
$string['loginsubmit'] = 'जारी रखें';
$string['logintitle'] = 'जमानत कुंजी द्वारा सत्यापित करना कि आप हैं';
$string['managefactor'] = 'जमानत कुंजी का प्रबंधन करें';
$string['managefactorbutton'] = 'प्रबंधन करें';
$string['manageinfo'] = 'आप प्रमाणीकृत करने के लिए \'{$a}\' का उपयोग कर रहे हैं।';
$string['pluginname'] = 'जमानत कुंजी';
$string['privacy:metadata'] = 'जमानत प्रमुख कारक प्लगइन किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करता है।';
$string['register'] = 'जमानत कुंजी रजिस्टर';
$string['replacefactor'] = 'जमानत कुंजी बदलें';
$string['replacefactorconfirmation'] = '\'{$a}\' जमानत कुंजी को बदलें?';
$string['revokefactorconfirmation'] = '\'{$a}\' जमानत कुंजी हटा दें?';
$string['settings:authenticatortypes'] = 'प्रमाणीकरणकर्ता के प्रकार';
$string['settings:authenticatortypes_help'] = 'कुछ प्रकार के प्रमाणीकरण यंत्रों को जोड़ें';
$string['settings:userverification'] = 'उपयोगकर्ता सत्यापन';
$string['settings:userverification_help'] = 'यह सुनिश्चित करना करने के लिए काम करता है कि प्रमाणीकरण करने वाला व्यक्ति वास्तव में वही है जिसे वे कहते हैं कि वे हैं। उपयोगकर्ता सत्यापन विविध, विभिन्न रूप ले सकता है, जैसे कि पासवर्ड, पिन, फिंगरप्रिंट आदि।';
$string['setupfactor'] = 'जमानत कुंजी स्थापित करें';
$string['setupfactor:instructionsregistersecuritykey'] = '2. एक जमानत कुंजी रजिस्टर';
$string['setupfactor:instructionssecuritykeyname'] = '1. अपनी चाबी को एक नाम दें।';
$string['setupfactor:intro'] = 'जमानत कुंजी एक भौतिक उपकरण है जिसका उपयोग आप खुद को प्रमाणित करने के लिए कर सकते हैं। जमानत कुंजी आपके फोन अथवा कंप्यूटर पर USB टोकन, ब्लूटुथ उपकरण अथवा इवेंट बिल्ट-इन फिंगरप्रिंट स्कैनर हो सकते हैं।';
$string['setupfactor:securitykeyinfo'] = 'यह आपको यह पहचानने में मदद करता है कि आप किस जमानत कुंजी का उपयोग कर रहे हैं।';
$string['setupfactorbutton'] = 'स्थापित करें';
$string['summarycondition'] = 'वेबआथन समर्थित प्रमाणीकरणकर्ता का उपयोग करना';
$string['userverification:discouraged'] = 'उपयोगकर्ता सत्यापन का उपयोग नहीं किया जाना चाहिए, उदाहरण के लिए उपयोगकर्ता बातचीत को कम करने के लिए';
$string['userverification:preferred'] = 'उपयोगकर्ता सत्यापन को प्राथमिकता दी जाती है, यदि उपयोगकर्ता सत्यापन गायब है तो सत्यापन विफल नहीं होगा';
$string['userverification:required'] = 'उपयोगकर्ता सत्यापन की अपेक्षितता है (e.g। पिन द्वारा)। यदि कुंजी में उपयोगकर्ता सत्यापन नहीं है तो प्रमाणीकरण विफल हो जाता है';
