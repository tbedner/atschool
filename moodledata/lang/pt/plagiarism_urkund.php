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
 * Strings for component 'plagiarism_urkund', language 'pt', version '4.4'.
 *
 * @package     plagiarism_urkund
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowallsupportedfiles'] = 'Permitir todos os tipos de ficheiros suportados';
$string['allowallsupportedfiles_help'] = 'Esta opção permite ao professor restringir que tipos de ficheiros são enviados ao Ouriginal para processamento. Não impede os alunos de carregarem outros tipos de ficheiros no trabalho.';
$string['debugfilter'] = 'Filtrar ficheiros por';
$string['defaultsdesc'] = 'Ao ativar o Ouriginal dentro de um módulo de atividade, as seguintes definições passam a ser definições padrão.';
$string['defaultupdated'] = 'Valores padrão atualizados';
$string['filereset'] = 'Um ficheiro foi restaurado para resubmissão no Ouriginal';
$string['optout'] = 'Opt-out';
$string['pending'] = 'Este ficheiro está pendente para submissão no Ouriginal';
$string['pluginname'] = 'Ouriginal módulo de plágio';
$string['previouslysubmitted'] = 'Apresentado anteriormente como';
$string['processing'] = 'Este ficheiro foi submetido no Ouriginal, encontra-se em espera para análise para ficar disponível';
$string['receivernotvalid'] = 'Esse endereço de análise não é válido';
$string['restrictfiles'] = 'Tipos de ficheiros a submeter';
$string['resubmit'] = 'Ressubmeter';
$string['resubmittourkund'] = 'Refazer todos os relatórios Ouriginal';
$string['savedconfigfailed'] = 'Uma combinação username/senha incorreta foi inserida, o Ouriginal foi desativado. Por favor, tente novamente.';
$string['savedconfigsuccess'] = 'Configurações de plágio guardadas';
$string['scoreavailable'] = 'Este ficheiro foi processado pelo Ouriginal e já se encontra disponível o relatório.';
$string['scorenotavailableyet'] = 'Este ficheiro ainda não foi processado pelo Ouriginal.';
$string['similarity'] = 'Ouriginal';
$string['studentdisclosure'] = 'Identificação do aluno';
$string['studentdisclosure_help'] = 'Este texto será exibido para todos os alunos na página de envio de ficheiros.';
$string['studentdisclosuredefault'] = 'Todos os ficheiros enviados serão submetidos à análise do Ouriginal, se pretende impedir que o documento seja utilizado como fonte de análise fora deste site por outras organizações utilize a hiperligação de opt-out fornecida após o relatório ser gerado.';
$string['studentemailcontent'] = 'O ficheiro que submeteu para {$a->modulename} na disciplina {$a->coursename} já foi processado pela  ferramenta de plágio Ouriginal.
{$a->modulelink}

Se pretende impedir que o documento seja utilizado como fonte de análise fora deste site por outras organizações, utilize esta hiperligação de opt-out:
{$a->optoutlink}';
$string['studentemailsubject'] = 'Ficheiro processado por Ouriginal';
$string['submitondraft'] = 'Submeter ficheiro no primeiro envio';
$string['submitonfinal'] = 'Submeter ficheiro quando o aluno envia para avaliação';
$string['toolarge'] = 'Este ficheiro é muito grande para o Ouriginal processar';
$string['unknownwarning'] = 'Ocorreu um erro ao tentar enviar este ficheiro para o Ouriginal';
$string['unsupportedfiletype'] = 'Este tipo de ficheiro não é suportado pelo Ouriginal';
$string['urkund'] = 'Ouriginal módulo de plágio';
$string['urkund:viewreport'] = 'Permitir ao professor visualizar o relatório completo do Ouriginal';
$string['urkund_api'] = 'Ouriginal Endereço de Integração';
$string['urkund_api_help'] = 'Este é o endereço da API Ouriginal';
$string['urkund_draft_submit'] = 'Quando o ficheiro deve ser submetido ao Ouriginal';
$string['urkund_lang'] = 'Idioma';
$string['urkund_lang_help'] = 'Código de linguagem fornecida pelo Ouriginal';
$string['urkund_password'] = 'Senha';
$string['urkund_password_help'] = 'Senha fornecida pelo Ouriginal para ter acesso à API';
$string['urkund_receiver'] = 'Endereço receptor';
$string['urkund_receiver_help'] = 'Este é o endereço único fornecido a partir Ouriginal para o professor';
$string['urkund_resubmit_on_close'] = 'Ressubmeter após fecho';
$string['urkund_resubmit_on_close_help'] = 'Ao ativar esta opção as submissões serão reenviadas ao Ouriginal após terminar o período de submissão dos trabalhos.';
$string['urkund_show_student_report'] = 'Mostrar ao aluno um relatório detalhado';
$string['urkund_show_student_report_help'] = 'O relatório detalhado apresenta ao aluno que partes do texto
foram potencialmente plagiadas e as fontes onde o Ouriginal as encontrou originalmente';
$string['urkund_show_student_score'] = 'Mostrar ao aluno a percentagem de plágio';
$string['urkund_show_student_score_help'] = 'Mostra ao aluno a percentagem de tópicos do documento que coincidem com outros conteúdos, sem mostrar detalhes sobre que partes foram potencialmente plagiadas';
$string['urkund_studentemail'] = 'Enviar e-mail ao aluno';
$string['urkund_studentemail_help'] = 'Irá enviar um e-mail ao aluno quando um ficheiro for processado para que ele saiba que o relatório está disponível. O e-mail também inclui a hiperligação de opt-out.';
$string['urkund_username'] = 'Nome de utilizador';
$string['urkund_username_help'] = 'Username fornecido pelo Ouriginal para aceder à API';
$string['urkunddefaults'] = 'Definições padrão Ouriginal';
$string['urkundexplain'] = 'Para mais informações sobre este módulo, consulte:<a href="https://ouriginal.com" target="_blank">ouriginal.com</a>';
$string['useurkund'] = 'Ativar URKUND';
