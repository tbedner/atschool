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
 * Strings for component 'local_course_checker', language 'pt', version '4.4'.
 *
 * @package     local_course_checker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Ação';
$string['activity'] = 'Atividade';
$string['admin_setting_coursesregex'] = 'Filtro de expressão regular do nome completo da disciplina';
$string['admin_setting_coursesregex_help'] = 'Defina a expressão regular para permitir que este verificador só seja executado quando corresponder ao nome completo da disciplina.';
$string['admin_setting_coursesregex_skip_course'] = 'A verificação foi ignorada nesta disciplina';
$string['admin_setting_coursesregex_skip_course_desc'] = 'A expressão regular não corresponde ao nome completo da disciplina.';
$string['admin_setting_regex_invalidregex'] = 'A expressão regular fornecida é inválida. Verifique a sua sintaxe.';
$string['admin_setting_restrictedint_max'] = 'O valor máximo é {$a}';
$string['admin_setting_restrictedint_min'] = 'O valor mínimo é {$a}';
$string['changes_last_check'] = 'Alterações desde a última verificação: {$a}';
$string['check_course'] = 'Verificar esta disciplina';
$string['check_course_in_progress'] = 'A verificar...';
$string['checker_last_run'] = 'Última execução: {$a}';
$string['checker_links_activity'] = 'Atividade: {$a->name} ({$a->modname})';
$string['checker_never_run'] = 'Nunca';
$string['course'] = 'Disciplina';
$string['course_checker:runcheck'] = 'Pode executar o verificador da disciplina';
$string['course_checker:view'] = 'Ver o verificador da disciplina';
$string['course_checker:view_navigation'] = 'Mostrar Verificador da disciplina no menu de navegação';
$string['course_checker:view_notification'] = 'Ver notificações do verificador da disciplina';
$string['course_section'] = 'Secção';
$string['created'] = 'Criado';
$string['deleted'] = 'Eliminado';
$string['details'] = 'Detalhes';
$string['error_checks'] = 'Erro';
$string['failed_checks'] = 'Falhou';
$string['groups_activity'] = 'Atividade "{$a->name}"';
$string['last_modified_activity'] = 'Atividades modificadas desde a última verificação';
$string['messageprovider:checker_completed'] = 'A verificação da disciplina está concluída';
$string['messageprovider:checker_failed'] = 'A verificação da disciplina falhou';
$string['messageprovider_completed'] = 'As verificações estão concluídas.';
$string['messageprovider_failed_notification_html'] = 'Olá {$a->firstname},<br><br>
Infelizmente, o verificador da disciplina <strong>{$a->coursename}</strong> não pôde ser concluído.<br><br>
Por favor, contacte o administrador.';
$string['messageprovider_failed_notification_small'] = 'A verificação da disciplina não pôde ser concluída.';
$string['messageprovider_following_checks_completed'] = 'As seguintes verificações foram concluídas:';
$string['messageprovider_greeting'] = 'Olá';
$string['messageprovider_result_label'] = 'Resultados';
$string['messageprovider_singlechecks_completed'] = 'A verificação {$a->checkername} está concluída.';
$string['messageprovider_singlechecks_subject'] = 'A verificação {$a->checkername} foi concluída na disciplina {$a->coursename}';
$string['messageprovider_subject'] = 'Verificações concluídas na disciplina {$a}';
$string['messageprovider_subject_failed'] = 'Ocorreu um erro durante a verificação da disciplina.';
$string['plugin_disabled'] = '{$a} desativado.';
$string['plugin_enabled'] = '{$a} ativado.';
$string['pluginname'] = 'Verificador da disciplina';
$string['privacy:metadata:action'] = 'A ação realizada (p.ex., criado, atualizado, eliminado).';
$string['privacy:metadata:checker_id'] = 'O ID da execução do verificador.';
$string['privacy:metadata:local_course_checker_event'] = 'Armazena eventos e registos de atividade do verificador da disciplina.';
$string['privacy:metadata:objectid'] = 'O ID do objeto afetado.';
$string['privacy:metadata:other'] = 'Dados adicionais do evento em formato JSON.';
$string['privacy:metadata:relateduserid'] = 'O utilizador relacionado afetado pelo evento.';
$string['privacy:metadata:target'] = 'O objeto alvo (p.ex., course_module).';
$string['privacy:metadata:timecreated'] = 'Data e hora em que o evento foi criado.';
$string['privacy:metadata:userid'] = 'O ID do utilizador que desencadeou o evento.';
$string['queue_check_task'] = 'Colocar verificação em fila';
$string['run_checker_task'] = 'Executar verificação';
$string['save_results'] = 'Guardar resultados';
$string['send_notification_task'] = 'Enviar notificação';
$string['settings_general'] = '<p>Recarregue a página ao ativar ou desativar um plugin.</p>';
$string['settings_name'] = 'Configurações gerais do verificador da disciplina';
$string['settings_referencecourseid'] = 'ID da disciplina de referência';
$string['subplugintype_coursechecker'] = 'Verificador da disciplina';
$string['subplugintype_coursechecker_plural'] = 'Verificadores da disciplina';
$string['successful_checks'] = 'Com sucesso';
$string['timestamp'] = 'Data/hora';
$string['unknown'] = 'Desconhecido';
$string['updated'] = 'Atualizado';
$string['user'] = 'Utilizador';
$string['warning_checks'] = 'Aviso';
