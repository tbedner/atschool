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
 * Strings for component 'factor_grace', language 'ja', version '4.4'.
 *
 * @package     factor_grace
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['info'] = '指定された期間、他の要素なしでログインを許可します。';
$string['pluginname'] = '猶予期間';
$string['preferences'] = 'ユーザプレファレンス';
$string['privacy:metadata'] = '猶予期間要素プラグインはいかなる個人データも保存しません。';
$string['redirectsetup'] = 'あなたは次に進む前に多要素認証のセットアップを完了する必要があります。';
$string['revokeexpiredfactors'] = '期限切れグレースモード要素を取り消す';
$string['settings:customwarning'] = '警告バナーコンテンツ';
$string['settings:customwarning_help'] = 'ここにコンテンツを追加して猶予警告通知をカスタムHTMLコンテンツに置き換えます。テキストに {timeremaining} を追加した場合、ユーザの現在の猶予時間に置き換えられます。そして {setuplink} はユーザの設定ページのURLに置き換えられます。';
$string['settings:forcesetup'] = '要素セットアップを強制する';
$string['settings:forcesetup_help'] = '猶予モード期間が終了した場合、ユーザを強制的にプレファレンスページに移動させて多要素認証を設定させます。この設定を無効にした場合、猶予期間終了後にユーザは認証できなくなります。';
$string['settings:graceperiod'] = '猶予期間';
$string['settings:graceperiod_help'] = '設定および有効化された要素なしでユーザがサイトにアクセスできる期間です。';
$string['settings:ignorelist'] = '無視された要素';
$string['settings:ignorelist_help'] = '猶予はユーザが多要素認証で認証するために使用できる他の要素がある場合、ポイントを与えません。猶予はポイントを与えるかどうかを決定する際にここにあるどの要素もカウントしません。これにより猶予はメールのような別の要素が設定またはシステムの問題に悩まされている場合、認証を許可できます。';
$string['setupfactors'] = '現在あなたは猶予期間であり、猶予期間終了後にログインするための認証要素が十分に設定されていない可能性があります。
 {$a->url} にアクセスしてあなたの認証ステータスを確認した後、さらに認証要素を設定してください。あなたの猶予期間は {$a->time} で終了します。';
$string['summarycondition'] = 'は猶予期間中です。';
