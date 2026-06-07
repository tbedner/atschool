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
 * Strings for component 'factor_iprange', language 'pt', version '4.4'.
 *
 * @package     factor_iprange
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedipsempty'] = 'Ninguém irá passar este fator! Pode adicionar o seu próprio endereço IP (<i>{$a->ip}</i>)';
$string['allowedipshasmyip'] = 'O seu IP (<i>{$a->ip}</i>) está na lista e passará neste fator.';
$string['allowedipshasntmyip'] = 'O seu IP (<i>{$a->ip}</i>) não está na lista e não passará neste fator.';
$string['pluginname'] = 'Intervalo de IP';
$string['privacy:metadata'] = 'O módulo Fator Intervalo de IP não armazena quaisquer dados pessoais.';
$string['settings:safeips'] = 'Intervalos de IP seguros';
$string['settings:safeips_help'] = 'Insira uma lista de endereços IP ou sub-redes que serão aprovados para passar este fator. Se deixar em branco, ninguém passará neste fator. {$a->info} {$a->syntax}';
$string['summarycondition'] = 'está numa rede segura';
