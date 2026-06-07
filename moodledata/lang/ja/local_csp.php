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
 * Strings for component 'local_csp', language 'ja', version '4.4'.
 *
 * @package     local_csp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = '操作';
$string['areyousuretodeleteallrecords'] = '本当にすべてのCSPレポートレコードを削除してもよろしいですか?';
$string['areyousuretodeleteonerecord'] = '本当にこのCSPレポートレコードを削除してもよろしいですか?';
$string['blockeddomain'] = 'ドメイン';
$string['blockeduri'] = 'ブロック済みURI';
$string['blockedurlpaths'] = 'ブロック済みパス';
$string['configurecspheader'] = 'CSPヘッダを設定する';
$string['csp:seenotifications'] = 'CSP関連通知を確認する';
$string['cspdirectives'] = 'CSPディレクティブ';
$string['cspdirectivesinfo'] = '<p>CSPディレクティブの例 (正確な構文は上のリンクを参照してください):<br /><span style="color:#00acdf">script-src https:; style-src cdn.example.com; default-src \'self\';</span></p>';
$string['cspheaderdefault'] = 'default-src https:;\\nscript-src \'self\' \'unsafe-inline\' \'unsafe-eval\';\\nfont-src https: data:;\\nstyle-src https: \'unsafe-inline\';\\nimg-src https: data:;';
$string['cspheaderenable'] = 'CSPヘッダ有効化';
$string['cspheaderenabledescription'] = 'CSPヘッダを有効にするにはこの設定を有効にしてください。';
$string['cspheaderenforce'] = 'コンテンツセキュリティポリシー';
$string['cspheaderenforcing'] = 'コンテンツセキュリティポリシー';
$string['cspheaderenforcinghelp'] = 'ブラウザがCSPディレクティブに従うよう強制します。例) 安全ではないコンテンツの読み込みをブロックする';
$string['cspheaderreporting'] = 'Content-Security-Policy-Report-Only';
$string['cspheaderreportinghelp'] = 'CSP違反の監視および報告';
$string['csphttpresponseheader'] = 'CSP HTTPレスポンスヘッダ';
$string['cspreports'] = 'CSP違反レポート';
$string['cspsettings'] = 'コンテンツセキュリティポリシー設定';
$string['cspsettingsinfo'] = '<p>CSPはすべてのMoodleページに特別なHTTPレスポンスヘッダを追加することで動作します。最近のブラウザがこのヘッダを確認した場合、そのようなページの安全ではないコンテンツをブロックする等、特定のアクションを実行できます。CSPについての詳細は<a target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/HTTP/CSP">こちら</a>をご覧ください。</p><p>あなたがこれらの設定を空白のままにした場合、CSP ヘッダは使用されません。</p>';
$string['documenturi'] = '違反対象';
$string['enablefeaturepolicy'] = 'Feature-Policyヘッダを有効にする';
$string['enablefeaturepolicydescription'] = '送信されるプラグインヘッダの一部としてFeature-Policyヘッダを送信します。このヘッダはDOM要素でどのブラウザ機能へのアクセスが許可されるか制御します。';
$string['failcounter'] = '#';
$string['featurepolicydescription'] = '送信するフィーチャポリシーを入力してください。最後がセミコロンで終わるエントリを1行に1エントリ追加してください。例) <pre> microphone \'none\'; </pre>';
$string['highestviolaters'] = 'トップ違反ソース';
$string['invalidblockeduri'] = '無効なブロック済みURI: {$a}';
$string['loaddata'] = '読込みデータ';
$string['loadexternaljavascript'] = '外部JavaScriptを {$a} から読み込む';
$string['loadingmixedcontentdescription'] = 'HTTPS経由でmoodleのウェブサイトにアクセスする場合、HTTP起源であるため、ブラウザは以下のリソースの表示を禁止します。<br />あなたはブラウザのJavaScriptコンソールで確認できます。';
$string['loadinsecurecss'] = '安全ではないCSSを {$a} から読み込む';
$string['loadinsecureiframe'] = '安全ではないiframdeを {$a} からHTMLで読み込む';
$string['loadinsecureimage'] = '安全ではないイメージを {$a} から読み込む';
$string['loadinsecurejavascript'] = '安全ではないJavaScriptを {$a} から読み込む';
$string['localcspheadingdirectives'] = 'CSPディレクティブを設定する';
$string['localcspheadinghttpresponseheader'] = 'CSP HTTPレスポンスヘッダを選択する';
$string['merge_duplicate_records_task'] = '重複するlocal_cspレコードをマージするタスク';
$string['mixedcontentexamples'] = '混合コンテンツの例';
$string['nonduplicaterecords'] = '非重複レコードはマージできません。';
$string['norecordsfound'] = 'レコードが見つかりませんでした。';
$string['notificationenforcedheader'] = '安全ではないコンテンツがブロックされました!';
$string['notificationenforcedsources'] = '以下のソースからのコンテンツは自動的にブロックされています:';
$string['notificationenforcedstart'] = 'このページにはセキュリティポリシーに違反するコンテンツが埋め込まれていました。';
$string['notificationreportedheader'] = '潜在的に安全ではないコンテンツが報告されました!';
$string['notificationreportedsources'] = '以下のソースからのコンテンツが管理者に報告されました:';
$string['notificationreportedstart'] = 'このページには管理者が安全ではない可能性があると判断したコンテンツが埋め込まれています。';
$string['notificationsenableenforced'] = '実施時に通知する';
$string['notificationsenableenforceddescription'] = 'アクセスしたページでCSPが実行された場合、そのページでブロックされたすべてのURIを一覧表示した通知をユーザに表示します。';
$string['notificationsenablereported'] = '報告時に通知する';
$string['notificationsenablereporteddescription'] = 'アクセスしたページでReport-Only-CSPが発動された場合、問題のURIを一覧表示した通知をユーザに表示します。';
$string['pluginname'] = 'コンテンツセキュリティポリシー';
$string['privacy:metadata'] = 'CSPプラグインにはユーザ固有のデータは含まれていません。';
$string['reset'] = 'リセット';
$string['resetallcspstatistics'] = 'すべての統計をリセットする';
$string['scspheadernone'] = '未使用';
$string['timeupdated'] = '最終更新';
$string['violateddirective'] = 'ポリシー';
