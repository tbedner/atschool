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
 * Strings for component 'factor_grace', language 'hi', version '4.4'.
 *
 * @package     factor_grace
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['info'] = 'एक निर्दिष्ट अवधि के लिए अन्य कारकों के बिना लॉगिन की अनुमति देता है।';
$string['pluginname'] = 'अनुग्रह अवधि';
$string['preferences'] = 'उपयोगकर्ता वरीयताएँ';
$string['privacy:metadata'] = 'ग्रेस पीरियड फैक्टर प्लगइन कोई व्यक्तिगत डेटा संग्रहीत नहीं करता है';
$string['redirectsetup'] = 'आगे बढ़ने से पहले आपको बहु-कारक प्रमाणीकरण के लिए व्यवस्था, ढांचा पूरा करना होगा।';
$string['revokeexpiredfactors'] = 'समाप्त हो चुकी अनुग्रह अवधि के कारकों को प्रति-संहरण करना, वापस लेना';
$string['settings:customwarning'] = 'चेतावनी झंडा सामग्री';
$string['settings:customwarning_help'] = 'ग्रेस वार्निंग अधिसूचना को कस्टम HTML  सामग्री के साथ बदलने के लिए यहाँ सामग्री जोड़ें। पाठ में {टाइमरेमेनिंग} जोड़ने से यह उपयोगकर्ता के लिए चालू, प्रचलित ग्रेस अवधि के साथ बदल जाएगा, और {व्यवस्था, ढांचालिंक} उपयोगकर्ता के लिए व्यवस्था, ढांचा पृष्ठ के URL के साथ बदल जाएगा।';
$string['settings:forcesetup'] = 'बल कारक व्यवस्था, ढांचा';
$string['settings:forcesetup_help'] = 'अनुग्रह अवधि समाप्त होने पर उपयोगकर्ता को वरीयता पृष्ठ पर बहु-कारक प्रमाणीकरण स्थापित करने के लिए मजबूर करता है। यदि अनियंत्रित किया जाता है, तो उपयोगकर्ता अनुग्रह अवधि समाप्त होने पर प्रमाणीकृत करने में असमर्थ होंगे।';
$string['settings:graceperiod'] = 'अनुग्रह अवधि';
$string['settings:graceperiod_help'] = 'समय की अवधि जब उपयोगकर्ता कॉन्फ़िगर और सक्षम कारकों के बिना साइट तक पहुँच सकते हैं।';
$string['settings:ignorelist'] = 'उपेक्षित कारक';
$string['settings:ignorelist_help'] = 'यदि अन्य कारक हैं जिनका उपयोग उपयोगकर्ता बहु-कारक प्रमाणीकरण के साथ प्रमाणीकरण करने के लिए कर सकते हैं तो अनुग्रह अवधि अंक नहीं देगी। अंक देने अथवा नहीं देने का निर्णय लेते समय यहां किसी भी कारक को अनुग्रह अवधि में नहीं गिना जाएगा। यह अनुग्रह अवधि को प्रमाणीकरण की अनुमति देनाने की अनुमति देना सकता है यदि ईमेल जैसे किसी अन्य कारक में विन्अथवास अथवा तंत्र के मुद्दे हैं।';
$string['setupfactors'] = 'आप वर्तमान में अनुग्रह अवधि में हैं, और अनुग्रह अवधि समाप्त होने के बाद लॉग इन करने के लिए आपके पास पर्याप्त प्रमाणीकरण कारक सेट अप न हो सकते हैं। अपनी प्रमाणीकरण स्थिति की जाँच करने और अधिक प्रमाणीकरण कारक सेट अप करने के लिए {$a->url} पर जाएँ। आपकी अनुग्रह अवधि {$a->time} में समाप्त हो जाएगी।';
$string['summarycondition'] = 'अनुग्रह अवधि के भीतर है';
