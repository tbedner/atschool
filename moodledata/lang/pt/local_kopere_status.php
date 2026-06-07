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
 * Strings for component 'local_kopere_status', language 'pt', version '4.4'.
 *
 * @package     local_kopere_status
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['day'] = '1 dia';
$string['days'] = '{$a} dias';
$string['down'] = 'Inativo';
$string['intervalminutes'] = 'Intervalo de verificação (minutos)';
$string['intervalminutes_desc'] = 'Tempo mínimo entre ciclos de verificação. A tarefa agendada irá limitar-se com base neste valor.';
$string['lastcheck'] = 'Última verificação';
$string['minute'] = '1 minuto';
$string['minutes'] = '{$a} minutos';
$string['modules'] = 'Módulos';
$string['modules_desc'] = 'Introduza um módulo por linha. Cada linha será replicada para os diferentes estados. Por exemplo, se introduzir "Inscrição" e "Suporte" (uma por linha), os estados serão apresentados apenas para "Inscrição" e para "Suporte".';
$string['nodata'] = 'Ainda sem dados';
$string['overall_down'] = 'Sistema indisponível';
$string['overall_operational'] = 'Todos os sistemas operacionais';
$string['pluginname'] = 'Estado do sistema';
$string['privacy:metadata'] = 'O plugin Kopere Status não armazena quaisquer dados pessoais.';
$string['publiclink'] = 'Página pública de estado';
$string['publictitle'] = 'Título público';
$string['publictitle_desc'] = 'Título apresentado na página pública de estado.';
$string['retentiondays'] = 'Retenção (dias)';
$string['retentiondays_desc'] = 'Eliminar registos agregados por hora mais antigos do que este número de dias. Os registos brutos também são removidos após cada agregação (manter apenas a hora atual para a próxima agregação).';
$string['statuspagedays'] = 'Dias da página de estado';
$string['statuspagedays_desc'] = 'Número de dias a apresentar na página de estado (escolha entre 1 e 7).';
$string['task_hourly_rollup'] = 'Agregação horária e limpeza do StatusBoard';
$string['up'] = 'Ativo';
