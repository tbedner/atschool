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
 * Strings for component 'local_o365', language 'ru', version '4.4'.
 *
 * @package     local_o365
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acp_coursesynccustom'] = 'Настройка синхронизации курса';
$string['acp_coursesynccustom_bulk'] = 'Массовые операции';
$string['acp_coursesynccustom_bulk_disable'] = 'Отключить синхронизацию для курсов на этой странице';
$string['acp_coursesynccustom_bulk_enable'] = 'Включить синхронизацию для курсов на этой странице';
$string['acp_coursesynccustom_confirm_all_action'] = 'Вы уверены, что хотите изменить статус синхронизации всех курсов? Это действие не может быть отменено.';
$string['acp_coursesynccustom_controlled_per_course'] = 'Разрешить в курсе настройку синхронизации курса';
$string['acp_coursesynccustom_controlled_per_course_desc'] = 'При включенном параметре участники курсов Moodle, имеющие право выступать в качестве владельцев команд (имеющие полномочия «Владелец команды» [local/o365:teamowner]), смогут управлять синхронизацией курса из блока Microsoft в курсе.';
$string['acp_coursesynccustom_disable_all'] = 'Отключить синхронизацию для всех курсов';
$string['acp_coursesynccustom_enable_all'] = 'Включить синхронизацию для всех курсов';
$string['acp_coursesynccustom_enabled'] = 'Включено';
$string['acp_coursesynccustom_new_course'] = 'Включено по умолчанию для нового курса';
$string['acp_coursesynccustom_new_course_desc'] = 'При включенном параметре по умолчанию синхронизация будет включена для всех вновь созданных курсов.';
$string['acp_coursesynccustom_off'] = 'Отключено<br />Отключить создание команд для всех курсов.';
$string['acp_coursesynccustom_onall'] = 'Все функции включены<br />Позволить создавать команды для всех курсов.';
$string['acp_coursesynccustom_oncustom'] = 'Настроить<br />Позволить авторизованным пользователям выбирать, для каких курсов создавать команды.<br> <span id="adminsetting_coursesync" style="font-weight: bold"><a href="{$a}">Настроить синхронизацию курсов</a></span>';
$string['acp_coursesynccustom_savemessage'] = 'Ваши изменения сохранены.';
$string['acp_coursesynccustom_sds_course'] = 'Заблокировано для курса SDS';
$string['acp_coursesynccustom_searchwarning'] = 'Примечание: Все несохраненные результаты поиска будут потеряны. Нажмите «Сохранить изменения», чтобы быть уверенным, что изменения будут сохранены.';
$string['acp_coursesynccustom_settings_header'] = 'Параметры синхронизации';
$string['acp_healthcheck'] = 'Проверка состояния';
$string['acp_maintenance'] = 'Инструменты обслуживания';
$string['acp_maintenance_cleandeltatoken'] = 'Очистить дельта-токены синхронизации пользователей';
$string['acp_maintenance_cleandeltatoken_completed'] = 'Дельта-токен синхронизации пользователя и дельта-токен пропуска были очищены.';
$string['acp_maintenance_cleandeltatoken_desc'] = 'Если синхронизация пользователя не происходит полностью после обновления параметров синхронизации пользователя, это может быть вызвано старым дельта-токеном синхронизации. Очистка токена принудительно удалит  полную повторную синхронизацию в следующий раз, когда будет запущена синхронизация пользователя.';
$string['acp_maintenance_debugdata'] = 'Создать пакет данных отладки';
$string['acp_maintenance_debugdata_desc'] = 'Это создаст пакет, содержащий различную информацию о вашей среде Moodle и Microsoft 365, чтобы помочь разработчикам в решении любых проблем, которые могут у вас возникнуть. По запросу разработчика запустите этот инструмент и отправьте полученный файл для загрузки. Примечание: Хотя этот пакет не содержит конфиденциальных данных, мы просим вас открыто не публиковать этот файл и не отправлять его ненадежной стороне.';
$string['acp_maintenance_desc'] = 'Эти инструменты могут помочь вам решить некоторые распространенные проблемы.';
$string['acp_maintenance_recreatedeletedgroups'] = 'Воссоздать удаленные группы Microsoft 365';
$string['acp_maintenance_recreatedeletedgroups_all_groups_exist'] = 'Все группы, подключенные к курсу Moodle, и группы курсов существуют.';
$string['acp_maintenance_recreatedeletedgroups_course'] = 'Курс';
$string['acp_maintenance_recreatedeletedgroups_course_group'] = 'Группа курса';
$string['acp_maintenance_recreatedeletedgroups_desc'] = 'Это позволит проверить наличие любых команд Microsoft Teams, которые могли быть удалены вручную, и создать их заново.';
$string['acp_maintenance_recreatedeletedgroups_group_type'] = 'Тип объекта Moodle';
$string['acp_maintenance_recreatedeletedgroups_group_type_course'] = 'Курс';
$string['acp_maintenance_recreatedeletedgroups_group_type_course_group'] = 'Группа курса';
$string['acp_maintenance_recreatedeletedgroups_status'] = 'Статус';
$string['acp_maintenance_recreatedeletedgroups_status_created_fail'] = 'Воссоздание группы не удалось';
$string['acp_maintenance_recreatedeletedgroups_status_created_success'] = 'Группа была воссоздана';
$string['acp_maintenance_recreatedeletedgroups_status_sync_disabled'] = 'Синхронизация курса отключена';
$string['acp_maintenance_resyncgroupusers'] = 'Повторная синхронизация пользователей в группах Microsoft 365 для курсов';
$string['acp_maintenance_resyncgroupusers_course_output'] = 'Результат при повторной синхронизации';
$string['acp_maintenance_resyncgroupusers_desc'] = 'Это приведет к повторной синхронизации членства пользователей во всех группах Microsoft 365, созданных для всех курсов Moodle. Это обеспечит наличие в группе Microsoft 365 всех пользователей, зарегистрированных на курс Moodle. <br /><b>Примечание:</b> Если вы добавили в группу Microsoft 365 дополнительных пользователей, не зарегистрированных на соответствующем курсе Moodle, они будут удалены.';
$string['acp_maintenance_resyncgroupusers_no_course'] = 'Нет курсов, подсоединенных к Microsoft 365';
$string['acp_maintenance_warning'] = 'Предупреждение: это дополнительные инструменты. Пожалуйста, используйте их, только если вы понимаете, что делаете.';
$string['acp_parentsite_desc'] = 'Сайт для обмена данными курса Moodle.';
$string['acp_parentsite_name'] = 'Сайт Moodle';
$string['acp_teamconnection'] = 'Управление соединением команды';
$string['acp_teamconnections'] = 'Управление соединениями команд';
$string['acp_teamconnections_actions'] = 'Действия';
$string['acp_teamconnections_cache_last_updated'] = 'Последний раз кэш команд обновлялся {$a->lastupdated}. Щелкните <a href="{$a->updateurl}">здесь</a> для обновления кэша.';
$string['acp_teamconnections_cache_never_updated'] = 'Кэш команд никогда не обновлялся. Для обновления щелкните <a href="{$a->updateurl}">здесь</a>.';
$string['acp_teamconnections_connected_team'] = 'Связанная команда';
$string['acp_teamconnections_connection_completed'] = 'Курс успешно подсоединен к команде';
$string['acp_teamconnections_course_connected'] = 'Курс успешно связан с командой';
$string['acp_teamconnections_current_connection'] = 'ТЕКУЩАЯ СВЯЗЬ';
$string['acp_teamconnections_exception_course_not_exist'] = 'Курса для связывания не существует.';
$string['acp_teamconnections_exception_invalid_team_id'] = 'Неверный ID команды';
$string['acp_teamconnections_exception_no_unified_token'] = 'Не удалось получить единый токен для вызовов API.';
$string['acp_teamconnections_exception_not_configured'] = 'Microsoft 365 настроен не полностью.';
$string['acp_teamconnections_exception_team_already_connected'] = 'Команда уже связана с другим курсом';
$string['acp_teamconnections_exception_team_creation'] = 'При создании команды произошла ошибка . Подробности: {$a}';
$string['acp_teamconnections_exception_team_no_owner'] = 'Не удается найти подходящего владельца команды.';
$string['acp_teamconnections_form_connect_course'] = 'Управление связью команды для курса {$a}';
$string['acp_teamconnections_form_sds_warning'] = 'ПРИМЕЧАНИЕ: Ручное подключение курса Moodle к команде, созданной с помощью Student Data Sync (SDS), может привести к неожиданному поведению как при синхронизации курса Moodle, так и при синхронизации SDS, поэтому должно быть запрещено.';
$string['acp_teamconnections_form_team'] = 'Выбрать команду';
$string['acp_teamconnections_group_only'] = '(Только группа)';
$string['acp_teamconnections_invalid_connection'] = 'Неверные связи';
$string['acp_teamconnections_no_owner'] = 'Добавьте владельца для подключения к командам Teams.';
$string['acp_teamconnections_not_connected'] = 'Нет связей';
$string['acp_teamconnections_sync_disabled'] = 'Перед управлением подключениями Групп необходимо сначала включить синхронизацию курса.';
$string['acp_teamconnections_table_cannot_create_team_from_group'] = 'Невозможно создать команду из группы - нет владельца';
$string['acp_teamconnections_table_connect'] = 'Связать';
$string['acp_teamconnections_table_connect_to_different_team'] = 'Связать с другой командой';
$string['acp_teamconnections_table_missing_team'] = 'Курс подключен к несуществующей команде. Это будет исправлено при следующем запуске запланированной задачи синхронизации курса.';
$string['acp_teamconnections_table_update'] = 'Обновить';
$string['acp_teamconnections_team_already_connected'] = 'Курс уже связан с Командой.';
$string['acp_teamconnections_team_created'] = 'Команда для курса успешно создана.';
$string['acp_teamconnections_team_exists_but_not_connected'] = 'Курс настроен для подключения только к Группе, однако  существует Команда, связанная с Группой.';
$string['acp_teamconnections_team_missing'] = '(Команда отсутствует)';
$string['acp_teamconnections_teams_cache_updated'] = 'Кэш команд успешно обновлен.';
$string['acp_tenants_actions'] = 'Действия';
$string['acp_tenants_add'] = 'Добавить нового клиента';
$string['acp_tenants_additional_tenants'] = 'Дополнительные клиенты';
$string['acp_tenants_delete'] = 'Удалить';
$string['acp_tenants_errornotsetup'] = 'Пожалуйста, завершите процесс установки плагина перед добавлением дополнительных клиентов.';
$string['acp_tenants_hosttenant'] = 'Хост клиента: {$a}';
$string['acp_tenants_intro'] = '<b>Как работает многопользовательский доступ:</b><br />Многопользовательский режим позволяет нескольким клиентам Microsoft Entra получать доступ к вашему сайту Moodle. <br /><br />
Вот как это настроить:
<ol>
<li>Войдите в Moodle как администратор сайта, не использующий плагин аутентификации OpenID Connect.</li>
<li>Убедитесь, что настройки <b>Конечная точка авторизации</b> и <b>Конечная точка токена</b> плагина аутентификации OpenID Connect используют настройки по умолчанию, не относящиеся к конкретному клиенту.</li>
<li>Отключите в Moodle плагин аутентификации OpenID Connect. (Используйте <a href="{$a}/admin/settings.php?section=manageauths">страницу управления плагинами аутентификации</a>.)</li>
<li>Перейдите в Microsoft Entra ID и найдите приложение, которое вы настроили для Moodle.</li>
<li>Включите многопользовательский режим в приложении Microsoft Entra ID и сохраните изменения.</li>
<li>Предоставьте приложению хотя бы одно из следующих делегированных разрешений Graph: <b>Directory.Read.All</b>, <b>Domain.Read.All</b> или <b>Domain.ReadWrite.All</b>. Согласие администратора вашей организации не требуется.</li>
<li>Если вы уже вошли в систему, используя учётную запись Microsoft из дополнительного клиента, полностью выйдите из системы и войдите снова.</li>
<li>Для каждого клиента, которого вы хотите включить, нажмите «Добавить нового клиента» и войдите в систему, используя учётную запись администратора этого клиента.</li>
<li>После добавления всех нужных клиентов повторно включите плагин аутентификации OpenID Connect в Moodle.</li>
<li>Готово! Чтобы добавить дополнительных клиентов в будущем, просто нажмите кнопку «Добавить нового клиента» и войдите в систему, используя учётную запись администратора этого клиента.</li>
</ol>
<b>Важное примечание:</b> Включение многопользовательского режима в приложении Microsoft Entra ID позволяет всем клиентам Microsoft Entra получать доступ к вашему приложению. Добавление клиентов здесь позволяет ограничить доступ Moodle к настроенным вами клиентам. <b>Если вы удалите всех клиентов из этого списка перед отключением многопользовательского режима в приложении Microsoft Entra ID или включите аутентификацию OpenID Connect в Moodle с пустым списком, ваш сайт Moodle будет открыт для всех клиентов Microsoft Entra.</b>';
$string['acp_tenants_legacy_tenants'] = 'Устаревшие клиенты (требуются действия)';
$string['acp_tenants_legacy_tenants_help'] = 'Добавленные ранее дополнительные клиенты могут не работать в обновлённом многопользовательском режиме и требуют исправления.<br/>
Чтобы добавить нового арендатора, воспользуйтесь расположенной выше кнопкой «Добавить нового арендатора».';
$string['acp_tenants_none'] = 'Вы не настроили клиентов. Если вы включили многопользовательский доступ в Microsoft Entra ID, ваш сайт Moodle может быть открыт для всех пользователей Microsoft 365';
$string['acp_tenants_revokeaccess'] = 'Отменить доступ';
$string['acp_tenants_tenant'] = 'Клиент';
$string['acp_tenants_title'] = 'Многопользовательский доступ';
$string['acp_tenants_title_desc'] = 'Эта страница поможет вам настроить многопользовательский доступ к Moodle из Office 365.';
$string['acp_tenantsadd_desc'] = 'Чтобы предоставить доступ дополнительному клиенту, нажмите ниже кнопку и войдите в Microsoft 365, используя учетную запись администратора нового клиента. Вы вернетесь к списку дополнительных клиентов, где будет указан новый клиент. После этого вы сможете использовать Moodle с новым клиентом.';
$string['acp_tenantsadd_linktext'] = 'Перейдите на страницу входа в Microsoft 365';
$string['acp_userconnections'] = 'Управление подключениями пользователей';
$string['acp_userconnections_column_actions'] = 'Действия';
$string['acp_userconnections_column_muser'] = 'Пользователь Moodle';
$string['acp_userconnections_column_o365user'] = 'Пользователь Microsoft 365';
$string['acp_userconnections_column_status'] = 'Состояние соединения';
$string['acp_userconnections_column_usinglogin'] = 'Используемый логин';
$string['acp_userconnections_filtering_muserfullname'] = 'Полное имя пользователя Moodle';
$string['acp_userconnections_filtering_musername'] = 'Логин Moodle';
$string['acp_userconnections_filtering_o365username'] = 'Логин Microsoft 365';
$string['acp_userconnections_manualmatch_details'] = 'Эта страница позволяет сопоставить одного пользователя Moodle с одним пользователем Microsoft 365.';
$string['acp_userconnections_manualmatch_error_muserconnected'] = 'Пользователь Moodle уже связан с пользователем Microsoft 365';
$string['acp_userconnections_manualmatch_error_muserconnected2'] = 'Пользователь Moodle уже связан с пользователем Microsoft 365 (2)';
$string['acp_userconnections_manualmatch_error_musermatched'] = 'Пользователь Moodle уже сопоставлен пользователю Microsoft 365';
$string['acp_userconnections_manualmatch_error_o365userconnected'] = 'Пользователь Microsoft 365 уже связан с другим пользователем Moodle';
$string['acp_userconnections_manualmatch_error_o365usermatched'] = 'Пользователь Microsoft 365 уже сопоставлен с другим пользователем Moodle';
$string['acp_userconnections_manualmatch_musername'] = 'Пользователь Moodle';
$string['acp_userconnections_manualmatch_o365username'] = 'Логин Microsoft 365';
$string['acp_userconnections_manualmatch_title'] = 'Соответствие пользователя вручную';
$string['acp_userconnections_manualmatch_uselogin'] = 'Войти через Microsoft 365';
$string['acp_userconnections_resync_nodata'] = 'Не удалось найти информацию, сохраненную Microsoft 365 для этого пользователя.';
$string['acp_userconnections_resync_notconnected'] = 'Этот пользователь не подсоединен к Microsoft 365';
$string['acp_userconnections_table_connected'] = 'Связано';
$string['acp_userconnections_table_disconnect'] = 'Разъединено';
$string['acp_userconnections_table_disconnect_confirmmsg'] = 'Это отключит пользователя Moodle "{$a}" от Microsoft 365. Нажмите на ссылку ниже, чтобы продолжить.';
$string['acp_userconnections_table_match'] = 'Совпадение';
$string['acp_userconnections_table_matched'] = 'Совпадает с существующим пользователем. <br /> В ожидании завершения';
$string['acp_userconnections_table_noconnection'] = 'Нет соединения';
$string['acp_userconnections_table_resync'] = 'Повторная синхронизация';
$string['acp_userconnections_table_synced'] = 'Синхронизировано с Microsoft Entra ID.<br />Ожидается первоначальный вход в систему.';
$string['acp_userconnections_table_unmatch'] = 'Несовпадение';
$string['acp_userconnections_table_unmatch_confirmmsg'] = 'Это приведет к удалению пользователя Moodle «{$a}» из Microsoft 365. Для продолжения нажмите ссылку ниже.';
$string['acp_usermatch'] = 'Сопоставление пользователя';
$string['acp_usermatch_desc'] = 'Этот инструмент позволяет сопоставить пользователей Moodle с пользователями Microsoft 365. Загрузите файл, содержащий пользователей Moodle и связанных пользователей Microsoft 365, и задача cron проверит данные и настроит соответствие.';
$string['acp_usermatch_matchqueue'] = 'Шаг 2: Очередь сопоставлений';
$string['acp_usermatch_matchqueue_clearall'] = 'Очистить все';
$string['acp_usermatch_matchqueue_clearerrors'] = 'Очистить ошибки';
$string['acp_usermatch_matchqueue_clearqueued'] = 'Очистить очередь';
$string['acp_usermatch_matchqueue_clearsuccess'] = 'Очищено';
$string['acp_usermatch_matchqueue_column_muser'] = 'Логин Moodle';
$string['acp_usermatch_matchqueue_column_o365user'] = 'Логин Microsoft 365';
$string['acp_usermatch_matchqueue_column_openidconnect'] = 'OpenID Connect';
$string['acp_usermatch_matchqueue_column_status'] = 'Состояние';
$string['acp_usermatch_matchqueue_desc'] = 'В этой таблице показано текущее состояние операции сопоставления. При каждом запуске запланированной задачи <b>Обработка очереди сопоставления</b> будет обработан пакет из следующих пользователей.<br /> <b> Примечание: </b> Эта страница не обновляется динамически, обновите эту страницу, чтобы посмотреть текущее состояние.';
$string['acp_usermatch_matchqueue_empty'] = 'Очередь сопоставлений в настоящее время пуста. Загрузите файл данных с помощью средства выбора файлов выше, чтобы добавить пользователей в очередь';
$string['acp_usermatch_matchqueue_status_error'] = 'Ошибка: {$a}';
$string['acp_usermatch_matchqueue_status_queued'] = 'В очереди';
$string['acp_usermatch_matchqueue_status_success'] = 'Успешно';
$string['acp_usermatch_upload'] = 'Шаг 1: Загрузить новые сопоставления';
$string['acp_usermatch_upload_desc'] = 'Загрузите файл данных, содержащий имена пользователей Moodle и Microsoft 365, чтобы сопоставить пользователей Moodle с пользователями Microsoft 365.<br />
<br />
Этот файл должен представлять собой простой текстовый CSV-файл, содержащий три элемента в каждой строке:
<ul>
<li>логин Moodle,</li>
<li>логин Microsoft 365,</li>
<li>1 или 0, где 1 означает изменение метода аутентификации пользователя на OpenID Connect, а 0 означает сохранение существующего метода аутентификации и использование его в качестве связанной учетной записи.</li>
</ul>
Не включайте заголовки или дополнительные данные.<br />
Например: <pre>moodleuser1,bob.smith@example.onmicrosoft.com,1<br />moodleuser2,john.doe@example.onmicrosoft.com,0</pre>';
$string['acp_usermatch_upload_err_badmime'] = 'Тип {$a} не поддерживается. Загрузите текстовый CSV-файл.';
$string['acp_usermatch_upload_err_data'] = 'Строка #{$a} содержит недопустимые данные. Каждая строка в CSV-файле должна содержать два элемента: логин Moodle и логин Microsoft 365.';
$string['acp_usermatch_upload_err_fileopen'] = 'Не удалось открыть файл для обработки. Правильны ли разрешения в каталоге Moodledata?';
$string['acp_usermatch_upload_err_nofile'] = 'Не получен файл для добавления в очередь.';
$string['acp_usermatch_upload_submit'] = 'Добавить файл данных для очереди сопоставления';
$string['cachedef_groups'] = 'Хранит данные группы Microsoft 365';
$string['calendar_event'] = 'Просмотр деталей';
$string['calendar_setting'] = 'Включить синхронизацию календаря Outlook';
$string['calendar_site'] = 'Календарь сайта';
$string['calendar_user'] = 'Персональный (пользовательский) календарь';
$string['cohortsync_addmapping'] = 'Добавить связь';
$string['cohortsync_connectionnotcohortsync'] = 'Неверный запрос: несоответствие типа связи.';
$string['cohortsync_connectionnotfound'] = 'Неверный запрос: связь не найдена.';
$string['cohortsync_deletemapping'] = 'Удалить связь';
$string['cohortsync_desc'] = 'Эта страница позволяет осуществлять одностороннюю синхронизацию групп Microsoft с глобальными группами Moodle на системном уровне. Добавление нового подключения инициирует процесс синхронизации: пользователи из выбранной группы Microsoft, подключенные к Microsoft, будут добавлены в выбранную глобальную группу Moodle.';
$string['cohortsync_emptycohorts'] = 'Нет доступных глобальных групп Moodle';
$string['cohortsync_emptygroups'] = 'Нет доступных групп Microsoft';
$string['cohortsync_emptymatchings'] = 'Связи не найдены';
$string['cohortsync_mappingadded'] = 'Успешно добавлена новая связь';
$string['cohortsync_mappingdeleted'] = 'Связь удалена';
$string['cohortsync_mappingfailed'] = 'Ошибка добавления глобальной группы и связи с группой. Возможные причины: группа или глобальная группа не существует, группа уже связана с другой глобальной группой, группа уже связана с этой глобальной группой.';
$string['cohortsync_select_cohort'] = 'Глобальная группа Moodle';
$string['cohortsync_select_group'] = 'Группа Microsoft';
$string['cohortsync_tabledesc'] = 'Текущие связи между группами Microsoft и когортами Moodle';
$string['cohortsync_tablehead_actions'] = 'Действия';
$string['cohortsync_tablehead_cohort'] = 'Глобальная группа Moodle';
$string['cohortsync_tablehead_group'] = 'Группа Microsoft';
$string['cohortsync_taskname'] = 'Синхронизация глобальной группы';
$string['cohortsync_title'] = 'Синхронизация глобальной группы';
$string['cohortsync_unifiedapierror'] = 'Ошибка при получении списка групп от Microsoft.';
$string['course_selector_label'] = 'Выберите существующий курс';
$string['courserequest_customrequestnote'] = '| Этот запрос выполняется со страницы запроса курса Microsoft Teams и после утверждения будет связан с командой: "{$a->имя}" с URL-адресом {$a->url}.';
$string['courserequest_duplicate'] = 'От той же команды уже существует запрос на курс, ожидающий рассмотрения или одобренный.';
$string['courserequest_emptyteams'] = 'Нет доступных Microsoft Teams';
$string['courserequest_graphapi_disabled'] = 'Связь с Microsoft Teams отсутствует. Обратитесь к администратору вашего сайта.';
$string['courserequest_invalid_team'] = 'Неверная команда, использованная в запросе курса.';
$string['courserequest_teams'] = 'Команда Microsoft';
$string['courserequest_teams_help'] = 'Выберите команду Microsoft, которая будет связана с курсом. Имеющиеся владельцы и участники команды будут зачислены на созданный курс после одобрения запроса на курс.';
$string['courserequest_title'] = 'Запрос курса от Teams';
$string['courserequest_updatecourserequeststatus_taskname'] = 'Обновить статус запроса курса';
$string['erroracpapcantgettenant'] = 'Не удалось получить клиента Microsoft Entra. Введите вручную.';
$string['erroracpauthoidcnotconfig'] = 'Пожалуйста, сначала установите учетные данные приложения в auth_oidc.';
$string['erroracpcantgettenant'] = 'Не удалось получить URL OneDrive, введите его вручную.';
$string['erroracplocalo365notconfig'] = 'Пожалуйста, сначала настройте local_o365.';
$string['errorcannotgetapiclient'] = 'Невозможно получить клиента API Graph.';
$string['errorcannotgettoken'] = 'Не удалось получить токен приложения или системы.';
$string['errorcouldnotgettoken'] = 'Не удалось получить токен пользователя приложения или системного API. Если вы еще не предоставили согласие администратора, пожалуйста, сделайте это в первую очередь.';
$string['errorcouldnotrefreshtoken'] = 'Не удалось обновить токен';
$string['errorgetapplicationtoken'] = 'Не удалось получить токен приложения. Проверьте конфигурацию интеграции.';
$string['errorhttpclientbadtempfileloc'] = 'Не удалось открыть временное местоположение для сохранения файла.';
$string['errorhttpclientnofileinput'] = 'Нет параметра файла в httpclient::put';
$string['errornoapifound'] = 'API с идентификатором {$a} не найден.';
$string['errornodirectaccess'] = 'Прямой доступ к странице запрещен';
$string['errornoresponsesavailable'] = 'Нет доступных ответов.';
$string['errornotoken'] = 'Токен недоступен для пользователя #{$a}';
$string['errornotokenforsysmemuser'] = 'Для системного пользователя нет токена. Запустите проверку работоспособности local_o365.';
$string['errornotokenforusersync'] = 'Токен для usersync недоступен.';
$string['erroro365apibadcall'] = 'Ошибка в вызове API';
$string['erroro365apibadcall_message'] = 'Ошибка в вызове API: {$a}';
$string['erroro365apibadpermission'] = 'Разрешение не найдено';
$string['erroro365apicouldnotcreatesite'] = 'Проблема создания сайта.';
$string['erroro365apicoursenotfound'] = 'Курс не найден.';
$string['erroro365apiinvalidmethod'] = 'Неверный http-метод передан в вызов API';
$string['erroro365apiinvalidtoken'] = 'Неверный или просроченный токен.';
$string['erroro365apinoparentinfo'] = 'Не удалось найти информацию о родительской папке';
$string['erroro365apinotimplemented'] = 'Это должно быть отменено.';
$string['erroro365apinotoken'] = 'Нет токена для данного ресурса и пользователя и не удалось получить его. Срок действия токена пользователя истек?';
$string['erroro365apisiteexistsnolocal'] = 'Сайт уже существует, но не удалось найти локальную запись.';
$string['erroro365badphoto'] = 'Получена недействительная фотография профиля от Microsoft 365.';
$string['erroro365nophoto'] = 'У этого пользователя нет фотографии в Microsoft 365.';
$string['errorprovisioningapp'] = 'Не удалось обеспечить приложение Moodle в Команде.';
$string['errortenantvaluenotstring'] = 'Значение клиента должно быть строкой';
$string['errorunabletofindgraphapi'] = 'Не удается найти graph api в приложении.';
$string['errorupnchangeisnotsupported'] = 'UPN вашей учётной записи Microsoft изменился. Обратитесь к администратору, чтобы обновить свою учётную запись Moodle.';
$string['errorusermatched'] = 'Учетная запись Microsoft 365 «{$a->aadupn}» уже сопоставлена с пользователем Moodle «{$a->username}». Чтобы завершить связывание, сначала войдите в систему как пользователь Moodle и следуйте инструкциям в блоке Microsoft.';
$string['eventapifail'] = 'Ошибка API';
$string['eventcalendarsubscribed'] = 'Пользователь подписался на календарь';
$string['eventcalendarunsubscribed'] = 'Пользователь отписался от календаря';
$string['healthcheck_fixlink'] = 'Нажмите здесь, чтобы исправить это';
$string['healthcheck_ratelimit_result_disabled'] = 'Функции ограничения скорости были отключены.';
$string['healthcheck_ratelimit_result_notice'] = 'Включено небольшое регулирование при увеличенной нагрузке сайта Moodle. <br /> <br /> Все функции Microsoft 365 работоспособны, но запросы распределяются медленнее, чтобы предотвратить прерывание работы служб Microsoft 365. Как только активность Moodle уменьшится, все вернется к стандартным значениям. <br />(Уровень {$a->level} / начало {$a->timestart})';
$string['healthcheck_ratelimit_result_passed'] = 'Вызовы API Microsoft 365 выполняются на полной скорости.';
$string['healthcheck_ratelimit_result_warning'] = 'Включено увеличенное регулирование для обработки значительной нагрузки сайта Moodle. <br /> <br /> Все функции Microsoft 365 по-прежнему работают, но запросы Microsoft 365 могут занять больше времени. Как только активность сайта Moodle снизится, все вернется к стандартным значениям.<br />(Уровень {$a->level} / начало {$a->timestart})';
$string['healthcheck_ratelimit_title'] = 'Регулирование API';
$string['help_user_appassign'] = 'Справка о назначении пользователей приложению';
$string['help_user_appassign_help'] = 'Это приведет к тому, что все учетные записи Microsoft Entra ID с соответствующими учетными записями Moodle будут назначены приложению Microsoft Entra ID, созданному для этой системы Moodle, если они еще не назначены.';
$string['help_user_create'] = 'Справка по созданию аккаунта';
$string['help_user_create_help'] = 'Это создаст пользователей в Moodle от каждого пользователя в связанной Microsoft Entra ID. Учетные записи будут созданы только для тех пользователей, у которых в данный момент нет учетных записей в Moodle. Новые учетные записи будут использовать метод аутентификации OpenID Connect с использованием их профиля Microsoft Entra ID и смогут использовать все функции интеграции Microsoft 365 с Moodle.';
$string['help_user_delete'] = 'Справка по удалению аккаунтов';
$string['help_user_delete_help'] = 'Это удалит пользователей из Moodle, если они помечены как удаленные в Microsoft Entra ID. Это будет работать, только если включена опция приостановки пользователя. Учетная запись Moodle будет удалена и вся связанная с ней информация пользователя будет удалена из Moodle. Будьте осторожны!
Примечание: по умолчанию удаление происходит через 30 дней после удаления учетной записи в Microsoft Entra ID из-за периода хранения данных для мягкого удаления в Entra ID (учетные записи можно восстановить в течение этого времени).';
$string['help_user_disabledsync'] = 'Справка по синхронизации состояния отключения';
$string['help_user_disabledsync_help'] = 'Это приостановит / возобновит работу пользователей в Moodle, если их связанные учетные записи в Microsoft Entra ID помечены как запрещенные / разрешенные для входа.';
$string['help_user_emailsync'] = 'Справка по синхронизации имен пользователей Microsoft Entra ID с адресами электронной почты Moodle';
$string['help_user_emailsync_help'] = 'Включение этой опции будет сопоставлять логины пользователей Microsoft Entra ID с адресами электронной почты пользователей Moodle вместо поведения по умолчанию, при котором логины пользователей Microsoft Entra ID сопоставляются с логинами пользователей Moodle.';
$string['help_user_guestsync'] = 'Справка по синхронизации гостя';
$string['help_user_guestsync_help'] = 'При включенном параметре пользователи-гости в Microsoft Entra ID будут синхронизироваться с Moodle в задаче синхронизации пользователей.';
$string['help_user_match'] = 'Справка по сопоставлению аккаунтов';
$string['help_user_match_help'] = 'Это позволит рассмотреть каждого пользователя в связанном Microsoft Entra ID и попытаться сопоставить его с пользователем в Moodle. Это совпадение основано на именах пользователей в UPN Microsoft Entra ID и Moodle. Совпадения не учитывают регистр и не учитывают доменную часть Microsoft Entra ID UPN. Например, "BoB.SmiTh" в Moodle будет соответствовать "bob.smith@example.onmicrosoft.com". У соответствующих пользователей будут связаны учетные записи Moodle и Microsoft Entra ID, и они смогут использовать все функции интеграции Microsoft 365 и Moodle. Метод аутентификации пользователя не изменится, если не будет включен приведенный ниже параметр.';
$string['help_user_matchswitchauth'] = 'Справка по переключению совпадающих учетных записей';
$string['help_user_matchswitchauth_help'] = 'Для этого необходимо выше включить параметр «Сопоставить имеющихся пользователей Moodle». Включение этого параметра при сопоставлении пользователей переключит их метод аутентификации на OpenID Connect. Затем они смогут войти в Moodle со своими учетными данными Microsoft 365. Примечание: Убедитесь, что подключаемый модуль аутентификации OpenID Connect включен, если вы хотите использовать этот параметр.';
$string['help_user_nodelta'] = 'Справка по выполнению полной синхронизации';
$string['help_user_nodelta_help'] = 'По умолчанию синхронизация пользователей синхронизирует только изменения из Microsoft Entra ID с момента последнего запуска синхронизации. При включении этого параметра каждый раз будет выполняться полная синхронизация пользователя.';
$string['help_user_photosync'] = 'Справка по синхронизации фотографии пользователя Microsoft 365 (Cron)';
$string['help_user_photosync_help'] = 'Это приведет к тому, что фотографии всех пользователей Moodle будут синхронизированы с их фотографиями в Microsoft 365.';
$string['help_user_photosynconlogin'] = 'Справка по синхронизации фотографии пользователя Microsoft 365 (Вход)';
$string['help_user_photosynconlogin_help'] = 'Это приведет к тому, что фотография пользователя в Moodle будет синхронизирована с его фотографией в Microsoft 365, когда этот пользователь войдет в систему. Обратите внимание, что для этого требуется, чтобы пользователь посетил страницу Moodle, содержащую блок Microsoft.';
$string['help_user_reenable'] = 'Справка по повторному включению учетных записей';
$string['help_user_reenable_help'] = 'Это повторно включит приостановленные учетные записи Moodle, если они будут возвращены из Microsoft Entra ID.';
$string['help_user_suspend'] = 'Спрака по приостановке аккаунтов';
$string['help_user_suspend_help'] = 'Это приведет к приостановке доступа пользователей к Moodle, если они отмечены как удаленные в Microsoft Entra ID.';
$string['help_user_tzsync'] = 'Справка по синхронизации часового пояса Outlook (Cron)';
$string['help_user_tzsync_help'] = 'Это приведет к синхронизации часовых поясов всех пользователей Moodle с их предпочтениями часового пояса в Outlook.';
$string['help_user_tzsynconlogin'] = 'Справка по синхронизации часового пояса Outlook (Вход)';
$string['help_user_tzsynconlogin_help'] = 'Это приведет к синхронизации часового пояса пользователя Moodle с его предпочтениями часового пояса в Outlook. Обратите внимание, что для этого требуется, чтобы пользователь посетил страницу Moodle, содержащую блок Microsoft.';
$string['help_user_update'] = 'Справка по обновлению всех учетных записей';
$string['help_user_update_help'] = 'Это обновит всех пользователей Moodle от каждого пользователя в связанной Microsoft Entra ID.';
$string['multi_tenants_settings_needs_update'] = 'Необходимо обновить настройки многопользовательского режима. Перейдите на <a href="{$a}">страницу настройки многопользовательского режима</a>.';
$string['notification_content_invalid_secret'] = 'Уважаемый администратор сайта!

Ключ приложения Microsoft Entra ID, используемый в вашей интеграции Moodle и Microsoft 365, по-видимому, недействителен. Это может быть вызвано либо истечением срока действия ключа, либо его удалением.
Проверьте ключ, чтобы убедиться, что интеграция работает должным образом.';
$string['notification_content_secret_almost_expired'] = 'Уважаемый администратор сайта!

Срок действия ключа приложения Microsoft Entra ID, используемого для интеграции Moodle и Microsoft 365, истекает через {$a}.
Создайте новый секретный ключ в Microsoft Entra ID и обновите его в конфигурации интеграции, чтобы избежать сбоев в работе интеграции.';
$string['notification_content_secret_expired'] = 'Уважаемый администратор сайта!

Срок действия секретного ключа приложения Microsoft Entra ID, используемого для интеграции Moodle и Microsoft 365, истек.
Создайте новый секретный ключ в Microsoft Entra ID и обновите его в конфигурации интеграции, чтобы восстановить интеграцию.';
$string['notification_days_days'] = '{$a} дн.';
$string['notification_days_less_than_one_day'] = 'менее 1 дня';
$string['notification_days_one_day'] = '1 день';
$string['notification_subject_invalid_secret'] = 'Требуется действие: обнаружен недействительный ключ приложения Microsoft Entra ID.';
$string['notification_subject_secret_almost_expired'] = 'Требуется действие: срок действия ключа приложения Microsoft Entra ID скоро истечет.';
$string['notification_subject_secret_expired'] = 'Требуется действие: срок действия ключа приложения Microsoft Entra ID истек';
$string['o365:manageconnectionlink'] = 'Создавать связи';
$string['o365:manageconnectionunlink'] = 'Разрывать связи';
$string['o365:managegroups'] = 'Видеть ссылки на службы Microsoft 365 и параметры управления в блоке Microsoft в курсах с включенной синхронизацией';
$string['o365:teammember'] = 'Участник команды';
$string['o365:teamowner'] = 'Владелец команды';
$string['o365:viewgroups'] = 'Видеть ссылки на службы Microsoft 365 в блоке Microsoft в курсах с включенной синхронизацией';
$string['other_login'] = 'Вход вручную';
$string['personal_calendar'] = 'Персональный';
$string['pluginname'] = 'Интеграция с Microsoft 365';
$string['privacy:metadata:local_o365'] = 'Плагин Локальный Microsoft 365';
$string['privacy:metadata:local_o365_appassign'] = 'Информация о назначениях ролей приложения Microsoft 365';
$string['privacy:metadata:local_o365_appassign:assigned'] = 'Был ли пользователь назначен приложению';
$string['privacy:metadata:local_o365_appassign:muserid'] = 'ID пользователя Moodle';
$string['privacy:metadata:local_o365_appassign:photoid'] = 'ID фотографии пользователя в Microsoft 365';
$string['privacy:metadata:local_o365_appassign:photoupdated'] = 'Когда фотография пользователя последний раз обновлялась из Microsoft 365';
$string['privacy:metadata:local_o365_calidmap'] = 'Информация о связях между событиями календаря Microsoft 365 и событиями календаря Moodle.';
$string['privacy:metadata:local_o365_calidmap:eventid'] = 'ID события в Moodle.';
$string['privacy:metadata:local_o365_calidmap:origin'] = 'Где произошло событие  - либо в Moodle, либо в Microsoft 365';
$string['privacy:metadata:local_o365_calidmap:outlookeventid'] = 'ID события в Outlook.';
$string['privacy:metadata:local_o365_calidmap:userid'] = 'ID пользователя, которому принадлежит событие.';
$string['privacy:metadata:local_o365_calsettings'] = 'Информация о настройках синхронизации календаря';
$string['privacy:metadata:local_o365_calsettings:o365calid'] = 'ID календаря в Microsoft 365';
$string['privacy:metadata:local_o365_calsettings:timecreated'] = 'Время создания записи';
$string['privacy:metadata:local_o365_calsettings:user_id'] = 'ID пользователя Moodle';
$string['privacy:metadata:local_o365_calsub'] = 'Информация о синхронизации подписок между календарями Moodle и Outlook';
$string['privacy:metadata:local_o365_calsub:caltype'] = 'Тип календаря Moodle (сайт, курс, пользователь)';
$string['privacy:metadata:local_o365_calsub:caltypeid'] = 'ID связанного календаря Moodle';
$string['privacy:metadata:local_o365_calsub:isprimary'] = 'Основной ли это календарь';
$string['privacy:metadata:local_o365_calsub:o365calid'] = 'ID календаря Microsoft 365';
$string['privacy:metadata:local_o365_calsub:syncbehav'] = 'Поведение синхронизации (например, Moodle для Outlook или Outlook для Moodle)';
$string['privacy:metadata:local_o365_calsub:timecreated'] = 'Время создания подписк';
$string['privacy:metadata:local_o365_calsub:user_id'] = 'ID пользователя Moodle, который подписан';
$string['privacy:metadata:local_o365_connections'] = 'Информация о связях между пользователями Moodle и Microsoft 365, которые еще не подтверждены';
$string['privacy:metadata:local_o365_connections:entraidupn'] = 'UPN пользователя Microsoft Entra ID.';
$string['privacy:metadata:local_o365_connections:muserid'] = 'ID пользователя Moodle';
$string['privacy:metadata:local_o365_connections:uselogin'] = 'Нужно ли переключать метод аутентификации пользователя после завершения.';
$string['privacy:metadata:local_o365_matchqueue'] = 'Информация о пользователе Moodle для сопоставления пользователю Microsoft 365';
$string['privacy:metadata:local_o365_matchqueue:completed'] = 'Была ли запись обработана';
$string['privacy:metadata:local_o365_matchqueue:errormessage'] = 'Сообщение об ошибке (если есть)';
$string['privacy:metadata:local_o365_matchqueue:musername'] = 'Логин пользователя Moodle.';
$string['privacy:metadata:local_o365_matchqueue:o365username'] = 'Логин пользователя Microsoft 365.';
$string['privacy:metadata:local_o365_matchqueue:openidconnect'] = 'Нужно ли переключать пользователя на аутентификацию OpenID Connect, когда соответствие выполнено';
$string['privacy:metadata:local_o365_objects'] = 'MicrosoftИнформация о связях между объектами Moodle и Office 365';
$string['privacy:metadata:local_o365_objects:metadata'] = 'Любые связанные метаданные';
$string['privacy:metadata:local_o365_objects:moodleid'] = 'ID объекта в Moodle';
$string['privacy:metadata:local_o365_objects:o365name'] = 'Удобочитаемое имя объекта в Microsoft 365';
$string['privacy:metadata:local_o365_objects:objectid'] = 'ID объекта Microsoft 365';
$string['privacy:metadata:local_o365_objects:subtype'] = 'Подтип объекта.';
$string['privacy:metadata:local_o365_objects:tenant'] = 'Клиент, которому принадлежит объект (в многопользовательской среде)';
$string['privacy:metadata:local_o365_objects:timecreated'] = 'Время создания записи.';
$string['privacy:metadata:local_o365_objects:timemodified'] = 'Время изменения записи.';
$string['privacy:metadata:local_o365_objects:type'] = 'Тип объекта (группа, пользователь, курс и т.д.)';
$string['privacy:metadata:local_o365_token'] = 'Информация о ключах API Microsoft 365 для пользователей';
$string['privacy:metadata:local_o365_token:expiry'] = 'Время истечения ключа';
$string['privacy:metadata:local_o365_token:refreshtoken'] = 'Токен обновления.';
$string['privacy:metadata:local_o365_token:scope'] = 'Область действия токена.';
$string['privacy:metadata:local_o365_token:token'] = 'Токен';
$string['privacy:metadata:local_o365_token:tokenresource'] = 'Ресурс токена.';
$string['privacy:metadata:local_o365_token:user_id'] = 'ID пользователя Moodle';
$string['settings_addsync_tzsync'] = 'Синхронизировать часовой пояс Outlook и Moodle при выполнении cron.';
$string['settings_addsync_tzsynconlogin'] = 'Синхронизировать часовой пояс Outlook и Moodle при входе.';
$string['settings_adminconsent'] = 'Согласие администратора';
$string['settings_adminconsent_btn'] = 'Предоставить согласие администратора';
$string['settings_adminconsent_details'] = 'Чтобы разрешить доступ к некоторым необходимым разрешениям, необходимо предоставить согласие администратора. Нажмите эту кнопку, затем войдите в систему с учетной записью администратора Microsoft Entra ID, чтобы дать согласие. Это необходимо делать всякий раз, когда вы меняете разрешения «Администратор» в Entra ID.';
$string['settings_adminconsent_error_53003'] = 'При предоставлении согласия администратора возникла известная проблема, которая применима только к типу поставщика удостоверений Microsoft Identity Platform (v2.0). В результате интеграция не может автоматически определить параметры клиента Microsoft Entra и URL-адреса OneDrive для бизнеса, указанные ниже. Задайте эти значения вручную.';
$string['settings_check_moodle_settings'] = 'Проверить настройки Moodle';
$string['settings_cohortsync'] = 'Синхронизация глобальных групп';
$string['settings_cohortsync_details'] = 'Просмотр и управление синхронизацией между глобальными группами Moodle и группами Microsoft.';
$string['settings_cohortsync_linktext'] = 'Управление синхронизацией глобальных групп';
$string['settings_cohortsync_title'] = 'Синхронизация глобальных групп';
$string['settings_course_request_enrolment_member_role'] = 'Роль участника команды';
$string['settings_course_request_enrolment_member_role_desc'] = 'Роль, которая будет назначена участникам команды после одобрения заявки на курс.';
$string['settings_course_request_enrolment_owner_role'] = 'Роль владельца команды';
$string['settings_course_request_enrolment_owner_role_desc'] = 'Роль, которая будет назначена владельцу команды после одобрения запроса на курс.';
$string['settings_course_reset_teams'] = 'Действия с командой/группой при очистке курса';
$string['settings_course_reset_teams_details'] = 'Действия, которые должны быть выполнены в связанной с курсом Команде или Группе при очистке курса.';
$string['settings_course_reset_teams_option_archive_only'] = 'Отключить курс только от команды или группы.<br />Существующая команда или группа, подключенные к курсу, будут переименованы в соответствии с настройками. Если команда подключена, она будет заархивирована. Новая команда или группа не будут созданы.';
$string['settings_course_reset_teams_option_do_nothing'] = 'Ничего не делать. <br/> Команда или группа все еще связаны с курсом. Отчисление пользователя приведет к его удалению из Команды или Группы.';
$string['settings_course_reset_teams_option_force_archive'] = 'Отключить Команду или Группу от курса и создать новую. <br/> Существующая Команда или Группа, связанная с курсом, будет переименована в соответствии с настройками. Если команда связана с курсом, то она будет заархивирована. Будет создана новая команда или группа, которая подключится к курсу.';
$string['settings_course_reset_teams_option_per_course'] = 'Разрешить настройки для курса. <br/> Для этого необходимо добавить в курс блок Microsoft. Пользователи с правом очистки курса в блоке могут выбрать, что делать при очистке курса.';
$string['settings_coursesync'] = 'Синхронизация курса';
$string['settings_coursesync_courses_per_task'] = 'Курсы для синхронизации при каждом выполнении задачи';
$string['settings_coursesync_courses_per_task_details'] = 'Количество курсов, в которых синхронизация команды/группы должна выполняться при каждом запуске задачи.';
$string['settings_coursesync_delete_group_on_course_deletion'] = 'Удалить группы Microsoft 365 при удалении связанного курса Moodle';
$string['settings_coursesync_delete_group_on_course_deletion_details'] = 'Если этот параметр включен, Moodle попытается удалить группу Microsoft 365 (и связанную с ней команду) при удалении связанного курса из Moodle. Обратите внимание, что это не относится к курсам, созданным с помощью синхронизации SDS.';
$string['settings_coursesync_delete_group_on_course_sync_disabled'] = 'Удалить группы Microsoft 365, если синхронизация курсов отключена';
$string['settings_coursesync_delete_group_on_course_sync_disabled_details'] = 'Если этот параметр включен, Moodle попытается удалить подключенную группу Microsoft 365 (и связанную с ней команду), когда синхронизация курсов для курса Moodle отключена.';
$string['settings_coursesync_details'] = 'При включенном параметре будут создаваться и поддерживаться команды для курсов на сайте Moodle (по умолчанию: отключено). При каждом запуске cron будут создаваться все необходимые команды, а все текущие зарегистрированные пользователи будут добавляться в качестве владельцев или участников команд, в зависимости от проверки прав. После этого членство в командах будет сохраняться при записи или отчислении пользователей на курсы Moodle.';
$string['settings_coursesync_enrolment_member_role'] = 'Роль участника команды';
$string['settings_coursesync_enrolment_member_role_desc'] = 'Роль, которая будет назначена учасникам команды во время синхронизации.';
$string['settings_coursesync_enrolment_owner_role'] = 'Роль владельца команды';
$string['settings_coursesync_enrolment_owner_role_desc'] = 'Роль, которая будет назначена владельцу команды во время синхронизации.';
$string['settings_coursesync_sync_both'] = 'Обновить Teams и Moodle';
$string['settings_coursesync_sync_direction'] = 'Поведение пользователя при синхронизации курса';
$string['settings_coursesync_sync_direction_details'] = 'Выберите направление, в котором вы хотите синхронизировать пользователей между Moodle и Microsoft Teams.';
$string['settings_coursesync_sync_moodle_to_teams'] = 'От Moodle к Teams';
$string['settings_coursesync_sync_teams_to_moodle'] = 'От Teams к Moodle';
$string['settings_customtheme'] = 'Пользовательская тема (Продвинутая)';
$string['settings_customtheme_desc'] = 'Рекомендуемая тема - «boost_o365teams». Однако вы можете выбрать другую имеющуюся настраиваемую тему, адаптированную для использования на вкладке «Команды». <br/>
Обратите внимание, что настраиваемая тема, установленная на уровне курса или категории, будет иметь приоритет над этими настройками. То есть курс будет  по умолчанию использовать тему курса или категории в приложении Moodle в Teams. Это можно изменить, обновив $CFG->themeorder в config.php на «array (\'session\', \'course\', \'category\', \'user\', \'cohort\', \'site\');».';
$string['settings_debugmode'] = 'Запись сообщений об отладке';
$string['settings_debugmode_details'] = 'Если этот параметр включен, в журнал Moodle будет заноситься информация, которая может помочь в выявлении проблем. <a href="{$a}">Просмотр сообщений журнала.</a>';
$string['settings_detectoidc'] = 'Учетные данные приложения';
$string['settings_detectoidc_credsinvalid'] = 'Учетные данные не были установлены или являются неполными.';
$string['settings_detectoidc_credsinvalid_link'] = 'Установить учетные данные';
$string['settings_detectoidc_credsvalid'] = 'Учетные данные были установлены.';
$string['settings_detectoidc_credsvalid_link'] = 'Изменить';
$string['settings_detectoidc_details'] = 'Moodle нужны учетные данные, чтобы идентифицировать себя при взаимодействии с Microsoft 365. Они устанавливаются в плагине аутентификации OpenID Connect.';
$string['settings_detectperms'] = 'Разрешения приложений';
$string['settings_detectperms_details'] = 'Для использования функций плагина необходимо настроить правильные разрешения в приложении Microsoft Entra ID.';
$string['settings_detectperms_errorfix'] = 'Произошла ошибка при попытке исправить разрешения. Исправьте вручную в Microsoft Entra ID.';
$string['settings_detectperms_fixperms'] = 'Исправить разрешения';
$string['settings_detectperms_invalid'] = 'Проверить разрешения в Microsoft Entra ID';
$string['settings_detectperms_missing'] = 'Отсутствуют:';
$string['settings_detectperms_nocreds'] = 'Учетные данные приложения должны быть установлены в первую очередь. См. настройки  выше.';
$string['settings_detectperms_nounified'] = 'Microsoft Graph API отсутствует, некоторые новые функции могут не работать.';
$string['settings_detectperms_unifiednomissing'] = 'Все унифицированные разрешения присутствуют.';
$string['settings_detectperms_update'] = 'Обновить';
$string['settings_detectperms_valid'] = 'Разрешения были установлены.';
$string['settings_download_teams_tab_app_manifest'] = 'Загрузить файл манифеста';
$string['settings_download_teams_tab_app_manifest_reminder'] = 'Сохраните все ваши изменения перед загрузкой манифеста.';
$string['settings_entratenant'] = 'Клиент Microsoft Entra';
$string['settings_entratenant_details'] = 'Используется для идентификации вашей организации в Microsoft. Например: "contoso.onmicrosoft.com".<br/>
Чтобы найти это значение вручную:
<ul>
<li>Перейдите на <a href="http://portal.azure.com" target="_blank">портал Azure</a>.</li>
<li>Войдите, используя учётную запись администратора.</li>
<li>В строке поиска введите «Microsoft Entra ID» и перейдите на страницу «Microsoft Entra ID».</li>
<li>Используйте значение из поля <b>Основной домен</b> в разделе «Основная информация».</li>
</ul>';
$string['settings_fieldmap'] = 'Сопоставление полей пользователя';
$string['settings_fieldmap_details'] = 'Доступно в <a href="{$a}">плагине аутентификации OpenID Connect</a>.';
$string['settings_group_mail_alias_course'] = 'Атрибут курса в псевдониме почты группы';
$string['settings_group_mail_alias_prefix'] = 'Префикс псевдонима почты группы';
$string['settings_group_mail_alias_suffix'] = 'Суффикс псевдонима почты группы';
$string['settings_header_advanced'] = 'Расширенные настройки';
$string['settings_header_moodle_app'] = 'Приложение Teams Moodle';
$string['settings_header_sds'] = 'Синхронизация SDS';
$string['settings_header_setup'] = 'Установка';
$string['settings_header_syncsettings'] = 'Настройки синхронизации';
$string['settings_header_teams'] = 'Настройки Teams';
$string['settings_header_tools'] = 'Инструменты';
$string['settings_healthcheck'] = 'Проверка работоспособности';
$string['settings_healthcheck_details'] = 'Если что-то не работает должным образом, проверка работоспособности обычно позволяет определить проблему и предложить решения.';
$string['settings_healthcheck_linktext'] = 'Выполнить проверку работоспособности';
$string['settings_main_name_option_full_name'] = 'Полное название';
$string['settings_main_name_option_id'] = 'Созданный Moodle ID';
$string['settings_main_name_option_id_number'] = 'Номер ID';
$string['settings_main_name_option_short_name'] = 'Краткое название';
$string['settings_maintenance'] = 'Обслуживание';
$string['settings_maintenance_details'] = 'Различные задачи обслуживания доступны для решения некоторых распространенных проблем.';
$string['settings_maintenance_linktext'] = 'Просмотр инструментов обслуживания';
$string['settings_moodle_app_id'] = 'ID приложения Moodle';
$string['settings_moodle_app_id_desc'] = 'Идентификатор загруженного приложения Moodle в каталогах приложений Teams. <br/>
Если настроено, Moodle попытается создать вкладку Moodle со ссылкой на курс Moodle в канале «Общие» созданной (связанной) команды.';
$string['settings_moodle_app_id_desc_auto_id'] = '<br/>
Автоматически определяемое значение: «<span class="local_o365_settings_moodle_app_id">{$a}</span>».';
$string['settings_moodlesettingssetup'] = 'Настройка Moodle';
$string['settings_moodlesettingssetup_details'] = 'Это обеспечит следующее:
<ul class = "local_o365_settings_teams_horizontal_spacer">
<li> Open ID включен. </li>
<li> Встраивание фрейма включено. </li>
<li> Веб-службы включены. </li>
<li> Rest-протокол включен. </li>
<li> Веб-службы Microsoft 365 включены. </li>
<li> У аутентифицированного пользователя есть разрешение на создание токена веб-службы. </li>
<li> У аутентифицированного пользователя есть разрешение на использование Rest-протокола. </li>
</ul>';
$string['settings_moodlesetup_checking'] = 'Проверяется ...';
$string['settings_notice_cookiesecurealreadyenabled'] = 'Только безопасные файлы cookie уже включены';
$string['settings_notice_cookiesecureenabled'] = 'Только безопасные файлы cookie включены';
$string['settings_notice_createtokenallowed'] = 'Разрешение на создание токена веб-службы предоставлено';
$string['settings_notice_createtokenalreadyallowed'] = 'Разрешение на создание токена веб-службы уже предоставлено';
$string['settings_notice_createtokennotallowed'] = 'Возникла проблема с предоставлением разрешения на создание токена веб-службы.';
$string['settings_notice_o365servicealreadyenabled'] = 'Веб-службы O365 уже были включены';
$string['settings_notice_o365serviceenabled'] = 'Веб-службы O365 успешно включены';
$string['settings_notice_oidcalreadyenabled'] = 'Open ID Connect уже был включен';
$string['settings_notice_oidcenabled'] = 'Open ID Connect успешно включен';
$string['settings_notice_oidcnotenabled'] = 'Open ID Connect не может быть включен';
$string['settings_notice_restalreadyenabled'] = 'Протокол REST уже был включен';
$string['settings_notice_restenabled'] = 'Протокол REST успешно включен';
$string['settings_notice_restnotenabled'] = 'Протокол REST не может быть включен';
$string['settings_notice_restusageallowed'] = 'Разрешение на использование протокола REST предоставлено';
$string['settings_notice_restusagealreadyallowed'] = 'Разрешение на использование протокола REST уже было предоставлено';
$string['settings_notice_restusagenotallowed'] = 'Не удалось разрешить использование протокола REST.';
$string['settings_notice_webservicesframealreadyenabled'] = 'Веб-службы уже были включены, также разрешено и встраивание фреймов.';
$string['settings_notice_webservicesframeenabled'] = 'Веб-сервисы успешно включены, теперь также разрешено встраивание фреймов';
$string['settings_o365china'] = 'Microsoft 365 для Китая.';
$string['settings_o365china_details'] = 'Отметьте, если вы используете Microsoft 365 для Китая.';
$string['settings_odburl'] = 'URL OneDrive для бизнеса';
$string['settings_odburl_details'] = 'URL-адрес, используемый для доступа к OneDrive для бизнеса. Обычно это может быть определено вашим клиентом Microsoft Entra. Например, если ваш клиент Microsoft Entra - «contoso.onmicrosoft.com», это, скорее всего, «contoso-my.sharepoint.com». Введите только доменное имя, НЕ включайте http:// или https://';
$string['settings_odburl_error'] = 'Не удалось определить URL-адрес вашего OneDrive для бизнеса.';
$string['settings_odburl_error_graph'] = 'Не удалось определить URL-адрес OneDrive для бизнеса, введите его вручную. Обычно он совпадает с URL-адресом, который вы используете для доступа к OneDrive.';
$string['settings_options_usersync'] = 'Синхронизация пользователя';
$string['settings_options_usersync_desc'] = 'Следующие параметры управляют синхронизацией пользователей между Microsoft 365 и Moodle.';
$string['settings_photoexpire'] = 'Время обновления фото пользователя';
$string['settings_photoexpire_details'] = 'Количество часов ожидания перед обновлением фотографий профиля. Более продолжительное время поможет увеличить производительность.';
$string['settings_publish_manifest_instruction'] = '<a href="https://docs.microsoft.com/en-us/microsoftteams/platform/concepts/apps/apps-upload" target="_blank">Щелкните здесь, </a>чтобы узнать, как опубликовать загруженный файл манифеста приложения Moodle для всех пользователей в Teams.';
$string['settings_reset_group_name_prefix'] = 'Префикс сброса имени группы';
$string['settings_reset_group_name_prefix_details'] = 'При очистке курса, связанного с группой, к имени существующей группы будет добавлен этот префикс.';
$string['settings_reset_team_name_prefix'] = 'Префикс сброса имени команды';
$string['settings_reset_team_name_prefix_details'] = 'При очистке курса, связанного с командой, к имени существующей связанной команды будет добавлен этот префикс.';
$string['settings_sds_coursecreation'] = 'Синхронизация курса';
$string['settings_sds_coursecreation_desc'] = 'Эти параметры управляют созданием курса в Moodle на основе классов SDS.';
$string['settings_sds_coursecreation_enabled'] = 'Синхронизированные школы';
$string['settings_sds_coursecreation_enabled_desc'] = 'Создать курсы для этих школ.';
$string['settings_sds_courseenrolsync'] = 'Синхронизация зачисления на курс';
$string['settings_sds_courseenrolsync_desc'] = 'Эти параметры управляют синхронизацией зачисления на курсы из классов SDS.';
$string['settings_sds_enrolment_enabled'] = 'Синхронизировать зачисления пользователей из классов SDS с курсами Moodle при создании курса';
$string['settings_sds_enrolment_enabled_desc'] = 'Зачислите учителей и студентов классов SDS на курсы Moodle, созданные на основе классов SDS, при первоначальной синхронизации класса SDS.<br />
Обратите внимание, что это одноразовая синхронизация при первом создании курса Moodle из класса SDS. Для постоянной синхронизации изменений ролей учителей/участников классов SDS с курсами Moodle необходимо включить параметр <b>Расширенная синхронизация зачислений с классами SDS</b>, а также настроить параметры <b>Роль учителя</b> и <b>Роль участника</b>.';
$string['settings_sds_enrolment_student_role'] = 'Роль участника';
$string['settings_sds_enrolment_student_role_desc'] = 'Если параметр «Зачислить пользователей» включен, то студенты класса SDS будут зачислены с этой ролью на связанный курс Moodle.';
$string['settings_sds_enrolment_teacher_role'] = 'Роль учителя';
$string['settings_sds_enrolment_teacher_role_desc'] = 'Если параметр «Зачислить пользователей» включен, то учителя класса SDS будут зачислены с этой ролью на связанный курс Moodle.';
$string['settings_sds_get_schools_error'] = '<div class="alert alert-info error">Не удалось получить данные о школах SDS. Убедитесь, что у приложения Microsoft Entra ID есть требуемое разрешение.</div>';
$string['settings_sds_intro_desc'] = 'Microsoft School Data Sync («SDS») упрощает управление классами в Microsoft 365, считывая данные о расписании занятий из внешней SIS и создавая классы и группы в Microsoft 365. <a href="https://sds.microsoft.com/" target="_blank">Подробнее</a><br/>
<br/>
Функция синхронизации SDS позволяет синхронизировать данные о расписании занятий из SDS с Moodle, включая курсы, преподавателей и учащихся.<br/>
<br/>
Чтобы использовать функцию синхронизации SDS, убедитесь, что у приложения Microsoft Entra ID, используемого для интеграции, есть разрешения <b>EduRoster.Read.All</b> и <b>Member.Read.Hidden</b> для приложения Microsoft Graph, которые не добавляются автоматически при настройке по умолчанию. Для них также необходимо согласие администратора.<br/>
<br/>
По умолчанию процесс синхронизации SDS выполняется ежедневно в cron Moodle в 3:00 по серверному времени. Чтобы изменить это расписание, посетите <a href="{$a}">страницу управления запланированными задачами.</a><br/><br/>';
$string['settings_sds_intro_previewwarning'] = '<div class="alert"><b>Это функция предварительного просмотра </b> <br /> Функции предварительного просмотра могут работать не так, как задумано, или могут работать без предупреждения. Пожалуйста, используйте с осторожностью.</div>';
$string['settings_sds_noschools'] = '<div class="alert alert-info">У вас нет доступных школ в синхронизации SDS.</div>';
$string['settings_sds_profilesync'] = 'Синхронизация данных профиля из школы';
$string['settings_sds_profilesync_desc'] = 'Выберите школу SDS, из которой Moodle синхронизирует данные профиля SDS.';
$string['settings_sds_profilesync_disabled'] = 'Отключено';
$string['settings_sds_profilesync_header'] = 'Синхронизация профиля пользователя';
$string['settings_sds_profilesync_header_desc'] = 'Каждая школа SDS может хранить профили пользователей для учителей и участников школы. Это поле зависит от конкретной школы, то есть разные школы могут иметь разные значения в одном и том же поле для одного и того же пользователя.<br/>
Если в этом разделе выбрана школа, поля профиля пользователя SDS можно настроить в сопоставлении полей пользователя.
<ul>
<li>Обратите внимание: синхронизация полей SDS происходит только при запуске запланированной задачи «Синхронизация с SDS» и не происходит при запуске запланированной задачи «Синхронизация пользователей с Microsoft Entra ID» или при входе пользователя в систему.</li>
<li>Обратите внимание, что в API Microsoft Graph, используемом этой функцией, есть известная проблема, из-за которой некоторые поля профилей студентов и учителей не возвращаются, поэтому их невозможно синхронизировать даже при настройке.</li>
</ul>';
$string['settings_sds_school_disabled_action'] = 'Действие при отключенной синхронизации со школой';
$string['settings_sds_school_disabled_action_desc'] = 'Действие для уже связанных курсов Moodle при отключении синхронизации в школе SDS.';
$string['settings_sds_school_disabled_action_disconnect'] = 'Отвязать курс Moodle от команды';
$string['settings_sds_school_disabled_action_keep_connected'] = 'Поддерживать связь курса Moodle с командой';
$string['settings_sds_sync_enrolment_to_sds'] = 'Расширенная синхронизация зачислений с классами SDS';
$string['settings_sds_sync_enrolment_to_sds_desc'] = 'Для работы этого параметра необходимо включить параметр <b>Зачисление пользователей</b>.<br />
Если этот параметр включен, синхронизация классов SDS выполнит следующие действия:
<ul>
<li>Изменения в статусе владельца/участника класса SDS будут синхронизированы с курсом Moodle и отражены в изменениях ролей пользователей Moodle.</li>
<li>Изменения в зачислении пользователей, такие как зачисление на курс Moodle или отчисление из него. сделанные в курсе Moodle, связанном с классами SDS, будут синхронизированы с классами SDS. Статус  пользователя (владелец/участник) будет зависеть от возможностей «local/o365:teamowner» и «local/o365:teammember» в контексте курса.</li>
</ul>';
$string['settings_sds_teams_enabled'] = 'В классах SDS уже есть команды?';
$string['settings_sds_teams_enabled_desc'] = 'Установите этот флажок, если в классах SDS уже есть команды, созданные с помощью конфигурации SDS. Если этот флажок установлен, Moodle не будет пытаться создавать команды из курсов Moodle, созданных на основе классов SDS, во избежание конфликтов.';
$string['settings_secthead_advanced'] = 'Расширенные настройки';
$string['settings_secthead_advanced_desc'] = 'Эти настройки управляют другими функциями пакета плагинов. Будьте осторожны! Это может привести к непредвиденным последствиям.';
$string['settings_secthead_cohortsync'] = 'Синхронизация глобальных групп';
$string['settings_secthead_cohortsync_desc'] = 'Эта функция обеспечивает синхронизацию между группами Microsoft и глобальными группами Moodle.';
$string['settings_secthead_course_request'] = 'Запрос курса';
$string['settings_secthead_course_request_desc'] = 'Настройки для сопоставления ролей в функции запроса курса от команд.';
$string['settings_secthead_coursesync'] = 'Синхронизация курса';
$string['settings_secthead_coursesync_desc'] = 'Следующие параметры управляют синхронизацией курсов между Moodle и Microsoft Teams.';
$string['settings_secthead_team_group_name'] = 'Названия команд/групп';
$string['settings_secthead_team_group_name_desc'] = 'Если курс настроен на синхронизацию, название команды и группы будут сформированы следующим образом.<br/>
<ul>
<li>Можно задать псевдоним электронной почты группы и отображаемые имена команд.</li>
<li> Сначала будет создана группа Microsoft 365 с использованием настроенных имени пользователя и отображаемого имени команды, а затем на основе этой группы будет создана команда.</li>
<li>Если используется политика присвоения имен Microsoft Entra ID для групп Microsoft 365, группы не будут создаваться, если отображаемое имя, созданное в соответствии с конфигурацией, не соответствует политикам.</li>
<li>Изменения, внесенные здесь, повлияют только на создаваемые будущие группы, но не на существующие.</li>
<li>Из псевдонима электронной почты группы будут удалены все пробелы.</li>
<li>В псевдониме электронной почты группы допускаются только заглавные и строчные буквы, цифры, «-» и «_».</li>
<li>Псевдоним электронной почты группы, включая префикс и суффикс, не может превышать 64 символов.</li>
<li>Псевдоним электронной почты группы должен быть уникальным. В противном случае к нему будет добавлено случайное четырёхзначное число для обеспечения уникальности.</li>
</ul>';
$string['settings_serviceresourceabstract_detect'] = 'Определить';
$string['settings_serviceresourceabstract_detecting'] = 'Определяется...';
$string['settings_serviceresourceabstract_empty'] = 'Пожалуйста, введите значение или нажмите «Определить», чтобы попытаться определить правильное значение.';
$string['settings_serviceresourceabstract_error'] = 'Произошла ошибка при определении настройки. Пожалуйста, установите вручную.';
$string['settings_serviceresourceabstract_invalid'] = 'Это значение не может использоваться.';
$string['settings_serviceresourceabstract_nocreds'] = 'Сначала установите учетные данные приложения.';
$string['settings_serviceresourceabstract_valid'] = '{$a} можно использовать.';
$string['settings_set_moodle_app_id_instruction'] = 'Чтобы найти ID приложения Moodle вручную, выполните следующие действия:
<ol>
<li> Загрузите загруженный файл манифеста в каталог приложений Teams вашего клиента. </li>
<li> Найдите приложение в каталоге приложений Teams. </li>
<li> Щелкните значок параметра приложения, расположенный в правом верхнем углу изображения приложения. </li>
<li> Нажмите "Копировать ссылку". </li>
<li> В текстовом редакторе вставьте скопированный контент. Он должен содержать URL-адрес, например https://teams.microsoft.com/l/app/00112233-4455-6677-8899-aabbccddeeff. </li>
</ol>
Последняя часть URL-адреса, то есть <span class="local_o365_settings_moodle_app_id">00112233-4455-6677-8899-aabbccddeeff</span> является идентификатором приложения.';
$string['settings_setup_step1'] = 'Шаг 1/2: Регистрация Moodle в Microsoft Entra ID';
$string['settings_setup_step1_continue'] = '<b>После ввода идентификатора приложения и ключа для продолжения нажмите внизу страницы «Сохранить изменения». </b><br /><br /><br /><br /><br />';
$string['settings_setup_step1_credentials_end'] = 'Если вам не удается настроить приложение Microsoft Entra ID через PowerShell, <a href="{$a}" target="_blank">нажмите здесь</a> для получения инструкций по ручной настройке.';
$string['settings_setup_step1_desc'] = 'Зарегистрируйте новое приложение Microsoft Entra ID для интеграции с Moodle с помощью PowerShell:

<a href="{$a}/local/o365/scripts/Moodle-EntraID-PowerShell.zip" class="btn btn-primary" target="_blank">Скачать скрипт PowerShell</a>

<p style="margin-top:10px"><a href="{$a}/local/o365/scripts/README.md" target="_blank">Нажмите здесь</a>, чтобы прочитать инструкции по запуску скрипта.</p>
<p>При появлении запроса используйте следующую ссылку в качестве URL-адреса Moodle:</p><h5><b>{$a}</b></h5>';
$string['settings_setup_step1_existing_settings'] = '<h5>Существующие настройки</h5>';
$string['settings_setup_step1clientcreds'] = '<br />После успешного выполнения скрипта скопируйте  ID приложения и ключ, возвращенные скриптом, на <a href="{$a}">страницу конфигурации плагина аутентификации OpenID Connect</a>';
$string['settings_setup_step2'] = 'Шаг 2/2: согласие администратора и дополнительная информация';
$string['settings_setup_step2_desc'] = 'Этот последний шаг позволяет вам дать согласие администратора на использование некоторых разрешений Microsoft Entra ID и собирает некоторую дополнительную информацию о вашей среде Microsoft 365.<br /><br />';
$string['settings_setup_step3'] = 'Проверка настройки';
$string['settings_setup_step3_desc'] = 'Настройка завершена. Нажмите ниже кнопку «Обновить», чтобы проверить настройки.';
$string['settings_support_user_identifier_change'] = 'Поддержка привязки учетной записи Microsoft к имени пользователя и изменению значения заявки

Поддержка изменения значения заявки на привязку имени пользователя к учетной записи Microsoft';
$string['settings_support_user_identifier_change_desc'] = 'Если эта опция включена, Moodle попытается отреагировать на изменение значения привязки имени пользователя (обычно это UPN) учётной записи Microsoft, связанной с учётной записью Moodle.</br>
<table class="flexible table table-striped table-hover generaltable generalbox table-sm">
<tr>
<th>ID обращения</th>
<th>Пользователь со старым именем уже вошел в систему? (токен создан)<br/>
<span class="support_user_identifier_change_case_detail">Сохранен ли токен в таблице auth_oidc_token</span>
</th>
<th>Первое действие после переименования UPN<br/>
<span class="support_user_identifier_change_case_detail">Выполнение задачи «Вход» или «Синхронизация пользователей»</span>
</th>
<th>Имеет потенциально дублирующееся имя пользователя<br/>
<span class="support_user_identifier_change_case_detail">Приведет ли переименование к конфликтам имён пользователей в Moodle</span>
</th>
<th>Ожидаемое поведение</th>
</tr>
<tr>
<td>1</td>
<td>Да</td>
<td>Вход</td>
<td>Нет</td>
<td>
<ol>
<li>Переименовать пользователя Moodle.</li>
<li>auth_oidc_token обновлён с новыми значениями для полей "username" и "oidcusername".</li>
<li>Поле "o365name" записи подключения пользователя local_o365_objects обновлено.</li>
</ol>
</td>
</tr>
<tr>
<td>2</td>
<td>Да</td>
<td>Синхронизация пользователей</td>
<td>Нет</td>
<td>
<ol>
<li>Переименовать пользователя Moodle.</li>
<li>Запись подключения пользователя local_o365_objects обновлена.</li>
<li>auth_oidc_token обновлён.</li>
</ol>
</td>
</tr>
<tr>
<td>3</td>
<td>Нет</td>
<td>Вход</td>
<td>Нет</td>
<td>
<ol>
<li>Переименовать пользователя Moodle.</li>
<li>Запись подключения пользователя local_o365_objects обновлена.</li>
<li>Токен auth_oidc_token обновлен.</li>
</ol>
</td>
</tr>
<tr>
<td>4</td>
<td>Нет</td>
<td>Синхронизация пользователей</td>
<td>Нет</td>
<td>
<ol>
<li>Переименовать пользователя Moodle.</li>
<li>Запись подключения пользователя local_o365_objects обновлена.</li>
</ol>
</td>
</tr>
<tr>
<td>5</td>
<td>Да</td>
<td>Вход</td>
<td>Да</td>
<td>
<ol>
<li>Выдать исключение и не переименовывать пользователя Moodle.</li>
</ol>
</td>
</tr>
<tr>
<td>6</td>
<td>Да</td>
<td>Синхронизация пользователей</td>
<td>Да</td>
<td>
<ol>
<li>Вывести сообщение об ошибке переименования, сообщающее о неудачной попытке синхронизации пользователей.</li>
</ol>
</td>
</tr>
<tr>
<td>7</td>
<td>Нет</td>
<td>Вход</td>
<td>Да</td>
<td>
<ol>
<li>Выдать исключение и не переименовывать пользователя Moodle пользователь.</li>
</ol>
</td>
</tr>
<tr>
<td>8</td>
<td>Нет</td>
<td>Отменить синхронизацию</td>
<td>Да</td>
<td>
<ol>
<li>Отобразить сообщение об ошибке переименования при выполнении задачи синхронизации пользователей.</li>
</ol>
</td>
</tr>
</table>
Обратите внимание, что существует известная проблема: если
<ol>
<li>Moodle и Microsoft 365 подключены с использованием метода подключения «Microsoft Identity Platform (v2.0)», и
<li>в Microsoft Entra разрешено использование «Электронной почты в качестве альтернативного имени входа», и</li>
<li>эта опция включена, и</li>
<li>логин и адрес электронной почты учетной записи Microsoft отличаются, и</li>
<li>пользователь Microsoft входит в систему, используя адрес электронной почты, а не логин, тогда</li>
</ol>
плагин auth_oidc будет воспринимать адрес электронной почты как логин учётной записи Microsoft и обновлять логин Moodle.';
$string['settings_suspend_delete_running_time'] = 'Выполнять приостановку/удаление пользователя';
$string['settings_suspend_delete_running_time_desc'] = 'Если эта опция включена, приостановка/удаление пользователей при синхронизации будет запускаться один раз в день, во время, настроенное по умолчанию в часовом поясе Moodle.';
$string['settings_switchauthminupnsplit0'] = 'Минимальная длина не совпадающего имени пользователя Microsoft 365 для изменения';
$string['settings_switchauthminupnsplit0_details'] = 'При включенной настройке «Переключить сопоставленных пользователей на аутентификацию Microsoft 365» этот параметр устанавливает минимальную длину для имен пользователей без клиента (часть @example.onmicrosoft.com), которые будут переключены. Это помогает избежать переключения учетных записей с общими именами, такими как «admin», которые не обязательно совпадают в Moodle и Microsoft Entra ID.';
$string['settings_team_name_course'] = 'Атрибут курса в названии команды';
$string['settings_team_name_prefix'] = 'Префикс названия команд';
$string['settings_team_name_sample'] = 'Предположим, что у курса есть:
<ul>
<li>Полное имя: <b>Образец курса</b>
<li>Краткое имя: <b>образец 15</b></li>
<li>Созданный Moodle ID: <b>2</b></li>
<li>Номер ID: <b>ID образца 15</b></li>
</ul>
В ваших текущих настройках для создания команды будет использоваться имя "<b>{$a}</b>". Нажмите ниже кнопку «Сохранить изменения», чтобы увидеть, как ваши настройки изменят его.';
$string['settings_team_name_suffix'] = 'Суффикс названия команд';
$string['settings_team_name_sync'] = 'Обновить названия команд при обновлении курса';
$string['settings_team_name_sync_desc'] = 'Если этот параметр включен, то при обновлении курса Moodle название команды будет обновлено в соответствии с последними настройками названия команд.';
$string['settings_teamconnections'] = 'Связи команд';
$string['settings_teamconnections_details'] = 'Просматривайте и управляйте связями между курсом Moodle и Microsoft Teams.';
$string['settings_teamconnections_linktext'] = 'Управление связями команд';
$string['settings_teams_banner'] = 'Приложение Moodle для <a href="https://aka.ms/MoodleLearnTeams" target="_blank">Microsoft Teams</a> позволяет вам легко получать доступ к курсам Moodle из Teams для совместной работы.';
$string['settings_teams_moodle_app_external_id'] = 'ID приложения Microsoft для приложения Moodle Teams';
$string['settings_teams_moodle_app_external_id_desc'] = 'Следует установить значение по умолчанию, если вашему клиенту не требуется несколько приложений Moodle Teams для подключения к разным сайтам Moodle.';
$string['settings_teams_moodle_app_short_name'] = 'Название приложения Teams';
$string['settings_teams_moodle_app_short_name_desc'] = 'Можно установить значение по умолчанию, если вашему клиенту не требуется несколько приложений Moodle Teams для подключения к разным сайтам Moodle.';
$string['settings_teams_moodle_setup_heading'] = '<h4 class="local_o365_settings_teams_h4_spacer"> Настройте свое приложение Moodle для Microsoft Teams </h4>';
$string['settings_teams_moodle_tab_name'] = 'Название вкладки Moodle в Teams';
$string['settings_teams_moodle_tab_name_desc'] = 'Это название вкладки Moodle в Teams.';
$string['settings_tools_tenants'] = 'Клиенты';
$string['settings_tools_tenants_details'] = 'Управление доступом к дополнительным клиентам Microsoft Entra.';
$string['settings_tools_tenants_linktext'] = 'Настройки дополнительных клиентов';
$string['settings_userconnections'] = 'Связи пользователей';
$string['settings_userconnections_details'] = 'Просмотр и управление связями между пользователями Moodle и Microsoft 365.';
$string['settings_userconnections_linktext'] = 'Управление связями пользователей';
$string['settings_usermatch'] = 'Сопоставление пользователя';
$string['settings_usermatch_details'] = 'Этот инструмент позволяет сопоставлять пользователей Moodle с пользователями Microsoft 365 на основе загруженного файла с данными пользователей.';
$string['settings_usersync'] = 'Синхронизация пользователей из Microsoft Entra ID';
$string['settings_usersync_appassign'] = 'Назначить пользователей приложению при синхронизации';
$string['settings_usersync_create'] = 'Создать учетные записи в Moodle для пользователей Microsoft Entra ID';
$string['settings_usersync_delete'] = 'Удалять ранее синхронизированные учетные записи в Moodle при их удалении из Microsoft Entra ID (требуется опция «Приостановить» выше)';
$string['settings_usersync_details'] = 'При включенном параметре Moodle синхронизирует пользователей из Microsoft Entra ID в соответствии с указанными выше настройками.<br /><br /><b>Примечание:</b> Задание синхронизации запускается в cron Moodle и синхронизирует 1000 пользователей одновременно. По умолчанию оно запускается один раз в день в 1:00 по местному времени вашего сервера. Для ускорения синхронизации больших групп пользователей можно увеличить частоту выполнения задачи <b>Синхронизация пользователей из Microsoft Entra ID</b> на странице управления <a href="{$a}">запланированными задачами.</a><br /><br />';
$string['settings_usersync_disabledsync'] = 'Синхронизировать состояние отключения';
$string['settings_usersync_emailsync'] = 'При синхронизации сопоставлять логины Microsoft Entra ID с адресами электронной почты Moodle, а не с логинами пользователей Moodle.';
$string['settings_usersync_general'] = 'Общая синхронизация пользователей';
$string['settings_usersync_guestsync'] = 'Синхронизация пользователей-гостей';
$string['settings_usersync_match'] = 'Сопоставить имеющихся пользователей Moodle с одноименными учетными записями в Microsoft Entra ID';
$string['settings_usersync_matchswitchauth'] = 'Переключить сопоставленных пользователей на аутентификацию Microsoft 365 (OpenID Connect)';
$string['settings_usersync_nodelta'] = 'Выполнять полную синхронизацию при каждом запуске';
$string['settings_usersync_photos'] = 'Синхронизация фотографий профиля Microsoft 365 с Moodle.';
$string['settings_usersync_photosync'] = 'Синхронизировать фотографии профиля Microsoft 365 с Moodle с помощью задания cron';
$string['settings_usersync_photosynconlogin'] = 'Синхронизировать фотографии профиля Microsoft 365 с Moodle при входе в систему';
$string['settings_usersync_reenable'] = 'Повторное включение приостановленных учетных записей пользователей в Microsoft Entra ID';
$string['settings_usersync_suspend'] = 'Приостановить ранее синхронизированные учетные записи в Moodle при их удалении из Microsoft Entra ID';
$string['settings_usersync_suspension'] = 'Приостановка учетной записи Moodle';
$string['settings_usersync_timezone'] = 'Синхронизация часового пояса Outlook с Moodle';
$string['settings_usersync_update'] = 'Обновить в Moodle учетные записи для пользователей Microsoft Entra ID';
$string['settings_usersynccreationrestriction'] = 'Ограничения создания пользователя';
$string['settings_usersynccreationrestriction_details'] = 'При включенном параметре во время синхронизации пользователей будут созданы только пользователи Microsoft Entra ID, соответствующие условию.';
$string['settings_usersynccreationrestriction_fieldval'] = 'Значение поля';
$string['settings_usersynccreationrestriction_o365group'] = 'Членство в группе Microsoft 365 (название группы)';
$string['settings_usersynccreationrestriction_o365groupid'] = 'Членство в группе Microsoft 365 (ID объекта группы)';
$string['settings_usersynccreationrestriction_regex'] = 'Значение является регулярным выражением';
$string['settings_verifysetup'] = 'Проверка настройки';
$string['settings_verifysetup_appdatadesc'] = 'Проверка правильности настроек параметров в приложении Entra ID.';
$string['settings_verifysetup_appdataheader'] = 'Регистрация приложения Microsoft Entra ID';
$string['settings_verifysetup_appdatareplyurlcorrect'] = 'Правильный URL-адрес ответа';
$string['settings_verifysetup_appdatareplyurlgeneralerror'] = 'Не удалось проверить URL-адрес ответа.';
$string['settings_verifysetup_appdatareplyurlincorrect'] = 'Неверный URL-адрес ответа';
$string['settings_verifysetup_appdatasignonurlcorrect'] = 'URL-адрес входа правильный.';
$string['settings_verifysetup_appdatasignonurlgeneralerror'] = 'Не удалось проверить URL-адрес входа.';
$string['settings_verifysetup_appdatasignonurlincorrect'] = 'Неверный URL-адрес для входа';
$string['settings_verifysetup_apppermscorrect'] = 'Разрешения приложения верны.';
$string['settings_verifysetup_checking'] = 'Проверка...';
$string['settings_verifysetup_correctval'] = 'Правильное значение:';
$string['settings_verifysetup_details'] = 'Этот инструмент выполняет проверку с помощью Microsoft Entra ID, чтобы убедиться, что все настроено правильно. <br /><b>Примечание:</b> Для отображения изменений в приложении Microsoft Entra ID может потребоваться некоторое время. Если вы внесли изменения в приложение Microsoft Entra ID и не видите их отражения здесь, подождите немного и повторите попытку.';
$string['settings_verifysetup_detectedval'] = 'Обнаруженное значение:';
$string['settings_verifysetup_errorcheck'] = 'Произошла ошибка при попытке проверки настройки.';
$string['settings_verifysetup_missingappperms'] = 'Отсутствуют разрешения приложения:';
$string['settings_verifysetup_missingperms'] = 'Отсутствуют делегированные разрешения:';
$string['settings_verifysetup_noinfo'] = 'У нас пока нет информации о настройке вашего приложения Microsoft Entra ID. Для проверки нажмите кнопку «Обновить».';
$string['settings_verifysetup_permscorrect'] = 'Делегированные разрешения верны.';
$string['settings_verifysetup_strtenanterror'] = 'Используйте кнопку «Определить», чтобы настроить клиента Microsoft Entra перед обновлением настроек приложения Microsoft Entra ID.';
$string['settings_verifysetup_strunifiedpermerror'] = 'Произошла ошибка проверки разрешений Microsoft Graph API.';
$string['settings_verifysetup_unifiedactive'] = 'API Microsoft Graph активен.';
$string['settings_verifysetup_unifieddesc'] = 'API Microsoft Graph обеспечивает взаимодействие Moodle и Microsoft 365.';
$string['settings_verifysetup_unifiederror'] = 'Произошла ошибка при проверке поддержки Microsoft Graph API.';
$string['settings_verifysetup_unifiedheader'] = 'Microsoft Graph API';
$string['settings_verifysetup_unifiedmissing'] = 'API Microsoft Graph в этом приложении не найден.';
$string['settings_verifysetup_update'] = 'Обновление';
$string['spsite_group_contributors_desc'] = 'Все пользователи, которые имеют доступ к управлению файлами для курса {$a}';
$string['sso_login'] = 'Вход в Microsoft 365';
$string['tab_name'] = 'Название вкладки';
$string['task_calendarsyncin'] = 'Синхронизировать события Office 365 в Moodle';
$string['task_checkinvalidconfiglog'] = 'Проверка и удаление некорректных записей в журнале конфигурации.';
$string['task_coursemembershipsync'] = 'Синхронизировать владельцев и участников Microsoft Teams с курсами Moodle';
$string['task_coursesync'] = 'Синхронизировать курсы Moodle с Microsoft Teams';
$string['task_notifysecretexpiry'] = 'Уведомить администратора сайта об истечении срока действия секретного ключа приложения Microsoft Entra ID';
$string['task_processmatchqueue'] = 'Процесс очередности сопоставлений';
$string['task_processmatchqueue_err_museralreadymatched'] = 'Пользователь Moodle уже сопоставлен пользователю Microsoft 365.';
$string['task_processmatchqueue_err_museralreadyo365'] = 'Пользователь Moodle уже связан с Microsoft 365.';
$string['task_processmatchqueue_err_nomuser'] = 'Пользователь Moodle с таким логином не найден.';
$string['task_processmatchqueue_err_noo365user'] = 'Пользователь Microsoft 365 с таким логином не найден.';
$string['task_processmatchqueue_err_o365useralreadyconnected'] = 'Пользователь Microsoft 365 уже связан с пользователем Moodle.';
$string['task_processmatchqueue_err_o365useralreadymatched'] = 'Пользователь Microsoft 365 уже сопоставлен с пользователем Moodle.';
$string['task_sds_sync'] = 'Синхронизация с SDS';
$string['task_syncusers'] = 'Синхронизация пользователей с Microsoft Entra ID';
$string['teams_no_course'] = 'Нет курсов для добавления';
$string['ucp_calsync_availcal'] = 'Доступные календари Moodle';
$string['ucp_calsync_desc'] = 'Выбранные календари будут синхронизироваться из Moodle с вашим календарем Outlook.';
$string['ucp_calsync_title'] = 'Настройки синхронизации календаря Outlook';
$string['ucp_connection_desc'] = 'Здесь вы можете настроить способ подключения к Microsoft 365. Для использования функций Microsoft 365 необходимо подключиться к учетной записи Microsoft 365.  Ниже указано, как это может быть достигнуто.';
$string['ucp_connection_disconnected'] = 'Вы не подключены к Microsoft 365.';
$string['ucp_connection_entraidlogin'] = 'Использовать свои учетные данные Microsoft 365 для входа в Moodle<br />';
$string['ucp_connection_entraidlogin_active'] = 'Вы используете учетную запись Microsoft 365 «{$a}» для входа в Moodle.';
$string['ucp_connection_entraidlogin_desc_authcode'] = 'Вместо ввода логина и пароля на странице входа в Moodle вы увидите раздел «Войти, используя свою учётную запись на {$a}». Щёлкнув по ссылке, вы будете перенаправлены в Microsoft 365 для входа. После успешного входа в Microsoft 365 вы вернётесь в Moodle, войдя в свою учётную запись.';
$string['ucp_connection_entraidlogin_desc_rocreds'] = 'На странице входа в Moodle вместо логина и пароля Moodle вам нужно будет ввести логин и пароль Microsoft 365.';
$string['ucp_connection_entraidlogin_start'] = 'Начать использовать Microsoft 365 для входа в Moodle.';
$string['ucp_connection_entraidlogin_stop'] = 'Прекратить использовать Microsoft 365 для входа в Moodle.';
$string['ucp_connection_linked'] = 'Свяжите свои учетные записи Moodle и Microsoft 365';
$string['ucp_connection_linked_active'] = 'Вы связаны с учетной записью Microsoft 365 «{$a}».';
$string['ucp_connection_linked_desc'] = 'Связывание учетных записей Moodle и Microsoft 365 позволит вам использовать в Moodle функции Microsoft 365 без изменения способа входа в Moodle. <br /> Нажав ниже на ссылку, вы отправитесь в Microsoft 365 для одноразового входа, после чего вернетесь сюда. Вы сможете использовать все функции Microsoft 365, не внося никаких других изменений в свою учетную запись Moodle - вы будете входить в Moodle как всегда.';
$string['ucp_connection_linked_migrate'] = 'Переключиться на связанный аккаунт';
$string['ucp_connection_linked_start'] = 'Связать свою учетную запись Moodle с учетной записью Microsoft 365.';
$string['ucp_connection_linked_stop'] = 'Отменить связь своей учетной записи Moodle с учетной записью Microsoft 365.';
$string['ucp_connection_options'] = 'Параметры подключения:';
$string['ucp_connection_start'] = 'Подключиться к Microsoft 365';
$string['ucp_connection_status'] = 'Подключение к Microsoft 365:';
$string['ucp_connection_stop'] = 'Отключиться от Microsoft 365';
$string['ucp_connectionstatus'] = 'Состояние подключения';
$string['ucp_features'] = 'Возможности Microsoft 365';
$string['ucp_features_intro'] = 'Ниже приведен список возможностей Microsoft 365, которые можно использовать для улучшения Moodle.';
$string['ucp_features_intro_notconnected'] = 'Некоторые из них могут быть недоступны, пока вы не подключитесь к Microsoft 365.';
$string['ucp_general_intro'] = 'Здесь вы можете управлять своим подключением к Microsoft 365.';
$string['ucp_general_intro_notconnected_nopermissions'] = 'Чтобы подключиться к Microsoft 365, вам необходимо связаться с администратором сайта.';
$string['ucp_index_calendar_desc'] = 'Здесь вы можете настроить синхронизацию между календарями Moodle и Outlook. Вы можете экспортировать события календаря Moodle в Outlook и переносить события Outlook в Moodle.';
$string['ucp_index_calendar_title'] = 'Настройки синхронизации календаря Outlook';
$string['ucp_index_connection_desc'] = 'Настроить подключение к Microsoft 365.';
$string['ucp_index_connection_title'] = 'Настройки подключения к Microsoft 365';
$string['ucp_index_connectionstatus_connect'] = 'Нажмите здесь для подключения.';
$string['ucp_index_connectionstatus_connected'] = 'В настоящее время вы подключены к Microsoft 365';
$string['ucp_index_connectionstatus_disconnect'] = 'Отключить';
$string['ucp_index_connectionstatus_login'] = 'Нажмите здесь для входа.';
$string['ucp_index_connectionstatus_manage'] = 'Управление подключением';
$string['ucp_index_connectionstatus_matched'] = 'Вы сопоставлены с пользователем Microsoft 365 <small> "{$a}" </small>. Чтобы завершить подключение, перейдите по ссылке ниже и войдите в Microsoft 365.';
$string['ucp_index_connectionstatus_notconnected'] = 'В данный момент вы не подключены к Microsoft 365';
$string['ucp_index_connectionstatus_reconnect'] = 'Обновить подключение';
$string['ucp_index_connectionstatus_title'] = 'Состояние подключения';
$string['ucp_index_connectionstatus_usinglinked'] = 'Вы связаны с учетной записью Microsoft 365.';
$string['ucp_index_connectionstatus_usinglogin'] = 'В настоящее время вы используете Microsoft 365 для входа в Moodle.';
$string['ucp_index_entraidlogin_active'] = 'В настоящее время вы используете Microsoft 365 для входа в Moodle.';
$string['ucp_index_entraidlogin_desc'] = 'Вы можете использовать свои учетные данные Microsoft 365 для входа в Moodle.';
$string['ucp_index_entraidlogin_inactive'] = 'В настоящее время вы не используете Microsoft 365 для входа в Moodle.';
$string['ucp_index_entraidlogin_title'] = 'Вход в Microsoft 365';
$string['ucp_index_onenote_desc'] = 'Интеграция OneNote позволяет использовать OneNote Microsoft 365 в Moodle. Вы можете выполнять задания с помощью OneNote и легко делать заметки для своих курсов.';
$string['ucp_index_onenote_title'] = 'OneNote';
$string['ucp_notconnected'] = 'Перед посещением подключитесь к Microsoft 365.';
$string['ucp_o365accountconnected'] = 'Эта учетная запись Microsoft 365 уже связана с другой учетной записью Moodle.';
$string['ucp_options'] = 'Опции';
$string['ucp_status_disabled'] = 'Нет подключено';
$string['ucp_status_enabled'] = 'Активно';
$string['ucp_syncdir_both'] = 'Обновить Outlook и Moodle';
$string['ucp_syncdir_in'] = 'Из Outlook в Moodle';
$string['ucp_syncdir_out'] = 'Из Moodle в Outlook';
$string['ucp_syncdir_title'] = 'Поведение синхронизации:';
$string['ucp_syncwith_title'] = 'Название календаря Outlook для синхронизации:';
$string['ucp_title'] = 'Microsoft 365 / Панель управления Moodle';
$string['webservices_error_assignnotfound'] = 'Запись о задании не найдена.';
$string['webservices_error_couldnotsavegrade'] = 'Не удалось сохранить оценку.';
$string['webservices_error_invalidassignment'] = 'Задание с полученным ID нельзя использовать с этой функцией веб-сервисов.';
$string['webservices_error_modulenotfound'] = 'Модуль с полученным ID  не найден';
$string['webservices_error_sectionnotfound'] = 'Раздел курса не может быть найден.';
