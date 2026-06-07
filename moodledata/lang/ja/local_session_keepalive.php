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
 * Strings for component 'local_session_keepalive', language 'ja', version '4.4'.
 *
 * @package     local_session_keepalive
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'セッションキープアライブ';
$string['privacy:metadata'] = 'セッションキープアライブプラグインはMoodleユーザに拡張機能を提供しますが、いかなる個人データも保存しません。';
$string['setting_advancedsettingsheading'] = '高度な設定';
$string['setting_enable'] = 'セッションキープアライブを有効にする';
$string['setting_enable_desc'] = 'あなたはこの設定でセッションキープアライブを有効にできます。セッションキープアライブが有効にされていない限り、このプラグインは何もしないため、ユーザセッションは通常通り期限切れとなります。これはユーザセッションの有効期限が切れた後にサーバに送信されたユーザ入力が失われることを意味します。この機能を有効にした場合、プラグインは必要な限りセッションを維持します。';
$string['setting_generalfunctionalityheading'] = '一般機能';
$string['setting_keepaliveend'] = 'キープアライブ終了時間';
$string['setting_keepaliveend_desc'] = 'あなたはこの2つの設定でセッションキープアライブを有効にする日中 (サーバ時間に関連) を制御できます。あなたが両方の設定を0:00に設定した場合、セッションキープアライブは終日有効となります。しかし、セッションキープアライブが必要な時間帯が決まっている場合、その時間帯にセッションキープアライブを制限することでそれ以外の時間帯のサーバ側の負荷を軽減できます。';
$string['setting_keepaliveinterval'] = 'キープアライブ間隔';
$string['setting_keepaliveinterval_desc'] = 'あなたはこの設定でユーザのブラウザが未送信のユーザ入力をチェックおよび必要であればセッションを維持する間隔 (分単位) を設定できます。このリクエストがサーバ側で非常に軽量である場合でも、不必要に短い間隔の設定は大量の同時アクティブユーザと共にあなたのサーバに認識可能な追加負荷を発生させる可能性があるため、必要以上に短い間隔を設定すべきではありません。通常のMoodleセットアップではデフォルト設定で問題ありません。<br>
この間隔は {$a->page} 設定ページで設定されたセッションタイムアウトの半分に設定するのが最適です (現在 {$a->minutes} 分に設定済み)。例: セッションタイムアウトが120分に設定されている場合、キープアライブ時間を60分に設定します。ユーザのブラウザはページ読み込みの60分後に最初のキープアライブリクエストを実行します。これはセッションが終了するまでにまだ十分な時間があります。';
$string['setting_keepalivestart'] = 'キープアライブ開始時間';
$string['setting_keepalivetimeoutwarningnote'] = '注意: Moodleコアではセッションの有効期間が終了する前にユーザにセッションを延長する可能性を示すポップアップを表示します。このリードタイムは {$a->page} ページのsessiontimeoutwarningで設定できます。このプラグインはあなたが設定されたタイムアウト警告 (現在 {$a->minutes}分に設定済み) よりもかなり低い値を設定する限り、このコア機能とうまく共存できます。';
$string['setting_keepaliveweekdays'] = 'キープアライブ平日';
$string['setting_keepaliveweekdays_desc'] = 'あなたはこの設定でセッションキープアライブを有効にする平日をコントロールできます。デフォルトではすべての平日が有効にされています。しかし、週末または特定の営業日にセッションキープアライブが必要ではないことが確実である場合、平日のセッションキープアライブを無効にしてサーバ側の負荷を軽減できます。';
