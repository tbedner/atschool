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
 * Strings for component 'tool_dynamic_cohorts', language 'zh_cn', version '4.4'.
 *
 * @package     tool_dynamic_cohorts
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_rule'] = '添加新规则';
$string['addcondition'] = '添加新条件';
$string['addrule'] = '添加一条新规则';
$string['after'] = '后于';
$string['any'] = '任何';
$string['before'] = '先于';
$string['brokenruleswarning'] = '注意有一些规则存在问题。 <br /> 要修复有问题的规则，你需要删除掉全部有问题的条件。 <br />当匹配用户的SQL不能执行时，某些情况下规则就出现问题。在这种情况下，所有的条件都是正确的，但该规则会被标记为有问题。建议检查Moodle日志中有关 "Matching users failed" 的记录并修正SQL错误。 <br />请注意，在这种情况下，标记规则没问题之前需要再次保存规则。';
$string['bulkprocessing'] = '大批量操作';
$string['bulkprocessing_help'] = '如果允许了这个选项，用户可以从群里以大批量模式添加或删除成员。这个操作可以显著的提高执行性能。不过，大批量操作模式会影响单个用户从群中添加或删除时的触发器，导致某些自动更新不能使用。';
$string['cachedef_conditionrecords'] = '适用于规则的条件';
$string['cachedef_rulesconditions'] = '有特定条件的规则';
$string['cannotenablebrokenrule'] = '不能启用有问题的规则';
$string['cf_include_missing_data'] = '包括数据不完整的群';
$string['cf_include_missing_data_help'] = '这些群可能没有正确设置用户定义的字段。此选项包括了最终结果中的群。';
$string['cf_includingmissingdatadesc'] = '（包括数据不完整的群）';
$string['cohort'] = '群';
$string['cohortid'] = '群';
$string['cohortid_help'] = '被此规则所管理的群。只有不被其他插件所管理的群才会列在这。';
$string['cohortswith'] = '有字段的群';
$string['completiondate'] = '完成时间';
$string['condition'] = '条件';
$string['condition:auth_method'] = '授权模式';
$string['condition:cohort_field'] = '群字段';
$string['condition:cohort_membership_broken_description'] = '条件有问题。给定的规则被配置为使用同样的群。';
$string['condition:course_completed'] = '已完成课程';
$string['condition:course_completed_description'] = '用户已完成"{$a->course}" {$a->operator} {$a->timecompleted}课程';
$string['condition:course_not_completed'] = '未完成课程';
$string['condition:course_not_completed_description'] = '用户未完成 "{$a->course}"课程';
$string['condition:user_created'] = '用户新建时间';
$string['condition:user_custom_profile'] = '用户自定义个人信息字段';
$string['condition:user_last_login'] = '用户最后登录';
$string['condition:user_profile'] = '用户标准个人信息字段';
$string['conditionchnagesnotapplied'] = '改变的条件不会生效直到你保存了规则自';
$string['conditionformtitle'] = '规则的条件';
$string['conditions'] = '条件';
$string['conditionsformtitle'] = '规则的条件';
$string['delete_confirm'] = '确定要删除规则{$a}?';
$string['delete_confirm_condition'] = '确定要删除这个条件？';
$string['delete_rule'] = '删除规则';
$string['description'] = '描述';
$string['description_help'] = '规则的简要描述';
$string['disable_confirm'] = '确定要禁用规则{$a}？';
$string['disabled'] = '已禁用';
$string['dynamic_cohorts:manage'] = '管理规则';
$string['edit_rule'] = '编辑规则';
$string['enable_confirm'] = '确定要启用规则{$a}？';
$string['enabled'] = '已启用';
$string['event:conditioncreated'] = '条件已建立';
$string['event:conditiondeleted'] = '条件已删除';
$string['event:conditionupdated'] = '条件已更新';
$string['event:matchingfailed'] = '匹配用户失败';
$string['event:rulecreated'] = '规则已建立';
$string['event:ruledeleted'] = '规则已删除';
$string['event:ruleupdated'] = '规则已更新';
$string['everloggedin'] = '至少登录过一次的用户';
$string['include_missing_data'] = '包括数据不完整的用户';
$string['include_missing_data_help'] = '一些用户可能没有正确设置用户自定义的字段。这个选项将包括最终结果中的用户。';
$string['includeusersmissingdata'] = '包括数据不完整的用户';
$string['includingmissingdatadesc'] = '（包括数据不完整的用户）';
$string['inlast'] = '最后';
$string['invalidfieldvalue'] = '无效字段值';
$string['isafter'] = '后于';
$string['isbefore'] = '先于';
$string['ismemberof'] = '成员，来自';
$string['isnotempty'] = '非空';
$string['isnotmemberof'] = '非成员，来自';
$string['loggedintime'] = '登录的用户{$a->operator} {$a->time}';
$string['logical_operator'] = '逻辑操作符';
$string['logical_operator_help'] = '应用于这条规则的条件的逻辑操作符。“AND” （和）表示用户须匹配所有条件方可以加入一个群。“OR”（或）表示用户满足任何一个条件就可以加入一个群。';
$string['managecohorts'] = '管理群';
$string['managerules'] = '管理规则';
$string['matchingusers'] = '匹配用户';
$string['missingcourse'] = '找不到课程';
$string['name'] = '规则名称';
$string['name_help'] = '规则的可阅读名称';
$string['never'] = '从不';
$string['neverloggedin'] = '从未登录的用户';
$string['operator'] = '操作符';
$string['or'] = '或';
$string['pleaseselectcohort'] = '选择一个群';
$string['pleaseselectfield'] = '选择一个字段';
$string['pluginname'] = '动态群';
$string['privacy:metadata:tool_dynamic_cohorts'] = '用户建立或更新规则的信息';
$string['privacy:metadata:tool_dynamic_cohorts:name'] = '规则名称';
$string['privacy:metadata:tool_dynamic_cohorts:usermodified'] = '建立或更新规则的用户标识号';
$string['privacy:metadata:tool_dynamic_cohorts_c'] = '用户建立 或更新条件的信息';
$string['privacy:metadata:tool_dynamic_cohorts_c:ruleid'] = '规则序号';
$string['privacy:metadata:tool_dynamic_cohorts_c:usermodified'] = '建立或更新规则的用户标识号';
$string['processrulestask'] = '处理动态群规则';
$string['profilefield'] = '个人信息字段';
$string['rule_entity'] = '动态群规则';
$string['rule_entity.bulkprocessing'] = '大批量处理';
$string['rule_entity.description'] = '描述';
$string['rule_entity.id'] = '序号';
$string['rule_entity.name'] = '名称';
$string['rule_entity.status'] = '状态';
$string['ruledeleted'] = '已删除规则';
$string['ruledisabled'] = '已禁用规则';
$string['ruledisabledpleasereview'] = '最新建立或更新规则默认是禁用的。准备好启用前请复查下面的规则。';
$string['ruleenabled'] = '规则已启用';
$string['usercreated'] = '用户已建立';
$string['usercreatedin'] = '最后建立的用户 {$a}';
$string['usercreatedtime'] = '用户{$a->operator}在 {$a->time}已建立';
$string['userlastlogin'] = '用户的最后登录';
$string['usersforrule'] = '群 "{$a->cohort}" 的用户匹配规则 "{$a->rule}"';
