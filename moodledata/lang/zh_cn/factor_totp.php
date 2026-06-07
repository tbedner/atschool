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
 * Strings for component 'factor_totp', language 'zh_cn', version '4.4'.
 *
 * @package     factor_totp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = '管理基于时间的一次性密码（TOTP）验证器';
$string['action:revoke'] = '删除基于时间的一次性密码（TOTP）验证器';
$string['devicename'] = '设备的标签';
$string['devicename_help'] = '这是你安装了身份验证应用程序的设备。您可以设置多个设备，因此此标签有助于跟踪正在使用的设备。您应该为每个设备设置自己的唯一代码，以便可以分别撤销它们。';
$string['devicenameexample'] = '例如：“Work iPhone 11”';
$string['error:alreadyregistered'] = '这个基于时间的一次性密码（TOTP）秘密已经被注册。';
$string['error:codealreadyused'] = '此代码已用于身份验证。请等待生成新的代码，然后再试一次。';
$string['error:futurecode'] = '此代码无效。请验证您的验证器设备上的时间是否正确，然后再试一次。
当前系统时间为{$a}。';
$string['error:oldcode'] = '这个代码过期了。请验证您的验证器设备上的时间是否正确，然后再试一次。
当前系统时间为{$a}。';
$string['error:wrongverification'] = '验证码错误。';
$string['factorsetup'] = 'APP 设置';
$string['info'] = '使用验证器应用程序生成验证码。';
$string['logindesc'] = '在您的移动设备中使用验证器应用程序来生成代码。';
$string['loginoption'] = '使用验证器应用程序';
$string['loginskip'] = '我没带我的设备';
$string['loginsubmit'] = '继续';
$string['logintitle'] = '通过手机应用程序验证是你';
$string['managefactor'] = '管理认证器应用';
$string['managefactorbutton'] = '管理';
$string['manageinfo'] = '您正在使用“{$a}”进行身份验证。';
$string['pluginname'] = '验证器应用程序';
$string['privacy:metadata'] = '验证器应用程序因子插件不存储任何个人数据。';
$string['replacefactor'] = '替换验证器应用程序';
$string['replacefactorconfirmation'] = '替换“{$a}”验证器应用程序？';
$string['revokefactorconfirmation'] = '删除“{$a}”验证器应用程序？';
$string['settings:totplink'] = '显示移动应用程序设置链接';
$string['settings:totplink_help'] = '如果启用，用户将看到第三个设置选项与直接otpath://链接';
$string['settings:window'] = 'TOTP 验证窗口';
$string['setupfactor'] = '设置身份验证器应用程序';
$string['setupfactor:account'] = '帐户：';
$string['setupfactor:devicename'] = '设备名称';
$string['setupfactor:devicenameinfo'] = '这有助于您确定哪个设备接收验证码。';
$string['setupfactor:enter'] = '手动输入详细信息';
$string['setupfactor:instructionsdevicename'] = '1. 为您的设备命名。';
$string['setupfactor:instructionsscan'] = '2. 使用身份验证器应用程序扫描二维码。';
$string['setupfactor:instructionsverification'] = '3. 输入验证码';
$string['setupfactor:intro'] = '要设置此方法，您需要拥有一台装有身份验证器应用程序的设备。如果您没有应用程序，可以下载一个。例如，<a href="https://2fas.com/" target="_blank">2FAS Auth</a>、<a href="https://freeotp.github.io/" target="_blank">FreeOTP</a>、Google Authenticator、Microsoft Authenticator 或 Twilio Authy。';
$string['setupfactor:key'] = '密钥：';
$string['setupfactor:link'] = '或手动输入详细信息。';
$string['setupfactor:link_help'] = '如果您使用的是移动设备并且已经安装了身份验证器应用程序，则此链接可能有效。请注意，在登录的同一设备上使用 TOTP 可能会削弱 MFA 的优势。';
$string['setupfactor:linklabel'] = '打开此设备上已安装的应用程序';
$string['setupfactor:mode'] = '模式：';
$string['setupfactor:mode:timebased'] = '基于时间';
$string['setupfactor:scan'] = '扫描二维码';
$string['setupfactor:scanfail'] = '无法扫描？';
$string['setupfactor:scanwithapp'] = '使用您选择的身份验证器应用程序扫描二维码。';
$string['setupfactor:verificationcode'] = '验证码';
$string['setupfactorbutton'] = '设置';
$string['summarycondition'] = '使用 TOTP 应用程序';
$string['systimeformat'] = '%l:%M:%S %P %Z';
$string['verificationcode'] = '输入您的 6 位数验证码';
$string['verificationcode_help'] = '打开您的身份验证器应用程序（例如 Google Authenticator）并查找与此站点和用户名匹配的 6 位代码';
