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
 * Strings for component 'collabwordcloud', language 'ja', version '4.4'.
 *
 * @package     collabwordcloud
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'アクセスが拒否されました。';
$string['activity_will_be_reseted'] = '警告: ワードの最大長または必須ワード数が変更された場合、活動はリセットされます。すべてのデータは失われます。';
$string['activityclosed'] = 'ワードクラウドは {$a} に終了しました。ありがとうございます。';
$string['activitynotfound'] = '活動が見つかりませんでした。';
$string['activitynotopenned'] = '活動が開始されていません。';
$string['activitynotstarted'] = 'このワードクラウドは {$a} 前には利用できません。';
$string['add'] = '追加';
$string['addword'] = 'ワードを追加する';
$string['allowsubmitionfrom'] = '投稿開始';
$string['allowsubmitionupto'] = '投稿終了';
$string['canceledit'] = 'ワード編集をキャンセルする';
$string['collabwordcloud:addinstance'] = 'ワードクラウドインスタンスを追加する';
$string['collabwordcloud:manageword'] = 'ワードクラウドのワードを管理する';
$string['collabwordcloud:submitword'] = 'ワードクラウドにワードを投稿する';
$string['completionwords'] = '学生はワードを投稿する必要がある';
$string['completionwordsgroup'] = '投稿必須ワード';
$string['csv_date'] = '日付';
$string['csv_user'] = 'ユーザ';
$string['csv_word'] = 'ワード';
$string['description'] = '説明';
$string['empty_wordcloud'] = 'このワードクラウドは空です。';
$string['exportdata'] = 'データをエクスポートする';
$string['exporttoimage'] = 'イメージにエクスポートする';
$string['group'] = 'グループ';
$string['instructions'] = 'インストラクション';
$string['maxwordrequired_bigger_than_allowed'] = '必須ワード数が許可されるワード数より少なすぎます。';
$string['maxwordrequired_tomany'] = '必須ワード数が多すぎます。';
$string['maxwordrequired_undefined'] = '必須ワード数';
$string['maxwordsallowed'] = '最大許容ワード数';
$string['maxwordsallowed_tomany'] = '必須ワード数が多すぎます。';
$string['maxwordsallowed_undefined'] = '必須ワード数';
$string['maxwordsallowedsetting'] = '活動が学生に要求できる最大ワード数を制限するためのグローバル設定です。';
$string['missingparams'] = 'パラメータが不足しています。';
$string['missingword'] = 'このワードはありません。';
$string['modulename'] = 'ワードクラウド';
$string['modulename_help'] = 'ここではユーザが共同ワードクラウドを作成できるワードクラウドモジュールです。以下、いくつかの機能が含まれます:

* 学生のワード数の最小値および最大値を設定できます。
* ワードは適切なケイパビリティを持つユーザにより編集および削除できます。
* ワードクラウドのビジュアルは.pngファイルとしてエクスポートできます。
* ワードクラウドデータは.csvファイルとしてエクスポートできます。
* ユーザグループをサポートします: それぞれのグループは独自のワードクラウドを持てます。
* クラウドはリアルタイムで更新されます。';
$string['modulenameplural'] = 'ワードクラウド';
$string['multi_submition'] = '{$a} 学生が自分のワードを投稿する';
$string['name'] = 'ワードクラウド活動名';
$string['newwordisthesame'] = '新しいワードが古いワードと同じであるため、私たちはワード名を変更できません。';
$string['nosubmition'] = 'ワードを追加した学生はいません。';
$string['noworddeleted'] = '削除されたワードはありません。';
$string['nwordsdeleted'] = '{$a} ワードが削除されました。';
$string['oldwordnotfound'] = '古いワードが見つかりませんでした。';
$string['onesubmition'] = '{$a} 学生が自分のワードを投稿する';
$string['oneworddeleted'] = '1 ワードが削除されました。';
$string['pluginadministration'] = 'ワードクラウド管理';
$string['pluginconfig'] = 'ワードクラウド設定';
$string['pluginname'] = 'ワードクラウド';
$string['privacy:metadata:wordcloud_words'] = 'ユーザが入力したワードに関する情報です。';
$string['privacy:metadata:wordcloud_words:groupid'] = 'グループID';
$string['privacy:metadata:wordcloud_words:timecreated'] = 'レコードの作成日時です。';
$string['privacy:metadata:wordcloud_words:timemodified'] = 'レコードの最終更新日時です。';
$string['privacy:metadata:wordcloud_words:userid'] = 'ユーザID';
$string['privacy:metadata:wordcloud_words:word'] = 'ユーザにより投稿されたワードです。';
$string['removeword'] = 'ワードを削除する';
$string['resetsubmissions'] = 'すべてのワードクラウド投稿をリセットする';
$string['resetsubmissions_help'] = 'これはこのコースのすべてのワードクラウドに投稿されたすべての単語を削除します。';
$string['send'] = '投稿';
$string['student_can_submit_from'] = '学生は {$a} 以降投稿できるようになります。';
$string['student_can_submit_upto'] = '学生は {$a} 以降投稿できないようになります。';
$string['student_cant_submit_since'] = '学生は {$a} 以降投稿できません。';
$string['submitions_wont_be_altered'] = 'すでに投稿されたワードは変更されません。';
$string['submitword_submit'] = '私のワードを投稿する';
$string['timeend_before_start'] = '投稿終了日は開始日の前にできません。';
$string['updateaword'] = 'ワードを更新する';
$string['updateword'] = 'ワードを更新する';
$string['viewactivitynotallowed'] = 'あなたはこの活動を閲覧できません!';
$string['word'] = 'ワード';
$string['word1isnotvalid'] = 'ワードが有効ではありません。';
$string['word_already_used'] = 'このワードはすでに使用されています!';
$string['word_nb'] = 'ワード n°';
$string['wordadded'] = 'ワードが正常に追加されました。';
$string['wordalreadyexist'] = 'あなたはすでにこのワードを追加しています。';
$string['wordcloud:addinstance'] = '新しいワードクラウドインスタンスを追加する';
$string['wordcloud:manageword'] = 'ワードクラウドのワードを管理する';
$string['wordcloud:submitword'] = 'ワードクラウドにワードを投稿する';
$string['wordistoolong'] = 'ワードが長すぎます。';
$string['wordmaxlenght'] = 'ワード最大長';
$string['wordmaxlenght_tolong'] = 'ワード最大長が長すぎます。';
$string['wordmaxlenght_undefined'] = 'ワード最大長は必須です。';
$string['wordmaxlenghtsetting'] = 'ワード長のグローバル制限';
$string['wordnotfound'] = 'ワードが見つかりませんでした。';
$string['wordrequired'] = '必須ワード数';
$string['wordupdated'] = 'ワードが更新されました。';
$string['wordusers'] = 'このワードを追加したユーザ:';
$string['wordweight'] = '単語加重';
