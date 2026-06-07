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
 * Strings for component 'qtype_varnumeric', language 'pt', version '4.4'.
 *
 * @package     qtype_varnumeric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['combinedcontrolnamevarnumeric'] = 'entrada numérica';
$string['err_notavalidnumberinanswer'] = 'Tem de inserir um número válido no campo de resposta.';
$string['err_notavalidnumberinerrortolerance'] = 'Inseriu um número inválido no campo de resposta errada';
$string['pluginname'] = 'Variável numérica';
$string['pluginname_help'] = 'Em resposta a uma pergunta, o aluno digita um número.

Os números usados na pergunta e usados para calcular a resposta são rapidamente calculados a partir de expressões matemáticas ou variáveis pré-definidas.

Todas as expressões são rapidamente calculadas e os valores das funções aleatórias são diferentes para todos os utilizadores. Para uma pergunta com valores definidos para um número de \'variantes\' da pergunta, com expressões pré-calculadas e com valores aleatórios iguais para cada utilizador, consulte o tipo de pergunta \'Conjunto de variáveis numéricas\'.';
$string['pluginname_link'] = 'question/type/varnumeric';
$string['pluginnameadding'] = 'A adicionar uma pergunta de Variável numérica';
$string['pluginnameediting'] = 'A editar uma pergunta de Variável numérica';
$string['pluginnamesummary'] = 'Permite uma resposta numérica, as expressões são avaliadas em tempo real e a expressão avaliada é comparada com a resposta do aluno';
$string['privacy:metadata'] = 'O módulo Variável numéricas não armazena dados pessoais.';
$string['scinotation'] = 'Notação científica';
$string['value'] = 'Valor';
$string['value_help'] = 'Insira os valores para \'Variáveis predefinidas\' ou serão mostrados aqui os valores calculados para uma \'Variável calculada\'.

Tenha em atenção que, para um valor calculado, o valor que é mostrado será diferente para cada utilizador.';
