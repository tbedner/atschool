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
 * Strings for component 'factor_email', language 'zh_cn', version '4.4'.
 *
 * @package     factor_email
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['email:accident'] = '如果您未请求该电子邮件，请单击“继续”以使登录尝试无效。如果您不小心点击了该链接，请单击“取消”，并且不会采取任何操作。';
$string['email:browseragent'] = '此请求的浏览器详细信息为：“{$a}”';
$string['email:geoinfo'] = '此请求似乎源自以下几点：';
$string['email:greeting'] = '你好 {$a} 👋';
$string['email:ipinfo'] = '登录请求详细信息：';
$string['email:link'] = '验证链接';
$string['email:loginlink'] = '或者，如果您在同一设备上，请使用此 {$a}。';
$string['email:message'] = '这是 {$a->sitename} （{$a->siteurl}） 的验证码。';
$string['email:originatingip'] = '此登录请求是从“{$a}”发出的';
$string['email:revokelink'] = '如果这不是你，你可以{$a}';
$string['email:revokesuccess'] = '此代码已成功吊销。{$a} 的所有会话均已结束。
    在验证帐户安全性之前，电子邮件将无法用作一个因素。';
$string['email:stoploginlink'] = '停止此登录尝试';
$string['email:subject'] = '这是您的验证码';
$string['email:uadescription'] = '此请求的浏览器标识：';
$string['email:validity'] = '该验证码只能使用一次，并且对 {$a} 有效。';
$string['error:badcode'] = '未找到代码。这可能是一个旧链接，可能已通过电子邮件发送新代码，或者使用此代码的登录尝试成功。';
$string['error:parameters'] = '页面参数不正确';
$string['error:wrongverification'] = '错误的验证码，再试一次。';
$string['event:unauthemail'] = '收到未经授权的电子邮件';
$string['info'] = '您正在使用电子邮件 {$a} 进行身份验证，这是由您的站点管理员设置的。';
$string['logindesc'] = '我们刚刚向您的电子邮件发送了一个 6 位数的验证码：{$a}';
$string['loginoption'] = '将验证码通过电子邮件发送给您';
$string['loginskip'] = '我没有收到验证码';
$string['loginsubmit'] = '继续';
$string['logintitle'] = '通过电子邮件验证您的身份';
$string['managefactor'] = '管理电子邮件';
$string['manageinfo'] = '“{$a}”用于身份验证，这是由您的管理员设置的。';
$string['pluginname'] = 'Email';
$string['privacy:metadata'] = '电子邮件因素插件不存储任何个人数据';
$string['settings:duration'] = '有效期';
$string['settings:duration_help'] = '验证码的有效时间段';
$string['settings:suspend'] = '暂停未经授权的帐户';
$string['settings:suspend_help'] = '选中此选项以在收到未经授权的电子邮件验证时暂停用户帐户';
$string['setupfactor'] = '设置电子邮件';
$string['summarycondition'] = '具有有效的电子邮件设置';
$string['unauthemail'] = '未经授权的电子邮件';
$string['unauthloginattempt'] = 'ID 为 {$a->userid} 的用户使用来自 的电子邮件验证进行了未经授权的登录尝试
IP {$a->ip} 与浏览器代理 {$a->useragent}。';
$string['verificationcode'] = '输入验证码进行确认';
$string['verificationcode_help'] = '验证码已发送到您的电子邮箱';
