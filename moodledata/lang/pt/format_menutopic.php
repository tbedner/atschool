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
 * Strings for component 'format_menutopic', language 'pt', version '4.4'.
 *
 * @package     format_menutopic
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutresource'] = 'Acerca do recurso';
$string['aboutsection'] = 'Acerca do tópico';
$string['actionadd_sheet_daughter_sheetedit'] = 'Adicionar como folha de nível inferior';
$string['actionadd_sheet_sister_sheetedit'] = 'Adicionar como folha do mesmo nível';
$string['actiondelete_sheet_sheetedit'] = 'Apagar';
$string['actiondeleteconfirm_sheet_sheetedit'] = 'Se apagar a folha, todas as folhas de nível inferior são apagadas. Tem a certeza de que pretende continuar?';
$string['actiondown_sheet_sheetedit'] = 'Mover para baixo';
$string['actionleft_sheet_sheetedit'] = 'Mover para a esquerda';
$string['actionright_sheet_sheetedit'] = 'Mover para a direita';
$string['actions_sheet_sheetedit'] = 'Ações do item';
$string['actionsave_sheet_sheetedit'] = 'Alterar dados do item';
$string['actionup_sheet_sheetedit'] = 'Mover para baixo';
$string['config_editmenu'] = 'Configurar';
$string['config_editmenu_title'] = 'Menu de configuração';
$string['config_template_topic_title'] = 'Configurar - Descrição da secção como modelo -';
$string['coursedisplay'] = 'Modo de visualização da secção 0';
$string['coursedisplay_help'] = 'Define como é exibida a secção 0: como elemento do menu ou como uma secção antes da barra de menus.';
$string['coursedisplay_multi'] = 'Antes da barra de menus';
$string['coursedisplay_single'] = 'Como elemento do menu';
$string['csscode'] = 'Código CSS';
$string['cssdefault'] = 'Incluir estilos CSS predefinidos';
$string['cssdefault_help'] = 'Define se, por predefinição, os estilos CSS são incluídos no menu. Desativar esta opção pode ser útil para incluir estilos personalizados através da opção "<b>Modelo de estilos (CSS)</b>"';
$string['csstemplate'] = 'Acerca: estilos CSS';
$string['csstemplate_editmenu'] = 'Estilos (CSS)';
$string['csstemplate_editmenu_title'] = 'Estilos (CSS)';
$string['csstemplate_help'] = 'Permite incluir estilos CSS personalizados, para definir uma aparência gráfica personalizada do menu.
<p>Um exemplo simples de como usar o modelo de estilos:</p>
<div style=" white-space:nowrap; font-size: 12px; border: 1px solid #666; padding: 5px; background-color: #CCC">
#format_menutopic_menu { margin-bottom: 10px; }
</div>
<p>Com o código acima, o menu é separado 10px da parte inferior, de acordo com a posição definida para o menu.</p>
<p><strong>Observações:</strong>
<ul>
    <li>O identificador (id) da camada (div) que o menu contém é <strong>format_menutopic_menu</strong>. Estes dados podem ser úteis para manipular os estilos do menu sem afetar outros componentes da página.</li>
   <li>É possível que, para fazer alterações nos estilos, não seja possível visualizar imediatamente na disciplina. Neste caso, deve atualizar a página. Em muitos navegadores, pressione a combinação de teclas Ctrl+F5.</li>
</ul></p>';
$string['currentsection'] = 'Este tópico';
$string['defaultsectionsnavigation'] = 'Valor predefinido para navegação nas secções';
$string['defaultsectionsnavigation_help'] = 'Valor predefinido utilizado nas disciplinas para definir a funcionalidade "Usar navegação nas secções". Pode ser alterado em cada disciplina.';
$string['displaynavigation'] = 'Mostrar navegação';
$string['displaynavigation_help'] = 'Indica se a navegação é exibida entre as secções e a posição onde é mostrada.';
$string['displaynousedmod'] = 'Mostrar recursos não incluídos no modelo';
$string['displaynousedmod_help'] = 'Mostrar recursos não incluídos no modelo';
$string['editmenu'] = 'Editar menu';
$string['enableanchorposition'] = 'Ativar posição de âncora';
$string['enableanchorposition_help'] = 'Usar uma âncora para navegar até o topo do menu ao clicar numa opção do menu.';
$string['end_editmenu'] = 'Terminar a edição do menu';
$string['error_jsontree'] = 'Ocorreu um erro na estrutura de dados retornada como composição da árvore';
$string['globalstyle'] = 'Estilo global';
$string['globalstyle_help'] = 'Define o estilo do menu.';
$string['hiddenmenubar'] = 'O menu está configurado para estar oculto. Apenas serão visíveis no modo de edição.';
$string['hidefromothers'] = 'Ocultar tópico';
$string['htmlcode'] = 'HTML';
$string['htmltemplate_editmenu'] = 'Modelo HTML';
$string['htmltemplate_editmenu_title'] = 'HTML';
$string['icons_templatetopic'] = 'Mostrar ícones nos nomes dos recursos';
$string['icons_templatetopic_help'] = 'Mostrar ícones nos nomes dos recursos';
$string['jscode'] = 'Código';
$string['jsdefault'] = 'Incluir JavaScript predefinido';
$string['jsdefault_help'] = 'Define se ficam incluídas as funções Javascript que geram o menu. Desativar o Javascript predefinido pode ser útil se pretende dar outra aparência ao menu usando código Javascript que pode ser incluído no "<b>Modelo Javascript</b>".';
$string['jstemplate'] = 'Código JavaScript';
$string['jstemplate_editmenu'] = 'Modelo JavaScript';
$string['jstemplate_editmenu_title'] = 'Código JavaScript';
$string['jstemplate_help'] = 'Permite definir o código JavaScript que atuará no menu ou na página. Pode ser útil definir comportamentos adicionais para o menu ou mesmo uma estrutura de menu diferente do predefinido.
<p><b>Observações:</b>
<ul>
     <li>O nome <b>format_menutopic_menu</b> corresponde ao identificador div que contém o menu criado em HTML como listas aninhadas, geralmente com as tags HTML: ul e li.</li>
     <li>É possível que, para fazer alterações no JavaScript, não seja possível visualizar imediatamente na disciplina. Nesse caso, deve atualizar a página. Em muitos navegadores, pressione a combinação de teclas Ctrl+F5.</li>
</ul></p>';
$string['linkinparent'] = 'Hiperligações na raiz dos campos do submenu';
$string['linkinparent_help'] = '<p>Define o comportamento das opções do menu que atuam com raiz de um submenu.</p>
<p>Se for definido como <b>Sim</b>, o item do menu atua como uma hiperligação para clicar e abrir o URL definido na "<b>Árvore do menu</b>". Se for definido como <b>Não</b>, o item do menu implementa as hiperligações do nível inferior</p>';
$string['menuposition'] = 'Posição do menu';
$string['menuposition_help'] = '<p>Define a posição onde o menu aparecerá na disciplina. As opções possíveis são:
<ul>
    <li><b>Não mostrar:</b> o menu não é gerado</li>
    <li><b>Esquerda:</b> o menu é gerado verticalmente na coluna dos blocos à esquerda, se existir</li>
    <li><b>Meio:</b> o menu é gerado horizontalmente como uma barra na parte central da disciplina, acima da secção</li>
    <li><b>Direita:</b> o menu é gerado verticalmente na coluna dos blocos à direita, se existir</li>
</ul></p>';
$string['menuposition_hide'] = 'Não mostrar';
$string['menuposition_left'] = 'Esquerda';
$string['menuposition_middle'] = 'Meio';
$string['menuposition_right'] = 'Direita';
$string['name_sheet_sheetedit'] = 'Nome da folha';
$string['navbartitle'] = 'Secções';
$string['navigationposition_both'] = 'No topo e fundo da secção';
$string['navigationposition_bottom'] = 'Apenas no fundo';
$string['navigationposition_nothing'] = 'Não usar';
$string['navigationposition_site'] = 'Use o valor predefinido do site';
$string['navigationposition_slide'] = 'Como slides';
$string['navigationposition_support'] = 'Apenas se o tema não suportar a funcionalidade "Índice da disciplina"';
$string['navigationposition_top'] = 'Apenas no topo';
$string['next_topic'] = 'Seguinte';
$string['nodesnavigation'] = 'Nós da navegação';
$string['nodesnavigation_help'] = '<p>Números das secções, separados por vírgulas. <b>Exemplo: </b>1, 2, 8, 10, 3.</p>Se estiver vazio, será usada a navegação predefinida.<p>Os números das secções não podem ser repetidos, uma vez que mostrarão a navegação desde a primeira correspondência encontrada.</p>';
$string['notsaved'] = 'Não foi possível guardar a informação';
$string['page-course-view-topics'] = 'Qualquer página principal da disciplina no formato Menu de tópicos';
$string['page-course-view-topics-x'] = 'Qualquer página da disciplina no formato Menu de tópicos';
$string['pluginname'] = 'Formato Menu de tópicos';
$string['previous_topic'] = 'Anterior';
$string['privacy:metadata'] = 'O módulo Formato Menu de tópicos não armazena quaisquer dados pessoais.';
$string['savecorrect'] = 'A informação foi guardada com sucesso';
$string['sectionname'] = 'Tópico';
$string['separator_navigation'] = '-';
$string['showfromothers'] = 'Mostrar tópico';
$string['shownavbarbrand'] = 'Mostrar marca da barra de navegação';
$string['shownavbarbrand_help'] = 'Mostra o texto da marca da barra de navegação nos estilos Bootstrap.';
$string['style_basic'] = 'Básico';
$string['style_boots'] = 'Bootstrap';
$string['style_bootsdark'] = 'Bootstrap escuro';
$string['target_sheet_sheetedit'] = 'Hiperligação do destino';
$string['targetblank_sheet_sheetedit'] = 'Nova janela';
$string['targetself_sheet_sheetedit'] = 'Mesma janela';
$string['template_namemenutopic'] = 'Tópico {$a}';
$string['templatetopic'] = 'Ativar Descrição da seção como modelo';
$string['templatetopic_help'] = 'Ativar o título do tópico como modelo';
$string['title_panel_sheetedit'] = 'Editar árvore do menu';
$string['togglemenu'] = 'Alternar menu';
$string['topic_sheet_sheetedit'] = 'Secção destino';
$string['tree_editmenu'] = 'Árvore do menu';
$string['tree_editmenu_title'] = 'Configurar árvore';
$string['tree_struct'] = 'Estrutura da árvore';
$string['tree_struct_help'] = '<p>A base do menu é uma estrutura em árvore na qual cada ramo ou folha da árvore pode ser associada a um URL. O URL pode ser externo ou diretamente ligado a uma secção da disciplina. Quando acede pela primeira vez para definir a árvore das secções, a plataforma sugere uma estrutura linear, sem ramificações, com uma quantidade de folhas igual ao número de secções da disciplina.</p>
<p>Existem diferentes opções de configuração da folha:</p>
<ul>
    <li>
        <strong>Editar a folha (✍):</strong> atualizar os valores selecionados para as propriedades da folha selecionada. As propriedades que podem ser modificadas são:
            <ul>
                <li><strong>Nome da folha:</strong> a etiqueta que aparece para esta folha no menu.</li>
                <li><strong>Secção de destino:</strong> se a folha for usada para uma secção da disciplina, esta opção indica qual será a secção selecionada. Se selecionar uma secção, não será possível selecionar um URL externo para o qual direcionar a hiperligação da opção no menu.</li>
                <li><strong>URL:</strong> indica o URL ao qual fará referência à opção de menu. Só pode ser especificado se não for selecionada uma secção de destino.</li>
                <li><strong>Destino da hiperligação:</strong> indica se  pretende abrir a hiperligação, a secção ou o URL externo, numa nova janela ou na mesma janela. Se não for selecionada uma opção, a hiperligação será aberto na mesma janela.</li>
            </ul>
    </li>
    <li><strong>Mover uma folha para a esquerda (←):</strong> coloca no mesmo nível da folha que a contém (folha de nível superior). Apenas está disponível se a folha for de nível inferior de outra folha e nunca se estiver na ramificação principal.</li>
    <li><strong>Mover uma folha para a direita (↑):</strong> coloca a folha no nível inferior da folha anterior. Não está disponível para a primeira folha do ramo principal.</li>
    <li><strong>Mover uma folha para cima (↑):</strong> altera a ordem de uma folha colocando-a ao lado da folha imediatamente anterior. Não está disponível para a primeira folha de um ramo.</li>
    <li><strong>Mover uma folha para baixo (↓):</strong> altera a ordem de uma folha colocando-a ao lado da folha imediatamente a seguir. Não está disponível para a última folha de um ramo.</li>
    <li><strong>Apagar uma folha (✘):</strong> apaga a folha selecionada e todas as folhas que ela contém.</li>
    <li><strong>Adicionar uma folha (✚): </strong> cria uma nova folha e adicione-a ao nível inferior.</li>
</ul>
<p>As alterações realizadas no menu apenas são guardadas depois de clicar em "<strong>Guardar alterações</strong>" na parte inferior da página. </p>';
$string['url_sheet_sheetedit'] = 'URL';
$string['usescourseindex'] = 'Usar índice da disciplina';
$string['usescourseindex_help'] = 'Usar a barra <em>índice da disciplina</em> para navegar pelas secções e recursos';
$string['usessectionsnavigation'] = 'Usar navegação nas secções';
$string['usessectionsnavigation_help'] = 'Mostrar botões para navegar para a secção seguinte ou anterior.';
