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
 * Strings for component 'cachestore_apcu', language 'pt', version '4.4'.
 *
 * @package     cachestore_apcu
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clusternotice'] = 'Lembre-se de que APCu é apenas uma escolha adequada para sites com um registo único ou caches que podem ser armazenadas localmente.
Para obter mais informações, consulte a documentação <a href="{$a}"> da cache do utilizador da APC </a>.';
$string['notice'] = 'Aviso';
$string['pluginname'] = 'Cache do utilizador do APC (APCu)';
$string['prefix'] = 'Prefixo';
$string['prefix_help'] = 'O prefixo acima é utilizado para todas as chaves armazenadas nesta instância de armazenamento APC. Por predefinição, o prefixo da base de dados é utilizado.';
$string['prefixinvalid'] = 'O prefixo que selecionou é inválido. Apenas pode usar a-z A-Z 0-9-_.';
$string['prefixnotunique'] = 'O prefixo que selecionou não é único. Por favor, escolha um prefixo único.';
$string['privacy:metadata'] = 'O módulo cache de utilizador APC armazena dados temporariamente como parte da sua funcionalidade de armazenamento em cache, mas a estes dados são limpos regularmente e não são enviados externamente de forma nenhuma.';
$string['testperformance'] = 'Teste de desempenho';
$string['testperformance_desc'] = 'Se ativar esta opção, o desempenho do APCu será incluído ao exibir a página de desempenho do teste. Não é recomendado ativar isto num site de produção.';
