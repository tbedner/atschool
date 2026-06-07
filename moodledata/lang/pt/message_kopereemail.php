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
 * Strings for component 'message_kopereemail', language 'pt', version '4.4'.
 *
 * @package     message_kopereemail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action_create'] = 'Criar mensagem personalizada';
$string['action_delete'] = 'Eliminar mensagem personalizada';
$string['action_edit'] = 'Editar mensagem personalizada';
$string['action_export'] = 'Exportar JSON';
$string['action_import'] = 'Importar JSON';
$string['action_preview'] = 'Modelos';
$string['action_preview_click'] = 'Clique aqui para receber um e-mail com este teste de modelo';
$string['action_preview_success'] = 'E-mail enviado com sucesso. Verifique a sua caixa de entrada ou a pasta de spam.';
$string['export_filename_prefix'] = 'kopereemail-modelos';
$string['export_title'] = 'Exportar modelos';
$string['import_file'] = 'Ficheiro JSON';
$string['import_file_help'] = 'Selecione o JSON exportado do outro ambiente.';
$string['import_invalid_json'] = 'Ficheiro inválido: JSON malformado.';
$string['import_invalid_payload'] = 'Ficheiro inválido: a estrutura de exportação não corresponde.';
$string['import_overwrite'] = 'Substituir modelos existentes';
$string['import_overwrite_help'] = 'Se estiver selecionado, os modelos existentes serão atualizados. Se não estiver selecionado, os modelos existentes serão ignorados.';
$string['import_success'] = 'Importação concluída.<br>&amp;nbsp;&amp;gt; <strong>Importados:</strong> {$a->imported}<br>&amp;nbsp;&amp;gt; <strong>Ignorados:</strong> {$a->skipped}<br>&amp;nbsp;&amp;gt; <strong>Wrapper atualizado:</strong> {$a->wrapper}.';
$string['import_title'] = 'Importar modelos';
$string['import_wrapper'] = 'Importar wrapper HTML (modelo base)';
$string['import_wrapper_help'] = 'Se estiver selecionado, o wrapper HTML do JSON substituirá o wrapper configurado neste ambiente.';
$string['messages'] = 'mensagens';
$string['placeholders_course_data_desc'] = 'Dados do curso (quando detetável).';
$string['placeholders_course_url_desc'] = 'URL do curso (quando detetável).';
$string['placeholders_dates_now_desc'] = 'Data/hora atual (userdate).';
$string['placeholders_desc'] = 'Pode usar placeholders do Mustache na mensagem.';
$string['placeholders_fullmessage_desc'] = 'Mensagem em texto simples.';
$string['placeholders_fullmessagehtml_desc'] = 'Mensagem em HTML (use chavetas triplas).';
$string['placeholders_site_fullname_desc'] = 'Nome completo do site (<code>{$SITE->fullname}</code>).';
$string['placeholders_site_logourl_desc'] = 'Logótipo do site (<img src="{$a->logo_url}" style="max-width:70px;max-height:70px;">).';
$string['placeholders_site_shortname_desc'] = 'Nome curto do site (<code>{$SITE->shortname}</code>).';
$string['placeholders_site_url_desc'] = 'URL do site (<code>{$CFG->wwwroot}</code>).';
$string['placeholders_subject_desc'] = 'Assunto da notificação atual.';
$string['placeholders_title'] = 'Placeholders disponíveis';
$string['placeholders_userfrom_data_desc'] = 'Dados do remetente.';
$string['placeholders_userto_data_desc'] = 'Dados do destinatário.';
$string['pluginname'] = 'Kopere Email';
$string['privacy:metadata:attachment'] = 'Ficheiro anexado no sistema de ficheiros.';
$string['privacy:metadata:attachname'] = 'Nome do anexo.';
$string['privacy:metadata:externalpurpose'] = 'Finalidade externa';
$string['privacy:metadata:fullmessage'] = 'Mensagem em texto simples.';
$string['privacy:metadata:fullmessagehtml'] = 'Mensagem em HTML.';
$string['privacy:metadata:recipient'] = 'Destinatário do e-mail.';
$string['privacy:metadata:replyto'] = 'E-mail de resposta (reply-to).';
$string['privacy:metadata:replytoname'] = 'Nome de resposta (reply-to).';
$string['privacy:metadata:subject'] = 'Assunto do e-mail.';
$string['privacy:metadata:userfrom'] = 'Remetente do e-mail.';
$string['settings_customtemplates'] = 'Mensagens personalizadas por provedor';
$string['settings_customtemplates_desc'] = 'Criar/editar uma mensagem personalizada para cada provedor de notificação.';
$string['settings_wrapper'] = 'Modelo base de e-mail (wrapper)';
$string['settings_wrapper_desc'] = 'Este HTML está formatado em Mustache e será aplicado como o modelo da mensagem a enviar ao estudante. O conteúdo HTML deve ser inserido onde estiver {{{fullmessagehtml}}}.';
$string['table_actions'] = 'Ações';
$string['table_component'] = 'Componente';
$string['table_name'] = 'Nome';
$string['table_provider'] = 'Provedor';
$string['template'] = 'Modelo';
$string['template_changue'] = 'Quero usar este modelo como predefinição do Kopere Mail';
$string['template_changued'] = 'Modelo atualizado com sucesso';
$string['template_delete_confirm'] = 'Tem a certeza de que pretende eliminar a mensagem personalizada deste provedor?';
$string['template_delete_title'] = 'Eliminar mensagem personalizada';
$string['template_deleted'] = 'Mensagem personalizada eliminada.';
$string['template_edit_bodyhtml'] = 'HTML da mensagem';
$string['template_edit_provider'] = 'Provedor';
$string['template_edit_save'] = 'Guardar';
$string['template_edit_subject'] = 'Assunto (opcional)';
$string['template_edit_title'] = 'Mensagem personalizada';
$string['template_preview'] = 'Pré-visualizar modelo';
$string['template_saved'] = 'Mensagem personalizada guardada.';
$string['templates_other'] = 'Outros modelos';
$string['templates_transfer_desc'] = 'Use este serviço para migrar configurações entre ambientes (ex.: staging -> produção).';
$string['templates_transfer_title'] = 'Exportar / Importar configurações';
