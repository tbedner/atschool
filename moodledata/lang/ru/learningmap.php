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
 * Strings for component 'learningmap', language 'ru', version '4.4'.
 *
 * @package     learningmap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advancedsettings'] = 'Продвинутые настройки';
$string['allowedfilters'] = 'Фильтры, разрешенные для использования с mod_learningmap';
$string['allowedfilters_desc'] = 'Список, разделенный запятыми, без префикса filter_';
$string['backgroundfile'] = 'Фоновое изображение';
$string['backgroundfile_help'] = 'Этот файл будет использоваться для карты в качестве фона';
$string['backlink'] = 'К «{$a->name}»';
$string['backlinkallowed'] = 'Разрешить автоматические обратные ссылки';
$string['backlinkallowed_desc'] = 'При включенном параметре пользователи могут автоматически устанавливать обратные ссылки на карту обучения со страниц модулей активных элементов, используемых в карте обучения.';
$string['cachedef_backlinks'] = 'В этом кэше хранится информация о том, есть ли обратная ссылка на карту обучения для отображения на странице модуля курса.';
$string['completion_with_all_places'] = 'Для завершения необходимо достижение всех мест';
$string['completion_with_all_targets'] = 'Для завершения необходимо достичь все целевые места';
$string['completion_with_one_target'] = 'Для завершения необходимо достижение одного целевого места';
$string['completiondetail:all_places'] = 'Достичь все места';
$string['completiondetail:all_targets'] = 'Достичь все целевые места';
$string['completiondetail:one_target'] = 'Достичь одно целевое место';
$string['completiondisabled'] = 'Отслеживание завершения отключено в настройках курса. Без отслеживания завершения этот плагин работать не будет.';
$string['completiontype'] = 'Тип завершения';
$string['editorhelp'] = 'Как пользоваться редактором';
$string['editplace'] = 'Изменить место';
$string['fill_backlink_cache_task'] = 'Заполнить кэш обратных ссылок learningmap';
$string['freetype_required'] = 'Для запуска mod_learningmap требуется расширение FreeType для GD.';
$string['groupmode'] = 'Групповой режим';
$string['groupmode_help'] = 'При включённом групповом режиме, если хотя бы один член группы завершил текущий элемент курса, становятся доступными места, к которым проложен путь.';
$string['hiddenactivitywarning'] = 'Этот элемент курса скрыт от студентов';
$string['hidepaths'] = 'Скрыть пути';
$string['hidepaths_help'] = 'Пути становятся скрытыми от студента, хотя доступность мест зависит от них по-прежнему.';
$string['hidestroke'] = 'Скрыть обводку для мест';
$string['hidestroke_help'] = 'Этот параметр скрывает обводку для мест.';
$string['hover'] = 'Анимация при наведении';
$string['hover_help'] = 'Этот параметр добавляет анимацию для мест при наведении курсора.';
$string['intro'] = 'Карта обучения';
$string['intro_help'] = '<ul><li><b>Добавить новое место.</b> Дважды щелкните фон.</li>
<li><b>Добавить путь.</b> Одиночный щелчок в двух местах.</li>
<li><b>Удалить место/путь.</b> Дважды щелкните по нему.</li>
<li><b>Изменить свойства места:</b> Щелкните его правой кнопкой мыши.</li></ul>';
$string['learningmap'] = 'Карта обучения';
$string['learningmap:addinstance'] = 'Добавить новую карту обучения';
$string['learningmap:view'] = 'Просматривать карту обучения';
$string['loading'] = 'Загружается карта обучения...';
$string['modulename'] = 'Карта обучения';
$string['modulename_help'] = 'Модуль «Карта обучения» позволяет структурировать активные элементы в курсе как места на карте, соединенные путями. Некоторые места являются стартовыми и показаны изначально. Другие места и пути отображаются, когда элементы связанных мест завершены.';
$string['modulenameplural'] = 'Карты обучения';
$string['name'] = 'Название карты обучения';
$string['name_help'] = 'Название карты обучения отображается только в том случае, если флажок «Показывать карту на странице курса» не установлен.';
$string['nocompletion'] = 'Нет завершения с элементами карты';
$string['nocompletionenabled'] = 'Недоступно, так как завершение не включено';
$string['ownprogress'] = 'Мой прогресс';
$string['paths'] = 'Пути';
$string['places'] = 'Места';
$string['pluginadministration'] = 'Управление Картой обучения';
$string['pluginname'] = 'Карта обучения';
$string['pulse'] = 'Пульсирующая анимация для непосещённых мест';
$string['pulse_help'] = 'Этот параметр добавляет анимацию для выделения непосещённых мест.';
$string['showall'] = 'Показывать все пути и места';
$string['showall_help'] = 'Сразу со старта видны все пути и места на карте. Места и пути, которые пока недоступны, выделены серым цветом.';
$string['showbacklink'] = 'Показывать обратные ссылки на страницах модулей курса';
$string['showbacklink_help'] = 'Эта опция отображает ссылку «Назад к карте обучения» на каждой странице модуля курса, относящегося к карте.';
$string['showmaponcoursepage'] = 'Показать карту на странице курса';
$string['showmaponcoursepage_help'] = 'Если отмечено, карта обучения будет отображаться на странице курса (как метка). В противном случае будет ссылка, и карта будет отображаться на отдельной странице.';
$string['showtext'] = 'Показывать названия мест';
$string['showtext_help'] = 'Этот параметр показывает названия элементов курса рядом с отметками мест. Текст можно перемещать, он автоматически обновляется при изменении названия.';
$string['showwaygone'] = 'Выделить путь';
$string['showwaygone_help'] = 'Эта опция отображает путь, пройденный участником по карте (в порядке времени прохождения).';
$string['slicemode'] = 'Постепенное открытие карты';
$string['slicemode_help'] = 'Карта открывается постепенно, когда становятся доступными новые места. Скрытые части карты покрыты туманом. Туман полностью рассеется, как только станут доступны все места.';
$string['startingplace'] = 'Стартовое место';
$string['svgcode'] = 'SVG код';
$string['targetplace'] = 'Целевое место';
$string['usecasehelp'] = 'Как использовать карты обучения';
$string['usecaselink'] = 'Ссылка на страницу, объясняющую использование карты обучения';
$string['usecheckmark'] = 'Галочка для посещенных мест';
$string['usecheckmark_help'] = 'Посещённые места дополнительно будут отмечены галочкой.';
$string['visited'] = 'Посещено';
