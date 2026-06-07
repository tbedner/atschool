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
 * Strings for component 'qformat_ohie', language 'pt', version '4.4'.
 *
 * @package     qformat_ohie
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alert_multichoice'] = '<span class="text-warning">Alerta ! Número incorreto de respostas na <b>pergunta {$a}</b>. O tipo de pergunta foi alterado para Escolha Múltipla com uma resposta correta. <br /></span>';
$string['pluginname'] = 'Formato Ohie';
$string['pluginname_help'] = 'Este formato CSV é baseado num ficheiro XLSX para importação de perguntas.
Para sua ajuda, consulte o ficheiro xlsx exemplo (sample.xlsx) enviado junto com este módulo.';
$string['pluginname_link'] = 'qformat/ohie';
$string['privacy:metadata'] = 'O módulo Formato Ohie não armazena quaisquer dados pessoais.';
$string['questiontext_error'] = '<span class="text-danger">Ocorreu um erro ao carregar. Não foi encontrado o texto da pergunta para a <b>Pergunta {$a}</b>.<br /> Certifique-se de que todas as colunas essenciais estão preenchidas.<br /> Corrija esta pergunta e tente importar novamente.<br />Nenhuma pergunta foi importada.<br /></span>';
$string['rightanswer_error'] = '<span class="text-danger">Ocorreu um erro ao carregar. Não foi encontrada a resposta correta para a <b>Pergunta {$a}</b>.<br /> Certifique-se de que todas as colunas essenciais estão preenchidas.<br /> Corrija esta pergunta e tente importar novamente.<br />Nenhuma pergunta foi importada.<br /></span>';
$string['samplefile'] = 'FicheiroExemplo';
$string['type_error'] = '<span class="text-danger">Ocorreu um erro ao carregar. Não foi definido o tipo de pergunta para a <b>Pergunta {$a}</b>.<br /> Defina um tipo (como por exemplo: Numérica ou Desenvolvimento).<br /> Corrija esta pergunta e tente importar novamente.<br />Nenhuma pergunta foi importada.<br /></span>';
