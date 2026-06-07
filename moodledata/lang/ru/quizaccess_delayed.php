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
 * Strings for component 'quizaccess_delayed', language 'ru', version '4.4'.
 *
 * @package     quizaccess_delayed
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attemptquiz'] = 'Пройти тест сейчас';
$string['delayedattemptlock'] = 'Поэтапное начало теста';
$string['delayedattemptlock_help'] = 'Если эта функция включена, при загрузке страницы теста до даты его начала кнопка "Начать попытку" будет временно отключена.
Начнется обратный отсчет до времени, установленного преподавателем, с учетом случайной задержки доступа. Когда обратный отсчет закончится, кнопка "Начать попытку" будет вновь показана, и учащиеся смогут начать проходить тест.';
$string['explaindelayedattempt'] = 'Устанавливает случайную задержку доступа';
$string['flipdowncounter'] = 'Счетчик в виде анимированных карточек';
$string['noscriptwarning'] = 'Для этого теста требуется браузер, поддерживающий JavaScript. Если у вас установлен блокировщик Javascript, вам нужно будет отключить его.';
$string['plaintextcounter'] = 'Счетчик в виде обычного текста';
$string['pleasewait'] = 'Пожалуйста, подождите здесь';
$string['pluginname'] = 'Попытка участия в тесте со случайной задержкой';
$string['pluginname_desc'] = 'Автоматически активировать кнопку прохождения теста со случайной задержкой';
$string['quizaccess_delayed_allowdisable'] = 'Преподаватели могут отключить правило случайной задержки';
$string['quizaccess_delayed_countertype'] = 'Вид счетчика.';
$string['quizaccess_delayed_dangerousquiznotice'] = 'Текст общего сообщения, отображаемого, если тест может вызвать проблемы';
$string['quizaccess_delayed_dangerousquiznotice_desc'] = 'Это сообщение будет показываться преподавателям при настройке теста, если плагин определит, что с параметрами могут возникнуть проблемы. Здесь можно разместить ссылки на руководства или инструкции по разработке менее сложных тестов.';
$string['quizaccess_delayed_enabled'] = 'Включить поэтапное начало теста';
$string['quizaccess_delayed_enabledbydefault'] = 'В новых тестах это правило будет использоваться по умолчанию';
$string['quizaccess_delayed_maxdelay'] = 'Максимальная задержка (минуты)';
$string['quizaccess_delayed_maxdelay_desc'] = 'Это максимальная задержка, с которой студенты смогут начать тест. Фактическая задержка будет представлять собой случайное число в диапазоне от 0 до <b>САМОЕ БОЛЬШЕЕ</b> - этого значения.';
$string['quizaccess_delayed_notice'] = 'Уведомление для студентов';
$string['quizaccess_delayed_notice_desc'] = 'Этот текст показывается всем учащимся в дополнение к тексту, который преподаватель использует в качестве описания задания. Он предназначен для отображения общего сообщения, обычно связанного с инструкциями по использованию тестов.';
$string['quizaccess_delayed_showdangerousquiznotice'] = 'Показывать преподавателю предупреждение, если его тест требует больших ресурсов сервера.';
$string['quizaccess_delayed_sitewidecount'] = 'Использовать общее количество учащихся на сайте для расчета ограничений';
$string['quizaccess_delayed_sitewidecount_desc'] = 'Если этот параметр включен, число студентов, которые могут начать тест, будет рассчитываться с использованием всех тестов, которые начинаются на сайте в одно и то же время. Если этот параметр отключен, будут учитываться только студенты, зарегистрированные на курс.';
$string['quizaccess_delayed_startrate'] = 'Скорость входа (число студентов в минуту)';
$string['quizaccess_delayed_startrate_desc'] = 'Это среднее количество учащихся в минуту, которое ваши серверы могут обработать для запуска теста. Небольшое количество приведет к длительным задержкам, но снизит нагрузку на сервер. Большое количество приведет к кратковременным задержкам, но может привести к перегрузке сервера, если многие учащиеся попытаются начать тест одновременно. Вы должны провести некоторый сравнительный анализ на своем сайте.';
$string['quizaccess_delayed_teachernotice'] = 'В этом тесте будет использоваться поэтапный контроль входа. Это приведет к тому, что учащиеся будут начинать тест со случайной задержкой до {$a} минут.';
$string['quizaccess_delayed_teachernotice2'] = 'Сообщение для преподавателя: Ваши ученики увидят следующее сообщение во время ожидания:';
$string['quizaccess_delayed_timelimitpercent'] = 'Максимальная задержка в процентах от времени завершения';
$string['quizaccess_delayed_timelimitpercent_desc'] = 'Если тест ограничен по времени, эта настройка будет использоваться для расчета максимальной задержки в процентах от установленного лимита времени. Фактическая максимальная задержка будет минимальной из этого значения и значения, заданного в поле "Максимальная задержка (минуты)". Это позволяет установить максимальную задержку относительно времени проведения теста. Например, если вы установите это значение равным 10%, а время проведения теста ограничено 60 минутами, максимальная задержка составит 6 минут. Если тест не ограничен по времени, этот параметр игнорируется.';
$string['quizwillstartinabout'] = 'Ваша очередь участвовать в этом тесте наступит примерно через';
$string['quizwillstartinless'] = 'Ваша очередь участвовать в этом тесте наступит менее чем через минуту';
$string['tooshortpagesadvice'] = 'В анкете есть слишком короткие страницы {$a->pages}. Это значительно увеличивает нагрузку на сервер. Рассмотрите возможность выделения большего количества времени для каждой страницы (т.е. для размещения большего количества вопросов).';
$string['tooshorttimeguardadvice'] = 'Время доступности {$a->timespanstr} слишком мало. Пожалуйста, обратите внимание, что доступ некоторых учащихся будут задерживаться на срок до {$a->maxdelaystr}, у них будет только {$a->timelimitstr} для прохождения теста. Рекомендуется оставить запас времени на случай других задержек в начале теста.';
