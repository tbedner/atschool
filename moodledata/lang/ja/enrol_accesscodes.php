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
 * Strings for component 'enrol_accesscodes', language 'ja', version '4.4'.
 *
 * @package     enrol_accesscodes
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesscode'] = 'アクセスコード';
$string['accesscodes'] = 'アクセスコード';
$string['accesscodes:config'] = 'アクセスコード登録インスタンスを設定する';
$string['accesscodes:enrolself'] = 'アクセスコードを利用してコースに登録する';
$string['accesscodes:holdkey'] = 'アクセスコード保持者として表示する';
$string['accesscodes:manage'] = '登録済みユーザを管理する';
$string['accesscodes:manageallcodes'] = 'すべてのユーザコードセットを管理する';
$string['accesscodes:manageowncodes'] = 'あなた独自のコードセットを管理する';
$string['accesscodes:unenrol'] = 'ユーザをコースから登録解除する';
$string['accesscodes:unenrolself'] = '自分をコースから登録解除する';
$string['additionalcodes'] = '生成する追加コード数';
$string['additionalcodes_help'] = '何件の追加コードを生成する必要がありますか?';
$string['allcourses'] = 'すべてのコース';
$string['allcourses_help'] = 'この登録方法が有効にされているすべてのコースでコードは機能すべきですか、それとも特定のコースのみですか?';
$string['available'] = '利用可能';
$string['cannotenrol'] = '登録は無効または非アクティブです。';
$string['cannotenrolearly'] = 'あなたはまだ登録できません。登録は {$a} から開始されます。';
$string['cannotenrollate'] = 'あなたはもう登録できません。登録は {$a} で終了しました。';
$string['code'] = 'コード';
$string['codesavailable'] = '利用可能なコード';
$string['codescantbereduced'] = '注意: このフォームを送信した後、コード数は減らせません (追加コードは追加可能です)。';
$string['codesetadded'] = 'コードが正常に作成されました。';
$string['codesetdeleted'] = 'コードセットが削除されました。';
$string['codesetname'] = 'コードセット名';
$string['codesetupdated'] = 'コードセットが更新されました。';
$string['cohortnonmemberinfo'] = 'コーホート「 {$a} 」のメンバのみ自己登録できます。';
$string['cohortonly'] = 'コーホートメンバのみ';
$string['cohortonly_help'] = 'アクセスコード登録は指定されたコーホートのメンバに限定される場合があります。この設定の変更は既存の登録には影響しないことに留意してください。';
$string['confirmbulkdeleteenrolment'] = '本当にこれらのユーザ登録を削除してもよろしいですか?';
$string['confirmdeletecodeset'] = '本当にコードセット {$a} を削除してもよろしいですか？この操作は元に戻せません。';
$string['coursesrequirederror'] = '少なくとも1つのコースを選択するか、すべてのコースで利用可能にしてください。';
$string['createcodeset'] = 'コードセットを作成する';
$string['createdby'] = '作成者';
$string['customwelcomemessage'] = 'カスタムウェルカムメッセージ';
$string['customwelcomemessage_help'] = 'カスタムウェルカムメッセージはプレインテキストまたはMoodle自動フォーマットで追加できます。HTMLタグおよびマルチ言語タグを含めます。

以下のプレースホルダをメッセージに含めることができます:

* コース名 {$a->coursename}
* ユーザのプロファイルページへのリンク {$a->profileurl}
* ユーザメール {$a->email}
* ユーザフルネーム {$a->fullname}';
$string['datecreated'] = '作成日';
$string['defaultrole'] = 'デフォルトロール割り当て';
$string['defaultrole_desc'] = 'アクセスコード登録時にユーザに割り当てられるロールを選択してください。';
$string['deletecodeset'] = 'コードセットを削除する';
$string['deleteselectedusers'] = '選択したユーザ登録を削除する';
$string['editexception'] = 'あなたが作成していないコードセットを編集します。';
$string['editselectedusers'] = '選択したユーザ登録を編集する';
$string['enrolenddate'] = '終了日';
$string['enrolenddate_help'] = 'この設定を有効にした場合、ユーザはこの日付までのみ自分で登録できます。';
$string['enrolenddaterror'] = '登録終了日は開始日より早くできません。';
$string['enrolme'] = '私を登録する';
$string['enrolmentduration'] = '登録期間';
$string['enrolmentduration_help'] = 'コード利用時から登録はどのくらいの期間継続する必要がありますか? 空白のままにした場合、登録方法のデフォルト設定が適用されます。';
$string['enrolperiod'] = '登録期間';
$string['enrolperiod_desc'] = '登録の有効期間のデフォルトの長さです。ゼロに設定した場合、登録期間はデフォルトで無制限となります。';
$string['enrolperiod_help'] = '登録の有効期間です。ユーザが登録した時点から開始されます。この設定を無効にした場合、登録期間は無制限となります。';
$string['enrolstartdate'] = '開始日';
$string['enrolstartdate_help'] = 'この設定を有効にした場合、ユーザはこの日付以降のみ自分で登録できます。';
$string['expiredaction'] = '登録期限切れアクション';
$string['expiredaction_help'] = 'ユーザ登録期限切れの際に実行するアクションを選択してください。コース登録解除中、一部のユーザデータおよび設定がコースから削除されることに留意してください。';
$string['expiredcode'] = 'アクセスコードの有効期限が切れました。';
$string['expireinpasterror'] = '有効期限は未来の日付にする必要があります。';
$string['expirydate'] = '有効期限';
$string['expirydate_help'] = '有効期限後、コードは利用できなくなります。有効期限前に利用されたコードには影響しません (例 ユーザが登録解除されることはありません)。';
$string['expirymessageenrolledbody'] = '{$a->user} さん

この通知はあなたの登録コース「 {$a->course} 」の有効期限が {$a->timeend} に切れることをお知らせするものです。

サポートが必要な場合、{$a->enroller} にご連絡ください。';
$string['expirymessageenrolledsubject'] = '自己登録有効期限切れ通知';
$string['expirymessageenrollerbody'] = 'コース「 {$a->course} 」へのアクセスコードの登録は以下のユーザに対して次の {$a->threshold} 以内に期限切れとなります:

{$a->users}

登録を延長するには {$a->extendurl} にアクセスしてください。';
$string['expirymessageenrollersubject'] = 'アクセスコード登録有効期限切れ通知';
$string['expirynotifyall'] = '教師および登録済みユーザ';
$string['expirynotifyenroller'] = '教師のみ';
$string['export'] = 'エクスポート';
$string['exportcodes'] = 'コードをエクスポートする';
$string['exportpersonaldatawarning'] = 'データプライバシーを保護するためにコードはユーザ情報を含まない形でエクスポートされます。';
$string['invalidcode'] = '無効なアクセスコードです。';
$string['invalidforcourse'] = 'このコースのアクセスコードが無効です。';
$string['longtimenosee'] = '次の期間後に非アクティブを登録解除する';
$string['longtimenosee_help'] = 'ユーザがコースに長時間アクセスしていない場合、自動的に登録解除されます。このパラメータはその時間制限を指定します。';
$string['managecodes'] = 'アクセスコードを管理する';
$string['managemycodes'] = '私のアクセスコードを管理する';
$string['maxenrolled'] = '最大登録ユーザ';
$string['maxenrolled_help'] = 'この方法で登録できるユーザの最大数を指定してください。ゼロは制限なしを意味します。';
$string['maxenrolledreached'] = '登録可能な最大ユーザ数の上限に達しています。';
$string['messageprovider:expiry_notification'] = 'アクセスコード登録有効期限切れ通知';
$string['newenrols'] = '新しい登録を許可する';
$string['newenrols_desc'] = 'デフォルトでユーザが新しいコースに登録できるようにします。';
$string['newenrols_help'] = 'この設定はユーザがこのコースに登録できるかどうか決定します。';
$string['nonzerocodeserror'] = '生成するコード数を選択してください。';
$string['nopassword'] = '登録キーは不要です。';
$string['numberofcodes'] = 'コード数';
$string['numberofcodes_help'] = '何件のコードを生成しますか?';
$string['password'] = '登録キー';
$string['password_help'] = '登録キーの利用でキーを知っている人だけにコースへのアクセスを制限できます。

フィールドが空白のままにされた場合、どのユーザでもコースに登録できます。

登録キーが指定されている場合、コースに登録を試みるすべてのユーザはそのキーを提供する必要があります。コース登録時、ユーザは登録キーを一度だけ入力する必要があることに留意してください。';
$string['passwordinvalid'] = '登録キーが正しくありません。再度お試しください。';
$string['passwordinvalidhint'] = '登録キーが正しくありません。再度お試しください。
<br>
(ヒント - 「 {$a} 」で始まります)';
$string['pluginname'] = 'アクセスコード登録';
$string['pluginname_desc'] = 'アクセスコード登録プラグインはユーザが単回利用可能なアクセスコードでコースに登録できるようにします。内部的に登録は同じコースで有効化されている手動登録プラグイン経由で実行されます。';
$string['privacy:metadata:enrol_accesscodes'] = 'アクセスコード登録プラグインは登録に関する個人データをenrol_accesscodes_codesテーブルに保存する場合があります。';
$string['privacy:metadata:enrol_accesscodes:code'] = '登録コードです。';
$string['privacy:metadata:enrol_accesscodes:codesetid'] = 'コードが関連するコードセットIDです。';
$string['privacy:metadata:enrol_accesscodes:courseid'] = '登録が関連するコードセットIDです。';
$string['privacy:metadata:enrol_accesscodes:status'] = 'コードのステータスです。';
$string['privacy:metadata:enrol_accesscodes:timecreated'] = '登録が作成された日時です。';
$string['privacy:metadata:enrol_accesscodes:timemodified'] = '登録が修正された日時です。';
$string['privacy:metadata:enrol_accesscodes:userid'] = 'ロール割り当てに関連するユーザのIDです。';
$string['role'] = 'デフォルト割り当てロール';
$string['saveandgenerate'] = 'コードを保存および生成する';
$string['searchcodesetname'] = 'コードセット名を検索する';
$string['sendcoursewelcomemessage'] = 'コースウェルカムメッセージを送信する';
$string['sendcoursewelcomemessage_help'] = 'ユーザのコース登録時にウェルカムメッセージのメールが送信される場合があります。このメールはコースの連絡先 (デフォルトでは教師) から送信されます。このロールが複数ユーザに割り当てられている場合、最初にそのロールが割り当てられたユーザからメールが送信されます。';
$string['sendexpirynotificationstask'] = 'アクセスコード登録有効期限切れ通知送信タスク';
$string['showall'] = 'すべてを表示する';
$string['status'] = '既存の登録を許可する';
$string['status_desc'] = '新しいコースでアクセスコード登録を有効にします。';
$string['status_help'] = '「新しい登録を許可する」が無効にされている場合、このアクセスコードによる登録方法が有効となります。この場合、以前に登録したユーザのみがコースにアクセスできます。この設定を無効にした場合、既存のアクセスコードによる登録が一時停止および新しいユーザが登録できなくなるため、このアクセスコード登録方法は実質的に無効化されます。';
$string['syncenrolmentstask'] = 'アクセスコード登録タスクを同期する';
$string['unenrol'] = 'ユーザを登録解除する';
$string['unenrolselfconfirm'] = '本当にあなた自身をコース「 {$a} 」から登録解除してもよろしいですか?';
$string['unenroluser'] = '本当に「 {$a->user} 」をコース「 {$a->course} 」から登録解除してもよろしいですか?';
$string['unenrolusers'] = 'ユーザを登録解除する';
$string['used'] = '利用済み';
$string['usedby'] = '利用者';
$string['usedfor'] = '利用対象';
$string['usepasswordpolicy'] = 'パスワードポリシーを使用する';
$string['usepasswordpolicy_desc'] = 'アクセスコードに標準のパスワードポリシーを使用します。';
$string['validcourses'] = '有効コース';
$string['validcourses_help'] = 'どのコースでコードを機能させますか? アクセスコード登録方法のインスタンスを持つコースのみ、ここでの利用対象となります。';
$string['viewcodes'] = 'コードを表示する';
$string['viewexception'] = 'あなたが作成していないコードセットを表示します。';
$string['welcometocourse'] = '{$a} へようこそ';
$string['welcometocoursetext'] = '{$a->coursename} へようこそ!

まだプロファイルの編集を終えていない場合、私たちがあなたのことを知れるようにあなたのプロファイルページを編集してください:

 {$a->profileurl}';
