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
 * Strings for component 'subcourse', language 'ja', version '4.4'.
 *
 * @package     subcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['blankwindow'] = '新しいウィンドウに開く';
$string['blankwindow_help'] = 'この設定を有効にした場合、リンクは新しいブラウザウィンドウに参照コースを開きます。';
$string['completioncourse'] = 'コース完了を必要とする';
$string['completioncourse_help'] = 'この設定を有効にした場合、学生が参照コースを完了した時点で活動を完了とみなします。';
$string['completioncourse_text'] = 'この活動を完了するには学生が参照コースを完了する必要があります。';
$string['currentgrade'] = '現在の評点: {$a}';
$string['currentprogress'] = '進捗度：{$a}%';
$string['errfetch'] = '評点を取得できません: エラーコード {$a}';
$string['errlocalremotescale'] = '評点を取得できません: リモート最終評定アイテムがローカル尺度を使用しています。';
$string['eventgradesfetched'] = '評点が取得されました。';
$string['fetchgradesmode'] = '評点取得方法';
$string['fetchgradesmode0'] = '実値';
$string['fetchgradesmode1'] = 'パーセンテージ値';
$string['fetchgradesmode_help'] = '参照コースの評定表のセットアップにより、コースの最終評定の実値およびパーセンテージ値がこのサブコース活動に表示される値と常に合致するわけではありません。この設定はどの値と合致させるか決定します。

* 実値 - 参照コースの最終評点がこのサブコースの活動評点として取得されます。参照コースに除外される評点がある場合、参照コースで計算されるパーセンテージ最終評点はサブコース活動内のパーセンテージと合致しません。
* パーセンテージ値 - 参照コースで表示されるパーセンテージがこのサブコース活動で表示される参照コース内のパーセンテージと合致するよう取得される参照コースの最終評点が再計算されます。参照コースに除外される評点がある場合、実際の実評点値は合致しません。';
$string['fetchnow'] = '評定を取得する';
$string['gotocoursename'] = 'コース<a href="{$a->href}">{$a->name}</a>に移動する';
$string['gotorefcourse'] = '{$a} に移動する';
$string['gotorefcoursegrader'] = '{$a} のすべての評点';
$string['gotorefcoursemygrades'] = '{$a} の私の評点';
$string['gradesfetching'] = '評点取得';
$string['hiddencourse'] = '*非表示*';
$string['instantredirect'] = '参照コースにリダイレクトする';
$string['instantredirect_help'] = 'この設定を有効にした場合、サブコースモジュール閲覧時にユーザは参照コースにリダイレクトされます。評定を手動取得するためのパーミッションがあるユーザには影響しません。';
$string['lastfetchnever'] = '評点はまだ取得されていません。';
$string['lastfetchtime'] = '最終取得日時: ($a)';
$string['linkcontrol'] = 'サブコース活動リンク';
$string['modulename'] = 'サブコース';
$string['modulename_help'] = 'このモジュールは非常にシンプルで有用な機能を提供します。コースに追加した場合、評定済み活動のように動作します。それぞれの学生の評点は別のコースの最終評点から取得されます。
メタコースと結合した場合、分離したユニットにコースデザイナがコースを配置できるようになります。';
$string['modulenameplural'] = 'サブコース';
$string['nocoursesavailable'] = 'あなたが評点を取得できるコースはありません。';
$string['nosubcourses'] = 'このコースにサブコースはありません。';
$string['pluginadministration'] = 'サブコース管理';
$string['pluginname'] = 'サブコース';
$string['privacy:metadata'] = 'サブコースはいかなる個人データも保持しません。';
$string['refcourse'] = '参照コース';
$string['refcourse_help'] = '参照コースは活動の評定の取得先のコースです。学生は参照コースに登録される必要があります。

ここで参照コースを一覧表示するにはあなたがコースの教師である必要があります。この活動がほか他のコースから評定を取得できるようセットアップするにはあなたのサイト管理者に依頼する必要があります。';
$string['refcoursecurrent'] = '現在の参照を保持する';
$string['refcourselabel'] = '評定取得先';
$string['refcoursenull'] = '設定された参照コースはありません。';
$string['subcourse:addinstance'] = '新しいサブコースを追加する';
$string['subcourse:begraded'] = '参照コースから評点を取得する';
$string['subcourse:fetchgrades'] = '参照コースから手動で評点を取得する';
$string['subcourse:view'] = 'サブコース活動を表示する';
$string['subcoursename'] = 'サブコース名';
$string['taskcheckcompletedrefcourses'] = '参照コース完了を確認する';
$string['taskfetchgrades'] = 'サブコース評点を取得する';
