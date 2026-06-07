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
 * Strings for component 'coursechecker_quiz', language 'pt', version '4.4'.
 *
 * @package     coursechecker_quiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Verificação de testes';
$string['pluginname_help'] = 'Este plugin verifica se a “Nota máxima” de cada teste corresponde ao “Total de pontuações” atribuídas às suas perguntas. Ajuda a evitar inconsistências na avaliação e garante que os testes estão corretamente configurados.';
$string['privacy:metadata'] = 'A verificação de testes não armazena quaisquer dados pessoais. Os resultados da verificação são guardados no plugin course checker.';
$string['quiz_activity'] = 'Atividade: {$a->name} ({$a->modname})';
$string['quiz_grade_sum_error'] = 'A nota máxima ({$a->grade}) e o total de pontuações ({$a->sumgrades}) devem ser iguais neste teste';
$string['quiz_grade_sum_success'] = 'Este teste está configurado corretamente';
