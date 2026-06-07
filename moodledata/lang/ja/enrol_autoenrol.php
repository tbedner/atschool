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
 * Strings for component 'enrol_autoenrol', language 'ja', version '4.4'.
 *
 * @package     enrol_autoenrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysenrol'] = '常に登録する';
$string['alwaysenrol_help'] = 'この設定を有効にした場合、すでに別の方法でコースにアクセスしていたとしても、プラグインは常にユーザを登録します。';
$string['auto'] = '自動';
$string['auto_desc'] = 'このグループは自動登録プラグインにより自動的に作成されました。あなたがコースから自動登録プラグインを削除した場合、このグループも削除されます。';
$string['autoenrol:config'] = '自動登録を設定する';
$string['autoenrol:hideshowinstance'] = 'ユーザは自動登録インスタンスを有効または無効にできる';
$string['autoenrol:manage'] = '自動登録済みユーザを管理する';
$string['autoenrol:method'] = 'ログイン時、ユーザはユーザをコースに登録できる';
$string['autoenrol:unenrol'] = 'ユーザは自動登録されたユーザを登録解除できる';
$string['autoenrol:unenrolself'] = 'アクセス時に登録された場合、ユーザは自分を登録解除できる';
$string['autounenrolaction'] = '自動登録解除アクション';
$string['autounenrolaction_help'] = 'ユーザフィルタリングルールに合致しなくなった場合に実行するアクションを選択してください。コース登録解除時に一部のユーザデータおよび設定がコースから削除されることに留意してください。';
$string['availabilityplugins'] = '利用可能なプラグイン';
$string['availabilityplugins_help'] = '自動登録ユーザフィルタで利用可能なプラグインを選択してください。複数選択する場合、Ctrl+クリックまたはCmd+クリックを使用してください。';
$string['cannotenrol'] = 'あなたはこのコースに自動登録を使用して登録できません。';
$string['config'] = '設定';
$string['countlimit'] = '制限';
$string['countlimit_help'] = 'このインスタンスはコースの登録数をカウントして一定レベルに達した場合にユーザ登録を中止できます。デフォルト設定の「0」は制限なしを意味します。';
$string['customwelcomemessage'] = 'カスタムウェルカムメッセージ';
$string['customwelcomemessage_help'] = 'カスタムウェルカムメッセージはプレーンテキストまたはMoodleオートフォーマット (HTMLタグおよびmulti-langタグを含む) で追加できます。メッセージには以下のプレースホルダを含めます:
* コース名 {$a->coursename}
* ユーザのプロファイルページへのリンク {$a->profileurl}
* ユーザのメールアドレス {$a->email
* ユーザのフルネーム {$a->fullname}';
$string['defaultrole'] = 'デフォルトのロール割り当て';
$string['defaultrole_desc'] = '自動登録時、ユーザに割り当てられるロールを選択してください。';
$string['deleteselectedusers'] = '選択したユーザ登録を削除する';
$string['editselectedusers'] = '選択したユーザ登録を編集する';
$string['emptyfield'] = 'No {$a}';
$string['enrolenddate'] = '終了日';
$string['enrolenddate_help'] = 'この設定を有効にした場合、ユーザはこの日までのみ登録されます。';
$string['enrolme'] = '私を登録する';
$string['enrolperiod'] = '登録期間';
$string['enrolperiod_desc'] = '登録が有効なデフォルトの期間です。ゼロに設定した場合、登録期間はデフォルトで無制限になります。';
$string['enrolperiod_help'] = 'ユーザが自分で登録した瞬間に始まる登録が有効な時間の長さです。この設定を無効にした場合、登録期間は無制限になります';
$string['enrolstartdate'] = '開始日';
$string['enrolstartdate_help'] = 'この設定を有効にした場合、ユーザはこの日以降にのみ登録されます。';
$string['expiredaction'] = '登録期限切れアクション';
$string['expiredaction_help'] = 'ユーザ登録が終了時に実行するアクションを選択してください。コース登録解除時に一部のユーザデータおよび設定がコースから削除されることに留意してください。';
$string['expirymessageenrolledbody'] = '{$a->user} さん、これはあなたのコース「 {$a->course} 」への登録が {$a->timeend} で期限切れとなることをお知らせするための通知です。ご不明な点等、{$a->enroller} にご連絡ください。';
$string['expirymessageenrolledsubject'] = '自己登録期限切れ通知';
$string['expirymessageenrollerbody'] = '次のユーザのコース「 {$a->course} 」への自動登録は次の {$a->threshold} 以内に期限切れとなります: {$a->users} 登録を延長するには {$a->extendurl} にアクセスしてください。';
$string['expirymessageenrollersubject'] = '自動登録期限切れ通知';
$string['expirynotifyall'] = '教師および登録済みユーザ';
$string['expirynotifyenroller'] = '教師のみ';
$string['filter'] = '次のみ許可する';
$string['filter_help'] = '「グループ」が選択された場合、あなたがコースに登録したいユーザのタイプをフィルタするため、このフィールドを使用することができます。「認証方法」でグループ化して、「手動登録」ユーザのみにフィルタする場合、あなたのサイトに直接登録されたユーザのみ登録されます。';
$string['filtering'] = 'ユーザフィルタリング';
$string['g_auth'] = '認証方法';
$string['g_dept'] = '部署';
$string['g_email'] = 'メールアドレス';
$string['g_inst'] = 'インスティテューション';
$string['g_lang'] = '言語';
$string['g_none'] = '選択 ...';
$string['general'] = '一般';
$string['groupname'] = 'グループ名';
$string['groupname_help'] = 'ユーザフィルタでグループ化した場合、グループのみ作成されて、これがグループ名となります。';
$string['groupon'] = 'グループ';
$string['groupon_help'] = 'これらのユーザフィールドをベースに登録された場合、自動登録はユーザを自動的にグループに追加することができます。';
$string['instancename'] = 'カスタムラベル';
$string['instancename_help'] = 'この登録方法が何をするのか明確にするため、あなたはカスタムラベルを追加することができます。このオプションは1つのコースに複数の自動登録のインスタンスがある場合に最も有用です。';
$string['loginenrol'] = 'ログイン時に登録を許可する';
$string['loginenrol_desc'] = 'ログイン時に登録を許可した場合、あなたのサイトのパフォーマンスが低下する可能性があります。あなたは代わりにすべてのコースの登録情報を更新するためのスケジュールタスクを使用するか、特定のコースの登録情報を更新するためにcliコマンドを使用できます。';
$string['longtimenosee'] = '次の非アクティブ期間経過後に登録解除する';
$string['longtimenosee_help'] = 'ユーザが長期間コースにアクセスしていない場合、自動的に登録解除されます。このパラメータはその時間制限を指定します。';
$string['m_confirmation'] = '登録画面での確認';
$string['m_course'] = 'コース読み込み時';
$string['m_site'] = 'サイトログイン時';
$string['maxenrolled'] = '最大登録ユーザ';
$string['maxenrolled_help'] = '自動登録できるユーザの最大数を指定してください。ゼロは制限なしを意味します。';
$string['messageprovider:expiry_notification'] = '自動登録期限切れ通知';
$string['method'] = '登録タイミング';
$string['method_help'] = 'コースへのアクセスを待たずにユーザを登録したい場合、パワーユーザはプラグインの動作を変更するためにこの設定を使用できます。これはユーザの「ダッシュボード (マイコース)」リストにデフォルトで表示したいコースに有用です。';
$string['newenrols'] = '新しい登録を許可する';
$string['newenrols_desc'] = 'デフォルトでユーザが新しいコースに自動登録されることを許可します。';
$string['newenrols_help'] = 'この設定はユーザがこのコースに登録できるかどうかを決定します。';
$string['nogroupon'] = 'グループを作成しない';
$string['pluginname'] = '自動登録';
$string['pluginname_desc'] = '自動登録モジュールではログインユーザがコースに入ることを自動的に許可して、コースに登録されるオプションを提供します。これはゲストアクセスが許可されることに似ていますが、学生は継続的に登録されるため、コース内のフォーラムおよび活動に参加することができます。';
$string['pluginnotenabled'] = '自動登録プラグイン無効';
$string['privacy:metadata:core_group'] = '自動登録プラグインは新しいグループを作成または既存のグループを利用して自動登録フィルタに合致する参加者を追加できます。';
$string['removegroups'] = 'グループを削除する';
$string['removegroups_desc'] = '登録インスタンスが削除された場合、作成されたグループを削除してもよろしいですか?';
$string['role'] = 'ロール';
$string['role_help'] = 'パワーユーザは登録されるユーザのパーミッションを変更するため、この設定を使用することができます。';
$string['selfunenrol'] = '自己登録解除を有効にする';
$string['selfunenrol_desc'] = '新しい自動登録インスタンスでユーザがデフォルトで登録解除できるようにします。';
$string['selfunenrol_help'] = 'この設定を有効にした場合、ユーザは自分で登録解除できます。';
$string['sendcoursewelcomemessage'] = 'コースウェルカムメッセージを送信する';
$string['sendcoursewelcomemessage_help'] = 'ユーザがコースに自動登録された場合、ウェルカムメッセージメールを送信できます。ウェルカムメッセージメールはコース担当者 (デフォルトでは教師) から送信されます。複数のユーザにこのロールが割り当てられている場合、ロールを割り当てられた最初のユーザからメール送信されます。';
$string['sendexpirynotificationstask'] = '自動登録期限切れ通知送信タスク';
$string['softmatch'] = 'ソフトマッチ';
$string['softmatch_help'] = '自動登録が有効にされた場合、「次のみ許可する」の設定値に完全に合致する代わりに一部合致するユーザが登録されます。ソフトマッチでは大文字小文字も区別します。「次のみ許可する」の設定値はグループ名に使用されます。';
$string['status'] = '既存の登録を許可する';
$string['status_desc'] = '新しいコースで自動登録方法を有効にします。';
$string['status_help'] = '「新しい登録を許可する」を無効にして、この設定を有効にした場合、以前自動登録したユーザのみコースにアクセスできます。この設定を無効にした場合、既存の自動登録はすべて停止され新しいユーザは自動登録できないため、この自動登録方法は事実上無効となります。';
$string['syncenrolmentstask'] = '自動登録同期タスク';
$string['syncexpirationstask'] = '自動登録有効期限切れ確認タスク';
$string['unenrolselfconfirm'] = '本当にあなたをコース「 {$a} 」から登録解除してもよろしいですか? あなたはコースを再度アクセスして登録はできますが、評定および提出課題等を失うことになります。';
$string['unenrolusers'] = 'ユーザを登録解除する';
$string['userfilter'] = 'ユーザフィルタ';
$string['userfilter_help'] = 'この設定を有効にした場合、自動登録はルールに合致した場合のみユーザを登録します。';
$string['warning'] = '注意!';
$string['warning_message'] = 'このプラグインをあなたのコースに追加することにより、すべての登録済みMoodleユーザがあなたのコースにアクセスできるようになります。あなたのコースへのログイン済みユーザによるオープンアクセスを許可したい場合のみ、このプラグインをインストールしてください。';
$string['welcomemessage'] = 'ウェルカムメッセージ';
$string['welcometocourse'] = '{$a} にようこそ';
