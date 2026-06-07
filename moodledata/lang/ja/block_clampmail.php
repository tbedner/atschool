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
 * Strings for component 'block_clampmail', language 'ja', version '4.4'.
 *
 * @package     block_clampmail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = '操作';
$string['add_all'] = 'すべてを追加する';
$string['add_button'] = '追加';
$string['all_groups'] = 'すべてのグループ';
$string['allowstudents'] = '学生のCLAMPMail使用を許可する';
$string['alternate'] = '代替メール';
$string['alternate_activated'] = '代替メール {$a->address} を {$a->course}で使用できるようになりました。';
$string['alternate_activation_status'] = 'アクティベーションステータス';
$string['alternate_approved'] = '承認済み';
$string['alternate_body'] = '<p>
{$a->fullname} が {$a->address} を {$a->course} での代替送信アドレスとして追加しました。
</p>

<p>
このメールの目的はこのアドレスの存在を確認すること、そしてこのアドレスの所有者がMoodle内で適切な権限があることを確認することにあります。
</p>

<p>
認証プロセスを完了したい場合、あなたのウェブブラウザで次のURLにアクセスしてください: {$a->url}.
</p>

<p>
もし、このメールの説明が意味をなさない場合、あなたは間違ってメールを受信した可能性があります。このメールを破棄してください。
</p>

ありがとうございます。';
$string['alternate_delete_confirm'] = '本当に {$a->address} を削除してもよろしいですか? この操作は元に戻せません。';
$string['alternate_failure'] = 'メールを {$a->address} に送信できませんでした。{$a->address} が存在することを確認して再度お試しください。';
$string['alternate_from'] = 'Moodle: {$a}';
$string['alternate_invalid'] = '{$a->address} のアクティベーションリンクは無効になりました。続けてアクティベーションリンクを再送してください。';
$string['alternate_new'] = '代替アドレスを追加する';
$string['alternate_saved'] = '代替アドレス {$a->address} が保存されました。';
$string['alternate_subject'] = '代替メールアドレス確認';
$string['alternate_success'] = 'アドレスが有効であることを確認するメールが {$a->address} 宛に送信されました。アドレスを有効にするインストラクションがメールコンテンツに記載されています。';
$string['alternate_waiting'] = '承認待ち';
$string['are_you_sure'] = '本当に {$a->title} を削除してもよろしいですか? この操作は元に戻せません。';
$string['attachment'] = '添付';
$string['clampmail:addinstance'] = '新しいCLAMPメールブロックを追加する';
$string['clampmail:allowalternate'] = 'ユーザがコースの代替メールを追加できるようにします。';
$string['clampmail:canconfig'] = 'ユーザがCLAMPメールインスタンスを設定できるようにします。';
$string['clampmail:canimpersonate'] = 'ユーザが他のユーザとしてログインおよび履歴を閲覧できるようにします。';
$string['clampmail:cansend'] = 'ユーザがCLAMPメールでメールを送信できるようにします。';
$string['clampmail:cansendtoall'] = 'グループ設定に関係なく、ユーザがコース内すべてのユーザにメール送信できるようにします。';
$string['composenew'] = '新しいメールを作成する';
$string['config'] = '設定';
$string['default_flag'] = 'デフォルト';
$string['default_signature'] = '{$a} (デフォルト)';
$string['defaultgroupmode'] = 'デフォルトグループモード';
$string['defaultgroupmode_desc'] = '新しいブロックインスタンスのデフォルトグループモードです。';
$string['delete_confirm'] = '本当に次の内容のメッセージを削除してもよろしいですか: {$a}';
$string['delete_email'] = 'メールを削除する';
$string['delete_failed'] = 'メールの削除に失敗しました。';
$string['delete_signature_confirm'] = '本当に {$a} を削除してもよろしいですか?';
$string['drafts'] = '下書きを表示する';
$string['email'] = 'メール';
$string['eventalternateemailadded'] = '代替メールが追加されました。';
$string['from'] = 'From';
$string['log'] = '履歴を表示する';
$string['manage_signatures'] = '署名を管理する';
$string['maximumupload'] = '最大添付サイズ';
$string['maximumupload_desc'] = '個々のメールの最大添付サイズです。';
$string['message'] = 'メッセージ';
$string['missing_recipient'] = 'ID {$a} の受信者はこのコースに登録されていません。';
$string['newsignature'] = '新しい署名';
$string['no_alternates'] = '{$a->fullname} の代替メールが見つかりませんでした。続けて代替メールを作成します。';
$string['no_course'] = 'ID {$a} のコースは無効です。';
$string['no_drafts'] = 'あなたにメール下書きはありません。';
$string['no_email'] = '{$a->lastname} {$a->firstname} にメールを送信できませんでした。';
$string['no_filter'] = 'フィルタなし';
$string['no_group'] = 'グループ未所属';
$string['no_log'] = 'あなたにはまだメール履歴がありません。';
$string['no_permission'] = 'あなたには {$a} でメールを送信するパーミッションがありません。';
$string['no_recipient_emails'] = 'メールの受信者がいません。あなたが送信先を入力し忘れたか、送信できないアドレスを選択した可能性があります。';
$string['no_selected'] = 'あなたはメールを送信するユーザを選択する必要があります。';
$string['no_subject'] = 'あなたは件名を入力する必要があります。';
$string['no_type'] = '{$a} は使用可能なタイプビューアにありません。アプリケーションを正しく使用してください。';
$string['no_users'] = 'あなたがメールできるユーザはいません。';
$string['not_valid'] = 'これは有効なメールログビューアのタイプではありません: {$a}';
$string['not_valid_action'] = 'あなたは有効なアクションを提供する必要があります: {$a}';
$string['not_valid_typeid'] = 'あなたは {$a} の有効なメール提供する必要があります。';
$string['not_valid_user'] = 'あなたは他のメール履歴を閲覧できません。';
$string['open_email'] = 'メールを開く';
$string['pluginname'] = 'CLAMPメール';
$string['potential_groups'] = '潜在的グループ';
$string['potential_users'] = '潜在的受信者';
$string['prepend_class'] = '件名の先頭にコース名を付加する';
$string['prepend_class_desc'] = 'メール件名の先頭にコース省略名を付加します。';
$string['privacy:metadata:clampmail_drafts'] = 'メール下書きを保存する';
$string['privacy:metadata:clampmail_log'] = '送信メールのログです。';
$string['privacy:metadata:clampmail_message:mailto'] = 'メール受信者のIDです。';
$string['privacy:metadata:clampmail_message:message'] = 'メールコンテンツです。';
$string['privacy:metadata:clampmail_message:subject'] = 'メール件名行です。';
$string['privacy:metadata:clampmail_message:time'] = 'メールが送信または保存された時間です。';
$string['privacy:metadata:clampmail_message:userid'] = 'メールを作成したユーザのIDです。';
$string['privacy:metadata:clampmail_signatures'] = 'メール署名です。';
$string['privacy:metadata:clampmail_signatures:signature'] = '署名のコンテンツです。';
$string['privacy:metadata:clampmail_signatures:title'] = '署名のタイトルです。';
$string['privacy:metadata:clampmail_signatures:userid'] = 'この署名を所有するユーザのIDです。';
$string['receipt'] = 'コピーを受信する';
$string['receipt_help'] = '送信メールのコピーを受信します。';
$string['remove_all'] = 'すべてを削除する';
$string['remove_button'] = '削除';
$string['required'] = '必須フィールドに入力してください。';
$string['reset'] = 'システムデフォルトをリストアする';
$string['role_filter'] = 'ロールフィルタ';
$string['save_draft'] = '下書きを保存する';
$string['select_cansend'] = 'メール送信可能ロール';
$string['select_cansend_help'] = 'このオプションでは「block/clampmail:cansend」ケイパビリティのオーバーライドを設定または削除します。';
$string['select_roles'] = 'フィルタするロール';
$string['select_users'] = 'ユーザを選択する ...';
$string['selected'] = '選択済み受信者';
$string['send_email'] = 'メールを送信する';
$string['sig'] = '署名';
$string['signature'] = '署名';
$string['signature_text'] = '署名テキスト';
$string['subject'] = '件名';
$string['title'] = 'タイトル';
