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
 * Strings for component 'local_reminders', language 'zh_cn', version '4.4'.
 *
 * @package     local_reminders
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityconfduein'] = '到期于';
$string['activityconfexplicitenable'] = '激活明确地提醒';
$string['activityconfexplicitenabledesc'] = '如果选中，教师或有权限的人必须在课程提醒设置页面下<strong>明确地</strong>为每项活动启用提醒。因此，无论下面定义的计划如何，所有活动提醒都将默认禁用。无论如何，此配置不会影响逾期提醒。';
$string['activityconfexplicitenablehint'] = '默认情况下，站点管理员已禁用发送活动提醒。这意味着，教师必须<em>明确地</em>启用他们想要发送的本课程活动的提醒。';
$string['activityconfnoupcomingactivities'] = '本课程没有即将开展的活动。';
$string['activityconfupcomingactivities'] = '活动预告';
$string['activityconfupcomingactivitiesdesc'] = '对于未选中的活动，不会发送提醒。';
$string['activitydueopenahead'] = '活动开始时间：';
$string['activitydueopenaheaddesc'] = '提前几天需要发送活动开放提醒。仅当启用活动开始前发送上述设置的提醒时，此设置才有效。';
$string['activityignoreincompletes'] = '完成后无提醒：';
$string['activityignoreincompletesdetails'] = '如果选中，则如果活动已由用户完成，则不会发送提醒，即使在活动结束<strong>之前</strong>。';
$string['activityopeningseparation'] = '单独的活动开始：';
$string['activityopeningseparationdesc'] = '在课程提醒设置页面中将活动开始显示为单独的条目。';
$string['activityremindersboth'] = '包括活动开始和结束时间';
$string['activityremindersonlyclosings'] = '仅包括活动结束';
$string['activityremindersonlyopenings'] = '仅包括活动开始';
$string['admintreelabel'] = '提醒';
$string['calendareventcreatedprefix'] = '已添加';
$string['calendareventoverdueprefix'] = '已逾期';
$string['calendareventremovedprefix'] = '删除';
$string['calendareventupdatedprefix'] = '更新';
$string['caleventchangedheading'] = '日历事件更改提醒';
$string['caleventchangedheadingdetails'] = '在设置单独的事件类型提醒之前，这些设置必须选中。';
$string['categoryheading'] = '课程类别事件提醒';
$string['categorynosendforended'] = '已完成课程无提醒：';
$string['categorynosendforendeddescription'] = '如果选中，则不会发送已完成课程的提醒。';
$string['contentdescription'] = '描述';
$string['contenttypeactivity'] = '活动';
$string['contenttypecategory'] = '类别';
$string['contenttypecourse'] = '课程';
$string['contenttypegroup'] = '组';
$string['contenttypelocation'] = '地点';
$string['contenttypeuser'] = '用户';
$string['contentwhen'] = '时间';
$string['courseheading'] = '课程活动提醒';
$string['custom'] = '自定义';
$string['customschedulefallback'] = '回退自定义计划';
$string['customschedulefallbackdesc'] = '如果选中，自定义计划将回退到 <strong>未知事件类型</strong> 的活动中指定的值。';
$string['days1'] = '1天';
$string['days3'] = '3天';
$string['days7'] = '7天';
$string['dueheading'] = '活动事件提醒';
$string['emailconfigsheading'] = '提醒电子邮件定制';
$string['emailfootercustomname'] = '自定义电子邮件页脚';
$string['emailfootercustomnamedesc'] = '指定要嵌入到每封提醒电子邮件中的页脚内容。如果此内容为空且默认页脚被禁用，则页脚将从提醒中完全删除。';
$string['emailfooterdefaultname'] = '使用默认电子邮件页脚';
$string['emailfooterdefaultnamedesc'] = '如果选中，则默认提醒电子邮件页脚将包含指向 Moodle 日历的链接。否则，将使用自定义页脚中提供的内容。';
$string['emailheadercustomname'] = '自定义电子邮件标题';
$string['emailheadercustomnamedesc'] = '指定要嵌入到每封提醒电子邮件中的标头内容。这可用于将这些电子邮件标记为您的网站。';
$string['enabled'] = '允许';
$string['enabledaddedevents'] = '创建事件时发送：';
$string['enabledaddedeventsdescription'] = '指示是否在创建日历事件时发送提醒。';
$string['enabledchangedevents'] = '事件更新时发送：';
$string['enabledchangedeventsdescription'] = '指示是否在更新日历事件时发送提醒。';
$string['enableddescription'] = '启用/禁用提醒插件';
$string['enabledforcalevents'] = '为日历更改事件启用：';
$string['enabledforcaleventsdescription'] = '启用在创建、删除或更新日历事件时发送此类型的提醒。';
$string['enabledoverdue'] = '已启用逾期提醒';
$string['enabledremovedevents'] = '删除事件时发送：';
$string['enabledremovedeventsdescription'] = '指示是否在删除日历事件时发送提醒。';
$string['eventtypeclose'] = '活动结束';
$string['eventtypeexpectcompletionon'] = '预计完成时间';
$string['eventtypegradingdue'] = '评分于';
$string['eventtypeopen'] = '活动开始';
$string['excludedmodules'] = '排除的模块：';
$string['excludedmodulesdesc'] = '如果从上述选定模块生成事件，则不会发送提醒。此设置是全局设置，适用于任何类型的事件。';
$string['explaincategoryheading'] = '课程类别事件的提醒设置。';
$string['explaincourseheading'] = '课程活动的提醒设置。这些事件来自一门课程。';
$string['explaindueheading'] = '活动事件的提醒设置。这些事件来自课程中的活动/模块。';
$string['explaingroupheading'] = '群组活动的提醒设置。这些事件仅基于特定组。';
$string['explaingroupshowname'] = '指示是否应将组名称包含在要发送的邮件中。';
$string['explainrolesallowedfor'] = '选择具有上述角色的用户可以接收提醒。';
$string['explainsendactivityreminders'] = '指示应在哪个活动状态下发送提醒。';
$string['explainsiteheading'] = '网站事件的提醒设置。这些事件与网站中的所有用户相关。';
$string['explainuserheading'] = '用户事件的提醒设置。这些事件对每个用户都是单独的。';
$string['filterevents'] = '筛选日历事件：';
$string['filtereventsdescription'] = '应筛选哪些日历事件并为其发送提醒。';
$string['filtereventsonlyhidden'] = '仅日历中隐藏的事件';
$string['filtereventsonlyvisible'] = '仅日历中可见事件';
$string['filtereventssendall'] = '所有事件';
$string['groupheading'] = '组活动提醒';
$string['groupshowname'] = '在消息中显示组名称：';
$string['messageprovider:reminders_course'] = '课程活动的提醒通知';
$string['messageprovider:reminders_coursecategory'] = '课程类别活动的提醒通知';
$string['messageprovider:reminders_due'] = '活动事件的提醒通知';
$string['messageprovider:reminders_group'] = '群组活动的提醒通知';
$string['messageprovider:reminders_site'] = '站点事件的提醒通知';
$string['messageprovider:reminders_user'] = '用户事件的提醒通知';
$string['messagetitleprefix'] = '邮件标题前缀：';
$string['messagetitleprefixdescription'] = '此文本将作为前缀（在方括号内）插入到正在发送的每条提醒消息的标题中。';
$string['moodlecalendarname'] = 'Moodle 日历';
$string['overdueactivityreminders'] = '活动逾期提醒：';
$string['overdueactivityremindersdescription'] = '如果选中，则将向逾期活动的用户发送提醒。';
$string['overduemessage'] = '这项活动已经过期了！';
$string['overduewarnmessage'] = '逾期警告消息：';
$string['overduewarnmessagedescription'] = '输入<strong>示例文本</strong>以红色嵌入到过期的电子邮件中。如果此项为空，则不会显示任何消息。此外，仅当启用过期电子邮件时，才会启用此功能。';
$string['overduewarnprefix'] = '过期的标题前缀：';
$string['overduewarnprefixdescription'] = '输入要嵌入的<strong>前缀示例</strong>以嵌入过期电子邮件标题。如果此项为空，则不会预置任何内容。此外，仅当启用过期电子邮件时，才会启用此功能。';
$string['pluginname'] = '活动提醒';
$string['privacy:metadata'] = '事件提醒插件不存储任何个人数据。';
$string['reminderdaysahead'] = '发送时间早于：';
$string['reminderdaysaheadcustom'] = '自定义日程表：';
$string['reminderdaysaheadcustomdetails'] = '此外，指定所需的计划以提前发送事件的提醒。';
$string['reminderdaysaheadschedule'] = '日程表';
$string['reminderfrom'] = '提醒来自';
$string['reminderstask'] = '本地提醒';
$string['reminderstaskclean'] = '清除本地提醒日志';
$string['rolesallowedfor'] = '允许的角色';
$string['sendactivityreminders'] = '活动提醒：';
$string['sendas'] = '发送';
$string['sendasadmin'] = '以站管理员身份';
$string['sendasdescription'] = '指定应向谁发送这些提醒邮件。';
$string['sendasnamedescription'] = '指定提醒邮件以“无回复用户”身份发送时的显示用户名。';
$string['sendasnametitle'] = '无回复姓名：';
$string['sendasnoreply'] = '无回信地址';
$string['showmodnameintitle'] = '在电子邮件主题中显示模块名称';
$string['showmodnameintitledesc'] = '如果选中，则相应的模块名称将附加到提醒电子邮件主题。';
$string['siteheading'] = '网站活动提醒';
$string['taskreminder'] = '提醒任务';
$string['titlesubjectprefix'] = '提醒';
$string['userheading'] = '用户事件提醒';
$string['useservertimezone'] = '使用服务器所在的时区';
