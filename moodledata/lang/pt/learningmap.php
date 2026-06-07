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
 * Strings for component 'learningmap', language 'pt', version '4.4'.
 *
 * @package     learningmap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsettings'] = 'Configurações avançadas';
$string['allowedfilters'] = 'Filtros permitidos para usar com mod_learningmap';
$string['allowedfilters_desc'] = 'Lista separada por vírgulas sem o prefixo filter_';
$string['backgroundfile'] = 'Imagem de fundo';
$string['backgroundfile_help'] = 'Ficheiro que será usado como imagem de fundo para o mapa.';
$string['backlink'] = 'Para "{$a->name}"';
$string['cachedef_backlinks'] = 'Esta cache armazena informações sobre se existe um backlink para o mapa de aprendizagem para mostrar na página do módulo da disciplina.';
$string['completion_with_all_places'] = 'É necessário chegar a todos os lugares para concluir';
$string['completion_with_all_targets'] = 'É necessário chegar a todos os lugares de destino para concluir';
$string['completion_with_one_target'] = 'É necessário chegar a um lugar de destino para concluir';
$string['completiondetail:all_places'] = 'Chegar a todos os lugares';
$string['completiondetail:all_targets'] = 'Chegar a todos os lugares de destino';
$string['completiondetail:one_target'] = 'Chegar a um lugar de destino';
$string['completiondisabled'] = 'A verificação da conclusão está desativada nas configurações da disciplina. Este módulo não funciona sem a verificação da conclusão.';
$string['completiontype'] = 'Tipo de conclusão';
$string['editorhelp'] = 'Como usar o editor';
$string['editplace'] = 'Editar lugar';
$string['freetype_required'] = 'É necessária a extensão FreeType para GD para executar mod_learningmap.';
$string['groupmode'] = 'Modo de grupo';
$string['groupmode_help'] = 'Quando o modo de grupo está ativo, é suficiente que um membro do grupo tenha concluído uma atividade para disponibilizar os lugares ligados disponíveis.';
$string['hiddenactivitywarning'] = 'Esta atividade está oculta e não pode ser acedida pelos alunos';
$string['hidepaths'] = 'Ocultar caminhos';
$string['hidepaths_help'] = 'Esta opção oculta os caminhos na vista do aluno mas permanecem funcionais para construir as dependências entre as atividades.';
$string['hidestroke'] = 'Ocultar traços para os lugares';
$string['hidestroke_help'] = 'Esta opção oculta os traços para os lugares';
$string['hover'] = 'Animação para os lugares';
$string['hover_help'] = 'Esta opção adiciona uma animação aos locais quando passa com o rato sobre eles.';
$string['intro'] = 'Percurso de aprendizagem';
$string['intro_help'] = '<ul><li><b>Adicionar um novo lugar:</b> Duplo clique na imagem de fundo</li>
<li><b>Adicionar um caminho:</b> Clique em dois locais</li>
<li><b>Remover um lugar/caminho:</b> Duplo clique no objeto</li>
<li><b>Alterar propriedades de um lugar:</b> Clique com o botão direito do rato</li></ul>';
$string['learningmap'] = 'Percurso de aprendizagem';
$string['learningmap:addinstance'] = 'Adicionar um percurso de aprendizagem';
$string['learningmap:view'] = 'Ver percurso de aprendizagem';
$string['loading'] = 'A carregar o percurso de aprendizagem...';
$string['modulename'] = 'Percurso de aprendizagem';
$string['modulename_help'] = 'O módulo Percurso de aprendizagem permite visualizar atividades da disciplina como pontos de um mapa, ligados por caminhos. Alguns pontos são lugares de partida e mostrados no início. Outros lugares e caminhos são mostrados quando as atividades relacionadas estão concluídas.';
$string['modulenameplural'] = 'Percursos de aprendizagem';
$string['name'] = 'Nome do percurso de aprendizagem';
$string['name_help'] = 'O nome do percurso de aprendizagem só é exibido se a opção "Mostrar mapa na página da disciplina" não estiver marcada.';
$string['nocompletion'] = 'Nenhuma conclusão com itens do mapa';
$string['nocompletionenabled'] = 'Não disponível porque a conclusão não está ativada';
$string['ownprogress'] = 'O meu progresso';
$string['paths'] = 'Caminhos';
$string['places'] = 'Lugares';
$string['pluginadministration'] = 'Administração do percurso de aprendizagem';
$string['pluginname'] = 'Percurso de aprendizagem';
$string['pulse'] = 'Animação pulse para os lugares não visitados';
$string['pulse_help'] = 'Esta opção adiciona uma animação para destacar os locais não visitados.';
$string['showall'] = 'Mostrar todos lugares e caminhos';
$string['showall_help'] = 'Esta opção mostra todas os caminhos e lugares do mapa a partir do início. Os lugares e caminhos ainda não disponíveis estão obscurecidos.';
$string['showbacklink'] = 'Mostrar backlinks nas páginas dos módulos da disciplina';
$string['showbacklink_help'] = 'Esta opção mostra a hiperligação "Voltar ao mapa de aprendizagem" em cada página do módulo da disciplina que pertença ao mapa.';
$string['showtext'] = 'Mostrar os nomes das atividades';
$string['showtext_help'] = 'Esta opção mostra os nomes das atividades ao lado dos lugares. O texto pode ser arrastado é atualizado automaticamente quando o nome da atividade é alterado.';
$string['showwaygone'] = 'Destacar caminho';
$string['showwaygone_help'] = 'Esta opção destaca como o participante percorreu o mapa (por ordem cronológica de conclusão).';
$string['slicemode'] = 'Mostrar o mapa com os lugares';
$string['slicemode_help'] = 'Esta opção mostra o mapa aos poucos, à medida que novos lugares ficam disponíveis. As partes ocultas do mapa estão cobertas por uma névoa. A névoa desaparece completamente quando todos os lugares estiverem disponíveis.';
$string['startingplace'] = 'Lugar de partida';
$string['svgcode'] = 'Código SVG';
$string['targetplace'] = 'Lugar de destino';
$string['usecasehelp'] = 'Como usar os percursos de aprendizagem';
$string['usecaselink'] = 'Hiperligação para a página que explica o uso do módulo';
$string['usecheckmark'] = 'Marcação para lugares visitados';
$string['usecheckmark_help'] = 'Esta opção também mostra uma marcação nos lugares visitados.';
$string['visited'] = 'Visitado';
