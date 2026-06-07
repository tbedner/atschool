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
 * Strings for component 'tool_resetpasswords', language 'pt', version '4.4'.
 *
 * @package     tool_resetpasswords
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Ação';
$string['csvdelimiter'] = 'Separador CSV';
$string['emailbodyhtml'] = '<div> Olá {$a->userfullname}, <br/>
A senha da sua conta em \'<b> {$a->sitename} </b>\' foi reposta por um administrador.
<br/>As suas credenciais de autenticação atuais são:
<br/><br/>
Nome de utilizador: {$a->username} <br/>
Senha: {$a->password} <br/><br/>
URL: {$a->URL}
</div>';
$string['emailsender'] = 'Administrador do Site {$a->siteshortname}';
$string['emailsubject'] = 'Reposição de senha da conta do utilizador';
$string['encoding'] = 'A codificar';
$string['escaped_users'] = 'Utilizadores não abrangidos';
$string['examplecsv'] = 'CSV de exemplo';
$string['examplecsv_help'] = 'Carregar um ficheiro CSV com apenas uma coluna para <b>username</b>, tal como está no ficheiro CSV de exemplo';
$string['password_cron'] = 'A senha é gerada pelo cron';
$string['pluginname'] = 'Repor senha em massa';
$string['privacy:metadata'] = 'O módulo Repor senha em massa não armazena quaisquer dados pessoais.';
$string['reseted_users'] = 'Utilizadores com senhas repostas';
$string['resetpasswords'] = 'Repor senhas';
$string['resetpasswords:bulkresetpassword'] = 'Repor senha em massa através de carregamento de ficheiro CSV';
$string['taskname'] = 'Repor senha em massa';
$string['total'] = 'Total';
$string['uploadusers'] = 'Repor senha em massa';
$string['usernotfound'] = 'Utilizador não encontrado';
