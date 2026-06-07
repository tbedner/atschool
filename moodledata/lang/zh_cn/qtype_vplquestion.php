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
 * Strings for component 'qtype_vplquestion', language 'zh_cn', version '4.4'.
 *
 * @package     qtype_vplquestion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionaloptions'] = '附加选项';
$string['allornothing'] = '满分或零分';
$string['allowasynceval'] = '允许异步评测';
$string['allowasynceval_desc'] = '若启用，教师将能够配置 VPL 问题通过临时任务进行评测。';
$string['answertemplate'] = '答案模板';
$string['answertemplate_help'] = '此处将作为学生的预填写代码。';
$string['cannotimportquestionvplnotfound'] = '导入警告：VPL 问题 "{$a}" 中指定的 VPL 模块 ID 无效。';
$string['cannotimportquestionvplunreachable'] = '导入警告：VPL Question "{$a}" 中指定的 VPL 不在此课程中。';
$string['cfg:evaluationtries'] = '评测的内部尝试数';
$string['cfg:evaluationtries_help'] = '为避免评测错误，服务器将在评测失败时尝试重新评测。此项为重新评测数。';
$string['choose'] = '选择...';
$string['closerecievednoretrieve'] = '执行服务器中止了操作，因为可能已超出执行资源限制。
原因：{$a}';
$string['compilation'] = '编译：';
$string['correction'] = '正确';
$string['deletesubmissions'] = '删除VPL提交';
$string['deletesubmissions_help'] = '是否在评测时删除所提交的 VPL 问题答案。<br>
注：这将导致在评测时删除相关用户基于的VPL上的所有提交。确保所基于的VPL仅用于本问题。';
$string['editorfontsize'] = '编辑器字体大小：';
$string['editoroptions'] = '编辑器选项';
$string['editortheme'] = '编辑主题：';
$string['errorvplgrade'] = 'VPL 分数未正确设置（应设置为“分数”）。';
$string['evaluating'] = '此问题正在评分中...';
$string['evaluatingsoon'] = '此问题将很快评分...';
$string['evaluatingsoontime'] = '此问题很快将被评分。预计等待时间：{$a}。';
$string['evaluation'] = '评测：';
$string['evaluationdetails'] = '评测详情：';
$string['evaluationerror'] = '评测出错：';
$string['eventquestionasyncevaluated'] = '通过临时任务评测的 VPL 问题';
$string['eventquestionevaluationfailed'] = 'VPL 问题评测失败';
$string['eventquestionevaluationqueued'] = 'VPL 问题评测排队中';
$string['execerror'] = '执行错误：';
$string['execfiles'] = '执行文件';
$string['execfiles_help'] = '您可以在此处编辑执行文件。这些文件仅在评估期间（以及如果文件相同则进行预检查）发送，而在运行期间不发送（除非在 VPL 中指定为“运行时保留”的文件）。
添加文件时，请将它们作为执行文件添加到 VPL 中。<br>
标记为“继承自 VPL”的文件不会被保存，而是使用 VPL 活动中相应的执行文件内容。<br>
<em>遗留</em>：以“UNUSED”开头的文件将实际继承 VPL 文件内容。请考虑使用“继承自 VPL”功能处理这些文件。';
$string['execfilesevalsettings'] = '执行文件和评测设置';
$string['execution'] = '执行错误：';
$string['flagifproblem'] = '若有异议，请标记并联系您的老师。';
$string['gradehaschangedreload'] = '分数可能刚刚更改。您可以 <a {$a->aattr}>重新加载页面</a> 查看新的分数。';
$string['gradetypeerror'] = '看起来评测结果生成了一个非数字的成绩。';
$string['gradingmethod'] = '评分';
$string['gradingmethod_help'] = '确定此题的评分方式。
<ul><li>若选择"全对或全错"，学生将根据是否获得完美的 VPL 成绩来获得该题 100%或 0%的分数。</li>
<li>若选择"按比例"，学生的该题分数将与其 VPL 成绩按比例评分。</li></ul>';
$string['informationtext'] = 'VPL 问题';
$string['inheritfromvpl'] = '继承自 VPL';
$string['lastservermessage'] = '上次执行服务器接收的消息： "{$a}"';
$string['merge'] = '合并';
$string['noanswertag'] = '缺少{{ANSWER}}标签。请在学生代码放置的位置将此标签包含在模板中。';
$string['nogradeerror'] = '在问题评分过程中发生错误（未获得分数）。
{$a}';
$string['nogradenoerror'] = '未引发错误 - 接收到的原始成绩是 "{$a}"。';
$string['noprecheck'] = '无预评测';
$string['noprevplrun'] = '此模板 VPL 无 pre_vpl_run.sh 文件！';
$string['noprevplrun_help'] = 'VPL 问题需要一个包含脚本pre_vpl_run.sh的VPL模板，请参考<a href="https://moodle.org/plugins/qtype_vplquestion" target="_blank">文档</a>编写脚本。';
$string['noreqfile'] = '此VPL模板无所需文件！';
$string['noreqfile_help'] = 'VPL问题需要一个包含必需文件的VPL模板，当前模板不可用。';
$string['overwrite'] = '覆盖';
$string['overwriteexecfile'] = '替换';
$string['pleaseanswer'] = '请提供答案。';
$string['pluginname'] = 'VPL 问题';
$string['pluginname_help'] = 'VPL 问题允许创建简单的编程练习。<br>
它使用 VPL，设计对学生友好。';
$string['pluginnameadding'] = '添加 VPL 问题';
$string['pluginnameediting'] = '编辑 VPL 问题';
$string['pluginnamesummary'] = 'VPL 问题允许创建简单的编程练习。<br>
它使用 VPL，设计对学生友好。';
$string['possiblesolution'] = '可能的解决方案：';
$string['precheck'] = '预测试';
$string['precheckexecfiles'] = '预测试执行文件';
$string['precheckexecfiles_help'] = '您可在此处编辑将用于预测试的执行文件。如需更多信息，请查看"执行文件"的帮助。';
$string['precheckhasownfiles'] = '预测试使用自己的执行文件';
$string['precheckhassamefiles'] = '预测试使用与评测相同的执行文件';
$string['precheckhelp'] = '在测试子集上评测你的答案';
$string['precheckisdebug'] = '预测试即调试';
$string['precheckpreference'] = '预测试偏好设置';
$string['precheckpreference_help'] = '确定学生在答题过程中是否可以访问"预测试"按钮（无限制使用）。
<ul><li>若选择"无预测试"，则不会提供此按钮。</li>
<li>若选择"预测试即调试"，按钮将充当 VPL 上的"调试"按钮。请注意，但它不提供常规的图形界面。</li>
<li>若选择"预测试使用与评测相同的执行文件"，按钮将使用上述执行文件评测答案。</li>
<li>若选择"预测试使用自己的执行文件"，您将能够编辑特定的执行文件，这些文件将用于预测试。这是推荐选项，因为它允许您指定学生在尝试期间可以访问的测试子集。</li></ul>';
$string['privacy:preference:defaultmark'] = '给定问题的默认评分集。';
$string['privacy:preference:deletesubmissions'] = '在问题评测时是否应丢弃 VPL 提交。';
$string['privacy:preference:gradingmethod'] = '评分是否应该根据 VPL 比例评分，或采用满分或零分的方式。';
$string['privacy:preference:penalty'] = '在使用“交互式多尝试”或“自适应模式”行为运行问题时，每次错误尝试的罚分。';
$string['privacy:preference:precheckpreference'] = '”预测试“按钮的行为。';
$string['privacy:preference:useasynceval'] = '是否应通过临时任务异步评测该问题。';
$string['qvplbase'] = 'VPL 问题模板';
$string['reschedule_tasks_for_stranded_questions_task'] = '重新安排滞留问题的临时任务';
$string['run'] = '运行';
$string['scaling'] = '比例评分';
$string['selectavpl'] = '<a href="{$a}">选择一个模板 VPL</a>来编辑执行文件。';
$string['serverexecutionerrorstudentmessage'] = '这可能是由外部因素引起的。请尝试重新评测或联系您的老师。';
$string['serverexecutionerrorteachermessage'] = '这可能是由外部因素引起的，不一定是您操作出错。请尝试重新评测或联系技术支持。';
$string['servermessages'] = '服务器消息：
{$a}';
$string['serverwassilent'] = '执行服务器静默 - 未收到消息';
$string['switchbacktodefaultfile'] = '切换到继承模式';
$string['switchbacktodefaultfileprompt'] = '您即将将文件模式更改为"从 VPL 继承"。这将覆盖问题文件当前的内容。继续吗？';
$string['teachercorrection'] = '教师纠正';
$string['teachercorrection_help'] = '在此处输入您对此问题的纠正。';
$string['templatecontext'] = '编辑模板';
$string['templatecontext_help'] = '您可以在此处编辑将要执行的代码（即所需文件的内容）。<br>
"{{ANSWER}}" 标签将被学生的答案替换。您可以移动标签到您想要的位置，但请不要删除它！';
$string['templatevpl'] = 'VPL模板';
$string['templatevpl_help'] = '选择此问题将基于的 VPL。<br>
<b>注意：</b>请选择一个专门用于此目的的 VPL，特别是如果下面的“删除 VPL 提交”设置为“是”。';
$string['templatevplchange'] = 'VPL模板更改';
$string['templatevplchange_help'] = 'VPL模板代码和执行文件目前包含内容。<br>
更改VPL模板将会覆盖这些内容，除非您决定将当前内容合并到新内容中。<br>';
$string['templatevplchangeprompt'] = '您想对模板和执行文件的当前内容做什么？';
$string['unexpectedendofws'] = '与执行服务器通信意外结束。
原因：{$a}';
$string['unexpectederror'] = '评测时发生意外错误。
{$a}';
$string['useasyncevaluation'] = '使用异步评测';
$string['useasyncevaluation_help'] = '若设置为"是"，评测将由临时的异步任务完成。这使测验响应更迅速。';
$string['validateonsave'] = '验证';
$string['validateonsave_help'] = '若选中，保存此问题前将使用提供的测试样例对提供的代码进行测试。';
$string['vplnotavailablewarning'] = '警告！此问题所基于的 VPL 不可用。此问题可能无法正常运行。';
$string['vplnotfounderror'] = '错误！此问题所基于的 VPL 无法实例化：<br>{$a}';
$string['vplnotincoursewarning'] = '警告！此问题所基于的 VPL 不在本课程中。此问题可能无法正常运行。';
$string['wsconnectionerror'] = '无法连接到服务器。';
$string['wshandshakeerror'] = 'WebSocket 与服务器握手失败。';
$string['wsreaderror'] = '从 WebSocket 读取失败。';
