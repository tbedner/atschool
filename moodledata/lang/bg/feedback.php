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
 * Strings for component 'feedback', language 'bg', version '4.4'.
 *
 * @package     feedback
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_item'] = 'Добавяне на въпрос';
$string['add_pagebreak'] = 'Добавяне разделител на страници';
$string['adjustment'] = 'Разполагане';
$string['after_submit'] = 'След попълване';
$string['allowfullanonymous'] = 'Позволяване на пълна анонимност';
$string['analysis'] = 'Анализ';
$string['anonymous'] = 'Анонимна';
$string['anonymous_edit'] = 'Записване имената на потребителите';
$string['anonymous_entries'] = 'Анонимни отговори';
$string['anonymous_user'] = 'Анонимен потребител';
$string['append_new_items'] = 'Добавяне на нови елементи';
$string['autonumbering'] = 'Автоматично номериране на въпросите';
$string['autonumbering_help'] = 'Позволява или отменя автоматично номериране на всеки въпрос';
$string['average'] = 'Средно';
$string['bold'] = 'Получер';
$string['cannotsavetempl'] = 'записването на шаблони не е разрешено';
$string['captcha'] = 'Captcha';
$string['captchanotset'] = 'Captcha не е настроена';
$string['check'] = 'Няколко възможности - няколко отговора';
$string['check_values'] = 'Възможни отговори';
$string['checkbox'] = 'Няколко възможности - няколко отговора (отметки)';
$string['choosefile'] = 'Избиране на файл';
$string['chosen_feedback_response'] = 'изберете отговор на анкетата';
$string['complete_the_form'] = 'Отговаряне на въпросите...';
$string['completed'] = 'Завършена';
$string['completed_feedbacks'] = 'Изпратени отговори';
$string['completiondetail:submit'] = 'Попълване на анкетата';
$string['completionsubmit'] = 'Попълване на анкетата';
$string['configallowfullanonymous'] = 'Ако тази настройка е "Да", анкета може де се попълни и от началната страница без да се изисква потребителите да са влезли в сайта със своите потребителски имена и пароли.';
$string['confirmdeleteentry'] = 'Сигурни ли сте, че искате да изтриете това?';
$string['confirmdeleteitem'] = 'Сигурни ли сте, че искате да изтриете този елемент?';
$string['confirmdeletetemplate'] = 'Сигурни ли сте, че искате да изтриете този шаблон?';
$string['confirmusetemplate'] = 'Сигурни ли сте, че искате да използвате този шаблон?';
$string['continue_the_form'] = 'Продължаване с отговаряне на въпросите';
$string['count_of_nums'] = 'Брой на числата';
$string['courseid'] = 'номер на курс';
$string['creating_templates'] = 'Записване на тези въпроси като шаблон';
$string['delete_entry'] = 'Изтриване на записа';
$string['delete_item'] = 'Изтриване на въпрос';
$string['delete_old_items'] = 'Изтриване на стари елементи';
$string['delete_template'] = 'Изтриване на шаблона';
$string['delete_templates'] = 'Изтриване на шаблони...';
$string['depending'] = 'Зависимости';
$string['depending_help'] = 'Възможно е един въпрос (или друг елемент) да се покаже само при определен отговор на друг въпрос.<br />
<strong>Ето как.</strong><br />
<ul>
<li>Първо създайте един въпрос, от който ще зависи дали да се показват други елементи. Поставете му етикет (някакво число)</li>
<li>После вмъкнете разделител за страници.</li>
<li>След това добавете елементи, зависещи от отговорите на първия въпрос. В настройките на тези елементи за "Въпрос за зависимост" изберете етикета на първия въпрос и напишете съответния отговор в полето "Отговор за зависимост".</li> </ul>
<strong>Структурата на въпросите трябва да изглежда, например, така.</strong> <ol>
<li>Въпрос 1: Имате ли кола?
Отговори: Да/Не</li>
<li>Разделител на страници</li> <li>Въпрос: Какъв цвят е Вашата кола?<br /> (този въпрос зависи от въпрос 1 при отговор = Да)</li> <li>Въпрос: Защо нямате кола?<br /> (този елемент зависи от въпрос 1 при отговор = Не)</li> <li> ... други въпроси</li> </ol>';
$string['dependitem'] = 'Въпрос за зависимост';
$string['dependvalue'] = 'Отговор за зависимост';
$string['description'] = 'Описание';
$string['do_not_analyse_empty_submits'] = 'Да не се анализират празните отговори';
$string['drop_feedback'] = 'Премахване от този курс';
$string['dropdown'] = 'Няколко възможности - един отговор (падащ списък)';
$string['dropdown_values'] = 'Отговори';
$string['dropdownlist'] = 'Няколко възможности - един отговор (падащо меню)';
$string['dropdownrated'] = 'Падащо меню (с рейтинги)';
$string['edit_item'] = 'Редактиране на въпрос';
$string['edit_items'] = 'Редактиране на въпроси';
$string['email_notification'] = 'Позволяване на уведомяване при попълване';
$string['email_notification_help'] = 'Ако е "Да", администраторите биват уведомени при изпращане на отговори.';
$string['emailteachermail'] = 'Потребителят {$a->username} е попълнил анкетата: "{$a->feedback}"

Можете да я видите тук: {$a->url}';
$string['emailteachermailhtml'] = '<p>Потребителят {$a->username} е попълнил анкетата: <i>"{$a->feedback}"</i></p>
<p>Анкетата <a href="{$a->url}">е достъпна на сайта</a>.</p>';
$string['entries_saved'] = 'Вашите отговори бяха запазени. Благодаря.';
$string['eventresponsedeleted'] = 'Отговорът беше изтрит';
$string['eventresponsesubmitted'] = 'Отговорът беше изпратен';
$string['export_questions'] = 'Експортиране на въпроси';
$string['export_to_excel'] = 'Експортиране към Excel';
$string['feedback:addinstance'] = 'Добавяне на нова анкета';
$string['feedback:complete'] = 'Попълване на анкета';
$string['feedback:createprivatetemplate'] = 'Създаване на собствен шаблон';
$string['feedback:createpublictemplate'] = 'Създаване на общодостъпен шаблон';
$string['feedback:deletesubmissions'] = 'Изтриване на изпратените попълвания';
$string['feedback:deletetemplate'] = 'Изтриване на шаблона';
$string['feedback:edititems'] = 'Редактиране на елементи';
$string['feedback:mapcourse'] = 'Свързване на курсове с глобални анкети';
$string['feedback:receivemail'] = 'Получаване на имейл уведомления';
$string['feedback:view'] = 'Показване на анкета';
$string['feedback:viewanalysepage'] = 'Показване на страницата за анализ след попълване';
$string['feedback:viewreports'] = 'Разглеждане на отчети';
$string['feedback_is_not_for_anonymous'] = 'анкетата не е анонимна';
$string['feedback_is_not_open'] = 'Анкетата не е отворена';
$string['feedbackclose'] = 'Позволено е отговаряне до';
$string['feedbackopen'] = 'Позволено е отговаряне от';
$string['file'] = 'Файл';
$string['filter_by_course'] = 'Филтриране по курс';
$string['handling_error'] = 'Възникна грешка при обработката от модул Обратна връзка';
$string['hide_no_select_option'] = 'Скриване възможността "Не е избран"';
$string['horizontal'] = 'Хоризонтално';
$string['import_questions'] = 'Импортиране на въпроси';
$string['import_successfully'] = 'Импортирането успешно';
$string['importfromthisfile'] = 'Импортиране от този файл';
$string['indicator:cognitivedepthdef_help'] = 'Участникът е достигнал този процент на познавателна ангажираност, предложен от дейностите Обратна връзка през този интервал за анализ (Levels = No view, View, Submit)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadthdef_help'] = 'Участникът е достигнал този процент на социалната ангажираност, предлагана от дейностите Обратна връзка през този интервал за анализ (Levels = No participation, Participant alone, Participant with others)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['info'] = 'Информация';
$string['infotype'] = 'Вид информация';
$string['insufficient_responses'] = 'Недостатъчно отговори';
$string['insufficient_responses_for_this_group'] = 'Няма достатъчно отговори за тази група';
$string['insufficient_responses_help'] = 'За да бъде анкетата анонимна, трябва да има минимум 2 отговора.';
$string['item_label'] = 'Етикет';
$string['item_name'] = 'Въпрос';
$string['label'] = 'Етикет';
$string['labelcontents'] = 'Съдържание';
$string['mapcourse'] = 'Свързване на анкетата с курсова';
$string['mapcourse_help'] = 'По подразбиране формулярите за обратна връзка на Вашата начална страница са достъпни от целия сайт и ще се показват във всички курсове чрез блока за обратна връзка. Можете да накарате формуляра за обратна връзка да се показва принудително, като го направите на прилепен блок, или да ограничите броя на курсовете, в които се показва, като го свържете с определен курс.';
$string['mapcourseinfo'] = 'Тази анкета е достъпна от курсовете на целия сайт чрез блока за обратна връзка. Вие обаче можете да ограничите курсовете, в които се показва, като я свържете с тях. Потърсете курсове и ги свържете с анкетата.';
$string['mapcoursenone'] = 'Не са свързани курсове. Анкетата е достъпно във всички курсове.';
$string['mapcourses'] = 'Свързване на анкетата с курсове';
$string['mappedcourses'] = 'Свързани курсове';
$string['maximal'] = 'максимум';
$string['messageprovider:message'] = 'Напомняне за обратна връзка';
$string['messageprovider:submission'] = 'Уведомления за обратна връзка';
$string['minimal'] = 'минимум';
$string['mode'] = 'Режим';
$string['modulename'] = 'Обратна връзка';
$string['modulename_help'] = 'Модулът за дейност Обратна връзка позволява на преподавателя да създаде собствена анкета за получаване на обратна информация от участниците, чрез използване на разнообразни типове въпроси, включващи: Множество възможни отговори, Да/Не или отговор с въвеждане на текст.

Отговорите могат да бъдат анонимни, ако е необходимо, и резултатът може да се покаже на всички участници или само на преподавателите. Всяка дейност Обратна връзка, добавена на началната страница на сайта, може да се попълни и от невлезли посетители.

Дейността Обратна връзка може да се използва за:

* За оценяване на курсовете, с цел да се подобрят в бъдеще
* Да дадат възможност на участниците да изкажат желание да се запишат в курсове, събития и др.
* За анкетиране на гостите относно избора на курс, политиката на учебното заведение и др.
* Като пощенска кутия за анонимно съобщаване за някакви инциденти';
$string['modulename_link'] = 'mod/feedback/view';
$string['modulenameplural'] = 'Обратни връзки';
$string['move_item'] = 'Преместване на този въпрос';
$string['multichoice'] = 'Множество възможни отговори';
$string['multichoice_values'] = 'Възможности за избиране';
$string['multichoicerated'] = 'Възможни отговори (с рейтинги)';
$string['multichoicetype'] = 'Тип на избора';
$string['multiplesubmit'] = 'Позволено е многократно попълване';
$string['multiplesubmit_help'] = 'Ако е позволено анонимно попълване, потребителите могат да попълват анкетата неопределен брой пъти.';
$string['name'] = 'Име';
$string['name_required'] = 'Името се изисква';
$string['next_page'] = 'Следваща страница';
$string['no_itemlabel'] = 'Няма етикет';
$string['no_itemname'] = 'Няма име на елемента';
$string['no_items_available_yet'] = 'Още не са настроени въпроси';
$string['no_templates_available_yet'] = 'Още няма достъпни шаблони';
$string['non_anonymous'] = 'Да - ще се показват с отговорите';
$string['non_anonymous_entries'] = 'няма анонимни отговори';
$string['non_respondents_students'] = 'не отговорили студенти';
$string['not_completed_yet'] = 'Още не е завършана';
$string['not_selected'] = 'Не е избран';
$string['not_started'] = 'не започната';
$string['numeric'] = 'Числов отговор';
$string['numeric_range_from'] = 'Интервал от';
$string['numeric_range_to'] = 'Интервал до';
$string['of'] = 'на';
$string['oldvaluespreserved'] = 'Всички стари въпроси и зададени стойности ще бъдат предпазени';
$string['oldvalueswillbedeleted'] = 'Текущите въпроси и всички отговори от Ваши потребители ще бъдат изтрити';
$string['only_one_captcha_allowed'] = 'Само една Captcha е допустима в анкетата';
$string['overview'] = 'Представяне';
$string['page'] = 'Страница';
$string['page-mod-feedback-x'] = 'Всяка страница от модул Обратна връзка';
$string['page_after_submit'] = 'Съобщение след попълване';
$string['pagebreak'] = 'Разделител на страници';
$string['pluginadministration'] = 'Администриране на Обратна връзка';
$string['pluginname'] = 'Обратна връзка';
$string['position'] = 'Позиция';
$string['previewquestions'] = 'Преглеждане на въпросите';
$string['previous_page'] = 'Предишна страница';
$string['public'] = 'Общодостъпен';
$string['question'] = 'Въпрос';
$string['questionandsubmission'] = 'Настройки въпросите и отговарянето';
$string['questions'] = 'Въпроси';
$string['questionslimited'] = 'Показване само на първите  {$a} отговора, преглеждане на индивидуални отговори, или изтегляне на таблица с всички отговори.';
$string['radio'] = 'Няколко възможности - един отговор';
$string['radio_values'] = 'Отговори';
$string['required'] = 'Задължителен';
$string['resetting_data'] = 'Нулиране на отговорите на анкетата';
$string['resetting_feedbacks'] = 'Нулиране на анкетите';
$string['response_nr'] = 'Номер на отговора';
$string['responses'] = 'Отговори';
$string['responsetime'] = 'Време на отговаряне';
$string['save_as_new_item'] = 'Записване като нов въпрос';
$string['save_as_new_template'] = 'Записване като нов шаблон';
$string['save_entries'] = 'Изпращане на отговорите';
$string['save_item'] = 'Записване на въпроса';
$string['saving_failed'] = 'Запазването пропадна';
$string['search:activity'] = 'Обратна връзка - информация за дейността';
$string['search_course'] = 'Търсене на курс';
$string['searchcourses'] = 'Търсене на курсове';
$string['searchcourses_help'] = 'Търсене на идентификационен номер или име на курс(ове), които Вие искате да свържете с тази анкета.';
$string['send'] = 'изпращане';
$string['send_message'] = 'изпращане на съобщение';
$string['show_all'] = 'Показване на всичко';
$string['show_analysepage_after_submit'] = 'Показване аналитичната страница';
$string['show_entries'] = 'Преглед на отговорите';
$string['show_entry'] = 'Преглед на отговор';
$string['show_nonrespondents'] = 'Показване на не отговорилите';
$string['site_after_submit'] = 'Сайт след изпращане';
$string['sort_by_course'] = 'Подреждане по курс';
$string['started'] = 'започната';
$string['subject'] = 'Относно';
$string['switch_item_to_not_required'] = 'превключване на: НЕзадължителен';
$string['switch_item_to_required'] = 'превключване на: Задължителен';
$string['template'] = 'Шаблон';
$string['template_saved'] = 'Шаблонът запазен';
$string['templates'] = 'Шаблони';
$string['textarea'] = 'Отговор с по-дълъг текст';
$string['textarea_height'] = 'Брой на редовете';
$string['textarea_width'] = 'Ширина';
$string['textfield'] = 'Един ред текст';
$string['textfield_maxlength'] = 'Максимум букви';
$string['textfield_size'] = 'Ширина на текстово поле';
$string['there_are_no_settings_for_recaptcha'] = 'Няма настройки за Captcha';
$string['this_feedback_is_already_submitted'] = 'Вие вече сте изпълнили тази дейност.';
$string['typemissing'] = 'липсваща стойност "тип"';
$string['update_item'] = 'Записване на промените във въпроса';
$string['url_for_continue'] = 'Хипервръзка към следващата дейност';
$string['url_for_continue_help'] = 'След като анкетата бъде попълнена и изпратена, се показва бутон "Продължаване", щракването върху който отваря страницата на курса. Иначе, той може да отвори следващата дейност, ако въведете тук адреса й.';
$string['use_one_line_for_each_value'] = '<br />Използвайте по един ред за всеки отговор!';
$string['use_this_template'] = 'Използване на този шаблон';
$string['using_templates'] = 'Използване на шаблон';
$string['vertical'] = 'Вертикално';
