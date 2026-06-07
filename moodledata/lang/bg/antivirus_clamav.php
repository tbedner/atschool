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
 * Strings for component 'antivirus_clamav', language 'bg', version '4.4'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['antivirusfailed'] = 'В момента има проблем със сканирането на AntiVirus. Вашият файл {$a->item} не е качен. Опитайте отново по-късно.';
$string['clamfailed'] = 'Clam AV не се изпълни. Върната грешка беше {$a}. Това е изведеният от Clam текст:';
$string['clamfailureonupload'] = 'При неуспех на ClamAV';
$string['configclamactlikevirus'] = 'Третиране на файловете като вируси';
$string['configclamdonothing'] = 'Третиране на файловете като ОК';
$string['configclamfailureonupload'] = 'Ако е избрано "Третиране на файловете като ОК", файловете ще бъдат доставени в директорията по предназначение. Ако е избрано „Отхвърляне на качването, опитайте отново“, потребителят ще бъде подканен да опита отново по-късно. Ако е избрано „Третиране на файловете като вируси“, файловете ще бъдат преместени в зоната за карантина или ще бъдат изтрити. Предупреждение: С тази опция, ако по някаква причина clam не успее да се изпълни (обикновено поради невалиден pathtoclam), ВСИЧКИ качени файлове ще бъдат преместени в дадената зона за карантина или изтрити.';
$string['configclamtryagain'] = 'Отхвърляне на качването, опитайте отново';
$string['errorcantopensocket'] = 'Свързването с Unix домейн сокет (крайна точка за комуникация на данни) доведе до грешка {$a}';
$string['errorclamavnoresponse'] = 'ClamAV не отговаря; проверете състоянието на процеса.';
$string['errornounixsocketssupported'] = 'Unix домейн сокет не се поддържа в тази система. Моля, вместо това използвайте опцията за команден ред.';
$string['invalidpathtoclam'] = 'Moodle е конфигуриран да изпълнява Clam при качване на файлове, но пътят до Clam AV {$a}, не е валиден.';
$string['pathtoclam'] = 'Команден ред';
$string['pathtoclamdesc'] = 'Ако методът за изпълнение е настроен на "команден ред", въведете тук пътя към ClamAV. В Linux това ще бъде /usr/bin/clamscan или /usr/bin/clamdscan.';
$string['pathtounixsocket'] = 'Unix домейн сокет';
$string['pathtounixsocketdesc'] = 'Ако методът за изпълнение е настроен на "Unix domain socket", въведете тук пътя до ClamAV Unix socket. В Debian Linux това ще бъде /var/run/clamav/clamd.ctl. Уверете се, че процесът clamav има достъп за четене до качените файлове, най-лесният начин за това е да добавите потребител \'clamav\' към групата на вашия сървър (\'www-data\' в Debian Linux).';
$string['pluginname'] = 'Антивирусна програма ClamAV';
$string['privacy:metadata'] = 'Добавката ClamAV не съхранява лични данни.';
$string['quarantinedir'] = 'Карантинна директория';
$string['runningmethod'] = 'Метод на изпълнение';
$string['runningmethodcommandline'] = 'Команден ред';
$string['runningmethoddesc'] = 'Метод за стартиране на ClamAV. Командният ред се използва по подразбиране, но на Unix системи може да се постигне по-добра производителност чрез използване на системни сокети.';
$string['runningmethodtcpsocket'] = 'TCP сокет';
$string['runningmethodunixsocket'] = 'Unix домейн сокет';
$string['tcpsockethost'] = 'Име на хоста на TCP сокет';
$string['tcpsockethostdesc'] = 'Име на домейна на сървъра ClamAV';
$string['tcpsocketport'] = 'TCP сокет порт';
$string['tcpsocketportdesc'] = 'Портът, който да се използва при свързване към ClamAV';
$string['tries'] = 'Опити за сканиране';
$string['tries_desc'] = 'Брой опити, направени от ClamAV, ако има грешка по време на процеса на сканиране.';
$string['tries_notice'] = 'Сканирането на Clamav е изпробвано {$a->tries} пъти.
{$a->известие}';
$string['unknownerror'] = 'Имаше неизвестна грешка в clam.';
