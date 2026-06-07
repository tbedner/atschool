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
 * Strings for component 'workshopallocation_random', language 'hi', version '4.4'.
 *
 * @package     workshopallocation_random
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addselfassessment'] = 'स्व-मूल्यांकन जोड़ें';
$string['allocationaddeddetail'] = 'नया मूल्यांकन किया जाना है: <strong>{$a->reviewername}</strong> <strong>{$a->authorname}</strong> के समीक्षक हैं।';
$string['allocationdeallocategraded'] = 'पहले से मूल्यांकित मूल्यांकन को निरस्त करने में असमर्थ: समीक्षक <strong>{$a->reviewername}</strong>, प्रस्तुतकर्ता लेखक <strong>{$a->authorname}</strong>';
$string['allocationreuseddetail'] = 'पुनः प्रयुक्त मूल्यांकन: <strong>{$a->समीक्षक का नाम}</strong> को <strong>{$a->लेखक का नाम}</strong> के समीक्षक के रूप में रखा गया है।';
$string['allocationsettings'] = 'आवंटन सेटिंग्स';
$string['assessmentdeleteddetail'] = 'मूल्यांकन का आवंटन रद्द: <strong>{$a->reviewername}</strong> अब <strong>{$a->authorname}</strong> के समीक्षक नहीं हैं।';
$string['assesswosubmission'] = 'प्रतिभागी बिना कुछ जमा किए मूल्यांकन कर सकते हैं';
$string['confignumofreviews'] = 'यादृच्छिक रूप से आवंटित किए जाने वाले प्रस्तुतीकरणों की चूक संख्या';
$string['excludesamegroup'] = 'एक ही समूह के साथियों द्वारा समीक्षाओं को रोकें';
$string['noallocationtoadd'] = 'जोड़ने के लिए कोई आवंटन नहीं';
$string['nogroupusers'] = '<p> चेतावनी: यदि कार्यशाला \'दृश्य समूह, दल, वर्ग, टोली\' प्रकार, विधा अथवा \'अलग समूह, दल, वर्ग, टोली\' प्रकार, विधा में है, तो उपयोगकर्ताओं को कम से कम एक समूह, दल, वर्ग, टोली का हिस्सा होना चाहिए ताकि इस उपकरण द्वारा उन्हें आवंटित सहकर्मी-मूल्अथवांकन किअथवा जा सके। गैर-समूह, दल, वर्ग, टोली उपयोगकर्ताओं को अभी भी नए स्व-मूल्अथवांकन दिए जा सकते हैं अथवा मौजूदा मूल्अथवांकन हटाए जा सकते हैं। </p> <p> ये उपयोगकर्ता वर्तमान में एक समूह, दल, वर्ग, टोली में नहीं हैं: {$a} </p>';
$string['numofdeallocatedassessment'] = '{$a} मूल्यांकन (ओं) को अलग करना';
$string['numofrandomlyallocatedsubmissions'] = 'यादृच्छिक रूप से {$a} आवंटन आवंटित करना';
$string['numofreviews'] = 'समीक्षाओं की संख्या';
$string['numofselfallocatedsubmissions'] = 'स्व-आवंटन {$a} प्रस्तुति (ओं)';
$string['numperauthor'] = 'प्रति निवेदन';
$string['numperreviewer'] = 'प्रति समीक्षक';
$string['pluginname'] = 'सांयोगिक, अनियमित एका एक किया हुआ आवंटन';
$string['privacy:metadata'] = 'सांयोगिक, अनियमित एका एक किया हुआ आवंटन प्लगइन किसी भी व्यक्तिगत डेटा को संग्रहीत नहीं करता है। वास्तविक व्यक्तिगत डेटा कि कौन मूल्यांकन करने जा रहा है कि कार्यशाला मॉड्यूल द्वारा किसे संग्रहीत किया गया है और वे मूल्यांकन ब्योरा को निर्यात करने के लिए आधार बनाते हैं।';
$string['randomallocationdone'] = 'सांयोगिक, अनियमित एका एक किया हुआ आवंटन किया गया';
$string['removecurrentallocations'] = 'चालू, प्रचलित आवंटन को हटा दें';
$string['resultnomorepeers'] = 'कोई और साथी उपलब्ध नहीं हैं';
$string['resultnomorepeersingroup'] = 'इस अलग समूह में कोई और साथी उपलब्ध नहीं हैं';
$string['resultnotenoughpeers'] = 'पर्याप्त साथी उपलब्ध नहीं हैं';
$string['resultnumperauthor'] = 'प्रति लेखक {$a} समीक्षा आवंटित करने का प्रयास करना';
$string['resultnumperreviewer'] = 'प्रति समीक्षक {$a} समीक्षा (ओं) आवंटित करने का प्रयास करना';
$string['stats'] = 'चालू, प्रचलित आवंटन आंकड़े';
