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
 * Strings for component 'enrol_coursecompleted', language 'ja', version '4.4'.
 *
 * @package     enrol_coursecompleted
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftercourse'] = '次のコース完了後: {$a}';
$string['cachedef_compcourses'] = 'コース完了登録キャッシュ';
$string['compcourse'] = '完了済みコース';
$string['compcourse_help'] = 'どのコースを完了する必要がありますか。';
$string['confirmbulkdeleteenrolment'] = '本当にこれらのユーザ登録を削除してもよろしいですか?';
$string['confirmbulkediteenrolment'] = '本当にこれらのユーザ登録を変更してもよろしいですか?';
$string['coursecompleted:config'] = '登録コース完了インスタンスを編集する';
$string['coursecompleted:enrolpast'] = '過去にコース完了したユーザを登録する';
$string['coursecompleted:manage'] = '登録済みユーザを管理する';
$string['coursecompleted:unenrol'] = 'コースからユーザを登録解除する';
$string['coursecompleted:unenrolself'] = 'コースから自分を登録解除する';
$string['customwelcome'] = 'カスタムウィルカムメッセージ';
$string['customwelcome_help'] = 'HTMLタグおよびmulti-langタグを含むプレインテキストまたはMoodleオートフォーマットでカスタムウェルカムメッセージを追加できます。メッセージには以下のプレースホルダを含めます。
* コース名 {$a->coursename}
* 完了コース名 {$a->completed}
* ユーザプロファイルページへのリンク {$a->profileurl}
* ユーザメールアドレス {$a->email}
* ユーザフルネーム {$a->fullname}';
$string['deleteselectedusers'] = '選択されたコース完了登録を削除する';
$string['editselectedusers'] = '選択されたコース完了登録を編集する';
$string['editusers'] = 'ユーザ登録を変更する';
$string['group'] = 'グループを保持する';
$string['group_help'] = '同じ名称のグループへのユーザ追加を試みます。';
$string['keepgroup'] = 'デフォルトグループ設定保持';
$string['keepgroup_help'] = 'デフォルトで同じ名称のグループへのユーザ追加を試みます。';
$string['pluginname'] = 'コース完了登録';
$string['pluginname_desc'] = 'コース完了登録プラグインはコース完了時点でコースへのアクセスを許可します。';
$string['privacy:metadata'] = 'コース完了登録プラグインはいかなる個人データも保存しません。';
$string['processexpirationstask'] = 'コース完了登録有効期限切れタスク';
$string['status'] = '有効';
$string['status_desc'] = 'デフォルトでコース完了による登録を許可する';
$string['status_help'] = 'この設定はコース完了登録が有効かどうか決定します。';
$string['status_link'] = 'enrol/coursecompleted';
$string['svglearnpath'] = '学習パスを表示する';
$string['svglearnpath_help'] = '可能性のある学習パスをSVGアイコンで表示します。';
$string['unenrolusers'] = 'ユーザを登録解除する';
$string['uponcompleting'] = 'コース {$a} 完了時';
$string['usersenrolled'] = '{$a} ユーザが登録されました。';
$string['welcome'] = 'コースウェルカムメッセージを送信する';
$string['welcome_help'] = '他のコース完了によりユーザがコース登録された場合、ウェルカムメッセージメールを送信できます。';
$string['welcometocourse'] = '{$a->coursename} へようこそ!

おめでとうございます!

{$a->completed} の完了により、あなたは自動的に次のコースに登録されました: {$a->coursename}';
$string['willbeenrolled'] = 'あなたがコース {$a} を完了した場合、このコースに登録されます。';
