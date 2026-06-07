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
 * Strings for component 'quizaccess_quiztimer', language 'ja', version '4.4'.
 *
 * @package     quizaccess_quiztimer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canteditquiztimes'] = 'この小テストはすでに解答済みであるため、あなたは問題時間を編集できません。({$a})';
$string['canteditquiztype'] = 'この小テストはすでに解答済みであるため、あなたは小テスト時間タイプを編集できません。';
$string['configsavedpage'] = '設定が正常に保存されました。<br> <b>忘れずにページ時間を変更してください。</b>';
$string['configsavedquestion'] = '設定が正常に保存されました。<br> <b>忘れずに問題時間を変更してください。</b>';
$string['configsavedsection'] = '設定が正常に保存されました。<br> <b>忘れずにセクション時間を変更してください。</b>';
$string['disabledbycustomtimer'] = 'タイミングセクションでカスタムタイマーが選択されたため固定されています。';
$string['distributesectiontime'] = 'セクション時間をページに割り当てる';
$string['eventsectiontimerupdated'] = 'セクションタイマーが更新されました。';
$string['eventsectiontimerupdateddescription'] = 'ID {$a->userid} のユーザがID {$a->section} のセクションタイマーを新しい時間 {$a->timevalue} {$a->timeunit}で更新しました。';
$string['eventslottimerupdated'] = 'スロットタイマーが更新されました。';
$string['eventslottimerupdateddescription'] = 'ID {$a->userid} のユーザがID {$a->slot} のスロットタイマーを新しい時間 {$a->timevalue} {$a->timeunit}で更新しました。';
$string['hours'] = '時間';
$string['invalidsettedtime'] = '入力された時間が無効です。以前の値にリセットされました。';
$string['minutes'] = '分';
$string['pagetime'] = 'ページ時間';
$string['pagingchangesnotapply'] = 'この小テストではスロットまたはセクション時間でカスタムタイマーが選択されています。そのため、問題の改ページ調整に変更を加えても変更は適用されずに上書きされてしまいます。';
$string['pluginname'] = '小テストタイマーアクセスルール';
$string['privacy:metadata:attempt'] = 'タイミングデータに関連する受験回数です。';
$string['privacy:metadata:quiz'] = 'このタイマー設定が属する小テストです。';
$string['privacy:metadata:quiz_mode'] = '小テストで使用されるタイマーモードです。';
$string['privacy:metadata:quizaccess_quiztimer'] = '小テストタイマーの設定データです。';
$string['privacy:metadata:quizaccess_usertimedsections'] = 'セクションごとのユーザタイミングデータです。';
$string['privacy:metadata:quizaccess_usertimedslots'] = '問題ごとのユーザタイミングデータです。';
$string['privacy:metadata:quizid'] = 'ユーザタイマーデータに関連する小テストです。';
$string['privacy:metadata:section'] = 'タイミングデータが参照する小テストセクションです。';
$string['privacy:metadata:slot'] = 'タイミングデータが参照するスロット (問題ポジション) です。';
$string['privacy:metadata:timecreated'] = 'タイマー設定が作成された日時です。';
$string['privacy:metadata:timefinish'] = 'このスロットまたはセクションに記録された終了時間です。';
$string['privacy:metadata:timemodified'] = 'タイマー設定が最後に修正された日時です。';
$string['privacy:metadata:timestart'] = 'このスロットまたはセクションに記録された開始時間です。';
$string['privacy:metadata:userid'] = '記録されたタイミングデータのユーザのIDです。';
$string['privacy:metadata:usermodified'] = 'タイマー設定を修正したユーザのIDです。';
$string['questiontime'] = '問題時間';
$string['quizquiztimer'] = '小テストタイマー';
$string['quiztime'] = '問題時間を調整する';
$string['quiztimer'] = '小テストタイマーメッセージゾーン:';
$string['quiztimer:manage'] = '小テストタイマー時間設定を管理する';
$string['quiztimererrors'] = '小テスト実行を可能にするために注意が必要な小テストタイマー設定:';
$string['repaginatewarning'] = '問題またはセクションの編集タイプを選択した場合、小テストスロットが次のように再度ページ調整される場合があります:
- セクション時間: それぞれのセクションごとにすべての問題を1ページにまとめます。
- 問題時間: 1ページにつき1問題を設定します。
引き続き操作を続けてもよろしいですか?';
$string['requirequiztimermessage'] = 'この小テストは小テストおよびセクションのカスタム制限時間を使用します。';
$string['seconds'] = '秒';
$string['sectiontime'] = 'セクション時間';
$string['selecttypetimes'] = '使用するカスタム小テスト時間の時間タイプを選択する';
$string['setting:timedsections'] = 'セクションデフォルト時間';
$string['setting:timedsections_desc'] = '作成されたセクションに割り当てられるデフォルト時間です。';
$string['setting:timedslots'] = 'スロットデフォルト時間';
$string['setting:timedslots_desc'] = '作成されたスロットに割り当てられるデフォルト時間です。';
$string['submit'] = '送信';
$string['subtimes'] = '使用する制限時間';
$string['subtimes_help'] = 'ドロップダウンメニューには小テストのタイマーを設定するための3つのオプション (セクション、問題、合計) が用意されています。';
$string['timelimit'] = '制限時間';
$string['timelimitedit'] = '制限時間 (カスタム時間使用不可)';
$string['timeunit'] = '...';
$string['totalsectiontime'] = '合計セクション時間:';
$string['totaltime'] = '合計時間';
$string['unitsections'] = '使用するセクション単位';
$string['unitslots'] = '使用するスロット単位';
$string['warningtime'] = '設定された時間が無効です。';
