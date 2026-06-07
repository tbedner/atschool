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
 * Strings for component 'local_geniai', language 'ja', version '4.4'.
 *
 * @package     local_geniai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['agentphoto'] = 'AIエージェントの写真';
$string['agentphoto_desc'] = 'チャット中にAIエージェントのアバターとして表示される画像。';
$string['apikey'] = 'OpenAI APIキー';
$string['apikey_desc'] = 'あなたのOpenAIアカウントのAPIキーです。';
$string['case'] = '使用例';
$string['caseuse_balanced'] = 'バランスのとれたレスポンス => Temperature 0.5 - 0.7, Top_p 0.7';
$string['caseuse_chatbot'] = 'チャットボット => Temperature 0.2 - 0.6, Top_p 0.8';
$string['caseuse_creative'] = '創造的生成 => Temperature 0.7 - 1.0, Top_p 0.8';
$string['caseuse_exploration'] = 'オプション調査 => Temperature 0.8 - 1.0, Top_p 0.9';
$string['caseuse_formal'] = 'フォーマルトーン => Temperature 0.3 - 0.5, Top_p 0.6';
$string['caseuse_informal'] = 'インフォーマルトーン => Temperature 0.7 - 0.9, Top_p 0.8';
$string['caseuse_precise'] = '正確なレスポンス => Temperature 0.0 - 0.3, Top_p 1.0';
$string['clear_history_title'] = 'すべての履歴をクリアする';
$string['close_title'] = 'チャットを閉じる';
$string['frequency_penalty'] = '頻度ペナルティ';
$string['frequency_penalty_desc'] = 'このパラメータは生成されるテキストでモデルが同じ単語またはフレーズを頻繁に繰り返すのを防ぐために使用されます。これは生成されたテキストにトークンが出現するたびにそのトークンの対数確率に追加される値です。頻度ペナルティが高いほど、繰り返されるトークン使用をより控えめにします。';
$string['geniai:manage'] = 'GeniAIを管理する';
$string['geniai:view'] = 'GeniAIを表示する';
$string['geniainame'] = 'アシスタント名';
$string['geniainame_desc'] = 'あなたのアシスタントの名前を定義してください。';
$string['h5p-accordion-desc'] = '学生が過剰なテキストに圧倒されることなく、すぐに答えにアクセスできる用語集を作成します。';
$string['h5p-accordion-title'] = '用語集';
$string['h5p-advancedtext-desc'] = 'コンテンツからデジタルブックを作成し、論理的かつ魅力的に章ごとに整理することで、統一感のある魅力的な教材を提供します。';
$string['h5p-advancedtext-title'] = 'デジタルブック';
$string['h5p-block-title'] = 'ブロックタイトル';
$string['h5p-create'] = 'GeniAIでH5Pを作成する';
$string['h5p-create-new'] = 'GeniAIで新しいH5Pを作成する';
$string['h5p-create-this'] = 'このリソースで作成する';
$string['h5p-create-title'] = 'H5Pタイトル';
$string['h5p-create-title-desc'] = 'インタフェースでユーザに表示されるH5Pコンテンツのメインタイトルを定義します。';
$string['h5p-createpage-title'] = '新しい {$a} を作成する';
$string['h5p-crossword-desc'] = '学生の興味を引くインタラクティブなクロスワードゲームを作成します。あなたのコンテンツに含まれるキーワードで楽しくダイナミックな学習を促進します。';
$string['h5p-crossword-title'] = 'クロスワードパズル';
$string['h5p-delete-success'] = 'H5Pが正常に削除されました!';
$string['h5p-dialogcards-desc'] = 'フラッシュカードを作成します。学生がテキストの単語、フレーズまたは重要な概念を暗記できるようにします。それぞれのカードの表にはヒントが書かれています。学生がカードを裏返した場合、対応する情報が表示されます。これらのカードは言語学習および数学問題を解くのに使用できます。また、歴史的な出来事、公式または名前などの重要な事実の暗記にも役立ちます。';
$string['h5p-dialogcards-title'] = 'フラッシュカード';
$string['h5p-dragtext-desc'] = '単語ドラッグゲームを作成します。学生はテキストの欠けている部分を正しい場所にドラッグして完全な表現を作る必要があります。このゲームは学生が読んだ内容を覚えているか、また何を扱ったかを理解しているか評価するために使用できます。さらに学生がテキストをより深く考察および内容理解を促進するためにも役立ちます。';
$string['h5p-dragtext-title'] = '単語ドラッグゲーム';
$string['h5p-example'] = '例を参照する';
$string['h5p-findthewords-desc'] = '単語検索ゲームを作成します。学生は与えられたリストに基づきグリッド内の単語を探して選択する必要があります。';
$string['h5p-findthewords-title'] = '単語検索ゲーム';
$string['h5p-interactivebook-desc'] = 'インタラクティブビデオ、用語集、小テスト、ドラッグ＆ドロップ活動、クロスワード、単語検索等、様々なインタラクティブコンテンツを複数のページにまとめたインタラクティブブックを作成できます。最後に概要を加えて、学生がブックを通して獲得した評点合計を示します。';
$string['h5p-interactivebook-title'] = 'インタラクティブブック';
$string['h5p-interactivevideo-desc'] = '章および用語集でコンテンツの重要なポイントを強調したインタラクティブなビデオを作成します。最後に学習を強化および取り上げたトピックの復習のためのインタラクティブな要約を追加します。';
$string['h5p-interactivevideo-title'] = 'インタラクティブビデオ';
$string['h5p-manager'] = 'GeniAIでH5Pを管理する';
$string['h5p-manager-scorm'] = 'GeniAIでSCORMを管理';
$string['h5p-next-step'] = '次のステップ';
$string['h5p-no-apikey'] = '<p>アカウント作成システムを正常に動作させるためにChatGPT APIキーの設定が必要です。これによりアカウント作成時に必要な操作をChatGPTと通信できるようになります。<p>
<p><a href="{$a}">ChatGPTのAPIキーを設定するにはここをクリックしてください。</a></p>';
$string['h5p-page-title'] = 'GeniAIでH5Pを作成する';
$string['h5p-questionset-desc'] = '問題セットを作成します。多肢選択問題および〇/×問題等の多様な問題を解くことで学生にインタラクティブでやりがいのある体験を提供します。';
$string['h5p-questionset-title'] = '小テスト';
$string['h5p-readmore'] = '... さらに';
$string['h5p-return'] = 'コンテンツバンクに戻る';
$string['h5p-title'] = 'GeniAIコンテンツバンクを管理する';
$string['max_tokens'] = 'レスポンス最大文字数';
$string['max_tokens_desc'] = 'それぞれのリクエストで生成できる単語の最大数です。';
$string['message_01'] = '{$a} さん、こんにちは! 🌟';
$string['message_02'] = 'Moodle {$a->moodlename} のコース {$a->coursename} へようこそ！
私は {$a->geniainame} です。あなたの学習の旅をできるだけ素晴らしいものにするためにここにいます。
今日はどのようにお手伝いできますか？ 🌟📚';
$string['mode'] = '利用モード';
$string['mode_desc'] = 'あなたが希望するバルーンの使用モードを定義します。';
$string['mode_name_geniai'] = 'GeniAIチュータ';
$string['mode_name_none'] = 'チャットバルーンなし';
$string['model'] = 'APIモデル';
$string['model_desc'] = 'OpenAIで実行するAPIモデルです。利用可能な値は<a href="https://platform.openai.com/docs/models/overview" target="_blank">OpenAIウェブページ</a>でご確認ください。
<br>
* <strong>gpt-4</strong>: より強力で少し高価で反応に少し時間がかかりますが、テストには<a href="https://help.openai.com/en/articles/7102672-how-can-i-access-gpt-4" target="_blank">1ドルの前払い</aが必要です。
<br>
* <strong>gpt-4o-mini</strong>:  gpt-4より性能は劣りますが、速くて安いAPIモデルです。前払いは不要です。';
$string['modulename'] = 'GeniAI';
$string['modules'] = '{$a} から秘匿するモジュール';
$string['modules_desc'] = 'このリストには学生に利用させないモジュールが含まれています。演習で使用されないようにしています。';
$string['online'] = 'オンライン';
$string['pluginname'] = 'GeniAI';
$string['presence_penalty'] = '存在ペナルティ';
$string['presence_penalty_desc'] = 'このパラメータは生成されるテキストにさまざまなトークンが含まれるようにモデルを促すために使用されます。これはトークンが生成されるたびにトークンの対数確率から差し引かれる値です。存在ペナルティの値が大きいほど、モデルは生成されたテキストにまだ含まれていないトークンを生成しやすくなります。';
$string['privacy:metadata'] = 'GeniAIプラグインは会話履歴を保存します。OpenAIに送信されるのは氏名、コース名およびURLのみで、その他個人データは共有されません。';
$string['report_completion_tokens'] = 'トークン受信数';
$string['report_datecreated'] = '日';
$string['report_filename'] = 'GPTアシスタンス利用レポート';
$string['report_info'] = '<p>本レポートでは最初の100行のみを掲載しています。すべてのレコードにアクセスするには完全なドキュメントをダウンロードしてください。</p>
<p>トークンについてですが、一般的な経験則では1トークンは一般的な英語テキスト約4文字に相当します。これは単語の約3/4 (つまり、100トークン～＝75単語) に相当します。詳細は<a href="https://platform.openai.com/tokenizer" target="_blank">Language Model Tokenization</a>ページをご覧ください。</p>';
$string['report_model'] = 'ChatGPTモデル';
$string['report_prompt_tokens'] = 'トークン送信数';
$string['report_title'] = 'レポート';
$string['send_message'] = 'メッセージを送信する';
$string['settings'] = 'GeniAIを設定する';
$string['settings_casedesc'] = '温度およびTop_pパラメータはテキストおよびコード生成、創造的なライティング、チャットボット、テキストコメント生成、データ分析、探索的なライティング等、シナリオごとに定義されます。それぞれの設定はコンテンツ生成におけるモデルの創造性および一貫性に影響を与えます。
<br><br>
温度およびTop_pの使用に関して以下の表をご覧ください:<br>';
$string['settings_casedesc_balancedresp'] = 'バランスのとれたレスポンス';
$string['settings_casedesc_balancedresp_desc'] = '正確さと創造性のバランスのとれたレスポンスを提供します。自然でフレンドリな会話に最適です。';
$string['settings_casedesc_caseuse'] = '使用例';
$string['settings_casedesc_chatbot'] = 'チャットボット';
$string['settings_casedesc_chatbot_desc'] = 'ユーザとのリアルタイムの対話のための高速で一貫性のある文脈に応じたレスポンスを提供します。';
$string['settings_casedesc_creativegen'] = '創造的生成';
$string['settings_casedesc_creativegen_desc'] = 'より創造的、独創的または探求的なレスポンスを生成します。ブレーンストーミングまたはストーリーテリングに有用です。';
$string['settings_casedesc_description'] = '説明';
$string['settings_casedesc_formaltones'] = 'フォーマルトーン';
$string['settings_casedesc_formaltones_desc'] = '創造的なバリエーションが少なく形式的または技術的なテキストを作成します。';
$string['settings_casedesc_optionexplore'] = 'オプション調査';
$string['settings_casedesc_optionexplore_desc'] = '質問に対するさまざまなアプローチを検討するために複数の代替レスポンスを生成します。';
$string['settings_casedesc_preciseresp'] = '正確なレスポンス';
$string['settings_casedesc_preciseresp_desc'] = '最高の精度および予測可能性を提供します。技術的または情報的な作業にお勧めします。';
$string['settings_casedesc_relaxedtones'] = 'リラックストーン';
$string['settings_casedesc_relaxedtones_desc'] = '創造的およびフレンドリなアプローチで軽めのカジュアルなテキストを生成します。';
$string['settings_casedesc_temperature'] = '温度';
$string['settings_casedesc_top_p'] = 'Top_p';
$string['talk_geniai'] = 'ここで {$a} と話す';
$string['write_message'] = 'メッセージを入力する ...';
