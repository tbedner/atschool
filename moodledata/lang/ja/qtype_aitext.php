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
 * Strings for component 'qtype_aitext', language 'ja', version '4.4'.
 *
 * @package     qtype_aitext
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptedfiletypes'] = '許可されるファイルタイプ';
$string['addsample'] = 'サンプル解答を追加する';
$string['aiprompt'] = 'AIプロンプト';
$string['aiprompt_help'] = 'AI評定者のプロンプトです。これはAIが学生の解答に対してフィードバックを与える場合に使用するガイドラインです。';
$string['aipromptmissing'] = 'AIプロンプトがありません。フィードバックを生成する場合にベースとなるプロンプトを入力してください。';
$string['answerfiles'] = '解答ファイル';
$string['answertext'] = '解答テキスト';
$string['attachmentsoptional'] = '添付は任意です';
$string['automatic_spellcheck'] = '自動スペルチェック';
$string['backends'] = 'AIバックエンドシステム';
$string['backends_text'] = 'コアAIシステムはMoodle 4.5で導入されました。ローカルAIシステムは次で提供されています: https://github.com/mebis-lp/moodle-local_ai_manager ツールAIシステムは次で提供されています: https://github.com/marcusgreen/moodle-tool_aiconnect';
$string['cachedef_stringdata'] = 'キャッシュ定義ストリングデータ';
$string['coreaisubsystem'] = 'コアAIサブシステム';
$string['defaultmarksscheme'] = '評定基準';
$string['defaultmarksscheme_setting'] = 'これは新しい問題に対するデフォルトの評定基準となります。問題作成者は問題に合わせてこれを変更してください。';
$string['defaultprompt'] = 'AIプロンプト';
$string['defaultprompt_setting'] = 'これは新しい問題に対するデフォルトのAIプロンプトとなります。AI評定者に対して学生の解答をどのように分析すべきか指示します。AIが学生の解答に対してフィードバックを提供する場合に使用するガイドラインとなります。問題作成者は問題に合わせてこれを変更してください。';
$string['deletesample'] = 'サンプルを削除する';
$string['disclaimer'] = '免責事項';
$string['disclaimer_setting'] = 'それぞれの解答に付記されるテキストです。フィードバックが人間ではなく大規模言語モデルによるものであることを示します。';
$string['err_invalidbackend'] = '無効なバックエンドです。';
$string['err_maxminmismatch'] = '最大文字数制限は最小文字数制限より大きくする必要があります。';
$string['err_maxwordlimit'] = '最大文字数制限は有効にされていますが、設定されていません。';
$string['err_maxwordlimitnegative'] = '最大文字数制限は負の数値にできません。';
$string['err_minwordlimit'] = '最小文字数制限は有効にされていますが、設定されていません。';
$string['err_minwordlimitnegative'] = '最小文字数制限は負の数値にできません。';
$string['err_parammissing'] = '無効なパラメータです。サンプル解答およびプロンプトがあることを確認してください。';
$string['err_retrievingfeedback'] = 'AIツールからのフィードバック取得中にエラーが発生しました: {$a}';
$string['err_retrievingtranslation'] = '翻訳の取得中にエラーが発生しました: {$a}';
$string['expertmode'] = 'エキスパートモード';
$string['expertmode_setting'] = 'エキスパートモードではプロンプトに [[expert]] および [[response]] を含む必要があります';
$string['formateditor'] = 'HTMLエディタ';
$string['formateditorfilepicker'] = 'ファイルピッカ付きHTMLエディタ';
$string['formatmonospaced'] = 'プレインテキスト (等幅フォント)';
$string['formatnoinline'] = 'オンラインテキストなし';
$string['formatplain'] = 'プレインテキスト';
$string['get_llmmfeedback'] = 'LLMフィードバックを取得する';
$string['graderinfo'] = '評定者情報';
$string['graderinfoheader'] = '評定者情報';
$string['jsonprompt'] = 'JSONプロンプト';
$string['jsonprompt_setting'] = '戻り値をJSONに変換するためのインストラクションです。';
$string['localaimanager'] = 'ローカルAIマネージャ';
$string['markprompt_required'] = '評定プロンプト必須';
$string['markprompt_required_setting'] = 'この設定を有効にした場合、問題を作成する場合に評定に関するプロンプトが必須フィールドとなります。空白のままにした場合、エラーが表示されます。';
$string['markscheme'] = '評定基準';
$string['markscheme_help'] = 'ここではAI評定者に対して学生の解答に数値評点を与える方法を指示します。この問題の「デフォルト評点」が合計可能点となります。';
$string['markschememissing'] = '評定基準がありません。ユーザ入力の評定方法に関してプロンプトを入力してください。';
$string['maxwordlimit'] = '最大文字数制限';
$string['maxwordlimit_help'] = '解答にテキストの入力が必要な場合、それぞれの学生が送信できる最大文字数です。';
$string['maxwordlimitboundary'] = 'この問題の文字数制限は {$a->limit} 文字です。あなたは {$a->count} 文字の解答を送信しようとしています。あなたの解答を短くして再度お試しください。';
$string['minwordlimit'] = '最小文字数制限';
$string['minwordlimit_help'] = '解答にテキストの入力が必要な場合、それぞれの学生が送信できる最小文字数です。';
$string['minwordlimitboundary'] = 'この問題には少なくとも {$a->limit} 文字の解答が必要ですが、あなたは現在 {$a->count} 文字の解答を送信しようとしています。あなたの解答を拡張して再度お試しください。';
$string['model'] = 'モデル';
$string['nlines'] = '{$a} 行';
$string['pluginname'] = 'AIテキスト';
$string['pluginname_help'] = '問題に解答する場合、解答者がテキストを入力します。解答テンプレートが提供される場合があります。解答はAIシステム (例 ChatGPT) で予備評定された後、手動で評定されます。';
$string['pluginname_link'] = 'question/type/AI Text';
$string['pluginname_userfaced'] = '問題タイプ「AIテキスト」(AI支援フィードバック生成機能付き)';
$string['pluginnameadding'] = 'AIテキスト問題を追加する';
$string['pluginnameediting'] = 'AIテキスト問題を編集する';
$string['pluginnamesummary'] = 'ファイルアップロードおよびオンラインテキストによる解答を許可します。学生の解答は設定されたAI/大規模言語モデルで処理された上でフィードバックおよび任意の評点が返されます。';
$string['privacy::responsefieldlines'] = '入力ボックス (textarea) のサイズを示す行数です。';
$string['privacy:metadata'] = 'AIテキスト問題タイププラグインで問題作成者はデフォルトオプションをユーザプレファレンスとして設定できます。';
$string['privacy:preference:attachments'] = '許可される添付数です。';
$string['privacy:preference:attachmentsrequired'] = '必須添付数です。';
$string['privacy:preference:defaultmark'] = '特定の問題に設定されたデフォルト評点です。';
$string['privacy:preference:disclaimer'] = 'フィードバックおよび評点がLLMによるものであることを示すテキストです。';
$string['privacy:preference:maxbytes'] = '最大ファイルサイズです。';
$string['privacy:preference:responseformat'] = '解答形式は何ですか (HTMLエディタ、プレインテキスト等)?';
$string['prompt'] = 'プロンプト';
$string['prompt_setting'] = 'AIシステムに設定されたプロンプトのラッパテキストです。[responsetext] は学生が入力した解答です。問題からのAIプロンプト値がこれに追加されます。';
$string['purposeplacedescription_feedback'] = '小テスト受験を送信する場合、または再評定する場合、フィードバック提案を生成します。';
$string['purposeplacedescription_translate'] = '免責事項およびAIが生成済みフィードバックをユーザのターゲット言語に翻訳します。';
$string['response'] = '解答';
$string['responsefieldlines'] = '入力ボックスサイズ';
$string['responseformat'] = '解答フォーマット';
$string['responseformat_setting'] = '学生が解答時に使用するエディタです。';
$string['responseisrequired'] = '学生にテキストの入力を要求します';
$string['responsenotrequired'] = 'テキスト入力は任意です';
$string['responseoptions'] = '解答オプション';
$string['responsetemplate'] = '解答テンプレート';
$string['responsetemplate_help'] = 'ここで入力されたテキストは問題の新たな受験が開始された場合に解答入力ボックスに表示されます。';
$string['responsetemplateheader'] = '解答テンプレート';
$string['responsetester'] = '解答テスタ';
$string['responsetesthelp'] = '解答テストヘルプ';
$string['responsetesthelp_help'] = 'フォームが保存された場合、LLMが返した値ではなくテスト解答のみ保存されます';
$string['responsetests'] = '複数解答からのテスト出力';
$string['sampleresponse'] = 'サンプル解答';
$string['sampleresponse_help'] = 'サンプル解答はAI評定者が特定の解答に対してどのように反応するかをテストするために使用できます。';
$string['sampleresponseempty'] = 'テスト前にAIプロンプトおよびサンプル解答を準備してください。';
$string['sampleresponseeval'] = 'サンプル解答評定';
$string['sampleresponseevaluate'] = 'サンプル解答を評定する';
$string['showprompt'] = 'プロンプトを表示する';
$string['spellcheck_editor_desc'] = 'これはAIによりスペルミスが修正されたテキストです。あなたはこの訂正案を編集できます。';
$string['spellcheck_prompt'] = 'テキストを1:1で再現してください。フィードバックは一切不要です! しかし、以下のテキストのスペルミスはすべて訂正してください:';
$string['spellcheck_student_anser_desc'] = 'これは学生のオリジナルの解答です。';
$string['spellcheckedit'] = 'スペルチェックを編集する';
$string['spellcheckeditor'] = 'AIベーススペルチェックを編集する';
$string['testresponses'] = 'テスト解答';
$string['thedefaultmarksscheme'] = '文法またはスペルに誤りがあるごとに総合点から1点ずつ減点します。';
$string['thedefaultprompt'] = 'テキストの文法およびスペルに誤りがあるかどうか説明してください。';
$string['toolaimanager'] = 'ツールAIマネージャ';
$string['translatepostfix'] = 'postfixを翻訳する';
$string['translatepostfix_text'] = 'プロンプトの末尾に「translate the feedback to the language .current_language()」が追加されます。';
$string['use_local_ai_manager'] = 'local_ai_managerプラグインが提供するAIバックエンドを使用する';
$string['use_local_ai_manager_setting'] = 'AI関連クエリを処理するためのlocal_ai_managerプラグインを使用する (インストール必須)';
$string['wordcount'] = '文字数: {$a}';
$string['wordcounttoofew'] = '文字数: {$a->count} 文字です。必要な {$a->limit} 文字未満です。';
$string['wordcounttoomuch'] = '文字数: {$a->count} 文字です。制限値の {$a->limit} 文字を超えています。';
