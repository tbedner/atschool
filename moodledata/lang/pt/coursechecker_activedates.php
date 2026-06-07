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
 * Strings for component 'coursechecker_activedates', language 'pt', version '4.4'.
 *
 * @package     coursechecker_activedates
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activedates_noactivedates'] = 'Não devem existir datas ativas na secção "conclusão da atividade".';
$string['activedates_noactivedatesinactivity'] = 'Não devem existir datas ativas na atividade {$a->modtype}. Procure os seguintes campos: {$a->adateissetin}';
$string['activedates_setting_modules'] = 'Módulos ativados';
$string['activedates_setting_modules_help'] = 'Defina os módulos permitidos (têm de estar ativados em <a href="{$a}" target="_blank">Gerir atividades</a>) que devem ser verificados quanto a datas ativas.';
$string['activedates_success'] = 'A atividade {$a} está configurada corretamente';
$string['pluginname'] = 'Verificação de datas ativas';
$string['pluginname_help'] = 'Este plugin verifica se uma disciplina tem definidas tanto a data de início como a data de fim. Foi concebido para fazer parte de um fluxo de trabalho de garantia de qualidade, garantindo que todas as disciplinas têm limites temporais claramente definidos.';
$string['privacy:metadata'] = 'A verificação de datas ativas não armazena quaisquer dados pessoais. Os resultados da verificação são armazenados no plugin course checker.';
