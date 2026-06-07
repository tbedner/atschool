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
 * Strings for component 'report_coursemanager', language 'ja', version '4.4'.
 *
 * @package     report_coursemanager
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admin_course_managerinfo'] = '<p>このページではMoodle管理者用ツールにアクセスできます。コースマネージャ設定は「プラグイン > レポート > コースマネージャ」にアクセスしてください。</p>';
$string['admin_files_distribution_info'] = '<p>このツールではファイルストレージ内の異なるコンポーネントおよびそれぞれの合計サイズのレポートを提供します。</p>';
$string['admin_no_teacher_courses_info'] = '<p>このツールでは教師として登録されているユーザが存在しないすべてのコースを一覧表示します。また、必要に応じてゴミ箱カテゴリに移動できます。</p>';
$string['admin_orphan_submissions_info'] = '<p>迷子の提出とはコースから登録解除された学生が提出していたファイルです。
 <b>これらのファイルは教師からは閲覧できません。再登録した学生のみ閲覧できます。</b>課題がリセットされずに毎年使用される場合、これらの隠しファイルはMoodleにおいて重要なウェイトを占める可能性があります。<br />このツールは<b>まだコースに登録されている学生のファイルを削除せずに</b>これらの隠しファイルを削除できます。</p>';
$string['admin_stats_info'] = 'このページではコースマネージャプラグインにより作成されたレポートに最も基づいた統計を表示します。教師の存在しないコースまたはゴミ箱カテゴリのコース等、コースマネージャの機能に関するいくつかの側面に関する統計も提供します。';
$string['adminnoteachercoursesnote'] = '<ul class="alert alert-info"><li>コースの重さおよび活動数に関する情報はリアルタイムでは計算されません。</li>
<li>最後の教師ログに関する情報はログストアデータベースに保存された教育レベルに基づきます。変更されたパーミッションはこの結果を歪める可能性があります。</li></ul>';
$string['advices_for_course'] = '助言';
$string['all_courses'] = 'すべてのコース';
$string['button_delete_cohort_confirm'] = 'コーホートを登録解除する';
$string['button_move_confirm'] = '削除確認';
$string['button_restore_confirm'] = 'コースリストア確認';
$string['button_save_course'] = 'コースをバックアップする';
$string['button_save_questionbank'] = '問題バンクをバックアップする';
$string['capability_problem'] = 'あなたにはこのページを閲覧するパーミッションがありません。';
$string['category_bin'] = 'ゴミ箱カテゴリ';
$string['category_bin_desc'] = '教師がダッシュボードからコースを削除した場合、実際に管理者に削除される前にこのカテゴリに移動されます。';
$string['closereportmodal'] = 'ウィンドウを閉じる';
$string['collapse_show_report'] = 'レポートを表示する';
$string['comment'] = '助言';
$string['configtitle'] = 'コースマネージャ設定';
$string['confirm_cohort_unenrolled_message'] = 'すべてのコーホートがコースから登録解除されました。';
$string['confirm_cohort_unenrolled_title'] = 'コーホート削除';
$string['confirm_course_deleted_message'] = 'コースはゴミ箱カテゴリに移動されました。後で管理者に削除されます。';
$string['confirm_course_deleted_title'] = 'コース削除';
$string['confirm_course_restored_message'] = 'コースがゴミ箱カテゴリから移動されました。復元されたコースはまだ学生には表示されていないことに留意してください。必要に応じて設定をご検討ください。';
$string['confirm_course_restored_title'] = 'コースリストア';
$string['course_alert_empty'] = 'このコースには固有のフォーラムを除いてコンテンツがありません。このコースが利用されなくなった場合、削除をご検討ください。<br /><b>{$a->delete_link}</b>';
$string['course_alert_heavy'] = 'このコースの合計ファイルサイズは <b>{$a->size} MB</b>です。ファイルの整理またはこのコースのリセットをお考えください。<br /><b>{$a->heavy_link}</b>';
$string['course_alert_no_student'] = '<b>このコースに登録された学生は存在しません。</b>。このコースが利用されなくなった場合、削除をご検討ください。<br /><b>{$a->delete_link}</b>';
$string['course_alert_no_visit_student'] = '<b>このコースには {$a->no_teacher_time} 日以上、学生がアクセスしていません。</b>このコースが利用されなくなった場合、削除をご検討ください。<br /><b>{$a->delete_link} | {$a->reset_link}</b>';
$string['course_alert_no_visit_teacher'] = '<b>このコースには {$a->no_teacher_time} 日以上、教師がアクセスしていません。</b>このコースが利用されなくなった場合、削除をご検討ください。<br /><b>{$a->delete_link}</b>';
$string['course_alert_orphan_submissions'] = 'このコースには登録解除された学生にアップロードされた見えない提出のある課題が含まれています。可能であれば、このコースのリセットをご検討ください。';
$string['course_cohort_unenrolled'] = 'コーホートが登録解除されました。';
$string['course_dashboard_viewed'] = '教師がダッシュボードにアクセスしました。';
$string['course_files_viewed'] = 'ファイルレポートページにアクセスされました。';
$string['course_global_reset'] = 'コースマネージャ機能でコースがリセットされました。';
$string['course_restored'] = 'コースがゴミ箱カテゴリからリストアされました。';
$string['course_state_hidden'] = '秘匿';
$string['course_state_trash'] = '削除予定';
$string['course_state_visible'] = '可視';
$string['course_trash_moved'] = 'コースがゴミ箱カテゴリに移動されました。';
$string['coursemanager:admintools'] = 'レポートセクションで管理ツールを使用する';
$string['coursemanager:viewreport'] = '有効にされている場合、コースでレポートを表示する';
$string['coursesize'] = 'コースサイズ';
$string['delete_already_moved'] = 'このコースはすでにゴミ箱カテゴリにあります。';
$string['delete_cohort_confirm'] = 'この機能はあなたのコースに登録されているすべてのコホートを登録解除します。
<br />
コースからのコーホート登録を解除することでフォーラムメッセージのデータが削除されますが、<b>小テスト受験、課題提出等のデータは削除されない</b>ことに留意してください。 個人データを削除するにはリセット機能を使用してください。
<p class="alert alert-primary"><i class="fa fa-question-circle-o"></i> <b>警告:</b> 登録解除するコホート数に応じてこの処理に時間を要する場合があります。</p>';
$string['delete_period'] = 'コース削除の時間表示';
$string['delete_period_desc'] = 'この情報はゴミ箱カテゴリからコースが削除されるおおよその期間を示します。
あなたは「7月初旬」または「年末」のように記述できます。この情報は教師がコースを削除する際のメールおよびコース削除ページに表示されます。';
$string['delete_send_mail'] = 'コース削除時に拒否するロール';
$string['delete_send_mail_desc'] = 'コース削除時にメールで通知されるロールを選択してください。';
$string['delete_several_teachers'] = '<h4><i class="fa fa-exclamation-triangle"></i> 警告: このコースには複数の教師が存在します!</h4>
これらの教師に通知されていない場合、今すぐ通知してください。<br />コース削除は警告のために<b>このコースに属するすべての教師に自動メールアラートを送信します</b>。<br /><br />
<h5>このコースの他の教師 :</h5>';
$string['delete_wish'] = '何をしますか?';
$string['deletecoursewithoutteachersconfirm'] = 'このコースをゴミ箱カテゴリに移動してもよろしいですか?';
$string['deleteorphans'] = '迷子の提出を削除する';
$string['deleteorphansubmissionsconfirm'] = 'この課題の迷子の提出を削除してもよろしいですか? この操作は元に戻せません。';
$string['empty_course_alert'] = '<b>空のコースです。</b>このコースには固有のフォーラムのみ含まれます。コンテンツ追加予定がない場合、このコースの削除をご検討ください。';
$string['empty_files_course'] = 'このコースにはまだファイルが存在しないようです。';
$string['empty_student_alert'] = '<b>登録学生なし</b><br />このコースに学生として登録されているユーザは存在しません。このコースが利用されなくなった場合、削除をご検討ください。';
$string['emptytablenoteacherincourses'] = '該当なし: すべてのコースには教師が存在します。';
$string['enablemailing'] = 'レポートメーリングを有効にする';
$string['enablemailing_desc'] = 'この設定を有効にした場合、レポートメーリングの自動タスクを有効にします。デフォルトは30日ごとです。';
$string['error_category'] = '正しくないカテゴリが選択されました。';
$string['filesdistributiontablecomponent'] = 'コンポーネント';
$string['filesdistributiontotalfiles'] = 'ファイル数';
$string['filesdistributiontotalweight'] = '合計ファイルサイズ (MB)';
$string['global_chart'] = '活動別ファイル重量分布';
$string['heavy_course'] = '重いコース';
$string['last_access_multiple_teacher_alert'] = '<b>{$a->limit_visit} ヶ月以上、教師がアクセスしていません。</b><br />長期間、教師がこのコースにアクセスしていません。教師による利用がない場合、削除をご検討ください!';
$string['last_access_student'] = '最後の学生アクセス制限 (日数)';
$string['last_access_student_alert'] = '<b>{$a->limit_visit} ヶ月以上、学生がアクセスしていません。</b><br />長期間、学生がこのコースにアクセスしていません。必要であれば削除してください。';
$string['last_access_student_desc'] = '学生がコースにアクセスしなかった日数です。';
$string['last_access_teacher'] = '最後の教師アクセス制限 (日数)';
$string['last_access_teacher_desc'] = '教師がコースにアクセスしなかった日数です。';
$string['last_access_unique_teacher_alert'] = '<b>あなたは {$a->limit_visit} ヶ月以上、コースにアクセスしていません。</b><br />あなたはこのコース唯一の教師です。今後利用しない場合、削除をご検討ください。';
$string['mail_message_delete_main_teacher'] = 'こんにちは<br />
コース {$a->course} は {$a->delete_period} の削除の前にゴミ箱カテゴリに移動されました。データを検索したい場合、あなたは削除前にこのコースにアクセスできます。<br />
あなたがこのコースをリストアしたい場合、コースマネージャダッシュボードでゴミ箱カテゴリの外に移動してください。
注意: {$a->count_teacher} 名の他のユーザが登録されています。あなたがこのコースを削除した旨、メールが送信されました。これらのユーザも教師であるため、必要に応じにコースをリストアまたはデータを取り戻せます。';
$string['mail_message_delete_oneteacher'] = 'こんにちは<br />
コース {$a->course} は {$a->delete_period} の削除の前にゴミ箱カテゴリに移動されました。データを検索したい場合、あなたは削除前にこのコースにアクセスできます。<br />
あなたがこのコースをリストアしたい場合、コースマネージャダッシュボードでゴミ箱カテゴリの外に移動してください。';
$string['mail_message_delete_other_teacher'] = 'こんにちは<br />
コース {$a->course} は {$a->deleter} によって {$a->delete_period} の削除の前にゴミ箱カテゴリに移動されました。データを検索したい場合、あなたは削除前にこのコースにアクセスできます。<br />
あなたがこのコースをリストアしたい場合、コースマネージャダッシュボードでゴミ箱カテゴリの外に移動してください。';
$string['mail_subject_delete'] = 'コース削除 - {$a->course}';
$string['mailingddescreportempty'] = 'これらのコースには固有のMoodleフォーラムを除いてコンテンツがありません。';
$string['mailingddescreportheavy'] = 'このコースの合計ファイルサイズが重いようです。ファイルレポートを閲覧するにはコース名をクリックしてください。';
$string['mailingddescreportnostudent'] = 'このコースに登録された学生は存在しません。';
$string['mailingddescreportnovisitstudent'] = '学生は長い間これらのコースにアクセスしていません。';
$string['mailingddescreportnovisitteacher'] = 'あなたを含む教師は長い間これらのコースにアクセスしていません。';
$string['mailingddescreportorphansubmissions'] = 'これらのコースの一部の課題には登録解除された学生がアップロードした隠し提出があります。これらのファイルは非常に重い場合があります。';
$string['mailingintro'] = '<p>こんにちは %userfirstname% さん</p>
<p>コースマネージャは教師が計算済みレポートを使用してコースを管理するためのツールレポートです。このメールはこれらのレポートを要約してどのコースに問題があるのか示します。</p>
<p><b>これらのレポートはあなたのコース管理の特定の側面に注意を向けて、Moodleを利用する上での良い実践のヒントを与えることのみを目的としています。</b></p>
<p>詳細はあなたの個人<a href="%coursemanagerlink%">コースマネージャダッシュボード</a>にアクセスしてください。</p>';
$string['mailingintro_setting'] = 'メールコンテンツ';
$string['mailingintro_setting_desc'] = 'レポートメーリング紹介:<br />
あなたは以下の変数を使用できます:<br />
%userlastname% : ユーザの姓<br />
%userfirstname% : ユーザの名<br />
%coursemanagerlink% : コースマネージャへのリンク';
$string['mailingoutro'] = '<p>これらのレポートに関する詳細はMoodle管理者またはサポートサービスまでお問い合わせください。';
$string['mailingtask'] = 'コースマネージャ教師用メーリングレポート';
$string['mailingtitle'] = 'コースマネージャ - あなたのコースに関するレポート';
$string['menucoursefilesinfo'] = 'コース内ファイルを閲覧する';
$string['menucourseparameters'] = 'コース設定';
$string['menudeletecourse'] = 'コースを削除する';
$string['menuenrolcohorts'] = 'コーホートを追加する';
$string['menureset'] = 'コースをリセットする';
$string['menurestorecourse'] = 'コースをリストアする';
$string['menuunenrolcohorts'] = 'コーホートバルク登録解除';
$string['more_information'] = '詳細情報';
$string['move_confirm'] = '<div class="alert alert-danger"><h5>削除する前に注意深くお読みください。</h5></div>
<p><b>あなたは利用しなくなったコースをこのページでゴミ箱に移動できます。</b><br/>確認された場合、このコースは特定のカテゴリに移動されて学生から秘匿されます。その後、<b>{$a->delete_period}</b>でMoodle管理者により削除されます。</p>
<p>あなたは削除前でもこのコースにアクセスできます。また必要に応じて復元できます。コースマネジャダッシュボードでコース復元操作を使用してください。</p>
<p>削除する前に重要なファイルおよび問題バンクのバックアップをご検討ください。これらのデータは完全に削除された後では取り戻せません。</p>';
$string['no_advices'] = '<b>具体的なレポートはありません。</b><br />おめでとうございます。このコースはOKです!';
$string['no_cohort'] = '<p class="alert alert-info">このコースに登録されたコーホートはありません!</p>';
$string['no_content'] = '空のコース';
$string['no_course_to_show'] = '<h2>コースなし</h2>あなたは教師ロールでコースに登録されていません。';
$string['no_student'] = '学生登録なし';
$string['no_visit_student'] = '学生アクセスなし';
$string['no_visit_teacher'] = '教師アクセスなし';
$string['noassign'] = 'このMoodleインスタンスには課題がありません。';
$string['number_of_files'] = 'ファイル数';
$string['ok'] = 'レポートなし';
$string['orphan_submissions_alert'] = '<b>迷子の提出 ({$a->filesize} MB)</b><br />このコースには登録解除された学生により提出されたファイルを含む1つまたはそれ以上の課題があります。これらのファイルは大量になる可能性があります。これらの活動のリセットまたは削除をご検討ください。';
$string['orphan_submissions_button'] = '迷子の提出';
$string['plugin'] = '活動タイプ';
$string['pluginname'] = 'コースマネージャ';
$string['privacy:no_data_reason'] = 'コースマネージャプラグインはいかなる個人データも保存しません。コースコンテンツ (設定、登録済み学生および教師、活動数 ...) を調査する目的のためのみにレポートを計算します。';
$string['reset_info'] = '<p class="alert alert-success"><i class="fa fa-info-circle"></i>リセット機能であなたのコースの学生の個人データを削除できます。
 <b>これはあなたのファイルおよび活動は削除しません。</b></p>
<p>このコースリセットで以下を削除します:<ul>
<li><b>完了データ</b> ;</li>
<li><b>評定表内の評定</b> ;</li>
<li><b>グループおよびグルーピング</b> ;</li>
<li><b>課題活動の提出</b> ;</li>
<li><b>フォーラムメッセージ</b> ;</li>
<li><b>小テスト受験</b> ;</li>
<li><b>登録済みコーホート</b> (<span class="text-danger"><b>警告</b>: 学生数が多い場合、この機能に時間を要する場合があります!).</span></li></ul></p>
<p>これ以外のデータは削除されません。</p>
<p>他の活動をリセットしたい場合、<a href="/course/view.php?id="><b>あなたのコースのリセット機能</b></a>を使用してください。<br /></p>
<h5 class="alert alert-primary"><i class="fa fa-question-circle-o"></i> <b>何をしますか?</b></h5>';
$string['reset_result'] = '<p><b>コースがリセットされました。</b></p>
<p><b>注意</b>: ファイルまたは活動は削除されていません。あなたがすべてまたは他の活動をリセットしたい場合、コースのリセット機能を使用してください。</p>';
$string['restore_already_moved'] = 'このコースはゴミ箱カテゴリ内にありません。';
$string['restore_confirm'] = '<p>このページではゴミ箱カテゴリからコースを取り出して他のカテゴリに復元します。</p>
<p class="alert alert-info"><i class="fa fa-info-circle"></i> 注意: コースを<b>「 {$a->trash_category} 」</b>カテゴリにリストアしないでください。このカテゴリは<b>{$a->delete_period}</b>で削除されるコースのために予約されています。</p>';
$string['runreportstask'] = 'コースマネージャ用レポート計算';
$string['see_advices'] = 'レポート概要';
$string['select_restore_category'] = 'コース移動先カテゴリを選択する';
$string['show_report_in_course'] = 'コース内レポート表示';
$string['show_report_in_course_choices_collapse'] = 'コース管理メニュー下のスクロールメニュー';
$string['show_report_in_course_choices_none'] = 'コースでレポートを表示しない';
$string['show_report_in_course_choices_popover'] = 'コースタイトル横のアイコン';
$string['show_report_in_course_desc'] = 'コース内でレポートが表示される場所を定義します。';
$string['size'] = 'サイズ (MB)';
$string['stats_count_courses'] = 'コースコンテンツ';
$string['stats_count_courses_desc'] = 'Moodleインスタンスのコース数です。';
$string['stats_count_courses_trash'] = 'ゴミ箱内コース';
$string['stats_count_courses_trash_desc'] = 'コースマネージャゴミ箱カテゴリのコースをカウントします。';
$string['stats_count_courses_without_students'] = '学生なしコース';
$string['stats_count_courses_without_students_desc'] = '学生として登録されているユーザが存在しないコースの数です。';
$string['stats_count_courses_without_teachers'] = '教師不在コース';
$string['stats_count_courses_without_teachers_desc'] = '学生として登録されているユーザが存在しないコースの数です。';
$string['stats_count_courses_without_visit_students'] = '学生アクセスなしコース';
$string['stats_count_courses_without_visit_students_desc'] = '{$a->lastaccessstudents} 日以降、学生アクセスのないコース数です。';
$string['stats_count_courses_without_visit_teachers'] = '教師アクセスなしコース';
$string['stats_count_courses_without_visit_teachers_desc'] = '{$a->lastaccessteacher} 日以降、教師アクセスのないコース数です。';
$string['stats_empty_courses'] = '空のコース';
$string['stats_empty_courses_desc'] = '固有のフォーラム活動のみがあるコースの数です。';
$string['stats_heaviest_course'] = '最も重いコース';
$string['stats_heaviest_course_desc'] = 'コースマネージャレポートに基づきMoodleインスタンスで最も重いコースです。';
$string['stats_heavy_courses'] = '重いコース';
$string['stats_heavy_courses_desc'] = '{$a->totalfilesizethreshold} MBを超える重さのコースです (コースマネージャ設定で定義された閾値)。';
$string['stats_title_contents'] = 'コースコンテンツおよび重さ';
$string['stats_title_courses'] = 'コース統計';
$string['stats_title_enrolls_visits'] = 'コース登録およびアクセス';
$string['stats_weight_courses_orphan_submissions'] = '迷子の提出の重さ';
$string['stats_weight_courses_orphan_submissions_desc'] = '迷子の提出の合計ファイルサイズ';
$string['stats_weight_courses_trash'] = 'ゴミの総重量';
$string['stats_weight_courses_trash_desc'] = 'コースマネージャのゴミ箱にあるコース活動ファイルサイズ合計です。';
$string['studentrolereport'] = 'コースの学生ロール';
$string['studentrolereport_desc'] = 'レポート計算のための学生ロールを定義します。デフォルトロールはMoodle学生です。';
$string['table_actions'] = '操作';
$string['table_assign_name'] = '課題名';
$string['table_course_name'] = 'コース名';
$string['table_course_state'] = '可視性';
$string['table_enrolled_cohorts'] = 'コーホート';
$string['table_enrolled_students'] = '学生';
$string['table_enrolled_teachers'] = '教師';
$string['table_files_count'] = '秘匿ファイル数';
$string['table_files_weight'] = '合計ファイルサイズ';
$string['table_recommendation'] = 'レポート';
$string['table_tool_description'] = '<p>説明</p>';
$string['table_tool_name'] = '<p>ツール</p>';
$string['tablecountenrolledstudents'] = '学生';
$string['tablecountmodules'] = '活動数';
$string['tablecourseweight'] = 'コースの重さ';
$string['tablehascontents'] = 'コンテンツ数';
$string['tablelastaccess'] = 'コース最終アクセス';
$string['tablelastteacher'] = '最終アクティブ教師';
$string['tablelastteacherlog'] = '最終教師ログ';
$string['teacherroledashboard'] = 'コースの教師ロール';
$string['teacherroledashboard_desc'] = 'コースマネージャダッシュボードにコース一覧を表示できる教師ロールを定義します。デフォルトロールはMoodle教師です。';
$string['text_filter'] = 'コース名を一部入力してください。';
$string['text_link_delete'] = 'コースを削除する';
$string['text_link_reset'] = 'コースをリセットする';
$string['title'] = '教師用コースマネージャ';
$string['title_admin_files_distribution'] = '<b>コンポーネント別ファイル分布</b>';
$string['title_admin_no_teacher_courses'] = '<b>教師不在のコースを管理する</b>';
$string['title_admin_orphan_submissions'] = '<b>迷子の提出を管理する</b>';
$string['title_admin_stats'] = '<b>統計</b>';
$string['title_delete_cohort_confirm'] = 'コーホートを登録解除する';
$string['title_move_confirm'] = 'コース削除';
$string['title_restore_confirm'] = 'コースリストア';
$string['total_filesize_alert'] = '<b>このコースは重いコースです。</b><br />重いファイルを確認するには<a href="course_files.php?courseid={$a->courseid}">コースファイルレポート</a>をご覧ください。';
$string['total_filesize_threshold'] = '最大コースサイズ (MB)';
$string['total_filesize_threshold_desc'] = 'ファイルサイズの合計がこの制限を超えた場合、該当するコースのレポートが計算されます。';
$string['totalsize'] = '合計ファイルサイズ:';
$string['trash'] = 'このコースは削除コース用カテゴリにあります。';
$string['unique_filesize_threshold'] = '最大ファイルサイズ (MB)';
$string['unique_filesize_threshold_desc'] = 'ファイルサイズがこの制限を超えた場合、合計コースファイルレポートの重いファイルリストに表示されます。';
$string['unknown'] = '不明';
$string['warn_big_files'] = 'これらのファイルには<b>重要なウェイト</b>があります :';
$string['warn_big_files_help'] = 'ファイルサイズが重要である場合、以下をお考えください:
<ul>
<li>圧縮する</li>
<li>画像が含まれる場合、解像度を下げる</li>
<li>可能であれば外部リポジトリを使用する</li>
<li></li>
</ul>';
$string['warn_heavy_assign'] = 'これらの課題はファイルサイズが重いことを意味します:';
$string['warn_heavy_assign_help'] = '<b>これらの課題に注意して</b>利用されなくなった場合、リセットまたは削除をご検討ください。';
$string['warn_orphans'] = 'これらの課題には<b>迷子の提出</b>が含まれます:';
$string['warn_orphans_help'] = '<p>ファイルが提出されましたが、まだ登録解除済み学生がここにいます。</p>
<p>以下をお考えください: <ul>
<li>迷子の提出のある課題を削除する</li>
<li>活動またはコース全体をリセットする</li></ul></p>';
$string['warn_recyclebin'] = '<p class="alert alert-info"><i class="fa fa-info-circle"></i>Moodleではゴミ箱が有効にされていることに<b>留意</b>してください。教師がゴミ箱を空にしない限り、削除されたファイルはこのチャートに含まれます。</p>';
$string['warn_videos'] = 'これらのファイルは<b>ビデオ</b>です。移動をお考えください :';
$string['warn_videos_help'] = '動画は非常に重くなります。可能であれば動画専用サービス (WebTV、YouTube...) にアップロードしてください。';
$string['watchedfilessize'] = '最も閲覧されたファイルの合計サイズ:';
$string['watchedfilessizedetails'] = 'これらのファイルは最もよく使用される活動から作成されています: 課題、リソース、フォーラム、フォルダ、ラベル';
