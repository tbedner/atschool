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
 * Strings for component 'qtype_varnumericset', language 'pt', version '4.4'.
 *
 * @package     qtype_varnumericset
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreanswerblanks'] = 'Adicionar mais {no} opções de resposta';
$string['addmorevariants'] = 'Adicionar mais {$a} espaços em branco para variantes';
$string['addmorevars'] = 'Adicionar mais {no} espaços em branco para variáveis';
$string['ae_numericallycorrect'] = 'A sua resposta está quase correta. Tem o valor correto e está arredondado corretamente.';
$string['ae_numericallycorrectandwrongformat'] = 'A sua resposta está quase correta. Tem o valor correto e está arredondado corretamente mas não está em notação científica.';
$string['ae_roundingincorrect'] = 'A sua resposta está quase correta. Está arredondado incorretamente.';
$string['ae_roundingincorrectandwrongformat'] = 'A sua resposta está quase correto. Está arredondado incorretamente e não está em notação científica.';
$string['ae_toomanysigfigs'] = 'A sua resposta está quase correta. Tem muitos algarismos significativos.';
$string['ae_toomanysigfigsandwrongformat'] = 'A sua resposta está quase correta. Tem muitos algarismos significativos e não está em notação científica.';
$string['ae_wrongbyfactorof10'] = 'A sua resposta está quase correta mas tem o fator 10 errado.';
$string['ae_wrongbyfactorof10andwrongformat'] = 'A sua resposta está quase correta. Tem o fator 10 errado e não está em notação científica.';
$string['answer'] = 'Reposta: {$a}';
$string['answermustbegiven'] = 'Tem de indicar uma resposta se houver uma nota ou feedback.';
$string['answerno'] = 'Reposta {$a}';
$string['autofirehdr'] = 'Dar feedback e atribuir nota parcial quando a resposta {$a} está parcialmente errada:';
$string['calculatewhen'] = 'Quando calcular os valores';
$string['cannotrecalculate'] = 'Não é possível recalcular os valores para variáveis calculadas, porque existem erros no formulário. Por favor, corrija os erros e, a seguir, pode recalcular os valores.';
$string['checknumerical'] = 'Se está numericamente correto';
$string['checkpowerof10'] = 'Se a potência de base 10 incorreta';
$string['checkrounding'] = 'Se o arredondamento está incorreto';
$string['checkscinotation'] = 'Se a notação científica é obrigatória mas não foi usada';
$string['correctansweris'] = 'Resposta correta: {$a}';
$string['correctansweriserror'] = '{$a->answer} <sup>+</sup>/<sub>-</sub> {$a->error}';
$string['correctanswerissigfigs'] = '{$a->answer} ({$a->sigfigs} algarismos significativos)';
$string['correctanswers'] = 'Respostas corretas';
$string['err_ousupsubnotsupportedonmobile'] = 'Esta pergunta requer sobrescrito ou subscrito e, portanto, ainda não funciona nesta aplicação. Responda a esta pergunta no navegador web.';
$string['error'] = 'Erro permitido +/-';
$string['errorreportedbyexpressionevaluator'] = 'Erro da avaliação da expressão: {$a}';
$string['expectingassignment'] = 'Tem de usar uma expressão matemática para atribuir um valor a uma \'variável calculada\'.';
$string['expectingvariablename'] = 'Espera-se aqui o nome da variável';
$string['expressionevaluatesasinfinite'] = 'O resultado é infinito.';
$string['expressionevaluatesasnan'] = 'O resultado não é um número.';
$string['expressionmustevaluatetoanumber'] = 'Tem de inserir uma expressão que avalie um número, não uma designação';
$string['filloutoneanswer'] = 'Tem de indicar pelo menos uma resposta possível.  As respostas em branco não serão consideradas. Pode usar o \'*\' como carácter universal. A primeira resposta coincidente será utilizada para determinar a nota e o feedback.';
$string['forallanswers'] = 'Para todas as respostas';
$string['hintoverride'] = 'Se a verificação automática permitir outra tentativa, não mostre esta ajuda ou aplique esta penalização';
$string['illegalthousandseparator'] = 'Utilizou na sua resposta um separador de milhares incorreto "{$a->thousandssep}". Só são consideradas as respostas com o separador decimal "{$a->decimalsep}".';
$string['notenoughanswers'] = 'Esse tipo de pergunta exige pelo menos {$a} respostas';
$string['notolerancehere'] = 'Não pode indicar uma tolerância para esta resposta com carácter universal';
$string['notvalidnumber'] = 'Digitou um número num formato não reconhecido.';
$string['notvalidnumberprepostfound'] = 'Por favor, insira apenas um número válido.';
$string['options'] = 'Opções';
$string['pleaseenterananswer'] = 'Indique uma resposta.';
$string['pluginname'] = 'Conjunto de variáveis numéricas';
$string['pluginname_help'] = 'Em resposta a uma pergunta, o aluno digita um número.

Os números usados na pergunta e usados para calcular a resposta são escolhidos de conjuntos predefinidos que podem ser previamente calculados a partir de expressões matemáticas.

Todas as expressões são calculadas no momento da criação da pergunta e os valores das funções aleatórias são os mesmos para todos os utilizadores. Para uma pergunta sem variantes, com expressões calculadas rapidamente e com valores aleatórios diferentes para cada utilizador, veja o tipo de pergunta \'Variável numérica\'.';
$string['pluginname_link'] = 'question/type/varnumericset';
$string['pluginnameadding'] = 'A adicionar uma pergunta de Conjunto de variáveis numéricas';
$string['pluginnameediting'] = 'A editar uma pergunta de Conjunto de variáveis numéricas';
$string['pluginnamesummary'] = 'Permite uma resposta numérica, a pergunta pode ter várias "variantes", as expressões são pré-avaliadas para cada variante da pergunta';
$string['preandpostfixesignored'] = 'Apenas a parte numérica da sua resposta foi avaliada.';
$string['privacy:metadata'] = 'O módulo Conjunto de variáveis numéricas não armazena dados pessoais.';
$string['questiontext'] = 'Texto da pergunta e variáveis incorporadas';
$string['questiontext_help'] = 'Pode incorporar nomes e expressões de variáveis no texto da pergunta, no feedback geral, no feedback de resposta e nas dicas

O que estiver entre dois parênteses retos será avaliado antes de ser mostrado. Isto é, se inserir, por exemplo, [[a]], o valor da variável \'a\' será mostrado e [[log (a)]] mostrará o log de a.

Se usar códigos printf (print formatted), pode especificar também como o resultado é mostrado. Por exemplo, [[a,.3e]] mostrará o valor de \'a\' em notação científica com 4 algarismos significativos.';
$string['randomseed'] = 'Cadeia para funcionar como origem do aleatório';
$string['recalculatenow'] = 'Recalcular agora';
$string['requirescinotation'] = 'Notação científica obrigatória';
$string['sigfigs'] = 'Algarismos significativos';
$string['syserrorpenalty'] = 'Para cada dedução de erro';
$string['unspecified'] = 'Não indicado';
$string['usesuperscript'] = 'Digite em sobrescrito';
$string['varheader'] = 'Variável {no}';
$string['variables'] = 'Variáveis';
$string['variant'] = 'Valor da variante {$a}';
$string['variants'] = 'Valor para variantes';
$string['variants_help'] = 'Insira os valores para a \'Variável predefinida\' OU se for uma \'Variável calculada\', os valores calculados serão mostrados aqui.

Para uma \'Variável predefinida\', tem de inserir um valor para pelo menos uma variante da pergunta e, para todas as variáveis predefinidas, deve preencher um número igual de caixas.

O Moodle determina automaticamente quantas variantes tem uma pergunta, tendo em conta o número valores de variantes preenchidos para variáveis predefinidas, ou se não existirem variáveis predefinidas, apenas calculadas, é assumido 5 variantes para a pergunta. Não é necessário preencher os últimos espaços em branco. Só estão disponíveis para adicionar mais valores para variantes da pergunta, se necessário.';
$string['varname'] = 'Nome ou designação';
$string['varname_help'] = 'Se selecionar "Variável predefinida", insira aqui apenas o nome da variável, por exemplo, \'a\'. Em seguida, insira abaixo os valores desta variável para cada variante da pergunta.

Se selecionar "Variável calculada", insira o nome da variável e atribua um valor de uma expressão, por exemplo, \'b = a ^ 4\' (onde \'a\' é a variável definida anteriormente).

Se deixar este campo em branco, todos os valores abaixo serão ignorados.';
$string['varnumericset'] = 'Conjunto de variáveis numéricas';
$string['varnumericset_help'] = 'Em resposta a uma pergunta, o aluno digita um número.

Os números usados na pergunta e usados para calcular a resposta são escolhidos de conjuntos predefinidos que podem ser previamente calculados a partir de expressões matemáticas.

Todas as expressões são calculadas no momento da criação da pergunta e os valores das funções aleatórias são os mesmos para todos os utilizadores. Para uma pergunta sem variantes, com expressões calculadas rapidamente e com valores aleatórios diferentes para cada utilizador, veja o tipo de pergunta \'Variável numérica\'.';
$string['varnumericset_link'] = 'question/type/varnumericset';
$string['varnumericsetsummary'] = 'Permite uma resposta numérica, a pergunta pode ter várias "variantes". As expressões são pré-avaliadas para cada variante da pergunta';
$string['vartypecalculated'] = 'Variável calculada';
$string['vartypepredefined'] = 'Variável predefinida';
$string['youmustprovideavalueforallvariants'] = 'Preencha um número igual de espaços em branco para todas as variáveis predefinidas, ou seja, um valor para cada variável predefinida para todas as variantes da pergunta.';
$string['youmustprovideavalueforatleastonevariant'] = 'Tem de indicar um valor aqui.';
