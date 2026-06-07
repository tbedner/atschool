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
 * Strings for component 'local_bulkenrol', language 'pt', version '4.4'.
 *
 * @package     local_bulkenrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bulkenrol:enrolusers'] = 'Usar inscrição de lotes de utilizadores';
$string['bulkenrol_form_intro'] = 'Com este módulo pode inscrever utilizadores em massa na disciplina. O utilizador a ser inscrito é identificado pelo seu endereço de e-mail armazenado na sua conta Moodle.';
$string['enrol_users'] = 'Inscrever utilizadores';
$string['enrol_users_successful'] = 'A inscrição do lote de utilizadores foi bem-sucedida';
$string['enrolinfo_headline'] = 'Detalhes da inscrição';
$string['enrolplugin'] = 'Módulo de inscrição';
$string['enrolplugin_desc'] = 'O método de inscrição a ser usado para inscrever lotes de utilizadores. Se o método de inscrição configurado não estiver ativo / adicionado na disciplina quando os utilizadores estiverem a ser inscritos na disciplina, ele será automaticamente adicionado / ativado.';
$string['error_check_is_already_member'] = 'Ocorreu um erro ao verificar se o utilizador (<em>{$a->email}</em>) já é membro do grupo (<em>{$a->groupname}</ em>). {$a->erro}';
$string['error_empty_line'] = 'A linha {$a->line} está vazia e será ignorada.';
$string['error_enrol_user'] = 'Ocorreu um erro ao inscrever na disciplina o utilizador com endereço de e-mail <em>{$a->email}</em>.';
$string['error_enrol_users'] = 'Ocorreu um erro ao inscrever os utilizadores na disciplina.';
$string['error_exception_info'] = 'Informação do erro';
$string['error_getting_user_for_email'] = 'Ocorreu um erro ao obter, das base de dados, o registo do utilizador com o endereço de email <em>{$a}</em>.';
$string['error_group_add_member'] = 'Ocorreu um erro ao adicionar o utilizador com o endereço de e-mail <em>{$a->email}</em> ao grupo da disciplina \'<em>{$a->group}</em>\'.';
$string['error_group_add_members'] = 'Ocorreu um erro ao adicionar os utilizadores aos grupo da disciplina.';
$string['error_invalid_email'] = 'Foi encontrado um endereço de email inválido na linha {$a->row}  (<em>{$a->email}</em>). Esta linha será ignorada.';
$string['error_more_than_one_record_for_email'] = 'Existe mais do que uma conta de utilizador Moodle com o endereço de e-mail <em>{$a}</em>.<br />Esta linha será ignorada e nenhum dos utilizadores existentes no Moodle será inscrito.';
$string['error_no_email'] = 'Não foi encontrado um endereço de e-mail na linha {$a->line} (<em>{$a->content}</em>). Esta linha será ignorada';
$string['error_no_record_found_for_email'] = 'Não foi encontrada um conta de utilizador Moodle com endereço de e-mail <em>{$a}</em>. <br />Esta linha será ignorada e não será criada uma conta de utilizador Moodle.';
$string['error_no_valid_email_in_list'] = 'Na lista fornecida não foi encontrado qualquer endereço de e-mail válido. <br />Por favor, <a href=\'{$a->url}\'>volte atrás e verifique os dados fornecidos</a>.';
$string['error_usermails_empty'] = 'A lista de endereços de e-mail está vazia. Adicione pelo menos um endereço de e-mail.';
$string['group_name_headline'] = 'Nome do grupo';
$string['group_status_create'] = 'O grupo será criado';
$string['group_status_exists'] = 'O grupo já existe';
$string['group_status_headline'] = 'Estado do grupo';
$string['groupinfos_headline'] = 'Grupos incluídos na lista';
$string['hints'] = 'Dicas';
$string['parameter_empty'] = 'Parâmetro vazio';
$string['pluginname'] = 'Inscrição de lotes de utilizadores';
$string['privacy:metadata'] = 'O módulo de Inscrição de lotes de utilizadores funciona como uma ferramenta para inscrever utilizadores em disciplinas, mas não armazena dados pessoais.';
$string['role'] = 'Papel';
$string['role_assigned'] = 'Papel atribuído';
$string['role_description'] = 'O papel a ser usado para inscrever utilizadores em massa.';
$string['row'] = 'Linha';
$string['type_enrol'] = 'Método de inscrição';
$string['user_enroled'] = 'Inscrição de utilizador';
$string['user_enroled_already'] = 'O utilizador já está inscrito';
$string['user_enroled_yes'] = 'O utilizador será inscrito';
$string['user_groups'] = 'Membros do grupo';
$string['user_groups_already'] = 'O utilizador já é membro do grupo';
$string['user_groups_yes'] = 'Utilizador será adicionado a um grupo';
$string['usermails'] = 'Lista de endereços de e-mail';
$string['usermails_help'] = 'Para inscrever, nesta disciplina, um utilizador Moodle existente, adicione o seu endereço de e-mail a este formulário, um utilizador/endereço de e-mail por linha.<br /><br />Exemplo:<br />alice@example.com<br />bob@example.com<br /><br />Opcionalmente, pode criar grupos e adicionar os utilizadores registados aos grupos. Apenas precisa de adicionar uma linha de cabeçalho com um sinal de cardinal e o nome do grupo, separando a lista dos utilizadores.<br /><br />Exemplo:<br /># Grup0 1<br />alice@example.com<br />bob@example.com<br /># Grupo 2<br />carol@example.com<br />dave@example.com';
$string['users_to_enrol_in_course'] = 'Utilizadores a serem inscritos numa disciplina';
