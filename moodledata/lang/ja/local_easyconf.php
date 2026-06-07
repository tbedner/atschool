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
 * Strings for component 'local_easyconf', language 'ja', version '4.4'.
 *
 * @package     local_easyconf
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cli_run'] = 'CLI経由でプラグインlocal_easyconfを実行中 ...';
$string['configuration'] = '設定';
$string['configuration_descr'] = 'ここにあなたの設定を有効なYAMLで入力してください。';
$string['configuration_error'] = '設定にエラーがあります。';
$string['configuration_field_error'] = '現時点ではこのテキストフィールドの設定が使用されます。しかし、これは有効なYAMLではないため、適用はできません。';
$string['configuration_field_ok'] = '現時点ではこのテキストフィールドの設定が使用されます。これは有効なYAMLです。';
$string['configuration_file_error'] = '現時点ではconfiguration.ymlファイルの設定が使用されます。しかし、これは有効なYAMLではないため、適用はできません。';
$string['configuration_file_ok'] = '現時点ではconfiguration.ymlファイルの設定が使用されます。これは有効なYAMLです。';
$string['configuration_text'] = '設定はテキストフィールドまたはconfiguration.ymlと呼ばれるファイルに入力できます。どちらの場合も有効なYAMLです。configuration.yml.sameファイルに例があります。テキストフィールドはconfiguration.ymlファイルが存在しない場合のみ表示されます。';
$string['db_read_error'] = 'データベース読み込み中: {$a->sql}... エラー';
$string['db_write_error'] = 'データベース書き込み中: {$a->sql}... エラー';
$string['disabled_text'] = 'CLI経由でプラグインを実行するオプションは無効にされています。';
$string['easyconf:execute'] = 'プラグインを実行する';
$string['enabled'] = 'CLI経由での実行を許可する';
$string['enabled_descr'] = '通常のcronjobがCLIスクリプトの実行をトリガする場合、これを使用してCLIスクリプトを (一時的に) 無効にできます。';
$string['enabled_text'] = 'CLI経由でプラグインを実行するオプションが有効にされています。';
$string['execute'] = '実行';
$string['install_phpyamlrequired'] = 'local_easyconfにはPHP YAMLライブラリのインストールが必要です。';
$string['no'] = 'No';
$string['no_permission'] = 'このプラグインを実行するパーミッションがありません。終了します。';
$string['pluginname'] = '簡単設定';
$string['privacy:null_reason'] = 'このプラグインはいかなる個人データも保存しません。';
$string['run_error'] = 'local_easyconfの実行中にエラーが発生しました。';
$string['run_success'] = 'local_easyconfが正常に実行を終了しました。';
$string['save'] = '変更を保存する';
$string['set'] = '設定';
$string['set_absent'] = '{$a->condition} が存在しないため {$a->table} での削除を無視します ...';
$string['set_delete'] = '{$a->table} で {$a->condition} のエントリを削除します ...';
$string['set_insert'] = '{$a->table} に挿入します: {$a->entry}...';
$string['set_nooverwrite'] = '{$a->table} を無視します: {$a->condition} のエントリはすでに存在および「nooverwrite」が有効です ...';
$string['set_update'] = '{$a->condition} に対して {$a->table} で更新します: {$a->entry} ...';
$string['seterror'] = 'エラー';
$string['setsuccess'] = '成功';
$string['settings'] = '設定';
$string['yaml_error'] = '有効なYAMLがありません。';
$string['yes'] = 'Yes';
