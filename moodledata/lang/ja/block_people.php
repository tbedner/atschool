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
 * Strings for component 'block_people', language 'ja', version '4.4'.
 *
 * @package     block_people
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['noparticipantslist'] = 'このコースでは参加者リストの閲覧は禁止されています。';
$string['participantslist'] = '参加者リストを表示する';
$string['people:addinstance'] = '新しい人ブロックを追加する';
$string['people:myaddinstance'] = '新しい人ブロックをダッシュボードに追加する';
$string['pluginname'] = '人';
$string['privacy:metadata'] = '人プラグインはMoodleユーザに拡張機能を提供しますが、いかなる個人データも保存しません。';
$string['resetvisibilityerror'] = 'データベーステーブルの更新に問題が発生しました ...<br/> 「可視性をリセットする」設定がリセットされました。';
$string['resetvisibilitysuccess'] = '成功! すべての「block_people」インスタンスが (再度) 表示されています。<br/> 「可視性をリセットする」設定がリセットされました。';
$string['setting_hideblock'] = 'ブロックを非表示にする';
$string['setting_hideblock_desc'] = 'この設定を有効にした場合、ユーザはブロックを非表示にできます。<br/>
重要なお知らせ:<br/>
この設定を無効にした場合、ブロックメニューアイテムの表示/非表示が完全に削除されます。つまり、ユーザはこのブロックを非表示にできなくなりますが、逆にすでに非表示にされているブロックも表示できなくなります。あなたがこの機能を有効にしたい場合、以下の関数によるすべての 「block_people」インスタンス可視性のリセットをご検討ください。';
$string['setting_hideblockheading'] = 'ブロックを非表示にする';
$string['setting_linkavatar'] = 'アバタにリンクする';
$string['setting_linkavatar_desc'] = 'この設定を有効にした場合、教師のユーザページへのリンクが教師のアバタに追加されます。このリンクはユーザがユーザプロファイルの閲覧を許可されている場合のみ追加されます。';
$string['setting_linkingheading'] = 'リンク';
$string['setting_linkmessaging'] = 'メッセージングにリンクする';
$string['setting_linkmessaging_desc'] = 'この設定を有効にした場合、教師の氏名の下に教師のメッセージングページへのリンクが追加されます。このリンクはユーザが教師へのメッセージを許可されている場合のみ追加されます。';
$string['setting_linkname'] = 'リンク名';
$string['setting_linkname_desc'] = 'この設定を有効にした場合、教師のユーザページへのリンクが教師の氏名に追加されます。このリンクはユーザがユーザプロファイルの閲覧を許可されている場合のみ追加されます。';
$string['setting_linkparticipantspage'] = '参加者ページにリンクを表示する';
$string['setting_linkparticipantspage_desc'] = 'この設定を有効にした場合、コースの参加者ページへのリンクがブロック内に表示されます。';
$string['setting_multipleroles'] = '複数ロールを表示する';
$string['setting_multipleroles_desc'] = 'あなたはこの設定で上で設定された複数ロールを持つユーザがこのブロックに1回表示されるか複数回表示されるかコントロールできます。この設定を無効にした場合、ユーザはグローバルロールの並べ替え順に従って最初に持つロールのみ一覧表示されます。この設定を有効にした場合、ユーザはそれぞれのロールの中で一覧表示されます。';
$string['setting_participantspageheading'] = '参加者ページ';
$string['setting_resetvisibility'] = '可視性をリセットする';
$string['setting_resetvisibility_desc'] = 'この設定を有効にした場合、すべての「block_people」インスタンスが (再度) 表示されます。<br/>
注意: <br/>
このオプションを保存した場合、可視性をリセットするためのデータベース操作がトリガされます。そして、このチェックボックスは再度チェックされなくなります。次にこの機能を有効にして保存した場合、可視性をリセットするためのデータベース操作が再びトリガされます';
$string['setting_roles'] = 'これらのロールを表示する';
$string['setting_roles_desc'] = 'あなたはこの設定でこのブロックに表示されるユーザをコントロールできます。ユーザがこのブロックに表示されるにはコース内で少なくとも1つのロールを持つ必要があります。';
$string['setting_rolesheading'] = 'ロール';
