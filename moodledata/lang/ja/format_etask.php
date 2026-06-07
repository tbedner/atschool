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
 * Strings for component 'format_etask', language 'ja', version '4.4'.
 *
 * @package     format_etask
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['choose'] = '選択 ...';
$string['currentsection'] = '現在のセクション';
$string['failedlabel'] = '失敗ラベル';
$string['failedlabel_help'] = 'この設定では失敗ラベルのデフォルトテキストをオーバーライドします。';
$string['gradeitemcompleted'] = '完了';
$string['gradeitemfailed'] = '失敗';
$string['gradeitempassed'] = '合格';
$string['gradeitemprogressbars'] = '評定項目進捗バー';
$string['gradeitemprogressbars_help'] = 'この設定では評定表で学生に評点項目進捗バーを表示するかどうか決定します。';
$string['gradeitemprogressbars_no'] = '評定表で学生の評定項目進捗バーを秘匿する';
$string['gradeitemprogressbars_yes'] = '評定表で学生の評定項目進捗バーを表示する';
$string['gradeitemssorting'] = '評定項目並べ替え';
$string['gradeitemssorting_help'] = 'この設定では評定表の評点項目が最新のもの、最も古いものまたはコースにあるものから並べ替えられるかどうか決定します。';
$string['gradeitemssorting_inherit'] = '評定表の評定項目をコースと同じように並べ替える';
$string['gradeitemssorting_latest'] = '評定表の評定項目を新しい順に並べ替える';
$string['gradeitemssorting_oldest'] = '評定表の評定項目を古い順に並べ替える';
$string['gradepasschanged'] = '評定項目「 {$a->itemname} 」の合格点が正常に「 {$a->gradepass} 」に変更されました。';
$string['gradepasserrdatabase'] = '評定項目「 {$a} 」の合格点を変更できません。後でもう一度試すか、プラグイン開発者にご連絡ください。';
$string['gradepasserrgrademax'] = '評定項目「 {$a->itemname} 」の合格点を「 {$a->gradepass} 」に変更できません。値が最大評点より大きく設定されています。';
$string['gradepasserrgrademin'] = '評定項目「 {$a->itemname} 」の合格点を「 {$a->gradepass} 」に変更できません。値が最小評点より小さく設定されています。';
$string['gradepasserrnumeric'] = '評定項目「 {$a->itemname} 」の合格点を「 {$a->gradepass} 」に変更できません。あなたはここに数字を入力する必要があります。';
$string['gradepassremoved'] = '評定項目「 {$a} 」の合格点が正常に削除されました。';
$string['helpabout'] = 'eTaskトピックフォーマットはフォーマットを拡張して活動およびその快適な評定を管理する最短の方法を提供します。分かりやすさに加え、素晴らしい学習体験をサポートするやる気および競争心のある環境を作り出します。';
$string['helpimprovebody'] = 'このプラグインの改善にご協力ください! フィードバックを書いたり、問題を報告したり、<a href="https://moodle.org/plugins/format_etask" target="_blank">プラグインページ</a>で利用可能なアンケートにお答えください。';
$string['helpimprovehead'] = 'プラグイン改善';
$string['hidefromothers'] = '秘匿';
$string['indentation'] = 'コースページでインデントを許可する';
$string['indentation_help'] = '教師および活動管理ケイパビリティのあるその他のユーザにコースページ上でのアイテムのインデントを許可します。';
$string['legacysectionname'] = 'トピック';
$string['max'] = '最大';
$string['newsection'] = '新しいセクション';
$string['nogradeitemsfound'] = '評定項目は見つかりませんでした。';
$string['nostudentsfound'] = '評定する学生は見つかりませんでした。';
$string['page-course-view-topics'] = 'eTaskフォーマットすべてのコースのメインページ';
$string['page-course-view-topics-x'] = 'eTaskフォーマットすべてのコースページ';
$string['passedlabel'] = '合格ラベル';
$string['passedlabel_help'] = 'この設定では合格ラベルのデフォルトテキストをオーバーライドします。';
$string['placement'] = '配置';
$string['placement_above'] = '評定表をコースセクションの上に配置する';
$string['placement_below'] = '評定表をコースセクションの下に配置する';
$string['placement_help'] = 'この設定では評定表の配置をコースセクションの上または下に決定します。';
$string['plugin_description'] = '評定表をカスタマイズ可能なセクションに分割してコースの一部として表示します。';
$string['pluginname'] = 'eTaskフォーマット';
$string['privacy:metadata'] = 'eTaskフォーマットプラグインはいかなる個人データも保存しません。';
$string['progresspercentage'] = '<span class="text-black-50">すべての学生の</span> {$a} %';
$string['registeredduedatemodules'] = 'モジュール期限日登録';
$string['registeredduedatemodules_help'] = 'どのモジュールデータベースフィールドに期限日の値が保存されるか指定してください。';
$string['section0name'] = '一般';
$string['section_highlight_feedback'] = 'セクション {$a->name} がハイライトされました。';
$string['section_unhighlight_feedback'] = 'セクション {$a->name} からハイライトを削除しました。';
$string['sectionname'] = 'セクション';
$string['showfromothers'] = '表示';
$string['showmore'] = 'さらに表示する ...';
$string['studentprivacy'] = '学生プライバシー';
$string['studentprivacy_help'] = 'この設定では学生が評定表で他の学生の評定を閲覧できるかどうか決定します。';
$string['studentprivacy_no'] = '学生は評定表で他の学生の評定を閲覧できる';
$string['studentprivacy_yes'] = '学生は評定表で自分の評定のみ閲覧できる';
$string['studentsperpage'] = 'ページあたりの学生数';
$string['studentsperpage_help'] = 'この設定では評定表のデフォルト値である1ページあたり10名の学生をオーバーライドします。';
$string['timemodified'] = '最終更新: {$a}';
