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
 * Strings for component 'local_aigrade', language 'ja', version '4.4'.
 *
 * @package     local_aigrade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ai_error'] = 'AIサービスエラー: {$a}';
$string['ai_name'] = 'AIアシスタント名';
$string['ai_name_desc'] = 'AI評定アシスタントの名称をカスタマイズしてください (例:「Boone」「Grady」「教授AI」)。この名称はボタンおよびインターフェース全体で表示されます。デフォルトは「AI」です。';
$string['aigrade'] = 'AI評定';
$string['aigrade:grade'] = '学生提出の評定にAIを使用する';
$string['aigrade_button'] = 'AI提出評定';
$string['aigrade_disabled'] = 'この課題ではAI評定は有効にされていません。';
$string['aigrade_help'] = 'この課題でAI支援評定を有効にします。あなたはPDFルーブリックをアップロードする必要があります。';
$string['aigrade_instructions'] = 'AI評定インストラクション';
$string['aigrade_instructions_desc'] = 'AIによる課題評定時のデフォルトインストラクションです。';
$string['aigrade_instructions_help'] = '提出物の評定時にAIに与えるインストラクションをカスタマイズしてください。AIはこれらのインストラクションおよびアップロードされたルーブリックを組み合わせて使用します。';
$string['aigrade_instructions_with_rubric'] = 'デフォルトAIインストラクション (ルーブリック付き)';
$string['aigrade_instructions_with_rubric_desc'] = '課題にPDFルーブリックがアップロードされている場合に使用されるデフォルトのインストラクションです。AI評定が有効にされている場合、このテキストは新しい課題にコピーされます。';
$string['aigrade_instructions_with_rubric_field'] = 'AIインストラクション (ルーブリックアップロード時)';
$string['aigrade_instructions_with_rubric_field_help'] = 'ルーブリック使用のAI評定時のインストラクションです。AIはアップロードされたルーブリックPDFとともにこれらのインストラクションを使用します。';
$string['aigrade_instructions_without_rubric'] = 'デフォルトAIインストラクション (ルーブリックなし)';
$string['aigrade_instructions_without_rubric_desc'] = '課題にルーブリックが設定されていない場合のデフォルトのインストラクションです。AIは課題の説明に基づいて評定します。このテキストはAI評定が有効にされた場合に新しい課題にコピーされます。';
$string['aigrade_instructions_without_rubric_field'] = 'AIインストラクション (ルーブリックなし)';
$string['aigrade_instructions_without_rubric_field_help'] = 'ルーブリックなしでのAI評定時のインストラクションです。AIは課題の説明文とともにこれらの指示を使用します。';
$string['aigrade_rubric'] = '評定ルーブリック';
$string['aigrade_rubric_help'] = 'AIが学生の提出の評定に使用するルーブリックファイル (PDF、TXT、DOCXまたはDOC) をアップロードしてください。';
$string['aigrade_single'] = 'この提出をAI評定する';
$string['aigrade_warning'] = 'AI評定警告';
$string['aigrade_warning_text'] = '<strong>重要:</strong> AIによる評定結果およびフィードバックは必ず確認してください。AI評定はテキストベースの課題に最適であり、画像、書式、ビジュアルデザインは評価できません。';
$string['assignment_instructions_label'] = '課題インストラクション';
$string['back'] = '課題に戻る';
$string['button_grade_bulk'] = 'すべてを {$a} 評定する';
$string['button_grade_single'] = '{$a} 評定する';
$string['confirm_bulk_grade'] = '未評定の提出すべてをAIで評定しますか? これには少々時間を要する場合があります。';
$string['confirm_grade'] = '未評定の {$a} 提出をAIで評定してもよろしいですか?';
$string['criteria_accuracy'] = '正確性: その情報は正しいですか?';
$string['criteria_completeness'] = '完全性: 学生はすべての要件に対応しましたか?';
$string['criteria_presentation'] = 'プレゼンテーション: 明確かつ体系的に整理されていますか?';
$string['criteria_quality'] = 'クオリティ: 作業は丁寧かつ適切に遂行されていますか?';
$string['default_grading_criteria'] = 'この課題を質、完成度、正確性に関する標準的な学術的クライテリアに基づいて評価してください。';
$string['error_invalid_action'] = '無効なアクションです。';
$string['error_no_feedback'] = 'AIはフィードバックを返しませんでした。';
$string['error_no_submission'] = 'この学生はまだこの課題のテキストを提出していません。';
$string['error_server_communication'] = 'サーバとの通信エラー: {$a}';
$string['error_unknown'] = '不明なエラーが発生しました。';
$string['error_with_message'] = 'エラー: {$a}';
$string['evaluation_criteria'] = '提出を評価する:';
$string['feedback_label'] = 'フィードバック:';
$string['file_extraction_error'] = 'ファイルからテキストを抽出できませんでした: {$a}';
$string['google_doc_access_error'] = 'Googleドキュメントにアクセスできませんでした。ドキュメントが「リンクを知っている全員にアクセスを許可」で共有されていることを確認してください。';
$string['google_slides_access_error'] = 'Googleスライドにアクセスできませんでした。プレゼンテーションが「リンクを知っているすべてのユーザーが閲覧可能」に共有されていることを確認してください。';
$string['grade_label'] = '評定:';
$string['grade_level'] = '学生評定レベル';
$string['grade_level_10'] = '評定10';
$string['grade_level_11'] = '評定11';
$string['grade_level_12'] = '評定12';
$string['grade_level_3'] = '評定3';
$string['grade_level_4'] = '評定4';
$string['grade_level_5'] = '評定5';
$string['grade_level_6'] = '評定6';
$string['grade_level_7'] = '評定7';
$string['grade_level_8'] = '評定8';
$string['grade_level_9'] = '評定9';
$string['grade_level_help'] = 'このクラスの学生の学年を選択してください。AIは年齢に応じたフィードバックを提供します。同時にこの学年に適した語彙を使用します。';
$string['grading_error'] = '提出の評定エラー: {$a}';
$string['grading_in_progress'] = 'すべてに提出を評定中 ...';
$string['grading_rubric_label'] = '評定ルーブリックc:';
$string['grading_single_in_progress'] = '評定中 ...';
$string['grading_strictness'] = '評定厳格度';
$string['grading_strictness_help'] = 'AIによる提出の評定厳格度を制御します。「標準」は学年レベルに応じた厳格度を使用します。あなたが評定レベルに関係なく、より緩いまたは厳しい評定にしたい場合、これをオーバーライドしてください。';
$string['grading_success'] = '{$a} 件の提出を正常に評定しました。';
$string['grading_with_rubric'] = 'あなたは提供されたルーブリックで学生の課題を評定しています。';
$string['grading_without_rubric'] = 'あなたは課題の要件および一般的な学術標準に基づき学生の課題を評定しています。';
$string['instructions_label'] = 'インストラクション:';
$string['no_rubric'] = 'PDFルーブリックが見つかりません。課題にPDFルーブリックを添付してください。';
$string['no_rubric_warning'] = 'ルーブリックが見つかりません。AIは課題の説明およびインストラクションに基づいて評定します。';
$string['no_ungraded'] = '未評定の提出は見つかりませんでした。';
$string['pdf_rubric_fallback'] = 'PDFルーブリック: {$a}';
$string['pluginname'] = 'AI評定';
$string['privacy:metadata:ai_provider'] = '学生の提出コンテンツは評定分析のために設定済みAIプロバイダに送信されます。このデータは外部AIサービスで処理されますが、本プラグインにより永続的に保存されることはありません。';
$string['privacy:metadata:ai_provider:assignmentinstructions'] = 'AIが評定クライテリアを理解するのを助けるために送信された課題インストラクションです。';
$string['privacy:metadata:ai_provider:assignmentname'] = 'コンテクストを提供するためにAI評定システムに送信された課題名です。';
$string['privacy:metadata:ai_provider:gradelevel'] = 'AIのフィードバック適切性調整に役立つよう学生の学年 (3～12) が送信されます。';
$string['privacy:metadata:ai_provider:rubric'] = '評定ルーブリック (アップロードされている場合)、評価の指針としてAIに送信されます。';
$string['privacy:metadata:ai_provider:submissiontext'] = '評定のためにAIプロバイダに送信される学生の提出のテキストコンテンツです。';
$string['processing'] = '処理中 ...';
$string['rubric_parse_error'] = 'ルーブリックPDF解析エラー: {$a}';
$string['strictness_lenient'] = '寛容 - 評点に寛大';
$string['strictness_rigorous'] = '厳格 - 高い期待';
$string['strictness_standard'] = '評定レベルの標準 (推奨)';
$string['strictness_very_lenient'] = '非常に寛容 - あらゆる妥当な努力を評価する';
$string['strictness_very_rigorous'] = '非常に厳格 - 大学レベルの標準';
$string['student_submission_label'] = '学生の提出:';
$string['success_graded_count'] = '{$a} 件の提出を正常に評定しました。';
$string['unsupported_file_type'] = 'AI評定に対応していないファイルタイプ: {$a}';
