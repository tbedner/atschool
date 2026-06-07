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
 * Strings for component 'observation', language 'zh_cn', version '4.4'.
 *
 * @package     observation
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abandonobservation'] = '取消场次';
$string['actions'] = '操作';
$string['activity'] = '活动';
$string['allowunenrol'] = '允许学生将自己从已注册的场次时间段中删除。';
$string['applyfilter'] = '应用过滤器';
$string['assignedmarkingsession'] = '您已被分配为此场次活动的观察者。点击下面的 Go to Activity （转到活动） 查看详情。';
$string['assignedobservationsession'] = '您已注册成为此场次活动的的被观察者。点击下面的 Go to Activity （转到活动） 查看详情。';
$string['assignedtimeslots'] = '分配的时间段';
$string['before'] = '前于';
$string['calendarsignup'] = '日历注册';
$string['cancellationalert'] = '$a} - 时间段取消';
$string['cancelled'] = '取消';
$string['cancelledslottext'] = '您注册的时间段已被取消。当课程协调员删除该时间段或手动将您从该时间段中删除时，可能会发生这种情况。点击下面的链接注册新的时间段。';
$string['cannotpreviewslots'] = '无法预览此时间段： {$a}。';
$string['complete'] = '完成';
$string['confirmcancel'] = '您确定要取消观察吗？此操作无法撤消。';
$string['confirmrandomlyassign'] = '是否确实要将未注册任何时段的用户随机分配到未填充的时段？此操作无法撤消。';
$string['confirmsubmit'] = '您确定要提交观察结果吗？';
$string['couldnotupdategrade'] = '无法更新成绩簿中的成绩。';
$string['create'] = '增加';
$string['createnew'] = '新增';
$string['createnotification'] = '增加通知';
$string['creatingobservationpoint'] = '增加观察点';
$string['creatingtimeslot'] = '添加时间段';
$string['currentpoints'] = '当前观察点';
$string['currenttimeslots'] = '当前时间段';
$string['defaultmessagenoinstructions'] = '未提供指南';
$string['delete'] = '删除';
$string['download'] = '下载';
$string['duration'] = '场次时长（分钟）';
$string['edit'] = '编辑';
$string['editingobservationpoint'] = '编辑观察点';
$string['editingobservationpoints'] = '编辑多个观察点';
$string['editingtimeslot'] = '编辑时间段';
$string['editingtimeslots'] = '编辑多个时间段';
$string['editobservationpoints'] = '编辑多个观察点';
$string['edittimeslotss'] = '编辑多个时间段';
$string['endbeforestart'] = '结束时间应该在开始时间之后';
$string['evidencetype'] = '证明材料';
$string['evidenceupload'] = '上传证明材料';
$string['existsincompletepoints'] = '没有响应部分观察点的要求。在提交会话之前，必须记录所有观察点的响应。';
$string['extracomment'] = '额外说明';
$string['fail'] = '失败';
$string['filesizebounds'] = '文件大小必须是介于 1MB 和 1000MB 之间的整数值';
$string['filesizerequired'] = '证明材料需要确定文件大小';
$string['filtertimeslots'] = '时间段过滤';
$string['filterwithin'] = '过滤器来自';
$string['finishtime'] = '结束时间';
$string['formincomplete'] = '表格未填完';
$string['friday'] = '星期五';
$string['general'] = '常规';
$string['generatedtimeslots'] = '设置了 {$a} 个时间段';
$string['go'] = '开始';
$string['gradebookcomment'] = '成绩薄说明';
$string['gradegiven'] = '已评分';
$string['gradegivenbounds'] = '给定的分数必须介于指定的最低分和最高分之间';
$string['gradegivengreatermaxgrade'] = '给出的分数不能大于最高分数。';
$string['gradegreatermaxgrade'] = '一个或多个分数大于最高分数。如果在提交观察场次之前编辑了观察点，则可能会发生这种情况。';
$string['gradeitemname'] = '观察场次';
$string['grading'] = '评分';
$string['gradinginstructions'] = '评分指南';
$string['id'] = 'ID';
$string['image'] = '图片';
$string['inprogress'] = '进行中';
$string['instructions'] = '指南';
$string['instructionsobservee'] = '被观察者指南';
$string['instructionsobserver'] = '观察者指南';
$string['intgreaterthanone'] = '必须是大于或等于 1 的整数';
$string['intgreaterthanorzero'] = '必须是大于或等于零的整数';
$string['join'] = '加入';
$string['kickobservee'] = '踢掉被观察者';
$string['markingobservation'] = '评估观察活动';
$string['markingsession'] = '{$a} 观察场次 （观察者）';
$string['maxfilesize'] = '最大证明材料大小 （MB） （小于 1000）';
$string['maxgrade'] = '最高成绩';
$string['messageprovider:cancellationalert'] = '观察时间段已取消';
$string['messageprovider:confirmsignup'] = '你注册的观察场次已确认';
$string['messageprovider:signupreminder'] = '提醒你注册的观察场次';
$string['modulename'] = '观察活动';
$string['modulename_help'] = '创建和管理观察评估标准。该插件主要是为教育设施设计的，作为在需要大量实际工作（如护理和化学等）的课程中执行评估任务的附加方法。';
$string['modulenameplural'] = '观察活动';
$string['monday'] = '星期一';
$string['moreactions'] = '更多操作';
$string['movedown'] = '下移';
$string['moveup'] = '上移';
$string['multipletimeslots'] = '多个时间段';
$string['name'] = '名字';
$string['nextmonth'] = '下个月';
$string['noobservationpoints'] = '由于没有找到要评估的观测点，因此无法开始观测会话。';
$string['noobservee'] = '没有被观察人';
$string['noslotsignedup'] = '你还没有注册一个观察活动场次的时间段。';
$string['notifyon'] = '通知时间';
$string['notownnotification'] = '无法删除通知。用户不是通知的所有者。';
$string['numoffiles'] = '最大的证明材料数量';
$string['obpointtype'] = '响应类型';
$string['observation:addinstance'] = '添加一个新的观察活动';
$string['observation:assignstudents'] = '分配学生';
$string['observation:editobservationpoints'] = '编辑观察点';
$string['observation:edittimeslots'] = '编辑时间段';
$string['observation:performobservation'] = '进行观察';
$string['observation:view'] = '查看观察活动';
$string['observation:viewfiles'] = '查看上传文件';
$string['observationnotfound'] = '没有找到观察活动';
$string['observationpoint'] = '观察点';
$string['observationpoints'] = '观察点';
$string['observationpointtype'] = '观察点类型';
$string['observationsession'] = '{$a} 观察活动场次（被观察者）';
$string['observationsessions'] = '观察活动场次';
$string['observee'] = '被观察者';
$string['observee_email'] = '被观察者邮件';
$string['observee_fullname'] = '被观察者姓名';
$string['observeename'] = '被观察者姓名';
$string['observer'] = '观察者';
$string['observer_email'] = '观察者邮件';
$string['observer_fullname'] = '观察者姓名';
$string['observer_id'] = '观察者';
$string['openeditor'] = '打开编辑器';
$string['opennewtab'] = '在新标签栏打开';
$string['order'] = '顺序';
$string['otherdetails'] = '其他内容';
$string['overallgrade'] = '整体成绩';
$string['pass'] = '通过';
$string['passfailtype'] = '通过 / 失败';
$string['performobservation'] = '进行观察';
$string['placeholder'] = '占位符';
$string['pluginadministration'] = '观察活动模块管理';
$string['pluginname'] = '观察活动';
$string['previewtimeslots'] = '预览时间段';
$string['previoussessions'] = '场次历史记录';
$string['prevmonth'] = '上个月';
$string['privacy:metadata:core_calendar'] = '为时间段管理创建的日历事件';
$string['privacy:metadata:core_files'] = '观察者在观察期间上传的文件';
$string['privacy:metadata:core_message'] = '作为通知发送的消息，其中包含有关观察会话注册的详细信息';
$string['privacy:metadata:observation_point_responses'] = '观测点响应';
$string['privacy:metadata:observation_point_responses:ex_comment'] = '为观察点提供额外说明';
$string['privacy:metadata:observation_point_responses:grade_given'] = '观察点的响应评分';
$string['privacy:metadata:observation_point_responses:response'] = '给出响应（文本、通过或失败、文件）';
$string['privacy:metadata:observation_point_responses:timecreated'] = '首次添加响应的时间';
$string['privacy:metadata:observation_point_responses:timemodified'] = '上次更新响应的时间';
$string['privacy:metadata:observation_sessions'] = '观察活动场次';
$string['privacy:metadata:observation_sessions:ex_comment'] = '观察活动后存储在成绩簿中的额外注释';
$string['privacy:metadata:observation_sessions:finish_time'] = '观察活动的结束时间';
$string['privacy:metadata:observation_sessions:observee_id'] = '被观察者在观察活动开展期间被观察者评估';
$string['privacy:metadata:observation_sessions:observer_id'] = '添加观察活动的观察者';
$string['privacy:metadata:observation_sessions:start_time'] = '观察活动的开始时间';
$string['privacy:metadata:observation_sessions:state'] = '观察活动的状态';
$string['privacy:metadata:observation_timeslots'] = '观察活动的场次时间段';
$string['privacy:metadata:observation_timeslots:duration'] = '观察时间段的时长';
$string['privacy:metadata:observation_timeslots:observee_id'] = '被观察者已分配到该时间段';
$string['privacy:metadata:observation_timeslots:observer_id'] = '观察者已分配到该时间段';
$string['privacy:metadata:observation_timeslots:start_time'] = '观察时间段的开始时间';
$string['processnotifications'] = '处理观察时间段的提醒通知';
$string['randomassignsuccess'] = '已成功将剩余学生分配到时间段。';
$string['randomassignwarning'] = '成功将尽可能多的学生分配到时间段，但是，由于没有剩余的时间段，无法分配 {$a} 名学生。';
$string['randomlyassign'] = '将学生随机分配到时间段。';
$string['receivenotification'] = '接收通知';
$string['refreshlist'] = '刷新列表';
$string['registerdetailsheader'] = '时段注册详情';
$string['registrationcancelled'] = '您对以下时间段的注册已被取消';
$string['registrationtime'] = '注册时间';
$string['reopen'] = '重新开放';
$string['repeatevery'] = '场次开始于每个';
$string['required'] = '必须的';
$string['reregisternewslot'] = '点击此通知底部的链接以注册新的时间段。';
$string['resetfilter'] = '取消过滤器';
$string['responsesaved'] = '响应已保存';
$string['responsesavedbutcannotcontinue'] = '响应已保存，但无法继续，因为没有更多要标记的观测点。如果标记完成，请按 提交观察活动 按钮。';
$string['resume'] = '继续';
$string['returntosession'] = '返回活动场次';
$string['returntosessionlist'] = '返回活动场次列表';
$string['saturday'] = '星期六';
$string['save'] = '保存';
$string['saveandnext'] = '保存并继续';
$string['selecting_observer'] = '选择观察者';
$string['selectingslot'] = '选择时间段';
$string['selectpoint'] = '选择观察点';
$string['sessioncomplete'] = '观察活动已成功结束';
$string['sessiondoesntexist'] = '观察活动场次不存在。';
$string['sessionincomplete'] = '提交观察活动发生错误 - 没有响应  {$a} 个观察点。';
$string['sessionlockouterror'] = '试图开始一个活动场次过快。 开始新场次前请等待 {$a} 秒';
$string['sessionsummary'] = '活动场次汇总';
$string['sessionviewonly'] = '你处于只能查看的模式。';
$string['sesssiondata'] = '场次数据';
$string['settings'] = '设置';
$string['setuptimeslotnotifications'] = '设置通知';
$string['signedupslot'] = '你注册的时间段细节如下。';
$string['signupconfirm'] = '{$a} - 时间段注册确认';
$string['signupfortimeslot'] = '注册一个新时段';
$string['signupreminder'] = '{$a} - 时段注册提醒';
$string['signuptime'] = '注册时间';
$string['start'] = '开始';
$string['startnew'] = '开始新的';
$string['startobservationsession'] = '开始观察活动';
$string['starttime'] = '开始时间';
$string['state'] = '状态';
$string['submitobservation'] = '提交观察活动';
$string['successfulcancel'] = '观察活动已成功取消';
$string['sunday'] = '星期天';
$string['teacher'] = '观察者';
$string['textinputtype'] = '文本输入';
$string['thursday'] = '星期四';
$string['timeslotinfo'] = '时段信息';
$string['timeslotnotifications'] = '时段通知';
$string['timeslots'] = '时段';
$string['timeslotsettings'] = '时段设置';
$string['timeslotsetup'] = '时段设置';
$string['title'] = '标题';
$string['toomanynotifications'] = '不能生成通知。该用户已达最大通知数量的上限。';
$string['tuesday'] = '星期二';
$string['unenrol'] = '退出';
$string['unenrolerrorempty'] = '不能退出时段。时段为空。';
$string['unenrolerrornotuser'] = '不能退出该时段。你并不是注册该时段的用户。';
$string['unenrolnotallowed'] = '你不能把自己移出该时段。';
$string['until'] = '结束时间（不包括）';
$string['upcomingtimeslots'] = '即将到来的时段';
$string['useinterval'] = '使用间隔添加多个时段';
$string['viewsignup'] = '查看可以注册的时段';
$string['viewsummary'] = '查看汇总';
$string['wednesday'] = '星期三';
$string['yourtimeslot'] = '你的时间段';
