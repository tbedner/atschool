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
 * Strings for component 'qformat_wordtable', language 'pt', version '4.4'.
 *
 * @package     qformat_wordtable
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotopentempfile'] = 'Não é possível abrir o ficheiro temporário <b>{$a}</b>';
$string['cannotreadzippedfile'] = 'Não é possível ler o ficheiro compactado <b>{$a}</b>';
$string['cannotwritetotempfile'] = 'Não é possível escrever no ficheiro temporário <b>{$a}</b>';
$string['cloze_distractor_column_label'] = 'Elementos de distração';
$string['cloze_feedback_column_label'] = 'Feedback acerca dos Elementos de distração';
$string['cloze_instructions'] = 'Use <strong>negrito</strong> para Escolha múltipla, <em>itálico</em> para Resposta curta e <u>sublinhado</u> para perguntas Numéricas.';
$string['cloze_mcformat_label'] = 'Orientação (D = lista pendente; V = vertical, H = botões de rádio horizontais)';
$string['description_instructions'] = 'Esta não é realmente uma pergunta. É apenas uma forma de acrescentar instruções, rubricas ou outros conteúdos à atividade. É similar à utilização dos separadores para adicionar conteúdo à página da disciplina.';
$string['docnotsupported'] = 'Ficheiros no formato Word 2003 não são suportados: <b>{$a}</b>. Como alternativa, use Moodle2Word 3.x';
$string['essay_instructions'] = 'Permite uma resposta com algumas frases ou parágrafos. Tem de ser posteriormente avaliada manualmente.';
$string['htmldocnotsupported'] = 'Formato Word incorreto: utilize <i>Ficheiro > Guardar como</i> para guardar <b>{$a}</b> no formato Word 2010 (.docx) e importe novamente';
$string['htmlnotsupported'] = 'Não são suportados ficheiros no formato HTML: <b>{$a}</b>';
$string['interface_language_mismatch'] = 'Nenhuma pergunta foi importada porque o idioma das etiquetas no ficheiro do Word não coincide com o idioma atual da interface do Moodle.';
$string['multichoice_instructions'] = 'Permite a selecção de uma ou várias respostas de um lista predefinida.';
$string['noquestions'] = 'Não existem perguntas para exportar';
$string['pluginname'] = 'Tabela no formato Microsoft Word 2010';
$string['pluginname_help'] = 'Este é um método para a conversão de ficheiros do Microsoft Word para o formato de Pergunta XML do Moodle para importação, e conversão do formato Pergunta XML do Moodle num formato adequado para edição no Microsoft Word.';
$string['pluginname_link'] = 'qformat/wordtable';
$string['preview_question_not_found'] = 'Pré-visualização da pergunta não encontrada, nome / ID da disciplina: {$a}';
$string['privacy:metadata'] = 'O módulo Formato de pergunta do WordTable não armazena quaisquer dados pessoais.';
$string['stylesheetunavailable'] = 'Folha de estilo XSLT <b>{$a}</b> não está disponível';
$string['transformationfailed'] = 'Ocorreu um erro na transformação XSLT (<b>{$a}</b>)';
$string['truefalse_instructions'] = 'Atribua nota \'100\' à resposta correta.';
$string['unsupported_instructions'] = 'A importação deste tipo de pergunta não é suportada.';
$string['word_about_moodle2word'] = 'Acerca do Moodle2Word';
$string['word_about_moodle2word_screentip'] = 'Acerca dos modelos Word do Moodle2Word e módulo do Moodle';
$string['word_addcategory_supertip'] = 'Os nomes das categorias usam o estilo Cabeçalho 1';
$string['word_currentquestion'] = '(Pergunta atual)';
$string['word_gapselect_screentip'] = 'Aviso: para este tipo de pergunta é necessário o módulo personalizado de Selecionar palavras.';
$string['word_import'] = 'Importar';
$string['word_multiple_answer'] = 'Múltipla resposta';
$string['word_new_question_file'] = 'Novo ficheiro de pergunta';
$string['word_new_question_file_screentip'] = 'As perguntas têm de ser guardadas no formato Word 2010 (.docx)';
$string['word_new_question_file_supertip'] = 'Cada ficheiro Word pode conter várias categorias';
$string['word_setunset_assessment_view'] = 'Ativar/desativar a Vista de avaliação';
$string['word_showhide_assessment_screentip'] = 'Mostrar metadados da pergunta a editar, ocultar para visualizar a avaliação impressa';
$string['word_showhide_assessment_supertip'] = 'Mostrar/ocultar o texto oculto';
$string['word_showhide_assessment_view'] = 'Mostrar/ocultar a Vista de avaliação';
$string['word_shuffle_screentip'] = 'Baralhar as respostas das perguntas Escolha múltipla, Verdadeiro/Falso e Múltipla resposta';
$string['word_shuffle_supertip'] = 'Baralhar mais do que uma vez';
$string['word_view'] = 'Visualizar';
$string['wordtable'] = 'Tabela no formato Microsoft Word 2010 (tabela do word)';
$string['wordtable_help'] = 'Este é um método para a conversão de ficheiros do Microsoft Word no formato Pergunta XML do Moodle para importação, e conversão do formato Pergunta XML do Moodle num formato XHTML melhorado para exportar num formato adequado para edição no Microsoft Word.';
$string['xmlnotsupported'] = 'Ficheiros no formato XML não são suportados: <b>{$a}</b>';
$string['xsltunavailable'] = 'É necessário que esteja instalada a biblioteca XSLT do PHP para guardar este ficheiro do Word';
