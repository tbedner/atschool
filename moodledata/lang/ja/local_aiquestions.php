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
 * Strings for component 'local_aiquestions', language 'ja', version '4.4'.
 *
 * @package     local_aiquestions
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aiquestions'] = 'AI質問';
$string['backtocourse'] = 'コースに戻る';
$string['createdquestionssuccess'] = '質問が正常に作成されました';
$string['createdquestionsuccess'] = '質問が正常に作成されました';
$string['createdquestionwithid'] = 'ID付きの質問が作成されました';
$string['cronoverdue'] = 'cronタスクが実行されていないようです。
質問の生成は、cronタスクによって作成されるアドホックタスクに依存しています。cronの設定を確認してください。
詳細は <a href="https://docs.moodle.org/en/Cron#Setting_up_cron_on_your_system">
https://docs.moodle.org/en/Cron#Setting_up_cron_on_your_system
</a> を参照してください。';
$string['errornotcreated'] = 'エラー：質問が作成されませんでした。';
$string['generate'] = '質問を生成';
$string['generatemore'] = 'さらに質問を生成';
$string['generating'] = '質問を生成中です…（このページを離れても問題ありません。後で問題バンクで確認できます）';
$string['generationfailed'] = '{$a}回の試行後に質問の生成に失敗しました。';
$string['generationtries'] = 'OpenAIに送信された試行回数：<b>{$a}</b>';
$string['gotoquestionbank'] = '問題バンクへ移動';
$string['language'] = '言語';
$string['languagedesc'] = '質問を生成する際に使用する言語をここで選択してください。<br>
ChatGPTでは、一部の言語は他の言語に比べてサポートが限定されている場合があります。';
$string['numofquestions'] = '質問数';
$string['numofquestionsdesc'] = '生成したい質問数をここで選択してください。';
$string['numoftries'] = '試行回数：<b>{$a}</b>';
$string['numoftriesdesc'] = 'OpenAIに送信する試行回数をここに入力してください。';
$string['numoftriesset'] = '試行回数';
$string['openaikey'] = 'OpenAI APIキー';
$string['openaikeydesc'] = 'こちらにOpenAIのAPIキーを入力してください。<br>
APIキーは<a href="https://platform.openai.com/account/api-keys">https://platform.openai.com/account/api-keys</a><br>から取得できます。
「新しい秘密キーを作成」ボタンを選択し、生成されたキーをこの欄にコピーしてください。<br>
なお、APIキーを取得するには、請求情報が設定されたOpenAIアカウントが必要です。';
$string['outof'] = 'のうち';
$string['personalprompt'] = 'パーソナルプロンプト';
$string['personalpromptdesc'] = 'ここにパーソナルプロンプトを入力してください。
プロンプトは、ChatGPTに質問をどのように生成するかを説明するためのものです。<br>
次の2つのプレースホルダーを含める必要があります：{{numofquestions}} および {{language}}';
$string['pluginname'] = 'AI Text to questions generator';
$string['pluginname_desc'] = 'このプラグインを使用すると、テキストから質問を生成できます。';
$string['pluginname_help'] = 'このプラグインは、コース管理メニューから使用できます。';
$string['preview'] = '質問を新しいタブでプレビュー';
$string['privacy:metadata'] = 'AI Text to questions generatorは、個人データを保存しません。';
$string['story'] = '内容';
$string['storydesc'] = 'ここに内容を入力してください。';
$string['tasksuccess'] = '質問生成タスクが正常に作成されました。';
$string['usepersonalprompt'] = 'パーソナルプロンプトを使用';
$string['usepersonalpromptdesc'] = 'パーソナルプロンプトを使用する場合は、ここで選択してください。';
