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
 * Strings for component 'qtype_regexmatch', language 'pt', version '4.4'.
 *
 * @package     qtype_regexmatch
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['default_options'] = 'Opções predefinidas';
$string['default_options_help'] = 'Estas opções estão ativadas por predefinição e podem ser desativadas especificando a letra correspondente.

**S: Espaço Infinito**<br>
Todos os espaços serão substituídos por `([ \\t]+)`. Desta forma, corresponderão a um ou mais caracteres de espaço em branco.

**T: Remover Espaços**<br>
Todas as linhas em branco à esquerda e à direita na resposta, bem como todos os espaços à esquerda e à direita de cada linha na resposta, serão ignorados. As linhas em branco à direita serão sempre ignoradas, mesmo que esta opção esteja desativada.';
$string['dollarroofmustbeescaped'] = 'Os caracteres de expressão regular "$" e "^" não podem ser utilizados. Se necessitarem de ser interpretados como literais, podem ser deste modo: "\\$", "\\^".';
$string['error_unparsable'] = '"A expressão regular não pôde ser analisada devido a um erro desconhecido. Por favor, edite a pergunta."';
$string['fborgradewithoutregex'] = 'Caso seja necessário definir um feedback ou uma nota, é necessário inserir uma expressão regular.';
$string['notenoughregexes'] = 'É necessária pelo menos uma expressão regular.';
$string['options'] = 'Opções';
$string['options_help'] = 'Algumas opções podem ser definidas. As opções devem ser colocadas no final da expressão regular. Além disso, devem começar e terminar com uma barra (`/`). Por exemplo: `/PI/`. Cada opção é ativada/desativada por uma única letra. As opções são descritas abaixo.

**I: Ignorar maiúsculas e minúsculas**<br>
A expressão regular ignorará maiúsculas e minúsculas.

**D: Ignorar todos os pontos**<br>
Todos os pontos (`.`) da expressão regular corresponderão também a novas linhas.

**P: Barras verticais e ponto e vírgula**<br>
Esta é uma opção específica da shell. Todos os pontos e vírgulas `;` e barras verticais  neste modo`\\|` serão substituídos por `([ \\t]*[;\\n][ \\t]*)` e `([ \\t]*\\|[ \\t]*)`, respetivamente. Desta forma, são permitidos espaços infinitos em redor destes caracteres e o ponto e vírgula corresponderá também a uma nova linha. Nota: Quaisquer espaços antes e depois da barra vertical dentro da expressão regular também devem estar presentes na resposta.

**R: Redirecionamentos**<br>
Esta é uma opção específica da shell. Todos os redirecionamentos (`<`,`>`,`<<`,`>>`) serão substituídos, por exemplo, por `([ \\t]*<[ \\t]*)`.

Se estiver ativado, os redirecionamentos não podem ser utilizados noutras funções de expressão regular (por exemplo: lookbehind `(?<=...)`). Nota: Quaisquer espaços antes e depois do redirecionamento dentro da expressão regular também devem estar presentes na resposta.

**O: Corresponder a qualquer ordem**<br>
A expressão regular deve ser constituída por múltiplas expressões regulares (`[[regex1]] [[regex2]]`).

As respostas (separadas pelo valor da chave `separator=`. Nova linha por defeito.) devem corresponder a qualquer uma das expressões regulares, mas a ordem não importa.

Cada expressão regular só pode ser correspondida por uma única resposta. O cálculo dos pontos pode ser encontrado [aqui](https://github.com/lni-dev/moodle-qtype_regexmatchcloze/blob/master/usage-examples.md#evaluation).';
$string['pleaseenterananswer'] = 'Por favor, indique uma resposta.';
$string['pluginname'] = 'Correspondência a RegEx';
$string['pluginname_help'] = 'Cria uma pergunta do tipo "correspondência a expressão regular", que permite verificar a resposta utilizando uma expressão regular.';
$string['pluginname_link'] = 'question/type/regexmatch';
$string['pluginnameadding'] = 'A adicionar pergunta correspondência a expressão regular';
$string['pluginnameediting'] = 'A editar pergunta correspondência a expressão regular';
$string['pluginnamesummary'] = 'Um tipo de pergunta de correspondência a expressões regulares que permite verificar as respostas às perguntas utilizando expressões regulares.';
$string['privacy:metadata'] = 'O módulo de perguntas Correspondência a expressão regular não armazena quaisquer dados pessoais.';
$string['regex'] = 'Expressão regular';
$string['regex-number'] = 'Expressão regular {$a}';
$string['regex_help'] = 'A seguinte sintaxe deve ser respeitada:
```
[[expressão]] /OPÇÕES/
separator=,
comment=texto
```
O exemplo seguinte corresponde a `ls -la` e nenhuma opção extra está ativada (apenas as opções predefinidas estão ativadas):
```
[[ls -la]]//
```
Uma descrição mais concreta (com exemplos) pode ser encontrada [aqui](https://github.com/lni-dev/moodle-qtype_regexmatch/blob/master/usage-examples.md).

As chaves `separator` e `comment` são opcionais. `separator` está descrito no campo de ajuda das opções.
`comment` é um campo de texto apenas visível no formulário de edição da pergunta.

`/OPÇÕES/` estão descritas no campo de ajuda das opções abaixo. Se nenhuma opção estiver ativada ou desativada, deverá estar presente um `//` vazio.

`regex` é uma expressão regular na [sintaxe PCRE](https://www.php.net/manual/en/reference.pcre.pattern.syntax.php).

A expressão regular deve estar entre parêntesis retos (\\[\\[\\]\\]). Uma breve descrição das funcionalidades mais importantes das expressões regulares:

| | Estruturas | |:------:|:-------------------------------------------------:|
| abc | Corresponde a "abc" |
| [abc] | Corresponde a qualquer um dos caracteres dentro dos parênteses retos |
| [^abc] | Corresponde a qualquer caráter FORA dos parênteses retos |
| ab\\|cd | Corresponde a "ab" ou "cd" |
| (abc) | Corresponde ao subpadrão "abc" |
| \\ | Caráter para utilização de .^$*+-?()[]{}\\\\| |

| | Quantificadores |
|:------:|:-------------------------:|
| a* | Zero ou mais de "a" |
| a+ | Um ou mais de "a" |
| a? | Zero ou um de "a" |
| a{n} | Exatamente n vezes de "a" |
| a{n,} | n ou mais de "a" |
| a{,m} | m ou menos de "a" |
| a{n,m} | Entre n e m vezes de "a" |

| | Caracteres e Limites |
|:--:|:---------------------------------:|
| \\w | Qualquer caráter alfanumérico (a-z 0-9 _) |
| \\W | Qualquer caráter não alfanumérico |
| \\s | Espaço em branco (espaço, tabulação, nova linha) |
| \\S | Qualquer caráter que não seja espaço em branco |
| \\d | Dígitos (0-9) |
| \\D | Qualquer caráter que não seja dígito |
| . | Qualquer caráter, exceto nova linha |
| \\b | Limite de palavras |
| \\B | Não é um limite de palavras |

Os caracteres de expressão regular "$" e "^" não podem ser utilizados. Se necessitarem de ser interpretados como literais, podem ser deste modo: "\\$", "\\^".';
$string['valerror_illegalkeyorder'] = 'Ordem de chave inválida. Ordem correta: {$a}.';
$string['valerror_illegaloption'] = 'Opção inválida "{$a}".';
$string['valerror_illegalsyntax'] = 'Sintaxe inválida';
$string['valerror_unkownkey'] = 'Chave desconhecida "{$a}".';
