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
 * Strings for component 'local_academic_ticket_system', language 'ar', version '4.4'.
 *
 * @package     local_academic_ticket_system
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['academic_ticket_system:addcategory'] = 'صلاحية إضافة أصناف جديدة';
$string['academic_ticket_system:addticket'] = 'صلاحية إنشاء تذاكر جديدة (للطلاب)';
$string['academic_ticket_system:download'] = 'صلاحية تنزيل مرفقات التذاكر';
$string['academic_ticket_system:manageticket'] = 'صلاحية إدارة وتعيين كافة التذاكر (للإدارة)';
$string['academic_ticket_system:viewownoverviews'] = 'عرض لوحة النشاط الخاصة';
$string['academic_ticket_system:viewticket'] = 'صلاحية عرض تفاصيل التذاكر';
$string['action_needed_hint'] = 'قام الموظفون بالرد، يرجى الاستجابة';
$string['actions'] = 'الإجراءات';
$string['add_department'] = 'الأقسام';
$string['add_new_department'] = 'إضافة قسم جديد';
$string['add_reply_heading'] = 'أكتب ردك...';
$string['add_ticket'] = 'إضافة تذكرة جديدة';
$string['add_to_navbar'] = 'إضافة إلى شريط التنقل';
$string['add_to_navbar_desc'] = 'عند تفعيله، ستتم إضافة رابط لنظام التذاكر في قائمة التنقل الرئيسية.';
$string['admin_alert_body'] = '<div dir="rtl" style="padding: 15px; border-right: 5px solid #ef4444; background-color: #fef2f2; text-align: right;">
    <h3 style="margin-top:0; color: #b91c1c;">🚨 تم استلام تذكرة عاجلة</h3>
    <p><strong>الطالب:</strong> {$a->firstname}</p>
    <p><strong>العنوان:</strong> {$a->title}</p>
    <p><strong>الصنف:</strong> {$a->category}</p>
    <hr style="border:0; border-top:1px solid #fee2e2; margin: 10px 0;">
    <a href="{$a->url}" style="background-color: #dc2626; color: white; padding: 8px 15px; text-decoration: none; border-radius: 5px; display: inline-block;">
        معاينة التذكرة الآن
    </a>
</div>';
$string['admin_alert_subject'] = '🚨 عاجل: تذكرة جديدة رقم #{$a->id} - {$a->title}';
$string['admin_only_label'] = 'إعدادات خاصة بالإدارة';
$string['all_rights_reserved'] = 'كل الحقوق محفوظة لـ';
$string['all_tickets'] = 'كل التذاكر الأكاديمية';
$string['all_tickets_stats'] = 'نظرة عامة على كل التذاكر';
$string['assign_user'] = 'تعيين مختص';
$string['assign_user_label'] = 'تعيين لموظف مختص';
$string['assigned_to'] = 'المختص المسؤول';
$string['assigned_to_label'] = 'الموظف المسؤول';
$string['assigned_user'] = 'معيَّنة لـ';
$string['attach_files_optional'] = 'المرفقات (اختياري)';
$string['attachments'] = 'المرفقات';
$string['attachments_heading'] = 'المرفقات الأصلية';
$string['attention_required'] = 'تنبيه هام';
$string['awaiting_me_label'] = 'بانتظار إجراء مني';
$string['back_to_home'] = 'العودة للرئيسية';
$string['cancel'] = 'إلغاء';
$string['category'] = 'الصنف';
$string['category_title'] = 'القسم';
$string['change_category_label'] = 'تغيير القسم';
$string['change_status_label'] = 'تحديث الحالة';
$string['click_to_record'] = 'أنقر على الميكروفون لبدء التسجيل';
$string['click_to_upload'] = 'أنقر هنا لاختيار الملفات من جهازك';
$string['closed_label'] = 'مغلقة';
$string['copyright_label'] = 'كل الحقوق محفوظة';
$string['create_ticket'] = 'إنشاء تذكرة';
$string['created_at'] = 'تاريخ الإنشاء';
$string['created_by'] = 'بواسطة';
$string['creation_failed'] = 'فشلت عملية إنشاء الصنف، ترجى المحاولة مرة أخرى.';
$string['current_year_label'] = 'السنة الحالية';
$string['default_email_placeholder'] = 'noreply@yourmoodlesite.com';
$string['department'] = 'القسم';
$string['department_created'] = 'تم إنشاء القسم بنجاح';
$string['department_deleted'] = 'تم حذف القسم بنجاح';
$string['department_updated'] = 'تم تحديث القسم بنجاح';
$string['description'] = 'الوصف';
$string['description_placeholder'] = 'يرجى شرح المشكلة بالتفصيل...';
$string['drag_drop_hint'] = 'إسحب الملفات هنا أو أنقر لرفعها';
$string['email_confirm_body'] = '<div dir="rtl" style="background-color: #f3f4f6; padding: 40px 0; font-family: \\\'Segoe UI\\\', Tahoma, Geneva, Verdana, sans-serif; color: #374151; text-align: right;">
    <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.05); border: 1px solid #e5e7eb;">
        <div style="background: linear-gradient(135deg, #4f46e5 0%, #3b82f6 100%); padding: 32px; text-align: center;">
            <h1 style="color: #ffffff; margin: 0; font-size: 24px; font-weight: 800;">تم استلام التذكرة!</h1>
            <p style="color: #e0e7ff; margin: 8px 0 0 0; font-size: 15px;">نحن نراجع طلبك الآن</p>
        </div>
        <div style="padding: 40px 30px;">
            <p style="font-size: 16px; margin-bottom: 24px; color: #111827;">مرحباً <strong>{$a->firstname}</strong>،</p>
            <p style="line-height: 1.6; color: #4b5563; margin-bottom: 30px;">
                شكراً لتواصلك معنا. تم فتح تذكرة دعم جديدة بنجاح. سيقوم فريقنا بمراجعة التفاصيل والرد عليك في أقرب وقت ممكن.
            </p>
            <div style="background-color: #f9fafb; border: 1px solid #e5e7eb; border-radius: 12px; padding: 24px; margin-bottom: 32px;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="padding: 8px 0; color: #6b7280; font-size: 12px; font-weight: 700;">رقم التذكرة</td>
                        <td style="padding: 8px 0; color: #111827; font-weight: 700; text-align: left;">#{$a->id}</td>
                    </tr>
                    <tr style="border-top: 1px dashed #e5e7eb;">
                        <td style="padding: 12px 0 8px; color: #6b7280; font-size: 12px; font-weight: 700;">الموضوع</td>
                        <td style="padding: 12px 0 8px; color: #111827; text-align: left; font-weight: 600;">{$a->title}</td>
                    </tr>
                    <tr style="border-top: 1px dashed #e5e7eb;">
                        <td style="padding: 12px 0 8px; color: #6b7280; font-size: 12px; font-weight: 700;">القسم</td>
                        <td style="padding: 12px 0 8px; color: #111827; text-align: left;">{$a->category}</td>
                    </tr>
                    <tr style="border-top: 1px dashed #e5e7eb;">
                        <td style="padding: 12px 0 0; color: #6b7280; font-size: 12px; font-weight: 700;">الحالة</td>
                        <td style="padding: 12px 0 0; text-align: left;">
                            <span style="background-color: #dbeafe; color: #1e40af; padding: 4px 12px; border-radius: 9999px; font-size: 11px; font-weight: 800;">{$a->status}</span>
                        </td>
                    </tr>
                </table>
            </div>
            <div style="text-align: center;">
                <a href="{$a->url}" style="display: inline-block; background: linear-gradient(to left, #4f46e5, #3b82f6); color: #ffffff; text-decoration: none; padding: 14px 36px; border-radius: 10px; font-weight: 700; font-size: 16px;">
                    معاينة تفاصيل التذكرة
                </a>
            </div>
        </div>
        <div style="background-color: #f9fafb; padding: 24px; text-align: center; border-top: 1px solid #e5e7eb;">
            <p style="color: #9ca3af; font-size: 12px; margin: 0;">
                هذه رسالة تلقائية، يرجى عدم الرد عليها مباشرة.
            </p>
        </div>
    </div>
</div>';
$string['email_confirm_body_plain'] = 'مرحباً {$a->firstname}،
لقد استلمنا تذكرتك رقم #{$a->id} بخصوص "{$a->title}".
الحالة الحالية: {$a->status}
يمكنك متابعة التذكرة من هنا:
{$a->url}
تحياتنا،
فريق دعم {$a->site}';
$string['email_confirm_subject'] = '✔ [تذكرة رقم #{$a->id}] تم استلام طلبك: {$a->title}';
$string['enable'] = 'تفعيل النظام';
$string['enable_desc'] = 'عند التفعيل، سيتمكن المستخدمون من إنشاء وعرض التذاكر.';
$string['error'] = 'خطأ!';
$string['filesselected'] = 'تم اختيار {$a} من الملفات';
$string['form_instruction'] = 'يسعدنا مساعدتك، يرجى ملء النموذج أدناه.';
$string['happy_to_help_hint'] = 'تم حل مشكلتك بنجاح.';
$string['header_subtitle'] = 'نحن هنا لمساعدتك ودعمك اليوم 🌟';
$string['id'] = 'المعرف';
$string['internal_note_placeholder'] = 'أترك ملاحظة لزملائك...';
$string['internal_notes_heading'] = 'ملاحظات الفريق الداخلية';
$string['ip_address'] = 'عنوان IP';
$string['live_stats_heading'] = 'لوحة الإحصائيات';
$string['log_assigned'] = 'تم تعيين التذكرة إلى: {$a}';
$string['log_category_changed'] = 'تم تغيير الصنف إلى: {$a}';
$string['log_feedback_submitted'] = 'تم تقديم تقييم مقداره: {$a} نجوم';
$string['log_internal_note_added'] = 'أضاف ملاحظة داخلية';
$string['log_replied'] = 'أضاف رداً جديداً';
$string['log_status_changed'] = 'قام {$a->user} بتغيير الحالة من {$a->old} إلى {$a->new}.';
$string['log_status_changed_from_to'] = 'قام {$a->user} بتغيير الحالة من "{$a->old}" إلى "{$a->new}"';
$string['messageprovider:admin_urgent_alert'] = 'تنبيه الإدارة: إشعار تذكرة عاجلة';
$string['messageprovider:ticket_confirmation'] = 'تأكيد تقديم التذكرة';
$string['my_summary_heading'] = 'نظرة عامة على نشاطي';
$string['my_tickets_desc'] = 'تتبع وإدارة كل طلبات الدعم الخاصة بك';
$string['my_tickets_label'] = 'قائمة التذاكر الخاصة بي';
$string['next'] = 'التالي';
$string['no_internal_notes'] = 'لا توجد ملاحظات داخلية بعد.';
$string['no_replies_hint'] = 'كن أول من يضيف رداً أو استفساراً لنتمكن من مساعدتك.';
$string['no_replies_message'] = 'لا توجد ردود على هذه التذكرة حتى الآن.';
$string['no_tickets_desc'] = 'لم تقم بإنشاء أي تذاكر حتى الآن.';
$string['no_tickets_message'] = 'لم تقم بتقديم أي تذاكر دعم حتى الآن.
هل تحتاج للمساعدة؟ ابدأ تذكرة جديدة وسيقوم فريقنا بالمتابعة.';
$string['no_tickets_title'] = 'لا توجد تذاكر حالياً';
$string['nopermission'] = 'دخول غير مصرح به';
$string['nopermission_desc'] = 'عذراً، لا تملك الصلاحية لعرض هذه التذكرة.';
$string['of'] = 'من أصل';
$string['open_label'] = 'مفتوحة';
$string['pluginname'] = 'نظام التذاكر الأكاديمية';
$string['previous'] = 'السابق';
$string['primary_color'] = 'اللون الأساسي';
$string['primary_color_desc'] = 'اللون الرئيسي المستخدم للأزرار ، والهوية البصرية الأساسية.';
$string['priority'] = 'الأولوية';
$string['priority_high'] = 'عالية';
$string['priority_low'] = 'منخفضة';
$string['priority_medium'] = 'متوسطة';
$string['priority_urgent'] = 'عاجلة';
$string['privacy:metadata:presence'] = 'مخزن مؤقت لحالة المشاهدة المباشرة في الوقت الفعلي.';
$string['privacy:metadata:presence:ticketid'] = 'معرّف التذكرة التي تتم مشاهدتها.';
$string['privacy:metadata:presence:timemodified'] = 'آخر وقت تم فيه تحديث حالة تواجد المستخدم.';
$string['privacy:metadata:presence:userid'] = 'معرّف المستخدم الذي يشاهد التذكرة حالياً.';
$string['privacy:metadata:tickets'] = 'مخزن لتذاكر الدعم الفني التي ينشئها المستخدمون.';
$string['privacy:metadata:tickets:content'] = 'محتوى ووصف التذكرة بالكامل.';
$string['privacy:metadata:tickets:created_at'] = 'الطابع الزمني لوقت فتح التذكرة.';
$string['privacy:metadata:tickets:title'] = 'عنوان التذكرة.';
$string['privacy:metadata:tickets:userid'] = 'معرّف المستخدم الذي قام بإنشاء التذكرة.';
$string['quick_tip_label'] = 'نصيحة سريعة';
$string['recent_tickets_heading'] = 'تذاكر الطالب الأخيرة';
$string['record_voice_note'] = 'ملاحظة صوتية (إمكانية الوصول)';
$string['recording_finished'] = 'تم تسجيل الملاحظة الصوتية بنجاح';
$string['recording_now'] = 'جاري التسجيل... أنقر إيقاف عند الانتهاء';
$string['reopen_ticket_button'] = 'إعادة فتح التذكرة';
$string['replies_heading'] = 'سجل المناقشة';
$string['resolved_label'] = 'تم الحل';
$string['return_home'] = 'العودة للقائمة';
$string['search_placeholder'] = 'بحث برقم التذكرة أو الموضوع...';
$string['secondary_color'] = 'اللون الثانوي';
$string['secondary_color_desc'] = 'يستعمل للتدرجات، واللمسات الجمالية، وعناصر واجهة المستخدم الثانوية.';
$string['select_department_hint'] = '-- اختر القسم --';
$string['select_priority_hint'] = 'إختر مستوى الأولوية';
$string['send_reply_button'] = 'إرسال الرد والملفات';
$string['send_ticket'] = 'إرسال التذكرة';
$string['sending'] = 'جاري الإرسال...';
$string['showing'] = 'يجري عرض';
$string['sorry_no_ticket'] = 'لا توجد تذاكر حالياً';
$string['start_new_ticket_btn'] = 'أنشئ تذكرتك الأولى';
$string['start_recording'] = 'بدء التسجيل الصوتي';
$string['start_reply'] = 'إبدأ المحادثة أدناه!';
$string['status'] = 'حالة التذكرة';
$string['status_admin_reply'] = 'الإدارة قد ردت';
$string['status_adminreply'] = 'رد الإدارة';
$string['status_assigned'] = 'تم التعيين لمختص';
$string['status_closed'] = 'مغلقة';
$string['status_in_progress'] = 'قيد التنفيذ';
$string['status_open'] = 'مفتوحة';
$string['status_pending'] = 'قيد الانتظار';
$string['status_resolved'] = 'تم حلها';
$string['status_student_reply'] = 'الطالب قد رد';
$string['status_studentreply'] = 'رد الطالب';
$string['status_urgent'] = 'عاجلة';
$string['stop_recording'] = 'إيقاف التسجيل الصوتي';
$string['student_dashboard_tip'] = 'لضمان الدعم الأسرع، يرجى الرد خلال 12 ساعة. التذاكر التي لا يوجد بها نشاط لمدة 12 ساعة تُغلق تلقائياً.';
$string['submit'] = 'إرسال';
$string['success'] = 'تم بنجاح!';
$string['support_email'] = 'البريد الالكتروني للدعم';
$string['support_email_desc'] = 'عنوان البريد الالكتروني الذي يظهر للمستخدمين للتواصل المباشر أو الإشعارات.';
$string['system_name'] = 'اسم القسم الأول';
$string['system_name_desc'] = 'هذا هو الاسم الافتراضي للقسم الأول في نظام الدعم. يمكنك دائماً تعديل هذا الاسم أو إضافة أقسام أخرى لاحقًا من خلال النقر على مقطع "الأقسام".';
$string['ticket_department_label'] = 'القسم';
$string['ticket_description_label'] = 'وصف المشكلة';
$string['ticket_details_heading'] = 'تفاصيل التذكرة';
$string['ticket_id_label'] = 'الرقم المرجعي للتذكرة';
$string['ticket_log'] = 'سجل النشاطات';
$string['ticket_priority_label'] = 'أولوية التذكرة';
$string['ticket_status_label'] = 'الحالة الحالية';
$string['ticket_title'] = 'عنوان التذكرة';
$string['ticket_title_help'] = 'أدخل عنواناً موجزاً ووصفياً لطلب الدعم الخاص بك.';
$string['ticket_title_label'] = 'عنوان التذكرة';
$string['tickets_count'] = 'تذاكر';
$string['ticketsystem'] = 'نظام التذاكر';
$string['title'] = 'عنوان الموضوع';
$string['title_placeholder'] = 'مثال: لا يمكنني الدخول إلى المساق...';
$string['to'] = 'إلى';
$string['tooltip_category_hint'] = 'اختر القسم المسؤول عن معالجة هذه المشكلة';
$string['tooltip_desc_hint'] = 'قدم تفاصيل كاملة (خطوات إعادة التوليد، الأخطاء، إلخ)';
$string['tooltip_priority_hint'] = 'حدد مدى استعجال طلبك';
$string['tooltip_title_hint'] = 'اكتب عنواناً واضحاً ومختصراً لمشكلتك';
$string['tooltip_upload_hint'] = 'ارفع لقطات شاشة أو ملفات سجل الوقوعات (الأقصى 5 ميجا)';
$string['tooltip_voice_hint'] = 'مثالي للمشاكل المعقدة - دقيقتان كحد أقصى';
$string['total'] = 'الإجمالي';
$string['total_tickets_label'] = 'إجمالي التذاكر';
$string['unassigned'] = 'غير معين';
$string['under_review_label'] = 'قيد المراجعة';
$string['update_category_button'] = 'تحديث القسم';
$string['update_status_button'] = 'حفظ التغييرات';
$string['user_name_label'] = 'مقدمة من قبل';
$string['view'] = 'عرض التفاصيل';
$string['view_ticket'] = 'معاينة التذكرة';
$string['viewticket'] = 'معاينة التذكرة';
$string['we_are_working_hint'] = 'نحن نراجع طلبك حالياً.';
$string['welcome_message'] = 'مرحباً بك في نظام الدعم الأكاديمي';
$string['write_your_reply'] = 'أكتب ردك ...';
