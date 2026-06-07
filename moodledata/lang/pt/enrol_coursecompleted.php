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
 * Strings for component 'enrol_coursecompleted', language 'pt', version '4.4'.
 *
 * @package     enrol_coursecompleted
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftercourse'] = 'Depois de concluir a disciplina: {$a}';
$string['cachedef_compcourses'] = 'Cache da inscrição após conclusão de disciplina';
$string['compcourse'] = 'Disciplina concluída';
$string['compcourse_help'] = 'Que disciplinas devem estar concluídas.';
$string['confirmbulkdeleteenrolment'] = 'Tem a certeza de que pretende apagar as inscrições deste utilizador?';
$string['confirmbulkediteenrolment'] = 'Tem a certeza de que pretende alterar as inscrições deste utilizador?';
$string['coursecompleted:config'] = 'Configurar as instâncias de inscrição após conclusão de disciplina';
$string['coursecompleted:enrolpast'] = 'Inscrever utilizadores que completaram a disciplina no passado.';
$string['coursecompleted:manage'] = 'Gestão dos utilizadores inscritos';
$string['coursecompleted:unenrol'] = 'Cancelar inscrição de utilizadores da disciplina';
$string['coursecompleted:unenrolself'] = 'Cancelar a própria inscrição da disciplina';
$string['customwelcome'] = 'Mensagem de boas-vindas personalizada';
$string['customwelcome_help'] = 'Uma mensagem de boas-vindas personalizada pode ser adicionada com texto sem formatação ou no formato automático do Moodle, incluindo tags HTML e tags em vários idiomas (multilingue).

Podem ser incluídos na mensagem os seguintes espaços reservados:

* Nome da disciplina: {$a->coursename}
* Nome da disciplina concluída: {$a->completed}
* Hiperligação para a página de perfil do utilizador: {$a->profileurl}
* E-mail do utilizador: {$a->email}
* Nome completo do utilizador: {$a->fullname}';
$string['defaultrole'] = 'Atribuição de papel predefinido';
$string['defaultrole_desc'] = 'Selecione o papel a atribuir aos utilizadores quando estiverem inscritos.';
$string['deleteselectedusers'] = 'Apagar as inscrições selecionadas após conclusão da disciplina';
$string['editselectedusers'] = 'Editar as inscrições selecionadas após conclusão da disciplina';
$string['editusers'] = 'Alterar inscrições do utilizador';
$string['group'] = 'Manter grupo';
$string['group_help'] = 'Tentar adicionar os utilizadores a um grupo com o mesmo nome';
$string['keepgroup'] = 'Configuração predefinida para manter grupo';
$string['keepgroup_help'] = 'Por definição, tentar adicionar os utilizadores a um grupo com o mesmo nome';
$string['pluginname'] = 'Inscrição após conclusão de disciplina';
$string['pluginname_desc'] = 'O módulo Inscrição após conclusão permite o acesso a disciplinas após ter concluído outra(s) disciplina(s).';
$string['privacy:metadata'] = 'O módulo Inscrição após conclusão de disciplina não armazena quaisquer dados pessoais.';
$string['processexpirationstask'] = 'Expiração da inscrição após conclusão de disciplina';
$string['status'] = 'Ativa';
$string['status_desc'] = 'Permitir, por predefinição, a inscrição após conclusão de disciplina.';
$string['status_help'] = 'Esta configuração determina se está ativa a inscrição após a conclusão.';
$string['status_link'] = 'enrol/coursecompleted';
$string['svglearnpath'] = 'Mostrar caminho da aprendizagem';
$string['svglearnpath_help'] = 'Mostrar (se possível) o caminho da aprendizagem usando ícones svg.';
$string['unenrolusers'] = 'Cancelar inscrição de utilizadores';
$string['uponcompleting'] = 'Ao concluir a disciplina \'{$a}\'';
$string['usersenrolled'] = '{$a} utilizadores inscritos';
$string['welcome'] = 'Enviar mensagem de boas-vindas';
$string['welcome_help'] = 'Quando um utilizador é inscrito numa disciplina após concluir outra disciplina, pode ser enviado um e-mail com uma mensagem de boas-vindas.';
$string['welcometocourse'] = 'Bem-vindo(a) à disciplina \'{$a->coursename}\'!

Parabéns!

Após concluir com sucesso a disciplina \'{$a->completed}\', ficou automaticamente inscrito na disciplina \'{$a->coursename}\'.';
$string['willbeenrolled'] = 'Será inscrito nesta disciplina quando concluir a disciplina \'{$a}\'';
