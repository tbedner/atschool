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
 * Strings for component 'zoom', language 'ru', version '4.4'.
 *
 * @package     zoom
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accountid'] = 'ID аккаунта Zoom';
$string['actions'] = 'Действия';
$string['activitydate:ended'] = 'Закончилось:';
$string['activitydate:started'] = 'Началось:';
$string['activitydate:starts'] = 'Начнётся:';
$string['addparticipant'] = 'Добавить участника';
$string['addparticipantgroup'] = 'Добавить группу участников';
$string['addroom'] = 'Добавить комнату';
$string['addroomalert'] = 'Добавьте комнату, нажав';
$string['addtocalendar'] = 'Добавить в календарь';
$string['allmeetings'] = 'Все собрания';
$string['allmeetings_desc'] = 'С помощью этой настройки вы можете управлять, будет ли ссылка на индексную страницу Zoom отображаться внизу страницы обзора каждого экземпляра активного элемента или нет. Эта настройка влияет только на представление ссылки на страницах обзора Zoom. Даже если вы решите не показывать эту ссылку, пользователь все равно сможет получить доступ к индексной странице Zoom по другим ссылкам в рамках курса.';
$string['allmeetings_disable'] = 'Отключить ссылку «Все собрания»';
$string['allmeetings_enable'] = 'Включить ссылку «Все собрания»';
$string['alternative_hosts'] = 'Альтернативные организаторы';
$string['alternative_hosts_desc'] = 'С помощью этой настройки вы можете управлять отображением возможности выбора альтернативных организаторов в настройках этого активного элемента. Доступны два типа виджетов: обычное поле ввода, принимающее адреса электронной почты, разделенные запятыми и выбор пользователей с автозаполнением, который обеспечивает простой выбор из пользователей, зачисленных на курс, имеющих учетную запись Zoom и роль из списка {$a->roles}. Альтернативные организаторы, которые преподаватель мог задать непосредственно в Zoom, но которые нельзя выбрать в выборе пользователей Moodle, по-прежнему отображаются на странице обзора активного элемента и сохраняются при обновлении собрания из Moodle.';
$string['alternative_hosts_disable'] = 'Отключить опцию альтернативных организаторов';
$string['alternative_hosts_help'] = 'Опция «Альтернативных организаторов» позволяет вам планировать собрания и давать другим пользователям Zoom право начинать собрания. Эти пользователи получат электронное письмо от Zoom, в котором будет указано, что они были добавлены в качестве альтернативного организатора, со ссылкой на начало собрания. В поле ввода укажите адреса электронной почты альтернативных организаторов. Вы можете разделять несколько адресов запятой (без пробелов).';
$string['alternative_hosts_inputfield'] = 'Показывать обычное поле ввода для альтернативных организаторов';
$string['alternative_hosts_picker'] = 'Показывать вариант выбора пользователя с автозаполнением для альтернативных организаторов';
$string['alternative_hosts_picker_help'] = 'Опция «Альтернативных организаторов» позволяет вам планировать собрания и давать другим пользователям Zoom право начинать собрания. Эти пользователи получат электронное письмо от Zoom, в котором будет указано, что они были добавлены в качестве альтернативного организатора, со ссылкой на начало собрания. \\n\\n Вы можете выбрать одного или нескольких альтернативных организаторов в зависимости от ваших потребностей. Если вы не можете найти нужного пользователя в этом списке, значит, что этот пользователь либо не зачислен на этот курс с соответствующей ролью, либо не имеет соответствующей учётной записи в Zoom.';
$string['alternative_hosts_picker_placeholder'] = 'Выбрать пользователя(ей)';
$string['apiurl'] = 'URL API Zoom';
$string['audio_both'] = 'Компьютерный звук и Телефон';
$string['audio_telephony'] = 'Только телефон';
$string['audio_voip'] = 'Только компьютерный звук';
$string['audiodefault'] = 'Звук по умолчанию';
$string['authentication'] = 'Аутентификация';
$string['autorecording_cloud'] = 'Облако';
$string['autorecording_local'] = 'Локально';
$string['autorecording_none'] = 'Нет';
$string['autorecording_userdefault'] = 'Использовать стандартные настройки пользователя Zoom';
$string['autorecordingoptionsupdate'] = 'Обновить параметры автоматической записи';
$string['cachedef_zoomid'] = 'ID пользователя Zoom';
$string['calendardescriptionintro'] = '\\nОписание:\\n{\\$a}';
$string['calendariconalt'] = 'Значок календаря';
$string['calendarjoinurl'] = 'URL для присоединения к собранию: {$a}.';
$string['changehost'] = 'Сменить организатора';
$string['clickjoin'] = 'Нажал кнопку присоединиться к собранию';
$string['connectionfailed'] = 'Ошибка подключения:';
$string['connectionok'] = 'Подключение работает.';
$string['connectionsettings'] = 'Настройки подключения';
$string['connectionsettings_desc'] = 'Эти настройки определяют, как Moodle подключается к Zoom.';
$string['connectionstatus'] = 'Состояние подключения';
$string['day'] = 'Дн.';
$string['defaultsettings'] = 'Настройки Zoom по умолчанию';
$string['defaultsettings_help'] = 'Эти настройки определяют значения по умолчанию для всех новых собраний и вебинаров Zoom.';
$string['deletemeetingrecordings'] = 'Удалить записи собраний из Moodle';
$string['deleteroom'] = 'Удалить комнату';
$string['displayfirstname'] = 'Только имя';
$string['displayfullname'] = 'Фамилия и имя';
$string['displayid'] = 'Только (ID пользователя)';
$string['displayidfullname'] = '(ID пользователя), за которым следуют фамилия и имя';
$string['displayleadtime'] = 'Показать время начала';
$string['displayleadtime_desc'] = 'Если включено, время начала будет отображаться для пользователей. Таким образом, пользователи будут осведомлены о времени, когда они смогут присоединиться к встрече, до запланированного времени начала. Это может избавить пользователей от необходимости постоянно перезагружать страницу, пока они не смогут присоединиться.';
$string['displayleadtime_nohideif'] = 'Обратите внимание: этот параметр обрабатывается только в том случае, если для параметра «{$a}» задано значение больше нуля.';
$string['displaypassword'] = 'Показать пароль для входа';
$string['displaypassword_help'] = 'Если этот параметр включен, то пароль к собранию всегда будет отображаться для НЕорганизаторов.';
$string['downloadical'] = 'Скачать iCal';
$string['duration'] = 'Продолжительность';
$string['encryptiontype'] = 'Вид шифрования';
$string['end_date_option_after'] = 'После';
$string['end_date_option_by'] = 'До';
$string['enddate'] = 'Дата окончания';
$string['endtime'] = 'Время окончания';
$string['err_downloadicaldisabled'] = 'Скачивание iCal файлов Zoom собрание было отключено';
$string['err_duration_nonpositive'] = 'Продолжительность должна быть положительной';
$string['err_duration_too_long'] = 'Продолжительность не может превышать 150 часов.';
$string['err_end_date'] = 'Дата окончания повторения не может быть в прошлом.';
$string['err_end_date_before_start'] = 'Дата окончания повторения не может быть раньше даты начала.';
$string['err_invalid_password'] = 'Код доступа содержит недопустимые символы.';
$string['err_long_timeframe'] = 'Запрошенный временной интервал слишком большой, показать результаты за последний месяц.';
$string['err_password'] = 'Пароль может содержать только следующие символы: [a-z A-Z 0-9 @ - _ *]. Максимум 10 символов.';
$string['err_password_required'] = 'Требуется пароль.';
$string['err_registration'] = 'Текущий пользователь не может создавать новые собрания/вебинары, которые требуют регистрации';
$string['err_start_time_past'] = 'Дата начала не может быть в прошлом';
$string['errorwebservice'] = 'Zoom ошибка вебсервиса: {$a}.';
$string['errorwebservice_badrequest'] = 'Zoom получил неверный запрос: {$a}';
$string['errorwebservice_notfound'] = 'Ресурс не существует: {$a}';
$string['export'] = 'Экспорт';
$string['externaluser'] = 'Внешний пользователь';
$string['firstjoin'] = 'Сначала можно присоединиться';
$string['firstjoin_desc'] = 'Самый первый пользователь может присоединиться к запланированному собранию (за несколько минут до начала).';
$string['getmeetingrecordings'] = 'Получить записи собраний от Zoom';
$string['getmeetingreports'] = 'Получите отчет о собрании от Zoom';
$string['host'] = 'Организатор';
$string['invalid_status'] = 'Некорректный статус, проверьте базу данных.';
$string['invalidscheduleuser'] = 'Вы не можете запланировать для указанного пользователя.';
$string['join'] = 'Присоединиться';
$string['join_meeting'] = 'Присоединиться к собранию';
$string['joinbeforehost'] = 'Присоединяться к собранию раньше организатора';
$string['joinlink'] = 'Ссылка на вступление';
$string['jointime'] = 'Время присоединения';
$string['leavetime'] = 'Время отсоединения';
$string['licenseonjoin'] = 'Выберите этот вариант, если вы хотите, чтобы организатор получал лицензию при запуске собрания, <i>, а также </i> при создании.';
$string['licensesettings'] = 'Настройки лицензии';
$string['licensesnumber'] = 'Количество лицензий';
$string['lowlicenses'] = 'Если количество ваших лицензий превышает требуемое, то при создании пользователем каждого нового собрания ему будет назначена PRO лицензия,  путем понижения статуса другого пользователя. Опция действует, когда количество активных PRO лицензий превышает 5.';
$string['media'] = 'Медиа';
$string['meeting_finished'] = 'Завершено';
$string['meeting_invite'] = 'Информация о телефоне/наборе номера';
$string['meeting_invite_show'] = 'Показать приглашение на собрание';
$string['meeting_nonexistent_on_zoom'] = 'Отсутствует в Zoom';
$string['meeting_not_started'] = 'Не начался';
$string['meeting_started'] = 'В процессе';
$string['meeting_time'] = 'Время начала';
$string['modulename'] = 'Собрание Zoom';
$string['modulename_help'] = 'Zoom - это платформа для видео и веб-конференций, которая дает авторизованным пользователям возможность проводить онлайн-собрания.';
$string['modulenameplural'] = 'Собрания Zoom';
$string['month'] = 'Месяц(ы)';
$string['month_day_text'] = 'месяца';
$string['newmeetings'] = 'Новые собрания';
$string['nomeetinginstances'] = 'Не найдено сеансов для этого собрания.';
$string['noparticipants'] = 'На данный момент участников не найдено.';
$string['nosessions'] = 'Не найдено сеансов для указанного диапазона.';
$string['nozooms'] = 'Нет собраний';
$string['off'] = 'Выключить';
$string['oldmeetings'] = 'Заканчивающиеся собрания';
$string['on'] = 'Включить';
$string['option_audio'] = 'Параметры аудио';
$string['option_authenticated_users'] = 'Только авторизованные пользователи';
$string['option_host_video'] = 'Видео организатора';
$string['option_jbh'] = 'Разрешить присоединение раньше организатора';
$string['option_mute_upon_entry'] = 'Отключить звук при входе';
$string['option_mute_upon_entry_help'] = 'Автоматически отключать звук для всех участников, когда они присоединяются к собранию. Организатор контролирует, могут ли участники включать звук самостоятельно.';
$string['option_participants_video'] = 'Видео участников';
$string['option_proxyhost'] = 'Использовать прокси';
$string['option_waiting_room'] = 'Включить комнату ожидания';
$string['participantdatanotavailable'] = 'Подробности недоступны';
$string['participantdatanotavailable_help'] = 'Данные участников недоступны для этого сеанса Zoom (например, из-за соответствия HIPAA).';
$string['participants'] = 'Участники';
$string['password'] = 'Пароль для входа в комнату';
$string['password_max_length'] = 'Максимум 10 знаков.';
$string['passwordprotected'] = 'Защищено паролем';
$string['pluginadministration'] = 'Управление собранием Zoom';
$string['pluginname'] = 'Собрание Zoom';
$string['privacy:metadata:zoom_meeting_details'] = 'Таблица базы данных, в которой хранится информация о каждом экземпляре собрания.';
$string['privacy:metadata:zoom_meeting_details:topic'] = 'Название собрания, которое посетил пользователь.';
$string['privacy:metadata:zoom_meeting_participants'] = 'Таблица базы данных, в которой хранится информация об участниках собрания.';
$string['privacy:metadata:zoom_meeting_participants:duration'] = 'Как долго участник был на собрании';
$string['privacy:metadata:zoom_meeting_participants:join_time'] = 'Время, когда участник присоединился к собранию';
$string['privacy:metadata:zoom_meeting_participants:leave_time'] = 'Время, когда участник покинул собрание';
$string['privacy:metadata:zoom_meeting_participants:name'] = 'Имя участника';
$string['privacy:metadata:zoom_meeting_participants:user_email'] = 'Электронный адрес участника';
$string['recording'] = 'Видеозапись';
$string['recordingadd'] = 'Добавить видеозапись';
$string['recordingdate'] = 'Дата видеозаписи';
$string['recordinglink'] = 'Ссылка на видеозапись';
$string['recordingname'] = 'Заголовок';
$string['recordingnotfound'] = 'Видеозапись не найдена';
$string['recordings'] = 'Видеозаписи';
$string['recordingtype_active_speaker'] = 'Активный спикер';
$string['recordingtype_audio_interpretation'] = 'Интерпретация аудио';
$string['recordingtype_audio_only'] = 'Только аудио';
$string['recordingtype_poll'] = 'Опрос';
$string['recordingtype_shared'] = 'Демонстрация экрана';
$string['recordingtype_speaker'] = 'Вид спикера';
$string['recordingurl'] = 'URL видеозаписи';
$string['recordingview'] = 'Посмотреть видеозаписи';
$string['recurrence_option_daily'] = 'Ежедневно';
$string['recurrence_option_monthly'] = 'Ежемесячно';
$string['recurrence_option_no_time'] = 'Время не указано';
$string['recurrence_option_weekly'] = 'Еженедельно';
$string['recurrencetype'] = 'Повторять';
$string['recurringmeeting'] = 'Повторяющееся собрание';
$string['recurringmeeting_help'] = 'Включение этой опции сделает собрание повторяющимся без даты и времени окончания. После этого к нему можно будет присоединиться в любое время.';
$string['recurringmeetingexplanation'] = 'У собрания нет времени или даты окончания';
$string['recurringmeetinglong'] = 'Повторяющееся собрание (без даты окончания или времени)';
$string['recurringmeetingthisis'] = 'Это повторяющееся собрание.';
$string['recycleonjoin'] = 'Повторно использовать лицензию при присоединении';
$string['redefinelicenses'] = 'Переопределить лицензии';
$string['refreshreports'] = 'Обновить отчеты о сеансах';
$string['register'] = 'Зарегистрироваться';
$string['registration'] = 'Требуется регистрация';
$string['registration_help'] = 'Включение этой опции заставит участников зарегистрироваться на собрание/вебинар Zoom, прежде чем присоединиться к ним.';
$string['registration_text'] = 'Принудить участников зарегистрироваться на собрание/вебинар';
$string['repeatinterval'] = 'Повторять каждые';
$string['report'] = 'Отчеты';
$string['reportapicalls'] = 'Отчет вызовов API исчерпан';
$string['requirepasscode'] = 'Требовать пароль для собрания';
$string['requirepasscode_help'] = 'При включении этой опции потребуется, чтобы организатор установил пароль для собрания. Присоединяющимся участникам необходимо будет ввести его перед тем, как присоединиться к собранию. Участникам, которые присоединяются к собранию из Moodle, вводить пароль не нужно.';
$string['resetapicalls'] = 'Сбросить количество имеющихся вызовов API';
$string['resetzoomsall'] = 'Удалить все оценки пользователей, данные о просмотре записей пользователями и данные об участниках собраний.';
$string['room'] = 'Комната';
$string['roomname'] = 'Имя комнаты';
$string['rooms'] = 'Комнаты';
$string['schedule'] = 'Расписание';
$string['schedulefor'] = 'Запланировать собрание для';
$string['schedulefor_help'] = 'Вы можете планировать собрания от имени другого пользователя. Этот пользователь должен предоставить вам право планирования в Zoom. Выбранный пользователь станет организатором собрания и его лицензия Zoom будет использоваться для этого собрания.';
$string['scheduleforself'] = 'Вы';
$string['schedulingprivilege'] = 'Право планирования';
$string['schedulingprivilege_desc'] = 'С помощью этого параметра вы можете контролировать, будет ли отображаться параметр права планирования для пользователей в настройках собрания или нет. Этот параметр влияет только на настройки конкретного собрания. Даже если вы решите включить эту опцию, пользователю все равно потребуется получить в Zoom разрешение на планирование, предоставленное другим пользователем, чтобы иметь возможность запланировать встречу для другого пользователя.';
$string['schedulingprivilege_disable'] = 'Отключить опцию права планирования';
$string['schedulingprivilege_enable'] = 'Включить опцию права планирования';
$string['search:activity'] = 'Zoom - информация об активном элементе';
$string['security'] = 'Безопасность';
$string['sessions'] = 'Сессии';
$string['setpasscode'] = 'Задать пароль';
$string['showmedia'] = 'Показать раздел «Медиа»';
$string['start'] = 'Начать';
$string['start_time'] = 'Когда';
$string['starthostjoins'] = 'Начать показ видео при подключении';
$string['startpartjoins'] = 'Начинать видео, когда участник присоединяется к собранию';
$string['starttime'] = 'Время начала';
$string['status'] = 'Статус';
$string['title'] = 'Название';
$string['topic'] = 'Тема';
$string['unavailable'] = 'Невозможно присоединиться к собранию в это время';
$string['unavailablefinished'] = 'Собрание уже закончилось.';
$string['unavailablenotstartedyet'] = 'Собрание ещё не началось.';
$string['updatemeetings'] = 'Обновить настройки собрания из Zoom';
$string['usepersonalmeeting'] = 'Использовать персональный ID собрания {$a}';
$string['waitingroom'] = 'Комната ожидания включена';
$string['waitingroomenable'] = 'Включить комнату ожидания';
$string['webinar'] = 'Вебинар';
$string['webinar_already_false'] = '<p><b> Этот модуль уже был установлен как собрание, а не как вебинар. Вы не можете переключить этот параметр после создания собрания.</b></p>';
$string['webinar_already_true'] = '<p><b> Этот модуль уже был установлен как вебинар, а не как собрание. Вы не можете переключить этот параметр после создания вебинара.</b></p>';
$string['webinar_by_default'] = 'Вебинар по умолчанию';
$string['webinar_disable'] = 'Отключить вебинары';
$string['webinar_help'] = 'Этот параметр доступен только для предварительно авторизованных учетных записей Zoom.';
$string['webinarthisis'] = 'Это вебинар';
$string['weekoption_first'] = 'Первый';
$string['weekoption_fourth'] = 'Четвёртый';
$string['weekoption_last'] = 'Последний';
$string['weekoption_second'] = 'Второй';
$string['weekoption_third'] = 'Третий';
$string['zoom:addinstance'] = 'Добавлять новое собрание Zoom';
$string['zoom:view'] = 'Просмотреть собрания Zoom';
$string['zoomerr'] = 'Произошла ошибка с Zoom.';
$string['zoomerr_id_missing'] = 'Необходимо указать ID курса или вышеуказанный пример ID';
$string['zoomerr_meetingnotfound'] = 'Это собрание просрочено. Вы можете  <a href="{$a->recreate}">создать его заново</a> или <a href="{$a->delete}">удалить его полностью</a>.';
$string['zoomerr_meetingnotfound_info'] = 'Это собрание не найдено в Zoom. Если у вас есть вопросы, обратитесь к владельцу собрания.';
$string['zoomerr_usernotfound'] = 'Вы используете Zoom в первый раз, поэтому для включения своей учетной записи Zoom войдите в <a href="{$a}" target="_blank">{$a}</a> с вашими учетными данными. Как только Вы активируете свою учетную запись Zoom, перезагрузите эту страницу и продолжите настройку своего собрания. Еще убедитесь, что ваша электронная почта на Zoom совпадает с вашей электронной почтой в этой системе.';
$string['zoomerr_viewrecordings_off'] = 'Просмотр видеозаписей отключено, выполнение задания невозможно';
$string['zoomurl'] = 'URL домашней страницы Zoom';
