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
 * Strings for component 'repository', language 'bg', version '4.4'.
 *
 * @package     repository
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessiblefilepicker'] = 'Достъпно Избиране на файл';
$string['activaterep'] = 'Активни хранилища';
$string['activerepository'] = 'Достъпни добавки за хранилища';
$string['activitybackup'] = 'Архивиране на дейност';
$string['add'] = 'Добавяне';
$string['addfile'] = 'Добавяне...';
$string['addplugin'] = 'Добавяне на добавка за хранилище';
$string['allowexternallinks'] = 'Позволяване на външни връзки';
$string['areacategoryintro'] = 'Въведение на категория';
$string['areacourseintro'] = 'Въведение на курс';
$string['areacourseoverviewfiles'] = 'Файлове към резюмето на курса';
$string['areamainfile'] = 'Главен файл';
$string['arearoot'] = 'Система';
$string['areauserbackup'] = 'Потребителско архивиране';
$string['areauserdraft'] = 'Чернови';
$string['areauserpersonal'] = 'Лични файлове';
$string['areauserprofile'] = 'Профил';
$string['attachedfiles'] = 'Прикачени файлове';
$string['attachment'] = 'Прикачен файл';
$string['author'] = 'Автор';
$string['automatedbackup'] = 'Автоматични архивирания';
$string['back'] = '&laquo; Обратно';
$string['backtodraftfiles'] = '&laquo; Обратно към управление на чернови файлове';
$string['cacheexpire'] = 'Време на кеша';
$string['cannotaccessparentwin'] = 'Ако родителският прозорец е на HTTPS протокол, то не ни е позволен достъп до обект window.opener, така че не можем автоматично да опресним хранилището за Вас, но още имаме Вашата сесия, само се върнете обратно към Избиране на файл и отново изберете хранилището, то сега трябва да работи.';
$string['cannotdelete'] = 'Не може да се изтрие този файл.';
$string['cannotdownload'] = 'Не може да се изтегли този файл';
$string['cannotdownloaddir'] = 'Не може да се изтегли тази директория';
$string['cannotinitplugin'] = 'Извикването на plugin_init пропадна';
$string['choosealink'] = 'Избиране на хипервръзка...';
$string['chooselicense'] = 'Избиране лиценз за авторски права';
$string['cleancache'] = 'Изчистване на моите кеш-файлове';
$string['close'] = 'Затваряне';
$string['commonrepositorysettings'] = 'Общи настройки на хранилище';
$string['configallowexternallinks'] = 'Тази настройка позволява на всички потребители да изберат дали външните ресурси се копират в Moodle или не. Ако тази отметка е изключена то ресурсите се копират в Moodle (това обикновено е най-добре за обща цялост на данните и сигурност). Ако настройката е включена, потребителят всеки път може да избира, щом добави медия към текст.';
$string['configcacheexpire'] = 'Времето в секунди, за което списъците от файлове се кешират локално, когато се разглеждат външни хранилища.';
$string['configgetfiletimeout'] = 'Таймаут за изтегляне на външен файл от Moodle.';
$string['configsaved'] = 'Конфигурацията - записана!';
$string['configsyncfiletimeout'] = 'Максимално време, за което трябва да се синхронизират размерите на външни файлове.';
$string['configsyncimagetimeout'] = 'Максимално време, за което трябва да се изтегля файл с изображение от външно хранилище при синхронизиране.';
$string['confirmdelete'] = 'Сигурни ли сте, че искате да изтриете хранилището - {$a}? Ако изберете "Продължаване и изтегляне", външните файлове, към които има препратки, ще бъдат изтеглени в Moodle, но това може да отнеме много време.';
$string['confirmdeletefile'] = 'Сигурни ли сте, че искате да изтриете този файл?';
$string['confirmdeletefilewithhref'] = 'Сигурни ли сте, че искате да изтриете този файл? Има {$a} файлове-препратки, които използват този файл като свой източник. Ако продължите тези препратки ще бъдат превърнати в истински файлове.';
$string['confirmdeletefolder'] = 'Сигурни ли сте, че искате да изтриете тази директория? Всички файлове и поддиректории ще бъдат изтрити.';
$string['confirmremove'] = 'Сигурни ли сте, че искате да премахнете тази добавка за хранилище, нейните настройки и <strong>всички {$a} екземпляри от нея</strong>? Ако изберете "Продължаване и изтегляне", препратките към външни файлове ще бъдат изтеглени в Moodle, но за да бъде изпълнено, това може да отнеме дълго време.';
$string['confirmrenamefile'] = 'Сигурни ли сте, че искате да преместите/преименувате този файл? Има {$a} препратки, които сочат към този файл. Ако продължите тези препратки ще бъдат превърнати във физически копия.';
$string['confirmrenamefolder'] = 'Сигурни ли сте, че искате да преместите/преименувате тази папка? Всички препратки, които сочат към файлове от тази папка ще бъдат превърнати във физически копия.';
$string['continueuninstall'] = 'Продължаване';
$string['continueuninstallanddownload'] = 'Продължаване и изтегляне';
$string['copying'] = 'Копиране';
$string['coursebackup'] = 'Архиви на курсове';
$string['create'] = 'Създаване';
$string['createfolderfail'] = 'Неуспех при създаване на тази директория';
$string['createfoldersuccess'] = 'Директорията е създадена успешно';
$string['createinstance'] = 'Създаване екземпляр на хранилище';
$string['createrepository'] = 'Създаване екземпляр на хранилище';
$string['createxxinstance'] = 'Създаване екземпляр на {$a}';
$string['date'] = 'Дата';
$string['datecreated'] = 'Създаден';
$string['deleted'] = 'Хранилището е изтрито';
$string['deleterepository'] = 'Изтриване на това хранилище';
$string['detailview'] = 'Показване на подробности';
$string['dimensions'] = 'Размери';
$string['disabled'] = 'Блокирано';
$string['displaydetails'] = 'Показване на директорията с подробности за файловете';
$string['displayicons'] = 'Показване на директорията с икони на файловете';
$string['displaytree'] = 'Показване на директорията като дърво от поддиректории';
$string['download'] = 'Изтегляне';
$string['downloadfolder'] = 'Изтегляне на всички';
$string['downloadsucc'] = 'Файлът беше изтеглен успешно';
$string['draftareanofiles'] = 'Не може да се изтегли, защото няма прикачени файлове';
$string['editrepositoryinstance'] = 'Редактиране екземплярът на хранилище';
$string['emptylist'] = 'Празен списък';
$string['emptytype'] = 'Не може да се създаде тип хранилище: името на типа е празно';
$string['enablecourseinstances'] = 'Позволяване на потребителите да добавят екземпляри на хранилището в курса';
$string['enableuserinstances'] = 'Позволяване на потребителите да добавят екземпляри на хранилището в контекста потребител';
$string['entername'] = 'Моля въведете име на директория';
$string['enternewname'] = 'Моля въведете име на нов файл';
$string['error'] = 'Възникна непозната грешка!';
$string['errordoublereference'] = 'Не може да се замени файла с препратка, защото към този файл вече има препратки.';
$string['errornotyourfile'] = 'Не можете да изберете файл, който не е добавен от Вас';
$string['errorpostmaxsize'] = 'Качваният файл може би превишава стойността на настройката post_max_size в php.ini.';
$string['erroruniquename'] = 'Името на хранилището трябва да е уникално';
$string['errorwhilecommunicatingwith'] = 'Грешка при комуникацията с хранилище "{$a}".';
$string['errorwhiledownload'] = 'Възникна грешка по време на изтеглянето на файл: {$a}';
$string['existingrepository'] = 'Това хранилище вече съществува';
$string['fileexists'] = 'Това име на файл вече се използва, моля, използвайте друго име';
$string['fileexistsdialog_editor'] = 'Файл с такова име вече е прикачен към текста, който редактирате.';
$string['fileexistsdialog_filemanager'] = 'Файл с такова име вече е прикачен';
$string['fileexistsdialogheader'] = 'Файлът съществува';
$string['filename'] = 'Име на файл';
$string['filenotnull'] = 'Трябва да изберете файл за качване.';
$string['filepicker'] = 'Избиране на файл';
$string['filesaved'] = 'Файлът беше съхранен';
$string['filesizenull'] = 'Не може да се определи големината';
$string['folderexists'] = 'Това име на директория вече се използва, моля, използвайте друго име';
$string['foldernotfound'] = 'Директорията не е намерена';
$string['folderrecurse'] = 'Директория не може да се премести в своя поддиректория';
$string['getfile'] = 'Избиране на файла';
$string['getfiletimeout'] = 'Превишено максимално време за файл';
$string['help'] = 'Помощ';
$string['iconview'] = 'Показване като икони';
$string['instance'] = 'екземпляр';
$string['instancedeleted'] = 'екземплярът е изтрит';
$string['instances'] = 'Екземпляри на хранилището';
$string['lastmodified'] = 'Последно модифициране';
$string['listview'] = 'Показване като списък';
$string['login'] = 'Влизане във Вашия профил';
$string['logout'] = 'Изход';
$string['makefileinternal'] = 'Създаване на копие на файла';
$string['makefilereference'] = 'Създаване на връзка/препратка към файла';
$string['manage'] = 'Управляване на хранилища';
$string['manageinstances'] = 'Управляване на екземплярите';
$string['name'] = 'Име';
$string['newfoldername'] = 'Име на новата папка';
$string['nofilesattached'] = 'Няма прикачени файлове';
$string['nofilesavailable'] = 'Няма налични файлове';
$string['off'] = 'Разрешено но скрито';
$string['on'] = 'Разрешено и видимо';
$string['openpicker'] = 'Избиране на файл...';
$string['overwrite'] = 'Записване отгоре';
$string['overwriteall'] = 'Записване всичко отгоре';
$string['plugin'] = 'Добавки за хранилища';
$string['popupblockeddownload'] = 'Прозорецът за изтегляне е блокиран. Моля, разрешете браузърът да показва изскачащи прозорци и опитайте пак.';
$string['preview'] = 'Преглед';
$string['privatefilesof'] = '{$a} Лични файлове';
$string['referencesexist'] = 'Има {$a} файла препратки, които използват тои файл за свой озточник';
$string['referenceslist'] = 'Връзка/Препратка';
$string['refresh'] = 'Опресняване';
$string['refreshnonjsfilepicker'] = 'Моля, затворете прозореца и опреснете не-javascript диалог Избиране на файл';
$string['renameall'] = 'Преименуване на всички';
$string['renameto'] = 'Преименуване на "{$a}"';
$string['repositories'] = 'Хранилища';
$string['save'] = 'Запис';
$string['saveas'] = 'Запазване като';
$string['search'] = 'Търсене';
$string['searching'] = 'Търсене в';
$string['select'] = 'Избиране';
$string['setmainfile'] = 'Задаване на главен файл';
$string['settings'] = 'Настройки';
$string['size'] = 'Размер';
$string['submit'] = 'Качване';
$string['thumbview'] = 'Показване като икони';
$string['title'] = 'Избиране на файл...';
$string['typenotvisible'] = 'Типът не е видим';
$string['upload'] = 'Качване на този файл';
$string['uploading'] = 'Качване...';
$string['usenonjsfilepicker'] = 'Отваряне на Избиране на файл в нов прозорец';
