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
 * Strings for component 'local_kopere_wpbridge', language 'ar', version '4.4'.
 *
 * @package     local_kopere_wpbridge
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'الإجراءات';
$string['adminnotification_body'] = 'تم اكتشاف مشكلة في جسر WooCommerce.

{$a}';
$string['adminnotification_subject'] = 'مشكلة جسر Wordpress';
$string['back'] = 'عودة';
$string['dashboard_laststatus'] = 'حالة الاتصال';
$string['dashboard_mappingcount'] = 'التعيينات';
$string['dashboard_openui'] = 'فتح التعيينات';
$string['dashboard_pendingcount'] = 'العناصر قيد الانتظار';
$string['dashboard_processedcount'] = 'العناصر المعالجة';
$string['dashboard_settings'] = 'الإعدادات';
$string['dashboard_subtitle'] = 'المبيعات المكتملة تمت مزامنتها إلى مساقات مودل والزمر.';
$string['dashboard_title'] = 'جسر WooCommerce إلى مودل';
$string['error_configmissing'] = 'إعدادات WooCommerce غير مكتملة.';
$string['error_invalidsignature'] = 'توقيع webhook الخاص بـ WooCommerce غير صالح.';
$string['error_invalidwebhooktoken'] = 'رمز webhook  غير صالح.';
$string['error_missingemail'] = 'الطلب لا يتضمن بريدًا الكترونيًا للعميل.';
$string['error_missingorderid'] = 'معرّف الطلب الخاص بـ WooCommerce مفقود.';
$string['error_nomanualenrol'] = 'لم يتم العثور على عبِّنة انضمام يدوي نشطة في المساق.';
$string['error_nomapping'] = 'لم يتم العثور على ربط نشط لهذا المنتج.';
$string['manage'] = 'إدارة جسر WooCommerce';
$string['mapping_add'] = 'إضافة تعيين';
$string['mapping_cohort'] = 'الزمرة';
$string['mapping_course'] = 'المساق';
$string['mapping_delete'] = 'حذف التعيين';
$string['mapping_delete_confirm'] = 'هل تريد حقًا حذف هذا التعيين؟';
$string['mapping_deleted'] = 'تم حذف التعيين بنجاح.';
$string['mapping_edit'] = 'تعديل التعيين';
$string['mapping_enabled'] = 'مُمَكَّن';
$string['mapping_itemtype'] = 'نوع الوجهة';
$string['mapping_itemtype_cohort'] = 'الزمرة';
$string['mapping_itemtype_course'] = 'المساق';
$string['mapping_missingcohort'] = 'إختر الزمرة لربطها.';
$string['mapping_missingcourse'] = 'اختر دورة لإجراء مطابقة للمساقات.';
$string['mapping_productid'] = 'معرّف منتج WooCommerce';
$string['mapping_role'] = 'papel للالتحاق بالدورة';
$string['mapping_saved'] = 'تم حفظ المطابقة بنجاح.';
$string['mappings'] = 'المطابقات';
$string['messageprovider_syncnotification'] = 'إشعارات WP Bridge';
$string['ordernotification_body'] = 'مرحبا {$a->firstname}،

تمت معالجة طلبك {$a->orderid} بنجاح.

الوصول المطبق:
{$a->items}

يمكنك الآن الوصول إلى Moodle من خلال:
{$a->siteurl}

مع أطيب التحيات،
{$a->sitename}';
$string['ordernotification_subject'] = 'وصول Moodle الخاص بك جاهز';
$string['pluginname'] = 'Kopere WP Bridge';
$string['privacy:metadata'] = 'المكوّن الإضافي يخزّن بيانات طلب WooCommerce لمعالجة الالتحاق بـ Moodle.';
$string['savechanges'] = 'حفظ التغييرات';
$string['settings_consumerkey'] = 'مفتاح المستهلك';
$string['settings_consumersecret'] = 'سر المستهلك';
$string['settings_debug'] = 'وضع التصحيح';
$string['settings_notconfigured'] = 'الاتصال لم يتم تكوينه بعد.';
$string['settings_section'] = 'اتصال WooCommerce';
$string['settings_statusheading'] = 'آخر اختبار اتصال';
$string['settings_storeurl'] = 'رابط WooCommerce';
$string['settings_storeurl_desc'] = 'مثال: https://example.com';
$string['settings_testfailed'] = 'فشل فحص الاتصال: {$a}';
$string['settings_testok'] = 'تم اختبار الاتصال بنجاح وانتهاء فحص webhook.';
$string['settings_webhookheading'] = 'نقطة نهاية webhook';
$string['settings_webhookheading_desc'] = 'استخدم هذا الرابط في WooCommerce. الرمز مطلوب دائماً في سلسلة الاستعلام.';
$string['settings_webhookurl'] = 'عنوان Webhook';
$string['status_error'] = 'خطأ';
$string['status_failed'] = 'فشل';
$string['status_ignored'] = 'تم تجاهله';
$string['status_ok'] = 'موافق';
$string['status_pending'] = 'قيد الانتظار';
$string['status_processed'] = 'تم المعالجة';
$string['task_syncorders'] = 'مزامنة الطلبات المكتملة من WooCommerce';
$string['wpbridge'] = 'WP Bridge';
