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
 * Strings for component 'qtype_shortanssimilarity', language 'pt', version '4.4'.
 *
 * @package     qtype_shortanssimilarity
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canonical'] = 'Usar método canónico?';
$string['is_completed_false'] = 'Esta pergunta ainda não foi avaliada - verifique novamente mais tarde.';
$string['is_completed_true'] = 'Nota calculada para esta resposta: {$a}.';
$string['key_text'] = 'qual é texto chave?';
$string['key_text_help'] = 'Esta é a resposta para a pergunta. O texto chave é o texto que o sistema usará para comparar com a resposta dos alunos.';
$string['key_text_required'] = 'Texto-chave é obrigatório';
$string['keytext'] = 'Texto chave';
$string['language'] = 'Idioma';
$string['manual_marking'] = 'avaliação manual versus avaliação automática';
$string['manual_marking_help'] = '- Avaliação manual: Requer a execução do cron. Se definido como Sim, esta pergunta será padronizada para avaliação manual e a pergunta será avaliada em segundo plano. Quando a pergunta estiver avaliada, o texto da pergunta será atualizado com o resultado (ficará visível para professores e alunos, mas não avaliará a pergunta). A partir daí o professor pode rever a pergunta e atualizar a nota. Selecione esta opção SE a resposta fornecida (texto chave) tiver mais do que 2 frases.

- Avaliação Automática: Não requer a execução do cron. Se definido como Não, será usada a avaliação automática. No entanto, os tempos de carregamento serão drasticamente mais longos (podem durar 10 minutos por pergunta, se as respostas forem complicadas). Recomendamos que esta opção seja definida como não, SE a resposta (texto chave) for menor ou igual a 2 frases.';
$string['manualmarking'] = 'Avaliação manual?';
$string['pluginname'] = 'Resposta curta similar';
$string['pluginname_help'] = 'Criar um tipo de pergunta de resposta curta similar com a inserção da descrição da pergunta aqui.';
$string['pluginname_link'] = 'question/type/shortanssimilarity';
$string['pluginnameadding'] = 'A adicionar uma pergunta de resposta curta similar';
$string['pluginnameediting'] = 'A editar uma pergunta de resposta curta similar';
$string['pluginnamesummary'] = 'Um tipo de pergunta de resposta curta similar que permite que uma resposta escrita do aluno seja avaliada automaticamente.

Em colaboração com VIP Reasearch Group.';
$string['summarize_repsponse_invalid'] = 'O utilizador falhou ao inserir uma resposta.';
$string['summarize_repsponse_valid'] = 'O utilizador escreveu:&nbsp;';
$string['update_mark'] = 'Se a nota não foi atualizada, o professor tem de a atualizar.';
$string['validation_error_error'] = 'Ocorreu um erro inesperado';
$string['validation_error_no_response'] = 'Nenhuma resposta submetida.';
