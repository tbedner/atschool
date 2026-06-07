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
 * Strings for component 'gradeexport_group', language 'pt', version '4.4'.
 *
 * @package     gradeexport_group
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addedtogroup'] = 'Foram adicionados {$a->added} alunos ao grupo <a href="{$a->url}">{$a->groupname}</a>';
$string['approved'] = 'Aprovado';
$string['cleangroup'] = 'Esvaziar o grupo de destino antes de exportar';
$string['cleangroup_help'] = 'Se ativar esta opção, o grupo de destino será esvaziado antes de exportar os alunos do grupo de origem.';
$string['conditions'] = 'Condições';
$string['conditions_help'] = 'Selecione a condição que as notas têm de cumprir para exportar para o grupo de destino';
$string['eventgradeexported'] = 'Grupo criado a partir das pelas notas';
$string['failed'] = 'Reprovado';
$string['failednograde'] = 'Reprovado ou sem nota';
$string['gradeitem'] = 'Item de avaliação';
$string['gradesgroupdescription'] = 'Grupo com alunos que têm nota em \'{$a->itemname}\': {$a->status}';
$string['group:publish'] = 'Exportação para grupo pelas notas';
$string['group:view'] = 'Usar exportação para grupo pelas notas';
$string['groupdescription'] = 'Descrição do grupo de destino';
$string['groupname'] = 'Nome do grupo de destino';
$string['nograde'] = 'Sem nota';
$string['pluginname'] = 'Grupo';
$string['privacy:metadata'] = 'O módulo Exportação para grupo pelas notas não armazena quaisquer dados pessoais.';
$string['source'] = 'Grupo de origem';
$string['source_help'] = 'Selecione o grupo de alunos a ser copiado para o grupo de destino através da condição do filtro.';
$string['status'] = 'Critério das notas para exportar para grupo';
$string['targetgroup'] = 'Grupo de destino';
$string['targetgroup_help'] = 'Selecione o grupo para onde serão copiados os alunos do grupo de origem.';
