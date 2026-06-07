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
 * Strings for component 'filter_synhi', language 'ja', version '4.4'.
 *
 * @package     filter_synhi
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['brokenmarkup'] = 'マークアップが崩れているため、ハイライトが正しくないものになります。';
$string['codeexample'] = 'コード';
$string['codeexampledesc'] = '例で使用するコードです。メモ: 例で使用するには保存してください。';
$string['engine'] = 'エンジン';
$string['enginedesc'] = '使用するエンジンです。「<a href="https://github.com/EnlighterJS/EnlighterJS" target="_blank">EnlighterJS</a> - Mozilla Public License 2.0 (MPL-2.0)」または「<a href="https://github.com/syntaxhighlighter/syntaxhighlighter" target="_blank">SyntaxHighlighter</a> - MIT licensed」のいずれかを使用してください。';
$string['enlighterinformation'] = 'あなたのコードがインラインコードの場合は「code」タグ、マルチラインの場合は「pre」タグでコードを囲んでください。 Enlighterはその言語をワークアウトしようとします。あなたは「data-enlighter-language="java"」のように「code」タグに「data-enlighter-language」属性を追加して言語を指定できます。そのため、丸括弧の中に必要なテキストを入力してください:<br>
<ul>
    <li>ABAP (abap)</li>
    <li>Apache HTTPD (apache)</li>
    <li>Assembly (assembly, asm)</li>
    <li>AVR Assembly (avrassembly, avrasm)</li>
    <li>Windows Batch/Bat (bat,batch,cmd)</li>
    <li>C/C++ (c,cpp, c++)</li>
    <li>C# (csharp)</li>
    <li>CSS (css)</li>
    <li>Cython (cython)</li>
    <li>CordPro (cordpro)</li>
    <li>diff (diff)</li>
    <li>Dockerfile (docker, dockerfile)</li>
    <li>Generic (generic, standard) - デフォルトのハイライトスキーム</li>
    <li>Groovy (groovy)</li>
    <li>Go (go, golang)</li>
    <li>HTML (html)</li>
    <li>Ini (ini, conf)</li>
    <li>Java (java)</li>
    <li>Javascript (js, javascript, jquery, mootools, ext.js)</li>
    <li>JSON (json)</li>
    <li>JSX (jsx)</li>
    <li>Kotlin (kotlin)</li>
    <li>LATEX (latex)</li>
    <li>LESS (less)</li>
    <li>lighttpd (lighttpd)</li>
    <li>LUA (lua)</li>
    <li>MariaDB (mariadb)</li>
    <li>Markdown (gfm, md, markdown)</li>
    <li>Matlab/Octave (octave, matlab)</li>
    <li>MSSQL (mssql)</li>
    <li>NGINX (nginx)</li>
    <li>NSIS (nsis)</li>
    <li>Oracle Database (oracledb)</li>
    <li>PHP (php)</li>
    <li>Powerhsell (powershell)</li>
    <li>Prolog (prolog)</li>
    <li>Python (py, python)</li>
    <li>PureBasic (purebasic, pb)</li>
    <li>QML (qml)</li>
    <li>R (r)</li>
    <li>RAW (raw) - EnlighterJSのコンテナスタイルでハイライトされない生のコードです!</li>
    <li>RouterOS/SwitchOS (routeros)</li>
    <li>Ruby (ruby)</li>
    <li>Rust (rust)</li>
    <li>Scala (scala)</li>
    <li>SCSS (scss, sass)</li>
    <li>Shellscript (shell, bash)</li>
    <li>Generic SQL (sql)</li>
    <li>Squirrel (squirrel)</li>
    <li>Swift (swift)</li>
    <li>Typescript (typescript)</li>
    <li>VHDL (vhdl)</li>
    <li>VisualBasic (visualbasic,vb)</li>
    <li>Verilog (verilog)</li>
    <li>XML (xml, html)</li>
    <li>YAML (yaml)</li>
</ul>';
$string['enlighterjs'] = 'EnlighterJS';
$string['enlighterjsstyle'] = 'EnlighterJSスタイル';
$string['filtername'] = 'SynHi';
$string['generalinformation'] = '「pre」タグはコードのハイライトにのみ使用されていましたが、このタグは削除されました。代わりに複数行のコードには「code」タグを使用して「pre」タグで囲んでください。「<」および「>」の記号がタグに似ている場合、「code」タグの中で問題が発生する可能性があるため、あなたのコードに対して「(amphersand)lt;」および「(amphersand)gt;」に変更してください。ここでの「(amphersand)」は「&」を意味します。';
$string['information'] = '情報';
$string['informationchanges'] = '変更';
$string['informationheading'] = '情報';
$string['informationheadingdesc'] = 'フィルタに関する情報です。';
$string['informationsettings'] = '情報設定';
$string['informationsettingsdesc'] = 'SynHiフィルタ情報';
$string['love'] = 'love';
$string['pluginname'] = 'SynHi';
$string['privacy:nop'] = 'SynHiフィルタは設定に関連する設定を保存します。 どの設定も特定のユーザとは関係ありません。 あなたの責任でフリーテキストフィールドにユーザデータが入力されないようにしてください。 設定を変更した場合、変更したユーザに対してコアMoodleログシステムにその操作が記録されます。これはフィルタの管理外となります。あなたの個人情報保護法の解釈に準拠していることを確かにするため、コードを注意深く確認してください。 私は弁護士ではないため、私の分析は私の解釈に基づいています。 もし疑問がある場合、すぐにフィルタを外してください。';
$string['settings'] = '設定';
$string['settingssettings'] = '設定';
$string['settingssettingsdesc'] = 'SynHiフィルタ設定';
$string['styledesc'] = 'あなたが使用したいスタイルを選択してください。';
$string['syntaxhighlighter'] = 'SyntaxHighlighter';
$string['syntaxhighlighterexample'] = '例';
$string['syntaxhighlighterexampledesc'] = '「codeexample」設定から ...';
$string['syntaxhighlighterinformation'] = 'SyntaxHighlighterではあなたのコードを「code」タグで囲んで「class="brush: alias"」を追加してください「alias」は以下の丸括弧内のいずれかを意味します:<br>
<ul>
    <li>ActionScript3 (as3, actionscript3)</li>
    <li>Bash/shell (bash, shell)</li>
    <li>ColdFusion (cf, coldfusion)</li>
    <li>C# (c-sharp, csharp)</li>
    <li>C++ (cpp, c)</li>
    <li>CSS (css)</li>
    <li>Delphi (delphi, pas, pascal)</li>
    <li>Diff (diff, patch)</li>
    <li>Erlang (erl, erlang)</li>
    <li>Groovy (groovy)</li>
    <li>JavaScript (js, jscript, javascript)</li>
    <li>Java (java)</li>
    <li>JavaFX (jfx, javafx)</li>
    <li>Perl (perl, pl)</li>
    <li>PHP (php)</li>
    <li>Plain Text (plain, text)</li>
    <li>PowerShell (ps, powershell)</li>
    <li>Python (py, python)</li>
    <li>Ruby (rails, ror, ruby)</li>
    <li>Scala (scala)</li>
    <li>SQL (sql)</li>
    <li>Visual Basic (vb, vbnet)</li>
    <li>XML (xml, xhtml, xslt, html, xhtml)</li>
</ul>';
$string['syntaxhighlighterstyle'] = 'SyntaxHighlighterスタイル';
$string['versionalpha'] = 'アルファ版 - ほぼ確実にバグが含まれています。 これは開発者「専用」の開発バージョンです! 実運用サーバにインストールしようとは思わないでください!';
$string['versionbeta'] = 'ベータ版 - バグが含まれている可能性があります。 テストサーバ上で管理者のみテスト可能です。';
$string['versioninfo'] = 'Release {$a->release}, version {$a->version} on Moodle {$a->moodle}.  Made with {$a->love} in Great Britain.';
$string['versionrc'] = 'リリース候補版- バグが含まれている可能性があります。 実運用サーバで使用する前にテストサーバで完全に確認してください。';
$string['versionstable'] = '安定版 - バグが含まれている可能性があります。 あなたの実運用サーバにインストールする前にテストサーバで確認してください。';
