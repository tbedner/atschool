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
 * Strings for component 'portfolio_flickr', language 'hi', version '4.4'.
 *
 * @package     portfolio_flickr
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apikey'] = 'API  कुंजी';
$string['contenttype'] = 'सामग्री के प्रकार';
$string['err_noapikey'] = 'कोई API  कुंजी नहीं';
$string['err_noapikey_help'] = 'इस प्लगइन के लिए कोई API  कुंजी कॉन्फ़िगर नहीं की गई है। आप इनमें से एक को फ़्लिकर सेवा पृष्ठ से प्राप्त कर सकते हैं।';
$string['hidefrompublicsearches'] = 'इन छवियों को सार्वजनिक खोज से छुपाएँ?';
$string['isfamily'] = 'परिवार को दिखाई देता है';
$string['isfriend'] = 'दोस्तों को दिखाई देता है';
$string['ispublic'] = 'जनता (कोई भी उन्हें देख सकता है)';
$string['moderate'] = 'मध्यम';
$string['noauthtoken'] = 'इस अधिवेशन में उपयोग के लिए प्रमाणीकरण सांकेतिक प्राप्त नहीं कर सके';
$string['other'] = 'कला, चित्रण, CGI, अथवा अन्य गैर-फोटोग्राफिक छविअथवाँ';
$string['photo'] = 'Photos';
$string['pluginname'] = 'flickr.com';
$string['privacy:metadata'] = 'यह प्लगइन एक जुड़े हुए फ़्लिकर खाते में बाहरी रूप से डेटा भेजता है। यह स्थानीय रूप से डेटा संग्रहीत नहीं करता है।';
$string['privacy:metadata:data'] = 'व्यक्तिगत डेटा विभाग, संविभाग, पोर्टफोलियो उपप्रणाली से गुजरता है।';
$string['restricted'] = 'प्रतिबंधित, सीमित';
$string['safe'] = 'सुरक्षित';
$string['safetylevel'] = 'सुरक्षा स्तर';
$string['screenshot'] = 'स्क्रीनशॉट्स';
$string['set'] = 'सेट करें';
$string['setupinfo'] = 'निर्देश निर्धारित करें';
$string['setupinfodetails'] = 'API कुंजी और गुप्त स्ट्रिंग प्राप्त करने के लिए, Flickr में लॉग इन करें और <a href="{$a->applyurl}">नई कुंजी के लिए आवेदन करें</a>। नई कुंजी और गुप्त स्ट्रिंग जनरेट होने के बाद, पेज पर \'इस ऐप के लिए प्रमाणीकरण प्रवाह संपादित करें\' लिंक का अनुसरण करें। \'ऐप प्रकार\' को \'वेब एप्लिकेशन\' चुनें। \'कॉलबैक URL\' फ़ील्ड में निम्न मान डालें: <br /><code>{$a->callbackurl}</code><br />वैकल्पिक रूप से, आप अपनी Moodle साइट का विवरण और लोगो भी प्रदान कर सकते हैं। ये मान बाद में <a href="{$a->keysurl}">पेज</a> पर सेट किए जा सकते हैं, जहाँ आपके Flickr एप्लिकेशन सूचीबद्ध हैं।';
$string['sharedsecret'] = 'गुप्त स्ट्रिंग';
$string['title'] = 'शीर्षक';
$string['uploadfailed'] = 'flickr.com पर छवि (ओं) अपलोड करने में विफल रहाः {$a}';
