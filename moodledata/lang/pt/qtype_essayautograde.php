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
 * Strings for component 'qtype_essayautograde', language 'pt', version '4.4'.
 *
 * @package     qtype_essayautograde
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmultiplebands'] = 'Adicionar mais {$a} frações da nota';
$string['addmultiplephrases'] = 'Adicionar mais {$a} frases-alvo';
$string['addpartialgrades'] = 'Atribuir notas parciais?';
$string['addpartialgrades_help'] = 'Se ativar esta opção, as notas serão o somatório das frações da nota que foram concluídas.';
$string['addsingleband'] = 'Adicionar mais 1 fração da nota';
$string['addsinglephrase'] = 'Adicionar mais 1 frase-alvo';
$string['aiassistant'] = 'Assistente IA';
$string['aiassistant_help'] = 'Selecione o assistente IA de avaliação, se existir, que pretende utilizar para gerar feedback e notas preliminares para as submissões dos alunos';
$string['aiassistantnotenabled'] = 'Atualmente não existem assistentes de IA geradores de texto ativados neste site Moodle. Peça ao administrador do Moodle para adicionar definições para um fornecedor de IA (Administração do Site > IA)';
$string['aipercent'] = 'Nota IA';
$string['aipercent_help'] = 'Selecione a percentagem de contribuição da nota da IA para a nota final desta pergunta.';
$string['aiprompt'] = 'Prompt IA';
$string['aiprompt_help'] = 'Adicione um prompt adequado para enviar a um assistente de IA para obter feedback e/ou uma nota para o trabalho enviado pelos alunos.';
$string['aisettings'] = 'Configurações IA';
$string['allowsimilarity'] = 'Permitir semelhança?';
$string['allowsimilarity_help'] = 'O nível máximo de semelhança permitido entre a resposta de um aluno e o modelo de resposta ou amostra de resposta. Quanto maior este valor, mais semelhante pode ser a resposta do aluno ao modelo ou amostra. Por outro lado, quanto menor o valor, mais diferente deve ser a resposta do aluno em relação ao modelo ou amostra. Ajustar este valor pode afetar o nível de originalidade e detalhes exigidos dos alunos nas suas respostas.';
$string['allowsimilaritypercent'] = 'Sim - permitir até {$a}% de semelhança';
$string['auto'] = 'Auto';
$string['autograding'] = 'Avaliação automática';
$string['bandtext'] = 'Para {$a->count} ou mais itens, atribuir {$a->percent} da nota da pergunta.';
$string['bandtext1'] = 'Para';
$string['bandtext2'] = 'ou mais itens, atribuir';
$string['bandtext3'] = 'da nota da pergunta.';
$string['chars'] = 'Caracteres';
$string['charspersentence'] = 'Caracteres por frase';
$string['commonerror'] = 'Erro comum';
$string['commonerrors'] = 'Erros comuns';
$string['commonerrors_help'] = 'Os erros comuns estão definidos no "Glossário de erros" associado a esta pergunta.';
$string['correctresponse'] = 'Para obter a nota máxima desta pergunta, deve cumprir os seguintes critérios:';
$string['countcharslabel'] = 'Número atual de caracteres';
$string['countfileslabel'] = 'Número atual de ficheiros';
$string['countparagraphslabel'] = 'Número atual de parágrafos';
$string['countsentenceslabel'] = 'Número atual de frases';
$string['countwordslabel'] = 'Número atual de palavras';
$string['crop'] = 'Cortar';
$string['enableautograde'] = 'Ativar a avaliação automática';
$string['enableautograde_help'] = 'Ativar, ou desativar, a avaliação automática';
$string['errorbehavior'] = 'Erro no comportamento de correspondência';
$string['errorbehavior_help'] = 'Estas configurações refinam o comportamento de correspondência para entradas no Glossário de erros comuns.';
$string['errorcmid'] = 'Glossário de erros';
$string['errorcmid_help'] = 'Escolha o Glossário que contém a lista dos erros comuns.

Cada vez que um dos erros é encontrado na resposta, será descontada da nota do aluno a penalização especificada para esta pergunta.';
$string['errorpercent'] = 'Penalização por erro';
$string['errorpercent_help'] = 'Selecione a percentagem da nota total que deve ser descontada por cada erro encontrado na resposta.';
$string['excludecommonerrors'] = 'Não cometa nenhum erro comum dos apresentados em <a href="{$a->href}" target="_blank">{$a->name}</a>';
$string['explanationautopercent'] = 'Ultrapassa o intervalo normal de percentagem, por isso, foi ajustado para {$a->autopercent}%.';
$string['explanationcommonerror'] = '{$a->percent}% por incluir "{$a->error}", que é um erro comum';
$string['explanationcompleteband'] = '{$a->percent}% por completar a fração da nota [{$a->gradeband}]';
$string['explanationdatetime'] = 'em %Y %b %d (%a) às %H:%M';
$string['explanationfiles'] = '{$a->percent}% por ter submetido {$a->filecount}/{$a->itemcount} ficheiros';
$string['explanationfirstitems'] = '{$a->percent}% para o primeiro {$a->count} {$a->itemtype}';
$string['explanationgrade'] = 'A nota gerada automaticamente para esta resposta foi definida como {$a->finalgrade} = ({$a->finalpercent}% de {$a->maxgrade}).';
$string['explanationitems'] = '{$a->percent}% por {$a->count} {$a->itemtype}';
$string['explanationmaxgrade'] = 'A nota máxima para esta pergunta é {$a->maxgrade}.';
$string['explanationnotenough'] = '{$a->count} {$a->itemtype} é menor do que o valor mínimo necessário para obter uma nota.';
$string['explanationoverride'] = 'Em {$a->datetime}, a nota para esta resposta foi alterada manualmente para {$a->manualgrade}.';
$string['explanationpartialband'] = '{$a->percent}% por completar parcialmente a fração da nota [{$a->gradeband}]';
$string['explanationpenalty'] = 'Foi descontado {$a->penaltytext} por verificar a resposta antes da submissão.';
$string['explanationrawpercent'] = 'A nota bruta (em percentagem) para esta resposta é {$a->rawpercent}% <br /> = {$a->details}.';
$string['explanationremainingitems'] = '{$a->percent}% para os restantes {$a->count} {$a->itemtype}';
$string['explanationseecomment'] = '(ver comentário abaixo)';
$string['explanationtargetphrase'] = '{$a->percent} por incluir a frase "{$a->phrase}"';
$string['feedback'] = 'Feedback';
$string['feedbackhintbreaks'] = 'Usa muitas quebras de linha?';
$string['feedbackhintchars'] = 'Escreveu o número obrigatório de caracteres?';
$string['feedbackhinterrors'] = 'Cometeu algum erro comum?';
$string['feedbackhintfiles'] = 'Anexou o número obrigatório de ficheiros?';
$string['feedbackhintparagraphs'] = 'Escreveu o número obrigatório de parágrafos?';
$string['feedbackhintphrases'] = 'Utilizou todas as frases-alvo?';
$string['feedbackhints'] = 'Sugestões para melhorar a nota';
$string['feedbackhintsentences'] = 'Escreveu o número obrigatório de frases?';
$string['feedbackhintwords'] = 'Alcançou o objetivo do número de palavras?';
$string['files'] = 'Ficheiros';
$string['fogindex'] = 'Índice de legibilidade';
$string['fogindex_help'] = 'O índice Gunning é uma medida de legibilidade. É calculado através da seguinte fórmula:

* ((palavras por frase) + (palavras longas por frase)) x 0.4

Para mais informações, aceda a <https://en.wikipedia.org/wiki/Gunning_fog_index>';
$string['forceupgrade'] = 'Forçar atualização';
$string['gradeband'] = 'Fração da nota [{no}]';
$string['gradeband_help'] = 'Especifique o número mínimo de itens contáveis para aplicar esta fração e a nota a ser atribuída se for aplicada esta fração.';
$string['gradebands'] = 'Fração da nota';
$string['gradecalculation'] = 'Cálculo da nota';
$string['gradeforthisquestion'] = 'Nota desta pergunta';
$string['hidden'] = 'Oculta';
$string['hidesample'] = 'Ocultar exemplo';
$string['itemcount'] = 'Número de itens previstos';
$string['itemcount_help'] = 'O número mínimo de itens contáveis que devem estar na resposta de modo a obter a nota máxima para esta pergunta.

Tenha em atenção que este valor pode tornar-se ineficaz pelas frações da nota definidas abaixo, caso existam.';
$string['itemtype'] = 'Tipo de itens contáveis';
$string['itemtype_help'] = 'Selecione o tipo de itens a pesquisar no texto da resposta que contribuirão para a avaliação automática.';
$string['lexicaldensity'] = 'Densidade lexical';
$string['lexicaldensity_help'] = 'A densidade lexical é uma percentagem calculada através da seguinte fórmula:

* 100 x (número de palavras únicas) / (número total de palavras)

Uma resposta com muitas palavras repetidas tem uma baixa densidade lexical, enquanto que com muitas palavras únicas tem alta densidade lexical.';
$string['longwords'] = 'Palavras longas';
$string['longwords_help'] = '"Palavras longas" são palavras que possuem três ou mais sílabas. Tenha em atenção que o algoritmo para determinar o número de sílabas produz apenas resultados aproximados.';
$string['longwordspersentence'] = 'Palavras longas por frase';
$string['maximumfilecount'] = 'Número máximo de ficheiros: {$a}';
$string['maximumfilesize'] = 'Tamanho máximo do ficheiro: {$a}';
$string['maxwordserror'] = 'Oops, escreveu muitas palavras!';
$string['maxwordslabel'] = 'Número máximo de palavras';
$string['maxwordswarning'] = 'Já escreveu demasiadas palavras!';
$string['minimumfilecount'] = 'Número mínimo de ficheiros: {$a}';
$string['minwordserror'] = 'Oops, não escreveu palavras suficientes.';
$string['minwordslabel'] = 'Número mínimo de palavras';
$string['minwordswarning'] = 'Continue! Ainda não escreveu palavras suficientes.';
$string['missing'] = 'Em falta';
$string['overflow'] = 'Transbordo';
$string['paragraphs'] = 'Parágrafos';
$string['phrasebehavior'] = 'Comportamento da frase-alvo [{no}]';
$string['phrasebehavior_help'] = 'Estas configurações melhoram o comportamento de correspondência para esta frase-alvo.';
$string['phrasecasesensitiveno'] = 'Não distinguir maiúsculas de minúsculas.';
$string['phrasecasesensitiveyes'] = 'Distinguir maiúsculas de minúsculas';
$string['phrasedivisor'] = 'Divisor de frases';
$string['phrasefullmatchno'] = 'Corresponder a palavras completas ou parciais';
$string['phrasefullmatchyes'] = 'Corresponder apenas a palavras completas';
$string['phraseignorebreaksno'] = 'Reconhecer quebras de linha.';
$string['phraseignorebreaksyes'] = 'Ignorar quebras de linha.';
$string['phrasematch'] = 'Correspondência de frases';
$string['phrasepercent'] = 'Percentagem de frase';
$string['phrasepercentdividedby'] = 'dividido por {$a}';
$string['phrasepercentexactly'] = 'exatamente';
$string['phrasetext'] = 'Se for usado \'{$a->phrase}\', atribuir {$a->percent} da nota da pergunta.';
$string['phrasetext1'] = 'Se';
$string['phrasetext2'] = 'é usado, atribuir';
$string['phrasetext4'] = 'da nota da pergunta.';
$string['pleaseattachfiles'] = 'Anexe o número obrigatório de ficheiros.';
$string['pleaseinputtext'] = 'Digite sua resposta na caixa de texto.';
$string['pluginname'] = 'Desenvolvimento (avaliação automática)';
$string['pluginname_help'] = 'Em resposta a uma pergunta que pode incluir uma imagem, o aluno escreve um texto com um ou mais parágrafos. Inicialmente, é atribuída uma nota automática com base no número de caracteres, palavras, frases ou parágrafos e a presença de determinadas frases-alvo. Mais tarde, a nota automática pode ser alterada pelo professor.';
$string['pluginname_link'] = 'question/type/essayautograde';
$string['pluginnameadding'] = 'A adicionar uma pergunta de desenvolvimento (avaliação automática)';
$string['pluginnameediting'] = 'A editar uma pergunta de desenvolvimento (avaliação automática)';
$string['pluginnamesummary'] = 'Permite que várias frases ou parágrafos sejam enviados como resposta a uma pergunta. A pergunta é avaliada automaticamente. A nota pode ser alterada mais tarde.';
$string['present'] = 'Presente';
$string['privacy:metadata'] = 'O módulo Tipo de pergunta de desenvolvimento (avaliação automática) não armazena quaisquer dados pessoais.';
$string['requiredfilecount'] = 'Número obrigatório de ficheiros: {$a}';
$string['responseisnotoriginal'] = 'Por favor, escreva um texto mais original.';
$string['responsesample'] = 'Exemplo de resposta';
$string['responsesample_help'] = 'Qualquer texto inserido aqui será mostrado como um exemplo de resposta, cada vez que o aluno clicar em "Mostrar exemplo" no texto da pergunta.';
$string['responsesampleformat'] = 'Formato do texto do exemplo de resposta.';
$string['responsesampleformat_help'] = 'Selecione o formato do texto do exemplo de resposta.';
$string['rewriteresubmit'] = '&nbsp;e submeta novamente.';
$string['rewriteresubmitbreaks'] = 'remova qualquer quebra de linha';
$string['rewriteresubmitchars'] = 'adicione mais caracteres';
$string['rewriteresubmiterrors'] = 'corrija os erros comuns,';
$string['rewriteresubmitfiles'] = 'anexe o número obrigatório de ficheiros';
$string['rewriteresubmitjoin'] = ',&nbsp;';
$string['rewriteresubmitparagraphs'] = 'adicione mais parágrafos';
$string['rewriteresubmitphrases'] = 'adicione as frases que faltam';
$string['rewriteresubmitsentences'] = 'adicione mais frases';
$string['rewriteresubmitwords'] = 'adicione mais palavras';
$string['rotate'] = 'Rodar';
$string['scale'] = 'Escala';
$string['sentences'] = 'Frases';
$string['sentencesperparagraph'] = 'Frases por parágrafo';
$string['showcalculation'] = 'Mostrar cálculo da nota?';
$string['showcalculation_help'] = 'Se ativar esta opção, será mostrada, nas páginas de avaliação e revisão, uma explicação do cálculo da nota gerada automaticamente.';
$string['showfeedback'] = 'Mostrar feedback?';
$string['showfeedback_help'] = 'Se ativar esta opção, uma tabela de feedback de ação será mostrada nas páginas de avaliação e revisão. O feedback de ação é um feedback que sugere aos alunos o que podem fazer para melhorar a nota.';
$string['showgradebands'] = 'Mostrar frações da nota?';
$string['showgradebands_help'] = 'Se ativar esta opção, os detalhes das frações da nota serão mostrados nas páginas de avaliação e revisão.';
$string['showsample'] = 'Mostrar exemplo';
$string['showtargetphrases'] = 'Mostrar frases-alvo?';
$string['showtargetphrases_help'] = 'Se ativar esta opção, os detalhes das frases-alvo serão mostrados nas páginas de avaliação e revisão.';
$string['showtextstats'] = 'Mostrar estatísticas do texto?';
$string['showtextstats_help'] = 'Se ativar esta opção, serão mostradas as estatísticas do texto da resposta.';
$string['showtostudentsonly'] = 'Apenas aos alunos';
$string['showtoteachersandstudents'] = 'Aos alunos e professores';
$string['showtoteachersonly'] = 'Apenas aos professores';
$string['targetphrase'] = 'Frase-alvo [{no}]';
$string['targetphrase_help'] = 'Especifique a nota que será adicionada se esta frase-alvo aparecer na resposta.

> **Por exemplo,** Se [Finalmente] for usado, atribuir [10% da nota da pergunta]

A frase-alvo pode ser uma única frase ou uma lista de frases separadas por uma vírgula "," ou a palavra "OR" (maiúscula).

> **Por exemplo,** Se [Finalmente OR Por último] for usado, atribuir [10% da nota da pergunta]

Um ponto de interrogação "?" numa frase corresponde a qualquer carácter, enquanto que um asterisco "*" corresponde a um número arbitrário de caracteres (incluindo \'zero\' caracteres).

> **Por exemplo,** Se [Primeiro\\*Então\\*Finalmente] for usado, atribuir [50% da nota da pergunta]';
$string['targetphrases'] = 'Frases-alvo';
$string['textstatistics'] = 'Estatísticas do texto da resposta';
$string['textstatitems'] = 'Itens estatísticos';
$string['textstatitems_help'] = 'Selecione todos os itens que pretende que apareçam nas estatísticas do texto que serão mostradas nas páginas de avaliação e revisão.';
$string['uniquewords'] = 'Palavras únicas';
$string['uploadfiles'] = 'Carregar ficheiros';
$string['visible'] = 'Visível';
$string['words'] = 'Palavras';
$string['wordspersentence'] = 'Palavras por frase';
