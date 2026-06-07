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
 * Strings for component 'local_purgequestioncategory', language 'pt', version '4.4'.
 *
 * @package     local_purgequestioncategory
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmmessage'] = 'Está a eliminar uma categoria de perguntas. Se continuar, esta categoria e todas as suas subcategorias, assim como todas as perguntas não utilizadas serão definitivamente eliminadas. Esta ação não pode ser desfeita!';
$string['confirmpurge'] = 'Confirme a eliminação da categoria de perguntas';
$string['iconfirm'] = 'Confirmo que compreendo o que estou a fazer';
$string['infowithmove'] = 'A categoria \'{$a->name}\' contém {$a->subcategories} subcategorias, {$a->unusedquestions} perguntas não utilizadas e {$a->usedquestions} perguntas que não podem ser apagadas (perguntas que ainda estão a ser utilizadas em alguns testes existentes). Por favor, escolha outra categoria para mover as perguntas que não podem ser eliminadas.';
$string['infowithoutmove'] = 'A categoria \'{$a->name}\' contém {$a->subcategories} subcategorias e {$a->unusedquestions} perguntas não utilizadas.';
$string['pluginname'] = 'Eliminar categorias de perguntas';
$string['privacy:metadata'] = 'O módulo Eliminar categorias de perguntas não armazena quaisquer dados pessoais.';
$string['purgecategories'] = 'Eliminar categorias';
$string['purgequestioncategory:purgecategory'] = 'Eliminar todas as perguntas e subcategorias da categoria de perguntas';
$string['purgethiscategory'] = 'Eliminar esta categoria';
$string['validationcategory'] = 'Selecione uma categoria de perguntas válida';
$string['validationconfirm'] = 'Tem de confirmar esta ação';
