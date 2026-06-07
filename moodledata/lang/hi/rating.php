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
 * Strings for component 'rating', language 'hi', version '4.4'.
 *
 * @package     rating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'रेटिंग का औसत';
$string['aggregatecount'] = 'रेटिंग की गिनती';
$string['aggregatemax'] = 'उच्‍चतम रेटिंग';
$string['aggregatemin'] = 'न्यूनतम, कम से कम रेटिंग';
$string['aggregatenone'] = 'कोई रेटिंग नहीं';
$string['aggregatesum'] = 'रेटिंग का योग';
$string['aggregatetype'] = 'समग्र प्रकार';
$string['aggregatetype_help'] = 'समग्र प्रकार परिभाषित करता है कि कैसे रेटिंग को मिलाकर ग्रेडबुक में अंतिम ग्रेड बनाया जाता है। रेटिंग का औसत-सभी रेटिंग का औसत * रेटिंग की गिनती-रेटेड वस्तुओं की संख्या अंतिम ग्रेड बन जाती है। ध्यान दें कि क्रियाकलाप के लिए कुल उच्‍चतम ग्रेड से उच्‍चतम नहीं हो सकता है। उच्‍चतम-उच्चतम रेटिंग अंतिम ग्रेड बन जाती है * न्यूनतम, कम से कम-सबसे छोटी रेटिंग अंतिम ग्रेड बन जाती है * योग-सभी रेटिंग एक साथ दृष्टव्‍य जाती हैं। ध्यान दें कि क्रियाकलाप के लिए कुल उच्‍चतम ग्रेड से उच्‍चतम नहीं हो सकता है। यदि "कोई रेटिंग नहीं" का चयन किया जाता है, तो क्रियाकलाप ग्रेडबुक में दिखाई नहीं देगी।';
$string['allowratings'] = 'वस्तुओं को मूल्यांकन करने की अनुमति देना?';
$string['allratingsforitem'] = 'सभी प्रस्तुत रेटिंग';
$string['capabilitychecknotavailable'] = 'क्रियाकलाप सहेजे जाने तक क्षमता जाँच उपलब्ध नहीं है';
$string['couldnotdeleteratings'] = 'क्षमा करें, इसे हटाया नहीं जा सकता है क्योंकि लोग पहले ही इसका मूल्यांकन कर चुके हैं';
$string['norate'] = 'वस्तुओं की रेटिंग की अनुमत नहीं है!';
$string['noratings'] = 'कोई रेटिंग जमा नहीं की गई';
$string['noviewanyrate'] = 'आप केवल अपने द्वारा बनाई गई वस्तुओं के परिणाम देख सकते हैं।';
$string['noviewrate'] = 'आपके पास आइटम रेटिंग देखने की क्षमता नहीं है';
$string['privacy:metadata:rating'] = 'उपयोगकर्ता-प्रविष्ट रेटिंग को उस वस्तु के मानचित्रण के साथ संग्रहीत किया जाता है जिसे रेट किया गया था।';
$string['privacy:metadata:rating:rating'] = 'उपयोगकर्ता द्वारा दर्ज की गई संख्यात्मक रेटिंग।';
$string['privacy:metadata:rating:timecreated'] = 'वह समय जब पहली बार मूल्यांकन किया गया था।';
$string['privacy:metadata:rating:timemodified'] = 'वह समय जब रेटिंग को आखिरी बार अद्यतन किया गया था।';
$string['privacy:metadata:rating:userid'] = 'वह उपयोगकर्ता जिसने रेटिंग बनाई।';
$string['rate'] = 'दर, भाव';
$string['ratepermissiondenied'] = 'आपके पास इस वस्तु को मूल्यांकन करने की अनुमति नहीं है';
$string['rating'] = 'रेटिंग';
$string['ratinginvalid'] = 'रेटिंग अमान्य है';
$string['ratings'] = 'रेटिंग';
$string['ratingtime'] = 'इस सीमा में तिथियों वाली वस्तुओं के लिए रेटिंग को सीमित करना, प्रतिबंध, रोक लगाना:';
$string['rolewarning'] = 'दर, भाव की अनुमति के साथ भूमिकाएँ';
$string['rolewarning_help'] = 'रेट करने की अनुमति वाली भूमिकाएँ क्षमता मॉड्यूल/रेटिंग वाली भूमिकाएँ हैं: रेट प्लस कोई भी गतिविधि-विशिष्ट रेटिंग क्षमताएँ। आप पृष्ठ अनुमति के माध्यम से अधिक भूमिकाओं को मूल्यांकन करने की अनुमति दे सकते हैं।';
$string['scaleselectionrequired'] = 'रेटिंग समग्र प्रकार का चयन करते समय आपको अथवा तो एक पैमाने का उपयोग करने अथवा उच्‍चतम अंक निर्धारित करने के लिए भी चयन करना चाहिए।';
