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
 * Strings for component 'local_staticpage', language 'pt', version '4.4'.
 *
 * @package     local_staticpage
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apacherewrite'] = 'Forçar o mod_rewrite no Apache';
$string['apacherewrite_desc'] = 'Apresentar páginas estáticas apenas com um URL amigável, reescrito pelo mod_rewrite do Apache. Para mais detalhes, consulte a <a href="https://github.com/moodle-an-hochschulen/moodle-local_staticpage/blob/master/README.md#apache-mod_rewrite">documentação do módulo</a> no Github.';
$string['checkavailability'] = 'Verificar disponibilidade';
$string['checkavailability_desc'] = 'Se o Moodle deve verificar a disponibilidade de ficheiros estáticos na lista de páginas estáticas ou não.';
$string['checkavailabilityconnecttimeout'] = 'Tempo limite de ligação';
$string['checkavailabilityconnecttimeout_desc'] = 'A duração máxima (em segundos) de espera para tentar a ligação durante a verificação de disponibilidade. Use 0 para permitir uma duração ilimitada.';
$string['checkavailabilityno'] = 'Não verificar a disponibilidade';
$string['checkavailabilityresponsedisabled'] = 'Não verificado';
$string['checkavailabilityresponseerror'] = 'Não disponível - Erro';
$string['checkavailabilityresponsefail'] = 'Não disponível - Non-2xx';
$string['checkavailabilityresponsesuccess'] = 'Disponível';
$string['checkavailabilitytimeout'] = 'Tempo limite';
$string['checkavailabilitytimeout_desc'] = 'A duração máxima (em segundos) para permitir que funções cURL sejam executadas durante a verificação de disponibilidade. Use 0 para permitir um tempo de execução ilimitado.';
$string['checkavailabilityyes'] = 'Verificar disponibilidade';
$string['cleanhtml'] = 'Limpar o código HTML';
$string['cleanhtml_desc'] = 'Se o código HTML da página estática deve ser limpo (e, por isso, as tags especiais, como por exemplo: &lt;iframe&gt; serão apagadas). Para mais detalhes, consulte a <a href="https://github.com/moodle-an-hochschulen/moodle-local_staticpage/blob/master/README.md#24-process-content">documentação do módulo</a> no Github.';
$string['cleanhtmlno'] = 'Não limpar o código HTML';
$string['cleanhtmlyes'] = 'Limpar o código HTML';
$string['documentheadingsource'] = 'Origem dos dados do cabeçalho do documento';
$string['documentheadingsource_desc'] = 'Origem dos dados do cabeçalho do documento da página estática';
$string['documents'] = 'Documentos';
$string['documents_desc'] = 'Os ficheiros .html com o código HTML das páginas estáticas. Para mais detalhes, consulte a <a href="https://github.com/moodle-an-hochschulen/moodle-local_staticpage/blob/master/README.md#1-documents">documentação do módulo</a> no Github.';
$string['documenttitlesource'] = 'Origem dos dados do título do documento';
$string['documenttitlesource_desc'] = 'A origem dos dados do título do documento das páginas estáticas (usado na barra de título do navegador)';
$string['documenttitlesourceh1'] = 'Primeira tag \'h1\' no código HTML (geralmente localizada logo após a abertura da tag \'body\')';
$string['documenttitlesourcehead'] = 'Primeira tag \'title\' no código HTML (geralmente localizada na tag \'head\')';
$string['forcelogin'] = 'Forçar autenticação';
$string['forcelogin_desc'] = 'Mostrar as páginas estáticas apenas aos utilizadores autenticados ou também aos visitantes. Este comportamento pode ser definido especificamente para páginas estáticas ou se deve respeitar a configuração global de forçar autenticação no Moodle. Para mais detalhes, consulte a <a href="https://github.com/moodle-an-hochschulen/moodle-local_staticpage/blob/master/README.md#23-force-login">documentação do módulo</a> no Github.';
$string['forceloginglobal'] = 'Respeitar a configuração global $CFG->forcelogin';
$string['pagenotfound'] = 'Página não encontrada';
$string['pluginname'] = 'Páginas estáticas';
$string['privacy:metadata'] = 'O módulo Páginas estáticas fornece uma funcionalidade adicional para os administradores do Moodle, mas não armazena quaisquer dados pessoais.';
$string['processcontent'] = 'Processar conteúdo';
$string['processfilters'] = 'Processar filtros';
$string['processfilters_desc'] = 'Se os filtros do Moodle (especialmente o filtro multilingue) devem ser processados ao mostrar o conteúdo da página estática. Para mais detalhes, consulte a <a href="https://github.com/moodle-an-hochschulen/moodle-local_staticpage/blob/master/README.md#24-process-content">documentação do módulo</a> no Github.';
$string['processfiltersno'] = 'Não processar filtros';
$string['processfiltersyes'] = 'Processar filtros';
$string['settingspagelist'] = 'Lista de páginas estáticas';
$string['settingspagelistentryfilename'] = 'Foi encontrado o seguinte ficheiro do documento:<br /><strong>{$a}</strong>';
$string['settingspagelistentrypagename'] = 'A partir do nome do ficheiro do documento, o Moodle criou o seguinte nome da página: <br /><strong>{$a}</strong>';
$string['settingspagelistentryrewritedisabled'] = 'A página estática deve estar disponível no URL amigável mostrado abaixo, mas não está verificada porque a verificação de disponibilidade está desativada:<br /><strong>{$a}</strong>';
$string['settingspagelistentryrewriteerror'] = 'A página estática devia estar disponível no URL amigável mostrado abaixo, mas o navegador não consegue descarregá-la e visualizá-la devido a um erro de ligação ou resposta mais lenta do que a configuração de \'checkavailabilitytimeout\' (talvez haja algum erro na configuração do seu servidor web ou na configuração de mod_rewrite):<br /><strong>{$a}</strong>';
$string['settingspagelistentryrewritefail'] = 'A página estática deve estar disponível no URL amigável mostrado abaixo, mas o navegador não poderá descarregá-la e visualizá-la devido a um código de estado do HTTP (non-2xx) (talvez haja algum erro na configuração no seu servidor web ou na configuração de mod_rewrite):<br /><strong>{$a}</strong>';
$string['settingspagelistentryrewritesuccess'] = 'A página estática está disponível e pode ser vinculada ao seguinte URL amigável: <br /><strong>{$a}</strong>';
$string['settingspagelistentrystandarddisabled'] = 'A página estática deve estar disponível no URL padrão mostrado abaixo, mas não é verificada porque a verificação de disponibilidade está desativada:<br /><strong>{$a}</strong>';
$string['settingspagelistentrystandarderror'] = 'A página estática deve estar disponível no URL padrão mostrado abaixo, mas o navegador não poderá descarregá-la e visualizá-la devido a um erro de ligação ou com resposta mais lenta do que a configuração de \'checkavailabilitytimeout\' (talvez haja algum erro na configuração do seu servidor web):<br /><strong>{$a}</strong>';
$string['settingspagelistentrystandardfail'] = 'A página estática deve estar disponível no URL padrão mostrado abaixo, mas o navegador não poderá descarregá-la e visualizá-la devido a um código de estado do HTTP (non-2xx) (talvez haja algum erro na configuração no seu servidor web):<br /><strong>{$a}</strong>';
$string['settingspagelistentrystandardsuccess'] = 'A página estática está disponível e pode ser vinculada ao seguinte URL predefinido: <br /><strong>{$a}</strong>';
$string['settingspagelistinstruction'] = 'Esta lista mostra todas as páginas estáticas que foram carregadas para a <a href="{$a}">área de documentos das páginas estáticas</a> e respetivos URL';
$string['settingspagelistnofiles'] = 'Não existem ficheiros .html na <a href="{$a}">área de documentos das páginas estáticas</a>, por isso, não existem páginas estáticas para serem mostradas. Para mais detalhes, consulte a <a href="https://github.com/moodle-an-hochschulen/moodle-local_staticpage/blob/master/README.md#1-documents">documentação do módulo</a> no Github.';
$string['staticpage:managedocuments'] = 'Gerir documentos de página estática';
$string['upgrade_notice_2016020307'] = '<strong>NOTA SOBRE A ATUALIZAÇÃO</ strong>: Os ficheiros foram movidos para a nova área de ficheiros no Moodle. Pode apagar a antiga pasta de documentos: {$a}. Para mais instruções sobre a atualização, especialmente se estiver a usar os recursos multilingues deste módulo, consulte a <a href="https://github.com/moodle-an-hochschulen/moodle-local_staticpage/blob/master/README.md#upgrading-from-previous-versions">documentação do módulo</a> no Github.';
