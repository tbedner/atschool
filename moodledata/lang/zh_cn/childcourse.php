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
 * Strings for component 'childcourse', language 'zh_cn', version '4.4'.
 *
 * @package     childcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoenrol'] = '访问时自动登记';
$string['autoenrol_help'] = '如果启用，插件将在用户通过此活动打开子课程时自动将其注册到子课程中。注册是使用专用的手动注册实例创建的，以便跟踪并在稍后（取决于删除策略）安全地恢复。若禁用，插件将不再尝试自动注册用户。';
$string['childcourse'] = '子课程';
$string['childcourse:addinstance'] = '添加一个新的子课程活动';
$string['childcourse:manage'] = '管理子课程设置';
$string['childcourse:sync'] = '同步子课程的成绩和完成情况';
$string['childcourse:view'] = '查看子课程活动';
$string['childcourse_help'] = '选择将与此活动关联的课程。此选项控制所有规则特定的设置（组、完成规则、活动选择器、成绩同步）。保存活动后，为了保持映射和同步历史记录的一致性，子课程将变得不可变。';
$string['childcoursenotset'] = '尚未设置子课程。';
$string['completionmissing'] = '未启用子课程完成。';
$string['completionrule'] = '基于子课程的完成规则';
$string['completionrule_allactivities'] = '在跟踪的活动全部完成时完成';
$string['completionrule_coursecompleted'] = '当子课程完成时完成';
$string['completionrule_help'] = '定义在用户在子课程中的进度基础上如何将此活动自动标记为完成。

- **什么也不做：** 此活动的完成与子课程完成无关。
- **当子课程完成时：** 一旦子课程完成，此活动也将完成。
- **当跟踪的活动全部完成时：** 子课程中开启完成跟踪的所有活动都必须完成，才会使此活动完成。';
$string['completionrule_none'] = '什么也不做';
$string['enrolinstancename'] = '子课程链接 #{$a}';
$string['error_manualenrolnotavailable'] = '手动 enrolment 插件不可用。';
$string['grade_approval'] = '从以下来源发送成绩';
$string['grade_approval_no'] = '不发送成绩';
$string['grade_approval_yes'] = '使用子课程的成绩';
$string['gradebookmissing'] = '子课程成绩簿未配置（课程总分缺失）。';
$string['hideinmycourses'] = '在我的课程中隐藏子课程';
$string['hideinmycourses_help'] = '如果启用，通过此活动注册的用户在“我的课程”菜单中将隐藏子课程。这有助于加强在本课程中的导航。这一设置仅影响由此插件注册的用户（由插件跟踪）。';
$string['inheritgroups'] = '从父课程继承分组';
$string['inheritgroups_help'] = '如果启用，插件将尝试将父课程中的用户组成员资格复制到子课程，按组名进行匹配。如果子课程中不存在某个组名，可能会创建。在自动注册期间应用此设定。除非稍后实现专门的重新同步流程，否则这不是一个持续同步。';
$string['keeprole'] = '保留 papel（estudante/teacher）';
$string['keeprole_help'] = '如果启用，插件将尝试保持简化的 papel 对等：在父课程中具有教师级权限的用户将注册为教师（如有 editingteacher/teacher），否则，为 estudante。此操作不复制自定义 papel 或复杂的 papel 分配。';
$string['label_childcourse'] = '子课程';
$string['label_lastsynccompletion'] = '上一次完成同步';
$string['label_lastsyncgrade'] = '上一次成绩同步';
$string['lastsync'] = '上一次同步';
$string['lockedcoursewarning'] = '保存后无法更改子课程。';
$string['manage_header_actions'] = '操作';
$string['manage_header_name'] = '名称';
$string['missingcourse'] = '缺少课程';
$string['modulename'] = '子课程';
$string['modulenameplural'] = '子课程';
$string['never'] = '从不';
$string['nogroup'] = '无分组';
$string['openchildcourse'] = '打开子课程';
$string['opennewtab'] = '在新标签页中打开';
$string['opennewtab_help'] = '如果启用，按钮将在新标签页中打开子课程。这不会改变注册或同步行为，只会改变用户打开课程的方式。';
$string['pluginadministration'] = '子课程管理';
$string['pluginname'] = '子课程';
$string['privacy:metadata:childcourse_map'] = '存储由链接课程活动创建的映射数据，以实现安全退课和审计。';
$string['privacy:metadata:childcourse_map:childcourseid'] = '被链接的子课程的ID。';
$string['privacy:metadata:childcourse_map:childcourseinstanceid'] = '链接的课程活动实例的ID。';
$string['privacy:metadata:childcourse_map:groupidsjson'] = '插件分配的子课程分组ID列表（JSON）。';
$string['privacy:metadata:childcourse_map:hiddenprefset'] = '指示插件是否将偏好设置为在我的课程中隐藏子课程。';
$string['privacy:metadata:childcourse_map:manualenrolid'] = '插件用于为用户进行注册的注册实例ID。';
$string['privacy:metadata:childcourse_map:parentcourseid'] = '活动所在父课程的ID。';
$string['privacy:metadata:childcourse_map:roleid'] = '插件在子课程中分配的 papel ID。';
$string['privacy:metadata:childcourse_map:timeenrolled'] = '通过此链接注册的用户的时间。';
$string['privacy:metadata:childcourse_map:timemodified'] = '映射记录的最后修改时间。';
$string['privacy:metadata:childcourse_map:userid'] = '通过链接注册的用户ID。';
$string['privacy:metadata:childcourse_state'] = '存储每个用户的缓存状态以支持增量成绩和完成同步。';
$string['privacy:metadata:childcourse_state:childcourseinstanceid'] = '链接的课程活动实例的ID。';
$string['privacy:metadata:childcourse_state:coursecompleted'] = '缓存的指示器，指示用户是否已满足完成规则。';
$string['privacy:metadata:childcourse_state:coursecompletiontimemodified'] = '用于增量同步的源完成数据的最近修改时间戳。';
$string['privacy:metadata:childcourse_state:finalgrade'] = '缓存的成绩（百分比）已从子课程总分同步。';
$string['privacy:metadata:childcourse_state:grade_source'] = '成绩来源标识符（如 course_total）。';
$string['privacy:metadata:childcourse_state:gradeitemtimemodified'] = '用于增量同步的源成绩项的最近修改时间戳。';
$string['privacy:metadata:childcourse_state:timemodified'] = '缓存状态行的最后修改时间。';
$string['privacy:metadata:childcourse_state:userid'] = '用户ID。';
$string['privacy:metadata:userpreference:block_myoverview_hidden_course'] = '用于在我的课程中隐藏子课程的用户偏好（默认偏好名称：block_myoverview_hidden_course_{courseid}）。';
$string['settings_heading'] = '子课程设置';
$string['syncdone'] = '同步完成。';
$string['syncnow'] = '现在同步';
$string['targetgroup'] = '注册到组';
$string['targetgroup_help'] = '如果选择，用户将在自动注册时被添加到子课程中的此特定分组。该分组必须存在于子课程中。如果同时启用"从父课程继承分组"，则两种行为都适用（所选分组和继承自父课程的分组）。';
$string['unenrolaction'] = '当链接被移除时';
$string['unenrolaction_help'] = '控制在删除此活动时此活动创建的注册将如何处理。"取消注册" 将仅移除由此活动创建的注册（在映射表中跟踪）。"保留注册" 将保留用户在子课程中的注册。';
$string['unenrolaction_keep'] = '保留注册';
$string['unenrolaction_unenrol'] = '通过此链接注册的用户将被退课';
