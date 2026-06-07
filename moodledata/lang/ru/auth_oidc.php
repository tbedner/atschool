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
 * Strings for component 'auth_oidc', language 'ru', version '4.4'.
 *
 * @package     auth_oidc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['application_not_changed'] = 'Настройки приложения OpenID Connect не были изменены.';
$string['application_updated'] = 'Обновлены настройки приложения OpenID Connect.';
$string['application_updated_microsoft'] = 'Параметры приложения OpenID Connect были обновлены.<br/>
<span class="warning" style="color: red;">Администратору Azure потребуется <b>предоставить согласие администратора</b> и повторно <b>проверить настройку</b> на странице конфигурации интеграции с Microsoft 365, если были обновлены параметры «Тип поставщика удостоверений (IdP)» или «Метод аутентификации клиента».</span>';
$string['auth_method_certificate'] = 'Сертификат';
$string['auth_method_secret'] = 'Секретный ключ';
$string['auth_oidcdescription'] = 'Плагин аутентификации OpenID Connect обеспечивает функциональность единого входа с использованием настраиваемого IdP.';
$string['authendpoint'] = 'Конечная точка авторизации';
$string['authendpoint_help'] = 'URI конечной точки авторизации для использования от вашего поставщика удостоверений.<br/>
Обратите внимание, что если сайт должен быть настроен таким образом, чтобы разрешать доступ пользователям из других клиентов, конечная точка авторизации конкретного клиента не может быть использована.';
$string['authentication_and_endpoints_saved'] = 'Обновлены настройки аутентификации и конечной точки.';
$string['binding_username_auto'] = 'Выбирать автоматически';
$string['binding_username_claim_description'] = '<p class="warning_header">Это расширенная функция!</p>
<p>Эта страница позволяет администраторам сайта выбрать токен заявления, который будет использоваться для привязки к логину в Moodle.</p>
<p class="warning">Будьте очень осторожны при изменении этого параметра. Выполните следующие шаги, чтобы изменить этот параметр на сайтах Moodle с имеющимися пользователями, использующими метод аутентификации OpenID Connect. Невыполнение этого требования может привести к выходу пользователей из системы и/или созданию дублирующих учетных записей.</p>
<ol>
<li>Убедитесь, что у вас есть учетная запись администратора сайта, созданная вручную, т.е. вы не используете метод аутентификации OpenID Connect.</li>
<li>Запланируйте достаточное время простоя и переведите сайт Moodle в режим обслуживания.</li>
<li>Создайте резервную копию базы данных Moodle, в частности таблиц <span class="code">user</span> и <span class="code">auth_oidc_tokens</span>. Если установлен плагин local_o365, также создайте резервную копию таблицы <span class="code">local_o365_objects</span>.</li>
<li>Используйте <a href="{$a}" target="_blank">инструмент обновления привязки имени пользователя</a>, чтобы обновить имя пользователя Moodle, токен auth_oidc и другие записи о связях существующего пользователя, чтобы они соответствовали значению заявления, которое необходимо изменить.</li>
<li>Обновите параметр привязки токена логина на этой странице.</li>
<li>Очистите кэши.</li>
<li>Переведите сайт Moodle из режима обслуживания.</li>
</ol>
<p>В большинстве случаев для этого параметра следует установить значение по умолчанию "Выбирать автоматически". Это означает, что плагин попытается определить используемый токен в зависимости от типа поставщика. Неправильная настройка или неожиданное изменение этого параметра приведет к сбою единого входа.</p>';
$string['binding_username_claim_description_existing_claims'] = 'В существующих токенах идентификаторов пользователей присутствуют следующие заявления. Выбор заявлений, отсутствующих в списке, может привести к сбою системы единого входа (SSO).<br/>
<div class="existing_claims">{$a}</div>';
$string['binding_username_claim_heading'] = 'Заявление привязки логина';
$string['binding_username_claim_help_ms_no_user_sync'] = 'Варианты для поставщиков удостоверений ( IdPs), не относящихся к Microsoft, включают:
<ul>
<li><b>Выбирать автоматически</b>: Использует текущую логику, определяет токен по типу поставщика удостоверений и возвращается к <b>sub</b>, если заявление не найдено.</li>
<li><b>Предпочтителен логин пользователя</b>: Используется по умолчанию для типа поставщика удостоверений Платформы идентификации Microsoft  (версия 2.0). <span class="not_support_user_sync">Синхронизация пользователей не поддерживается.</span></li>
<li><b>email</b>: резервный вариант для Платформы идентификации Microsoft (версия 2.0).</li>
<li><b>upn</b>: По умолчанию для Microsoft Entra ID (версия 1.0) и других типов поставщиков удостоверений.</li>
<li><b>Уникальное_имя</b>: Резервный вариант для Microsoft Entra ID (версия 1.0) и других типов IDP. <span class="not_support_user_sync">Не поддерживает синхронизацию с пользователем.</span></li>
<li><b>oid</b>: Резервный вариант при отсутствии других заявлений. Присутствует только у поставщиков удостоверений Microsoft.</li>
<li><b>sub</b>: Резервный вариант при отсутствии других заявлений. <span class="not_support_user_sync">Не поддерживает синхронизацию пользователей.</span></li>
<li><b>samaccountname</b>: Пользовательское заявление.</li>
<li><b>Пользовательское</b>: Позволяет администратору сайта ввести пользовательское значение. <span class="not_support_user_sync">Не поддерживает синхронизацию пользователей.</span></li>
</ul>
Обратите внимание, что некоторые параметры не поддерживают синхронизацию пользователей.';
$string['binding_username_claim_help_ms_with_user_sync'] = 'Варианты для поставщиков удостоверений Microsoft с включенной функцией синхронизации пользователей включают:
<ul>
<li><b>Выбирать автоматически</b>: использовать текущую логику, определяя токен по типу поставщика удостоверений и возвращаясь к <b>sub</b>, если заявление не найдено.</li>
<li><b>email</b>: Резервный вариант для Платформы идентификации Microsoft (версия 2.0).</li>
<li><b>upn</b>: Используется по умолчанию для Microsoft Entra ID (версия 1.0) и поставщиков удостоверений других типов.</li>
<li><b>oid</b>: Резервный вариант при отсутствии других заявлений. Присутствует только у поставщиков удостоверений Microsoft.</li>
<li><b>samaccountname</b>: Пользовательское заявление.</li>
</ul>';
$string['binding_username_claim_help_non_ms'] = 'Параметры для поставщиков удостоверений Microsoft без включенной функции синхронизации пользователей включают варианты:
<ul>
<li><b>Выбирать автоматически</b>: использовать текущую логику, определяя токен по типу поставщика удостоверений и возвращаясь к <b>sub</b>, если заявление не найдено.</li>
<li><b>preferred_username</b></li>
<li><b>email</b></li>
<li><b>unique_name</b></li>
<li><b>sub</b></li>
<li><b>samaccountname</b></li>
<li><b>custom</b>: настраиваемое пользователем заявление.</li>
</ul>';
$string['binding_username_claim_updated'] = 'Заявление привязки логина обновлено.';
$string['binding_username_custom'] = 'Пользовательское';
$string['bindingusernameclaim'] = 'Заявление привязки логина';
$string['cert_source_text'] = 'Обычный текст';
$string['cfg_authenticationlink_desc'] = '<a href="{$a}" target="_blank">Ссылка на поставщика удостоверений и конфигурацию аутентификации</a>';
$string['cfg_autoappend_desc'] = 'Автоматически добавлять эту строку при входе в систему с использованием метода аутентификации «Учетные данные пароля владельца ресурса». Это полезно, если при идентификации требуется общий домен, но вы не хотите, чтобы пользователи вводили его при входе в систему. Например, если полный логин пользователя OpenID Connect - «james@example.com» и вы здесь введете «@example.com», то пользователь должен будет только ввести «james» в качестве своего логина.
<br /><b>Примечание:</b> В случае, когда существуют конфликтующие логины - уже есть пользователь Moodle с тем же логином, то используется приоритет подключаемого модуля аутентификации для определения того, какой пользователь выиграл.';
$string['cfg_autoappend_key'] = 'Автоматически добавлять';
$string['cfg_cleanupoidctokens_desc'] = 'Если у пользователей возникают проблемы со входом в систему с использованием своей учетной записи Microsoft 365, попробуйте очистить токены OpenID Connect. Это удаляет случайные и неполные токены, которые могут вызывать ошибки. ВНИМАНИЕ: это может прервать вход в систему, поэтому лучше делать это во время простоя.';
$string['cfg_cleanupoidctokens_key'] = 'Очистка токенов OpenID Connect';
$string['cfg_customicon_desc'] = 'Если вы хотите использовать свой собственный значок, загрузите его здесь. Это отменяет любую иконку, выбранную выше. <br /> <br /> <b> Примечания по использованию пользовательских значков: </b> <ul> <li> Размер этого изображения <b> не будет </b> изменяться на странице входа, поэтому мы рекомендуем загрузить изображение размером не более 35x35 пикселей. </li> <li> Если вы загрузили пользовательский значок и хотите вернуться к одному из стандартных значков, щелкните пользовательский значок в поле выше, затем нажмите «Удалить», затем нажмите «ОК», затем нажмите «Сохранить изменения» в нижней части этой формы. Выбранный значок появится на странице входа в Moodle. </li> </ul>';
$string['cfg_customicon_key'] = 'Свой значок';
$string['cfg_debugmode_desc'] = 'При включенном параметре в журнал Moodle будет заноситься информация, которая может помочь в выявлении проблем.';
$string['cfg_debugmode_key'] = 'Запись отладочных сообщений';
$string['cfg_domainhint_desc'] = 'При использовании метода аутентификации «Код авторизации» передайте это значение в качестве параметра «domain_hint». «domain_hint» используется некоторыми провайдерами OpenID Connect, чтобы облегчить пользователям процесс входа в систему. Узнайте у своего провайдера, используют ли они этот параметр.';
$string['cfg_domainhint_key'] = 'Подсказка домена (Domain Hint)';
$string['cfg_err_invalidauthendpoint'] = 'Неверная конечная точка авторизации';
$string['cfg_err_invalidclientid'] = 'Неверный ID клиента';
$string['cfg_err_invalidclientsecret'] = 'Неверный ключ клиента';
$string['cfg_err_invalidtokenendpoint'] = 'Неверная конечная точка авторизации';
$string['cfg_field_mapping_desc'] = 'Данные профиля пользователя Moodle можно сопоставить с данными провайдера идентификации (IdP) OpenID Connect.<br/>
<ul>
<li>Некоторые базовые поля профиля доступны из заявлений токенов доступа и заявлений токенов ID всех типов поставщиков удостоверений.</li>
<li>Если используется тип поставщиков удостоверений Microsoft  (версий 1.0 или 2.0), дополнительные данные профиля могут быть доступны через вызовы API Graph, если установить и настроить <a href="https://moodle.org/plugins/local_o365">плагин интеграции Microsoft 365 (local_o365)</a>..</li>
<li>Если в подключаемом модуле local_o365 включена функция синхронизации профиля SDS, то определенные поля профиля можно синхронизировать из SDS в Moodle при выполнении запланированной задачи "Синхронизация с SDS". <br/>При этом синхронизации не будет ни при выполнении запланированной задачи "Синхронизация пользователей с Microsoft Entra ID", ни при входе пользователя в систему.</li>
</ul>

Заявления, доступные с помощью идентификатора и токенов доступа, различаются в зависимости от типа поставщиков удостоверений, но большинство из них допускают определенный уровень настройки заявлений. Ссылки на документацию по поставщикам удостоверений Microsoft приведены ниже:
<ul>
<li><a target="_blank" href="https://learn.microsoft.com/en-us/entra/identity-platform/access-token-claims-reference">Заявления на токены доступа</a></li>
<li><a target="_blank" href="https://learn.microsoft.com/en-us/entra/identity-platform/id-token-claims-reference">Заявления на токены идентификаторов</a></li>
<li><a target="_blank" href="https://learn.microsoft.com/en-us/entra/identity-platform/optional-claims-reference">Необязательная конфигурация заявления</a>: Примечание: «Email» — необязательное заявление у типа поставщика удостоверений Microsoft Entra ID (версия 1.0).</li>
</ul>';
$string['cfg_forceredirect_desc'] = 'При включенном параметре страница входа в систему будет пропущена и произойдет перенаправление на страницу OpenID Connect. Можно обойти с помощью параметра URL  ?noredirect=1';
$string['cfg_forceredirect_key'] = 'Принудительно перенаправлять';
$string['cfg_frontchannellogouturl_desc'] = 'Это URL-адрес, который должен быть активирован вашим поставщиком удостоверений при попытке выхода пользователей из Moodle.<br/>
Для поставщиков Microsoft Entra ID/Платформа идентификации Microsoft этот параметр называется «URL-адрес выхода из основного канала» и настраивается в приложении Azure.';
$string['cfg_frontchannellogouturl_key'] = 'URL-адрес выхода из основного канала';
$string['cfg_icon_desc'] = 'Значок, отображаемый рядом с именем провайдера на странице входа.';
$string['cfg_icon_key'] = 'Значок';
$string['cfg_iconalt_check'] = 'Значок галочки';
$string['cfg_iconalt_go'] = 'Зеленый круг';
$string['cfg_iconalt_group'] = 'Значок группы';
$string['cfg_iconalt_group2'] = 'Альтернативный значок группы';
$string['cfg_iconalt_key'] = 'Значок ключа';
$string['cfg_iconalt_lock'] = 'Значок замка';
$string['cfg_iconalt_locked'] = 'Значок закрытого замка';
$string['cfg_iconalt_mnet'] = 'Значок MNET';
$string['cfg_iconalt_o365'] = 'Значок Microsoft 365';
$string['cfg_iconalt_plus'] = 'Значок плюс';
$string['cfg_iconalt_rightarrow'] = 'Значок стрелки вправо';
$string['cfg_iconalt_stop'] = 'Красный круг';
$string['cfg_iconalt_user'] = 'Значок пользователя';
$string['cfg_iconalt_user2'] = 'Альтернативный значок пользователя';
$string['cfg_iconalt_userlock'] = 'Значок пользователя с замком';
$string['cfg_loginflow_authcode'] = 'Код авторизации (рекомендуется)';
$string['cfg_loginflow_authcode_desc'] = 'Используя этот метод, пользователь щелкает на названии провайдера идентификации (см. выше «Название провайдера») на странице входа в Moodle и перенаправляется к провайдеру для входа. После успешного входа пользователь перенаправляется обратно в Moodle, где вход в Moodle происходит автоматически. Это стандартный и наиболее безопасный способ входа.';
$string['cfg_loginflow_key'] = 'Метод аутентификации';
$string['cfg_loginflow_rocreds'] = 'Предоставление учетных данных пароля владельца ресурса';
$string['cfg_loginflow_rocreds_desc'] = 'Используя этот метод, пользователь вводит свои логин и пароль в форму входа в Moodle, как при ручном входе. Это авторизует пользователя у провайдера идентификации, но не создает сеанс на сайте провайдера. Например, если вы используете  Microsoft 365 с OpenID Connect, то пользователь будет входить в Moodle, но не через веб-приложения  Microsoft 365. Рекомендуется использовать запрос авторизации, если вы хотите, чтобы пользователи входили как в Moodle, так и в провайдера идентификации. Обратите внимание, что не все провайдеры идентификации поддерживают этот метод. Эту опцию следует использовать только в том случае, если другие типы прав доступа недоступны.';
$string['cfg_logoutendpoint_desc'] = 'Используемый URI конечной точки выхода из системы от вашего провайдера идентификации.';
$string['cfg_logoutendpoint_key'] = 'Конечная точка выхода';
$string['cfg_opname_desc'] = 'Этот параметр определяет тип учетных данных, которые пользователь должен использовать для входа в систему. Данные используются пользователем во всех частях этого плагина для идентификации своим провайдером.';
$string['cfg_opname_key'] = 'Название провайдера';
$string['cfg_redirecturi_desc'] = 'Это URI для регистрации в качестве «URI перенаправления». Ваш провайдер идентификации OpenID Connect должен запросить его при регистрации Moodle в качестве клиента. <br /> <b> ПРИМЕЧАНИЕ: </b> Вы должны ввести эти данные своего провайдера OpenID Connect *точно так*, как это показано здесь. Любое несоответствие помешает входу в систему с использованием OpenID Connect.';
$string['cfg_redirecturi_key'] = 'URI перенаправления';
$string['cfg_signoffintegration_desc'] = 'При включенном параметре, когда пользователь Moodle, использующий метод проверки подлинности OIDC, выходит из Moodle, то Moodle также пытается выйти из системы Office 365.

Обратите внимание, что URL-адрес сайта Moodle ({$a}) необходимо добавить в качестве URI перенаправления в приложение Azure, созданное для интеграции Moodle с Office 365.';
$string['cfg_signoffintegration_key'] = 'Общий выход';
$string['cfg_silentloginmode_desc'] = 'При включенном параметре Moodle попытается использовать для входа пользователя активный сеанс пользователя, аутентифицированного в настроенной конечной точке авторизации.<br/>
Для использования этой функции требуются следующие настройки:
<ul>
<li><b>Включена опция принудительного входа пользователей</b> (forcelogin) в разделе <a href="{$a}" target="_blank">Политики сайта</a>.</li>
<li><b>Выше включена опция принудительного перенаправления</b> (auth_oidc/forceredirect).</li>
</ul>
Чтобы избежать попыток Moodle использовать для входа личные учётные записи или учётные записи других клиентов, рекомендуется использовать конечные точки, специфичные для клиента, а не общие, использующие пути «common», «organization» и т. п.<br/>
<br/>
Для поставщиков удостоверений Microsoft пользовательский интерфейс выглядит следующим образом:
<ul>
<li>Если активный сеанс пользователя не найден, отобразится страница входа Moodle.</li>
<li>Если найден только один активный сеанс пользователя, и у пользователя есть доступ к приложению Entra ID (т. е. пользователь принадлежит тому же клиенту или является гостем клиента), пользователь автоматически войдет в Moodle с помощью единого входа (SSO).</li>
<li>Если найден только один активный сеанс пользователя, но у пользователя нет доступа к приложению Entra ID (например, пользователь принадлежит другому клиенту или приложение требует назначения пользователя, а пользователь не назначен), будет отображена страница входа в Moodle.</li>
<li>Если есть несколько активных сеансов пользователей, имеющих доступ к приложению Entra ID, будет отображена страница, позволяющая пользователю выбрать учетную запись для входа.</li>
</ul>';
$string['cfg_silentloginmode_key'] = 'Режим «тихого» входа';
$string['cfg_userrestrictions_desc'] = 'Разрешить вход в систему только пользователям, которые отвечают определенным ограничениям. <br /> <b> Как использовать пользовательские ограничения: </b> <ul> <li> введите <a href="https://en.wikipedia.org/wiki/Regular_expression"> регулярное выражение </a > в шаблон, которое совпадает с логинами, которым вы хотите разрешить вход. </li> <li> Вводите один шаблон в строке </li> <li> Если вы введете несколько шаблонов, пользователь получит разрешение, если он соответствуют ЛЮБОМУ из шаблонов. </li> <li> Символ "/" следует экранировать с помощью "\\". </li> <li> Если вы  выше не введете какие-либо ограничения, все пользователи, которые могут войти в систему поставщика OpenID Connect, будут приняты Moodle. </li> <li> Любой пользователь, который не соответствует ни одному из введенных шаблонов, не сможет войти в систему с помощью OpenID Connect. </li> </ul>';
$string['cfg_userrestrictions_key'] = 'Ограничения пользователя';
$string['cfg_userrestrictionscasesensitive_desc'] = 'Этот параметр определяет, используется ли "/i" в регулярном выражении при сопоставлении пользовательских ограничений.<br/>Если он включен, все проверки пользовательских ограничений будут выполняться с учётом регистра. Обратите внимание, что если этот параметр отключен, любые шаблоны, связанные с регистром букв, будут игнорироваться.';
$string['cfg_userrestrictionscasesensitive_key'] = 'Ограничения для пользователей с учетом регистра';
$string['change_binding_username_claim_tool'] = 'Инструмент изменения заявления привязки логина';
$string['change_binding_username_claim_tool_description'] = '<p class="warning_header">Это расширенная функция!</p>
<p>Этот инструмент позволяет администраторам сайта массово обновлять следующие записи:</p>
<ul>
<li>Логины учётных записей Moodle,</li>
<li>Привязка логинов к сохранённым ID токенов  OpenID Connect,</li>
<li>Записи о связанных учётных записях Moodle и Microsoft.</li>
</ul>
<p>Это поле следует использовать только при изменении настроек <b>Заявление привязки логина</b>.</p>
<p class="warning">Будьте очень осторожны при использовании этой функции и следуйте инструкциям на <a href="{$a}" target="_blank">странице настройки заявления привязки логина</a>. Неправильное использование этого инструмента может привести к повреждению записей пользователей Moodle и/или сбою единого входа (SSO).</p>
<p>Инструмент принимает простой CSV-файл с двумя столбцами:</p>
<ul>
<li><b><span class="code">username</span></b>: Текущий логин учётной записи Moodle, которую необходимо обновить, или (если текущий пользователь сопоставлен вручную) это должно быть текущее значение заявления привязки логина.</li>
<li><b><span class="code">new_username</span></b>: Чувствительное к регистру значение заявления нового токена, которое будет использоваться в качестве заявления привязки логина. Если автоматически установлено соответствие пользователя и он использует тип аутентификации OpenID Connect, то в качестве логина Moodle будет использовать строчные буквы этого значения.</li>
</ul>
<p>В случае загрузки файла инструмент выполнит следующие действия:</p>
<ol>
<li>Будет искать существующего пользователя Moodle с заданным <span class="code">username</span> в качестве логина или адреса электронной почты при использовании метода аутентификации OpenID Connect. Если такой найден, изменит логин на <span class="code">new_username</span> строчными буквами.</li>
<li>Обновит запись токена OpenID Connect.
<ul>
<li>Если пользователь найден на шаге 1, описанном выше, найдет запись токена в таблице <span class="code">auth_oidc_token</span> для этого пользователя и обновит столбец <span class="code">username</span>, чтобы он был записан строчными буквами от <span class="code">new_username</span>, а столбец <span class="code">oidcusername</span> — таким же, как <span class="code">new_username</span>.</li>
<li>Если запись не найдена, система попытается найти запись в столбце <span class="code">auth_oidc_token</span> со значением <span class="code">oidcusername</span>, соответствующим старому <span class="code">username</span>, и обновит его на <span class="code">newusername</span>.</li>
</ul>
<li>Если установлен плагин <span class="code">local_365</span>, то будет обновлена запись о связывании пользователя.
<ul>
<li>Если пользователь найден на шаге 1, описанном выше, найдет запись о связывании этого пользователя в таблице <span class="code">local_o365_objects</span> и обновит столбец <span class="code">o365name</span>, чтобы он совпадал со значением <span class="code">new_username</span>.</li>
<li>Если на шаге 1 пользователь не найден, система попытается найти запись о пользователе в таблице <span class="code">local_o365_objects</span> с значением <span class="code">o365name</span>,соответствующим значению <span class="code">username</span> и обновит его значение на <span class="code">newusername</span>.</li>
</ul>
</ol>
<p>В приведенном ниже примере файла будет изменено требование привязки логина с <span class="code">upn</span> или <span class="code">email</span> на <span class="code">oid</span>.</p>';
$string['cleanup_oidc_tokens'] = 'Очистка токенов OpenID Connect';
$string['clientauthmethod'] = 'Метод аутентификации клиента';
$string['clientauthmethod_help'] = '<ul>
<li>Поставщики удостоверений всех типов могут использовать метод аутентификации «<b>Секретный ключ</b>».</li>
<li>Поставщик удостоверений типа <b>Платформа идентификации Microsoft (версия 2.0)</b> может дополнительно использовать метод аутентификации «Сертификат</b>».</li>
</ul>';
$string['clientcert'] = 'Открытый ключ сертификата клиента';
$string['clientcert_help'] = 'При использовании метода аутентификации <b>Сертификат</b> и источника сертификата <b>Обычный текст</b> - это открытый ключ или сертификат, используемый для аутентификации с помощью поставщика удостоверений.';
$string['clientcertfile'] = 'Имя файла открытого ключа сертификата клиента';
$string['clientcertfile_help'] = 'При использовании метода аутентификации <b>Сертификат</b> и источника сертификата <b>Имя файла</b> - это имя файла открытого ключа или сертификата, используемого для аутентификации с помощью поставщика удостоверений. Файл должен находиться в папке <b>microsoft_certs</b> в папке данных Moodle.';
$string['clientcertpassphrase'] = 'Пароль сертификата клиента';
$string['clientcertpassphrase_help'] = 'Если закрытый ключ сертификата клиента зашифрован, то это пароль для его расшифровки.';
$string['clientcertsource'] = 'Источник сертификата';
$string['clientcertsource_help'] = 'При использовании метода аутентификации <b>Сертификат</b> этот параметр используется для определения источника получения сертификата.
<ul>
<li><b>Обычный текст</b> - источник требует настройки содержимого файла сертификата/закрытого ключа в нижеследующих текстовых полях.</li>
<li><b>Имя файла</b> - источник требует, чтобы файлы сертификата/закрытого ключа находились в папке <b>microsoft_certs</b> в папке данных Moodle.</li>
</ul>';
$string['clientid'] = 'ID приложения';
$string['clientid_help'] = 'ID зарегистрированного приложения/клиента у поставщика удостоверений.';
$string['clientprivatekey'] = 'Закрытый ключ сертификата клиента';
$string['clientprivatekey_help'] = 'При использовании метода аутентификации <b>Сертификат</b> и источника сертификата <b>Обычный текст</b> - это закрытый ключ сертификата, используемого для аутентификации с помощью поставщика удостоверений.';
$string['clientprivatekeyfile'] = 'Имя файла закрытого ключа сертификата клиента';
$string['clientprivatekeyfile_help'] = 'При использовании метода аутентификации <b>Сертификат</b> и источника сертификата <b>Имя файла</b> - это имя файла закрытого ключа, используемого для аутентификации с помощью поставщика удостоверений. Файл должен находиться в папке <b>microsoft_certs</b> в папке данных Moodle.';
$string['clientsecret'] = 'Секретный ключ клиента';
$string['clientsecret_help'] = 'При использовании метода аутентификации <b>секретный ключ</b> это секретный ключ клиента у поставщика удостоверений. У некоторых поставщиков он может называться ключом.';
$string['csvdelimiter'] = 'Разделитель CSV';
$string['csvline'] = 'Строка CSV';
$string['customclaimname'] = 'Название пользовательского заявления';
$string['customclaimname_description'] = 'Это поле используется только в том случае, если для параметра <b>Заявление привязки логина</b> задано значение <b>Пользовательское</b>.';
$string['delete_token'] = 'Удалить токен';
$string['delete_token_and_reference'] = 'Удалить токен и ссылку';
$string['encoding'] = 'Кодировка';
$string['error_empty_client_cert'] = 'Открытый ключ сертификата клиента не может быть пустым при использовании метода аутентификации «Сертификат».';
$string['error_empty_client_cert_file'] = 'Файл открытого ключа сертификата клиента не может быть пустым при использовании метода аутентификации «Сертификат».';
$string['error_empty_client_private_key'] = 'Закрытый ключ сертификата клиента не может быть пустым при использовании метода аутентификации «Сертификат».';
$string['error_empty_client_private_key_file'] = 'Файл закрытого ключа сертификата клиента не может быть пустым при использовании метода аутентификации «Сертификат».';
$string['error_empty_client_secret'] = 'Секретный ключ клиента не может быть пустым при использовании метода аутентификации «Секретный ключ».';
$string['error_empty_oidcresource'] = 'Ресурс не может быть пустым при использовании Microsoft Entra ID (версия 1.0) или других типов поставщиков удостоверений.';
$string['error_empty_tenantname_or_guid'] = 'Имя клиента или GUID не может быть пустым при использовании метода аутентификации «Сертификат».';
$string['error_empty_tenantnameorguid'] = 'Имя клиента или GUID не могут быть пустыми при использовании поставщиков удостоверений Microsoft Entra ID (версия 1.0) или Платформа идентификации Microsoft (версия 2.0).';
$string['error_endpoint_mismatch_auth_endpoint'] = 'Настроенная конечная точка авторизации не соответствует заданному типу поставщика удостоверений.<br/>
<ul>
<li>При использовании поставщика удостоверений типа «Microsoft Entra ID (версия 1.0)» используйте конечную точку версии 1.0, например, https://login.microsoftonline.com/organizations/oauth2/authorize</li>
<li>При использовании поставщика удостоверений типа «Платформа идентификации Microsoft (версия 2.0)» используйте конечную точку версии 2.0, например, https://login.microsoftonline.com/organizations/oauth2/v2.0/authorize</li>
</ul>';
$string['error_endpoint_mismatch_token_endpoint'] = 'Настроенная конечная точка токена не соответствует заданному типу поставщика удостоверений.<br/>
<ul>
<li>При использовании типа поставщика удостоверений «Microsoft Entra ID (версия 1.0)» используйте конечную точку версии 1.0, например, https://login.microsoftonline.com/organizations/oauth2/token</li>
<li>При использовании типа поставщика удостоверений «Платформа идентификации Microsoft (версия 2.0)» используйте конечную точку версии 2.0, например, https://login.microsoftonline.com/organizations/oauth2/v2.0/token</li>
</ul>';
$string['error_invalid_client_authentication_method'] = 'Неверный метод аутентификации клиента';
$string['error_invalid_upload_file'] = 'Недопустимый загружаемый файл.';
$string['error_no_response_available'] = 'Ответов не поступало.';
$string['error_tenant_specific_endpoint_required'] = 'При использовании поставщика удостоверений типа «Платформа идентификации Microsoft (версия 2.0)» и метода аутентификации «Сертификат» требуется конечная точка для конкретного клиента (т. е. не общая, не для организаций/потребителей).';
$string['errorauthdisconnectemptypassword'] = 'Пароль не может быть пустым';
$string['errorauthdisconnectemptyusername'] = 'Логин не может быть пустым';
$string['errorauthdisconnectifmanual'] = 'Введите ниже учетные данные при использовании ручного метода входа в систему.';
$string['errorauthdisconnectinvalidmethod'] = 'Получен неверный метод входа';
$string['errorauthdisconnectnewmethod'] = 'Использовать метод входа';
$string['errorauthdisconnectusernameexists'] = 'Это имя пользователя уже занято. Пожалуйста, выберите другое.';
$string['errorauthgeneral'] = 'При входе в систему произошла ошибка. Обратитесь за помощью к администратору.';
$string['errorauthinvalididtoken'] = 'Получен неверный id_token.';
$string['errorauthloginfaileddupemail'] = 'Неверный вход в систему: существующая учетная запись в этом Moodle имеет тот же адрес электронной почты, что и учетная запись, которую вы пытаетесь создать, а параметр «Разрешить учетные записи с одинаковым адресом электронной почты» (allowaccountssameemail) отключен.';
$string['errorauthloginfailednouser'] = 'Неудачный вход: пользователь не найден в Moodle. Если на этом сайте включен параметр «authpreventaccountcreation», это может означать, что сначала вам понадобится администратор для создания учетной записи.';
$string['errorauthnoaccesstoken'] = 'Токен доступа не получен.';
$string['errorauthnoauthcode'] = 'Код авторизации не был получен с сервера идентификации. Журналы ошибок могут содержать больше информации.';
$string['errorauthnocredsandendpoints'] = 'Настройте учетные данные клиента и конечные точки OpenID Connect.';
$string['errorauthnohttpclient'] = 'Установите HTTP-клиента.';
$string['errorauthnoidtoken'] = 'ID токена OpenID Connect не получен.';
$string['errorauthunknownstate'] = 'Неизвестное состояние.';
$string['errorauthuseralreadyconnected'] = 'Вы уже подключены к другому пользователю OpenID Connect.';
$string['errorauthuserconnectedtodifferent'] = 'Аутентифицированный пользователь OpenID Connect уже подключен к пользователю Moodle.';
$string['errorbadloginflow'] = 'Указан неверный тип аутентификации. Примечание: Если вы получили это сообщение после недавней установки или обновления, очистите кэш Moodle.';
$string['errorinvalidcertificatesource'] = 'Неверный источник сертификата';
$string['errorinvalidredirect_message'] = 'Не существует URL, на который вы пытаетесь перенаправить,';
$string['errorjwtbadpayload'] = 'Не удалось прочитать полезные данные JWT.';
$string['errorjwtcouldnotreadheader'] = 'Не удалось прочитать заголовок JWT';
$string['errorjwtempty'] = 'Получен пустой или нестроковый JWT.';
$string['errorjwtinvalidheader'] = 'Неверный заголовок JWT';
$string['errorjwtmalformed'] = 'Получен неверный JWT.';
$string['errorjwtunsupportedalg'] = 'JWS Alg или JWE не поддерживаются';
$string['errorlogintoconnectedaccount'] = 'Этот пользователь Microsoft 365 подключен к учетной записи Moodle, но вход в систему OpenID Connect не включен для этой учетной записи Moodle.
Войдите в учетную запись Moodle, используя определенный метод аутентификации учетной записи, чтобы использовать функции Microsoft 365.';
$string['errornodisconnectionauthmethod'] = 'Невозможно отключиться, потому что нет включенного  плагина аутентификации, к которому можно было бы вернуться. (либо предыдущий метод входа пользователя, либо метод входа вручную).';
$string['erroroidccall'] = 'Ошибка в OpenID Connect. Проверьте журналы событий для получения дополнительной информации.';
$string['erroroidccall_message'] = 'Ошибка в OpenID Connect: {$a}';
$string['erroroidcclientinsecuretokenendpoint'] = 'Для этого токен конечной точки должен использовать SSL/TLS.';
$string['erroroidcclientinvalidendpoint'] = 'Получен неверный URI конечной точки.';
$string['erroroidcclientnoauthendpoint'] = 'Не установлена конечная точка авторизации. Пожалуйста, установите с $this->setendpoints';
$string['erroroidcclientnocreds'] = 'Установите учетные данные клиента с помощью setcreds';
$string['erroroidcclientnotokenendpoint'] = 'Не установлен токен конечной точки. Пожалуйста, установите с $this->setendpoints';
$string['erroroidcnotenabled'] = 'Плагин аутентификации OpenID Connect не включен.';
$string['errorrestricted'] = 'Этот сайт имеет ограничения для пользователей, которые могут входить в систему с помощью OpenID Connect. Эти ограничения в настоящее время не позволяют вам выполнить эту попытку входа в систему.';
$string['errorucpinvalidaction'] = 'Получено неверное действие.';
$string['errorusermatched'] = 'Учетная запись Microsoft 365 ""{$a->entraidupn}" уже сопоставлена с пользователем Moodle "{$a->username}". Чтобы завершить связывание, сначала войдите в систему как пользователь Moodle и следуйте инструкциям в блоке Microsoft.';
$string['erroruserwithusernamealreadyexists'] = 'Произошла ошибка при попытке переименовать вашу учётную запись Moodle. Пользователь Moodle с новым логином уже существует. Обратитесь к администратору сайта для решения этой проблемы.';
$string['event_debug'] = 'Сообщение об отладке';
$string['eventuserauthed'] = 'Пользователь авторизован с OpenID Connect';
$string['eventuserconnected'] = 'Пользователь подключен к OpenID Connect';
$string['eventusercreated'] = 'Пользователь создан с OpenID Connect';
$string['eventuserdisconnected'] = 'Пользователь отключен от OpenID Connect';
$string['eventuserloggedin'] = 'Пользователь вошел с OpenID Connect';
$string['eventuserrenameattempt'] = 'Плагин auth_oidc попытался переименовать пользователя';
$string['examplecsv'] = 'Пример загружаемого файла';
$string['heading_additional_options'] = 'Дополнительные параметры';
$string['heading_basic'] = 'Основные настройки';
$string['heading_debugging'] = 'Отладка';
$string['heading_display'] = 'Отображение';
$string['heading_sign_out'] = 'Интеграция с системой выхода';
$string['heading_user_restrictions'] = 'Ограничения для пользователей';
$string['idp_type_microsoft_entra_id'] = 'Microsoft Entra ID (версия 1.0)';
$string['idp_type_microsoft_identity_platform'] = 'Платформа идентификации Microsoft (версия 2.0)';
$string['idp_type_other'] = 'Другой';
$string['idptype'] = 'Тип поставщика удостоверений (IdP)';
$string['idptype_help'] = 'В настоящее время поддерживаются три типа поставщика удостоверений:
<ul>
<li><b>Microsoft Entra ID (версия 1.0)</b>: Microsoft Entra ID с конечными точками oauth2 версии 1.0, например, https://login.microsoftonline.com/organizations/oauth2/authorize.</li>
<li><b>Платформа идентификации Microsoft (версии 2.0)</b>: Microsoft Entra ID с конечными точками oath2 версии 2.0, например, https://login.microsoftonline.com/organizations/oauth2/v2.0/authorize.</li>
<li><b>Другой</b>: любой поставщик удостоверений, отличный от Microsoft.</li>
</ul>
Различия между параметрами <b>Microsoft Entra ID (версия 1.0)</b> и <b>Платформа идентификации Microsoft (версия 2.0)</b> можно найти по адресу <a href="https://docs.microsoft.com/en-us/azure/active-directory/azuread-dev/azure-ad-endpoint-comparison">https://docs.microsoft.com/en-us/azure/active-directory/azuread-dev/azure-ad-endpoint-comparison</a>.<br/>
Примечательно, что настроенное приложение может использовать <b>сертификат</b> помимо <b>секретного ключа</b> для аутентификации при использовании поставщика удостоверений <b>Платформа идентификации Microsoft (версия 2.0)</b>. <br/>
Конечные точки авторизации и токена должны быть настроены в соответствии с установленным типом поставщика удостоверений.';
$string['mismatched'] = 'Несоответствие';
$string['mismatched_details'] = 'Запись токена содержит имя пользователя "{$a->tokenusername}"; соответствующий пользователь Moodle имеет имя пользователя "{$a->moodleusername}".';
$string['missing_idp_type'] = 'Эта конфигурация доступна только в том случае, если настроен тип поставщика удостоверений.';
$string['na'] = 'нет данных';
$string['new_username'] = 'Новый логин';
$string['no_token_to_cleanup'] = 'Нет токенов OIDC, требующих очистки.';
$string['oidc:manageconnection'] = 'Управлять подключением и отключением OpenID';
$string['oidc:manageconnectionconnect'] = 'Управлять подключением OpenID';
$string['oidc:manageconnectiondisconnect'] = 'Управлять отключением  OpenID';
$string['oidcresource'] = 'Ресурс';
$string['oidcresource_help'] = 'Ресурс OpenID Connect, для которого отправляется запрос.<br/>
<b>Примечание</b>: этот параметр не поддерживается для типа поставщика удостоверений  <b>Платформа идентификации Microsoft (версия 2.0)</b>.';
$string['oidcscope'] = 'Область применения';
$string['oidcscope_help'] = 'Используемая область применения OIDC.';
$string['pluginname'] = 'OpenID Connect';
$string['privacy:metadata:auth_oidc'] = 'Аутентификация OpenID Connect';
$string['privacy:metadata:auth_oidc_prevlogin'] = 'Предыдущие способы входа в систему для отмены подключений Microsoft 365';
$string['privacy:metadata:auth_oidc_prevlogin:method'] = 'Предыдущий метод входа';
$string['privacy:metadata:auth_oidc_prevlogin:password'] = 'Поле предыдущего (зашифрованного) пароля пользователя.';
$string['privacy:metadata:auth_oidc_prevlogin:userid'] = 'ID пользователя Moodle';
$string['privacy:metadata:auth_oidc_token'] = 'Токены OpenID Connect';
$string['privacy:metadata:auth_oidc_token:authcode'] = 'Код авторизации для токена';
$string['privacy:metadata:auth_oidc_token:expiry'] = 'Срок действия токена';
$string['privacy:metadata:auth_oidc_token:idtoken'] = 'ID токена';
$string['privacy:metadata:auth_oidc_token:oidcuniqid'] = 'Уникальный идентификатор пользователя OIDC.';
$string['privacy:metadata:auth_oidc_token:oidcusername'] = 'Логин пользователя OIDC';
$string['privacy:metadata:auth_oidc_token:refreshtoken'] = 'Токен обновления';
$string['privacy:metadata:auth_oidc_token:scope'] = 'Область действия токена';
$string['privacy:metadata:auth_oidc_token:token'] = 'Токен';
$string['privacy:metadata:auth_oidc_token:tokenresource'] = 'Ресурс токена';
$string['privacy:metadata:auth_oidc_token:userid'] = 'ID пользователя Moodle.';
$string['privacy:metadata:auth_oidc_token:useridentifier'] = 'Идентификатор пользователя OIDC';
$string['privacy:metadata:auth_oidc_token:username'] = 'Логин пользователя Moodle.';
$string['rowpreviewnum'] = 'Предварительный просмотр строк';
$string['secretexpiryrecipients'] = 'Получатели уведомлений об истечении срока действия секретного ключа';
$string['secretexpiryrecipients_help'] = 'Список адресов электронной почты, разделенных запятыми, на которые будут отправляться уведомления об истечении срока действия секретного ключа.<br/>
Если адрес электронной почты не указан, уведомление будет отправлено главному администратору сайта.';
$string['settings_fieldmap_feild_not_mapped'] = '(не сопоставлено)';
$string['settings_fieldmap_field_bindingusernameclaim'] = 'Заявление привязки логина (может быть сопоставлено только во время входа в систему)';
$string['settings_fieldmap_field_businessPhones'] = 'Рабочий телефон';
$string['settings_fieldmap_field_city'] = 'Город';
$string['settings_fieldmap_field_companyName'] = 'Название компании';
$string['settings_fieldmap_field_country'] = 'Страна';
$string['settings_fieldmap_field_department'] = 'Подразделение';
$string['settings_fieldmap_field_displayName'] = 'Отображаемое имя';
$string['settings_fieldmap_field_employeeId'] = 'ID сотрудника';
$string['settings_fieldmap_field_extensionattribute'] = 'Атрибут расширения {$a}';
$string['settings_fieldmap_field_faxNumber'] = 'Номер факса';
$string['settings_fieldmap_field_givenName'] = 'Собственное имя';
$string['settings_fieldmap_field_groups'] = 'Группы';
$string['settings_fieldmap_field_jobTitle'] = 'Должность';
$string['settings_fieldmap_field_mail'] = 'Электронная почта';
$string['settings_fieldmap_field_manager'] = 'Имя руководителя';
$string['settings_fieldmap_field_manager_email'] = 'Электронная почта руководителя';
$string['settings_fieldmap_field_mobile'] = 'Мобильный';
$string['settings_fieldmap_field_mobilePhone'] = 'Мобильный телефон';
$string['settings_fieldmap_field_objectId'] = 'ID объекта';
$string['settings_fieldmap_field_officeLocation'] = 'Офис';
$string['settings_fieldmap_field_onPremisesSamAccountName'] = 'Имя локальной учетной записи SAM';
$string['settings_fieldmap_field_postalCode'] = 'Почтовый индекс';
$string['settings_fieldmap_field_preferredLanguage'] = 'Язык';
$string['settings_fieldmap_field_preferredName'] = 'Предпочтительное имя';
$string['settings_fieldmap_field_roles'] = 'Роли';
$string['settings_fieldmap_field_state'] = 'Регион';
$string['settings_fieldmap_field_streetAddress'] = 'Адрес улицы';
$string['settings_fieldmap_field_surname'] = 'Фамилия';
$string['settings_fieldmap_field_teams'] = 'Команды';
$string['settings_fieldmap_field_telephoneNumber'] = 'Номер телефона';
$string['settings_fieldmap_field_userPrincipalName'] = 'Имя пользователя';
$string['settings_page_application'] = 'Поставщик удостоверений и аутентификация';
$string['settings_page_binding_username_claim'] = 'Заявление привязки логина';
$string['settings_page_change_binding_username_claim_tool'] = 'Инструмент изменения заявления привязки логина';
$string['settings_page_cleanup_oidc_tokens'] = 'Очистка токенов OpenID Connect';
$string['settings_page_field_mapping'] = 'Сопоставления полей';
$string['settings_page_other_settings'] = 'Другие параметры';
$string['settings_section_authentication'] = 'Аутентификация';
$string['settings_section_basic'] = 'Основные настройки';
$string['settings_section_binding_username_claim'] = 'Заявление привязки логина';
$string['settings_section_endpoints'] = 'Конечные точки';
$string['settings_section_other_params'] = 'Другие параметры';
$string['settings_section_secret_expiry_notification'] = 'Уведомление об истечении срока действия секретного ключа';
$string['table_action'] = 'Действие';
$string['table_matching_details'] = 'Подробности';
$string['table_oidc_unique_identifier'] = 'Уникальный идентификатор OIDC';
$string['table_oidc_username'] = 'Логин OIDC';
$string['table_token_id'] = 'ID записи токена';
$string['table_token_unique_id'] = 'Уникальный ID OIDC';
$string['task_cleanup_oidc_sid'] = 'Очистка записей OIDC SID';
$string['task_cleanup_oidc_state_and_token'] = 'Очистить состояние OIDC и недопустимый токен';
$string['token_deleted'] = 'Токен был успешно удален';
$string['tokenendpoint'] = 'Конечная точка токена';
$string['tokenendpoint_help'] = 'URI конечной точки токена от вашего поставщика удостоверений, которую нужно использовать.<br/>
Обратите внимание, что если сайт должен быть настроен на доступ пользователей других клиентов, конечная точка токена, специфичная для клиента, не может быть использована.';
$string['ucp_disconnect_details'] = 'Это отключит вашу учетную запись Moodle от {$a}. Вам нужно будет создать логин и пароль для входа в Moodle.';
$string['ucp_disconnect_title'] = 'Отключение {$a}';
$string['ucp_general_intro'] = 'Здесь вы можете управлять своим соединением с {$a}. Если включено, вы сможете использовать свою учетную запись {$a} для входа в Moodle вместо отдельного логина и пароля. После подключения вам больше не придется запоминать логин и пароль для Moodle, все входы в систему будут обрабатываться {$a}.';
$string['ucp_login_start'] = 'Начать использовать {$a} для входа в Moodle';
$string['ucp_login_start_desc'] = 'Это переключит вашу учетную запись на использование {$a} для входа в Moodle. Вы будете входить в систему, используя свои учетные данные {$a} - ваши логин и пароль Moodle не будут работать. Вы  в любое время можете отключить свою учетную запись и вернуться к входу в систему в обычном режиме.';
$string['ucp_login_stop'] = 'Прекратить использовать {$a} для входа в Moodle';
$string['ucp_login_stop_desc'] = 'Сейчас для входа в Moodle вы используете {$a}. Нажатие «Прекратить использовать {$a} для входа в Moodle» отключит вашу учетную запись Moodle от {$a}. Вы больше не сможете войти в Moodle под своей учетной записью {$a}. Вам будет предложено создать логин и пароль, и потом вы сможете напрямую войти в Moodle.';
$string['ucp_o365accountconnected'] = 'Эта учетная запись Microsoft 365 уже связана с другой учетной записью Moodle.';
$string['ucp_status_disabled'] = 'Отключено';
$string['ucp_status_enabled'] = 'Включено';
$string['ucp_title'] = 'Управление {$a}';
$string['unmatched'] = 'Нет совпадения';
$string['update_error_incomplete_line'] = 'Строка не содержит обязательных полей.';
$string['update_error_invalid_new_username'] = 'Новое имя пользователя является недействительным.';
$string['update_error_nothing_updated'] = 'Ничего не было обновлено.';
$string['update_error_user_not_found'] = 'Не найдено ни одного пользователя с соответствующим логином. Попробую обновить пользователя, найденного вручную.';
$string['update_error_user_not_oidc'] = 'Пользователь не использует метод аутентификации OpenID Connect. Попробую обновить пользователя, найденного вручную.';
$string['update_error_user_update_failed'] = 'Не удалось обновить пользователя.';
$string['update_oncreate_and_onlogin'] = 'При создании и каждом входе в систему';
$string['update_oncreate_and_onlogin_and_usersync'] = 'При создании, при каждом входе и при каждом запуске синхронизации пользователя';
$string['update_onlogin_and_usersync'] = 'При каждом входе и при каждом запуске синхронизации пользователя';
$string['update_stats_users_errors'] = 'У пользователей ({$a}) имеются ошибки';
$string['update_stats_users_updated'] = 'Пользователи ({$a}) были обновлены';
$string['update_success_o365'] = 'Запись связывания Microsoft 365 успешно обновлена.';
$string['update_success_token'] = 'Токен успешно обновлен.';
$string['update_success_username'] = 'Имя пользователя успешно обновлено.';
$string['update_username_results'] = 'Обновить результаты использования имени пользователя';
$string['update_warning_email_match'] = 'Адрес электронной почты совпадает с адресом существующего пользователя.';
$string['upload_usernames'] = '';
$string['usernamefile'] = 'Файл';
