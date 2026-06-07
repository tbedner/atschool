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
 * Strings for component 'cado', language 'pt', version '4.4'.
 *
 * @package     cado
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoptions'] = 'Atividades a incluir';
$string['activityoptions_desc'] = 'Atividades a incluir no relatório CADO, se existentes na disciplina';
$string['alloweditcomment'] = 'Editar histórico da aprovação';
$string['approvalcomparisondifferent'] = 'A declaração de aprovação é diferente.';
$string['approveagree'] = 'Aprovar CADO';
$string['approvecomment'] = 'Comentário da aprovação:';
$string['approvecommentreviewed'] = 'Comentário de aprovação revisto por {$a->user} ({$a->date})';
$string['approvedon'] = 'Este CADO foi aprovado por {$a->approver} em';
$string['approvehistoryedited'] = 'Histórico da aprovação editado por {$a- user} ({$a->date}).';
$string['approvelink'] = 'Aprovar';
$string['approvereport'] = 'Aprovar este CADO';
$string['approvesubjectline'] = 'CADO aprovado:';
$string['assign'] = 'Trabalhos';
$string['assignexpectcompleted'] = 'Data prevista de conclusão';
$string['cado'] = 'CADO';
$string['cado:addinstance'] = 'Adicionar um novo CADO a uma página da disciplina';
$string['cado:approve'] = 'Aprovar ou desaprovar um CADO';
$string['cado:compare'] = 'Comparar CADOs gerados anteriormente';
$string['cado:generate'] = 'Gerar um novo CADO';
$string['cado:view'] = 'Visualizar um CADO aprovado';
$string['cadobiblio'] = 'Comentários adicionais a exibir após as avaliações e dos comentários para todo o site (se estiverem definidos)';
$string['cadocomment'] = 'Comentários adicionais a exibir antes das avaliações';
$string['cadointro'] = 'Comentários iniciais a exibir imediatamente abaixo do título do CADO';
$string['cadoname'] = 'Nome do relatório CADO';
$string['cadooptions'] = 'Opções a incluir';
$string['cadooptions_desc'] = 'Opções específicas do CADO a incluir no relatório CADO.
Se estiver incluído o calendário da disciplina e a disciplina usar um formato semanal, as datas serão incluídas como uma coluna no calendário, caso contrário, o calendário será apresentado apenas pelo tópico. Todas as atividades incluídas na secção geral irão aparecer abaixo de "{$a}".';
$string['cadotitle'] = 'Avaliação e resumo da execução da disciplina';
$string['chooseapprover'] = 'Selecione o aprovador a quem pretende propor este CADO';
$string['compareheader'] = 'Resultados da comparação';
$string['compareheaderorigin'] = 'CADO original: "{$a}"';
$string['compareheaderother'] = 'Outro CADO: "{$a}"';
$string['comparelink'] = 'Comparar';
$string['comparemissing'] = 'EM FALTA:';
$string['comparisondifferent'] = 'Chave de comparação: a cor-de-rosa realça as mudanças entre a origem e outro, o verde realça quando apenas o CADO de origem tem uma atividade, o amarelo realça quando apenas outro CADO tem uma atividade.';
$string['comparisonidentical'] = 'Os relatórios CADO são iguais.';
$string['completion'] = 'Informação da conclusão';
$string['configdisallowstudentview'] = 'Adiciona uma opção de configuração nas páginas da disciplina para permitir que os alunos visualizem o relatório CADO na página da disciplina';
$string['confirmpropose'] = 'Tem a certeza de que pretende propor a aprovação deste CADO?';
$string['course'] = 'Insira o código da disciplina';
$string['courseinstruction'] = 'Selecione o CADO';
$string['coursenotchosen'] = 'Atualizar com as configurações do filtro';
$string['datedue'] = 'Data limite';
$string['dateendselector'] = 'Filtrar disciplina por data de início, data final do intervalo';
$string['datestartselector'] = 'Filtrar disciplina por data de início, data inicial do intervalo';
$string['description'] = 'Visão global da disciplina';
$string['duedates'] = 'Datas';
$string['eventapprovecado'] = 'CADO aprovado';
$string['eventnotapprovecado'] = 'CADO não aprovado';
$string['eventproposecado'] = 'CADO proposto';
$string['eventreportviewed'] = 'Visualizado o CADO aprovado';
$string['filtercourses'] = 'Obter disciplinas';
$string['forgroup'] = 'para o agrupamento:';
$string['forum'] = 'Tópicos dos fóruns';
$string['forumexpectcompleted'] = 'Data prevista de conclusão';
$string['forumposts'] = 'Participação: todas as mensagens, tópicos, respostas';
$string['general'] = 'Geral';
$string['generateddraft'] = 'Este rascunho do CADO foi gerado por {$a->genuser} em';
$string['generatedproposed'] = 'Este rascunho do CADO foi proposto por {$a->genuser} para {$a->approver} em';
$string['grouping'] = 'Selecione o agrupamento para o CADO:';
$string['inchidden'] = 'Mostrar atividades ocultas';
$string['inchidden_desc'] = 'Se ativar esta opção, as atividades ocultas também aparecerão no CADO';
$string['malformedhtml'] = 'A mostrar a página gerada anteriormente devido a erros de HTML, muito provavelmente das descrições das atividades.';
$string['messageprovider:cadoshare'] = 'Partilhar CADO';
$string['messageprovider:cadoworkflow'] = 'Notificação do fluxo de execução do CADO';
$string['minutes'] = '(minutos)';
$string['modulename'] = 'Relatório CADO';
$string['modulename_help'] = 'O módulo CADO permite que o professor crie automaticamente um documento "CADO" de visão global da disciplina e que pode comparar com outros CADO, quer tenha sido gerado dentro da mesma disciplina ou em disciplinas diferentes.
Qualquer utilizador com permissão pode, posteriormente, aprovar o CADO para que possa ser visualizado pelos alunos ou visitantes (menu de configurações do módulo).
A criação do relatório CADO tem em consideração as configurações globais e locais para determinar os módulos a incluír no relatório. As informações das atividades usadas para o CADO incluem a descrição, datas, informações de conclusão e palavras-chave selecionadas.
Se for incluída uma configuração de agrupamento, apenas os módulos que estão disponíveis para aquele agrupamento serão incluídos.
Se não for incluída uma configuração de agrupamento, apenas os módulos que estão disponíveis para todos serão incluídos no relatório.
Após a aprovação, quaisquer configurações específicas do relatório CADO, incluindo o agrupamento, ficam trancadas.
Em cada disciplina podem ser criados vários relatórios CADO com diferentes configurações.
Os relatórios CADO podem ser apresentados numa página pronta para impressão se selecionar a opção \'Visualização de impressão\' no menu de configurações do módulo.';
$string['modulenameplural'] = 'Relatórios CADO';
$string['nameinstruction'] = 'Filtrar por nome curto da disciplina';
$string['notapplicable'] = 'Não definido';
$string['notapproved'] = 'Já teve os seguintes comentários:';
$string['notapprovesubjectline'] = 'CADO não aprovado:';
$string['notavailable'] = 'Este relatório CADO ainda não está disponível.';
$string['notgenerated'] = 'Este relatório CADO ainda não foi gerado.';
$string['nouserfiles'] = 'Nenhum ficheiro de utilizador listado.';
$string['pluginadministration'] = 'Administração do módulo';
$string['pluginname'] = 'CADO: Execução e aprovação';
$string['prevapprovecomment'] = 'Comentário(s) anteriores da aprovação:';
$string['printview'] = 'Visualização de impressão';
$string['privacy:nothing'] = 'Vazio';
$string['propose'] = 'Proposta';
$string['quiz'] = 'Testes';
$string['quizexpectcompleted'] = 'Data prevista de conclusão';
$string['requestapproval'] = 'Um CADO foi gerado para a disciplina "{$a}" e está a aguardar aprovação.';
$string['requestapprovalsubject'] = 'CADO a aguardar aprovação';
$string['restore'] = 'O fluxo de execução do CADO foi restaurado de uma cópia de segurança ou é um duplicado.';
$string['rubric'] = 'Rubricas de avaliação';
$string['schedule'] = 'Calendário da disciplina';
$string['schedulesum'] = 'TOTAIS';
$string['section'] = 'Secção';
$string['semester'] = 'Semestre';
$string['settings'] = 'Configurações do CADO';
$string['showlogo'] = 'Incluir logótipo';
$string['showlogo_desc'] = 'Incluir logótipo do site (das configurações de administração) no relatório CADO';
$string['sitecomment'] = 'Comentário para todo o site';
$string['sitecomment_desc'] = 'Comentário a ser incluído em todos os relatórios CADO gerados.';
$string['storegenerated_desc'] = 'Se ativar esta opção, uma versão HTML do relatório CADO é armazenada na base de dados. O CADO gerado poderá ser visualizado em relatórios externos.';
$string['storegeneratedhtml'] = 'Armazenar versão HTML';
$string['summary'] = 'Descrição da disciplina';
$string['sumschedule'] = 'Totais no calendário';
$string['sumschedule_desc'] = 'Adiciona palavras-chave numéricas como uma soma na parte inferior do calendário (se o calendário e as palavras-chave estiverem ativadas e presentes).';
$string['taginclude'] = 'Palavras-chave a incluir';
$string['taginclude_desc'] = 'Podem ser adicionadas informações adicionais às atividades no relatório se forem atribuídas palavras-chave.
O prefixo da palavra-chave é selecionado para ser usado como o título da coluna e o restante da palavra-chave será usado como conteúdo da informação.
Insira aqui os prefixos de palavras-chave a serem usados, separados por vírgulas.
Quando uma uma palavra-chave é atribuída a uma atividade, tenha a palavra-chave composta pelo prefixo selecionado seguido pelo conteúdo da informação, separados com dois pontos duplos.
Por exemplo, se a palavra-chave "Horas" for inserida aqui e uma atividade foi marcada com "Horas::5", a palavra-chave "Horas" será incluída como o título da coluna e 5 como o conteúdo.';
$string['tags'] = 'Palavras-chave da atividade';
$string['tagschedule'] = 'Palavras-chave como colunas no calendário da disciplina';
$string['tagschedule_desc'] = 'Se ativar esta opção, serão incluídas as três primeiras palavras-chave especificadas como colunas adicionais no calendário da disciplina, se houver calendário.';
$string['task'] = 'Tarefa';
$string['titleforlegend'] = 'Selecione os parâmetros do relatório CADO:';
$string['topic'] = 'Tópico';
$string['update'] = 'Atualização:';
$string['useranonymous'] = 'Anónimo';
$string['week'] = 'Semana';
$string['weekdate'] = 'Dia inicial';
