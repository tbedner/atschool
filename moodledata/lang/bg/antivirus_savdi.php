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
 * Strings for component 'antivirus_savdi', language 'bg', version '4.4'.
 *
 * @package     antivirus_savdi
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkconnectivity'] = 'SAVDI свързаност';
$string['checkconnectivityfalsepositive'] = 'Фалшиво положително от тестово сканиране.';
$string['checkconnectivitynoconfig'] = 'Не е конфигуриран процес SAVDI.';
$string['checkconnectivitynomethods'] = 'Комуникацията със скенера беше успешна, но не са активирани методи за сканиране.';
$string['checkconnectivityok'] = 'Тестът на скенера беше успешен.';
$string['checkconnectivityscandataerror'] = 'SCANDATA тестова грешка: {$a}.';
$string['checkconnectivityscanfileerror'] = 'SCANFILE тестова грешка: {$a}.';
$string['checkconnectivitytmpfileerror'] = 'Комуникацията със скенера беше успешна, но тестови файл не може да бъде създаден.';
$string['chmodscanfile'] = 'Промяна на разрешенията за сканирани файлове';
$string['chmodscanfiledescr'] = 'Активирайте тази опция, за да промените временно разрешенията на файла, който се сканира, на четим напълно. Полезно, когато демонът на скенера е локален за уеб сървъра, но сканираният файл не може да се чете от процеса на скенера. Не е необходимо, ако процесът на скенера е отдалечен.';
$string['clientresult0'] = 'OK';
$string['clientresult1'] = 'Намерен вирус';
$string['clientresult2'] = 'Грешка';
$string['clientresult3'] = 'Заявката не се поддържа';
$string['clientresult4'] = 'Данните са твърде големи';
$string['connretry'] = 'Опитайте отново да се свържете';
$string['connretrydesc'] = 'Ако връзката към SAVDI не успее, опитът за свързване ще бъде повторен много пъти.';
$string['conntcp'] = 'TCP/IP хост: порт';
$string['conntype'] = 'Свържете се с демон SAVDI от';
$string['conntypedescr'] = 'Ако процесът SAVDI е локален за сървъра и може да чете файлове, създадени от сървъра, уверете се, че процесът поддържа типа заявка \'SCANFILE\' и деактивирайте опцията *Процесът SAVDI е отдалечен*.

Ако процесът SAVDI е отдалечен на сървъра или е локален, но не може да чете файлове, създадени от сървър, уверете се, че процесът поддържа типа заявка \'SCANDATA\' и активирайте опцията *Процесът SAVDI е отдалечен*.';
$string['conntypetcp'] = 'TCP/IP връзка';
$string['conntypeunix'] = 'Unix домейн сокет';
$string['connunix'] = 'Път до Unix домейн сокета';
$string['daemonerroractlikevirus'] = 'Третиране на файловете като заразени';
$string['daemonerrordonothing'] = 'Третиране на файловете като ОК';
$string['errorcantopentcpsocket'] = 'Свързването с TCP сокет доведе до грешка {$a}';
$string['errorcantopenunixsocket'] = 'Свързването с Unix домейн сокет доведе до грешка {$a}';
$string['errorfileopen'] = 'Грешка при отваряне на файл {$a}';
$string['errorgeneral'] = 'SAVDI скенерът: {$a}';
$string['errorprotocol'] = 'SAVDI грешка на протокола: {$a}';
$string['errorrejected'] = 'SAVDI сървърът отхвърли заявката: {$a}';
$string['errorsenddatashort'] = 'Изпратените данни бяха по-кратки от очакваното';
$string['errorsenddatatoobig'] = 'Размерът на данните надвишава ограничението на SAVDI сървъра от {$a} байта';
$string['errorservernotsupported'] = 'SAVDI сървърът не поддържа тип заявка {$a}';
$string['ondaemonerror'] = 'Грешка в процеса на скенера';
$string['ondaemonerrordescr'] = 'Действие, което да се предприеме, когато се случи грешка при свързване или грешка със скенера.';
$string['pluginname'] = 'Антивирусна програма Sophos SAVDI';
$string['privacy:metadata'] = 'Добавката Sophos SAVDI antivirus не съхранява лични данни.';
$string['scannerisremote'] = 'Процесът SAVDI е отдалечен';
$string['scannerisremotedescr'] = 'Активирането на тази опция предотвратява директното четене на файлове от процеса SAVDI, вместо това копира данните за сканиране към процеса чрез мрежова връзка. Процесът SAVDI трябва да поддържа типа заявка \'SCANDATA\' и настройката му \'maxscandata\' трябва да бъде достатъчно голяма за очакваното съдържание.';
$string['testclient'] = 'Тествайте връзката на Sophos SAVDI';
$string['testclient_info'] = '<a href="{$a}">Проверете дали комуникацията с конфигурирания процес SAVDI работи, като използвате този инструмент за тестване на връзката</a>. За да проверите дали SAVDI е в състояние правилно да сканира за вирусите, качете файл в курса или вашето хранилище „Лични файлове“. За положителен тест за вируси, проучете <a href="https://en.wikipedia.org/wiki/EICAR_test_file">тестовия файл EICAR</a>.';
$string['testclienthasscandata'] = 'Поддържа заявка SCANDATA';
$string['testclienthasscandir'] = 'Поддържа заявка SCANDIR';
$string['testclienthasscandirr'] = 'Поддържа заявка SCANDIRR';
$string['testclienthasscanfile'] = 'Поддържа заявка SCANFILE';
$string['testclientmaxscandata'] = 'Максимален размер на заявката SCANDATA';
$string['testclientresult'] = 'Connection outcome';
$string['testclientscandataresult'] = 'Резултат от заявката на SCANDATA';
$string['testclientscanfileresult'] = 'Резултат от заявка SCANFILE';
$string['testclientscantest'] = 'Качете файлa по-долу, за да тествате типовете заявки SCANFILE и SCANDATA. Ако скенерът е отдалечен, се използва само SCANDATA.';
$string['testclientscantestpath'] = 'Качване на временен файл';
$string['testclientscanuploaderror'] = 'Грешка при качването на файла: {$a}.';
$string['testclientscanuploaderrornotrecognised'] = 'Грешка при качването на PHP файла: {$a} не се разпознава като качен файл.';
$string['testclientuploadandscan'] = 'Качете и сканирайте файла';
$string['testclientversion'] = 'Версия на скенера';
$string['warngeneral'] = 'SAVDI скенерът каза: {$a}';
$string['warnprotocol'] = 'Предупреждение за протокол SAVDI: {$a}';
