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
 * Strings for component 'plugin', language 'hi', version '4.4'.
 *
 * @package     plugin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'क्रियाएँ';
$string['availability'] = 'उपलब्धता';
$string['cancelinstallall'] = 'नई स्थापनाओं को रद्द करना ({$a})';
$string['cancelinstallhead'] = 'प्लगइन्स की अधिष्ठापन रद्द करना';
$string['cancelinstallinfo'] = 'निम्नलिखित प्लगइन अभी तक पूरी तरह से स्थापित नहीं किए गए हैं इसलिए उनकी अधिष्ठापन रद्द की जा सकती है। ऐसा करने के लिए, प्लगइन फोल्डर, चौपन्ना को अब सर्वर से हटा दिया जाना चाहिए। सुनिश्चित करें कि आप वास्तव में आकस्मिक डेटा हानि (जैसे कि अपने स्वयं के कोड संशोधन) को रोकना चाहते हैं।';
$string['cancelinstallinfodir'] = 'हटाए जाने वाले फोल्डर, चौपन्ना: {$a}';
$string['cancelinstallone'] = 'इस अधिष्ठापन को रद्द करना';
$string['cancelupgradeall'] = 'उन्नयन रद्द करना ({$a})';
$string['cancelupgradehead'] = 'प्लगइन्स के पिछले संस्करण को पुनर्स्थापित करना';
$string['cancelupgradeone'] = 'इस उन्नयन करना को रद्द करना';
$string['checkforupdates'] = 'उपलब्ध अद्यतनों के लिए जाँच करें';
$string['checkforupdateslast'] = '{$a} पर अंतिम जाँच की गई';
$string['dependencyavailable'] = 'उपलब्ध';
$string['dependencyfails'] = 'असफल';
$string['dependencyinstall'] = 'स्थापित करें';
$string['dependencyinstallhead'] = 'लापता निर्भरताएँ स्थापित करना';
$string['dependencyinstallmissing'] = 'लापता निर्भरताओं को स्थापित करें ({$a})';
$string['dependencymissing'] = 'लापता';
$string['dependencyunavailable'] = 'अनुपलब्ध';
$string['dependencyupload'] = 'अपलोड करें';
$string['dependencyuploadmissing'] = 'ZIP फ़ाइलों को अपलोड करें';
$string['detectedmisplacedplugin'] = 'प्लगइन "{$a->component}" गलत स्थान "{$a->current}" पर स्थापित है, अपेक्षित स्थान "{$a->expected}" है।';
$string['displayname'] = 'प्लगइन नाम';
$string['err_response_curl'] = 'उपलब्ध अद्यतन डेटा प्राप्त करने में असमर्थ-अप्रत्याशित CURL त्रुटि।';
$string['err_response_format_version'] = 'प्रतिक्रिया प्रारूप का अप्रत्याशित संस्करण। कृपया उपलब्ध अद्यतनों के लिए फिर से जाँच करने का प्रयास करें।';
$string['err_response_http_code'] = 'उपलब्ध अद्यतन डेटा प्राप्त करने में असमर्थ-अप्रत्याशित HTTP प्रतिक्रिया कोड।';
$string['filterall'] = 'सब कुछ दिखाएँ';
$string['filtercontribonly'] = 'केवल अतिरिक्त प्लगइन दिखाएँ';
$string['filterupdatesonly'] = 'केवल अद्यतन करने योग्य दिखाएँ';
$string['incompatibleversion'] = 'असंगत मूडल संस्करणः {$a}';
$string['isenabled'] = 'सक्षम किया गया';
$string['misdepinfoplugin'] = 'प्लगइन जानकारी';
$string['misdepinfoversion'] = 'संस्करण जानकारी';
$string['misdepsavail'] = 'उपलब्ध लापता निर्भरताएँ';
$string['misdepsunavail'] = 'अनुपलब्ध लापता निर्भरताएँ';
$string['misdepsunavaillist'] = 'निर्भरता आवश्यकताओं को पूरा करना के लिए कोई संस्करण नहीं पाया गयाः {$a}।';
$string['misdepsunknownlist'] = 'प्लगइन निर्देशिका में नहींः <strong>{$a}</strong>';
$string['moodlebranch'] = 'मूडल {$a->min} - {$a->max}';
$string['moodleversion'] = 'मूडल {$a}';
$string['noneinstalled'] = 'इस प्रकार के कोई प्लगइन स्थापित नहीं हैं।';
$string['notdownloadable'] = 'पैकेज डाउनलोड नहीं कर सकते';
$string['notdownloadable_help'] = 'अद्यतन साथ ZIP पैकेज को स्वचालित रूप से डाउनलोड नहीं किया जा सकता है।';
$string['notdownloadable_link'] = 'admin/mdeploy/notdownloadable';
$string['notes'] = 'नोट्स';
$string['notsupported'] = 'प्लगइन मूडल संस्करण {$a} के साथ संगत नहीं हो सकता है';
$string['notwritable'] = 'प्लगइन फाइलें लिखने योग्य नहीं हैं';
$string['notwritable_help'] = 'प्लगइन फ़ाइलों को वेब सर्वर द्वारा लिखा नहीं जा सकता है। वेब सर्वर प्रक्रम में प्लगइन फोल्डर, चौपन्ना और उसकी सभी सामग्री तक लेखन पहुँच होनी चाहिए। दिए गए प्लगइन प्रकार के मूल फोल्डर, चौपन्ना तक लेखन पहुँच की भी अपेक्षितता हो सकती है।';
$string['overviewall'] = 'सभी प्लगइन';
$string['overviewext'] = 'अतिरिक्त प्लगइन';
$string['overviewupdatable'] = 'उपलब्ध अद्यतन';
$string['packagesdebug'] = 'डिबगिंग आउटपुट सक्षम है';
$string['packagesdownloading'] = '{$a} डाउनलोड करना';
$string['packagesextracting'] = '{$a} निकालना';
$string['packagesvalidating'] = '{$a} को मान्य करना';
$string['packagesvalidatingfailed'] = 'सत्यापन विफलता के कारण अधिष्ठापन रद्द कर दी गई';
$string['packagesvalidatingok'] = 'सत्यापन सफल, अधिष्ठापन जारी रह सकती है';
$string['plugincheckall'] = 'सभी प्लगइन';
$string['plugincheckattention'] = 'ध्यान देने की आवश्यकता वाले प्लगइन';
$string['pluginchecknone'] = 'अब किसी प्लगइन पर आपका ध्यान देने की आवश्यकता नहीं है';
$string['pluginchecknotice'] = 'यह पृष्ठ उन प्लगइन्स को प्रदर्शित करता है जिन पर उन्नयन करना के दौरान आपके ध्यान की आवश्यकता हो सकती है, जैसे कि स्थापित किए जाने वाले नए प्लगइन्स, उन्नत किए जाने वाले प्लगइन्स, लापता प्लगइन्स आदि। यदि उनके लिए कोई अद्यतन उपलब्ध है तो अतिरिक्त प्लगइन्स प्रदर्शित किए जाते हैं। यह अनुशंसा की जाती है कि आप जाँच करें कि क्या प्लगइन्स के हाल के संस्करण उपलब्ध हैं और इस मूडल उन्नयन करना के साथ जारी रखने से पहले उनके उद्गम कोड को अद्यतन।';
$string['plugindisable'] = 'निष्क्रिय करें';
$string['plugindisabled'] = 'निःशक्त';
$string['pluginenable'] = 'सक्षम करें';
$string['pluginenabled'] = 'सक्षम किया गया';
$string['release'] = 'जारी करना';
$string['requiredby'] = 'द्वारा अपेक्षित: {$a}';
$string['requires'] = 'आवश्यकताएँ';
$string['rootdir'] = 'निर्देशिका';
$string['settings'] = 'सेट्टिंग्स';
$string['source'] = 'उद्गम';
$string['sourceext'] = 'अतिरिक्त';
$string['sourcestd'] = 'स्तर';
$string['status'] = 'दर्जा';
$string['status_delete'] = 'हटाया जाना है';
$string['status_downgrade'] = 'उच्च संस्करण पहले से ही स्थापित है!';
$string['status_missing'] = 'डिस्क से गायब!';
$string['status_new'] = 'स्थापित किया जाना है';
$string['status_nodb'] = 'कोई डेटाबेस नहीं';
$string['status_upgrade'] = 'उन्नत किया जाएगा';
$string['status_uptodate'] = 'स्थापित';
$string['supportedconversions'] = 'प्रलेख रूपांतरण समर्थित';
$string['supportedmoodleversions'] = 'समर्थित मॉड्यूल संस्करण';
$string['systemname'] = 'पहचानकर्ता';
$string['type_antivirus'] = 'एंटीवायरस प्लगइन';
$string['type_antivirus_plural'] = 'एंटीवायरस प्लगइन';
$string['type_auth'] = 'प्रमाणीकरण प्रणाली';
$string['type_auth_plural'] = 'ऑथेन्टिकेशन प्लगिन';
$string['type_availability'] = 'उपलब्धता प्रतिबंध';
$string['type_availability_plural'] = 'उपलब्धता प्रतिबंध';
$string['type_block'] = 'ब्लॉक';
$string['type_block_plural'] = 'ब्लॉक';
$string['type_cachelock'] = 'कैश लॉक हैंडलर';
$string['type_cachelock_plural'] = 'कैश लॉक हैंडलर';
$string['type_cachestore'] = 'कैश स्टोर';
$string['type_cachestore_plural'] = 'कैश स्टोर';
$string['type_calendartype'] = 'कैलेंडर का प्रकार';
$string['type_calendartype_plural'] = 'कैलेंडर के प्रकार';
$string['type_communication'] = 'संचार प्रदाता';
$string['type_communication_plural'] = 'संचार प्रदाता';
$string['type_contentbank'] = 'सामग्री बैंक';
$string['type_contentbank_plural'] = 'सामग्री बैंक प्लगइन';
$string['type_contenttype'] = 'सामग्री बैंक';
$string['type_contenttype_plural'] = 'सामग्री बैंक प्लगइन';
$string['type_coursereport'] = 'पाठ्यक्रम प्रतिवेदन';
$string['type_coursereport_plural'] = 'पाठ्यक्रम प्रतिवेदन';
$string['type_customfield'] = 'कस्टम क्षेत्र';
$string['type_customfield_plural'] = 'कस्टम क्षेत्र';
$string['type_dataformat'] = 'डेटा प्रारूप';
$string['type_dataformat_plural'] = 'डेटा प्रारूप';
$string['type_editor'] = 'संपादक';
$string['type_editor_plural'] = 'संपादक';
$string['type_enrol'] = 'नामांकन प्रणाली';
$string['type_enrol_plural'] = 'नामांकन के तरीके';
$string['type_fileconverter'] = 'प्रलेख परिवर्तक';
$string['type_fileconverter_plural'] = 'प्रलेख परिवर्तक';
$string['type_fileconvertermanage'] = 'प्रलेख परिवर्तकों का प्रबंधन करें';
$string['type_filter'] = 'पाठ फ़िल्टर';
$string['type_filter_plural'] = 'पाठ फ़िल्टर';
$string['type_format'] = 'पाठ्यक्रम प्रारूप';
$string['type_format_plural'] = 'कोर्स फ़ॉर्मेट्स';
$string['type_gradeexport'] = 'ग्रेड निर्यात विधि';
$string['type_gradeexport_plural'] = 'ग्रेड निर्यात विधियाँ';
$string['type_gradeimport'] = 'ग्रेड अभिप्राय प्रणाली';
$string['type_gradeimport_plural'] = 'ग्रेड अभिप्राय विधियाँ';
$string['type_gradereport'] = 'ग्रेडबुक प्रतिवेदन';
$string['type_gradereport_plural'] = 'ग्रेडबुक रिपोर्ट';
$string['type_gradingform'] = 'उन्नत श्रेणीकरण प्रणाली';
$string['type_gradingform_plural'] = 'उन्नत श्रेणीकरण विधियाँ';
$string['type_h5plib'] = 'H5P ढांचा';
$string['type_h5plib_plural'] = 'H5P फ्रेमवर्क';
$string['type_local'] = 'स्थानीय प्लगइन';
$string['type_local_plural'] = 'स्थानीय प्लगइन';
$string['type_media'] = 'मीडिया खिलाड़ी';
$string['type_media_plural'] = 'मीडिया खिलाड़ी';
$string['type_message'] = 'अधिसूचना प्लगइन';
$string['type_message_plural'] = 'अधिसूचना प्लगइन';
$string['type_mlbackend'] = 'मशीन लर्निंग बैकएंड';
$string['type_mlbackend_plural'] = 'मशीन लर्निंग बैकएंड्स';
$string['type_mnetservice'] = 'MNet सेवा';
$string['type_mnetservice_plural'] = 'MNet सेवाएँ';
$string['type_mod'] = 'गतिविधि मॉड्यूल';
$string['type_mod_plural'] = 'गतिविधि मॉड्यूल';
$string['type_paygw'] = 'भुगतान गेटवे';
$string['type_paygw_plural'] = 'भुगतान गेटवे';
$string['type_paygwmanage'] = 'भुगतान गेटवे का प्रबंधन करें';
$string['type_plagiarism'] = 'चोरी प्लगइन';
$string['type_plagiarism_plural'] = 'चोरी प्लगइन';
$string['type_portfolio'] = 'पोर्टफोलियो';
$string['type_portfolio_plural'] = 'पोर्टफोलियो';
$string['type_profilefield'] = 'प्रोफ़ाइल क्षेत्र प्रकार';
$string['type_profilefield_plural'] = 'प्रोफ़ाइल क्षेत्र के प्रकार';
$string['type_qbank'] = 'प्रश्न बैंक प्लगइन';
$string['type_qbank_plural'] = 'प्रश्न बैंक प्लगइन';
$string['type_qbehaviour'] = 'प्रश्न व्यवहार';
$string['type_qbehaviour_plural'] = 'प्रश्न व्यवहार';
$string['type_qformat'] = 'प्रश्न आयात/निर्यात प्रारूप';
$string['type_qformat_plural'] = 'प्रश्न आयात/निर्यात प्रारूप';
$string['type_qtype'] = 'प्रश्न का प्रकार';
$string['type_qtype_plural'] = 'प्रश्न का प्रकार';
$string['type_report'] = 'साइट प्रतिवेदन';
$string['type_report_plural'] = 'रिपोर्टें';
$string['type_repository'] = 'भंडार';
$string['type_repository_plural'] = 'भंडार';
$string['type_search'] = 'खोज इंजन';
$string['type_search_plural'] = 'खोज इंजन';
$string['type_theme'] = 'थीम';
$string['type_theme_plural'] = 'थीम्स';
$string['type_tool'] = 'प्रशासक उपकरण';
$string['type_tool_plural'] = 'प्रशासक उपकरण';
$string['type_webservice'] = 'वेबसेवा उपसंधि';
$string['type_webservice_plural'] = 'वेबसेवा प्रोटोकॉल';
$string['uninstall'] = 'अस्थापित करें';
$string['uninstallconfirm'] = 'आप प्लगइन <em>{$a->name}</em> को अनइंस्टॉल करने वाले हैं। इससे डेटाबेस में इस प्लगइन से संबंधित सब कुछ पूरी तरह से डिलीट हो जाएगा, जिसमें इसका कॉन्फ़िगरेशन, लॉग रिकॉर्ड, प्लगइन द्वारा प्रबंधित उपयोगकर्ता फ़ाइलें आदि शामिल हैं। वापस लौटने का कोई तरीका नहीं है और मूडल स्वयं कोई रिकवरी बैकअप नहीं बनाता है। क्या आप वाकई जारी रखना चाहते हैं?';
$string['uninstalldelete'] = 'प्लगइन <em>{$a->name}</em> से संबंधित सभी डेटा डेटाबेस से हटा दिया गया है। प्लगइन को दोबारा इंस्टॉल होने से रोकने के लिए, इसके फ़ोल्डर <em>{$a->rootdir}</em> को आपके सर्वर से मैन्युअल रूप से हटाना होगा। मूडल स्वयं इस फ़ोल्डर को राइट परमिशन न होने के कारण नहीं हटा सकता।';
$string['uninstalldeleteconfirm'] = 'प्लगइन <em> {$a-> name} </em> से जुड़ा सारा डेटा डेटाबेस से हटा दिया गया है। प्लगइन को फिर से स्थापित होने से रोकने के लिए, इसके फोल्डर, चौपन्ना <em> {$a-> rootdir} </em> को आपके सर्वर से हटा दिया जाना चाहिए। क्या आप अब प्लगइन फोल्डर, चौपन्ना को हटाना चाहते हैं?';
$string['uninstalldeleteconfirmexternal'] = 'ऐसा प्रतीत होता है कि प्लगइन का चालू, प्रचलित संस्करण उद्गम कोड प्रबंध तंत्र ({$a}) चेकआउट के माध्यम से प्राप्त है। यदि आप प्लगइन फोल्डर, चौपन्ना को हटा देते हैं, तो आप कोड के महत्त्वपूर्ण स्थानीय संशोधनों को खो सकते हैं। कृपया सुनिश्चित करना कि आप जारी रखने से पहले निश्चित रूप से प्लगइन फोल्डर, चौपन्ना को हटाना चाहते हैं।';
$string['uninstallextraconfirmblock'] = 'इस ब्लॉक के {$a-> instances} उदाहरण हैं।';
$string['uninstallextraconfirmenrol'] = '{$a-> enrolments} उपयोगकर्ता नामांकन हैं।';
$string['uninstallextraconfirmmod'] = '{$a->courses} पाठ्यक्रमों में इस मॉड्यूल के {$a->instances} इंस्टेंस मौजूद हैं।';
$string['uninstalling'] = '{$a->name} को अनइंस्टॉल किया जा रहा है';
$string['updateavailable'] = 'एक नया संस्करण {$a} उपलब्ध है!';
$string['updateavailable_moreinfo'] = 'अधिक जानकारी...';
$string['updateavailable_release'] = '{$a} जारी करें';
$string['updatepluginconfirm'] = 'प्लगइन अद्यतन पुष्टि करना';
$string['updatepluginconfirmexternal'] = 'ऐसा प्रतीत होता है कि प्लगइन का चालू, प्रचलित संस्करण उद्गम कोड प्रबंध तंत्र ({$a}) चेकआउट के माध्यम से प्राप्त है। यदि आप इस अद्यतन को स्थापित करते हैं, तो आप उद्गम कोड प्रबंध तंत्र से प्लगइन अद्यतन प्राप्त करना में सक्षम नहीं होंगे। कृपया सुनिश्चित करना कि आप जारी रखने से पहले निश्चित रूप से प्लगइन को अद्यतन चाहते हैं।';
$string['updatepluginconfirminfo'] = 'आप प्लगइन <strong>{$a->name}</strong> का नया संस्करण इंस्टॉल करने वाले हैं। प्लगइन के संस्करण {$a->version} वाला एक ज़िप पैकेज <a href="{$a->url}">{$a->url}</a> से डाउनलोड किया जाएगा और आपके मूडल इंस्टॉलेशन में एक्सट्रैक्ट किया जाएगा ताकि आपका इंस्टॉलेशन अपग्रेड हो सके।';
$string['updatepluginconfirmwarning'] = 'कृपअथवा ध्अथवान दें कि अपग्रेड से पहले मूडल स्वचालित रूप से आपके डेटाबेस का बैकअप नहीं लेगा। हम दृढ़ता से अनुशंसा करते हैं कि आप अब एक पूर्ण स्नैपशॉट बैकअप बनाएं, इस दुर्लभ मामले से निपटने के लिए कि नए दृष्टव्‍य में ऐसे बग हैं जो आपकी साइट को अनुपलब्ध बनाते हैं अथवा यहां तक कि आपके डेटाबेस को भी भ्रष्ट करते हैं। अपने जोखिम पर आगे बढ़ें।';
$string['validationmsg_componentmatch'] = 'पूर्ण अवयव नाम';
$string['validationmsg_componentmismatchname'] = 'प्लगइन नाम बेमेल';
$string['validationmsg_componentmismatchname_help'] = 'कुछ ZIP पैकेज, जैसे कि गिथब द्वारा उत्पन्न पैकेज में एक गलत रूट निर्देशिका नाम हो सकता है। घोषित प्लगइन नाम से मेल खाने के लिए आपको रूट निर्देशिका का नाम निश्चित करना की आवश्यकता है।';
$string['validationmsg_componentmismatchname_info'] = 'प्लगइन घोषणा करता है कि इसका नाम \'{$a}\' है लेकिन यह रूट निर्देशिका के नाम से मेल नहीं खाता है।';
$string['validationmsg_componentmismatchtype'] = 'प्लगइन प्रकार बेमेल';
$string['validationmsg_componentmismatchtype_info'] = 'अपेक्षित प्रकार \'{$a->expected}\' है, लेकिन प्लगइन ने अपना प्रकार \'{$a->found}\' घोषित किया है।';
$string['validationmsg_filenotexists'] = 'निकाली गई दाखिल करना नहीं मिली';
$string['validationmsg_filesnumber'] = 'पैकेज में पर्याप्त फाइलें नहीं मिलीं';
$string['validationmsg_filestatus'] = 'सभी फाइलों को सार असमर्थ';
$string['validationmsg_foundlangfile'] = 'पाया गया भाषा दाखिल करना';
$string['validationmsg_maturity'] = 'घोषित परिपक्वता स्तर';
$string['validationmsg_maturity_help'] = 'प्लगइन अपने परिपक्वता स्तर की घोषणा कर सकता है। यदि रखरखावकर्ता प्लगइन को स्थिर मानता है, तो घोषित परिपक्वता स्तर परिपक्वता स्थिर पढ़ेगा। अन्य सभी परिपक्वता स्तरों (जैसे अल्फा अथवा बीटा) को अस्थिर माना जाना चाहिए और एक चेतावनी दी जानी चाहिए।';
$string['validationmsg_missingcomponent'] = 'प्लगइन अपने अवयव नाम की घोषणा नहीं करता है';
$string['validationmsg_missingcomponent_help'] = 'सभी प्लगइन्स को version.php दाखिल करना में \'$प्लगइन-> अवयव\' घोषणा के माध्यम से अपना पूरा अवयव नाम प्रदान करना चाहिए।';
$string['validationmsg_missingcomponent_link'] = 'Development:version.php';
$string['validationmsg_missingexpectedlangenfile'] = 'अंग्रेजी भाषा दाखिल करना नाम बेमेल';
$string['validationmsg_missingexpectedlangenfile_info'] = 'दिए गए प्लगइन प्रकार में अपेक्षित अंग्रेजी भाषा की दाखिल करना {$a} नहीं है।';
$string['validationmsg_missinglangenfile'] = 'कोई अंग्रेजी भाषा की दाखिल करना नहीं मिली';
$string['validationmsg_missinglangenfolder'] = 'लापता अंग्रेजी भाषा फोल्डर, चौपन्ना';
$string['validationmsg_missingversion'] = 'प्लगइन अपने संस्करण की घोषणा नहीं करता है';
$string['validationmsg_missingversionphp'] = 'दाखिल करना version.php नहीं मिली';
$string['validationmsg_multiplelangenfiles'] = 'कई अंग्रेजी भाषा की फाइलें मिलीं';
$string['validationmsg_onedir'] = 'ZIP पैकेज की अमान्य संरचना।';
$string['validationmsg_onedir_help'] = 'ZIP पैकेज में केवल एक रूट निर्देशिका होनी चाहिए जिसमें प्लगइन कोड हो। उस रूट निर्देशिका का नाम प्लगइन के नाम से मेल खाना चाहिए।';
$string['validationmsg_pathwritable'] = 'अभिगम जाँच लिखें';
$string['validationmsg_pluginversion'] = 'प्लगइन संस्करण';
$string['validationmsg_pluginversiontoolow'] = 'इस प्लगइन का एक उच्चतर संस्करण पहले से ही स्थापित है';
$string['validationmsg_release'] = 'प्लगइन रिलीज़';
$string['validationmsg_requiresmoodle'] = 'अपेक्षित मॉड्यूल संस्करण';
$string['validationmsg_rootdir'] = 'स्थापित किए जाने वाले प्लगइन का नाम';
$string['validationmsg_rootdir_help'] = 'ZIP पैकेज में रूट निर्देशिका का नाम स्थापित किए जाने वाले प्लगइन का नाम बनाता है। यदि नाम सही नहीं है, तो आप प्लगइन स्थापित करने से पहले ZIP में रूट निर्देशिका का नाम बदलना चाह सकते हैं।';
$string['validationmsg_rootdirinvalid'] = 'अमान्य प्लगइन नाम';
$string['validationmsg_rootdirinvalid_help'] = 'ZIP पैकेज में रूट निर्देशिका का नाम औपचारिक वाक्यविन्यास आवश्यकताओं का उल्लंघन करता है। कुछ ZIP पैकेज, जैसे कि गिथब द्वारा उत्पन्न पैकेज, में एक गलत रूट निर्देशिका नाम हो सकता है। प्लगइन नाम से मेल खाने के लिए आपको रूट निर्देशिका का नाम ठीक करना होगा।';
$string['validationmsg_targetexists'] = 'लक्ष्य स्थान पहले से मौजूद है और इसे हटा दिया जाएगा।';
$string['validationmsg_targetexists_help'] = 'प्लगइन निर्देशिका पहले से मौजूद है और इसे प्लगइन पैकेज सामग्री द्वारा प्रतिस्थापित किया जाएगा।';
$string['validationmsg_targetnotdir'] = 'एक दाखिल करना द्वारा कब्जा किया गया लक्ष्य स्थान';
$string['validationmsg_unknowntype'] = 'अज्ञात प्लगइन प्रकार';
$string['validationmsg_versionphpsyntax'] = 'version.php दाखिल करना में असमर्थित वाक्यविन्यास का पता चला';
$string['validationmsglevel_debug'] = 'डीबग';
$string['validationmsglevel_error'] = 'त्रुटि';
$string['validationmsglevel_info'] = 'ठीक है';
$string['validationmsglevel_warning'] = 'चेतावनी';
$string['version'] = 'संस्करण';
$string['versiondb'] = 'प्रचलित संस्करण';
$string['versiondisk'] = 'नया संस्करण';
