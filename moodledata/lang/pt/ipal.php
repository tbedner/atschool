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
 * Strings for component 'ipal', language 'pt', version '4.4'.
 *
 * @package     ipal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anonymousmess'] = 'A sua resposta é registada de forma aónima';
$string['attendancequestion'] = 'Está aqui hoje';
$string['attendancequestion2'] = 'Em caso afirmativo, digite o código de assiduidade publicado na caixa de texto e submeta-o para que possa ser considerado como presente.';
$string['basicideasofipal'] = 'As ideias básicas de selecionar perguntas para responderem em sala de aula';
$string['editingipal'] = 'A adicionar (selecionar) perguntas ipal';
$string['editingipal_ex'] = 'A editar ipal: {$a}';
$string['editingipal_help'] = 'Os principais conceitos, ao selecionar perguntas para ipal, são:

* Selecionar perguntas que pode querer usar da base de dados de perguntas, do ComPADRE ou criar novas perguntas.
* A ordem das perguntas não é importante, pois  pode enviá-las em qualquer ordem.
* Quando pergunta/lança votação, pode enviar a mesma pergunta mais do que uma vez.';
$string['eventeditpageviewed'] = 'Visualizada página de edição ipal';
$string['introduction'] = 'Descrição';
$string['ipal'] = 'ipal';
$string['ipal:addinstance'] = 'Adicionar novo Ipal';
$string['ipal:manage'] = 'Gerir Ipals';
$string['ipal:preview'] = 'Pré-visualizar Ipals';
$string['ipal:view'] = 'Ver informação do Ipal';
$string['ipal:viewreports'] = 'Ver relatórios do Ipal';
$string['ipal_analytics'] = 'Melhorar as análises de dados';
$string['ipal_analytics_help'] = 'Se esta opção for selecionada, os dados da votação/de resposta do aluno, identificados no Moodle apenas pelo Número de identificação do utilizador (ID), serão enviados para o site ComPADRE para que a análise dos dados possa ser efetuada.
Somente pessoas autorizadas da sua instituição podem aceder os dados e identificar os nomes dos utilizadores ou nomes reais de qualquer aluno.
Essas pessoas autorizadas só podem ver os resultados da análise para a sua própria escola.
<br />Se esta opção não for selecionada, nenhuns dados serão enviados para o site do ComPADRE.';
$string['ipal_autocreate_generic'] = 'Criar perguntas genéricas de forma automática';
$string['ipal_autocreate_generic_help'] = 'Se esta opção for selecionada, as perguntas genéricas de escolha múltipla e de desenvolvimento serão automaticamente criadas quando o professor selecionar pela primeira vez  as perguntas para uma instância de IPAL.';
$string['ipal_enable_compadre'] = 'Permitir a incorporação de perguntas do ComPADRE';
$string['ipal_enable_compadre_help'] = 'Se esta opção for selecionada, o professor pode optar por importar perguntas prontas a usar que foram revistas por outros.
O conjunto inicial de perguntas inclui centenas de questões introdutórias de física a partir de perguntas ConcepTest, do autor Professor de Física Eric Mazur e o seu grupo de trabalho da Universidade de Harvard. Estas perguntas estão alojadas no site <a href="http://www.compadre.org/" target="_blank">ComPADRE</a>, National Physics and Astronomy Digital Library.';
$string['ipalfieldset'] = 'Exemplo personalizado de conjunto de campos';
$string['ipalmobile'] = 'Ativar botões de votação (Mobile Apps)';
$string['ipalmobile_error'] = 'Tem de escolher NÃO ou Aplicações Mobile';
$string['ipalmobile_help'] = 'Escolha aplicação para dispositivos móveis para permitir que os alunos respondam através de uma aplicação para dispositivos móveis. Desde modo, o código de acesso Ipal é mostrado ao professor na página de votação Ipal.';
$string['ipalname'] = 'Nome do IPAL';
$string['ipalname_help'] = 'Este é o conteúdo do texto de ajuda associada ao campo Nome do IPAL. A sintaxe Markdown é suportada.';
$string['ipalsettings'] = 'Configurações do Ipal';
$string['ipaltype'] = 'Tipo de Ipal';
$string['ipaltype_error'] = 'Tem de escolher entre anónimo e não anónimo';
$string['ipaltype_help'] = 'Escolha se pretende registar o ID do aluno na folha de cálculo com as respostas (não anónimas) ou não. O tipo de Ipal não pode ser modificado após uma resposta ser gravada.';
$string['modulename'] = 'IPAL';
$string['modulename_help'] = 'O módulo da atividade IPAL (In-class Polling for All Learners - Votação em sala de aula para todos os alunos) permite ao professor projetar e definir sessões de votação com perguntas do tipo escolha múltipla, verdadeiro e falso e desenvolvimento. As perguntas do IPAL podem ser usadas em testes e vice-versa. Pode também importar perguntas prontas a usar obtidas da base de dados ComPADRE.

Os gráficos dinâmicos mostrados abaixo das perguntas podem ser alternados com a exibição da folha de cálculo (incluindo nomes de alunos) para uma exibição anónima das respostas para a pergunta ativa -- um histograma para perguntas de escolha múltipla e a exibição de uma linha para perguntas de desenvolvimento. Enquanto a votação estiver ativa, uma pergunta pode ser respondida várias vezes até que uma outra pergunta seja enviada ou que a votação seja desativada.

Uma pergunta pode ser enviada mais do que uma vez. O ecrã da folha de cálculo mostra a qualquer instante a resposta mais recente enviada.

A votação pode ser usada:
* Aumentar o envolvimento e a participação dos alunos
* Para avaliar a compreensão do aluno e orientar o ritmo da turma.
* Promover uma maior discussão verbal em sala de aula.

<a href="http://www.compadre.org/ipal/webdocs/Guide.cfm">Mais informações</a>';
$string['modulenameplural'] = 'Ipals';
$string['pluginadministration'] = 'Administração do IPAL';
$string['pluginname'] = 'IPAL';
