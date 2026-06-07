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
 * Strings for component 'gradingform_multigraders', language 'pt', version '4.4'.
 *
 * @package     gradingform_multigraders
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Adicionar comentário usado frequentemente';
$string['auto_calculate_final_method'] = 'Método de cálculo automático da próxima nota e resultados';
$string['auto_calculate_final_method_0'] = 'última nota anterior';
$string['auto_calculate_final_method_1'] = 'nota anterior mínima';
$string['auto_calculate_final_method_2'] = 'nota anterior máxima';
$string['auto_calculate_final_method_3'] = 'média das notas anteriores';
$string['auto_calculate_final_method_help'] = 'A nota final é decidida pelo último avaliador, mas o sistema calcula automaticamente a próxima nota, dependendo da anterior, com base no algoritmo escolhido aqui. O mesmo método é usado para determinar o próximo resultado.';
$string['backtoediting'] = 'Voltar à edição';
$string['blind_marking'] = 'Avaliação oculta';
$string['blind_marking_explained'] = 'A avaliação oculta está ativa. Os avaliadores secundários não podem ver as notas anteriores, apenas o avaliador inicial/primário. No entanto, quando a nota for publicada, todos os envolvidos podem ver todas as notas.';
$string['blind_marking_help'] = 'Se ativar esta opção, os avaliadores intermédios não podem ver as notas anteriores. Apenas o avaliador inicial/primário pode.';
$string['clicktocopy'] = 'Copiar anotações para os comentários de feedback';
$string['clicktodeleteadmin'] = 'Apagar todos os dados da nota deste trabalho';
$string['clicktoedit'] = 'Clique para editar';
$string['comment'] = 'Comentar';
$string['criteria'] = 'Critério de avaliação';
$string['definition'] = 'Definição';
$string['description'] = 'Descrição do Modelo';
$string['editdefinition'] = 'Editar opções de multi-avaliadores';
$string['err_gradeinvalid'] = 'Nota inválida';
$string['err_gradeoutofbounds'] = 'A nota está fora do intervalo permitido';
$string['err_grader_intermediary'] = '<b>{$a}</b> - Não pode publicar a nota deste aluno porque não é o avaliador final.';
$string['err_noformula'] = 'Não existe uma fórmula definida para calcular a nota a partir dos resultados. Visite a configuração da pauta para definir a fórmula.';
$string['err_notgraded'] = '<b>{$a}</b> - Este aluno não foi avaliado';
$string['feedback_label'] = 'Anotações';
$string['final_grade_check'] = 'Publicar a nota?';
$string['final_grade_message'] = 'A nota está publicada';
$string['finalgradefinished_noaccess'] = '{$a} concluiu a classificação deste item. Você não tem permissão para fazer alterações.';
$string['finalgradenotdecidedyet'] = 'A avaliação final ainda não foi publicada';
$string['finalgradestarted_noaccess'] = '{$a} começou a avaliar este item e você não está na lista de avaliadores secundários. Não tem permissão para fazer alterações.';
$string['finalgradestarted_nosecond'] = '{$a} começou a avaliar este item e nenhuma avaliação adicional foi requerida.';
$string['graderdetails_display'] = 'Avaliado por {$a}';
$string['gradingdisabled'] = 'A avaliação para este item está desativada. Foi bloqueada ou substituída.';
$string['gradingof'] = 'avaliação {$a}';
$string['instancedetails_display'] = '{$a} notas adicionadas.';
$string['maxscore'] = 'Pontuação máxima';
$string['message_assign_name'] = 'Trabalho {$a}';
$string['message_footer'] = '<br/><span style="font-size:80%">[mensagem gerada automaticamente pelo módulo muti-avaliadores]</span><br/>';
$string['message_header'] = '<br/>';
$string['message_smallmessage1'] = '{$a} requereu avaliação secundária.&nbsp;';
$string['message_smallmessage2'] = 'Por favor, reserve um momento para avaliar este item.';
$string['message_smallmessage3'] = '{$a} concluiu a avaliação secundária.';
$string['message_smallmessage4'] = 'Por favor, verifique e decida a nota final.';
$string['message_student_name'] = 'Aluno {$a}';
$string['message_subject'] = 'Necessária avaliação de outro avaliador para {$a}';
$string['message_subject_to_initial'] = 'Concluída a avaliação adicional para {$a}';
$string['messageprovider:secondgrading'] = 'Notificações de trabalhos que requerem avaliação de outro avaliador.';
$string['needregrademessage'] = 'A definição de multi-avaliadores foi alterada após a avaliação do aluno. O aluno não poderá ver o resultado até que {$a} confirme a nota publicada.';
$string['no_grade'] = 'Sem nota';
$string['now_grading'] = 'Em avaliação: {$a}';
$string['pluginname'] = 'Multi-avaliadores';
$string['previewdefinition'] = 'Pré-visualizar a definição';
$string['privacy:metadata'] = 'Este módulo não armazena quaisquer dados pessoais do utilizador. Qualquer informação do utilizador exibida é armazenada em outro local no Moodle.';
$string['require_second_grader'] = 'Solicitar outro avaliador';
$string['restoredfromdraft'] = 'NOTA: A última tentativa de avaliação deste utilizador não foi guardada corretamente, e por isso, foram restauradas as notas de rascunho.';
$string['save'] = 'Guardar';
$string['score'] = 'Pontuação';
$string['secondary_graders'] = 'Avaliadores secundários';
$string['secondary_graders_help'] = 'Lista de professores a serem notificados caso seja necessário outro avaliador para avaliar o trabalho';
$string['secondary_graders_list'] = 'Os avaliadores secundários definiram: {$a}.';
$string['show_intermediary_to_students'] = 'Mostrar aos alunos as anotações dos avaliadores secundários?';
$string['show_intermediary_to_students_explained'] = 'O aluno também pode ver todas as anotações dos avaliadores secundários quando a nota for publicada.';
$string['show_intermediary_to_students_help'] = 'Se ativar esta opção, os avaliadores secundários podem escolher se as suas anotações podem ser vistas, ou não, pelos alunos quando a nota for publicada.';
$string['show_notify_student_box'] = 'Mostrar caixa de notificação do aluno?';
$string['show_notify_student_box_help'] = 'Se ativar esta opção, os avaliadores podem escolher se querem, ou não, mostrar a caixa de notificação do aluno';
$string['timestamp_format'] = 'd/m/Y H:i:s';
$string['useralreadygradedthisitem'] = 'Já avaliou este item. Alguém tem de decidir a nota final e os comentários de feedback.';
$string['useralreadygradedthisitemfinal'] = 'Apenas {$a} pode alterar a nota final e as anotações.';
$string['visible_to_students'] = 'Mostrar anotações ao aluno';
