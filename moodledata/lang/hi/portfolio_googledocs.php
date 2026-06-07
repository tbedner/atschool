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
 * Strings for component 'portfolio_googledocs', language 'hi', version '4.4'.
 *
 * @package     portfolio_googledocs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'सेवार्थ ग्राहक ID';
$string['noauthtoken'] = 'गूगल से प्रमाणीकरण सांकेतिक प्राप्त नहीं हुआ है। कृपया सुनिश्चित करना कि आप अपने गूगल खाते तक पहुँचने के लिए मॉडल की अनुमति दे रहे हैं';
$string['nooauthcredentials'] = 'OAuth प्रमाण पत्र की अपेक्षितता होती है।';
$string['nooauthcredentials_help'] = 'गूगल ड्राइव विभाग, संविभाग, पोर्टफोलियो प्लगइन का उपयोग करने के लिए आपको विभाग, संविभाग, पोर्टफोलियो सेटिंग्स में OAuth  क्रेडेंशियल्स को कॉन्फ़िगर करना होगा।';
$string['nosessiontoken'] = 'गूगल को निर्यात करने से रोकने के लिए एक अधिवेशन सांकेतिक मौजूद नहीं है।';
$string['oauthinfo'] = 'इस प्लगइन का उपयोग करने के लिए, आपको अपनी साइट को Google के साथ पंजीकृत करना होगा, जैसा कि दस्तावेज़ <a href="{$a->docsurl}">Google OAuth 2.0 सेटअप</a> में वर्णित है।</p><p>पंजीकरण प्रक्रिया के भाग के रूप में, आपको निम्नलिखित URL को \'अधिकृत रीडायरेक्ट यूआरआई\' के रूप में दर्ज करना होगा:</p><p>{$a->callbackurl}</p><p>पंजीकरण के बाद, आपको एक क्लाइंट आईडी और सीक्रेट प्रदान किया जाएगा जिसका उपयोग सभी Google ड्राइव प्लगइन्स को कॉन्फ़िगर करने के लिए किया जा सकता है।</p>';
$string['pluginname'] = 'गूगल ड्राइव';
$string['privacy:metadata'] = 'यह प्लगइन बाहरी रूप से डेटा को एक जुड़े हुए गूगल खाते में भेजता है। यह स्थानीय रूप से डेटा संग्रहीत नहीं करता है।';
$string['privacy:metadata:data'] = 'व्यक्तिगत डेटा विभाग, संविभाग, पोर्टफोलियो उपप्रणाली से गुजरता है।';
$string['secret'] = 'भेद';
$string['sendfailed'] = 'दाखिल करना {$a} गूगल में हस्तांतरण करने में विफल रही';
