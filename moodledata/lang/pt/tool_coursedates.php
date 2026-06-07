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
 * Strings for component 'tool_coursedates', language 'pt', version '4.4'.
 *
 * @package     tool_coursedates
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['atleastonedate'] = 'Tem de definir pelo menos uma data para atualizar';
$string['autoenddate'] = 'Calcular a data de fim?';
$string['autoenddate_default'] = 'Não modificar';
$string['autoenddate_help'] = 'O Moodle pode calcular a data de fim com base no número de secções de uma disciplina que usam o formato de tópico semanal. Pode escolher se pretende aplicar isto ao nível da categoria.';
$string['autoenddate_off'] = 'Desativar datas de fim automáticas';
$string['autoenddate_on'] = 'Forçar datas de fim automáticas';
$string['coursedates:setdates'] = 'Definir as datas de início/de fim de todas as disciplinas de uma categoria.';
$string['keependdates'] = 'Manter datas existentes';
$string['pluginname'] = 'Definir datas da disciplina';
$string['privacy:metadata'] = 'O módulo Definir datas da disciplina não armazena quaisquer dados pessoais.';
$string['setdates'] = 'Definir datas da disciplina';
$string['setdatesinstruction'] = 'Definir as datas de início e de fim para todos as disciplinas de uma categoria, incluindo as subcategorias. Escolha as opções e clique em "Confirmar". Na confirmação, o Moodle criará uma "tarefa ad hoc" para definir todas as datas em segundo plano. Isto requer que o cron esteja ativado.';
$string['updatequeued'] = 'Uma tarefa adhoc foi colocada em fila para atualizar todas as disciplinas na categoria <strong>{$a}</strong>. Será executada na próxima vez que o cron for executado.';
