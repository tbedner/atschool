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
 * Strings for component 'tool_coursearchiver', language 'pt', version '4.4'.
 *
 * @package     tool_coursearchiver
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessafter'] = 'Último acesso depois de';
$string['accessbefore'] = 'Último acesso antes de';
$string['accessbeforeafter'] = 'Acedida antes/depois de';
$string['anycategory'] = 'Qualquer categoria';
$string['archive'] = 'Arquivar disciplinas';
$string['archivedeletesetting'] = 'Atraso na eliminação do arquivo';
$string['archivedeletesetting_help'] = 'O número de dias de atraso para a eliminação de arquivo.';
$string['archiveemail'] = 'Enviar e-mails "Disciplina a arquivar"';
$string['archivelimit'] = 'Limite da pesquisa de arquivo';
$string['archivelimit_help'] = 'Número máximo de resultados a mostrar no ecrã.';
$string['archivelimitstring'] = 'Máximo a mostrar';
$string['archivelist'] = 'Arquivos de disciplinas';
$string['archivelocation'] = 'Subdiretoria do arquivo da disciplina';
$string['archiverecoverform'] = 'Eliminação pendente';
$string['archivewarningemailsetting'] = 'Modelo de e-mail de aviso para arquivar disciplina';
$string['archivewarningemailsetting_help'] = 'Conteúdo do e-mail que será enviado a todos os professores da disciplina que está selecionada para ser arquivada.';
$string['archivewarningemailsettingdefault'] = '%to

Gostaríamos de informar-lhe que as seguintes disciplina Moodle, em que foi ou é professor, brevemente serão arquivadas.
Isto significa que os alunos que ainda estão inscritos na disciplina deixarão de  ter acesso à disciplina. Se pretende cancelar este processo, por favor, clique na hiperligação ao lado da disciplina que pretende excluir do processo.

%courses

Muito obrigado.';
$string['archivewarningsubject'] = 'Aviso: As disciplinas serão arquivadas em breve.';
$string['attemptdeletingcourse'] = 'A apagar a disciplina: ({$a->id}) {$a->fullname}.';
$string['back'] = 'Começar de novo';
$string['backup'] = 'Cópias de segurança das disciplinas';
$string['cannotdeletecoursenotexist'] = 'Não é possível apagar uma disciplina que não existe';
$string['category'] = 'Categoria';
$string['cli_cannot_continue'] = '\\nPARADO: dados insuficientes para continuar.\\n';
$string['cli_question_archive'] = 'Arquivar e apagar estas {$a} disciplinas?';
$string['cli_question_archiveemail'] = 'Enviar a estes {$a} utilizadores um e-mail "Disciplina a arquivar"?';
$string['cli_question_delete'] = 'Pretende apagar estas {$a} disciplinas?';
$string['cli_question_deleteemail'] = 'Enviar um e-mail "Disciplina a apagar" a estes {$a} utilizadores?';
$string['cli_question_hide'] = 'Ocultar estas {$a} disciplinas?';
$string['cli_question_hideemail'] = 'Enviar a estes {$a} utilizadores um e-mail "Disciplina a ocultar"?';
$string['confirm'] = 'Continuar';
$string['confirmdelete'] = 'Tem a certeza de que pretende apagar?';
$string['confirmmessage'] = 'Tem a certeza de que pretende {$a}';
$string['confirmmessagearchive'] = 'arquivar e remover {$a} disciplinas?';
$string['confirmmessagearchiveemail'] = 'enviar {$a} e-mails?';
$string['confirmmessagebackup'] = 'fazer cópia de segurança destas {$a} disciplinas?';
$string['confirmmessagedelete'] = 'remover completamente estas {$a} disciplinas?';
$string['confirmmessagedeleteemail'] = 'enviar notificação por e-mail sobre a eliminação pendente de disciplina a estes {$a} proprietários da disciplina?';
$string['confirmmessagehide'] = 'ocultar estas {$a} disciplinas?';
$string['confirmmessagehideemail'] = 'enviar {$a} e-mails?';
$string['confirmmessageoptout'] = 'excluir estas {$a} disciplinas?';
$string['confirmrestore'] = 'Restaurar a eliminação pendente da arquivo?';
$string['course_readded'] = 'A disciplina \'{$a->fullname}\' foi removida da lista de exclusão. Obrigado.';
$string['course_skipped'] = 'A disciplina \'{$a->fullname}\' será ignorada por {$a->optoutmonths} meses. Obrigado.';
$string['coursearchiver'] = 'Arquivar disciplinas';
$string['coursearchiver:use'] = 'Utilizar a ferramenta de arquivar disciplinas';
$string['coursearchiver_help'] = 'Pode pesquisar as disciplinas usando os seguintes critérios: nome curto, nome completo, código, ID da disciplina, data do último acesso ou disciplinas vazias(¹).<br />As disciplinas ocultas são mostradas com uma cor em tom de cinza. O nome completo da disciplina estará rasurado se for uma disciplina vazia(¹).<br />**NOTA**: a pesquisa por último acesso só retornará disciplinas que foram criadas antes da data indicada.<br />**NOTA**: a quantidade de endereços de e-mail encontrados pode diferir dos e-mails enviados. Isto acontece por 2 razões:<br />1. Se uma disciplina já está oculta não será enviado e-mail a notificar o(s) proprietário(s) se a disciplina está selecionada para ser ocultada.<br/>2. Um endereço que aparece em várias disciplinas será unido num único e-mail.<br />**(¹)** disciplinas vazias são definidas como tendo 0 trabalhos, 0 recursos, 0 categorias na pauta e 0 itens de avaliação na pauta.';
$string['coursearchiver_settings'] = 'Configurações de arquivar disciplinas';
$string['coursearchiverpath'] = 'Caminho da pasta onde guardar as disciplinas arquivadas';
$string['coursearchiverpath_help'] = 'Este caminho é relativo à configuração Moodle $CFG->dataroot';
$string['coursearchiverpreview'] = 'Pré-visualização do carregamento de disciplinas';
$string['coursearchiverresult'] = 'Resultados do carregamento das disciplinas';
$string['coursearchiverrootpath'] = 'Caminho do sistema onde as pastas do arquivador são colocadas';
$string['coursearchiverrootpath_help'] = 'Predefinição para CFG->dataroot.';
$string['coursedeleted'] = 'Disciplina apagada';
$string['coursedeletionnotallowed'] = 'Não é permitido apagar a disciplina';
$string['coursefullname'] = 'Nome completo da disciplina';
$string['courseid'] = 'ID da disciplina';
$string['courseidnum'] = 'Código da disciplina';
$string['courseselector'] = 'Resultados da pesquisa';
$string['courseshortname'] = 'Nome curto';
$string['courseteacher'] = 'Proprietário da disciplina';
$string['createdafter'] = 'Criada depois de';
$string['createdbefore'] = 'Criada antes de';
$string['createdbeforeafter'] = 'Criada antes/depois de';
$string['crontask'] = 'Eliminação de arquivo de disciplina';
$string['delete'] = 'Apagar disciplinas';
$string['deletedarchiveemails'] = 'E-mail do proprietário';
$string['deleteemail'] = 'Enviar e-mails "Disciplina a apagar"';
$string['deletewarningemailsetting'] = 'Modelo de e-mail de aviso para apagar disciplina';
$string['deletewarningemailsetting_help'] = 'Conteúdo do e-mail que será enviado a todos os proprietários da disciplina selecionada para ser apagada.';
$string['deletewarningemailsettingdefault'] = '%to

Gostaríamos de informar-lhe que as seguintes disciplina Moodle, em que foi ou é professor, brevemente serão apagadas.
Isto significa que a disciplina será removida do Moodle. Se pretende cancelar este processo, por favor, clique na hiperligação ao lado da disciplina que pretende excluir do processo.

%courses

Muito obrigado.';
$string['deletewarningsubject'] = 'Aviso: As disciplinas serão apagadas em breve.';
$string['deselectall'] = 'Desmarcar tudo';
$string['email'] = 'Enviar e-mail';
$string['emailselector'] = 'Selecionar os utilizadores a quem enviar e-mail';
$string['empty'] = 'vazio';
$string['emptycourse'] = 'Disciplina vazia';
$string['emptyonly'] = 'Mostrar apenas disciplinas vazias';
$string['endafter'] = 'Termina depois de';
$string['endbefore'] = 'Termina antes de';
$string['error_key'] = 'A chave de segurança está incorreta.';
$string['error_nocourseid'] = 'O registo da disciplina não contém ID';
$string['error_savepointid'] = 'Ponto de cópia não encontrado';
$string['errorarchivefile'] = 'O ficheiro da disciplina não existe.';
$string['errorarchivepath'] = 'O caminho do arquivo não pôde ser criado.';
$string['errorarchivingcourse'] = 'Disciplina: ({$a->id}) {$a->fullname} não pôde ser arquivada ou feita cópia de segurança.';
$string['errorbackup'] = 'Ocorreu um erro na cópia de segurança';
$string['errordeletingcourse'] = 'Disciplina: ({$a->id}) {$a->fullname} não pôde ser apagada.';
$string['erroremptysearch'] = 'Não foi indicado qualquer critério.';
$string['errorhidingcourse'] = 'Disciplina: ({$a->id}) {$a->fullname} não pôde ser ocultada.';
$string['errorinsufficientdata'] = 'Não existe informação suficiente para executar esta ação';
$string['errormissingcourses'] = 'A variável %courses estava em falta no modelo de e-mail. Esta é a lista das disciplinas.';
$string['errormissingto'] = 'A variável %to estava em falta no modelo de e-mail. Esta é a lista dos destinatários.';
$string['errornoform'] = 'Nenhum formulário foi fornecido';
$string['errornonnumericid'] = 'O ID da disciplina tem de ser um número';
$string['errornonnumerictimestamp'] = 'O registo de data e hora tem de ser numérico (data e hora UNIX)';
$string['erroroptoutcourse'] = 'Disciplina: ({$a->id}) {$a->fullname} não pode ser excluída.';
$string['errors'] = 'Erros';
$string['errors_count'] = 'Erros: {$a}';
$string['errorsendingemail'] = 'Falha no envio de e-mail para {$a->firstname} {$a->lastname} ({$a->email})';
$string['errorvalidarchive'] = 'Não é um ficheiro de cópia de segurança válido.';
$string['hidden'] = 'oculta';
$string['hide'] = 'Ocultar disciplinas';
$string['hideemail'] = 'Enviar e-mails "Disciplina a ocultar"';
$string['hidewarningemailsetting'] = 'Modelo de e-mail de aviso para ocultar disciplina';
$string['hidewarningemailsetting_help'] = 'Conteúdo do e-mail que será enviado a todos os professores da disciplina selecionada para ser ocultada.';
$string['hidewarningemailsettingdefault'] = '%to

Gostaríamos de informar-lhe que as seguintes disciplinas Moodle, em que foi ou é professor, brevemente ficarão ocultas.
Isto significa que os alunos que ainda estão inscritos na disciplina não poderão aceder à disciplina. Se pretende cancelar este processo, por favor, clique na hiperligação ao lado da disciplina que pretende excluir do processo.

%courses

Obrigado.';
$string['hidewarningsubject'] = 'Aviso: Em breve as disciplinas ficarão ocultas.';
$string['ignoreadmins'] = 'Ignorar acessos de administrador';
$string['ignoresiteroles'] = 'Ignorar acessos de gestor';
$string['includesubcat'] = 'Incluir disciplinas das subcategorias';
$string['invalidmode'] = 'Não foi indicado um modo válido para a ferramenta.';
$string['messageprovider:courseowner'] = 'Notificações da ferramenta de arquivar/ocultar disciplina.';
$string['never'] = 'Nunca';
$string['nocoursesfound'] = 'A pesquisa resultou em 0 disciplinas encontradas.';
$string['nocoursesselected'] = 'Para executar esta ação, tem de selecionar pelo menos 1 disciplina.';
$string['noticecoursehidden'] = 'Disciplina: ({$a->id}) {$a->fullname} já está oculta.';
$string['notices'] = 'Avisos';
$string['notices_count'] = 'Avisos: {$a}';
$string['nousersfound'] = 'Não existem proprietários de disciplina a notificar';
$string['nousersselected'] = 'Para executar esta ação, tem de selecionar pelo menos 1 utilizador.';
$string['optout'] = 'Excluir disciplinas';
$string['optoutarchive'] = 'Não arquivar esta disciplina';
$string['optoutby'] = 'Requisitado por';
$string['optoutbyemaildisabled'] = 'A opção de exclusão por e-mail está desativada.';
$string['optoutbyemailsetting'] = 'Permitir exclusão por e-mail';
$string['optoutbyemailsetting_help'] = 'Os e-mails enviados aos responsáveis pelas disciplinas incluirão uma hiperligação para a exclusão.';
$string['optoutdelete'] = 'Não apagar esta disciplina';
$string['optouthide'] = 'Não ocultar esta disciplina';
$string['optoutleft'] = '{$a} dias restantes';
$string['optoutlist'] = 'Gerir lista de exclusões';
$string['optoutmonthssetting'] = 'Persistência da disciplina na lista de exclusões';
$string['optoutmonthssetting_help'] = 'O número de meses de exclusão que será aplicado a cada disciplina.';
$string['optouttime'] = 'Tempo restante';
$string['outaccess'] = 'Último acesso';
$string['outemail'] = 'E-mail';
$string['outfirstname'] = 'Nome';
$string['outfullname'] = 'Nome completo';
$string['outid'] = 'ID';
$string['outidnumber'] = 'Código';
$string['outlastname'] = 'Apelido';
$string['outowners'] = 'Proprietários das disciplinas';
$string['outselected'] = 'Selecionar';
$string['outshortname'] = 'Nome curto';
$string['outuse'] = 'Última utilização';
$string['ownerroleid'] = 'Papel considerado proprietário da disciplina';
$string['ownerroleid_help'] = 'E-mails de desativação e pesquisas de proprietários procurarão este papel em cada disciplina. Se nenhum for selecionado, a predefinição será o papel de professor.';
$string['pluginname'] = 'Arquivar disciplina';
$string['privacy:metadata'] = 'O módulo não armazena dados do utilizador.';
$string['privacy:metadata:tool_coursearchiver'] = 'Dados relativos a utilizadores que optaram por não participar.';
$string['processarchiving'] = 'A arquivar as disciplinas selecionadas';
$string['processbackup'] = 'A efetuar cópia de segurança das disciplinas selecionadas';
$string['processcomplete'] = 'Processo concluído';
$string['processdeleting'] = 'A apagar as disciplinas selecionadas';
$string['processemailing'] = 'A enviar os e-mails';
$string['processhiding'] = 'A ocultar as disciplinas selecionadas';
$string['processoptout'] = 'Excluir disciplinas selecionadas';
$string['processstarted'] = 'O processo já foi iniciado';
$string['recover'] = 'Recuperar disciplinas';
$string['results'] = 'Resultados';
$string['results_archive'] = 'Disciplinas arquivadas: {$a}';
$string['results_archiveemail'] = 'E-mails de alerta enviados para arquivar disciplina: {$a}';
$string['results_backup'] = 'Cópias de segurança das disciplinas: {$a}';
$string['results_courselist'] = 'Disciplinas na lista: {$a}';
$string['results_delete'] = 'Disciplinas eliminadas: {$a}';
$string['results_deleteemail'] = 'Enviados e-mails de aviso de eliminação de disciplina: {$a}';
$string['results_getemails'] = 'Endereços de e-mail reunidos: {$a}';
$string['results_hide'] = 'Disciplinas ocultas: {$a}';
$string['results_hideemail'] = 'E-mails de alerta enviados para ocultar disciplina: {$a}';
$string['results_optout'] = 'Disciplinas excluídas: {$a}';
$string['resume'] = 'Continuar';
$string['resumenone'] = 'Sem pontos de cópia';
$string['resumeselect'] = 'Escolha o ponto de cópia';
$string['save'] = 'Criar ponto de cópia';
$string['saved'] = 'Criado ponto de cópia';
$string['saveddate'] = 'Data de crição';
$string['savelimitsetting'] = 'Pontos de restauro mostrados na lista';
$string['savelimitsetting_help'] = 'O número de pontos de restauro que serão exibidos na lista pendente.';
$string['savepoint_removed'] = 'Ponto de cópia removido';
$string['savestatelist'] = 'Gerir listas de pontos de cópia';
$string['search'] = 'Procurar disciplinas';
$string['selectall'] = 'Selecionar tudo';
$string['startafter'] = 'Começa depois de';
$string['startbefore'] = 'Começa antes de';
$string['startend'] = 'Começa antes/depois de';
$string['status'] = 'Estado';
$string['step2savetitle'] = 'Lista de disciplinas guardada {$a}';
$string['step3savetitle'] = 'Lista de e-mail guardada {$a}';
$string['unknownerror'] = 'O processo resultou num erro que requer a reinicialização do processo.';
$string['visible'] = 'visível';
