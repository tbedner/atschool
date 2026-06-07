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
 * Strings for component 'plugin', language 'bg', version '4.4'.
 *
 * @package     plugin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Действия';
$string['availability'] = 'Достъпност';
$string['cancelinstallinfo'] = 'Следната добавка още не е напълно инсталирана, така че нейното инсталиране може да се отмени. За да се направи това, директорията на добавката трябва сега да се изтрие от сървъра. Уверете се, че наистина точно това искате, за да избегнете инцидентна загуба на информация (като ваши промени в програмния код).';
$string['cancelinstallinfodir'] = 'Директория която да се изтрие: {$a}';
$string['cancelinstallone'] = 'Отменяне на това инсталиране';
$string['checkforupdates'] = 'Проверка за налични обновления';
$string['checkforupdateslast'] = 'Последната проверка беше на {$a}';
$string['dependencyavailable'] = 'Налично';
$string['dependencyfails'] = 'Пропадна';
$string['dependencyinstall'] = 'Инсталиране';
$string['dependencyinstallhead'] = 'Инсталиране на липсващи зависимости';
$string['dependencyinstallmissing'] = 'Инсталиране на липсващи зависимости ({$a})';
$string['dependencymissing'] = 'Липсва';
$string['dependencyunavailable'] = 'Неналично';
$string['dependencyupload'] = 'Качване';
$string['dependencyuploadmissing'] = 'Качване на ZIP файлове';
$string['detectedmisplacedplugin'] = 'Добавката "{$a->component}"  е инсталирана на неправилно място "{$a->current}". Очакваното място е "{$a->expected}"';
$string['displayname'] = 'Име на добавката';
$string['filterall'] = 'Показване на всички';
$string['filtercontribonly'] = 'Показване само на допълнителните добавки';
$string['filterupdatesonly'] = 'Показване само на добавките за надграждане';
$string['incompatibleversion'] = 'Несъвместима версия на Moodle: {$a}';
$string['isenabled'] = 'Активирано?';
$string['misdepinfoplugin'] = 'Информация за добавката';
$string['misdepinfoversion'] = 'Информация за версията';
$string['noneinstalled'] = 'Не са инсталирани добавки от този тип';
$string['notdownloadable_link'] = 'admin/mdeploy/notdownloadable';
$string['notes'] = 'Бележки';
$string['overviewall'] = 'Всички добавки';
$string['overviewext'] = 'Допълнителни добавки';
$string['overviewupdatable'] = 'Налични актуализации';
$string['packagesvalidating'] = 'Валидиране на {$a}';
$string['packagesvalidatingok'] = 'Валидирането е успешно, инсталирането може да продължи.';
$string['plugincheckall'] = 'Всички добавки';
$string['plugincheckattention'] = 'Добавки изискващи внимание';
$string['pluginchecknone'] = 'Сега няма добавки, изискващи Вашето внимание';
$string['pluginchecknotice'] = 'Тази страница показва добавките, които може да изискват Вашето внимание по време на надграждането, като нови добавки за инсталиране, добавки за надграждане, липсващи добавки и т.н. Допълнителните добавки се показват ако имат нелични актуализации. Препоръчва се да проверите дали няма по-нови версии на добавките и да обновите техния програмен код преди да продължите с надграждането на Moodle.';
$string['plugindisabled'] = 'Изключена';
$string['pluginenable'] = 'Разрешаване';
$string['pluginenabled'] = 'Включена';
$string['requiredby'] = 'Изисква се от: {$a}';
$string['requires'] = 'Изисква';
$string['rootdir'] = 'Директория';
$string['settings'] = 'Настройки';
$string['source'] = 'Произход';
$string['sourceext'] = 'Добавка';
$string['sourcestd'] = 'Стандартна';
$string['status'] = 'Състояние';
$string['status_delete'] = 'Да се изтрие';
$string['status_missing'] = 'Липсва на диска';
$string['status_new'] = 'Да се инсталира';
$string['status_upgrade'] = 'Да се надгради';
$string['systemname'] = 'Идентификатор';
$string['type_auth'] = 'Метод за удостоверяване';
$string['type_auth_plural'] = 'Методи за удостоверяване';
$string['type_block'] = 'Блок';
$string['type_block_plural'] = 'Блокове';
$string['type_contentbank'] = 'Банка за съдържание';
$string['type_contentbank_plural'] = 'Добавки на Банка за съдържание';
$string['type_contenttype'] = 'Банка за съдържание';
$string['type_contenttype_plural'] = 'Добавки на Банка за съдържание';
$string['type_coursereport'] = 'Отчет на курса';
$string['type_coursereport_plural'] = 'Отчети на курса';
$string['type_customfield_plural'] = 'Потребителски полета';
$string['type_editor'] = 'Редактор';
$string['type_editor_plural'] = 'Редактори';
$string['type_enrol'] = 'Метод за записване';
$string['type_enrol_plural'] = 'Методи за записване';
$string['type_filter'] = 'Филтър';
$string['type_filter_plural'] = 'Филтри';
$string['type_format'] = 'Формат на курс';
$string['type_format_plural'] = 'Формати на курс';
$string['type_gradeexport'] = 'Метод за експортиране на оценките';
$string['type_gradeexport_plural'] = 'Методи за експортиране на оценките';
$string['type_gradeimport'] = 'Метод за импортиране на оценки';
$string['type_gradeimport_plural'] = 'Методи за импортиране на оценки';
$string['type_gradereport'] = 'Отчет на оценки';
$string['type_gradereport_plural'] = 'Отчети на оценки';
$string['type_local'] = 'Локална добавка';
$string['type_local_plural'] = 'Локални добавки';
$string['type_message'] = 'Насоченост на съобщения';
$string['type_message_plural'] = 'Насочености на съобщения';
$string['type_mnetservice'] = 'MNet услуга';
$string['type_mnetservice_plural'] = 'MNet услуги';
$string['type_mod'] = 'Модул за дейност';
$string['type_mod_plural'] = 'Модули за дейности';
$string['type_plagiarism'] = 'Добавка против плагиатство';
$string['type_plagiarism_plural'] = 'Добавки против плагиатство';
$string['type_profilefield'] = 'Тип поле за профил';
$string['type_profilefield_plural'] = 'Типове полета за профил';
$string['type_qformat'] = 'Формат за импортиране/експортиране на въпрос';
$string['type_qformat_plural'] = 'Формати за импортиране/експортиране на въпроси';
$string['type_qtype'] = 'Тип въпрос';
$string['type_qtype_plural'] = 'Типове въпроси';
$string['type_report'] = 'Отчети за сайта';
$string['type_report_plural'] = 'Отчети';
$string['type_repository'] = 'Хранилище';
$string['type_repository_plural'] = 'Хранилища';
$string['type_theme_plural'] = 'Теми';
$string['type_tool_plural'] = 'Инструменти за администриране';
$string['type_webservice'] = 'Протокол за интернет услуга';
$string['type_webservice_plural'] = 'Протоколи за интернет услуги';
$string['uninstall'] = 'Деинсталиране';
$string['uninstallconfirm'] = 'Вие сте на път да изтриете добавката <em>{$a->name}</em>. Това ще изтрие всичко от базата данни, свързано с тази добавка, включително нейните настройки, записите в журналите, потребителските файлове и т.н. Няма да има обратен път, защото Moodle не преви архивиране с цел възстановяване. СИГУРНИ ли сте, че искате да продължите?';
$string['uninstalldelete'] = 'Всичко данни, свързани с добавката <em>{$a->name}</em> бяха изтрити от базата данни. За да се избегне добавката сама да се преинсталира, нейната директория <em>{$a->rootdir}</em> трябва сега да бъде изтрита от Вашия сървър. Moodle не може да я изтрие поради липсващи позволения за запис.';
$string['uninstalldeleteconfirm'] = 'Всичко данни, свързани с добавката <em>{$a->name}</em> бяха изтрити от базата данни. За да се избегне добавката сама да се преинсталира, нейната директория <em>{$a->rootdir}</em> трябва сега да бъде изтрита от Вашия сървър. Искате ли сега да се изтрие директорията на добавката?';
$string['uninstalling'] = 'Деинсталиране на {$a->name}';
$string['updateavailable'] = 'Налична е нова версия {$a}!';
$string['updateavailable_moreinfo'] = 'Повече информация...';
$string['updateavailable_release'] = 'Компилация {$a}';
$string['validationmsg_componentmatch'] = 'Пълно име на компонентата';
$string['validationmsg_componentmismatchname'] = 'Несъответствие в името на добавката';
$string['validationmsg_componentmismatchname_help'] = 'Някои ZIP пакети, като тези генерирани от Github, могат да съдържат неправилно име на кореновата директория. Трябва да поправите името на кореновата директория да съответства на декларираното име на добавката.';
$string['validationmsg_componentmismatchname_info'] = 'Добавката декларира, че нейното име е "{$a}", но това не съвпада с името на кореновата директория.';
$string['validationmsg_componentmismatchtype'] = 'Несъответствие на типа на добавката';
$string['validationmsg_componentmismatchtype_info'] = 'Вие избрахте тип "{$a->expected}", но добавката декларира, че нейния тип е "{$a->found}".';
$string['validationmsg_filenotexists'] = 'Разархивираният фейл не бе намерен';
$string['validationmsg_filesnumber'] = 'В пакета няма достатъчно файлове';
$string['validationmsg_filestatus'] = 'Не може да се разархивират всички файлове';
$string['validationmsg_filestatus_info'] = 'Опитът за разархивиране на файл {$a->file} доведе до грешка "{$a->status}".';
$string['validationmsg_maturity'] = 'Обявено ниво на зрялост';
$string['validationmsg_maturity_help'] = 'Добавката може да има обявено ниво на зрялост. Ако поддържащият добавката програмист я счита за стабилна, нивото на зрялост е MATURITY_STABLE. Всички други нива на зрялост (като Алфа или Бета) се приемат за нестабилни и предизвикват съобщение за внимание.';
$string['validationmsg_missingcomponent_link'] = 'Development:version.php';
$string['validationmsg_missingexpectedlangenfile'] = 'Грешно име на файла с превод на английски';
$string['validationmsg_missingexpectedlangenfile_info'] = 'За посоченият тип на добавката липсва очаквания файл с превод на английски език {$a}.';
$string['validationmsg_missinglangenfile'] = 'Не е намерен файл с превод на английски език';
$string['validationmsg_missinglangenfolder'] = 'Липсва папка с превод на английски език';
$string['validationmsg_missingversion'] = 'В добавката не е обявена нейната версия';
$string['validationmsg_missingversionphp'] = 'Не е намерен файл version.php';
$string['validationmsg_multiplelangenfiles'] = 'Намерени са повече файлове с превод на английски език';
$string['validationmsg_onedir'] = 'Невалидна структура на ZIP пакета.';
$string['validationmsg_onedir_help'] = 'В ZIP пакета трябва да има само една папка, която съдържа програмния код на добавката. Името на папката трябва да съвпада с името на добавката.';
$string['validationmsg_pathwritable'] = 'Проверка правото за запис';
$string['validationmsg_pluginversion'] = 'Версия на добавката';
$string['validationmsg_release'] = 'Компилация';
$string['validationmsg_requiresmoodle'] = 'Изисквана версия на Moodle';
$string['validationmsg_rootdir'] = 'Име на добавката, която ще се инсталира';
$string['validationmsg_rootdir_help'] = 'Името на главната папка в ZIP пакета задава името на добавката, която ще се инсталира. Ако името не е коректно, трябва да преименувате главната папка преди да инсталирате добавката.';
$string['validationmsg_rootdirinvalid'] = 'Невалидно име на добавка';
$string['validationmsg_rootdirinvalid_help'] = 'Името на главната папка в ZIP пакета нарушава формалните  синтактични изисквания. Някои ZIP пакети, като тези генерирани от Github, може да съдържат неправилно име на главната папка. Трябва да поправите името на главната папка да съвпада с името на добавката.';
$string['validationmsg_targetexists'] = 'Папката, в която ще се инсталира, вече съществува';
$string['validationmsg_targetexists_help'] = 'Папката, в която ще се инсталира добавката, трябва да не съществува все още.';
$string['validationmsg_unknowntype'] = 'Неизвестен тип на добавка';
$string['validationmsglevel_error'] = 'Грешка';
$string['validationmsglevel_info'] = 'Добре';
$string['validationmsglevel_warning'] = 'Внимание';
$string['version'] = 'Версия';
$string['versiondb'] = 'Настояща версия';
$string['versiondisk'] = 'Нова версия';
