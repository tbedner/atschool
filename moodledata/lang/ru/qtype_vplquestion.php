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
 * Strings for component 'qtype_vplquestion', language 'ru', version '4.4'.
 *
 * @package     qtype_vplquestion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaloptions'] = 'Дополнительные настройки';
$string['allornothing'] = 'Все или ничего';
$string['allowasynceval'] = 'Разрешить асинхронные оценки';
$string['allowasynceval_desc'] = 'Если эта функция включена, учителя смогут настраивать вопросы ВЛП (VPL) для оценки с помощью специальных заданий (ad-hoc).';
$string['answertemplate'] = 'Шаблон ответа';
$string['answertemplate_help'] = 'Напишите здесь, какой код будет предварительно введен в поле для ответов учащегося';
$string['cannotimportquestionvplnotfound'] = 'Предупреждение об импорте: идентификатор модуля VPL, указанный в вопросе VPL "{$a}", неверен.';
$string['cannotimportquestionvplunreachable'] = 'Предупреждение об импорте: VPL, указанный в вопросе VPL "{$a}", отсутствует в этом курсе';
$string['cfg:evaluationtries'] = 'Количество внутренних попыток для оценки';
$string['cfg:evaluationtries_help'] = 'Если задано значение больше 1, то сервер несколько раз попытается оценить вопрос, если оценка завершится неудачей (так как могут возникнуть ошибки при оценке).';
$string['choose'] = 'Выберите ...';
$string['closerecievednoretrieve'] = 'Операция прервана сервером - исполнителем кода. Возможно, были превышены лимиты ресурсов для выполнения.
Причина: {$a}';
$string['compilation'] = 'Компиляция:';
$string['correction'] = 'Исправление';
$string['deletesubmissions'] = 'Удалить отправленные материалы ВЛП (VPL)';
$string['deletesubmissions_help'] = 'Следует ли отклонять ответы на ВЛП-вопросы, отправленные в самом модуле ВЛП (не в тесте), при оценке вопроса.<br>
Внимание: при оценке вопроса все ответы, отправленные пользователем в базовом модуле ВЛП, будут удалены. Убедитесь, что базовый модуль ВЛП используется только для ВЛП-вопросов.';
$string['editorfontsize'] = 'Размер шрифта редактора:';
$string['editoroptions'] = 'Настройки редактора';
$string['editortheme'] = 'Тема редактора:';
$string['errorvplgrade'] = 'Оценка ВЛП установлена неправильно (должен быть установлен тип оценки «Балл»).';
$string['evaluating'] = 'Этот вопрос в настоящее время оценивается...';
$string['evaluatingsoon'] = 'Этот вопрос будет оценен в ближайшее время...';
$string['evaluatingsoontime'] = 'Этот вопрос скоро будет оценен. Примерное время ожидания: {$a}.';
$string['evaluation'] = 'Оценка:';
$string['evaluationdetails'] = 'Детали оценки:';
$string['evaluationerror'] = 'Ошибка оценки:';
$string['eventquestionasyncevaluated'] = 'ВЛП-вопрос, оцененный с помощью специальной задачи ("ad-hoc")';
$string['eventquestionevaluationfailed'] = 'Не удалось выполнить оценку ВЛП-вопроса';
$string['eventquestionevaluationqueued'] = 'ВЛП-вопрос находится в очереди на оценивание';
$string['execerror'] = 'Ошибка выполнения:';
$string['execfiles'] = 'Исполняемые файлы';
$string['execfiles_help'] = 'Здесь вы можете редактировать исполняемые файлы. Они отправляются только во время оценки (и предварительной проверки, совпадают ли файлы), а не во время запуска (за исключением файлов, указанных как «сохранять при запуске» в ВЛП).<br>
Чтобы добавить файлы, добавьте их в ВЛП в качестве исполняемых файлов.<br>
Файлы, помеченные как «Наследовать из ВЛП», не сохраняются и используют содержимое соответствующего файла выполнения из модуля ВЛП.<br>
<em>Устаревшее</em>: Файлы, начинающиеся с "UNUSED" (НЕИСПОЛЬЗУЕМЫЙ), фактически наследуют содержимое файла ВЛП. Рассмотрите возможность использования функции «Наследовать из ВЛП» для этих файлов.';
$string['execfilesevalsettings'] = 'Исполняемые файлы и параметры оценки';
$string['execution'] = 'Ошибка выполнения:';
$string['flagifproblem'] = 'Если вы считаете, что возникла проблема с вопросом, пожалуйста, отметьте ее и свяжитесь со своим преподавателем.';
$string['gradehaschangedreload'] = 'Возможно, оценка недавно изменилась. Вы можете <a {$a->aattr}>перезагрузить страницу</a>, чтобы увидеть новую оценку.';
$string['gradetypeerror'] = 'Похоже, что в результате оценки была получена нечисловая оценка.';
$string['gradingmethod'] = 'Оценивание';
$string['gradingmethod_help'] = 'Определяет метод оценки для этого вопроса.
<ul><li>Если выбрано "Все или ничего", учащийся получит либо 100%, либо 0% от оценки за этот вопрос, в зависимости от того, получил ли он высшую оценку VPL или нет.</li>
<li>Если выбрано значение "Масштабирование", оценка учащегося за этот вопрос будет соответствовать его баллу VPL.</li></ul>';
$string['informationtext'] = 'Вопрос VPL';
$string['inheritfromvpl'] = 'Наследовать из ВЛП';
$string['lastservermessage'] = 'Последнее полученное сообщение сервера-исполнителя: «{$a}»';
$string['merge'] = 'Слияние';
$string['noanswertag'] = 'Требуемый тег {{ANSWER}} не найден. Пожалуйста, укажите его в шаблоне в месте, где будет размещен код студента.';
$string['nogradeerror'] = 'При оценке вопроса произошла ошибка (оценка не получена).
{$a}';
$string['noprecheck'] = 'Без предварительной проверки';
$string['noprevplrun'] = 'В этом шаблоне ВЛП нет файла pre_vpl_run.sh!';
$string['noreqfile'] = 'Этот шаблон ВЛП не содержит требуемого файла!';
$string['noreqfile_help'] = 'Для ВЛП-вопросов требуется, чтобы в шаблоне ВЛП был один требуемый файл. Вопрос не будет работать при текущем состоянии этого шаблона.';
$string['overwrite'] = 'Перезаписать';
$string['overwriteexecfile'] = 'Заменить';
$string['pleaseanswer'] = 'Пожалуйста, предоставьте ответ.';
$string['pluginname'] = 'ВЛП-вопрос';
$string['pluginname_help'] = 'ВЛП-вопросы позволяют выполнять простые упражнения по программированию.<br>
Они работают с модулями ВЛП, но разработаны так, чтобы выглядеть намного проще для студентов.';
$string['pluginnameadding'] = 'Добавление ВЛП-вопроса';
$string['pluginnameediting'] = 'Редактирование ВЛП-вопроса';
$string['pluginnamesummary'] = 'ВЛП-вопросы позволяют выполнять простые упражнения по программированию.<br>
Они работают с модулями ВЛП, но разработаны так, чтобы выглядеть намного проще для студентов.';
$string['possiblesolution'] = 'Возможное решение:';
$string['precheck'] = 'Предварительная проверка';
$string['precheckexecfiles'] = 'Исполняемые файлы предварительной проверки';
$string['precheckhasownfiles'] = 'В ходе предварительной проверки используются отдельные исполняемые файлы';
$string['precheckhassamefiles'] = 'В ходе предварительной проверки используются те же исполняемые файлы, что и при проверке';
$string['qvplbase'] = 'Шаблон ВЛП-вопроса';
$string['servermessages'] = 'Сообщения сервера:
{$a}';
$string['teachercorrection_help'] = 'Напишите здесь свои замечания по этому вопросу.';
$string['templatecontext'] = 'Править шаблон';
$string['templatevpl'] = 'Шаблон ВЛП (VPL)';
$string['templatevplchangeprompt'] = 'Что вы хотите сделать с текущим содержимым шаблона и файлами, используемыми при выполнении?';
$string['unexpectedendofws'] = 'Неожиданное завершение связи с сервером-исполнителем кода.
Причина: {$a}';
$string['unexpectederror'] = 'Во время оценки произошла непредвиденная ошибка.
{$a}';
$string['useasyncevaluation'] = 'Использовать асинхронную оценку';
$string['useasyncevaluation_help'] = 'Если установлено значение «Да», то оценка вопроса будет производиться с помощью специальных асинхронных заданий (ad-hoc). Это позволяет повысить оперативность проведения теста.';
$string['validateonsave_help'] = 'Если этот флажок установлен, предоставленный код будет протестирован на основе предоставленных тестовых примеров перед сохранением этого вопроса.';
$string['vplnotavailablewarning'] = 'Предупреждение!  Модуль ВЛП (VPL), на котором основан этот вопрос, недоступен. Возможно, вопрос не работает должным образом.';
$string['vplnotfounderror'] = 'Ошибка! Не удалось создать экземпляр ВЛП (VPL), на котором основан этот вопрос:<br>{$a}';
$string['vplnotincoursewarning'] = 'Предупреждение! Модуль ВЛП (VPL), на котором основан этот вопрос, отсутствует в этом курсе. Возможно, вопрос не работает должным образом.';
$string['wsconnectionerror'] = 'Не удалось подключиться к серверу.';
$string['wshandshakeerror'] = 'Не удалось установить связь веб-сокета с сервером.';
$string['wsreaderror'] = 'Не удалось выполнить чтение из веб-сокета.';
