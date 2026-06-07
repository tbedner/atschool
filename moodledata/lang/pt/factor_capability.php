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
 * Strings for component 'factor_capability', language 'pt', version '4.4'.
 *
 * @package     factor_capability
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['capability:cannotpassfactor'] = 'Tem de utilizar outro fator na MFA para autenticar';
$string['pluginname'] = 'Permissão do utilizador';
$string['privacy:metadata'] = 'O módulo Fator Permissão do utilizador não armazena quaisquer dados pessoais.';
$string['settings:adminpasses'] = 'Administradores podem passar este fator';
$string['settings:adminpasses_help'] = 'Por predefinição, os administradores passam em todas as verificações de permissão, incluindo esta que usa \'factor/capability:cannotpassfactor\', o que significa que falharão neste fator.
Se ativar esta opção, todos os administradores do site passarão neste fator se não tiverem esta permissão de outro papel. Se desativado, os administradores do site falharão neste fator.';
$string['summarycondition'] = 'NÃO tem a permissão \'factor/capability:cannotpassfactor\' em qualquer papel, incluindo o de administrador do site.';
