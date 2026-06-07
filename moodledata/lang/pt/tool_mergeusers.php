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
 * Strings for component 'tool_mergeusers', language 'pt', version '4.4'.
 *
 * @package     tool_mergeusers
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['choose_users'] = 'Escolha os utilizadores que pretende unir';
$string['clear_selection'] = 'Limpar a seleção do utilizador atual';
$string['cligathering:description'] = 'Indique os pares de ID de utilizadores para unir o primeiro no \\ n
o segundo. O primeiro ID de utilizador (fromid) "perderá" todos os seus dados para serem "migrados" \\ n
para o segundo (toid). O utilizador \'toid\' incluirá dados de ambos os utilizadores.';
$string['cligathering:fromid'] = 'ID do utilizador de origem (fromid):';
$string['cligathering:stopping'] = 'Para parar a união, Ctrl+C ou digite \'-1\' no campo fromid ou no campo toid.';
$string['cligathering:toid'] = 'ID do utilizador de destino (toid):';
$string['dbok'] = 'União concluída com sucesso';
$string['deleted'] = 'O utilizador com ID \'{$a}\' foi apagado';
$string['error_return'] = 'Voltar ao formulário de pesquisa';
$string['errorsameuser'] = 'A tentar unir o próprio utilizador';
$string['eventusermergedfailure'] = 'Falha na união';
$string['eventusermergedsuccess'] = 'União concluída com sucesso';
$string['excluded_exceptions'] = 'Excluir exceções';
$string['finishtime'] = 'União concluída às {$a}';
$string['pluginname'] = 'Unir contas de utilizadores';
$string['review_users'] = 'Confirmar utilizadores a unir';
$string['saveselection_submit'] = 'Guardar seleção';
$string['searchuser'] = 'Procurar utilizador';
$string['starttime'] = 'União iniciadas às {$a}';
$string['suspenduser_setting'] = 'Suspender utilizador antigo';
$string['tableko'] = 'Tabela {$a} : atualização NÃO OK!';
$string['tableok'] = 'Tabela {$a} : atualização OK';
$string['timetaken'] = 'A união demorou {$a} segundos';
$string['transactions_not_supported'] = 'Para sua informação, a sua base de dados <strong>não suporta transações</strong>.';
$string['transactions_setting'] = 'Permitir apenas transações';
$string['transactions_supported'] = 'Para sua informação, a sua base de dados <strong>suporta transações</strong>.';
$string['uniquekeynewidtomaintain'] = 'Manter os dados do novo utilizador';
$string['uniquekeynewidtomaintain_desc'] = 'Em caso de conflito, uma vez que a coluna relacionada com o ID do utilizador é uma chave exclusiva, este módulo manterá os dados dos novos utilizadores (por predefinição). Isto significa que os dados do utilizador antigo são excluídos para manter a consistência. Caso contrário, se desmarcar esta opção, os dados do utilizador antigo serão mantidos.';
$string['usermergingheader'] = '&laquo;{$a->username}&raquo; (ID utilizador = {$a->id})';
$string['userreviewtable_legend'] = '<b>Rever os utilizadores para unir</b>';
$string['userselecttable_legend'] = '<b>Selecione os utilizadores para unir</b>';
$string['viewlog'] = 'Visualizar os registo da união';
$string['wronglogid'] = 'O registo que pretende aceder não existe.';
