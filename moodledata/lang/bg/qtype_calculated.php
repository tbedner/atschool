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
 * Strings for component 'qtype_calculated', language 'bg', version '4.4'.
 *
 * @package     qtype_calculated
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additem'] = 'Добавяне на комплект';
$string['addmoreanswerblanks'] = 'Добавяне на друго празно поле за отговор.';
$string['addsets'] = 'Добавяне на набор(и)';
$string['answerdisplay'] = 'Показване в отговора';
$string['answerformula'] = 'Формула за отговор {$a}';
$string['answerhdr'] = 'Отговор';
$string['answerstoleranceparam'] = 'Параметри на толеранса на отговора';
$string['answerwithtolerance'] = '{$a->answer} (±{$a->tolerance} {$a->tolerancetype})';
$string['anyvalue'] = 'Всяка стойност';
$string['atleastoneanswer'] = 'Трябва да предоставите поне един отговор';
$string['atleastonerealdataset'] = 'Трябва да има поне един реален набор стойности в текста на въпроса';
$string['atleastonewildcard'] = 'Трябва да има поне една променлива във Формулата на отговора или в текста на въпроса';
$string['calcdistribution'] = 'Разпределение';
$string['calclength'] = 'Десетични знаци';
$string['calcmax'] = 'Максимум';
$string['calcmin'] = 'Минимум';
$string['choosedatasetproperties'] = 'Избиране на свойствата на наборите стойности на променливите';
$string['choosedatasetproperties_help'] = 'Наборът стойности е множество от стойности, които се вмъкват на мястото на променливите. Можете да създадете частен набор за определен въпрос, или споделен набор, който може да се използва и за други изчислителни въпроси в категорията.';
$string['correctanswerformula'] = 'Формула за правилен отговор';
$string['correctanswershows'] = 'Верният отговор показва';
$string['correctanswershowsformat'] = 'Цифри';
$string['correctfeedback'] = 'За всеки верен отговор';
$string['dataitemdefined'] = 'с {$a} вече дефинирани числови стойности е достъпен';
$string['datasetrole'] = 'Променливите <strong>{x..}</strong> ще бъдат заместени с числови стойности от техните набори от стойности';
$string['decimals'] = 'с {$a}';
$string['deleteitem'] = 'Изтриване на комплект';
$string['deletelastitem'] = 'Изтриване на последния комплект';
$string['distributionoption'] = 'Изберете възможността за дистрибуция';
$string['editdatasets'] = 'Редактиране на наборите стойности на променливите';
$string['editdatasets_help'] = 'Стойности на променливите могат да се създават чрез въвеждане на число във всяко поле за променлива и после щракване върху бутона за добавяне. За да се генерират автоматично 10 или повече стойности, изберете искания брой стойности, преди да щракнете бутона за добавяне. Равномерно разпределение означава, че всяка стойност между границите има еднаква вероятност да бъде избрана; логаритмично равномерно разпределение означава, че стойностите близо до долната граница се избират по-често.';
$string['editdatasets_link'] = 'question/type/calculated';
$string['existingcategory1'] = 'ще използва вече съществуващ, споделен набор стойности';
$string['forceregeneration'] = 'принудително генериране наново';
$string['forceregenerationall'] = 'принудително генерира наново всички променливи';
$string['forceregenerationshared'] = 'принудително генерира наново само несподелените променливи';
$string['functiontakesatleasttwo'] = 'Функцията {$a} трябва да има поне два аргумента';
$string['functiontakesnoargs'] = 'Функцията {$a} не приема никакви аргументи';
$string['functiontakesonearg'] = 'Функцията {$a} трябва да има точно един аргумент';
$string['functiontakesoneortwoargs'] = 'Функцията {$a} трябва да има един или два аргумента';
$string['functiontakestwoargs'] = 'Функцията {$a} трябва да има точно два аргумента';
$string['generatevalue'] = 'Генериране на нова стойност между';
$string['getnextnow'] = 'Получаване на нов "Комплект за добавяне"';
$string['hexanotallowed'] = 'В набор стойности <strong>{$a->name}</strong>  не е разрешен шестнадесетичен формат стойност {$a->value}';
$string['illegalformulasyntax'] = 'Невалиден синтаксис във формула, започващ с "{$a}"';
$string['incorrectfeedback'] = 'За всеки неверен отговор';
$string['itemno'] = 'Комплект {$a}';
$string['itemscount'] = 'Комплекти<br />Брой';
$string['itemtoadd'] = 'Комплект за добавяне';
$string['keptcategory1'] = 'ще използва същия споделен набор данни както преди';
$string['keptlocal1'] = 'ще използва същия частен набор данни както преди';
$string['lengthoption'] = 'Изберете настройки на дължината';
$string['loguniform'] = 'Логаритмично равномерно';
$string['loguniformbit'] = 'числа, от логаритмично равномерно разпределение';
$string['makecopynextpage'] = 'Следваща страница (нов въпрос)';
$string['mandatoryhdr'] = 'Задължителни променливи, участващи в отговорите';
$string['max'] = 'Макс';
$string['min'] = 'мин';
$string['minmax'] = 'Интервал за стойности';
$string['missingformula'] = 'Липсваща формула';
$string['missingname'] = 'Липсващо име на въпрос';
$string['missingquestiontext'] = 'Липсващ текст на въпроса';
$string['mustenteraformulaorstar'] = 'Трябва да въведете формула или "*".';
$string['newcategory1'] = 'ще използва нов споделен набор';
$string['newlocal1'] = 'ще използва нов частен набор';
$string['newsetwildcardvalues'] = 'нов(и) набор(и) от стойности на променлива/и';
$string['nextitemtoadd'] = 'Следващият "Комплект за добавяне"';
$string['nextpage'] = 'Следваща страница';
$string['nocoherencequestionsdatyasetcategory'] = 'За въпрос номер (id) {$a->qid}, номерът (id) на кетегория {$a->qcat} не е идентичен със споделената променлива {$a->name} номер (id) на категория {$a->sharedcat}. Редактирайте въпроса.';
$string['nocommaallowed'] = 'Не може да се използва , използвайте . както в 0.013 или 1.3e-2';
$string['nodataset'] = 'нищо - това не е променлива';
$string['nosharedwildcard'] = 'Няма споделени променливи в тази категория';
$string['notvalidnumber'] = 'Стойността на променливата не е валидно число';
$string['oneanswertrueansweroutsidelimits'] = 'Поне един верен отговор е извън границите за вярна стойност.<br />Променете настройката на толеранса на отговора, която се показва с "Разширено показване".';
$string['param'] = 'Параметър {<strong>{$a}</strong>}';
$string['partiallycorrectfeedback'] = 'За всеки отчасти верен отговор';
$string['pluginname'] = 'Изчислителен';
$string['pluginname_help'] = 'Изчислителните въпроси са индивидуални въпроси, съдържащи променливи, оградени във фигурни скоби, които се заместват с конкретни стойности, когато въпросът се зададе. Например, отговорът на въпроса: "Колко е лицето на правоъгълник със страни {a} и {b}?" ще се пресметне по формулата {a}*{b} при различни стойности на променливите. (Знакът * във формулата е знак за умножение)';
$string['pluginname_link'] = 'question/type/calculated';
$string['pluginnameadding'] = 'Добавяне на изчислителен въпрос';
$string['pluginnameediting'] = 'Редактиране на въпрос от тип "Изчислителен"';
$string['pluginnamesummary'] = 'Изчислителните въпроси са като числовите въпроси, но използваните числа се избират случайно от множество възможни, когато тестът се генерира за ученика.';
$string['possiblehdr'] = 'Възможни променливи, намиращи се само във текста на въпроса';
$string['questiondatasets'] = 'Набори стойности за въпрос';
$string['questiondatasets_help'] = 'Набори от стойности на променливите, които ще се използват във всеки отделен въпрос';
$string['questionstoredname'] = 'Име на запазения въпрос';
$string['reuseifpossible'] = 'използва предишните стойности ако е възможно';
$string['setno'] = 'Набор {$a}';
$string['setwildcardvalues'] = 'набор(и) от стойности на променлива/и';
$string['sharedwildcard'] = 'Споделена променлива {<strong>{$a}</strong>}';
$string['sharedwildcardname'] = 'Споделена променлива';
$string['sharedwildcards'] = 'Споделени променливи';
$string['showitems'] = 'Показване';
$string['significantfigures'] = 'със {$a}';
$string['significantfiguresformat'] = 'значещи цифри';
$string['synchronize'] = 'Синхронизиране на данните от споделените набори с други въпроси от теста';
$string['synchronizeno'] = 'Без синхронизиране';
$string['synchronizeyes'] = 'Синхрониpиране';
$string['synchronizeyesdisplay'] = 'Синхронизиране и показване имената на споделените набори като представки в имената на въпросите';
$string['tolerance'] = 'Толеранс &plusmn;';
$string['tolerancetype'] = 'Тип';
$string['trueanswerinsidelimits'] = 'Верен отговор: {$a->correct} в рамките на толеранса {$a->true}';
$string['trueansweroutsidelimits'] = '<span class="error">ГРЕШКА Верен отговор: {$a->correct} извън рамките на толеранса {$a->true}</span>';
$string['uniform'] = 'Равномерно';
$string['uniformbit'] = 'десетични числа, от равномерно разпределение';
$string['unsupportedformulafunction'] = 'Функцията {$a} не се поддържа';
$string['updatecategory'] = 'Променяне на категорията';
$string['updatedatasetparam'] = 'Обновяване параметрите на наборите стойности';
$string['updatetolerancesparam'] = 'Обновяване параметрите на толеранса на въпросите';
$string['updatewildcardvalues'] = 'Обновяване стойностите на променливите';
$string['useadvance'] = 'Използвайте бутона "Разширено показване" за да видите грешките';
$string['usedinquestion'] = 'Използвано във Въпрос';
$string['wildcard'] = 'Променлива {<strong>{$a}</strong>}';
$string['wildcardparam'] = 'Параметри на променливите, използвани за генериране на стойностите';
$string['wildcardrole'] = 'Променливите <strong>{x..}</strong> ще бъдат заместени с числови стойности от генерираните стойности';
$string['wildcards'] = 'Променливи {a}...{z}';
$string['wildcardvalues'] = 'Стойности на променливите';
$string['wildcardvaluesgenerated'] = 'Генерирани стойности на променливите';
$string['youmustaddatleastoneitem'] = 'Трябва да добавите поне един комплект стойности в набор преди да можете да запазите този въпрос.';
$string['youmustaddatleastonevalue'] = 'Трябва да добавите поне един набор стойности на променливи преди да можете да запазите този въпрос.';
$string['zerosignificantfiguresnotallowed'] = 'Верният отговор не може да има нула значещи цифри!';
