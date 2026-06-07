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
 * Strings for component 'coursechecker_referencesettings', language 'pt', version '4.4'.
 *
 * @package     coursechecker_referencesettings
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Verificação das configurações de referência';
$string['pluginname_help'] = 'Este plugin compara as configurações gerais da disciplina (como categoria, formato, idioma, filtros e opções do formato) da disciplina atual com as de uma disciplina de referência.';
$string['privacy:metadata'] = 'A verificação das configurações de referência não armazena quaisquer dados pessoais. Os resultados são guardados no plugin course checker.';
$string['referencefilter_comparison'] = '(Disciplina de referência: "{$a->filtervaluereference}" | Disciplina atual: "{$a->filtervaluecurrent}")';
$string['referencefilter_enabled'] = 'Verificação dos filtros de referência ativada';
$string['referencefilter_enabled_help'] = 'Ative esta opção para comparar todos os filtros da disciplina com a disciplina de referência.';
$string['referencefilter_failing'] = 'O filtro "{$a->filterkey}" não está correto {$a->comparison}';
$string['referencefilter_filternotsetincurrentcourse'] = 'O filtro "{$a->filterkey}" está em falta na disciplina atual.';
$string['referencefilter_success'] = 'Todos os filtros estão corretamente definidos na disciplina atual';
$string['referenceformatoptions_enabled'] = 'Verificação das opções de formato de referência ativada';
$string['referenceformatoptions_enabled_help'] = 'Ative esta opção para comparar todas as opções de formato da disciplina com a disciplina de referência.';
$string['referenceformatoptions_failing'] = 'A opção de formato "{$a->optionkey}" não está correta {$a->comparison}';
$string['referenceformatoptions_success'] = 'Todas as opções de formato estão corretamente definidas na disciplina atual';
$string['referencesettings_checklist'] = 'Lista de configurações para comparar com a disciplina de referência';
$string['referencesettings_checklist_help'] = 'Selecione uma ou várias configurações para comparar com a disciplina de referência.';
$string['referencesettings_comparison'] = '(Disciplina de referência: "{$a->settingvaluereference}" | Disciplina atual: "{$a->settingvaluecurrent}")';
$string['referencesettings_failing'] = 'A configuração "{$a->setting}" não está correta {$a->comparison}';
$string['referencesettings_settingismissing'] = 'A configuração "{$a->setting}" não existe na disciplina';
$string['referencesettings_success'] = 'A configuração "{$a->setting}" está correta';
