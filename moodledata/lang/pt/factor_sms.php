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
 * Strings for component 'factor_sms', language 'pt', version '4.4'.
 *
 * @package     factor_sms
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = 'Gerir número de telemóvel';
$string['action:revoke'] = 'Remover número de telemóvel';
$string['addnumber'] = 'Número de telemóvel';
$string['clientnotfound'] = 'Cliente de serviço AWS não encontrado. O cliente deve ser um nome de classe totalmente qualificado, por exemplo: \\Aws\\S3\\S3Cliente';
$string['editphonenumber'] = 'Editar número de telemóvel';
$string['editphonenumberinfo'] = 'Se não recebeu o código ou indicou o número incorreto, edite o número e tente novamente.';
$string['error:emptyverification'] = 'Código em branco. Tente novamente.';
$string['error:wrongphonenumber'] = 'O número fornecido não está num formato válido.';
$string['error:wrongverification'] = 'Código incorreto. Tente novamente.';
$string['errorawsconection'] = 'Ocorreu um erro ao ligar ao servidor AWS: {$a}';
$string['errorsmssent'] = 'Erro ao enviar a mensagem SMS com o seu código de verificação.';
$string['event:smssent'] = 'SMS enviado.';
$string['event:smssentdescription'] = 'O utilizador com ID {$a->userid} recebeu um código de verificação via SMS. Informação: {$a->debuginfo}';
$string['info'] = 'Enviar um código de verificação para o número de telemóvel que escolheu.';
$string['logindesc'] = 'Foi enviado um SMS com um código de 6 dígitos para o número de telemóvel {$a}';
$string['loginoption'] = 'Usar código recebido por SMS';
$string['loginskip'] = 'Não recebi o código';
$string['loginsubmit'] = 'Continuar';
$string['logintitle'] = 'Insira o código de verificação enviado para o seu telemóvel';
$string['managefactor'] = 'Gerir SMS';
$string['managefactorbutton'] = 'Gerir';
$string['manageinfo'] = 'Está a usar \'{$a}\' para autenticação.';
$string['phonehelp'] = 'Digite o número do seu telemóvel (incluindo o código do país) para receber um código de verificação.';
$string['pluginname'] = 'SMS';
$string['privacy:metadata'] = 'O módulo Fator SMS não armazena quaisquer dados pessoais.';
$string['revokefactorconfirmation'] = 'Remover \'{$a}\' das SMS?';
$string['settings:aws'] = 'AWS SNS';
$string['settings:aws:key'] = 'Chave';
$string['settings:aws:key_help'] = 'Chave da API da Amazon.';
$string['settings:aws:region'] = 'Região';
$string['settings:aws:region_help'] = 'Região da gateway da API da Amazon.';
$string['settings:aws:secret'] = 'Chave secreta';
$string['settings:aws:secret_help'] = 'Chave secreta da API da Amazon.';
$string['settings:aws:usecredchain'] = 'Encontrar as credenciais da AWS através da cadeia de fornecedores de credenciais predefinida';
$string['settings:countrycode'] = 'Código do país';
$string['settings:countrycode_help'] = 'O código de chamada sem o + inicial como predefinição se os utilizadores não inserirem um número internacional com um prefixo +.

Lista de códigos de chamada: {$a}';
$string['settings:duration'] = 'Prazo de validade';
$string['settings:duration_help'] = 'O intervalo de tempo em que o código é válido.';
$string['settings:gateway'] = 'Gateway SMS';
$string['settings:gateway_help'] = 'O fornecedor de SMS pelo qual serão enviadas as mensagens';
$string['setupfactor'] = 'Configurar SMS';
$string['setupfactorbutton'] = 'Configurar';
$string['setupsubmitcode'] = 'Guardar';
$string['setupsubmitphone'] = 'Enviar código';
$string['smsstring'] = '{$a->code} é o seu código de segurança único {$a->fullname}.

@{$a->url} #{$a->code}';
$string['summarycondition'] = 'Usar um código de segurança único por SMS';
