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
 * Strings for component 'logstore_lanalytics', language 'pt', version '4.4'.
 *
 * @package     logstore_lanalytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = 'Tamanho do buffer';
$string['configloglifetime_descr'] = 'Especifica por quanto tempo pretende manter os registos sobre a atividade da disciplina. Os registos mais antigos que o aqui indicado são apagados automaticamente. É preferível manter os registos durante o máximo de tempo possível, caso precise deles, mas se tiver um servidor muito ocupado e estiver com problemas de desempenho, convém diminuir a vida útil dos registos. Valores inferiores a 6 meses não são recomendados porque as estatísticas podem não funcionar corretamente.';
$string['loglifetime'] = 'Manter registos por';
$string['pluginname'] = 'Registo da análise da aprendizagem';
$string['privacy:metadata'] = 'Este módulo não armazena quaisquer dados pessoais. Todos os dados são registados e armazenados anonimamente.';
$string['setting_course_ids'] = 'ID das disciplinas';
$string['setting_course_ids_descr'] = 'Para ser usado com a opção "APENAS" ou "EXCLUINDO" do <code>Tipo de registo</code> para monitorizar apenas disciplinas específicas. Exemplo: <code>10,153,102</code>.';
$string['setting_log_scope'] = 'Tipo de registo';
$string['setting_log_scope_all'] = 'Registar todos os eventos';
$string['setting_log_scope_descr'] = 'Define o tipo de registo. Por predefinição, tudo é registado.';
$string['setting_log_scope_exclude'] = 'Registar eventos EXCLUINDO as disciplinas com ID especificado abaixo';
$string['setting_log_scope_include'] = 'Registar eventos APENAS das disciplinas com ID especificado abaixo';
$string['setting_nontracking_roles'] = 'Papéis a não monitorizar';
$string['setting_nontracking_roles_descr'] = 'Define que papéis <strong>não</strong> devem ser monitorizados (lista negra). É útil se não pretende monitorizar papéis específicos (por exemplo, gestores ou professores). Especifique o papel usando o "nome curto" (pode encontrar em <em>Administração do Site</em> / <em>Utilizadores</em> / <em>Permissões</em> / <em>Definir papéis</em>). Por predefinição, todos os papéis são monitorizados. Exemplo: <code>teacher,editingteacher,manager</code>. Esta configuração tem prioridade sobre <code>Papéis a monitorizar</code>.';
$string['setting_tracking_roles'] = 'Papéis a monitorizar';
$string['setting_tracking_roles_descr'] = 'Define que papéis devem ser monitorizados (lista branca). É útil se pretende monitorizar papéis específicos (por exemplo, alunos ou visitantes). Especifique o papel usando o "nome curto" (pode encontrar em <em>Administração do Site</em> / <em>Utilizadores</em> / <em>Permissões</em> / <em>Definir papéis</em>). Por predefinição, todos os papéis são monitorizados. Exemplo: <code>student,guest</code>';
$string['taskcleanup'] = 'Limpeza da tabela de registos';
