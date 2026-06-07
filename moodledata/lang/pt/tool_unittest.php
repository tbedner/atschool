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
 * Strings for component 'tool_unittest', language 'pt', version '4.4'.
 *
 * @package     tool_unittest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addconfigprefix'] = 'Adicionar prefixo ao ficheiro de config';
$string['all'] = 'TODOS';
$string['codecoverageanalysis'] = 'Realizar a análise de cobertura de código.';
$string['codecoveragecompletereport'] = '(ver relatório de cobertura de código completo)';
$string['codecoveragedisabled'] = 'Não é possível ativar a cobertura de código neste servidor (falta a extensão xdebug).';
$string['codecoveragelatestdetails'] = '(em {$a->date},com {$a->files} ficheiros, {$a->percentage} de cobertura)';
$string['codecoveragelatestreport'] = 'Ver o mais recente relatório de cobertura de código completo';
$string['confignonwritable'] = 'O ficheiro config.php não é editável através do servidor.Altere as suas permissões, ou edite-o com a conta de utilizador apropriada e adicione a seguinte linha antes do fim da tag php: <br />
$CFG->unittestprefix = \'tst_\' // Change tst_ to a prefix of your choice, different from $CFG->prefix';
$string['coveredlines'] = 'Linhas cobertas';
$string['coveredpercentage'] = 'Cobertura de código geral';
$string['dbtest'] = 'Testes funcionais da BD';
$string['deletingnoninsertedrecord'] = 'Tente apagar um registo que não tenha sido inserido por estes testes de unidade (id {$a->id} na tabela {$a->table}).';
$string['deletingnoninsertedrecords'] = 'Tente apagar registos que não tenham sido inseridos por estes testes de unidade (da tabela {$a->table}).';
$string['droptesttables'] = 'Baixar tabelas de testes';
$string['exception'] = 'Exceção';
$string['executablelines'] = 'Linhas executáveis';
$string['fail'] = 'Falhou';
$string['ignorefile'] = 'Ignorar testes no ficheiro';
$string['ignorethisfile'] = 'Recomeçar os testes ignorando este ficheiro.';
$string['installtesttables'] = 'Tabelas de testes instáveis';
$string['moodleunittests'] = 'Testes de unidade do Moodle: {$a}';
$string['notice'] = 'Notificação';
$string['onlytest'] = 'Correr apenas testes em';
$string['othertestpages'] = 'Outras páginas de testes';
$string['pass'] = 'Passar';
$string['pathdoesnotexist'] = 'O caminho \'{$a}\' já não existe.';
$string['pluginname'] = 'Testes de unidade';
$string['prefix'] = 'Tabelas de teste de unidade de prefixo';
$string['prefixnotset'] = 'O prefixo da tabela da base de dados não está configurado. Preencha e envie este formulário para o  adicionar ao config.php.';
$string['reinstalltesttables'] = 'Reinstalar tabelas de testes';
$string['retest'] = 'Re-executar os testes';
$string['retestonlythisfile'] = 'Re-executar apenas este ficheiro de teste';
$string['runall'] = 'Executar os testes de todos os ficheiros de teste.';
$string['runat'] = 'Executar em {$a}.';
$string['runonlyfile'] = 'Executar apenas os testes neste ficheiro.';
$string['runonlyfolder'] = 'Executar apenas os testes nesta pasta';
$string['runtests'] = 'Executar testes';
$string['rununittests'] = 'Executar testes de unidade';
$string['showpasses'] = 'Mostrar sucessos, assim como falhas.';
$string['showsearch'] = 'Mostram a procura de ficheiros de teste';
$string['skip'] = 'Passar';
$string['stacktrace'] = 'Stack trace:';
$string['summary'] = '{$a->run}/{$a->total} casos de teste completos: <strong>{$a->passes}</strong> sucessos, <strong>{$a->fails}</strong> falhas e <strong>{$a->exceptions}</strong> exceções.';
$string['tablesnotsetup'] = 'As tabelas de teste de unidade ainda não estão construídas. Quer construí-las agora?.';
$string['testdboperations'] = 'Testar operações da base de dados';
$string['testtablescsvfileunwritable'] = 'O ficheiro de testes das tabelas CSV não é editável ({$a->filename})';
$string['testtablesneedupgrade'] = 'As tabelas de teste da BS necessitam de ser atualizadas. Deseja proceder a essa atualização agora?';
$string['testtablesok'] = 'As tabelas de testes da BD foram instaladas com sucesso.';
$string['thorough'] = 'Executar um teste completo (pode demorar algum tempo).';
$string['timetakes'] = 'Tempo necessário: {$a}.';
$string['totallines'] = 'Total de linhas';
$string['uncaughtexception'] = 'Exceção não capturada [{$a->getMessage()}] em [{$a->getFile()}:{$a->getLine()}] TESTES CANCELADOS.';
$string['uncoveredlines'] = 'Linhas a descoberto';
$string['unittest:execute'] = 'Executar testes de unidade';
$string['unittestprefixsetting'] = 'Prefixo das unidades de teste: <strong>{$a->unittestprefix}</strong> (Edit config.php to modify this).';
$string['unittests'] = 'Testes de unidade';
$string['updatingnoninsertedrecord'] = 'Tentando atualizar um registro que não foi inserido por esses testes de unidade (id {$a->id} na tabela {$a->table}).';
$string['version'] = 'Usando <a href="http://sourceforge.net/projects/simpletest/">SimpleTest</a> versão {$a}.';
