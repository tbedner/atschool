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
 * Strings for component 'local_kopere_wpbridge', language 'hi', version '4.4'.
 *
 * @package     local_kopere_wpbridge
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'क्रियाएं';
$string['adminnotification_body'] = 'WooCommerce ब्रिज में एक समस्या का पता चला है।

{$a}';
$string['adminnotification_subject'] = 'WP ब्रिज समस्या';
$string['back'] = 'वापस';
$string['dashboard_laststatus'] = 'कनेक्शन स्थिति';
$string['dashboard_mappingcount'] = 'मैपिंग्स';
$string['dashboard_openui'] = 'खुली मैपिंग्स';
$string['dashboard_pendingcount'] = 'लंबित आइटम्स';
$string['dashboard_processedcount'] = 'प्रसंस्कृत आइटम्स';
$string['dashboard_settings'] = 'सेटिंग्स';
$string['dashboard_subtitle'] = 'पूर्ण बिक्री Moodle पाठ्यक्रमों और समूहों में सिंक्रनाइज़ करें।';
$string['dashboard_title'] = 'WooCommerce से Moodle ब्रिज';
$string['error_configmissing'] = 'WooCommerce सेटिंग्स अधूरी हैं।';
$string['error_invalidsignature'] = 'अमान्य WooCommerce वेबहुक हस्ताक्षर।';
$string['error_invalidwebhooktoken'] = 'अमान्य वेबहुक टोकन。';
$string['error_missingemail'] = 'ऑर्डर में ग्राहक ईमेल शामिल नहीं है।';
$string['error_missingorderid'] = 'WooCommerce ऑर्डर ID गायब है。';
$string['error_nomanualenrol'] = 'पाठ्यक्रम में कोई सक्रिय मैनुअल नामांकन इंस्टेंस नहीं मिला。';
$string['error_nomapping'] = 'इस उत्पाद के लिए कोई सक्रिय मैपिंग नहीं मिली。';
$string['manage'] = 'WooCommerce ब्रिज प्रबंधित करें。';
$string['mapping_add'] = 'मैपिंग जोड़ें';
$string['mapping_cohort'] = 'समूह';
$string['mapping_course'] = 'पाठ्यक्रम';
$string['mapping_delete'] = 'मैपिंग हटाएं';
$string['mapping_delete_confirm'] = 'क्या आप सच में इस मैपिंग को हटाना चाहते हैं?';
$string['mapping_deleted'] = 'मैपिंग सफलतापूर्वक हटाया गया。';
$string['mapping_edit'] = 'मैपिंग संपादित करें';
$string['mapping_enabled'] = 'सक्षम';
$string['mapping_itemtype'] = 'गंतव्य प्रकार';
$string['mapping_itemtype_cohort'] = 'समूह';
$string['mapping_itemtype_course'] = 'पाठ्यक्रम';
$string['mapping_missingcohort'] = 'समूह मैपिंग के लिए एक समूह चुनें';
$string['mapping_missingcourse'] = 'कोर्स मैपिंग के लिए एक कोर्स चुनें।';
$string['mapping_productid'] = 'WooCommerce उत्पाद ID';
$string['mapping_role'] = 'कोर्स नामांकन के लिए papel';
$string['mapping_saved'] = 'मैपिंग सफलतापूर्वक सहेज दी गई।';
$string['mappings'] = 'मैपिंग';
$string['messageprovider_syncnotification'] = 'WP Bridge सूचनाएं';
$string['ordernotification_body'] = 'नमस्ते {$a->firstname},

आपका आदेश {$a->orderid} सफलतापूर्वक संसाधित किया गया था.

लागू एक्सेस:
{$a->items}

अब आप Moodle तक पहुँच सकते हैं:
{$a->siteurl}

शुभकामनाएं,
{$a->sitename}';
$string['ordernotification_subject'] = 'आपकी Moodle पहुँच तैयार है';
$string['pluginname'] = 'Kopere WP Bridge';
$string['privacy:metadata'] = 'प्लगइन Moodle नामांकन प्रसंस्करण के लिए WooCommerce ऑर्डर डेटा संग्रहीत करता है।';
$string['savechanges'] = 'परिवर्तनों को सहेजें';
$string['settings_consumerkey'] = 'उपभोक्ता कुंजी';
$string['settings_consumersecret'] = 'उपभोक्ता सीक्रेट';
$string['settings_debug'] = 'डिबग मोड';
$string['settings_notconfigured'] = 'कनेक्शन अभी तक कॉन्फ़िगर नहीं किया गया है।';
$string['settings_section'] = 'WooCommerce कनेक्शन';
$string['settings_statusheading'] = 'पिछला कनेक्शन परीक्षण';
$string['settings_storeurl'] = 'WooCommerce यूआरएल';
$string['settings_storeurl_desc'] = 'उदाहरण: https://example.com';
$string['settings_testfailed'] = 'कनेक्शन परीक्षण असफल: {$a}';
$string['settings_testok'] = 'कनेक्शन सफलतापूर्वक परीक्षण किया गया और वेबहुक जाँच समाप्त हो गई।';
$string['settings_webhookheading'] = 'वेबहुक एंडपॉइंट';
$string['settings_webhookheading_desc'] = 'इस URL को WooCommerce में उपयोग करें। टोकन क्वेरी स्ट्रिंग में हमेशा आवश्यक है।';
$string['settings_webhookurl'] = 'वेबहुक URL';
$string['status_error'] = 'त्रुटि';
$string['status_failed'] = 'विफल';
$string['status_ignored'] = 'अनदेखा किया गया';
$string['status_ok'] = 'ठीक';
$string['status_pending'] = 'प्रलंबित';
$string['status_processed'] = 'प्रसंस्कृत';
$string['task_syncorders'] = 'WooCommerce के पूर्ण ऑर्डर सिंक्रनाइज़ करें';
$string['wpbridge'] = 'WP Bridge';
