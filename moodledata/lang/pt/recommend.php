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
 * Strings for component 'recommend', language 'pt', version '4.4'.
 *
 * @package     recommend
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptrecommendation'] = 'Aceitar';
$string['addquestion'] = 'Adicionar questão';
$string['addrequest'] = 'Solicitar recomendação';
$string['allrequests'] = 'Todas as solicitações';
$string['areyousure_delete_request'] = 'Tem certeza de que deseja eliminar esta solicitação de recomendação?';
$string['areyousure_reject_recommendation'] = 'Tem certeza de que deseja rejeitar esta recomendação?';
$string['completiononlyaccepted'] = 'Contar apenas recomendações aceites';
$string['completionrequired'] = 'Número mínimo de recomendações concluídas:';
$string['editquestion'] = 'Editar questão';
$string['editquestions'] = 'Editar questões';
$string['error_cannotdeleterequest'] = 'Esta solicitação não pode ser eliminada';
$string['error_emailduplicated'] = 'Endereço de e-mail duplicado';
$string['error_emailmissing'] = 'Não foi indicado um e-mail para esta recomendação';
$string['error_emailnotvalid'] = 'O endereço de e-mail não é válido';
$string['error_emailused'] = 'Já foi enviado solicitação para este e-mail';
$string['error_questionnotfound'] = 'Questão não encontrada';
$string['error_recommendationsubmitted'] = 'Esta recomendação já foi submetida';
$string['error_requestnotfound'] = 'Não foi possível encontrar a solicitação desta recomendação';
$string['eventquestioncreated'] = 'Foi criada a questão da recomendação';
$string['eventquestiondeleted'] = 'Foi eliminada a questão da recomendação';
$string['eventquestionupdated'] = 'Foi atualizada a questão da recomendação';
$string['eventrequestaccepted'] = 'Recomendação aceite';
$string['eventrequestcompleted'] = 'Recomendação concluída';
$string['eventrequestcreated'] = 'Solicitação de recomendação criada';
$string['eventrequestdeclined'] = 'Solicitação de recomendação rejeitada';
$string['eventrequestdeleted'] = 'Solicitação de recomendação eliminada';
$string['eventrequestrejected'] = 'Recomendação rejeitada';
$string['labelcontents'] = 'Conteúdos';
$string['maxrequests'] = 'Máximo de solicitações permitidas';
$string['maxrequests_help'] = 'Número máximo de solicitações que um participante pode enviar.
É razoável definir um valor baixo para incentivar os participantes a pré-confirmar com a pessoa solicitada e impedir o envio em massa de grande número de solicitações .
However different circumstances may prevent recommending person from filling out the form and participant should be allowed to send more requests than the required number of recommendations';
$string['messageprovider:completed'] = 'Notificação de conclusão da recomendação';
$string['messageprovider:statuschanged'] = 'Notificação de alteração do estado da solicitação de recomendação';
$string['modulename'] = 'Solicitação de recomendação';
$string['modulename_help'] = 'Este módulo permite que os participantes possam solicitar recomendações. A pessoa solicitada não necessita de estar registada. O aluno é capaz de ver as recomendações, aceitar ou recusar.';
$string['modulenameplural'] = 'Solicitações de recomendação';
$string['norequests'] = 'Nenhuma solicitação de recomendação foi criada';
$string['notificationcompleted_body'] = 'Caro/a {$a->recipient},

Uma nova recomendação foi concluída em {$a->site} e de momento aguarda aceitação.

Participante: {$a->participant}
Nome da pessoa solicitada: {$a->name}

Para visualizar a recomendação, siga a hiperligação:
{$a->link}

Se necessitar de ajuda, entre em contacto com o administrador,
{$a->admin}';
$string['notificationcompleted_short'] = 'Nova recomendação';
$string['notificationcompleted_subject'] = '{$a->courseshortname}: {$a->modulename}: Nova recomendação';
$string['notificationstatuschanged_body'] = 'Caro/a {$a->recipient},

Serve este para notificá-lo(a) que houve alteração do estado da recomendação que solicitou.
Nome da pessoa solicitada: {$a->name}
E-mail: {$a->email}
Novo estado: <b>{$a->status}</b>

Para visualizar todas as suas solicitações de recomendação, siga a hiperligação:
{$a->link}

Se necessitar de ajuda, entre em contacto com o administrador,
{$a->admin}';
$string['notificationstatuschanged_short'] = '{$a->courseshortname}: {$a->modulename}: O estado da solicitação de recomendação foi alterado';
$string['notificationstatuschanged_subject'] = 'O estado da solicitação de recomendação foi alterado';
$string['options'] = 'Opções';
$string['options_help'] = 'Especifique uma opção por linha. Em cada linha insira o valor seguido de /. Todos os valores têm de ser diferentes, por exemplo: <br><pre>1/Mau<br>3/Bom<br>5/Excelente</pre>';
$string['pluginadministration'] = 'Administração da Solicitação de recomendação';
$string['pluginname'] = 'Solicitação de recomendação';
$string['prefillwith'] = 'Pré preenchimento com:';
$string['preview'] = 'Pré-visualizar a recomendação';
$string['question'] = 'Questão';
$string['questiontype'] = 'Tipo';
$string['recommend:accept'] = 'Aceitar e rejeitar recomendações concluídas';
$string['recommend:addinstance'] = 'Adicionar uma nova atividade de Solicitação de recomendação';
$string['recommend:delete'] = 'Eliminar qualquer solicitação ou recomendação';
$string['recommend:editquestions'] = 'Editar questões da recomendação';
$string['recommend:request'] = 'Solicitar nova recomendação';
$string['recommend:viewdetails'] = 'Ver os detalhes de recomendação (solicitação e conclusão)';
$string['recommendationaccepted'] = 'Recomendação aceite';
$string['recommendationfor'] = 'Recomendação para {$a}';
$string['recommendationrejected'] = 'Recomendação rejeitada';
$string['recommendationtitle'] = 'Recomendação {$a}';
$string['recommendatorname'] = 'Nome da pessoa solicitada';
$string['recommendname'] = 'Nome';
$string['recommendname_help'] = 'Nome da atividade, tal como aparece na página da disciplina. Não é mostrado à pessoa solicitada';
$string['rejectrecommendation'] = 'Rejeitar';
$string['requestdeleted'] = 'Solicitação foi eliminada';
$string['requestemailsubject'] = 'Assunto do e-mail da solicitação';
$string['requestemailtemplate'] = 'Modelo de e-mail da solicitação';
$string['requestinstructions'] = 'Utilize este formulário para enviar solicitações, no máximo, para {$a} pessoas que seriam capazes de o/a recomendar.

Cada pessoa receberá um e-mail com uma hiperligação para um formulário de recomendação online.

Tenha cuidado ao preencher este formulário, uma vez que após a solicitação de recomendação ser enviada não será possível fazer qualquer alteração.';
$string['requestinstructionsmult'] = 'Não necessita de enviar todos as solicitações de uma só vez. Pode voltar a enviar solicitações adicionais a qualquer momento.';
$string['requestscreated'] = 'Solicitação(ões) de recomendação criada(s).';
$string['requestssettings'] = 'Configurações das solicitações';
$string['requesttemplatebody'] = 'Caro(a) {NAME}

{PARTICIPANT} solicitou uma recomendação desde {SITE}.
Para preencher o formulário da recomendação, por favor siga a hiperligação:
{LINK}

Se necessitar de ajuda, entre em contacto com o administrador,
{ADMIN}';
$string['requesttemplatesubject'] = 'Solicitação de recomendação desde {SITE}';
$string['requiredrecommendgroup'] = 'Recomendações recebidas';
$string['requiredrecommendgroup_help'] = 'Se a opção de "Contar apenas recomendações aceites" estiver destivada, as recomendações concluídas mas que ainda não foram revistas pelo professor serão contabilizadas. No entanto, se mais tarde a recomendação concluída for rejeitada pelo professor da atividade concluída, pode ficar incompleta novamente.';
$string['selectquestiontype'] = 'Selecione o tipo de questão';
$string['status'] = 'Estado';
$string['status0'] = 'Agendada';
$string['status1'] = 'Enviada a solicitação de recomendação';
$string['status2'] = 'Recomendação não aceite';
$string['status3'] = 'Recomendação concluída';
$string['status4'] = 'Recomendação rejeitada';
$string['status5'] = 'Recomendação aceite';
$string['suredeletequestion'] = 'Tem a certeza de que deseja eliminar esta questão? Todas as respostas a esta questão nas recomendações existentes também serão eliminadas.';
$string['taskname'] = 'Enviar as solicitações de recomendação agendadas';
$string['thanksforrecommendation'] = 'Obrigado, a sua recomendação foi processada.';
$string['timecompleted'] = 'Concluídas';
$string['timerequested'] = 'Solicitadas';
$string['typelabel'] = 'Texto de esclarecimento, sem controle de entrada';
$string['typeradio'] = 'Conjunto de botões de rádio';
$string['typetextarea'] = 'Texto de várias linhas com o editor';
$string['typetextfield'] = 'Campo de texto de linha única';
$string['yourrecommendations'] = 'As suas recomendações';
