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
 * Strings for component 'coursechecker_links', language 'pt', version '4.4'.
 *
 * @package     coursechecker_links
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['book_chapter'] = 'Capítulo do livro: {$a->title}';
$string['connect_timeout_setting'] = 'Tempo limite de ligação cURL';
$string['connect_timeout_setting_desc'] = 'Tempo para estabelecer ligação ao servidor.';
$string['course_summary'] = 'Descrição da disciplina';
$string['domain_is_whitelisted'] = 'O domínio {$a->host} está na lista branca para {$a->url}';
$string['domain_whitelist_setting'] = 'Lista branca de domínios';
$string['domain_whitelist_setting_desc'] = 'Esta lista coloca domínios inteiros na lista branca. Adicione um domínio por linha, p.ex. <code>https://moodle.org</code>';
$string['error_code'] = 'Erro HTTP {$a->http_code} em {$a->url}';
$string['error_curl'] = 'Erro cURL {$a->curl_errno} {$a->curl_error} em {$a->url}';
$string['error_httpsecurity'] = 'O domínio {$a} foi colocado na lista negra após verificar o endereço e número da porta nas listas branca/negra da segurança HTTP do Moodle.';
$string['error_undefined'] = 'Ocorreu um erro indefinido com a hiperligação';
$string['pluginname'] = 'Verificação de hiperligações';
$string['pluginname_help'] = 'Este plugin analisa o conteúdo da disciplina — incluindo resumos, módulos, livros, wikis e URLs — para detetar hiperligações e verificar a sua validade.';
$string['privacy:metadata'] = 'A verificação de hiperligações não armazena quaisquer dados pessoais. Os resultados são guardados no plugin course checker.';
$string['timeout_setting'] = 'Tempo limite cURL';
$string['timeout_setting_desc'] = 'Tempo para estabelecer ligação ao servidor e trocar dados.';
$string['url_code_valid'] = '{$a->url} é válido (Código {$a->http_code})';
$string['url_is_whitelisted'] = 'O domínio {$a->host} está na lista branca para {$a->url}';
$string['url_whitelist_setting'] = 'Lista branca de URLs';
$string['url_whitelist_setting_desc'] = 'Esta lista coloca apenas URLs na lista branca. Adicione um URL por linha, p.ex. <code>https://moodle.org</code>';
$string['useragent_setting'] = 'User Agent';
$string['useragent_setting_desc'] = 'O User Agent informa o website sobre o navegador utilizado.';
$string['wiki_page'] = 'Página de Wiki: {$a->title}';
