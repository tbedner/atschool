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
 * Strings for component 'qtype_essayautograde', language 'ja', version '4.4'.
 *
 * @package     qtype_essayautograde
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmultiplebands'] = 'さらに {$a} 個の評定帯域を追加する';
$string['addmultiplephrases'] = 'さらに {$a} 個のターゲットフレーズ追加する';
$string['addpartialgrades'] = '部分評点を付与しますか?';
$string['addpartialgrades_help'] = 'このオプションを有効にした場合、部分的に完了した評定帯域に評点が追加されます。';
$string['addsingleband'] = 'さらに 1 個の評定帯域を追加する';
$string['addsinglephrase'] = 'さらに 1 個のターゲットフレーズを追加する';
$string['allowsimilarity'] = '類似性を認めますか?';
$string['allowsimilarity_help'] = '学生の解答および解答テンプレートまたはサンプル解答の間に許容される最大類似度です。この値が高いほど、学生の解答はテンプレートまたはサンプルに類似できます。逆に値が低いほど、学生の解答はテンプレートまたはサンプルと異なる必要があります。この値を調整することで学生の解答に求められる独創性および詳細のレベルに影響を与えることができます。';
$string['allowsimilaritypercent'] = 'はい - 最大 {$a}% の類似性を認めます';
$string['auto'] = '自動';
$string['autograding'] = '自動評定';
$string['chars'] = '文字';
$string['charspersentence'] = '1文あたりの文字数';
$string['commonerror'] = 'よくある間違い';
$string['commonerrors'] = 'よくある間違い';
$string['commonerrors_help'] = 'よくある間違いはこの問題に関連する「間違い用語集」で定義されます。';
$string['correctresponse'] = 'この問題で満点を取得したい場合、あなたは次の基準を満たす必要があります:';
$string['countcharslabel'] = '現在の文字数';
$string['countfileslabel'] = '現在のファイル数';
$string['countparagraphslabel'] = '現在の段落数';
$string['countsentenceslabel'] = '現在の文数';
$string['countwordslabel'] = '現在の単語数';
$string['crop'] = 'トリミング';
$string['enableautograde'] = '自動評定を有効にする';
$string['enableautograde_help'] = '自動評定を有効または無効にします。';
$string['errorbehavior'] = '間違いマッチング動作';
$string['errorbehavior_help'] = 'これらの設定でよくある間違い用語集にあるエントリのマッチング動作を絞り込みます。';
$string['errorcmid'] = '間違い用語集';
$string['errorcmid_help'] = 'よくある間違いのリストを含む用語集を選択してください。作文の解答に間違いが発見されるたびに指定されたペナルティがこの問題の評点から差し引かれます。';
$string['errorpercent'] = '1間違いあたりのペナルティ';
$string['errorpercent_help'] = '解答に間違いが発見されるたびに減点される評点合計のパーセンテージを選択してください。';
$string['excludecommonerrors'] = '<a href="{$a->href}" target="_blank">{$a->name}</a>でよくある間違いを犯さないでください。';
$string['explanationautopercent'] = 'これは通常のパーセンテージの範囲外であるため {$a->autopercent}% に調整されました。';
$string['explanationcommonerror'] = 'よくある間違い「 {$a->error} 」が含まれているため {$a->percent}%';
$string['explanationcompleteband'] = '評定帯域 [{$a->gradeband}] の完了で {$a->percent}%';
$string['explanationdatetime'] = '- %Y/%m/%d %H:%M';
$string['explanationfiles'] = '{$a->filecount} / {$a->itemcount} ファイルの提出で {$a->percent}%';
$string['explanationfirstitems'] = '最初の {$a->count} {$a->itemtype} で {$a->percent}%';
$string['explanationgrade'] = '従って、この作文のコンピュータ生成の評定は次のように設定されました: {$a->finalgrade} = ({$a->finalpercent}% / {$a->maxgrade})';
$string['explanationitems'] = '{$a->count} {$a->itemtype} で {$a->percent}%';
$string['explanationmaxgrade'] = 'この問題の最大評点は {$a->maxgrade} です。';
$string['explanationnotenough'] = '{$a->count} {$a->itemtype} は評定に必要な最少数を下回っています。';
$string['explanationoverride'] = '後で ({$a->datetime}) この作文の評定は次のように手動設定されました: {$a->manualgrade}';
$string['explanationpartialband'] = '評定帯域 [{$a->gradeband}] の部分完了で {$a->percent}%';
$string['explanationpenalty'] = 'しかし、送信前に解答を確認したため、{$a->penaltytext} が減点されました。';
$string['explanationrawpercent'] = 'この作文の未加工のパーセンテージ評定は次のとおりです:  {$a->rawpercent}% <br /> = ({$a->details})';
$string['explanationremainingitems'] = '{$a->count} {$a->itemtype} のままで {$a->percent}%';
$string['explanationseecomment'] = '(以下のコメントをご覧ください)';
$string['explanationtargetphrase'] = 'フレーズ「 {$a->phrase} 」を含んで {$a->percent}%';
$string['feedback'] = 'フィードバック';
$string['feedbackhintbreaks'] = 'あなたは多くの改行を使いましたか?';
$string['feedbackhintchars'] = 'あなたは必要な文字数を書きましたか?';
$string['feedbackhinterrors'] = 'あなたによくある間違いはありましたか?';
$string['feedbackhintfiles'] = 'あなたは必要な数のファイルを添付しましたか?';
$string['feedbackhintparagraphs'] = 'あなたは必要な段落数を書きましたか ?';
$string['feedbackhintphrases'] = 'あなたは対象用語すべてを盛り込みましたか?';
$string['feedbackhints'] = 'あなたの成績を上げるためのヒント';
$string['feedbackhintsentences'] = 'あなたは必要な数の文を書きましたか?';
$string['feedbackhintwords'] = 'あなたは目標語数に達しましたか?';
$string['files'] = 'ファイル';
$string['fogindex'] = 'フォグ指数';
$string['fogindex_help'] = 'ガニングフォグ指数は読みやすさの指標です。これは次の式で算出されます。
* ((1文あたりの単語数) + (1文あたりの長文単語数)) x 0.4
詳細は次を覧ください:
<https://en.wikipedia.org/wiki/Gunning_fog_index>';
$string['forceupgrade'] = 'アップグレードを強制する';
$string['gradeband'] = '評定帯域 [{no}]';
$string['gradeband_help'] = 'この帯域を適用するための最少可算アイテム数、およびこの帯域を適用した場合に与えられる評点を指定してください。';
$string['gradebands'] = '評定帯域';
$string['gradecalculation'] = '評定計算';
$string['gradeforthisquestion'] = 'この問題の評定';
$string['hidden'] = '秘匿';
$string['hidesample'] = 'サンプルを秘匿する';
$string['itemcount'] = '期待アイテム数';
$string['itemcount_help'] = 'この問題で最高評点を獲得するために作文テキスト内に含まれなければならない可算アイテムの最少数です。

この値は以下に定義される評定帯域 (もしあれば) により無効となる可能性があることに留意してください。';
$string['itemtype'] = '可算アイテムのタイプ';
$string['itemtype_help'] = '自動評定に寄与する作文テキスト内のアイテムの種類を選択してください。';
$string['lexicaldensity'] = '語彙密度';
$string['lexicaldensity_help'] = '語彙密度は以下の式で算出されるパーセンテージです。

* 100 x (固有単語数) / (総単語数)

したがって、多くの単語が繰り返される作文は語彙密度が低く、ユニークな単語が多い作文は語彙密度が高いと言えます。';
$string['longwords'] = '長い単語';
$string['longwords_help'] = '「長い単語」とは3音節以上の単語です。音節数を決定するアルゴリズムはおおよその結果しか取得できないことに留意してください。';
$string['longwordspersentence'] = '1文あたりの長い単語';
$string['maximumfilecount'] = '最大ファイル数: {$a}';
$string['maximumfilesize'] = '最大ファイルサイズ: {$a}';
$string['maxwordserror'] = 'あなたは語数を書き過ぎました!';
$string['maxwordslabel'] = '最大単語数';
$string['maxwordswarning'] = 'あなたは語数を書き過ぎました!';
$string['minimumfilecount'] = '最少ファイル数: {$a}';
$string['minwordserror'] = 'あなたは語数が足りません!';
$string['minwordslabel'] = '最少単語数';
$string['minwordswarning'] = '続けてください! あなたはまだ十分な語数を書いていません。';
$string['missing'] = '不足している';
$string['overflow'] = 'オーバフロー';
$string['paragraphs'] = '段落';
$string['phrasebehavior'] = 'ターゲットフレーズ [{no}] 動作';
$string['phrasebehavior_help'] = 'これらの設定でこのターゲットフレーズのマッチング動作を絞り込みます。';
$string['phrasecasesensitiveno'] = '大文字小文字を区別しない';
$string['phrasecasesensitiveyes'] = '大文字小文字を区別する';
$string['phrasefullmatchno'] = '単語の全部または一部を一致させる';
$string['phrasefullmatchyes'] = '完全な単語のみ一致させる';
$string['phraseignorebreaksno'] = '改行を認識する';
$string['phraseignorebreaksyes'] = '改行を無視する';
$string['phrasematch'] = 'もし';
$string['phrasepercent'] = 'が使用された場合、次を適用します:';
$string['pleaseattachfiles'] = '必要なファイル数を添付してください。';
$string['pleaseinputtext'] = 'あなたの解答をテキストボックスに入力してください。';
$string['pluginname'] = '作文 (自動評定)';
$string['pluginname_help'] = '画像を含む問題に対して解答者は1つまたは複数の段落からなる解答を入力します。最初は文字数、単語数、文または段落数、特定のターゲットフレーズの有無に基づいて自動的に評点が付与されます。自動評定は後で教師が上書きできます。';
$string['pluginname_link'] = 'question/type/essayautograde';
$string['pluginnameadding'] = '作文 (自動評定) 問題を追加する';
$string['pluginnameediting'] = '作文 (自動評定) 問題を編集する';
$string['pluginnamesummary'] = '複数の文または複数の段落の作文を問題解答として提出できます。作文は自動的に評定されます。評定は後で上書きできます。';
$string['present'] = '存在する';
$string['privacy:metadata'] = '作文 (自動評定) 問題タイププラグインはいかなる個人データも保存しません。';
$string['requiredfilecount'] = '必要なファイル数: {$a}';
$string['responseisnotoriginal'] = 'あなたのテキストをさらに独創的なものにしてください。';
$string['responsesample'] = 'サンプル解答';
$string['responsesample_help'] = '学生が問題テキスト内の「サンプルを表示する」リンクをクリックした場合、ここにあるテキストすべてがサンプル解答として表示されます。';
$string['responsesampleformat'] = 'サンプル作文フォーマット';
$string['responsesampleformat_help'] = 'サンプル解答テキストのフォーマットを選択してください。';
$string['rewriteresubmit'] = 'そして再度送信する';
$string['rewriteresubmitbreaks'] = 'すべての改行を削除する';
$string['rewriteresubmitchars'] = 'さらに文字を追加する';
$string['rewriteresubmiterrors'] = 'よくある間違いを修正する';
$string['rewriteresubmitfiles'] = '必要な数のファイルを添付する';
$string['rewriteresubmitjoin'] = ',';
$string['rewriteresubmitparagraphs'] = 'さらに段落を追加する';
$string['rewriteresubmitphrases'] = '足りないフレーズを追加する';
$string['rewriteresubmitsentences'] = 'さらに文を追加する';
$string['rewriteresubmitwords'] = 'さらに単語を追加する';
$string['rotate'] = '回転';
$string['scale'] = '尺度';
$string['sentences'] = '文';
$string['sentencesperparagraph'] = '1段落あたりの文数';
$string['showcalculation'] = '評定計算を表示しますか?';
$string['showcalculation_help'] = 'このオプションを有効にした場合、自動生成された評定計算に関する説明が評定およびレビューページに表示されます。';
$string['showfeedback'] = '学生にフィードバックを表示しますか?';
$string['showfeedback_help'] = 'このオプションを有効にした場合、評定およびレビューページに実行可能フィードバックテーブルが表示されます。実行可能なフィードバックとは学生に改善すべき点を伝えるフィードバックです。';
$string['showgradebands'] = '評定帯域を表示しますか?';
$string['showgradebands_help'] = 'このオプションを有効にした場合、評定帯域の詳細が評定およびレビューページに表示されます。';
$string['showsample'] = 'サンプルを表示する';
$string['showtargetphrases'] = 'ターゲットフレーズを表示しますか?';
$string['showtargetphrases_help'] = 'このオプションを有効にした場合、ターゲットフレーズの詳細が評定およびレビューページに表示されます。';
$string['showtextstats'] = 'テキスト統計を表示しますか?';
$string['showtextstats_help'] = 'このオプションを有効にした場合、テキストに関する統計が表示されます。';
$string['showtostudentsonly'] = 'はい、学生のみに表示します';
$string['showtoteachersandstudents'] = 'はい、教師および学生に表示します';
$string['showtoteachersonly'] = 'はい、教師のみに表示します';
$string['targetphrase'] = 'ターゲットフレーズ [{no}]';
$string['targetphrase_help'] = 'このターゲットフレーズが作文に登場した場合に加算される評点を指定してください。> **例** [Finally]が使用された場合、[問題評点の 10%]が付与されます。

ターゲットフレーズには1つのフレーズまたはカンマ「,」または単語「OR」(大文字) で区切られたフレーズのリストも使用できます。> **例** [Finally OR Lastly]が使用された場合、[問題評点の 10%] が付与されます。

フレーズ中の疑問符「? 」は任意の1文字にマッチしてアスタリスク「*」は任意の文字数 (ゼロ文字も含む) にマッチします。> **例** [First\\*Then\\*Finally]が使用された場合、[問題評点の 50%]が付与されます。';
$string['targetphrases'] = 'ターゲットフレーズ';
$string['textstatistics'] = 'テキスト統計';
$string['textstatitems'] = '統計アイテム';
$string['textstatitems_help'] = 'あなたが評定およびレビューページで表示されるテキスト統計に表示したいアイテムをここで選択してください。';
$string['uniquewords'] = 'ユニークな単語';
$string['uploadfiles'] = 'ファイルをアップロードする';
$string['visible'] = '可視';
$string['words'] = '単語';
$string['wordspersentence'] = '1文あたりの単語数';
