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
 * Strings for component 'quiz_overview', language 'hi', version '4.4'.
 *
 * @package     quiz_overview
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allattempts'] = 'सभी प्रयास दिखाएँ';
$string['allattemptscontributetograde'] = 'सभी प्रयास उपयोगकर्ता के लिए अंतिम ग्रेड में योगदान करते हैं।';
$string['allstudents'] = 'सभी {$a} दिखाएँ';
$string['attemptsonly'] = 'केवल प्रयासों के साथ {$a} दिखाएँ';
$string['attemptsprepage'] = 'प्रति पृष्ठ दिखाए गए प्रयास';
$string['deleteselected'] = 'चयनित प्रयासों को निकाल देना दें';
$string['done'] = 'किया गया';
$string['err_failedtodeleteregrades'] = 'गणना किए गए प्रयास ग्रेड को निकाल देना में विफल';
$string['err_failedtorecalculateattemptgrades'] = 'प्रयास श्रेणियों की पुनः गणना करने में विफल';
$string['highlightinggraded'] = 'अंतिम ग्रेड में योगदान करने वाले उपयोगकर्ता प्रयास को उजागर किया गया है।';
$string['needed'] = 'आवश्यकता';
$string['noattemptsonly'] = 'केवल बिना किसी प्रयास के {$a} दिखाएँ/डाउनलोड करें';
$string['noattemptstoregrade'] = 'वापस लेने के लिए किसी प्रयास की आवश्यकता नहीं है';
$string['nogradepermission'] = 'आपके पास इस प्रश्नोत्तरी को श्रेणीबद्ध करने की अनुमति नहीं है।';
$string['onlyoneattemptallowed'] = 'इस प्रश्नोत्तरी में प्रति उपयोगकर्ता केवल एक प्रयास की अनुमत है।';
$string['optallattempts'] = 'सभी प्रयास';
$string['optallstudents'] = 'सभी {$a} जिन्होंने प्रश्नोत्तरी का प्रअथवास किअथवा है अथवा नहीं किअथवा है';
$string['optattemptsonly'] = '{$a} जिन्होंने प्रश्नोत्तरी का प्रयास किया है';
$string['optnoattemptsonly'] = '{$a} जिन्होंने प्रश्नोत्तरी का प्रयास नहीं किया है';
$string['optonlyregradedattempts'] = 'जिनका पुनर्गठन किया गया है/उन्हें पुनर्गठन की आवश्यकता के रूप में चिह्नित किया गया है';
$string['overview'] = 'ग्रेड';
$string['overviewdownload'] = 'अवलोकन डाउनलोड करें';
$string['overviewfilename'] = 'ग्रेड';
$string['overviewreport'] = 'ग्रेड प्रतिवेदन';
$string['overviewreportgraph'] = 'ग्रेड सीमा प्राप्त करने वाले छात्रों की कुल संख्या';
$string['overviewreportgraphgroup'] = 'ग्रेड सीमा प्राप्त करने वाले समूह, दल, वर्ग, टोली \'{$a}\' में छात्रों की संख्या';
$string['pagesize'] = 'पृष्ठ का आकार';
$string['pluginname'] = 'ग्रेड';
$string['preferencespage'] = 'केवल इस पृष्ठ के लिए वरीयताएँ';
$string['preferencessave'] = 'प्रतिवेदन दिखाएँ';
$string['preferencesuser'] = 'इस प्रतिवेदन के लिए आपकी प्राथमिकताएँ';
$string['privacy:metadata:preference:quiz_overview_slotmarks'] = 'प्रत्येक प्रश्न स्थान के लिए अंक दिखाना है या नहीं।';
$string['privacy:preference:slotmarks:no'] = 'प्रश्न स्थान के साथ अंक नहीं दिखाए जाते हैं।';
$string['privacy:preference:slotmarks:yes'] = 'प्रश्न स्थान के साथ अंक दिखाए जाते हैं।';
$string['regrade'] = 'रीग्रेड करें';
$string['regradeall'] = 'सभी को फिर से श्रेणीबद्ध करें';
$string['regradealldry'] = 'ड्राई रन एक पूर्ण रिग्रेड है';
$string['regradealldrydo'] = 'रीग्रेड करने के प्रयासों को रीग्रेड करने की आवश्यकता के रूप में चिह्नित किया गया ({$a})';
$string['regradealldrydogroup'] = 'समूह \'{$a-> groupname}\' में पुन: श्रेणीकरण की आवश्यकता के रूप में चिह्नित पुन: श्रेणीकरण प्रयास ({$a-> countregradeneeded})';
$string['regradealldrygroup'] = 'ड्राई रन समूह, दल, वर्ग, टोली \'{$a-> groupname}\' के लिए एक पूर्ण रिग्रेड है';
$string['regradeallgroup'] = 'समूह, दल, वर्ग, टोली \'{$a-> groupname}\' के लिए पूरा रिग्रेड';
$string['regradecomplete'] = 'पुनः श्रेणीकरण पूरा किया गया';
$string['regradedsuccessfullyxofy'] = 'रीग्रेडिंग समाप्त ({$a->done}/{$a->count})';
$string['regradeheader'] = 'रीग्रेडिंग';
$string['regradeselected'] = 'चयनित प्रयासों को फिर से श्रेणीबद्ध करें';
$string['regradingattemptissue'] = 'स्लॉट {$a->slot}: {$a->reason}';
$string['regradingattemptxofy'] = 'पुनः श्रेणीकरण प्रयास ({$a->done}/{$a->count})';
$string['regradingattemptxofyproblem'] = 'निम्नलिखित प्रश्नों को {$a->name} (आईडी {$a->attemptid}) द्वारा प्रयास {$a->attemptnum} में पुनः मूल्यांकित नहीं किया जा सका।';
$string['regradingattemptxofywithdetails'] = 'प्रयास के संबंध में ({$a->done}/{$a->count}) - {$a->name} द्वारा {$a->attemptnum} प्रयास (आईडी {$a->attemptid})';
$string['show'] = 'दिखाएँ/डाउनलोड करें';
$string['showattempts'] = 'केवल दिखाने/डाउनलोड करने के प्रयास';
$string['showdetailedmarks'] = 'प्रत्येक प्रश्न के लिए अंक';
$string['showinggraded'] = 'प्रत्येक उपयोगकर्ता के लिए केवल श्रेणीबद्ध प्रयास दिखा रहा है।';
$string['showinggradedandungraded'] = 'प्रत्येक उपयोगकर्ता के लिए श्रेणीबद्ध और गैर-श्रेणीबद्ध प्रयासों को दिखाना। श्रेणीबद्ध प्रत्येक उपयोगकर्ता के लिए एक प्रयास को उजागर किया गया है। इस प्रश्नोत्तरी के लिए श्रेणीकरण प्रणाली {$a} है।';
$string['studentingroup'] = '\'{$a->coursestudent}\' समूह \'{$a->groupname}\' में है';
$string['studentingrouplong'] = 'इस समूह में \'{$a->coursestudent}\'';
