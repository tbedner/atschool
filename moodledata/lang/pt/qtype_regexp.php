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
 * Strings for component 'qtype_regexp', language 'pt', version '4.4'.
 *
 * @package     qtype_regexp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addahint'] = 'Adicionar uma sugestão';
$string['addingregexp'] = 'A adicionar pergunta de expressão regular';
$string['addmoreanswers'] = 'Adicionar mais {no} resposta(s)';
$string['answer'] = 'Resposta: ';
$string['answer1mustbegiven'] = 'Resposta 1 não pode estar vazia.';
$string['answermustbegiven'] = 'Tem de inserir uma resposta se houver uma nota ou feedback.';
$string['answerno'] = 'Resposta: {$a}';
$string['bestcorrectansweris'] = '<strong>A melhor resposta correta é:</strong><br />{$a}';
$string['calculatealternate'] = '(Re)Calcular respostas alternativas';
$string['caseno'] = 'Ignorar maiúsculas/minúsculas';
$string['casesensitive'] = 'Maiúsculas/minúsculas';
$string['caseyes'] = 'Respeitar maiúsculas/minúsculas';
$string['clicktosubmit'] = 'Complete ou corrija a sua resposta e clique em <strong>Verificar</strong> para submeter a resposta.';
$string['correctansweris'] = '<strong>Resposta correta:</strong><br />{$a}';
$string['correctanswersare'] = '<strong>Outras respostas possíveis:</strong>';
$string['editingregexp'] = 'A editar pergunta de expressão regular';
$string['filloutoneanswer'] = 'A <strong>Resposta 1</strong> tem de ser uma resposta correta (avaliação=100%) e não será analisada como uma expressão regular.';
$string['hidealternate'] = 'Ocultar respostas alternativas';
$string['illegalcharacters'] = '<strong>ERRO!</strong> Em respostas com nota > 0, estes caracteres especiais <em>sem \\</em> não são permitidos: <strong>{$a}</strong>';
$string['letter'] = 'Letra';
$string['misplacedwords'] = 'Palavras mal colocadas';
$string['notenoughanswers'] = 'Este tipo de pergunta requer pelo menos uma resposta';
$string['penaltyforeachincorrecttry'] = 'Penalização por tentativa incorreta e resgate de uma letra ou palavra';
$string['penaltyforeachincorrecttry_help'] = 'Quando executa as perguntas usando o comportamento das perguntas "Interativo com múltiplas tentativas" ou "Modo adaptável", o que permite ao aluno realizar várias tentativas para acertar a resposta, esta configuração determina o valor da penalização por cada tentativa incorreta.

A penalização é uma proporção da nota total da pergunta, por isso, se a pergunta "vale" três pontos e a penalização é 0.3333333, o aluno obterá 3 se acertar na primeira tentativa, 2 se acertar na segunda tentativa e 1 se acertar na terceira tentativa.

Se para para esta pergunta definiu o <strong>Modo do botão de ajuda</strong> como <strong>Letra</strong> ou <strong>Palavra</strong>, será aplicada a <strong><em>mesma penalização</em></strong> cada vez que o aluno clicar no botão <strong>Resgatar próxima letra/palavra</strong>.';
$string['pleaseenterananswer'] = 'Por favor, insira uma resposta.';
$string['pluginname'] = 'Resposta curta de expressão regular';
$string['pluginname_help'] = 'Clique com o botão direito do rato em <em>Mais Ajuda</em> para abrir a página de Ajuda num novo separador/janela.';
$string['pluginname_link'] = 'question/type/regexp';
$string['pluginnameadding'] = 'A adicionar pergunta de expressão regular';
$string['pluginnameediting'] = 'A editar pergunta de expressão regular';
$string['pluginnamesummary'] = 'Semelhante a Resposta curta, mas a análise das respostas do aluno é baseada em expressões regulares';
$string['privacy:metadata'] = 'O módulo Resposta curta de expressão regular não armazena quaisquer dados pessoais.';
$string['regexp'] = 'Resposta curta de expressão regular';
$string['regexp_help'] = 'Clique com o botão direito do rato em <em>Mais Ajuda</em> para abrir a página de Ajuda num novo separador/janela.';
$string['regexp_link'] = 'question/type/regexp';
$string['regexperror'] = 'Erro na expressão regular: <strong>{$a}<strong>';
$string['regexperrorclose'] = 'fechada: <strong>{$a}</strong>';
$string['regexperrornopermutations'] = '<strong>ERRO!</strong> Não existem palavras permutáveis dentro dos parênteses retos duplos!';
$string['regexperroroddunderscores'] = '<strong>ERRO!</strong> Existe um número ímpar de underscores dentro dos parênteses retos duplos!';
$string['regexperroropen'] = 'aberta: <strong>{$a}</strong>';
$string['regexperrorparen'] = '<strong>ERRO!</strong> Verifique os parênteses curvos ou os parênteses retos!';
$string['regexperrorsqbrack'] = 'Parênteses retos';
$string['regexperrortoomanypermutations'] = '<strong>ERRO!</ strong> Não são permitidos mais de dois conjuntos de permutação por resposta (parêntese retos duplos)!';
$string['regexpsensitive'] = 'Usar expressões regulares para verificar respostas';
$string['regexpsummary'] = 'Semelhante a Resposta curta, mas a análise das respostas do aluno é baseada em expressões regulares';
$string['settingsformultipletries'] = 'Múltiplas tentativas e resgate de letras ou palavras';
$string['showhidealternate'] = 'Mostrar/Ocultar respostas alternativas';
$string['showhidealternate_help'] = 'Calcular e mostrar todas as respostas corretas neste formulário. Pode demorar algum tempo e esforço do servidor, dependendo do número e complexidade das expressões regulares que inseriu nos campos de resposta!

No entanto, é a maneira recomendada de verificar se as expressões de "respostas corretas" estão escritas corretamente.';
$string['studentshowalternate'] = 'Mostrar alternativas';
$string['studentshowalternate_help'] = 'Mostrar <strong>todas</strong> as respostas alternativas corretas ao aluno quando estiver na página de revisão. Se selecionar "Sim", e existirem muitas respostas alternativas corretas geradas automaticamente, pode tornar a página de revisão bastante longa.';
$string['usehint'] = 'Modo do botão de ajuda';
$string['usehint_help'] = 'Se selecionar um modo diferente de <strong>Nenhum</strong>, estará disponível um botão que permite ao aluno obter a próxima letra, palavra ou pontuação.

No <strong>Modo adaptável</strong>, o botão mostrará "<strong>Resgatar próxima letra</strong>" ou "<strong>Resgatar próxima palavra</strong>" de acordo com o modo selecionado pelo professor. Para definir o "valor do resgate" de uma letra ou palavra, consulte <strong>Múltiplas tentativas e resgate de letras ou palavras</strong> mais abaixo nesta página.

No <strong>Modo adaptável sem penalização</strong>, o botão mostrará "<strong>Pedir próxima letra</strong>" ou "<strong>Pedir próxima palavra</strong>"

Por predefinição, o modo do botão de ajuda está definido como <b>Nenhum</b>';
$string['word'] = 'Palavra';
$string['wordorpunctuation'] = 'Palavra ou Pontuação';
$string['wrongwords'] = 'Palavras erradas';
