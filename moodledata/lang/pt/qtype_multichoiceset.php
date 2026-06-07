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
 * Strings for component 'qtype_multichoiceset', language 'pt', version '4.4'.
 *
 * @package     qtype_multichoiceset
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['correctanswer'] = 'Correta';
$string['deletedchoice'] = 'Esta opção foi excluída após ter iniciado a tentativa.';
$string['errnocorrect'] = 'Pelo menos uma das opções deve ser definida como "Correta", de modo a que seja possível obter a nota máxima da pergunta.';
$string['pluginname'] = 'Escolha múltipla Tudo-ou-Nada';
$string['pluginname_help'] = 'Para cada pergunta, o utilizador pode escolher uma ou mais respostas. Se as respostas escolhidas correspondem exatamente às opções definidas na pergunta como "Correta", o utilizador obtém a nota máxima predefinida (100%). Se escolher qualquer opção "Incorreta" ou se não selecionar todas as opções "Correta", a nota é de 0%. Para cada pergunta, pelo menos uma opção deve ser definida como "Correta". Deve adicionar a opção "Nenhuma das opções" para lidar com a situação em que nenhuma das outras opções está correta. Ao contrário da pergunta de escolha múltipla, que pode ter uma nota fracionada, as únicas notas possíveis para uma pergunta de Escolha múltipla Tudo-ou-Nada são 100% ou 0%';
$string['pluginname_link'] = 'question/type/multichoiceset';
$string['pluginnameadding'] = 'Adicionar pergunta de Escolha múltipla Tudo-ou-Nada';
$string['pluginnameediting'] = 'A editar pergunta de Escolha múltipla Tudo-ou-Nada';
$string['pluginnamesummary'] = 'Permite escolher múltiplas respostas de uma lista predefinida e usa a avaliação de Tudo-ou-Nada (100% ou 0%).';
$string['privacy:metadata'] = 'O módulo Escolha múltipla Tudo-ou-Nada não armazena quaisquer dados pessoais.';
$string['showeachanswerfeedback'] = 'Mostrar feedback para as respostas selecionadas.';
$string['showstandardinstruction'] = 'Mostrar instruções predefinidas';
$string['showstandardinstruction_help'] = 'Se pretende, ou não, mostrar as instruções "Selecione uma ou mais opções:" antes das opções da Escolha múltipla Tudo-ou-Nada';
