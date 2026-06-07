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
 * Strings for component 'qtype_mtf', language 'pt', version '4.4'.
 *
 * @package     qtype_mtf
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeduction'] = 'Permitir descontos de penalização';
$string['allowdeduction_help'] = 'Se ativar esta opção, os professores podem configurar as suas perguntas para terem descontos para respostas erradas.
Se desativada, esta opção não estará disponível, por exemplo porque a instituição não quer penalizações neste tipo de pergunta. Esta opção não pode ser desativada, se "Subpontos com desconto" estiver definido como o método de pontuação predefinido.';
$string['answernumbering'] = 'Numeração das opções';
$string['answernumbering123'] = '1., 2., 3., ...';
$string['answernumberingABCD'] = 'A., B., C., ...';
$string['answernumberingIIII'] = 'I., II., III., ...';
$string['answernumberingabc'] = 'a., b., c., ...';
$string['answernumberingiii'] = 'i., ii., iii., ...';
$string['answernumberingnone'] = 'Sem numeração';
$string['answersingleno'] = 'Múltiplas respostas';
$string['cannotusedeductions'] = 'Defina um método de pontuação válido.';
$string['clearrow'] = 'Limpar resposta da linha {$a}';
$string['configintro'] = 'Valores predefinidos para perguntas de múltiplos Verdadeiro/Falso.';
$string['configscoringmethod'] = 'Método de pontuação predefinido para perguntas de múltiplos Verdadeiro/Falso';
$string['configshuffleanswers'] = 'Configuração predefinida para a opção de baralhar as opções em perguntas de múltiplos Verdadeiro/Falso.';
$string['correctresponse'] = 'Resposta correta';
$string['deduction'] = 'Descontar se errado';
$string['deduction_help'] = 'Penalização a ser descontada por respostas erradas, como uma fração dos pontos que o item receberia. Útil apenas se estiver a ser usado o método de pontuação de subpontos.';
$string['deletedchoice'] = 'Esta opção foi apagada após o início da tentativa.';
$string['deleterawswarning'] = 'Ao diminuir o número de opções, as opções excedentes serão excluídas. Tem a certeza de que pretende prosseguir?';
$string['enterfeedbackhere'] = 'Digite aqui o feedback.';
$string['entergeneralfeedbackhere'] = 'Digite aqui o feedback geral.';
$string['enterstemhere'] = 'Insira aqui a estrutura ou o texto da pergunta.';
$string['false'] = 'Falso';
$string['feedbackforoption'] = 'Feedback para a';
$string['generalfeedback'] = 'Feedback geral';
$string['generalfeedback_help'] = 'O feedback geral é mostrado independentemente da resposta escolhida. <br />Use o feedback geral, por exemplo, para explicar as respostas corretas ou fornecer aos alunos uma hiperligação para informações adicionais.';
$string['incorrect'] = 'Incorreta';
$string['invaliddeduction'] = 'O desconto deve ser um valor entre 0 e 1 (inclusive)';
$string['maxpoints'] = 'Max. pontos';
$string['mustdeleteextrarows'] = 'São permitidas, no máximo, 5 opções no MTF. {$a} opção(ões) será(ão) excluída(s). Se cancelar a edição sem guardar, as opções excedentes permanecerão na pergunta.';
$string['mustsupplyresponses'] = 'Tem de indicar valores para todas as respostas.';
$string['mustsupplyvalue'] = 'Tem de indicar um valor aqui.';
$string['notenoughanswers'] = 'Este tipo de pergunta requer pelo menos {$a} opção';
$string['numberchoicehaschanged'] = 'O número de opções foi alterado. Não é possível reavaliar a tentativa de resposta à pergunta.';
$string['numberofrows'] = 'Número de opções';
$string['numberofrows_help'] = 'Especifique o número de opções. Se alterar para menos opções, as opções excedentes serão apagadas quando o item for salvo.';
$string['oneanswerperrow'] = 'Responda a todas as partes da pergunta.';
$string['optionno'] = 'Opção {$a}';
$string['optionsandfeedback'] = 'Opções e Feedback';
$string['pluginname'] = 'Múltiplos Verdadeiro/Falso (ETH)';
$string['pluginname_help'] = 'Ao responder a uma pergunta, mostrar a razão entre as opções de acordo com os critérios fornecidos, por exemplo, "verdadeiro"/"falso".';
$string['pluginname_link'] = 'question/type/mtf';
$string['pluginnameadding'] = 'A adicionar pergunta de múltiplos Verdadeiro/Falso';
$string['pluginnameediting'] = 'A editar pergunta de múltiplos Verdadeiro/Falso';
$string['pluginnamesummary'] = 'Em perguntas de múltiplos Verdadeiro/Falso ("Tipo X"), uma série de opções deve ser corretamente classificada como "verdadeiro" ou "falso".';
$string['privacy:metadata'] = 'O módulo do tipo de perguntas MTF não armazena quaisquer dados pessoais.';
$string['responsedesc'] = 'O texto predefinido utilizado para a resposta {$a}.';
$string['responseno'] = 'Resposta {$a}';
$string['responsetext'] = 'Texto da resposta {$a}';
$string['responsetext1'] = 'Verdadeiro';
$string['responsetext2'] = 'Falso';
$string['responsetexts'] = 'Opções de avaliação das opções';
$string['save'] = 'Guardar';
$string['scoringmethod'] = 'Método de pontuação';
$string['scoringmethod_help'] = 'Existem três métodos alternativos de pontuação. <br /><strong>Subpontos</strong> (recommendado): o aluno recebe subpontos por cada resposta correta.<br /><strong>Subpontos com desconto</strong>: o aluno recebe subpontos para cada resposta correta, mas também descontos para respostas erradas. Este método necessita de ativação prévia pelo administrador.<br/><strong>MTF1/0</strong>: o aluno só recebe pontuação máxima se todas as respostas estiverem corretas, caso contrário, recebe zero pontos.';
$string['scoringmtfonezero'] = 'MTF1/0';
$string['scoringmtfonezero_help'] = 'O aluno recebe pontuação máxima se todas as respostas estiverem corretas, caso contrário, recebe zero pontos.';
$string['scoringsubpointdeduction'] = 'Subpontos com desconto';
$string['scoringsubpointdeduction_help'] = 'O aluno recebe subpontos para cada resposta correta, mas também descontos para respostas erradas.';
$string['scoringsubpoints'] = 'Subpontos';
$string['scoringsubpoints_help'] = 'O aluno recebe subpontos por cada resposta correta.';
$string['showscoringmethod'] = 'Mostrar método de pontuação';
$string['showscoringmethod_help'] = 'Se ativar esta opção, os alunos verão o método de pontuação nos testes.';
$string['shuffleanswers'] = 'Baralhar opções';
$string['shuffleanswers_help'] = 'Se ativar esta opção, a ordem das opções é aleatoriamente baralhada em cada tentativa, desde que "Baralhar dentro das perguntas", nas configurações da atividade, também esteja ativado.';
$string['stem'] = 'Estrutura';
$string['tasktitle'] = 'Título da pergunta';
$string['true'] = 'Correto';
