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
 * Strings for component 'tool_courserating', language 'ja', version '4.4'.
 *
 * @package     tool_courserating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrating'] = '評価をつける';
$string['allowreviews'] = '評価へのレビュー添付';
$string['allowreviewsconfig'] = '- テキストレビューを許可しない - ユーザは星評価のみ送信できます。
- 学生はレビューを投稿できますが他のレビューは閲覧できません - tool/courserating:reports 権限を持つユーザのみレビューを閲覧できます。
- 学生はレビューの投稿・閲覧が可能です - すべてのユーザが公開済みレビューを閲覧できます。';
$string['allowreviewshidden'] = '学生はレビューを投稿できますが、他のユーザのレビューは閲覧できません';
$string['allowreviewsno'] = 'テキストレビューを許可しない';
$string['allowreviewsvisible'] = '学生はレビューの投稿・閲覧が可能です';
$string['barwithrating'] = '星{$a->rating}つのレビューを表示する（全評価の {$a->percent}）';
$string['cannotrate'] = 'このコースに評価をつける権限がありません。';
$string['cannotview'] = 'このコースの評価を閲覧する権限がありません。';
$string['cfielddescription'] = '編集しないでください。このコースに評価がつけられるたびに自動的に内容が更新されます。';
$string['colorrating'] = '評価の色';
$string['colorratingconfig'] = '視覚的な効果を高めるため、通常は星の色より若干濃い色を設定します。';
$string['colorstar'] = '星の色';
$string['courserating:delete'] = 'コース評価・レビューを削除し、フラグ付きレビューを表示する';
$string['courserating:rate'] = 'コースを評価する';
$string['courserating:reports'] = 'コース評価レポートを表示する';
$string['coursereviews'] = 'コースレビュー';
$string['datasource_courseratings'] = 'コース評価';
$string['deleterating'] = '完全に削除する';
$string['deletereason'] = '削除理由';
$string['displayempty'] = '評価なしをグレーの星で表示する';
$string['displayemptyconfig'] = 'コース評価が有効でまだ評価がない場合にグレーの星を表示します。無効の場合、評価のないコースには星が表示されません。';
$string['editrating'] = '評価を編集する';
$string['entity_rating'] = 'ユーザによるコース評価';
$string['entity_summary'] = 'コース評価サマリー';
$string['event:flag_created'] = 'コース評価にフラグが立てられました。';
$string['event:flag_deleted'] = 'コース評価のフラグが取り消されました';
$string['event:rating_created'] = 'コース評価が作成されました。';
$string['event:rating_deleted'] = 'コース評価が削除されました。';
$string['event:rating_updated'] = 'コース評価が更新されました。';
$string['flagrating'] = 'フラグを立てる';
$string['parentcss'] = '親要素のCSSセレクタ';
$string['parentcssconfig'] = 'コース評価はこのセレクタに一致するDOM要素の最後の子としてコースページに表示されます。カスタムテーマを使用しており親要素を独自に指定したい場合は上書きしてください。空白のままにするとデフォルト値「#page-header」が使用されます。';
$string['percourseoverride'] = 'コース別オーバーライド';
$string['percourseoverrideconfig'] = '有効にすると、コースごとに評価タイミングを設定できるカスタムコースフィールドが作成されます。「コース評価タイミング」の設定値がデフォルトとして使用されます。';
$string['pluginname'] = 'コース評価';
$string['privacy:metadata:tool_courserating:reason'] = '理由';
$string['privacy:metadata:tool_courserating:reasoncode'] = '理由コード';
$string['privacy:metadata:tool_courserating:timecreated'] = '作成日時';
$string['privacy:metadata:tool_courserating:timemodified'] = '更新日時';
$string['privacy:metadata:tool_courserating_flag'] = 'フラグ付き評価';
$string['privacy:metadata:tool_courserating_flag:id'] = 'ID';
$string['privacy:metadata:tool_courserating_flag:ratingid'] = '評価ID';
$string['privacy:metadata:tool_courserating_flag:userid'] = 'ユーザID';
$string['privacy:metadata:tool_courserating_rating'] = 'コース評価';
$string['privacy:metadata:tool_courserating_rating:cohortid'] = 'コースID';
$string['privacy:metadata:tool_courserating_rating:hasreview'] = 'レビューあり';
$string['privacy:metadata:tool_courserating_rating:id'] = 'ID';
$string['privacy:metadata:tool_courserating_rating:rating'] = '評価';
$string['privacy:metadata:tool_courserating_rating:review'] = 'レビュー';
$string['privacy:metadata:tool_courserating_rating:timecreated'] = '作成日時';
$string['privacy:metadata:tool_courserating_rating:timemodified'] = '更新日時';
$string['privacy:metadata:tool_courserating_rating:userid'] = 'ユーザ';
$string['ratebyanybody'] = '\'学生はいつでもコースを評価できます';
$string['ratebycompleted'] = '学生はコース完了後のみ評価できます';
$string['ratebydefault'] = 'デフォルト値:「 {$a} 」';
$string['ratebynoone'] = 'コース評価は無効です';
$string['ratedcategory'] = 'コース評価を許可するカテゴリ';
$string['rating'] = '評価';
$string['rating_actions'] = '操作';
$string['rating_hasreview'] = 'レビューあり';
$string['rating_nofflags'] = 'フラグ数';
$string['rating_rating'] = 'コース評価';
$string['rating_review'] = 'レビュー';
$string['rating_timecreated'] = '作成日時';
$string['rating_timemodified'] = '更新日時';
$string['ratingasstars'] = '星でのコース評価';
$string['ratingdeleted'] = '評価が削除されました。';
$string['ratinglabel'] = 'コース評価';
$string['ratingmode'] = 'コース評価タイミング';
$string['ratingmodeconfig'] = 'コースを評価する権限も併せて確認されます。';
$string['reindextask'] = 'コース評価の再インデックス';
$string['review'] = 'レビュー (任意)';
$string['reviewsarehidden'] = '学生は平均評価のみ閲覧できます。テキストレビューは表示されません。';
$string['revokeratingflag'] = '取り消す';
$string['settingsdescription'] = '一部の設定を変更すると、すべてのコースおよびコース評価の再インデックスが必要になります。次回のcron実行時に自動的に処理されます。';
$string['showallratings'] = 'すべてを表示する';
$string['showallreviewsforrating'] = '星{$a}つのレビューを表示しています。';
$string['showmorereviews'] = 'さらに表示する';
$string['summary_avgrating'] = 'コース評価（平均）';
$string['summary_cnt01'] = '星1つの評価の割合';
$string['summary_cnt02'] = '星2つの評価の割合';
$string['summary_cnt03'] = '星3つの評価の割合';
$string['summary_cnt04'] = '星4つの評価の割合';
$string['summary_cnt05'] = '星5つの評価の割合';
$string['summary_cntall'] = '評価数';
$string['summary_cntreviews'] = 'レビュー数';
$string['summary_ratingmode'] = 'コース評価モード';
$string['summary_sumrating'] = '評価の合計';
$string['usehtml'] = 'レビューにリッチテキストエディタを使用する';
$string['usehtmlconfig'] = '学生がレビューでリッチテキストエディタを使用してリンクやファイル添付を含めることができるようにします。';
$string['usersflagged'] = '{$a} 人のユーザがこのレビューを不適切・不快としてフラグを立てています。';
$string['viewallratings'] = 'すべての評価を表示する';
$string['viewallreviews'] = 'すべてのレビューを表示する';
$string['youflagged'] = 'あなたはこのレビューを不適切・不快としてフラグを立てています。';
