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
 * Strings for component 'auth_db', language 'hi', version '4.4'.
 *
 * @package     auth_db
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcannotconnect'] = 'बाहरी डेटाबेस से जुड़ नहीं सकता है।';
$string['auth_dbcannotreadtable'] = 'बाहरी तालिका नहीं पढ़ सकते।';
$string['auth_dbcantconnect'] = 'निर्दिष्ट प्रमाणीकरण डेटाबेस से जुड़ नहीं सका...';
$string['auth_dbchangepasswordurl_key'] = 'पासवर्ड बदलने का URL';
$string['auth_dbcolumnlist'] = 'बाहरी तालिका में निम्नलिखित स्तंभ हैंः <b/> {$a}';
$string['auth_dbdebugauthdb'] = 'डीबग ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'बाहरी डेटाबेस से ADOdb संयोजन को डीबग करें-लॉगिन के दौरान खाली पृष्ठ प्राप्त करते समय उपयोग करें। उत्पादन स्थलों के लिए उपयुक्त नहीं है।';
$string['auth_dbdeleteuser'] = 'हटाए गए उपयोगकर्ता {$a->name} id {$a->id}';
$string['auth_dbdeleteusererror'] = 'उपयोगकर्ता {$a} को हटाने में त्रुटि';
$string['auth_dbdescription'] = 'यह प्रणाली एक बाहरी डेटाबेस टेबल का उपयोग करती है ताकि यह जांचा जा सके कि दिया गया उपयोगकर्ता नाम और पासवर्ड मान्य है या नहीं। यदि खाता नया है, तो अन्य क्षेत्रों की जानकारी को भी मॉड्यूल में कॉपी किया जा सकता है।';
$string['auth_dbextencoding'] = 'बाहरी db एन्कोडिंग';
$string['auth_dbextencodinghelp'] = 'बाहरी डेटाबेस में उपयोग की जाने वाली एन्कोडिंग';
$string['auth_dbextrafields'] = 'ये क्षेत्र वैकल्पिक हैं। आप कुछ मॉड्यूल उपयोगकर्ता क्षेत्रों को <b> बाहरी डेटाबेस क्षेत्रों </b> से जानकारी के साथ पहले से भरने का विकल्प चुन सकते हैं जिसे आप यहां विनिर्देश करना हैं। <p> यदि आप इन्हें खाली छोड़ देते हैं, तो डिफ़ॉल्ट का उपयोग किया जाएगा। </p> <p> दोनों ही मामलों में, उपयोगकर्ता लॉग इन करने के बाद इन सभी क्षेत्रों को संपादित करने में सक्षम होगा।';
$string['auth_dbfieldpass'] = 'पासवर्ड वाले क्षेत्र का नाम';
$string['auth_dbfieldpass_key'] = 'पासवर्ड क्षेत्र';
$string['auth_dbfielduser'] = 'उपयोगकर्ता नाम वाले क्षेत्र का नाम। यह क्षेत्र एक वर्चर डेटा प्रकार का होना चाहिए।';
$string['auth_dbfielduser_key'] = 'उपयोगकर्ता नाम क्षेत्र';
$string['auth_dbhost'] = 'डेटाबेस सर्वर को होस्ट करने वाला कंप्यूटर । ODBC का उपयोग करते समय सिस्टम DSN  प्रविष्टि का उपयोग करें। PDO का उपयोग करते समय PDO DSN  प्रविष्टि का उपयोग करें।';
$string['auth_dbhost_key'] = 'मेजबान';
$string['auth_dbinsertuser'] = 'घुसा हुआ उपयोगकर्ता  {$a->name} id {$a->id}';
$string['auth_dbinsertuserduplicate'] = 'उपयोगकर्ता {$a-> username} डालने में त्रुटि-इस उपयोगकर्ता नाम के साथ उपयोगकर्ता पहले से ही \'{$a-> auth}\' प्लगइन की वजह से, के बाहर, में से, से होकर, के द्वारा बनाया गया था।';
$string['auth_dbinsertusererror'] = 'उपयोगकर्ता {$a} डालने में त्रुटि';
$string['auth_dbname'] = 'डेटाबेस का नाम। यदि आप ODBC DSN का उपयोग कर रहे हैं तो इसे खाली छोड़ दें। यदि आपके PDO DSN में पहले से ही डेटाबेस का नाम शामिल है तो इसे खाली छोड़ दें।';
$string['auth_dbname_key'] = 'DB नाम';
$string['auth_dbnoexttable'] = 'बाहरी तालिका निर्दिष्ट नहीं है।';
$string['auth_dbnouserfield'] = 'बाहरी उपयोगकर्ता क्षेत्र निर्दिष्ट नहीं है।';
$string['auth_dbpass'] = 'उपरोक्त उपयोगकर्ता नाम से मेल खाने वाला कूटशब्द';
$string['auth_dbpass_key'] = 'कूटशब्द';
$string['auth_dbpasstype'] = '<p> उस प्रारूप को निर्दिष्ट करें जिसका पासवर्ड क्षेत्र उपयोग कर रहा है। </p> <p> \'आंतरिक\' का उपयोग करें यदि आप चाहते हैं कि बाहरी डेटाबेस उपयोगकर्ता नाम और ईमेल पते का प्रबंधन करे, लेकिन पासवर्ड का प्रबंधन करने के लिए मूडल। यदि आप \'आंतरिक\' का उपयोग करते हैं, तो आपको बाहरी डेटाबेस में एक आबादी वाला ईमेल सम्बोधन क्षेत्र प्रदान करना होगा, और आपको \\auth_db\\task\\sync_users छत्तीसगढ़ में आदिवासी क्षेत्र कार्य को सक्षम करना होगा। मूडल नए उपयोगकर्ताओं को एक अस्थायी पासवर्ड के साथ एक ईमेल भेजेगा।';
$string['auth_dbpasstype_key'] = 'पासवर्ड प्रारूप';
$string['auth_dbreviveduser'] = 'पुनर्जीवित उपयोगकर्ता {$a->name} id {$a->id}';
$string['auth_dbrevivedusererror'] = 'त्रुटि पुनर्जीवित करने वाले उपयोगकर्ता {$a}';
$string['auth_dbsaltedcrypt'] = 'क्रिप्ट एकतरफा स्ट्रिंग हैशिंग';
$string['auth_dbsetupsql'] = 'SQL व्यवस्था कमांड';
$string['auth_dbsetupsqlhelp'] = 'विशेष डेटाबेस व्यवस्था, ढांचा के लिए SQL कमांड, जिसका उपयोग अक्सर संचार एन्कोडिंग स्थापित करने के लिए किया जाता है-उदाहरण के लिए MySQL और PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'निलंबित उपयोगकर्ता {$a->name} id {$a->id}';
$string['auth_dbsuspendusererror'] = 'उपयोगकर्ता {$a} को निलंबित करने में त्रुटि';
$string['auth_dbsybasequoting'] = 'साइबेस उद्धरणों का उपयोग करें';
$string['auth_dbsybasequotinghelp'] = 'Sybase शैली एकल उद्धृत करना बचने-Oracle, MS SQL  और कुछ अन्य डेटाबेस के लिए आवश्यक। MySQL के लिए उपयोग न करें!';
$string['auth_dbsyncuserstask'] = 'साथ-साथ होना/घटना उपयोगकर्ता कार्य';
$string['auth_dbtable'] = 'डेटाबेस में तालिका का नाम';
$string['auth_dbtable_key'] = 'टेबल';
$string['auth_dbtableempty'] = 'बाहरी मेज खाली है।';
$string['auth_dbtype'] = 'डेटाबेस प्रकार <a href="http://adodb.org/dokuwiki/doku.php" target="_blank">ADOdb - Database Abstraction Layer for PHP</a> ।';
$string['auth_dbtype_key'] = 'डेटाबेस';
$string['auth_dbupdateerror'] = 'बाहरी डेटाबेस को अद्यतन करने में त्रुटि।';
$string['auth_dbupdateusers'] = 'उपयोगकर्ताओं को अद्यतन';
$string['auth_dbupdateusers_description'] = 'नए उपयोगकर्ताओं को डालने के साथ-साथ मौजूदा उपयोगकर्ताओं को अपडेट करें।';
$string['auth_dbupdatinguser'] = 'उपयोगकर्ता {$a->name} id {$a->id} को अद्यतन करना';
$string['auth_dbuser'] = 'डेटाबेस तक पहुँच के साथ उपयोगकर्ता नाम';
$string['auth_dbuser_key'] = 'DB उपयोगकर्ता';
$string['auth_dbuserstoadd'] = 'जोड़ने के लिए उपयोगकर्ता प्रविष्टियाँः {$a}';
$string['auth_dbuserstoremove'] = 'हटाने के लिए उपयोगकर्ता प्रविष्टियाँः {$a}';
$string['pluginname'] = 'बाहरी डेटाबेस का प्रयोग करें';
$string['privacy:metadata'] = 'बाहरी डेटाबेस प्रमाणीकरण प्लगइन किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करता है।';
