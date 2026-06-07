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
 * Strings for component 'swiftquiz', language 'pt', version '4.4'.
 *
 * @package     swiftquiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['a_out_of_b_responded'] = '{$a->a} / {$a->b} responderam';
$string['a_out_of_b_voted'] = '{$a->a} / {$a->b} votaram';
$string['a_responses'] = '{$a} respostas';
$string['a_students_answered'] = '<b>{$a}</b> alunos responderam a pelo menos uma pergunta.';
$string['a_students_joined_quiz'] = '<b>{$a}</b> alunos juntaram-se ao teste.';
$string['add'] = 'Adicionar';
$string['add_question'] = 'Adicionar pergunta';
$string['add_to_quiz'] = 'Adicionar ao teste';
$string['allow_guests'] = 'Permitir visitantes';
$string['anonymous'] = 'Anónimo';
$string['anonymous_answers'] = 'Respostas anónimas (participação pode ser visualizada)';
$string['anonymous_answers_info'] = 'As respostas são anónimas nesta sessão. A sua participação continua a ser registada.';
$string['answer'] = 'Resposta';
$string['attempt_started'] = 'Já iniciou uma tentativa, por favor, clique abaixo para continuar a sua tentativa em aberto';
$string['attempts'] = 'Tentativas';
$string['attendance'] = 'Presenças';
$string['attendance_list'] = 'Lista de presenças';
$string['click_to_show_original_results'] = 'Clique para mostrar os resultados originais';
$string['click_to_show_vote_results'] = 'Clique para mostrar os resultados da votação';
$string['closing_session'] = 'A terminar sessão...';
$string['create_new_question'] = 'Criar nova pergunta';
$string['default_question_time'] = 'Duração predefinida da pergunta';
$string['default_question_time_help'] = 'A duração predefinida das perguntas.<br>Pode ser alterada em cada pergunta.';
$string['delete_question'] = 'Apagar pergunta {$a}';
$string['download_attendance_list'] = 'Descarregar lista de presenças';
$string['download_report'] = 'Descarregar relatório';
$string['download_responses'] = 'Descarregar respostas';
$string['edit'] = 'Editar';
$string['edit_page_open_session_error'] = 'Não pode editar o teste enquanto uma sessão estiver aberta.';
$string['edit_question'] = 'Editar pergunta';
$string['end'] = 'Finalizar';
$string['error_getting_current_results'] = 'Ocorreu um erro ao obter resultados atuais.';
$string['error_getting_vote_results'] = 'Ocorreu um erro ao obter os resultados da votação.';
$string['error_saving_vote'] = 'Ocorreu um erro ao guardar o seu voto.';
$string['error_starting_vote'] = 'Ocorreu um erro ao iniciar a votação.';
$string['error_with_request'] = 'Ocorreu um erro com a solicitação.';
$string['event_attempt_started'] = 'Tentativa iniciada';
$string['event_question_answered'] = 'Pergunta respondida por tentativa';
$string['exit'] = 'Sair';
$string['failed_to_end_question'] = 'Não foi possível finalizar a pergunta.';
$string['fullscreen'] = 'Ecrã inteiro';
$string['fully_anonymous'] = 'Totalmente anónimo';
$string['fully_anonymous_info'] = 'As respostas e a participação são totalmente anónimas nesta sessão.';
$string['goto_session'] = 'Ir para a sessão já em andamento';
$string['improvise'] = 'Improvisar';
$string['instructions_for_instructor'] = '<h3>Por favor, leia as instruções:</h3>
<p>Existem teclas de atalho disponíveis, que podem ser usadas quando um campo de entrada não tem o foco.</p>
<table>
        <tr>
               <th>Controlo</th>
               <th>Tecla de atalho</th>
               <th>Descrição</th>
        </tr>
      <tr>
          <td>
             <i class="fa fa-repeat"></i> Recolocar
          </td>
            <td>r</td>
          <td>
Permite ao professor colocar novamente a pergunta que acabou de ser feita.
É o mesmo que iniciar uma pergunta da lista pendente de <i class="fa fa-bars"></i> Saltar.
         </td>
   </tr>
   <tr>
      <td>
           <i class="fa fa-bar-chart"></i> Votar
     </td>
            <td>v</td>
     <td>
Permite aos alunos votarem nas suas respostas.
O professor pode clicar numa resposta para alternar se deve ser incluída na votação ou não.
Clicar na barra da resposta iniciará uma mistura dessa resposta.
Tenha em atenção que a barra ocupará a barra na qual clicará em seguida.
</td>
</tr>
<tr>
<td>
<i class="fa fa-edit"></i> Improvisar
</td>
            <td>i</td>
<td>
Mostra uma lista de perguntas para improvisar. Escreva a pergunta no quadro e peça informações com estas perguntas.
</td>
</tr>
<tr>
<td>
<i class="fa fa-bars"></i> Saltar
</td>
<td>j</td>
<td>
Mostra a lista de todas as perguntas planeadas para o teste.
</td>
</tr>
<tr>
<td>
<i class="fa fa-forward"></i> Seguinte
</td>
<td>n</td>
<td>
Salta para a próxima pergunta da lista de perguntas planeadas.
</td>
</tr>
<tr>
<td>
<i class="fa fa-random"></i> Aleatório
 </td>
            <td>m</td>
            <td>
                Inicia uma pergunta aleatória da lista de perguntas planeadas.
            </td>
        </tr>
<tr>
            <td>
<i class="fa fa-close"></i> Finalizar
</td>
            <td>e</td>
<td>
Termina a pergunta atual.
</td>
</tr>
<tr>
<td>
<i class="fa fa-expand"></i> Ecrã inteiro
</td>
  <td>f</td>
<td>
Mostra os resultados em ecrã inteiro. As respostas não aparecerão durante uma pergunta, por isso pode continuar assim durante a sessão.
</td>
</tr>
<tr>
<td>
<i class="fa fa-square-o"></i> / <i class="fa fa-check-square-o"></i> Resposta
</td>
<td>a</td>
<td>
Permite ao professor ver a pergunta com a resposta correta selecionada.
</td>
</tr>
<tr>
<td>
<i class="fa fa-square-o"></i> / <i class="fa fa-check-square-o"></i> Respostas
</td>
<td>t (alternar)</td>
<td>
Oculta ou mostra as respostas dos alunos.
</td>
</tr>
<tr>
<td>
<i class="fa fa-window-close"></i> Sair
</td>
            <td></td>
<td>
Termina a sessão atual do teste.
</td>
</tr>
</table>';
$string['instructions_for_student'] = '<p>Aguarde que o professor inicie o teste.</p>';
$string['instructor_sessions_going'] = 'Uma sessão já está em andamento. Por favor, clique no botão abaixo para ir para a sessão';
$string['invalid_question_time'] = 'O tempo da pergunta deve ser um inteiro igual ou maior do que zero';
$string['join_quiz'] = 'Juntar-se ao teste';
$string['join_quiz_instructions'] = 'Clique abaixo para juntar-se ao teste';
$string['jump'] = 'Saltar';
$string['loading'] = 'A carregar...';
$string['modulename'] = 'TesteSwift';
$string['modulename_help'] = '<p>
A atividade TesteSwift permite que o professor crie e administre testes em tempo real. Todos os tipos de perguntas podem ser usados no TesteSwift.
</p>
<p>
O professor tem a capacidade de "saltar" para diferentes perguntas no decorrer de uma sessão.
As respostas são mostradas ao vivo num gráfico de barras, otimizado para projetores. O modo de ecrã completo também está disponível.
Pode ser definido um tempo limite para terminar automaticamente a pergunta, ou o professor pode terminar manualmente a pergunta e passar para a próxima.
</p>';
$string['modulenameplural'] = 'TesteSwift';
$string['multichoice_options'] = 'Opções de múltipla escolha';
$string['next'] = 'Seguinte';
$string['no_attempts_found'] = 'Nenhuma tentativa encontrada.';
$string['no_session'] = 'Não existe sessão aberta';
$string['no_sessions_exist'] = 'Ainda não existe sessão.';
$string['no_students_have_joined'] = 'Nenhum aluno  juntou-se ao teste.';
$string['no_time_limit'] = 'Sem tempo limite';
$string['no_time_limit_help'] = 'Marque este campo para não haver temporizador nesta pergunta.<p>O professor terá que clicar no botão de finalizar a pergunta para terminar a pergunta</p>';
$string['nonanonymous_session'] = 'Sessão não anónima';
$string['nonanonymous_session_info'] = 'Esta é uma sessão não anónima. A participação e as respostas são registadas.';
$string['one_student_has_joined'] = '1 aluno juntou-se ao teste.';
$string['pluginadministration'] = 'Administração do TesteSwift';
$string['pluginname'] = 'TesteSwift';
$string['question'] = 'Pergunta';
$string['question_move_down'] = 'Mover a pergunta {$a} para baixo';
$string['question_move_up'] = 'Mover a pergunta {$a} para cima';
$string['question_time'] = 'Duração da pergunta';
$string['question_time_help'] = 'Tempo para responder à pergunta (em segundos).';
$string['question_will_end_in_x_seconds'] = 'A pergunta terminará em {$a} segundos';
$string['question_will_start_in_x_seconds'] = 'A pergunta começará em {$a} segundos';
$string['question_will_start_now'] = 'A pergunta vai começar agora';
$string['questions'] = 'Perguntas';
$string['quit'] = 'Sair';
$string['quiz_not_running'] = '<p>Aguarde que o professor inicie o teste.</p><p>Use o botão atualizar para verificar se já começou.</p>';
$string['repoll'] = 'Recolocar';
$string['reports'] = 'Relatórios';
$string['responses'] = 'Respostas';
$string['review'] = 'Revisão';
$string['save_question'] = 'Guardar pergunta';
$string['select_session'] = 'Selecione a sessão para rever:';
$string['session'] = 'Sessão';
$string['session_closed'] = 'A sessão está fechada';
$string['session_name'] = 'Nome da sessão';
$string['session_name_required'] = 'O nome da sessão é obrigatório';
$string['short_answer'] = 'Resposta curta';
$string['short_math_answer'] = 'Resposta curta matemática';
$string['show_statistic'] = 'Mostrar estatísticas';
$string['show_word_cloud'] = 'Mostrar nuvem de palavras';
$string['showing_original_results'] = 'A mostrar resultados originais';
$string['showing_vote_results'] = 'A mostrar resultados da votação';
$string['start_session'] = 'Iniciar sessão';
$string['startquiz'] = 'Iniciar teste';
$string['student'] = 'Aluno';
$string['swiftquiz:addinstance'] = 'Adicionar uma instância de TesteSwift';
$string['swiftquiz:attempt'] = 'Responder a um TesteSwift';
$string['swiftquiz:control'] = 'Controlar um TesteSwift. (normalmente apenas professores)';
$string['swiftquiz:editquestions'] = 'Editar perguntas para um TesteSwift.';
$string['swiftquiz:seeresponses'] = 'Ver as respostas de outros alunos para avaliá-las';
$string['swiftquizsettings'] = 'Configurações gerais do SwiftQuiz';
$string['teacher_start_instructions'] = '<p>Iniciar um teste para os alunos.</p><p>Defina um nome para a sessão (ajudará a analisar os resultados numa data posterior).</p>';
$string['toggle_test'] = 'Indiferente';
$string['triggerBtn'] = 'Criar';
$string['unable_to_create_session'] = 'Não é possível criar sessão';
$string['view'] = 'Visualizar';
$string['vote'] = 'Votar';
$string['wait_for_instructor'] = 'Aguarde que o instrutor inicie a próxima pergunta.';
$string['wait_for_question_time'] = 'Aguarde o tempo da pergunta';
$string['wait_for_question_time_help'] = 'Tempo de espera para a pergunta começar.';
$string['wait_for_students'] = 'A esperar que os alunos se juntem ao teste';
$string['x_seconds_left'] = 'Faltam {$a}s';
$string['x_students_have_joined'] = '{$a} alunos juntaram-se ao teste.';
$string['you_already_voted'] = 'Desculpa, mas já votou.';
