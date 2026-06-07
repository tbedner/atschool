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
 * Strings for component 'report_extendedlog', language 'ja', version '4.4'.
 *
 * @package     report_extendedlog
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['eventreportviewed'] = '拡張ログ検索レポートを表示しました';
$string['extendedlog:view'] = '拡張ログ検索レポートを表示する';
$string['filter_category'] = 'コースカテゴリ';
$string['filter_category_all'] = 'すべてのコースカテゴリ';
$string['filter_category_options'] = '検索対象';
$string['filter_category_options_category'] = '指定したコースカテゴリ';
$string['filter_category_options_courses'] = '指定したコースカテゴリとその配下のコースカテゴリとコースとコースモジュール';
$string['filter_category_options_subcategories'] = '指定したコースカテゴリとその配下のコースカテゴリ';
$string['filter_component'] = 'コンポーネント';
$string['filter_component_all'] = 'すべてのコンポーネント';
$string['filter_component_core'] = 'コア (core)';
$string['filter_component_grouptemplate'] = '{$a->typedisplaynameplural} ({$a->typename})';
$string['filter_component_template'] = '{$a->displayname} ({$a->name})';
$string['filter_course'] = 'コース';
$string['filter_course_all'] = 'すべてのコース';
$string['filter_course_template'] = '{$a->fullname} ({$a->shortname})';
$string['filter_crud'] = 'アクション';
$string['filter_edulevel'] = '教育レベル';
$string['filter_event'] = 'イベント';
$string['filter_event_all'] = 'すべてのイベント';
$string['filter_event_core'] = 'コアイベント (core)';
$string['filter_event_grouptemplate'] = '{$a->typedisplayname} "{$a->plugindisplayname}" ({$a->pluginname})';
$string['filter_event_template'] = '{$a->displayname} ({$a->name})';
$string['filter_ip4'] = 'IPv4アドレス';
$string['filter_ip4_help'] = '一部ないし完全なIPアドレスを指定してください。
例:

* 192.168.10.1
* 192.168.
* 231.3.56.10-20
* 192.168.10.1,192.168.,231.3.56.10-20';
$string['filter_ip6'] = 'IPv6アドレス';
$string['filter_ip6_help'] = '完全なIPアドレスをカンマ区切りで羅列してください。';
$string['filter_objectid'] = 'オブジェクトID';
$string['filter_objectid_error'] = '整数値を指定してください';
$string['filter_objecttable'] = 'オブジェクトテーブル';
$string['filter_objecttable_all'] = 'すべてのテーブル';
$string['filter_origin'] = 'オリジン';
$string['filter_origin_cli'] = 'コマンドラインインタフェース';
$string['filter_origin_web'] = 'Webインタフェース';
$string['filter_relateduser'] = '影響を受けたユーザ';
$string['filter_timecreatedafter'] = '期間の開始日時';
$string['filter_timecreatedbefore'] = '期間の終了日時';
$string['filter_user'] = 'ユーザ';
$string['filter_user_all'] = 'すべてのユーザ';
$string['filter_useremail'] = 'ユーザのメールアドレスの一部';
$string['filterheader'] = 'フィルタ';
$string['logstore'] = 'ログストア';
$string['navigationnode'] = '拡張ログ検索';
$string['notificationhighload'] = 'このレポートでは、最適化されていないデータベース クエリを使用します。時間がかかり、データベースの負荷が高くなる可能性があります。<br/>クエリを高速化するには、期間を指定することを強くお勧めします。';
$string['pluginname'] = '拡張ログ検索';
$string['privacy:metadata'] = 'The plugin does not store any personal data.';
$string['showlogs'] = 'これらのログを取得する';
