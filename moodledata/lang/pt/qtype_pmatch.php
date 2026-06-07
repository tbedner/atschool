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
 * Strings for component 'qtype_pmatch', language 'pt', version '4.4'.
 *
 * @package     qtype_pmatch
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add'] = 'Adicionar';
$string['addmoreanswerblanks'] = 'Adicionar mais {no} opções de resposta';
$string['addmoresynonymblanks'] = 'Adicionar mais {no} sinónimos';
$string['addtoanswer'] = 'Adicionar à resposta';
$string['allowsubscript'] = 'Permitir o uso de subscrito';
$string['allowsuperscript'] = 'Permitir o uso de sobrescrito';
$string['amatiwsurl'] = 'URL do web service AMATI';
$string['amatiwsurl_desc'] = 'URL para o web service AMATI';
$string['answer'] = 'Resposta: {$a}';
$string['answeringoptions'] = 'Configurações das respostas';
$string['answermustbegiven'] = 'Tem de indicar uma resposta se houver avaliação ou feedback.';
$string['answerno'] = 'Resposta: <b>{$a}</b>';
$string['answeroptions'] = 'Opções';
$string['anyotheranswer'] = 'Outras respostas';
$string['apply_spellchecker_label'] = 'Não verificar a ortografia do aluno';
$string['apply_spellchecker_missing_language_attempt'] = 'Esta pergunta está configurada para usar a verificação ortográfica de \'{$a}\' mas o idioma não está disponível neste servidor.';
$string['apply_spellchecker_missing_language_select'] = '{$a} (Atenção! Este dicionário não está instalado neste servidor)';
$string['apply_spellchecker_select'] = '{$a->name} ({$a->code})';
$string['applydictionarycheck'] = 'Verificar ortografia';
$string['caseno'] = 'Não, é indiferente';
$string['casesensitive'] = 'Maiúsculas e minúsculas';
$string['caseyes'] = 'Sim, devem coincidir';
$string['choosetoken'] = 'Escolher token';
$string['combinedcontrolnamepmatch'] = 'entrada de texto';
$string['converttospace'] = 'Converter em espaços';
$string['converttospace_help'] = 'Especifique os caracteres que pretende que o sistema converta em espaços antes da verificação de \'Coincide com padrão\'. Também é bastante útil para simplificar a avaliação da resposta quando a pontuação não é considerada.';
$string['correctanswers'] = 'Resposta correspondente';
$string['env_dictmissing'] = 'O dicionário de verificação ortográfica \'{$a->langforspellchecker}\' que estava em falta para o idioma instalado \'{$a->humanfriendlylang}\' está instalado.';
$string['env_dictmissing2'] = 'Um aluno tentou uma verificação ortográfica no idioma \'{$a}\'. No entanto, o dicionário \'aspell\' para este idioma não está instalado.';
$string['env_dictok'] = 'Está instalado o dicionário de verificação ortográfica \'{$a->langforspellchecker}\' para o idioma instalado \'{$a->humanfriendlylang}\'.';
$string['env_peclnormalisationmissing'] = 'O pacote PECL para o Normalizador Unicode parece não estar corretamente instalado';
$string['env_peclnormalisationok'] = 'O pacote PECL para o Normalizador Unicode parece estar corretamente instalado';
$string['env_pspellmissing'] = 'A livraria Pspell parece não estar corretamente instalada';
$string['env_pspellok'] = 'A livraria Pspell parece estar corretamente instalada';
$string['environmentcheck'] = 'Verificações para perguntas do tipo \'Coincide com padrão\'';
$string['err_ousupsubnotsupportedonmobile'] = 'Esta pergunta requer sobrescritos ou subscritos mas esta funcionalidade ainda não funciona neste módulo. Por favor, responda a esta pergunta no navegador web.';
$string['err_providepmatchexpression'] = 'Tem de indicar uma expressão para \'Coincidir com padrão\'.';
$string['error:blank'] = 'A resposta não pode ficar vazia';
$string['error:title'] = 'Erro';
$string['errorfilecell'] = 'O ficheiro requer pelo menos duas linhas (a primeira linha é a linha de cabeçalho e da segunda linha em diante para as respostas).';
$string['errorfilecolumnbigger'] = 'O ficheiro tem mais de duas colunas. Por favor, inclua apenas a nota prevista e a resposta.';
$string['errorfilecolumnless'] = 'O ficheiro requer pelo menos duas colunas (a primeira coluna para as notas previstas e a segunda coluna para as respostas).';
$string['errorfileformat'] = 'O ficheiro deve estar no formato \'.csv/.xlsx/.html/.json/.ods\'.';
$string['errors'] = 'Corrija os seguintes erros: {$a}';
$string['exclude'] = 'Excluir';
$string['extenddictionary'] = 'Palavras a adicionar ao dicionário';
$string['filloutoneanswer'] = 'Use a sintaxe de \'Coincide com padrão\' para descrever as respostas corretas. A resposta do aluno será comparada por esta ordem e a primeira coincidência com um padrão determinará a pontuação e o feedback. Tem de indicar pelo menos um padrão.<br>Precisão global da avaliação:';
$string['forcelength'] = 'Se a resposta tem mais do que 20 palavras';
$string['forcelengthno'] = 'não emitir aviso';
$string['forcelengthyes'] = 'avisar que a resposta é muito longa e pedir para encurtar o texto';
$string['ie_illegaloptions'] = 'Opções não permitidas na expressão "match<strong><em>{$a}</em></strong>()".';
$string['ie_lastsubcontenttypeorcharacter'] = 'O carácter OU não deve terminar o sub conteúdo de "{$a}".';
$string['ie_lastsubcontenttypeworddelimiter'] = 'O carácter delimitador de palavras não pode terminar o sub conteúdo "{$a}".';
$string['ie_missingclosingbracket'] = 'Falta fechar o parêntese no fragmento de código "{$a}".';
$string['ie_nofullstop'] = 'O carácter de paragem completa (. ponto final) não é permitido nas expressões de \'Coincide com padrão\' (são permitidos pontos decimais nos números).';
$string['ie_nomatchfound'] = 'Erro no código de \'Coincide com padrão\'.';
$string['ie_unrecognisedexpression'] = 'Expressão não reconhecida';
$string['ie_unrecognisedsubcontents'] = 'Subconteúdo não reconhecido no fragmento de código "{$a}".';
$string['inputareatoobig'] = 'A área de entrada definida por "{$a}" é muito grande. O tamanho da área de entrada é limitado a uma largura de 150 caracteres e uma altura de 100 caracteres.';
$string['minresponses'] = 'Número mínimo de respostas';
$string['minresponses_desc'] = 'Número mínimo de respostas avaliadas que devem ser carregadas para que o sistema AMATI possa criar as regras';
$string['modelanswer'] = 'Modelo de resposta';
$string['modelanswer_help'] = 'Dê uma resposta possível a esta pergunta que seja avaliada corretamente.';
$string['modelanswererror'] = '\'<strong>{$a}</strong>\' não é a resposta correta desta pergunta.';
$string['nolanguagesfound'] = '<i>Nenhum idioma encontrado</i>';
$string['nomatchingsynonymforword'] = 'Não existem sinónimos para esta palavra. Apague a palavra ou insira sinónimos para a palavra.';
$string['nomatchingwordforsynonym'] = 'Não inseriu uma palavra com a qual o sinónimo é equivalente. Apague o(s) sinónimo(s) ou insira uma palavra equivalente para ele.';
$string['notenoughanswers'] = 'Este tipo de pergunta requer, pelo menos, {$a} respostas';
$string['or'] = 'Ou';
$string['pleaseenterananswer'] = 'Indique uma resposta';
$string['pluginname'] = 'Coincide com padrão';
$string['pluginname_help'] = 'Em resposta a uma pergunta (que pode incluir uma imagem), o respondente escreve uma frase curta. Podem existir várias respostas corretas possíveis, cada uma com uma nota e feedback diferente. Se na opção "Maiúsculas e minúsculas" estiver selecionada \'Sim, devem coincidir\', as resposta "Palavra" ou "palavra" poderão ter notas diferentes .';
$string['pluginname_link'] = 'question/type/pmatch';
$string['pluginnameadding'] = 'Adicionar pergunta de \'Coincide com padrão\'';
$string['pluginnameediting'] = 'Editar pergunta de \'Coincide com padrão\'';
$string['pluginnamesummary'] = 'Permite uma resposta curta, com uma ou algumas frases, que é avaliada comparando-a com as várias respostas modelo e que são descritas usando a sintaxe de \'Coincide com padrão\'.';
$string['precedes'] = 'Antecede';
$string['precedesclosely'] = 'Antecede de perto';
$string['processingxofy'] = 'A processar resposta {$a->row} de {$a->total}: {$a->response}.';
$string['repeatedword'] = 'Esta palavra aparece mais do que uma vez na lista de sinónimos.';
$string['resetrule'] = 'Reiniciar regra';
$string['row'] = 'Linha';
$string['rule'] = 'Regra';
$string['ruleaccuracy'] = 'Respostas acima que não coincidem: {$a->responseneedmatch}  <br> Coincidem corretamente por esta regra: {$a->correctlymatched}, <span class="{$a->class}"> Coincidem incorretamente: {$a->incorrectlymatched}</span> <br> Respostas ainda por processar abaixo: {$a->responsestillprocess}';
$string['ruleaccuracylabel'] = 'Efeito nas respostas da amostra';
$string['rulecreationasst'] = 'Mostrar/ocultar o assistente de criação de regras';
$string['rulecreationtoomanyors'] = 'Muitos termos OU.';
$string['rulecreationtoomanyterms'] = 'Muitos termos.';
$string['rulesuggestionbutton'] = 'Gerar automaticamente regras de coincidência';
$string['rulesuggestiondescriptionnoresponses'] = 'Gerar automaticamente regras de coincidência ao carregar um conjunto de respostas existentes já avaliadas';
$string['rulesuggestionlabel'] = 'Sugestão de regra';
$string['savedxresponses'] = '{$a} respostas guardadas';
$string['sentencedividers'] = 'Pontuação de final de frases';
$string['sentencedividers_help'] = 'Especifique os caracteres que o sistema deve considerar como fim das frases. Por predefinição, \'?\' é o final de uma frase. Por isso, se pretender corresponder a "Olá?", remova \'?\' do campo e use “match (olá\\?)”. Tenha em atenção que para o \'?\' é necessário adicionar a barra invertida ( \\ ) na expressão de correspondência porque é um caractér especial, no entanto,  \'.\' e \'!\' não necessitam.';
$string['sentencedividers_noconvert'] = '\'<strong>{$a}</strong>\' é usado como <strong>pontuação de fim de frases</strong> e não pode ser convertido em espaço.';
$string['setting_installed_spell_check_dictionaries'] = 'Dicionários de verificação ortográfica';
$string['setting_installed_spell_check_dictionaries_des'] = 'Essa configuração controla que opções do idioma da verificação ortográfica são mostradas para questionar os autores quando criam ou editam uma pergunta.';
$string['showcoverage'] = 'Mostrar cobertura';
$string['showingresponsesforquestion'] = 'Respostas para a pergunta selecionada: {$a}';
$string['spellcheckerenchant'] = 'Livraria de verificação ortográfica Enchant';
$string['spellcheckernull'] = 'Ortografia não disponível';
$string['spellcheckerpspell'] = 'Livraria de verificação ortográfica Pspell';
$string['spellcheckertype'] = 'Biblioteca da verificação ortográfica';
$string['spellcheckertype_desc'] = 'Qual a livraria de verificação ortográfica a usar? Deve ser definida automaticamente com o valor correto durante a instalação.';
$string['spellingmistakes'] = 'Estas palavras não estão no dicionário: {$a}. Corrija a sua ortografia.';
$string['subsuponelineonly'] = 'O editor de subscrito/sobrescrito só pode ser usado com uma caixa de entrada uma linha acima.';
$string['synonym'] = 'Sinónimos';
$string['synonymcontainsillegalcharacters'] = 'Sinónimo contém caracteres não permitidos.';
$string['synonymsheader'] = 'Definir sinónimos para as palavras das respostas';
$string['synonymsno'] = 'Sinónimo: <b>{$a}</b>';
$string['template'] = 'Modelo';
$string['term'] = 'Termo';
$string['test'] = 'Testar';
$string['testquestionactualmark'] = 'Nota automática';
$string['testquestionbacklink'] = 'Voltar para Testar a pergunta';
$string['testquestionchangescore'] = 'Alterar avaliação';
$string['testquestioncorrect'] = 'Correta';
$string['testquestiondeletedresponses'] = 'As respostas foram apagadas com sucesso.';
$string['testquestioneditresponse'] = 'Editar resposta';
$string['testquestionexpectedfraction'] = 'Nota manual';
$string['testquestionformcancelresponsebutton'] = 'Cancelar';
$string['testquestionformdeletecheck'] = 'Tem a certeza absoluta de que pretende apagar definitivamente estas respostas?';
$string['testquestionformdeletesubmit'] = 'Apagar';
$string['testquestionformduplicateresponse'] = 'Não é permitida a duplicação de respostas.';
$string['testquestionformerror_incorrectquestionid'] = 'ID de pergunta incorreto ou não é uma pergunta \'Coincide com padrão\'.';
$string['testquestionformheader'] = 'Respostas avaliadas para carregar';
$string['testquestionforminfo'] = 'Deve carregar um ficheiro de folha de cálculo (.csv ou .xlsx) com duas colunas. A primeira coluna contém a nota prevista para a resposta e na segunda coluna deve estar a resposta. É suposto a primeira linha do ficheiro conter os títulos das coluna.';
$string['testquestionformnewresponsebutton'] = 'Adicionar nova resposta';
$string['testquestionformsaveresponsebutton'] = 'Guardar';
$string['testquestionformtestsubmit'] = 'Testar as respostas selecionadas';
$string['testquestionformtitle'] = 'Ferramenta de teste das perguntas \'Coincide com padrão\'';
$string['testquestionformuploadlabel'] = 'Respostas avaliadas';
$string['testquestionheader'] = 'Testar a pergunta: {$a}';
$string['testquestionidlabel'] = '#';
$string['testquestionincorrectlymarkedrights'] = 'corretas';
$string['testquestionincorrectlymarkedwrong'] = 'incorretas';
$string['testquestionmatches'] = 'coincide';
$string['testquestionresponse'] = 'Resposta';
$string['testquestionresponsesthatare'] = 'Tipos de respostas:';
$string['testquestionresultsheader'] = 'Resultados do teste: {$a}';
$string['testquestionresultssummary'] = 'Amostra de respostas: {$a->total} <br>
Avaliadas corretamente: {$a->correct} ({$a->accuracy}%)<br>
<span>Nota automática superior à nota manual: {$a->misspositive} (missed positive)</span><br>
<span>Nota automática inferior à nota manual: {$a->missnegative} (missed negative)</span>';
$string['testquestionruleslabel'] = 'Regras';
$string['testquestiontool'] = 'Ferramenta de teste';
$string['testquestionungraded'] = 'por avaliar';
$string['testquestionuploadanother'] = 'Carregar outro ficheiro';
$string['testquestionuploadresponses'] = 'Carregar respostas';
$string['testquestionuploadrowhastwoitems'] = 'Cada linha deve conter exatamente dois itens, uma nota numérica e uma resposta. A linha <b>{$a->row}</b> contém <b>{$a->items}</b> itens.';
$string['testquestionuploadrownotvalidutf8'] = 'A resposta na linha <b>{$a}</b> contém caracteres especiais não reconhecidos. A entrada deve ser válida em UTF-8.';
$string['testquestionuploadtheseresponses'] = 'Carregar estas respostas';
$string['testsubquestionx'] = 'Testar a subpergunta {$a}';
$string['testthisquestion'] = 'Testar esta pergunta';
$string['testthisquestionnoresmoreponsesrequired'] = 'São necessárias mais respostas para que a auto-sugestão funcione. Existem {$a->existing} respostas e são necessárias {$a->required}';
$string['testthisquestionnoresponsesfound'] = 'Não foram encontradas respostas.';
$string['testthisquestionnorulesreturned'] = 'Não foram sugeridas quaisquer regras.';
$string['toomanywords'] = 'A resposta é muito longa. Por favor, altere de modo a não ser maior do que 20 palavras.';
$string['tryrule'] = 'Testar regra';
$string['tryrulecoverage'] = 'Cobertura';
$string['tryrulegradeerror'] = 'Tentar a regra só funciona se a nota estiver definida como 100% ou Nenhum.';
$string['tryrulenogradedresponses'] = 'Não existem respostas avaliadas. Avalie o seu conjunto de respostas.';
$string['tryrulenomatch'] = 'Esta regra não corresponde a nenhuma resposta avaliada.';
$string['tryrulenovalidrule'] = 'Esta regra não é uma expressão válida para \'Coincide com padrão\'.';
$string['unknownlanguagex'] = 'Idioma desconhecido ({$a})';
$string['unparseable'] = 'Os caracteres ou a pontuação usados aqui "{$a}" não são reconhecidos';
$string['wordcontainsillegalcharacters'] = 'Palavra contém caracteres não permitidos.';
$string['wordwithsynonym'] = 'Palavra';
$string['xresponsesduplicated'] = 'As seguintes {$a} respostas estavam duplicadas';
$string['xresponsesproblems'] = 'As seguintes {$a} respostas não foram guardadas';
$string['xrulesuggested'] = '{$a} respostas novas foram sugeridas e adicionadas ao final das respostas existentes';
