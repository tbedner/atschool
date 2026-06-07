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
 * Strings for component 'tiny_ai', language 'ja', version '4.4'.
 *
 * @package     tiny_ai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additional_prompt'] = '追加プロンプト';
$string['ai:view'] = 'AIボタンを表示する';
$string['aigenerating'] = 'AI生成中です ...';
$string['aisuggestion'] = 'AI提案';
$string['back'] = '戻る';
$string['backbutton_tooltip'] = '前のページに戻ります。';
$string['cancel'] = 'キャンセル';
$string['copybutton'] = 'コピー';
$string['copybutton_tooltip'] = '現在の結果をクリップボードにコピー';
$string['deletebutton_tooltip'] = '現在の結果を破棄してプレファレンスページに戻ります。';
$string['describe_baseprompt'] = '次のテキストに関して説明する';
$string['describe_headline'] = '選択済みテキストの詳細説明';
$string['describeimg_baseprompt'] = 'イメージに何が表示されているか説明する';
$string['describeimg_headline'] = 'イメージ説明';
$string['dismiss'] = '却下';
$string['dismisssuggestion'] = 'AI提案を却下してもよろしいですか?';
$string['downloadbutton'] = 'ダウンロード';
$string['downloadbutton_tooltip'] = '現在の結果をファイルとしてダウンロード';
$string['error_filetypeclipboardnotsupported_text'] = 'このファイル形式は、現在のブラウザではコピーに対応していません。';
$string['error_filetypeclipboardnotsupported_title'] = 'サポートされていないファイル形式';
$string['error_nofile'] = 'ファイルが追加されていません。ファイルを追加してください。';
$string['error_nofileinclipboard_text'] = 'クリップボードにファイルデータが含まれていません。ペーストする前にクリップボードにファイルをコピーしてください。';
$string['error_nofileinclipboard_title'] = 'ファイルなし';
$string['error_nopromptgiven'] = 'プロンプトがありません。プロンプトを挿入してください。';
$string['error_tiny_ai_notavailable'] = 'あなたはAI機能を利用できません。';
$string['error_unsupportedfiletype_text'] = 'このファイルタイプはサポートされていません。サポートされるファイルタイプは次のとおりです: {$a}';
$string['error_unsupportedfiletype_title'] = 'サポートされないファイルタイプです。';
$string['errorwithcode'] = '次のエラーコードのエラーが発生しました: {$a}';
$string['freeprompt_placeholder'] = 'テキストを生成するために任意の命令をAIに与えてください ...';
$string['freepromptbutton_tooltip'] = 'AI回答を生成する';
$string['gender'] = '性別';
$string['generalerror'] = 'エラーが発生しました。';
$string['generate'] = '今すぐ生成する';
$string['generatebutton_tooltip'] = 'AIに回答を生成させる';
$string['generating'] = 'AIは回答を生成しています ...';
$string['imagefromeditor'] = 'エディタからのイメージ';
$string['imagetotext_baseprompt'] = 'イメージ内テキストを解析する';
$string['imagetotext_headline'] = 'テキスト認識';
$string['imagetotext_insertimage'] = 'このエリアにファイルをドラッグ&ドロップするか、クリップボードからファイルを貼り付けてください。';
$string['imggen_headline'] = 'イメージ生成';
$string['imggen_placeholder'] = 'ここにイメージの説明を挿入または貼り付けてください。例えば「頭に帽子をかぶって片手にペンを持ったサルの写真のようなリアルなイメージを生成してください」のような説明です。';
$string['insertatcaret'] = '現在の位置に挿入する';
$string['insertatcaret_tooltip'] = 'カーソルの現在位置に現在の結果を挿入します。';
$string['insertbelow'] = '以下に挿入する';
$string['insertbelow_tooltip'] = '現在の結果をエディタコンテンツに追加します。';
$string['keeplanguagetype'] = '言語タイプを保持する';
$string['languagetype'] = '言語タイプ';
$string['languagetype_prompt'] = 'テキストは {$a} を使用する必要があります。';
$string['mainselection_heading'] = 'あなたはAIのどのようなサポートが必要ですか?';
$string['maxwordcount'] = '最大文字数';
$string['maxwordcount_prompt'] = 'テキストは {$a} 文字以下にする必要があります。';
$string['more_options'] = 'その他オプション';
$string['nomaxwordcount'] = '制限なし';
$string['nopurposesconfigured'] = 'AIツールは設定されていません。あなたのByCS管理者にご相談ください。';
$string['pluginname'] = 'AIツール';
$string['privacy:metadata'] = 'このプラグインはいかなる個人データも保存しません。';
$string['prompt'] = 'プロンプト';
$string['prompteditmode'] = 'プロンプト編集モード';
$string['prompteditmode_tooltip'] = 'プロンプト編集モードを切り替え';
$string['prompteditmodedisable'] = 'プロンプト編集モードを終了';
$string['regeneratebutton_tooltip'] = 'プロンプトを編集および結果を再生成する';
$string['replaceselection'] = '選択を置換する';
$string['replaceselection_tooltip'] = '現在の選択を現在の結果に置換します。';
$string['results_heading'] = '結果';
$string['results_please_wait'] = 'お待ちください! これには数秒かかる場合があります。';
$string['reworkprompt'] = 'プロンプトを再生成する';
$string['selectionbarbuttontitle'] = '選択済みテキストにAIツールを使用する';
$string['simplelanguage'] = 'シンプル言語';
$string['size'] = 'サイズ';
$string['summarize_baseprompt'] = '以下のテキストを要約する';
$string['summarize_headline'] = '選択済みテキストを要約する';
$string['targetlanguage'] = 'ターゲット言語';
$string['technicallanguage'] = '専門用語';
$string['texttouse'] = 'テキスト内容';
$string['toolbarbuttontitle'] = 'AIツール';
$string['toolname_describe'] = '詳細説明';
$string['toolname_describeimg'] = 'イメージ説明';
$string['toolname_imagetotext'] = 'テキスト認識';
$string['toolname_imggen'] = 'イメージ生成';
$string['toolname_summarize'] = '要約';
$string['toolname_translate'] = '翻訳';
$string['toolname_tts'] = 'オーディオを作成する';
$string['translate_baseprompt'] = '以下のテキストを言語 {$a} に翻訳した後、翻訳されたテキストのみを返します。';
$string['translate_headline'] = '選択済みテキストを翻訳する';
$string['tts_headline'] = '選択済みテキストからオーディオを生成する';
$string['voice'] = '音声';
