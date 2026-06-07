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
 * Strings for component 'local_learning_analytics', language 'pt', version '4.4'.
 *
 * @package     local_learning_analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admin_customfield_category'] = 'Renomear a categoria';
$string['admin_customfield_category_hint'] = 'clique no ícone de lápis ao lado nome da categoria';
$string['admin_customfield_info'] = 'Pode alterar o nome da opção nas configurações da disciplina, renomeando-as nas seguintes páginas:';
$string['admin_customfield_no_manual_delete'] = 'Não apague a categoria ou a opção. Só pode renomear. Se pretende apagar a opção, altere o estado acima.';
$string['admin_customfield_option'] = 'Renomear a opção';
$string['admin_customfield_option_hint'] = 'só pode alterar o nome e o texto da descrição';
$string['customfield_category_description'] = 'Esta categoria foi criada automaticamente pelo módulo Análise da aprendizagem (local_learning_analytics). Não deve apagá-la manualmente.';
$string['customfield_category_name'] = 'Análise da aprendizagem';
$string['customfield_field_description'] = 'A ativação adiciona a hiperligação "Estatísticas de uso" à navegação da disciplina.';
$string['customfield_field_name'] = 'Ativar estatísticas de uso';
$string['dataprivacy_threshold_description'] = 'Este valor determina o número de dados que um conjunto de dados precisa de ter para que os dados sejam exibidos.';
$string['general_settings'] = 'Configurações gerais';
$string['help_faq'] = 'Perguntas mais frequentes (FAQ)';
$string['help_faq_data_storage_answer'] = 'Os dados apresentados são provenientes de duas fontes de dados.
Ambas as fontes são armazenadas na base de dados interna do Moodle.
A primeira fonte de dados é a base de dados interna do Moodle, tais como o número de alunos da disciplina (caixa à esquerda no painel).
Alguns destes conjuntos de dados podem ser visualizados noutras páginas do Moodle e são apenas visualizados de forma diferente nestas páginas.
A segunda fonte de dados são os dados recolhidos especificamente para apresentação na página \'Estatísticas de uso\'.
Todos os dados recolhidos para este fim são armazenados anonimamente e não podem ser monitorizados até aos utilizadores.
Especificamente, os seguintes dados são armazenados com cada solicitação no Moodle:';
$string['help_faq_data_storage_answer_list'] = 'Tipo de ação (por exemplo, "Recurso visualizado")
Tempo (ao segundo)
Disciplina correspondente em que a ação ocorreu
Contexto correspondente (por exemplo: o recurso que foi visualizado)
Sistema operativo e navegador (por exemplo: "Windows 10" e "Firefox"). Detalhes do navegador ou versões do sistema operativo não são armazenados';
$string['help_faq_data_storage_question'] = 'Que dados são armazenados e exibidos pelo serviço?';
$string['help_faq_datapoints_answer'] = 'Os números mostrados indicam o número de acessos. Pode variar muito dependendo do tipo de recurso/atividade.
Por exemplo, quando um PDF é descarregado apenas é registado um acesso.
No entanto, no caso de um teste em que as perguntas estão distribuídas por várias páginas, serão registados vários acessos no decorrer de uma única execução do teste.';
$string['help_faq_datapoints_question'] = 'Porque é que o número de acessos é tão diferente para diferentes tipos de atividades/recursos?';
$string['help_faq_developer_answer'] = 'O serviço Análise da aprendizagem é desenvolvido pelo Center for Teaching and Learning Services da RWTH Aachen University.
O desenvolvimento é Open Source e, por isso, pode verificar os algoritmos usados. Para mais informação:';
$string['help_faq_developer_question'] = 'Quem desenvolve o serviço e onde posso obter mais informações?';
$string['help_faq_personal_data_answer'] = 'Por motivos de privacidade, o serviço Análise da aprendizagem não guarda dados personalizados. A maioria das estatísticas exibidas (por exemplo, atividades mais usadas) contém apenas informações sobre a frequência com que um recurso foi acedido, mas não por quantos participantes.
Uma exceção a esta regra são as estatísticas sobre participantes e testes/trabalhos, que também exibem dados internos do Moodle.';
$string['help_faq_personal_data_question'] = 'Porque é que não é exibida qualquer estatística personalizada, como por exemplo: cliques por utilizador?';
$string['help_faq_privacy_threshold_answer'] = 'Por motivos de privacidade, os dados agregados apenas são exibidos se tiverem pelo menos {$a} dados.';
$string['help_faq_privacy_threshold_question'] = 'Porque é que alguns valores são mostrados como "< {$a}"?';
$string['help_faq_visibility_answer'] = 'Para garantir a máxima transparência, os dados exibidos podem ser visualizados pelos proprietários da disciplina assim como pelos participantes da disciplina.';
$string['help_faq_visibility_question'] = 'Quem pode aceder às estatísticas de uso?';
$string['help_faq_week_start_answer'] = 'A visualização no painel depende da configuração "Data de início" nas configurações da disciplina. Se a data especificada não corresponder ao início real, a exibição no painel também não estará correta.
O gestor desta disciplina pode corrigir a data nas configurações da disciplina (Geral / Data de início).';
$string['help_faq_week_start_question'] = 'Porque é que a primeira semana no gráfico do painel não corresponde ao início real de leitura?';
$string['help_take_tour'] = 'Demonstração ao utilizador';
$string['help_text'] = 'A página "Estatísticas de uso" do serviço Análise da aprendizagem mostra as principais métricas da sua disciplina.

As estatísticas apresentadas são em tempo real e apresentam dados que foram recolhidos pelo serviço, bem como dados da própria disciplina. Todos os dados usados pelo serviço Análise da Aprendizagem são recolhidos de forma totalmente anónima e não podem ser monitorizados até aos utilizadores.';
$string['help_title'] = 'Ajuda';
$string['hits'] = 'Acessos';
$string['learners'] = 'Alunos';
$string['learning_analytics'] = 'Análise da aprendizagem';
$string['learning_analytics:view_statistics'] = 'Aceder às estatísticas de uso nas disciplinas';
$string['navigation_position_beforekey_description'] = 'Permite especificar onde é adicionada a hiperligação para a página na navegação da disciplina. Por predefinição, a hiperligação é adicionada antes do primeiro nó de "secção". Valor de exemplo: <code>notas</code> a ser mostrado antes da hiperligação para as notas. Pode encontrar a chave de um nó na navegação usando as ferramentas do programador. Clique com o botão direito numa hiperligação na navegação, clique depois em <em>Inspecionar</em> e verifique o atributo <code>data-key</code> do elemento <code>a</code> correspondente.';
$string['navigationlink'] = 'Estatísticas de uso';
$string['pluginname'] = 'Análise da aprendizagem';
$string['privacy:metadata'] = 'Este módulo não armazena quaisquer dados pessoais.';
$string['sessions'] = 'Sessões';
$string['setting_course_ids_description'] = 'Use esta opção quando selecionar a segunda opção acima para decidir em quais disciplinas a interface do utilizador deve ser ativada.';
$string['setting_dashboard_boxes'] = 'Determina que caixas são exibidas no painel, em que ordem e o tamanho das caixas. A especificação está no formato <code>reportname:width</code>, separados por vírgulas. Uma linha tem uma largura máxima de 12, após a qual é quebrada. Por exemplo: <code>learners:8,activities:4</code> (participantes:8,atividades:4) exibe duas caixas no painel, onde a primeira é muito mais larga do que a segunda. Na maioria dos casos, o valor só precisa ser alterado se outros sub-módulos estiverem instalados.';
$string['setting_status_course_customfield'] = 'Adicionar uma opção às configurações da disciplina para que os professores possam ativá-la';
$string['setting_status_description'] = 'Este valor define se a interface do utilizador deve ser ativada e se deve ser mostrada, ou não, uma hiperligação na navegação. Por predefinição, a hiperligação e a página ficam visíveis se o registo estiver ativado para a disciplina. Pode usar esta opção se pretende ativar o registo em todas disciplinas, mas só pretende a interface do utilizador em disciplinas específicas.';
$string['setting_status_option_disable'] = 'Ocultar a hiperligação na navegação e desativar a página para todas as disciplinas';
$string['setting_status_option_hidelink'] = 'Ocultar a hiperligação na navegação, mas manter a página ativada para todas as disciplinas (apenas poderá aceder à página se se souber a hiperligação)';
$string['setting_status_option_show_always'] = 'Mostrar a hiperligação na navegação de todas as disciplinas, mesmo que o registo esteja desativo para a disciplina (ative apenas se já registou dados anteriormente)';
$string['setting_status_option_show_courseids'] = 'Mostrar a hiperligação na navegação se a disciplina for especificado abaixo via course_ids';
$string['setting_status_option_show_if_enabled'] = 'Mostrar a hiperligação na navegação se o registo estiver ativo na disciplina';
$string['setting_student_enrols_groupby_description'] = 'Esta opção define quais as disciplinas que são agregadas na página "Anterior/Simultânea" e que valor é usado para mostrar os nomes.';
$string['setting_student_rolenames_description'] = 'Caso o(s) papel(éis) para os alunos/utilizadores numa disciplina não seja <code>aluno</code>, pode especificar o papel correspondente. No caso de haver vários papéis para os alunos, use uma única vírgula. Exemplo: <code>aluno,outropapel</code>';
$string['show_full_list'] = 'Expandir lista';
$string['subplugintype_lalog'] = 'Registo A.A.';
$string['subplugintype_lalog_plural'] = 'Registos da A. A.';
$string['subplugintype_lareport'] = 'Relatório A.A.';
$string['subplugintype_lareport_plural'] = 'Relatórios A.A.';
$string['tour_activities'] = 'Este indicador mostra as três atividades mais utilizadas nos últimos 7 dias.

Ao clicar na hiperligação, pode visualizar os detalhes das atividades da disciplina.';
$string['tour_box_hits'] = 'Este indicador mostra o número de ações nos últimos 7 dias. Por baixo do número pode ver as alterações dos 7 dias anteriores a estes.

Ao clicar na hiperligação, abre um mapa que mostra o número de ações ao longo do tempo.';
$string['tour_box_learners'] = 'Este indicador mostra o número total de participantes. Por baixo do número é mostrada a alteração em relação à semana anterior.';
$string['tour_box_learnerslink'] = 'Clique na hiperligação para ver mais informações sobre os participantes.';
$string['tour_box_quiz_assign'] = 'Mostra o número de tentativas de testes e submissões de trabalhos nos últimos 7 dias. Por baixo é mostrada novamente a alteração dos 7 dias anteriores.

Ao clicar na hiperligação, pode ver detalhes sobre os testes e trabalhos da disciplina.';
$string['tour_dashboard_boxes'] = 'Na área inferior, são exibidas informações importantes da disciplina.

Além disso, cada caixa contém uma hiperligação através da qual terá acesso a mais informações disponíveis.';
$string['tour_dashboard_graph'] = 'O gráfico mostra o número de todas as ações na respetiva semana.

Se a disciplina estiver a decorrer, o início da semana atual é marcado por uma linha vertical pontilhada. Os números da semana atual não são exibidos.';
$string['tour_more_information'] = 'A demonstração ao utilizador está concluída. Esperamos ter-lhe apresentado uma visão global das funcionalidades.

As respostas às perguntas mais frequentes podem ser consultadas na página de ajuda.';
$string['tour_title'] = 'Análise da aprendizagem';
