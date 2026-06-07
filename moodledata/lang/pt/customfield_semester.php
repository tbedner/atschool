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
 * Strings for component 'customfield_semester', language 'pt', version '4.4'.
 *
 * @package     customfield_semester
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['beginofsemesters'] = 'O ano, a lista de semestres começa em.';
$string['defaultmonthsintofuture'] = 'A opção predefinida é o semestre em X meses.';
$string['internaltermrepresentation'] = 'Representação interna do termo';
$string['internaltermrepresentation_desc'] = 'Com esta configuração, controla como o campo personalizado representa os termos internamente (na base de dados do Moodle). É relevante se pretende integrar o Moodle com sistemas externos de gestão de ensino e deseja preencher o campo personalizado diretamente com valores de um sistema externo.';
$string['internaltermrepresentationst0wt1'] = 'Representa o termo de verão como termo 0 e o termo de inverno como termo 1';
$string['internaltermrepresentationst1wt2'] = 'Representa o termo de verão como termo 1 e o termo de inverno como termo 2';
$string['internaltermrepresentationwarning'] = '<strong>Aviso:</strong> alterar esta configuração <em>não</em> atualizará os valores de campo existentes em disciplinas existentes. Por favor, altere esta configuração apenas se realmente precisar e se tiver conhecimento de que terá que preencher novamente os campos das disciplinas existentes.';
$string['pluginname'] = 'Semestre';
$string['semesterindependent'] = 'Não determinado';
$string['showmonthsintofuture'] = 'Um semestre ficará selecionável, se começar em menos de X meses.';
$string['specificsettings'] = 'Configurações de campo semestre';
$string['startmonthnote'] = 'Observação: os valores aceitáveis são números entre 1 e 12. Esta configuração pressupõe que o período de verão vem antes do período de inverno. Se configurar os termos ao contrário, o campo personalizado ignorará silenciosamente as suas configurações e usará as predefinições';
$string['summersemester'] = 'Verão {$a}';
$string['summertermstartmonth'] = 'Mês inicial do verão';
$string['summertermstartmonth_desc'] = 'Com esta configuração, define em que mês começa o período de verão.';
$string['termpresentationasc'] = 'Termos mais antigos primeiro, não determinado no início da lista';
$string['termpresentationdesc'] = 'Termos mais recentes primeiro, não determinado no fim da lista';
$string['termpresentationorder'] = 'Ordem de apresentação do termo';
$string['termpresentationorder_desc'] = 'Com esta configuração, controla como a lista de termos é apresentada nas configurações da disciplina e (se o campo for usado como um filtro da disciplina) no bloco de visão global da disciplina do Painel do utilizador.';
$string['visibleincoursesettings'] = 'Visível nas configurações da disciplina';
$string['visibleincoursesettings_desc'] = 'O campo semestre é visível e editável nas configurações da disciplina';
$string['wintersemester'] = 'Inverno {$a}';
$string['wintertermstartmonth'] = 'Mês inicial do inverno';
$string['wintertermstartmonth_desc'] = 'Com esta configuração, define em que mês começa o período de inverno.';
