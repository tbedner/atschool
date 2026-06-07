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
 * Strings for component 'subcourse', language 'pt', version '4.4'.
 *
 * @package     subcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['blankwindow'] = 'Abrir numa nova janela';
$string['blankwindow_help'] = 'Quando selecionado, a hiperligação abrirá a disciplina de origem numa nova janela do navegador.';
$string['completioncourse'] = 'Requer conclusão da disciplina';
$string['completioncourse_help'] = 'Se ativar esta opção, a atividade é considerada concluída quando um aluno conclui a disciplina de referência.';
$string['completioncourse_text'] = 'O aluno tem de concluir a disciplina de origem para concluir esta atividade.';
$string['currentgrade'] = 'Nota atual: {$a}';
$string['currentprogress'] = 'Progresso: {$a}%';
$string['displayoption:coursepageprintgrade'] = 'Mostrar a nota da disciplina de origem na página da disciplina.';
$string['displayoption:coursepageprintprogress'] = 'Mostrar o progresso da disciplina de origem na página da disciplina.';
$string['errfetch'] = 'Não foi possível obter as notas. Código do erro: {$a}';
$string['errlocalremotescale'] = 'Não foi possível obter as notas: o item de avaliação final remoto utiliza uma escala local.';
$string['eventgradesfetched'] = 'Notas obtidas';
$string['fetchgradesmode'] = 'Obter notas como';
$string['fetchgradesmode0'] = 'Valores reais';
$string['fetchgradesmode1'] = 'Valores percentuais';
$string['fetchgradesmode_help'] = 'Dependendo da configuração da pauta da disciplina de referência, o valor bruto e o valor percentual da nota final da disciplina nem sempre podem corresponder aos valores mostrados nesta atividade da subdisciplina. Esta configuração determina qual dos valores deve corresponder.

* Valores reais - o valor real da nota final na referência é obtido como nota de atividade nesta subdisciplina. Se houver notas excluídas na disciplina de referência, a nota final percentual calculada na disciplina de referência pode não corresponder à percentagem na atividade subdisciplina.
* Valores percentuais - a nota final obtida na disciplina de referência é recalculada para que a percentagem exibida na disciplina de referência corresponda à percentagem exibida nesta atividade subdisciplina. Se houver notas excluídas na disciplina de referência, o valor real da nota pode não corresponder.';
$string['fetchnow'] = 'Obter notas agora';
$string['gotocoursename'] = 'Ir para a disciplina <a href="{$a->href}">{$a->name}</a>';
$string['gotorefcourse'] = 'Ir para {$a}';
$string['gotorefcoursegrader'] = 'Todas as notas em {$a}';
$string['gotorefcoursemygrades'] = 'As minhas notas em {$a}';
$string['gradesfetching'] = 'Obtenção das notas';
$string['hiddencourse'] = '*oculta*';
$string['instantredirect'] = 'Redirecionar para a disciplina de origem';
$string['instantredirect_help'] = 'Se ativar esta opção, os utilizadores serão redirecionados para a disciplina de origem ao tentarem ver a página do módulo subdisciplina. Não afeta utilizadores com a permissão para obter notas manualmente.';
$string['lastfetchnever'] = 'As notas ainda não foram obtidas';
$string['lastfetchtime'] = 'Última obtenção: {$a}';
$string['linkcontrol'] = 'Hiperligação para atividade subdisciplina';
$string['modulename'] = 'Subdisciplina';
$string['modulename_help'] = 'O módulo fornece funcionalidades muito simples contudo bastante úteis. Quando adicionado a uma disciplina, funciona como uma atividade avaliada. A nota de cada aluno é obtida a partir da nota final de outra disciplina. Combinado com as metadisciplinas, permite aos administradores organizarem disciplinas em unidades separadas.';
$string['modulenameplural'] = 'Subdisciplinas';
$string['nocoursesavailable'] = 'Não existem disciplinas onde obter avaliações a partir de';
$string['nosubcourses'] = 'Não existem subdisciplinas nesta disciplina';
$string['pluginadministration'] = 'Administração de Subdisciplinas';
$string['pluginname'] = 'Subdisciplina';
$string['privacy:metadata'] = 'O módulo Subdisciplina não armazena quaisquer dados pessoais';
$string['refcourse'] = 'Disciplina de origem';
$string['refcourse_help'] = 'A disciplina de origem é aquela da qual a nota da atividade é obtida. Os alunos devem estar inscritos na disciplina de origem.

Tem de ser professor na disciplina de origem para que esta surja nesta lista. Deverá pedir ao administrador do site para configurar esta atividade para que possa obter notas de outras disciplinas.';
$string['refcoursecurrent'] = 'Manter a origem atual';
$string['refcourselabel'] = 'Obter notas a partir de';
$string['refcoursenull'] = 'Não está configurada nenhuma disciplina de origem';
$string['settings:coursepageprintgrade'] = 'Nota na página da disciplina';
$string['settings:coursepageprintgrade_desc'] = 'Mostrar a nota da disciplina de origem na página da disciplina.';
$string['settings:coursepageprintprogress'] = 'Progresso na página da disciplina';
$string['settings:coursepageprintprogress_desc'] = 'Mostrar o progresso da disciplina de origem na página da disciplina.';
$string['subcourse:addinstance'] = 'Adicionar uma nova subdisciplina';
$string['subcourse:begraded'] = 'Receber avaliação a partir da disciplina de referência';
$string['subcourse:fetchgrades'] = 'Obter manualmente as notas a partir da disciplina de origem';
$string['subcourse:view'] = 'Ver a atividade da subdisciplina';
$string['subcoursename'] = 'Nome da subdisciplina';
$string['taskcheckcompletedrefcourses'] = 'Verificação da conclusão das disciplinas de origem';
$string['taskfetchgrades'] = 'Obter notas da subdisciplina';
