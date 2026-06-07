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
 * Strings for component 'block_use_stats', language 'pt', version '4.4'.
 *
 * @package     block_use_stats
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activetrackingparams'] = 'Configurações do seguimento ativo';
$string['activities'] = 'Atividades';
$string['allowrule'] = 'Permitir o envio se corresponder à regra';
$string['allusers'] = 'Todos os utilizadores';
$string['blockdisplay'] = 'Configurações do bloco';
$string['blockname'] = 'Estatísticas do utilizador';
$string['byname'] = 'Nome';
$string['bytimedesc'] = 'Tempo';
$string['cachedef_aggregate'] = 'Agregados';
$string['capabilitycontrol'] = 'Capacidade';
$string['configbacktrackmode'] = 'Modo de monitorização';
$string['configbacktrackmode_desc'] = 'Selecionar como são escolhidos os tempos a mostar.';
$string['configbacktracksource'] = 'Início da monitorização';
$string['configbacktracksource_desc'] = 'Selecionar o tempo de referência a mostrar.';
$string['configcalendarskin'] = 'Esquema do calendário';
$string['configcalendarskin_desc'] = 'Mudar a aparência do calendário.';
$string['configcustomtagselect'] = 'Selecione para etiqueta personalizada';
$string['configcustomtagselect_desc'] = 'Esta consulta tem de retornar um resultado exclusivo por linha de registo. Este resultado irá "alimentar" a coluna com a etiqueta personalizada {$a}.';
$string['configdisplayactivitytimeonly'] = 'Tempo de referência para mostrar';
$string['configdisplayactivitytimeonly_desc'] = 'Pode escolher qual o tempo de aprendizagem de referência que pretende mostrar.';
$string['configdisplayothertime'] = 'Mostrar "Fora da disciplina"';
$string['configdisplayothertime_desc'] = 'Se ativar esta opção, é mostrada a linha com o tempo gasto "Fora da disciplina".';
$string['configenablecompilecube'] = 'Ativar compilação cúbica';
$string['configenablecompilecube_desc'] = 'Quando ativo, as dimensões adicionais são calculadas usando seleções definidas abaixo';
$string['configenrolmentfilter'] = 'Filtrar períodos de inscrição';
$string['configenrolmentfilter_desc'] = 'Se estiver ativo, os registos serão analisados a partir da primeira data de inscrição ativa disponível, ou a data de início da disciplina. Se desativo, o início da disciplina será o único limite inicial.';
$string['configfilterdisplayunder'] = 'Filtro de tempo';
$string['configfilterdisplayunder_desc'] = 'Se não for nulo, apenas os tempos da disciplina acima do limite indicado (em segundos) serão mostrados no bloco.';
$string['configfromwhen'] = 'Desde';
$string['configfromwhen_desc'] = 'Período de compilação (em dias até hoje).';
$string['configkeepalivecontrol'] = 'Método de controlo';
$string['configkeepalivecontrol_desc'] = 'dados internos usados para controlar a capacidade de envio';
$string['configkeepalivecontrolvalue'] = 'Nome do item de controlo';
$string['configkeepalivecontrolvalue_desc'] = 'irá corresponder à regra se a capacidade for permitida ou se o campo de perfil não tiver valor nulo. A configuração predefinida exclui os administradores.';
$string['configkeepalivedelay'] = 'Período de manutenção da sessão';
$string['configkeepalivedelay_desc'] = 'Atraso entre dois registos de "Manter a sessão ativa" para utilizadores ligados (segundos). Mantenha o maior possível para diminuir a carga do servidor quando muitos utilizadores estiverem ligados, mantendo as faixas de monitorização consistentes.';
$string['configkeepaliveenable'] = 'Ativar \'Manter a sessão ativa\'';
$string['configkeepaliveenable_desc'] = 'O método \'Manter a sessão ativa\' enviará pulsos de monitorização constantemente para o Moodle quando um utilizador estiver a visualizar uma janela do Moodle no seu terminal. Tenha em atenção que este método deve ser usado com cuidado, pois pode medir o comportamento local inconsistente.';
$string['configkeepaliverule'] = 'Enviar "Manter a sessão ativa"  se';
$string['configkeepaliverule_desc'] = 'Regra para controlar o envio de "Manter a sessão ativa" ajax';
$string['configlastcompiled'] = 'Última data do registo compilado';
$string['configlastcompiled_desc'] = 'Na mudança desta data de registo, o Cron irá recalcular todos os registos após a referida data.';
$string['configlastpingcredit'] = 'Crédito de tempo extra do último ping';
$string['configlastpingcredit_desc'] = 'Tempo (em minutos) que será sistematicamente adicionada à contagem de tempo monitorizado para cada vez que é suposto um encerramento ou descontinuidade da sessão.';
$string['configonesessionpercourse'] = 'Uma sessão por disciplina';
$string['configonesessionpercourse_desc'] = 'Se ativar esta opção, as sessões serão divididas cada vez que a monitorização muda  a disciplina atual. Se desativada, uma sessão representa uma sequência de trabalho que pode usar várias disciplinas.';
$string['configthreshold'] = 'Limite';
$string['configthreshold_desc'] = 'Limite da continuidade de atividade (minutos). Acima deste intervalo de tempo entre duas faixas sucessivas no registo, o utilizador é considerado como \'não ligado\'. Será adicionado um tempo arbitrário de crédito "Last Ping Credit" (Crédito do Último Ping)" à respetiva contagem de tempo.';
$string['credittime'] = '(LCA)';
$string['datacubing'] = 'Tratamento de dados multidimensional';
$string['declaredtime'] = 'Tempo declarado';
$string['denyrule'] = 'Permitir o envio a não ser que corresponda à regra';
$string['dimensionitem'] = 'Classes observáveis';
$string['displayactivitiestime'] = 'Apenas o tempo atribuído a atividades efetivas na disciplina';
$string['displaycoursetime'] = 'Tempo real da disciplina (todo o tempo gasto em todos os contextos da disciplina)';
$string['errornorecords'] = 'Nenhuma informação registada';
$string['eventscount'] = 'Hits';
$string['eventusestatskeepalive'] = 'A sessão continua ativa';
$string['fixedchoice'] = 'Forçar para a data de início da disciplina/conta';
$string['fixeddate'] = 'A partir de datas de referência fixas';
$string['from'] = 'Desde ';
$string['fromrange'] = 'De ';
$string['go'] = 'Iniciar';
$string['hidecourselist'] = 'Ocultar tempo das disciplinas';
$string['isfiltered'] = 'Apenas são mostrados os tempos superiores a {$a} segundos';
$string['keepuseralive'] = 'O utilizador {$a} ainda está em sessão';
$string['loganalysisparams'] = 'Parâmetros da análise dos registos';
$string['modulename'] = 'Registo da atividade';
$string['noavailablelogs'] = 'Não existem registos disponíveis';
$string['onthismoodlefrom'] = ' desde ';
$string['other'] = 'Outras presenças fora da disciplina';
$string['othershort'] = 'OUTRO';
$string['pluginname'] = 'Estatísticas do utilizador';
$string['pluginname_desc'] = 'Um bloco que compila tempos de sessão';
$string['printpdf'] = 'Imprimir PDF';
$string['privacy:metadata'] = 'O bloco Estatísticas do utilizador não armazena diretamente nenhuns dados pertencentes aos utilizadores';
$string['profilefieldcontrol'] = 'Campo de perfil';
$string['showdetails'] = 'Mostrar detalhes';
$string['sliding'] = 'Número de dias até hoje';
$string['studentchoice'] = 'Permitir os alunos escolherem';
$string['studentscansee'] = 'Visível para os alunos';
$string['task_cache_ttl'] = 'Cache agregada TTL';
$string['task_cleanup'] = 'Limpeza dos intervalos de tempo';
$string['task_compile'] = 'Compilação de intervalos de tempo';
$string['timeelapsed'] = 'Tempo gasto';
$string['to'] = ' até ';
$string['use_stats:addinstance'] = 'Pode adicionar uma instância';
$string['use_stats:export'] = 'Pode exportar como pdf (precisa de trainingsessions report)';
$string['use_stats:myaddinstance'] = 'Pode adicionar uma instância ao Painel do utilizador';
$string['use_stats:seecoursedetails'] = 'Pode ver detalhes de todos os utilizadores da sua disciplina';
$string['use_stats:seegroupdetails'] = 'Pode ver os detalhes de todos os utilizadores dos seus grupos';
$string['use_stats:seeowndetails'] = 'Pode ver os seus detalhes';
$string['use_stats:seesitedetails'] = 'Pode ver detalhes de todos os utilizadores';
$string['use_stats:view'] = 'Pode ver estatísticas';
$string['use_stats_description'] = 'Ao publicar este serviço, permite que os servidores remotos solicitem a leitura das estatísticas de utilizadores locais.<br/>Ao inscrever-se neste serviço, permite que o seu servidor local consulte um servidor remoto sobre as estatísticas dos seus membros.<br/>';
$string['use_stats_name'] = 'Acesso remoto às estatísticas';
$string['use_stats_rpc_service'] = 'Acesso remoto às estatísticas';
$string['use_stats_rpc_service_name'] = 'Acesso remoto às estatísticas';
$string['warningusestateenrolfilter'] = 'O verificador de inscrição está ativo no bloco Estatísticas do utilizador. Isso pode afetar os relatórios se a atividade do utilizador ocorrer antes da última data de início da inscrição.';
$string['youspent'] = 'Despendeu';
