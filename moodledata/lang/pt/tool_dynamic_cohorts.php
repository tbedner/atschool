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
 * Strings for component 'tool_dynamic_cohorts', language 'pt', version '4.4'.
 *
 * @package     tool_dynamic_cohorts
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_rule'] = 'Nova regra';
$string['addcondition'] = 'Adicionar condição';
$string['addrule'] = 'Adicionar nova regra';
$string['after'] = 'Depois de';
$string['any'] = 'Qualquer';
$string['before'] = 'Antes de';
$string['brokenruleswarning'] = 'Existem algumas regras com erros que requerem a sua atenção. <br />Para corrigir uma regra com erros, deve remover todas as condições com erro. <br />Às vezes, uma regra apresenta erros quando falha o SQL dos utilizadores correspondentes. Neste caso, todas as condições estão OK, mas a regra é marcada com erro. Deve verificar os registos do Moodle para o evento "Erro na correspondência de utilizadores" e erros de SQL relacionados. <br />Tenha em atenção que, em qualquer caso, é necessário guardar novamente a regra para marcá-la como sem erro.';
$string['bulkprocessing'] = 'Processar em massa';
$string['bulkprocessing_help'] = 'Se ativar esta opção, os utilizadores serão adicionados e removidos do Grupo global em massa. Isto melhorará significativamente o desempenho do processamento. No entanto, usar esta opção suprimirá eventos de acionamento quando utilizadores forem adicionados ou removidos do Grupo global.';
$string['cachedef_conditionrecords'] = 'Condições para a regra';
$string['cachedef_rulesconditions'] = 'Regras com uma condição específica';
$string['cannotenablebrokenrule'] = 'Uma regra com erro não pode ser ativada';
$string['cf_include_missing_data'] = 'Incluir Grupos globais com dados em falta.';
$string['cf_include_missing_data_help'] = 'Os Grupos globais podem ainda não ter configurado um campo de dados personalizado. Esta opção inclui estes Grupos globais no resultado final.';
$string['cf_includingmissingdatadesc'] = '(inclui Grupos globais com dados em falta)';
$string['cohort'] = 'Grupo global';
$string['cohortid'] = 'Grupo global';
$string['cohortid_help'] = 'Um Grupo global para gerir como parte desta regra. Apenas são exibidos nesta lista os Grupos globais que não são geridos por outros módulos.';
$string['cohortswith'] = 'Grupos globais com campo';
$string['completiondate'] = 'Data de conclusão';
$string['completionisdisabled'] = 'A conclusão está desativada para a disciplina configurada';
$string['condition'] = 'Condição';
$string['condition:auth_method'] = 'Método de autenticação';
$string['condition:cohort_field'] = 'Campo de Grupo global';
$string['condition:cohort_field_description'] = 'Utilizadores que {$a->operator} Grupos globais com o campo \'{$a->field}\' {$a->fieldoperator} {$a->fieldvalue}';
$string['condition:cohort_membership'] = 'Membro de Grupo global';
$string['condition:cohort_membership_broken_description'] = 'Condição com erro. Está a usar o mesmo Grupo global que a regra está configurada para gerir.';
$string['condition:cohort_membership_description'] = 'Utilizadores que {$a->operator} {$a->cohorts}';
$string['condition:course_completed'] = 'Disciplina concluída';
$string['condition:course_completed_description'] = 'Utilizadores que concluíram a disciplina "{$a->course}" {$a->operator} {$a->timecompleted}';
$string['condition:course_not_completed'] = 'Disciplina não concluída';
$string['condition:course_not_completed_description'] = 'Utilizadores que não concluíram a disciplina "{$a->course}"';
$string['condition:profile_field_description'] = 'Utilizadores com campo \'{$a->field}\' {$a->fieldoperator} {$a->fieldvalue}';
$string['condition:user_created'] = 'Criação do utilizador';
$string['condition:user_custom_profile'] = 'Campo de perfil personalizado';
$string['condition:user_enrolment'] = 'Inscrição do utilizador';
$string['condition:user_enrolment_description'] = 'Utilizadores que  {$a->operator} na disciplina "{$a->coursename}" (id {$a->courseid}) com o papel "{$a->role}" usado o método de inscrição "{$a->enrolmethod}"';
$string['condition:user_last_login'] = 'Última autenticação do utilizador';
$string['condition:user_profile'] = 'Campo de perfil padrão';
$string['condition:user_role'] = 'Papel do utilizador';
$string['condition:user_role_description_category'] = 'Utilizadores que {$a->operator} "{$a->role}" na categoria \'{$a->categoryname}\' (id {$a->categoryid})';
$string['condition:user_role_description_course'] = 'Utilizadores que {$a->operator} "{$a->role}" na disciplina \'{$a->coursename}\' (id {$a->courseid})';
$string['condition:user_role_description_system'] = 'Utilizadores que {$a->operator} "{$a->role}" no contexto do sistema';
$string['conditionchnagesnotapplied'] = 'As alterações da condição só serão aplicadas depois de guardar o formulário da regra';
$string['conditionformtitle'] = 'Condição da regra';
$string['conditions'] = 'Condições';
$string['conditionsformtitle'] = 'Condições da regra';
$string['conditionstext'] = '{$a->conditions} ( lógico {$a->operator} )';
$string['delete_confirm'] = 'Tem a certeza de que pretende apagar a regra {$a}?';
$string['delete_confirm_condition'] = 'Tem a certeza de que pretende apagar esta condição?';
$string['delete_rule'] = 'Apagar regra';
$string['description'] = 'Descrição';
$string['description_help'] = 'Breve descrição desta regra.';
$string['disable_confirm'] = 'Tem a certeza de que pretende desativar a regra {$a}?';
$string['disabled'] = 'Desativada';
$string['donothaverole'] = 'não têm o papel de';
$string['dynamic_cohorts:manage'] = 'Gerir regras';
$string['edit_rule'] = 'Editar regra';
$string['enable_confirm'] = 'Tem a certeza de que pretende ativar a regra {$a}?';
$string['enabled'] = 'Ativada';
$string['enrolled'] = 'Inscritos';
$string['enrolmethod'] = 'Método de inscrição';
$string['event:conditioncreated'] = 'Condição criada';
$string['event:conditiondeleted'] = 'Condição apagada';
$string['event:conditionupdated'] = 'Condição atualizada';
$string['event:matchingfailed'] = 'Erro na correspondência de utilizadores';
$string['event:rulecreated'] = 'Regra criada';
$string['event:ruledeleted'] = 'Regra apagada';
$string['event:ruleupdated'] = 'Regra atualizada';
$string['ever'] = 'Sempre';
$string['everloggedin'] = 'Utilizadores que autenticaram-se pelo menos uma vez';
$string['haverole'] = 'têm o papel de';
$string['include_missing_data'] = 'Incluir utilizadores com dados em falta.';
$string['include_missing_data_help'] = 'Alguns utilizadores podem ainda não ter configurado um campo de dados personalizado. Esta opção inclui estes utilizadores no resultado final.';
$string['includechildren'] = 'inclui descendentes (categorias e disciplinas)';
$string['includeusersmissingdata'] = 'Incluir utilizadores com dados em falta';
$string['includingmissingdatadesc'] = '(inclui utilizadores com dados em falta)';
$string['inlast'] = 'Nas últimas';
$string['inlastloggedin'] = 'Utilizadores que autenticaram-se nos últimos {$a}';
$string['inthefuture'] = 'é no futuro';
$string['inthepast'] = 'é no passado';
$string['invalidfieldvalue'] = 'Valor de campo inválido';
$string['isafter'] = 'é depois de';
$string['isbefore'] = 'é antes de';
$string['ismemberof'] = 'são membros de';
$string['isnotempty'] = 'não está em branco';
$string['isnotmemberof'] = 'não são membros de';
$string['loggedintime'] = 'Utilizadores que autenticaram-se {$a->operator} {$a->time}';
$string['logical_operator'] = 'Operador lógico';
$string['logical_operator_help'] = 'Um operador lógico a ser aplicado às condições para esta regra. O operador "AND" significa que um utilizador tem que corresponder a todas as condições para ser adicionado a um Grupo global. "OR" significa que um utilizador tem que corresponder a qualquer uma das condições para ser adicionado a um Grupo global.';
$string['managecohorts'] = 'Gerir Grupos globais';
$string['managerules'] = 'Gerir regras';
$string['matchingusers'] = 'Utilizadores correspondentes';
$string['missingcourse'] = 'Disciplina em falta';
$string['missingcoursecat'] = 'Categoria da disciplina em falta';
$string['missingenrolmentmethod'] = 'Método de inscrição \'{$a}\' em falta';
$string['missingrole'] = 'Regra em falta';
$string['name'] = 'Nome da regra';
$string['name_help'] = 'Um nome legível para esta regra.';
$string['never'] = 'Nunca';
$string['neverloggedin'] = 'Utilizadores que nunca se autenticaram';
$string['notenrolled'] = 'Não inscritos';
$string['operator'] = 'Operador';
$string['or'] = 'OU';
$string['pleaseselectcohort'] = 'Selecione um Grupo global';
$string['pleaseselectfield'] = 'Selecione um campo';
$string['pluginname'] = 'Grupos globais dinâmicos';
$string['privacy:metadata:tool_dynamic_cohorts'] = 'Informações sobre regras criadas ou atualizadas por um utilizador';
$string['privacy:metadata:tool_dynamic_cohorts:name'] = 'Nome da regra';
$string['processrulestask'] = 'Processar regras de Grupos globais dinâmicos';
$string['profilefield'] = 'Campo de perfil';
$string['rule_entity'] = 'Regra de Grupo global dinâmico';
$string['rule_entity.bulkprocessing'] = 'Processamento em massa';
$string['rule_entity.description'] = 'Descrição';
$string['rule_entity.id'] = 'ID';
$string['rule_entity.name'] = 'Nome';
$string['rule_entity.status'] = 'Estado';
$string['ruledeleted'] = 'A regra foi apagada';
$string['ruledisabled'] = 'A regra foi desativada';
$string['ruledisabledpleasereview'] = 'Regras recém-criadas ou atualizadas são desativadas por predefinição. Reveja a regra abaixo e ative-a quando estiver pronta.';
$string['ruleenabled'] = 'A regra foi ativada';
$string['settings:releasemembers'] = 'Remover membros';
$string['settings:releasemembers_desc'] = 'Se ativar esta opção, todos os membros de um Grupo global serão removidos quando deixar de ser gerido pelo módulo (por exemplo, se uma regra for apagada ou o Grupo global de uma regra for alterado). <br/>Observação: Nenhum evento \'cohort_member_removed\' será acionado quando os membros forem removidos de um Grupo global.';
$string['usercreated'] = 'Utilizador foi criado';
$string['usercreatedin'] = 'Utilizadores que foram criados nos últimos {$a}';
$string['usercreatedtime'] = 'Utilizadores que foram criados {$a->operator} {$a->time}';
$string['userlastlogin'] = 'Última autenticação do utilizador';
$string['usersforrule'] = 'Utilizadores que correspondem à regra "{$a->rule}" para o Grupo global "{$a->cohort}"';
