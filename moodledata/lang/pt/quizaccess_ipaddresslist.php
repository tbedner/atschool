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
 * Strings for component 'quizaccess_ipaddresslist', language 'pt', version '4.4'.
 *
 * @package     quizaccess_ipaddresslist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addsubnet'] = 'Adicionar local';
$string['allowedsubnets'] = 'Adicionar locais';
$string['allowedsubnets_help'] = 'O acesso ao teste pode ser limitado a determinados locais, dependendo do endereço IP do utilizador. A lista de locais, e correspondente sub-rede IP, é definida pelo administrador do site. Selecione Nenhum para desativar a verificação do local.';
$string['editsubnet'] = 'Editar local';
$string['managesubnets'] = 'Gestão de locais';
$string['pluginname'] = 'Regra de acesso por endereço IP';
$string['privacy:metadata'] = 'Este módulo não armazena quaisquer dados pessoais.';
$string['subnet'] = 'Sub-rede IP';
$string['subnet_help'] = 'Especifique a lista dos endereços IP, completos ou parciais, separados por vírgula.

Exemplos:
* 192.168.10.1
* 192.168.
* 231.54.211.0/20
* 231.3.56.10-20
* 192.168.10.1,192.168.,231.54.211.0/20,231.3.56.10-20';
$string['subnetwrong'] = 'Este teste só pode ser acedido a partir de determinados locais e está a tentar aceder de um local não permitido.';
