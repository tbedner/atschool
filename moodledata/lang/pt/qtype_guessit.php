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
 * Strings for component 'qtype_guessit', language 'pt', version '4.4'.
 *
 * @package     qtype_guessit
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['editquestiontext'] = 'Editar texto da pergunta';
$string['gap_plural'] = 'palavras';
$string['gap_singular'] = 'palavra';
$string['guessit'] = 'adivinha.';
$string['guessitgaps'] = 'Adivinha palavra(s)';
$string['guessitgaps_help'] = 'Indique aqui as palavras a serem adivinhadas (ou uma palavra se a opção wordle estiver selecionada)';
$string['instructions'] = 'Instruções';
$string['instructions_help'] = 'Use este campo para explicar ao aluno como funciona o jogo Adivinha ou fornecer uma dica para ajudar a adivinhar a(s) palavra(s). Este campo é opcional.';
$string['letter_plural'] = 'letras colocadas corretamente';
$string['letter_singular'] = 'letra colocada corretamente';
$string['misplacedletter_plural'] = 'letras mal colocadas';
$string['misplacedletter_singular'] = 'letra mal colocada';
$string['moretries'] = 'Ajuda estará disponível após mais {$a} tentativas!';
$string['moretry'] = 'Ajuda estará disponível após mais uma tentativa!';
$string['nbmaxtrieswordle'] = 'Máximo de tentativas';
$string['nbmaxtrieswordle_help'] = 'Quando o número máximo de tentativas for atingido, a palavra a ser adivinhada será exibida e a tentativa de adivinhar será terminada.';
$string['nbtriesbeforehelp'] = 'Número de tentativas antes de dar ajuda';
$string['nbtriesbeforehelp_help'] = 'Selecione o número de tentativas necessárias para que a opção Ajuda fique disponível. "Nunca" significa que a Ajuda nunca estará disponível.';
$string['nbtriesleft_plural'] = 'Restam {$a} tentativas';
$string['nbtriesleft_singular'] = 'Resta 1 tentativa';
$string['never'] = 'Nunca';
$string['pleaseenterananswer'] = 'Indique uma resposta em TODOS os espaços em branco.';
$string['pluginname'] = 'Adivinha';
$string['pluginname_help'] = 'Peça ao aluno para adivinhar uma frase curta ou uma palavra única.';
$string['pluginname_link'] = 'pergunta/digite/adivinhe';
$string['pluginnameadding'] = 'A adicionar uma pergunta de adivinha';
$string['pluginnameediting'] = 'A editar Advinha';
$string['pluginnamesummary'] = 'Um tipo de pergunta que se assemelha mais a um jogo em que o jogador tem de adivinhar uma frase curta ou uma palavra única (como Wordle).';
$string['privacy:null_reason'] = 'O tipo de pergunta "Advinha" não afeta nem armazena quaisquer dados.';
$string['wordfoundintries'] = 'Palavra encontrada em {$a} tentativas:';
$string['wordfoundintry'] = 'Palavra encontrada em 1 tentativa:';
$string['wordle'] = 'Wordle: Adivinhar uma palavra';
$string['wordle_help'] = 'Marque esta opção se pretende que o jogador tenha de adivinhar palavras INDIVIDUAIS em vez de frases. Utilize apenas LETRAS MAIÚSCULAS (A-Z), sem acentos e no máximo 8 letras.';
$string['wordlecapitalsonly'] = 'Wordle: Adivinhe uma palavra';
$string['wordletoolong'] = 'Muito longa! ERRO! Na opção Wordle, as palavras estão limitadas a 8 caracteres.';
$string['wordsfoundintries'] = 'Todas as palavras encontradas em {$a} tentativas.';
$string['wordsfoundintry'] = 'Todas as palavras encontradas em apenas 1 tentativa! Bom trabalho!';
$string['wordssmissing'] = 'Não incluiu nenhuma palavra(s) para serem encontradas no seu jogo Adivinha!';
$string['yougotnlettersrightcount'] = 'Tem {$a->num} {$a->letterorletters} e {$a->nbmisplacedletters} {$a->misplacedletterorletters}.';
$string['yougotnrightcount'] = 'Acertou em {$a->num} {$a->gaporgaps} de {$a->outof}.';
