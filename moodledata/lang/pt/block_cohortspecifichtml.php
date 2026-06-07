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
 * Strings for component 'block_cohortspecifichtml', language 'pt', version '4.4'.
 *
 * @package     block_cohortspecifichtml
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cohortselection'] = 'Mostrar a grupos globais';
$string['cohortselection_help'] = 'O bloco só será mostrado aos membros de pelo menos um dos Grupos globais selecionados. Isto significa que, se selecionou, por exemplo, dois grupos globais e o utilizador só é membro de um deles, o bloco será mostrado a ele, pois faz parte de pelo menos um Grupo global dos selecionados. É equivalente à condição OU.';
$string['cohortspecifichtml:addinstance'] = 'Adicionar novo bloco Texto (grupos globais)';
$string['cohortspecifichtml:myaddinstance'] = 'Adicionar novo bloco Texto (grupos globais) no Painel do utilizador';
$string['cohortspecifichtml:viewalways'] = 'Ver sempre o bloco';
$string['invertcohortselection'] = 'Inverter seleção (ocultar para os grupos selecionados)';
$string['invertcohortselection_help'] = 'Com esta configuração pode inverter a seleção. Isto significa que o bloco não será mostrado aos membros dos Grupos globais selecionados, mas sim a todos os outros.<br/>
Exemplos: <ul> <li>Se um utilizador pertencer a pelo menos um dos Grupos globais selecionados, o bloco não será mostrado a ele, mesmo que seja membro de outro Grupo global que não esteja selecionado.</li>
<li>Se não selecionou qualquer Grupo global e inverter a seleção, o bloco estará visível para <strong>todos</strong> os utilizadores.</li></ul>';
$string['newhtmlcohortblock'] = 'Novo Texto (grupos globais)';
$string['nocohorts'] = 'Não existem grupos globais definidos. Sem grupos globais <strong>o bloco não será visível</strong>, mesmo que tenha inserido o conteúdo acima. <br/>
Pode gerir os grupos globais na <a href="{$a->url}">Administração do site</a>.';
$string['notvisibletoall'] = '<br/>Este bloco está <strong>oculto</strong> para <strong>todos</strong> os utilizadores.';
$string['notvisibletocohorts'] = '<br/><strong>Oculto</strong> para os grupos:';
$string['pluginname'] = 'Texto (grupos globais)';
$string['privacy:metadata:block'] = 'O bloco Texto (grupos globais) armazena todos os seus dados no subsistema de blocos.';
$string['resetcohortselection'] = 'Reiniciar a seleção';
$string['resetcohortselection_help'] = 'Se ativar e guardar esta configuração, a seleção que estava será redefinida. Isto significa que nenhum Grupo global ficará selecionado. Infelizmente, esta solução alternativa é necessária, porque desmarcar todas os Grupos globais não resultaria em qualquer alteração, uma vez que seria fornecido um resultado vazio ao servidor. <br/>Se abrir a configuração do bloco novamente, esta configuração será reiniciada e não será mostrada, porque não há nada que possa ser redefinido novamente.';
$string['unrestricted'] = 'Sem restrições';
$string['visibletoall'] = '<br/>Este bloco está <strong>visível</strong> para <strong>todos</strong> os utilizadores.';
$string['visibletocohorts'] = '<br/><strong>Visível</strong> para os grupos:';
