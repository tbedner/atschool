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
 * Strings for component 'repository_onedrive', language 'ja', version '4.4'.
 *
 * @package     repository_onedrive
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['access'] = 'アクセス';
$string['both'] = '内部および外部';
$string['cachedef_folder'] = 'システムアカウント内フォルダのOneDriveファイルID';
$string['configplugin'] = 'OneDriveプラグインを設定する';
$string['confirmimportskydrive'] = '本当にMicrosoft SkyDriveリポジトリからMicrosoft OneDriveリポジトリにすべてのファイルをインポートしますか? 以前と同じように動作させるにはインポートファイルのためにMicrosoft OneDriveリポジトリが設定されて動作している必要があります。警告: この処理を元に戻すことはできません!';
$string['defaultreturntype'] = 'デフォルト戻りタイプ';
$string['external'] = '外部 (リンクのみMoodleに保存されます)';
$string['fileoptions'] = 'ここではタイプおよび戻されるファイルのデフォルトを設定します。外部にリンクされているすべてのファイルが更新されるため、オーナがMoodleシステムアカウントになる点に留意してください。';
$string['importskydrivefiles'] = 'Microsoft SkyDriveリポジトリからファイルをインポートする';
$string['internal'] = '内部 (ファイルはMoodleに保存されます)';
$string['issuer'] = 'OAuth 2サービス';
$string['issuer_help'] = 'OneDrive APIと通信するよう設定されているOAuth 2サービスを選択してください。サービスが存在しない場合、あなたは作成する必要があります。';
$string['mysitenotfound'] = 'あなたは過去にOneDriveにログインしていません。Moodleで利用できる前にあなたは少なくとも1回OneDriveにログインする必要があります。';
$string['oauth2serviceslink'] = '<a href="{$a}" title="OAuth 2サービス設定へのリンク">OAuth 2サービス設定</a>';
$string['onedrive:view'] = 'OneDriveリポジトリを表示する';
$string['owner'] = 'オーナ: {$a}';
$string['pluginname'] = 'Microsoft OneDrive';
$string['privacy:metadata:repository_onedrive'] = 'Microsoft OneDriveリポジトリは一時的にアクセス権を保存します。また、ユーザデータをMoodleからリモートシステムに転送します。';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:itemid'] = 'Microsoft OneDriveの一時アクセス権アイテムIDです。';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:permissionid'] = 'Microsoft OneDriveの一時アクセス権パーミッションIDです。';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timecreated'] = 'Microsoft OneDriveの一時アクセス権作成日時です。';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:timemodified'] = 'Microsoft OneDriveの一時アクセス権修正日時です。';
$string['privacy:metadata:repository_onedrive:repository_onedrive_access:usermodified'] = 'Microsoft OneDriveの一時アクセス権を修正するユーザのIDです。';
$string['privacy:metadata:repository_onedrive:searchtext'] = 'Microsoft OneDriveリポジトリユーザ検索テキストクエリです。';
$string['removetempaccesstask'] = 'コントロールリンクから一時的に書き込み権を削除する';
$string['searchfor'] = '{$a} を探す';
$string['servicenotenabled'] = 'アクセスが設定されていません。';
$string['skydrivefilesexist'] = 'Microsoft SkyDriveリポジトリは有効ですが廃止されました。可能な限り早くファイルをSkyDriveからOneDriveリポジトリに移行してください。Moodle 4.4では移行できなくなります。';
$string['skydrivefilesimported'] = 'すべてのファイルがMicrosoft SkyDriveリポジトリからインポートされました。';
$string['skydrivefilesnotimported'] = 'いくつかのファイルはMicrosoft SkyDriveリポジトリからインポートできませんでした。';
$string['supportedreturntypes'] = 'サポートされるファイル';
