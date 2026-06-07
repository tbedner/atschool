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
 * Strings for component 'factor_sms', language 'zh_cn', version '4.4'.
 *
 * @package     factor_sms
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = '管理手机号码';
$string['action:revoke'] = '删除手机号码';
$string['addnumber'] = '手机号码';
$string['clientnotfound'] = '找不到AWS服务客户端。客户端必须是完全限定的类名，例如\\Aws\\S3\\S3Client。';
$string['editphonenumber'] = '编辑电话号码';
$string['editphonenumberinfo'] = '如果您没有收到代码或输入错误的号码，请编辑号码后再试一次。';
$string['error:emptyverification'] = '空号。再试一次。';
$string['error:wrongphonenumber'] = '您提供的电话号码格式不合法。';
$string['error:wrongverification'] = '错误的号码。再试一次。';
$string['errorawsconection'] = '连接AWS服务器错误：{$a}';
$string['errorsmssent'] = '发送包含您的验证码的短信时出错。';
$string['event:smssent'] = '短信已发送。';
$string['event:smssentdescription'] = '向ID为{$a->userid}的用户发送验证码。信息:{$a->debuginfo}';
$string['info'] = '将验证码发送到您选择的手机号码。';
$string['logindesc'] = '发送到手机号码{$a}的短信包含6位数代码';
$string['loginoption'] = '有一个验证码发送到您的手机';
$string['loginskip'] = '我没有收到验证码';
$string['loginsubmit'] = '继续';
$string['logintitle'] = '输入发送到您手机的验证码';
$string['managefactor'] = '管理 SMS';
$string['managefactorbutton'] = '管理';
$string['manageinfo'] = '您正在使用“{$a}”进行身份验证。';
$string['phonehelp'] = '输入您的手机号码（包括国家代码），接收验证码。';
$string['revokefactorconfirmation'] = '删除  \'{$a}\'  SMS？';
$string['settings:aws'] = 'AWS SNS';
$string['settings:aws:key'] = '密钥';
$string['settings:aws:key_help'] = 'Amazon API 密钥凭证';
$string['settings:aws:region'] = '区域';
$string['settings:aws:region_help'] = 'Amazon API Gateway 区域';
$string['settings:aws:secret'] = '密钥';
$string['settings:aws:secret_help'] = 'Amazon API 密钥凭证';
$string['settings:aws:usecredchain'] = '使用默认凭证提供商链查找 AWS 凭证';
$string['settings:countrycode'] = '国家/地区号码代码';
$string['settings:countrycode_help'] = '如果用户不输入带有 + 前缀的国际号码，则默认使用不带前导 + 的呼叫代码。

有关调用代码的列表，请参阅此链接：{$a}';
$string['settings:duration'] = '有效期';
$string['settings:duration_help'] = '代码的有效时间段';
$string['settings:gateway'] = '短信网关';
$string['settings:gateway_help'] = '您希望通过其发送消息的短信提供商';
$string['setupfactor'] = '设置短信';
$string['setupfactorbutton'] = '设置';
$string['setupsubmitcode'] = '保存';
$string['setupsubmitphone'] = '发送代码';
$string['smsstring'] = '{$a->code} 是您的 {$a->fullname} 一次性安全代码。

@{$a->url} #{$a->代码}';
$string['summarycondition'] = '使用短信一次性安全码';
