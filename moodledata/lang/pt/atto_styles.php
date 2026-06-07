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
 * Strings for component 'atto_styles', language 'pt', version '4.4'.
 *
 * @package     atto_styles
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['code_example'] = '{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"title": "Caixa azul",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"type": "block",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"classes": "box blue",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"preview": true<br />
}';
$string['code_example_bootstrap'] = '{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"title": "Mensagem de sucesso",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"type": "block",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"classes": "alert alert-success"<br />
}';
$string['code_example_bootstrap_multiple'] = '[{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"title": "Mensagem de sucesso",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"type": "block",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"classes": "alert alert-success"<br />
},{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"title": "Mensagem de perigo",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"type": "block",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"classes": "alert alert-danger"<br />
}]';
$string['config'] = 'Configuração de Estilos';
$string['config_desc'] = 'Configuração do módulo Estilos para Atto no formato JSON. <br />Pode consultar exemplos com mais detalhes em README.md na secção <a href="https://github.com/moodle-an-hochschulen/moodle-atto_styles/blob/master/README.md#usage--settings">"Utilização & Configurações"</a>.
<hr />
Exemplo:<br />
{$a->code_example}
<hr />
O atributo <em>título</em> define o nome do estilo no menu de Estilos para Atto.<br />
<br />
O título suporta o filtro Conteúdos multilingue do Moodle (se ativado), mas as aspas duplas terão de ser precedidas por uma barra invertida "\\".<br />
Para mais detalhes, consulte o ficheiro README do módulo.<br />
<hr />
O atributo <em>tipo</em> pode conter um dos valores: "block" ou "inline".<br />
<br />
"block" cria uma tag div com a(s) classe(s) fornecida(s) e funcionará como um elemento de nível de bloco normal. Substituirá o elemento atual do nível de bloco e poderá ser aplicado em mais do que o texto selecionado no momento.<br />
<br />
"inline" cria uma tag div com a(s) classe(s) fornecida(s) e funcionará como um elemento inline. Será aplicado apenas ao texto atualmente selecionado.
<hr />
O atributo <em>classes</em> corresponde ao nome da classe CSS que será aplicada ao texto inline/do bloco.<br />
<br />
Podem ser definidas várias classes para cada item, separadas por um espaço. Serão aplicadas ao texto inline/do bloco.<br />
<br />
A classe CSS não pode ser criada neste módulo. Terá de adicionar as classes CSS ao seu tema ou em Administração do Site / Aparência / HTML Adicional
<hr />
O atributo <em>preview</em> pode ter os valores booleanos \'true\' ou \'false\' (predefinido). Se o valor estiver definido como \'true\', o item do estilo mostrará uma visualização real do estilo. Caso contrário, o item do estilo mostrará apenas o título em texto sem formatação.<br />
<br />
Tenha em atenção que, se optar por mostrar a visualização de um item do estilo, a classe deverá ser definida em CSS de forma que possa ser aplicada às span tags, mesmo que o próprio item do estilo seja um elemento de nível de bloco.
<hr />
Em instalações do Moodle com temas baseados em bootstrap (especialmente o tem <em>Boost</em>), também pode criar estilos com classes CSS do bootstrap em vez de definir as suas próprias classes.
<br /><br />
Por exemplo:<br />
{$a->code_example_bootstrap}
<br/><br/>
Para mais informações sobre as classes bootstrap, visite as hiperligações da documentação do Bootstrap 4:
<ul>
<li><a href="https://getbootstrap.com/docs/4.3/components/badge/">Bootstrap badges</a></li>
<li><a href="https://getbootstrap.com/docs/4.3/components/alerts/">Bootstrap alerts</a></li>
<li><a href="https://getbootstrap.com/docs/4.3/utilities/">Bootstrap utilities</a></li>
</ul>
<hr />
Tenha em atenção que algumas definições têm de estar entre parênteses.
<br /><br />
Por exemplo:<br />
$a->code_example_bootstrap_multiple}';
$string['inlinehint'] = 'Tem de selecionar texto para aplicar este estilo';
$string['jsondecodemessage'] = 'O código JSON inserido não é válido.';
$string['nostyle'] = 'Sem estilo';
$string['pluginname'] = 'Estilos';
$string['privacy:metadata'] = 'O módulo Estilos para Atto não armazena quaisquer dados pessoais.';
$string['settings'] = 'Configurações de Estilos';
