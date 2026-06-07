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
 * Strings for component 'repository_nextcloud', language 'ja', version '4.4'.
 *
 * @package     repository_nextcloud
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['both'] = '内部および外部';
$string['cannotconnect'] = 'ユーザを認証できませんでした。ログインしてファイルをアップロードしてください。';
$string['chooseissuer'] = 'イシュア';
$string['chooseissuer_help'] = '新しいイシュアを追加するには「サイト管理 / サーバ / OAuth 2サービス」にアクセスしてください。';
$string['configplugin'] = 'Nextcloudリポジトリ設定';
$string['configuration_exception'] = 'OAuth 2クライアント設定で発生したエラー: {$a}';
$string['contactadminwith'] = 'リクエストされた操作を実行できませんでした。これが頻繁に発生する場合、次の情報を添えてサイト管理者にご連絡ください:<br />「 {$a} 」';
$string['couldnotmove'] = 'リクエストされたファイルを {$a} フォルダに移動できませんでした。';
$string['defaultreturntype'] = 'デフォルト戻りタイプ';
$string['endpointnotdefined'] = 'エンドポイント {$a} が定義されていません。';
$string['external'] = '外部 (Moodleに保存されたリンクのみ)';
$string['externalpubliclinkwarning'] = '警告: このファイルは外部からアクセス可能になります。';
$string['filenotaccessed'] = 'リクエストされたファイルにアクセスできませんでした。あなたが有効なファイルにアクセスしているか、また正しいアカウントで認証されているかご確認ください。';
$string['fileoptions'] = 'ここで戻りファイルのタイプおよびデフォルトを設定することができます。外部にリンクされたすべてのファイルはMoodleシステムアカウントがオーナになるよう更新されることに留意してください。';
$string['foldername'] = 'すべてのアクセスコントロールリンクを保持するNextcloudユーザプライベートスペースのフォルダ名';
$string['foldername_help'] = 'ユーザが共有ファイルを確実に探せるよう共有ファイルは特定のフォルダに保存されます。

この設定ではフォルダ名を指定します。あなたのMoodleインスタンスに関連するフォルダ名の選択をお勧めします。';
$string['internal'] = '内部 (Moodleに保存されたファイル)';
$string['invalidresponse'] = '無効なサーバレスポンスです。';
$string['issuervalidation_invalid'] = '現在、{$a} イシュアは有効ですが、必要なすべてのエンドポイントを実装しているわけではありません。リポジトリは動作しません。';
$string['issuervalidation_valid'] = '現在、{$a} イシュアは有効です。';
$string['issuervalidation_without'] = 'あなたはまだOAuth 2イシュアとしてのNextcloudサーバを選択していません。';
$string['nextcloud'] = 'Nextcloud';
$string['nextcloud:view'] = 'Nextcloudを表示する';
$string['no_right_issuers'] = '必要なエンドポイントを実装している既存のイシュアはありません。適切なイシュアを登録してください。';
$string['noclientconnection'] = 'OAuthクライアントに接続できません。';
$string['notauthorized'] = 'あなたはこのリクエストを実行できるよう認証されていません。あなたが正しいアカウントで認証されていることをご確認ください。';
$string['oauth2serviceslink'] = '<a href="{$a}" title="OAuth 2サービス設定へのリンク">OAuth 2サービス設定</a>';
$string['pathnotcreated'] = 'システムアカウントにフォルダパス {$a} を作成できませんでした。';
$string['pluginname'] = 'Nextcloud';
$string['pluginname_help'] = 'Nextcloudリポジトリ';
$string['privacy:metadata'] = 'Nextcloudリポジトリプラグインはいかなる個人データも保存またはリモートシステムにユーザデータを転送しません。';
$string['request_exception'] = '{$a->instance} へのリクエストに失敗しました。 {$a->errormessage}';
$string['requestnotexecuted'] = 'リクエストを実行できませんでした。これが頻繁に発生する場合、サイト管理者にご連絡ください。';
$string['right_issuers'] = '次のイシュアは必要なエンドポイントを実装します: <br /> {$a}';
$string['supportedreturntypes'] = 'サポートされるファイル';
