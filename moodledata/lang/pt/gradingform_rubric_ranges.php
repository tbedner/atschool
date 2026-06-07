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
 * Strings for component 'gradingform_rubric_ranges', language 'pt', version '4.4'.
 *
 * @package     gradingform_rubric_ranges
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Adicionar critério';
$string['additionalfeedback'] = 'Adicionar critério';
$string['alwaysshowdefinition'] = 'Permitir que os alunos vejam a grelha (caso contrário apenas fica visível após a avaliação)';
$string['backtoediting'] = 'Voltar para editar';
$string['confirmdeletecriterion'] = 'Tem a certeza de que pretende apagar este critério?';
$string['confirmdeletelevel'] = 'Tem a certeza de que pretende apagar este nível?';
$string['criteria'] = 'Critério';
$string['criterion'] = 'Critério {$a}';
$string['criterionaddlevel'] = 'Adicionar nível';
$string['criteriondelete'] = 'Apagar critério';
$string['criterionduplicate'] = 'Duplicar critério';
$string['criterionempty'] = 'Clique para editar critério';
$string['criterionmovedown'] = 'Mover para baixo';
$string['criterionmoveup'] = 'Mover para cima';
$string['criterionremark'] = 'Comentário do critério {$a->description}: {$a->remark}';
$string['definerubric'] = 'Configurar grelha';
$string['description'] = 'Descrição';
$string['downloadpdf'] = 'Descarregar PDF';
$string['enableremarks'] = 'Permitir que o avaliador adicione comentários para cada critério';
$string['err_duplicatescore'] = 'O número de pontos para cada nível tem de ser um número exclusivo';
$string['err_mintwolevels'] = 'Cada critério tem de ter pelo menos dois níveis';
$string['err_nocriteria'] = 'A grelha tem de ter pelo menos um critério';
$string['err_nodefinition'] = 'A definição do nível não pode ficar em branco';
$string['err_nodescription'] = 'A descrição do critério não pode ficar em branco';
$string['err_novariations'] = 'Os níveis de critério não podem ter o mesmo número de pontos';
$string['err_scoreformat'] = 'O número de pontos para cada nível tem de ser um número válido';
$string['err_totalscore'] = 'O número de pontos máximo possível de avaliar pela grelha deve ser mais do que zero';
$string['gradingof'] = '{$a} avaliado';
$string['level'] = 'Nível {$a->definition}, {$a->score} pontos.';
$string['leveldefinition'] = 'Definição do nível {$a}';
$string['leveldelete'] = 'Apagar nível {$a}';
$string['levelempty'] = 'Clique para editar nível';
$string['levelsgroup'] = 'Grupo de níveis';
$string['lockzeropoints'] = 'Calcular a nota tendo uma pontuação mínima da nota mínima possível para a rubrica';
$string['lockzeropoints_help'] = 'Esta configuração só se aplica se a soma do número mínimo de pontos para cada critério for maior que 0. Se marcar esta opção, a pontuação mínima da atividade será a nota mínima possível para a grelha. Se desmarcar esta opção, a pontuação mínima possível para a grelha será mapeada para a nota mínima disponível para a atividade (que é 0, a menos que seja usada uma escala).';
$string['name'] = 'Nome';
$string['needregrademessage'] = 'A definição da grelha foi alterada depois deste aluno ter sido avaliado. O aluno não pode ver a avaliação até ser conferida e atualizada a nota.';
$string['notset'] = 'Não definido';
$string['pluginname'] = 'Grelha com intervalos';
$string['points'] = 'Pontos';
$string['pointsvalue'] = '{$a} pontos';
$string['previewrubric'] = 'Pré-visualizar grelha';
$string['privacy:metadata:criterionid'] = 'Um identificador para um critério específico que está a ser avaliado.';
$string['privacy:metadata:fillingssummary'] = 'Armazena informações sobre a nota do utilizador criada pela  grelha.';
$string['privacy:metadata:instanceid'] = 'Um identificador relacionado com a nota de uma atividade.';
$string['privacy:metadata:levelid'] = 'O nível obtido na grelha.';
$string['privacy:metadata:remark'] = 'Comentários relacionados com o critério avaliado.';
$string['pts'] = 'pts';
$string['range'] = 'Intervalo';
$string['ratings'] = 'Avaliações';
$string['regrademessage1'] = 'Está prestes a guardar alterações a uma grelha que já foi utilizada para avaliação. Indique se existem notas que devem ser revistas. Se alterou isto, então a avaliação com grelha com intervalos estará oculta para os alunos até o item ser reavaliado.';
$string['regrademessage5'] = 'Está prestes a guardar significantes alterações a uma grelha que já foi usada para avaliação. A pauta não será alterada, mas a grelha estará oculta para os alunos até as notas serem recalculadas.';
$string['regradeoption0'] = 'Não marcar para reavaliação';
$string['regradeoption1'] = 'Marcar para reavaliação';
$string['restoredfromdraft'] = 'ATENÇÃO: A última tentativa de avaliar este participante não foi guardada de forma adequada pelo que foram restaurados os rascunhos das notas. Se pretender cancelar estas alterações, clique no botão \'Cancelar\' abaixo.';
$string['rubric'] = 'Grelha com intervalos';
$string['rubricmapping'] = 'Regras de conversão dos pontos';
$string['rubricmappingexplained'] = 'A pontuação mínima possível para esta grelha é de <b>{$a->minscore} pontos</b> e será convertida para a nota mínima disponível neste trabalho (que é zero, a menos que seja usada uma escala). A pontuação máxima de <b>{$a->maxscore} pontos</b> será convertida para a nota máxima. Pontuações intermediárias serão respetivamente convertidas.

Se for usada uma escala para avaliação, a pontuação será arredondada e convertida para os elementos da escala como se fossem inteiros consecutivos.

Este cálculo de nota pode ser alterado editando o formulário e marcando a caixa \'Calcular a nota tendo uma pontuação mínima da nota mínima possível para a grelha\'.';
$string['rubricnotcompleted'] = 'Por favor, atribua avaliação a todos os critérios';
$string['rubricoptions'] = 'Opções da grelha';
$string['rubricstatus'] = 'Estado atual da grelha';
$string['save'] = 'Guardar';
$string['saverubric'] = 'Guardar grelha e tornar disponível';
$string['saverubricdraft'] = 'Guardar como rascunho';
$string['scoreinputforlevel'] = 'Pontuação para o nível {$a}';
$string['scorepostfix'] = '{$a} pontos';
$string['showdescriptionstudent'] = 'Mostrar descrição da grelha aos que estão a ser avaliados';
$string['showdescriptionteacher'] = 'Mostrar descrição da grelha durante a avaliação';
$string['showremarksstudent'] = 'Mostrar comentários aos que estão a ser avaliados';
$string['showscorestudent'] = 'Mostrar pontos para cada nível aos que estão a ser avaliados';
$string['showscoreteacher'] = 'Mostrar pontos para cada nível durante a avaliação';
$string['sortlevelsasc'] = 'Ordem de classificação dos níveis:';
$string['sortlevelsasc0'] = 'Decrescente por número de pontos';
$string['sortlevelsasc1'] = 'Crescente por número de pontos';
$string['zerolevelsabsent'] = 'Atenção: a pontuação mínima possível para esta grelha não é 0; isto pode resultar em notas inesperadas para a atividade. Para evitar esta situação, cada critério deve ter um nível com 0 pontos.<br>
Este aviso pode ser ignorado se for usada uma escala para a classificação e os níveis mínimos na grelha correspondem ao valor mínimo da escala.';
