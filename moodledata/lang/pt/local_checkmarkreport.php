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
 * Strings for component 'local_checkmarkreport', language 'pt', version '4.4'.
 *
 * @package     local_checkmarkreport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additional_columns'] = 'Colunas adicionais';
$string['additional_information'] = 'Informação adicional';
$string['additional_settings'] = 'Configurações adicionais';
$string['attendances'] = 'Presenças';
$string['by'] = 'por';
$string['checkmarkreport:view'] = 'Visualizar relatório checkmark';
$string['checkmarkreport:view_courseoverview'] = 'Visualizar relatório checkmark da disciplina';
$string['checkmarkreport:view_own_overview'] = 'Visualizar o meu relatório checkmark';
$string['checkmarkreport:view_students_overview'] = 'Visualizar relatório checkmark dos utilizadores';
$string['error_retriefing_members'] = 'Erro ao obter membros do grupo';
$string['eventexported'] = 'O relatório checkmark foi exportado';
$string['eventoverviewexported'] = 'Exportado relatório checkmark global';
$string['eventoverviewviewed'] = 'Visualizado relatório checkmark global';
$string['eventuseroverviewexported'] = 'O relatório checkmark global do utilizador foi exportado';
$string['eventuseroverviewviewed'] = 'O relatório global do utilizador nas checkmark foi visualizado';
$string['eventuserviewexported'] = 'O relatório checkmark do utilizador foi exportado';
$string['eventuserviewviewed'] = 'O relatório checkmark do utilizador foi visualizado';
$string['eventviewed'] = 'Visualizado relatório checkmark';
$string['example'] = 'Verificação';
$string['examples'] = 'Verificações';
$string['exportas'] = 'Exportar como:';
$string['filter'] = 'Filtro';
$string['grade'] = 'Nota';
$string['grade_help'] = 'Mostrar a nota, resultado da soma das checkmarks apresentadas, bem como os pontos teóricos por verificação.';
$string['grade_useroverview'] = 'Nota';
$string['grade_useroverview_help'] = 'A nota mostra a atual nota dada pelo professor em cada Checkmark.<br />Os valores em linha com as verificações mostram o número teórico de pontos possíveis para as verificações marcadas.<br />A nota da Checkmark e a soma das notas das Checkmarks da disciplina aqui mostradas podem diferir da soma dos pontos das verificações, pelo facto dos professores darem notas diferentes (por exemplo, quando os alunos marcaram ou desmarcaram verificações no início da lição, ou se as verificações marcadas não foram resolvidas corretamente). A soma de uma única Checkmark (na linha "Σ chekmarks") mostra a nota do professor. Um "-" significa que atualmente nenhuma foi atribuída.<br />A soma de todas as checkmarks (linha "Σ total") resume todas as notas do professor.<br />Tenha em atenção que estes valores atualizam-se de acordo com o estado atual de avaliação.';
$string['groupings'] = 'Agrupamentos';
$string['groups'] = 'Grupos';
$string['groups_help'] = 'Use para selecionar os grupos a serem mostrados. Os grupos vazios estão desativados e apenas os membros dos grupos selecionados são mostrados na seleção dos utilizadores (após a atualização).';
$string['loading'] = 'A carregar...';
$string['noaccess'] = 'Não tem acesso a este módulo. Não tem as permissões necessárias para visualizar este conteúdo.';
$string['overview'] = 'Visão global';
$string['overview_alt'] = 'Visualizar o relatório da Checkmark da disciplina';
$string['overwritten'] = 'Sobrescritas';
$string['pluginname'] = 'Relatório de Checkmark';
$string['pluginname_help'] = 'Os relatórios de Checkmark estendem a funcionalidade da atividade Checkmark (mod_checkmark), criando convenientes relatórios da visão global da disciplina para todas as Checkmarks disponíveis.';
$string['pluginnameplural'] = 'Relatórios de Checkmark';
$string['privacy:metadata:sumrel'] = 'Guardou persistentemente a configuração de mostrar ou não valores percentuais.';
$string['seperatenamecolumns'] = 'Separar o nome completo em colunas';
$string['seperatenamecolumns_help'] = 'Se ativar esta opção, todas as partes que constituem o nome (nome e apelido) serão separadas em colunas.';
$string['showattendances'] = 'Mostrar assiduidade';
$string['showattendances_help'] = 'Se ativar esta opção, as assiduidades dos alunos serão incluídas nos relatórios se, pelo menos, uma das instâncias de Checkmark verificar a assiduidade. Se não verificar, não será mostrada qualquer informação para a respetiva instância.';
$string['showexamples'] = 'Mostrar exemplos';
$string['showexamples_help'] = 'Se ativar esta opção, os exemplos das instâncias de Checkmark serão incluídos nos relatórios com informações detalhadas.';
$string['showgrade'] = 'Mostrar nota';
$string['showpoints'] = 'Mostrar pontuação';
$string['showpoints_help'] = 'Mostrar pontos correspondentes para cada exemplo em vez dos símbolos de  marcado (☒) ou desmarcado (☐).';
$string['showpresentationcount'] = 'Mostrar número de apresentações avaliadas';
$string['showpresentationcount_help'] = 'Se ativar esta opção, a coluna "# notas da apresentação" mostra para todos os utilizadores o número de notas das apresentações que foram inseridas em todas as instâncias de Checkmark da disciplina. As notas vazias são ignoradas e não contadas.';
$string['showpresentationgrades'] = 'Mostrar comentários';
$string['showpresentationgrades_help'] = 'Mostrar os comentários das notas dadas às apresentações do aluno';
$string['showsignature'] = 'Incluir campos de assinatura nos ficheiros XLSX e ODS';
$string['showsignature_help'] = 'Se ativar esta opção, áreas reservadas para as assinaturas de alunos serão incluídas nas exportações XLSX e ODS. Não está disponível para exportações TXT ou XML.';
$string['signature'] = 'Assinatura';
$string['status'] = 'Estado';
$string['sumabs'] = 'Mostrar x/y exemplos';
$string['sumabs_help'] = 'Mostrar número de exemplos verificados em toda a disciplina e para cada caixa de verificação.';
$string['sumrel'] = 'Mostrar % de exemplos/notas';
$string['sumrel_help'] = 'Mostrar os valores relativos (XX%) dos exemplos verificados, bem como a nota calculada pelos exemplos verificados para a disciplina no total e por cada marca de verificação.';
$string['update'] = 'Atualizar';
$string['useroverview'] = 'Visão global do aluno';
$string['useroverview_alt'] = 'Visualizar relatório checkmark do utilizador';
$string['userview'] = 'Vista do utilizador';
$string['userview_alt'] = 'Visualizar o meu relatório checkmark';
