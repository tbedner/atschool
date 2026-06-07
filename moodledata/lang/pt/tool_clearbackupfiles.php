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
 * Strings for component 'tool_clearbackupfiles', language 'pt', version '4.4'.
 *
 * @package     tool_clearbackupfiles
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backupcompletedlog'] = 'Durante esta operação foram apagados {$a->filecount} ficheiros de cópia de segurança de disciplinas num total de {$a->filesize} apagados.';
$string['backupremovedlog'] = 'O ficheiro de cópia de segurança de disciplina \'{$a->filename}\' com o tamanho {$a->filesize} foi apagado.';
$string['clearbackupcompleted'] = 'Concluída a limpeza de cópias de segurança';
$string['continuetoclearbackup'] = 'Continuar para a limpeza de cópias de segurança';
$string['coursebackupremoved'] = 'Ficheiro de cópia de segurança apagado';
$string['days'] = 'Dias';
$string['daysdesc'] = 'Número de dias da cópia de segurança para limpar';
$string['filedeletedempty'] = 'Não existem ficheiros de cópia de segurança para apagar.';
$string['filedeletedfooter'] = 'No total, foram apagados {$a->filecount} ficheiros de cópia de segurança o que representa {$a->filesize} recuperados do espaço do servidor.';
$string['filedeletedheader'] = 'Durante esta operação foram apagados os seguintes ficheiros de cópia de segurança de disciplinas:';
$string['filename'] = 'Nome do ficheiro';
$string['filesize'] = 'Tamanho do ficheiro';
$string['pluginname'] = 'Apagar ficheiros de cópia de segurança';
$string['warningalert'] = 'Tem a certeza de que pretende continuar?';
$string['warningmsg'] = 'Tenha em atenção que apagar ficheiros de cópia de segurança é um processo irreversível e não será possível restaurar os ficheiros apagados.';
