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
 * Strings for component 'fileconverter_onlyoffice', language 'pt', version '4.4'.
 *
 * @package     fileconverter_onlyoffice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Conversor de documentos ONLYOFFICE';
$string['settings:internalmoodleurl'] = 'URL interno do Moodle';
$string['settings:internalmoodleurl_help'] = 'Opcionalmente, especifique o URL na qual o servidor de documentos ONLYOFFICE poderá encontrar o Moodle (wwwroot modificado). Se deixado em branco, será usado o wwwroot normal. Normalmente, esta configuração não precisa ser definida, a menos que o wwwroot no navegador seja diferente do da rede local (o que geralmente é o caso em configurações contentorizadas).';
$string['settings:internaloodsurl'] = 'URL interno do servidor de documentos do ONLYOFFICE';
$string['settings:internaloodsurl_help'] = 'Especifique o URL na qual o servidor de documentos ONLYOFFICE pode ser acedido *pelo Moodle*. O URL nunca é resolvido no navegador, apenas nas solicitações CURL do Moodle, por isso será resolvido apenas na rede local.';
