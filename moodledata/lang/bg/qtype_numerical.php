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
 * Strings for component 'qtype_numerical', language 'bg', version '4.4'.
 *
 * @package     qtype_numerical
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptederror'] = 'Допустима грешка';
$string['addmoreanswerblanks'] = 'Още {no} празни места за въпроси';
$string['addmoreunitblanks'] = 'Още {no} празни места за единици';
$string['answercolon'] = 'Отговор:';
$string['answermustbenumberorstar'] = 'Отговорът трябва да е число, например -1р234 или 3е8 или \'*\'.';
$string['answerno'] = 'Отговор {$a}';
$string['decfractionofquestiongrade'] = 'като част между 0 и 1 от оценката на въпроса';
$string['decfractionofresponsegrade'] = 'като част между 0 и 1 от оценката на отговора';
$string['decimalformat'] = 'десетични цифри';
$string['editableunittext'] = 'в поле за въвеждане на текст';
$string['errornomultiplier'] = 'Трябва да въведете множител за тази единица.';
$string['errorrepeatedunit'] = 'Не може да имате две единици с еднакви имена.';
$string['geometric'] = 'Геометрично';
$string['invalidnumber'] = 'Трябва да въведете число.';
$string['invalidnumbernounit'] = 'Трябва да въведете число. Не добавяйте единици в отговора си.';
$string['invalidnumericanswer'] = 'Един от отговорите, които сте дали не е число.';
$string['invalidnumerictolerance'] = 'Един от въведените толеранси не е число.';
$string['leftexample'] = 'в ляво, например $1,00 или £1,00';
$string['manynumerical'] = 'Единиците са по избор. Ако има зададена единица, тя се използва за превръщане на отговора в Единица 1 преди определяне дали той е верен.';
$string['multiplier'] = 'Множител';
$string['nominal'] = 'Абсолютен';
$string['nonvalidcharactersinnumber'] = 'НЕВАЛИДНИ символи в число';
$string['notenoughanswers'] = 'Трябва да въведете поне един отговор.';
$string['numericalmultiplier'] = 'Множител';
$string['numericalmultiplier_help'] = 'С този множител се умножава правилният отговор преди да се сравни с дадения отговор.

Единица 1 има множител по подразбиране 1. Например, ако правилният отговор е 5500 и Единица 1 е W, отговор 5500 W се оценява като верен.

Ако добавите единица kW с множител 0,001, като се умножи верният отговор 5500 се получава 5,5 и отговор 5,5 kW се оценява като верен.

Имайте предвид, че и грешката в отговора се умножава, така че, например, ако допустимата грешка е 100W за отговор в kW тя е 0,1kW.';
$string['oneunitshown'] = 'Единица 1 се показва автоматично независимо от полето за отговор.';
$string['onlynumerical'] = 'Няма мерни единици. Само числената стойност се преценява.';
$string['pleaseenterananswer'] = 'Моля, въведете отговор.';
$string['pleaseenteranswerwithoutthousandssep'] = 'Моля, въведете Вашия отговор без разделител между хилядите ({$a}).';
$string['pluginname'] = 'Числов';
$string['pluginname_help'] = 'От позицията на студент числовият въпрос изглежда като въпрос с кратък отговор. Разликата е в това, че в числовият отговор се допуска да има малка допустима грешка. Това позволява определено множество от отговори да се приемат за един отговор. Например ако отговора е 10 с допустима грешка 2, то всяко число от 8 до 12 е правилен отговор.';
$string['pluginname_link'] = 'question/type/numerical';
$string['pluginnameadding'] = 'Добавяне на числов въпрос';
$string['pluginnameediting'] = 'Редактиране на въпрос от тип "Числов"';
$string['pluginnamesummary'] = 'Разрешава числов отговор (евентуално включващ мерни единици), който се оценява чрез сравнение с различни шаблони за отговор (евентуално включващи толеранси).';
$string['relative'] = 'Относителен';
$string['rightexample'] = 'в дясно, например 1,00cm или 1,00km';
$string['selectunit'] = 'Изберете една единица';
$string['selectunits'] = 'Изберете единици';
$string['studentunitanswer'] = 'Единиците се въвеждат';
$string['tolerancetype'] = 'Вид на толеранса';
$string['unit'] = 'Единица';
$string['unitappliedpenalty'] = 'Тези точки са с наказание {$a} за единиците.';
$string['unitchoice'] = 'с елемент за множествен избор';
$string['unitedit'] = 'Редактиране на единица';
$string['unitgraded'] = 'Единици трябва да има и ще бъдат оценени.';
$string['unithandling'] = 'Управление на мерните единици';
$string['unitincorrect'] = 'Не сте посочили правилна единица.';
$string['unitmandatory'] = 'Задължително';
$string['unitmandatory_help'] = '* Отговорът ще бъде оценен в написаната единица.

*  Ако полето е празно ще се приложи наказание за единиците.';
$string['unitnotselected'] = 'Трябва да изберете единица.';
$string['unitonerequired'] = 'Трябва да въведете поне една единица';
$string['unitoptional'] = 'Единица по избор';
$string['unitoptional_help'] = '* Ако полето за единица не е празно, отговорът ще бъде оценен в тази единица.

* Ако единицата е изписана неправилно или не е посочена, отговорът ще се счита за невалиден.';
$string['unitpenalty'] = 'Наказание за единиците';
$string['unitpenalty_help'] = 'Наказание за единиците се прилага ако:

* е въведено неправилно означение на единица или
* единицата е въведена в полето за стойност';
$string['unitposition'] = 'Единиците са';
$string['units'] = 'Мерни единици';
$string['unitselect'] = 'от падащо меню';
$string['unitx'] = 'Единица {no}';
$string['xmustbenumeric'] = '{$a} трябва да е число.';
$string['xmustnotbenumeric'] = '{$a} не може да е число.';
$string['youmustenteramultiplierhere'] = 'Тук трябва да въведете множител.';
