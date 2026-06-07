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
 * Strings for component 'gradingform_multigraders', language 'zh_cn', version '4.4'.
 *
 * @package     gradingform_multigraders
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = '添加常用词句';
$string['auto_calculate_final_method'] = '自动计算下一个成绩和结果的方法';
$string['auto_calculate_final_method_0'] = '最后的评分';
$string['auto_calculate_final_method_1'] = '已评分的最小值';
$string['auto_calculate_final_method_2'] = '已评分的最大值';
$string['auto_calculate_final_method_3'] = '已评分数的平均值';
$string['auto_calculate_final_method_help'] = '最终成绩由最后一名评分者决定，但系统将根据此处选择的算法自动计算上一个成绩。同样的方法也用于决定最终成绩。';
$string['backtoediting'] = '返回编辑';
$string['blind_marking'] = '盲评';
$string['blind_marking_explained'] = '采用盲评方法，后续评分教师看不到前面教师的评分，只有初始或主要教师才能看到。但是，当成绩发布时，所有相关人员都可以看到所有成绩。';
$string['blind_marking_help'] = '如果选中，中间评分员的教师无不能到以前的成绩，只有第一个评分教师才能看到。';
$string['clicktocopy'] = '将注释复制到反馈评价';
$string['clicktodeleteadmin'] = '删除此作业的所有成绩数据';
$string['clicktoedit'] = '点击编辑';
$string['comment'] = '评价';
$string['criteria'] = '评分标准';
$string['definition'] = '定义';
$string['description'] = '模板说明';
$string['editdefinition'] = '编辑多轮评分工具的选项';
$string['err_gradeinvalid'] = '无效分数';
$string['err_gradeoutofbounds'] = '分数不在允许范围内';
$string['err_grader_intermediary'] = '<b>{$a}</b> - 您不能公布这个学生的分数，因为您并非最终评分教师。';
$string['err_noformula'] = '没有定义用于根据结果计算成绩的公式。请访问成绩簿设置以定义公式。';
$string['err_notgraded'] = '<b>{$a}</b> - 这个学生没有被评分';
$string['feedback_label'] = '注释';
$string['final_grade_check'] = '公布成绩？';
$string['final_grade_message'] = '成绩已公布';
$string['finalgradefinished_noaccess'] = '{$a} 完成了本项评分，您不能修改。';
$string['finalgradenotdecidedyet'] = '最终成绩还没有公布';
$string['finalgradestarted_noaccess'] = '{$a} 开始评分此项，您不在评分教师列表中，因此您不能修改或评分。';
$string['finalgradestarted_nosecond'] = '{$a} 开始评分此项并且不需要更多的评分了。';
$string['graderdetails_display'] = '由 {$a} 评分';
$string['gradingdisabled'] = '此项不能评分，因为它被锁定或重写了。';
$string['gradingof'] = '{$a} 正在评分';
$string['instancedetails_display'] = '{$a} 评分已添加。';
$string['maxscore'] = '最高分数';
$string['message_assign_name'] = '作业 {$a}';
$string['message_footer'] = '<br/><span style="font-size:80%">[多轮评分工具包自动发送的消息]</span><br/>';
$string['message_header'] = '<br/>';
$string['message_smallmessage1'] = '{$a} 已经请求了下一个评分教师评分。';
$string['message_smallmessage2'] = '请花一点时间为这个作业评分。';
$string['message_smallmessage3'] = '{$a} 已完成下一轮评分。';
$string['message_smallmessage4'] = '请复查并决定最终分数。';
$string['message_student_name'] = '学生 {$a}';
$string['message_subject'] = '{$a}需要下一轮评分';
$string['message_subject_to_initial'] = '{$a}再次评分已完成';
$string['messageprovider:secondgrading'] = '作业需要再次评分的通知。';
$string['needregrademessage'] = '这个学生的作业已被评分后，多轮评分规则发生了变化。在 {$a} 检查了最终公布的成绩之前，这个学生看不到最终结果。';
$string['no_grade'] = '没有评分';
$string['now_grading'] = '正在给 {$a} 评分';
$string['pluginname'] = '多轮评分';
$string['previewdefinition'] = '规则预览';
$string['privacy:metadata'] = '这个插件不存储任何用户的个人信息。此处显示的用户信息均存储在MOODLE中。';
$string['require_second_grader'] = '要求的下一轮评分教师';
$string['restoredfromdraft'] = '注意：上次评分结果没有正确保存，因此已恢复为临时存储的分数。';
$string['save'] = '保存';
$string['score'] = '分数';
$string['secondary_graders'] = '下一轮评分教师';
$string['secondary_graders_help'] = '此列中的教师在作业需要下一轮评分时会被通知';
$string['secondary_graders_list'] = '下一轮评分教师 {$a}。';
$string['show_intermediary_to_students'] = '显示下一轮评分教师给学生的评语？';
$string['show_intermediary_to_students_explained'] = '当成绩公布时学生可以看到全部评语。';
$string['show_intermediary_to_students_help'] = '如果选中，下一轮评分教师可以选择在成绩公布时，他们的评语是否可以提供给学生。';
$string['show_notify_student_box'] = '显示提醒学生的选择框？';
$string['show_notify_student_box_help'] = '如果选中，教师可以选择是否显示提醒学生的选择框';
$string['timestamp_format'] = 'd/m/Y H:i:s';
$string['useralreadygradedthisitem'] = '您已评分，需要其他教师决定最终成绩和反馈评语。';
$string['useralreadygradedthisitemfinal'] = '只有 {$a} 可以修改最终成绩和评语。';
$string['visible_to_students'] = '向学生显示评语？';
