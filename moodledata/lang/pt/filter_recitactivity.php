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
 * Strings for component 'filter_recitactivity', language 'pt', version '4.4'.
 *
 * @package     filter_recitactivity
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['character'] = 'Caráter separador';
$string['character_desc'] = 'Representa o caráter separador usado no filtro.
    <br>Se o caráter for <b style="color:red">/</b>, o filtro irá procurá-lo em [[i<b style="color:red">/</b>activityname]].
	<br>Todos os indicadores (<b style="color:red"> i/, c/, d/, b/, s/</b>) têm de ter no início dois parênteses retos <b style="color:red">[[</b>.
    <br><br><b>Códigos de utilização</b>
    <ul>
	<li>Hiperligação do nome da atividade: [[activityname]]</li>
	<li>Hiperligação do nome da atividade com ícone: [[<b style="color:red">i/</b>activityname]]</li>
	<li>Hiperligação do nome da atividade com caixa de verificação: [[<b style="color:red">c/</b>activityname]]</li>
    <li>Hiperligação do nome da atividade com ícone e caixa de verificação: [[<b style="color:red">i/c/</b>activityname]]</li>
    <li>Alterar nome da hiperligação: [[/i/c/desc:"Name"/]]activityname</li>
    <li>Adicionar classes CSS: [[/i/c/class:"btn btn-primary"/]]</li>
    <li>Abrir a hiperligação para uma atividade num outro separador: [[<b style="color:red">c/b/</b>activityname]] ou [[<b style="color:red">i/c/b/</b>activityname]]</li>
    <li>Hiperligação para uma secção: [[<b style="color: red">s/</b>sectionname]] ou [[<b style="color: red">s/</b>/6]] para ir para a secção 6 se o nome não for personalizado (não pode ser usado no modo de edição).</li>
	<li>Informações da disciplina: [[<b style="color:red">d/</b>course.fullname]], [[<b style="color:red">d/</b>course.shortname]]</li>
	<li>Nome, apelido, e-mail e avatar do aluno: [[<b style="color:red">d/</b>user.firstname]], [[<b style="color:red">d/</b>user.lastname]], [[<b style="color:red">d/</b>user.email]] e [[<b style="color:red">d/</b>user.picture]]</li>
	<li>Nome, apelido, e-mail e avatar do primeiro professor: [[<b style="color:red">d/</b>teacher1.firstname]], [[<b style="color:red">d/</b>teacher1.lastname]], [[<b style="color:red">d/</b>teacher1.email]] e [[<b style="color:red">d/</b>teacher1.picture]]. O professor tem de estar no grupo para que o seu nome apareça.</li>
    <li>O mesmo para o professor2, professor3, ... para todos os professores da disciplina.</li>
    <li>Hiperligação para conteúdo H5P: [[<b style="color:red">h5p/</b>Name of H5P]]</li>
    </ul>';
$string['filtername'] = 'Hiperligação RECIT';
$string['noteacheringroup'] = 'Professor não definido';
$string['pluginname'] = 'Hiperligação RECIT';
$string['privacy:metadata'] = 'O módulo Hiperligação RECIT não armazena quaisquer dados pessoais.';
$string['recitactivity:teacher'] = 'Mostrar nome do professor';
$string['teacherbygroup'] = 'Mostrar professores apenas dos grupos do utilizador';
$string['teacherbygroup_desc'] = 'Se desativar esta opção, d/teacher exibirá todos os professores da disciplina, independentemente do grupo';
