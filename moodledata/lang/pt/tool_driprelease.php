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
 * Strings for component 'tool_driprelease', language 'pt', version '4.4'.
 *
 * @package     tool_driprelease
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiespersession'] = 'Atividades por sessão';
$string['activitiespersession_help'] = 'Quantos itens por sessão, por exemplo, se "Atividades por sessão" estiver definido para 5 e "Duração da sessão" estiver definido para 7 (dias), os alunos verão 5 atividades por semana';
$string['activitiespersession_text'] = 'Define o número de atividades disponíveis em cada sessão, por exemplo, se uma sessão durar uma semana, 5 dar-lhe-á uma por dia.';
$string['activitiespersessionerror'] = 'As atividades por sessão está definido para {$a->activitiespersession}, mas a disciplina tem apenas {$a->modulecount} atividades';
$string['activity'] = 'Atividade';
$string['activitytype'] = 'Tipo de atividade';
$string['assignment'] = 'Trabalho';
$string['coursegroups'] = 'Grupos da disciplina';
$string['coursesettingnogroups'] = 'Esta disciplina está configurada como Não há grupos';
$string['courshasnogroups'] = 'Esta disciplina não tem grupos';
$string['displaydisabled'] = 'Exibição desativada';
$string['displaydisabled_help'] = 'Os itens indisponíveis são apresentados, mas os utilizadores não conseguem clicar neles';
$string['driprelease:view'] = 'Ver a disponibilização gradual para a disciplina';
$string['dripreleaseforcourse'] = 'Disponibilização gradual para a disciplina';
$string['from'] = 'Desde';
$string['hideunselected'] = 'Ocultar não selecionados';
$string['hideunselected_help'] = 'Qualquer item não selecionado será ocultado aos alunos, incluindo na pauta';
$string['hideunselected_text'] = 'Todos os módulos da disciplina não selecionados serão ocultados.';
$string['nomodulesincourse'] = 'Nenhum módulo na disciplina';
$string['noselections'] = 'Nenhum item selecionado, nenhuma disponibilidade atualizada';
$string['pluginname'] = 'Disponibilização gradual';
$string['privacy:null_reason'] = 'A ferramenta de administração Disponibilização gradual não afeta nem armazena quaisquer dados.';
$string['questioncount'] = 'N.º de perguntas';
$string['refresh'] = 'Atualizar';
$string['resetunselected'] = 'Repor não selecionado';
$string['resetunselected_help'] = 'Limpar as configurações de disponibilidade de todos os itens não selecionados';
$string['schedulefinish'] = 'Fim';
$string['schedulestart'] = 'Início';
$string['schedulestart_help'] = 'Os períodos/intervalos em que as atividades estarão disponíveis são definidos aqui. Primeiro, na secção "Início:", são definidos o dia, o mês e o ano em que se iniciará o ciclo de atividades.
O calendário azul abrirá um calendário pop-up para selecionar as datas como opção.';
$string['session'] = 'Sessão';
$string['session_help'] = 'Decide a duração dos intervalos. Por exemplo, um novo conjunto de atividades estará disponível de 7 em 7 dias e as atualmente disponíveis ficarão indisponíveis.
Pode ser definido. Dependendo das datas de início e de fim, a duração destas sessões será distribuída uniformemente de forma automática.
Por exemplo, se o número de semanas entre a data de início e a data de fim for 16 semanas. Se o número de sessões for definido como 8, o período de uma sessão seria de 2 semanas, 16 semanas / 8 sessões. No entanto, se as sessões foram definidas como 4, o período seria de 4 semanas, 16 semanas / 4 sessões. Finalmente, se as sessões foram 16, seria um ciclo semanal.';
$string['sessionlength'] = 'Duração da sessão (dias)';
$string['sessionlength_text'] = 'Duração em dias de cada sessão.';
$string['sessionlengtherror'] = 'A duração da sessão deve ser superior a zero';
$string['sessionlengthislonger'] = 'A duração da sessão é maior do que do início ao fim. Encurte a sessão ou defina um fim posterior';
$string['starttofinishmustbe'] = 'Do início ao fim deve ser de, pelo menos, um dia';
$string['stayavailable'] = 'Permanecer disponível após o fim da sessão';
$string['stayavailable_help'] = 'Os itens permanecerão disponíveis no final da sessão. O equivalente a não definir o campo Até na configuração das restrições';
$string['stayavailable_text'] = 'Permanecer disponível após o fim da sessão, sem definir uma data de fim.';
$string['to'] = 'Até';
$string['toggleselection'] = 'Alternar a seleção de todos os itens';
$string['updatedforcourse'] = 'atualizada a disponibilização gradual para a disciplina';
