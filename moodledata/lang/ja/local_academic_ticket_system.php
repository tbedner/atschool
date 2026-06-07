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
 * Strings for component 'local_academic_ticket_system', language 'ja', version '4.4'.
 *
 * @package     local_academic_ticket_system
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['academic_ticket_system:addcategory'] = '新しいカテゴリを追加する権限';
$string['academic_ticket_system:addticket'] = '新しいチケットを作成する権限（学生）';
$string['academic_ticket_system:download'] = 'チケットの添付ファイルをダウンロードする権限';
$string['academic_ticket_system:manageticket'] = 'すべてのチケットを管理・割り当てる権限（管理者／スタッフ）';
$string['academic_ticket_system:specialist'] = 'スペシャリストとして緊急通知を受け取る';
$string['academic_ticket_system:viewownoverviews'] = '自分のアクティビティダッシュボードを表示';
$string['academic_ticket_system:viewticket'] = 'チケットの詳細を閲覧する権限';
$string['action_needed_hint'] = 'スタッフから返信があります。ご対応ください。';
$string['actions'] = '操作';
$string['add_department'] = '部門';
$string['add_new_department'] = '新しい部門を追加';
$string['add_reply_heading'] = '返信を書く';
$string['add_ticket'] = '新しいチケットを追加';
$string['add_to_navbar'] = 'ナビゲーションバーに追加';
$string['add_to_navbar_desc'] = '有効にすると、チケットシステムへのリンクがメインナビゲーションに追加されます。';
$string['admin_alert_body'] = '<div style="padding: 15px; border-left: 5px solid #ef4444; background-color: #fef2f2;">
    <h3 style="margin-top:0; color: #b91c1c;">🚨 緊急チケットを受信しました</h3>
    <p><strong>学生:</strong> {$a->firstname}</p>
    <p><strong>件名:</strong> {$a->title}</p>
    <p><strong>カテゴリ:</strong> {$a->category}</p>
    <hr style="border:0; border-top:1px solid #fee2e2; margin: 10px 0;">
    <a href="{$a->url}" style="background-color: #dc2626; color: white; padding: 8px 15px; text-decoration: none; border-radius: 5px; display: inline-block;">
        チケットを確認する
    </a>
</div>';
$string['admin_alert_subject'] = '🚨 緊急: 新規チケット #{$a->id} - {$a->title}';
$string['admin_only_label'] = '管理者向け設定';
$string['all_rights_reserved'] = '著作権所有：';
$string['all_tickets'] = 'すべてのアカデミックチケット';
$string['all_tickets_stats'] = '全体チケット概要';
$string['allowed_file_types'] = 'PDF、JPG、PNG（最大 5MB）';
$string['assign_user'] = 'スペシャリストを割り当て';
$string['assign_user_label'] = '担当スペシャリストを割り当て';
$string['assignable_roles'] = '割り当て可能なロール';
$string['assignable_roles_desc'] = 'チケットに割り当て可能なロールを選択します。ここで選択されたロールを持つユーザが、担当者の候補として表示されます。';
$string['assigned_to'] = '担当スペシャリスト';
$string['assigned_to_label'] = '担当者';
$string['assigned_to_me'] = '自分が担当';
$string['assigned_user'] = '担当者';
$string['attach_files_optional'] = '添付ファイル（任意）';
$string['attached_files'] = '添付ファイル：';
$string['attachments'] = '添付ファイル';
$string['attachments_heading'] = '元の添付ファイル';
$string['attention_required'] = '対応が必要です';
$string['awaiting_me_label'] = '自分の対応待ち';
$string['back_to_home'] = 'ホームに戻る';
$string['browser_no_audio'] = 'お使いのブラウザは audio 要素をサポートしていません。\'';
$string['cancel'] = 'キャンセル';
$string['category'] = 'カテゴリ';
$string['category_title'] = '対応部門';
$string['change_category_label'] = '対応部門を変更';
$string['change_status_label'] = 'ステータスを更新';
$string['click_to_download'] = 'クリックしてダウンロード';
$string['click_to_record'] = 'マイクをクリックして録音を開始';
$string['click_to_upload'] = 'クリックしてファイルを選択';
$string['close'] = 'クローズする';
$string['closed_label'] = 'クローズ';
$string['copyright_label'] = '著作権';
$string['create_ticket'] = 'チケットを作成';
$string['created_at'] = '作成日';
$string['created_by'] = '作成者';
$string['creation_failed'] = '部門の作成に失敗しました。もう一度お試しください。';
$string['current_year_label'] = '現在の年';
$string['default_email_placeholder'] = 'noreply@yourmoodlesite.com';
$string['department'] = '部門';
$string['department_created'] = '部門が正常に作成されました';
$string['department_deleted'] = '部門が削除されました';
$string['department_updated'] = '部門が更新されました';
$string['description'] = '説明';
$string['description_placeholder'] = '問題の内容を詳しく記入してください…';
$string['drag_drop_hint'] = 'ここにファイルをドラッグ＆ドロップ、またはクリックしてアップロード';
$string['email_confirm_body'] = '<div style="background-color: #f3f4f6; padding: 40px 0; font-family: \\\'Segoe UI\\\', Tahoma, Geneva, Verdana, sans-serif; color: #374151;">
    <div style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.05); border: 1px solid #e5e7eb;">
        <div style="background: linear-gradient(135deg, #4f46e5 0%, #3b82f6 100%); padding: 32px; text-align: center;">
            <h1 style="color: #ffffff; margin: 0; font-size: 24px; font-weight: 800; letter-spacing: -0.5px;">チケットを受け付けました</h1>
            <p style="color: #e0e7ff; margin: 8px 0 0 0; font-size: 15px; font-weight: 500;">ご依頼内容を確認しています</p>
        </div>
        <div style="padding: 40px 30px;">
            <p style="font-size: 16px; margin-bottom: 24px; color: #111827;">{$a->firstname} さん、</p>
            <p style="line-height: 1.6; color: #4b5563; margin-bottom: 30px;">
                お問い合わせいただきありがとうございます。新しいサポートチケットが正常に作成されました。サポートチームが内容を確認し、追ってご連絡いたします。
            </p>
            <div style="background-color: #f9fafb; border: 1px solid #e5e7eb; border-radius: 12px; padding: 24px; margin-bottom: 32px;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="padding: 8px 0; color: #6b7280; font-size: 12px; text-transform: uppercase; font-weight: 700; letter-spacing: 0.5px;">チケット ID</td>
                        <td style="padding: 8px 0; color: #111827; font-weight: 700; text-align: right; font-family: monospace; font-size: 14px;">#{$a->id}</td>
                    </tr>
                    <tr style="border-top: 1px dashed #e5e7eb;">
                        <td style="padding: 12px 0 8px; color: #6b7280; font-size: 12px; text-transform: uppercase; font-weight: 700; letter-spacing: 0.5px;">件名</td>
                        <td style="padding: 12px 0 8px; color: #111827; text-align: right; font-weight: 600;">{$a->title}</td>
                    </tr>
                    <tr style="border-top: 1px dashed #e5e7eb;">
                        <td style="padding: 12px 0 8px; color: #6b7280; font-size: 12px; text-transform: uppercase; font-weight: 700; letter-spacing: 0.5px;">部門</td>
                        <td style="padding: 12px 0 8px; color: #111827; text-align: right;">{$a->category}</td>
                    </tr>
                    <tr style="border-top: 1px dashed #e5e7eb;">
                        <td style="padding: 12px 0 8px; color: #6b7280; font-size: 12px; text-transform: uppercase; font-weight: 700; letter-spacing: 0.5px;">日付</td>
                        <td style="padding: 12px 0 8px; color: #111827; text-align: right;">{$a->date}</td>
                    </tr>
                    <tr style="border-top: 1px dashed #e5e7eb;">
                        <td style="padding: 12px 0 0; color: #6b7280; font-size: 12px; text-transform: uppercase; font-weight: 700; letter-spacing: 0.5px;">ステータス</td>
                        <td style="padding: 12px 0 0; text-align: right;">
                            <span style="background-color: #dbeafe; color: #1e40af; padding: 4px 12px; border-radius: 9999px; font-size: 11px; font-weight: 800; text-transform: uppercase;">{$a->status}</span>
                        </td>
                    </tr>
                </table>
            </div>
            <div style="text-align: center;">
                <a href="{$a->url}" style="display: inline-block; background: linear-gradient(to right, #4f46e5, #3b82f6); color: #ffffff; text-decoration: none; padding: 14px 36px; border-radius: 10px; font-weight: 700; font-size: 16px; box-shadow: 0 4px 15px rgba(59, 130, 246, 0.4); transition: all 0.3s ease;">
                    チケットの詳細を確認する
                </a>
            </div>
            <p style="text-align: center; font-size: 12px; color: #9ca3af; margin-top: 24px;">
                または、以下のリンクをコピーしてアクセスできます：<br>
                <a href="{$a->url}" style="color: #6b7280; text-decoration: none;">{$a->url}</a>
            </p>
        </div>
        <div style="background-color: #f9fafb; padding: 24px; text-align: center; border-top: 1px solid #e5e7eb;">
            <p style="color: #9ca3af; font-size: 12px; margin: 0 0 8px;">
                このメールは自動送信されています。直接返信しないでください。
            </p>
            <p style="color: #d1d5db; font-size: 11px; margin: 0; font-weight: 600; text-transform: uppercase;">
                {$a->site} サポートシステムより送信
            </p>
        </div>
    </div>
</div>';
$string['email_confirm_body_plain'] = '{$a->firstname} さん

チケット #{$a->id}（「{$a->title}」）を受け付けました。
現在のステータス：{$a->status}

以下のリンクからチケットの状況を確認できます：
{$a->url}

{$a->site} サポートチーム';
$string['email_confirm_subject'] = '✔ 【チケット #{$a->id}】ご依頼を受け付けました：{$a->title}\'';
$string['enable'] = 'システムを有効化';
$string['enable_desc'] = '有効にすると、ユーザはチケットを作成・閲覧できるようになります。';
$string['error'] = 'エラー';
$string['experience_question'] = 'サポート対応はいかがでしたか？';
$string['feedback_help'] = 'サービス向上のため、ご意見をお寄せください。';
$string['feedback_placeholder'] = '追加のコメントがあればご記入ください（任意）';
$string['feedback_submitted'] = 'フィードバックが送信されました';
$string['filesselected'] = '{$a} 件のファイルを選択しました';
$string['form_instruction'] = 'サポートいたしますので、以下のフォームにご記入ください。';
$string['happy_to_help_hint'] = '問題は正常に解決されました。';
$string['header_subtitle'] = '本日もサポートいたします 🌟';
$string['id'] = 'ID';
$string['internal_note_placeholder'] = '同僚向けのメモを入力してください…';
$string['internal_notes_heading'] = '内部メモ';
$string['ip_address'] = 'IP アドレス';
$string['live_stats_heading'] = 'ライブ統計ダッシュボード';
$string['live_viewing'] = 'ライブ閲覧中';
$string['log_assigned'] = 'チケットを担当者に割り当てました：{$a}';
$string['log_category_changed'] = '対応部門を変更しました：{$a}';
$string['log_feedback_submitted'] = '評価を送信しました：星{$a}つ';
$string['log_internal_note_added'] = '内部メモを追加しました';
$string['log_replied'] = '新しい返信を追加しました';
$string['log_status_changed'] = '{$a->user} がステータスを {$a->old} から {$a->new} に変更しました。';
$string['log_status_changed_from_to'] = '{$a->user} がステータスを「{$a->old}」から「{$a->new}」に変更しました';
$string['messageprovider:admin_urgent_alert'] = '管理者向け：緊急チケット通知';
$string['messageprovider:ticket_confirmation'] = 'チケット送信確認';
$string['mic_access_denied'] = 'マイクへのアクセスが拒否されました。';
$string['my_assignment'] = '自分の担当';
$string['my_summary_heading'] = '自分のアクティビティ概要';
$string['my_tickets_desc'] = '自分のサポート依頼を確認・管理できます';
$string['my_tickets_label'] = '自分のチケット';
$string['next'] = '次へ';
$string['no_internal_notes'] = '内部メモはまだありません。';
$string['no_recent_tickets'] = '最近のチケットはありません。';
$string['no_replies_hint'] = '最初の返信を追加しましょう。';
$string['no_replies_message'] = 'このチケットにはまだ返信がありません。';
$string['no_tickets_desc'] = 'まだチケットを作成していません。';
$string['no_tickets_message'] = 'まだサポートチケットを送信していません。
お困りですか？新しいチケットを作成すると、サポートチームが対応します。';
$string['no_tickets_title'] = 'チケットが見つかりません';
$string['nopermission'] = 'アクセスが拒否されました';
$string['nopermission_desc'] = 'このチケットを閲覧する権限がありません。';
$string['of'] = '/';
$string['open_label'] = 'オープン';
$string['pluginname'] = 'アカデミックチケットシステム';
$string['previous'] = '前へ';
$string['primary_color'] = 'プライマリカラー';
$string['primary_color_desc'] = 'ボタン、ヘッダー、主要なブランド要素に使用される基本色です。';
$string['priority'] = '優先度';
$string['priority_high'] = '高';
$string['priority_low'] = '低';
$string['priority_medium'] = '中';
$string['priority_urgent'] = '緊急';
$string['privacy:metadata:presence'] = 'リアルタイム閲覧状況を一時的に保存します。';
$string['privacy:metadata:presence:ticketid'] = '閲覧中のチケット ID。';
$string['privacy:metadata:presence:timemodified'] = '閲覧状況が最後に更新された時刻。';
$string['privacy:metadata:presence:userid'] = 'チケットを閲覧しているユーザの ID。';
$string['privacy:metadata:tickets'] = 'ユーザが作成したサポートチケットを保存します。';
$string['privacy:metadata:tickets:content'] = 'チケットの内容と説明。';
$string['privacy:metadata:tickets:created_at'] = 'チケットが作成された日時。';
$string['privacy:metadata:tickets:title'] = 'チケットの件名。';
$string['privacy:metadata:tickets:userid'] = 'チケットを作成したユーザの ID。';
$string['quick_tip_label'] = 'クイックヒント';
$string['ready'] = '準備完了';
$string['recent_tickets_heading'] = '最新の学生チケット';
$string['record_voice_note'] = '音声メモ（アクセシビリティ）';
$string['recording_finished'] = '音声メモを録音しました';
$string['recording_now'] = '録音中…終了するには停止をクリック';
$string['remove_file'] = 'ファイルを削除';
$string['reopen_ticket_button'] = 'チケットを再オープン';
$string['replies_heading'] = 'ディスカッション履歴';
$string['resolved_label'] = '解決済み';
$string['return_home'] = '一覧に戻る';
$string['rolespecialist'] = 'サポートスペシャリスト';
$string['rolespecialistdescription'] = '部門のアカデミックチケットとサポートワークフローを担当します。';
$string['search_placeholder'] = 'ID または件名で検索…';
$string['search_user_placeholder'] = '氏名、メールアドレス、ユーザ名で検索…';
$string['secondary_color'] = 'セカンダリカラー';
$string['secondary_color_desc'] = 'グラデーション、アクセント、補助的な UI 要素に使用されます。';
$string['select_department_hint'] = '-- 部門を選択 --';
$string['select_priority_hint'] = '優先度を選択';
$string['send_reply_button'] = '返信とファイルを送信';
$string['send_ticket'] = 'チケットを送信';
$string['sending'] = '送信中…';
$string['showing'] = '表示中';
$string['sorry_no_ticket'] = 'チケットが見つかりません';
$string['start_new_ticket_btn'] = '最初のチケットを作成';
$string['start_recording'] = '録音を開始';
$string['start_reply'] = '下から返信を始めましょう！';
$string['status'] = 'チケットステータス';
$string['status_admin_reply'] = '管理者が返信';
$string['status_adminreply'] = '管理者返信';
$string['status_assigned'] = 'スペシャリストに割り当て済み';
$string['status_closed'] = 'クローズ';
$string['status_in_progress'] = '対応中';
$string['status_open'] = 'オープン';
$string['status_pending'] = '保留';
$string['status_resolved'] = '解決済み';
$string['status_student_reply'] = '学生が返信';
$string['status_studentreply'] = '学生返信';
$string['status_urgent'] = '緊急';
$string['stop_recording'] = '録音を停止';
$string['student'] = '学生';
$string['student_dashboard_tip'] = '迅速な対応のため、12 時間以内に返信してください。12 時間以上活動がないチケットは自動的にクローズされます。';
$string['submit'] = '送信';
$string['submit_feedback'] = 'フィードバックを送信';
$string['success'] = '成功';
$string['support_email'] = 'サポートメール';
$string['support_email_desc'] = 'ユーザに表示される連絡用メールアドレスです。';
$string['support_team'] = 'サポートチーム';
$string['system_name'] = '最初の部門名';
$string['system_name_desc'] = '最初の部門のデフォルト名です。「部門」セクションから名称変更や追加管理ができます。';
$string['ticket_department_label'] = '部門';
$string['ticket_description_label'] = '問題の説明';
$string['ticket_details_heading'] = 'チケット詳細';
$string['ticket_id_label'] = 'チケット参照 ID';
$string['ticket_log'] = 'アクティビティ履歴';
$string['ticket_priority_label'] = 'チケットの優先度';
$string['ticket_status_label'] = '現在のステータス';
$string['ticket_title'] = 'チケット件名';
$string['ticket_title_help'] = 'サポート依頼の内容が分かる、簡潔で分かりやすい件名を入力してください。';
$string['ticket_title_label'] = 'チケット件名';
$string['tickets_count'] = '件のチケット';
$string['ticketsystem'] = 'チケットシステム';
$string['title'] = '件名';
$string['title_placeholder'] = '例：コースにアクセスできません…';
$string['to'] = '〜';
$string['tooltip_category_hint'] = 'この問題を担当する部門を選択してください。';
$string['tooltip_desc_hint'] = '詳細を入力してください（再現手順、エラー内容など）。';
$string['tooltip_priority_hint'] = '依頼の緊急度を選択してください。';
$string['tooltip_title_hint'] = 'チケットの内容が分かる短い名前を付けてください。';
$string['tooltip_upload_hint'] = 'スクリーンショットやログをアップロードできます（最大 5MB）。';
$string['tooltip_voice_hint'] = '複雑な問題に最適です（最大 2 分）。';
$string['total'] = '合計';
$string['total_tickets_label'] = 'チケット総数';
$string['unassigned'] = '未割り当て';
$string['under_review_label'] = '確認中';
$string['update_category_button'] = '部門を更新';
$string['update_status_button'] = '変更を保存';
$string['user_name_label'] = '送信者';
$string['view'] = '詳細を見る';
$string['view_profile'] = 'プロフィールを見る';
$string['view_ticket'] = 'チケットを見る';
$string['viewticket'] = 'チケットを見る';
$string['visit_my_portfolio'] = 'ポートフォリオを見る';
$string['we_are_working_hint'] = '現在、ご依頼内容を確認しています。';
$string['welcome_message'] = 'アカデミックチケットシステムへようこそ';
$string['write_your_reply'] = '返信内容を入力してください…';
