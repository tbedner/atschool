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
 * Strings for component 'local_navbarplus', language 'pt', version '4.4'.
 *
 * @package     local_navbarplus
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Barra de Navegação Plus';
$string['privacy:metadata'] = 'O módulo Barra de Navegação Plus fornece funcionalidade adicional aos utilizadores do Moodle, mas não armazena quaisquer dados pessoais.';
$string['resetusertours_hint'] = '(Pode demorar algum tempo)';
$string['setting_inserticonswithlinks'] = 'Ícones com hiperligações';
$string['setting_inserticonswithlinks_desc'] = 'Com esta configuração, pode adicionar ícones de hiperligação à barra de navegação do cabeçalho à esquerda dos ícones "Mensagens" e "Notificações". <br/>
Cada linha consiste numa imagem de ícone, o URL da hiperligação, um texto, idioma(s) suportado(s) (opcional) e a configuração da janela (opcional) - separados por barras verticais. Cada ícone deve ser escrito numa nova linha.<br/>
Por exemplo: <br/>
fa-question|http://moodle.org|Moodle|en,de|true|d-none d-sm-block<br/>
fa-sign-out|/login/logout.php|Sair||false<br/><br/>
Mais informações sobre os parâmetros:
<ul>
<li><b>Imagem</b>: pode adicionar identificadores de ícone do tipo de letra Awesome (<a href="https://fontawesome.com/v4.7.0/icons/">lista de ícones em fontawesome.com</a>). O tipo de letra Awesome está incluído nos temas Clean e Boost do Moodle desde a versão 3.3.</li>
<li><b>Hiperligação</b>: o destino da hiperligação pode ser definido por um URL completo da web (por exemplo, https://moodle.org) ou um caminho relativo da sua instância do Moodle (por exemplo, /login/logout.php).</li>
<li><b>Título</b>: este texto será escrito nos atributos \'title\' e \'alt\' do ícone. </li>
<li><b>Idioma(s) suportados (opcional)</b>: esta configuração pode ser usada para exibir a hiperligação apenas para utilizadores do(s) idioma(s) especificado(s). Separe os idiomas com vírgulas. Se a hiperligação deve ser exibida em todos os idiomas, deixe este campo vazio.</li>
<li><b>Nova janela (opcional)</b>: Por predefinição, a hiperligação será aberta na mesma janela e o valor desta configuração é definido como \'false\'. Se pretende abrir a hiperligação numa nova janela, defina o valor como \'true\'.</li>
<li><b>Classes adicionais (opcional)</b>: pode adicionar classes individuais com este parâmetro opcional. Um caso de uso comum pode ser adicionar classes responsivas do Bootstrap para ocultar um ícone para tamanhos de exibição específicos.<br/>Pode consultar as definições para as classes de exibição responsiva do Bootstrap da <a href="https://getbootstrap.com/docs/4.0/utilities/display/">versão 4</a> para todos os temas baseados no Boost.<br/>
As classes mais importantes para temas baseados em Boost podem ser "d-none d-sm-block" para ocultar um ícone em dispositivos pequenos ou "d-sm-none" para exibir apenas o ícone em ecrãs pequenos.
<li><b>ID (opcional)</b>: pode adicionar uma ID individual ao seu elemento de ícone. Torna possível endereçar este ícone específico facilmente com CSS (por exemplo, para as demonstrações ao utilizador do Moodle). A string inserida aqui será sempre prefixada com "localnavbarplus-".</li>
</ul>
Tenha em atenção que:
<ul>
<li>A separação dos parâmetros opcionais com barras verticais é sempre necessária se eles estiverem localizados entre outras opções. Isto significa que deve separar os parâmetros com a barra vertical mesmo que estejam vazios. Veja também o exemplo do ícone do tipo de fonte Awesome acima.</li>
<li>Se o ícone não aparecer na barra de navegação, verifique se todos os parâmetros obrigatórios estão configurados corretamente e se a configuração do idioma opcional está ajustada ao seu idioma de utilizador Moodle atual.</li>
</ul>';
$string['setting_resetusertours'] = 'Repor a hiperligação da demonstração ao utilizador';
$string['setting_resetusertours_desc'] = 'Com esta configuração, pode colocar um ícone de mapa do tipo de letra Awesome na barra de navegação com o qual o utilizador pode repor a demonstração ao utilizador para a página atual. Por predefinição, o Boost coloca a hiperligação para repor a demonstração ao utilizador no rodapé. Pode não ser atraente. Com esta configuração, pode colocar a hiperligação na barra de navegação para ficar mais visível. <br/> Se pretender alterar este ícone, consulte o ficheiro README.md.';
