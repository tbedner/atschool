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
 * Strings for component 'qtype_crossword', language 'ru', version '4.4'.
 *
 * @package     qtype_crossword
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accentgradingignore'] = 'Оценивать только буквы, игнорируя знаки ударения';
$string['accentgradingpenalty'] = 'Неполный балл, если буквы указаны верно, но один или более знаков ударения - неправильно';
$string['accentgradingstrict'] = 'Буквы со знаками ударения должны точно совпадать, иначе ответ считается неверным';
$string['accentletters'] = 'Буквы с ударениями';
$string['accentpenalty'] = 'Оценка ответов с некорректными ударениями';
$string['across'] = 'По горизонтали';
$string['addmorewordblanks'] = 'Добавить поля ещё для 3 слов';
$string['answer'] = 'Ответ';
$string['answeroptions'] = 'Варианты ответов';
$string['answerwithnumber'] = '{$a->number} {$a->orientation}: {$a->response}';
$string['celltitle'] = 'Горизонталь {row}, Вертикаль {column}. {number} {orientation}. {clue}, буква {letter} из {count}';
$string['clue'] = 'Описание';
$string['correctanswer'] = 'Правильный ответ: {$a}';
$string['down'] = 'По вертикали';
$string['inputlabel'] = '{$a->number} {$a->orientation}. {$a->clue} Длина ответа {$a->length}';
$string['missingresponse'] = '-';
$string['mustbealphanumeric'] = 'Ответ должен содержать буквы и/или цифры. Разрешённые специальные символы - дефис и апостроф.';
$string['notenoughwords'] = 'Этот тип вопроса требует как минимум {$a} слов';
$string['numberofcolumns'] = 'Количество вертикалей';
$string['numberofrows'] = 'Количество горизонталей';
$string['orientation'] = 'Направление';
$string['overflowposition'] = 'Начало или конец слова выходят за установленные границы кроссворда';
$string['pleaseananswerallparts'] = 'Пожалуйста, заполните все клетки кроссворда.';
$string['pleaseenterclueandanswer'] = 'Вы должны ввести и само слово, и его описание {$a}.';
$string['pluginname'] = 'Кроссворд';
$string['pluginname_help'] = 'Вопрос типа «Кроссворд» требует от тестируемого правильно заполнить все горизонтали и вертикали кроссворда. Автор вопроса может при желании настроить использование знаков ударения.';
$string['pluginnameadding'] = 'Добавление кроссворда';
$string['pluginnameediting'] = 'Редактирование кроссворда';
$string['pluginnamesummary'] = 'Вопрос в виде простого текстового кроссворда. От автора вопроса требуется вручную разместить слова (и, следовательно, буквы, на которых слова пересекаются). В описаниях можно использовать разметку HTML с учётом специфики слов-ответов. Имеется также возможность использовать знаки ударения и оценивать ответы, в которых указана верная буква, но неверно поставлено ударение, как частично правильные.';
$string['preview'] = 'Просмотр';
$string['privacy:metadata'] = 'Плагин «Кроссворд» не хранит никаких персональных данных.';
$string['refresh'] = 'Обновить просмотр';
$string['smart_straight_quote_matching'] = 'Подгонка кавычек и апострофов';
$string['smart_straight_quote_matching_help'] = 'Если выбран параметр «Нестрого», то все фигурные (также известные как «умные») кавычки и апострофы в полях создания вопросов будут преобразованы в прямые аналоги при сохранении.';
$string['smart_straight_quote_matching_relaxed'] = 'Нестрого: все формы кавычек и апострофов взаимозаменяемы (по умолчанию)';
$string['smart_straight_quote_matching_strict'] = 'Строго: кавычки и апострофы сохраняются в той форме, в которой они введены.';
$string['startcolumn'] = 'Номер вертикали (латинской буквой)';
$string['startrow'] = 'Номер горизонтали';
$string['updateform'] = 'Обновить форму';
$string['wordhdrhelper_help'] = '<p>Поскольку кроссворд генерируется из списка слов, вы можете как создать единую раскладку для всех пользователей, так и использовать случайную раскладку для каждой новой попытки в той мере, в какой это позволяют сделать комбинации слов.</p>
<p>Введите слова и их описания в текстовые поля. Если вы хотите зафиксировать место конкретного слова в кроссворде, отметьте параметр «Зафиксировать слово» и назначьте ему направление и местоположение.</p>
<p>Поддерживается большинство символов: А-Я, A-Z, 0-9, диакритические знаки, символы валют и т. д. Фигурные кавычки либо преобразуются в прямые при выборе параметра «Строго», либо оставляются как есть для облегчения ввода и автоматического форматирования.</p>
<p>Чтобы ввести больше слов, воспользуйтесь кнопкой «Ещё поля для 3 слов». Оставшиеся пустые поля будут удалены при сохранении.</p>';
$string['wordlabel'] = 'С{$a->number}{$a->orientation}';
$string['wordno'] = 'Слово {$a}';
$string['words'] = 'Слова';
$string['words_help'] = 'Введите хотя бы одно слово и подходящее ему описание и определите его направление и начальное положение. Имейте в виду, что слова в кроссворде нумеруются в соответствии с их позициями в данном разделе.';
$string['wrongadjacentcharacter'] = 'В новом слове обнаружены два или более последовательных пробела. Пожалуйста, разделяйте слова только одним пробелом. Заметьте, что количество слов в ответе это не ограничивает.';
$string['wrongintersection'] = 'Буква на пересечении двух слов не совпадает. Это слово не может быть помещено здесь.';
$string['wrongoverlappingwords'] = 'Два слова не могут начинаться в одной и той же клетке и располагаться в одном направлении. Это описание начинается в том же месте, что и "{$a}" выше.';
$string['wrongplugin'] = 'Этот плагин отличается от существующего плагина qtype_crossword. Пожалуйста, удалите прежний плагин перед установкой этого.';
$string['wrongpositionhyphencharacter'] = 'Не ставьте дефис перед первой или после последней буквы или цифры.';
$string['wrongpositionspacecharacter'] = 'Не ставьте пробел перед первой или после последней буквы или цифры.';
$string['yougot1right'] = '1 из ваших ответов верен.';
$string['yougotnright'] = '{$a->num} из ваших ответов верны.';
