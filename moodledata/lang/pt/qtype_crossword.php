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
 * Strings for component 'qtype_crossword', language 'pt', version '4.4'.
 *
 * @package     qtype_crossword
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accentgradingignore'] = 'Avaliar apenas as letras e ignorar quaisquer acentos';
$string['accentgradingpenalty'] = 'Nota parcial se letras corretas, mas um ou mais acentos errados';
$string['accentgradingstrict'] = 'Letras acentuadas devem corresponder completamente';
$string['accentletters'] = 'Letras acentuadas';
$string['accentpenalty'] = 'Nota para respostas com acentos incorretos';
$string['across'] = 'Horizontal';
$string['addmorewordblanks'] = 'Adicionar mais {no} palavras';
$string['answer'] = 'Resposta';
$string['answeroptions'] = 'Opções da resposta';
$string['answerwithnumber'] = '{$a->number} {$a->orientation}: {$a->response}';
$string['celltitle'] = 'Linha {row}, Coluna {column}. {number} {orientation}. {clue}, letra {letter} de {count}';
$string['clue'] = 'Dica';
$string['correctanswer'] = 'Resposta correta: {$a}';
$string['down'] = 'Vertical';
$string['inputlabel'] = '{$a->number} {$a->orientation}. {$a->clue} Tamanho da resposta {$a->length}';
$string['missingresponse'] = '-';
$string['mustbealphanumeric'] = 'A resposta deve conter apenas caracteres alfanuméricos. Os caracteres especiais permitidos são os hifens e os apóstrofos.';
$string['notenoughwords'] = 'Este tipo de pergunta requer pelo menos {$a} palavra(s)';
$string['numberofcolumns'] = 'Número de colunas';
$string['numberofrows'] = 'Número de linhas';
$string['orientation'] = 'Orientação';
$string['overflowposition'] = 'A posição inicial ou final da palavra está fora do tamanho da grelha definido.';
$string['pleaseananswerallparts'] = 'Por favor, responda a todas as partes da pergunta.';
$string['pleaseenterclueandanswer'] = 'Tem de inserir a resposta e a dica para a palavra \'{$a}\'.';
$string['pluginname'] = 'Palavras-cruzadas';
$string['pluginname_help'] = 'As perguntas de palavras-cruzadas exigem que o inquirido preencha corretamente a grelha de palavras cruzadas. O autor da pergunta pode definir opções relacionadas com o uso de letras acentuadas.';
$string['pluginnameadding'] = 'A adicionar uma pergunta Palavras-cruzadas';
$string['pluginnameediting'] = 'A editar uma pergunta Palavras-cruzadas';
$string['pluginnamesummary'] = 'Uma pergunta de palavras-cruzadas baseada em texto simples. Atualmente, exige que o autor coloque manualmente as palavras (e, portanto, as letras sobrepostas) na grelha. Suporta dicas de conteúdo HTML e feedback específico para cada resposta. Existe também uma funcionalidade para atribuir notas parciais a palavras escritas sem caracteres acentuados corretamente.';
$string['preview'] = 'Pré-visualização';
$string['privacy:metadata'] = 'O módulo Palavras-cruzadas não armazena quaisquer dados pessoais.';
$string['refresh'] = 'Atualizar pré-visualização';
$string['smart_straight_quote_matching'] = 'Correspondência de aspas/apóstrofos';
$string['smart_straight_quote_matching_help'] = 'Se a opção "Relaxado" estiver ativada, todas as aspas e apóstrofos curvos (também conhecidos como "inteligentes") nos campos de criação de perguntas serão convertidos para a versão reta ao salvar.';
$string['smart_straight_quote_matching_relaxed'] = 'Relaxado: todas as formas de aspas e apóstrofos são permutáveis (padrão).';
$string['smart_straight_quote_matching_strict'] = 'Rigoroso: todas as formas de aspas e apóstrofos são únicas.';
$string['startcolumn'] = 'Índice da coluna';
$string['startrow'] = 'Índice da linha';
$string['updateform'] = 'Atualizar o formulário';
$string['wordhdrhelper_help'] = '<p>Uma vez que as palavras-cruzadas são geradas a partir da lista de palavras, pode gerar uma grelha única de palavras cruzadas para todos os utilizadores ou usar a opção \'Baralhar a estrutura das palavras cruzadas na nova tentativa\' para gerar uma nova grelha para cada nova tentativa por aluno (permitidas combinações de palavras).</p>
<p>Adicione as suas palavras e dicas usando os campos de texto. Se pretender que uma palavra específica seja fixada na grelha, ative a opção \'Fixar palavra na grelha\' e especifique a respetiva orientação e posicionamento.</p>
<p>Neste tipo de pergunta, é suportado a maioria dos caracteres, de A-Z, 0-9, diacríticos e símbolos de moeda, etc. Quaisquer aspas ou apóstrofos serão convertidos ou interpretados como versões \'retas\' para facilitar a entrada e a avaliação automática. </p>
<p>Adicione mais palavras selecionando o botão \'Adicionar mais 3 palavras\'. Quaisquer palavras em branco serão removidas quando a pergunta for guardada.</p>';
$string['wordlabel'] = 'P{$a->number}{$a->orientation}';
$string['wordno'] = 'Palavra {$a}';
$string['words'] = 'Palavras';
$string['words_help'] = 'Defina pelo menos uma palavra e a sua respetiva pista correspondente, e defina a sua direção e posição inicial. Lembre-se de que as palavras são numeradas na grelha de acordo com a sua ordem nesta secção.';
$string['wrongadjacentcharacter'] = 'Detetadas duas ou mais quebras de novas  palavras consecutivas. Use no máximo um entre palavras individuais. Tenha em atenção que isto não limita o número de novas palavras na própria resposta.';
$string['wrongintersection'] = 'A letra na interseção de duas palavras não coincide. A palavra não pode ser colocada aqui.';
$string['wrongoverlappingwords'] = 'Não pode haver duas palavras a começar no mesmo lugar, na mesma direção. Esta dica começa no mesmo local que "{$a}" acima.';
$string['wrongplugin'] = 'Este módulo é diferente do qtype_crossword existente. Desinstale o módulo existente antes de instalar este.';
$string['wrongpositionhyphencharacter'] = 'NÃO adicione um hífen antes ou depois do último caráter alfanumérico.';
$string['wrongpositionspacecharacter'] = 'NÃO adicione um espaço antes ou depois do último caráter alfanumérico.';
$string['yougot1right'] = '1 das suas respostas está correta.';
$string['yougotnright'] = '{$a->num} das suas respostas estão corretas.';
