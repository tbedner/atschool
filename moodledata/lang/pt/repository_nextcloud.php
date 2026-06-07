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
 * Strings for component 'repository_nextcloud', language 'pt', version '4.4'.
 *
 * @package     repository_nextcloud
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['both'] = 'Interno e externo';
$string['cannotconnect'] = 'O utilizador não pôde ser autenticado. Por favor, inicie a sessão e, em seguida, carregue o ficheiro.';
$string['chooseissuer'] = 'Emissor';
$string['chooseissuer_help'] = 'Para adicionar um novo emissor, vá a Administração do Site / Servidor / Serviços OAuth 2.';
$string['configplugin'] = 'Configuração do repositório Nextcloud';
$string['configuration_exception'] = 'Ocorreu um erro na configuração do cliente OAuth 2: {$a}';
$string['contactadminwith'] = 'A ação solicitada não pôde ser executada. Se isso acontecer repetidamente, contacte o administrador do site e transmita-lhe as seguintes informações adicionais: <br>"<i>{$a} </i>".';
$string['couldnotmove'] = 'O ficheiro solicitado não pôde ser movido para a pasta {$a}.';
$string['defaultreturntype'] = 'Tipo de retorno predefinido';
$string['endpointnotdefined'] = 'O endpoint {$a} não está definido.';
$string['external'] = 'Externo (apenas as hiperligações são armazenados no Moodle)';
$string['externalpubliclinkwarning'] = 'Aviso: Este ficheiro tornar-se-á público.';
$string['filenotaccessed'] = 'Não foi possível aceder ao ficheiro solicitado. Por favor, verifique se  escolheu um ficheiro válido e se está autenticado com a conta com esta permissão.';
$string['fileoptions'] = 'Os tipos e as predefinições dos ficheiros retornados são configurados aqui. Tenha em atenção que todos os ficheiros vinculados externamente serão atualizados para que o proprietário seja a conta do sistema Moodle.';
$string['foldername'] = 'Nome da pasta criada no espaço privado dos utilizadores Nextcloud que contém todos os URL controlados por acesso.';
$string['foldername_help'] = 'Para garantir que os utilizadores encontrem os ficheiros partilhados com eles. As partilhas estão guardadas numa pasta específica.

Esta configuração determina o nome da pasta. Recomenda-se escolher um nome associado à sua instância do Moodle.';
$string['internal'] = 'Interno (ficheiros armazenados no Moodle)';
$string['invalidresponse'] = 'Resposta inválida do servidor';
$string['issuervalidation_invalid'] = 'Atualmente, o emissor {$a} está ativo, no entanto, ele não implementa todos os endpoints necessários. O repositório não funcionará.';
$string['issuervalidation_valid'] = 'Atualmente, o emissor {$a} está ativo.';
$string['issuervalidation_without'] = 'Ainda não selecionou um servidor Nextcloud como emissor do OAuth 2.';
$string['nextcloud'] = 'Nextcloud';
$string['nextcloud:view'] = 'Visualizar Nextcloud';
$string['no_right_issuers'] = 'Nenhum dos emissores existentes implementa todos os endpoints necessários. Por favor, registe um emissor apropriado.';
$string['noclientconnection'] = 'Não foi possível os clientes OAuth ligarem-se.';
$string['notauthorized'] = 'Não está autorizado a executar esta solicitação. Por favor, verifique se está autenticado com a conta com esta permissão.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="URL da configuração dos serviços OAuth 2">Configuração dos serviços OAuth 2</a>';
$string['pathnotcreated'] = 'O caminho da pasta {$a} não pôde ser criado na conta do sistema.';
$string['pluginname'] = 'Nextcloud';
$string['pluginname_help'] = 'Repositório Nextcloud';
$string['privacy:metadata'] = 'O módulo repositório Nextcloud não armazena nem transmite quaisquer dados pessoais do utilizador para o sistema remoto.';
$string['request_exception'] = 'Falhou o pedido para {$a->instance}. {$a->errormessage}';
$string['requestnotexecuted'] = 'A solicitação não pôde ser executada. Se isto acontecer repetidamente, contacte o administrador do site.';
$string['right_issuers'] = 'Os endpoints necessários são implementados pelos seguintes emissores: <br>{$a}';
$string['supportedreturntypes'] = 'Ficheiros suportados';
