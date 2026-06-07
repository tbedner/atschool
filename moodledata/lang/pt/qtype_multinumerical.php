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
 * Strings for component 'qtype_multinumerical', language 'pt', version '4.4'.
 *
 * @package     qtype_multinumerical
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answer'] = 'A sua resposta: {$a}';
$string['badfeedbackperconditionsyntax'] = 'Cada linha deve ter o seguinte formato: &quot;Feedback se a condição for verdadeira | Feedback se a condição for falsa&quot;';
$string['badnumfeedbackperconditions'] = 'O número de feedbacks por restrição não pode ser maior que o número de restrições';
$string['binarygrade'] = 'Cálculo da nota';
$string['conditionnotverified'] = 'Restrição não verificada';
$string['conditions'] = 'Restrições';
$string['conditionverified'] = 'Restrição verificada';
$string['displaycalc'] = 'Mostrar resultado do cálculo';
$string['feedbackperconditions'] = 'Feedback por restrição';
$string['gradebinary'] = 'Tudo ou nada';
$string['gradefractional'] = 'Fracionária';
$string['helponquestionoptions'] = 'Para mais informações sobre este tipo de pergunta e o comportamento das opções a seguir, clique no botão de ajuda na parte superior deste formulário.';
$string['noncomputable'] = '(não computável automaticamente)';
$string['onlyforcalculations'] = 'Apenas para cálculos';
$string['parameters'] = 'Parâmetros';
$string['pleaseenterananswer'] = 'Insira uma resposta';
$string['pluginname'] = 'Multinumérica';
$string['pluginname_help'] = '<h2>Como funciona?</h2>
<p>Uma pergunta multinumérica permite pedir aos alunos uma resposta composta para vários parâmetros (numéricos).</p>
<p><strong>Exemplo:</strong> Calcule <span style="font-family:monospace">X</span> e <span style="font-family:monospace">Y</span> tal que </p>
<ul><li>X + Y &lt; 20</li><li>X * Y &gt; 35</li></ul>
<p>Existem <em>possivelmente</em> várias respostas corretas para esta pergunta, e qualquer resposta que satisfaça estas condições deve ser considerada correta.</p>
<p>Este tipo de pergunta permite definir os parâmetros que se pretende (neste caso, <span style="font-family:monospace">X</span> e <span style="font-family:monospace"> Y</span>) e as restrições a considerar.</p>
<h2>Utilização</h2>
<ul>
	<li>Insira uma lista de parâmetros separados por vírgula (neste exemplo: &quot;<span style="font-family:monospace">X,Y</span>&quot;).<br />
	<strong>Observação:</strong> as unidades podem ser inseridas após cada parâmetro:
	&quot;<span style="font-family:monospace">X [m],Y [h]</span>&quot; (tem de haver um espaço em branco entre o parâmetro e a respetiva unidade).</li>
	<li>Digite as restrições, uma por linha (neste exemplo): <pre>X + Y &lt; 20
X * Y &gt; 35</pre>(linhas em branco serão ignoradas)
    <p>Operadores disponíveis: <ul>
        <li>&quot;<span style="font-family:monospace">=</span>&quot; (igual)</li>
        <li>&quot;<span style="font-family:monospace">&lt;</span>&quot; (menor que)</li>
        <li>&quot;<span style="font-family:monospace">&lt;=</span>&quot; (menor ou igual)</li>
        <li>&quot;<span style="font-family:monospace">&gt;</span>&quot; (maior que)</li>
        <li>&quot;<span style="font-family:monospace">&gt;=</span>&quot; (maior ou igual)</li>
        <li>intervalos:
            <pre><span style="font-family:monospace">X = [1;5]</span></pre> (fechado)
            <pre><span style="font-family:monospace">X = ]1;5[</span></pre> (aberto)
        </li>
    </ul></p></li>
	<li>Pode indicar um feedback por cada restrição. Neste exemplo, podia ser:
    <pre>Correto: X + Y &lt; 20 | Incorreto: X + Y &gt;= 20 !
Correto: X * Y &gt; 35 | Incorreto: X * Y &lt;= 35 !</pre>
    </li>
    <li>Se &quot;Mostrar resultado do cálculo&quot; estiver ativado, o feedback exibirá uma avaliação numérica de cada uma das restrições.
     Só é mostrado se o feedback para esta restrição não estiver em branco.<br />
     Se &quot;Apenas para cálculos&quot; estiver ativado, não será mostrado para restrições não calculadas (exemplo: <span style="font-family:monospace">X&nbsp;>&nbsp;5</span>), de modo a não fornecer a resposta ao aluno.</li>
    <li>A opção &quot;Cálculo da nota&quot; define se uma resposta parcialmente correta gera, ou não, uma fração da nota ou se a nota é zero.</li>
</ul>';
$string['pluginname_link'] = 'question/type/multinumerical';
$string['pluginnameadding'] = 'A adicionar uma pergunta Multinumérica';
$string['pluginnameediting'] = 'A editar uma pergunta Multinumérica';
$string['pluginnamesummary'] = 'Permite criar uma pergunta que poder ter várias respostas corretas, determinadas por equações ou inequações.';
$string['privacy:metadata'] = 'O módulo Tipo de pergunta Multinumérica não armazena quaisquer dados pessoais.';
$string['qtypeoptions'] = 'Opções específicas do tipo de pergunta Multinumérica';
$string['usecolorforfeedback'] = 'Usar cores para feedback por restrição';
