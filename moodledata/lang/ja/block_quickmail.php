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
 * Strings for component 'block_quickmail', language 'ja', version '4.4'.
 *
 * @package     block_quickmail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = '操作';
$string['additional_emails'] = '追加メール';
$string['additional_emails_help'] = 'あなたがメッセージを送信したい他のメールアドレスのカンマ (,) またはセミコロン (;) で区切られたリストです。例:

email1@example.com, email2@example.com';
$string['additionalemail'] = '外部メールアドレスを許可する';
$string['additionalemail_desc'] = 'この設定を有効にした場合、送信者はMoodle外の追加メールにメッセージを送信できるようになります。';
$string['all_in_course'] = 'コース内すべて';
$string['allow_mentor_copy'] = '送信時、送信者が受信者のメンターに自動的にメッセージを送れるようにする';
$string['allow_mentor_copy_help'] = '「No」を選択した場合、このオプションは送信者には表示されません。また、メンターにもコピーされません。「Yes」を選択した場合、送信者はメッセージごとにオプションを選択できます。「強制」を選択した場合、このオプションは強制的に選択され選択解除できません。';
$string['allowstudents'] = '学生にクイックメールの使用を許可する';
$string['allowstudents_desc'] = '学生がクイックメールを使用できるようにします。あなたが「なし」を選択した場合、学生がブロックを使用できるようコースレベルでは設定できません。';
$string['alternate'] = '代替メール';
$string['alternate_activated'] = '代替メールアドレス {$a} は使用できません!';
$string['alternate_already_confirmed'] = 'このメールはすでに確認されています。';
$string['alternate_availability'] = '誰がこのメールから送信できますか?';
$string['alternate_availability_course'] = '{$a->courseshortname} 内のすべての許可されたロール';
$string['alternate_availability_only'] = '{$a->courseshortname} 限定で私のみ';
$string['alternate_availability_user'] = 'すべてのコースで私のみ';
$string['alternate_body'] = '<p>
{$a->fullname} さんが {$a->course} の代替送信メールアドレスとして {$a->address} を追加しました。
</p>

<p>
このメールの目的はこのメールアドレスが存在してメールアドレスの所有者がMoodle内で適切な権限があることを確認するためにあります。
</p>

<p>
確認手続きを完了したい場合、あなたのブラウザから次のURLにアクセスしてください: {$a->url}.
</p>

<p>
このメールが意味をなさない場合、あなたは間違ってメールを受信した可能性があります。このメールを破棄してください。
</p>

ありがとうございます。';
$string['alternate_confirmation_email_resent'] = '確認メールが再送されました!';
$string['alternate_confirmed'] = '確認済み';
$string['alternate_created'] = '代替送信メールが正常に作成されました!';
$string['alternate_delete'] = '代替送信メールアドレスを削除する';
$string['alternate_delete_confirm'] = 'あなたの代替送信メールアドレスを完全に削除してもよろしいですか?';
$string['alternate_deleted'] = 'あなたの代替送信メールアドレスが削除されました。';
$string['alternate_email_not_found'] = 'この代替メールは見つかりませんでした。';
$string['alternate_invalid_token'] = '無効な確認トークンです。';
$string['alternate_new'] = '代替アドレスを追加する';
$string['alternate_owner_must_confirm'] = '確認するにはメールのオーナーである必要があります。';
$string['alternate_owner_must_delete'] = '削除するにはメールのオーナーである必要があります。';
$string['alternate_resend_confirmation'] = '確認メールを再送する';
$string['alternate_subject'] = '代替メールアドレス確認';
$string['alternate_waiting'] = '待機中';
$string['altsendfrom'] = 'メールからの代替を許可する';
$string['altsendfrom_desc'] = 'メールからの代替を許可します (これにはコアの変更が必要です)。';
$string['attached_files'] = '添付ファイル ({$a})';
$string['attachments'] = '添付';
$string['back_to_course'] = 'コースに戻る';
$string['back_to_mypage'] = 'マイページに戻る';
$string['backup_block_configuration'] = 'クイックメールブロックレベルの設定 (「学生にクイックメール使用を許可する」等) をバックアップする';
$string['backup_history'] = 'クイックメール履歴を含む';
$string['body'] = '本文';
$string['broadcast'] = '管理メールを作成する';
$string['cachedef_qm_controller_store'] = 'コントローラインスタンスのキャッシュストアです。';
$string['cachedef_qm_event_notif_last_fired_at'] = 'イベント通知が最後に発生したタイムスタンプのキャッシュストアです。';
$string['cachedef_qm_msg_addl_email_count'] = 'キャッシュされたメッセージの追加メール数です。';
$string['cachedef_qm_msg_attach_count'] = 'キャッシュされたメッセージの添付数です。';
$string['cachedef_qm_msg_deliv_count'] = 'キャッシュされたメッセージの送信数です。';
$string['cachedef_qm_msg_recip_count'] = 'キャッシュされたメッセージの受信者数です。';
$string['compose'] = 'コースメッセージを作成する';
$string['condition_grade_greater_than'] = '次の評点より高い';
$string['condition_grade_less_than'] = '次の評点より低い';
$string['condition_summary_reminder_course_grade_range'] = '次の評点の範囲にいる人すべて: {$a->grade_greater_than} - {$a->grade_less_than}';
$string['condition_summary_reminder_course_non_participation'] = '{$a->time_amount} {$a->time_unit} コースにアクセスしていない人';
$string['could_not_duplicate'] = 'この下書きを複製できませんでした。再度お試しください。';
$string['course_required'] = 'コースは必須です。';
$string['coursealternate_not_allowed'] = 'あなたのこのコースのこの代替メールを共有できません。';
$string['courseferpa'] = 'コースモードを尊重する';
$string['courseneveraccessed'] = '未アクセス';
$string['create_new'] = '新しく作成する';
$string['create_notification'] = '通知を作成する';
$string['create_notification_message'] = '{$a->model} {$a->type} 通知メッセージを作成する';
$string['create_notification_message_description'] = 'この通知の発生時に送信するメッセージを作成します。';
$string['created'] = '作成日時';
$string['critical_error'] = '致命的なエラーが発生しました。';
$string['default_message_type'] = '希望するメッセージ送信方法';
$string['default_message_type_configuration'] = 'この設定はこのコースでメッセージを作成する人へのデフォルトの送信方法となります。送信者はメッセージ作成時にこの設定をオーバーライドできます。';
$string['default_message_type_configuration_help'] = 'この設定はこのコースでメッセージを作成する人へのデフォルトの送信方法となります。送信者はメッセージ作成時にこの設定をオーバーライドできます。';
$string['default_message_type_desc'] = 'あなたのメッセージをMoodleメッセージまたは従来のメールとして送信します。';
$string['delete_draft_confirm_message'] = 'あなたの下書きメッセージを完全に削除してもよろしいですか?';
$string['delete_draft_modal_title'] = 'メッセージ下書きを削除する';
$string['delete_signature'] = '署名を削除する';
$string['delete_signature_confirm_message'] = 'あなたの署名を完全に削除してもよろしいですか?';
$string['delete_signature_modal_title'] = '署名を削除する';
$string['deleted'] = '削除済み';
$string['download_file_content'] = 'ファイルコンテンツをダウンロードする';
$string['downloads'] = '添付にログインを要求する';
$string['downloads_desc'] = 'この設定ではMoodleにログイン済みのユーザのみ添付ファイルを利用できるようにします。';
$string['draft_no_record'] = 'この下書きメッセージが見つかりませんでした。';
$string['drafted'] = '下書き';
$string['drafts'] = '下書き';
$string['duplicate'] = '複製';
$string['duplicate_draft_confirm_message'] = '下書きのコピーを作成してもよろしいですか?';
$string['duplicate_draft_modal_title'] = 'メッセージ下書きを複製する';
$string['edit_conditions'] = 'コンディションを編集する';
$string['edit_event_details'] = 'イベント詳細を編集する';
$string['edit_message'] = 'メッセージを編集する';
$string['edit_notification'] = '通知を編集する';
$string['edit_schedule'] = 'スケジュールを編集する';
$string['email_profile_fields'] = 'メールプロファイルフィールド';
$string['email_profile_fields_desc'] = 'これらのプロファイルフィールドが受信ユーザに設定されている場合、自動的にメール送信されます。';
$string['enable_notification'] = '通知を有効にする';
$string['eventalternateemailadded'] = '代替メールアドレスが追加されました。';
$string['eventalternateemailadded_desc'] = 'ID {$a->user_id} のユーザが代替メールを追加しました: {$a->email}';
$string['excluded_ids_label'] = '除外';
$string['excluded_recipients_desc'] = '送信除外';
$string['failed_recipients'] = '失敗または保留受信者';
$string['failed_recipients_promise'] = 'メッセージが正常に送信されるまで私たちはこれらの受信者への送信を続けます。';
$string['ferpa'] = 'FERPAモード';
$string['ferpa_desc'] = 'システムがコースグループモード設定に従うようにします。またはグループモード設定を無視して分離グループを使用します。またはグループモードすべてを無視するようにします。';
$string['found_filtered_users'] = '{$a} 名のユーザが見つかりました。';
$string['from'] = 'From';
$string['from_email'] = '送信者メールアドレス';
$string['from_email_help'] = 'このメッセージの送信元メールアドレスです。あなたのコースページのブロックメニューで代替アドレスを追加できます。';
$string['here'] = 'ここ';
$string['included_ids_label'] = 'To';
$string['included_recipients_desc'] = '送信対象';
$string['invalid_additional_email'] = 'あなたが入力した追加メール「 {$a} 」が無効です。';
$string['invalid_additional_emails_validation'] = 'あなたが追加した追加メールの一部が無効です。';
$string['invalid_availability'] = '無効なアベイラビリティ値です。';
$string['invalid_condition_grade_greater_than'] = '無効な「次の評点より高い」値です。';
$string['invalid_condition_grade_less_than'] = '無効な「次の評点より低い」値です。';
$string['invalid_condition_time_amount'] = 'コンディションの期間が無効です。';
$string['invalid_condition_time_unit'] = 'コンディションの時間の単位が無効です。';
$string['invalid_custom_data_delimiters'] = 'メッセージ本文の置換コードが正しくフォーマットされていません。';
$string['invalid_custom_data_key'] = 'カスタムデータキー「 {$a} 」は許可されません。';
$string['invalid_custom_data_not_allowed'] = 'このメッセージにはカスタム置換コードは許可されません。';
$string['invalid_email'] = '無効なメールアドレスです。';
$string['invalid_notification_model'] = '無効な数値モデルが選択されました。';
$string['invalid_notification_type'] = '通知タイプは「リマインダ」または「イベント」にする必要があります。';
$string['invalid_schedule_time_amount'] = 'スケジュールの期間が無効です。';
$string['invalid_schedule_time_unit'] = 'スケジュールの時間の単位が無効です。';
$string['invalid_send_method'] = 'この送信方法は許可されません。';
$string['invalid_time_amount'] = '無効な期間です。';
$string['invalid_time_relation'] = '「前」または「後」である必要があります。';
$string['invalid_time_unit'] = '無効な時間単位です。';
$string['is_enabled'] = '有効';
$string['last_run_at'] = '前回実行';
$string['last_updated'] = '最終更新日時';
$string['manage_alternates'] = '代替メール';
$string['manage_drafts'] = '下書きを表示する';
$string['manage_signatures'] = '署名';
$string['mentor_copy'] = '受信者のメンターにコピーを送信しますか?';
$string['mentor_copy_help'] = 'この設定を有効にした場合、あなたの受信者のメンターにメッセージのコピーが送信されます。';
$string['mentor_copy_message_prefix'] = '<p><strong>あなたは次のメンターとして割り当てられているためこのメッセージを受信しています</strong>: {$a} 次はあなたのメンティーにも送信されたメッセージのコピーです。</p>';
$string['mentor_copy_subject_prefix'] = '[メンターコピー]';
$string['mentors_copied'] = 'メンターにコピーを送信する';
$string['message_deleted'] = 'メッセージが削除されました。';
$string['message_details'] = 'メッセージ詳細';
$string['message_no_record'] = 'そのメッセージは見つかりませんでした。';
$string['message_not_found'] = 'そのメッセージは見つかりませんでした。';
$string['message_preview'] = 'メッセージプレビュー';
$string['message_queued'] = '送信メッセージがスケジュールされました。';
$string['message_sent_asap'] = 'まもなくメッセージが送信されます。';
$string['message_sent_now'] = 'メッセージが送信されました。';
$string['message_type'] = 'クイックメール送信形式';
$string['message_type_available_all'] = '制限なし、送信者プリファレンス';
$string['message_type_available_email'] = '従来のメールのみに制限する';
$string['message_type_available_message'] = 'Moodleメッセージのみに制限する';
$string['message_type_desc'] = 'クイックメールメッセージをMoodleメッセージ、従来のメールまたは送信者のプリファレンスで送信できるようにします。';
$string['message_type_email'] = 'メール';
$string['message_type_message'] = 'Moodleメッセージ';
$string['message_types_available'] = 'メッセージタイプ制限';
$string['message_types_available_desc'] = '送信されるクイックメールメッセージをMoodleメッセージ、従来のメールまたは送信者のプリファレンスに制限します。';
$string['message_unqueued'] = 'メッセージがスケジュールから除外されました。';
$string['messageprovider:quickmessage'] = 'クイックメールメッセージ';
$string['migrate'] = 'データを移行する';
$string['migrate_legacy_data_task'] = 'クイックメール v1からv2に履歴データを移行する';
$string['migration_chunk_size'] = '移行分割サイズ';
$string['migration_chunk_size_desc'] = '有効な場合、レガシーデータ移行タスクの実行ごとに処理されるレコード数です。';
$string['missing_body'] = 'メッセージ本文がありません。';
$string['missing_email'] = 'メールアドレスがありません。';
$string['missing_firstname'] = '名がありません。';
$string['missing_lastname'] = '姓がありません。';
$string['missing_notification_name'] = '通知名がありません。';
$string['missing_subject'] = '件名行がありません。';
$string['ms_alternate'] = '代替メール';
$string['ms_compose'] = '作成';
$string['ms_config'] = '設定';
$string['ms_create_notification'] = '通知を作成する';
$string['ms_drafts'] = '下書き';
$string['ms_notifications'] = '通知';
$string['ms_queued'] = 'スケジュール';
$string['ms_sent'] = 'メールを送信する';
$string['ms_signatures'] = '署名';
$string['must_be_draft_to_duplicate'] = '複製するにはメッセージが下書きである必要があります。';
$string['must_be_owner_to_duplicate'] = '申し訳ございません。この下書きはあなたのものではないため複製できません。';
$string['mute_time_summary'] = 'ミュート時間';
$string['mute_time_unit'] = 'ミュート時間';
$string['mute_time_unit_help'] = 'この通知が自動的に送信されるまでに経過する必要のある任意の期間です。';
$string['never'] = 'なし';
$string['next_run_at'] = '次回実行';
$string['no_alternates'] = 'あなたに代替メールはありません。新しく作成してください!';
$string['no_drafts'] = 'あなたにメッセージの下書きはありません。';
$string['no_excluded_recipients'] = '除外受信者なし';
$string['no_included_recipients'] = '受信者なし';
$string['no_included_recipients_validation'] = 'あなたは少なくとも1名の受信者を選択する必要があります。';
$string['no_notifications'] = 'あなたは通知を作成していません。';
$string['no_queued'] = 'あなたにはスケジュールメッセージがありません。';
$string['no_sents'] = 'あなたには送信メッセージ履歴がありません。';
$string['no_signatures_create'] = 'あなたには署名がありません。{$a}';
$string['noferpa'] = 'グループ関係なし';
$string['notification_already_sent'] = 'この通知はすでに少なくとも1回送信されています。';
$string['notification_conditions'] = 'コンディション';
$string['notification_conditions_description'] = 'この通知のコンディションをしてしてください。これらのコンディションに該当する受信者に通知されます。';
$string['notification_created'] = '通知が作成されました。';
$string['notification_deleted'] = '通知が削除されました。';
$string['notification_is_enabled'] = '通知有効';
$string['notification_is_enabled_help'] = 'この設定を有効にした場合、この通知が有効になります。そうでない場合、あなたが有効にするまで通知は無効にされます。';
$string['notification_model'] = '通知モデル';
$string['notification_model_event_course_entered'] = 'コース入室';
$string['notification_model_event_course_entered_description'] = 'コース参加者の初回コースアクセス時に通知します。';
$string['notification_model_reminder_course_grade_range'] = 'コース評定範囲';
$string['notification_model_reminder_course_grade_range_condition_description'] = '評定範囲を選択してください。現在コース参加者がこの範囲内にいる場合、通知が送信されます。';
$string['notification_model_reminder_course_grade_range_description'] = '指定された範囲内の評点のコース参加者に通知します。';
$string['notification_model_reminder_course_non_participation'] = 'コース非参加者';
$string['notification_model_reminder_course_non_participation_condition_description'] = '最後にコースにアクセスしてからの時間を指定してください。コース参加者がこの時間内にコースにアクセスしていない場合、通知されます。';
$string['notification_model_reminder_course_non_participation_description'] = '一定期間コースにアクセスしていないコース参加者に通知します。';
$string['notification_name'] = 'タイトル';
$string['notification_name_help'] = 'あなたがこの通知を他の設定した通知から簡単に識別できるための短い説明です。';
$string['notification_name_too_long'] = '通知名は半角40文字以下にしてください。';
$string['notification_not_found'] = 'その通知は見つかりませんでした。';
$string['notification_not_updated'] = '通知が更新されました。';
$string['notification_review'] = 'あなたの通知をレビューする';
$string['notification_schedule'] = 'スケジュール';
$string['notification_type'] = '通知タイプ';
$string['notification_type_event'] = 'イベント';
$string['notification_type_event_description'] = '特定のイベントに応じて送信される自動メッセージです。イベントは活動完了、課題提出、評定完了等を受信者に知らせるため使用できます。';
$string['notification_type_reminder'] = 'リマインダ';
$string['notification_type_reminder_description'] = 'スケジュールに基づいて自動的に送信される定期的なメッセージです。リマインダは近日中に予定されている活動、期限、授業への参加等を受信者に知らせるため使用できます。';
$string['notification_updated'] = '通知が更新されました。';
$string['notifications'] = '通知';
$string['notifications_enabled'] = 'クイックメール通知を有効にする';
$string['notifications_enabled_desc'] = 'コースでリマインダおよびイベントレスポンスを含む自動通知を作成できるようにします。';
$string['notified_by'] = '通知方法';
$string['open'] = 'オープン';
$string['open_broadcast'] = 'メッセージを作成する';
$string['open_compose'] = 'メッセージを作成する';
$string['overwrite_history'] = 'クイックメール履歴を上書きする';
$string['pending_recipients'] = '保留受信者';
$string['pending_recipients_promise'] = 'これらの受信者には現在メッセージが送信されていますが、失敗した場合は後ほどご確認ください。';
$string['picker_style_autocomplete'] = '自動補完';
$string['picker_style_multiselect'] = '複数選択';
$string['picker_style_option_title'] = '希望する受信者ピッカスタイル';
$string['picker_style_option_title_help'] = 'あなたがメッセージ作成時に希望する受信者選択インタフェースです。';
$string['pluginname'] = 'クイックメール';
$string['prepend_class'] = 'コース名を先頭に追加する';
$string['prepend_class_configuration'] = 'メッセージ件名の始めにコース識別情報を追加します。';
$string['prepend_class_configuration_help'] = 'メッセージ件名の始めにコース識別情報を追加します。';
$string['prepend_class_desc'] = 'メッセージの件名にコース識別情報を追加します。この設定はコース設定にオーバーライドされます。';
$string['preview_no_body'] = '(コンテンツなし)';
$string['preview_no_subject'] = '(件名なし)';
$string['profile_mentor_copy_message_prefix'] = '<p><strong>あなたは意図された受信者の {$a} として割り当てられているためこのメッセージを受信しています</strong>。次は受信者に送信されたメッセージのコピーです。</p>';
$string['queue_scheduled_notifications_task'] = '送信予定のスケジュールクイックメール通知をキューに入れる';
$string['queued'] = 'スケジュール';
$string['queued_no_record'] = 'そのキューメッセージは見つかりませんでした。';
$string['quickmail:addinstance'] = '新しいクイックメールブロックをコースページに追加する';
$string['quickmail:allowalternate'] = '送信元の代替メールアドレスを作成する';
$string['quickmail:allowcoursealternate'] = '他のコースインストラクタと共有するための代替メールアドレスを作成する';
$string['quickmail:canconfig'] = 'コースのクイックメール設定を設定する';
$string['quickmail:cansend'] = 'コース内でクイックメールメッセージを送信する';
$string['quickmail:createnotifications'] = 'クイックメールの自動通知を作成する';
$string['quickmail:myaddinstance'] = '「/my」ページに新しいクイックメールブロックを追加する';
$string['quickmail:viewgroupusers'] = 'すべてのグループのすべてのユーザを表示する';
$string['receipt'] = '送信レポートを受信する';
$string['receipt_configuration'] = 'メッセージ送信時にメッセージ送信者に確認メールを送信します。この設定は送信者のデフォルトのプリファレンスになります。';
$string['receipt_configuration_help'] = 'メッセージ送信時にメッセージ送信者に確認メールを送信します。この設定は送信者のデフォルトのプリファレンスになります。';
$string['receipt_email_body'] = '<p>あなたのメッセージが送信されました! あなたはこの送信メッセージ {$a->sent_message_link} の詳細を確認できます。</p>
<p><strong>メッセージ詳細概要</strong>
<br />
<br />
<strong>コース:</strong> {$a->course_name}
<br />
<br />
<strong>メッセー件名:</strong> {$a->subject}
<br />
<br />
<strong>受信者:</strong> {$a->recipient_count}
<br />
<br />
<strong>追加受信メール:</strong> {$a->addition_emails_string}
<br />
<br />
<strong>メンターに送信する:</strong> {$a->sent_to_mentors}
<br />
<br />
<strong>ファイル添付カウント:</strong> {$a->attachment_count}
<br />
<br />
<strong>メッセージ本文:</strong></p>{$a->message_body}';
$string['receipt_help'] = 'デフォルトでメッセージが送信された場合、メッセージ送信者に確認メールを送信します。この設定はコース設定にオーバーライドされます。';
$string['recipients'] = '受信者';
$string['redirect_back_from_message_detail_message_deleted'] = 'あなたが閲覧を試みたメッセージは削除されています。';
$string['redirect_back_from_message_detail_no_access'] = 'あなたはこのメッセージを閲覧できません。';
$string['redirect_back_to_course_from_message_after_duplicate'] = 'あなたのメッセージが正常に複製されました。';
$string['redirect_back_to_course_from_message_after_save'] = 'あなたの下書きが保存されました。';
$string['redirect_back_to_course_from_notifications_not_enabled'] = 'あなたのサイトではクイックメール通知が無効にされています。';
$string['reset_success_message'] = 'クイックメールのデフォルト設定がリストアされました!';
$string['restore_default_confirm_message'] = 'このコースのクイックメール設定をデフォルトに戻してもよろしいですか?';
$string['restore_default_modal_title'] = 'デフォルト設定をリストアする';
$string['restore_history'] = 'クイックメール履歴をリストアする';
$string['save'] = '保存';
$string['save_draft'] = '下書きとして保存する';
$string['save_signature'] = '署名を保存する';
$string['schedule_begin_at'] = '開始日';
$string['schedule_end_at'] = '終了日';
$string['scheduled_time'] = 'スケジュール時間';
$string['select_allowed_user_fields'] = 'サポートされるユーザデータフィールド';
$string['select_allowed_user_fields_desc'] = '送信者は受信者に合わせてメッセージ内容を動的に変化させるため選択したフィールドを参照できます。例: [:firstname:]';
$string['select_message_type'] = 'メッセージ送信形式';
$string['select_notification_model'] = '{$a} 通知モデルを選択する';
$string['select_signature_for_edit'] = '編集する署名を選択する';
$string['selectable_roles'] = '選択可能ロール';
$string['selectable_roles_configuration'] = 'メッセージ作成時、これらのロールを選択できます。';
$string['selectable_roles_configuration_help'] = 'メッセージ作成時、これらのロールを選択できます。';
$string['selectable_roles_desc'] = 'メッセージ作成時、これらのロールを選択できます。この設定はコース設定にオーバーライドされます。';
$string['send_all_ready_messages_task'] = 'すべてのスケジュールクイックメールメッセージを送信する';
$string['send_as_tasks'] = 'すべてのメッセージをバックグラウンドタスクで送信する';
$string['send_as_tasks_help'] = 'この設定を有効にした場合、すべてのメッセージをcronタスクとして非同期に送信します。そうでない場合、直ちに送信します。';
$string['send_at'] = '送信予定日時';
$string['send_message'] = 'メッセージを送信する';
$string['send_now'] = '今すぐ送信する';
$string['send_now_scheduled_confirm_message'] = 'スケジュールを無視して今すぐメッセージを送信してもよろしいですか?';
$string['send_now_scheduled_modal_title'] = 'メッセージを今すぐ送信する';
$string['send_now_threshold'] = '「今すぐ送信する」閾値';
$string['send_now_threshold_desc'] = 'ブロックがバックグラウンドタスクとしてメッセージを送信するよう設定されている場合でも受信者数がこの数以下であればスケジュールされていないメッセージは強制的に即時送信されます。ゼロを設定した場合、この設定は無視されます。';
$string['send_receipt_subject_addendage'] = 'メッセージを送信する';
$string['send_schedule'] = '送信スケジュール';
$string['sending'] = '送信中';
$string['sent'] = '送信';
$string['sent_at'] = '送信予定日時';
$string['sent_messages'] = '送信メッセージ履歴';
$string['set_event_details'] = '{$a->model} イベント通知詳細を設定する';
$string['set_event_details_description'] = 'イベントに関する追加オプションを指定してください。';
$string['set_notification_conditions'] = '{$a->model} {$a->type} 通知コンディションを設定する';
$string['set_notification_schedule'] = '{$a->model} {$a->type} 通知スケジュールを設定する';
$string['set_notification_schedule_description'] = 'この通知を送信する頻度、開始日、終了日を指定してください。終了日が指定されていない場合、この通知は無効または削除されるまで継続して送信されます。';
$string['signature'] = '署名';
$string['signature_signature_required'] = '署名は必須です。';
$string['signature_title_must_be_unique'] = '署名タイトルはユニークである必要があります。';
$string['signature_title_required'] = '署名タイトルは必須です。';
$string['signatures'] = '署名';
$string['status'] = 'ステータス';
$string['strictferpa'] = '常に分離グループ';
$string['subject'] = '件名';
$string['success_recipients_promise'] = 'これらの受信者すべてにシステムから正常にメッセージ送信されました。';
$string['time_amount'] = '期間';
$string['time_beginning'] = '開始:';
$string['time_delay_summary'] = '遅延時間';
$string['time_delay_unit'] = '遅延時間';
$string['time_delay_unit_help'] = '通知が送信されるまでの任意の待機時間です。';
$string['time_ending'] = '終了:';
$string['time_every'] = '毎';
$string['time_once_a'] = '次の期間で1回';
$string['time_relation'] = '前または後';
$string['time_unit'] = '時間単位';
$string['time_unit_day'] = '日';
$string['time_unit_days'] = '日';
$string['time_unit_month'] = '月';
$string['time_unit_months'] = '月';
$string['time_unit_week'] = '週';
$string['time_unit_weeks'] = '週';
$string['title'] = 'タイトル';
$string['unqueue'] = 'キューから外す';
$string['unqueue_scheduled_confirm_message'] = 'このメッセージの送信スケジュールを解除して下書きとして保存してもよろしいですか?';
$string['unqueue_scheduled_modal_title'] = 'スケジュールメッセージをキューから外す';
$string['user_signature_deleted'] = 'あなたの署名が削除されました。';
$string['validation_exception_message'] = '妥当性確認例外です!';
$string['view'] = '表示する';
$string['view_message_detail'] = 'メッセージ詳細を表示する';
$string['view_queued'] = 'スケジュールを表示する';
$string['view_sent'] = '送信済みメッセージを表示する';
