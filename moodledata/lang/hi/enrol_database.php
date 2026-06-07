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
 * Strings for component 'enrol_database', language 'hi', version '4.4'.
 *
 * @package     enrol_database
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database:config'] = 'डेटाबेस नामांकन उदाहरणों को कॉन्फ़िगर करें';
$string['database:unenrol'] = 'अनइनरोल निलंबित उपयोगकर्ता';
$string['dbencoding'] = 'डेटाबेस एन्कोडिंग';
$string['dbhost'] = 'डेटाबेस मेजबान';
$string['dbhost_desc'] = 'डेटाबेस सर्वर का IP  पता या होस्ट नाम टाइप करें। ODBC का उपयोग करते समय सिस्टम DSN नाम का उपयोग करें। PDO का उपयोग करते समय PDO DSN का उपयोग करें।';
$string['dbname'] = 'डेटाबेस का नाम';
$string['dbname_desc'] = 'यदि डेटाबेस होस्ट में DSN  नाम का उपयोग किया जाता है तो खाली छुट्टी की दरखास्त';
$string['dbpass'] = 'डेटाबेस पासवर्ड';
$string['dbsetupsql'] = 'डेटाबेस व्यवस्था, ढांचा कमांड';
$string['dbsetupsql_desc'] = 'विशेष डेटाबेस सेटअप के लिए SQL कमांड, जिसका उपयोग अक्सर संचार एन्कोडिंग सेट करने के लिए किया जाता है - MySQL और PostgreSQL के लिए उदाहरण: <em>SET NAMES \'utf8\'</em>';
$string['dbsybasequoting'] = 'Sybase उद्धरण चिह्नों का उपयोग करें';
$string['dbsybasequoting_desc'] = 'Sybase शैली में सिंगल कोट एस्केपिंग - Oracle, MS SQL और कुछ अन्य डेटाबेस के लिए आवश्यक है। MySQL के लिए इसका उपयोग न करें!';
$string['dbtype'] = 'डेटाबेस ड्राइवर';
$string['dbtype_desc'] = 'ADOdb डेटाबेस ड्राइवर का नाम, बाह्य डेटाबेस इंजन का प्रकार।';
$string['dbuser'] = 'डेटाबेस उपयोगकर्ता';
$string['debugdb'] = 'डीबग ADOdb';
$string['debugdb_desc'] = 'बाह्य डेटाबेस से ADOdb कनेक्शन को डीबग करें - लॉगिन के दौरान खाली पेज मिलने पर इसका उपयोग करें। उत्पादन साइटों के लिए उपयुक्त नहीं!';
$string['defaultcategory'] = 'चूक नई क्रम श्रेणी';
$string['defaultcategory_desc'] = 'स्वचालित रूप से बनाए गए पाठ्यक्रमों के लिए चूकना श्रेणी। उपयोग किअथवा जाता है जब कोई नई श्रेणी आईडी निर्दिष्ट अथवा नहीं पाई जाती है।';
$string['defaultrole'] = 'चूक भूमिका';
$string['defaultrole_desc'] = 'यदि बाहरी तालिका में कोई अन्य भूमिका सौंपा गया नहीं की गई है तो भूमिका चूकना रूप से सौंपी जाएगी।';
$string['ignorehiddencourses'] = 'छिपे हुए पाठ्यक्रमों को नजरअंदाज करें';
$string['ignorehiddencourses_desc'] = 'यदि सक्षम उपयोगकर्ता उन पाठ्यक्रमों में नामांकित नहीं होंगे जो छात्रों के लिए अनुपलब्ध होने वाले हैं।';
$string['localcategoryfield'] = 'स्थानीय श्रेणी क्षेत्र';
$string['localcoursefield'] = 'स्थानीय क्रम क्षेत्र';
$string['localrolefield'] = 'स्थानीय भूमिका क्षेत्र';
$string['localuserfield'] = 'स्थानीय उपयोगकर्ता क्षेत्र';
$string['newcoursecategory'] = 'नया क्रम श्रेणी क्षेत्र';
$string['newcoursefullname'] = 'नया क्रम पूरा नाम क्षेत्र';
$string['newcourseidnumber'] = 'नया क्रम ID संख्या क्षेत्र';
$string['newcourseshortname'] = 'नया क्रम संक्षिप्त नाम क्षेत्र';
$string['newcoursetable'] = 'दूरस्थ नए पाठ्यक्रमों की तालिका';
$string['newcoursetable_desc'] = 'उस तालिका का नाम विनिर्देश करना जिसमें उन पाठ्यक्रमों की सूची है जिन्हें स्वचालित रूप से बनाया जाना चाहिए। खाली होने का मतलब है कि कोई पाठ्यक्रम नहीं बनाया जाता है।';
$string['pluginname'] = 'बाहरी डेटाबेस';
$string['pluginname_desc'] = 'आप अपने नामांकन को नियंत्रित करने के लिए एक बाहरी डेटाबेस (लगभग किसी भी प्रकार का) का उपयोग कर सकते हैं। यह माना जाता है कि आपके बाहरी डेटाबेस में कम से कम एक कोर्स आईडी वाला क्षेत्र और एक उपयोगकर्ता ID वाला क्षेत्र होता है। इनकी तुलना उन क्षेत्रों से की जाती है जिन्हें आप स्थानीय क्रम और उपयोगकर्ता तालिकाओं में चुनते हैं।';
$string['privacy:metadata'] = 'बाहरी डेटाबेस नामांकन प्लगइन किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करता है।';
$string['remotecoursefield'] = 'दूरस्थ क्रम क्षेत्र';
$string['remotecoursefield_desc'] = 'रिमोट टेबल में क्षेत्र का नाम जिसका उपयोग हम क्रम तालिका में प्रविष्टियों से मेल खाने के लिए कर रहे हैं।';
$string['remoteenroltable'] = 'दूरस्थ उपयोगकर्ता नामांकन तालिका';
$string['remoteenroltable_desc'] = 'उस तालिका का नाम विनिर्देश करना जिसमें उपयोगकर्ता नामांकन की सूची है। खाली होने का मतलब है कि कोई उपयोगकर्ता नामांकन सिंक नहीं है।';
$string['remoteotheruserfield'] = 'दूरस्थ अन्य उपयोगकर्ता क्षेत्र';
$string['remoteotheruserfield_desc'] = 'रिमोट टेबल में क्षेत्र का नाम जिसका उपयोग हम "अन्य उपयोगकर्ता" भूमिका असाइनमेंट को चिह्नित करने के लिए कर रहे हैं।';
$string['remoterolefield'] = 'दूरस्थ भूमिका क्षेत्र';
$string['remoterolefield_desc'] = 'रिमोट टेबल में क्षेत्र का नाम जिसका उपयोग हम भूमिका तालिका में प्रविष्टियों से मेल खाने के लिए कर रहे हैं।';
$string['remoteuserfield'] = 'दूरस्थ उपयोगकर्ता क्षेत्र';
$string['remoteuserfield_desc'] = 'रिमोट टेबल में क्षेत्र का नाम जिसका उपयोग हम उपयोगकर्ता तालिका में प्रविष्टियों से मेल खाने के लिए कर रहे हैं।';
$string['settingsheaderdb'] = 'बाहरी डेटाबेस संयोजन';
$string['settingsheaderlocal'] = 'स्थानीय क्षेत्र मानचित्रण';
$string['settingsheadernewcourses'] = 'नए पाठ्यक्रमों का निर्माण';
$string['settingsheaderremote'] = 'रिमोट एनरोलमेंट सिंक';
$string['syncenrolmentstask'] = 'बाहरी डेटाबेस नामांकन कार्य को साथ-साथ होना/घटना करें';
$string['templatecourse'] = 'नया क्रम';
$string['templatecourse_desc'] = 'वैकल्पिक: स्वचालित रूप से बनाए गए क्रम अस्थायी क्रम से अपनी सेटिंग्स को कॉपी कर सकते हैं। यहाँ अस्थायी क्रम का संक्षिप्त नाम टाइप करें।';
