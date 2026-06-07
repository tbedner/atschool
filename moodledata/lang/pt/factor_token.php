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
 * Strings for component 'factor_token', language 'pt', version '4.4'.
 *
 * @package     factor_token
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['event:token_created'] = 'Criado token da MFA.';
$string['form:trust'] = 'Confiar neste dispositivo durante {$a}.';
$string['pluginname'] = 'Confiar neste dispositivo';
$string['privacy:metadata'] = 'O módulo Fator Confiar neste dispositivo não armazena quaisquer dados pessoais.';
$string['settings:expireovernight'] = 'Expirar a confiança durante a noite';
$string['settings:expireovernight_help'] = 'Força os tokens a expirarem durante a noite, evitando interrupções para os utilizadores durante o dia. Em vez disso, os utilizadores serão solicitados a autenticarem-se com autenticação multifator no início do dia após o fim do prazo.';
$string['settings:expiry'] = 'Duração da confiança';
$string['settings:expiry_help'] = 'A duração em que um dispositivo é confiável antes de exigir uma nova autenticação multifator.';
$string['summarycondition'] = 'o utilizador já confiou este dispositivo';
$string['tokenstoredindevice'] = 'O utilizador com ID {$a->userid} tinha um token de autenticação multifator armazenado no seu dispositivo. <br> Informação: {$a->string}.';
