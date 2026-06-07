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
 * Strings for component 'coursechecker_userdata', language 'pt', version '4.4'.
 *
 * @package     coursechecker_userdata
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Verificação de dados do utilizador';
$string['pluginname_help'] = 'Verifica se as atividades da disciplina contêm dados residuais de utilizadores, como submissões, publicações em fóruns ou registos.';
$string['privacy:metadata'] = 'A verificação de dados do utilizador não armazena quaisquer dados pessoais. Os resultados são guardados no plugin Course Checker.';
$string['userdata_error'] = 'Não devem existir dados do utilizador na atividade {$a}.';
$string['userdata_help'] = 'Se pretender que estes dados sejam copiados para outras disciplinas, terá de os importar manualmente. Aqui estão alguns manuais úteis: <a href="https://docs.moodle.org/38/en/Backup_of_user_data" target="_blank">Cópia de segurança de dados do utilizador</a> e <a href="https://docs.moodle.org/38/en/Reusing_activities" target="_blank">Reutilização de atividades</a>.';
$string['userdata_setting_modules'] = 'Módulos ativados';
$string['userdata_setting_modules_help'] = 'Defina os módulos permitidos (têm de estar ativados em <a href="{$a}" target="_blank">Gerir atividades</a>, conter o método reset_userdata em <code>mod/{modname}/lib.php</code> e ser suportados por este plugin) que devem ser verificados quanto a dados do utilizador.';
$string['userdata_success'] = 'A atividade {$a} não contém dados do utilizador.';
