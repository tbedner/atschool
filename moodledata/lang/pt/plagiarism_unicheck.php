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
 * Strings for component 'plagiarism_unicheck', language 'pt', version '4.4'.
 *
 * @package     plagiarism_unicheck
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['api_secret'] = 'Segredo da API';
$string['api_secret_help'] = 'Segredo da API fornecido pelo Unicheck para ativar o plugin do Moodle. Pode encontrá-lo em <a href="https://corp.unicheck.com/profile/apisettings">https://corp.unicheck.com/profile/apisettings</a>';
$string['archive:limitreachedfulldescription'] = 'Existem mais documentos no ficheiro "{$a->filename}", mas não foi possível analisá-los, pois o limite de documentos que podem ser analisados dentro de uma pasta zip é {$a->max_supported_count}. Contacte o administrador da instalação deste Moodle para alterar este valor';
$string['archive:limitreachedshortdescripton'] = 'Nem todos os documentos foram analisados';
$string['attempts'] = 'Tentativas realizadas';
$string['check_all_submitted_assignments'] = 'Verificar submissões de trabalhos já entregues';
$string['check_all_submitted_assignments_help'] = 'Caso o Unicheck tenha sido desativado ou pretenda gerar relatórios de submissões antigas, ative esta opção e guarde as configurações. Isto irá acionar a verificação em massa de todos os trabalhos (ficheiros e/ou texto) enviados para avaliação. A verificação irá começar dentro de alguns minutos após a opção ser ativada.';
$string['check_confirm'] = 'Tem a certeza de que deseja iniciar a verificação pelo plugin de plágio do Unicheck?';
$string['check_file'] = 'Iniciar uma análise';
$string['check_start'] = 'Classificação de originalidade Unicheck em progresso';
$string['check_type'] = 'Fontes para comparação';
$string['check_type_help'] = 'a) Internet - uma coleção da Internet em constante atualização de biliões de recursos online (artigos, páginas web, publicações de blogues, notícias, ficheiros, etc.). Esta fonte inclui publicações de acesso aberto em repositórios, revistas e publicações nas páginas pessoais dos autores.
<br>b) Biblioteca Institucional do Unicheck - uma coleção de submissões de alunos mantida por esta instituição. Os ficheiros são adicionados à coleção apenas quando a opção ""Adicionar à Biblioteca Institucional do Unicheck"" estiver ativada.
<br>c) Base de dados externa - fontes de dados de textos adicionais mantidos por esta instituição (por exemplo, as submissões de ex-alunos).';
$string['client_id'] = 'ID de Cliente';
$string['client_id_help'] = 'ID de Cliente fornecido pelo Unicheck para identificar a conta Unicheck. Pode encontrá-lo em <a href="https://corp.unicheck.com/profile/apisettings">https://corp.unicheck.com/profile/apisettings</a>';
$string['cronwarning'] = 'O script de manutenção <a href="../../admin/cron.php">cron.php</a> já não é executado há pelo menos 30 minutos. O cron deve ser configurado para permitir que o Unicheck funcione corretamente.';
$string['defaultsdesc'] = 'Definições padrão para novos trabalhos: Escolha a partir das opções ao lado dos seguintes itens para configurar as definições padrão para novos trabalhos. Os professores podem ajustar as definições disponíveis nos próprios trabalhos';
$string['defaultupdated'] = 'Valores padrão atualizados';
$string['delete'] = 'Excluir';
$string['deletedwarning'] = 'Não foi possível encontrar este ficheiro. Ele pode ter sido excluído pelo utilizador';
$string['draft_submit'] = 'Quando é que o ficheiro deve ser enviado para o Unicheck';
$string['enable_api_logging'] = 'Ativar o registo de eventos da API';
$string['enable_api_logging_help'] = 'Selecione esta caixa para ativar o registo de eventos da API do Unicheck nesta instância do Moodle. Esta opção mostra os dados em bruto de solicitações/respostas à API do Unicheck';
$string['enable_mod_assign'] = 'Ativar o Unicheck na atividade de Trabalhos';
$string['enable_mod_assign_help'] = 'Ative o Serviço de Plágio Unicheck para a atividade de Trabalhos (suporta submissões de ficheiros e textos online)';
$string['enable_mod_forum'] = 'Ativar o Unicheck na atividade de Fórum';
$string['enable_mod_forum_help'] = 'Ative o Serviço de Plágio Unicheck para a atividade de Fórum (suporta submissões de ficheiros e respostas de texto)';
$string['enable_mod_workshop'] = 'Ativar o Unicheck na atividade de Workshops';
$string['enable_mod_workshop_help'] = 'Ative o Serviço de Plágio Unicheck para a atividade de Workshops (suporta submissões de textos e ficheiros)';
$string['enable_plugin'] = 'Ativar o Serviço de Plágio Unicheck';
$string['enable_plugin_help'] = 'Selecione esta caixa para ativar o Serviço de Plágio Unicheck nesta instância do Moodle.';
$string['event:api_called'] = 'Pedido de API';
$string['event:api_user_created'] = 'Utilizador criado';
$string['event:archive_files_checked'] = 'Ficheiros do arquivo verificados';
$string['event:archive_files_unpacked'] = 'Ficheiros do arquivo descompactados e prontos para a verificação de similaridade';
$string['event:archive_files_uploaded'] = 'Ficheiros do arquivo carregados';
$string['event:callback_accepted'] = 'Callback aceite';
$string['event:error_handled'] = 'Erro corrigido';
$string['event:file_similarity_check_completed'] = 'Verificação de similaridade concluída';
$string['event:file_similarity_check_failed'] = 'Falha na verificação de similaridade';
$string['event:file_similarity_check_started'] = 'Verificação de similaridade iniciada';
$string['event:file_upload_completed'] = 'Upload do ficheiro concluído';
$string['event:file_upload_failed'] = 'Falha no upload do ficheiro';
$string['event:file_upload_started'] = 'Upload do ficheiro iniciado';
$string['exclude_citations'] = 'Excluir referências e citações';
$string['exclude_citations_help'] = 'Ative esta opção para identificar e excluir referências e citações. O Unicheck identifica citações de acordo com as regras descritas nos guias da APA, MLA, Chicago, Turabian e Harvard. As citações devem estar marcadas em azul e as referências, em violeta. Estes itens serão excluídos da percentagem de similaridade total.';
$string['exclude_self_plagiarism'] = 'Excluir autoplágio';
$string['exclude_self_plagiarism_help'] = 'Ative esta opção para excluir o autoplágio no mesmo curso. Correspondências com trabalhos de outros cursos ainda serão consideradas no relatório. <br>Esta opção deve ser ativada antes do início das submissões e não deve ser alterada posteriormente.';
$string['explainerrors'] = 'Esta página lista todos os ficheiros que estão atualmente em estado de erro. <br/>Quando os ficheiros forem excluídos desta página, eles não poderão ser reenviados e os erros não voltarão a aparecer para os professores ou alunos';
$string['external_database'] = 'Base de dados externa';
$string['file'] = 'Ficheiro';
$string['filedeleted'] = 'Ficheiro excluído da lista';
$string['filereset'] = 'Um ficheiro foi redefinido para ser ressubmetido para o Unicheck';
$string['fileresubmitted'] = 'Ficheiro na lista para ressubmissão';
$string['generalinfo'] = 'Informação geral';
$string['getscore'] = 'Obter a percentagem';
$string['heldevents'] = 'Tarefas em espera';
$string['heldeventsdescription'] = 'Estas são tarefas que não foram concluídas na primeira tentativa e entraram na lista para ressubmissão - isso impede que as tarefas subsequentes sejam concluídas e pode precisar de averiguação adicional. Algumas destas tarefas podem não ser relevantes para o Unicheck.';
$string['id'] = 'ID';
$string['identifier'] = 'Identificador';
$string['max_100000_words'] = 'O(s) ficheiro(s) não deve(m) ter mais de 100.000 palavras, nem mais de 70MB';
$string['max_supported_archive_files_count'] = 'Número máximo de ficheiros a serem verificados em arquivo';
$string['max_supported_archive_files_count_help'] = 'Especifique o número máximo de ficheiros a serem analisados pelo Unicheck. O sistema irá escolher apenas tipos de ficheiros suportados pelo Unicheck e irá processá-los um por um. Formatos suportados: ZIP, RAR.';
$string['min_30_words'] = 'Pelo menos 30 palavras são obrigatórias';
$string['module'] = 'Módulo';
$string['my_library'] = 'Biblioteca';
$string['name'] = 'Nome';
$string['no_index_files'] = 'Adicionar submissões à Biblioteca Institucional';
$string['no_index_files_help'] = 'As submissões de alunos são adicionadas à Biblioteca Institucional privada apenas quando esta opção estiver ativada. As novas submissões de alunos são comparadas com os trabalhos armazenados nesta Biblioteca Institucional, para além da Internet. Esta biblioteca contém apenas artigos submetidos por alunos desta instituição e não é compartilhada com outras instituições.';
$string['noreceiver'] = 'Não foi especificado um endereço de destinatário';
$string['pending'] = 'Este ficheiro ainda não foi submetido para o Unicheck';
$string['plagiarism'] = 'Potencial plágio';
$string['plagiarism_run_success'] = 'Ficheiro enviado para análise de plágio';
$string['plagiarismcheckerid'] = 'ID no Unicheck: {$a->id}';
$string['pluginname'] = 'Plugin de plágio do Unicheck';
$string['previouslysubmitted'] = 'Anteriormente submetido como';
$string['processing'] = 'Este ficheiro foi submetido para o Unicheck, agora está a aguardar que a análise esteja disponível';
$string['progress'] = 'Análise Unicheck';
$string['receivernotvalid'] = 'Este endereço de destinatário não é válido.';
$string['refresh'] = 'Atualize a página para ver os resultados';
$string['report'] = 'Ver o relatório completo';
$string['reportready'] = 'Relatório pronto';
$string['resubmit'] = 'Ressubmeter';
$string['savedconfigfailed'] = 'Foi inserida uma combinação incorreta de ID de Cliente/Segredo da API. O Unicheck foi desabilitado, tente novamente.';
$string['savedconfigsuccess'] = 'As definições de deteção de plágio foram guardadas';
$string['scoreavailable'] = 'Este ficheiro foi processado pelo Unicheck e um relatório já está disponível.';
$string['scorenotavailableyet'] = 'Este ficheiro ainda não foi processado pelo Unicheck.';
$string['sent_student_report'] = 'Notificar os alunos por e-mail';
$string['sent_student_report_help'] = 'Os alunos irão receber informações sobre os resultados da análise por e-mail.';
$string['show_student_report'] = 'Mostrar relatórios de similaridade ao aluno';
$string['show_student_report_help'] = 'Os alunos veem relatórios de similaridade apenas das submissões deles e não veem os relatórios de outros alunos.';
$string['show_student_score'] = 'Mostrar percentagens de similaridade ao aluno';
$string['show_student_score_help'] = 'Os alunos veem percentagens de similaridade apenas das submissões deles e não veem as percentagens de outros alunos.';
$string['showwhenclosed'] = 'Quando a Atividade estiver encerrada';
$string['similarity'] = 'Similaridade';
$string['similarity_sensitivity'] = 'Excluir fontes com uma correspondência de menos de (%)';
$string['similarity_sensitivity_help'] = 'Fontes com menos do que a % de similaridade especificada não serão incluídas na percentagem de similaridade total.';
$string['similarity_words_sensitivity'] = 'Excluir fontes com uma correspondência de menos de (palavras)';
$string['similarity_words_sensitivity_help'] = 'Fontes com menos do que o número de palavras especificado (no mínimo 8) não serão incluídas na percentagem de similaridade total.';
$string['status'] = 'Estado';
$string['studentdisclosure'] = 'Familiarizar os alunos sobre o Serviço de Plágio Unicheck';
$string['studentdisclosure_help'] = 'Os alunos irão ver esta mensagem ao fazer o upload de um ficheiro, nos casos em que o Unicheck estiver ativado.';
$string['studentdisclosuredefault'] = 'Todos os ficheiros enviados serão submetidos para o sistema de deteção de plágio Unicheck.';
$string['studentemailcontent'] = 'O ficheiro que submeteu para {$a->modulename} na disciplina {$a->coursename} já foi processado pelo sistema de deteção de plágio Unicheck
{$a->modulelink}';
$string['studentemailsubject'] = 'Ficheiro processado pelo Unicheck';
$string['submitondraft'] = 'Submeter o ficheiro quando for feito o upload pela primeira vez';
$string['submitonfinal'] = 'Submeter o ficheiro quando o aluno o enviar para classificação';
$string['sync_failed'] = 'Tentar sincronizar ficheiros não processados';
$string['toolarge'] = 'Este ficheiro é demasiado grande para o Unicheck processar';
$string['ufiles'] = 'Ficheiros do Unicheck';
$string['unicheck'] = 'Plugin de plágio do Unicheck';
$string['unicheck:changeaddsubmissiontolibrarysetting'] = 'Permitir ativar/desativar a adição de submissões à biblioteca institucional';
$string['unicheck:changecheckalreadysubmittedassignmentsetting'] = 'Permitir ativar/desativar a análise de submissões de trabalhos já entregues';
$string['unicheck:changeenableunichecksetting'] = 'Permitir ativar/desativar o Serviço de Plágio Unicheck em atividades';
$string['unicheck:changeexcludecitationssetting'] = 'Permitir ativar/desativar a exclusão de referências e citações';
$string['unicheck:changeexcludeselfplagiarismsetting'] = 'Permitir ativar/desativar a exclusão de autoplágio no curso';
$string['unicheck:changemaxsupportedarchivefilescountsetting'] = 'Permitir a alteração do número máximo de ficheiros a serem analisados em arquivo';
$string['unicheck:changesensitivitypercentagesetting'] = 'Permitir a alteração de fontes com uma correspondência de menos de (%)';
$string['unicheck:changesentstudentreportsetting'] = 'Permitir ativar/desativar o envio do relatório aos alunos por e-mail';
$string['unicheck:changeshowstudentreportsetting'] = 'Permitir ativar/desativar a exibição de relatórios de similaridade aos alunos';
$string['unicheck:changeshowstudentscoresetting'] = 'Permitir ativar/desativar a exibição de percentagens de similaridade aos alunos';
$string['unicheck:changesourcesforcomparisonsetting'] = 'Permitir a alteração de fontes para comparação';
$string['unicheck:changewordsensitivitysetting'] = 'Permitir a alteração de exclusão de fontes com uma correspondência de menos de (palavras)';
$string['unicheck:checkfile'] = 'Permitir a análise de similaridade no ficheiro';
$string['unicheck:enable'] = 'Permitir ativar/desativar o Unicheck dentro de uma atividade';
$string['unicheck:resetfile'] = 'Permitir a ressubmissão do ficheiro para o Unicheck após a ocorrência de um erro';
$string['unicheck:vieweditreport'] = 'Permitir a edição do relatório completo do Unicheck';
$string['unicheck:viewreport'] = 'Permitir a visualização do relatório completo do Unicheck';
$string['unicheck:viewsimilarity'] = 'Permitir a visualização do valor de similaridade do Unicheck';
$string['unicheck_enable'] = 'Ativar o plugin do Unicheck';
$string['unicheck_lang'] = 'Idioma';
$string['unicheck_lang_help'] = 'Código de idioma fornecido pela Unicheck';
$string['unicheck_settings_url_text'] = 'Abrir a conta de administrador do unicheck.com para ver/copiar o ID de Cliente/Segredo da API';
$string['unicheckdebug'] = 'Depuração';
$string['unicheckdefaults'] = 'Definições padrão do Unicheck';
$string['unknownwarning'] = 'Ocorreu um erro ao tentar enviar este ficheiro para o Unicheck';
$string['unsupportedfiletype'] = 'Este tipo de ficheiro não é suportado pelo Unicheck';
$string['upload_error'] = 'Erro no upload do ficheiro';
$string['uploading'] = 'A fazer o upload';
$string['use_assign_desc_param'] = 'Para desbloquear as definições do Unicheck';
$string['use_assign_desc_value'] = 'Definir as definições de submissão → Requer que os alunos carreguem no botão de submeter = Sim';
$string['use_unicheck'] = 'Ativar o Serviço de Plágio Unicheck';
$string['use_unicheck_help'] = 'As similaridades serão automaticamente analisadas nas novas submissões assim que estas forem submetidas.';
$string['waitingevents'] = 'Existem {$a->countallevents} tarefas à espera do cron e {$a->countheld} tarefas que estão retidas para ressubmissão';
$string['web'] = 'Internet';
$string['web_and_my_lib_and_external_db'] = 'Internet + Biblioteca + Base de dados externa';
$string['web_and_my_library'] = 'Internet + Biblioteca';
