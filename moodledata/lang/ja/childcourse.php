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
 * Strings for component 'childcourse', language 'ja', version '4.4'.
 *
 * @package     childcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoenrol'] = 'アクセス時の自動登録';
$string['autoenrol_help'] = '有効にすると、このアクティビティを通して開くときに、子コースにユーザーを自動的に登録します。登録は、追跡可能かつ後で安全に元に戻せるように、専用の手動登録インスタンスを使用して作成されます（削除ポリシーによります）。無効にすると、プラグインは自動的にユーザーを登録しようとはしません。';
$string['childcourse'] = '子コース';
$string['childcourse:addinstance'] = '新しい子コースのアクティビティを追加';
$string['childcourse:manage'] = '子コースの設定を管理';
$string['childcourse:sync'] = '子コースの成績と完了を同期';
$string['childcourse:view'] = '子コースのアクティビティを表示';
$string['childcourse_help'] = 'このアクティビティにリンクされるコースを選択します。この選択は、すべてのルール固有の設定（グループ、完了ルール、アクティビティセレクタ、成績の同期）を制御します。アクティビティを保存すると、マッピングと同期履歴の一貫性を保つため、子コースは変更不可になります。';
$string['childcoursenotset'] = '子コースが設定されていません。';
$string['completionmissing'] = '子コースの完了は有効化されていません。';
$string['completionrule'] = '子コースに基づく完了ルール';
$string['completionrule_allactivities'] = '追跡対象のアクティビティが100%完了したときに完了します。';
$string['completionrule_coursecompleted'] = '子コースが完了した時点で完了します。';
$string['completionrule_help'] = 'このアクティビティが、子コースにおけるユーザーの進捗に基づいて自動的に完了とマークされる方法を定義します。

- **何もしない:** このアクティビティの完了は、子コースの完了には関係ありません。
- **子コースが完了したとき:** 子コースが完了すると、同時にこのアクティビティも完了します。
- **追跡されているアクティビティが100%完了したとき:** 完了追跡が有効になっている子コース内のすべてのアクティビティが完了している場合に限り、このアクティビティは完了します。';
$string['completionrule_none'] = '何もしない';
$string['enrolinstancename'] = '子コースリンク #{$a}';
$string['error_manualenrolnotavailable'] = '手動登録プラグインは利用できません。';
$string['grade_approval'] = '成績を送信元から';
$string['grade_approval_no'] = '成績を送信しない';
$string['grade_approval_yes'] = '子コースの成績を使用する';
$string['gradebookmissing'] = '子コースの成績表が設定されていません（コース合計が欠落しています）。';
$string['hideinmycourses'] = 'マイコースで子コースを非表示にする';
$string['hideinmycourses_help'] = '有効にすると、このアクティビティで登録されたユーザーは、"My courses" メニューで子コースを非表示にします。これにより、このコースのナビゲーションを強制するのに役立ちます。この設定は、プラグインによって登録されたユーザーのみに影響します（プラグインによって追跡されます）。';
$string['inheritgroups'] = '親コースからグループを継承';
$string['inheritgroups_help'] = '有効にすると、プラグインは親コースのグループ名で一致させ、親コースのグループ所属を子コースに再現しようとします。子コースに同じ名前のグループが存在しない場合は作成されることがあります。これは自動登録時に適用されます。後で専用の再同期ルーチンを実装しない限り、継続的な同期ではありません。';
$string['keeprole'] = 'Keep role (student/teacher)';
$string['keeprole_help'] = '有効にすると、プラグインは親コースの教師レベルの権限を持つユーザーを教師として登録しようとします（利用可能な場合は editingteacher/teacher）。そうでない場合は estudante として登録します。これはカスタム papel 割り当てや複雑な papel の割り当てをコピーするものではありません。';
$string['label_childcourse'] = '子コース';
$string['label_lastsynccompletion'] = '直近の完了同期';
$string['label_lastsyncgrade'] = '直近の成績同期';
$string['lastsync'] = '直近の同期';
$string['lockedcoursewarning'] = '保存後は子コースを変更できません。';
$string['manage_header_actions'] = 'アクション';
$string['manage_header_name'] = '名前';
$string['missingcourse'] = 'コースが見つかりません';
$string['modulename'] = '子コース';
$string['modulenameplural'] = '子コース';
$string['never'] = '決して';
$string['nogroup'] = 'グループなし';
$string['openchildcourse'] = '子コースを開く';
$string['opennewtab'] = '新しいタブで開く';
$string['opennewtab_help'] = '有効にすると、ボタンは子コースを新しいタブで開きます。登録や同期の動作を変更することはなく、ユーザーに対してコースを開く方法だけが変わります。';
$string['pluginadministration'] = '子コースの管理';
$string['pluginname'] = '子コース';
$string['privacy:metadata:childcourse_map'] = 'リンクされたコースのアクティビティによって作成されたマッピングデータを保存し、安全な退会と監査を可能にします。';
$string['privacy:metadata:childcourse_map:childcourseid'] = 'リンクされた子コースのID。';
$string['privacy:metadata:childcourse_map:childcourseinstanceid'] = 'リンク済みのコース活動インスタンスのID。';
$string['privacy:metadata:childcourse_map:groupidsjson'] = 'プラグインによって割り当てられた子コースグループIDのリスト（JSON）。';
$string['privacy:metadata:childcourse_map:hiddenprefset'] = 'プラグインがマイコースで子コースを非表示にする設定を有効にしたかどうかを示します。';
$string['privacy:metadata:childcourse_map:manualenrolid'] = 'プラグインがユーザーを登録するために使用する登録インスタンスのID。';
$string['privacy:metadata:childcourse_map:parentcourseid'] = 'アクティビティが存在する親コースのID。';
$string['privacy:metadata:childcourse_map:roleid'] = '子コースにプラグインが割り当てたロールのID。';
$string['privacy:metadata:childcourse_map:timeenrolled'] = 'リンクを介してユーザーが登録された時刻。';
$string['privacy:metadata:childcourse_map:timemodified'] = 'マッピングレコードの最終更新時刻。';
$string['privacy:metadata:childcourse_map:userid'] = 'リンクを介して登録されたユーザーのID。';
$string['privacy:metadata:childcourse_state'] = '個々のユーザーごとにキャッシュされた状態を保存し、増分の成績および完了の同期をサポートします。';
$string['privacy:metadata:childcourse_state:childcourseinstanceid'] = 'リンク済みのコース活動インスタンスのID。';
$string['privacy:metadata:childcourse_state:coursecompleted'] = 'ユーザーが完了ルールを満たしたかどうかのキャッシュ済み指標。';
$string['privacy:metadata:childcourse_state:coursecompletiontimemodified'] = '増分同期のためのソース完了データの最終更新時刻。';
$string['privacy:metadata:childcourse_state:finalgrade'] = '子コース総計から同期された成績のキャッシュ（パーセント）。';
$string['privacy:metadata:childcourse_state:grade_source'] = '成績ソースの識別子（例：course_total）。';
$string['privacy:metadata:childcourse_state:gradeitemtimemodified'] = '増分同期のためのソース成績項目の最終更新時刻。';
$string['privacy:metadata:childcourse_state:timemodified'] = 'キャッシュ状態行の最終更新時刻。';
$string['privacy:metadata:childcourse_state:userid'] = 'ユーザーID。';
$string['privacy:metadata:userpreference:block_myoverview_hidden_course'] = 'マイコースで子コースを非表示にするためのユーザー設定（デフォルト設定名: block_myoverview_hidden_course_{courseid}）。';
$string['settings_heading'] = '子コースの設定';
$string['syncdone'] = '同期完了。';
$string['syncnow'] = '今すぐ同期';
$string['targetgroup'] = 'グループに登録';
$string['targetgroup_help'] = '選択されている場合、オートエンロールメント時にこの特定のグループに子コースのユーザーが追加されます。グループは子コースに存在している必要があります。「親コースからグループを継承」が有効になっている場合、選択したグループと継承されたグループの両方の動作が適用されます。';
$string['unenrolaction'] = 'リンクが削除されたとき';
$string['unenrolaction_help'] = 'リンクされたアクティビティが削除されたとき、このアクティビティによって作成された登録の処理を制御します。「退会」では、このアクティビティによって作成された登録だけを削除します（マッピングテーブルで追跡）。「登録を維持」では、ユーザーを子コースの登録状態のままにします。';
$string['unenrolaction_keep'] = '登録を維持';
$string['unenrolaction_unenrol'] = 'このリンクで登録されたユーザーを退会させます。';
