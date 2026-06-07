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
 * Strings for component 'grades', language 'bg', version '4.4'.
 *
 * @package     grades
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activities'] = 'Дейности';
$string['addcategory'] = 'Добавяне категория';
$string['addcategoryerror'] = 'Не може да се добави категория.';
$string['addexceptionerror'] = 'Възникна грешка при добавяне на изключение за userid:gradeitem';
$string['addfeedback'] = 'Добавяне на обратна връзка';
$string['addgradeletter'] = 'Добавяне на буква за оценка';
$string['addidnumbers'] = 'Добавяне на ид. номера';
$string['additem'] = 'Добавяне работа за оценяване';
$string['additionalfeedback'] = 'Допълнителна обратна информация';
$string['addscale'] = 'Добавяне на скала';
$string['adjustedweight'] = 'Променено е тегло';
$string['aggregateextracreditmean'] = 'Средна оценка (с допълнителни кредити)';
$string['aggregatemax'] = 'Най-висока оценка';
$string['aggregatemean'] = 'Средна оценка';
$string['aggregatemedian'] = 'Медиана на оценките';
$string['aggregatemin'] = 'Най-ниска оценка';
$string['aggregatemode'] = 'Мода на оценките';
$string['aggregatenotonlygraded'] = 'Включи празните оценки';
$string['aggregateonlygraded'] = 'Изключване на липсващи оценки';
$string['aggregateonlygraded_help'] = 'Празната оценка е оценка, която липсва в книгата за оценки. Тя може да произтича от отговор на задание, който още не е оценен или от тест, който още не е опитан да бъде изпълнен.

Тази настройка определя дали празните оценки не се включват в обобщаването или участват като минимални оценки, например със стойност 0 за оценки, които могат да бъдат от 0 до 100.';
$string['aggregateoutcomes'] = 'Включване на качества в обобщаването';
$string['aggregateoutcomes_help'] = 'Ако се разреши в обобщаването ще се включат и качествата. Това може да предизвика неочаквани крайни резултати.';
$string['aggregatesonly'] = 'Показване само на суми';
$string['aggregatesubcatsupgradedgrades'] = 'Забележка: Настройката за събиране "Събиране, включително подкатегории" е премахната като част от надграждането на сайта. Тъй като „Събиране, включително подкатегории“ беше използвана преди в този курс, препоръчваме ви да прегледате тази промяна в дневника с оценки.';
$string['aggregatesum'] = 'Естествено';
$string['aggregateweightedmean'] = 'Претеглена средна оценка';
$string['aggregateweightedmean2'] = 'Проста претеглена средна оценка';
$string['aggregation'] = 'Обобщаване';
$string['aggregation_help'] = 'Обобщаването определя как се комбинират оценките от дадена категория, като:

* Средна оценка - Сумата на всички оценки, разделена на броя им
* Медиана на оценките - След като оценките се подредят по нарастване - оценката, която попада в средата на списъка
* Най-ниска оценка
* Най-висока оценка
* Мода на оценките - Оценката, която се повтаря най-много пъти
* Естествено - Сума от стойностите на всички оценки, независимо от скалите им';
$string['aggregation_link'] = 'grade/aggregation';
$string['aggregationcoef'] = 'Коефициент за обобщаване';
$string['aggregationcoefextra'] = 'Допълнителен кредит';
$string['aggregationcoefextra_help'] = 'Ако начинът на обобщаване е "Естествено" или "Проста претеглена средна" и отметката "Допълнителен кредит" е сложена, максималната оценка на работата не се прибавя към максималната оценка за категорията, което прави възможно достигане на максимална оценка в категорията без максимални оценки за всички работи. Ако администратор на сайта е разрешил оценки над максимума, може да се получат оценки по-големи от максимума.

Ако обобщаването е "Средна оценка (с допълнителни кредити)" и допълнителният кредит е зададен по-голям от нула, допълнителният кредит е стойност, с която оценката се умножава преди прибавянето и в сумата за пресмятане на средна стойност.';
$string['aggregationcoefextra_link'] = 'grade/aggregation';
$string['aggregationcoefextrasum'] = 'Допълнителен кредит';
$string['aggregationcoefextrasum_help'] = 'Ако тази отметка за допълнителен кредит е поставена, максималната оценка за работата не се добавя към максималната оценка на категорията, давайки възможност за получаване на максимална оценка (или по-голяма от максималната, ако е позволено от администратор на сайта) в категорията без максимални оценки за всяка оценявана работа.';
$string['aggregationcoefextrasum_link'] = 'grade/aggregation';
$string['aggregationcoefextrasumabbr'] = '+';
$string['aggregationcoefextraweight'] = 'Тегло на допълнителния кредит';
$string['aggregationcoefextraweight_help'] = 'Ако на теглото на допълнителния кредит е зададена по-голяма от нула стойност, оценката действа като допълнителен кредит при обобщаване. С тази стойност се умножава оценката преди да бъде сумирана при пресмятане на средна стойност.';
$string['aggregationcoefextraweight_link'] = 'grade/aggregation';
$string['aggregationcoefweight'] = 'Тегло на единицата';
$string['aggregationcoefweight_help'] = 'Теглото на работата се използва в обобщаването за категории, за да повлияе на важността на работата в сравнение с други работи с оценка в същата категория.';
$string['aggregationcoefweight_link'] = 'grade/aggregation';
$string['aggregationhintdropped'] = '( Пропуснат )';
$string['aggregationhintexcluded'] = '( Изключен )';
$string['aggregationhintextra'] = '( Допълнителен кредит )';
$string['aggregationhintnovalue'] = '( Празен )';
$string['aggregationofa'] = 'Събиране на {$a}';
$string['aggregationposition'] = 'Позиция на обобщената';
$string['aggregationposition_help'] = 'Тази настройка определя дали колоната с обобщената оценка от категория или курс се показва първа или последна в отчетите от книгата с оценки.';
$string['aggregationsvisible'] = 'Достъпни видове обобщаване';
$string['aggregationsvisiblehelp'] = 'Изберете всички видове обобщаване, които трябва да са достъпни. Задръжте натиснат клавиш Ctrl, за да изберете повече от един.';
$string['allgrades'] = 'Всички оценки по категории';
$string['allstudents'] = 'Всички ученици';
$string['allusers'] = 'Всички потребители';
$string['aria-toggledropdown'] = 'Превключете следното падащо меню';
$string['aria:dropdowngrades'] = 'Намерени са елементи за класиране';
$string['autosort'] = 'Автоматично сортиране';
$string['availableidnumbers'] = 'Налични ид. номера';
$string['average'] = 'Средно';
$string['averagesdecimalpoints'] = 'Десетични знаци в колоната на средните';
$string['averagesdecimalpoints_help'] = 'Тази настройка определя броя на знаците след десетичната запетая при показване на средната стойност, или да се използва зададеният брой за категорията или оценяваната работа (Наследен).';
$string['averagesdisplaytype'] = 'Вид показване в колоната на средните';
$string['averagesdisplaytype_help'] = 'Тази настройка определя дали средната оценка се показва като реална, в проценти или с букви, или по начина, определен за категорията или работата за оценяване (Наследен).';
$string['backupwithoutgradebook'] = 'Резервното копие не съдържа конфигурацията на дневника с оценки';
$string['badgrade'] = 'Предоставената оценка е невалидна';
$string['badlyformattedscale'] = 'Моля, въведете списък от разделени със запетаи стойности (поне две стойности се изискват).';
$string['baduser'] = 'Предоставеният потребител е невалиден';
$string['bonuspoints'] = 'Бонус точки';
$string['bulkcheckboxes'] = 'Група от квадратчета за отметка';
$string['calculatedgrade'] = 'Изчислена оценка';
$string['calculation'] = 'Изчисляване';
$string['calculation_help'] = 'Изчисляването на оценката е формула, използвана за определяне на оценки. Формулата трябва да започва със знак за равенство (=) и може да използва общи математически оператори, като max, min и sum. Ако желаете, в изчислението могат да се включат други елементи с оценка чрез въвеждане на идентификационните номера в двойните квадратни скоби.';
$string['calculation_link'] = 'оценка/изчисление';
$string['calculationadd'] = 'Добавете изчисление';
$string['calculationedit'] = 'Редактиране на изчислението';
$string['calculationsaved'] = 'Изчислението е запазено';
$string['calculationview'] = 'Преглед на изчислението';
$string['calculationwarning'] = 'Тази категория използва изчисление на оценка за общата сума на категорията, а не събиране.';
$string['cannotaccessgroup'] = 'Няма достъп до оценките на избраната група, за съжаление.';
$string['categories'] = 'Категории';
$string['category'] = 'Категория';
$string['categoryedit'] = 'Редактиране на категория';
$string['categoryname'] = 'Име на категория';
$string['categorytotal'] = 'Обобщена за категорията';
$string['categorytotalfull'] = '{$a->category} сума';
$string['categorytotalname'] = 'Име на обобщената оценка на категорията';
$string['changedefaults'] = 'Промяна на зададеното по подразбиране';
$string['changereportdefaults'] = 'Промяна на зададеното по подразбиране за отчета';
$string['chooseaction'] = 'Изберете действие...';
$string['choosecategory'] = 'Избор на категория';
$string['collapsecriterion'] = 'Критерий за свиване';
$string['compact'] = 'Компактен';
$string['componentcontrolsvisibility'] = 'Дали тази оценка е скрита се контролира от настройките за активност.';
$string['contract'] = 'Категория договор';
$string['contributiontocoursetotal'] = 'Дял в оценката за курса';
$string['controls'] = 'Контроли';
$string['courseavg'] = 'Средно за курса';
$string['coursegradesettings'] = 'Настройки на оценките в курса';
$string['coursename'] = 'Име на курса';
$string['coursescales'] = 'Скали на курса';
$string['coursesettings'] = 'Настройки за курса';
$string['coursesettingsexplanation'] = 'Настройките за оценка на курса определят как се показва дневникът с оценки за всички участници в курса.';
$string['coursesiamtaking'] = 'Курсове, които карам';
$string['coursesiamteaching'] = 'Курсове, в които преподавам';
$string['coursetotal'] = 'Обща за курс';
$string['createcategory'] = 'Създаване на категория';
$string['csv'] = 'CSV';
$string['decimalpoints'] = 'Общ брой десетични знаци';
$string['decimalpoints_help'] = 'Тази настройка определя броя на десетичните знаци за показване за всяка оценка. Няма ефект върху изчисленията на оценките, които се правят с точност до 5 знака след десетичната запетая.';
$string['default'] = 'По подразбиране';
$string['defaultprev'] = 'По подразбиране ({$a})';
$string['deletecategory'] = 'Изтриване на категория';
$string['disablegradehistory'] = 'Изключване историята на оценките';
$string['disablegradehistory_help'] = 'Изключване проследяването на историята на промените в таблиците свързани с оценки. Това може малко да ускори сървъра и да спести място в базата данни.';
$string['droplow'] = 'Отхвърляне най-ниските';
$string['droplow_help'] = 'Тази настройка позволява, посочения брой най-ниски оценки да се изключи от обобщаването.';
$string['droplowestvalue'] = 'Задаване стойност за най-ниските отхвърлени оценки';
$string['edit'] = 'Редактиране';
$string['editcalculation'] = 'Редактиране на калкулация';
$string['editcalculationverbose'] = 'Редактиране на пресмятането за {$a->category} {$a->itemmodule} {$a->itemname}';
$string['editfeedback'] = 'Редактиране на забележка';
$string['editgrade'] = 'Редактиране на оценка';
$string['editgradeletters'] = 'Редактиране на буквите за оценка';
$string['editoutcome'] = 'Редактиране на качество';
$string['editoutcomes'] = 'Редактиране на качества';
$string['editscale'] = 'Редактиране на скала';
$string['edittree'] = 'Настройване';
$string['editverbose'] = 'Редактиране на {$a->category} {$a->itemmodule} {$a->itemname}';
$string['enableajax'] = 'Разрешаване на AJAX';
$string['enableajax_help'] = 'Добавя AJAX функционалност на отчетите с оценки, опростявайки и ускорявайки обичайните действия. Зависи от това дали браузърът на потребителя изпълнява Javascript.';
$string['enableoutcomes'] = 'Разрешаване на качества';
$string['enableoutcomes_help'] = 'Ако е включено работите за оценяване могат да се оценяват чрез използване на една или повече скали свързани с качества твърдения.';
$string['encoding'] = 'Кодова таблица';
$string['errorupdatinggradecategoryaggregateoutcomes'] = 'Грешка при обновяване на настройката "Включване на качества в обобщаването" на категория оценки номер (ID) {$a->id}';
$string['errorupdatinggradecategoryaggregation'] = 'Грешка при обновяване на типа събиране на ИД на категория оценка {$a->id}';
$string['errorupdatinggradeitemaggregationcoef'] = 'Грешка при обновяване на коефициента на събиране (важност или допълнителен кредит) на ID на елемента за оценка {$a->id}';
$string['eventgradedeleted'] = 'Оценката е изтрита';
$string['eventgradeexported'] = 'Оценката е експортирана';
$string['eventgradeitemcreated'] = 'Елементът за оценка е създаден';
$string['eventgradeitemdeleted'] = 'Елементът за оценка е изтрит';
$string['eventgradeitemupdated'] = 'Елементът за оценка е актуализиран';
$string['eventgradelettercreated'] = 'Създадено е писмо за оценка';
$string['eventgradeletterdeleted'] = 'Писмото за оценка е изтрито';
$string['eventgradeletterupdated'] = 'Писмото за оценка е актуализирано';
$string['eventgradeviewed'] = 'Оценките бяха прегледани в дневника';
$string['eventscalecreated'] = 'Скалата е създадена';
$string['eventscaledeleted'] = 'Скалата е изтрита';
$string['eventscaleupdated'] = 'Скалата е актуализирана';
$string['eventusergraded'] = 'Оценка на потребителя';
$string['excluded'] = 'Изключен';
$string['excluded_help'] = 'Ако е поставена отметка, оценката няма да бъде включена в нито едно събиране.';
$string['expand'] = 'Разширете категорията';
$string['expandcriterion'] = 'Критерий за разширяване';
$string['export'] = 'Експортиране';
$string['exportalloutcomes'] = 'Експортиране на всички качества';
$string['exportas'] = 'Експортиране като';
$string['exportfeedback'] = 'Включване на обратната връзка в експортирането';
$string['exportfeedback_desc'] = 'Това може да се уточни и по време на експорт.';
$string['exportformatoptions'] = 'Опции на формата за експортиране';
$string['exportonlyactive'] = 'Изключване на блокираните потребители';
$string['exportonlyactive_help'] = 'Включване в експортирането само на студентите, които са активни и чието участие в курса не е блокирано';
$string['exportplugins'] = 'Експортиране на добавки';
$string['exportsettings'] = 'Експортиране на настройки';
$string['exportto'] = 'Експортиране към';
$string['extracreditvalue'] = 'Стойност на допълнителния кредит за {$a}';
$string['feedback'] = 'Забележка';
$string['finalgrade'] = 'Крайна оценка';
$string['fixedstudents'] = 'Неподвижни колони на студентите';
$string['fixedstudents_help'] = 'Позволява оценките да се превъртат хоризонтално, а колоните на студентите да остават неподвижни и да се виждат на екрана.';
$string['forceimport_help'] = 'Изпълни импортирането на оценките дори когато оценките са обновявани след датата, когато текущия файл за импорт е бил експортиран.';
$string['fullmode'] = 'Показване на оценки и общи резултати';
$string['generalsettings'] = 'Общи настройки';
$string['grade'] = 'Оценка';
$string['gradeadministration'] = 'Администриране на оценки';
$string['gradebook'] = 'Книга за оценки';
$string['gradebooksetup'] = 'Настройки на оценките';
$string['gradecategory'] = 'Категория на оценката';
$string['gradecategoryonmodform'] = 'Категория на оценката';
$string['gradecategoryonmodform_help'] = 'Тази настройка определя в коя категория в книгата за оценки ще се покаже оценката от дейността.';
$string['gradecategorysettings'] = 'Настройки на категорията на оценката';
$string['gradedisplaytype'] = 'Тип на показваната стойност';
$string['gradedisplaytype_help'] = 'Тази настройка определя как се показват оценките в отчетите за оценяващите и за потребителите.

* Буква - Букви или думи се използват за представяне на диапазон от оценки, както е дефинирано в \'Букви\' в настройката на дневника за оценки
* Процент - Относително спрямо максималните и минималните оценки
* Реален - Действителни оценки или стойности по скалата';
$string['gradeexport'] = 'Експортиране на оценки';
$string['gradeexportcustomprofilefields'] = 'Експортирани на дефинирани полета от потребителския профил';
$string['gradeexportcustomprofilefields_desc'] = 'Включване на тези дефинирани полета от потребителския профил при експортиране на оценки, разделени със запетаи.';
$string['gradeexportdecimalpoints'] = 'Десетични знаци за експортиране на оценки';
$string['gradeexportdecimalpoints_desc'] = 'Брой на десетичните знаци, които да се показват в експортираните оценки. Това може да се уточни и по време на експорт.';
$string['gradeexportdisplaytype'] = 'Тип на показване на оценките при експортиране';
$string['gradeexportdisplaytype_desc'] = 'При експортиране оценките могат да се показват като дробни числа, проценти (спрямо минималната и максимална оценки) или с букви (А, Б, В и т.н.). Това може да се уточни и по време на експорт.';
$string['gradeexportdisplaytypes'] = 'Тип на показване на експортираните оценки';
$string['gradeexportuserprofilefields'] = 'Експортирани полета от потребителския профил';
$string['gradeexportuserprofilefields_desc'] = 'Включване на тези полета от потребителския профил при експортиране на оценки, разделени със запетаи.';
$string['gradehistorylifetime'] = 'Продължителност на историята на оценките';
$string['gradehistorylifetime_help'] = 'Това определя колко време Вие искате да пазите историята на промените в таблиците с оценки. Препоръчва се да се пази история колкото е възможно по-дълго. Ако възникнат проблеми с производителността или има ограничение за обема на базата данни, опитайте да зададете по-малка стойност.';
$string['gradeitem'] = 'Оценка за';
$string['gradeitemaddusers'] = 'Изключи от оценяването';
$string['gradeitemadvanced'] = 'Настройки за разширено показване';
$string['gradeitemadvanced_help'] = 'Изберете елементите, които трябва да излизат при "Разширено показване" при редактиране оценката за дадена работа.';
$string['gradeitemislocked'] = 'Тази дейност е заключена в дневника за оценки. Промените в оценките, които са направени в тази дейност, няма да се копират в дневника, докато не бъде отключена.';
$string['gradeitemlocked'] = 'Оценяването е заключено';
$string['gradeitemmembersselected'] = 'Изключен от оценяването';
$string['gradeitemsettings'] = 'Настройки на оценяваната работа';
$string['gradeitemsinc'] = 'Да се включат оценките за работите';
$string['gradeletter'] = 'Букви за оценяване';
$string['gradeletter_help'] = 'Буквите за оценка са латински букви, A, B, C ..., или думи, например Отличен, Мн. добър, Добър, ..., използвани да представят диапазона на оценките.';
$string['gradeletteroverridden'] = 'Буквите за оценка, зададени по подразбиране, в момента са изменени.';
$string['gradeletters'] = 'Букви за оценяване';
$string['gradelocked'] = 'Оценката е заключена';
$string['grademax'] = 'Максимална оценка';
$string['grademax_help'] = 'Тази настройка определя максималната оценка, когато се използва оценка тип стойност. Максималната оценка за конкретна дейност се задава на страницата с настройките на дейността.';
$string['grademin'] = 'Минимална оценка';
$string['grademin_help'] = 'Тази настройка определя минималната оценка, когато се използва оценка тип стойност.';
$string['gradeoutcomes'] = 'Качества';
$string['gradeoutcomescourses'] = 'Курсови качества';
$string['gradepass'] = 'Оценка за преминаване';
$string['gradepass_help'] = 'Настройката определя минималната оценка за преминаване. Стойността се използва в дейностите и напредването в курса, и в дневника с оценките, където оценките за преминаване се оцветяват в зелено, а оценките, с които не се преминава напред - в червено.';
$string['gradepreferences'] = 'Предпочитания за оценките';
$string['gradepublishing'] = 'Позволяване на публикуване';
$string['gradepublishing_help'] = 'Публикуването на оценки е начин за импортиране и експортиране на оценки чрез URL адрес, без да е необходимо да се влиза в Moodle. Ако е активирано, администраторите и потребителите с разрешение за публикуване на оценки (по подразбиране, потребители с роля само на мениджър) получават настройки за публикуване и експортиране на оценки във всеки дневник за оценки на курса.';
$string['gradereport'] = 'Отчет на оценките';
$string['graderreport'] = 'Отчет за оценяващ';
$string['grades'] = 'Оценки';
$string['gradesforuser'] = 'Оценки на {$a->user}';
$string['gradesonly'] = 'Показване само на оценки';
$string['gradessettings'] = 'Настройки на оценките';
$string['gradetype'] = 'Тип оценка';
$string['gradetype_help'] = 'Има 4 типа оценки:

* Без оценка - Не е възможна оценка
* Стойност - Числова стойност с минимум и максимум
* Скала - Оценка от зададен списък оценки
* Текст - Само забележка

Само оценките от тип стойност и скала се обобщават. Типът на оценката за конкретна дейност се задава в страницата за настройки на дейността.';
$string['groupavg'] = 'Средно за групата';
$string['hidden'] = 'Скрити';
$string['hidden_help'] = 'Ако е сложена тази отметка, оценките се скриват от студентите. Ако е желателно може да се зададе дата за "Скрити до", за да се покажат оценките след като оценяването приключи.';
$string['hiddenasdate'] = 'Показване дата на предаване за скритите оценки';
$string['hiddenasdate_help'] = 'Ако потребителят не може да вижда скритите оценки, да се показва датата на предаване вместо "-".';
$string['hiddenuntil'] = 'Скрити до';
$string['hiddenuntildate'] = 'Скрити до: {$a}';
$string['hideadvanced'] = 'Скриване на разширените възможности';
$string['hidecategory'] = 'Скрита';
$string['hideforcedsettings'] = 'Скриване на принудителните настройки';
$string['hideforcedsettings_help'] = 'Да не се показват принудителните настройки в потребителския интерфейс за оценките.';
$string['hidegroups'] = 'Скриване на групи';
$string['hidenooutcomes'] = 'Показване на качества';
$string['hidetotalifhiddenitems'] = 'Скриване на обощените ако съдържат скрити единици';
$string['hidetotalifhiddenitems_help'] = 'Тази настройка определя дали обобщените оценки, които съдържат оценки за скрити единици, се показват на студентите или се заместват с тире (-). Ако се показват, обобщените оценки се изчисляват с изключване или с включване на оценките от скрити единици.

Ако скритите единици се изключват, обобщената оценка е различна от тази, която вижда преподавателя в отчета, защото той винаги вижда обобщена оценка изчислена от всички единици, скрити или не. Ако скритите оценки се включват, студентите биха могли да пресметнат скритите единици.';
$string['hidetotalshowexhiddenitems'] = 'Показване на обобщените с изключени скрити';
$string['hidetotalshowinchiddenitems'] = 'Показване на обобщените с включени скрити';
$string['hideverbose'] = 'Скриване на {$a->category} {$a->itemmodule} {$a->itemname}';
$string['idnumbers'] = 'Ид. номера';
$string['import'] = 'Импортиране';
$string['importcsv'] = 'Импортиране на CSV';
$string['importcsv_link'] = 'grade/import/csv/index';
$string['importcustom'] = 'Импортиране като частни качества (само за този курс)';
$string['importfailed'] = 'Импортирането пропадна. Не са импортирани данни.';
$string['importfeedback'] = 'Импортиране на обратна връзка';
$string['importfile'] = 'Импортиране на файл';
$string['importfrom'] = 'Импортиране от';
$string['importoutcomes'] = 'Импортиране на качества';
$string['importoutcomes_help'] = 'Качества могат да се импортират от csv файл с формат като на файл за експортиране на качества в csv файл.';
$string['importoutcomes_link'] = 'grade/outcome';
$string['importpreview'] = 'Преглед на импортирането';
$string['importsettings'] = 'Импортиране на настройки';
$string['importskippedoutcome'] = 'Качество с кратко име "{$a}" вече съществува в този контекст, това от импортирания файл беше прескочено.';
$string['importstandard'] = 'Импортиране като стандартни качества';
$string['importxml'] = 'Импортиране на XML';
$string['includescalesinaggregation'] = 'Включване на скалите при обобщаването';
$string['includescalesinaggregation_help'] = 'Можете да определите дали скалите да се включват като числа във всички обобщени оценки, във всички дневници с оценки, във всички курсове. ВНИМАНИЕ: промяната на тази настройка, ще накара всички обобщени оценки да се преизчислят.';
$string['incorrectminmax'] = 'Минимумът трябва да е повече от максимума';
$string['inherit'] = 'Наследен';
$string['iteminfo'] = 'Информация за единицата';
$string['iteminfo_help'] = 'Тази настройка предоставя място за въвеждане на информация относно единицата. Тази информация не се показва никъде другаде.';
$string['itemname'] = 'Име на единица';
$string['itemsedit'] = 'Редактиране на единицата за оценяване';
$string['keephigh'] = 'Пазене на най-високите';
$string['keephigh_help'] = 'Ако е зададена, тази настройка определя да се пазят най-високите Х оценки, където Х е зададена тук стойност.';
$string['letter'] = 'Буква';
$string['letterpercentage'] = 'Буква (проценти)';
$string['letterreal'] = 'Буква (реални)';
$string['letters'] = 'Букви';
$string['linktoactivity'] = '{$a->name} дейност {$a->title}';
$string['lock'] = 'Заключване';
$string['locked'] = 'Заключени';
$string['locked_help'] = 'Ако е сложена тази отметка, оценките не могат повече да се актуализират автоматично от съответната дейност.';
$string['locktime'] = 'Заключени след';
$string['locktimedate'] = 'Заключени след: {$a}';
$string['lockverbose'] = 'Заключване на {$a->category} {$a->itemmodule} {$a->itemname}';
$string['max'] = 'Най-висока';
$string['maxgrade'] = 'Максимална оценка';
$string['meanall'] = 'Всички оценки';
$string['meangraded'] = 'Непразните оценки';
$string['meanselection'] = 'Оценки, включени в средните по колони';
$string['meanselection_help'] = 'Тази настройка означава дали клетките с липсващи оценки трябва да се включат при изчисляване на средните за всяка категория или оценявана единица.';
$string['min'] = 'Най-ниска';
$string['minmaxtouse_link'] = 'Grades_min_max';
$string['missingscale'] = 'Трябва да бъде избрана скала';
$string['modgrade'] = 'Оценка';
$string['modgradecantchangegradetypemsg'] = 'Някои оценки вече са поставени, затова типът на оценката не може да бъде променен. Ако искате да промените максималната оценка трябва да изберете дали да се заменят съществуващите оценки или не.';
$string['modgradecantchangegradetyporscalemsg'] = 'Някои оценки вече са поставени, затова типът и скалата на оценката не може да бъдат променени.';
$string['modgradeerrorbadpoint'] = 'Невалидна стойност за оценката. Тя трябва да бъде цяло число между 1 и {$a}';
$string['modgrademaxgrade'] = 'Максимална оценка';
$string['modgraderescalegrades'] = 'Замяна на съществуващите оценки';
$string['modgradetype'] = 'Тип';
$string['modgradetypenone'] = 'Без оценка';
$string['modgradetypepoint'] = 'Точки';
$string['modgradetypescale'] = 'Скала';
$string['moveselectedto'] = 'Преместване на избраните елементи в:';
$string['multfactor'] = 'Множител';
$string['multfactor_help'] = 'Множителят е число, с което се умножава всяка оценка за дадената единица, до максимална стойност на максималната оценка. Например, ако множителят е 2 и максималната стойност е 100, тогава всички оценки под 50 се умножават по 2, а всички оценки над 50 се променят на 100.';
$string['multfactorvalue'] = 'Стойност на множител за {$a}';
$string['mustchooserescaleyesorno'] = 'Трябва да изберете дали да се заменят съществуващите оценки или не.';
$string['mypreferences'] = 'Моите предпочитания';
$string['myreportpreferences'] = 'Мои предпочитания';
$string['newcategory'] = 'Нова категория';
$string['nocourses'] = 'Все още няма курсове';
$string['noexistingoutcomes'] = 'Няма съществуващи качества.';
$string['nogradeletters'] = 'Не са зададени букви за оценяване';
$string['nonunlockableverbose'] = 'За да отключите тази оценка, трябва да отключите {$a->itemname}.';
$string['nopublish'] = 'Не се публикуват';
$string['noreports'] = 'Вие не сте записани и не преподавате в курсове на този сайт.';
$string['noscales'] = 'Качествата трябва да бъдат свързани със скала от курса или с глобална скала, но тук не са. Искате ли да добавите скала?';
$string['notteachererror'] = 'Трябва да сте учител за да използвате тази функция.';
$string['numberofgrades'] = 'Брой на оценките';
$string['options'] = 'Настройки';
$string['outcomecreate'] = 'Добавяне на ново качество';
$string['outcomefullname'] = 'Пълно наименование';
$string['outcomeitemsedit'] = 'Редактиране на единицата за качество';
$string['outcomes'] = 'Качества';
$string['outcomescourse'] = 'Качества, използвани в курс';
$string['outcomescustom'] = 'Частни качества';
$string['outcomeshortname'] = 'Кратко име';
$string['outcomesstandard'] = 'Стандартни качества';
$string['outcomesstandardavailable'] = 'Налични стандартни качества';
$string['outcomestandard'] = 'Стандартно качество';
$string['outcomestandard_help'] = 'Стандартното качество е достъпно на целия сайт, във всички курсове.';
$string['overallaverage'] = 'Обща средна';
$string['overridden'] = 'Променяна';
$string['overridden_help'] = 'Ако отметката е сложена, оценката няма да може повече да се променя в рамките на съответната дейност.

Когато една оценка се редактира в отчета с оценките, тази отметка се поставя автоматично. Въпреки това тя може да се премахне за да може оценката да се актуализира чрез съответната дейност.';
$string['parentcategory'] = 'Родителска категория';
$string['percentage'] = 'Проценти';
$string['percentageletter'] = 'Проценти (буква)';
$string['percentagereal'] = 'Проценти (реални)';
$string['plusfactor'] = 'Отместване';
$string['plusfactor_help'] = 'Отместването е число, което се прибавя към всяка оценка за дадена единица, след прилагането на множител.';
$string['plusfactorvalue'] = 'Стойност на отместване за {$a}';
$string['points'] = 'точки';
$string['positionfirst'] = 'Първа';
$string['positionlast'] = 'Последна';
$string['preferences'] = 'Предпочитания';
$string['prefgeneral'] = 'Общи настройки';
$string['prefletters'] = 'Букви за оценяване и граници';
$string['prefrows'] = 'Специални редове';
$string['prefshow'] = 'Превключване на видимостта';
$string['previewrows'] = 'Редове за преглед';
$string['profilereport'] = 'Отчет в профила';
$string['profilereport_help'] = 'Отчет за оценките, използван на страницата с профила на потребителя.';
$string['quickfeedback'] = 'Бързи забележки';
$string['quickgrading'] = 'Бързо оценяване';
$string['quickgrading_help'] = 'Ако е разрешено, когато редактирането е включено, на мястото на всяка оценка се показва малко поле за въвеждане и това позволява бързо да се напишат много оценки. Промените се запазват и оцветяват след щракване на бутона за запазване.

Забележете, че когато се редактира една оценка в отчета с оценки, се вдига флаг, който означава, че тази оценка не може да се промени повече в рамките на дейността.';
$string['range'] = 'Диапазон';
$string['rangedecimals'] = 'Диапазон на десетичните знаци';
$string['rangedecimals_help'] = 'Броят на десетичните знаци, които да се показват за диапазона.';
$string['rangesdecimalpoints'] = 'Десетични знаци в диапазоните';
$string['rangesdecimalpoints_help'] = 'Тази настройка определя броя на десетичните знаци, които да се показват за всеки диапазон, или дали се използва общата настройка за десетичните знаци за категорията или елемента на оценката (наследяване).';
$string['rangesdisplaytype'] = 'Вид показване на диапазоните';
$string['rangesdisplaytype_help'] = 'Тази настройка определя дали диапазоните се показва като реални, в проценти или с букви, или по начина, определен за категорията или единицата за оценяване (Наследен).';
$string['real'] = 'Реална';
$string['realletter'] = 'Реално (букви)';
$string['realpercentage'] = 'Реално (проценти)';
$string['recovergradesdefault'] = 'Възстановяване на оценките по подразбиране';
$string['recovergradesdefault_help'] = 'По подразбиране да се възстановяват старите оценки на потребителя, когато се запише отново в курс.';
$string['refreshpreview'] = 'Опресняване на прегледа';
$string['removeallcoursegrades'] = 'Изтрий всички оценки';
$string['removeallcourseitems'] = 'Изтриване на всички записи и категории';
$string['report'] = 'Отчет';
$string['reportdefault'] = 'По подразбиране за отчета ({$a})';
$string['reportsettings'] = 'Настройки на отчета';
$string['resetweights'] = 'Нулиране на тежестите за {$a->itemname}';
$string['resetweightsshort'] = 'Нулиране на тежестите';
$string['rowpreviewnum'] = 'Редове за преглед';
$string['savechanges'] = 'Записване на промените';
$string['savepreferences'] = 'Запазване на предпочитанията';
$string['scaleconfirmdelete'] = 'Сигурни ли сте, че искате да изтриете скалата "{$a}"?';
$string['seeallcoursegrades'] = 'Виждане на всички оценки в курса';
$string['selectalloroneuser'] = 'Изберете всички или един потребител';
$string['selectauser'] = 'Изберете потребител';
$string['separator'] = 'Разделител';
$string['sepcomma'] = 'Запетая';
$string['septab'] = 'Табулатор';
$string['setgradeletters'] = 'Задай букви за оценяване';
$string['setpreferences'] = 'Запазване на предпочитанията';
$string['settings'] = 'Настройки';
$string['setup'] = 'Настройки';
$string['showactivityicons'] = 'Показване икони на дейностите';
$string['showactivityicons_help'] = 'Ако е зададено, до имената на дейностите се показват и икони.';
$string['showallhidden'] = 'Показване на скритите';
$string['showallstudents'] = 'Показване на всички ученици';
$string['showanalysisicon'] = 'Икона за анализ на оценката';
$string['showanalysisicon_desc'] = 'Дали по подразбиране да се показва икона за анализ на оценката. Ако модулът за дейността поддържа това, щракването върху иконата за анализ на оценката отваря страница с подробности, обясняващи как е получена оценката.';
$string['showanalysisicon_help'] = 'Ако модулът за дейността поддържа това, щракването върху иконата за анализ на оценката отваря страница с подробности, обясняващи как е получена оценката.';
$string['showaverage'] = 'Показване на средна';
$string['showaverage_help'] = 'Дали да се покаже колона за средна. Забележете, че участниците биха могли да изчислят оценките на другите ако средната стойност се изчислява от малък брой оценки. Поради съображения за производителност средната стойност се пресмята приблизително ако зависи от скрити единици.';
$string['showaverages'] = 'Показване на средни по колони';
$string['showaverages_help'] = 'Ако се включи, отчета на оценките ще съдържа допълнителен ред, показващ средната оценка за всяка категория и оценявана единица.';
$string['showcalculations'] = 'Показване на изчисленията';
$string['showcalculations_help'] = 'Ако е разрешено, когато е включено редактирането, се показва иконка за редактиране на всяка оценявана единица и категория и индикатор, че оценката е изчислена.';
$string['showcontributiontocoursetotal'] = 'Показване дял в оценката за курса';
$string['showcontributiontocoursetotal_help'] = 'Дали да се показва колона с проценти, показващи каква част от оценката на потребителя за курса се формира от дадената оценка (сред като са приложени теглата).';
$string['showeyecons'] = 'Икони показване/скриване';
$string['showeyecons_help'] = 'Ако е зададено, когато редактирането е включено, се показва икона "показване/скриване" за всяка оценка, с която се управлява дали студентът вижда или не тази оценка.';
$string['showfeedback'] = 'Показване на забележките';
$string['showfeedback_help'] = 'Дали да се покаже колоната със забележки.';
$string['showgrade'] = 'Показване на оценките';
$string['showgrade_help'] = 'Даали да се покаже колоната с оценки.';
$string['showgroups'] = 'Показване на групи';
$string['showhiddenitems'] = 'Показване на скритите единици';
$string['showhiddenitems_help'] = 'Дали скритите единици за оценяване са напълно скрити или имената на скритите единици са видими за студентите.

* Показване на скритите - Имената на критите единици за оценяване се виждат но оценките на студентите са скрити
* Само скрити до - Единиците за оценяване с настройка "Скрита до" са скрити до зададената дата, след което са напълно видими
* Да не се показват - Скритите единици за оценяване са напълно скрити';
$string['showhiddenuntilonly'] = 'Само скрити до';
$string['showlettergrade'] = 'Показване на буквените оценки';
$string['showlettergrade_help'] = 'Дали да се показва колона за буквени оценки.';
$string['showlocks'] = 'Икони "заключване/отключване"';
$string['showlocks_help'] = 'Ако е зададено, когато е включено редактирането, за всяка оценка се показва икона "заключване/отключване", която определя дали оценката може автоматично да се актуализира от съответната дейност.';
$string['shownohidden'] = 'Да не се показват';
$string['shownooutcomes'] = 'Скриване на качества';
$string['shownumberofgrades'] = 'Показване на броя в средните оценки';
$string['shownumberofgrades_help'] = 'Ако е зададено, броят на оценките, използвани при изчисляване на средните се показва в скоби след всяка средна оценка.';
$string['showonlyactiveenrol'] = 'Показване само на активните участници';
$string['showonlyactiveenrol_help'] = 'Тази настройка определя дали да се показват в отчета на оценките само активните участници. Ако е включена блокираните потребители няма да се показват в дневника за оценки.';
$string['showpercentage'] = 'Показване процента на такива оценки';
$string['showpercentage_help'] = 'Дали да се показва оценката в проценти за всяка единица.';
$string['showquickfeedback'] = 'Показване на бързи забележки';
$string['showquickfeedback_help'] = 'Ако е включено, когато е включено редактиране, се показва поле за писане срещу всяка оценка, позволявайки забележките за много оценки да бъдат редактирани едновременно. Промените се запазват и оцветяват, когато бъде щракнат бутона за актуализиране.

Обърнете внимание, че забележките се редактират в отчета с оценките, и се вдига флаг, който означава, че забележките не могат повече да се променят в рамките на дейността.';
$string['showrange'] = 'Показване на диапазоните';
$string['showrange_help'] = 'Дали да се показва колона за диапазони.';
$string['showranges'] = 'Показване на диапазоните';
$string['showranges_help'] = 'Ако е включено, отчета на оценките ще съдържа допълнителен ред, показващ диапазона от оценки за всяка категория или единица.';
$string['showrank'] = 'Показване на класация';
$string['showrank_help'] = 'Дали да се показва мястото на студента между останалите студенти по всяка оценка.';
$string['showuserimage'] = 'Показване снимките на потребителите';
$string['showuserimage_help'] = 'Дали да се показват снимките на потребителите до техните имена в отчета с оценките.';
$string['showweight'] = 'Показване на теглата';
$string['showweight_help'] = 'Дали да се покаже колоната с теглата.';
$string['simpleview'] = 'Единично показване';
$string['sitewide'] = 'За целия сайт';
$string['sortbyfirstname'] = 'Сортиране по име';
$string['standarddeviation'] = 'Стандартно отклонение';
$string['stats'] = 'Статистики';
$string['studentsperpage'] = 'Студенти на страница';
$string['studentsperpage_help'] = 'Тази настройка определя броя на студентите показвани на една страница в отчета за оценяващия.';
$string['studentsperpagereduced'] = 'Намален максимален брой студенти на страница от {$a->originalstudentsperpage} на {$a->studentsperpage}. Помислете за увеличаване на PHP настройката  max_input_vars от {$a->maxinputvars}.';
$string['subcategory'] = 'Нормална категория';
$string['submissions'] = 'Предадени задания';
$string['total'] = 'Общо';
$string['turnfeedbackoff'] = 'Изключете обратната връзка';
$string['turnfeedbackon'] = 'Включете обратната връзка';
$string['typenone'] = 'Без оценка';
$string['typescale'] = 'Скала';
$string['typescale_help'] = 'Тази настройка определя скалата, използвана при оценка от тип скала. Скалата за оценяване на дейност се настройва на страницата за настройване на дейността.';
$string['typetext'] = 'Текст';
$string['typevalue'] = 'Стойност';
$string['uncategorised'] = 'Некатегоризирана';
$string['unchangedgrade'] = 'Оценката непроменена';
$string['unenrolledusersinimport'] = 'Това импортиране включваше следните оценки за потребители, които в момента не са записани в този курс: {$a}';
$string['unlimitedgrades'] = 'Неограничени оценки';
$string['unlimitedgrades_help'] = 'По подразбиране оценките са ограничени от максималната и минимална оценки в настройките на заданията. Поставянето на тази отметка, премахва ограниченията и позволява оценки със стойности над 100% директно да се записват в дневника с оценки.';
$string['unlock'] = 'Отключване';
$string['unlockverbose'] = 'Отключване на {$a->category} {$a->itemmodule} {$a->itemname}';
$string['unused'] = 'Неизползван';
$string['updatedgradesonly'] = 'Експортирайте само нови или актуализирани оценки';
$string['upgradedgradeshidemessage'] = 'Отхвърляне на известието';
$string['upgradedminmaxrevertmessage'] = 'Отмяна на промените';
$string['uploadgrades'] = 'Качване на оценки';
$string['useadvanced'] = 'Използване на разширени възможности';
$string['usedcourses'] = 'Използвани курсове';
$string['usedgradeitem'] = 'Използвана оценка';
$string['usenooutcome'] = 'Използване без резултат';
$string['usenoscale'] = 'Да не се използва сакала';
$string['usepercent'] = 'Използвайте процента';
$string['user'] = 'Потребител';
$string['userenrolmentsuspended'] = 'Регистрирането на потребители е спряно';
$string['userfields_show'] = 'Показване на потребителските полета';
$string['userfields_show_help'] = 'Показване на допълнителните потребителски полета като имейл в отчета за оценка. Показаните полета се контролират от настройката на сайта показване на идентичността на потребителя';
$string['usergrade'] = 'Потребител {$a->fullname} ({$a->useridnumber}) на елемент {$a->gradeidnumber}';
$string['userid'] = 'Потребителски идентификатор';
$string['userpreferences'] = 'Предпочитания на потребителя';
$string['verbosescales'] = 'Подробни скали';
$string['viewbygroup'] = 'Група';
$string['viewgrades'] = 'Разглеждане на оценки';
$string['weight'] = 'Тежест';
$string['weightofa'] = 'Тежест на {$a}';
$string['weightorextracredit'] = 'Тежест или допълнителна заслуга';
$string['weights'] = 'Тежести';
$string['weightuc'] = 'Изчислено тегло';
$string['yes'] = 'Да';
