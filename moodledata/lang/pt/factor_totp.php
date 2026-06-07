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
 * Strings for component 'factor_totp', language 'pt', version '4.4'.
 *
 * @package     factor_totp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = 'Gerir autenticador de senha de uso único por tempo limitado (TOTP)';
$string['action:revoke'] = 'Remover autenticador de senha de uso único por tempo limitado (TOTP)';
$string['devicename'] = 'Nome do dispositivo';
$string['devicename_help'] = 'Este é o dispositivo no qual tem uma aplicação de autenticação instalada. Pode configurar vários dispositivos e esta etiqueta ajuda a monitorizar quais deles estão a ser usados. Deve configurar cada dispositivo com um código exclusivo para que possam ser revogados separadamente.';
$string['devicenameexample'] = 'exemplo "iPhone 11 Trabalho"';
$string['error:alreadyregistered'] = 'Esta chave secreta da senha de uso único por tempo limitado (TOTP) já foi registada.';
$string['error:codealreadyused'] = 'Este código já foi usado para autenticação. Aguarde a geração de um novo código e tente novamente.';
$string['error:futurecode'] = 'Este código é inválido. Verifique se a data/hora no seu dispositivo autenticador está correta e tente novamente.
A data/hora atual do sistema é {$a}.';
$string['error:oldcode'] = 'Este código é muito antigo. Verifique se a data/hora no seu dispositivo autenticador está correta e tente novamente.
A data/hora atual do sistema é {$a}.';
$string['error:wrongverification'] = 'Código de verificação incorreto.';
$string['factorsetup'] = 'Configuração da aplicação';
$string['info'] = 'Gerar um código de verificação usando uma aplicação de autenticação.';
$string['logindesc'] = 'Use a aplicação de autenticação no seu dispositivo móvel para gerar um código.';
$string['loginoption'] = 'Usar aplicação de autenticação';
$string['loginskip'] = 'Não tenho o meu dispositivo';
$string['loginsubmit'] = 'Continuar';
$string['logintitle'] = 'Confirmar identidade através de aplicação móvel';
$string['managefactor'] = 'Gerir a aplicação de autenticação.';
$string['managefactorbutton'] = 'Gerir';
$string['manageinfo'] = 'Está a usar \'{$a}\' para autenticação.';
$string['pluginname'] = 'Aplicação de autenticação';
$string['privacy:metadata'] = 'O módulo Fator Aplicação de autenticação não armazena quaisquer dados pessoais.';
$string['replacefactor'] = 'Substituir a aplicação de autenticação';
$string['replacefactorconfirmation'] = 'Pretende substituir a aplicação de autenticação?';
$string['revokefactorconfirmation'] = 'Pretende remover a aplicação de autenticação?';
$string['settings:totplink'] = 'Mostrar hiperligação de configuração da aplicação móvel';
$string['settings:totplink_help'] = 'Se ativar esta opção, o utilizador verá uma terceira opção de configuração com uma hiperligação direta otpauth://';
$string['settings:window'] = 'Janela de verificação TOTP';
$string['settings:window_help'] = 'Durante quanto tempo cada código é válido. Pode definir um valor mais alto como solução alternativa se os relógios dos dispositivos dos utilizadores estiverem muitas vezes um pouco diferentes.
Arredonde para os 30 segundos mais próximos, que é o tempo entre novos códigos gerados.';
$string['setupfactor'] = 'Configurar aplicação de autenticação';
$string['setupfactor:account'] = 'Conta:';
$string['setupfactor:devicename'] = 'Nome do dispositivo';
$string['setupfactor:devicenameinfo'] = 'Ajuda a identificar qual dispositivo recebe o código de verificação.';
$string['setupfactor:enter'] = 'Inserir detalhes manualmente';
$string['setupfactor:instructionsdevicename'] = '1. Dar um nome ao seu dispositivo.';
$string['setupfactor:instructionsscan'] = '2. Ler o código QR com a sua aplicação de autenticação.';
$string['setupfactor:instructionsverification'] = '3. Insirir o código de verificação.';
$string['setupfactor:intro'] = 'Para configurar este método, tem de ter um dispositivo com uma aplicação de autenticação. Se não tiver uma aplicação de autenticação, poderá baixar uma. Por exemplo, <a href="https://2fas.com/" target="_blank">2FA Authenticator</a>, <a href="https://freeotp.github.io/" target="_blank ">FreeOTP Authenticator</a>, Google Authenticator, Microsoft Authenticator ou Twilio Authy Authenticator.';
$string['setupfactor:key'] = 'Chave secreta:';
$string['setupfactor:link'] = 'Ou inserir detalhes manualmente';
$string['setupfactor:link_help'] = 'Se estiver num dispositivo móvel e já tiver uma aplicação de autenticação instalada, esta hiperligação pode funcionar. Tenha em atenção que usar o TOTP no mesmo dispositivo em que se autentica pode enfraquecer os benefícios da MFA.';
$string['setupfactor:linklabel'] = 'Abra a aplicação já instalada neste dispositivo';
$string['setupfactor:mode'] = 'Modo:';
$string['setupfactor:mode:timebased'] = 'Baseada no tempo';
$string['setupfactor:scan'] = 'Ler código QR';
$string['setupfactor:scanfail'] = 'Não consegue ler?';
$string['setupfactor:scanwithapp'] = 'Leia o código QR com a aplicação de autenticação escolhida.';
$string['setupfactor:verificationcode'] = 'Código de verificação';
$string['setupfactorbutton'] = 'Configurar';
$string['summarycondition'] = 'usar uma aplicação TOTP (Time-based One-Time Password)';
$string['systimeformat'] = '%l:%M:%S %P %Z';
$string['verificationcode'] = 'Insira o seu código de verificação de 6 dígitos';
$string['verificationcode_help'] = 'Abra a sua aplicação de autenticação, como o Google Authenticator, e procure o código de 6 dígitos que corresponde a este site e o nome de utilizador';
