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
 * Strings for component 'aiprovider_openrouter', language 'ja', version '4.4'.
 *
 * @package     aiprovider_openrouter
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:generate_image:endpoint'] = 'APIエンドポイント';
$string['action:generate_image:model'] = 'AIモデル';
$string['action:generate_image:model_desc'] = 'ユーザプロンプトからイメージを生成するために使用されるモデルです。';
$string['action:generate_text:endpoint'] = 'APIエンドポイント';
$string['action:generate_text:model'] = 'AIモデル';
$string['action:generate_text:model_desc'] = 'テキストレスポンスを生成するために使用されるモデルです。';
$string['action:generate_text:systeminstruction'] = 'システムインストラクション';
$string['action:generate_text:systeminstruction_desc'] = 'このインストラクションはユーザのプロンプトと共にAIモデルに送信されます。絶対に必要な場合を除き、このインストラクションの編集は推奨されません。';
$string['action:summarise_text:endpoint'] = 'APIエンドポイント';
$string['action:summarise_text:model'] = 'AIモデル';
$string['action:summarise_text:model_desc'] = '提供されたテキストを要約するために使用されるモデルです。';
$string['action:summarise_text:systeminstruction'] = 'システムインストラクション';
$string['action:summarise_text:systeminstruction_desc'] = 'このインストラクションはユーザのプロンプトと共にAIモデルに送信されます。絶対に必要な場合を除き、このインストラクションの編集は推奨されません。';
$string['apikey'] = 'OpenRouter APIキー';
$string['apikey_desc'] = '<a href="https://openrouter.ai/keys">OpenRouter</a>でAPI キーを生成した後、ここに貼り付けてリクエストを有効にしてください。このキーはあなたが以下で設定するモデルへのアクセス権限を持つ必要があります。';
$string['enableglobalratelimit'] = 'サイト全体のレート制限を設定する';
$string['enableglobalratelimit_desc'] = 'OpenRouter APIプロバイダが1時間ごとにサイト全体で受け取れるリクエスト数を制限します。';
$string['enableuserratelimit'] = 'ユーザレート制限を設定する';
$string['enableuserratelimit_desc'] = 'それぞれのユーザが1時間ごとにOpenRouter APIプロバイダに送信できるリクエスト数を制限します。';
$string['globalratelimit'] = 'サイト全体の最大リクエスト数';
$string['globalratelimit_desc'] = '1時間あたりに許可されるサイト全体のリクエスト数です。';
$string['globalratelimitexceeded'] = 'グローバルレート制限を超過しました。';
$string['httpreferer'] = 'HTTP-Refererヘッダ';
$string['httpreferer_desc'] = 'OpenRouterではリクエストにあなたのサイトの識別用HTTP-Refererヘッダを含める必要があります。次のような完全修飾URLを使用してください: https://example.com';
$string['invalidaspectratio'] = '無効なアスペクト比です: {$a}';
$string['pluginname'] = 'OpenRouter APIプロバイダ';
$string['privacy:metadata'] = 'OpenRouter APIプロバイダプラグインはいかなる個人データも保存しません。';
$string['privacy:metadata:aiprovider_openrouter:externalpurpose'] = 'この情報はレスポンスを生成するためにOpenRouter APIに送信されます。あなたのOpenRouterアカウント設定でこのデータの保存方法および保持期間が変更される場合があります。このプラグインでユーザデータが明示的にOpenRouterに送信されたり、Moodle LMSに保存されたりすることはありません。';
$string['privacy:metadata:aiprovider_openrouter:model'] = 'レスポンスを生成するために使用されるモデルです。';
$string['privacy:metadata:aiprovider_openrouter:numberimages'] = 'イメージ生成時にレスポンスで使用されるイメージ数です。';
$string['privacy:metadata:aiprovider_openrouter:prompttext'] = 'レスポンスを生成するために使用されるユーザ入力テキストプロンプトです。';
$string['privacy:metadata:aiprovider_openrouter:responseformat'] = 'イメージ生成時のレスポンスのフォーマットです。';
$string['userratelimit'] = 'ユーザあたりの最大リクエスト数';
$string['userratelimit_desc'] = '1時間あたりにユーザごとに許可されるリクエスト数です。';
$string['userratelimitexceeded'] = 'ユーザレート制限を超過しました。';
$string['xtitle'] = 'X-Titleヘッダ';
$string['xtitle_desc'] = '任意: X-Titleヘッダであなたのサイトのフレンドリネームを送信します。これはOpenRouterダッシュボードに表示されます。';
