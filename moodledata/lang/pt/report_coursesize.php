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
 * Strings for component 'report_coursesize', language 'pt', version '4.4'.
 *
 * @package     report_coursesize
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysdisplaymb'] = 'Sempre em MB';
$string['alwaysdisplaymb_desc'] = 'Se ativar esta opção, a informação da disciplina será sempre mostrada em MB.';
$string['backupsize'] = 'Tamanho da cópia de segurança';
$string['bytes'] = 'bytes';
$string['cachedef_topuserdata'] = 'Cache de dados do utilizador de topo';
$string['calcmethod'] = 'Cálculos';
$string['calcmethodcron'] = 'Pelo cron';
$string['calcmethodhelp'] = 'Se calculado pelo cron, o relatório será executado no horário agendado e os resultados serão armazenados em cache para visualização posterior. Esta opção é recomendada em vez de cálculos em tempo real, uma vez que sobrecarregará o seu website apenas uma vez por dia, durante um período de baixa atividade. Tenha cuidado especial com os cálculos em tempo real, pois consultas complexas à base de dados podem sobrecarregar o servidor e tornar toda a instância mais lenta. Não é recomendado ativar esta funcionalidade em instâncias com mais de 10.000 registos de ficheiros; nesse caso, sugerimos que utilize os cálculos diários do cron.';
$string['calcmethodlive'] = 'Cálculos em tempo real';
$string['coursefilearea'] = 'Área de ficheiros da disciplina';
$string['coursereport'] = 'Relatório de utilização da disciplina';
$string['coursesize'] = 'Tamanho da disciplina';
$string['coursesize:view'] = 'Ver relatório do tamanho da disciplina';
$string['disabledcap'] = 'Desativado';
$string['diskusage'] = 'Total de utilização';
$string['displaysize'] = 'Mostrar tamanhos como:';
$string['emailrecipients'] = 'Destinatários do e-mail';
$string['emailrecipients_desc'] = 'Uma lista de endereços de e-mail separados por vírgulas para enviar diariamente o relatório de armazenamento.';
$string['enabledcap'] = 'Ativado';
$string['excludebackup'] = 'Excluir cópias de segurança:';
$string['excludebackups'] = 'Excluir cópias de segurança';
$string['excludebackups_desc'] = 'Se ativar esta opção, haverá uma opção para eliminar cópias de segurança dos detalhes do tamanho da disciplina.';
$string['export'] = 'Exportar';
$string['exporttocsv'] = 'Exportar como ficheiro CSV';
$string['exporttoexcel'] = 'Exportar como ficheiro Excel';
$string['granularcomponent'] = 'Componente';
$string['granularfilearea'] = 'Área de ficheiros';
$string['granularfilename'] = 'Nome do ficheiro';
$string['granularfilesize'] = 'Tamanho do ficheiro';
$string['granularfiletype'] = 'Tipo';
$string['granularlink'] = 'Detalhes';
$string['granularnofiles'] = 'Não existem ficheiros para visualizar na disciplina selecionada.';
$string['granularusername'] = 'Nome de utilizador';
$string['lastcalculated'] = 'Última atualização do cron sobre o tamanho das categorias e das disciplinas:';
$string['livecalc'] = 'Cálculos em tempo real:';
$string['nevercap'] = 'Nunca';
$string['numberofusers'] = 'Número de utilizadores de topo';
$string['numberofusers_desc'] = 'Número de utilizadores com maior índice de utilização a serem mostrados.';
$string['pluginname'] = 'Tamanho da disciplina';
$string['pluginsettings'] = 'Configurações do tamanho da disciplina';
$string['privacy:metadata:report_coursesize_users'] = 'Utilizadores do tamanho da disciplina';
$string['privacy:metadata:userid'] = 'ID do utilizador';
$string['salphan'] = 'A-Z (nome da disciplina)';
$string['salphas'] = 'A-Z (nome curto)';
$string['sharedusagecourse'] = 'Utilização partilhada';
$string['sizeauto'] = 'Automático';
$string['sorder'] = 'Ordenação do Moodle';
$string['sortby'] = 'Ordenar por:';
$string['sortdir'] = 'Sentido da ordenação:';
$string['ssize'] = 'Tamanho';
$string['tab_courses'] = 'Tamanho da disciplina';
$string['tab_users'] = 'Principais utilizadores do uso';
$string['taskcalculate'] = 'Calcular o tamanho das disciplinas';
$string['tasksendreport'] = 'Enviar relatório de utilização do disco';
$string['tbsize'] = 'Apenas o tamanho de cópias de segurança da disciplina';
$string['tcategories'] = 'Categoria completa';
$string['tcourse'] = 'Disciplina';
$string['tcsize'] = 'Tamanho total da disciplina (excluindo cópias de segurança)';
$string['tdtoggle'] = 'Alternar';
$string['topusers'] = 'Utilizadores (top {$a})';
$string['totalfilesize'] = 'Tamanho total do ficheiro';
$string['tsize'] = 'Tamanho';
$string['ttitle'] = 'Categoria da disciplina';
$string['ttsize'] = 'Tamanho total da disciplina (incluindo cópias de segurança)';
$string['uniquefilesize'] = 'Tamanho total de ficheiros únicos';
$string['userfilesize'] = 'Tamanho do ficheiro do utilizador';
$string['viewcoursestats'] = 'Ver estatísticas';
