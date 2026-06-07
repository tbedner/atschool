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
 * Strings for component 'customfield_textregex', language 'pt', version '4.4'.
 *
 * @package     customfield_textregex
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['displaysize'] = 'Tamanho de entrada do formulário';
$string['errorconfigdisplaysize'] = 'O tamanho de entrada do formulário tem de ser entre 1 e 200 caracteres.';
$string['errorconfigregex'] = 'A expressão regular fornecida não é uma expressão regular válida.';
$string['errorregex'] = 'O valor inserido não corresponde à expressão regular: {$a}';
$string['pluginname'] = 'Texto curto com validação regex';
$string['privacy:metadata'] = 'O módulo de tipo de campo Texto curto com validação não armazena quaisquer dados pessoais. Usa tabelas definidas no core.';
$string['regex'] = 'Expressão regular';
$string['regex_help'] = 'Expressão regular do estilo Perl para testar o valor do campo. A regex deve estar alinhada com a configuração \'obrigatório\'; se não for obrigatório, a regex também deverá permitir o campo em branco. Consulte também a <a href="/admin/search.php?query=strictformsrequired">configuração de rigor</a>. Inclua também os delimitadores. Por exemplo: \\"/^TEST[0-9A-F]{3}\\/\\$_postfix/\\".';
$string['specificsettings'] = 'Configurações do campo de texto curto com validação';
