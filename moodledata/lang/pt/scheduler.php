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
 * Strings for component 'scheduler', language 'pt', version '4.4'.
 *
 * @package     scheduler
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Ação';
$string['actions'] = 'Ações';
$string['addappointment'] = 'Adicionar outro aluno';
$string['addcommands'] = 'Adicionar vagas';
$string['addondays'] = 'Adicionar compromissos';
$string['addsession'] = 'Adicionar vagas repetitivas';
$string['addsingleslot'] = 'Adicionar uma vaga';
$string['addslot'] = 'A qualquer instante, pode acrescentar vagas adicionais para os compromissos.';
$string['addstudenttogroup'] = 'Adicionar este aluno ao grupo de compromisso';
$string['allappointments'] = 'Todos os compromissos';
$string['allononepage'] = 'Todas as vagas numa página';
$string['allowgroup'] = 'Vaga exclusiva - clique para modificar';
$string['alreadyappointed'] = 'Não pode criar compromisso. A vaga já está preenchida.';
$string['appointagroup_help'] = 'Escolha se pretende criar um compromisso apenas para si, ou se para um grupo.';
$string['appointfor'] = 'Criar compromissos para';
$string['appointforgroup'] = 'Criar compromissos para: {$a}';
$string['appointingstudent'] = 'Compromisso para uma vaga';
$string['appointingstudentinnew'] = 'Compromisso para a nova vaga';
$string['appointment'] = 'Compromisso';
$string['appointmentmode'] = 'Configurar o modo de compromisso';
$string['appointmentmode_help'] = '<p>Pode escolher uma das variantes da forma como os compromissos podem ser escolhidos. </p>
<p><ul>
<li><strong> "<emph>n</emph> compromissos nesta agenda": </strong> o aluno só pode reservar um número fixo de compromissos nesta atividade. Mesmo se o professor os marca como "visto", eles não serão autorizados a fazer mais reservas. A única maneira de restaurar a capacidade do aluno para reservar é apagar os registos antigos de "visto". </li>
<li><strong>"<emph>n</emph> compromissos de cada vez": </strong> o aluno pode reservar um número fixo de compromissos. Quando o compromisso acabar e o professor marcar o aluno como "visto", o aluno pode fazer novas reservas. No entanto, o aluno está limitado a <emph>n</emph> vagas "abertas" (não vistos) em determinado momento.
</li>
</ul>
</p>';
$string['appointmentno'] = 'Compromisso {$a}';
$string['appointmentnote'] = 'Comentários (visível para o aluno)';
$string['appointments'] = 'Compromissos';
$string['appointmentsgrouped'] = 'Compromissos agrupados por vaga';
$string['appointmentsummary'] = 'Compromisso em {$a->startdate} das {$a->starttime} às {$a->endtime} com {$a->teacher}';
$string['appointsolo'] = 'apenas eu';
$string['appointsomeone'] = 'Adicionar novo compromisso';
$string['areaappointmentnote'] = 'Ficheiros nos comentários do compromisso';
$string['areaslotnote'] = 'Ficheiros nos comentários da vaga';
$string['areateachernote'] = 'Ficheiros nos comentários privados';
$string['attendable'] = 'Disponibilidade';
$string['attendablelbl'] = 'Total de candidatos para a vaga';
$string['attended'] = 'Atendidos';
$string['attendedlbl'] = 'Número de alunos atendidos';
$string['attendedslots'] = 'Vagas atendidas';
$string['availableslots'] = 'Vagas disponíveis';
$string['availableslotsall'] = 'Total de vagas';
$string['availableslotsnotowned'] = 'Não preenchida';
$string['availableslotsowned'] = 'Preenchida';
$string['bookaslot'] = 'Reservar uma vaga';
$string['bookingdetails'] = 'Detalhes da reserva';
$string['bookingformoptions'] = 'Formulário de reserva';
$string['bookinginstructions'] = 'Instruções de reserva';
$string['bookinginstructions_help'] = 'Texto que será mostrado aos alunos antes de fazerem uma reserva. Pode servir para, por exemplo, instruir os alunos como preencher o campo de mensagem opcional ou quais ficheiros a enviar.';
$string['bookslot'] = 'Reservar vaga';
$string['bookwithteacher'] = 'Professor';
$string['bookwithteacher_help'] = 'Escolha um professor para o compromisso.';
$string['break'] = 'Intervalo entre vagas';
$string['breaknotnegative'] = 'A duração do intervalo não pode ser um valor negativo';
$string['canbook1appointment'] = 'Pode reservar mais um compromisso nesta agenda.';
$string['canbooknappointments'] = 'Pode reservar mais {$a} compromissos nesta agenda.';
$string['canbooknofurtherappointments'] = 'Não pode reservar mais compromissos nesta agenda.';
$string['canbooksingleappointment'] = 'Pode reservar um compromisso nesta agenda.';
$string['canbookunlimitedappointments'] = 'Nesta agenda pode reservar os compromisso que desejar.';
$string['cancelbooking'] = 'Cancelar reserva';
$string['chooseexisting'] = 'Escolher um existente';
$string['choosingslotstart'] = 'Escolher o horário de início';
$string['choosingslotstart_help'] = 'Altere (ou escolha) a data e hora de início do compromisso. Se o compromisso coincidir com algum outro, será questionado se este horário substitui todos os compromissos em conflito. Tenha em atenção que os novos parâmetros substituirão todas as configurações anteriores.';
$string['comments'] = 'Comentários';
$string['complete'] = 'Reservado';
$string['confirmbooking'] = 'Confirmação da reserva';
$string['confirmdelete-all'] = '<b>Todas</b> as vagas desta agenda serão apagadas. Esta operação é irreversível. Pretende continuar mesmo assim?';
$string['confirmdelete-mine'] = 'Todas as vagas nesta agenda serão apagadas. Esta operação é irreversível. Pretende continuar mesmo assim?';
$string['confirmdelete-myunused'] = 'As vagas não usadas por si, nesta agenda, serão apagadas. Esta operação é irreversível. Pretende continuar mesmo assim?';
$string['confirmdelete-one'] = 'Apagar vaga?';
$string['confirmdelete-selected'] = 'As vagas selecionadas serão apagadas. Esta operação será irreversível. Pretende continuar mesmo assim?';
$string['confirmdelete-unused'] = 'As vagas não usadas nesta agenda serão apagadas. Esta operação é irreversível. Pretende continuar mesmo assim?';
$string['confirmrevoke'] = 'Revogar todos os compromissos na vaga atual?';
$string['conflictingslots'] = 'A vagas em {$a} não pode ser criada porque é coincidente com:';
$string['conflictlocal'] = '{$a->datetime} ({$a->duration} minutos) nesta agenda';
$string['conflictremote'] = '{$a->datetime} ({$a->duration} minutos) na disciplina {$a->courseshortname}, agenda {$a->schedulername}';
$string['contentformat'] = 'Formato';
$string['contentformat_help'] = '<p>Existem três escolhas básicas para o formato de exportação, diferenciado-se na forma como as vagas com vários compromissos são manipuladas.
     <dl>
         <dt>Uma linha por vaga</dt>:
         <dd>
             O ficheiro de exportação conterá uma linha para cada vaga. Se uma vaga contiver múltiplos compromissos, ao invés do nome do aluno, etc., um marcador "(múltiplo)" será mostrado.
         </dd>
         <dt>Uma linha por compromisso</dt>:
         <dd>
             O ficheiro de exportação conterá uma linha para cada compromisso. Se uma vaga contiver múltiplos compromissos, aparecerá várias vezes na lista (com os dados repetidos).
         </dd>
         <dt>Compromissos agrupados por vaga</dt>:
         <dd>
             Todos os compromissos de uma vaga são agrupados, precedidos por uma linha de cabeçalho que indica a vaga em questão. Isto pode não funcionar bem com o formato de exportação CSV, uma vez que o número de colunas não é constante.
         </dd>
    </dl>
    Pode explorar o efeito destas opções usando o botão "Pré-visualização".</p>';
$string['copytomyself'] = 'Enviar uma cópia para mim';
$string['course'] = 'Disciplina';
$string['createexport'] = 'Criar ficheiro de exportação';
$string['csvfieldseparator'] = 'Delimitador CSV';
$string['csvformat'] = 'CSV';
$string['cumulatedduration'] = 'Duração total dos compromissos';
$string['datatoinclude'] = 'Dados a incluir';
$string['datatoinclude_help'] = 'Selecione os campos que devem ser incluídos na exportação. Cada um aparecerá numa coluna separada do ficheiro.';
$string['date'] = 'Data de início';
$string['datelist'] = 'Visão global';
$string['defaultslotduration'] = 'Duração predefinida das vagas';
$string['defaultslotduration_help'] = 'Duração predefinida (em minutos) para as vagas dos compromissos';
$string['deleteallslots'] = 'Apagar todas as vagas';
$string['deleteallunusedslots'] = 'Apagar vagas não utilizadas';
$string['deletecommands'] = 'Apagar vagas';
$string['deletedconflictingslots'] = 'Para a vaga em {$a}, foram apagadas as vagas coincidentes:';
$string['deletemyslots'] = 'Apagar todas as minhas vagas';
$string['deleteonsave'] = 'Apagar este compromisso (ao gravar o formulário)';
$string['deleteselection'] = 'Apagar as vagas selecionadas';
$string['deletetheseslots'] = 'Apagar todas estas vagas';
$string['deleteunusedslots'] = 'As minhas vagas não utilizadas';
$string['department'] = 'De onde?';
$string['disengage'] = 'Desmarcar todos os meus compromissos';
$string['displayfrom'] = 'Mostrar vagas aos alunos';
$string['distributetoslot'] = 'Distribuir por todo o grupo';
$string['divide'] = 'Dividir em vagas?';
$string['duration'] = 'Duração';
$string['durationrange'] = 'A duração da vaga deve ser entre {$a->min} e {$a->max} minutos.';
$string['editbooking'] = 'Editar reserva';
$string['email_applied_html'] = '<p>Um compromisso foi agendado para {$a->date} às {$a->time},<br/>
pelo aluno <a href="{$a->attendee_url}">{$a->attendee}</a> na disciplina:

<p>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></p>

<p>no Scheduller "<em><a href="{$a->scheduler_url}">{$a->module}</a></em>" no site <a href="{$a->site_url}">{$a->site}</a>.</p>';
$string['email_applied_plain'] = 'Foi marcado um compromisso para {$a->date} às {$a->time} pelo aluno {$a->attendee} na disciplina:

{$a->course_short}: {$a->course}

no Scheduler "{$a->module}" do site {$a->site}.';
$string['email_applied_subject'] = '{$a->course_short}: novo compromisso';
$string['email_cancelled_html'] = '<p>O seu compromisso agendado para <strong>{$a->date}</strong> às <strong>{$a->time}</strong>,<br/>
com o aluno <strong><a href="{$a->attendee_url}">{$a->attendee}</a></strong> na disciplina de:</p>

<p><strong>{$a->course_short} : <a href="{$a->course_url}">{$a->course}</a></strong></p>

<p>no Scheduler "<em><a href="{$a->scheduler_url}">{$a->module}</a></em>" no site <strong><a href="{$a->site_url}">{$a->site}</a></strong></p>

<p><strong><span class="error">foi cancelado ou foi alterada a data/hora</span></strong>.</p>';
$string['email_cancelled_plain'] = 'O compromisso agendado para {$a->date} às {$a->time} com {$a->attendee} na disciplina de:

{$a->course_short}: {$a->course}

no Scheduler "{$a->module}" do site {$a->site}
foi cancelado ou foi alterada a data/hora.';
$string['email_cancelled_subject'] = '{$a->course_short}: Compromisso cancelado ou movido por um aluno';
$string['email_invite_html'] = '<p>Escolha um intervalo de tempo para um compromisso em:</p> <p>{$a->scheduler_url}</p>';
$string['email_invite_subject'] = 'Convite: {$a->module}';
$string['email_invitereminder_html'] = '<p>Isto é apenas um lembrete para o lembrar de que ainda não configurou o seu compromisso. Escolha um vaga o mais rapidamente possível em:</p><p>{$a->scheduler_url}</p>';
$string['email_invitereminder_subject'] = 'Lembrete: {$a->module}';
$string['email_reminder_html'] = 'Está marcado para breve um compromisso para <strong>{$a->date}</strong>
das <strong>{$a->time}</strong> às <strong>{$a->endtime}</strong><br/>
com <strong><a href="{$a->attendant_url}">{$a->attendant}</a></strong>.</p>

<p>Local: <strong>{$a->location}</strong></p>';
$string['email_reminder_plain'] = 'Está marcado para breve um compromisso para {$a->date} das {$a->time} às {$a->endtime}
com {$a->attendant}.

Local do compromisso: {$a->location}';
$string['email_reminder_subject'] = '{$a->course_short}: Lembrete de compromisso';
$string['email_teachercancelled_html'] = '<p>O seu compromisso agendado para <strong>{$a->date}</strong> às <strong>{$a->time} </strong>,<br/>
com {$a->staffrole} <strong><a href="{$a->attendant_url}">{$a->attendant}</a></strong> na disciplina de:</p>

<p><strong>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></strong></p>

<p>no scheduler "<em><a href="{$a->scheduler_url}">{$a->module}</a></em>" no site <strong><a href="{$a->site_url}">{$a->site}</a></strong></p>

<p><strong><span class="error">foi cancelado</span></strong>. Por favor, reserve uma nova vaga.</p>';
$string['email_teachercancelled_plain'] = 'O compromisso agendado para {$a->date} às {$a->time} com o {$a->staffrole} {$a->attendee} na disciplina:

{$a->course_short}: {$a->course}

através do Scheduler designado por "{$a->module}" no site {$a->site}

foi cancelado. Por favor, reserve uma nova vaga.';
$string['email_teachercancelled_subject'] = '{$a->course_short}: Compromisso cancelado pelo professor';
$string['emailreminder'] = 'Enviar lembrete por e-mail';
$string['emailreminderondate'] = 'Enviar lembrete por e-mail';
$string['end'] = 'Fim';
$string['enddate'] = 'Repetir intervalos de tempo até';
$string['event_appointmentlistviewed'] = 'Visualizada a lista de compromissos do Scheduler';
$string['event_bookingadded'] = 'Adicionada reserva ao Scheduler';
$string['event_bookingformviewed'] = 'Visualizado o formulário de reserva do Scheduler';
$string['event_bookingremoved'] = 'Eliminada reserva da agenda';
$string['event_slotadded'] = 'Vaga adicionada à agenda';
$string['event_slotdeleted'] = 'Eliminada vaga da agenda';
$string['everyone'] = 'Todos';
$string['excelformat'] = 'Excel';
$string['exclusive'] = 'Exclusiva';
$string['exclusivity'] = 'Exclusividade';
$string['exclusivity_help'] = '<p>Pode definir um valor máximo de alunos que podem candidatar-se a uma determinada vaga.</p>
<p>Definir um limite de 1 (predefinido) significará que a vaga é exclusiva para um único aluno.</p>
<p>Definir um limite de, por exemplo, 3 significará que até três alunos podem reservar esta vaga.</p>
<p>Se desativar esta opção, qualquer número de alunos pode reservar a vaga; nunca será considerada "preenchida".</p>';
$string['exclusivityoverload'] = 'A vaga está reservada por {$a} alunos, o que é mais do que o permitido por esta configuração.';
$string['exclusivitypositive'] = 'O número de alunos por vaga tem de ser igual ou superior a 1.';
$string['explaingeneralconfig'] = 'Estas opções só podem ser configuradas no nível do site e serão aplicadas a todos os Schedulers desta instalação do Moodle.';
$string['export'] = 'Exportar';
$string['exporthdr'] = 'Exportar vagas e compromissos';
$string['exporttimerange'] = 'Intervalo de tempo';
$string['exporttimerangeall'] = 'Próximas vagas e vagas antigas';
$string['exporttimerangefuture'] = 'Apenas as próximas vagas';
$string['exporttimerangepast'] = 'Apenas as vagas antigas';
$string['field-appointmentnote'] = 'Anotações do compromisso (para o aluno)';
$string['field-attended'] = 'Atendido';
$string['field-date'] = 'Data';
$string['field-endtime'] = 'Hora final';
$string['field-filecount'] = 'Número de ficheiros carregados';
$string['field-grade'] = 'Nota';
$string['field-groupsmulti'] = 'Grupos (várias colunas)';
$string['field-groupssingle'] = 'Grupos';
$string['field-groupssingle-label'] = 'Grupos (uma coluna)';
$string['field-location'] = 'Local';
$string['field-maxstudents'] = 'Max. alunos';
$string['field-slotnotes'] = 'Anotações';
$string['field-starttime'] = 'Hora inicial';
$string['field-studentemail'] = 'E-mail do aluno';
$string['field-studentfirstname'] = 'Nome do aluno';
$string['field-studentfullname'] = 'Nome completo do aluno';
$string['field-studentidnumber'] = 'Número ID do aluno';
$string['field-studentlastname'] = 'Apelido do aluno';
$string['field-studentnote'] = 'Mensagem por aluno';
$string['field-studentusername'] = 'Nome de utilizador do aluno';
$string['field-teachernote'] = 'Observação confidencial (apenas professor)';
$string['fileformat'] = 'Formato do ficheiro';
$string['fileformat_help'] = 'Estão disponíveis os seguintes formatos de ficheiros:
<ul>
<li>Valores separados por vírgula (CSV). O separador de campo, por predefinição, uma vírgula, pode ser escolhido abaixo.
Os ficheiros CSV podem ser abertos com a maioria das aplicações de folha de cálculo;</li>
<li>Livro Microsoft Excel (formato Excel 2007);</li>
<li>Ficheiro ODS;</li>
<li>Formato HTML - uma página Web que mostra a tabela de saída,
que pode ser impressa usando o recurso de impressão do navegador;</li>
<li>Documento PDF. Pode escolher entre a orientação paisagem e retrato.</li>
</ul>';
$string['finalgrade'] = 'Nota final';
$string['firstslotavailable'] = 'A primeira vaga irá abrir em: {$a}';
$string['forbidgroup'] = 'Vaga de grupo - clique para mudar';
$string['forcewhenoverlap'] = 'Forçar quando há sobreposição';
$string['forcewhenoverlap_help'] = '<h5>Forçar criação de vagas quando existem sobreposições</h5>
<p>Esta configuração determina como é que as novas vagas serão tratadas se ocorrer sobreposição com vagas já existentes.</p>
<p>Se ativar esta opção, a vaga existente sobreposta será apagada e será criada uma nova vaga.</p>
<p>Se desativada, a vaga existente sobreposta será mantida e <em>não</em> será criada uma nova vaga.</p>';
$string['forcewhenoverlap_link'] = 'mod/scheduler/conflict';
$string['forcourses'] = 'Escolher alunos nas disciplinas';
$string['friday'] = 'Sexta';
$string['generalconfig'] = 'Configuração geral';
$string['grade'] = 'Nota';
$string['gradeingradebook'] = 'Nota na pauta';
$string['gradingstrategy'] = 'Estratégia da avaliação';
$string['gradingstrategy_help'] = 'Sempre que os alunos tenham várias compromissos, selecione como as notas são agregadas. A pauta pode mostrar <ul><li>a nota média</li> ou <li>a nota máxima</li></ul> que o aluno obteve.';
$string['group'] = 'grupo&nbsp;';
$string['groupbookings'] = 'Reservar para grupos';
$string['groupbookings_help'] = 'Permitir que os alunos reservem uma vaga para todos os membros do seu grupo. Tenha em atenção que esta opção não é o mesmo que a configuração do "modo de grupo", uma vez que esta controla as vagas que cada aluno pode ver.';
$string['groupbreakdown'] = 'Por tamanho do grupo';
$string['groupmodeyourgroups'] = 'Modo de Grupo: {$a->groupmode}. Apenas os alunos de {$a->grouplist} podem reservar compromissos consigo.';
$string['groupmodeyourgroupsempty'] = 'Modo de Grupo: {$a->groupmode}. Não faz parte de qualquer grupo, por isso, os alunos não podem reservar compromissos consigo.';
$string['groupscheduling'] = 'Ativar marcações de grupos';
$string['groupscheduling_desc'] = 'Permitir marcar grupos inteiros de uma só vez.
Para além da opção global, a configuração "Reservar para grupos" deve estar ativa na respetiva instância do Scheduler).';
$string['groupsession'] = 'Sessão de grupo';
$string['groupsize'] = 'Tamanho do grupo';
$string['guardtime'] = 'Tempo de resguardo';
$string['guardtime_help'] = 'O tempo de resguardo impede que os alunos mudem a sua reserva pouco tempo antes do compromisso.
<p>Se o tempo de resguardo estiver ativo e definido para, por exemplo, 2 horas, os alunos não poderão reservar uma vaga que comece em menos de 2 horas a partir de agora e não poderão marcar um compromisso se ele começar em menos de 2 horas.</p>';
$string['guestscantdoanything'] = 'Os visitantes não têm qualquer permissão.';
$string['howtoaddstudents'] = 'Para adicionar alunos a um Scheduler de âmbito global, use a configuração de papel para o módulo.<br/> Pode também usar definições de papel neste módulo para definir os "atendedores" dos alunos.';
$string['htmlformat'] = 'HTML';
$string['ignoreconflicts'] = 'Ignorar conflitos de agenda';
$string['ignoreconflicts_help'] = 'Se ativar esta opção, a vaga será alterada para a data e hora solicitada, mesmo que já existam outras vagas ao mesmo tempo. Isto pode levar a compromissos sobrepostos para alguns professores ou alunos e, portanto, deve ser usado com cuidado.';
$string['ignoreconflicts_link'] = 'mod/scheduler/conflict';
$string['includeemptyslots'] = 'Incluir vagas não preenchidas';
$string['includeslotsfor'] = 'Incluir vagas para';
$string['incourse'] = '&nbsp;na disciplina&nbsp;';
$string['introduction'] = 'Descrição';
$string['isnonexclusive'] = 'Não exclusiva';
$string['landscape'] = 'Paisagem';
$string['lengthbreakdown'] = 'Por duração da vaga';
$string['limited'] = 'Limitada ({$a} restante)';
$string['location'] = 'Local';
$string['location_help'] = 'Especifique o local da reunião agendada.';
$string['markasseennow'] = 'Marcar como visto agora';
$string['markseen'] = 'Depois de terminado um compromisso com um aluno, marque-o como "Visto" clicando na caixa de seleção acima, perto da imagem do utilizador.';
$string['maxgrade'] = 'Assumir a nota mais alta';
$string['maxstudentlistsize'] = 'Tamanho máximo da lista de alunos';
$string['maxstudentlistsize_desc'] = 'O tamanho máximo da lista de alunos que precisam marcar um compromisso, conforme mostrado na vista do professor do scheduler. Se houver mais alunos do que o definido, nenhuma lista será exibida.';
$string['maxstudentsperslot'] = 'Máximo de alunos por vaga';
$string['maxstudentsperslot_desc'] = 'As vagas para grupos/vagas não exclusivas podem ter no máximo este número de alunos. Tenha em atenção que, além disto, a configuração "ilimitada" pode sempre ser escolhida para uma vaga.';
$string['meangrade'] = 'Utilizar a média';
$string['meetingwith'] = 'Compromisso com';
$string['meetingwithplural'] = 'Compromissos com';
$string['message'] = 'Mensagem';
$string['messagebody'] = 'Corpo da mensagem';
$string['messageprovider:bookingnotification'] = 'Notificação quando é feita/cancelada uma reserva';
$string['messageprovider:invitation'] = 'Convite para reservar uma vaga';
$string['messageprovider:reminder'] = 'Lembrete de compromisso próximo';
$string['messagesent'] = 'Mensagem enviada para {$a} destinatário(s)';
$string['messagesubject'] = 'Assunto';
$string['minutes'] = 'minutos';
$string['minutesperslot'] = 'minutos por vaga';
$string['missingstudents'] = '{$a} alunos ainda não marcaram qualquer compromisso';
$string['missingstudentsmany'] = '{$a} alunos ainda não marcaram qualquer compromisso. Nenhuma lista está a ser mostrada devido ao tamanho.';
$string['mixindivgroup'] = 'Misturar reservas individuais e em grupo';
$string['mixindivgroup_desc'] = 'Quando as marcações em grupo está ativa, permitir também reservas individuais .';
$string['mode'] = 'Modo de compromisso';
$string['modeappointments'] = 'compromissos&nbsp;';
$string['modeintro'] = 'Alunos podem registar&nbsp;';
$string['modeoneatatime'] = 'de cada vez';
$string['modeoneonly'] = 'nesta agenda';
$string['modulename'] = 'Scheduler';
$string['modulename_help'] = 'A atividade Scheduler permite agendar compromissos com os alunos. Os professores especificam intervalos de tempo para as reuniões e os alunos escolhem um ou mais deles.

Os professores, por sua vez, podem registar o resultado da reunião - e, opcionalmente, uma nota - dentro do scheduler.

O agendamento de grupos é suportado; ou seja, cada intervalo de tempo pode acomodar vários alunos e, opcionalmente, é possível agendar compromissos para grupos inteiros ao mesmo tempo.';
$string['modulename_link'] = 'mod/scheduler/view';
$string['modulenameplural'] = 'Schedulers';
$string['monday'] = 'Segunda';
$string['multiple'] = '(múltiplo)';
$string['myappointments'] = 'Os meus compromissos';
$string['myself'] = 'Próprio';
$string['name'] = 'Nome do Scheduler';
$string['needteachers'] = 'Não podem ser adicionadas vagas a esta disciplina porque não tem professores';
$string['negativerange'] = 'O intervalo não pode ser negativo.';
$string['negativetimerange'] = 'A data/hora de fim tem de ser posterior à data/hora de início.';
$string['never'] = 'Nunca';
$string['nfiles'] = '{$a} ficheiro(s)';
$string['noappointments'] = 'Sem compromissos';
$string['noexistingstudents'] = 'Nenhum aluno disponível para agendamento';
$string['nogroups'] = 'Nenhum grupo disponível para agendamento';
$string['noresults'] = 'Sem resultados.&nbsp;';
$string['noschedulers'] = 'Não existem schedulers';
$string['noslots'] = 'Não existem vagas de compromissos disponíveis.';
$string['noslotsavailable'] = 'De momento, não existem vagas disponíveis para reserva.';
$string['noslotsopennow'] = 'De momento, não existem vagas abertas para reserva.';
$string['nostudents'] = 'Nenhum aluno agendado';
$string['nostudenttobook'] = 'Nenhum aluno para reservar';
$string['note'] = 'Nota';
$string['noteacherforslot'] = 'Não existe professor para as vagas';
$string['noteachershere'] = 'Nenhum professor disponível';
$string['notenoughplaces'] = 'Não existem compromissos disponíveis suficientes nesta vaga.';
$string['notesrequired'] = 'Tem de inserir texto neste campo antes de reservar a vaga.';
$string['notifications'] = 'Notificações';
$string['notifications_help'] = 'Se ativar esta opção, professores e alunos receberão notificações quando forem criados ou cancelados compromissos.';
$string['notseen'] = 'Não visto';
$string['now'] = 'Agora';
$string['occurrences'] = 'Ocorrências';
$string['odsformat'] = 'ODS';
$string['on'] = 'em';
$string['onedaybefore'] = '1 dia antes da vaga';
$string['onelineperappointment'] = 'Uma linha por compromisso';
$string['onelineperslot'] = 'Uma linha por vaga';
$string['oneslotadded'] = 'Foi adicionada uma vaga';
$string['oneslotdeleted'] = 'Uma vaga foi apagada';
$string['oneweekbefore'] = '1 semana antes da vaga';
$string['onthemorningofappointment'] = 'Durante a manhã';
$string['options'] = 'Opções';
$string['otherstudents'] = 'Outros participantes';
$string['outlineappointments'] = '{$a->attended} compromissos atendidos, {$a->upcoming} em espera.&nbsp;';
$string['outlinegrade'] = 'Nota: {$a}.';
$string['overall'] = 'Geral';
$string['overlappings'] = 'Existem vagas sobrepostas com esta';
$string['pageperteacher'] = 'Uma página para cada {$a}';
$string['pagination'] = 'Paginação';
$string['pagination_help'] = 'Escolha se a exportação deve conter uma página separada para cada professor.
No Excel e no formato de ficheiros ODS, estas páginas correspondem a folhas de cálculo no livro exportado.';
$string['pdfformat'] = 'PDF';
$string['pdforientation'] = 'Orientação da página PDF';
$string['pluginadministration'] = 'Administração do Scheduler';
$string['pluginname'] = 'Scheduler';
$string['portrait'] = 'Retrato';
$string['preview'] = 'Pré-visualização';
$string['previewlimited'] = '(A pré-visualização está limitada a {$a} linhas.)';
$string['privacy:metadata:filepurpose'] = 'Ficheiro usado em anotações para a vaga ou compromisso';
$string['privacy:metadata:scheduler_appointment'] = 'Representa um compromisso de um estudante num scheduler';
$string['privacy:metadata:scheduler_appointment:appointmentnote'] = 'Observação pelo professor (visível para o aluno)';
$string['privacy:metadata:scheduler_appointment:appointmentnoteformat'] = 'Formato da observação do professor';
$string['privacy:metadata:scheduler_appointment:attended'] = 'Se o compromisso foi executado';
$string['privacy:metadata:scheduler_appointment:grade'] = 'Nota do compromisso';
$string['privacy:metadata:scheduler_appointment:studentid'] = 'Aluno que reservou o compromisso';
$string['privacy:metadata:scheduler_appointment:studentnote'] = 'Observação pelo aluno';
$string['privacy:metadata:scheduler_appointment:studentnoteformat'] = 'Formato da observação do aluno';
$string['privacy:metadata:scheduler_appointment:teachernote'] = 'Obrservação do professor (particular)';
$string['privacy:metadata:scheduler_appointment:teachernoteformat'] = 'Formato da observação particular do professor';
$string['privacy:metadata:scheduler_slots'] = 'Representa uma vaga num scheduler';
$string['privacy:metadata:scheduler_slots:appointmentlocation'] = 'Localização do compromisso';
$string['privacy:metadata:scheduler_slots:duration'] = 'Duração da vaga em minutos';
$string['privacy:metadata:scheduler_slots:exclusivity'] = 'Número máximo de alunos por vaga';
$string['privacy:metadata:scheduler_slots:notes'] = 'Observações sobre a vaga';
$string['privacy:metadata:scheduler_slots:notesformat'] = 'Formato das observações';
$string['privacy:metadata:scheduler_slots:starttime'] = 'Hora de início da vaga';
$string['privacy:metadata:scheduler_slots:teacherid'] = 'Professor associado à vaga';
$string['purgeunusedslots'] = 'Remover vagas não utilizadas no passado';
$string['recipients'] = 'Destinatários';
$string['registeredlbl'] = 'Alunos com compromisso';
$string['reminder'] = 'Lembrete';
$string['requireupload'] = 'Requer o carregamento de ficheiro';
$string['resetappointments'] = 'Apagar compromissos e notas';
$string['resetslots'] = 'Apagar vagas da agenda';
$string['return'] = 'Voltar à disciplina';
$string['revealteachernotes'] = 'Revelar as observações do professor em exportações de privacidade';
$string['revealteachernotes_desc'] = 'Se ativar esta opção estiver, as observações confidenciais do professor (que normalmente não são visíveis para os alunos)
serão revelado aos alunos nos pedidos de exportação de dados, ou seja, através da API de privacidade. Deve decidir com base no uso individual deste campo se precisa ser incluído, ou não, nas exportações de dados para os alunos sob o GDPR.';
$string['revoke'] = 'Revogar o compromisso';
$string['saturday'] = 'Sábado';
$string['save'] = 'Guardar';
$string['savechoice'] = 'Guardar a minha escolha';
$string['saveseen'] = 'Guardar visto';
$string['schedule'] = 'Programar data';
$string['scheduleappointment'] = 'Marcar compromisso para {$a}';
$string['schedulecancelled'] = '{$a} : O seu compromisso foi cancelado ou foi alterada a data/hora';
$string['schedulegroups'] = 'Marcações por grupo';
$string['scheduleinnew'] = 'Marcação numa nova vaga';
$string['scheduleinslot'] = 'Marcação numa vaga';
$string['scheduler'] = 'Scheduler';
$string['scheduler:addinstance'] = 'Adicionar outro Scheduler';
$string['scheduler:appoint'] = 'Reservar vagas';
$string['scheduler:attend'] = 'Atender os alunos';
$string['scheduler:canscheduletootherteachers'] = 'Agendar compromissos para outros utilizadores';
$string['scheduler:canseeotherteachersbooking'] = 'Consultar e pesquisar outras reservas de professores';
$string['scheduler:disengage'] = 'Esta funcionalidade está obsoleta e não está operacional';
$string['scheduler:editallattended'] = 'Marcar os alunos como atendidos/não atendidos em todos os compromissos.';
$string['scheduler:editallgrades'] = 'Editar notas em todos os compromissos.';
$string['scheduler:editallnotes'] = 'Editar as observações de todos os compromissos.';
$string['scheduler:manage'] = 'Gerir as suas vagas e compromissos';
$string['scheduler:manageallappointments'] = 'Gerir todos os dados do Scheduler';
$string['scheduler:seeotherstudentsbooking'] = 'Ver outros alunos com  reserva para esta vaga';
$string['scheduler:seeotherstudentsresults'] = 'Ver os resultados do outro aluno';
$string['scheduler:seeoverviewoutsideactivity'] = 'Usar o ecrã de Visão global para ver vagas fora do Scheduler da atividade atual.';
$string['scheduler:viewfullslots'] = 'Ver vagas, mesmo que estejam totalmente preenchidas (na vista do aluno)';
$string['scheduler:viewslots'] = 'Ver vagas que estejam abertas para reserva (na vista do aluno)';
$string['schedulestudents'] = 'Marcações por aluno';
$string['scopemenu'] = 'Mostrar vagas: {$a}';
$string['scopemenuself'] = 'Mostrar as minhas vagas em: {$a}';
$string['search:activity'] = 'Scheduler - Informação da atividade';
$string['seen'] = 'Visto';
$string['selectedtoomany'] = 'Selecionou muitas vagas. Não pode selecionar mais do que {$a}.';
$string['sendinvitation'] = 'Enviar convite';
$string['sendmessage'] = 'Enviar mensagem';
$string['sendreminder'] = 'Enviar lembrete';
$string['sendreminders'] = 'Enviar lembretes por e-mail dos próximos compromissos';
$string['sepcolon'] = 'Dois pontos';
$string['sepcomma'] = 'Vírgula';
$string['sepsemicolon'] = 'Ponto e vírgula';
$string['septab'] = 'Separador';
$string['showemailplain'] = 'Mostrar endereços de e-mail como texto simples';
$string['showemailplain_desc'] = 'Na vista do professor do Scheduler, os endereços de e-mail dos estudantes que precisam de um compromisso são mostrados em texto simples, além do mailto: links.';
$string['showparticipants'] = 'Mostrar participantes';
$string['slot'] = 'Vaga';
$string['slot_is_just_in_use'] = 'O compromisso acabou de ser escolhido por outro aluno! Por favor, tente novamente.';
$string['slotdatetime'] = '{$a->shortdatetime} para {$a->duration} minutos';
$string['slotdatetimelabel'] = 'Data e hora';
$string['slotdatetimelong'] = '{$a->date}, {$a->starttime} &ndash; {$a->endtime}';
$string['slotdescription'] = '{$a->status} em {$a->startdate} desde as {$a->starttime} até às {$a->endtime} em {$a->location} com {$a->facilitator}.';
$string['slots'] = 'Vagas';
$string['slotsadded'] = 'Foram adicionadas {$a} vagas';
$string['slotsdeleted'] = 'Foram apagadas {$a} vagas';
$string['slottype'] = 'Tipo de vaga';
$string['slotupdated'] = '1 vaga atualizada';
$string['slotwarning'] = '<strong>Aviso:</ strong> Ao alterar o horário desta vaga para a hora selecionada, irá entrar em conflito com a(s) vaga(s) listada(s) abaixo. Marque "Ignorar conflitos de agenda " se, mesmo assim, desejar alterar o horário.';
$string['staffbreakdown'] = 'Por {$a}';
$string['staffrolename'] = 'Nome do papel de professor';
$string['staffrolename_help'] = 'O nome para o papel de quem atende os alunos. Não tem que ser necessariamente um "professor".';
$string['start'] = 'Iniciar';
$string['startpast'] = 'Não pode iniciar um vaga de compromisso no passado';
$string['statistics'] = 'Estatísticas';
$string['student'] = 'Aluno';
$string['studentbreakdown'] = 'Por aluno';
$string['studentcomments'] = 'Mensagem do aluno';
$string['studentdetails'] = 'Detalhes do aluno';
$string['studentfiles'] = 'Ficheiros carregados';
$string['studentmultiselect'] = 'Cada aluno pode ser selecionado apenas uma vez nesta vaga';
$string['studentnote'] = 'Mensagem por aluno';
$string['studentprovided'] = 'Aluno previsto: {$a}';
$string['students'] = 'Alunos';
$string['sunday'] = 'Domingo';
$string['tab-otherappointments'] = 'Todos os compromissos deste aluno';
$string['tab-otherstudents'] = 'Aluno na vaga';
$string['tab-thisappointment'] = 'Compromisso';
$string['teacher'] = 'Professor';
$string['teachernote'] = 'Comentários privados (visíveis apenas por professores)';
$string['teachersmenu'] = 'Mostrar vagas de: {$a}';
$string['thiscourse'] = 'desta disciplina';
$string['thisscheduler'] = 'desta agenda';
$string['thissite'] = 'do site';
$string['thursday'] = 'Quinta';
$string['timefrom'] = 'Das:';
$string['timerange'] = 'Intervalo de tempo';
$string['timeto'] = 'ás:';
$string['totalgrade'] = 'Nota total';
$string['tuesday'] = 'Terça';
$string['unattended'] = 'Não atendidos';
$string['unlimited'] = 'Ilimitado';
$string['unregisteredlbl'] = 'Alunos sem compromisso';
$string['upcomingslots'] = 'Próximas vagas';
$string['updategrades'] = 'Atualizar notas';
$string['uploadmaxfiles'] = 'Número máximo de ficheiros carregados';
$string['uploadmaxfiles_help'] = 'O número máximo de ficheiros que um aluno pode enviar no formulário de reserva. O carregamento do ficheiros é opcional, a menos que a caixa "Requer o carregamento de ficheiro" esteja assinalada. Se definida como 0, a caixa de carregamento de ficheiros não será mostrada aos alunos.';
$string['uploadmaxfilesglobal'] = 'Número máximo de ficheiros carregados';
$string['uploadmaxfilesglobal_desc'] = 'O número máximo de ficheiros que um aluno pode enviar num formulário de reserva. Este número pode ser alterado em cada scheduler.';
$string['uploadmaxsize'] = 'Tamanho máximo do ficheiro';
$string['uploadmaxsize_help'] = 'Tamanho máximo do ficheiro a carregar pelos alunos. Este limite aplica-se em cada ficheiro.';
$string['uploadrequired'] = 'Tem de carregar um ficheiro antes de reservar a vaga.';
$string['uploadstudentfiles'] = 'Carregar ficheiros';
$string['usebookingform'] = 'Usar formulário de reserva';
$string['usebookingform_help'] = 'Se ativar esta opção, o aluno verá um ecrã de reserva separado antes de poder reservar uma vaga. O ecrã de reserva pode exigir que os alunos insiram dados, façam carregamento de ficheiros ou resolvam um captcha. Veja as opções abaixo.';
$string['usebookingform_link'] = 'mod/scheduler/bookingform';
$string['usecaptcha'] = 'Usar CAPTCHA para novas reservas';
$string['usecaptcha_help'] = 'Se ativar esta opção, os alunos precisarão resolver uma questão de segurança CAPTCHA antes de fazerem uma nova reserva.
Use esta configuração se suspeitar que os alunos usam programas automatizados para encaixar vagas disponíveis.
<p>Nenhum captcha será exibido se o aluno editar uma reserva existente.</p>';
$string['usenotes'] = 'Usar anotações nos compromissos';
$string['usenotesboth'] = 'Ambos os tipos de anotações';
$string['usenotesnone'] = 'nenhum';
$string['usenotesstudent'] = 'Anotação do compromisso, visível para professor e aluno';
$string['usenotesteacher'] = 'Anotação confidencial, visível apenas para professores';
$string['usestudentnotes'] = 'Permitir ao aluno adicionar uma mensagem';
$string['usestudentnotes_help'] = 'Se ativar esta opção, no ecrã da reserva existirá uma caixa de texto na qual os alunos podem inserir uma mensagem. Use as "Instruções de reserva" acima para instruir os alunos sobre as informações que devem fornecer.';
$string['viewbooking'] = 'Ver detalhes';
$string['wednesday'] = 'Quarta';
$string['welcomebackstudent'] = 'Pode reservar vagas adicionais clicando no botão abaixo correspondente de "Reservar vaga".';
$string['welcomenewstudent'] = 'A tabela abaixo mostra todas as vagas disponíveis para um compromisso. Faça a sua escolha clicando no correspondente botão "Reservar vaga". Se pretender fazer alguma alteração, pode voltar a esta página mais tarde.';
$string['welcomenewteacher'] = 'Clique no botão abaixo para adicionar vagas para compromissos.';
$string['what'] = 'O quê?';
$string['whathappened'] = 'O que aconteceu?';
$string['whatresulted'] = 'O que resultou?';
$string['when'] = 'Quando?';
$string['where'] = 'Onde?';
$string['who'] = 'Com quem?';
$string['whosthere'] = 'Quem lá estava?';
$string['xdaysbefore'] = '{$a} dias antes da vaga';
$string['xweeksbefore'] = '{$a} semanas antes da vaga';
$string['yesallgroups'] = 'Sim, para todos grupos';
$string['yesingrouping'] = 'Sim, no agrupamento {$a}';
$string['yesoptional'] = 'Sim, opcional para o aluno';
$string['yesrequired'] = 'Sim, o aluno deve inserir uma mensagem';
$string['yourappointmentnote'] = 'Os seus comentários acerca da reunião';
$string['yourslotnotes'] = 'Comentários sobre a reunião';
$string['yourstudentnote'] = 'A sua mensagem';
$string['yourtotalgrade'] = 'A sua nota final nesta atividade é <strong>{$a}</strong>.';
