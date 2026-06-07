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
 * Strings for component 'tool_usersuspension', language 'zh_cn', version '4.4'.
 *
 * @package     tool_usersuspension
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:confirm-delete-exclusion'] = '是否确实要从排除列表中删除此项目？';
$string['action:delete-exclusion'] = '从排除列表中删除项目';
$string['action:exclude:add:cohort'] = '添加群组排除项';
$string['action:exclude:add:user'] = '添加用户排除';
$string['button:backtocourse'] = '返回课程';
$string['button:backtoexclusions'] = '返回排除项概述';
$string['button:backtouploadform'] = '返回上传页';
$string['button:continue'] = '继续';
$string['config:cleanlogs:disabled'] = '在全局配置中禁用自动日志清理';
$string['config:cleanup:disabled'] = '在全局工具配置中禁用了插件选项 ”cleanup“';
$string['config:fromfolder:disabled'] = '在全局工具配置中禁用了插件选项“suspend from upload folder”';
$string['config:fromfolder:enabled'] = '在全局工具配置中启用了插件选项“suspend from upload folder”';
$string['config:smartdetect:disabled'] = '在全局工具配置中禁用了插件选项 ”smart detection“';
$string['config:tool:disabled'] = '在全局工具配置中禁用插件功能';
$string['config:tool:enabled'] = '在全局工具配置中启用插件功能';
$string['config:unsuspendfromfolder:disabled'] = '在全局工具配置中禁用了插件选项“unsuspend from upload folder”';
$string['config:unsuspendfromfolder:enabled'] = '在全局工具配置中启用了插件选项“从上传文件夹中取消挂起”';
$string['config:uploadfile:exists'] = '上传文件 "{$a}" 已存在';
$string['config:uploadfile:not-exists'] = '上传文件 "{$a}" 不存在';
$string['config:uploadfolder:exists'] = '上传的文件夹 "{$a}" 已存在';
$string['config:uploadfolder:not-exists'] = '上传的文件夹 "{$a}" 不存在';
$string['configoption:notactive'] = '尽管下面有概述规则，但这些设置决定了实际过程是 <i>不会t</i>强制执行的。';
$string['csv:delimiter'] = '分隔符';
$string['csv:enclosure'] = '封装';
$string['csv:upload:continue'] = '继续';
$string['csvdelimiter'] = 'CSV 分隔符';
$string['csvencoding'] = 'CSV 编码';
$string['deleteon'] = '删除时间';
$string['download-sample-csv'] = '下载示例 CSV 文件';
$string['email:user:delete:body'] = '<p>亲爱的 {$a->name}</p>
<p>您的账号已经被删除，因为账号停用了 {$a->timesuspended}</p>
<p>此致<br/>{$a->signature}</p>';
$string['email:user:delete:subject'] = '您的帐号已被删除';
$string['email:user:suspend:auto:body'] = '<p>亲爱的 {$a->name}</p>
<p>您的账号已经被停用，因为您已经有{$a->timeinactive} 没有使用此账号了。</p>
<p>如果您觉得这很意外，或者您希望重新激活账号，请联系 {$a->contact}。</p>
<p>提醒：账号重新启用（激活）后，您需要尽快登录使用一次，以免被再次停用。</p>
<p>此致<br/>{$a->signature}</p>';
$string['email:user:suspend:manual:body'] = '<p>亲爱的 {$a->name}</p>
<p>您的账号已停用。</p>
<p>如果您觉得这很意外，或者您希望重新激活账号，请联系 {$a->contact}</p>
<p>此致<br/>{$a->signature}</p>';
$string['email:user:suspend:subject'] = '您的帐号已被停用';
$string['email:user:unsuspend:body'] = '<p>亲爱的 {$a->name}</p>
<p>您的账号已经重新激活。</p>
<p>如果您觉得很意外，或者希望停用账号，请联系 {$a->contact}</p>
<p>此致<br/>{$a->signature}</p>';
$string['email:user:unsuspend:subject'] = '您的账号已重新激活';
$string['email:user:warning:body'] = '<p>亲爱的 {$a->name}</p>
<p>因为没有使用，您的账号将在 {$a->warningperiod} 后停用</p>
<p>您需要立刻登录 {$a->warningperiod} 以保持您的账号处于活动状态。
为了避免将来再次出现类似情况，请确保 在每 个{$a->suspendinterval} 周期内登录一次系统。</p>
<p>此致<br/>{$a->signature}</p>';
$string['email:user:warning:subject'] = '您的帐号很快将被停用';
$string['err:statustable:set_sql'] = 'set_sql() i被禁用了。这个表是已定义好并且不能自定义';
$string['event:user:suspended'] = '用户已停用。';
$string['excludeuser'] = '将用户排除在处理之外';
$string['form:static:uploadfile:desc'] = '在此处上传包含有停用账号信息的文件<br/>
上传的 CSV 文件可以按如下方式配置：<br/>
<ol>
<li>\'simple\' 文件仅包含电子邮件地址，每行一个</li>
<li>\'smart\' 文件包含 2 列，指示类型和值。<br/>
type 列的可能值为
 .<ul><li>email： 值列表示用户帐户的电子邮件地址</li>
<li>.idnumber： 值列表示用户帐户的 idnumber</li>
<li>username： 值列表示用户帐户的用户名</li><
/ul></ol>';
$string['info:no-exclusion-cohorts'] = '所有群组都已添加到排除列表中。不能再添加更多内容。';
$string['label:users:excluded'] = '排除的用户';
$string['label:users:potential'] = '潜在用户';
$string['link:currentstatus:overview'] = '查看当前状态的变化';
$string['link:exclude:overview'] = '排除项概述';
$string['link:log:overview'] = '查看状态更改日志';
$string['link:upload'] = '上传包括停用账号信息的文件';
$string['link:viewstatus'] = '查看状态列表';
$string['msg:exclusion:cohort:none-selected'] = '未选择排除的群组';
$string['msg:exclusion:record:cohort:inserted'] = '排除群组 \'{$a->name}\' 的条目已成功插入';
$string['msg:exclusion:record:exists'] = '排除条目已存在（未添加记录）';
$string['msg:exclusion:record:inserted'] = '已成功插入排除项';
$string['msg:exclusion:record:user:deleted'] = '成功删除用户 \'{$a->fullname}\' 的排除条目';
$string['msg:exclusion:record:user:inserted'] = '成功添加用户 \'{$a->fullname}\' 的排除条目';
$string['msg:exclusion:records:cohort:deleted'] = '已成功删除群组的排除条目';
$string['msg:exclusion:records:deleted'] = '已成功删除排除项';
$string['msg:exclusion:records:user:deleted'] = '已成功删除用户的排除项';
$string['msg:file-not-readable'] = '无法读取上传的文件 \'{$a}\'';
$string['msg:file-not-writeable'] = '上传文件 \'{$a}\' 不可写或者不能删除';
$string['msg:file-would-delete'] = '上传的文件现在将被删除（如果这不是配置验证）';
$string['msg:file:upload:fail'] = '无法成功保存上传的文件。处理已中止。';
$string['msg:user:not-found'] = '找不到用户';
$string['msg:user:suspend:failed'] = '用户 \'{$a->username}\' 不能被停用';
$string['msg:user:suspend:nosuspendmode'] = '用户 \'{$a->username}\' 未停用（运行在测试模式下）';
$string['msg:user:suspend:success'] = '用户 \'{$a->username}\' 已停用';
$string['msg:user:unsuspend:failed'] = '用户 \'{$a->username}\' 不能被停用';
$string['msg:user:unsuspend:nounsuspendmode'] = '用户 \'{$a->username}\' 未停用（运行在测试模式下）';
$string['msg:user:unsuspend:success'] = '用户 \'{$a->username}\' 成功停用';
$string['notifications:allok'] = '您的配置看起来正确。似乎没有检测到全局配置问题。';
$string['notify:load-exclude-list'] = '加载用户排除列表';
$string['notify:load-file'] = '打开文件 \'{$a}\'';
$string['notify:load-file-fail'] = '不能打开文件 \'{$a}\'';
$string['notify:suspend-excluded-user'] = '用户： {$a->username} (id={$a->id}) 在排除列表呻：没有停用';
$string['notify:suspend-user'] = '正在停用用户： {$a->username} (id={$a->id})';
$string['notify:unknown-suspend-type'] = '未知信用类型标识 \'{$a}\'';
$string['page:view:exclude.php:introduction'] = '<p>此页面显示配置的排除项。<br/>
排除项是完全从任何自动处理中排除的用户或群组。<br/>
当一个群组被排除时，这意味着作为该群组成员的每个用户都将被排除。
使用此页面上的选项将群组或用户添加到排除列表</p>';
$string['page:view:log.php:introduction'] = '下表显示了用户通过自动处理或使用此
工具分配的状态日志。该表将根据您的配置显示用户的暂停状态或已删除状态，以及
执行某些操作的时间戳。';
$string['page:view:notifications.php:introduction'] = '此选项卡显示检测到的用户暂停配置存在的任何潜在问题。';
$string['page:view:statuslist.php:introduction:delete'] = '<p>此概述显示了在此
工具设置</p中配置的时间范围内将被删除的用户帐户>';
$string['page:view:statuslist.php:introduction:status'] = '<p>此概览显示被主动监控的用户。<br/>
主动监控的用户是未配置为从监控中排除的用户。<br/>
此概览与主管理员的概览不同，因为它将<i>不显示</i>使用此工具的排除功能被排除
在暂停监控之外的用户。</p>';
$string['page:view:statuslist.php:introduction:suspended'] = '<p>此概览显示已被暂停的用户账户。</p>';
$string['page:view:statuslist.php:introduction:tosuspend'] = '<p>此概述显示了在此
工具设置的配置时间范围内将被暂停的用户帐户</p>';
$string['pluginname'] = '用户停用';
$string['privacy:metadata:tool_usersuspension:mailedto'] = '已恢复用户的电子邮件地址';
$string['privacy:metadata:tool_usersuspension:mailsent'] = '电子邮件是否已发送';
$string['privacy:metadata:tool_usersuspension:status'] = '停用状态';
$string['privacy:metadata:tool_usersuspension:timecreated'] = '创建记录的时间。';
$string['privacy:metadata:tool_usersuspension:type'] = 'Schorsings exclusion type (altijd \'user\').';
$string['privacy:metadata:tool_usersuspension:userid'] = '已还原其帐户的 Moodle 用户的主键。';
$string['privacy:metadata:tool_usersuspension_excl'] = '用户停用排除项存储从自动暂停中排除的用户';
$string['privacy:metadata:tool_usersuspension_log'] = '用户停用状态存储有关已暂停用户的历史/日志信息';
$string['privacy:metadata:tool_usersuspension_status'] = '用户停用状态存储有关已暂停用户的信息';
$string['promo'] = 'Moodle 的用户停用插件';
$string['promodesc'] = '此插件是 Sebsoft Managed Hosting & Software Development
    (<a href=\'http://www.sebsoft.nl/\' target=\'_new\'>http://sebsoft.nl</a>)所写。<br /><br />
    {$a}<br /><br />';
$string['setting:cleanlogsafter'] = '日志清理频率';
$string['setting:cleanup_deleteafter'] = '删除间隔';
$string['setting:cleanup_interval'] = '清理间隔';
$string['setting:dep:desc:uploaddetect_interval'] = '要更改检查和处理上传文件夹的间隔，
请调整专用计划任务的运行间隔，以完成此任务  <a href="{$a}/admin/tool/task/scheduledtasks.php">此处</a>
（寻找任务 "\\tool_usersuspension\\task\\suspend\\fromfolder" 和 "\\tool_usersuspension\\task\\unsuspend\\fromfolder"）。';
$string['setting:dep:uploaddetect_interval'] = '上传文件夹处理间隔';
$string['setting:desc:cleanlogsafter'] = '配置清理日志的频率。任何早于此设置的日志都将被删除。';
$string['setting:desc:cleanup_deleteafter'] = '设置在暂停后应自动删除用户的时间';
$string['setting:desc:cleanup_interval'] = '设置执行清理的时间间隔';
$string['setting:desc:domainstoexclude'] = '要从暂停和删除中排除的域列表，以逗号分隔';
$string['setting:desc:enablecleanlogs'] = '启用或禁用历史记录日志的自动清理。';
$string['setting:desc:enablecleanup'] = '启用或禁用用户清理';
$string['setting:desc:enabled'] = '启用或禁用暂停用户';
$string['setting:desc:enablefromfolder'] = '启用或禁用自动暂停用户使用存储在上传文件夹中的已上传 CSV 文件';
$string['setting:desc:enablefromupload'] = '启用或禁用用户暂停上传的文件';
$string['setting:desc:enablesmartdetect'] = '启用或禁用智能检测功能。';
$string['setting:desc:enablesmartdetectwarning'] = '启用后，这将通过向用户发送电子邮件来警告用户即将暂停。';
$string['setting:desc:enableunsuspendfromfolder'] = '启用或禁用从上传的 CSV 文件自动重新激活用户';
$string['setting:desc:senddeleteemail'] = '发送电子邮件通知用户其帐户被删除？';
$string['setting:desc:sendsuspendemail'] = '发送电子邮件通知用户其帐户被停用？';
$string['setting:desc:smartdetect_interval'] = '设置智能检测运行之间的时间';
$string['setting:desc:smartdetect_suspendafter'] = '设置停用非活动用户的非活动时间阈值';
$string['setting:desc:smartdetect_warninginterval'] = '设置在暂停前多长时间应通过警告消息提醒用户即将停用。';
$string['setting:desc:unsuspenduploadfilename'] = '设置上传的取消暂停文件的文件名';
$string['setting:desc:uploaddetect_interval'] = '设置检查文件上传文件夹中文件的间隔';
$string['setting:desc:uploadfilename'] = '设置上传文件的文件名，其中包含用户停用';
$string['setting:desc:uploadfolder'] = '设置应通过 FTP 等方式上传文件的文件夹';
$string['setting:domainstoexclude'] = '要排除的域名';
$string['setting:enablecleanlogs'] = '启用日志清理';
$string['setting:enablecleanup'] = '启用清理';
$string['setting:enabled'] = '启用';
$string['setting:enablefromfolder'] = '使用存储的 CSV 文件自动停用用户';
$string['setting:enablefromupload'] = '允许根据上传的文件停用用户';
$string['setting:enablesmartdetect'] = '启用智能检测';
$string['setting:enablesmartdetectwarning'] = '发送有关即将停用的警告电子邮件？';
$string['setting:enableunsuspendfromfolder'] = '使用存储的 CSV 文件自动取消停用用户';
$string['setting:senddeleteemail'] = '发送提醒删除的电子邮件？';
$string['setting:sendsuspendemail'] = '发送提醒停用的电子邮件？';
$string['setting:smartdetect_interval'] = '智能检测间隔';
$string['setting:smartdetect_suspendafter'] = '不活动暂停时间阈值';
$string['setting:smartdetect_warninginterval'] = '警告期';
$string['setting:unsuspenduploadfilename'] = '上传的取消暂停文件的文件名';
$string['setting:uploaddetect_interval'] = '文件上传文件夹处理间隔';
$string['setting:uploadfilename'] = '已上传的停用用户文件的文件名';
$string['setting:uploadfolder'] = '文件上传文件夹的位置';
$string['status:deleted'] = '已删除';
$string['status:suspended'] = '已停用';
$string['status:unsuspended'] = '取消停用';
$string['suspend'] = '停用';
$string['suspendmode'] = '处理模式';
$string['suspendon'] = '停用于';
$string['suspensionsettings'] = '用户停用设置';
$string['suspensionsettingscleanup'] = '清理';
$string['suspensionsettingscleanupdesc'] = '在下面配置清理设置。<br/>
清理过程进一步自动化用户清理，这意味着使用此选项时，暂停的用户帐户将被删除
。如果用户帐户应在一段时间后自动删除，则应配置这些设置。
如果不应自动删除用户帐户，则应关闭此选项。';
$string['suspensionsettingsfolder'] = '依据上传文件夹中的文件停用用户';
$string['suspensionsettingsfolderdesc'] = '配置下面的“依据上传文件夹中的文件停用用户”文件夹的设置。<br/>
使用这些设置，您可以通过将 CSV 文件上传到服务器上的
随机位置（例如专用 FTP 文件夹）来自动暂停用户。CSV 文件将根据以下设置进行处理。
注意：上传的 CSV 文件将在处理后被删除！';
$string['suspensionsettingssmartdetect'] = '智能检测';
$string['suspensionsettingssmartdetectdesc'] = '配置下面的智能检测设置。<br/>
智能检测将根据以下设置自动暂停被发现为“非活动”的用户账户。
“智能检测”仅按配置的间隔运行，它将根据配置的“不活动暂停时间阈值”设置确定用户帐户是否
处于活动状态，并将暂停发现处于非活动状态的所有用户帐户。';
$string['suspensionsettingsupload'] = '依据上传的文件内容停用用户';
$string['suspensionsettingsuploaddesc'] = '配置下面的“依据上传的文件内容停用用户”设置';
$string['tab:notifications'] = '配置检查';
$string['table:exclusions'] = '排除';
$string['table:log:all'] = '历史停用日志';
$string['table:log:latest'] = '最新的停用日志';
$string['table:logs'] = '日志';
$string['table:status:delete'] = '要删除的用户';
$string['table:status:status'] = '主动监测用户';
$string['table:status:suspended'] = '已停用的用户';
$string['table:status:tosuspend'] = '要停用的用户';
$string['task:delete'] = '用户停用任务：自动删除已停用的用户';
$string['task:fromfolder'] = '用户停用任务：依据上传文件夹中的文件自动停用用户';
$string['task:logclean'] = '清理用户停用日志';
$string['task:mark'] = '用户停用任务：自动停用用户';
$string['task:unsuspendfromfolder'] = '用户停用任务：依据上传文件夹中的文件自动激活（取消停用）用户';
$string['testfromfolder'] = '测试无人值守处理';
$string['testfromfolder:suspend'] = '测试无人值守停用用户（从文件夹）';
$string['testfromfolder:unsuspend'] = '测试无人值守取消停用用户（从文件夹）';
$string['testing:suspendfromfolder'] = '测试“依据文件夹停用用户”的配置';
$string['testing:unsuspendfromfolder'] = '测试“依据文件夹取消停用用户”的配置';
$string['thead:action'] = '操作';
$string['thead:deletein'] = '删除于';
$string['thead:email'] = '电邮';
$string['thead:lastlogin'] = '最后登录';
$string['thead:mailedto'] = '已发送邮件给';
$string['thead:mailsent'] = '邮件已发送';
$string['thead:name'] = '名字';
$string['thead:status'] = '状态';
$string['thead:suspendin'] = '停用于';
$string['thead:timecreated'] = '生成时间';
$string['thead:timedetect'] = '检测基于';
$string['thead:timemodified'] = '时间已修改';
$string['thead:type'] = '类型';
$string['thead:userid'] = '用户识别号';
$string['thead:username'] = '用户名';
$string['unsuspend'] = '停用';
$string['usersuspension:administration'] = '用户停用模块管理';
$string['usersuspension:viewstatus'] = '查看用户停用状态';
