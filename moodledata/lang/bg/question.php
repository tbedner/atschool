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
 * Strings for component 'question', language 'bg', version '4.4'.
 *
 * @package     question
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = 'Действие';
$string['addanotherhint'] = 'Добавяне на друго подсказване';
$string['addcategory'] = 'Добавяне категория';
$string['addmorechoiceblanks'] = 'Празни места за още {no} избори';
$string['adminreport'] = 'Отчет за възможни проблеми във Вашата база данни с въпроси.';
$string['advancedsearchoptions'] = 'Опции за показване';
$string['answer'] = 'Отговор';
$string['answers'] = 'Отговори';
$string['answersaved'] = 'Отговорът съхранен';
$string['attemptfinished'] = 'Завършено изпълнение';
$string['attemptfinishedsubmitting'] = 'Изпълнение завършено с предаване:';
$string['attemptoptions'] = 'Настройки на отговарянето';
$string['availableq'] = 'Достъпен?';
$string['badbase'] = 'Лоша основа преди **: {$a}**';
$string['behaviour'] = 'Поведение';
$string['behaviourbeingused'] = 'Използвано поведение: {$a}';
$string['broken'] = 'Това е "счупена" хипервръзка, сочи към несъществуващ файл.';
$string['byandon'] = 'от <em>{$a->user}</em> в <em>{$a->time}</em>';
$string['cannotcopybackup'] = 'Не може да се копира архивния файл';
$string['cannotcreate'] = 'Не може да се създаде нов запис в таблица question_attempts';
$string['cannotcreatepath'] = 'Не може да се създаде път: {$a}';
$string['cannotdeletebehaviourinuse'] = 'Не можете да изтриете поведението "{$a}". То се използва за отговаряне на въпроси.';
$string['cannotdeletecate'] = 'Не можете да изтриете тази категория, тя е категория по подразбиране в този контекст.';
$string['cannotdeleteneededbehaviour'] = 'Не можете да изтриете поведение на въпрос "{$a}". Има други инсталирани поведения, които зависят от него.';
$string['cannotdeleteqtypeinuse'] = 'Не можете да изтриете тип въпрос "{$a}". Има въпроси от този тип в банката с въпроси.';
$string['cannotdeleteqtypeneeded'] = 'Не можете да изтриете тип въпрос "{$a}". Има други инсталирани типове въпроси, които зависят от него.';
$string['cannotenable'] = 'Тип въпрос {$a} не може да се създаде директно.';
$string['cannotenablebehaviour'] = 'Поведение въпрос {$a} не може да се използва директно. Той е само за вътрешно ползване от системата.';
$string['cannotfindcate'] = 'Не може да се намери запис на категория';
$string['cannotfindquestionfile'] = 'Не може да се намери файл с данни за въпроси в zip архива';
$string['cannotgetdsfordependent'] = 'Не може да се намери зададения набор данни за въпрос, който зависи от данни! (въпрос: {$a->id}, единица от данни: {$a->item})';
$string['cannotgetdsforquestion'] = 'Не може да се намери зададения набор данни за изчислителен въпрос! (въпрос: {$a})';
$string['cannothidequestion'] = 'Не беше възможно да се скрие въпроса';
$string['cannotimportformat'] = 'За съжаление импортирането на този формат още не е реализирано!';
$string['cannotinsertquestioncatecontext'] = 'Не може да се вмъкне новата категория въпроси {$a->cat} невалиден номер (id) на контекст {$a->ctx}';
$string['cannotloadquestion'] = 'Не може да се зареди въпрос';
$string['cannotmovequestion'] = 'Не можете да използвате този скрипт за да преместите въпрос, който е асоцииран с файлове от различни области.';
$string['cannotopenforwriting'] = 'Не може да се отвори за запис: {$a}';
$string['cannotpreview'] = 'Не можете да прегледате тези въпроси!';
$string['cannotread'] = 'Не може да се прочете файла за импортиране (или той е празен)';
$string['cannotretrieveqcat'] = 'Не може да се извлече категория въпроси';
$string['cannotunzip'] = 'Не може да се разархивира zip файла.';
$string['cannotwriteto'] = 'Не може да се запишат експортираните въпроси в {$a}';
$string['categories'] = 'Категории';
$string['category'] = 'Категория';
$string['categorycurrent'] = 'Текуща категория';
$string['categorycurrentuse'] = 'Използване на тази категория';
$string['categorydoesnotexist'] = 'Тази категория не съществува';
$string['categoryinfo'] = 'Информация за категория';
$string['categorymove'] = 'Категорията "{$a->name}" съдържа {$a->count} въпроса (някои от тях може да са: стари, скрити, въпроси, които са още в употреба в някой съществуващ тест). Моля, изберете друга категория, в която да ги преместите.';
$string['categorymoveto'] = 'Запис в категория';
$string['categorynamecantbeblank'] = 'Името на категория не може да е празно.';
$string['changeoptions'] = 'Промяна на настройките';
$string['check'] = 'Отговаряне на въпроса';
$string['chooseqtypetoadd'] = 'Изберете типа на въпроса, който ще добавите';
$string['clearwrongparts'] = 'Почистване на грешните отговори';
$string['clickflag'] = 'Отбелязване на въпроса';
$string['clicktoflag'] = 'Отбелязване на този въпрос за бъдещо преглеждане';
$string['clicktounflag'] = 'Премахване на отбелязването';
$string['clickunflag'] = 'Премахване на отбелязването';
$string['closepreview'] = 'Край на прегледа';
$string['combinedfeedback'] = 'Комбинирани забележки';
$string['comment'] = 'Коментар';
$string['commented'] = 'Коментирано: {$a}';
$string['commentormark'] = 'Правене на коментар или пренаписване на оценка';
$string['comments'] = 'Коментари';
$string['commentx'] = 'Коментар: {$a}';
$string['complete'] = 'Отговорен';
$string['contexterror'] = 'Не трябва да сте стигнали до тук, освен ако не сте преместили категория към друг контекст.';
$string['copy'] = 'Копиране от {$a} и променяне на връзките.';
$string['correct'] = 'Правилно';
$string['correctfeedback'] = 'За всеки правилен отговор';
$string['correctfeedbackdefault'] = 'Вашият отговор е верен.';
$string['created'] = 'Създаден';
$string['createdby'] = 'Създаден от';
$string['createdmodifiedheader'] = 'Създаден / последно записан';
$string['createnewquestion'] = 'Създаване на нов въпрос ...';
$string['decimalplacesingrades'] = 'Десетични цифри в оценките';
$string['defaultfor'] = 'По подразбиране за "{$a}"';
$string['defaultinfofor'] = 'Категорията по подразбиране за въпроси, поделяни в контекста на "{$a}".';
$string['defaultmark'] = 'Брой точки';
$string['defaultmarkmustbepositive'] = 'Точките по подразбиране трябва да са положителни.';
$string['deletequestioncheck'] = 'Напълно ли сте сигурни, че искате да изтриете "{$a}"?';
$string['deletequestionscheck'] = 'Сигурни ли сте, че искате да изтриете следните въпроси?<br /><br />{$a}';
$string['deletingbehaviour'] = 'Изтриване на поведение на въпрос "{$a}"';
$string['deletingqtype'] = 'Изтриване на въпрос тип "{$a}"';
$string['didnotmatchanyanswer'] = '[Не съвпада с никой отговор]';
$string['disabled'] = 'Отменено';
$string['displayoptions'] = 'Настройки на показването';
$string['disterror'] = 'Дистрибуцията {$a} предизвиква проблеми';
$string['donothing'] = 'Не копирайте или премествайте файлове, или променяйте връзки.';
$string['editcategories'] = 'Редактиране на категории';
$string['editcategories_help'] = 'Вместо да държите всички въпроси в един голям списък, те могат да се разпределят в категории и подкатегории.

Всяка категория се отнася за определен контекст, в който въпросите от нея може да се използват:

* Контекст дейност - Въпросите са достъпни само в модула на дейността
* Контекст курс - Въпросите са достъпни във всички дейности на един курс
* Контекст категория курсове - Въпросите са достъпни във всички курсове от категорията курсове и във дейностите в тях
* Контекст система - Въпросите са достъпни във всички курсове и дейности на сайта

Категориите въпроси се използват също за случайно избиране на въпроси, като въпросите се избират от посочена категория.';
$string['editcategories_link'] = 'question/category';
$string['editcategory'] = 'Редактиране на категория';
$string['editingcategory'] = 'Редактиране на категория';
$string['editingquestion'] = 'Редактиране на въпрос';
$string['editquestion'] = 'Редактиране на въпрос';
$string['editquestions'] = 'Редактиране на въпроси';
$string['editthiscategory'] = 'Редактиране на тази категория';
$string['emptyxml'] = 'Непозната грешка - празен imsmanifest.xml';
$string['enabled'] = 'Разрешен';
$string['errordeletingquestionsfromcategory'] = 'Грешка при изтриване на въпрос от категория {$a}.';
$string['errorduringregrade'] = 'Не можа да се преоцени въпрос {$a->qid}, от състояние {$a->stateid}.';
$string['errorfilecannotbecopied'] = 'Грешка: не може да се копира файл {$a}.';
$string['errorfilecannotbemoved'] = 'Грешка: не може да се премести файл {$a}.';
$string['errorfileschanged'] = 'Грешка: файловете, към които има връзки от въпросите, са променени по времето докато се показваше формата.';
$string['errormanualgradeoutofrange'] = 'Оценката {$a->grade} не е между 0 и {$a->maxgrade} за въпрос {$a->name}. Резултатът и коментарът не бяха записани.';
$string['errormovingquestions'] = 'Грешка при преместване на въпросите с номера {$a}.';
$string['errorpostprocess'] = 'Грешка възникна по време на последващата обработка!';
$string['errorpreprocess'] = 'Грешка възникна по време на предварителната обработка!';
$string['errorprocess'] = 'Грешка възникна по време на обработката!';
$string['errorprocessingresponses'] = 'Грешка възникна по време на обработката на Вашите отговори ({$a}). Щракнете "Продължаване" за да се върнете на страницата, на която бяхте, и да опитате отново.';
$string['errorsavingflags'] = 'Грешка при записване състоянието на отбелязването.';
$string['export'] = 'Експортиране';
$string['exportasxml'] = 'Експортиране в Moodle XML';
$string['exportcategory'] = 'Експортиране на категория';
$string['exportcategory_help'] = 'Тази настройка определя от коя категория ще се вземат експортираните въпроси.

Определени формати за импортиране, като GIFT и Moodle XML, позволяват информацията за категориите и контекстите да бъде включена в експортирания файл, правейки възможно (ако се избере), да бъде възстановена при импортиране. Ако се изисква, съответните отметки трябва да се поставят.';
$string['exporterror'] = 'Възникна грешка по време на експортиране!';
$string['exportfilename'] = 'въпроси';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportonequestion'] = 'Изтегляне на този въпрос във формат Moodle XML';
$string['exportquestions'] = 'Експортиране на въпроси към файл';
$string['exportquestions_help'] = 'Тази функция позволява експортиране във файл на цяла категория (и всички подкатегории) от въпроси. Моля, обърнете внимание, че в зависимост от избрания файлов формат, някои данни за въпроси и определени типове въпроси може да не бъдат експортирани.';
$string['exportquestions_link'] = 'question/export';
$string['feedback'] = 'Забележка';
$string['filecantmovefrom'] = 'Файловете с въпроси не могат да се преместят, защото нямате право да изтривате файлове в мястото, където се намират.';
$string['filecantmoveto'] = 'Файловете с въпроси не могат да се преместят или копират, защото нямате правомо да добавяте файлове в мястото, където се опитвате да ги преместите.';
$string['fileformat'] = 'Файлов формат';
$string['filesareacourse'] = 'област за файлове на курса';
$string['filesareasite'] = 'област за файлове на сайта';
$string['filestomove'] = 'Местене / копиране на файлове към {$a}?';
$string['fillincorrect'] = 'Попълване на правилните отговори';
$string['filterbytags'] = 'Филтър по етикети';
$string['flagged'] = 'Отбелязан';
$string['flagthisquestion'] = 'Отбелязване на този въпрос';
$string['formquestionnotinids'] = 'Формата съдържаше въпрос, който не е в номерата въпроси.';
$string['fractionsnomax'] = 'Един от отговорите трябва да има резултат от 100%, така че да се получи пълна оценка върху въпроса само за този отговор.';
$string['generalfeedback'] = 'Обща забележка';
$string['generalfeedback_help'] = 'Общата забележка се показва на студента след като е отговорил на въпроса. За разлика от специфичната заблежка, която зависи от типа на въпроса и от отговора на студента, общата забележка е еднаква за всички студенти.

Вие може да използвате общата забележка за да покажете на студента верния отговор или евентуално да дадете хипервръзка към повече информация, която да използва ако не разбира въпроса.';
$string['getcategoryfromfile'] = 'Вземане на категория от файл';
$string['getcontextfromfile'] = 'Вземане на контекст от файл';
$string['hintn'] = 'Подсказване {no}';
$string['hintnoptions'] = 'Настройки за подсказване {no}';
$string['hinttext'] = 'Текст на подсказване';
$string['howquestionsbehave'] = 'Поведение на въпросите';
$string['howquestionsbehave_help'] = 'Студентите могат да взаимодействат с въпросите в теста по различен начин. Например, Вие може да искате студентите да въведат отговори на всички въпроси и да предадат целия тест, преди да бъде поставена каквато и да било оценка или да видят някакви забележки. Това би било "Отложена обратна връзка".

Или иначе, Вие може да искате студентите да изпращат отговори на всеки отделен въпрос и да получават веднага обратна информация, и ако не са отговорили правилно да опитат въпроса отново за по-малко точки. Това би било поведение "Интерактивно с много опити".

Това са може би най-обичайните начини на поведение.';
$string['howquestionsbehave_link'] = 'question/behaviour';
$string['idnumber'] = 'Ид. номер';
$string['idnumber_help'] = 'Ако се използва, Ид. номерът трябва да е уникален в рамките на категорията въпроси. Той осигурява друг начин за идентифициране на въпросите, който понякога е полезен, но обикновено може да се остави празен.';
$string['ignorebroken'] = 'игнориране на "счупените" връзки';
$string['import'] = 'Импортиране';
$string['importcategory'] = 'Импортиране на категория';
$string['importcategory_help'] = 'Тази настройка определя в коя категория ще отидат импортираните въпроси.

Определени формати за импортиране, като GIFT и Moodle XML, може да включват информация за категорията и контекста. За да използвате тези данни, вместо да избирате категория, трябва да поставите съответните отметки. Ако категориите от импортирания файл не съществуват, те ще бъдат създадени.';
$string['importerror'] = 'Възникна грешка при обработка на импортирането';
$string['importerrorquestion'] = 'Грешка при импортиране на въпрос';
$string['importfromcoursefiles'] = '... или изберете курс, в който да се импортира.';
$string['importfromupload'] = 'Избиране на файл за качване ...';
$string['importingquestions'] = 'Импортиране на {$a} въпроса от файл';
$string['importparseerror'] = 'Беше открита грешка/грешки при разчитане на импортирания файл. За да импортирате "добрите" въпроси, опитайте отново със стойност "Не" на настройката "Спиране при грешка".';
$string['importquestions'] = 'Импортиране на въпроси от файл';
$string['importquestions_help'] = 'Тази настройка позволява въпроси от различни типове да бъдат импортирани посредством текстов файл. Забележете, че той трябва да е с кодова таблица UTF-8.';
$string['importquestions_link'] = 'question/import';
$string['importwrongfiletype'] = 'Типът файл, който сте избрали ({$a->actualtype}) не отговаря на типа, който се очаква от този формат за импортиране ({$a->expectedtype}).';
$string['impossiblechar'] = 'Неподходящ символ {$a} е използван вместо скоба';
$string['includesubcategories'] = 'Показване също и на въпроси от под-категориите';
$string['incorrect'] = 'Неправилно';
$string['incorrectfeedback'] = 'За всеки неверен отговор';
$string['incorrectfeedbackdefault'] = 'Вашият отговор не е верен.';
$string['information'] = 'Информация';
$string['invalidanswer'] = 'Непълен отговор';
$string['invalidarg'] = 'Не са осигурени валидни аргументи или е некоректна конфигурацията на сървъра';
$string['invalidcategoryidforparent'] = 'Невалиден номер (id) на категория за родител!';
$string['invalidcategoryidtomove'] = 'Невалиден номер (id) на категория за преместване!';
$string['invalidconfirm'] = 'Потвърждаващият низ беше некоректен';
$string['invalidcontextinhasanyquestions'] = 'Невалиден контекст подаден на question_context_has_any_questions.';
$string['invalidgrade'] = 'Оценките не съответстват на настройките за оценяване - въпросът е пропуснат';
$string['invalidpenalty'] = 'Невалидно наказание';
$string['invalidwizardpage'] = 'Некоректна или неопределена страница "магьосник"!';
$string['lastmodifiedby'] = 'Последно модифициран от';
$string['makechildof'] = 'Направи наследник на "{$a}"';
$string['makecopy'] = 'Създаване на копие';
$string['maketoplevelitem'] = 'Преместване до най-горно ниво';
$string['manualgradeoutofrange'] = 'Тази оценка е извън валидния диапазон.';
$string['manuallygraded'] = 'Ръчно оценен {$a->mark} с коментар: {$a->comment}';
$string['mark'] = 'Точки';
$string['markedoutof'] = 'От максимално';
$string['markedoutofmax'] = 'От максимално {$a}';
$string['markoutofmax'] = '{$a->mark} от максимално {$a->max} точки';
$string['marks'] = 'Точки';
$string['matchgrades'] = 'Съпоставяне на оценките';
$string['matchgrades_help'] = 'Импортираните оценки трябва да съответстват на фиксиран списък от валидни оценки - 100, 90, 80, 75, 70, 66.666, 60, 50, 40, 33.333, 30, 25, 20, 16.666, 14.2857, 12.5, 11.111, 10, 5, 0 (също и отрицателни стойности).

* Грешка, ако оценката не е в списъка - Ако въпросът съдържа оценка, която не се намира в списъка, се показва грешка и въпросът няма да се импортира
* Най-близка оценка, ако не е в списъка - Ако оценка не се намира в списъка, тя се променя до най-близката, която й съответства от списъка';
$string['matchgradeserror'] = 'Грешка, ако оценката не е в списъка';
$string['matchgradesnearest'] = 'Най-близка оценка, ако не е в списъка';
$string['missingcourseorcmid'] = 'Трябва да се осигури courseid или cmid на print_question.';
$string['missingcourseorcmidtolink'] = 'Трябва да се осигури courseid или cmid на get_question_edit_link.';
$string['missingimportantcode'] = 'На този тип въпрос му липсва важен код: {$a}.';
$string['modified'] = 'Последно записан';
$string['move'] = 'Преместване от {$a} и променяне на връзката.';
$string['movecategory'] = 'Преместване на категория';
$string['movedquestionsandcategories'] = 'Преместване на въпрос и категория въпроси от {$a->oldplace} към {$a->newplace}.';
$string['movelinksonly'] = 'Само промяна на мястото, към което сочи връзката, без местене или копиране на файлове.';
$string['moveq'] = 'Преместване на въпрос(и)';
$string['moveto'] = 'Преместване в >>';
$string['movingcategory'] = 'Преместване на категория';
$string['movingcategoryandfiles'] = 'Сигурни ли сте, че искате да преместите категория "{$a->name}" и всички нейни подкатегории в контекст "{$a->contextto}"?<br />
Установени са {$a->urlcount} файл(а), свързани от въпроси от  {$a->fromareaname}. Искате ли да копирате или преместите този(тези) файл(ове) в {$a->toareaname}?';
$string['movingcategorynofiles'] = 'Сигурни ли сте, че искате да преместите категория "{$a->name}" и всички нейни подкатегории в контекст "{$a->contextto}"?';
$string['movingquestions'] = 'Преместване на въпроси и всякакви файлове';
$string['movingquestionsandfiles'] = 'Сигурни ли сте, че искате да преместите въпрос(ите) {$a->questions} в контекст <strong>"{$a->tocontext}"</strong>?<br />
Намерени са <strong>{$a->urlcount} фал(а)</strong>, свързани от този(тези) вапрос(и) в {$a->fromareaname}. Искате ли да ги копирате или преместите в  {$a->toareaname}?';
$string['movingquestionsnofiles'] = 'Сигурни ли сте, че искате да преместите въпрос(ите) {$a->questions} в контекст <strong>"{$a->tocontext}"</strong>?<br />
В този(тези) въпрос(и) <strong>няма файлове</strong>, свързани с  {$a->fromareaname}.';
$string['nocate'] = 'Няма такава категория {$a}!';
$string['nopermissionadd'] = 'Нямате право да добавяте въпроси тук.';
$string['nopermissionmove'] = 'Нямате право да премествате въпроси от тук. Трябва да запазите въпроса в тази категория или да го запазите като нов въпрос.';
$string['noquestions'] = 'Не са намерени въпроси, които да могат да се експортират. Проверете дали сте избрали категория за експортиране, която съдържа въпроси.';
$string['noquestionsinfile'] = 'Няма въпроси в импортирания файл';
$string['noresponse'] = '[Няма отговор]';
$string['notagfiltersapplied'] = 'Не е приложен филтър по етикети';
$string['notanswered'] = 'Не е отговорен';
$string['notchanged'] = 'Няма промени от предишния опит';
$string['notenoughanswers'] = 'Този тип въпрос изисква поне {$a} отговора';
$string['notenoughdatatoeditaquestion'] = 'Не са определени нито номер (id) на въпрос, нито на категория или тип въпрос.';
$string['notgraded'] = 'Неоценен';
$string['notshown'] = 'Не се показва';
$string['notyetanswered'] = 'Все още не е даден отговор';
$string['notyourpreview'] = 'Този преглед на принадлежи на Вас';
$string['numqas'] = '№ опит на въпроса';
$string['numquestions'] = 'Брой въпроси';
$string['numquestionsandhidden'] = '{$a->numquestions} (+{$a->numhidden} скрити)';
$string['options'] = 'Настройки';
$string['page-question-category'] = 'Страница на категория въпроси';
$string['page-question-edit'] = 'Страница за редактиране на въпроси';
$string['page-question-export'] = 'Страница за експортиране на въпроси';
$string['page-question-import'] = 'Страница за импортиране на въпроси';
$string['page-question-x'] = 'Всяка страница на въпрос';
$string['parent'] = 'Родител';
$string['parentcategory'] = 'Родителска категория';
$string['parentcategory_help'] = 'Категорията родител е тази, в която ще бъде сложена новата категория. "Най-отгоре" означава, че тази категория не се слага в някоя друга категория. Контекстът на категорията се показва с по-черни букви. Трябва да има поне една категория във всеки контекст.';
$string['parentcategory_link'] = 'question/category';
$string['parenthesisinproperclose'] = 'Скобата преди ** не е затворена правилно в {$a}**';
$string['parenthesisinproperstart'] = 'Скобата преди ** не е правилно отворена в {$a}**';
$string['parsingquestions'] = 'Разчитане на въпроси от файл за импортиране';
$string['partiallycorrect'] = 'Отчасти верен';
$string['partiallycorrectfeedback'] = 'За всеки отчасти верен отговор';
$string['partiallycorrectfeedbackdefault'] = 'Вашият отговор отчасти е верен.';
$string['penaltyfactor'] = 'Наказателен фактор';
$string['penaltyfactor_help'] = 'Тази настройка определя каква част от постигнатата оценка се изважда за всеки следващ грешен отговор. Прилага се само когато тестът се прави в адаптивен режим.

Наказателният фактор би следвало да бъде число между 0 и 1. Наказателен фактор 1 означава, че ученикът трябва да отгатне отговора от първи опит за да получи положителна оценка за въпроса. Наказателен фактор 0 означава, че ученикът може да опита колкото пъти желае и пак да получи пълна оценка, независимо от броя на грешните отговори.';
$string['penaltyforeachincorrecttry'] = 'Наказание за всеки неверен опит';
$string['penaltyforeachincorrecttry_help'] = 'Когато задавате въпросите с поведение "Интерактивно с много опити" или "Адаптивен режим", така че студентите имат право на няколко опита, докато отговарят вярно на въпроса, тази настройка определя с колко те се наказват за всеки неверен опит.

Наказанието е част от точките за въпроса, така че ако за въпроса се дават 3 точки и наказанието е 0,3333333, ако студентът отговори правилно на първия опит, получава 3 точки, ако отговори правилно на втория опит получава 2 точки, и 1 точка, ако отговори правилно на третия опит.';
$string['permissionedit'] = 'Редактирате този въпрос';
$string['permissionmove'] = 'Преместите този въпрос';
$string['permissionsaveasnew'] = 'Запишете този въпрос като нов въпрос';
$string['permissionto'] = 'Имате право да :';
$string['previewquestion'] = 'Преглед на въпрос: {$a}';
$string['published'] = 'споделен';
$string['qtypeveryshort'] = 'Т';
$string['questionbank'] = 'Банка с въпроси';
$string['questionbehaviouradminsetting'] = 'Настройки на поведение на въпрос';
$string['questionbehavioursdisabled'] = 'Поведения на въпроси за забраняване';
$string['questionbehavioursdisabledexplained'] = 'Въведете списък от отделени със запетая поведения, които не искате де се показват в падащото меню';
$string['questionbehavioursorder'] = 'Ред на поведенията на въпроси';
$string['questionbehavioursorderexplained'] = 'Въведете списък от отделени със запетая поведения, в реда, в който искате да се показват в падащото меню';
$string['questioncategory'] = 'Категория на въпрос';
$string['questioncatsfor'] = 'Категория въпроси за контекст "{$a}"';
$string['questiondoesnotexist'] = 'Този въпрос не съществува';
$string['questionidmismatch'] = 'Номерата (id) на въпросите не съответстват';
$string['questionname'] = 'Име на въпроса';
$string['questionnameandquestionversion'] = '{$a->name} v{$a->version}';
$string['questionno'] = 'Въпрос {$a}';
$string['questionpreviewdefaults'] = 'Подразбиращи се настройки за показване на въпрос';
$string['questionpreviewdefaults_desc'] = 'Тези настройки се използват, когато потребителят за първи път прегледа въпрос от банката въпроси. След като потребителят веднъж е прегледал въпрос, неговите лични предпочитания се запазват като потребителски предпочитания.';
$string['questions'] = 'Въпроси';
$string['questionsinuse'] = '(* Въпросите, отбелязани със звездичка вече са в употреба в някои тестове. Тези въпроси няма да бъде изтрит от тези тестове, а само от списъка на категориите.)';
$string['questionsmovedto'] = 'Въпросите, които са още в употреба са преместени към "{$a}" в родителската категория на курс.';
$string['questionsrescuedfrom'] = 'Въпросите от контекст {$a} записани.';
$string['questionsrescuedfrominfo'] = 'Тези въпроси (някои от които може да са скрити) са записани когато контекстът {$a} е бил изтрит, защото още се използват в някои тестове или други дейности.';
$string['questiontags'] = 'Етикети на въпросите';
$string['questiontext'] = 'Текст на въпроса';
$string['questiontype'] = 'Тип въпрос';
$string['questionvariant'] = 'Вариант въпрос';
$string['questionx'] = 'Въпрос {$a}';
$string['requiresgrading'] = 'Изисква оценяване';
$string['responsehistory'] = 'История на отговорите';
$string['restart'] = 'Започване отново';
$string['restartwiththeseoptions'] = 'Нов преглед с тези настройки';
$string['reviewresponse'] = 'Преглеждане на отговор';
$string['rightanswer'] = 'Верния отговор';
$string['rightanswer_help'] = 'автоматично генерирано обобщение на текущия отговор. То може да е ограничено, така че може да решите да обясните верния отговор в "Обща забележка" на въпроса и да изключите тази възможност.';
$string['save'] = 'Запис';
$string['savechangesandcontinueediting'] = 'Записване на промените и продължаване на редактирането';
$string['saved'] = 'Записан: {$a}';
$string['saveflags'] = 'Записване състоянието на отбелязването';
$string['selectacategory'] = 'Избор на категория:';
$string['selectaqtypefordescription'] = 'Изберете тип на въпроса, за да видите неговото описание.';
$string['selectcategoryabove'] = 'Изберете категория отгоре';
$string['selectquestionsforbulk'] = 'Изберете въпроси за масова обработка';
$string['settingsformultipletries'] = 'Многократни опити';
$string['shareincontext'] = 'Споделете в контекст за {$a}';
$string['shortversioninfo'] = 'v{$a->version} (на {$a->latestversion})';
$string['shortversioninfolatest'] = 'v{$a->version} (последна)';
$string['showhidden'] = 'Също показване на стари въпроси';
$string['showmarkandmax'] = 'Показване на точките и на максималните';
$string['showmaxmarkonly'] = 'Показване само на максималните';
$string['shown'] = 'Показва се';
$string['shownumpartscorrect'] = 'Показване броя на верните отговори';
$string['shownumpartscorrectwhenfinished'] = 'Показване броя на верните отговори';
$string['showquestiontext'] = 'Показване текста на въпроса в списъка с въпроси';
$string['showquestiontext_full'] = 'Да, с изображения, медия и т.н.';
$string['showquestiontext_off'] = 'Не';
$string['showquestiontext_plain'] = 'Да, само текст';
$string['specificfeedback'] = 'Специфична забележка';
$string['specificfeedback_help'] = 'Забележка, която зависи от отговора на студента.';
$string['started'] = 'Започнато';
$string['state'] = 'Състояние';
$string['step'] = 'Стъпка';
$string['stoponerror'] = 'Спиране при грешка';
$string['stoponerror_help'] = 'Тази настройка определя дали процесът на импортиране да спре при установяване на грешка и в резултат да не се импортират въпроси, или само въпросите съдържащи грешки да се игнорират, а валидните въпроси да се импортират.';
$string['submissionoutofsequence'] = 'Страницата е вън от разрешената последователност. Моля, не щракайте върху бутона на браузър за връщане, когато работите върху тест.';
$string['submissionoutofsequencefriendlymessage'] = 'Въвели сте данни извън нормалния ред. Това може да се е случило ако сте използвали бутона на браузъра за връщане на предишна/следваща страница; моля не правете това при изпълнение на тест. Също така може да сте щракнали друго докато страницата се е зареждала. Щракнете <strong>Продължаване</strong> за да възобновите работа.';
$string['submit'] = 'Изпращане';
$string['submitandfinish'] = 'Изпращане и край';
$string['submitted'] = 'Изпращане: {$a}';
$string['technicalinfo'] = 'Техническа информация';
$string['technicalinfo_help'] = 'Тази техническа информация вероятно е полезна само за разработчици, създаващи нови типове въпроси, но може да помогне и при опити за диагностициране на проблеми с въпросите.';
$string['technicalinfomaxfraction'] = 'Максимална част: {$a}';
$string['technicalinfominfraction'] = 'Минимална част: {$a}';
$string['technicalinfoquestionsummary'] = 'Резюме на въпроса: {$a}';
$string['technicalinforightsummary'] = 'Резюме на верния отговор: {$a}';
$string['technicalinfostate'] = 'Състояние на въпроса: {$a}';
$string['tofilecategory'] = 'Записване на категория във файл';
$string['tofilecontext'] = 'Записване на контекст във файл';
$string['topfor'] = 'Главна категория в {$a}';
$string['uninstallbehaviour'] = 'Деинсталиране на това поведение на въпрос.';
$string['uninstallqtype'] = 'Деинсталиране на този тип въпроси.';
$string['unknown'] = 'Неизвестно';
$string['unknownbehaviour'] = 'Неизвестно поведение: {$a}.';
$string['unknownorunhandledtype'] = 'Непознат или необработен тип въпрос: {$a}';
$string['unknownquestion'] = 'Непознат въпрос: {$a}';
$string['unknownquestioncatregory'] = 'Непозната категория въпроси: {$a}.';
$string['unknownquestiontype'] = 'Непознат тип въпрос: {$a}.';
$string['unknowntolerance'] = 'Неизвестен тип на толеранса {$a}';
$string['unpublished'] = 'несподелен';
$string['unusedcategorydeleted'] = 'Тази категория е изтрита, защото след изтриване на курс, въпросите от нея повече не се използват.';
$string['updatedisplayoptions'] = 'Обновяване на настройките за показване';
$string['versioninfo'] = 'Версия {$a->version} (на {$a->latestversion})';
$string['versioninfolatest'] = 'Версия {$a->version} (последна)';
$string['whethercorrect'] = 'Дали е вярно';
$string['whethercorrect_help'] = 'Това покрива и двете: текстовото описание "Вярно", "Отчасти вярно" или "Невярно" и оцветяването, което дава същата информация.';
$string['withselected'] = 'С избраните';
$string['xoutofmax'] = '{$a->mark} от {$a->max}';
$string['yougotnright'] = 'Вие правилно сте избрали {$a->num}.';
$string['youmustselectaqtype'] = 'Трябва да изберете тип на въпроса.';
$string['yourfileshoulddownload'] = 'Вашият архивен файл ще започне да се сваля след малко. Ако това не се случи, моля, <a href="{$a}">щракнете тук</a>.';
