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
 * Strings for component 'tool_bloglevelupgrade', language 'pt', version '4.4'.
 *
 * @package     tool_bloglevelupgrade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bloglevelupgradedescription'] = '<p>Esta plataforma foi recentemente atualizada para a versão 2.0.</p>
<p>A visibilidade do blog foi simplificado no 2.0, mas o seu site ainda usa um dos tipos de visibilidade anteriores. </p>
<p>Para preservar a visibilidade baseada na disciplina ou no grupo nas entradas do blogue do seu site, precisa de executar o script de atualização a seguir, que irá criar um tipo especial de forum "blogue" e irá copiar as entradas dos blogues para este fórum. </ p>
<p> Os blogues nunca serão inteiramente desligados a nível do site. Nenhuma entrada de blogue será apagada durante o processo.</p>
<p>Você pode executar o script visitando <a href="{$a->fixurl}">a página de nivel superior do blogue</a>.</p>';
$string['bloglevelupgradeinfo'] = 'Esta plataforma foi recentemente atualizada para a versão 2.0. A visibilidade do blogue foi simplificado no 2.0, mas o seu site ainda usa um dos tipos de visibilidade anteriores. Para preservar a visibilidade baseada na disciplina ou no grupo nas entradas do blogue do seu site, precisa de executar o script de atualização a seguir, que irá criar um tipo especial de forum "blogue" e irá copiar as entradas dos blogues para este fórum. Os blogues nunca serão inteiramente desligados a nível do site. Nenhuma entrada de blogue será apagada durante o processo.';
$string['bloglevelupgradeprogress'] = 'Conversão em progresso: {$a->userscount} comentários de utilizadores, convertidos em {$a->blogcount} entradas.';
$string['pluginname'] = 'Upgrade da visibilidade do Blogue';
