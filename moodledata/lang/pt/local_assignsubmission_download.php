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
 * Strings for component 'local_assignsubmission_download', language 'pt', version '4.4'.
 *
 * @package     local_assignsubmission_download
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['all'] = 'Todos';
$string['assignsubmission_download:view'] = 'Conceder acesso para renomear ficheiros e exportar submissões';
$string['clean_filerenaming'] = 'Limpar nomes dos ficheiros';
$string['clean_filerenaming_help'] = 'Remove espaços em branco e caracteres especiais dos nomes dos ficheiros e reescreve os tremas. Por exemplo: \'Übung 1-Gruppe $ 4\' ficará \'Uebung1-Gruppe\'';
$string['data_preview'] = 'Pré-visualização dos dados';
$string['data_preview_help'] = 'Clique em [+] ou [-] para mostrar ou ocultar colunas na visualização da impressão.';
$string['datapreviewtitle'] = 'Pré-visualização dos dados';
$string['datasettingstitle'] = 'Configuração dos dados';
$string['dateinthefutureerror'] = 'Submissões mais recente que não pode ser no futuro';
$string['defaultfilerenamingpattern'] = '[filename]';
$string['downloadprintpreviewtable'] = 'Descarregar a tabela de exportação de submissões.';
$string['downloadtype'] = 'Descarregar';
$string['downloadtype:error'] = 'Selecione pelo menos uma opção';
$string['downloadtype:feedbacks'] = 'Todos os ficheiros de feedback dos professores';
$string['downloadtype:submissions'] = 'Todos os ficheiros de submissões dos alunos';
$string['downloadtype_help'] = 'Aqui pode selecionar quais os ficheiros que pretende descarregar - ficheiros enviados pelos alunos e/ou de feedback de professores (comentários, PDFs anotados, ficheiros de feedback)';
$string['exportformat'] = 'Formato';
$string['filenumberinfo'] = 'O número máximo de ficheiros que cada aluno pode carregar é superior a 1. Considere usar [filenumber] para numerar todos os ficheiros carregados de cada aluno de modo a melhorar a ordenação.';
$string['filerenamesettingstitle'] = 'Descarregar submissões renomeadas';
$string['filerenamingpattern'] = 'Esquema de nome';
$string['filerenamingpattern_help'] = 'O parâmetro \'Esquema do nome\' determina a nomenclatura dos nomes dos ficheiros. Podem ser usados os termos apresentados abaixo entre parênteses (\'tags\'): <br>
     <br>
     [filename] nome original do ficheiro<br>
     [firstname] nome<br>
     [lastname] apelido<br>
     [fullname] nome completo<br>
     [idnumber] número de identificação (ID)<br>
     [assignmentname] nome do trabalho<br>
     [group] nome do grupo, caso o participante esteja inscrito num grupo<br>
     [groupid] ID do grupo, caso o participante esteja inscrito num grupo com ID<br>
     [filenumber] número sequencial para ficheiros enviados por um único aluno<br>
     [courseshortname] nome curto da disciplina<br>
     [currentdate] data atual bno formato YYYYMMDD (AnoMêsDia)<br>
     [currenttime] hora atual HHMM (HorasMinutos)<br>
     <br>
     Se adicionar quaisquer caracteres alfanuméricos (sem parênteses), esses caracteres serão adicionados a todos os trabalhos carregados/descarregados<br>
     <br>
     Exemplo: <br>
     A entrada \'[idnumber]-[lastname]_[assignname]\' resultará no seguinte nome de ficheiro: \'01234567-Silva_assignmentname\'';
$string['hiddenuser'] = 'Participante';
$string['labelgroup'] = 'Descarregar grupo específico';
$string['labelgroup_help'] = 'Descarregar apenas os trabalhos de alunos de um grupo específico.';
$string['labelgrouping'] = 'Descarregar agrupamento específico';
$string['labelgrouping_help'] = 'Descarregar apenas os trabalhos de alunos de um agrupamento específico.';
$string['lastdownloaded_title'] = 'Último descarregamento de submissões do utilizador';
$string['lastdownloaded_title_help'] = 'A data mostra o último descarregamento do utilizador de submissões dos alunos.';
$string['lastdownloadedfeedbacks_title'] = 'Último descarregamento de ficheiros de feedback';
$string['lastdownloadedfeedbacks_title_help'] = 'A data mostra o último descarregamento do utilizador de ficheiros de feedback.';
$string['nodownloadsyet'] = 'nenhum descarregamento';
$string['nosubmissionneweras'] = 'Nenhuma submissão efetuada após {$a}';
$string['notreuploadable_hint'] = 'Tenha em atenção que, se um dos tipos de feedback: \'Ficheiros de feedback\' ou \'Folha de avaliação offline\' estiver marcado, os ficheiros de descarregamento renomeados desta página já não podem voltar a ser carregados.';
$string['onlinetext_defaultfilename'] = 'Texto online';
$string['onlypdf'] = 'Configurações do PDF';
$string['optimum'] = 'Ótimo';
$string['pdf_assignment'] = 'Trabalho';
$string['pdf_availablefrom'] = 'Disponível desde';
$string['pdf_course'] = 'Disciplina';
$string['pdf_duedate'] = 'Data de fecho';
$string['pdf_group'] = 'Grupo';
$string['pdf_nogroup'] = 'Nenhum grupo';
$string['pdf_notactive'] = 'não ativado';
$string['pdf_view'] = 'Pré-visualização da impressão';
$string['perpage'] = 'Submissões por página';
$string['perpage_help'] = 'Define o número de submissões que são mostrados por página no PDF.
Escolha "Ótimo" para otimizar a distribuição das entradas da lista de acordo com o tamanho da letra escolhida e orientação da página, se houver muitos participantes inscritos na disciplina.';
$string['perpage_propertydefault'] = '100';
$string['perpage_propertydescription'] = 'Define o número de submissões que são exibidos por página, quando os professores estão a visualizar as submissões do trabalho.
<br>Pode ser alterado pelas preferências individuais do professor. O número será um valor absoluto.';
$string['perpage_propertyname'] = 'Predefinição - Submissões exibidos';
$string['pluginname'] = 'Exportar e renomear ficheiros de submissões';
$string['pluginname_print'] = 'Exportar';
$string['pluginname_submissions'] = 'Descarregar submissões renomeadas';
$string['printpreview'] = 'Exportar';
$string['printpreviewtabledownloaded'] = 'Tabela de exportação descarregada';
$string['printpreviewtabledownloaded_description'] = 'O utilizador com o ID {$a->userid} descarregou a tabela de exportação do trabalho do módulo da disciplina com ID {$a- contextinstanceid}.';
$string['printpreviewtableviewed'] = 'Tabela de exportação visualizada';
$string['printpreviewtableviewed_description'] = 'O utilizador com o ID {$a->userid} visualizou a tabela de exportação do trabalho do módulo da disciplina com ID {$a- contextinstanceid}.';
$string['printsettingstitle'] = 'Configurações da exportação';
$string['rename_propertydescription'] = 'Tags disponíveis: {$a}';
$string['show'] = 'Mostrar';
$string['show_propertydescription'] = 'Usado para mostrar ou ocultar a entrada do menu \'{$a->entrytoshow}\'';
$string['show_propertyname'] = 'Mostrar \'{$a->entrytoshow}\'';
$string['strallononepage'] = 'imprimir tudo numa página';
$string['strfilerenaming'] = 'Descarregar submissões';
$string['strlandscape'] = 'paisagem';
$string['strlarge'] = 'grande';
$string['strmedium'] = 'médio';
$string['stror'] = 'ou';
$string['strpageorientation'] = 'Orientação da página';
$string['strpapersizes'] = 'Tamanho do papel';
$string['strportrait'] = 'retrato';
$string['strprint'] = 'Descarregar ficheiro';
$string['strprintheader'] = 'Imprimir cabeçalho/rodapé';
$string['strprintheader_help'] = 'Se ativar esta opção, serão imprimidos o cabeçalho e o rodapé';
$string['strprintheaderlong'] = 'Imprimir cabeçalho e rodapé';
$string['strrefreshdata'] = 'Atualizar visualização dosdados';
$string['strsmall'] = 'pequeno';
$string['strtextsize'] = 'Tamanho da letra';
$string['submissionneweras'] = 'Submissão mais recente que';
$string['submissionneweras_help'] = 'Se ativar esta opção, apenas serão descarregados os ficheiros que foram modificados após a data/hora definida. Se um tipo de submissão não tem carimbo de data/hora (Texto online), será usada a data/hora da submissão.';
$string['submissions'] = 'Submissões';
$string['userfilter'] = 'Filtro de utilizador';
$string['viewprintpreviewtable'] = 'Visualizar a tabela de exportação da submissão.';
