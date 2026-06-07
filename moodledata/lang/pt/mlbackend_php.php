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
 * Strings for component 'mlbackend_php', language 'pt', version '4.4'.
 *
 * @package     mlbackend_php
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['datasetsizelimited'] = 'Apenas parte do conjunto de dados foi avaliada devido ao seu tamanho. Configure $CFG->mlbackend_php_no_memory_limit se tiver a certeza de que o seu sistema pode executar um conjunto de {$a} dados.';
$string['errorcantloadmodel'] = 'O ficheiro de modelo {$a} não existe. O modelo tem de ser treinado antes de usá-lo para prever.';
$string['errorlowscore'] = 'A precisão da previsão do modelo avaliado não é muito alta, por isso algumas previsões poderão não ser precisas. Pontuação do modelo = {$a->score}, pontuação mínima = {$a->minscore}';
$string['errornotenoughdata'] = 'Não existem dados suficientes para avaliar este modelo usando o intervalo de análise indicado.';
$string['errornotenoughdatadev'] = 'Os resultados da avaliação variaram muito. Recomenda-se que sejam reunidos mais dados para garantir que o modelo seja válido. Desvio padrão dos resultados da avaliação = {$a->deviation}, desvio padrão máximo recomendado = {$a->accepteddeviation}';
$string['errorphp7required'] = 'Estrutura PHP de suporte à aprendizagem requer a versão 7 do PHP';
$string['pluginname'] = 'Estrutura PHP de suporte à aprendizagem';
$string['privacy:metadata'] = 'O módulo Estrutura PHP de suporte à aprendizagem não armazena quaisquer dados pessoais.';
