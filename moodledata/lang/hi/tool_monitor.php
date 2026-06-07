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
 * Strings for component 'tool_monitor', language 'hi', version '4.4'.
 *
 * @package     tool_monitor
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = 'एक नया नियम जोड़ें';
$string['allevents'] = 'सभी गतिविधियाँ';
$string['allmodules'] = 'सभी उदाहरण';
$string['area'] = 'क्षेत्र';
$string['areatomonitor'] = 'निगरानी के लिए क्षेत्र';
$string['cachedef_eventsubscriptions'] = 'यह वैयक्तिक, व्यक्तिगत, व्यक्ति, व्यष्टि पाठ्यक्रमों के लिए कार्यक्रम सदस्यता की सूची को संग्रहीत करता है।';
$string['contactadmin'] = 'इसे सक्षम करने के लिए अपने प्रशासक से संपर्क करें।';
$string['core'] = 'कोर';
$string['coresubsystem'] = 'उपप्रणाली ({$a})';
$string['currentsubscriptions'] = 'आपकी चालू, प्रचलित सदस्यताएँ';
$string['defaultmessagetemplate'] = 'नियम का नाम: {rulename}<br />विवरण: {description}<br />घटना का नाम: {eventname}';
$string['deleterule'] = 'नियम निकाल देना';
$string['deletesubscription'] = 'सदस्यता निकाल देना';
$string['description'] = 'विवरणः';
$string['disablefieldswarning'] = 'कुछ क्षेत्रों को संपादित नहीं किया जा सकता है क्योंकि इस नियम की पहले से ही सदस्यता है।';
$string['duplicaterule'] = 'डुप्लिकेट नियम';
$string['editrule'] = 'नियम संपादित करें';
$string['enablehelp'] = 'घटना, कार्यक्रम निगरानी को सक्षम/अक्षम करें';
$string['enablehelp_help'] = 'नियमों को बनाने और उनकी सदस्यता लेने से पहले घटना, कार्यक्रम निगरानी को सक्षम किया जाना चाहिए। ध्यान दें कि घटना, कार्यक्रम निगरानी को सक्षम करने से आपकी साइट का पालन प्रभावित हो सकता है।';
$string['errorincorrectevent'] = 'कृपया चयनित प्लगइन से संबंधित एक घटना, कार्यक्रम का चयन करें';
$string['event'] = 'घटना';
$string['eventnotfound'] = 'घटना, कार्यक्रम नहीं मिली';
$string['eventrulecreated'] = 'बनाया गया नियम';
$string['eventruledeleted'] = 'नियम हटा दिया गया';
$string['eventruleupdated'] = 'नियम अद्यतन किया गया';
$string['eventsubcreated'] = 'सदस्यता बनाई गई';
$string['eventsubcriteriamet'] = 'सदस्यता मानदंड पूरे किए गए';
$string['eventsubdeleted'] = 'सदस्यता हटाई गई';
$string['frequency'] = 'अधिसूचना सीमा';
$string['frequency_help'] = 'अधिसूचना सन्देश, सूचना भेजने के लिए एक निर्दिष्ट समयावधि के भीतर घटनाओं की संख्या अपेक्षित है।';
$string['inminutes'] = 'कार्यवृत्तों में';
$string['invalidmodule'] = 'अमान्य मॉड्यूल';
$string['manage'] = 'प्रबंधित करें';
$string['managerules'] = 'घटना, कार्यक्रम निगरानी नियम';
$string['manageruleslink'] = 'आप {$a} पृष्ठ से नियमों का प्रबंधन कर सकते हैं।';
$string['managesubscriptions'] = 'घटना, कार्यक्रम की निगरानी';
$string['managesubscriptionslink'] = 'आप {$a} पृष्ठ से नियमों की सदस्यता ले सकते हैं।';
$string['messageprovider:notification'] = 'नियम सदस्यता की अधिसूचनाएँ';
$string['messagetemplate'] = 'अधिसूचना सन्देश, सूचना';
$string['messagetemplate_help'] = 'अधिसूचना सीमा तक पहुँचने के बाद ग्राहकों को एक अधिसूचना सन्देश, सूचना भेजा जाता है। इसमें निम्नलिखित में से कोई भी अथवा सभी प्लेसहोल्डर सम्मिलित करना हो सकते हैं: * कार्यक्रम के स्थान से लिंक करें * निगरानी किए गए क्षेत्र से लिंक करें * क्रम मॉड्यूल का नाम * नियम का नाम * नियम का नाम * विवरण * घटना, कार्यक्रम, कार्यक्रम का नाम * क्रम का पूरा नाम * क्रम का छोटा नाम';
$string['messagetemplate_link'] = 'admin/tool/monitor/managerules';
$string['moduleinstance'] = 'उदाहरण';
$string['monitor:managerules'] = 'कार्यक्रम निगरानी नियमों का प्रबंधन करें';
$string['monitor:managetool'] = 'घटना, कार्यक्रम निगरानी को सक्षम/अक्षम करें';
$string['monitor:subscribe'] = 'कार्यक्रम निगरानी नियमों की सदस्यता लें';
$string['monitordisabled'] = 'घटना, कार्यक्रम की निगरानी वर्तमान में अक्षम है।';
$string['monitorenabled'] = 'वर्तमान में घटना, कार्यक्रम की निगरानी सक्षम है।';
$string['norules'] = 'कोई घटना, कार्यक्रम निगरानी नियम नहीं हैं।';
$string['pluginname'] = 'घटना, कार्यक्रम पर्यवेक्षक';
$string['privacy:createdrules'] = 'मैंने घटना, कार्यक्रम निगरानी नियम बनाए';
$string['privacy:metadata:description'] = 'नियम का विवरण';
$string['privacy:metadata:eventname'] = 'कार्यक्रम का पूरी तरह से योग्य नाम';
$string['privacy:metadata:frequency'] = 'अधिसूचनाओं की आवृत्ति';
$string['privacy:metadata:historysummary'] = 'भेजी गई सन्देश, सूचना अधिसूचनाओं का इतिहास संग्रहीत करता है';
$string['privacy:metadata:inactivedate'] = 'समय की अवधि, दिनों में, जिसके बाद एक निष्क्रिय सदस्यता पूरी तरह से हटा दी जाएगी';
$string['privacy:metadata:lastnotificationsent'] = 'जब इस सदस्यता के लिए आखिरी बार अधिसूचना भेजी गई थी।';
$string['privacy:metadata:messagesummary'] = 'सन्देश, सूचना तंत्र को सूचनाएँ भेजी जाती हैं।';
$string['privacy:metadata:name'] = 'नियम का नाम';
$string['privacy:metadata:plugin'] = 'प्लगइन का स्पष्ट नाम';
$string['privacy:metadata:rulessummary'] = 'यह स्टोर निगरानी नियमों का पालन करता है।';
$string['privacy:metadata:subscriptionssummary'] = 'विविध, विभिन्न नियमों के लिए उपयोगकर्ता सदस्यता स्टोर करता है';
$string['privacy:metadata:template'] = 'सन्देश, सूचना टेम्प';
$string['privacy:metadata:timecreatedrule'] = 'जब यह नियम बनाया गया था';
$string['privacy:metadata:timecreatedsub'] = 'जब यह सदस्यता बनाई गई थी';
$string['privacy:metadata:timemodifiedrule'] = 'जब इस नियम को आखिरी बार संशोधित किया गया था';
$string['privacy:metadata:timesent'] = 'जब सन्देश, सूचना भेजा गया था';
$string['privacy:metadata:timewindow'] = 'सेकंड में समय खिड़की';
$string['privacy:metadata:userid'] = 'नियम बनाने वाले उपयोगकर्ता की आईडी।';
$string['privacy:metadata:useridhistory'] = 'जिस उपयोगकर्ता को यह सूचना भेजी गई थी, उसकी आईडी';
$string['privacy:metadata:useridsub'] = 'ग्राहक की पहचान।';
$string['privacy:subscriptions'] = 'मेरे कार्यक्रम सदस्यता की निगरानी करता है';
$string['processevents'] = 'प्रक्रम गतिविधियाँ';
$string['ruleareyousure'] = 'क्या आप सुनिश्चित हैं कि आप "{$a}" नियम को हटाना चाहते हैं?';
$string['ruleareyousureextra'] = 'इस नियम के लिए {$a} सदस्यता (s) हैं जिन्हें भी हटा दिया जाएगा।';
$string['rulecopysuccess'] = 'नियम को सफलतापूर्वक दोहराया गया';
$string['ruledeletesuccess'] = 'नियम को सफलतापूर्वक हटा दिया गया';
$string['rulehelp'] = 'नियम ब्योरा';
$string['rulehelp_help'] = 'यह नियम तब सुनता है जब \'{$a->eventcomponent}\' में \'{$a->eventname}\' इवेंट {$a->frequency} बार {$a->minutes} मिनट में ट्रिगर होता है।';
$string['rulename'] = 'नियम का नाम';
$string['rulenopermission'] = 'आपके पास किसी भी कार्यक्रम की सदस्यता लेने की अनुमति नहीं है।';
$string['rulenopermissions'] = 'आपके पास "{$a} a नियम" के लिए अनुमति नहीं है';
$string['rulescansubscribe'] = 'नियम जिनकी आप सदस्यता ले सकते हैं';
$string['selectacourse'] = 'एक क्रम चयन करना';
$string['selectcourse'] = 'संभावित मॉड्यूल की सूची प्राप्त करने के लिए क्रम स्तर पर इस प्रतिवेदन पर जाएँ';
$string['subareyousure'] = 'क्या आप सुनिश्चित हैं कि आप "{$a}" नियम की सदस्यता को हटाना चाहते हैं?';
$string['subcreatesuccess'] = 'सदस्यता सफलतापूर्वक बनाई गई';
$string['subdeletesuccess'] = 'सदस्यता सफलतापूर्वक हटाई गई';
$string['subhelp'] = 'सदस्यता ब्योरा';
$string['subhelp_help'] = 'यह सदस्यता तब तक सुनती है जब तक कि \'{$a->moduleinstance}\' {$a->frequency} बार {$a->minutes} मिनट में \'{$a->eventname}\' घटना ट्रिगर नहीं हो जाती।';
$string['subscribeto'] = 'नियम "{$a}" की सदस्यता लें';
$string['taskchecksubscriptions'] = 'अमान्य नियम सदस्यताओं को सक्रिय/निष्क्रिय करें';
$string['taskcleanevents'] = 'सफाई कार्यक्रम निगरानी कार्यक्रम';
$string['unsubscribe'] = 'सदस्यता रद्द करें';
