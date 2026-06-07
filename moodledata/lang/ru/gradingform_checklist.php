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
 * Strings for component 'gradingform_checklist', language 'ru', version '4.4'.
 *
 * @package     gradingform_checklist
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Добавить группу';
$string['alwaysshowdefinition'] = 'Показывать пользователям контрольный список, используемый в модуле (в противном случае контрольный список будет отображен только после оценивания)';
$string['backtoediting'] = 'Вернуться к редактированию';
$string['checked'] = 'Отмечено';
$string['checkitem'] = 'Отметить «{$a}» полностью выполненным';
$string['checklist'] = 'Контрольный список';
$string['checklistmapping'] = 'Правила преобразования баллов в оценки';
$string['checklistmappingexplained'] = 'Минимальная оценка для этого контрольного списка составляет <b>{$a->minscore} баллов</b>, и она будет преобразована в минимальную оценку, доступную в этом модуле (которая равна нулю, если не используется шкала).
Максимальная оценка <b>{$a->maxscore} баллов</b> будет преобразована в максимальную оценку.<br />
Промежуточные баллы будут преобразованы соответственно и округлены до ближайшей доступной оценки.<br />
Если вместо оценки используется шкала, балл будет преобразован в элементы шкалы, как если бы они были последовательными целыми числами.';
$string['checklistoptions'] = 'Настройки контрольного списка';
$string['checkliststatus'] = 'Текущий статус контрольного списка';
$string['confirmdeletegroup'] = 'Вы уверены, что хотите удалить эту группу?';
$string['confirmdeleteitem'] = 'Вы уверены, что хотите удалить этот пункт?';
$string['definechecklist'] = 'Определить контрольный список';
$string['description'] = 'Описание';
$string['enablegroupremarks'] = 'Разрешить оценщику добавлять комментарии для каждой группы контрольного списка';
$string['enableitemremarks'] = 'Разрешить оценщику добавлять комментарии для каждого пункта контрольного списка';
$string['err_definitionmax'] = 'Описание пункта не может быть длиннее 255 символов';
$string['err_descriptionmax'] = 'Описание группы не может быть длиннее 255 символов';
$string['err_nodefinition'] = 'Описание пункта не может быть пустым';
$string['err_nodescription'] = 'Описание группы не может быть пустым';
$string['err_nogroups'] = 'В контрольном списке должна быть хотя бы одна группа';
$string['err_scoreformat'] = 'Количество баллов за каждый пункт должно быть корректным неотрицательным числом';
$string['err_scoremax'] = 'Количество баллов за каждый пункт должно быть не больше 1000';
$string['err_totalscore'] = 'Максимальное количество баллов';
$string['gradingof'] = 'Оценивание {$a}';
$string['groupadditem'] = 'Добавить пункт';
$string['groupdelete'] = 'Удалить группу';
$string['groupdescription'] = 'Описание группы';
$string['groupempty'] = 'Нажмите, чтобы отредактировать группу';
$string['groupfeedback'] = 'Отзыв для группы «{$a}»';
$string['groupmovedown'] = 'Переместить ниже';
$string['groupmoveup'] = 'Переместить выше';
$string['grouppoints'] = 'Баллы группы';
$string['groupremark'] = 'Групповое примечание для «{$a}»';
$string['itemdefinition'] = 'Описание пункта';
$string['itemdelete'] = 'Удалить пункт';
$string['itemempty'] = 'Нажмите, чтобы отредактировать пункт';
$string['itemfeedback'] = 'Отзыв для «{$a}»';
$string['itemremark'] = 'Примечание для пункта «{$a}»';
$string['itemscore'] = 'Баллы за пункт';
$string['maxlengthalert'] = 'Максимальная длина поля {$a} символов';
$string['name'] = 'Название';
$string['needregrademessage'] = 'Контрольный список был изменен после того как студент был оценен. Студент не сможет увидеть этот контрольный список, пока вы не просмотрите его и не обновите оценку.';
$string['overallpoints'] = 'Общее количество баллов';
$string['pluginname'] = 'Контрольный список';
$string['previewchecklist'] = 'Предпросмотр контрольного спискка';
$string['regrademessage1'] = 'Вы собираетесь сохранить изменения в контрольном списке, который уже использовался для оценки. Отметьте, необходима ли переоценка имеющихся оценок. Если вы отметите эту опцию, то контрольный список будет скрыт от студентов до тех пор, пока его пункты не будут переоценены.';
$string['regrademessage5'] = 'Вы собираетесь сохранить существенные изменения в контрольном списке, который уже использовался для оценивания. Значение в журнале оценок останется неизменным, а контрольный список будет скрыт от студентов, пока его пункты не будут переоценены.';
$string['regradeoption0'] = 'Не помечать для переоценки';
$string['regradeoption1'] = 'Пометить для переоценки';
$string['restoredfromdraft'] = 'ПРИМЕЧАНИЕ: Последняя попытка оценить этого студента не была сохранена должным образом, поэтому черновые оценки были восстановлены. Если вы хотите отменить эти изменения, нажмите  ниже кнопку «Отменить».';
$string['save'] = 'Сохранить';
$string['savechecklist'] = 'Сохранить контрольный список и сделать его доступным';
$string['savechecklistdraft'] = 'Сохранить как черновик';
$string['scorepostfix'] = 'Баллов - {$a}';
$string['showitempointseval'] = 'Отображать баллы за каждый пункт во время оценивания';
$string['showitempointstudent'] = 'Отображать оцениваемому баллы за каждый пункт';
$string['showremarksstudent'] = 'Показывать оцениваемому все отзывы';
$string['unchecked'] = 'Не отмечено';
