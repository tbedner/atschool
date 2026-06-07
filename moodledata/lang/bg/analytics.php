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
 * Strings for component 'analytics', language 'bg', version '4.4'.
 *
 * @package     analytics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = 'Анализируем {$a->analysableid} не се използва: {$a->errors}';
$string['analysablenotvalidfortarget'] = 'Анализируемият {$a->analysableid} не е валиден за тази цел: {$a->result}';
$string['analysisinprogress'] = 'Все още се анализира от предишно изпълнение';
$string['analytics'] = 'Анализи';
$string['analyticsdisabled'] = 'Анализът е деактивиран. Можете да го активирате в „Администриране на сайта > Разширени възможности“.';
$string['analyticslogstore'] = 'Хранилище на дневници, използвани за анализ';
$string['analyticslogstore_help'] = 'Хранилище за дневници, които ще бъдат използвани за анализ на активността на потребителите към  API.';
$string['analyticssettings'] = 'Настройки за аналази';
$string['analyticssiteinfo'] = 'Информация за сайта';
$string['calclifetime'] = 'Запазете аналитичните изчисления за';
$string['configlcalclifetime'] = 'Това определя продължителността от време, през което искате да запазите изчисленията - това няма да изтрие прогнозите, но изтрива данните, използвани за генериране на прогнозите. Използването на опцията по подразбиране тук е най-добре, тъй като поддържа използването на вашия диск под контрол, но ако използвате таблици за изчисление за други цели, може да искате да увеличите тази стойност.';
$string['defaultpredictionsprocessor'] = 'Процесор за предвиждане по подразбиране';
$string['defaultpredictoroption'] = 'Процесор по подразбиране ({$a})';
$string['defaulttimesplittingmethods'] = 'Интервали за анализ по подразбиране за оценка на модела';
$string['defaulttimesplittingmethods_help'] = 'Интервалът на анализа определя кога системата ще изчисли прогнозите и частта от регистрационните файлове на дейността, която ще бъде взета предвид за тези прогнози. Процесът на оценката на модела ще премине през тези интервали на анализ, освен ако не е посочен конкретен интервал за анализ.';
$string['disabledmodel'] = 'Изключен модел';
$string['erroralreadypredict'] = 'Файлът {$a} вече е използван за генериране на прогнози.';
$string['errorcannotreaddataset'] = 'Файлът с набор от данни {$a} не може да бъде прочетен.';
$string['errorcannotusetimesplitting'] = 'Предоставеният интервал за анализ не може да се използва за този модел.';
$string['errorcannotwritedataset'] = 'Файлът с набор от данни {$a} не може да бъде записан.';
$string['errorexportmodelresult'] = 'Моделът на машинното обучение не може да бъде експортиран.';
$string['errorimport'] = 'Грешка при импортирането на предоставения JSON файл.';
$string['errorimportmissingclasses'] = 'Следните компоненти за анализ не са налични на този сайт: {$a->missingclasses}.';
$string['errorimportmissingcomponents'] = 'Предоставеният модел изисква да бъдат инсталирани следните представки: {$a}. Имайте предвид, че версиите не е задължително да съвпадат с версиите, инсталирани на вашия сайт. Инсталирането на същата или по-нова версия на приставката би трябвало да е добре в повечето случаи.';
$string['errorimportversionmismatches'] = 'Версията на следните компоненти се различава от версията, инсталирана на този сайт: {$a}. Можете да използвате опцията „Игнориране на несъответствията на версиите“, за да игнорирате тези разлики.';
$string['errorinvalidcontexts'] = 'Някои от избраните контексти не могат да се използват за тази цел.';
$string['errorinvalidindicator'] = 'Невалиден индикатор {$a}';
$string['errorinvalidtarget'] = 'Невалидна цел {$a}';
$string['errorinvalidtimesplitting'] = 'Невалиден интервал за анализ; моля, уверете се, че сте добавили пълното име на класа.';
$string['errornocontextrestrictions'] = 'Избраната цел не поддържа контекстни ограничения';
$string['errornoexportconfig'] = 'Имаше проблем при експортиране конфигурацията на модел.';
$string['errornoexportconfigrequirements'] = 'Могат да се експортират само нестатични модели с интервал за анализ.';
$string['errornoindicators'] = 'Този модел няма индикатори.';
$string['errornopredictresults'] = 'Не са върнати резултати от процесора за предвиждания. Проверете съдържанието на изходната директория за повече информация.';
$string['errornoroles'] = 'Ролите на студент или преподавател не са дефинирани. Определете ги в страницата с настройки за анализ.';
$string['errornotarget'] = 'Този модел няма цел.';
$string['errornotimesplittings'] = 'Този модел няма интервал за анализ.';
$string['errorpredictioncontextnotavailable'] = 'Контекстът на предвиждането вече не е наличен.';
$string['errorpredictionformat'] = 'Неправилен формат на изчисленията за предвиждане';
$string['errorpredictionnotfound'] = 'Предвиждането не е намерено';
$string['errorpredictionsprocessor'] = 'Грешка на процесора за предвиждане: {$a}';
$string['errorpredictwrongformat'] = 'Връщането на процесора за предвиждания не може да бъде декодирано: "{$a}"';
$string['errorprocessornotready'] = 'Избраният процесор за предвиждания не е готов: {$a}';
$string['errorsamplenotavailable'] = 'Предвидената извадка вече не е налична.';
$string['errorunexistingmodel'] = 'Несъществуващ модел {$a}';
$string['errorunexistingtimesplitting'] = 'Избраният интервал за анализ не е наличен.';
$string['errorunknownaction'] = 'Неизвестно действие';
$string['eventinsightsviewed'] = 'Прегледана е прогноза';
$string['eventpredictionactionstarted'] = 'Процесът за предвиждане започна';
$string['fixedack'] = 'Приемане';
$string['incorrectlyflagged'] = 'Неправилно отбелязано';
$string['insightinfomessageaction'] = '{$a->text}: {$a->url}';
$string['insightinfomessagehtml'] = 'Системата е генерирала прогноза за Вас.';
$string['insightinfomessageplain'] = 'Системата е генерирала прогноза за Вас: {$a}';
$string['insightmessagesubject'] = 'Нова прогноза за "{$a}"';
$string['invalidanalysablefortimesplitting'] = 'Не може да се анализира с помощта на интервал за анализ {$a}.';
$string['invalidtimesplitting'] = 'Моделът с идентификатор {$a} се нуждае от интервал за анализ, преди да може да се използва за обучение.';
$string['levelinstitution'] = 'Степен на образование';
$string['levelinstitutionisced0'] = 'Образование в ранна детска възраст („по-малко от основно“ за образователни постижения)';
$string['levelinstitutionisced1'] = 'Начално образование';
$string['levelinstitutionisced2'] = 'Прогимназиално образование';
$string['levelinstitutionisced3'] = '10, 11, 12 клас';
$string['levelinstitutionisced4'] = 'След средно невисше образование (може да включва корпоративно или общностно/НПО обучение)';
$string['levelinstitutionisced5'] = 'Учебен опит свързан със средното образование';
$string['levelinstitutionisced6'] = 'Бакалавър или еквивалентно ниво';
$string['levelinstitutionisced7'] = 'Магистър или еквивалентно ниво';
$string['levelinstitutionisced8'] = 'Докторска степен или еквивалентно ниво';
$string['modeinstruction'] = 'Режими на обучение';
$string['modeinstructionblendedhybrid'] = 'Смесени или хибридни';
$string['modeinstructionfacetoface'] = 'Лице в лице';
$string['modeinstructionfullyonline'] = 'Напълно онлайн';
$string['modeloutputdir'] = 'Изходна директория на моделите';
$string['modeloutputdirwithdefaultinfo'] = 'Директория, където процесорите за прогнозиране съхраняват цялата информация за оценка. Полезно за отстраняване на грешки и изследвания. Ако е празно, ще се използва {$a} по подразбиране.';
$string['modeltimelimit'] = 'Ограничение за време за анализ на един модел';
$string['modeltimelimitinfo'] = 'Тази настройка ограничава времето, което всеки модел прекарва в анализиране на съдържанието на сайта.';
$string['neutral'] = 'Неутрален';
$string['neverdelete'] = 'Изчисленията да не се изтриват никога';
$string['nocourses'] = 'Няма курсове за анализ';
$string['nodata'] = 'Няма данни за анализ';
$string['noevaluationbasedassumptions'] = 'Модели основани на предположения не може да се оценят.';
$string['noinsights'] = 'Съобщена е нова прогноза';
$string['noinsightsmodel'] = 'Този модел не генерира прогнози';
$string['nonewdata'] = 'Няма налични нови данни. Моделът ще бъде анализиран след следващия интервал на анализ.';
$string['nonewranges'] = 'Все още няма нови прогнози. Моделът ще бъде анализиран след следващия интервал на анализ.';
$string['nopredictionsyet'] = 'Още не са налични предвиждания';
$string['noranges'] = 'Все още няма прогнози';
$string['notapplicable'] = 'Не приложимо';
$string['notrainingbasedassumptions'] = 'Модели основани на предположения не се нуждаят от обучение';
$string['notuseful'] = 'Безполезно';
$string['novaliddata'] = 'Няма налични валидни данни';
$string['novalidsamples'] = 'Няма налични валидни мостри';
$string['onlycli'] = 'Анализът обработва изпълнението само чрез команден ред';
$string['onlycliinfo'] = 'Процеси за анализ, като оценяване на модели, трениране на алгоритми за машинно обучение или получаване на прогнози, могат да отнемат известно време. Те се изпълняват като cron задачи  или могат да бъдат предизвикани чрез команден ред. Ако е деактивирано, процесите на анализ могат да се изпълняват ръчно чрез уеб интерфейса.';
$string['percentonline'] = 'Процент онлайн';
$string['percentonline_help'] = 'Ако Вашата организация прилага смесени или хибридни курсове, каква част от работата на студентите се извършва в Moodle? Въведете число между 0 и 100.';
$string['predictionsprocessor'] = 'Процесор за предвиждане';
$string['predictionsprocessor_help'] = 'Процесор за предвиждане е работещ на заден план софтуер, който обработва наборите данни, генерирани чрез изчисляване на модели, индикатори и цели. Всеки модел може да използва различен процесор. Избраният тук ще се използва по подразбиране.';
$string['privacy:metadata:analytics:analyticsmodels'] = 'Аналитични модели';
$string['privacy:metadata:analytics:analyticsmodels:usermodified'] = 'Потребителят, който е променил модела';
$string['privacy:metadata:analytics:analyticsmodelslog'] = 'Дневникът, използван за аналитичните модели';
$string['privacy:metadata:analytics:analyticsmodelslog:usermodified'] = 'Потребителят, който е променил дневника';
$string['privacy:metadata:analytics:indicatorcalc'] = 'Пресмятане на индикатори';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = 'Контекст';
$string['privacy:metadata:analytics:indicatorcalc:endtime'] = 'Време на края на изчисленията';
$string['privacy:metadata:analytics:indicatorcalc:indicator'] = 'Клас на иззисленията на индикатор';
$string['privacy:metadata:analytics:indicatorcalc:sampleid'] = 'Ид. номер на проба';
$string['privacy:metadata:analytics:indicatorcalc:sampleorigin'] = 'Таблица, от която произхожда пробата';
$string['privacy:metadata:analytics:indicatorcalc:starttime'] = 'Време на началото на изчисления';
$string['privacy:metadata:analytics:indicatorcalc:timecreated'] = 'Кога е направено предвиждането';
$string['privacy:metadata:analytics:indicatorcalc:value'] = 'Изчислена стойност';
$string['privacy:metadata:analytics:predictionactions'] = 'Действие по предвиждане';
$string['privacy:metadata:analytics:predictionactions:actionname'] = 'Име на действието';
$string['privacy:metadata:analytics:predictionactions:predictionid'] = 'Ид. номер на предвиждане';
$string['privacy:metadata:analytics:predictionactions:timecreated'] = 'Кога е извършено действието по предвиждане';
$string['privacy:metadata:analytics:predictionactions:userid'] = 'Потребителят извършил действието';
$string['privacy:metadata:analytics:predictions'] = 'Предвиждания';
$string['privacy:metadata:analytics:predictions:calculations'] = 'Изчисления на индикатори';
$string['privacy:metadata:analytics:predictions:contextid'] = 'Контекст';
$string['privacy:metadata:analytics:predictions:modelid'] = 'Ид. номер на модел';
$string['privacy:metadata:analytics:predictions:prediction'] = 'Предвиждане';
$string['privacy:metadata:analytics:predictions:predictionscore'] = 'Резултат на предвиждане';
$string['privacy:metadata:analytics:predictions:rangeindex'] = 'Индекс на аналитичния интервал';
$string['privacy:metadata:analytics:predictions:sampleid'] = 'Ид. номер на проба';
$string['privacy:metadata:analytics:predictions:timecreated'] = 'Кога е направено предвиждането';
$string['privacy:metadata:analytics:predictions:timeend'] = 'Край на времето за изчисления';
$string['privacy:metadata:analytics:predictions:timestart'] = 'Начало на времето за изчисления';
$string['processingsitecontents'] = 'Обработка на съдържанието на сайта';
$string['successfullyanalysed'] = 'Успешно анализирано';
$string['timesplittingmethod'] = 'Интервал на анализа';
$string['timesplittingmethod_help'] = 'Интервалът на анализа определя кога системата ще изчисли прогнозите и частта от журналните файлове на дейностите, която ще бъде обработена за тези прогнози. Например, продължителността на курса може да бъде разделена на части, като в края на всяка част се генерира прогноза.';
$string['timesplittingmethod_link'] = 'Time_splitting_methods';
$string['typeinstitution'] = 'Тип институция';
$string['typeinstitutionacademic'] = 'Академична';
$string['typeinstitutionngo'] = 'Неправителствена организация (НПО)';
$string['typeinstitutiontraining'] = 'Корпоративно обучение';
$string['useful'] = 'Полезен';
$string['viewdetails'] = 'Преглед на детайли';
$string['viewinsight'] = 'Преглед на прогноза';
$string['viewinsightdetails'] = 'Преглед на детайлите на прогноза';
$string['viewprediction'] = 'Преглед на детайлите на предвиждане';
$string['washelpful'] = 'Беше ли Ви полезно?';
