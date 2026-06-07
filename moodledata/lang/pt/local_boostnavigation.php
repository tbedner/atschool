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
 * Strings for component 'local_boostnavigation', language 'pt', version '4.4'.
 *
 * @package     local_boostnavigation
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['inc_bottomnodes'] = 'nós do fundo';
$string['inc_bottomnodeslocation'] = 'abaixo da secção principal no menu de navegação do Boost (semelhante ao nó "Administração do Site")';
$string['inc_coursenode'] = 'nó de disciplina';
$string['inc_coursenodes'] = 'nós de disciplina';
$string['inc_coursenodeslocation'] = 'para a secção disciplina no menu de navegação do Boost (onde estão localizados os nós para os tópicos da disciplina)';
$string['inc_custombottomnodes'] = 'nós personalizados do fundo';
$string['inc_customcoursenodes'] = 'nós personalizados de disciplina';
$string['inc_customrootnodes'] = 'nós personalizados da raiz';
$string['inc_customwhoadmins'] = 'os administradores';
$string['inc_customwhousers'] = 'todos os utilizadores';
$string['inc_mycoursesrootnode'] = 'nó da raiz \'As minhas disciplinas\'';
$string['inc_notselectedhomenode'] = 'Página principal/Painel do utilizador não selecionado';
$string['inc_rootnode'] = 'nó da raiz';
$string['inc_rootnodes'] = 'nós da raiz';
$string['inc_rootnodeslocation'] = 'para a secção principal no menu de navegação do Boost (onde está localizados o nó "As minhas disciplinas" e outros)';
$string['inc_selectedhomenode'] = 'Página principal/Painel do utilizador não selecionado';
$string['mycoursesrootnodefilterhintenabledcourselist'] = 'Lista de disciplinas filtrada por:';
$string['mycoursesrootnodefilterhintenabledcurrentfilter'] = 'Filtro de disciplinas atual:';
$string['mycoursesrootnodefilterlink'] = 'Alterar filtro';
$string['pluginname'] = 'Navegação Boost melhorada';
$string['privacy:metadata:preference:collapse'] = 'O estado contraído/expandido de um nó de navegação no menu de navegação.';
$string['privacy:request:preference:collapse'] = 'O estado contraído/expandido do nó de navegação "{$a->nodename}" no menu de navegação é {$a->collapse}.';
$string['setting_collapsecustomnodes'] = 'Contrair {$a->what} para {$a->who}';
$string['setting_collapsecustomnodes_desc'] = 'Se ativar esta opção, os utilizadores poderão contrair {$a->what} para {$a->who}.<br /><em>Esta configuração só é processada quando a configuração do nó personalizado correspondente tem pelo menos um nó personalizado com pelo menos um nó descendente adicionado.</em>';
$string['setting_collapsecustomnodesaccordion'] = 'Contrair {$a->what} para {$a->who} como um acordeão';
$string['setting_collapsecustomnodesaccordion_desc'] = 'Se ativar esta opção, o {$a->what} para {$a->who} estará contraído como um acordeão.';
$string['setting_collapsecustomnodesdefault'] = 'Contrair {$a->what} para {$a->who} por predefinição';
$string['setting_collapsecustomnodesdefault_desc'] = 'Se ativar esta opção, o {$a->what} para {$a->who} estará contraído por predefinição';
$string['setting_collapsecustomnodesicon'] = 'Mostrar ícones no nó ascendente em {$a->what} para {$a->who}';
$string['setting_collapsecustomnodesicon_desc'] = 'Com esta configuração, pode controlar se serão mostrados os ícones dos nós ascendentes em {$a->what} para {$a->who}.';
$string['setting_collapsecustomnodessession'] = 'Lembrar o estado de contraído/expandido de {$a->what} para {$a->who} apenas para a sessão atual';
$string['setting_collapsecustomnodessession_desc'] = 'Se ativar esta opção, será lembrado o estado de contraído/expandido de {$a->what} para {$a->who} apenas na sessão atual do utilizador.';
$string['setting_collapsemycoursesnodeperformancehint'] = 'Atenção: Esta funcionalidade só funcionará se a configuração <a href="{$a->url}">navshowmycoursecategories</a> não estiver ativa. Se ativou \'navshowmycoursecategories\', esta configuração será ignorada.';
$string['setting_collapsenode'] = 'Contrair {$a->what} "{$a->which}"';
$string['setting_collapsenode_desc'] = 'Se ativar esta opção, os utilizadores poderão contrair {$a->what} "{$a->which}".';
$string['setting_collapsenodeaccordionexplanation'] = 'Significa que apenas pode ser expandido um nó ascendente de cada vez. Se um segundo nó ascendente for expandido, o nó ascendente atualmente expandido é contraído automaticamente. Se desativar esta configuração, vários nós ascendentes podem ser expandidos ao mesmo tempo.';
$string['setting_collapsenodedefault'] = 'Contrair {$a->what} "{$a->which}" por predefinição';
$string['setting_collapsenodedefault_desc'] = 'Se ativar esta opção, o {$a->what} "{$a->which}" por predefinição.';
$string['setting_collapsenodeicon'] = 'Mostrar ícone de nó ascendente em {$a->what} "{$a->which}"';
$string['setting_collapsenodeicon_desc'] = 'Com esta configuração, pode controlar se será mostrados o ícones do nó ascendentes em {$a->what} "{$a->which}" e/ou se este nó ascendente será indentado.';
$string['setting_collapsenodeicon_justindent'] = 'Não mostrar um ícone, mas indentar o nó ascendente colapsável';
$string['setting_collapsenodeicon_none'] = 'Não mostrar um ícone e não indentar o nó ascendente colapsável';
$string['setting_collapsenodeicon_yes'] = 'Mostrar um ícone e indentar o nó ascendente colapsável';
$string['setting_collapsenodesdefaultexplanation'] = 'Caso contrário, eles serão expandidos por predefinição. Esta configuração apenas controla a predefinição para cada utilizador quando os nós são renderizados para ele pela primeira vez.';
$string['setting_collapsenodesession'] = 'Lembrar o estado de contraído/expandido de {$a->what} "{$a->which}" apenas para a sessão atual';
$string['setting_collapsenodesession_desc'] = 'Se ativar esta opção, o estado de contraído/expandido será lembrado em {$a->what} "{$a->which}" apenas para a sessão atual do utilizador.';
$string['setting_collapsenodesheading'] = 'Contrair {$a->what} no menu de navegação do Boost';
$string['setting_collapsenodessessionexplanation'] = 'Após o utilizador terminar sessão e voltar a autenticar-se, o estado de contraído/expandido será redefinido para o valor acima definido como predefinição. Se esta configuração estiver desativada, o estado de contraído/expandido para estes nós será lembrado para além do final da sessão do utilizador.';
$string['setting_collapsenodestechnicalhint'] = 'Informação técnica: é conseguido através da adição de algum código JavaScript e CSS à página que mostrará ou ocultará os nós de segundo nível assim que o utilizador clicar no nó. O estado contraído/expandido do nó será processado em cada sessão do utilizador e será guardado nas preferências de cada utilizador. Os nós só estarão ocultos no menu de navegação durante o tempo de execução, mas permanecerão na árvore de navegação e poderão ser acedidos por outras partes do Moodle.';
$string['setting_customnodesusageadminsexample'] = 'Moodle.org|http://www.moodle.org|en,de<br />
Lista dos utilizadores Moodle|/admin/user.php';
$string['setting_customnodesusageadminsintro'] = 'Cada linha consiste no título da hiperligação, o URL da hiperligação e os idiomas suportados (opcional) - separados por barras verticais. Cada nó personalizado tem de ser escrito numa nova linha.';
$string['setting_customnodesusageadminsparameternote'] = 'Os nós personalizados para administradores são processados pela mesma função que os nós personalizados para os outros utilizadores. Assim, além dos parâmetros fornecidos acima, a mesma lista de parâmetros que os nós personalizados para suporte aos utilizadores também são suportados aqui. Sinta-se à vontade para usá-los aqui se realmente precisar deles para qualquer cenário especial, mesmo que, por uma questão de simplicidade, não estejam documentados outra vez aqui.';
$string['setting_customnodesusagechildnodes'] = 'Os nós personalizados podem ser aninhados com um nível de hierarquia, ou seja, um nó personalizado pode ter nós descendentes. Para criar um nó descendente em vez de um nó ascendente, basta colocar um hífen como prefixo no título do nó personalizado.';
$string['setting_customnodesusagechildnodesexample'] = 'Administração|/admin/index.php<br />
-Lista de utilizadore Moodle|/admin/user.php<br />
-Gerir disciplinas|/course/management.php';
$string['setting_customnodesusagechildnodespleasenoterecursive'] = 'Se um nó ascendente não for mostrado por uma restrição (idioma, Grupo global, papel, ...), os nós descendentes também não serão mostrados.';
$string['setting_customnodesusagechildnodespleasenoteurl'] = 'Por razões técnicas, um nó ascendente precisa sempre de um URL válido, mesmo que o nó possa vir a ser contraído posteriormente.';
$string['setting_customnodesusageexamples'] = 'Exemplos:';
$string['setting_customnodesusageparameterbeforenodedd'] = 'Esta configuração pode ser usada para especificar a chave do nó ascendente onde o nó personalizado deve ser colocado. Pode encontrar a chave do nó no atributo HTML \'data-key\' do nó que deseja fazer referência aqui. No caso de um conjunto de nós feito de um ascendente e um ou mais descendentes, esta configuração deve ser dada a cada nó do conjunto.<br/>Tenha em atenção que só pode usar chaves de nó anteriores do contexto do nó que está a adicionar o nó para. Por exemplo, pode usar \'Ficheiros privados\' ou \'calendário\' ou \'banco de conteúdo\' no contexto do nó raiz ou pode usar \'participantes\' ou \'notas\' no contexto do nó da disciplina. Se a chave do nó ascendente for desconhecida ou não puder ser processada por algum motivo desconhecido, o nó será adicionado ao final do contexto do nó.<br />Observe ainda que esta configuração é considerada parcialmente experimental, uma vez que com esta configuração pode ainda não ser possível usar alguns nós como nós ascendentes.';
$string['setting_customnodesusageparameterbeforenodedt'] = 'Chave do nó ascendente (opcional):';
$string['setting_customnodesusageparameterclassdd'] = 'Essa configuração pode ser usada para definir uma classe CSS adicional ou várias classes para o nó personalizado.';
$string['setting_customnodesusageparameterclassdt'] = 'Classes CSS (opcional):';
$string['setting_customnodesusageparametercohortdd'] = 'Esta configuração pode ser usada para mostrar um nó personalizado apenas para membros de um Grupo global específico. Use o ID do Grupo global, não o nome. Separe os Grupos globais compatíveis com vírgulas. Se o nó personalizado deve ser exibido para utilizadores fora de qualquer associação a Grupos globais, deixe este campo em branco.';
$string['setting_customnodesusageparametercohortdt'] = 'Grupos globais suportados (opcional):';
$string['setting_customnodesusageparametericondd'] = 'Este ícone será usado como ícone para o nó personalizado. Por exemplo: fa-flag. Use o identificador do ícone Font Awesome, obtido na página da lista de ícones em (<a href="https://fontawesome.com/v4.7.0/icons/">fontawesome.com</a>) para identificar o ícone que deve ser usado. A Font Awesome está incluída no Boost. Ícones clássicos de píxeis do Moodle não são suportados aqui. Se pretende apenas usar um ícone de marca predefinida para o nó personalizado, deixe este campo em branco. Os nós personalizados que não obtêm um ícone de marca predefinida automaticamente também não podem obter um ícone personalizado atualmente.';
$string['setting_customnodesusageparametericondt'] = 'Ícone (opcional):';
$string['setting_customnodesusageparameteriddd'] = 'Esta configuração pode ser usada para definir o atributo \'data-key\' do nó personalizado para o valor fixo fornecido. O valor de \'data-key\' fornecido é limpo apenas para caracteres alfanuméricos e prefixado pela área específica do nó personalizado, como por exemplo: definir a \'data-key\' de um nó nos nós do fundo da área dos administradores para \'my_node\' resultará num atributo de \'data-key\' preenchido com \'localboostnavigationcustombottomadminsmynode\'. Esta configuração oferece a capacidade de fazer referência a um nó personalizado em seletores CSS ou até mesmo em código JavaScript personalizado. Definir a mesma \'data-key\' para vários nós não é proibido, mas tenha atenção que atributos de \'data-key\' duplicados podem criar problemas a longo prazo. Se este campo estiver vazio, o nó personalizado obterá uma \'data-key\' gerada automaticamente que não é realmente adequada para referência.';
$string['setting_customnodesusageparameteriddt'] = 'Atributo data-key (opcional):';
$string['setting_customnodesusageparameterlanguagedd'] = 'Esta configuração pode ser usada para mostrar o nó personalizado apenas para utilizadores do idioma especificado. Separe com vírgulas os idiomas compatíveis. Se o nó personalizado tem de ser exibido em todos os idiomas, deixe este campo vazio.';
$string['setting_customnodesusageparameterlanguagedt'] = 'Idiomas suportados (opcional):';
$string['setting_customnodesusageparameterlinkdd'] = 'O destino da hiperligação pode ser definido por um URL completo da web (por exemplo: https://moodle.org) ou um caminho relativo à sua instância do Moodle (por exemplo: /login/logout.php).';
$string['setting_customnodesusageparameterlinkdt'] = 'Hiperligação:';
$string['setting_customnodesusageparameterlogicaldd'] = 'Essa configuração pode ser usada para alterar a combinação lógica dos parâmetros opcionais para Grupo global, papel e papel do sistema. Se definir esta configuração para AND ou deixá-la vazia, os parâmetros opcionais para Grupo global, papel e papel do sistema serão combinados logicamente com AND e o nó personalizado será mostrado apenas se TODOS os parâmetros se aplicarem. Se definir esta configuração como OR, os parâmetros opcionais para Grupo global, papel e papel do sistema serão combinados logicamente com OR e o nó personalizado será mostrado se QUALQUER um dos parâmetros se aplicar. Permite a flexibilidade de criar, por exemplo, um nó que é mostrado aos utilizadores com um determinado papel na disciplina, bem como aos utilizadores com um determinado papel do sistema, conforme mostrado no exemplo acima.';
$string['setting_customnodesusageparameterlogicaldt'] = 'Operador de combinação lógica (opcional):';
$string['setting_customnodesusageparameterroledd'] = 'Essa configuração pode ser usada para exibir o nó personalizado apenas para membros com o papel especificado em cada contexto. Use o nome abreviado do papel para esta configuração. Separe com vírgulas os papéis compatíveis. Se o nó personalizado tem de ser exibido para os utilizadores independentemente de qualquer papel, deixe este campo vazio.';
$string['setting_customnodesusageparameterroledt'] = 'Papéis suportados (opcional):';
$string['setting_customnodesusageparameters'] = 'Mais informações sobre os parâmetros:';
$string['setting_customnodesusageparametersystemroledd'] = 'Esta configuração pode ser usada para exibir o nó personalizado apenas para utilizadores com o papel especificado no contexto do sistema. Use o nome abreviado do papel para esta configuração. O nome curto \'admin\' é suportado para verificar se o utilizador é um administrador do site. Separe com vírgulas os papéis compatíveis. Se o nó personalizado tem de ser exibido para os utilizadores, independentemente de qualquer papel do sistema, deixe este campo vazio.';
$string['setting_customnodesusageparametersystemroledt'] = 'Papéis de sistema suportados (opcional):';
$string['setting_customnodesusageparametertitledd'] = 'Este texto será mostrado como o texto/rótulo clicável do nó personalizado.';
$string['setting_customnodesusageparametertitledt'] = 'Título:';
$string['setting_customnodesusagepleasenote'] = 'Atenção:';
$string['setting_customnodesusagepleasenotecheck'] = 'Se um nó personalizado não aparecer no menu de navegação do Boost, verifique se todos os parâmetros obrigatórios estão configurados corretamente, se a configuração do idioma opcional está ajustada ao seu atual idioma de utilizador Moodle ou se os outros parâmetros opcionais aplicam-se ao utilizador.';
$string['setting_customnodesusagepleasenotecss'] = 'Devido à forma como o menu de navegação do Boost está construído no núcleo do Moodle, os nós personalizados não podem ser construídos de modo 100% livre. Não é possível adicionar IDs de elementos HTML personalizados ou um atributo de destino para abrir a hiperligação numa nova janela.';
$string['setting_customnodesusagepleasenotelink'] = 'O parâmetro \'Hiperligação\' pode conter espaços reservados. Por exemplo: /course/edit.php?id={courseid} para criar um nó com uma hiperligação para a página de configurações da disciplina atual.';
$string['setting_customnodesusagepleasenotemultilang'] = 'O parâmetro \'Título\' pode conter <a href="https://docs.moodle.org/en/Multi-language_content_filter" target="_blank">strings multilingues</a> para criar um nó com um rótulo de acordo com o idioma atual do utilizador.';
$string['setting_customnodesusagepleasenotephavailable'] = 'Os espaços reservados disponíveis:';
$string['setting_customnodesusagepleasenotephcoursefullnamedd'] = 'O nome completo da disciplina';
$string['setting_customnodesusagepleasenotephcoursefullnamedt'] = '{coursefullname}:';
$string['setting_customnodesusagepleasenotephcourseiddd'] = 'O ID (interno) da disciplina';
$string['setting_customnodesusagepleasenotephcourseiddt'] = '{courseid}:';
$string['setting_customnodesusagepleasenotephcourseshortnamedd'] = 'O nome curto da disciplina';
$string['setting_customnodesusagepleasenotephcourseshortnamedt'] = '{courseshortname}:';
$string['setting_customnodesusagepleasenotepheditinglinkdd'] = 'O valor \'ativado\' ou \'desativado\' que é necessário para alternar o modo de edição';
$string['setting_customnodesusagepleasenotepheditinglinkdt'] = '{editingtoggle}:';
$string['setting_customnodesusagepleasenotepheditingtitledd'] = 'O valor \'Ativar modo de edição\' ou \'Desativar modo de edição\' do pacote linguístico usado atualmente';
$string['setting_customnodesusagepleasenotepheditingtitledt'] = '{editingtoggle}:';
$string['setting_customnodesusagepleasenotephexplanation'] = 'Os espaços reservados são encapsulados em parênteses e serão substituídos automaticamente quando o nó personalizado for criado.&nbsp;';
$string['setting_customnodesusagepleasenotephpagecontextiddd'] = 'O ID do contexto da página atual';
$string['setting_customnodesusagepleasenotephpagecontextiddt'] = '{pagecontextid}:';
$string['setting_customnodesusagepleasenotephpagepathdd'] = 'O caminho do URL da página atual';
$string['setting_customnodesusagepleasenotephpagepathdt'] = '{pagepath}:';
$string['setting_customnodesusagepleasenotephsesskeydd'] = 'A chave da sessão para ser usada em URLs seguros';
$string['setting_customnodesusagepleasenotephsesskeydt'] = '{sesskey}:';
$string['setting_customnodesusagepleasenotephuserfullnamedd'] = 'O nome completo do utilizador autenticado';
$string['setting_customnodesusagepleasenotephuserfullnamedt'] = '{userfullname}:';
$string['setting_customnodesusagepleasenotephuseriddd'] = 'O ID (interno) do utilizador autenticado';
$string['setting_customnodesusagepleasenotephuseriddt'] = '{userid}:';
$string['setting_customnodesusagepleasenotephuserusernamedd'] = 'O nome de utilizador do utilizador autenticado';
$string['setting_customnodesusagepleasenotephuserusernamedt'] = '{userusername}:';
$string['setting_customnodesusagepleasenotepipes'] = 'A separação dos parâmetros opcionais com barras verticais é sempre necessária se os parâmetros estiverem localizados entre outras opções. Isto significa que tem de separar os parâmetros com uma barra vertical, mesmo que estejam vazios. Veja acima o exemplo do nó personalizado da Faculdade de Matemática.';
$string['setting_customnodesusagepleasenotetitle'] = 'O parâmetro \'Título\' pode conter espaços reservados. Por exemplo: {coursefullname} para criar um nó com rótulo igual ao nome completo do disciplina atual.';
$string['setting_customnodesusageusersexample'] = 'Moodle.org|http://www.moodle.org|en,de<br />
A nossa universidade|http://www.our-university.edu<br />
Faculdade de Matemática|http://www.our-university.edu/math||math<br />
Manual do professor|http://www.our-university.edu/teacher-handbook|||editingteacher,teacher<br />
Informações da disciplina|/course/view.php?id=1234||||||fa-graduation-cap<br />
{editingtoggle}|/course/view.php?id={courseid}&sesskey={sesskey}&edit={editingtoggle}|||editingteacher|admin,manager|OR|fa-pencil|editing|participants';
$string['setting_customnodesusageusersintro'] = 'Cada linha consiste no título da hiperligação, o URL da hiperligação, idiomas suportados (opcional), grupos globais suportados (opcional), papéis suportados (opcional), papéis globais suportados (opcional), um operador de combinação lógica (opcional), um ícone (opcional), o atributo \'data-key\' (opcional) e a \'chave do nó ascendente\' (opcional) - separados por barras verticais. Cada nó personalizado tem de ser escrito numa nova linha.';
$string['setting_insertactivitiescoursenodeexplanation'] = 'Este nó conterá nós ligados às páginas de visão global da atividade. Basicamente, traz a funcionalidade existente no bloco "Atividades" para o menu de navegação do Boost.';
$string['setting_insertactivitiescoursenoderealicons'] = 'Usar ícones de atividades individuais';
$string['setting_insertactivitiescoursenoderealicons_desc'] = 'Se ativar esta opção, serão usados os ícones de atividades individuais do núcleo do Moodle para os nós de atividades da disciplina. Estes ícones são coloridos e mais detalhados do que os ícones FontAwesome do resto do menu de navegação do Boost. Desativar esta configuração usará um ícone FontAwesome único para os nós de atividades da disciplina';
$string['setting_insertcoursesectionscoursenodecorehint'] = 'Observação: Esta funcionalidade só funcionará se a configuração <a href="{$a->url}">linkcoursesections</a> estiver ativa. Se desativou \'linkcoursesections\', esta configuração será ignorada.';
$string['setting_insertcoursesectionscoursenodeexplanation'] = 'Este nó será colocado acima da primeira secção da disciplina atual.';
$string['setting_insertcustomnodes'] = 'Inserir {$a->what} para {$a->who}';
$string['setting_insertcustomnodes_desc'] = 'Com esta configuração, pode inserir {$a->what} no menu de navegação do Boost, que serão adicionados {$a->where} e que serão visíveis para {$a->who}.';
$string['setting_insertnode'] = 'Inserir {$a->what} "{$a->which}"';
$string['setting_insertnode_desc'] = 'Se ativar esta opção, será inserido {$a->what} "{$a->which}"no menu de navegação do Boost.';
$string['setting_insertnodescollapsehint'] = 'Atenção: o nó inserido possui uma hiperligação de ação que direciona para a página principal da disciplina porque o Boost não suporta a adição de nós sem uma hiperligação de ação. A hiperligação de ação será substituída assim que também ativar a configuração para contrair o nó ao mesmo tempo.';
$string['setting_insertnodesheading'] = 'Inserir \'{$a->what}\' no menu de navegação do Boost';
$string['setting_insertresourcescoursenodeexplanation'] = 'Este nó será ligado à página de visão global dos recursos.<br /><em>Esta configuração está associada à configuração: Inserir nó \'Atividades\'. Se ativar ambas as configurações, obterá um nó "Atividades" e um nó "Recursos" conforme solicitado. Se ativar apenas a configuração "Atividades", o nó "Atividades" terá um nó com hiperligação para a página de visão global dos recursos.</em>';
$string['setting_modifymycoursesrootnodefilterhint'] = 'Adicionar nó da sugestão do filtro de disciplinas';
$string['setting_modifymycoursesrootnodefilterhint_desc'] = 'Se ativar esta opção, será adicionado um nó no final da lista \'As minhas disciplinas\' no menu de navegação do Boost, informando ao utilizador a razão porque a lista \'As minhas disciplinas\' está assim preenchida (ou seja, qual o filtro de disciplinas que produziu a lista atual de \'As minhas disciplinas\').';
$string['setting_modifymycoursesrootnodefilterlink'] = 'Adicionar nó de hiperligação do filtro de disciplinas';
$string['setting_modifymycoursesrootnodefilterlink_desc'] = 'Se ativar esta opção, será adicionado um nó no final da lista \'As minhas disciplinas\' no menu de navegação do Boost, informando ao utilizador onde alterar o filtro de disciplinas atual (ou seja, mostra uma hiperligação para o Painel do utilizador).<br /><em>Esta configuração está associada à configuração "Adicionar nó da sugestão do filtro de disciplinas". Se ativa ambas as configurações, um nó combinado será adicionado em vez de dois. </em>';
$string['setting_modifymycoursesrootnodeshowfiltered'] = 'Mostrar disciplinas filtradas';
$string['setting_modifymycoursesrootnodeshowfiltered_desc'] = 'Se ativar esta opção, a lista \'As minhas disciplinas\' no menu de navegação do Boost será alterada para mostrar as disciplinas que estão filtradas no bloco \'Visão global da disciplina\'. Se esta configuração estiver desativada, a lista \'As minhas disciplinas\' no menu de navegação do Boost irá mostrar todos as disciplinas \'Em progresso\', que é o comportamento predefinido do Moodle.';
$string['setting_modifymycoursesrootnodeshowfilterednavcourselimit'] = 'Atenção: Se ativar esta opção, o valor da string <a href="{$a->url}">navcourselimit</a> será alterado para 100000 durante cada carregamento de página. Definir com este valor tão alto é necessário para evitar que a lista de disciplinas seja encurtada de alguma forma que interrompa os mecanismos de filtragem.';
$string['setting_modifynodesheading'] = 'Modificar {$a->what} no menu de navegação do Boost';
$string['setting_movecontentbanknodeincoursecontext'] = 'Mover o {$a->rootnode} "{$a->contentbank}" no contexto da disciplina';
$string['setting_movecontentbanknodeincoursecontext_desc'] = 'Se ativar esta opção, irá mover o {$a->rootnode} "{$a->contentbank}" para a secção do {$a->coursenode} no menu de navegação do Boost ao visualizar uma página do Moodle que está localizada dentro de uma disciplina.';
$string['setting_movecontentbanknodeincoursecontextbefore'] = 'Mover o {$a->rootnode} "{$a->contentbank}"para antes deste {$a->coursenode}';
$string['setting_movecontentbanknodeincoursecontextbefore_desc'] = 'Com esta configuração pode definir antes de qual {$a->coursenode} o {$a->rootnode} "{$a->contentbank}" será movido. Tenha em atenção que deve certificar-se de que o {$a->coursenode} configurado é mostrado ao mesmo grupo de utilizadores que conseguem ver o {$a->rootnode} "{$a->contentbank}". Se o {$a->coursenode} configurado não for mostrado para um utilizador em particular, o {$a->rootnode} "{$a->contentbank}" é adicionado ao final da secção do {$a->coursenode} e um aviso de depuração é mostrado/adicionado aos registos.';
$string['setting_movenodesheading'] = 'Mover o {$a->what} no menu de navegação do Boost';
$string['setting_movenodestechnicalhint'] = 'Informação técnica: é conseguido através da remoção do nó do local original no menu de navegação do Boost e adicionado o mesmo nó novamente num outro local. Como resultado, ele só será movido dentro do menu de navegação mas permanece basicamente desencadeado e ainda pode ser acedido por outras partes do Moodle.';
$string['setting_removebadgescoursenodeexplanation'] = 'O nó só é removido se não houver medalhas na disciplina. Os professores ainda podem aceder à página de gestão das medalhas no menu da disciplina (menu da roda dentada).<br /><em>Esta configuração só é processada quando o subsistema de medalhas está ativado no Moodle.</em>';
$string['setting_removecompetenciescoursenodeexplanation'] = 'O nó só é removido se não houver competências na disciplina. Para os professores haverá outro nó "Competências" adicionado ao menu da disciplina (menu da roda dentada).<br /><em>Esta configuração só é processada quando o subsistema de competências está ativado no Moodle.</em>';
$string['setting_removecoursenodestechnicalhint'] = 'Informação técnica: é conseguido através da remoção do nó da árvore de navegação. O nó não pode ser acedido por outras partes do Moodle. Em configurações normais do Moodle, esta opção não deve causar qualquer problema.';
$string['setting_removegradescoursenodeexplanation'] = 'O nó é removido para todos os utilizadores, independentemente das permissões/papel do utilizador e independentemente da configuração \'Mostrar pauta aos alunos\' nas configurações da disciplina.';
$string['setting_removemycoursesnodeperformancehint'] = 'Observação: Se ativar esta opção, e também estiver ativa a opção \'<a href="{$a->url}">navshowmycoursecategories</a>\', a remoção do nó "As minhas disciplinas" demorará mais tempo e, por isso, deve considerar em desativar a configuração \'navshowmycoursecategories\'.';
$string['setting_removenode'] = 'Remover o {$a->what} "{$a->which}"';
$string['setting_removenode_desc'] = 'Se ativar esta opção, o {$a->what} "{$a->which}" será removido do menu de navegação do Boost.';
$string['setting_removenodeincoursecontext'] = 'Remover o {$a->what} "{$a->which}" no contexto da disciplina';
$string['setting_removenodeincoursecontext_desc'] = 'Se ativar esta opção, o {$a->what} "{$a->which}" será removido do menu de navegação do Boost ao visualizar uma página do Moodle que está localizada dentro de uma disciplina.';
$string['setting_removenodeinnoncoursecontext'] = 'Remover o {$a->what} "{$a->which}" fora do contexto da disciplina';
$string['setting_removenodeinnoncoursecontext_desc'] = 'Se ativar esta opção, o {$a->what} "{$a->which}" será removido do menu de navegação do Boost ao visualizar uma página do Moodle que está localizada fora de uma disciplina.';
$string['setting_removenodesheading'] = 'Remover \'{$a->what}\' do menu de navegação do Boost';
$string['setting_removenotselectedhomerootnodeexplanation'] = 'O nó Página principal/Painel do utilizador não selecionado é definido pelo que o utilizador escolheu não ser a sua página inicial.';
$string['setting_removeparticipantscoursenodeexplanation'] = 'O nó é removido para todos os utilizadores, independentemente das permissões/papel do utilizador.';
$string['setting_removerootnodestechnicalhint'] = 'Informação técnica: é conseguido através da alteração do atributo \'showinflatnavigation\' do nó para \'false\'. O nó ficará oculto apenas no menu de navegação do Boost, mas permanecerá na árvore de navegação e ainda pode ser acedido por outras partes do Moodle.';
$string['setting_removeselectedhomerootnodeexplanation'] = 'O nó Página principal/Painel do utilizador selecionado é definido pelo que o utilizador escolheu para ser a sua página inicial.';
$string['settingspage_bottomnodes'] = 'Nós do fundo';
$string['settingspage_coursenodes'] = 'Nós de disciplina';
$string['settingspage_custombottomnodes'] = 'Nós personalizados do fundo';
$string['settingspage_customcoursenodes'] = 'Nós personalizados de disciplina';
$string['settingspage_customrootnodes'] = 'Nós personalizados da raiz';
$string['settingspage_mycoursesrootnode'] = 'Nó da raiz \'As minhas disciplinas\'';
$string['settingspage_rootnodes'] = 'Nós da raiz';
