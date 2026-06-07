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
 * Strings for component 'tool_coursedates', language 'ja', version '4.4'.
 *
 * @package     tool_coursedates
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['atleastonedate'] = 'あなたは更新する日付を少なくとも1つ設定する必要があります';
$string['autoenddate'] = '終了日を計算しますか?';
$string['autoenddate_default'] = '修正しない';
$string['autoenddate_help'] = 'Moodleはウィークリーフォーマットを使用するコースでセクション数に基づき終了日を計算できます。あなたはカテゴリレベルでこれを実施するかどうか選択できます。';
$string['autoenddate_off'] = '自動終了日を無効にする';
$string['autoenddate_on'] = '自動終了日を強制する';
$string['coursedates:setdates'] = 'カテゴリ内すべてのコースの開始日および終了日を設定します。';
$string['keependdates'] = '既存の終了日を保持する';
$string['pluginname'] = 'コース日付設定';
$string['privacy:metadata'] = 'コース日付設定プラグインはいかなる個人データも保存しません。';
$string['setdates'] = 'コース日付を設定する';
$string['setdatesinstruction'] = 'サブカテゴリを含むカテゴリ内すべてのコースの開始日および終了日を設定します。あなたのオプションを選択して「確認」をクリックしてください。Moodleはバックグラウンドですべての日付を設定する「アドホックタスク」を作成します。これにはcronが有効されている必要があります。';
$string['updatequeued'] = 'カテゴリ「 {$a} 」内すべてのコースを更新するためのアドホックタスクがキューに入れられました。次回cron実行時に処理されます。';
