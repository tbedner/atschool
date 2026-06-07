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
 * Strings for component 'ltiservice_gradebookservices', language 'ja', version '4.4'.
 *
 * @package     ltiservice_gradebookservices
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysgs'] = 'このサービスを評定同期およびカラム管理に使用する';
$string['grade_synchronization'] = 'IMS LTI課題および評定サービス';
$string['grade_synchronization_help'] = '基本アウトカムサービスの代わりにIMS LTI課題および評定サービスを評定同期に使用するかどうか決定します。

* **このサービスを使用しない** - 基本アウトカム機能および設定を使用します。
* **このサービスを評定同期にのみ使用する** - サービスは既存の評定表カラムに評点を追加しますが、新しいカラムを作成することはできません。
* **このサービスを評定同期およびカラム管理に使用する** - サービスは評定表カラムを作成および更新して評定を管理することができます。';
$string['ltiservice_gradebookservices'] = 'IMS LTI課題および評定サービス';
$string['modulename'] = 'LTI評定';
$string['nevergs'] = 'このサービスを使用しない';
$string['partialgs'] = 'このサービスを評定同期にのみ使用する';
$string['pluginname'] = 'LTI課題および評定サービス';
$string['privacy:metadata:externalpurpose'] = 'この情報は外部LTIプロバイダに送信されます。';
$string['privacy:metadata:feedback'] = 'このLTI活動でユーザが取得したフィードバックです。';
$string['privacy:metadata:grade'] = 'MoodleのこのLTI活動でユーザが取得した評点です。';
$string['privacy:metadata:maxgrade'] = 'このLTI活動で到達できる最大評点です。';
$string['privacy:metadata:timemodified'] = '評点が更新された最終日時です。';
$string['privacy:metadata:userid'] = 'LTIコンシューマを使用するユーザのIDです。';
$string['taskcleanup'] = 'LTI課題および評定サービステーブルクリーンアップ';
