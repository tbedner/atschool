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
 * Strings for component 'assignsubmission_automaticextension', language 'pt', version '4.4'.
 *
 * @package     assignsubmission_automaticextension
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = 'Aceitar prorrogação automática';
$string['automaticextension:requestextension'] = 'Pedir uma prorrogação automática';
$string['cancel'] = 'Cancelar';
$string['enabled'] = 'Prorrogação automática';
$string['enabled_help'] = 'Se ativar esta opção, os alunos podem solicitar uma prorrogação automática.';
$string['event_automatic_extension_applied'] = 'Prorrogação automática aplicada.';
$string['event_automatic_extension_applied_desc'] = 'O utilizador com ID \'{$a->userid}\' aplicou uma prorrogação automática no módulo da disciplina com ID \'{$a->contextinstanceid}\'. A data da prorrogação é {$a->extensionduedate}.';
$string['extensionrequest'] = 'Duração da prorrogação';
$string['pluginname'] = 'Prorrogação automática';
$string['requesterror'] = 'Ocorreu um erro ao aplicar a sua prorrogação automática. Contacte o seu instrutor.';
$string['requestextension'] = 'Pedir prorrogação';
$string['requestsuccess'] = 'A sua prorrogação automática foi aplicada. A sua nova data limite para submeter é {$a}.';
$string['settings:conditions'] = 'Condições detalhadas';
$string['settings:conditions_help'] = 'Os detalhes das condições da prorrogação a serem mostrados aos alunos quando solicitarem uma prorrogação do prazo';
$string['settings:default'] = 'Ativada por predefinição';
$string['settings:default_help'] = 'Se ativar esta opção, a prorrogação automática do prazo estará ativada por predefinição para todos os novos trabalhos e os já existentes (criadas antes da instalação deste módulo), permitindo aos alunos a possibilidade de pedir uma prorrogação automática.';
$string['settings:extensionlength'] = 'Duração da prorrogação';
$string['settings:extensionlength_help'] = 'O período tempo de prorrogação que será atribuído ao utilizador quando for feito um pedido de prolongamento do prazo. Os pedidos subsequentes (se permitidos) aumentarão este valor ao pedido de prorrogação.';
$string['settings:maximumrequests'] = 'Máximo de pedidos';
$string['settings:maximumrequests_help'] = 'O número máximo de pedidos de prorrogação que cada utilizador pode fazer em cada trabalho.';
$string['unabletorequest'] = 'De momento, não pode pedir uma prorrogação automática. Contacte o seu instrutor para um pedido manual.';
