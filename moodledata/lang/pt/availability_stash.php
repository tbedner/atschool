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
 * Strings for component 'availability_stash', language 'pt', version '4.4'.
 *
 * @package     availability_stash
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['condition'] = 'Condição';
$string['description'] = 'Requer um item no Inventário do utilizador para ter acesso.';
$string['exactly'] = 'exatamente';
$string['lessthan'] = 'menos do que';
$string['morethan'] = 'mais do que';
$string['object'] = 'objeto';
$string['objectnnotrequiredtogetaccess'] = 'Não existe {$a->condition} {$a->quantity}x \'{$a->object}\' no seu Inventário.';
$string['objectnrequiredtogetaccess'] = 'Tem {$a->condition} {$a->quantity}x \'{$a->object}\' no seu Inventário.';
$string['pluginname'] = 'Condição de acesso com base no Inventário';
$string['privacy:null'] = '-';
$string['quantity'] = 'quantidade';
$string['theirstashcontains'] = 'Os seus Inventários contêm {$a->conditions} {$a->quantity} {$a->objects}';
$string['title'] = 'Objeto do Inventário';
$string['unknowncondition'] = '[Condição desconhecida]';
$string['unknownobject'] = '[Objeto desconhecido]';
$string['youhavegota'] = 'Tem \'{$a->object}\'';
$string['youhavegotlessthanna'] = 'Tem menos do que {$a->quantity}x \'{$a->object}\'';
$string['youhavegotmorethanna'] = 'Tem mais do que {$a->quantity}x \'{$a->object}\'';
$string['youhavegotna'] = 'Tem {$a->quantity}x \'{$a->object}\'';
$string['youhaventgota'] = 'Não tem \'{$a->object}\'';
$string['youhaventgotanya'] = 'Não tem nenhum(a) \'{$a->object}\'';
$string['youhaventgotlessthanna'] = 'Não tem menos do que {$a->quantity}x \'{$a->object}\'';
$string['youhaventgotmorethanna'] = 'Não tem mais do que {$a->quantity}x \'{$a->object}\'';
$string['youhaventgotna'] = 'Não tem {$a->quantity}x \'{$a->object}\'';
