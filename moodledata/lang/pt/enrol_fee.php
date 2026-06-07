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
 * Strings for component 'enrol_fee', language 'pt', version '4.4'.
 *
 * @package     enrol_fee
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Atribuir papel';
$string['cost'] = 'Taxa de inscrição';
$string['costerror'] = 'A taxa de inscrição deve ser um número.';
$string['currency'] = 'Moeda';
$string['defaultrole'] = 'Papel predefinido a atribuir';
$string['defaultrole_desc'] = 'Selecione o papel a ser atribuído aos utilizadores após fazerem um pagamento.';
$string['enrolenddate'] = 'Data de fim';
$string['enrolenddate_help'] = 'Se ativar esta opção, os utilizadores apenas podem ser inscritos até esta data.';
$string['enrolenddaterror'] = 'A data de fim da inscrição não pode ser anterior à data de início.';
$string['enrolperiod'] = 'Duração da inscrição';
$string['enrolperiod_desc'] = 'Prazo predefinido da validade da inscrição é válida. Se definido como zero, a duração da inscrição será ilimitada por predefinição.';
$string['enrolperiod_help'] = 'Prazo predefinido da validade da inscrição é válida, a partir do momento em que o utilizador é inscrito. Se definido como zero, a duração da inscrição será ilimitada.';
$string['enrolstartdate'] = 'Data de início';
$string['enrolstartdate_help'] = 'Se ativar esta opção, os utilizadores apenas podem ser inscritos a partir desta data.';
$string['expiredaction'] = 'Ação ao expirar inscrição';
$string['expiredaction_help'] = 'Selecione a ação a ser executada quando expira a inscrição de um utilizador. Tenha em atenção que alguns dados e configurações do utilizador são apagados quando é cancelada a inscrição do utilizador.';
$string['fee:config'] = 'Configurar a inscrição em instâncias de inscrição após pagamento';
$string['fee:manage'] = 'Gerir utilizadores inscritos';
$string['fee:unenrol'] = 'Cancelar a inscrição dos utilizadores na disciplina';
$string['fee:unenrolself'] = 'Cancelar a inscrição na disciplina';
$string['nocost'] = 'Não é necessário qualquer pagamento para se inscrever nesta disciplina!';
$string['paymentaccount'] = 'Valor a pagar';
$string['paymentaccount_help'] = 'As taxas de inscrição serão pagas com esta conta.';
$string['pluginname'] = 'Inscrição após pagamento';
$string['pluginname_desc'] = 'A inscrição com o método "Inscrição após pagamento" permite que configure disciplinas que exigem um pagamento. Se a taxa de qualquer disciplina for zero, os alunos não serão obrigados a pagar para entrar. Existe uma taxa para todo o site que pode definir aqui como predefinição e, em seguida, uma configuração da disciplina que pode ser definida para cada disciplina individualmente. A taxa da disciplina substitui a taxa do site.';
$string['privacy:metadata'] = 'A inscrição com o módulo Inscrição após pagamento de inscrição não armazena quaisquer dados pessoais.';
$string['purchasedescription'] = 'Inscrição na disciplina {$a}';
$string['sendpaymentbutton'] = 'Selecionar tipo de pagamento';
$string['status'] = 'Permitir inscrição em inscrições após pagamento';
$string['status_desc'] = 'Permitir que os utilizadores façam um pagamento para se inscreverem num disciplina, por predefinição.';
