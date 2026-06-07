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
 * Strings for component 'coursesearch', language 'ru', version '4.4'.
 *
 * @package     coursesearch
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity'] = 'Элемент';
$string['closebuttontitle'] = 'Закрыть';
$string['collapsematches'] = 'Свернуть совпадения';
$string['content'] = 'контент';
$string['coursesearch:addinstance'] = 'Добавлять новый поиск по курсу';
$string['coursesearch:view'] = 'Видеть поиск по курсу';
$string['coursesearchsettings'] = 'Настройки поиска по курсу';
$string['defaultplaceholder'] = 'Поиск по курсу...';
$string['description'] = 'описание';
$string['displayoptions'] = 'Параметры отображения';
$string['embedded'] = 'Вставить на страницу курса';
$string['embedded_help'] = 'При включенном параметре строка поиска будет встроена непосредственно на страницу курса, и пользователям не потребуется переходить на отдельную страницу.';
$string['embeddedinfo'] = 'Показать строку поиска непосредственно на странице курса';
$string['enablefloatingwidget'] = 'Включить плавающий виджет быстрого поиска';
$string['enablefloatingwidget_desc'] = 'При включенном параметре на страницах курсов появится плавающий виджет поиска, позволяющий быстро перейти к поиску без необходимости перехода на страницу поиска.';
$string['enablehighlight'] = 'Включить прокрутку и выделение';
$string['enablehighlight_desc'] = 'Если эта функция включена, щелчок по результатам поиска автоматически приведет к переходу к нужному тексту на странице курса и его выделению.';
$string['eventcoursemoduleviewed'] = 'Просмотрены результаты поиска по курсу';
$string['eventcoursesearched'] = 'Проведен поиск по курсу';
$string['excludedplaceholders'] = 'Исключенные шаблоны-заполнители';
$string['excludedplaceholders_desc'] = 'Шаблоны регулярных выражений (по одному на строку) для внутренних заполнителей, которые следует исключить из поиска. Это внутренние маркеры, невидимые для пользователей, поиск которых не должен выполняться.

<strong>Справочник по символам регулярных выражений:</strong>
<ul>
<li><code>@@</code> - соответствует буквенному двойному знаку «at»</li>
<li><code>[A-Z_]</code> - соответствует любой заглавной букве или символу подчеркивания</li>
<li><code>+</code> - соответствует одному или нескольким из предыдущих символов/групп</li>
<li><code>[^\\s]</code> - соответствует любому символу, кроме пробела</li>
<li><code>*</code> - соответствует нулю или более из предыдущих символов/групп</li>
<li><code>\\s</code> - соответствует любому символу пробела (пробел, табуляция, новая строка)</li>
<li><code>^</code> - внутри скобок [^...] означает «не» (отрицание)</li>
</ul>

<strong>Примеры:</strong>
<ul>
<li><code>@@[A-Z_]+@@[^\\s]*</code> - исключает любой шаблон-заполнитель @@PLACEHOLDER@@ (общий шаблон, рекомендуется)</li>
<li><code>\\{\\{[^}]+\\}\\}</code> - исключает переменные шаблона, такие как {{variable_name}} (фигурные скобки должны быть экранированы обратной косой чертой)</li>
</ul>
<strong>Примечание:</strong> Шаблоны нечувствительны к регистру. Недопустимые шаблоны будут пропущены с сообщением об ошибке. Если удалить все шаблоны, фильтрация по заполнителям применяться не будет.';
$string['expandmatches'] = 'Развернуть совпадения';
$string['floatingwidgetverticaloffset'] = 'Вертикальное смещение плавающего виджета';
$string['floatingwidgetverticaloffset_desc'] = 'Смещение по вертикали в пикселях от нижнего края страницы. Увеличьте это значение, чтобы переместить виджет выше и избежать наложения на другие элементы страницы (например, информационную кнопку Moodle).';
$string['floatingwidgetverticaloffset_invalid'] = 'Смещение по вертикали должно быть равно 0 или больше.';
$string['generalsection'] = 'Основное';
$string['grouped'] = 'Группировать результаты по секциям';
$string['grouped_help'] = 'При включенном параметре результаты поиска будут сгруппированы по секциям курса. При отключенном результаты будут отображаться в виде простого списка.';
$string['groupedinfo'] = 'Систематизируйте результаты поиска по секциям курса';
$string['inforum'] = 'В форуме: {$a}';
$string['intro'] = 'вступление';
$string['matchcount'] = 'Совпадений: {$a}';
$string['matchdescriptionorcontent'] = 'описание или контент';
$string['matchedin'] = 'Найдено в {$a}';
$string['matchof'] = 'Соответствие {$a->index} из {$a->total}';
$string['maxoccurrences'] = 'Максимальное количество вхождений для элемента контента';
$string['maxoccurrences_desc'] = 'Максимальное количество вхождений, которое будет отображено для каждого элемента в контенте, если поисковый термин встречается несколько раз. Установите значение 0, чтобы отключить ограничение и найти все вхождения (не рекомендуется для больших курсов, так как это может повлиять на производительность и привести к появлению слишком обширных списков результатов).';
$string['maxoccurrences_invalid'] = 'Максимальное количество вхождений должно быть равно 0 или более.';
$string['maxoccurrences_warning'] = 'Предупреждение: если установить значение 0, будут найдены все вхождения, что может привести к снижению производительности и появлению чрезмерно длинных списков результатов в крупных курсах.';
$string['missingidandcmid'] = 'Отсутствует ID модуля курса или ID поиска по курсу';
$string['modulename'] = 'Поиск по курсу';
$string['modulename_help'] = 'Модуль поиска по курсу позволяет преподавателю добавить в курс строку поиска, которая дает студентам возможность искать информацию в содержимом курса.<br><br><a href="https://moodle.org/plugins/mod_coursesearch"><i class="icon fa fa-info-circle" aria-hidden="true"></i> Подробнее на Moodle.org</a>';
$string['modulenameplural'] = 'Поиск по курсу';
$string['next'] = 'Дальше';
$string['nocourseinstances'] = 'В данном курсе отсутствует возможность поиска по курсу.';
$string['noresults'] = 'Нет совпадений для «{$a}»';
$string['pagination'] = 'Разбивка результатов поиска на страницы';
$string['placeholder'] = 'Текст-заполнитель';
$string['placeholder_help'] = 'Текст, отображаемый в поле поиска до ввода запроса пользователем.';
$string['pluginadministration'] = 'Управление поиском по курсу';
$string['pluginname'] = 'Поиск по курсу';
$string['previous'] = 'Предыдущий';
$string['privacy:metadata'] = 'Модуль «Поиск по курсу» не хранит никаких личных данных пользователей. В нем сохраняются только настройки экземпляра, такие как название, описание, область поиска и параметры отображения.';
$string['quicksearch'] = 'Быстрый поиск';
$string['resultsperpage'] = 'Результатов на странице';
$string['resultsperpage_desc'] = 'Количество результатов поиска, отображаемых на странице.';
$string['search'] = 'Поиск';
$string['searchmodtypes'] = 'Фильтр';
$string['searchmodtypes_help'] = 'Отфильтруйте результаты поиска по конкретным типам активных элементов или ресурсов.';
$string['searchresults'] = 'Результаты поиска для «{$a}»';
$string['searchresultscount'] = 'Для «{$a->query}» найдено результатов: {$a->count}';
$string['searchresultsfor'] = 'Результаты поиска для «{$a}»';
$string['searchresultsrange'] = 'Показаны секции {$a->start}-{$a->end} из {$a->total}';
$string['searchresultsrange_ungrouped'] = 'Показаны результаты {$a->start}-{$a->end} из {$a->total}';
$string['searchscope'] = 'Область поиска';
$string['sectionmatch'] = 'Совпадение в секции';
$string['subsectionmatch'] = 'Совпадение в подсекции';
$string['title'] = 'заголовок';
