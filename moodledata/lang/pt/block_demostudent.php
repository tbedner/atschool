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
 * Strings for component 'block_demostudent', language 'pt', version '4.4'.
 *
 * @package     block_demostudent
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adviceforfirstuse'] = 'Criar uma conta \'Aluno de demonstração\' inscreve um utilizador com o nome \'Aluno de demonstração\' na sua disciplina.<p>Poderá autenticar-se como aluno de demonstração para testar diferentes experiências dos alunos na disciplina.</p>';
$string['adviceforinstructor'] = 'Uma conta \'Aluno de demonstração\' foi criada nesta disciplina.
Alternar para a conta \'Aluno de demonstração\' permitirá: <blockquote>
<ul>
<li>Visualizar a disciplina como aluno
<li>Testar as restrições de grupo com base na associação ao grupo
<li>Testar atividades assumindo plenamente o papel de aluno
</ul> </blockquote>';
$string['advicetwowindows'] = '<p>Dois navegadores autenticados no Moodle,<br>
um como instrutor e o outro como gémeo \'Aluno de demonstração\',<br>
irão prevenir a interminável ação da mudança de utilizador,<br>
de uma visualização para a outra, para frente e para trás.';
$string['buttonfordemostudent'] = 'Voltar para a vista do <b>Instrutor</b>';
$string['buttonforfirstuse'] = 'Criar \'Aluno de demonstração\'';
$string['buttonforinstructor'] = 'Alternar para \'Aluno de demonstração\'';
$string['buttonforunenrol'] = 'Cancelar a inscrição do aluno de demonstração';
$string['demostudent'] = 'Vista do \'Aluno de demonstração\'';
$string['demostudent:addinstance'] = 'Adicionar um novo bloco \'Aluno de demonstração\' (apenas para instrutores)';
$string['demostudent:seedemostudentblock'] = 'Visualizar o bloco \'Aluno de demonstração\' (instrutores e alunos de demonstração)';
$string['errorfailedtocreateuser'] = '<hr><h4>ERRO:</h4> o utilizador <b>{$a}</b> não pode ser criado';
$string['errorinstructormasquerade'] = '<hr><h4>ERRO:</h4> uma conta \'Aluno de demonstração\' não pode visualizar a disciplina como instrutor.<p>Autentique-se novamente.<hr>';
$string['errormissingaddinstancecapability'] = '<hr><h4>ERRO:</h4> tem de ter a permissão <i>block/demostudent:addinstance</i> para criar uma conta \'Aluno de demonstração\'.<p>Peça a um administrador para verificar o seu papel e respetivas permissões.<p>Autentique-se novamente.<hr>';
$string['errorremovenotinstructor'] = '<hr><h4>ERRO:</h4> apenas o instrutor pode remover o seu próprio Aluno de demonstração.<p>Autentique-se novamente.<hr>';
$string['pluginname'] = 'Aluno de demonstração';
$string['privacy:metadata'] = 'O bloco Aluno de demonstração não está configurado para ser compatível com GDPR.';
$string['returntocourse'] = '<p><a href="{$a}">Voltar</a> para a disciplina';
$string['roledemostudentdescription'] = 'Papel atribuído a contas criadas pelo bloco \'Aluno de demonstração\' para que os professores/instrutores testem as suas disciplinas.';
$string['roledemostudentname'] = 'Aluno de demonstração';
$string['switchfromdemostudentview'] = 'Voltar à vista do instrutor. Talvez seja necessário autenticar-se novamente.';
$string['switchfromfirstuseview'] = 'Criar e inscrever o aluno de demonstração nesta disciplina';
$string['switchfrominstructorview'] = 'Visualizar a disciplina como aluno de demonstração';
$string['unenroltip'] = 'Remover o aluno de demonstração desta disciplina';
$string['viewisdemostudent'] = 'Visualização da disciplina como <b>Aluno de demonstração</b>';
$string['viewisfirstuse'] = 'Visualização da disciplina como <b>Instrutor</b>';
$string['viewisinstructor'] = 'Visualização da disciplina como <b>Instrutor</b>';
$string['warningcoursenotvisible'] = '<hr><h4>Esta disciplina não está disponível para os alunos.</h4>
Os instrutores podem editar as configurações da disciplina para alterar a situação.<hr>';
$string['warningmissingrole'] = '<hr><h4>AVISO:</h4> não foi encontrado na base de dados o papel "demostudent".
Este erro pode provocar um comportamento inesperado do bloco \'Aluno de demonstração\'.
Peça a um administrador para verificar os papéis do sistema e reinstale o módulo, se necessário.<hr>';
