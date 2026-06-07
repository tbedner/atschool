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
 * Strings for component 'childcourse', language 'ru', version '4.4'.
 *
 * @package     childcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoenrol'] = 'Автоматическое зачисление при доступе';
$string['autoenrol_help'] = 'При включенном параметре плагин будет автоматически зачислять пользователя в дочерний курс при открытии его через данный активный элемент. Зачисления создаются с использованием отдельного экземпляра зачисления вручную, чтобы их можно было отслеживать и безопасно отменить позже (в зависимости от политики удаления). Если отключено, плагин не будет автоматически зачислять пользователей.';
$string['childcourse'] = 'Дочерний курс';
$string['childcourse:addinstance'] = 'Добавлять активный элемент нового дочернего курса';
$string['childcourse:manage'] = 'Управлять настройками дочернего курса';
$string['childcourse:sync'] = 'Синхронизировать оценки дочернего курса и состояние завершения';
$string['childcourse:view'] = 'Просматривать элемент дочернего курса';
$string['childcourse_help'] = 'Выберите курс, который будет связан с этим активным элементом. Этот параметр определяет все настройки, относящиеся к конкретным правилам (группы, правила завершения, средства выбора элементов, синхронизацию оценок). После сохранения активного элемента дочерний курс заменить нельзя, чтобы сохранить согласованность сопоставлений и историю синхронизации.';
$string['childcoursenotset'] = 'Дочерний курс не задан.';
$string['completionmissing'] = 'Завершение дочернего курса не включено.';
$string['completionrule'] = 'Правило завершения, основанное на дочернем курсе';
$string['completionrule_allactivities'] = 'Завершение — когда будут выполнены все 100% отслеживаемых элементов.';
$string['completionrule_coursecompleted'] = 'Завершение — когда дочерний курс будет завершён.';
$string['completionrule_help'] = 'Определяет, как этот элемент будет автоматически помечаться как выполненный на основе прогресса пользователя в дочернем курсе.

- **Ничего не делать:** выполнение этого элемента не связано с завершением дочернего курса.
- **Когда дочерний курс завершён:** как только дочерний курс будет завершён, этот элемент тоже будет считаться выполненным.
- **Когда 100% отслеживаемых активных элементов выполнены:** должны быть выполнены все активные элементы в дочернем курсе, для которых отслеживается выполнение, чтобы этот элемент считался выполненным.';
$string['completionrule_none'] = 'Ничего не делать';
$string['enrolinstancename'] = 'Ссылка на дочерний курс #{$a}';
$string['error_manualenrolnotavailable'] = 'Плагин зачисления вручную недоступен.';
$string['grade_approval'] = 'Передавать оценку из';
$string['grade_approval_no'] = 'Не передавать оценку';
$string['grade_approval_yes'] = 'Использовать оценку из дочернего курса';
$string['gradebookmissing'] = 'Журнал оценок дочернего курса не настроен (отсутствует итог по курсу).';
$string['hideinmycourses'] = 'Скрыть дочерний курс в разделе «Мои курсы»';
$string['hideinmycourses_help'] = 'При включенном параметре у пользователей, зачисленных с помощью этого элемента, дочерний курс будет скрыт в меню "Мои курсы", что помогает упростить навигацию по курсу. Этот параметр влияет только на пользователей, зачисленных с помощью этого плагина (отслеживается плагином).';
$string['inheritgroups'] = 'Наследовать группы из родительского курса';
$string['inheritgroups_help'] = 'Если включено, плагин попытается воспроизвести членство пользователей в группах из родительского курса в дочерний курс, сопоставляя по названиям групп. Если в дочернем курсе нет такой группы, она может быть создана. Это применяется во время автоматического зачисления. Это не непрерывная синхронизация, если позже не реализована специальная процедура повторной синхронизации.';
$string['keeprole'] = 'Сохранить роль (студент/учитель).';
$string['keeprole_help'] = 'При включенном параметре плагин попытается сохранить простое соответствие ролей: пользователи с правами преподавателя в родительском курсе будут зачислены как преподаватели (при наличии роли editingteacher/учитель); в противном случае - как студенты. При этом не копируются настраиваемые роли или сложные назначения ролей.';
$string['label_childcourse'] = 'Дочерний курс';
$string['label_lastsynccompletion'] = 'Последняя синхронизация выполнения';
$string['label_lastsyncgrade'] = 'Последняя синхронизация оценок';
$string['lastsync'] = 'Последняя синхронизация';
$string['lockedcoursewarning'] = 'Дочерний курс нельзя заменить после сохранения.';
$string['manage_header_actions'] = 'Действия';
$string['manage_header_name'] = 'Название';
$string['missingcourse'] = 'Отсутствующий курс';
$string['modulename'] = 'Дочерний курс';
$string['modulenameplural'] = 'Дочерние курсы';
$string['never'] = 'Никогда';
$string['nogroup'] = 'Нет группы';
$string['openchildcourse'] = 'Открыть дочерний курс';
$string['opennewtab'] = 'Открыть в новой вкладке';
$string['opennewtab_help'] = 'При включенном параметре кнопка будет открывать дочерний курс в новой вкладке. Это не влияет на зачисление или проведение синхронизации, а лишь на то, как курс открывается для пользователя.';
$string['pluginadministration'] = 'Управление дочерним курсом';
$string['pluginname'] = 'Дочерний курс';
$string['privacy:metadata:childcourse_map'] = 'Хранит данные сопоставления, созданные активными элементами связанного курса, чтобы обеспечить безопасное отчисление и аудит.';
$string['privacy:metadata:childcourse_map:childcourseid'] = 'ID связанного дочернего курса.';
$string['privacy:metadata:childcourse_map:childcourseinstanceid'] = 'ID связанного активного элемента курса.';
$string['privacy:metadata:childcourse_map:groupidsjson'] = 'Список ID групп дочернего курса, назначенных плагином (JSON).';
$string['privacy:metadata:childcourse_map:hiddenprefset'] = 'Указывает, был ли плагином установлен параметр «Скрыть дочерний курс» на странице «Мои курсы».';
$string['privacy:metadata:childcourse_map:manualenrolid'] = 'ID экземпляра зачисления, использованный плагином для зачисления пользователя.';
$string['privacy:metadata:childcourse_map:parentcourseid'] = 'ID родительского курса, в котором присутствует активный элемент.';
$string['privacy:metadata:childcourse_map:roleid'] = 'ID роли, назначенной плагином в дочернем курсе.';
$string['privacy:metadata:childcourse_map:timeenrolled'] = 'Время зачисления пользователя через ссылку.';
$string['privacy:metadata:childcourse_map:timemodified'] = 'Время последнего изменения записи сопоставления.';
$string['privacy:metadata:childcourse_map:userid'] = 'ID пользователя, зачисленного через ссылку.';
$string['privacy:metadata:childcourse_state'] = 'Хранит кешированное состояние для пользователя чтобы обеспечить синхронизацию оценок и статуса выполнения.';
$string['privacy:metadata:childcourse_state:childcourseinstanceid'] = 'ID экземпляра активного элемента связанного курса.';
$string['privacy:metadata:childcourse_state:coursecompleted'] = 'Кэшированный индикатор, указывающий, исполнено ли правило выполнения для данного пользователя.';
$string['privacy:metadata:childcourse_state:coursecompletiontimemodified'] = 'Метка времени последнего изменения исходных данных о выполнении для синхронизации.';
$string['privacy:metadata:childcourse_state:finalgrade'] = 'Кэшированная оценка (в процентах), синхронизированная с итогом в дочернем курсе.';
$string['privacy:metadata:childcourse_state:grade_source'] = 'Идентификатор источника оценки (например, course_total).';
$string['privacy:metadata:childcourse_state:gradeitemtimemodified'] = 'Метка времени последнего изменения исходной оценки элемента для синхронизации.';
$string['privacy:metadata:childcourse_state:timemodified'] = 'Время последнего изменения строки кэшированного состояния.';
$string['privacy:metadata:childcourse_state:userid'] = 'ID пользователя.';
$string['privacy:metadata:userpreference:block_myoverview_hidden_course'] = 'Пользовательская настройка, используемая для скрытия дочернего курса на странице «Мои курсы»  (Название настройки по умолчанию: block_myoverview_hidden_course_{courseid}).';
$string['settings_heading'] = 'Настройки дочернего курса';
$string['syncdone'] = 'Синхронизация завершена.';
$string['syncnow'] = 'Синхронизировать сейчас';
$string['targetgroup'] = 'Зачислить в группу';
$string['targetgroup_help'] = 'При выбранном параметре пользователь будет добавлен в эту конкретную группу в дочернем курсе во время автоматического зачисления. Группа должна существовать в дочернем курсе. Если также включено «Наследовать группы от родительского курса», применяются оба поведения (выбранная группа и унаследованные группы).';
$string['unenrolaction'] = 'При удалении ссылки';
$string['unenrolaction_help'] = 'Контролирует, что происходит с зачислениями, созданными этим активным элементом, когда удаляется связанный активный элемент. «Отчислить» удалит только те зачисления, которые созданы этим активным элементом (отслеживаются в таблице сопоставления). «Сохранить зачисления» оставит пользователей зачисленными в дочерний курс.';
$string['unenrolaction_keep'] = 'Сохранить зачисления';
$string['unenrolaction_unenrol'] = 'Исключить пользователей, зачисленных по этой ссылке.';
