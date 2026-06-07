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
 * Strings for component 'format_periods', language 'pt', version '4.4'.
 *
 * @package     format_periods
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['automaticenddate'] = 'Calcular a data de fim a partir do final do último período';
$string['automaticenddate_help'] = 'Se ativar esta opção, a data de fim da disciplina será calculada automaticamente a partir da data final do último período.';
$string['currentsection'] = 'Este período';
$string['customdatesformat'] = 'Personalizado';
$string['datesformat'] = 'Formato das datas';
$string['datesformat_help'] = 'Selecione o formato das datas que será mostrado no nome predefinido do período';
$string['datesformatcustom'] = 'Formato das datas personalizado';
$string['datesformatcustom_help'] = 'Especifique o formato das datas personalizado. Visite <a href="http://php.net/manual/en/function.strftime.php" target="_blank">php manual</a> para consultar a sintaxe';
$string['deletesection'] = 'Apagar período';
$string['editsection'] = 'Editar período';
$string['editsectionname'] = 'Editar nome do período';
$string['futuresneakpeek'] = 'Indagar períodos futuros';
$string['futuresneakpeek_help'] = 'Tratar períodos que começam mais cedo do que este intervalo como atual (por exemplo, isto permitirá que os alunos vejam a próxima semana dois dias antes do final da semana atual)';
$string['hidecompletely'] = 'Ocultar completamente';
$string['hidefromcourseview'] = 'Ocultar da página da disciplina';
$string['hidefromothers'] = 'Ocultar período';
$string['newsectionname'] = 'Novo nome para o período {$a}';
$string['notavailable'] = 'Ainda não disponível';
$string['numberperiods'] = 'Número de períodos';
$string['page-course-view-periods'] = 'Qualquer página principal da disciplina no formato de períodos';
$string['page-course-view-periods-x'] = 'Qualquer página da disciplina no formato de períodos';
$string['perioddurationdefault'] = 'Duração predefinida do período';
$string['perioddurationdefault_help'] = 'Define a duração de um período. O valor pode ser alterado em determinados períodos';
$string['perioddurationoverride'] = 'Substituir a duração do período';
$string['perioddurationoverride_help'] = 'Define a duração deste período. Se não for definida, será usado o valor predefinido para a disciplina';
$string['pluginname'] = 'Formato de Períodos';
$string['sameascurrent'] = 'Tal como os períodos atuais';
$string['sameaspast'] = 'Tal como os períodos já decorridos';
$string['section0name'] = 'Geral';
$string['sectiondates'] = 'Datas do período: <b>{$a->dates}</b>';
$string['sectiondatesduration'] = 'Datas do período: <b>{$a->dates}</b>; duração do período: <b>{$a->duration}</b>';
$string['sectionduration'] = 'Duração do período: <b>{$a->duration}</b>';
$string['sectionname'] = 'Período';
$string['showcollapsed'] = 'Mostrar cada período como uma hiperligação para a sua própria página';
$string['showexpanded'] = 'Mostrar todos os períodos numa só página';
$string['showfromothers'] = 'Mostrar período';
$string['showfutureperiods'] = 'Mostrar períodos futuros';
$string['showfutureperiods_help'] = 'Permite mostrar automaticamente os futuros períodos como hiperligações, como não disponíveis ou ocultá-los completamente';
$string['shownotavailable'] = 'Mostrar como não disponível';
$string['showpastcompleted'] = 'Mostrar períodos já decorridos e concluídos';
$string['showpastcompleted_help'] = 'Define como mostrar os períodos já decorridos onde todas as atividades estão concluídas. A verificação da conclusão deve estar ativa para todos os módulos na secção.';
$string['showpastperiods'] = 'Mostrar períodos já decorridos';
$string['showpastperiods_help'] = 'Define se deseja mostrar ou ocultar os períodos que têm a data de fim no passado. "Ocultar da página da disciplina" significa que as atividades não serão mostradas na página da disciplina, mas serão visíveis na pauta e outros relatórios.';
$string['showperiods'] = 'Mostrar os períodos atuais';
$string['showperiods_help'] = 'Define como mostrar os períodos por predefinição. Isto pode ser alterado abaixo para períodos futuros ou já decorridos';
