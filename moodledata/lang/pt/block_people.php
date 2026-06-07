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
 * Strings for component 'block_people', language 'pt', version '4.4'.
 *
 * @package     block_people
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['noparticipantslist'] = 'A visualização da lista dos participantes não é permitida nesta disciplina';
$string['participantslist'] = 'Mostrar lista dos participantes';
$string['people:addinstance'] = 'Adicionar um novo bloco Pessoas';
$string['people:myaddinstance'] = 'Adicionar um novo bloco Pessoas ao Painel do utilizador';
$string['pluginname'] = 'Pessoas';
$string['privacy:metadata'] = 'O módulo Pessoas fornece funcionalidade avançada aos utilizadores do Moodle mas não armazena quaisquer dados pessoais.';
$string['resetvisibilityerror'] = 'Ocorreu um erro ao atualizar as tabelas da base de dados...<br/> A configuração "Redefinir visibilidade" foi reposta.';
$string['resetvisibilitysuccess'] = 'Todas as instâncias do bloco Pessoas são visíveis (novamente).<br/>A configuração "Redefinir visibilidade" foi reposta.';
$string['setting_hideblock'] = 'Ocultar o bloco';
$string['setting_hideblock_desc'] = 'Ao ativar esta configuração, o bloco pode ser ocultado pelos utilizadores. <br/>
Aviso importante: <br/>
Desativar esta configuração removerá totalmente do menu do bloco o item Mostrar/Ocultar. Isto significa que os utilizadores não poderão ocultar este bloco, mas por outro lado, os blocos que já estão ocultos também não podem ser mostrados. Se pretende ativar esta funcionalidade, considere usar a seguinte função para repor a visibilidade para todas as instâncias do "block_people".';
$string['setting_hideblockheading'] = 'Ocultar o bloco';
$string['setting_linkparticipantspage'] = 'Mostrar hiperligação para a página dos participantes';
$string['setting_linkparticipantspage_desc'] = 'Se ativar esta opção, será mostrado dentro do bloco uma hiperligação para a página dos participantes da disciplina.';
$string['setting_multipleroles'] = 'Mostrar múltiplos papéis';
$string['setting_multipleroles_desc'] = 'Esta configuração permite que controle se os utilizadores com mais do que um dos papéis configurados acima são listados uma ou mais vezes neste bloco. Se esta configuração for desativada, os utilizadores serão listados apenas com o primeiro papel que têm, de acordo com a ordem global dos papéis. Se esta configuração for ativada, os utilizadores serão listados em cada um dos seus papéis.';
$string['setting_participantspageheading'] = 'Página dos participantes';
$string['setting_resetvisibility'] = 'Redefinir visibilidade';
$string['setting_resetvisibility_desc'] = 'Ao ativar esta opção, a visibilidade de todas as instâncias do bloco Pessoas existentes será definida como visível (novamente).<br/>
Observação: <br/>
Após guardar esta opção, as operações da base de dados para redefinir a visibilidade serão acionadas e esta caixa de seleção será desmarcada novamente. A próxima vez que ativar e guardar esta opção acionará as operações da base de dados para redefinir a visibilidade novamente.';
$string['setting_roles'] = 'Mostrar estes papéis';
$string['setting_roles_desc'] = 'Esta configuração permite que controle quais os utilizadores que aparecerão neste bloco. O utilizador precisa de ter pelo menos um destes papéis na disciplina para ser mostrado no bloco.';
$string['setting_rolesheading'] = 'Papéis';
