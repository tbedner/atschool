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
 * Strings for component 'local_codechecker', language 'pt', version '4.4'.
 *
 * @package     local_codechecker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check'] = 'Verificar código';
$string['clihelp'] = 'Verifique algum código PHP em relação às diretrizes de codificação do Moodle.
Opções:
--interactivo, -i Pára depois de cada ficheiro permitindo continuar com o próximo ficheiro ou para repetir a verificação do mesmo.
--ajuda, -h Mostra esta informação
Exemplo:
php run.php local/codechecker';
$string['error_find'] = 'Falha na pesquisa de pastas';
$string['exclude'] = 'Excluir';
$string['filesfound'] = 'Ficheiros encontrados: {$a}';
$string['filesummary'] = '{$a->path} - {$a->count}';
$string['includewarnings'] = 'incluir avisos';
$string['info'] = '<p>Verifica o código contra alguns aspectos da hiperligação {$a->link}.</p>
<p>Digite o caminho, relativo à raiz do código Moodle, por exemplo: {$a->path}.</p>
<p>Pode inserir um ficheiro PHP específico ou uma pasta para verificar todos os ficheiros que ela contém.</p>
<p>Para excluir ficheiros, pode ser usada uma lista separada por vírgulas de caminhos correspondentes de substratos, por exemplo: {$a->excludeexample}. Os asteriscos são permitidos como wildchars em qualquer local.</p>';
$string['invalidpath'] = 'Caminho inválido {$a}';
$string['moodlecodingguidelines'] = 'Instruções de codificação do Moodle';
$string['numerrorswarnings'] = '{$a->errors} erro(s) e {$a->warnings} aviso(s)';
$string['other_crlf'] = 'Fim de linha Windows (CRLF) em vez de apenas LF (a relatar apenas a primeira ocorrência)';
$string['other_eol'] = 'Espaço em branco no final da linha';
$string['other_extralfs'] = 'Linha(s) extra(s) em branco no final do ficheiro (use exatamente uma)';
$string['other_missinglf'] = 'A faltar LF no final do ficheiro (use exatamente um)';
$string['other_ratherlong'] = 'Linha mais comprida que o máximo de 132 caracteres permitidos';
$string['other_tab'] = 'O carácter Tab não é permitido';
$string['other_toolong'] = 'Linha mais comprida que o máximo de 180 caracteres permitidos';
$string['path'] = 'Verificador de código';
$string['pluginname'] = 'Verificador de código';
$string['recheckfile'] = 'Verifique novamente este ficheiro';
$string['success'] = 'Muito bem!';
$string['summary'] = 'Total: {$a}';
$string['wholefile'] = 'Ficheiro';
