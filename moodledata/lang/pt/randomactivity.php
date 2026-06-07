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
 * Strings for component 'randomactivity', language 'pt', version '4.4'.
 *
 * @package     randomactivity
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityhasissue'] = 'Deste conjunto de atividades da Atividade aleatória, pelo menos uma tem o seguinte problema: {$a}.';
$string['addactivities'] = 'Adicionar atividades';
$string['addselectedactivities'] = 'Adicionar as atividades selecionadas';
$string['applychangesreassign'] = 'Aplicar alterações e voltar a atribuir';
$string['assignedactivity'] = 'Atividade atribuída';
$string['assignees'] = 'Atribuições';
$string['changesapplied'] = 'As alterações foram aplicadas com sucesso';
$string['completiontrackactivity'] = 'Requer conclusão da atividade atribuída';
$string['completiontrackactivity_desc'] = 'Os alunos têm de concluir a atividade atribuída';
$string['completiontrackactivity_help'] = 'Se ativar esta opção, esta Atividade Aleatória tentará monitorizar a conclusão das atividades atribuídas e atualizará automaticamente a sua conclusão em conformidade.<br>
<b>Observação:</b> Isto pode substituir alguns dos outros métodos de monitorização da conclusão.';
$string['confirmreassign'] = 'Está prestes a alterar o conjunto de atividades usado por esta Atividade aleatória. Os alunos serão novamente atribuídos em novas atividades. <br>
Os alunos que já tinha começado a trabalhar na atividade atribuída anteriormente perderão o seu progresso se forem atribuídos a outra atividade.<br>
Os alunos que já tinham obtido uma nota na atividade atribuída anteriormente perderão a nota dessa atividade se forem atribuídos a outra atividade.';
$string['continuetoactivity'] = 'Continuar para a atividade';
$string['duedate'] = 'Data de fecho';
$string['duedate_help'] = 'Prazo final para que os alunos concluam esta atividade aleatória (aparecerá no calendário).<br>
Após esta data, sempre que os alunos acederem a esta atividade aleatória, serão notificados de que já terminou o prazo.
Se for permitido, poderão continuar a aceder à sua atividade atribuída. No entanto, nenhuma nota será registada para esta atividade aleatória.';
$string['duedatefor'] = 'Data de fecho de {$a}';
$string['duedatefor_desc'] = 'Prazo para concluir e submeter esta atividade!';
$string['duedateover'] = 'Terminou o prazo para esta atividade.<br>
Se pretender, ainda pode aceder à atividade mas nenhuma nota será registada.';
$string['dynamicdisplay'] = 'Exibição dinâmica na página da disciplina';
$string['dynamicdisplay_help'] = 'Se definido como "Sim", esta atividade será mostrada na página da disciplina como a atividade para a qual o aluno foi atribuído. Afetará apenas os alunos.';
$string['filters'] = 'Filtros:';
$string['groupbyseeding'] = 'Agrupar por série';
$string['grouping'] = 'agrupamento {$a}';
$string['groupmode'] = 'Modo de grupo';
$string['groupmode_help'] = 'Esta atividade está configurada para usar grupos. Os membros do mesmo grupo serão atribuídos à mesma atividade. <br>
Se for definido um agrupamento, apenas os grupos desse agrupamento serão considerados.<br>
Se um utilizador não pertencer a nenhum grupo ou pertencer a mais de um grupo, eles serão atribuídos individualmente.';
$string['groupmodedetails'] = 'Modo de grupo ({$a})';
$string['invalidsesskeyorpermission'] = 'Esta ação não é permitida por motivos de segurança. Ou não tem a permissão necessária ou a sua chave de sessão não pôde ser confirmada.';
$string['modulename'] = 'Atividade aleatória';
$string['modulename_help'] = 'O módulo Atividade aleatória permite que o professor defina um conjunto de atividades, das quais uma será atribuída aleatoriamente a cada aluno. <br><br>
A nota da Atividade aleatória corresponderá à nota da atividade que foi atribuída a cada aluno.<br>
A atribuição aleatória pode ser personalizada por séries de de modo a garantir consistência entre as atividades de cada aluno.';
$string['modulenameplural'] = 'Atividades aleatórias';
$string['modulenotfound'] = 'Módulo não encontrado';
$string['noactivityerror'] = 'Não foi configurada nenhuma atividade.';
$string['noactivitytoadd'] = 'Não existem atividades disponíveis para adicionar.';
$string['nogradesetup'] = 'Não foi configurada qualquer nota para esta atividade.';
$string['notgraded'] = 'Nenhuma nota';
$string['notsupported'] = 'Não suportado';
$string['orderbyappearanceincourse'] = 'Ordenar por ordem na disciplina';
$string['orderbyselect'] = 'ordenar por ou agrupar por';
$string['orderbyselect_help'] = 'Se selecionar "Ordenar pela ordem na disciplina", as atividades aleatórias serão exibidas pela mesma ordem com que aparecem na disciplina.<br>
Se selecionar "Agrupar por séries", as atividades aleatórias serão agrupadas em várias tabelas, sendo que todas as atividades aleatórias na mesma tabela correspondem à mesma série.<br>
Atividades aleatórias com a mesma série significa que são do mesmo tipo e têm o mesmo número de atividades. Qualquer aluno que participe em várias dessas atividades aleatórias será atribuído à mesma n-ésima atividade (por exemplo, à primeira atividade de cada atividade aleatória da mesma série).';
$string['originalgrade'] = 'Nota inicial';
$string['pluginadministration'] = 'Administração da Atividade aleatória';
$string['pluginname'] = 'Atividade aleatória';
$string['pluginname_help'] = 'Aqui pode definir o conjunto de atividades a ser usado nesta atividade aleatória.<br>Apenas os professores podem ver esta página.
Os alunos que acedam a esta atividade serão redirecionados para a atividade selecionada aleatoriamente para a qual foram atribuídos.';
$string['privacy:metadata'] = 'O módulo Atividades aleatória não armazena quaisquer dados pessoais.';
$string['randomactivity:addinstance'] = 'Adicionar instância de Atividade aleatória';
$string['randomactivity:manage'] = 'Gerir a Atividade aleatória';
$string['randomactivity:viewactivities'] = 'Ver o conjunto de atividades da Atividade aleatória';
$string['randomactivity:viewgrades'] = 'Ver as notas da atividade aleatória';
$string['refresh_help'] = 'Atualize a visualização das atribuições. Não aplica qualquer alteração.';
$string['returntocourse'] = 'Voltar à disciplina';
$string['seed'] = 'Série';
$string['seed_help'] = 'A série é o que decide que atividade é atribuída a qual aluno.<br>
Pode configurar várias atividades aleatórias com <b>o mesmo número de atividades</b> e <b>a mesma série</b>.
Essas atividades aleatórias atribuirão atividades aos alunos da mesma forma:
aos alunos a quem foi atribuída a primeira atividade de uma atividade aleatória também será atribuída à primeira atividade nas outras atividades aleatórias.<br>';
$string['seedingn'] = 'Série #{$a}';
$string['seedtobalance'] = 'Série para equilibrar utilizadores';
$string['seedtotimestamp'] = 'Série para a data/hora atual';
$string['showonlymembersof'] = 'Mostrar apenas os membros de:';
$string['unknown'] = 'Desconhecido';
$string['viewall'] = 'Ver tudo';
$string['viewingradebook'] = 'Ver na pauta';
