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
 * Strings for component 'message_kopereemail', language 'hi', version '4.4'.
 *
 * @package     message_kopereemail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action_create'] = 'कस्टम संदेश बनाएँ';
$string['action_delete'] = 'कस्टम संदेश हटाएँ';
$string['action_edit'] = 'कस्टम संदेश संपादित करें';
$string['action_export'] = 'JSON निर्यात करें';
$string['action_import'] = 'JSON आयात करें';
$string['action_preview'] = 'टेम्प्लेट';
$string['action_preview_click'] = 'इस टेम्प्लेट परीक्षण वाला ईमेल प्राप्त करने के लिए यहाँ क्लिक करें';
$string['action_preview_success'] = 'ईमेल सफलतापूर्वक भेजा गया। कृपया अपना इनबॉक्स या स्पैम फ़ोल्डर जाँचें।';
$string['export_filename_prefix'] = 'kopereemail-टेम्प्लेट्स';
$string['export_title'] = 'टेम्प्लेट निर्यात करें';
$string['import_file'] = 'JSON फ़ाइल';
$string['import_file_help'] = 'दूसरे वातावरण से निर्यात किया गया JSON चुनें।';
$string['import_invalid_json'] = 'अमान्य फ़ाइल: विकृत JSON।';
$string['import_invalid_payload'] = 'अमान्य फ़ाइल: निर्यात संरचना मेल नहीं खाती।';
$string['import_overwrite'] = 'मौजूदा टेम्प्लेट्स को ओवरराइट करें';
$string['import_overwrite_help'] = 'यदि चेक किया गया है, तो मौजूदा टेम्प्लेट्स अपडेट होंगे। यदि अनचेक है, तो मौजूदा टेम्प्लेट्स को अनदेखा किया जाएगा।';
$string['import_success'] = 'आयात पूरा हुआ।<br>&amp;nbsp;&amp;gt; <strong>आयात किए गए:</strong> {$a->imported}<br>&amp;nbsp;&amp;gt; <strong>छोड़े गए:</strong> {$a->skipped}<br>&amp;nbsp;&amp;gt; <strong>Wrapper अपडेट किया गया:</strong> {$a->wrapper}.';
$string['import_title'] = 'टेम्प्लेट आयात करें';
$string['import_wrapper'] = 'HTML wrapper (बेस टेम्प्लेट) आयात करें';
$string['import_wrapper_help'] = 'यदि चेक किया गया है, तो JSON HTML wrapper इस वातावरण में कॉन्फ़िगर किए गए wrapper को बदल देगा।';
$string['messages'] = 'संदेश';
$string['placeholders_course_data_desc'] = 'कोर्स डेटा (जब पता लगाया जा सके)।';
$string['placeholders_course_url_desc'] = 'कोर्स URL (जब पता लगाया जा सके)।';
$string['placeholders_dates_now_desc'] = 'वर्तमान दिनांक/समय (userdate)।';
$string['placeholders_desc'] = 'आप संदेश में Mustache placeholders का उपयोग कर सकते हैं।';
$string['placeholders_fullmessage_desc'] = 'सादा-पाठ संदेश।';
$string['placeholders_fullmessagehtml_desc'] = 'HTML संदेश (ट्रिपल ब्रेसेस का उपयोग करें)।';
$string['placeholders_site_fullname_desc'] = 'साइट का पूरा नाम (<code>{$SITE->fullname}</code>)।';
$string['placeholders_site_logourl_desc'] = 'साइट का लोगो (<img src="{$a->logo_url}" style="max-width:70px;max-height:70px;">)।';
$string['placeholders_site_shortname_desc'] = 'साइट का छोटा नाम (<code>{$SITE->shortname}</code>)।';
$string['placeholders_site_url_desc'] = 'साइट URL (<code>{$CFG->wwwroot}</code>)।';
$string['placeholders_subject_desc'] = 'वर्तमान सूचना विषय।';
$string['placeholders_title'] = 'उपलब्ध placeholders';
$string['placeholders_userfrom_data_desc'] = 'प्रेषक डेटा।';
$string['placeholders_userto_data_desc'] = 'प्राप्तकर्ता डेटा।';
$string['pluginname'] = 'कोपेरे ईमेल';
$string['privacy:metadata:attachment'] = 'फ़ाइल फ़ाइल सिस्टम में संलग्न की गई है।';
$string['privacy:metadata:attachname'] = 'संलग्नक का नाम।';
$string['privacy:metadata:externalpurpose'] = 'बाहरी उद्देश्य';
$string['privacy:metadata:fullmessage'] = 'सादा-पाठ संदेश।';
$string['privacy:metadata:fullmessagehtml'] = 'HTML संदेश।';
$string['privacy:metadata:recipient'] = 'ईमेल प्राप्तकर्ता।';
$string['privacy:metadata:replyto'] = 'Reply-to ईमेल।';
$string['privacy:metadata:replytoname'] = 'Reply-to नाम।';
$string['privacy:metadata:subject'] = 'ईमेल विषय।';
$string['privacy:metadata:userfrom'] = 'ईमेल प्रेषक।';
$string['settings_customtemplates'] = 'प्रदाता के अनुसार कस्टम संदेश';
$string['settings_customtemplates_desc'] = 'प्रत्येक सूचना प्रदाता के लिए कस्टम संदेश बनाएँ/संपादित करें।';
$string['settings_wrapper'] = 'ईमेल बेस टेम्पलेट (रैपर)';
$string['settings_wrapper_desc'] = 'यह HTML Mustache में फ़ॉर्मैट किया गया है और इसे छात्र को भेजे जाने वाले संदेश टेम्पलेट के रूप में लागू किया जाएगा। HTML सामग्री को वहाँ डाला जाना चाहिए जहाँ {{{fullmessagehtml}}} है।';
$string['table_actions'] = 'कार्रवाइयाँ';
$string['table_component'] = 'घटक';
$string['table_name'] = 'नाम';
$string['table_provider'] = 'प्रदाता';
$string['template'] = 'टेम्पलेट';
$string['template_changue'] = 'मैं इस टेम्पलेट को Kopere Mail के लिए डिफ़ॉल्ट के रूप में उपयोग करना चाहता/चाहती हूँ';
$string['template_changued'] = 'टेम्पलेट सफलतापूर्वक अपडेट हो गया';
$string['template_delete_confirm'] = 'क्या आप वाकई इस प्रदाता के लिए कस्टम संदेश हटाना चाहते हैं?';
$string['template_delete_title'] = 'कस्टम संदेश हटाएँ';
$string['template_deleted'] = 'कस्टम संदेश हटा दिया गया।';
$string['template_edit_bodyhtml'] = 'संदेश HTML';
$string['template_edit_provider'] = 'प्रदाता';
$string['template_edit_save'] = 'सहेजें';
$string['template_edit_subject'] = 'विषय (वैकल्पिक)';
$string['template_edit_title'] = 'कस्टम संदेश';
$string['template_preview'] = 'टेम्पलेट का पूर्वावलोकन';
$string['template_saved'] = 'कस्टम संदेश सहेज दिया गया।';
$string['templates_other'] = 'अन्य टेम्पलेट';
$string['templates_transfer_desc'] = 'पर्यावरणों के बीच सेटिंग्स माइग्रेट करने के लिए इस सेवा का उपयोग करें (उदा., staging -> production)।';
$string['templates_transfer_title'] = 'सेटिंग्स निर्यात / आयात';
