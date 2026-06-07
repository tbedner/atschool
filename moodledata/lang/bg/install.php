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
 * Strings for component 'install', language 'bg', version '4.4'.
 *
 * @package     install
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['availablelangs'] = 'Налични езикови пакети';
$string['chooselanguage'] = 'Изберете език';
$string['chooselanguagehead'] = 'Изберете език';
$string['chooselanguagesub'] = 'Моля, изберете език за инсталацията. Този език ще бъде, също така, език по подразбиране на сайта, но може да бъде променен и по-късно след инсталирането.';
$string['configfilenotwritten'] = '&nbsp;Инсталиращият скрипт не успя автоматично да създаде файла config.php, вероятно защото директорията на Moodle не е достъпна за запис. Вие можете ръчно да копирате следния код във файл с име config.php в главната директория на Moodle.';
$string['configurationcomplete'] = 'Конфигурацията приключена';
$string['configurationcompletehead'] = 'Конфигурацията приключена';
$string['configurationcompletesub'] = 'Moodle направи опит да запише конфигурационния файл в главната  директорията на Moodle.';
$string['database'] = 'База данни';
$string['databasehead'] = 'Настройки на базата от данни';
$string['databasehost'] = 'Хост на базата данни';
$string['databasename'] = 'Име на базата данни';
$string['databasepass'] = 'Парола за базата данни';
$string['databasetypehead'] = 'Избиране на драйвер за база данни';
$string['databasetypesub'] = 'Moodle може да използва няколко типа сървъри за бази данни. Моля, попитайте администратора на сървъра, кой тип да изберете.';
$string['databaseuser'] = 'Потребителско име за базата данни';
$string['dataroot'] = 'Директория за данни';
$string['dbpass'] = 'Парола';
$string['dbprefix'] = 'Представка на таблиците';
$string['dbtype'] = 'Тип';
$string['dirroot'] = 'Директория на Moodle';
$string['downloadlanguagebutton'] = 'Изтегляне на езиковия пакет &quot;{$a}&quot;';
$string['downloadlanguagehead'] = 'Изтегляне на езиков пакет';
$string['environmenthead'] = 'Проверка на Вашата работна среда ...';
$string['environmentsub2'] = 'Всяка версия на Moodle изисква някаква минимална версия на PHP и няколко необходими PHP разширения. Преди всяко инсталиране или надграждане се извършва пълна проверка на работната среда. Моля, обърнете се към администратора на сървъра ако не знаете как да инсталирате нова версия или да разрешите резширенията на PHP.';
$string['errorsinenvironment'] = 'Проверката на роботната среда е прекратена!';
$string['inputdatadirectory'] = 'Директория за данни:';
$string['inputwebadress'] = 'Интернет адрес:';
$string['inputwebdirectory'] = 'Директория на Moodle:';
$string['installation'] = 'Инсталиране';
$string['langdownloaderror'] = 'За съжаление езикът "{$a}" не може да бъде изтеглен. Инсталирането ще продължи на английски.';
$string['nativemysqlihelp'] = '<p>Базата от данни е мястото, където повечето от настройките и данните на Moodle се съхраняват.  Тя трябва да се конфигурира тук.</p>
<p>Името на базата, потребителското име и паролата са задължителни полета; префиксът на таблицата е опционален.</p>
<p>Името на базата от данни може да съдържа само буквено-цифрени символи, доларов знак ($) или долно тире (_). </p>
<p>Ако базата от данни не съществува и указаният потребител има нужните разрешения, Moodle ще се опита да създаде новата база от данни с коректни разрешения и настройки.</p>';
$string['nativeocihelp'] = 'Сега трябва да настроите базата данни, в която ще се съхраняват повечето данни на Moodle. Тази базата данни трябва вече да е създадена, а името на потребител и паролата за достъп до нея да съществуват. Представката не е задължителна.';
$string['nativepgsqlhelp'] = 'Сега трябва да настроите базата данни, в която ще се съхраняват повечето данни на Moodle. Тази базата данни трябва вече да е създадена, а името на потребител и паролата за достъп до нея да съществуват. Представката не е задължителна.';
$string['nativesqlsrvhelp'] = 'Сега трябва да настроите базата данни, в която ще се съхраняват повечето данни на Moodle. Тази базата данни трябва вече да е създадена, а името на потребител и паролата за достъп до нея да съществуват. Представката не е задължителна.';
$string['paths'] = 'Пътища';
$string['pathshead'] = 'Потвърждаване на пътищата';
$string['pathsroparentdataroot'] = 'Директория ({$a->parent}) не е разрешена за запис и директорията за данни ({$a->dataroot}) не може да бъде създадена от инсталатора.';
$string['pathssubdataroot'] = 'Тази директория е място, където Moodle, записва качваните файлове. Тази директория трябва да е достъпна за четене И ЗА ЗАПИС от потребителя на интернет сървъра (обикновено \'nobody\' или \'apache\'), но не трябва да е достъпна пряко през Интернет. Инталаторът ще се опита да създаде директорията, ако тя не съществува.';
$string['pathssubdirroot'] = 'Пълен път до директорията на Moodle.';
$string['pathssubwwwroot'] = 'Пълен интернет адрес, на който ще се отваря Moodle. Не е възможно Moodle да се отваря чрез различни адреси. Ако Вашият сайт има няколко адреса трябва на всеки от другите адреси да направите пренасочване към този. Ако Вашият сайт се отваря както глобално от Интернет, така и от локална мрежа, настройте DNS, така че потребителите от локалната мрежа също да могат да ползват глобалния адрес. Ако адресът не е коректен, моля, променете адреса в браузъра си и започнете инсталирането с правилния адрес.';
$string['phpextension'] = '{$a} разширение на PHP';
$string['phpversionhelp'] = '<p>Moodle изисква версия на PHP най-малко 4.3.0 или 5.1.0 (5.0.x има значителен брой известни проблеми).</p> <p>Вие използвате в момента версия {$a}</p> <p>Трябва да обновите PHP или да се преместите на нов хост (сървър) с по-нова версия на PHP!<br /> (В случая с 5.0.x може да опитате да инсталирате по-старата версия 4.4.x)</p>';
$string['releasenoteslink'] = 'За повече информация за тази версия на Moodle, моля вижте бележките към версията на {$a}';
$string['wwwroot'] = 'Уеб адрес';
