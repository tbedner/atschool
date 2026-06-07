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
 * Strings for component 'tool_httpsreplace', language 'hi', version '4.4'.
 *
 * @package     tool_httpsreplace
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['complete'] = 'पूरा किया';
$string['count'] = 'एम्बेडेड सामग्री वस्तुओं की संख्या';
$string['disclaimer'] = 'मैं इस शल्य कर्म के जोखिमों को समझता हूं।';
$string['doclink'] = 'HTTPS रूपांतरण उपकरण';
$string['doit'] = 'रूपांतरण करें';
$string['domain'] = 'समस्याग्रस्त क्षेत्र';
$string['domainexplain'] = 'जब किसी वेबसाइट को HTTP से HTTPS पर स्थानांतरित किया जाता है, तो उसमें मौजूद सभी HTTP सामग्री काम करना बंद कर देती है। यह टूल आपको HTTP सामग्री को HTTPS में स्वचालित रूप से परिवर्तित करने की सुविधा देता है।

रूपांतरण करने से पहले, सामग्री को स्कैन करके उन URL का पता लगाया जाएगा जो रूपांतरण के बाद काम नहीं कर सकते हैं। आप यह सुनिश्चित कर सकते हैं कि प्रत्येक URL के लिए HTTPS उपलब्ध है, या वैकल्पिक संसाधनों का उपयोग कर सकते हैं।';
$string['domainexplainhelp'] = 'ये डोमेन आपकी सामग्री में मौजूद हैं, लेकिन ऐसा प्रतीत होता है कि ये HTTPS सामग्री का समर्थन नहीं करते हैं। HTTPS पर स्विच करने के बाद, सुरक्षित आधुनिक ब्राउज़र वाले उपयोगकर्ताओं के लिए इन साइटों से शामिल की गई सामग्री Moodle में प्रदर्शित नहीं होगी। संभव है कि ये साइटें अस्थायी या स्थायी रूप से अनुपलब्ध हों और किसी भी सुरक्षा सेटिंग के साथ काम न करें। इन परिणामों की समीक्षा करने और यह निर्धारित करने के बाद ही आगे बढ़ें कि क्या यह बाहरी रूप से होस्ट की गई सामग्री गैर-आवश्यक है। ध्यान दें: HTTPS पर स्विच करने के बाद भी यह सामग्री काम नहीं करेगी।';
$string['httpwarning'] = 'यह इंस्टेंस अभी भी HTTP पर चल रहा है। आप इस टूल को चला सकते हैं और बाहरी सामग्री HTTPS में बदल जाएगी, लेकिन आंतरिक सामग्री HTTP पर ही रहेगी। HTTPS पर स्विच करने के बाद आंतरिक सामग्री को बदलने के लिए आपको इस स्क्रिप्ट को दोबारा चलाना होगा।';
$string['notimplemented'] = 'क्षमा करें, यह सुविधा आपके डेटाबेस ड्राइवर में लागू नहीं की गई है।';
$string['oktoprocede'] = 'स्कैन में आपकी सामग्री के साथ कोई समस्या नहीं मिलती है। आप HTTPS का उपयोग करने के लिए किसी भी HTTP सामग्री को अपग्रेड करने के लिए आगे बढ़ सकते हैं।';
$string['pageheader'] = 'बाहरी रूप से होस्ट किए गए सामग्री URLs  को HTTPS में अपग्रेड करें';
$string['pluginname'] = 'HTTPS रूपांतरण उपकरण';
$string['privacy:metadata'] = 'HTTPS रूपांतरण उपकरण प्लगइन किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करता है।';
$string['replacing'] = 'HTTP सामग्री को HTTPS से बदलना...';
$string['searching'] = 'खोज {$a}';
$string['toolintro'] = 'यदि आप अपनी साइट को HTTPS में बदलने की योजना बना रहे हैं, तो आप अपनी एम्बेडेड सामग्री को HTTPS में बदलने के लिए <a href = "{$a}"> HTTPS रूपांतरण उपकरण </a> का उपयोग कर सकते हैं।';
