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
 * Strings for component 'wiki', language 'bg', version '4.4'.
 *
 * @package     wiki
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Добавяне на коментар';
$string['admin'] = 'Администриране';
$string['adminmenu'] = 'Админ. меню';
$string['attachmentattach'] = 'Добавяне като прикрепен файл';
$string['attachmentimage'] = 'Добавяне като изображение';
$string['attachmentlink'] = 'Добавяне като хипервръзка';
$string['attachments'] = 'Прикачени файлове';
$string['backcomments'] = 'Обратно към коментарите';
$string['backhistory'] = 'Обратно в История';
$string['backoldversion'] = 'Обратно към старата версия';
$string['backpage'] = 'Обратно към страница';
$string['backtomapmenu'] = 'Обратно към Карта';
$string['cannoteditpage'] = 'Вие не може да редактирате тази страница.';
$string['cannotmanagefiles'] = 'Нямате право да управлявате wiki файловете.';
$string['cannotviewfiles'] = 'Вие нямата право да разглеждате wiki файлове.';
$string['cannotviewpage'] = 'Вие не може да прегледате тази страница.';
$string['changerate'] = 'Искате ли да я промените?';
$string['comments'] = 'Коментари';
$string['commentscount'] = 'Коментари ({$a})';
$string['comparesel'] = 'Сравняване на избраните';
$string['comparewith'] = 'Сравняване на версия {$a->old} с версия {$a->new}';
$string['contributions'] = 'Заслуги';
$string['contributions_help'] = 'Списък на страниците, които сте редактирали.';
$string['createcomment'] = 'Създаване на коментар';
$string['createddate'] = 'Създадена: {$a->date} от {$a->username}';
$string['createpage'] = 'Създаване на страница';
$string['creating'] = 'Създаване на wiki страница';
$string['defaultformat'] = 'Формат по подразбиране';
$string['defaultformat_help'] = 'Тази настройка определя форматът по подразбиране на Wiki.

* HTML - Редактира се с помощта на HTML редактор
* Creole - Обичаен език за писане в Wiki, за ползване на който се показва малка лента с инструменти
* Nwiki - Подобен на езика в Mediawiki използва се с модула Nwiki';
$string['deletecomment'] = 'Изтриване на коментар';
$string['deletecommentcheck'] = 'Изтриване на коментар';
$string['deletecommentcheckfull'] = 'Сигурни ли сте, че желаете да изтриете коментара?';
$string['deleteupload'] = 'Изтриване';
$string['deleteversions'] = 'Изтриване версиите на страницата';
$string['diff'] = 'Разл.';
$string['diff_help'] = 'Избраните версии на страницата може да бъдат сравнени за да се видят разликите.';
$string['edit'] = 'Редактиране';
$string['editblocks'] = 'Включване редактирането на блокове';
$string['editcomment'] = 'Редактиране на коментар';
$string['editfiles'] = 'Редактиране на wiki файлове';
$string['editing'] = 'Редактиране на wiki страница';
$string['editingcomment'] = 'Редактиране на коментар';
$string['editingpage'] = 'Редактиране на страница "{$a}"';
$string['editsection'] = 'редактиране';
$string['eventdiffviewed'] = 'Wiki разликите са показани';
$string['eventhistoryviewed'] = 'Историята на wiki е показана';
$string['eventmapviewed'] = 'Карта на wiki страниците е показана';
$string['eventpagecreated'] = 'Създадена е wiki страница';
$string['eventpagedeleted'] = 'Wiki страница е изтрита';
$string['eventpageupdated'] = 'Wiki страница е обновена';
$string['eventpageversiondeleted'] = 'Версия на wiki страница е изтрита';
$string['eventpageviewed'] = 'Wiki страница е прегледана';
$string['eventversionrestored'] = 'Версия на wiki е възстановена';
$string['eventversionviewed'] = 'Версия на wiki страница е показана';
$string['filenotuploadederror'] = 'Файл "{$a}" не може да се качи коректно.';
$string['files'] = 'Файлове';
$string['filtername'] = 'Автоматично wiki свързване';
$string['firstpagetitle'] = 'Заглавие на първата страница';
$string['firstpagetitle_help'] = 'Заглавие на първата страница от Wiki.';
$string['forceformat'] = 'Принудителен формат';
$string['forceformat_help'] = 'Ако се постави отметка, форматът по подразбиране се налага принудително и няма възможност при редактиране да се избере друг формат.';
$string['format'] = 'Формат';
$string['format_help'] = '* HTML - Редактира се с помощта на HTML редактор
* Creole - Обичаен език за писане в Wiki, за ползване на който се показва малка лента с инструменти
* Nwiki - Подобен на езика в Mediawiki използва се с модула Nwiki';
$string['formatcreole'] = 'Creole формат';
$string['formatcreole_help'] = 'Creole е обичаен език за писане в wiki. Текстът се форматира с помощта на бутоните от лентата с инструменти.

За да създадете нова страница, напишете нейното заглавие оградено в двойни квадратни скоби, например: [[Страница 2]]';
$string['formatcreole_link'] = 'mod/wiki/creole';
$string['formathtml'] = 'HTML формат';
$string['formathtml_help'] = 'HTML редакторът може да се използва за форматиране на текста.

За да създадете нова страница, напишете името на новата страница оградено с двойни квадратни скоби, например [[Страница 2]].';
$string['formatnwiki'] = 'NWiki формат';
$string['formatnwiki_help'] = 'Nwiki е език за оформяне на страници, подобен на езика в Mediawiki, използван в модула Nwiki.

За да създадете нова страница, напишете името на новата страница, заградено в двойни квадратни скоби, например [[Страница 2]].';
$string['formatnwiki_link'] = 'mod/wiki/nwiki';
$string['history'] = 'История';
$string['history_help'] = 'Историята представя списък от линкове към предишни версии на страницата.';
$string['html'] = 'HTML';
$string['incorrectdeleteversions'] = 'Версиите на страницата определени за изтриване са некоректни.';
$string['indicator:cognitivedepthdef_help'] = 'Участникът е достигнал този процент на познавателна ангажираност, предложен от дейностите Wiki през този интервал за анализ (Levels = No view, View, Submit)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadthdef_help'] = 'Участникът е достигнал този процент на социалната ангажираност, предлагана от дейностите Wiki през този интервал за анализ (Levels = No participation, Participant alone, Participant with others)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['individualpagedoesnotexist'] = 'Отделна wiki страница не съществува';
$string['insertcomment'] = 'Вмъкване на коментар';
$string['insertimage'] = 'Вмъкване на изображение...';
$string['insertimage_help'] = 'Този падащ списък вмъква изображение в редактираната wiki страница. Ако трябва да добавите повече изображения в wiki използвайте страница "Файлове".';
$string['invalidlock'] = 'Тази страница е вече заключена от друг потребител.';
$string['invalidparameters'] = 'Подадени са невалидни параметри.';
$string['invalidsection'] = 'Невалидна секция.';
$string['invalidsesskey'] = 'Ключът на сесията е невалиден. Моля, изпратете данните отново.';
$string['javascriptdisabledlocks'] = 'Вашият браузър не изпълнява Javascript and locks are not working. Промените, които сте направили, може да не бъдат съхранени правилно.';
$string['links'] = 'Хипевръзки';
$string['listall'] = 'Списък на всички';
$string['listorphan'] = 'Списък сираци';
$string['map'] = 'Карта';
$string['mapmenu'] = 'Меню';
$string['migrationfinished'] = 'Мигрирането завърши успешно';
$string['missingpages'] = 'Страници без съдържание';
$string['modified'] = 'Час и дата на промяната';
$string['modulename'] = 'Уики';
$string['modulename_help'] = 'Модулът за дейност Wiki позволява на участниците да създават и редактират колекция от уеб страници. Може да бъде колективно wiki, когато всеки може да редактира, и индивидуално wiki, когато всеки има собствено wiki, което само той може да редактира.

В wiki се пази история на предишните версии на всяка страница, съдържаща промените, направени от всеки участник.

Wiki има много приложения като:

* Групово водене на лекционни записки или учебни ръководства.
* За членовете на факултет, за да съставят заедно план за работа или дневен ред за събрание.
*  За студентите, за да съчиняват заедно онлайн книга, да създават съдържание по дадена тема, зададена от ръководителя им.
* За колективно съчиняване на истории или поезия, като всеки участник пише по един ред или стих.
* Като личен дневник за изпитни записки и справки (при използване на индивидуално wiki).';
$string['modulename_link'] = 'mod/wiki/view';
$string['modulenameplural'] = 'Уикита';
$string['navigation'] = 'Навигация';
$string['navigationfrom'] = 'До тази страница се идва от';
$string['navigationto'] = 'От тази страница се отива до';
$string['navigationto_help'] = 'Хипервръзки, към други страници';
$string['newpage'] = 'Нова';
$string['newpagetitle'] = 'Заглавие на новата страница';
$string['noattachments'] = '<strong>Няма прикачени файлове</strong>';
$string['nocomments'] = 'Няма коментари';
$string['nocontribs'] = 'Вие нямате заслуги в това wiki';
$string['nocreatepermission'] = 'Изисква се право за създаване на страници';
$string['noeditcommentpermission'] = 'Необходими са права за редактиране на коментар';
$string['noeditpermission'] = 'Изисква се право за редактиране на страница.';
$string['nofrompages'] = 'Няма връзки към тази страница';
$string['nohistory'] = 'Няма История за тази страница';
$string['nomanagecommentpermission'] = 'Управляване правата за коментиране';
$string['noorphanedpages'] = 'Няма страници-сираци';
$string['nosearchresults'] = 'Няма резултати';
$string['notingroup'] = 'Не в група';
$string['noupdatedpages'] = 'Няма обновени страници';
$string['noviewcommentpermission'] = 'Изискват се права за преглед на коментари';
$string['oldversion'] = 'Стара версия';
$string['orphaned'] = 'Страници-сираци';
$string['orphaned_help'] = 'Списък на страници, към които не водят хипервръзки от други страници.';
$string['page-mod-wiki-comments'] = 'Страница за коментари на Wiki модула';
$string['pageindex'] = 'Индекс на страниците';
$string['pageindex_help'] = 'Страниците, подредени в дървовиден изглед';
$string['pageislocked'] = 'Точно сега и някой друг редактира тази страница. Опитайте да редактирате след няколко минути.';
$string['pagelist'] = 'Списък страници';
$string['pagelist_help'] = 'Списък на страниците в азбучен ред';
$string['pagename'] = 'Име на страница';
$string['pluginadministration'] = 'Администриране на wiki';
$string['pluginname'] = 'Уики';
$string['prettyprint'] = 'Изглед за печат';
$string['previewwarning'] = 'Това е предварителен изглед. Промените не са съхранени все още.';
$string['print'] = 'Печат';
$string['removeallwikitags'] = 'Изтриване на всички wiki етикети';
$string['removepages'] = 'Изтриване на страници';
$string['restore'] = 'Възстановяване';
$string['restoreconfirm'] = 'Сигурни ли сте, че искате да възстановите версия #{$a}?';
$string['restoreerror'] = 'Версия #{$a} не може да бъде възстановена';
$string['restorethis'] = 'Възстановяване на тази версия';
$string['restoreversion'] = 'Възстановяване на стара версия';
$string['restoring'] = 'Възстановяване на версия #{$a}';
$string['save'] = 'Запис';
$string['search:activity'] = 'Wiki - информация за дейността';
$string['search:collaborative_page'] = 'Wiki - съвместни страници';
$string['searchwikis'] = 'Търсене в wiki';
$string['special'] = 'Други';
$string['tableofcontents'] = 'Съдържание';
$string['tagsdeleted'] = 'Wiki етикетите бяха изтрити';
$string['updatedpages'] = 'Обновени страници';
$string['updatedpages_help'] = 'Последно обновени wiki страници';
$string['updatedwikipages'] = 'Обновени wiki страници';
$string['upload'] = 'Качване и изтриване';
$string['uploadactions'] = 'Действия';
$string['uploadfiletitle'] = 'Прикачени файлове';
$string['uploadname'] = 'Име на файл';
$string['uploadtitle'] = 'Прикачени файлове';
$string['version'] = 'Версия';
$string['versionerror'] = 'Номерът на версия не съществува';
$string['versionnum'] = 'Версия #{$a}';
$string['view'] = 'Изглед';
$string['viewallhistory'] = 'Показване на цялата история';
$string['viewcurrent'] = 'Текуща версия';
$string['viewperpage'] = 'Показване на {$a} версии на страница';
$string['viewversion'] = 'Показване версия № {$a} на страницата';
$string['wiki'] = 'Уики';
$string['wiki:editcomment'] = 'Добавяне на коментари към страниците';
$string['wiki:editpage'] = 'Записване на wiki страниците';
$string['wiki:managecomment'] = 'Управляване на коментарите в wiki';
$string['wiki:managefiles'] = 'Управляване на wiki файловe';
$string['wiki:managewiki'] = 'Управляване на настройките на Wiki';
$string['wiki:viewcomment'] = 'Показване на коментарите за страницата';
$string['wiki:viewpage'] = 'Показване на страниците от wiki';
$string['wikifiles'] = 'Wiki файлове';
$string['wikiintro'] = 'Описание на Wiki';
$string['wikimode'] = 'Wiki режим';
$string['wikimode_help'] = 'Режимът на Wiki определя дали всеки може да редактира - Съвместно Wiki, или всеки има свое собствено Wiki, като само него може да редактира - Индивидуално Wiki.';
$string['wikimodecollaborative'] = 'Съвместно wiki';
$string['wikimodeindividual'] = 'Индивидуално wiki';
$string['wikiname'] = 'Име на Wiki';
$string['wikisettings'] = 'Настройки на Wiki';
$string['wrongversionlock'] = 'Друг потребител редактира тази страница докато Вие редактирахте и Вашата редакция вече е остаряла.';
$string['wrongversionsave'] = 'Докато редактирахте друг потребител е създал версия и вашата редакция замести неговата. Проверете на страница История.';
