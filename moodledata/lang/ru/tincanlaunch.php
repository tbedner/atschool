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
 * Strings for component 'tincanlaunch', language 'ru', version '4.4'.
 *
 * @package     tincanlaunch
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['apCreationFailed'] = 'Не удалось создать провайдер элемента Watershed.';
$string['appearanceheading'] = 'Внешний вид';
$string['badarchive'] = 'Вы должны предоставить действительный zip-файл';
$string['badimsmanifestlocation'] = 'Файл tincan.xml найден, но его нет в корне вашего zip-файла. Пожалуйста, перепакуйте ваш курс';
$string['badmanifest'] = 'Некоторые явные ошибки: см. журнал ошибок';
$string['checkcompletion'] = 'Проверить завершение';
$string['completiondetail:completionbyverb'] = '';
$string['completiondetail:completionbyverbdesc'] = '';
$string['completiondetail:completionexpiry'] = 'Выполнено в течение последних {$a} дней';
$string['completiondetail:completionexpirydesc'] = 'Студент должен был завершить обучение в течение последних <b>{$a}</b> дней.';
$string['completionexpiry'] = 'Истечение срока действия';
$string['completionexpirygroup'] = 'Срок выполнения истекает через (дн.)';
$string['completionexpirygroup_help'] = '';
$string['completionverb'] = '';
$string['completionverbgroup'] = '';
$string['completionverbgroup_help'] = '';
$string['eventactivitycompleted'] = 'Элемент выполнен';
$string['eventactivitylaunched'] = 'Элемент запущен';
$string['expirecredentials'] = 'Срок действия учетных данных истек';
$string['idmissing'] = 'Необходимо указать иID модуля курса или ID экземпляра';
$string['lrsdefaults'] = 'Настройки LRS по умолчанию';
$string['lrsheading'] = 'Переопределить настройки LRS по умолчанию';
$string['lrssettingdescription'] = 'По умолчанию этот элемент курса использует глобальные настройки LRS, которые находятся в разделе Администрирование сайта > Плагины > Модули действий > xAPI Launch Link. Чтобы изменить настройки для этого конкретного элемента курса, выберите «Разблокировать значения по умолчанию».';
$string['modulename_help'] = 'Плагин для Moodle, позволяющий запускать контент xAPI (TinCan), который затем отслеживается в отдельной LRS.';
$string['nomanifest'] = 'Неправильный пакет файлов — отсутствует tincan.xml';
$string['overridedefaults'] = 'Разблокировать настройки по умолчанию';
$string['overridedefaults_help'] = 'Позволяет элементу курса иметь настройки LRS, отличные от настроек LRS по умолчанию для всего сайта.';
$string['pluginadministration'] = 'Администрирование xAPI Launch Link';
$string['profilefields'] = 'Поля профиля пользователя для синхронизации с профилем агента';
$string['profilefields_desc'] = '';
$string['returntocourse'] = '';
$string['returntoregistrations'] = '';
$string['tincanactivityid'] = 'ID элемента';
$string['tincanactivityid_help'] = 'Идентификационный IRI для основного запускаемого элнмента. Он <b>ДОЛЖЕН</b> совпадать с идентификационным IRI в файле tincan.xml.';
$string['tincanlaunch:addinstance'] = 'Добавить новый элемент xAPI в курс';
$string['tincanlaunch:view'] = 'Просмотр элемента xAPI';
$string['tincanlaunch_attempt'] = 'Начать новую регистрацию';
$string['tincanlaunch_completed'] = 'Опыт получен!';
$string['tincanlaunch_notavailable'] = 'Хранилище учебных записей (LRS) недоступно. Обратитесь к системному администратору. Если вы системный администратор, перейдите в раздел Администрирование > Разработка > Отладка и установите для параметра «Отладочные сообщения» значение «РАЗРАБОТЧИК». После записи информации об ошибке верните значение «НЕТ» или «МИНИМУМ».';
$string['tincanlaunch_progress'] = 'Попытка запущена в новом окне. Если вы закрыли это окно, вы можете спокойно покинуть эту страницу.';
$string['tincanlaunch_regidempty'] = 'ID регистрации не найден. Пожалуйста, закройте это окно.';
$string['tincanlaunchcustomacchp'] = 'Домашняя страница пользовательского аккаунта';
$string['tincanlaunchcustomacchp_help'] = 'Если идентификатор указан, Moodle будет использовать эту домашнюю страницу вместе с полем ID номера профиля пользователя для идентификации учащегося. Если ID номер не указан, учащийся будет идентифицирован по электронной почте или ID номеру Moodle. Примечание: при изменении идентификатора учащегося он потеряет доступ к регистрациям, связанным с предыдущими идентификаторами, а данные о завершении обучения могут быть сброшены. Это также может повлиять на отчеты в вашей системе LRS.';
$string['tincanlaunchlrsauthentication'] = 'Интеграция LRS';
$string['tincanlaunchlrsauthentication_help'] = 'Используйте дополнительные функции интеграции для создания новых учетных данных аутентификации для каждого запуска поддерживаемых LRS.';
$string['tincanlaunchlrsauthentication_option_0'] = 'Нет';
$string['tincanlaunchlrsauthentication_option_1'] = 'Watershed';
$string['tincanlaunchlrsauthentication_watershedhelp'] = 'Примечание: для интеграции Watershed провайдеру элемента не требуется включенный доступ к API.';
$string['tincanlaunchlrsauthentication_watershedhelp_label'] = 'Интеграция Watershed';
$string['tincanlaunchlrsduration'] = 'Продолжительность';
$string['tincanlaunchlrsduration_default'] = '9000';
$string['tincanlaunchlrsduration_help'] = 'Используется с «интегрированной базовой аутентификацией LRS». Запрашивает у LRS сохранение учетных данных действительными в течение указанного количества минут.';
$string['tincanlaunchlrsendpoint'] = 'Конечная точка';
$string['tincanlaunchlrsendpoint_help'] = 'Конечная точка LRS (например, http://lrs.example.com/endpoint/). Должна включать косую черту в конце.';
$string['tincanlaunchlrsfieldset'] = 'Значения по умолчанию для настроек элемента курса xAPI Launch Link';
$string['tincanlaunchlrsfieldset_help'] = 'Это значения по умолчанию, используемые на всем сайте при создании нового элемента. Для каждого элемента их можно переопределить и предоставить альтернативные значения.';
$string['tincanlaunchlrslogin'] = 'Базовый логин';
$string['tincanlaunchlrslogin_help'] = 'Ваш ключ входа в LRS.';
$string['tincanlaunchlrspass'] = 'Базовый пароль';
$string['tincanlaunchlrspass_help'] = 'Ваш пароль LRS (секретный).';
$string['tincanlaunchname'] = 'Название ссылки для запуска';
$string['tincanlaunchname_help'] = 'Название ссылки для запуска, как оно будет отображаться пользователю.';
$string['tincanlaunchurl'] = 'URL-адрес запуска';
$string['tincanlaunchurl_help'] = 'Полный URL-адрес элемента xAPI, который вы хотите запустить.';
$string['tincanlaunchuseactoremail'] = 'Идентифицировать по электронной почте';
$string['tincanlaunchuseactoremail_help'] = 'Если выбран этот параметр, учащиеся будут идентифицироваться по адресу электронной почты, если он записан у них в Moodle.';
$string['tincanlaunchviewfirstlaunched'] = 'Первый запуск';
$string['tincanlaunchviewlastlaunched'] = 'Последний запуск';
$string['tincanlaunchviewlaunchlink'] = 'Запуск существующей регистрации';
$string['tincanlaunchviewlaunchlinkheader'] = 'Ссылка для запуска';
$string['tincanmultipleregs'] = 'Разрешить множественные регистрации.';
$string['tincanmultipleregs_help'] = 'Если выбран этот параметр, учащийся может начать несколько регистраций для одного элемента. Если параметр не выбран, будет отображаться только последняя регистрация. <b>Этот параметр нельзя использовать, если включен упрощенный запуск.</b>';
$string['tincanpackage'] = 'ZIP-пакет';
$string['tincanpackage_help'] = 'Если у вас есть пакетный курс xAPI, вы можете загрузить его здесь. При загрузке пакета поля «URL-адрес запуска» и «ID активного элемента» будут автоматически заполнены при сохранении, используя данные из файла tincan.xml, содержащегося в архиве ZIP. Вы можете отредактировать эти настройки в любое время, но не изменяйте ID активного элемента (ни напрямую, ни путем загрузки файла), если вы не понимаете последствий.';
$string['tincanpackagetext'] = 'Вы можете указать URL-адрес запуска и идентификатор активности напрямую или загрузить ZIP-архив с файлом tincan.xml. Идентификатор активности всегда должен быть полным URL-адресом (или другим IRI) и ОБЯЗАТЕЛЬНО соответствовать ID элемента, указанному в файле tincan.xml или курсе.';
$string['tincanpackagetitle'] = 'Настройки запуска';
$string['tincansimplelaunchnav'] = 'Включить упрощенный запуск';
$string['tincansimplelaunchnav_help'] = 'Если выбран этот параметр, пользователь пропустит экран регистрации, и курс будет автоматически запущен с использованием последней регистрации. Если предыдущая регистрация не найдена, то будет создана новая. <b>Включение этого параметра отключит настройку множественных регистраций.</b>';
