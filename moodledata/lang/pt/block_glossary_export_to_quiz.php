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
 * Strings for component 'block_glossary_export_to_quiz', language 'pt', version '4.4'.
 *
 * @package     block_glossary_export_to_quiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allentries'] = 'Todos os termos';
$string['clicktoexport'] = 'Clique para exportar os termos deste glossário para um Teste (XML)';
$string['concept'] = 'Ordem alfabética';
$string['ddwtosinstructions'] = 'Arraste cada termo para a definição correspondente';
$string['emptyglossaries'] = 'Os glossários desta disciplina estão vazios (nenhum termo)';
$string['emptyglossary'] = 'O glossário desta disciplina está vazio (nenhum termo)';
$string['exportentriestoxml'] = 'Exportar os termos para um Teste (XML)';
$string['exportmediafiles'] = 'Pretende exportar imagens e ficheiros de áudio/vídeo?';
$string['exportmediafiles_help'] = 'Pretende exportar as imagens/áudio/vídeo que possam estar inseridas nas definições deste glossário?
Alguns tipos de pergunta não são compatíveis com alguns elementos de multimédia.';
$string['extrawronganswer'] = 'Adicionar uma resposta errada extra?';
$string['extrawronganswer_help'] = 'Pretende adicionar uma resposta extra/distração a cada uma das suas perguntas?';
$string['firstmodified'] = 'Mais antigas primeiro';
$string['gapfillddinstructions'] = 'Selecione de cada lista pendente o conceito correspondente à respetiva definição';
$string['generalhelp'] = 'Ajuda';
$string['glossary_export_to_quiz:addinstance'] = 'Adicionar um novo bloco Exportar Glossário para Teste';
$string['glossary_export_to_quiz:myaddinstance'] = 'Adicionar um novo bloco Exportar Glossário para Teste ao Painel do utilizador';
$string['lastmodified'] = 'Mais recentes primeiro';
$string['limitnum'] = 'Número máximo de entradas a exportar';
$string['limitnum_help'] = 'Deixe este campo com o valor predefinido "0" para exportar TODAS as entradas do glossário ou da categoria selecionada.
Esta opção pode ser útil para exportar um número limitado de entradas de glossários muito grandes.';
$string['maskconceptindefinitions'] = 'Dissimular termos nos textos das definições?';
$string['maskconceptindefinitions_help'] = 'Se aparecerem termos nos textos das definições, pretende dissimulá-los (com 3 asteriscos)?';
$string['matchinstructions'] = 'Corresponder as definições e os conceitos';
$string['nbchoices'] = 'Número de opções';
$string['nbchoices_help'] = 'Selecione o número de opções/respostas que pretende disponibilizar.';
$string['noglossaries'] = 'Disciplina sem glossários';
$string['notenoughentriesavailable'] = 'Não existem termos disponíveis suficientes ({$a->numentries}) para este tipo de pergunta (mínimo de {$a->nbchoices} termos necessários).';
$string['notenoughentriesselected'] = 'Não estão selecionados termos suficientes ({$a->numentries}) para este tipo de pergunta (mínimo de {$a->nbchoices} termos necessários).';
$string['notyetconfigured'] = 'Por favor, clique em <b>Ativar modo de edição</b> para configurar este bloco.';
$string['notyetconfiguredediting'] = 'Por favor, clique no ícone do menu de ação para configurar este bloco.';
$string['numentries'] = 'Exportar {$a} termos';
$string['numquestions'] = 'e criar {$a} perguntas';
$string['pluginname'] = 'Exportar Glossário para Teste';
$string['pluginname_help'] = 'Clique com o botão direito do rato na hiperligação <b>Mais ajuda</b> para visualizar o Wiki de documentação do Moodle.';
$string['pluginname_link'] = 'block/glossary_export_to_quiz/edit';
$string['privacy:metadata'] = 'O bloco Exportar Glossário para Teste não armazena quaisquer dados pessoais.';
$string['questiontype_help'] = 'Selecione o tipo de pergunta para o qual deseja exportar as entradas do glossário.';
$string['random'] = 'Aleatório';
$string['selectglossary'] = 'Selecione o glossário de onde pretende exportar';
$string['selectglossary_help'] = 'Utilize a lista pendente para selecionar o glossário do qual pretende exportar os termos para a base de dados de perguntas do teste.
Se o glossário contiver categorias, poderá exportar apenas os termos de uma categoria.
Para cancelar a sua escolha ou para repor o bloco, simplesmente deixe a lista pendente na posição Escolher...';
$string['shuffleanswers'] = 'Baralhar respostas';
$string['shuffleanswers_help'] = 'Se ativar esta opção, a ordem das opções/respostas é aleatoriamente alterada em cada tentativa.';
$string['sortingorder'] = 'Regra de ordenação';
$string['sortingorder_help'] = 'Use esta configuração para determinar como os termos do glossário exportados serão ordenados quando os importar para a base de dados de perguntas.
Pode ser usado, em combinação com o número máximo de termos, para criar um teste de modo a experimentar os termos mais recentes do glossário (especialmente num glossário com muitos termos).';
