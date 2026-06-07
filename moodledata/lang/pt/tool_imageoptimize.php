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
 * Strings for component 'tool_imageoptimize', language 'pt', version '4.4'.
 *
 * @package     tool_imageoptimize
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backgroundoptimizingheading'] = 'Configurações para otimização em segundo plano';
$string['cantcopyfile'] = 'O ficheiro não pôde ser armazenado.';
$string['cantfindfile'] = 'O ficheiro não foi encontrado no armazenamento de ficheiros.';
$string['create_desc'] = 'Aplicar otimização no primeiro carregamento do ficheiro';
$string['enablebackgroundoptimizing'] = 'Ativar otimização em segundo plano';
$string['enablebackgroundoptimizing_desc'] = 'Se ativar esta opção, não haverá otimização durante o carregamento.';
$string['exec_warning'] = 'Para o funcionamento deste módulo, é necessário alterar algumas configurações no seu servidor
                        <ol>
                            <li>Ative a função do core do php <strong>
                            <a href="https://www.php.net/manual/en/function.exec.php"
                            target="_blank">exec()</a></strong>
                                <ol>
                                    <li>localize o caminho para o ficheiro de configuração <strong>php.ini</strong></li>
                                    <li>edite a lista de funções desativadas na diretiva  <strong>
                                    <a href="https://www.php.net/manual/en/ini.core.php#ini.disable-functions"
                                    target="_blank">disable_functions</a></strong> no ficheiro, apague da lista
                                    <strong>exec</strong> e guarde as alterações</li>
                                    <li>reinicie o php</li>
                                </ol>
                            </li>
                            <li>Instale no servidor os pacotes necessários para compressão de cada tipo de imagem</li>
                        </ol>';
$string['filecheckfailed'] = 'Ocorreu um erro na verificação do ficheiro.';
$string['filehasnofilesize'] = 'O ficheiro não tem tamanho ou o tamanho é igual a 0. Cancelar!';
$string['files_types'] = 'Tipos de ficheiro';
$string['files_types_desc'] = 'Selecione os tipos de ficheiro aos quais será aplicada a otimização';
$string['filesortorder'] = 'Ordenação dos ficheiros';
$string['filesortorder_id_asc'] = 'Ficheiros mais antigos primeiro';
$string['filesortorder_id_desc'] = 'Ficheiros mais recentes primeiro';
$string['gifsicle'] = '<strong><a href="http://www.lcdf.org/gifsicle/" target="_blank">Gifsicle</a></strong>
                        <ul>
                            <li><strong>Debian/Ubuntu</strong>: <code>sudo apt-get install gifsicle</code></li>
                            <li><strong>Fedora/RHEL/CentOS</strong>: <code>sudo dnf install gifsicle</code></li>
                        </ul>';
$string['info_title'] = 'Para autentar a função de compactação do formato <strong>{$a}</strong>, pode instalar pacotes adicionais para compactação';
$string['jpegoptim'] = '<strong><a href="http://freshmeat.sourceforge.net/projects/jpegoptim" target="_blank">JpegOptim</a></strong>
                        <ul>
                            <li><strong>Debian/Ubuntu</strong>: <code>sudo apt-get install jpegoptim</code></li>
                            <li><strong>Fedora/RHEL/CentOS</strong>: <code>sudo dnf install jpegoptim</code></li>
                        </ul>';
$string['maxchunksize'] = 'Número máximo de ficheiros a processar numa execução da tarefa.';
$string['maxchunksizeimport'] = 'Número máximo de ficheiros a adicionar à tabela de processamento numa execução da tarefa.';
$string['more_than'] = 'Otimizar ficheiros de tamanho superior a (Kb)';
$string['optipng'] = '<strong><a href="http://optipng.sourceforge.net/" target="_blank">OptiPNG</a></strong>
                        <ul>
                            <li><strong>Debian/Ubuntu</strong>: <code>sudo apt-get install optipng</code></li>
                            <li><strong>Fedora/RHEL/CentOS</strong>: <code>sudo dnf install optipng</code></li>
                        </ul>';
$string['os_warning'] = 'No momento, o módulo não oferece suporte para trabalhar com o sistema operativo do seu servidor: <strong>{$a}</strong>';
$string['pathnamehashchanged'] = 'O Pathnamehash foi alterado. Cancelar!';
$string['pluginname'] = 'Otimização de imagem';
$string['privacy:metadata'] = 'O módulo Otimização de imagem não armazena quaisquer dados pessoais.';
$string['taskoptimize'] = 'Otimização de imagem em segundo plano';
$string['taskoptimize_fill_table'] = 'A preencher a tabela tool_imageoptimize_files';
$string['update_desc'] = 'Aplicar otimização ao atualizar o ficheiro';
$string['warning_title'] = 'Para que a opção fique disponível, instale um dos pacotes no seu servidor ou todos juntos';
$string['webp'] = '<strong><a href="https://developers.google.com/speed/webp" target="_blank">WebP</a></strong>
                        <ul>
                            <li><strong>Debian/Ubuntu</strong>: <code>sudo apt-get install webp</code></li>
                            <li><strong>Fedora/RHEL/CentOS</strong>: <code>sudo dnf install libwebp-tools</code></li>
                        </ul>';
