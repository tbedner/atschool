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
 * Strings for component 'coursechecker_subheadings', language 'pt', version '4.4'.
 *
 * @package     coursechecker_subheadings
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Verificação de subtítulos de rótulos';
$string['pluginname_help'] = 'O verificador de subtítulos confirma que todos os recursos do tipo Rótulo numa disciplina seguem padrões consistentes de formatação.';
$string['privacy:metadata'] = 'A verificação de subtítulos de rótulos não armazena quaisquer dados pessoais. Os resultados da verificação são guardados no plugin course checker.';
$string['subheadings_generalerror'] = 'Ocorreu um problema ao executar esta verificação';
$string['subheadings_iconmissing'] = 'O ícone está ausente na primeira tag HTML';
$string['subheadings_labelignored'] = 'Este rótulo é ignorado devido à lista branca na configuração do plugin.';
$string['subheadings_setting_whitelist'] = 'Lista branca de strings para o verificador de subtítulos';
$string['subheadings_setting_whitelist_help'] = 'Adicione uma string por linha. Exemplo: "Liebe(r) Modulentwickler".';
$string['subheadings_success'] = 'Este rótulo tem um subtítulo e um ícone corretos';
$string['subheadings_wrongfirsthtmltag'] = 'A primeira tag HTML não é um {$a->htmltag}';
