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
 * Strings for component 'local_qeupgradehelper', language 'pt', version '4.4'.
 *
 * @package     local_qeupgradehelper
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Ação';
$string['alreadydone'] = 'Já foi tudo convertido';
$string['areyousure'] = 'Tem a certeza?';
$string['areyousuremessage'] = 'Deseja continuar a atualizar todas as {$a->numtoconvert} tentativas do teste \'{$a->name}\' na disciplina {$a->shortname}?';
$string['areyousureresetmessage'] = 'O teste \'{$a->name}\' na disciplina {$a->shortname} tem {$a->totalattempts} tentativas, das quais {$a->convertedattempts} foram atualizadas a partir do velho sistema. Dessas, {$a->resettableattempts} podem ser redefinidos, para posterior reconversão. Deseja continuar?';
$string['attemptstoconvert'] = 'Tentativas que necessitam de conversão';
$string['backtoindex'] = 'Voltar para a página principal';
$string['conversioncomplete'] = 'Conversão concluída';
$string['convertattempts'] = 'Tentativas de conversão';
$string['convertedattempts'] = 'Tentativas convertidas';
$string['convertquiz'] = 'Converter tentativas...';
$string['cronenabled'] = 'Cron ativo';
$string['croninstructions'] = 'Pode ativar o cron para completar automaticamente a atualização a partir de uma atualização parcial. O Cron será executado no horário definido para aquele dia (de acordo com a hora do servidor local). Cada vez que o cron corre, irá processar uma série de tentativas até usar todo o tempo disponível, e irá parar quando correr o próximo cron. Mesmo que tenha configurado, este não irá fazer nada até detetar que todas as atualizações para a versão 2.1 estejam completas.';
$string['cronprocesingtime'] = 'A processar o tempo a cada execução do cron';
$string['cronsetup'] = 'Configure o cron';
$string['cronsetup_desc'] = 'Pode configurar o cron para concluir automaticamente a atualização dos dados das tentativas do teste.';
$string['cronstarthour'] = 'Hora de início';
$string['cronstophour'] = 'Hora de fim';
$string['extracttestcase'] = 'Extrair caso de teste';
$string['extracttestcase_desc'] = 'Use dados exemplo a partir da base de dados para ajudar a criar testes da unidade que podem ser usados para testar a atualização.';
$string['gotoindex'] = 'Voltar à lista de Testes que podem ser atualizados';
$string['gotoquizreport'] = 'Aceda aos relatórios para este teste para verificar a atualização';
$string['gotoresetlink'] = 'Voltar à lista de Testes que podem ser reiniciados';
$string['includedintheupgrade'] = 'Incluídos na atualização?';
$string['invalidquizid'] = 'ID do teste inválida. Ou o teste não existe ou não existem tentativas para converter.';
$string['listpreupgrade'] = 'Lista de testes e tentativas';
$string['listpreupgrade_desc'] = 'Esta opção irá mostrar um relatório de todos os testes no sistema e quantas tentativas eles têm. Isto dá-lhe a indicação da atualização que necessita de fazer.';
$string['listpreupgradeintro'] = 'Estes são os números das tentativas do teste que necessitarão de ser processadas quando atualizar o seu site. Até poucas dezenas de milhares não há problema. Se for muito além disso deverá refletir sobre quanto tempo a atualização irá demorar.';
$string['listtodo'] = 'Lista de testes ainda por atualizar';
$string['listtodo_desc'] = 'Esta opção irá mostrar um relatório de todos os testes no sistema (se houver) que as tentativas ainda precisam de ser atualizadas para os novos tipos de perguntas.';
$string['listtodointro'] = 'Estes são todos os testes com tentativas que ainda precisam de ser convertidos. Pode converter as tentativas clicando no link.';
$string['listupgraded'] = 'Lista de testes já atualizados e que podem ser reiniciados';
$string['listupgraded_desc'] = 'Esta opção irá mostrar um relatório de todos os testes no sistema cujas tentativas foram atualizadas, e onde os dados antigos ainda se encontram para poderem ser reiniciados e refeitos.';
$string['listupgradedintro'] = 'Esta opção irá mostrar um relatório de todos os testes no sistema cujas tentativas foram atualizadas, e onde os dados antigos ainda se encontram para poderem ser reiniciados e refeitos.';
$string['noquizattempts'] = 'O seu site não tem quaisquer tentativas de resposta ao teste!';
$string['nothingupgradedyet'] = 'Nenhuma tentativa atualizada que possa ser reiniciada';
$string['notupgradedsiterequired'] = 'Este script só pode funcionar antes do site ter sido atualizado';
$string['numberofattempts'] = 'Número de tentativas do teste';
$string['oldsitedetected'] = 'Este parece ser um site que ainda não foi atualizado para incluir o novo gestor de perguntas.';
$string['outof'] = '{$a->some} em {$a->total}';
$string['pluginname'] = 'Ajudante de atualização do mecanismo de perguntas';
$string['pretendupgrade'] = 'Fazer um dry-run das tentativas atualizadas';
$string['pretendupgrade_desc'] = 'A atualização faz três coisas: Transfere os dados existentes da base de dados; transforma-os; e depois escreve os novos dados na BD. Este script testa as primeiras duas partes do processo.';
$string['questionsessions'] = 'Sessões de pergunta';
$string['quizid'] = 'ID do Teste';
$string['quizupgrade'] = 'Estado de atualização do teste';
$string['quizzesthatcanbereset'] = 'Os testes que se seguem converteram tentativas que poderá conseguir reiniciar';
$string['quizzestobeupgraded'] = 'Todos os testes com tentativas';
$string['quizzeswithunconverted'] = 'Os testes que se seguem têm tentativas que necessitam de ser convertidas';
$string['resetcomplete'] = 'Reiniciação completa';
$string['resetquiz'] = 'Reiniciar tentativas...';
$string['resettingquizattempts'] = 'Reiniciar tentativas do teste';
$string['resettingquizattemptsprogress'] = 'Reiniciar tentativa {$a->done} / {$a->outof}';
$string['upgradedsitedetected'] = 'Este site aparenta ter sido atualizado para incluir o novo mecanismo de perguntas.';
$string['upgradedsiterequired'] = 'Este script só funcionará após atualização do site.';
$string['upgradingquizattempts'] = 'A atualizar as tentativas para do teste \'{$a->name}\' na disciplina {$a->shortname}';
$string['veryoldattemtps'] = 'O seu site tem {$a} tentativas de testes que nunca foram completamente atualizadas durante a atualização do Moodle 1.4 para o Moodle 1.5. Estas tentativas serão tratadas antes da atualização principal. Tem de considerar o tempo extra necessário para esta ação.';
