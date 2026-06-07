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
 * Strings for component 'profilefield_conditional', language 'pt', version '4.4'.
 *
 * @package     profilefield_conditional
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apply'] = 'OK';
$string['conditionalhelp'] = 'Como inserir as opções?';
$string['conditionalhelp_help'] = 'Especifique as opções do menu digitando uma opção por linha. Depois pode especificar quais campos devem estar ocultos ou quais são obrigatórios quando cada opção é selecionada.';
$string['configurecondition'] = 'Configurar condições';
$string['donationalert'] = '<p>Caro administrador,</p>
<p>Fico muito feliz por saber que este módulo lhe foi útil.
Mantive-o gratuito para que todos possam beneficiar dele. Para manter isso, sempre ofereci uma opção de doação voluntária para aqueles que a considerassem valiosa.
No entanto, após {$a->years} anos, o apoio total recebido tem sido mínimo (apenas {$a->donations} donativos até ao lançamento desta versão). Embora esteja feliz por ser útil, torna-se difícil justificar a priorização de atualizações sem o apoio da comunidade.
</p>
<p>Pode mudar isso:
<ul>
<li>Um pequeno donativo ajuda-me a dedicar mais tempo a este projeto.</li>
<li>Garante atualizações mais rápidas e novas funcionalidades.</li>
<li>Mantém o módulo gratuito para todos.</li>
</ul>
</p>
<p><i>(Esta mensagem é visível apenas para si, não para os utilizadores finais.)</i></p>
<p>Se este módulo lhe poupar tempo, considere apoiar o seu futuro.</p>
<p><a href="{$a->donationlink}" target="_blank">Clique aqui para fazer um donativo!</a></p>
<p>Obrigado por fazer parte desta viagem.</p>';
$string['emptycondition'] = 'É necessário configurar as condições da opção.';
$string['extradata'] = 'Os dados enviados contêm valores para campos que devem ser deixados em branco com base na opção selecionada aqui.';
$string['hidden'] = 'Oculto';
$string['hiddenandcleared'] = 'Oculto e limpo';
$string['hiddeninitially'] = 'Inicialmente oculto';
$string['hiddeninitially_help'] = '* Sim - nenhum dos campos que podem estar ocultos em algumas condições são mostrados de início. Alguns dos novos campos podem aparecer depois que os utilizadores fizerem uma escolha.
* Não - todos os campos serão mostrados aos utilizadores no início. Quando selecionam um valor para o campo condicional, alguns dos campos existentes ficam ocultos.';
$string['hiddenrequired'] = 'Existe pelo menos um campo que foi definido como oculto no entanto é um campo obrigatório!';
$string['menuoption'] = 'Opção do menu';
$string['notaprofilefield'] = 'Alguns campos referidos na configuração da condição não existem. Verifique as condições. Lembre-se de pressionar "OK" se a configuração lhe parecer correta.';
$string['notice'] = '<p><strong>Aviso:</strong> múltiplos campos condicionais podem causar conflitos. Campos obrigatório ocultos podem impedir que o formulário seja submetido. Como forma de evitar, verifique que os utilizadores não ficam numa situação em que, ao mesmo tempo, um campo é exigido por um campo condicional e oculto por outro campo condicional.</p><p><strong>Nota:</strong> "Oculto e limpo" é um recurso experimental. Ele não foi testado com todos os tipos de campo, por isso, verifique se funciona com o tipo de campo que pretende usar.</p>';
$string['optionconditionmismatch'] = 'Foram feitas algumas modificações nas opções do menu após a última vez que configurou as condições da opção. Verifique se as suas condições estão atualizadas.';
$string['pluginname'] = 'Campo condicional';
$string['required'] = 'Obrigatório';
$string['requiredbycondition1'] = 'Este campo não pode ficar em branco quando "{$a->field1}" é "{$a->value1}".';
$string['requiredbycondition2'] = 'Por favor, preencha o campo "{$a->field2}". Baseado no valor selecionado aqui, não pode ser deixado em branco.';
