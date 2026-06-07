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
 * Strings for component 'message_kopereemail', language 'es', version '4.4'.
 *
 * @package     message_kopereemail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action_create'] = 'Crear mensaje personalizado';
$string['action_delete'] = 'Eliminar mensaje personalizado';
$string['action_edit'] = 'Editar mensaje personalizado';
$string['action_export'] = 'Exportar JSON';
$string['action_import'] = 'Importar JSON';
$string['action_preview'] = 'Plantillas';
$string['action_preview_click'] = 'Haz clic aquí para recibir un correo con esta prueba de plantilla';
$string['action_preview_success'] = 'Correo enviado correctamente. Revisa tu bandeja de entrada o la carpeta de spam.';
$string['export_filename_prefix'] = 'kopereemail-templates';
$string['export_title'] = 'Exportar plantillas';
$string['import_file'] = 'Archivo JSON';
$string['import_file_help'] = 'Selecciona el JSON exportado desde el otro entorno.';
$string['import_invalid_json'] = 'Archivo no válido: JSON mal formado.';
$string['import_invalid_payload'] = 'Archivo no válido: la estructura de exportación no coincide.';
$string['import_overwrite'] = 'Sobrescribir plantillas existentes';
$string['import_overwrite_help'] = 'Si está marcado, las plantillas existentes se actualizarán. Si no está marcado, las plantillas existentes se ignorarán.';
$string['import_success'] = 'Importación completada.<br>&amp;nbsp;&amp;gt; <strong>Importadas:</strong> {$a->imported}<br>&amp;nbsp;&amp;gt; <strong>Omitidas:</strong> {$a->skipped}<br>&amp;nbsp;&amp;gt; <strong>Wrapper actualizado:</strong> {$a->wrapper}.';
$string['import_title'] = 'Importar plantillas';
$string['import_wrapper'] = 'Importar wrapper HTML (plantilla base)';
$string['import_wrapper_help'] = 'Si está marcado, el wrapper HTML del JSON reemplazará el wrapper configurado en este entorno.';
$string['messages'] = 'mensajes';
$string['placeholders_course_data_desc'] = 'Datos del curso (cuando se puedan detectar).';
$string['placeholders_course_url_desc'] = 'URL del curso (cuando se pueda detectar).';
$string['placeholders_dates_now_desc'] = 'Fecha/hora actual (userdate).';
$string['placeholders_desc'] = 'Puedes usar marcadores de posición Mustache en el mensaje.';
$string['placeholders_fullmessage_desc'] = 'Mensaje en texto plano.';
$string['placeholders_fullmessagehtml_desc'] = 'Mensaje HTML (usa llaves triples).';
$string['placeholders_site_fullname_desc'] = 'Nombre completo del sitio (<code>{$SITE->fullname}</code>).';
$string['placeholders_site_logourl_desc'] = 'Logo del sitio (<img src="{$a->logo_url}" style="max-width:70px;max-height:70px;">).';
$string['placeholders_site_shortname_desc'] = 'Nombre corto del sitio (<code>{$SITE->shortname}</code>).';
$string['placeholders_site_url_desc'] = 'URL del sitio (<code>{$CFG->wwwroot}</code>).';
$string['placeholders_subject_desc'] = 'Asunto de la notificación actual.';
$string['placeholders_title'] = 'Marcadores de posición disponibles';
$string['placeholders_userfrom_data_desc'] = 'Datos del remitente.';
$string['placeholders_userto_data_desc'] = 'Datos del destinatario.';
$string['pluginname'] = 'Kopere Email';
$string['privacy:metadata:attachment'] = 'Archivo adjunto en el sistema de archivos.';
$string['privacy:metadata:attachname'] = 'Nombre del adjunto.';
$string['privacy:metadata:externalpurpose'] = 'Propósito externo';
$string['privacy:metadata:fullmessage'] = 'Mensaje en texto plano.';
$string['privacy:metadata:fullmessagehtml'] = 'Mensaje HTML.';
$string['privacy:metadata:recipient'] = 'Destinatario del correo.';
$string['privacy:metadata:replyto'] = 'Correo de respuesta (Reply-to).';
$string['privacy:metadata:replytoname'] = 'Nombre de respuesta (Reply-to).';
$string['privacy:metadata:subject'] = 'Asunto del correo.';
$string['privacy:metadata:userfrom'] = 'Remitente del correo.';
$string['settings_customtemplates'] = 'Mensajes personalizados por proveedor';
$string['settings_customtemplates_desc'] = 'Crear/editar un mensaje personalizado para cada proveedor de notificaciones.';
$string['settings_wrapper'] = 'Plantilla base de correo (wrapper)';
$string['settings_wrapper_desc'] = 'Este HTML está formateado en Mustache y se aplicará como plantilla del mensaje que se enviará al estudiante. El contenido HTML debe insertarse donde está {{{fullmessagehtml}}}.';
$string['table_actions'] = 'Acciones';
$string['table_component'] = 'Componente';
$string['table_name'] = 'Nombre';
$string['table_provider'] = 'Proveedor';
$string['template'] = 'Plantilla';
$string['template_changue'] = 'Quiero usar esta plantilla como la predeterminada para Kopere Mail';
$string['template_changued'] = 'Plantilla actualizada correctamente';
$string['template_delete_confirm'] = '¿Estás seguro de que quieres eliminar el mensaje personalizado de este proveedor?';
$string['template_delete_title'] = 'Eliminar mensaje personalizado';
$string['template_deleted'] = 'Mensaje personalizado eliminado.';
$string['template_edit_bodyhtml'] = 'HTML del mensaje';
$string['template_edit_provider'] = 'Proveedor';
$string['template_edit_save'] = 'Guardar';
$string['template_edit_subject'] = 'Asunto (opcional)';
$string['template_edit_title'] = 'Mensaje personalizado';
$string['template_preview'] = 'Vista previa de la plantilla';
$string['template_saved'] = 'Mensaje personalizado guardado.';
$string['templates_other'] = 'Otras plantillas';
$string['templates_transfer_desc'] = 'Usa este servicio para migrar la configuración entre entornos (p. ej., staging -> producción).';
$string['templates_transfer_title'] = 'Exportar / Importar configuración';
