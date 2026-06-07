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
 * Strings for component 'local_maintenance_livecheck', language 'ja', version '4.4'.
 *
 * @package     local_maintenance_livecheck
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'メンテナンスモード (ライブチェック)';
$string['privacy:metadata'] = 'メンテナンスモード (ライブチェック) プラグインはMoodleユーザに拡張機能を提供しますが、いかなる個人データも保存しません。';
$string['setting_advancedsettingsheading'] = '高度な設定';
$string['setting_backoff'] = 'ライブチェック保留時間';
$string['setting_backoff_desc'] = 'あなたはこの設定でユーザのブラウザがチェックを実行しない保留時間 (秒) を設定できます。これはサーバ側の負荷を軽減するために使用できます。以下、例を用いて説明します: メンテナンスモードを常に10分前にスケジュールおよびライブチェック間隔を60秒に設定している場合、ライブチェック保留時間を120秒に設定できます。この場合、ユーザのブラウザはページ読込みから180秒後に最初のライブチェックを実行します。そのため、最悪の場合、メンテナンスモードが開始される7分前にユーザに通知されます。';
$string['setting_checkinterval'] = 'ライブチェック間隔';
$string['setting_checkinterval_desc'] = 'あなたはこの設定でメンテナンスモードがまもなく有効になるか、またはその間に有効になったかどうかをユーザのブラウザがチェックする間隔 (秒) を設定できます。仮にこのチェックがサーバ側で非常に軽量であった場合でも、短い間隔は大量の同時アクティブユーザとともにあなたのサーバに認識可能な追加負荷を発生させる可能性があるため、本当に短い間隔には注意してください。通常のMoodleセットアップではデフォルト設定で問題ありません。';
$string['setting_enable'] = 'ライブチェックを有効にする';
$string['setting_enable_desc'] = 'あなたはこの設定でメンテナンスのお知らせのライブチェックを有効にできます。ライブチェックが有効にされていない限り、メンテナンスのお知らせはページが完全に読み込まれた場合のみ表示されます。';
$string['setting_generalfunctionalityheading'] = '一般機能';
$string['setting_livecheckend'] = 'ライブチェック終了時間';
$string['setting_livecheckend_desc'] = 'あなたはこれら2つの設定でライブチェックが実行されるデイタイム (サーバ時間に関連する) を制御できます。両方の設定を0:00に設定した場合、ライブチェックは1日中実行されます。しかし、あなたが定義された検査時間帯の間のみ常にメンテナンスモードを有効にすることが確実な場合、ライブチェックをこの検査時間帯に限定することでそれ以外の時間帯のサーバ側の負荷を軽減できます。';
$string['setting_livecheckstart'] = 'ライブチェック開始時間';
$string['setting_livecheckweekdays'] = 'ライブチェック曜日';
$string['setting_livecheckweekdays_desc'] = 'あなたはこの設定でライブチェックを実行する曜日を制御できます。デフォルトではすべての曜日が有効にされています。しかし、週末または特定の日にメンテナンスモードを有効にしないことが確実な場合、これらの曜日を無効にしてサーバ側の負荷を軽減できます。';
