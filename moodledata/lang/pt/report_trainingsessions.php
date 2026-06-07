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
 * Strings for component 'report_trainingsessions', language 'pt', version '4.4'.
 *
 * @package     report_trainingsessions
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountstart'] = 'Data de criação da conta do utilizador';
$string['activitytime'] = 'Tempo em atividades';
$string['activitytime_help'] = '<p>Este cálculo de tempo considera todo o tempo gasto nas atividades da disciplina, deixando de fora do cálculos os tempos de pausa na disciplina. Em certos casos, por exemplo, quando se usa o Learning Time Check - Verificação do Tempo de Aprendizagem (não predefinido) com alocação de tempo padrão (http://github.com/vfremaux/moodle-mod_learningtimecheck.git), é usado o tempo padrão adicional em vez de tempos reais extraídos do registo.</p>';
$string['addcoursegrade'] = 'Adicionar nota da disciplina ao relatório';
$string['addmodulelabel'] = 'Adicionar atividade';
$string['addmoduletitle'] = 'Adicionar o módulo da atividade da qual pretende ver a nota no relatório';
$string['addtimebonus'] = 'bónus de tempo na nota geral';
$string['addtimegrade'] = 'Avaliação do tempo';
$string['allcourses'] = 'Todas as disciplinas';
$string['allgroups'] = 'Todos os grupo';
$string['availableactivities'] = 'Atividades disponíveis';
$string['batchdate'] = 'Data da tarefa';
$string['batchdate_help'] = '<p>Esta configuração determina a data exata em que o lote será lançado e os documentos gerados. Se teme que os documentos sejam pesados (grande lote de alunos, muito para rastrear), escolha uma data/hora num período de baixa carga do servidor.</p>';
$string['batchreports_task'] = 'Relatórios por lotes';
$string['bgcolor'] = 'Cor do fundo';
$string['binary'] = 'Binário';
$string['bonusgrademode'] = 'Modo de avaliação do bónus de tempo';
$string['bonusgrademodedefault'] = 'Modo predefinido de avaliação do bónus';
$string['bonusgrademodedefault_desc'] = 'Valor predefinido para o modo de avaliação do bónus a quando da primeira configuração numa disciplina';
$string['calculated'] = 'Calculado';
$string['calculated_help'] = 'Digite uma fórmula do Excel usando as referências locais de Excel, conforme produzido no documento de saída. Use o espaço reservado {row} para inserir o número da linha atual nas referências das células. Use nomes de funções em inglês.

Exemplo:
=AVERAGE($C${row}:$D${row})';
$string['calculatedcolumns'] = 'Colunas calculadas (apenas XLS)';
$string['checklistadvice'] = 'Efeitos especiais da margem de conclusão';
$string['chooseagroup'] = 'Escolha um grupo';
$string['cleanoldreports_task'] = 'A apagar relatórios antigos';
$string['colors'] = 'Cores';
$string['columnname'] = 'Nome da coluna:';
$string['connections'] = 'Ligações';
$string['contiguoussessions'] = 'Sessões contiguas';
$string['continuous'] = 'Relatório contínuo';
$string['coupling'] = 'Acopolamento';
$string['course'] = 'Disciplina';
$string['courseglobals'] = 'Áreas globais da disciplina';
$string['coursegrade'] = 'Avaliação da disciplina';
$string['courselabel'] = '&nbsp;como coluna:&nbsp;';
$string['coursename'] = 'Nome do grupo';
$string['courseraw'] = 'Lotes';
$string['courses'] = 'Disciplinas';
$string['coursesessions'] = 'Sessões de trabalho na disciplina (prognóstico dos tempos reais)';
$string['coursestart'] = 'Data de início da disciplina';
$string['coursesummary'] = 'Resumo por participante';
$string['coursetime'] = 'Tempo na disciplina (atividades excluídas)';
$string['coursetime_help'] = '<p>Resumo do tempo passado em janelas gerais da disciplina, mas FORA das atividades.';
$string['coursetoolargenotice'] = 'A disciplina é muito grande e não tem grupos. Não é possível compilar.';
$string['credit'] = 'Crédito:&nbsp;';
$string['crop'] = 'Escolher sessões fora do âmbito';
$string['csv'] = 'Texto (CSV)';
$string['csvoutputtoiso'] = 'Saída CSV ISO';
$string['csvoutputtoiso_desc'] = 'Se ativar esta opção, o relatório bruto da disciplina será gerado na codificação ISO-8859-1 para aplicações compatíveis com o CSV antigo.';
$string['currentcourse'] = 'Disciplina atual';
$string['dates'] = 'Datas chave';
$string['debugmode'] = ' Modo de depuração';
$string['defaultmeanformula'] = '=AVERAGE({col}{minrow}:{col}{maxrow})';
$string['defaultstartdate'] = 'Data de início predefinida';
$string['defaultstartdate_desc'] = 'Data de início predefinida';
$string['defaultsumformula'] = '=SUM({col}{minrow}:{col}{maxrow})';
$string['deleteolderthan'] = 'Mais antigo que';
$string['deleteolderthan_desc'] = 'Apagar ficheiros mais antigos que este valor';
$string['disabled'] = '|--------- desativado -----------|';
$string['disablesuspendedenrolments'] = 'Ignorar inscrições suspensas';
$string['disablesuspendedenrolments_desc'] = 'Se ativar esta opção, os alunos com apenas inscrições suspensas não aparecerão nos relatórios';
$string['disablesuspendedstudents'] = 'Ignorar alunos suspensos';
$string['disablesuspendedstudents_desc'] = 'Se ativar esta opção, os alunos suspensos não aparecerão nos relatórios';
$string['discrete'] = 'Discreto';
$string['discreteforcenumber'] = 'Forçar numérico';
$string['discreteforcenumber_desc'] = 'Forçar o formato numérico em notas de tempo discreto (saída excel). Os valores discretos da escala do tempo deve ser numericamente interpretável.';
$string['done'] = 'Realizado: ';
$string['duration'] = 'Duração';
$string['elapsed'] = 'Tempo total na disciplinas';
$string['elapsed_help'] = '<p>Resume todo o tempo gasto na disciplina ou qualquer dependência da disciplina.</p>';
$string['elapsedadvice'] = 'O tempo decorrido pode ser diferente do intervalo de tempo da sessão devido a tempos de crédito adicionais nos fins das sessões. Consulte a configuração do bloco \'Estatísticas do Utilizador\'.';
$string['elapsedinitem'] = 'Tempo gasto';
$string['elapsedlastweek'] = 'Tempo semana passada';
$string['elapsedlastweek_help'] = 'O tempo prolongado da disciplina calcula o tempo estritamente gasto dentro do contexto da disciplina, limitado ao intervalo de tempo da última semana.';
$string['elapsedoutofstructure'] = 'Outro uso da disciplina';
$string['elapsedoutofstructure_help'] = 'Tempo gasto no âmbito da disciplina, mas não atribuível a qualquer "elemento estrutural" da disciplina (secção, página, módulo).';
$string['email'] = 'E-mail';
$string['enablecoursescore'] = 'Nota da disciplina';
$string['enablelearningtimecheckcoupling'] = 'Ativar acoplamento LTC';
$string['enablelearningtimecheckcoupling_desc'] = 'Se ativar esta opção, os relatórios de sessão usarão os dias úteis da filtragem do relatório de Verificação do Tempo de Aprendizagem';
$string['enddate'] = 'Data final';
$string['enroldate'] = 'Usar data da inscrição';
$string['enterprisesign'] = 'Empresarial';
$string['equlearningtime'] = 'Tempo de instrução equivalente:';
$string['equlearningtime_help'] = '<p>O tempo de aprendizagem equivalente engloba todo o tempo gasto na disciplina,  incluindo os tempos de atribuição predefinidos, se for usado o módulo de relatório de Verificação do Tempo de Aprendizagem (http://github.com/vfremaux/moodle-mod_learningtimecheck.git).</p>';
$string['errorbadcoursestructure'] = 'Erro na estrutura da disciplina: ID incorreto {$a}';
$string['errorbadviewid'] = 'visualização de relatório não existente';
$string['errorcontinuousscale'] = 'Não pode usar escalas como fonte de notas em modo contínuo';
$string['errorcoursestructurefirstpage'] = 'Erro na estrutura da disciplina: falha na obtenção da primeira página';
$string['errorcoursetoolarge'] = 'A disciplina é muito grande (máximo 50). A escolher um grupo';
$string['errordiscretenoranges'] = 'Tem de definir intervalos ao usar o modo discreto';
$string['errorgrouptoolarge'] = 'O grupo é muito grande (máximo 50). Considere ter grupos menores para compilar os resultados.';
$string['errornoabsolutepath'] = 'O caminho deve ser relativo';
$string['errornotingroup'] = 'Não tem acesso a todos os utilizadores e não é membro de qualquer grupo.';
$string['exceldatefmt'] = 'yyyy/mm/dd hh:mm';
$string['exceltimefmt'] = '[h]:mm:ss';
$string['extelapsed'] = 'Tempo total (prolongado)';
$string['extelapsed_help'] = 'O tempo prolongado da disciplina calcula o tempo estritamente gasto no contexto da disciplina, assim como o tempo gasto para obter o material da disciplina e algum tempo gasto em janelas gerais do site que o utilizador tem acesso.';
$string['extelapsedlastweek'] = 'Tempo da semana passada (prolongado)';
$string['extelapsedlastweek_help'] = 'O tempo prolongado da disciplina calcula o tempo estritamente gasto no contexto da disciplina, assim como o tempo gasto para obter o material da disciplina e algum tempo gasto em janelas gerais do site que o utilizador tem acesso, limitado ao intervalo de tempo da semana passada.';
$string['exthits'] = 'Hits (prolongado)';
$string['exthitslastweek'] = 'Hits na semana passada (prolongado)';
$string['extotherlastweek'] = 'Tempo extra (semana passada)';
$string['extrauserinfo'] = 'Informações adicionais do utilizador nos relatórios';
$string['extrauserinfo_desc'] = 'Pode opcionalmente adicionar dados de campos do utilizador à parte da informação do utilizador';
$string['fail'] = 'FALHA';
$string['filetimesuffixformat'] = 'Amd_Seu';
$string['firstaccess'] = 'Primeiro acesso';
$string['firstconnection'] = 'Primeira ligação';
$string['firstcourseaccess'] = 'Primeiro acesso';
$string['firstcourseaccess_help'] = 'Primeira vez que acedeu à disciplina';
$string['firstenrolldate'] = 'Primeira inscrição';
$string['firstname'] = 'Nome';
$string['firstsessiontime'] = 'Primeira sessão';
$string['formulalabel'] = 'Etiqueta da coluna';
$string['from'] = 'Desde';
$string['generatecsv'] = 'Relatório CSV';
$string['generatepdf'] = 'Relatório PDF';
$string['generatereports'] = 'Gerar relatórios';
$string['generatexls'] = 'Relatório XLS';
$string['grademodes'] = 'Modos de avaliação';
$string['grademodes_help'] = 'Os modos de avaliação definem como a nota é calculada a partir da entrada de dados original:

* Binário (quando possível): uma única entrada será inserida e a pontuação será a pontuação total da escala ou 0. Se a pontuação for baseada numa escala, a pontuação alternará entre o índice mais baixo e o mais alto.
* Discreto: um conjunto de intervalos será a entrada que divide o valor do tempo em intervalos aceitáveis. A nota máxima será dividida em partes iguais da escala de pontuação. Se for usada uma escala para a pontuação, então os intervalos devem fornecer N-1 limiares.
* Contínuo:  será inserido um tempo equivalente da pontuação total. Se o valor de entrada for maior ou igual ao valor de referência, a pontuação dada será o total, caso contrário, a pontuação será a interpolação linear (arredondada) da entrada em relação ao limite.';
$string['gradesettings'] = 'Configurações da nota';
$string['gradexlsformat'] = 'Formato de nota Excel';
$string['gradexlsformat_desc'] = 'Escolha o formato dos número para as notas';
$string['groups'] = 'Grupos';
$string['hasdisabledenrolmentsrestriction'] = 'As inscrições suspensas são omitidas.';
$string['head1application'] = 'As cores do cabeçalho 1 são usadas na linha de topo do cabeçalho, quando apropriado.';
$string['head2application'] = 'As cores do cabeçalho 2 são usadas na linha normal de cabeçalho, acima das colunas de dados. É o caso mais comum.';
$string['head3application'] = 'As cores do cabeçalho 3 são usadas na linha final da tabela (resumo), quando adequado.';
$string['headsection'] = 'Secção de cabeçalho';
$string['hidedeletedmodules'] = 'Ocultar módulos que estão a ser apagados';
$string['hideemptymodules'] = 'Ocultar módulos vazios';
$string['hideemptymodules_desc'] = 'Se ativar esta opção, os módulos vazios (sem tempo gasto) não serão impressos nos relatórios.';
$string['hits'] = 'Hits';
$string['hitslastweek'] = 'Hits semana passada';
$string['htmldatefmt'] = '%Y-%m-%d';
$string['id'] = 'ID';
$string['idnumber'] = 'Número ID';
$string['in'] = 'No tempo';
$string['incourses'] = 'Nas disciplinas';
$string['insessiontime'] = 'Dentro das regras do tempo de aprendizagem';
$string['insessiontime_help'] = 'Está no tempo de aprendizagem que corresponde às regras validadas';
$string['institution'] = 'Instituição';
$string['institutions'] = 'Instituições';
$string['instructure'] = 'Tempo em atividades da disciplina';
$string['interactive'] = 'Interativo';
$string['interactivetitle'] = 'Produzir lote agora!';
$string['item'] = 'Item';
$string['items'] = 'Itens';
$string['json'] = 'JSON';
$string['lastaccess'] = 'Último acesso';
$string['lastcourseaccess'] = 'Último acesso';
$string['lastlogin'] = 'Última autenticação';
$string['lastname'] = 'Apelido';
$string['layout'] = 'Estrutura do documento';
$string['learningtimecheckadvice_help'] = '<p>Ao usar o módulo de Verificação de Tempo de Aprendizagem que permite aos professores validar atividades, da disciplina, sem qualquer interação do aluno, podem aparecer algumas discrepâncias aparentes na informação.</p><p>É uma situação normal que relata informações consistentes sobre o uso efetivo da plataforma</p>';
$string['learningtimesessioncrop'] = 'Operação em sessões fora do âmbito';
$string['learningtimesessioncrop_desc'] = 'Quando existe ligação com a Verificação de Tempo de Aprendizagem, as sessões fora do âmbito podem ser ignoradas ou mantidas e marcadas apenas nos relatórios';
$string['libsmissing'] = 'Esta funcionalidade está desativa porque as livrarias (libs) estão em falta. Instale as libs a partir de de http://github.com/vfremaux/moodle-local_vflibs para ativar a geração de PDF.';
$string['lineaggregators'] = 'Agregadores de linhas';
$string['lineaggregators_help'] = '<p> Definir os agregadores como uma lista de comutadores de agregadores, começando a partir da coluna mais à esquerda na folha do Excel resultante. Separe com vírgula ou ponto e vírgula. Se deixar em branco, a linha agregadora ficará desativada.
</p>
<ul>
<li><b>m:</b> média</li>
<li><b>s:</b> soma</li>
</ul>

<p>
Exemplo: se o relatório em Excel tiver 10 colunas e se for necessária uma soma na coluna 10, insira:
 ;;;;;;;;; s
</p>';
$string['location'] = 'Localização';
$string['mark'] = 'Marque as sessões fora do âmbito';
$string['meandaytime'] = 'Tempo médio por dia';
$string['meanweektime'] = 'Tempo médio por semana';
$string['modgrade'] = 'Nota da atividade';
$string['modulegrade'] = 'Módulo da atividade';
$string['modulegrades'] = 'Notas das atividades';
$string['modulegrades_help'] = 'Pode adicionar mais colunas ao relatório provenientes da pauta da disciplina, escolhendo o módulo de atividade que pretende mostrar o resultado.
Também pode definir o rótulo da coluna que será usado para esta coluna nas folhas do relatório. Se deixar em branco, o nome da coluna estará em ordem da disponibilidade, o número de identificação (ID) do módulo ou um identificador de módulo incorporado do Moodle.';
$string['never'] = 'Nunca';
$string['newtask'] = 'Adicionar um novo lote';
$string['nodata'] = 'Disciplina sem dados';
$string['noextragrade'] = 'Desativo';
$string['nopermissiontoview'] = 'Não tem permissões suficientes nesta disciplina para visualizar esta informação.';
$string['nosessions'] = 'Não existem dados mensuráveis da sessão';
$string['nostructure'] = 'Não foi detetada qualquer estrutura mensurável da disciplina';
$string['nothing'] = 'Sem utilizadores';
$string['nousers'] = 'Nenhum utilizador';
$string['now'] = 'Agora!';
$string['onefulluserpersheet'] = 'Informação completa do utilizador por folha';
$string['oneuserperrow'] = 'Informação resumida do utilizador por linha numa única folha';
$string['othertime'] = 'Outros tempos';
$string['othertime_help'] = '<p>Tempo decorrido que não pode ser diretamente atribuído a um módulo de atividade da disciplina.</p>';
$string['out'] = 'Sem tempo';
$string['outofgroup'] = 'Sem grupo';
$string['output:finalcoursegrade'] = 'Nota final';
$string['output:rawcoursegrade'] = 'Nota bruta da disciplina';
$string['output:timebonus'] = 'Bónus de tempo';
$string['output:timegrade'] = 'Nota do tempo';
$string['outputdir'] = 'Diretoria de saída';
$string['outputdir_help'] = '<p>Pode selecionar uma subdiretoria de saída para onde gerar os seus documentos de saída. Tenha em atenção que o contexto de armazenamento onde encontrar esses documentos é a disciplina de onde programou o lote, mesmo que a disciplina de compilação mencionasse "Todas as disciplinas" </p>';
$string['outputdirectory'] = 'Diretoria de saída nos arquivos do curso local';
$string['outsessiontime'] = 'Exceções às regras do tempo restante';
$string['outsessiontime_help'] = 'Tempo restante de aprendizagem que NÃO corresponde às regras de validação';
$string['over'] = 'acima';
$string['parts'] = 'partes';
$string['pass'] = 'APROVADO';
$string['pdf'] = 'PDF';
$string['pdfabsoluteverticaloffset'] = 'Offset vert. abs. Doc';
$string['pdfabsoluteverticaloffset_desc'] = 'Indica o deslocamento inicial da posição dos conteúdos em relação à parte superior da página na geração do PDF (em mm).';
$string['pdfpage'] = 'Página';
$string['pdfpagecutoff'] = 'Ponto de corte da página PDF';
$string['pdfpagecutoff_desc'] = 'Altura na página para mudar para a próxima página (em mm).';
$string['pdfreportfooter'] = 'Imagem do rodapé nos relatórios em PDF';
$string['pdfreportfooter_desc'] = 'Indique uma imagem JPG para o rodapé (880px largura x até 100px de altura)';
$string['pdfreportheader'] = 'Imagem do cabeçalho nos relatórios em PDF';
$string['pdfreportheader_desc'] = 'Indique uma imagem JPG para o cabeçalho da primeira página (880px largura x até 100px de altura)';
$string['pdfreportinnerheader'] = 'Imagem do cabeçalho das folhas internas nos relatórios em PDF';
$string['pdfreportinnerheader_desc'] = 'Indique uma imagem JPG para o cabeçalho nas páginas internas (880px largura x até 150px de altura). Se não indicar,  será usado novamente o cabeçalho da primeira página.';
$string['periodshift'] = 'Período de deslocamento';
$string['periodshiftto'] = 'Deslocamento "para" data apenas';
$string['plugindist_desc'] = '<p>Este módulo é a versão comunitária e é publicado para qualquer pessoa a usar tal como está. Existe uma versão "PRO" deste módulo e é distribuída sob condições para dar seguimento ao ciclo de vida, atualização, documentação e esforço de melhoria.</p>
<p>Contacte com um dos nossos distribuidores para obter suporte à versão "PRO".</p>
<p><a href="http://www.mylearningfactory.com/index.php/documentation/Distributeurs?lang=en_utf8">Distribuidores MyLF</a></p>';
$string['pluginname'] = 'Sessões de Instrução';
$string['printidnumber'] = 'Imprimir número ID';
$string['printidnumber_desc'] = 'Se ativar esta opção, será adicionado aos relatórios o número de ID';
$string['printlocation'] = 'Local de Instrução';
$string['printlocation_desc'] = 'O local físico da instrução';
$string['printsessiontotal'] = 'Mostrar o tempo global decorrido na sessão';
$string['printsessiontotal_desc'] = 'NÃO mostrar o tempo total da sessão nos relatórios da sessão.';
$string['privacy:metadata'] = 'O relatório das Sessões de Instrução não armazena quaisquer dados pertencente aos utilizadores';
$string['profileinfotimeformat'] = '%d %B %Y';
$string['proversionrequired'] = '<p>Está a tentar usar uma funcionalidade que apenas está disponível na versão "Pro" deste módulo. A versão "Pro" deste módulo é uma versão paga que nos ajuda a apoiar o ciclo de desenvolvimento deste módulo com preocupações na continuidade da qualidade, com características aprimoradas e suporte total aos nossos clientes.</p>

<p >A versão Pro pode ser obtida através dos nossos distribuidores:</p>

<p><a href="http://www.mylearningfactory.com/index.php/documentation/Distributeurs?lang=en_utf8">Distribuidores MyLF</a></p>';
$string['quickgroupcompile'] = '<h3>Compilação rápida para {$a} utilizadores:</h3><p>A compilação rápida fornece um relatório de resumo rápido para grupos menores que 50 utilizadores, diretamente na diretoria raiz dos ficheiros da disciplina.</p>';
$string['quickmonthlyreport'] = 'Relatórios mensais rápidos (PDF)';
$string['range'] = 'Intervalo';
$string['readableduration'] = 'Duração';
$string['real'] = 'Real:';
$string['recipient'] = 'Destinatário';
$string['recipient_desc'] = 'Destinatário predefinido dos documentos PDF. Pode ser sobrecarregado localmente por cada operador.';
$string['replay'] = 'Repetir as mesmas configurações';
$string['replaydelay'] = 'Intervalo de repetição (min)';
$string['replaydelay_help'] = '<p>Se configurado para um valor positivo (em minutos), o lote não será descartado após a execução, mas repetido continuamente com este intervalo.
A data de início e/ou a data de fim serão alteradas de acordo, se for selecionada uma repetição do período.</p>';
$string['reportdate'] = 'Data do relatório';
$string['reportfilemanager'] = 'Gestão dos ficheiros de relatório';
$string['reportformat'] = 'Formato do documento';
$string['reportforuser'] = 'Relatório para';
$string['reportlayout'] = 'Estrutura do relatório';
$string['reports'] = 'Relatórios';
$string['reportscope'] = 'Âmbito';
$string['reportscope_help'] = '<p>Alguns relatórios permitem a pesquisa de todas as disciplinas do utilizador. Tenha em atenção que alguns relatórios não usam âmbito.</p>';
$string['role'] = 'Papel';
$string['scheduledbatches'] = 'Lotes agendados';
$string['scoresettings'] = 'Definições do relatório de pontuação';
$string['scoresettingsadvice'] = 'Nos relatórios de resumo da disciplina (um utilizador por linha), pode adicionar ao relatório colunas adicionais com pontuações provenientes da pauta. Pode adicionar a nota global da disciplina ou escolher adicionar uma, ou mais, notas de atividades individuais no relatório.';
$string['sectionname'] = 'Nome da secção';
$string['seedetails'] = 'Ver detalhes';
$string['selectforreport'] = 'Selecionar para relatórios';
$string['sessionduration'] = 'Duração da sessão';
$string['sessionend'] = 'Fim da sessão';
$string['sessionreportdoctitle'] = 'Relatório da sessão';
$string['sessionreports'] = 'Relatório sessão utilizador';
$string['sessionreporttitle'] = 'Título do documento de relatório da sessão';
$string['sessionreporttitle_desc'] = 'Impressa na primeira página de um relatório de sessão do utilizador';
$string['sessions'] = 'Sessões de trabalho (tempos reais previstos)';
$string['sessionsonly'] = 'Apenas sessões de utilizador';
$string['sessionstart'] = 'Início da sessão';
$string['showhits'] = 'Mostrar eventos';
$string['showhits_desc'] = 'Se definido, a contagem de hits será adicionada às linhas CSV';
$string['showitemfirstaccess'] = 'Mostrar data do primeiro acesso aos itens';
$string['showitemlastaccess'] = 'Mostrar data do último acesso aos itens';
$string['showmonthlyquickreports'] = 'Mostrar relatórios mensais rápidos';
$string['showsectionsonly'] = 'mostrar apenas secções';
$string['showsessions'] = 'Mostrar detalhes da sessão';
$string['showsseconds'] = 'Mostrar segundos';
$string['showsseconds_desc'] = 'Mostrar os segundos na expressão de duração, se ativa';
$string['singleexec'] = 'Uma só vez';
$string['siteglobals'] = 'Site (não nas secções da disciplina)';
$string['specialgrades'] = 'Notas especiais';
$string['startdate'] = 'Data de início';
$string['strfdate'] = '%Y-%m-%d';
$string['strfdatetime'] = '%Y-%m-%d %H:%M';
$string['strftime'] = '%H:%M:%S';
$string['structureitem'] = 'Item rastreável da disciplina';
$string['structuretotal'] = 'Total {$a}:';
$string['studentsign'] = 'Aluno';
$string['summarycolumns'] = 'Colunas no relatório de resumo';
$string['summarycolumns_desc'] = '<p>Escolha as colunas, comentando com # qualquer linha. Pode reordenar as linhas para alterar a ordem no relatório.</p>
<p>(letras do formato: a para texto, t para data, d para duração, n para numérico).</p>';
$string['task'] = 'Tarefa {$a}';
$string['taskname'] = 'Tarefa';
$string['taskrecorded'] = 'Tarefa gravada com sucesso';
$string['teachersign'] = 'Professor';
$string['textapplication'] = 'Configuração para o texto predefinido do documento.';
$string['textcolor'] = 'Cor do texto';
$string['timeelapsed'] = 'Tempo despendido';
$string['timeelapsedcurweek'] = 'Tempo gasto semana atual';
$string['timegrade'] = 'Avaliação da origem do tempo';
$string['timegrademode'] = 'Modo de avaliação do tempo';
$string['timegrademodedefault'] = 'Modo predefinido de avaliação do tempo';
$string['timegrademodedefault_desc'] = 'Valor predefinido para o modo de avaliação do tempo quando configurado a primeira vez numa disciplina';
$string['timegraderanges'] = 'Tempo dos intervalos da nota';
$string['timegraderanges_help'] = 'Os intervalos da nota do tempo permitem que divida o tempo decorrido em partes para alcançar um efeito de tempo discreto. No modo Binário precisará apenas de indicar um limite de tempo (em minutos) separando o estado APROVADO e NÃO APROVADO. No modo "Discreto", insira uma lista (separada por vírgulas) do limite de tempo que separa os intervalos. A última gama significa "tempo acima do último valor".';
$string['timegradesourcedefault'] = 'Avaliação da origem do tempo predefinido';
$string['timegradesourcedefault_desc'] = 'Valor predefinido para a origem da nota de bónus quando é configurado pela primeira vez numa disciplina';
$string['timeperpart'] = 'Tempo decorrido por parte';
$string['timesource'] = 'Origem do tempo';
$string['timespent'] = 'Despendido';
$string['timespentlastweek'] = 'Despendido semana passada';
$string['to'] = 'Até';
$string['todate'] = 'Data de fim';
$string['tonow'] = '&nbsp;Até agora';
$string['toobig'] = '<p>O grupo de compilação é muito grande para ser executado na compilação rápida. Recomenda-se que programe um lote para um momento que não afete os utilizadores atualmente autenticados.<br/>Para configurar um lote, preencha os parâmetros de compilação no formulário acima e registe um novo lote com a configuração desejada e ajuste o momento de execução do lote e a diretoria de saída (escolha a partir dos locais de armazenamento de ficheiros da disciplina - caminho relativo, caminho absoluto rejeitado).</p><p>Também pode programar um lote de compilação regular que executará a cada \\"replaydelay\\" minutos para a saída desejada.</p>';
$string['total'] = 'Total';
$string['totalduration'] = 'Duração total';
$string['totalsessions'] = 'Tempo total sessão';
$string['totalsessiontime'] = 'Tempo total das sessões de trabalho';
$string['totalsessiontime_help'] = 'Tenha em atenção que a lista de sessões integra algumas durações que podem estar fora do âmbito desta disciplina. O tempo total da sessão aqui apresentado geralmente é maior do que no cálculo do tempo da disciplina';
$string['totalsitetime'] = 'Tempo total Site';
$string['totalwdtime'] = 'Tempo total Dias úteis';
$string['trainingreports'] = 'Relatórios da Instrução';
$string['trainingsessions'] = 'Sessões de Intrução';
$string['trainingsessions:batch'] = 'Pode programar lotes de relatórios';
$string['trainingsessions:downloadreports'] = 'Pode descarregar os documentos do relatório';
$string['trainingsessions:iscompiled'] = 'Faz parte dos relatórios';
$string['trainingsessions:usegrading'] = 'Pode configurar a nota';
$string['trainingsessions:view'] = 'Pode ver o relatório da sessão de instrução';
$string['trainingsessions:viewother'] = 'Pode ver o relatório da sessão de instrução de outros utilizadores';
$string['trainingsessions_report_advancement'] = 'Relatório de progresso';
$string['trainingsessions_report_connections'] = 'Relatório da ligação';
$string['trainingsessions_report_institutions'] = 'Relatório da instituição';
$string['trainingsessionsdeletionmark'] = 'Eliminação em execução';
$string['trainingsessionsreport'] = 'Relatórios das Sessões de Instrução';
$string['trainingsessionsscores'] = 'Pontuação adicionada aos relatórios';
$string['unvisited'] = 'Não visitado';
$string['updatefromaccountstart'] = ' Primeiro acesso do utilizador';
$string['updatefromcoursestart'] = ' Início da disciplina';
$string['updatefromcustomdate'] = 'Obter a partir da data personalizada (acima)';
$string['updatefromenrolstart'] = 'Obter a partir da data de inscrição do utilizador';
$string['uploadglobals'] = 'Carregamentos de ficheiros';
$string['uploadresult'] = 'Descarregar resultados (valores brutos)';
$string['user'] = 'Por participante';
$string['userdetail'] = 'Detalhes do participante';
$string['userid'] = 'ID utilizador';
$string['userlist'] = 'Um participante por linha';
$string['usersheets'] = 'Um conjunto de folhas por participante';
$string['usersummary'] = 'Resumo do participante';
$string['visiteditems'] = 'Itens visitados';
$string['weekstartdate'] = 'Início da semana';
$string['workday'] = 'Dia útil';
$string['workingdays'] = 'Relatório dos dias úteis';
$string['workingsessions'] = 'Sessões de trabalho';
$string['workweek'] = 'Semana';
$string['xls'] = 'XLS';
$string['xlsadditions'] = 'Acrescentos ao XLS';
$string['xlsexportlocale'] = 'Exportação Local XLS';
$string['xlsexportlocale_desc'] = 'Usado para forçar "local" ao exportar e gerar relatórios no formato Excel. Deixe em branco para usar o "local" predefinido do site ou obrigue com um código de local explícito, como por exemplo en_EN.UTF-8';
$string['xlsformula'] = 'Fórmula (expressão do Excel)';
$string['xlsmeanformula'] = 'Fórmula da MÉDIA';
$string['xlsmeanformula_desc'] = 'Fórmula de cálculo da Média XLS. Use os marcadores {minrow} e {maxrow} para fixar o intervalo na vertical e {col} como identificador da coluna atual. Uma referência de uma célula pode ser: ${col}$4, $Y${minrow}';
$string['xlssumformula'] = 'Fórmula da SOMA';
$string['xlssumformula_desc'] = 'Fórmula de cálculo da Soma XLS. Use os marcadores {minrow} e {maxrow} para fixar o intervalo na vertical e {col} como identificador da coluna atual. Uma referência de uma célula pode ser: ${col}$4, $Y${minrow}';
