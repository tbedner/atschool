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
 * Strings for component 'tool_registrationrules', language 'ja', version '4.4'.
 *
 * @package     tool_registrationrules
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewruleinstance'] = '新しいルールインスタンスを追加する';
$string['addrule'] = 'ルールを追加する';
$string['confirmdelete'] = '本当に「 {$a} 」ルールインスタンスを削除してもよろしいですか?';
$string['description'] = '説明';
$string['editruleinstance'] = 'ルールインスタンスを編集する';
$string['editruleinstancename'] = 'ルールインスタンスを編集する ... {$a}';
$string['event:registrationdenied'] = 'ユーザ登録が拒否されました。';
$string['event:registrationdeniedloggingonly'] = 'ユーザ登録が拒否されました (ロギングのみ)。';
$string['generalaftermessage'] = 'ユーザ入力後に拒否されたユーザに対する一般的なメッセージ';
$string['hideshow'] = '秘匿/表示';
$string['manageregistrationruleplugins'] = 'ルールプラグインを管理する';
$string['onlyoneinstanceallowed'] = 'このルールでは1インスタンスのみ許可されます!';
$string['pluginname'] = '登録ルール';
$string['privacy:null_provider:reason'] = '登録ルールプラグインはいかなるユーザ関連データも保存しません。特定の登録ルールプラグインで保存されるユーザ関連データは独立して宣言されます。';
$string['registrationrule:instance:description'] = '説明';
$string['registrationrule:instance:enabled'] = '有効';
$string['registrationrule:instance:fallbackpoints'] = 'フォールバックポイント';
$string['registrationrule:instance:name'] = '名称';
$string['registrationrule:instance:points'] = 'ポイント';
$string['registrationrule:instance:points_help'] = '登録拒否時にこのルールインスタンスから返されるポイント数です。';
$string['registrationrulepluginname'] = '登録ルール';
$string['ruleinstancestable:actions'] = '操作';
$string['ruleinstancestable:addcaptcha'] = 'CAPTCHAを追加する';
$string['ruleinstancestable:addrule'] = 'ルールを追加する';
$string['ruleinstancestable:captcha'] = 'CAPTCHA';
$string['ruleinstancestable:description'] = '説明';
$string['ruleinstancestable:disabledmessage'] = '登録プラグインは無効にされています。<a href="/admin/settings.php?section=generalregistrationrulessettings">登録ルール設定</a>ページで有効にされるまでルールは適用されません。';
$string['ruleinstancestable:disabledpluginsmessage'] = '<a href="/admin/settings.php?section=manageregistrationrules">{$a} 件の無効にされたルールプラグイン</a>があるため、これらが有効にされるまでこれらのプラグインを使用する新しいルールは作成できません。';
$string['ruleinstancestable:enabled'] = '有効';
$string['ruleinstancestable:fallbackpoints'] = 'フォールバックポイント';
$string['ruleinstancestable:forcednotification'] = '現在ルールインスタンスは<b>config.php</b>で管理されているため、編集は無効にされています。';
$string['ruleinstancestable:instancesjson:getinstancesjson'] = 'インスタンスJSONを表示する';
$string['ruleinstancestable:instancesjson:modalbodytext'] = '<p>以下をあなたの<b>config.php</b>ファイルに追加することで、現在のアクティブなルールインスタンス設定の使用を強制できます。</p><p><b>config.php</b>に追加した場合、ルールインスタンス管理はUIから利用できなくなります。</p>';
$string['ruleinstancestable:instancesjson:ruleinstancesjson'] = 'ルールインスタンスJSON';
$string['ruleinstancestable:move'] = '移動';
$string['ruleinstancestable:name'] = '名称';
$string['ruleinstancestable:nomorecaptchasmessage'] = '一度に追加できるCAPTCHAタイプルールは1つのみです。現在のCAPTCHAインスタンスが削除されるまで、これらのプラグインタイプを使用した新しいルールは作成できません。';
$string['ruleinstancestable:norulesaddedyet'] = 'まだルールは追加されていません。以下のドロップダウンメニューでルールまたはCAPTCHAを追加してください。';
$string['ruleinstancestable:notconfigured'] = '未設定';
$string['ruleinstancestable:plugindisabled'] = 'プラグイン無効';
$string['ruleinstancestable:points'] = 'ポイント';
$string['ruleinstancestable:points:decription'] = '登録拒否時に発行されるポイント数です。';
$string['ruleinstancestable:rulenotenabled'] = 'ルール無効';
$string['ruleinstancestable:siterecaptchaenabled'] = 'サイト設定でreCAPTCHAが有効にされているため、新しいCAPTCHAタイプルールは追加できません。';
$string['ruleinstancestable:type'] = 'タイプ';
$string['rulewillnotbeused'] = 'プラグインの<a href="{$a}">設定オプション</a>が設定されていないため、このルールはまだ使用されません。';
$string['settings:enable:description'] = 'ルールチェックを有効にする';
$string['settings:generalbeforemessage'] = '登録前ルールに関する一般的なメッセージ';
$string['settings:generalbeforemessage:description'] = '一部のルール (例「limitdatetime」または「nope」) によってはサインアップページが表示されなくなる場合があります。これは静的なメッセージであり、これらのルールからのフィードバックの上に表示されます。';
$string['settings:guidancemessage'] = '<p>登録ルールを動作させたい場合、あなたは「ルールチェックを有効にする」を有効にする必要があります。</p><p>しかし、あなたが最初に利用可能なルールおよびCAPTCHAオプションを確認および設定した後、ルールチェックを有効にする前での<a href="/admin/tool/registrationrules/manageruleinstances.php">ルールインスタンス</a>の作成をお勧めします。</p> 選択したルールの影響評価のため、あなたはしばらくの間「ロギングのみ」の有効化も検討できます。';
$string['settings:loggingonly'] = 'ロギングのみ';
$string['settings:loggingonly:description'] = '通常どおりにルールを評価しますが、ユーザ登録を拒否する代わりに結果のみログに記録します。';
$string['settings:maxpoints'] = '最大拒否ポイント';
$string['settings:maxpoints:description'] = 'この閾値に達した場合、ルールが評価された後に登録は拒否されます。';
$string['settings:registrationpagemessage'] = '登録ページトップのメッセージ';
$string['settings:registrationpagemessage:description'] = '登録ページ上部に表示される一般的なメッセージです。';
$string['settings:registrationruleinstances'] = '登録ルールインスタンス';
$string['settings:registrationrulessettings'] = '登録ルール設定';
$string['subplugintype_registrationrule'] = '登録ルール';
$string['subplugintype_registrationrule_plural'] = '登録ルール';
