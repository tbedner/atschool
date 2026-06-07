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
 * Strings for component 'cachestore_redis', language 'hi', version '4.4'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ca_file'] = 'सीए दाखिल करना पथ';
$string['ca_file_help'] = 'स्थानीय दाखिल करना प्रणाली पर प्रमाणपत्र दाखिल करना का स्थान';
$string['clustermode'] = 'क्लस्टर प्रकार';
$string['clustermode_help'] = 'क्लस्टर प्रकार, विधा को सक्षम करने से मूल क्लस्टर फ़ंक्शन चल जाएगा, जिससे आपका सर्वर एक ही समय, एक साथ एक ही समय, एक साथ होने वाला अनुरोधों को संभालने के लिए कई सर्वरों की सेवा कर सकेगा।';
$string['clustermodeunavailable'] = 'रेडीज क्लस्टर वर्तमान में अनुपलब्ध है। कृपया सुनिश्चित करना कि PHP  रेडीज विस्तार रेडीज क्लस्टर कार्यक्षमता का समर्थन करता है।';
$string['compressor_none'] = 'कोई संपीड़न नहीं।';
$string['compressor_php_gzip'] = 'जीज़िप संपीड़न का उपयोग करें।';
$string['compressor_php_zstd'] = 'z मानक संपीड़न का उपयोग करें।';
$string['connectiontimeout'] = 'संयोजन टाइमआउट';
$string['connectiontimeout_help'] = 'यह रेडिस सर्वर से जुड़ने का प्रयास करते समय समय सीमा निर्धारित करता है।';
$string['encrypt_connection'] = 'TLS एन्क्रिप्शन का उपयोग करें।';
$string['encrypt_connection_help'] = 'रेडिस से जुड़ने के लिए TLS  का उपयोग करें। रेडिस के लिए मेजबान नाम में \'tls://\' का उपयोग न करें, इसके बजाय इस विकल्प का उपयोग करें।';
$string['password'] = 'पासवर्ड';
$string['password_help'] = 'यह मूल सर्वर का पासवर्ड सेट करता है।';
$string['pluginname'] = 'रेडिस';
$string['prefix'] = 'प्रमुख उपसर्ग';
$string['prefix_help'] = 'इस उपसर्ग का उपयोग मूल सर्वर पर सभी प्रमुख नामों के लिए किया जाता है। * यदि आपके पास इस सर्वर का उपयोग करके केवल एक मूडल उदाहरण है, तो आप इस मूल्य चूकना को छोड़ सकते हैं। * प्रमुख लंबाई प्रतिबंधों के कारण, उच्‍चतम 5 वर्णों की अनुमति है।';
$string['prefixinvalid'] = 'अमान्य उपसर्ग। आप केवल a-z का उपयोग कर सकते हैं। A-Z 0-9-_';
$string['privacy:metadata:redis'] = 'रेडिस कैशस्टोर प्लगइन अपनी कैशिंग कार्यक्षमता के हिस्से के रूप में डेटा को संक्षेप में संग्रहीत करता है। यह डेटा एक रेडिस सर्वर पर संग्रहीत किया जाता है जहाँ डेटा को नियमित रूप से हटा दिया जाता है।';
$string['privacy:metadata:redis:data'] = 'कैश में संग्रहीत विविध, विभिन्न डेटा';
$string['serializer_igbinary'] = 'इग्बिनरी सीरियलाइज़र';
$string['serializer_php'] = 'चूकPHP सीरियलाइज़र';
$string['server'] = 'सर्वर (ओं)';
$string['server_help'] = 'परीक्षण के लिए उपयोग किया जाने वाला Redis सर्वर।

कुछ उदाहरण मान:

* testredis.abc.com - होस्टनाम द्वारा Redis सर्वर से कनेक्ट करने के लिए (डिफ़ॉल्ट रूप से पोर्ट 6379)।

* testredis.abc.com:1234 - होस्टनाम द्वारा किसी विशिष्ट पोर्ट से Redis सर्वर से कनेक्ट करने के लिए।

* 1.2.3.4 - IP पते द्वारा Redis सर्वर से कनेक्ट करने के लिए (डिफ़ॉल्ट रूप से पोर्ट 6379)।

* 1.2.3.4:1234 - IP पते द्वारा किसी विशिष्ट पोर्ट से Redis सर्वर से कनेक्ट करने के लिए।

* unix:///var/redis.sock - Unix सॉकेट का उपयोग करके Redis सर्वर से कनेक्ट करने के लिए।

* /var/redis.sock - Unix सॉकेट का उपयोग करके Redis सर्वर से कनेक्ट करने के लिए (वैकल्पिक प्रारूप)।

यदि क्लस्टर मोड सक्षम है, तो सर्वरों को नई पंक्ति से अलग करके निर्दिष्ट करें, उदाहरण के लिए:<br>

172.23.0.11<br>

172.23.0.12<br>

172.23.0.13<br>

अधिक जानकारी के लिए, <a href="https://redis.io/docs/reference/clients/#accepting-client-connections">क्लाइंट कनेक्शन स्वीकार करना</a> और <a href="https://redis.io/resources/clients/#php">Redis PHP क्लाइंट</a> देखें।';
$string['task_ttl'] = 'रेडिस कैश में समाप्त प्रविष्टियों द्वारा उपयोग की जाने वाली स्मृति को मुक्त करें';
$string['test_clustermode'] = 'क्लस्टर प्रकार, विधा';
$string['test_clustermode_desc'] = 'रेडिस क्लस्टर प्रकार, विधा में परीक्षण सक्षम करें।';
$string['test_password'] = 'टेस्ट सर्वर पासवर्ड';
$string['test_password_desc'] = 'रेडिस टेस्ट सर्वर पासवर्ड।';
$string['test_serializer'] = 'सीरियलाइज़र';
$string['test_serializer_desc'] = 'परीक्षण के लिए उपयोग करने के लिए सीरियलाइज़र।';
$string['test_server'] = 'परीक्षण सर्वर';
$string['test_server_desc'] = 'परीक्षण के लिए उपयोग किया जाने वाला Redis सर्वर।

कुछ उदाहरण मान:

* testredis.abc.com - होस्टनाम द्वारा Redis सर्वर से कनेक्ट करने के लिए (डिफ़ॉल्ट रूप से पोर्ट 6379)।

* testredis.abc.com:1234 - होस्टनाम द्वारा किसी विशिष्ट पोर्ट से Redis सर्वर से कनेक्ट करने के लिए।

* 1.2.3.4 - IP पते द्वारा Redis सर्वर से कनेक्ट करने के लिए (डिफ़ॉल्ट रूप से पोर्ट 6379)।

* 1.2.3.4:1234 - IP पते द्वारा किसी विशिष्ट पोर्ट से Redis सर्वर से कनेक्ट करने के लिए।

* unix:///var/redis.sock - Unix सॉकेट का उपयोग करके Redis सर्वर से कनेक्ट करने के लिए।

* /var/redis.sock - Unix सॉकेट का उपयोग करके Redis सर्वर से कनेक्ट करने के लिए (वैकल्पिक प्रारूप)।

यदि क्लस्टर मोड सक्षम है, तो सर्वरों को नई पंक्ति से अलग करके निर्दिष्ट करें, उदाहरण के लिए:<br>

172.23.0.11<br>

172.23.0.12<br>

172.23.0.13<br>

अधिक जानकारी के लिए, <a href="https://redis.io/docs/reference/clients/#accepting-client-connections">क्लाइंट कनेक्शन स्वीकार करना</a> और <a href="https://redis.io/resources/clients/#php">Redis PHP क्लाइंट</a> देखें।';
$string['test_ttl'] = 'परीक्षण TTL';
$string['test_ttl_desc'] = 'एक कैश का उपयोग करके पालन परीक्षण चलाएँ जिसके लिए टी. टी. एल. (धीमा सेट) की आवश्यकता होती है।TTL';
$string['usecompressor'] = 'कम्प्रेसर का उपयोग करें';
$string['usecompressor_help'] = 'क्रमबद्ध करने के बाद उपयोग किए जाने वाले कंप्रेसर को निर्दिष्ट करता है। यह मूडल कैशAPI स्तर पर किया जाता है, PHP-रेडी स्तर पर नहीं';
$string['useserializer'] = 'सीरियलाइज़र का उपयोग करें';
$string['useserializer_help'] = 'सीरियलाइज़ेशन के लिए उपयोग किए जाने वाले सीरियलाइज़र को निर्दिष्ट करता है।
मान्य सीरियलाइज़र Redis::SERIALIZER_PHP या Redis::SERIALIZER_IGBINARY हैं।
बाद वाला विकल्प केवल तभी समर्थित है जब phpredis को --enable-redis-igbinary विकल्प के साथ कॉन्फ़िगर किया गया हो और igbinary एक्सटेंशन लोड किया गया हो।';
