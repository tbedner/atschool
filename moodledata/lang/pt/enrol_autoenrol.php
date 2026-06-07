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
 * Strings for component 'enrol_autoenrol', language 'pt', version '4.4'.
 *
 * @package     enrol_autoenrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysenrol'] = 'Inscrever sempre';
$string['alwaysenrol_help'] = 'Se selecionar \'Sim\', os módulos inscreverão sempre os utilizadores, mesmo que estes já tenham acesso à disciplina através de outro método.';
$string['auto'] = 'Auto';
$string['auto_desc'] = 'Este grupo foi criado automaticamente pelo módulo Inscrição automática. O grupo será apagado se apagar o módulo Inscrição automática da disciplina.';
$string['autoenrol:config'] = 'Configurar inscrições automáticas';
$string['autoenrol:hideshowinstance'] = 'O utilizador pode ativar ou desativar instâncias de Inscrição automática.';
$string['autoenrol:manage'] = 'Gerir utilizadores inscritos automaticamente';
$string['autoenrol:method'] = 'O utilizador pode inscrever outros utilizadores numa disciplina quando estes se autenticarem';
$string['autoenrol:unenrol'] = 'O utilizador pode cancelar a inscrição de utilizadores inscritos automaticamente';
$string['autoenrol:unenrolself'] = 'O utilizador pode cancelar a sua inscrição se estiver para ser inscrito quando aceder';
$string['autounenrolaction'] = 'Ação ao cancelar a inscrição automática';
$string['autounenrolaction_help'] = 'Selecione a ação a ser executada quando a regra do filtro de utilizadores já não corresponder. Tenha em atenção que alguns dados e configurações do utilizador são eliminados da disciplina durante o cancelamento da inscrição na disciplina.';
$string['availabilityplugins'] = 'Módulos de condições de acesso ativos';
$string['availabilityplugins_help'] = 'Selecione os módulos de condições de acesso que podem ser usados no filtro de inscrição automática de utilizador. Use \'Ctrl + clique\' ou \'Cmd + clique\' para selecionar vários.';
$string['cannotenrol'] = 'Não pode inscrever-se nesta disciplina através da Inscrição automática.';
$string['config'] = 'Configuração';
$string['countlimit'] = 'Limite';
$string['countlimit_help'] = 'Esta instância irá contar o número de inscrições que faz numa disciplina e pode impedir a inscrição de utilizadores se atingido o valor aqui indicado. A configuração predefinida de zero (0) significa ilimitado.';
$string['customwelcomemessage'] = 'Mensagem de boas-vindas personalizada';
$string['customwelcomemessage_help'] = 'Uma mensagem personalizada de boas-vindas pode ser adicionada como texto simples ou formato Moodle, incluindo tags HTML e tags multilingue.

Os seguintes espaços reservados podem ser incluídos na mensagem:

* Nome da disciplina {$a->coursename}
* Hiperligação para a página de perfil do utilizador {$a->profileurl}
* Hiperligação para a disciplina {$a->link}
* E-mail do utilizador {$a->email}
* Nome completo do utilizador {$a->fullname}';
$string['defaultrole'] = 'Papel a atribuir por predefinição';
$string['defaultrole_desc'] = 'Selecione o papel que deve ser atribuído aos utilizadores na inscrição automática';
$string['deleteselectedusers'] = 'Apagar a inscrição dos utilizadores selecionados';
$string['editselectedusers'] = 'Editar a inscrição dos utilizadores selecionados';
$string['emptyfield'] = 'Não {$a}';
$string['enrolenddate'] = 'Data de fim';
$string['enrolenddate_help'] = 'Se ativar esta opção, os utilizadores apenas serão inscritos até esta data.';
$string['enrolme'] = 'Inscrever-me';
$string['enrolperiod'] = 'Duração da inscrição';
$string['enrolperiod_desc'] = 'Duração predefinida da inscrição. Se definido como zero, a duração da inscrição será ilimitada, por predefinição.';
$string['enrolperiod_help'] = 'Período de tempo em que a inscrição é válida, a partir do momento em que o próprio utilizador se inscreve. Se desativado, a duração da inscrição será ilimitada.';
$string['enrolstartdate'] = 'Data de início';
$string['enrolstartdate_help'] = 'Se ativar esta opção, os utilizadores apenas serão inscritos após esta data.';
$string['expiredaction'] = 'Ação ao expirar a inscrição';
$string['expiredaction_help'] = 'Selecione a ação a ser executada quando a inscrição do utilizador expirar. Tenha em atenção que alguns dados e configurações do utilizador são apagados da disciplina durante o cancelamento da inscrição.';
$string['expirymessageenrolledbody'] = 'Caro(a) {$a->user},

Esta é uma notificação a informar de que sua inscrição na disciplina \'{$a->course}\' expira em {$a->timeend}.

Se precisar de ajuda, entre em contacto com {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Notificação de expiração da autoinscrição';
$string['expirymessageenrollerbody'] = 'A inscrição automática na disciplina \'{$a->course}\' irá expirar no próximo {$a->threshold} para os seguintes utilizadores:

{$a->users}

Para prolongar as inscrições, vá a {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Notificação de expiração da inscrição automática';
$string['expirynotifyall'] = 'Professor e utilizador inscrito';
$string['expirynotifyenroller'] = 'Apenas professor';
$string['filter'] = 'Permitir apenas';
$string['filter_help'] = 'Quando um grupo é selecionado, pode usar este campo para filtrar o tipo de utilizadores que deseja inscrever na disciplina. Por exemplo, se agrupar por autenticação e filtrar com "manual", apenas os utilizadores que se registraram diretamente no site ficarão inscritos.';
$string['filtering'] = 'Filtrar utilizadores';
$string['g_auth'] = 'Método de autenticação';
$string['g_dept'] = 'Departamento';
$string['g_email'] = 'E-mail';
$string['g_inst'] = 'Instituição';
$string['g_lang'] = 'Idioma';
$string['g_none'] = 'Selecione...';
$string['general'] = 'Geral';
$string['groupname'] = 'Nome do grupo';
$string['groupname_help'] = 'Quando agrupa por Filtro de Utilizador, apenas um grupo será criado e este será o nome do grupo.';
$string['groupon'] = 'Agrupar por';
$string['groupon_help'] = 'A Inscrição automática pode adicionar automaticamente utilizadores a um grupo quando estiverem inscritos com base num destes campos de perfil do utilizador.';
$string['instancename'] = 'Nome personalizado da instância';
$string['instancename_help'] = 'Pode adicionar um nome personalizado de modo a ficar claro o que este método de inscrição faz. Esta opção é bastante útil quando existem várias instâncias de Inscrição automática numa disciplina.';
$string['loginenrol'] = 'Permitir inscrições ao entrar no site';
$string['loginenrol_desc'] = 'Permitir a inscrição após autenticação no site pode diminuir o desempenho do site. Como alternativa, pode usar a tarefa agendada para atualizar as inscrições para todos as disciplinas ou o comando cli para disciplinas específicas.';
$string['longtimenosee'] = 'Cancelar inscrição inativa após';
$string['longtimenosee_help'] = 'A inscrição será automaticamente cancelada se os utilizadores não acederem a uma disciplina durante muito tempo. Este parâmetro especifica o limite de tempo de inatividade.';
$string['m_confirmation'] = 'Confirmação na janela de inscrição';
$string['m_course'] = 'A entrar na disciplina';
$string['m_site'] = 'Autenticar-se no site';
$string['maxenrolled'] = 'Máximo de utilizadores inscritos';
$string['maxenrolled_help'] = 'Especifica o número máximo de utilizadores que podem inscrever-se automaticamente. Se o valor for zero (0), não existe limite.';
$string['messageprovider:expiry_notification'] = 'Notificações de expiração de inscrição automática';
$string['method'] = 'Inscrever se';
$string['method_help'] = 'Os utilizadores avançados podem usar esta configuração para alterar o comportamento do módulo para que os utilizadores sejam inscritos na disciplina ao autenticarem-se em vez de esperar que eles acedam à disciplina. Isso é útil para disciplinas que devem ser visíveis, por predefinição, na lista de "As minhas disciplinas".';
$string['newenrols'] = 'Permitir novas inscrições';
$string['newenrols_desc'] = 'Permitir que os utilizadores se inscrevam automaticamente em novas disciplinas por predefinição.';
$string['newenrols_help'] = 'Esta configuração determina se um utilizador pode inscrever-se nesta disciplina.';
$string['nogroupon'] = 'Não criar grupos';
$string['pluginname'] = 'Inscrição automática';
$string['pluginname_desc'] = 'O módulo de inscrição automática permite que aos utilizadores autenticados seja concedida a entrada numa disciplina e ficam automaticamente inscritos. É semelhante ao permitir o acesso aos visitantes, mas os alunos serão inscritos permanentemente e, portanto, poderão participar em fóruns e atividades da disciplina.';
$string['pluginnotenabled'] = 'Módulo de inscrição automática desativado';
$string['privacy:metadata:core_group'] = 'O módulo Inscrição automática pode criar novos grupos ou usar grupos existentes para adicionar participantes que correspondam ao filtro de Inscrição automática.';
$string['removegroups'] = 'Remover grupos';
$string['removegroups_desc'] = 'Se ativar esta opção, quando uma instância de inscrição automática é apagada, deve tentar remover os grupos que criou?';
$string['role'] = 'Papel predefinido a atribuir';
$string['role_help'] = 'Os utilizadores avançados podem usar esta configuração para alterar o nível de permissão com o qual os utilizadores são inscritos.';
$string['selfunenrol'] = 'Permitir cancelar a própria inscrição';
$string['selfunenrol_desc'] = 'Permitir que os utilizadores, por predefinição, cancelem a sua inscrição em novas instâncias de Inscrição automática.';
$string['selfunenrol_help'] = 'Se ativar esta opção, os utilizadores podem cancelar a sua inscrição por si mesmos.';
$string['sendcoursewelcomemessage'] = 'Enviar mensagem de boas-vindas';
$string['sendcoursewelcomemessage_help'] = 'Quando um utilizador é inscrito automaticamente na disciplina, pode receber um e-mail com uma mensagem de boas-vindas. Se for determinado para ser enviado do contacto da disciplina (por predefinição, o professor) e mais do que um utilizador tem o papel de professor, o e-mail será enviado do primeiro utilizador a quem foi atribuído o papel de professor.';
$string['sendexpirynotificationstask'] = 'Envio de notificações de expiração de inscrição automática';
$string['softmatch'] = 'Correspondência parcial';
$string['softmatch_help'] = 'Se ativar esta opção, a Inscrição automática irá registar o utilizador quando coincide parcialmente com o valor "Permitir apenas" em vez de exigir uma correspondência exata. A correspondência parcial também é sensível a maiúsculas e minúsculas. O valor de "Filtrar por" será usado para o nome do grupo.';
$string['status'] = 'Permitir inscrições existentes';
$string['status_desc'] = 'Ativar o método de inscrição automática em novas disciplinas.';
$string['status_help'] = 'Se ativado e \'Permitir novas inscrições\' estiver desativado, apenas podem aceder à disciplina os utilizadores que anteriormente se inscreveram automaticamente. Se desativado, este método de inscrição automática fica efetivamente desativado, uma vez que todas as inscrições automáticas existentes ficarão suspensas e os novos utilizadores não poderão inscrever-se automaticamente.';
$string['syncenrolmentstask'] = 'Sincronização da inscrição automática';
$string['syncexpirationstask'] = 'Verificação de expiração da inscrição automática';
$string['unenrolselfconfirm'] = 'Tem a certeza que realmente pretende cancelar a sua inscrição na disciplina "{$a}"? Pode revisitar a disciplina para ser inscrito novamente, mas serão perdidas as informações anteriores.';
$string['unenrolusers'] = 'Cancelar a inscrição dos utilizadores';
$string['userfilter'] = 'Filtro de Utilizador';
$string['userfilter_help'] = 'Quando definido, a inscrição automático apenas irá inscrever os utilizadores quando eles corresponderem às regras.';
$string['warning'] = 'Atenção!';
$string['warning_message'] = 'Adicionar este módulo à sua disciplina permitirá que qualquer utilizador registado no Moodle possa aceder à disciplina. Instale este módulo apenas se pretende permitir o acesso aberto à disciplina para utilizadores que se autentiquem no site.';
$string['welcomemessage'] = 'Mensagem de boas-vindas';
$string['welcometocourse'] = 'Bem-vindo(a) à disciplina {$a}';
