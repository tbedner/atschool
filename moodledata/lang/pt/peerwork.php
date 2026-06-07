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
 * Strings for component 'peerwork', language 'pt', version '4.4'.
 *
 * @package     peerwork
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitydate:closed'] = 'Fechou:';
$string['activitydate:closes'] = 'Prazo:';
$string['activitydate:opened'] = 'Abriu:';
$string['activitydate:opens'] = 'Abre:';
$string['addmorecriteria'] = 'Adicionar mais {no} critérios';
$string['addmorecriteriastep'] = 'Incremento para adicionar mais critérios';
$string['addmorecriteriastep_help'] = 'O número de critérios de avaliação a serem anexados ao formulário quando um educador clica no botão para adicionar mais critérios.';
$string['addsubmission'] = 'Adicionar submissão';
$string['allmemberssubmitted'] = 'Todos os membros do grupo submeteram.';
$string['allowlatesubmissions'] = 'Permitir submissões fora do prazo';
$string['allowlatesubmissions_help'] = 'Se ativar esta opção, serão permitidas submissões após a data de fecho.<br />
<strong> Atenção:</strong> Depois da nota do grupo ser guardada e calculadas as notas finais, as submissões do aluno deixam de ser editáveis ou serão bloqueadas. É o fim da interferência na nota final pelos alunos que alteram as notas dos seus pares.';
$string['assessment'] = 'avaliação';
$string['assessmentalreadygraded'] = 'Avaliação já efetuada.';
$string['assessmentclosedfor'] = 'Avaliação fechada para: {$a}';
$string['assessmentcriteria:description'] = 'Descrição do critério {no}';
$string['assessmentcriteria:description:help'] = 'descrição do critério';
$string['assessmentcriteria:description:help_help'] = 'Descreva sucintamente a finalidade deste critério';
$string['assessmentcriteria:header'] = 'Configurações dos critérios de avaliação';
$string['assessmentcriteria:modgradetypescale'] = 'Likert';
$string['assessmentcriteria:nocriteria'] = 'Não foram definidos critérios para este trabalho.';
$string['assessmentcriteria:scoretype'] = 'Tipo de avaliação do critério {no}';
$string['assessmentcriteria:scoretype:help'] = 'tipo de avaliação do critério';
$string['assessmentcriteria:scoretype:help_help'] = 'Escolha a escala pela qual este critério deve ser avaliado';
$string['assessmentcriteria:weight'] = 'Peso';
$string['assessmentcriteria:weight_help'] = 'POR CONCLUIR ainda não foi usado';
$string['assessmentnotopenyet'] = 'A avaliação ainda não está disponível.';
$string['assessmentopen'] = 'Avaliação disponível.';
$string['assignment'] = 'Trabalho';
$string['availablescales'] = 'Escalas disponíveis';
$string['availablescales_help'] = 'As escalas que o cálculo pode usar.';
$string['base'] = 'Calculadora de base';
$string['calcmissing'] = 'A calculadora usada para aplicar a ponderação PA (peer assessment) não está disponível. {$a}';
$string['calcmissinggraded'] = 'Esteja ciente que alterar as configurações da calculadora resultará em alterações nas notas finais dos alunos.';
$string['calculatedgrade'] = 'Nota calculada';
$string['calculatedgrade_help'] = 'A nota antes da aplicação dos pesos e penalizações.';
$string['calculatedgrades'] = 'Notas calculadas';
$string['calculator'] = 'Calculadora';
$string['calculator_help'] = 'O método de cálculo a ser usado.';
$string['calculatorplugins'] = 'Módulos de calculadora';
$string['calculatortypes'] = 'Configurações da calculadora';
$string['calculatorupdate'] = 'Atualizar calculadora';
$string['charactersremaining'] = '{$a} caracteres restantes';
$string['clearallsubmissionsforallgroups'] = 'Limpar todas as submissões';
$string['clearsubmission'] = 'Limpar submissão';
$string['comment'] = 'Comentário:';
$string['comments'] = 'Comentários';
$string['comments_help'] = 'Comentário obrigatório do motivo da substituição. Não ficará visível para os alunos. Será registado nos registos de atividade.';
$string['completiongradedpeers'] = 'Avaliar pares no grupo';
$string['completiongradedpeers_desc'] = 'Os alunos têm de avaliar todos os seus pares';
$string['completiongradedpeers_help'] = 'Se ativar esta opção, o aluno tem de avaliar todos os seus pares para que este requisito seja cumprido.';
$string['confimrclearsubmission'] = 'Tem a certeza de que pretende cancelar a submissão deste grupo? Esta ação removerá as informações fornecidas por todos os alunos.';
$string['confimrclearsubmissions'] = 'Tem a certeza de que pretende cancelar as submissões de todos os grupo? Esta ação removerá as informações fornecidas por todos os alunos.';
$string['confirmationmailbody'] = 'Submeteu a avaliação dos pares {$a->url} às {$a->time}.
Ficheiro(s) anexado(s):
{$a->files}

Notas submetidas:
{$a->grades}';
$string['confirmationmailsubject'] = 'Submissão da avaliação dos pares de {$a}';
$string['confirmeditgrade'] = 'Avaliação antes da data de fecho';
$string['confirmeditgradetxt'] = 'A data de fecho ainda não ocorreu. Se avaliar agora, os alunos já não poderão editar as submissões. Tem a certeza de que pretende continuar?';
$string['confirmlockeditingaware'] = 'Após esta ação já não poderá fazer alterações à sua submissão nem às notas dos pares depois de serem guardadas. Tem a certeza de que pretende continuar?';
$string['confirmunlockeditinggrader'] = 'As notas dadas por {$a} estão atualmente bloqueadas. Pretende desbloqueá-las e permitir que este aluno altere qualquer uma das suas notas ou justificações? Esta alteração entra em vigor imediatamente.';
$string['confirmunlockeditingsubmission'] = 'A edição da submissão está bloqueada. Pretende desbloqueá-la e permitir que os alunos atualizem a submissão?';
$string['contibutionscore'] = 'Contribuição';
$string['contibutionscore_help'] = 'Esta é a pontuação da PA (peer assessment), que corresponde à contribuição relativa feita pelos membros do grupo';
$string['criteria'] = 'Critério';
$string['criterianum'] = 'Critério {$a}';
$string['critscale'] = 'Tipo de avaliação do critério';
$string['critscale_help'] = 'A escala que será usada para avaliar os critérios.';
$string['defaultcrit'] = 'Configurações predefinidas dos critérios (opcional)';
$string['defaultcrit0'] = 'Texto predefinido - Critério 1';
$string['defaultcrit0_help'] = 'O texto predefinido para o primeiro critério';
$string['defaultcrit1'] = 'Texto predefinido - Critério 2';
$string['defaultcrit1_help'] = 'O texto predefinido para o segundo critério';
$string['defaultcrit2'] = 'Texto predefinido - Critério 3';
$string['defaultcrit2_help'] = 'O texto predefinido para o terceiro critério';
$string['defaultcrit3'] = 'Texto predefinido - Critério 4';
$string['defaultcrit3_help'] = 'O texto predefinido para o quarto critério';
$string['defaultcrit4'] = 'Texto predefinido - Critério 5';
$string['defaultcrit4_help'] = 'O texto predefinido para o quinto critério';
$string['defaultcrit_desc'] = 'Valores predefinidos para até 5 critérios e correspondentes escalas';
$string['defaultscale'] = 'Escala predefinida';
$string['defaultscale0'] = 'Escala predefinida - Critério 1';
$string['defaultscale0_help'] = 'A escala predefinida para o primeiro critério.';
$string['defaultscale1'] = 'Escala predefinida - Critério 2';
$string['defaultscale1_help'] = 'A escala predefinida para o segundo critério.';
$string['defaultscale2'] = 'Escala predefinida - Critério 3';
$string['defaultscale2_help'] = 'A escala predefinida para o terceiro critério.';
$string['defaultscale3'] = 'Escala predefinida - Critério 4';
$string['defaultscale3_help'] = 'A escala predefinida para o quarto critério.';
$string['defaultscale4'] = 'Escala predefinida - Critério 5';
$string['defaultscale4_help'] = 'A escala predefinida para o quinto critério.';
$string['defaultscale_help'] = 'A escala predefinida a ser usada para todos os outros critérios.';
$string['defaultsettings'] = 'Configurações predefinidas';
$string['defaultsettings_desc'] = 'Os valores a serem usados como predefinição ao adicionar uma nova instância deste módulo a uma disciplina.';
$string['displaypeergradestotals'] = 'Exibir totais das notas dos pares';
$string['displaypeergradestotals_help'] = 'Se definida como \'Sim\', os alunos verão o total das notas dos seus pares como uma percentagem para cada critério. Tenha em atenção que, para que o total seja exibido, as notas dos pares devem estar visíveis.';
$string['downloadallsubmissions'] = 'Descarregar todas as submissões';
$string['draftnotsubmitted'] = 'Em curso (não submetido)';
$string['duedate'] = 'Data de fecho';
$string['duedate_help'] = 'Se ativar esta opção, pode definir a data limite para a submissão dos trabalhos. Continuará a ser possível submeter trabalhos após esta data (se ativada).<br />
<strong>Atenção:</strong> Todas as submissões de ficheiros dos alunos e avaliação dos pares ficarão não editáveis para os alunos após a avaliação.';
$string['duedateat'] = 'Data de fecho: {$a}';
$string['duedatenotpassed'] = 'A data de fecho ainda não ocorreu. Se avaliar agora, os alunos já não poderão editar as submissões.';
$string['duedatepassedago'] = 'A data de fecho foi há {$a} atrás.';
$string['editablebecause'] = 'Editável porque: {$a}';
$string['editgrade'] = 'Editar nota do grupo: {$a}';
$string['editinglocked'] = 'A edição está bloqueada';
$string['editsubmission'] = 'Editar submissão';
$string['eventassessable_submitted'] = 'submissão do trabalho de grupo';
$string['eventgradebookupdatefailed'] = 'atualização da pauta da avaliação dos pares';
$string['eventgradesreleased'] = 'Notas lançadas';
$string['eventpeer_feedback_created'] = 'feedback do trabalho de grupo';
$string['eventpeer_grade_created'] = 'nota dos pares do trabalho de grupo';
$string['eventpeer_grade_overridden'] = 'substituição da nota dos pares do trabalho de grupo';
$string['eventsubmission_created'] = 'submissão do trabalho de grupo criada';
$string['eventsubmission_exported'] = 'exportar trabalho de grupo';
$string['eventsubmission_files_deleted'] = 'apagar ficheiro do trabalho de grupo';
$string['eventsubmission_files_uploaded'] = 'carregar ficheiro do trabalho de grupo';
$string['eventsubmission_grade_form_viewed'] = 'formulário de visualização da avaliação do trabalho de grupo';
$string['eventsubmission_graded'] = 'nota do trabalho de grupo';
$string['eventsubmission_updated'] = 'submissão do trabalho de grupo atualizada';
$string['eventsubmission_viewed'] = 'formulário de visualização da submissão do trabalho de grupo';
$string['eventsubmissioncleared'] = 'Submissão cancelada';
$string['eventsubmissions_exported'] = 'exportar todos os trabalho de grupo';
$string['eventsubmissionsdownloaded'] = 'Submissões descarregadas';
$string['export'] = 'Exportar';
$string['exportxls'] = 'Exportar todas as notas do grupo';
$string['feedback'] = 'Feedback para o grupo';
$string['feedbackfiles'] = 'Ficheiros de feedback';
$string['finalgrades'] = 'Notas finais';
$string['finalgrades_help'] = 'A nota final é calculada somando ou subtraindo o diferencial da média individual/grupo que é multiplicado por cinco. O resultado depende se a média do indivíduo é maior ou menor do que a média do grupo.';
$string['finalweightedgrade'] = 'Nota final ponderada';
$string['firstsubmittedbyon'] = 'Enviado pela primeira vez por {$a->name} ({$a->date}).';
$string['fromdate'] = 'Permitir submissões a partir de';
$string['fromdate_help'] = 'Se ativar esta opção, os alunos não podem submeter os seus trabalhos antes da data/hora definida. Se desativada, podem começar a submeter os trabalhos a partir de agora.';
$string['grade'] = 'Nota';
$string['gradebefore'] = 'Nota antes das substituições: {$a}';
$string['gradecannotberemoved'] = 'A nota nota não pode ser apagada.';
$string['gradedby'] = 'Avaliado por';
$string['gradedbyon'] = 'Avaliado por {$a->name} ({$a->date}).';
$string['gradedon'] = 'Avaliação';
$string['gradegivento'] = '<strong>Nota de</strong>';
$string['gradeoverridden'] = 'Nota dos pares substituída: {$a}';
$string['gradeoverride'] = 'Nota final';
$string['gradesandfeedbacksaved'] = 'As notas e o feedback foram guardados.';
$string['gradesexistmsg'] = 'Algumas notas já foram lançadas, por isso, o tipo de cálculo não pode ser alterado. Se pretende mudar a calculadora, tem de primeiro escolher se pretende, ou não, recalcular as notas já existentes.';
$string['gradesgivenby'] = '<h2>Notas dadas por {$a}</h2>';
$string['groupaverage'] = 'Nota média do grupo';
$string['groupaverage_help'] = 'Média global das notas dos pares para o grupo.';
$string['groupgrade'] = 'Nota do grupo';
$string['groupgradeoutof100'] = 'Nota do grupo na escala de 100';
$string['groupsubmissionsettings'] = 'Configurações do envio do grupo';
$string['groupsubmittedon'] = 'Submissão do grupo:';
$string['hideshow'] = 'Ocultar/Mostrar';
$string['invalidgrade'] = 'Nota inválida';
$string['invalidpaweighting'] = 'Peso inválido';
$string['invalidscale'] = 'Escala inválida. Selecione uma das opções acima.';
$string['justification'] = 'Justificação';
$string['justification_help'] = 'Ativar/desativar comentários de justificação e selecionar a visibilidade.';
$string['justificationbyfor'] = 'Por {$a} para';
$string['justificationdisabled'] = 'Desativada';
$string['justificationhiddenfromstudents'] = 'Oculta para os alunos';
$string['justificationintro'] = 'Adicione comentários abaixo para justificar as avaliações que forneceu para cada um dos seus pares.';
$string['justificationmaxlength'] = 'Limite de caracteres da justificação';
$string['justificationmaxlength_help'] = 'O número máximo de caracteres permitidos nos campos de justificação. Pode definir este valor como 0 para não haver limite.';
$string['justificationnoteshidden'] = 'Atenção: Os seus comentários estarão ocultos para os seus pares e visíveis apenas para o corpo docente.';
$string['justificationnotesvisibleanon'] = 'Atenção: Os seus comentários estarão visíveis mas anónimos para os seus pares. O seu nome de utilizador não será mostrado junto dos seus comentários.';
$string['justificationnotesvisibleuser'] = 'Atenção: Os seus comentários e o seu nome de utilizador estarão visíveis para os seus pares.';
$string['justifications'] = 'Justificações';
$string['justificationtype'] = 'Tipo de justificação';
$string['justificationtype0'] = 'Par';
$string['justificationtype1'] = 'Critério';
$string['justificationtype_help'] = 'A justificação requer um comentário para cada um dos seus pares. A justificação dos critérios requer um comentário para cada nota do critério.';
$string['justificationvisibleanon'] = 'Visível mas anónima';
$string['justificationvisibleuser'] = 'Visível com nome de utilizador';
$string['lasteditedon'] = 'Última atualização: {$a->date}.';
$string['latesubmissionsallowedafterduedate'] = 'Após a data de fecho, mas são permitidas submissões fora do prazo.';
$string['latesubmissionsnotallowedafterduedate'] = 'Após a data de fecho, mas não são permitidas submissões fora do prazo.';
$string['latesubmissionsubject'] = 'Submissão fora de prazo';
$string['latesubmissiontext'] = 'Foi feita uma submissão fora de prazo em \'{$a->name}\' por {$a->user}.';
$string['lockediting'] = 'Bloquear edição';
$string['lockediting_help'] = 'Quando definida como \'Sim\', a submissão e as notas dos pares não podem ser alteradas depois de submetidas por um aluno. Os professores podem desbloquear a edição para alunos individuais, enquanto as submissões são permitidas.';
$string['managepeerworkcalculatorplugins'] = 'Gerir módulos de calculadora do trabalho de grupo';
$string['messageprovider:grade_released'] = 'Nota e feedback publicados';
$string['modulename'] = 'Avaliação dos pares';
$string['modulename_help'] = 'A atividade Avaliação dos pares é uma submissão de trabalho em grupo que combina com a avaliação de pares.<br />
Para esta atividade, a avaliação pelos pares refere-se à capacidade dos alunos avaliarem o desempenho/contribuição dos pares do seu grupo e, se ativado, eles próprios, em relação a um trabalho de grupo. O envio de ficheiro(s) da atividade é o componente do trabalho de grupo. A avaliação dos pares consiste numa escolha de escalas de notas e comentários sobre o desempenho de cada aluno.<br />
As notas globais finais de cada aluno são calculadas pelo método de cálculo selecionado';
$string['modulenameplural'] = 'Avaliações dos pares';
$string['multiplegroups'] = 'Os seguintes participantes pertencem a mais do que um grupo: {$a}. As suas notas não foram atualizadas.';
$string['myfinalgrade'] = 'Nota final';
$string['nocalculator'] = 'Não existem calculadoras instaladas. Todos os alunos receberão a nota do grupo sujeita à penalização de não conclusão';
$string['nomembers'] = '# membros';
$string['noncompletionpenalty'] = 'Penalização por não submeter as avaliações';
$string['noncompletionpenalty_help'] = 'Se um aluno não submeter qualquer nota para a avaliação (não avaliou os seus pares), qual a percentagem de penalização?';
$string['none'] = 'Nenhum.';
$string['nonegiven'] = 'Não fornecida';
$string['nonereceived'] = 'Nada recebido';
$string['nopeergrades'] = '# notas dos pares';
$string['noteditablebecause'] = 'Não editável porque: {$a}';
$string['noteoverdueby'] = '(fora de prazo: {$a})';
$string['nothingsubmitted'] = 'Nada submetido.';
$string['nothingsubmittedyet'] = 'Nada submetido.';
$string['nothingsubmittedyetduedatepassednago'] = 'Ainda não foifeita qualquer submissão mas a data de fecho foi há {$a} atrás.';
$string['notifygradesreleasedhtml'] = 'A nota e o feedback da sua submissão em \'<em>{$a->name}</em>\' foram publicados. Pode consultá-los <a href="{$a->url}">aqui</a>.';
$string['notifygradesreleasedsmall'] = 'A sua nota de \'{$a}\' foi publicada.';
$string['notifygradesreleasedtext'] = 'A nota e o feedback da sua submissão em \'{$a->name}\' foram publicados.  Pode consultá-los aqui: {$a->url}';
$string['notyetgraded'] = 'Sem avaliação';
$string['numcrit'] = 'Número predefinido de critérios';
$string['numcrit_help'] = 'O número predefinido de critérios a serem incluídos. Existem 5 strings predefinidas no idioma';
$string['overridden'] = 'Substituída';
$string['override'] = 'Substituir';
$string['overridepeergrades'] = 'Substituir notas dos pares';
$string['overridepeergrades_help'] = 'Se ativar esta opção, os professores poderão substituir as notas dadas pelos alunos aos seus pares.';
$string['overridepeergradesby'] = 'Substituir notas dos pares dadas por:';
$string['paweighting'] = 'Peso da avaliação dos pares';
$string['paweighting_help'] = 'Qual a percentagem da nota total do grupo que deve ser dada pelos pares?';
$string['peergrades'] = 'Notas dos pares';
$string['peergradeshiddenfromstudents'] = 'Oculta para os alunos';
$string['peergradesvisibility'] = 'Visibilidade das notas dos pares';
$string['peergradesvisibility_help'] = 'Esta configuração determina se os alunos podem, ou não, ver as notas que receberam dos pares.

- Oculta para os alunos: as avaliações recebidas dos seus pares não estarão visíveis para os alunos
- Visível mas anónima: as avaliações recebidas dos seus pares estarão visíveis para os alunos mas o nome do utilizador daqueles que os avaliaram não estará
- Visível com nome de utilizador: as avaliações recebidas dos seus pares e os nomes de quem os avaliou estarão visíveis para os alunos';
$string['peergradesvisibleanon'] = 'Visível mas anónimas';
$string['peergradesvisibleuser'] = 'Visível com nome de utilizador';
$string['peergradetotal'] = 'Total: {$a}';
$string['peernameisyou'] = '{$a} (utilizador atual)';
$string['peerratedyou'] = '{$a->name}: {$a->grade}';
$string['peers'] = 'Avaliação dos seus pares';
$string['peersaid'] = '{$a}:';
$string['peersubmissionandgrades'] = 'Submissão e notas dos pares';
$string['peerwork'] = 'Nota dos pares';
$string['peerwork:addinstance'] = 'Adicionar uma atividade de trabalho de grupo';
$string['peerwork:grade'] = 'Avaliar trabalhos e notas dos pares';
$string['peerwork:view'] = 'Ver o conteúdo da avaliação dos pares';
$string['peerworkcalculatorpluginname'] = 'Módulo Calculadora';
$string['peerworkfieldset'] = 'Configurações da avaliação dos pares';
$string['peerworkname'] = 'Avaliação dos pares';
$string['peerworkname_help'] = 'No campo de descrição pode adicionar as instruções de avaliação dos pares. Aconselha-se que possa incluir todos os detalhes do trabalho (contagem de palavras, número de ficheiros e tipos de ficheiros permitidos) e orientação sobre os critérios de avaliação dos pares (explique o intervalo e o que é pretendido). Também pode adicionar hiperligações para manuais do módulo com referência às diretrizes da avaliação. Recomenda-se também que inclua informações sobre o suporte disponível para os alunos, caso eles tenham problemas para submeter o trabalho de grupo.';
$string['penalty'] = 'Penalização';
$string['pleaseexplainoverride'] = 'Justifique a razão da substituição desta nota de par.';
$string['pleaseproviderating'] = 'Indique uma avaliação para cada um dos seus pares.';
$string['pluginadministration'] = 'Administração da Avaliação dos pares';
$string['pluginname'] = 'Trabalho de grupo';
$string['privacy:path:grade'] = 'Nota';
$string['privacy:path:peergrades'] = 'Nota dos pares';
$string['privacy:path:submission'] = 'Submissão';
$string['provideajustification'] = 'Indique uma justificação.';
$string['provideminimumonecriterion'] = 'Por favor, indique pelo menos um critério';
$string['ratingnforuser'] = 'Avaliação \'{$a->rating}\' de {$a->user}';
$string['recalculategrades'] = 'Recalcular notas';
$string['recalculategrades_help'] = 'As notas foram lançadas. Só pode mudar a calculadora se aceitar que todas as notas serão recalculadas.';
$string['releaseallgradesforallgroups'] = 'Lançar as notas de todos os grupos';
$string['releasedby'] = 'Lançada por';
$string['releasedbyon'] = 'Notas lançadas por {$a->name} ({$a->date})';
$string['releasedon'] = 'Lançada';
$string['releasegrades'] = 'Lançar notas';
$string['requirejustification'] = 'Requerer justificação';
$string['requirejustification_help'] = '- Desativada: Os alunos não serão obrigados a adicionar comentários que justifiquem as avaliações que atribuíram a cada um dos seus pares
- Oculta para os alunos: Todos os comentários dos alunos estarão visíveis apenas para os professores e ocultos para os seus pares
- Visível mas anónima: Quaisquer comentários dos alunos estarão visíveis para os seus pares mas serão ocultadas as identidades daqueles que comentaram
- Visível com nome de utilizador: Todos os comentários dos alunos estarão visíveis para os seus pares, juntamente com a identidade de quem comentou';
$string['revisedgrade'] = 'Nota revista';
$string['revisedgrade_help'] = 'Use este campo para substituir a nota final ponderada, se necessário. No entanto, se a nota foi substituída ou bloqueada na pauta, ela não pode ser editada.';
$string['search:activity'] = 'Trabalho de grupo - informação da atividade';
$string['selfgrading'] = 'Permitir que os alunos se autoavaliem perante os pares';
$string['selfgrading_help'] = 'Se definida como \'Sim\', os alunos poderão dar a si mesmos uma nota e feedback perante os outros membros do seu grupo. A nota será contabilizada nas suas médias das notas e nas médias das notas globais dos pares dos grupos.';
$string['setup.maxfiles'] = 'Número máximo de ficheiros a submeter';
$string['setup.maxfiles_help'] = 'O número máximo de ficheiros que o grupo poderá enviar na submissão.<br/>Se definir como zero não será possível submeter ficheiros.';
$string['studentcalculatedgrade'] = 'Nota calculada do aluno';
$string['studentcontribution'] = 'Contribuição do aluno';
$string['studentfinalgrade'] = 'Nota final do aluno';
$string['studentfinalweightedgrade'] = 'Nota final ponderada do aluno';
$string['studentondate'] = '{$a->fullname} ({$a->date})';
$string['studentrevisedgrade'] = 'Nota revista do aluno';
$string['submission'] = 'Submissões';
$string['submission_help'] = 'Ficheiro(s) submetido(s) pelo grupo. <strong>Nota:</strong> O número máximo de ficheiros pode ser ajustado nas configurações da avaliação dos pares.';
$string['submissiongrading'] = 'Submissão de ficheiro';
$string['submissiongrading_help'] = 'Ficheiro(s) submetido(s) pelo grupo. <strong>Nota:</strong> O número máximo de ficheiros pode ser ajustado nas configurações da avaliação dos pares.';
$string['submissionstatus'] = 'Estado da submissão';
$string['subplugintype_peerworkcalculator'] = 'Método de cálculo da nota';
$string['subplugintype_peerworkcalculator_plural'] = 'Métodos de cálculo da nota';
$string['tasknodifystudents'] = 'Notificar alunos';
$string['teacherfeedback'] = 'Feedback do avaliador';
$string['teacherfeedback_help'] = 'Feedback dado pelo avaliador.';
$string['thesestudentspastduedate'] = 'Estes alunos submeteram após a data de fecho: {$a}.';
$string['timeremaining'] = 'Tempo restante';
$string['timeremainingcolon'] = 'Tempo restante: {$a}';
$string['tutorgrading'] = 'Avaliação do professor';
$string['userswhodidnotsubmitafter'] = 'Utilizadores que não submeteram: {$a}';
$string['userswhodidnotsubmitbefore'] = 'Utilizadores que ainda não submeteram: {$a}';
$string['youbelongtomorethanonegroup'] = 'É membro de mais do que um grupo. De momento não é suportado pelo módulo.';
$string['youdonotbelongtoanygroup'] = 'Não é membro de nenhum grupo.';
$string['youwereawardedthesepeergrades'] = 'Para este critério, recebeu as seguintes avaliações dos seus pares.';
