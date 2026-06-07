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
 * Strings for component 'local_slow_queries', language 'es', version '4.4'.
 *
 * @package     local_slow_queries
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['col_avgtime'] = 'Tiempo medio (s)';
$string['col_count'] = 'Recuento';
$string['col_cron'] = 'CRON';
$string['col_origin'] = 'Traza de pila';
$string['col_parameters'] = 'Parámetros';
$string['col_sqlpreview'] = 'SQL';
$string['comments_title'] = 'Comentarios';
$string['detail_indexes'] = 'Posibles índices ausentes';
$string['detail_indexes_none'] = 'No se han detectado sugerencias de índices para esta consulta.';
$string['detail_indexes_notice'] = 'Las sugerencias son heurísticas. Pruebe con cuidado en un entorno de preproducción y valide con EXPLAIN/ANALYZE.';
$string['detail_sql'] = 'SQL y parámetros';
$string['detail_sql_expanded'] = 'SQL con parámetros';
$string['detail_sql_expanded_desc'] = 'Expansión al mejor esfuerzo para el análisis (solo visualización)';
$string['detail_title'] = 'Detalles de la consulta';
$string['duration_days'] = '{$a} día(s)';
$string['duration_hours'] = '{$a} hora(s)';
$string['duration_minutes'] = '{$a} minuto(s)';
$string['duration_seconds'] = '{$a} segundo(s)';
$string['filter_apply'] = 'Aplicar';
$string['filter_minexec'] = 'Tiempo mín. de ejecución (s)';
$string['filter_search'] = 'Buscar SQL';
$string['filter_search_ph'] = 'Escriba parte del SQL para buscar...';
$string['filter_title'] = 'Filtros';
$string['index_title'] = 'Consultas lentas';
$string['logslow_warning_body'] = 'Esta página lee de <code>mdl_log_queries</code>, pero su sitio no está configurado para registrar consultas SQL lentas. Active <code>logslow</code> en <code>config.php</code> (configúrelo como <code>true</code> o como un número en segundos). Ejemplo:';
$string['logslow_warning_current'] = 'Valor actual';
$string['logslow_warning_hint'] = 'Después de guardar <code>config.php</code>, reproduzca la página/tarea de cron lenta y luego actualice esta página para ver nuevas entradas.';
$string['logslow_warning_title'] = 'El registro de consultas lentas está desactivado';
$string['nav_index'] = 'Consultas lentas';
$string['pluginname'] = 'Consultas lentas';
$string['privacy:metadata'] = 'El complemento Consultas lentas no almacena ningún dato personal. Solo muestra a los administradores los registros existentes del registro de consultas de la base de datos.';
$string['timeline_calendar'] = 'Cronología del calendario';
$string['timeline_last_7'] = '<strong>{$a}</strong> ejecuciones en los últimos 7 días';
$string['timeline_scale'] = 'La escala corresponde a 1 segundo por {$a} píxeles';
$string['timeline_title'] = 'Cronología de consultas';
$string['timeline_totaltime'] = 'En total, la base de datos dedicó <strong>{$a}</strong> a ejecutar estas sentencias SQL';
