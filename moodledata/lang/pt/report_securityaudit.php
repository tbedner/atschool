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
 * Strings for component 'report_securityaudit', language 'pt', version '4.4'.
 *
 * @package     report_securityaudit
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessoutside'] = 'Dados acessíveis a partir do exterior';
$string['action'] = 'Ações';
$string['area'] = 'Área';
$string['auditpanel'] = 'Painel de auditoria';
$string['backups'] = 'Cópias de segurança';
$string['btnbackas'] = 'Voltar a “Administração do sítio”';
$string['check_vuls'] = 'Vulnerabilidades conhecidas';
$string['check_vuls_details_moodle'] = '<h2>Vulnerabilidades encontradas:</h2>';
$string['check_vuls_error_db'] = 'Erro ao ler a versão da base de dados. Informe o autor do plugin.';
$string['check_vuls_error_moodle'] = 'Erro ao ler a versão do Moodle. Informe o autor do plugin.';
$string['check_vuls_error_php'] = 'Erro ao ler a versão do PHP. Informe o autor do plugin.';
$string['check_vuls_founderror_db'] = 'Encontradas <span class=“badge badge-pill bg-danger”>{$a}</span> vulnerabilidades para esta versão da base de dados.';
$string['check_vuls_founderror_moodle'] = 'Encontradas <span class=“badge badge-pill bg-danger”>{$a}</span> vulnerabilidades para esta versão do Moodle.';
$string['check_vuls_founderror_php'] = 'Encontradas <span class=“badge badge-pill bg-danger”>{$a}</span> vulnerabilidades para esta versão do PHP.';
$string['check_vuls_getdata'] = 'Descarregar dados para mais informações.';
$string['check_vuls_hunknown_moodle'] = 'Falha ao estabelecer uma conexão com o servidor de análise. Pode fazê-lo manualmente no nosso sítio Web <a target=“_blank” href=“https://when2update.com”>when2update.com</a>';
$string['check_vuls_nosupporterror_db'] = 'Esta versão da base de dados já não tem suporte de segurança, pelo que se recomenda uma atualização para uma versão mais recente.';
$string['check_vuls_nosupporterror_moodle'] = 'Esta versão do Moodle já não tem suporte de segurança, pelo que se recomenda uma atualização para uma versão mais recente.';
$string['check_vuls_nosupporterror_php'] = 'Esta versão do PHP já não tem suporte de segurança, pelo que se recomenda uma atualização para uma versão mais recente.';
$string['check_vuls_ok_db'] = 'De momento, não há registo de vulnerabilidades para esta versão da base de dados.';
$string['check_vuls_ok_moodle'] = 'De momento, não há registo de vulnerabilidades para esta versão do Moodle.';
$string['check_vuls_ok_php'] = 'Neste momento, não há registo de vulnerabilidades para esta versão do PHP.';
$string['check_vuls_unknown_db'] = 'Falha ao estabelecer uma conexão com o servidor de análise. Pode fazê-lo manualmente no nosso sítio Web <a target=“_blank” href=“https://when2update.com”>when2update.com</a>';
$string['check_vuls_unknown_php'] = 'Falha ao estabelecer uma conexão com o servidor de análise. Pode fazê-lo manualmente no nosso sítio Web <a target=“_blank” href=“https://when2update.com”>when2update.com</a>';
$string['check_vulsdetails'] = '<h2>Vulnerabilidades encontradas:</h2>';
$string['check_vulserror'] = 'Erro ao ler a versão do Moodle. Informe o autor do plugin.';
$string['check_vulshok'] = 'De momento, não há registo de vulnerabilidades para esta versão do Moodle.';
$string['check_vulshunknown'] = 'Falha ao estabelecer uma conexão com o servidor de análise. Tente novamente mais tarde ou faça-o manualmente no nosso sítio Web <a target=“_blank” href=“https://when2update.com”>when2update.com</a>';
$string['check_vulsnosupporterror'] = 'Esta versão do Moodle já não tem suporte de segurança, pelo que se recomenda uma atualização para uma versão mais recente.';
$string['checkadminhasmfa'] = 'Contas de administrador com MFA';
$string['checkadminhasmfadetails'] = 'Considere ativar a autenticação de dois factores para contas de administrador para aumentar a segurança.';
$string['checkadminhasmfaerror'] = 'Alguns administradores não têm o MFA ativado.';
$string['checkadminhasmfahok'] = 'Todas as contas administrativas têm o MFA ativado.';
$string['checkadminhasmfainfo'] = 'Para que um administrador desapareça da lista acima, tem de iniciar sessão pelo menos uma vez utilizando a MFA.';
$string['checkadminhasmfanoenabled'] = 'O plug-in MFA não está ativado.';
$string['checkbackup_auto_active'] = 'Cópias de segurança das disciplinas';
$string['checkbackup_auto_activeerror'] = 'Não estão configuradas cópias de segurança automáticas ou manuais da disciplina.';
$string['checkbackup_auto_activehok'] = 'Cópias de segurança activadas. Vale a pena verificar a correção da sua execução de tempos a tempos.';
$string['checkcleantext'] = 'Limpeza de texto';
$string['checkcleantextdetails'] = 'Também pode considerar ativar a funcionalidade experimental “Limpar conteúdo em todo o lado” para uma limpeza de texto mais rigorosa.';
$string['checkcleantexterror'] = 'Tem a definição “Permitir conteúdo de confiança” activada, o que permite aos utilizadores inserir scripts que podem representar riscos de segurança.<br>Verifique se esta opção é necessária.';
$string['checkcleantextok'] = 'A opção “Permitir conteúdos de confiança” está desactivada.';
$string['checkcookiesecure'] = 'Apenas cookies seguros';
$string['checkcookiesecuredetails'] = 'De acordo com as informações sobre as definições.';
$string['checkcookiesecureerror'] = 'Se o servidor aceitar apenas ligações https: recomenda-se que active o envio de cookies seguros.';
$string['checkcookiesecurehok'] = 'A opção Apenas cookies seguros está ativa';
$string['checkcron'] = 'Operação Cron';
$string['checkcronerror'] = 'O Cron não está a funcionar corretamente.';
$string['checkcronhok'] = 'O Cron está a funcionar.';
$string['checkdebug'] = 'Mensagens de depuração';
$string['checkdebugdisplay'] = 'Apresentar mensagens de erro';
$string['checkdebugdisplayerror'] = 'A apresentação de mensagens de erro que aparecerão nas páginas HTML está activada.';
$string['checkdebugdisplayhok'] = 'A visualização de mensagens de erro está desactivada.';
$string['checkdebugerror'] = 'Uma opção diferente de <i>NONE: Não mostrar quaisquer erros ou mensagens</i> está definida.';
$string['checkdebughok'] = 'Definir como <i>NENHUM: Não mostrar quaisquer erros ou mensagens</i>.';
$string['checkenablewebservices'] = 'Protocolos activos de serviços Web';
$string['checkenablewebservicesdetails'] = 'Pode consultar <a href=“{$a}”>Protocolos de serviços Web activos</a> para verificação.';
$string['checkenablewebserviceserror'] = 'Serviços Web activados. Desativar se não for necessário.';
$string['checkenablewebserviceshok'] = 'Os serviços Web estão desactivados, o que aumenta a segurança.';
$string['checkguestloginbutton'] = 'Botão de início de sessão de convidado';
$string['checkguestloginbuttonerror'] = 'O botão de início de sessão de convidado na página de início de sessão está disponível.';
$string['checkguestloginbuttonhok'] = 'Botão de login de convidado oculto.';
$string['checklogs'] = 'Verificar os registos';
$string['checkminpasswordlength'] = 'Comprimento da palavra-passe';
$string['checkminpasswordlengtherror'] = 'O comprimento da palavra-passe é {$a}, o mínimo padrão é 8 caracteres.';
$string['checkminpasswordlengthhok'] = 'O comprimento da palavra-passe é o mínimo exigido.';
$string['checkpasswordexpiration'] = 'Ativar a expiração da palavra-passe para a autenticação <i>auth_manual</i>.';
$string['checkpasswordexpirationerror'] = 'Força uma alteração de senha após um número especificado de dias depois de ter sido atualizada pela última vez para a autorização <i>auth_manual</i>.';
$string['checkpasswordexpirationhok'] = 'Expiração da palavra-passe activada.';
$string['checkvulnerabilities_db'] = 'Segurança da base de dados';
$string['checkvulnerabilities_moodle'] = 'Segurança do Moodle';
$string['checkvulnerabilities_php'] = 'Segurança PHP';
$string['checkw2u'] = 'Verificação de vulnerabilidade remota';
$string['checkw2u_desc'] = 'Verifique as vulnerabilidades do software utilizando <a href=“https://when2update.com” target=“_blank”>when2update.com</a> (pode aumentar o tempo de carregamento do relatório devido à comunicação com um servidor externo).';
$string['countfailed'] = 'Número de problemas potenciais identificados';
$string['countsuccess'] = 'Número de corretas';
$string['critical'] = 'Crítico';
$string['critical_desc'] = 'Resolva-os rapidamente!';
$string['cve'] = 'CVE';
$string['description'] = 'Descrição';
$string['envirolment'] = 'Ambiente de tempo de execução LMS';
$string['formlmswitaibtn'] = 'Comunicar um erro / pedir ajuda / nova funcionalidade';
$string['gdpr'] = 'RGPD';
$string['info'] = 'Informações';
$string['info_desc'] = 'Verifica quando tiveres um momento...';
$string['lastcheck'] = 'Última verificação:';
$string['logfailmodule'] = 'Número de erros a partir de 7 dias';
$string['moderate'] = 'Moderado';
$string['moderate_desc'] = 'Familiarize-se e decida.';
$string['monitor_title_failureslogin'] = 'Número de logins falhados (30 dias)';
$string['monitor_title_failureslogintop'] = 'Os 10 principais problemas de início de sessão (30 dias)';
$string['monitorcronlog'] = 'As verificações de logins inválidos são efectuadas uma vez por dia, de acordo com as definições no milho, por predefinição à 1:00 da manhã.';
$string['monitoring'] = 'Controlo';
$string['nisactions'] = 'Acções';
$string['nisantivirusforlms'] = 'Antivírus para LMS';
$string['nisapprovedsecuritypolicy'] = 'Política de segurança aprovada e procedimentos de gestão de incidentes em conformidade com os requisitos NIS2.';
$string['nisassessmentofserverinfrastructure'] = 'Avaliação da infraestrutura do servidor: Análise de todos os componentes do servidor (sistema operativo, rede, software) e da sua conformidade com os requisitos NIS2.';
$string['nisauditreportidentifyingvulnerabilities'] = 'Relatório de auditoria que identifica vulnerabilidades no servidor e na plataforma LMS e recomendações de medidas corretivas.';
$string['niscategory'] = 'Categoria';
$string['niscollaborationwithexternalcompany'] = 'Colaboração com uma empresa externa';
$string['niscollaborationwithnationalcenter'] = 'Colaboração com o centro nacional responsável pela aplicação e acompanhamento da diretiva NIS2: Continuação da colaboração com as equipas de resposta a incidentes para responder a incidentes e trocar informações.';
$string['niscompletedauditconfirmingcompliance'] = 'Auditoria concluída que confirma a conformidade com a diretiva NIS2.';
$string['nisconductinginternalaudit'] = 'Realização de uma auditoria interna para avaliar a conformidade da instituição e da infraestrutura informática com os requisitos da NIS2.';
$string['nisconfigurationbyitdepartment'] = 'Configuração pelo departamento de TI';
$string['niscontinuoussystemmonitoring'] = 'Monitorização contínua do sistema: Monitorização regular do servidor e da plataforma LMS para detetar e combater novas ameaças. Monitorização de registos, incidentes e tráfego de rede.';
$string['niscorrectionsandfixes'] = 'Correcções e reparações: Com base nos resultados dos testes e auditorias, efetuar as correcções necessárias, otimizar a política de segurança e atualizar os sistemas.';
$string['nisdatabasesecurity'] = 'Segurança da base de dados: Medidas de segurança adicionais para a base de dados LMS, tais como proteção contra injeção de SQL, cópias de segurança regulares, segmentação da base de dados, software antivírus dedicado ao LMS.';
$string['nisdataencryption'] = 'Encriptação de dados: Implementar a encriptação total dos dados transmitidos entre os utilizadores e o servidor (SSL/TLS), bem como a encriptação dos dados armazenados no servidor (nas bases de dados LMS).';
$string['nisdevelopmentofsecuritypolicy'] = '2. Desenvolvimento de uma política de segurança';
$string['nisenhancedmonitoringoflmsandserver'] = 'Monitorização melhorada do LMS e do servidor';
$string['nisfullcompliancewithnis2'] = 'Conformidade total com os requisitos NIS2 e manutenção de actualizações contínuas e monitorização da segurança.';
$string['nisincidentmanagementprocedurecreation'] = 'Criação de procedimentos de gestão de incidentes: Desenvolvimento e implementação de procedimentos para a comunicação e gestão de incidentes relacionados com a cibersegurança (por exemplo, ataques de hackers, fugas de dados).';
$string['nisincidentsimulationexercises'] = 'Exercícios de simulação de incidentes: Organização de simulações de ciberataques e incidentes (por exemplo, phishing), para que o pessoal de TI e os utilizadores possam praticar os procedimentos de resposta.';
$string['nisincreasedcybersecurityawareness'] = 'Maior sensibilização para a cibersegurança entre o pessoal e os utilizadores da plataforma LMS.';
$string['nislmsandserversecuritypolicy'] = 'Política de segurança do LMS e do servidor: Desenvolvimento de uma política de segurança abrangente que cubra a plataforma LMS, o servidor, a gestão de dados do utilizador e o acesso. Esta política deve especificar as normas relativas a palavras-passe, autorização, cópias de segurança e monitorização do sistema.';
$string['nislmsandserverupdates'] = 'Actualizações do LMS e do servidor';
$string['nislmssoftwareaudit'] = 'Auditoria do software LMS: Encomendar uma auditoria externa que avaliará o nível de segurança do LMS e do servidor. Isto inclui a verificação da configuração do servidor, bases de dados, sistemas de cópia de segurança e gestão de utilizadores.';
$string['nismethodofimplementation'] = 'Método de aplicação';
$string['nismonitoringandcontinuousimprovement'] = '6. Controlo e melhoria contínua';
$string['nismonitoringandlogging'] = 'Monitorização e registo: Implementação de ferramentas para monitorizar o tráfego de rede, registar a atividade dos utilizadores e gravar eventos ao nível do servidor e da plataforma LMS, WAF dedicado à plataforma de e-learning (Web Application Firewall).';
$string['nispenetrationtesting'] = 'Teste de intrusão: Realização de testes de penetração (por exemplo, OWASP Top 10) para verificar a eficácia das medidas de segurança implementadas no servidor e na plataforma LMS. Estes testes têm como objetivo simular potenciais ataques.';
$string['nispreparationofriskmanagementplan'] = 'Elaboração de um plano de gestão dos riscos: Um documento que define os princípios da gestão de riscos, a sua identificação e controlo, com especial ênfase nos dados dos utilizadores do LMS.';
$string['nisregularsecurityupdates'] = 'Actualizações de segurança regulares: Continuação do carregamento periódico de actualizações para o servidor, o software LMS e todas as ferramentas de segurança.';
$string['nisresult'] = 'Resultado';
$string['nisriskanalysis'] = 'Análise de risco: Identificação de ameaças relacionadas com o alojamento do LMS, acesso não autorizado aos dados do utilizador, como a vulnerabilidade a ataques DDoS ou malware.';
$string['nissecurityauditandriskanalysis'] = '1. Auditoria de segurança e análise de risco';
$string['nissecuritypolicyreviews'] = 'Revisões da política de segurança: Revisões e actualizações regulares da política de segurança, pelo menos uma vez por ano, tendo em conta novas ameaças e alterações legais.';
$string['nissecuritytestingandnis2complianceaudit'] = '5. Testes de segurança e auditoria de conformidade NIS2';
$string['nissecuritytraininginlms'] = 'Formação - Como utilizar o LMS em segurança?';
$string['nisserverandlmssecurityupgrades'] = '3. Actualizações de segurança do servidor e do LMS';
$string['nisserverupdate'] = 'Atualização do servidor: instalação das últimas correcções de segurança para o sistema operativo do servidor e o software LMS. Configuração de firewall, sistemas de deteção de intrusão (IDS/IPS) para o servidor, WAF dedicado para a plataforma de e-learning (Web Application Firewall).';
$string['nistrainingforitteam'] = 'Formação para a equipa informática: Formação técnica especializada em gestão de servidores, actualizações de segurança e resposta a ameaças cibernéticas.';
$string['nistrainingforusersoflms'] = 'Formação dos utilizadores da plataforma LMS: Preparação de programas de formação para utilizadores (professores, estudantes, administração) que abrangem a utilização segura do LMS, a proteção por palavra-passe e as melhores práticas em matéria de cibersegurança.';
$string['nistrainingofitstaffandusers'] = '4. Formação do pessoal informático e dos utilizadores';
$string['nisupdatedstrengthenedserver'] = 'Atualização e reforço do servidor, aumento da segurança da plataforma LMS e melhoria dos mecanismos de gestão de dados.';
$string['niswafforlms'] = 'WAF para LMS';
$string['nodata'] = 'Sem dados';
$string['nofail_desc'] = 'Esta área não regista problemas.';
$string['nofail_title'] = 'Ótimo!';
$string['nointernallogerror'] = 'A monitorização de logins incorrectos apenas suporta a base de dados de logs internos.';
$string['normal'] = 'Normal';
$string['normal_desc'] = 'Muito bom.';
$string['notassigned'] = 'Não atribuído';
$string['other'] = 'Outros';
$string['overallmodule'] = 'Classificação geral';
$string['password_expire_stats'] = 'Estatísticas de alteração da palavra-passe';
$string['pluginname'] = 'Relatório de auditoria de segurança NIS2 e RGPD';
$string['quantity'] = 'Quantidade';
$string['recommended_minimum_update'] = 'Actualize a plataforma para, pelo menos, a versão <strong>{$a}</strong> para eliminar as vulnerabilidades listadas abaixo. Se pretender resolver apenas vulnerabilidades específicas, actualize a plataforma de e-learning para a versão apresentada na tabela ou (se disponível) desactive o elemento relevante para garantir a segurança.';
$string['requirementsnistwo'] = 'Requisitos NIS2';
$string['security'] = 'Segurança';
$string['securityaudit'] = 'Auditoria de segurança';
$string['securityaudit:monitor'] = 'Ver monitor de auditoria de segurança';
$string['securityaudit:nis'] = 'Ver relatório NIS2';
$string['securityaudit:view'] = 'Ver relatório de auditoria de segurança';
$string['setting'] = 'Definições';
$string['status'] = 'Estado';
$string['tooltipcheckbtn'] = 'Descarregar informações do servidor When2update.com';
$string['tooltipfaillogs'] = 'Número de inícios de sessão falhados em 30 dias';
$string['unknown'] = 'Desconhecido';
$string['user_login_failed_stats'] = 'Estatísticas de login falhadas';
$string['usersaccount'] = 'Contas de utilizador';
$string['versionfixed'] = 'Versão corrigida';
$string['vulnerabilitie'] = 'Vulnerabilidade';
$string['vulnerabilities'] = 'Vulnerabilidades';
