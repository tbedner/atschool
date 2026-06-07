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
 * Strings for component 'bacs', language 'ru', version '4.4'.
 *
 * @package     bacs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Действия';
$string['actionswithcontest'] = 'Действия с конкурсом';
$string['add'] = 'Добавить';
$string['advancedcontestsettings'] = 'Расширенные настройки конкурса';
$string['advancedsettingsmessage1'] = 'Эта секция предоставляет прямой доступ для осуществления сложных операций с данными конкурса. Например, быстрое копирование конкурса, отладка или добавление задач, отсутствующих в базе данных.';
$string['advancedsettingsmessage2'] = 'Обратите внимание, что другие компоненты не отслеживают изменения в этих полях и перезаписывают их содержимое при выполнении большинства операций.';
$string['advancedsettingsmessage3'] = 'Используйте это только в том случае, если вы знаете, что делаете.';
$string['advancedwarning'] = 'Внимание!';
$string['allcollections'] = 'Все коллекции';
$string['alltasks'] = 'Все задачи';
$string['alltasksfrom'] = 'Все задачи из';
$string['amountofaccepted'] = 'Количество решивших';
$string['amountofpretests'] = 'Количество предварительных тестов';
$string['amountoftests'] = 'Количество тестов';
$string['amountoftried'] = 'Количество попытавшихся';
$string['applyfilter'] = 'Применить фильтр';
$string['author'] = 'Автор';
$string['backtosubmit'] = 'Назад к посылке';
$string['backtosubmits'] = 'Назад к посылкам';
$string['bacs:addinstance'] = 'Добавлять  конкурсы в курс и удалять их из него';
$string['bacs:edit'] = 'Изменять любые настройки конкурса, перепроверять решения';
$string['bacs:readtasks'] = 'Просматривать полные условия любых задач в конкурсе';
$string['bacs:submit'] = 'Отправлять решения любых задач в конкурсе';
$string['bacs:view'] = 'Просматривать задачи и свои посылки в конкурсе';
$string['bacs:viewany'] = 'Просматривать детальную информацию о любой посылке в конкурсе';
$string['beforethecontest'] = 'До начала конкурса';
$string['bright_brighttheme'] = 'Светлая';
$string['cannotviewsubmit'] = 'Нельзя посмотреть эту посылку';
$string['changegrouptosubmit'] = 'Для отправки решений вам нужно выбрать группу, членом которой вы являетесь.';
$string['charactermustbeadded'] = 'этот символ должен быть добавлен';
$string['charactermustberemoved'] = 'этот символ должен быть удален';
$string['chartdayhourdistribution'] = 'Диаграмма распределения по часам дня';
$string['chartverdicts'] = 'Диаграмма вердиктов';
$string['choosetask'] = 'Выберите задачу';
$string['clear'] = 'Очистить';
$string['clearform'] = 'Очистить форму';
$string['compare'] = 'Сравнить';
$string['comparison'] = 'Сравнение';
$string['compilermessage'] = 'Сообщение компилятора';
$string['configmaxselectableyear'] = 'Максимальный год, который можно выбрать во времени начала или конца конкурса на странице его настроек';
$string['configminselectableyear'] = 'Минимальный год, который можно выбрать во времени начала или конца конкурса на странице его настроек';
$string['configpreferedlanguage'] = 'Языки, которые будут использоваться по умолчанию для отображения условий задач';
$string['configsybonapikey'] = 'Ключ Sybon API используется при отправке решений, получения языков программирования и задач';
$string['contesthasstartednotification'] = 'Конкурс начался. Хотите войти в конкурс?';
$string['contestmode'] = 'Режим конкурса';
$string['contestname'] = 'Название конкурса';
$string['contestsettings'] = 'Настройки конкурса';
$string['contesttasks'] = 'Задачи конкурса';
$string['count'] = 'Количество';
$string['course'] = 'Курс';
$string['coverssametests'] = 'покрывает те же тесты, что и новая группа';
$string['dark_darktheme'] = 'Темная';
$string['dashboard'] = 'Панель инструментов';
$string['dateandtime'] = 'Дата и время';
$string['days_morethanxdays'] = 'дней';
$string['default_defaulttheme'] = 'Стандартная';
$string['delete'] = 'Удалить';
$string['detectincidents'] = 'Выявлять инциденты';
$string['devirtualize'] = 'Отменить виртуальное участие';
$string['devirtualizewarning'] = 'Вы уверены что хотите удалить виртуальное участие? Посылки пользователя НЕ будут удалены. Данные о виртуальном участии будет нельзя восстановить.';
$string['diagnostics:check'] = 'Проверка';
$string['diagnostics:deprecated_tasks_msg'] = 'Проверка устаревших задач. Доступно устаревших задач: {$a}';
$string['diagnostics:duplicate_tasks_msg'] = 'Проверка дубликатов задач. Должно быть заменено задач - {$a->tasks_to_be_replaced} / дубликатов без замены - {$a->tasks_without_replacement} / задач с одинаковыми названиями - {$a->tasks_with_the_same_name}';
$string['diagnostics:duration'] = 'Длительность';
$string['diagnostics:error'] = 'Ошибка';
$string['diagnostics:message'] = 'Сообщение';
$string['diagnostics:milliseconds_short'] = 'мс';
$string['diagnostics:ok'] = 'OK';
$string['diagnostics:showdetailedlogs'] = 'Показать детальные логи';
$string['diagnostics:status'] = 'Статус';
$string['diagnostics:sybon_api_collections_msg'] = 'Проверка Sybon API задач. Доступно коллекций задач: {$a}';
$string['diagnostics:sybon_api_compilers_msg'] = 'Проверка Sybon API языков. Доступно компиляторов/языков: {$a}';
$string['diagnostics:sybon_api_submits_msg'] = 'Проверка Sybon API посылок. ID Sybon тестовой посылки: {$a}';
$string['diagnostics:sybon_api_submits_msg_no_submits'] = 'Проверка Sybon API посылок: нет доступных посылок. Должна быть доступна хотя бы одна посылка (не «В очереди») для проверки Sybon API посылок';
$string['diagnostics:task_pretests_msg'] = 'Проверка предварительных тестов задач. Всего задач - {$a->tasks_in_total} / задач с неверным количеством предварительных тестов - {$a->tasks_with_wrong_pretests_count} / задач с неверной нумерацией предварительных тестов - {$a->tasks_with_wrong_pretests_index} / задач без предварительных тестов - {$a->tasks_without_pretests}';
$string['diagnostics:task_statement_format_msg'] = 'Проверка форматов условий задач. {$a->with_doc} в DOC(DOCX) / {$a->with_pdf} в PDF / {$a->with_html} в HTML / {$a->with_other_format} в других форматах';
$string['diagnostics:test_points_strings_msg'] = 'Проверка настроек задач в конкурсах. Всего записей - {$a->records_in_total} / с нестандартными баллами -  {$a->records_with_custom_points} / задач не найдено - {$a->records_with_missing_task} /  с несовпадающими баллами - {$a->records_mismatched}';
$string['diagnostics:warning'] = 'Внимание';
$string['download'] = 'Скачать';
$string['duplicatetasks'] = 'Повторяющиеся задачи запрещены!';
$string['editortheme'] = 'Тема редактора';
$string['endtime'] = 'Время конца';
$string['entercomment'] = 'Введите комментарий:';
$string['entercontest'] = 'Войти в конкурс';
$string['entercontestwithoutvirtual'] = 'Войти в конкурс без виртуального участия';
$string['enterpoints'] = 'Введите баллы:';
$string['enterverdict'] = 'Введите вердикт:';
$string['errordeletingtask'] = 'Ошибка удаления задачи с ID=';
$string['fillwithintegers'] = 'Все поля должны быть заполнены целыми неотрицательными числами.';
$string['format'] = 'Формат';
$string['from'] = 'Время начала конкурса';
$string['fromshort'] = 'От';
$string['futurepointsnotification'] = 'Обратите внимание, что изменение стоимости тестов не повлияет на все предыдущие посылки. Вам необходимо нажать «Пересчитать баллы» в меню «Действия» для того, чтоб применить новые баллы за тесты к старым посылкам.';
$string['generalnopermission'] = 'У вас нет прав на эту операцию!';
$string['gotogroupsettings'] = 'Перейти к настройкам для отдельных групп';
$string['groupname'] = 'Название группы';
$string['groupsettingsarenotused'] = 'Настройки для отдельных групп не используются';
$string['groupsettingsareused'] = 'Для {$a->with_group_settings} из {$a->total_count} групп используются отдельные настройки';
$string['hideinactive'] = 'Скрыть неактивных';
$string['hidesolution'] = 'Скрыть решение';
$string['hideupsolving'] = 'Скрыть дорешивание';
$string['id'] = 'ID';
$string['incident'] = 'Инцидент';
$string['incidentdetectiondisabledalert'] = 'Автоматическое выявление инцидентов для этого конкурса отключено. Включите параметр «Обнаружение инцидентов» в секции «Инциденты» в настройках конкурса.';
$string['incidents'] = 'Инциденты';
$string['incidentssettings'] = 'Настройки инцидентов';
$string['input'] = 'Ввод';
$string['invalidrange'] = 'Некорректный диапазон!';
$string['isolatedparticipants'] = 'Изолированные участники';
$string['isolateparticipants'] = 'Изолировать участников';
$string['language'] = 'Язык';
$string['lastimprovedat'] = 'Улучшено в';
$string['letterlimit26'] = 'Список ограничен максимум 26 буквами. Добавлять больше нельзя.';
$string['letterlistempty'] = 'Ошибка удаления последней буквы: список букв пуст';
$string['linktothissubmission'] = 'Ссылка на эту посылку';
$string['load_from_file'] = 'Загрузить из файла';
$string['maximumtasks26'] = 'Конкурс ограничен максимум 26 задачами. Добавлять больше нельзя.';
$string['maxselectableyear'] = 'Максимальный доступный год';
$string['memory'] = 'Память';
$string['memorylimit'] = 'Лимит памяти';
$string['method'] = 'Метод';
$string['minselectableyear'] = 'Минимальный доступный год';
$string['modulename'] = 'Конкурс BACS';
$string['modulename_help'] = 'BACS — это плагин, который что-то делает. Конечно, это лучше, чем ничего.';
$string['modulenameplural'] = 'Конкурсы BACS';
$string['more'] = 'Больше';
$string['morethan'] = 'больше чем';
$string['mysubmits'] = 'Мои посылки';
$string['n'] = 'N';
$string['negativepointsnotallowed'] = 'Отрицательные баллы не поддерживаются';
$string['nopermissiontosubmit'] = 'У вас нет прав на отправку решений.';
$string['not_found'] = 'Не найдено!';
$string['not_started'] = 'Конкурс не начался!';
$string['open'] = 'Открыть';
$string['outputexpected'] = 'Ожидаемый вывод';
$string['outputreal'] = 'Реальный вывод';
$string['penalty'] = 'Штраф';
$string['pluginadministration'] = 'Настройки BACS';
$string['plugindiagnosticspage'] = 'Страница диагностики плагина';
$string['pluginname'] = 'Конкурсы BACS';
$string['points'] = 'Баллы';
$string['pointsforfullsolution'] = 'Баллов за полное решение';
$string['pointsformissingtask'] = 'Нельзя загрузить баллы за тесты для отсутствующей задачи.';
$string['pointspergroup'] = 'Баллов на группу';
$string['pointspertest'] = 'Баллов за тест';
$string['preferedlanguage'] = 'Предпочитаемые языки';
$string['presolving'] = 'Разрешить прорешивание до начала конкурса';
$string['pretest'] = 'Предварительный тест';
$string['privacy:metadata:bacs'] = 'Хранит информацию о конкурсах и мониторе';
$string['privacy:metadata:bacs:standings'] = 'JSON-закешированная информация о всех посылках, которые отображены в мониторе';
$string['privacy:metadata:bacs_group_info'] = 'Хранит специальные настройки для групп и монитор группы';
$string['privacy:metadata:bacs_group_info:standings'] = 'JSON-закешированная информация о всех посылках, которые отображены в мониторе группы';
$string['privacy:metadata:bacs_submits'] = 'Хранит информацию о посылках';
$string['privacy:metadata:bacs_submits:contest_id'] = 'ID конкурса, в котором была сделана посылка';
$string['privacy:metadata:bacs_submits:group_id'] = 'ID группы, в которой была сделана посылка (или ноль, если группы не использовались)';
$string['privacy:metadata:bacs_submits:info'] = 'Сообщение компилятора или специальная информация';
$string['privacy:metadata:bacs_submits:lang_id'] = 'ID языка программирования';
$string['privacy:metadata:bacs_submits:max_memory_used'] = 'Максимальное потребление памяти среди всех тестов в байтах';
$string['privacy:metadata:bacs_submits:max_time_used'] = 'Максимальное время исполнения среди всех тестов в миллисекундах';
$string['privacy:metadata:bacs_submits:points'] = 'Баллы';
$string['privacy:metadata:bacs_submits:result_id'] = 'Результат проверки';
$string['privacy:metadata:bacs_submits:source'] = 'Исходный код';
$string['privacy:metadata:bacs_submits:submit_time'] = 'Время, когда была сделана посылка';
$string['privacy:metadata:bacs_submits:task_id'] = 'ID задачи';
$string['privacy:metadata:bacs_submits:test_num_failed'] = 'Номер первого непройденного теста';
$string['privacy:metadata:bacs_submits:user_id'] = 'Автор посылки';
$string['privacy:metadata:bacs_submits_tests'] = 'Хранит информацию о всех запусках решения на всех тестах задачи';
$string['privacy:metadata:bacs_submits_tests:memory_used'] = 'Потребление памяти в байтах';
$string['privacy:metadata:bacs_submits_tests:status_id'] = 'Результат проверки';
$string['privacy:metadata:bacs_submits_tests:submit_id'] = 'ID посылки';
$string['privacy:metadata:bacs_submits_tests:test_id'] = 'ID теста';
$string['privacy:metadata:bacs_submits_tests:time_used'] = 'Время исполнения в миллисекундах';
$string['privacy:metadata:bacs_submits_tests_output'] = 'Хранит вывод посылки на предварительных тестах';
$string['privacy:metadata:bacs_submits_tests_output:output'] = 'Вывод посылки';
$string['privacy:metadata:bacs_submits_tests_output:submit_id'] = 'ID посылки';
$string['privacy:metadata:bacs_submits_tests_output:test_id'] = 'ID теста';
$string['privacy:metadata:sybon_checking_service'] = 'Используется для запуска решений и получения результатов проверки';
$string['privacy:metadata:sybon_checking_service:lang_id'] = 'ID языка программирования';
$string['privacy:metadata:sybon_checking_service:source'] = 'Исходный код';
$string['privacy:metadata:sybon_checking_service:task_id'] = 'ID задачи';
$string['privacy:metadata:sybon_checking_service:timestamp'] = 'Время, когда посылка была передана на проверку';
$string['prog_lang'] = 'Язык программирования';
$string['programcode'] = 'Код программы';
$string['rawcontesttaskids'] = 'Закодированная строка ID задач';
$string['rawcontesttasktestpoints'] = 'Закодированная строка баллов за тесты';
$string['recalcpoints'] = 'Пересчитать баллы';
$string['recalculateincidents'] = 'Пересчитать инциденты';
$string['recalculatepoints'] = 'Пересчитать баллы';
$string['recalculatepointsfor'] = 'Пересчитать баллы по:';
$string['rejectsubmit'] = 'Отклонить посылку';
$string['rejudge'] = 'Перепроверить';
$string['rejudgesubmits'] = 'Перепроверить посылки';
$string['rejudgesubmitsfor'] = 'Перепроверить посылки по:';
$string['rememberlanguage'] = 'Запомнить выбранный язык';
$string['result'] = 'Результат';
$string['resultsgraph'] = 'График результатов';
$string['search'] = 'Поиск';
$string['seconds_short'] = 'с';
$string['send'] = 'Отправить';
$string['sendforjudgement'] = 'Отправить решение на проверку';
$string['sendinginprogress'] = 'Идет отправка';
$string['sentat'] = 'Отправлено в';
$string['setcomment'] = 'Задать комментарий';
$string['setpoints'] = 'Задать баллы';
$string['settings'] = 'Настройки';
$string['setverdict'] = 'Задать вердикт';
$string['showfirstacceptedflag'] = 'Отображать метку первого верного решения';
$string['showincidentflags'] = 'Отображать инциденты';
$string['showlastimprovementcolumn'] = 'Отображать столбец последнего улучшения результата';
$string['showsolution'] = 'Показать решение';
$string['showsubmitsfor'] = 'Показать посылки по';
$string['showsubmitsuptobest'] = 'Отображать количество попыток до лучшего результата';
$string['showtestingflag'] = 'Отображать метку тестирования';
$string['showupsolving'] = 'Показать дорешивание';
$string['source'] = 'Текст решения';
$string['standings'] = 'Монитор';
$string['standingsmode'] = 'Режим монитора';
$string['standingssettings'] = 'Настройки монитора';
$string['starttime'] = 'Время начала';
$string['startvirtualparticipationnow'] = 'Начать виртуальное участие сейчас';
$string['statement'] = 'Условия';
$string['status'] = 'Статус';
$string['statusfrozen'] = 'Заморожен';
$string['statusnotstarted'] = 'Не начался';
$string['statusover'] = 'Окончен';
$string['statusrunning'] = 'Идет';
$string['statusunknown'] = 'Неизвестен';
$string['submissionsspampenalty'] = 'Вы отправили слишком много посылок! За последние 5 минут вы отправили 50 посылок. Отправка посылок временно запрещена. Попробуйте обновить эту страницу позже.';
$string['submissionsspamwarning'] = 'Вы отправляете много посылок! Если вы отправите 50 посылок в течении 5 минут, то вы временно потеряете возможность отправлять посылки.';
$string['submit_verdict_0'] = 'Неизвестен';
$string['submit_verdict_1'] = 'В очереди';
$string['submit_verdict_10'] = 'Превышено ограничение размера выходных данных';
$string['submit_verdict_11'] = 'Неправильный формат вывода';
$string['submit_verdict_12'] = 'Неправильный ответ';
$string['submit_verdict_13'] = 'Верное решение';
$string['submit_verdict_14'] = 'Некорректный запрос';
$string['submit_verdict_15'] = 'Выводится недостаточно данных';
$string['submit_verdict_16'] = 'Превышено ограничение количества запросов';
$string['submit_verdict_17'] = 'Выводятся лишние данные';
$string['submit_verdict_18'] = 'Посылка отклонена';
$string['submit_verdict_2'] = 'Тестируется';
$string['submit_verdict_3'] = 'Ошибка сервера';
$string['submit_verdict_4'] = 'Ошибка компиляции';
$string['submit_verdict_5'] = 'Ошибка исполнения';
$string['submit_verdict_6'] = 'Ошибка тестирования';
$string['submit_verdict_7'] = 'Превышено ограничение времени исполнения';
$string['submit_verdict_8'] = 'Превышено ограничение реального времени';
$string['submit_verdict_9'] = 'Превышено ограничение памяти';
$string['submitmessagetaskismissing'] = 'Эта задача отсутствует в базе данных Moodle. Удалите эту задачу из конкурса или обновите информацию о доступных задачах.';
$string['submits'] = 'Посылки';
$string['submitsfrom'] = 'Посылки от';
$string['submitslowercase'] = 'посылки';
$string['sumofpoints'] = 'Сумма баллов';
$string['sybonapikey'] = 'Ключ Sybon API';
$string['task'] = 'Задача';
$string['taskdynamics'] = 'Динамика задач';
$string['taskid'] = 'ID задачи';
$string['tasklist'] = 'Список задач';
$string['taskname'] = 'Название задачи';
$string['taskofsubmitismissingincontest'] = 'Задача (ID {$a->taskid}) этой посылки отсутствует в данном конкурсе.
    Вам следует добавить эту задачу обратно в конкурс, если вы хотите, чтобы посылка отображалась правильно.';
$string['taskofsubmitismissingincontestanddb'] = 'Задача (ID {$a->taskid}) этой посылки отсутствует как в данном конкурсе, так и в базе данных Moodle.
    Вам следует обновить информацию о доступных задачах и добавить эту задачу обратно в конкурс, если вы хотите, чтобы посылка отображалась правильно.';
$string['tasks'] = 'Задачи';
$string['test'] = 'Тест';
$string['testgroup'] = 'Группа тестов';
$string['testpoints'] = 'Баллы за тесты';
$string['tests'] = 'Тесты';
$string['therearenoresults'] = 'Нет результатов';
$string['time'] = 'Время';
$string['timelimit'] = 'Лимит времени';
$string['to'] = 'Время конца конкурса';
$string['toshort'] = 'До';
$string['totalincidents'] = 'Всего инцидентов подозрительного поведения';
$string['updatestandings'] = 'Обновить монитор';
$string['uppercaselanguagenotfound'] = 'ЯЗЫК НЕ НАЙДЕН';
$string['uppercasetasknotfound'] = 'ЗАДАЧА НЕ НАЙДЕНА';
$string['upsolving'] = 'Разрешить дорешивание';
$string['upsolving_help'] = 'Студентам будет разрешено посылать решения после конца конкурса. Результаты дорешивания будут показаны отдельно.';
$string['upsolvingisdisabled'] = 'Дорешивание для этого конкурса отключено.';
$string['usecustomtestpoints'] = 'Использовать нестандартные баллы';
$string['usegroupsettings'] = 'Включить специальные настройки для этой группы';
$string['userdynamics'] = 'Динамика участников';
$string['username'] = 'Имя участника';
$string['verdict'] = 'Вердикт';
$string['virtualparticipants'] = 'Виртуальные участники';
$string['virtualparticipantslist'] = 'Список виртуальных участников';
$string['virtualparticipantslistisempty'] = 'Список виртуальных участников пуст.';
$string['virtualparticipation'] = 'Виртуальное участие';
$string['virtualparticipationallow'] = 'Разрешить виртуальное участие';
$string['virtualparticipationallowmsg'] = 'В этом конкурсе разрешено виртуальное участие. Виртуальное участие станет доступным после начала конкурса.';
$string['virtualparticipationalreadyhavesubmits'] = 'Вы не можете начать виртуальное участие из-за того, что у вас уже есть посылки в этом конкурсе.';
$string['virtualparticipationconfirmstartdmsg'] = 'Вы уверены что хотите начать виртуальное участие сейчас? Вы не сможете отменить виртуальное участие после его начала.';
$string['virtualparticipationdisable'] = 'Запретить виртуальное участие';
$string['virtualparticipationdisabledmsg'] = 'Виртуальное участие для этого конкурса отключено.';
$string['virtualparticipationgeneralwarning'] = 'Виртуальное участие — это способ поучаствовать в конкурсе  в любое удобное для вас время.
    Результаты всех пользователей показываются в соответствии с их различными моментами старта.
    Если вы уже участвовали в этом конкурсе или если вы уже видели задачи этого конкурса, то вам следует использовать дорешивание вместо этого.
    <br><br>
    <b>Внимание!</b> Каждый пользователь может начать виртуальное участие только один раз.
    Если у вас уже есть неотклоненные посылки в этом конкурсе, то вы не сможете участвовать в нем виртуально.';
$string['virtualparticipationonly'] = 'Только виртуальное участие';
$string['virtualparticipationonlymsg'] = 'Этот конкурс только для виртуального участия. Виртуальное участие станет доступным после начала конкурса.';
$string['virtualparticipationselectyourgroup'] = 'Для того, чтобы начать виртуальное участие, выберите группу, членом которой вы являетесь.';
$string['virtualparticipationstartedat'] = 'Ваше виртуальное участие началось в';
