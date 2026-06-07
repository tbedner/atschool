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
 * Strings for component 'quizaccess_delayed', language 'pt', version '4.4'.
 *
 * @package     quizaccess_delayed
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attemptquiz'] = 'Responder ao teste agora';
$string['delayedattemptlock'] = 'Entrada gradual no teste';
$string['delayedattemptlock_help'] = 'Se ativar esta opção, ao entrar na página do teste antes da data/hora de início, o botão "Responder ao teste agora" estará desativado temporariamente.
É iniciado um temporizador (com duração aleatória até ao limite de tempo máximo configurado pelo administrador). Quando a contagem decrescente termina, o botão de responder ao teste é ativado e os alunos podem iniciar a tentativa de resposta ao teste.';
$string['explaindelayedattempt'] = 'Ativar atraso aleatório';
$string['flipdowncounter'] = 'Contador de cartões animados';
$string['noscriptwarning'] = 'Este teste requer um navegador que suporte JavaScript. Se está ativo algum bloqueador Javascript, é necessário desativá-lo.';
$string['plaintextcounter'] = 'Contador de texto simples';
$string['pleasewait'] = 'Por favor, aguarde aqui';
$string['pluginname'] = 'Entrada no teste com atraso aleatório';
$string['pluginname_desc'] = 'Ativar automaticamente o botão de "Responder ao teste" com regra de acesso com atraso aleatório';
$string['quizaccess_delayed_allowdisable'] = 'Os professores podem desativar a regra';
$string['quizaccess_delayed_countertype'] = 'Tipo de contador';
$string['quizaccess_delayed_dangerousquiznotice'] = 'Mensagem que é mostrada quando o teste pode vir a ser problemático';
$string['quizaccess_delayed_dangerousquiznotice_desc'] = 'Esta mensagem será exibida para os professores durante a configuração do teste, se o módulo determinar que os parâmetros podem vir a ser problemáticos. Este é um bom local para vincular manuais ou instruções para a criação de testes menos problemáticos.';
$string['quizaccess_delayed_enabled'] = 'Ativar a entrada com atraso aleatório';
$string['quizaccess_delayed_enabledbydefault'] = 'Os novos testes usarão esta regra por predefinição';
$string['quizaccess_delayed_maxdelay'] = 'Atraso máximo (minutos)';
$string['quizaccess_delayed_maxdelay_desc'] = 'Atraso máximo que qualquer aluno pode ter de esperar antes de poder iniciar o teste. O atraso real será um número aleatório entre 0 e <b>NO MÁXIMO</b> este valor.';
$string['quizaccess_delayed_notice'] = 'Aviso para os alunos';
$string['quizaccess_delayed_notice_desc'] = 'Este texto é mostrado a todos os alunos, além do texto que o professor usa como descrição da atividade. Foi idealizado para exibir uma mensagem institucional, geralmente relacionada a instruções sobre como usar os testes.';
$string['quizaccess_delayed_showdangerousquiznotice'] = 'Mostrar uma mensagem de advertência ao professor se o teste exige muitos recursos do servidor';
$string['quizaccess_delayed_sitewidecount'] = 'Utilizar a contagem de alunos em todo o site para o cálculo das taxas';
$string['quizaccess_delayed_sitewidecount_desc'] = 'Se ativar esta opção, a taxa de alunos que potencialmente iniciarão o teste será calculada com base em todos os testes que começarem ao mesmo tempo no site. Se estiver desativado, apenas os alunos inscritos na disciplina serão contabilizados.';
$string['quizaccess_delayed_startrate'] = 'Taxa de entrada (alunos por minuto)';
$string['quizaccess_delayed_startrate_desc'] = 'Número médio de alunos por minuto que os seus servidores conseguem processar para iniciar o teste. Um número baixo causará longos atrasos, mas reduzirá a carga no servidor. Um número elevado causará pequenos atrasos, mas poderá sobrecarregar o servidor se muitos alunos tentarem responder ao teste ao mesmo tempo. É necessário fazer uma análise comparativa do seu site.';
$string['quizaccess_delayed_teachernotice'] = 'Será aplicado um controlo de entrada gradual, que fará com que os alunos entrem com um atraso aleatório de, no máximo, {$a} minuto(s).';
$string['quizaccess_delayed_teachernotice2'] = 'Mensagem para o professor: Os seus alunos verão a seguinte mensagem enquanto esperam:';
$string['quizaccess_delayed_timelimitpercent'] = 'Atraso máximo como percentagem do tempo disponível para resposta';
$string['quizaccess_delayed_timelimitpercent_desc'] = 'Se o teste tiver um limite de tempo, esta definição será utilizada para calcular o atraso máximo como uma percentagem do limite de tempo. O atraso máximo real será o mínimo entre este valor e o valor definido em "Atraso máximo (minutos)". Isto permite definir um atraso máximo em relação ao limite de tempo do teste. Por exemplo, se definir este valor para 10% e o teste tiver um limite de tempo de 60 minutos, o atraso máximo será de 6 minutos. Se o teste não tiver limite de tempo, esta definição será ignorada.';
$string['quizwillstartinabout'] = 'A sua vez para responder ao teste começará aproximadamente dentro de';
$string['quizwillstartinless'] = 'A sua vez para responder ao teste começará em menos de um minuto';
$string['tooshortpagesadvice'] = 'Este teste tem {$a->pages} páginas demasiado curtas. Isto aumenta severamente a carga no servidor. Considere reservar mais tempo para cada página (como por exemplo, colocar mais perguntas)';
$string['tooshorttimeguardadvice'] = 'O tempo disponível de {$a->timespanstr} para responder ao teste poderá ser muito escasso. Tenha em atenção que alguns alunos terão um tempo de espera máximo de {$a->maxdelaystr} e têm {$a->timelimitstr} para responder ao teste. Por isso, é recomendado deixar uma margem de segurança para outros atrasos no início do teste.';
