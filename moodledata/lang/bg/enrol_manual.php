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
 * Strings for component 'enrol_manual', language 'bg', version '4.4'.
 *
 * @package     enrol_manual
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alterstatus'] = 'Промяна на статуса';
$string['altertimeend'] = 'Промяна на крайното време';
$string['altertimestart'] = 'Промяна времето на започване';
$string['assignrole'] = 'Задаване на роля';
$string['browsecohorts'] = 'Разглеждане на потоци';
$string['browseusers'] = 'Разглеждане на потребители';
$string['confirmbulkdeleteenrolment'] = 'Сигурни ли сте, че искате да изтриете тези записвания на потребители?';
$string['defaultperiod'] = 'Продължителност на записването по подразбиране';
$string['defaultperiod_desc'] = 'Продължителност по подразбиране на времето на валидност на записването. Ако е зададено нула, продължителността на записването ще бъде по подразбиране неограничена.';
$string['defaultperiod_help'] = 'Продължителност по подразбиране на времето на валидност на записването, започващо от момента, в който потребителят е записан. Ако е изключено, продължителността на записването ще бъде по подразбиране неограничена.';
$string['deleteselectedusers'] = 'Отписване от курса на избраните потребители';
$string['editselectedusers'] = 'Редактиране записването на избраните потребители';
$string['enrolledincourserole'] = 'Записан в "{$a->course}" като "{$a->role}"';
$string['enrolusers'] = 'Записване на потребители';
$string['enroluserscohorts'] = 'Записване на избраните потребители и потоци';
$string['expiredaction'] = 'Действие при изтичане на записването';
$string['expiredaction_help'] = 'Избраното действие ще се изпълни, когато изтече времето на записване на потребителя. Моля, обърнете внимание, че някои данни се изтриват от курса при отписването.';
$string['expirymessageenrolledbody'] = 'Уважаеми {$a->user},

Това е уведомление, че вашето записване в курса "{$a->course}" предстои да изтече на {$a->timeend}.

Ако имате нужда от помощ, обърнете се към {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Уведомление за предстоящо отписване';
$string['expirymessageenrollerbody'] = 'Записването в курса "{$a->course}" ще изтече в следващите {$a->threshold} за следните потребители:

{$a->users}

За да продължите тяхното записване, отидете на адрес {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Уведомление за предстоящо отписване';
$string['manual:config'] = 'Конфигуриране на екземпляр за ръчно записване';
$string['manual:enrol'] = 'Записване на потребители';
$string['manual:manage'] = 'Управляване на потребителските записвания';
$string['manual:unenrol'] = 'Отписване на потребители от курс';
$string['manual:unenrolself'] = 'Самоотписване от курс';
$string['messageprovider:expiry_notification'] = 'Уведомление за предстоящо отписване на ръчно записани';
$string['now'] = 'Сега';
$string['pluginname'] = 'Ръчни записвания';
$string['pluginname_desc'] = 'Добавката  за ръчно записване позволява да се записват потребители в даден курс чрез линк в блока Настройки > Администриране на курс. Това се прави от потребител с необходимите позволения, като например учител. Нормално тази добавка трябва да е активна, тъй като други добавки, като добавката за самозаписване, я използват.';
$string['selectcohorts'] = 'Избиране на потоци';
$string['selectusers'] = 'Избиране на потребители';
$string['status'] = 'Позволяване на ръчно записване';
$string['status_desc'] = 'Позволява достъп до курса на вътрешно записани потребители. Тази настройка трябва да е разрешена в повечето случаи.';
$string['status_help'] = 'Тази настройка позволява на потребителите да бъдат записвани ръчно, чрез линк в настройките за администрация на курса и от  потребител с подходящо разрешение, като например учител.';
$string['statusdisabled'] = 'Забранен';
$string['statusenabled'] = 'Разрешен';
$string['unenrol'] = 'Отписване на потребителя';
$string['unenrolselectedusers'] = 'Отписване на избраните потребители';
$string['unenrolselfconfirm'] = 'Наистина ли искате да се отпишете от курс "{$a}"?';
$string['unenroluser'] = 'Наистина ли желаете да отпишете потребител "{$a->user}" от курс "{$a->course}"?';
$string['unenrolusers'] = 'Отписване на потребители';
$string['wscannotenrol'] = 'Екземплярът на добавката не може да запише потребителя ръчно в курса с id={$a->courseid}';
$string['wsnoinstance'] = 'Добавката за ръчно записване не съществува или е блокирана за курса  (id = {$a->courseid})';
$string['wsusercannotassign'] = 'Вие нямата право да зададете тази роля  ({$a->roleid}) на потребителя ({$a->userid}) в този курс ({$a->courseid}).';
