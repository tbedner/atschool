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
 * Strings for component 'local_codechecker', language 'ja', version '4.4'.
 *
 * @package     local_codechecker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check'] = 'コードをチェックする';
$string['clihelp'] = 'いくつかのPHPコードをMoodleコーディングガイドラインと照らし合わせてください。
--interactive, -i すべてのファイル終了後に停止します。次のファイルに進むか、同じファイルに対してチェックを繰り返します。
--exclude, -e 部分一致するパスをカンマ区切りで指定してファイルを除外します。アスタリスクは任意の場所でワイルドカードとして使用できます。
--help, -h この情報を表示します。
例:
  php run.php local/codechecker';
$string['error_find'] = 'フォルダ検索に失敗しました。';
$string['exclude'] = '除外';
$string['filesfound'] = 'ファイルが見つかりました: {$a}';
$string['filesummary'] = '{$a->path} - {$a->count}';
$string['includewarnings'] = '警告を含む';
$string['info'] = '<p>{$a->link} のいくつかの側面に対してコードをチェックします。</p>
<p>Moodleコードルートからの相対パスを入力してください。例えば次のようになります: {$a->path}</p>
<p>あなたは特定のPHPファイルを入力することも、フォルダを指定してその中に含まれるすべてのファイルをチェックすることもできます。複数の入力 (ファイルまたはフォルダ) が可能です。1行あたり1つ入力してください。</p>
<p>ファイルを除外するにはカンマで区切られた部分一致パスのリストを使用できます。例えば次のようになります: {$a->excludeexample} アスタリスクは任意の場所でワイルドカードとして使用できます。</p>';
$string['invalidpath'] = '無効なパス {$a}';
$string['moodlecodingguidelines'] = 'Moodleコーディングガイドライン';
$string['numerrorswarnings'] = '{$a->errors} エラーおよび {$a->warnings} 警告';
$string['other_crlf'] = 'Windows (CRLF) の行末がLFではありません (最初の出現のみ報告)。';
$string['other_eol'] = '行末の空白スペース';
$string['other_extralfs'] = 'ファイル末尾に余分な空白行があります (正確に1行を使用してください)。';
$string['other_missinglf'] = 'ファイル末尾にLFがありません (正確に1つ使用してください)。';
$string['other_ratherlong'] = '行が推奨の132文字を超えています。';
$string['other_tab'] = 'タブ文字は許可されません。';
$string['other_toolong'] = '行が最大文字数の180文字を超えています。';
$string['path'] = 'チェック対象パス';
$string['pluginname'] = 'コードチェッカ';
$string['privacy:metadata'] = 'コードチェッカプラグインはいかなる個人情報も保存しません。';
$string['recheckfile'] = 'このファイルのみ再チェックする';
$string['showstandard'] = '問題に関連するphpcs標準を表示する';
$string['success'] = 'お見事!';
$string['summary'] = '合計: {$a}';
$string['wholefile'] = 'ファイル';
