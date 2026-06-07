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
 * Strings for component 'factor_webauthn', language 'zh_cn', version '4.4'.
 *
 * @package     factor_webauthn
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:manage'] = '管理安全密钥';
$string['action:revoke'] = '移除安全密钥';
$string['authenticator:ble'] = 'BLE';
$string['authenticator:hybrid'] = '混合';
$string['authenticator:internal'] = '内部';
$string['authenticator:nfc'] = 'NFC';
$string['authenticator:usb'] = 'USB';
$string['authenticatorname'] = '安全密钥名称';
$string['error'] = '认证失败';
$string['error:alreadyregistered'] = '此安全密匙秘密已被注册。';
$string['info'] = '使用物理安全密钥或指纹扫描仪。';
$string['logindesc'] = '单击“继续”以使用安全密钥。';
$string['loginoption'] = '使用安全密钥';
$string['loginskip'] = '我没带安全密钥';
$string['loginsubmit'] = '继续';
$string['logintitle'] = '通过安全密钥验证是您';
$string['managefactor'] = '管理安全密钥';
$string['managefactorbutton'] = '管理';
$string['manageinfo'] = '您正在使用 \'{$a}\' 进行身份验证。';
$string['pluginname'] = '安全密钥';
$string['privacy:metadata'] = '安全密钥因素插件不存储任何个人数据。';
$string['register'] = '注册安全密钥';
$string['replacefactor'] = '更换安全密钥';
$string['replacefactorconfirmation'] = '替换 \'{$a}\' 安全密钥？';
$string['revokefactorconfirmation'] = '删除\'{$a}\' 安全密钥？';
$string['settings:authenticatortypes'] = '验证者的类型';
$string['settings:authenticatortypes_help'] = '切换某些类型的身份验证器';
$string['settings:userverification'] = '用户验证';
$string['settings:userverification_help'] = '用来确保进行身份验证的人实际上就是他们所说的那个人。用户验证可以采用多种形式，如密码、PIN、指纹等。';
$string['setupfactor'] = '设置安全密钥';
$string['setupfactor:instructionsregistersecuritykey'] = '2. 注册安全密钥。';
$string['setupfactor:instructionssecuritykeyname'] = '1. 给你的钥匙起个名字。';
$string['setupfactor:intro'] = '安全密钥是一种物理设备，您可以使用它对自己进行身份验证。安全密钥可以是USB令牌、蓝牙设备或手机或电脑上的事件内置指纹扫描仪。';
$string['setupfactor:securitykeyinfo'] = '这有助于您确定正在使用哪个安全密钥。';
$string['setupfactorbutton'] = '设置';
$string['summarycondition'] = '使用支持WebAuthn的验证器';
$string['userverification:discouraged'] = '不应该使用用户验证，例如，最小化用户交互';
$string['userverification:preferred'] = '用户验证优先，如果缺少用户验证，认证不会失败';
$string['userverification:required'] = '需要用户验证（例如通过pin）。如果密钥没有用户验证，则身份验证失败';
