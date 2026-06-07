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
 * Strings for component 'reengagement', language 'pt', version '4.4'.
 *
 * @package     reengagement
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitycompleted'] = 'Esta atividade foi marcada como concluída.';
$string['afterdelay'] = 'Após tempo de espera';
$string['areyousure'] = 'Tem a certeza de que pretende fazer esta alteração?';
$string['completeattimex'] = 'Esta atividade estará concluída {$a}';
$string['completion'] = 'Conclusão';
$string['completiondatesupdated'] = 'Datas de conclusão atualizadas.';
$string['completiontime'] = 'Data/hora de conclusão';
$string['completionwillturnon'] = 'Tenha em atenção que adicionar esta atividade à disciplina irá ativar a conclusão da atividade.';
$string['crontask'] = 'Tarefa cron do Reforço';
$string['cronwarning'] = 'A tarefa agendada do Reforço não foi executada nas últimas 8 horas - o Cron deve ser configurado para que os Reforços funcionem corretamente.';
$string['days'] = 'Dias';
$string['duration'] = 'Duração';
$string['duration_help'] = '<p>A duração é o intervalo de tempo entre um utilizador iniciar um Reforço e este ser marcado como concluído.
A duração do Reforço é especificada como a duração do período (por exemplo, Semanas) e o número de períodos (por exemplo, 7).</p>

<p>Este exemplo significaria que um utilizador ao iniciar um Reforço agora, este seria marcado como concluído daqui a 7 semanas.</p>';
$string['emailcontent'] = 'Mensagem da notificação (Utilizador)';
$string['emailcontent_help'] = 'Quando o módulo notifica um utilizador, a mensagem da notificação a enviar é o que está neste campo.';
$string['emailcontentdefaultvalue'] = 'Isto é uma notificação de lembrete da disciplina %coursename%.';
$string['emailcontentmanager'] = 'Mensagem da notificação (Gestor)';
$string['emailcontentmanager_help'] = 'Quando o módulo notifica um gestor, a mensagem da notificação a enviar é o que está neste campo.';
$string['emailcontentmanagerdefaultvalue'] = 'Isto é uma notificação de lembrete da disciplina %coursename% para o utilizador %userfirstname% %userlastname%.';
$string['emailcontentthirdparty'] = 'Mensagem da notificação (Terceiros)';
$string['emailcontentthirdparty_help'] = 'Quando o módulo notifica um terceiro, a mensagem da notificação a enviar é o que está neste campo.';
$string['emailcontentthirdpartydefaultvalue'] = 'Isto é uma notificação de lembrete da disciplina %coursename% para o utilizador %userfirstname% %userlastname%.';
$string['emaildelay'] = 'Tempo de espera da notificação';
$string['emaildelay_help'] = 'Quando o módulo está definido para notificar os utilizadores "Após tempo de espera", esta configuração define o tempo de espera a considerar.';
$string['emailrecipient'] = 'Destinatário(s) da notificação';
$string['emailrecipient_help'] = 'Quando é necessário enviar uma notificação a reforçar um utilizador relativamente à disciplina, esta configuração define se a notificação é enviada para o utilizador, para o gestor ou para ambos.';
$string['emailsubject'] = 'Assunto da notificação (Utilizador)';
$string['emailsubject_help'] = 'Quando o módulo notifica um utilizador, o assunto da notificação a enviar é o que está neste campo.';
$string['emailsubjectmanager'] = 'Assunto da notificação (Gestores)';
$string['emailsubjectmanager_help'] = 'Quando o módulo notifica um gestor, o assunto da notificação a enviar é o que está neste campo.';
$string['emailsubjectthirdparty'] = 'Assunto da notificação (Terceiros)';
$string['emailsubjectthirdparty_help'] = 'Quando o módulo notifica um terceiro, o assunto da notificação a enviar é o que está neste campo.';
$string['emailtime'] = 'Data/hora da notificação';
$string['emailuser'] = 'Notificar utilizador';
$string['emailuser_help'] = 'Quando deve a atividade notificar os utilizadores: <ul>
<li>Nunca: Não notificar os utilizadores.</li>
<li>Após conclusão do reforço: Notificar os utilizadores assim que a atividade é concluída.</li>
<li>Após tempo de espera: Notificar os utilizadores após um determinado tempo desde o início do módulo.</li>
</ul>';
$string['errornoid'] = 'Tem de especificar um ID course_module ou um ID da instância';
$string['errorreengagementnotvalid'] = 'Este módulo de reforço não está ativado para a sua conta.
Contacte o seu administrador se achar que isto é um erro.';
$string['frequencytoohigh'] = 'O número máximo de reforços para o período de espera definido é de {$a}.';
$string['hours'] = 'Horas';
$string['introdefaultvalue'] = 'Esta é uma atividade Reforço. O seu propósito é fazer cumprir um dado intervalo de tempo entre as atividades que o precedem e as atividades que se seguem.';
$string['messageprovider:mod_reengagement'] = 'Notificações de reforço';
$string['minutes'] = 'Minutos';
$string['modulename'] = 'Reforço';
$string['modulename_help'] = 'A atividade Reforço fornece um modo de enviar notificações oportunas aos alunos e a terceiros, que podem incluir lembretes para voltar à disciplina e concluir as atividades.

O acionador da notificação é um período de tempo especificado após o início de um evento, que pode ser a inscrição na disciplina, a conclusão de uma atividade ou outras variáveis da disciplina.
As notificações podem ser definidas para repetirem por uma execução limitada e/ou até que a atividade alvo seja concluída, podendo haver períodos de espera entre as repetições.
Se o utilizador já tiver concluído a atividade alvo, nenhuma notificação será enviada.

Pode usar este módulo para:<ul>
<li>Mostrar seletivamente conteúdo programado numa disciplina.</li>
<li>Lembrar repetidamente os alunos que já terminou o prazo de uma tarefa.</li>
<li>Avisar os gestores de que a disciplina foi concluída.</li>
</ul>

A atividade de Reforço é muito flexível. Explore o que pode fazer com ela.

<a href=https://docs.moodle.org/39/en/Reengagement_activity>Mais ajuda</a>';
$string['modulenameplural'] = 'Reforços';
$string['mustenablecompletionavailability'] = 'As configurações: Verificação da conclusão e Condições de acesso devem ser ativadas para usar a atividade Reforço.';
$string['never'] = 'Nunca';
$string['newcompletiontime'] = 'Nova data/hora da conclusão';
$string['nochange'] = 'Sem alteração';
$string['nochangenoaccess'] = 'Sem alteração (o utilizador não acedeu à disciplina)';
$string['noemailattimex'] = 'A mensagem agendada para {$a} não será enviada porque já concluiu a atividade alvo';
$string['nosuppresstarget'] = 'Sem atividade alvo';
$string['oncompletion'] = 'Após conclusão do reforço';
$string['periodtoolow'] = 'O tempo de espera é muito reduzido - deve ser no mínimo de 5 minutos.';
$string['pluginname'] = 'Reforço';
$string['privacy:metadata:completiontime'] = 'Quando este módulo estiver concluído';
$string['privacy:metadata:emailsent'] = 'Notificação foi enviada';
$string['privacy:metadata:emailtime'] = 'Quando deve se notificado este utilizador';
$string['privacy:metadata:reengagement'] = 'ID do Reforço';
$string['privacy:metadata:reengagement_inprogress'] = 'Atividades Reforço em progresso';
$string['privacy:metadata:userid'] = 'ID do utilizador ao qual se refere este registo';
$string['receiveemailattimex'] = 'A mensagem será enviada em {$a}.';
$string['receiveemailattimexunless'] = 'A mensagem será enviada em {$a} a menos que conclua antes a atividade alvo.';
$string['reengagement'] = 'reforço';
$string['reengagement:addinstance'] = 'reengagement:addinstance';
$string['reengagement:bulkactions'] = 'Executar ações em massa no reforço';
$string['reengagement:editreengagementduration'] = 'Editar a duração';
$string['reengagement:startreengagement'] = 'Iniciar';
$string['reengagementduration'] = 'Duração';
$string['reengagementfieldset'] = 'Detalhes';
$string['reengagementintro'] = 'Descrição';
$string['reengagementname'] = 'Nome';
$string['reengagementsinprogress'] = 'Reforços em progresso';
$string['remindercount'] = 'Número de lembretes';
$string['remindercount_help'] = 'Número de vezes que um e-mail é enviado após cada período de espera. Existem limites para os valores que pode utilizar:<ul>
<li>menos de 24 horas - limite de 2 reforços.</li>
<li>menos de 5 dias - limite de 10 reforços.</li>
<li>menos de 15 dias - limite de 26 reforços.</li>
<li>mais de 15 dias - limite máximo de 40 reforços.</li></ul>';
$string['resetbyenrolment'] = 'Pela data de criação da inscrição e duração de {$a}';
$string['resetbyfirstaccess'] = 'Pela data do primeiro acesso e duração de {$a}';
$string['resetbyspecificdate'] = 'Para uma data específica';
$string['resetcompletion'] = 'Redefinir data de conclusão';
$string['search:activity'] = 'Reforço - informação da atividade';
$string['seconds'] = 'Segundos';
$string['specifydate'] = 'Definir a data de conclusão para:';
$string['suppressemail'] = 'Cancelar notificações caso a atividade alvo seja concluída';
$string['suppressemail_help'] = 'Esta opção informa a atividade para cancelar o envio de notificações para os utilizadores quando a atividade alvo estiver concluída.';
$string['suppresstarget'] = 'Atividade alvo';
$string['suppresstarget_help'] = 'Utilize esta lista pendente para escolher a atividade que deve ser verificada a conclusão antes de enviar a notificação de lembrete.';
$string['thirdpartyemails'] = 'Destinatário (Terceiros)';
$string['thirdpartyemails_help'] = 'Uma lista separada por vírgulas de endereços de e-mail de terceiros que devem receber uma notificação quando o utilizador receber.';
$string['userandmanager'] = 'Utilizador e Gestores';
$string['weeks'] = 'Semanas';
$string['withselectedusers'] = 'Com os selecionados...';
$string['withselectedusers_help'] = '* Enviar mensagem - Enviar uma mensagem para um ou mais participantes
* Redefinir data de conclusão por acesso à disciplina - Austar a data de conclusão do reforço com base no primeiro acesso a esta disciplina.';
