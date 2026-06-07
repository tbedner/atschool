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
 * Strings for component 'diary', language 'zh_cn', version '4.4'.
 *
 * @package     diary
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = '访问被拒绝';
$string['additionallinks'] = '有关本活动和课程的其他链接：';
$string['addtofeedback'] = '添加到反馈中';
$string['alias'] = '关键词';
$string['aliases'] = '关键词';
$string['aliases_help'] = '每条日志都可以有一个相关关键字（或别名）列表。

每个关键词须另起一行输入（不要用逗号分隔）。';
$string['alwaysopen'] = '总是打开';
$string['alwaysshowdescription'] = '总是显示说明';
$string['alwaysshowdescription_help'] = '如果禁用，学生只有在 "开放时间 "才能看到以上日志描述。';
$string['and'] = '和';
$string['attachment'] = '附件';
$string['attachment_help'] = '您可以选择将一个或多个文件附加到日志中。';
$string['autorating'] = '自动评级';
$string['autorating_descr'] = '如果启用，将根据最小/最大计数设置自动计算输入日志的评分。';
$string['autorating_help'] = '该设置与最小/最大计数设置一起定义了自动评级所有新日志的默认值。';
$string['autorating_title'] = '启用自动评级';
$string['autoratingbelowmaxitemdetails'] = '自动评级需要{$a->one}或更多的{$a->two}，每少一个都可能受到{$a->three}%的惩罚。<br>你有{$a->four}。你需要有{$a->five}。可能的惩罚是{$a->six}分。';
$string['autoratingitempenaltymath'] = '自动评级项目惩罚的数学计算公式是 (max({$a->one} - {$a->two}, 0)) * {$a->three} = {$a->four}。<br>注意：max 可以防止因数量超过要求而产生负数。';
$string['autoratingitempercentset'] = '自动评分百分比设置： {$a}%';
$string['autoratingovermaxitemdetails'] = '自动评分上限为 {$a->one} {$a->two}，每增加 1 个，可能会受到 {$a->three}% 的处罚。<br>您有 {$a->four}，即 {$a->five} 太多了。可能的惩罚是 {$a->six} 分。';
$string['availabilityhdr'] = '可用性';
$string['avgsylperword'] = '每个词平均音节数 {$a}';
$string['avgwordlenchar'] = '每个单词平均长度 {$a} 字母';
$string['avgwordpara'] = '每段平均字数 {$a｝';
$string['blankentry'] = '空白条目';
$string['calendarend'] = '{$a} 关闭';
$string['calendarstart'] = '{$a} 开启';
$string['cancel'] = '取消转移';
$string['chars'] = '字数：';
$string['charspersentence'] = '每句平均字数';
$string['clearfeedback'] = '清除反馈？';
$string['commonerrorpercentset'] = '常见错误 百分比 {$a}%';
$string['commonerrors'] = '常见错误';
$string['commonerrors_help'] = '常见错误的定义见与本题相关的 "错误词汇表"。';
$string['configdateformat'] = '这里定义了如何在日记报告中显示日期。默认值 "M d, Y G:i "为月、日、年和 24 小时格式时间。有关更多示例和预定义日期常量，请参阅 PHP 手册中的日期。';
$string['created'] = '创建于 {$a->one} 天 {$a->two} 小时前。';
$string['createnewprompt'] = '创建新提示';
$string['crontask'] = '日记模块的后台处理';
$string['csvexport'] = 'Export to .csv';
$string['currententry'] = '导出为 .csv格式';
$string['currpotrating'] = '您当前的潜在评级为：{$a->one}分，或{$a->t\'wo}%。';
$string['datechanged'] = '更改日期';
$string['dateformat'] = '默认日期格式';
$string['datestart'] = '设置提示ID {$a} 开始日期：';
$string['datestop'] = '设置提示 ID {$a} 结束日期：';
$string['daysavailable'] = '可用天数';
$string['daysavailable_help'] = '如果使用 “星期 ”格式，您可以设置日记的开放使用天数。';
$string['deadline'] = '开放天数';
$string['delete'] = '删除';
$string['diarymailhtmluser'] = '已发布“<i>{$a->diary}</i>\'<br /><br />
您可以在此处查看<a href=”{$a->url}“>日记</a>.<br /><br />请注意：您可能需要提供反馈或更新条目的状态，以便将活动设置为完成。';
$string['diarymailuser'] = '已发布 \'{$a->diary} 的日记条目，

您可以在此处查看条目：

{$a->url}

注意：您可能需要提供反馈或更新条目的状态，以便将活动设置为完成。';
