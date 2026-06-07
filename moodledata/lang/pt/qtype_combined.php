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
 * Strings for component 'qtype_combined', language 'pt', version '4.4'.
 *
 * @package     qtype_combined
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['controlnamegapselect'] = 'Lista pendente';
$string['controlnamegapselectplural'] = 'Listas pendentes';
$string['controlnamemultichoice'] = 'grupo de botões de rádio';
$string['controlnameshowworking'] = 'caixa de texto';
$string['correct_choice_embed_code'] = '[[{$a->qid}:{$a->qtype}:{opção correta}]]';
$string['embeddedquestionremovedfromform'] = 'Uma ou mais perguntas incorporadas foram removidas do texto da pergunta. Os dados destas perguntas continuam a ser mostrados abaixo, mas serão removidos definitivamente quando clicar em \'Atualizar o formulário\' ou em \'Guardar alterações\', a menos que volte a inserir os códigos de incorporação no texto da pergunta.';
$string['err_accepts_vertical_or_horizontal_layout_param'] = '<p>O tipo de pergunta \'{$a}\' permite especificar a estrutura da sua pergunta. Digite da seguinte forma:<ul>
<li>[[{question identifier}:{$a}:v]] vertical OU</li>
<li>[[{question identifier}:{$a}:h]] horizontal.</li></ul>
Não deve inserir nada após o segundo dois pontos.</p>';
$string['err_duplicateids'] = 'Cada pergunta incorporada deve ter um identificador diferente. Usou o(s) identificador(es) \'{$a}\' em mais do que uma pergunta.';
$string['err_fillinthedetailsforsubq'] = 'É necessário preencher os detalhes para descrever a subpergunta \'{$a}\'.';
$string['err_fillinthedetailshere'] = 'É necessário preencher os detalhes desta subpergunta.';
$string['err_insufficientnoofcodeparts'] = 'Ocorreu um erro. O código para incorporar um controlo de uma pergunta \'{$a->fullcode}\' não tem todos os elementos separados por dois pontos. Deve ter pelo menos um ID identificador da pergunta, seguido por um identificador do tipo de pergunta.';
$string['err_invalid_number'] = 'No tipo de pergunta \'{$a}\' deve inserir um número após o identificador do tipo de pergunta e o código incorporado deverá ser [[{ID da sua pergunta}:{$a}:{um número aqui}]]';
$string['err_invalid_width_specifier_postfix'] = '<p>O tipo de pergunta \'{$a}\' permite especificar a largura da sua pergunta. Digite da seguinte forma:<ul>
<li>[[{question identifier}:{$a}:____]] onde a largura da caixa de entrada vai depender do número de underscores inseridos ou</li>
<li>[[{question identifier}:{$a}:__10__]] onde a largura da caixa de entrada vai depender do número indicado</li></ul>
Não deve inserir nada após o segundo dois pontos.</p>';
$string['err_invalid_width_specifier_postfix_showworking'] = '<p>O tipo de pergunta \'{$a}\' permite especificar a largura da sua pergunta. Digite da seguinte forma:
<ul>
 <li>[[{question identifier}:{$a}:____]] onde a largura da caixa de entrada vai depender do número de underscores inseridos</li>
 <li>[[{question identifier}:{$a}:__10__]] onde a largura da caixa de entrada vai depender do número indicado</li>
  <li>[[{question identifier}:{$a}:__80x5__]] onde a largura e a altura da caixa de entrada vai depender do número indicado</li>
</ul>
Não deve inserir nada após o segundo dois pontos.</p>';
$string['err_invalidquestionidentifier'] = 'O código identificador da pergunta consiste num ou mais caracteres alfanuméricos.';
$string['err_questionidentifiertoolong'] = 'O nome de subpergunta \'{$a}\' é muito longo. Pode utilizar até 10 caracteres alfanuméricos.';
$string['err_subq_not_included_in_question_text'] = 'Parece ter removido esta pergunta do texto da pergunta. Incorpore esta pergunta no formulário com o código {$a}, caso contrário, será removida quando guardar novamente este formulário.';
$string['err_thisqtypecannothavemorethanonecontrol'] = 'Já tentou incorporar mais de um controlo para o tipo de pergunta \'{$a->qtype}\' com o nome de pergunta \'{$a->qid}\'. Este tipo de pergunta só permite incorporar um controlo por pergunta.';
$string['err_thisqtypedoesnotacceptextrainfo'] = 'Este tipo de pergunta é incorporado com o código [[{ID da sua pergunta}:{$a}]]. Não deve incluir nada depois do identificador da pergunta, nem mesmo depois do segundo dois pontos.';
$string['err_unrecognisedqtype'] = 'O identificador do tipo de pergunta \'{$a->qtype}\' que introduziu no código incorporado \'{$a->fullcode}\' não é conhecido.';
$string['err_weightingsdonotaddup'] = 'A soma das ponderações para as subperguntas não é igual a 1.';
$string['err_you_must_provide_third_param'] = 'Deve indicar um terceiro parâmetro para o tipo de pergunta \'{$a}\'.';
$string['err_youneedmorechoices'] = 'Deve indicar duas ou mais opções.';
$string['incorrectfeedback'] = 'Feedback para qualquer resposta incorreta';
$string['multiresponse'] = 'Opções predefinidas para subperguntas de múltiplas respostas';
$string['noembeddedquestions'] = 'Tem de haver pelo menos uma subpergunta incorporada.';
$string['nosubquestiontypesinstalled'] = 'Este tipo de pergunta permite a combinação de funcionalidades de outros tipos de perguntas. Precisa de instalar pelo menos um desses outros tipos de pergunta que serão usados como subperguntas.

Aceda à <a href="https://moodle.org/plugins/view.php?plugin=qtype_combined">página do módulo</a> para obter mais informações e consultar a lista de tipos de perguntas que podem ser usados como subperguntas.';
$string['pluginname'] = 'Combinada';
$string['pluginname_help'] = 'Criar uma pergunta com campos de resposta incorporados no texto da pergunta.

Dependendo dos tipos de perguntas instalados no seu Moodle, pode pedir ao aluno para responder com um valor numérico ou um texto, assim como selecionar um valor a partir de um número de opções. Códigos incorporados no texto da pergunta serão substituídos por caixas de seleção, caixas de combinação ou por um campo de entrada de texto para que o aluno possa escrever a resposta.

Quando adiciona uma nova pergunta todos os códigos para incorporar tipos de perguntas disponíveis são automaticamente adicionadas ao texto da pergunta como exemplos de códigos que pode usar. Ao mesmo tempo, aparecem abaixo do campo de entrada de texto da pergunta os fragmentos apropriados do formulário para especificar as opções para cada pergunta. Edite o texto da pergunta e altere os códigos no texto da pergunta para alterar os tipos de subperguntas a incluir no texto da pergunta e em seguida clique em "Atualizar o formulário" para ver as partes do formulário corretas e continuar a editar as configurações das subperguntas.';
$string['pluginname_link'] = 'question/type/combined';
$string['pluginnameadding'] = 'Adicionar uma pergunta combinada';
$string['pluginnameediting'] = 'Editar uma pergunta combinada';
$string['pluginnamesummary'] = 'O tipo de pergunta combinada permite a incorporação no texto da pergunta de campos de resposta para vários subtipos de perguntas disponíveis.

Dependendo dos tipos de pergunta instalados, o aluno pode inserir uma resposta numérica, um texto de resposta curta ou escolher uma resposta ou respostas usando uma caixa de combinação ou caixa de seleção.';
$string['privacy:metadata'] = 'O módulo Tipo de pergunta Combinada não armazena quaisquer dados pessoais.';
$string['regradeissuenumsubquestionschanged'] = 'O número de subperguntas incorporadas na pergunta foi alterado.';
$string['shuffle'] = 'Baralhar';
$string['singlechoice'] = 'Opções predefinidas para subperguntas de opção única';
$string['subqheader'] = 'Entrada \'{$a->qid}\' - tipo \'{$a->qtype}\'';
$string['subqheader_not_in_question_text'] = 'Entrada \'{$a->qid}\' - tipo \'{$a->qtype}\' (não incorporada no texto da pergunta).';
$string['subquestiontypenotinstalled'] = 'Está a tentar usar numa pergunta do tipo combinada o tipo de subpergunta \'{$a}\' que não está instalado.';
$string['subquestiontypes'] = 'Espaços reservados das subperguntas';
$string['updateform'] = 'Atualizar o formulário';
$string['validationerror'] = 'Parte da sua resposta requer atenção: {$a}';
$string['validationerror_part'] = 'Parte {$a->identifier} - {$a->error}';
$string['validationerrors'] = 'Partes da sua resposta requerem atenção: {$a}';
$string['vertical_or_horizontal_embed_code'] = '[[{$a->qid}:{$a->qtype}:v]] OU [[{$a->qid}:{$a->qtype}:h]] se pretender as opções dispostas na vertical ou na horizontal.';
$string['weighting'] = 'Ponderação';
$string['widthspecifier_embed_code'] = '[[{$a->qid}:{$a->qtype}:{width specifier}]] ou apenas [[{$a->qid}:{$a->qtype}]]';
$string['yougot1right'] = '1 das suas respostas está correta.';
$string['yougotnright'] = '{$a->num} das suas respostas estão corretas.';
