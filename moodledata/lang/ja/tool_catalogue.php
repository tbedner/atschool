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
 * Strings for component 'tool_catalogue', language 'ja', version '4.4'.
 *
 * @package     tool_catalogue
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutthiscourse'] = 'このコースについて';
$string['aboutthisprogram'] = 'このプログラムについて';
$string['all'] = 'すべて';
$string['allavailablecourses'] = '全ての利用可能なコース';
$string['allowhtmltags'] = 'HTMLタグを許可する';
$string['aria:courseactions'] = 'コースアクション';
$string['cachedef_filters'] = '学習カタログの検索結果とフィルタ';
$string['catalogue'] = 'カタログ';
$string['catalogue:config'] = '学習カタログの設定';
$string['catalogueisdisabled'] = '学習カタログは無効です';
$string['cataloguesettings'] = 'プログラムとコースカタログの設定';
$string['categories'] = 'カテゴリ';
$string['categoriesdepthlimit'] = 'カテゴリ階層の最大数';
$string['categoriesdepthlimit_desc'] = 'カテゴリセレクタ内のカテゴリ階層の最大数です。より深いレベルに配置されたコースも、検索結果には表示されます。';
$string['categorieslimit'] = '同じ階層に作成できるカテゴリの最大数';
$string['categorieslimit_desc'] = 'カテゴリセレクタ内で、同じ階層に作成できるカテゴリの最大数です。カテゴリは、コース管理ページで定義された順序で表示されます。同じ階層にカテゴリが最大数を超えて存在する場合、カテゴリはセレクタに表示されませんが、すべてのコースは検索結果で表示されます。';
$string['certifications'] = '認定';
$string['certificationstatuscertified'] = '認定 \'<strong>{$a->name}</strong>\' が完了しました。';
$string['certificationstatuscertifiedwithdate'] = '認定 \'<strong>{$a->name}</strong>\' が完了しました。\'<strong>{$a->date}</strong>\' に期限切れとなります。';
$string['certificationstatusexpired'] = '認定 \'<strong>{$a->name}</strong>\' の有効期限は {$a->date} です。';
$string['certificationstatusopen'] = '認定 \'<strong>{$a->name}</strong>\' は無期限です。';
$string['certificationstatusopenwithdate'] = '認定 \'<strong>{$a->name}</strong>\'を取得するためには、\'<strong>{$a->date}</strong>\' までにこのプログラムを終了させてください。';
$string['certificationstatusoverdue'] = '認証 \'<strong>{$a->name}</strong>\' の期限は \'<strong>{$a->date}</strong>\' でした。';
$string['clearall'] = '全てクリアにする';
$string['complete'] = '完了';
$string['completeatleast'] = '少なくとも {$a}を完了する';
$string['coursecoverhelp'] = 'このコースは\'{$a}\'プログラムの一部です。';
$string['coursecoverhelpmultiprogram'] = 'このコースはいくつかのプログラムに含まれています。';
$string['coursecoverhelptext'] = '<ul><li>これは、より大きなプログラムの中の1つのコースに過ぎません</li><li>このコースを修了した後に、新しいコースが受講できる可能性があります</li></ul>。';
$string['coursedisplayduelimit'] = 'コースの残り日数を表示';
$string['coursedisplayduelimit_desc'] = 'コース名の隣に終了日のリマインダーが表示される日数です。例えば、14と設定した場合、コースが終了する14日前からリマインダーが表示されます。多くの異なる終了日がある場合、システムは次に近い終了日を評価します。この機能を無効にするには0を設定してください。';
$string['coursefiles'] = 'コースファイル';
$string['courseimage_help'] = 'コースイメージ';
$string['coursenotavailable'] = '利用できないコース';
$string['courses'] = 'コース';
$string['coursesperpage_frontpage'] = '1ページあたりのコース数、サイトホームページ';
$string['coursesperpage_frontpage_desc'] = 'サイトホーム項目の設定に「コース一覧」が含まれている場合に、サイトホームページに表示するコースの数';
$string['coursesperpage_main'] = '1ページあたりのコース数、メインカタログページ';
$string['coursesperpage_main_desc'] = 'カテゴリが選択される前、検索クエリが入力される前、およびフィルターが適用される前に、メインカタログページで表示されるコースの数';
$string['coursesperpage_search'] = '検索結果で1ページあたりに表示されるコースの数';
$string['coursesperpage_search_desc'] = 'コース検索結果やカテゴリ選択時に表示されるコースの数';
$string['dates'] = '日付';
$string['daysleft'] = '残り {$a}日';
$string['defaultsortorder'] = 'デフォルトの並び順';
$string['display'] = '表示';
$string['displaycourseinfomodal'] = 'コース情報モーダルを表示する';
$string['displayfieldlabel'] = 'フィールド名を表示する';
$string['displayfields_desc'] = 'すべてのフィールドを選択し、フィルターとして表示する必要があるものを適切な順序に並べてください。カスタムフィールドの種類によっては、フィルターとして使用できないものもあります。<br>上記の表での変更は自動的に保存されます。';
$string['displayfields_list'] = '学習カタログの「リスト」（詳細）ビューで表示するフィールド';
$string['displayfields_tiles'] = '学習カタログの「タイル」（コンパクト）ビューで表示するフィールド';
$string['displayfieldscard_desc'] = 'コースカードに表示するすべてのフィールドを選択し、適切な順序に並べてください。<br>上記の表での変更は自動的に保存されます。';
$string['displayforeverybody'] = 'すべてのユーザに表示する';
$string['displayfornotadmin'] = '管理者以外のユーザにのみ表示する';
$string['displayforstudentsandguests'] = 'ゲストアクセス時・学生にのみ表示する';
$string['displaynever'] = '表示しない';
$string['displayprogramcoverpage'] = 'プログラムカバーページを表示する';
$string['displaysummaryasis'] = 'そのまま表示';
$string['displaysummarynohtml'] = 'HTMLなしで表示';
$string['displaysummarynone'] = '表示しない';
$string['dontshowagain'] = '二度とこのメッセージを表示しない';
$string['duedate'] = '終了日順でソート';
$string['duedateinfo'] = '期限は1日以内';
$string['duedateinfodays'] = '期限は {$a} 日以内';
$string['duedatex'] = '<strong>締切日：</strong> {$a}';
$string['editlabel'] = 'ラベルの編集';
$string['enablelearningcatalogue'] = '学習カタログを有効にする';
$string['enablelearningcatalogue_desc'] = 'この設定を有効にすると、すべてのユーザがメインナビゲーションの「カタログ」にアクセスできるようになります。これにより、ユーザはコースを簡単に見つけ、フィルターを適用し、登録できるようになります。Moodle Workplaceのカタログは、すべてのユーザに対して標準のコースページを置き換えます。
<br><br>
詳細については、<a href="{$a}">ドキュメントページ</a> を参照してください。';
$string['enddate'] = '終了日';
$string['enddatex'] = '<strong>終了日：</strong> {$a}';
$string['errornopermissionviewcoursecover'] = 'コースカバーページの閲覧権限がありません。';
$string['errornopermissionviewprogram'] = 'プログラムの閲覧権限がありません';
$string['featuredcustomfield'] = '注目のカスタムフィールド';
$string['featuredcustomfield_desc'] = '選択したカスタムフィールドがコース内で「チェック済み」とマークされている場合、そのコースはカタログのメインページで注目コースとして表示されます。';
$string['featuredlearning'] = '注目の学習コンテンツ';
$string['featuredlearningsectionsummary'] = '注目セクションの説明';
$string['featuredlearningsectionsummary_desc'] = 'このテキストは、カタログのメインページにある「注目」セクションで、注目コースとともに表示されます。';
$string['featuredlearningsectiontitle'] = '注目セクションのタイトル';
$string['featuredlearningsectiontitle_default'] = '注目';
$string['featuredlearningsectiontitle_desc'] = 'カタログ内の「注目」セクションのタイトルを上書きします。空白のままにすると、デフォルトのタイトル「注目」が表示されます。';
$string['fieldlabel'] = 'フィールド名';
$string['fieldonlyvisibleincatalogue'] = 'このフィールドは、コース情報ページおよび登録ページで表示が制限されていますが、学習カタログで利用可能にすることはできます。ここで有効にすると、すべてのユーザに表示されます。';
$string['filterfields'] = '学習カタログのフィルターに表示するフィールド';
$string['hiddenfromlearners'] = '学習者から秘匿';
$string['htmltagsall'] = 'すべてのHTMLタグを許可';
$string['htmltagsnone'] = 'すべてのHTMLタグを削除';
$string['htmltagssafe'] = '安全なHTMLタグのみ許可';
$string['incomplete'] = '未完了';
$string['information'] = '詳細情報';
$string['iunderstand'] = 'わかりました';
$string['lastaccess'] = '最終アクセスでソート';
$string['learningcataloguesettings'] = '学習カタログ設定';
$string['moreinfo'] = 'さらに詳しく';
$string['mycourses'] = 'マイコース';
$string['name'] = '名前でソート';
$string['noresultsfor'] = '\'{$a}\'に該当する検索結果は見つかりませんでした。';
$string['notavailableunless'] = '<strong>{$a}</strong>\' が利用可能でなければ利用不可';
$string['notavailableuntil'] = '\'{$a}\' が完了するまで利用不可';
$string['notnow'] = '後で';
$string['notset'] = '未設定';
$string['overdue'] = '期限切れ';
$string['pagealastpage'] = 'ページ {$a}、最後のページ';
$string['pageamorepagesahead'] = 'ページ {$a}、さらに続きがあります';
$string['pagination'] = '';
$string['pluginname'] = '学習カタログ';
$string['privacy:metadata:preference:tool_catalogue_collapse_recently_accessed_courses'] = '「最近アクセスしたコース」セクションを折りたたむかどうか';
$string['privacy:metadata:preference:tool_catalogue_hide_program_cover_help'] = 'プログラムカバーのヘルプを表示するかどうか';
$string['privacy:metadata:preference:tool_catalogue_my_courses_filter'] = 'プログラムとコースを、すべて/コース/プログラム/完了/未完了でフィルタリングするかどうか';
$string['privacy:metadata:preference:tool_catalogue_my_courses_sort'] = 'プログラムとコースを、名前/期限/最終アクセス順にソートするかどうか';
$string['privacy:metadata:showprogramcoverhelp'] = 'プログラムカバーのヘルプを表示するかどうか';
$string['privacy:request:preference:set'] = '設定値 \'{$a->name}\' は \'{$a->value}\'';
$string['proceedtocourse'] = 'コースコンテンツに進む';
$string['proceedtoprogram'] = 'プログラム内容に進む';
$string['program'] = 'プログラム';
$string['programdisplayduelimit'] = 'プログラム締め切りまでの残り日数を表示';
$string['programdisplayduelimit_desc'] = 'プログラム名の横に締切日のリマインダーが表示される日数です。例えば、14を設定した場合、リマインダーはプログラムが期限に達する前の14日間に表示されます。この機能を無効にするには、0を設定します。';
$string['programempty'] = 'このプログラムにコースはありません';
$string['programhelptext'] = '<ul><li>プログラムには様々なコースが含まれています。</li><li>各コースを(1つ以上またはすべて)完了するとプログラム完了となります。</li></ul>';
$string['programhelptitle'] = 'プログラムとは？';
$string['programimage_help'] = 'プログラムイメージ';
$string['programlink'] = '"{$a}" の詳細を見る';
$string['programlinksingle'] = 'プログラムの詳細を見る';
$string['programs'] = 'プログラム';
$string['programstructure'] = 'プログラム構成';
$string['progress'] = '{$a}% 完了';
$string['progresscompleted'] = ' {$a->total} の {$a->completed} 完了';
$string['recentlyaccessedcourses'] = '最近アクセスしたコース';
$string['reg_wpcatalogueashome'] = 'カタログが有効化され、サイトのホームページ（{$a}）に追加されました。';
$string['reg_wpcatalogueenabled'] = 'カタログが有効 ({$a})';
$string['reg_wpcataloguepublic'] = 'カタログが有効化され、ゲストに公開されています（{$a}）。';
$string['reindextaskname'] = 'カタログ用のコースの定期的な再インデックス';
$string['resultsfor'] = '\'{$a->keywords}\' の検索結果: {$a->count} 件';
$string['safehtmltags'] = '概要およびテキストフィールドで使用可能な安全なHTMLタグ';
$string['safehtmltags_desc'] = '学習カタログでコース概要やカスタムフィールドを表示する際に、保持するHTMLタグのリストです。カタログのレイアウトが崩れるのを防ぐため、リストに含まれていないタグはすべて削除されます。<br>また、コース概要にHTMLタグを使用する場合、「切り詰め（Truncate）」設定と正しく連携しない可能性があるため、ご注意ください。';
$string['searchfields'] = 'キーワード検索の対象となるフィールド';
$string['searchfields_desc'] = 'キーワードを検索するコースフィールドをすべて選択し、優先順位の順に並べてください。<br>上記の表での変更は自動的に保存されます。';
$string['searchmethod'] = 'コース検索方法';
$string['searchmethod_desc'] = 'コース検索に使用する方法を選択してください。一部の検索方法では、定期的な再インデックス処理や追加の設定が必要になる場合があります。';
$string['searchmethod_extended'] = '拡張検索';
$string['searchmethod_simple'] = '簡易検索';
$string['searchplaceholder'] = 'コース・プログラムを探す';
$string['selectenrolmentmethod'] = '登録方法の選択';
$string['showcataloguecoursecategory'] = 'コースカードにコースカテゴリを表示する';
$string['showcataloguecoursecategory_desc'] = 'コースカテゴリは「ダッシュボード」「マイコース」およびいくつかのブロックにあるすべてのコースカードに表示されます。';
$string['showcoursedates'] = 'コースモーダルにコースの日付を表示する';
$string['showcoursedates_desc'] = 'コース日程はコースモーダルおよびコース情報タブに表示されます。';
$string['showfeaturedsection'] = 'カタログに注目セクションを表示';
$string['showfeaturedsection_desc'] = '有効にすると、注目コースがカタログのメインページ上部に独立したセクションとして表示されます。';
$string['showmore'] = '{$a} を詳しく...';
$string['startdate'] = '開始日';
$string['startdatex'] = '<strong>開始日：</strong> {$a}';
$string['todo'] = 'To do：';
$string['trainers'] = 'トレーナー';
$string['truncatesummary'] = 'コース概要を切り詰める';
$string['truncatesummary_desc'] = 'コース概要を表示する際に表示される最大文字数を設定します。0に設定すると、サーバー側での切り詰めは行われません。ただし、表示時にCSSスタイルで概要を短縮することは可能です。<br>この設定は、サーバーからブラウザへ送信されるテキストを制御します。個々のフィールドを直接ブラウザ側で切り詰める場合は、カスタムCSSを使用することもできます。';
$string['trydifferentskeyword'] = '別のキーワードを試すか、フィルターの設定を変更してください。';
$string['xcourses'] = '{$a} コース';
