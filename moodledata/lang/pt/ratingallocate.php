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
 * Strings for component 'ratingallocate', language 'pt', version '4.4'.
 *
 * @package     ratingallocate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['algorithm_already_running'] = 'Outra instância do algoritmo de alocação já está em execução. Aguarde alguns minutos e atualize a página.';
$string['algorithm_now_scheduled_for_cron'] = 'A execução do algoritmo de alocação foi agora agendada para execução pelo cron. Aguarde alguns minutos e atualize a página.';
$string['algorithm_scheduled_for_cron'] = 'A execução do algoritmo de alocação está agendada para execução imediata com a tarefa do cron. Aguarde alguns minutos e atualize a página.';
$string['algorithmforcebackground'] = 'Forçar o cálculo como tarefa em segundo plano';
$string['algorithmtimeout'] = 'Tempo limite do algoritmo';
$string['allocation_manual_explain_all'] = 'Selecione uma opção para ser atribuída a um utilizador.';
$string['allocation_manual_explain_only_raters'] = 'Selecione uma opção para ser atribuída a um utilizador.
Apenas estão listados os utilizadores que avaliaram pelo menos uma opção e que ainda não foram alocados.';
$string['allocation_notification_message'] = 'Tendo em conta a "{$a->ratingallocate}", foi designado/a para a opção "{$a->choice} ({$a->explanation})".';
$string['allocation_notification_message_subject'] = 'Alocação publicada para {$a}';
$string['allocation_statistics'] = 'Estatísticas da Alocação';
$string['allocation_statistics_description'] = 'Esta estatística mostra uma vista global da satisfação da alocação.
As alocações estão de acordo com a classificação que o utilizador deu à respectiva escolha.
<ul>
<li>{$a->rated} dos {$a->usersinchoice} utilizadores já avaliaram.</li>
<li>{$a->users} dos {$a->total} utilizadores obtiveram a escolha que avaliaram com "{$a->rating}"</li>
<li>{$a->unassigned} utilizadores ainda não foram alocados na opção pretendida.</li>
</ul>';
$string['allocation_statistics_description_no_alloc'] = 'Esta estatística mostra uma visão global da satisfação da alocação.
As alocações estão de acordo com a avaliação que o utilizador deu à respetiva opção.
<ul>
<li>Até ao momento, {$a->notrated} utilizadores ainda não avaliaram.</li>
<li>{$a->rated} utilizadores já avaliaram.</li>
<li>Ainda não foram feitas alocações.</li>
</ul>';
$string['allocation_table_description'] = 'Esta estatística mostra uma visão global de todas as alocações desta instância.</br>
Todos os utilizadores, que avaliaram mas não estão alocados, aparecem listados em \'Sem alocação\'';
$string['allocations_table'] = 'Visão global das Alocações';
$string['allocations_table_choice'] = 'Opção';
$string['allocations_table_noallocation'] = 'Sem alocação';
$string['allocations_table_users'] = 'Utilizadores';
$string['at_least_one_rateable_choices_needed'] = 'É necessário pelo menos uma opção para apreciação.';
$string['calendarstart'] = 'Abre {$a}';
$string['calendarstop'] = 'Fecha {$a}';
$string['choice_active'] = 'A opção está ativa';
$string['choice_active_help'] = 'Apenas as opções ativas são mostradas aos utilizadores. As opções inativas não são exibidas.';
$string['choice_added_notification'] = 'A sua escolha ficou registada.';
$string['choice_deleted_notification'] = 'A escolha "{$a}" foi eliminada.';
$string['choice_deleted_notification_error'] = 'Não foi possível encontrar a opção solicitada para eliminação.';
$string['choice_explanation'] = 'Descrição (opcional)';
$string['choice_groupselect'] = 'Grupos';
$string['choice_maxsize'] = 'Máximo de participantes';
$string['choice_maxsize_display'] = 'Número máximo de alunos';
$string['choice_table_active'] = 'Ativa';
$string['choice_table_explanation'] = 'Descrição';
$string['choice_table_maxsize'] = 'Tamanho Máximo';
$string['choice_table_title'] = 'Título';
$string['choice_table_tools'] = 'Edição';
$string['choice_table_usegroups'] = 'Grupos';
$string['choice_title'] = 'Título';
$string['choice_title_help'] = 'Título da escolha. *Atenção* todas as opções ativas serão mostradas com ordenação pelo título.';
$string['choice_usegroups'] = 'Restringir a visibilidade por grupos';
$string['choice_usegroups_help'] = '* Se selecionada, esta opção ficará visível apenas para os membros dos grupos especificados.
* Desativar a restrição significa que esta opção estará disponível para qualquer pessoa.
* Ativar a restrição sem especificar um único grupo significa que esta escolha *não* estará disponível para ninguém.';
$string['choicestatusheading'] = 'Estado';
$string['closebeforeopen'] = 'Esta atividade tem de terminar depois de iniciar.';
$string['configalgorithmforcebackground'] = 'Mesmo que acionada manualmente pelo utilizador, a distribuição será sempre calculada em segundo plano.';
$string['configalgorithmtimeout'] = 'Tempo em segundos após o qual o algoritmo é assumido como emperrado.
A execução atual é terminada e marcada como Falhou.';
$string['configdownloaduserfields'] = 'Ao descarregar uma tabela com utilizadores, podem ser mostrados estes campos para além do nome e apelido dos utilizadores.';
$string['confirm_delete_all_ratings'] = 'Tem certeza de que pretende apagar todas as avaliações que os alunos enviaram até agora?';
$string['confirm_start_distribution'] = 'Executar o algoritmo apagará todas as alocações já existentes (se for o caso). Tem a certeza de que pretende continuar?';
$string['create_moodle_groups'] = 'Criar grupos a partir da alocação';
$string['crontask'] = 'Alocação automatizada da Justa Alocação';
$string['csvempty'] = 'O ficheiro CSV está vazio.';
$string['csvupload'] = 'Carregar CSV';
$string['csvupload_explanation'] = 'Opções do carregamento em massa por através de ficheiro CSV';
$string['csvupload_further_problems'] = '{$a} outros problemas encontrados, mas não exibidos.';
$string['csvupload_live_problems'] = 'Problemas encontrados na importação do CSV: {$a}';
$string['csvupload_live_success'] = 'Importação de CSV bem-sucedida. {$a->importcount} opções importadas.';
$string['csvupload_missing_fields'] = 'Colunas em falta na importação de CSV: {$a}';
$string['csvupload_missing_groups'] = 'Linha {$a->row}: grupo(s) não disponível(is) na disciplina: [{$a->invalidgroups}]';
$string['csvupload_test_problems'] = 'Problemas encontrados no teste de importação de CSV: {$a}';
$string['csvupload_test_success'] = 'Teste de importação de CSV bem-sucedido. {$a->importcount} opções podem ser importadas.';
$string['csvupload_test_upload'] = 'Testar carregamento';
$string['csvupload_test_upload_help'] = 'Quando selecionado: testa o ficheiro CSV carregado para problemas de dados, mas não se compromete com a base de dados.';
$string['csvupload_too_long_title'] = 'Título muito longo (> 255 caracteres): {$a}';
$string['delete_all_ratings'] = 'Apagar todas as classificações dos alunos';
$string['delete_all_ratings_explanation'] = 'Apaga todas as classificações que os alunos enviaram até agora e todas as alocações que podem ter sido criadas com base nestas classificações. Use com cuidado.';
$string['delete_choice'] = 'Apagar opção';
$string['delete_rating'] = 'Apagar apreciação';
$string['deletechoice'] = 'Apagar opção';
$string['deleteconfirm'] = 'Tem a certeza de que pretende apagar a opção "{$a}"?';
$string['distribute_unallocated_equally_confirm'] = 'Todos os utilizadores atualmente não alocados serão distribuídos pelas opções.
As opções serão preenchidas equitativamente, o que faz com que todas terão aproximadamente o mesmo número de vagas vazias.';
$string['distribute_unallocated_fill_confirm'] = 'Todos os utilizadores atualmente não alocados serão distribuídos pelas opções.
Cada opção será preenchida até ao máximo antes de atribuir utilizadores à próxima opção.';
$string['distributeequally'] = 'Distribuir equitativamente utilizadores não alocados';
$string['distributefill'] = 'Distribuir utilizadores não alocados por preenchimento';
$string['distributing_unallocated_users_started'] = 'A distribuição de utilizadores não alocados foi iniciada. Aguarde um momento e depois consulte a tabela de distribuição.';
$string['distribution_algorithm'] = 'Algoritmo de distribuição';
$string['distribution_description'] = 'Distribuição dos utilizadores não alocados';
$string['distribution_description_help'] = 'Pode escolher entre dois diferentes algoritmos para distribuir os utilizadores atualmente não alocados.<br/>
<i>Distribuir equitativamente:</i> Os utilizadores são distribuídos de modo equitativo entre as opções em relação ao máximo de cada escolha.<br/>
<i>Por preenchimento:</i> Cada opção é preenchida com utilizadores antes de preencher a próxima opção. Opções com menos lugares restantes são preenchidas primeiro.<br/><br/>
As restrições do grupo serão respeitadas.';
$string['distribution_published'] = 'A alocação foi publicada.';
$string['distribution_saved'] = 'Distribuição guardada (em {$a}s).';
$string['distribution_table'] = 'Tabela da distribuição';
$string['distribution_unallocated_already_running'] = 'A distribuição de utilizadores não alocados está a ser processada. Aguarde um momento e recarregue a página para verificar se já foi concluída.';
$string['download_problem_mps_format'] = 'Descarregar Equação (mps/txt)';
$string['downloaduserfields'] = 'Campos de utilizador adicionais para descarregar';
$string['edit_choice'] = 'Editar a escolha';
$string['edit_rating'] = 'Alterar apreciação';
$string['err_maximum'] = 'O valor máximo para este campo é {$a}.';
$string['err_minimum'] = 'O valor mínimo para este campo é {$a}.';
$string['err_positivnumber'] = 'Deve indicar aqui um número positivo.';
$string['err_required'] = 'Tem de indicar um valor para este campo.';
$string['error_deleting_all_insufficient_permission'] = 'Não tem permissão para esta operação';
$string['error_deleting_all_no_rating_possible'] = 'Não pode apagar as classificações quando a fase de classificação já terminou';
$string['export_choice_alloc_suffix'] = '- Alocação';
$string['export_choice_text_suffix'] = '- Texto';
$string['export_options'] = 'Opções da exportação';
$string['filter_hide_users_without_rating'] = 'Ocultar alunos sem apreciação';
$string['filter_show_alloc_necessary'] = 'Ocultar alunos com apreciação';
$string['filtergroup'] = 'Filtrar grupo';
$string['filtergroup_help'] = '* Selecione um grupo para filtrar os participantes da disciplina de acordo com os grupos a que pertencem, e as escolhas dos grupos que tiveram a capacidade de aceder.
* Apenas podem ser selecionados os grupos usados na opção *usar grupos*.
* Se *nenhum grupo* for selecionado, serão mostrados os utilizadores que não estão em nenhum dos grupos usados por uma escolha.';
$string['filtermanualtabledesc'] = 'Descreve os filtros aplicados à tabela do formulário de alocação manual.';
$string['filtertabledesc'] = 'Descreve os filtros aplicados à tabela de alocação.';
$string['groupingname'] = 'Justa Alocação "{$a}"';
$string['invalid_dates'] = 'As datas são inválidas. A data de início deve ser anterior à data de fim.';
$string['invalid_publishdate'] = 'A data de publicação é inválida. A data de publicação deve ser posterior ao final da classificação.';
$string['is_published'] = 'Publicado';
$string['last_algorithm_run_date'] = 'Última execução do algoritmo';
$string['last_algorithm_run_date_none'] = '-';
$string['last_algorithm_run_status'] = 'Estado da última execução';
$string['last_algorithm_run_status_-1'] = 'Falhou';
$string['last_algorithm_run_status_0'] = 'Não iniciada';
$string['last_algorithm_run_status_1'] = 'Em execução';
$string['last_algorithm_run_status_2'] = 'Bem sucedido';
$string['log_all_ratings_deleted'] = 'Todas as classificações de uma instância de Justa Alocação foram apagadas';
$string['log_all_ratings_deleted_description'] = 'O utilizador com ID "{$a->userid}" apagou todas as classificações da Justa Alocação com ID "{$a->ratingallocateid}".';
$string['log_allocation_published'] = 'Alocação publicada';
$string['log_allocation_published_description'] = 'O utilizador "{$a->userid}" publicou a alocação referente à Justa Alocação "{$a->ratingallocateid}".';
$string['log_allocation_statistics_viewed'] = 'Visualizadas as estatísticas da alocação';
$string['log_allocation_statistics_viewed_description'] = 'O utilizador "{$a->userid}" visualizou as estatísticas da alocação referentes à Justa Alocação "{$a->ratingallocateid}".';
$string['log_allocation_table_viewed'] = 'Visualizada a tabela da alocação';
$string['log_allocation_table_viewed_description'] = 'O utilizador "{$a->userid}" visualizou a tabela da alocação referentes à Justa Alocação "{$a->ratingallocateid}".';
$string['log_distribution_triggered'] = 'Distribuição iniciada';
$string['log_distribution_triggered_description'] = 'O utilizador "{$a->userid}" desencadeou a distribuição da Justa Alocação "{$a->ratingallocateid}". O algoritmo demorou {$a->time_needed} segundos.';
$string['log_index_viewed'] = 'O utilizador visualizou todas as instâncias de Justa Alocação';
$string['log_index_viewed_description'] = 'O utilizador com ID "{$a->userid}" visualizou todas as instâncias de Justa Alocação desta disciplina.';
$string['log_manual_allocation_saved'] = 'Guardada a alocação manual';
$string['log_manual_allocation_saved_description'] = 'O utilizador "{$a->userid}" guardou a alocação manual da Justa Alocação "{$a->ratingallocateid}".';
$string['log_rating_deleted'] = 'Apreciação do utilizador apagada';
$string['log_rating_deleted_description'] = 'O utilizador com ID "{$a->userid}" apagou a respetiva apreciação da Justa Alocação com ID "{$a->ratingallocateid}".';
$string['log_rating_saved'] = 'Guardada a apreciação do utilizador';
$string['log_rating_saved_description'] = 'O utilizador "{$a->userid}" guardou a sua apreciação referente à Justa Alocação "{$a->ratingallocateid}".';
$string['log_rating_viewed'] = 'Visualizada a apreciação do utilizador';
$string['log_rating_viewed_description'] = 'O utilizador "{$a->userid}" visualizou a sua apreciação da Justa Alocação "{$a->ratingallocateid}".';
$string['log_ratingallocate_viewed'] = 'Visualizada';
$string['log_ratingallocate_viewed_description'] = 'O utilizador "{$a->userid}" visualizou a Justa Alocação "{$a->ratingallocateid}".';
$string['log_ratings_and_allocation_table_viewed'] = 'Visualizadas as classificações e tabela de alocação';
$string['log_ratings_and_allocation_table_viewed_description'] = 'O utilizador com ID "{$a->userid}" visualizou as classificações e a tabela de alocação da Justa Alocação com ID "{$a->ratingallocateid}".';
$string['manual_allocation'] = 'Alocação Manual';
$string['manual_allocation_form'] = 'Formulário de Alocação Manual';
$string['manual_allocation_nothing_to_be_saved'] = 'Nada para guardar.';
$string['manual_allocation_saved'] = 'A sua alocação manual foi guardada.';
$string['messageprovider:allocation'] = 'Notificação sobre a alocação publicada';
$string['messageprovider:notifyalloc'] = 'Notificação da opção de alocação';
$string['modify_allocation_group'] = 'Modificar Alocação';
$string['modify_allocation_group_desc_published'] = 'As alocações já foram publicadas. Só pode alterá-las com muito cuidado.
Se proceder as alterações, por favor, informe os alunos sobre as mudanças!';
$string['modify_allocation_group_desc_rating_in_progress'] = 'A fase de apreciação está a decorrer. Pode iniciar o processo de alocação após a fase de apreciação terminar.';
$string['modify_allocation_group_desc_ready'] = 'A fase de apreciação terminou. Pode executar o algoritmo para uma alocação automática.';
$string['modify_allocation_group_desc_ready_alloc_started'] = 'A fase de apreciação terminou. Algumas alocações já foram criadas.
Ao voltar a executar o algoritmo irá apagar todas as alocações atuais.
Pode modificar as alocações manualmente ou prosseguir com a publicação das alocações.';
$string['modify_allocation_group_desc_too_early'] = 'A fase de apreciação ainda não está a decorrer. Pode iniciar o processo de alocação após a fase de apreciação terminar.';
$string['modify_choices'] = 'Editar escolhas';
$string['modify_choices_explanation'] = 'Mostra a lista de todas as opções. Pode ocultar, alterar e apagar escolhas';
$string['modify_choices_group'] = 'Escolhas';
$string['modify_choices_group_desc_published'] = 'As alocações já foram publicadas, por isso, NÃO é recomendável alterar as escolhas.';
$string['modify_choices_group_desc_rating_in_progress'] = 'A apreciação está a decorrer, não deve alterar o conjunto de escolhas disponíveis nesta etapa.';
$string['modify_choices_group_desc_ready'] = 'A fase de apreciação terminou. A partir daqui, pode agora modificar o número de alunos para cada cada escolha ou desativar algumas escolhas para variar o resultado da distribuição.';
$string['modify_choices_group_desc_ready_alloc_started'] = 'A fase de apreciação terminou. A partir daqui, pode agora modificar o número de alunos para cada cada escolha ou desativar algumas escolhas para variar o resultado da distribuição.';
$string['modify_choices_group_desc_too_early'] = 'As escolhas/opções podem ser especificadas aqui (adicionar, editar e eliminar) assim como, quais as que devem estar disponíveis para os alunos.';
$string['modulename'] = 'Justa Alocação';
$string['modulename_help'] = 'O módulo de Justa Alocação permite definir diferentes escolhas que os participantes podem avaliar. Os participantes podem ser distribuídos automaticamente pelas escolhas disponíveis de acordo com suas classificações.';
$string['modulenameplural'] = 'Justas Alocações';
$string['moodlegroups_created'] = 'Foram criados os correspondentes grupos e agrupamento do Moodle.';
$string['newchoice'] = 'Adicionar nova escolha';
$string['newchoicetitle'] = 'Nova escolha {$a}';
$string['no_allocation_notification_message'] = 'No que diz respeito a "{$a->ratingallocate}", não pode ser atribuído a nenhuma opção.';
$string['no_choice_to_rate'] = 'Não existem escolhas para apreciação!';
$string['no_id_or_m_error'] = 'Tem de especificar um ID do módulo da disciplina ou um ID da instância';
$string['no_rating_given'] = 'Não classificada';
$string['no_rating_possible'] = 'De momento, não é possível apreciação!';
$string['no_user_to_allocate'] = 'Não há nenhum utilizador que possa ser alocado';
$string['openafterclose'] = 'Esta atividade tem de iniciar antes de terminar.';
$string['pluginadministration'] = 'Administração da Justa Alocação';
$string['pluginname'] = 'Justa Alocação';
$string['privacy:metadata:preference:flextable_filter'] = 'Armazena os filtros aplicados à tabela de alocações.';
$string['privacy:metadata:preference:flextable_manual_filter'] = 'Armazena os filtros que são aplicados à tabela de alocações manuais.';
$string['privacy:metadata:ratingallocate_allocations'] = 'Informação sobre as escolhas alocadas pelo utilizador numa instância da atividade.';
$string['privacy:metadata:ratingallocate_allocations:choiceid'] = 'ID da escolha à qual o utilizador foi alocado';
$string['privacy:metadata:ratingallocate_allocations:ratingallocateid'] = 'ID da instância da atividade à qual esta alocação pertence';
$string['privacy:metadata:ratingallocate_allocations:userid'] = 'ID do utilizador que foi alocado para uma escolha';
$string['privacy:metadata:ratingallocate_ratings'] = 'Informação sobre as avaliações do utilizador para determinadas escolhas.';
$string['privacy:metadata:ratingallocate_ratings:choiceid'] = 'ID da escolha que o utilizador avaliou';
$string['privacy:metadata:ratingallocate_ratings:rating'] = 'A avaliação que um utilizador fez a uma escolha.';
$string['privacy:metadata:ratingallocate_ratings:userid'] = 'ID do utilizador que avalia esta escolha';
$string['publish_allocation'] = 'Publicar alocações';
$string['publish_allocation_group'] = 'Publicar alocações';
$string['publish_allocation_group_desc_published'] = 'As alocações já estão publicadas.
Pode optar por criar grupos dentro da disciplina para todas as alocações.
Se os mesmos grupos já foram criados por este módulo, eles serão limpos (remover utilizadores) antes de serem preenchidos.';
$string['publish_allocation_group_desc_rating_in_progress'] = 'A fase de apreciação ainda está a decorrer. Aguarde até que termine e em seguida, comece a criar as alocações.';
$string['publish_allocation_group_desc_ready'] = 'Ainda não foram feitas alocações. Consulte a secção de Modificar Alocação.';
$string['publish_allocation_group_desc_ready_alloc_started'] = 'As alocações já podem ser publicadas.
Depois de publicar as alocações, já não podem ser alteradas.
Por favor, verifique as alocações atuais através da hiperligação na secção de relatórios.
Pode optar por criar grupos dentro da disciplina para todas as alocações.
Se os mesmos grupos já foram criados por este módulo, eles serão limpos (remover utilizadores) antes de serem preenchidos.
Esta operação pode ser feita antes e depois de publicar as alocações.';
$string['publish_allocation_group_desc_too_early'] = 'A fase de apreciação ainda não começou. Aguarde até que termine e em seguida, comece a criar alocações.';
$string['publishdate'] = 'Data prevista para publicação';
$string['publishdate_estimated'] = 'Data prevista para publicação';
$string['rateable_choices'] = 'Escolhas em apreciação:';
$string['rated'] = 'classificadas {$a}';
$string['rating_begintime'] = 'Apreciação inicia a';
$string['rating_endtime'] = 'Apreciação termina a';
$string['rating_is_over'] = 'A fase de apreciação já terminou.';
$string['rating_is_over_no_allocation'] = 'A fase de apreciação já terminou. Não pode ser alocado a nenhuma escolha.';
$string['rating_is_over_with_allocation'] = 'A fase de apreciação já terminou. Foi alocado para \'{$a}\'.';
$string['rating_raw'] = '{$a}';
$string['ratingallocate'] = 'Justa Alocação';
$string['ratingallocate:addinstance'] = 'Adicionar nova instância de Justa Alocação';
$string['ratingallocate:distribute_unallocated'] = 'Permissão para distribuir automaticamente utilizadores não alocados';
$string['ratingallocate:export_ratings'] = 'Permissão para exportar classificações do utilizador';
$string['ratingallocate:give_rating'] = 'Criar ou editar escolhas';
$string['ratingallocate:modify_choices'] = 'Permissão para modificar, editar ou apagar o conjunto de opções da Justa Alocação';
$string['ratingallocate:start_distribution'] = 'Começar a alocação dos utilizadores pelas escolhas';
$string['ratingallocate:view'] = 'Ver instância de Justa Alocação';
$string['ratingallocatename'] = 'Nome';
$string['ratingallocatename_help'] = 'Indique o nome para esta atividade de Justa Alocação';
$string['ratings_and_allocations_deleted'] = 'Classificações e alocações apagadas';
$string['ratings_deleted'] = 'As suas apreciações foram apagadas.';
$string['ratings_saved'] = 'As suas classificações ficaram registadas.';
$string['ratings_table'] = 'Classificações e Alocações';
$string['ratings_table_sum_allocations'] = 'Número de alocações/Máximo';
$string['ratings_table_sum_allocations_value'] = '{$a->sum} / {$a->max}';
$string['ratings_table_user'] = 'Utilizador';
$string['remove_ratings_and_allocations'] = 'Apagar todas as classificações e alocações';
$string['reports_group'] = 'Relatórios';
$string['results_not_yet_published'] = 'Os resultados ainda não foram publicados.';
$string['runalgorithmbycron'] = 'Alocação automática após período de apreciação';
$string['runalgorithmbycron_help'] = 'Executa automaticamente o algoritmo de alocação após terminar o período de apreciação. No entanto, os resultados têm de ser publicados manualmente.';
$string['saveandcontinue'] = 'Guardar e continuar';
$string['saveandnext'] = 'Guardar e adicionar seguinte';
$string['select_strategy'] = 'Modo de classificação';
$string['select_strategy_help'] = 'Escolha o modo de classificação das opções:

* **Aceitar-Rejeitar** O utilizador decide se aceita ou rejeita cada opção.
* **Aceitar-Neutral-Rejeitar** O utilizador decide se aceita, rejeita ou é neutral para cada opção.
* **Escala Likert** O utilizador pode avaliar cada opção com um número de um intervalo definido. O intervalo de números pode ser definido individualmente (começa com 0). O valor mais alto corresponde a uma alta preferência.
* **Pontuar** O utilizador pode avaliar as opções atribuindo um número de pontos a cada uma. O número máximo de pontos a atribuir pode ser definido individualmente. Um número elevado de pontos corresponde a uma alta preferência.
* **Ordenação** O utilizador tem de avaliar as opções disponíveis. O números de opções que devem ser avaliadas pode ser definido individualmente.
* **Aceitação** O utilizador pode indicar se aceita ou não em cada opção.';
$string['show_allocation_statistics'] = 'Mostrar estatísticas da alocação';
$string['show_allocation_table'] = 'Mostrar Visão global das Alocações';
$string['show_choices_header'] = 'Lista de escolhas';
$string['show_table'] = 'Mostrar Classificações e Alocações';
$string['start_distribution'] = 'Executar Algoritmo de Alocação';
$string['start_distribution_explanation'] = 'O algoritmo tentará automaticamente alocar os utilizadores de acordo com suas apreciações.';
$string['strategy_altered_after_preferences'] = 'A estratégia não pode ser alterada após as preferências serem enviadas';
$string['strategy_lickert_max_no'] = 'Apenas pode atribuir 0 pontos, no máximo, a {$a} escolha(s).';
$string['strategy_lickert_name'] = 'Escala Likert';
$string['strategy_lickert_rating_biggestwish'] = '{$a} - Excelente';
$string['strategy_lickert_rating_exclude'] = '{$a} - Péssimo';
$string['strategy_lickert_setting_maxlickert'] = 'O maior valor na Escala Likert (3, 5 ou 7 são os mais usuais)';
$string['strategy_lickert_setting_maxno'] = 'Número máximo de escolhas que o utilizador pode classificar com 0';
$string['strategy_not_specified'] = 'Tem de escolher o modo de classificação';
$string['strategy_order_choice_none'] = 'Selecione uma escolha';
$string['strategy_order_explain_choices'] = 'Selecione uma opção em cada caixa de seleção. À primeira escolha é atribuída a maior prioridade, e assim por diante.';
$string['strategy_order_header_description'] = 'Escolhas disponíveis';
$string['strategy_order_name'] = 'Ordenar escolhas';
$string['strategy_order_no_choice'] = '{$a}. Opção';
$string['strategy_order_setting_countoptions'] = 'Número mínimo de campos em que o utilizador tem de votar (igual ou menor que o número de opções!)';
$string['strategy_order_use_only_once'] = 'As escolhas não podem ser selecionadas duas vezes e devem ser exclusivas.';
$string['strategy_points_explain_distribute_points'] = 'Atribua pontos para cada escolha. Tem um total de {$a} pontos para distribuir. Priorize a melhor escolha, dando o máximo de pontos possível.';
$string['strategy_points_explain_max_per_choice'] = 'Pode atribuir no máximo {$a} pontos a uma única opção.';
$string['strategy_points_explain_max_zero'] = 'Apenas pode atribuir 0 pontos no máximo a {$a} escolha(s).';
$string['strategy_points_illegal_entry'] = 'Os pontos que pode atribuir a uma opção devem estar entre 0 e {$a}.';
$string['strategy_points_incorrect_totalpoints'] = 'Número total de pontos incorreto. A soma de todos os pontos tem que ser igual a {$a}.';
$string['strategy_points_max_count_zero'] = 'Pode atribuir 0 pontos a pelo menos {$a} opções.';
$string['strategy_points_name'] = 'Pontuar';
$string['strategy_points_setting_maxperchoice'] = 'Número máximo de pontos que o utilizador pode atribuir a uma única escolha';
$string['strategy_points_setting_maxzero'] = 'Número máximo de opções a que o utilizador pode atribuir 0 pontos';
$string['strategy_points_setting_totalpoints'] = 'Número total de pontos que o utilizador pode atribuir';
$string['strategy_settings_default'] = 'Valor predefinido do formulário de classificação';
$string['strategy_settings_default_help'] = 'O formulário de classificação, fornecido pelos utilizadores, irá conter um conjunto de botões de rádio para cada opção disponível.
Esta opção define o valor predefinido com o qual os botões de rádio são inicializados.';
$string['strategy_settings_label'] = 'Designação para "{$a}"';
$string['strategy_tickyes_accept'] = 'Aceitar';
$string['strategy_tickyes_error_mintickyes'] = 'Tem de marcar pelo menos {$a} escolha(s).';
$string['strategy_tickyes_explain_mintickyes'] = 'Tem que marcar um mínimo de {$a} escolha(s).';
$string['strategy_tickyes_name'] = 'Aceitação';
$string['strategy_tickyes_not_accept'] = '-';
$string['strategy_tickyes_setting_mintickyes'] = 'Número mínimo de opções para aceitar';
$string['strategy_yesmaybeno_max_count_no'] = 'Só pode atribuir "Rejeitar", no máximo, a {$a} escolha(s).';
$string['strategy_yesmaybeno_max_no'] = 'Só pode atribuir "Rejeitar" a {$a} escolha(s).';
$string['strategy_yesmaybeno_name'] = 'Aceitar-Neutral-Rejeitar';
$string['strategy_yesmaybeno_rating_maybe'] = 'Neutral';
$string['strategy_yesmaybeno_rating_no'] = 'Rejeitar';
$string['strategy_yesmaybeno_rating_yes'] = 'Aceitar';
$string['strategy_yesmaybeno_setting_maxno'] = 'Número máximo de escolhas que o utilizador pode classificar com "Rejeitar"';
$string['strategy_yesno_max_no'] = 'Só pode atribuir "Rejeitar" a {$a} escolha(s).';
$string['strategy_yesno_maximum_crossout'] = 'Só pode atribuir "Rejeitar", no máximo, a {$a} escolha(s).';
$string['strategy_yesno_name'] = 'Aceitar-Rejeitar';
$string['strategy_yesno_rating_choose'] = 'Aceitar';
$string['strategy_yesno_rating_crossout'] = 'Rejeitar';
$string['strategy_yesno_setting_crossout'] = 'Número máximo de opções que o utilizador pode classificar com "Rejeitar"';
$string['strategyname'] = 'Modo de classificação: {$a}';
$string['strategyspecificoptions'] = 'Opções específicas da estratégia';
$string['success_deleting_all'] = 'Apagar todas as classificações';
$string['timeremaining'] = 'Tempo restante';
$string['title_too_long_error'] = 'O título da escolha possui muitos caracteres, são permitidos apenas 255.';
$string['too_early_to_distribute'] = 'Ainda não é possível efetuar a distribuição. A fase de apreciação ainda não terminou.';
$string['too_early_to_rate'] = 'Ainda não é possível efetuar a apreciação. Tente mais tarde.';
$string['too_few_choices_to_rate'] = 'Existem poucas opções para apreciar! Os alunos têm que avaliar pelo menos {$a} opções!';
$string['unassigned_users'] = 'Utilizadores não atribuídos';
$string['update_filter'] = 'Atualizar filtro';
$string['upload_choices'] = 'Carregar opções via CSV';
$string['upload_choices_fields_desc'] = 'Os ficheiros CSV enviados através deste formulário têm de ser codificados em UTF-8 e incluir os seguintes campos da opção:<br/><pre>{$a}</pre>
O ficheiro tem de ter uma linha de cabeçalho. Grupos múltiplos devem ser separados por ponto e vírgula. A coluna "active" deve conter 1 ou 0 para tornar a opção ativada ou desativada.<br/>
Exemplo de conteúdo do ficheiro:
<pre>
title,explanation,maxsize,active,groups
Opção Um,Esta é a descrição da opção um,15,1,Grupo A;Grupo B;Grupo C
Opção Dois,Esta é a descrição da opção dois,12,0,Grupo A;Grupo D
</pre>';
$string['upload_choices_required_fields'] = 'Campos obrigatórios';
$string['userid'] = 'ID do utilizador';
$string['you_are_not_allocated'] = 'Não foi alocado a qualquer opção!';
$string['your_allocated_choice'] = 'A sua alocação';
$string['your_rating'] = 'A sua classificação';
