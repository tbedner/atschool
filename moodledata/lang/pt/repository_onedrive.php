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
 * Strings for component 'repository_onedrive', language 'pt', version '4.4'.
 *
 * @package     repository_onedrive
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access'] = 'Acesso';
$string['both'] = 'Interno e externo';
$string['cachedef_folder'] = 'IDs dos ficheiros para as pastas na conta do sistema';
$string['configplugin'] = 'Configurar módulo Onedrive';
$string['confirmimportskydrive'] = 'Tem a certeza de que pretende importar todos os ficheiros do repositório Microsoft SkyDrive para o repositório Microsoft OneDrive? O repositório Microsoft OneDrive deve ser configurado e estar a funcionar para que os ficheiros importados continuem a funcionar como antes. Aviso: esta ação não pode ser desfeita!';
$string['defaultreturntype'] = 'Tipo predefinido';
$string['external'] = 'Externo (apenas hiperligações armazenadas no Moodle)';
$string['fileoptions'] = 'Configuração dos tipos e predefinições dos ficheiros. Tenha em atenção que todos os ficheiros vinculados externamente serão atualizados para que o proprietário seja a conta do sistema Moodle.';
$string['importskydrivefiles'] = 'Importar ficheiros do repositório Microsoft SkyDrive';
$string['internal'] = 'Interno (ficheiros armazenados no Moodle)';
$string['issuer'] = 'Serviço OAuth 2';
$string['issuer_help'] = 'Selecione o serviço OAuth 2 configurado para ligar-se à API do Onedrive. Se o serviço ainda não existir, tem de criá-lo.';
$string['mysitenotfound'] = 'Nunca se autenticou no Onedrive. Deverá autenticar-se no Onedrive pelo menos uma vez antes de o utilizar com o Moodle.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Hiperligação à configuração dos serviços OAuth 2">Configuração dos serviços OAuth 2</a>';
$string['onedrive:view'] = 'Ver o repositório Onedrive';
$string['owner'] = 'Proprietário: {$a}';
$string['pluginname'] = 'Microsoft OneDrive';
$string['privacy:metadata:repository_onedrive'] = 'O módulo repositório Microsoft OneDrive armazena dados pessoais e transmite dados do utilizador do Moodle para o sistema remoto.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:itemid'] = 'O ID do item com acesso temporário ao Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:permissionid'] = 'O ID de permissão de acesso temporário ao Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timecreated'] = 'Data e hora de criação de acesso temporário ao Microsoft OneDrive';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timemodified'] = 'A data e hora de modificação de acesso temporário ao Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:usermodified'] = 'O ID do utilizador a modificar o acesso temporário ao Microsoft OneDrive.';
$string['privacy:metadata:repository_onedrive:searchtext'] = 'Pesquisa de texto no repositório Microsoft OneDrive do utilizador.';
$string['removetempaccesstask'] = 'Remoção do acesso de escrita temporário das hiperligações controladas';
$string['searchfor'] = 'Pesquisar por {$a}';
$string['servicenotenabled'] = 'Acesso não configurado';
$string['skydrivefilesexist'] = 'O repositório Microsoft SkyDrive está ativado, mas foi descontinuado. Certifique-se de migrar os ficheiros do SkyDrive para o repositório do OneDrive o mais rápido possível. No Moodle 4.4 já não será possível.';
$string['skydrivefilesimported'] = 'Todos os ficheiros foram importados do repositório Microsoft SkyDrive.';
$string['skydrivefilesnotimported'] = 'Alguns ficheiros não podem ser importados do repositório Microsoft SkyDrive.';
$string['supportedreturntypes'] = 'Ficheiros suportados';
