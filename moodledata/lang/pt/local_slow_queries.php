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
 * Strings for component 'local_slow_queries', language 'pt', version '4.4'.
 *
 * @package     local_slow_queries
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkperformance_slowqueries_action'] = 'Ver consultas lentas';
$string['checkperformance_slowqueries_details_found'] = 'Encontradas <strong>{$a->count}</strong> consultas que demoraram mais do que <strong>{$a->seconds}s</strong> - ver <a href=\\"{$a->url}\\">Relatório de consultas lentas</a>';
$string['checkperformance_slowqueries_details_morethan'] = 'Existem <strong>{$a->count}</strong> consultas com mais de <strong>{$a-&nbsp;>seconds}s</strong> - ver <a href=\\"{$a->url}\\">Relatório de consultas lentas</a>';
$string['checkperformance_slowqueries_name'] = 'Consultas lentas que afetam o desempenho do Moodle';
$string['checkperformance_slowqueries_none'] = 'Nenhuma consulta demorou mais de 5s.';
$string['checkperformance_slowqueries_notconfigured'] = 'Não configurado';
$string['checkperformance_slowqueries_summary_found'] = 'Encontradas <strong>{$a->count}</strong> consultas que demoraram mais de {$a->seconds}s';
$string['col_avgtime'] = 'Tempo médio (s)';
$string['col_count'] = 'Contagem';
$string['col_cron'] = 'CRON';
$string['col_origin'] = 'Rastreio';
$string['col_parameters'] = 'Parâmetros';
$string['col_sqlpreview'] = 'SQL';
$string['comments_title'] = 'Comentários';
$string['detail_indexes'] = 'Possíveis índices em falta';
$string['detail_indexes_none'] = 'Não foram detetadas sugestões de índices para esta consulta.';
$string['detail_indexes_notice'] = 'As sugestões são heurísticas. Teste cuidadosamente num ambiente de staging e valide com EXPLAIN/ANALYZE.';
$string['detail_sql'] = 'SQL e parâmetros';
$string['detail_sql_expanded'] = 'SQL com parâmetros';
$string['detail_sql_expanded_desc'] = 'Expansão em melhor esforço para análise (apenas apresentação)';
$string['detail_title'] = 'Detalhes da consulta';
$string['duration_days'] = '{$a} dia(s)';
$string['duration_hours'] = '{$a} hora(s)';
$string['duration_minutes'] = '{$a} minuto(s)';
$string['duration_seconds'] = '{$a} segundo(s)';
$string['filter_apply'] = 'Aplicar';
$string['filter_minexec'] = 'Tempo mínimo de execução (s)';
$string['filter_search'] = 'Pesquisar SQL';
$string['filter_search_ph'] = 'Escreva parte do SQL para pesquisar...';
$string['filter_title'] = 'Filtros';
$string['index_title'] = 'Consultas lentas';
$string['logslow_warning_body'] = 'Esta página lê de <code>mdl_log_queries</code>, mas o seu site não está configurado para registar consultas SQL lentas. Ative <code>logslow</code> em <code>config.php</code> (defina como <code>true</code> ou um número em segundos). Exemplo:';
$string['logslow_warning_current'] = 'Valor atual';
$string['logslow_warning_hint'] = 'Depois de guardar o <code>config.php</code>, reproduza a página/tarefa cron lenta e, em seguida, atualize esta página para ver novas entradas.';
$string['logslow_warning_title'] = 'O registo de consultas lentas está desativado';
$string['nav_index'] = 'Consultas lentas';
$string['pluginname'] = 'Consultas lentas';
$string['privacy:metadata'] = 'O plugin Consultas lentas não armazena quaisquer dados pessoais. Apenas apresenta aos administradores registos existentes do log de consultas da base de dados.';
$string['timeline_calendar'] = 'Linha temporal do calendário';
$string['timeline_last_7'] = '<strong>{$a}</strong> execuções nos últimos 7 dias';
$string['timeline_scale'] = 'A escala corresponde a 1 segundo por {$a} píxeis';
$string['timeline_title'] = 'Linha temporal das consultas';
$string['timeline_totaltime'] = 'No total, a base de dados passou <strong>{$a}</strong> a executar estas instruções SQL';
