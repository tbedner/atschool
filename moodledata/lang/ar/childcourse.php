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
 * Strings for component 'childcourse', language 'ar', version '4.4'.
 *
 * @package     childcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoenrol'] = 'التسجيل التلقائي عند الوصول';
$string['autoenrol_help'] = 'إذا تم تمكينه، ستقوم الإضافة بتسجيل المستخدم تلقائيًا في الدورة الفرعية عند فتحها عبر هذا النشاط. يتم إنشاء عمليات التسجيل باستخدام مثيل تسجيل يدوي مخصص حتى يمكن تتبّعها وعكسها لاحقًا بأمان (اعتمادًا على سياسة الإزالة). إذا تم تعطيله، لن تحاول الإضافة تسجيل المستخدمين تلقائيًا.';
$string['childcourse'] = 'مقرر فرعي';
$string['childcourse:addinstance'] = 'إضافة نشاط مقرر فرعي جديد';
$string['childcourse:manage'] = 'إدارة إعدادات المقرر الفرعي';
$string['childcourse:sync'] = 'مزامنة درجة المقرر الفرعي واكتمالها';
$string['childcourse:view'] = 'عرض نشاط الدورة الفرعية';
$string['childcourse_help'] = 'اختر الدورة التي ستتم ربطها بهذا النشاط. يحدد هذا الاختيار جميع الإعدادات الخاصة بالقواعد (المجموعات، قواعد الإكمال، محددات الأنشطة، مزامنة الدرجات). بعد حفظ النشاط، تصبح الدورة الفرعية غير قابلة للتغيير للحفاظ على تطابق الخرائط وسجل المزامنة.';
$string['childcoursenotset'] = 'لم يتم تعيين الدورة الفرعية.';
$string['completionmissing'] = 'إكمال الدورة الفرعية غير مُفعل.';
$string['completionrule'] = 'قاعدة الإكمال بناءً على الدورة الفرعية';
$string['completionrule_allactivities'] = 'اِكْمِل عندما يتم إكمال 100% من الأنشطة المُتبعة';
$string['completionrule_coursecompleted'] = 'اِكْمِل عند إكمال الدورة الفرعية';
$string['completionrule_help'] = 'يحدِّد كيف يُعلَـم تلقائيًا اكتمال هذا النشاط استنادًا إلى تقدم المستخدم في الدورة الفرعية.

- **Do nothing:** لا علاقة لإكمال هذا النشاط بإكمال الدورة الفرعية.
- **When the child course is completed:** بمجرد إكمال الدورة الفرعية، يكتمل هذا النشاط أيضًا.
- **When 100% of tracked activities are completed:** يجب إكمال جميع الأنشطة في الدورة الفرعية التي تتعقب الإكمال حتى يُكتمل هذا النشاط.';
$string['completionrule_none'] = 'لا تفعل شيئاً';
$string['enrolinstancename'] = 'رابط الدورة الفرعية #{$a}';
$string['error_manualenrolnotavailable'] = 'إضافة التسجيل اليدوي غير متوفرة.';
$string['grade_approval'] = 'إرسال الدرجة من';
$string['grade_approval_no'] = 'لا ترسل الدرجة';
$string['grade_approval_yes'] = 'استخدم الدرجة من الدورة الفرعية';
$string['gradebookmissing'] = 'دفتر الدرجات للدورة الفرعية غير مُهيّأ (الإجمالي الكلي للدورة مفقود).';
$string['hideinmycourses'] = 'إخفاء الدورة الفرعية من قائمة دوراتي';
$string['hideinmycourses_help'] = 'إذا تم تمكينه، سيتم إخفاء الدورة الفرعية للمستخدمين الذين تم تسجيلهم بواسطة هذا النشاط من قائمة "دوراتي". يساعد ذلك في فرض التنقل خلال هذه الدورة. هذا الإعداد يؤثر فقط على المستخدمين المسجلين عبر هذه الإضافة (يتعقبها الإضافة).';
$string['inheritgroups'] = 'وراثة المجموعات من الدورة الأم';
$string['inheritgroups_help'] = 'إذا تم تمكينه، ستحاول الإضافة الحفاظ على تطابق أدوار مبسط: المستخدمون ذوو صلاحيات بمستوى المعلم في الدورة الأم سيُسجلون كمعلم (editingteacher/teacher عند التوفر)؛ وإلا ك estudante. هذا لا ينسخ الأدوار المخصصة أو ترتيبات الأدوار المعقدة.';
$string['keeprole'] = 'احفظ papel (estudante/teacher)';
$string['keeprole_help'] = 'إذا تم تمكينه، ستحاول الإضافة الحفاظ على تطابق أدوار مبسط: المستخدمون ذوو صلاحيات بمستوى المعلم في الدورة الأم سيُسجلون كمعلم (editingteacher/teacher عند التوفر)؛ وإلا ك estudante. هذا لا ينسخ الأدوار المخصصة أو تعيينات الأدوار المعقدة.';
$string['label_childcourse'] = 'الدورة الفرعية';
$string['label_lastsynccompletion'] = 'آخر مزامنة الإكمال';
$string['label_lastsyncgrade'] = 'آخر مزامنة الدرجة';
$string['lastsync'] = 'آخر مزامنة';
$string['lockedcoursewarning'] = 'لا يمكن تغيير الدورة الفرعية بعد حفظها.';
$string['manage_header_actions'] = 'إجراءات';
$string['manage_header_name'] = 'الاسم';
$string['missingcourse'] = 'الدورة مفقودة';
$string['modulename'] = 'الدورة الفرعية';
$string['modulenameplural'] = 'الدورات الفرعية';
$string['never'] = 'أبداً';
$string['nogroup'] = 'لا توجد مجموعة';
$string['openchildcourse'] = 'فتح المساق الفرعي';
$string['opennewtab'] = 'فتح في تبويب جديد';
$string['opennewtab_help'] = 'إذا تم تمكينه، سيفتح الزر المساق الفرعي في تبويب جديد. هذا لا يغير سلوك التسجيل أو المزامنة، إنما طريقة فتح المساق للمستخدم.';
$string['pluginadministration'] = 'إدارة المساق الفرعي';
$string['pluginname'] = 'مساق فرعي';
$string['privacy:metadata:childcourse_map'] = 'يخزّن بيانات التطابق التي أنشأها نشاط المساق المرتبط للسماح بإلغاء الانضمام الآمن والتدقيق.';
$string['privacy:metadata:childcourse_map:childcourseid'] = 'معرّف المساق الفرعي التي تم ربطه';
$string['privacy:metadata:childcourse_map:childcourseinstanceid'] = 'معرّف عيِّنة نشاط المساق المرتبطة';
$string['privacy:metadata:childcourse_map:groupidsjson'] = 'قائمة معرّفات مجموعات المساق الفرعية المعينة بواسطة الملحق (JSON)';
$string['privacy:metadata:childcourse_map:hiddenprefset'] = 'يشير إلى ما إذا كان الملحق قد ضبط التفضيل لإخفاء المساق الفرعي في مساقي';
$string['privacy:metadata:childcourse_map:manualenrolid'] = 'معرّف عيِّنة الانضمام المستعملة من قبل الملحق لضم المستخدم';
$string['privacy:metadata:childcourse_map:parentcourseid'] = 'معرّف المساق الأب الذي يوجد فيها النشاط';
$string['privacy:metadata:childcourse_map:roleid'] = 'معرّف الدور المعين من قبل الملحق في المساق الفرعي';
$string['privacy:metadata:childcourse_map:timeenrolled'] = 'الوقت الذي تم فيه انضمام المستخدم عبر الرابط';
$string['privacy:metadata:childcourse_map:timemodified'] = 'وقت آخر تعديل لسجل التطابق';
$string['privacy:metadata:childcourse_map:userid'] = 'معرّف المستخدم الذي ضمه عبر الرابط';
$string['privacy:metadata:childcourse_state'] = 'يخزّن حالة مخبئة لكل مستخدم لدعم مزامنة الدرجات والإكمال بشكل تزايدي';
$string['privacy:metadata:childcourse_state:childcourseinstanceid'] = 'معرّف عيِّنة نشاط المساق المرتبط';
$string['privacy:metadata:childcourse_state:coursecompleted'] = 'مؤشر مخبأ يبيّن ما إذا تم استيفاء شرط الإكمال للمستخدم';
$string['privacy:metadata:childcourse_state:coursecompletiontimemodified'] = 'طابع زمني لآخر تعديل في بيانات إكمال المصدر للمزامنة التدريجية';
$string['privacy:metadata:childcourse_state:finalgrade'] = 'الدرجة المخبأة (نسبة مئوية) تمت متزامنتها من إجمالي المساق الفرعي';
$string['privacy:metadata:childcourse_state:grade_source'] = 'معرّف مصدر الدرجة (مثلاً course_total)';
$string['privacy:metadata:childcourse_state:gradeitemtimemodified'] = 'طابع زمني لآخر تعديل في فقرة التقييم المصدرية للمزامنة التدريجية';
$string['privacy:metadata:childcourse_state:timemodified'] = 'وقت آخر تعديل في صف الحالة المخبأة';
$string['privacy:metadata:childcourse_state:userid'] = 'معرّف المستخدم';
$string['privacy:metadata:userpreference:block_myoverview_hidden_course'] = 'تفضيل المستخدم المستعمل لإخفاء مساق فرعي من قائمة مساقاتي (اسم التفضيل الافتراضي: block_myoverview_hidden_course_{courseid}).';
$string['settings_heading'] = 'إعدادات المساق الفرعي';
$string['syncdone'] = 'المزامنة اكتملت';
$string['syncnow'] = 'بدء المزامنة الآن';
$string['targetgroup'] = 'الانضمام إلى المجموعة';
$string['targetgroup_help'] = 'إذا تم اختيارها، سيُضاف المستخدم إلى هذه المجموعة المحددة في الدورة الفرعية عند التسجيل التلقائي. يجب أن توجد المجموعة في الدورة الفرعية. إذا تم تمكين \\"وراثة المجموعات من الدورة الأم\\" أيضاً، فستطبق كل من السلوكين (المجموعة المحددة والمجموعات الموروثة).';
$string['unenrolaction'] = 'عند إزالة الرابط';
$string['unenrolaction_help'] = 'يتحكم في ما يحدث للانضمامات التي أنشأها هذا النشاط عند حذف النشاط المرتبط. "إلغاء الانضمام" سيزيل فقط الانضمامات التي أنشأها هذا النشاط (تتم متابعتها من خلال جدول التعيين). "إبقاء الانضمامات" سيترك المستخدمين منضمين إلى المساق الفرعي.';
$string['unenrolaction_keep'] = 'إبقاء الانضمامات';
$string['unenrolaction_unenrol'] = 'إلغاء انضمامات المستخدمين المنضمين عبر هذا الرابط.';
