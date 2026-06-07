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
 * Strings for component 'availability_criteria_score', language 'pt', version '4.4'.
 *
 * @package     availability_criteria_score
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['choosecriteria'] = 'Critério';
$string['choosescore'] = 'Pontuação';
$string['description'] = 'Exigir que os alunos atinjam uma pontuação num determinado critério.';
$string['error_loading_requirements'] = 'Erro com a restrição de pontuação de critério';
$string['label_max'] = 'Percentagem de nota máxima (exclusive)';
$string['label_min'] = 'Percentagem de nota mínima (inclusive)';
$string['option_max'] = 'tem de ser <';
$string['option_min'] = 'tem de ser ≥';
$string['pluginname'] = 'Restrição por pontuação de critério';
$string['privacy:metadata'] = 'O  módulo Restrição por pontuação de critério não armazena quaisquer dados pessoais.';
$string['requires_criteria_both'] = 'Requer pontuação maior ou igual que <b>{$a->min}</b> e menor que <b>{$a->max}</b> em <b>{$a->criteria}</b> da atividade \'<b>{$a->activity}</b>\'';
$string['requires_criteria_greater'] = 'Requer pontuação maior ou igual que <b>{$a->min}</b> em <b>{$a->criteria}</b> da atividade \'<b>{$a->activity}</b>\'';
$string['requires_criteria_less'] = 'Requer pontuação menor que <b>{$a->max}</b> em <b>{$a->criteria}</b> da atividade \'<b>{$a->activity}</b>\'';
$string['title'] = 'Pontuação de critério';
