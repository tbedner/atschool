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
 * Strings for component 'quizaccess_delayed', language 'ja', version '4.4'.
 *
 * @package     quizaccess_delayed
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['attemptquiz'] = '今から小テストを受験する';
$string['delayedattemptlock'] = '小テストの段階的開始';
$string['delayedattemptlock_help'] = 'この設定を有効にした場合、小テスト開始日の小テストページ読み込み前に一時的に受験開始ボタンが無効にされます。カウントダウン期間が開始します (あなたの組織で設定された時間をもとにランダムに)。カウントダウンが終了した時点で受験開始ボタンが再度有効にされて学生が小テスト受験を開始できます。';
$string['explaindelayedattempt'] = 'ランダムアクセス遅延を設定します。';
$string['flipdowncounter'] = 'アニメーションカードカウンタ';
$string['noscriptwarning'] = 'この小テストにはJavaScriptが有効にされたブラウザが必要です。あなたがJavaScriptブロッカを有効にしている場合、無効にしてください。';
$string['plaintextcounter'] = 'プレインテキストカウンタ';
$string['pleasewait'] = 'ここでお待ちください。';
$string['pluginname'] = '小テスト受験開始ランダム遅延 - 小テストアクセスルール';
$string['pluginname_desc'] = '小テスト受験ボタンをランダム遅延アクセスルールで自動的に有効にします。';
$string['quizaccess_delayed_allowdisable'] = '教師はルールを無効にできる';
$string['quizaccess_delayed_countertype'] = '使用するカウントダウンタイプ';
$string['quizaccess_delayed_dangerousquiznotice'] = '小テストにトラブルが発生する可能性がある場合に表示される組織の遅延メッセージ';
$string['quizaccess_delayed_dangerousquiznotice_desc'] = 'プラグインがパラメータに問題があると判断した場合、小テストの設定中、このメッセージが教師に表示されます。小テストのトラブルを減らすため、ここはマニュアルへのリンクまたは小テスト作成のインストラクションを設置するために良い場所です。';
$string['quizaccess_delayed_enabled'] = '遅延受験を有効にする';
$string['quizaccess_delayed_enabledbydefault'] = '新しい小テストはデフォルトでこのルールを使用する';
$string['quizaccess_delayed_maxdelay'] = '最大遅延 (分)';
$string['quizaccess_delayed_notice'] = '学生に通知する';
$string['quizaccess_delayed_notice_desc'] = 'このテキストは教師が使用する活動の説明に加えてすべての学生に表示されます。通常、小テストの利用方法に関するインストラクション等、組織のメッセージを表示するよう設計されています。';
$string['quizaccess_delayed_showdangerousquiznotice'] = '小テストがリソースに負荷をかけている場合、教師に警告を表示する';
$string['quizaccess_delayed_startrate'] = '受験開始率 (1分あたりの学生数)';
$string['quizaccess_delayed_teachernotice'] = 'この小テストは段階的な受験開始コントロールを使用します。これにより最大 {$a} 分の遅延で学生はランダムに受験を開始できます。';
$string['quizaccess_delayed_teachernotice2'] = '教師のメッセージ: あなたの学生には待ち時間中に次のメッセージが表示されます:';
$string['quizaccess_delayed_timelimitpercent'] = '完了時間の最大遅延 (パーセンテージ)';
$string['quizwillstartinabout'] = 'あなたの小テスト受験は次の時間内に開始します:';
$string['quizwillstartinless'] = 'あなたの小テスト受験は次の時間内に開始します: 1分';
$string['tooshortpagesadvice'] = '{$a->pages} ページに問題がありますが1ページあたりの問題数が少なすぎます。これによりサーバの負荷が大幅に増大します。それぞれのページへの時間割り当てを増やしてください (例 問題数を増やす)。';
$string['tooshorttimeguardadvice'] = '利用可能な時間 {$a->timespanstr} が詰まりすぎています。一部の学生は最大 {$a->maxdelaystr} 遅延します。学生の小テスト受験には {$a->timelimitstr} あるため、小テストの開始には他の遅延のためにも猶予時間の設定をお勧めします。';
