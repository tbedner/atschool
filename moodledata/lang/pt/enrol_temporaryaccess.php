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
 * Strings for component 'enrol_temporaryaccess', language 'pt', version '4.4'.
 *
 * @package     enrol_temporaryaccess
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cantenrol'] = 'A inscrição está desativada, inativa ou indisponível';
$string['cantenrolcapabilitymissing'] = 'Não pode aceder à disciplina por não ter as seguintes permissões: {$a}';
$string['defaultcaps'] = 'Permissões obrigatórias';
$string['defaultcaps_desc'] = 'Lista de nomes de permissões separadas por vírgulas, por exemplo: "moodle/category:viewhiddencategories".';
$string['defaultrole'] = 'Papel atribuído';
$string['defaultrole_desc'] = 'Selecione o papel a ser atribuído aos utilizadores por predefinição ao usar este método de inscrição.';
$string['enrolicon'] = 'Ícone de inscrição na disciplina';
$string['enrolicon_desc'] = 'Ícone a ser exibido na página do site em disciplinas com este método de inscrição.<br>
Especifique um nome de ícone FontAwesome válido. Pode deixar este campo em branco para usar uma imagem:
nomeie-a <samp>enrolicon</samp> e coloque-a na pasta <samp>enrol/temporaryaccess/pix/</samp>.<br>
Observação: pode ser necessário limpar as caches do seu site para que esta alteração entre em vigor.';
$string['enrolme'] = 'Acesso';
$string['gotoenrolmentpage'] = 'Voltar para a página de inscrição';
$string['invalidcapability'] = 'Identificador de permissão inválido: {$a}';
$string['password'] = 'Senha de acesso';
$string['password_help'] = 'Se for indicado um valor, os utilizadores deverão inserir a senha para aceder â disciplina por este método.<br>
Se nenhum valor for indicado, nenhuma senha será necessária.';
$string['passwordinvalid'] = 'Senha de acesso inválida';
$string['pluginname'] = 'Acesso temporário';
$string['privacy:metadata'] = 'O módulo de inscrição Acesso temporário não armazena quaisquer dados pessoais.';
$string['requiredcapabilities'] = 'Permissões obrigatórias';
$string['requiredcapabilities_help'] = 'Apenas os utilizadores com todas as permissões selecionados poderão aceder à disciplina através deste método.<br>
Como as permissões têm de ser mantidas antes de aceder à disciplina, elas geralmente devem ser guardadas ao nível do sistema ou da categoria da disciplina.';
$string['requirepassword'] = 'Requer senha de acesso';
$string['requirepassword_desc'] = 'Se ativar esta opção, em todas as novas instâncias deste método de inscrição será obrigatório para definir uma senha de acesso.';
$string['role'] = 'Atribuição de papel';
$string['role_help'] = 'Qual o papel que deve ser atribuído aos utilizadores que acedam à disciplina através deste método de inscrição?';
$string['showunavailableenrolform'] = 'Mostrar formulário de instância de inscrição indisponível';
$string['showunavailableenrolform_desc'] = 'Se ativar esta opção, será exibido um formulário de instância de inscrição indisponível colapsado com uma mensagem a explicar a indisponibilidade.<br>';
$string['status'] = 'Ativado';
$string['status_help'] = 'Se não estiver ativado, nenhum utilizador poderá aceder à disciplina através deste método de inscrição.';
$string['temporaryaccess:config'] = 'Configurar instâncias de inscrições via Acesso temporário';
$string['temporaryaccess:manage'] = 'Gerir utilizadores inscritos via Acesso temporário';
$string['tempswitchback'] = 'Retomar o meu papel habitual';
$string['tempswitchtorole'] = 'Alternar temporariamente para o papel {$a}';
$string['usepasswordpolicy'] = 'Usar política de senhas';
$string['usepasswordpolicy_desc'] = 'Usar a política de senha padrão para as senhas de acesso.';
