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
 * Strings for component 'filter_multilang2', language 'es', version '4.4'.
 *
 * @package     filter_multilang2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['filtername'] = 'Contenido Multi-Idioma (v2)';
$string['parentlangalwaysen'] = 'Usar idiomas padre siempre, incluido \'en\'.';
$string['parentlangbehaviour'] = 'Comportamiento de idiomas padre';
$string['parentlangbehaviour_desc'] = '<p>
  En las descripciones inferiores, el término "idioma activo del
  usuario" se refiere al idioma que el usuario ha configurado como
  activo en un momento dado. Puede ser el idioma que el usuario haya
  configurado en su perfil, o el idioma que el usuario haya activado
  temporalmente al elegirlo en el menú de idiomas de Moodle.
</p>
<p>

</p>
<p>
  El filtro determina si el texto de un bloque de idioma se debe
  visualizar o no basándose en los idiomas indicados en dicho bloque y
  en el idioma activo del usuario. Este proceso de emparejamiento se
  puede realizar de formas diferentes, a las que el filtro
  denomina <em>comportamiento de idiomas padre</em>. Existen tres
  posibles comportamientos:
</p>
<ol>
  <li>
    <p>
      <b>Usar idiomas padre siempre, excluido \\\'en\\\'.</b>
    </p>
    <p>
      Este es el valor predeterminado para el ajuste. El filtro
      obtiene el idioma activo del usuario (p.ej.,
      \\\'<code>en_us_kids12</code>\\\') y calcula su lista de idiomas
      padre. A la hora de calcular la ista de idiomas padre, nunca se
      incluye \\\'<code>en</code>\\\' en dicha lista. Por ejemplo, para
      \\\'<code>en_us_kids12</code>\\\', la lista de idiomas padre sólo
      incluiría \\\'<code>en_us</code>\\\' (aunque \\\'<code>en</code>\\\' sea
      el idioma padre de \\\'<code>en_us</code>\\\', puesto que
      \\\'<code>en</code>\\\' siempre se excluye en este caso). Pero para
      \\\'<code>fr_ca_kids12</code>\\\', la lista de idiomas padre
      incluiría \\\'<code>fr_ca</code>\\\' y \\\'<code>fr</code>\\\'.
    </p>
    <p>
      Una vez obtenida la lista de idiomas padre, el filtro comprueba
      si alguno de los idiomas indicados en el bloque de idioma
      coincide o bien con el idioma activo del usuario, or con alguno
      de los idiomas incluidos en la lista de idiomas padre. Si hay
      una coincidencia, se muestra el texto del bloque de idioma. En
      caso contrario, no se muestra.
    </p>
    <p>
      <b>Ejemplo 1</b>: Si el idioma activo del usuario es
      \\\'<code>en_us_kids12</code>\\\', la lista de idiomas padre
      incluirá sólo \\\'<code>en_us</code>\\\' (puesto que siempre se
      excluirá a \\\'<code>en</code>\\\' cuando se escoja esta
      opción). Por lo tanto, en caso de tener un bloque de idioma
      como <code>{mlang en_us_kids12}Algo de contenido en
      n_us_kids12{mlang}</code>, se mostrará su texto. De igual manera
      que si se tiene un bloque de idioma como <code>{mlang en_us}Algo
      de contenido en eu_us{mlang}</code>. Por el contrario, un bloque
      de idioma como <code>{mlang en}Algo de contenido en
      en{mlang}</code> no se mostará. Porque \\\'<code>en</code>\\\'
      estará excluido de la lista de idiomas padre, y por tanto no
      podrá concidir con el idioma del bloque en cuestión.
    </p>
    <p>
      <b>Example 2</b>: Si el idioma activo del usuario es
      \\\'<code>fr_ca_kids12</code>\\\', la lista de idiomas padre
      incluirá \\\'<code>fr_ca</code>\\\' y \\\'<code>fr</code>\\\'. Por lo
      tanto, en caso de tenr un bloque de idioma como <code>{mlang
      fr_ca_kids12}Algo de contenido en fr_ca_kids12{mlang}</code>, se
      mostrará su texto. De la misma forma que también se mostrará su
      texto si se tiene un bloque de idioma como <code>{mlang
      fr_ca}Algo de contenido en fr_ca{mlang}</code>, o un bloque de
      idioma como <code>{mlang fr}Some content in fr{mlang}</code>.
    </p>
    <p>
      <b>Nota</b>: Siempre es posible usar el idioma Inglés
      (<code>en</code>), si éste se indica explícitamente en el bloque
      de idioma. Pero sólo se mostrará el texto de ese bloque de
      idioma si el idioma activo del usuario es exactamente
      \\\'<code>en</code>\\\'.
    </p>
  </li>
  <li>
    <p>
      <b>Usar idiomas padre siempre, incluído \\\'en\\\'.</b>
    </p>
    <p>
      Este ajuste funciona como el anterior, pero no excluye el idioma
      \\\'<code>en</code>\\\' de la lista de idiomas padre válidos del
      idioma activo del usuario.
    </p>
    <p>
      <b>Ejemplo 1</b>: Si el idioma activo del usuario es
      \\\'<code>en_us_kids12</code>\\\', la lista de idiomas padre
      incluirá \\\'<code>en_us</code>\\\' y \\\'<code>en</code>\\\' (puesto
      que en este caso no se excluirá \\\'<code>en</code>\\\' de la lista
      de idiomas padre válidos). Por lo tanto, en caso de tener un
      bloque de idioma como <code>{mlang en_us_kids12}Algo de
      contenido en en_us_kids12{mlang}</code>, se mostrará su
      texto. De la misma forma que también se mostrará su texto si se
      tiene un bloque de idioma como <code>{mlang en_us}Algo de
      contenio en en_us{mlang}</code> o un bloque como <code>{mlang
      en}Algo de contenido en en{mlang}</code>.
    </p>
    <p>
      <b>Ejemplo 2</b>: Si el idioma activo del usuario es
      \\\'<code>fr_ca_kids12</code>\\\', la lista de idiomas padré
      incluirá \\\'<code>fr_ca</code>\\\' y \\\'<code>fr</code>\\\'. Por lo
      tanto, en caso de tener un bloque de idiom como <code>{mlang
      fr_ca_kids12}Algo de contenido en fr_ca_kids12{mlang}</code>, se
      mostrará su contenido. De la misma forma que también se mostrará
      su texto si se tiene un bloque de idioma como <code>{mlang
      fr_ca}Algo de contenido en fr_ca{mlang}</code> o un bloque
      como <code>{mlang fr}Algo de contenido en fr{mlang}</code>. Por
      el contrario, un bloque de idioma como <code>{mlang en}Algo de
      contenido en fr{mlang}</code> <b>no</b> se mostrará. Porque en
      este caso el idioma \\\'<code>en</code>\\\' no es un idioma padre de
      \\\'<code>fr_ca_kids12</code>\\\' (sólo lo son
      \\\'<code>fr_ca</code>\\\' y \\\'<code>fr</code>\\\').
    </p>
  </li>
  <li>
    <p>
      <b>No usar idiomas padre nunca.</b>
    </p>
    <p>
      Como su nombre indica, no se usan los idiomas padre nunca. El
      filtro sólo empareja los idiomas indicados de forma explícita en
      el bloque de idioma, y el idioma activo del usuario. Sin
      considerar en ningún caso ningún idioma padre.
    </p>
    <p>
      <b>Ejemplo</b>: Si el idioma activo del usuario es
      \\\'<code>fr_ca_kids12</code>\\\', se mostrará el texto de un bloque
      de idioma como <code>{mlang fr_ca_kids12}Algo de contenido en
      fr_ca_kids12{mlang}</code>. Por el contrario, no se mostrarán
      los textos de bloques de idiomas como <code>{mlang fr_ca}Algo
      de contenido en fr_ca{mlang}</code> o <code>{mlang fr}Algo de
      contenido en fr{mlang}</code>.
    </p>
  </li>
</ol>';
$string['parentlangdefault'] = 'Usar idiomas padre siempre, excluído \'en\' (comportamiento tradicional).';
$string['parentlangnever'] = 'No usar idiomas padre nunca.';
$string['pluginname'] = 'Filtro Contenido Multi-Idioma (v2)';
$string['privacy:metadata'] = 'El plugin del filtro de Contenido Multi-idioma (v2) no almacena ningún dato personal.';
