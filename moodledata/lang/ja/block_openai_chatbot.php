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
 * Strings for component 'block_openai_chatbot', language 'ja', version '4.4'.
 *
 * @package     block_openai_chatbot
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ask_button'] = '質問する';
$string['chatbot_title'] = 'AIチュータ';
$string['config_missing'] = 'OpenAI APIの設定がありません。あなたの管理者にお問い合わせください。';
$string['create_run_error'] = 'runの作成中にエラーが発生しました。APIレスポンス: {$a}';
$string['create_thread_error'] = 'スレッドの作成中にエラーが発生しました。APIレスポンス: {$a}';
$string['error_message'] = 'エラー: {$a}';
$string['error_prefix'] = 'エラー:';
$string['input_placeholder'] = 'あなたの質問をどうぞ ...';
$string['invalid_block_instance'] = '無効なブロックインスタンスです。';
$string['invalid_context'] = '無効なコンテクストです。';
$string['js_ask_button_fallback'] = '質問する';
$string['js_assistant_thinking'] = 'アシスタント思考中';
$string['js_assistant_thinking_fallback'] = 'アシスタント思考中';
$string['js_error_occurred'] = 'エラーが発生しました!';
$string['js_error_occurred_fallback'] = 'エラーが発生しました。';
$string['js_network_error'] = 'ネットワークエラーが発生しました。';
$string['js_thinking'] = '思考中 ...';
$string['js_thinking_fallback'] = '思考中 ...';
$string['js_try_again'] = 'もう一度';
$string['js_writing'] = '作成中 ...';
$string['js_writing_fallback'] = '作成中 ...';
$string['js_writing_question'] = '質問作成中';
$string['js_writing_question_fallback'] = '質問作成中';
$string['network_error'] = 'ネットワークエラーが発生しました。後ほど再度お試しください。';
$string['no_answer'] = '[回答なし]';
$string['no_config'] = 'OpenAI APIの設定が不足しています。あなたの管理者にお問い合わせください。';
$string['openai_api_error'] = 'OpenAI APIエラー: {$a}';
$string['openai_chatbot'] = 'OpenAIチャットボット';
$string['openai_chatbot:addinstance'] = '新しいOpenAIチャットボットブロックを追加する';
$string['openai_chatbot:myaddinstance'] = 'ダッシュボードに新しいOpenAIチャットボットブロックを追加する';
$string['openai_chatbot:view'] = 'OpenAIチャットボットブロックを表示する';
$string['pluginname'] = 'OpenAIチャットボット';
$string['privacy:metadata'] = 'OpenAIチャットボットブロックはいかなる個人データも保存しません。しかし、ユーザ質問は処理のためにOpenAIサーバに送信されます。';
$string['privacy:metadata:openai'] = 'ユーザ質問は処理のためにOpenAIに送信されます。';
$string['privacy:metadata:openai:course_context'] = 'レスポンスのコンテクストを提供するためのコース情報です。';
$string['privacy:metadata:openai:question'] = 'ユーザから尋ねられた質問です。';
$string['question_empty'] = '質問は空白にできません。';
$string['response_header'] = 'レスポンス:';
$string['settings_apikey'] = 'OpenAI APIキー';
$string['settings_apikey_desc'] = 'あなたのOpenAI APIキーを入力してください。あなたは次でOpenAI APIキーを取得できます: https://platform.openai.com/';
$string['settings_assistantid'] = 'アシスタントID';
$string['settings_assistantid_desc'] = 'あなたのOpenAIアシスタントIDを入力してください。OpenAIアシスタントIDは次で作成できます: https://platform.openai.chat/assistants';
$string['settings_bot_name'] = 'ボット名';
$string['settings_bot_name_desc'] = 'ユーザに表示されるあなたのチャットボット名をカスタマイズしてください。';
$string['settings_course_context'] = 'コースコンテクストを有効にする';
$string['settings_course_context_desc'] = 'この設定を有効にした場合、チャットボットはより関連性の高いレスポンスを提供するために現在のコースに関連する情報を受け取ります。';
$string['settings_general'] = '一般設定';
$string['settings_general_desc'] = 'OpenAIチャットボット統合設定を設定します。';
$string['settings_max_response_time'] = '最大レスポンス時間';
$string['settings_max_response_time_desc'] = 'OpenAIのレスポンスを待機する最大時間 (秒) です (デフォルト: 30)。';
$string['strong_error'] = 'エラー:';
$string['timeout_error'] = '実行が時間内に完了しませんでした。ステータス: {$a}';
$string['welcome_message'] = '💡 AIチュータとチャットを開始するには質問を入力してください。';
