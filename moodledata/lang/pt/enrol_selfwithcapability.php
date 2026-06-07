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
 * Strings for component 'enrol_selfwithcapability', language 'pt', version '4.4'.
 *
 * @package     enrol_selfwithcapability
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'A inscrição está desativada ou inativa';
$string['canntenrolcapabilitymissing'] = 'Não pode inscrever-se porque não possui as seguintes permissões: {$a}';
$string['defaultrole'] = 'Atribuição de papel';
$string['defaultrole_desc'] = 'Selecione o papel que deve ser atribuído por predefinição aos utilizadores durante a autoinscrição.';
$string['expirymessageenrolledbody'] = 'Caro(a) {$a->user},

Esta mensagem serve para notificar de que a sua inscrição na disciplina \'{$a->course}\' expira em {$a->timeend}.

Se precisar de ajuda, contacte {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Notificação de expiração de inscrição';
$string['expirymessageenrollerbody'] = 'A inscrição na disciplina \'{$a->course}\' expirará brevemente ({$a->threshold}) para os seguintes utilizadores:

{$a->users}

Para prolongar a inscrição, aceda a {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Notificação de expiração de inscrição';
$string['invalidcapability'] = 'Identificador de permissão inválido: {$a}';
$string['messageprovider:expiry_notification'] = 'Notificações de expiração de inscrição com permissão';
$string['pluginname'] = 'Autoinscrição com permissão';
$string['pluginname_desc'] = 'Um método de inscrição que se comporta como autoinscrição, com configurações adicionais para exigir permissões para a inscrição.';
$string['privacy:metadata'] = 'O módulo Autoinscrição com permissão não armazena quaisquer dados pessoais.';
$string['requiredcapabilities'] = 'Requer permissões';
$string['requiredcapabilities_help'] = 'Apenas os utilizadores com todas as permissões selecionadas poderão inscrever-se com este método.<br>
Estas permissões devem ser mantidas ao nível do sistema ou da categoria da disciplina.';
$string['selfwithcapability:config'] = 'Configurar instâncias de autoinscrição com permissão';
$string['selfwithcapability:manage'] = 'Gerir utilizadores inscritos';
$string['selfwithcapability:unenrol'] = 'Cancelar inscrição de utilizadores da disciplina';
$string['selfwithcapability:unenrolself'] = 'Cancelar a própria inscrição da disciplina';
$string['sendexpirynotificationstask'] = 'Envio de notificações de expiração de inscrição com permissão';
$string['showhint'] = 'Mostrar ajuda';
$string['showhint_desc'] = 'Se ativar esta opção, será mostrada a primeira letra da chave de acesso.';
$string['showunavailableenrolform'] = 'Mostrar formulário de inscrição indisponível';
$string['showunavailableenrolform_desc'] = 'Se ativar esta opção, um formulário da instância de inscrição indisponível será exibido em formato colapsado com uma mensagem a explicar a razão da indisponibilidade.<br>
Se desativada, os formulários das instâncias de inscrição indisponíveis não serão exibidos.';
$string['status'] = 'Permitir inscrições existentes';
$string['status_desc'] = 'Ativar a autoinscrição com permissão nas novas disciplinas.';
$string['syncenrolmentstask'] = 'Sincronizar tarefas de autoinscrição com permissão';
