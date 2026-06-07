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
 * Strings for component 'qbank_purgecategory', language 'de', version '4.4'.
 *
 * @package     qbank_purgecategory
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmmessage'] = 'Sie sind dabei, die Fragenkategorie zu löschen. Wenn Sie fortfahren, werden diese Kategorie sowie alle ihre Unterkategorien und nicht verwendeten Fragen endgültig gelöscht. Dieser Vorgang kann nicht rückgängig gemacht werden!';
$string['confirmpurge'] = 'Löschung der Fragenkategorie bestätigen';
$string['iconfirm'] = 'Ich bestätige, dass ich mir bewusst bin, was ich tue';
$string['infowithmove'] = 'Die Kategorie \'{$a->name}\' enthält {$a->subcategories} Unterkategorien, {$a->unusedquestions} ungenutzte Fragen und {$a->usedquestions} Fragen, die nicht gelöscht werden können (Fragen, die noch in einigen bestehenden Tests verwendet werden). Wählen Sie bitte eine Kategorie aus, in die Sie die nicht löschbaren Fragen verschieben möchten.';
$string['infowithoutmove'] = 'Die Kategorie \'{$a->name}\' enthält {$a->subcategories} Unterkategorien und {$a->unusedquestions} ungenutzte Fragen.';
$string['pluginname'] = 'Fragenkategorien löschen';
$string['privacy:metadata'] = 'Das Plugin speichert keine personenbezogenen Daten.';
$string['purgecategories'] = 'Kategorien löschen';
$string['purgethiscategory'] = 'Diese Kategorie löschen';
$string['qbankpurgecategories'] = 'Fragensammlung: Kategorien löschen';
$string['validationcategory'] = 'Wählen Sie bitte eine gültige Kategorie aus';
$string['validationconfirm'] = 'Sie müssen diese Aktion bestätigen';
