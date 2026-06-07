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
 * Strings for component 'debate', language 'pt', version '4.4'.
 *
 * @package     debate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['active'] = 'Ativo';
$string['attemptsdeleted'] = 'Respostas do debate apagadas';
$string['cancel'] = 'Cancelar';
$string['cancel_team_form'] = 'Cancelar';
$string['confirm_delete'] = 'Tem a certeza de que pretende apagar esta resposta?';
$string['cons'] = 'Contra';
$string['cons_response_count'] = 'Número de respostas do contra';
$string['cons_user_count'] = 'Número de utilizadores com resposta do contra';
$string['createnew'] = 'Criar uma nova equipa';
$string['debate:addinstance'] = 'Adicionar uma nova instância de debate';
$string['debate:deleteanyresponse'] = 'Apagar qualquer resposta do debate';
$string['debate:deleteownresponse'] = 'Apagar uma resposta do próprio no debate';
$string['debate:manageteams'] = 'Gerir equipas do debate';
$string['debate:updateownresponse'] = 'Atualizar uma resposta do próprio no debate';
$string['debate:view'] = 'Visualizar o conteúdo do debate';
$string['debate_team_active'] = 'Equipa do debate: \'{$a->name}\' foi ativada.';
$string['debate_team_active_error'] = 'Ocorreu um erro ao ativar a equipa do debate : {$a->name}.';
$string['debate_team_deactive'] = 'Equipa do debate: \'{$a->name}\' foi desativada.';
$string['debate_team_deactive_error'] = 'Ocorreu um erro ao desativar a equipa do debate : {$a->name}.';
$string['debate_team_delete_failed'] = 'Equipa do debate: \'{$a->name}\' não pode ser apagada.';
$string['debate_team_deleted'] = 'Equipa do debate: \'{$a->name}\' apagada com sucesso.';
$string['debate_team_saved'] = 'Equipa do debate apagada.';
$string['debate_teams'] = 'Equipas do debate';
$string['debate_topic'] = 'Tópico do debate';
$string['debatename'] = 'Nome do debate';
$string['debateresponsecom'] = 'Os alunos têm de responder';
$string['debateresponsecomgroup'] = 'Resposta obrigatória';
$string['delete'] = 'Apagar';
$string['delete_debate_team'] = 'Apagar equipa do debate';
$string['delete_debate_team_confirmation'] = 'Tem a certeza de que pretende apagar a equipa do debate: {$a->name}?';
$string['edit'] = 'Editar';
$string['edit_mode_active'] = 'Termine a edição da resposta, guarde ou cancele as alterações e tente adicionar outra resposta.';
$string['edit_negative_team'] = 'Editar equipa do contra';
$string['edit_positive_team'] = 'Editar equipa a favor';
$string['empty_response'] = 'Não é possível guardar respostas em branco.';
$string['error_add'] = 'Ocorreu um erro ao atualizar a resposta. Verifique a resposta digitada (só pode aceitar texto).';
$string['error_delete'] = 'Ocorreu um erro ao apagar a resposta. Verifique a base de dados, como administrador, ou atualize a página.';
$string['event_response_added'] = 'Resposta adicionada';
$string['event_response_added_desc'] = 'O utilizador com ID "{$a->userid}" adicionou a resposta com ID "{$a->objectid}" no debate com ID "{$a->debateid}"';
$string['event_response_deleted'] = 'Resposta apagada';
$string['event_response_deleted_desc'] = 'O utilizador com ID "{$a->userid}" apagou a resposta com ID "{$a->objectid}" no debate com ID "{$a->debateid}"';
$string['event_response_error'] = 'Erro na resposta do debate';
$string['event_response_error_desc'] = 'Ocorreu um erro com o utilizador com ID "{$a->userid}" ao tentar atualizar uma resposta do debate';
$string['event_response_updated'] = 'Resposta atualizada';
$string['event_response_updated_desc'] = 'O utilizador com ID "{$a->userid}" atualizou a resposta com ID "{$a->objectid}" no debate com ID "{$a->debateid}"';
$string['goback'] = 'Voltar';
$string['grade_debater'] = 'Debate de nota';
$string['groupselection'] = 'Selecionar grupos';
$string['id'] = 'ID';
$string['inactive'] = 'Inativo';
$string['join_debate'] = 'Juntar/Ver debate';
$string['manage_negative_team'] = 'Gerir equipas do contra';
$string['manage_positive_team'] = 'Gerir equipas a favor';
$string['manage_teams'] = 'Gerir equipas';
$string['maximum_character_2'] = 'Número de 2 dígitos máximo permitido para o número de respostas';
$string['maximum_character_255'] = 'Apenas é permitido um máximo de 255 caracteres.';
$string['missingidandcmid'] = 'ID do módulo da disciplina em falta';
$string['missingresponsetype'] = 'Tipo de resposta em falta';
$string['modulename'] = 'Debate';
$string['modulenameplural'] = 'Debates';
$string['name'] = 'Nome';
$string['no_more_response'] = 'Não é permitido à sua equipa adicionar mais respostas neste lado.';
$string['no_possible_match'] = 'Sem respostas correspondentes';
$string['no_team'] = 'A sua equipa não permite respostas neste lado.';
$string['one_response'] = 'Permitir uma resposta num dos lados';
$string['one_response_any_side'] = 'Apenas é permitida uma resposta num dos lados. Já não pode adicionar mais respostas.';
$string['one_response_each_side'] = 'Apenas é permitida uma resposta em cada lado. Já não pode adicionar mais respostas porque já respondeu neste lado.';
$string['pluginadministration'] = 'Administração do debate';
$string['pluginname'] = 'Debate';
$string['possible_match'] = 'Possíveis respostas correspondentes';
$string['pros'] = 'Prós';
$string['pros_response_count'] = 'Número de respostas a favor';
$string['pros_user_count'] = 'Número de utilizadores com resposta a favor';
$string['reset_debate_attempts'] = 'Apagar respostas do debate';
$string['reset_debate_teams'] = 'Apagar equipas do debate';
$string['responseallowed'] = 'Resposta permitida';
$string['save'] = 'Guardar';
$string['search:activity'] = 'Debate - informação da atividade';
$string['showinmodule'] = 'Mostrar descrição na página do módulo';
$string['showinmodule_help'] = 'Mostrar a descrição na página do módulo abaixo do tópico do debate';
$string['status'] = 'Estado';
$string['success_delete'] = 'Resposta apagada com sucesso';
$string['teamsdeleted'] = 'Equipas do debate apagadas';
$string['timemodified'] = 'Última modificação';
$string['topicheader'] = 'Tópico';
$string['two_response'] = 'Permitir uma resposta em cada lado';
$string['unlimited_response'] = 'Permitir respostas ilimitadas';
$string['update'] = 'Atualizar';
$string['use_teams'] = 'Usar configurações da equipa';
$string['user_response'] = 'Tipo de resposta';
