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
 * Strings for component 'report_benchmark', language 'ru', version '4.4'.
 *
 * @package     report_benchmark
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminreport'] = 'Тест производительности системы';
$string['benchfail'] = '<b>Осторожно!</b><br/>Производительность вашей установки Moodle не является оптимальной.';
$string['benchmark'] = 'Тест производительности';
$string['benchmark:view'] = 'Посмотреть отчет о тестах';
$string['benchshare'] = 'Поделитесь своим результатом на форуме';
$string['benchsuccess'] = '<b>Поздравляем!</b><br /> Производительность вашей установки Moodle, по-видимому, идеальна.';
$string['cloadmoreinfo'] = 'Загрузка файла конфигурации «config.php»';
$string['cloadname'] = 'Время загрузки Moodle';
$string['coursereadmoreinfo'] = 'Прочитайте курс несколько раз, чтобы проверить скорость чтения базы данных.';
$string['coursereadname'] = 'Эффективность чтения курса';
$string['coursewritemoreinfo'] = 'Напишите в курс несколько раз, чтобы проверить скорость записи в базу данных.';
$string['coursewritename'] = 'Эффективность записи в курс';
$string['description'] = 'Описание';
$string['duration'] = '{$a} сек.';
$string['during'] = 'Время в секундах';
$string['filereadmoreinfo'] = 'Прочитайте файл несколько раз, чтобы проверить скорость чтения из временной папки Moodle.';
$string['filereadname'] = 'Эффективность чтения файла';
$string['filewritemoreinfo'] = 'Запишите файл несколько раз, чтобы проверить скорость записи во временную папку Moodle.';
$string['filewritename'] = 'Эффективность создания файлов';
$string['info'] = 'Этот тест должен длиться менее 1 минуты и будет прерван через 2 минуты. Пожалуйста, подождите, пока не появятся результаты.';
$string['infoaverage'] = 'Рекомендуется выполнить этот тест несколько раз для получения достоверного среднего значения. Если производительность вашей системы не оптимальна, рекомендации по её улучшению можно найти в <a href="https://docs.moodle.org/ru/Performance_recommendations" target="_blank">документации Moodle</a>.';
$string['infodisclaimer'] = 'Не запускайте этот тест на работающей системе, так как это может привести к значительному снижению производительности.';
$string['infodisclamer'] = 'Не рекомендуется запускать этот тест на работающей системе.';
$string['limit'] = 'Допустимый предел';
$string['loginguestmoreinfo'] = 'Измеряет время загрузки страницы входа гостевой учетной записи';
$string['loginguestname'] = 'Время входа для гостевой учетной записи';
$string['loginusermoreinfo'] = 'Измеряет время загрузки поддельной учетной записи пользователя';
$string['loginusername'] = 'Время входа для поддельной учетной записи пользователя';
$string['modulename'] = 'Тест производительности Moodle';
$string['modulenameplural'] = 'Тесты производительности Moodle';
$string['notificatiopagedownloadmoreinfo'] = 'Загрузите страницу уведомлений интерфейса администрирования несколько раз, чтобы проверить скорость веб-сервера.';
$string['notificatiopagedownloadname'] = 'Время загрузки страницы уведомлений интерфейса администрирования';
$string['over'] = 'Критический предел';
$string['pluginname'] = 'Тест производительности Moodle';
$string['points'] = '{$a} очков';
$string['privacy:no_data_reason'] = 'Плагин отчета теста производительности не хранит никаких персональных данных.';
$string['processormoreinfo'] = 'Вызов цикличной функции PHP для проверки скорости процессора';
$string['processorname'] = 'Скорость обработки процессора';
$string['querytype1moreinfo'] = 'Проверка скорости базы данных при выполнении сложного SQL-запроса';
$string['querytype1name'] = 'Сложный SQL-запрос (#1)';
$string['querytype2moreinfo'] = 'Проверка скорости базы данных при выполнении сложного SQL-запроса';
$string['querytype2name'] = 'Сложный SQL-запрос (#2)';
$string['redo'] = 'Запустить тест снова';
$string['score'] = 'Оценка';
$string['scoremsg'] = 'Оценка теста производительности';
$string['seconde'] = '{$a} с';
$string['slowdatabaselabel'] = 'База данных кажется слишком медленной.';
$string['slowdatabasesolution'] = '<ul><li>Проверьте <a href="https://mariadb.com/kb/en/library/mysqlcheck/" target="_blank">целостность базы данных</a>.</li><li>Оптимизируйте <a href="https://mariadb.com/kb/en/library/optimization-and-tuning/" target="_blank">базу данных</a>.</li></ul>';
$string['slowharddrivelabel'] = 'Жесткий диск кажется слишком медленным.';
$string['slowharddrivesolution'] = '<ul><li>Проверьте состояние жесткого диска и/или временной папки</li><li>Смените жесткий диск или временную папку</li></ul>';
$string['slowprocessorlabel'] = 'Процессор кажется слишком медленным.';
$string['slowprocessorsolution'] = '<ul><li>Убедитесь, что конфигурация вашего оборудования достаточна для запуска Moodle.</li></ul>';
$string['slowserverlabel'] = 'Веб-сервер кажется слишком медленным.';
$string['slowserversolution'] = '<ul><li>Установите свой Apache в <a href="https://httpd.apache.org/docs/2.4/en/mpm.html" target="_blank"> режим мультипроцессорной обработки</a> или переключитесь на <a href="https://nginx.org /" target="_blank">NGinx</a>.</li><li>Если Moodle установлен на вашем компьютере, тщательно настройте свой антивирус, чтобы он не проверял систему Moodle.</li></ul>';
$string['slowweblabel'] = 'Страница входа загружается слишком медленно.';
$string['slowwebsolution'] = '<ul><li><a href="/admin/purgecaches.php" target="_blank">Очистить кэш Moodle</a>.</li></ul>';
$string['start'] = 'Начать тест';
$string['total'] = 'Общее время';
