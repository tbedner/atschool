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
 * Strings for component 'coursechecker_blocks', language 'pt', version '4.4'.
 *
 * @package     coursechecker_blocks
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['blocks_activity'] = 'Bloco "{$a->name}"';
$string['blocks_comparison'] = '(Disciplina de referência: "{$a->valuereference}" | Disciplina atual: "{$a->valuecurrent}")';
$string['blocks_error'] = 'O bloco está presente por engano ou está em falta na disciplina atual.';
$string['blocks_setting'] = 'Blocos ativados';
$string['blocks_setting_help'] = 'Defina os blocos permitidos (têm de estar ativados em <a href="{$a}" target="_blank">Gerir blocos</a>) que devem ser verificados.';
$string['blocks_success'] = 'O bloco está corretamente inserido na disciplina atual';
$string['pluginname'] = 'Verificação de blocos';
$string['pluginname_help'] = 'Este plugin compara os blocos ativados numa disciplina com os de uma disciplina de referência, garantindo um layout de blocos consistente. Verifica blocos em falta ou incorretos e ajuda a manter uma estrutura padronizada em toda a plataforma.';
$string['privacy:metadata'] = 'A verificação de blocos não armazena quaisquer dados pessoais. Os resultados da verificação são armazenados no plugin course checker.';
