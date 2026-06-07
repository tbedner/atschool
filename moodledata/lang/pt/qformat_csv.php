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
 * Strings for component 'qformat_csv', language 'pt', version '4.4'.
 *
 * @package     qformat_csv
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['commma_error'] = '<font color="#990000">Ocorreu um erro ao carregar o ficheiro. Foi detetada uma vírgula desnecessária (,) na <b>Pergunta \'{$a}\'</b>.<br />Por favor, remova a vírgula (,) ou coloque todo o texto entre aspas duplas (""), para que a vírgula (,) seja ignorada.<br /></font>';
$string['csv_file_error'] = '<font color="#990000">Ocorreu um erro ao carregar o ficheiro. Algo está errado na linha número <b>{$a}</b>.<br /> Certifique-se que está a carregar um ficheiro CSV válido.<br /> Confirme que o <b>ficheiro CSV simples tem 8 cabeçalhos/campos</b> ou o <b>ficheiro CSV alargado tem 13 cabeçalhos/campos</b> para que funcione corretamente. Corrija o erro e tente importar novamente. <br />Nenhuma pergunta foi importada.</font>';
$string['newline_error'] = '<font color="#990000">Ocorreu um erro ao carregar o ficheiro. Foi detetada uma \'Nova Linha\' na <b>Pergunta \'{$a}\'</b>.<br />Certifique-se de que toda a pergunta, com as escolhas e as respostas, está apenas numa linha.<br />Corrija a pergunta e tente importar novamente. <br /> Nenhuma pergunta foi importada.</font>';
$string['pluginname'] = 'Formato CSV';
$string['pluginname_help'] = 'Este é um formato CSV para importar e exportar perguntas de escolha múltipla (máximo 4 opções) com uma ou, no máximo, duas respostas de um ficheiro CSV (valores separados por vírgulas). Para sua ajuda, pode encontrar um exemplo do ficheiro CSV (sample.csv) e um exemplo do ficheiro CSV alargado (extended_sample.csv) na pasta de instalação do módulo.';
$string['pluginname_link'] = 'qformat/csv';
$string['privacy:metadata'] = 'O módulo Formato CSV não armazena dados pessoais.';
$string['samplefile'] = 'Ficheiro de exemplo';
