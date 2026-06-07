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
 * Strings for component 'childcourse', language 'pt', version '4.4'.
 *
 * @package     childcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoenrol'] = 'Inscrição automática ao aceder';
$string['autoenrol_help'] = 'Se activado, o plugin inscreve automaticamente o utilizador no curso filho quando este o abre através desta actividade. As inscrições são criadas através de uma instância dedicada de Inscrição manual, para que possam ser acompanhadas e revertidas com segurança mais tarde (dependendo da política de remoção). Se desactivado, o plugin não tentará inscrever utilizadores automaticamente.';
$string['childcourse'] = 'Curso filho';
$string['childcourse:addinstance'] = 'Adicionar uma nova actividade de curso filho';
$string['childcourse:manage'] = 'Gerir definições do curso filho';
$string['childcourse:sync'] = 'Sincronizar nota e conclusão do curso filho';
$string['childcourse:view'] = 'Ver actividade do curso filho';
$string['childcourse_help'] = 'Seleccione o curso que será associado a esta actividade. Esta escolha controla todas as definições específicas das regras (grupos, regras de conclusão, seletores de actividade, sincronização de notas). Após a actividade ser guardada, o curso filho torna-se imutável para manter os mapeamentos e o histórico de sincronização consistentes.';
$string['childcoursenotset'] = 'O curso filho não foi definido.';
$string['completionmissing'] = 'A conclusão do curso filho não está activada.';
$string['completionrule'] = 'Regra de conclusão baseada no curso filho';
$string['completionrule_allactivities'] = 'Concluir quando 100% das actividades acompanhadas estiverem concluídas';
$string['completionrule_coursecompleted'] = 'Concluir quando o curso filho estiver concluído';
$string['completionrule_help'] = 'Define como esta actividade é automaticamente assinalada como concluída com base no progresso do utilizador no curso filho.

- **Não fazer nada:** a conclusão desta actividade não tem relação com a conclusão do curso filho.
- **Quando o curso filho estiver concluído:** assim que o curso filho estiver concluído, esta actividade também fica concluída.
- **Quando 100% das actividades acompanhadas estiverem concluídas:** todas as actividades no curso filho com acompanhamento de conclusão activado devem ser concluídas para que esta actividade seja concluída.';
$string['completionrule_none'] = 'Não fazer nada';
$string['enrolinstancename'] = 'Ligação do curso filho #{$a}';
$string['error_manualenrolnotavailable'] = 'O plugin de Inscrição manual não está disponível.';
$string['grade_approval'] = 'Enviar nota de';
$string['grade_approval_no'] = 'Não enviar nota';
$string['grade_approval_yes'] = 'Usar a nota do curso filho';
$string['gradebookmissing'] = 'O livro de notas do curso filho não está configurado (falta o total do curso).';
$string['hideinmycourses'] = 'Ocultar curso filho em Os meus cursos';
$string['hideinmycourses_help'] = 'Se activado, os utilizadores inscritos por esta actividade terão o curso filho oculto no menu "Os meus cursos". Isto ajuda a impor a navegação através deste curso. Esta definição afecta apenas os utilizadores inscritos por este plugin (acompanhados pelo plugin).';
$string['inheritgroups'] = 'Herdar grupos do curso pai';
$string['inheritgroups_help'] = 'Se activado, o plugin tentará replicar as pertenças do utilizador a grupos do curso pai para o curso filho, correspondendo pelos nomes dos grupos. Se um nome de grupo não existir no curso filho, poderá ser criado. Isto é aplicado durante a inscrição automática. Não é uma sincronização contínua, a menos que implemente mais tarde uma rotina dedicada de resincronização.';
$string['keeprole'] = 'Manter função (estudante/professor)';
$string['keeprole_help'] = 'Se activado, o plugin tentará manter uma paridade simplificada de funções: utilizadores com capacidades de nível de professor no curso pai serão inscritos como professor (editingteacher/teacher quando disponíveis); caso contrário, como estudante. Isto não copia funções personalizadas nem atribuições de funções complexas.';
$string['label_childcourse'] = 'Curso filho';
$string['label_lastsynccompletion'] = 'Última sincronização de conclusão';
$string['label_lastsyncgrade'] = 'Última sincronização de notas';
$string['lastsync'] = 'Última sincronização';
$string['lockedcoursewarning'] = 'O curso filho não pode ser alterado após guardar.';
$string['manage_header_actions'] = 'Acções';
$string['manage_header_name'] = 'Nome';
$string['missingcourse'] = 'Curso em falta';
$string['modulename'] = 'Curso filho';
$string['modulenameplural'] = 'Cursos filho';
$string['never'] = 'Nunca';
$string['nogroup'] = 'Sem grupo';
$string['openchildcourse'] = 'Abrir curso filho';
$string['opennewtab'] = 'Abrir num novo separador';
$string['opennewtab_help'] = 'Se activado, o botão abrirá o curso filho num novo separador. Isto não altera o comportamento de inscrição ou de sincronização, apenas a forma como o curso é aberto para o utilizador.';
$string['pluginadministration'] = 'Administração do curso filho';
$string['pluginname'] = 'Curso filho';
$string['privacy:metadata:childcourse_map'] = 'Armazena dados de mapeamento criados pela actividade de curso associada para permitir cancelamento de inscrição seguro e auditoria.';
$string['privacy:metadata:childcourse_map:childcourseid'] = 'O ID do curso filho que foi associado.';
$string['privacy:metadata:childcourse_map:childcourseinstanceid'] = 'O ID da instância da actividade de curso associada.';
$string['privacy:metadata:childcourse_map:groupidsjson'] = 'A lista de IDs de grupos do curso filho atribuídos pelo plugin (JSON).';
$string['privacy:metadata:childcourse_map:hiddenprefset'] = 'Indica se o plugin definiu a preferência para ocultar o curso filho em Os meus cursos.';
$string['privacy:metadata:childcourse_map:manualenrolid'] = 'O ID da instância de inscrição usada pelo plugin para inscrever o utilizador.';
$string['privacy:metadata:childcourse_map:parentcourseid'] = 'O ID do curso pai onde a actividade existe.';
$string['privacy:metadata:childcourse_map:roleid'] = 'O ID da função atribuída pelo plugin no curso filho.';
$string['privacy:metadata:childcourse_map:timeenrolled'] = 'O momento em que o utilizador foi inscrito através da ligação.';
$string['privacy:metadata:childcourse_map:timemodified'] = 'O momento da última modificação do registo de mapeamento.';
$string['privacy:metadata:childcourse_map:userid'] = 'O ID do utilizador inscrito através da ligação.';
$string['privacy:metadata:childcourse_state'] = 'Armazena, por utilizador, o estado em cache para suportar a sincronização incremental de notas e conclusão.';
$string['privacy:metadata:childcourse_state:childcourseinstanceid'] = 'O ID da instância da actividade de curso associada.';
$string['privacy:metadata:childcourse_state:coursecompleted'] = 'Indicador em cache de se a regra de conclusão foi satisfeita para o utilizador.';
$string['privacy:metadata:childcourse_state:coursecompletiontimemodified'] = 'Carimbo de data/hora da última modificação dos dados de conclusão de origem para sincronização incremental.';
$string['privacy:metadata:childcourse_state:finalgrade'] = 'Nota em cache (percentagem) sincronizada a partir do total do curso filho.';
$string['privacy:metadata:childcourse_state:grade_source'] = 'Identificador da origem da nota (por ex., course_total).';
$string['privacy:metadata:childcourse_state:gradeitemtimemodified'] = 'Carimbo de data/hora da última modificação do item de nota de origem para sincronização incremental.';
$string['privacy:metadata:childcourse_state:timemodified'] = 'O momento da última modificação da linha de estado em cache.';
$string['privacy:metadata:childcourse_state:userid'] = 'O ID do utilizador.';
$string['privacy:metadata:userpreference:block_myoverview_hidden_course'] = 'Uma preferência do utilizador usada para ocultar um curso filho em Os meus cursos (nome predefinido da preferência: block_myoverview_hidden_course_{courseid}).';
$string['settings_heading'] = 'Definições do curso filho';
$string['syncdone'] = 'Sincronização concluída.';
$string['syncnow'] = 'Sincronizar agora';
$string['targetgroup'] = 'Inscrever no grupo';
$string['targetgroup_help'] = 'Se seleccionado, o utilizador será adicionado a este grupo específico no curso filho no momento da inscrição automática. O grupo tem de existir no curso filho. Se "Herdar grupos do curso pai" também estiver activado, ambos os comportamentos serão aplicados (o grupo seleccionado e os grupos herdados).';
$string['unenrolaction'] = 'Quando a ligação for removida';
$string['unenrolaction_help'] = 'Controla o que acontece às inscrições criadas por esta actividade quando a actividade associada é eliminada. "Cancelar inscrição" removerá apenas as inscrições que foram criadas por esta actividade (acompanhadas na tabela de mapeamento). "Manter inscrições" deixará os utilizadores inscritos no curso filho.';
$string['unenrolaction_keep'] = 'Manter inscrições';
$string['unenrolaction_unenrol'] = 'Cancelar a inscrição dos utilizadores inscritos por esta ligação';
