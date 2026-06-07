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
 * Strings for component 'consentform', language 'pt', version '4.4'.
 *
 * @package     consentform
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['agree'] = 'Aceitar';
$string['agreed'] = 'aceitou';
$string['agreementlogentry'] = 'Aceitou os termos em {$a}.';
$string['backbuttonlist'] = 'Voltar à lista de módulos';
$string['choice'] = 'Faça a sua escolha:';
$string['configurations'] = 'Configuração desta instância de declaração de consentimento';
$string['confirmationtext'] = 'Texto de consentimento para concordar com';
$string['confirmincourseoverview'] = 'Acordo na visão global da disciplina';
$string['confirmincourseoverview_help'] = 'A aceitação/recusa é fornecida na página de visão global da disciplina. Esta opção só pode ser escolhida ao criar esta instância do módulo.';
$string['confirmincourseoverviewdesc'] = 'Aceitação/recusa na visão global da disciplina.';
$string['consentform'] = 'Declaração de consentimento';
$string['consentform:addinstance'] = 'Adicionar uma nova declaração de consentimento';
$string['consentform:submit'] = 'Editar a declaração de consentimento';
$string['consentform:view'] = 'Ver a declaração de consentimento';
$string['consentformname'] = 'Nome';
$string['consentformname_help'] = 'Atribua um nome para esta instância do módulo';
$string['cssclassesstring'] = 'Classes CSS para div do painel de texto de confirmação';
$string['cssclassesstring_help'] = 'Este texto será usado como propriedade de classe da tag div-html que contém o texto de confirmação. Por exemplo, pode usar classes bootstrap aqui.';
$string['deletetestaction'] = 'Apagar sua ação de teste';
$string['deletetesterrormessage'] = 'A sua ação de teste não pôde ser apagada devido a problemas técnicos.';
$string['deletetestmessage'] = 'A sua ação de teste foi apagada.';
$string['dependencies'] = 'Administração';
$string['dependencies_description'] = 'Marque na lista todas as atividades ou recursos que ficarão inacessíveis para os alunos enquanto este termo de consentimento não for confirmado.';
$string['dependent'] = 'Atividades e recursos';
$string['description'] = 'Descrição';
$string['downloadbuttonlabel'] = 'Exportar';
$string['eventagreementagree'] = 'Utilizador ACEITOU';
$string['eventagreementagreedesc'] = 'O utilizador com ID \'{$a->userid}\' ACEITOU os termos da declaração de consentimento do módulo \'{$a->contextinstanceid}\'.';
$string['eventagreementrefuse'] = 'Utilizador RECUSOU';
$string['eventagreementrefusedesc'] = 'O utilizador com ID \'{$a->userid}\' RECUSOU os termos da declaração de consentimento do módulo \'{$a->contextinstanceid}\'.';
$string['eventagreementrevoke'] = 'Utilizador REVOGOU';
$string['instancelistviewed'] = 'Lista da instância visualizada';
$string['instancelistvieweddesc'] = 'O utilizador com ID {$a->userid} visualizou a lista da instância do módulo {$a->contextinstanceid}.';
$string['linktexttomodulesettings'] = 'Hiperligação para as configurações do módulo';
$string['listempty'] = 'Nenhuma entrada encontrada.';
$string['listusers'] = 'Consentimentos';
$string['listusersbutton'] = 'Ver todos os consentimentos';
$string['modulelistlinktext'] = 'Definir dependências';
$string['modulename'] = 'Consentimento';
$string['modulename_help'] = 'Use o módulo Declaração de consentimento para não permitir acesso a certas atividades antes que o participante tenha concordado com os termos.';
$string['modulenameplural'] = 'Consentimento';
$string['modules'] = 'Atividades e recursos';
$string['moduleviewed'] = 'Página principal do módulo visualizada';
$string['modulevieweddesc'] = 'O utilizador com ID {$a->userid} visualizou a página principal do módulo {$a->contextinstanceid}.';
$string['msgagreed'] = 'ACEITOU os termos desta declaração de consentimento.';
$string['msgagreedfailure'] = 'A sua escolha não pôde ser guardada. Tente novamente.';
$string['msgrefused'] = 'Recusou esta declaração de consentimento.';
$string['msgrevoked'] = 'REVOGOU a aceitação dos termos desta declaração de consentimento.';
$string['noaction'] = 'Nenhuma ação';
$string['nocompletion'] = 'A declaração de consentimento precisa que a opção "Verificação da conclusão" esteja ativada e de momento não está. Contacte o administrador do seu Moodle.';
$string['nocompletioncourse'] = 'Esta DISCIPLINA precisa que a opção "Verificação da conclusão" esteja ativada nas configurações da disciplina e de momento não está.';
$string['nocompletioncourselinktext'] = 'Atalho para as configurações da disciplina';
$string['nocompletionlinktext'] = 'Atalho para mais informações';
$string['nocompletionmodule'] = 'Este MÓDULO precisa que a opção "Verificação da conclusão" esteja ativada nas configurações do módulo e de momento não está.';
$string['nocompletionmodulelinktext'] = 'Atalho para as configurações do módulo';
$string['nocompletiontitle'] = 'Conclusão não está ativa';
$string['nocoursemoduleslist'] = 'Nenhuma lista de módulos da disciplina';
$string['nocoursemoduleslist_help'] = 'Esta instância da declaração de consentimento não mostra qualquer lista de módulos da disciplina para configurar dependências de outros módulos da disciplina para esta declaração de consentimento. Tem de configurar essas dependências manualmente ou alterar esta configuração nas configurações do módulo..';
$string['nocoursemoduleslistdesc'] = 'Nenhuma lista de módulos da disciplina está a ser usada. Pode configurar as dependências manualmente';
$string['optionrefuse'] = 'Permitir recusa';
$string['optionrefuse_help'] = 'Permitir que os participantes recusem esta declaração de consentimento.';
$string['optionrefusedesc'] = 'Predefinição para a opção de recusa';
$string['optionrevoke'] = 'Permitir revogação';
$string['optionrevoke_help'] = 'Permitir que os participantes revoguem o seu consentimento.';
$string['optionrevokedesc'] = 'Predefinição para a opção de revogação';
$string['pluginadministration'] = 'Administração da declaração de consentimento';
$string['pluginname'] = 'Declaração de consentimento';
$string['privacy:metadata:consentform_state'] = 'Informações sobre o estado de confirmação dos utilizadores que participaram desta instância da declaração de consentimento.';
$string['privacy:metadata:state'] = 'Valor para o estado de confirmação deste utilizador: 1 para aceite, 0 para revogado, -1 para recusado.';
$string['privacy:metadata:userid'] = 'O ID do utilizador que participou desta instância de declaração de consentimento.';
$string['refuse'] = 'Recusar';
$string['refused'] = 'recusado';
$string['refuselogentry'] = 'Recusou os termos em {$a}.';
$string['resetconsentform'] = 'Limpar todos os dados de ação';
$string['resetok'] = 'Todos os dados removidos';
$string['revocation'] = 'Revogar';
$string['revoke'] = 'Revogar';
$string['revoked'] = 'revogado';
$string['revokelogentry'] = 'Revogou os termos da aceitação em {$a}.';
$string['state'] = 'Estado';
$string['textagreementbutton'] = 'Rótulo do botão de aceitação';
$string['textagreementbuttondesc'] = 'Valor predefinido para o texto do botão de aceitação.';
$string['textfields'] = 'Campos de texto';
$string['textrefusalbutton'] = 'Rótulo do botão de recusa';
$string['textrefusalbuttondesc'] = 'Valor predefinido para o texto do botão de recusa.';
$string['textrevocationbutton'] = 'Rótulo do botão de revogação';
$string['textrevocationbuttondesc'] = 'Valor predefinido para o texto do botão de revogação.';
$string['timestamp'] = 'Data';
$string['titleagreed'] = 'Aceitações';
$string['titleall'] = 'Todos';
$string['titlenone'] = 'Nenhuma ação';
$string['titlerefused'] = 'Recusas';
$string['titlerevoked'] = 'Revogações';
$string['usegrade'] = 'Usar nota';
$string['usegrade_help'] = 'Quando um utilizador aceita, o valor 1 é escrito na pauta para este módulo e para este utilizador.';
$string['usegradedesc'] = 'Usar nota na exportação';
$string['warninguserentry'] = 'Alerta: Foi encontrada na disponibilidade deste módulo uma entrada na declaração de consentimento que não foi feita por esta declaração de consentimento ou foi alterada desde então. Certifique-se de que (ainda) funciona!';
$string['wrongoperator'] = 'Este módulo NÃO possui uma conjunção E nas suas restrições. Esta {$a->consentimento} possivelmente não tem efeito neste módulo!';
