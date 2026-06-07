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
 * Strings for component 'search_elastic', language 'ru', version '4.4'.
 *
 * @package     search_elastic
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminsettings'] = 'Настройки плагина';
$string['advsettings'] = 'Дополнительные настройки';
$string['basicsettings'] = 'Основные настройки';
$string['enrichdesc'] = 'Глобальный поиск может дополнить индексированные данные, которые используются для поиска, извлекая текст и другие данные из файлов. Извлечение данных из файлов в Moodle регулируется следующими группами настроек.';
$string['enrichsettings'] = 'Настройки дополнения данных';
$string['fileindexing'] = 'Разрешить индексацию файлов';
$string['fileindexing_help'] = 'Разрешает индексацию файлов этому плагину.';
$string['fileindexselect'] = 'Файловый обработчик';
$string['fileindexselect_help'] = 'Выберите файловый обработчик или службу, которая будет извлекать текст из файлов. Форма обновится с настройками для выбранной службы.';
$string['fileindexsettings'] = 'Индексирование файлов';
$string['fileindexsettingsdesc'] = 'Перед обработкой файлов и извлечением их содержимого и информации необходимо включить индексацию файлов для глобального поиска.';
$string['hostname'] = 'Имя хоста';
$string['hostname_help'] = 'Полное доменное имя конечной точки поисковой системы Elasticsearch';
$string['imageindexselect'] = 'Обработчик изображений';
$string['imageindexselect_help'] = 'Выберите обработчик изображений или службу, которая будет извлекать информацию из ваших изображений. Форма обновится с настройками для выбранной службы.';
$string['imagerecognitionsettings'] = 'Распознавание изображений';
$string['imagerecognitionsettingsdesc'] = 'Распознавание изображений извлекает сведения о содержимом изображения и добавляет их в поисковый индекс. Эти настройки определяют, какой процесс или служба используется для извлечения данных из изображения и как данные изображения добавляются в поисковую систему.';
$string['index'] = 'Индекс';
$string['index_help'] = 'Индекс пространства имен для хранения данных поиска в бэкэнде';
$string['logging'] = 'Регистрация запросов';
$string['logging_help'] = 'Если включено, все поисковые запросы и необработанные результаты Elasticsearch будут добавлены в журнал ошибок';
$string['none'] = 'Нет';
$string['order_newest'] = 'Сначала новые';
$string['order_oldest'] = 'Сначала старые';
$string['pluginsettings'] = 'Настройки плагина';
$string['port'] = 'Порт';
$string['port_help'] = 'Порт конечной точки поисковой системы Elasticsearch';
$string['region'] = 'Регион';
$string['region_help'] = 'Регион AWS, в котором находится экземпляр Elasticsearch, например, ap-southeast-2';
$string['searchsettings'] = 'Настройки поиска';
$string['sendsize'] = 'Размер запроса';
$string['sendsize_help'] = 'Некоторые поставщики Elasticsearch, такие как AWS, имеют ограничение на размер полезной нагрузки HTTP. Поэтому мы ограничиваем его размер в байтах.';
$string['signing'] = 'Включить подписывание запросов';
$string['signing_help'] = 'При включении Moodle будет подписывать каждый запрос к Elasticsearch с использованием указанных ниже учетных данных';
$string['signingkeyid'] = 'ID ключа';
$string['signingkeyid_help'] = 'Идентификатор ключа, используемый для подписывания запросов.';
$string['signingsecretkey'] = 'Секретный ключ';
$string['signingsecretkey_help'] = 'Секретный ключ, используемый для подписывания запросов.';
$string['signingsettings'] = 'Настройки подписывания запросов';
$string['textextractionsettings'] = 'Извлечение текста';
$string['textextractionsettingsdesc'] = 'Извлечение текста берет фактический текст, содержащийся в файле, и добавляет его в качестве содержимого, доступного для поиска, в поисковый индекс.';
$string['tikahostname'] = 'Имя хоста Tika';
$string['tikahostname_help'] = 'Полное доменное имя конечной точки Apache Tika';
$string['tikaport'] = 'Порт Tika';
$string['tikaport_help'] = 'Порт конечной точки Apache Tika';
$string['tikasendsize'] = 'Максимальный размер файла';
$string['tikasendsize_help'] = 'Отправка больших файлов в Tika может вызвать проблемы с нехваткой памяти. Поэтому мы ограничиваем их размер в байтах.';
$string['usesimplequery'] = 'Использовать простой запрос';
$string['usesimplequery_help'] = 'Простые запросы сокращают количество используемых операторов, но допускают частичные возвраты по неправильно сформированным запросам.

Информация о стандартном синтаксисе: {$a->complex}

Информация о простом синтаксисе: {$a->simple}';
$string['wildcardend'] = 'Подстановочный символ в конце';
$string['wildcardend_help'] = 'При включении Moodle будет добавлять неявные подстановочные знаки в конец поисковых терминов. Это может улучшить поведение поиска. Например: поиск по запросу «math» станет «math*» перед отправкой в поисковую систему. Это означает, что поиск теперь будет соответствовать «math», «maths» и «mathematics».';
$string['wildcardstart'] = 'Подстановочный символ в начале';
$string['wildcardstart_help'] = 'При включении Moodle будет добавлять неявные подстановочные знаки в начало поисковых терминов. Это может улучшить поведение поиска. Например: поиск «script» станет «*script» перед отправкой в поисковую систему. Это означает, что поиск теперь будет соответствовать «script» и «description».';
