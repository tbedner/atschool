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
 * Strings for component 'coursechecker_groups', language 'pt', version '4.4'.
 *
 * @package     coursechecker_groups
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['groups_activity'] = 'Atividade "{$a->name}"';
$string['groups_deactivated'] = 'A configuração de submissão em grupo está desativada';
$string['groups_idmissing'] = 'A submissão em grupo está ativa, mas não foi definido nenhum agrupamento';
$string['groups_lessthantwogroups'] = 'Foram definidos menos de 2 grupos para o agrupamento ativo';
$string['groups_missing'] = 'O agrupamento não foi configurado corretamente';
$string['groups_success'] = 'A configuração de submissão em grupo está corretamente definida';
$string['pluginname'] = 'Verificação da submissão em grupo';
$string['pluginname_help'] = 'Este plugin verifica as atividades de Tarefa numa disciplina para garantir que a configuração de submissão em grupo está correta. Verifica se o modo de grupo está devidamente configurado, se um agrupamento válido está atribuído e se o agrupamento contém pelo menos dois grupos.';
$string['privacy:metadata'] = 'A verificação da submissão em grupo não armazena quaisquer dados pessoais. Os resultados da verificação são armazenados no plugin course checker.';
