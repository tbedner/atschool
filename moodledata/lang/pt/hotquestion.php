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
 * Strings for component 'hotquestion', language 'pt', version '4.4'.
 *
 * @package     hotquestion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ago'] = 'há {$a}';
$string['allowanonymouspost'] = 'Permitir a publicação das perguntas de forma anónima';
$string['allowanonymouspost_descr'] = 'Se ativar esta opção, as perguntas podem ser publicadas de forma anónima e, se aprovadas para visualização, os votos de preferência podem ser atribuídos por todos.';
$string['allowanonymouspost_help'] = 'Se ativar esta opção, as perguntas podem ser publicadas de forma anónima e, se aprovadas para visualização, os votos de preferência podem ser atribuídos por todos.';
$string['allowauthorinfohide'] = 'Permitir ocultar o nome do autor';
$string['allowauthorinfohide_descr'] = 'Se ativar esta opção, o nome do autor das perguntas pode ficar visível para os professores, mas oculto para os alunos.';
$string['allowauthorinfohide_help'] = 'Se ativar esta opção, o nome do autor das perguntas pode ficar visível para os professores mas ficará oculto para os alunos.';
$string['allowcomments'] = 'Permitir comentários nas entradas';
$string['allowcomments_help'] = 'Se ativar esta opção, todos os participantes com permissão para criar comentários poderão adicionar comentários às entradas de perguntas Hot.';
$string['alwaysshowdescription'] = 'Mostrar sempre a descrição';
$string['alwaysshowdescription_help'] = 'Se desativado, a descrição da Pergunta Hot não será visível para os alunos.';
$string['anonymous'] = 'Anónimo';
$string['approvallabel'] = 'Título da coluna Aprovação';
$string['approvallabel_descr'] = 'Indique o título predefinido para a coluna Aprovada.';
$string['approvedno'] = 'Não aprovada';
$string['approvedyes'] = 'Aprovada';
$string['authorinfo'] = 'Submetida por {$a->user}, {$a->time}';
$string['authorinfohide'] = 'Publicada {$a->time}';
$string['calendarend'] = 'fecha {$a}';
$string['calendarstart'] = 'abre {$a}';
$string['cnfallowcomments'] = 'Define se, por predefinição, uma pergunta Hot aceitará comentários nas entradas';
$string['completiondetail:pass'] = 'Nota de aprovação: {$a}';
$string['completiondetail:post'] = 'Publicar perguntas: {$a}';
$string['completiondetail:vote'] = 'Votar preferência: {$a}';
$string['completionpass'] = 'Aluno tem de obter nota de aprovação:';
$string['completionpassdesc'] = 'Aluno tem de obter nota de aprovação de {$a}';
$string['completionpassgroup'] = 'Requer nota de aprovação:';
$string['completionpost'] = 'Aluno tem de adicionar perguntas:';
$string['completionpostdesc'] = 'Aluno tem de criar pelo menos {$a} pergunta(s)';
$string['completionpostgroup'] = 'Requer perguntas';
$string['completionvote'] = 'Aluno tem de adicionar preferência:';
$string['completionvotedesc'] = 'O aluno tem de votar/dar preferência a {$a} pergunta(s) ou publicação(ões)';
$string['completionvotegroup'] = 'Requer preferência:';
$string['connectionerror'] = 'Erro de ligação';
$string['content'] = 'Conteúdo';
$string['csvexport'] = 'Exportar para .csv';
$string['deleteentryconfirm'] = 'Confirme que pretende apagar entrada';
$string['deleteroundconfirm'] = 'Confirme que pretende apagar ronda';
$string['description'] = 'Descrição';
$string['displayasanonymous'] = 'Mostrar como anónimo';
$string['entries'] = 'Entradas';
$string['eventaddquestion'] = 'Adicionada uma pergunta';
$string['eventaddround'] = 'Nova ronda iniciada';
$string['eventdownloadquestions'] = 'Descarregar perguntas';
$string['eventremovequestion'] = 'Apagar pergunta';
$string['eventremoveround'] = 'Apagar ronda';
$string['eventremovevote'] = 'Voto apagado';
$string['eventupdatevote'] = 'Atualizar voto';
$string['exportfilename'] = 'perguntas.csv';
$string['exportfilenamep1'] = 'Todo_Site_';
$string['exportfilenamep2'] = '_PH_Perguntas_Exportadas_em_';
$string['factorheat'] = 'Fator preferência recebida';
$string['factorheat_help'] = 'Um fator a ser aplicado à contagem de perguntas para a nota com base na preferência das perguntas.
Quanto maior a preferência da pergunta, maior o peso para a nota.
Uma pergunta de um aluno conta como 1 crédito adicional

     crédito = (votos) x fator/100.

Normalmente, um fator de preferência de 5% é adequado, ou seja, se 20 pessoas votam numa pergunta, o seu valor é duplicado.
Pode ser necessário ajustar dependendo do número de participantes e do envolvimento deles';
$string['factorpriority'] = 'Fator prioridade do professor';
$string['factorpriority_help'] = 'Um fator para contar perguntas sem definição de prioridade do professor.
Cada pergunta conta na soma das perguntas feitas por um aluno como o seu valor de prioridade (1, 2 ...).
Para as perguntas sem prioridade (0) o valor especificado (como %) é tido em conta.<br />
Um fator de 100% significa que uma pergunta não prioritária conta apenas como uma pergunta com prioridade 1.';
$string['factorvote'] = 'Fator preferência atribuída';
$string['factorvote_help'] = 'Um fator a ser aplicado à contagem de votos dos alunos no cálculo das notas.
Além de adicionar novas perguntas, um aluno pode receber crédito de participação votando em perguntas de outros alunos.
O crédito é o número de votos emitidos vezes este fator/100.

     crédito = votos X fator / 100

O fator precisa de ser ajustado dependendo do total de votos que um aluno pode emitir e o peso desejado para este tipo de participação.
Por exemplo, se um aluno pode emitir 5 votos de preferência, um fator de 20% significa que votar em outras 5 perguntas conta como uma pergunta adicionada por este aluno. Um fator de 100% significa que votar em outras perguntas conta o mesmo que adicionar uma nova pergunta.';
$string['finalgrade'] = 'Nota final';
$string['for'] = 'para o site:';
$string['grading'] = 'Nota bruta';
$string['heat'] = 'Preferência';
$string['heaterror'] = 'Demasiados votos';
$string['heatgiven'] = 'Preferência atribuída';
$string['heatlabel'] = 'Título da coluna Preferência';
$string['heatlabel_descr'] = 'Indique o título predefinido para a coluna Preferência.';
$string['heatlimit'] = 'Limite predefinido da preferência';
$string['heatlimit_descr'] = 'Digite o número predefinido de vezes que os utilizadores podem aplicar preferência, por ronda. Valor zero desativa a preferência.';
$string['heatlimit_help'] = 'Número predefinido de vezes que os utilizadores podem aplicar preferência, por ronda. Zero desativa a preferência.';
$string['heatreceived'] = 'Preferência recebida';
$string['heatvisibility'] = 'Visibilidade da coluna Preferência';
$string['heatvisibility_descr'] = 'Se ativar esta opção, a coluna Preferência fica visível, caso contrário, está oculta.';
$string['heatvisibility_help'] = 'Se ativar esta opção, a coluna Peferência fica visível.';
$string['hotquestion'] = 'PerguntaHot';
$string['hotquestion:addinstance'] = 'Pode adicionar instância de Pergunta Hot';
$string['hotquestion:ask'] = 'Fazer perguntas';
$string['hotquestion:comment'] = 'Escrever comentários';
$string['hotquestion:manage'] = 'Gerir as perguntas';
$string['hotquestion:manageentries'] = 'Ver lista das atividades';
$string['hotquestion:rate'] = 'Classificar perguntas';
$string['hotquestion:view'] = 'Visualizar as perguntas';
$string['hotquestion:vote'] = 'Votar nas perguntas';
$string['hotquestionclosed'] = 'Esta atividade terminará {$a}.';
$string['hotquestionclosetime'] = 'Data de fim';
$string['hotquestionintro'] = 'Tópico';
$string['hotquestionname'] = 'Nome da atividade';
$string['hotquestionopen'] = 'Esta atividade abrirá {$a}.';
$string['hotquestionopentime'] = 'Data de início';
$string['id'] = 'ID';
$string['improperuseviewgradesclass'] = 'Uso indevido da classe viewgrades. Não é possível carregar o item da nota.';
$string['incorrectmodule'] = 'O ID do módulo da disciplina estava incorreto';
$string['inputapprovallabel'] = 'Aprovada';
$string['inputapprovallabel_descr'] = 'Altere o nome da coluna Aprovada para o que pretende que seja.';
$string['inputapprovallabel_help'] = 'Altere o nome da coluna Aprovada para o mais apropriado ao uso desta atividade.';
$string['inputheatlabel'] = 'Preferência';
$string['inputheatlabel_descr'] = 'Altere o nome da coluna Preferência para o que pretende que seja.';
$string['inputheatlabel_help'] = 'Altere o nome da coluna Preferência para o mais apropriado ao uso desta atividade.';
$string['inputquestion'] = 'Submeta a sua pergunta aqui:';
$string['inputquestion_descr'] = 'Mude as instruções de envio para aquilo que pretende que seja.';
$string['inputquestion_help'] = 'Mude as instruções de envio para aquilo que pretende que seja.';
$string['inputquestionlabel'] = 'Perguntas';
$string['inputquestionlabel_descr'] = 'Altere o nome da coluna Perguntas para o que pretende que seja.';
$string['inputquestionlabel_help'] = 'Altere o nome da coluna Perguntas para o mais apropriado ao uso desta atividade.';
$string['inputremovelabel'] = 'Apagar';
$string['inputremovelabel_descr'] = 'Altere o nome da coluna Apagar para o que pretende que seja.';
$string['inputremovelabel_help'] = 'Altere o nome da coluna Apagar para o mais apropriado ao uso desta atividade.';
$string['inputteacherprioritylabel'] = 'Prioridade';
$string['inputteacherprioritylabel_descr'] = 'Altere o nome da coluna Prioridade para o que pretende que seja.';
$string['inputteacherprioritylabel_help'] = 'Altere o nome da coluna Prioridade para o mais apropriado ao uso desta atividade.';
$string['invalidquestion'] = 'As perguntas em branco são ignoradas.';
$string['modulename'] = 'Pergunta Hot';
$string['modulename_help'] = 'A atividade Perguntas Hot permite que os alunos publiquem e votem em publicações, em resposta a perguntas feitas pelos professores da disciplina.';
$string['modulename_link'] = 'mod/hotquestion/view';
$string['modulenameplural'] = 'Perguntas Hot';
$string['newround'] = 'Abrir uma nova ronda';
$string['newroundconfirm'] = 'Confirma que pretende começar uma nova ronda? (Perguntas e votos existentes serão arquivados e não podem ser adicionados!)';
$string['newroundsuccess'] = 'Iniciou com sucesso uma nova ronda.';
$string['nextround'] = 'Ronda seguinte';
$string['noquestions'] = 'Ainda não existem entradas.';
$string['notapproved'] = '<b>Esta entrada ainda não está aprovada para visualização.</b><br>';
$string['notavailable'] = '<b>De momento não está disponível!</b><br>';
$string['pluginadministration'] = 'Administração de Pergunta Hot';
$string['pluginname'] = 'Pergunta Hot';
$string['postbutton'] = 'Clique para publicar';
$string['postmaxgrade'] = 'Perguntas para nota máxima';
$string['postmaxgrade_help'] = 'O número de perguntas necessárias para obter a classificação máxima.

É nominalmente uma contagem de perguntas, mas o valor obtido por um utilizador pode ser melhorado pelo fator de preferência (perguntas com maior preferência valem mais) e votando em outras perguntas (um utilizador pode melhorar a nota participando na votação em perguntas de outros alunos).';
$string['previousround'] = 'Ronda anterior';
$string['privacy:metadata:hotquestion_questions'] = 'Informações sobre as entradas do utilizador numa determinada atividade Pergunta Hot.';
$string['privacy:metadata:hotquestion_questions:anonymous'] = 'A entrada foi publicada como anónima?';
$string['privacy:metadata:hotquestion_questions:approved'] = 'Esta pergunta já está aprovada para visualização?';
$string['privacy:metadata:hotquestion_questions:content'] = 'O conteúdo da pergunta';
$string['privacy:metadata:hotquestion_questions:hotquestion'] = 'ID da atividade Pergunta Hot na qual o conteúdo foi publicado.';
$string['privacy:metadata:hotquestion_questions:id'] = 'ID da entrada';
$string['privacy:metadata:hotquestion_questions:time'] = 'Data/hora de publicação da pergunta.';
$string['privacy:metadata:hotquestion_questions:tpriority'] = 'O professor deu prioridade a esta entrada?';
$string['privacy:metadata:hotquestion_questions:userid'] = 'ID do utilizador que publicou esta entrada.';
$string['privacy:metadata:hotquestion_votes'] = 'Informações sobre as votações das perguntas.';
$string['privacy:metadata:hotquestion_votes:id'] = 'ID da entrada.';
$string['privacy:metadata:hotquestion_votes:question'] = 'ID da entrada para este voto';
$string['privacy:metadata:hotquestion_votes:voter'] = 'ID do utilizador que votou';
$string['question'] = 'Pergunta';
$string['questionlabel'] = 'Título da coluna Perguntas';
$string['questionlabel_descr'] = 'Indique o título predefinido para a coluna Perguntas.';
$string['questionremove'] = 'Apagar';
$string['questionremovesuccess'] = 'A pergunta foi apagada com sucesso.';
$string['questions'] = 'Perguntas';
$string['questionsubmitted'] = 'A sua publicação foi submetida com sucesso.';
$string['rawgrade'] = 'Nota em bruto {$a->rawgrade} / {$a->max}';
$string['removedround'] = 'Apagou com sucesso esta ronda.';
$string['removelabel'] = 'Título da coluna Apagar';
$string['removelabel_descr'] = 'Indique o título predefinido para a coluna Apagar.';
$string['removeround'] = 'Apagar esta ronda';
$string['removevote'] = 'Apagar o meu voto';
$string['requireapproval'] = 'Requer aprovação';
$string['requireapproval_descr'] = 'Se ativar esta opção, as perguntas têm de ser aprovadas por um professor antes de ficarem visíveis para todos.';
$string['requireapproval_help'] = 'Se ativar esta opção, as perguntas têm de ser aprovadas por um professor antes de ficarem visíveis para todos.';
$string['resethotquestion'] = 'Apagar todas as perguntas e votos';
$string['returnto'] = 'Voltar a {$a}';
$string['round'] = 'Ronda {$a}';
$string['showrecentactivity'] = 'Mostrar a atividade recente';
$string['showrecentactivityconfig'] = 'Todos podem ver as notificações em relatórios de atividades recentes.';
$string['teacherpriority'] = 'Prioridade';
$string['teacherprioritylabel'] = 'Título da coluna Prioridade';
$string['teacherprioritylabel_descr'] = 'Indique o título predefinido para a coluna Prioridade.';
$string['teacherpriorityvisibility'] = 'Visibilidade da coluna Prioridade do professor';
$string['teacherpriorityvisibility_descr'] = 'Se ativar esta opção, a coluna Prioridade do professor estará visível, caso contrário, está oculta.';
$string['teacherpriorityvisibility_help'] = 'Se ativar esta opção, a coluna Prioridade do professor estará visível.';
$string['time'] = 'Data/hora';
$string['totalcomments'] = 'Total de comentários';
$string['unapprovedquestionhide'] = 'Ocultar perguntas não aprovadas';
$string['unapprovedquestionnotset'] = 'Preferência não definida';
$string['unapprovedquestionsee'] = 'Mostrar perguntas não aprovadas';
$string['unapprovedquestionvisibility'] = 'Visibilidade das perguntas não aprovadas';
$string['userid'] = 'ID utilizador';
$string['valueinterror'] = 'O fator tem de ser um número inteiro positivo';
$string['viewaftertimeclose'] = 'Ver após a data/hora de fecho';
$string['viewaftertimeclose_descr'] = 'Se ativar esta opção, os alunos poderão visualizar, mas não alterar, as perguntas e a preferência após a data/hora de fecho, caso contrário, ficarão ocultas.';
$string['viewaftertimeclose_help'] = 'Se ativar esta opção, os alunos poderão visualizar, mas não alterar, as perguntas e a preferência após o fecho, caso contrário, ficarão ocultas.';
$string['viewaftertimeclosevalidation'] = 'Se não for definida uma data/hora de fecho, \'Ver após a data/hora de fecho\' deverá ser Não.';
$string['viewallentries'] = '{$a->ucount} utilizadores publicaram {$a->qcount} perguntas.';
$string['viewallhotquestions'] = 'Ver todas as perguntas Hot da disciplina';
$string['viewentries'] = 'Participação na ronda atual';
$string['viewgrades'] = 'Visualizar notas';
$string['vote'] = 'Votar';
$string['xofn'] = '&nbsp;de&nbsp;';
