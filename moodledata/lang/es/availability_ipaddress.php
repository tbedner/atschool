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
 * Strings for component 'availability_ipaddress', language 'es', version '4.4'.
 *
 * @package     availability_ipaddress
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['and_x_more'] = '... y {$a} más.';
$string['confirm_delete_range'] = 'Borrar este rango de IPs lo eliminará de todas las restricciones donde se utiliza. ¿Está seguro de que desea borrarlo permanentemente?';
$string['confirm_disable_range'] = 'Este rango de IP esta actualmente en uso. Deshabilitarlo lo eliminará de todas las restricciones donde se utiliza.';
$string['custom_ipaddress'] = 'Dirección IP personalizada';
$string['description'] = 'Restringe el acceso por dirección IP o subred';
$string['enabled'] = 'Habilitado';
$string['error_ipaddress'] = 'Formato incorrecto de dirección IP o subred';
$string['existing_ranges'] = 'Rangos de IP existentes';
$string['ipaddresses'] = 'Direcciones IP';
$string['ipaddresses_help'] = 'Indicar direcciones IP separadas por comas. Soporta IPs individuales (192.168.1.1), rangos (192.168.1.1-255) y subredes (192.168.1.0/24)';
$string['ipaddresses_help_help'] = '<p>Introduce una o más direcciones IP o rangos separados por comas.</p>
<p><strong>Por ejemlo:</strong></p>
<ul>
    <li><strong>IP individual:</strong> <code>192.168.1.1</code></li>
    <li><strong>Rango de IPs:</strong> <code>192.168.1.1-255</code></li>
    <li><strong>Subred:</strong> <code>192.168.1.0/24</code></li>
    <li><strong>Múltiples:</strong> <code>192.168.1.1,10.0.0.0/8,172.16.0.1-255</code></li>
</ul>';
$string['js:ipaddress'] = 'Requiere una dirección de red';
$string['manage_predefined_ranges'] = 'Gestionar rangos de IPs predefinidos';
$string['pluginname'] = 'Dirección IP';
$string['predefined_ranges'] = 'Rangos de IPs predefinidos';
$string['privacy:metadata'] = 'El plugin de restricción por dirección IP no almacena ningún dato personal.';
$string['range_created'] = 'Rango de IPs creado con éxito';
$string['range_deleted'] = 'Rango de IPs borrado con éxito';
$string['range_deleted_and_removed'] = 'Rango de IPs borrado y eliminado de {$a} restricciones.';
$string['range_disabled_and_removed'] = 'Rango de IPs deshabilitado y eliminado de {$a} restricciones.';
$string['range_in_use_count'] = 'Este rango de IPs esta actualmente en uso en {$a} restricciones.';
$string['range_in_use_title'] = 'Rango de IPs en uso';
$string['range_name'] = 'Nombre del rango';
$string['range_name_help'] = 'Un nombre descriptivo para este rango de IPs, por ejemplo, "Red del campus" o "Aula de informática"';
$string['range_updated'] = 'Rango de IPs actualizado con éxito';
$string['require_condition'] = 'Dirección IP p subred permitida (Tu IP:{$a})';
$string['require_condition_not'] = 'Dirección IP p subred no bloqueda (Tu IP:{$a})';
$string['setting:manage_predefined_ranges'] = 'Dirección IP - Gestionar rangos de IPs predefinidos';
$string['sortorder'] = 'Orden de clasificación';
$string['title'] = 'Dirección IP';
$string['use_predefined'] = 'Utilizar direcciones IP predefinidas';
