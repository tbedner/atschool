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
 * Strings for component 'qtype_matrix', language 'pt', version '4.4'.
 *
 * @package     qtype_matrix
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['all'] = 'Subpontos';
$string['allow_dnd_ui'] = 'Permitir o uso de Arrastar&Largar';
$string['allow_dnd_ui_descr'] = 'Se ativar esta opção, os professores terão a possibilidade de ativar o recurso <b>Arrastar</b>&<b>Largar</b> para qualquer pergunta Matriz';
$string['cols_description'] = 'Descrição';
$string['cols_shorttext'] = 'Resposta';
$string['colsheader'] = 'Colunas da matriz';
$string['colsheader_desc'] = '<p>O texto curto, quando presente, será usado com o texto longo como uma dica de ajuda.<br />Tenha em atenção de como será mostrado.</p>
<p>Os alunos podem selecionar uma ou várias colunas por linha, dependendo da configuração da pergunta, e a cada linha será atribuída uma nota pelo método de avaliação selecionado.</p>
<p>A nota final da pergunta é a média das notas para cada uma das linhas, com a exceção do tipo de avaliação Kprime, em que todas as respostas têm de estar corretas.</p>';
$string['difference'] = 'Diferença';
$string['false'] = 'Falso';
$string['grademethod'] = 'Método de avaliação';
$string['grademethod_help'] = '<ul>
<li><b>Kprime</b>: O aluno recebe um ponto se todas as respostas estiverem corretas, meio ponto se uma resposta estiver errada e as demais respostas estiverem corretas e zero pontos nos outros casos.</li>
<li><b>Kprime1/0</b>: O aluno recebe um ponto, se todas as respostas estiverem corretas  e zero pontos nos outros casos.</li>
<li><b>Subpontos</b>: O aluno recebe subpontos para cada resposta correta.</li>
<li><b>Diferença</b>: O aluno recebe um ponto dependendo do desvio da sua resposta selecionada de um valor pré-especificado (resposta correta). A fórmula para as pontuações de desvio: valor da diferença máxima atingível – (resposta do aluno – resposta correta)^2. A pontuação do desvio é depois transformada numa pontuação de crédito parcial variando entre 0 e 1, onde 1 representa uma resposta correta.</li>
</ul>';
$string['kany'] = 'Kprime (pelo menos uma correta, nenhuma resposta errada)';
$string['kprime'] = 'Kprime1/0';
$string['matrixheader'] = 'Matriz das respostas';
$string['multipleallowed'] = 'Permitir várias respostas em cada linha?';
$string['mustaddupto100'] = 'A soma de todos os pesos não negativos em cada linha tem de ser 100%';
$string['mustdefine1by1'] = 'Tem de definir pelo menos uma matriz 1 x 1, com uma resposta definida, curta ou longa, para cada linha e coluna';
$string['oneanswerperrow'] = 'Tem de indicar uma resposta para cada linha';
$string['pluginname'] = 'Matriz/Kprime';
$string['pluginname_help'] = '<p>As perguntas Matriz/Kprime consistem num item e quatro frases de respostas correspondentes. Para cada frase de resposta, os alunos devem assinalar se é verdadeira ou falsa.</p>';
$string['pluginname_link'] = 'question/type/matrix';
$string['pluginnameadding'] = 'A adicionar uma pergunta Matriz/Kprime';
$string['pluginnameediting'] = 'A editar uma pergunta Matriz/Kprime';
$string['pluginnamesummary'] = 'Em perguntas Kprime quatro frases devem ser corretamente classificadas como “verdadeiras” ou “falsas”.';
$string['privacy:metadata'] = 'O módulo Tipo de pergunta Matriz/Kprime não armazena quaisquer dados pessoais.';
$string['refresh_matrix'] = 'Atualizar matriz da resposta';
$string['rows_description'] = 'Descrição';
$string['rows_feedback'] = 'Feedback';
$string['rows_shorttext'] = 'Frases de resposta';
$string['rowsheader'] = 'Linhas da matriz';
$string['rowsheader_desc'] = '<p>O texto curto será usado, quando presente com o texto longo, como uma dica de ajuda.<br />Tenha em atenção de como será mostrado.</p>
<p>Os alunos podem selecionar uma ou várias colunas por linha, dependendo da configuração da pergunta, e a cada linha será atribuída uma nota pelo método de avaliação selecionado.</p>
<p>A nota final da pergunta é a média das notas para cada uma das linhas, com a exceção do tipo de avaliação Kprime, em que todas as respostas têm de estar corretas.</p>';
$string['show_non_kprime_gui'] = 'Mostrar interface gráfica do utilizador para opções que não são estritamente referentes à matriz Kprime (mais de quatro linhas, mais de duas colunas, várias opções).';
$string['shuffleanswers'] = 'Baralhar as frases de resposta?';
$string['shuffleanswers_help'] = 'Se ativar esta opção, a ordem das frases de resposta é baralhada aleatoriamente em cada tentativa, desde que, nas configurações da atividade, “Baralhar dentro das perguntas" também esteja ativo.';
$string['true'] = 'Verdadeiro';
$string['use_dnd_ui'] = 'Usar <b>arrastar</b>&<b>largar</b>?';
$string['weightednomultiple'] = 'Não faz sentido escolher uma classificação ponderada com várias respostas se tal não é permitido';
