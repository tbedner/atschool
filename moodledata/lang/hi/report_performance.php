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
 * Strings for component 'report_performance', language 'hi', version '4.4'.
 *
 * @package     report_performance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_backup'] = 'स्वचालित बैकअप';
$string['check_backup_comment_disable'] = 'बैकअप प्रक्रिया के दौरान प्रदर्शन प्रभावित हो सकता है। यदि इनेबल्ड  है, तो बैकअप को पीक-पीक समय के लिए शेड्यूल किया जाना चाहिए।';
$string['check_backup_comment_enable'] = 'बैकअप प्रक्रिया के दौरान प्रदर्शन प्रभावित हो सकता है। बैक-पीक को ऑफ-पीक समय के लिए शेड्यूल किया जाना चाहिए।';
$string['check_backup_details'] = 'स्वचालित बैकअप इनेबल  करने से आपके द्वारा निर्दिष्ट समय पर सर्वर पर सभी पाठ्यक्रमों के अभिलेखागार स्वचालित रूप से बन जाएंगे। <p> इस प्रक्रिया के दौरान, यह अधिक सर्वर संसाधनों का उपभोग करेगा और प्रदर्शन को प्रभावित कर सकता है। </ p>';
$string['check_cachejs_comment_disable'] = 'यदि इनेबल  है, तो पृष्ठ लोडिंग प्रदर्शन में सुधार हुआ है।';
$string['check_cachejs_comment_enable'] = 'यदि दिसबलेड है, तो पृष्ठ धीमा हो सकता है।';
$string['check_cachejs_details'] = 'जावास्क्रिप्ट कैशिंग और कम्प्रेशन पेज लोडिंग प्रदर्शन को बेहतर बनाता है। यह उत्पादन साइटों के लिए दृढ़ता से अनुशंसित है।';
$string['check_dbschema_errors'] = 'डेटाबेस योजना संरेखित नहीं है।';
$string['check_dbschema_name'] = 'डेटाबेस योजना जाँच';
$string['check_dbschema_ok'] = 'डेटाबेस योजना सही है।';
$string['check_debugmsg_comment_developer'] = 'यदि DEVELOPER के अलावा किसी मान पर सेट किया जाता है, तो प्रदर्शन में थोड़ा सुधार किया जा सकता है।';
$string['check_debugmsg_comment_nodeveloper'] = 'यदि DEVELOPER पर सेट किया जाता है, तो प्रदर्शन थोड़ा प्रभावित हो सकता है।';
$string['check_debugmsg_details'] = 'डेवलपर स्तर तक जाने में शायद ही कोई फायदा होता है, जब तक कि आप एक डेवलपर नहीं होते हैं, उस स्थिति में इसकी दृढ़ता से अनुशंसा की जाती है। <p> एक बार जब आपको त्रुटि संदेश मिल जाता है, और इसे कहीं कॉपी और पेस्ट किया जाता है। अत्यधिक डिबग को वापस करने के लिए सभी को भेजा गया। डीबग संदेश आपकी साइट के सेटअप के अनुसार किसी हैकर को सुराग दे सकते हैं और प्रदर्शन को प्रभावित कर सकते हैं। </ p>';
$string['check_enablestats_comment_disable'] = 'प्रदर्शन सांख्यिकी प्रसंस्करण से प्रभावित हो सकता है। यदि इनेबल्ड है, तो सावधानी के साथ सांख्यिकी सेटिंग्स निर्धारित की जानी चाहिए।';
$string['check_enablestats_comment_enable'] = 'प्रदर्शन सांख्यिकी प्रसंस्करण से प्रभावित हो सकता है। सांख्यिकी सेटिंग्स को सावधानी के साथ सेट किया जाना चाहिए।';
$string['check_enablestats_details'] = 'इसे इनेबल करने से क्रोनजोब में लॉग को संसाधित किया जाएगा और कुछ आंकड़े एकत्र किए जाएंगे। आपकी साइट पर ट्रैफ़िक की मात्रा के आधार पर, इसमें थोड़ी देर लग सकती है। <p> इस प्रक्रिया के दौरान, यह अधिक सर्वर संसाधनों का उपभोग करेगा और प्रदर्शन को प्रभावित कर सकता है। </ p>';
$string['check_themedesignermode_comment_disable'] = 'यदि इनेबल किया गया है, तो छवियों और स्टाइल शीट को कैश नहीं किया जाएगा, जिसके परिणामस्वरूप महत्वपूर्ण प्रदर्शन में गिरावट होगी।';
$string['check_themedesignermode_comment_enable'] = 'यदि डिसएबल किया गया है, तो छवियों और स्टाइल शीट को कैश किया जाता है, जिसके परिणामस्वरूप महत्वपूर्ण प्रदर्शन में सुधार होता है।';
$string['check_themedesignermode_details'] = 'यह अक्सर मंद मौडल साइट्स का कारण होता है। <p> औसत से कम से कम दो बार सीपीयू की मात्रा ले सकता है एक मडल साइट को चलाने के लिए थीम डिज़ाइनर मोड इनेबल होना। </ p>';
$string['comments'] = 'टिप्पणियाँ';
$string['disabled'] = 'डिसेबल्ड';
$string['edit'] = 'संपादित करें';
$string['enabled'] = 'इनेबल्ड';
$string['issue'] = 'मुद्दा';
$string['morehelp'] = 'और अधिक सहायता';
$string['performance:view'] = 'प्रदर्शन रिपोर्ट देखें';
$string['performancereportdesc'] = 'यह रिपोर्ट उन समस्याओं को सूचीबद्ध करती है जो साइट के प्रदर्शन को प्रभावित कर सकती हैं {$ a}';
$string['pluginname'] = 'प्रदर्शन अवलोकन';
$string['privacy:metadata'] = 'प्रदर्शन अवलोकन प्लगइन किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करता है।';
$string['value'] = 'मूल्य';
