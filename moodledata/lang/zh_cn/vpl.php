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
 * Strings for component 'vpl', language 'zh_cn', version '4.4'.
 *
 * @package     vpl
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['VPL_COMPILATIONFAILED'] = '编译或准备执行失败';
$string['about'] = '关于';
$string['acceptcertificates'] = '接受自签名证书';
$string['acceptcertificates_description'] = '如果执行服务器不使用自签名证书，请取消选中此选项';
$string['addfile'] = '添加文件';
$string['addoverride'] = '添加覆盖';
$string['advanced'] = '高级';
$string['allfiles'] = '所有文件';
$string['allsubmissions'] = '所有提交';
$string['always_use_ws'] = '始终使用未加密（ws）的 websocket 协议';
$string['always_use_wss'] = '始终使用加密（wss）的 websocket 协议';
$string['anyfile'] = '任何文件';
$string['archive'] = '存档';
$string['archivereplace'] = '仅替换存档中存在的文件';
$string['archivereplacedelete'] = '替换所有文件，删除存档中不存在的文件';
$string['attemptnumber'] = '尝试次数 {$a}';
$string['autodetect'] = '自动检测';
$string['automaticevaluation'] = '自动评分';
$string['automaticgrading'] = '自动评分';
$string['automaticgrading_help'] = '若设为是，则自动评分的成绩即为此活动的成绩。
若设为否，则此活动将不会使用任何成绩；教师必须审核成绩并手动应用。';
$string['averageperiods'] = '平均周期 {$a}';
$string['averagetime'] = '平均时间 {$a}';
$string['basedon'] = '基于';
$string['basedon_chain_broken'] = '错误：基于活动的关系链断裂。请检查所基于的活动。';
$string['basedon_deleted'] = '错误：所基于的活动缺失（已被删除？）。请设置所基于活动。';
$string['basedon_help'] = '此选项描述了执行脚本的继承系统。
执行脚本将被连接，首先是父脚本（基础脚本），然后是子脚本（此 VPL）。可以链式连接多个基础脚本，从而产生多次连接。';
$string['basedon_missed'] = '所基于的活动在恢复/导入时被遗漏。请包含 "{$a}"';
$string['basic'] = '基础';
$string['binaryfile'] = '二进制文件';
$string['breakpoint'] = '断点';
$string['browserupdate'] = '请将您的浏览器更新到最新版本<br />或使用支持 Websocket 的其他浏览器。';
$string['calculate'] = '计算';
$string['calculate_help'] = '根据教师评语降分。
降分的规则为 <pre>- 文本 (-分数)</pre>（一行）。';
$string['calendardue'] = 'VPL 提交截止';
$string['calendarexpectedon'] = 'VPL 提交预期';
$string['changesNotSaved'] = '更改未保存';
$string['check_jail_servers'] = '检查执行服务器';
$string['check_jail_servers_help'] = '<p>此页面检查并显示本活动所使用执行服务器的状态。</p>';
$string['checkforcourse'] = '检查课程 {$a}';
$string['checkgroups'] = '检查组一致性';
$string['checksitewide'] = '检查全站';
$string['clicktoshow'] = '单击显示';
$string['clipboard'] = '剪贴板';
$string['closed'] = '关闭';
$string['comments'] = '评论';
$string['compilation'] = '编译';
$string['concatenatedscripts'] = '连接执行脚本';
$string['concatenatedscripts_help'] = '此页面显示执行脚本的实际内容。如果此 VPL 基于其他 VPL，则脚本会连接。如果任何脚本为空，则使用默认脚本。';
$string['confirmoverridedeletion'] = '您确定要删除此覆盖集吗？';
$string['connected'] = '已连接';
$string['connecting'] = '连接中';
$string['connection_closed'] = '连接已关闭';
$string['connection_fail'] = '连接失败';
$string['console'] = '控制台';
$string['control'] = '控制';
$string['copy'] = '复制';
$string['copy_help'] = '复制此提交到自己的编辑器（在新窗口中打开）';
$string['copytoclipboard'] = '复制到剪贴板';
$string['copytoclipboarderror'] = '无法复制到剪贴板。';
$string['copytoclipboardsuccess'] = '已成功复制！';
$string['create_new_file'] = '创建新文件';
$string['crontask'] = 'VPL 后台处理';
$string['crontask_check_vpljs'] = '报告 VPL 后端服务器';
$string['currentstatus'] = '当前状态';
$string['cut'] = '剪切';
$string['datesubmitted'] = '提交日期';
$string['debug'] = '调试';
$string['debugging'] = '调试中';
$string['debugscript'] = '调试脚本';
$string['debugscript_help'] = '选择在此活动中使用的调试脚本';
$string['defaultevaluatescript'] = '默认评测脚本';
$string['defaultexefilesize'] = '默认执行文件的最大大小';
$string['defaultexememory'] = '默认最大内存使用量';
$string['defaultexeprocesses'] = '默认最大进程数';
$string['defaultexetime'] = '默认最长执行时间';
$string['defaultfilesize'] = '默认最大上传文件大小';
$string['defaultresourcelimits'] = '默认执行资源限制';
$string['defaultscriptforlang'] = '默认脚本为语言 {$a->pln}（{$a->origin}）';
$string['defaultvalue'] = '默认（{$a}）';
$string['delete'] = '删除';
$string['delete_file_fq'] = '删除文件 ”{$a}“ ？';
$string['delete_file_q'] = '删除文件？';
$string['deleteallsubmissions'] = '删除所有提交';
$string['deletefile'] = '删除文件';
$string['depends_on_https'] = '基于使用_http 或_https而决定使用_ws 或_wss';
$string['description'] = '描述';
$string['determinedfromrequiredfiles'] = '从所需文件中确定';
$string['diff'] = '差异';
$string['directory_not_renamed'] = '目录 ”{$a}“ 未被重命名';
$string['disabled'] = '禁用';
$string['discard_submission_period'] = '丢弃提交期';
$string['discard_submission_period_description'] = '对于每个学生和作业，系统尝试丢弃提交。系统保留最后一个提交，并且每个周期至少保留一个提交。';
$string['dograde'] = '保存成绩';
$string['donotshowagain'] = '禁用当前页面的这些消息';
$string['download'] = '下载';
$string['downloadallsubmissions'] = '下载所有提交';
$string['downloadsubmissions'] = '下载提交';
$string['duedate'] = '截止日期';
$string['dueevent'] = '{$a} 提交截止';
$string['dueeventaction'] = '开发/提交';
$string['edit'] = '编辑';
$string['editing'] = '编辑中';
$string['editortheme'] = '编辑主题';
$string['error:inconsistency'] = '发现不一致：\'{$a}\'';
$string['error:invalidevaluator'] = '无效的VPL评测插件（{$a}）：已禁用或缺失';
$string['error:recordnotdeleted'] = '记录未删除 \'{$a}\'';
$string['error:recordnotinserted'] = '未插入记录 \'{$a}\'';
$string['error:recordnotupdated'] = '记录未更新 \'{$a}\'';
$string['error:recursivedefinition'] = '基于 VPL 定义的递归';
$string['error:uninstalling'] = '卸载 VPL 时出错。所有数据可能未被完全删除。';
$string['error:zipnotfound'] = '未找到 ZIP 文件';
$string['evaluate'] = '评测';
$string['evaluate_help'] = '运行自动评测';
$string['evaluateonsubmission'] = '评测文件提交';
$string['evaluateonsubmission_help'] = '若设置为是，则在通过“提交”标签提交文件时进行评测。这不会影响通过“编辑”标签的提交。';
$string['evaluating'] = '评测中';
$string['evaluation'] = '评测';
$string['evaluation_mode'] = '评测模式';
$string['evaluation_mode:default'] = '在终端模式下评测（默认）';
$string['evaluation_mode:textingui'] = '在图形模式下评测';
$string['evaluation_mode_help'] = '此活动的评测模式。
<b>默认</b>：在终端模式下评测（原始行为）。
<b>图形终端</b>：在图形模式下评估程序。<br>
<b>注意</b>：自定义脚本可以忽略此设置。<br>';
$string['evaluator'] = '评测器';
$string['evaluator_help'] = '在此活动中选择要使用的评测框架。<br>使用默认设置以使用原始 BIOTES 评测器。<br>使用 GIOTES 以使用与默认设置兼容的新评测框架。';
$string['examples'] = '样例';
$string['execution'] = '执行';
$string['executionfiles'] = '执行文件';
$string['executionfiles_help'] = '<p>此处您可设置准备执行所需的文件、调试或评测所需的文件。这包括脚本文件、程序测试文件和数据文件。</p> <p>若您未为运行或调试提交设置脚本文件，系统将根据您使用的语言（基于文件名扩展名）自动识别，并使用预定义的脚本。</p>';
$string['executionoptions'] = '执行选项';
$string['executionoptions_help'] = '<p>本页设置了多种执行选项</p>
<ul>
<li><b>基于</b>: 设置其他 VPL 实例，从中导入某些功能:
<ul><li>执行文件（连接预定义的脚本文件）</li>
<li>执行资源的限制。</li>
<li>变体，用于连接生成多种变体。</li>
<li>每个提交时上传的文件的最大长度</li>
</ul>
</li>
<li><b>运行</b>, <b>调试</b>和<b>评测</b>: 若在编辑提交时可以执行相应的操作，必须设置为"是"。这仅影响学生，具有评分权限的用户始终可以执行这些操作。</li>
<li><b>文件提交后评测</b>: 上传文件时自动评测。</li>
<li><b>自动评分</b>: 若评测结果包含评分代码，则使用这些代码自动设置分数。</li>
</ul>';
$string['file'] = '文件';
$string['fileNotChanged'] = '文件未更改';
$string['file_name'] = '文件名';
$string['fileadded'] = '文件 \'{$a}\' 已添加';
$string['filedeleted'] = '文件 \'{$a}\' 已被删除';
$string['filelist'] = '文件列表';
$string['filenotadded'] = '文件尚未添加';
$string['filenotdeleted'] = '文件 \'{$a}\' 未被删除';
$string['filenotrenamed'] = '文件 \'{$a}\' 未被重命名';
$string['filerenamed'] = '文件 \'{$a->from}\' 已被重命名为 \'{$a->to}\'';
$string['filesChangedNotSaved'] = '文件已更改，但尚未保存';
$string['filesNotChanged'] = '文件未更改';
$string['filestoscan'] = '扫描文件';
$string['fileupdated'] = '文件 \'{\\$a}\' 已更新';
$string['finalreduction'] = '最终简化';
$string['finalreduction_help'] = '<b>FR [NE/FE R]</b><br>
<b>FR</b> 最终成绩降低。
<b>NE</b> 学生请求自动评测。<br>
<b>FE</b> 允许自由评测。<br>
<b>R</b> 评估扣分。如果是百分比，则应用于先前结果。<br>';
$string['find'] = '查找';
$string['find_replace'] = '查找/替换';
$string['freeevaluations'] = '自由评测';
$string['freeevaluations_help'] = '不降低最终分数的自动评测数量';
$string['fromthisvpl'] = '自此 VPL（{$a}）';
$string['fromvpl'] = '自 VPL {$a}';
$string['fulldescription'] = '完整描述';
$string['fulldescription_help'] = '<p>您必须在此处为活动编写完整描述。</p>
<p>若您在此处未输入任何内容，将显示简短描述。</p>
<p>若需自动评测，作业页必须详细且无歧义。</p>';
$string['fullscreen'] = '全屏';
$string['functions'] = '功能';
$string['generatedshebang'] = '生成，因为没有指定Shell';
$string['getjails'] = '获取执行服务器';
$string['gradeandnext'] = '保存 & 下一步';
$string['graded'] = '已评分';
$string['gradedbyuser'] = '由用户评分';
$string['gradedon'] = '评测于';
$string['gradedonby'] = '由{$a->gradername}于{$a->date}评审';
$string['gradeitem:submissions'] = '提交';
$string['gradenotremoved'] = '成绩未被删除。请检查成绩簿中的活动配置。';
$string['gradenotsaved'] = '成绩未被保存。请检查成绩簿中的活动配置。';
$string['gradeoptions'] = '评分选项';
$string['grader'] = '评测机';
$string['gradercomments'] = '评估报告';
$string['graderemoved'] = '成绩已被移除';
$string['gradesaved'] = '成绩已保存';
$string['gradesaved_redirect'] = '成绩已保存。此页面应自动跳转。';
$string['groupwork'] = '小组作业';
$string['importfromlastgradedsub'] = '从上次评分提交导入';
$string['importfromlastmgradedsub'] = '从上次手动评分的提交导入';
$string['importgrade'] = '导入成绩和评语';
$string['importgrade_help'] = '导入成绩、评语以及（若适用）高级评分从之前的评分提交中。<br>
此操作只会填写表单，不会提交数据。';
$string['inconsistentgroup'] = '您不属于仅一个组（0 o >1）';
$string['incorrect_directory_name'] = '错误的目录名称';
$string['incorrect_file_name'] = '文件名错误';
$string['indicator:cognitivedepth'] = 'VPL 认知';
$string['indicator:cognitivedepth_help'] = '此指标基于学生在 VPL 活动中达到的认知深度。';
$string['indicator:socialbreadth'] = 'VPL 社交';
$string['indicator:socialbreadth_help'] = '此指标基于学生在 VPL 活动中达到的社会广度。';
$string['individualwork'] = '个人作业';
$string['inheritancechain'] = '继承链：';
$string['inheritvalue'] = '继承（{$a}）';
$string['inputoutput'] = '输入/输出';
$string['instanceselection'] = 'VPL 选择';
$string['intermediate'] = '中级';
$string['isexample'] = '此活动作为示例';
$string['jail_servers'] = '执行服务器列表';
$string['jail_servers_config'] = '执行服务器配置';
$string['jail_servers_description'] = '每台服务器一行';
$string['joinedfiles'] = '已加入所选文件';
$string['keepcurrentfile'] = '保留当前文件';
$string['keepfiles'] = '运行时保留的文件';
$string['keepfiles_help'] = '<p>出于安全考虑，在运行文件 vpl_execution 之前，作为“执行文件”添加的文件会被删除。</p>
若这些文件在执行过程中需要（例如，用作测试数据），则必须在此处标记。';
$string['keyboard'] = '键盘';
$string['lasterror'] = '最后一次错误信息';
$string['lasterrordate'] = '最后错误日期';
$string['listofcomments'] = '评论列表';
$string['lists'] = '列表';
$string['listsimilarity'] = '找到的相似列表';
$string['listwatermarks'] = '水印列表';
$string['load'] = '加载';
$string['loading'] = '加载中';
$string['local_jail_servers'] = '本地执行服务器';
$string['local_jail_servers_help'] = '<p>在此您可设置为此活动及其派生活动添加的本地执行服务器。</p> <p>每行输入一个服务器的完整 URL。您可以使用空行，并以“#”开头的行添加注释。</p> <p>该活动将使用以下执行服务器列表：此处设置的服务器，加上“基于”其他活动中设置的服务器列表，以及通用执行服务器列表。 如果您希望此活动及其派生活动不使用其他服务器，则需要在服务器列表的末尾添加一行，内容为 “end_of_jails”。</p>';
$string['manualgrading'] = '手动评分';
$string['math'] = '数学';
$string['maxexefilesize'] = '最大执行文件大小';
$string['maxexememory'] = '最大内存使用';
$string['maxexeprocesses'] = '最大进程数';
$string['maxexetime'] = '最大执行时间';
$string['maxfiles'] = '最大文件数';
$string['maxfilesexceeded'] = '超过最大文件数';
$string['maxfilesize'] = '最大上传文件大小';
$string['maxfilesizeexceeded'] = '文件大小超出最大限制';
$string['maximumperiod'] = '最大周期 {$a}';
$string['maxpostsizeexceeded'] = '超出服务器最大 POST 数据大小限制。请删除文件或减小文件大小';
$string['maxresourcelimits'] = '最大执行资源限制';
$string['maxsimilarityoutput'] = '相似度最大输出';
$string['menucheck_jail_servers'] = '检查执行服务器';
$string['menuexecutionfiles'] = '执行文件';
$string['menuexecutionoptions'] = '选项';
$string['menukeepfiles'] = '保留的文件';
$string['menulocal_jail_servers'] = '本地执行服务器';
$string['menuresourcelimits'] = '资源限制';
$string['merge'] = '合并成绩';
$string['merge_help'] = '将当前提出的成绩（来自执行）与高级评分表成绩合并。
<p> 这将成绩设置为：
 <提出的成绩> - <评分表最大分数> * (<提出的成绩> / <最大VPL成绩>) + <评分表分数>。<br> 简单来说，它根据当前提出的成绩来加权评分表分数：一个得分为100%的学生将需要所有评分表分数才能保持100%的成绩；一个得分为0的学生将最终得到他们所获得的所有评分表分数作为最终成绩。
</p>
<p>
高级评分表成绩是通过所有评分表分数的总和计算得出的，然后根据评语进行减分。减分的语法为 <pre>- 文本 (-分数)</pre>（每个减分占一行）。
 </p>';
$string['message::bad_jailserver'] = '未使用，因为需要服务器软件更新。请与系统管理员联系';
$string['message::body_footer_bad_jailservers'] = '要下载 VPL-Jail-System 的最新版本，请访问 VPL for Moodle 主页，并导航到“下载”部分。
请记得使用 URLPATH 和/或 TASK_ONLY_FROM 参数，以增强您的安全设置（推荐做法）。

若要查找使用本地 VPL Jail 服务器的活动，请在表 {prefix}vpl 的字段 jailservers 中进行搜索。';
$string['message::body_header_bad_jailservers'] = '下列 VPL后端服务器**急需**更新VPL后端服务器软件：';
$string['message::subject_bad_jailservers'] = 'Moodle 上 VPL 插件的 \'{$a}\' 服务器重要报告';
$string['messageprovider:bad_jailservers'] = '报告 VPL 后端服务器';
$string['minsimlevel'] = '显示的最小相似度级别';
$string['moduleconfigtitle'] = 'VPL 模块配置';
$string['modulename'] = '虚拟编程实验室';
$string['modulename_help'] = '<p>虚拟编程实验室(VPL)是 Moodle 的一个活动模块，用于管理编程作业，其主要特点包括：
</p>
<ul>
<li>可在浏览器中编辑程序源代码</li>
<li>学生可以在浏览器中交互式运行程序</li>
<li>可运行测试来评测程序</li>
<li>支持查找文件之间的相似性</li>
<li>可设置编辑限制，防止外部文本粘贴</li>
</ul>
<p><a href="http://vpl.dis.ulpgc.es">VPL主页</a></p>';
$string['modulename_link'] = 'mod/vpl/view';
$string['modulenameplural'] = '虚拟编程实验室';
$string['multidelete'] = '多重删除';
$string['nevaluations'] = '{$a} 自动评测完成';
$string['new'] = '新建';
$string['new_file_name'] = '新文件名';
$string['next'] = '下一条';
$string['nojailavailable'] = '没有可用的执行服务器';
$string['noright'] = '您无权访问';
$string['nosubmission'] = '无可用提交';
$string['nosuchsubmission'] = '没有这样的提交';
$string['notexecuted'] = '未执行';
$string['notgraded'] = '未评分';
$string['notsaved'] = '未保存';
$string['novpls'] = '未定义VPL';
$string['nowatermark'] = '自有水印 {$a}';
$string['nsubmissions'] = '{$a} 个提交';
$string['numcluster'] = '集群 {$a}';
$string['open'] = '打开';
$string['operatorsvalues'] = '操作符/值';
$string['opnotallowfromclient'] = '不允许从此设备执行操作';
$string['options'] = '选项';
$string['optionsnotsaved'] = '选项未保存';
$string['optionssaved'] = '选项已保存';
$string['origin'] = '源';
$string['othersources'] = '其他需要添加到扫描的来源';
$string['outofmemory'] = '超出内存限制';
$string['override'] = '覆盖';
$string['override_help'] = '若勾选"覆盖"，此设置将被选定的值覆盖，影响有关用户。';
$string['override_options'] = '覆盖选项';
$string['override_users'] = '受影响的用户';
$string['override_users_help'] = '一个用户/组只能被影响一个覆盖集。<br>
若用户属于一个集合和一个组，而该组又属于另一个集合，则按用户设置优先。<br>
如果用户属于多个受多个集合影响的组，则以表格中第一个为准。';
$string['overridefor'] = '{$a->base} 是针对 {$a->for} 的。';
$string['overrideforgroup'] = '{$a->base} 是 {$a->for} 成员的属性';
$string['overriden'] = '覆盖';
$string['overrides'] = '覆盖';
$string['overrides_help'] = '可为活动设置一组覆盖设置。这些设置将覆盖受影响用户和组的活动设置。';
$string['paste'] = '粘贴';
$string['pause'] = '暂停';
$string['pluginadministration'] = 'VPL 管理';
$string['pluginname'] = '虚拟编程实验室';
$string['pluginnotfound'] = 'VPL 子插件未找到或定义错误：{$a}';
$string['previoussubmissionslist'] = '先前提交列表';
$string['print'] = '打印';
$string['privacy:metadata:vpl'] = '活动信息';
$string['privacy:metadata:vpl:course'] = '课程 ID';
$string['privacy:metadata:vpl:duedate'] = '活动截止日期';
$string['privacy:metadata:vpl:freeevaluations'] = '自由评测次数（不扣分）';
$string['privacy:metadata:vpl:grade'] = '活动成绩';
$string['privacy:metadata:vpl:id'] = '活动识别编号';
$string['privacy:metadata:vpl:name'] = '活动名';
$string['privacy:metadata:vpl:reductionbyevaluation'] = '对每位学生自有评测请求的罚分';
$string['privacy:metadata:vpl:shortdescription'] = '活动简述';
$string['privacy:metadata:vpl:startdate'] = '活动开始日';
$string['privacy:metadata:vpl_assigned_overrides'] = '活动设置信息会覆盖已分配的设置，如果有的话';
$string['privacy:metadata:vpl_assigned_overrides:overrideid'] = '已分配的覆盖 ID';
$string['privacy:metadata:vpl_assigned_overrides:userid'] = '用户数据库 ID';
$string['privacy:metadata:vpl_assigned_overrides:vplid'] = 'VPL 数据库 ID';
$string['privacy:metadata:vpl_assigned_variations'] = '活动变体分配的信息，如有';
$string['privacy:metadata:vpl_assigned_variations:description'] = '分配的变体描述';
$string['privacy:metadata:vpl_assigned_variations:userid'] = '用户数据库 ID。';
$string['privacy:metadata:vpl_assigned_variations:vplid'] = 'VPL 数据库 ID';
$string['privacy:metadata:vpl_running_processes'] = '本活动用户正在运行的进程信息';
$string['privacy:metadata:vpl_running_processes:server'] = '运行任务的服务器';
$string['privacy:metadata:vpl_running_processes:starttime'] = '任务开始运行的日期';
$string['privacy:metadata:vpl_running_processes:userid'] = '用户数据库 ID。';
$string['privacy:metadata:vpl_running_processes:vplid'] = 'VPL 数据库 ID';
$string['privacy:metadata:vpl_submissions'] = '关于尝试/提交的信息及其评估';
$string['privacy:metadata:vpl_submissions:dategraded'] = '提交评测的日期和时间';
$string['privacy:metadata:vpl_submissions:datesubmitted'] = '提交日期和时间';
$string['privacy:metadata:vpl_submissions:debug_count'] = '提交调试次数';
$string['privacy:metadata:vpl_submissions:grade'] = '本次提交的分数。此值可能与成绩簿中的值不匹配。';
$string['privacy:metadata:vpl_submissions:gradercomments'] = '评阅人对此次提交的评论';
$string['privacy:metadata:vpl_submissions:graderid'] = '评分用户数据库 ID';
$string['privacy:metadata:vpl_submissions:groupid'] = '组数据库 ID';
$string['privacy:metadata:vpl_submissions:nevaluations'] = '学生在此提交之前请求自动评测的数量';
$string['privacy:metadata:vpl_submissions:run_count'] = '提交运行次数';
$string['privacy:metadata:vpl_submissions:save_count'] = '提交保存次数';
$string['privacy:metadata:vpl_submissions:studentcomments'] = '学生关于提交的评论';
$string['privacy:metadata:vpl_submissions:userid'] = '用户数据库 ID';
$string['privacy:overridepath'] = '分配的覆盖值';
$string['privacy:runningprocesspath'] = '运行进程{$a}';
$string['privacy:submissionpath'] = '提交{$a}';
$string['privacy:variationpath'] = '分配的变体';
$string['proposedgrade'] = '提议成绩：{$a}';
$string['proxy'] = '代理';
$string['proxy_description'] = '从 Moodle 到执行服务器的代理';
$string['redo'] = '重做';
$string['reductionbyevaluation'] = '自动评测减少';
$string['reductionbyevaluation_help'] = '将最终成绩按每个学生请求的自动评测减少一定值或百分比';
$string['regularscreen'] = '常规屏幕';
$string['removeallsubmissions'] = '删除所有提交和评分';
$string['removeallsubmissions_help'] = '删除所选课程中所有 VPL 活动的所有提交和评分';
$string['removebreakpoint'] = '移除断点';
$string['removegrade'] = '移除成绩';
$string['removegroupoverrides'] = '移除分配给组的覆盖';
$string['removegroupoverrides_help'] = '删除所有分组分配的覆盖，覆盖定义未删除';
$string['removeoverrides'] = '移除所有覆盖';
$string['removeoverrides_help'] = '删除所选课程中所有 VPL 活动的所有覆盖';
$string['removeuseroverrides'] = '移除分配给用户的覆盖';
$string['removeuseroverrides_help'] = '删除所有用户分配的覆盖，覆盖定义未被删除';
$string['rename'] = '重命名';
$string['rename_directory'] = '重命名目录';
$string['rename_file'] = '重命名文件';
$string['renameuploadedfile'] = '重命名上传的文件';
$string['replace_find'] = '替换/查找';
$string['replacefile'] = '替换内容';
$string['replacenewer'] = '一个更新版本已经被保存。\\n 您想要用这个版本替换更新版本吗？';
$string['requestedfiles'] = '请求的文件';
$string['requestedfiles_help'] = '<p>在此为请求的文件设置名称及其初始内容，最多不超过活动基本描述中设置的文件数量。</p>
<p>若您不为所有文件设置名称，未命名的文件是可选的，可以有任何名称。</p>
<p>您也可向请求的文件添加内容，若先前其未提交，则这些内容将在其首次打开编辑器时可用。</p>';
$string['requirednet'] = '需要网络地址';
$string['requirednet_help'] = 'VPL 访问可能通过指定以逗号分隔的 IP 地址部分或完整数字列表，限制在局域网或互联网上的特定子网。这可以确保只有特定位置的人可以访问 VPL。';
$string['requiredpassword'] = '需要密码';
$string['reset'] = '重置 VPL 活动';
$string['resetfiles'] = '重置文件';
$string['resetvpl'] = '重置 VPL 提交在{$a}';
$string['resourcelimits'] = '资源限制';
$string['resourcelimits_help'] = '<p>您可设置执行时间、内存使用量、执行文件大小以及同时执行的进程数量限制。</p>
<p>这些限制在运行脚本文件 vpl_run.sh、vpl_debug.sh 和 vpl_evaluate.sh 以及它们构建的文件 vpl_execution 时使用。</p>
<p>若此活动基于其他活动，其限制可能会受到基础活动及其祖先中设置的限制或模块的全局配置中设置的限制的影响。</p>';
$string['restrictededitor'] = '禁用外部文件上传、粘贴和拖放外部内容';
$string['resume'] = '简历';
$string['retrieve'] = '获取结果';
$string['returntoownactivity'] = '返回自己的活动';
$string['run'] = '运行';
$string['run_mode'] = '运行模式';
$string['run_mode:default'] = '自动检测运行模式（默认）';
$string['run_mode:gui'] = '在图形终端中运行';
$string['run_mode:text'] = '在文本终端中运行';
$string['run_mode:textingui'] = '在图形终端中运行文本程序';
$string['run_mode:webapp'] = '以 Web 应用程序运行';
$string['run_mode_help'] = '选择此活动的运行模式。<br>
<b>默认</b>：使用自动检测运行（原始行为）。
在此模式下，在代码文件开头注释中使用 @vpl_run_[text|gui|webapp|textingui]_mode 来选择运行模式。<br>
<b>文本</b>：在文本终端中运行（无图形用户界面）。<br>
<b>图形</b>：在图形终端（GUI）中运行。<br>
<b>Webapp</b>：作为 Web 程序运行（无需终端）。<br>
<b>图形中的文本</b>：在图形终端（GUI）中运行文本程序。<br>
<b>注</b>：并非所有模式都适用于所有语言。<br>
自定义脚本可忽略此设置。';
$string['running'] = '运行中';
$string['runscript'] = '运行脚本';
$string['runscript_help'] = '选择在此活动中使用的运行脚本';
$string['save'] = '保存';
$string['savecontinue'] = '保存并继续';
$string['saved'] = '已保存';
$string['savedfile'] = '文件\'{\\$a}\'已保存';
$string['saveforotheruser'] = '确定为其他用户保存提交？';
$string['saveoptions'] = '保存选项';
$string['saving'] = '保存中';
$string['scanactivity'] = '活动';
$string['scandirectory'] = '目录';
$string['scanningdir'] = '扫描目录中...';
$string['scanoptions'] = '扫描选项';
$string['scanother'] = '扫描新增来源中的相似内容';
$string['scanzipfile'] = 'Zip 文件';
$string['search:activity'] = '虚拟编程实验室 - 活动信息（名称和描述）';
$string['sebkeys'] = 'SEB 考试密钥';
$string['sebkeys_help'] = '从.seb 文件获得的 SEB 考试密钥（最多 3 个）<br>比仅浏览器检查更可靠。<br>https://safeexambrowser.org';
$string['sebrequired'] = '需要安全考试浏览器(SEB)';
$string['sebrequired_help'] = '需要正确配置的 SEB 浏览器';
$string['select_all'] = '全选';
$string['selectbreakpoint'] = '选择断点';
$string['server'] = '服务器';
$string['serverexecutionerror'] = '服务器执行错误';
$string['setbyexecutionoptions'] = '由执行选项设置';
$string['shortcuts'] = '键盘快捷键';
$string['shortdescription'] = '简短描述';
$string['showparentfiles'] = '显示父文件';
$string['shrightpanel'] = '显示/隐藏右侧面板';
$string['similarity'] = '相似度';
$string['similarto'] = '类似于';
$string['start'] = '开始';
$string['startanimate'] = '开始动画';
$string['startdate'] = '可用自';
$string['starting'] = '开始';
$string['step'] = '步骤';
$string['stop'] = '停止';
$string['submission'] = '提交';
$string['submissionperiod'] = '提交期';
$string['submissionrestrictions'] = '提交限制';
$string['submissions'] = '提交列表';
$string['submissions_graded_overview'] = '<b>{$a->name}</b>: {$a->ugcount} / {$a->subcount} ({$a->subpercent}%) / {$a->gradedcount} ({$a->gradedpercent}%) - {$a->notgradedcount} ({$a->notgradedpercent}%)';
$string['submissions_graded_overview_help'] = '[students or grupos count]<br>
/ [submissions count]（提交的学生或小组百分比）<br>
 / [graded count]（已评分提交的百分比）<br>
 - [not graded count]（未评分提交的百分比）';
$string['submissions_overview'] = '<b>{$a->name}</b>: {$a->ugcount} / {$a->subcount} ({$a->subpercent}%)';
$string['submissions_overview_help'] = '学生或小组数量 / 提交数量（提交的学生或小组所占百分比）';
$string['submissionselection'] = '提交选择';
$string['submissionslist'] = '提交列表';
$string['submissionview'] = '提交视图';
$string['submitarchive'] = '提交存档';
$string['submitfiles'] = '提交文件';
$string['submitmethod'] = '提交方法';
$string['submittedby'] = '由 {$a} 提交';
$string['submittedon'] = '提交于';
$string['submittedonp'] = '提交于 {$a}';
$string['subplugintype_vplevaluator'] = 'VPL 提交评测器';
$string['subplugintype_vplevaluator_plural'] = 'VPL 提交评测器';
$string['sureresetfiles'] = '您是否要丢弃所有工作并将文件重置为初始状态？';
$string['test'] = '测试活动';
$string['testcases'] = '测试样例';
$string['testcases_help'] = '此功能允许运行学生的程序，并针对给定的输入检查其输出。要设置评测样例，您需要填写文件 “vpl_evaluate.cases”。
该文件的格式如下：
<ul>
<li><b>case</b> = 样例描述：表示一个测试样例定义的开始。</li>
<li><b>input</b> = 文本：可使用多行，以下个指令结束。</li>
<li><b>output</b> = 文本：可使用多行，以下个指令结束。一个用例可有多个正确输出。输出有三种类型：数字、文本和精确文本：
<ul>
<li><b>数字</b>：定义为数字序列（整数或浮点数）。仅检查输出中的数字，其它文本将被忽略。浮点数比较时允许一定误差。</li>
<li><b>文本</b>：定义为不带双引号的文本。仅检查单词，其它字符被忽略，不区分大小写。</li>
<li><b>精确文本</b>：定义为带双引号的文本。将严格按照完全匹配来验证输出。</li>
</ul>
</li>
<li><b>grade reduction = [值|百分比%]"</b>：默认情况下，出错将按 (成绩范围/用例数) 扣分。但通过此指令，您可以自定义扣分值或百分比。</li>
 </ul>';
$string['text'] = '文本';
$string['timeleft'] = '剩余时间';
$string['timelimited'] = '时间限制';
$string['timeout'] = '超时';
$string['timeshift'] = 'VPL 中的日期已调整{$a}';
$string['timespent'] = '花费的时间';
$string['timespent_help'] = '在此活动上花费的时间基于保存的版本<br>条形图显示了每个时间段的学生数量。';
$string['timeunlimited'] = '无时间限制';
$string['totalnumberoferrors'] = '错误';
$string['undo'] = '撤销';
$string['unexpected_file_name'] = '文件名错误：预期为 \'{\\$a->expected}\'，实际找到 \'{\\$a->found}\'';
$string['unzipping'] = '解压中...';
$string['update'] = '更新';
$string['updating'] = '更新中';
$string['uploadfile'] = '上传文件';
$string['use_xmlrpc'] = '使用 XML-RPC';
$string['use_xmlrpc_description'] = '若启用，系统将使用旧的 XML-RPC 协议而非 JSON-RPC 与 VPL后端服务器 进行通信。若您使用的是 V3.0.0 之前的版本 VPL后端服务器，请设置此选项。';
$string['usevariations'] = '使用变体';
$string['usewatermarks'] = '使用水印';
$string['usewatermarks_description'] = '为学生的文件添加水印（视语言支持情况）';
$string['variables'] = '变量';
$string['variation_n'] = '变体 {$a}';
$string['variation_n_i'] = '变体 {$a->number}: {$a->identification}';
$string['variation_options'] = '变体选项';
$string['variations'] = '变体';
$string['variations_help'] = '<p>您可为某个活动定义一组变体。这些变体将随机分配给学生。</p>
<p>在此您可指明该活动是否包含变体，为变体集设置一个标题，并添加所需的变体。</p>
<p>每个变体包含一个标识码和一个描述。标识码由 <b>vpl_environment.sh</b> 文件使用，用于将分配给每位学生的变体传递给脚本文件。描述部分采用 HTML 格式，用于展示给被分配到相应变体的学生。</p>';
$string['variations_unused'] = '此活动有变体，但已禁用';
$string['variationtitle'] = '变体标题';
$string['varidentification'] = '标识';
$string['visiblegrade'] = '可见';
$string['vpl'] = '虚拟编程实验室';
$string['vpl:addinstance'] = '添加新的 VPL 实例';
$string['vpl:editothersgrades'] = '编辑其他用户完成的评分';
$string['vpl:grade'] = '为 VPL 作业打分';
$string['vpl:manage'] = '管理 VPL 作业';
$string['vpl:setjails'] = '为特定 VPL 实例设置执行服务器';
$string['vpl:similarity'] = '搜索 VPL 作业相似度';
$string['vpl:submit'] = '提交 VPL 作业';
$string['vpl:view'] = '查看完整的 VPL 作业描述';
$string['vpl_debug.sh'] = '此脚本用于准备调试';
$string['vpl_evaluate.cases'] = '评测测试样例';
$string['vpl_evaluate.sh'] = '此脚本准备评测';
$string['vpl_run.sh'] = '此脚本准备执行';
$string['webservice'] = 'Web 服务';
$string['webservice_help'] = '此 Web 服务可用于检索和提交 VPL 活动的文件。';
$string['webserviceglobal'] = '全球 VPL Web 服务';
$string['webserviceglobal_help'] = '以下个人令牌是永久的，可以在平台上的任何 VPL 中使用，使用给定的Web服务 URL。';
$string['webservicelocal'] = '本地 VPL Web 服务';
$string['webservicelocal_help'] = '以下个人令牌仅可用于此 VPL。它是临时的，很可能会在接下来的 24 小时内或会话结束时重置。';
$string['webserviceloginasnotice'] = '您以其他用户身份登录。他们的具有全局访问权限的个人令牌将不会显示。';
$string['webservicetoken'] = '个人令牌：';
$string['webserviceurl'] = 'Web 服务 URL:';
$string['webserviceurlfull'] = '完整 URL：';
$string['webserviceurlpwdnotice'] = '此 VPL 受密码保护，出于安全原因，该密码不会提供。应将其作为名为"password"的参数添加到提供的 URL 中。';
$string['webservicevplid'] = 'VPL ID:';
$string['websocket_protocol'] = 'WebSocket 协议';
$string['websocket_protocol_description'] = '浏览器用于连接执行服务器的 WebSocket 协议类型（ws:// 或 wss://）。';
$string['workingperiods'] = '工作周期';
$string['worktype'] = '工作类型';
