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
 * Strings for component 'local_recompletion', language 'pt', version '4.4'.
 *
 * @package     local_recompletion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedrecompletiontitle'] = 'Avançado';
$string['archive'] = 'Arquivar tentativas antigas';
$string['archivechoice'] = 'Arquivar tentativas de escolha antigas';
$string['archivecompletiondata'] = 'Arquivar dados da conclusão';
$string['archivecompletiondata_help'] = 'Guarda os dados da conclusão nas tabelas \'local_recompletion_cc\', \'local_recompletion_cc_cc\' e \'local_recompletion_cmc\'. Se não estiver selecionado, os dados de conclusão serão apagados definitivamente.';
$string['archivecustomcertcertificates'] = 'Arquivar certificados emitidos';
$string['archivecustomcertcertificates_help'] = 'Os certificados personalizados emitidos devem ser arquivados?';
$string['archivequestionnaire'] = 'Arquivar tentativas de questionários antigos';
$string['archivequiz'] = 'Arquivar tentativas de testes antigos';
$string['archivescorm'] = 'Arquivar tentativas de SCORM antigos';
$string['assignattempts'] = 'Tentativas dos trabalhos';
$string['assignattempts_help'] = 'Como lidar com tentativas dos trabalhos dentro da disciplina.
Se for usada a configuração \'Atualizar na alteração da nota\', quando um professor atualizar a nota dentro de uma atividade trabalho e o utilizador já tiver concluído a disciplina, a data de conclusão da disciplina será atualizada para usar a data da alteração da nota do trabalho.';
$string['assignevent'] = 'Atualizar conclusão da disciplina com alteração da nota';
$string['bulkchangedate'] = 'Alterar data de conclusão para os utilizadores selecionados';
$string['choiceattempts'] = 'Tentativas de escolha';
$string['choiceattempts_help'] = 'As tentativas de escolha existentes devem ser apagadas? Se a opção de arquivar estiver selecionada, as tentativas de escolha antigas serão arquivadas na tabela \'local_recompletion_cha\'.';
$string['completionnotenabled'] = 'A conclusão da disciplina não está ativa';
$string['completionresetuser'] = 'Foi reiniciada a conclusão nesta disciplina para o aluno {$a}';
$string['completionupdated'] = 'As datas de conclusão da disciplina foram atualizadas';
$string['coursecompletiondate'] = 'Nova data de conclusão da disciplina';
$string['customcertcertificates'] = 'Certificados personalizados';
$string['customcertcertificates_help'] = 'Os certificados personalizados emitidos devem ser apagados?';
$string['customcertresetcertificates'] = 'Apagar certificados personalizados';
$string['customcertresetcertificatesverifywarn'] = 'Atenção: Apagar os certificados emitidos, mesmo que  os arquive antes de apagar, resultará que os certificados emitidos já não poderão ser verificados no Moodle. Apague os certificados apenas se for aceitável para si.';
$string['defaultsettings'] = 'Configurações predefinidas da reconclusão';
$string['delete'] = 'Apagar tentativas existentes';
$string['deletegradedata'] = 'Apagar todas as notas do utilizador';
$string['deletegradedata_help'] = 'Apagar os dados atuais da nota de conclusão da tabela \'grade_grades\'. Os dados da nota de conclusão são apagados definitivamente mas os dados são retidos na tabela de dados do histórico da nota.';
$string['donothing'] = 'Não alterar';
$string['editcompletion'] = 'Editar data de conclusão da disciplina';
$string['editcompletion_desc'] = 'Modificar a data de conclusão da disciplina para os seguintes utilizadores:';
$string['editrecompletion'] = 'Editar configurações da reconclusão da disciplina';
$string['emailrecompletiontitle'] = 'Configurações da mensagem personalizada da reconclusão';
$string['eventrecompletion'] = 'Reconclusão da disciplina';
$string['extraattempt'] = 'Permitir tentativa(s) extra(s) aos alunos';
$string['forcearchivecompletiondata'] = 'Forçar arquivamento dos dados da conclusão';
$string['forcearchivecompletiondata_help'] = 'Se ativar esta opção, o arquivamento dos dados da conclusão será forçado para todas as reconclusões de disciplinas. Isto pode evitar a perda acidental de dados.';
$string['modifycompletiondates'] = 'Modificar datas de conclusão da disciplina';
$string['noassigngradepermission'] = 'A sua conclusão foi reiniciada, mas esta disciplina contém uma tarefa que não pôde ser reiniciada. Peça ao seu professor que faça isso por si, se necessário.';
$string['nousersselected'] = 'Nenhum utilizador selecionado';
$string['pluginname'] = 'Reconclusão da disciplina';
$string['privacy:metadata:attempt'] = 'Número da tentativa';
$string['privacy:metadata:completionstate'] = 'Se a atividade foi concluída';
$string['privacy:metadata:course'] = 'O ID da disciplina vinculada a esta tabela.';
$string['privacy:metadata:coursemoduleid'] = 'ID da atividade';
$string['privacy:metadata:coursesummary'] = 'Armazena os dados da conclusão da disciplina para um utilizador.';
$string['privacy:metadata:gradefinal'] = 'Nota final obtida após conclusão da disciplina';
$string['privacy:metadata:local_recompletion_qr:grade'] = 'nota';
$string['privacy:metadata:local_recompletion_qr:submitted'] = 'Submetido';
$string['privacy:metadata:quiz_attempts:attempt'] = 'Número da tentativa.';
$string['privacy:metadata:quiz_attempts:currentpage'] = 'A página atual em que o utilizador está.';
$string['privacy:metadata:quiz_attempts:preview'] = 'Se é, ou não, uma pré-visualização do teste.';
$string['privacy:metadata:quiz_attempts:state'] = 'O estado atual da tentativa.';
$string['privacy:metadata:quiz_attempts:sumgrades'] = 'O somatório das notas na tentativa.';
$string['privacy:metadata:quiz_attempts:timecheckstate'] = 'A data/hora em que o estado foi verificado.';
$string['privacy:metadata:quiz_attempts:timefinish'] = 'A data/hora em que a tentativa foi concluída.';
$string['privacy:metadata:quiz_attempts:timemodified'] = 'A data/hora em que a tentativa foi atualizada.';
$string['privacy:metadata:quiz_attempts:timemodifiedoffline'] = 'A data/hora em que a tentativa foi atualizada via atualização offline.';
$string['privacy:metadata:quiz_attempts:timestart'] = 'A data/hora em que a tentativa foi iniciada.';
$string['privacy:metadata:quiz_grades'] = 'Detalhes arquivados sobre a nota global das tentativas anteriores do teste.';
$string['privacy:metadata:quiz_grades:grade'] = 'Nota média do teste.';
$string['privacy:metadata:quiz_grades:quiz'] = 'Teste avaliado.';
$string['privacy:metadata:quiz_grades:timemodified'] = 'Data/hora da modificação da nota.';
$string['privacy:metadata:quiz_grades:userid'] = 'Utilizador que foi avaliado.';
$string['privacy:metadata:reaggregate'] = 'Se a conclusão da disciplina foi reagregada.';
$string['privacy:metadata:timecompleted'] = 'Data/hora da conclusão da disciplina.';
$string['privacy:metadata:timeenrolled'] = 'Data/hora da inscrição do utilizador na disciplina.';
$string['privacy:metadata:timemodified'] = 'Data/hora da modificação do registo.';
$string['privacy:metadata:timestarted'] = 'Data/hora de início da disciplina.';
$string['privacy:metadata:unenroled'] = 'Se o utilizador deixou de estar inscrito na disciplina';
$string['privacy:metadata:userid'] = 'ID do utilizador vinculado a esta tabela.';
$string['privacy:metadata:viewed'] = 'Se a atividade foi visualizada';
$string['pulsenotifications'] = 'Notificações Pulse';
$string['pulsenotifications_help'] = 'As notificações do Pulse que já foram enviadas devem ser reiniciadas?';
$string['pulseresetnotifications'] = 'Reiniciar notificações';
$string['questionnaireattempts'] = 'Tentativas do Questionário';
$string['questionnaireattempts_help'] = 'O que fazer com as tentativas existentes dos Questionários? Se apagar e arquivar for selecionado, as tentativas antigas dos Questionários serão arquivadas nas tabelas \'local_recompletion\'.';
$string['quizattempts'] = 'Tentativas dos testes';
$string['quizattempts_help'] = 'O que fazer com as tentativas existentes de resposta aos testes.
Se a opção apagar e arquivar estiver selecionada, as tentativas antigas dos testes serão arquivadas nas tabelas \'local_recompletion\'. Se configurado para permitir tentativas extras, será adicionada uma substituição dos testes para permitir que o utilizador tenha o número máximo de tentativas permitida.';
$string['recompletion'] = 'reconclusão';
$string['recompletion:manage'] = 'Permitir que as configurações dareconclusão da disciplina sejam alteradas';
$string['recompletion:resetmycompletion'] = 'Reiniciar a minha conclusão';
$string['recompletionemailbody'] = 'Corpo da mensagem';
$string['recompletionemailbody_help'] = 'O assunto personalizado do e-mail da reconclusão pode ser adicionado como texto simples ou no auto-formato Moodle, incluindo tags HTML e tags multilingues

Os seguintes espaços reservados podem ser incluídos na mensagem:

* Nome da disciplina {$a->coursename}
* Hiperligação para a disciplina {$a->link}
* Hiperligação para a página de perfil do utilizador {$a->profileurl}
* E-mail do utilizador {$a->email}
* Nome completo do utilizador {$a->fullname}';
$string['recompletionemaildefaultbody'] = 'Olá, por favor, volte a concluir a disciplina {$a->coursename} {$a->link}';
$string['recompletionemaildefaultsubject'] = 'Reconclusão obrigatória da disciplina {$a->coursename}';
$string['recompletionemailsubject'] = 'Assunto da mensagem';
$string['recompletionemailsubject_help'] = 'O assunto personalizado do e-mail da reconclusão pode ser adicionado como texto simples

Os seguintes espaços reservados podem ser incluídos na mensagem:

* Nome da disciplina {$a->coursename}
* Nome completo do utilizador {$a->fullname}';
$string['recompletionrange'] = 'Período para voltar a concluir';
$string['recompletionrange_help'] = 'Define o período de tempo antes que sejam reiniciados os resultados da conclusão de um utilizador.';
$string['recompletionsettingssaved'] = 'As configurações da reconclusão da disciplinas foram guardadas';
$string['recompletiontask'] = 'Verifique se existem utilizadores que têm de reconcluir';
$string['resetallcompletion'] = 'Reiniciar todas as conclusões';
$string['resetcompletionconfirm'] = 'Tem a certeza de que pretende reiniciar todos os dados de conclusão desta disciplina para {$a}? Aviso - pode apagar definitivamente algum conteúdo enviado.';
$string['resetcompletionfor'] = 'Reiniciar conclusão de {$a}';
$string['resetlti'] = 'Repor notas da LTI';
$string['resetltis'] = 'Notas da LTI';
$string['resetltis_help'] = 'Como lidar com as notas da LTI dentro do disciplina.
Se a configuração \'Repor notas da LTI\' for usada, todas as notas da LTI repostas para 0.
Quando o utilizador obtiver nova conclusão na disciplina, a nota atualizada da disciplina será reenviada ao fornecedor da LTI.';
$string['resetmycompletion'] = 'Reiniciar a minha conclusão das atividades';
$string['scormattempts'] = 'Tentativas dos SCORM';
$string['scormattempts_help'] = 'As tentativas existentes do SCORM devem ser apagadas? Se a opção de arquivar estiver selecionada, as tentativas antigas do SCORM serão arquivadas na tabela \'local_recompletion_sst\'.';
