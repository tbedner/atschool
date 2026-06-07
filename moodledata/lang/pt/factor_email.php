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
 * Strings for component 'factor_email', language 'pt', version '4.4'.
 *
 * @package     factor_email
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['email:accident'] = 'Se não solicitou o e-mail, clique em continuar para invalidar a tentativa de autenticação. Se clicou na hiperligação por acidente, clique em cancelar e nenhuma ação será executada.';
$string['email:browseragent'] = 'Os detalhes do navegador para esta solicitação são: \'{$a}\'';
$string['email:geoinfo'] = 'Esta solicitação parece ter sido criada em (aproximadamente):';
$string['email:greeting'] = 'Olá {$a} 👋';
$string['email:ipinfo'] = 'Detalhes da solicitação de autenticação:';
$string['email:link'] = 'hiperligação de verificação';
$string['email:loginlink'] = 'Ou, se estiver no mesmo dispositivo, use este {$a}.';
$string['email:message'] = 'O seu código de verificação para {$a->sitename} ({$a->siteurl}).';
$string['email:originatingip'] = 'Esta solicitação de autenticação foi feita desde \'{$a}\'';
$string['email:revokelink'] = 'Se não fez esta solicitação, pode {$a}.';
$string['email:revokesuccess'] = 'Este código foi revogado com sucesso. Todas as sessões deste utilizador foram terminadas.
O E-mail não poderá ser usado como fator até que a segurança da conta seja verificada.';
$string['email:stoploginlink'] = 'parar esta tentativa de autenticação';
$string['email:subject'] = 'O seu código de verificação';
$string['email:uadescription'] = 'Identidade do navegador desta solicitação:';
$string['email:validity'] = 'O código só pode ser usado uma vez e é válido por {$a}.';
$string['error:badcode'] = 'O código não foi encontrado. A hiperligação pode ser antiga, um novo código pode ter sido enviado por e-mail ou a tentativa de autenticação com este código foi bem-sucedida.';
$string['error:parameters'] = 'Parâmetros da página incorretos.';
$string['error:wrongverification'] = 'Código incorreto. Tente novamente.';
$string['event:unauthemail'] = 'Recebido e-mail não autorizado';
$string['info'] = 'Está a usar o e-mail {$a} para autenticação. Foi configurado pelo administrador do site.';
$string['logindesc'] = 'Foi enviado um código de 6 dígitos para o seu e-mail: {$a}';
$string['loginoption'] = 'Usar código recebido por e-mail';
$string['loginskip'] = 'Não recebi o código';
$string['loginsubmit'] = 'Continuar';
$string['logintitle'] = 'Confirmar identidade por e-mail';
$string['managefactor'] = 'Gerir e-mail';
$string['manageinfo'] = '\'{$a}\' está a ser usado para autenticação. Foi configurado pelo seu administrador.';
$string['pluginname'] = 'E-mail';
$string['privacy:metadata'] = 'O módulo Fator E-Mail não armazena quaisquer dados pessoais.';
$string['settings:duration'] = 'Validade';
$string['settings:duration_help'] = 'O intervalo de tempo em que o código é válido.';
$string['settings:suspend'] = 'Suspender contas não autorizadas';
$string['settings:suspend_help'] = 'Se ativar esta opção, as contas de utilizadores serão suspendas se for recebida uma verificação por  e-mail não autorizado.';
$string['setupfactor'] = 'Configurar e-mail';
$string['summarycondition'] = 'tem configuração de e-mail válida';
$string['unauthemail'] = 'E-mail não autorizado';
$string['unauthloginattempt'] = 'O utilizador com o ID {$a->userid} fez uma tentativa de autenticação não autorizada usando a verificação por e-mail desde o IP {$a->ip} com agente navegador {$a->useragent}.';
$string['verificationcode'] = 'Insira o código de verificação para confirmação';
$string['verificationcode_help'] = 'Foi enviado para o seu endereço de e-mail um código de verificação.';
