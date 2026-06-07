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
 * Strings for component 'local_sitenotice', language 'pt', version '4.4'.
 *
 * @package     local_sitenotice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['booleanformat:false'] = 'Não';
$string['booleanformat:true'] = 'Sim';
$string['button:accept'] = 'Aceitar';
$string['button:close'] = 'Fechar';
$string['cachedef_enabled_notices'] = 'Lista de avisos ativados';
$string['cachedef_notice_view'] = 'Lista de avisos visualizados';
$string['confirmation:deletenotice'] = 'Pretende realmente apagar o aviso "{$a}"?';
$string['event:acknowledge'] = 'reconhecer';
$string['event:create'] = 'criar';
$string['event:delete'] = 'apagar';
$string['event:disable'] = 'desativar';
$string['event:dismiss'] = 'dispensar';
$string['event:enable'] = 'ativar';
$string['event:reset'] = 'reiniciar';
$string['event:timecreated'] = 'Data/hora';
$string['event:update'] = 'atualizar';
$string['modal:acceptbtntooltip'] = 'Por favor, marque a caixa de seleção acima.';
$string['modal:checkboxtext'] = 'Li e entendi o aviso (fechar este aviso fará com que saia deste site).';
$string['notice:activefrom'] = 'Ativo a partir de';
$string['notice:activefrom_help'] = 'A data e hora a partir da qual a mensagem estará ativa.';
$string['notice:cohort'] = 'Grupo global';
$string['notice:cohort:all'] = 'Todos os utilizadores';
$string['notice:content'] = 'Conteúdo';
$string['notice:create'] = 'Criar novo aviso';
$string['notice:delete'] = 'Apagar aviso';
$string['notice:disable'] = 'Desativar aviso';
$string['notice:enable'] = 'Ativar aviso';
$string['notice:expiry'] = 'Validade';
$string['notice:expiry_help'] = 'A data e hora a que as mensagens expiram e deixarão de ser exibidas aos utilizadores.';
$string['notice:forcelogout'] = 'Forçar fim de sessão';
$string['notice:forcelogout_help'] = 'Se ativar esta opção, a sessão do utilizador será terminada após fechar o aviso. Esta configuração não afeta o administrador do site.';
$string['notice:hlinkcount'] = 'Contagens de hiperligações';
$string['notice:info'] = 'Informação do aviso';
$string['notice:notice'] = 'Aviso';
$string['notice:perpetual'] = 'Permanente';
$string['notice:perpetual_help'] = 'Quando definido como sim, o aviso sempre será exibido (a menos que desativado). Se definido como não, deve ser especificado um intervalo de data e hora para o aviso';
$string['notice:redirectmsg'] = 'Disciplina requerida não está concluída. Não é permitido enviar tarefa';
$string['notice:report'] = 'Ver relatório';
$string['notice:reqack'] = 'Requer consentimento';
$string['notice:reqack_help'] = 'Se ativar esta opção, o utilizador precisará aceitar o aviso antes de continuar a usar o site LMS.
Se o utilizador não aceitar o aviso, será desligado do site.';
$string['notice:reqcourse'] = 'Requer conclusão da disciplina';
$string['notice:reqcourse_help'] = 'Se selecionado, o utilizador verá o aviso até que a disciplina esteja concluída.';
$string['notice:reset'] = 'Reiniciar aviso';
$string['notice:resetinterval'] = 'Reiniciar a cada';
$string['notice:resetinterval_help'] = 'O aviso será novamente exibido ao utilizador a cada período de tempo especificado.';
$string['notice:timemodified'] = 'Última modificação';
$string['notice:title'] = 'Título';
$string['notice:view'] = 'Ver aviso';
$string['notification:noack'] = 'Não existem consentimentos para este aviso';
$string['notification:nodeleteallowed'] = 'Não é permitido apagar o aviso';
$string['notification:nodis'] = 'Não existem dispensas para este aviso';
$string['notification:noticedoesnotexist'] = 'O aviso não existe';
$string['notification:noupdateallowed'] = 'Não é permitido atualizar o aviso';
$string['pluginname'] = 'Avisos do site';
$string['report:acknowledge_desc'] = 'Lista de utilizadores que consentiram o aviso';
$string['report:acknowledged'] = 'aviso_consentido_{$a}';
$string['report:button:ack'] = 'Relatório dos consentimento do aviso';
$string['report:button:dis'] = 'Relatório das dispensas do aviso';
$string['report:dismissed'] = 'aviso_dispensado_{$a}';
$string['report:dismissed_desc'] = 'Lista de utilizadores que dispensaram o aviso';
$string['report:timecreated_server'] = 'Hora do servidor';
$string['report:timecreated_spreadsheet'] = 'Data e hora da folha de cálculo';
$string['report:timeformat:sortable'] = '%Y-%m-%d %H:%M:%S';
$string['setting:allow_delete'] = 'Permitir apagar aviso';
$string['setting:allow_deletedesc'] = 'Permitir que os avisos sejam apagados.';
$string['setting:allow_update'] = 'Permitir atualizar aviso';
$string['setting:allow_updatedesc'] = 'Permitir que os avisos sejam atualizados.';
$string['setting:cleanup_deleted_notice'] = 'Limpar informações relacionadas com o aviso apagado';
$string['setting:cleanup_deleted_noticedesc'] = 'Requer "Permitir apagar aviso".
Se ativar esta opção, outros detalhes relacionados com o aviso que está a ser apagado, como hiperligações, histórico de hiperligações, confirmação,
a última visualização do utilizador também serão apagados.';
$string['setting:enabled'] = 'Ativado';
$string['setting:enableddesc'] = 'Ativar avisos do site';
$string['setting:managenotice'] = 'Gerir avisos';
$string['setting:settings'] = 'Configurações';
$string['sitenotice:manage'] = 'Gerir avisos do site';
$string['timeformat:resetinterval'] = '%a dias, %h horas, %i minutos e %s segundos';
