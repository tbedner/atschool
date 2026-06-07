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
 * Strings for component 'qtype_answersselect', language 'pt', version '4.4'.
 *
 * @package     qtype_answersselect
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answersselectmode'] = 'Número de respostas corretas e incorretas';
$string['answersselectmode_help'] = 'Selecione o número de respostas corretas e incorretas que serão mostradas ao aluno. IMPORTANTE: Ao criar uma nova pergunta, é necessário clicar no botão "Guardar alterações e continuar a editar" para que estes itens do menu fiquem ativos.';
$string['automaticselection'] = 'Seleção aleatória automática';
$string['blankspace'] = 'espaço em branco';
$string['comma'] = 'vírgula';
$string['correctanswer'] = 'Correta';
$string['correctchoicesseparator'] = 'Separador a ser usado na exibição das respostas corretas';
$string['correctchoicesseparator_help'] = '<p>Este separador será usado para separar as respostas corretas mostradas ao aluno, se esta opção de revisão for selecionada no teste.</p>
<ul><li>A vírgula é a opção predefinida, para ser usada para respostas curtas corretas.</li>
<li>Use o espaço em branco se as respostas corretas (ordenadas) forem palavras isoladas que constituem uma frase.</li>
<li>Use a quebra de linha para respostas corretas mais longas, para uma melhor exibição em linhas separadas.</li></ul>';
$string['hardsetamountisgreaterthanansweramount'] = 'O número selecionado de respostas é maior do que o número atual de respostas.';
$string['hardsetamountofanswers'] = 'N respostas na pergunta';
$string['hardsetamountofanswers_help'] = 'Número total de respostas, que serão mostradas ao aluno. Este número é alterado apenas depois de guardar as alterações às respostas.';
$string['hastobeoneincorrectanswer'] = 'Adicione pelo menos uma resposta incorreta';
$string['hastobeoneincorrectanswer_help'] = 'Esta opção garante que o "conjunto" de respostas aleatórias escolhidas terá pelo menos uma resposta incorreta.';
$string['linebreak'] = 'quebra de linha';
$string['manualselection'] = 'Seleção manual';
$string['notenoughcorrectanswers'] = 'Tem de selecionar pelo menos uma escolha correta';
$string['nrandomanswersselection'] = 'N respostas selecionadas aleatoriamente';
$string['pluginname'] = 'Respostas selecionadas aleatoriamente';
$string['pluginname_help'] = 'Um tipo de pergunta de escolha múltipla que permite a seleção aleatória de um "conjunto" de respostas corretas/incorretas.';
$string['pluginname_link'] = 'question/type/answersselect';
$string['pluginnameadding'] = 'A adicionar pergunta de respostas selecionadas aleatoriamente';
$string['pluginnameediting'] = 'A editar pergunta de respostas selecionadas aleatoriamente';
$string['pluginnamesummary'] = '<p>Um tipo de pergunta de escolha múltipla com regras de avaliação específicas.</p>
<p>Recomendado se a pergunta tiver um "conjunto" de respostas corretas e incorretas a partir do qual pode ser selecionado um número definido a quando da utilização da pergunta.</p>';
$string['privacy:metadata'] = 'O módulo Respostas selecionadas aleatoriamente não armazena quaisquer dados pessoais.';
$string['randomselectcorrect'] = 'Número de respostas corretas';
$string['randomselectcorrect_help'] = 'Número de respostas corretas que serão mostradas ao aluno.';
$string['randomselectincorrect'] = 'Número de respostas incorretas';
$string['randomselectincorrect_help'] = 'Número de respostas incorretas que serão mostradas ao aluno.';
$string['showeachanswerfeedback'] = 'Mostrar o feedback das respostas selecionadas.';
$string['showstandardinstruction'] = 'Mostrar instruções predefinidas';
$string['showstandardinstruction_help'] = 'Se ativar esta opção, será fornecida a instrução predefinida como parte da área de seleção (por exemplo, "Selecione uma ou mais opções:"). Se desativada, os autores das perguntas podem incluir instruções no conteúdo da pergunta, se necessário.';
$string['toomanyoptions'] = 'Selecionou demasiadas opções.';
$string['useallanswers'] = 'Usar todas as respostas (modo predefinido)';
$string['yougot1right'] = 'Selecionou corretamente uma opção.';
$string['yougotnright'] = 'Selecionou corretamente {$a->num} opções.';
