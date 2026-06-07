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
 * Strings for component 'auth_relogin', language 'pt', version '4.4'.
 *
 * @package     auth_relogin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anypage'] = 'Autenticar utilizador desde qualquer página.';
$string['anypage_help'] = 'Se não estiver ativado, o utilizador será autenticado automaticamente apenas nas páginas que exijam autenticação, caso contrário, o utilizador será autenticado em qualquer página, incluindo a página de autenticação.';
$string['cookies'] = 'Cookies permanentes?';
$string['cookies_help'] = 'Se ativado, este módulo guardará cookies no dispositivo do utilizador para ajudá-lo a autenticar-se novamente no site se a sessão do utilizador ainda não tiver expirado, caso contrário, se não estiver ativado, o módulo tentará autenticar novamente os utilizadores pelo endereço IP que não é garantido.<br>
Aviso: Cookies permanentes podem ser considerados um problema de privacidade se usados sem consentimento.<br>
NOTA: se este método (cookies permanentes) e (usar endereço IP) não estiverem ativados, este módulo não está funcionando funcionalmente.';
$string['loginpage'] = 'Aplicar na página de autenticação?';
$string['loginpage_help'] = 'Se ativar esta opção, o módulo tentará fazer a autenticação automática do utilizador se a sessão ainda não tiver expirado, caso contrário, o módulo funcionará para qualquer outra página que exija autenticação.';
$string['pluginname'] = 'ReEntrar';
