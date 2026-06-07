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
 * Strings for component 'auth', language 'bg', version '4.4'.
 *
 * @package     auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Налични добавки за удостоверяване';
$string['allowaccountssameemail'] = 'Разрешаване на профили с еднакъв имейл';
$string['allowaccountssameemail_desc'] = 'Ако е разрешено, повече от един потребителски профили може да споделят един и същ имейл. Това може да доведе до проблеми със сигурността или поверителността, например с имейла за потвърждение на промяната на паролата.';
$string['alternatelogin'] = 'Ако въведете URL адрес в това поле, той ще бъде използван като страница за влизане в този сайт.  Страницата трябва да съдържа html форма, която има свойство action, равно на  "<strong>{$a}</strong>"  и връща полета <strong>username</strong> и <strong>password</strong>.<br /> Внимавайте да не въведете грешен URL адрес, тъй като може да блокирате достъпа си до този сайт.<br />Оставете полето празно, ако искате да ползвате  страницата за влизане в системата по подразбиране.';
$string['alternateloginurl'] = 'Алтернативен URL за влизане';
$string['auth_changepasswordhelp'] = 'Помощ за смяна на паролата';
$string['auth_changepasswordhelp_expl'] = 'Показване на помощ за загубена парола на потребителите, които са загубили {$a} паролата си. Това ще се покаже или заедно с или вместо <strong>URL адреса за промяна на паролата</strong> или вътрешната промяна на паролата на Moodle.';
$string['auth_changepasswordurl'] = 'URL за смяна на паролата';
$string['auth_changepasswordurl_expl'] = 'Посочете адреса на потребителите , които са загубили своята {$a} парола. Задайте <strong>Използване на стандартната страница за промяна на паролата</strong> на <strong>Не</strong>.';
$string['auth_changingemailaddress'] = 'Вие сте пожелали промяна на имейл адрес, от {$a->oldemail} на {$a->newemail}. От съображения за сигурност Ви изпращаме имейл съобщение на новия адрес, за да потвърдите, че той е Ваш. Имейл адресът Ви ще бъде променен веднага след като отворите URL адреса, изпратен Ви в това съобщение.';
$string['auth_common_settings'] = 'Общи настройки';
$string['auth_data_mapping'] = 'Съответствие на полетата с данни';
$string['auth_fieldlock'] = 'Заключване на стойността';
$string['auth_fieldlock_expl'] = '<p>Заключване на стойността:  Ако е активирано, потребителите няма да могат да редактират полето. Използвайте тази възможност ако тези данни се поддържат чрез външната система за удостоверяване.</p>';
$string['auth_fieldlockfield'] = 'Заключване на стойност ({$a})';
$string['auth_fieldlocks'] = 'Заключване на полетата';
$string['auth_fieldlocks_help'] = '<p>Вие можете да заключвате полетата с данни на потребителите. Това е полезно за сайтове, на които данните на потребителите се поддържат ръчно от администраторите, чрез редактиране на записите или чрез качване от файл. Ако заключите задължително изисквани от Moodle полета, осигурете тази данни да се въвеждат при създаване на потребителския профил, иначе профилът ще бъде неизползваем.</p><p>Разгледайте възможността да зададете "Отключено ако е празно", за да избегнете този проблем.</p>';
$string['auth_fieldmapping'] = 'Картографиране на данни ({$a})';
$string['auth_invalidnewemailkey'] = 'Грешка: ако се опитвате да потвърдите промяна на имейл адрес, вероятно сте сгрешили при копирането на URL адреса, който Ви изпратихме чрез съобщение на новата поща. Моля, копирайте адреса и опитайте отново.';
$string['auth_loginpasswordtoggle'] = 'Превключване на видимостта на паролата';
$string['auth_loginpasswordtoggle_desc'] = 'Добавете икона към полето за парола на екрана за вход, която позволява на потребителите да показват или скриват въведената от тях парола.';
$string['auth_loginrecaptcha'] = 'Активирайте reCAPTCHA за влизане';
$string['auth_loginrecaptcha_desc'] = 'Добавете елемент на формуляр за визуално/аудио потвърждение към страницата за вход. Това намалява риска от произволни опити за влизане. Вижте <a target="_blank" href="https://www.google.com/recaptcha">Google reCAPTCHA</a> за повече подробности.';
$string['auth_multiplehosts'] = 'Може да се посочат и повече сървъри (например: host1.com;host2.com;host3.com или xxx.xxx.xxx.xxx;yyy.yyy.yyy.yyy)';
$string['auth_notconfigured'] = 'Методът за удостоверяване {$a} не е конфигуриран.';
$string['auth_outofnewemailupdateattempts'] = 'Вие превишихте позволения брой опити да промените Вашия имейл адрес. Вашата заявка за промяна е отменена.';
$string['auth_passwordisexpired'] = 'Вашата парола е изтекла. Моля, променете я сега.';
$string['auth_passwordwillexpire'] = 'Парола ви ще изтече след {$a} дни. Искате ли да промените паролата си сега?';
$string['auth_remove_delete'] = 'Изтриване напълно на вътрешния';
$string['auth_remove_keep'] = 'Запазване на вътрешния';
$string['auth_remove_suspend'] = 'Блокиране на вътрешния';
$string['auth_remove_user'] = 'Изберете какво да се прави с вътрешния профил на потребител по време на масово синхронизиране, когато потребителят бъде изтрит от външната база данни. Само блокираните потребители автоматично се активират, ако се появят отново във външната база данни.';
$string['auth_remove_user_key'] = 'Ако е премахнат потребител от външната база данни';
$string['auth_sync_script'] = 'User account synchronisation';
$string['auth_sync_suspended'] = 'Ако е активирано, за обновяване на състоянието на блокиране на локалния потребителски профил ще се използва атрибутът блокиран.';
$string['auth_sync_suspended_key'] = 'Синхронизиране състоянието на спиране на потребител';
$string['auth_updatelocal'] = 'Актуализиране на вътрешния запис';
$string['auth_updatelocal_expl'] = '<p><b>Локална актуализация:</b> Ако е разрешено, полето ще се актуализира (от външното удостоверяване) всеки път, когато потребителят влезе или има потребителска синхронизация. Полетата, зададени за локално актуализиране, трябва да бъдат заключени.</p>';
$string['auth_updatelocalfield'] = 'Локална актуализация ({$a})';
$string['auth_updateremote'] = 'Актуализиране на външния запис';
$string['auth_updateremote_expl'] = '<p><b>Актуализиране на външния запис:</b> Ако е разрешено, записът във външната база данни ще бъде актуализиран при всяко променяне на полето в профила на потребителя. Полетата трябва да са отключени, за да могат да се редактират.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Забележка:</b> Актуализирането на външни LDAP данни изисква да зададете binddn и bindpw на bind-потребител с привилегии за редактиране на всичките потребителски записи. Понастоящем не запазва многостойностни атрибути и ще премахне допълнителните стойности при актуализация. </p>';
$string['auth_updateremotefield'] = 'Актуализиране на външния запис ({$a})';
$string['auth_user_create'] = 'Позволяване създаване на потребител';
$string['auth_user_creation'] = 'Новите (анонимни) потребители могат да създават потребителски профили на външния източник за удостоверяване и да бъдат потвърдени чрез имейл. Ако активирате това, не забравяйте също така да конфигурирате специфичните за модула опции за създаване на потребители.';
$string['auth_usernameexists'] = 'Избраното потребителско име вече съществува. Изберете ново.';
$string['auth_usernotexist'] = 'Не може да се актуализира несъществуващ потребител: {$a}';
$string['authenticationoptions'] = 'Опции за удостоверяване';
$string['authinstructions'] = 'Оставите полето празно, за да се показват инструкциите за влизане по подразбиране. Ако искате да се покажат ваши инструкции, попълнете ги тук.';
$string['authloginviaemail'] = 'Разрешете влизане чрез имейл';
$string['authloginviaemail_desc'] = 'Позволяване на потребителите да използват, както потребителско име, така и имейл адрес (ако е уникален) при влизане в сайта';
$string['auto_add_remote_users'] = 'Автоматично добавяне на отдалечени потребители';
$string['cannotmapfield'] = 'Полето „{$a->fieldname}“ не може да бъде картографирано, защото краткото му име „{$a->shortname}“ е твърде дълго. За да позволите да бъде картографирано, трябва да намалите краткото име до {$a->charlimit} знака. <a href="{$a->link}">Редактиране на полетата на потребителския профил</a>';
$string['changepassword'] = 'URL за смяна на паролата';
$string['changepasswordhelp'] = 'URL на страницата за възстановяване на забравена парола, който ще бъде изпратен на потребителя с имейл. Забележете, че тази настройка няма да има ефект ако е зададен "Адрес за възстановяване на забравена парола" в общите настройки за удостоверяване.';
$string['chooseauthmethod'] = 'Избор на метод за удостоверяване';
$string['chooseauthmethod_help'] = 'Тази настройка определя метода за удостоверяване, използван при влизане на потребителя. Трябва да се избират само разрешени добавки за удостоверяване, в противен случай потребителят повече няма да може да влезе. За да блокирате влизането  на потребителя, изберете "Без достъп"';
$string['createpassword'] = 'Генериране на парола и уведомяване на потребителя';
$string['createpasswordifneeded'] = 'Създаване на парола ако трябва и изпращане чрез имейл';
$string['emailchangecancel'] = 'Отмени промяната на e-mail адреса';
$string['emailchangepending'] = 'Промяна в очакване. Отворете имейла, изпратен до Вас на адрес {$a->preference_newemail}';
$string['emailnowexists'] = 'Имейл адресат, който се опитахте да зададете във Вашия профил е зададен от друг потребител през времето от Вашата първоначална заявка. Вашата заявка е анулиране, но можете да направите нова с друг имейл адрес.';
$string['emailupdate'] = 'Промяна на e-mail адрес';
$string['emailupdatemessage'] = 'Уважаема/и {$a->fullname},

Поискали сте промяна на имейла, с който сте се регистрирали  в  {$a->site}. Отворете в браузъра следния адрес, за да потвърдите промяната.

{$a->url}

{$a->supportemail}';
$string['emailupdatesuccess'] = 'E-mail адресът на потребител <em>{$a->fullname}</em>  беше успешно променен на <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'Потвърждение за промяна на e-mail адрес на {$a->site}';
$string['errormaxconsecutiveidentchars'] = 'Паролите трябва да съдържат най-много {$a} последователни идентични символа.';
$string['errorminpassworddigits'] = 'Паролите трябва да имат най-малко {$a} цифри.';
$string['errorminpasswordlength'] = 'Паролите трябва да са дълги най-малко {$a} символа.';
$string['errorminpasswordlower'] = 'Паролите трябва да имат най-малко {$a} малки букви.';
$string['errorminpasswordnonalphanum'] = 'Паролата трябва да има най-малко {$a} специални знаци, като *, -, или #.';
$string['errorminpasswordupper'] = 'Паролите трябва да имат най-малко {$a} главни букви.';
$string['errorpasswordreused'] = 'Тази парола е била използвана преди и не е разрешено да се използва повторно';
$string['errorpasswordupdate'] = 'Грешка при обновяване на парола, паролата не е променена.';
$string['eventuserloggedin'] = 'Потребителят е влязъл';
$string['eventuserloggedinas'] = 'Потребителят е влязъл като друг потребител';
$string['eventuserloginfailed'] = 'Влизането беше неуспешно';
$string['forcechangepassword'] = 'Наложи смяна на паролата';
$string['forcechangepassword_help'] = 'Принуждава потребителите да сменят паролата при тяхното следващо влизане в Moodle.';
$string['forcechangepasswordfirst_help'] = 'Принуждава потребителите да сменят паролата при тяхното първо влизане в Moodle.';
$string['forgottenpassword'] = 'Ако напишете уеб адрес тук, той ще се използва като страница за възстановяване на изгубена парола за този сайт. Това се прилага за сайтове, при които с паролите се работи изцяло извън Moodle. Оставете полето празно, ако искате да използвате страницата за възстановяване на паролата  по подразбиране.';
$string['forgottenpasswordurl'] = 'Адрес за възстановяване на забравена парола';
$string['getrecaptchaapi'] = 'За да използвате reCAPTCHA, трябва да получите API ключ от <a href=\'https://www.google.com/recaptcha/admin\'>https://www.google.com/recaptcha/admin</a>';
$string['guestloginbutton'] = 'Бутон за вход като гост';
$string['incorrectpleasetryagain'] = 'Неправилно. Моля, опитайте отново.';
$string['infilefield'] = 'Задължително поле във файла';
$string['informminpassworddigits'] = 'най-малко {$a} цифри';
$string['informminpasswordlength'] = 'най-малко {$a} символа';
$string['informminpasswordlower'] = 'най-малко {$a} малки букви';
$string['informminpasswordnonalphanum'] = 'най-малко {$a} специални символ(и) като *, - или #';
$string['informminpasswordreuselimit'] = 'Паролите могат да се използват повторно след {$a} промени';
$string['informminpasswordupper'] = 'най-малко {$a} главни букви';
$string['informpasswordpolicy'] = 'Паролата трябва да съдържа {$a}';
$string['instructions'] = 'Инструкции';
$string['internal'] = 'Вътрешен';
$string['limitconcurrentlogins'] = 'Ограничете едновременните влизания';
$string['limitconcurrentlogins_desc'] = 'Ако е разрешено, броят на едновременните влизания за всеки потребител е ограничен. Най-старата сесия се прекратява след достигане на ограничението, имайте предвид, че потребителите може да загубят цялата не запазена работа. Тази настройка не е съвместима с добавките за удостоверяване с единично влизане (SSO).';
$string['locked'] = 'Заключен';
$string['md5'] = 'MD5 хеш';
$string['nopasswordchange'] = 'Паролата не може да бъде променяна';
$string['nopasswordchangeforced'] = 'Не можете да продължите без да се променили паролата, обаче няма налична страница за промяната и. Моля, свържете се с Вашия Moodle администратор.';
$string['noprofileedit'] = 'Профилът не може да бъде редактиран';
$string['ntlmsso_attempting'] = 'Опит за единично влизане чрез NTLM...';
$string['ntlmsso_failed'] = 'Автоматичното влизане в системата е неуспешно, опитайте страницата с нормалното влизане.';
$string['ntlmsso_isdisabled'] = 'NTLM SSO е забранен.';
$string['passwordhandling'] = 'Обработка на полето за паролата';
$string['plaintext'] = 'Обикновен текст';
$string['pluginnotenabled'] = 'Добавка за удостоверяване "{$a}" не е разрешена.';
$string['pluginnotinstalled'] = 'Добавка за  удостоверяване "{$a}" не е инсталирана.';
$string['potentialidps'] = 'Влизане с вашия профил от:';
$string['privacy:metadata:userpref:createpassword'] = 'Показва, че трябва да се генерира парола за потребителя';
$string['privacy:metadata:userpref:forcepasswordchange'] = 'Показва дали потребителят трябва да промени паролата си при влизане';
$string['privacy:metadata:userpref:loginfailedcount'] = 'Броят пъти, когато потребителят не е успял да влезе';
$string['privacy:metadata:userpref:loginfailedcountsincesuccess'] = 'Броят пъти, когато потребителят не е успял да влезе след последното си успешно влизане';
$string['privacy:metadata:userpref:loginfailedlast'] = 'Датата, на която е записан последният неуспешен опит за влизане';
$string['privacy:metadata:userpref:loginlockout'] = 'Дали профилът на потребителя е заключен поради неуспешни опити за влизане и датата, на която е бил заключен';
$string['privacy:metadata:userpref:loginlockoutignored'] = 'Показва, че профилът на потребителя никога не трябва да бъде заключен';
$string['privacy:metadata:userpref:loginlockoutsecret'] = 'Когато е заключен, тайната, която потребителят трябва да използва за отключване на своя профил';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = 'CAPTCHA предпазва от злоупотреби от страна на автоматични програми. Следвайте инструкциите, за да потвърдите, че сте човек. Това може да е поле за отметка, знаци, представени в изображение, което трябва да въведете, или набор от изображения, от които да избирате.

Ако не сте сигурни какви са изображенията, можете да опитате да получите друг CAPTCHA или аудио CAPTCHA.';
$string['recaptcha_link'] = 'auth/email';
$string['security_question'] = 'Въпрос за сигурност';
$string['selfregistration'] = 'Саморегистриране';
$string['selfregistration_help'] = 'Ако е избрана добавка за удостоверение, позволяваща саморегистрация, например по имейл, това позволява на потенциалните потребители да създават потребителски регистрации. Тогава ще има вероятност от регистрация на спамери, които ще използват форуми, блогове и др. за спам. За да се избегне този риск, саморегистрацията трябва да е забранена или ограничена от настройката <em>Разрешени имейл домейни</em>';
$string['settingmigrationmismatch'] = 'Открито е несъответствие на стойностите при коригиране на имената на настройките на добавката! Добавката за удостоверяване "{$a->plugin}" имаше настройката "{$a->setting}", конфигурирана на "{$a->legacy}" под старото име и  "{$a->current}" под сегашното име. Последната стойност е зададена като валидна, но трябва да проверите и потвърдите, че се очаква.';
$string['sha1'] = 'SHA-1 hash';
$string['showguestlogin'] = 'Можете да скриете или покажете бутона за вход като гост на страницата за вход. Щом този бутон е скрит, влизането като гости в сайта фактически се забранява.';
$string['stdchangepassword'] = 'Използване на стандартната страница за промяна на паролата';
$string['stdchangepassword_expl'] = 'Ако външната система за удостоверяване позволява промени на паролата чрез Moodle, превключете това на Да. Тази настройка отменя „Адрес за промяна на паролата“.';
$string['stdchangepassword_explldap'] = 'ЗАБЕЛЕЖКА: Препоръчително е да използвате LDAP през SSL криптиран тунел (ldaps://), ако LDAP сървърът е отдалечен.';
$string['suspended'] = 'Блокиран профил';
$string['suspended_help'] = 'Потребителите с блокирани профили не могат да влизат на сайта и да ползват уеб услуги, всичките им изпратени съобщения се отменят.';
$string['testsettings'] = 'Тестване на настройките';
$string['testsettingsheading'] = 'Тестване на настройките за удостоверяване - {$a}';
$string['unlocked'] = 'Отключено';
$string['unlockedifempty'] = 'Отключено ако е празно';
$string['update_never'] = 'Никога';
$string['update_oncreate'] = 'При създаване';
$string['update_onlogin'] = 'На всяко влизане в системата';
$string['update_onupdate'] = 'При обновяване';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() не поддържа избран потребителски тип: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() не поддържа избран потребителски тип (..все още)';
$string['username'] = 'Потребителско име';
$string['username_help'] = 'Моля забележете, че някои модули за удостоверяване няма да Ви позволят да променяте потребителското име.';
