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
 * Strings for component 'atto_filterws', language 'pt', version '4.4'.
 *
 * @package     atto_filterws
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfilterws'] = 'Adicionar etiqueta do filtro Webservice';
$string['apply'] = 'Aplicar';
$string['filteruseragent'] = 'Filtrar pelo "User Agent"';
$string['filteruseragent_help'] = 'Se for for indicado um valor, o conteúdo selecionado apenas será visualizado se o "UA (User Agent)" contiver este valor. O valor irá ser convertido para uma expressão regular.';
$string['insert'] = 'Inserir';
$string['insertfilterws'] = 'Inserir o filtro Webservice';
$string['origin'] = 'Origem';
$string['origin_help'] = 'Web: É apenas apresentado nos navegadores (Chrome, Firefox, Edge, ...).<br>Web Service: Apenas é visualizado num cliente Web Service, como por exemplo: Aplicação Móvel Moodle.<br>Qualquer: É visualizado em todos os tipos de clientes.';
$string['originany'] = 'Qualquer';
$string['originweb'] = 'Web';
$string['originws'] = 'Web Service';
$string['pluginname'] = 'Filtro WebService para Atto';
$string['predefined'] = 'Filtros predefinidos';
$string['predefined_desc'] = 'Lista de filtros predefinidos que todos os utilizadores poderão usar quando utilizarem o editor Atto.

Insira um filtro por linha, no formato: nome a mostrar, tipo de cliente (web, ws ou any) e "User Agent" (opcional). Estes campos devem ser separados pelo caráter \'|\'.
Por exemplo:
<pre>
    Aplicação móvel Moodle|ws|MoodleMobile
</pre>';
$string['privacy:metadata'] = 'O módulo Filtro WebService para Atto não armazena quaisquer dados pessoais.';
$string['settings'] = 'Definições do Filtro WebService';
