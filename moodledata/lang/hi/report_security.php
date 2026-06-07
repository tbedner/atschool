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
 * Strings for component 'report_security', language 'hi', version '4.4'.
 *
 * @package     report_security
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_antivirus_details'] = 'यह हैसियत जांचती है कि मुख्य एंटीवायरस सेटिंग्स में थ्रेसहोल्ड सेट के आधार पर हाल ही में कोई त्रुटि पाई गई है अथवा नहीं।';
$string['check_antivirus_error'] = '{$a-> errors} अंतिम {$a-> lookback} के भीतर पाई गई हैं';
$string['check_antivirus_info'] = 'वर्तमान में कोई एंटीवायरस स्कैनर सक्षम नहीं हैं';
$string['check_antivirus_logstore_not_supported'] = 'चुने गए लॉग स्टोर के प्रकार के कारण एंटीवायरस स्कैनर की स्थिति को सत्यापित करना में असमर्थ';
$string['check_antivirus_name'] = 'एंटीवायरस';
$string['check_antivirus_ok'] = '{$a-> scanners} एंटीवायरस स्कैनर सक्षम, पिछले {$a-> lookback} में कोई समस्या का पता नहीं चला है';
$string['check_configrw_details'] = '<p> यह अनुशंसा की जाती है कि config.php की फ़ाइल अनुमतियाँ स्थापना के बाद बदल दी जाती हैं ताकि फ़ाइल को वेब सर्वर द्वारा संशोधित न किया जा सके।
कृपया ध्यान दें कि इस उपाय से सर्वर की सुरक्षा में उल्लेखनीय सुधार नहीं होता है, हालांकि यह सामान्य कारनामों को धीमा या सीमित कर सकता है। </p>';
$string['check_configrw_name'] = 'लिखने योग्य config.php';
$string['check_configrw_ok'] = 'config.php को PHP स्क्रिप्ट द्वारा संशोधित नहीं किया जा सकता है।';
$string['check_configrw_warning'] = 'PHP स्क्रिप्ट config.php को संशोधित कर सकती है।';
$string['check_cookiesecure_details'] = '<p> यदि आप https संचार सक्षम करते हैं तो यह अनुशंसा की जाती है कि आप सुरक्षित कुकीज़ भी सक्षम करें। आपको http से https में स्थायी पुनर्निर्देशन भी जोड़ना चाहिए। आदर्श रूप से HSTS हेडर को भी अच्छी तरह से परोसें। </p>';
$string['check_cookiesecure_error'] = 'कृपया सुरक्षित कुकीज़ इनेबल करें';
$string['check_cookiesecure_http'] = 'सुरक्षित कुकीज़ का उपयोग करने के लिए आपको https चालू करना होगा।';
$string['check_cookiesecure_name'] = 'सुरक्षित कुकीज़';
$string['check_cookiesecure_ok'] = 'सुरक्षित कुकीज़ इनेबल्ड';
$string['check_crawlers_details'] = '<p> Google सेटिंग के लिए खुला खोज इंजन को अतिथि पहुंच के साथ पाठ्यक्रम में प्रवेश करने में सक्षम बनाता है। यदि अतिथि लॉगिन की अनुमति नहीं है तो इस सेटिंग को सक्षम करने का कोई मतलब नहीं है। </p>';
$string['check_crawlers_error'] = 'खोज इंजन पहुंच की अनुमति है लेकिन अतिथि पहुंच डिसेबल्ड है।';
$string['check_crawlers_info'] = 'खोज इंजन मेहमानों के रूप में प्रवेश कर सकते हैं।';
$string['check_crawlers_name'] = 'Google पर खोलें';
$string['check_crawlers_ok'] = 'खोज इंजन पहुंच इनेबल्ड नहीं है।';
$string['check_defaultuserrole_details'] = '<p> सभी लॉग इन किए गए उपयोगकर्ताओं को चूकना उपयोगकर्ता भूमिका की क्षमताएं दी जाती हैं। कृपया सुनिश्चित करें कि इस भूमिका में किसी भी जोखिम भरी क्षमताओं की अनुमत नहीं है। </p>
<p> चूकना उपयोगकर्ता भूमिका के लिए एकमात्र समर्थित विरासत प्रकार <em> प्रमाणीकृत उपयोगकर्ता </em> है। क्रम देखने की क्षमता को सक्षम नहीं किया विलोपन चाहिए। </p> <p> कृपया जाँच करें कि स्वचालित डेटा विलोपन अनुरोध अनुमोदन (tool_dataprivacy | automaticdatadeletionapproval) विकल्प सक्षम है या नहीं। उपयोगकर्ता उन विलोपनों का अनुरोध कर सकते हैं जो बड़ी मात्रा में डेटा को निकाल देना सकते हैं। </p>';
$string['check_defaultuserrole_error'] = 'डिफ़ॉल्ट उपयोगकर्ता भूमिका "{$a}" को गलत तरीके से परिभाषित किया गया है!';
$string['check_defaultuserrole_name'] = 'सभी उपयोगकर्ताओं के लिए डिफ़ॉल्ट भूमिका';
$string['check_defaultuserrole_notset'] = 'डिफ़ॉल्ट भूमिका निर्धारित नहीं है।';
$string['check_defaultuserrole_ok'] = 'सभी उपयोगकर्ता परिभाषा के लिए डिफ़ॉल्ट भूमिका ठीक है।';
$string['check_dirindex_info'] = 'निर्देशिका अनुक्रमणिका सक्षम नहीं होना चाहिए';
$string['check_displayerrors_details'] = '<p> PHP सेटिंग को सक्षम करना <code> display_errors </code> का उत्पादन साइटों पर अनुशंसित नहीं है क्योंकि त्रुटि संदेश आपके सर्वर के बारे में संवेदनशील जानकारी को प्रकट कर सकते हैं। </p>';
$string['check_displayerrors_error'] = 'त्रुटियों को प्रदर्शित करने के लिए PHP सेटिंग सक्षम है। यह अनुशंसित है कि यह डिसेबल्ड है।';
$string['check_displayerrors_name'] = 'PHP त्रुटियों का प्रदर्शन';
$string['check_displayerrors_ok'] = 'PHP त्रुटियों को प्रदर्शित करना दिसबलेड है।';
$string['check_dotfiles_info'] = '/.well-known/* को छोड़कर सभी डॉटफ़ाइल सार्वजनिक नहीं होनी चाहिए';
$string['check_emailchangeconfirmation_details'] = '<p> यह अनुशंसा की जाती है कि जब उपयोगकर्ता अपनी प्रोफ़ाइल में अपना ईमेल पता बदलते हैं, तो ईमेल पुष्टिकरण चरण की आवश्यकता होती है। यदि डिसेबल्ड है, स्पैमर्स स्पैम भेजने के लिए सर्वर का फायदा उठाने की कोशिश कर सकते हैं। </p>
<p> ईमेल फ़ील्ड को प्रमाणीकरण प्लगइन्स से भी लॉक किया जा सकता है, इस संभावना पर यहाँ विचार नहीं किया गया है। </p>';
$string['check_emailchangeconfirmation_error'] = 'उपयोगकर्ता कोई भी ईमेल पता दर्ज कर सकते हैं।';
$string['check_emailchangeconfirmation_info'] = 'उपयोगकर्ता अनुमत डोमेन से ही ईमेल पते दर्ज कर सकते हैं।';
$string['check_emailchangeconfirmation_name'] = 'ईमेल परिवर्तन की पुष्टि';
$string['check_emailchangeconfirmation_ok'] = 'उपयोगकर्ता प्रोफ़ाइल में ईमेल पते के परिवर्तन की पुष्टि।';
$string['check_embed_details'] = '<p> अनलिमिटेड ऑब्जेक्ट एम्बेडिंग बहुत खतरनाक है - कोई भी पंजीकृत उपयोगकर्ता अन्य सर्वर उपयोगकर्ताओं के खिलाफ XSS हमला शुरू कर सकता है। यह सेटिंग उत्पादन सर्वरों पर अक्षम होनी चाहिए। </p>';
$string['check_embed_error'] = 'असीमित ऑब्जेक्ट एम्बेडिंग सक्षम - यह अधिकांश सर्वरों के लिए बहुत खतरनाक है।';
$string['check_embed_name'] = 'EMBED और OBJECT की अनुमति दें';
$string['check_embed_ok'] = 'असीमित ऑब्जेक्ट एम्बेडिंग की अनुमति नहीं है।';
$string['check_frontpagerole_details'] = '<p> फ्रंटपेज गतिविधियों के लिए सभी पंजीकृत उपयोगकर्ताओं को डिफ़ॉल्ट फ्रंटपेज भूमिका दी जाती है। कृपया सुनिश्चित करें कि इस भूमिका के लिए कोई जोखिमपूर्ण क्षमता की अनुमति नहीं है। </p>
<p> यह अनुशंसा की जाती है कि इस उद्देश्य के लिए एक विशेष भूमिका बनाई जाती है और एक विरासत प्रकार की भूमिका का उपयोग नहीं किया जाता है। </p>';
$string['check_frontpagerole_error'] = 'गलत तरीके से परिभाषित फ्रंटपेज भूमिका "{$a}" का पता चला!';
$string['check_frontpagerole_name'] = 'फ्रंटपेज भूमिका';
$string['check_frontpagerole_notset'] = 'फ्रंटपेज भूमिका निर्धारित नहीं है।';
$string['check_frontpagerole_ok'] = 'फ्रंटपेज रोल की परिभाषा ठीक है।';
$string['check_guestrole_details'] = '<p> मेहमानों के लिए अतिथि भूमिका का उपयोग किया जाता है, उपयोगकर्ताओं में लॉग इन नहीं किया जाता है और अस्थायी अतिथि पाठ्यक्रम का उपयोग किया जाता है। कृपया सुनिश्चित करें कि इस भूमिका में किसी भी जोखिम भरी क्षमता की अनुमति नहीं है। </p>
<p> अतिथि भूमिका के लिए एकमात्र समर्थित विरासत प्रकार <em> अतिथि </em> </p>';
$string['check_guestrole_error'] = 'अतिथि भूमिका "{$a}" को गलत तरीके से परिभाषित किया गया है!';
$string['check_guestrole_name'] = 'अतिथि भूमिका';
$string['check_guestrole_notset'] = 'अतिथि भूमिका निर्धारित नहीं है।';
$string['check_guestrole_ok'] = 'अतिथि भूमिका परिभाषा ठीक है।';
$string['check_nodemodules_details'] = '<p> निर्देशिका <em> {$a->path} </em> में Node.js मॉड्यूल और उनकी निर्भरताएं होती हैं, जो आमतौर पर NPM उपयोगिता द्वारा स्थापित की जाती हैं। इन मॉड्यूलों को स्थानीय मडल विकास के लिए आवश्यक हो सकता है, जैसे कि ग्रंट फ्रेमवर्क का उपयोग करने के लिए। उन्हें उत्पादन में Moodle साइट चलाने की आवश्यकता नहीं होती है और वे संभावित साइट को दूरस्थ हमलों के लिए आपकी साइट को उजागर करने वाले संभावित कोड को शामिल कर सकते हैं। </p> <p> यदि किसी सार्वजनिक URL के माध्यम से साइट उपलब्ध है, तो निर्देशिका को हटाने की जोरदार सिफारिश की जाती है। या कम से कम अपने वेबसर्वर कॉन्फ़िगरेशन में वेब एक्सेस को प्रतिबंधित करें। </p>';
$string['check_nodemodules_info'] = 'नोड_मॉड्यूल निर्देशिका सार्वजनिक साइटों पर मौजूद नहीं होनी चाहिए';
$string['check_nodemodules_name'] = 'Node.js मॉड्यूल निर्देशिका';
$string['check_openprofiles_details'] = 'स्पैमर्स द्वारा खुले उपयोगकर्ता प्रोफाइल का दुरुपयोग किया जा सकता है। यह अनुशंसा की जाती है कि <code> फोर्स उपयोगकर्ताओं को प्रोफाइल के लिए लॉग इन करें </code> या <code> फोर्स उपयोगकर्ताओं को लॉग इन करने के लिए </code> इनेबल्ड किया जाए।';
$string['check_openprofiles_error'] = 'कोई भी व्यक्ति बिना लॉगिन किए उपयोगकर्ता प्रोफ़ाइल देख सकता है।';
$string['check_openprofiles_name'] = 'उपयोगकर्ता प्रोफ़ाइल खोलें';
$string['check_openprofiles_ok'] = 'उपयोगकर्ता प्रोफाइल देखने से पहले लॉगिन आवश्यक है।';
$string['check_passwordpolicy_details'] = '<p> यह अनुशंसा की जाती है कि पासवर्ड नीति निर्धारित की जाती है, क्योंकि अनधिकृत पहुंच प्राप्त करने के लिए पासवर्ड अनुमान लगाना बहुत आसान तरीका है।
आवश्यकताओं को बहुत सख्त न करें, हालांकि इसके परिणामस्वरूप उपयोगकर्ता अपने पासवर्ड को याद नहीं रख पाते हैं और या तो उन्हें भूल जाते हैं और उन्हें लिख देते हैं। </p>';
$string['check_passwordpolicy_error'] = 'पासवर्ड नीति सेट नहीं है।';
$string['check_passwordpolicy_name'] = 'पासवर्ड नीति';
$string['check_passwordpolicy_ok'] = 'पासवर्ड नीति इनेबल्ड है।';
$string['check_preventexecpath_details'] = '<p>एडमिन जीयूआई के माध्यम से निष्पादन योग्य पथों को सेट करने की अनुमति देना विशेषाधिकार वृद्धि का एक जरिया है। इसे config.php में अनिवार्य रूप से लागू किया जाना चाहिए:</p><p><code>$CFG->preventexecpath = true;</code></p>';
$string['check_preventexecpath_name'] = 'निष्पादन योग्य पथ';
$string['check_preventexecpath_ok'] = 'निष्पादन योग्य पथ केवल config.php में व्यवस्थित होते हैं।';
$string['check_preventexecpath_warning'] = 'निष्पादन योग्य पथ व्यवस्थापक GUI में सेट किए जा सकते हैं।';
$string['check_publicpaths_403'] = '(एक 403 लौटाया, आदर्श रूप से 404 होना चाहिए)';
$string['check_publicpaths_generic'] = '{$a} फाइलें सार्वजनिक नहीं होनी चाहिए';
$string['check_publicpaths_name'] = 'सभी सार्वजनिक/निजी मार्गों की जाँच करें';
$string['check_publicpaths_ok'] = 'सभी आंतरिक मार्ग सार्वजनिक रूप से सुलभ नहीं हैं।';
$string['check_publicpaths_warning'] = 'कुछ आंतरिक मार्ग सार्वजनिक रूप से सुलभ हैं।';
$string['check_riskadmin_detailsok'] = '<p> कृपया सिस्टम प्रशासक की निम्न सूची सत्यापित करें: </p> {$a}';
$string['check_riskadmin_detailswarning'] = '<p> कृपया सिस्टम व्यवस्थापकों की निम्न सूची सत्यापित करें: </p> {$a-> प्रवेश}
<p> केवल सिस्टम संदर्भ में व्यवस्थापक भूमिका असाइन करने की अनुशंसा की जाती है। निम्नलिखित उपयोगकर्ताओं के पास अन्य संदर्भों में व्यवस्थापन भूमिकाएँ हैं (<असमर्थित): </p> {$a-> असमर्थित}';
$string['check_riskadmin_name'] = 'व्यवस्थापकों';
$string['check_riskadmin_ok'] = 'पाया गया {$a} सर्वर प्रशासक(ओं) को।';
$string['check_riskadmin_unassign'] = '<a href = "{$a-> url}"> {$a-> fullname} ({$a-> email}) भूमिका असाइनमेंट की पुनर्विलोकन करें </a>';
$string['check_riskadmin_warning'] = '{$a-> admincount} सर्वर प्रशासकों और {$a-> unsupcount} असमर्थित एडमिन भूमिका असाइनमेंट पाए गए।';
$string['check_riskbackup_details_overriddenroles'] = '<p> ये सक्रिय ओवरराइड उपयोगकर्ताओं को बैकअप में उपयोगकर्ता डेटा को शामिल करने की क्षमता प्रदान करते हैं। कृपया सुनिश्चित करें कि यह अनुमति आवश्यक है। </p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p> निम्नलिखित तंत्र भूमिकाएँ वर्तमान में उपयोगकर्ताओं को बैकअप में उपयोगकर्ता डेटा सम्मिलित करना की अनुमति देना हैं। कृपया सुनिश्चित करें कि यह अनुमति आवश्यक है। </p> {$a}';
$string['check_riskbackup_details_users'] = '<p> उपरोक्त भूमिकाओं या स्थानीय ओवरराइड्स के कारण, निम्न उपयोगकर्ता खातों को वर्तमान में अपने पाठ्यक्रम में नामांकित किसी भी उपयोगकर्ता के निजी डेटा वाले बैकअप बनाने की अनुमति है। सुनिश्चित करें कि वे (a) विश्वसनीय और (b) मजबूत पासवर्ड द्वारा संरक्षित हैं: </p> {$a}';
$string['check_riskbackup_detailsok'] = 'कोई भी भूमिका स्पष्ट रूप से उपयोगकर्ता डेटा का बैकअप लेने की अनुमति नहीं देती है। हालांकि, ध्यान दें कि "doanything" क्षमता के साथ प्रवेश अभी भी ऐसा करने में सक्षम होने की संभावना है।';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} in {$a->contextname}</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'उपयोगकर्ता डेटा का बैकअप';
$string['check_riskbackup_ok'] = 'कोई भी भूमिका स्पष्ट रूप से उपयोगकर्ता डेटा का बैकअप लेने की अनुमति नहीं देती है';
$string['check_riskbackup_warning'] = '{$a->rolecount} भूमिकाएँ, {$a->overridecount} ओवरराइड और {$a->usercount} उपयोगकर्ता मिले हैं जिनमें उपयोगकर्ता डेटा का बैकअप लेने की क्षमता है।';
$string['check_riskxss_details'] = '<p>RISK_XSS उन सभी खतरनाक क्षमताओं को दर्शाता है जिनका उपयोग केवल विश्वसनीय उपयोगकर्ता ही कर सकते हैं।</p>
<p>कृपया उपयोगकर्ताओं की निम्नलिखित सूची की जाँच करें और सुनिश्चित करें कि आप इस सर्वर पर उन पर पूरी तरह से भरोसा करते हैं:</p><p>{$a}</p>';
$string['check_riskxss_name'] = 'XSS ने उपयोगकर्ताओं पर भरोसा किया';
$string['check_riskxss_warning'] = 'RISK_XSS - पाया गया {$a} उपयोगकर्ता जिन पर भरोसा किया जाना है।';
$string['check_unsecuredataroot_details'] = '<p> डेटाट्रो निर्देशिका वेब के माध्यम से सुलभ नहीं होनी चाहिए। यह सुनिश्चित करने का सबसे अच्छा तरीका है कि निर्देशिका सुलभ नहीं है, सार्वजनिक वेब निर्देशिका के बाहर निर्देशिका का उपयोग करना है। </p>
<p> यदि आप डायरेक्टरी को आगे बढ़ाते हैं, तो आपको <code> configroot </code> सेटिंग <code> config.php </code> के हिसाब से अपडेट करना होगा। </p>';
$string['check_unsecuredataroot_error'] = 'आपकी डेटारूट निर्देशिका  <code>{$a}</code> गलत स्थान पर है और वेब के संपर्क में है!';
$string['check_unsecuredataroot_name'] = 'असुरक्षित डेटा';
$string['check_unsecuredataroot_ok'] = 'Dataroot निर्देशिका वेब के माध्यम से सुलभ नहीं होना चाहिए।';
$string['check_unsecuredataroot_warning'] = 'आपकी डेटाट्रो डायरेक्टरी <code>{$a}</code> गलत स्थान पर है और वह वेब पर सामने आ सकती है।';
$string['check_vendordir_details'] = '<p> निर्देशिका <em>{$a->path}</em> में विभिन्न तृतीय-पक्ष लाइब्रेरी और उनकी निर्भरताएं हैं, जो आमतौर पर PHP संगीतकार द्वारा स्थापित की जाती हैं। इन पुस्तकालयों की आवश्यकता स्थानीय मडल विकास के लिए हो सकती है, जैसे कि PHPUnit ढांचे को स्थापित करने के लिए। उन्हें उत्पादन में Moodle साइट चलाने की आवश्यकता नहीं होती है और वे संभावित साइट को दूरस्थ हमलों के लिए आपकी साइट को उजागर करने वाले संभावित कोड को शामिल कर सकते हैं। </p><p> यदि किसी सार्वजनिक URL के माध्यम से साइट उपलब्ध है, तो निर्देशिका को हटाने की जोरदार सिफारिश की जाती है। या कम से कम अपने वेबसर्वर कॉन्फ़िगरेशन में वेब एक्सेस को प्रतिबंधित करें। </p>';
$string['check_vendordir_info'] = 'विक्रेता निर्देशिका सार्वजनिक साइटों पर मौजूद नहीं होनी चाहिए।';
$string['check_vendordir_name'] = 'विक्रेता निर्देशिका';
$string['check_webcron_details'] = '<p> वेब ब्राउज़र से क्रोन चलाने से अनाम उपयोगकर्ताओं को विशेषाधिकार प्राप्त जानकारी उजागर हो सकती है। कमांड लाइन से केवल क्रोन चलाने या रिमोट एक्सेस के लिए क्रोन पासवर्ड सेट करने की सिफारिश की जाती है। </p>';
$string['check_webcron_name'] = 'वेब क्रोन';
$string['check_webcron_ok'] = 'अनाम उपयोगकर्ता क्रोन तक नहीं पहुंच सकते।';
$string['check_webcron_warning'] = 'अनाम उपयोगकर्ता क्रोन का उपयोग कर सकते हैं।';
$string['configuration'] = 'कॉन्फ़िगरेशन';
$string['description'] = 'विवरण';
$string['details'] = 'विस्तार';
$string['eventreportviewed'] = 'जमानत जाँच प्रतिवेदन देखी गई';
$string['issue'] = 'मुद्दा';
$string['pluginname'] = 'सुरक्षा अवलोकन';
$string['privacy:metadata'] = 'जमानत अवलोकन प्लगइन किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करता है।';
$string['security:view'] = 'जमानत प्रतिवेदन देखें';
$string['timewarning'] = 'आँकड़ों का संसाधन में लंबा समय लग सकता है, कृपया धैर्य रखें...';
