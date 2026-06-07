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
 * Strings for component 'local_deleteoldquizattempts', language 'pt', version '4.4'.
 *
 * @package     local_deleteoldquizattempts
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attemptlifetime'] = 'Apagar tentativas com mais de';
$string['attemptlifetime_help'] = 'As tentativas de resposta a um teste mais antigas que o valor especificado serão apagadas com a tarefa agendada. Se o valor "Não apagar tentativas antigas" estiver selecionado, poderá ainda apagar as tentativas com o comando CLI.';
$string['attemptsdeleted'] = 'Apagadas {$a} tentativas de resposta a testes.';
$string['attemptsprogress'] = 'Apagadas {$a->deleted} de {$a->total}';
$string['deleteunusedhiddenquestions'] = 'Apagar perguntas ocultas não utilizadas';
$string['deleteunusedhiddenquestions_help'] = 'Perguntas ocultas são perguntas que não foram excluídas fisicamente, porque estiveram referenciadas em algumas tentativas de resposta a um ou mais testes. Após apagar as tentativa de resposta ao teste, essas perguntas provavelmente já não serão necessárias.';
$string['donotdeleteonschedule'] = 'Não apagar tentativas antigas';
$string['maxexecutiontime'] = 'Tempo máximo de execução';
$string['maxexecutiontime_help'] = 'Ao apagar tentativas antigas pode causar uma carga elevada no servidor. Este parâmetro limita o tempo máximo de execução da tarefa programada.';
$string['maxexecutiontime_reached'] = 'Operação interrompida porque ultrapassou o tempo limite';
$string['notlimited'] = 'Ilimitado';
$string['pluginname'] = 'Apagar testes e tentativas de resposta';
$string['privacy:metadata'] = 'O módulo Apagar testes e tentativas de resposta não armazena quaisquer dados pessoais.';
$string['questionsdeleted'] = 'Apagadas {$a->deleted}, ignoradas {$a->skipped} perguntas ocultas não utilizadas.';
$string['questionsprogress'] = 'Apagadas {$a->deleted}, ignoradas {$a->skipped} de {$a->total}';
$string['taskname'] = 'Apagar testes e tentativas de resposta antigas';
