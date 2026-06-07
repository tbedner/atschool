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
 * Strings for component 'wordcloud', language 'pt', version '4.4'.
 *
 * @package     wordcloud
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityclose'] = 'Data/hora de fecho';
$string['activityclose_help'] = 'Se ativar esta opção, os alunos não poderão enviar palavras após esta data. Se desativado, é possível enviar a qualquer momento.';
$string['activityopen'] = 'Permitir submissões a partir de';
$string['activityopen_help'] = 'Se ativar esta opção, os alunos não poderão enviar palavras antes desta data. Se desativado, é possível imediatamente.';
$string['appearance'] = 'Aparência';
$string['close'] = 'Fecha em:';
$string['closebeforeopen'] = 'Não foi possível atualizar a nuvem de palavras. Especificou uma data de fecho antes da data de abertura.';
$string['cloud'] = 'Nuvem de palavras';
$string['cloudvisibility'] = 'Visibilidade das palavras enviadas';
$string['cloudvisibility_help'] = 'Aqui pode definir como devem ser exibidas para os participantes as palavras da Nuvens de palavras: *A qualquer momento - As palavras ficam visíveis a qualquer momento e sem quaisquer restrições. *Apenas após submissão própria. - As palavras só ficam visíveis após o participante ter enviado pelo menos 1 palavra. *Apenas após a data de fecho. - As palavras só ficam visíveis quando o prazo de submissão terminar.';
$string['color_custom'] = 'Personalizado';
$string['completiondetail:submits'] = 'Enviar palavras: {$a}';
$string['completionsubmits'] = 'O aluno deve submeter pelo menos o número de palavras indicado.';
$string['completionsubmitsgroup'] = 'Requer submissão';
$string['count'] = 'Número';
$string['editentry'] = 'Editar palavras';
$string['errormonocolorhex'] = 'O valor não é uma representação hexadecimal de uma cor!';
$string['errortoomanywords'] = 'Foi atingido o máximo de palavras!';
$string['errorupdateentries'] = 'As seguintes palavras não puderam ser atualizadas:';
$string['errorwordoverflow'] = 'A nova entrada é muito longa!';
$string['export'] = 'Exportar como...&nbsp;';
$string['exportcsv'] = 'Exportar CSV';
$string['exportdefault'] = 'Exportar';
$string['exportpng'] = 'Exportar PNG';
$string['fontcolor'] = 'Cor do texto {$a}';
$string['fontcolordesc'] = 'Defina a cor do texto {$a}. Defina os valores das cores como código hexadecimal. As palavras só serão coloridas quando todas as cores do texto estiverem definidas.';
$string['fullscreen'] = 'Ecrã inteiro';
$string['list'] = 'Lista';
$string['modulename'] = 'Nuvem de palavras';
$string['modulename_help'] = 'Este módulo permite que os professores visualizem uma lista de palavras-chave como uma nuvem de palavras. A importância de uma palavra é mostrada com o tamanho do tipo de letra, de acordo com o número de menções.';
$string['modulenameplural'] = 'Nuvens de palavras';
$string['monocolor'] = 'Cor base';
$string['monocolor_help'] = 'Escolha uma das cores definidas nas configurações de administração para o esquema de cores monocromáticas.';
$string['monocolor_hex'] = 'Cor personalizada';
$string['monocolor_hex_help'] = 'Indique o valor hexadecimal de seis dígitos da cor desejada no formato "aabb11" (sem o "#").';
$string['monocolordesc'] = 'Defina uma cor para as palavras da nuvem de palavras. O sistema irá calcular 6 cores com diferentes valores de luminosidade. Defina as cores no formato hexadecimal (sem o "#").';
$string['notification'] = 'Selecione um grupo para submeter uma palavra';
$string['open'] = 'Abre em:';
$string['pagetitle'] = 'Nuvem de palavras Moodle';
$string['pluginadministration'] = 'Administração da Nuvem de palavras';
$string['pluginname'] = 'Nuvem de palavras';
$string['privacy:metadata'] = 'O módulo Nuvem de palavras não armazena quaisquer dados pessoais.';
$string['refreshtext'] = 'Atualizar a página para obter o conteúdo mais recente da nuvem de palavras';
$string['refreshtime'] = 'Tempo de atualização';
$string['refreshtimedesc'] = 'Defina o intervalo de atualização automática (em segundos)';
$string['removewordcheck'] = 'Tem a certeza de que pretende remover a palavra \'{$a}\' desta atividade de nuvem de palavras?';
$string['saved'] = 'Guardado';
$string['submitbtn'] = 'Submeter';
$string['submittedwords'] = 'Palavras submetidas:';
$string['textbox'] = 'Adicione uma palavra aqui...';
$string['timing'] = 'Disponibilidade';
$string['usemonocolor'] = 'Esquema de cores';
$string['usemonocolor_help'] = 'Pode escolher entre uma coloração aleatória ou uma paleta sombreada sequencial.<br /><em>Coloração aleatória</em>: As suas palavras recebem uma cor aleatória. Palavras mencionadas na mesma frequência ou similar são mostradas com a mesma cor. <br /><em>Paleta sequencialmente sombreada</em>: Pode escolher uma das cores fornecidas ou inserir uma cor personalizada através do valor hexadecimal de seis dígitos para um esquema de cores monocromáticas. Todas as palavras terão a mesma cor, palavras com contagem de palavras diferente terão uma luminosidade mais clara ou mais escura.';
$string['usemonocolor_random'] = 'cor aleatória';
$string['usemonocolor_sequential'] = 'Paleta sequencialmente sombreada';
$string['warning'] = 'Aviso';
$string['warningdoubleentries'] = 'Entradas idênticas encontradas na lista. Se continuar, elas serão agregadas e as contagens serão somadas.<br /><br />As entradas a seguir não são exclusivas:';
$string['word'] = 'Palavra';
$string['wordcloud:addinstance'] = 'Criar uma atividade Nuvem de palavras';
$string['wordcloud:editentry'] = 'Editar palavras';
$string['wordcloud:submit'] = 'Submeter novas palavras';
$string['wordcloud:view'] = 'Visualizar a nuvem de palavras';
$string['wordcloudname'] = 'Nome da atividade';
$string['wordlist'] = 'Lista de palavras';
