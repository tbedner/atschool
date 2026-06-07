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
 * Strings for component 'factor_webauthn', language 'pt', version '4.4'.
 *
 * @package     factor_webauthn
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = 'Gerir chave de segurança';
$string['action:revoke'] = 'Remover chave de segurança';
$string['authenticator:ble'] = 'BLE';
$string['authenticator:hybrid'] = 'Híbrido';
$string['authenticator:internal'] = 'Interno';
$string['authenticator:nfc'] = 'NFC';
$string['authenticator:usb'] = 'USB';
$string['authenticatorname'] = 'Nome da chave de segurança';
$string['error'] = 'Falha na autenticação';
$string['error:alreadyregistered'] = 'Esta chave de segurança já foi registada.';
$string['info'] = 'Usar uma chave de segurança física ou leitor de impressões digitais.';
$string['logindesc'] = 'Clique em continuar para usar a sua chave de segurança.';
$string['loginoption'] = 'Usar chave de segurança';
$string['loginskip'] = 'Não tenho a minha chave de segurança';
$string['loginsubmit'] = 'Continuar';
$string['logintitle'] = 'Confirmar identidade por chave de segurança';
$string['managefactor'] = 'Gerir chave de segurança';
$string['managefactorbutton'] = 'Gerir';
$string['manageinfo'] = 'Está a usar \'{$a}\' para autenticação.';
$string['pluginname'] = 'Chave de segurança';
$string['privacy:metadata'] = 'O módulo Fator Chave de segurança não armazena quaisquer dados pessoais.';
$string['register'] = 'Registar chave de segurança';
$string['replacefactor'] = 'Substituir chave de segurança';
$string['replacefactorconfirmation'] = 'Pretende substituir a chave de segurança \'{$a}\'?';
$string['revokefactorconfirmation'] = 'Pretende remover a chave de segurança \'{$a}\'?';
$string['settings:authenticatortypes'] = 'Tipos de autenticador';
$string['settings:authenticatortypes_help'] = 'Alternar certos tipos de autenticadores';
$string['settings:userverification'] = 'Verificação do utilizador';
$string['settings:userverification_help'] = 'Serve para garantir que a pessoa que está a autenticar-se é de facto quem diz ser. A verificação do utilizador pode assumir várias formas, como senha, PIN, impressão digital, etc.';
$string['setupfactor'] = 'Configurar chave de segurança';
$string['setupfactor:instructionsregistersecuritykey'] = '2. Registar a chave de segurança.';
$string['setupfactor:instructionssecuritykeyname'] = '1. Dar um nome à sua chave.';
$string['setupfactor:intro'] = 'A chave de segurança é um dispositivo físico que pode usar para se autenticar. As chaves de segurança podem ser tokens USB, dispositivos Bluetooth ou até leitores de impressões digitais integrados no seu telefone ou computador.';
$string['setupfactor:securitykeyinfo'] = 'Ajuda a identificar qual chave de segurança está a usar.';
$string['setupfactorbutton'] = 'Configurar';
$string['summarycondition'] = 'usar um autenticador compatível com WebAuthn';
$string['userverification:discouraged'] = 'A verificação do utilizador não deve ser utilizada, por exemplo, para minimizar a interação do utilizador';
$string['userverification:preferred'] = 'É preferida a verificação do utilizador, a autenticação não falhará se a verificação do utilizador estiver em falta';
$string['userverification:required'] = 'A verificação do utilizador é obrigatória (por exemplo, por PIN). A autenticação falha se a chave não tiver verificação do utilizador';
