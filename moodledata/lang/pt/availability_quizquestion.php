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
 * Strings for component 'availability_quizquestion', language 'pt', version '4.4'.
 *
 * @package     availability_quizquestion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ajaxerror'] = 'Ocorreu um erro ao tentar ligar ao servidor para obter perguntas do teste';
$string['description'] = 'Limitar o acesso com base no resultado de uma pergunta num teste.';
$string['error_selectquestion'] = 'Tem de selecionar uma pergunta.';
$string['error_selectquiz'] = 'Tem de selecionar um teste.';
$string['error_selectstate'] = 'Tem de selecionar um estado.';
$string['label_question'] = 'Qual a pergunta no teste selecionado';
$string['label_state'] = 'Estado obrigatório';
$string['pluginname'] = 'Condição de acesso com base numa pergunta de um teste';
$string['privacy:metadata'] = 'O módulo Condição de acesso com base numa pergunta de um teste não armazena quaisquer dados pessoais.';
$string['questionnumberandname'] = 'P{$a->number}) {$a->name}';
$string['requires_quizquestion'] = 'A pergunta <b>{$a->questiontext}</b> no teste <b><a href="{$a->quizurl}">{$a->quizname}</a></b> está <b>{$a->requiredstate}</b>';
$string['requires_quizquestionnot'] = 'A pergunta <b>{$a->questiontext}</b> no teste <b><a href="{$a->quizurl}">{$a->quizname}</a></b> não está <b>{$a->requiredstate}</b>';
$string['title'] = 'Pergunta do teste';
