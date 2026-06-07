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
 * Strings for component 'local_profilecohort', language 'pt', version '4.4'.
 *
 * @package     local_profilecohort
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addintro'] = 'Neste separador, pode adicionar novas regras que irão mapear o valor de um campo personalizado de perfil do utilizador a um Grupo global ao qual o utilizador será adicionado.';
$string['addrule'] = 'Adicionar regra para o campo personalizado de perfil do utilizador';
$string['addrules'] = 'Adicionar regra';
$string['andnextrule'] = 'Para adicionar o utilizador a este Grupo global, a próxima regra também deve ser respeitada.';
$string['cohortsintro'] = 'Neste separador, pode selecionar os Grupos globais que pretende que sejam geridos por este módulo.<br>
Depois de selecionados, já não será possível atualizar manualmente os membros destes Grupos globais. Além disso, todos os utilizadores que atualmente são membros destes Grupos globais serão removidos dos Grupos globais e estes grupos serão preenchidos, a partir do zero, com os utilizadores que correspondem às regras que criou com este módulo.<br>
Se decidir descontinuar a gestão de um Grupo global com este módulo e desmarcá-lo aqui, todos os utilizadores que atualmente são membros deste Grupo global continuarão a ser membros. Além disso, pode voltar a atualizar manualmente os membros deste Grupo global.';
$string['delete'] = 'Apagar esta regra';
$string['iffield'] = 'Se "{$a}"';
$string['invisiblecohortsnote'] = '<b>Atenção</b>: Este módulo lida com os grupos globais ocultos exatamente da mesma forma que com os grupos globais visíveis. Por isso, a lista de grupos globais também inclui grupos globais que foram criados como ocultos.';
$string['match_contains'] = 'Contém';
$string['match_defined'] = 'Está definido';
$string['match_empty'] = 'Vazio';
$string['match_exact'] = 'Corresponde';
$string['match_notcontains'] = 'Não contém';
$string['match_notdefined'] = 'Não está definido';
$string['match_notempty'] = 'Não vazio';
$string['match_notexact'] = 'Não corresponde';
$string['matchtype'] = 'Corresponde ao tipo';
$string['matchvalue'] = 'Corresponde ao valor';
$string['members'] = 'Membros do Grupo global';
$string['membersintro'] = 'Neste separador, pode visualizar os utilizadores que atualmente são membros dos grupos globais geridos por este módulo.';
$string['moveto'] = 'Mover para a posição';
$string['nocohorts'] = 'Não existem grupos globais disponíveis para este módulo - vá a "{$a}" para criar grupos globais';
$string['nofields'] = 'Não foram definidos campos personalizados do perfil do utilizador.<br>É necessário definir campos de perfil do utilizador personalizados antes de poder adicionar regras - vá a "{$a}" para criar pelo menos um campo personalizado de perfil do utilizador';
$string['nousers'] = 'De momento, este Grupo global não tem utilizadores';
$string['pluginname'] = 'Grupos globais baseados em campo de perfil';
$string['privacy:metadata'] = 'O módulo Grupos globais baseados em campo de perfil fornece funcionalidade adicionais aos administradores do Moodle, mas não armazena quaisquer dados pessoais.';
$string['selectcohorts'] = 'Selecionar os grupos';
$string['selectvalue'] = 'o utilizador será adicionado ao Grupo global';
$string['updatecohorts'] = 'Atualizar grupos globais através de campos de perfil do utilizador personalizados';
$string['viewintro'] = 'Neste separador, pode definir as regras que mapeiam os campos personalizados de perfil do utilizador para os grupos globais ao qual o utilizador será adicionado.<br>
As regras definidas são processadas pela ordem em que são exibidas. No entanto, um utilizador que cumpra várias regras será adicionado a todos grupos globais relevantes.<br>
Nota: Quando as regras são alteradas, será agendada uma tarefa em segundo plano para atualizar todos os utilizadores afetados - haverá um pequeno atraso (alguns minutos, dependendo da configuração das tarefas agendadas no Moodle e no cronjob do servidor Moodle) antes que todas as associações de utilizadores nos grupos globais sejam atualizadas. No entanto, qualquer utilizador que inicie sessão antes da conclusão da tarefa em segundo plano será atualizado imediatamente.';
$string['viewrules'] = 'Ver/editar regras';
