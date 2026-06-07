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
 * Strings for component 'tool_policy', language 'pt', version '4.4'.
 *
 * @package     tool_policy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptanceacknowledgement'] = 'Confirmo que recebi um pedido para registar o consentimento em nome do(s) utilizador(es) acima.';
$string['acceptancenote'] = 'Observações';
$string['acceptancepolicies'] = 'Políticas';
$string['acceptancessavedsucessfully'] = 'Os consentimentos foram guardados com sucesso.';
$string['acceptancestatusaccepted'] = 'Aceite';
$string['acceptancestatusacceptedbehalf'] = 'Aceite em nome do utilizador';
$string['acceptancestatusdeclined'] = 'Recusado';
$string['acceptancestatusdeclinedbehalf'] = 'Recusado em nome do utilizador';
$string['acceptancestatusoverall'] = 'Geral';
$string['acceptancestatuspartial'] = 'Parcialmente aceite';
$string['acceptancestatuspending'] = 'Pendente';
$string['acceptanceusers'] = 'Utilizadores';
$string['actions'] = 'Ações';
$string['activate'] = 'Definir estado como "Ativo"';
$string['activateconfirm'] = '<p>Está prestes a ativar a política <em>\'{$a->name}\'</em> e tornar a versão <em>\'{$a->revision}\'</em> como a atual.</p><p>Todos os utilizadores serão obrigados a concordar com esta nova versão da política para poder usar o site. </p>';
$string['activateconfirmyes'] = 'Ativar';
$string['activating'] = 'A ativar uma política';
$string['agreepolicies'] = 'Dê o seu consentimento às seguintes políticas:';
$string['backtoprevious'] = 'Voltar para a página anterior';
$string['backtotop'] = 'Voltar ao topo';
$string['cachedef_policy_optional'] = 'Cache do sinalizador opcional / obrigatório para versões de política';
$string['consentbulk'] = 'Consentimento';
$string['consentpagetitle'] = 'Consentimento';
$string['contactdpo'] = 'Para qualquer dúvida sobre as políticas, por favor, contacte o responsável pela privacidade.';
$string['dataproc'] = 'Processamento de dados pessoais';
$string['declineacknowledgement'] = 'Confirmo que recebi uma solicitação para recusar o consentimento em nome do(s) utilizador(es) acima.';
$string['declinethepolicy'] = 'Recusar consentimento do utilizador';
$string['deleteconfirm'] = '<p>Tem a certeza de que pretende apagar a política \'<em>{$a->name}</em>\'?</p><p>Esta operação não pode ser desfeita.</p>';
$string['deleting'] = 'A apagar uma versão';
$string['editingpolicydocument'] = 'A editar uma política';
$string['errorpolicyversioncompulsory'] = 'Políticas obrigatórias não podem ser recusadas!';
$string['errorpolicyversionnotfound'] = 'Não existe nenhuma versão da política com este identificador.';
$string['errorsaveasdraft'] = 'Pequenas alterações não podem ser guardadas como rascunho';
$string['errorusercantviewpolicyversion'] = 'O utilizador não tem acesso a esta versão da política.';
$string['event_acceptance_created'] = 'Consentimento do utilizador à política criado';
$string['event_acceptance_updated'] = 'Consentimento do utilizador à política atualizado';
$string['filtercapabilityno'] = 'Permissão: não pode concordar';
$string['filtercapabilityyes'] = 'Permissão: pode concordar';
$string['filterplaceholder'] = 'Pesquisar palavras-chave ou selecionar filtro';
$string['filterpolicy'] = 'Política: {$a}';
$string['filterrevision'] = 'Versão: {$a}';
$string['filterrevisionstatus'] = 'Versão: {$a->name} ({$a->status})';
$string['filterrole'] = 'Papel: {$a}';
$string['filters'] = 'Filtros';
$string['filterstatusdeclined'] = 'Estado: Recusado';
$string['filterstatuspending'] = 'Estado: Pendente';
$string['filterstatusyes'] = 'Estado: Concordou';
$string['guestconsent:continue'] = 'Continuar';
$string['guestconsentmessage'] = 'Se continuar a navegar neste site,  concorda com as nossas políticas:';
$string['iagree'] = 'Concordo com {$a}.';
$string['iagreetothepolicy'] = 'Dar consentimento';
$string['idontagree'] = 'Não concordo com {$a}.';
$string['inactivate'] = 'Definir estado para "Inativo"';
$string['inactivating'] = 'A inativar uma política';
$string['inactivatingconfirm'] = '<p>Está prestes a inativar a política <em>\'{$a->name}\'</em> versão <em>\'{$a->revision}\'</em>.</p>';
$string['inactivatingconfirmyes'] = 'Inativar';
$string['invalidversionid'] = 'Não existe política com este identificador!';
$string['irevokethepolicy'] = 'Retirar o consentimento do utilizador';
$string['listactivepolicies'] = 'Lista de políticas ativas';
$string['managepolicies'] = 'Gerir políticas';
$string['minorchange'] = 'Pequena alteração';
$string['minorchangeinfo'] = 'Alterações menores não alteram o significado do texto, termos ou condições da política. Os utilizadores não precisam de reconfirmar o seu consentimento se a alteração for assinalada como menor.';
$string['movedown'] = 'Mover para baixo';
$string['moveup'] = 'Mover para cima';
$string['mustagreetocontinue'] = 'Antes de continuar, tem de concordar com todas estas políticas.';
$string['newpolicy'] = 'Nova política';
$string['newversion'] = 'Nova versão';
$string['noactivepolicies'] = 'Não existem políticas com uma versão ativa.';
$string['nofiltersapplied'] = 'Nenhum filtro aplicado';
$string['nopermissiontoagreedocs'] = 'Sem permissão para concordar com as políticas.';
$string['nopermissiontoagreedocs_desc'] = 'Não tem as permissões necessárias para concordar com as políticas.<br /> Não poderá usar este site até que concorde com as seguintes políticas:';
$string['nopermissiontoagreedocsbehalf'] = 'Não tem permissão para concordar com as políticas em nome deste utilizador.';
$string['nopermissiontoagreedocsbehalf_desc'] = 'Não tem a necessária permissão para concordar com as seguintes políticas em nome de {$a}:';
$string['nopermissiontoagreedocscontact'] = 'Para mais ajuda:';
$string['nopermissiontoviewpolicyversion'] = 'Não tem permissão para visualizar esta versão da política.';
$string['nopolicies'] = 'Não existem políticas para utilizadores registados com uma versão ativa.';
$string['pluginname'] = 'Políticas';
$string['policiesagreements'] = 'Políticas e consentimentos';
$string['policy:accept'] = 'Concordar com as políticas';
$string['policy:acceptbehalf'] = 'Dar consentimento a políticas em nome de outra pessoa';
$string['policy:managedocs'] = 'Gerir políticas';
$string['policy:viewacceptances'] = 'Ver relatórios de consentimento dos utilizadores';
$string['policydocaudience'] = 'Consentimento do utlizador';
$string['policydocaudience0'] = 'Todos os utilizadores';
$string['policydocaudience1'] = 'Utilizadores autenticados';
$string['policydocaudience2'] = 'Visitantes';
$string['policydoccontent'] = 'Política geral';
$string['policydochdrpolicy'] = 'Política';
$string['policydochdrversion'] = 'Versão do documento';
$string['policydocname'] = 'Nome';
$string['policydocoptional'] = 'Acordo opcional';
$string['policydocoptionalno'] = 'Obrigatório';
$string['policydocoptionalyes'] = 'Opcional';
$string['policydocrevision'] = 'Versão';
$string['policydocsummary'] = 'Resumo';
$string['policydocsummary_help'] = 'Este texto deve fornecer um resumo da política, potencialmente de forma simplificada e facilmente acessível, usando linguagem clara e simples.';
$string['policydoctype'] = 'Tipo';
$string['policydoctype0'] = 'Política do site';
$string['policydoctype1'] = 'Política de privacidade';
$string['policydoctype2'] = 'Política de terceiros';
$string['policydoctype99'] = 'Outras políticas';
$string['policydocuments'] = 'Documentos da política';
$string['policynamedversion'] = 'Política {$a->name} (versão {$a->revision} - {$a->id})';
$string['policypriorityagreement'] = 'Mostrar política antes de mostrar outras políticas';
$string['policyversionacceptedinbehalf'] = 'O consentimento sobre esta política foi dado por outro utilizador em seu nome.';
$string['policyversionacceptedinotherlang'] = 'O consenteimento para esta política foi dado num idioma diferente.';
$string['previousversions'] = '{$a} versões anteriores';
$string['privacy:metadata:acceptances'] = 'Informações dos consentimentos dados pelos utilizadores deste site.';
$string['privacy:metadata:acceptances:lang'] = 'O idioma usado para mostrar a política quando o consentimento foi dado.';
$string['privacy:metadata:acceptances:note'] = 'Quaisquer comentários adicionados pelo utilizador que deu consentimento em nome de outro utilizador.';
$string['privacy:metadata:acceptances:policyversionid'] = 'A versão da política para a qual o consentimento foi dado.';
$string['privacy:metadata:acceptances:status'] = 'O estado do consentimento';
$string['privacy:metadata:acceptances:timecreated'] = 'Data e hora de quando o utilizador concordou com a política';
$string['privacy:metadata:acceptances:timemodified'] = 'A data e hora de quando o utilizador modificou o seu consentimento.';
$string['privacy:metadata:acceptances:userid'] = 'O utilizador a quem se refere este contrato de política.';
$string['privacy:metadata:acceptances:usermodified'] = 'O ID do utilizador que aceitou a política, se for em nome de outro utilizador.';
$string['privacy:metadata:subsystem:corefiles'] = 'A ferramenta Política armazena ficheiros incluídos no resumo e no texto completo da política.';
$string['privacy:metadata:versions'] = 'Informação sobre as versões da política.';
$string['privacy:metadata:versions:archived'] = 'Estado da política (ativa ou inativa).';
$string['privacy:metadata:versions:audience'] = 'Tipo de utilizadores que devem dar o seu consentimento.';
$string['privacy:metadata:versions:content'] = 'Conteúdo desta versão da política.';
$string['privacy:metadata:versions:contentformat'] = 'Formato do campo do conteúdo.';
$string['privacy:metadata:versions:name'] = 'Nome da política.';
$string['privacy:metadata:versions:policyid'] = 'Política associada a esta versão.';
$string['privacy:metadata:versions:revision'] = 'Nome da revisão desta versão da política.';
$string['privacy:metadata:versions:summary'] = 'Resumo desta versão da política.';
$string['privacy:metadata:versions:summaryformat'] = 'Formato do campo resumo.';
$string['privacy:metadata:versions:timecreated'] = 'Data e hora de criação desta versão da política';
$string['privacy:metadata:versions:timemodified'] = 'Hora de atualização desta versão da política.';
$string['privacy:metadata:versions:type'] = 'Tipo de política.';
$string['privacy:metadata:versions:usermodified'] = 'Utilizador que modificou a política.';
$string['privacysettings'] = 'Configurações de privacidade';
$string['readpolicy'] = 'Leia por favor:  {$a}';
$string['refertofullpolicytext'] = 'Por favor, consulte a versão completa de {$a} se pretender rever o texto.';
$string['response'] = 'Resposta';
$string['responseby'] = 'Aceite por';
$string['responseon'] = 'Data';
$string['revokeacknowledgement'] = 'Confirmo que recebi uma solicitação para retirar o consentimento em nome do(s) utilizador(es) acima.';
$string['save'] = 'Guardar';
$string['saveasdraft'] = 'Guardar como rascunho';
$string['selectpolicyandversion'] = 'Use o filtro acima para selecionar política e/ou versão';
$string['selectuser'] = 'Selecionar o utilizador {$a}';
$string['selectusersforconsent'] = 'Selecionar utilizadores para dar consentimento em seu nome.';
$string['settodraft'] = 'Criar um novo rascunho';
$string['status'] = 'Estado da política';
$string['status0'] = 'Rascunho';
$string['status1'] = 'Ativo';
$string['status2'] = 'Inativo';
$string['statusformtitleaccept'] = 'A aceitar política';
$string['statusformtitledecline'] = 'A recusar política';
$string['statusformtitlerevoke'] = 'A revogar política';
$string['statusinfo'] = 'Uma política com estado \'Ativa\' exigirá o consentimento dos utilizadores na primeira vez que se autenticarem, ou, no caso de utilizadores existentes, na próxima autenticação.';
$string['steppolicies'] = 'Política número {$a->numpolicy} de um total de {$a->totalpolicies}';
$string['useracceptanceactionaccept'] = 'Aceitar';
$string['useracceptanceactionacceptone'] = 'Aceitar {$a}';
$string['useracceptanceactionacceptpending'] = 'Aceitar políticas pendentes';
$string['useracceptanceactiondecline'] = 'Recusar';
$string['useracceptanceactiondeclineone'] = 'Recusar {$a}';
$string['useracceptanceactiondeclinepending'] = 'Recusar políticas pendentes';
$string['useracceptanceactiondetails'] = 'Detalhes';
$string['useracceptanceactionrevoke'] = 'Retirar';
$string['useracceptanceactionrevokeall'] = 'Retirar políticas aceites';
$string['useracceptanceactionrevokeone'] = 'Retirar aceitação de {$a}';
$string['useracceptancecount'] = '{$a->agreedcount} de {$a->userscount} ({$a->percent}%)';
$string['useracceptancecountna'] = 'N/A';
$string['useracceptances'] = 'Consentimentos dos utilizadores';
$string['userpolicysettings'] = 'Políticas';
$string['usersaccepted'] = 'Consentimentos';
$string['viewarchived'] = 'Ver versões anteriores';
$string['viewconsentpageforuser'] = 'A visualizar esta página em nome de {$a}';
