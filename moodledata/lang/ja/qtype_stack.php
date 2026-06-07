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
 * Strings for component 'qtype_stack', language 'ja', version '4.4'.
 *
 * @package     qtype_stack
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ATAlgEquiv_SA_not_equation'] = '方程式を入力してください。';
$string['ATAlgEquiv_SA_not_expression'] = '解答は数式で行ってください。方程式，不等式，リスト，集合，また行列などは入力しないでください。';
$string['ATAlgEquiv_SA_not_function'] = '解答は<tt>:=</tt>の演算子で定義された関数を入力してください。';
$string['ATAlgEquiv_SA_not_inequality'] = '不等式を入力してください。';
$string['ATAlgEquiv_SA_not_list'] = 'リストを入力してください。リストは角括弧で囲まれたカンマ区切りの値で入力してください。例：[a, b, c]';
$string['ATAlgEquiv_SA_not_logic'] = '解答は方程式，不等式，あるいはそれらの論理的な組み合わせでなければなりませんがそうなっていません。';
$string['ATAlgEquiv_SA_not_matrix'] = '行列を入力してください。';
$string['ATAlgEquiv_SA_not_realset'] = '解答は実数の部分集合でなければならず，数の集合や範囲で指定してください。';
$string['ATAlgEquiv_SA_not_set'] = '集合を入力してください。集合は波括弧で囲まれたカンマ区切りの値で入力してください。例：{a, b, c}';
$string['ATAlgEquiv_SA_not_string'] = '解答は文字列でなければなりません。';
$string['ATAlgEquiv_TA_not_equation'] = 'あなたの解答は方程式になっていますが，この問題は解答に方程式を要求していません。「y=2*x+1」のような解答の場合は「2*x+1」とだけ入力してください。';
$string['ATCompSquare_SA_not_depend_var'] = '変数{$a->m0}に依存した解答を入力してください。';
$string['ATCompSquare_false_no_summands'] = '平方完成は\\(a, b\\)を定数として\\(a(\\cdots \\cdots)^2+b\\)の形式です。あなたの解答では，2つ以上の加数が変数に依存しているようです。';
$string['ATCompSquare_not_AlgEquiv'] = 'あなたの解答の書式は正しいようですが，正解ではありません。';
$string['ATDiff_error_list'] = 'この評価関数には不具合が含まれています。サイト管理者に問い合わせてください。';
$string['ATDiff_int'] = '間違って積分してませんか？';
$string['ATEqualComAssRules_Opt_Incompatible'] = 'この評価関数のオプションには互換性のないルールが含まれています。 これはエラーです。 教師に連絡してください。';
$string['ATEqualComAssRules_Opt_List'] = 'この評価関数のオプションは，サポートされているルールの空でないリストでなければなりません。 これはエラーです。教師に連絡してください。';
$string['ATEquivFirst_SA_not_list'] = '評価関数「等価」の最初の引数はリストでなければなりませんが，テストが正常に動作していません。管理者に問い合わせてください。';
$string['ATEquivFirst_SA_wrong_end'] = '最終的な解答が正しい形式ではありません。';
$string['ATEquivFirst_SA_wrong_start'] = '最初の行は"{$a->m0}"でなければなりません。';
$string['ATEquivFirst_SB_not_list'] = '評価関数「等価」の2番目の引数はリストでなければなりませんが，テストが正常に動作していません。管理者に問い合わせてください。';
$string['ATEquiv_SA_not_list'] = '評価関数「等価」の最初の引数はリストでなければなりませんが，テストが正常に動作していません。管理者に問い合わせてください。';
$string['ATEquiv_SB_not_list'] = '評価関数「等価」の2番目の引数はリストでなければなりませんが，テストが正常に動作していません。管理者に問い合わせてください。';
$string['ATFacForm_error_list'] = 'この評価関数には不具合が含まれています。サイト管理者に問い合わせてください。';
$string['ATFacForm_isfactored'] = '形式的には因数分解できています。';
$string['ATFacForm_notalgequiv'] = 'あなたの解答は正答と代数的に等価ではありません。どこか計算間違いをしていませんか？';
$string['ATFacForm_notfactored'] = 'あなたの解答は因数分解されていません。';
$string['ATFacForm_notpoly'] = 'この項は多項式であるはずですが，そうではありません。';
$string['ATInequality_backwards'] = '不等式が反対になっていませんか？';
$string['ATInequality_nonstrict'] = 'この問題の不等号は「＜」か「＞」である必要があります。';
$string['ATInequality_strict'] = 'この問題の不等号は「≤」か「≥」である必要があります。';
$string['ATInt_EqFormalDiff'] = 'あなたの解答を微分すると，問題の被積分関数と確かに一致します。しかし，あなたの解答は正解と形が大きく異なっています（例えば，単に積分定数が異なる，だけでなく）。';
$string['ATInt_STACKERROR_OptList'] = 'この評価関数は正しく実行されませんでした。教師に伝えてください。積分の評価関数の場合，オプションには2つの要素が必ずふくまれていなければなりませんが，そうなっていません。';
$string['ATInt_const'] = '積分定数を忘れていませんか？積分定数を追加すれば正解です。';
$string['ATInt_const_int'] = '積分定数がありません。積分定数は数値ではなく任意の定数である必要があります。';
$string['ATInt_diff'] = '間違って微分してませんか？';
$string['ATInt_error_list'] = 'この評価関数には不具合が含まれています。サイト管理者に問い合わせてください。';
$string['ATInt_generic'] = 'あなたの解答を微分したものは，積分すべき数式に一致しなければなりません。あなたの解答を{$a->m1}で微分すると{$a->m2}になります。これは{$a->m0}に一致しません。どこか計算を間違えていませんか？';
$string['ATInt_logabs'] = '教師は\\(\\int \\frac{1}{x}dx=\\log (x) +c\\)ではなく，\\(\\int \\frac{1}{x}dx=\\log (|x|) +c\\)の結果を期待しているでしょう。詳しくは教師にたずねてください。';
$string['ATInt_logabs_inconsistent'] = '\\(\\log (...)\\)と\\(\\log ( |...|)\\)の使い方に間違いがあるようです。詳しくは教師にたずねてください。';
$string['ATInt_weirdconst'] = 'あなたの解答を形式的に微分すると，確かに積分すべき数式に一致します。しかし，不適切な積分定数が含まれています。詳しくは教師にたずねてください。';
$string['ATLevenshtein_SA_not_string'] = 'レーベンシュタイン評価関数の第1引数は文字列でなければいけません。テストに失敗しました。管理者に連絡してください。';
$string['ATLevenshtein_SB_malformed'] = 'レーベンシュタイン評価関数の2番目の引数は[allow, deny]という文字のリスト形式でなければなりません。 この引数は不正なため，評価できませんでした。教師に連絡してください。';
$string['ATLevenshtein_match'] = '最も近いのは "{$a->m0}" です。';
$string['ATLevenshtein_tol_not_number'] = 'レーべシュタイン評価関数の結果は数字でなければなりませんが，そうではありません。評価ができませんでした。先生に連絡してください。';
$string['ATLevenshtein_upper_not_boolean'] = 'レーベンシュタイン評価関数の大文字小文字を区別するオプションはブール値でなければなりませんが，そうではありません。評価できませんでした。教師に連絡してください。';
$string['ATList_wrongentries'] = '赤字で示された部分が不正解です。{$a->m0}';
$string['ATList_wronglen'] = 'あなたの解のリストは {$a->m1} 個の要素が含まれていますが，{$a->m0} 個の要素が含まれているべきです。';
$string['ATLowestTerms_entries'] = '以下の項は約分が十分ではありません。{$a->m0} もう一度よく確認してください。';
$string['ATLowestTerms_not_rat'] = '分数の分母から次を消去してください: {$a->m0}';
$string['ATLowestTerms_wrong'] = '解答中の分数を約分する必要があります。';
$string['ATMatrix_wrongentries'] = '赤字で示された部分が不正解です。{$a->m0}';
$string['ATMatrix_wrongsz'] = '行列は{$a->m0}×{$a->m1}であるべきですが，実際には{$a->m2}×{$a->m3}となっています。';
$string['ATNumDecPlacesWrong_OptNotInt'] = '評価関数ATNumDecPlacesWrongでは，オプションは正の整数でなければなりませんが，"{$a->m0}"を受け取りました。';
$string['ATNumDecPlaces_Float'] = 'あなたの解答は浮動小数点でなければなりませんが，そうなっていません。';
$string['ATNumDecPlaces_NoDP'] = '解答は小数点を含む10進数でなければなりません。';
$string['ATNumDecPlaces_OptNotInt'] = '評価関数「小数部桁数」のオプションは正の整数でなければなりませんが，"{$a->m0}"になっています。';
$string['ATNumDecPlaces_Wrong_DPs'] = 'あなたの解答では小数点の位置が間違っています。';
$string['ATNumSigFigs_Inaccurate'] = 'あなたの解答の精度（桁数）が正しくありません。正しく四捨五入していないか，計算の途中で四捨五入して最終的な答えが間違いとなった可能性があります。';
$string['ATNumSigFigs_NotDecimal'] = '解答は10進数でなければなりません。';
$string['ATNumSigFigs_WrongDigits'] = 'あなたの解答の桁数が間違っています。';
$string['ATNumSigFigs_WrongSign'] = 'あなたの解答は，符号が間違っています。';
$string['ATNumSigFigs_error_list'] = 'この評価関数には不具合が含まれています。サイト管理者に問い合わせてください。';
$string['ATNum_OutofRange'] = '数値の表現が可能な精度を超えています。教師に問い合わせてください。';
$string['ATNumerical_FAILED'] = '解答は実数，あるいは実数のリスト，集合としてください。';
$string['ATNumerical_SA_not_list'] = '解答はリスト形式としてください。リストはカンマで区切られた値を角括弧（[， ]）で閉じてください。';
$string['ATNumerical_SA_not_number'] = '解答は実数としてください。';
$string['ATNumerical_SA_not_set'] = '解答は集合としてください。集合はカンマで区切られた値を波括弧（{，}）で閉じてください。';
$string['ATNumerical_SB_not_number'] = '評価基準で使われる値は浮動小数点数であるべきですが，そうではありません。これはテストの内部エラーです。 この点については，教師にお尋ねください。';
$string['ATNumerical_STACKERROR_tol'] = 'ATNumericalの数値誤差は浮動小数点数であるべきですが，そうではありません。これはテストの内部エラーです．この点については，教師にお尋ねください。';
$string['ATPartFrac_denom_ret'] = 'あなたの解答を単一の分数で記述すると分母は{$a->m0}になります。正しくは{$a->m1}です。';
$string['ATPartFrac_diff_variables'] = '解答の中の変数は，問題文の中の変数と異なっています。確認してください。';
$string['ATPartFrac_error_list'] = '評価関数が正常に動作しませんでした。サイト管理者に問い合わせてください。';
$string['ATPartFrac_ret_expression'] = 'あなたの解答を単一の分数で記述すると{$a->m0}になります。';
$string['ATSRegExp_SA_not_string'] = '評価関数SRegExpの第1引数は文字でなければなりません。評価が失敗しました。管理者に問い合わせてください。';
$string['ATSRegExp_SB_not_string'] = '評価関数SRegExpの第2引数は文字でなければなりません。評価が失敗しました。管理者に問い合わせてください。';
$string['ATSet_wrongentries'] = 'ここでは簡略化された形で表示されることもありますが，入力されたものは間違っています。{$a->m0}';
$string['ATSet_wrongsz'] = '集合は{$a->m0}個の異なる要素が必要ですが，実際には要素数は {$a->m1}個です。';
$string['ATSets_SA_not_set'] = '解答は集合でなければなりません。集合を入力する場合，要素をカンマ(,)で区切り，波括弧{ }で囲ってください。';
$string['ATSets_SB_not_set'] = '評価関数「集合」の第2引数は集合でなければなりません。これはエラーです。教師に連絡してください。';
$string['ATSets_duplicates'] = '集合の中に重複した要素が含まれています。';
$string['ATSets_missingentries'] = '集合に次のものが含まれていません {$a->m0}。';
$string['ATSets_wrongentries'] = 'この入力は集合の要素ではありません。{$a->m0}';
$string['ATSingleFrac_div'] = 'あなたの解答は分数の中に分数を含んでいます。一つの分数で解答を入力してください。';
$string['ATSingleFrac_error_list'] = '評価関数が正常に動作しませんでした。サイト管理者に問い合わせてください。';
$string['ATSingleFrac_part'] = '解答は\\(\\frac{a}{b}\\)の形式の一つの分数である必要があります。';
$string['ATSingleFrac_ret_exp'] = 'あなたの解答は正解と代数的に等しくありません。どこか計算間違いしていませんか？';
$string['ATSingleFrac_var'] = '解答の中の変数は，問題文の中の変数と異なっています。';
$string['ATString_SA_not_string'] = '解答は文字列であるべきですが，そうなっていません。';
$string['ATString_SB_not_string'] = '評価基準は文字列であるべきですが，そうではない。';
$string['ATSubstEquiv_Opt_List'] = 'エラーです。この評価関数のオプションはリストでなければなりません。これはエラーです。教師に連絡してください。';
$string['ATSysEquiv_SA_extra_variables'] = '解答に含まれている変数が多すぎます。';
$string['ATSysEquiv_SA_missing_variables'] = 'あなたの解答には変数が足りません。';
$string['ATSysEquiv_SA_not_eq_list'] = '解答は方程式のリストでなければなりません。';
$string['ATSysEquiv_SA_not_list'] = '解答はリスト形式でなければなりません。';
$string['ATSysEquiv_SA_not_poly_eq_list'] = '方程式が多項式ではありません。';
$string['ATSysEquiv_SA_system_overdetermined'] = '赤字で示された部分が不正解です。{$a->m0}';
$string['ATSysEquiv_SA_system_underdetermined'] = '方程式は正しいようですが，それ以外にも必要です。';
$string['ATSysEquiv_SA_wrong_variables'] = 'あなたの解答には，誤った変数が用いられています。';
$string['ATSysEquiv_SB_not_eq_list'] = '評価基準は方程式のリストではなければなりません。';
$string['ATSysEquiv_SB_not_list'] = '評価基準はリストではありません。';
$string['ATSysEquiv_SB_not_poly_eq_list'] = '評価基準は多項式のリストですが，そうなっていません。';
$string['ATUnits_SA_bad_units'] = '解答には単位が必要です。数値に単位を掛けることによって，単位を付けることができます。例：<code>3.2*m/s</code>';
$string['ATUnits_SA_errorbounds_invalid'] = 'あなたの解答には誤差範囲が指定されています。この解答としては誤差範囲は使わないで，値と単位のみ使ってください。';
$string['ATUnits_SA_excess_units'] = 'あなたの解答には単位（あるいは変数）が用いられていますが，不要です。';
$string['ATUnits_SA_no_units'] = '解答には単位が必要です。';
$string['ATUnits_SA_not_expression'] = '解答は単位付きの数値でなければなりません。集合，リスト，方程式，行列を使わないでください。';
$string['ATUnits_SA_only_units'] = '解答は単位付きの数値でなければなりません。あなたの解答には単位しかありません。';
$string['ATUnits_SO_wrong_units'] = '数値誤差の単位が，評価基準の単位と一致していません。これはテストの内部エラーです。この点については，教師にお尋ねください。';
$string['ATUnits_compatible_units'] = 'あなたの単位は正解の単位とは異なっていますが，対応しています。数値はSI単位系に変換されて比較されます。';
$string['ATUnits_correct_numerical'] = '単位を注意深く確認してください。';
$string['ATUnits_incompatible_units'] = 'あなたの単位は正解の単位とは対応していません。';
$string['ATValidator_STACKERROR_ev'] = 'バリデータ実行の際にエラーが発生しました．これはテスト中のエラーです。この点については，教師にお尋ねください。';
$string['ATValidator_not_fun'] = 'バリデータが実行できませんでした．正しいバリデータ関数名を指定していますか？これはテスト中のエラーです。この点については，教師にお尋ねください。';
$string['ATValidator_res_not_string'] = '評価関数の結果は文字列でなければなりません。これはエラーです。教師に連絡してください。';
$string['AT_EmptySA'] = '評価対象が空欄のまま評価関数を実行しました。問題作成時にCASの評価で問題が生じます。';
$string['AT_EmptyTA'] = '評価対象が空欄のまま評価基準を実行しました。問題作成時にCASの評価で問題が生じます。';
$string['AT_InvalidOptions'] = 'オプションのフィールドが正しくありません。 {$a->errors}';
$string['AT_MissingOptions'] = '評価関数を実行するために必要なオプションがありません。';
$string['AT_raw_sans_needed'] = '一部の解答テストでは学生が直接入力した解答に依存するため，ノードの「評価対象」フィールドは問題入力の名前であるべきです。 計算された値と思われる，次のポテンシャル・レスポンス・ツリーのノードを確認してください: {$a->prt}';
$string['Bad_assignment'] = '変数の値を列挙する場合は，{$a->m0}のように入力を修正してください。';
$string['CommaError'] = 'あなたの解答には，リスト，集合，行列で用いられるもの以外のコンマが使われています。<ul><li>リストの場合は，<tt>[...]を使用してください</tt></li><li>集合の場合は，<tt>{...}</tt>を使用してください</li></ul>';
$string['Equiv_Illegal_list'] = '同値変形では，リストは許可されていません。';
$string['Equiv_Illegal_matrix'] = '同値変形では，行列は許可されていません。';
$string['Equiv_Illegal_set'] = '同値変形では，集合は許可されていません。';
$string['FacForm_UnPick_morework'] = '項{$a->m0}に対してさらに計算することができます。';
$string['Illegal_control_flow'] = '解答には<code> if </ code> -conditionalや<code> do </ code> -loopなどの制御フローステートメントが含まれています。これらはここでは禁止されています。これらのステートメントの結果を解答として入力する必要があります。';
$string['Illegal_floats'] = 'あなたの解答には浮動小数点数が含まれています。整数または分数で解答してください。例：0.3333ではなく1/3と入力してください。0.3333は1/3の近似でしかありません。';
$string['Illegal_groupping'] = '許可されていない括弧が使われています。';
$string['Illegal_groups'] = 'あなたの解答には"(a,b,c)"が含まれていますが，それは許可されていません。';
$string['Illegal_identifiers_in_units'] = '入力には，単位だけが期待されていますが，変数名が含まれています。';
$string['Illegal_illegal_operation_in_units'] = 'この入力では演算子<code>{$a}</code>は許されていませんん。';
$string['Illegal_illegal_power_of_ten_in_units'] = '10の整数乗のみ許されています。';
$string['Illegal_input_form_units'] = '入力は，数値の後に単位を定義する式を続けるか，乗算されることが想定されています。例： <code> 1.23 * W / m ^ 2 </ code>。';
$string['Illegal_lists'] = 'あなたの解答にはリスト"[a,b,c]"が含まれていますが，それは許可されていません。';
$string['Illegal_sets'] = 'あなたの解答には集合"{a,b,c}"が含まれていますが，それは許可されていません。';
$string['Illegal_singleton_floats'] = 'ここでは，入力されたような形式の10進数を受け付けません。この入力には，次のいずれかの形式で表示される数値が必要です：<code> {$a->forms} </ code>';
$string['Illegal_singleton_integer'] = 'ここでは，整数値を受け入れません。この入力には，次のいずれかの形式で表示される数値が必要です：<code> {$a->forms} </ code>';
$string['Illegal_singleton_power'] = 'ここでは，次のいずれかの形式で表示される数値求められています。：<code> {$a->forms} </ code>';
$string['Illegal_strings'] = 'あなたの解答には「文字」が含まれていますが，それは許可されていません。';
$string['Illegal_x10'] = '乗算のために"x"が使われているようです。乗算には<code>*</code>を使ってください。';
$string['Interval_backwards'] = '実数区間を定義するときは，終点を順序付ける必要があります。 {$a->m0}は{$a->m1}である必要があります。';
$string['Interval_illegal_entries'] = '実数集合には次のものは現れません：{$a->m0}';
$string['Interval_notinterval'] = '区間が求められていますが {$a->m0} となっています。';
$string['Interval_wrongnumargs'] = '区間の定義には2つの引数が必要なので，これはエラーです：{$a->m0}。';
$string['Lowest_Terms'] = 'あなたの解答には約分出来ていない箇所があります。もう一度よく見直して入力してください。';
$string['Maxima_Args'] = '引数 args: は同時実行は許可されていません。';
$string['Maxima_DivisionZero'] = '0で割られている箇所があります。もう一度見直して入力してください。';
$string['Subst'] = '{$a->m0}の変数の代入を行うと，あなたの解答は正しいいでしょう。';
$string['TEST_FAILED'] = '評価関数が正しく実行されませんでした。教師に連絡してください。{$a->errors}';
$string['TEST_FAILED_Q'] = '評価関数が正しく実行されませんでした。教師に連絡してください。';
$string['ValidateVarsMissing'] = 'これらの変数が見つかりません： {$a->m0}.';
$string['ValidateVarsSpurious'] = 'これらの変数は必要ありません： {$a->m0}.';
$string['Variable_function'] = 'あなたの入力した数式は変数と関数のいずれにも解釈できます：{$a->m0}。<code>*</code>を挿入して関数とみなさないか，全ての文字列を関数とするか，入力を明確にしてください。';
$string['addanothernode'] = '新しいノードを追加する';
$string['addanothertestcase'] = '新しいテストケースを追加する';
$string['addatestcase'] = 'テストケースを追加する';
$string['addingatestcase'] = '問題{$a}にテストケースを追加する';
$string['alg_indices_fact'] = '以下は指数の法則です。
\\[a^ma^n = a^{m+n}\\]
\\[\\frac{a^m}{a^n} = a^{m-n}\\]
\\[(a^m)^n = a^{mn}\\]
\\[a^0 = 1\\]
\\[a^{-m} = \\frac{1}{a^m}\\]
\\[a^{\\frac{1}{n}} = \\sqrt[n]{a}\\]
\\[a^{\\frac{m}{n}} = \\left(\\sqrt[n]{a}\\right)^m\\]';
$string['alg_indices_name'] = '指数の法則';
$string['alg_inequalities_fact'] = '\\[a>b \\hbox{ ： } a \\hbox{ は } b \\hbox{ よりも大きい } \\] <br /> \\[ a < b \\hbox{ ： } a \\hbox{ は } b \\hbox{ よりも小さい } \\] <br /> \\[a\\geq b \\hbox{ ： } a \\hbox{ は } b \\hbox{ よりも大きいかまたは等しい } \\] <br /> \\[a\\leq b \\hbox{ ： } a \\hbox{ は } b \\hbox{ よりも小さいかまたは等しい } \\]';
$string['alg_inequalities_name'] = '不等式';
$string['alg_logarithms_fact'] = '任意の正の底 \\(c\\) (ただし \\(c \\neq 1\\))に対して \\[\\log_c(a) = b \\mbox{，つまり } a = c^b\\]
\\[\\log_c(a) + \\log_c(b) = \\log_c(ab)\\]
\\[\\log_c(a) - \\log_c(b) = \\log_c \\left(\\frac{a}{b}\\right)\\]
\\[n\\log_c(a) = \\log_c \\left(a^n \\right)\\]
\\[\\log_c(1) = 0\\]
\\[\\log_c(b) = 1\\]
底の変換公式
\\[\\log_a(x) = \\frac{\\log_b(x)}{\\log_b(a)}\\]
底 \\(e\\) の対数 \\(\\log_e\\) あるいは \\(\\ln\\) は自然対数と呼ばれる。\\(e\\) は定数でおよそ 2.718 です。';
$string['alg_logarithms_name'] = '対数の法則';
$string['alg_partial_fractions_fact'] = '\\(P\\) と \\(Q\\) が多項式で，\\(P\\) の次数が \\(Q\\) の次数よりも小さい時，\\[{\\frac{P(x)}{Q(x)}}\\] は真分数となる。さらに，\\(Q(x)\\) が因数分解でき，
* <em>一次式の因子</em> \\(ax+b\\) を使って次のような形式に書くことができる。 \\[{\\frac{A}{ax+b}}.\\]
* あるいは<em>上記の二乗の因子</em> \\((ax+b)^2\\) を使って次のような形式に書くことができる。\\[{A \\over ax+b}+{B \\over (ax+b)^2}.\\]
* また，<em>二次式の因子</em> \\(ax^2+bx+c\\) を使って次のような形式に書くことができる。\\[{Ax+B \\over ax^2+bx+c}\\]
* さらに，<em>仮分数</em> の場合は，\\(n-d\\)次の多項式の項が必要となる。ただし，\\(n\\) は分子(i.e. \\(P(x)\\)) の次数であり，\\(d\\) は分母 (ie \\(Q(x)\\))の次数である。';
$string['alg_partial_fractions_name'] = '部分分数';
$string['alg_quadratic_formula_fact'] = '二次方程式 \\[ ax^2 + bx +c =0 \\] の解は解の公式により \\[ x = \\frac{-b \\pm \\sqrt{b^2-4ac}}{2a}\\] となります。';
$string['alg_quadratic_formula_name'] = '二次方程式の解の公式';
$string['all'] = 'すべて';
$string['allnodefeedbackmustusethesameformat'] = 'ポテンシャル・レスポンス・ツリーの全てのノードのフィードバックは同じフォーマットで記述する必要があります。';
$string['allowwords'] = '許可されたワード';
$string['allowwords_help'] = 'デフォルトでは，3文字以上の関数名，変数名は学生の解答内では許可されていません。学生の解答に使用できる関数名，変数名を，カンマで区切られたリストとして指定します。';
$string['allowwords_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Allow_Words';
$string['alreadydeployed'] = 'この問題記録に対応する変形はすでにデプロイされています。';
$string['alttextmissing'] = '一つかそれ以上の画像で，"{$a->field}" ({$a->num})の\'alt\'タグが設定されていないようです。';
$string['ansnotemismatch'] = '[解答記録が一致していません]';
$string['answernote'] = '解答記録';
$string['answernote_err'] = '解答記録に「 | 」を含むことはできません。この文字は解答記録を分割するためにSTACKによって自動的に挿入されます。';
$string['answernote_err2'] = '解答ノートには ; や : を含むことはできません。これらの文字は，オフラインのレポートのサマリーで，問題への試行の区切りに使われています。';
$string['answernote_help'] = 'これはレポートを目的としたタグで，ポテンシャル・レスポンス・ツリーのパスと各評価関数の出力を記録するように設計されています。これは自動的に生成されますが，目的に応じて変更できます。';
$string['answernote_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Potential_response_trees.md#Answer_note';
$string['answernotedefaultfalse'] = '{$a->prtname}-{$a->nodename}-F';
$string['answernotedefaulttrue'] = '{$a->prtname}-{$a->nodename}-T';
$string['answernoterequired'] = '解答記録は空欄のままではいけません';
$string['answernoteunique'] = '重複した解答記録がこのポテンシャル・レスポンス・ツリー内に見つかりました。';
$string['answertest'] = '評価関数';
$string['answertest_ab'] = 'テスト';
$string['answertest_help'] = '評価関数は，数式がある条件をみたしているかどうかを判定するために用いられるものです。';
$string['answertest_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Answer_Tests/index.md';
$string['api_errors'] = 'エラー';
$string['api_failures'] = 'テスト失敗';
$string['api_general_errors'] = '一般的なエラー（例：壊れたXML）';
$string['api_passes'] = 'パス';
$string['assumepositive'] = '正と仮定';
$string['assumepositive_help'] = 'このオプションはMaximaのassume_posオプションの値を設定します。例えば，sqrt(a^2)  = a のようになります。';
$string['assumepositive_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#Assume_Positive';
$string['assumereal'] = '実数を仮定';
$string['assumereal_help'] = 'このオプションは assume_real 変数を設定します。';
$string['assumereal_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#Assume_Real';
$string['autosimplify'] = '自動簡略化';
$string['autosimplify_help'] = 'この問題（問題変数，問題テキストなど）に対して，Maximaの”simp"変数を設定します。各ポテンシャル・レスポンス・ツリーでこの変数の値が設定されると，それ以降に定義される定義される式に対してはそれが優先されます。';
$string['autosimplify_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/CAS/Simplification.md';
$string['autosimplifyprt'] = '自動簡略化';
$string['autosimplifyprt_help'] = 'このポテンシャル・レスポンス・ツリーのフィードバック変数に対して，Maximaの"simp"変数を設定します。PRTの「記録」が簡略化されるかどうかは，評価関数に依存することに注意してください。例えば，AlgEquivの引数は簡略化されますが，EqualComAssの引数は簡略化されません。';
$string['autosimplifyprt_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/CAS/Simplification.md';
$string['autotestcase'] = '管理者のインプットを想定したテストケースは満点です。';
$string['basicquestionreport'] = '<i class="fa fa-bar-chart"></i> 解答の分析';
$string['basicquestionreport_help'] = 'サーバ上でこの問題への解答に関する簡易なレポートを生成します。学生が実際どのような解答を行ったかを参照しながら，フィードバックを改良するために，どのようにポテンシャル・レスポンス・ツリーを構成するかを検討するために役立つでしょう。';
$string['basicreportinputsummary'] = 'どのような変形が使われたかにかかわらず，入力されたものをそのまま提示する';
$string['basicreportnotes'] = 'どのような変形が使われたかにかかわらず，各ポテンシャル・レスポンス・ツリーで使われた解答記録の回数';
$string['basicreportnotessplit'] = 'どのような変形が使われたかにかかわらず，| で区切られた，各ポテンシャル・レスポンス・ツリーで使われた解答記録の回数';
$string['basicreportraw'] = '生データ';
$string['basicreportvariants'] = '各変形毎に入力データとポテンシャル・レスポンス・ツリーの解答記録';
$string['booleangotunrecognisedvalue'] = '入力エラー';
$string['boxsize'] = '解答欄のサイズ';
$string['boxsize_help'] = '解答入力欄の大きさを設定します。';
$string['boxsize_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Box_Size';
$string['branchfeedback'] = 'ノード・フィードバック';
$string['branchfeedback_help'] = '問題変数，入力，フィードバック変数に依存したCASテキストで記述されます。解答がこの分岐を通過する場合，CASテキストが評価され学生に表示されます。';
$string['bulktestallincontext'] = '全てのテスト';
$string['bulktestcontinuefromhere'] = 'もう一度実行するかやり直して，ここから始めてください。';
$string['bulktestindexintro'] = 'どのリンクをクリックしても，全てのSTACKの問題のテストを実行します。';
$string['bulktestindexintro_desc'] = '<a href="{$a->link}"> bulk test script</a> は全てのSTACKの問題のテストを簡単に実行することができます。また，CASのキャッシュの再構築のための良い方法でもあります。';
$string['bulktestindextitle'] = '内部で問題のテストを実行';
$string['bulktestnodeployedseeds'] = 'この問題ではランダム変数が用いられていますが，乱数シードがデプロイされていません。';
$string['bulktestnogeneralfeedback'] = 'この問題には全般的なフィードバックが含まれていません。';
$string['bulktestnotests'] = 'この問題にはテストが含まれていません。';
$string['bulktestrun'] = 'システムの全ての問題に対して，全てのテストケースを実行します（時間がかかります。管理者のみ実行してください。）';
$string['bulktesttitle'] = '{$a}で問題のテストが実行されています。';
$string['cachedef_parsercache'] = 'STACKはMaximaの表現を解釈しました。';
$string['calc_chain_rule_fact'] = '次のようにして合成関数の微分を行うことができます。関数\\(f(g(x))\\)で\\(u=g(x)\\)と仮定することにより，\\(f(g(x))\\)を\\(x\\)で微分すると \\[ \\frac{df(g(x))}{dx} = \\frac{dg(x)}{dx} \\cdot \\frac{df(u)}{du} \\] となります。あるいは， \\[ frac{df(g(x))}{dx} = f\\\'(g(x)) \\cdot g\\\'(x)\\] と書くこともできます。';
$string['calc_chain_rule_name'] = 'チェーンルール';
$string['calc_diff_linearity_rule_fact'] = '\\[ frac{\\rm d}{{\\rm d}x}(af(x)+bg(x)) = a\\frac{{\\rm d}f(x)}{dx} + b \\frac{{\\rm d} g(x)}{{\\rm d}x} \\] ただし，\\(a, b\\)は定数。ただし，(a, b)は定数。';
$string['calc_diff_linearity_rule_name'] = '微分の線形性';
$string['calc_diff_standard_derivatives_fact'] = '次の表はいくつかの標準的な関数の微分を表示しています。計算にしばしば用いられるので，覚えておくと便利です。
|\\(f(x)\\)|\\(f\'(x)\\)|
|--- |--- |
|\\(k\\), constant|\\(0\\)|
|\\(x^n\\), any constant \\(n\\)|\\(nx^{n-1}\\)|
|\\(e^x\\)|\\(e^x\\)|
|\\(\\ln(x)=\\log_{\\rm e}(x)\\)|\\(\\frac{1}{x}\\)|
|\\(\\sin(x)\\)|\\(\\cos(x)\\)|
|\\(\\cos(x)\\)|\\(-\\sin(x)\\)|
|\\(\\tan(x) = \\frac{\\sin(x)}{\\cos(x)}\\)|\\(\\sec^2(x)\\)|
|\\(cosec(x)=\\frac{1}{\\sin(x)}\\)|\\(-cosec(x)\\cot(x)\\)|
|\\(\\sec(x)=\\frac{1}{\\cos(x)}\\)|\\(\\sec(x)\\tan(x)\\)|
|\\(\\cot(x)=\\frac{\\cos(x)}{\\sin(x)}\\)|\\(-cosec^2(x)\\)|
|\\(\\cosh(x)\\)|\\(\\sinh(x)\\)|
|\\(\\sinh(x)\\)|\\(\\cosh(x)\\)|
|\\(\\tanh(x)\\)|\\(sech^2(x)\\)|
|\\(sech(x)\\)|\\(-sech(x)\\tanh(x)\\)|
|\\(cosech(x)\\)|\\(-cosech(x)\\coth(x)\\)|
|\\(coth(x)\\)|\\(-cosech^2(x)\\)|

 \\[ \\frac{d}{dx}\\left(\\sin^{-1}(x)\\right) =  \\frac{1}{\\sqrt{1-x^2}}\\]
 \\[ \\frac{d}{dx}\\left(\\cos^{-1}(x)\\right) =  \\frac{-1}{\\sqrt{1-x^2}}\\]
 \\[ \\frac{d}{dx}\\left(\\tan^{-1}(x)\\right) =  \\frac{1}{1+x^2}\\]
 \\[ \\frac{d}{dx}\\left(\\cosh^{-1}(x)\\right) =  \\frac{1}{\\sqrt{x^2-1}}\\]
 \\[ \\frac{d}{dx}\\left(\\sinh^{-1}(x)\\right) =  \\frac{1}{\\sqrt{x^2+1}}\\]
 \\[ \\frac{d}{dx}\\left(\\tanh^{-1}(x)\\right) =  \\frac{1}{1-x^2}\\]';
$string['calc_diff_standard_derivatives_name'] = '標準的な微分';
$string['calc_int_linearity_rule_fact'] = '\\[\\int \\left(af(x)+bg(x)\\right){\\rm d}x = a\\int\\!\\!f(x),{\\rm d}x \\,+\\,b\\int \\!\\!g(x)\\,{\\rm d}x, \\quad (a,b \\, \\, \\mbox{定数} )\\]';
$string['calc_int_linearity_rule_name'] = '積分の線形性';
$string['calc_int_methods_parts_fact'] = '\\[ \\int_a^b u{{\\rm d}v\\over {\\rm d}x}{\\rm d}x=\\left[uv\\right]_a^b- \\int_a^b{{\\rm d}u\\over {\\rm d}x}v\\,{\\rm d}x\\] あるいは \\[\\int_a^bf(x)g(x)\\,{\\rm d}x=\\left[f(x)\\,\\int g(x){\\rm d}x\\right]_a^b -\\int_a^b{{\\rm d}f\\over {\\rm d}x}\\left\\{\\int g(x){\\rm d}x\\right\\}{\\rm d}x.\\]';
$string['calc_int_methods_parts_indefinite_fact'] = '\\[
\\int u{{\\rm d}v\\over {\\rm d}x}{\\rm d}x=uv- \\int{{\\rm d}u\\over {\\rm d}x}v\\,{\\rm d}x\\]
or alternatively: \\[\\int f(x)g(x)\\,{\\rm d}x=f(x)\\,\\int
g(x){\\rm d}x -\\int {{\\rm d}f\\over {\\rm d}x}\\left\\{\\int g(x){\\rm d}x\\right\\}{\\rm d}x.\\]';
$string['calc_int_methods_parts_indefinite_name'] = '部分積分';
$string['calc_int_methods_parts_name'] = '部分積分';
$string['calc_int_methods_substitution_fact'] = '\\[ \\int f(u){{\\rm d}u\\over {\\rm d}x}{\\rm d}x=\\int f(u){\\rm d}u \\quad\\hbox{および}\\quad \\int_a^bf(u){{\\rm d}u\\over {\\rm d}x}\\,{\\rm d}x = \\int_{u(a)}^{u(b)}f(u){\\rm d}u. \\]';
$string['calc_int_methods_substitution_name'] = '置換積分';
$string['calc_int_standard_integrals_fact'] = '\\[\\int k\\ dx = kx +c, \\mbox{ ただし} k \\mbox{は定数}\\]
\\[\\int x^n\\ dx  = \\frac{x^{n+1}}{n+1}+c, \\quad (n\\ne -1)\\]
\\[\\int x^{-1}\\ dx = \\int {\\frac{1}{x}}\\ dx = \\ln(|x|)+c = \\ln(k*|x|) = \\left\\{\\matrix{\\ln(x)+c & x>0\\cr
\\ln(-x)+c & x<0\\cr}\\right.\\]

|\\(f(x)\\)|\\(\\int f(x)\\ dx\\)||
|--- |--- |--- |
|\\(e^x\\)|\\(e^x+c\\)||
|\\(\\cos(x)\\)|\\(\\sin(x)+c\\)||
|\\(\\sin(x)\\)|\\(-\\cos(x)+c\\)||
|\\(\\tan(x)\\)|\\(\\ln(\\sec(x))+c\\)|\\(-\\frac{\\pi}{2} < x < \\frac{\\pi}{2}\\)|
|\\(\\sec x\\)|\\(\\ln (\\sec(x)+\\tan(x))+c\\)|\\( -{\\pi\\over 2}< x < {\\frac{\\pi}{2}}\\)|
|\\(\\mbox{cosec}(x)\\)|\\(\\ln (\\mbox{cose}c(x)-\\cot(x))+c\\quad\\)   |\\(0 < x < \\pi\\)|
|cot\\(\\,x\\)|\\(\\ln(\\sin(x))+c\\)|\\(0< x< \\pi\\)|
|\\(\\cosh(x)\\)|\\(\\sinh(x)+c\\)||
|\\(\\sinh(x)\\)|\\(\\cosh(x) + c\\)||
|\\(\\tanh(x)\\)|\\(\\ln(\\cosh(x))+c\\)||
|\\(\\mbox{coth}(x)\\)|\\(\\ln(\\sinh(x))+c \\)|\\(x>0\\)|
|\\({1\\over x^2+a^2}\\)|\\({1\\over a}\\tan^{-1}{x\\over a}+c\\)|\\(a>0\\)|
|\\({1\\over x^2-a^2}\\)|\\({1\\over 2a}\\ln{x-a\\over x+a}+c\\)|\\(|x|>a>0\\)|
|\\({1\\over a^2-x^2}\\)|\\({1\\over 2a}\\ln{a+x\\over a-x}+c\\)|\\(|x|\\)|
|\\(\\frac{1}{\\sqrt{x^2+a^2}}\\)|\\(\\sinh^{-1}\\left(\\frac{x}{a}\\right) + c\\)|\\(a>0\\)|
|\\({1\\over \\sqrt{x^2-a^2}}\\)|\\(\\cosh^{-1}\\left(\\frac{x}{a}\\right) + c\\)|\\(x\\geq a > 0\\)|
|\\({1\\over \\sqrt{x^2+k}}\\)|\\(\\ln (x+\\sqrt{x^2+k})+c\\)||
|\\({1\\over \\sqrt{a^2-x^2}}\\)|\\(\\sin^{-1}\\left(\\frac{x}{a}\\right)+c\\)|\\(-a\\leq x\\leq a\\)|';
$string['calc_int_standard_integrals_name'] = '標準的な積分';
$string['calc_product_rule_fact'] = '関数の積の微分の法則を示します。 \\(f(x)g(x)\\) を \\(x\\) で微分する場合次のようになります。 \\(f(x)g(x)\\) with respect to \\(x\\). \\[ \\frac{\\mathrm{d}}{\\mathrm{d}{x}} \\big(f(x)g(x)\\big) = f(x) \\cdot \\frac{\\mathrm{d} g(x)}{\\mathrm{d}{x}} + g(x)\\cdot \\frac{\\mathrm{d} f(x)}{\\mathrm{d}{x}},\\] あるいは別の表記で \\[ (f(x)g(x))\\\' = f\\\'(x)g(x)+f(x)g\\\'(x). \\]';
$string['calc_product_rule_name'] = '積法則';
$string['calc_quotient_rule_fact'] = '微分可能な関数 \\(f(x)\\) と \\(g(x)\\)に対する微分の商法則は次のとおりです。\\[\\frac{d}{dx}\\left(\\frac{f(x)}{g(x)}\\right)=\\frac{g(x)\\cdot\\frac{df(x)}{dx}\\ \\ - \\ \\ f(x)\\cdot \\frac{dg(x)}{dx}}{g(x)^2}. \\]';
$string['calc_quotient_rule_name'] = '商法則';
$string['calc_rules_fact'] = '<b>微分の積法則</b><br /> \\(f(x)g(x)\\) を \\(x\\) で微分する場合，関数の積の微分の法則は次のようになります。\\[ \\frac{\\mathrm{d}}{\\mathrm{d}{x}} \\big(f(x)g(x)\\big) = f(x) \\cdot \\frac{\\mathrm{d} g(x)}{\\mathrm{d}{x}} + g(x)\\cdot \\frac{\\mathrm{d} f(x)}{\\mathrm{d}{x}},\\] あるいは別の表記で \\[ (f(x)g(x))\\\' = f\\\'(x)g(x)+f(x)g\\\'(x). \\] <b>微分の商法則</b><br />微分可能な関数 \\(f(x)\\) と \\(g(x)\\)に対する微分の商法則は次のとおりです。 \\[frac{d}{dx}\\left(\\frac{f(x)}{g(x)}\\right)=\\frac{g(x)\\cdot\\frac{df(x)}{dx} - f(x)\\cdot \\frac{dg(x)}{dx}}{g(x)^2}. \\] <b>チェーンルール</b><br />2つの関数で構成される関数の微分は次のようになります。\\(u=g(x)\\) とおくことにより，関数 \\(f(g(x))\\) の \\(x\\) に関する微分は次のようになります。 \\[\\frac{df(g(x))}{dx} = \\frac{dg(x)}{dx}\\cdot\\frac{df(u)}{du}.\\] あるいは別の表記で \\[\\frac{df(x)}{dx} = f\\\'(g(x))\\cdot g\\\'(x).\\]';
$string['calc_rules_name'] = '計算の法則';
$string['casdisplay'] = 'CAS表示';
$string['cassuitecolerrors'] = 'CASエラー';
$string['castext'] = 'CASテキスト';
$string['castext_debug_header_disp_no_simp'] = '表示されている値';
$string['castext_debug_header_disp_simp'] = '簡略化された表示されている値';
$string['castext_debug_header_key'] = '変数名';
$string['castext_debug_header_value_no_simp'] = '値';
$string['castext_debug_header_value_simp'] = '簡略化された値';
$string['castext_debug_no_vars'] = 'この質問にはデバッグするための問題変数がありません！';
$string['castext_error_header'] = 'テキストコンテンツのレンダリングに失敗しました。';
$string['castext_error_unevaluated'] = 'このテキストコンテンツは評価されませんでした。';
$string['casvalid'] = 'V2';
$string['casvalidatemismatch'] = 'CASは不一致と判定しています';
$string['casvalue'] = 'CASの値';
$string['chat'] = 'CASに送信する';
$string['chat_desc'] = '<a href="{$a->link}">CASチャットのスクリプト</a>により，CASとの接続を確認し，Maximaの文法を試すことができます。';
$string['chatintro'] = 'このページではCASテキストの動作確認を行うことができます。「問題変数」のテキストボックスで変数の定義を行い（これは省略できます），「CASテキスト」のテキストボックスにCASテキストを入力します。例：「問題変数」に「a:x^3」，「CASテキスト」に「@a@を@x@で微分すると@diff(a,x)@となります」';
$string['chattitle'] = 'CASへの接続を確認します';
$string['checkanswertype'] = '解答形式の確認';
$string['checkanswertype_help'] = 'Yesが指定されると，解答形式として指定された形式と異なる形式の解答が提示された場合，解答が受け付けられません。';
$string['checkanswertype_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Check_Type';
$string['clearedthecache'] = 'CASのキャッシュがクリアされました。';
$string['clearingcachefiles'] = 'キャッシュされたSTACKの描画ファイルを消去しています {$a->done}/{$a->total}';
$string['clearthecache'] = 'キャッシュを削除する';
$string['completetestcase'] = '成功するテストケースになるように残りのフォームに入力してください。';
$string['complexno'] = '虚数単位の表記';
$string['complexno_help'] = '記号iとsqrt(-1)の意味と表記を指定します。';
$string['complexno_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#sqrt_minus_one.';
$string['confirmthistestcase'] = '現在のテスト動作を確認します';
$string['createtestcase'] = 'テストケースを作成する';
$string['currentlyselectedvariant'] = '以下に示す変形です';
$string['ddl_badanswer'] = '入力形式に対して解答例は間違った型になっています：<code>{$a}</code>';
$string['ddl_duplicates'] = '解答欄のオプションを生成しているときに，変数の重複が見つかりました。';
$string['ddl_empty'] = 'ドロップダウンリストの選択肢が定義されていません。';
$string['ddl_nocorrectanswersupplied'] = '少なくとも一つの解答例が示されなければなりません。';
$string['ddl_runtime'] = '入力により次のランタイムエラーが引き起こされ，解答することができません。教師に問い合わせてください。';
$string['ddl_unknown'] = 'STACKは<code>{$a}</code>を受け取りましたが，このオプションはリストにはありません。';
$string['debuginfo'] = 'デバッグ情報';
$string['decimals'] = '小数点区切り';
$string['decimals_help'] = '小数点以下の区切り記号とオプションを選択します。';
$string['decimals_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#decimals';
$string['defaultmarkzeroifnoprts'] = 'ポテンシャル・レスポンス・ツリーが定義されていない場合，デフォルトの採点は0です。';
$string['defaultprtcorrectfeedback'] = 'よくできました。正解です！';
$string['defaultprtincorrectfeedback'] = '間違いです。';
$string['defaultprtpartiallycorrectfeedback'] = '部分的に正解です。';
$string['deletetestcase'] = '問題{$a->question}のテストケース {$a->no}を削除する';
$string['deletetestcaseareyousure'] = '本当に問題{$a->question}のテストケース {$a->no}を削除しますか？';
$string['deletethistestcase'] = 'このテストケースを削除する。';
$string['dependenciesintro_desc'] = '<a href="{$a->link}">dependencies</a> チェッカーは, JSXGraphのような依存関係や外部のmaximaコードを含む問題を見つけます。';
$string['deploy'] = '単一変数のデプロイ';
$string['deployduplicateerror'] = 'デプロイされた変形で重複した問題記録が検出されました。各問題記録は一度だけデプロイすることを強くお勧めします。そうでない場合，変形でグループ化するときに，意味のある統計情報を集めるのが難しくなります。 重複する問題記録を持ついくつかの変形を削除することを検討してください。';
$string['deployedprogress'] = '変形をデプロイしています';
$string['deployedvariants'] = 'デプロイされた変形';
$string['deployedvariantsn'] = 'デプロイされた変形 ({$a})';
$string['deployfromlist'] = '現在の全ての変形を削除し,各行の正の整数のシードから一つのずつの変形をデプロイします。';
$string['deployfromlistbtn'] = '変形を削除しリストから再デプロイする';
$string['deployfromlisterror'] = 'あなたの整数リストにエラーが検出されたので、デプロイされた変形に変更は加えられませんでした。';
$string['deployfromlistexisting'] = '現在のシード';
$string['deploymanybtn'] = '次の個数の変形をデプロイする';
$string['deploymanyerror'] = 'ユーザの入力にエラーがあります。"{$a->err}" 個の変形をデプロイできません。';
$string['deploymanynonew'] = '既存の問題記録の再生成回数が多すぎます。';
$string['deploymanynotes'] = 'いくつかの変形を自動的にデプロイしようとしています。新しい問題記録の作成に10度失敗するか，問題テストに1度失敗するとSTACKはそれらを中止します。';
$string['deploymanysuccess'] = '正しく生成，テストされ，デプロイされた新しい変形の個数: {$a->no}';
$string['deployoutoftime'] = '{$a->time}秒経過し制限時間を超過しました。もう一度デプロイしてください。';
$string['deployremoveall'] = 'すべての変形をアンデプロイします。';
$string['deploysystematicbtn'] = 'シードを1から展開する';
$string['deploytestall'] = 'デプロイされた全ての変形に対して，全てのテストケースを実行します（時間がかかります。）';
$string['deploytoomanyerror'] = 'STACKは1回のリクエストで最大100の新しい変形をデプロイできます。変形がデプロイされていません。';
$string['description'] = '説明';
$string['description_err'] = 'ノードの説明が255文字を超えています。';
$string['displaymismatch'] = '[LaTeX の誤り]';
$string['dropdowngotunrecognisedvalue'] = '不正な入力です。';
$string['editingtestcase'] = '問題{$a->question}のテストケース{$a->no}の編集';
$string['editquestioninthequestionbank'] = '<i class="fa fa-pencil"></i> 問題の編集';
$string['editthistestcase'] = 'このテストケースを編集する。';
$string['equiv_AND'] = 'そして';
$string['equiv_ANDOR'] = 'and / or が混乱しています';
$string['equiv_ASSUMEPOSREALVARS'] = '正の実数変数を仮定';
$string['equiv_ASSUMEPOSVARS'] = '正の変数を仮定';
$string['equiv_IMPLIES'] = '意味する';
$string['equiv_LET'] = '許可';
$string['equiv_MISSINGVAR'] = '評価がされていません。';
$string['equiv_NAND'] = '否定論理積';
$string['equiv_NOR'] = '否定論理和';
$string['equiv_NOT'] = '否定する';
$string['equiv_OR'] = 'もしくは';
$string['equiv_SAMEROOTS'] = '（同じ根）';
$string['equiv_XNOR'] = '否定排他的論理和';
$string['equiv_XOR'] = '排他的論理和';
$string['equivfirstline'] = '解答の最初の行が間違っています。';
$string['equivnocomments'] = 'この入力タイプではコンマの使用は認められていません。一行一行に式を記述してください。';
$string['errors'] = 'エラー';
$string['exceptionmessage'] = '{$a}';
$string['expand'] = '展開';
$string['expandtitle'] = '質問カテゴリーを表示する';
$string['expectedanswernote'] = '予想される解答記録';
$string['expectedoutcomes'] = '期待されるポテンシャル・レスポンス・ツリーの出力: [入力に対する]';
$string['expectedpenalty'] = '予想される減点';
$string['expectedscore'] = '予想される採点';
$string['exportthisquestion'] = '<i class="fa fa-download"></i>この問題をMoodle XMLとしてエクスポートする。';
$string['exportthisquestion_help'] = '一つの問題のみ含むMoodle XMLファイルが作成されます。この問題が，開発者に報告したいと思っているSTACKのバグが再現されるものであると考えれば，有効な一つの例となるでしょう。';
$string['fact_sheet_preamble'] = '# ヒント

STACKには，教師が一貫した方法で取り入れたいと思うような有用な素材の「公式シート」が含まれています。 これは「ヒント」システムによって実現されています。

ヒントはどのような[CASテキスト](CASText.md)にも含めることができます。

ヒントを入れるためには，

    [[facts:tag]]

としてください。"tag"は以下のリストから選択することができます。

## 全てのサポートされるシート';
$string['false'] = '偽';
$string['falsebranch'] = '偽の分岐';
$string['falsebranch_help'] = 'これらのフィールドの値により，評価関数が1以外の値を返したときの処理が決まります。
<h3>計算と点数</h3>
点数の調整方法です．「=」は特定の点数を与えます。「+ / -」は現在の点数に加点・減点を行います。

<h3>減点</h3>
アダプティブモード，インタラクティブモードではここに指定した減点が蓄積されます。

<h3>次のノード</h3>
次にどのノードで評価するか，あるいは終了するかを指定します。

<h3>解答記録</h3>
学生の解答履歴をレポートするためのタグです．ポテンシャル・レスポンス・ツリーをたどった経路と評価関数の出力を記録します。解答記録は自動的に生成されますが，意味があるものに変更することができます．';
$string['feedbackfromprtx'] = '{$a}からのフィードバック';
$string['feedbackstyle'] = 'フィードバックのスタイル';
$string['feedbackstyle0'] = '形成的';
$string['feedbackstyle1'] = '標準';
$string['feedbackstyle2'] = '簡易';
$string['feedbackstyle3'] = '記号のみ';
$string['feedbackstyle_help'] = 'どのようにポテンシャル・レスポンス・ツリーのフィードバックが表示されるかを制御';
$string['feedbackstyle_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Potential_response_trees.md';
$string['feedbackvariables'] = 'フィードバック変数';
$string['feedbackvariables_help'] = 'フィードバック変数によって，ポテンシャル・レスポンス・ツリーをたどる前に、入力と問題変数を処理することができます。ここで定義されたフィードバック変数は、このポテンシャル・レスポンス・ツリー内のどこでも使うことができます。';
$string['feedbackvariables_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Variables.md#Feedback_variables';
$string['fieldshouldnotcontainplaceholder'] = '{$a->field} はどの[[{$a->type}:...]] も含みません。';
$string['fixdollars'] = '$の修正';
$string['fixdollars_help'] = '<code>$...$</code> や <code>$$...$$</code>によるTeXの表記をコピー・ペーストしたり入力したりするときに，このオプションは便利です。保存する時に，適切な記号に置き換えられます。';
$string['fixdollarslabel'] = '保存する時に，<code>$...$</code>, <code>$$...$$</code>, <code>@...@</code> を，それぞれ <code>\\(...\\)</code>, <code>\\[...\\]</code>, <code>{@...@}</code>に置き換えます。';
$string['forbiddendoubledollars'] = 'TeXによる数式のインライン表示には<code>\\(...\\)</code>を，ディスプレイ表示には<code>\\[...\\]</code>を使用してください。<code>$...$</code>や<code>$$...$$</code>は許可されていません。これを自動的に修正するためのオプションがあります。。';
$string['forbidfloat'] = '浮動小数点数の禁止';
$string['forbidfloat_help'] = 'Yesが指定されると，浮動小数点数（実数）で入力された解答は禁止されます。';
$string['forbidfloat_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Forbid_Floats';
$string['forbidwords'] = '禁止ワード';
$string['forbidwords_help'] = '学生の解答入力時に禁止する文字列を，カンマで区切られたリストとして指定します。';
$string['forbidwords_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Forbidden_Words';
$string['generalerrors'] = '問題にエラーがあります。下記をよくご確認ください。';
$string['generalfeedback'] = '全般的なフィードバック';
$string['generalfeedback_help'] = '全般的なフィードバックはCASテキストであり，模範解答として学生が解答した後に表示されます。学生の解答に対して与えられるフィードバックとは異なり，全ての学生に対して同じテキストが表示されます。変形内で使用されている問題変数に応じた表示にすることは可能です．';
$string['generalfeedback_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/CASText.md#general_feedback';
$string['greek_alphabet_fact'] = '||||
|--- |--- |--- |
|大文字, \\(\\quad\\)|小文字, \\(\\quad\\)|名前|
|\\(A\\)|\\(\\alpha\\)|アルファ|
|\\(B\\)|\\(\\beta\\)|ベータ|
|\\(\\Gamma\\)|\\(\\gamma\\)|ガンマ|
|\\(\\Delta\\)|\\(\\delta\\)|デルタ|
|\\(E\\)|\\(\\epsilon\\)|イプシロン|
|\\(Z\\)|\\(\\zeta\\)|ゼータ|
|\\(H\\)|\\(\\eta\\)|イータ|
|\\(\\Theta\\)|\\(\\theta\\)|シータ|
|\\(K\\)|\\(\\kappa\\)|カッパ|
|\\(M\\)|\\(\\mu\\)|ミュー|
|\\(N\\)|\\( u\\)|ニュー|
|\\(\\Xi\\)|\\(\\xi\\)|グザイ|
|\\(O\\)|\\(o\\)|オミクロン|
|\\(\\Pi\\)|\\(\\pi\\)|\\(\\Pi\\) |
|\\(I\\)|\\(\\iota\\)|イオタ|
|\\(P\\)|\\(\\rho\\)|ロー|
|\\(\\Sigma\\)|\\(\\sigma\\)|シグマ|
|\\(\\Lambda\\)|\\(\\lambda\\)|ラムダ|
|\\(T\\)|\\(\\tau\\)|タウ|
|\\(\\Upsilon\\)|\\(\\upsilon\\)|ウプシロン|
|\\(\\Phi\\)|\\(\\phi\\)|ファイ|
|\\(X\\)|\\(\\chi\\)|カイ|
|\\(\\Psi\\)|\\(\\psi\\)|プサイ|
|\\(\\Omega\\)|\\(\\omega\\)|オメガ|';
$string['greek_alphabet_name'] = 'ギリシャ文字';
$string['healthautomaxopt'] = '最適化されたMaximaイメージを自動的に作成します。';
$string['healthautomaxopt_failed'] = '最適化されたMaximaイメージの作成に失敗しました : [{$a->errmsg}]';
$string['healthautomaxopt_nolisp'] = 'LISPのバージョンを特定できなかったので，Maximaイメージが自動的には作成されませんでした。';
$string['healthautomaxopt_nolisprun'] = 'lisp.runを自動的に見つけることができませんでした。コマンドラインから"sudo updatedb"を実行し，最適化のためのドキュメントを参照してください。';
$string['healthautomaxopt_notok'] = 'Maximaのイメージが自動的には作成できませんでした。';
$string['healthautomaxopt_ok'] = 'Maximaのイメージが<tt>{$a->command}</tt>に作成されました。';
$string['healthautomaxopt_succeeded'] = '最適化されたMaximaイメージの作成に成功しました';
$string['healthautomaxoptintro'] = '最高のパフォーマンスを得るには，LinuxマシンでMaximaを最適化する必要があります。プラグインの「ヘルスチェック」ページを使用し，この問題に関するドキュメントを参照してください。';
$string['healthcheck'] = 'STACK動作確認';
$string['healthcheck_desc'] = '<a href="{$a->link}">動作確認スクリプト</a>により，STACKの全ての機能が正しく動作していることを検証することができます。';
$string['healthcheckcache_db'] = 'CASの演算結果がデータベースにキャッシュされています。';
$string['healthcheckcache_none'] = 'CASの結果はキャッシュされません。';
$string['healthcheckcache_otherdb'] = 'CASの結果が別のデータベースにキャッシュされています。';
$string['healthcheckcachestatus'] = 'キャッシュは {$a} を含んでいます。';
$string['healthcheckconnect'] = 'CASへ接続しています。';
$string['healthcheckconnectintro'] = '以下のCASテキストを評価しています。';
$string['healthcheckconnectunicode'] = 'CASにユニコードを送信しようとしています。';
$string['healthcheckcreateimage'] = 'Maximaのイメージを作成';
$string['healthcheckfail'] = 'ヘルスチェックで重大な問題が検出されました。 詳細については、以下の診断情報をお読みください。';
$string['healthcheckfaildocs'] = '詳しい注意事項やトラブルシューティングのアドバイスは，<a href="{$a->link}">インストール > インストールのテスト</a>のドキュメントに記載されています。';
$string['healthcheckfilters'] = '<a href="{$a->url}">フィルターの利用</a>のページで {$a->filter} が利用可能になります。';
$string['healthchecklatex'] = 'LaTeXが正しく変換されているかチェックしています。';
$string['healthchecklatexintro'] = 'STACKではLaTeXを解釈するので，教師はLaTeXを使って問題を作成することができます。LaTeXはMoodleのフィルターにより変換されます。LaTeXのデスプレイ表示とインライン表示の例を以下に表示します。あなたのブラウザで正しく表示されているはずです。表示の問題があれば，それはMoodleのフィルター設定の問題であり，STACKの問題ではありません。STACKでは$あるいは$$のみを使用することができますが，問題の作成においては他の表記を使います。';
$string['healthchecklatexmathjax'] = 'STACKはMoodleのMathJaxフィルターに依存しています。別の方法は、JavaScriptコードをMoodleの追加のHTMLに追加することです。このオプションの詳細については、STACKインストールドキュメントを参照してください。';
$string['healthcheckmathsdisplaymethod'] = '数式の表示には{$a}が使われています。';
$string['healthcheckmaximaavailable'] = 'このサーバーで利用可能なMaximaのバージョン。';
$string['healthcheckmaximalocal'] = 'maximalocalファイルの内容';
$string['healthchecknombstring'] = 'STACK v4.3とそれ以降はPHPモジュール mbstring が必要ですが，見つかりません。インストールドキュメントを参照してください。';
$string['healthcheckpass'] = 'ヘルスチェックは何の問題も見つかりませんでした。 しかし，以下の詳細をよく読んでください。 すべての問題が自動的に検出されるわけではありません。';
$string['healthcheckplots'] = 'グラフ描画';
$string['healthcheckplotsintro'] = '二つの異なった描画がなければなりません。同一の描画の場合，描画ファイルのネーミングにエラーが生じます。エラーがないにもかかわらずグラフが描画されない場合，次のいずれかが参考になります。(i)テンポラル・ディレクトリの読み出し許可をチェックしてください。(ii)GNUplotのオプションを変更してください。ただし，現在のところオプション変更のためのWebインターフェースはありません。';
$string['healthcheckproxysettings'] = '<strong>警告:</strong> Moodleはプロキシサーバを使用するように設定されていますが,Maximaへの呼び出しはこれをバイパスしています。サーバ "から "サーバ(プロキシ経由) "にプラットフォームを切り替えて，プロキシサーバ経由でコールをルーティングするか，$CFG->proxybypassにmaximaサーバを追加して，バイパスを明示的にしてください。あなたが変更しなくても，今のところSTACKは機能しますが，Moodleのプロキシ設定は後のバージョンで強制されます。';
$string['healthchecksamplecas'] = '{@ x^4/(1+x^4) @} の微分は,\\[ \\frac{d}{dx} \\frac{x^4}{1+x^4} = {@ diff(x^4/(1+x^4),x) @}. \\]のように表示されます。';
$string['healthchecksamplecasunicode'] = 'ユニコードに対応しているか確認してください：{@unicode(8704)@}.と表示されるはずです。';
$string['healthchecksampledisplaytex'] = '\\[\\sum_{n=1}^\\infty \\frac{1}{n^2} = \\frac{\\pi^2}{6}.\\]';
$string['healthchecksampleinlinetex'] = '\\(
\\sum_{n=1}^\\infty \\frac{1}{n^2} = \\frac{pi^2}{6}
\\)';
$string['healthchecksampleplots'] = '2つのグラフの例。 {@plot([x^4/(1+x^4),diff(x^4/(1+x^4),x)],[x,-3,3])@} {@plot([sin(x),x,x^2,x^3],[x,-3,3],[y,-3,3],grid2d)@} 通常の軸で，3つ目のプロットがここに表示されます。 {@plot([x,2*x^2-1,x*(4*x^2-3),8*x^4-8*x^2+1,x*(16*x^4-20*x^2+5),(2*x^2-1)*(16*x^4-16*x^2+1)],[x,-1,1],[y,-1.2,1.2],[box, false],[yx_ratio, 1],[axes, solid],[xtics, -3, 1, 3],[ytics, -3, 1, 3],[size,250,250])@}';
$string['healthchecksstacklibrariesworking'] = 'Maximaのオプションライブラリ';
$string['healthchecksstacklibrariesworkingfailed'] = '以下のオプションの maxima ライブラリがロードされないようです：{$a->err}. Maximaイメージを再作成してみてください。';
$string['healthchecksstacklibrariesworkingok'] = 'Maximaのオプションライブラリは正しくロードされているようです。';
$string['healthchecksstacklibrariesworkingsession'] = 'オプションのmaximaライブラリをチェックすると，以下のエラーが発生しました：{$a->err}';
$string['healthchecksstackmaximanotupdated'] = 'STACKは正常にアップデートされませんでした。<a href="{$a}">System administration -> Notifications page</a>.を確認してください。';
$string['healthchecksstackmaximatooold'] = 'バージョンが古すぎます。';
$string['healthchecksstackmaximaversion'] = 'Maximaのバージョン';
$string['healthchecksstackmaximaversionfixoptimised'] = '<a href="{$a->url}">最適化されたMaxima実行ファイルの再構築</a>を行ってください。';
$string['healthchecksstackmaximaversionfixserver'] = 'MaximaPoolサーバでMaximaのコードを再構築してください。';
$string['healthchecksstackmaximaversionfixunknown'] = 'それがどのようにして起こったのか不明です。この問題は自分で解決する必要があるでしょう。CASのキャッシュを消去して始めてください。';
$string['healthchecksstackmaximaversionmismatch'] = '使用されているSTACK-Maximaライブラリのバージョン ({$a->usedversion}) はSTACK問題タイプで必要とされているバージョン ({$a->expectedversion}) と一致していません。{$a->fix}';
$string['healthchecksstackmaximaversionok'] = '正しいSTACK-Maximaライブラリのバージョンが使われています。({$a->usedversion})';
$string['healthunabletolistavail'] = '「プラットフォームの種類」が"linux"に設定されていないので，可能なMaximaのバージョンをリストアップすることができません。';
$string['healthuncached'] = 'CASをキャッシュしません';
$string['healthuncachedintro'] = '現在のキャッシュの設定にかかわらず，このセクションは常にCASに命令を送ります。これは，CASへの接続が本当に現在動作しているかを確認するために必要です。';
$string['healthuncachedstack_CAS_calculation'] = '期待されるCASの計算：{$a->expected}。実際のCASの計算：{$a->actual}。';
$string['healthuncachedstack_CAS_not'] = 'CASは期待したとおりデータを返しましたが，エラーがありました。';
$string['healthuncachedstack_CAS_ok'] = 'CASは期待したとおりデータを返しました。現在CASと接続しています。';
$string['healthuncachedstack_CAS_trigsimp'] = '関数 "trigsimp "が動作しません。 おそらく，maxima-shareパッケージもインストールする必要があると思われます。';
$string['healthuncachedstack_CAS_version'] = '期待されるMaximaのバージョン："{$a->expected}"。実際のMaximaのバージョン：{$a->actual}';
$string['healthuncachedstack_CAS_versionnotchecked'] = 'あなたはMaximaの"デフォルト"バージョンを選択したので，Maximaのバージョンの確認は行われていません。実際に使われているバージョンは{$a->actual}です。';
$string['hyp_functions_fact'] = '双曲線関数は三角関数と同様の性質を持っていますが，次のように指数関数を使って表すことができます。\\[ \\cosh(x) = \\frac{e^x+e^{-x}}{2}, \\qquad \\sinh(x)=\\frac{e^x-e^{-x}}{2} \\] \\[ \\tanh(x) = \\frac{\\sinh(x)}{\\cosh(x)} = \\frac{{e^x-e^{-x}}}{e^x+e^{-x}} \\] \\[ {\\rm sech}(x) ={1\\over \\cosh(x)}={2\\over {\\rm e}^x+{\\rm e}^{-x}}, \\qquad {\\rm cosech}(x)= {1\\over \\sinh(x)}={2\\over {\\rm e}^x-{\\rm e}^{-x}} \\] \\[ {\\rm coth}(x) ={\\cosh(x)\\over \\sinh(x)} = {1\\over {\\rm tanh}(x)} ={{\\rm e}^x+{\\rm e}^{-x}\\over {\\rm e}^x-{\\rm e}^{-x}}\\]';
$string['hyp_functions_name'] = '双曲線関数';
$string['hyp_identities_fact'] = '双曲線関数と三角関数の類似性が次の関係式により明らかです。
 \\[{\\rm e}^x=\\cosh(x)+\\sinh(x), \\quad {\\rm e}^{-x}=\\cosh(x)-\\sinh(x)\\]
  \\[\\cosh^2(x) -\\sinh^2(x) = 1\\]
  \\[1-{\\rm tanh}^2(x)={\\rm sech}^2(x)\\]
  \\[{\\rm coth}^2(x)-1={\\rm cosech}^2(x)\\]
  \\[\\sinh(x\\pm y)=\\sinh(x)\\ \\cosh(y)\\ \\pm\\ \\cosh(x)\\ \\sinh(y)\\]
  \\[\\cosh(x\\pm y)=\\cosh(x)\\ \\cosh(y)\\ \\pm\\ \\sinh(x)\\ \\sinh(y)\\]
  \\[\\sinh(2x)=2\\,\\sinh(x)\\cosh(x)\\]
  \\[\\cosh(2x)=\\cosh^2(x)+\\sinh^2(x)\\]
  \\[\\cosh^2(x)={\\cosh(2x)+1\\over 2}\\]
  \\[\\sinh^2(x)={\\cosh(2x)-1\\over 2}\\]';
$string['hyp_identities_name'] = '双曲線関数の公式';
$string['hyp_inverse_functions_fact'] = '\\[\\cosh^{-1}(x)=\\ln\\left(x+\\sqrt{x^2-1}\\right) \\quad x\\geq 1 \\mbox{のとき} \\] \\[\\sinh^{-1}(x)=\\ln\\left(x+\\sqrt{x^2+1}\\right)\\] \\[\\tanh^{-1}(x) = \\frac{1}{2}\\ln\\left({1+x\\over 1-x}\\right) \\quad  -1< x < 1 \\mbox{のとき}\\]';
$string['hyp_inverse_functions_name'] = '逆双曲線関数';
$string['illegalcaschars'] = 'CASの入力では@，$， \\ は使用できません。';
$string['inputdisplayed'] = '表示';
$string['inputentered'] = '入力値';
$string['inputexpression'] = '入力テスト';
$string['inputextraoptions'] = 'その他のオプション';
$string['inputextraoptions_help'] = 'いくつかの解答形式では正常に処理されるためにオプションが必要です。CASの表示で入力してください。';
$string['inputextraoptions_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Extra options';
$string['inputheading'] = '解答欄: {$a}';
$string['inputinvalidparamater'] = '不正なパラメータです';
$string['inputlanguageproblems'] = '言語間で，入力と確認のタグに不一致があります。';
$string['inputname'] = '解答の名前';
$string['inputnameform'] = '入力名は文字から始まらなければなりません。\'{$a}\' は許可されていません。';
$string['inputnamelength'] = '解答の名前は18文字を超えてはいけません。\'{$a}\' は長すぎます。';
$string['inputopterr'] = 'オプション<code>{$a->opt}</code>の値は<code>{$a->val}</code>のように与えることはできません。';
$string['inputoptionunknown'] = 'この入力では\'{$a}\'オプションはサポートされていません。';
$string['inputremovedconfirm'] = 'この問題から解答欄を本当に削除します。';
$string['inputremovedconfirmbelow'] = '解答欄 \'{$a}\' が削除されました。以下で確認してください。';
$string['inputs'] = '解答';
$string['inputstatus'] = '状態';
$string['inputstatusname'] = '空白';
$string['inputstatusnameinvalid'] = '無効';
$string['inputstatusnamescore'] = '採点';
$string['inputstatusnamevalid'] = '有効';
$string['inputtest'] = '解答テスト';
$string['inputtype'] = '解答形式';
$string['inputtype_help'] = '解答形式を指定します。';
$string['inputtype_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md';
$string['inputtypealgebraic'] = '数式';
$string['inputtypeboolean'] = '○/×';
$string['inputtypecheckbox'] = 'チェックボックス';
$string['inputtypedropdown'] = 'ドロップダウンリスト';
$string['inputtypeequiv'] = '同値変形';
$string['inputtypegeogebra'] = 'GeoGebra';
$string['inputtypematrix'] = '行列';
$string['inputtypenotes'] = 'ノート';
$string['inputtypenumerical'] = '数値';
$string['inputtyperadio'] = 'ラジオボタン';
$string['inputtypesinglechar'] = '単一文字';
$string['inputtypestring'] = '文字列';
$string['inputtypetextarea'] = 'テキストエリア';
$string['inputtypeunits'] = '単位';
$string['inputtypevarmatrix'] = '可変サイズの行列';
$string['inputvalidatorerr'] = 'バリデータ関数の名前は，有効な最大値識別子でなければいけません。';
$string['inputvalidatorerrcouldnot'] = 'オプションのバリデータでMaximaの内部エラーが生じました。';
$string['inputvalidatorerrors'] = 'オプションのバリデータはエラー {$a->err} を返します。';
$string['inputwillberemoved'] = 'この解答は問題テキストで参照されていません。今問題を保存すると，この解答に関するデータが失われます。本当に保存してよろしいですか？あるいは，問題テキストを編集して，\'[[input:{$a}]]\' と \'[[validation:{$a}]]\'を戻してください。';
$string['insertspaces'] = '空白に対して*を自動挿入する';
$string['insertspacesfunctions'] = 'ユーザ定義関数がないと仮定して，積を意味するところや空白に*を自動挿入する';
$string['insertspacesfunctionssingle'] = '変数名が1文字と仮定し，さらにユーザ定義関数がないと仮定して，積を意味するところや空白に*を自動挿入する';
$string['insertstars'] = '*を自動挿入する';
$string['insertstars_help'] = 'このオプションで，積を意味するところに「*」を挿入するかどうかについて様々な指定が可能になります。詳細はドキュメントを参照してください。';
$string['insertstars_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Insert_Stars';
$string['insertstarsassumesinglechar'] = '変数名が1文字と仮定して*を自動挿入する';
$string['insertstarsno'] = '*を自動挿入しない';
$string['insertstarsspaces'] = '積を意味するところや空白に*を自動挿入する';
$string['insertstarsspacessinglechar'] = '変数名が1文字と仮定して，積を意味するところや空白に*を自動挿入する';
$string['insertstarsyes'] = '積を意味するところに*を自動挿入する';
$string['inversetrig'] = '逆三角関数';
$string['inversetrig_help'] = 'CASの出力で逆三角関数をどのように表示するかを指定します。';
$string['inversetrig_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#inverse_trig';
$string['irred_Q_commonint'] = '共通因子をくくり出す必要があります。';
$string['irred_Q_optional_fac'] = '{$a->m0}は因数分解できますが、その必要はありません。';
$string['isbroken'] = '壊れた状態のまま問題を保存する';
$string['isbrokenlabel'] = '問題を，壊れた状態とマークします．これにより，ほとんどの場合エラーが残っていても保存できる一方で，学生には表示されません．';
$string['languageproblemsexist'] = 'あなたの問題には言語的な誤りが含まれている可能性があります。';
$string['languageproblemsextra'] = '{$a->field}フィールドは次の言語となっており，問題テキストではありません：{$a->langs}';
$string['languageproblemsmissing'] = '言語タグ {$a->lang} が以下で不足しています：{$a->missing}';
$string['logicsymbol'] = '論理記号';
$string['logicsymbol_help'] = 'CAS出力で論理記号を表示する方法を制御します。';
$string['logicsymbol_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#logicsymbol';
$string['logicsymbollang'] = '言語';
$string['logicsymbolsymbol'] = '記号';
$string['matrixparens'] = '行列の括弧のデフォルトの形式';
$string['matrixparens_help'] = '行列の括弧の形式を設定してください。';
$string['matrixparens_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/CAS/Matrix.md#matrixparens';
$string['mbstringrequired'] = 'STACKではMBSTRINGライブラリのインストールが必要です。';
$string['multcross'] = 'クロス (×)';
$string['multdot'] = 'ドット (・)';
$string['multiplicationsign'] = '積の記号';
$string['multiplicationsign_help'] = '積の演算子の表記を定義します。';
$string['multiplicationsign_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#multiplication';
$string['multonlynumbers'] = '数字のみ';
$string['mustverify'] = '入力した解答の表示';
$string['mustverify_help'] = '入力した数式が意図したものかどうかを確認するために，採点される前に，入力した数式を表示する2ステップ方式をとるかどうかを指定します。文法エラーは常に指摘されます。';
$string['mustverify_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Student_must_verify';
$string['mustverifyshowvalidation'] = '学生に，入力した数式の文法の確認結果を表示しないで，入力した数式の2段階確認を求めることはできません。このような設定は学生に実行不可能なことを求めることになります。';
$string['namealreadyused'] = 'すでにこの名前は使用されています。';
$string['newnameforx'] = '\'{$a}\'の新しい名前';
$string['next'] = '次のノード';
$string['nodeaddnum'] = '追加するノードの個数（最大9）';
$string['nodehelp'] = 'ポテンシャル・レスポンス・ツリーのノード';
$string['nodehelp_help'] = '###「評価関数」は2つの数式を比較して，ある数学的な条件を満たしているかどうかを判定します。

###「評価対象」は評価関数の最初の引数で，通常は学生の解答ですが，問題変数やフィードバック変数を含む，任意の数式も使用できます。

###「評価基準」は評価関数の2番目の引数で，通常は正解ですが，問題変数やフィードバック変数を含む，任意の数式も使用できます。

###「オプション」は評価関数に必要な場合に指定します。

###「抑制」は評価関数からのフィードバックを表示しないようにするために指定します。フィードバックのフィールドはこのオプションにより影響を受けることはありません。';
$string['nodeloopdetected'] = 'ポテンシャル・レスポンス・ツリーのループができます。';
$string['nodenotused'] = 'どのノードからもこのノードにリンクがありません。';
$string['nodex'] = 'ノード {$a}';
$string['nodexdelete'] = 'ノード {$a}の削除';
$string['nodexfalsefeedback'] = 'ノード\'{$a}\'の偽のフィードバック';
$string['nodextruefeedback'] = 'ノード\'{$a}\'の真のフィードバック';
$string['nodexwhenfalse'] = '偽の場合のノード{$a}';
$string['nodexwhentrue'] = '真の場合のノード{$a}';
$string['nonempty'] = '空白にできません。';
$string['noprtsifnoinputs'] = '解答を求めない問題はポテンシャル・レスポンス・ツリーを作成することはできません。';
$string['nosemicolon'] = 'ここではMaxima の式をセミコロンで終わらせてはいけません。';
$string['notanswered'] = '(選択をクリアする)';
$string['notavalidname'] = '正しい名前ではありません。';
$string['notestcasesyet'] = 'テストケースは追加されませんでした。';
$string['numericalinputdp'] = '小数点以下\\( {$a} \\)桁で表してください。';
$string['numericalinputmaxdp'] = '高々，小数点以下\\( {$a} \\)桁で表してください。';
$string['numericalinputmaxsf'] = '有効数字\\( {$a} \\)桁で表してください。';
$string['numericalinputmindp'] = '少なくとも，小数点以下\\( {$a} \\)桁で表してください。';
$string['numericalinputminmaxerr'] = '入力された最小桁数が，最大桁数を超えています！';
$string['numericalinputminsf'] = '少なくとも有効数字\\( {$a} \\)桁で表してください。';
$string['numericalinputminsfmaxdperr'] = '小数点以下の桁数と有効数字の桁数を同時に指定しないでください。';
$string['numericalinputmustfloat'] = '浮動小数点数を入力してください。';
$string['numericalinputmustint'] = '整数を入力してください。';
$string['numericalinputmustnumber'] = '数値を入力してください。';
$string['numericalinputmustrational'] = '分数か有理数で入力してください。';
$string['numericalinputoptboolerr'] = 'オプション<code>{$a->opt}</code> は論理型でなければなりませんが，実際には<code>{$a->val}</code>となっています。';
$string['numericalinputoptinterr'] = 'オプション<code>{$a->opt}</code> は整数型でなければなりませんが，実際には<code>{$a->val}</code>となっています。';
$string['numericalinputsf'] = '有効数字\\( {$a} \\)で表してください。';
$string['numericalinputvarsforbidden'] = '変数を含まない，数値で解答してください。';
$string['options'] = 'オプション';
$string['options_short'] = 'オプション';
$string['overallresult'] = '全体の結果';
$string['penalty'] = '減点';
$string['penalty_help'] = '部分点を与える場合，ポテンシャル・レスポンス・ツリーの結果に応じてここで指定した点数を減点していきます。';
$string['penalty_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Feedback.md';
$string['penaltyerror'] = '減点は0から1の間の数値としてください。';
$string['penaltyerror2'] = '減点は空欄か，0から1の間の数値としてください。';
$string['phpcasstring'] = 'PHP出力';
$string['phpsuitecolerror'] = 'PHPエラー';
$string['phpvalid'] = 'V1';
$string['phpvalidatemismatch'] = 'PHPは不一致と判定しています';
$string['pleaseananswerallparts'] = '全ての問題に解答してください。';
$string['pleasecheckyourinputs'] = 'あなたの入力した数式が期待したものであるか確認してください。';
$string['pluginname'] = 'STACK';
$string['pluginname_help'] = 'STACKは数学オンラインテスト・評価システムです。';
$string['pluginnameadding'] = 'STACK問題の追加';
$string['pluginnameediting'] = 'STACK問題の編集';
$string['pluginnamesummary'] = 'STACKはMoodleにおいて数式で解答する形式の問題を可能にします。数式処理システムを用いて，解答の正誤評価や解答に応じた様々なフィードバックの提示を実現します。';
$string['privacy:metadata'] = 'STACK問題タイププラグインには個人情報は保存されません。';
$string['prtcorrectfeedback'] = '正解の場合のフィードバック';
$string['prtheading'] = 'ポテンシャル・レスポンス・ツリー: {$a}';
$string['prtincorrectfeedback'] = '不正解の場合のフィードバック';
$string['prtmustbesetup'] = '問題を保存する前にポテンシャル・レスポンス・ツリーを設定しなければなりません。';
$string['prtname'] = 'ポテンシャル・レスポンス・ツリー名';
$string['prtnamelength'] = 'ポテンシャル・レスポンス・ツリーの名前は18文字を超えてはいけません。\'{$a}\'は長過ぎます。';
$string['prtnodesheading'] = 'ポテンシャル・レスポンス・ツリーのノード ({$a})';
$string['prtpartiallycorrectfeedback'] = '部分的正解の場合のフィードバック';
$string['prtremovedconfirm'] = '問題からこのポテンシャル・レスポンス・ツリーを本当に削除します。';
$string['prtremovedconfirmbelow'] = 'ポテンシャル・レスポンス・ツリー\'{$a}\'が削除されました。以下を確認してください。';
$string['prtruntimeerror'] = 'ポテンシャル・レスポンス・ツリー{$a->prt}が以下のランタイムエラーを引き起こしました。{$a->error}';
$string['prtruntimepenalty'] = '減点が数値に十分に評価されていません（変数名を確認してください）';
$string['prtruntimescore'] = '点数が数値に十分に評価されていません（変数名を確認してください）';
$string['prts'] = 'ポテンシャル・レスポンス・ツリー';
$string['prtwillbecomeactivewhen'] = '解答欄 {$a} に解答が行われたときに，このポテンシャル・レスポンス・ツリーは有効になります。';
$string['prtwillberemoved'] = 'このポテンシャル・レスポンス・ツリーは問題テキストや個別フィードバックから参照されていません。今この問題を保存すると，ポテンシャル・レスポンス・ツリーに関するデータが失われます。本当に保存してもよろしいですか？あるいは，問題テキストや個別フィードバックを編集して，\'[[feedback:{$a}]]\'を戻してください。';
$string['qm_error'] = 'あなたの解答には ? マークが含まれていますが，それは許可されていません。';
$string['questionbroken'] = 'この問題は，壊れた状態と編集中にマークされました．';
$string['questiondescription'] = '問題記述';
$string['questiondescription_help'] = '問題記述はCASテキストで記述されます。問題記述の目的は,問題について議論するための有意義な場所を提供することです。学生は問題記述を利用できません。';
$string['questiondoesnotuserandomisation'] = 'この問題はランダム化されていません。';
$string['questionnotdeployedyet'] = 'この問題では変形がデプロイされていません。';
$string['questionnote'] = '問題記録';
$string['questionnote_help'] = '問題記録はCASTextです。問題記録の目的は,個々のランダムな問題を区別することです。問題記録が同じである場合に限り,2つのランダム化された問題は同じものとみなされます。後の解析のために,意味のある問題記録を残すことが重要です。';
$string['questionnote_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Question_note.md';
$string['questionnote_missing'] = '問題記録が空欄です。意味のある問題記録（要約）を追加してください。';
$string['questionnotempty'] = '問題変数にrand() が用いられている場合，問題記録は空欄にはできません。問題記録は個々のランダムな問題を区別するために用いられます';
$string['questionpreview'] = '問題のプレビュー';
$string['questionsimplify'] = '簡略化（問題全体）';
$string['questionsimplify_help'] = '問題全体でMaximaのグローバルな"simp"変数を設定します。';
$string['questionsimplify_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/CAS/Simplification.md';
$string['questiontestempty'] = '空の問題テストは許可されていません！';
$string['questiontests'] = '問題のテスト';
$string['questiontestsdefault'] = '（デフォルト）';
$string['questiontestsfor'] = 'シード{$a}による問題テスト';
$string['questiontestspass'] = '全ての問題テストがパスしました。';
$string['questiontext'] = '問題文';
$string['questiontext_help'] = '学生が実際に目にする問題文でCASテキストで入力します。解答欄と解答確認欄を入力しなければなりません。入力例：[[input:ans1]] [[validation:ans1]]';
$string['questiontext_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/CASText.md#question_text';
$string['questiontextfeedbacklanguageproblems'] = '言語間でフィードバックタグに不一致があります';
$string['questiontextfeedbackonlycontain'] = '個別フィードバックをもつ問題文に \'{$a}\' を1つだけ含むことができます。';
$string['questiontextlanguages'] = 'あなたの問題で見つかった言語タグ：{$a}';
$string['questiontextmustcontain'] = '問題文には \'{$a}\' が含まれていなければなりません。';
$string['questiontextnonempty'] = '問題文は空白であってはいけません。';
$string['questiontextonlycontain'] = '問題文に \'{$a}\' を1つだけ含むことができます。';
$string['questiontextplaceholderswhitespace'] = '空白文字を含むことができません。\'{$a}';
$string['questionvalue'] = '比重';
$string['questionvaluepostive'] = '比重は正でなければなりません。';
$string['questionvariables'] = '問題変数';
$string['questionvariables_help'] = 'このフィールドではCAS変数を定義および操作することができます。ここで定義された変数は，他のフィールドでも使用できます。';
$string['questionvariables_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Variables.md#Question_variables';
$string['questionvariablevalues'] = '問題変数の値';
$string['questionwarnings'] = '問題の警告';
$string['questionwarnings_help'] = '問題の警告は対処した方がよいかもしれませんが，明らかなエラーではない問題です。';
$string['quiet'] = '抑制';
$string['quiet_help'] = '「はい」と設定された場合，評価関数によって自動的に生成されるフィードバックは抑制され，学生には表示されません。このオプションは，フィードバックのフィールドには影響を与えません。';
$string['quiet_icon_false'] = '<span style="font-size: 1.25em; color:blue;"><i class="fa fa-commenting-o"></i></span>';
$string['quiet_icon_true'] = '<span style="font-size: 1.25em; color:red;"><i class="fa fa-microphone-slash" aria-hidden="true"></i></span>';
$string['renamequestionparts'] = '問題の一部の名前を変更します';
$string['replacedollarscount'] = 'このカテゴリはSTACKの問題{$a}を含みます。';
$string['replacedollarsin'] = '{$a}の数式範囲指定区切り文字を修正しました。';
$string['replacedollarsindex'] = 'STACKの問題の内容';
$string['replacedollarsindexintro'] = 'これらのどのリンクをクリックしても$を含む問題をプレビューでき，自動的に修正します。

リンクのいずれかをクリックすると，古いスタイルの数学区切り文字の問題を表示して自動的に修正します。 1つのコンテキストで質問が多すぎる（数千）場合は，出力の量がWebブラウザーを圧迫する可能性があります。その場合は，URLにpreview = 0パラメーターを追加して再試行してください。';
$string['replacedollarsindextitle'] = '問題文中の $ を置き換えます。';
$string['replacedollarsnoproblems'] = '問題のある$は見つかりませんでした。';
$string['replacedollarstitle'] = '{$a} 内の $ を置き換えます。';
$string['requirelowestterms'] = '約分を要求する';
$string['requirelowestterms_help'] = 'Yesが指定されると，分数は約分されていなければなりません。もし約分されていなければ解答は受け付けられません。';
$string['requirelowestterms_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Require_lowest_terms';
$string['runquestiontests'] = '問題のテストとデプロイ';
$string['runquestiontests_alert'] = '問題にはテストか変形が不足しています。';
$string['runquestiontests_auto'] = '教師の入力を想定したテストケースを自動的に1つ追加すると満点になります。解答記録をよく確認してください。';
$string['runquestiontests_autoprompt'] = '教師の入力が満点を取ったと仮定してテストケースを追加します。';
$string['runquestiontests_help'] = '問題のテストとデプロイでは問題単体をテストする問題テストを実行し,動作が教師の意図と一致することを確認します。また,デプロイされた問題により学生が見るランダムバージョンが問題テストに対して事前にテストされていることが確認できます。これらは信頼できる問題の作成およびテストを支援するツールであり,学生が問題を使用するすべての場合で使用する必要があります。問題のテストとデプロイにはその他多くのSTACK固有の機能があります。';
$string['runtimeerror'] = 'この問題で予期しない内部エラーが発生しました。';
$string['runtimefielderr'] = 'フィールド ""{$a->field}"" により次のエラーが生じました： {$a->err}';
$string['sans'] = '評価対象';
$string['sans_help'] = 'これは評価関数の第1引数で，通常，学生の解答ですが，に任意のCASテキストを指定することができ，問題変数，フィードバック変数に依存したものも可能です。';
$string['sans_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Answer_Tests/index.md';
$string['sansrequired'] = '評価対象は空欄とすることはできません。';
$string['savechat'] = '問題に戻る';
$string['savechatmsg'] = '問題変数と全般的なフィードバックは,問題に保存されます。';
$string['scientificnotation'] = '科学的表記';
$string['scientificnotation_help'] = '科学的表記の書式を選択してください．';
$string['scientificnotation_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Question_options.md#scientificnotation';
$string['score'] = '点数';
$string['scoreerror'] = '点数は0から1の間の数値,または変数（確認されない）でなければなりません。';
$string['scoremode'] = '計算';
$string['seedx'] = '乱数のシード {$a}';
$string['seethisquestioninthequestionbank'] = '<i class="fa fa-list-alt"></i>この問題を問題バンク内で見る。';
$string['sendgeneralfeedback'] = '<i class="fa fa-file-text"></i>CASに全般的なフィードバックを送る';
$string['settingajaxvalidation'] = '即時評価';
$string['settingajaxvalidation_desc'] = 'Yesが指定されると，学生の解答はリアルタイムに表示され確認されます。学生にとって使い勝手はよいかもしれませんが，サーバに負荷がかかります。';
$string['settingcasdebugging'] = 'CASのデバッグ';
$string['settingcasdebugging_desc'] = 'CAS接続についてのデバッグ情報を保存するかどうかを指定します。';
$string['settingcasmaximaversion'] = 'Maximaのバージョン';
$string['settingcasmaximaversion_desc'] = '使用しているMaximaバーション';
$string['settingcaspreparse'] = 'Maximaに送信する前にすべてのコードを構文解析する';
$string['settingcaspreparse_desc'] = '信頼できる教師からのものであっても,問題変数などに含まれるすべてのコードについて,潜在的に悪意のあるパターンがないかどうかを事前に解析することをお勧めします。これは既知のソースからインポートされた問題を受理する場合に特に重要です。しかし,このプリパースがタイムアウトする可能性があり,潜在的な行き詰まりから抜け出すためには,このチェックを（一時的に）無効にする必要があります。このコードはまだテストおよび開発中であり,将来のリリースではこのプリパースが常に適用されるように,この設定は削除される予定です。';
$string['settingcaspreparse_false'] = '解析しない（非推奨）';
$string['settingcaspreparse_true'] = '常に解析する';
$string['settingcasresultscache'] = 'CASの結果をキャッシュ';
$string['settingcasresultscache_db'] = 'データベースのキャッシュ';
$string['settingcasresultscache_desc'] = 'この設定はCASの情報をキャッシュするかどうかを決定します。Maximaのコードを変更するような開発を行うのでなければ，この設定は有効にしておくべきです。キャッシュの現在の情報は動作確認のページに表示されます。例えばgnuplotコマンドなどの設定を変更する場合，その効果を確かめる前にキャッシュをクリアする必要があります。';
$string['settingcasresultscache_none'] = 'キャッシュしない';
$string['settingcastimeout'] = 'CASタイムアウト';
$string['settingcastimeout_desc'] = 'Maximaへの接続のタイムアウト';
$string['settingdefaultinputoptions'] = 'デフォルトの解答形式オプション';
$string['settingdefaultinputoptions_desc'] = '新しい問題を作成したり，既存の問題に新しい解答欄を加えるときに参照されます。';
$string['settingdefaultquestionoptions'] = 'デフォルトの解答形式オプション';
$string['settingdefaultquestionoptions_desc'] = '新しい問題を作成するときに使用します。';
$string['settingmathsdisplay'] = '数式表示フィルター';
$string['settingmathsdisplay_desc'] = '数式を表示するための方法です。もしMathJaxを選択した場合，動作確認のページで指示に従わなければなりません。フィルターを選択したら，設定ページでそのフィルターを有効にしなければなりません。';
$string['settingmathsdisplay_mathjax'] = 'MathJax';
$string['settingmathsdisplay_maths'] = '古いOpen University数学フィルター';
$string['settingmathsdisplay_oumaths'] = '新しいOpen University数学フィルター';
$string['settingmathsdisplay_tex'] = 'Moodle TeX フィルター';
$string['settingmaximalibraries'] = 'オプションのMaximaライブラリの読み込み：';
$string['settingmaximalibraries_desc'] = 'これはカンマで区切られたMaximaのライブラリ名のリストで，Maximaに自動的にロードされます。サポートされているライブラリのみ使用することができます： "stats, distrib, descriptive, simplex"。リストされたライブラリを変更する場合は，Maximaの最適化されたイメージを再構築する必要があります。';
$string['settingmaximalibraries_error'] = 'STACK プラグインの設定 <tt>qtype_stack | maximalibraries</tt> を編集してください。
以下のパッケージはサポートされていません： {$a}';
$string['settingmaximalibraries_failed'] = 'あなたの要求したMaximaパッケージのいくつかの読み込みに失敗しているようです。';
$string['settingparsercacheinputlength'] = 'キャッシュされた表現はこれより長い';
$string['settingparsercacheinputlength_desc'] = '式パーサーは、長い式（複雑な問題変数など）では非常に遅くなります。したがって，この制限よりも長い式の解析結果をキャッシュします。理想的には，この設定は、キャッシュルックアップが解析を実行するのとほぼ同じ時間かかる値に設定する必要があります。 50文字はこれについての経験に基づいた推測です。 0に設定すると、キャッシュは無効になります。';
$string['settingplatformmaximacommand'] = 'Maximaコマンド';
$string['settingplatformmaximacommand_desc'] = 'これが空白の場合，STACKはMaximaの場所を推測します。それが失敗した場合、Maximaや最適化されたMaximaのフルパスを設定する必要があります。これは開発とデバッグにのみ使用してください。本番システムでは使用しないでください。最適化された、またはより優れたMaximaプールオプションを使用してください。';
$string['settingplatformmaximacommandopt'] = '最適化されたMaximaコマンド';
$string['settingplatformmaximacommandopt_desc'] = 'これは，Maximaが最適化された実行可能ファイルのフルパスに設定する必要があります。Linuxベースのシステムでtimeoutコマンドを使用することを検討してください。例：timeout --kill-after=10s 10s maxima';
$string['settingplatformmaximacommandserver'] = 'MaximaプールのURL';
$string['settingplatformmaximacommandserver_desc'] = 'プラットフォームタイプがサーバーの場合，これはMaximaプールのURLに設定する必要があります。';
$string['settingplatformplotcommand'] = 'gnuplot コマンド';
$string['settingplatformplotcommand_desc'] = '通常，これは空白のままにすることができますが，グラフ表示が機能しない場合は，ここでgnuplotコマンドへのフルパスを指定する必要があります。';
$string['settingplatformtype'] = 'プラットフォームの種類';
$string['settingplatformtype_desc'] = 'STACKはどのOS上で動作しているかを知る必要があります。サーバのオプションを指定することによりパフォーマンスが向上します。Linux（最適化）はドキュメントの「Maxima最適化」の項で解説されています。';
$string['settingplatformtypelinux'] = 'Linux';
$string['settingplatformtypelinuxoptimised'] = 'Linux（最適化）';
$string['settingplatformtypeserver'] = 'サーバ';
$string['settingplatformtypeserverproxy'] = 'サーバ(プロキシ経由)';
$string['settingreplacedollars'] = '<code>$</code> と <code>$$</code> を置き換え';
$string['settingreplacedollars_desc'] = '問題テキストの <code>$</code> と <code>$$</code> を<code>\\\\(...\\\\)</code> と <code>\\\\[...\\\\]</code> に置き換えます。「数式タグの修正スクリプト」が便利です。';
$string['settingserveruserpass'] = 'サーバ　ユーザ名:パスワード';
$string['settingserveruserpass_desc'] = 'もし「プラットフォームの種類」でサーバを指定していて，MaximaプールサーバをHTTP認証で設定したら，ユーザ名とパスワードを入力することができ，多少安全です。フォーマットは，ユーザ名:パスワード，です。';
$string['settingsmathsdisplayheading'] = '数式表示オプション';
$string['settingsmaximasettings'] = 'Maximaに接続しています';
$string['settingusefullinks'] = '便利なリンク';
$string['showingundeployedvariant'] = 'デプロイされていない変形 {$a} を表示しています';
$string['showvalidation'] = '数式の文法の確認';
$string['showvalidation_help'] = 'この入力に対するバリデータのフィードバックと，伝統的な2次元記法での入力された数式を表示します。文法エラーは常に指摘されます。';
$string['showvalidation_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Show_validation';
$string['showvalidationcompact'] = 'はい、コンパクトです';
$string['showvalidationno'] = 'いいえ';
$string['showvalidationyes'] = 'はい（変数リストあり）';
$string['showvalidationyesnovars'] = 'はい（変数リストなし）';
$string['singlechargotmorethanone'] = 'ここには1文字だけ入力できます。';
$string['specificfeedback'] = '個別フィードバック';
$string['specificfeedback_help'] = 'デフォルトでは各ポテンシャル・レスポンス・ツリーのフィードバックはこのブロックに表示されます。表示位置を問題テキストに移動が可能ですが，その場合にはMoodleはあまり制御できません。';
$string['sqrtsign'] = '平方根の記号';
$string['sqrtsign_help'] = '平方根の記号を表示します。';
$string['sqrtsign_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Options.md#surd';
$string['stack:usediagnostictools'] = 'STACKツールを使ってください。';
$string['stackBlock_elif_after_else'] = '"if-else"には"elif"を使います。';
$string['stackBlock_elif_out_of_an_if'] = '"elif"はifブロックの外では使えません。';
$string['stackBlock_else_out_of_an_if'] = '"else"はifブロックの外では使えません。';
$string['stackBlock_escapeNeedsValue'] = 'Escapeブロックには値の属性が必要です。';
$string['stackBlock_geogebra_heading'] = 'GeoGebraの教材';
$string['stackBlock_geogebra_height'] = 'GeoGebra Applet の高さは，既知の CSS 長さ単位を使用する必要があります。';
$string['stackBlock_geogebra_height_num'] = 'GeoGebra Applet の高さの数値部分は数値でなければならず，余分な文字を含んではなりません。';
$string['stackBlock_geogebra_link'] = '参照したGeoGebra教材へのリンク';
$string['stackBlock_geogebra_link_help'] = 'この教材を編集しますか？これが geogebra.org にあるあなた自身の GeoGebra 教材であれば、編集できます。これがあなたのGeoGebra教材でない場合は、まずgeogebra.orgの教材をコピーする必要があります。その後，その教材を公開し，問題文の下の material_id の値を編集する必要があります。';
$string['stackBlock_geogebra_overdefined_dimension'] = 'GeoGebra Applet のアスペクト比を定義するときは，幅か高さのどちらかだけを定義すればよく，両方を定義してはいけません。';
$string['stackBlock_geogebra_param'] = 'geogebra-blockは，この文脈ではこれらのパラメータのみをサポートしています： {$a->param}。';
$string['stackBlock_geogebra_ref'] = 'geogebra-blockは，同じCASTextセクション\'{$a->var}\'に存在する入力の参照のみをサポートしています。';
$string['stackBlock_geogebra_settingdefaultoptions'] = 'STACKにおけるGeoGebraのオプション';
$string['stackBlock_geogebra_settingdefaultoptions_desc'] = 'GeoGebraをSTACKで使用するためのドキュメントはAuthoring/GeoGebra.mdにあります。';
$string['stackBlock_geogebra_underdefined_dimension'] = 'GeoGebra Applet のアスペクト比を定義する場合，グラフの幅か高さのどちらかを定義しなければなりません。';
$string['stackBlock_geogebra_width'] = 'GeoGebra Appletの幅は，既知の CSS 長さ単位を使用する必要があります。';
$string['stackBlock_geogebra_width_num'] = 'GeoGebra Appletの幅の数値部分は数値でなければならず，余分な文字を含んではなりません。';
$string['stackBlock_geogebrabaseurl'] = 'GeoGebra hostingへのリンク（オプション）';
$string['stackBlock_geogebrabaseurl_help'] = '自分のサーバーで  GeoGebra scriptsをホストしている場合は，ここにカスタムリンクを追加できます。特定の GeoGebra バージョンを使いたい場合は，https://www.geogebra.org/apps/5.0.498.0/web3d（例：バージョン 5.0.498.0）を使ってください。';
$string['stackBlock_ifNeedsCondition'] = 'ifブロックには条件の属性が必要です。';
$string['stackBlock_jsxgraph_height'] = 'JSXGraphの高さはCSSの長さの単位を使ってください。';
$string['stackBlock_jsxgraph_height_num'] = 'JSXGraphの高さの割合は数値であり，文字が含まれてはいけません。';
$string['stackBlock_jsxgraph_overdefined_dimension'] = 'JSXGraphのアスペクト比を定義するときは，幅か高さのどちらか一方だけを定義すればよく、両方を定義してはいけません。';
$string['stackBlock_jsxgraph_param'] = 'JSXGraphブロックはこれらのパラメータのみサポートしています：{$a->param}';
$string['stackBlock_jsxgraph_ref'] = 'jsxgraph-blockは、同じCASTextセクション\'{$a->var}\'に存在する入力の参照のみをサポートしています。';
$string['stackBlock_jsxgraph_underdefined_dimension'] = 'JSXGraphのアスペクト比を定義する場合，グラフの幅か高さのどちらかを定義しなければいけません。';
$string['stackBlock_jsxgraph_unknown_style'] = '未知のJSXGraphスタイル：<code>{$a->style}</code>。';
$string['stackBlock_jsxgraph_width'] = 'JSXGraphの幅はCSSの長さの単位を使ってください。';
$string['stackBlock_jsxgraph_width_num'] = 'JSXGraphの幅の割合は数値であり，文字が含まれてはいけません。';
$string['stackBlock_missmatch'] = '一致していません。';
$string['stackBlock_multiple_else'] = 'ifブロックでの複数のelseブランチ';
$string['stackBlock_overwritten_sortable_option'] = '変更不可能な並べ替えオプションが見つかりました：';
$string['stackBlock_parsons_available_header'] = 'ここからドラッグする：';
$string['stackBlock_parsons_contents'] = 'パーソンズブロックの内容は{#stackjson_stringify(proof_steps)#}という形式のJSONでなければいけません。カスタム・オブジェクトを渡す場合は，パーソンズブロックの内容は{steps： steps:{#stackjson_stringify(proof_steps)#}、options：  {JSON containing Sortable options}}。あるいは，パーソンズブロックの内容は、JSONと等価なものを含んでいてもよいです。proof_steps Maxima変数が正しいフォーマットであることを確認してください。すべてのproof stepsは文字列でなければならないことに注意してください。詳細はドキュメントを参照してください。';
$string['stackBlock_parsons_height'] = 'パーソンズブロックの高さは，既知のCSS長さの単位を使わなければいけません。';
$string['stackBlock_parsons_height_num'] = 'パーソンズブロックの高さの数値部分は数値でなければならず，余分な文字を含んではいけません。';
$string['stackBlock_parsons_length_num'] = 'lengthの数値は正の整数でなければならず，余分な文字や数値型を含んではいけません。';
$string['stackBlock_parsons_overdefined_dimension'] = 'パーソンズブロックのアスペクト比を定義するときは，幅か高さだけを定義すればよく，両方を定義してはいけません。';
$string['stackBlock_parsons_param'] = 'パーソンズブロックは，この文脈では次のパラメータだけをサポートする： \'{$a->param}\'。';
$string['stackBlock_parsons_ref'] = 'パーソンズブロックは，同じCASTextセクションに存在する入力の参照にのみ対応しています。';
$string['stackBlock_parsons_underdefined_dimension'] = 'パーソンズブロックのアスペクト比を定義する場合，リストの幅か高さのどちらかを定義しなければいけません。';
$string['stackBlock_parsons_unknown_mathjax_version'] = 'パーソンズブロックは、mathjaxパラメータのMathJaxバージョン{$a->mjversion}のみをサポートしています。';
$string['stackBlock_parsons_unknown_named_version'] = 'パーソンズブロックは{$a->version}という名前のバージョンのみサポートしています。';
$string['stackBlock_parsons_used_header'] = 'ここで解答を作成する：';
$string['stackBlock_parsons_width'] = 'パーソンズブロックの幅は，既知のCSSの長さ単位を使わなければいけません。';
$string['stackBlock_parsons_width_num'] = 'パーソンズ・ブロックの幅の数値部分は数値でなければならず,余分な文字を含んではいけません。';
$string['stackBlock_unknownBlock'] = '次のブロックは不明です：';
$string['stackBlock_unknown_sortable_option'] = '不明な並べ替えオプションが見つかりました。これらは無視されます：';
$string['stackCas_CASError'] = 'CASは次のエラーを返しました。';
$string['stackCas_CASErrorCaused'] = '次のエラーが発生：';
$string['stackCas_MissingAt'] = '<code>@</code>が入力されていません。';
$string['stackCas_MissingCloseDisplay'] = '<code>\\]</code>が入力されていません。';
$string['stackCas_MissingCloseHTML'] = 'HTMLタグを閉じ忘れています。';
$string['stackCas_MissingCloseInline'] = '<code>\\)</code>が入力されていません。';
$string['stackCas_MissingClosingRawCAS'] = '<code>#}</code>が入力されていません。';
$string['stackCas_MissingClosingTeXCAS'] = '<code>@}</code>が入力されていません。';
$string['stackCas_MissingDollar'] = '<code>$</code>が入力されていません。';
$string['stackCas_MissingOpenDisplay'] = '<code>\\[</code>が入力されていません。';
$string['stackCas_MissingOpenHTML'] = 'HTMLの始まりタグを忘れています。';
$string['stackCas_MissingOpenInline'] = '<code>\\(</code>が入力されていません。';
$string['stackCas_MissingOpenRawCAS'] = '<code>{#</code>が入力されていません。';
$string['stackCas_MissingOpenTeXCAS'] = '<code>{@</code>が入力されていません。';
$string['stackCas_MissingStars'] = '*を忘れているようです。 おそらく{$a->cmd}とタイプしたと思われます。';
$string['stackCas_MissingString'] = '引用符<code>"</code>を忘れています。';
$string['stackCas_StringOperation'] = '文字列が不適切な場所で使われています。これは<code>{$a->issue}</code>の問題です。';
$string['stackCas_allFailed'] = 'CASは何も評価された式を返しませんでした。CASとの接続を確認してください。';
$string['stackCas_apostrophe'] = 'アポストロフィは許可されていません。';
$string['stackCas_applyfunmakestring'] = '関数の名前は<code>{$a->type}</code>の文字列は許されません。';
$string['stackCas_applyingnonobviousfunction'] = 'この関数呼び出し{$a->problem}には，簡単に表示できる関数名がないようです。セキュリティ上の理由から，バリデーターが関数名を確認できるように，呼び出しを単純化する必要がある場合があります。';
$string['stackCas_backward_inequalities'] = '不等号\\( \\leq \\) や \\( \\geq \\) は<=，=>と入力しなければなりません。あなたの入力した数式には{$a->cmd}が含まれています。';
$string['stackCas_badLogIn'] = '数式<tt>In</tt>を入力しました。自然対数は<tt>ln</tt>を小文字で入力する必要があります。（"Lima November"であり，"India November"ではありません）';
$string['stackCas_baddotdot'] = 'スカラー浮動小数点数で行列乗算". "を使用することは禁じられおり,代わりに通常の乗算 "*"を利用して同じ結果を得られます。';
$string['stackCas_badpostfixop'] = '不正な"postfix"オペレータを使っています。';
$string['stackCas_bracketsdontmatch'] = '数式中の括弧の入れ子が正しくありません。{$a->cmd}';
$string['stackCas_callingasfunction'] = '関数呼び出しの結果を呼び出すことは禁止されています{$a->problem}，ラムダは引き続き許可されます。';
$string['stackCas_chained_inequalities'] = 'あなたの入力した数式には \\(a &lt b &lt c \\) のような形式の連結不等式が含まれているようです。個々の不等式を AND や OR の論理演算で結合する必要があります。';
$string['stackCas_decimal_usedcomma'] = '<code>.</code>というようにピリオドを利用していますが,小数点以下の区切りとしては<code>,</code>というように,カンマを利用しなければなりません。';
$string['stackCas_decimal_usedthreesep'] = '<code>.</code>, <code>,</code>, <code>;</code> というようにピリオド,カンマそしてセミコロンを表現内に利用しています。小数点以下の区切り (<code>.</code> or <code>,</code>) とリストを分ける表現 (<code>,</code> or <code>;</code>)を統一してください。あなたの解答は曖昧です。';
$string['stackCas_errorpos'] = 'およそ{$a->line}行の{$a->col}文字目。';
$string['stackCas_failedReturn'] = 'CASはデータを返しませんでした。';
$string['stackCas_failedReturnOne'] = 'CASがいくつかのデータを返していません。';
$string['stackCas_failedValidation'] = 'CASテキストが正しくありません。';
$string['stackCas_failedtimeout'] = 'CASがタイムアウトのためデータを返せませんでした。';
$string['stackCas_finalChar'] = '\'{$a->char}\'は{$a->cmd}の中では無効な終端文字です。';
$string['stackCas_forbiddenChar'] = 'CASコマンドには文字 {$a->char} を含んではいけません。';
$string['stackCas_forbiddenFunction'] = '許されていない関数：{$a->forbid}';
$string['stackCas_forbiddenOperator'] = '許されていない演算子：{$a->forbid}';
$string['stackCas_forbiddenVariable'] = '許されていない変数あるいは定数：{$a->forbid}';
$string['stackCas_forbiddenWord'] = '{$a->forbid}は禁止されています。';
$string['stackCas_forbiddenntuple'] = '座標はこの入力で使用できません。';
$string['stackCas_functionNameSubstitutionToForbiddenOne'] = '関数名 "{$a->name}" は 禁止されている "{$a->trg}" に代入するマッピングをおこなっている可能性があります。';
$string['stackCas_inputsdefined'] = '変数として入力名は使用できません。<code>{$a}</code>を定義しなければなりません。';
$string['stackCas_invalidCommand'] = 'CASコマンドが間違っています。';
$string['stackCas_missingLeftBracket'] = '左括弧がありません<span class="stacksyntaxexample">{$a->bracket}</span>: {$a->cmd}。';
$string['stackCas_missingRightBracket'] = '右括弧がありません<span class="stacksyntaxexample">{$a->bracket}</span>: {$a->cmd}。';
$string['stackCas_nested_function_declaration'] = '他の関数の中で関数を定義することは禁止されました。別の関数の中から関数定義を切り替える必要がある場合は，関数の名前を変更する必要があります。';
$string['stackCas_newline'] = '改行文字は許可されていません。';
$string['stackCas_noFunction'] = '{$a->term}では関数{$a->forbid}を使用することは許可されていません。';
$string['stackCas_operatorAsVariable'] = '演算子{$a->op}は変数として解釈されます。構文を確認してください。';
$string['stackCas_overlyComplexSubstitutionGraphOrRandomisation'] = '問題コードが過度に複雑な置換を行うか，または検証しにくい漸進的な方法でランダム化を構築している場合，検証はタイムアウトするので，ロジックを単純化して対処する必要があります。';
$string['stackCas_overrecursivesignatures'] = '問題コードにマッピングで定義された関数が多すぎます。';
$string['stackCas_percent'] = '式の中に%が含まれています: {$a->expr}。';
$string['stackCas_qmarkoperators'] = '解答に疑問符は使用できません。';
$string['stackCas_redefine_built_in'] = '既定の関数 "{$a->name}" を再定義することはできません。';
$string['stackCas_redefinitionOfConstant'] = 'キー定数の再定義は禁止されています：{$a->constant}。';
$string['stackCas_reserved_function'] = 'この問題では，関数名 "{$a->name}" を使うことはできません。教師に問い合わせてください。';
$string['stackCas_spaces'] = '式の中に認められない空白が含まれています: {$a->expr}。';
$string['stackCas_spuriousop'] = '不明な演算子です。{$a->cmd}';
$string['stackCas_studentInputAsFunction'] = '学生の解答を関数名として利用することはできません。';
$string['stackCas_trigexp'] = '{$a->forbid}と記述して，三角関数のべきを計算することはできません。\\(\\{$a->identifier}(x)\\) の値の2乗は，<tt>{$a->identifier}(x)^2</tt>と入力します。  \\(\\{$a->identifier}(x)\\) の逆数は，\\(\\{$a->identifier}^{-1}(x)\\) ではなく<tt>a{$a->identifier}(x)</tt>と記述します。';
$string['stackCas_triginv'] = '三角関数の逆関数は{$a->badinv}ではなく{$a->goodinv}と入力します。';
$string['stackCas_trigop'] = '引数に対して{$a->trig}を適用する必要があります。あなたは{$a->forbid}としたようですが， 変数名として{$a->trig}としようとしたように見えます。';
$string['stackCas_trigparens'] = 'この引数に対して三角関数を適用する場合，引数を角括弧ではなく丸括弧で囲まなければなりません。例 {$a->forbid}';
$string['stackCas_trigspace'] = 'この引数に三角関数を適用する場合，スペースではなく括弧を使わなければなりません。例えば，{$a->trig}。';
$string['stackCas_underscores'] = '次の「下付き添字」は許されません：{$a}';
$string['stackCas_unencpsulated_comma'] = '式の中に不適切なカンマが使われています。カンマはリストや集合などの要素を区切るために使われます。実数にはカンマではなく小数点を使う必要があります。';
$string['stackCas_unencpsulated_semicolon'] = 'あなたの式のセミコロン（;）は誤った方法で表示されます。 セミコロンはリストやセットなどの項目を区切るのに使われるものです。';
$string['stackCas_unitssynonym'] = 'あなたは単位{$a->forbid}を使っているようですが，{$a->unit}の間違いではありませんか？';
$string['stackCas_unknownFunction'] = '不明な関数：{$a->term} 内の {$a->forbid}';
$string['stackCas_unknownFunctionCase'] = '入力は大文字と小文字を区別します。{$a->forbid}は不明な関数です。{$a->lower}の間違いではないですか？';
$string['stackCas_unknownSubstitutionPotenttiallyMaskingAFunctionName'] = '関数名 "{$a->name}" は不明確な代入で再定義される可能性があります。';
$string['stackCas_unknownUnitsCase'] = '単位の入力は大文字と小文字が区別されます：{$a->forbid}は不明な単位です。以下のリストのうちの一つの単位 {$a->unit}の間違いではありませんか？';
$string['stackCas_unknownVariableCase'] = '入力は大文字と小文字を区別します。{$a->forbid}は不明な変数です。{$a->lower}の間違いではないですか？';
$string['stackCas_useinsteadChar'] = '<span class="stacksyntaxexample">{$a->bad}</span> を \'<span class="stacksyntaxexample">{$a->char}</span>\' で置き換えてください。';
$string['stackDoc_404'] = 'エラー 404';
$string['stackDoc_404message'] = 'ファイルが見つかりません。';
$string['stackDoc_AnswerTestResults'] = '# 解答テストの結果

このページはSTACKのテストケースに解答テストを実行した結果を公開するものです。このページはSTACKのユニットテストから自動的に生成され，解答テストが実際に何を行うかを問題作成者に示すために設計されています。これには，現在のところ解答テストが失敗し，期待される採点がマイナスになるケースも含まれます。コメントやさらなるテストケースは大歓迎です。';
$string['stackDoc_directoryStructure'] = 'ディレクトリ構成';
$string['stackDoc_docs'] = 'STACKドキュメント';
$string['stackDoc_docs_desc'] = '<a href="{$a->link}">STACKドキュメント</a>：あなたのサーバで走っているコードを解説したローカルのSTACK wiki';
$string['stackDoc_home'] = 'ドキュメントホーム';
$string['stackDoc_index'] = 'カテゴリインデックス';
$string['stackDoc_licence'] = 'STACKのドキュメントは以下のライセンスで提供されています。
<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a>';
$string['stackDoc_licence_alt'] = 'クリエイティブコモンズライセンス';
$string['stackDoc_siteMap'] = 'サイトマップ';
$string['stackDoc_siteMap_en'] = '英語のサイトマップ';
$string['stackDoc_version'] = 'あなたのサイトではSTACKバージョン{$a}が動作しています。';
$string['stackInstall_input_intro'] = 'このページでは学生からの入力をSTACKがどのように解釈するのかを確認することができます。<br />\'V\' はPHPとCASによって判定された妥当性を記録しています。V1はPHPの妥当性，V2はCASの妥当性です。';
$string['stackInstall_input_title'] = '学生の入力をテストするためのツール';
$string['stackInstall_input_title_desc'] = '<a href="{$a->link}">解答入力の確認スクリプト</a> は学生が解答として入力した数式をSTACKがどのように解釈するかをテストします。';
$string['stackInstall_replace_dollars_desc'] = '<a href="{$a->link}">数式タグの修正スクリプト</a> は，古いスタイルのタグ<code>@...@</code>, <code>$...$</code>, <code>$$...$$</code>を，新しいスタイルのタグ<code>{@...@}</code>, <code>\\\\(...\\\\)</code>, <code>\\\\[...\\\\]</code>に置き換えます（<code>@...@</code>から<code>{@...@}</code>はSTACK4のための変形です）。';
$string['stackInstall_testsuite_choose'] = '評価関数を選んでください。';
$string['stackInstall_testsuite_errors'] = 'この問題は以下のエラーを発生しました。';
$string['stackInstall_testsuite_fail'] = 'いくつかのテストが失敗しました。';
$string['stackInstall_testsuite_failingtests'] = '失敗した問題';
$string['stackInstall_testsuite_failingupgrades'] = 'アップグレードに失敗した問題';
$string['stackInstall_testsuite_intro'] = 'このページでは評価関数の例を見たり,正しく機能するかをテストしたりできます。 評価関数だけがWebインターフェースを通してチェックできるのは評価関数のみであることに注意してください。点数が負なら意図されたテスト失敗であることを意味し，特に-1なら意図された内部エラーであることを意味します。';
$string['stackInstall_testsuite_nodeployedseeds'] = 'ランダム変数を含む問題ですが，シードがデプロイされていません。';
$string['stackInstall_testsuite_nogeneralfeedback'] = '全般的なフィードバックのない問題：模範解答があれば学生は喜ぶでしょう。';
$string['stackInstall_testsuite_notests'] = '問題が含まれていません。何か追加してください。';
$string['stackInstall_testsuite_pass'] = 'すべてのテストがパスしました。';
$string['stackInstall_testsuite_title'] = 'STACK評価関数の動作テスト';
$string['stackInstall_testsuite_title_desc'] = '<a href="{$a->link}">評価関数の確認スクリプト</a> は評価関数が正しく動作するかどうかを確認します。それぞれの評価関数がどのように使用されるかは，例を参考にしてください。';
$string['stackOptions_AnsTest_values_AlgEquiv'] = '代数等価';
$string['stackOptions_AnsTest_values_AlgEquivNouns'] = '関数利用代数等価';
$string['stackOptions_AnsTest_values_CasEqual'] = '構文等価';
$string['stackOptions_AnsTest_values_CompSquare'] = '平方完成';
$string['stackOptions_AnsTest_values_Diff'] = '微分';
$string['stackOptions_AnsTest_values_EqualComAss'] = '交換・結合等価';
$string['stackOptions_AnsTest_values_EqualComAssRules'] = '交換・結合等価ルール';
$string['stackOptions_AnsTest_values_Equiv'] = '同値変形';
$string['stackOptions_AnsTest_values_EquivFirst'] = '完全同値変形';
$string['stackOptions_AnsTest_values_Expanded'] = '展開';
$string['stackOptions_AnsTest_values_FacForm'] = '因数分解';
$string['stackOptions_AnsTest_values_GT'] = '超過';
$string['stackOptions_AnsTest_values_GTE'] = '以上';
$string['stackOptions_AnsTest_values_Int'] = '積分';
$string['stackOptions_AnsTest_values_Levenshtein'] = 'レーベンシュタイン';
$string['stackOptions_AnsTest_values_LowestTerms'] = '既約';
$string['stackOptions_AnsTest_values_NumAbsolute'] = '絶対精度';
$string['stackOptions_AnsTest_values_NumDecPlaces'] = '小数部桁数';
$string['stackOptions_AnsTest_values_NumDecPlacesWrong'] = '小数部桁数間違い';
$string['stackOptions_AnsTest_values_NumRelative'] = '相対精度';
$string['stackOptions_AnsTest_values_NumSigFigs'] = '有効数字';
$string['stackOptions_AnsTest_values_PartFrac'] = '部分分数';
$string['stackOptions_AnsTest_values_PropLogic'] = '命題論理';
$string['stackOptions_AnsTest_values_SRegExp'] = '正規表現等価';
$string['stackOptions_AnsTest_values_SameType'] = '型等価';
$string['stackOptions_AnsTest_values_Sets'] = '集合';
$string['stackOptions_AnsTest_values_SigFigsStrict'] = '厳密有効数字';
$string['stackOptions_AnsTest_values_SingleFrac'] = '仮分数';
$string['stackOptions_AnsTest_values_String'] = '文字列';
$string['stackOptions_AnsTest_values_StringSloppy'] = 'あいまい文字列';
$string['stackOptions_AnsTest_values_SubstEquiv'] = '変数等価';
$string['stackOptions_AnsTest_values_SysEquiv'] = '多項式等価';
$string['stackOptions_AnsTest_values_UnitsAbsolute'] = '絶対単位';
$string['stackOptions_AnsTest_values_UnitsRelative'] = '相対単位';
$string['stackOptions_AnsTest_values_UnitsSigFigs'] = '有効単位';
$string['stackOptions_AnsTest_values_UnitsStrictAbsolute'] = '強絶対単位';
$string['stackOptions_AnsTest_values_UnitsStrictRelative'] = '強相対単位';
$string['stackOptions_AnsTest_values_UnitsStrictSigFigs'] = '強有効単位';
$string['stackerrors'] = '問題にエラーがあります。';
$string['stackfileuseerror'] = '1つ以上のファイル（例:画像）が内部で{$a}と関連付けられていますが、現在のテキストではどれも使われていないようです。';
$string['stackversionedited'] = 'この問題は STACK {$a} で作成されました。';
$string['stackversionerror'] = 'この問題は{$a->qfield}で{$a->pat}を使用していますが,これはSTACKのバージョン{$a->ver}で変更され,サポートされなくなりました。';
$string['stackversionerroralt'] = 'その他は{$a}です。';
$string['stackversionmulerror'] = 'この問題には"mul"オプションを使う入力がありますが，STACK 4.2 からはサポートされていません。この問題を修正してください。';
$string['stackversionnone'] = 'STACK 4.2で問題変数ナンバリングが導入されて以降，この問題は編集されていないようです。注意深く問題を見直してください。';
$string['stackversionnow'] = '現在のバージョンは STACK {$a} です。';
$string['stackversionregexp'] = '評価関数RegEpはSTACK 4.3ではサポートされていません。SRegExpを使用してください。';
$string['stop'] = '[終了]';
$string['strictsyntax'] = '厳密な文法';
$string['strictsyntax_help'] = 'このオプションはもはや利用されていないので，削除されます。';
$string['strictsyntax_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/';
$string['strlengtherror'] = '文字列は255文字以下です。';
$string['studentValidation_invalidAnswer'] = 'この解答は正しく入力されていません。';
$string['studentValidation_listofunits'] = 'あなたの解答の中で使われている単位は{$a}です。';
$string['studentValidation_listofvariables'] = 'あなたの解答の中で使われている変数は{$a}です';
$string['studentValidation_notes'] = '（この入力はSTACKでは自動採点されません）';
$string['studentValidation_yourLastAnswer'] = 'あなたの入力した数式は次のとおりです : {$a}';
$string['studentanswer'] = '評価対象';
$string['switchtovariant'] = '変形に変更します：';
$string['symbolicprtcorrectfeedback'] = '<span style="font-size: 1.5em; color:green;"><i class="fa fa-check"></i></span>';
$string['symbolicprtincorrectfeedback'] = '<span style="font-size: 1.5em; color:red;"><i class="fa fa-times"></i></span>';
$string['symbolicprtpartiallycorrectfeedback'] = '<span style="font-size: 1.5em; color:orange;"><i class="fa fa-adjust"></i></span>';
$string['syntaxattribute'] = 'ヒント属性';
$string['syntaxattribute_help'] = '書式のヒントが編集可能な*値*あるいは編集不可能な*ボックス*として現れます。';
$string['syntaxattribute_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Syntax_Hint';
$string['syntaxattributeplaceholder'] = 'ボックス';
$string['syntaxattributevalue'] = '値';
$string['syntaxhint'] = '書式のヒント';
$string['syntaxhint_help'] = '解答入力の書式の例が表示されます。';
$string['syntaxhint_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#Syntax_Hint';
$string['tans'] = '評価基準';
$string['tans_help'] = 'これは評価関数の第2引数で，通常，正答ですが，任意のCASテキストを指定することができます。また，それは問題変数，フィードバック変数に依存していることも可能です。';
$string['tans_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Answer_Tests/index.md';
$string['tansrequired'] = '評価基準は空欄とすることはできません。';
$string['teacheranswer'] = '評価基準';
$string['teacheranswercase'] = '教師の解答をテストケースとして使用してください。';
$string['teacheranswerempty'] = 'この入力は左辺が空欄のままで構いません。';
$string['teacheranswershow'] = '\\( {$a->display} \\) が正解です。．次のように入力することができます: {$a->value}';
$string['teacheranswershow_disp'] = '{$a->display} が正解です。';
$string['teacheranswershow_mcq'] = '正解は：{$a->display}';
$string['teacheranswershownotes'] = 'この入力に対しては正答は表示されません。';
$string['teachersanswer'] = '正解';
$string['teachersanswer_help'] = '各解答欄に対する正解を指定しなければなりません。この正解は正しいMaximaの書式となっており，問題変数を用いることができます。';
$string['teachersanswer_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Inputs.md#model_answer';
$string['testallincategory'] = 'このカテゴリーのすべての問題をテストします。';
$string['testalltitle'] = 'この文脈ですべての問題をテストします。';
$string['testcasexresult'] = 'テストケース{$a->no} {$a->result}';
$string['testingquestion'] = '問題の確認 {$a}';
$string['testingquestionvariants'] = '問題変形の準備をしています';
$string['testinputs'] = 'テスト入力';
$string['testinputsimpwarning'] = '問題やポテンシャル・レスポンス・ツリーのオプションにかかわらず，テスト入力は<em>簡略化されていない形式</em>であることに注意してください。簡略化する場合は<tt>ev(..., simp)</tt>を使ってください。';
$string['testoptions'] = 'オプション';
$string['testoptions_help'] = 'この欄は、先生がテストの目的を記録するためのものです。';
$string['testoptions_link'] = '%%WWWROOT%%/question/type/stack/doc/doc.php/Authoring/Potential_response_trees.md';
$string['testoptionsinvalid'] = 'オプションが正しくありません。{$a}';
$string['testoptionsrequired'] = 'この評価関数にはオプションが必要です。';
$string['testpassesandfails'] = '{$a->passes} 個はパスし {$a->fails} 個はテスト失敗しました。';
$string['testsuitecolerror'] = 'CASエラー';
$string['testsuitecolmark'] = 'マーク';
$string['testsuitecolpassed'] = '？';
$string['testsuitefail'] = '<span style="color:red;"><i class="fa fa-times"></i></span>';
$string['testsuitefeedback'] = 'フィードバック';
$string['testsuiteknownfail'] = '<span style="color:orange;"><i class="fa fa-adjust"></i></span>';
$string['testsuiteknownfailmaths'] = '<span style="color:orange;"><i class="fa fa-adjust"></i>!</span>';
$string['testsuitenotests'] = '評価関数の番号{$a->no}';
$string['testsuitepass'] = '<span style="color:green;"><i class="fa fa-check"></i></span>';
$string['testsuiteteststook'] = '評価に {$a->time} 秒かかりました。';
$string['testsuiteteststookeach'] = '平均評価時間：{$a->time} 秒';
$string['testthisvariant'] = 'この変形のテストに変更します';
$string['texdisplaystyle'] = 'ディスプレイ表示の方程式';
$string['texinlinestyle'] = 'インライン表示の方程式';
$string['tidyquestion'] = '<i class="fa fa-sort-amount-asc"></i> 入力とPRTsの整理';
$string['tidyquestionx'] = '問題 {$a} の一部の名前の変更';
$string['todowarning'] = '"{$a->field}"に未解決のTodoブロックがあります。';
$string['trig_degrees_radians_fact'] = '\\[ 360^\\circ= 2\\pi \\hbox{ ラジアン},\\quad 1^\\circ={2\\pi\\over 360}={\\pi\\over 180}\\hbox{ ラジアン} \\] \\[ 1 \\hbox{ ラジアン} = {180\\over \\pi} \\hbox{ 度} \\approx 57.3^\\circ \\]';
$string['trig_degrees_radians_name'] = '度とラジアン';
$string['trig_standard_identities_fact'] = '\\[\\sin(a\\pm b)\\ = \\  \\sin(a)\\cos(b)\\ \\pm\\  \\cos(a)\\sin(b)\\]
 \\[\\cos(a\\ \\pm\\ b)\\ = \\  \\cos(a)\\cos(b)\\ \\mp \\sin(a)\\sin(b)\\]
 \\[\\tan (a\\ \\pm\\ b)\\ = \\  {\\tan (a)\\ \\pm\\ \\tan (b)\\over1\\ \\mp\\ \\tan (a)\\tan (b)}\\]
 \\[ 2\\sin(a)\\cos(b)\\ = \\  \\sin(a+b)\\ +\\ \\sin(a-b)\\]
 \\[ 2\\cos(a)\\cos(b)\\ = \\  \\cos(a-b)\\ +\\ \\cos(a+b)\\]
 \\[ 2\\sin(a)\\sin(b) \\ = \\  \\cos(a-b)\\ -\\ \\cos(a+b)\\]
 \\[ \\sin^2(a)+\\cos^2(a)\\ = \\  1\\]
 \\[ 1+{\\rm cot}^2(a)\\ = \\  {\\rm cosec}^2(a),\\quad \\tan^2(a) +1 \\ = \\  \\sec^2(a)\\]
 \\[ \\cos(2a)\\ = \\  \\cos^2(a)-\\sin^2(a)\\ = \\  2\\cos^2(a)-1\\ = \\  1-2\\sin^2(a)\\]
 \\[ \\sin(2a)\\ = \\  2\\sin(a)\\cos(a)\\]
 \\[ \\sin^2(a) \\ = \\  {1-\\cos (2a)\\over 2}, \\qquad \\cos^2(a)\\ = \\  {1+\\cos(2a)\\over 2}\\]';
$string['trig_standard_identities_name'] = '標準的な三角関数の公式';
$string['trig_standard_values_fact'] = '\\[\\sin(45^\\circ)={1\\over \\sqrt{2}}, \\qquad \\cos(45^\\circ) = {1\\over \\sqrt{2}},\\qquad
\\tan( 45^\\circ)=1
\\]
\\[
\\sin (30^\\circ)={1\\over 2}, \\qquad \\cos (30^\\circ)={\\sqrt{3}\\over 2},\\qquad
\\tan (30^\\circ)={1\\over \\sqrt{3}}
\\]
\\[
\\sin (60^\\circ)={\\sqrt{3}\\over 2}, \\qquad \\cos (60^\\circ)={1\\over 2},\\qquad
\\tan (60^\\circ)={ \\sqrt{3}}
\\]';
$string['trig_standard_values_name'] = '標準的な三角関数の値';
$string['true'] = '真';
$string['truebranch'] = '真の分岐';
$string['truebranch_help'] = 'これらのフィールドの値により，評価関数が値1を返したときの処理が決まります。
<h3>計算と点数</h3>
点数の調整方法です．「=」は特定の点数を与えます。「+ / -」は現在の点数に加点・減点を行います。

<h3>減点</h3>
アダプティブモード，インタラクティブモードではここに指定した減点が蓄積されます。

<h3>次のノード</h3>
次にどのノードで評価するか，あるいは終了するかを指定します。

<h3>解答記録</h3>
学生の解答履歴をレポートするためのタグです．ポテンシャル・レスポンス・ツリーをたどった経路と評価関数の出力を記録します。解答記録は自動的に生成されますが，意味があるものに変更することができます．';
$string['unauthorisedbulktest'] = 'STACKの質問に適切にアクセスできません。';
$string['undeploy'] = 'アンデプロイ';
$string['unknown_block'] = '型の不明なブロック{$a->type}が要求された。';
$string['unrecognisedfactstags'] = '次のタグは{$a->tags}と解釈されていません';
$string['usetextarea'] = 'STACK問題タイプの問題の編集には，「プレインテキストエリア」エディタの使用を強く奨めます．他のエディタは，問題を保存する際にコンテンツを変更して，方程式やJavaScriptやその他のコードを壊すかもしれません．プレファレンス->エディタプレファレンスで「プレインテキストエリア」を選択してください．';
$string['variant'] = '変形';
$string['variantsselectionseed'] = 'ランダムグループ';
$string['variantsselectionseed_help'] = '通常，ここは空欄でかまいません。しかし，もし一つの小テストに含まれる二つの問題において同じ乱数シードを使いたい場合，この欄に二つの問題に対して同じ文字列を入力することにより，二つの問題の乱数シードは同期します。（デプロイされたものを使う場合は，同じ乱数シードの組をデプロイすること）';
$string['verifyquestionandupdate'] = '問題テキストのチェックと入力フォームの更新';
$string['version'] = 'バージョン';
$string['yamlrecommended'] = 'STACKではYAMLライブラリのインストールが推奨されます。';
$string['youmustconfirm'] = 'ここで確認が必要です';
