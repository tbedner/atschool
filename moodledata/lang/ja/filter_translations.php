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
 * Strings for component 'filter_translations', language 'ja', version '4.4'.
 *
 * @package     filter_translations
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bulkdeleteconfirmation'] = '本当にこれらの翻訳を完全に削除してもよろしいですか?';
$string['cachedef_translatedtext_1'] = '翻訳済みテキスト (リクエストレベル)';
$string['cachedef_translatedtext_2'] = '翻訳済みテキスト (セッションレベル)';
$string['cachedef_translatedtext_4'] = '翻訳済みテキスト (アプリケーションレベル)';
$string['cachingmode'] = 'キャッシングモード';
$string['cachingmode_desc'] = '私たちはコース数が比較的少なくユーザ数の多いサイトでは「アプリケーションレベル」、コース数が多い場合は「セッション」、キャッシングを最小限にするには「リクエスト」をお勧めします。';
$string['clihelptext_insertspans'] = 'このツールはデータベース内すべてのリッチテキストフィールドに翻訳ハッシュを付加します。
タスクを実行するにはモードを指定してこのコマンドを再度実行してください。
例)
php cli/insert_spans.php --mode=listcolumns

有効なモードは次のとおりです:
process - 実際に実行します ...
listcolumns - 影響を受けるテーブルおよびカラムをリストアップします。

推奨される使用方法は修正される可能性のあるカラムをリストアップすることです:
php filter/translations/cli/insert_spans.php --mode=listcolumns > /Users/moodleadmin/cols.json

無視されるべきものを削除するにはテキストエディタを使ってファイルを編集してください。そして、これらのカラムを処理するために以下のコマンドを実行してください:

php filter/translations/cli/insert_spans.php --mode=process --file=/Users/moodleadmin/cols.json';
$string['clihelptext_migrate_filter_fulltranslate'] = 'このツールは翻訳をfilter_fulltranslateプラグインからfilter_translationsプラグインにコピーします。
このツールを使って以前コピーされたエントリは複製されます。
タスクを実行するには「--confirm」を指定してこのコマンドを再度実行してください。
例)
php cli/migrate_filter_fulltranslate.php --confirm';
$string['columndefinitionfileerror'] = 'カラム定義ファイルが存在しないか無効です。';
$string['context'] = 'コンテクスト';
$string['createtranslation'] = '翻訳を作成する';
$string['current'] = '現在';
$string['deleteissuesconfirmation'] = '本当にこれらのエントリを完全に削除してもよろしいですか?';
$string['deleteselected'] = '選択した翻訳を削除する';
$string['deleteselectedentries'] = '選択したエントリを削除する';
$string['diff'] = 'Diff';
$string['edittranslation'] = '翻訳を編集する';
$string['edittranslationsbutton'] = '翻訳を編集する';
$string['filtername'] = 'コンテンツ翻訳';
$string['filteroptions'] = 'フィルタオプション';
$string['foundhash'] = '見つかったハッシュ';
$string['generatedhash'] = '生成済みハッシュ';
$string['google_apiendpoint'] = 'APIエンドポイント';
$string['google_apikey'] = 'APIキー';
$string['google_backoffonerror'] = 'エラーになるAPIから撤退する';
$string['google_enable'] = 'Google翻訳APIを使用する';
$string['googletranslate'] = 'Google翻訳';
$string['hash'] = 'ハッシュ';
$string['issue'] = 'ステータス';
$string['issue_10'] = '旧翻訳';
$string['issue_20'] = '未翻訳';
$string['languagestringreverse'] = '言語ストリングを逆引きする';
$string['languagestringreverse_enable'] = '言語ストリングの逆引きを有効にする';
$string['logdebounce'] = 'ログ実行待ち時間';
$string['logging'] = 'ロギング';
$string['logmissing'] = '未翻訳を記録する';
$string['logstale'] = '旧翻訳を記録する';
$string['managetranslationissues'] = '翻訳保留を管理する';
$string['managetranslations'] = '翻訳を管理する';
$string['md5key'] = '翻訳ハッシュキー';
$string['nohash'] = '翻訳ハッシュキーが見つかりませんでした。';
$string['notranslation'] = '翻訳が見つかりませんでした。';
$string['old'] = '古いコンテンツ';
$string['pluginname'] = 'コンテンツ翻訳';
$string['privacy:metadata'] = 'コンテンツ翻訳プラグインはいかなる個人データも保存しません。';
$string['rawhtml'] = 'オリジナルHTML';
$string['rawtext'] = 'オリジナルコンテンツ';
$string['staletranslation'] = '翻訳は別のソーステキストに基づいて作成されました。翻訳を更新してください。';
$string['startinlinetranslation'] = 'インライン翻訳を開始する';
$string['stopinlinetranslation'] = 'インライン翻訳を終了する';
$string['substitutetext'] = '翻訳済みコンテンツ';
$string['targetlanguage'] = '翻訳言語';
$string['translate_good'] = '翻訳 - 翻訳は最新版です';
$string['translate_none'] = '翻訳 - 翻訳は存在しません';
$string['translate_stale'] = '翻訳 - 翻訳の更新が必要です';
$string['translatedby'] = '翻訳者';
$string['translation'] = '翻訳';
$string['translationalreadyexists'] = '翻訳を保存できません。言語「 {$a} 」の翻訳はすでに存在します。';
$string['translationdetails'] = '翻訳詳細';
$string['translationid'] = '翻訳ID';
$string['translationissues'] = '翻訳問題点';
$string['translationissuesincoursemissing'] = 'このコースの未翻訳';
$string['translationissuesincoursestale'] = 'このコースの旧翻訳';
$string['translationissuesinpagemissing'] = 'このページの未翻訳';
$string['translationissuesinpagemissingall'] = 'すべての未翻訳';
$string['translationissuesinpagestale'] = 'このページの旧翻訳';
$string['translationissuesinpagestaleall'] = 'すべての旧翻訳';
$string['translations'] = '翻訳';
$string['translations:bulkdeletetranslations'] = '翻訳を一括削除する';
$string['translations:deletetranslations'] = '翻訳を削除する';
$string['translations:editsitedefaulttranslations'] = 'サイトデフォルト言語翻訳を編集する';
$string['translations:edittranslationhashkeys'] = 'ハッシュキーを編集する';
$string['translations:edittranslations'] = '翻訳を編集する';
$string['untranslatedpages'] = '未翻訳のままにするページ';
$string['untranslatedpages_desc'] = '1行あたり1件を入力してください。';
$string['url'] = 'ページ';
$string['userid'] = 'ユーザID';
