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
 * Strings for component 'tiny_aic', language 'ja', version '4.4'.
 *
 * @package     tiny_aic
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_to_editor'] = 'エディタに追加する';
$string['advanced'] = '高度';
$string['advanceddesc'] = 'OpenAIに送信される高度な引数です。あなたが何をしているのか理解できない場合、絶対に触らないでください!';
$string['aic:use'] = '使用可';
$string['aicplaceholder'] = '文字を入力してください ...';
$string['aigenerationfailed'] = 'AI生成に失敗しました。';
$string['allowed_admin'] = 'サイト管理者に許可する';
$string['allowed_admin_desc'] = 'サイト管理者がこの機能を利用できるようにします。';
$string['allowed_role'] = '許可されるロール';
$string['allowed_role_desc'] = 'システムレベルでのロールのあるユーザがこの機能を利用できるようにします。';
$string['apikey'] = 'OpenAI APIキー';
$string['apikeydesc'] = 'あなたのOpenAIアカウントのAPIキーです。';
$string['assistantname'] = 'アシスタント名';
$string['assistantnamedesc'] = 'AIが内部で自身を識別するために使用する名称です。';
$string['button_title'] = 'AIでコンテンツを作成する';
$string['cancel'] = 'キャンセル';
$string['card_heading'] = '生成コンテンツ';
$string['choice'] = '下書き数';
$string['choice_desc'] = '取得する下書き数';
$string['draft'] = '下書き';
$string['emptyrule'] = 'テキストを入力してください。';
$string['error'] = '私たちはコンテンツを取得できませんでした。再度お試しください!';
$string['frequency'] = '頻度ペナルティ';
$string['frequencydesc'] = 'テキスト内の既存の頻度に基づいて新しいトークンにどの程度のペナルティを課すか決定します。これによりモデルが同一行を繰り返し生成する可能性が低下します。';
$string['generate'] = 'コンテンツを生成する';
$string['header'] = 'AIでコンテンツを作成する';
$string['help'] = 'あなたはエディタから選択するか、テキストエリアに直接入力できます。最大1000文字、最小3文字入力できます。';
$string['lengthrule'] = '3文字以上、1000文字以下で入力してください。';
$string['maxlength'] = '最大長';
$string['maxlengthdesc'] = '生成可能なトークンの最大数です。リクエストではプロンプトとコンプリート間で共有されるトークンを最大2,048または4,000個まで使用できます。正確な上限はモデルによって異なります (通常の英語テキストでは1トークンは約4文字に相当します)。';
$string['model'] = 'モデル';
$string['modeldesc'] = '完了を生成するモデルです。一部のモデルは自然言語処理タスクに適しています。他のモデルはコードに特化されています。';
$string['placeholder'] = 'デジタル教育に関して書く';
$string['pluginname'] = 'AIコンテンツジェネレータ';
$string['presence'] = '存在ペナルティ';
$string['presencedesc'] = 'テキスト中にすでに登場しているかどうかにより新しいトークンにどの程度のペナルティを課すか決定します。これによりモデルが新しいトピックに関して話す可能性が高くなります。';
$string['privacy:metadata'] = 'AICコンテンツジェネレータはいかなる個人データも保存しません。';
$string['prompt'] = '完了プロンプト';
$string['promptdesc'] = '会話記録の前にAIに与えられるプロンプトです。';
$string['showlabels'] = 'ラベルを表示する';
$string['sourceoftruth'] = '信頼できる情報源';
$string['sourceoftruthdesc'] = 'AIは初期状態でも非常に高性能ですが、質問の回答を知らない場合、回答を拒否するよりも自信を持って誤った情報を提供する可能性が高くなります。あなたはこのテキストボックスにAIが参照できるよう一般的な質問およびその回答を追加できます。質問および回答は以下のフォーマットで入力してください:
<pre>Q: 質問1<br />A: 回答1<br /><br />Q: 質問2<br />A: 回答2</pre>';
$string['temperature'] = '温度';
$string['temperaturedesc'] = 'ランダム性を制御します: 値を下げた場合、ランダムな完了が減少します。温度がゼロに近づいた場合、モデルは決定論的かつ反復的なものになります。';
$string['textlength'] = '3文字以上1000文字以下で入力してください。';
$string['thinking'] = '思考中 ...';
$string['topp'] = 'Top P';
$string['toppdesc'] = '核サンプリングにより多様性を制御します: 0.5はすべての尤度加重オプションの半数が考慮されることを意味します。';
$string['username'] = 'ユーザ名';
$string['usernamedesc'] = 'ユーザを内部的に識別するためにAIが使用する名称です。';
