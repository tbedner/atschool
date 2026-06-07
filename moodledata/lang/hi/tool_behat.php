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
 * Strings for component 'tool_behat', language 'hi', version '4.4'.
 *
 * @package     tool_behat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'यह प्रशासन उपकरण डेवलपर्स और परीक्षण लेखकों को मूडल की कार्यक्षमताओं का वर्णन करने वाली. फ़ीचर फ़ाइलों को बनाने और उन्हें स्वचालित रूप से चलाने में मदद करता है।. फ़ीचर फ़ाइलों में उपयोग के लिए उपलब्ध चरण परिभाषाएँ नीचे सूचीबद्ध हैं।';
$string['allavailablesteps'] = 'सभी उपलब्ध चरण परिभाषाएँ';
$string['errorbehatcommand'] = 'बेहत CLI कमांड चलाने में त्रुटि। समस्या के बारे में अधिक जानने के लिए क्लि से मैन्युअल रूप से "{$a}--help" चलाने का प्रयास करें।';
$string['errorcomposer'] = 'संगीतकार निर्भरताएँ स्थापित नहीं हैं।';
$string['errordataroot'] = '$CFG->behat_dataroot सेट नहीं है या अमान्य है।';
$string['errorsetconfig'] = 'config.php में $CFG->behat_dataroot, $CFG->behat_prefix और $CFG->behat_wwwroot को सेट करना आवश्यक है।';
$string['erroruniqueconfig'] = '$CFG->behat_dataroot, $CFG->behat_prefix और $CFG->behat_wwwroot के मान $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot और $CFG->phpunit_prefix के मानों से भिन्न होने चाहिए।<br/>या, यदि $CFG->behat_prefix समान है, तो $CFG->behat_dbname या $CFG->behat_dbhost, $CFG->phpunit_dbname और $CFG->phpunit_dbhost से तथा $CFG->dbname और $CFG->dbhost से भिन्न होने चाहिए।';
$string['fieldvalueargument'] = 'क्षेत्र मूल्य तर्क';
$string['fieldvalueargument_help'] = 'इस तर्क को क्षेत्र मूल्य द्वारा पूरा किअथवा जाना चाहिए। कई क्षेत्र प्रकार हैं, जिनमें चेकबॉक्स, सेलेक्ट अथवा टेक्स्टएरिअथवा अथवा डेट सिलेक्टर्स जैसे जटिल क्षेत्र शामिल हैं। अपेक्षित क्षेत्र मूल्यों के ब्योरा के लिए देव प्रलेखन <a href = "https://moodledev.io/general/development/tools/behat" target="_blank"> स्वीकृति _ परीक्षण </a> देखें।';
$string['giveninfo'] = 'दिया। पर्यावरण स्थापित करने की प्रक्रियाएँ';
$string['infoheading'] = 'जानकारी';
$string['installinfo'] = 'अधिष्ठापन और परीक्षण निष्पादन जानकारी के लिए {$a} पढ़ें';
$string['newstepsinfo'] = 'नई चरण परिभाषाएँ जोड़ने के बारे में जानकारी के लिए {$a} पढ़ें';
$string['newtestsinfo'] = 'नए परीक्षण लिखने के बारे में जानकारी के लिए {$a} पढ़ें';
$string['nostepsdefinitions'] = 'इस फिल्टर से मेल खाने वाली कोई चरण परिभाषाएँ नहीं हैं।';
$string['pluginname'] = 'स्वीकृति परीक्षण';
$string['privacy:metadata'] = 'स्वीकृति परीक्षण प्लगइन किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करता है।';
$string['stepsdefinitionscomponent'] = 'क्षेत्र';
$string['stepsdefinitionscontains'] = 'इसमें शामिल हैं';
$string['stepsdefinitionsfilters'] = 'चरण परिभाषाएँ';
$string['stepsdefinitionstype'] = 'प्रकार';
$string['theninfo'] = 'तब। परिणाम अपेक्षित हैं यह सुनिश्चित करना करने के लिए जाँच';
$string['unknownexceptioninfo'] = 'सेलेनियम अथवा आपके ब्राउज़र में कोई समस्अथवा थी। कृपअथवा सुनिश्चित करना कि आप सेलेनियम के नवीनतम संस्करण का उपयोग कर रहे हैं। त्रुटि:';
$string['viewsteps'] = 'फ़िल्टर';
$string['warndirrootconfigfound'] = 'एक विन्यास दाखिल करना {$a} में पाई गई थी। यह दाखिल करना स्वचालित रूप से अद्यतन नहीं होती है और पुरानी हो सकती है। हम इस दाखिल करना को हटाने की सलाह देते हैं।';
$string['wheninfo'] = 'कब। ऐसी कार्रवाई जो किसी घटना, कार्यक्रम को भड़काती है';
$string['wrongbehatsetup'] = 'behat सेटअप में कुछ गड़बड़ी है, इसलिए चरण परिभाषाएँ सूचीबद्ध नहीं की जा सकतीं: <b>{$a->errormsg}</b><br/><br/>कृपया जाँच करें:<ul>
<li>config.php में $CFG->behat_dataroot, $CFG->behat_prefix और $CFG->behat_wwwroot के मान $CFG->dataroot, $CFG->prefix और $CFG->wwwroot से भिन्न हैं।</li>
<li>आपने "{$a->behatinit}" को अपने Moodle रूट डायरेक्टरी से चलाया है।</li>
<li>डिपेंडेंसी vendor/ में इंस्टॉल हैं और {$a->behatcommand} फ़ाइल को निष्पादन की अनुमति है।</li></ul>';
