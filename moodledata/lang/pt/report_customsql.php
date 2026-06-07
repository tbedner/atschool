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
 * Strings for component 'report_customsql', language 'pt', version '4.4'.
 *
 * @package     report_customsql
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategory'] = 'Adicionar nova categoria';
$string['addcategorydesc'] = 'Para alterar a categoria de um relatório, deve editar o relatório que pretende. Pode editar textos da categoria, apagar uma categoria ou adicionar uma nova categoria.';
$string['addreport'] = 'Adicionar nova consulta';
$string['addreportcategory'] = 'Adicionar uma nova categoria para os relatórios';
$string['anyonewhocanveiwthisreport'] = 'Qualquer utilizador que possa visualizar este relatório (report/customsql:view)';
$string['archivedversions'] = 'Versões arquivadas desta consulta';
$string['at'] = 'às ';
$string['automaticallydaily'] = 'Programada, diariamente';
$string['automaticallymonthly'] = 'Programada, no primeiro dia de cada mês';
$string['automaticallyweekly'] = 'Programada, no primeiro dia de cada semana';
$string['availablereports'] = 'Consultas sob pedido';
$string['availableto'] = 'Disponível para "{$a}".';
$string['backtoreportlist'] = 'Voltar à lista das consultas';
$string['category'] = 'Categoria';
$string['categorycontent'] = '({$a->manual} sob pedido, {$a->daily} diariamente, {$a->weekly} semanalmente, {$a->monthly} mensalmente)';
$string['categoryexists'] = 'Os nomes das categorias devem ser exclusivos. Este nome já existe.';
$string['categorynamex'] = 'Nome da categoria: {$a}';
$string['changetheparameters'] = 'Alterar os parâmetros';
$string['crontask'] = 'Consultas ad hoc à base de dados: executar tarefa de relatórios agendados';
$string['customdir'] = 'Exportar relatório CSV para o caminho/diretoria';
$string['customdir_help'] = 'Os ficheiros são exportados no formato CSV para o destino especificado. Se for indicado uma diretoria, o formato do nome do ficheiro será id_do_relatório-data_criação.csv.';
$string['customdirmustexist'] = 'A diretoria "{$a}" não existe.';
$string['customdirnotadirectory'] = 'O caminho "{$a}" não existe.';
$string['customdirnotwritable'] = 'A diretoria "{$a}" é só de leitura.';
$string['customsql:definequeries'] = 'Definir consultas personalizadas';
$string['customsql:managecategories'] = 'Definir categorias personalizadas';
$string['customsql:view'] = 'Visualizar relatórios de consultas personalizadas';
$string['dailyheader'] = 'Diariamente';
$string['dailyheader_help'] = 'Estas consultas são executadas automaticamente todos os dias no horário especificado. Estas hiperligações permitem que visualize os resultados acumulados.';
$string['defaultcategory'] = 'Diversos';
$string['delete'] = 'Apagar';
$string['deleteareyousure'] = 'Tem a certeza de que pretende apagar esta consulta?';
$string['deletecategoryareyousure'] = '<p>Tem a certeza de que pretende apagar esta categoria?</p><p>Para apagar, não pode conter qualquer consulta.</p>';
$string['deletecategoryx'] = 'Apagar a categoria \'{$a}\'';
$string['deletecategoryyesno'] = '<p>Tem a certeza de que pretende apagar esta categoria?</p>';
$string['deletereportx'] = 'Apagar a consulta \'{$a}\'';
$string['description'] = 'Descrição';
$string['displayname'] = 'Nome da consulta';
$string['displaynamerequired'] = 'Tem de indicar um nome para a consulta';
$string['displaynamex'] = 'Nome da consulta: {$a}';
$string['downloadthisreportas'] = 'Descarregar os resultados como';
$string['downloadthisreportascsv'] = 'Descarregar os resultados como CSV';
$string['edit'] = 'Adicionar/Editar';
$string['editcategory'] = 'Atualizar categoria';
$string['editcategoryx'] = 'Editar a categoria \'{$a}\'';
$string['editingareport'] = 'A editar consulta ad hoc à base de dados';
$string['editreportx'] = 'Editar a consulta \'{$a}\'';
$string['emailbody'] = 'Caro/a {$a}';
$string['emailink'] = 'Para aceder ao relatório, clique nesta hiperligação: {$a}';
$string['emailnumberofrows'] = 'Apenas o número de linhas e a hiperligação';
$string['emailresults'] = 'Colocar os resultados na mensagem do e-mail';
$string['emailrow'] = 'O relatório retornou {$a} linha.';
$string['emailrows'] = 'O relatório retornou {$a} linhas.';
$string['emailsent'] = 'Foi enviada uma notificação por e-mail para {$a}';
$string['emailsentfailed'] = 'Não foi possível enviar o e-mail para {$a}';
$string['emailsubject'] = 'Consulta \'{$a}\'';
$string['emailsubject1row'] = 'Consulta \'{$a}\' [1 linha]';
$string['emailsubjectnodata'] = 'Consulta \'{$a}\' [sem resultados]';
$string['emailsubjectxrows'] = 'Consulta {$a->name} [{$a->rows} linhas]';
$string['emailto'] = 'Enviar e-mail automaticamente para';
$string['emailwhat'] = 'Conteúdo do e-mail';
$string['enterparameters'] = 'Indique os parâmetros para a consulta ad hoc à base de dados';
$string['errordeletingcategory'] = '<p>Erro ao apagar uma categoria de consultas.</p><p>Deve estar vazia para apagá-la.</p>';
$string['errordeletingreport'] = 'Erro ao apagar uma consulta.';
$string['errorinsertingreport'] = 'Erro ao inserir uma consulta.';
$string['errorupdatingreport'] = 'Erro ao utilizar uma consulta.';
$string['invalidreportid'] = 'ID de consulta inválido {$a}.';
$string['lastexecuted'] = 'Esta consulta foi executada pela última vez \'{$a->lastrun}\'. Demorou {$a->lastexecutiontime} segundos a executar.';
$string['managecategories'] = 'Gerir categorias de relatórios';
$string['manual'] = 'Sob pedido';
$string['manualheader'] = 'Consultas sob pedido';
$string['manualheader_help'] = 'Estas consultas são executadas sob pedido após clicar na hiperligação para visualizar os resultados.';
$string['messageprovider:notification'] = 'Notificações de consulta ad hoc à base de dados';
$string['monthlyheader'] = 'Mensalmente';
$string['monthlyheader_help'] = 'Estas consultas são executadas automaticamente no primeiro dia de cada mês, para informações do mês anterior. Estas hiperligações permitem que visualize os resultados acumulados.';
$string['monthlynote_help'] = 'Estas consultas são executadas automaticamente no primeiro dia de cada mês, para informações do mês anterior. Estas hiperligações permitem que visualize os resultados acumulados.';
$string['morethanonerowreturned'] = 'O resultado retornou mais do que uma linha. Esta consulta deve retornar apenas uma linha.';
$string['nodatareturned'] = 'Esta consulta não retornou qualquer dado.';
$string['noexplicitprefix'] = 'Faça por incluir o prefixo do nome da tabela <code>{$a}</code> no SQL. Como alternativa, coloque o nome da tabela sem prefixo dentro dos caracteres <code>{}</code>.';
$string['noreportsavailable'] = 'Nenhuma consulta disponível';
$string['norowsreturned'] = 'Nenhuma linha foi devolvida. Esta consulta deve retornar uma linha.';
$string['noscheduleifplaceholders'] = 'As consultas que contenham marcadores de posição (espaços reservados) só podem ser executadas sob pedido.';
$string['nosemicolon'] = 'Não tem permissão para usar o carácter ";" no SQL.';
$string['notallowedwords'] = 'Não tem permissão para usar as palavras <code>{$a}</code> no SQL.';
$string['note'] = 'Observações';
$string['notrunyet'] = 'Esta consulta ainda não foi executada.';
$string['onerow'] = 'A consulta retorna uma linha e acumula os resultados uma linha de cada vez';
$string['parametervalue'] = '{$a->name}: {$a->value}';
$string['pluginname'] = 'Consultas à base de dados';
$string['privacy:metadata'] = 'O módulo Consultas à base de dados não armazena quaisquer dados pessoais.';
$string['query_deleted'] = 'Consulta apagada';
$string['query_edited'] = 'Consulta editada';
$string['query_viewed'] = 'Consulta visualizada';
$string['queryfailed'] = 'Erro ao executar a consulta: {$a}';
$string['querylimit'] = 'Máximo de linhas a retornar';
$string['querylimitdefault'] = 'Número máximo de linhas a retornar por predefinição';
$string['querylimitdefault_desc'] = 'Para evitar erros quando uma consulta retorna um grande número de linhas que podem sobrecarregar o servidor, cada consulta só pode retornar um número de linhas limitado. Este é o valor predefinido deste limite para novas consultas.';
$string['querylimitmaximum'] = 'Limite máximo permitido de linhas a retornar';
$string['querylimitmaximum_desc'] = 'Limite máximo absoluto de linhas a retornar que um autor de uma consulta pode definir.';
$string['querylimitrange'] = 'O número deve estar entre 1 e {$a}';
$string['querynote'] = '<ul>
<li>O token <tt>%%WWWROOT%%</tt> nos resultados será substituído por <tt>{$a}</tt>.</li>
<li>Qualquer valor na saída que se pareça com um URL será automaticamente convertido numa hiperligação.</li>
<li>Se um nome de coluna nos resultados terminar com os caracteres <tt>data</tt> e a coluna contém valores inteiros, serão tratados como marcadores de tempo Unix e serão automaticamente convertidos em datas legíveis por humanos.</li>
<li>O token <tt>%%USERID%%</tt> na consulta será substituído pelo ID do utilizador que visualiza o relatório antes do relatório ser executado.</li>
<li>Para relatórios agendados, os tokens <tt>%%STARTTIME%%</tt> e <tt>%%ENDTIME%%</tt> são substituídos na consulta pelo marcador de tempo Unix no início e no final do relatório da semana/mês antes de ser executado.</li>
<li>Pode colocar parâmetros no SQL usando marcadores de posição (espaços reservados) nomeados, por exemplo <tt>:parameter_name</tt>. Quando o relatório é executado, o utilizador pode inserir valores para os parâmetros a serem usados ao executar a consulta.</li>
<li>Se o <tt>:parameter_name </tt> iniciar ou terminar com os caracteres <tt>data</tt>, um seletor data-hora será usado para inserir o valor, caso contrário, será usada uma caixa de texto simples</li>
<li>Não pode usar os caracteres <tt>:</tt>, <tt>;</tt> ou <tt>?</tt> em cadeias de caracteres da consulta. Se necessário, pode usar os tokens <tt>%%C%%</tt>, <tt>%%S%%</tt> e <tt>%%Q%%</tt> respetivamente. </li>
</ul>';
$string['queryparameters'] = 'Parâmetros da consulta';
$string['queryparams'] = 'Digite os valores predefinidos dos parâmetros da consulta.';
$string['queryparamschanged'] = 'Os espaços reservados na consulta mudaram.';
$string['queryrundate'] = 'data de execução da consulta';
$string['querysql'] = 'Consulta SQL';
$string['querysqlrequried'] = 'Tem de inserir uma instrução SQL.';
$string['recordcount'] = 'Este relatório tem {$a} linhas.';
$string['recordlimitreached'] = 'Esta consulta atingiu o limite de {$a} linhas. Algumas linhas podem ter sido omitidas do final.';
$string['reportfor'] = 'Consulta executada {$a}';
$string['requireint'] = 'Obrigatório número inteiro';
$string['runable'] = 'Modo de execução da consulta';
$string['runablex'] = 'Executar: {$a}';
$string['runquery'] = 'Executar consulta';
$string['schedulednote'] = 'Estas consultas são executadas automaticamente no primeiro dia de cada semana ou mês, para informações da semana ou mês anterior. Estas hiperligações permitem que visualize os resultados acumulados.';
$string['scheduledqueries'] = 'Consultas agendadas';
$string['startofweek'] = 'Dia para gerar relatórios semanais';
$string['startofweek_default'] = 'Início da semana do calendário do site ({$a})';
$string['startofweek_desc'] = 'Dia que deve ser considerado o primeiro dia da semana, para os relatórios agendados para execução semanal.';
$string['timecreated'] = '<span class="font-weight-bold">Criado:</span> {$a}';
$string['timemodified'] = '<span class="font-weight-bold">Última modificação:</span> {$a}';
$string['typeofresult'] = 'Tipo de resultado';
$string['unknowndownloadfile'] = 'Ficheiro de descarga desconhecido.';
$string['userhasnothiscapability'] = 'O utilizador \'{$a->username}\' ({$a->userid}) não tem a permissão \'{$a->capability}\'. Elimine o utilizador da lista ou altere a opção em \'{$a->whocanaccess}\'.';
$string['userinvalidinput'] = 'Entrada inválida. É necessário uma lista de nomes de utilizadores separados por vírgulas';
$string['usermodified'] = '<span class="font-weight-bold">Modificado por:</span> {$a}';
$string['usernotfound'] = 'Não existe o utilizador com o ID \'{$a}\'';
$string['userswhocanconfig'] = 'Apenas os administradores (moodle/site:config)';
$string['userswhocanviewsitereports'] = 'Utilizadores que podem ver relatórios do sistema (moodle/site:viewreports)';
$string['verifyqueryandupdate'] = 'Verifique o texto da consulta SQL e atualize o formulário';
$string['weeklyheader'] = 'Semanalmente';
$string['weeklyheader_help'] = 'Estas consultas são executadas automaticamente no primeiro dia de cada semana, para informações da semana anterior. Estas hiperligações permitem que visualize os resultados acumulados.';
$string['whocanaccess'] = 'Quem pode aceder a esta consulta';
