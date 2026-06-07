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
 * Strings for component 'report_benchmark', language 'ja', version '4.4'.
 *
 * @package     report_benchmark
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminreport'] = 'システムベンチマーク';
$string['benchfail'] = '<b>注意!</b><br />あなたのMoodleインストレーションのパフォーマンスは最適ではありません。';
$string['benchmark'] = 'ベンチマーク';
$string['benchmark:view'] = 'ベンチマークレポートを表示する';
$string['benchshare'] = '私のスコアをフォーラムで共有する';
$string['benchsuccess'] = '<b>おめでとうございます!</b><br />あなたのMoodleインストレーションのパフォーマンスは完璧です。';
$string['cloadmoreinfo'] = '「config.php」設定ファイルを読み込みます。';
$string['cloadname'] = 'Moodleロードタイム';
$string['coursereadmoreinfo'] = 'データベースの読み込み速度をチェックするため、コースを複数回読み込みます。';
$string['coursereadname'] = 'コース読み込みパフォーマンス';
$string['coursewritemoreinfo'] = 'データベースの書き込み速度をチェックするため、コースを複数回書き込みます。';
$string['coursewritename'] = 'コース書き込みパフォーマンス';
$string['description'] = '説明';
$string['duration'] = '{$a} 秒';
$string['during'] = '時間 (秒)';
$string['filereadmoreinfo'] = 'Moodle一時フォルダの読み込み速度をチェックするため、ファイルを複数回読み込みます。';
$string['filereadname'] = 'ファイル読み込みパフォーマンス';
$string['filewritemoreinfo'] = 'Moodle一時フォルダの書き込み速度をチェックするため、ファイルを複数回書き込みます。';
$string['filewritename'] = 'ファイル書き込みパフォーマンス';
$string['info'] = 'このベンチマークは1分程度実行された後、2分で終了します。結果が表示されるまでお待ちください。';
$string['infoaverage'] = '有意な平均値を取得するため、このベンチマークの複数回実施をお勧めします。あなたのインストレーションのパフォーマンスが最適ではない場合、<a href="https://docs.moodle.org/en/Performance_recommendations" target="_blank">Moodleドキュメンテーション</a>でパフォーマンス改善のための推奨設定を確認できます。';
$string['infodisclaimer'] = '結果として著しくパフォーマンスが低下してしまうため、このベンチマークを実運用サイトで実行しないでください。';
$string['infodisclamer'] = 'このベンチマークの実運用環境での実行はお勧めできません。';
$string['limit'] = '許容値';
$string['loginguestmoreinfo'] = 'ゲストアカウントログインページの読み込み時間をチェックします。';
$string['loginguestname'] = 'ゲストアカウントのログイン時間パフォーマンス';
$string['loginusermoreinfo'] = 'フェイクユーザアカウントログインページの読み込み時間をチェックします。';
$string['loginusername'] = 'フェイクユーザアカウントのログイン時間パフォーマンス';
$string['modulename'] = 'Moodleベンチマーク';
$string['modulenameplural'] = 'Moodleベンチマーク';
$string['over'] = '危険値';
$string['pluginname'] = 'Moodleベンチマーク';
$string['points'] = '{$a} 点';
$string['privacy:no_data_reason'] = 'レポートベンチマークプラグインは自体にデータを保存します。これは他のプラグインからのデータにアクセスするためのものです。';
$string['processormoreinfo'] = 'プロセッサ速度をチェックするため、ループするPHP関数をコールします。';
$string['processorname'] = 'プロセッサ処理速度';
$string['querytype1moreinfo'] = 'データベースのスピードをチェックするため、複雑なSQLクエリを実行します。';
$string['querytype1name'] = 'データベースパフォーマンス (#1)';
$string['querytype2moreinfo'] = 'データベースのスピードをチェックするため、複雑なSQLクエリを実行します。';
$string['querytype2name'] = 'データベースパフォーマンス (#2)';
$string['redo'] = '再度ベンチマークを開始する';
$string['score'] = 'スコア';
$string['scoremsg'] = 'ベンチマークスコア:';
$string['seconde'] = '{$a} 秒';
$string['slowdatabaselabel'] = 'データベースが遅すぎるようです。';
$string['slowdatabasesolution'] = '<ul>
<li><a href="https://mariadb.com/kb/en/library/mysqlcheck/" target="_blank">データベースの整合性</a>をチェックしてください。</li>
<li><a href="https://mariadb.com/kb/en/library/optimization-and-tuning/" target="_blank">データベース</a>を最適化してください。</li>
</ul>';
$string['slowharddrivelabel'] = 'ハードドライブが遅すぎるようです。';
$string['slowharddrivesolution'] = '<ul>
<li>ハードドライブおよび一時フォルダの状態を確認してください。</li>
<li>ハードドライブおよび一時フォルダを変更してください。</li>
</ul>';
$string['slowprocessorlabel'] = 'プロセッサが遅すぎるようです。';
$string['slowprocessorsolution'] = '<ul>
<li>あなたのハードウェア設定がMoodleの運用に必要十分であることを確認します。</li>
</ul>';
$string['slowserverlabel'] = 'ウェブサーバが遅すぎるようです。';
$string['slowserversolution'] = '<ul>
<li>あなたのApacheを<a href="https://httpd.apache.org/docs/2.4/en/mpm.html" target="_blank">マルチプロセッシング</a>モードにするか<a href="https://nginx.org/" target="_blank">NGinx</a>に切り替えてください。</li>
<li>あなたのコンピュータにMoodleがインストールされている場合、ウイルスチェックソフトがMoodleをチェックしないよう慎重に設定してください。</li>
</ul>';
$string['slowweblabel'] = 'ログインページの読み込みが遅すぎます。';
$string['slowwebsolution'] = '<ul><li><a href="{$a}" target="_blank">Moodleキャッシュを削除してください</a>。</li></ul>';
$string['start'] = 'ベンチマークを開始する';
$string['total'] = '合計時間';
