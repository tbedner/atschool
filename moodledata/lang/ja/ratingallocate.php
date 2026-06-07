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
 * Strings for component 'ratingallocate', language 'ja', version '4.4'.
 *
 * @package     ratingallocate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['rating_begintime'] = '評価開始日時';
$string['rating_endtime'] = '評価終了日時';
$string['rating_is_over'] = '評価期間は終了しました。';
$string['ratings_saved'] = 'あなたの評価は保存されました。';
$string['ratings_table'] = '評価と割り当て';
$string['ratings_table_sum_allocations'] = '割り当て人数/最大受け入れ人数';
$string['ratings_table_sum_allocations_value'] = '{$a->sum} / {$a->max}';
$string['ratings_table_user'] = '利用者';
$string['reports_group'] = 'レポート';
$string['results_not_yet_published'] = '結果はまだ公開されていません。';
$string['runalgorithmbycron'] = '評価期間後に自動的に割り当てを行う';
$string['runalgorithmbycron_help'] = '評価期間後に自動的に割り当てアルゴリズムを実行します。実行結果は手動で公開する必要があります。';
$string['saveandnext'] = '保存して新しい選択肢を追加';
$string['select_strategy'] = '評価方法';
$string['select_strategy_help'] = '評価方法を選んでください。
* **Yes-No** "Yes"か"No"のいずれかで選択肢を評価します。
* **Yes-Maybe-No** "Yes", "Maybe", "No"の3段階で選択肢を評価します。
* **リッカート尺度** 設定された範囲の整数値のいずれかで選択肢を評価します。整数値の範囲は0から指定された値までです。大きな値ほど、その選択肢を希望する度合いが高いことを意味します。
* **得点配分** 設定された総得点を選択肢に配分することで評価します。配分された得点が高いほど、その選択肢を希望する度合いが高いことを意味します。
* **順位付け** 選択肢に順位付けを行います。順位を付ける必要のある数は個別に設定可能です。
* **許容**  割り当てを許容できる選択肢にチェックを付けることができます。';
$string['show_allocation_statistics'] = '割り当て結果の統計を表示';
$string['show_choices_header'] = '選択肢の一覧';
$string['show_table'] = '評価と割り当て結果を表示';
$string['start_distribution'] = '割り当てアルゴリズムを実行';
$string['start_distribution_explanation'] = 'このアルゴリズムは、参加者の評価に基づいてできるだけ公平となるよう自動的に割り当てを実行します。';
$string['strategy_lickert_max_no'] = '0点を与えることができる選択肢の数は {$a} 個までです。';
$string['strategy_lickert_name'] = 'リッカート尺度';
$string['strategy_lickert_rating_biggestwish'] = '{$a} - 最も望ましい';
$string['strategy_lickert_rating_exclude'] = '{$a} - 除外';
$string['strategy_lickert_setting_maxlickert'] = 'リッカート尺度の最大値 (3,5,7がよく用いられる)';
$string['strategy_lickert_setting_maxno'] = '0点を与えることができる選択肢の最大数';
$string['strategy_not_specified'] = '評価方法を選択する必要があります。';
$string['strategy_order_choice_none'] = '選択肢を選んでください';
$string['strategy_order_explain_choices'] = 'セレクトボックスごとに1つずつ選択肢を選んでください。第1位に選んだものが最も望ましい選択肢であることを意味します。';
$string['strategy_order_header_description'] = '可能な選択肢';
$string['strategy_order_name'] = '順位付け';
$string['strategy_order_no_choice'] = '第 {$a} 位';
$string['strategy_order_setting_countoptions'] = '順位の数 (必ず選択肢の数より小さい値を指定してください!)';
$string['strategy_order_use_only_once'] = '同じ選択肢を複数回選ぶことはできません。';
$string['strategy_points_explain_distribute_points'] = '望ましい選択肢がより高い得点となるように、総得点 {$a} 点を各選択肢に配分してください。';
$string['strategy_points_explain_max_zero'] = '0点を与えることができる選択肢の数は {$a} までです。';
$string['strategy_points_incorrect_totalpoints'] = '総得点が一致していません。配分した得点の合計が {$a} 点となるようにしてください。';
$string['strategy_points_max_count_zero'] = '少なくとも {$a} 個の選択肢に 0 でない得点を与える必要があります。';
$string['strategy_points_name'] = '得点配分';
$string['strategy_points_setting_maxzero'] = '0点を与えることができる選択肢の最大数';
$string['strategy_points_setting_totalpoints'] = '配分可能な得点の合計';
$string['strategy_settings_label'] = '"{$a}" の表記';
$string['strategy_tickyes_accept'] = '許容します';
$string['strategy_tickyes_error_mintickyes'] = '少なくとも {$a} 個にチェックを付ける必要があります。';
$string['strategy_tickyes_explain_mintickyes'] = '少なくとも {$a} 個にチェックを付ける必要があります。';
$string['strategy_tickyes_name'] = '許容';
$string['strategy_tickyes_setting_mintickyes'] = '許容する選択肢の最小数';
$string['strategy_yesmaybeno_max_count_no'] = '"No" を選ぶことができる選択肢の数は {$a} 個までです。';
$string['strategy_yesmaybeno_max_no'] = '"No" を選ぶことができる選択肢の数は {$a} 個までです。';
$string['strategy_yesmaybeno_setting_maxno'] = '"No" 評価を与えることができる選択肢の最大数';
$string['strategy_yesno_max_no'] = '"No" を選ぶことができる選択肢の数は {$a} 個までです。';
$string['strategy_yesno_maximum_crossout'] = '"No" を選ぶことができる選択肢の数は {$a} 個までです。';
$string['strategy_yesno_setting_crossout'] = '"No" 評価を与えることができる選択肢の最大数';
$string['strategyname'] = '評価方法は "{$a}" です';
$string['timeremaining'] = '残り時間';
$string['too_early_to_distribute'] = '評価期間中です。公開には早すぎます。';
$string['too_early_to_rate'] = '評価開始前です。';
$string['your_allocated_choice'] = 'あなたの割り当て結果';
$string['your_rating'] = 'あなたの評価';
