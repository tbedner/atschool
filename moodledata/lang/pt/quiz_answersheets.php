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
 * Strings for component 'quiz_answersheets', language 'pt', version '4.4'.
 *
 * @package     quiz_answersheets
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admin_instruction_message'] = 'Instruções';
$string['admin_instruction_message_des'] = 'Texto que será mostrado na parte superior do relatório. Pode usar, por exemplo, para vincular a quaisquer políticas institucionais sobre a impressão de testes sumativos.';
$string['answer_sheet_label'] = 'Folha de respostas corretas';
$string['answer_sheet_title'] = '{$a->courseshortname} - \'{$a->quizname}\' - Folha de resposta';
$string['answersheets'] = 'Exportar tentativas';
$string['answersheets:bulkdownload'] = 'Descarregar folhas de revisão em massa';
$string['answersheets:componentname'] = 'Exportar tentativas do teste';
$string['answersheets:createattempt'] = 'Criar uma tentativa para outro utilizador';
$string['answersheets:submitresponses'] = 'Submeter respostas do aluno';
$string['answersheets:view'] = 'Ver a folha de tentativas';
$string['answersheets:viewrightanswers'] = 'Ver a folha de respostas corretas';
$string['answersheetsfilename'] = 'Tentativas_teste_exportaveis';
$string['answersheetsreport'] = 'Exportar tentativas';
$string['attempt_sheet_label'] = 'Folha de tentativa';
$string['attempt_sheet_title'] = '{$a->courseshortname} - \'{$a->quizname}\' - Folha de tentativa';
$string['bulkdownloadlink'] = 'Descarregar folhas de revisão em massa';
$string['bulkinstructions'] = 'Para poder descarregar folhas de revisão em massa, é necessário que tenha a ferramenta `save-answersheets` no seu computador. Depois de a ter:

1. As tentativas que serão descarregadas ao seguir estas instruções baseiam-se nas configurações do relatório que acabou de deixar. O que este processo fará é efetivamente seguir cada ligação da **Folha de revisão**. Portanto, se tiver alguma dúvida, volte atrás e verifique se o relatório está a mostrar as tentativas que deseja exportar.
2. Uma vez satisfeito, descarregue o [ficheiro de passos de descarga em massa]({$a->scripturl}) que dirá ao `save-answersheets` o que fazer. **Não se esqueça do aviso acima!**
3. Guarde esse ficheiro (que deve chamar-se `{$a->scriptname}-steps.txt`) na mesma pasta onde tem o `save-answersheets` no seu computador.
4. Abra uma janela da Linha de comandos e vá para essa pasta.
5. Digite o comando `.\\save-answersheets \'{$a->scriptname}-steps.txt\'` e aguarde que seja executado. Ele mostrará o que está a fazer à medida que avança.
6. Assim que o script terminar, deverá ter um ficheiro `{$a->scriptname}.zip` dentro da pasta `output`.
7. Lembre-se de apagar o ficheiro `{$a->scriptname}-steps.txt`.

Se apenas deseja os ficheiros para um aluno, pode executar um comando como
`.\\save-answersheets --download-only \'X1234567\' \'{$a->scriptname}-steps.txt\'`

Se apenas precisar dos anexos, sem o PDF da página de revisão, adicione `--skip-pdfs` ao comando. Isso é muito mais rápido.
Exemplo de comando: `.\\save-answersheets --skip-pdfs \'{$a->scriptname}-steps.txt\'`.

Estas duas opções podem ser combinadas, por exemplo, `.\\save-answersheets --skip-pdfs --download-only \'X1234567\' \'{$a->scriptname}-steps.txt\'`.

Se executar algum destes comandos novamente, eles apenas descarregarão ficheiros que ainda não foram obtidos. Isso pode ser útil, por exemplo, se apenas alguns alunos adicionais tiverem tentado o teste.';
$string['bulkinstructionstitle'] = 'Instruções para descarregar folhas de revisão em massa';
$string['bulkinstructionswarning'] = '<b>Aviso</b>: o ficheiro descarregado na etapa 2 (das instruções abaixo) contém informação suficiente para a ferramenta aceder às tentativas a serem guardadas na sessão atual. <b>Tem</b> de apagar esse ficheiro assim que terminar. Mantê-lo é um risco à segurança.';
$string['coderunner_instruction'] = 'Escreva a sua resposta no espaço disponibilizado.';
$string['column_answer_sheet'] = 'Folhas de resposta';
$string['column_attempt_sheet'] = 'Folhas de tentativa';
$string['column_submit_student_responses'] = 'Enviar respostas do aluno';
$string['combine_feedback_correct'] = 'Se correta:';
$string['combine_feedback_general'] = 'Feedback geral e outras informações:';
$string['combine_feedback_incorrect'] = 'Se incorreta:';
$string['combine_feedback_partially_correct'] = 'Se parcialmente correta:';
$string['create_attempt'] = 'Criar tentativa';
$string['create_attempt_modal_button'] = 'Criar';
$string['create_attempt_modal_description'] = 'Tem a certeza de que pretende criar uma tentativa do teste para {$a}?';
$string['create_attempt_modal_title'] = 'Confirmação';
$string['ddimageortext_instruction'] = 'Marque os pontos na imagem e escreva a letra da resposta correspondente (A, B, C, D, …) ao lado deles.
Depois do item está o número máximo de vezes que ele pode ser usado. Por exemplo: (1) significa que o item pode ser usado uma vez, (2) significa duas vezes, etc. Um asterisco (*) significa que o uso dos itens é ilimitado.';
$string['ddmarker_instruction'] = 'Marque os pontos na imagem e escreva a letra da resposta correspondente (A, B, C, D, …) ao lado deles.
Depois do item está o número máximo de vezes que ele pode ser usado. Por exemplo: (1) significa que o item pode ser usado uma vez, (2) significa duas vezes, etc. Um asterisco (*) significa que o uso dos itens é ilimitado.';
$string['ddwtos_instruction'] = 'Escreva a letra da resposta correspondente (A, B, C, D, ...)
no espaço disponibilizado. A seguir ao item está o número máximo de vezes que pode ser usado.
Por exemplo, (1) significa que o item pode ser usado uma vez, (2) significa duas vezes, etc.
Um asterisco (*) significa que o uso do item é ilimitado.';
$string['essay_instruction'] = 'Escreva a sua resposta no espaço disponibilizado.';
$string['event_attempt_created'] = 'Criada tentativa do teste para o utilizador';
$string['event_attempt_printed'] = 'Folha de tentativa do teste imprimida';
$string['event_attempt_viewed'] = 'Folha de tentativa do teste visualizada';
$string['event_responses_submitted'] = 'Respostas ao teste enviadas em nome do utilizador';
$string['event_right_answer_printed'] = 'Folha de respostas corretas do teste imprimida';
$string['event_right_answer_viewed'] = 'Folha de respostas corretas do teste visualizada';
$string['examcode'] = 'Código de confirmação';
$string['gapselect_instruction'] = 'Escreva a letra da resposta correspondente (A, B, C, D, ...)
no espaço disponibilizado.';
$string['interactive_content_warning'] = 'O conteúdo interativo não está disponível neste formato.';
$string['match_instruction'] = 'Escreva a letra da resposta correspondente (A, B, C, D, ...)
no espaço disponibilizado.';
$string['multichoice_instruction'] = 'Selecione a resposta correta.';
$string['no_response_recorded'] = 'Sem resposta guardada.';
$string['numerical_instruction'] = 'Escreva a sua resposta no espaço disponibilizado (valor numérico).';
$string['ordering_instruction'] = 'Escreva a sua resposta no espaço disponibilizado.';
$string['oumultiresponse_instruction'] = 'Selecione a(s) resposta(s) correta(s).';
$string['page_type_answer'] = 'Folha de resposta';
$string['page_type_attempt'] = 'Folha de tentativa';
$string['page_type_review'] = 'Folha de revisão';
$string['pluginname'] = 'Exportar tentativas do teste';
$string['pmatch_instruction'] = 'Escreva a sua resposta no espaço disponibilizado. Apenas uma frase ou duas.';
$string['pmatchjme_instruction'] = 'Escreva a sua resposta no espaço disponibilizado.';
$string['print'] = 'Imprimir';
$string['print_header'] = '{$a->courseshortname} - \'{$a->quizname}\' de {$a->studentname} gerada em {$a->generatedtime} - {$a->sheettype}';
$string['print_header_minimised'] = '{$a->courseshortname} - \'{$a->quizname}\' gerada em {$a->generatedtime} - {$a->sheettype}';
$string['privacy:metadata'] = 'O módulo Exportar tentativas de teste não armazena quaisquer dados pessoais. Fornece uma interface adicional para visualizar e gerir os dados pertencentes à atividade Teste.';
$string['response_recorded'] = 'Resposta guardada: {$a}.';
$string['review_sheet_label'] = 'Folha de revisão';
$string['review_sheet_title'] = '{$a->courseshortname} - \'{$a->quizname}\' - Folha de revisão';
$string['rightanswersheet'] = 'Folha das respostas corretas:';
$string['shortanswer_instruction'] = 'Escreva a sua resposta no espaço disponibilizado. Apenas uma ou duas frases.';
$string['showcombinefeedback'] = 'Mostrar "Feedback combinado"?';
$string['showgeneralfeedback'] = 'Mostrar "Feedback geral"?';
$string['showinlinefeedback'] = 'Mostrar todos os comentários inseridos?';
$string['showmarkedoutoftext'] = 'Mostrar o texto "Nota"?';
$string['showquestioninstruction'] = 'Mostrar o texto de instrução predefinido?';
$string['showuserinfo'] = 'A identificar informações para mostrar acerca dos utilizadores';
$string['stack_instruction'] = 'Escreva a sua resposta no espaço disponibilizado.';
$string['strftime_header'] = '%d %b %Y às %H:%M';
$string['submit_student_responses_dialog_content'] = 'Tem a certeza de que pretende submeter?';
$string['submit_student_responses_label'] = 'Submeter respostas';
$string['submit_student_responses_on_behalf'] = 'Enviar respostas em nome de {$a} e terminar a tentativa';
$string['submit_student_responses_title'] = '{$a}: Enviar respostas do aluno';
$string['truefalse_instruction'] = 'Selecione a resposta correta.';
$string['user_identity_fields'] = '&nbsp;({$a})';
$string['varnumeric_instruction'] = 'Escreva a sua resposta no espaço disponibilizado.';
$string['varnumericset_instruction'] = 'Escreva a sua resposta no espaço disponibilizado.';
$string['varnumunit_instruction'] = 'Escreva a sua resposta no espaço disponibilizado.';
$string['webservicecannotcreateattempts'] = 'Não é possível criar a tentativa';
$string['wordselect_instruction'] = 'Selecione a(s) resposta(s) fazendo um círculo nas palavras-chave.';
