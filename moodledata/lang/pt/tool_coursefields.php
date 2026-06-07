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
 * Strings for component 'tool_coursefields', language 'pt', version '4.4'.
 *
 * @package     tool_coursefields
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['coursefields:setfields'] = 'Define os campos de todas as disciplinas de uma categoria';
$string['fieldisrequired'] = '<strong>Este campo personalizado está definido como obrigatório</strong>. Com esta ferramenta, pode desrespeitar esta regra e substituir este campo com valores vazios. Apenas proceda deste modo se estiver certo do que está a fazer.';
$string['fieldisunique'] = '<strong>Este campo personalizado está definido como único</strong>. Com esta ferramenta, pode desrespeitar esta regra e substituir este campo com valores iguais a outros. Apenas proceda deste modo se estiver certo do que está a fazer.';
$string['overwritefield'] = 'Substituir os valores existentes dos campos';
$string['pluginname'] = 'Definir campos de disciplinas';
$string['privacy:metadata'] = 'O módulo Definir campos de disciplinas não armazena quaisquer dados pessoais.';
$string['setfields'] = 'Definir campos de disciplinas';
$string['setfieldsinstruction'] = 'Define campos da disciplina para todas as disciplinas de uma categoria, incluindo subcategorias. Escolha as opções e clique em "Confirmar". O Moodle criará uma "tarefa adhoc" para definir todos os campos da disciplina em segundo plano. Isto requer que o cron esteja ativado.';
$string['updatequeued'] = 'Uma tarefa adhoc foi colocada em fila para atualizar todas as disciplinas da categoria \'<strong>{$a}</strong>\'. Será executada na próxima vez que o cron for executado.';
