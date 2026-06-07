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
 * Strings for component 'local_reminders', language 'pt', version '4.4'.
 *
 * @package     local_reminders
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityconfduein'] = 'Fecha';
$string['activityconfexplicitenable'] = 'Ativação de lembrete explícito';
$string['activityconfexplicitenabledesc'] = 'Se ativar esta opção, os professores ou autoridades relevantes têm de ativar os lembretes <strong>explicitamente</strong> para cada atividade na página de configurações dos lembretes da disciplina. Por causa disto, todos os lembretes de atividades serão desativados, por predefinição, independentemente da programação definida abaixo. Esta configuração não terá impacto sobre os lembretes já terminados de qualquer maneira.';
$string['activityconfexplicitenablehint'] = 'A administração do site desativou o envio, por predefinição, de lembretes de atividades. Significa que os professores têm de ativar os lembretes <em>explicitamente</em> para as atividades desta disciplina de onde pretendem enviar.';
$string['activityconfnoupcomingactivities'] = 'Não existem atividades programadas para esta disciplina.';
$string['activityconfupcomingactivities'] = 'Próximas atividades';
$string['activityconfupcomingactivitiesdesc'] = 'Os lembretes não serão enviados para atividades não assinaladas.';
$string['activitydueopenahead'] = 'Enviar antes da abertura da atividade';
$string['activitydueopenaheaddesc'] = 'Número de dias antes para enviar lembretes para abertura de atividades. Esta configuração apenas é válida se as aberturas de atividade estiverem ativadas para enviar lembretes da configuração acima.';
$string['activityignoreincompletes'] = 'Sem lembrete depois da conclusão';
$string['activityignoreincompletesdetails'] = 'Se ativar esta opção, não será enviado lembrete se a atividade foi concluída pelo utilizador <strong>antes</strong> da atividade terminar.';
$string['activityopeningseparation'] = 'Aberturas de atividades separadas';
$string['activityopeningseparationdesc'] = 'Mostrar as aberturas das atividades como entrada separada na página de configurações dos lembretes da disciplina.';
$string['activityremindersboth'] = 'Para início e para fim da atividade';
$string['activityremindersonlyclosings'] = 'Apenas para o fim da atividade';
$string['activityremindersonlyopenings'] = 'Apenas para o início da atividade';
$string['admintreelabel'] = 'Lembretes';
$string['calendareventcreatedprefix'] = 'ADICIONADA';
$string['calendareventoverdueprefix'] = 'TERMINADA';
$string['calendareventremovedprefix'] = 'REMOVIDA';
$string['calendareventupdatedprefix'] = 'ATUALIZADA';
$string['caleventchangedheading'] = 'Lembretes de alteração de eventos no calendário';
$string['caleventchangedheadingdetails'] = 'Estas configurações serão verificadas <strong>antes</strong> de considerar o tipo de evento.';
$string['categoryheading'] = 'Lembretes de eventos de categoria da disciplina';
$string['categorynosendforended'] = 'Sem lembrete para as disciplinas concluídas';
$string['categorynosendforendeddescription'] = 'Se ativar esta opção, não serão enviados lembretes para as disciplinas já concluídas.';
$string['contentdescription'] = 'Descrição';
$string['contenttypeactivity'] = 'Atividade';
$string['contenttypecategory'] = 'Categoria';
$string['contenttypecourse'] = 'Disciplina';
$string['contenttypegroup'] = 'Grupo';
$string['contenttypelocation'] = 'Onde';
$string['contenttypeuser'] = 'Utilizador';
$string['contentwhen'] = 'Quando';
$string['courseheading'] = 'Lembretes de evento da disciplina';
$string['custom'] = 'Personalizado';
$string['customschedulefallback'] = 'Retornar programação personalizada';
$string['customschedulefallbackdesc'] = 'Se ativar esta opção, as programações personalizadas retornarão ao valor especificado nas atividades para <strong>tipos de eventos desconhecidos</strong>.';
$string['days1'] = '1 dia';
$string['days3'] = '3 dias';
$string['days7'] = '7 dias';
$string['dueheading'] = 'Lembretes de evento da atividade';
$string['emailconfigsheading'] = 'Personalização do e-mail de lembrete';
$string['emailfootercustomname'] = 'Rodapé personalizado do e-mail';
$string['emailfootercustomnamedesc'] = 'O conteúdo do rodapé a ser incorporado em cada mensagem de e-mail de lembrete. Se este conteúdo estiver vazio e o rodapé predefinido estiver desativado, o rodapé será totalmente removido dos lembretes.';
$string['emailfooterdefaultname'] = 'Usar rodapé de e-mail predefinido';
$string['emailfooterdefaultnamedesc'] = 'Se ativar esta opção, o rodapé predefinido de e-mail do lembrete conterá uma hiperligação para o calendário do Moodle. Caso contrário, será utilizado o conteúdo fornecido no rodapé personalizado.';
$string['emailheadercustomname'] = 'Cabeçalho personalizado do e-mail';
$string['emailheadercustomnamedesc'] = 'O conteúdo do cabeçalho a ser incorporado em cada mensagem de e-mail de lembrete. Pode ser usado para marcar estas mensagens de e-mail no seu site.';
$string['enabled'] = 'Ativado';
$string['enabledaddedevents'] = 'Enviar quando o evento for criado';
$string['enabledaddedeventsdescription'] = 'Se ativar esta opção, será enviado um lembrete quando for criado um evento de calendário.';
$string['enabledchangedevents'] = 'Enviar quando o evento for atualizado';
$string['enabledchangedeventsdescription'] = 'Se ativar esta opção, será enviado um lembrete quando um evento de calendário for atualizado.';
$string['enableddescription'] = 'Ativar/desativar módulo de lembretes';
$string['enabledforcalevents'] = 'Avisar alteração de eventos de calendário';
$string['enabledforcaleventsdescription'] = 'Se ativar esta opção, será enviado um lembrete sempre que um evento de calendário deste tipo for criado, apagado ou atualizado.';
$string['enabledoverdue'] = 'Permitir fora de prazo';
$string['enabledremovedevents'] = 'Enviar quando o evento for apagado';
$string['enabledremovedeventsdescription'] = 'Se ativar esta opção, será enviado um lembrete quando um evento de calendário for apagado.';
$string['eventtypeclose'] = 'Atividade fecha';
$string['eventtypeexpectcompletionon'] = 'Previsão de conclusão';
$string['eventtypegradingdue'] = 'Prazo da avaliação';
$string['eventtypeopen'] = 'Atividade abre';
$string['excludedmodules'] = 'Módulos excluídos';
$string['excludedmodulesdesc'] = 'Os lembretes não serão enviados se um evento for gerado a partir dos módulos selecionados acima. Esta configuração é global e aplicável a qualquer tipo de evento.';
$string['explaincategoryheading'] = 'Configurações dos lembrete para eventos da categoria da disciplina.';
$string['explaincourseheading'] = 'Configurações do lembrete para eventos da disciplina. Estes eventos são provenientes de uma disciplina.';
$string['explaindueheading'] = 'Configurações do lembrete para eventos da atividade. Estes eventos são provenientes de atividades/módulos de uma disciplina.';
$string['explaingroupheading'] = 'Configurações do lembrete para eventos de grupo. Estes eventos são específicos para um grupo.';
$string['explaingroupshowname'] = 'Se ativar esta opção, o nome do grupo será incluído na mensagem enviada.';
$string['explainrolesallowedfor'] = 'Selecione os papéis dos utilizadores que podem receber lembretes.';
$string['explainsendactivityreminders'] = 'Indica em que estado da atividade devem ser enviados os lembretes.';
$string['explainsiteheading'] = 'Configurações do lembrete para eventos do site. Estes eventos são relevantes para todos os utilizadores do site.';
$string['explainuserheading'] = 'Configurações do lembrete para eventos do utilizador. Estes eventos são específicos para cada utilizador.';
$string['filterevents'] = 'Filtro dos eventos do calendário';
$string['filtereventsdescription'] = 'Os eventos do calendário devem ser filtrados para enviar lembretes.';
$string['filtereventsonlyhidden'] = 'Apenas eventos ocultos no calendário';
$string['filtereventsonlyvisible'] = 'Apenas eventos visíveis no calendário';
$string['filtereventssendall'] = 'Todos os eventos';
$string['groupheading'] = 'Lembretes de evento do grupo';
$string['groupshowname'] = 'Mostrar o nome do grupo na mensagem';
$string['messageprovider:reminders_course'] = 'Notificações de lembrete para eventos da disciplina';
$string['messageprovider:reminders_coursecategory'] = 'Notificações de lembrete para eventos da categoria da disciplina';
$string['messageprovider:reminders_due'] = 'Notificações de lembrete para eventos da atividade';
$string['messageprovider:reminders_group'] = 'Notificações de lembrete para eventos do grupo';
$string['messageprovider:reminders_site'] = 'Notificações de lembrete para eventos do site';
$string['messageprovider:reminders_user'] = 'Notificações de lembrete para eventos do utilizador';
$string['messagetitleprefix'] = 'Prefixo no título da mensagem';
$string['messagetitleprefixdescription'] = 'Texto a inserir como prefixo (entre parêntesis retos) no título de cada mensagem de lembrete enviada.';
$string['moodlecalendarname'] = 'Calendário do Moodle';
$string['overdueactivityreminders'] = 'Lembretes de atividades já terminadas';
$string['overdueactivityremindersdescription'] = 'Se ativar esta opção, serão enviados lembretes aos utilizadores que estão fora de prazo para a conclusão da atividade.';
$string['overduemessage'] = 'Esta atividade já terminou!';
$string['overduewarnmessage'] = 'Mensagem de aviso de terminada';
$string['overduewarnmessagedescription'] = '<strong>Texto simples</strong> a ser incorporado com cor vermelha nos e-mails de fim. Se estiver vazio, nada será acrescentado. Apenas será ativado se os e-mails de aviso estiverem ativados.';
$string['overduewarnprefix'] = 'Prefixo do título de terminada';
$string['overduewarnprefixdescription'] = '<strong>Prefixo simples</strong> a ser incorporado nos títulos dos e-mails de fim. Se estiver vazio, nada será acrescentado. Apenas será ativado se os e-mails de aviso estiverem ativados.';
$string['pluginname'] = 'Lembretes de evento';
$string['privacy:metadata'] = 'O módulo Lembretes de eventos não armazena quaisquer dados pessoais.';
$string['reminderdaysahead'] = 'Enviar antes do evento';
$string['reminderdaysaheadcustom'] = 'Agendamento personalizado';
$string['reminderdaysaheadcustomdetails'] = 'Especifique o agendamento pretendido para enviar lembretes <strong>antes</strong> de ocorrer um evento.';
$string['reminderdaysaheadschedule'] = 'Agendamento';
$string['reminderfrom'] = 'Lembrete do';
$string['reminderstask'] = 'Lembretes locais';
$string['reminderstaskclean'] = 'Limpar registos dos Lembretes locais';
$string['rolesallowedfor'] = 'Papéis permitidos';
$string['sendactivityreminders'] = 'Lembretes da atividade';
$string['sendas'] = 'E-mail de envio';
$string['sendasadmin'] = 'Administrador do Site';
$string['sendasdescription'] = 'O remetente dos e-mails de lembrete.';
$string['sendasnamedescription'] = 'O nome de utilizador a mostrar nos e-mails de lembrete quando forem enviados como "Não responder".';
$string['sendasnametitle'] = 'Nome de "Não responder"';
$string['sendasnoreply'] = '"Não responder"';
$string['showmodnameintitle'] = 'Mostrar nome do módulo no assunto do e-mail';
$string['showmodnameintitledesc'] = 'Se ativar esta opção, o nome do módulo correspondente será anexado ao assunto do lembrete.';
$string['siteheading'] = 'Lembretes de evento do site';
$string['taskreminder'] = 'Tarefa de lembretes';
$string['titlesubjectprefix'] = 'Lembrete';
$string['userheading'] = 'Lembretes de evento do utilizador';
$string['useservertimezone'] = 'Usar o fuso horário do servidor';
