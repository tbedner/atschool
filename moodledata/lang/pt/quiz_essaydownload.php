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
 * Strings for component 'quiz_essaydownload', language 'pt', version '4.4'.
 *
 * @package     quiz_essaydownload
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allinone'] = 'Todas as respostas por tentativa num único ficheiro.';
$string['allinone_help'] = 'Se ativar esta opção, todas as respostas por tentativa serão agrupadas num único ficheiro.';
$string['attachments'] = 'Anexos';
$string['byattempt'] = 'Tentativa';
$string['byquestion'] = 'Pergunta';
$string['errorfilename'] = 'erro-{$a}.txt';
$string['errorfontsize'] = 'O tamanho da letra deve ser um número inteiro entre 6 e 50.';
$string['errormargin'] = 'Todas as margens da página devem ser números inteiros entre 0 e 80.';
$string['errormessage'] = 'Ocorreu um erro interno. O ficheiro está provavelmente incompleto. Contacte os programadores do módulo Descarregar perguntas de desenvolvimento (quiz_essaydownload) e envie-lhes os detalhes abaixo:';
$string['essaydownload'] = 'Descarregar perguntas de desenvolvimento';
$string['fileformat'] = 'Formato do ficheiro';
$string['fileformat_help'] = 'Pode escolher entre dois formatos:<ul><li>Portable Document Format (PDF) permite obter diretamente um documento formatado para cada resposta, pronto para correção no ecrã ou impressão.</li><li>Texto simples (TXT) onde a exportação é mais rápida e resulta num ficheiro mais pequeno, o que pode ser importante para testes com muitas perguntas. Estes ficheiros podem ser lidos com qualquer editor de texto ou abertos com um processador de texto para posterior formatação. Também pode escolher este formato se tiver algum script personalizado para converter ou tratar automaticamente as respostas dos alunos de uma determinada forma.</li></ul>';
$string['fileformatpdf'] = 'Portable Document Format (PDF)';
$string['fileformattxt'] = 'Texto simples (TXT)';
$string['firstlast'] = 'Nome - Apelido';
$string['fixremfontsize'] = 'Evitar texto pequeno ilegível';
$string['fixremfontsize_help'] = 'Por vezes, o editor HTML do Moodle <i>Atto</i> pode adicionar comandos indesejados de tamanho de letra que tornarão o texto ilegivelmente pequeno no PDF. Esta configuração irá solucionar este erro.';
$string['font'] = 'Tipo de letra';
$string['font_help'] = 'Tenha em atenção que ao utilizar o texto original formatado em HTML, o tipo de letra real pode ainda ser diferente, de acordo com a formatação. <br><br>Ao utilizar o resumo em texto simples, poderá querer utilizar uma fonte monoespaçada.';
$string['fontmono'] = 'Monoespaçada';
$string['fontsans'] = 'Sans-serif';
$string['fontserif'] = 'Serif';
$string['fontsize'] = 'Tamanho da letra (pontos)';
$string['fontsize_help'] = 'Tenha em atenção que ao utilizar o texto original formatado em HTML, o tipo de letra real pode ainda ser diferente, de acordo com a formatação.';
$string['footer'] = 'Rodapé';
$string['forceqtsummary'] = 'Forçar o uso de texto de perguntas simplificado';
$string['forceqtsummary_help'] = 'Em alguns casos, a exportação do texto da pergunta em formato HTML pode falhar, por exemplo, se incluir imagens com acesso restrito. A ativação desta opção utilizará o resumo simplificado do texto da pergunta, mesmo que o HTML esteja selecionado como a fonte do texto.';
$string['generaloptions'] = 'Opções gerais';
$string['groupby'] = 'Agrupar por';
$string['groupby_help'] = 'O arquivo pode ser estruturado por pergunta ou por tentativa:<ul><li>Se agrupar por pergunta, o arquivo terá uma pasta para cada pergunta. Dentro de cada pasta, haverá uma pasta para cada tentativa.</li><li>Se agrupar por tentativa, o arquivo terá uma pasta para cada tentativa. Dentro de cada pasta, haverá uma pasta para cada pergunta.</li></ul>';
$string['includeattachments'] = 'Descarregar possíveis anexos incluídos na resposta de um aluno.';
$string['includeattachments_help'] = 'Qualquer anexo é disponibilizado tal como está. Tenha em atenção que os anexos podem conter malware.';
$string['includefooter'] = 'Adicionar rodapé com número de página em todas as páginas.';
$string['includequestiontext'] = 'Incluir texto da pergunta.';
$string['includequestiontext_help'] = 'Incluir o texto da pergunta pode ser útil se o seu teste utilizar perguntas aleatórias.';
$string['includestats'] = 'Incluir contagem de palavras e caracteres após a resposta.';
$string['includestats_help'] = 'Tenha em atenção que a contagem de caracteres eliminará os espaços em branco.';
$string['lastfirst'] = 'Nome - Apelido';
$string['limitattempts'] = 'Limitar as tentativas';
$string['linedouble'] = 'Duplo';
$string['lineoneandhalf'] = '1,5 linhas';
$string['linesingle'] = 'Simples';
$string['linespacing'] = 'Espaçamento';
$string['margins'] = 'Margens da página (mm): esquerda, direita, superior, inferior';
$string['nameordering'] = 'Formato do nome';
$string['noessayquestion'] = 'Este teste não contém perguntas de desenvolvimento.';
$string['nothingtodownload'] = 'Nada para descarregar';
$string['onlyone'] = 'Exportar no máximo uma tentativa por utilizador, de acordo com o método de avaliação: {$a}';
$string['onlyone_help'] = 'Quando um teste permite múltiplas tentativas, a exportação incluirá normalmente todas as tentativas concluídas de todos os utilizadores. No entanto, por vezes, apenas a última tentativa (ou a primeira, ou aquela com a nota global mais elevada) pode ser relevante. Com esta opção ativada, o ficheiro incluirá (no máximo) uma tentativa por utilizador.';
$string['page'] = 'Formato da página';
$string['pagea4'] = 'A4';
$string['pageletter'] = 'Letter';
$string['pagenumber'] = 'Página {$a}';
$string['pdfoptions'] = 'Configurações do PDF';
$string['plugindescription'] = 'Descarregar os textos das respostas e os ficheiros anexos enviados em resposta a perguntas de desenvolvimento de um teste.';
$string['pluginname'] = 'Descarregar perguntas de desenvolvimento';
$string['presentedto'] = 'Apresentada a: {$a}';
$string['privacy:metadata'] = 'O módulo Descarregar perguntas de desenvolvimento do teste não armazena quaisquer dados pessoais.';
$string['response'] = 'Resposta';
$string['responsewith'] = 'Resposta à pergunta {$a}';
$string['shortennames'] = 'Encurtar o nome do ficheiro e os nomes das subpastas.';
$string['shortennames_help'] = 'Se o nome total do caminho de um ficheiro extraído tiver mais de 260 caracteres, poderá causar problemas com a ferramenta de extração integrada do Windows. Neste caso, ativar esta caixa de seleção pode ajudar. No entanto, poderá ser mais difícil identificar os seus alunos se estes tiverem nomes muito longos.';
$string['source'] = 'Origem do texto a utilizar';
$string['source_help'] = 'Se o texto da pergunta e/ou da resposta do aluno estiver escrito em formato HTML, o Moodle irá gerar automaticamente um resumo em texto simples do texto formatado. Este resumo terá todas as tags HTML removidas e alguma formatação básica aplicada (por exemplo, cabeçalhos e tipo de letra negrito transformados em MAIÚSCULAS). <br><br>Ao gerar ficheiros PDF, pode escolher se pretende utilizar este resumo ou a texto original da pergunta/resposta do aluno com a sua formatação. Se escolher o resumo, provavelmente também deverá utilizar uma fonte monoespaçada. <br><br>Tenha em atenção que não pode utilizar o texto original formatado ao gerar ficheiros TXT. Tenha em atenção também que a configuração não terá qualquer efeito se for pedido ao aluno que escreva a sua resposta em formato não HTML, por exemplo, em texto simples.';
$string['sourceoriginal'] = 'Texto original formatado em HTML';
$string['sourcesummary'] = 'Resumo em texto simples';
$string['statistics'] = 'Estatísticas';
$string['statisticsnote'] = '{$a->words} palavras, {$a->chars} caracteres (excluindo espaços)';
$string['troubleshooting'] = 'Solução de problemas';
$string['useflatarchive'] = 'Utilizar hierarquia de pastas simples no ficheiro';
$string['useflatarchive_help'] = 'Se ativar esta opção, a hierarquia de pastas do ficheiro será "mais plana", i. e. em vez de ter <i>Tentativa_X/Pergunta_Y/resposta.pdf</i> terá <i>Tentativa_X/Pergunta_Y_resposta.pdf</i> (ou similar se agrupado por pergunta). Como consequência, precisará de menos cliques para obter os seus documentos.';
