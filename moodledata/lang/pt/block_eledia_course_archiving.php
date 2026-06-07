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
 * Strings for component 'block_eledia_course_archiving', language 'pt', version '4.4'.
 *
 * @package     block_eledia_course_archiving
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['archive'] = 'Iniciar o arquivamento';
$string['configure_description'] = 'Nesta página pode configurar o processo de arquivamento. <strong>Arquivar</strong> significa que a disciplina será definida como oculta, será movida para a categoria de arquivo escolhida e todas as inscrições dos aluno serão canceladas.
Todas as disciplinas das categorias de origem (categorias a arquivar) serão verificadas com a data/hora escolhida.
Dependendo da configuração da data/hora, haverá um dos seguinte fluxos:<br />
<br />
<strong>Data de início:</strong><br />
Se a data está dentro do período entre agora e os dias escolhidos para arquivar, a disciplina será arquivada. Numa segunda etapa todas as disciplinas na categoria de arquivo são verificadas.
Se o período for maior do que o número de dias para arquivar, a disciplina será apagada.<br />
<br />
<strong>Última atividade da disciplina:</strong><br />
Se a data foi há mais do que o número de dias para arquivar, as disciplinas serão arquivadas. Numa segunda etapa todas as disciplinas na categoria de arquivo são verificadas.
Se as disciplinas estiverem inativas por mais do que o dobro do número de dias para arquivar, definido nas configurações, as disciplinas serão apagadas definitivamente.<br />
<br />
O processo pode ser iniciado através de um formulário que está ligado ao bloco. O bloco apenas pode ser adicionado à Página principal.
Como alternativa, pode definir que o processo seja executado como uma tarefa do Cron.';
$string['confirm_archiving'] = 'As seguintes disciplinas serão arquivadas:<br />
<br />
{$a->archived}<br />
<br />
As seguintes disciplinas serão apagadas:<br />
<br />
{$a->deleted}';
$string['confirm_header'] = 'Confirmar o arquivamento';
$string['course_archiving_task'] = 'Arquivamento de disciplinas';
$string['days'] = 'Número de dias para arquivar';
$string['eledia_course_archiving:addinstance'] = 'adicionar bloco de arquivamento';
$string['eledia_course_archiving:use'] = 'usar bloco de arquivamento';
$string['include_subcategories'] = 'Incluir todas as subcategorias';
$string['last_activity'] = 'Última atividade da disciplina';
$string['nothing_to_archive'] = 'Não existem disciplinas para arquivar ou apagar';
$string['notice'] = 'As seguintes disciplinas foram arquivadas:<br />
<br />
{$a->archived}<br />
<br />
As seguintes disciplinas foram apagadas:<br />
<br />
{$a->deleted}';
$string['pluginname'] = 'Arquivamento';
$string['remove_error'] = '- Ocorreram erros ao remover';
$string['remove_success'] = '- Remoção efetuada com sucesso';
$string['run_cron'] = 'Ativar a tarefa de arquivamento no cron';
$string['sourcecat'] = 'Categorias a arquivar';
$string['targetcat'] = 'Arquivar na categoria';
$string['targettimestamp'] = 'Data/hora a verificar';
$string['title'] = 'Arquivamento';
