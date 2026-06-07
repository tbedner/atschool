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
 * Strings for component 'local_eledia_webservicesuite', language 'pt', version '4.4'.
 *
 * @package     local_eledia_webservicesuite
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['back'] = 'voltar';
$string['eledia_desc'] = 'Formulário para testar as funções básicas do serviço.<br />
Esteja ciente de que os serviços que "chama" aqui são todos executados no Sistema.<br />
<br />
Para usar este formulário, é necessário ativar e configurar o serviço SOAP. <br />
Pode encontrar as configurações gerais do web service aqui: <a href={$a}>{$a}</a><br />
O token gerado para o utilizador do webservice deve ser fornecido na configuração deste módulo.<br />
<br />';
$string['eledia_desc_header'] = 'eLeDia Webservice suite';
$string['eledia_header'] = 'eLeDia Webservice suite';
$string['eledia_webservicesuite:access'] = 'Acesso direto para todas as funções deste web service';
$string['idnumbercourse'] = 'Número ID da disciplina';
$string['idnumberuser'] = 'Número ID do utilizador';
$string['missing_token'] = 'O token do Webservice está em falta na configuração do módulo.';
$string['pluginname'] = 'Webservice suite eLeDia';
$string['service_choose'] = 'escolha a função';
$string['start'] = 'iniciar função';
$string['test_form_desc'] = 'Formulário para testes existem <a href={$a}>aqui</a>.';
$string['test_header'] = 'Verificador de função ELeDia Webservice suite';
$string['test_token'] = 'token para teste de script';
$string['wscannotenrol'] = 'A instância do módulo não pode inscrever manualmente um utilizador na disciplina com ID = {$a->courseid}';
$string['wscoursenotfound'] = 'Não foi encontrada a disciplina com número ID = {$a->idnumber}.';
$string['wsidnumbersnotfound'] = 'Não foi encontrado o número ID {$a->idnumber}.';
$string['wsmultiplecoursesfound'] = 'Foram encontradas várias disciplinas com número ID = {$ a-> idnumber}. Número ID deve ser exclusivo';
$string['wsmultipleidnumbersfound'] = 'Número ID {$a->idnumber} não é exclusivo';
$string['wsmultipleusersfound'] = 'Foram encontrados vários utilizadores com número ID = {$ a-> idnumber}. Número ID deve ser exclusivo';
$string['wsnoinstance'] = 'A instância do módulo de inscrição manual não existe ou está desativada para a disciplina (id = {$a->courseid})';
$string['wsusercannotassign'] = 'Não tem permissão para atribuir este papel ({$a->roleid}) para o utilizador ({$a->userid}) nesta disciplina ({$a->courseid}).';
$string['wsusernotfound'] = 'Não foi encontrado o utilizador com número ID {$a->idnumber}.';
