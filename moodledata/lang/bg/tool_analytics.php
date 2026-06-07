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
 * Strings for component 'tool_analytics', language 'bg', version '4.4'.
 *
 * @package     tool_analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allpredictions'] = 'Всички предвиждания';
$string['analyticmodels'] = 'Модели за анализ';
$string['clearmodelpredictions'] = 'Сигурни ли сте, че искате да изчистите всички "{$a}" предвиждания?';
$string['clearpredictions'] = 'Изчистване на предвиждания';
$string['clievaluationandpredictions'] = 'Изпълнявана по график задача преглежда всички активирани модели и получава предвиждания. Оценяването на модели чрез уебинтерфейс е изключено. Можете да разрешите да се ползва уебинтерфейс чрез изключване на настройката за анализи <a href="{$a}">\'onlycli\'</a>.';
$string['clievaluationandpredictionsnoadmin'] = 'Изпълнявана по график задача преглежда всички активирани модели и получава предвиждания. Оценяването на модели чрез уебинтерфейс е изключено. Ползването на уебинтерфейс може да се разреши от администратор.';
$string['component'] = 'Компонент';
$string['errorcantenablenotimesplitting'] = 'Трябва да зададете интервал за анализ преди да активирате модела';
$string['errornoenabledandtrainedmodels'] = 'Няма активирани и тренирани модели за прогнозиране.';
$string['errornoexport'] = 'Може да се експортира само трениран модел';
$string['errornostaticevaluated'] = 'Модели основани на предположения не може да се оценят. Те винаги са 100% точни, в зависимост от това как са определени.';
$string['errornostaticlog'] = 'Модели основани на предположения не може да се оценят защото няма журнали за поведение.';
$string['evaluationmode_help'] = 'Има два модела за оценяване:

* Трениран модел - данните от сайта се използват като тестови данни за оценявате точността на модела.
* Конфигурация - данните от сайта се разделят на тренировачни и тестови и служат както за трениране така и за проверяване на точността на конфигурацията на модела.

Трениран модел е наличен ако такъв е импортиран в сайта и не е обучаван допълнително чрез данни от сайта.';
$string['evaluationmodecolconfiguration'] = 'Конфигурация';
$string['evaluationmodecoltrainedmodel'] = 'Трениран модел';
$string['evaluationmodeconfiguration'] = 'Оценяване конфигурацията на модел';
$string['evaluationmodeinfo'] = 'Този модел е импортиран в сайта. Вие можете или да оцените неговото поведение, или да го конфигурирате по данни от сайта.';
$string['evaluationmodetrainedmodel'] = 'Оценяване на трениран модел';
$string['exportmodel'] = 'Експортиране на конфигурация';
$string['ignoreversionmismatches'] = 'Игнориране на несъответствията на версиите';
$string['indicators'] = 'Индикатори';
$string['indicators_help'] = 'Индикаторът е това, което Вие мислите, че ще доведе до точно предвиждане на целта.';
$string['indicators_link'] = 'Indicators';
$string['indicatorsnum'] = 'Номер на индикатор: {$a}';
$string['insights'] = 'Прогнози';
$string['insightsreport'] = 'Отчет за прогнози';
$string['invalidindicatorsremoved'] = 'Добавен беше нов модел. Индикаторите, които не работят с избраните цели бяха премахнати автоматично.';
$string['invalidprediction'] = 'Невалидно получаване на предвиждания';
$string['noactionsfound'] = 'Потребителите още не са извършили действия в генерираните отчети.';
$string['predictionprocessfinished'] = 'Процесът за предвождания завърши';
$string['predictionresults'] = 'Резултати от предвиждания';
$string['selecttimesplittingforevaluation'] = 'Изберете интервал за анализ, който искате да използвате за оценяване на конфигурацията на модела.';
$string['target_help'] = 'Целта е това, което моделът ще прогнозира.';
$string['target_link'] = 'Targets';
$string['timesplittingnotdefined'] = 'Не е определен интервал за анализ.';
$string['timesplittingnotdefined_help'] = 'Вие трябва да изберете интервал за анализ преди да активирате модела.';
$string['versionnotsame'] = 'Импортираният файл беше от версия ({$a->importedversion}) - различна от текущата версия ({$a->version})';
$string['viewlog'] = 'Журнал за оценяване';
