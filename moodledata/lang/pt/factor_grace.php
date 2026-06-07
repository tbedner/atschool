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
 * Strings for component 'factor_grace', language 'pt', version '4.4'.
 *
 * @package     factor_grace
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['info'] = 'Permite autenticação sem outro fator durante um intervalo de tempo especificado.';
$string['pluginname'] = 'Período de carência';
$string['preferences'] = 'Preferências do utilizador';
$string['privacy:metadata'] = 'O módulo Fator Período de carência não armazena quaisquer dados pessoais.';
$string['redirectsetup'] = 'Tem de concluir a configuração da autenticação multifator antes de prosseguir.';
$string['revokeexpiredfactors'] = 'Revogação de fatores com período de carência expirados';
$string['settings:customwarning'] = 'Conteúdo do banner de aviso';
$string['settings:customwarning_help'] = 'Adicione conteúdo aqui para substituir a notificação de aviso do período de carência por conteúdo HTML personalizado. Adicionar {timeremaining} no texto será substituído pela duração do período de carência atual do utilizador e {setuplink} será substituído pelo URL da página de configuração do utilizador.';
$string['settings:forcesetup'] = 'Forçar configuração do fator';
$string['settings:forcesetup_help'] = 'Força o utilizador a aceder a página de preferências para configurar a autenticação multifator quando o período de carência expirar. Se estiver desativada, os utilizadores não poderão autenticarem-se quando o período de carência expirar.';
$string['settings:graceperiod'] = 'Período de carência';
$string['settings:graceperiod_help'] = 'Intervalo de tempo em que os utilizadores podem aceder ao Moodle sem fatores configurados e ativados.';
$string['settings:ignorelist'] = 'Fatores ignorados';
$string['settings:ignorelist_help'] = 'O período de carência não dará pontos se houver outros fatores que os utilizadores possam usar para se autenticarem com autenticação multifator. Quaisquer fatores aqui não serão considerados no período de carência ao decidir se devem, ou não, ser dados pontos. Isto pode permitir que seja possível a autenticação se outro fator, como o E-mail, tiver com problemas de configuração ou por erros do sistema.';
$string['setupfactors'] = 'Está atualmente no período de carência e pode não ter fatores configurados em número suficientes para autenticar-se quando o período de carência terminar. Visite a página {$a->url} para verificar o seu estado de autenticação e configurar mais fatores de autenticação. O seu período de carência expira em {$a->time}.';
$string['summarycondition'] = 'está dentro do período de carência';
