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
 * Strings for component 'peerwork', language 'ja', version '4.4'.
 *
 * @package     peerwork
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitydate:closed'] = '終了:';
$string['activitydate:closes'] = '期限:';
$string['activitydate:opened'] = '開始:';
$string['activitydate:opens'] = '開始予定:';
$string['addmorecriteria'] = 'さらに {no} 個のクライテリアを追加する';
$string['addmorecriteriastep'] = 'さらにクライテリア増分を追加する';
$string['addmorecriteriastep_help'] = '教育者がさらにクライテリアを追加するボタンをクリックした場合にフォームに追加される評価クライテリア数です。';
$string['addsubmission'] = '提出を追加する';
$string['allmemberssubmitted'] = 'すべてのグループメンバが提出しました。';
$string['allowlatesubmissions'] = '提出期限後の提出を許可する';
$string['allowlatesubmissions_help'] = 'この設定有効にした場合、提出期限後の提出も許可します。
<br />
<strong>注意:</strong> グループ評定が保存されて最終評定が計算されている場合、学生の提出は編集不可またはロックされます。これは学生による相互評定修正を原因とする最終評定改竄を防ぐためです。';
$string['assessment'] = '評価';
$string['assessmentalreadygraded'] = '評価はすでに評定済みです。';
$string['assessmentclosedfor'] = '評価終了: {$a}';
$string['assessmentcriteria:description'] = 'クライテリア {no} 説明';
$string['assessmentcriteria:description:help'] = 'クライテリア説明';
$string['assessmentcriteria:description:help_help'] = 'このクライテリアの目的を簡潔に説明するために使用してください。';
$string['assessmentcriteria:header'] = '評価クライテリア設定';
$string['assessmentcriteria:modgradetypescale'] = 'リッカート';
$string['assessmentcriteria:nocriteria'] = 'この課題にクライテリアは設定されていません。';
$string['assessmentcriteria:scoretype'] = 'クライテリア {no} 評定タイプ';
$string['assessmentcriteria:scoretype:help'] = 'クライテリア評定タイプ';
$string['assessmentcriteria:scoretype:help_help'] = 'このクライテリアを評定するための尺度を選択してください';
$string['assessmentcriteria:weight'] = '加重';
$string['assessmentcriteria:weight_help'] = 'TODO未使用';
$string['assessmentnotopenyet'] = 'まだ評価は開始されていません。';
$string['assessmentopen'] = '評価開始';
$string['assignment'] = '課題';
$string['availablescales'] = '利用可能な尺度';
$string['availablescales_help'] = 'この計算機が使用できる尺度です。';
$string['base'] = 'ベース計算機';
$string['calcmissing'] = 'PA加重適用に使用される計算機は利用できません。{$a}';
$string['calcmissinggraded'] = '計算機設定を変更した場合、学生の最終評定が変更される点に留意してください。';
$string['calculatedgrade'] = '計算済み評定';
$string['calculatedgrade_help'] = '加重およびペナルティを適用する前の評定です。';
$string['calculatedgrades'] = '計算済み評定';
$string['calculator'] = '計算機';
$string['calculator_help'] = '計算機の使用方法です。';
$string['calculatorplugins'] = '計算機プラグイン';
$string['calculatortypes'] = '計算機設定';
$string['calculatorupdate'] = '計算機を更新する';
$string['charactersremaining'] = '残り文字数: {$a}';
$string['clearallsubmissionsforallgroups'] = 'すべての提出をクリアする';
$string['clearsubmission'] = '提出をクリアする';
$string['comment'] = 'コメント:';
$string['comments'] = 'コメント';
$string['comments_help'] = 'オーバーライドの理由を示すための必須コメントです。このコメントは学生には表示されません。ログには記録されます。';
$string['completiongradedpeers'] = 'グループのピアを評定する';
$string['completiongradedpeers_desc'] = '学生はすべてのピアを評定する必要があります。';
$string['completiongradedpeers_help'] = 'この設定を有効にした場合、この条件を満たすために学生はすべてのピアを評定する必要があります。';
$string['confimrclearsubmission'] = '本当にこのグループの提出をクリアしてもよろしいですか? これによりすべての学生から提供された情報が削除されます。';
$string['confimrclearsubmissions'] = '本当にすべてグループの提出をクリアしてもよろしいですか? これによりすべての学生から提供された情報が削除されます。';
$string['confirmationmailbody'] = 'あなたは相互評価を送信しました ({$a->url} - {$a->time})。
添付ファイル:
{$a->files}

あなたが送信した評定:
{$a->grades}';
$string['confirmationmailsubject'] = '{$a} の総合評価提出';
$string['confirmeditgrade'] = '期日前評定';
$string['confirmeditgradetxt'] = '期限を過ぎていません。今あなたが評定した場合、学生は提出を編集できなくなります。続けてもよろしいですか?';
$string['confirmlockeditingaware'] = 'あなたの提出および相互評定を保存した場合、以後修正できなくなります。本当に続けてもよろしいですか?';
$string['confirmunlockeditinggrader'] = '{$a} が付与した評定は現在ロックされています。ロック解除してこの学生に評定または根拠の変更を許可しますか。これは直ちに有効となります。';
$string['confirmunlockeditingsubmission'] = '現在、提出の編集はロックされています。ロック解除して学生に提出の更新を許可しますか。これは直ちに有効となります。';
$string['contibutionscore'] = '貢献度';
$string['contibutionscore_help'] = 'これはグループメンバの相対的な貢献度を示すPAスコアです。';
$string['criteria'] = 'クライテリア';
$string['criterianum'] = 'クライテリア {$a}';
$string['critscale'] = 'クライテリア評定タイプ';
$string['critscale_help'] = 'クライテリアを評定するための尺度です。';
$string['defaultcrit'] = 'デフォルトクライテリア設定 (任意)';
$string['defaultcrit0'] = 'デフォルトテキスト - クライテリア1';
$string['defaultcrit0_help'] = '最初のクライテリアに使用するデフォルトテキストです。';
$string['defaultcrit1'] = 'デフォルトテキスト - クライテリア2';
$string['defaultcrit1_help'] = '2番目のクライテリアに使用するデフォルトテキストです。';
$string['defaultcrit2'] = 'デフォルトテキスト - クライテリア3';
$string['defaultcrit2_help'] = '3番目のクライテリアに使用するデフォルトテキストです。';
$string['defaultcrit3'] = 'デフォルトテキスト - クライテリア4';
$string['defaultcrit3_help'] = '4番目のクライテリアに使用するデフォルトテキストです。';
$string['defaultcrit4'] = 'デフォルトテキスト - クライテリア5';
$string['defaultcrit4_help'] = '5番目のクライテリアに使用するデフォルトテキストです。';
$string['defaultcrit_desc'] = '最大5つのクライテリアのデフォルト値および対応する尺度です。';
$string['defaultscale'] = 'デフォルト尺度';
$string['defaultscale0'] = 'デフォルト尺度 - クライテリア1';
$string['defaultscale0_help'] = '最初のクライテリアに使用するデフォルト尺度です。';
$string['defaultscale1'] = 'デフォルト尺度 - クライテリア2';
$string['defaultscale1_help'] = '2番目のクライテリアに使用するデフォルト尺度です。';
$string['defaultscale2'] = 'デフォルト尺度 - クライテリア3';
$string['defaultscale2_help'] = '3番目のクライテリアに使用するデフォルト尺度です。';
$string['defaultscale3'] = 'デフォルト尺度 - クライテリア4';
$string['defaultscale3_help'] = '4番目のクライテリアに使用するデフォルト尺度です。';
$string['defaultscale4'] = 'デフォルト尺度 - クライテリア5';
$string['defaultscale4_help'] = '5番目のクライテリアに使用するデフォルト尺度です。';
$string['defaultscale_help'] = '他のすべてのクライテリアに使用するデフォルト尺度です。';
$string['defaultsettings'] = 'デフォルト設定';
$string['defaultsettings_desc'] = 'このモジュールの新しいインスタンスをコースに追加する際に使用するデフォルト値です。';
$string['displaypeergradestotals'] = '相互評定合計を表示する';
$string['displaypeergradestotals_help'] = 'この設定を有効にした場合、学生には各クライテリアのパーセンテージとして相互評定の合計が表示されます。合計が表示されるためには相互評定が表示されている必要があることに留意してください。';
$string['downloadallsubmissions'] = 'すべての提出をダウンロードする';
$string['draftnotsubmitted'] = '下書き (未提出)';
$string['duedate'] = '提出終了';
$string['duedate_help'] = 'これは相互評価の期限です。この日以降も提出は許可されます (有効にされている場合)。
<br />
<strong>注意:</strong> 評定後、すべての学生のファイル提出および相互評定は学生が編集できなくなります。';
$string['duedateat'] = '期限: {$a}';
$string['duedatenotpassed'] = '期限を過ぎていません。今あなたが評定した場合、学生は提出を編集できなくなります。';
$string['duedatepassedago'] = '期限は {$a} 前に超過しています。';
$string['editablebecause'] = '編集可能理由: {$a}';
$string['editgrade'] = 'グループ評定を編集する: {$a}';
$string['editinglocked'] = '編集はロックされています。';
$string['editsubmission'] = '提出を編集する';
$string['eventassessable_submitted'] = 'ピアワーク提出';
$string['eventgradebookupdatefailed'] = 'ピアワーク評定表が更新されました。';
$string['eventgradesreleased'] = '評定がリリースされました。';
$string['eventpeer_feedback_created'] = 'ピアワーク相互フィードバック';
$string['eventpeer_grade_created'] = 'ピアワーク相互評定';
$string['eventpeer_grade_overridden'] = 'ピアワーク相互評定がオーバーライドされました。';
$string['eventsubmission_created'] = 'ピアワーク提出が作成されました。';
$string['eventsubmission_exported'] = 'ピアワークエクスポート';
$string['eventsubmission_files_deleted'] = 'ピアワークファイル削除';
$string['eventsubmission_files_uploaded'] = 'ピアワークファイルアップロード';
$string['eventsubmission_grade_form_viewed'] = 'ピアワーク評定フォームが表示されました。';
$string['eventsubmission_graded'] = 'ピアワーク評定';
$string['eventsubmission_updated'] = 'ピアワーク提出が更新されました。';
$string['eventsubmission_viewed'] = 'ピアワーク課題提出フォームが表示されました。';
$string['eventsubmissioncleared'] = '提出がクリアされました。';
$string['eventsubmissions_exported'] = 'すべてのピアワークがエクスポートされました。';
$string['eventsubmissionsdownloaded'] = '提出がダウンロードされました。';
$string['export'] = 'エクスポート';
$string['exportxls'] = 'すべてのグループ評定をエクスポートする';
$string['feedback'] = 'グループに対するフィードバック';
$string['feedbackfiles'] = 'フィードバックファイル';
$string['finalgrades'] = '最終評定';
$string['finalgrades_help'] = '最終評定は個人/グループの平均差に5を掛けたものを加減して算出さ れます。結果は個人の平均がグループの平均より大きいか小さいかにより決定されます。';
$string['finalweightedgrade'] = '最終加重評定';
$string['firstsubmittedbyon'] = '初回提出者: {$a->name} (提出日: {$a->date})';
$string['fromdate'] = '提出開始';
$string['fromdate_help'] = 'この設定を有効にした場合、学生はこの日付以前に提出できません。この設定を無効にした場合、学生はすぐに提出を開始できます。';
$string['grade'] = '評定';
$string['gradebefore'] = 'オーバーライド前に評定する: {$a}';
$string['gradecannotberemoved'] = '評定は削除できません。';
$string['gradedby'] = '評定者:';
$string['gradedbyon'] = '評定者: {$a->name} (評定日: {$a->date})';
$string['gradedon'] = '評定日時:';
$string['gradegivento'] = '<strong>評定</strong>';
$string['gradeoverridden'] = 'オーバーライド相互評定: {$a}';
$string['gradeoverride'] = '最終評定';
$string['gradesandfeedbacksaved'] = '評定およびフィードバックが保存されました。';
$string['gradesexistmsg'] = '一部の評定はすでにリリースされているため、計算機の種類を変更できません。あなたが計算機を変更したい場合、最初に既存の評定を再計算するかどうか選択する必要があります。';
$string['gradesgivenby'] = '<h2>{$a} による評定</h2>';
$string['groupaverage'] = 'グループ平均評定';
$string['groupaverage_help'] = 'これはグループの相互評定全体の平均です。';
$string['groupgrade'] = 'グループ評定';
$string['groupgradeoutof100'] = '100点満点でのグループ評定';
$string['groupsubmissionsettings'] = 'グループ提出設定';
$string['groupsubmittedon'] = 'グループ提出';
$string['hideshow'] = '秘匿/表示';
$string['invalidgrade'] = '無効な評定です。';
$string['invalidpaweighting'] = '無効な過重です。';
$string['invalidscale'] = '無効な尺度です。上のオプションから選択してください。';
$string['justification'] = '根拠';
$string['justification_help'] = '根拠コメントを有効/無効にして可視性を選択します。';
$string['justificationbyfor'] = '根拠説明: {$a} -';
$string['justificationdisabled'] = '無効';
$string['justificationhiddenfromstudents'] = '学生から秘匿する';
$string['justificationintro'] = 'あなたがピアに付与した評定の根拠に関して以下にコメントを追加してください。';
$string['justificationmaxlength'] = '根拠文字制限';
$string['justificationmaxlength_help'] = '根拠フィールドで許可される最大文字数です。あなたがこの値をゼロに設定した場合、制限がなくなります。';
$string['justificationnoteshidden'] = '注意: あなたのコメントはあなたのピアから秘匿されます。教職員のみ閲覧できます。';
$string['justificationnotesvisibleanon'] = '注意: あなたのコメントはあなたのピアに表示されますが匿名化されます。あなたのユーザ名はあなたが残したコメントの横には表示されません。';
$string['justificationnotesvisibleuser'] = '注意: あなたはコメントおよびユーザ名があなたのピアに表示されます。';
$string['justifications'] = '根拠';
$string['justificationtype'] = '根拠タイプ';
$string['justificationtype0'] = 'ピア';
$string['justificationtype1'] = 'クライテリア';
$string['justificationtype_help'] = 'ピア根拠にはピアごとにコメントが必要です。クライテリア根拠にはクライテリア評定ごとにコメントが必要です。';
$string['justificationvisibleanon'] = '匿名で表示する';
$string['justificationvisibleuser'] = 'ユーザ名で表示する';
$string['lasteditedon'] = '最終更新日時: {$a->date}';
$string['latesubmissionsallowedafterduedate'] = '提出期限後の提出は許可されます。';
$string['latesubmissionsnotallowedafterduedate'] = '提出期限後の提出は許可されません。';
$string['latesubmissionsubject'] = '提出期限後の提出';
$string['latesubmissiontext'] = '{$a->name} の提出期限後、{$a->user} により提出されました。';
$string['lockediting'] = '編集をロックする';
$string['lockediting_help'] = 'この設定を有効にした場合、提出および相互評定は学生により提出された時点で変更できなくなります。提出が許可されている間、教師は学生個人の編集をロック解除できます。';
$string['managepeerworkcalculatorplugins'] = 'ピアワーク計算機プラグインを管理する';
$string['messageprovider:grade_released'] = '評定およびフィードバックが公開されました。';
$string['modulename'] = '相互評価';
$string['modulename_help'] = '相互評価活動は相互評定と組み合わされたグループ課題提出です。
<br />
この活動では相互評定は学生がグループタスクに関して相互グループのパフォーマンス/貢献度を評価できます。また、設定が有効な場合、自分自身も評価できます。グループタスクは活動のファイル提出コンポーネントです。相互評定は評定尺度の選択および各学生のパフォーマンスに対するコメントで構成されます。
<br />
各学生の最終的な総合評定は選択された計算方法で計算されます。';
$string['modulenameplural'] = '相互評価';
$string['multiplegroups'] = '次の人は2つ以上のグループに属しています: {$a} 評定は更新されませんでした。';
$string['myfinalgrade'] = 'マイ最終評定';
$string['nocalculator'] = 'インストールされた計算機はありません。すべての学生は未完了ペナルティ対象となるグループ評定を取得します。';
$string['nomembers'] = '# メンバ';
$string['noncompletionpenalty'] = '評定未提出ペナルティ';
$string['noncompletionpenalty_help'] = '学生が評価の評定を提出していない場合 (ピアを評定していない場合)、どの程度のペナルティを課しますか?';
$string['none'] = 'なし';
$string['nonegiven'] = 'なし';
$string['nonereceived'] = 'なし';
$string['nopeergrades'] = '# 相互評定';
$string['noteditablebecause'] = '編集不可理由: {$a}';
$string['noteoverdueby'] = '(期限切れ {$a})';
$string['nothingsubmitted'] = 'まだ何も提出されていません。';
$string['nothingsubmittedyet'] = 'まだ何も提出されていません。';
$string['nothingsubmittedyetduedatepassednago'] = 'まだ何も提出されていませんが、{$a} 前に期限が超過しています。';
$string['notifygradesreleasedhtml'] = 'あなたの「 $a->name} 」の提出に対する評定およびフィードバックが公開されました。あなたは<a href="{$a->url}">ここ</a>からアクセスできます。';
$string['notifygradesreleasedsmall'] = 'あなたの「 {$a} 」の評定が公開されました。';
$string['notifygradesreleasedtext'] = 'あなたが提出した「 {$a->name} 」の評定およびフィードバックが公開されました。あなたはここからアクセスできます: {a->url}';
$string['notyetgraded'] = '評定未了';
$string['numcrit'] = 'デフォルトのクライテリア数';
$string['numcrit_help'] = '含めるクライテリアのデフォルト数です。デフォルトの言語ストリングは以下の5つです。';
$string['overridden'] = 'オーバーライド';
$string['override'] = 'オーバーライド';
$string['overridepeergrades'] = '相互評定をオーバーライドする';
$string['overridepeergrades_help'] = 'この設定を有効にした場合、教師は学生がピアにつけた評定を上書きできるようになります。';
$string['overridepeergradesby'] = '相互評定をオーバーライドする:';
$string['paweighting'] = '相互評定加重';
$string['paweighting_help'] = 'グループの総得点の何パーセントを相互評価すべきですか?';
$string['peergrades'] = '相互評定';
$string['peergradeshiddenfromstudents'] = '学生から秘匿する';
$string['peergradesvisibility'] = '相互評定可視性';
$string['peergradesvisibility_help'] = 'この設定では学生が相互評定を閲覧できるかどうかを決定します。

- 学生から秘匿する:  学生は相互評定を一切閲覧できません。
- 匿名で表示する: 学生には相互評定が表示されますが評定者のユーザ名は表示されません。
- ユーザ名で表示する: 学生には相互評定および評定者の氏名が表示されます。';
$string['peergradesvisibleanon'] = '匿名で表示する';
$string['peergradesvisibleuser'] = 'ユーザ名で表示する';
$string['peergradetotal'] = '合計: {$a}';
$string['peernameisyou'] = '{$a} (あなた)';
$string['peerratedyou'] = '{$a->name}: {$a->grade}';
$string['peers'] = 'あなたのピアを評定する';
$string['peersaid'] = '{$a}:';
$string['peersubmissionandgrades'] = 'ピア提出および評定';
$string['peerwork'] = '相互評価';
$string['peerwork:addinstance'] = 'ピアワーク活動を追加する';
$string['peerwork:grade'] = '課題評定および相互評定';
$string['peerwork:view'] = '相互評価コンテンツを表示する';
$string['peerworkcalculatorpluginname'] = '計算機プラグイン';
$string['peerworkfieldset'] = '相互評価設定';
$string['peerworkname'] = '相互評価';
$string['peerworkname_help'] = '<strong>説明</strong>
<br />
あなたは説明フィールドに相互評価のインストラクションを追加できます。私たちは課題のすべての詳細 (単語数、ファイル数、受け入れられるファイルタイプ) およびあなたの相互評定クライテリアに関するガイダンス (範囲および何を見るべきかの説明) を含めることをお勧めします。評価ガイドラインを参照するモジュールハンドブックへのリンクも追加できます。また、私たちは学生がグループタスクの提出に問題がある場合に利用できるサポートに関する情報を含めることもお勧めします。';
$string['penalty'] = 'ペナルティ';
$string['pleaseexplainoverride'] = 'この相互評定をオーバーライドする理由を入力してください。';
$string['pleaseproviderating'] = 'あなたのピアの評価を入力してください。';
$string['pluginadministration'] = '相互評価管理';
$string['pluginname'] = 'ピアワーク';
$string['privacy:metadata:core_files'] = 'プラグインは提出およびフィードバックファイルを保存します。';
$string['privacy:metadata:grades'] = '教育者が計算および付与した評定に関する情報';
$string['privacy:metadata:grades:grade'] = '学生に付与された評定';
$string['privacy:metadata:grades:prelimgrade'] = '加重およびペナルティ適用する前にWebPAが算出した評定';
$string['privacy:metadata:grades:revisedgrade'] = '評定が付与されている場合、その評定に優先する改訂版評定';
$string['privacy:metadata:grades:userid'] = '根拠を提供したユーザのID';
$string['privacy:metadata:justification'] = 'ピアに付与した評定に対する学生の根拠';
$string['privacy:metadata:justification:gradedby'] = '根拠を提供したユーザのID';
$string['privacy:metadata:justification:gradefor'] = '評定を取得したユーザのID';
$string['privacy:metadata:justification:justification'] = '根拠';
$string['privacy:metadata:peers'] = '付与された相互評定およびフィードバックに関する情報';
$string['privacy:metadata:peers:comments'] = '評定をオーバーライドしたユーザによる評定に対するコメント';
$string['privacy:metadata:peers:feedback'] = 'グループピアからグループメンバに付与されるフィードバック';
$string['privacy:metadata:peers:grade'] = 'グループピアからグループメンバに付与される最終評定';
$string['privacy:metadata:peers:gradedby'] = 'ピアを評定したユーザのID';
$string['privacy:metadata:peers:gradefor'] = 'ピアにより評定されたユーザのID';
$string['privacy:metadata:peers:overriddenby'] = '付与されたオリジナルの相互評定をオーバーライドしたユーザ';
$string['privacy:metadata:peers:peergrade'] = 'グループピアからグループメンバに付与されたオリジナルの評定';
$string['privacy:metadata:peers:timecreated'] = '評定が送信された日時';
$string['privacy:metadata:peers:timemodified'] = '評定が更新された日時';
$string['privacy:metadata:peers:timeoverridden'] = '相互評定がオーバーライドされた日時';
$string['privacy:metadata:submission'] = 'グループ提出に関する情報';
$string['privacy:metadata:submission:feedbacktext'] = '評定者がグループに付与したフィードバック';
$string['privacy:metadata:submission:grade'] = '評定者がグループ提出に付与した評定';
$string['privacy:metadata:submission:gradedby'] = '提出を評定したユーザのID';
$string['privacy:metadata:submission:groupid'] = 'この提出の提出元グループのID';
$string['privacy:metadata:submission:paweighting'] = '評定者がこの提出に使用したWebPA加重';
$string['privacy:metadata:submission:released'] = '評定がリリースされた日時';
$string['privacy:metadata:submission:releasedby'] = '評定をリリースしたユーザのID';
$string['privacy:metadata:submission:timecreated'] = '提出が送信された日時';
$string['privacy:metadata:submission:timegraded'] = '提出が評定された日時';
$string['privacy:metadata:submission:timemodified'] = '提出が修正された場合、提出が修正された日時';
$string['privacy:metadata:submission:userid'] = '提出を作成したユーザのID';
$string['privacy:path:grade'] = '評定';
$string['privacy:path:peergrades'] = '相互評定';
$string['privacy:path:submission'] = '提出';
$string['provideajustification'] = '根拠を説明してください。';
$string['provideminimumonecriterion'] = '少なくとも1つのクライテリアを提供してください。';
$string['ratingnforuser'] = '{$a->user} の評定「 {$a->rating} 」';
$string['recalculategrades'] = '評定を再計算する';
$string['recalculategrades_help'] = '評定がリリースされました。あなたがすべての評定の再計算を受け入れる場合のみ計算機を変更できます。';
$string['releaseallgradesforallgroups'] = 'すべてのグループのすべての評定をリリースする';
$string['releasedby'] = 'リリース担当者:';
$string['releasedbyon'] = '評定リリース by {$a->name} - {$a->date}';
$string['releasedon'] = 'リリース日時:';
$string['releasegrades'] = '評定をリリースする';
$string['requirejustification'] = '根拠を必要とする';
$string['requirejustification_help'] = '- 無効: 学生は各ピアの評定の根拠に関するコメントを追加する必要はありません。
- 学生から秘匿する: 学生が残したコメントは教師にのみ公開されます。他のピアには公開されません。
- 匿名で表示する: 学生が残したコメントはピアに表示されますがコメントを残した人の身元は秘匿されます。
- ユーザ名で表示する: 学生が残したコメントはフィードバックを残した人の身元とともにピアに公開されます。';
$string['revisedgrade'] = '改定版評定';
$string['revisedgrade_help'] = '必要な場合、最終加重評定を上書きするためにこのフィールドを使用してください。しかし、評定が上書きされた場合、または評定表でロックされた場合、編集はできません。';
$string['search:activity'] = 'ピアワーク - 活動情報';
$string['selfgrading'] = '学生がピアに加えて自己評定もできるようにする';
$string['selfgrading_help'] = 'この設定有効にした場合、学生はグループの他のメンバとともに自分自身に相互評定およびフィードバックを付与できます。この評定は自分およびグループ全体の相互評定平均にカウントされます。';
$string['setup.maxfiles'] = '最大アップロードファイル数';
$string['setup.maxfiles_help'] = 'グループが提出用にアップロードできるファイルの最大数です。ゼロに設定した場合、ファイルアップロード機能は完全に取り除かれます。';
$string['studentcalculatedgrade'] = '学生による計算評定';
$string['studentcontribution'] = '学生貢献度';
$string['studentfinalgrade'] = '学生の最終評定';
$string['studentfinalweightedgrade'] = '学生の最終加重評定';
$string['studentondate'] = '{$a->fullname} - {$a->date}';
$string['studentrevisedgrade'] = '学生による修正評定';
$string['submission'] = '提出';
$string['submission_help'] = 'グループから提出されたファイルです。<strong>注意:</strong> ファイルの最大数は相互評価設定で調整できます。';
$string['submissiongrading'] = 'ファイル提出';
$string['submissiongrading_help'] = 'グループから提出されたファイルです。<strong>注意:</strong> ファイルの最大数は相互評価設定で調整できます。';
$string['submissionstatus'] = '提出ステータス';
$string['subplugintype_peerworkcalculator'] = '評定計算方法';
$string['subplugintype_peerworkcalculator_plural'] = '評定計算方法';
$string['tasknodifystudents'] = '学生に通知する';
$string['teacherfeedback'] = '評定フィードバック';
$string['teacherfeedback_help'] = 'これは評定者によるフィードバックです。';
$string['thesestudentspastduedate'] = '提出期限を過ぎて提出した学生: {$a}';
$string['timeremaining'] = '残り時間';
$string['timeremainingcolon'] = '残り時間: {$a}';
$string['tutorgrading'] = 'チュータ評定';
$string['userswhodidnotsubmitafter'] = '未提出のユーザ: {$a}';
$string['userswhodidnotsubmitbefore'] = 'まだ提出が必要なユーザ: {$a}';
$string['youbelongtomorethanonegroup'] = 'あなたは2つ以上のグループに属しています。現在、これはサポートされていません。';
$string['youdonotbelongtoanygroup'] = 'あなたはどのグループにも属していません。';
$string['youwereawardedthesepeergrades'] = 'このクライテリアに関して、あなたはピアから次の評定を取得しました。';
