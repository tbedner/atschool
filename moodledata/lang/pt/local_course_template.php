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
 * Strings for component 'local_course_template', language 'pt', version '4.4'.
 *
 * @package     local_course_template
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_backups'] = 'Cópias de segurança do modelo de disciplina';
$string['cachedef_templates'] = 'ID da disciplina do modelo de disciplina';
$string['cleanuptask'] = 'Limpeza das cópias de segurança de modelos de disciplina';
$string['defaulttemplate'] = 'Nome curto do modelo de disciplina predefinido';
$string['defaulttemplate_desc'] = 'Nome curto do modelo de disciplina predefinido. As disciplinas que não correspondem a um modelo usarão este, se existir.';
$string['enablecaching'] = 'Ativar a cache';
$string['enablecaching_desc'] = 'Se ativar esta opção, o módulo criará uma cópia de segurança do modelo de disciplina e, em seguida, reutilizará a cópia de segurança para novas disciplinas até que a cache seja limpa ou a cópia de segurança seja apagada.';
$string['event:template_copied:description'] = 'O modelo de disciplina com ID {$ a-> templateid} foi copiado para a disciplina com ID {$ a-> courseid}';
$string['event:template_copied:name'] = 'Modelo de disciplina copiado';
$string['extracttermcode'] = 'Código do termo';
$string['extracttermcode_desc'] = 'Usado para preencher o [TERMCODE]. Derivado do número de identificação (ID) da disciplina.';
$string['pluginname'] = 'Usar modelo na criação de disciplinas';
$string['privacy:metadata'] = 'O módulo Usar modelo na criação de disciplinas não armazena quaisquer dados pessoais.';
$string['templatenameformat'] = 'Formato de nome curto do modelo';
$string['templatenameformat_desc'] = 'Formato do nome curto previsto para disciplinas modelo';
