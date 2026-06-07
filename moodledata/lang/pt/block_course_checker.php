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
 * Strings for component 'block_course_checker', language 'pt', version '4.4'.
 *
 * @package     block_course_checker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activedates_noactivedates'] = 'Não deve haver datas ativas na secção "conclusão da atividade".';
$string['activedates_noactivedatesinactivity'] = 'Não deve haver datas ativas na atividade \'{$a->modtype}\'. Procure os seguintes campos: {$a->adateissetin}';
$string['activedates_setting_coursesregex'] = 'Filtro de expressão regular do nome completo da disciplina';
$string['activedates_setting_coursesregex_help'] = 'Defina a expressão regular para permitir que este verificador apenas corresponda aos nomes completos da disciplina.';
$string['activedates_setting_modules'] = 'Módulos ativos';
$string['activedates_setting_modules_help'] = 'Defina os módulos de atividade permitidos para serem verificados quanto a datas ativas (têm ser ativados em <a href="/admin/modules.php" target="_blank">Gerir atividades</a>).';
$string['activedates_success'] = 'A atividade \'{$a}\' está configurada corretamente';
$string['admin_domain_list_notvalid'] = 'A lista não é uma lista de domínios válida';
$string['admin_domain_name_default_missing'] = 'Nome do domínio em falta: {$a}';
$string['admin_domain_name_notvalid'] = 'Nome de domínio inválido: {$a}. Adicione apenas um nome de domínio por linha';
$string['admin_restrictedint_max'] = 'O valor máximo é {$a}';
$string['admin_restrictedint_min'] = 'O valor mínimo é {$a}';
$string['attendance_missingattendanceactivity'] = 'Falha na verificação da assiduidade - não existe a atividade Assiduidade nesta disciplina';
$string['attendance_missingplugin'] = 'Ignorar esta verificação porque o módulo Assiduidade (mod_attendance) não está instalado';
$string['attendance_onlyoneattendenceactivityallowed'] = 'Falha na verificação da assiduidade - apenas é permitida uma atividade Assiduidade';
$string['attendance_sessionsnotemty'] = 'Falha na verificação da assiduidade - não é permitido ter assiduidade das sessões';
$string['attendance_success'] = 'A atividade Assiduidade está configurada corretamente';
$string['automaticcheck'] = 'Última verificação automática';
$string['automaticcheckempty'] = 'Nunca foram efetuadas verificações nesta disciplina';
$string['backtocourse'] = 'Voltar à disciplina';
$string['blocks_activity'] = 'Bloco "{$a->name}"';
$string['blocks_comparison'] = ' (Disciplina de referência: "{$a->valuereference}" | Disciplina atual: "{$a->valuecurrent}")';
$string['blocks_error'] = 'O bloco está presente por engano ou está ausente na disciplina atual.';
$string['blocks_setting'] = 'Blocos ativos';
$string['blocks_setting_help'] = 'Defina os blocos permitidos para serem verificados (têm de ser ativados em <a href="/admin/blocks.php" target="_blank">Gerir blocos</a>).';
$string['blocks_success'] = 'O bloco foi adicionado corretamente na disciplna atual';
$string['check_failed'] = 'Erro';
$string['check_successful'] = 'Sucesso';
$string['checker_activedates'] = 'Verificação das datas ativas';
$string['checker_activedates_display'] = 'Datas ativas nas configurações da atividade';
$string['checker_attendance'] = 'Verificação da assiduidade das sessões';
$string['checker_attendance_display'] = 'Assiduidade das sessões';
$string['checker_blocks'] = 'Verificação de blocos';
$string['checker_blocks_display'] = 'O bloco existe';
$string['checker_col_block_header'] = 'Verificação';
$string['checker_data'] = 'Verificação dos dados da atividade';
$string['checker_data_display'] = 'Dados da atividade com campos';
$string['checker_groups'] = 'Verificação da submissão em grupo';
$string['checker_groups_display'] = 'Submissão de trabalhos em grupo';
$string['checker_last_run'] = 'Última execução: {$a}';
$string['checker_last_run_global'] = 'Data desconhecida para este verificador. A verificação global da disciplina foi em {$a}';
$string['checker_links'] = 'Verificação das hiperligações';
$string['checker_links_activity'] = 'Atividade: {$a->name}  ({$a->modname})';
$string['checker_links_book_chapter'] = 'Capítulo do livro: {$a->title}';
$string['checker_links_display'] = 'Hiperligações na descrição da disciplina e atividades URL';
$string['checker_links_error_code'] = 'Erro HTTP: \'{$a->http_code}\' em {$a->url}';
$string['checker_links_error_curl'] = 'Erro cURL: \'{$a->curl_errno} {$a->curl_error}\' em {$a->url}';
$string['checker_links_error_httpsecurity'] = 'O domínio indicado \'{$a}\' foi colocado na lista negra após verificar o seu endereço e número da porta nas listas negra/branca da segurança HTTP Moodle.';
$string['checker_links_error_skipped'] = 'O domínio {$a->host} está na lista branca de {$a->url}';
$string['checker_links_error_undefined'] = 'Ocorreu um erro indefinido com a hiperligação';
$string['checker_links_ok'] = '{$a->url} é válido (Código {$a->http_code})';
$string['checker_links_setting_connect_timeout'] = 'Tempo limite da ligação cURL';
$string['checker_links_setting_timeout'] = 'Tempo limite cURL';
$string['checker_links_setting_useragent'] = 'User Agent';
$string['checker_links_setting_useragent_help'] = 'A string User Agent (UA) ajuda a identificar que navegador está a ser usado, qual a versão e qual o sistema operativo.';
$string['checker_links_setting_whitelist'] = 'Lista branca do verificador de hiperligações';
$string['checker_links_setting_whitelist_desc'] = 'Tenha em atenção que <code>www.w3.org</code> tem de estar presente.';
$string['checker_links_setting_whitelist_help'] = 'Adicione um URL por linha, por exemplo: <code>https://moodle.org</code>';
$string['checker_links_summary'] = 'Descrição da disciplina';
$string['checker_links_wiki_page'] = 'Página de Wiki: {$a->title}';
$string['checker_quiz'] = 'Verificar testes';
$string['checker_quiz_display'] = 'Pontuação total na atividade Teste';
$string['checker_referencefilter_comparison'] = '(Disciplina de referência: "{$a->filtervaluereference}" | Disciplina atual: "{$a->filtervaluecurrent}")';
$string['checker_referencefilter_enabled'] = 'Verificação do filtro de configurações de referência ativada';
$string['checker_referencefilter_enabled_help'] = 'Ative para comparar todos os filtros da disciplina com a disciplina de referência.';
$string['checker_referencefilter_failing'] = 'O filtro "{$a->filterkey}" não está correto';
$string['checker_referencefilter_filternotsetincurrentcourse'] = 'O filtro "{$a->filterkey}" está em falta na disciplina atual.';
$string['checker_referencefilter_success'] = 'Todos os filtros estão definidos corretamente na disciplina atual';
$string['checker_referenceformatoptions_enabled'] = 'Verificação das opções do formato nas configurações de referência';
$string['checker_referenceformatoptions_enabled_help'] = 'Ative para comparar todas as opções do formato da disciplina com a disciplina de referência.';
$string['checker_referenceformatoptions_failing'] = 'A opção do formato "{$a->optionkey}" não está correta';
$string['checker_referenceformatoptions_success'] = 'Todas as opções do formato da disciplina atual estão definidas corretamente';
$string['checker_referencesettings'] = 'Verificação das configurações de referência';
$string['checker_referencesettings_checklist'] = 'Lista de configurações para verificação com a disciplina de referência';
$string['checker_referencesettings_checklist_help'] = 'Selecione uma ou várias configurações para verificar com a disciplina de referência.';
$string['checker_referencesettings_comparison'] = ' (Disciplina de referência: "{$a->settingvaluereference}" | Disciplina atual: "{$a->settingvaluecurrent}")';
$string['checker_referencesettings_display'] = 'Configurações comparadas com a disciplina de referência';
$string['checker_referencesettings_failing'] = 'A configuração "{$a->setting}" não está correta';
$string['checker_referencesettings_settingismissing'] = 'A configuração "{$a->setting}" não é uma configuração da disciplina';
$string['checker_referencesettings_success'] = 'A configuração "{$a->setting}" está correta';
$string['checker_subheadings'] = 'Verificação dos subtítulos dos separadores';
$string['checker_subheadings_display'] = 'Subtítulos dos separadores';
$string['checker_subheadings_setting_whitelist'] = 'Lista branca de strings na verificação de subtítulos';
$string['checker_subheadings_setting_whitelist_help'] = 'Adicione uma string por linha. Por exemplo: "Liebe (r) Module developer".';
$string['checker_userdata'] = 'Verificação dos dados do utilizador';
$string['checker_userdata_display'] = 'Dados do utilizador armazenados em atividades';
$string['course_checker:addinstance'] = 'Adicionar um novo o bloco Verificações da disciplina';
$string['course_checker:view'] = 'Ver o bloco Verificações da disciplina';
$string['course_checker:view_notification'] = 'Ver notificações do bloco Verificações da disciplina';
$string['course_checker:view_report'] = 'Mostrar a página dos resultados da verificação';
$string['data_success'] = 'A atividade Base de dados está configurada corretamente e os campos estão definidos';
$string['group_activities'] = 'Configurações da atividade';
$string['group_blocks'] = 'Configurações do bloco';
$string['group_course_settings'] = 'Configurações da disciplina';
$string['group_links'] = 'Validação das hiperligações';
$string['groups_activity'] = 'Atividade: "{$a->name}"';
$string['groups_deactivated'] = 'A configuração da submissão em grupo está desativada';
$string['groups_idmissing'] = 'A submissão em grupo está ativa, mas não está definido qualquer agrupamento';
$string['groups_lessthantwogroups'] = 'Foram definidos menos de 2 grupos para o agrupamento ativo';
$string['groups_missing'] = 'O agrupamento não foi configurado corretamente';
$string['groups_success'] = 'A configuração de submissão em grupo está bem definida';
$string['humancheck'] = 'Última verificação manual:';
$string['humancheck_comment_placeholder'] = 'Observação';
$string['humancheck_reason'] = 'Motivo:';
$string['humancheck_title'] = 'Defina a data da verificação manual:';
$string['humancheck_update'] = 'Atualizar revisão manual';
$string['humancheckempty'] = 'Esta disciplica nunca foi verificada manualmente';
$string['invalidtoken'] = 'O token é inválido';
$string['lastactivityedition'] = 'Última alteração da atividade';
$string['lastactivityedition_notimestamp'] = 'Nenhuma data encontrada';
$string['link'] = 'Hiperligação';
$string['link_col_page_header'] = 'Hiperligação para a resolução';
$string['message'] = 'Mensagem';
$string['message_col_page_header'] = 'Mensagem';
$string['messageprovider:checker_completed'] = 'A verificação da disciplina está concluída';
$string['messageprovider_allchecks_completed'] = 'As verificações estão concluídas.';
$string['messageprovider_allchecks_subject'] = 'As verificações na disciplina \'{$a->coursename}\' estão concluídas';
$string['messageprovider_result_html'] = 'Pode ver o resultado na {$a->urlhtml}';
$string['messageprovider_result_html_label'] = 'página de resultados dedicada';
$string['messageprovider_result_plain'] = 'Pode ver o resultado na {$a->url}';
$string['messageprovider_singlechecks_completed'] = 'A verificação \'{$a->checkername}\' está concluída.';
$string['messageprovider_singlechecks_subject'] = 'A verificação \'{$a->checkername}\' está concluído na disciplina {$a->coursename}';
$string['nogroupresults'] = 'Nada para verificar. Está tudo bem!';
$string['noresults'] = 'Esta disciplina nunca foi verificada automaticamente';
$string['pluginname'] = 'Verificações da disciplina';
$string['privacy:metadata'] = 'O bloco Verificações da disciplina contém apenas dados anónimos.';
$string['quiz_activity'] = 'Atividade: {$a->name} ({$a->modname})';
$string['quiz_grade_sum_error'] = 'A nota máxima ({$a->grade}) e total de pontuações ({$a->sumgrades}) devem ser iguais neste teste';
$string['quiz_grade_sum_success'] = 'Este teste está configurado corretamente';
$string['rerun_col_block_header'] = 'Executar novamente';
$string['rerun_disabled_col_block_header'] = 'Esta verificação já está programada para ser executada novamente';
$string['resolutionlink'] = 'Resolução:';
$string['result'] = 'Resultado';
$string['result_checker_disabled'] = 'Este verificador foi desativado pelo administrador.';
$string['result_checker_manualtask'] = 'Este verificador precisa de intervenção manual.';
$string['result_col_block_header'] = 'Resultado';
$string['result_col_page_header'] = 'Resultado';
$string['result_last_activity_empty'] = 'Nenhuma atividade modificada desde {$a}';
$string['result_last_activity_header'] = 'Últimas atividades modificadas';
$string['result_last_activity_header_date'] = 'Últimas atividades modificadas desde {$a}';
$string['resultpagegoto'] = 'Visualizar os resultados detalhados';
$string['resultpageheader'] = 'Visualizar os resultados detalhados';
$string['resultpagetitle'] = 'Visualizar os resultados detalhados da disciplina \'{$a->name}\'';
$string['resultpermissiondenied'] = 'Não tem permissão para aceder a esta página';
$string['runcheckbtn'] = 'Verificar esta disciplina';
$string['runcheckbtn_already'] = 'Esta disciplina já está programada para ser verificada automaticamente.';
$string['runcheckbtn_nocheckers'] = 'Não existem verificadores ativos.';
$string['settings_checker_dependency'] = '<div class="alert alert-warning">Ocorreu um erro na verificação da dependência. Verifique se o módulo \'<a href="/admin/modules.php" target="_blank">{$a}</a>\' está instalado e ativo.</div>';
$string['settings_checker_header'] = 'Configurações de \'{$a}\'';
$string['settings_checker_hide'] = '{$a} (oculto)';
$string['settings_checker_toggle'] = '{$a} ativado';
$string['settings_general'] = '<p>Se o verificador estiver desativado (após guardar as alterações) será mostrada abaixo uma nova configuração para ocultar e mostrar os resultados de cada verificador.</p>';
$string['settings_referencecourseid'] = 'ID da disciplina de referência';
$string['settings_rolesallowedmanual'] = 'Papéis para verificação manual';
$string['settings_rolesallowedmanual_description'] = 'Defina os papéis permitidos, que foram definidos globalmente ou por disciplina, para executar a verificação manual.';
$string['subheadings_generalerror'] = 'Ocorreu um erro ao executar esta verificação';
$string['subheadings_iconmissing'] = 'Está em falta o ícone na primeira tag html';
$string['subheadings_labelignored'] = 'Este separador é ignorado devido à lista branca na configuração do módulo.';
$string['subheadings_success'] = 'Este separador tem subtítulo e ícone corretos';
$string['subheadings_wrongfirsthtmltag'] = 'A primeira tag html não é um \'{$a->htmltag}\'';
$string['userdata_error'] = 'Não deve haver dados do utilizador na atividade \'{$a}\'.';
$string['userdata_help'] = 'Se pretender que estes dados sejam copiados para outras disciplinas, é necessário importá-los manualmente. Alguns manuais úteis: <a href="https://docs.moodle.org/38/en/Backup_of_user_data" target="_blank">Cópia de segurança de dados do utilizador</a> e <a href="https://docs.moodle.org/38/en/Reusing_activities" target="_blank">Reutilização de atividades</a>.';
$string['userdata_setting_coursesregex'] = 'Filtro de expressão regular do nome completo da disciplina';
$string['userdata_setting_coursesregex_help'] = 'Defina uma expressão regular, para que este verificador só seja executado se o nome completo da disciplina corresponder à expressão regular.';
$string['userdata_setting_modules'] = 'Módulos ativos';
$string['userdata_setting_modules_help'] = 'Defina os módulos permitidos para serem verificados quanto a dados do utilizador (têm de ser ativados em <a href="/admin/modules.php" target="_blank">Gerir atividades</a>, que contenham o método reset_userdata em <code>mod/{modname}/lib.php</code> e que sejam suportados por este módulo).';
$string['userdata_success'] = 'A atividade \'{$a}\' não contém dados do utilizador.';
