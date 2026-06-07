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
 * Strings for component 'format_redirected', language 'pt', version '4.4'.
 *
 * @package     format_redirected
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['course_redirected_from'] = 'Esta disciplina foi redirecionada de: {$a}';
$string['format_redirected_defaultnoticeforstudents'] = 'O professor uniu várias disciplinas do Moodle noutras disciplinas partilhadas. Abaixo estão as disciplinas onde ocorre efetivamente o ensino.';
$string['format_redirected_defaultnoticeforteachers'] = 'Se alterar o formato da disciplina, os seus alunos poderão entrar nesta disciplina e também na disciplina fundida. Ambos os espaços são diferentes e separados. Pode provocar confusão.';
$string['format_redirected_noticeforstudents'] = 'Mensagem para o público em geral';
$string['format_redirected_noticeforstudents_desc'] = 'Texto a ser mostrado a todos os utilizadores na página de redirecionamento. Está projetado para informar o motivo do redirecionamento.';
$string['format_redirected_noticeforteachers'] = 'Mensagem para professores';
$string['format_redirected_noticeforteachers_desc'] = 'Texto a ser mostrado aos professores na página de redirecionamento.';
$string['metalinked'] = 'Esta disciplina liga às seguintes disciplinas:';
$string['metalinktext'] = '<div>Data da fusão: {$a->creationtime}</div>';
$string['notredirected_error'] = 'Esta disciplina está configurada incorretamente como "Redirecionado", mas não é possível qualquer nenhum redirecionamento. É necessária a intervenção do professor ou do administrador.';
$string['pluginname'] = 'Formato Redirecionado';
$string['privacy:metadata'] = 'O módulo Formato Redirecionado não armazena quaisquer dados pessoais.';
$string['redirectedcourse'] = 'Esta disciplina está configurada como "Redirecionado".';
$string['redirectedhelp'] = 'Este formato de disciplina redireciona os alunos para um ou mais disciplinas. Se houver apenas uma disciplina de destino, o redirecionamento é feito automaticamente. Caso contrário,  é mostrada uma lista de hiperligações para as disciplinas de destino.';
