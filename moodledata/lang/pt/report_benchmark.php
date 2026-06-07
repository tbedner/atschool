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
 * Strings for component 'report_benchmark', language 'pt', version '4.4'.
 *
 * @package     report_benchmark
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminreport'] = 'Benchmark do sistema';
$string['benchfail'] = '<b>Atenção!</b><br />O desempenho da instalação do seu Moodle não é o ideal.';
$string['benchmark'] = 'Benchmark';
$string['benchmark:view'] = 'Ver relatório do Benchmark';
$string['benchshare'] = 'Partilhar pontuação no fórum';
$string['benchsuccess'] = '<b>Parabéns!</b><br />O desempenho da instalação do seu Moodle parece perfeito.';
$string['cloadmoreinfo'] = 'Carrega o ficheiro de configuração "config.php"';
$string['cloadname'] = 'Tempo de carregamento do Moodle';
$string['coursereadmoreinfo'] = 'Lê uma disciplina várias vezes para verificar a velocidade de leitura da base de dados';
$string['coursereadname'] = 'Performance de leitura de disciplina';
$string['coursewritemoreinfo'] = 'Escreve uma disciplina várias vezes para verificar a velocidade de escrita da base de dados';
$string['coursewritename'] = 'Performance de escrita de disciplina';
$string['description'] = 'Descrição';
$string['duration'] = '{$a} segundos';
$string['during'] = 'Tempo (segundos)';
$string['filereadmoreinfo'] = 'Lê um ficheiro várias vezes para verificar a velocidade de leitura da pasta temporária do Moodle';
$string['filereadname'] = 'Performance de leitura';
$string['filewritemoreinfo'] = 'Escreve um ficheiro várias vezes para verificar a velocidade de escrita da pasta temporária do Moodle';
$string['filewritename'] = 'Performance de escrita';
$string['info'] = 'Este benchmark demorará menos de 1 minuto e parará aos 2 minutos. Por favor, aguarde até que surjam os resultados.';
$string['infoaverage'] = 'É recomendado que execute este teste várias vezes para obter um valor médio. Se o desempenho da sua instalação não for o ideal, encontrará algumas recomendações para melhorá-lo na <a href="https://docs.moodle.org/en/Performance_recommendations" target="_blank">Documentação do Moodle</a>.';
$string['infodisclaimer'] = 'Não é aconselhável executar este benchmark numa plataforma em produção, pois pode resultar na degradação significativa do desempenho.';
$string['infodisclamer'] = 'Não é aconselhável executar este benchmark numa plataforma em produção.';
$string['limit'] = 'Limite aceitável';
$string['loginguestmoreinfo'] = 'Verifica o tempo de carregamento da página de autenticação com a conta de visitante';
$string['loginguestname'] = 'Entrar com a conta de visitante';
$string['loginusermoreinfo'] = 'Verifica o tempo de carregamento da página de autenticação com uma conta de utilizador fictícia';
$string['loginusername'] = 'Entrar com uma conta de utilizador fictícia';
$string['modulename'] = 'Benchmark do Moodle';
$string['modulenameplural'] = 'Benchmarks do Moodle';
$string['notificatiopagedownloadmoreinfo'] = 'Carrega a página de notificação da interface de administração para verificar a velocidade do servidor web';
$string['notificatiopagedownloadname'] = 'Tempo de carregamento da página de notificação de administração';
$string['over'] = 'Limite crítico';
$string['pluginname'] = 'Benchmark do Moodle';
$string['points'] = '{$a} pontos';
$string['privacy:no_data_reason'] = 'O módulo Benchmark do Moodle não armazena dados em si. Apenas acede a dados de outros módulos.';
$string['processormoreinfo'] = 'Executa várias vezes uma função PHP para verificar a velocidade do processador';
$string['processorname'] = 'Velocidade de processamento do processador';
$string['querytype1moreinfo'] = 'Executa uma consulta SQL complexa para verificar a velocidade da base de dados';
$string['querytype1name'] = 'Desempenho da base de dados (#1)';
$string['querytype2moreinfo'] = 'Executa uma consulta SQL complexa para verificar a velocidade da base de dados';
$string['querytype2name'] = 'Desempenho da base de dados (#2)';
$string['redo'] = 'Executar o teste novamente';
$string['score'] = 'Pontuação';
$string['scoremsg'] = 'Pontuação do Benchmark:';
$string['seconde'] = '{$a} segundos';
$string['slowdatabaselabel'] = 'A base de dados parece ser muito lenta.';
$string['slowdatabasesolution'] = '<ul><li>Verifique a <a href="https://mariadb.com/kb/en/library/mysqlcheck/" target="_blank">integridade da base de dados</a>.</li><li>Otimize a <a href="https://mariadb.com/kb/en/library/optimization-and-tuning/" target="_blank">base de dados</a>.</li></ul>';
$string['slowharddrivelabel'] = 'O disco rígido parece ser muito lento.';
$string['slowharddrivesolution'] = '<ul><li>Verifique o estado do disco rígido e/ou da pasta temporária.</li><li>Troque o disco rígido ou a pasta temporária.</li></ul>';
$string['slowprocessorlabel'] = 'O processador parece ser muito lento.';
$string['slowprocessorsolution'] = '<ul><li>Verifique se o hardware é suficiente para executar o Moodle.</li></ul>';
$string['slowserverlabel'] = 'O servidor web parece ser muito lento.';
$string['slowserversolution'] = '<ul><li>Configure o Apache para o modo de <a href="https://httpd.apache.org/docs/2.4/en/mpm.html" target="_blank">multi-processamento</a> ou mude para <a href="https://nginx.org/" target="_blank">NGinx</a>.</li><li>
Se o Moodle está instalado no seu computador, pode tentar desativar o antivírus onde o Moodle está localizado. Faça-o com precaução.</li></ul>';
$string['slowweblabel'] = 'A página está a ser carregada muito lentamente.';
$string['slowwebsolution'] = '<ul><li><a href="/admin/purgecaches.php" target="_blank">Limpar caches do Moodle</a>.</li></ul>';
$string['start'] = 'Iniciar o benchmark';
$string['total'] = 'Tempo total';
